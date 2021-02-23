<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once('classes/remindpwdpage.php');
require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));





$layout = new TLayout("remind_bootstrap", "AvenueAvenue", "MobileAvenue");
$layout->version = 3;
	$layout->bootstrapTheme = "default";
		$layout->customCssPageName = "_remind";
$layout->blocks["top"] = array();
$layout->containers["page"] = array();
$layout->container_properties["page"] = array(  );
$layout->containers["page"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"page_1" );
$layout->containers["page_1"] = array();
$layout->container_properties["page_1"] = array(  );
$layout->containers["page_1"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"panel" );
$layout->containers["panel"] = array();
$layout->container_properties["panel"] = array(  );
$layout->containers["panel"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"header" );
$layout->containers["header"] = array();
$layout->container_properties["header"] = array(  );
$layout->containers["header"][] = array("name"=>"remindheader",
	"block"=>"remindheader", "substyle"=>1  );

$layout->skins["header"] = "";


$layout->containers["panel"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"body" );
$layout->containers["body"] = array();
$layout->container_properties["body"] = array(  );
$layout->containers["body"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"header_1" );
$layout->containers["header_1"] = array();
$layout->container_properties["header_1"] = array(  );
$layout->containers["header_1"][] = array("name"=>"message",
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["header_1"] = "";


$layout->containers["body"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
$layout->container_properties["fields"] = array(  );
$layout->containers["fields"][] = array("name"=>"remindfields",
	"block"=>"", "substyle"=>1  );

$layout->skins["fields"] = "";


$layout->containers["body"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"header_2" );
$layout->containers["header_2"] = array();
$layout->container_properties["header_2"] = array(  );
$layout->containers["header_2"][] = array("name"=>"remindbuttons",
	"block"=>"remindbuttons", "substyle"=>1  );

$layout->skins["header_2"] = "";


$layout->skins["body"] = "";


$layout->skins["panel"] = "";


$layout->skins["page_1"] = "";


$layout->skins["page"] = "";

$layout->blocks["top"][] = "page";
$page_layouts["remind"] = $layout;







$layout = new TLayout("remind_success_bootstrap", "AvenueAvenue", "MobileAvenue");
$layout->version = 3;
	$layout->bootstrapTheme = "default";
		$layout->customCssPageName = "_remind_success";
$layout->blocks["top"] = array();
$layout->containers["page"] = array();
$layout->container_properties["page"] = array(  );
$layout->containers["page"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"page_1" );
$layout->containers["page_1"] = array();
$layout->container_properties["page_1"] = array(  );
$layout->containers["page_1"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"panel" );
$layout->containers["panel"] = array();
$layout->container_properties["panel"] = array(  );
$layout->containers["panel"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"header" );
$layout->containers["header"] = array();
$layout->container_properties["header"] = array(  );
$layout->containers["header"][] = array("name"=>"remindheader",
	"block"=>"remindheader", "substyle"=>1  );

$layout->skins["header"] = "";


$layout->containers["panel"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"body" );
$layout->containers["body"] = array();
$layout->container_properties["body"] = array(  );
$layout->containers["body"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
$layout->container_properties["fields"] = array(  );
$layout->containers["fields"][] = array("name"=>"weresent_message",
	"block"=>"", "substyle"=>1  );

$layout->skins["fields"] = "";


$layout->containers["body"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"header_1" );
$layout->containers["header_1"] = array();
$layout->container_properties["header_1"] = array(  );
$layout->containers["header_1"][] = array("name"=>"remindsucbuttons",
	"block"=>"", "substyle"=>1  );

$layout->skins["header_1"] = "";


$layout->skins["body"] = "";


$layout->skins["panel"] = "";


$layout->skins["page_1"] = "";


$layout->skins["page"] = "";

$layout->blocks["top"][] = "page";
$page_layouts["remind_success"] = $layout;




$xt = new Xtempl();

$id = postvalue("id");
$id = $id ? $id : 1;


$params = array();
$params["id"] = $id;
$params['xt'] = &$xt;
$params["pageType"] = PAGE_REMIND;
$params["tName"]= NOT_TABLE_BASED_TNAME;
$params["templatefile"] = "remind.htm";
$params["needSearchClauseObj"] = false;
$params["captchaValue"] = postvalue("value_captcha_" . $id);
$params["userEmail"] = postvalue("username_email");
$params["action"] = postvalue("btnSubmit");
$params["mode"] = RemindPasswordPage::readRemindModeFromRequest();

$pageObject = new RemindPasswordPage( $params );
$pageObject->init();

$pageObject->process();

?>
