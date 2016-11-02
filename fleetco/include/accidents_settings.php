<?php
require_once(getabspath("classes/cipherer.php"));




$tdataaccidents = array();
	$tdataaccidents[".truncateText"] = true;
	$tdataaccidents[".NumberOfChars"] = 80;
	$tdataaccidents[".ShortName"] = "accidents";
	$tdataaccidents[".OwnerID"] = "";
	$tdataaccidents[".OriginalTable"] = "accidents";

//	field labels
$fieldLabelsaccidents = array();
$fieldToolTipsaccidents = array();
$pageTitlesaccidents = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsaccidents["English"] = array();
	$fieldToolTipsaccidents["English"] = array();
	$pageTitlesaccidents["English"] = array();
	$fieldLabelsaccidents["English"]["Id"] = "ID";
	$fieldToolTipsaccidents["English"]["Id"] = "";
	$fieldLabelsaccidents["English"]["SysDate"] = "Syst. Date";
	$fieldToolTipsaccidents["English"]["SysDate"] = "";
	$fieldLabelsaccidents["English"]["Date"] = "Date";
	$fieldToolTipsaccidents["English"]["Date"] = "";
	$fieldLabelsaccidents["English"]["Fleet"] = "Fleet";
	$fieldToolTipsaccidents["English"]["Fleet"] = "";
	$fieldLabelsaccidents["English"]["Vehicle"] = "Vehicle";
	$fieldToolTipsaccidents["English"]["Vehicle"] = "";
	$fieldLabelsaccidents["English"]["Type"] = "Type";
	$fieldToolTipsaccidents["English"]["Type"] = "";
	$fieldLabelsaccidents["English"]["Details"] = "Decrip.";
	$fieldToolTipsaccidents["English"]["Details"] = "Brief description of the accident";
	$fieldLabelsaccidents["English"]["Driver"] = "Driver";
	$fieldToolTipsaccidents["English"]["Driver"] = "";
	$fieldLabelsaccidents["English"]["Images"] = "Image";
	$fieldToolTipsaccidents["English"]["Images"] = "";
	$fieldLabelsaccidents["English"]["EnteredBy"] = "Entered";
	$fieldToolTipsaccidents["English"]["EnteredBy"] = "";
	$fieldLabelsaccidents["English"]["DamageToVehicle"] = "Veh. Dam.";
	$fieldToolTipsaccidents["English"]["DamageToVehicle"] = "Damage to our vehicle & goods";
	$fieldLabelsaccidents["English"]["3rdPartyDamages"] = "3rd Pty Da.";
	$fieldToolTipsaccidents["English"]["3rdPartyDamages"] = "Damages to 3rd parties";
	$fieldLabelsaccidents["English"]["Time"] = "Time";
	$fieldToolTipsaccidents["English"]["Time"] = "";
	$fieldLabelsaccidents["English"]["Deaths"] = "Deaths";
	$fieldToolTipsaccidents["English"]["Deaths"] = "No of deaths if any";
	$fieldLabelsaccidents["English"]["Location"] = "Location";
	$fieldToolTipsaccidents["English"]["Location"] = "";
	$fieldLabelsaccidents["English"]["Injured"] = "Injured";
	$fieldToolTipsaccidents["English"]["Injured"] = "No of persons injured if any";
	$fieldLabelsaccidents["English"]["StatusInjured"] = "Injured-St.";
	$fieldToolTipsaccidents["English"]["StatusInjured"] = "Status of the injured persons";
	if (count($fieldToolTipsaccidents["English"]))
		$tdataaccidents[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsaccidents[""] = array();
	$fieldToolTipsaccidents[""] = array();
	$pageTitlesaccidents[""] = array();
	if (count($fieldToolTipsaccidents[""]))
		$tdataaccidents[".isUseToolTips"] = true;
}


	$tdataaccidents[".NCSearch"] = true;



$tdataaccidents[".shortTableName"] = "accidents";
$tdataaccidents[".nSecOptions"] = 0;
$tdataaccidents[".recsPerRowPrint"] = 1;
$tdataaccidents[".mainTableOwnerID"] = "";
$tdataaccidents[".moveNext"] = 1;
$tdataaccidents[".entityType"] = 0;

