<?php
include_once getabspath("classes/controls/ViewFileField.php");
class ViewAudioFileField extends ViewFileField
{
	public function showDBValue(&$data, $keylink)
	{
		$value = "";
		$fileName = $data[$this->field];
		if( strlen($fileName) )
		{
			$fieldIsUrl = $this->container->pSet->isVideoUrlField($this->field);
			if(!$fieldIsUrl)
			{
				$this->upload_handler->tkeys = $keylink;
				$filesArray = $this->getFilesArray($fileName);
			}
			else 
				$filesArray = array($fileName);
			
			$title = "";
			$titleField = $this->container->pSet->getAudioTitleField($this->field);
			if ($titleField)
				$title = runner_htmlspecialchars($data[$titleField]);
			
			foreach ($filesArray as $file)
			{
				if($this->container->pageType == PAGE_EXPORT || $this->container->pageType == PAGE_PRINT 
					|| $this->container->forExport != '')
				{
					if( $value != "" )
						$value .= ", ";
						
					$value.= $fieldIsUrl ? $file : $file["usrName"] ;
					continue;
				}
				// if file
				if( !$fieldIsUrl )
				{
					if(!file_exists(getabspath($file["name"])))
						continue;
				}
				if( $fieldIsUrl )
					$href = $file;
				else
				{
					$userFile = $this->upload_handler->buildUserFile($file);
					$href = runner_htmlspecialchars( $userFile["url"] );
					if(!$title || !$titleField)
						$title = $userFile["name"];
				}

				$link = '<a title="'.$title.'" href="'.$href.'">'.$title.'</a>';
				$value .= ($value == "" ? "" : "<br />").'<audio controls preload="none" src="'.$href.'">'.$link.'</audio>';
			}
		}
		return $value;
	}
}
?>