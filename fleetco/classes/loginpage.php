<?php
require_once(getabspath("classes/cipherer.php"));
/**
 * Class for login page 
 *
 */
class LoginPage extends RunnerPage 
{
	public $auditObj = null;
		
	public $fromFacebook = false;
	
	public $notRedirect = false;
		
	public $rememberPassword = 0;
		
	public $var_pUsername = "";	
	public $var_pPassword = "";	
	public $action = "";
	public $var_return = "";
	
	protected $myurl = "";
	
	public $fb_state;
	public $fb_code;
	public $fb_error_reason;
	public $fb_error_code;
	
	
	/**
	 * @constructor
	 */
	function __construct(&$params) 
	{
		// call parent constructor
		parent::__construct($params);
		
		$this->pSet = new ProjectSettings("carrierusers", $this->pageType);
		$this->pSetEdit = $this->pSet;
		$this->pSetSearch = new ProjectSettings($this->tName, PAGE_SEARCH); 
		$this->auditObj = GetAuditObject();
		$this->formBricks["header"] = "loginheader";
		$this->formBricks["footer"] = "loginbuttons";
		$this->assignFormFooterAndHeaderBricks( true );
	}		
	
	/**
	 * Set the 'connection' property
	 */
	protected function setTableConnection()
	{
		global $cman;
		$this->connection = $cman->getForLogin();		
	}	

	/**
	 * Set the 'cipherer' property
	 */
	protected function assignCipherer()
	{
		$this->cipherer = RunnerCipherer::getForLogin();
	}
	
	/**
	 *
	 */
	public function setSessionVariables()
	{
		parent::setSessionVariables();	
		$_SESSION["fromFacebook"] = false;
	}
	
	/** 
	 *
	 */
	public function process()
	{
		global $globalEvents;
		
		if( $globalEvents->exists("BeforeProcessLogin") )
			$globalEvents->BeforeProcessLogin( $this );
			
		$this->initCredentials();
			
		$this->initMyURL();
		unset( $_SESSION["MyURL"] );

		if( $this->action == "logout" )
		{
			$this->Logout( true );
			return;
		}	
			
		$this->refineMessage();

		if( $this->isLoginAccessAllowed() && $this->isActionSubmit() )
		{
			$this->setCredentialsCookie( $this->var_pUsername, $this->var_pPassword );

			if( $this->callBeforeLoginEvent() )
			{
				$logged = $this->LogIn( $this->var_pUsername, $this->var_pPassword );
				
				if( $logged )
					$this->callAfterSuccessfulLoginEvent();
				else
					$this->callAfterUnsuccessfulLoginEvent();
					
				if( $logged && $this->mode == LOGIN_SIMPLE )
				{
					$this->redirectAfterSuccessfulLogin();
					return;
				}				
				
				if( $this->mode == LOGIN_POPUP || $this->mode == LOGIN_EMBEDED ) 
				{		
					$this->reportLogStatus( $logged );
					return;
				}
			}
		}			
		
		$_SESSION["MyURL"] = $this->myurl;
		
			
		if( $this->mode != LOGIN_EMBEDED && $this->captchaExists() ) 
			$this->displayCaptcha();

		$this->addCommonJs();
		$this->addButtonHandlers();

		$this->fillSetCntrlMaps();
		$this->doCommonAssignments();

		$this->showPage();
	}
	
	/**
	 * @return Boolean
	 */
	protected function isActionSubmit()
	{
		return $this->action == "Login";
	}
	
	/**
	 *
	 */
	protected function initCredentials()
	{
		//dummy
	}
	
	/**
	 *
	 */
	protected function refineMessage()
	{
		if( $this->message == "expired" )
			$this->message = mlang_message("SESSION_EXPIRED1") . mlang_message("SESSION_EXPIRED2");
		elseif( $this->message == "invalidlogin" )
			$this->message = mlang_message("INVALID_LOGIN");	
		if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
		{
			$this->xt->assign("message_class", "alert-danger" );
		} 
			
	}
	
	/**
	 *
	 */
	protected function initMyURL()
	{
		$this->myurl = @$_SESSION["MyURL"];
		//	clear saved URL if not received return=true
		if( $this->var_return != "true" && !$this->isActionSubmit() )
			$this->myurl = "";	
	}
	
	/**
	 * run AfterSuccessfulLogin event
	 */
	protected function callAfterSuccessfulLoginEvent()
	{
		//login succeccful
		// dummy
		// if login method is not AD then ASL event fires in SetAuthSessionData
	}
	
