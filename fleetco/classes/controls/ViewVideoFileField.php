<?php
include_once getabspath("classes/controls/ViewFileField.php");
class ViewVideoFileField extends ViewFileField
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
		$fieldIsUrl = $this->container->pSet->isVideoUrlField($this->field);
		$fileName = $data[$this->field];
		if (strlen($fileName))
		{
			if(!$fieldIsUrl)
			{
				$this->upload_handler->tkeys = $keylink;
				$filesArray = $this->getFilesArray($fileName);
			}
			else 
				$filesArray = array($fileName);
			
			$pageType = $this->container->pageType;
			$printOrExportPage = $pageType == PAGE_EXPORT || $pageType == PAGE_PRINT || $this->container->forExport != '';
			$counter = 0;
			foreach ($filesArray as $file)
			{
				if($printOrExportPage)
				{
					if($value != "")
						$value .= ", ";
					if($fieldIsUrl)
						$value .= $fileName;
					else
						$value .= $file["usrName"] ;
					continue;
				}
				if(!$fieldIsUrl)
				{
					if(!file_exists(getabspath($file["name"])))
						continue;
				}
				$videoId = 'video_'.GoodFieldName(runner_htmlspecialchars($this->field)).'_';
				$videoId .= $this->getContainer()->id."_";
				if($pageType != PAGE_ADD && $pageType != PAGE_EDIT)
					$videoId .= $this->getContainer()->recId;
				else
					$videoId .= postvalue("id");
				$videoId .= '_'.$counter++;
				
				if($fieldIsUrl)
				{
					$href = $fileName;
					if($fileName != "")
					{
						$pos = strrpos($fileName,".");
						$ext = substr($fileName,$pos);
						$type = getContentTypeByExtension($ext);
						if($type == "application/octet-stream")
							$type = "video/flv";
					}
				}
				else
				{
					$userFile = $this->upload_handler->buildUserFile($file);
					$href = $userFile["url"];
					if(!$this->getContainer()->pSet->isRewindEnabled($this->field))
						$href .= (strpos($href, '?') === false ? '?' : '&').'norange=1';
					if($file["type"] == "application/octet-stream")
						$type = "video/flv";
					else 
						$type = $file["type"];
				}
				if(strpos($type, 'video') !== 0)
					continue;
					
				if(strpos($href, 'rndVal=') === false)
					$href .= (strpos($href, '?') === false ? '?' : '&').'rndVal='.rand(0, 99999999);
				else
				{
					$startPos = strpos($href, 'rndVal=') + 7;
					$endPos = strpos($href, '&', $startPos);
					$href = substr($href, 0, $startPos).rand(0, 99999999).($endPos != -1 ? substr($href, $endPos) : '');
				}

				$vWidth = $this->getContainer()->pSet->getVideoWidth($this->field);
				$vHeight = $this->getContainer()->pSet->getVideoHeight($this->field);
				if($vWidth == 0)
					$vWidth = 300;
				if($vHeight == 0)
					$vHeight = 200;
				$value .= '<div style="width:'.$vWidth.'px; height:'.$vHeight.'px;">
					<video class="projekktor"  width="'.$vWidth.'" height="'.$vHeight.'"  id="'.$videoId.'" type="'.$type.'" src="'.$href.'">
					</video></div>';

				if($this->pageObject != null)
					$this->pageObject->controlsMap['video'][] = $videoId;
			}
		}
		return $value;
	}
}
?>