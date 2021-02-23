<?php
class ReportPage extends RunnerPage
{
	
	public $pagestart = 0;
	
	public $arrReport = array();	
	
	/**
	 * Array of groups per page for report with group fields
	 * @var array
	 * @intellisense
	 */	
	public $arrGroupsPerPage = array();
	
	/**
	 * The flag indicating that report is cross-table
	 */
	public $crossTable = false;
	
	/**
	 * Refresh the crosstab report
	 */
	public $crosstableRefresh = false;
	
	/**
	 * @type Boolean
	 */
	protected $noRecordsFound = false;
	
	
	function __construct(&$params) 
	{
		parent::__construct($params);
		
		$this->crossTable = $this->pSet->isCrossTabReport();
		
		$this->jsSettings['tableSettings'][ $this->tName ]['crossTable'] = $this->crossTable;
		$this->jsSettings['tableSettings'][ $this->tName ]['simpleSearchActive'] = $this->searchClauseObj->simpleSearchActive;
		
		if( $this->mode == REPORT_DASHBOARD || $this->mode == REPORT_DETAILS || $this->mode == REPORT_DASHDETAILS )
		{
			if( $this->mode != REPORT_DETAILS )
			{
				$this->formBricks["header"] = array( 
					array( "name" => "details_block", "align" => "right" )
				);
			}
			$this->formBricks["footer"] = array( "pagination_block" );	
		}
	}

	/**
	 * Set the page's session prefix
	 */
	protected function assignSessionPrefix()
	{
		if( $this->mode == REPORT_DASHBOARD )
			$this->sessionPrefix = $this->dashTName."_".$this->tName;
		else
			$this->sessionPrefix = $this->tName;
	}	
	
	/**
	 * Set session variables
	 */
	public function setSessionVariables()
	{
		parent::setSessionVariables();
		
		$_SESSION[$this->sessionPrefix.'_advsearch'] = serialize($this->searchClauseObj);
		
		if( !$_SESSION[$this->sessionPrefix."_pagesize"] )
			$_SESSION[$this->sessionPrefix."_pagesize"] = $this->pSet->getInitialPageSize();
		
		$this->pageSize = $_SESSION[$this->sessionPrefix."_pagesize"];
		
		if( !$_SESSION[ $this->sessionPrefix."_pagenumber" ] )
			$_SESSION[ $this->sessionPrefix."_pagenumber" ] = 1;
		
		if( isset($_REQUEST["goto"]) )
			$_SESSION[ $this->sessionPrefix."_pagenumber" ] = intval($_REQUEST["goto"]);
		
		$this->myPage = $_SESSION[$this->sessionPrefix."_pagenumber"];
		
		$this->pagestart = ($this->myPage - 1) * $this->pageSize;
	}

	/**
	 * Build the activated Search panel
	 */
	public function buildSearchPanel()
	{
		if( $this->mode == REPORT_DASHBOARD )
			return;
		
		parent::buildSearchPanel();
	}
	
	/**
	 * Process the page 
	 */
	public function process()
	{
		//	Before Process event
		if( $this->eventsObject->exists("BeforeProcessReport") )
			$this->eventsObject->BeforeProcessReport( $this );

		$this->setDetilsBadgeStyles();
		// array with extra report params
		$extraParams = $this->getExtraReportParams();

		$this->setGoogleMapsParams( $extraParams['fieldsArr'] );
		if( $this->googleMapCfg['isUseGoogleMap'] ) 
			$this->initGmaps();

		$this->buildSearchPanel();	
			
		$this->setReportData( $extraParams );	

		$this->addCommonJs();
		$this->addButtonHandlers();
		$this->commonAssign();
		$this->doCommonAssignments();	
		$this->addCustomCss();
			
		// display the 'Back to Master' link and master table info
		if( $this->mode == REPORT_SIMPLE ) 
			$this->displayMasterTableInfo();	
			
		$this->showPage();	
	}
	
	/**
	 * Get the report data, assign corresponding xt variables 
	 * @param Array options
	 */
	public function setReportData( $options )
	{
		if( $this->crossTable )
			$this->setCrosstabData( $options );
		else 
			$this->setStandartData( $options );
	}
	
