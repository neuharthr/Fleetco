<?php
class DateTimeControl extends EditControl
{
	/**
	 * Form the control specified search options array and built the control's search options markup
	 * @param String selOpt		The search option value	
	 * @param Boolean not		It indicates if the search option negation is set 	
	 * @param Boolean both		It indicates if the control needs 'NOT'-options
	 * @return String			A string containing options markup
	 */	
	function getSearchOptions($selOpt, $not, $both)
	{
		$optionsArray = array(EQUALS, MORE_THAN, LESS_THAN, BETWEEN, EMPTY_SEARCH);
		if($both)
		{
			$optionsArray[] = NOT_EQUALS;
			$optionsArray[] = NOT_MORE_THAN;
			$optionsArray[] = NOT_LESS_THAN;
			$optionsArray[] = NOT_BETWEEN;
			$optionsArray[] = NOT_EMPTY;
		}
		return $this->buildSearchOptions($optionsArray, $selOpt, $not, $both);
	}
}
?>