<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafuelmaster2 = array();	
	$tdatafuelmaster2[".truncateText"] = true;
	$tdatafuelmaster2[".NumberOfChars"] = 80; 
	$tdatafuelmaster2[".ShortName"] = "fuelmaster2";
	$tdatafuelmaster2[".OwnerID"] = "";
	$tdatafuelmaster2[".OriginalTable"] = "fuelmaster";

//	field labels
$fieldLabelsfuelmaster2 = array();
$fieldToolTipsfuelmaster2 = array();
$pageTitlesfuelmaster2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfuelmaster2["English"] = array();
	$fieldToolTipsfuelmaster2["English"] = array();
	$pageTitlesfuelmaster2["English"] = array();
	if (count($fieldToolTipsfuelmaster2["English"]))
		$tdatafuelmaster2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfuelmaster2[""] = array();
	$fieldToolTipsfuelmaster2[""] = array();
	$pageTitlesfuelmaster2[""] = array();
	if (count($fieldToolTipsfuelmaster2[""]))
		$tdatafuelmaster2[".isUseToolTips"] = true;
}
	
	
	$tdatafuelmaster2[".NCSearch"] = true;



$tdatafuelmaster2[".shortTableName"] = "fuelmaster2";
$tdatafuelmaster2[".nSecOptions"] = 0;
$tdatafuelmaster2[".recsPerRowList"] = 1;
$tdatafuelmaster2[".recsPerRowPrint"] = 1;
$tdatafuelmaster2[".mainTableOwnerID"] = "";
$tdatafuelmaster2[".moveNext"] = 1;
$tdatafuelmaster2[".entityType"] = 1;

$tdatafuelmaster2[".strOriginalTableName"] = "fuelmaster";




$tdatafuelmaster2[".showAddInPopup"] = false;

$tdatafuelmaster2[".showEditInPopup"] = false;