$tdataaccidents[".strOriginalTableName"] = "accidents";

		 



$tdataaccidents[".showAddInPopup"] = false;

$tdataaccidents[".showEditInPopup"] = false;

$tdataaccidents[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataaccidents[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataaccidents[".fieldsForRegister"] = array();

	$tdataaccidents[".listAjax"] = true;

	$tdataaccidents[".audit"] = false;

	$tdataaccidents[".locking"] = false;

$tdataaccidents[".edit"] = true;
$tdataaccidents[".afterEditAction"] = 1;
$tdataaccidents[".closePopupAfterEdit"] = 1;
$tdataaccidents[".afterEditActionDetTable"] = "";

$tdataaccidents[".add"] = true;
$tdataaccidents[".afterAddAction"] = 1;
$tdataaccidents[".closePopupAfterAdd"] = 1;
$tdataaccidents[".afterAddActionDetTable"] = "";

$tdataaccidents[".list"] = true;

$tdataaccidents[".view"] = true;

$tdataaccidents[".import"] = true;

$tdataaccidents[".exportTo"] = true;

$tdataaccidents[".printFriendly"] = true;

$tdataaccidents[".delete"] = true;

$tdataaccidents[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataaccidents[".searchSaving"] = false;
//

$tdataaccidents[".showSearchPanel"] = true;
		$tdataaccidents[".flexibleSearch"] = true;

$tdataaccidents[".isUseAjaxSuggest"] = true;

$tdataaccidents[".rowHighlite"] = true;



$tdataaccidents[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaccidents[".isUseTimeForSearch"] = true;




$tdataaccidents[".detailsLinksOnList"] = "2";

$tdataaccidents[".allSearchFields"] = array();
$tdataaccidents[".filterFields"] = array();
$tdataaccidents[".requiredSearchFields"] = array();

$tdataaccidents[".allSearchFields"][] = "Id";
	$tdataaccidents[".allSearchFields"][] = "Date";
	$tdataaccidents[".allSearchFields"][] = "Vehicle";
	$tdataaccidents[".allSearchFields"][] = "Fleet";
	$tdataaccidents[".allSearchFields"][] = "Type";
	$tdataaccidents[".allSearchFields"][] = "Time";
	$tdataaccidents[".allSearchFields"][] = "Location";
	$tdataaccidents[".allSearchFields"][] = "Driver";
	$tdataaccidents[".allSearchFields"][] = "Deaths";
	$tdataaccidents[".allSearchFields"][] = "Injured";
	$tdataaccidents[".allSearchFields"][] = "StatusInjured";
	$tdataaccidents[".allSearchFields"][] = "Details";
	$tdataaccidents[".allSearchFields"][] = "DamageToVehicle";
	$tdataaccidents[".allSearchFields"][] = "EnteredBy";
	$tdataaccidents[".allSearchFields"][] = "3rdPartyDamages";
	$tdataaccidents[".allSearchFields"][] = "Images";
	$tdataaccidents[".allSearchFields"][] = "SysDate";
	

$tdataaccidents[".googleLikeFields"] = array();
$tdataaccidents[".googleLikeFields"][] = "Date";
$tdataaccidents[".googleLikeFields"][] = "Fleet";
$tdataaccidents[".googleLikeFields"][] = "Vehicle";
$tdataaccidents[".googleLikeFields"][] = "Type";
$tdataaccidents[".googleLikeFields"][] = "Details";
$tdataaccidents[".googleLikeFields"][] = "Driver";
$tdataaccidents[".googleLikeFields"][] = "Injured";
$tdataaccidents[".googleLikeFields"][] = "Images";
$tdataaccidents[".googleLikeFields"][] = "EnteredBy";
$tdataaccidents[".googleLikeFields"][] = "DamageToVehicle";
$tdataaccidents[".googleLikeFields"][] = "3rdPartyDamages";
$tdataaccidents[".googleLikeFields"][] = "Time";
$tdataaccidents[".googleLikeFields"][] = "Deaths";
$tdataaccidents[".googleLikeFields"][] = "Location";
$tdataaccidents[".googleLikeFields"][] = "StatusInjured";


$tdataaccidents[".advSearchFields"] = array();
$tdataaccidents[".advSearchFields"][] = "Id";
$tdataaccidents[".advSearchFields"][] = "Date";
$tdataaccidents[".advSearchFields"][] = "Vehicle";
$tdataaccidents[".advSearchFields"][] = "Fleet";
$tdataaccidents[".advSearchFields"][] = "Type";
$tdataaccidents[".advSearchFields"][] = "Time";
$tdataaccidents[".advSearchFields"][] = "Location";
$tdataaccidents[".advSearchFields"][] = "Driver";
$tdataaccidents[".advSearchFields"][] = "Deaths";
$tdataaccidents[".advSearchFields"][] = "Injured";
$tdataaccidents[".advSearchFields"][] = "StatusInjured";
$tdataaccidents[".advSearchFields"][] = "Details";
$tdataaccidents[".advSearchFields"][] = "DamageToVehicle";
$tdataaccidents[".advSearchFields"][] = "EnteredBy";
$tdataaccidents[".advSearchFields"][] = "3rdPartyDamages";
$tdataaccidents[".advSearchFields"][] = "Images";
$tdataaccidents[".advSearchFields"][] = "SysDate";

$tdataaccidents[".tableType"] = "list";

$tdataaccidents[".printerPageOrientation"] = 0;
$tdataaccidents[".nPrinterPageScale"] = 100;

$tdataaccidents[".nPrinterSplitRecords"] = 40;

$tdataaccidents[".nPrinterPDFSplitRecords"] = 40;



$tdataaccidents[".geocodingEnabled"] = false;





$tdataaccidents[".listGridLayout"] = 3;





// view page pdf
$tdataaccidents[".isViewPagePDF"] = true;
$tdataaccidents[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataaccidents[".isPrinterPagePDF"] = true;
$tdataaccidents[".nPrinterPagePDFScale"] = 100;

$tdataaccidents[".totalsFields"] = array();
$tdataaccidents[".totalsFields"][] = array(
	"fName" => "Deaths",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdataaccidents[".totalsFields"][] = array(
	"fName" => "Injured",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdataaccidents[".pageSize"] = 20;

$tdataaccidents[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataaccidents[".strOrderBy"] = $tstrOrderBy;

$tdataaccidents[".orderindexes"] = array();

$tdataaccidents[".sqlHead"] = "SELECT Id,  `SysDate`,  `Date`,  Fleet,  Vehicle,  `Type`,  Details,  Driver,  Injured,  Images,  EnteredBy,  DamageToVehicle,  `3rdPartyDamages`,  `Time`,  Deaths,  Location,  StatusInjured";
$tdataaccidents[".sqlFrom"] = "FROM accidents";
$tdataaccidents[".sqlWhereExpr"] = "";
$tdataaccidents[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdataaccidents[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaccidents[".arrGroupsPerPage"] = $arrGPP;

$tdataaccidents[".highlightSearchResults"] = true;

$tableKeysaccidents = array();
$tableKeysaccidents[] = "Id";
$tdataaccidents[".Keys"] = $tableKeysaccidents;

$tdataaccidents[".listFields"] = array();
$tdataaccidents[".listFields"][] = "Id";
$tdataaccidents[".listFields"][] = "Date";
$tdataaccidents[".listFields"][] = "Fleet";
$tdataaccidents[".listFields"][] = "Vehicle";
$tdataaccidents[".listFields"][] = "Type";
$tdataaccidents[".listFields"][] = "Time";
$tdataaccidents[".listFields"][] = "Location";
$tdataaccidents[".listFields"][] = "Driver";
$tdataaccidents[".listFields"][] = "Deaths";
$tdataaccidents[".listFields"][] = "Injured";
$tdataaccidents[".listFields"][] = "Details";
$tdataaccidents[".listFields"][] = "Images";

$tdataaccidents[".hideMobileList"] = array();


$tdataaccidents[".viewFields"] = array();
$tdataaccidents[".viewFields"][] = "Id";
$tdataaccidents[".viewFields"][] = "Date";
$tdataaccidents[".viewFields"][] = "Vehicle";
$tdataaccidents[".viewFields"][] = "Fleet";
$tdataaccidents[".viewFields"][] = "Type";
$tdataaccidents[".viewFields"][] = "Time";
$tdataaccidents[".viewFields"][] = "Location";
$tdataaccidents[".viewFields"][] = "Driver";
$tdataaccidents[".viewFields"][] = "Deaths";
$tdataaccidents[".viewFields"][] = "Injured";
$tdataaccidents[".viewFields"][] = "StatusInjured";
$tdataaccidents[".viewFields"][] = "Details";
$tdataaccidents[".viewFields"][] = "DamageToVehicle";
$tdataaccidents[".viewFields"][] = "3rdPartyDamages";
$tdataaccidents[".viewFields"][] = "EnteredBy";
$tdataaccidents[".viewFields"][] = "Images";
$tdataaccidents[".viewFields"][] = "SysDate";

$tdataaccidents[".addFields"] = array();
$tdataaccidents[".addFields"][] = "Fleet";
$tdataaccidents[".addFields"][] = "Vehicle";
$tdataaccidents[".addFields"][] = "Type";
$tdataaccidents[".addFields"][] = "Date";
$tdataaccidents[".addFields"][] = "Time";
$tdataaccidents[".addFields"][] = "Location";
$tdataaccidents[".addFields"][] = "Driver";
$tdataaccidents[".addFields"][] = "Deaths";
$tdataaccidents[".addFields"][] = "Injured";
$tdataaccidents[".addFields"][] = "StatusInjured";
$tdataaccidents[".addFields"][] = "Details";
$tdataaccidents[".addFields"][] = "DamageToVehicle";
$tdataaccidents[".addFields"][] = "3rdPartyDamages";
$tdataaccidents[".addFields"][] = "Images";
$tdataaccidents[".addFields"][] = "EnteredBy";
$tdataaccidents[".addFields"][] = "SysDate";

$tdataaccidents[".masterListFields"] = array();
$tdataaccidents[".masterListFields"][] = "Id";
$tdataaccidents[".masterListFields"][] = "Date";
$tdataaccidents[".masterListFields"][] = "Vehicle";
$tdataaccidents[".masterListFields"][] = "Fleet";
$tdataaccidents[".masterListFields"][] = "Type";
$tdataaccidents[".masterListFields"][] = "Time";
$tdataaccidents[".masterListFields"][] = "Location";
$tdataaccidents[".masterListFields"][] = "Driver";
$tdataaccidents[".masterListFields"][] = "Deaths";
$tdataaccidents[".masterListFields"][] = "Injured";
$tdataaccidents[".masterListFields"][] = "StatusInjured";
$tdataaccidents[".masterListFields"][] = "Details";
$tdataaccidents[".masterListFields"][] = "DamageToVehicle";
$tdataaccidents[".masterListFields"][] = "3rdPartyDamages";
$tdataaccidents[".masterListFields"][] = "EnteredBy";
$tdataaccidents[".masterListFields"][] = "Images";
$tdataaccidents[".masterListFields"][] = "SysDate";

$tdataaccidents[".inlineAddFields"] = array();

$tdataaccidents[".editFields"] = array();
$tdataaccidents[".editFields"][] = "Date";
$tdataaccidents[".editFields"][] = "Vehicle";
$tdataaccidents[".editFields"][] = "Fleet";
$tdataaccidents[".editFields"][] = "Type";
$tdataaccidents[".editFields"][] = "Time";
$tdataaccidents[".editFields"][] = "Location";
$tdataaccidents[".editFields"][] = "Driver";
$tdataaccidents[".editFields"][] = "Deaths";
$tdataaccidents[".editFields"][] = "Injured";
$tdataaccidents[".editFields"][] = "StatusInjured";
$tdataaccidents[".editFields"][] = "Details";
$tdataaccidents[".editFields"][] = "DamageToVehicle";
$tdataaccidents[".editFields"][] = "EnteredBy";
$tdataaccidents[".editFields"][] = "3rdPartyDamages";
$tdataaccidents[".editFields"][] = "Images";
$tdataaccidents[".editFields"][] = "SysDate";

$tdataaccidents[".inlineEditFields"] = array();

$tdataaccidents[".exportFields"] = array();
$tdataaccidents[".exportFields"][] = "Id";
$tdataaccidents[".exportFields"][] = "Date";
$tdataaccidents[".exportFields"][] = "Vehicle";
$tdataaccidents[".exportFields"][] = "Fleet";
$tdataaccidents[".exportFields"][] = "Type";
$tdataaccidents[".exportFields"][] = "Time";
$tdataaccidents[".exportFields"][] = "Location";
$tdataaccidents[".exportFields"][] = "Driver";
$tdataaccidents[".exportFields"][] = "Deaths";
$tdataaccidents[".exportFields"][] = "Injured";
$tdataaccidents[".exportFields"][] = "StatusInjured";
$tdataaccidents[".exportFields"][] = "Details";
$tdataaccidents[".exportFields"][] = "DamageToVehicle";
$tdataaccidents[".exportFields"][] = "3rdPartyDamages";
$tdataaccidents[".exportFields"][] = "EnteredBy";
$tdataaccidents[".exportFields"][] = "Images";
$tdataaccidents[".exportFields"][] = "SysDate";

$tdataaccidents[".importFields"] = array();
$tdataaccidents[".importFields"][] = "Id";
$tdataaccidents[".importFields"][] = "SysDate";
$tdataaccidents[".importFields"][] = "Date";
$tdataaccidents[".importFields"][] = "Fleet";
$tdataaccidents[".importFields"][] = "Vehicle";
$tdataaccidents[".importFields"][] = "Type";
$tdataaccidents[".importFields"][] = "Details";
$tdataaccidents[".importFields"][] = "Driver";
$tdataaccidents[".importFields"][] = "Injured";
$tdataaccidents[".importFields"][] = "Images";
$tdataaccidents[".importFields"][] = "EnteredBy";
$tdataaccidents[".importFields"][] = "DamageToVehicle";
$tdataaccidents[".importFields"][] = "3rdPartyDamages";
$tdataaccidents[".importFields"][] = "Time";
$tdataaccidents[".importFields"][] = "Deaths";
$tdataaccidents[".importFields"][] = "Location";
$tdataaccidents[".importFields"][] = "StatusInjured";

$tdataaccidents[".printFields"] = array();
$tdataaccidents[".printFields"][] = "Id";
$tdataaccidents[".printFields"][] = "Date";
$tdataaccidents[".printFields"][] = "Vehicle";
$tdataaccidents[".printFields"][] = "Fleet";
$tdataaccidents[".printFields"][] = "Type";
$tdataaccidents[".printFields"][] = "Time";
$tdataaccidents[".printFields"][] = "Location";
$tdataaccidents[".printFields"][] = "Driver";
$tdataaccidents[".printFields"][] = "Deaths";
$tdataaccidents[".printFields"][] = "Injured";
$tdataaccidents[".printFields"][] = "StatusInjured";
$tdataaccidents[".printFields"][] = "Details";
$tdataaccidents[".printFields"][] = "DamageToVehicle";
$tdataaccidents[".printFields"][] = "3rdPartyDamages";
$tdataaccidents[".printFields"][] = "EnteredBy";
$tdataaccidents[".printFields"][] = "Images";
$tdataaccidents[".printFields"][] = "SysDate";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents","Id");
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
		$fdata["defaultSearchOption"] = "Between";

	// the end of search options settings




	$tdataaccidents["Id"] = $fdata;
//	SysDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SysDate";
	$fdata["GoodName"] = "SysDate";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents","SysDate");
	$fdata["FieldType"] = 200;

	
	
	
										
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SysDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`SysDate`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Between";

	// the end of search options settings




	$tdataaccidents["SysDate"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents","Date");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Between";

	// the end of search options settings




	$tdataaccidents["Date"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents","Fleet");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Fleet";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fleet";

	
	
				$fdata["FieldPermissions"] = true;

			
//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
		
	$edata["LinkField"] = "FleetType";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "FleetType";

	
	$edata["LookupOrderBy"] = "FleetType";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "Vehicle";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataaccidents["Fleet"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents","Vehicle");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "vehiclemaster";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Type", 'lookupF'=>"Type");
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
	
	// the end of search options settings




	$tdataaccidents["Vehicle"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents","Type");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Type`";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Between";

	// the end of search options settings




	$tdataaccidents["Type"] = $fdata;
//	Details
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Details";
	$fdata["GoodName"] = "Details";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents","Details");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Details";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Details";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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
		$fdata["defaultSearchOption"] = "Between";

	// the end of search options settings




	$tdataaccidents["Details"] = $fdata;
//	Driver
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Driver";
	$fdata["GoodName"] = "Driver";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents","Driver");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Driver";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Driver";

	
	
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
		$fdata["defaultSearchOption"] = "Between";

	// the end of search options settings




	$tdataaccidents["Driver"] = $fdata;
//	Injured
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Injured";
	$fdata["GoodName"] = "Injured";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents","Injured");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Injured";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Injured";

	
	
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

		$edata["controlWidth"] = 100;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Between";

	// the end of search options settings




	$tdataaccidents["Injured"] = $fdata;
//	Images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Images";
	$fdata["GoodName"] = "Images";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents","Images");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Images";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Images";

		$fdata["DeleteAssociatedFile"] = true;

		$fdata["CompatibilityMode"] = true;

				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 72;
	$vdata["ThumbHeight"] = 72;
			$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;

	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	



	
	
	
	
							$edata["acceptFileTypes"] = "gif";
						$edata["acceptFileTypes"] .= "|jpeg";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 3;

		$edata["maxFileSize"] = 750;

		$edata["maxTotalFilesSize"] = 1500;

	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;

				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;

	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;


	$fdata["Absolute"] = true;


// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

	// the end of search options settings




	$tdataaccidents["Images"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents","EnteredBy");
	$fdata["FieldType"] = 200;

	
	
	
										
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EnteredBy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EnteredBy";

	
	
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
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Between";

	// the end of search options settings




	$tdataaccidents["EnteredBy"] = $fdata;
//	DamageToVehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DamageToVehicle";
	$fdata["GoodName"] = "DamageToVehicle";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents","DamageToVehicle");
	$fdata["FieldType"] = 200;

	
	
	
										
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DamageToVehicle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DamageToVehicle";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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
		$fdata["defaultSearchOption"] = "Between";

	// the end of search options settings




	$tdataaccidents["DamageToVehicle"] = $fdata;
//	3rdPartyDamages
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "3rdPartyDamages";
	$fdata["GoodName"] = "3rdPartyDamages";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents","3rdPartyDamages");
	$fdata["FieldType"] = 200;

	
	
	
										
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "3rdPartyDamages";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`3rdPartyDamages`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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
		$fdata["defaultSearchOption"] = "Between";

	// the end of search options settings




	$tdataaccidents["3rdPartyDamages"] = $fdata;
//	Time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Time";
	$fdata["GoodName"] = "Time";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents","Time");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Time`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
	//	End validation

	
			
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 30,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Between";

	// the end of search options settings




	$tdataaccidents["Time"] = $fdata;
//	Deaths
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Deaths";
	$fdata["GoodName"] = "Deaths";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents","Deaths");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Deaths";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Deaths";

	
	
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

		$edata["controlWidth"] = 100;

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
		$fdata["defaultSearchOption"] = "Between";

	// the end of search options settings




	$tdataaccidents["Deaths"] = $fdata;
//	Location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Location";
	$fdata["GoodName"] = "Location";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents","Location");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Location";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Location";

	
	
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
		$fdata["defaultSearchOption"] = "Between";

	// the end of search options settings




	$tdataaccidents["Location"] = $fdata;
//	StatusInjured
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "StatusInjured";
	$fdata["GoodName"] = "StatusInjured";
	$fdata["ownerTable"] = "accidents";
	$fdata["Label"] = GetFieldLabel("accidents","StatusInjured");
	$fdata["FieldType"] = 200;

	
	
	
										
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "StatusInjured";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "StatusInjured";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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
		$fdata["defaultSearchOption"] = "Between";

	// the end of search options settings




	$tdataaccidents["StatusInjured"] = $fdata;


$tables_data["accidents"]=&$tdataaccidents;
$field_labels["accidents"] = &$fieldLabelsaccidents;
$fieldToolTips["accidents"] = &$fieldToolTipsaccidents;
$page_titles["accidents"] = &$pageTitlesaccidents;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["accidents"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["accidents"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_accidents()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  `SysDate`,  `Date`,  Fleet,  Vehicle,  `Type`,  Details,  Driver,  Injured,  Images,  EnteredBy,  DamageToVehicle,  `3rdPartyDamages`,  `Time`,  Deaths,  Location,  StatusInjured";
$proto0["m_strFrom"] = "FROM accidents";
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
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "accidents";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SysDate",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents"
));

$proto8["m_sql"] = "`SysDate`";
$proto8["m_srcTableName"] = "accidents";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents"
));

$proto10["m_sql"] = "`Date`";
$proto10["m_srcTableName"] = "accidents";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents"
));

$proto12["m_sql"] = "Fleet";
$proto12["m_srcTableName"] = "accidents";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents"
));

$proto14["m_sql"] = "Vehicle";
$proto14["m_srcTableName"] = "accidents";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents"
));

$proto16["m_sql"] = "`Type`";
$proto16["m_srcTableName"] = "accidents";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Details",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents"
));

$proto18["m_sql"] = "Details";
$proto18["m_srcTableName"] = "accidents";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Driver",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents"
));

$proto20["m_sql"] = "Driver";
$proto20["m_srcTableName"] = "accidents";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Injured",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents"
));