	/**
	 * Get data for crosstab and assign with xt
	 * @param &Array _options	 
	 */
	public function setCrosstabData(&$_options)
	{
		include_once(getabspath("classes/crosstable_report.php"));
		
		$cross_array = array();
		$cross_array["fromWizard"] = true;
		$cross_array["table_type"] = "project";
		$cross_array["tables"][] = $this->tName;
		$cross_array["sessionPrefix"] = $this->sessionPrefix;
		$cross_array["pageType"] = $this->pageType;
		
		if( $this->mode == REPORT_DASHBOARD )
		{
			$cross_array["dashBased"] = true;
			$cross_array["dashTName"] = $this->dashTName;
		}
		
		foreach($_options["repGroupFields"] as $ind => $value)
		{
			$cross_array["group_fields"][ $ind ]["name"] = $value["strGroupField"];
			$cross_array["group_fields"][ $ind ]["int_type"] = $value["groupInterval"];
			
			$t_axis = "all";
			if( $value["crossTabAxis"] == 0 )
				$t_axis = "x";
			elseif( $value["crossTabAxis"] == 1 )
				$t_axis = "y";				
				
			$cross_array["group_fields"][ $ind ]["group_type"] = $t_axis;
		}
		
		$sum_x = $_options['bReportHorizontalSummary']; 
		$sum_y = $_options['bReportVerticalSummary'];

		$lastPos = count($cross_array["group_fields"]);	
		$cross_array["group_fields"][ $lastPos ]["sum_total"] = $sum_x || $sum_y;
		$cross_array["group_fields"][ $lastPos ]["sum_x"] = $sum_x;
		$cross_array["group_fields"][ $lastPos ]["sum_y"] = $sum_y;		
		
		foreach($_options["fieldsArr"] as $ind => $value)
		{
			$cross_array["totals"][ $value["name"] ]["name"] = $value["name"];
			$cross_array["totals"][ $value["name"] ]["label"] = $value["label"];
			
			$cross_array["totals"][ $value["name"] ]["max"] = $value["totalMax"];
			$cross_array["totals"][ $value["name"] ]["min"] = $value["totalMin"];
			$cross_array["totals"][ $value["name"] ]["sum"] = $value["totalSum"];
			$cross_array["totals"][ $value["name"] ]["avg"] = $value["totalAvg"];
		}
		
		$strSQL = $this->getBasicCrossTableSQL();
		$crosstableObj = new CrossTableReport($cross_array, $strSQL);
		
		if( $_options["crosstable_refresh"] )
		{
			$crosstableObj->ajax_refresh_crosstable( GetTableLink($this->shortTableName, "report"), $this->id );
			exit();
		}
		
		$this->crossTableCommonAssign( $crosstableObj, $sum_x || $sum_y );
	}
	
	/**
	 * Assign values obtained from crossTable object to
	 * the basic cross table xt variables
	 * @param CrossTableReport crosstableObj
	 * @param Boolean showSummary
	 */
	protected function crossTableCommonAssign( $crosstableObj, $showSummary )
	{
		if( !$this->mobileTemplateMode() ) 
		{
			$this->xt->assign("select_group_x", "<select id=\"select_group_x".$this->id."\" >".$crosstableObj->getGroupFields("x")."</select>");
			$this->xt->assign("select_group_y", "<select id=\"select_group_y".$this->id."\" >".$crosstableObj->getGroupFields("y")."</select>");
		}
		
		$arr_res = $crosstableObj->getValuesControl();
		if( $arr_res[0] )
		{
			$reportFilename = GetTableLink($this->shortTableName, "report"); 
			
			if( !$this->mobileTemplateMode() ) 
			{
				$this->xt->assign("select_data", 
					"<select id=\"select_data".$this->id."\" onchange=\"refresh_crosstable('".$reportFilename."', '".$this->id."', '".($this->mode == REPORT_DASHBOARD)."', '".$this->dashTName."');return false;\">"
					.$arr_res[0]."</select>");		
			
				$this->xt->assign("group_func", $crosstableObj->getRadioGroupFunctions( $reportFilename, $this->id ));
			} 
			
			$this->xt->assign("totals", $crosstableObj->getTotalsName( $crosstableObj->getCurrentGroupFunction() ));
		}
		
		$this->xt->assign("cross_controls", !$this->mobileTemplateMode() );		
		
		$grid_row["data"] = $crosstableObj->getCrossTableData();		
		
		$allow_export = $this->permis[ $this->tName ]["export"]; 
		$this->xt->assign("export_link", $allow_export && count($grid_row["data"]) > 0);
		$this->xt->assign("prints_block", $this->printAvailable() && count($grid_row["data"]) > 0);
		
		if ( !$this->isDashboardElement() )
		{			
			$this->xt->assign("print_friendly",  $this->printAvailable() && count($grid_row["data"]) > 0 );
		}
		

		if( count($grid_row["data"]) > 0 )
		{
			$this->xt->assign("grid_row", $grid_row);
			$this->xt->assignbyref("group_header", $crosstableObj->getCrossTableHeader());
			$this->xt->assignbyref("col_summary", $crosstableObj->getCrossTableSummary());	
			$this->xt->assignbyref("total_summary", $crosstableObj->getTotalSummary());
			$this->xt->assign("cross_totals", $showSummary);
		}
		else
		{
			$this->noRecordsFound = true;
		}
		
		$this->xt->assign("crosstable_attrs", "&axis_x=".$_SESSION[ $this->sessionPrefix."_gr_x" ]."&axis_y=".$_SESSION[ $this->sessionPrefix."_gr_y" ]
			."&field=".$_SESSION[ $this->sessionPrefix."_field" ]."&group_func=".$_SESSION[ $this->sessionPrefix."_group_func" ]);	
	}	
	
