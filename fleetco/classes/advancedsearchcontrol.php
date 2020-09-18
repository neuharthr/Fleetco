<?php

/**
 * Search control builder class for advanced search
 *
 */
class AdvancedSearchControl extends SearchControl 
{
	function __construct($id, $tName, &$searchClauseObj, &$pageObj) 
	{
		parent::__construct($id, $tName, $searchClauseObj, $pageObj);
		$this->getSrchPanelAttrs['ctrlTypeComboStatus'] = true;
	}
	
	function getCtrlSearchTypeOptions($fName, $selOpt, $not, $flexible = false, $both = false) 
	{
		if( $this->pageObj->getLayoutVersion() == BOOTSTRAP_LAYOUT ) 
		{
			if( !$flexible && ($selOpt == EMPTY_SEARCH || $selOpt == NOT_EMPTY) ) 
				return $this->getControl($fName)->buildSearchOptions(array(EMPTY_SEARCH, NOT_EMPTY), $selOpt, $not, true);
				
			return $this->getControl($fName)->getSearchOptions($selOpt, $not, true); 
		}
		
		$withNot = $both ? $not : false;
		return parent::getCtrlSearchTypeOptions($fName, $selOpt, $withNot, false, $both);
	}
}
?>