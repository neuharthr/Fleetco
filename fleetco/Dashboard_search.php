<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
add_nocache_headers();

require_once("classes/searchclause.php");
require_once("include/Dashboard_variables.php");
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





$layout = new TLayout("search", "AvenueAvenue", "MobileAvenue");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["fields"] = array();
$layout->container_properties["fields"] = array(  );
$layout->containers["fields"][] = array("name"=>"srchheader",
	"block"=>"searchheader", "substyle"=>2  );

$layout->containers["fields"][] = array("name"=>"srchconditions",
	"block"=>"conditions_block", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"srchfields",
	"block"=>"", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"srchbuttons",
	"block"=>"searchbuttons", "substyle"=>2  );

$layout->skins["fields"] = "fields";

$layout->blocks["top"][] = "fields";
$page_layouts["Dashboard_search"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



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
$params['shortTableName'] = 'Dashboard';
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

$pageObject = new SearchPageDash($params);

if( $mode == SEARCH_LOAD_CONTROL )
{
	$pageObject->displaySearchControl();
	return;
}

$pageObject->init();
$pageObject->process();

?>
