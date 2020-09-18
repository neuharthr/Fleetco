<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadmin_users = array();
	$tdataadmin_users[".truncateText"] = true;
	$tdataadmin_users[".NumberOfChars"] = 80;
	$tdataadmin_users[".ShortName"] = "admin_users";
	$tdataadmin_users[".OwnerID"] = "";
	$tdataadmin_users[".OriginalTable"] = "carrierusers";

//	field labels
$fieldLabelsadmin_users = array();
$fieldToolTipsadmin_users = array();
$pageTitlesadmin_users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_users["English"] = array();
	$fieldToolTipsadmin_users["English"] = array();
	$pageTitlesadmin_users["English"] = array();
	$fieldLabelsadmin_users["English"]["ID"] = "ID";
	$fieldToolTipsadmin_users["English"]["ID"] = "";
	$fieldLabelsadmin_users["English"]["username"] = "Username";
	$fieldToolTipsadmin_users["English"]["username"] = "";
	$fieldLabelsadmin_users["English"]["password"] = "Password";
	$fieldToolTipsadmin_users["English"]["password"] = "";
	$fieldLabelsadmin_users["English"]["email"] = "Email";
	$fieldToolTipsadmin_users["English"]["email"] = "";
	$fieldLabelsadmin_users["English"]["fullname"] = "Fullname";
	$fieldToolTipsadmin_users["English"]["fullname"] = "";
	$fieldLabelsadmin_users["English"]["groupid"] = "Groupid";
	$fieldToolTipsadmin_users["English"]["groupid"] = "";
	$fieldLabelsadmin_users["English"]["active"] = "Active";
	$fieldToolTipsadmin_users["English"]["active"] = "";
	if (count($fieldToolTipsadmin_users["English"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsadmin_users["Afrikaans"] = array();
	$fieldToolTipsadmin_users["Afrikaans"] = array();
	$pageTitlesadmin_users["Afrikaans"] = array();
	$fieldLabelsadmin_users["Afrikaans"]["ID"] = "ID";
	$fieldToolTipsadmin_users["Afrikaans"]["ID"] = "";
	$fieldLabelsadmin_users["Afrikaans"]["username"] = "Gebruikersnaam";
	$fieldToolTipsadmin_users["Afrikaans"]["username"] = "";
	$fieldLabelsadmin_users["Afrikaans"]["password"] = "wagwoord";
	$fieldToolTipsadmin_users["Afrikaans"]["password"] = "";
	$fieldLabelsadmin_users["Afrikaans"]["email"] = "e-pos";
	$fieldToolTipsadmin_users["Afrikaans"]["email"] = "";
	$fieldLabelsadmin_users["Afrikaans"]["fullname"] = "Volle naam";
	$fieldToolTipsadmin_users["Afrikaans"]["fullname"] = "";
	$fieldLabelsadmin_users["Afrikaans"]["groupid"] = "groepid";
	$fieldToolTipsadmin_users["Afrikaans"]["groupid"] = "";
	$fieldLabelsadmin_users["Afrikaans"]["active"] = "aktiewe";
	$fieldToolTipsadmin_users["Afrikaans"]["active"] = "";
	if (count($fieldToolTipsadmin_users["Afrikaans"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsadmin_users["Arabic"] = array();
	$fieldToolTipsadmin_users["Arabic"] = array();
	$pageTitlesadmin_users["Arabic"] = array();
	$fieldLabelsadmin_users["Arabic"]["ID"] = "???? ?????";
	$fieldToolTipsadmin_users["Arabic"]["ID"] = "";
	$fieldLabelsadmin_users["Arabic"]["username"] = "??? ????????";
	$fieldToolTipsadmin_users["Arabic"]["username"] = "";
	$fieldLabelsadmin_users["Arabic"]["password"] = "???? ????";
	$fieldToolTipsadmin_users["Arabic"]["password"] = "";
	$fieldLabelsadmin_users["Arabic"]["email"] = "?????? ??????????";
	$fieldToolTipsadmin_users["Arabic"]["email"] = "";
	$fieldLabelsadmin_users["Arabic"]["fullname"] = "????? ??????";
	$fieldToolTipsadmin_users["Arabic"]["fullname"] = "";
	$fieldLabelsadmin_users["Arabic"]["groupid"] = "Groupid";
	$fieldToolTipsadmin_users["Arabic"]["groupid"] = "";
	$fieldLabelsadmin_users["Arabic"]["active"] = "???";
	$fieldToolTipsadmin_users["Arabic"]["active"] = "";
	if (count($fieldToolTipsadmin_users["Arabic"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsadmin_users["Chinese"] = array();
	$fieldToolTipsadmin_users["Chinese"] = array();
	$pageTitlesadmin_users["Chinese"] = array();
	$fieldLabelsadmin_users["Chinese"]["ID"] = "ID";
	$fieldToolTipsadmin_users["Chinese"]["ID"] = "";
	$fieldLabelsadmin_users["Chinese"]["username"] = "???";
	$fieldToolTipsadmin_users["Chinese"]["username"] = "";
	$fieldLabelsadmin_users["Chinese"]["password"] = "??";
	$fieldToolTipsadmin_users["Chinese"]["password"] = "";
	$fieldLabelsadmin_users["Chinese"]["email"] = "????";
	$fieldToolTipsadmin_users["Chinese"]["email"] = "";
	$fieldLabelsadmin_users["Chinese"]["fullname"] = "??";
	$fieldToolTipsadmin_users["Chinese"]["fullname"] = "";
	$fieldLabelsadmin_users["Chinese"]["groupid"] = "Groupid";
	$fieldToolTipsadmin_users["Chinese"]["groupid"] = "";
	$fieldLabelsadmin_users["Chinese"]["active"] = "??";
	$fieldToolTipsadmin_users["Chinese"]["active"] = "";
	if (count($fieldToolTipsadmin_users["Chinese"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsadmin_users["French"] = array();
	$fieldToolTipsadmin_users["French"] = array();
	$pageTitlesadmin_users["French"] = array();
	$fieldLabelsadmin_users["French"]["ID"] = "ID";
	$fieldToolTipsadmin_users["French"]["ID"] = "";
	$fieldLabelsadmin_users["French"]["username"] = "Nom d'utilisateur";
	$fieldToolTipsadmin_users["French"]["username"] = "";
	$fieldLabelsadmin_users["French"]["password"] = "Mot de passe";
	$fieldToolTipsadmin_users["French"]["password"] = "";
	$fieldLabelsadmin_users["French"]["email"] = "Email";
	$fieldToolTipsadmin_users["French"]["email"] = "";
	$fieldLabelsadmin_users["French"]["fullname"] = "Nom complet";
	$fieldToolTipsadmin_users["French"]["fullname"] = "";
	$fieldLabelsadmin_users["French"]["groupid"] = "Groupid";
	$fieldToolTipsadmin_users["French"]["groupid"] = "";
	$fieldLabelsadmin_users["French"]["active"] = "actif";
	$fieldToolTipsadmin_users["French"]["active"] = "";
	if (count($fieldToolTipsadmin_users["French"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsadmin_users["German"] = array();
	$fieldToolTipsadmin_users["German"] = array();
	$pageTitlesadmin_users["German"] = array();
	$fieldLabelsadmin_users["German"]["ID"] = "ICH WÜRDE";
	$fieldToolTipsadmin_users["German"]["ID"] = "";
	$fieldLabelsadmin_users["German"]["username"] = "Benutzername";
	$fieldToolTipsadmin_users["German"]["username"] = "";
	$fieldLabelsadmin_users["German"]["password"] = "Passwort";
	$fieldToolTipsadmin_users["German"]["password"] = "";
	$fieldLabelsadmin_users["German"]["email"] = "Email";
	$fieldToolTipsadmin_users["German"]["email"] = "";
	$fieldLabelsadmin_users["German"]["fullname"] = "Vollständiger Name";
	$fieldToolTipsadmin_users["German"]["fullname"] = "";
	$fieldLabelsadmin_users["German"]["groupid"] = "Groupid";
	$fieldToolTipsadmin_users["German"]["groupid"] = "";
	$fieldLabelsadmin_users["German"]["active"] = "Aktiv";
	$fieldToolTipsadmin_users["German"]["active"] = "";
	if (count($fieldToolTipsadmin_users["German"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsadmin_users["Italian"] = array();
	$fieldToolTipsadmin_users["Italian"] = array();
	$pageTitlesadmin_users["Italian"] = array();
	$fieldLabelsadmin_users["Italian"]["ID"] = "ID";
	$fieldToolTipsadmin_users["Italian"]["ID"] = "";
	$fieldLabelsadmin_users["Italian"]["username"] = "Nome utente";
	$fieldToolTipsadmin_users["Italian"]["username"] = "";
	$fieldLabelsadmin_users["Italian"]["password"] = "parola d'ordine";
	$fieldToolTipsadmin_users["Italian"]["password"] = "";
	$fieldLabelsadmin_users["Italian"]["email"] = "E-mail";
	$fieldToolTipsadmin_users["Italian"]["email"] = "";
	$fieldLabelsadmin_users["Italian"]["fullname"] = "Nome e cognome";
	$fieldToolTipsadmin_users["Italian"]["fullname"] = "";
	$fieldLabelsadmin_users["Italian"]["groupid"] = "groupid";
	$fieldToolTipsadmin_users["Italian"]["groupid"] = "";
	$fieldLabelsadmin_users["Italian"]["active"] = "Attivo";
	$fieldToolTipsadmin_users["Italian"]["active"] = "";
	if (count($fieldToolTipsadmin_users["Italian"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsadmin_users["Russian"] = array();
	$fieldToolTipsadmin_users["Russian"] = array();
	$pageTitlesadmin_users["Russian"] = array();
	$fieldLabelsadmin_users["Russian"]["ID"] = "? ??";
	$fieldToolTipsadmin_users["Russian"]["ID"] = "";
	$fieldLabelsadmin_users["Russian"]["username"] = "??? ????????????";
	$fieldToolTipsadmin_users["Russian"]["username"] = "";
	$fieldLabelsadmin_users["Russian"]["password"] = "??????";
	$fieldToolTipsadmin_users["Russian"]["password"] = "";
	$fieldLabelsadmin_users["Russian"]["email"] = "??. ?????";
	$fieldToolTipsadmin_users["Russian"]["email"] = "";
	$fieldLabelsadmin_users["Russian"]["fullname"] = "?????? ???";
	$fieldToolTipsadmin_users["Russian"]["fullname"] = "";
	$fieldLabelsadmin_users["Russian"]["groupid"] = "GroupID";
	$fieldToolTipsadmin_users["Russian"]["groupid"] = "";
	$fieldLabelsadmin_users["Russian"]["active"] = "????????";
	$fieldToolTipsadmin_users["Russian"]["active"] = "";
	if (count($fieldToolTipsadmin_users["Russian"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsadmin_users["Spanish"] = array();
	$fieldToolTipsadmin_users["Spanish"] = array();
	$pageTitlesadmin_users["Spanish"] = array();
	$fieldLabelsadmin_users["Spanish"]["ID"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipsadmin_users["Spanish"]["ID"] = "";
	$fieldLabelsadmin_users["Spanish"]["username"] = "Nombre de usuario";
	$fieldToolTipsadmin_users["Spanish"]["username"] = "";
	$fieldLabelsadmin_users["Spanish"]["password"] = "Contraseña";
	$fieldToolTipsadmin_users["Spanish"]["password"] = "";
	$fieldLabelsadmin_users["Spanish"]["email"] = "Email";
	$fieldToolTipsadmin_users["Spanish"]["email"] = "";
	$fieldLabelsadmin_users["Spanish"]["fullname"] = "Nombre completo";
	$fieldToolTipsadmin_users["Spanish"]["fullname"] = "";
	$fieldLabelsadmin_users["Spanish"]["groupid"] = "Groupid";
	$fieldToolTipsadmin_users["Spanish"]["groupid"] = "";
	$fieldLabelsadmin_users["Spanish"]["active"] = "Activo";
	$fieldToolTipsadmin_users["Spanish"]["active"] = "";
	if (count($fieldToolTipsadmin_users["Spanish"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadmin_users[""] = array();
	$fieldToolTipsadmin_users[""] = array();
	$pageTitlesadmin_users[""] = array();
	if (count($fieldToolTipsadmin_users[""]))
		$tdataadmin_users[".isUseToolTips"] = true;
}


	$tdataadmin_users[".NCSearch"] = true;



$tdataadmin_users[".shortTableName"] = "admin_users";
$tdataadmin_users[".nSecOptions"] = 0;
$tdataadmin_users[".recsPerRowPrint"] = 1;
$tdataadmin_users[".mainTableOwnerID"] = "";
$tdataadmin_users[".moveNext"] = 1;
$tdataadmin_users[".entityType"] = 1;

$tdataadmin_users[".strOriginalTableName"] = "carrierusers";

		 	  	   $tdataadmin_users[".hasEncryptedFields"] = true;




$tdataadmin_users[".showAddInPopup"] = false;

$tdataadmin_users[".showEditInPopup"] = false;

$tdataadmin_users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_users[".fieldsForRegister"] = array();

	$tdataadmin_users[".listAjax"] = true;

	$tdataadmin_users[".audit"] = false;

	$tdataadmin_users[".locking"] = false;



$tdataadmin_users[".list"] = true;

$tdataadmin_users[".inlineEdit"] = true;



$tdataadmin_users[".inlineAdd"] = true;


$tdataadmin_users[".exportTo"] = true;

$tdataadmin_users[".printFriendly"] = true;

$tdataadmin_users[".delete"] = true;

$tdataadmin_users[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataadmin_users[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataadmin_users[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataadmin_users[".searchSaving"] = false;
//

$tdataadmin_users[".showSearchPanel"] = true;
		$tdataadmin_users[".flexibleSearch"] = true;

$tdataadmin_users[".isUseAjaxSuggest"] = true;

$tdataadmin_users[".rowHighlite"] = true;



$tdataadmin_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_users[".isUseTimeForSearch"] = false;





$tdataadmin_users[".allSearchFields"] = array();
$tdataadmin_users[".filterFields"] = array();
$tdataadmin_users[".requiredSearchFields"] = array();

$tdataadmin_users[".allSearchFields"][] = "ID";
	$tdataadmin_users[".allSearchFields"][] = "username";
	$tdataadmin_users[".allSearchFields"][] = "email";
	$tdataadmin_users[".allSearchFields"][] = "fullname";
	$tdataadmin_users[".allSearchFields"][] = "groupid";
	$tdataadmin_users[".allSearchFields"][] = "active";
	

$tdataadmin_users[".googleLikeFields"] = array();
$tdataadmin_users[".googleLikeFields"][] = "ID";
$tdataadmin_users[".googleLikeFields"][] = "username";
$tdataadmin_users[".googleLikeFields"][] = "password";
$tdataadmin_users[".googleLikeFields"][] = "email";
$tdataadmin_users[".googleLikeFields"][] = "fullname";
$tdataadmin_users[".googleLikeFields"][] = "groupid";
$tdataadmin_users[".googleLikeFields"][] = "active";


$tdataadmin_users[".advSearchFields"] = array();
$tdataadmin_users[".advSearchFields"][] = "ID";
$tdataadmin_users[".advSearchFields"][] = "username";
$tdataadmin_users[".advSearchFields"][] = "email";
$tdataadmin_users[".advSearchFields"][] = "fullname";
$tdataadmin_users[".advSearchFields"][] = "groupid";
$tdataadmin_users[".advSearchFields"][] = "active";

$tdataadmin_users[".tableType"] = "list";

$tdataadmin_users[".printerPageOrientation"] = 0;
$tdataadmin_users[".nPrinterPageScale"] = 100;

$tdataadmin_users[".nPrinterSplitRecords"] = 40;

$tdataadmin_users[".nPrinterPDFSplitRecords"] = 40;



$tdataadmin_users[".geocodingEnabled"] = false;





$tdataadmin_users[".listGridLayout"] = 3;


$tdataadmin_users[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataadmin_users[".pageSize"] = 20;

$tdataadmin_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_users[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_users[".orderindexes"] = array();

$tdataadmin_users[".sqlHead"] = "SELECT ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active";
$tdataadmin_users[".sqlFrom"] = "FROM carrierusers";
$tdataadmin_users[".sqlWhereExpr"] = "";
$tdataadmin_users[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdataadmin_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_users[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_users[".highlightSearchResults"] = true;

$tableKeysadmin_users = array();
$tableKeysadmin_users[] = "ID";
$tdataadmin_users[".Keys"] = $tableKeysadmin_users;

$tdataadmin_users[".listFields"] = array();
$tdataadmin_users[".listFields"][] = "ID";
$tdataadmin_users[".listFields"][] = "username";
$tdataadmin_users[".listFields"][] = "email";
$tdataadmin_users[".listFields"][] = "password";
$tdataadmin_users[".listFields"][] = "fullname";
$tdataadmin_users[".listFields"][] = "groupid";
$tdataadmin_users[".listFields"][] = "active";

$tdataadmin_users[".hideMobileList"] = array();


$tdataadmin_users[".viewFields"] = array();

$tdataadmin_users[".addFields"] = array();

$tdataadmin_users[".masterListFields"] = array();
$tdataadmin_users[".masterListFields"][] = "ID";
$tdataadmin_users[".masterListFields"][] = "username";
$tdataadmin_users[".masterListFields"][] = "email";
$tdataadmin_users[".masterListFields"][] = "password";
$tdataadmin_users[".masterListFields"][] = "fullname";
$tdataadmin_users[".masterListFields"][] = "groupid";
$tdataadmin_users[".masterListFields"][] = "active";

$tdataadmin_users[".inlineAddFields"] = array();
$tdataadmin_users[".inlineAddFields"][] = "username";
$tdataadmin_users[".inlineAddFields"][] = "email";
$tdataadmin_users[".inlineAddFields"][] = "password";
$tdataadmin_users[".inlineAddFields"][] = "fullname";
$tdataadmin_users[".inlineAddFields"][] = "groupid";
$tdataadmin_users[".inlineAddFields"][] = "active";

$tdataadmin_users[".editFields"] = array();

$tdataadmin_users[".inlineEditFields"] = array();
$tdataadmin_users[".inlineEditFields"][] = "username";
$tdataadmin_users[".inlineEditFields"][] = "email";
$tdataadmin_users[".inlineEditFields"][] = "password";
$tdataadmin_users[".inlineEditFields"][] = "fullname";
$tdataadmin_users[".inlineEditFields"][] = "groupid";
$tdataadmin_users[".inlineEditFields"][] = "active";

$tdataadmin_users[".updateSelectedFields"] = array();


$tdataadmin_users[".exportFields"] = array();
$tdataadmin_users[".exportFields"][] = "ID";
$tdataadmin_users[".exportFields"][] = "username";
$tdataadmin_users[".exportFields"][] = "email";
$tdataadmin_users[".exportFields"][] = "fullname";
$tdataadmin_users[".exportFields"][] = "groupid";
$tdataadmin_users[".exportFields"][] = "active";

$tdataadmin_users[".importFields"] = array();

$tdataadmin_users[".printFields"] = array();
$tdataadmin_users[".printFields"][] = "ID";
$tdataadmin_users[".printFields"][] = "username";
$tdataadmin_users[".printFields"][] = "email";
$tdataadmin_users[".printFields"][] = "fullname";
$tdataadmin_users[".printFields"][] = "groupid";
$tdataadmin_users[".printFields"][] = "active";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "carrierusers";
	$fdata["Label"] = GetFieldLabel("admin_users","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
																																									
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["ID"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "carrierusers";
	$fdata["Label"] = GetFieldLabel("admin_users","username");
	$fdata["FieldType"] = 200;

	
	
	
																																									
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=300";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=300";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["username"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "carrierusers";
	$fdata["Label"] = GetFieldLabel("admin_users","password");
	$fdata["FieldType"] = 200;

	
	
	
																											$fdata["bIsEncrypted"] = true;
																				
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
	
	
		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Long Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Password");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=300";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataadmin_users["password"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "carrierusers";
	$fdata["Label"] = GetFieldLabel("admin_users","email");
	$fdata["FieldType"] = 200;

	
	
	
																																									
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=300";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["email"] = $fdata;
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "carrierusers";
	$fdata["Label"] = GetFieldLabel("admin_users","fullname");
	$fdata["FieldType"] = 200;

	
	
	
																																									
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=300";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["fullname"] = $fdata;
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "carrierusers";
	$fdata["Label"] = GetFieldLabel("admin_users","groupid");
	$fdata["FieldType"] = 200;

	
	
	
																																									
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "groupid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=300";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["groupid"] = $fdata;
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "carrierusers";
	$fdata["Label"] = GetFieldLabel("admin_users","active");
	$fdata["FieldType"] = 3;

	
	
	
																																									
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["active"] = $fdata;


$tables_data["admin_users"]=&$tdataadmin_users;
$field_labels["admin_users"] = &$fieldLabelsadmin_users;
$fieldToolTips["admin_users"] = &$fieldToolTipsadmin_users;
$page_titles["admin_users"] = &$pageTitlesadmin_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["admin_users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active";
$proto0["m_strFrom"] = "FROM carrierusers";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
					
;
	$proto0["cipherer"] = new RunnerCipherer("admin_users");
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "carrierusers",
	"m_srcTableName" => "admin_users"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "admin_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "carrierusers",
	"m_srcTableName" => "admin_users"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "admin_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "carrierusers",
	"m_srcTableName" => "admin_users"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "admin_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "carrierusers",
	"m_srcTableName" => "admin_users"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "admin_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "carrierusers",
	"m_srcTableName" => "admin_users"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "admin_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "carrierusers",
	"m_srcTableName" => "admin_users"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "admin_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "carrierusers",
	"m_srcTableName" => "admin_users"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "admin_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "carrierusers";
$proto21["m_srcTableName"] = "admin_users";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ID";
$proto21["m_columns"][] = "username";
$proto21["m_columns"][] = "password";
$proto21["m_columns"][] = "email";
$proto21["m_columns"][] = "fullname";
$proto21["m_columns"][] = "groupid";
$proto21["m_columns"][] = "active";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "carrierusers";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "admin_users";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="admin_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_users = createSqlQuery_admin_users();


	
					
;

									 $queryData_admin_users->m_fieldlist[2]->m_isEncrypted = true;
													 $queryData_admin_users->m_fieldlist[2]->m_isEncrypted = true;
				

$tdataadmin_users[".sqlquery"] = $queryData_admin_users;

$tableEvents["admin_users"] = new eventsBase;
$tdataadmin_users[".hasEvents"] = false;

?>