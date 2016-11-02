<?php
class DashboardPage extends RunnerPage
{
	protected $elementsPermissions = array();
	
	/**
	 * @constructor
	 * @param &Array params
	 */
	function __construct(&$params)
	{
		parent::__construct($params);
		
		if ( $params["mode"] == "dashsearch" )
		{
			$showShowAllButton = $this->searchClauseObj->bIsUsedSrch;
			$returnJSON = array("success"=>true, 'show_all'=> $showShowAllButton);
			echo printJSON($returnJSON);
			exit();
		}

		// Set language params, if have more than one language
		$this->setLangParams();
		
		$this->jsSettings['tableSettings'][ $this->tName ]['dashElements'] = array();
		
		$majorElements = $this->getMajorElements();
		
		//	calculate additional element settings
		foreach( $this->pSet->getDashboardElements() as $key => $elem ) 
		{
			$this->createElementLinks( $elem );
			$permissions = false;
			$newElem = $elem;
			
			if( $elem['type'] == DASHBOARD_RECORD)
			{
				// check tables (add, view, edit) permissinons befor add to js
				$newElem['tabsPageTypes'] = array();
				foreach( $elem['tabsPageTypes'] as $idx => $pageType )
				{
					if( $this->CheckPermissions( $elem['table'], $pageType ) )
					{
						$permissions = true;
						$newElem['tabsPageTypes'][] = $pageType;
					}
				}
			}
			elseif( $elem['type'] == DASHBOARD_DETAILS)
			{
				$eset = new ProjectSettings( $elem['table'] );
				$details = $eset->getDetailTablesArr();
				
				// add details shortTableNames
				$newElem['details'] = array();
				foreach( $details as $idx => $d )
				{
					if( in_array( $d['dDataSourceTable'], $elem['notUsedDetailTables'] ) )
						continue;
						
					if( $this->CheckPermissions( $d['dDataSourceTable'], $d['dType'] ) )
					{
						$permissions = true;
						$newElem['details'][$idx] = $d;
						$this->jsSettings['tableSettings'][ $d['dDataSourceTable'] ]['shortTName'] = $d[ 'dShortTable' ];
					}
				}
			}
			elseif( $elem['type'] == DASHBOARD_CHART || $elem['type'] == DASHBOARD_REPORT || $elem['type'] == DASHBOARD_SEARCH)
				$permissions = $this->CheckPermissions($elem['table'], "Search" );
			elseif( $elem['type'] == DASHBOARD_LIST )
				$permissions = $this->CheckPermissions( $elem['table'], "list" );
			elseif( $elem['type'] == DASHBOARD_MAP )
			{
				$permissions = $this->CheckPermissions( $elem['table'], "list" );
				if( !$elem["updateMoved"] )
					$newElem["updateMoved"] = !$this->hasGridElement( $elem['table'] );
			}
				
			
			$this->elementsPermissions[$key] = $permissions;
			if ( !$permissions )
				continue;
				
			if( isset( $majorElements[ $newElem["elementName"]] ) )
				$newElem["major"] = true;
				
			// add shortTableNames and element
			$this->jsSettings['tableSettings'][ $elem['table'] ]['shortTName'] = GetTableURL( $elem['table'] );
			$this->jsSettings['tableSettings'][ $this->tName ]['dashElements'][$key] = $newElem;
		}
	}
	
	function CheckPermissions( $table, $permis )
	{
		foreach( $this->getPermissionType( $permis ) as $val )
		{
			if( CheckTablePermissions( $table, $val ) )
				return true;
		}
		
		return false;
	}
	
	/**
	 * @param String $pageType
	 * @return Array permission types
	 */
	function getPermissionType($pageType)
	{
		$result = array();
		$type = parent::getPermisType($pageType);
		
		if ($pageType == "view" || $pageType == "chart" || $pageType == "report" || $pageType == "list")
			$type = "S";
		elseif ($pageType == "add")
			$type = "A";
		elseif ($pageType == "edit")
			$type = "E";
		/*elseif ($pageType == "list")
			$result = array("E", "S", "A");*/
		
		return $type ? array($type) : $result;
	}
	
	function init() 
	{
		parent::init();

		$this->createElementContainers();
	}
	
