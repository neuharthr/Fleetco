<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadmin_members = array();
	$tdataadmin_members[".truncateText"] = true;
	$tdataadmin_members[".NumberOfChars"] = 80;
	$tdataadmin_members[".ShortName"] = "admin_members";
	$tdataadmin_members[".OwnerID"] = "";
	$tdataadmin_members[".OriginalTable"] = "carrierusers";

//	field labels
$fieldLabelsadmin_members = array();
$fieldToolTipsadmin_members = array();
$pageTitlesadmin_members = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_members["English"] = array();
	$fieldToolTipsadmin_members["English"] = array();
	$pageTitlesadmin_members["English"] = array();
	$fieldLabelsadmin_members["English"]["ID"] = "ID";
	$fieldToolTipsadmin_members["English"]["ID"] = "";
	$fieldLabelsadmin_members["English"]["username"] = "Username";
	$fieldToolTipsadmin_members["English"]["username"] = "";
	$fieldLabelsadmin_members["English"]["password"] = "Password";
	$fieldToolTipsadmin_members["English"]["password"] = "";
	$fieldLabelsadmin_members["English"]["email"] = "Email";
	$fieldToolTipsadmin_members["English"]["email"] = "";
	$fieldLabelsadmin_members["English"]["fullname"] = "Fullname";
	$fieldToolTipsadmin_members["English"]["fullname"] = "";
	$fieldLabelsadmin_members["English"]["groupid"] = "Groupid";
	$fieldToolTipsadmin_members["English"]["groupid"] = "";
	$fieldLabelsadmin_members["English"]["active"] = "Active";
	$fieldToolTipsadmin_members["English"]["active"] = "";
	if (count($fieldToolTipsadmin_members["English"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsadmin_members["Afrikaans"] = array();
	$fieldToolTipsadmin_members["Afrikaans"] = array();
	$pageTitlesadmin_members["Afrikaans"] = array();
	$fieldLabelsadmin_members["Afrikaans"]["ID"] = "ID";
	$fieldToolTipsadmin_members["Afrikaans"]["ID"] = "";
	$fieldLabelsadmin_members["Afrikaans"]["username"] = "Gebruikersnaam";
	$fieldToolTipsadmin_members["Afrikaans"]["username"] = "";
	$fieldLabelsadmin_members["Afrikaans"]["password"] = "wagwoord";
	$fieldToolTipsadmin_members["Afrikaans"]["password"] = "";
	$fieldLabelsadmin_members["Afrikaans"]["email"] = "e-pos";
	$fieldToolTipsadmin_members["Afrikaans"]["email"] = "";
	$fieldLabelsadmin_members["Afrikaans"]["fullname"] = "Volle naam";
	$fieldToolTipsadmin_members["Afrikaans"]["fullname"] = "";
	$fieldLabelsadmin_members["Afrikaans"]["groupid"] = "groepid";
	$fieldToolTipsadmin_members["Afrikaans"]["groupid"] = "";
	$fieldLabelsadmin_members["Afrikaans"]["active"] = "aktiewe";
	$fieldToolTipsadmin_members["Afrikaans"]["active"] = "";
	if (count($fieldToolTipsadmin_members["Afrikaans"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsadmin_members["Arabic"] = array();
	$fieldToolTipsadmin_members["Arabic"] = array();
	$pageTitlesadmin_members["Arabic"] = array();
	$fieldLabelsadmin_members["Arabic"]["ID"] = "???? ?????";
	$fieldToolTipsadmin_members["Arabic"]["ID"] = "";
	$fieldLabelsadmin_members["Arabic"]["username"] = "??? ????????";
	$fieldToolTipsadmin_members["Arabic"]["username"] = "";
	$fieldLabelsadmin_members["Arabic"]["password"] = "???? ????";
	$fieldToolTipsadmin_members["Arabic"]["password"] = "";
	$fieldLabelsadmin_members["Arabic"]["email"] = "?????? ??????????";
	$fieldToolTipsadmin_members["Arabic"]["email"] = "";
	$fieldLabelsadmin_members["Arabic"]["fullname"] = "????? ??????";
	$fieldToolTipsadmin_members["Arabic"]["fullname"] = "";
	$fieldLabelsadmin_members["Arabic"]["groupid"] = "Groupid";
	$fieldToolTipsadmin_members["Arabic"]["groupid"] = "";
	$fieldLabelsadmin_members["Arabic"]["active"] = "???";
	$fieldToolTipsadmin_members["Arabic"]["active"] = "";
	if (count($fieldToolTipsadmin_members["Arabic"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsadmin_members["Chinese"] = array();
	$fieldToolTipsadmin_members["Chinese"] = array();
	$pageTitlesadmin_members["Chinese"] = array();
	$fieldLabelsadmin_members["Chinese"]["ID"] = "ID";
	$fieldToolTipsadmin_members["Chinese"]["ID"] = "";
	$fieldLabelsadmin_members["Chinese"]["username"] = "???";
	$fieldToolTipsadmin_members["Chinese"]["username"] = "";
	$fieldLabelsadmin_members["Chinese"]["password"] = "??";
	$fieldToolTipsadmin_members["Chinese"]["password"] = "";
	$fieldLabelsadmin_members["Chinese"]["email"] = "????";
	$fieldToolTipsadmin_members["Chinese"]["email"] = "";
	$fieldLabelsadmin_members["Chinese"]["fullname"] = "??";
	$fieldToolTipsadmin_members["Chinese"]["fullname"] = "";
	$fieldLabelsadmin_members["Chinese"]["groupid"] = "Groupid";
	$fieldToolTipsadmin_members["Chinese"]["groupid"] = "";
	$fieldLabelsadmin_members["Chinese"]["active"] = "??";
	$fieldToolTipsadmin_members["Chinese"]["active"] = "";
	if (count($fieldToolTipsadmin_members["Chinese"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsadmin_members["French"] = array();
	$fieldToolTipsadmin_members["French"] = array();
	$pageTitlesadmin_members["French"] = array();
	$fieldLabelsadmin_members["French"]["ID"] = "ID";
	$fieldToolTipsadmin_members["French"]["ID"] = "";
	$fieldLabelsadmin_members["French"]["username"] = "Nom d'utilisateur";
	$fieldToolTipsadmin_members["French"]["username"] = "";
	$fieldLabelsadmin_members["French"]["password"] = "Mot de passe";
	$fieldToolTipsadmin_members["French"]["password"] = "";
	$fieldLabelsadmin_members["French"]["email"] = "Email";
	$fieldToolTipsadmin_members["French"]["email"] = "";
	$fieldLabelsadmin_members["French"]["fullname"] = "Nom complet";
	$fieldToolTipsadmin_members["French"]["fullname"] = "";
	$fieldLabelsadmin_members["French"]["groupid"] = "Groupid";
	$fieldToolTipsadmin_members["French"]["groupid"] = "";
	$fieldLabelsadmin_members["French"]["active"] = "actif";
	$fieldToolTipsadmin_members["French"]["active"] = "";
	if (count($fieldToolTipsadmin_members["French"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsadmin_members["German"] = array();
	$fieldToolTipsadmin_members["German"] = array();
	$pageTitlesadmin_members["German"] = array();
	$fieldLabelsadmin_members["German"]["ID"] = "ICH WÜRDE";
	$fieldToolTipsadmin_members["German"]["ID"] = "";
	$fieldLabelsadmin_members["German"]["username"] = "Benutzername";
	$fieldToolTipsadmin_members["German"]["username"] = "";
	$fieldLabelsadmin_members["German"]["password"] = "Passwort";
	$fieldToolTipsadmin_members["German"]["password"] = "";
	$fieldLabelsadmin_members["German"]["email"] = "Email";
	$fieldToolTipsadmin_members["German"]["email"] = "";
	$fieldLabelsadmin_members["German"]["fullname"] = "Vollständiger Name";
	$fieldToolTipsadmin_members["German"]["fullname"] = "";
	$fieldLabelsadmin_members["German"]["groupid"] = "Groupid";
	$fieldToolTipsadmin_members["German"]["groupid"] = "";
	$fieldLabelsadmin_members["German"]["active"] = "Aktiv";
	$fieldToolTipsadmin_members["German"]["active"] = "";
	if (count($fieldToolTipsadmin_members["German"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsadmin_members["Italian"] = array();
	$fieldToolTipsadmin_members["Italian"] = array();
	$pageTitlesadmin_members["Italian"] = array();
	$fieldLabelsadmin_members["Italian"]["ID"] = "ID";
	$fieldToolTipsadmin_members["Italian"]["ID"] = "";
	$fieldLabelsadmin_members["Italian"]["username"] = "Nome utente";
	$fieldToolTipsadmin_members["Italian"]["username"] = "";
	$fieldLabelsadmin_members["Italian"]["password"] = "parola d'ordine";
	$fieldToolTipsadmin_members["Italian"]["password"] = "";
	$fieldLabelsadmin_members["Italian"]["email"] = "E-mail";
	$fieldToolTipsadmin_members["Italian"]["email"] = "";
	$fieldLabelsadmin_members["Italian"]["fullname"] = "Nome e cognome";
	$fieldToolTipsadmin_members["Italian"]["fullname"] = "";
	$fieldLabelsadmin_members["Italian"]["groupid"] = "groupid";
	$fieldToolTipsadmin_members["Italian"]["groupid"] = "";
	$fieldLabelsadmin_members["Italian"]["active"] = "Attivo";
	$fieldToolTipsadmin_members["Italian"]["active"] = "";
	if (count($fieldToolTipsadmin_members["Italian"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsadmin_members["Russian"] = array();
	$fieldToolTipsadmin_members["Russian"] = array();
	$pageTitlesadmin_members["Russian"] = array();
	$fieldLabelsadmin_members["Russian"]["ID"] = "? ??";
	$fieldToolTipsadmin_members["Russian"]["ID"] = "";
	$fieldLabelsadmin_members["Russian"]["username"] = "??? ????????????";
	$fieldToolTipsadmin_members["Russian"]["username"] = "";
	$fieldLabelsadmin_members["Russian"]["password"] = "??????";
	$fieldToolTipsadmin_members["Russian"]["password"] = "";
	$fieldLabelsadmin_members["Russian"]["email"] = "??. ?????";
	$fieldToolTipsadmin_members["Russian"]["email"] = "";
	$fieldLabelsadmin_members["Russian"]["fullname"] = "?????? ???";
	$fieldToolTipsadmin_members["Russian"]["fullname"] = "";
	$fieldLabelsadmin_members["Russian"]["groupid"] = "GroupID";
	$fieldToolTipsadmin_members["Russian"]["groupid"] = "";
	$fieldLabelsadmin_members["Russian"]["active"] = "????????";
	$fieldToolTipsadmin_members["Russian"]["active"] = "";
	if (count($fieldToolTipsadmin_members["Russian"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsadmin_members["Spanish"] = array();
	$fieldToolTipsadmin_members["Spanish"] = array();
	$pageTitlesadmin_members["Spanish"] = array();
	$fieldLabelsadmin_members["Spanish"]["ID"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipsadmin_members["Spanish"]["ID"] = "";
	$fieldLabelsadmin_members["Spanish"]["username"] = "Nombre de usuario";
	$fieldToolTipsadmin_members["Spanish"]["username"] = "";
	$fieldLabelsadmin_members["Spanish"]["password"] = "Contraseña";
	$fieldToolTipsadmin_members["Spanish"]["password"] = "";
	$fieldLabelsadmin_members["Spanish"]["email"] = "Email";
	$fieldToolTipsadmin_members["Spanish"]["email"] = "";
	$fieldLabelsadmin_members["Spanish"]["fullname"] = "Nombre completo";
	$fieldToolTipsadmin_members["Spanish"]["fullname"] = "";
	$fieldLabelsadmin_members["Spanish"]["groupid"] = "Groupid";
	$fieldToolTipsadmin_members["Spanish"]["groupid"] = "";
	$fieldLabelsadmin_members["Spanish"]["active"] = "Activo";
	$fieldToolTipsadmin_members["Spanish"]["active"] = "";
	if (count($fieldToolTipsadmin_members["Spanish"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadmin_members[""] = array();
	$fieldToolTipsadmin_members[""] = array();
	$pageTitlesadmin_members[""] = array();
	if (count($fieldToolTipsadmin_members[""]))
		$tdataadmin_members[".isUseToolTips"] = true;
}


	$tdataadmin_members[".NCSearch"] = true;



$tdataadmin_members[".shortTableName"] = "admin_members";
$tdataadmin_members[".nSecOptions"] = 0;
$tdataadmin_members[".recsPerRowPrint"] = 1;
$tdataadmin_members[".mainTableOwnerID"] = "";
$tdataadmin_members[".moveNext"] = 1;
$tdataadmin_members[".entityType"] = 1;

$tdataadmin_members[".strOriginalTableName"] = "carrierusers";

		 	  $tdataadmin_members[".hasEncryptedFields"] = true;




$tdataadmin_members[".showAddInPopup"] = false;

$tdataadmin_members[".showEditInPopup"] = false;

$tdataadmin_members[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_members[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_members[".fieldsForRegister"] = array();

$tdataadmin_members[".listAjax"] = false;

	$tdataadmin_members[".audit"] = false;

	$tdataadmin_members[".locking"] = false;












$tdataadmin_members[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataadmin_members[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataadmin_members[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataadmin_members[".searchSaving"] = false;
//

$tdataadmin_members[".showSearchPanel"] = true;
		$tdataadmin_members[".flexibleSearch"] = true;

$tdataadmin_members[".isUseAjaxSuggest"] = true;

$tdataadmin_members[".rowHighlite"] = true;



$tdataadmin_members[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_members[".isUseTimeForSearch"] = false;





$tdataadmin_members[".allSearchFields"] = array();
$tdataadmin_members[".filterFields"] = array();
$tdataadmin_members[".requiredSearchFields"] = array();

$tdataadmin_members[".allSearchFields"][] = "ID";
	$tdataadmin_members[".allSearchFields"][] = "username";
	$tdataadmin_members[".allSearchFields"][] = "password";
	$tdataadmin_members[".allSearchFields"][] = "email";
	$tdataadmin_members[".allSearchFields"][] = "fullname";
	$tdataadmin_members[".allSearchFields"][] = "groupid";
	$tdataadmin_members[".allSearchFields"][] = "active";
	

$tdataadmin_members[".googleLikeFields"] = array();
$tdataadmin_members[".googleLikeFields"][] = "ID";
$tdataadmin_members[".googleLikeFields"][] = "username";
$tdataadmin_members[".googleLikeFields"][] = "password";
$tdataadmin_members[".googleLikeFields"][] = "email";
$tdataadmin_members[".googleLikeFields"][] = "fullname";
$tdataadmin_members[".googleLikeFields"][] = "groupid";
$tdataadmin_members[".googleLikeFields"][] = "active";


$tdataadmin_members[".advSearchFields"] = array();
$tdataadmin_members[".advSearchFields"][] = "ID";
$tdataadmin_members[".advSearchFields"][] = "username";
$tdataadmin_members[".advSearchFields"][] = "password";
$tdataadmin_members[".advSearchFields"][] = "email";
$tdataadmin_members[".advSearchFields"][] = "fullname";
$tdataadmin_members[".advSearchFields"][] = "groupid";
$tdataadmin_members[".advSearchFields"][] = "active";

$tdataadmin_members[".tableType"] = "list";

$tdataadmin_members[".printerPageOrientation"] = 0;
$tdataadmin_members[".nPrinterPageScale"] = 100;

$tdataadmin_members[".nPrinterSplitRecords"] = 40;

$tdataadmin_members[".nPrinterPDFSplitRecords"] = 40;



$tdataadmin_members[".geocodingEnabled"] = false;





$tdataadmin_members[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataadmin_members[".pageSize"] = 20;

$tdataadmin_members[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_members[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_members[".orderindexes"] = array();

$tdataadmin_members[".sqlHead"] = "SELECT ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active";
$tdataadmin_members[".sqlFrom"] = "FROM carrierusers";
$tdataadmin_members[".sqlWhereExpr"] = "";
$tdataadmin_members[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdataadmin_members[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_members[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_members[".highlightSearchResults"] = true;

$tableKeysadmin_members = array();
$tableKeysadmin_members[] = "ID";
$tdataadmin_members[".Keys"] = $tableKeysadmin_members;

$tdataadmin_members[".listFields"] = array();
$tdataadmin_members[".listFields"][] = "ID";
$tdataadmin_members[".listFields"][] = "username";
$tdataadmin_members[".listFields"][] = "password";
$tdataadmin_members[".listFields"][] = "email";
$tdataadmin_members[".listFields"][] = "fullname";
$tdataadmin_members[".listFields"][] = "groupid";
$tdataadmin_members[".listFields"][] = "active";

$tdataadmin_members[".hideMobileList"] = array();


$tdataadmin_members[".viewFields"] = array();
$tdataadmin_members[".viewFields"][] = "ID";
$tdataadmin_members[".viewFields"][] = "username";
$tdataadmin_members[".viewFields"][] = "password";
$tdataadmin_members[".viewFields"][] = "email";
$tdataadmin_members[".viewFields"][] = "fullname";
$tdataadmin_members[".viewFields"][] = "groupid";
$tdataadmin_members[".viewFields"][] = "active";

$tdataadmin_members[".addFields"] = array();
$tdataadmin_members[".addFields"][] = "username";
$tdataadmin_members[".addFields"][] = "password";
$tdataadmin_members[".addFields"][] = "email";
$tdataadmin_members[".addFields"][] = "fullname";
$tdataadmin_members[".addFields"][] = "groupid";
$tdataadmin_members[".addFields"][] = "active";

$tdataadmin_members[".masterListFields"] = array();
$tdataadmin_members[".masterListFields"][] = "ID";
$tdataadmin_members[".masterListFields"][] = "username";
$tdataadmin_members[".masterListFields"][] = "password";
$tdataadmin_members[".masterListFields"][] = "email";
$tdataadmin_members[".masterListFields"][] = "fullname";
$tdataadmin_members[".masterListFields"][] = "groupid";
$tdataadmin_members[".masterListFields"][] = "active";

$tdataadmin_members[".inlineAddFields"] = array();
$tdataadmin_members[".inlineAddFields"][] = "username";
$tdataadmin_members[".inlineAddFields"][] = "password";
$tdataadmin_members[".inlineAddFields"][] = "email";
$tdataadmin_members[".inlineAddFields"][] = "fullname";
$tdataadmin_members[".inlineAddFields"][] = "groupid";
$tdataadmin_members[".inlineAddFields"][] = "active";

$tdataadmin_members[".editFields"] = array();
$tdataadmin_members[".editFields"][] = "username";
$tdataadmin_members[".editFields"][] = "password";
$tdataadmin_members[".editFields"][] = "email";
$tdataadmin_members[".editFields"][] = "fullname";
$tdataadmin_members[".editFields"][] = "groupid";
$tdataadmin_members[".editFields"][] = "active";

$tdataadmin_members[".inlineEditFields"] = array();
$tdataadmin_members[".inlineEditFields"][] = "username";
$tdataadmin_members[".inlineEditFields"][] = "password";
$tdataadmin_members[".inlineEditFields"][] = "email";
$tdataadmin_members[".inlineEditFields"][] = "fullname";
$tdataadmin_members[".inlineEditFields"][] = "groupid";
$tdataadmin_members[".inlineEditFields"][] = "active";

$tdataadmin_members[".updateSelectedFields"] = array();
$tdataadmin_members[".updateSelectedFields"][] = "username";
$tdataadmin_members[".updateSelectedFields"][] = "password";
$tdataadmin_members[".updateSelectedFields"][] = "email";
$tdataadmin_members[".updateSelectedFields"][] = "fullname";
$tdataadmin_members[".updateSelectedFields"][] = "groupid";
$tdataadmin_members[".updateSelectedFields"][] = "active";


$tdataadmin_members[".exportFields"] = array();
$tdataadmin_members[".exportFields"][] = "ID";
$tdataadmin_members[".exportFields"][] = "username";
$tdataadmin_members[".exportFields"][] = "password";
$tdataadmin_members[".exportFields"][] = "email";
$tdataadmin_members[".exportFields"][] = "fullname";
$tdataadmin_members[".exportFields"][] = "groupid";
$tdataadmin_members[".exportFields"][] = "active";

$tdataadmin_members[".importFields"] = array();
$tdataadmin_members[".importFields"][] = "ID";
$tdataadmin_members[".importFields"][] = "username";
$tdataadmin_members[".importFields"][] = "password";
$tdataadmin_members[".importFields"][] = "email";
$tdataadmin_members[".importFields"][] = "fullname";
$tdataadmin_members[".importFields"][] = "groupid";
$tdataadmin_members[".importFields"][] = "active";

$tdataadmin_members[".printFields"] = array();
$tdataadmin_members[".printFields"][] = "ID";
$tdataadmin_members[".printFields"][] = "username";
$tdataadmin_members[".printFields"][] = "password";
$tdataadmin_members[".printFields"][] = "email";
$tdataadmin_members[".printFields"][] = "fullname";
$tdataadmin_members[".printFields"][] = "groupid";
$tdataadmin_members[".printFields"][] = "active";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "carrierusers";
	$fdata["Label"] = GetFieldLabel("admin_members","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdataadmin_members["ID"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "carrierusers";
	$fdata["Label"] = GetFieldLabel("admin_members","username");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

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




	$tdataadmin_members["username"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "carrierusers";
	$fdata["Label"] = GetFieldLabel("admin_members","password");
	$fdata["FieldType"] = 200;

	
	
	
														$fdata["bIsEncrypted"] = true;

		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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

	$edata = array("EditFormat" => "Password");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
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




	$tdataadmin_members["password"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "carrierusers";
	$fdata["Label"] = GetFieldLabel("admin_members","email");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

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




	$tdataadmin_members["email"] = $fdata;
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "carrierusers";
	$fdata["Label"] = GetFieldLabel("admin_members","fullname");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

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




	$tdataadmin_members["fullname"] = $fdata;
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "carrierusers";
	$fdata["Label"] = GetFieldLabel("admin_members","groupid");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

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




	$tdataadmin_members["groupid"] = $fdata;
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "carrierusers";
	$fdata["Label"] = GetFieldLabel("admin_members","active");
	$fdata["FieldType"] = 3;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

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




	$tdataadmin_members["active"] = $fdata;


$tables_data["admin_members"]=&$tdataadmin_members;
$field_labels["admin_members"] = &$fieldLabelsadmin_members;
$fieldToolTips["admin_members"] = &$fieldToolTipsadmin_members;
$page_titles["admin_members"] = &$pageTitlesadmin_members;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_members"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["admin_members"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_members()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active";
$proto0["m_strFrom"] = "FROM carrierusers";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
					
;
	$proto0["cipherer"] = new RunnerCipherer("admin_members");
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
	"m_srcTableName" => "admin_members"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "admin_members";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "carrierusers",
	"m_srcTableName" => "admin_members"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "admin_members";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "carrierusers",
	"m_srcTableName" => "admin_members"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "admin_members";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "carrierusers",
	"m_srcTableName" => "admin_members"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "admin_members";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "carrierusers",
	"m_srcTableName" => "admin_members"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "admin_members";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "carrierusers",
	"m_srcTableName" => "admin_members"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "admin_members";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "carrierusers",
	"m_srcTableName" => "admin_members"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "admin_members";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "carrierusers";
$proto21["m_srcTableName"] = "admin_members";
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
$proto20["m_srcTableName"] = "admin_members";
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
$proto0["m_srcTableName"]="admin_members";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_members = createSqlQuery_admin_members();


	
					
;

					 $queryData_admin_members->m_fieldlist[2]->m_isEncrypted = true;
				

$tdataadmin_members[".sqlquery"] = $queryData_admin_members;

$tableEvents["admin_members"] = new eventsBase;
$tdataadmin_members[".hasEvents"] = false;

?>