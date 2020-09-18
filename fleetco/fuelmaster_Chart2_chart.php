<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once('include/xtempl.php');
require_once('classes/chartpage.php');
require_once('classes/searchclause.php');
add_nocache_headers();

require_once("include/fuelmaster_Chart2_variables.php");

if( !Security::processPageSecurity( $strtablename, 'S' ) )
	return;





$layout = new TLayout("chart_centered_vert", "AvenueAvenue", "MobileAvenue");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->containers["recordcontrols"] = array();
$layout->container_properties["recordcontrols"] = array(  );
$layout->containers["recordcontrols"][] = array("name"=>"toplinks_advsearch",
	"block"=>"asearch_link", "substyle"=>1  );

$layout->skins["recordcontrols"] = "2";

$layout->blocks["center"][] = "recordcontrols";
$layout->containers["message"] = array();
$layout->container_properties["message"] = array(  );
$layout->containers["message"][] = array("name"=>"message",
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "2";

$layout->blocks["center"][] = "message";
$layout->containers["form"] = array();
$layout->container_properties["form"] = array(  );
$layout->containers["form"][] = array("name"=>"chart",
	"block"=>"", "substyle"=>1  );

$layout->skins["form"] = "2";

$layout->blocks["center"][] = "form";
$layout->blocks["left"] = array();
$layout->containers["left"] = array();
$layout->container_properties["left"] = array(  );
$layout->containers["left"][] = array("name"=>"vmenu",
	"block"=>"menu_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"searchpanel",
	"block"=>"searchPanel", "substyle"=>1  );

$layout->skins["left"] = "menu";

$layout->blocks["left"][] = "left";
$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";

$layout->blocks["top"][] = "master";
$layout->containers["toplinks"] = array();
$layout->container_properties["toplinks"] = array(  );
$layout->containers["toplinks"][] = array("name"=>"loggedas",
	"block"=>"security_block", "substyle"=>1  );

$layout->skins["toplinks"] = "empty";

$layout->blocks["top"][] = "toplinks";
$layout->containers["hmenu"] = array();
$layout->container_properties["hmenu"] = array(  );
$layout->containers["hmenu"][] = array("name"=>"search",
	"block"=>"searchform_block", "substyle"=>1  );

$layout->containers["hmenu"][] = array("name"=>"search_buttons",
	"block"=>"searchformbuttons_block", "substyle"=>1  );

$layout->containers["hmenu"][] = array("name"=>"search_saving_buttons",
	"block"=>"searchsaving_block", "substyle"=>1  );

$layout->skins["hmenu"] = "undermenu";

$layout->blocks["top"][] = "hmenu";
$page_layouts["fuelmaster_Chart2_chart"] = $layout;

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


// add master layouts 


$mode = postvalue("mode");
if( $mode == "listdetails" )
	$pageMode = CHART_DETAILS;
elseif( $mode == "listdetailspopup" )
	$pageMode = CHART_POPUPDETAILS;
elseif( $mode == "dashchart" )
	$pageMode = CHART_DASHBOARD;
elseif( $mode == "dashdetails" )
	$pageMode = CHART_DASHDETAILS;
else
	$pageMode = CHART_SIMPLE;

$detailsMode = $pageMode != CHART_SIMPLE;

$xt = new Xtempl( $detailsMode );

$id = postvalue("id");
$id = $id ? $id : 1;

// set params for a RunnerPage constructor
$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["mode"] = $pageMode;
$params["tName"] = $strTableName;
$params["pageType"] = PAGE_CHART;
$params["masterTable"] = postvalue("mastertable");
$params["isGroupSecurity"] = $isGroupSecurity; // a global variable
$params["masterKeysReq"] = array();

if( $pageMode = CHART_DASHBOARD )
{
	$params["dashElementName"] = postvalue("dashelement");
	$params["dashTName"] = postvalue("table");
}

if( isset($_REQUEST["masterKeys"]) )
	$masterKeys = my_json_decode( $_REQUEST["masterKeys"] );
	
$i = 0;
while (true) 
{
	$i++;
	if (isset($_REQUEST["masterkey".$i]))
		$_masterKey = $_REQUEST["masterkey".$i];
	elseif (isset($masterKeys["masterkey".$i]))
		$_masterKey = $masterKeys["masterkey".$i];
	else
		break;
	$params["masterKeysReq"][$i] = $_masterKey;
}

$pageObject = new ChartPage($params);
$pageObject->init();

// Save search processing
if( postvalue("saveSearch") && postvalue("searchName") && !is_null($pageObject->searchLogger) ) 
{
	$searchName = postvalue("searchName");
	$searchParams = $pageObject->getSearchParamsForSaving();
	$pageObject->searchLogger->saveSearch( $searchName, $searchParams );
	
	$pageObject->searchClauseObj->savedSearchIsRun = true;
	$_SESSION[$pageObject->sessionPrefix.'_advsearch'] = serialize( $pageObject->searchClauseObj );
	
	echo my_json_encode( $searchParams );
	exit();
}
// Delete the saved search
if( postvalue("deleteSearch") && postvalue("searchName") && !is_null($pageObject->searchLogger) ) 
{
	$searchName = postvalue("searchName");
	$pageObject->searchLogger->deleteSearch( $searchName );
	echo my_json_encode( array() );
	exit();
}

$pageObject->process();

?>
