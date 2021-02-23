<?php
class TLayout
{
	var $containers = array();
	var $container_properties = array();
	var $blocks = array();
	var $name = "";
	var $version;
	var $style = "";
	var $styleMobile = "";
	var $skins = array();
	var $skinsparams = array();
	var $bootstrapTheme = "";
	var $customCssPageName = "";

	function __construct($name, $style, $styleMobile)
	{
		$this->name = $name;
		$this->style = $style;
		$this->styleMobile = $styleMobile;
	}

	function pdfStyle()
	{
		return "Pdf".substr($this->styleMobile,6);
	}

	function isBrickSet($brickName)
	{
		foreach($this->containers as $container)
		{
			foreach($container as $brick)
			{
				if($brick["name"] == $brickName)
				{
					return true;
				}
			}
		}
		return false;
	}

	function getBrickTableName($brickName)
	{
		foreach($this->containers as $container)
		{
			foreach($container as $brick)
			{
				if($brick["name"] == $brickName)
				{
					return $brick["table"];
				}
			}
		}
		return "";
	}
	
	/**
	 *  Returns list of CSS files required for displaying the layout
	 */
	public function getCSSFiles($rtl = false, $mobile = false, $pdf = false)
	{
		$files = array();
		$suffix = "";
		if( $rtl )
			$suffix = "RTL";
			
		if( $this->version == BOOTSTRAP_LAYOUT )
		{
			$files[] = "include/bootstrap/css/bootstrap.min.css";
			if(strlen($this->bootstrapTheme))
				$files[] = "styles/bootstrap/".$this->bootstrapTheme."/css/bootstrap-theme.min.css";
			else
				$files[] = "include/bootstrap/css/bootstrap-theme.min.css";

				if($pdf)
				$files[] = "styles/pdf.css";

			$files[] = "styles/bs".$suffix.".css";

			// tweaks.css must follow bs.css
			if(strlen($this->bootstrapTheme))
			{
				if( file_exists( getabspath( "styles/bootstrap/".$this->bootstrapTheme."/css/tweaks".$suffix.".css" ) ) )
					$files[] = "styles/bootstrap/".$this->bootstrapTheme."/css/tweaks".$suffix.".css";
			}

			if( file_exists( getabspath( "styles/custom/custom.css" ) ) )
				$files[] = "styles/custom/custom".$suffix.".css";
			
			if( strlen( $this->customCssPageName ) && file_exists( getabspath( "styles/custom/".$this->customCssPageName.".css" ) ) )
				$files[] = "styles/custom/".$this->customCssPageName.$suffix.".css";
		}
		else
		{
			$files[] = "styles/general.css";
			if($this->version == 1)
				$files[] = "styles/defaultOld.css";
			$pageStyle = $this->style;
			if($pdf)
				$pageStyle = $this->pdfStyle();
			$files[] = "styles/".$pageStyle."/style".($rtl ? 'RTL' : '').".css";
			if($this->version == 1)
				$files[] = "styles/".$pageStyle."/style".($rtl ? 'RTL' : '')."Old.css";
			if($mobile)
				$files[] = "pagestyles/mobile/".$this->name.($rtl ? 'RTL' : '').".css";
			else
				$files[] = "pagestyles/".$this->name.($rtl ? 'RTL' : '').".css";
		}
		return $files;
	}
};
?>