	/**
	 *
	 */
	function createElementContainers()
	{
		foreach( $this->pSet->getDashboardElements() as $key => $elem ) 
		{
			if ( !$this->elementsPermissions[$key] )
				continue;
			$style = "";
			if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
			{
				if( $elem["width"] )
					$style .= "#dashelement_" . $elem["elementName"] . $this->id . " > .panel > .panel-body {
						width: " . $elem["width"] . "px;
						overflow-x: auto;
					}";
				if( $elem["height"] )
					$style .= "#dashelement_" . $elem["elementName"] . $this->id . " > .panel > .panel-body {
						height: " . $elem["height"] . "px;
						overflow-y: auto;
					}";
				if( $style != "" )
				{
					$style = "<style> @media (min-width: 768px){ " . $style . " } </style>";
				}
					
			}

			
			$this->xt->assign( "db_".$elem["elementName"] , $style."<div class=\"" . $this->getElementClass( $elem ) . "\" id=\"dashelement_" . $elem["elementName"] . $this->id . "\"></div>");
		}
	}
	
	/**
	 * Clear the page's and elements pages' session keys 
	 * if the page is loaded with "empty" params
	 */
	function clearSessionKeys()
	{
		if ( count($_POST) && $_POST["mode"] == "dashsearch" )
		{
			return;
		}

		parent::clearSessionKeys();
		
		if( !count($_POST) && ( !count($_GET) || count($_GET) == 1 && isset($_GET["menuItemId"]) ) )
		{
			$this->unsetAllPageSessionKeys();
		}
		
		foreach( $this->pSet->getDashboardElements() as $elem ) 
		{
			if( $elem['type'] != DASHBOARD_REPORT && $elem['type'] != DASHBOARD_SEARCH )
				$this->unsetAllPageSessionKeys( $this->tName."_".$elem["table"] );
		}
	}
	
	/**
	 * Set session variables
	 */
	function setSessionVariables() 
	{
		parent::setSessionVariables();
		
		$_SESSION[$this->sessionPrefix.'_advsearch'] = serialize($this->searchClauseObj);
	}
	
	/**
	 * Add extra JS and CSS files 
	 */
	public function addDashElementsJSAndCSS() 
	{
		if( $this->hasSingleRecordOrDetailsElement() )
		{
				$this->AddJSFile("include/jquery-ui/jquery-ui.min.js");
			$this->AddCSSFile("include/jquery-ui/smoothness/jquery-ui.min.css");
			$this->AddCSSFile("include/jquery-ui/smoothness/jquery-ui.theme.min.css");
		}
	}
	
	/**
	 * Check if the dashboard has any 'single record' or 'details' element
	 * @return Boolean
	 */
	protected function hasSingleRecordOrDetailsElement()
	{
		foreach( $this->pSet->getDashboardElements() as $key => $elem ) 
		{
			if ( !$this->elementsPermissions[$key] )
				continue;
			
			if( $elem["type"] == DASHBOARD_RECORD || $elem["type"] == DASHBOARD_DETAILS )
				return true;
		}
		
		return false;
	}
	
	/**
	 * @param String table
	 * @return Boolean
	 */
	protected function hasGridElement( $table )
	{
		foreach( $this->pSet->getDashboardElements() as $elem ) 
		{
			if( $elem["table"] == $table && $elem["type"] == DASHBOARD_LIST )
				return true;
		}
		
		return false;			
	}
	
	/**
	 * Assign 'body' element
	 */
	public function addCommonHtml()
	{
		// assign body begin
		$this->body['begin'] = GetBaseScriptsForPage(false);
		// assign body end
		$this->body['end'] = XTempl::create_method_assignment( 'assignBodyEnd', $this );

		$this->xt->assignbyref('body', $this->body);
	}
	
	/**
	 * Common xt assignments
	 */
	protected function doCommonAssignments()
	{
		$this->xt->assign("asearch_link", true);
		
		if( $this->mobileTemplateMode() )
			$this->xt->assign('tableinfomobile_block', true);
	}
	
	/**
	 * Add common assign
	 */	
	function commonAssign() 
	{
		parent::commonAssign();
		
		if( $this->mobileTemplateMode() )
		{
			$this->xt->displayBrickHidden("search_dashboard_m");
		}
	
		$this->assignAdmin();
		$this->xt->assign("changepwd_link", $_SESSION["AccessLevel"]!= ACCESS_LEVEL_GUEST && $_SESSION["fromFacebook"] == false);
		$this->xt->assign("changepwdlink_attrs", "href=\"".GetTableLink("changepwd")."\" onclick=\"window.location.href='".GetTableLink("changepwd")."';return false;\"");
	}
	
	/**
	 * Process the page
	 */
	public function process()
	{
		if( $this->eventsObject->exists("BeforeProcessDashboard") )
			$this->eventsObject->BeforeProcessDashboard( $this );
		
		// add button events if exist
		$this->addButtonHandlers();
		$this->addDashElementsJSAndCSS();
		$this->addCommonJs();
		$this->commonAssign();
		$this->doCommonAssignments();
		$this->addCommonHtml();
		$this->prepareBreadcrumbs("main");

		if( $this->eventsObject->exists("BeforeShowDashboard") )
		{
			$this->eventsObject->BeforeShowDashboard( $this->xt, $this->templatefile, $this );
		}
		$this->display( $this->templatefile );
	}

	/**
	 * @param &Array element
	 * @return String
	 */
	protected function getElementClass( &$element )
	{
		if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
			return "";
		if( $element[ "type" ] != DASHBOARD_DETAILS && $element[ "type" ] != DASHBOARD_RECORD )
			return "rnr-dbbordered";
		return "";
	}
	
	/**
	 * Fill in element children and parents lists
	 * Children can be updated by this element, parents can update this element
	 * There can be peer elements that are both child and parent to each other.
	 * @param &Array elem
	 */
	function createElementLinks( &$elem )
	{
		foreach( $this->pSet->getDashboardElements() as $key => $e ) 
		{
			if( $e["elementName"] == $elem["elementName"] )
				continue;
			if( $e["table"] == $elem["masterTable"] && DashboardPage::canUpdateDetails( $e ) )
			{
				$elem["parents"][ $e["elementName"] ] = true;
			}
			if( $elem["table"] == $e["masterTable"] && DashboardPage::canUpdateDetails( $elem ) )
			{
				$elem["children"][ $e["elementName"] ] = true;
			}
			if( $elem["table"] == $e["table"] )
			{
				if( DashboardPage::canUpdatePeers( $e ) )
					$elem["parents"][ $e["elementName"] ] = true;
				if( DashboardPage::canUpdatePeers( $elem ) )
					$elem["children"][ $e["elementName"] ] = true;
			}
		}
	}
	
	/**
	 * @return Array
	 */
	function getMajorElements()
	{
		$majorElements = array();
		$dashboardTables = array();
		$elements = $this->pSet->getDashboardElements();
		//	distribute elements by tables
		foreach( $elements as $key => $e ) 
		{
			if( !isset( $dashboardTables[ $e["table"] ] ) )
			{
				$dashboardTables[ $e["table"] ] = array();
			}
			$dashboardTables[ $e["table"] ][] = $key;
		}
		//	locate major element in each table
		foreach( $dashboardTables as $t )
		{
			$major = "";
			//	locate main map first
			foreach( $t as $i )
			{
				if( $elements[$i]["type"] == DASHBOARD_MAP && $elements[$i]["updateMoved"] )
				{
					$major = $elements[$i]["elementName"];
					break;
				}
			}
			//	locate grid 
			if( $major == "" )
			{
				foreach( $t as $i )
				{
					if( $elements[$i]["type"] == DASHBOARD_LIST || $elements[$i]["type"] == DASHBOARD_CHART || $elements[$i]["type"] == DASHBOARD_REPORT )
					{
						$major = $elements[$i]["elementName"];
						break;
					}
				}
			}
			//	locate any map
			if( $major == "" )
			{
				foreach( $t as $i )
				{
					if( $elements[$i]["type"] == DASHBOARD_MAP )
					{
						$major = $elements[$i]["elementName"];
						break;
					}
				}
			}
			//	locate single record with edit or view enabled
			if( $major == "" )
			{
				foreach( $t as $i )
				{
					if( $elements[$i]["type"] != DASHBOARD_RECORD )
						continue;
					if( in_array( PAGE_EDIT, $elements[$i]["tabsPageTypes"] ) || in_array( PAGE_VIEW, $elements[$i]["tabsPageTypes"] ) ) 
					{
						$major = $elements[$i]["elementName"];
						break;
					}
				}
			}
			if( $major != "" ) 
				$majorElements[ $major ] = true;
				
		}
		
		return $majorElements;
	}
	
	/**
	 * @param &Array elem
	 * @return Boolean	 
	 */
	static function canUpdateDetails( &$elem )
	{
		return DashboardPage::canUpdatePeers( $elem );
	}
	
	/**
	 * @param &Array elem
	 * @return Boolean
	 */
	static function canUpdatePeers( &$elem )
	{
		return $elem["type"] == DASHBOARD_LIST 
				|| $elem["type"] == DASHBOARD_CHART
				|| $elem["type"] == DASHBOARD_REPORT
				|| $elem["type"] == DASHBOARD_RECORD
				|| $elem["type"] == DASHBOARD_MAP;
	}
}
?>