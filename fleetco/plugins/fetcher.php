<?php

class FetcherCustom extends Fetcher {
  var $_content;
  var $_baseurl;
  var $_firstbaseurl;
  
  function FetcherCustom($page) {
 		$this->_content=$page;
	$strbase = GetSiteUrl();
	if($_SERVER["REQUEST_URI"])
		$uri = parse_url($_SERVER["REQUEST_URI"]);
	else
		$uri=array("path"=>$_SERVER["SCRIPT_NAME"]);
	$uripath = pathinfo($uri["path"]);
	$strbase.=$uripath["dirname"];
	
	$this->_firstbaseurl=$strbase;
	$this->_baseurl=$strbase;
  }

  function get_data($filename) {
    global $cCharset;  
	if(!strlen($filename))
		return new FetchedDataURL($this->_content, array("Content-Type: text/html; charset=".$cCharset), "");
	$url = parse_url($filename);
	$base = parse_url($this->_firstbaseurl);
	$usehttp=true;
	while(1)
	{
		if(@$url["host"] && strtoupper($base["host"])!=strtoupper($url["host"]))
			break;
//	check paths
		$urlpath=pathinfo($url["path"]);
	
		$base["path"] = str_replace("\\","/",$base["path"]);

		if(strlen($urlpath["dirname"])<strlen($base["path"]) || strtoupper(substr($urlpath["dirname"],0,strlen($base["path"])))!=strtoupper($base["path"]))
		{
			break;
		}

		$pathtail = substr($urlpath["dirname"],strlen($base["path"]));
		if($pathtail == "\\" || $pathtail == "/")
			$pathtail = "";
		$selfpath_parts = pathinfo(__FILE__);
		$selfpath = $selfpath_parts["dirname"];
		$selfpath = substr($selfpath,0,strlen($selfpath)-8);
		$filepath = $selfpath.$pathtail."/".$urlpath["basename"];
		$this->_baseurl = $this->_firstbaseurl.$pathtail;
		$ext = strtoupper($urlpath["extension"]);	
		if($ext=="PHP" || $ext=="ASP" || $ext=="ASPX")
		{			
			$filename = $urlpath["basename"];
			if($ext!="PHP" || $pathtail!="" || $filename != "imager.php" && $filename != "mfhandler.php")//strtolower(substr($filename,strlen($filename)-11))!="_imager.php")	
				break;
//	read image
			$params=array();
			$rawparams = explode("&",$url["query"]);
			foreach($rawparams as $p)
			{
				$pos = strpos($p,"=");
				if($pos===false)
					continue;
				$params[urldecode(substr($p,0,$pos))] = urldecode(substr($p,$pos+1));
			}
			$pdf=1;
			global $conn;
			include($selfpath."/".$filename);
			$itype = SupposeImageType($file);
			if(!$itype || $itype=="image/bmp")
				return null;

			return new FetchedDataURL($file, array(), "");
		}

		//	read file
		if(!file_exists($filepath))
		{
			$pos = strpos($filepath, "img");
			if($pos >= 0 
				&& ($filepath[$pos + 3] == '/' || $filepath[$pos + 3] == '\\')
				&& ($filepath[$pos - 1] == '/' || $filepath[$pos - 1] == '\\')
				)
				$filepath = substr($filepath, 0, $pos) . "include/img" . substr($filepath, $pos + 3);
			else
				return null;
		}

		if(!file_exists($filepath))
			return null;

		$file = @file_get_contents($filepath);
		if(!$file)
			return null;

		return new FetchedDataURL($file, array(), "");
	}
//	read url
	$reportingmode = error_reporting(0);
	$file=@file_get_contents($filename);
	error_reporting($reportingmode);
	if(!$file)
		return null;
	return new FetchedDataURL($file, array(), "");
  }
  
  function get_base_url() {
	return $this->_baseurl."/";
  }

  function error_message() {
    return '';
  }
}
?>