<?php
/**
 * SearchControl builder for search panel on list
 */
class PanelSearchControl extends SearchControl 
{
	/**
	 * Get controls attrs only for the Search panel
	 * @param String fName 				The search field's name	
	 * @param Number recId 				The search field row's Id
	 * @param Number fieldNum 			The search field control's index (0 for the first, 1 for the second)
	 * @param String value 				The search control's value
	 * @param String opt 				The search control's search option
	 * @param Boolean renderHidden 		Indicator showing if the search control is visible	
	 * @param Boolean isCached 			Indicator showing if the search control is cached
	 * @return Array
	 */
	function getCtrlParamsArr($fName, $recId, $fieldNum, $value, $opt, $renderHidden = false, $isCached = true) 
	{
		$parameters = parent::buildCtrlParamsArr($fName, $recId, $fieldNum, $value, $opt, $renderHidden, $isCached);
		
		$control = array();
		
		$parameters["additionalCtrlParams"]["searchPanelControl"] = true;
		$parameters["additionalCtrlParams"]["style"] = $this->pageObj->mobileTemplateMode() ? 'width: 35%;' :'width: 115px;';
		
		$ctrlsMap = $this->getExtraControlMap();
		$this->pageObj->fillControlsMap($ctrlsMap,true);
		
		return XTempl::create_function_assignment( "xt_buildeditcontrol", $parameters );
	}
	
	/**
	 * Get the extra search control's map array 
	 * @return Array
	 */ 
	protected function getExtraControlMap()
	{
		$ctrlsMap = array("controls" => array());
		$ctrlsMap["controls"]["skipDependencies"] = true;
		
		return $ctrlsMap;
	}
	
	function simpleSearchFieldCombo($fNamesArr, $selOpt) 
	{
		$options = "";
		if (sizeof($this->pSet->getGoogleLikeFields()) != 0)
			$options = '<option value="" >'.mlang_message("ANY_FIELD").'</option>';
		
		foreach($fNamesArr as $fName)
		{
			$fLabel = GetFieldLabel(GoodFieldName($this->tName), GoodFieldName($fName));
			$options .= '<option value="'.$fName.'" '.($selOpt == $fName ? 'selected' : '').'>'.$fLabel.'</option>';
		}
		return $options;
	}
	
	/**
	 * @return String
	 */
	function getCtrlSearchTypeOptions($fName, $selOpt, $not, $flexible = false, $both = false) 
	{	
		if( !$flexible && ($selOpt == EMPTY_SEARCH || $selOpt == NOT_EMPTY) ) 
			return $this->getControl($fName)->buildSearchOptions(array(EMPTY_SEARCH, NOT_EMPTY), $selOpt, $not, true);
			
		return $this->getControl($fName)->getSearchOptions($selOpt, $not, true); 
	}
}
?>