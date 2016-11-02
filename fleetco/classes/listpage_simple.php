<?php
/**
 * Class for list page with mode simple
 *
 */
class ListPage_Simple extends ListPage 
{
	/**
	 * Constructor, set initial params
	 *
	 * @param array $params
	 */	
	function __construct(&$params) 
	{
		// call parent constructor
		parent::__construct($params);	
		$this->pSetEdit = new ProjectSettings($this->tName, PAGE_SEARCH);
	}
	/**
	 * Add common assign for simple mode on list page
	 */	
	function commonAssign() 
	{
		parent::commonAssign();

		$this->importLinksAttrs();

		$this->xt->assign("left_block", true);
		
		$this->addAssignTopLinks();
		
		$this->addAssignPageDetails();	
		
		$this->xt->assign("moreButtons", $this->exportAvailable() || $this->printAvailable() || $this->importAvailable() ||  $this->advSearchAvailable() );
		
		$this->xt->assign("widhtSelected", $this->exportAvailable() || $this->printAvailable() || $this->inlineEditAvailable() || $this->deleteAvailable() );
		
		if( $this->exportAvailable() )
		{
			$this->xt->assign("exportselected_link", true);
			$this->xt->assign("exportselectedlink_span", $this->buttonShowHideStyle());
			$this->xt->assign("exportselectedlink_attrs", $this->getPrintExportLinkAttrs('export'));
		}
		
		if( $this->printAvailable() )
		{
			// new print panel
			if ( !$this->rowsFound )
				$this->xt->displayBrickHidden("printpanel");
			$this->xt->assign("print_friendly",  true);
			$this->xt->assign("print_friendly_all", true);
			$this->xt->assign("print_recspp", $this->pSet->getPrinterSplitRecords() );

			for($i = 0; $i < count($this->allDetailsTablesArr); $i ++) 
			{
				if( $this->permis[$this->allDetailsTablesArr[$i]['dDataSourceTable']]['add'] || $this->permis[$this->allDetailsTablesArr[$i]['dDataSourceTable']]['search'] )
				{
					$this->xt->assign("print_details", true);
					$this->xt->assign("print_details_" . GoodFieldName( $this->allDetailsTablesArr[$i]['dDataSourceTable'] ), true);
				}
			}
			
			
			
			// end new print panel

			$this->xt->assign("printselected_link", true);
			$this->xt->assign("printselectedlink_attrs", $this->getPrintExportLinkAttrs('print'));
			$this->xt->assign("printselectedlink_span", $this->buttonShowHideStyle());
		}
		
		//advanced search and attr
		$this->xt->assign("advsearchlink_attrs", "id=\"advButton".$this->id."\"");
		
		
		$this->xt->assign('menu_block', $this->isShowMenu() || $this->isAdminTable());
		
		if( $this->mobileTemplateMode() )
		{
			$this->xt->assign('morelinkmobile_block', true);
			$this->xt->assign('tableinfomobile_block', true);
			$this->xt->displayBrickHidden("vmsearch2");
		}
		
		$this->setupBreadcrumbs();
		$this->xt->assign( "grid_classes", "table-bordered table-striped" );
	}
	
	/**
	 *
	 */
	protected function setupBreadcrumbs()
	{
		if( $this->isAdminTable() )
			$this->prepareBreadcrumbs("adminarea");
		else
			$this->prepareBreadcrumbs("main");
	}
	
	/**
	 * Add assign for top links, blocks and more button links
	 *
	 * @param boolean $exportPermis
	 */
	function addAssignTopLinks()
	{
		if( !$this->isDispGrid() && !$this->pSetEdit->ajaxBasedListPage() )
			return;
		
		if( $this->printAvailable() )
		{
			// print links and attrs
			$this->xt->assign("prints_block", true );
			$this->xt->assign("print_link", $this->rowsFound );
			$this->xt->assign("printlink_attrs", "id='print_".$this->id."' name='print_".$this->id."'".(!$this->rowsFound && $needShowLinkForAdd ? " style='display:none;'" : ""));
			//print all link and attr
			$this->xt->assign("printall_link", true );
			$this->xt->assign("printalllink_attrs","id='printAll_".$this->id."' name='printAll_".$this->id."'". (!$this->rowsFound ? " style='display:none;'" : ""));
			if( !$this->rowsFound )
				$this->xt->displayBrickHidden("toplinks_print");
		}
		
		if( $this->exportAvailable() )
		{
			//export link and attr
			$this->xt->assign("export_link", true );
			$this->xt->assign("exportlink_attrs", 
							  "id = 'export_".$this->id."'
							   name = 'export_".$this->id."'
							   onclick=\"window.open(this.href,'wExport');return false;\""
							   .(!$this->rowsFound ? " style='display:none;'" : ""));
			if( !$this->rowsFound )
				$this->xt->displayBrickHidden("toplinks_export");
		}
	}
	
	/**
	 * Add assign for details_ found, page_of and recsperpage blocks
	 * If found 0 recs display this blocks hidden
	 *
	 */
	function addAssignPageDetails() 
	{
		$searchPermis = $this->permis[$this->tName]['search'];
		if (!$this->rowsFound && !$this->inlineAddAvailable() && !$this->showAddInPopup) {
			return;
		}
		
		$this->xt->assign("details_block", $searchPermis );
		if( !$this->rowsFound )
		{
			$this->xt->displayBrickHidden("details_found");
			$this->xt->displayBrickHidden("vdetails_found");
		}
		
		$this->xt->assign("pages_block", $searchPermis);
		if( !$this->rowsFound )
		{
			$this->xt->displayBrickHidden("page_of");
			$this->xt->displayBrickHidden("vpage_of");
		}
		$this->xt->assign("pages_attrs","id=\"pageOf".$this->id."\" name=\"pageOf".$this->id."\"");
		
		if( $searchPermis && count($this->arrRecsPerPage))
		{
			$this->xt->assign("recordspp_block", true);
			$this->createPerPage();
			if( !$this->rowsFound )
			{
				$this->xt->displayBrickHidden("recsperpage");
				$this->xt->displayBrickHidden("vrecsperpage");
			}
		}
	}
		
	/**
	 * Add common html code for simple mode on list page
	 */	
	function addCommonHtml() 
	{
		$this->body ["begin"] .= GetBaseScriptsForPage($this->isDisplayLoading); 
		
		//add parent common html code
		parent::addCommonHtml();
		
		// assign body end
		$this->body['end'] = XTempl::create_method_assignment( "assignBodyEnd", $this);
	}
	
	function buildSearchPanel() 
	{
		if(!$this->permis[$this->tName]["search"])
		{
			return;
		}
		$this->xt->enable_section("searchPanel");
		$params = array();
		$params['pageObj'] = &$this;
		$params['panelSearchFields'] = $this->panelSearchFields;
		$panelSearchFields = array();
		$allSearchFields = $this->pSet->getAllSearchFields();
		
		for($i=0; $i<count($allSearchFields); $i++)
		{
			if( !$this->matchWithDetailKeys($allSearchFields[$i]) )
				$panelSearchFields[] = $allSearchFields[$i];
		}
				
		$params['allSearchFields'] = $panelSearchFields;
		
		$this->searchPanel = new SearchPanelSimple($params);
		$this->searchPanel->buildSearchPanel();
	}	
}

?>
