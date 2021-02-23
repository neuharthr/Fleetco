<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafuelstationmaster = array();
	$tdatafuelstationmaster[".truncateText"] = true;
	$tdatafuelstationmaster[".NumberOfChars"] = 80;
	$tdatafuelstationmaster[".ShortName"] = "fuelstationmaster";
	$tdatafuelstationmaster[".OwnerID"] = "";
	$tdatafuelstationmaster[".OriginalTable"] = "fuelstationmaster";

//	field labels
$fieldLabelsfuelstationmaster = array();
$fieldToolTipsfuelstationmaster = array();
$pageTitlesfuelstationmaster = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfuelstationmaster["English"] = array();
	$fieldToolTipsfuelstationmaster["English"] = array();
	$pageTitlesfuelstationmaster["English"] = array();
	$fieldLabelsfuelstationmaster["English"]["Id"] = "ID";
	$fieldToolTipsfuelstationmaster["English"]["Id"] = "";
	$fieldLabelsfuelstationmaster["English"]["FuelStation"] = "Fuel Station";
	$fieldToolTipsfuelstationmaster["English"]["FuelStation"] = "";
	$fieldLabelsfuelstationmaster["English"]["Address"] = "Address";
	$fieldToolTipsfuelstationmaster["English"]["Address"] = "";
	$fieldLabelsfuelstationmaster["English"]["ContactNumber"] = "Contact Number";
	$fieldToolTipsfuelstationmaster["English"]["ContactNumber"] = "";
	$fieldLabelsfuelstationmaster["English"]["Deposit"] = "Deposit Kept";
	$fieldToolTipsfuelstationmaster["English"]["Deposit"] = "";
	if (count($fieldToolTipsfuelstationmaster["English"]))
		$tdatafuelstationmaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsfuelstationmaster["Afrikaans"] = array();
	$fieldToolTipsfuelstationmaster["Afrikaans"] = array();
	$pageTitlesfuelstationmaster["Afrikaans"] = array();
	$fieldLabelsfuelstationmaster["Afrikaans"]["Id"] = "ID";
	$fieldToolTipsfuelstationmaster["Afrikaans"]["Id"] = "";
	$fieldLabelsfuelstationmaster["Afrikaans"]["FuelStation"] = "vulstasie";
	$fieldToolTipsfuelstationmaster["Afrikaans"]["FuelStation"] = "";
	$fieldLabelsfuelstationmaster["Afrikaans"]["Address"] = "adres";
	$fieldToolTipsfuelstationmaster["Afrikaans"]["Address"] = "";
	$fieldLabelsfuelstationmaster["Afrikaans"]["ContactNumber"] = "Kontak nommer";
	$fieldToolTipsfuelstationmaster["Afrikaans"]["ContactNumber"] = "";
	$fieldLabelsfuelstationmaster["Afrikaans"]["Deposit"] = "deposito Gehou";
	$fieldToolTipsfuelstationmaster["Afrikaans"]["Deposit"] = "";
	if (count($fieldToolTipsfuelstationmaster["Afrikaans"]))
		$tdatafuelstationmaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsfuelstationmaster["Arabic"] = array();
	$fieldToolTipsfuelstationmaster["Arabic"] = array();
	$pageTitlesfuelstationmaster["Arabic"] = array();
	$fieldLabelsfuelstationmaster["Arabic"]["Id"] = "???? ?????";
	$fieldToolTipsfuelstationmaster["Arabic"]["Id"] = "";
	$fieldLabelsfuelstationmaster["Arabic"]["FuelStation"] = "???? ????";
	$fieldToolTipsfuelstationmaster["Arabic"]["FuelStation"] = "";
	$fieldLabelsfuelstationmaster["Arabic"]["Address"] = "?????";
	$fieldToolTipsfuelstationmaster["Arabic"]["Address"] = "";
	$fieldLabelsfuelstationmaster["Arabic"]["ContactNumber"] = "??? ???????";
	$fieldToolTipsfuelstationmaster["Arabic"]["ContactNumber"] = "";
	$fieldLabelsfuelstationmaster["Arabic"]["Deposit"] = "????? ????";
	$fieldToolTipsfuelstationmaster["Arabic"]["Deposit"] = "";
	if (count($fieldToolTipsfuelstationmaster["Arabic"]))
		$tdatafuelstationmaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsfuelstationmaster["Chinese"] = array();
	$fieldToolTipsfuelstationmaster["Chinese"] = array();
	$pageTitlesfuelstationmaster["Chinese"] = array();
	$fieldLabelsfuelstationmaster["Chinese"]["Id"] = "ID";
	$fieldToolTipsfuelstationmaster["Chinese"]["Id"] = "";
	$fieldLabelsfuelstationmaster["Chinese"]["FuelStation"] = "???";
	$fieldToolTipsfuelstationmaster["Chinese"]["FuelStation"] = "";
	$fieldLabelsfuelstationmaster["Chinese"]["Address"] = "??";
	$fieldToolTipsfuelstationmaster["Chinese"]["Address"] = "";
	$fieldLabelsfuelstationmaster["Chinese"]["ContactNumber"] = "????";
	$fieldToolTipsfuelstationmaster["Chinese"]["ContactNumber"] = "";
	$fieldLabelsfuelstationmaster["Chinese"]["Deposit"] = "????";
	$fieldToolTipsfuelstationmaster["Chinese"]["Deposit"] = "";
	if (count($fieldToolTipsfuelstationmaster["Chinese"]))
		$tdatafuelstationmaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsfuelstationmaster["French"] = array();
	$fieldToolTipsfuelstationmaster["French"] = array();
	$pageTitlesfuelstationmaster["French"] = array();
	$fieldLabelsfuelstationmaster["French"]["Id"] = "ID";
	$fieldToolTipsfuelstationmaster["French"]["Id"] = "";
	$fieldLabelsfuelstationmaster["French"]["FuelStation"] = "Station essence";
	$fieldToolTipsfuelstationmaster["French"]["FuelStation"] = "";
	$fieldLabelsfuelstationmaster["French"]["Address"] = "Adresse";
	$fieldToolTipsfuelstationmaster["French"]["Address"] = "";
	$fieldLabelsfuelstationmaster["French"]["ContactNumber"] = "Numéro de contact";
	$fieldToolTipsfuelstationmaster["French"]["ContactNumber"] = "";
	$fieldLabelsfuelstationmaster["French"]["Deposit"] = "Dépôt gardé";
	$fieldToolTipsfuelstationmaster["French"]["Deposit"] = "";
	if (count($fieldToolTipsfuelstationmaster["French"]))
		$tdatafuelstationmaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsfuelstationmaster["German"] = array();
	$fieldToolTipsfuelstationmaster["German"] = array();
	$pageTitlesfuelstationmaster["German"] = array();
	$fieldLabelsfuelstationmaster["German"]["Id"] = "ICH WÜRDE";
	$fieldToolTipsfuelstationmaster["German"]["Id"] = "";
	$fieldLabelsfuelstationmaster["German"]["FuelStation"] = "Tankstelle";
	$fieldToolTipsfuelstationmaster["German"]["FuelStation"] = "";
	$fieldLabelsfuelstationmaster["German"]["Address"] = "Adresse";
	$fieldToolTipsfuelstationmaster["German"]["Address"] = "";
	$fieldLabelsfuelstationmaster["German"]["ContactNumber"] = "Kontaktnummer";
	$fieldToolTipsfuelstationmaster["German"]["ContactNumber"] = "";
	$fieldLabelsfuelstationmaster["German"]["Deposit"] = "Anzahlung eingegeben";
	$fieldToolTipsfuelstationmaster["German"]["Deposit"] = "";
	if (count($fieldToolTipsfuelstationmaster["German"]))
		$tdatafuelstationmaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsfuelstationmaster["Italian"] = array();
	$fieldToolTipsfuelstationmaster["Italian"] = array();
	$pageTitlesfuelstationmaster["Italian"] = array();
	$fieldLabelsfuelstationmaster["Italian"]["Id"] = "ID";
	$fieldToolTipsfuelstationmaster["Italian"]["Id"] = "";
	$fieldLabelsfuelstationmaster["Italian"]["FuelStation"] = "Stazione di servizio";
	$fieldToolTipsfuelstationmaster["Italian"]["FuelStation"] = "";
	$fieldLabelsfuelstationmaster["Italian"]["Address"] = "Indirizzo";
	$fieldToolTipsfuelstationmaster["Italian"]["Address"] = "";
	$fieldLabelsfuelstationmaster["Italian"]["ContactNumber"] = "Numero di contatto";
	$fieldToolTipsfuelstationmaster["Italian"]["ContactNumber"] = "";
	$fieldLabelsfuelstationmaster["Italian"]["Deposit"] = "Deposito Kept";
	$fieldToolTipsfuelstationmaster["Italian"]["Deposit"] = "";
	if (count($fieldToolTipsfuelstationmaster["Italian"]))
		$tdatafuelstationmaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsfuelstationmaster["Russian"] = array();
	$fieldToolTipsfuelstationmaster["Russian"] = array();
	$pageTitlesfuelstationmaster["Russian"] = array();
	$fieldLabelsfuelstationmaster["Russian"]["Id"] = "? ??";
	$fieldToolTipsfuelstationmaster["Russian"]["Id"] = "";
	$fieldLabelsfuelstationmaster["Russian"]["FuelStation"] = "????????";
	$fieldToolTipsfuelstationmaster["Russian"]["FuelStation"] = "";
	$fieldLabelsfuelstationmaster["Russian"]["Address"] = "?????";
	$fieldToolTipsfuelstationmaster["Russian"]["Address"] = "";
	$fieldLabelsfuelstationmaster["Russian"]["ContactNumber"] = "?????????? ?????";
	$fieldToolTipsfuelstationmaster["Russian"]["ContactNumber"] = "";
	$fieldLabelsfuelstationmaster["Russian"]["Deposit"] = "??????? ????????";
	$fieldToolTipsfuelstationmaster["Russian"]["Deposit"] = "";
	if (count($fieldToolTipsfuelstationmaster["Russian"]))
		$tdatafuelstationmaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsfuelstationmaster["Spanish"] = array();
	$fieldToolTipsfuelstationmaster["Spanish"] = array();
	$pageTitlesfuelstationmaster["Spanish"] = array();
	$fieldLabelsfuelstationmaster["Spanish"]["Id"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipsfuelstationmaster["Spanish"]["Id"] = "";
	$fieldLabelsfuelstationmaster["Spanish"]["FuelStation"] = "Gasolinera";
	$fieldToolTipsfuelstationmaster["Spanish"]["FuelStation"] = "";
	$fieldLabelsfuelstationmaster["Spanish"]["Address"] = "Dirección";
	$fieldToolTipsfuelstationmaster["Spanish"]["Address"] = "";
	$fieldLabelsfuelstationmaster["Spanish"]["ContactNumber"] = "Número de contacto";
	$fieldToolTipsfuelstationmaster["Spanish"]["ContactNumber"] = "";
	$fieldLabelsfuelstationmaster["Spanish"]["Deposit"] = "Depósito guardado";
	$fieldToolTipsfuelstationmaster["Spanish"]["Deposit"] = "";
	if (count($fieldToolTipsfuelstationmaster["Spanish"]))
		$tdatafuelstationmaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfuelstationmaster[""] = array();
	$fieldToolTipsfuelstationmaster[""] = array();
	$pageTitlesfuelstationmaster[""] = array();
	if (count($fieldToolTipsfuelstationmaster[""]))
		$tdatafuelstationmaster[".isUseToolTips"] = true;
}


	$tdatafuelstationmaster[".NCSearch"] = true;



