<?php
class ViewPage extends RunnerPage
{
	public $keys = array();
	
	public $jsKeys = array();
	
	public $keyFields = array();
	
	public $viewPdfEnabled = false;


	/**
	 * @constructor
	 */
	function __construct(&$params)
	{
		parent::__construct($params);
		
		$this->setKeysForJs();
		
		$this->formBricks["header"] = "viewheader";
		$this->formBricks["footer"] = array( "viewbuttons", "rightviewbuttons");
		$this->assignFormFooterAndHeaderBricks( true );		
		
	}

	/**
	 * Assign session prefix
	 */
	protected function assignSessionPrefix()
	{	
		if( $this->mode == VIEW_DASHBOARD || $this->mode == VIEW_POPUP && $this->dashTName)
		{
			$this->sessionPrefix = $this->dashTName."_".$this->tName;
			return;
		}
		
		parent::assignSessionPrefix();
	}
	
	/**
	 * Set session variables
	 */
	public function setSessionVariables()
	{
		parent::setSessionVariables();
		
		$_SESSION[ $this->sessionPrefix.'_advsearch' ] = serialize($this->searchClauseObj);
	}
	
	public static function processEditPageSecurity( $table )
	{
		$pageMode = ViewPage::readViewModeFromRequest();
		$messageLink = "";
		
		if( !isLogged() || isLoggedAsGuest() ) 		
			$messageLink = " <a href='#' id='loginButtonContinue'>". mlang_message("SESSION_EXPIRED3") . "</a>";		
		
		if( !Security::processPageSecurity( $table, "S", $pageMode != VIEW_SIMPLE, $messageLink) )
			return false;
		
		return true;
	}
	
	/**
	 * Set keys values
	 * @param {array} keys 
	 */	
	public function setKeys($keys)
	{
		$this->data = null;
		$this->keys = $keys;
		$this->setKeysForJs();
	}
	
	/**
	 * Add table settings
	 */
	protected function prepareJsSettings()
	{
		$this->jsSettings['tableSettings'][ $this->tName ]["keys"] = $this->jsKeys;
		$this->jsSettings['tableSettings'][ $this->tName ]["keyFields"] = $this->keyFields;
		
		if( $this->mode == VIEW_DASHBOARD )
			$this->jsSettings['tableSettings'][ $this->tName ]["masterKeys"] = $this->getMarkerMasterKeys( $this->getCurrentRecordInternal() );
	}

	public function setKeysForJs()
	{
		$i = 0;
		foreach($this->keys as $field => $value)
		{
			$this->keyFields[ $i ] = $field;
			$this->jsKeys[ $i++ ] = $value;
		}
	}
	
	public function getCurrentRecord()
	{
		// this trick is required for ASP array copying.
		$tdata = $this->getCurrentRecordInternal();
		$data = $tdata;
		
		$oldData = $data;
		foreach($oldData as $fName => $val)
		{
			$viewFormat = $this->pSet->getViewFormat($fName);
			if($viewFormat == FORMAT_DATABASE_FILE || $viewFormat == FORMAT_DATABASE_IMAGE || $viewFormat == FORMAT_FILE_IMAGE)
			{
				if( $data[ $fName ] )
					$data[ $fName ] = true;
				else
					$data[ $fName ] = false;
			}
		}
		return $data;
	}
	
