<?php
include_once getabspath("classes/controls/ViewFileField.php");
class ViewFileDownloadField extends ViewFileField
{
	public $sizeUnits = array();
	
	/**
	 * addJSFiles
	 * Add control JS files to page object
	 */
	function __construct($field, $container, $pageobject)
	{
		parent::__construct($field, $container, $pageobject);
		$this->sizeUnits = array("KB", "MB", "GB", "TB");
	}
	
	public function addJSFiles()
	{
		if($this->container->pSet->showThumbnail($this->field)){
						$this->AddJSFile("include/zoombox/zoombox.js");
			$this->getJSControl();
		}
	}
	
	/**
	 * addCSSFiles
	 * Add control CSS files to page object
	 */ 
	function addCSSFiles()
	{
		if($this->container->pSet->showThumbnail($this->field))
			$this->AddCSSFile("include/zoombox/zoombox.css");
	}
	
	public function showDBValue(&$data, $keylink)
	{
		$value = "";
		$this->upload_handler->tkeys = $keylink;
		$filesArray = $this->getFilesArray($data[$this->field]);
		$showThumbnails = $this->container->pSet->showThumbnail($this->field);
		$isExport = $this->container->pageType == PAGE_EXPORT
			|| $this->container->forExport != ''; 
		if($showThumbnails)
			$zoomboxRand = rand(11111, 99999);
		foreach ($filesArray as $file)
		{
			$userFile = $this->upload_handler->buildUserFile($file);
			if(!$isExport)
			{
				$value .= ($value != "" ? "<br>" : "");
				if($showThumbnails && $userFile["thumbnail_url"] != "" && CheckImageExtension($file["name"])) 
				{
					$value .= "<a target=_blank href=\"".runner_htmlspecialchars($userFile["url"])
						."\" class='zoombox zgallery".$zoomboxRand."'><img  border='0'";
					if($this->is508)
						$value .= " alt=\"".runner_htmlspecialchars($userFile["name"])."\"";
					$value .= " src=\"".runner_htmlspecialchars(GetRootPathForResources($userFile["thumbnail_url"]))."\" /></a>";
				}
				else if($this->container->pSet->showIcon($this->field)) 
				{
					$value .= '<a href="'.runner_htmlspecialchars($userFile["url"])
						.'"><img style="vertical-align: middle;" src="'.GetRootPathForResources('images/icons/'
						.$this->getFileIconByType($file["name"], $file["type"])).'" /></a>';
				}
			}
			
			if($this->container->pSet->showCustomExpr($this->field))
			{
				$value .= fileCustomExpression($file, $data, $this->field, $this->container->pageType);
			}
			else
			{
				if($isExport)
					$value .= ($value != "" ? ", " : "").$file["usrName"];
				else
				{ 
					if($showThumbnails && $userFile["thumbnail_url"] != "" && CheckImageExtension($file["name"]) && $value != "") 
					{
						$value .=  "<br />";
					}
					
					$label = runner_htmlspecialchars($file["usrName"] != "" ? $file["usrName"] : $file["name"]);	
					if($this->searchHighlight)
					{
						$label = $this->highlightSearchWord($label, true, ""); 
					}						
					$value .= '<a dir="LTR" href="'.runner_htmlspecialchars($userFile["url"]).'">'.$label.'</a>';					
				}	
			}
			if($this->container->pSet->showFileSize($this->field))
			{
				$fileSizeAndUnit = $this->getFileSizeAndUnits($file["size"]);
				$value .= " ".str_format_number(round($fileSizeAndUnit["size"], 2))
					." ".$this->sizeUnits[$fileSizeAndUnit["unitIndex"]];
			}
		}
		return $value;
	}
	
	public function getFileSizeAndUnits($size, $deepLevel = 0)
	{
		$shrinkedSize = $size / 1024;
		if($shrinkedSize > 1024 && $deepLevel < count($this->sizeUnits) - 1)
			return $this->getFileSizeAndUnits($shrinkedSize, $deepLevel + 1);
		return array("size" => $shrinkedSize, "unitIndex" => $deepLevel);
	}
	
	public function getFileIconByType($file_name, $fileType)
	{
		$fileName = "no_image.gif";
		if($fileType == "")
		{
			$fileType = getContentTypeByExtension(substr($file_name, strrpos($file_name, '.')));
		}
		
		return getIconByFileType($fileType, $file_name);
	}
}
?>