$tdatafuelstationmaster[".shortTableName"] = "fuelstationmaster";
$tdatafuelstationmaster[".nSecOptions"] = 0;
$tdatafuelstationmaster[".recsPerRowPrint"] = 1;
$tdatafuelstationmaster[".mainTableOwnerID"] = "";
$tdatafuelstationmaster[".moveNext"] = 1;
$tdatafuelstationmaster[".entityType"] = 0;

$tdatafuelstationmaster[".strOriginalTableName"] = "fuelstationmaster";

		 



$tdatafuelstationmaster[".showAddInPopup"] = false;

$tdatafuelstationmaster[".showEditInPopup"] = false;

$tdatafuelstationmaster[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafuelstationmaster[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafuelstationmaster[".fieldsForRegister"] = array();

	$tdatafuelstationmaster[".listAjax"] = true;

	$tdatafuelstationmaster[".audit"] = false;

	$tdatafuelstationmaster[".locking"] = false;

$tdatafuelstationmaster[".edit"] = true;
$tdatafuelstationmaster[".afterEditAction"] = 1;
$tdatafuelstationmaster[".closePopupAfterEdit"] = 1;
$tdatafuelstationmaster[".afterEditActionDetTable"] = "";

$tdatafuelstationmaster[".add"] = true;
$tdatafuelstationmaster[".afterAddAction"] = 1;
$tdatafuelstationmaster[".closePopupAfterAdd"] = 1;
$tdatafuelstationmaster[".afterAddActionDetTable"] = "";

$tdatafuelstationmaster[".list"] = true;




$tdatafuelstationmaster[".view"] = true;

$tdatafuelstationmaster[".import"] = true;

$tdatafuelstationmaster[".exportTo"] = true;

$tdatafuelstationmaster[".printFriendly"] = true;

$tdatafuelstationmaster[".delete"] = true;

$tdatafuelstationmaster[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafuelstationmaster[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatafuelstationmaster[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatafuelstationmaster[".searchSaving"] = false;
//

$tdatafuelstationmaster[".showSearchPanel"] = true;
		$tdatafuelstationmaster[".flexibleSearch"] = true;

$tdatafuelstationmaster[".isUseAjaxSuggest"] = true;

$tdatafuelstationmaster[".rowHighlite"] = true;



$tdatafuelstationmaster[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafuelstationmaster[".isUseTimeForSearch"] = false;



$tdatafuelstationmaster[".badgeColor"] = "AFEEEE";


$tdatafuelstationmaster[".allSearchFields"] = array();
$tdatafuelstationmaster[".filterFields"] = array();
$tdatafuelstationmaster[".requiredSearchFields"] = array();

$tdatafuelstationmaster[".allSearchFields"][] = "Id";
	$tdatafuelstationmaster[".allSearchFields"][] = "FuelStation";
	$tdatafuelstationmaster[".allSearchFields"][] = "Address";
	$tdatafuelstationmaster[".allSearchFields"][] = "ContactNumber";
	$tdatafuelstationmaster[".allSearchFields"][] = "Deposit";
	

$tdatafuelstationmaster[".googleLikeFields"] = array();
$tdatafuelstationmaster[".googleLikeFields"][] = "Id";
$tdatafuelstationmaster[".googleLikeFields"][] = "FuelStation";
$tdatafuelstationmaster[".googleLikeFields"][] = "Address";
$tdatafuelstationmaster[".googleLikeFields"][] = "ContactNumber";
$tdatafuelstationmaster[".googleLikeFields"][] = "Deposit";


$tdatafuelstationmaster[".advSearchFields"] = array();
$tdatafuelstationmaster[".advSearchFields"][] = "Id";
$tdatafuelstationmaster[".advSearchFields"][] = "FuelStation";
$tdatafuelstationmaster[".advSearchFields"][] = "Address";
$tdatafuelstationmaster[".advSearchFields"][] = "ContactNumber";
$tdatafuelstationmaster[".advSearchFields"][] = "Deposit";

$tdatafuelstationmaster[".tableType"] = "list";

$tdatafuelstationmaster[".printerPageOrientation"] = 0;
$tdatafuelstationmaster[".nPrinterPageScale"] = 100;

$tdatafuelstationmaster[".nPrinterSplitRecords"] = 40;

$tdatafuelstationmaster[".nPrinterPDFSplitRecords"] = 40;



$tdatafuelstationmaster[".geocodingEnabled"] = false;





$tdatafuelstationmaster[".listGridLayout"] = 3;


$tdatafuelstationmaster[".isResizeColumns"] = true;



// view page pdf
$tdatafuelstationmaster[".isViewPagePDF"] = true;
$tdatafuelstationmaster[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatafuelstationmaster[".isPrinterPagePDF"] = true;
$tdatafuelstationmaster[".nPrinterPagePDFScale"] = 100;


$tdatafuelstationmaster[".pageSize"] = 20;

$tdatafuelstationmaster[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafuelstationmaster[".strOrderBy"] = $tstrOrderBy;

$tdatafuelstationmaster[".orderindexes"] = array();

$tdatafuelstationmaster[".sqlHead"] = "SELECT Id,  	FuelStation,  	Address,  	ContactNumber,  	Deposit";
$tdatafuelstationmaster[".sqlFrom"] = "FROM fuelstationmaster";
$tdatafuelstationmaster[".sqlWhereExpr"] = "";
$tdatafuelstationmaster[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatafuelstationmaster[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafuelstationmaster[".arrGroupsPerPage"] = $arrGPP;

$tdatafuelstationmaster[".highlightSearchResults"] = true;

$tableKeysfuelstationmaster = array();
$tableKeysfuelstationmaster[] = "Id";
$tdatafuelstationmaster[".Keys"] = $tableKeysfuelstationmaster;

$tdatafuelstationmaster[".listFields"] = array();
$tdatafuelstationmaster[".listFields"][] = "Id";
$tdatafuelstationmaster[".listFields"][] = "FuelStation";
$tdatafuelstationmaster[".listFields"][] = "Address";
$tdatafuelstationmaster[".listFields"][] = "ContactNumber";
$tdatafuelstationmaster[".listFields"][] = "Deposit";

$tdatafuelstationmaster[".hideMobileList"] = array();


$tdatafuelstationmaster[".viewFields"] = array();
$tdatafuelstationmaster[".viewFields"][] = "Id";
$tdatafuelstationmaster[".viewFields"][] = "FuelStation";
$tdatafuelstationmaster[".viewFields"][] = "Address";
$tdatafuelstationmaster[".viewFields"][] = "ContactNumber";
$tdatafuelstationmaster[".viewFields"][] = "Deposit";

$tdatafuelstationmaster[".addFields"] = array();
$tdatafuelstationmaster[".addFields"][] = "FuelStation";
$tdatafuelstationmaster[".addFields"][] = "Address";
$tdatafuelstationmaster[".addFields"][] = "ContactNumber";
$tdatafuelstationmaster[".addFields"][] = "Deposit";

$tdatafuelstationmaster[".masterListFields"] = array();
$tdatafuelstationmaster[".masterListFields"][] = "Id";
$tdatafuelstationmaster[".masterListFields"][] = "FuelStation";
$tdatafuelstationmaster[".masterListFields"][] = "Address";
$tdatafuelstationmaster[".masterListFields"][] = "ContactNumber";
$tdatafuelstationmaster[".masterListFields"][] = "Deposit";

$tdatafuelstationmaster[".inlineAddFields"] = array();

$tdatafuelstationmaster[".editFields"] = array();
$tdatafuelstationmaster[".editFields"][] = "FuelStation";
$tdatafuelstationmaster[".editFields"][] = "Address";
$tdatafuelstationmaster[".editFields"][] = "ContactNumber";
$tdatafuelstationmaster[".editFields"][] = "Deposit";

$tdatafuelstationmaster[".inlineEditFields"] = array();

$tdatafuelstationmaster[".updateSelectedFields"] = array();
$tdatafuelstationmaster[".updateSelectedFields"][] = "FuelStation";
$tdatafuelstationmaster[".updateSelectedFields"][] = "Address";
$tdatafuelstationmaster[".updateSelectedFields"][] = "ContactNumber";
$tdatafuelstationmaster[".updateSelectedFields"][] = "Deposit";


$tdatafuelstationmaster[".exportFields"] = array();
$tdatafuelstationmaster[".exportFields"][] = "Id";
$tdatafuelstationmaster[".exportFields"][] = "FuelStation";
$tdatafuelstationmaster[".exportFields"][] = "Address";
$tdatafuelstationmaster[".exportFields"][] = "ContactNumber";
$tdatafuelstationmaster[".exportFields"][] = "Deposit";

$tdatafuelstationmaster[".importFields"] = array();
$tdatafuelstationmaster[".importFields"][] = "Id";
$tdatafuelstationmaster[".importFields"][] = "FuelStation";
$tdatafuelstationmaster[".importFields"][] = "Address";
$tdatafuelstationmaster[".importFields"][] = "ContactNumber";
$tdatafuelstationmaster[".importFields"][] = "Deposit";

$tdatafuelstationmaster[".printFields"] = array();
$tdatafuelstationmaster[".printFields"][] = "Id";
$tdatafuelstationmaster[".printFields"][] = "FuelStation";
$tdatafuelstationmaster[".printFields"][] = "Address";
$tdatafuelstationmaster[".printFields"][] = "ContactNumber";
$tdatafuelstationmaster[".printFields"][] = "Deposit";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "fuelstationmaster";
	$fdata["Label"] = GetFieldLabel("fuelstationmaster","Id");
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




	$tdatafuelstationmaster["Id"] = $fdata;
//	FuelStation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FuelStation";
	$fdata["GoodName"] = "FuelStation";
	$fdata["ownerTable"] = "fuelstationmaster";
	$fdata["Label"] = GetFieldLabel("fuelstationmaster","FuelStation");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FuelStation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FuelStation";

	
	
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




	$tdatafuelstationmaster["FuelStation"] = $fdata;
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "fuelstationmaster";
	$fdata["Label"] = GetFieldLabel("fuelstationmaster","Address");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Address";

	
	
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




	$tdatafuelstationmaster["Address"] = $fdata;
//	ContactNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ContactNumber";
	$fdata["GoodName"] = "ContactNumber";
	$fdata["ownerTable"] = "fuelstationmaster";
	$fdata["Label"] = GetFieldLabel("fuelstationmaster","ContactNumber");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ContactNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ContactNumber";

	
	
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




	$tdatafuelstationmaster["ContactNumber"] = $fdata;
//	Deposit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Deposit";
	$fdata["GoodName"] = "Deposit";
	$fdata["ownerTable"] = "fuelstationmaster";
	$fdata["Label"] = GetFieldLabel("fuelstationmaster","Deposit");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Deposit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Deposit";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelstationmaster["Deposit"] = $fdata;


$tables_data["fuelstationmaster"]=&$tdatafuelstationmaster;
$field_labels["fuelstationmaster"] = &$fieldLabelsfuelstationmaster;
$fieldToolTips["fuelstationmaster"] = &$fieldToolTipsfuelstationmaster;
$page_titles["fuelstationmaster"] = &$pageTitlesfuelstationmaster;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["fuelstationmaster"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["fuelstationmaster"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_fuelstationmaster()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  	FuelStation,  	Address,  	ContactNumber,  	Deposit";
$proto0["m_strFrom"] = "FROM fuelstationmaster";
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
	"m_strTable" => "fuelstationmaster",
	"m_srcTableName" => "fuelstationmaster"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "fuelstationmaster";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelStation",
	"m_strTable" => "fuelstationmaster",
	"m_srcTableName" => "fuelstationmaster"
));

$proto8["m_sql"] = "FuelStation";
$proto8["m_srcTableName"] = "fuelstationmaster";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Address",
	"m_strTable" => "fuelstationmaster",
	"m_srcTableName" => "fuelstationmaster"
));

$proto10["m_sql"] = "Address";
$proto10["m_srcTableName"] = "fuelstationmaster";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ContactNumber",
	"m_strTable" => "fuelstationmaster",
	"m_srcTableName" => "fuelstationmaster"
));

$proto12["m_sql"] = "ContactNumber";
$proto12["m_srcTableName"] = "fuelstationmaster";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Deposit",
	"m_strTable" => "fuelstationmaster",
	"m_srcTableName" => "fuelstationmaster"
));

$proto14["m_sql"] = "Deposit";
$proto14["m_srcTableName"] = "fuelstationmaster";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "fuelstationmaster";
$proto17["m_srcTableName"] = "fuelstationmaster";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "Id";
$proto17["m_columns"][] = "FuelStation";
$proto17["m_columns"][] = "Address";
$proto17["m_columns"][] = "ContactNumber";
$proto17["m_columns"][] = "Deposit";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "fuelstationmaster";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "fuelstationmaster";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="fuelstationmaster";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fuelstationmaster = createSqlQuery_fuelstationmaster();


	
					
;

					

$tdatafuelstationmaster[".sqlquery"] = $queryData_fuelstationmaster;

$tableEvents["fuelstationmaster"] = new eventsBase;
$tdatafuelstationmaster[".hasEvents"] = false;

?>