	/**
	 *
	 */
	protected function redirectAfterSuccessfulLogin()
	{
		if( $this->myurl )
			header("Location: ".$this->myurl);
		else
			HeaderRedirect("menu");
	}
	
	/**
	 * Run AfterUnsuccessfulLogin event
	 */
	protected function callAfterUnsuccessfulLoginEvent()
	{
		global $globalEvents;
		
		$message = "";
		
		//invalide login
		if( $globalEvents->exists("AfterUnsuccessfulLogin") )
			$globalEvents->AfterUnsuccessfulLogin( $this->var_pUsername, $this->var_pPassword, $message, $this );
		
		if( $message == "" && !$this->message )
			$this->message = mlang_message("INVALID_LOGIN");
		else if( $message ) 
			$this->message = $message;

		if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
		{
			$this->xt->assign("message_class", "alert-danger" );
		} 
		
	}
	
	
	/**
	 * @param Boolean logged
	 */
	protected function reportLogStatus( $logged )
	{
		$returnJSON = array();
		if ($this->message)
		{
			$returnJSON['message'] = $this->message;
		}
		elseif ($logged)
		{
			if( $this->myurl ) 
			{
				$this->myurl.= strpos($myurl, '?') !== FALSE ? '&a=login' : '?a=login';
				$returnJSON['redirect'] = $this->myurl;
			} 
			else
				$returnJSON['redirect'] = GetTableLink("menu");			
		}

		//$_SESSION["MyURL"] = $this->myurl; ?
		
		echo printJSON($returnJSON);
		exit();	
	}
	
	
	/**
	 * @return Boolean
	 */
	protected function isLoginAccessAllowed()
	{
		if( !$this->auditObj )
			return true;
			
		if( !$this->auditObj->LoginAccess() )
			return true;
			
		$this->message = mysprintf( mlang_message("LOGIN_BLOCKED"), array($this->auditObj->LoginAccess()) );
		return true;
	}
	
	/**
	 * run before login event
	 * @return Boolean
	 */
	protected function callBeforeLoginEvent()
	{
		global $globalEvents;
		
		if( !$globalEvents->exists("BeforeLogin") )	
			return true;
			
		$message = "";
		$ret = $globalEvents->BeforeLogin( $this->var_pUsername, $this->var_pPassword, $message, $this );

		if( $message )
			$this->message = $message;
		
		if( !$ret )
		{
			$this->callAfterUnsuccessfulLoginEvent();
		}
		
		return $ret;
	}
	
	/**
	 * Login method
	 * @param String pUsername
	 * @param String pPassword
	 * @return Boolean
	 */
	function LogIn( $pUsername, $pPassword )
	{
		if( !$this->checkCaptcha() )
			return false;

		// username and password are stored in the database
		global $cUserNameFieldType, $cPasswordFieldType, $cUserNameField, $cPasswordField, $cDisplayNameField;
		
		$logged = false;
		$strUsername = (string)$pUsername;
		$strPassword = (string)$pPassword;
		
		$loginSet = ProjectSettings::getForLogin();
		$cipherer = RunnerCipherer::getForLogin( $loginSet );			
	
		$sUsername = $strUsername;
		$sPassword = $strPassword;
		
		if( $cipherer->isFieldEncrypted($cUserNameField) )
			$strUsername = $cipherer->MakeDBValue($cUserNameField, $strUsername, "", true);
		else
		{
			if( NeedQuotes($cUserNameFieldType) )
				$strUsername = $this->connection->prepareString( $strUsername );
			else
				$strUsername = 0 + $strUsername;
		}
		
		if( $cipherer->isFieldEncrypted($cPasswordField) )
			$strPassword = $cipherer->MakeDBValue($cPasswordField, $strPassword, "", true);		
		else
		{
			if( NeedQuotes($cPasswordFieldType) )
				$strPassword = $this->connection->prepareString( $strPassword );
			else
				$strPassword = 0 + $strPassword;
		}

		if( $loginSet )
		{
			if( !$this->pSet->isCaseInsensitiveUsername() ) 
			{
				$where = $this->getFieldSQLDecrypt($cUserNameField) . 
					"=".$strUsername." and ".$this->getFieldSQLDecrypt($cPasswordField)."=".$strPassword;
 			} 
			else 
			{
				$where = $this->connection->upper( $this->getFieldSQLDecrypt($cUserNameField) ).
					"=".$this->pSet->getCaseSensitiveUsername($strUsername)." and ".$this->getFieldSQLDecrypt($cPasswordField).
					"=".$strPassword;
			}		 
			$tempSQLQuery = $loginSet->GetTableData(".sqlquery");
			$tempSQLQuery->addWhere( $where );
				$strSQL = $tempSQLQuery->toSql();		 
		}
		else
		{
			$strSQL = "select * from ".$this->connection->addTableWrappers("carrierusers")
				." where ".$this->connection->addFieldWrappers($cUserNameField)."=".$strUsername
				." and ".$this->connection->addFieldWrappers($cPasswordField)."=".$strPassword;
			}
		
	 	$data = $cipherer->DecryptFetchedArray( $this->connection->query( $strSQL )->fetchAssoc() );
		if( $data )
		{
			if( $this->pSet->getCaseSensitiveUsername( @$data[ $cUserNameField ]) == $this->pSet->getCaseSensitiveUsername($sUsername) && @$data[ $cPasswordField ] == $sPassword )
			{
				$logged = true;
				$pDisplayUsername = $data[ $cDisplayNameField ] != '' ? $data[ $cDisplayNameField ] : $sUsername;
			}
		}

		if( $logged )
		{
			DoLogin(false, $pUsername, $pDisplayUsername, "", ACCESS_LEVEL_USER, $pPassword, $this);
			SetAuthSessionData($pUsername, $data, $this->fromFacebook, $pPassword, $this);
			return true;
		}

		if( $this->auditObj )
		{
			$this->auditObj->LogLoginFailed($pUsername);
			$this->auditObj->LoginUnsuccessful($pUsername);
		}
		return false;		
	}
	
