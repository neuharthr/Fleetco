<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafuelmaster = array();
	$tdatafuelmaster[".truncateText"] = true;
	$tdatafuelmaster[".NumberOfChars"] = 80;
	$tdatafuelmaster[".ShortName"] = "fuelmaster";
	$tdatafuelmaster[".OwnerID"] = "";
	$tdatafuelmaster[".OriginalTable"] = "fuelmaster";

//	field labels
$fieldLabelsfuelmaster = array();
$fieldToolTipsfuelmaster = array();
$pageTitlesfuelmaster = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfuelmaster["English"] = array();
	$fieldToolTipsfuelmaster["English"] = array();
	$pageTitlesfuelmaster["English"] = array();
	$fieldLabelsfuelmaster["English"]["Id"] = "ID";
	$fieldToolTipsfuelmaster["English"]["Id"] = "";
	$fieldLabelsfuelmaster["English"]["SystemDate"] = "Sys. Date";
	$fieldToolTipsfuelmaster["English"]["SystemDate"] = "";
	$fieldLabelsfuelmaster["English"]["FuelDate"] = "Fuel Date";
	$fieldToolTipsfuelmaster["English"]["FuelDate"] = "";
	$fieldLabelsfuelmaster["English"]["Vehicle"] = "Vehicle";
	$fieldToolTipsfuelmaster["English"]["Vehicle"] = "";
	$fieldLabelsfuelmaster["English"]["MeterReading"] = "Mtr.Read.";
	$fieldToolTipsfuelmaster["English"]["MeterReading"] = "";
	$fieldLabelsfuelmaster["English"]["LitersPumped"] = "Ltr.Pump.";
	$fieldToolTipsfuelmaster["English"]["LitersPumped"] = "";
	$fieldLabelsfuelmaster["English"]["PricePerLiter"] = "Ltr.Price";
	$fieldToolTipsfuelmaster["English"]["PricePerLiter"] = "";
	$fieldLabelsfuelmaster["English"]["FuelStation"] = "Fuel Stat.";
	$fieldToolTipsfuelmaster["English"]["FuelStation"] = "";
	$fieldLabelsfuelmaster["English"]["Fleet"] = "Fleet";
	$fieldToolTipsfuelmaster["English"]["Fleet"] = "";
	$fieldLabelsfuelmaster["English"]["Cost"] = "Cost";
	$fieldToolTipsfuelmaster["English"]["Cost"] = "Cost without Tax";
	$fieldLabelsfuelmaster["English"]["LastMileage"] = "Last Milea.";
	$fieldToolTipsfuelmaster["English"]["LastMileage"] = "";
	$fieldLabelsfuelmaster["English"]["Economy"] = "Economy";
	$fieldToolTipsfuelmaster["English"]["Economy"] = "";
	$fieldLabelsfuelmaster["English"]["FillType"] = "Fill Type";
	$fieldToolTipsfuelmaster["English"]["FillType"] = "";
	$fieldLabelsfuelmaster["English"]["CouponNo"] = "Coupon";
	$fieldToolTipsfuelmaster["English"]["CouponNo"] = "Fuel coupon no., etc. if any";
	$fieldLabelsfuelmaster["English"]["Driver"] = "Driver";
	$fieldToolTipsfuelmaster["English"]["Driver"] = "";
	if (count($fieldToolTipsfuelmaster["English"]))
		$tdatafuelmaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfuelmaster[""] = array();
	$fieldToolTipsfuelmaster[""] = array();
	$pageTitlesfuelmaster[""] = array();
	if (count($fieldToolTipsfuelmaster[""]))
		$tdatafuelmaster[".isUseToolTips"] = true;
}


	$tdatafuelmaster[".NCSearch"] = true;



$tdatafuelmaster[".shortTableName"] = "fuelmaster";
$tdatafuelmaster[".nSecOptions"] = 0;
$tdatafuelmaster[".recsPerRowPrint"] = 1;
$tdatafuelmaster[".mainTableOwnerID"] = "";
$tdatafuelmaster[".moveNext"] = 1;
$tdatafuelmaster[".entityType"] = 0;

$tdatafuelmaster[".strOriginalTableName"] = "fuelmaster";

		 



$tdatafuelmaster[".showAddInPopup"] = false;

$tdatafuelmaster[".showEditInPopup"] = false;

