<?php
class MenuItem
{	
	/**
	 * Element depth
	 *
	 * @var int
	 */
	var $depth;
	/**
	 * Link id
	 *
	 * @var int
	 */
	var $id;
	/**
	 * Link href
	 *
	 * @var string
	 */
	var $href;
	/**
	 * Params for link href
	 *
	 * @var string
	 */
	var $params;
	/**
	 * Type of link
	 *
	 * @var string
	 */
	var $type;
		
	// for separator
	var $name;
	var $nameType;		
	var $style;
		
	/**
	 * source table name
	 *
	 * @var string
	 */
	var $table;
	/**
	 * type of link
	 *
	 * @var string
	 */
	var $linkType;
	/**
	 * type of page
	 *
	 * @var string
	 */
	var $pageType;
	/**
	 * Show this link or not
	 *
	 * @var bool
	 */
	var $showAsLink;		
	/**
	 * Show as group or not
	 *
	 * @var bool
	 */
	var $showAsGroup;	
	/**
	 * Collection of all pageTypes of menu links for this table
	 *
	 * @var array
	 */
//	var $pageTypesInMenuForThisTable = array();
	/**
	 * tag a title attr
	 *
	 * @var string
	 */	
	var $title;
	/**
	 * Open in new window or not attr
	 *
	 * @var string
	 */
	var $openType;
	/**
	 * Array of children
	 *
	 * @var array
	 */
	var $children=array();

	var $parentItem = null;
	
	var $pageName = "";
	
	var $menuTableMap;
	
	var $pageObject;
	
	/**
	 * Current (selected) item flag
	 *
	 * @var bool
	 */
	var $currentItem = false;
	
	var $menuId = "";
	
	/*
	 *	Menu mode - MENU_VERTICAL, MENU_HORIZONTAL or MENU_QUICKJUMP
	 */
	var $menuMode = "";

	/* welcome menu attributes */
	
	var $comments;
	var $icon;
	var $iconType;
	var $color;
	
	
	/**
	 * Constructor, builds tree structure with item attributes
	 *
	 * @param array $menuItemInfo
	 * @param array $menuNodes
	 * @param obj $menuParent
	 * @return MenuItem
	 */
	
	function __construct(&$menuItemInfo, &$menuNodes, &$menuParent, &$menuTableMap, $pageObject, $menuId, $menuMode )
	{	
		$this->pageObject = $pageObject;
		global $menuNodesIndex;
		
		$this->menuId = $menuId;
		$this->menuMode = $menuMode;
		$this->menuTableMap =& $menuTableMap;
		
		// calculate menu depth
		if ($menuItemInfo['id'] == 0)
		{
			$this->depth = 0;	
		}
		else
		{
			$this->depth = $menuParent->depth+1;
		}
			
		// simple attributes
		$this->id = $menuItemInfo['id'];
		$this->name = $menuItemInfo['name'];
		$this->type = $menuItemInfo['type'];
		$this->href = $menuItemInfo['href'];
		$this->title = $menuItemInfo['title'];
		$this->comments = $menuItemInfo['comments'];
		$this->color = $menuItemInfo['color'];
		$this->style = $menuItemInfo['style'];
		$this->table = $menuItemInfo['table'];
		$this->params = $menuItemInfo['params'];
		$this->linkType = $menuItemInfo['linkType'];
		$this->nameType = $menuItemInfo['nameType'];
		$this->pageType = $menuItemInfo['pageType'];			
		$this->openType = $menuItemInfo['openType'];
		$this->icon = $menuItemInfo['icon'];
		$this->iconType = $menuItemInfo['iconType'];
		
		// show as link attribute
		$this->showAsLink = $this->checkLinkShowStatus();
		
		//build tree structure
		$this->buildTreeMenuStructure($menuNodes);
		
		if( $this->type != 'Separator' && $this->table )
		{
			$pageType = strtolower( $this->pageType );
			if( !isset( $this->menuTableMap[ $this->table ] ) )
			{
				$this->menuTableMap[ $this->table ] = array();
			}
			$this->menuTableMap[ $this->table ] [ $pageType ] ++;
		
		}
		
		// show as group attribute
		$this->showAsGroup = $this->checkGroupShowStatus();
	}
	
