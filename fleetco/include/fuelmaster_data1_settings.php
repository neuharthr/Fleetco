<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafuelmaster_data1 = array();	
	$tdatafuelmaster_data1[".truncateText"] = true;
	$tdatafuelmaster_data1[".NumberOfChars"] = 80; 
	$tdatafuelmaster_data1[".ShortName"] = "fuelmaster_data1";
	$tdatafuelmaster_data1[".OwnerID"] = "";
	$tdatafuelmaster_data1[".OriginalTable"] = "fuelmaster";

//	field labels
$fieldLabelsfuelmaster_data1 = array();
$fieldToolTipsfuelmaster_data1 = array();
$pageTitlesfuelmaster_data1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfuelmaster_data1["English"] = array();
	$fieldToolTipsfuelmaster_data1["English"] = array();
	$pageTitlesfuelmaster_data1["English"] = array();
	if (count($fieldToolTipsfuelmaster_data1["English"]))
		$tdatafuelmaster_data1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfuelmaster_data1[""] = array();
	$fieldToolTipsfuelmaster_data1[""] = array();
	$pageTitlesfuelmaster_data1[""] = array();
	if (count($fieldToolTipsfuelmaster_data1[""]))
		$tdatafuelmaster_data1[".isUseToolTips"] = true;
}
	
	
	$tdatafuelmaster_data1[".NCSearch"] = true;



$tdatafuelmaster_data1[".shortTableName"] = "fuelmaster_data1";
$tdatafuelmaster_data1[".nSecOptions"] = 0;
$tdatafuelmaster_data1[".recsPerRowList"] = 1;
$tdatafuelmaster_data1[".recsPerRowPrint"] = 1;
$tdatafuelmaster_data1[".mainTableOwnerID"] = "";
$tdatafuelmaster_data1[".moveNext"] = 1;
$tdatafuelmaster_data1[".entityType"] = 1;

$tdatafuelmaster_data1[".strOriginalTableName"] = "fuelmaster";




$tdatafuelmaster_data1[".showAddInPopup"] = false;

$tdatafuelmaster_data1[".showEditInPopup"] = false;

