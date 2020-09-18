<?php
class RemindPasswordPage extends RunnerPage
{
	public $action = "";
	public $userEmail = "";
	
	protected $reminded = false;
	
	protected $passwordFiled;
	protected $usernameFiled;
	protected $emailField;
	
	
	function __construct(&$params)
	{
		parent::__construct($params);
		$this->pSet = new ProjectSettings("carrierusers", $this->pageType);
		$this->pSetEdit = $this->pSet;

		$this->passwordFiled = GetPasswordField();
		$this->usernameFiled = GetUserNameField();		
		$this->emailField = "email";
		
		$this->formBricks["header"] = "remindheader";
		$this->formBricks["footer"] = "remindbuttons";
		$this->assignFormFooterAndHeaderBricks( true );	
	}

	/**
	 * Set the connection property
	 */
	protected function setTableConnection()
	{
		global $cman;
		$this->connection = $cman->getForLogin();		
	}
	
	protected function assignCipherer()
	{
		$this->cipherer = RunnerCipherer::getForLogin();
	}
	
	/**
	 * Check is captcha exists on current page
	 *
	 * @intellisense
	 */	
	function captchaExists()
	{
		$captchaSettings = GetGlobalData("CaptchaSettings", false);
		return $captchaSettings["isEnabledOnRemind"];
	}

	function getCaptchaId() 
	{
		return "remind";
	}

	/**
	 *
	 */
	public function process()
	{
		global $globalEvents;
		
		//	Before Process event
		if( $globalEvents->exists("BeforeProcessRemind") )
			$globalEvents->BeforeProcessRemind( $this );	

		if ( $this->action == "Remind" )
		{	
			$this->reminded = $this->remindPassword();
			
			if( !$this->reminded && $this->mode == REMIND_POPUP ) 
			{
				$returnJSON = array();
				$returnJSON['message'] = $this->message;
				
				echo printJSON( $returnJSON );
				exit();
			}
		}

		if( $this->captchaExists() )
			$this->displayCaptcha();

		$this->addCommonJs();
		$this->fillSetCntrlMaps();
		$this->addButtonHandlers();
	
		$this->doCommonAssignments();
		
		$this->showPage();
	}

	/**
	 * @return Boolean
	 */
	protected function remindPassword()
	{		
		global $globalEvents;
		
		if( !$this->checkCaptcha() )
		{
			$this->message = mlang_message("SEC_INVALID_CAPTCHA_CODE");
			return false;
		}
						
		$strSQLData = $this->getUserSearchingSQLData();
		$data = $this->cipherer->DecryptFetchedArray( $this->connection->query( $strSQLData["sql"] )->fetchAssoc() );
		if( $data )
		{
			$username = $data[ $this->usernameFiled ];
			$email = $data[ $this->emailField ];
			$password = $data[ $this->passwordFiled ];
		}
	
		$tosearch = strlen( $this->userEmail ) > 0;
	
		if( $tosearch && $globalEvents->exists("BeforeRemindPassword") )
			$tosearch = $globalEvents->BeforeRemindPassword( $username, $email, $this );
		
		if( !$tosearch || !$data )
		{
			$this->message = mlang_message("USER_NOREG1")." ".$this->userEmail." ".mlang_message("USER_NOREG2");
			return false;
		}
		

	
		$reminded = $this->sendRemindEmail( $username, $password, $email );
		
		if( $reminded ) 
		{
			if( $globalEvents->exists("AfterRemindPassword") )
				$globalEvents->AfterRemindPassword( $username, $email, $this );
		}
		
		return $reminded;
	}
	
	/**
	 * @param String username
	 * @param String password
	 * @param String email
	 * @return Boolean
	 */
	protected function sendRemindEmail( $username, $password, $email )
	{
		$url = GetSiteUrl().$_SERVER["SCRIPT_NAME"];		
		$url = str_replace("remind.", "login.", $url)."?username=".rawurlencode( $username );
		
		$message = "";

		$message.= mlang_message("REMIND_MAIL1")."\r\n";
		$message.= mlang_message("REMIND_MAIL2")." ".$url."\r\n";
		$message.= mlang_message("USERNAME").": ".$username."\r\n";
		$message.= mlang_message("PASSWORD").": ".$password."\r\n";
		
		$sentMailResults = runner_mail(array('to' => $email, 'subject' => mlang_message("REMIND_MAIL1"), 'body' => $message));

		if( !$sentMailResults['mailed'] )
		{
			$this->message = $sentMailResults['message'];
			if( !$this->message )
				$this->message = mlang_message("USER_NOREG1")." ".$this->userEmail." ".mlang_message("USER_NOREG2");
		}
	
		return $sentMailResults['mailed'];	
	}
	