	/**
	 * Logout
	 * @param Boolean redirectToLogin
	 */
	function Logout($redirectToLogin = false) 
	{
		if( $this->auditObj )
			$this->auditObj->LogLogout();
			
		Security::clearSecuritySession();

		
		// redirect to login page and show message
		if ($redirectToLogin) 
		{
			header("Location: ".GetTableLink("login"));
			exit();
		}
	}
	
	/**
	 * @param String url
	 */
	function LogoutAndRedirect($url = "") 
	{
		$this->Logout();
		
		if ($url == "") 
			$url = GetTableLink("menu");
		
		header("Location: ".$url);
		exit();
	}
	

	/**
	 * Check is captcha exists on current page
	 * @intellisense
	 */	
	function captchaExists()
	{
		$captchaSettings = GetGlobalData("CaptchaSettings", false);
		return $captchaSettings["isEnabledOnLogin"];
	}

	/**
	 * @return String
	 */
	function getCaptchaId() 
	{
		return "login";
	}

	/**
	 * @param String messageText
	 */
	public function setDatabaseError( $messageText )
	{
		$this->message = $messageText;
	}
	
	/**
	 *
	 */
	public function setCredentialsCookie($pUsername, $pPassword)
	{
		setcookie("username", $this->rememberPassword ? $pUsername : "", time() + 365*1440*60);
		setcookie("password", $this->rememberPassword ? $pPassword : "", time() + 365*1440*60);
	}
	
	/**
	 *
	 */
	public function setLangParams()
	{
		if( $this->mode == LOGIN_SIMPLE )
			SetLangVars($this->xt, "login");
	}
	
	/**
	 *
	 */
	protected function assignBody()
	{
		$this->body["begin"] .= GetBaseScriptsForPage(false);
		$this->body["begin"] .= "<form method=\"post\" action='".GetTableLink("login")."' id=\"form".$this->id."\" name=\"form".$this->id."\">
								<input type=\"hidden\" name=\"btnSubmit\" value=\"Login\">";	
		
		$this->body["end"] .= "</form>";
		$this->body['end'] .= '<script>';
		$this->body['end'] .= "window.controlsMap = ".my_json_encode($this->controlsHTMLMap).";";
		$this->body['end'] .= "window.viewControlsMap = ".my_json_encode($this->viewControlsHTMLMap).";";
		$this->body['end'] .= "window.settings = ".my_json_encode($this->jsSettings).";</script>";
				$this->body["end"] .= "<script type=\"text/javascript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js")."\"></script>";
		$this->body["end"] .= '<script>'.$this->PrepareJS()."</script>";
		
