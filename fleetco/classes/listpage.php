<?php
require_once(getabspath('classes/orderclause.php'));
require_once(getabspath("classes/sql.php"));
require_once(getabspath("classes/projectsettings.php"));

class ListPage extends RunnerPage 
{	
	public $gsqlHead = "";
	public $gsqlFrom = "";
	public $gsqlWhereExpr = "";
	public $gsqlGroupBy = "";
	public $gsqlHaving = ""; 	
	
	public $querySQL = "";
	
	/**
     * Page size
     * @var integer
     * @intellisense
     */
	public $gPageSize = 0;

	/**
	 * OrderClause object. For order clause building
	 * @type OrderClause
	 */
	protected $orderClause = null;

	/**
	 * Do export or not
	 * @type bool
	 */
	public $exportTo = false;
	
	/**
	 * Delete records enabled
	 * @type bool
	 */
	public $deleteRecs = false;
	
	/**
	 * Array of fields that is shown on list
	 * @type array()
	 * array['listFields']= array('fName'=>"@f.strName s", 'viewFormat'=>'@f.strViewFormat');
	 */
	public $listFields = array();
	

	/**
	 * Record set, that retrieved from DB
	 * @type link
	 */
	protected $recSet = null;
	
	/**
	 * If use group scurity or not
	 * @type integer
	 */
	public $nSecOptions = 0;
	
	/**
	 * String of OrderBy for query
	 * @var string
	 */
	public $strOrderBy = "";
	
	/**
	 * Number of record
	 * @type integer
	 */
	protected $recNo = 1;
	
	/**
	 * Id of row
	 * @type integer
	 */
	protected $rowId = 0; //fix it
	
	/**
	 * Array of selected records for delete
	 * @type array
	 */
	protected $selectedRecs = array();
	
	/**
	 * Number of record for delete
	 * @type integer
	 */
	protected $recordsDeleted = 0;
	
	/**
	 * String of part query Where for make sql "select" string
	 * @type string
	 */
	protected $strWhereClause = "";
	
	protected $strHavingClause = "";

	/**
	 * Original table name
	 * @var string
	 */
	public $origTName = ""; //fix it
	
	
	
	/**
	 * Fields that used for search on panel, and should be open on every page load
	 * @type array
	 */
	public $panelSearchFields = array();
	
	/**
	 * Array of key's fields
	 * @type array
	 */
	public $arrKeyFields = array();

	public $audit = null;
	
	/**
	 * Are there records on first page or not
	 * @type bool
	 */
	public $noRecordsFirstPage = false;

	/**
	 * String ?? main table owner's Id
	 * @type string
	 */
	public $mainTableOwnerID = "";
		
	/**
	 * Use print friendly or not
	 * @type bool
	 */
	public $printFriendly = false;

	/**
	 * Create login page or not
	 * @type bool
	 */
	public $createLoginPage = false;
	
	/**
	 * Searchpanel class builder
	 * @type object
	 */
	protected $searchPanel = null;
	
	/**
	 * Fields for which span val should be added
	 * @type array
	 */
	 protected $arrFieldSpanVal = array();
	
	/**
	 * records weren't deleted due locking
	 * @type Array
	 */
	protected $lockDelRec;
	
	public $firstTime = 0;
	
	protected $gMapFields = array();
	
	public $nLoginMethod; //fix it
	
	/**
	 * Types of all fields in a list row
	 */
	protected $recordFieldTypes = array(); //fix it
	
	/**
	 * class names for the fields that were chosen to hide mobile devices
	 * @type array
	 */
	protected $hiddenColumnClasses = array();
	
	/**
	 * Is show add page like popUp or not
	 * @type boolean
	 * @intellisense
	 */
	protected $showAddInPopup = false;
	
	/**
	 * Is show edit page like popUp or not
	 * @type boolean
	 * @intellisense
	 */
	protected $showEditInPopup = false;
	
	/**
	 * Is show view page like popUp or not
	 * @type boolean
	 * @intellisense
	 */
	protected $showViewInPopup = false;
	
	/**
	 * fieldClass function cache
	 * @type Array
	 */
	protected $fieldClasses = array();
	
	/**
	 * Constructor, set initial params
	 * @param array $params
	 */
	function __construct(&$params) 
	{
		// call parent constructor
		parent::__construct($params);
		
		
		$this->showAddInPopup = $this->pSet->isShowAddInPopup();
		$this->showEditInPopup = $this->pSet->isShowEditInPopup();
		$this->showViewInPopup = $this->pSet->isShowViewInPopup();		
		
		$this->pSet->setPage(PAGE_SEARCH);
		
		//	Before Process event
		$this->beforeProcessEvent();
		
		// Set language params, if have more than one language
		$this->setLangParams();
		
		if($this->searchClauseObj) //for asp & .net
			$this->jsSettings['tableSettings'][$this->tName]['simpleSearchActive'] = $this->searchClauseObj->simpleSearchActive;
		
		for($i = 0; $i < count($this->allDetailsTablesArr); $i ++) 
		{
			// get perm for det tables
			$this->permis[$this->allDetailsTablesArr[$i]['dDataSourceTable']]= $this->getPermissions($this->allDetailsTablesArr[$i]['dDataSourceTable']);
			
			// field names of detail keys of passed detail table, when current is master
			$this->detailKeysByD[$i] = $this->pSet->getDetailKeysByDetailTable($this->allDetailsTablesArr[$i]['dDataSourceTable']);
		}
		
		$this->genId();

		// init setting for params in hash URL for ajax list 
		if ( $this->listAjax && $this->mode != LIST_DETAILS )
		{
			$this->controlsMap['urlParams'] = $this->getUrlParams();
		}
		
		// fill span val indicator for totals
		$this->jsSettings['tableSettings'][$this->tName]['totalFields'] = array();
		foreach ($this->totalsFields as $tField)
		{
			$this->jsSettings['tableSettings'][$this->tName]['totalFields'][] = array('type'=>$tField['totalsType'], 'fName'=>$tField['fName'], 'format'=>$tField['viewFormat']);
			
			if ($tField['totalsType'] == 'COUNT')
			{
				$this->outputFieldValue($tField['fName'], 1);
			}
			else
			{
				$this->outputFieldValue($tField['fName'], 2);
			}
		}
		
		//if scroll body of grid
		$this->jsSettings['tableSettings'][$this->tName]['scrollGridBody'] = (( $this->listGridLayout == gltHORIZONTAL || $this->listGridLayout == gltFLEXIBLE )&& $this->isScrollGridBody);
		
		$this->jsSettings['tableSettings'][$this->tName]['permissions'] = $this->permis[$this->tName];
		if($this->pSet->getAdvancedSecurityType() == ADVSECURITY_EDIT_OWN)
			$this->jsSettings['tableSettings'][$this->tName]['isEditOwn'] = $this->permis[$this->tName];
		
		$this->settingsMap["tableSettings"]['inlineEdit'] = array("default"=>false,"jsName"=>"isInlineEdit");
		$this->settingsMap["tableSettings"]['inlineAdd'] = array("default"=>false,"jsName"=>"isInlineAdd");
		$this->settingsMap["tableSettings"]['copy'] = array("default"=>false,"jsName"=>"copy");
		$this->settingsMap["tableSettings"]['view'] = array("default"=>false,"jsName"=>"view");
		
		$this->jsSettings['tableSettings'][$this->tName]['listFields'] = array();
		for($i=0;$i<count($this->listFields);$i++) 
		{
			$this->jsSettings['tableSettings'][$this->tName]['listFields'][] = $this->listFields[$i]['fName'];
			// call addGoogleMapData before call proccessRecordValue!!!
			if ($this->listFields[$i]['viewFormat'] == FORMAT_MAP)
				$this->gMapFields[] = $i;
		}
		
		$this->addPopupLayoutNamesToSettings();
		
		$this->orderClause = new OrderClause($this);
		$this->orderClause->moveNext = $this->pSet->useMoveNext();

	}


	/**
	 * add Order data for set in URL 
	 */
	function addOrderUrlParam() {
		if ( count($this->orderClause->urlList) > 0 )
		{
			if ( !isset($this->controlsMap['urlParams']) )
			{
				$this->controlsMap['urlParams'] = array();
			}
			$this->controlsMap['urlParams']["orderby"] = implode(';',$this->orderClause->urlList);
		}
	}

	/**
	 * Get list params for using in Url hash (ajax reload)
	 */
	function getUrlParams()
	{
		$params = array();
		if ( @$_SESSION[$this->sessionPrefix."_qs"] )
		{
			$params["qs"] = rawurlencode($_SESSION[$this->sessionPrefix."_qs"]);
		}
		if ( @$_SESSION[$this->sessionPrefix."_q"] )
		{
			$params["q"] = rawurlencode($_SESSION[$this->sessionPrefix."_q"]);
		}
		if ( @$_SESSION[$this->sessionPrefix."_criteriaSearch"] && $_SESSION[$this->sessionPrefix."_criteriaSearch"] != "and" )
		{
			$params["criteria"] = $_SESSION[$this->sessionPrefix."_criteriaSearch"];
		}
		if ( @$_SESSION[$this->sessionPrefix."_filters"] )
		{
			$params["f"] = rawurlencode($_SESSION[$this->sessionPrefix."_filters"]);
		}
		if( !postvalue("qs") && !postvalue("q") && !isset( $_REQUEST["f"] ) && @$_SESSION[$this->sessionPrefix."_pagenumber"] && @$_SESSION[$this->sessionPrefix."_pagenumber"] > 1 )
		{
			$params["goto"] = $_SESSION[$this->sessionPrefix."_pagenumber"];
		}
		if( @$_SESSION[$this->sessionPrefix."_pagesize"] && $this->gPageSize != $_SESSION[$this->sessionPrefix."_pagesize"])
		{
			$params["pagesize"] = $_SESSION[$this->sessionPrefix."_pagesize"];
		}
		if( @$_SESSION[$this->sessionPrefix."_mastertable"] )
		{
			$params["mastertable"] = $_SESSION[$this->sessionPrefix."_mastertable"];
		}
		if( @$_SESSION[$this->sessionPrefix."_mastertable"] )
		{
			$params["mastertable"] = $_SESSION[$this->sessionPrefix."_mastertable"];
		}
		if ( count($this->masterKeysReq) )
		{
			for($i = 1; $i <= count($this->masterKeysReq); $i++)
			{
				$params["masterkey".$i] = $this->masterKeysReq[$i];
			}
		}
		elseif ( count($this->detailKeysByM) )
		{
			for( $i = 1; $i <= count($this->detailKeysByM); $i++ )
			{
				$params["masterkey".$i] = $this->masterKeysReq[$i];
			}	
		}

		if( $this->searchClauseObj )
		{
			if( $this->searchClauseObj->savedSearchIsRun )
				$params["savedSearch"] = true;
		}
		
		return $params;
	}
	
