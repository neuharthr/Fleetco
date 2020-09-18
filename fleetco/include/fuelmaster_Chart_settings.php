<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafuelmaster_Chart = array();
	$tdatafuelmaster_Chart[".ShortName"] = "fuelmaster_Chart";
	$tdatafuelmaster_Chart[".OwnerID"] = "";
	$tdatafuelmaster_Chart[".OriginalTable"] = "fuelmaster";

//	field labels
$fieldLabelsfuelmaster_Chart = array();
$fieldToolTipsfuelmaster_Chart = array();
$pageTitlesfuelmaster_Chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfuelmaster_Chart["English"] = array();
	$fieldToolTipsfuelmaster_Chart["English"] = array();
	$pageTitlesfuelmaster_Chart["English"] = array();
	$fieldLabelsfuelmaster_Chart["English"]["Vehicle"] = "Vehicle";
	$fieldToolTipsfuelmaster_Chart["English"]["Vehicle"] = "";
	$fieldLabelsfuelmaster_Chart["English"]["FuelDate"] = "Fuel Date";
	$fieldToolTipsfuelmaster_Chart["English"]["FuelDate"] = "";
	$fieldLabelsfuelmaster_Chart["English"]["Id"] = "Id";
	$fieldToolTipsfuelmaster_Chart["English"]["Id"] = "";
	$fieldLabelsfuelmaster_Chart["English"]["Economy"] = "Economy";
	$fieldToolTipsfuelmaster_Chart["English"]["Economy"] = "";
	$fieldLabelsfuelmaster_Chart["English"]["Economy_1"] = "Economy";
	$fieldToolTipsfuelmaster_Chart["English"]["Economy_1"] = "";
	$fieldLabelsfuelmaster_Chart["English"]["Fleet"] = "Fleet";
	$fieldToolTipsfuelmaster_Chart["English"]["Fleet"] = "";
	if (count($fieldToolTipsfuelmaster_Chart["English"]))
		$tdatafuelmaster_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsfuelmaster_Chart["Afrikaans"] = array();
	$fieldToolTipsfuelmaster_Chart["Afrikaans"] = array();
	$pageTitlesfuelmaster_Chart["Afrikaans"] = array();
	$fieldLabelsfuelmaster_Chart["Afrikaans"]["FuelDate"] = "brandstof Datum";
	$fieldToolTipsfuelmaster_Chart["Afrikaans"]["FuelDate"] = "";
	$fieldLabelsfuelmaster_Chart["Afrikaans"]["Vehicle"] = "voertuig";
	$fieldToolTipsfuelmaster_Chart["Afrikaans"]["Vehicle"] = "";
	$fieldLabelsfuelmaster_Chart["Afrikaans"]["Economy"] = "ekonomie";
	$fieldToolTipsfuelmaster_Chart["Afrikaans"]["Economy"] = "";
	$fieldLabelsfuelmaster_Chart["Afrikaans"]["Id"] = "ID";
	$fieldToolTipsfuelmaster_Chart["Afrikaans"]["Id"] = "";
	$fieldLabelsfuelmaster_Chart["Afrikaans"]["Economy_1"] = "ekonomie";
	$fieldToolTipsfuelmaster_Chart["Afrikaans"]["Economy_1"] = "";
	$fieldLabelsfuelmaster_Chart["Afrikaans"]["Fleet"] = "vloot";
	$fieldToolTipsfuelmaster_Chart["Afrikaans"]["Fleet"] = "";
	if (count($fieldToolTipsfuelmaster_Chart["Afrikaans"]))
		$tdatafuelmaster_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsfuelmaster_Chart["Arabic"] = array();
	$fieldToolTipsfuelmaster_Chart["Arabic"] = array();
	$pageTitlesfuelmaster_Chart["Arabic"] = array();
	$fieldLabelsfuelmaster_Chart["Arabic"]["FuelDate"] = "??????? ??????";
	$fieldToolTipsfuelmaster_Chart["Arabic"]["FuelDate"] = "";
	$fieldLabelsfuelmaster_Chart["Arabic"]["Vehicle"] = "?????";
	$fieldToolTipsfuelmaster_Chart["Arabic"]["Vehicle"] = "";
	$fieldLabelsfuelmaster_Chart["Arabic"]["Economy"] = "??????";
	$fieldToolTipsfuelmaster_Chart["Arabic"]["Economy"] = "";
	$fieldLabelsfuelmaster_Chart["Arabic"]["Id"] = "???? ?????";
	$fieldToolTipsfuelmaster_Chart["Arabic"]["Id"] = "";
	$fieldLabelsfuelmaster_Chart["Arabic"]["Economy_1"] = "??????";
	$fieldToolTipsfuelmaster_Chart["Arabic"]["Economy_1"] = "";
	$fieldLabelsfuelmaster_Chart["Arabic"]["Fleet"] = "?????";
	$fieldToolTipsfuelmaster_Chart["Arabic"]["Fleet"] = "";
	if (count($fieldToolTipsfuelmaster_Chart["Arabic"]))
		$tdatafuelmaster_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsfuelmaster_Chart["Chinese"] = array();
	$fieldToolTipsfuelmaster_Chart["Chinese"] = array();
	$pageTitlesfuelmaster_Chart["Chinese"] = array();
	$fieldLabelsfuelmaster_Chart["Chinese"]["FuelDate"] = "????";
	$fieldToolTipsfuelmaster_Chart["Chinese"]["FuelDate"] = "";
	$fieldLabelsfuelmaster_Chart["Chinese"]["Vehicle"] = "??";
	$fieldToolTipsfuelmaster_Chart["Chinese"]["Vehicle"] = "";
	$fieldLabelsfuelmaster_Chart["Chinese"]["Economy"] = "??";
	$fieldToolTipsfuelmaster_Chart["Chinese"]["Economy"] = "";
	$fieldLabelsfuelmaster_Chart["Chinese"]["Id"] = "ID";
	$fieldToolTipsfuelmaster_Chart["Chinese"]["Id"] = "";
	$fieldLabelsfuelmaster_Chart["Chinese"]["Economy_1"] = "??";
	$fieldToolTipsfuelmaster_Chart["Chinese"]["Economy_1"] = "";
	$fieldLabelsfuelmaster_Chart["Chinese"]["Fleet"] = "??";
	$fieldToolTipsfuelmaster_Chart["Chinese"]["Fleet"] = "";
	if (count($fieldToolTipsfuelmaster_Chart["Chinese"]))
		$tdatafuelmaster_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsfuelmaster_Chart["French"] = array();
	$fieldToolTipsfuelmaster_Chart["French"] = array();
	$pageTitlesfuelmaster_Chart["French"] = array();
	$fieldLabelsfuelmaster_Chart["French"]["FuelDate"] = "Date de carburant";
	$fieldToolTipsfuelmaster_Chart["French"]["FuelDate"] = "";
	$fieldLabelsfuelmaster_Chart["French"]["Vehicle"] = "Véhicule";
	$fieldToolTipsfuelmaster_Chart["French"]["Vehicle"] = "";
	$fieldLabelsfuelmaster_Chart["French"]["Economy"] = "Économie";
	$fieldToolTipsfuelmaster_Chart["French"]["Economy"] = "";
	$fieldLabelsfuelmaster_Chart["French"]["Id"] = "Id";
	$fieldToolTipsfuelmaster_Chart["French"]["Id"] = "";
	$fieldLabelsfuelmaster_Chart["French"]["Economy_1"] = "Économie";
	$fieldToolTipsfuelmaster_Chart["French"]["Economy_1"] = "";
	$fieldLabelsfuelmaster_Chart["French"]["Fleet"] = "Flotte";
	$fieldToolTipsfuelmaster_Chart["French"]["Fleet"] = "";
	if (count($fieldToolTipsfuelmaster_Chart["French"]))
		$tdatafuelmaster_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsfuelmaster_Chart["German"] = array();
	$fieldToolTipsfuelmaster_Chart["German"] = array();
	$pageTitlesfuelmaster_Chart["German"] = array();
	$fieldLabelsfuelmaster_Chart["German"]["FuelDate"] = "Kraftstoffdatum";
	$fieldToolTipsfuelmaster_Chart["German"]["FuelDate"] = "";
	$fieldLabelsfuelmaster_Chart["German"]["Vehicle"] = "Fahrzeug";
	$fieldToolTipsfuelmaster_Chart["German"]["Vehicle"] = "";
	$fieldLabelsfuelmaster_Chart["German"]["Economy"] = "Wirtschaft";
	$fieldToolTipsfuelmaster_Chart["German"]["Economy"] = "";
	$fieldLabelsfuelmaster_Chart["German"]["Id"] = "Ich würde";
	$fieldToolTipsfuelmaster_Chart["German"]["Id"] = "";
	$fieldLabelsfuelmaster_Chart["German"]["Economy_1"] = "Wirtschaft";
	$fieldToolTipsfuelmaster_Chart["German"]["Economy_1"] = "";
	$fieldLabelsfuelmaster_Chart["German"]["Fleet"] = "Flotte";
	$fieldToolTipsfuelmaster_Chart["German"]["Fleet"] = "";
	if (count($fieldToolTipsfuelmaster_Chart["German"]))
		$tdatafuelmaster_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsfuelmaster_Chart["Italian"] = array();
	$fieldToolTipsfuelmaster_Chart["Italian"] = array();
	$pageTitlesfuelmaster_Chart["Italian"] = array();
	$fieldLabelsfuelmaster_Chart["Italian"]["FuelDate"] = "Data Fuel";
	$fieldToolTipsfuelmaster_Chart["Italian"]["FuelDate"] = "";
	$fieldLabelsfuelmaster_Chart["Italian"]["Vehicle"] = "Veicolo";
	$fieldToolTipsfuelmaster_Chart["Italian"]["Vehicle"] = "";
	$fieldLabelsfuelmaster_Chart["Italian"]["Economy"] = "Economia";
	$fieldToolTipsfuelmaster_Chart["Italian"]["Economy"] = "";
	$fieldLabelsfuelmaster_Chart["Italian"]["Id"] = "Id";
	$fieldToolTipsfuelmaster_Chart["Italian"]["Id"] = "";
	$fieldLabelsfuelmaster_Chart["Italian"]["Economy_1"] = "Economia";
	$fieldToolTipsfuelmaster_Chart["Italian"]["Economy_1"] = "";
	$fieldLabelsfuelmaster_Chart["Italian"]["Fleet"] = "Flotta";
	$fieldToolTipsfuelmaster_Chart["Italian"]["Fleet"] = "";
	if (count($fieldToolTipsfuelmaster_Chart["Italian"]))
		$tdatafuelmaster_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsfuelmaster_Chart["Russian"] = array();
	$fieldToolTipsfuelmaster_Chart["Russian"] = array();
	$pageTitlesfuelmaster_Chart["Russian"] = array();
	$fieldLabelsfuelmaster_Chart["Russian"]["FuelDate"] = "??????? ????";
	$fieldToolTipsfuelmaster_Chart["Russian"]["FuelDate"] = "";
	$fieldLabelsfuelmaster_Chart["Russian"]["Vehicle"] = "???????? ????????????";
	$fieldToolTipsfuelmaster_Chart["Russian"]["Vehicle"] = "";
	$fieldLabelsfuelmaster_Chart["Russian"]["Economy"] = "?????????";
	$fieldToolTipsfuelmaster_Chart["Russian"]["Economy"] = "";
	$fieldLabelsfuelmaster_Chart["Russian"]["Id"] = "? ??";
	$fieldToolTipsfuelmaster_Chart["Russian"]["Id"] = "";
	$fieldLabelsfuelmaster_Chart["Russian"]["Economy_1"] = "?????????";
	$fieldToolTipsfuelmaster_Chart["Russian"]["Economy_1"] = "";
	$fieldLabelsfuelmaster_Chart["Russian"]["Fleet"] = "????";
	$fieldToolTipsfuelmaster_Chart["Russian"]["Fleet"] = "";
	if (count($fieldToolTipsfuelmaster_Chart["Russian"]))
		$tdatafuelmaster_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsfuelmaster_Chart["Spanish"] = array();
	$fieldToolTipsfuelmaster_Chart["Spanish"] = array();
	$pageTitlesfuelmaster_Chart["Spanish"] = array();
	$fieldLabelsfuelmaster_Chart["Spanish"]["FuelDate"] = "Fecha del combustible";
	$fieldToolTipsfuelmaster_Chart["Spanish"]["FuelDate"] = "";
	$fieldLabelsfuelmaster_Chart["Spanish"]["Vehicle"] = "Vehículo";
	$fieldToolTipsfuelmaster_Chart["Spanish"]["Vehicle"] = "";
	$fieldLabelsfuelmaster_Chart["Spanish"]["Economy"] = "Economía";
	$fieldToolTipsfuelmaster_Chart["Spanish"]["Economy"] = "";
	$fieldLabelsfuelmaster_Chart["Spanish"]["Id"] = "Carné de identidad";
	$fieldToolTipsfuelmaster_Chart["Spanish"]["Id"] = "";
	$fieldLabelsfuelmaster_Chart["Spanish"]["Economy_1"] = "Economía";
	$fieldToolTipsfuelmaster_Chart["Spanish"]["Economy_1"] = "";
	$fieldLabelsfuelmaster_Chart["Spanish"]["Fleet"] = "Flota";
	$fieldToolTipsfuelmaster_Chart["Spanish"]["Fleet"] = "";
	if (count($fieldToolTipsfuelmaster_Chart["Spanish"]))
		$tdatafuelmaster_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfuelmaster_Chart[""] = array();
	$fieldToolTipsfuelmaster_Chart[""] = array();
	$pageTitlesfuelmaster_Chart[""] = array();
	if (count($fieldToolTipsfuelmaster_Chart[""]))
		$tdatafuelmaster_Chart[".isUseToolTips"] = true;
}


	$tdatafuelmaster_Chart[".NCSearch"] = true;

	$tdatafuelmaster_Chart[".ChartRefreshTime"] = 0;


