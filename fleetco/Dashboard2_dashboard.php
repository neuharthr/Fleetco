<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/searchclause.php");
require_once('include/xtempl.php');
require_once('classes/dashboardpage.php');

add_nocache_headers();

require_once("include/Dashboard2_variables.php");

if( !Security::processPageSecurity( $strtablename, 'S' ) )
	return;




$layout = new TLayout("dashboard", "AvenueAvenue", "MobileAvenue");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->skins["search"] = "1";

$layout->blocks["center"][] = "search";
$layout->containers["dash"] = array();
$layout->container_properties["dash"] = array(  );
$layout->containers["dash"][] = array("name"=>"dashboard",
	"block"=>"", "substyle"=>1  );

$layout->skins["dash"] = "";

$layout->blocks["center"][] = "dash";
$layout->blocks["top"] = array();
$layout->containers["toplinks"] = array();
$layout->container_properties["toplinks"] = array(  );
$layout->containers["toplinks"][] = array("name"=>"loggedas",
	"block"=>"security_block", "substyle"=>1  );

$layout->skins["toplinks"] = "empty";

$layout->blocks["top"][] = "toplinks";
$layout->containers["hmenu"] = array();
$layout->container_properties["hmenu"] = array(  );
$layout->containers["hmenu"][] = array("name"=>"hmenu",
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["hmenu"] = "hmenu";

$layout->blocks["top"][] = "hmenu";
$page_layouts["Dashboard2_dashboard"] = $layout;

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



$xt = new Xtempl();
$id = postvalue("id");
$mode = postvalue("mode");
$id = $id != "" ? $id : 1;

//array of params for classes
$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["tName"] = $strTableName;
$params["mode"] = $mode;
$params["pageType"] = PAGE_DASHBOARD;
$params["templatefile"] = GetTemplateName("Dashboard2", "dashboard");
				
$pageObject = new DashboardPage($params);
$pageObject->init();

$pageObject->process();
?>