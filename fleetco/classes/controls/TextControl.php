<?php
class TextControl extends EditControl
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
		$optionsArray = array();
		$isPHPEncripted = $this->pageObject->cipherer->isFieldPHPEncrypted($this->field);
		if(!$isPHPEncripted){
			$optionsArray[] = CONTAINS;
		}
		$optionsArray[] = EQUALS;
		if(!$isPHPEncripted){
			$optionsArray[] = STARTS_WITH;
			$optionsArray[] = MORE_THAN;
			$optionsArray[] = LESS_THAN;
			$optionsArray[] = BETWEEN;
		}
		$optionsArray[] = EMPTY_SEARCH;
		if($both)
		{
			if(!$isPHPEncripted){
				$optionsArray[] = NOT_CONTAINS;
			}
			$optionsArray[] = NOT_EQUALS;
			if(!$isPHPEncripted){
				$optionsArray[] = NOT_STARTS_WITH;
				$optionsArray[] = NOT_MORE_THAN;
				$optionsArray[] = NOT_LESS_THAN;
				$optionsArray[] = NOT_BETWEEN;
			}
			$optionsArray[] = NOT_EMPTY;
		}
		return $this->buildSearchOptions($optionsArray, $selOpt, $not, $both);		
	}
}
?>