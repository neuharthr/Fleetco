<?php
class ChangePasswordPage extends RunnerPage
{
	protected $pwdStrong = false;
	
	public $action;	
	
	protected $auditObj = null;	
	
	protected $changePwdFields;
	
	protected $changedSuccess = false;
	
	
	function __construct(&$params = "")
	{
		parent::__construct($params);
		$this->pSet = new ProjectSettings("carrierusers", $this->pageType);
		$this->pSetEdit = $this->pSet;
		
		$this->auditObj = GetAuditObject( $this->tName );
		
		$this->changePwdFields = array("oldpass", "newpass", "confirm");
		
		// fill global password settings
		$this->pwdStrong = GetGlobalData("pwdStrong", false);
		if($this->pwdStrong)
		{
			$this->settingsMap["globalSettings"]["pwdLen"] = GetGlobalData("pwdLen", 0);
			$this->settingsMap["globalSettings"]["pwdUnique"] = GetGlobalData("pwdUnique", 0);
			$this->settingsMap["globalSettings"]["pwdDigits"] = GetGlobalData("pwdDigits", 0);
			$this->settingsMap["globalSettings"]["pwdStrong"] = true;	
			$this->settingsMap["globalSettings"]["pwdUpperLower"] = GetGlobalData("pwdUpperLower", false);
		}
		
		$this->formBricks["header"] = "changeheader";
		$this->formBricks["footer"] = "changebuttons";
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
	 *
	 */
	protected function setReferer()
	{
		$referer = @$_SERVER["HTTP_REFERER"] != "" 
				&& strpos($_SERVER["HTTP_REFERER"], GetTableLink("changepwd")) != strlen($_SERVER["HTTP_REFERER"]) - strlen(GetTableLink("changepwd"))
				? $_SERVER["HTTP_REFERER"] : ""; 

		if(!isset($_SESSION["changepwd_referer"]))
			$_SESSION["changepwd_referer"] = $referer != "" ? $referer : GetTableLink("menu");
		else if($referer != "")
			$_SESSION["changepwd_referer"] = $referer;	
	}
	
	/**
	 * @return Array
	 */
	protected function getSelectSQLData()
	{
		global $cLoginTable, $cUserNameField, $cUserNameFieldType, $cPasswordField;
			
		if( $this->cipherer->isFieldEncrypted( $cUserNameField ) )
			$value = $this->cipherer->MakeDBValue( $cUserNameField, @$_SESSION["UserID"], "", true );
		else
		{
			if( NeedQuotes( $cUserNameFieldType ) )
				$value = $this->connection->prepareString( @$_SESSION["UserID"] );
			else
				$value = (0 + @$_SESSION["UserID"]);
		}
			
		$sWhere = " where ".$this->getFieldSQLDecrypt( $cUserNameField )."=".$value;
		$strSQL = "select ".$this->getFieldSQLDecrypt( $cPasswordField );	
		$strSQL .= " as ".$this->connection->addFieldWrappers( $cPasswordField )
				." from ".$this->connection->addTableWrappers( $cLoginTable ).$sWhere;	
	
		return array( 
			"SQL" => $strSQL,
			"where" => $sWhere
		);
	}
	
	/**
	 * @param String newpass
	 * @param String where
	 * @return String
	 */
	protected function getUpdateSQL( $newpass, $where )
	{
		global $cLoginTable, $cPasswordField, $cPasswordFieldType;
		
			
		if( $this->cipherer->isFieldEncrypted( $cPasswordField ) )
			$passvalue = $this->cipherer->MakeDBValue( $cPasswordField, $newpass );
		else
		{
			if( NeedQuotes( $cPasswordFieldType ) )
				$passvalue = $this->connection->prepareString( $newpass );
			else
				$passvalue = (0 + $newpass);
		}
				
		return "update ".$this->connection->addTableWrappers( $cLoginTable )
				 ." set ".$this->connection->addFieldWrappers( $cPasswordField )."=".$passvalue.$where;	
	}
	
	/**
	 * @return Boolean
	 */
	protected function changePassword()
	{
		global $globalEvents, $cLoginTable, $cPasswordField;
		
		$filename_values = array();
		$blobfields = array();
		$values = array();		
		foreach( $this->changePwdFields as $fName )
		{
			$fControl = $this->getControl( $fName, $this->id );
			$fControl->readWebValue( $values, $blobfields, NULL, NULL, $filename_values );
		}
			
		
		$sqlData = $this->getSelectSQLData();
		$qResult = $this->connection->query( $sqlData["SQL"] );	
		$row = $this->cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
			
		if( $row && ( $values["oldpass"] == $row[ $cPasswordField ] ) )
		{
			if( $this->pwdStrong && !checkpassword( $values["newpass"] ) )
			{	
				$this->message = $this->getPwdStrongFailedMessage();
				$this->jsSettings["tableSettings"][ $cLoginTable ]["msg_passwordError"] = $this->message;
				return false;
			}

			$retval = true;
			if( $globalEvents->exists("BeforeChangePassword") )
				$retval = $globalEvents->BeforeChangePassword( $values["oldpass"], $values["newpass"], $this );
			
			if( $retval )
			{				
				$strSQL = $this->getUpdateSQL( $values["newpass"], $sqlData["where"] );		
				$this->connection->exec( $strSQL );

				if( $this->auditObj )
					$this->auditObj->LogChPassword();
					
				if( $globalEvents->exists("AfterChangePassword") )
					$globalEvents->AfterChangePassword( $values["oldpass"], $values["newpass"], $this );
			}
			
			return $retval;		
		}

		$this->message = mlang_message("INVALID_PASSWORD");
		return false;
	}

	/**
	 * @return String
	 */	
	protected function getPwdStrongFailedMessage()
	{
		$msg = "";
		$pwdLen = GetGlobalData("pwdLen", 0);
		if($pwdLen)
		{
			$fmt = mlang_message("SEC_PWD_LEN");
			$fmt = str_replace("%%", "".$pwdLen, $fmt);
			$msg.= "<br>".$fmt;
		}
		$pwdUnique = GetGlobalData("pwdUnique", 0);
		if($pwdUnique)
		{
			$fmt = mlang_message("SEC_PWD_UNIQUE");
			$fmt = str_replace("%%", "".$pwdUnique, $fmt);
			$msg.= "<br>".$fmt;
		}
		$pwdDigits = GetGlobalData("pwdDigits", 0);
		if($pwdDigits)
		{
			$fmt = mlang_message("SEC_PWD_DIGIT");
			$fmt = str_replace("%%", "".$pwdDigits, $fmt);
			$msg.= "<br>".$fmt;
		}
		if(GetGlobalData("pwdUpperLower", false))
		{
			$fmt = mlang_message("SEC_PWD_CASE");
			$msg.= "<br>".$fmt;
		}
		
		if($msg)
			$msg = substr($msg, 4);
			
		return $msg;
	}
	
	/**
	 *
	 */
	public function process()
	{
		global $globalEvents;

		$this->setReferer();

		//	Before Process event
		if( $globalEvents->exists("BeforeProcessChangePwd") )
			$globalEvents->BeforeProcessChangePwd( $this );

		if( $this->action == "Change" )	
			$this->changedSuccess = $this->changePassword();
			
		if( !$this->changedSuccess )
			$this->prepareEditControls();
		
		$this->addCommonJs();
		$this->fillSetCntrlMaps();
		$this->addButtonHandlers();
		$this->doCommonAssignments();
		
		$this->showPage();
	}
	
	/**
	 *
	 */
	protected function prepareEditControls()
	{
		foreach($this->changePwdFields as $fName)
		{
			$parameters = array();
			$parameters["id"] = $this->id;
			$parameters["mode"] = "add";
			$parameters["field"] = $fName;
			$parameters["format"] = "Password";
			$parameters["pageObj"] = $this;
			$parameters["suggest"] = true;
			$parameters["validate"] = array('basicValidate' => array('IsRequired')); 
			
			$parameters["extraParams"] = array();
			$parameters["extraParams"]["getConrirmFieldCtrl"] = true;
							
			$controls = array('controls' => array());	
			$controls["controls"]['id'] = $this->id;
			$controls["controls"]['mode'] = "add";
			$controls["controls"]['ctrlInd'] = 0;
			$controls["controls"]['fieldName'] = $fName;
			$controls["controls"]['suggest'] = $parameters["suggest"];
			
			$this->xt->assign_function( $fName."_editcontrol", "xt_buildeditcontrol", $parameters );
			$this->xt->assign($fName."_label", true);
			
			if ( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
			{
				$this->xt->assign("labelfor_" . goodFieldName($fName), "value_".$fName."_".$this->id);
			}		
			
			if( $this->is508 )
				$this->xt->assign_section($fName."_label", "<label for=\"value_".$fName."_".$this->id."\">", "</label>");
			
			$this->xt->assign($fName."_block", true);
					
			$this->fillControlsMap($controls);
		}	
	}
	
	/**
	 *
	 */
	protected function assignBody()
	{
		$this->body["begin"] .= GetBaseScriptsForPage(false);
		$this->body["end"] = XTempl::create_method_assignment( "assignBodyEnd", $this );

		$this->xt->assignbyref("body", $this->body);
	}	
	
	/**
	 *
	 */
	protected function doCommonAssignments()
	{
		$this->xt->assign("id", $this->id);	
		$this->xt->assign("submit_attrs", "id=\"saveButton".$this->id."\"");
		$this->xt->assign("backlink_attrs", "href=\"". runner_htmlspecialchars( $_SESSION["changepwd_referer"] )."\"");

		if( $this->message )
		{
			if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
			{
				$this->xt->assign("message_class", "alert-danger" );
				$this->xt->assign("message", $this->message);
			}
			else
			{
				$this->xt->assign("message", "<div class='message rnr-error'>".$this->message."</div>");
			}
			
			$this->xt->assign("message_block", true);
		}
		
		$this->assignBody();
	}
	
	/**
	 *
	 */
	protected function showPage()
	{
		global $globalEvents;

		if( $this->changedSuccess )
		{
			$this->updatePageLayoutAndCSS("", "success");	
			$this->templatefile = GetTemplateName("", "changepwd_success");
		}
	
		if( $globalEvents->exists("BeforeShowChangePwd") )
			$globalEvents->BeforeShowChangePwd( $this->xt, $this->templatefile, $this );

		$this->display( $this->templatefile );		
	}
	
	/**
	 * @return String
	 */
	public static function readActionFromRequest()
	{	
		if( @$_POST["btnSubmit"] )
			return @$_POST["btnSubmit"];
			
		return "";
	}
}
?>