	/**
	 * Add array popupPagesLayoutNames data to the current table settings
	 * if it makes sense
	 */
	protected function addPopupLayoutNamesToSettings()
	{
		$layoutNames = $this->pSet->getPopupPagesLayoutNames();
		if( count( $layoutNames ) )
			$this->jsSettings['tableSettings'][$this->tName]['popupPagesLayoutNames'] = $this->pSet->getPopupPagesLayoutNames();
	}
	
	/**
	 * Add common html code for all modes on list page
	 */	
	function addCommonHtml() 
	{
		if ( !$this->isDashboardElement() && !$this->mobileTemplateMode())
			$this->body["begin"].= "<div id=\"search_suggest\" class=\"search_suggest\"></div>";
		
		if($this->is508) {
			$this->body["begin"].= "<a href=\"#skipdata\" title=\"".mlang_message("508_SKIP_DATA")."\" class=\"".$this->makeClassName("s508")."\">".mlang_message("508_SKIP_DATA")."</a>";
			$this->body["begin"].= "<a href=\"#skipmenu\" title=\"".mlang_message("508_SKIP_MENU")."\" class=\"".$this->makeClassName("s508")."\">".mlang_message("508_SKIP_MENU")."</a>";
			$this->body["begin"].= "<a href=\"#skipsearch\" title=\"".mlang_message("508_SKIP_SEARCH")."\" class=\"".$this->makeClassName("s508")."\">".mlang_message("508_SKIP_SEARCH")."</a>";
			$this->body["begin"].= "<a href=\"templates/helpshortcut.htm\" title=\"".mlang_message("508_HELP")."\" class=\"".$this->makeClassName("s508")."\">".mlang_message("508_HELP")."</a>";
		}
		
		//prepare for dispaly master table info on details table
		$this->displayMasterTableInfo();
	}
	
	/**
	 * Add common javascript files and code
	 */
	function addCommonJs() 
	{
		parent::addCommonJs();
		
		$this->addJsForGrid();
		
		// add button events if exist
		$this->addButtonHandlers();
		
		if( $this->allDetailsTablesArr )
		{
				$this->AddJSFile("include/jquery-ui/jquery-ui.min.js");
			$this->AddCSSFile("include/jquery-ui/smoothness/jquery-ui.min.css");
			$this->AddCSSFile("include/jquery-ui/smoothness/jquery-ui.theme.min.css");
		}
	}
	
