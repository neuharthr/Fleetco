<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafuelmaster_reporting = array();	
	$tdatafuelmaster_reporting[".truncateText"] = true;
	$tdatafuelmaster_reporting[".NumberOfChars"] = 80; 
	$tdatafuelmaster_reporting[".ShortName"] = "fuelmaster_reporting";
	$tdatafuelmaster_reporting[".OwnerID"] = "";
	$tdatafuelmaster_reporting[".OriginalTable"] = "fuelmaster";

//	field labels
$fieldLabelsfuelmaster_reporting = array();
$fieldToolTipsfuelmaster_reporting = array();
$pageTitlesfuelmaster_reporting = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfuelmaster_reporting["English"] = array();
	$fieldToolTipsfuelmaster_reporting["English"] = array();
	$pageTitlesfuelmaster_reporting["English"] = array();
	$fieldLabelsfuelmaster_reporting["English"]["Id"] = "ID";
	$fieldToolTipsfuelmaster_reporting["English"]["Id"] = "";
	$fieldLabelsfuelmaster_reporting["English"]["SystemDate"] = "Sys. Date";
	$fieldToolTipsfuelmaster_reporting["English"]["SystemDate"] = "";
	$fieldLabelsfuelmaster_reporting["English"]["FuelDate"] = "Fuel Date";
	$fieldToolTipsfuelmaster_reporting["English"]["FuelDate"] = "";
	$fieldLabelsfuelmaster_reporting["English"]["Vehicle"] = "Vehicle";
	$fieldToolTipsfuelmaster_reporting["English"]["Vehicle"] = "";
	$fieldLabelsfuelmaster_reporting["English"]["MeterReading"] = "Mtr.Reading";
	$fieldToolTipsfuelmaster_reporting["English"]["MeterReading"] = "";
	$fieldLabelsfuelmaster_reporting["English"]["LitersPumped"] = "Ltr.Pumped";
	$fieldToolTipsfuelmaster_reporting["English"]["LitersPumped"] = "";
	$fieldLabelsfuelmaster_reporting["English"]["PricePerLiter"] = "Ltr.Price";
	$fieldToolTipsfuelmaster_reporting["English"]["PricePerLiter"] = "";
	$fieldLabelsfuelmaster_reporting["English"]["FuelStation"] = "Fuel Stat.";
	$fieldToolTipsfuelmaster_reporting["English"]["FuelStation"] = "";
	$fieldLabelsfuelmaster_reporting["English"]["Fleet"] = "Fleet";
	$fieldToolTipsfuelmaster_reporting["English"]["Fleet"] = "";
	$fieldLabelsfuelmaster_reporting["English"]["Cost"] = "Cost";
	$fieldToolTipsfuelmaster_reporting["English"]["Cost"] = "";
	$fieldLabelsfuelmaster_reporting["English"]["LastMileage"] = "Last Mileage";
	$fieldToolTipsfuelmaster_reporting["English"]["LastMileage"] = "";
	$fieldLabelsfuelmaster_reporting["English"]["Economy"] = "Economy";
	$fieldToolTipsfuelmaster_reporting["English"]["Economy"] = "";
	if (count($fieldToolTipsfuelmaster_reporting["English"]))
		$tdatafuelmaster_reporting[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfuelmaster_reporting[""] = array();
	$fieldToolTipsfuelmaster_reporting[""] = array();
	$pageTitlesfuelmaster_reporting[""] = array();
	$fieldLabelsfuelmaster_reporting[""]["Id"] = "Id";
	$fieldToolTipsfuelmaster_reporting[""]["Id"] = "";
	$fieldLabelsfuelmaster_reporting[""]["SystemDate"] = "System Date";
	$fieldToolTipsfuelmaster_reporting[""]["SystemDate"] = "";
	$fieldLabelsfuelmaster_reporting[""]["FuelDate"] = "Fuel Date";
	$fieldToolTipsfuelmaster_reporting[""]["FuelDate"] = "";
	$fieldLabelsfuelmaster_reporting[""]["Vehicle"] = "Vehicle";
	$fieldToolTipsfuelmaster_reporting[""]["Vehicle"] = "";
	$fieldLabelsfuelmaster_reporting[""]["MeterReading"] = "Meter Reading";
	$fieldToolTipsfuelmaster_reporting[""]["MeterReading"] = "";
	$fieldLabelsfuelmaster_reporting[""]["LitersPumped"] = "Liters Pumped";
	$fieldToolTipsfuelmaster_reporting[""]["LitersPumped"] = "";
	$fieldLabelsfuelmaster_reporting[""]["PricePerLiter"] = "Price Per Liter";
	$fieldToolTipsfuelmaster_reporting[""]["PricePerLiter"] = "";
	$fieldLabelsfuelmaster_reporting[""]["FuelStation"] = "Fuel Station";
	$fieldToolTipsfuelmaster_reporting[""]["FuelStation"] = "";
	$fieldLabelsfuelmaster_reporting[""]["Fleet"] = "Fleet";
	$fieldToolTipsfuelmaster_reporting[""]["Fleet"] = "";
	$fieldLabelsfuelmaster_reporting[""]["Cost"] = "Cost";
	$fieldToolTipsfuelmaster_reporting[""]["Cost"] = "";
	$fieldLabelsfuelmaster_reporting[""]["LastMileage"] = "Last Mileage";
	$fieldToolTipsfuelmaster_reporting[""]["LastMileage"] = "";
	$fieldLabelsfuelmaster_reporting[""]["Economy"] = "Economy";
	$fieldToolTipsfuelmaster_reporting[""]["Economy"] = "";
	if (count($fieldToolTipsfuelmaster_reporting[""]))
		$tdatafuelmaster_reporting[".isUseToolTips"] = true;
}
	
	
	$tdatafuelmaster_reporting[".NCSearch"] = true;



