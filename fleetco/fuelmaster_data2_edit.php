<?php 

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("include/fuelmaster_data2_variables.php");
require_once('include/xtempl.php');
require_once('classes/editpage.php');
require_once("classes/searchclause.php");

add_nocache_headers();

if( !EditPage::processEditPageSecurity( $strTableName ) )
	return;

EditPage::handleBrokenRequest();

//	render all necessary layouts




$layout = new TLayout("edit_basic_2col_center", "AvenueAvenue", "MobileAvenue");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["all"] = array();
$layout->container_properties["all"] = array(  );
$layout->containers["all"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
$layout->container_properties["fields"] = array(  );
$layout->containers["fields"][] = array("name"=>"editheader", 
	"block"=>"editheader", "substyle"=>2  );

$layout->containers["fields"][] = array("name"=>"message", 
	"block"=>"message_block", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"editfields2", 
	"block"=>"", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"editbuttons", 
	"block"=>"editbuttons", "substyle"=>2  );

$layout->skins["fields"] = "fields";


$layout->skins["all"] = "empty";

$layout->blocks["top"][] = "all";
$page_layouts["fuelmaster_data2_edit"] = $layout;

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





// parse control parameters
$pageMode = EditPage::readEditModeFromRequest();

$xt = new Xtempl();	
	
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
$params["pageType"] = PAGE_EDIT;
$params["tName"] = $strTableName;
$params["action"] = postvalue("a");
$params["captchaValue"] = postvalue("value_captcha_" . $id);

//	locking parameters
$params["lockingAction"] = postvalue("action");
$params["lockingSid"] = postvalue("sid");
$params["lockingKeys"] = postvalue("keys");
$params["lockingStart"] = postvalue("startEdit");

if( $pageMode == EDIT_INLINE )
{
	$params["screenWidth"] = postvalue("screenWidth");
	$params["screenHeight"] = postvalue("screenHeight");
	$params["orientation"] = postvalue("orientation");
}	

if( $pageMode == EDIT_DASHBOARD ) 
{
	$params["dashElementName"] = postvalue("dashelement");
	$params["dashTName"] = postvalue("table");
	
	if(	postvalue("mapRefresh") )
	{
		$params["mapRefresh"] = true;
		$params["vpCoordinates"] = my_json_decode( postvalue("vpCoordinates") );
	}	
}

if(( $pageMode == EDIT_POPUP || $pageMode == EDIT_INLINE ) && postvalue("dashTName"))
{
	$params["dashTName"] = postvalue("dashTName");
	$params["dashElementName"] = postvalue("dashelement");
}

$pageObject = new EditPage($params);
if( $pageObject->isLockingRequest() )
{
	$pageObject->doLockingAction();
	exit();
}
$pageObject->init();


$pageObject->process();

?>