	/**
	 * Adds child
	 *
	 * @param link $child
	 */
	function AddChild(&$child)
	{
		global $globalEvents;
		$res = true;
		if($globalEvents->exists('ModifyMenuItem'))
		{
			$res = $globalEvents->ModifyMenuItem($child);
		}			 
		if ($res)
		{
			$this->children[] = $child;
			$child->parentItem = $this;
		}
	}
	
	function setUrl($href) 
	{
		$this->href = $href;
		if ($this->linkType == 'Internal')
		{		
			$this->linkType = 'External';
		}
	}
	
	function getUrl() 
	{
		return $this->href;
	}
	
	function setParams($params) 
	{
		$this->params = $params;
	}
	
	function getParams() 
	{
		return $this->params;
	}
	function setTitle($title) 
	{
		$this->title = $title;
	}
	
	function getTitle() 
	{
		return $this->title;
	}
	
	function setTable($table) 
	{
		$this->table = $table;
	}
	
	function getTable() {
		return $this->table;
	}
	
	function setPageType($pType)
	{
		$this->pageType = $pType;
	}
	
	function getPageType() 
	{
		return $this->pageType;
	}
	
	function getLinkType() {
		return $this->linkType;
	}
	/** 
	 * Recursively build tree menu structure
	 *
	 * @param array $menuNodes all nodes
	 * @param int $parentId parentNode id
	 * @param object $menuRoot parent obj
	 */
	function buildTreeMenuStructure(&$menuNodes)
	{			
		global $menuNodesIndex;
		// for all menuItems
		while( $menuNodesIndex < count( $menuNodes ) )
		{
			$i = $menuNodesIndex;
			if( $menuNodes[$i]["parent"] != $this->id )
				break;
			// adds to parent
			++$menuNodesIndex;
			$this->AddChild( new MenuItem($menuNodes[$i], $menuNodes, $this, $this->menuTableMap, $this->pageObject, $this->menuId, $this->menuMode ) );
		
		}
	}		
	/**
	 * Checks link show status
	 *
	 * @return bool
	 */
	function checkLinkShowStatus()
	{
		// if link external and has href
		if ($this->linkType == "External" && strlen($this->href)>0)
			return true;
		// allways show separators
		if ($this->linkType == "Separator")
			return true;
		// if internal and has href and user have permissions
		if ($this->linkType == "Internal" && $this->isUserHaveTablePerm())
			return true;
		// else not show as link
		return false;
	}
	/**
	 * Check if user have permission for link
	 *
	 * @return bool
	 */
	function isUserHaveTablePerm()
	{
		return $this->pageObject->isUserHaveTablePerm($this->table, $this->pageType);
	}
	/**
	 * Checks show this element as separator
	 * Should be called allways after tree structure is initialized
	 *
	 * @return bool
	 */
	function checkGroupShowStatus() 
	{
		// if this element not group
		if (!$this->isGroup())
			return false;
		
		// for all children
		for($i=0;$i<count($this->children);$i++)
		{
			// if there are children to show in this child, we need to show this group
			if ($this->children[$i]->checkGroupShowStatus())
				return true;
			// if we should show this descendant, not include separators
			elseif ($this->children[$i]->isShowAsLink() && !$this->children[$i]->isSeparator())
				return true;					
		}
		// if no descendants to show
		return false;
		
	}
	/**
	 * Getter, show status as group
	 *
	 * @return bool
	 */
	function isShowAsGroup() 
	{
		return $this->showAsGroup;
	}
	/**
	 * Getter, show status as link
	 *
	 * @return bool
	 */
	function isShowAsLink() 
	{
		return $this->showAsLink;
	}
	/**
	 * Checks if this element is group
	 *
	 * @return bool
	 */
	function isGroup() 
	{
		return $this->type=="Group";
	}
	/**
	 * Checks if this element is separator
	 *
	 * @return bool
	 */
	function isSeparator() 
	{
		return $this->type=="Separator";
	}
	/**
	 * Makes offset depending on item depth
	 *
	 * @param int $depth
	 * @return string
	 */
	function makeOffset($depth)
	{
		$nbsps='';
		for($i=0;$i<$depth;$i++)
			$nbsps.='&nbsp;&nbsp;';
		return $nbsps;	
	}
	