$tdatafuelmaster2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafuelmaster2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafuelmaster2[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatafuelmaster2[".listAjax"] = true;
else 
	$tdatafuelmaster2[".listAjax"] = false;

	$tdatafuelmaster2[".audit"] = false;

	$tdatafuelmaster2[".locking"] = false;

$tdatafuelmaster2[".edit"] = true;
$tdatafuelmaster2[".afterEditAction"] = 1;
$tdatafuelmaster2[".closePopupAfterEdit"] = 1;
$tdatafuelmaster2[".afterEditActionDetTable"] = "";

$tdatafuelmaster2[".add"] = true;
$tdatafuelmaster2[".afterAddAction"] = 1;
$tdatafuelmaster2[".closePopupAfterAdd"] = 1;
$tdatafuelmaster2[".afterAddActionDetTable"] = "";

$tdatafuelmaster2[".list"] = true;

$tdatafuelmaster2[".inlineAdd"] = true;
$tdatafuelmaster2[".view"] = true;

$tdatafuelmaster2[".import"] = true;

$tdatafuelmaster2[".exportTo"] = true;

$tdatafuelmaster2[".printFriendly"] = true;

$tdatafuelmaster2[".delete"] = true;

$tdatafuelmaster2[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafuelmaster2[".searchSaving"] = false;
//

$tdatafuelmaster2[".showSearchPanel"] = true;
		$tdatafuelmaster2[".flexibleSearch"] = true;		

if (isMobile())
	$tdatafuelmaster2[".isUseAjaxSuggest"] = false;
else 
	$tdatafuelmaster2[".isUseAjaxSuggest"] = true;

$tdatafuelmaster2[".rowHighlite"] = true;



$tdatafuelmaster2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafuelmaster2[".isUseTimeForSearch"] = false;





$tdatafuelmaster2[".allSearchFields"] = array();
$tdatafuelmaster2[".filterFields"] = array();
$tdatafuelmaster2[".requiredSearchFields"] = array();

$tdatafuelmaster2[".allSearchFields"][] = "MAX(LastMileage)";
	$tdatafuelmaster2[".allSearchFields"][] = "Id";
	$tdatafuelmaster2[".allSearchFields"][] = "SystemDate";
	$tdatafuelmaster2[".allSearchFields"][] = "Fleet";
	$tdatafuelmaster2[".allSearchFields"][] = "FuelDate";
	$tdatafuelmaster2[".allSearchFields"][] = "Vehicle";
	$tdatafuelmaster2[".allSearchFields"][] = "FuelStation";
	$tdatafuelmaster2[".allSearchFields"][] = "MeterReading";
	$tdatafuelmaster2[".allSearchFields"][] = "LitersPumped";
	$tdatafuelmaster2[".allSearchFields"][] = "PricePerLiter";
	$tdatafuelmaster2[".allSearchFields"][] = "Cost";
	$tdatafuelmaster2[".allSearchFields"][] = "Economy";
	

$tdatafuelmaster2[".googleLikeFields"] = array();
$tdatafuelmaster2[".googleLikeFields"][] = "Id";
$tdatafuelmaster2[".googleLikeFields"][] = "SystemDate";
$tdatafuelmaster2[".googleLikeFields"][] = "FuelDate";
$tdatafuelmaster2[".googleLikeFields"][] = "Vehicle";
$tdatafuelmaster2[".googleLikeFields"][] = "MeterReading";
$tdatafuelmaster2[".googleLikeFields"][] = "LitersPumped";
$tdatafuelmaster2[".googleLikeFields"][] = "PricePerLiter";
$tdatafuelmaster2[".googleLikeFields"][] = "FuelStation";
$tdatafuelmaster2[".googleLikeFields"][] = "Fleet";
$tdatafuelmaster2[".googleLikeFields"][] = "Cost";
$tdatafuelmaster2[".googleLikeFields"][] = "MAX(LastMileage)";
$tdatafuelmaster2[".googleLikeFields"][] = "Economy";


$tdatafuelmaster2[".advSearchFields"] = array();
$tdatafuelmaster2[".advSearchFields"][] = "MAX(LastMileage)";
$tdatafuelmaster2[".advSearchFields"][] = "Id";
$tdatafuelmaster2[".advSearchFields"][] = "SystemDate";
$tdatafuelmaster2[".advSearchFields"][] = "Fleet";
$tdatafuelmaster2[".advSearchFields"][] = "FuelDate";
$tdatafuelmaster2[".advSearchFields"][] = "Vehicle";
$tdatafuelmaster2[".advSearchFields"][] = "FuelStation";
$tdatafuelmaster2[".advSearchFields"][] = "MeterReading";
$tdatafuelmaster2[".advSearchFields"][] = "LitersPumped";
$tdatafuelmaster2[".advSearchFields"][] = "PricePerLiter";
$tdatafuelmaster2[".advSearchFields"][] = "Cost";
$tdatafuelmaster2[".advSearchFields"][] = "Economy";

$tdatafuelmaster2[".tableType"] = "list";

$tdatafuelmaster2[".printerPageOrientation"] = 0;
$tdatafuelmaster2[".nPrinterPageScale"] = 100;

$tdatafuelmaster2[".nPrinterSplitRecords"] = 40;

$tdatafuelmaster2[".nPrinterPDFSplitRecords"] = 40;



$tdatafuelmaster2[".geocodingEnabled"] = false;




	





// view page pdf
$tdatafuelmaster2[".isViewPagePDF"] = true;
$tdatafuelmaster2[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatafuelmaster2[".isPrinterPagePDF"] = true;
$tdatafuelmaster2[".nPrinterPagePDFScale"] = 100;

$tdatafuelmaster2[".totalsFields"] = array();
$tdatafuelmaster2[".totalsFields"][] = array(
	"fName" => "LitersPumped", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatafuelmaster2[".totalsFields"][] = array(
	"fName" => "Cost", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatafuelmaster2[".totalsFields"][] = array(
	"fName" => "Economy", 
	"numRows" => 0,
	"totalsType" => "AVERAGE",
	"viewFormat" => 'Number');

$tdatafuelmaster2[".pageSize"] = 20;

$tdatafuelmaster2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafuelmaster2[".strOrderBy"] = $tstrOrderBy;

$tdatafuelmaster2[".orderindexes"] = array();

$tdatafuelmaster2[".sqlHead"] = "SELECT Id,  SystemDate,  FuelDate,  Vehicle,  MeterReading,  LitersPumped,  PricePerLiter,  FuelStation,  Fleet,  LitersPumped*PricePerLiter AS Cost,  MAX(LastMileage) AS `MAX(LastMileage)`,  (MeterReading-LastMileage)/LitersPumped AS Economy";
$tdatafuelmaster2[".sqlFrom"] = "FROM fuelmaster";
$tdatafuelmaster2[".sqlWhereExpr"] = "";
$tdatafuelmaster2[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatafuelmaster2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafuelmaster2[".arrGroupsPerPage"] = $arrGPP;

$tdatafuelmaster2[".highlightSearchResults"] = true;

$tableKeysfuelmaster2 = array();
$tableKeysfuelmaster2[] = "Id";
$tdatafuelmaster2[".Keys"] = $tableKeysfuelmaster2;

$tdatafuelmaster2[".listFields"] = array();
$tdatafuelmaster2[".listFields"][] = "MAX(LastMileage)";
$tdatafuelmaster2[".listFields"][] = "Id";
$tdatafuelmaster2[".listFields"][] = "FuelDate";
$tdatafuelmaster2[".listFields"][] = "Fleet";
$tdatafuelmaster2[".listFields"][] = "Vehicle";
$tdatafuelmaster2[".listFields"][] = "FuelStation";
$tdatafuelmaster2[".listFields"][] = "MeterReading";
$tdatafuelmaster2[".listFields"][] = "LitersPumped";
$tdatafuelmaster2[".listFields"][] = "PricePerLiter";
$tdatafuelmaster2[".listFields"][] = "Cost";
$tdatafuelmaster2[".listFields"][] = "Economy";

$tdatafuelmaster2[".hideMobileList"] = array();


$tdatafuelmaster2[".viewFields"] = array();
$tdatafuelmaster2[".viewFields"][] = "MAX(LastMileage)";
$tdatafuelmaster2[".viewFields"][] = "Id";
$tdatafuelmaster2[".viewFields"][] = "SystemDate";
$tdatafuelmaster2[".viewFields"][] = "Fleet";
$tdatafuelmaster2[".viewFields"][] = "FuelDate";
$tdatafuelmaster2[".viewFields"][] = "Vehicle";
$tdatafuelmaster2[".viewFields"][] = "FuelStation";
$tdatafuelmaster2[".viewFields"][] = "MeterReading";
$tdatafuelmaster2[".viewFields"][] = "LitersPumped";
$tdatafuelmaster2[".viewFields"][] = "PricePerLiter";
$tdatafuelmaster2[".viewFields"][] = "Cost";
$tdatafuelmaster2[".viewFields"][] = "Economy";

$tdatafuelmaster2[".addFields"] = array();
$tdatafuelmaster2[".addFields"][] = "SystemDate";
$tdatafuelmaster2[".addFields"][] = "Fleet";
$tdatafuelmaster2[".addFields"][] = "FuelDate";
$tdatafuelmaster2[".addFields"][] = "Vehicle";
$tdatafuelmaster2[".addFields"][] = "FuelStation";
$tdatafuelmaster2[".addFields"][] = "MeterReading";
$tdatafuelmaster2[".addFields"][] = "LitersPumped";
$tdatafuelmaster2[".addFields"][] = "PricePerLiter";

$tdatafuelmaster2[".masterListFields"] = array();
$tdatafuelmaster2[".masterListFields"][] = "MAX(LastMileage)";
$tdatafuelmaster2[".masterListFields"][] = "Id";
$tdatafuelmaster2[".masterListFields"][] = "SystemDate";
$tdatafuelmaster2[".masterListFields"][] = "Fleet";
$tdatafuelmaster2[".masterListFields"][] = "FuelDate";
$tdatafuelmaster2[".masterListFields"][] = "Vehicle";
$tdatafuelmaster2[".masterListFields"][] = "FuelStation";
$tdatafuelmaster2[".masterListFields"][] = "MeterReading";
$tdatafuelmaster2[".masterListFields"][] = "LitersPumped";
$tdatafuelmaster2[".masterListFields"][] = "PricePerLiter";
$tdatafuelmaster2[".masterListFields"][] = "Cost";
$tdatafuelmaster2[".masterListFields"][] = "Economy";

$tdatafuelmaster2[".inlineAddFields"] = array();
$tdatafuelmaster2[".inlineAddFields"][] = "FuelDate";
$tdatafuelmaster2[".inlineAddFields"][] = "Fleet";
$tdatafuelmaster2[".inlineAddFields"][] = "Vehicle";
$tdatafuelmaster2[".inlineAddFields"][] = "FuelStation";
$tdatafuelmaster2[".inlineAddFields"][] = "MeterReading";
$tdatafuelmaster2[".inlineAddFields"][] = "LitersPumped";
$tdatafuelmaster2[".inlineAddFields"][] = "PricePerLiter";

$tdatafuelmaster2[".editFields"] = array();
$tdatafuelmaster2[".editFields"][] = "SystemDate";
$tdatafuelmaster2[".editFields"][] = "Fleet";
$tdatafuelmaster2[".editFields"][] = "FuelDate";
$tdatafuelmaster2[".editFields"][] = "Vehicle";
$tdatafuelmaster2[".editFields"][] = "FuelStation";
$tdatafuelmaster2[".editFields"][] = "MeterReading";
$tdatafuelmaster2[".editFields"][] = "LitersPumped";
$tdatafuelmaster2[".editFields"][] = "PricePerLiter";

$tdatafuelmaster2[".inlineEditFields"] = array();

$tdatafuelmaster2[".exportFields"] = array();
$tdatafuelmaster2[".exportFields"][] = "MAX(LastMileage)";
$tdatafuelmaster2[".exportFields"][] = "Id";
$tdatafuelmaster2[".exportFields"][] = "SystemDate";
$tdatafuelmaster2[".exportFields"][] = "Fleet";
$tdatafuelmaster2[".exportFields"][] = "FuelDate";
$tdatafuelmaster2[".exportFields"][] = "Vehicle";
$tdatafuelmaster2[".exportFields"][] = "FuelStation";
$tdatafuelmaster2[".exportFields"][] = "MeterReading";
$tdatafuelmaster2[".exportFields"][] = "LitersPumped";
$tdatafuelmaster2[".exportFields"][] = "PricePerLiter";
$tdatafuelmaster2[".exportFields"][] = "Cost";
$tdatafuelmaster2[".exportFields"][] = "Economy";

$tdatafuelmaster2[".importFields"] = array();
$tdatafuelmaster2[".importFields"][] = "Id";
$tdatafuelmaster2[".importFields"][] = "SystemDate";
$tdatafuelmaster2[".importFields"][] = "FuelDate";
$tdatafuelmaster2[".importFields"][] = "Vehicle";
$tdatafuelmaster2[".importFields"][] = "MeterReading";
$tdatafuelmaster2[".importFields"][] = "LitersPumped";
$tdatafuelmaster2[".importFields"][] = "PricePerLiter";
$tdatafuelmaster2[".importFields"][] = "FuelStation";
$tdatafuelmaster2[".importFields"][] = "Fleet";
$tdatafuelmaster2[".importFields"][] = "Cost";
$tdatafuelmaster2[".importFields"][] = "MAX(LastMileage)";
$tdatafuelmaster2[".importFields"][] = "Economy";

$tdatafuelmaster2[".printFields"] = array();
$tdatafuelmaster2[".printFields"][] = "MAX(LastMileage)";
$tdatafuelmaster2[".printFields"][] = "Id";
$tdatafuelmaster2[".printFields"][] = "SystemDate";
$tdatafuelmaster2[".printFields"][] = "Fleet";
$tdatafuelmaster2[".printFields"][] = "FuelDate";
$tdatafuelmaster2[".printFields"][] = "Vehicle";
$tdatafuelmaster2[".printFields"][] = "FuelStation";
$tdatafuelmaster2[".printFields"][] = "MeterReading";
$tdatafuelmaster2[".printFields"][] = "LitersPumped";
$tdatafuelmaster2[".printFields"][] = "PricePerLiter";
$tdatafuelmaster2[".printFields"][] = "Cost";
$tdatafuelmaster2[".printFields"][] = "Economy";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster2","Id"); 
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatafuelmaster2["Id"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster2","SystemDate"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "SystemDate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SystemDate";
	
		
		
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
	
		
		
		
		
		
		
		$edata["controlWidth"] = 50;
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafuelmaster2["SystemDate"] = $fdata;
//	FuelDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FuelDate";
	$fdata["GoodName"] = "FuelDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster2","FuelDate"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		
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
	
		
		
		
		$edata["controlWidth"] = 75;
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafuelmaster2["FuelDate"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster2","Vehicle"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
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
	$edata["LookupTable"] = "fuelmaster";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "Vehicle";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Vehicle";
	
		
	$edata["LookupOrderBy"] = "Vehicle";
	
		
			
		
				
	
	
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafuelmaster2["Vehicle"] = $fdata;
//	MeterReading
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MeterReading";
	$fdata["GoodName"] = "MeterReading";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster2","MeterReading"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MeterReading"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MeterReading";
	
		
		
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["controlWidth"] = 50;
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafuelmaster2["MeterReading"] = $fdata;
//	LitersPumped
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LitersPumped";
	$fdata["GoodName"] = "LitersPumped";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster2","LitersPumped"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "LitersPumped"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LitersPumped";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
	
		$edata["controlWidth"] = 50;
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafuelmaster2["LitersPumped"] = $fdata;
//	PricePerLiter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PricePerLiter";
	$fdata["GoodName"] = "PricePerLiter";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster2","PricePerLiter"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "PricePerLiter"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PricePerLiter";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "fuelprices";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "PricePerLiter";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "PricePerLiter";
	
		
	$edata["LookupOrderBy"] = "PricePerLiter";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 50;
	
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafuelmaster2["PricePerLiter"] = $fdata;
//	FuelStation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FuelStation";
	$fdata["GoodName"] = "FuelStation";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster2","FuelStation"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "fuelstationmaster";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "FuelStation";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "FuelStation";
	
		
	$edata["LookupOrderBy"] = "FuelStation";
	
		
			
		
				
	
	
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafuelmaster2["FuelStation"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster2","Fleet"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		
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
	
		
		
		
		
		
		
		$edata["controlWidth"] = 100;
	
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafuelmaster2["Fleet"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("fuelmaster2","Cost"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Cost"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LitersPumped*PricePerLiter";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 50;
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatafuelmaster2["Cost"] = $fdata;
//	MAX(LastMileage)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "MAX(LastMileage)";
	$fdata["GoodName"] = "MAX_LastMileage_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("fuelmaster2","MAX_LastMileage_"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MAX(LastMileage)"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX(LastMileage)";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafuelmaster2["MAX(LastMileage)"] = $fdata;
//	Economy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Economy";
	$fdata["GoodName"] = "Economy";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("fuelmaster2","Economy"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Economy"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(MeterReading-LastMileage)/LitersPumped";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatafuelmaster2["Economy"] = $fdata;

	
$tables_data["fuelmaster2"]=&$tdatafuelmaster2;
$field_labels["fuelmaster2"] = &$fieldLabelsfuelmaster2;
$fieldToolTips["fuelmaster2"] = &$fieldToolTipsfuelmaster2;
$page_titles["fuelmaster2"] = &$pageTitlesfuelmaster2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["fuelmaster2"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["fuelmaster2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_fuelmaster2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  SystemDate,  FuelDate,  Vehicle,  MeterReading,  LitersPumped,  PricePerLiter,  FuelStation,  Fleet,  LitersPumped*PricePerLiter AS Cost,  MAX(LastMileage) AS `MAX(LastMileage)`,  (MeterReading-LastMileage)/LitersPumped AS Economy";
$proto0["m_strFrom"] = "FROM fuelmaster";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "Id",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster2"
));

$proto5["m_sql"] = "Id";
$proto5["m_srcTableName"] = "fuelmaster2";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster2"
));

$proto7["m_sql"] = "SystemDate";
$proto7["m_srcTableName"] = "fuelmaster2";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster2"
));

$proto9["m_sql"] = "FuelDate";
$proto9["m_srcTableName"] = "fuelmaster2";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster2"
));

$proto11["m_sql"] = "Vehicle";
$proto11["m_srcTableName"] = "fuelmaster2";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "MeterReading",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster2"
));

$proto13["m_sql"] = "MeterReading";
$proto13["m_srcTableName"] = "fuelmaster2";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "LitersPumped",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster2"
));

$proto15["m_sql"] = "LitersPumped";
$proto15["m_srcTableName"] = "fuelmaster2";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "PricePerLiter",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster2"
));