	/**
	 * Read current values from the database
	 * @return Array 	The current record data
	 */
	public function getCurrentRecordInternal()
	{		
		if( !is_null($this->data) )
			return $this->data;
				
		$strWhereClause = "";
		$orderClause = "";
		
		$keysSet = $this->checkKeysSet();		
		if( $keysSet )
		{
			$strWhereClause = KeyWhere( $this->keys );
		}
		elseif( $this->mode == VIEW_DASHBOARD )
		{
			$whereComponents = $this->getWhereComponents();
			$strWhereClause = $whereComponents["searchWhere"];
		}
		else
		{
			$orderClause = $this->getOrderByClause();
			$strWhereClause = $_SESSION[ $this->sessionPrefix."_where" ];
		}
	
		if( $this->mode == VIEW_DASHBOARD && $this->mapRefresh )
			$strWhereClause = whereAdd( $strWhereClause, $this->getWhereByMap() );
	
		if( $this->pSet->getAdvancedSecurityType() != ADVSECURITY_ALL )
			$strWhereClause = whereAdd($strWhereClause, SecuritySQL("Search", $this->tName));
		$strSQL = $this->gQuery->gSQLWhere( $strWhereClause );
		if( !$keysSet )
			$strSQL = applyDBrecordLimit($strSQL.$orderClause, 1, $this->connection->dbType);
		
		$strSQLbak = $strSQL;
		$strWhereClauseBak = $strWhereClause;	
		if( $this->eventsObject->exists("BeforeQueryView") )
			$this->eventsObject->BeforeQueryView($strSQL, $strWhereClause, $this);
		
		if( $strSQLbak == $strSQL && $strWhereClauseBak != $strWhereClause )
		{
			// user didn't change the query string but changed $strWhereClause
			$strSQL = $this->gQuery->gSQLWhere( $strWhereClause );
			if( !$keysSet )
				$strSQL = applyDBrecordLimit($strSQL.$orderClause, 1, $this->connection->dbType);
		}
			
		LogInfo($strSQL);
		
		$fetchedArray = $this->connection->query( $strSQL )->fetchAssoc();
		$this->data = $this->cipherer->DecryptFetchedArray( $fetchedArray );
		
		if( !$keysSet )
		{
			$this->keys = $this->getKeysFromData( $this->data );
			$this->setKeysForJs();
		}
		
		if( sizeof($this->data) && $this->eventsObject->exists("ProcessValuesView") )
			$this->eventsObject->ProcessValuesView($this->data, $this);
		
		return $this->data;
	}
	
	/**
	 * Check if the keys values were set through GET/POST 'editid' params
	 * or by using the setKeys method directly
	 * @return Boolean
	 */
	protected function checkKeysSet()
	{
		foreach($this->keys as $kValue)
		{
			if( strlen($kValue) )
				return true;
		}
		return false;
	}

	/**
	 * Check whether the user is allowed to see the page
	 */
	protected function readRecord()
	{
		if( $this->getCurrentRecordInternal() )
			return true;
			
		if($this->mode == VIEW_SIMPLE)
		{
			HeaderRedirect($this->pSet->getShortTableName(), "list", "a=return");
			exit();
		}
		//	nothing to show.
		//	TODO: add some report or message
		exit();	
		return false;
	}
	