$proto22["m_sql"] = "Injured";
$proto22["m_srcTableName"] = "accidents";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Images",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents"
));

$proto24["m_sql"] = "Images";
$proto24["m_srcTableName"] = "accidents";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents"
));

$proto26["m_sql"] = "EnteredBy";
$proto26["m_srcTableName"] = "accidents";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DamageToVehicle",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents"
));

$proto28["m_sql"] = "DamageToVehicle";
$proto28["m_srcTableName"] = "accidents";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "3rdPartyDamages",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents"
));

$proto30["m_sql"] = "`3rdPartyDamages`";
$proto30["m_srcTableName"] = "accidents";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Time",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents"
));

$proto32["m_sql"] = "`Time`";
$proto32["m_srcTableName"] = "accidents";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Deaths",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents"
));

$proto34["m_sql"] = "Deaths";
$proto34["m_srcTableName"] = "accidents";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Location",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents"
));

$proto36["m_sql"] = "Location";
$proto36["m_srcTableName"] = "accidents";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "StatusInjured",
	"m_strTable" => "accidents",
	"m_srcTableName" => "accidents"
));

$proto38["m_sql"] = "StatusInjured";
$proto38["m_srcTableName"] = "accidents";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "accidents";
$proto41["m_srcTableName"] = "accidents";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "Id";
$proto41["m_columns"][] = "SysDate";
$proto41["m_columns"][] = "Date";
$proto41["m_columns"][] = "Fleet";
$proto41["m_columns"][] = "Vehicle";
$proto41["m_columns"][] = "Type";
$proto41["m_columns"][] = "Details";
$proto41["m_columns"][] = "Driver";
$proto41["m_columns"][] = "Injured";
$proto41["m_columns"][] = "Images";
$proto41["m_columns"][] = "EnteredBy";
$proto41["m_columns"][] = "DamageToVehicle";
$proto41["m_columns"][] = "3rdPartyDamages";
$proto41["m_columns"][] = "Time";
$proto41["m_columns"][] = "Deaths";
$proto41["m_columns"][] = "Location";
$proto41["m_columns"][] = "StatusInjured";
$proto41["m_columns"][] = "Category";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "accidents";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "accidents";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="accidents";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_accidents = createSqlQuery_accidents();


	
					
;

																	

$tdataaccidents[".sqlquery"] = $queryData_accidents;

$tableEvents["accidents"] = new eventsBase;
$tdataaccidents[".hasEvents"] = false;

?>