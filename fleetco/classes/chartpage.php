<?php
class ChartPage extends RunnerPage
{
	
	/**
	 * show message block
	 */
	public $show_message_block = false;

	/**
	 * @constructor
	 */
	function __construct(&$params = "")
	{
		parent::__construct($params);
		
		$this->jsSettings['tableSettings'][ $this->tName ]['simpleSearchActive'] = $this->searchClauseObj->simpleSearchActive;
		$this->jsSettings['tableSettings'][ $this->tName ]['startMasterKeys'] = $this->getStartMasterKeys();
	}

	/**
	 * Set the page's session prefix
	 */
	protected function assignSessionPrefix()
	{
		if( $this->mode == CHART_DASHBOARD )
			$this->sessionPrefix = $this->dashTName."_".$this->tName;
		else
			$this->sessionPrefix = $this->tName;
	}	

	/**
	 * Build the activated Search panel
	 */
	public function buildSearchPanel()
	{
		if( $this->mode == CHART_DASHBOARD )
			return;
		
		parent::buildSearchPanel();
	}	
	
	/**
	 * Process the page 
	 */
	public function process()
	{
		//	Before Process event
		if( $this->eventsObject->exists("BeforeProcessChart") )
			$this->eventsObject->BeforeProcessChart( $this );
			
		$this->doCommonAssignments();
		$this->addButtonHandlers();
		$this->addCommonJs();
		$this->commonAssign();

		$this->buildSearchPanel();
		
		// to restore correctly within a chart class
		$_SESSION[ $this->sessionPrefix.'_advsearch' ] = serialize( $this->searchClauseObj );
		
		// display the 'Back to Master' link and master table info
		$this->displayMasterTableInfo();

		$this->showPage();		
	}
	
	/**
	 * Get where clause for an active master-detail relationship
	 * @return string
	 */
	public function getMasterTableSQLClause() 
	{
		if( $this->mode == CHART_DASHBOARD )
			return "";		
		return parent::getMasterTableSQLClause(); 
	}	

	/**
	 * Get started master keys
	 * @return Array
	 */
	public function getStartMasterKeys()
	{		
		$strWhereClause = "";
		$orderClause = "";
		
		$whereComponents = $this->getWhereComponents();
		$strWhereClause = $whereComponents["searchWhere"];
		$orderClause = $this->getOrderByClause();
		$strSQL = $this->gQuery->gSQLWhere( $strWhereClause );
		$strSQL = applyDBrecordLimit($strSQL.$orderClause, 1, $this->connection->dbType);	
		
		$fetchedArray = $this->connection->query( $strSQL )->fetchAssoc();
		$data = $this->cipherer->DecryptFetchedArray( $fetchedArray );

		$detailTablesData = $this->pSet->getDetailTablesArr();
		$masterKeysArr = array();
		foreach ( $detailTablesData as $detailId => $detail )
		{
			foreach( $detail['masterKeys'] as $idx => $mk ) 
			{
				$masterKeysArr[ $detail['dDataSourceTable'] ] = array( 'masterkey'.($idx + 1) => $data[$mk] );
			}
		}

		return $masterKeysArr;
	}
	
	/**
	 *
	 */
	public function doCommonAssignments() // TODO: make it protected
	{
		$this->xt->assign("id", $this->id);		
		
		//set the Search panel
		$this->xt->assign("searchPanel", true);

		if( $this->isShowMenu() )
			$this->xt->assign("menu_block", true);		

		$this->setLangParams();
			
		$this->xt->assign("chart_block", true);
		$this->xt->assign("asearch_link", true);
		$this->xt->assign("exportpdflink_attrs", "onclick='chart.saveAsPDF();'");
		$this->xt->assign("advsearchlink_attrs", "id=\"advButton".$this->id."\"");

		if( !GetChartXML( $this->shortTableName ) )
			$this->xt->assign("chart_block", false);			
		
		$this->xt->assign("message_block", true);
		
		if( ($this->mode == CHART_SIMPLE || $this->mode == CHART_DASHBOARD) && $this->pSet->noRecordsOnFirstPage() && !$this->searchClauseObj->isSearchFunctionalityActivated() )
		{
			$this->show_message_block = true;
			$this->xt->displayBrickHidden("chart");
			$this->xt->assign("chart_block", false);

			$this->xt->assign("message", $this->noRecordsMessage());
			$this->xt->assign( "message_class", "alert-warning");
		}		

		if( !$this->show_message_block )
			$this->xt->displayBrickHidden("message");

		if( $this->mobileTemplateMode() )
			$this->xt->assign('tableinfomobile_block', true);

		$this->prepareBreadcrumbs("main");
		
		$this->assignChartElement();
		
		if( $this->isDynamicPerm && IsAdmin() ) 
		{
			$this->xt->assign("adminarea_link", true);
			$this->xt->assign("adminarealink_attrs", "id=\"adminArea".$id."\"");
		}

		$this->xt->assign("changepwd_link", $_SESSION["AccessLevel"] != ACCESS_LEVEL_GUEST && $_SESSION["fromFacebook"] == false);
		$this->xt->assign("changepwdlink_attrs", "onclick=\"window.location.href='".GetTableLink("changepwd")."';return false;\"");
		
		$this->body['begin'].= GetBaseScriptsForPage( $this->isDisplayLoading );
		if( !$this->isDashboardElement() && !$this->mobileTemplateMode() )
			$this->body['begin'].= "<div id=\"search_suggest\" class=\"search_suggest\"></div>";

		// assign body end
		$this->body['end'] = XTempl::create_method_assignment( "assignBodyEnd", $this);

		$this->xt->assignbyref('body', $this->body);	
	}	
	
