<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafuelmaster_data2 = array();	
	$tdatafuelmaster_data2[".truncateText"] = true;
	$tdatafuelmaster_data2[".NumberOfChars"] = 80; 
	$tdatafuelmaster_data2[".ShortName"] = "fuelmaster_data2";
	$tdatafuelmaster_data2[".OwnerID"] = "";
	$tdatafuelmaster_data2[".OriginalTable"] = "fuelmaster";

//	field labels
$fieldLabelsfuelmaster_data2 = array();
$fieldToolTipsfuelmaster_data2 = array();
$pageTitlesfuelmaster_data2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfuelmaster_data2["English"] = array();
	$fieldToolTipsfuelmaster_data2["English"] = array();
	$pageTitlesfuelmaster_data2["English"] = array();
	if (count($fieldToolTipsfuelmaster_data2["English"]))
		$tdatafuelmaster_data2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfuelmaster_data2[""] = array();
	$fieldToolTipsfuelmaster_data2[""] = array();
	$pageTitlesfuelmaster_data2[""] = array();
	if (count($fieldToolTipsfuelmaster_data2[""]))
		$tdatafuelmaster_data2[".isUseToolTips"] = true;
}
	
	
	$tdatafuelmaster_data2[".NCSearch"] = true;



$tdatafuelmaster_data2[".shortTableName"] = "fuelmaster_data2";
$tdatafuelmaster_data2[".nSecOptions"] = 0;
$tdatafuelmaster_data2[".recsPerRowList"] = 1;
$tdatafuelmaster_data2[".recsPerRowPrint"] = 1;
$tdatafuelmaster_data2[".mainTableOwnerID"] = "";
$tdatafuelmaster_data2[".moveNext"] = 1;
$tdatafuelmaster_data2[".entityType"] = 1;

$tdatafuelmaster_data2[".strOriginalTableName"] = "fuelmaster";




$tdatafuelmaster_data2[".showAddInPopup"] = false;

$tdatafuelmaster_data2[".showEditInPopup"] = false;

