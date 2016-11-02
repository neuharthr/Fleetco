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

$onFly = postvalue("onFly");

//array of params for classes
$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["pageType"] = PAGE_LOGIN;
$params["tName"]= NOT_TABLE_BASED_TNAME;
$params["templatefile"] = "login.htm";
$params["needSearchClauseObj"] = false;
$params["captchaValue"] = postvalue("value_captcha_" . $id);
$params["notRedirect"] = postvalue("notRedirect");
$params["flyMode"] = $onFly;
$params["rememberPassword"] = postvalue("remember_password");
 
$pageObject = new LoginPage( $params ); 
$pageObject->init();

$adSubmit = false;
if (!isset($pUsername))
{
	$pUsername = postvalue("username");
	$pPassword = postvalue("password");
}


//	Before Process event
if($globalEvents->exists("BeforeProcessLogin"))
	$globalEvents->BeforeProcessLogin( $pageObject );


$myurl = @$_SESSION["MyURL"];
//	clear saved URL if not received  return=true
if( postvalue("return") != "true" && @$_POST["btnSubmit"] != "Login" && !$adSubmit )
	$myurl = "";

unset($_SESSION["MyURL"]);

if(postvalue("a")=="logout")
{
	$pageObject->Logout(true);
}


$message = postvalue("cmessage");
$is508 = isEnableSection508();

$logacc = true;
if($pageObject->auditObj)
{
	if($pageObject->auditObj->LoginAccess())
	{
		$logacc = false;
		$message = mysprintf( "Access denied for %s minutes", array($pageObject->auditObj->LoginAccess()) );
	}
}

if ((@$_POST["btnSubmit"] == "Login" || $adSubmit) && $logacc)
{
	$pageObject->setCredentialsCookie( $pUsername, $pPassword );

	$retval = true;
	$message = "";

	//run before login event
	if($globalEvents->exists("BeforeLogin"))
		$retval = $globalEvents->BeforeLogin($pUsername,$pPassword,$message, $pageObject);

	if ($retval)
	{
		$d = $pageObject->LogIn($pUsername, $pPassword);
		if ($d) 
		{
			//login succeccful
			//run AfterSuccessfulLogin event
			// if login method is not AD then ASL event fires in SetAuthSessionData
				if ($onFly == 2) 
			{
				if($myurl) 
				{
					$myurl .= strpos($myurl, '?') !== FALSE ?  '&a=login' : '?a=login';
					$ajaxmessage = $myurl;
				} 
				else
					$ajaxmessage = GetTableLink("menu");
			} 
			else 
			{
				if($myurl)
					header("Location: ".$myurl);
				else
					HeaderRedirect("menu");
	
				return;
			}
		}
		else
		{
			//invalide login
			if($globalEvents->exists("AfterUnsuccessfulLogin"))
				$globalEvents->AfterUnsuccessfulLogin($pUsername, $pPassword, $message, $pageObject);
			
			if ($pageObject->message!="")
				$message = $pageObject->message;
			
			if($message=="")
				$message = "Invalid Login";
		}
	}
	else 
	{
		//invalide login
		if($globalEvents->exists("AfterUnsuccessfulLogin"))
			$globalEvents->AfterUnsuccessfulLogin($pUsername, $pPassword, $message, $pageObject);
		
		if ($pageObject->message!="")
			$message = $pageObject->message;
		
		if($message=="")
			$message = "Invalid Login";
	}
}




	
$_SESSION["MyURL"] = $myurl;

if( $myurl && $_SESSION["MyUrlAccess"] )
	$xt->assign("guestlink_attrs", "href=\"".$myurl."\"");
else
	$xt->assign("guestlink_attrs", "href=\"".GetTableLink("menu")."\"");
	
if(postvalue("username"))
	$xt->assign("username_attrs",($is508==true ? "id=\"username\" " : "")."value=\"".runner_htmlspecialchars($pUsername)."\"");
else
	$xt->assign("username_attrs",($is508==true ? "id=\"username\" " : "")."value=\"".runner_htmlspecialchars(refine(@$_COOKIE["username"]))."\"");

if(postvalue("password"))
	$xt->assign("password_attrs", ($is508==true ? " id=\"password\"": "")." value=\"".runner_htmlspecialchars($pPassword)."\"");
else
	$xt->assign("password_attrs", ($is508==true ? " id=\"password\"": "")." value=\"".runner_htmlspecialchars(refine(@$_COOKIE["password"]))."\"");

	
if(@$_GET["message"] == "expired")
	$message = "Your session has expired." . "Please login again.";
	
if(@$_GET["message"] == "invalidlogin")
	$message = "Invalid Login";
	
if($message) 
{
	$xt->assign("message_block", true);
	$xt->assign("message", "<div class='message rnr-error'>".$message."</div>");
}


if( ( $onFly == "" or $onFly == 1 ) && $pageObject->captchaExists() )
{
	$pageObject->displayCaptcha();
}

$pageObject->addCommonJs();
$pageObject->addButtonHandlers();

$pageObject->fillSetCntrlMaps();

$pageObject->doCommonAssignments();

$pageObject->showPage( $message, $ajaxmessage, $logged );
?>