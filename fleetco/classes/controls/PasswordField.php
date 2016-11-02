<?php
require_once getabspath('classes/controls/TextControl.php');
class PasswordField extends TextControl
{
	function __construct($field, $pageObject, $id, $connection)
	{
		EditControl::__construct($field, $pageObject, $id, $connection);
		$this->format = EDIT_FORMAT_PASSWORD;
	}

	function buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		parent::buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);

		if( $this->pageObject->getLayoutVersion() == BOOTSTRAP_LAYOUT )
			$classString = " class=\"form-control\"";
		echo '<input '.$this->inputStyle.' id="'.$this->cfield.'" '.$classString.' type="Password" '
			.(($mode==MODE_INLINE_EDIT || $mode==MODE_INLINE_ADD) && $this->is508==true ? 'alt="'.$this->strLabel.'" ' : '').'name="'
			.$this->cfield.'" '.$this->pageObject->pSetEdit->getEditParams($this->field).' value="'.runner_htmlspecialchars($value).'">';
		$this->buildControlEnd($validate, $mode);
	}

	function getFirstElementId()
	{
		return $this->cfield;
	}
}
?>