	function getIconHTML() 
	{
		if( !$this->isBootstrap() || !$this->icon )
			return "";
		if( $this->iconType == ICON_BOOTSTRAP_GLYPH )
		{
			return '<span class="menu-icon glyphicon '.$this->icon.'"></span>';
		} 
		else if ( $this->iconType == ICON_FILE )
		{
			return '<img class="menu-icon" src="'.GetRootPathForResources( "images/menuicons/".$this->icon ) .'">';
		}
	}
	
	function prepareWelcomeMenuItem( &$xt ) 
	{
		if( !$this->isWelcome() )
			return;
		//	header color
		if( $this->color != '' )
			$xt->assign( "item".$this->id."_menulink_style", 'style="background-color:' . $this->color . '"');
		
		if( strlen($this->comments) )
		{
			$xt->assign( "item".$this->id."_comments", true);
			$xt->assign( "item".$this->id."_comments_text", $this->comments);
		}
	}

	/**
	 * Assign common attrs for menu items
	 *
	 * @param link $xt
	 * @param array $elements - assign attributes only for elements in the list
	 */
	function assignMenuAttrsToTempl(&$xt, $visibleElementIds = array()) 
	{
		$this->prepareWelcomeMenuItem( $xt );
		// assign separator
		if ($this->isSeparator())
		{
			if ($this->name == "-------")
				$xt->assign("item".$this->id."_separator","<hr>");
			else
				$xt->assign("item".$this->id."_separator",'<a class="rnr-menu-usrsep" style="'.$this->style.'">'.$this->name.'</a>');
			$xt->assign("item".$this->id."_optionattrs","disabled");
		}
		// if not need to show
		if ( !$this->isShowAsGroup() && !$this->isShowAsLink() && !$this->isSeparator() && $this->id != 0)
			return;
		// add plus or minus images for groups
		if($this->isShowAsGroup())
		{
			$xt->assign("item".$this->id."_groupimage", true);
			$xt->assign("item".$this->id."_groupclass", "group");
		}
			
		// show element
		$displayElement = true;
		$showSubmenu = true;
		if( $visibleElementIds )
		{
			$displayElement = $visibleElementIds[ $this->id ];
			//	show only first level submenus
			//	Don't display submenu if element's parent is also displayed
			if( !$this->parentItem )
				$showSubmenu = true;
			else 
				$showSubmenu = !isset( $visibleElementIds[ $this->parentItem->id ] );
		}
		
		if( $displayElement )
			$xt->assign("item".$this->id."_menulink",true);		
		//making offset	
		$xt->assign("item".$this->id."_nbsps",$this->makeOffset($this->depth));
		// if show as links
		if ($this->isShowAsLink() || $this->isShowAsGroup())
			$this->assignLinks($xt, $showSubmenu);

		// recursively call for all children
		for($i=0;$i<count($this->children);$i++)
		{
			// call children 
			$this->children[$i]->assignMenuAttrsToTempl( $xt, $visibleElementIds );
		}
	}
	
	/* returns current element */
	 
	function getFirstLinkedChild()
	{
		if( $this->isShowAsLink() )
			return $this;
		for( $i=0; $i < count( $this->children ); $i++ )
		{
			$linkedChild = $this->children[$i]->getFirstLinkedChild();
			if( $linkedChild )
			{
				return $linkedChild;
			}
		}
		return null;
	}
	
	function getCurrentItem( $menuItemId ) 
	{	
		if( $this->pageObject->getPageType() && $this->pageObject->tName == $this->table && ( $this->pageType == 'AdminArea' || $this->id != 0 ))
		{
			if(  $this->menuTableMap[ $this->table ][ strtolower($this->pageType) ] > 1 )
			{
				if ( $menuItemId == $this->id ) {
				$this->currentItem = true;
					return $this;
				}
			}
			elseif ($this->pageObject->getPageType() == strtolower($this->pageType))
			{
				$this->currentItem = true;
				return $this;
			}
			elseif( !$this->isSetParentElem() && !$this->isThisPageInMenu() )
			{
				$this->currentItem = true;
				return $this;
			}
		}
		// recursively call for all children

		for( $i=0; $i < count( $this->children ); $i++ )
		{
			$currentChild = $this->children[$i]->getCurrentItem( $menuItemId );
			if( $currentChild )
			{
				return $currentChild;
			}
		}
		return null;
	 }

