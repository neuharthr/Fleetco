<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
add_nocache_headers();

require_once("classes/searchclause.php");
require_once("include/rnewalmastertable_variables.php");
require_once("classes/searchcontrol.php");
require_once("classes/advancedsearchcontrol.php");
require_once("classes/panelsearchcontrol.php");


if( !isLogged() )
{ 
	Security::saveRedirectURL();
	redirectToLogin();
}

$cname = postvalue("cname");
$rname = postvalue("rname");

$accessGranted = CheckTablePermissions($strTableName, "S");
if(!$accessGranted)
{
	HeaderRedirect("menu");
}





$layout = new TLayout("search_bootstrap", "AvenueAvenue", "MobileAvenue");
$layout->version = 3;
	$layout->bootstrapTheme = "default";
		$layout->customCssPageName = "rnewalmastertable_search";
$layout->blocks["top"] = array();
$layout->containers["searchpage"] = array();
$layout->container_properties["searchpage"] = array(  );
$layout->containers["searchpage"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"header" );
$layout->containers["header"] = array();
$layout->container_properties["header"] = array(  );
$layout->containers["header"][] = array("name"=>"bssearchheader",
	"block"=>"searchheader", "substyle"=>1  );

$layout->skins["header"] = "";


$layout->skins["searchpage"] = "";

$layout->blocks["top"][] = "searchpage";
$layout->containers["fields"] = array();
$layout->container_properties["fields"] = array(  );
$layout->containers["fields"][] = array("name"=>"bssearchfields",
	"block"=>"", "substyle"=>1  );

$layout->skins["fields"] = "";

$layout->blocks["top"][] = "fields";
$layout->containers["bottombuttons"] = array();
$layout->container_properties["bottombuttons"] = array(  );
$layout->containers["bottombuttons"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"leftbuttons" );
$layout->containers["leftbuttons"] = array();
$layout->container_properties["leftbuttons"] = array(  );
$layout->containers["leftbuttons"][] = array("name"=>"srchbuttons",
	"block"=>"searchbuttons", "substyle"=>1  );

$layout->skins["leftbuttons"] = "";


$layout->skins["bottombuttons"] = "";

$layout->blocks["top"][] = "bottombuttons";
$page_layouts["rnewalmastertable_search"] = $layout;




require_once('include/xtempl.php');
require_once('classes/searchpage.php');
require_once('classes/searchpage_dash.php');
$xt = new Xtempl();

// id that used to add to controls names
$id = postvalue("id");
$id = $id ? $id : 1;
	
$mode = SEARCH_SIMPLE;
if( postvalue("mode") == "dashsearch" )
	$mode = SEARCH_DASHBOARD;
else if( postvalue("mode") == "inlineLoadCtrl" )
{
	// load search panel control
	$mode = SEARCH_LOAD_CONTROL;
	$layoutVersion = postvalue("layoutVersion");
}

$params = array();
$params["id"] = $id;
$params['xt'] = &$xt;
$params["mode"] = $mode;
$params['chartName'] = $cname;
$params['reportName'] = $rname;
$params['tName'] = $strTableName;
$params['pageType'] = PAGE_SEARCH;
$params['templatefile'] = $templatefile;
$params['shortTableName'] = 'rnewalmastertable';
$params['layoutVersion'] = $layoutVersion;

$params['searchControllerId'] = postvalue('searchControllerId') ? postvalue('searchControllerId') : $id;
$params['ctrlField'] = postvalue('ctrlField');

//crosstab report params
$params['axis_x'] = postvalue('axis_x');
$params['axis_y'] = postvalue('axis_y');
$params['field'] = postvalue('field');
$params['group_func'] = postvalue('group_func');

if( $mode == SEARCH_DASHBOARD )
{
	$params["dashTName"] = postvalue("table");
	$params["dashElementName"] = postvalue("dashelement");
}

$pageObject = new SearchPage($params);

if( $mode == SEARCH_LOAD_CONTROL )
{
	$pageObject->displaySearchControl();
	return;
}

$pageObject->init();
$pageObject->process();

?>
