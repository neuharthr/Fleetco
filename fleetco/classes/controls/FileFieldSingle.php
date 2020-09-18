<?php
class FileFieldSingle extends EditControl
{
	function __construct($field, $pageObject, $id, $connection)
	{
		parent::__construct($field, $pageObject, $id, $connection);
		$this->format = EDIT_FORMAT_FILE;
	}
	
	/**
	 * addJSFiles
	 * Add control JS files to page object
	 */
	function addJSFiles()
	{
		$this->pageObject->AddJSFile("include/zoombox/zoombox.js");
	}
	
	/**
	 * addCSSFiles
	 * Add control CSS files to page object
	 */ 
	function addCSSFiles()
	{
		$this->pageObject->AddCSSFile("include/zoombox/zoombox.css");
	}
	
	function buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		parent::buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
		
		if( $this->pageObject->pageType == PAGE_SEARCH || $this->pageObject->pageType == PAGE_LIST )
		{
			$classString = "";
			if( $this->pageObject->getLayoutVersion() == BOOTSTRAP_LAYOUT )
				$classString = " class=\"form-control\"";
			echo '<input id="'.$this->cfield.'" '.$classString.$this->inputStyle.' type="text" '
				.($mode == MODE_SEARCH ? 'autocomplete="off" ' : '')
				.(($mode==MODE_INLINE_EDIT || $mode==MODE_INLINE_ADD) && $this->is508==true ? 'alt="'.$this->strLabel.'" ' : '')
				.'name="'.$this->cfield.'" '.$this->pageObject->pSetEdit->getEditParams($this->field).' value="'
				.runner_htmlspecialchars($value).'">';	
				
			$this->buildControlEnd($validate, $mode);
			return;
		}	
			
		if( $mode == MODE_SEARCH )
			$this->format = "";
			
		$disp = "";
		$strfilename = "";

		$filename_size = 30;
		if( $this->pageObject->pSetEdit->isUseTimestamp( $this->field ) )
			$filename_size = 50;
		
		if( $mode == MODE_EDIT || $mode == MODE_INLINE_EDIT )
		{
			// show current file
			$newUploaderFilesData = my_json_decode($value);		
			$newUploaderWasUsed = is_array($newUploaderFilesData) && count($newUploaderFilesData) > 0;
			
			$fileData = $newUploaderWasUsed ? $newUploaderFilesData[0] : array();		
			$fileName = $newUploaderWasUsed ? $fileData["usrName"] : $value;
			
			$viewFormat = $this->pageObject->pSetEdit->getViewFormat( $this->field );
			if( $viewFormat == FORMAT_FILE || $viewFormat == FORMAT_FILE_IMAGE )
				$disp = $this->getFileOrImageMarkup( $value, $fileName, $newUploaderWasUsed, $fileData )."<br />";		
			
			//	filename edit			
			$strfilename = '<input type=hidden name="filenameHidden_'.$this->cfieldname.'" value="'.runner_htmlspecialchars( $fileName ).'"><br>'
				.mlang_message("FILENAME")
				.'&nbsp;&nbsp;<input type="text" style="background-color:gainsboro" disabled id="filename_'.$this->cfieldname
				.'" name="filename_'.$this->cfieldname.'" size="'.$filename_size.'" maxlength="100" value="'.runner_htmlspecialchars( $fileName ).'">';
			
			$strtype = '<br><input id="'.$this->ctype.'_keep" type="Radio" name="'.$this->ctype
					.'" value="upload0" checked class="rnr-uploadtype">'.mlang_message("KEEP");
			
			if( (strlen($value) || $mode == MODE_INLINE_EDIT) && !$this->pageObject->pSetEdit->isRequired($this->field) )
			{
				$strtype .= '<input id="'.$this->ctype.'_delete" type="Radio" name="'.$this->ctype
					.'" value="upload1" class="rnr-uploadtype">'.mlang_message("DELETE");
			}
			$strtype .= '<input id="'.$this->ctype.'_update" type="Radio" name="'.$this->ctype
				.'" value="upload2" class="rnr-uploadtype">'.mlang_message("UPDATE");
		}
		else
		{
			//	if Adding record		
			$strtype = '<input id="'.$this->ctype.'" type="hidden" name="'.$this->ctype.'" value="upload2">';
			
			$strfilename = '<br>'.mlang_message("FILENAME")
				.'&nbsp;&nbsp;<input type="text" id="filename_'.$this->cfieldname.'" name="filename_'.$this->cfieldname.'" size="'
				.$filename_size.'" maxlength="100">';			
		}
		
		echo $disp.$strtype;
		
		if( $mode == MODE_EDIT || $mode == MODE_INLINE_EDIT )
			echo '<br>';
		
		echo '<input type="File" id="'.$this->cfield.'" '
			.( ($mode == MODE_INLINE_EDIT || $mode == MODE_INLINE_ADD) && $this->is508 == true ? 'alt="'.$this->strLabel.'" ' : '')
			.' name="'.$this->cfield.'" >'.$strfilename;
	
		echo '<input type="Hidden" id="notempty_'.$this->cfieldname.'" value="'.(strlen($value)? 1 : 0).'">';
		