$tdatafuelmaster_data1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafuelmaster_data1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafuelmaster_data1[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatafuelmaster_data1[".listAjax"] = true;
else 
	$tdatafuelmaster_data1[".listAjax"] = false;

	$tdatafuelmaster_data1[".audit"] = false;

	$tdatafuelmaster_data1[".locking"] = false;

$tdatafuelmaster_data1[".edit"] = true;
$tdatafuelmaster_data1[".afterEditAction"] = 1;
$tdatafuelmaster_data1[".closePopupAfterEdit"] = 1;
$tdatafuelmaster_data1[".afterEditActionDetTable"] = "";

$tdatafuelmaster_data1[".add"] = true;
$tdatafuelmaster_data1[".afterAddAction"] = 1;
$tdatafuelmaster_data1[".closePopupAfterAdd"] = 1;
$tdatafuelmaster_data1[".afterAddActionDetTable"] = "";

$tdatafuelmaster_data1[".list"] = true;

$tdatafuelmaster_data1[".inlineAdd"] = true;
$tdatafuelmaster_data1[".view"] = true;

$tdatafuelmaster_data1[".import"] = true;

$tdatafuelmaster_data1[".exportTo"] = true;

$tdatafuelmaster_data1[".printFriendly"] = true;

$tdatafuelmaster_data1[".delete"] = true;

$tdatafuelmaster_data1[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafuelmaster_data1[".searchSaving"] = false;
//

$tdatafuelmaster_data1[".showSearchPanel"] = true;
		$tdatafuelmaster_data1[".flexibleSearch"] = true;		

if (isMobile())
	$tdatafuelmaster_data1[".isUseAjaxSuggest"] = false;
else 
	$tdatafuelmaster_data1[".isUseAjaxSuggest"] = true;

$tdatafuelmaster_data1[".rowHighlite"] = true;



$tdatafuelmaster_data1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafuelmaster_data1[".isUseTimeForSearch"] = false;





$tdatafuelmaster_data1[".allSearchFields"] = array();
$tdatafuelmaster_data1[".filterFields"] = array();
$tdatafuelmaster_data1[".requiredSearchFields"] = array();

$tdatafuelmaster_data1[".allSearchFields"][] = "MAX(MeterReading)";
	$tdatafuelmaster_data1[".allSearchFields"][] = "LastMileage";
	$tdatafuelmaster_data1[".allSearchFields"][] = "Id";
	$tdatafuelmaster_data1[".allSearchFields"][] = "SystemDate";
	$tdatafuelmaster_data1[".allSearchFields"][] = "Fleet";
	$tdatafuelmaster_data1[".allSearchFields"][] = "FuelDate";
	$tdatafuelmaster_data1[".allSearchFields"][] = "Vehicle";
	$tdatafuelmaster_data1[".allSearchFields"][] = "FuelStation";
	$tdatafuelmaster_data1[".allSearchFields"][] = "LitersPumped";
	$tdatafuelmaster_data1[".allSearchFields"][] = "PricePerLiter";
	$tdatafuelmaster_data1[".allSearchFields"][] = "Cost";
	$tdatafuelmaster_data1[".allSearchFields"][] = "Economy";
	

$tdatafuelmaster_data1[".googleLikeFields"] = array();
$tdatafuelmaster_data1[".googleLikeFields"][] = "Id";
$tdatafuelmaster_data1[".googleLikeFields"][] = "SystemDate";
$tdatafuelmaster_data1[".googleLikeFields"][] = "FuelDate";
$tdatafuelmaster_data1[".googleLikeFields"][] = "Vehicle";
$tdatafuelmaster_data1[".googleLikeFields"][] = "MAX(MeterReading)";
$tdatafuelmaster_data1[".googleLikeFields"][] = "LitersPumped";
$tdatafuelmaster_data1[".googleLikeFields"][] = "PricePerLiter";
$tdatafuelmaster_data1[".googleLikeFields"][] = "FuelStation";
$tdatafuelmaster_data1[".googleLikeFields"][] = "Fleet";
$tdatafuelmaster_data1[".googleLikeFields"][] = "Cost";
$tdatafuelmaster_data1[".googleLikeFields"][] = "LastMileage";
$tdatafuelmaster_data1[".googleLikeFields"][] = "Economy";


$tdatafuelmaster_data1[".advSearchFields"] = array();
$tdatafuelmaster_data1[".advSearchFields"][] = "MAX(MeterReading)";
$tdatafuelmaster_data1[".advSearchFields"][] = "LastMileage";
$tdatafuelmaster_data1[".advSearchFields"][] = "Id";
$tdatafuelmaster_data1[".advSearchFields"][] = "SystemDate";
$tdatafuelmaster_data1[".advSearchFields"][] = "Fleet";
$tdatafuelmaster_data1[".advSearchFields"][] = "FuelDate";
$tdatafuelmaster_data1[".advSearchFields"][] = "Vehicle";
$tdatafuelmaster_data1[".advSearchFields"][] = "FuelStation";
$tdatafuelmaster_data1[".advSearchFields"][] = "LitersPumped";
$tdatafuelmaster_data1[".advSearchFields"][] = "PricePerLiter";
$tdatafuelmaster_data1[".advSearchFields"][] = "Cost";
$tdatafuelmaster_data1[".advSearchFields"][] = "Economy";

$tdatafuelmaster_data1[".tableType"] = "list";

$tdatafuelmaster_data1[".printerPageOrientation"] = 0;
$tdatafuelmaster_data1[".nPrinterPageScale"] = 100;

$tdatafuelmaster_data1[".nPrinterSplitRecords"] = 40;

$tdatafuelmaster_data1[".nPrinterPDFSplitRecords"] = 40;



$tdatafuelmaster_data1[".geocodingEnabled"] = false;




	





// view page pdf
$tdatafuelmaster_data1[".isViewPagePDF"] = true;
$tdatafuelmaster_data1[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatafuelmaster_data1[".isPrinterPagePDF"] = true;
$tdatafuelmaster_data1[".nPrinterPagePDFScale"] = 100;

$tdatafuelmaster_data1[".totalsFields"] = array();
$tdatafuelmaster_data1[".totalsFields"][] = array(
	"fName" => "LitersPumped", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatafuelmaster_data1[".totalsFields"][] = array(
	"fName" => "Cost", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatafuelmaster_data1[".totalsFields"][] = array(
	"fName" => "Economy", 
	"numRows" => 0,
	"totalsType" => "AVERAGE",
	"viewFormat" => 'Number');

$tdatafuelmaster_data1[".pageSize"] = 20;

$tdatafuelmaster_data1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafuelmaster_data1[".strOrderBy"] = $tstrOrderBy;

$tdatafuelmaster_data1[".orderindexes"] = array();

$tdatafuelmaster_data1[".sqlHead"] = "SELECT Id,  SystemDate,  FuelDate,  Vehicle,  MAX(MeterReading) AS `MAX(MeterReading)`,  LitersPumped,  PricePerLiter,  FuelStation,  Fleet,  LitersPumped*PricePerLiter AS Cost,  LastMileage,  (MeterReading-LastMileage)/LitersPumped AS Economy";
$tdatafuelmaster_data1[".sqlFrom"] = "FROM fuelmaster";
$tdatafuelmaster_data1[".sqlWhereExpr"] = "";
$tdatafuelmaster_data1[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatafuelmaster_data1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafuelmaster_data1[".arrGroupsPerPage"] = $arrGPP;

$tdatafuelmaster_data1[".highlightSearchResults"] = true;

$tableKeysfuelmaster_data1 = array();
$tableKeysfuelmaster_data1[] = "Id";
$tdatafuelmaster_data1[".Keys"] = $tableKeysfuelmaster_data1;

$tdatafuelmaster_data1[".listFields"] = array();
$tdatafuelmaster_data1[".listFields"][] = "MAX(MeterReading)";
$tdatafuelmaster_data1[".listFields"][] = "LastMileage";
$tdatafuelmaster_data1[".listFields"][] = "Id";
$tdatafuelmaster_data1[".listFields"][] = "FuelDate";
$tdatafuelmaster_data1[".listFields"][] = "Fleet";
$tdatafuelmaster_data1[".listFields"][] = "Vehicle";
$tdatafuelmaster_data1[".listFields"][] = "FuelStation";
$tdatafuelmaster_data1[".listFields"][] = "LitersPumped";
$tdatafuelmaster_data1[".listFields"][] = "PricePerLiter";
$tdatafuelmaster_data1[".listFields"][] = "Cost";
$tdatafuelmaster_data1[".listFields"][] = "Economy";

$tdatafuelmaster_data1[".hideMobileList"] = array();


$tdatafuelmaster_data1[".viewFields"] = array();
$tdatafuelmaster_data1[".viewFields"][] = "MAX(MeterReading)";
$tdatafuelmaster_data1[".viewFields"][] = "LastMileage";
$tdatafuelmaster_data1[".viewFields"][] = "Id";
$tdatafuelmaster_data1[".viewFields"][] = "SystemDate";
$tdatafuelmaster_data1[".viewFields"][] = "Fleet";
$tdatafuelmaster_data1[".viewFields"][] = "FuelDate";
$tdatafuelmaster_data1[".viewFields"][] = "Vehicle";
$tdatafuelmaster_data1[".viewFields"][] = "FuelStation";
$tdatafuelmaster_data1[".viewFields"][] = "LitersPumped";
$tdatafuelmaster_data1[".viewFields"][] = "PricePerLiter";
$tdatafuelmaster_data1[".viewFields"][] = "Cost";
$tdatafuelmaster_data1[".viewFields"][] = "Economy";

$tdatafuelmaster_data1[".addFields"] = array();
$tdatafuelmaster_data1[".addFields"][] = "LastMileage";
$tdatafuelmaster_data1[".addFields"][] = "SystemDate";
$tdatafuelmaster_data1[".addFields"][] = "Fleet";
$tdatafuelmaster_data1[".addFields"][] = "FuelDate";
$tdatafuelmaster_data1[".addFields"][] = "Vehicle";
$tdatafuelmaster_data1[".addFields"][] = "FuelStation";
$tdatafuelmaster_data1[".addFields"][] = "LitersPumped";
$tdatafuelmaster_data1[".addFields"][] = "PricePerLiter";

$tdatafuelmaster_data1[".masterListFields"] = array();
$tdatafuelmaster_data1[".masterListFields"][] = "MAX(MeterReading)";
$tdatafuelmaster_data1[".masterListFields"][] = "LastMileage";
$tdatafuelmaster_data1[".masterListFields"][] = "Id";
$tdatafuelmaster_data1[".masterListFields"][] = "SystemDate";
$tdatafuelmaster_data1[".masterListFields"][] = "Fleet";
$tdatafuelmaster_data1[".masterListFields"][] = "FuelDate";
$tdatafuelmaster_data1[".masterListFields"][] = "Vehicle";
$tdatafuelmaster_data1[".masterListFields"][] = "FuelStation";
$tdatafuelmaster_data1[".masterListFields"][] = "LitersPumped";
$tdatafuelmaster_data1[".masterListFields"][] = "PricePerLiter";
$tdatafuelmaster_data1[".masterListFields"][] = "Cost";
$tdatafuelmaster_data1[".masterListFields"][] = "Economy";

$tdatafuelmaster_data1[".inlineAddFields"] = array();
$tdatafuelmaster_data1[".inlineAddFields"][] = "LastMileage";
$tdatafuelmaster_data1[".inlineAddFields"][] = "FuelDate";
$tdatafuelmaster_data1[".inlineAddFields"][] = "Fleet";
$tdatafuelmaster_data1[".inlineAddFields"][] = "Vehicle";
$tdatafuelmaster_data1[".inlineAddFields"][] = "FuelStation";
$tdatafuelmaster_data1[".inlineAddFields"][] = "LitersPumped";
$tdatafuelmaster_data1[".inlineAddFields"][] = "PricePerLiter";

$tdatafuelmaster_data1[".editFields"] = array();
$tdatafuelmaster_data1[".editFields"][] = "LastMileage";
$tdatafuelmaster_data1[".editFields"][] = "SystemDate";
$tdatafuelmaster_data1[".editFields"][] = "Fleet";
$tdatafuelmaster_data1[".editFields"][] = "FuelDate";
$tdatafuelmaster_data1[".editFields"][] = "Vehicle";
$tdatafuelmaster_data1[".editFields"][] = "FuelStation";
$tdatafuelmaster_data1[".editFields"][] = "LitersPumped";
$tdatafuelmaster_data1[".editFields"][] = "PricePerLiter";

$tdatafuelmaster_data1[".inlineEditFields"] = array();
$tdatafuelmaster_data1[".inlineEditFields"][] = "LastMileage";

$tdatafuelmaster_data1[".exportFields"] = array();
$tdatafuelmaster_data1[".exportFields"][] = "MAX(MeterReading)";
$tdatafuelmaster_data1[".exportFields"][] = "LastMileage";
$tdatafuelmaster_data1[".exportFields"][] = "Id";
$tdatafuelmaster_data1[".exportFields"][] = "SystemDate";
$tdatafuelmaster_data1[".exportFields"][] = "Fleet";
$tdatafuelmaster_data1[".exportFields"][] = "FuelDate";
$tdatafuelmaster_data1[".exportFields"][] = "Vehicle";
$tdatafuelmaster_data1[".exportFields"][] = "FuelStation";
$tdatafuelmaster_data1[".exportFields"][] = "LitersPumped";
$tdatafuelmaster_data1[".exportFields"][] = "PricePerLiter";
$tdatafuelmaster_data1[".exportFields"][] = "Cost";
$tdatafuelmaster_data1[".exportFields"][] = "Economy";

$tdatafuelmaster_data1[".importFields"] = array();
$tdatafuelmaster_data1[".importFields"][] = "Id";
$tdatafuelmaster_data1[".importFields"][] = "SystemDate";
$tdatafuelmaster_data1[".importFields"][] = "FuelDate";
$tdatafuelmaster_data1[".importFields"][] = "Vehicle";
$tdatafuelmaster_data1[".importFields"][] = "MAX(MeterReading)";
$tdatafuelmaster_data1[".importFields"][] = "LitersPumped";
$tdatafuelmaster_data1[".importFields"][] = "PricePerLiter";
$tdatafuelmaster_data1[".importFields"][] = "FuelStation";
$tdatafuelmaster_data1[".importFields"][] = "Fleet";
$tdatafuelmaster_data1[".importFields"][] = "Cost";
$tdatafuelmaster_data1[".importFields"][] = "LastMileage";
$tdatafuelmaster_data1[".importFields"][] = "Economy";

$tdatafuelmaster_data1[".printFields"] = array();
$tdatafuelmaster_data1[".printFields"][] = "MAX(MeterReading)";
$tdatafuelmaster_data1[".printFields"][] = "LastMileage";
$tdatafuelmaster_data1[".printFields"][] = "Id";
$tdatafuelmaster_data1[".printFields"][] = "SystemDate";
$tdatafuelmaster_data1[".printFields"][] = "Fleet";
$tdatafuelmaster_data1[".printFields"][] = "FuelDate";
$tdatafuelmaster_data1[".printFields"][] = "Vehicle";
$tdatafuelmaster_data1[".printFields"][] = "FuelStation";
$tdatafuelmaster_data1[".printFields"][] = "LitersPumped";
$tdatafuelmaster_data1[".printFields"][] = "PricePerLiter";
$tdatafuelmaster_data1[".printFields"][] = "Cost";
$tdatafuelmaster_data1[".printFields"][] = "Economy";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data1","Id"); 
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

	

	
	$tdatafuelmaster_data1["Id"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data1","SystemDate"); 
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

	

	
	$tdatafuelmaster_data1["SystemDate"] = $fdata;
//	FuelDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FuelDate";
	$fdata["GoodName"] = "FuelDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data1","FuelDate"); 
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

	

	
	$tdatafuelmaster_data1["FuelDate"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data1","Vehicle"); 
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

	

	
	$tdatafuelmaster_data1["Vehicle"] = $fdata;
//	MAX(MeterReading)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MAX(MeterReading)";
	$fdata["GoodName"] = "MAX_MeterReading_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data1","MAX_MeterReading_"); 
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

	

	
	$tdatafuelmaster_data1["MAX(MeterReading)"] = $fdata;
//	LitersPumped
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LitersPumped";
	$fdata["GoodName"] = "LitersPumped";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data1","LitersPumped"); 
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

	

	
	$tdatafuelmaster_data1["LitersPumped"] = $fdata;
//	PricePerLiter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PricePerLiter";
	$fdata["GoodName"] = "PricePerLiter";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data1","PricePerLiter"); 
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

	

	
	$tdatafuelmaster_data1["PricePerLiter"] = $fdata;
//	FuelStation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FuelStation";
	$fdata["GoodName"] = "FuelStation";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data1","FuelStation"); 
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

	

	
	$tdatafuelmaster_data1["FuelStation"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data1","Fleet"); 
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

	

	
	$tdatafuelmaster_data1["Fleet"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data1","Cost"); 
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

	

	
	$tdatafuelmaster_data1["Cost"] = $fdata;
//	LastMileage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LastMileage";
	$fdata["GoodName"] = "LastMileage";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data1","LastMileage"); 
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

	

	
	$tdatafuelmaster_data1["LastMileage"] = $fdata;
//	Economy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Economy";
	$fdata["GoodName"] = "Economy";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data1","Economy"); 
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

	

	
	$tdatafuelmaster_data1["Economy"] = $fdata;

	
$tables_data["fuelmaster-data1"]=&$tdatafuelmaster_data1;
$field_labels["fuelmaster_data1"] = &$fieldLabelsfuelmaster_data1;
$fieldToolTips["fuelmaster-data1"] = &$fieldToolTipsfuelmaster_data1;
$page_titles["fuelmaster_data1"] = &$pageTitlesfuelmaster_data1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["fuelmaster-data1"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["fuelmaster-data1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_fuelmaster_data1()
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
	"m_srcTableName" => "fuelmaster-data1"
));

$proto5["m_sql"] = "Id";
$proto5["m_srcTableName"] = "fuelmaster-data1";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data1"
));

$proto7["m_sql"] = "SystemDate";
$proto7["m_srcTableName"] = "fuelmaster-data1";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data1"
));

$proto9["m_sql"] = "FuelDate";
$proto9["m_srcTableName"] = "fuelmaster-data1";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data1"
));

$proto11["m_sql"] = "Vehicle";
$proto11["m_srcTableName"] = "fuelmaster-data1";
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
	"m_srcTableName" => "fuelmaster-data1"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto14);

$proto13["m_sql"] = "MAX(MeterReading)";
$proto13["m_srcTableName"] = "fuelmaster-data1";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "MAX(MeterReading)";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LitersPumped",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data1"
));

