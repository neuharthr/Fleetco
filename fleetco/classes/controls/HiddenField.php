<?php
require_once getabspath('classes/controls/TextControl.php');
class HiddenField extends TextControl
{
	function __construct($field, $pageObject, $id, $connection)
	{
		EditControl::__construct($field, $pageObject, $id, $connection);
		$this->format = EDIT_FORMAT_HIDDEN;
	}

	function buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		parent::buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
		echo '<input id="'.$this->cfield.'" type="Hidden" name="'.$this->cfield.'" value="'.runner_htmlspecialchars($value).'">';
		$this->buildControlEnd($validate, $mode);
	}
}
?>