<?php
class ViewDatabaseImageField extends ViewControl
{
	protected $showThumbnails = false;
	
	protected $thumbWidth;
	protected $thumbHeight;
	
	function __construct($field, $container, $pageobject)
	{
		parent::__construct($field, $container, $pageobject);
		$this->showThumbnails = $container->pSet->showThumbnail( $this->field );
		
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
				$this->AddJSFile("include/zoombox/zoombox.js");
		$this->getJSControl();	
	}
	
	/**
	 * addCSSFiles
	 * Add control CSS files to page object
	 */ 
	function addCSSFiles()
	{
		$this->AddCSSFile("include/zoombox/zoombox.css");
	}
	
	public function showDBValue(&$data, $keylink)
	{
		if( !$data[ $this->field ] )
			return "";
			
		$value = "";
		$fileName = 'file.jpg';
		$fileNameF = $this->container->pSet->getFilenameField($this->field);
		if( $fileNameF && $data[$fileNameF] )
			$fileName = $data[$fileNameF];
			
		if( $this->showThumbnails ) 
		{
			$thumbPref = $this->container->pSet->getStrThumbnail($this->field);
			$hrefBegin = GetTableLink("mfhandler", "", "filename=".$fileName."&table=".rawurlencode($this->container->pSet->_table));
			$hrefEnd = "&nodisp=1&pageType=".$this->container->pageType.$keylink."&rndVal=".rand(0,32768);			
			
			$linkClass = "zoombox";
			if( $this->thumbWidth && $this->thumbHeight )
			{
				$hasThumbnail = $thumbPref != "" && strlen($data[ $thumbPref ]);
				$thumbFileUrl = $hrefBegin."&field=".( $hasThumbnail ? rawurlencode($thumbPref) : rawurlencode($this->field) ).$hrefEnd;
				$smallThumbnailStyle = $this->getSmallThumbnailStyle( $thumbFileUrl, $hasThumbnail );
				$linkClass.= " background-picture";
			}			
			
			$value.= "<a target=_blank href='".$hrefBegin."&field=".rawurlencode($this->field).$hrefEnd."' class='".$linkClass."' ".$smallThumbnailStyle.">";
			
			$value.= "<img border=0";
			if($this->is508)
				$value.= " alt=\"Image from DB\"";
			$value.= " src='".$hrefBegin."&field=".rawurlencode($thumbPref).$hrefEnd."'>";
			
			$value.= "</a>";
		} 
		else 
		{
			$value = "<img";
			if($this->is508)
				$value.= " alt=\"Image from DB\"";
			
			
			$value.= " border=0";
			$value.= $this->getImageSizeStyle(true)." src='".GetTableLink("mfhandler", "", "filename=".$fileName."&table=".rawurlencode($this->container->pSet->_table)
				."&field=".rawurlencode($this->field)
				."&nodisp=1"
				."&pageType=".$this->container->pageType.$keylink."&rndVal=".rand(0,32768))."'>";
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
			
		$fileNameField = $this->container->pSet->getFilenameField( $this->field );
		if( $fileNameField && $data[ $fileNameField ] )
			return $data[ $fileNameField ];			
			
		return "<<Image>>";		
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
	
	/**
	 * Get the width and height setting for small thumbnails
	 * wrapping in a style attribute
	 * @param String imageSrc
	 * @param Boolean hasThumbnail
	 * @return String
	 */
	protected function getSmallThumbnailStyle( $imageSrc, $hasThumbnail )
	{
		$styles = array();
		
		if( $imageSrc ) 
		{
			//	this is required to avoid the corrupting of the tag by the html2xhtml function in html2ps library
			$imageSrc = str_replace( "=", "&#61;", $imageSrc );
			$styles[] = ' background-image: url('.$imageSrc.');';	
			if( !$hasThumbnail )
				$styles[] = ' background-size: '. $this->thumbWidth.'px '.$this->thumbHeight.'px ;';	
		}
		
		if( $this->thumbWidth )	
			$styles[] = ' width: '.$this->thumbWidth.'px;';
		
		if( $this->thumbHeight )	
			$styles[] = ' height: '.$this->thumbHeight.'px';
		
		return ' style="'. implode( '' , $styles ) .'"';
	}
}
?>