$tdatafuelmaster[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafuelmaster[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafuelmaster[".fieldsForRegister"] = array();

	$tdatafuelmaster[".listAjax"] = true;

	$tdatafuelmaster[".audit"] = false;

	$tdatafuelmaster[".locking"] = false;

$tdatafuelmaster[".edit"] = true;
$tdatafuelmaster[".afterEditAction"] = 1;
$tdatafuelmaster[".closePopupAfterEdit"] = 1;
$tdatafuelmaster[".afterEditActionDetTable"] = "";

$tdatafuelmaster[".add"] = true;
$tdatafuelmaster[".afterAddAction"] = 1;
$tdatafuelmaster[".closePopupAfterAdd"] = 1;
$tdatafuelmaster[".afterAddActionDetTable"] = "Detail tables not found!";

$tdatafuelmaster[".list"] = true;

$tdatafuelmaster[".view"] = true;

$tdatafuelmaster[".import"] = true;

$tdatafuelmaster[".exportTo"] = true;

$tdatafuelmaster[".printFriendly"] = true;

$tdatafuelmaster[".delete"] = true;

$tdatafuelmaster[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafuelmaster[".searchSaving"] = false;
//

$tdatafuelmaster[".showSearchPanel"] = true;
		$tdatafuelmaster[".flexibleSearch"] = true;

$tdatafuelmaster[".isUseAjaxSuggest"] = true;

$tdatafuelmaster[".rowHighlite"] = true;



$tdatafuelmaster[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafuelmaster[".isUseTimeForSearch"] = false;





$tdatafuelmaster[".allSearchFields"] = array();
$tdatafuelmaster[".filterFields"] = array();
$tdatafuelmaster[".requiredSearchFields"] = array();

$tdatafuelmaster[".allSearchFields"][] = "Id";
	$tdatafuelmaster[".allSearchFields"][] = "SystemDate";
	$tdatafuelmaster[".allSearchFields"][] = "Fleet";
	$tdatafuelmaster[".allSearchFields"][] = "FuelDate";
	$tdatafuelmaster[".allSearchFields"][] = "Vehicle";
	$tdatafuelmaster[".allSearchFields"][] = "Driver";
	$tdatafuelmaster[".allSearchFields"][] = "CouponNo";
	$tdatafuelmaster[".allSearchFields"][] = "FuelStation";
	$tdatafuelmaster[".allSearchFields"][] = "MeterReading";
	$tdatafuelmaster[".allSearchFields"][] = "LitersPumped";
	$tdatafuelmaster[".allSearchFields"][] = "FillType";
	$tdatafuelmaster[".allSearchFields"][] = "PricePerLiter";
	$tdatafuelmaster[".allSearchFields"][] = "Cost";
	$tdatafuelmaster[".allSearchFields"][] = "LastMileage";
	$tdatafuelmaster[".allSearchFields"][] = "Economy";
	

$tdatafuelmaster[".googleLikeFields"] = array();
$tdatafuelmaster[".googleLikeFields"][] = "Id";
$tdatafuelmaster[".googleLikeFields"][] = "SystemDate";
$tdatafuelmaster[".googleLikeFields"][] = "FuelDate";
$tdatafuelmaster[".googleLikeFields"][] = "Vehicle";
$tdatafuelmaster[".googleLikeFields"][] = "MeterReading";
$tdatafuelmaster[".googleLikeFields"][] = "LitersPumped";
$tdatafuelmaster[".googleLikeFields"][] = "PricePerLiter";
$tdatafuelmaster[".googleLikeFields"][] = "FuelStation";
$tdatafuelmaster[".googleLikeFields"][] = "Fleet";
$tdatafuelmaster[".googleLikeFields"][] = "Cost";
$tdatafuelmaster[".googleLikeFields"][] = "LastMileage";
$tdatafuelmaster[".googleLikeFields"][] = "Economy";
$tdatafuelmaster[".googleLikeFields"][] = "FillType";
$tdatafuelmaster[".googleLikeFields"][] = "CouponNo";
$tdatafuelmaster[".googleLikeFields"][] = "Driver";


$tdatafuelmaster[".advSearchFields"] = array();
$tdatafuelmaster[".advSearchFields"][] = "Id";
$tdatafuelmaster[".advSearchFields"][] = "SystemDate";
$tdatafuelmaster[".advSearchFields"][] = "Fleet";
$tdatafuelmaster[".advSearchFields"][] = "FuelDate";
$tdatafuelmaster[".advSearchFields"][] = "Vehicle";
$tdatafuelmaster[".advSearchFields"][] = "Driver";
$tdatafuelmaster[".advSearchFields"][] = "CouponNo";
$tdatafuelmaster[".advSearchFields"][] = "FuelStation";
$tdatafuelmaster[".advSearchFields"][] = "MeterReading";
$tdatafuelmaster[".advSearchFields"][] = "LitersPumped";
$tdatafuelmaster[".advSearchFields"][] = "FillType";
$tdatafuelmaster[".advSearchFields"][] = "PricePerLiter";
$tdatafuelmaster[".advSearchFields"][] = "Cost";
$tdatafuelmaster[".advSearchFields"][] = "LastMileage";
$tdatafuelmaster[".advSearchFields"][] = "Economy";

$tdatafuelmaster[".tableType"] = "list";

$tdatafuelmaster[".printerPageOrientation"] = 0;
$tdatafuelmaster[".nPrinterPageScale"] = 100;

$tdatafuelmaster[".nPrinterSplitRecords"] = 40;

$tdatafuelmaster[".nPrinterPDFSplitRecords"] = 40;



$tdatafuelmaster[".geocodingEnabled"] = false;





$tdatafuelmaster[".listGridLayout"] = 3;





// view page pdf
$tdatafuelmaster[".isViewPagePDF"] = true;
$tdatafuelmaster[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatafuelmaster[".isPrinterPagePDF"] = true;
$tdatafuelmaster[".nPrinterPagePDFScale"] = 100;

$tdatafuelmaster[".totalsFields"] = array();
$tdatafuelmaster[".totalsFields"][] = array(
	"fName" => "LitersPumped",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatafuelmaster[".totalsFields"][] = array(
	"fName" => "Cost",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatafuelmaster[".totalsFields"][] = array(
	"fName" => "Economy",
	"numRows" => 0,
	"totalsType" => "AVERAGE",
	"viewFormat" => 'Number');

$tdatafuelmaster[".pageSize"] = 20;

$tdatafuelmaster[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafuelmaster[".strOrderBy"] = $tstrOrderBy;

$tdatafuelmaster[".orderindexes"] = array();

$tdatafuelmaster[".sqlHead"] = "SELECT Id,  SystemDate,  FuelDate,  Vehicle,  MeterReading,  LitersPumped,  PricePerLiter,  FuelStation,  Fleet,  LitersPumped*PricePerLiter AS Cost,  LastMileage,  Economy,  FillType,  CouponNo,  Driver";
$tdatafuelmaster[".sqlFrom"] = "FROM fuelmaster";
$tdatafuelmaster[".sqlWhereExpr"] = "";
$tdatafuelmaster[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatafuelmaster[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafuelmaster[".arrGroupsPerPage"] = $arrGPP;

$tdatafuelmaster[".highlightSearchResults"] = true;

$tableKeysfuelmaster = array();
$tableKeysfuelmaster[] = "Id";
$tdatafuelmaster[".Keys"] = $tableKeysfuelmaster;

$tdatafuelmaster[".listFields"] = array();
$tdatafuelmaster[".listFields"][] = "Id";
$tdatafuelmaster[".listFields"][] = "FuelDate";
$tdatafuelmaster[".listFields"][] = "Fleet";
$tdatafuelmaster[".listFields"][] = "Vehicle";
$tdatafuelmaster[".listFields"][] = "CouponNo";
$tdatafuelmaster[".listFields"][] = "Driver";
$tdatafuelmaster[".listFields"][] = "FuelStation";
$tdatafuelmaster[".listFields"][] = "MeterReading";
$tdatafuelmaster[".listFields"][] = "LitersPumped";
$tdatafuelmaster[".listFields"][] = "FillType";
$tdatafuelmaster[".listFields"][] = "PricePerLiter";
$tdatafuelmaster[".listFields"][] = "Cost";
$tdatafuelmaster[".listFields"][] = "LastMileage";
$tdatafuelmaster[".listFields"][] = "Economy";

$tdatafuelmaster[".hideMobileList"] = array();


$tdatafuelmaster[".viewFields"] = array();
$tdatafuelmaster[".viewFields"][] = "Id";
$tdatafuelmaster[".viewFields"][] = "SystemDate";
$tdatafuelmaster[".viewFields"][] = "Fleet";
$tdatafuelmaster[".viewFields"][] = "FuelDate";
$tdatafuelmaster[".viewFields"][] = "Vehicle";
$tdatafuelmaster[".viewFields"][] = "Driver";
$tdatafuelmaster[".viewFields"][] = "CouponNo";
$tdatafuelmaster[".viewFields"][] = "FuelStation";
$tdatafuelmaster[".viewFields"][] = "MeterReading";
$tdatafuelmaster[".viewFields"][] = "LitersPumped";
$tdatafuelmaster[".viewFields"][] = "FillType";
$tdatafuelmaster[".viewFields"][] = "PricePerLiter";
$tdatafuelmaster[".viewFields"][] = "Cost";
$tdatafuelmaster[".viewFields"][] = "LastMileage";
$tdatafuelmaster[".viewFields"][] = "Economy";

$tdatafuelmaster[".addFields"] = array();
$tdatafuelmaster[".addFields"][] = "Fleet";
$tdatafuelmaster[".addFields"][] = "Vehicle";
$tdatafuelmaster[".addFields"][] = "CouponNo";
$tdatafuelmaster[".addFields"][] = "FuelDate";
$tdatafuelmaster[".addFields"][] = "FuelStation";
$tdatafuelmaster[".addFields"][] = "MeterReading";
$tdatafuelmaster[".addFields"][] = "LitersPumped";
$tdatafuelmaster[".addFields"][] = "PricePerLiter";
$tdatafuelmaster[".addFields"][] = "FillType";
$tdatafuelmaster[".addFields"][] = "LastMileage";
$tdatafuelmaster[".addFields"][] = "Driver";
$tdatafuelmaster[".addFields"][] = "SystemDate";
$tdatafuelmaster[".addFields"][] = "Economy";

$tdatafuelmaster[".masterListFields"] = array();
$tdatafuelmaster[".masterListFields"][] = "CouponNo";
$tdatafuelmaster[".masterListFields"][] = "FillType";
$tdatafuelmaster[".masterListFields"][] = "Driver";
$tdatafuelmaster[".masterListFields"][] = "Id";
$tdatafuelmaster[".masterListFields"][] = "SystemDate";
$tdatafuelmaster[".masterListFields"][] = "Fleet";
$tdatafuelmaster[".masterListFields"][] = "FuelDate";
$tdatafuelmaster[".masterListFields"][] = "Vehicle";
$tdatafuelmaster[".masterListFields"][] = "FuelStation";
$tdatafuelmaster[".masterListFields"][] = "MeterReading";
$tdatafuelmaster[".masterListFields"][] = "LitersPumped";
$tdatafuelmaster[".masterListFields"][] = "PricePerLiter";
$tdatafuelmaster[".masterListFields"][] = "Cost";
$tdatafuelmaster[".masterListFields"][] = "LastMileage";
$tdatafuelmaster[".masterListFields"][] = "Economy";

$tdatafuelmaster[".inlineAddFields"] = array();

$tdatafuelmaster[".editFields"] = array();
$tdatafuelmaster[".editFields"][] = "SystemDate";
$tdatafuelmaster[".editFields"][] = "Fleet";
$tdatafuelmaster[".editFields"][] = "FuelDate";
$tdatafuelmaster[".editFields"][] = "Vehicle";
$tdatafuelmaster[".editFields"][] = "Driver";
$tdatafuelmaster[".editFields"][] = "CouponNo";
$tdatafuelmaster[".editFields"][] = "FuelStation";
$tdatafuelmaster[".editFields"][] = "MeterReading";
$tdatafuelmaster[".editFields"][] = "LitersPumped";
$tdatafuelmaster[".editFields"][] = "FillType";
$tdatafuelmaster[".editFields"][] = "PricePerLiter";
$tdatafuelmaster[".editFields"][] = "LastMileage";
$tdatafuelmaster[".editFields"][] = "Economy";

$tdatafuelmaster[".inlineEditFields"] = array();

$tdatafuelmaster[".exportFields"] = array();
$tdatafuelmaster[".exportFields"][] = "Id";
$tdatafuelmaster[".exportFields"][] = "SystemDate";
$tdatafuelmaster[".exportFields"][] = "Fleet";
$tdatafuelmaster[".exportFields"][] = "FuelDate";
$tdatafuelmaster[".exportFields"][] = "Vehicle";
$tdatafuelmaster[".exportFields"][] = "Driver";
$tdatafuelmaster[".exportFields"][] = "CouponNo";
$tdatafuelmaster[".exportFields"][] = "FuelStation";
$tdatafuelmaster[".exportFields"][] = "MeterReading";
$tdatafuelmaster[".exportFields"][] = "LitersPumped";
$tdatafuelmaster[".exportFields"][] = "FillType";
$tdatafuelmaster[".exportFields"][] = "PricePerLiter";
$tdatafuelmaster[".exportFields"][] = "Cost";
$tdatafuelmaster[".exportFields"][] = "LastMileage";
$tdatafuelmaster[".exportFields"][] = "Economy";

$tdatafuelmaster[".importFields"] = array();
$tdatafuelmaster[".importFields"][] = "Id";
$tdatafuelmaster[".importFields"][] = "SystemDate";
$tdatafuelmaster[".importFields"][] = "FuelDate";
$tdatafuelmaster[".importFields"][] = "Vehicle";
$tdatafuelmaster[".importFields"][] = "MeterReading";
$tdatafuelmaster[".importFields"][] = "LitersPumped";
$tdatafuelmaster[".importFields"][] = "PricePerLiter";
$tdatafuelmaster[".importFields"][] = "FuelStation";
$tdatafuelmaster[".importFields"][] = "Fleet";
$tdatafuelmaster[".importFields"][] = "Cost";
$tdatafuelmaster[".importFields"][] = "LastMileage";
$tdatafuelmaster[".importFields"][] = "Economy";
$tdatafuelmaster[".importFields"][] = "FillType";
$tdatafuelmaster[".importFields"][] = "CouponNo";
$tdatafuelmaster[".importFields"][] = "Driver";

$tdatafuelmaster[".printFields"] = array();
$tdatafuelmaster[".printFields"][] = "Id";
$tdatafuelmaster[".printFields"][] = "SystemDate";
$tdatafuelmaster[".printFields"][] = "Fleet";
$tdatafuelmaster[".printFields"][] = "FuelDate";
$tdatafuelmaster[".printFields"][] = "Vehicle";
$tdatafuelmaster[".printFields"][] = "Driver";
$tdatafuelmaster[".printFields"][] = "CouponNo";
$tdatafuelmaster[".printFields"][] = "FuelStation";
$tdatafuelmaster[".printFields"][] = "MeterReading";
$tdatafuelmaster[".printFields"][] = "LitersPumped";
$tdatafuelmaster[".printFields"][] = "FillType";
$tdatafuelmaster[".printFields"][] = "PricePerLiter";
$tdatafuelmaster[".printFields"][] = "Cost";
$tdatafuelmaster[".printFields"][] = "LastMileage";
$tdatafuelmaster[".printFields"][] = "Economy";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","Id");
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




	$tdatafuelmaster["Id"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","SystemDate");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["SystemDate"] = $fdata;
//	FuelDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FuelDate";
	$fdata["GoodName"] = "FuelDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","FuelDate");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["FuelDate"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","Vehicle");
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["Vehicle"] = $fdata;
//	MeterReading
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MeterReading";
	$fdata["GoodName"] = "MeterReading";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","MeterReading");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
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

		$edata["controlWidth"] = 100;

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




	$tdatafuelmaster["MeterReading"] = $fdata;
//	LitersPumped
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LitersPumped";
	$fdata["GoodName"] = "LitersPumped";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","LitersPumped");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
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

		$edata["controlWidth"] = 100;

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




	$tdatafuelmaster["LitersPumped"] = $fdata;
//	PricePerLiter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PricePerLiter";
	$fdata["GoodName"] = "PricePerLiter";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","PricePerLiter");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["PricePerLiter"] = $fdata;
//	FuelStation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FuelStation";
	$fdata["GoodName"] = "FuelStation";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","FuelStation");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["FuelStation"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","Fleet");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["Fleet"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("fuelmaster","Cost");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["Cost"] = $fdata;
//	LastMileage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LastMileage";
	$fdata["GoodName"] = "LastMileage";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","LastMileage");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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

		$edata["controlWidth"] = 100;

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




	$tdatafuelmaster["LastMileage"] = $fdata;
//	Economy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Economy";
	$fdata["GoodName"] = "Economy";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","Economy");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Economy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Economy";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["Economy"] = $fdata;
//	FillType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "FillType";
	$fdata["GoodName"] = "FillType";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","FillType");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FillType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FillType";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Full Tank";
	$edata["LookupValues"][] = "Partial Fill";
	$edata["LookupValues"][] = "Full After Partial";
	$edata["LookupValues"][] = "Other";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["FillType"] = $fdata;
//	CouponNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "CouponNo";
	$fdata["GoodName"] = "CouponNo";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","CouponNo");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CouponNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CouponNo";

	
	
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

		$edata["controlWidth"] = 100;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["CouponNo"] = $fdata;
//	Driver
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Driver";
	$fdata["GoodName"] = "Driver";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","Driver");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["Driver"] = $fdata;


$tables_data["fuelmaster"]=&$tdatafuelmaster;
$field_labels["fuelmaster"] = &$fieldLabelsfuelmaster;
$fieldToolTips["fuelmaster"] = &$fieldToolTipsfuelmaster;
$page_titles["fuelmaster"] = &$pageTitlesfuelmaster;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["fuelmaster"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["fuelmaster"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_fuelmaster()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  SystemDate,  FuelDate,  Vehicle,  MeterReading,  LitersPumped,  PricePerLiter,  FuelStation,  Fleet,  LitersPumped*PricePerLiter AS Cost,  LastMileage,  Economy,  FillType,  CouponNo,  Driver";
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
	"m_strName" => "Id",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "fuelmaster";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto8["m_sql"] = "SystemDate";
$proto8["m_srcTableName"] = "fuelmaster";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto10["m_sql"] = "FuelDate";
$proto10["m_srcTableName"] = "fuelmaster";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto12["m_sql"] = "Vehicle";
$proto12["m_srcTableName"] = "fuelmaster";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MeterReading",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto14["m_sql"] = "MeterReading";
$proto14["m_srcTableName"] = "fuelmaster";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LitersPumped",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto16["m_sql"] = "LitersPumped";
$proto16["m_srcTableName"] = "fuelmaster";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PricePerLiter",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto18["m_sql"] = "PricePerLiter";
$proto18["m_srcTableName"] = "fuelmaster";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelStation",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto20["m_sql"] = "FuelStation";
$proto20["m_srcTableName"] = "fuelmaster";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto22["m_sql"] = "Fleet";
$proto22["m_srcTableName"] = "fuelmaster";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "LitersPumped*PricePerLiter"
));

$proto24["m_sql"] = "LitersPumped*PricePerLiter";
$proto24["m_srcTableName"] = "fuelmaster";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "Cost";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "LastMileage",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto26["m_sql"] = "LastMileage";
$proto26["m_srcTableName"] = "fuelmaster";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Economy",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto28["m_sql"] = "Economy";
$proto28["m_srcTableName"] = "fuelmaster";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "FillType",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto30["m_sql"] = "FillType";
$proto30["m_srcTableName"] = "fuelmaster";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "CouponNo",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto32["m_sql"] = "CouponNo";
$proto32["m_srcTableName"] = "fuelmaster";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Driver",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto34["m_sql"] = "Driver";
$proto34["m_srcTableName"] = "fuelmaster";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "fuelmaster";
$proto37["m_srcTableName"] = "fuelmaster";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "Id";
$proto37["m_columns"][] = "SystemDate";
$proto37["m_columns"][] = "FuelDate";
$proto37["m_columns"][] = "Vehicle";
$proto37["m_columns"][] = "MeterReading";
$proto37["m_columns"][] = "LitersPumped";
$proto37["m_columns"][] = "PricePerLiter";
$proto37["m_columns"][] = "FuelStation";
$proto37["m_columns"][] = "Fleet";
$proto37["m_columns"][] = "LastMileage";
$proto37["m_columns"][] = "Economy";
$proto37["m_columns"][] = "FillType";
$proto37["m_columns"][] = "CouponNo";
$proto37["m_columns"][] = "Driver";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "fuelmaster";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "fuelmaster";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="fuelmaster";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fuelmaster = createSqlQuery_fuelmaster();


	
					
;

															

$tdatafuelmaster[".sqlquery"] = $queryData_fuelmaster;

include_once(getabspath("include/fuelmaster_events.php"));
$tableEvents["fuelmaster"] = new eventclass_fuelmaster;
$tdatafuelmaster[".hasEvents"] = true;

?>