<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once('include/xtempl.php');
require_once('classes/loginpage.php');
add_nocache_headers();




$layout = new TLayout("login_bootstrap", "AvenueAvenue", "MobileAvenue");
$layout->version = 3;
	$layout->bootstrapTheme = "default";
		$layout->customCssPageName = "_login";
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
$layout->containers["header"][] = array("name"=>"loginheader",
	"block"=>"loginheader", "substyle"=>1  );

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
$layout->containers["fields"][] = array("name"=>"loginfields",
	"block"=>"", "substyle"=>1  );

$layout->skins["fields"] = "";


$layout->containers["body"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"header_2" );
$layout->containers["header_2"] = array();
$layout->container_properties["header_2"] = array(  );
$layout->containers["header_2"][] = array("name"=>"loginbuttons",
	"block"=>"loginbuttons", "substyle"=>1  );

$layout->skins["header_2"] = "";


$layout->skins["body"] = "";


$layout->skins["panel"] = "";


$layout->containers["page_1"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"register" );
$layout->containers["register"] = array();
$layout->container_properties["register"] = array(  );
$layout->containers["register"][] = array("name"=>"bsloginregister",
	"block"=>"", "substyle"=>1  );

$layout->skins["register"] = "";


$layout->skins["page_1"] = "";


$layout->skins["page"] = "";

$layout->blocks["top"][] = "page";
$page_layouts["login"] = $layout;




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