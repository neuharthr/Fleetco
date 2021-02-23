<?php
require_once getabspath('classes/controls/LookupField.php');
class LookupTextField extends LookupField
{
	var $localPSet;
	var $linkAndDisplaySame = false;
	var $ciphererLink = null;
	function __construct($field, $pageObject, $id, $connection)
	{
		EditControl::__construct($field, $pageObject, $id, $connection);
		$this->format = EDIT_FORMAT_LOOKUP_WIZARD;

		$this->lookupPageType = $this->pageObject->pSetEdit->getPageTypeByFieldEditFormat($this->field, EDIT_FORMAT_LOOKUP_WIZARD);

		$this->localPSet = new ProjectSettings($this->pageObject->tName, $this->lookupPageType);

		$this->lookupTable = $this->localPSet->getLookupTable($this->field);
		$this->lookupType = $this->localPSet->getLookupType($this->field);
		if($this->lookupType == LT_QUERY)
			$this->lookupPSet = new ProjectSettings($this->lookupTable);
		$this->displayFieldName = $this->localPSet->getDisplayField($this->field);
		$this->linkFieldName = $this->localPSet->getLinkField($this->field);
		$this->linkAndDisplaySame = $this->displayFieldName == $this->linkFieldName;
		$this->setLookupConnection();

		$this->ciphererLink = new RunnerCipherer($this->pageObject->tName);
		if($this->lookupType == LT_QUERY)
			$this->ciphererDisplay = new RunnerCipherer($this->lookupTable);
		else
			$this->ciphererDisplay = $this->ciphererLink;

		$this->LCType = $this->localPSet->lookupControlType($this->field);
		if( $this->pageObject->mobileTemplateMode() && $this->LCType == LCT_AJAX )
			$this->LCType = LCT_DROPDOWN;

		$this->multiselect = $this->localPSet->multiSelect($this->field);
		$this->lwLinkField = $connection->addFieldWrappers($this->localPSet->getLinkField($this->field));
		$this->lwDisplayFieldWrapped = RunnerPage::sqlFormattedDisplayField($this->field, $connection, $this->localPSet);
		$this->customDisplay = $this->localPSet->getCustomDisplay($this->field);
	}

	function buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		parent::parentBuildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
		echo '<input id="'.$this->cfield.'" '.$this->inputStyle.' type="text" '
			.($mode == MODE_SEARCH ? 'autocomplete="off" ' : '')
			.(($mode==MODE_INLINE_EDIT || $mode==MODE_INLINE_ADD) && $this->is508==true ? 'alt="'.$this->strLabel.'" ' : '')
			.'name="'.$this->cfield.'" '.$this->pageObject->pSetEdit->getEditParams($this->field).' value="'
			.runner_htmlspecialchars($value).'">';
		$this->buildControlEnd($validate, $mode);
	}

	public function fillLookupFieldsIndexes()
	{
		$lookupIndexes = GetLookupFieldsIndexes($this->localPSet, $this->field);
		$this->linkFieldIndex = $lookupIndexes["linkFieldIndex"];
		$this->displayFieldIndex = $lookupIndexes["displayFieldIndex"];
	}

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