	/**
	 * Get the basic SQL query for a crosstable report
	 * @return String
	 */
	protected function getBasicCrossTableSQL() 
	{
		$_gQuery = $this->pSet->getSQLQuery();	
		$whereComponents = $this->getWhereComponents();
					
		$gsqlWhereExpr = $this->getnoRecOnFirstPageWhereCondition();
		$gsqlWhereExpr = combineSQLCriteria( array($gsqlWhereExpr, SecuritySQL("Search", $this->tName), $this->getFiltersWhere(), $whereComponents["commonWhere"]) );
	
		$searchHavingClause = combineSQLCriteria( array($whereComponents["searchHaving"], $this->getFiltersHaving()) );
			
		return $_gQuery->gSQLWhere_having_fromQuery($gsqlWhereExpr, $whereComponents["searchWhere"], $searchHavingClause, $this->searchClauseObj->getCriteriaCombineType());	
	}
	
	/**
	 * Get data for standart report and assign with xt
	 * @param &Array _options	 
	 */
	public function setStandartData(&$_options)
	{		
		include_once(getabspath('classes/reportlib.php'));
		
		$whereComponents = $this->getWhereComponents();
		$sqlArray = $this->getReportSQLData();
		$pageSize = $this->pageSize;
		if ( $this->pageSize == -1 ) {
			$pageSize = 0;
		}
		
		$rb = new Report($sqlArray, $this->pSet->GetTableData(".orderindexes"), $this->connection, $pageSize, 0, $_options
			, $whereComponents["searchWhere"], $whereComponents["searchHaving"], $this); 
			
		$this->arrReport = $rb->getReport( $this->pagestart );

		$this->setDetailLinks();
		
		$this->buildPagination();
		
		$this->standardReportCommonAssign();
	}

	/**
	 * Get where clause for an active master-detail relationship
	 * @return string
	 */
	public function getMasterTableSQLClause() 
	{
		if( $this->mode == REPORT_DASHBOARD && !isset($this->dashElementData["masterTable"]) )
			return "";		
		return parent::getMasterTableSQLClause(); 
	}
	
