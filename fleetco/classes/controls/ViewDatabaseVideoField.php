<?php
class ViewDatabaseVideoField extends ViewControl
{
	/**
	 * addJSFiles
	 * Add control JS files to page object
	 */
	public function addJSFiles()
	{
				$this->AddJSFile("include/video/projekktor.js");
		$this->getJSControl();
	}

	/**
	 * addCSSFiles
	 * Add control CSS files to page object
	 */ 
	function addCSSFiles()
	{
		$this->AddCSSFile("include/video/theme/style.css");
	}
	
	public function showDBValue(&$data, $keylink)
	{
		$value = "";
		if (@$data[$this->field] != NULL && $this->container->pageType != PAGE_PRINT )
		{
			$videoId = 'video_'.GoodFieldName(runner_htmlspecialchars($this->field)).'_';
			$videoId .= $this->getContainer()->id."_";
			if($this->getContainer()->pageType != PAGE_ADD)
				$videoId .= $this->getContainer()->recId;
			else
				$videoId .= postvalue("id");	
			$type = 'video/mp4';
			$fileName = 'file.mp4';
			$fileNameF = $this->getContainer()->pSet->getFilenameField($this->field);
			if($fileNameF) 
			{
				$fileName = $data[$fileNameF];
				if(!$fileName)
					$fileName = 'file.mp4';
				else
					$type = getContentTypeByExtension(substr($fileName, strrpos($fileName, '.')));
			}
			$href = GetTableLink("mfhandler", "", "filename=".$fileName."&table=".rawurlencode($this->getContainer()->pSet->_table)
				."&field=".rawurlencode($this->field)
				."&pageType=".$this->getContainer()->pageType.$keylink);

			$vWidth = $this->getContainer()->pSet->getVideoWidth($this->field);
			$vHeight = $this->getContainer()->pSet->getVideoHeight($this->field);
			if($vWidth == 0)
				$vWidth = 300;
			if($vHeight == 0)
				$vHeight = 200;
			$value .= '
				<div style="width:'.$vWidth.'px; height:'.$vHeight.'px;">
				<video class="projekktor" width="'.$vWidth.'" height="'.$vHeight.'" id="'.$videoId.'" type="'.$type.'" src="'.$href.'" >
				</video></div>';

			if($this->pageObject != null)
				$this->pageObject->controlsMap['video'][] = $videoId; 
		}
		else 
		{
			$fileNameF = $this->getContainer()->pSet->getFilenameField($this->field);
			if($fileNameF) 
			{
				$fileName = $data[$fileNameF];
				if(!$fileName)
					$value = $fileName;
			}
		}
		return $value;
	}

	/**
	 * @param &Array data
	 * @return String	 
	 */
	public function getTextValue(&$data)
	{
		if( !strlen( $data[ $this->field ] ) ) 
			return "";		

		$fileNameField = $this->getContainer()->pSet->getFilenameField( $this->field );
		if( $fileNameField && $data[ $fileNameField ] ) 
			return $data[ $fileNameField ];	
			
		return "<<Video>>";
	}
	
	/**
	 * Get the field's content that will be exported
	 * @prarm &Array data
	 * @prarm String keylink
	 * @return String
	 */
	public function getExportValue(&$data, $keylink = "")
	{
		return mlang_message("LONG_BINARY");
	}	
}
?>