$tdatafuelmaster_Chart[".shortTableName"] = "fuelmaster_Chart";
$tdatafuelmaster_Chart[".nSecOptions"] = 0;
$tdatafuelmaster_Chart[".recsPerRowPrint"] = 1;
$tdatafuelmaster_Chart[".mainTableOwnerID"] = "";
$tdatafuelmaster_Chart[".moveNext"] = 1;
$tdatafuelmaster_Chart[".entityType"] = 3;

$tdatafuelmaster_Chart[".strOriginalTableName"] = "fuelmaster";

		 



$tdatafuelmaster_Chart[".showAddInPopup"] = false;

$tdatafuelmaster_Chart[".showEditInPopup"] = false;

$tdatafuelmaster_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafuelmaster_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafuelmaster_Chart[".fieldsForRegister"] = array();

$tdatafuelmaster_Chart[".listAjax"] = false;

	$tdatafuelmaster_Chart[".audit"] = false;

	$tdatafuelmaster_Chart[".locking"] = false;


$tdatafuelmaster_Chart[".add"] = true;
$tdatafuelmaster_Chart[".afterAddAction"] = 1;
$tdatafuelmaster_Chart[".closePopupAfterAdd"] = 1;
$tdatafuelmaster_Chart[".afterAddActionDetTable"] = "";