	/**
	 * Process the page
	 */
	public function process()
	{
		if( $this->eventsObject->exists("BeforeProcessView") )
			$this->eventsObject->BeforeProcessView( $this );
			
		if( !$this->readRecord() )
			return;
			
		$this->prepareMaps();

		if ( $this->mode == VIEW_SIMPLE )
			$this->preparePdfControls();

		$this->doCommonAssignments();
		$this->prepareMockControls();
		$this->prepareButtons();
		$this->prepareSteps();
		
		$this->prepareFields();
		
		$this->fillCntrlTabGroups();
		
		$this->prepareJsSettings();
		
		$this->prepareDetailsTables();
	
		$this->addButtonHandlers();		
		
		// It also fills the viewControlsMap property
		$this->addCommonJs();
		
		$this->fillSetCntrlMaps();
		
		$this->displayViewPage();	
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
	 * Assign basic page's xt variables
	 */
	protected function doCommonAssignments()
	{
		$this->xt->assign( "id", $this->id );
		
		//	display legacy page caption - key values
		$data = $this->getCurrentRecordInternal();
		foreach( $this->keyFields as $i => $k )
		{
			$viewFormat = $this->pSet->getViewFormat( $k );
			if( $viewFormat == FORMAT_HTML || $viewFormat == FORMAT_FILE_IMAGE || $viewFormat == FORMAT_FILE || 
				$viewFormat == FORMAT_HYPERLINK || $viewFormat == FORMAT_HYPERLINK || $viewFormat == FORMAT_EMAILHYPERLINK || 
				$viewFormat == FORMAT_CHECKBOX )
			{
				$this->xt->assign( "show_key" . ($i+1), runner_htmlspecialchars( $data[ $k ] ) );
			}
			else
			{
				$this->xt->assign( "show_key" . ($i+1), $this->showDBValue( $k, $data ) );
			}
		}
		$this->assignViewFieldsBlocksAndLabels();
		
		//	body["end"]	- this assignment is very important
		if($this->mode == VIEW_SIMPLE)
		{
			$this->assignBody();
			$this->xt->assign("flybody", true);
		}
		$this->displayMasterTableInfo();
	}
	
	/**
	 * Display the view page
	 */	
	protected function displayViewPage()
	{
		// beforeshow event
		$templateFile = $this->templatefile;
		if( $this->eventsObject->exists("BeforeShowView") )
			$this->eventsObject->BeforeShowView($this->xt, $templateFile, $this->getCurrentrecordInternal(), $this);
		
		if( $this->mode == VIEW_SIMPLE )
		{
				if( $this->pdfMode )
			{
				$this->makePDF();
				return;
			}
			$this->display($templateFile);
			return;
		}	
		
		$this->xt->assign("footer", false);
		$this->xt->assign("header", false);
		$this->xt->assign("body", $this->body);
		$this->displayAJAX($templateFile, $this->flyId + 1);
		exit();
	}
	
	protected function makePdf() 
	{
		$this->AddCSSFile("styles/defaultPDF.css");
		$this->assignStyleFiles( true );
		
		$this->xt->load_template($this->templatefile);
		$page = $this->xt->fetch_loaded();
		
		$landscape = $this->pSet->isLandscapeViewPDFOrientation();
		if( $this->pSet->isViewPagePDFFitToPage() )
		{
			$pagewidth = postvalue("width");
		}
		else
		{
			$pagewidth = ($landscape ? PDF_PAGE_HEIGHT : PDF_PAGE_WIDTH) * 100 / $this->pSet->getViewPagePDFScale();
		}
		include(getabspath("plugins/page2pdf.php"));
	}
	
	/**
	 * Set details preview on the view master page 
	 */	
	protected function prepareDetailsTables()
	{
		if( !$this->isShowDetailTables || $this->mode == VIEW_DASHBOARD )
			return;
			
		$dpParams = $this->getDetailsParams( $this->id ); 
		
		if( !count($dpParams['ids']) )
			return;

		$this->xt->assign("detail_tables", true);	
		
		for($d = 0; $d < count($dpParams['ids']); $d++)
		{
			$this->setDetailPreview( $dpParams['type'][ $d ], $dpParams['strTableNames'][ $d ], $dpParams['ids'][ $d ], $this->getCurrentRecordInternal() );
		}
	}

	/**
	 *
	 */
	protected function prepareFields()
	{
		$viewFields = $this->pSet->getViewFields();
		$data = $this->getCurrentRecordInternal();
		
		foreach($this->keyFields as $i=>$kf)
		{
			$keyParams[] = "&key".($i + 1)."=".runner_htmlspecialchars( rawurlencode(@$data[ $kf ]) );
		}
		$keylink = implode("", $keyParams);
		
		foreach( $viewFields as $f )
		{
			$gname = GoodFieldName( $f );
			$value = '<span id="view'.$this->id.'_'.$gname.'" >' . $this->showDBValue( $f, $data, $keylink ). '</span>';
			$this->xt->assign( $gname . "_value", $value );

			if( !$this->isAppearOnTabs( $f ) )
				$this->xt->assign( $gname . "_fieldblock", true );
			else
				$this->xt->assign( $gname . "_tabfieldblock", true );
				
			if( $this->pSet->hideEmptyViewFields() && $this->showDBValue( $f, $data, $keylink ) == "" ) 
				$this->hideField( $f );
		}
	}
	
	/**
	 * Prepare Mock controls (support Javascript Control Api)
	 */
	protected function prepareMockControls()
	{
		$controlFields = $this->pSet->getViewFields();
		foreach($controlFields as $fName)
		{
			$control = array();
			$control["id"] = $this->id;
			$control["ctrlInd"] = 0;
			$control["fieldName"] = $fName;
			$control["mode"] = "view";

			$this->controlsMap["controls"][] = $control;
		}		
	}

	/**
	 *
	 */
	protected function prepareMaps()
	{
		$fieldsArr = array();
		$viewFields = $this->pSet->getViewFields();
		foreach( $viewFields as $f )
		{
			$fieldsArr[] = array( 'fName' => $f, 'viewFormat' => $this->pSet->getViewFormat( $f ) );
		}
		$this->setGoogleMapsParams($fieldsArr);	
		
		if( $this->googleMapCfg['isUseGoogleMap'] )
			$this->initGmaps();		
	}
	
	protected function prepareNextPrevButtons()
	{
		if( !$this->pSet->useMoveNext() || $this->pdfMode )
			return;
			
		$next = array();
		$prev = array();
		
		$this->getNextPrevRecordKeys( $this->getCurrentRecordInternal(), "Search", $next, $prev, $this->mode == VIEW_DASHBOARD );
		
		//show Prev/Next buttons
		$this->assignPrevNextButtons( count( $next ) > 0, count( $prev ) > 0, $this->mode == VIEW_DASHBOARD && ($this->hasTableDashGridElement() || $this->hasDashMapElement()) ); // TODO: haMajorDashElem
		
		$this->jsSettings['tableSettings'][ $this->tName ]["prevKeys"] = $prev;
		$this->jsSettings['tableSettings'][ $this->tName ]["nextKeys"] = $next; 			
	}	

	/**
	 * Assign buttons xt variables
	 */
	protected function prepareButtons()
	{
		global $globalEvents;
		
		if( $this->pdfMode )
			return;

		$this->prepareNextPrevButtons();
		
		if( $this->mode == VIEW_DASHBOARD )
		{
			if ( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
				$this->xt->assign("groupbutton_class", "rnr-invisible-button");
				
			return;
		}
		
		if( $this->mode == VIEW_SIMPLE )
		{
			//	back to list/menu buttons
			if( $this->pSet->hasListPage() )
			{
				$this->xt->assign("back_button", true);
				$this->xt->assign("backbutton_attrs", "id=\"backButton".$this->id."\"");
				$this->xt->assign("mbackbutton_attrs", "id=\"extraBackButton".$this->id."\"");
			}
			else if( $this->isShowMenu() )
			{		
				$this->xt->assign("back_button", true);
				$this->xt->assign("backbutton_attrs", "id=\"backToMenuButton".$this->id."\"");
			}
		}
		
		if( $this->mode == VIEW_POPUP )
		{
			$this->xt->assign("close_button", true);
			$this->xt->assign("closebutton_attrs", "id=\"closeButton".$this->id."\"");
		}
		
		if( $this->editAvailable() )
		{
			$data = $this->getCurrentRecordInternal();
			$editable = CheckSecurity($data[ $this->pSet->getTableOwnerID() ], "Edit");
			
			if( $globalEvents->exists("IsRecordEditable", $this->tName) )
				$editable = $globalEvents->IsRecordEditable($this->getCurrentRecordInternal(), $editable, $this->tName);
			
			if( $editable )
			{
				$this->xt->assign("edit_page_button", true);
				$this->xt->assign("edit_page_button_attrs", "id=\"editPageButton".$this->id."\"");
				$this->xt->assign("header_edit_page_button_attrs", "id=\"headerEditPageButton".$this->id."\"");
			} 
		}
	}	

	public static function readViewModeFromRequest()
	{
		if( postvalue("mode") == "dashrecord" )
			return VIEW_DASHBOARD;
		elseif( postvalue("onFly") )
			return VIEW_POPUP;
		return VIEW_SIMPLE;
	}	
	/**
	 *	Returns true is the page has multistepped layout
	 *  @return boolean
	 */
	function isMultistepped()
	{
		return $this->pSet->isViewMultistep();
	}

	function editAvailable() {
		
		if( $this->dashElementData )
			return parent::editAvailable() && $this->dashElementData["details"][$this->tName]["edit"];
		return parent::editAvailable();
	}
	
	function assignViewFieldsBlocksAndLabels()
	{
		$viewFields = $this->pSet->getViewFields();

		foreach($viewFields as $fName)
		{
			$gfName = GoodFieldName($fName);

			if( !$this->isAppearOnTabs($fName) )
				$this->xt->assign($gfName."_fieldblock", true);
			else
				$this->xt->assign($gfName."_tabfieldblock", true);

			$this->xt->assign($gfName."_label", true);
			if( $this->is508 && $this->getLayoutVersion() != BOOTSTRAP_LAYOUT )
				$this->xt->assign_section($gfName."_label","<label for=\"" . $this->getInputElementId( $fName ) . "\">","</label>");
		}
	}
}
?>