$proto16["m_sql"] = "LitersPumped";
$proto16["m_srcTableName"] = "fuelmaster-data1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PricePerLiter",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data1"
));

$proto18["m_sql"] = "PricePerLiter";
$proto18["m_srcTableName"] = "fuelmaster-data1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelStation",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data1"
));

$proto20["m_sql"] = "FuelStation";
$proto20["m_srcTableName"] = "fuelmaster-data1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data1"
));

$proto22["m_sql"] = "Fleet";
$proto22["m_srcTableName"] = "fuelmaster-data1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "LitersPumped*PricePerLiter"
));

$proto24["m_sql"] = "LitersPumped*PricePerLiter";
$proto24["m_srcTableName"] = "fuelmaster-data1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "Cost";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "LastMileage",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data1"
));

$proto26["m_sql"] = "LastMileage";
$proto26["m_srcTableName"] = "fuelmaster-data1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(MeterReading-LastMileage)/LitersPumped"
));

$proto28["m_sql"] = "(MeterReading-LastMileage)/LitersPumped";
$proto28["m_srcTableName"] = "fuelmaster-data1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "Economy";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "fuelmaster";
$proto31["m_srcTableName"] = "fuelmaster-data1";
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
$proto30["m_srcTableName"] = "fuelmaster-data1";
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
	"m_srcTableName" => "fuelmaster-data1"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data1"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "FuelDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data1"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data1"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "LitersPumped",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data1"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "PricePerLiter",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data1"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "FuelStation",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data1"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data1"
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
	"m_srcTableName" => "fuelmaster-data1"
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
$proto0["m_srcTableName"]="fuelmaster-data1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fuelmaster_data1 = createSqlQuery_fuelmaster_data1();


	
												
	
$tdatafuelmaster_data1[".sqlquery"] = $queryData_fuelmaster_data1;

$tableEvents["fuelmaster-data1"] = new eventsBase;
$tdatafuelmaster_data1[".hasEvents"] = false;

?>