$tdatafuelmaster_Chart[".list"] = true;




$tdatafuelmaster_Chart[".inlineAdd"] = true;





$tdatafuelmaster_Chart[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafuelmaster_Chart[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafuelmaster_Chart[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafuelmaster_Chart[".searchSaving"] = false;
//

$tdatafuelmaster_Chart[".showSearchPanel"] = true;
		$tdatafuelmaster_Chart[".flexibleSearch"] = true;

$tdatafuelmaster_Chart[".isUseAjaxSuggest"] = true;




$tdatafuelmaster_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafuelmaster_Chart[".isUseTimeForSearch"] = false;





$tdatafuelmaster_Chart[".allSearchFields"] = array();
$tdatafuelmaster_Chart[".filterFields"] = array();
$tdatafuelmaster_Chart[".requiredSearchFields"] = array();

$tdatafuelmaster_Chart[".allSearchFields"][] = "FuelDate";
	$tdatafuelmaster_Chart[".allSearchFields"][] = "Vehicle";
	$tdatafuelmaster_Chart[".allSearchFields"][] = "Id";
	$tdatafuelmaster_Chart[".allSearchFields"][] = "Economy*1";
	$tdatafuelmaster_Chart[".allSearchFields"][] = "Fleet";
	

$tdatafuelmaster_Chart[".googleLikeFields"] = array();
$tdatafuelmaster_Chart[".googleLikeFields"][] = "FuelDate";
$tdatafuelmaster_Chart[".googleLikeFields"][] = "Vehicle";
$tdatafuelmaster_Chart[".googleLikeFields"][] = "Id";
$tdatafuelmaster_Chart[".googleLikeFields"][] = "Economy*1";
$tdatafuelmaster_Chart[".googleLikeFields"][] = "Fleet";

$tdatafuelmaster_Chart[".panelSearchFields"] = array();
$tdatafuelmaster_Chart[".searchPanelOptions"] = array();
$tdatafuelmaster_Chart[".panelSearchFields"][] = "FuelDate";
	$tdatafuelmaster_Chart[".panelSearchFields"][] = "Vehicle";
	$tdatafuelmaster_Chart[".panelSearchFields"][] = "Economy";
	$tdatafuelmaster_Chart[".panelSearchFields"][] = "Fleet";
	
$tdatafuelmaster_Chart[".advSearchFields"] = array();
$tdatafuelmaster_Chart[".advSearchFields"][] = "FuelDate";
$tdatafuelmaster_Chart[".advSearchFields"][] = "Vehicle";
$tdatafuelmaster_Chart[".advSearchFields"][] = "Id";
$tdatafuelmaster_Chart[".advSearchFields"][] = "Economy*1";
$tdatafuelmaster_Chart[".advSearchFields"][] = "Fleet";

$tdatafuelmaster_Chart[".tableType"] = "chart";

$tdatafuelmaster_Chart[".printerPageOrientation"] = 0;
$tdatafuelmaster_Chart[".nPrinterPageScale"] = 100;

$tdatafuelmaster_Chart[".nPrinterSplitRecords"] = 40;

$tdatafuelmaster_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdatafuelmaster_Chart[".geocodingEnabled"] = false;



// chart settings
$tdatafuelmaster_Chart[".chartType"] = "Line";
// end of chart settings


$tdatafuelmaster_Chart[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafuelmaster_Chart[".strOrderBy"] = $tstrOrderBy;

$tdatafuelmaster_Chart[".orderindexes"] = array();

$tdatafuelmaster_Chart[".sqlHead"] = "SELECT FuelDate,  Vehicle,  Economy,  Id,  Round(Economy, 2) AS `Economy*1`,  Fleet";
$tdatafuelmaster_Chart[".sqlFrom"] = "FROM fuelmaster";
$tdatafuelmaster_Chart[".sqlWhereExpr"] = "";
$tdatafuelmaster_Chart[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafuelmaster_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafuelmaster_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdatafuelmaster_Chart[".highlightSearchResults"] = true;

$tableKeysfuelmaster_Chart = array();
$tdatafuelmaster_Chart[".Keys"] = $tableKeysfuelmaster_Chart;

$tdatafuelmaster_Chart[".listFields"] = array();
$tdatafuelmaster_Chart[".listFields"][] = "FuelDate";
$tdatafuelmaster_Chart[".listFields"][] = "Vehicle";
$tdatafuelmaster_Chart[".listFields"][] = "Economy";
$tdatafuelmaster_Chart[".listFields"][] = "Id";
$tdatafuelmaster_Chart[".listFields"][] = "Economy*1";
$tdatafuelmaster_Chart[".listFields"][] = "Fleet";

$tdatafuelmaster_Chart[".hideMobileList"] = array();


$tdatafuelmaster_Chart[".viewFields"] = array();
$tdatafuelmaster_Chart[".viewFields"][] = "FuelDate";
$tdatafuelmaster_Chart[".viewFields"][] = "Vehicle";
$tdatafuelmaster_Chart[".viewFields"][] = "Economy";
$tdatafuelmaster_Chart[".viewFields"][] = "Id";
$tdatafuelmaster_Chart[".viewFields"][] = "Economy*1";
$tdatafuelmaster_Chart[".viewFields"][] = "Fleet";

$tdatafuelmaster_Chart[".addFields"] = array();
$tdatafuelmaster_Chart[".addFields"][] = "FuelDate";
$tdatafuelmaster_Chart[".addFields"][] = "Vehicle";
$tdatafuelmaster_Chart[".addFields"][] = "Economy";
$tdatafuelmaster_Chart[".addFields"][] = "Fleet";

$tdatafuelmaster_Chart[".masterListFields"] = array();
$tdatafuelmaster_Chart[".masterListFields"][] = "FuelDate";
$tdatafuelmaster_Chart[".masterListFields"][] = "Vehicle";
$tdatafuelmaster_Chart[".masterListFields"][] = "Economy";
$tdatafuelmaster_Chart[".masterListFields"][] = "Id";
$tdatafuelmaster_Chart[".masterListFields"][] = "Economy*1";
$tdatafuelmaster_Chart[".masterListFields"][] = "Fleet";

$tdatafuelmaster_Chart[".inlineAddFields"] = array();
$tdatafuelmaster_Chart[".inlineAddFields"][] = "FuelDate";
$tdatafuelmaster_Chart[".inlineAddFields"][] = "Vehicle";
$tdatafuelmaster_Chart[".inlineAddFields"][] = "Economy";
$tdatafuelmaster_Chart[".inlineAddFields"][] = "Fleet";

$tdatafuelmaster_Chart[".editFields"] = array();
$tdatafuelmaster_Chart[".editFields"][] = "FuelDate";
$tdatafuelmaster_Chart[".editFields"][] = "Vehicle";
$tdatafuelmaster_Chart[".editFields"][] = "Economy";
$tdatafuelmaster_Chart[".editFields"][] = "Fleet";

$tdatafuelmaster_Chart[".inlineEditFields"] = array();
$tdatafuelmaster_Chart[".inlineEditFields"][] = "FuelDate";
$tdatafuelmaster_Chart[".inlineEditFields"][] = "Vehicle";
$tdatafuelmaster_Chart[".inlineEditFields"][] = "Economy";
$tdatafuelmaster_Chart[".inlineEditFields"][] = "Fleet";

$tdatafuelmaster_Chart[".updateSelectedFields"] = array();
$tdatafuelmaster_Chart[".updateSelectedFields"][] = "FuelDate";
$tdatafuelmaster_Chart[".updateSelectedFields"][] = "Vehicle";
$tdatafuelmaster_Chart[".updateSelectedFields"][] = "Economy";
$tdatafuelmaster_Chart[".updateSelectedFields"][] = "Fleet";


$tdatafuelmaster_Chart[".exportFields"] = array();
$tdatafuelmaster_Chart[".exportFields"][] = "FuelDate";
$tdatafuelmaster_Chart[".exportFields"][] = "Vehicle";
$tdatafuelmaster_Chart[".exportFields"][] = "Economy";
$tdatafuelmaster_Chart[".exportFields"][] = "Id";
$tdatafuelmaster_Chart[".exportFields"][] = "Economy*1";
$tdatafuelmaster_Chart[".exportFields"][] = "Fleet";

$tdatafuelmaster_Chart[".importFields"] = array();
$tdatafuelmaster_Chart[".importFields"][] = "FuelDate";
$tdatafuelmaster_Chart[".importFields"][] = "Vehicle";
$tdatafuelmaster_Chart[".importFields"][] = "Economy";
$tdatafuelmaster_Chart[".importFields"][] = "Id";
$tdatafuelmaster_Chart[".importFields"][] = "Economy*1";
$tdatafuelmaster_Chart[".importFields"][] = "Fleet";

$tdatafuelmaster_Chart[".printFields"] = array();
$tdatafuelmaster_Chart[".printFields"][] = "FuelDate";
$tdatafuelmaster_Chart[".printFields"][] = "Vehicle";
$tdatafuelmaster_Chart[".printFields"][] = "Economy";
$tdatafuelmaster_Chart[".printFields"][] = "Id";
$tdatafuelmaster_Chart[".printFields"][] = "Economy*1";
$tdatafuelmaster_Chart[".printFields"][] = "Fleet";

//	FuelDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "FuelDate";
	$fdata["GoodName"] = "FuelDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart","FuelDate");
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

		$fdata["strField"] = "FuelDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FuelDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 100;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings




	$tdatafuelmaster_Chart["FuelDate"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart","Vehicle");
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

		$fdata["strField"] = "Vehicle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Vehicle";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "vehiclemaster";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"LastMileage", 'lookupF'=>"Last Mileage");
	$edata["autoCompleteFields"][] = array('masterF'=>"Driver", 'lookupF'=>"DriverAsigned");
	$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "RegNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RegNo";

	
	$edata["LookupOrderBy"] = "RegNo";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Fleet", "lookup" => "Fleet" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 100;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings




	$tdatafuelmaster_Chart["Vehicle"] = $fdata;
//	Economy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Economy";
	$fdata["GoodName"] = "Economy";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart","Economy");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Economy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Economy";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 100;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatafuelmaster_Chart["Economy"] = $fdata;
//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart","Id");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_Chart["Id"] = $fdata;
//	Economy*1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Economy*1";
	$fdata["GoodName"] = "Economy_1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart","Economy_1");
	$fdata["FieldType"] = 5;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Economy*1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Round(Economy, 2)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_Chart["Economy*1"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart","Fleet");
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

		$fdata["strField"] = "Fleet";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fleet";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "fleettype";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "FleetType";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "FleetType";

	
	$edata["LookupOrderBy"] = "FleetType";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "Vehicle";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 100;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings




	$tdatafuelmaster_Chart["Fleet"] = $fdata;

	$tdatafuelmaster_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">fuelmaster Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">line</attr>
		</attr>

		<attr value="parameters">';
	$tdatafuelmaster_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">Economy*1</attr>';
	$tdatafuelmaster_Chart[".chartXml"] .= '</attr>';
	$tdatafuelmaster_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">FuelDate</attr>
	</attr>';
	$tdatafuelmaster_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatafuelmaster_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("Fuel Economy Chart").'</attr>
<attr value="foot">'.xmlencode("Refueling Instances").'</attr>
<attr value="y_axis_label">'.xmlencode("Id").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">false</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatafuelmaster_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatafuelmaster_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">FuelDate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart","FuelDate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">Vehicle</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart","Vehicle")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">Economy</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart","Economy")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart[".chartXml"] .= '<attr value="3">
		<attr value="name">Id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart","Id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart[".chartXml"] .= '<attr value="4">
		<attr value="name">Economy*1</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart","Economy_1")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart[".chartXml"] .= '<attr value="5">
		<attr value="name">Fleet</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart","Fleet")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatafuelmaster_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">fuelmaster Chart</attr>
<attr value="short_table_name">fuelmaster_Chart</attr>
</attr>

</chart>';

$tables_data["fuelmaster Chart"]=&$tdatafuelmaster_Chart;
$field_labels["fuelmaster_Chart"] = &$fieldLabelsfuelmaster_Chart;
$fieldToolTips["fuelmaster_Chart"] = &$fieldToolTipsfuelmaster_Chart;
$page_titles["fuelmaster_Chart"] = &$pageTitlesfuelmaster_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["fuelmaster Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["fuelmaster Chart"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_fuelmaster_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "FuelDate,  Vehicle,  Economy,  Id,  Round(Economy, 2) AS `Economy*1`,  Fleet";
$proto0["m_strFrom"] = "FROM fuelmaster";
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
	"m_strName" => "FuelDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart"
));

$proto6["m_sql"] = "FuelDate";
$proto6["m_srcTableName"] = "fuelmaster Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart"
));

$proto8["m_sql"] = "Vehicle";
$proto8["m_srcTableName"] = "fuelmaster Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Economy",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart"
));