	/**
	 *
	 */
	function getItemByTypeAndTable( $tName, $pType )
	{
		if( $pType && $tName == $this->table && ( $pType == 'AdminArea' || $this->id != 0 ) )
		{
			if( $this->menuTableMap[ $this->table ][ strtolower($this->pageType) ] > 1 )
			{
				$this->currentItem = true;
				return $this;
			}
			elseif ($pType == strtolower($this->pageType))
			{
				$this->currentItem = true;
				return $this;
			}
			elseif( !$this->isSetParentElem() && !$this->isThisPageInMenu() )
			{
				$this->currentItem = true;
				return $this;
			}
		}
		
		// recursively call for all children
		for( $i=0; $i < count( $this->children ); $i++ )
		{
			$currentChild = $this->children[$i]->getItemByTypeAndTable( $tName, $pType );
			if( $currentChild )
			{
				return $currentChild;
			}
		}
		
		return null;		
	}	

	/**
	 * Sets selected element. Need to call after all parame
	 *
	 * @param link $xt
	 * @return bool
	 */
	 function setCurrMenuElem(&$xt) 
	{		
		// if we have no page name, or table name differs with menu item, we can't identify menu link
		if( $this->pageObject->tName == $this->table && ($this->pageType == 'AdminArea' || $this->id != 0) )
		{
			if(isset( $_SESSION['menuItemId'] ) 
				&& $this->menuTableMap[ $this->table ][ strtolower($this->pageType) ] > 1)
				{
					if ($_SESSION['menuItemId'] == $this->id)
					{
						$this->setAsCurrMenuElem($xt);
						return true;
					}
			}
			elseif ( $this->pageObject->getPageType() == strtolower($this->pageType) )
			{
				$this->setAsCurrMenuElem($xt);
				return true;
			}
			elseif(!$this->isSetParentElem() && !$this->isThisPageInMenu())
			{
				$this->setAsCurrMenuElem($xt);
				return true;
			}
		}
		// recursively call for all children
		for($i=0;$i<count($this->children);$i++)
		{
			// If anyone from children assigned as current, we close recursion 
			if($this->children[$i]->setCurrMenuElem($xt))	
			{
				if( $this->isBootstrap() )
					$xt->assign("submenu".$this->id."_class", "in");
				else
					$this->setAsCurrMenuElem($xt);
			
				return true;
			}
		}
		// if no one assigned as current
		return false;
	}
	/**
	 * Assign Menu link elem as current
	 *
	 * @param link $xt
	 */	
	function setAsCurrMenuElem(&$xt){
		// cancel not current assignment
		//$xt->assign("item".$this->id."_notcurrent",false);
		$xt->assign("item".$this->id."_current","current");
		if( $this->isBootstrap() )
			$xt->assign("item".$this->id."_current","active");
	}
	



	public function getMenuItemAttributes( $showSubmenu = true ) 
	{
		$attrs = array();
		if( $this->isBootstrap() && $this->isShowAsGroup() && $showSubmenu )
		{
			if( $this->isTreelike() )
			{
				$attrs["data-toggle"] = "collapse";
				$attrs["data-target"] = "#submenu" . $this->id;
			}
			else 
			{
				$attrs["class"] = "dropdown-toggle";
				if( $this->isDrillDown() )
					$attrs["data-toggle"] = "dropdown";
				else
					$attrs["data-toggle"] = "nested-dropdown";
				$attrs["aria-haspopup"] = "true";
				$attrs["aria-expanded"] = "false";
			}
		}
		
		$attrs["id"] = 'itemlink' . $this->id;
		$attrs["itemtitle"] = $this->title;
		if( $this->style != "" )
			$attrs["style"] = $this->style;
		if( $this->openType == "NewWindow" )
		{
			$attrs["rel"] = "external";
			$attrs["target"] = "_blank";
			$attrs["link"] = "External";
		}
		
		if( $this->linkType == "Internal" && $this->pageType == "WebReports" )
		{
			$attrs["href"] = GetTableLink("webreport");
			$attrs["value"] = GetTableLink("webreport");
		}
		elseif( $this->linkType == "Internal" )
		{
			// add menu id param. Used for setting current menu element
			$menuIdGetParam = '';
			if ($this->menuTableMap[ $this->table ][ strtolower($this->pageType) ] > 1 )
				$menuIdGetParam = 'menuItemId='.$this->id;
			if($this->params)
			{
				if($menuIdGetParam)
					$menuIdGetParam .='&'.$this->params;
				else
					$menuIdGetParam .= $this->params;
			}
			
			$attrs["href"] = GetTableLink(GetTableURL($this->table), strtolower($this->pageType), $menuIdGetParam);	
			$attrs["value"] = GetTableLink(GetTableURL($this->table), strtolower($this->pageType), $menuIdGetParam);
				
		} 
		elseif( $this->linkType == "External" )
		{
			$attrs["href"] = $this->href;
			$attrs["value"] = $this->href;
		}
		return $attrs;
	}

