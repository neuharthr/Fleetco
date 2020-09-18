<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("include/inventorymaster1_variables.php");
require_once('include/xtempl.php');
require_once('classes/viewpage.php');
require_once("classes/searchclause.php");

add_nocache_headers();

if( !ViewPage::processEditPageSecurity( $strTableName ) )
	return;	




$layout = new TLayout("view_basic_2col_center", "AvenueAvenue", "MobileAvenue");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["all"] = array();
$layout->container_properties["all"] = array(  );
$layout->containers["all"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"view" );
$layout->containers["view"] = array();
$layout->container_properties["view"] = array(  );
$layout->containers["view"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"pdf" );
$layout->containers["pdf"] = array();
$layout->container_properties["pdf"] = array(  );
$layout->containers["pdf"][] = array("name"=>"viewpdf",
	"block"=>"", "substyle"=>1  );

$layout->skins["pdf"] = "empty";


$layout->containers["view"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
$layout->container_properties["fields"] = array(  );
$layout->containers["fields"][] = array("name"=>"viewheader",
	"block"=>"viewheader", "substyle"=>2  );

$layout->containers["fields"][] = array("name"=>"viewfields2",
	"block"=>"", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"viewbuttons",
	"block"=>"viewbuttons", "substyle"=>2  );

$layout->skins["fields"] = "fields";


$layout->skins["view"] = "empty";


$layout->skins["all"] = "empty";

$layout->blocks["top"][] = "all";
$page_layouts["inventorymaster1_view"] = $layout;

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




$pageMode = ViewPage::readViewModeFromRequest();

$xt = new Xtempl();

//Set page id
$id = postvalue("id");
$id = intval($id) == 0 ? 1 : $id;

// $keys could not be set properly if editid params were no passed
$keys = array();
$keys["Id"] = postvalue("editid1");

//array of params for classes
$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["keys"] = $keys;
$params["mode"] = $pageMode;
$params["pageType"] = PAGE_VIEW;
$params["tName"] = $strTableName;
$params["pdfMode"] = postvalue("pdf") !== "";
$params["viewPdfEnabled"] = true;

if( $pageMode == VIEW_DASHBOARD ) 
{
	$params["dashElementName"] = postvalue("dashelement");
	$params["dashTName"] = postvalue("table");
	if(	postvalue("mapRefresh") )
	{
		$params["mapRefresh"] = true;
		$params["vpCoordinates"] = my_json_decode( postvalue("vpCoordinates") );
	}		
} 
if( $pageMode == VIEW_POPUP )
{
	$params["dashElementName"] = postvalue("dashelement");
	$params["dashTName"] = postvalue("dashTName");
}

$pageObject = new ViewPage($params);
$pageObject->init();

$pageObject->process();

?>