$proto10["m_sql"] = "Economy";
$proto10["m_srcTableName"] = "fuelmaster Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Id",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart"
));

$proto12["m_sql"] = "Id";
$proto12["m_srcTableName"] = "fuelmaster Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_CUSTOM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Economy"
));

$proto15["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "2"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "Round";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "Round(Economy, 2)";
$proto14["m_srcTableName"] = "fuelmaster Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "Economy*1";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart"
));

$proto18["m_sql"] = "Fleet";
$proto18["m_srcTableName"] = "fuelmaster Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "fuelmaster";
$proto21["m_srcTableName"] = "fuelmaster Chart";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "Id";
$proto21["m_columns"][] = "SystemDate";
$proto21["m_columns"][] = "FuelDate";
$proto21["m_columns"][] = "Vehicle";
$proto21["m_columns"][] = "MeterReading";
$proto21["m_columns"][] = "LitersPumped";
$proto21["m_columns"][] = "PricePerLiter";
$proto21["m_columns"][] = "FuelStation";
$proto21["m_columns"][] = "Fleet";
$proto21["m_columns"][] = "LastMileage";
$proto21["m_columns"][] = "Economy";
$proto21["m_columns"][] = "FillType";
$proto21["m_columns"][] = "CouponNo";
$proto21["m_columns"][] = "Driver";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "fuelmaster";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "fuelmaster Chart";
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
$proto0["m_srcTableName"]="fuelmaster Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fuelmaster_Chart = createSqlQuery_fuelmaster_Chart();


	
					
;

						

$tdatafuelmaster_Chart[".sqlquery"] = $queryData_fuelmaster_Chart;

$tableEvents["fuelmaster Chart"] = new eventsBase;
$tdatafuelmaster_Chart[".hasEvents"] = false;

?>