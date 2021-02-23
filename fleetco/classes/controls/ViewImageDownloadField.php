<?php
include_once getabspath("classes/controls/ViewFileField.php");
class ViewImageDownloadField extends ViewFileField
{
	protected $showThumbnails = false;
	
	protected $setOfThumbnails = false;
	
	protected $useAbsolutePath = false;
	
	protected $imageWidth;
	protected $imageHeight;
	
	protected $thumbWidth;
	protected $thumbHeight;
	
	
	function __construct($field, $container, $pageobject)
	{
		parent::__construct($field, $container, $pageobject);
		
		$this->showThumbnails = $container->pSet->showThumbnail( $this->field );
		$this->setOfThumbnails = $container->pSet->showListOfThumbnails( $this->field );
		$this->useAbsolutePath = $container->pSet->isAbsolute( $this->field );
		
		$this->imageWidth = $container->pSet->getImageWidth( $this->field );
		$this->imageHeight = $container->pSet->getImageHeight( $this->field );
		
		if( $this->showThumbnails )
		{
			$this->thumbWidth = $container->pSet->getThumbnailWidth( $this->field );
			$this->thumbHeight = $container->pSet->getThumbnailHeight( $this->field );
		}
	}	

	/**
	 * addJSFiles
	 * Add control JS files to page object
	 */
	public function addJSFiles()
	{
				$this->AddJSFile("include/sudo/jquery.sudoSlider.js");
		$this->AddJSFile("include/zoombox/zoombox.js");
		$this->getJSControl();
	}
	
	/**
	 * addCSSFiles
	 * Add control CSS files to page object
	 */ 
	function addCSSFiles()
	{
		$this->AddCSSFile("include/sudo/style.css");
		$this->AddCSSFile("include/zoombox/zoombox.css");
	}
	
	public function showDBValue(&$data, $keylink)
	{
		if($data[$this->field] == '')
			return '';
		
		$this->upload_handler->tkeys = $keylink;
		
		$resultValues = array();
		$arBigThumbnails = array();
		$zoomboxRand = rand(11111, 99999);
		
		$filesArray = $this->getFilesArray($data[$this->field]);
		
		foreach ($filesArray as $imageFile)
		{
			$userFile = $this->upload_handler->buildUserFile($imageFile);
			if($this->container->pageType == PAGE_EXPORT 
				|| $this->container->forExport != '')
			{
				$resultValues[] = $userFile["name"];
				continue;
			}
			
			if( !CheckImageExtension($imageFile["name"]) ) 
			{
				$resultValues[] = '<a href="'.runner_htmlspecialchars($userFile["url"]).'">'.$userFile["name"].'</a>';
				continue;
			}
			
			$userFile["url"] .= "&nodisp=1";
			if($userFile["thumbnail_url"] != "")
				$userFile["thumbnail_url"] .= "&nodisp=1";
			$imageValue = '';
			$divSize = '';
			$divBigThumbnailsSize = '';
			
			$hasThumbnail = false;
			$imagePath = $this->getImagePath( $imageFile["name"] ) ;
			$hasBigImage = myfile_exists($imagePath);
			if($this->showThumbnails)
			{
				$thumbPath = $this->getImagePath( $imageFile["thumbnail"] ); 
				$hasThumbnail = myfile_exists($thumbPath);
			}
			
			if($this->showThumbnails) 
			{
				if($hasThumbnail)
				{
					$imageValue.= '<img border="0"';
					
					if( $this->is508 )
						$imageValue.= ' alt="'.runner_htmlspecialchars($userFile["name"]).'"';
					
					$src = $userFile["thumbnail_url"] != "" ? $userFile["thumbnail_url"] : $userFile["url"];

					if( $this->thumbWidth || $this->thumbHeight )
						$imageValue.= $this->getSmallThumbnailStyle();
						
					$imageValue.= ' src="'.runner_htmlspecialchars($src).'" />';
				}
				else if($hasBigImage)
				{
					$imageValue.= '<img '.$this->getImageSizeStyle(true).' border="0"';
					if($this->is508)
						$imageValue.= ' alt="'.runner_htmlspecialchars($userFile["name"]).'"';
					$imageValue.= ' src="'.runner_htmlspecialchars($userFile["url"]).'">';
				}
				
				if($hasBigImage && $imageValue != '')
				{
					$href = runner_htmlspecialchars( $userFile["url"] );
					
					$smallThumbnailStyle = '';
					$linkClass = !$this->setOfThumbnails ? "zoombox zgallery".$zoomboxRand : '';	
					if( $this->thumbWidth && $this->thumbHeight )
					{
						$thumbFileUrl = $hasThumbnail ? $userFile["thumbnail_url"] :  $userFile["url"];
						$smallThumbnailStyle = $this->getSmallThumbnailStyle( $thumbFileUrl, $hasThumbnail );
						$linkClass.= " background-picture";
					}
					
					if( $linkClass )
						$linkClass = "class='".$linkClass."'";
					
					$imageValue = '<a target="_blank" href="'.$href.'"'. $linkClass . $smallThumbnailStyle .'>'
						.$imageValue.'</a>';
					
					if( $this->setOfThumbnails ) 
					{					
						$bigThumbnailLinkStyle = $this->getBigThumbnailSizeStyles();
						$bigThumbnailLink = '<a style="display: none;" href="'.$href.'" '. ($bigThumbnailLinkStyle ? 'class="zoombox"' : '') .'>';
						$bigThumbnailLink.= '<img src="'.$href.'" border="0"';
									
						$bigThumbnailLink .= $this->getImageSizeStyle(true);
							
						$bigThumbnailLink.= '/></a>';
						
						if( !$divBigThumbnailsSize )
							$divBigThumbnailsSize = 'style="'.$bigThumbnailLinkStyle.'"';
						
						$arBigThumbnails[] = $bigThumbnailLink;
					}
				}
			} 
			else if($hasBigImage)
			{
				$imageValue .= "<img";
				
				if($this->imageWidth)
				{
					$divSize = "width: ".$this->imageWidth."px;";
				}

				if($this->imageHeight)
				{
					$divSize .= "height: ".$this->imageHeight."px;";
				}
				
				if($divSize != "")
					$divSize = 'style="'.$divSize.'"';
				
				$imageValue .= " border=0";
				if($this->is508)
					$imageValue.= " alt=\"".runner_htmlspecialchars($userFile["name"])."\"";
				$imageValue .= $this->getImageSizeStyle(true).' src="'.runner_htmlspecialchars($userFile["url"]).'">';
			}
			
			if($imageValue != '')
				$resultValues[] = $imageValue;
		}
		
		if(count($resultValues) > 1 || count($resultValues) == 1 && $this->setOfThumbnails)
		{
			if($this->container->pageType == PAGE_EXPORT || $this->container->forExport != '')
				return implode(', ', $resultValues);

			if($this->container->pageType == PAGE_PRINT)
				return implode('<br />', $resultValues);
				
			for($i = 0; $i < count($resultValues); $i++)
			{
				if($i == 0)
					$resultValues[$i] = '<li>'.$resultValues[$i].'</li>';
				else 
					$resultValues[$i] = '<li style="display:none;">'.$resultValues[$i].'</li>';
			}

			$divBigThumbnails = '';
			if( count($arBigThumbnails) )	
				$divBigThumbnails = '<div class="big-thumbnails" '.$divBigThumbnailsSize.'>'.implode('', $arBigThumbnails).'</div>';
			
			if( !$divSize && !$this->setOfThumbnails )
				$divSize = 'style="'.$this->getBigThumbnailSizeStyles( true ).'"';
			
			$presudoSlider = '<div class="presudoslider" '.$divSize.'>'.$divBigThumbnails.'<ul class="viewimage-thumblist" style="list-style: none;">'.implode("",$resultValues).'</ul>'.$hiddenFields.'</div>';
			
			return '<div style="position:relative;" class="viewImage">'.$presudoSlider.'</div>';
		}
		
		if(count($resultValues) == 1)
			return $resultValues[0];
		
		return '<img src="'.GetRootPathForResources("images/no_image.gif").'" />';
	}