	/**
	 * Add javascript code for grid
	 */
	function addJsForGrid()
	{ 
		if( $this->isResizeColumns )
			$this->prepareForResizeColumns();

		if( $this->pSet->isAllowFieldsReordering() && $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
		{
						$jqueryUiFile = "include/jquery-ui/jquery-ui.min.js";
			$this->AddJSFile( 'include/jquery.dragtable.js', $jqueryUiFile );
		}
		
		$this->jsSettings['tableSettings'][$this->tName]['showRows'] = ($this->numRowsFromSQL ? true : false);
		
		$this->initGmaps();	
	}
	
	/**
	 * If use resizable columns
	 * Prepare for resize main table
	 */
	function prepareForResizeColumns()
	{
		if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
		{
			$this->AddJSFile( 'include/colresizable.js' );
			return;
		}
		
		if( $this->mode != LIST_AJAX )
		{
			if( $this->debugJSMode === true )
				$this->AddJSFile("include/runnerJS/RunnerResizeGrid.js");
		}
	}

	/**
	 * Process master key value from request params
	 * For DPInline mode and use this mode on edit or add page
	 */
	function processMasterKeyValue() 
	{
		parent::processMasterKeyValue();
		
		//	reset search and page number
		$_SESSION[$this->sessionPrefix."_search"] = 0;
		if($this->firstTime)
			$_SESSION[$this->sessionPrefix."_pagenumber"] = 1;		
	}
	
	/**
	 * Add event before process list
	 */
	function beforeProcessEvent() 
	{
		if($this->eventExists("BeforeProcessList"))
			$this->eventsObject->BeforeProcessList( $this );
	}
	/**
	 * Set session variables
	 */
	function setSessionVariables() 
	{
		parent::setSessionVariables();
		
		if( $this->searchClauseObj->isSearchFunctionalityActivated() )
		{
			// if search used serialize clause object
			$_SESSION[$this->sessionPrefix.'_advsearch'] = serialize($this->searchClauseObj);
		}
		else
		{
			// Unset session for search if search not used
			unset($_SESSION[$this->sessionPrefix.'_advsearch']);
		}
		
		// Unset session for filters if filters  not activated
		if(!$this->searchClauseObj->filtersActivated)
			unset($_SESSION[$this->sessionPrefix.'_filters']);
		
		//set session order by
		if(@$_REQUEST["orderby"])
			$_SESSION[$this->sessionPrefix."_orderby"]= @$_REQUEST["orderby"];
		
		//set session goto
		if(@$_REQUEST["goto"])
			$_SESSION[$this->sessionPrefix."_pagenumber"]= @$_REQUEST["goto"];
				
		//	page number
		$this->myPage =(integer) $_SESSION[$this->sessionPrefix."_pagenumber"];
		if(! $this->myPage)
			$this->myPage = 1;
			
		//set page size 
		if(!$this->pageSize)
			$this->pageSize = $this->gPageSize;	
	}
	
	protected function assignColumnHeaderClasses()
	{
		for($i = 0; $i < count($this->listFields); $i ++) 
		{
			$field = $this->listFields[$i]['fName'];
			$goodName = GoodFieldname($field);
			// add class for field header as field value
			$fieldClassStr = $this->fieldClass($field);
			// add class for mobile columns hiding
			if( isset( $this->hiddenColumnClasses[$goodName] ) )
				$fieldClassStr .= " ".$this->hiddenColumnClasses[$goodName ];
			$this->xt->assign(GoodFieldName($field)."_class", $fieldClassStr); 
		}
	}
	
	/**
	 * Order links attribute for order on list page
	 */
	function orderLinksAttr()
	{
		for($i = 0; $i < count($this->listFields); $i ++) 
		{
			$field = $this->listFields[$i]['fName'];
			$goodName = GoodFieldname($field);
			$this->xt->assign($goodName."_orderlinkattrs", $this->setLinksAttr(GoodFieldName($this->listFields[$i]['fName'])));
			$this->xt->assign($goodName."_fieldheader", true);			
		}
	}
	/**
	 * Set order links attribute for order on list page
	 *
	 * @param String field	- name field, which is ordering
	 * @param String sort	- how is filed ordering, "a" - asc or "d" - desc, default is "a"
	 * @param String setIcon
	 * @return String
	 */
	function setLinksAttr($field, $sort = "", $setIcon = false) 
	{
		$href = GetTableLink($this->shortTableName, "list", "orderby=".($sort == "a" ? "d" : "a").$field);
		$orderlinkattrs = ' data-order="' . ($sort == "a" ? "d" : "a") . $field . '" id="order_'.$field.'_'.$this->id.'" name="order_'.$field.'_'.$this->id.'" data-href="'.$href.'" class="rnr-orderlink"';
		
		return $orderlinkattrs;
	}
	
	/**
	 * Delete selected records
	 */
	function deleteRecords() 
	{	
		global $globalEvents; 
		if( @$_REQUEST["a"] != "delete" )
			return;
		$message_class = "alert-warning";
		$this->deleteMessage = "";
		if(@$_REQUEST["mdelete"]) 
		{
			foreach(@$_REQUEST["mdelete"] as $ind) 
			{
				$selectedKeys = array();
				for($i = 0; $i < count($this->arrKeyFields); $i ++)
				{
					$selectedKeys[ $this->arrKeyFields[$i] ] = refine($_REQUEST["mdelete".($i + 1)][mdeleteIndex($ind)]);
				}
				$this->selectedRecs[] = $selectedKeys;
			}
		} 
		elseif(@$_REQUEST["selection"]) 
		{
			foreach(@$_REQUEST["selection"] as $keyblock) 
			{
				$arr = explode("&", refine($keyblock));
				if(count($arr) < count($this->arrKeyFields))
					continue;
				$selectedKeys = array();
				for($i = 0; $i < count($this->arrKeyFields); $i ++)
				{
					$selectedKeys[ $this->arrKeyFields[$i] ]= urldecode(@$arr[$i]);
				}
				$this->selectedRecs[] = $selectedKeys;
			}
		}
		
		$this->recordsDeleted = 0;
		$this->lockDelRec = array();
		foreach($this->selectedRecs as $keys) 
		{
			$where = KeyWhere($keys);
			//	delete only owned records
			if($this->nSecOptions != ADVSECURITY_ALL && $this->nLoginMethod == SECURITY_TABLE && $this->createLoginPage)
				$where = whereAdd($where, SecuritySQL("Delete", $this->tName));
			
			$strSQl = "delete from ".$this->connection->addTableWrappers( $this->origTName )." where ".$where;
			
			$retval = true;
			
			$deletedqResult = $this->connection->query( SQLQuery::gSQLWhere_having($this->gsqlHead, $this->gsqlFrom, $this->gsqlWhereExpr
				, $this->gsqlGroupBy, $this->gsqlHaving, $where) );
				
			$deleted_values = $this->cipherer->DecryptFetchedArray( $deletedqResult->fetchAssoc() );		
			if($globalEvents->exists("IsRecordEditable", $this->tName)) 
			{
				if(!$globalEvents->IsRecordEditable($deleted_values, true, $this->tName))
					continue;
			}
			
			if($this->eventExists("BeforeDelete"))
			{
				$tdeleteMessage = $this->deleteMessage;
				$retval = $this->eventsObject->BeforeDelete($where, $deleted_values, $tdeleteMessage, $this);
				$this->deleteMessage = $tdeleteMessage;
			}
				
			$lockRecord = false;
			
			if($this->lockingObj)
			{
				$lockWhere = array();
				foreach($keys as $keysvalue)
				{
					$lockWhere[] = rawurlencode($keysvalue);
				}
				
				if( $this->lockingObj->isLocked( $this->origTName, implode("&", $lockWhere), "1" ) ) 
				{	
					$lockRecord = true;
					$this->lockDelRec[] = $keys;
				}
				
				if( $this->mode == LIST_SIMPLE )
					$_SESSION[$this->sessionPrefix."_lockDelRec"] = $this->lockDelRec;
			}
			
			if(!$lockRecord && @$_REQUEST["a"] == "delete" && $retval) 
			{
				$this->recordsDeleted ++;
				// delete associated uploaded files if any
				DeleteUploadedFiles($this->pSet, $deleted_values);
			
				LogInfo($strSQl);
				$this->connection->exec( $strSQl );
				
				if($this->audit && $deleted_values)
				{
					$fieldsList = $this->pSet->getFieldsList();
					$i=0;
					foreach($deleted_values as $key=>$value)
					{
						if( IsBinaryType( $this->pSet->getFieldType($fieldsList[$i]) ) )
							$deleted_audit_values[ $fieldsList[$i] ] = $value;
						else
							$deleted_audit_values[ $key ] = $value;
						$i++;
					}
					$this->audit->LogDelete($this->tName, $deleted_audit_values, $keys);
				}
				
				if($this->eventExists("AfterDelete"))
				{
					$tdeleteMessage = $this->deleteMessage;
					$this->eventsObject->AfterDelete($where, $deleted_values,$tdeleteMessage, $this);
					$this->deleteMessage = $tdeleteMessage;
					$message_class = "alert-info";
				}
			}
			
			if (strlen($this->deleteMessage))
			{
				$this->xt->assignbyref("message", $this->deleteMessage);
				$this->xt->assignbyref( "message_class", $message_class );
				$this->xt->assign("message_block",true);
			}
		}
		if( count($this->selectedRecs) && $this->eventExists("AfterMassDelete") ) 
			$this->eventsObject->AfterMassDelete($this->recordsDeleted, $this);
	}
	
	/**
	 * PRG rule, to avoid POSTDATA resend
	 */
	function rulePRG() 
	{		
		if( $this->stopPRG )
			return false;
		
		if(no_output_done() && count($this->selectedRecs) && !strlen($this->deleteMessage)) 
		{	
			// redirect, add a=return param for saving SESSION
			HeaderRedirect($this->shortTableName, $this->getPageType(), "a=return");
			// turned on output buffering, so we need to stop script
			exit();
		}
	}
		
	/**
	 * Add code from program before show list
	 */
	function BeforeShowList() 
	{
		if($this->eventExists("BeforeShowList"))
		{
			$templatefile = $this->templatefile;
			$this->eventsObject->BeforeShowList($this->xt, $templatefile, $this);
			$this->templatefile = $templatefile;
		}
	}
		
	/**
	 * Common assign for diferent mode on list page
	 * Branch classes add to this method its individualy code
	 */
	function commonAssign() 
	{
		parent::commonAssign();
		$this->xt->assign("id", $this->id);
		$this->xt->assignbyref("body", $this->body);
		
		$this->xt->assign("newrecord_controls_block", $this->inlineAddAvailable() || $this->addAvailable() );
		if( $this->isDispGrid() && (
			$this->printAvailable() || 
			$this->exportAvailable() || 
			$this->deleteAvailable() || 
			$this->inlineEditAvailable() || 
			$this->inlineAddAvailable() || 
			$this->showAddInPopup && $this->addAvailable() ) )
		{
			$this->xt->assign("record_controls_block", true);
		}
		if( $this->numRowsFromSQL == 0 ) 
			$this->xt->displayBrickHidden("recordcontrol");
	
		//	add link
		if( $this->addAvailable() )
		{
			$this->xt->assign("add_link", true);
			$this->xt->assign("addlink_attrs", "href='".GetTableLink($this->shortTableName, "add")."' id=\"addButton".$this->id."\"");
			if ( $this->dashTName )
			{
				$this->xt->assign("addlink_getparams", "?fromDashboard=" . $this->dashTName);	
			}
		}
		//	inline add link
		$this->inlineAddLinksAttrs();
		
		//	changepwd link
		$this->xt->assign("changepwd_link", $_SESSION["AccessLevel"]!= ACCESS_LEVEL_GUEST && $_SESSION["fromFacebook"] == false);
		$this->xt->assign("changepwdlink_attrs", "href=\"".GetTableLink("changepwd")."\" onclick=\"window.location.href='".GetTableLink("changepwd")."';return false;\"");
		
		if($this->isShowMenu() || $this->isAdminTable()) 
			$this->xt->assign("quickjump_attrs", 'class="'.$this->makeClassName("quickjump").'"');
		
		foreach ($this->googleMapCfg['mainMapIds'] as $mapId)
			$this->xt->assign_event($mapId, $this, 'createMapDiv', array('mapId'=>$mapId, 'width'=>$this->googleMapCfg['mapsData'][$mapId]['width'], 'height'=>$this->googleMapCfg['mapsData'][$mapId]['height']));
		
		//add assign for grid block
		$this->addAssignForGrid();
		$this->xt->assign("grid_block", true);
		
		//select all link and attr
		$this->selectAllLinkAttrs();
		
		//edit selected link and attr
		$this->editSelectedLinkAttrs();

		//update selected link and attr
		$this->updateSelectedLinkAttrs();
		
		//save all link, attr, span	
		$this->saveAllLinkAttrs();
		
		//cansel all link, attr, span
		$this->cancelAllLinkAttrs();
		
		$this->assignDetailsTablesBadgeColors();
	}
	
	/**
	 * Common assign for grid block in diferent mode on list page
	 */
	function addAssignForGrid()
	{
		if( !$this->isDispGrid() )
			return;
		
		if($this->is508)
			$this->xt->assign_section("grid_header", "<caption style=\"display:none\">Table data</caption>", "");
		
		$this->xt->assign("endrecordblock_attrs", "colid=\"endrecord\"");
		
		
		for($i = 0; $i < count($this->listFields); $i ++) 
		{
			$this->xt->assign(GoodFieldName($this->listFields[$i]['fName'])."_fieldheadercolumn", true);
			$this->xt->assign(GoodFieldName($this->listFields[$i]['fName'])."_fieldcolumn", true);
			$this->xt->assign(GoodFieldName($this->listFields[$i]['fName'])."_fieldfootercolumn", true);
		}
		
		$colsonpage = $this->recsPerRowList;
		
		$record_header = array("data" => array());
		$record_footer = array("data" => array());
		if ($colsonpage > $this->recordsOnPage && $this->recordsOnPage && $this->listGridLayout != gltVERTICAL){
			$colsonpage = $this->recordsOnPage;
		}
		for($i = 0; $i < $colsonpage; $i ++) 
		{
			$rheader = array();
			$rfooter = array();
			if($i < $colsonpage - 1) 
			{
				$rheader["endrecordheader_block"] = true;
				$rfooter["endrecordfooter_block"] = true;
			}
			$record_header["data"][] = $rheader;
			$record_footer["data"][] = $rfooter;
		}
		$this->xt->assignbyref("record_header", $record_header);
		$this->xt->assignbyref("record_footer", $record_footer);
		$this->xt->assign("grid_header", true);
		$this->xt->assign("grid_footer", true);
		
		// hiding header, if no rows
		if(!$this->numRowsFromSQL){
			$this->xt->assign("gridHeader_class", " ".$this->makeClassName("hiddenelem"));
			$this->xt->assign("gridFooter_class", " ".$this->makeClassName("hiddenelem"));
		}
		
		
		// moved from search panel
		$gridTableStyle = "";
		$gridTableStyle = 'style="';
		$gridTableStyle .= $this->recordsOnPage>0 ? '"' : 'width: 50%;"'; 
		$this->xt->assign('gridTable_attrs', $gridTableStyle);

		//checkbox column
		$this->checkboxColumnAttrs();
		
		if( $this->editAvailable() )
		{
			$this->xt->assign("edit_column", true);
			$this->xt->assign("edit_headercolumn", true);
			$this->xt->assign("edit_footercolumn", true);
		}
		
		if( $this->inlineEditAvailable() )
		{
			$this->xt->assign("inlineedit_column", true);
			$this->xt->assign("inlineedit_headercolumn", true);
			$this->xt->assign("inlineedit_footercolumn", true);
		}
		
		//copy link
		if( $this->copyAvailable() )
			$this->xt->assign("copy_column", true);
		
		//view column
		if( $this->viewAvailable() )
			$this->xt->assign("view_column", true);
		
		//for list icons instead of list links
		$this->assignListIconsColumn();
		
		if( $this->detailsInGridAvailable() )
		{
			$this->xt->assign(GoodFieldName($this->tName)."_dtable_column", true);
			//$this->xt->assign("dtables_link", true);
		}
	
		//delete link and attr
		$this->deleteSelectedLink();

	}
	
	function createMapDiv(&$params) 
	{
		$div = '<div id="'.$params['mapId'].'" style="width: '.$params['width'].'px; height: '.$params['height'].'px;"></div>';
		echo $div;
	}
	/**
	 * Show import link
	 * Add import link attributes
	 */
	function importLinksAttrs() 
	{
		$this->xt->assign("import_link", $this->permis[$this->tName]['import']);
		$this->xt->assign("importlink_attrs", "id=\"import_".$this->id."\" name=\"import_".$this->id."\"");
	}
	
	/**
	 * Show inline add link
	 * Add inline add attributes
	 */

	function getInlineAddLinksAttrs()
	{
		return "name=\"inlineAdd_".$this->id."\" href='".GetTableLink($this->shortTableName, "add")."' id=\"inlineAdd".$this->id."\"";
	}

	 function inlineAddLinksAttrs()
	{
		if( !$this->inlineAddAvailable() )
			return;
		//inline add link and attr
		$this->xt->assign("inlineadd_link", true );
		$this->xt->assign("inlineaddlink_attrs", $this->getInlineAddLinksAttrs() );
	}
	
	/**
	 * Assign selectAll link and attrs
	 */
	function selectAllLinkAttrs()
	{
		$this->xt->assign("selectall_link", $this->deleteAvailable() || $this->permis[$this->tName]['export']|| $this->permis[$this->tName]['edit']);
		$this->xt->assign("selectalllink_span", $this->buttonShowHideStyle());
		$this->xt->assign("selectalllink_attrs", 
			"name=\"select_all".$this->id."\" 
			id=\"select_all".$this->id."\" 
			href=\"#\"");
	}
	
	/**
	 * Assign checkbox column, header and header attrs
	 */
	function checkboxColumnAttrs()
	{
		$this->xt->assign("checkbox_column", $this->deleteAvailable() || $this->exportAvailable() || $this->inlineEditAvailable() || $this->printAvailable());
		$this->xt->assign("checkbox_header", true);
		$this->xt->assign("checkboxheader_attrs", "id=\"chooseAll_".$this->id."\" class=\"chooseAll".$this->id."\"");
	}
	
	/**
	 * Get common attrs for Print and Export links
	 */
	function getPrintExportLinkAttrs($page)
	{
		if(!$page)
			return '';
		return "name=\"".$page."_selected".$this->id."\" 
				id=\"".$page."_selected".$this->id."\"
				href = '".GetTableLink($this->shortTableName, $page)."'";
	}
	
	/**
	 * Show or hide current button 
	 */
	function buttonShowHideStyle($link="")
	{
		if($link == 'saveall' || $link == 'cancelall')
			return ' style="display:none;" ';

		return $this->numRowsFromSQL > 0 ? '' : ' style="display:none;" ';
	}
	
	/**
	 * Assign editSelected link and attrs 
	 */
	function editSelectedLinkAttrs()
	{
		if( !$this->inlineEditAvailable() ) 
			return;

		$this->xt->assign("editselected_link", true );
		$this->xt->assign("editselectedlink_span", $this->buttonShowHideStyle());
		$this->xt->assign("editselectedlink_attrs","
					href='".GetTableLink($this->shortTableName, "edit")."' 
					name=\"edit_selected".$this->id."\" 
					id=\"edit_selected".$this->id."\"");
	}

	function updateSelectedLinkAttrs()
	{
		if( !$this->updateSelectedAvailable() ) 
			return;

		$this->xt->assign("updateselected_link", true );
		$this->xt->assign("updateselectedlink_attrs","
					href='".GetTableLink($this->shortTableName, "edit")."' 
					name=\"update_selected".$this->id."\" 
					id=\"update_selected".$this->id."\"" . $this->buttonShowHideStyle() );
	}
	
	/**
	 * Assign saveAll link and attrs
	 */
	function saveAllLinkAttrs()
	{
		$this->xt->assign("saveall_link",$this->permis[$this->tName]['edit'] || $this->permis[$this->tName]['add']);
		$this->xt->assign("savealllink_span",$this->buttonShowHideStyle('saveall'));	
		$this->xt->assign("savealllink_attrs","name=\"saveall_edited".$this->id."\" id=\"saveall_edited".$this->id."\"");
	}
	
	/**
	 * Assign cancelAll link and attrs 
	 */
	function cancelAllLinkAttrs()
	{
		$this->xt->assign("cancelall_link",$this->permis[$this->tName]['edit'] || $this->permis[$this->tName]['add']);
		$this->xt->assign("cancelalllink_span",$this->buttonShowHideStyle('cancelall'));
		$this->xt->assign("cancelalllink_attrs","name=\"revertall_edited".$this->id."\" id=\"revertall_edited".$this->id."\"");
	}
	
	/**
	 * Assign delete selected link 
	 */
	function deleteSelectedLink()
	{	
		if( !$this->deleteAvailable() )
			return;

		$this->xt->assign("deleteselected_link", true );
		
		$this->xt->assign("deleteselectedlink_span", $this->buttonShowHideStyle());
		$this->xt->assign("deleteselectedlink_attrs", $this->getDeleteLinksAttrs());
	}

	function getDeleteLinksAttrs()
	{
		return "id=\"delete_selected".$this->id."\" name=\"delete_selected".$this->id."\" ";
	}
	
	function getEditLinksAttrs()
	{
		return "id=\"edit_selected".$this->id."\" name=\"edit_selected".$this->id."\" ";
	}
	
	function getFormInputsHTML() 
	{
		return '';
	}
	
	function getFormTargetHTML() 
	{
		return '';
	}
	
	/**
	 * Seeks recs, depending on page number etc.
	 * @param string $strSQL
	 */
	protected function seekPageInRecSet( $strSQL ) 
	{
		$listarray = false;
		
		if($this->eventExists("ListQuery"))
		{
			$arrFieldForSort = array();
			$arrHowFieldSort = array();
			for($i = 0; $i < count($this->orderClause->fieldsList); $i++)
			{
				$arrFieldForSort[] = $this->orderClause->fieldsList[$i]->fieldIndex; 
				$arrHowFieldSort[] = $this->orderClause->fieldsList[$i]->orderDirection; 
			}
			$listarray = $this->eventsObject->ListQuery($this->searchClauseObj, $arrFieldForSort, $arrHowFieldSort, 
				$this->masterTable, $this->masterKeysReq, null, $this->pageSize, $this->myPage, $this);
		}
		
		if( $listarray !== false )
			$this->recSet = $listarray;
		else
			$this->recSet = $this->connection->queryPage( $strSQL, $this->myPage, $this->pageSize, $this->maxPages > 1 );
	}
	
	/**
	 * Builds SQL query, for retrieve data from DB
	 */
	function buildSQL() 
	{
		$this->gstrOrderBy = $this->gQuery->OrderByToSql();
		$this->gsqlHead = $this->gQuery->HeadToSql();
		if( $this->connection->dbType == nDATABASE_DB2 ) 
			$this->gsqlHead.=", ROW_NUMBER() over () as DB2_ROW_NUMBER ";
	
		$this->gsqlFrom = $this->gQuery->FromToSql();
		$this->gsqlWhereExpr = $this->gQuery->WhereToSql();
		$this->gsqlGroupBy = $this->gQuery->GroupByToSql();
		$this->gsqlHaving = $this->gQuery->Having()->toSql($this->gQuery);

		$whereComponents = $this->getWhereComponents();
		$searchWhere = $whereComponents["searchWhere"];
		$searchHaving = $whereComponents["searchHaving"];
		$joinFromPart = $whereComponents["joinFromPart"];
		$searchCombineType = $whereComponents["searchUnionRequired"] ? "or" : "and";	
		
		$filterWhere = $this->getFiltersWhere();
		$filterHaving = $this->getFiltersHaving();
		
		//$this->strWhereClause could contain some conditions for a lookup list page so It needs combining with commonWhere
		$sqlWhere = combineSQLCriteria( array($whereComponents["commonWhere"], $filterWhere, $this->strWhereClause) ); 		
		$sqlHaving = combineSQLCriteria( array($whereComponents["commonHaving"], $filterHaving) );
		$sqlFrom = $this->gsqlFrom.$joinFromPart;

		$this->strWhereClause = combineSQLCriteria( array($this->strWhereClause, $searchWhere, $this->SecuritySQL("Search", $this->tName),
			$this->getMasterTableSQLClause(), $filterWhere) );
			
		$this->strHavingClause = combineSQLCriteria( array($searchHaving, $filterHaving) );
			
		if( $this->mode != LIST_DETAILS && $this->noRecordsFirstPage && !$this->isRequiredSearchRunning() )
		{
			$this->strWhereClause = whereAdd($this->strWhereClause, "1=0");
			$sqlWhere = combineSQLCriteria( array($sqlWhere, "1=0") );
		}		
		
		$strSQL = SQLQuery::gSQLWhere_having($this->gsqlHead, $sqlFrom, $sqlWhere, $this->gsqlGroupBy, $sqlHaving, $searchWhere, $searchHaving, $searchCombineType);	
		$strSQL.= " ".trim( $this->strOrderBy );
		
		$strSQLbak = $strSQL;
		$whereModifiedInEvent = false;
		$orderbyModifiedInEvent = false;
		if( $this->eventExists("BeforeQueryList") )
		{
			$tstrWhereClause = $this->strWhereClause;
			$tstrOrderBy = $this->strOrderBy;
			
			$this->eventsObject->BeforeQueryList($strSQL, $tstrWhereClause, $tstrOrderBy, $this);
			
			$whereModifiedInEvent = $tstrWhereClause != $this->strWhereClause;
			$orderbyModifiedInEvent = $tstrOrderBy != $this->strOrderBy;
			$this->strWhereClause = $tstrWhereClause;
			$this->strOrderBy = $tstrOrderBy;
		
			//	Rebuild SQL if needed
			if($strSQL != $strSQLbak) 
			{
				//	changed $strSQL - old style	
				$this->numRowsFromSQL = GetRowCount($strSQL, $this->connection);
			}
			else if( $whereModifiedInEvent || $orderbyModifiedInEvent )
			{
				$strSQL = SQLQuery::gSQLWhere_having($this->gsqlHead, $sqlFrom, $this->gsqlWhereExpr, $this->gsqlGroupBy, $this->gsqlHaving
					, $this->strWhereClause, $this->strHavingClause, $searchCombineType);
				$strSQL.= " ".trim( $this->strOrderBy );
			}
		}
		
		$rowcount = false;
		if($this->eventExists("ListGetRowCount"))
			$rowcount = $this->eventsObject->ListGetRowCount($this->searchClauseObj, $this->masterTable, $this->masterKeysReq, null, $this);
		
		if( $rowcount !== false )
			$this->numRowsFromSQL = $rowcount;
		else
		{
			if( $whereModifiedInEvent ) 
			{
				$this->numRowsFromSQL = SQLQuery::gSQLRowCount_int( $this->gsqlHead, $sqlFrom, $this->gsqlWhereExpr, $this->gsqlGroupBy
					, $this->gsqlHaving, $this->strWhereClause, $this->strHavingClause, $this->connection, $searchCombineType );
			} 
			else 
			{
				$this->numRowsFromSQL = SQLQuery::gSQLRowCount_int($this->gsqlHead, $sqlFrom, $sqlWhere, $this->gsqlGroupBy
					, $sqlHaving, $searchWhere, $searchHaving, $this->connection, $searchCombineType);
			}
		}

		if( $this->addMasterDetailSubQuery() ) 
		{		
			$strSQL = SQLQuery::gSQLWhere_having($this->gsqlHead, $sqlFrom, $sqlWhere, $this->gsqlGroupBy, $sqlHaving, $searchWhere, $searchHaving, $searchCombineType);	
			$strSQL.= " ".trim( $this->strOrderBy );		
		}
		
		//	save SQL parts to use in "Export" and "Printer-friendly" pages and to get prev\next records
		$_SESSION[$this->sessionPrefix."_sql"] = $strSQL;
		$_SESSION[$this->sessionPrefix."_where"] = $this->strWhereClause;
		$_SESSION[$this->sessionPrefix."_having"] = $this->strHavingClause;
		$_SESSION[$this->sessionPrefix."_criteria"] = $searchCombineType;
		$_SESSION[$this->sessionPrefix."_order"] = $this->strOrderBy;
		$_SESSION[$this->sessionPrefix."_joinFromPart"] = $joinFromPart;			
		
		LogInfo($strSQL);
		$this->querySQL = $strSQL;
 	}
	
	/**
	 * Adds sub query for counting details recs number
	 * add to gsqlHead subquery counting the number of details
	 * @return Boolean
	 */
	protected function addMasterDetailSubQuery() 
	{
		if( $this->numRowsFromSQL == 0 )
			return false;

		if( $this->pageSize <= 20 || $this->pageSize / $this->numRowsFromSQL < 0.1 ) // #12351
			return false;
		
		$added = false;
		
		for($i = 0; $i < count($this->allDetailsTablesArr); $i++) 
		{
			$detailData = $this->allDetailsTablesArr[$i];
			if( $detailData['dispChildCount'] || $detailData['hideChild'] ) 
			{
				$dataSourceTName = $detailData['dDataSourceTable'];

				if( !$this->isDetailTableSubquerySupported( $dataSourceTName, $i ) )
					continue;
				
				$detailsSettings = $this->pSet->getTable($dataSourceTName);
				$detailsQuery = $detailsSettings->getSQLQuery();
				$detailsSqlWhere = $detailsQuery->WhereToSql();
				
				$masterWhere = "";
				foreach($this->masterKeysByD[$i] as $idx => $val) 
				{
					if($masterWhere)
						$masterWhere.= " and ";
					
					$masterWhere.= $this->cipherer->GetFieldName( $this->connection->addTableWrappers("subQuery_cnt")."." 
							.$this->connection->addFieldWrappers($this->detailKeysByD[$i][$idx]), $this->masterKeysByD[$i][$idx] )
						."=".$this->cipherer->GetFieldName( $this->connection->addTableWrappers($this->origTName)."."
							.$this->connection->addFieldWrappers($this->masterKeysByD[$i][$idx]), $this->masterKeysByD[$i][$idx] );
				}
				
				//	add a key field to the select list
				$subQ = "";
				foreach($this->detailKeysByD[$i] as $k) 
				{
					if( strlen($subQ) )
						$subQ.= ",";
					$subQ.= RunnerPage::_getFieldSQL($k, $this->connection, $detailsSettings);
				}
				$subQ = "SELECT ".$subQ." ".$detailsQuery->FromToSql();
				
				//	add security where clause for sub query	
				$securityClause = SecuritySQL("Search", $dataSourceTName);
				if( strlen($securityClause) )
					$subQ.= " WHERE ".whereAdd($detailsSqlWhere, $securityClause);
				elseif( strlen($detailsSqlWhere) )
					$subQ.= " WHERE ".whereAdd("", $detailsSqlWhere);
				
				// add detail table query tail	
				$subQ.= " ".$detailsQuery->TailToSql();	
				
				$countsql = "SELECT count(*) FROM (".$subQ.") ".$this->connection->addTableWrappers("subQuery_cnt")." WHERE ".$masterWhere;
				$this->gsqlHead.= ",(".$countsql.") as ".$this->connection->addFieldWrappers($dataSourceTName."_cnt")." ";
				
				$added = true;
			}
		}
		
		return $added;
	}

	/**
	 * Check if its possible to add to the main table query a subquery that contes the number of details. #9875
	 * @param String dDataSourceTable	The detail datasource table name
	 * @param Number dTableIndex	The detail table index in the allDetailsTablesArr prop
	 * @return Boolean
	 */
	protected function isDetailTableSubquerySupported( $dDataSourceTName, $dTableIndex )
	{	
		global $cman, $bSubqueriesSupported;	

		return $bSubqueriesSupported && $this->connection->checkDBSubqueriesSupport() 
			&& $cman->checkTablesSubqueriesSupport( $this->tName, $dDataSourceTName ) 
			&& $this->checkfDMLinkFieldsOfTheSameType( $dDataSourceTName, $dTableIndex );
	}

	/**
	 * #12351
	 * @param String dDataSourceTable	The detail datasource table name
	 * @param Number dTableIndex	The detail table index in the allDetailsTablesArr prop	
	 * @return Boolean	
	 */
	protected function isDetailTableSubqueryApplied( $dDataSourceTName, $dTableIndex )
	{
		return !( $this->pageSize <= 20 || $this->pageSize / $this->numRowsFromSQL < 0.1 ) && $this->isDetailTableSubquerySupported( $dDataSourceTName, $dTableIndex );
	}	
	
	/**
	 * Check if detail and master tables' link fields have the same type.
	 * They must be of the same type (for not mySQL databases) 
	 * to add a subquery counting the number of detais for each record.
	 *
	 * @param String dDataSourceTable	The detail datasource table name	 
	 * @param Number dTableIndex	The detail table index in the allDetailsTablesArr prop	 
	 * @return Boolean
	 */
	protected function checkfDMLinkFieldsOfTheSameType( $dDataSourceTName, $dTableIndex )
	{
		if( $this->allDetailsTablesArr[ $dTableIndex ]['dDataSourceTable'] != $dDataSourceTName )		
			return false;
			
		if( $this->connection->dbType == nDATABASE_MySQL ) 
			return true;
		
		foreach($this->masterKeysByD[ $dTableIndex ] as $idx => $val) 
		{
			// get field types
			$masterLinkFieldType = $this->pSet->getFieldType( $this->masterKeysByD[ $dTableIndex ][ $idx ] );
			$detailLinkFieldType = $this->pSet->getFieldType( $this->detailKeysByD[ $dTableIndex ][ $idx ] );
			// if different data types we can't use subQ
			if( $masterLinkFieldType != $detailLinkFieldType )
				return false;
		}

		return true;
	}	
	
	/**
	 * @return Boolean
	 */
	protected function isInlineAreaToSet()
	{
		return $this->inlineAddAvailable() || $this->addAvailable() && $this->showAddInPopup;
	}
	
	/**
	 * Fills info in array about grid.
	 * For new add row
	 * @param array $rowInfoArr array with total info, that assignes grid
	 */
	function prepareInlineAddArea(&$rowInfoArr)
	{
		$rowInfoArr["data"]= array();
		if( !$this->isInlineAreaToSet() )
			return;
			
		$editlink = "";
		$copylink = "";
		//	add inline add row
		$row = array();
		$row["rowclass"] = "gridRowAdd ".$this->makeClassName("hiddenelem");
		$row["rsclass"] = "gridRowSepAdd ".$this->makeClassName("hiddenelem");
		if($this->listGridLayout == gltVERTICAL)
			$row["rowattrs"] .= "vertical=\"1\"";
				
		$record = array();
		$record["edit_link"]= true;
		$record["inlineedit_link"]= true;
		$record["view_link"]= true;
		$record["copy_link"]= true;
		$record["checkbox"]= true;
		$record["editlink_attrs"]= "id=\"editLink_add".$this->id."\"";
		
		$record["copylink_attrs"]= "id=\"copyLink_add".$this->id."\" name=\"copyLink_add".$this->id."\"";
		$record["viewlink_attrs"]= "id=\"viewLink_add".$this->id."\" name=\"viewLink_add".$this->id."\"";
		$record["checkbox_attrs"]= "id=\"check_add".$this->id."\" name=\"selection[]\"";
		
		//	add container for inline add controls
		$addedInlineAddContainer = false;
		if( $this->inlineEditAvailable() )
		{
			$record["inlineeditlink_attrs"]= "id=\"inlineEdit_add".$this->id."\" ";
			$addedInlineAddContainer = true;
		}
		
		if( $this->detailsInGridAvailable() )
			$record["dtables_link"] = true;
		
		$hideDPLink = false;
		for($i = 0; $i < count($this->allDetailsTablesArr); $i ++) 
		{
			//detail tables
			$dDataSourceTable = $this->allDetailsTablesArr[$i]['dDataSourceTable'];
			$dShortTable = $this->allDetailsTablesArr[$i]['dShortTable'];
		
			$record[$dShortTable."_dtable_link"]=($this->permis[$dDataSourceTable]['add'] || $this->permis[$dDataSourceTable]['search']);
			
			if( $this->allDetailsTablesArr[$i]['dispChildCount'] )
			{			
				$record[ $dShortTable."_childnumber_attr" ] = " id='cntDet_".$dShortTable."_'";
				$record[ $dShortTable."_link_attrs" ] = " href=\"#\" id=\"details_add".$this->id."_".$dShortTable."\" ";
				$record[ $dShortTable."_childcount" ] = true;
			}
			
			$htmlAttributes = array(); 
			$record[$dShortTable."_dtablelink_attrs"] = "";
			$htmlAttributes["href"] = GetTableLink($dShortTable, "list")."?";
			$htmlAttributes["id"] = $dShortTable."_preview".$this->id;
			$htmlAttributes["style"] = "display:none;";
			if( $this->allDetailsTablesArr[$i]['previewOnList'] == DP_INLINE ) 
			{
				$htmlAttributes["caption"] = GetTableCaption(GoodFieldName($dDataSourceTable));
				$htmlAttributes["data-pagetype"] = $this->allDetailsTablesArr[$i]['dType'];				
			}
			foreach ($htmlAttributes as $attr => $value)
			{
				$record[$dShortTable."_dtablelink_attrs"] .=  $attr . "=\"" . $value .  "\" ";
			}
			
			if( $this->allDetailsTablesArr[$i]['hideChild'] && !$hideDPLink )
				$hideDPLink = true;
		}
		$record["dtables_link_attrs"] = " href=\"#\" id=\"details_add".$this->id."\" ";
		if( $hideDPLink )
			$record["dtables_link_attrs"].= " class=\"".$this->makeClassName("hiddenelem")."\"";
			
		$this->addSpansForGridCells('add', $record);
		
		for($i = 0; $i < count($this->listFields); $i ++) 
		{
			$field = $this->listFields[$i]['fName'];
			$gFieldName = GoodFieldName( $field );
			if(!$addedInlineAddContainer)
			{
				if($i==0 && !( $this->inlineEditAvailable() ))
				{
					$span = "<span id=\"inlineEdit_add".$this->id."\"></span>";
					$record[ $gFieldName."_value" ] = $span . $record[ $gFieldName."_value" ] ;
				}
			}
			
			$record[ $gFieldName."_class" ] .= $this->fieldClass( $field );

			$this->addHiddenColumnClasses($record, $field);
							
		}
		
		if($this->colsOnPage > 1)
			$record["endrecord_block"]= true;
		$record["grid_recordheader"]= true;
		$record["grid_vrecord"]= true;
		$row["grid_record"]= array("data" => array());
		//set the $row["grid_record"] value
		$this->setRowsGridRecord($row, $record); 
		
		for($i = 1; $i < $this->colsOnPage; $i ++) 
		{
			$rec = array();
			if($i < $this->colsOnPage - 1)
				$rec["endrecord_block"]= true;
			if($row["grid_record"]["data"])
			{				
				$row["grid_record"]["data"][]= $rec;
			}	
		}
		
		$row["grid_rowspace"]= true;
		$row["grid_recordspace"]= array("data" => array());
		for($i = 0; $i < $this->colsOnPage * 2 - 1; $i ++)
			$row["grid_recordspace"]["data"][]= true;
		$rowInfoArr["data"][]= $row;
		
	}
	/**
	 * Incapsulates beforeProccessRow event
	 *
	 * @return array
	 */
	function beforeProccessRow() 
	{
		if($this->eventExists("ListFetchArray"))
			$data = $this->eventsObject->ListFetchArray($this->recSet, $this);
		else
			$data = $this->cipherer->DecryptFetchedArray( $this->connection->fetch_array($this->recSet) );	
			
		while($data) 
		{
			if($this->eventExists("BeforeProcessRowList")) 
			{
				if(! $this->eventsObject->BeforeProcessRowList($data, $this))
				{
					if($this->eventExists("ListFetchArray"))
						$data = $this->eventsObject->ListFetchArray($this->recSet, $this);
					else
						$data = $this->cipherer->DecryptFetchedArray( $this->connection->fetch_array($this->recSet) );
					continue;
				}
			}
			return $data;
		}
	}
	
	/**
	 * If use list icons instead list of links
	 * Then continue count width for td, which contains icons
	 * And depends of this width assign or not list icons column
	 *
	 * @param {integer} $editPermis - edit permissions
	 * @param {integer} $addPermis - add permissions
	 * @param {integer} $searchPermis - search permissions
	 */
	function assignListIconsColumn()
	{	
		if( $this->inlineEditAvailable() || $this->viewAvailable() || $this->editAvailable() )
		{
			$this->xt->assign("listIcons_column", true);
		}
	}
	
	/**
	 * Fills list grid. This method use many other methods
	 */
	function fillGridData() 
	{
		global $globalEvents;
		$totals=array();
		//	fill $rowinfo array
		$rowinfo = array();
		$this->prepareInlineAddArea($rowinfo);
		
		$this->setDetilsBadgeStyles();
		
		//	add grid data
		$data = $this->beforeProccessRow();
		$lockRecIds = array();
		
		$tKeys = $this->pSet->getTableKeys();
		
		$this->controlsMap['gridRows'] = array();
		
		for($i = 0; $i < count($this->listFields); $i ++)
		{
			$this->recordFieldTypes[ $this->listFields[$i]['fName'] ] = $this->pSet->getFieldType( $this->listFields[$i]["fName"] );
		}
		
		while($data && ($this->recNo <= $this->pageSize || $this->pageSize == -1)) 
		{
			$row = array();
			
			$row["grid_record"]= array();
			$row["grid_record"]["data"]= array();
			$this->rowId ++;
			
			for($col = 1; $data && ($this->recNo <= $this->pageSize || $this->pageSize == -1) && $col <= $this->colsOnPage; $col ++) 
			{
				$this->countTotals($totals, $data);
				$record = array();
				$this->genId();
				
				$row["rowattrs"] = " id=\"gridRow".$this->recId."\"";
				$gridRowInd = count($this->controlsMap['gridRows']);
				$this->controlsMap['gridRows'][$gridRowInd] = array();
				$this->controlsMap['gridRows'][$gridRowInd]['id'] = $this->recId;
				$this->controlsMap['gridRows'][$gridRowInd]['rowInd'] = $gridRowInd;
				//Add the connection with containing row. It's important for vertical layout's multiple records per row mode
				$this->controlsMap['gridRows'][$gridRowInd]['contextRowId'] = $this->recId + $this->colsOnPage - $col;
				$isEditable = $this->permis[$this->tName]['edit'] && CheckSecurity($data[$this->mainTableOwnerID], "Edit", $this->tName) 
					|| $this->permis[$this->tName]['delete'] && CheckSecurity($data[$this->mainTableOwnerID], "Delete", $this->tName);
				if($globalEvents->exists("IsRecordEditable", $this->tName))
					$isEditable = $globalEvents->IsRecordEditable($data, $isEditable, $this->tName);
				$this->controlsMap['gridRows'][$gridRowInd]['isEditOwnRow'] = $isEditable;
				$this->controlsMap['gridRows'][$gridRowInd]['keyFields'] = array();
				$this->controlsMap['gridRows'][$gridRowInd]['keys'] = array();
				for($i = 0; $i < count($tKeys); $i ++) {
					$this->controlsMap['gridRows'][$gridRowInd]['keyFields'][$i] = $tKeys[$i];
					$this->controlsMap['gridRows'][$gridRowInd]['keys'][$i] = $data[$tKeys[$i]];
				}
				$record["edit_link"] = $isEditable;
				$record["inlineedit_link"] = $isEditable;
				$record["view_link"] = $this->permis[$this->tName]['search'];
				$record["copy_link"] = $this->permis[$this->tName]['add'];
				
				
				//get record id for locking record
				if($this->lockingObj)
				{	
					if($this->mode == LIST_SIMPLE && !count($this->lockDelRec) && isset($_SESSION[$this->sessionPrefix."_lockDelRec"]))
					{
						$this->lockDelRec = $_SESSION[$this->sessionPrefix."_lockDelRec"];
						unset($_SESSION[$this->sessionPrefix."_lockDelRec"]);
					}
					for($i=0;$i<count($this->lockDelRec);$i++)
					{
						$lockDelRec = true;
						foreach($this->lockDelRec[$i] as $key => $val)
						{
							if($data[$key]!=$val)
							{
								$lockDelRec = false;
								break;
							}
						}
						if($lockDelRec)
						{
							$lockRecIds[] = $this->recId;
							break;
						}
					}
				}
				//	detail tables
				$this->proccessDetailGridInfo($record, $data, $gridRowInd);
				
				//	key fields
				$keyblock = "";
				$editlink = "";
				$copylink = "";
				$keylink = "";
				$keys = array(); //to open view pages in popup clicking on markers
				
				for($i = 0; $i < count($tKeys); $i ++) {
					if($i != 0) {
						$keyblock.= "&";
						$editlink.= "&";
						$copylink.= "&";
					}
					$keyblock.= rawurlencode($data[$tKeys[$i]]);
					$editlink.= "editid".($i + 1)."=".runner_htmlspecialchars(rawurlencode($data[$tKeys[$i]]));
					$copylink.= "copyid".($i + 1)."=".runner_htmlspecialchars(rawurlencode($data[$tKeys[$i]]));
					$keylink.= "&key".($i + 1)."=".runner_htmlspecialchars(rawurlencode(@$data[$tKeys[$i]]));
					$keys[$i] = $data[$tKeys[$i]];
					
				}
				
				$this->recIds[] = $this->recId;
				$record["recordattrs"] = "data-record-id=\"".$this->recId."\"";	
				$record["editlink_attrs"]= "id=\"editLink".$this->recId."\" name=\"editLink".$this->recId."\" href='".GetTableLink($this->shortTableName, "edit", $editlink)."'";
				$record["copylink_attrs"]= "id=\"copyLink".$this->recId."\" name=\"copyLink".$this->recId."\" href='".GetTableLink($this->shortTableName, "add", $copylink)."'";
				$record["viewlink_attrs"]= "id=\"viewLink".$this->recId."\" name=\"viewLink".$this->recId."\" href='".GetTableLink($this->shortTableName, "view", $editlink)."'";
				$record["inlineeditlink_attrs"]= "id=\"iEditLink".$this->recId."\" name=\"iEditLink".$this->recId."\" href='".GetTableLink($this->shortTableName, "edit", $editlink)."'";
				if( $this->mobileTemplateMode() ) 
				{
					if( $this->viewAvailable() )
						$record["recordattrs"] .= " data-viewlink='".GetTableLink($this->shortTableName, "view", $editlink)."'";	
					if( $this->editAvailable() && $isEditable )
						$record["recordattrs"] .= " data-editlink='".GetTableLink($this->shortTableName, "edit", $editlink)."'";	
				}
				
				$this->fillCheckAttr($record, $data, $keyblock);
				
				if( $this->detailsInGridAvailable() )
					$record["dtables_link"] = true;
				
				if( $this->hasBigMap() )
					$this->addBigGoogleMapMarkers($data, $keys, $editlink);
				
				for($i = 0; $i < count($this->listFields); $i ++) 
				{
					// call addGoogleMapData before call proccessRecordValue!!!
					if( $this->checkFieldHasMapData($i) )
						$this->addGoogleMapData( $this->listFields[$i]['fName'], $data, $keys, $editlink ); 
				
					$record[$this->listFields[$i]['valueFieldName']] = $this->proccessRecordValue($data, $keylink, $this->listFields[$i]);
				}
								
				$this->addSpansForGridCells('edit', $record, $data);
								
				if($this->eventExists("BeforeMoveNextList"))
					$this->eventsObject->BeforeMoveNextList($data, $row, $record, $this);
				
				$this->spreadRowStyles($data, $row, $record);
											
				$this->setRowCssRules($record);
				
				for($i = 0; $i < count($this->listFields); $i ++) 
				{
					$field = $this->listFields[$i]['fName'];
					$this->setRowClassNames($record, $field);					
					$this->addHiddenColumnClasses($record, $field);
				}
								
				if($col < $this->colsOnPage)
					$record["endrecord_block"]= true;
				$record["grid_recordheader"]= true;
				$record["grid_vrecord"]= true;
				//set the $row["grid_record"] value
				$this->setRowsGridRecord($row, $record);
				
				$data = $this->beforeProccessRow();
				
				$this->recNo ++;
			}
			if($col <= $this->colsOnPage)	
			{
				for($gInd = 0; $gInd < $col - 1; $gInd++)
				{
					$this->controlsMap['gridRows'][$gridRowInd - $gInd]['contextRowId'] = $this->recId;
				}
			}
			while($col <= $this->colsOnPage) 
			{
				$record = array();
				if($col < $this->colsOnPage)
					$record["endrecord_block"]= true;
				if($row["grid_record"]["data"])
				{				
					$row["grid_record"]["data"][]= $record;
				}
				$col ++;
			}
			//	assign row spacings for vertical layout
			$row["grid_rowspace"]= true;
			$row["grid_recordspace"]= array("data" => array());
			for($i = 0; $i < $this->colsOnPage * 2 - 1; $i ++)
				$row["grid_recordspace"]["data"][]= true;
			
			$rowinfo["data"][]= $row;
		}
		if($this->lockingObj)
			$this->jsSettings['tableSettings'][$this->tName]['lockRecIds'] = $lockRecIds;
		
		if(count($rowinfo["data"])) 
		{
			$rowinfo["data"][count($rowinfo["data"]) - 1]["grid_rowspace"]= false;
			
			if($this->listGridLayout == gltVERTICAL && $this->is508)
				$rowinfo["begin"]= "<caption style=\"display:none\">Table data</caption>";
			
			$this->xt->assignbyref("grid_row", $rowinfo);
		}
		
		$this->buildTotals($totals);
	}
	
	/**
	 * @return Boolean
	 */
	protected function hasBigMap()
	{
		return $this->googleMapCfg['isUseMainMaps'];
	}
	
	/**
	 * @param Number fIndex
	 * @return Boolean
	 */
	protected function checkFieldHasMapData( $fIndex )
	{
		return in_array($fIndex, $this->gMapFields);
	}
	
	/**
	 * Add hidden column classes 
	 * If it need for current field
	 * 
	 * @param &Array	$record 
	 * @param string	$field field name
	 */
	protected function addHiddenColumnClasses(&$record, $field)
	{
		$gFieldName = GoodFieldName( $field );
		if( isset( $this->hiddenColumnClasses[$gFieldName] ) )
		{	
			$record[ $gFieldName."_class" ] .= " " . $this->hiddenColumnClasses[$gFieldName];
			
			if( $this->listGridLayout != gltHORIZONTAL )
				$record[ $gFieldName."_label_class" ] = $this->hiddenColumnClasses[$gFieldName];
		}
	}
	
	/**
	 * Get the field's class name to align the field's value 
	 * basing on its edti and view formats
	 * 
	 * @param string	$f field name
	 * 
	 * @return string
	 */
	function fieldClass($f)
	{
		if( !isset($this->fieldClasses[$f]) )
			$this->fieldClasses[$f] = $this->calcFieldClass( $f );
		return $this->fieldClasses[$f];
	}
	
	function calcFieldClass($f)
	{
		if( $this->pSet->getEditFormat($f) == FORMAT_LOOKUP_WIZARD )
			return '';
		
		$format = $this->pSet->getViewFormat($f);
		
		if( $format == FORMAT_FILE ) 
			return ' rnr-field-file'; 
		
		if( $this->listGridLayout == gltVERTICAL || $this->listGridLayout == gltCOLUMNS )
			return '';
			
		if( $format == FORMAT_AUDIO )
			return ' rnr-field-audio';
		
		if( $format == FORMAT_CHECKBOX )
			return ' rnr-field-checkbox';
		
		if( $format == FORMAT_NUMBER || IsNumberType( $this->pSet->getFieldType($f) ) )
			return ' rnr-field-number';
			
		return 'rnr-field-text';
	}
	
	/**
	 * Set the custom css hover rules for the current record
	 * corresponding css rules to the "row_css_rules" string property 
	 * 
	 * @param string	$rowHoverCssRule
	 * @param string	$fieldName OPTIONAL 
	 * @return string
	 */
	protected function setRowHoverCssRule($rowHoverCssRule, $fieldName = "")
	{
		if( $this->listGridLayout != gltHORIZONTAL )
			return;
		
		if( $fieldName )
		{
			$className = 'rnr-style'.$this->recId.'-'.$fieldName;
			$this->row_css_rules .= ' tr.rnr-row:hover > td.'. $className .'{'. $this->getCustomCSSRule( $rowHoverCssRule ) ."}\n";
			return $className;
		}
		else
		{
			$this->row_css_rules = ' tr[id="gridRow'. $this->recId .'"]:hover > td:not(.rnr-cs){'. $this->getCustomCSSRule( $rowHoverCssRule ) ."}\n". $this->row_css_rules;
			return '';
		}
	}
		
	
	/**
	 * Build and shows totals info on page
	 *
	 * @param array $totals info abount totals
	 */
	function buildTotals(&$totals) 
	{
		if(count($this->totalsFields)) 
		{
			//	process totals
			$this->xt->assign("totals_row", true);
			$totals_records = array("data" => array());
			for($j = 0; $j < $this->colsOnPage; $j++) 
			{
				$record = array();
				if($j == 0) 
				{
					for($i = 0; $i < count($this->totalsFields); $i ++) 
					{
						//	show totals
						$total = GetTotals( $this->totalsFields[$i]['fName'], 
							$totals[$this->totalsFields[$i]['fName']], 
							$this->totalsFields[$i]['totalsType'], 
							$this->totalsFields[$i]['numRows'], 
							$this->totalsFields[$i]['viewFormat'], 
							PAGE_LIST,
							$this->pSet );
						
						$total = "<span id=\"total".$this->id."_".GoodFieldName($this->totalsFields[$i]['fName'])."\">".$total."</span>";
						
						$this->xt->assign(GoodFieldName($this->totalsFields[$i]['fName'])."_total", $total);
						
						$record[GoodFieldName($this->totalsFields[$i]['fName'])."_showtotal"]= true;
					}
				}
				if($j < $this->colsOnPage - 1){
					$record["endrecordtotals_block"]= true;
				}
				$totals_records["data"][]= $record;
			}
			$this->xt->assignbyref("totals_record", $totals_records);
			if(!$this->rowsFound)
				$this->xt->assign("totals_attr", "style='display:none;'");
		}
	}
	
	/** 
	 * @param string $field
	 * @param int $state 0 value not need, 1 need for count, 2 need real value
	 */
	function outputFieldValue($field, $state)
	{
		$this->arrFieldSpanVal[$field] = $state;
	}
	
	/**
	 * Add span val for lookup fields, and average|total|count totals
	 */
	function addSpanVal($fName, &$data) 
	{
		$type = $this->pSet->getFieldType($fName);
		if((@$this->arrFieldSpanVal[$fName] == 2 || @$this->arrFieldSpanVal[$fName] == 1) && !IsBinaryType($type))
		{
			return "val=\"".runner_htmlspecialchars($data[$fName])."\" ";
		}
	}
	
	/**
	 * Proccess grid cells, also add spans if need them
	 *
	 * @param String type
	 * @param Array &record
	 * @param Array data (optional)
	 */
	function addSpansForGridCells($type, &$record, $data = null) 
	{
		for($i=0;$i<count($this->listFields);$i++) 
		{
			$span = "<span id=\"".$type.($type == 'edit' ? $this->recId : $this->id)."_".$this->listFields[$i]['goodFieldName']."\" ";
			
			if($type == 'edit')
			{
				$span.= $this->addSpanVal($this->listFields[$i]['fName'], $data).">";
				$span.=	$record[$this->listFields[$i]['valueFieldName']];
			}
			else
				$span.= ">";
				
			$span.="</span>";
			
			$record[$this->listFields[$i]['valueFieldName']]= $span;
		}
	}
	
	/**
	 * Proccess record values
	 *
	 * @param array $record
	 * @param array $data
	 * @param string $keylink
	 */
	function proccessRecordValue(&$data, &$keylink, $listFieldInfo)
	{
		$dbVal = $this->showDBValue($listFieldInfo['fName'], $data, $keylink);
		return $this->addCenterLink($dbVal, $listFieldInfo['fName']);;
	}
	
	/**
	 * Checks if need to display grid
	 */
	function isDispGrid() 
	{
		//	can show data
		if( $this->permis[$this->tName]['search'] && $this->rowsFound )
			return true;
		
		//	can add data to grid
		if ( $this->inlineAddAvailable() || $this->addAvailable() && $this->showAddInPopup )
			return true;
	
		return false;
	}
	
	/**
	 * Build checkbox markup
	 */
	function fillCheckAttr(&$record, $data, $keyblock)
	{
		if( $this->exportAvailable() || $this->printAvailable() || $this->deleteAvailable() || $this->inlineEditAvailable()) 
		{
			$record["checkbox"]= true;
			$record["checkbox_attrs"]= "name=\"selection[]\" value=\"".runner_htmlspecialchars($keyblock)."\" id=\"check".$this->id."_".$this->recId."\"";
		}
	}
	
	/**
	 * Main function, call to build page
	 * Do not change methods call oreder!!
	 */
	function prepareForBuildPage() 
	{
		// build column hiding CSS
		$this->buildMobileCssRules();

		//Sorting fields
		$this->orderClause->buildOrderParams();
		
		// delete record
		$this->deleteRecords();
		
		// PRG rule, to avoid POSTDATA resend
		$this->rulePRG();
		
		// build sql query
		$this->buildSQL();
		
		// build pagination block
		$this->buildPagination();
		
		// seek page must be executed after build pagination
		$this->seekPageInRecSet($this->querySQL);
		
		$this->setGoogleMapsParams($this->listFields);
		$this->setGridUserParams();
		$this->assignColumnHeaderClasses();
		
		// fill grid data
		$this->fillGridData();
		
		if( $this->mode != LIST_MASTER )
			$this->buildSearchPanel();
		
		// add common js code
		$this->addCommonJs();
		
		// add common html code
		$this->addCommonHtml();
		
		// Set common assign
		$this->commonAssign();
		
		// Add cells' custom css
		$this->addCustomCss();
		
		// build admin block
		$this->assignAdmin();
	}
	
	/**
	 * show page at the end of its proccess, depending on mode
	 */
	function showPage() 
	{
		$this->BeforeShowList();
		$this->display($this->templatefile);
	}
	
	/**
	 * Static function for create list page
	 * Read params from setting 
	 * Create object of class in accordance with mode displaying page
	 * @param String strTableName
	 * @param Array options
	 */
	static function & createListPage($strTableName, $options)
	{
		global $isGroupSecurity;
		
		$gSettings = new ProjectSettings($strTableName, $options['pageType']);
		
		$gQuery = $gSettings->getSQLQuery();
		$params = $options;
		$params['tName'] = $strTableName;
		$params['origTName'] = $gSettings->getOriginalTableName();
		$params['gPageSize'] = $gSettings->getInitialPageSize();
		$params['gOrderIndexes'] = $gSettings->getOrderIndexes();
		$params['gstrOrderBy'] = $gQuery->OrderByToSql();
		$params['gsqlHead'] = $gQuery->HeadToSql();
		$params['gsqlFrom'] = $gQuery->FromToSql();
		$params['gsqlWhereExpr'] = $gQuery->WhereToSql();
		$params['gsqlGroupBy'] = $gQuery->GroupByToSql();
		$params['gsqlHaving'] = $gQuery->Having()->toSql($gQuery);
		
		$params['nSecOptions'] = $gSettings->getAdvancedSecurityType();
		$params['nLoginMethod'] = GetGlobalData("nLoginMethod",0);
		$params['recsPerRowList'] = $gSettings->getRecordsPerRowList();
		$params['mainTableOwnerID'] = $gSettings->getTableOwnerIdField();
		$params['exportTo'] = $gSettings->hasExportPage();
		$params['printFriendly'] = $gSettings->hasPrintPage();
		$params['deleteRecs'] = $gSettings->hasDelete();
		$params["isGroupSecurity"] = $isGroupSecurity;
		$params['arrKeyFields'] = $gSettings->getTableKeys();
		$params["panelSearchFields"] = $gSettings->getPanelSearchFields();
		$params['listGridLayout'] = $gSettings->getListGridLayout();
		$params['createLoginPage'] = GetGlobalData("createLoginPage",false);
		$params['noRecordsFirstPage'] = $gSettings->noRecordsOnFirstPage();
		$params['totalsFields'] = $gSettings->getTotalsFields();
		$params['listAjax'] = $gSettings->ajaxBasedListPage();
		$params['arrRecsPerPage'] = $gSettings->getRecordsPerPageArray();
		$params['isScrollGridBody'] = $gSettings->getScrollGridBody();
		$params['viewPDF'] = $gSettings->isViewPagePDF() || $gSettings->isPrinterPagePDF();
		
		$params['audit'] = GetAuditObject($strTableName);
		
		$params['listFields'] = array();
		$allfields = $gSettings->getListFields();
		
		foreach($allfields as $f)
		{
			if(!$gSettings->appearOnListPage($f))
				continue;
			$params['listFields'][]= array(
				"fName"=>$f,
				"goodFieldName"=>GoodFieldName($f),
				"valueFieldName" => GoodFieldName($f)."_value",
				"viewFormat"=>$gSettings->getViewFormat($f),
				"editFormat"=>$gSettings->getEditFormat($f)
			);
		}
		
		// choose class by mode
		if ($params["mode"]==LIST_SIMPLE )
			$pageObject = new ListPage_Simple($params);	
		else if($params["mode"]==LIST_MASTER)
			$pageObject = new ListPage_Master($params);	
		else if($params["mode"]==LIST_AJAX)
			$pageObject = new ListPage_Ajax($params);
		else if($params["mode"]==LIST_LOOKUP)
			$pageObject = new ListPage_Lookup($params);
		else if($params["mode"]==LIST_DETAILS && $params["masterPageType"] == PAGE_LIST)
			$pageObject = new ListPage_DPList($params);
		else if($params["mode"]==LIST_DETAILS )
			$pageObject = new ListPage_DPInline($params);
		else if( $params["mode"]==LIST_DASHDETAILS )
			$pageObject = new ListPage_DPDash($params);
		else if($params["mode"]==RIGHTS_PAGE)
		{
				$pageObject = new RightsPage($params);
		}
		else if($params["mode"]==MEMBERS_PAGE)
		{
				$pageObject = new MembersPage($params);
		}
		else if($params["mode"] == LIST_DASHBOARD)
			$pageObject = new ListPage_Dashboard($params);
		else if( $params["mode"] == MAP_DASHBOARD )
			$pageObject = new MapPage_Dashboard($params);

		$pageObject->init();
		
		return $pageObject;
	}
		
	/**
	 * If the page's layout is horizontal and the number of records per row equals 1
	 * It assigns all $record's content to 'grid_row' (to show all rows added to a grid row in 'Visual Editor')
	 * otherwise It assigns the content to 'grid_record' directly.
	 */	
	protected function setRowsGridRecord(&$row, $record)
	{
		if($this->listGridLayout == gltVERTICAL || $this->recsPerRowList != 1)
		{
			$row["grid_record"]["data"][]= $record;
			return;
		}	
		foreach($record as $index=>$value)
		{
			$row[$index] = $value;
		}
		$row["grid_record"] = true;			
	}		

	/**
	 * Build CSS rules to hide particular columnns on specific screen sizes
	 */	
	protected function buildMobileCssRules()
	{
		if( $this->pSet->isAllowShowHideFields() ) 
			return;
		$cssBlocks = array();
		$columnsToHide = $this->getColumnsToHide();
		
		$devices = array( TABLET_7_IN, SMARTPHONE_PORTRAIT, SMARTPHONE_LANDSCAPE, TABLET_10_IN, DESKTOP );
		
		//	build CSS code
		foreach( $this->listFields as $f )
		{
			$gFieldName = GoodFieldName( $f['fName'] );
			$fieldMentioned = false;
			$field = $f['fName'];
			foreach( $devices as $d )
			{
				if( in_array($gFieldName, $columnsToHide[ $d ]) )
				{
					$this->hiddenColumnClasses[$gFieldName] = "column".GoodFieldName( $field );
					$cssBlocks[$d] .= "." . $this->hiddenColumnClasses[$gFieldName] . ":not([data-forced-visible-column]) { display: none !important;; }\n";
					$fieldMentioned = true;
				}
			}
		}
		
		$this->mobile_css_rules = "";
		foreach( $devices as $d )
		{
			if($cssBlocks[$d])
			{
				$this->mobile_css_rules .= ProjectSettings::getDeviceMediaClause($d)."\n{\n".$cssBlocks[$d]."\n}\n";
			}
		}

	}

	/**
	 * Get indices of the not list page's blob fields
	 * @return Array
	 */
	public function getNotListBlobFieldsIndices()
	{
		$allFields = $this->pSet->getFieldsList();	
		$blobIndices = $this->pSet->getBinaryFieldsIndices();
		
		$indices = array();
		foreach($blobIndices as $idx)
		{

			if( !$this->pSet->appearOnListPage( $allFields[ $idx - 1 ] ) )
				$indices[] = $idx;
		}
		
		return $indices;
	}	
	
	public static function readListModeFromRequest()
	{
		$postedMode = postvalue("mode");
		if($postedMode == "ajax")
			return LIST_AJAX;
		else if($postedMode == "lookup")
			return LIST_LOOKUP;
		else if($postedMode == "listdetails")
			return LIST_DETAILS;
		else if($postedMode == "dashdetails")
			return LIST_DASHDETAILS;
		else if($postedMode == "dashlist")
			return LIST_DASHBOARD;
		else if($postedMode == "dashmap")
			return MAP_DASHBOARD;
			
		return LIST_SIMPLE;
	}

	protected static function readMainTableSettingsFromRequest( $table )
	{
		$mainTableShortName = GetTableURL( postvalue("table") );
		return getLookupMainTableSettings($table, $mainTableShortName, postvalue("field"));
	}

	protected static function checkLookupPermissions( $table )
	{
		$lookupMainSettings = ListPage::readMainTableSettingsFromRequest( $table );
		if( !$lookupMainSettings )
			return false;
		
		$mainTable = $lookupMainSettings->getTableName();
		
		//	page called for List page with search lookup and the user has permissions on the main table
		if( CheckTablePermissions($mainTable, "S") || CheckTablePermissions($mainTable, "E") || CheckTablePermissions($mainTable, "A")) 
			return true;
		
		//	otherwise check if the page is called from the register page
		return false;
	}
	
	public static function processListPageSecurity( $table )
	{
		//	user has necessary permissions
		if( Security::checkPagePermissions( $table, "S" ) )
			return true;
			
		$mode = ListPage::readListModeFromRequest();

		//	check special permissions like lookup mode
		if( $mode == LIST_LOOKUP && ListPage::checkLookupPermissions( $table ) )
			return true;
		
		//	page can not be displayed. Redirect or return error
		
		//	return error if the page is requested by AJAX
		if( $mode != LIST_SIMPLE )
		{
			Security::sendPermissionError();
			return false;
		}
		
		// The user is logged in but lacks necessary permissions
		// redirect to List page or Menu.
		if( isLogged() &&  !isLoggedAsGuest() )
		{
			HeaderRedirect("menu");
			return false;
		}

		//	Not logged in
		// 	redirect to Login
		//	Current URL is already saved in session
		redirectToLogin();
		return false;
	}

	/**
	 * Hide the field on the page
	 * @param String fieldName
	 */
	function hideField($fieldName)
	{
		$this->xt->assign(GoodFieldName($fieldName) ."_fieldheadercolumn", false);
		$this->xt->assign(GoodFieldName($fieldName) . "_fieldcolumn", false);
		$this->xt->assign(GoodFieldName($fieldName) . "_fieldfootercolumn", false);
	}

	/**
	 * Show the field on the page
	 * @param String fieldName
	 */
	function showField($fieldName)
	{
		$this->xt->assign(GoodFieldName($fieldName) ."_fieldheadercolumn", true);
		$this->xt->assign(GoodFieldName($fieldName) . "_fieldcolumn", true);
		$this->xt->assign(GoodFieldName($fieldName) . "_fieldfootercolumn", true);
	}

	public function isPageSortable()
	{
		return true;
	}
	
	public function processSaveSearch() 
	{
		// Read Search parameters from the request

		if( postvalue("saveSearch") && postvalue("searchName") && !is_null($this->searchLogger) ) 
		{
			$searchName = postvalue("searchName");
			$searchParams = $this->getSearchParamsForSaving();
			$this->searchLogger->saveSearch( $searchName, $searchParams );
			
			$this->searchClauseObj->savedSearchIsRun = true;
			$_SESSION[$this->sessionPrefix.'_advsearch'] = serialize( $this->searchClauseObj );
			
			echo my_json_encode( $searchParams );
			return true;
		}

		// Delete the saved search
		if( postvalue("deleteSearch") && postvalue("searchName") && !is_null($this->searchLogger) ) 
		{
			$searchName = postvalue("searchName");
			$this->searchLogger->deleteSearch( $searchName );
			echo my_json_encode( array() );
			return true;
		}
		return false;
	}
	
	/**
	 * save user setting
	 * @param String table
	 * @return Boolean
	 */
	public static function processSaveParams( $table ) 
	{
		if( postvalue("saveParam")  ) 
		{
			$paramType = intval( postvalue("saveParam") );
			$paramData = my_json_decode(postvalue("data"));
			
			include_once getabspath("classes/paramsLogger.php");
			
			if( postvalue("onDashboard") )
				$paramsLogger = new paramsLogger( postvalue("dashElementId"), $paramType );
			else
				$paramsLogger = new paramsLogger( $table, $paramType );			
			
			if( $paramType == SHFIELDS_PARAMS_TYPE )
			{
				$macroDeviceClass = RunnerPage::deviceClassToMacro( postvalue("deviceClass") );
				$ps = new ProjectSettings($table);
				if( !$ps->columnsByDeviceEnabled() )
					$macroDeviceClass = 0;
				$paramsLogger->saveShowHideData( $macroDeviceClass, $paramData );
			}
			else
				$paramsLogger->save( $paramData );
			return true;
		}

		return false;		
	}
	protected function setGridUserParams() 
	{
		
	}
	
}
?>