<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamaintenenace_Chart = array();
	$tdatamaintenenace_Chart[".ShortName"] = "maintenenace_Chart";
	$tdatamaintenenace_Chart[".OwnerID"] = "";
	$tdatamaintenenace_Chart[".OriginalTable"] = "maintenenace";

//	field labels
$fieldLabelsmaintenenace_Chart = array();
$fieldToolTipsmaintenenace_Chart = array();
$pageTitlesmaintenenace_Chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmaintenenace_Chart["English"] = array();
	$fieldToolTipsmaintenenace_Chart["English"] = array();
	$pageTitlesmaintenenace_Chart["English"] = array();
	$fieldLabelsmaintenenace_Chart["English"]["Fleet"] = "Fleet";
	$fieldToolTipsmaintenenace_Chart["English"]["Fleet"] = "";
	$fieldLabelsmaintenenace_Chart["English"]["Vehicle"] = "Vehicle";
	$fieldToolTipsmaintenenace_Chart["English"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_Chart["English"]["Cost"] = "Cost";
	$fieldToolTipsmaintenenace_Chart["English"]["Cost"] = "";
	$fieldLabelsmaintenenace_Chart["English"]["Date"] = "Date";
	$fieldToolTipsmaintenenace_Chart["English"]["Date"] = "";
	$fieldLabelsmaintenenace_Chart["English"]["MaintType"] = "Maint Type";
	$fieldToolTipsmaintenenace_Chart["English"]["MaintType"] = "";
	$fieldLabelsmaintenenace_Chart["English"]["Cost_1"] = "Cost";
	$fieldToolTipsmaintenenace_Chart["English"]["Cost_1"] = "";
	if (count($fieldToolTipsmaintenenace_Chart["English"]))
		$tdatamaintenenace_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsmaintenenace_Chart["Afrikaans"] = array();
	$fieldToolTipsmaintenenace_Chart["Afrikaans"] = array();
	$pageTitlesmaintenenace_Chart["Afrikaans"] = array();
	$fieldLabelsmaintenenace_Chart["Afrikaans"]["Fleet"] = "vloot";
	$fieldToolTipsmaintenenace_Chart["Afrikaans"]["Fleet"] = "";
	$fieldLabelsmaintenenace_Chart["Afrikaans"]["Vehicle"] = "voertuig";
	$fieldToolTipsmaintenenace_Chart["Afrikaans"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_Chart["Afrikaans"]["Cost"] = "koste";
	$fieldToolTipsmaintenenace_Chart["Afrikaans"]["Cost"] = "";
	$fieldLabelsmaintenenace_Chart["Afrikaans"]["Date"] = "datum";
	$fieldToolTipsmaintenenace_Chart["Afrikaans"]["Date"] = "";
	$fieldLabelsmaintenenace_Chart["Afrikaans"]["MaintType"] = "maint Tipe";
	$fieldToolTipsmaintenenace_Chart["Afrikaans"]["MaintType"] = "";
	$fieldLabelsmaintenenace_Chart["Afrikaans"]["Cost_1"] = "koste";
	$fieldToolTipsmaintenenace_Chart["Afrikaans"]["Cost_1"] = "";
	if (count($fieldToolTipsmaintenenace_Chart["Afrikaans"]))
		$tdatamaintenenace_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsmaintenenace_Chart["Arabic"] = array();
	$fieldToolTipsmaintenenace_Chart["Arabic"] = array();
	$pageTitlesmaintenenace_Chart["Arabic"] = array();
	$fieldLabelsmaintenenace_Chart["Arabic"]["Fleet"] = "?????";
	$fieldToolTipsmaintenenace_Chart["Arabic"]["Fleet"] = "";
	$fieldLabelsmaintenenace_Chart["Arabic"]["Vehicle"] = "?????";
	$fieldToolTipsmaintenenace_Chart["Arabic"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_Chart["Arabic"]["Cost"] = "????";
	$fieldToolTipsmaintenenace_Chart["Arabic"]["Cost"] = "";
	$fieldLabelsmaintenenace_Chart["Arabic"]["Date"] = "?????";
	$fieldToolTipsmaintenenace_Chart["Arabic"]["Date"] = "";
	$fieldLabelsmaintenenace_Chart["Arabic"]["MaintType"] = "??? ???????";
	$fieldToolTipsmaintenenace_Chart["Arabic"]["MaintType"] = "";
	$fieldLabelsmaintenenace_Chart["Arabic"]["Cost_1"] = "????";
	$fieldToolTipsmaintenenace_Chart["Arabic"]["Cost_1"] = "";
	if (count($fieldToolTipsmaintenenace_Chart["Arabic"]))
		$tdatamaintenenace_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsmaintenenace_Chart["Chinese"] = array();
	$fieldToolTipsmaintenenace_Chart["Chinese"] = array();
	$pageTitlesmaintenenace_Chart["Chinese"] = array();
	$fieldLabelsmaintenenace_Chart["Chinese"]["Fleet"] = "??";
	$fieldToolTipsmaintenenace_Chart["Chinese"]["Fleet"] = "";
	$fieldLabelsmaintenenace_Chart["Chinese"]["Vehicle"] = "??";
	$fieldToolTipsmaintenenace_Chart["Chinese"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_Chart["Chinese"]["Cost"] = "??";
	$fieldToolTipsmaintenenace_Chart["Chinese"]["Cost"] = "";
	$fieldLabelsmaintenenace_Chart["Chinese"]["Date"] = "??";
	$fieldToolTipsmaintenenace_Chart["Chinese"]["Date"] = "";
	$fieldLabelsmaintenenace_Chart["Chinese"]["MaintType"] = "????";
	$fieldToolTipsmaintenenace_Chart["Chinese"]["MaintType"] = "";
	$fieldLabelsmaintenenace_Chart["Chinese"]["Cost_1"] = "??";
	$fieldToolTipsmaintenenace_Chart["Chinese"]["Cost_1"] = "";
	if (count($fieldToolTipsmaintenenace_Chart["Chinese"]))
		$tdatamaintenenace_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsmaintenenace_Chart["French"] = array();
	$fieldToolTipsmaintenenace_Chart["French"] = array();
	$pageTitlesmaintenenace_Chart["French"] = array();
	$fieldLabelsmaintenenace_Chart["French"]["Fleet"] = "Flotte";
	$fieldToolTipsmaintenenace_Chart["French"]["Fleet"] = "";
	$fieldLabelsmaintenenace_Chart["French"]["Vehicle"] = "Véhicule";
	$fieldToolTipsmaintenenace_Chart["French"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_Chart["French"]["Cost"] = "Coût";
	$fieldToolTipsmaintenenace_Chart["French"]["Cost"] = "";
	$fieldLabelsmaintenenace_Chart["French"]["Date"] = "date";
	$fieldToolTipsmaintenenace_Chart["French"]["Date"] = "";
	$fieldLabelsmaintenenace_Chart["French"]["MaintType"] = "Type d'entretien";
	$fieldToolTipsmaintenenace_Chart["French"]["MaintType"] = "";
	$fieldLabelsmaintenenace_Chart["French"]["Cost_1"] = "Coût";
	$fieldToolTipsmaintenenace_Chart["French"]["Cost_1"] = "";
	if (count($fieldToolTipsmaintenenace_Chart["French"]))
		$tdatamaintenenace_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsmaintenenace_Chart["German"] = array();
	$fieldToolTipsmaintenenace_Chart["German"] = array();
	$pageTitlesmaintenenace_Chart["German"] = array();
	$fieldLabelsmaintenenace_Chart["German"]["Fleet"] = "Flotte";
	$fieldToolTipsmaintenenace_Chart["German"]["Fleet"] = "";
	$fieldLabelsmaintenenace_Chart["German"]["Vehicle"] = "Fahrzeug";
	$fieldToolTipsmaintenenace_Chart["German"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_Chart["German"]["Cost"] = "Kosten";
	$fieldToolTipsmaintenenace_Chart["German"]["Cost"] = "";
	$fieldLabelsmaintenenace_Chart["German"]["Date"] = "Datum";
	$fieldToolTipsmaintenenace_Chart["German"]["Date"] = "";
	$fieldLabelsmaintenenace_Chart["German"]["MaintType"] = "Maint Type";
	$fieldToolTipsmaintenenace_Chart["German"]["MaintType"] = "";
	$fieldLabelsmaintenenace_Chart["German"]["Cost_1"] = "Kosten";
	$fieldToolTipsmaintenenace_Chart["German"]["Cost_1"] = "";
	if (count($fieldToolTipsmaintenenace_Chart["German"]))
		$tdatamaintenenace_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsmaintenenace_Chart["Italian"] = array();
	$fieldToolTipsmaintenenace_Chart["Italian"] = array();
	$pageTitlesmaintenenace_Chart["Italian"] = array();
	$fieldLabelsmaintenenace_Chart["Italian"]["Fleet"] = "Flotta";
	$fieldToolTipsmaintenenace_Chart["Italian"]["Fleet"] = "";
	$fieldLabelsmaintenenace_Chart["Italian"]["Vehicle"] = "Veicolo";
	$fieldToolTipsmaintenenace_Chart["Italian"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_Chart["Italian"]["Cost"] = "Costo";
	$fieldToolTipsmaintenenace_Chart["Italian"]["Cost"] = "";
	$fieldLabelsmaintenenace_Chart["Italian"]["Date"] = "Data";
	$fieldToolTipsmaintenenace_Chart["Italian"]["Date"] = "";
	$fieldLabelsmaintenenace_Chart["Italian"]["MaintType"] = "Tipo maint";
	$fieldToolTipsmaintenenace_Chart["Italian"]["MaintType"] = "";
	$fieldLabelsmaintenenace_Chart["Italian"]["Cost_1"] = "Costo";
	$fieldToolTipsmaintenenace_Chart["Italian"]["Cost_1"] = "";
	if (count($fieldToolTipsmaintenenace_Chart["Italian"]))
		$tdatamaintenenace_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsmaintenenace_Chart["Russian"] = array();
	$fieldToolTipsmaintenenace_Chart["Russian"] = array();
	$pageTitlesmaintenenace_Chart["Russian"] = array();
	$fieldLabelsmaintenenace_Chart["Russian"]["Fleet"] = "????";
	$fieldToolTipsmaintenenace_Chart["Russian"]["Fleet"] = "";
	$fieldLabelsmaintenenace_Chart["Russian"]["Vehicle"] = "???????? ????????????";
	$fieldToolTipsmaintenenace_Chart["Russian"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_Chart["Russian"]["Cost"] = "?????????";
	$fieldToolTipsmaintenenace_Chart["Russian"]["Cost"] = "";
	$fieldLabelsmaintenenace_Chart["Russian"]["Date"] = "????";
	$fieldToolTipsmaintenenace_Chart["Russian"]["Date"] = "";
	$fieldLabelsmaintenenace_Chart["Russian"]["MaintType"] = "????? ???";
	$fieldToolTipsmaintenenace_Chart["Russian"]["MaintType"] = "";
	$fieldLabelsmaintenenace_Chart["Russian"]["Cost_1"] = "?????????";
	$fieldToolTipsmaintenenace_Chart["Russian"]["Cost_1"] = "";
	if (count($fieldToolTipsmaintenenace_Chart["Russian"]))
		$tdatamaintenenace_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmaintenenace_Chart["Spanish"] = array();
	$fieldToolTipsmaintenenace_Chart["Spanish"] = array();
	$pageTitlesmaintenenace_Chart["Spanish"] = array();
	$fieldLabelsmaintenenace_Chart["Spanish"]["Fleet"] = "Flota";
	$fieldToolTipsmaintenenace_Chart["Spanish"]["Fleet"] = "";
	$fieldLabelsmaintenenace_Chart["Spanish"]["Vehicle"] = "Vehículo";
	$fieldToolTipsmaintenenace_Chart["Spanish"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_Chart["Spanish"]["Cost"] = "Costo";
	$fieldToolTipsmaintenenace_Chart["Spanish"]["Cost"] = "";
	$fieldLabelsmaintenenace_Chart["Spanish"]["Date"] = "Fecha";
	$fieldToolTipsmaintenenace_Chart["Spanish"]["Date"] = "";
	$fieldLabelsmaintenenace_Chart["Spanish"]["MaintType"] = "Tipo de mantenimiento";
	$fieldToolTipsmaintenenace_Chart["Spanish"]["MaintType"] = "";
	$fieldLabelsmaintenenace_Chart["Spanish"]["Cost_1"] = "Costo";
	$fieldToolTipsmaintenenace_Chart["Spanish"]["Cost_1"] = "";
	if (count($fieldToolTipsmaintenenace_Chart["Spanish"]))
		$tdatamaintenenace_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmaintenenace_Chart[""] = array();
	$fieldToolTipsmaintenenace_Chart[""] = array();
	$pageTitlesmaintenenace_Chart[""] = array();
	if (count($fieldToolTipsmaintenenace_Chart[""]))
		$tdatamaintenenace_Chart[".isUseToolTips"] = true;
}


	$tdatamaintenenace_Chart[".NCSearch"] = true;

	$tdatamaintenenace_Chart[".ChartRefreshTime"] = 0;


$tdatamaintenenace_Chart[".shortTableName"] = "maintenenace_Chart";
$tdatamaintenenace_Chart[".nSecOptions"] = 0;
$tdatamaintenenace_Chart[".recsPerRowPrint"] = 1;
$tdatamaintenenace_Chart[".mainTableOwnerID"] = "";
$tdatamaintenenace_Chart[".moveNext"] = 1;
$tdatamaintenenace_Chart[".entityType"] = 3;

$tdatamaintenenace_Chart[".strOriginalTableName"] = "maintenenace";

		 



$tdatamaintenenace_Chart[".showAddInPopup"] = false;

$tdatamaintenenace_Chart[".showEditInPopup"] = false;

$tdatamaintenenace_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamaintenenace_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamaintenenace_Chart[".fieldsForRegister"] = array();

$tdatamaintenenace_Chart[".listAjax"] = false;

	$tdatamaintenenace_Chart[".audit"] = false;

	$tdatamaintenenace_Chart[".locking"] = false;


$tdatamaintenenace_Chart[".add"] = true;
$tdatamaintenenace_Chart[".afterAddAction"] = 1;
$tdatamaintenenace_Chart[".closePopupAfterAdd"] = 1;
$tdatamaintenenace_Chart[".afterAddActionDetTable"] = "";

$tdatamaintenenace_Chart[".list"] = true;




$tdatamaintenenace_Chart[".inlineAdd"] = true;





$tdatamaintenenace_Chart[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamaintenenace_Chart[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamaintenenace_Chart[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamaintenenace_Chart[".searchSaving"] = false;
//

$tdatamaintenenace_Chart[".showSearchPanel"] = true;
		$tdatamaintenenace_Chart[".flexibleSearch"] = true;

$tdatamaintenenace_Chart[".isUseAjaxSuggest"] = true;




$tdatamaintenenace_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamaintenenace_Chart[".isUseTimeForSearch"] = false;





$tdatamaintenenace_Chart[".allSearchFields"] = array();
$tdatamaintenenace_Chart[".filterFields"] = array();
$tdatamaintenenace_Chart[".requiredSearchFields"] = array();

$tdatamaintenenace_Chart[".allSearchFields"][] = "Fleet";
	$tdatamaintenenace_Chart[".allSearchFields"][] = "Vehicle";
	$tdatamaintenenace_Chart[".allSearchFields"][] = "Date";
	$tdatamaintenenace_Chart[".allSearchFields"][] = "MaintType";
	$tdatamaintenenace_Chart[".allSearchFields"][] = "Cost*1";
	

$tdatamaintenenace_Chart[".googleLikeFields"] = array();
$tdatamaintenenace_Chart[".googleLikeFields"][] = "Fleet";
$tdatamaintenenace_Chart[".googleLikeFields"][] = "Vehicle";
$tdatamaintenenace_Chart[".googleLikeFields"][] = "Date";
$tdatamaintenenace_Chart[".googleLikeFields"][] = "MaintType";
$tdatamaintenenace_Chart[".googleLikeFields"][] = "Cost*1";

$tdatamaintenenace_Chart[".panelSearchFields"] = array();
$tdatamaintenenace_Chart[".searchPanelOptions"] = array();
$tdatamaintenenace_Chart[".panelSearchFields"][] = "Fleet";
	$tdatamaintenenace_Chart[".panelSearchFields"][] = "Vehicle";
	$tdatamaintenenace_Chart[".panelSearchFields"][] = "Date";
	$tdatamaintenenace_Chart[".panelSearchFields"][] = "MaintType";
	
$tdatamaintenenace_Chart[".advSearchFields"] = array();
$tdatamaintenenace_Chart[".advSearchFields"][] = "Fleet";
$tdatamaintenenace_Chart[".advSearchFields"][] = "Vehicle";
$tdatamaintenenace_Chart[".advSearchFields"][] = "Date";
$tdatamaintenenace_Chart[".advSearchFields"][] = "MaintType";
$tdatamaintenenace_Chart[".advSearchFields"][] = "Cost*1";

$tdatamaintenenace_Chart[".tableType"] = "chart";

$tdatamaintenenace_Chart[".printerPageOrientation"] = 0;
$tdatamaintenenace_Chart[".nPrinterPageScale"] = 100;

$tdatamaintenenace_Chart[".nPrinterSplitRecords"] = 40;

$tdatamaintenenace_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdatamaintenenace_Chart[".geocodingEnabled"] = false;



// chart settings
$tdatamaintenenace_Chart[".chartType"] = "2DColumn";
// end of chart settings


$tdatamaintenenace_Chart[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamaintenenace_Chart[".strOrderBy"] = $tstrOrderBy;

$tdatamaintenenace_Chart[".orderindexes"] = array();

$tdatamaintenenace_Chart[".sqlHead"] = "SELECT Fleet,  Vehicle,  Cost,  `Date`,  MaintType,  Cost*1 AS `Cost*1`";
$tdatamaintenenace_Chart[".sqlFrom"] = "FROM maintenenace";
$tdatamaintenenace_Chart[".sqlWhereExpr"] = "";
$tdatamaintenenace_Chart[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamaintenenace_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamaintenenace_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdatamaintenenace_Chart[".highlightSearchResults"] = true;

$tableKeysmaintenenace_Chart = array();
$tdatamaintenenace_Chart[".Keys"] = $tableKeysmaintenenace_Chart;

$tdatamaintenenace_Chart[".listFields"] = array();
$tdatamaintenenace_Chart[".listFields"][] = "Fleet";
$tdatamaintenenace_Chart[".listFields"][] = "Vehicle";
$tdatamaintenenace_Chart[".listFields"][] = "Cost";
$tdatamaintenenace_Chart[".listFields"][] = "Date";
$tdatamaintenenace_Chart[".listFields"][] = "MaintType";
$tdatamaintenenace_Chart[".listFields"][] = "Cost*1";

$tdatamaintenenace_Chart[".hideMobileList"] = array();


$tdatamaintenenace_Chart[".viewFields"] = array();
$tdatamaintenenace_Chart[".viewFields"][] = "Fleet";
$tdatamaintenenace_Chart[".viewFields"][] = "Vehicle";
$tdatamaintenenace_Chart[".viewFields"][] = "Cost";
$tdatamaintenenace_Chart[".viewFields"][] = "Date";
$tdatamaintenenace_Chart[".viewFields"][] = "MaintType";
$tdatamaintenenace_Chart[".viewFields"][] = "Cost*1";

$tdatamaintenenace_Chart[".addFields"] = array();
$tdatamaintenenace_Chart[".addFields"][] = "Fleet";
$tdatamaintenenace_Chart[".addFields"][] = "Vehicle";
$tdatamaintenenace_Chart[".addFields"][] = "Cost";
$tdatamaintenenace_Chart[".addFields"][] = "Date";
$tdatamaintenenace_Chart[".addFields"][] = "MaintType";

$tdatamaintenenace_Chart[".masterListFields"] = array();
$tdatamaintenenace_Chart[".masterListFields"][] = "Fleet";
$tdatamaintenenace_Chart[".masterListFields"][] = "Vehicle";
$tdatamaintenenace_Chart[".masterListFields"][] = "Cost";
$tdatamaintenenace_Chart[".masterListFields"][] = "Date";
$tdatamaintenenace_Chart[".masterListFields"][] = "MaintType";
$tdatamaintenenace_Chart[".masterListFields"][] = "Cost*1";

$tdatamaintenenace_Chart[".inlineAddFields"] = array();
$tdatamaintenenace_Chart[".inlineAddFields"][] = "Fleet";
$tdatamaintenenace_Chart[".inlineAddFields"][] = "Vehicle";
$tdatamaintenenace_Chart[".inlineAddFields"][] = "Cost";
$tdatamaintenenace_Chart[".inlineAddFields"][] = "Date";
$tdatamaintenenace_Chart[".inlineAddFields"][] = "MaintType";

$tdatamaintenenace_Chart[".editFields"] = array();
$tdatamaintenenace_Chart[".editFields"][] = "Fleet";
$tdatamaintenenace_Chart[".editFields"][] = "Vehicle";
$tdatamaintenenace_Chart[".editFields"][] = "Cost";
$tdatamaintenenace_Chart[".editFields"][] = "Date";
$tdatamaintenenace_Chart[".editFields"][] = "MaintType";

$tdatamaintenenace_Chart[".inlineEditFields"] = array();
$tdatamaintenenace_Chart[".inlineEditFields"][] = "Fleet";
$tdatamaintenenace_Chart[".inlineEditFields"][] = "Vehicle";
$tdatamaintenenace_Chart[".inlineEditFields"][] = "Cost";
$tdatamaintenenace_Chart[".inlineEditFields"][] = "Date";
$tdatamaintenenace_Chart[".inlineEditFields"][] = "MaintType";

$tdatamaintenenace_Chart[".updateSelectedFields"] = array();
$tdatamaintenenace_Chart[".updateSelectedFields"][] = "Fleet";
$tdatamaintenenace_Chart[".updateSelectedFields"][] = "Vehicle";
$tdatamaintenenace_Chart[".updateSelectedFields"][] = "Cost";
$tdatamaintenenace_Chart[".updateSelectedFields"][] = "Date";
$tdatamaintenenace_Chart[".updateSelectedFields"][] = "MaintType";


$tdatamaintenenace_Chart[".exportFields"] = array();
$tdatamaintenenace_Chart[".exportFields"][] = "Fleet";
$tdatamaintenenace_Chart[".exportFields"][] = "Vehicle";
$tdatamaintenenace_Chart[".exportFields"][] = "Cost";
$tdatamaintenenace_Chart[".exportFields"][] = "Date";
$tdatamaintenenace_Chart[".exportFields"][] = "MaintType";
$tdatamaintenenace_Chart[".exportFields"][] = "Cost*1";

$tdatamaintenenace_Chart[".importFields"] = array();
$tdatamaintenenace_Chart[".importFields"][] = "Fleet";
$tdatamaintenenace_Chart[".importFields"][] = "Vehicle";
$tdatamaintenenace_Chart[".importFields"][] = "Cost";
$tdatamaintenenace_Chart[".importFields"][] = "Date";
$tdatamaintenenace_Chart[".importFields"][] = "MaintType";
$tdatamaintenenace_Chart[".importFields"][] = "Cost*1";

$tdatamaintenenace_Chart[".printFields"] = array();
$tdatamaintenenace_Chart[".printFields"][] = "Fleet";
$tdatamaintenenace_Chart[".printFields"][] = "Vehicle";
$tdatamaintenenace_Chart[".printFields"][] = "Cost";
$tdatamaintenenace_Chart[".printFields"][] = "Date";
$tdatamaintenenace_Chart[".printFields"][] = "MaintType";
$tdatamaintenenace_Chart[".printFields"][] = "Cost*1";

//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_Chart","Fleet");
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

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

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
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings




	$tdatamaintenenace_Chart["Fleet"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_Chart","Vehicle");
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
		$edata["autoCompleteFields"][] = array('masterF'=>"Fleet", 'lookupF'=>"Fleet");
	$edata["autoCompleteFields"][] = array('masterF'=>"Type", 'lookupF'=>"Type");
	$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "RegNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RegNo";

	
	$edata["LookupOrderBy"] = "RegNo";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

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
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings




	$tdatamaintenenace_Chart["Vehicle"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_Chart","Cost");
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

		$fdata["strField"] = "Cost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cost";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamaintenenace_Chart["Cost"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_Chart","Date");
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

		$fdata["strField"] = "Date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Date`";

	
	
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

	
	
	
		$edata["controlWidth"] = 200;

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




	$tdatamaintenenace_Chart["Date"] = $fdata;
//	MaintType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MaintType";
	$fdata["GoodName"] = "MaintType";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_Chart","MaintType");
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

		$fdata["strField"] = "MaintType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MaintType";

	
	
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
	$edata["LookupTable"] = "servicetypemaster";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Type";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Type";

	
	$edata["LookupOrderBy"] = "Type";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings




	$tdatamaintenenace_Chart["MaintType"] = $fdata;
//	Cost*1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cost*1";
	$fdata["GoodName"] = "Cost_1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("maintenenace_Chart","Cost_1");
	$fdata["FieldType"] = 5;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Cost*1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cost*1";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamaintenenace_Chart["Cost*1"] = $fdata;

	$tdatamaintenenace_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">maintenenace Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatamaintenenace_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">Cost*1</attr>';
	$tdatamaintenenace_Chart[".chartXml"] .= '</attr>';
	$tdatamaintenenace_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">Vehicle</attr>
	</attr>';
	$tdatamaintenenace_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatamaintenenace_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("Maintenance Costs").'</attr>
<attr value="foot">'.xmlencode("Vehicle").'</attr>
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
$tdatamaintenenace_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatamaintenenace_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">Fleet</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("maintenenace_Chart","Fleet")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamaintenenace_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">Vehicle</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("maintenenace_Chart","Vehicle")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamaintenenace_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">Cost</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("maintenenace_Chart","Cost")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamaintenenace_Chart[".chartXml"] .= '<attr value="3">
		<attr value="name">Date</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("maintenenace_Chart","Date")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamaintenenace_Chart[".chartXml"] .= '<attr value="4">
		<attr value="name">MaintType</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("maintenenace_Chart","MaintType")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamaintenenace_Chart[".chartXml"] .= '<attr value="5">
		<attr value="name">Cost*1</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("maintenenace_Chart","Cost_1")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatamaintenenace_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">maintenenace Chart</attr>
<attr value="short_table_name">maintenenace_Chart</attr>
</attr>

</chart>';

$tables_data["maintenenace Chart"]=&$tdatamaintenenace_Chart;
$field_labels["maintenenace_Chart"] = &$fieldLabelsmaintenenace_Chart;
$fieldToolTips["maintenenace_Chart"] = &$fieldToolTipsmaintenenace_Chart;
$page_titles["maintenenace_Chart"] = &$pageTitlesmaintenenace_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["maintenenace Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["maintenenace Chart"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_maintenenace_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Fleet,  Vehicle,  Cost,  `Date`,  MaintType,  Cost*1 AS `Cost*1`";
$proto0["m_strFrom"] = "FROM maintenenace";
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
	"m_strName" => "Fleet",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace Chart"
));

$proto6["m_sql"] = "Fleet";
$proto6["m_srcTableName"] = "maintenenace Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace Chart"
));

$proto8["m_sql"] = "Vehicle";
$proto8["m_srcTableName"] = "maintenenace Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace Chart"
));

$proto10["m_sql"] = "Cost";
$proto10["m_srcTableName"] = "maintenenace Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace Chart"
));

$proto12["m_sql"] = "`Date`";
$proto12["m_srcTableName"] = "maintenenace Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MaintType",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace Chart"
));

$proto14["m_sql"] = "MaintType";
$proto14["m_srcTableName"] = "maintenenace Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "Cost*1"
));

$proto16["m_sql"] = "Cost*1";
$proto16["m_srcTableName"] = "maintenenace Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "Cost*1";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "maintenenace";
$proto19["m_srcTableName"] = "maintenenace Chart";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "Id";
$proto19["m_columns"][] = "Fleet";
$proto19["m_columns"][] = "Vehicle";
$proto19["m_columns"][] = "Type";
$proto19["m_columns"][] = "Supplier";
$proto19["m_columns"][] = "Cost";
$proto19["m_columns"][] = "Remarks";
$proto19["m_columns"][] = "RefNo";
$proto19["m_columns"][] = "SysDate";
$proto19["m_columns"][] = "Date";
$proto19["m_columns"][] = "EnteredBy";
$proto19["m_columns"][] = "Approval";
$proto19["m_columns"][] = "MeterReading";
$proto19["m_columns"][] = "AccidentRef";
$proto19["m_columns"][] = "PaymentVoucher";
$proto19["m_columns"][] = "MaintType";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "maintenenace";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "maintenenace Chart";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="maintenenace Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_maintenenace_Chart = createSqlQuery_maintenenace_Chart();


	
					
;

						

$tdatamaintenenace_Chart[".sqlquery"] = $queryData_maintenenace_Chart;

$tableEvents["maintenenace Chart"] = new eventsBase;
$tdatamaintenenace_Chart[".hasEvents"] = false;

?>