		$this->buildControlEnd($validate, $mode);
	}
	
	/**
	 * Get the image or file link markup
	 * @param String value
	 * @param String fileName
	 * @param Boolean newUploaderWasUsed
	 * @param Array fileData
	 * @return String
	 */
	function getFileOrImageMarkup( $value, $fileName, $newUploaderWasUsed, $fileData )
	{
		$cachedValue = $value;
		
		if( $newUploaderWasUsed )
			$finalFilePath = $filePath = $fileData["name"];
		else
		{
			$uploadFolder = $this->pageObject->pSetEdit->getUploadFolder( $this->field );
			$filePath = $uploadFolder.$value;
			
			$finalUploadFolder = $this->pageObject->pSetEdit->getFinalUploadFolder( $this->field );			
			$finalFilePath = $finalUploadFolder.$value;
		}
		
		if( !CheckImageExtension($fileName) )
		{			
			return "<a target=\"_blank\" href=\"".GetRootPathForResources(runner_htmlspecialchars( $filePath ))."\">"
				.runner_htmlspecialchars($fileName)."</a>";
		}
		
		$altAttr = $this->is508 ? " alt=\"".runner_htmlspecialchars( $fileName )."\"" : "";
		
		if( !myfile_exists(getabspath( $finalFilePath ) ) )
			$filePath = "images/no_image.gif";
						
		if( $this->pageObject->pSetEdit->showThumbnail( $this->field ) )
		{
			if( $newUploaderWasUsed )
				$finalThumbPath = $thumbPath = $fileData["thumbnail"];
			else
			{
				$thumbprefix = $this->pageObject->pSetEdit->getStrThumbnail( $this->field );
				$thumbPath = $uploadFolder.$thumbprefix.$fileName;
				$finalThumbPath = $finalUploadFolder.$thumbprefix.$fileName;
			}

			if( substr($thumbPath, 0, 7) != "http://" )
			{ 
				if( !myfile_exists(getabspath( $finalThumbPath )) )
					$thumbPath = $filePath;
			}
			
			// show thumbnail			
			return "<a target=\"_blank\" href=\"".GetRootPathForResources(runner_htmlspecialchars( $filePath ))."\" class='zoombox zgallery'>"
				."<img". $altAttr ." border=0 src=\"".GetRootPathForResources(runner_htmlspecialchars( $thumbPath ))."\"></a>";
		}

		$imageValue = $filePath;
		if( $filePath != "images/no_image.gif" && !$newUploaderWasUsed )
		{
			if( filesize($finalUploadFolder.$fileName) > 51200 ) 
				$imageValue = "images/icons/jpg.png";
		}
				
		$disp = '<img '.$altAttr.'src="'.GetRootPathForResources(runner_htmlspecialchars( $imageValue )).'" border=0>';
		if( $imageValue != "images/no_image.gif" )
			$disp = "<a target=\"_blank\" href=\"".GetRootPathForResources(runner_htmlspecialchars( $filePath ))."\">".$disp."</a>";							
		
		return $disp;
	}
	
	/**
	 *
	 */
	function readWebValue(&$avalues, &$blobfields, $legacy1, $legacy2, &$filename_values)
	{
		$this->getPostValueAndType();
		
		if( FieldSubmitted( $this->goodFieldName."_".$this->id ) )
		{
			$fileNameForPrepareFunc = securityCheckFileName( postvalue("filename_".$this->goodFieldName."_".$this->id) );
			if( $this->pageObject->pageType != PAGE_EDIT )
			{
				$this->webValue = prepare_upload($this->field, "upload2", $fileNameForPrepareFunc, $fileNameForPrepareFunc, ""
					, $this->id, $this->pageObject);
			}
			else
			{
				if(substr($this->webType, 0, 4) == "file")
				{
					$prepearedFile = prepare_file($this->webValue, $this->field, $this->webType, $fileNameForPrepareFunc, $this->id);
					if($prepearedFile !== false)
					{
						$this->webValue = $prepearedFile["value"];
						$filename = $prepearedFile["filename"];
					}
					else 
						$this->webValue = false;
				}
				else if(substr($this->webType, 0, 6) == "upload")
				{
					if($fileNameForPrepareFunc)
						$this->webValue = $fileNameForPrepareFunc;
					if($this->webType == "upload1")
					{
						// file deletion, read filename from the database
						$oldValues = $this->pageObject->getOldRecordData();
						$fileNameForPrepareFunc = $oldValues[$this->field];
					}
					$this->webValue = prepare_upload($this->field, $this->webType, $fileNameForPrepareFunc, $this->webValue, "", $this->id, $this->pageObject);
				}
			}
		}
		else
			$this->webValue = false;
		
		if(!($this->webValue === false))
		{
			if( $this->webValue && $this->pageObject->pSetEdit->getCreateThumbnail($this->field) )
			{
				$contents = GetUploadedFileContents("value_".$this->goodFieldName."_".$this->id);
				$ext = CheckImageExtension( GetUploadedFileName("value_".$this->goodFieldName."_".$this->id) );
				$thumb = CreateThumbnail($contents, $this->pageObject->pSetEdit->getThumbnailSize($this->field), $ext);
				
				$this->pageObject->filesToSave[] = new SaveFile($thumb, $this->pageObject->pSetEdit->GetStrThumbnail($this->field)
					.$this->webValue, $this->pageObject->pSetEdit->getUploadFolder($this->field), $this->pageObject->pSetEdit->isAbsolute($this->field));
			}
			
			$avalues[ $this->field ] = $this->webValue;
		}
	}

	function makeWidthStyle($widthPx)
	{
		if(0 == $widthPx)
			return "";
		return "min-width: ".$widthPx."px";
	}
}
?>