	/**
	 * Assign values for links
	 *
	 * @param link $xt
	 */
	function assignLinks(&$xt, $showSubmenu = true ) 
	{	
		// assign title between tag a
		$title = $this->title;
		if( $this->isBootstrap() && $this->isShowAsGroup() && !$this->isWelcome() )
		{
			if( !$this->isTreelike() )
			{
				if( $showSubmenu )
					$title .= '<span class="caret"></span>';
				else
					$title = '<span class="glyphicon glyphicon-triangle-right"></span>' . $title;
			}
			else
			{
					$title = '<span class="menu-triangle glyphicon glyphicon-triangle-right"></span>' . $title;
			}
		}
		$title = $this->getIconHTML() . ' ' . $title;
		$xt->assign("item".$this->id."_title", $title );

		$attrs = $this->getMenuItemAttributes( $showSubmenu );
		
		$groupOnlyAttrs = array();
		$groupOnlyAttrs["id"] = true;
		$groupOnlyAttrs["title"] = true;
		$groupOnlyAttrs["style"] = true;
		$groupOnlyAttrs["class"] = true;
		$groupOnlyAttrs["data-toggle"] = true;
		$groupOnlyAttrs["data-target"] = true;
		$groupOnlyAttrs["aria-haspopup"] = true;
		$groupOnlyAttrs["aria-expanded"] = true;

		$groupOnlyMode = !$this->isShowAsLink() && $this->isShowAsGroup();
		
		if( $this->isBootstrap() && $groupOnlyMode && !$this->isTreelike() )
		{
			$childWithLink = $this->getFirstChildWithLink();
			if( $childWithLink )
			{
				$groupOnlyAttrs["href"] = true;
				$linkChildAttrs = $childWithLink->getMenuItemAttributes();
				$attrs['href'] = $linkChildAttrs['href'];
			}
		}

		$option_attrs = "";
		$link_attrs = "";
		foreach( $attrs as $key => $value )
		{
			if( $groupOnlyMode && !$groupOnlyAttrs[ $key ] )
				continue;
			if( !$value )
				continue;
			if( $key == "value" || $key == "link" )
				$option_attrs .= ' ' . $key . '="' . $value . '"';
			else
				$link_attrs .= ' ' . $key . '="' . $value . '"';
		}
		
		
		if( $groupOnlyMode )
		{
			$option_attrs = "disabled";
		}
		$xt->assign( "item".$this->id."_menulink_attrs", $link_attrs );
		$xt->assign( "item".$this->id."_optionattrs", $option_attrs );
		
	}
	
