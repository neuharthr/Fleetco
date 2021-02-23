<?php

$version = explode('.', PHP_VERSION);
if($version[0]*10+$version[1]<53)
	set_magic_quotes_runtime(0);

if(@$_SERVER["REQUEST_URI"])
{
	$pinfo=pathinfo($_SERVER["REQUEST_URI"]);
	$dirname = @$pinfo["dirname"];
	$dir = explode("/",$dirname);
	$dirname="";
	foreach($dir as $subdir)
	{
		if($subdir!="")
			$dirname.="/".rawurlencode($subdir);
	}
	if($dirname!="")
	{
//		@session_set_cookie_params(0,$dirname."/");
	}
}

//	isolate sessions for projects running on the same site
@session_name(str_replace(" ", "", "s1468434625"));

// Setting the cache limiter to '' will turn off automatic sending of cache headers entirely
@session_cache_limiter("");
@session_start();


//E_STRICT has become a part of E_ALL since php 5.4 only
error_reporting( (E_ALL | E_STRICT) & ~E_STRICT & ~E_NOTICE );

/// include php specific code
include("phpfunctions.php");

$useOldMysqlLib = 0 != 0;

$cCharset = "utf-8";
$cCodepage = 65001;
$cMySQLNames = "utf8";
$gLoadSearchControls = 30;

$bSubqueriesSupported = true;

$projectPath = '';

header("Content-Type: text/html; charset=".$cCharset);


include("locale.php");
include("events.php");
include("commonfunctions.php");

include("dal.php");
include("appsettings.php");

set_error_handler("runner_error_handler");

$mbEnabled = extension_loaded('mbstring');

// json support
$useUTF8 = true;

if(!function_exists('json_encode') || !$useUTF8)
{
	include_once(getabspath("classes/json.php"));
	$GLOBALS['JSON_OBJECT'] = new Services_JSON(SERVICES_JSON_LOOSE_TYPE, $useUTF8);

    function my_json_encode($value, $json_unescaped_unicode = false){
    	return $GLOBALS['JSON_OBJECT']->encode($value);
    }

    function my_json_decode($value){
        $result = $GLOBALS['JSON_OBJECT']->decode($value);
        if(is_null($result) || count($result) == 0)
    		return array();
    	else
    		return $result;
	}
}
else
{
	function my_json_encode($value){
		return json_encode($value);
    }

    function my_json_decode($value){
        $result = json_decode($value,true);
        if(is_null($result) || count($result) == 0)
    		return array();
    	else
    		return $result;
	}
}

function my_json_encode_unescaped_unicode($value)
{
	array_walk_recursive($value, 'json_mb_encode_numericentity');
	return runner_decode_numeric_entity(my_json_encode($value), array(0x80, 0xffff, 0, 0xffff), 'UTF-8');
}

	
					
;
include("ciphererdes.php");
include("ciphereraes.php");

?>
