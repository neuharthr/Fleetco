<?php
class Security
{
	public static function processPageSecurity( $table, $permission, $ajaxMode = false, $message = '' )
	{
		if( Security::checkPagePermissions( $table, $permission ) )
			return true;

		if( $ajaxMode )
		{
			Security::sendPermissionError( $message );
			return false;
		}
		// The user is logged in but lacks necessary permissions
		// redirect to Menu.
		if( isLogged() && !isLoggedAsGuest() )
		{
			HeaderRedirect("menu");
			return false;
		}

		//	Not logged in
		// 	redirect to Login
		//	Current URL is already saved  in session
		redirectToLogin();
		return false;
	}

	public static function processAdminPageSecurity( $ajaxMode = false )
	{
		Security::processLogoutRequest();

		if( !isLogged() || isLoggedAsGuest() )
		{
			Security::tryRelogin();
		}
		
		if( IsAdmin() )
			return true;
		
		if( $ajaxMode )
		{
			Security::sendPermissionError();
			return false;
		}
		
		// The user is logged in but lacks necessary permissions
		// redirect to Menu.
		if( isLogged() && !isLoggedAsGuest() )
		{
			HeaderRedirect("menu");
			return false;
		}

		//	Not logged in
		// 	redirect to Login
		//	Save current URL in session
		Security::saveRedirectURL();
		redirectToLogin();
		return false;
	}
		
	public static function saveRedirectURL()
	{
		$url = $_SERVER["SCRIPT_NAME"];
		$query = "";
		foreach( $_GET as $key=>$value )
		{
			if( $key == "a" && $value == "logout" )
				continue;
			if( $query != "" )
				$query.="&";
			
			if( is_array($value) ) 
			{
				$query .= rawurlencode($key."[]")."=";
				$query .= implode( rawurlencode($key."[]")."=", $value );
			}
			else
			{
				$query .= rawurlencode($key);
				if( strlen($value) )
					$query .= "=" . rawurlencode($value);
			}			
		}
		if( $query != "" )
			$url .= "?" . $query;
		$_SESSION["MyURL"] = $url;
	}
	
	public static function checkPagePermissions( $table, $permission )
	{
		//	log out if received ?a=logout request
		Security::processLogoutRequest();
		// save current URL
		Security::saveRedirectURL();
		
		$ret = Security::checkUserPermissions( $table, $permission );
		//	remember if current user has permissions on the page saved in $_SESSION[MyURL]
		$_SESSION["MyUrlAccess"] = $ret;
		return $ret;
	}

	protected static function createLoginPageObject()
	{
		include_once(getabspath('classes/loginpage.php'));
		include_once(getabspath('include/xtempl.php'));
		$loginXt = new Xtempl();
		
		$loginParams = array("pageType" => PAGE_LOGIN);
		$loginParams['xt'] = &$loginXt;
		$loginParams["tName"]= NOT_TABLE_BASED_TNAME;
		$loginParams['needSearchClauseObj'] = false;
		$loginPageObject = new LoginPage($loginParams); 
		$loginPageObject->init();
		return $loginPageObject;
	}

	static function tryRelogin()
	{
		$username = $_COOKIE["username"];
		$password = $_COOKIE["password"];
		if( $username == "" || $password == "" ) 
			return false;
			
		$loginPageObject = Security::createLoginPageObject();
		return $loginPageObject->LogIn($username, $password);
	}
	
	static function checkUserPermissions($table, $permission)
	{
		//	user is logged in
		if( !isLogged() || isLoggedAsGuest() )
		{
			Security::tryRelogin();
		}
		//	admin area security
		if( $table == ADMIN_USERS )
			return IsAdmin();
			
		return CheckTablePermissions($table, $permission);
	}

	/**
	 * Returns true if logged out
	 * @return Boolean
	 */
	static function processLogoutRequest()
	{
		//	no need to logout
		if( postvalue("a") != "logout" || !isLogged() || isLoggedAsGuest() ) 
			return false;
		
		//	logout and redirect (refresh current page)
		$loginPageObject = Security::createLoginPageObject();
		$loginPageObject->Logout();
		//	login as guest
		Security::doGuestLogin();
		global $logoutPerformed;
		$logoutPerformed = true;
		return true;
	}
	
	/**
	 * @param String message (optional)
	 */
	public static function sendPermissionError( $message = '' )
	{
		echo printJSON(array("success" => false, "message" => mlang_message("NO_PERMISSIONS").$message));
		exit();
	}

	public static function redirectToList( $table )
	{
		$settings = new ProjectSettings( $table );
		if( $settings->hasListPage() )
		{
			HeaderRedirect($settings->getShortTableName(), "list", "a=return");
			exit();
		}
		//	no List page
		HeaderRedirect("menu");
		exit();
	}
	
	public static function clearSecuritySession()
	{
		session_unset();
		setcookie("username","",time()-365*1440*60);
		setcookie("password","",time()-365*1440*60);
		
		
		// these lines are important
		// DO NOT REMOVE THEM!
		unset( $_COOKIE["username"] );
		unset( $_COOKIE["password"] );

		
		unset( $_SESSION["UserID"] );
		unset( $_SESSION["UserName"] );
		unset( $_SESSION["AccessLevel"] );
		unset( $_SESSION["fromFacebook"] );
		unset( $_SESSION["UserRights"] );
		unset( $_SESSION["LastReadRights"] );
		unset( $_SESSION['GroupID'] );
		unset( $_SESSION["OwnerID"] );
		
		$toClear = array();
		foreach( $_SESSION as $k => $v )
		{
			if( substr($k, -8) == "_OwnerID" )
				$toClear[] = $k;
		}
		foreach( $toClear as $k => $v )
		{
			unset( $_SESSION[ $k ] );
		}
	}
	
	public static function doGuestLogin()
	{
			$allowGuest = guestHasPermissions();
	if( !$allowGuest )
		return;
		
	DoLogin(true);
	}	
}
?>