	/**
	 * Find a menu descendant with a link
	 *
	 */
	function getFirstChildWithLink()
	{
		if( $this->isShowAsLink() )
			return $this;
		foreach( $this->children as $child ) 
		{
			if( $child->isShowAsLink() )
				return $child;
		}
		foreach( $this->children as $child ) 
		{
			$childWithLink = $child->getFirstChildWithLink();
			if( $childWithLink )
				return $childWithLink;
		}
		return null;
	}
	/**
	 * Assign values for groups that not links
	 *
	 * @param link $xt
	 */
	function assignGroupOnly(&$xt)
	{
		// assign title between tag a
		$xt->assign("item".$this->id."_title", $this->title);
		// assign common attr
		$attrForAssign = ' id="itemlink'.$this->id.'" itemtitle="'.$this->title.'" '.($this->style ? ' style="cursor:default;text-decoration:none; '.$this->style.'"' : '');
		
		$xt->assign("item".$this->id."_menulink_attrs", $attrForAssign);
		$xt->assign("item".$this->id."_optionattrs","disabled");
	}
	/**
	 * Checks if isset parent menu element for this table by following prioriry:
	 * List->Chart->Report->Search->Add->Print
	 *
	 * @return bool
	 */
	function isSetParentElem() 
	{		
		// different page types, in List->Chart->Report->Search->Add->Print priority
		//$pageTypes = array('List', 'Chart', 'Report', 'Search', 'Add', 'Print');
		if( !isset( $this->menuTableMap[ $this->table ] ) )
			return false;
			
		$pageTypes = array('list', 'chart', 'report', 'search', 'add', 'print');
		
		$pageTypesInLowCase = array_keys( $this->menuTableMap[ $this->table ] );
		
		
		switch (strtolower($this->pageType)) 
		{			
			case 'list':
				// do nothing, because list has highest priority
				return false;
				break;
			case 'chart':
				/*
				 * count elements of inner join between parent pageTypes of this pageType 
				 * and all menu link types of this table represented in this menu
				 * array_intersect(array_slice($pageTypes, 0, 1), $this->pageTypesInMenuForThisTable) returns all elements
				 * with higher priority than this pageType, same code for all cases. 
				 */
				if (count(array_intersect(array_slice($pageTypes, 0, 1), $pageTypesInLowCase)))
					return true;
				else
					return false;
				break;
			case 'report':
				if (count(array_intersect(array_slice($pageTypes, 0, 2), $pageTypesInLowCase)))
					return true;
				else
					return false;
				break;
			case 'search':
				if (count(array_intersect(array_slice($pageTypes, 0, 3), $pageTypesInLowCase)))
					return true;
				else
					return false;
				break;
			case 'add':
				if (count(array_intersect(array_slice($pageTypes, 0, 4), $pageTypesInLowCase)))
					return true;
				else
					return false;
				break;
			case 'print':
				if (count(array_intersect(array_slice($pageTypes, 0, 5), $pageTypesInLowCase)))
					return true;
				else
					return false;
				break;
			default:
				// not supported type, check not to show as current
				break;
				
		}
	}
	
	/**
	 * Check if current page, that we want to show, isset in menu elements collection
	 *
	 * @param string $pageName
	 * @return bool
	 */
	function isThisPageInMenu() 
	{
		return isset( $this->menuTableMap[ $this->table ][ $this->pageObject->getPageType() ] );
	}
	
	/**
	 * Returns array of keys in lower case
	 *
	 * @param array $arr
	 * @return array
	 */
	function changeKeysInLowerCaseFromArr($arr) {
		$lowArr = array();
		foreach ($arr as $key=>$val){
			$lowArr[] = strtolower($key);
		}
		return $lowArr;
	}
	/**
	 * Clear session params
	 *
	 */
	function clearMenuSession()
	{
		if (isset($_SESSION['menuItemId']))
			unset($_SESSION['menuItemId']);
		
	}
	/**
	 * Set session params before start
	 *
	 */
	static function setMenuSession()
	{
		if (postvalue("menuItemId"))
			$_SESSION['menuItemId'] = postvalue("menuItemId");	
	}
	
	function getItemDescendants( &$descendants, $level = 0 )
	{
		foreach( $this->children as $child )
		{
			$descendants[] = $child;
			if( $level )
				$child->getItemDescendants( $descendants, $level - 1 );
		}
	}
	
	function isBootstrap() 
	{
		return ( $this->pageObject->getLayoutVersion() == BOOTSTRAP_LAYOUT );
	}

	function isWelcome() 
	{
		return ( $this->menuId == WELCOME_MENU );
	}
	
	function isTreelike() 
	{
		return MENU_VERTICAL == $this->menuMode && ProjectSettings::isMenuTreelike( $this->menuId );
	}

	function isDrillDown() 
	{
		return !$this->isWelcome() && !$this->isTreelike() && ProjectSettings::isMenuDrillDown( $this->menuId );
	}
}
?>
