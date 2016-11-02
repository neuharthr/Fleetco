<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafuelmaster_data = array();	
	$tdatafuelmaster_data[".truncateText"] = true;
	$tdatafuelmaster_data[".NumberOfChars"] = 80; 
	$tdatafuelmaster_data[".ShortName"] = "fuelmaster_data";
	$tdatafuelmaster_data[".OwnerID"] = "";
	$tdatafuelmaster_data[".OriginalTable"] = "fuelmaster";

//	field labels
$fieldLabelsfuelmaster_data = array();
$fieldToolTipsfuelmaster_data = array();
$pageTitlesfuelmaster_data = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfuelmaster_data["English"] = array();
	$fieldToolTipsfuelmaster_data["English"] = array();
	$pageTitlesfuelmaster_data["English"] = array();
	if (count($fieldToolTipsfuelmaster_data["English"]))
		$tdatafuelmaster_data[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfuelmaster_data[""] = array();
	$fieldToolTipsfuelmaster_data[""] = array();
	$pageTitlesfuelmaster_data[""] = array();
	if (count($fieldToolTipsfuelmaster_data[""]))
		$tdatafuelmaster_data[".isUseToolTips"] = true;
}
	
	
	$tdatafuelmaster_data[".NCSearch"] = true;



$tdatafuelmaster_data[".shortTableName"] = "fuelmaster_data";
$tdatafuelmaster_data[".nSecOptions"] = 0;
$tdatafuelmaster_data[".recsPerRowList"] = 1;
$tdatafuelmaster_data[".recsPerRowPrint"] = 1;
$tdatafuelmaster_data[".mainTableOwnerID"] = "";
$tdatafuelmaster_data[".moveNext"] = 1;
$tdatafuelmaster_data[".entityType"] = 1;

$tdatafuelmaster_data[".strOriginalTableName"] = "fuelmaster";




$tdatafuelmaster_data[".showAddInPopup"] = false;

$tdatafuelmaster_data[".showEditInPopup"] = false;

