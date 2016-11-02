<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafuelmaster_report = array();	
	$tdatafuelmaster_report[".truncateText"] = true;
	$tdatafuelmaster_report[".NumberOfChars"] = 80; 
	$tdatafuelmaster_report[".ShortName"] = "fuelmaster_report";
	$tdatafuelmaster_report[".OwnerID"] = "";
	$tdatafuelmaster_report[".OriginalTable"] = "fuelmaster";

//	field labels
$fieldLabelsfuelmaster_report = array();
$fieldToolTipsfuelmaster_report = array();
$pageTitlesfuelmaster_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfuelmaster_report["English"] = array();
	$fieldToolTipsfuelmaster_report["English"] = array();
	$pageTitlesfuelmaster_report["English"] = array();
	$fieldLabelsfuelmaster_report["English"]["Id"] = "Sys.Id";
	$fieldToolTipsfuelmaster_report["English"]["Id"] = "";
	$fieldLabelsfuelmaster_report["English"]["SystemDate"] = "Sys. Date";
	$fieldToolTipsfuelmaster_report["English"]["SystemDate"] = "";
	$fieldLabelsfuelmaster_report["English"]["FuelDate"] = "Fuel Date";
	$fieldToolTipsfuelmaster_report["English"]["FuelDate"] = "";
	$fieldLabelsfuelmaster_report["English"]["Vehicle"] = "Vehicle";
	$fieldToolTipsfuelmaster_report["English"]["Vehicle"] = "";
	$fieldLabelsfuelmaster_report["English"]["MeterReading"] = "Mtr.Reading";
	$fieldToolTipsfuelmaster_report["English"]["MeterReading"] = "";
	$fieldLabelsfuelmaster_report["English"]["LitersPumped"] = "Ltr.Pumped";
	$fieldToolTipsfuelmaster_report["English"]["LitersPumped"] = "";
	$fieldLabelsfuelmaster_report["English"]["PricePerLiter"] = "Ltr.Price";
	$fieldToolTipsfuelmaster_report["English"]["PricePerLiter"] = "";
	$fieldLabelsfuelmaster_report["English"]["FuelStation"] = "Fuel Stat.";
	$fieldToolTipsfuelmaster_report["English"]["FuelStation"] = "";
	$fieldLabelsfuelmaster_report["English"]["Fleet"] = "Fleet";
	$fieldToolTipsfuelmaster_report["English"]["Fleet"] = "";
	$fieldLabelsfuelmaster_report["English"]["Cost"] = "Cost";
	$fieldToolTipsfuelmaster_report["English"]["Cost"] = "";
	$fieldLabelsfuelmaster_report["English"]["LastMileage"] = "Last Mileage";
	$fieldToolTipsfuelmaster_report["English"]["LastMileage"] = "";
	$fieldLabelsfuelmaster_report["English"]["Economy"] = "Economy";
	$fieldToolTipsfuelmaster_report["English"]["Economy"] = "";
	if (count($fieldToolTipsfuelmaster_report["English"]))
		$tdatafuelmaster_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfuelmaster_report[""] = array();
	$fieldToolTipsfuelmaster_report[""] = array();
	$pageTitlesfuelmaster_report[""] = array();
	$fieldLabelsfuelmaster_report[""]["Id"] = "Id";
	$fieldToolTipsfuelmaster_report[""]["Id"] = "";
	$fieldLabelsfuelmaster_report[""]["SystemDate"] = "System Date";
	$fieldToolTipsfuelmaster_report[""]["SystemDate"] = "";
	$fieldLabelsfuelmaster_report[""]["FuelDate"] = "Fuel Date";
	$fieldToolTipsfuelmaster_report[""]["FuelDate"] = "";
	$fieldLabelsfuelmaster_report[""]["Vehicle"] = "Vehicle";
	$fieldToolTipsfuelmaster_report[""]["Vehicle"] = "";
	$fieldLabelsfuelmaster_report[""]["MeterReading"] = "Meter Reading";
	$fieldToolTipsfuelmaster_report[""]["MeterReading"] = "";
	$fieldLabelsfuelmaster_report[""]["LitersPumped"] = "Liters Pumped";
	$fieldToolTipsfuelmaster_report[""]["LitersPumped"] = "";
	$fieldLabelsfuelmaster_report[""]["PricePerLiter"] = "Price Per Liter";
	$fieldToolTipsfuelmaster_report[""]["PricePerLiter"] = "";
	$fieldLabelsfuelmaster_report[""]["FuelStation"] = "Fuel Station";
	$fieldToolTipsfuelmaster_report[""]["FuelStation"] = "";
	$fieldLabelsfuelmaster_report[""]["Fleet"] = "Fleet";
	$fieldToolTipsfuelmaster_report[""]["Fleet"] = "";
	$fieldLabelsfuelmaster_report[""]["Cost"] = "Cost";
	$fieldToolTipsfuelmaster_report[""]["Cost"] = "";
	$fieldLabelsfuelmaster_report[""]["LastMileage"] = "Last Mileage";
	$fieldToolTipsfuelmaster_report[""]["LastMileage"] = "";
	$fieldLabelsfuelmaster_report[""]["Economy"] = "Economy";
	$fieldToolTipsfuelmaster_report[""]["Economy"] = "";
	if (count($fieldToolTipsfuelmaster_report[""]))
		$tdatafuelmaster_report[".isUseToolTips"] = true;
}
	
	
	$tdatafuelmaster_report[".NCSearch"] = true;