$proto17["m_sql"] = "PricePerLiter";
$proto17["m_srcTableName"] = "fuelmaster2";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelStation",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster2"
));

$proto19["m_sql"] = "FuelStation";
$proto19["m_srcTableName"] = "fuelmaster2";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster2"
));

$proto21["m_sql"] = "Fleet";
$proto21["m_srcTableName"] = "fuelmaster2";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "LitersPumped*PricePerLiter"
));

$proto23["m_sql"] = "LitersPumped*PricePerLiter";
$proto23["m_srcTableName"] = "fuelmaster2";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "Cost";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$proto26=array();
$proto26["m_functiontype"] = "SQLF_MAX";
$proto26["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "LastMileage",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster2"
));

$proto26["m_arguments"][]=$obj;
$proto26["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto26);

$proto25["m_sql"] = "MAX(LastMileage)";
$proto25["m_srcTableName"] = "fuelmaster2";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "MAX(LastMileage)";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(MeterReading-LastMileage)/LitersPumped"
));

$proto28["m_sql"] = "(MeterReading-LastMileage)/LitersPumped";
$proto28["m_srcTableName"] = "fuelmaster2";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "Economy";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "fuelmaster";
$proto31["m_srcTableName"] = "fuelmaster2";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "Id";
$proto31["m_columns"][] = "SystemDate";
$proto31["m_columns"][] = "FuelDate";
$proto31["m_columns"][] = "Vehicle";
$proto31["m_columns"][] = "MeterReading";
$proto31["m_columns"][] = "LitersPumped";
$proto31["m_columns"][] = "PricePerLiter";
$proto31["m_columns"][] = "FuelStation";
$proto31["m_columns"][] = "Fleet";
$proto31["m_columns"][] = "LastMileage";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "fuelmaster";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "fuelmaster2";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "Id",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster2"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster2"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "FuelDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster2"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster2"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "MeterReading",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster2"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "LitersPumped",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster2"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "PricePerLiter",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster2"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "FuelStation",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster2"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster2"
));

$proto50["m_column"]=$obj;
$obj = new SQLGroupByItem($proto50);

$proto0["m_groupby"][]=$obj;
												$proto52=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "LitersPumped*PricePerLiter"
));

$proto52["m_column"]=$obj;
$obj = new SQLGroupByItem($proto52);

$proto0["m_groupby"][]=$obj;
												$proto54=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(MeterReading-LastMileage)/LitersPumped"
));

$proto54["m_column"]=$obj;
$obj = new SQLGroupByItem($proto54);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="fuelmaster2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fuelmaster2 = createSqlQuery_fuelmaster2();


	
												
	
$tdatafuelmaster2[".sqlquery"] = $queryData_fuelmaster2;

$tableEvents["fuelmaster2"] = new eventsBase;
$tdatafuelmaster2[".hasEvents"] = false;

?>