$tdatafuelmaster_data[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafuelmaster_data[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafuelmaster_data[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatafuelmaster_data[".listAjax"] = true;
else 
	$tdatafuelmaster_data[".listAjax"] = false;

	$tdatafuelmaster_data[".audit"] = false;

	$tdatafuelmaster_data[".locking"] = false;

$tdatafuelmaster_data[".edit"] = true;
$tdatafuelmaster_data[".afterEditAction"] = 1;
$tdatafuelmaster_data[".closePopupAfterEdit"] = 1;
$tdatafuelmaster_data[".afterEditActionDetTable"] = "";

$tdatafuelmaster_data[".add"] = true;
$tdatafuelmaster_data[".afterAddAction"] = 1;
$tdatafuelmaster_data[".closePopupAfterAdd"] = 1;
$tdatafuelmaster_data[".afterAddActionDetTable"] = "";

$tdatafuelmaster_data[".list"] = true;

$tdatafuelmaster_data[".inlineAdd"] = true;
$tdatafuelmaster_data[".view"] = true;

$tdatafuelmaster_data[".import"] = true;

$tdatafuelmaster_data[".exportTo"] = true;

$tdatafuelmaster_data[".printFriendly"] = true;

$tdatafuelmaster_data[".delete"] = true;

$tdatafuelmaster_data[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafuelmaster_data[".searchSaving"] = false;
//

$tdatafuelmaster_data[".showSearchPanel"] = true;
		$tdatafuelmaster_data[".flexibleSearch"] = true;		

if (isMobile())
	$tdatafuelmaster_data[".isUseAjaxSuggest"] = false;
else 
	$tdatafuelmaster_data[".isUseAjaxSuggest"] = true;

$tdatafuelmaster_data[".rowHighlite"] = true;



$tdatafuelmaster_data[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafuelmaster_data[".isUseTimeForSearch"] = false;





$tdatafuelmaster_data[".allSearchFields"] = array();
$tdatafuelmaster_data[".filterFields"] = array();
$tdatafuelmaster_data[".requiredSearchFields"] = array();

$tdatafuelmaster_data[".allSearchFields"][] = "MAX(MeterReading)";
	$tdatafuelmaster_data[".allSearchFields"][] = "LastMileage";
	$tdatafuelmaster_data[".allSearchFields"][] = "Id";
	$tdatafuelmaster_data[".allSearchFields"][] = "SystemDate";
	$tdatafuelmaster_data[".allSearchFields"][] = "Fleet";
	$tdatafuelmaster_data[".allSearchFields"][] = "FuelDate";
	$tdatafuelmaster_data[".allSearchFields"][] = "Vehicle";
	$tdatafuelmaster_data[".allSearchFields"][] = "FuelStation";
	$tdatafuelmaster_data[".allSearchFields"][] = "LitersPumped";
	$tdatafuelmaster_data[".allSearchFields"][] = "PricePerLiter";
	$tdatafuelmaster_data[".allSearchFields"][] = "Cost";
	$tdatafuelmaster_data[".allSearchFields"][] = "Economy";
	

$tdatafuelmaster_data[".googleLikeFields"] = array();
$tdatafuelmaster_data[".googleLikeFields"][] = "Id";
$tdatafuelmaster_data[".googleLikeFields"][] = "SystemDate";
$tdatafuelmaster_data[".googleLikeFields"][] = "FuelDate";
$tdatafuelmaster_data[".googleLikeFields"][] = "Vehicle";
$tdatafuelmaster_data[".googleLikeFields"][] = "MAX(MeterReading)";
$tdatafuelmaster_data[".googleLikeFields"][] = "LitersPumped";
$tdatafuelmaster_data[".googleLikeFields"][] = "PricePerLiter";
$tdatafuelmaster_data[".googleLikeFields"][] = "FuelStation";
$tdatafuelmaster_data[".googleLikeFields"][] = "Fleet";
$tdatafuelmaster_data[".googleLikeFields"][] = "Cost";
$tdatafuelmaster_data[".googleLikeFields"][] = "LastMileage";
$tdatafuelmaster_data[".googleLikeFields"][] = "Economy";


$tdatafuelmaster_data[".advSearchFields"] = array();
$tdatafuelmaster_data[".advSearchFields"][] = "MAX(MeterReading)";
$tdatafuelmaster_data[".advSearchFields"][] = "LastMileage";
$tdatafuelmaster_data[".advSearchFields"][] = "Id";
$tdatafuelmaster_data[".advSearchFields"][] = "SystemDate";
$tdatafuelmaster_data[".advSearchFields"][] = "Fleet";
$tdatafuelmaster_data[".advSearchFields"][] = "FuelDate";
$tdatafuelmaster_data[".advSearchFields"][] = "Vehicle";
$tdatafuelmaster_data[".advSearchFields"][] = "FuelStation";
$tdatafuelmaster_data[".advSearchFields"][] = "LitersPumped";
$tdatafuelmaster_data[".advSearchFields"][] = "PricePerLiter";
$tdatafuelmaster_data[".advSearchFields"][] = "Cost";
$tdatafuelmaster_data[".advSearchFields"][] = "Economy";

$tdatafuelmaster_data[".tableType"] = "list";

$tdatafuelmaster_data[".printerPageOrientation"] = 0;
$tdatafuelmaster_data[".nPrinterPageScale"] = 100;

$tdatafuelmaster_data[".nPrinterSplitRecords"] = 40;

$tdatafuelmaster_data[".nPrinterPDFSplitRecords"] = 40;



$tdatafuelmaster_data[".geocodingEnabled"] = false;




	





// view page pdf
$tdatafuelmaster_data[".isViewPagePDF"] = true;
$tdatafuelmaster_data[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatafuelmaster_data[".isPrinterPagePDF"] = true;
$tdatafuelmaster_data[".nPrinterPagePDFScale"] = 100;

$tdatafuelmaster_data[".totalsFields"] = array();
$tdatafuelmaster_data[".totalsFields"][] = array(
	"fName" => "LitersPumped", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatafuelmaster_data[".totalsFields"][] = array(
	"fName" => "Cost", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatafuelmaster_data[".totalsFields"][] = array(
	"fName" => "Economy", 
	"numRows" => 0,
	"totalsType" => "AVERAGE",
	"viewFormat" => 'Number');

$tdatafuelmaster_data[".pageSize"] = 20;

$tdatafuelmaster_data[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafuelmaster_data[".strOrderBy"] = $tstrOrderBy;

$tdatafuelmaster_data[".orderindexes"] = array();

$tdatafuelmaster_data[".sqlHead"] = "SELECT Id,  SystemDate,  FuelDate,  Vehicle,  MAX(MeterReading) AS `MAX(MeterReading)`,  LitersPumped,  PricePerLiter,  FuelStation,  Fleet,  LitersPumped*PricePerLiter AS Cost,  LastMileage,  (MeterReading-LastMileage)/LitersPumped AS Economy";
$tdatafuelmaster_data[".sqlFrom"] = "FROM fuelmaster";
$tdatafuelmaster_data[".sqlWhereExpr"] = "";
$tdatafuelmaster_data[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatafuelmaster_data[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafuelmaster_data[".arrGroupsPerPage"] = $arrGPP;

$tdatafuelmaster_data[".highlightSearchResults"] = true;

$tableKeysfuelmaster_data = array();
$tableKeysfuelmaster_data[] = "Id";
$tdatafuelmaster_data[".Keys"] = $tableKeysfuelmaster_data;

$tdatafuelmaster_data[".listFields"] = array();
$tdatafuelmaster_data[".listFields"][] = "MAX(MeterReading)";
$tdatafuelmaster_data[".listFields"][] = "LastMileage";
$tdatafuelmaster_data[".listFields"][] = "Id";
$tdatafuelmaster_data[".listFields"][] = "FuelDate";
$tdatafuelmaster_data[".listFields"][] = "Fleet";
$tdatafuelmaster_data[".listFields"][] = "Vehicle";
$tdatafuelmaster_data[".listFields"][] = "FuelStation";
$tdatafuelmaster_data[".listFields"][] = "LitersPumped";
$tdatafuelmaster_data[".listFields"][] = "PricePerLiter";
$tdatafuelmaster_data[".listFields"][] = "Cost";
$tdatafuelmaster_data[".listFields"][] = "Economy";

$tdatafuelmaster_data[".hideMobileList"] = array();


$tdatafuelmaster_data[".viewFields"] = array();
$tdatafuelmaster_data[".viewFields"][] = "MAX(MeterReading)";
$tdatafuelmaster_data[".viewFields"][] = "LastMileage";
$tdatafuelmaster_data[".viewFields"][] = "Id";
$tdatafuelmaster_data[".viewFields"][] = "SystemDate";
$tdatafuelmaster_data[".viewFields"][] = "Fleet";
$tdatafuelmaster_data[".viewFields"][] = "FuelDate";
$tdatafuelmaster_data[".viewFields"][] = "Vehicle";
$tdatafuelmaster_data[".viewFields"][] = "FuelStation";
$tdatafuelmaster_data[".viewFields"][] = "LitersPumped";
$tdatafuelmaster_data[".viewFields"][] = "PricePerLiter";
$tdatafuelmaster_data[".viewFields"][] = "Cost";
$tdatafuelmaster_data[".viewFields"][] = "Economy";

$tdatafuelmaster_data[".addFields"] = array();
$tdatafuelmaster_data[".addFields"][] = "LastMileage";
$tdatafuelmaster_data[".addFields"][] = "SystemDate";
$tdatafuelmaster_data[".addFields"][] = "Fleet";
$tdatafuelmaster_data[".addFields"][] = "FuelDate";
$tdatafuelmaster_data[".addFields"][] = "Vehicle";
$tdatafuelmaster_data[".addFields"][] = "FuelStation";
$tdatafuelmaster_data[".addFields"][] = "LitersPumped";
$tdatafuelmaster_data[".addFields"][] = "PricePerLiter";

$tdatafuelmaster_data[".masterListFields"] = array();
$tdatafuelmaster_data[".masterListFields"][] = "MAX(MeterReading)";
$tdatafuelmaster_data[".masterListFields"][] = "LastMileage";
$tdatafuelmaster_data[".masterListFields"][] = "Id";
$tdatafuelmaster_data[".masterListFields"][] = "SystemDate";
$tdatafuelmaster_data[".masterListFields"][] = "Fleet";
$tdatafuelmaster_data[".masterListFields"][] = "FuelDate";
$tdatafuelmaster_data[".masterListFields"][] = "Vehicle";
$tdatafuelmaster_data[".masterListFields"][] = "FuelStation";
$tdatafuelmaster_data[".masterListFields"][] = "LitersPumped";
$tdatafuelmaster_data[".masterListFields"][] = "PricePerLiter";
$tdatafuelmaster_data[".masterListFields"][] = "Cost";
$tdatafuelmaster_data[".masterListFields"][] = "Economy";

$tdatafuelmaster_data[".inlineAddFields"] = array();
$tdatafuelmaster_data[".inlineAddFields"][] = "LastMileage";
$tdatafuelmaster_data[".inlineAddFields"][] = "FuelDate";
$tdatafuelmaster_data[".inlineAddFields"][] = "Fleet";
$tdatafuelmaster_data[".inlineAddFields"][] = "Vehicle";
$tdatafuelmaster_data[".inlineAddFields"][] = "FuelStation";
$tdatafuelmaster_data[".inlineAddFields"][] = "LitersPumped";
$tdatafuelmaster_data[".inlineAddFields"][] = "PricePerLiter";

$tdatafuelmaster_data[".editFields"] = array();
$tdatafuelmaster_data[".editFields"][] = "LastMileage";
$tdatafuelmaster_data[".editFields"][] = "SystemDate";
$tdatafuelmaster_data[".editFields"][] = "Fleet";
$tdatafuelmaster_data[".editFields"][] = "FuelDate";
$tdatafuelmaster_data[".editFields"][] = "Vehicle";
$tdatafuelmaster_data[".editFields"][] = "FuelStation";
$tdatafuelmaster_data[".editFields"][] = "LitersPumped";
$tdatafuelmaster_data[".editFields"][] = "PricePerLiter";

$tdatafuelmaster_data[".inlineEditFields"] = array();
$tdatafuelmaster_data[".inlineEditFields"][] = "LastMileage";

$tdatafuelmaster_data[".exportFields"] = array();
$tdatafuelmaster_data[".exportFields"][] = "MAX(MeterReading)";
$tdatafuelmaster_data[".exportFields"][] = "LastMileage";
$tdatafuelmaster_data[".exportFields"][] = "Id";
$tdatafuelmaster_data[".exportFields"][] = "SystemDate";
$tdatafuelmaster_data[".exportFields"][] = "Fleet";
$tdatafuelmaster_data[".exportFields"][] = "FuelDate";
$tdatafuelmaster_data[".exportFields"][] = "Vehicle";
$tdatafuelmaster_data[".exportFields"][] = "FuelStation";
$tdatafuelmaster_data[".exportFields"][] = "LitersPumped";
$tdatafuelmaster_data[".exportFields"][] = "PricePerLiter";
$tdatafuelmaster_data[".exportFields"][] = "Cost";
$tdatafuelmaster_data[".exportFields"][] = "Economy";

$tdatafuelmaster_data[".importFields"] = array();
$tdatafuelmaster_data[".importFields"][] = "Id";
$tdatafuelmaster_data[".importFields"][] = "SystemDate";
$tdatafuelmaster_data[".importFields"][] = "FuelDate";
$tdatafuelmaster_data[".importFields"][] = "Vehicle";
$tdatafuelmaster_data[".importFields"][] = "MAX(MeterReading)";
$tdatafuelmaster_data[".importFields"][] = "LitersPumped";
$tdatafuelmaster_data[".importFields"][] = "PricePerLiter";
$tdatafuelmaster_data[".importFields"][] = "FuelStation";
$tdatafuelmaster_data[".importFields"][] = "Fleet";
$tdatafuelmaster_data[".importFields"][] = "Cost";
$tdatafuelmaster_data[".importFields"][] = "LastMileage";
$tdatafuelmaster_data[".importFields"][] = "Economy";

$tdatafuelmaster_data[".printFields"] = array();
$tdatafuelmaster_data[".printFields"][] = "MAX(MeterReading)";
$tdatafuelmaster_data[".printFields"][] = "LastMileage";
$tdatafuelmaster_data[".printFields"][] = "Id";
$tdatafuelmaster_data[".printFields"][] = "SystemDate";
$tdatafuelmaster_data[".printFields"][] = "Fleet";
$tdatafuelmaster_data[".printFields"][] = "FuelDate";
$tdatafuelmaster_data[".printFields"][] = "Vehicle";
$tdatafuelmaster_data[".printFields"][] = "FuelStation";
$tdatafuelmaster_data[".printFields"][] = "LitersPumped";
$tdatafuelmaster_data[".printFields"][] = "PricePerLiter";
$tdatafuelmaster_data[".printFields"][] = "Cost";
$tdatafuelmaster_data[".printFields"][] = "Economy";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data","Id"); 
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

	

	
	$tdatafuelmaster_data["Id"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data","SystemDate"); 
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

	

	
	$tdatafuelmaster_data["SystemDate"] = $fdata;
//	FuelDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FuelDate";
	$fdata["GoodName"] = "FuelDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data","FuelDate"); 
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

	

	
	$tdatafuelmaster_data["FuelDate"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data","Vehicle"); 
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

	

	
	$tdatafuelmaster_data["Vehicle"] = $fdata;
//	MAX(MeterReading)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MAX(MeterReading)";
	$fdata["GoodName"] = "MAX_MeterReading_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data","MAX_MeterReading_"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MAX(MeterReading)"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX(MeterReading)";
	
		
		
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

	

	
	$tdatafuelmaster_data["MAX(MeterReading)"] = $fdata;
//	LitersPumped
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LitersPumped";
	$fdata["GoodName"] = "LitersPumped";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data","LitersPumped"); 
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

	

	
	$tdatafuelmaster_data["LitersPumped"] = $fdata;
//	PricePerLiter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PricePerLiter";
	$fdata["GoodName"] = "PricePerLiter";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data","PricePerLiter"); 
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

	

	
	$tdatafuelmaster_data["PricePerLiter"] = $fdata;
//	FuelStation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FuelStation";
	$fdata["GoodName"] = "FuelStation";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data","FuelStation"); 
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

	

	
	$tdatafuelmaster_data["FuelStation"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data","Fleet"); 
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

	

	
	$tdatafuelmaster_data["Fleet"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data","Cost"); 
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

	

	
	$tdatafuelmaster_data["Cost"] = $fdata;
//	LastMileage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LastMileage";
	$fdata["GoodName"] = "LastMileage";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data","LastMileage"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "LastMileage"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LastMileage";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafuelmaster_data["LastMileage"] = $fdata;
//	Economy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Economy";
	$fdata["GoodName"] = "Economy";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data","Economy"); 
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

	

	
	$tdatafuelmaster_data["Economy"] = $fdata;

	
$tables_data["fuelmaster-data"]=&$tdatafuelmaster_data;
$field_labels["fuelmaster_data"] = &$fieldLabelsfuelmaster_data;
$fieldToolTips["fuelmaster-data"] = &$fieldToolTipsfuelmaster_data;
$page_titles["fuelmaster_data"] = &$pageTitlesfuelmaster_data;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["fuelmaster-data"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["fuelmaster-data"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_fuelmaster_data()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  SystemDate,  FuelDate,  Vehicle,  MAX(MeterReading) AS `MAX(MeterReading)`,  LitersPumped,  PricePerLiter,  FuelStation,  Fleet,  LitersPumped*PricePerLiter AS Cost,  LastMileage,  (MeterReading-LastMileage)/LitersPumped AS Economy";
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
	"m_srcTableName" => "fuelmaster-data"
));

$proto5["m_sql"] = "Id";
$proto5["m_srcTableName"] = "fuelmaster-data";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data"
));

$proto7["m_sql"] = "SystemDate";
$proto7["m_srcTableName"] = "fuelmaster-data";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data"
));

$proto9["m_sql"] = "FuelDate";
$proto9["m_srcTableName"] = "fuelmaster-data";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data"
));

$proto11["m_sql"] = "Vehicle";
$proto11["m_srcTableName"] = "fuelmaster-data";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$proto14=array();
$proto14["m_functiontype"] = "SQLF_MAX";
$proto14["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "MeterReading",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto14);

$proto13["m_sql"] = "MAX(MeterReading)";
$proto13["m_srcTableName"] = "fuelmaster-data";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "MAX(MeterReading)";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LitersPumped",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data"
));

$proto16["m_sql"] = "LitersPumped";
$proto16["m_srcTableName"] = "fuelmaster-data";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PricePerLiter",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data"
));

$proto18["m_sql"] = "PricePerLiter";
$proto18["m_srcTableName"] = "fuelmaster-data";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelStation",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data"
));

$proto20["m_sql"] = "FuelStation";
$proto20["m_srcTableName"] = "fuelmaster-data";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data"
));

$proto22["m_sql"] = "Fleet";
$proto22["m_srcTableName"] = "fuelmaster-data";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "LitersPumped*PricePerLiter"
));