	/**
	 * @param &Array data
	 * @return String	 
	 */
	public function getTextValue(&$data)
	{		
		if( !strlen( $data[ $this->field ] ) )
			return "";
					
		$fileNames = array();
		
		$filesData = $this->getFilesArray( $data[ $this->field ] );		
		foreach($filesData as $imageFile)
		{	
			$userFile = $this->upload_handler->buildUserFile($imageFile);
			$fileNames[] = $userFile["name"] ;
		}		
		
		return implode(", ", $fileNames);
	}
	
	/**
	 * Get the path to the image file
	 * @param String imageFile
	 * @return String 
	 */
	protected function getImagePath( $imageFile ) 
	{
		if( $this->useAbsolutePath || isAbsolutePath($imageFile) )
			return $imageFile;
			
		return getabspath($imageFile);
	}
	
	/**
	 * Get the width and height setting for small thumbnails
	 * wrapping in a style attribute
	 * @param String imageSrc (optional)
	 * @param Boolean hasThumbnail (optional)
	 * @return String
	 */
	protected function getSmallThumbnailStyle( $imageSrc = false, $hasThumbnail = true )
	{
		$styles = array();
		
		if( $imageSrc ) 
		{
			//	this is required to avoid the corrupting of the tag by the html2xhtml function in html2ps library
			$imageSrc = str_replace( "=", "&#61;", $imageSrc );
			
			$styles[] = ' background-image: url('.$imageSrc.');';		
		}
		
		if( $this->thumbWidth )	
			$styles[] = ' width: '.$this->thumbWidth.'px;';
		
		if( $this->thumbHeight )	
			$styles[] = ' height: '.$this->thumbHeight.'px';
		
		return ' style="'. implode( '' , $styles ) .'"';
	}
	
	/**
	 * Get the width and height styles set for big thumbnails
	 * (the 'Sets of thumbnails with preview' option)
	 * @param Boolean widthAutoSet	(optional)
	 * @return String
	 */		
	protected function getBigThumbnailSizeStyles( $widthAutoSet = false ) 
	{
		$bigThumbnailSizeStyle = "";
		$bigThumbnailHeight = $this->imageHeight;
		$bigThumbnailWidth = $this->imageWidth;
		
		if( $bigThumbnailWidth ) 
			$bigThumbnailSizeStyle.= ' width: '.$bigThumbnailWidth.'px;';
		
		if($bigThumbnailHeight) 
			$bigThumbnailSizeStyle.= ' height: '.$bigThumbnailHeight.'px;';
		
		if( !$bigThumbnailWidth && $bigThumbnailHeight && $widthAutoSet )
			$bigThumbnailSizeStyle.= ' width: '. floor( 4 * $bigThumbnailHeight / 3 ).'px;';
		
		return $bigThumbnailSizeStyle;
	}
}
?>