$tdatafuelmaster_data2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafuelmaster_data2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafuelmaster_data2[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatafuelmaster_data2[".listAjax"] = true;
else 
	$tdatafuelmaster_data2[".listAjax"] = false;

	$tdatafuelmaster_data2[".audit"] = false;

	$tdatafuelmaster_data2[".locking"] = false;

$tdatafuelmaster_data2[".edit"] = true;
$tdatafuelmaster_data2[".afterEditAction"] = 1;
$tdatafuelmaster_data2[".closePopupAfterEdit"] = 1;
$tdatafuelmaster_data2[".afterEditActionDetTable"] = "";

$tdatafuelmaster_data2[".add"] = true;
$tdatafuelmaster_data2[".afterAddAction"] = 1;
$tdatafuelmaster_data2[".closePopupAfterAdd"] = 1;
$tdatafuelmaster_data2[".afterAddActionDetTable"] = "";

$tdatafuelmaster_data2[".list"] = true;

$tdatafuelmaster_data2[".inlineAdd"] = true;
$tdatafuelmaster_data2[".view"] = true;

$tdatafuelmaster_data2[".import"] = true;

$tdatafuelmaster_data2[".exportTo"] = true;

$tdatafuelmaster_data2[".printFriendly"] = true;

$tdatafuelmaster_data2[".delete"] = true;

$tdatafuelmaster_data2[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafuelmaster_data2[".searchSaving"] = false;
//

$tdatafuelmaster_data2[".showSearchPanel"] = true;
		$tdatafuelmaster_data2[".flexibleSearch"] = true;		

if (isMobile())
	$tdatafuelmaster_data2[".isUseAjaxSuggest"] = false;
else 
	$tdatafuelmaster_data2[".isUseAjaxSuggest"] = true;

$tdatafuelmaster_data2[".rowHighlite"] = true;



$tdatafuelmaster_data2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafuelmaster_data2[".isUseTimeForSearch"] = false;





$tdatafuelmaster_data2[".allSearchFields"] = array();
$tdatafuelmaster_data2[".filterFields"] = array();
$tdatafuelmaster_data2[".requiredSearchFields"] = array();

$tdatafuelmaster_data2[".allSearchFields"][] = "MAX(LastMileage)";
	$tdatafuelmaster_data2[".allSearchFields"][] = "Id";
	$tdatafuelmaster_data2[".allSearchFields"][] = "SystemDate";
	$tdatafuelmaster_data2[".allSearchFields"][] = "Fleet";
	$tdatafuelmaster_data2[".allSearchFields"][] = "FuelDate";
	$tdatafuelmaster_data2[".allSearchFields"][] = "Vehicle";
	$tdatafuelmaster_data2[".allSearchFields"][] = "FuelStation";
	$tdatafuelmaster_data2[".allSearchFields"][] = "LitersPumped";
	$tdatafuelmaster_data2[".allSearchFields"][] = "PricePerLiter";
	$tdatafuelmaster_data2[".allSearchFields"][] = "Cost";
	$tdatafuelmaster_data2[".allSearchFields"][] = "Economy";
	

$tdatafuelmaster_data2[".googleLikeFields"] = array();
$tdatafuelmaster_data2[".googleLikeFields"][] = "Id";
$tdatafuelmaster_data2[".googleLikeFields"][] = "SystemDate";
$tdatafuelmaster_data2[".googleLikeFields"][] = "FuelDate";
$tdatafuelmaster_data2[".googleLikeFields"][] = "Vehicle";
$tdatafuelmaster_data2[".googleLikeFields"][] = "LitersPumped";
$tdatafuelmaster_data2[".googleLikeFields"][] = "PricePerLiter";
$tdatafuelmaster_data2[".googleLikeFields"][] = "FuelStation";
$tdatafuelmaster_data2[".googleLikeFields"][] = "Fleet";
$tdatafuelmaster_data2[".googleLikeFields"][] = "Cost";
$tdatafuelmaster_data2[".googleLikeFields"][] = "MAX(LastMileage)";
$tdatafuelmaster_data2[".googleLikeFields"][] = "Economy";


$tdatafuelmaster_data2[".advSearchFields"] = array();
$tdatafuelmaster_data2[".advSearchFields"][] = "MAX(LastMileage)";
$tdatafuelmaster_data2[".advSearchFields"][] = "Id";
$tdatafuelmaster_data2[".advSearchFields"][] = "SystemDate";
$tdatafuelmaster_data2[".advSearchFields"][] = "Fleet";
$tdatafuelmaster_data2[".advSearchFields"][] = "FuelDate";
$tdatafuelmaster_data2[".advSearchFields"][] = "Vehicle";
$tdatafuelmaster_data2[".advSearchFields"][] = "FuelStation";
$tdatafuelmaster_data2[".advSearchFields"][] = "LitersPumped";
$tdatafuelmaster_data2[".advSearchFields"][] = "PricePerLiter";
$tdatafuelmaster_data2[".advSearchFields"][] = "Cost";
$tdatafuelmaster_data2[".advSearchFields"][] = "Economy";

$tdatafuelmaster_data2[".tableType"] = "list";

$tdatafuelmaster_data2[".printerPageOrientation"] = 0;
$tdatafuelmaster_data2[".nPrinterPageScale"] = 100;

$tdatafuelmaster_data2[".nPrinterSplitRecords"] = 40;

$tdatafuelmaster_data2[".nPrinterPDFSplitRecords"] = 40;



$tdatafuelmaster_data2[".geocodingEnabled"] = false;




	





// view page pdf
$tdatafuelmaster_data2[".isViewPagePDF"] = true;
$tdatafuelmaster_data2[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatafuelmaster_data2[".isPrinterPagePDF"] = true;
$tdatafuelmaster_data2[".nPrinterPagePDFScale"] = 100;

$tdatafuelmaster_data2[".totalsFields"] = array();
$tdatafuelmaster_data2[".totalsFields"][] = array(
	"fName" => "LitersPumped", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatafuelmaster_data2[".totalsFields"][] = array(
	"fName" => "Cost", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatafuelmaster_data2[".totalsFields"][] = array(
	"fName" => "Economy", 
	"numRows" => 0,
	"totalsType" => "AVERAGE",
	"viewFormat" => 'Number');

$tdatafuelmaster_data2[".pageSize"] = 20;

$tdatafuelmaster_data2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafuelmaster_data2[".strOrderBy"] = $tstrOrderBy;

$tdatafuelmaster_data2[".orderindexes"] = array();

$tdatafuelmaster_data2[".sqlHead"] = "SELECT Id,  SystemDate,  FuelDate,  Vehicle,  LitersPumped,  PricePerLiter,  FuelStation,  Fleet,  LitersPumped*PricePerLiter AS Cost,  MAX(LastMileage) AS `MAX(LastMileage)`,  (MeterReading-LastMileage)/LitersPumped AS Economy";
$tdatafuelmaster_data2[".sqlFrom"] = "FROM fuelmaster";
$tdatafuelmaster_data2[".sqlWhereExpr"] = "";
$tdatafuelmaster_data2[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatafuelmaster_data2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafuelmaster_data2[".arrGroupsPerPage"] = $arrGPP;

$tdatafuelmaster_data2[".highlightSearchResults"] = true;

$tableKeysfuelmaster_data2 = array();
$tableKeysfuelmaster_data2[] = "Id";
$tdatafuelmaster_data2[".Keys"] = $tableKeysfuelmaster_data2;

$tdatafuelmaster_data2[".listFields"] = array();
$tdatafuelmaster_data2[".listFields"][] = "MAX(LastMileage)";
$tdatafuelmaster_data2[".listFields"][] = "Id";
$tdatafuelmaster_data2[".listFields"][] = "FuelDate";
$tdatafuelmaster_data2[".listFields"][] = "Fleet";
$tdatafuelmaster_data2[".listFields"][] = "Vehicle";
$tdatafuelmaster_data2[".listFields"][] = "FuelStation";
$tdatafuelmaster_data2[".listFields"][] = "LitersPumped";
$tdatafuelmaster_data2[".listFields"][] = "PricePerLiter";
$tdatafuelmaster_data2[".listFields"][] = "Cost";
$tdatafuelmaster_data2[".listFields"][] = "Economy";

$tdatafuelmaster_data2[".hideMobileList"] = array();


$tdatafuelmaster_data2[".viewFields"] = array();
$tdatafuelmaster_data2[".viewFields"][] = "MAX(LastMileage)";
$tdatafuelmaster_data2[".viewFields"][] = "Id";
$tdatafuelmaster_data2[".viewFields"][] = "SystemDate";
$tdatafuelmaster_data2[".viewFields"][] = "Fleet";
$tdatafuelmaster_data2[".viewFields"][] = "FuelDate";
$tdatafuelmaster_data2[".viewFields"][] = "Vehicle";
$tdatafuelmaster_data2[".viewFields"][] = "FuelStation";
$tdatafuelmaster_data2[".viewFields"][] = "LitersPumped";
$tdatafuelmaster_data2[".viewFields"][] = "PricePerLiter";
$tdatafuelmaster_data2[".viewFields"][] = "Cost";
$tdatafuelmaster_data2[".viewFields"][] = "Economy";

$tdatafuelmaster_data2[".addFields"] = array();
$tdatafuelmaster_data2[".addFields"][] = "SystemDate";
$tdatafuelmaster_data2[".addFields"][] = "Fleet";
$tdatafuelmaster_data2[".addFields"][] = "FuelDate";
$tdatafuelmaster_data2[".addFields"][] = "Vehicle";
$tdatafuelmaster_data2[".addFields"][] = "FuelStation";
$tdatafuelmaster_data2[".addFields"][] = "LitersPumped";
$tdatafuelmaster_data2[".addFields"][] = "PricePerLiter";

$tdatafuelmaster_data2[".masterListFields"] = array();
$tdatafuelmaster_data2[".masterListFields"][] = "MAX(LastMileage)";
$tdatafuelmaster_data2[".masterListFields"][] = "Id";
$tdatafuelmaster_data2[".masterListFields"][] = "SystemDate";
$tdatafuelmaster_data2[".masterListFields"][] = "Fleet";
$tdatafuelmaster_data2[".masterListFields"][] = "FuelDate";
$tdatafuelmaster_data2[".masterListFields"][] = "Vehicle";
$tdatafuelmaster_data2[".masterListFields"][] = "FuelStation";
$tdatafuelmaster_data2[".masterListFields"][] = "LitersPumped";
$tdatafuelmaster_data2[".masterListFields"][] = "PricePerLiter";
$tdatafuelmaster_data2[".masterListFields"][] = "Cost";
$tdatafuelmaster_data2[".masterListFields"][] = "Economy";

$tdatafuelmaster_data2[".inlineAddFields"] = array();
$tdatafuelmaster_data2[".inlineAddFields"][] = "FuelDate";
$tdatafuelmaster_data2[".inlineAddFields"][] = "Fleet";
$tdatafuelmaster_data2[".inlineAddFields"][] = "Vehicle";
$tdatafuelmaster_data2[".inlineAddFields"][] = "FuelStation";
$tdatafuelmaster_data2[".inlineAddFields"][] = "LitersPumped";
$tdatafuelmaster_data2[".inlineAddFields"][] = "PricePerLiter";

$tdatafuelmaster_data2[".editFields"] = array();
$tdatafuelmaster_data2[".editFields"][] = "SystemDate";
$tdatafuelmaster_data2[".editFields"][] = "Fleet";
$tdatafuelmaster_data2[".editFields"][] = "FuelDate";
$tdatafuelmaster_data2[".editFields"][] = "Vehicle";
$tdatafuelmaster_data2[".editFields"][] = "FuelStation";
$tdatafuelmaster_data2[".editFields"][] = "LitersPumped";
$tdatafuelmaster_data2[".editFields"][] = "PricePerLiter";

$tdatafuelmaster_data2[".inlineEditFields"] = array();

$tdatafuelmaster_data2[".exportFields"] = array();
$tdatafuelmaster_data2[".exportFields"][] = "MAX(LastMileage)";
$tdatafuelmaster_data2[".exportFields"][] = "Id";
$tdatafuelmaster_data2[".exportFields"][] = "SystemDate";
$tdatafuelmaster_data2[".exportFields"][] = "Fleet";
$tdatafuelmaster_data2[".exportFields"][] = "FuelDate";
$tdatafuelmaster_data2[".exportFields"][] = "Vehicle";
$tdatafuelmaster_data2[".exportFields"][] = "FuelStation";
$tdatafuelmaster_data2[".exportFields"][] = "LitersPumped";
$tdatafuelmaster_data2[".exportFields"][] = "PricePerLiter";
$tdatafuelmaster_data2[".exportFields"][] = "Cost";
$tdatafuelmaster_data2[".exportFields"][] = "Economy";

$tdatafuelmaster_data2[".importFields"] = array();
$tdatafuelmaster_data2[".importFields"][] = "Id";
$tdatafuelmaster_data2[".importFields"][] = "SystemDate";
$tdatafuelmaster_data2[".importFields"][] = "FuelDate";
$tdatafuelmaster_data2[".importFields"][] = "Vehicle";
$tdatafuelmaster_data2[".importFields"][] = "LitersPumped";
$tdatafuelmaster_data2[".importFields"][] = "PricePerLiter";
$tdatafuelmaster_data2[".importFields"][] = "FuelStation";
$tdatafuelmaster_data2[".importFields"][] = "Fleet";
$tdatafuelmaster_data2[".importFields"][] = "Cost";
$tdatafuelmaster_data2[".importFields"][] = "MAX(LastMileage)";
$tdatafuelmaster_data2[".importFields"][] = "Economy";

$tdatafuelmaster_data2[".printFields"] = array();
$tdatafuelmaster_data2[".printFields"][] = "MAX(LastMileage)";
$tdatafuelmaster_data2[".printFields"][] = "Id";
$tdatafuelmaster_data2[".printFields"][] = "SystemDate";
$tdatafuelmaster_data2[".printFields"][] = "Fleet";
$tdatafuelmaster_data2[".printFields"][] = "FuelDate";
$tdatafuelmaster_data2[".printFields"][] = "Vehicle";
$tdatafuelmaster_data2[".printFields"][] = "FuelStation";
$tdatafuelmaster_data2[".printFields"][] = "LitersPumped";
$tdatafuelmaster_data2[".printFields"][] = "PricePerLiter";
$tdatafuelmaster_data2[".printFields"][] = "Cost";
$tdatafuelmaster_data2[".printFields"][] = "Economy";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data2","Id"); 
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

	

	
	$tdatafuelmaster_data2["Id"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data2","SystemDate"); 
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

	

	
	$tdatafuelmaster_data2["SystemDate"] = $fdata;
//	FuelDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FuelDate";
	$fdata["GoodName"] = "FuelDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data2","FuelDate"); 
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

	

	
	$tdatafuelmaster_data2["FuelDate"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data2","Vehicle"); 
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

	

	
	$tdatafuelmaster_data2["Vehicle"] = $fdata;
//	LitersPumped
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LitersPumped";
	$fdata["GoodName"] = "LitersPumped";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data2","LitersPumped"); 
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

	

	
	$tdatafuelmaster_data2["LitersPumped"] = $fdata;
//	PricePerLiter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PricePerLiter";
	$fdata["GoodName"] = "PricePerLiter";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data2","PricePerLiter"); 
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

	

	
	$tdatafuelmaster_data2["PricePerLiter"] = $fdata;
//	FuelStation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "FuelStation";
	$fdata["GoodName"] = "FuelStation";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data2","FuelStation"); 
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

	

	
	$tdatafuelmaster_data2["FuelStation"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data2","Fleet"); 
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

	

	
	$tdatafuelmaster_data2["Fleet"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data2","Cost"); 
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

	

	
	$tdatafuelmaster_data2["Cost"] = $fdata;
//	MAX(LastMileage)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "MAX(LastMileage)";
	$fdata["GoodName"] = "MAX_LastMileage_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data2","MAX_LastMileage_"); 
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

	

	
	$tdatafuelmaster_data2["MAX(LastMileage)"] = $fdata;
//	Economy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Economy";
	$fdata["GoodName"] = "Economy";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("fuelmaster_data2","Economy"); 
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

	

	
	$tdatafuelmaster_data2["Economy"] = $fdata;

	
$tables_data["fuelmaster-data2"]=&$tdatafuelmaster_data2;
$field_labels["fuelmaster_data2"] = &$fieldLabelsfuelmaster_data2;
$fieldToolTips["fuelmaster-data2"] = &$fieldToolTipsfuelmaster_data2;
$page_titles["fuelmaster_data2"] = &$pageTitlesfuelmaster_data2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["fuelmaster-data2"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["fuelmaster-data2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_fuelmaster_data2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  SystemDate,  FuelDate,  Vehicle,  LitersPumped,  PricePerLiter,  FuelStation,  Fleet,  LitersPumped*PricePerLiter AS Cost,  MAX(LastMileage) AS `MAX(LastMileage)`,  (MeterReading-LastMileage)/LitersPumped AS Economy";
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
	"m_srcTableName" => "fuelmaster-data2"
));

$proto5["m_sql"] = "Id";
$proto5["m_srcTableName"] = "fuelmaster-data2";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data2"
));

$proto7["m_sql"] = "SystemDate";
$proto7["m_srcTableName"] = "fuelmaster-data2";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data2"
));

$proto9["m_sql"] = "FuelDate";
$proto9["m_srcTableName"] = "fuelmaster-data2";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data2"
));

$proto11["m_sql"] = "Vehicle";
$proto11["m_srcTableName"] = "fuelmaster-data2";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "LitersPumped",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data2"
));