$tdatafuelmaster_report[".shortTableName"] = "fuelmaster_report";
$tdatafuelmaster_report[".nSecOptions"] = 0;
$tdatafuelmaster_report[".recsPerRowList"] = 1;
$tdatafuelmaster_report[".recsPerRowPrint"] = 1;
$tdatafuelmaster_report[".mainTableOwnerID"] = "";
$tdatafuelmaster_report[".moveNext"] = 1;
$tdatafuelmaster_report[".entityType"] = 1;

$tdatafuelmaster_report[".strOriginalTableName"] = "fuelmaster";




$tdatafuelmaster_report[".showAddInPopup"] = false;

$tdatafuelmaster_report[".showEditInPopup"] = false;

$tdatafuelmaster_report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafuelmaster_report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafuelmaster_report[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatafuelmaster_report[".listAjax"] = true;
else 
	$tdatafuelmaster_report[".listAjax"] = false;

	$tdatafuelmaster_report[".audit"] = false;

	$tdatafuelmaster_report[".locking"] = false;



$tdatafuelmaster_report[".list"] = true;

$tdatafuelmaster_report[".view"] = true;


$tdatafuelmaster_report[".exportTo"] = true;

$tdatafuelmaster_report[".printFriendly"] = true;


$tdatafuelmaster_report[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdatafuelmaster_report[".searchSaving"] = false;
//

$tdatafuelmaster_report[".showSearchPanel"] = true;
		$tdatafuelmaster_report[".flexibleSearch"] = true;		

if (isMobile())
	$tdatafuelmaster_report[".isUseAjaxSuggest"] = false;
else 
	$tdatafuelmaster_report[".isUseAjaxSuggest"] = true;

$tdatafuelmaster_report[".rowHighlite"] = true;



$tdatafuelmaster_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafuelmaster_report[".isUseTimeForSearch"] = false;





$tdatafuelmaster_report[".allSearchFields"] = array();
$tdatafuelmaster_report[".filterFields"] = array();
$tdatafuelmaster_report[".requiredSearchFields"] = array();

$tdatafuelmaster_report[".allSearchFields"][] = "SystemDate";
	$tdatafuelmaster_report[".allSearchFields"][] = "Fleet";
	$tdatafuelmaster_report[".allSearchFields"][] = "FuelDate";
	$tdatafuelmaster_report[".allSearchFields"][] = "Vehicle";
	$tdatafuelmaster_report[".allSearchFields"][] = "FuelStation";
	$tdatafuelmaster_report[".allSearchFields"][] = "MeterReading";
	$tdatafuelmaster_report[".allSearchFields"][] = "LitersPumped";
	$tdatafuelmaster_report[".allSearchFields"][] = "PricePerLiter";
	$tdatafuelmaster_report[".allSearchFields"][] = "Cost";
	$tdatafuelmaster_report[".allSearchFields"][] = "LastMileage";
	$tdatafuelmaster_report[".allSearchFields"][] = "Economy";
	

$tdatafuelmaster_report[".googleLikeFields"] = array();
$tdatafuelmaster_report[".googleLikeFields"][] = "SystemDate";
$tdatafuelmaster_report[".googleLikeFields"][] = "FuelDate";
$tdatafuelmaster_report[".googleLikeFields"][] = "Vehicle";
$tdatafuelmaster_report[".googleLikeFields"][] = "MeterReading";
$tdatafuelmaster_report[".googleLikeFields"][] = "LitersPumped";
$tdatafuelmaster_report[".googleLikeFields"][] = "PricePerLiter";
$tdatafuelmaster_report[".googleLikeFields"][] = "FuelStation";
$tdatafuelmaster_report[".googleLikeFields"][] = "Fleet";
$tdatafuelmaster_report[".googleLikeFields"][] = "Cost";
$tdatafuelmaster_report[".googleLikeFields"][] = "LastMileage";
$tdatafuelmaster_report[".googleLikeFields"][] = "Economy";

$tdatafuelmaster_report[".panelSearchFields"] = array();
$tdatafuelmaster_report[".searchPanelOptions"] = array();
$tdatafuelmaster_report[".panelSearchFields"][] = "FuelDate";
	
$tdatafuelmaster_report[".advSearchFields"] = array();
$tdatafuelmaster_report[".advSearchFields"][] = "SystemDate";
$tdatafuelmaster_report[".advSearchFields"][] = "Fleet";
$tdatafuelmaster_report[".advSearchFields"][] = "FuelDate";
$tdatafuelmaster_report[".advSearchFields"][] = "Vehicle";
$tdatafuelmaster_report[".advSearchFields"][] = "FuelStation";
$tdatafuelmaster_report[".advSearchFields"][] = "MeterReading";
$tdatafuelmaster_report[".advSearchFields"][] = "LitersPumped";
$tdatafuelmaster_report[".advSearchFields"][] = "PricePerLiter";
$tdatafuelmaster_report[".advSearchFields"][] = "Cost";
$tdatafuelmaster_report[".advSearchFields"][] = "LastMileage";
$tdatafuelmaster_report[".advSearchFields"][] = "Economy";

$tdatafuelmaster_report[".tableType"] = "list";

$tdatafuelmaster_report[".printerPageOrientation"] = 0;
$tdatafuelmaster_report[".nPrinterPageScale"] = 100;

$tdatafuelmaster_report[".nPrinterSplitRecords"] = 40;

$tdatafuelmaster_report[".nPrinterPDFSplitRecords"] = 40;



$tdatafuelmaster_report[".geocodingEnabled"] = false;




	





// view page pdf
$tdatafuelmaster_report[".isViewPagePDF"] = true;
$tdatafuelmaster_report[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatafuelmaster_report[".isPrinterPagePDF"] = true;
$tdatafuelmaster_report[".nPrinterPagePDFScale"] = 100;

$tdatafuelmaster_report[".totalsFields"] = array();
$tdatafuelmaster_report[".totalsFields"][] = array(
	"fName" => "LitersPumped", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatafuelmaster_report[".totalsFields"][] = array(
	"fName" => "Cost", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatafuelmaster_report[".totalsFields"][] = array(
	"fName" => "Economy", 
	"numRows" => 0,
	"totalsType" => "AVERAGE",
	"viewFormat" => 'Number');

$tdatafuelmaster_report[".pageSize"] = 20;

$tdatafuelmaster_report[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafuelmaster_report[".strOrderBy"] = $tstrOrderBy;

$tdatafuelmaster_report[".orderindexes"] = array();

$tdatafuelmaster_report[".sqlHead"] = "SELECT Id,  SystemDate,  FuelDate,  Vehicle,  MeterReading,  LitersPumped,  PricePerLiter,  FuelStation,  Fleet,  LitersPumped*PricePerLiter AS Cost,  LastMileage,  (MeterReading-LastMileage)/LitersPumped AS Economy";
$tdatafuelmaster_report[".sqlFrom"] = "FROM fuelmaster";
$tdatafuelmaster_report[".sqlWhereExpr"] = "";
$tdatafuelmaster_report[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatafuelmaster_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafuelmaster_report[".arrGroupsPerPage"] = $arrGPP;

$tdatafuelmaster_report[".highlightSearchResults"] = true;

$tableKeysfuelmaster_report = array();
$tableKeysfuelmaster_report[] = "Id";
$tdatafuelmaster_report[".Keys"] = $tableKeysfuelmaster_report;

$tdatafuelmaster_report[".listFields"] = array();
$tdatafuelmaster_report[".listFields"][] = "Id";
$tdatafuelmaster_report[".listFields"][] = "FuelDate";
$tdatafuelmaster_report[".listFields"][] = "Fleet";
$tdatafuelmaster_report[".listFields"][] = "Vehicle";
$tdatafuelmaster_report[".listFields"][] = "FuelStation";
$tdatafuelmaster_report[".listFields"][] = "MeterReading";
$tdatafuelmaster_report[".listFields"][] = "LitersPumped";
$tdatafuelmaster_report[".listFields"][] = "PricePerLiter";
$tdatafuelmaster_report[".listFields"][] = "Cost";
$tdatafuelmaster_report[".listFields"][] = "LastMileage";
$tdatafuelmaster_report[".listFields"][] = "Economy";

$tdatafuelmaster_report[".hideMobileList"] = array();


$tdatafuelmaster_report[".viewFields"] = array();
$tdatafuelmaster_report[".viewFields"][] = "Id";
$tdatafuelmaster_report[".viewFields"][] = "SystemDate";
$tdatafuelmaster_report[".viewFields"][] = "Fleet";
$tdatafuelmaster_report[".viewFields"][] = "FuelDate";
$tdatafuelmaster_report[".viewFields"][] = "Vehicle";
$tdatafuelmaster_report[".viewFields"][] = "FuelStation";
$tdatafuelmaster_report[".viewFields"][] = "MeterReading";
$tdatafuelmaster_report[".viewFields"][] = "LitersPumped";
$tdatafuelmaster_report[".viewFields"][] = "PricePerLiter";
$tdatafuelmaster_report[".viewFields"][] = "Cost";
$tdatafuelmaster_report[".viewFields"][] = "LastMileage";
$tdatafuelmaster_report[".viewFields"][] = "Economy";

$tdatafuelmaster_report[".addFields"] = array();

$tdatafuelmaster_report[".masterListFields"] = array();
$tdatafuelmaster_report[".masterListFields"][] = "Id";
$tdatafuelmaster_report[".masterListFields"][] = "SystemDate";
$tdatafuelmaster_report[".masterListFields"][] = "Fleet";
$tdatafuelmaster_report[".masterListFields"][] = "FuelDate";
$tdatafuelmaster_report[".masterListFields"][] = "Vehicle";
$tdatafuelmaster_report[".masterListFields"][] = "FuelStation";
$tdatafuelmaster_report[".masterListFields"][] = "MeterReading";
$tdatafuelmaster_report[".masterListFields"][] = "LitersPumped";
$tdatafuelmaster_report[".masterListFields"][] = "PricePerLiter";
$tdatafuelmaster_report[".masterListFields"][] = "Cost";
$tdatafuelmaster_report[".masterListFields"][] = "LastMileage";
$tdatafuelmaster_report[".masterListFields"][] = "Economy";

$tdatafuelmaster_report[".inlineAddFields"] = array();

$tdatafuelmaster_report[".editFields"] = array();

$tdatafuelmaster_report[".inlineEditFields"] = array();

$tdatafuelmaster_report[".exportFields"] = array();
$tdatafuelmaster_report[".exportFields"][] = "Id";
$tdatafuelmaster_report[".exportFields"][] = "SystemDate";
$tdatafuelmaster_report[".exportFields"][] = "Fleet";
$tdatafuelmaster_report[".exportFields"][] = "FuelDate";
$tdatafuelmaster_report[".exportFields"][] = "Vehicle";
$tdatafuelmaster_report[".exportFields"][] = "FuelStation";
$tdatafuelmaster_report[".exportFields"][] = "MeterReading";
$tdatafuelmaster_report[".exportFields"][] = "LitersPumped";
$tdatafuelmaster_report[".exportFields"][] = "PricePerLiter";
$tdatafuelmaster_report[".exportFields"][] = "Cost";
$tdatafuelmaster_report[".exportFields"][] = "LastMileage";
$tdatafuelmaster_report[".exportFields"][] = "Economy";

$tdatafuelmaster_report[".importFields"] = array();

$tdatafuelmaster_report[".printFields"] = array();
$tdatafuelmaster_report[".printFields"][] = "Id";
$tdatafuelmaster_report[".printFields"][] = "SystemDate";
$tdatafuelmaster_report[".printFields"][] = "Fleet";
$tdatafuelmaster_report[".printFields"][] = "FuelDate";
$tdatafuelmaster_report[".printFields"][] = "Vehicle";
$tdatafuelmaster_report[".printFields"][] = "FuelStation";
$tdatafuelmaster_report[".printFields"][] = "MeterReading";
$tdatafuelmaster_report[".printFields"][] = "LitersPumped";
$tdatafuelmaster_report[".printFields"][] = "PricePerLiter";
$tdatafuelmaster_report[".printFields"][] = "Cost";
$tdatafuelmaster_report[".printFields"][] = "LastMileage";
$tdatafuelmaster_report[".printFields"][] = "Economy";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_report","Id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
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
	
	
	
	

	

	
	$tdatafuelmaster_report["Id"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_report","SystemDate"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings	

	

	
	$tdatafuelmaster_report["SystemDate"] = $fdata;
//	FuelDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FuelDate";
	$fdata["GoodName"] = "FuelDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_report","FuelDate"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
		$fdata["defaultSearchOption"] = "Between";
	
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings	

	

	
	$tdatafuelmaster_report["FuelDate"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_report","Vehicle"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "vehiclemaster-view";
	$edata["LookupConnId"] = "carrier_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"LastMileage", 'lookupF'=>"MeterReading");
	$edata["LCType"] = 0;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "RegNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RegNo";
	
		
	$edata["LookupOrderBy"] = "RegNo";
	
		
		$edata["UseCategory"] = true; 
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Fleet", "lookup" => "Fleet" );
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings	

	

	
	$tdatafuelmaster_report["Vehicle"] = $fdata;
//	MeterReading
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MeterReading";
	$fdata["GoodName"] = "MeterReading";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_report","MeterReading"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings	

	

	
	$tdatafuelmaster_report["MeterReading"] = $fdata;
//	LitersPumped
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LitersPumped";
	$fdata["GoodName"] = "LitersPumped";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_report","LitersPumped"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings	

	

	
	$tdatafuelmaster_report["LitersPumped"] = $fdata;
//	PricePerLiter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PricePerLiter";
	$fdata["GoodName"] = "PricePerLiter";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_report","PricePerLiter"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings	

	

	
	$tdatafuelmaster_report["PricePerLiter"] = $fdata;
//	FuelStation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FuelStation";
	$fdata["GoodName"] = "FuelStation";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_report","FuelStation"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings	

	

	
	$tdatafuelmaster_report["FuelStation"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_report","Fleet"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings	

	

	
	$tdatafuelmaster_report["Fleet"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("fuelmaster_report","Cost"); 
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings	

	

	
	$tdatafuelmaster_report["Cost"] = $fdata;
//	LastMileage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LastMileage";
	$fdata["GoodName"] = "LastMileage";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_report","LastMileage"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings	

	

	
	$tdatafuelmaster_report["LastMileage"] = $fdata;
//	Economy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Economy";
	$fdata["GoodName"] = "Economy";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("fuelmaster_report","Economy"); 
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings	

	

	
	$tdatafuelmaster_report["Economy"] = $fdata;

	
$tables_data["fuelmaster-report"]=&$tdatafuelmaster_report;
$field_labels["fuelmaster_report"] = &$fieldLabelsfuelmaster_report;
$fieldToolTips["fuelmaster-report"] = &$fieldToolTipsfuelmaster_report;
$page_titles["fuelmaster_report"] = &$pageTitlesfuelmaster_report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["fuelmaster-report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["fuelmaster-report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_fuelmaster_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  SystemDate,  FuelDate,  Vehicle,  MeterReading,  LitersPumped,  PricePerLiter,  FuelStation,  Fleet,  LitersPumped*PricePerLiter AS Cost,  LastMileage,  (MeterReading-LastMileage)/LitersPumped AS Economy";
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
	"m_srcTableName" => "fuelmaster-report"
));

$proto5["m_sql"] = "Id";
$proto5["m_srcTableName"] = "fuelmaster-report";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-report"
));

$proto7["m_sql"] = "SystemDate";
$proto7["m_srcTableName"] = "fuelmaster-report";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-report"
));

$proto9["m_sql"] = "FuelDate";
$proto9["m_srcTableName"] = "fuelmaster-report";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-report"
));

$proto11["m_sql"] = "Vehicle";
$proto11["m_srcTableName"] = "fuelmaster-report";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "MeterReading",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-report"
));

$proto13["m_sql"] = "MeterReading";
$proto13["m_srcTableName"] = "fuelmaster-report";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "LitersPumped",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-report"
));