	/**
	 * @return Array
	 */
	protected function getUserSearchingSQLData()
	{
		global $cUserNameFieldType, $cEmailFieldType;		

		if( $this->cipherer->isFieldEncrypted( $this->usernameFiled ) )
			$value = $this->cipherer->MakeDBValue( $this->usernameFiled, $this->userEmail, "", true );
		else
		{
			if( NeedQuotes( $cUserNameFieldType ) )
				$value = $this->connection->prepareString( $this->userEmail );
			else
				$value= 0 + $this->userEmail;
		}
		 
		$fullcUserNameField = $this->getFieldSQLDecrypt( $this->usernameFiled );

		$sWhere = "(".$fullcUserNameField."=".$value;
		
		if( $this->cipherer->isFieldEncrypted( $this->emailField ) )
			$value = $this->cipherer->MakeDBValue( $this->emailField, $this->userEmail, "", true );
		else
		{
			if( NeedQuotes( $cEmailFieldType ) )
				$value = $this->connection->prepareString( $this->userEmail );
			else
				$value = 0 + $this->userEmail;
		}
		$fullcEmailField = $this->getFieldSQLDecrypt( $this->emailField );
		$sWhere.= " or ".$fullcEmailField."=".$value.")";
		
		$fullcPasswordField = $this->getFieldSQLDecrypt( $this->passwordFiled );
		$selectClause = "select ".$fullcUserNameField
			." as ".$this->connection->addFieldWrappers( $this->usernameFiled )
			.",".$fullcPasswordField." as ".$this->connection->addFieldWrappers( $this->passwordFiled );
		
		// prevent aliases mixing
		if( $this->usernameFiled != $this->emailField )
			$selectClause.= ",".$fullcEmailField." as ".$this->connection->addFieldWrappers( $this->emailField );

		
		$strSQLData = array();
		$strSQLData["where"] = $sWhere;		
		$strSQLData["sql"] = $selectClause." from ".$this->connection->addTableWrappers("carrierusers")." where ".$sWhere;
		
		return $strSQLData;
	}
	
	/**
	 *
	 */
	protected function doCommonAssignments()
	{
		$this->xt->assign("id", $this->id);
		
		$this->xt->assign("username_email_attrs", ($this->is508 ? "id=\"username_email\" " : "")."value=\"".runner_htmlspecialchars( $this->userEmail )."\"");		
		
		$this->xt->assign("submit_attrs", "onclick='document.forms.form1.submit();return false;'");
		if( $this->mode == REMIND_POPUP && !$this->reminded ) 
		{			
			$this->xt->assign("backlink_attrs", 'style="display:none"');
			$this->xt->assign("submit_attrs","id='submitRemind'");				
		}			

		$this->xt->assign("username_email_label", true);

		if( $this->is508 )
			$this->xt->assign_section("username_email_label","<label for=\"username_email\">","</label>");

		if( $this->message || ( $this->mode == REMIND_POPUP && !$this->reminded ) )
		{
			if ( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
			{
				$this->xt->assign("message_class", "alert-danger" );
				$this->xt->assign("message", $this->message);
			}
			else 
			{
				$this->xt->assign("message","<div class='message rnr-error'>".$this->message."</div>");
			}
			
			$this->xt->assign("message_block", true);
			
			if( $this->mode == REMIND_POPUP && !$this->reminded ) 
				$this->xt->displayBrickHidden("message");
		}

		$this->xt->assign("closewindow_attrs", 'style="display:none" id="closeWindowRemind"');

		if( $this->mode == REMIND_SIMPLE )
			$this->assignBody();		
	}
	
	/**
	 *
	 */
	protected function assignBody()
	{
		$this->body["begin"].= GetBaseScriptsForPage(false);

		$this->body["begin"].= "<form method=post action=\"".GetTableLink("remind")."\" id=form1 name=form1>
		<input type=hidden name=btnSubmit value=\"Remind\">";
	
		$this->body['end'] = XTempl::create_method_assignment("assignBodyEnd", $this);
		$this->xt->assign("body", $this->body);	
	}	
	
	/**
	 * Assign body end
	 * @intellisense
	 */	
	function assignBodyEnd($params = "") 
	{
		$this->fillSetCntrlMaps();
		echo "</form>";
		echo "<script>
			window.controlsMap = ".my_json_encode($this->controlsHTMLMap).";
			window.viewControlsMap = ".my_json_encode($this->viewControlsHTMLMap).";
			window.settings = ".my_json_encode($this->jsSettings)."; 
			</script>\r\n";
		echo "<script language=\"JavaScript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js")."\"></script>\r\n";
		echo "<script>".$this->PrepareJS()."</script>";
	}	
	
	/**
	 *
	 */
	protected function showPage()
	{
		global $globalEvents;

		if( $this->reminded )
		{
			$this->updatePageLayoutAndCSS("", "success");	
			$this->templatefile = GetTemplateName("", "remind_success");
		}
		
		if( $globalEvents->exists("BeforeShowRemindPwd") )
			$globalEvents->BeforeShowRemindPwd( $this->xt, $this->templatefile, $this );

			
		if( $this->mode == REMIND_POPUP )
		{
			$this->xt->assign("footer", false);
			$this->xt->assign("header", false);
			$this->xt->assign("body", $this->body);	// true if reminded?			
			
			$this->displayAJAX( $this->templatefile, $this->id + 1 );
			return;		
		}

		$this->display( $this->templatefile );	
	}
	
	/**
	 * @return Number
	 */
	public static function readRemindModeFromRequest()
	{
		$pageMode = postvalue("mode");
		
		if( $pageMode == "popup" )
			return REMIND_POPUP;
			
		return REMIND_SIMPLE;
	}	
}
?>