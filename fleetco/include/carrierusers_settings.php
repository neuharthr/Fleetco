<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacarrierusers = array();
	$tdatacarrierusers[".truncateText"] = true;
	$tdatacarrierusers[".NumberOfChars"] = 80;
	$tdatacarrierusers[".ShortName"] = "carrierusers";
	$tdatacarrierusers[".OwnerID"] = "";
	$tdatacarrierusers[".OriginalTable"] = "carrierusers";

//	field labels
$fieldLabelscarrierusers = array();
$fieldToolTipscarrierusers = array();
$pageTitlescarrierusers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscarrierusers["English"] = array();
	$fieldToolTipscarrierusers["English"] = array();
	$pageTitlescarrierusers["English"] = array();
	$fieldLabelscarrierusers["English"]["ID"] = "ID";
	$fieldToolTipscarrierusers["English"]["ID"] = "";
	$fieldLabelscarrierusers["English"]["username"] = "Username";
	$fieldToolTipscarrierusers["English"]["username"] = "";
	$fieldLabelscarrierusers["English"]["password"] = "Password";
	$fieldToolTipscarrierusers["English"]["password"] = "";
	$fieldLabelscarrierusers["English"]["email"] = "Email";
	$fieldToolTipscarrierusers["English"]["email"] = "";
	$fieldLabelscarrierusers["English"]["fullname"] = "Fullname";
	$fieldToolTipscarrierusers["English"]["fullname"] = "";
	$fieldLabelscarrierusers["English"]["groupid"] = "Groupid";
	$fieldToolTipscarrierusers["English"]["groupid"] = "";
	$fieldLabelscarrierusers["English"]["active"] = "Active";
	$fieldToolTipscarrierusers["English"]["active"] = "";
	if (count($fieldToolTipscarrierusers["English"]))
		$tdatacarrierusers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelscarrierusers["Afrikaans"] = array();
	$fieldToolTipscarrierusers["Afrikaans"] = array();
	$pageTitlescarrierusers["Afrikaans"] = array();
	$fieldLabelscarrierusers["Afrikaans"]["ID"] = "ID";
	$fieldToolTipscarrierusers["Afrikaans"]["ID"] = "";
	$fieldLabelscarrierusers["Afrikaans"]["username"] = "Gebruikersnaam";
	$fieldToolTipscarrierusers["Afrikaans"]["username"] = "";
	$fieldLabelscarrierusers["Afrikaans"]["password"] = "wagwoord";
	$fieldToolTipscarrierusers["Afrikaans"]["password"] = "";
	$fieldLabelscarrierusers["Afrikaans"]["email"] = "e-pos";
	$fieldToolTipscarrierusers["Afrikaans"]["email"] = "";
	$fieldLabelscarrierusers["Afrikaans"]["fullname"] = "Volle naam";
	$fieldToolTipscarrierusers["Afrikaans"]["fullname"] = "";
	$fieldLabelscarrierusers["Afrikaans"]["groupid"] = "groepid";
	$fieldToolTipscarrierusers["Afrikaans"]["groupid"] = "";
	$fieldLabelscarrierusers["Afrikaans"]["active"] = "aktiewe";
	$fieldToolTipscarrierusers["Afrikaans"]["active"] = "";
	if (count($fieldToolTipscarrierusers["Afrikaans"]))
		$tdatacarrierusers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelscarrierusers["Arabic"] = array();
	$fieldToolTipscarrierusers["Arabic"] = array();
	$pageTitlescarrierusers["Arabic"] = array();
	$fieldLabelscarrierusers["Arabic"]["ID"] = "???? ?????";
	$fieldToolTipscarrierusers["Arabic"]["ID"] = "";
	$fieldLabelscarrierusers["Arabic"]["username"] = "??? ????????";
	$fieldToolTipscarrierusers["Arabic"]["username"] = "";
	$fieldLabelscarrierusers["Arabic"]["password"] = "???? ????";
	$fieldToolTipscarrierusers["Arabic"]["password"] = "";
	$fieldLabelscarrierusers["Arabic"]["email"] = "?????? ??????????";
	$fieldToolTipscarrierusers["Arabic"]["email"] = "";
	$fieldLabelscarrierusers["Arabic"]["fullname"] = "????? ??????";
	$fieldToolTipscarrierusers["Arabic"]["fullname"] = "";
	$fieldLabelscarrierusers["Arabic"]["groupid"] = "Groupid";
	$fieldToolTipscarrierusers["Arabic"]["groupid"] = "";
	$fieldLabelscarrierusers["Arabic"]["active"] = "???";
	$fieldToolTipscarrierusers["Arabic"]["active"] = "";
	if (count($fieldToolTipscarrierusers["Arabic"]))
		$tdatacarrierusers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelscarrierusers["Chinese"] = array();
	$fieldToolTipscarrierusers["Chinese"] = array();
	$pageTitlescarrierusers["Chinese"] = array();
	$fieldLabelscarrierusers["Chinese"]["ID"] = "ID";
	$fieldToolTipscarrierusers["Chinese"]["ID"] = "";
	$fieldLabelscarrierusers["Chinese"]["username"] = "???";
	$fieldToolTipscarrierusers["Chinese"]["username"] = "";
	$fieldLabelscarrierusers["Chinese"]["password"] = "??";
	$fieldToolTipscarrierusers["Chinese"]["password"] = "";
	$fieldLabelscarrierusers["Chinese"]["email"] = "????";
	$fieldToolTipscarrierusers["Chinese"]["email"] = "";
	$fieldLabelscarrierusers["Chinese"]["fullname"] = "??";
	$fieldToolTipscarrierusers["Chinese"]["fullname"] = "";
	$fieldLabelscarrierusers["Chinese"]["groupid"] = "Groupid";
	$fieldToolTipscarrierusers["Chinese"]["groupid"] = "";
	$fieldLabelscarrierusers["Chinese"]["active"] = "??";
	$fieldToolTipscarrierusers["Chinese"]["active"] = "";
	if (count($fieldToolTipscarrierusers["Chinese"]))
		$tdatacarrierusers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelscarrierusers["French"] = array();
	$fieldToolTipscarrierusers["French"] = array();
	$pageTitlescarrierusers["French"] = array();
	$fieldLabelscarrierusers["French"]["ID"] = "ID";
	$fieldToolTipscarrierusers["French"]["ID"] = "";
	$fieldLabelscarrierusers["French"]["username"] = "Nom d'utilisateur";
	$fieldToolTipscarrierusers["French"]["username"] = "";
	$fieldLabelscarrierusers["French"]["password"] = "Mot de passe";
	$fieldToolTipscarrierusers["French"]["password"] = "";
	$fieldLabelscarrierusers["French"]["email"] = "Email";
	$fieldToolTipscarrierusers["French"]["email"] = "";
	$fieldLabelscarrierusers["French"]["fullname"] = "Nom complet";
	$fieldToolTipscarrierusers["French"]["fullname"] = "";
	$fieldLabelscarrierusers["French"]["groupid"] = "Groupid";
	$fieldToolTipscarrierusers["French"]["groupid"] = "";
	$fieldLabelscarrierusers["French"]["active"] = "actif";
	$fieldToolTipscarrierusers["French"]["active"] = "";
	if (count($fieldToolTipscarrierusers["French"]))
		$tdatacarrierusers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelscarrierusers["German"] = array();
	$fieldToolTipscarrierusers["German"] = array();
	$pageTitlescarrierusers["German"] = array();
	$fieldLabelscarrierusers["German"]["ID"] = "ICH WÜRDE";
	$fieldToolTipscarrierusers["German"]["ID"] = "";
	$fieldLabelscarrierusers["German"]["username"] = "Benutzername";
	$fieldToolTipscarrierusers["German"]["username"] = "";
	$fieldLabelscarrierusers["German"]["password"] = "Passwort";
	$fieldToolTipscarrierusers["German"]["password"] = "";
	$fieldLabelscarrierusers["German"]["email"] = "Email";
	$fieldToolTipscarrierusers["German"]["email"] = "";
	$fieldLabelscarrierusers["German"]["fullname"] = "Vollständiger Name";
	$fieldToolTipscarrierusers["German"]["fullname"] = "";
	$fieldLabelscarrierusers["German"]["groupid"] = "Groupid";
	$fieldToolTipscarrierusers["German"]["groupid"] = "";
	$fieldLabelscarrierusers["German"]["active"] = "Aktiv";
	$fieldToolTipscarrierusers["German"]["active"] = "";
	if (count($fieldToolTipscarrierusers["German"]))
		$tdatacarrierusers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelscarrierusers["Italian"] = array();
	$fieldToolTipscarrierusers["Italian"] = array();
	$pageTitlescarrierusers["Italian"] = array();
	$fieldLabelscarrierusers["Italian"]["ID"] = "ID";
	$fieldToolTipscarrierusers["Italian"]["ID"] = "";
	$fieldLabelscarrierusers["Italian"]["username"] = "Nome utente";
	$fieldToolTipscarrierusers["Italian"]["username"] = "";
	$fieldLabelscarrierusers["Italian"]["password"] = "parola d'ordine";
	$fieldToolTipscarrierusers["Italian"]["password"] = "";
	$fieldLabelscarrierusers["Italian"]["email"] = "E-mail";
	$fieldToolTipscarrierusers["Italian"]["email"] = "";
	$fieldLabelscarrierusers["Italian"]["fullname"] = "Nome e cognome";
	$fieldToolTipscarrierusers["Italian"]["fullname"] = "";
	$fieldLabelscarrierusers["Italian"]["groupid"] = "groupid";
	$fieldToolTipscarrierusers["Italian"]["groupid"] = "";
	$fieldLabelscarrierusers["Italian"]["active"] = "Attivo";
	$fieldToolTipscarrierusers["Italian"]["active"] = "";
	if (count($fieldToolTipscarrierusers["Italian"]))
		$tdatacarrierusers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelscarrierusers["Russian"] = array();
	$fieldToolTipscarrierusers["Russian"] = array();
	$pageTitlescarrierusers["Russian"] = array();
	$fieldLabelscarrierusers["Russian"]["ID"] = "? ??";
	$fieldToolTipscarrierusers["Russian"]["ID"] = "";
	$fieldLabelscarrierusers["Russian"]["username"] = "??? ????????????";
	$fieldToolTipscarrierusers["Russian"]["username"] = "";
	$fieldLabelscarrierusers["Russian"]["password"] = "??????";
	$fieldToolTipscarrierusers["Russian"]["password"] = "";
	$fieldLabelscarrierusers["Russian"]["email"] = "??. ?????";
	$fieldToolTipscarrierusers["Russian"]["email"] = "";
	$fieldLabelscarrierusers["Russian"]["fullname"] = "?????? ???";
	$fieldToolTipscarrierusers["Russian"]["fullname"] = "";
	$fieldLabelscarrierusers["Russian"]["groupid"] = "GroupID";
	$fieldToolTipscarrierusers["Russian"]["groupid"] = "";
	$fieldLabelscarrierusers["Russian"]["active"] = "????????";
	$fieldToolTipscarrierusers["Russian"]["active"] = "";
	if (count($fieldToolTipscarrierusers["Russian"]))
		$tdatacarrierusers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscarrierusers["Spanish"] = array();
	$fieldToolTipscarrierusers["Spanish"] = array();
	$pageTitlescarrierusers["Spanish"] = array();
	$fieldLabelscarrierusers["Spanish"]["ID"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipscarrierusers["Spanish"]["ID"] = "";
	$fieldLabelscarrierusers["Spanish"]["username"] = "Nombre de usuario";
	$fieldToolTipscarrierusers["Spanish"]["username"] = "";
	$fieldLabelscarrierusers["Spanish"]["password"] = "Contraseña";
	$fieldToolTipscarrierusers["Spanish"]["password"] = "";
	$fieldLabelscarrierusers["Spanish"]["email"] = "Email";
	$fieldToolTipscarrierusers["Spanish"]["email"] = "";
	$fieldLabelscarrierusers["Spanish"]["fullname"] = "Nombre completo";
	$fieldToolTipscarrierusers["Spanish"]["fullname"] = "";
	$fieldLabelscarrierusers["Spanish"]["groupid"] = "Groupid";
	$fieldToolTipscarrierusers["Spanish"]["groupid"] = "";
	$fieldLabelscarrierusers["Spanish"]["active"] = "Activo";
	$fieldToolTipscarrierusers["Spanish"]["active"] = "";
	if (count($fieldToolTipscarrierusers["Spanish"]))
		$tdatacarrierusers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscarrierusers[""] = array();
	$fieldToolTipscarrierusers[""] = array();
	$pageTitlescarrierusers[""] = array();
	if (count($fieldToolTipscarrierusers[""]))
		$tdatacarrierusers[".isUseToolTips"] = true;
}


	$tdatacarrierusers[".NCSearch"] = true;



