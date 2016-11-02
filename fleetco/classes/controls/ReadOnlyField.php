<?php
require_once getabspath('classes/controls/TextControl.php');
class ReadOnlyField extends TextControl
{
	function __construct($field, $pageObject, $id, $connection)
	{
		EditControl::__construct($field, $pageObject, $id, $connection);
		$this->format = EDIT_FORMAT_READONLY;
	}

	function buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		parent::buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
		if($mode==MODE_EDIT || $mode==MODE_ADD || $mode==MODE_INLINE_EDIT || $mode==MODE_INLINE_ADD)
		{
			echo '<span id="readonly_'.$this->cfield.'" '.$this->inputStyle.'>'.$this->pageObject->readOnlyFields[$this->field].'</span>';
		}
		echo '<input id="'.$this->cfield.'" type="Hidden" name="'.$this->cfield.'" value="'.runner_htmlspecialchars($value).'">';
		$this->buildControlEnd($validate, $mode);
	}
}
?>