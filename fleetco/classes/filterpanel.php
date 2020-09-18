<?php
class FilterPanel 
{
	public $pageObj;

	protected $id;
	
	protected $xt;
	
	protected $tName;
	
	/**	
	 * The filters fileds names
	 * @type Array
	 */	
	protected $filterFileds;
	
	/**
	 * The array containig filters states (expan/collpased)
	 * @type Array
	 */	 
	protected $filterStates;
	
	/**
	 * The ViewControlsContainer class instance
	 * The pageObj's ViewControlsContainer instance could not be used instead due to 
	 * the search highlighting and text truncating features applied to its controls
	 * @type Object
	 */
	protected $viewControls;
	
	
	public function __construct(&$params)
	{
		RunnerApply($this, $params);
			
		$this->id = $this->pageObj->id; 
		$this->xt = $this->pageObj->xt;
		$this->tName = $this->pageObj->tName;

		$this->filterFileds = $this->pageObj->pSet->getFilterFields();
		$this->viewControls = new ViewControlsContainer($this->pageObj->pSet, PAGE_LIST);
		
		$this->xt->enable_section("filterPanel");
		if( !$this->pageObj->controlsMap["filters"] )
		{
			$this->pageObj->controlsMap["filters"] = array("controls" => array());
		}
	}
	
	/**
	 * Get filters blocks' data and Assign it to the Filter panel's blocks
	 */
	public function buildFilterPanel()
	{	
		include_once getabspath("classes/controls/FilterControl.php");
		foreach($this->filterFileds as $fieldName) 
		{			
			if( $this->pageObj->pSet->hasDependentFilter($fieldName) )
				continue;
							
			$filterFieldName = $fieldName;
			$filterControl = FilterControl::getFilterControl($filterFieldName, $this->pageObj, $this->id, $this->viewControls);			
			
			$filterCtrlBlocks = $filterControl->buildFilterCtrlBlockArray($this->pageObj);
			$filterButtonParams = $filterControl->getFilterButtonParams();
			$filterExtraControls = $filterControl->getFilterExtraControls();
			
			while( $filterControl->dependent )
			{
				$filterFieldName = $filterControl->parentFilterName;			
				$filterControl = FilterControl::getFilterControl($filterFieldName, $this->pageObj, $this->id, $this->viewControls);
					
				$filterCtrlBlocks = $filterControl->buildFilterCtrlBlockArray( $this->pageObj, $filterCtrlBlocks );		
				$filterButtonParams = $filterControl->getFilterButtonParams( $filterButtonParams );
				$filterExtraControls = $filterControl->getFilterExtraControls( $filterExtraControls );
			}			
			
			$filterState = $filterControl->getFilterState();
			
			$this->assignFilterPanelField($filterFieldName, $filterCtrlBlocks, $filterState, $filterButtonParams, $filterExtraControls);			
		}
	}
	
	/**
	 * Assign the Filter Panel's blocks
	 * @param Strign fieldName
	 * @param Array filterCtrlBlocks
	 * @param Array filterState
	 * @param Array filterButtonParams
	 * @param Array filterExtraControls
	 */
	protected function assignFilterPanelField($fieldName, $filterCtrlBlocks, $filterState, $filterButtonParams, $filterExtraControls) 
	{
		$postfix = "_".GoodFieldName($fieldName);
		$visibility = $filterState["visible"];
		
		$this->xt->assign("filter_control".$postfix, $visibility);
		if( !$visibility )
		{
			return;
		}
		
		$this->xt->assign_loopsection_byValue("filterCtrlBlock".$postfix, $filterCtrlBlocks);
		
		$this->xt->assign("collapsedClass".$postfix, "filter-collapsed");			
			
		$this->xt->assign("filterbutton_attrs".$postfix, $filterButtonParams["attrs"]);
		$this->xt->assign("filter_button_apply".$postfix, $filterButtonParams["hasApplyBtn"]);
		$this->xt->assign("filter_button_multiselect".$postfix, $filterButtonParams["hasMultiselectBtn"]);
		
		$this->xt->assign("clearLink".$postfix, $filterExtraControls["clearLink"]);
		$this->xt->assign("selectAll_attrs".$postfix, $filterExtraControls["selectAllAttrs"]);
		
		$this->xt->assign("filter_button_showmore".$postfix, $filterState["truncated"]);
		$this->xt->assign("show_n_more".$postfix, str_replace( "%n%", $filterExtraControls["numberOfExtraItemsToShow"], mlang_message("SHOW_N_MORE") ) );
		
		if( $filterState["showMoreHidden"] )
			$this->xt->assign("showMoreBtnClass".$postfix, "show-more-hidden");
	}
}
?>