$tdatacarrierusers[".shortTableName"] = "carrierusers";
$tdatacarrierusers[".nSecOptions"] = 0;
$tdatacarrierusers[".recsPerRowPrint"] = 1;
$tdatacarrierusers[".mainTableOwnerID"] = "";
$tdatacarrierusers[".moveNext"] = 1;
$tdatacarrierusers[".entityType"] = 0;

$tdatacarrierusers[".strOriginalTableName"] = "carrierusers";

		 	  $tdatacarrierusers[".hasEncryptedFields"] = true;




$tdatacarrierusers[".showAddInPopup"] = false;

$tdatacarrierusers[".showEditInPopup"] = false;

$tdatacarrierusers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacarrierusers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacarrierusers[".fieldsForRegister"] = array();

	$tdatacarrierusers[".listAjax"] = true;

	$tdatacarrierusers[".audit"] = false;

	$tdatacarrierusers[".locking"] = false;












$tdatacarrierusers[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacarrierusers[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatacarrierusers[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatacarrierusers[".searchSaving"] = false;
//

$tdatacarrierusers[".showSearchPanel"] = true;
		$tdatacarrierusers[".flexibleSearch"] = true;

$tdatacarrierusers[".isUseAjaxSuggest"] = true;

$tdatacarrierusers[".rowHighlite"] = true;



$tdatacarrierusers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacarrierusers[".isUseTimeForSearch"] = false;





$tdatacarrierusers[".allSearchFields"] = array();
$tdatacarrierusers[".filterFields"] = array();
$tdatacarrierusers[".requiredSearchFields"] = array();



$tdatacarrierusers[".googleLikeFields"] = array();
$tdatacarrierusers[".googleLikeFields"][] = "ID";
$tdatacarrierusers[".googleLikeFields"][] = "username";
$tdatacarrierusers[".googleLikeFields"][] = "password";
$tdatacarrierusers[".googleLikeFields"][] = "email";
$tdatacarrierusers[".googleLikeFields"][] = "fullname";
$tdatacarrierusers[".googleLikeFields"][] = "groupid";
$tdatacarrierusers[".googleLikeFields"][] = "active";



$tdatacarrierusers[".tableType"] = "list";

$tdatacarrierusers[".printerPageOrientation"] = 0;
$tdatacarrierusers[".nPrinterPageScale"] = 100;

$tdatacarrierusers[".nPrinterSplitRecords"] = 40;

$tdatacarrierusers[".nPrinterPDFSplitRecords"] = 40;



$tdatacarrierusers[".geocodingEnabled"] = false;





$tdatacarrierusers[".listGridLayout"] = 3;


$tdatacarrierusers[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatacarrierusers[".pageSize"] = 20;

$tdatacarrierusers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacarrierusers[".strOrderBy"] = $tstrOrderBy;

$tdatacarrierusers[".orderindexes"] = array();

$tdatacarrierusers[".sqlHead"] = "SELECT ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active";
$tdatacarrierusers[".sqlFrom"] = "FROM carrierusers";
$tdatacarrierusers[".sqlWhereExpr"] = "";
$tdatacarrierusers[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatacarrierusers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacarrierusers[".arrGroupsPerPage"] = $arrGPP;

$tdatacarrierusers[".highlightSearchResults"] = true;

$tableKeyscarrierusers = array();
$tableKeyscarrierusers[] = "ID";
$tdatacarrierusers[".Keys"] = $tableKeyscarrierusers;

$tdatacarrierusers[".listFields"] = array();

$tdatacarrierusers[".hideMobileList"] = array();


$tdatacarrierusers[".viewFields"] = array();

$tdatacarrierusers[".addFields"] = array();

$tdatacarrierusers[".masterListFields"] = array();
$tdatacarrierusers[".masterListFields"][] = "ID";
$tdatacarrierusers[".masterListFields"][] = "username";
$tdatacarrierusers[".masterListFields"][] = "password";
$tdatacarrierusers[".masterListFields"][] = "email";
$tdatacarrierusers[".masterListFields"][] = "fullname";
$tdatacarrierusers[".masterListFields"][] = "groupid";
$tdatacarrierusers[".masterListFields"][] = "active";

$tdatacarrierusers[".inlineAddFields"] = array();

$tdatacarrierusers[".editFields"] = array();

$tdatacarrierusers[".inlineEditFields"] = array();

$tdatacarrierusers[".updateSelectedFields"] = array();


$tdatacarrierusers[".exportFields"] = array();

$tdatacarrierusers[".importFields"] = array();

$tdatacarrierusers[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "carrierusers";
	$fdata["Label"] = GetFieldLabel("carrierusers","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
			
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








	$tdatacarrierusers["ID"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "carrierusers";
	$fdata["Label"] = GetFieldLabel("carrierusers","username");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
			
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








	$tdatacarrierusers["username"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "carrierusers";
	$fdata["Label"] = GetFieldLabel("carrierusers","password");
	$fdata["FieldType"] = 200;

	
	
	
														$fdata["bIsEncrypted"] = true;

	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
			
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








	$tdatacarrierusers["password"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "carrierusers";
	$fdata["Label"] = GetFieldLabel("carrierusers","email");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
			
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








	$tdatacarrierusers["email"] = $fdata;
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "carrierusers";
	$fdata["Label"] = GetFieldLabel("carrierusers","fullname");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
			
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








	$tdatacarrierusers["fullname"] = $fdata;
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "carrierusers";
	$fdata["Label"] = GetFieldLabel("carrierusers","groupid");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "groupid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
			
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








	$tdatacarrierusers["groupid"] = $fdata;
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "carrierusers";
	$fdata["Label"] = GetFieldLabel("carrierusers","active");
	$fdata["FieldType"] = 3;

	
	
	
										
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
			
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








	$tdatacarrierusers["active"] = $fdata;


$tables_data["carrierusers"]=&$tdatacarrierusers;
$field_labels["carrierusers"] = &$fieldLabelscarrierusers;
$fieldToolTips["carrierusers"] = &$fieldToolTipscarrierusers;
$page_titles["carrierusers"] = &$pageTitlescarrierusers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["carrierusers"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["carrierusers"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_carrierusers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active";
$proto0["m_strFrom"] = "FROM carrierusers";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
					
;
	$proto0["cipherer"] = new RunnerCipherer("carrierusers");
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
	"m_srcTableName" => "carrierusers"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "carrierusers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "carrierusers",
	"m_srcTableName" => "carrierusers"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "carrierusers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "carrierusers",
	"m_srcTableName" => "carrierusers"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "carrierusers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "carrierusers",
	"m_srcTableName" => "carrierusers"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "carrierusers";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "carrierusers",
	"m_srcTableName" => "carrierusers"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "carrierusers";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "carrierusers",
	"m_srcTableName" => "carrierusers"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "carrierusers";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "carrierusers",
	"m_srcTableName" => "carrierusers"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "carrierusers";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "carrierusers";
$proto21["m_srcTableName"] = "carrierusers";
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
$proto20["m_srcTableName"] = "carrierusers";
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
$proto0["m_srcTableName"]="carrierusers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_carrierusers = createSqlQuery_carrierusers();


	
					
;

					 $queryData_carrierusers->m_fieldlist[2]->m_isEncrypted = true;
				

$tdatacarrierusers[".sqlquery"] = $queryData_carrierusers;

$tableEvents["carrierusers"] = new eventsBase;
$tdatacarrierusers[".hasEvents"] = false;

?>