$proto13["m_sql"] = "LitersPumped";
$proto13["m_srcTableName"] = "fuelmaster-data2";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "PricePerLiter",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data2"
));

$proto15["m_sql"] = "PricePerLiter";
$proto15["m_srcTableName"] = "fuelmaster-data2";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelStation",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data2"
));

$proto17["m_sql"] = "FuelStation";
$proto17["m_srcTableName"] = "fuelmaster-data2";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data2"
));

$proto19["m_sql"] = "Fleet";
$proto19["m_srcTableName"] = "fuelmaster-data2";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "LitersPumped*PricePerLiter"
));

$proto21["m_sql"] = "LitersPumped*PricePerLiter";
$proto21["m_srcTableName"] = "fuelmaster-data2";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "Cost";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$proto24=array();
$proto24["m_functiontype"] = "SQLF_MAX";
$proto24["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "LastMileage",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data2"
));

$proto24["m_arguments"][]=$obj;
$proto24["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto24);

$proto23["m_sql"] = "MAX(LastMileage)";
$proto23["m_srcTableName"] = "fuelmaster-data2";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "MAX(LastMileage)";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(MeterReading-LastMileage)/LitersPumped"
));

$proto26["m_sql"] = "(MeterReading-LastMileage)/LitersPumped";
$proto26["m_srcTableName"] = "fuelmaster-data2";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "Economy";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "fuelmaster";
$proto29["m_srcTableName"] = "fuelmaster-data2";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "Id";
$proto29["m_columns"][] = "SystemDate";
$proto29["m_columns"][] = "FuelDate";
$proto29["m_columns"][] = "Vehicle";
$proto29["m_columns"][] = "MeterReading";
$proto29["m_columns"][] = "LitersPumped";
$proto29["m_columns"][] = "PricePerLiter";
$proto29["m_columns"][] = "FuelStation";
$proto29["m_columns"][] = "Fleet";
$proto29["m_columns"][] = "LastMileage";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "fuelmaster";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "fuelmaster-data2";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "Id",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data2"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data2"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "FuelDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data2"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data2"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "LitersPumped",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data2"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "PricePerLiter",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data2"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "FuelStation",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data2"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster-data2"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
												$proto48=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "LitersPumped*PricePerLiter"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
												$proto50=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(MeterReading-LastMileage)/LitersPumped"
));

$proto50["m_column"]=$obj;
$obj = new SQLGroupByItem($proto50);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="fuelmaster-data2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fuelmaster_data2 = createSqlQuery_fuelmaster_data2();


	
											
	
$tdatafuelmaster_data2[".sqlquery"] = $queryData_fuelmaster_data2;

$tableEvents["fuelmaster-data2"] = new eventsBase;
$tdatafuelmaster_data2[".hasEvents"] = false;

?>