		$this->xt->assignbyref("body", $this->body);
	}
	
	/**
	 *
	 */
	public function doCommonAssignments()
	{
		$this->xt->assign("id", $this->id);
		$this->xt->assign("loginlink_attrs", 'id="submitLogin'.$this->id.'"');
		
		if( $this->mode == LOGIN_SIMPLE )
			$this->assignBody();
			
		$this->setLangParams();

		$rememberbox_checked = "";
		if( $rememberPassword || @$_COOKIE["username"] || @$_COOKIE["password"] )
			$rememberbox_checked = " checked";	
			
		$this->xt->assign("rememberbox_attrs", ($this->is508 ? "id=\"remember_password\" " : "")
			."name=\"remember_password\" value=\"1\"".$rememberbox_checked);		
		
		$this->xt->assign( "guestlink_block", $this->mode == LOGIN_SIMPLE && guestHasPermissions() && isGuestLoginAvailable() );
		
		$this->xt->assign("username_label", true);
		$this->xt->assign("password_label", true);
		$this->xt->assign("remember_password_label", true);
		if( $this->is508 && $this->getLayoutVersion() != BOOTSTRAP_LAYOUT )
		{
			$this->xt->assign_section("username_label", "<label for=\"username\">", "</label>");
			$this->xt->assign_section("password_label", "<label for=\"password\">", "</label>");
			$this->xt->assign_section("remember_password_label", "<label for=\"remember_password\">", "</label>");
		}

		if( $this->message || $this->mode == LOGIN_POPUP ) 
		{
			$this->xt->assign("message_block", true);
			if ( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
			{
				$this->xt->assign("message", $this->message);
			}
			else
			{
				$this->xt->assign("message", "<div id='login_message' class='message rnr-error'>".$this->message."</div>");
			}
		}
		
		if( strlen( $this->var_pUsername ) )
			$this->xt->assign("username_attrs",($this->is508? "id=\"username\" " : "")."value=\"".runner_htmlspecialchars($this->var_pUsername)."\"");
		else
			$this->xt->assign("username_attrs",($this->is508 ? "id=\"username\" " : "")
				."value=\"".runner_htmlspecialchars(refine(@$_COOKIE["username"]))."\"");

		if( strlen( $this->var_pPassword ) )
			$this->xt->assign("password_attrs", ($this->is508 ? " id=\"password\"": "")." value=\"".runner_htmlspecialchars($this->var_pPassword)."\"");
		else
			$this->xt->assign("password_attrs", ($this->is508 ? " id=\"password\"": "")
				." value=\"".runner_htmlspecialchars(refine(@$_COOKIE["password"]))."\"");		
	
		if( $this->myurl && $_SESSION["MyUrlAccess"] )
			$this->xt->assign("guestlink_attrs", "href=\"".$this->myurl."\"");
		else
			$this->xt->assign("guestlink_attrs", "href=\"".GetTableLink("menu")."\"");
	}
	
	/**
	 * Show the page
	 */
	public function showPage()
	{	
		global $globalEvents, $cLoginTable;

		if( $globalEvents->exists("BeforeShowLogin") )
			$globalEvents->BeforeShowLogin($this->xt, $this->templatefile, $this);		

		// load popup login page
		if( $this->mode == LOGIN_POPUP )
		{
			if( $this->notRedirect ) 
			{
				$this->body["begin"] .= "<input type=hidden id='notRedirect' value=1>";
				$this->xt->assign("continuebutton_attrs", 'href="#" style="display:none" id="continueButton"');
				$this->xt->assign("continue_button", true);
			}
			
			if( !$message )		
				$this->xt->displayBrickHidden("message");
			
			$this->xt->assign("footer", false);
			$this->xt->assign("header", false);
			$this->xt->assign("body", $this->body);	

			$this->xt->assign("registerlink_attrs", 'name="RegisterPage" data-table="'.runner_htmlspecialchars($cLoginTable).'"');
			$this->xt->assign("forgotpasswordlink_attrs", 'name="ForgotPasswordPage"');

			$this->displayAJAX( $this->templatefile, $this->id + 1 );
			exit();
		}

		$this->display( $this->templatefile );
	}
	
	/**
	 * @return Number
	 */
	public static function readLoginModeFromRequest()
	{
		$pageMode = postvalue("mode");
		
		if( $pageMode == "popup" )
			return LOGIN_POPUP;
			
		if( $pageMode == "embeded" )
			return LOGIN_EMBEDED;
			
		return LOGIN_SIMPLE;
	}
	
	/**
	 * @return String
	 */
	public static function readActionFromRequest()
	{
		$action = postvalue("a");
		
		if( $action )
			return $action;
			
		return @$_POST["btnSubmit"];	
	}
}
?>