$proto15["m_sql"] = "LitersPumped";
$proto15["m_srcTableName"] = "fuelmaster-report";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "PricePerLiter",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-report"
));

$proto17["m_sql"] = "PricePerLiter";
$proto17["m_srcTableName"] = "fuelmaster-report";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelStation",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-report"
));

$proto19["m_sql"] = "FuelStation";
$proto19["m_srcTableName"] = "fuelmaster-report";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-report"
));

$proto21["m_sql"] = "Fleet";
$proto21["m_srcTableName"] = "fuelmaster-report";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "LitersPumped*PricePerLiter"
));

$proto23["m_sql"] = "LitersPumped*PricePerLiter";
$proto23["m_srcTableName"] = "fuelmaster-report";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "Cost";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "LastMileage",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-report"
));

$proto25["m_sql"] = "LastMileage";
$proto25["m_srcTableName"] = "fuelmaster-report";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(MeterReading-LastMileage)/LitersPumped"
));

$proto27["m_sql"] = "(MeterReading-LastMileage)/LitersPumped";
$proto27["m_srcTableName"] = "fuelmaster-report";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "Economy";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "fuelmaster";
$proto30["m_srcTableName"] = "fuelmaster-report";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "Id";
$proto30["m_columns"][] = "SystemDate";
$proto30["m_columns"][] = "FuelDate";
$proto30["m_columns"][] = "Vehicle";
$proto30["m_columns"][] = "MeterReading";
$proto30["m_columns"][] = "LitersPumped";
$proto30["m_columns"][] = "PricePerLiter";
$proto30["m_columns"][] = "FuelStation";
$proto30["m_columns"][] = "Fleet";
$proto30["m_columns"][] = "LastMileage";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "fuelmaster";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "fuelmaster-report";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="fuelmaster-report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fuelmaster_report = createSqlQuery_fuelmaster_report();


	
												
	
$tdatafuelmaster_report[".sqlquery"] = $queryData_fuelmaster_report;

$tableEvents["fuelmaster-report"] = new eventsBase;
$tdatafuelmaster_report[".hasEvents"] = false;

?>