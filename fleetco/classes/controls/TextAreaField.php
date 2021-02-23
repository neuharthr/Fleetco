<?php
require_once getabspath('classes/controls/TextControl.php');
class TextAreaField extends TextControl
{
	function __construct($field, $pageObject, $id, $connection)
	{
		EditControl::__construct($field, $pageObject, $id, $connection);
		$this->format = EDIT_FORMAT_TEXT_AREA;
	}

	function buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		parent::buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);

		$nWidth = $this->pageObject->pSetEdit->getNCols($this->field);
		$nHeight = $this->pageObject->pSetEdit->getNRows($this->field);
		if($this->pageObject->pSetEdit->isUseRTE($this->field))
		{
			$value = $this->RTESafe($value);
			// creating src url
			$browser = "";
			if(@$_REQUEST["browser"]=="ie")
				$browser = "&browser=ie";

			// add JS code
			echo "<iframe frameborder=\"0\" vspace=\"0\" hspace=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\" id=\""
				.$this->cfield."\" ".(($mode==MODE_INLINE_EDIT || $mode==MODE_INLINE_ADD) && $this->is508==true ? "alt=\""
				.$this->strLabel."\" " : "")."name=\"".$this->cfield."\" title=\"Basic rich text editor\" style='";
			if ( !$this->pageObject->mobileTemplateMode())
				echo "width: " . ($nWidth+1) . "px;";
			echo "height: " . ($nHeight+100) . "px;'";
			echo " src=\"".GetTableLink("rte", "", "ptype=".$this->pageObject->pageType."&table=".GetTableURL($this->pageObject->tName)."&"."id="
				.$this->id."&".$this->iquery.$browser."&".($mode==MODE_ADD || $mode==MODE_INLINE_ADD ? "action=add" : ''))."\">";
			echo "</iframe>";
		}
		else
		{
			$classString = "";
			$style = 'height: '.$nHeight.'px;';
			if( $this->pageObject->getLayoutVersion() == BOOTSTRAP_LAYOUT )
			{
				$classString = " class=\"form-control\"";
				if($mode==MODE_INLINE_EDIT || $mode==MODE_INLINE_ADD)
					$style .=  "width: ".($nWidth)."px;";
			}
			else if (!$this->pageObject->mobileTemplateMode())
			{
				$style .=  "width: ".($nWidth)."px;";
			}
			echo '<textarea id="'.$this->cfield.'" '.$classString.' alt="' .$this->strLabel . '" name="'.$this->cfield.'" style="' . $style . '">'.runner_htmlspecialchars($value).'</textarea>';
		}

		$this->buildControlEnd($validate, $mode);
	}

	function getFirstElementId()
	{
		return $this->cfield;
	}
	
	/**
	 * returns safe code for preloading in the RTE
	 * @intellisense
	 * @param String text
	 * @return String
	 */
	protected function RTESafe($text)
	{
		$tmpString = trim($text);
		if(!$tmpString)
			return "";

		//	convert all types of single quotes
		$tmpString = str_replace("'", "&#39;", $tmpString);

		//	replace carriage returns & line feeds
		$tmpString = str_replace( chr(10), " ", $tmpString );
		$tmpString = str_replace( chr(13), " ", $tmpString );

		return $tmpString;
	}

	/**
	 * @intellisense
	 */
	protected function CreateCKeditor($value)
	{
		echo '<div id="disabledCKE_'.$this->cfield.'"><textarea id="'.$this->cfield.'" name="'.$this->cfield.'" rows="8" cols="60">'.runner_htmlspecialchars($value).'</textarea></div>';
	}
}
?>