$tdatafuelmaster_reporting[".shortTableName"] = "fuelmaster_reporting";
$tdatafuelmaster_reporting[".nSecOptions"] = 0;
$tdatafuelmaster_reporting[".recsPerRowList"] = 1;
$tdatafuelmaster_reporting[".recsPerRowPrint"] = 1;
$tdatafuelmaster_reporting[".mainTableOwnerID"] = "";
$tdatafuelmaster_reporting[".moveNext"] = 1;
$tdatafuelmaster_reporting[".entityType"] = 1;

$tdatafuelmaster_reporting[".strOriginalTableName"] = "fuelmaster";




$tdatafuelmaster_reporting[".showAddInPopup"] = false;

$tdatafuelmaster_reporting[".showEditInPopup"] = false;

$tdatafuelmaster_reporting[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafuelmaster_reporting[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafuelmaster_reporting[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatafuelmaster_reporting[".listAjax"] = true;
else 
	$tdatafuelmaster_reporting[".listAjax"] = false;

	$tdatafuelmaster_reporting[".audit"] = false;

	$tdatafuelmaster_reporting[".locking"] = false;



$tdatafuelmaster_reporting[".list"] = true;

$tdatafuelmaster_reporting[".view"] = true;


$tdatafuelmaster_reporting[".exportTo"] = true;

$tdatafuelmaster_reporting[".printFriendly"] = true;


$tdatafuelmaster_reporting[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdatafuelmaster_reporting[".searchSaving"] = false;
//

$tdatafuelmaster_reporting[".showSearchPanel"] = true;
		$tdatafuelmaster_reporting[".flexibleSearch"] = true;		

if (isMobile())
	$tdatafuelmaster_reporting[".isUseAjaxSuggest"] = false;
else 
	$tdatafuelmaster_reporting[".isUseAjaxSuggest"] = true;

$tdatafuelmaster_reporting[".rowHighlite"] = true;



$tdatafuelmaster_reporting[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafuelmaster_reporting[".isUseTimeForSearch"] = false;





$tdatafuelmaster_reporting[".allSearchFields"] = array();
$tdatafuelmaster_reporting[".filterFields"] = array();
$tdatafuelmaster_reporting[".requiredSearchFields"] = array();

$tdatafuelmaster_reporting[".allSearchFields"][] = "Id";
	$tdatafuelmaster_reporting[".allSearchFields"][] = "SystemDate";
	$tdatafuelmaster_reporting[".allSearchFields"][] = "Fleet";
	$tdatafuelmaster_reporting[".allSearchFields"][] = "FuelDate";
	$tdatafuelmaster_reporting[".allSearchFields"][] = "Vehicle";
	$tdatafuelmaster_reporting[".allSearchFields"][] = "FuelStation";
	$tdatafuelmaster_reporting[".allSearchFields"][] = "MeterReading";
	$tdatafuelmaster_reporting[".allSearchFields"][] = "LitersPumped";
	$tdatafuelmaster_reporting[".allSearchFields"][] = "PricePerLiter";
	$tdatafuelmaster_reporting[".allSearchFields"][] = "Cost";
	$tdatafuelmaster_reporting[".allSearchFields"][] = "LastMileage";
	$tdatafuelmaster_reporting[".allSearchFields"][] = "Economy";
	

$tdatafuelmaster_reporting[".googleLikeFields"] = array();
$tdatafuelmaster_reporting[".googleLikeFields"][] = "Id";
$tdatafuelmaster_reporting[".googleLikeFields"][] = "SystemDate";
$tdatafuelmaster_reporting[".googleLikeFields"][] = "FuelDate";
$tdatafuelmaster_reporting[".googleLikeFields"][] = "Vehicle";
$tdatafuelmaster_reporting[".googleLikeFields"][] = "MeterReading";
$tdatafuelmaster_reporting[".googleLikeFields"][] = "LitersPumped";
$tdatafuelmaster_reporting[".googleLikeFields"][] = "PricePerLiter";
$tdatafuelmaster_reporting[".googleLikeFields"][] = "FuelStation";
$tdatafuelmaster_reporting[".googleLikeFields"][] = "Fleet";
$tdatafuelmaster_reporting[".googleLikeFields"][] = "Cost";
$tdatafuelmaster_reporting[".googleLikeFields"][] = "LastMileage";
$tdatafuelmaster_reporting[".googleLikeFields"][] = "Economy";

$tdatafuelmaster_reporting[".panelSearchFields"] = array();
$tdatafuelmaster_reporting[".searchPanelOptions"] = array();
$tdatafuelmaster_reporting[".panelSearchFields"][] = "FuelDate";
	$tdatafuelmaster_reporting[".panelSearchFields"][] = "Vehicle";
	
$tdatafuelmaster_reporting[".advSearchFields"] = array();
$tdatafuelmaster_reporting[".advSearchFields"][] = "Id";
$tdatafuelmaster_reporting[".advSearchFields"][] = "SystemDate";
$tdatafuelmaster_reporting[".advSearchFields"][] = "Fleet";
$tdatafuelmaster_reporting[".advSearchFields"][] = "FuelDate";
$tdatafuelmaster_reporting[".advSearchFields"][] = "Vehicle";
$tdatafuelmaster_reporting[".advSearchFields"][] = "FuelStation";
$tdatafuelmaster_reporting[".advSearchFields"][] = "MeterReading";
$tdatafuelmaster_reporting[".advSearchFields"][] = "LitersPumped";
$tdatafuelmaster_reporting[".advSearchFields"][] = "PricePerLiter";
$tdatafuelmaster_reporting[".advSearchFields"][] = "Cost";
$tdatafuelmaster_reporting[".advSearchFields"][] = "LastMileage";
$tdatafuelmaster_reporting[".advSearchFields"][] = "Economy";

$tdatafuelmaster_reporting[".tableType"] = "list";

$tdatafuelmaster_reporting[".printerPageOrientation"] = 0;
$tdatafuelmaster_reporting[".nPrinterPageScale"] = 100;

$tdatafuelmaster_reporting[".nPrinterSplitRecords"] = 40;

$tdatafuelmaster_reporting[".nPrinterPDFSplitRecords"] = 40;



$tdatafuelmaster_reporting[".geocodingEnabled"] = false;




	





// view page pdf
$tdatafuelmaster_reporting[".isViewPagePDF"] = true;
$tdatafuelmaster_reporting[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatafuelmaster_reporting[".isPrinterPagePDF"] = true;
$tdatafuelmaster_reporting[".nPrinterPagePDFScale"] = 100;

$tdatafuelmaster_reporting[".totalsFields"] = array();
$tdatafuelmaster_reporting[".totalsFields"][] = array(
	"fName" => "LitersPumped", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatafuelmaster_reporting[".totalsFields"][] = array(
	"fName" => "Cost", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatafuelmaster_reporting[".totalsFields"][] = array(
	"fName" => "Economy", 
	"numRows" => 0,
	"totalsType" => "AVERAGE",
	"viewFormat" => 'Number');

$tdatafuelmaster_reporting[".pageSize"] = 20;

$tdatafuelmaster_reporting[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafuelmaster_reporting[".strOrderBy"] = $tstrOrderBy;

$tdatafuelmaster_reporting[".orderindexes"] = array();

$tdatafuelmaster_reporting[".sqlHead"] = "SELECT Id,  SystemDate,  FuelDate,  Vehicle,  MeterReading,  LitersPumped,  PricePerLiter,  FuelStation,  Fleet,  LitersPumped*PricePerLiter AS Cost,  LastMileage,  (MeterReading-LastMileage)/LitersPumped AS Economy";
$tdatafuelmaster_reporting[".sqlFrom"] = "FROM fuelmaster";
$tdatafuelmaster_reporting[".sqlWhereExpr"] = "";
$tdatafuelmaster_reporting[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatafuelmaster_reporting[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafuelmaster_reporting[".arrGroupsPerPage"] = $arrGPP;

$tdatafuelmaster_reporting[".highlightSearchResults"] = true;

$tableKeysfuelmaster_reporting = array();
$tableKeysfuelmaster_reporting[] = "Id";
$tdatafuelmaster_reporting[".Keys"] = $tableKeysfuelmaster_reporting;

$tdatafuelmaster_reporting[".listFields"] = array();
$tdatafuelmaster_reporting[".listFields"][] = "Id";
$tdatafuelmaster_reporting[".listFields"][] = "FuelDate";
$tdatafuelmaster_reporting[".listFields"][] = "Fleet";
$tdatafuelmaster_reporting[".listFields"][] = "Vehicle";
$tdatafuelmaster_reporting[".listFields"][] = "FuelStation";
$tdatafuelmaster_reporting[".listFields"][] = "MeterReading";
$tdatafuelmaster_reporting[".listFields"][] = "LitersPumped";
$tdatafuelmaster_reporting[".listFields"][] = "PricePerLiter";
$tdatafuelmaster_reporting[".listFields"][] = "Cost";
$tdatafuelmaster_reporting[".listFields"][] = "LastMileage";
$tdatafuelmaster_reporting[".listFields"][] = "Economy";

$tdatafuelmaster_reporting[".hideMobileList"] = array();


$tdatafuelmaster_reporting[".viewFields"] = array();
$tdatafuelmaster_reporting[".viewFields"][] = "Id";
$tdatafuelmaster_reporting[".viewFields"][] = "SystemDate";
$tdatafuelmaster_reporting[".viewFields"][] = "Fleet";
$tdatafuelmaster_reporting[".viewFields"][] = "FuelDate";
$tdatafuelmaster_reporting[".viewFields"][] = "Vehicle";
$tdatafuelmaster_reporting[".viewFields"][] = "FuelStation";
$tdatafuelmaster_reporting[".viewFields"][] = "MeterReading";
$tdatafuelmaster_reporting[".viewFields"][] = "LitersPumped";
$tdatafuelmaster_reporting[".viewFields"][] = "PricePerLiter";
$tdatafuelmaster_reporting[".viewFields"][] = "Cost";
$tdatafuelmaster_reporting[".viewFields"][] = "LastMileage";
$tdatafuelmaster_reporting[".viewFields"][] = "Economy";

$tdatafuelmaster_reporting[".addFields"] = array();

$tdatafuelmaster_reporting[".masterListFields"] = array();
$tdatafuelmaster_reporting[".masterListFields"][] = "Id";
$tdatafuelmaster_reporting[".masterListFields"][] = "SystemDate";
$tdatafuelmaster_reporting[".masterListFields"][] = "Fleet";
$tdatafuelmaster_reporting[".masterListFields"][] = "FuelDate";
$tdatafuelmaster_reporting[".masterListFields"][] = "Vehicle";
$tdatafuelmaster_reporting[".masterListFields"][] = "FuelStation";
$tdatafuelmaster_reporting[".masterListFields"][] = "MeterReading";
$tdatafuelmaster_reporting[".masterListFields"][] = "LitersPumped";
$tdatafuelmaster_reporting[".masterListFields"][] = "PricePerLiter";
$tdatafuelmaster_reporting[".masterListFields"][] = "Cost";
$tdatafuelmaster_reporting[".masterListFields"][] = "LastMileage";
$tdatafuelmaster_reporting[".masterListFields"][] = "Economy";

$tdatafuelmaster_reporting[".inlineAddFields"] = array();

$tdatafuelmaster_reporting[".editFields"] = array();

$tdatafuelmaster_reporting[".inlineEditFields"] = array();

$tdatafuelmaster_reporting[".exportFields"] = array();
$tdatafuelmaster_reporting[".exportFields"][] = "Id";
$tdatafuelmaster_reporting[".exportFields"][] = "SystemDate";
$tdatafuelmaster_reporting[".exportFields"][] = "Fleet";
$tdatafuelmaster_reporting[".exportFields"][] = "FuelDate";
$tdatafuelmaster_reporting[".exportFields"][] = "Vehicle";
$tdatafuelmaster_reporting[".exportFields"][] = "FuelStation";
$tdatafuelmaster_reporting[".exportFields"][] = "MeterReading";
$tdatafuelmaster_reporting[".exportFields"][] = "LitersPumped";
$tdatafuelmaster_reporting[".exportFields"][] = "PricePerLiter";
$tdatafuelmaster_reporting[".exportFields"][] = "Cost";
$tdatafuelmaster_reporting[".exportFields"][] = "LastMileage";
$tdatafuelmaster_reporting[".exportFields"][] = "Economy";

$tdatafuelmaster_reporting[".importFields"] = array();

$tdatafuelmaster_reporting[".printFields"] = array();
$tdatafuelmaster_reporting[".printFields"][] = "Id";
$tdatafuelmaster_reporting[".printFields"][] = "SystemDate";
$tdatafuelmaster_reporting[".printFields"][] = "Fleet";
$tdatafuelmaster_reporting[".printFields"][] = "FuelDate";
$tdatafuelmaster_reporting[".printFields"][] = "Vehicle";
$tdatafuelmaster_reporting[".printFields"][] = "FuelStation";
$tdatafuelmaster_reporting[".printFields"][] = "MeterReading";
$tdatafuelmaster_reporting[".printFields"][] = "LitersPumped";
$tdatafuelmaster_reporting[".printFields"][] = "PricePerLiter";
$tdatafuelmaster_reporting[".printFields"][] = "Cost";
$tdatafuelmaster_reporting[".printFields"][] = "LastMileage";
$tdatafuelmaster_reporting[".printFields"][] = "Economy";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reporting","Id"); 
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

	

	
	$tdatafuelmaster_reporting["Id"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reporting","SystemDate"); 
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafuelmaster_reporting["SystemDate"] = $fdata;
//	FuelDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FuelDate";
	$fdata["GoodName"] = "FuelDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reporting","FuelDate"); 
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings	

	

	
	$tdatafuelmaster_reporting["FuelDate"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reporting","Vehicle"); 
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "vehiclemaster";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"LastMileage", 'lookupF'=>"Last Mileage");
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings	

	

	
	$tdatafuelmaster_reporting["Vehicle"] = $fdata;
//	MeterReading
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MeterReading";
	$fdata["GoodName"] = "MeterReading";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reporting","MeterReading"); 
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafuelmaster_reporting["MeterReading"] = $fdata;
//	LitersPumped
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LitersPumped";
	$fdata["GoodName"] = "LitersPumped";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reporting","LitersPumped"); 
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafuelmaster_reporting["LitersPumped"] = $fdata;
//	PricePerLiter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PricePerLiter";
	$fdata["GoodName"] = "PricePerLiter";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reporting","PricePerLiter"); 
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafuelmaster_reporting["PricePerLiter"] = $fdata;
//	FuelStation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FuelStation";
	$fdata["GoodName"] = "FuelStation";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reporting","FuelStation"); 
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafuelmaster_reporting["FuelStation"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reporting","Fleet"); 
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafuelmaster_reporting["Fleet"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reporting","Cost"); 
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

	

	
	$tdatafuelmaster_reporting["Cost"] = $fdata;
//	LastMileage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LastMileage";
	$fdata["GoodName"] = "LastMileage";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reporting","LastMileage"); 
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafuelmaster_reporting["LastMileage"] = $fdata;
//	Economy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Economy";
	$fdata["GoodName"] = "Economy";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("fuelmaster_reporting","Economy"); 
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

	

	
	$tdatafuelmaster_reporting["Economy"] = $fdata;

	
$tables_data["fuelmaster-reporting"]=&$tdatafuelmaster_reporting;
$field_labels["fuelmaster_reporting"] = &$fieldLabelsfuelmaster_reporting;
$fieldToolTips["fuelmaster-reporting"] = &$fieldToolTipsfuelmaster_reporting;
$page_titles["fuelmaster_reporting"] = &$pageTitlesfuelmaster_reporting;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["fuelmaster-reporting"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["fuelmaster-reporting"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_fuelmaster_reporting()
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
	"m_srcTableName" => "fuelmaster-reporting"
));

$proto5["m_sql"] = "Id";
$proto5["m_srcTableName"] = "fuelmaster-reporting";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-reporting"
));

$proto7["m_sql"] = "SystemDate";
$proto7["m_srcTableName"] = "fuelmaster-reporting";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-reporting"
));

$proto9["m_sql"] = "FuelDate";
$proto9["m_srcTableName"] = "fuelmaster-reporting";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-reporting"
));

$proto11["m_sql"] = "Vehicle";
$proto11["m_srcTableName"] = "fuelmaster-reporting";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "MeterReading",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-reporting"
));

$proto13["m_sql"] = "MeterReading";
$proto13["m_srcTableName"] = "fuelmaster-reporting";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "LitersPumped",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-reporting"
));

$proto15["m_sql"] = "LitersPumped";
$proto15["m_srcTableName"] = "fuelmaster-reporting";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "PricePerLiter",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-reporting"
));

$proto17["m_sql"] = "PricePerLiter";
$proto17["m_srcTableName"] = "fuelmaster-reporting";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelStation",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-reporting"
));

