<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainsurancecompany = array();
	$tdatainsurancecompany[".truncateText"] = true;
	$tdatainsurancecompany[".NumberOfChars"] = 80;
	$tdatainsurancecompany[".ShortName"] = "insurancecompany";
	$tdatainsurancecompany[".OwnerID"] = "";
	$tdatainsurancecompany[".OriginalTable"] = "insurancecompany";

//	field labels
$fieldLabelsinsurancecompany = array();
$fieldToolTipsinsurancecompany = array();
$pageTitlesinsurancecompany = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinsurancecompany["English"] = array();
	$fieldToolTipsinsurancecompany["English"] = array();
	$pageTitlesinsurancecompany["English"] = array();
	$fieldLabelsinsurancecompany["English"]["Id"] = "ID";
	$fieldToolTipsinsurancecompany["English"]["Id"] = "";
	$fieldLabelsinsurancecompany["English"]["Name"] = "Name";
	$fieldToolTipsinsurancecompany["English"]["Name"] = "";
	$fieldLabelsinsurancecompany["English"]["ContactName"] = "Contact Name";
	$fieldToolTipsinsurancecompany["English"]["ContactName"] = "";
	$fieldLabelsinsurancecompany["English"]["ContactNo"] = "Contact No";
	$fieldToolTipsinsurancecompany["English"]["ContactNo"] = "";
	if (count($fieldToolTipsinsurancecompany["English"]))
		$tdatainsurancecompany[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsinsurancecompany["Afrikaans"] = array();
	$fieldToolTipsinsurancecompany["Afrikaans"] = array();
	$pageTitlesinsurancecompany["Afrikaans"] = array();
	$fieldLabelsinsurancecompany["Afrikaans"]["Id"] = "ID";
	$fieldToolTipsinsurancecompany["Afrikaans"]["Id"] = "";
	$fieldLabelsinsurancecompany["Afrikaans"]["Name"] = "naam";
	$fieldToolTipsinsurancecompany["Afrikaans"]["Name"] = "";
	$fieldLabelsinsurancecompany["Afrikaans"]["ContactName"] = "Kontak naam";
	$fieldToolTipsinsurancecompany["Afrikaans"]["ContactName"] = "";
	$fieldLabelsinsurancecompany["Afrikaans"]["ContactNo"] = "Kontak Geen";
	$fieldToolTipsinsurancecompany["Afrikaans"]["ContactNo"] = "";
	if (count($fieldToolTipsinsurancecompany["Afrikaans"]))
		$tdatainsurancecompany[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsinsurancecompany["Arabic"] = array();
	$fieldToolTipsinsurancecompany["Arabic"] = array();
	$pageTitlesinsurancecompany["Arabic"] = array();
	$fieldLabelsinsurancecompany["Arabic"]["Id"] = "???? ?????";
	$fieldToolTipsinsurancecompany["Arabic"]["Id"] = "";
	$fieldLabelsinsurancecompany["Arabic"]["Name"] = "???";
	$fieldToolTipsinsurancecompany["Arabic"]["Name"] = "";
	$fieldLabelsinsurancecompany["Arabic"]["ContactName"] = "??? ??? ???????";
	$fieldToolTipsinsurancecompany["Arabic"]["ContactName"] = "";
	$fieldLabelsinsurancecompany["Arabic"]["ContactNo"] = "??? ???????";
	$fieldToolTipsinsurancecompany["Arabic"]["ContactNo"] = "";
	if (count($fieldToolTipsinsurancecompany["Arabic"]))
		$tdatainsurancecompany[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsinsurancecompany["Chinese"] = array();
	$fieldToolTipsinsurancecompany["Chinese"] = array();
	$pageTitlesinsurancecompany["Chinese"] = array();
	$fieldLabelsinsurancecompany["Chinese"]["Id"] = "ID";
	$fieldToolTipsinsurancecompany["Chinese"]["Id"] = "";
	$fieldLabelsinsurancecompany["Chinese"]["Name"] = "??";
	$fieldToolTipsinsurancecompany["Chinese"]["Name"] = "";
	$fieldLabelsinsurancecompany["Chinese"]["ContactName"] = "?????";
	$fieldToolTipsinsurancecompany["Chinese"]["ContactName"] = "";
	$fieldLabelsinsurancecompany["Chinese"]["ContactNo"] = "????";
	$fieldToolTipsinsurancecompany["Chinese"]["ContactNo"] = "";
	if (count($fieldToolTipsinsurancecompany["Chinese"]))
		$tdatainsurancecompany[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsinsurancecompany["French"] = array();
	$fieldToolTipsinsurancecompany["French"] = array();
	$pageTitlesinsurancecompany["French"] = array();
	$fieldLabelsinsurancecompany["French"]["Id"] = "ID";
	$fieldToolTipsinsurancecompany["French"]["Id"] = "";
	$fieldLabelsinsurancecompany["French"]["Name"] = "prénom";
	$fieldToolTipsinsurancecompany["French"]["Name"] = "";
	$fieldLabelsinsurancecompany["French"]["ContactName"] = "Nom du contact";
	$fieldToolTipsinsurancecompany["French"]["ContactName"] = "";
	$fieldLabelsinsurancecompany["French"]["ContactNo"] = "Contact Non";
	$fieldToolTipsinsurancecompany["French"]["ContactNo"] = "";
	if (count($fieldToolTipsinsurancecompany["French"]))
		$tdatainsurancecompany[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsinsurancecompany["German"] = array();
	$fieldToolTipsinsurancecompany["German"] = array();
	$pageTitlesinsurancecompany["German"] = array();
	$fieldLabelsinsurancecompany["German"]["Id"] = "ICH WÜRDE";
	$fieldToolTipsinsurancecompany["German"]["Id"] = "";
	$fieldLabelsinsurancecompany["German"]["Name"] = "Name";
	$fieldToolTipsinsurancecompany["German"]["Name"] = "";
	$fieldLabelsinsurancecompany["German"]["ContactName"] = "Kontaktname";
	$fieldToolTipsinsurancecompany["German"]["ContactName"] = "";
	$fieldLabelsinsurancecompany["German"]["ContactNo"] = "Kontakt-Nr";
	$fieldToolTipsinsurancecompany["German"]["ContactNo"] = "";
	if (count($fieldToolTipsinsurancecompany["German"]))
		$tdatainsurancecompany[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsinsurancecompany["Italian"] = array();
	$fieldToolTipsinsurancecompany["Italian"] = array();
	$pageTitlesinsurancecompany["Italian"] = array();
	$fieldLabelsinsurancecompany["Italian"]["Id"] = "ID";
	$fieldToolTipsinsurancecompany["Italian"]["Id"] = "";
	$fieldLabelsinsurancecompany["Italian"]["Name"] = "Nome";
	$fieldToolTipsinsurancecompany["Italian"]["Name"] = "";
	$fieldLabelsinsurancecompany["Italian"]["ContactName"] = "Nome del contatto";
	$fieldToolTipsinsurancecompany["Italian"]["ContactName"] = "";
	$fieldLabelsinsurancecompany["Italian"]["ContactNo"] = "Contatto No";
	$fieldToolTipsinsurancecompany["Italian"]["ContactNo"] = "";
	if (count($fieldToolTipsinsurancecompany["Italian"]))
		$tdatainsurancecompany[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsinsurancecompany["Russian"] = array();
	$fieldToolTipsinsurancecompany["Russian"] = array();
	$pageTitlesinsurancecompany["Russian"] = array();
	$fieldLabelsinsurancecompany["Russian"]["Id"] = "? ??";
	$fieldToolTipsinsurancecompany["Russian"]["Id"] = "";
	$fieldLabelsinsurancecompany["Russian"]["Name"] = "???";
	$fieldToolTipsinsurancecompany["Russian"]["Name"] = "";
	$fieldLabelsinsurancecompany["Russian"]["ContactName"] = "?????????? ????";
	$fieldToolTipsinsurancecompany["Russian"]["ContactName"] = "";
	$fieldLabelsinsurancecompany["Russian"]["ContactNo"] = "??? ????????? ? ???";
	$fieldToolTipsinsurancecompany["Russian"]["ContactNo"] = "";
	if (count($fieldToolTipsinsurancecompany["Russian"]))
		$tdatainsurancecompany[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinsurancecompany["Spanish"] = array();
	$fieldToolTipsinsurancecompany["Spanish"] = array();
	$pageTitlesinsurancecompany["Spanish"] = array();
	$fieldLabelsinsurancecompany["Spanish"]["Id"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipsinsurancecompany["Spanish"]["Id"] = "";
	$fieldLabelsinsurancecompany["Spanish"]["Name"] = "Nombre";
	$fieldToolTipsinsurancecompany["Spanish"]["Name"] = "";
	$fieldLabelsinsurancecompany["Spanish"]["ContactName"] = "Nombre de contacto";
	$fieldToolTipsinsurancecompany["Spanish"]["ContactName"] = "";
	$fieldLabelsinsurancecompany["Spanish"]["ContactNo"] = "Contacto No";
	$fieldToolTipsinsurancecompany["Spanish"]["ContactNo"] = "";
	if (count($fieldToolTipsinsurancecompany["Spanish"]))
		$tdatainsurancecompany[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinsurancecompany[""] = array();
	$fieldToolTipsinsurancecompany[""] = array();
	$pageTitlesinsurancecompany[""] = array();
	if (count($fieldToolTipsinsurancecompany[""]))
		$tdatainsurancecompany[".isUseToolTips"] = true;
}


	$tdatainsurancecompany[".NCSearch"] = true;



$tdatainsurancecompany[".shortTableName"] = "insurancecompany";
$tdatainsurancecompany[".nSecOptions"] = 0;
$tdatainsurancecompany[".recsPerRowPrint"] = 1;
$tdatainsurancecompany[".mainTableOwnerID"] = "";
$tdatainsurancecompany[".moveNext"] = 1;
$tdatainsurancecompany[".entityType"] = 0;

$tdatainsurancecompany[".strOriginalTableName"] = "insurancecompany";

		 



$tdatainsurancecompany[".showAddInPopup"] = false;

$tdatainsurancecompany[".showEditInPopup"] = false;

$tdatainsurancecompany[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainsurancecompany[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainsurancecompany[".fieldsForRegister"] = array();

	$tdatainsurancecompany[".listAjax"] = true;

	$tdatainsurancecompany[".audit"] = false;

	$tdatainsurancecompany[".locking"] = false;

$tdatainsurancecompany[".edit"] = true;
$tdatainsurancecompany[".afterEditAction"] = 1;
$tdatainsurancecompany[".closePopupAfterEdit"] = 1;
$tdatainsurancecompany[".afterEditActionDetTable"] = "";

$tdatainsurancecompany[".add"] = true;
$tdatainsurancecompany[".afterAddAction"] = 1;
$tdatainsurancecompany[".closePopupAfterAdd"] = 1;
$tdatainsurancecompany[".afterAddActionDetTable"] = "";

$tdatainsurancecompany[".list"] = true;




$tdatainsurancecompany[".view"] = true;

$tdatainsurancecompany[".import"] = true;

$tdatainsurancecompany[".exportTo"] = true;

$tdatainsurancecompany[".printFriendly"] = true;

$tdatainsurancecompany[".delete"] = true;

$tdatainsurancecompany[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatainsurancecompany[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatainsurancecompany[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatainsurancecompany[".searchSaving"] = false;
//

$tdatainsurancecompany[".showSearchPanel"] = true;
		$tdatainsurancecompany[".flexibleSearch"] = true;

$tdatainsurancecompany[".isUseAjaxSuggest"] = true;

$tdatainsurancecompany[".rowHighlite"] = true;



$tdatainsurancecompany[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainsurancecompany[".isUseTimeForSearch"] = false;



$tdatainsurancecompany[".badgeColor"] = "40E0D0";


$tdatainsurancecompany[".allSearchFields"] = array();
$tdatainsurancecompany[".filterFields"] = array();
$tdatainsurancecompany[".requiredSearchFields"] = array();

$tdatainsurancecompany[".allSearchFields"][] = "Id";
	$tdatainsurancecompany[".allSearchFields"][] = "Name";
	$tdatainsurancecompany[".allSearchFields"][] = "ContactName";
	$tdatainsurancecompany[".allSearchFields"][] = "ContactNo";
	

$tdatainsurancecompany[".googleLikeFields"] = array();
$tdatainsurancecompany[".googleLikeFields"][] = "Id";
$tdatainsurancecompany[".googleLikeFields"][] = "Name";
$tdatainsurancecompany[".googleLikeFields"][] = "ContactName";
$tdatainsurancecompany[".googleLikeFields"][] = "ContactNo";


$tdatainsurancecompany[".advSearchFields"] = array();
$tdatainsurancecompany[".advSearchFields"][] = "Id";
$tdatainsurancecompany[".advSearchFields"][] = "Name";
$tdatainsurancecompany[".advSearchFields"][] = "ContactName";
$tdatainsurancecompany[".advSearchFields"][] = "ContactNo";

$tdatainsurancecompany[".tableType"] = "list";

$tdatainsurancecompany[".printerPageOrientation"] = 0;
$tdatainsurancecompany[".nPrinterPageScale"] = 100;

$tdatainsurancecompany[".nPrinterSplitRecords"] = 40;

$tdatainsurancecompany[".nPrinterPDFSplitRecords"] = 40;



$tdatainsurancecompany[".geocodingEnabled"] = false;





$tdatainsurancecompany[".listGridLayout"] = 3;


$tdatainsurancecompany[".isResizeColumns"] = true;



// view page pdf
$tdatainsurancecompany[".isViewPagePDF"] = true;
$tdatainsurancecompany[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatainsurancecompany[".isPrinterPagePDF"] = true;
$tdatainsurancecompany[".nPrinterPagePDFScale"] = 100;


$tdatainsurancecompany[".pageSize"] = 20;

$tdatainsurancecompany[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainsurancecompany[".strOrderBy"] = $tstrOrderBy;

$tdatainsurancecompany[".orderindexes"] = array();

$tdatainsurancecompany[".sqlHead"] = "SELECT Id,  	Name,  	ContactName,  	ContactNo";
$tdatainsurancecompany[".sqlFrom"] = "FROM insurancecompany";
$tdatainsurancecompany[".sqlWhereExpr"] = "";
$tdatainsurancecompany[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatainsurancecompany[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainsurancecompany[".arrGroupsPerPage"] = $arrGPP;

$tdatainsurancecompany[".highlightSearchResults"] = true;

$tableKeysinsurancecompany = array();
$tableKeysinsurancecompany[] = "Id";
$tdatainsurancecompany[".Keys"] = $tableKeysinsurancecompany;

$tdatainsurancecompany[".listFields"] = array();
$tdatainsurancecompany[".listFields"][] = "Id";
$tdatainsurancecompany[".listFields"][] = "Name";
$tdatainsurancecompany[".listFields"][] = "ContactName";
$tdatainsurancecompany[".listFields"][] = "ContactNo";

$tdatainsurancecompany[".hideMobileList"] = array();


$tdatainsurancecompany[".viewFields"] = array();
$tdatainsurancecompany[".viewFields"][] = "Id";
$tdatainsurancecompany[".viewFields"][] = "Name";
$tdatainsurancecompany[".viewFields"][] = "ContactName";
$tdatainsurancecompany[".viewFields"][] = "ContactNo";

$tdatainsurancecompany[".addFields"] = array();
$tdatainsurancecompany[".addFields"][] = "Name";
$tdatainsurancecompany[".addFields"][] = "ContactName";
$tdatainsurancecompany[".addFields"][] = "ContactNo";

$tdatainsurancecompany[".masterListFields"] = array();
$tdatainsurancecompany[".masterListFields"][] = "Id";
$tdatainsurancecompany[".masterListFields"][] = "Name";
$tdatainsurancecompany[".masterListFields"][] = "ContactName";
$tdatainsurancecompany[".masterListFields"][] = "ContactNo";

$tdatainsurancecompany[".inlineAddFields"] = array();

$tdatainsurancecompany[".editFields"] = array();
$tdatainsurancecompany[".editFields"][] = "Name";
$tdatainsurancecompany[".editFields"][] = "ContactName";
$tdatainsurancecompany[".editFields"][] = "ContactNo";

$tdatainsurancecompany[".inlineEditFields"] = array();

$tdatainsurancecompany[".updateSelectedFields"] = array();
$tdatainsurancecompany[".updateSelectedFields"][] = "Name";
$tdatainsurancecompany[".updateSelectedFields"][] = "ContactName";
$tdatainsurancecompany[".updateSelectedFields"][] = "ContactNo";


$tdatainsurancecompany[".exportFields"] = array();
$tdatainsurancecompany[".exportFields"][] = "Id";
$tdatainsurancecompany[".exportFields"][] = "Name";
$tdatainsurancecompany[".exportFields"][] = "ContactName";
$tdatainsurancecompany[".exportFields"][] = "ContactNo";

$tdatainsurancecompany[".importFields"] = array();
$tdatainsurancecompany[".importFields"][] = "Id";
$tdatainsurancecompany[".importFields"][] = "Name";
$tdatainsurancecompany[".importFields"][] = "ContactName";
$tdatainsurancecompany[".importFields"][] = "ContactNo";

$tdatainsurancecompany[".printFields"] = array();
$tdatainsurancecompany[".printFields"][] = "Id";
$tdatainsurancecompany[".printFields"][] = "Name";
$tdatainsurancecompany[".printFields"][] = "ContactName";
$tdatainsurancecompany[".printFields"][] = "ContactNo";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "insurancecompany";
	$fdata["Label"] = GetFieldLabel("insurancecompany","Id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Id";

	
	
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




	$tdatainsurancecompany["Id"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "insurancecompany";
	$fdata["Label"] = GetFieldLabel("insurancecompany","Name");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Name";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatainsurancecompany["Name"] = $fdata;
//	ContactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ContactName";
	$fdata["GoodName"] = "ContactName";
	$fdata["ownerTable"] = "insurancecompany";
	$fdata["Label"] = GetFieldLabel("insurancecompany","ContactName");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ContactName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ContactName";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdatainsurancecompany["ContactName"] = $fdata;
//	ContactNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ContactNo";
	$fdata["GoodName"] = "ContactNo";
	$fdata["ownerTable"] = "insurancecompany";
	$fdata["Label"] = GetFieldLabel("insurancecompany","ContactNo");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ContactNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ContactNo";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdatainsurancecompany["ContactNo"] = $fdata;


$tables_data["insurancecompany"]=&$tdatainsurancecompany;
$field_labels["insurancecompany"] = &$fieldLabelsinsurancecompany;
$fieldToolTips["insurancecompany"] = &$fieldToolTipsinsurancecompany;
$page_titles["insurancecompany"] = &$pageTitlesinsurancecompany;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["insurancecompany"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["insurancecompany"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_insurancecompany()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  	Name,  	ContactName,  	ContactNo";
$proto0["m_strFrom"] = "FROM insurancecompany";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
					
;
						$proto0["cipherer"] = null;
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
	"m_strName" => "Id",
	"m_strTable" => "insurancecompany",
	"m_srcTableName" => "insurancecompany"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "insurancecompany";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "insurancecompany",
	"m_srcTableName" => "insurancecompany"
));

$proto8["m_sql"] = "Name";
$proto8["m_srcTableName"] = "insurancecompany";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ContactName",
	"m_strTable" => "insurancecompany",
	"m_srcTableName" => "insurancecompany"
));

$proto10["m_sql"] = "ContactName";
$proto10["m_srcTableName"] = "insurancecompany";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ContactNo",
	"m_strTable" => "insurancecompany",
	"m_srcTableName" => "insurancecompany"
));

$proto12["m_sql"] = "ContactNo";
$proto12["m_srcTableName"] = "insurancecompany";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "insurancecompany";
$proto15["m_srcTableName"] = "insurancecompany";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "Id";
$proto15["m_columns"][] = "Name";
$proto15["m_columns"][] = "ContactName";
$proto15["m_columns"][] = "ContactNo";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "insurancecompany";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "insurancecompany";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="insurancecompany";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_insurancecompany = createSqlQuery_insurancecompany();


	
					
;

				

$tdatainsurancecompany[".sqlquery"] = $queryData_insurancecompany;

$tableEvents["insurancecompany"] = new eventsBase;
$tdatainsurancecompany[".hasEvents"] = false;

?>