	/**
	 * Assign the basic cross table xt variables
	 */
	protected function standardReportCommonAssign()
	{
		$this->xt->assign(GoodFieldName($this->tName)."_dtable_column", true); //fix it!
		$this->xt->assign("dtables_link", true);
			
		foreach($this->arrReport['page'] as $key => $value)
		{
			$this->xt->assign($key, $value);
		}
		
		foreach($this->arrReport['global'] as $key => $value)
		{
			$this->xt->assign($key, $value);
		}			
		
		if( count($this->arrReport['list']) > 0 )
			$this->xt->assign('grid_row', array('data' => $this->arrReport['list']));
		else
			$this->noRecordsFound = true;
		
		$allow_export = $this->permis[ $this->tName ]["export"];
		$allow_search = $this->permis[ $this->tName ]["search"];		
		$this->xt->assign("export_link", $allow_export && $this->arrReport['countRows'] > 0);
		$this->xt->assign("prints_block", $allow_export &&  $this->arrReport['countRows'] > 0);		
		$this->xt->assign("printall_link", $allow_export && $this->arrReport['countRows'] > $this->pageSize && $this->pageSize > 0);
		$this->xt->assign("print_recspp", $this->pSet->getReportPrintGroupsPerPage() );

		if ( !$this->isDashboardElement() )
		{			
			$this->xt->assign("print_friendly",  $this->printAvailable() && $this->arrReport['countRows'] > 0 );
			$this->xt->assign("print_friendly_all", $this->printAvailable() && $this->arrReport['countRows'] > 0);
		}

		if( $allow_search && count($this->arrGroupsPerPage) )
		{
			$this->xt->assign("recordspp_block", true);
			$this->createPerPage();
		}

		if ( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
		{
			$this->xt->assign("details_found", $this->arrReport['countRows'] != 0);
		}
		
		$this->xt->assign("details_block", $this->arrReport['countRows'] != 0);
		$this->xt->assign("records_found", $this->arrReport['countRows']);
		$this->xt->assign("pages_block", $this->arrReport['countRows'] != 0);
		$this->xt->assign("page", $this->myPage);
		$this->xt->assign("maxpages", $this->maxPages);		
		$this->xt->assign("global_summary", true);		
	}
	
	/**
	 * Assign pagination_block, pagination xt variables
	 */
	public function buildPagination()
	{
		//	prepare for create pagination
		$this->maxPages = $this->arrReport['maxpages'];

		$lastrecord = ( $this->myPage ) * $this->pageSize;
		if( $this->pageSize < 0 || $lastrecord > $this->arrReport['countRows'] )
			$lastrecord = $this->arrReport['countRows'];
		
		$this->prepareRecordsIndicator( ( $this->myPage - 1 ) * $this->pageSize + 1, $lastrecord, $this->arrReport['countRows'] );
		
		if($this->maxPages > 1)
		{		
			$this->xt->assign("pagination_block", true);
			$pagination = '';
			$limit=10;
			if ($this->mobileTemplateMode())	
				$limit=5;

			$counterstart = $this->myPage - ($limit-1);
			if($this->myPage % $limit != 0)
				$counterstart = $this->myPage -($this->myPage % $limit) + 1;
			$counterend = $counterstart + ($limit-1);
			if($counterend > $this->maxPages)
				$counterend = $this->maxPages;
			if($counterstart != 1) 
			{
				$pagination.= $this->getPaginationLink(1,mlang_message("FIRST"))."&nbsp;:&nbsp;";
				$pagination.= $this->getPaginationLink($counterstart - 1,mlang_message("PREVIOUS"))."&nbsp;";
			}
			$pageLinks = "";
				
			if(isRTL())
			{
				for($counter = $counterend; $counter >= $counterstart; $counter --) 
				{
					$pageLinks .= $separator . $this->getPaginationLink($counter,$counter, $counter == $this->myPage );
				}
			}
			else
			{
				for($counter = $counterstart; $counter <= $counterend; $counter ++) 
				{
					$pageLinks .= $separator . $this->getPaginationLink($counter,$counter, $counter == $this->myPage );
				}
			}

			if( $this->getLayoutVersion() != BOOTSTRAP_LAYOUT )
			{
				$pageLinks = "[" . $pageLinks . $separator . "]";
			}
			$pagination .= $pageLinks;

			if($counterend != $this->maxPages) 
			{
				$pagination.= "&nbsp;".$this->getPaginationLink($counterend + 1,mlang_message("NEXT"))."&nbsp;:&nbsp;";
				$pagination.= "&nbsp;".$this->getPaginationLink($this->maxPages,mlang_message("LAST"));
			}			
			if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
				$pagination = '<nav><ul class="pagination" data-function="pagination' . $this->id . '">' . $pagination . '</ul></nav>';
			else
				$pagination = "<div data-function=\"pagination" . $this->id . "\">" . $pagination . "</div>";
			
			$this->xt->assign("pagination", $pagination);
		}
		else if( !$this->myPage )
		{
			$this->myPage = 1; //temporary fix
		}
	}
	
	/**
	 * fix it!
	 */
	protected function setDetailLinks()
	{
		if( $this->mode == REPORT_DASHBOARD )
			return;
			
		// set detail links 	
		foreach( $this->allDetailsTablesArr as $detailTableData )
		{
			// get perm for det tables
			$this->permis[ $detailTableData['dDataSourceTable'] ] = $this->getPermissions( $detailTableData['dDataSourceTable'] );
			// field names of detail keys of passed detail table, when current is master
			$this->detailKeysByD[] = $this->pSet->getDetailKeysByDetailTable( $detailTableData['dDataSourceTable'] );			
		}
		
		$this->controlsMap['gridRows'] = array();
		$arrReportList = array();
		foreach ($this->arrReport['list'] as $key => $data) 
		{
			if (!isset($data['row_data']))
				continue;
			$record = array();
			$this->genId();
			
			$gridRowInd = count($this->controlsMap['gridRows']);
			$this->controlsMap['gridRows'][$gridRowInd] = array();
			$this->controlsMap['gridRows'][$gridRowInd]['id'] = $this->recId;
			$this->controlsMap['gridRows'][$gridRowInd]['rowInd'] = $gridRowInd;
			//Add the connection with containing row. It's important for vertical layout's multiple records per row mode
			$this->controlsMap['gridRows'][$gridRowInd]['keyFields'] = array();
			$this->controlsMap['gridRows'][$gridRowInd]['keys'] = array();
			for($i = 0; $i < count($tKeys); $i ++) {
				$this->controlsMap['gridRows'][$gridRowInd]['keyFields'][$i] = $tKeys[$i];
				$this->controlsMap['gridRows'][$gridRowInd]['keys'][$i] = $data[$tKeys[$i].'_value'];
			}
			
			$this->proccessDetailGridInfo($record, $data, $gridRowInd);
			$record["recordattrs"] = "data-record-id=\"".$this->recId."\"";
			$record["rowattrs"] = " id=\"gridRow".$this->recId."\"";
			$arrReportList[$key] = array_merge_assoc($data, $record);
			$this->recIds[] = $this->recId;
		}
		
		foreach($arrReportList as $key => $data)
		{
			$this->arrReport['list'][$key] = $data;
		}		
		// end set detail links		
	}
	
	/**
	 * Get SQL query data for the Report constructor
	 * @return Array
	 */
	public function getReportSQLData()
	{
		$_gQuery = $this->pSet->getSQLQuery();
		$whereComponents = $this->getWhereComponents();
		
		$gsqlWhereExpr = $this->getnoRecOnFirstPageWhereCondition();
		$gsqlWhereExpr = combineSQLCriteria( array($gsqlWhereExpr, $whereComponents["commonWhere"], $this->getFiltersWhere()) );
		$_SESSION[$this->sessionPrefix."_where"] = $gsqlWhereExpr;
		
		$gsqlHavingExpr = combineSQLCriteria( array($whereComponents["commonHaving"], $this->getFiltersHaving()) );
		
		return array($_gQuery->HeadToSql(), $_gQuery->FromToSql(), $gsqlWhereExpr, $_gQuery->GroupByToSql(), $gsqlHavingExpr);
	}
	
	/**
	 * Get a where condition basing on 'no records on the first page' settings
	 * @return String
	 */
	protected function getnoRecOnFirstPageWhereCondition()
	{
		if( $this->pSet->noRecordsOnFirstPage() && !count($_GET) && !count($_POST) ||
			$this->pSet->noRecordsOnFirstPage() && $this->mode == REPORT_DASHBOARD && !$this->searchClauseObj->isSearchFunctionalityActivated() )
			return "1=0";
		
		return "";		
	}
	
	/**
	 * Prepare detail for edit and view
	 */
	public function prepareDetailsForEditViewPage() 
	{		
		$this->addButtonHandlers();
		$this->commonAssign();

		if( $this->allDetailsTablesArr )
		{
				$this->AddJSFile("include/jquery-ui/jquery-ui.min.js");
			$this->AddCSSFile("include/jquery-ui/smoothness/jquery-ui.min.css");
			$this->AddCSSFile("include/jquery-ui/smoothness/jquery-ui.theme.min.css");
		}
		
		$_options = $this->getExtraReportParams();	
				
		if( $this->crossTable )
		{	
			$this->xt->assign("cross_controls", false);
			// set the cross-table report
			$this->setCrosstabData($_options);
		}
		else
		{	
			// set the standard report		
			$this->setStandartData($_options);
		}
		
		$this->xt->assign("grid_block", true);
		$this->xt->assign("recordspp_block", true);
		
		$this->createPerPage();
		
		$this->xt->assign("id", $this->id);
		
		$this->body["begin"] = '';
		$this->body["end"] = '';
		$this->xt->assign("body", $this->body);	
	}
	
	/**
	 * @return Array
	 */
	public function getExtraReportParams()
	{
		$extraParams = array();
		
		if( $this->crossTable )
		{
			$extraParams['crosstable_refresh'] = $this->crosstableRefresh;
			$extraParams['bReportHorizontalSummary'] = $this->pSet->reportHasHorizontalSummary();
			$extraParams['bReportVerticalSummary'] = $this->pSet->reportHasVerticalSummary();
		}
		else
		{
			$extraParams['tName'] = $this->tName;
			$extraParams['shortTName'] = $this->shortTableName;
			$extraParams['sessionPrefix'] = $this->sessionPrefix;
			$extraParams['shortTableName'] = $this->shortTableName;			
			
			$extraParams['tKeyFields'] = $this->pSet->getTableKeys();
			$extraParams['repPageSummary'] = $this->pSet->reportHasPageSummary();
			$extraParams['repGlobalSummary'] = $this->pSet->reportHasGlobalSummary();
			$extraParams['repLayout'] = $this->pSet->getReportLayout();
			$extraParams['showGroupSummaryCount'] = $this->pSet->isGroupSummaryCountShown();
			$extraParams['repShowDet'] = $this->pSet->reportDetailsShown();
			// if any field used for totals
			$extraParams['isExistTotalFields'] = $this->pSet->reportTotalFieldsExist();
		}
		
		// report field info
		$extraParams['repGroupFields'] = $this->pSet->getReportGroupFieldsData();
		$extraParams['repGroupFieldsCount'] = count( $extraParams['repGroupFields'] );		
		
		$paramfieldArr = array();
		$reportFields = $this->pSet->getFieldsList();
		foreach( $reportFields as $field )
		{
			$fieldArr = array();
			$fieldArr['name'] = $field;
			//'fName' added for maps
			$fieldArr['fName'] = $field;
			$fieldArr['label'] = $this->pSet->label( $field );
			$fieldArr['goodName'] = GoodFieldName( $field );
			$fieldArr['repPage'] = true; //"@f.bReportPage"; 
			$fieldArr['viewFormat'] = $this->pSet->getViewFormat( $field );
			$fieldArr['editFormat'] = $this->pSet->getEditFormat( $field );
		
			$fieldArr['totalMax'] = $this->pSet->getFieldData($field, 'isTotalMax');
			$fieldArr['totalMin'] = $this->pSet->getFieldData($field, 'isTotalMin');
			$fieldArr['totalAvg'] = $this->pSet->getFieldData($field, 'isTotalAvg');
			$fieldArr['totalSum'] = $this->pSet->getFieldData($field, 'isTotalSum');							
			$paramfieldArr[] = $fieldArr;		
		}
		
		$extraParams['fieldsArr'] = $paramfieldArr;
		
		return $extraParams;
	}
	
	/**
	 * Assign recsPerPage, recsPerPage xt variables
	 */
	public function createPerPage()
	{
		$location = GetTableLink( runner_htmlspecialchars(rawurlencode( $this->shortTableName )), $this->pageType );
		
		$classString = "";
		$allMessage = mlang_message("SHOW_ALL");
		if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
		{
			$classString = 'class="form-control"';
			$allMessage = "All";
		}
		$rpp = "<select " . $classString . " onChange=\"javascript: document.location='"
			.$location."?pagesize='+this.options[this.selectedIndex].value;\">";	//fix it!
		
		// use group fields on report page or not
		$reportGroupFields = $this->pSet->isReportWithGroups();
		
		if( $reportGroupFields )
		{			
			for($i = 0; $i < count($this->arrGroupsPerPage); $i++)
			{			
				if($this->arrGroupsPerPage[$i] != -1)
					$rpp.= "<option value=\"".$this->arrGroupsPerPage[$i]."\" ".($this->pageSize == $this->arrGroupsPerPage[$i] ? "selected" : "").">".$this->arrGroupsPerPage[$i]."</option>";
				else	
					$rpp.= "<option value=\"-1\" ".($this->pageSize == $this->arrGroupsPerPage[$i] ? "selected" : "").">".$allMessage."</option>";
			}	
		}	
		else
		{		
			for($i = 0; $i < count($this->arrRecsPerPage); $i++)
			{
				if($this->arrRecsPerPage[$i] != -1)
					$rpp.= "<option value=\"".$this->arrRecsPerPage[$i]."\" ".($this->pageSize == $this->arrRecsPerPage[$i] ? "selected" : "").">".$this->arrRecsPerPage[$i]."</option>";
				else
					$rpp.= "<option value=\"-1\" ".($this->pageSize == $this->arrRecsPerPage[$i] ? "selected" : "").">".$allMessage."</option>";
			}
		}
		$rpp.= "</select>";
		
		if( $reportGroupFields )
			$this->xt->assign("grpsPerPage", $rpp);
		else
			$this->xt->assign("recsPerPage", $rpp);
	}

	/**
	 *
	 */
	public function doCommonAssignments() //make it protected
	{
		$this->xt->assign("id", $this->id);
		$this->xt->assign("left_block", true);
		
		$this->assignBody();
		
		$this->setLangParams();
	
		if( $this->isDynamicPerm && IsAdmin() )
		{
			$this->xt->assign("adminarea_link", true);
			$this->xt->assign("adminarealink_attrs", "id=\"adminArea".$this->id."\"");
		}
	
		$this->xt->assign("changepwd_link", $_SESSION["AccessLevel"] != ACCESS_LEVEL_GUEST && $_SESSION["fromFacebook"] == false);
		$this->xt->assign("changepwdlink_attrs", "onclick=\"window.location.href='".GetTableLink("changepwd")."';return false;\"");
	
		//set the Search panel
		$this->xt->assign("searchPanel", true);
		
		if( $this->isShowMenu() )
			$this->xt->assign("menu_block", true);
	
		if( $this->mobileTemplateMode() )
			$this->xt->assign('tableinfomobile_block', true);

		$this->prepareBreadcrumbs("main");		

		$allow_search = $this->permis[ $this->tName ]["search"];
		$allow_export = $this->permis[ $this->tName ]["export"]; 

		$this->xt->assign("grid_block", $allow_search);			
		$this->xt->assign("toplinks_block", $allow_search);
		$this->xt->assign("asearch_link", $allow_search);
		
		$this->xt->assign("print_link", $allow_export);
		$this->xt->assign("printlink_attrs", "id=print_".$this->id." href='#'");
		$this->xt->assign("printalllink_attrs", "id=printAll_".$this->id." href='#'");
		
		$this->xt->assign("excellink_attrs", "id=export_to_excel".$this->id." href='#'");
		$this->xt->assign("wordlink_attrs", "id=export_to_word".$this->id." href='#'");
		$this->xt->assign("pdflink_attrs", "id=export_to_pdf".$this->id." href='#'");
		
		$this->xt->assign("advsearchlink_attrs", "id=\"advButton".$this->id."\"");
		
		if( $this->noRecordsFound )
		{
			$this->xt->assign("message_block", true);
			$this->xt->assign("container_grid", false);
			$this->xt->assign("message", $this->noRecordsMessage());		
			$this->xt->assign( "message_class", "alert-warning");
		}
	}

	/**
	 * Add common javascript files and code
	 */
	function addCommonJs() 
	{
		parent::addCommonJs();
		
		if( $this->allDetailsTablesArr )
		{
				$this->AddJSFile("include/jquery-ui/jquery-ui.min.js");
			$this->AddCSSFile("include/jquery-ui/smoothness/jquery-ui.min.css");
			$this->AddCSSFile("include/jquery-ui/smoothness/jquery-ui.theme.min.css");
		}
	}
	
	/**
	 *
	 */
	protected function assignBody()
	{
		if( $this->crossTable )
			$this->body["begin"].= '<script type="text/javascript" src="'.GetRootPathForResources("include/crosstable.js").'"></script>';
		
		$this->body["begin"].= GetBaseScriptsForPage( $this->isDisplayLoading );

		if( !$this->isDashboardElement() && !$this->mobileTemplateMode() )
			$this->body["begin"].= "<div id=\"search_suggest\" class=\"search_suggest\"></div>";
	
		// assign body end in such way, to prevent collisions with flyId increment 
		$this->body['end'] = XTempl::create_method_assignment( "assignBodyEnd", $this);

		$this->xt->assignbyref("body", $this->body);		
	}
	
	/**
	 *
	 */
	public function beforeShowReport()
	{
		if( $this->eventsObject->exists("BeforeShowReport") )
			$this->eventsObject->BeforeShowReport($this->xt, $this->templatefile, $this);	
	}
	
	/**
	 * Display the report page
	 */
	public function showPage()
	{
		$this->beforeShowReport();

		if( $this->mode == REPORT_SIMPLE ) 
		{
			$this->display( $this->templatefile );
			return;
		}		
	
		$this->body["begin"] = '';
		$this->body["end"] = '';
		$this->xt->assign("body", $this->body);	
		
		$this->xt->assign("header", false);
		$this->xt->assign("footer", false);
	
		if( $this->mode == REPORT_DASHBOARD )
		{	
			$bricksExcept = array("grid", "pagination", "details_found", /*"page_of",*/ "message");	
			$this->xt->hideAllBricksExcept($bricksExcept);			
			
			$this->xt->prepare_template( $this->templatefile );
			
			$this->AddJSFile("include/crosstable.js");
			
			$this->addControlsJSAndCSS();
			$this->fillSetCntrlMaps();
			
			$returnJSON = array();
			$returnJSON['settings'] = $this->jsSettings;
			$returnJSON['controlsMap'] = $this->controlsHTMLMap;
			$returnJSON['viewControlsMap'] = $this->viewControlsHTMLMap;

			if( $this->formBricks["footer"] )
				$returnJSON["footerCont"] = $this->fetchBlocksList( $this->formBricks["footer"], true );
			if( $this->formBricks["header"] )
				$returnJSON["headerCont"] = $this->fetchBlocksList( $this->formBricks["header"], true );

			//	prepend headerCont with the page title
			$returnJSON['headerCont'] = '<span class="rnr-dbebrick">' 
				. $this->getPageTitle( $this->pageType, GoodFieldName($this->tName) ) 
				. "</span>"
				. $returnJSON['headerCont'];
				
			$this->assignFormFooterAndHeaderBricks(false);
			$this->xt->prepareContainers();
			$returnJSON["html"] = $this->xt->fetch_loaded("body");
			
			$returnJSON['idStartFrom'] = $this->flyId;
			$returnJSON['success'] = true;
			
			$returnJSON["additionalJS"] = $this->grabAllJsFiles();
			$returnJSON["CSSFiles"] = $this->grabAllCSSFiles();

			echo printJSON($returnJSON);			
			exit();
			return;		
		}		
		
		if( $this->mode == REPORT_DETAILS || $this->mode == REPORT_DASHDETAILS )
		{
			$this->showDpAjax();
			exit();
			return;
		}
	
		if( $this->mode && $this->mode == "listdetailspopup" ) //a currently unused option
		{
			$bricksExcept = array("grid", "pagination");
			$this->xt->assign("container_master", false);

			$this->xt->assign("cross_controls", false);
			$this->xt->hideAllBricksExcept($bricksExcept);
			$this->xt->prepare_template($this->templatefile);
			$respArr = array();
			$respArr['success'] = true;	
			$respArr['body'] = $this->xt->fetch_loaded("body");
			$respArr['counter'] = postvalue('counter');

			echo printJSON($respArr);
			exit();
			return;
		}
	}
	
	/**
	 * Display the inline report preview in responce on an ajax-like request
	 */
	protected function showDpAjax()
	{		
		$returnJSON = array();
		if( $this->mode == REPORT_DETAILS && $this->mainMasterPageType == PAGE_LIST  && $this->noRecordsFound ) 
		{
			$returnJSON['success'] = false;
			echo printJSON( $returnJSON );			
			return;
		}
		
		$this->xt->unassign("cross_controls");
		
		$this->xt->displayBrickHidden("printpanel");
		
		$bricksExcept = array("grid", "pagination" );	
		if( $this->mode != REPORT_DETAILS )
		{
			$bricksExcept[] = "details_found";
		}
		$this->xt->hideAllBricksExcept($bricksExcept);
		
		$this->xt->prepare_template( $this->templatefile );

		$this->addControlsJSAndCSS();
		$this->fillSetCntrlMaps();
		
		$returnJSON['settings'] = $this->jsSettings;
		$returnJSON['controlsMap'] = $this->controlsHTMLMap;
		$returnJSON['viewControlsMap'] = $this->viewControlsHTMLMap;
					
		if( $this->formBricks["footer"] )
			$returnJSON["footerCont"] = $this->fetchBlocksList( $this->formBricks["footer"], true );
		if( $this->formBricks["header"] )
			$returnJSON["headerCont"] = $this->fetchBlocksList( $this->formBricks["header"], true );

		if( $this->mode == REPORT_DETAILS && ( $this->mainMasterPageType == PAGE_LIST || $this->mainMasterPageType == PAGE_REPORT || $this->mainMasterPageType == PAGE_CHART ) )
		{		
			$returnJSON['headerCont'] = $this->getProceedLink()	. $returnJSON['headerCont'];
		}
		
		$this->assignFormFooterAndHeaderBricks(false);
		$this->xt->prepareContainers();
		$returnJSON['html'] = $this->xt->fetch_loaded("body");
		$returnJSON['success'] = true;
		$returnJSON['id'] = $this->id;
		$returnJSON['idStartFrom'] = $this->flyId;	
		
		$returnJSON["additionalJS"] = $this->grabAllJsFiles();
		$returnJSON["additionalCSS"] = $this->grabAllCSSFiles();

		echo printJSON( $returnJSON );			
	}
	
	/**
	 *
	 */
	function printAvailable() 
	{
		if( $this->mode == REPORT_DASHBOARD || $this->mode == REPORT_DETAILS || $this->mode == REPORT_DASHDETAILS )
			return false;
		return RunnerPage::printAvailable();
	}
	
	/**
	 * Show a detail preview page
     * @param Array params - asp compatibility issue
	 */
	function showPageDp($params = "")
	{
		if( $this->crossTable )
			$this->xt->unassign("cross_controls");
		
		parent::showPageDp( $params );
	}
	/**
	*
	*/
	function isDispReport()
	{
		if( $this->permis[$this->tName]['search'] && !$this->noRecordsFound )
			return true;
		return false;
	}
}
?>