$proto19["m_sql"] = "FuelStation";
$proto19["m_srcTableName"] = "fuelmaster-reporting";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-reporting"
));

$proto21["m_sql"] = "Fleet";
$proto21["m_srcTableName"] = "fuelmaster-reporting";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "LitersPumped*PricePerLiter"
));

$proto23["m_sql"] = "LitersPumped*PricePerLiter";
$proto23["m_srcTableName"] = "fuelmaster-reporting";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "Cost";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "LastMileage",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-reporting"
));

$proto25["m_sql"] = "LastMileage";
$proto25["m_srcTableName"] = "fuelmaster-reporting";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(MeterReading-LastMileage)/LitersPumped"
));

$proto27["m_sql"] = "(MeterReading-LastMileage)/LitersPumped";
$proto27["m_srcTableName"] = "fuelmaster-reporting";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "Economy";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "fuelmaster";
$proto30["m_srcTableName"] = "fuelmaster-reporting";
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
$proto29["m_srcTableName"] = "fuelmaster-reporting";
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
$proto0["m_srcTableName"]="fuelmaster-reporting";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fuelmaster_reporting = createSqlQuery_fuelmaster_reporting();


	
												
	
$tdatafuelmaster_reporting[".sqlquery"] = $queryData_fuelmaster_reporting;

include_once(getabspath("include/fuelmaster_reporting_events.php"));
$tableEvents["fuelmaster-reporting"] = new eventclass_fuelmaster_reporting;
$tdatafuelmaster_reporting[".hasEvents"] = true;

?>