	/**
	 * Set the chart xt variable
	 */
	public function assignChartElement()
	{
		//set params for the 'xt_showchart' method showing the chart
		$chartXtParams = array(
			"id" => $this->id,
			"table" => $this->tName, 
			"ctype" => $this->pSet->getChartType(), 
			"resize" => $this->mode !== CHART_SIMPLE && $this->mode != CHART_DASHBOARD,
			"chartname" => $this->shortTableName,
			"chartPreview" => $this->mode !== CHART_SIMPLE && $this->mode != CHART_DASHBOARD
		);

		if( $this->mode == CHART_DASHBOARD || $this->mode == CHART_DASHDETAILS)
		{
			if( isset($this->dashElementData["width"]) || isset($this->dashElementData["height"]) ) //#10119
			{
				$chartXtParams["dashResize"] = true;
				$chartXtParams["dashWidth"] = $this->dashElementData["width"];
				$chartXtParams["dashHeight"] = $this->dashElementData["height"];			
			}

			if( $this->mode == CHART_DASHBOARD )
			{
				$chartXtParams["dash"] = true;
				$chartXtParams["dashTName"] = $this->dashTName;
				$chartXtParams["dashElementName"] = $this->dashElementName;
			}
			else
			{
				$chartXtParams["refreshTime"] = $this->dashElementData["reload"];
			}
		}
		
		$this->xt->assign_function( $this->shortTableName."_chart", "xt_showchart", $chartXtParams );
	}
	
	/**
	 *
	 */
	public function prepareDetailsForEditViewPage()
	{
		$this->addButtonHandlers();
		
		$this->xt->assign("body", $this->body);
		$this->xt->assign("chart_block", true);
		$this->xt->assign("message_block", true);		
	}
	
	protected function getExtraAjaxPageParams()
	{
		$returnJSON = array();
		if( $this->mode == REPORT_DETAILS )
		{		
			$returnJSON['headerCont'] = $this->getProceedLink()	. $returnJSON['headerCont'];
		}		
		
		return $returnJSON;
	}
	
	public function beforeShowChart()
	{
		if( $this->eventsObject->exists("BeforeShowChart") )
			$this->eventsObject->BeforeShowChart($this->xt, $this->templatefile, $this);	
	}
	
	public function showPage()
	{
		$this->beforeShowChart();
	
		if( $this->mode == CHART_DETAILS || $this->mode == CHART_DASHBOARD || $this->mode == CHART_DASHDETAILS )
		{
			$this->addControlsJSAndCSS();
			$this->fillSetCntrlMaps();
			
			$this->xt->assign("header", false);
			$this->xt->assign("footer", false);
			
			$this->body["begin"] = "";
			$this->body["end"] = "";
			$this->xt->assign("body", $this->body);	

			$bricksExcept = array("chart", "message");
			$this->xt->hideAllBricksExcept($bricksExcept);
			
			$this->displayAJAX($this->templatefile, $this->id + 1);
			exit();
		}

		if( $this->mode == CHART_POPUPDETAILS ) //currently unused
		{
			$bricksExcept = array("grid","pagination");
			$this->xt->assign("header", false);
			$this->xt->assign("footer", false);
			$this->body["begin"] = '';
			$this->body["end"] = '';
			
			$this->xt->hideAllBricksExcept($bricksExcept);
			$this->xt->prepare_template($this->templatefile);
			$respArr = array();
			$respArr['success'] = true;	
			$respArr['body'] = $this->xt->fetch_loaded("body");
			$respArr['counter'] = postvalue('counter');
			$this->xt->assign("container_master", false);
			
			echo printJSON($respArr);
			exit();
		}
			
		$this->display( $this->templatefile );			
	}	
}
?>