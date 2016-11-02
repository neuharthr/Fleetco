<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/admin_members_variables.php");

if( !Security::processAdminPageSecurity( false ) )
	return;




$layout = new TLayout("ug_members", "AvenueAvenue", "MobileAvenue");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->containers["ugcontrols"] = array();
$layout->container_properties["ugcontrols"] = array(  );
$layout->containers["ugcontrols"][] = array("name"=>"ugbuttons",
	"block"=>"savebuttons_block", "substyle"=>1  );

$layout->containers["ugcontrols"][] = array("name"=>"ugmembersbuttons",
	"block"=>"savebuttons_block", "substyle"=>1  );

$layout->skins["ugcontrols"] = "1";

$layout->blocks["center"][] = "ugcontrols";
$layout->containers["message"] = array();
$layout->container_properties["message"] = array(  );
$layout->containers["message"][] = array("name"=>"message",
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "1";

$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();
$layout->container_properties["grid"] = array(  );
$layout->containers["grid"][] = array("name"=>"ugmemgrid",
	"block"=>"grid_block", "substyle"=>1  );

$layout->skins["grid"] = "grid";

$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();
$layout->container_properties["pagination"] = array(  );
$layout->containers["pagination"][] = array("name"=>"pagination",
	"block"=>"pagination_block", "substyle"=>1  );

$layout->skins["pagination"] = "2";

$layout->blocks["center"][] = "pagination";
$layout->blocks["left"] = array();
$layout->containers["left"] = array();
$layout->container_properties["left"] = array(  );
$layout->containers["left"][] = array("name"=>"loggedas",
	"block"=>"security_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"vmenu",
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["left"] = "menu";

$layout->blocks["left"][] = "left";
$page_layouts["admin_members_list"] = $layout;

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
require_once("classes/searchclause.php");

require_once("classes/searchcontrol.php");
require_once("classes/panelsearchcontrol.php");

require_once("classes/searchpanel.php");
require_once("classes/searchpanelsimple.php");	

require_once('classes/listpage.php');
require_once('classes/listpage_simple.php');
require_once('classes/memberspage.php');
$xt = new Xtempl();


$options = array();
//array of params for classes
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = MEMBERS_PAGE;
$options['xt'] = &$xt;

$pageObject = ListPage::createListPage($strTableName, $options);
if( postvalue("a") == "saveMembers" )
{
	$modifiedMembers = my_json_decode(postvalue('values'));
	$pageObject->saveMembers($modifiedMembers);
	return;
}

 // add button events if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();
?>