$proto24["m_sql"] = "LitersPumped*PricePerLiter";
$proto24["m_srcTableName"] = "fuelmaster-data";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "Cost";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "LastMileage",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data"
));

$proto26["m_sql"] = "LastMileage";
$proto26["m_srcTableName"] = "fuelmaster-data";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(MeterReading-LastMileage)/LitersPumped"
));

$proto28["m_sql"] = "(MeterReading-LastMileage)/LitersPumped";
$proto28["m_srcTableName"] = "fuelmaster-data";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "Economy";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "fuelmaster";
$proto31["m_srcTableName"] = "fuelmaster-data";
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
$proto30["m_srcTableName"] = "fuelmaster-data";
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
	"m_srcTableName" => "fuelmaster-data"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "FuelDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "LitersPumped",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "PricePerLiter",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "FuelStation",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
												$proto50=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "LitersPumped*PricePerLiter"
));

$proto50["m_column"]=$obj;
$obj = new SQLGroupByItem($proto50);

$proto0["m_groupby"][]=$obj;
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "LastMileage",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data"
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
$proto0["m_srcTableName"]="fuelmaster-data";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fuelmaster_data = createSqlQuery_fuelmaster_data();


	
												
	
$tdatafuelmaster_data[".sqlquery"] = $queryData_fuelmaster_data;

$tableEvents["fuelmaster-data"] = new eventsBase;
$tdatafuelmaster_data[".hasEvents"] = false;

?>