<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once('include/xtempl.php');
require_once('classes/loginpage.php');
add_nocache_headers();




$layout = new TLayout("login", "AvenueAvenue", "MobileAvenue");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["fields"] = array();
$layout->container_properties["fields"] = array(  );
$layout->containers["fields"][] = array("name"=>"loginheader",
	"block"=>"loginheader", "substyle"=>2  );

$layout->containers["fields"][] = array("name"=>"message",
	"block"=>"message_block", "substyle"=>3  );

$layout->containers["fields"][] = array("name"=>"loginfields",
	"block"=>"", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"mesguest",
	"block"=>"guestlink_block", "substyle"=>3  );

$layout->containers["fields"][] = array("name"=>"mesforgot",
	"block"=>"", "substyle"=>3  );

$layout->containers["fields"][] = array("name"=>"loginbuttons",
	"block"=>"loginbuttons", "substyle"=>2  );

$layout->skins["fields"] = "fields";

$layout->blocks["top"][] = "fields";
$page_layouts["login"] = $layout;

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
$id = $id ? $id : 1;

//an array of LoginPage constructor's params
$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["pageType"] = PAGE_LOGIN;
$params["tName"]= NOT_TABLE_BASED_TNAME;
$params["templatefile"] = "login.htm";
$params["needSearchClauseObj"] = false;
$params["captchaValue"] = postvalue("value_captcha_" . $id);
$params["notRedirect"] = postvalue("notRedirect");

$params["rememberPassword"] = postvalue("remember_password");
 
$params["mode"] = LoginPage::readLoginModeFromRequest(); 
$params["action"] = LoginPage::readActionFromRequest();
 
$params["message"] = postvalue("message"); 
$params["var_pUsername"] = postvalue("username");
$params["var_pPassword"] = postvalue("password");
$params["var_return"] = postvalue("return");
 
 
$pageObject = new LoginPage( $params ); 
$pageObject->init();

$pageObject->process();
?>