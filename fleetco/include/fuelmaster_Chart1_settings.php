<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafuelmaster_Chart1 = array();
	$tdatafuelmaster_Chart1[".ShortName"] = "fuelmaster_Chart1";
	$tdatafuelmaster_Chart1[".OwnerID"] = "";
	$tdatafuelmaster_Chart1[".OriginalTable"] = "fuelmaster";

//	field labels
$fieldLabelsfuelmaster_Chart1 = array();
$fieldToolTipsfuelmaster_Chart1 = array();
$pageTitlesfuelmaster_Chart1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfuelmaster_Chart1["English"] = array();
	$fieldToolTipsfuelmaster_Chart1["English"] = array();
	$pageTitlesfuelmaster_Chart1["English"] = array();
	$fieldLabelsfuelmaster_Chart1["English"]["Id"] = "Id";
	$fieldToolTipsfuelmaster_Chart1["English"]["Id"] = "";
	$fieldLabelsfuelmaster_Chart1["English"]["SystemDate"] = "System Date";
	$fieldToolTipsfuelmaster_Chart1["English"]["SystemDate"] = "";
	$fieldLabelsfuelmaster_Chart1["English"]["FuelDate"] = "Fuel Date";
	$fieldToolTipsfuelmaster_Chart1["English"]["FuelDate"] = "";
	$fieldLabelsfuelmaster_Chart1["English"]["Vehicle"] = "Vehicle";
	$fieldToolTipsfuelmaster_Chart1["English"]["Vehicle"] = "";
	$fieldLabelsfuelmaster_Chart1["English"]["MeterReading"] = "Meter Reading";
	$fieldToolTipsfuelmaster_Chart1["English"]["MeterReading"] = "";
	$fieldLabelsfuelmaster_Chart1["English"]["LitersPumped"] = "Liters Pumped";
	$fieldToolTipsfuelmaster_Chart1["English"]["LitersPumped"] = "";
	$fieldLabelsfuelmaster_Chart1["English"]["PricePerLiter"] = "Price Per Liter";
	$fieldToolTipsfuelmaster_Chart1["English"]["PricePerLiter"] = "";
	$fieldLabelsfuelmaster_Chart1["English"]["FuelStation"] = "Fuel Station";
	$fieldToolTipsfuelmaster_Chart1["English"]["FuelStation"] = "";
	$fieldLabelsfuelmaster_Chart1["English"]["Fleet"] = "Fleet";
	$fieldToolTipsfuelmaster_Chart1["English"]["Fleet"] = "";
	$fieldLabelsfuelmaster_Chart1["English"]["LastMileage"] = "Last Mileage";
	$fieldToolTipsfuelmaster_Chart1["English"]["LastMileage"] = "";
	$fieldLabelsfuelmaster_Chart1["English"]["Economy"] = "Economy";
	$fieldToolTipsfuelmaster_Chart1["English"]["Economy"] = "";
	$fieldLabelsfuelmaster_Chart1["English"]["FillType"] = "Fill Type";
	$fieldToolTipsfuelmaster_Chart1["English"]["FillType"] = "";
	$fieldLabelsfuelmaster_Chart1["English"]["CouponNo"] = "Coupon No";
	$fieldToolTipsfuelmaster_Chart1["English"]["CouponNo"] = "";
	$fieldLabelsfuelmaster_Chart1["English"]["Driver"] = "Driver";
	$fieldToolTipsfuelmaster_Chart1["English"]["Driver"] = "";
	if (count($fieldToolTipsfuelmaster_Chart1["English"]))
		$tdatafuelmaster_Chart1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfuelmaster_Chart1[""] = array();
	$fieldToolTipsfuelmaster_Chart1[""] = array();
	$pageTitlesfuelmaster_Chart1[""] = array();
	if (count($fieldToolTipsfuelmaster_Chart1[""]))
		$tdatafuelmaster_Chart1[".isUseToolTips"] = true;
}


	$tdatafuelmaster_Chart1[".NCSearch"] = true;

	$tdatafuelmaster_Chart1[".ChartRefreshTime"] = 0;


$tdatafuelmaster_Chart1[".shortTableName"] = "fuelmaster_Chart1";
$tdatafuelmaster_Chart1[".nSecOptions"] = 0;
$tdatafuelmaster_Chart1[".recsPerRowPrint"] = 1;
$tdatafuelmaster_Chart1[".mainTableOwnerID"] = "";
$tdatafuelmaster_Chart1[".moveNext"] = 1;
$tdatafuelmaster_Chart1[".entityType"] = 3;

$tdatafuelmaster_Chart1[".strOriginalTableName"] = "fuelmaster";

		 



$tdatafuelmaster_Chart1[".showAddInPopup"] = false;

$tdatafuelmaster_Chart1[".showEditInPopup"] = false;

$tdatafuelmaster_Chart1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafuelmaster_Chart1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafuelmaster_Chart1[".fieldsForRegister"] = array();

$tdatafuelmaster_Chart1[".listAjax"] = false;

	$tdatafuelmaster_Chart1[".audit"] = false;

	$tdatafuelmaster_Chart1[".locking"] = false;

$tdatafuelmaster_Chart1[".edit"] = true;
$tdatafuelmaster_Chart1[".afterEditAction"] = 1;
$tdatafuelmaster_Chart1[".closePopupAfterEdit"] = 1;
$tdatafuelmaster_Chart1[".afterEditActionDetTable"] = "";

$tdatafuelmaster_Chart1[".add"] = true;
$tdatafuelmaster_Chart1[".afterAddAction"] = 1;
$tdatafuelmaster_Chart1[".closePopupAfterAdd"] = 1;
$tdatafuelmaster_Chart1[".afterAddActionDetTable"] = "";

$tdatafuelmaster_Chart1[".list"] = true;

$tdatafuelmaster_Chart1[".inlineEdit"] = true;



$tdatafuelmaster_Chart1[".inlineAdd"] = true;
$tdatafuelmaster_Chart1[".view"] = true;




$tdatafuelmaster_Chart1[".delete"] = true;

$tdatafuelmaster_Chart1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafuelmaster_Chart1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafuelmaster_Chart1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafuelmaster_Chart1[".searchSaving"] = false;
//

$tdatafuelmaster_Chart1[".showSearchPanel"] = true;
		$tdatafuelmaster_Chart1[".flexibleSearch"] = true;

$tdatafuelmaster_Chart1[".isUseAjaxSuggest"] = true;




$tdatafuelmaster_Chart1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafuelmaster_Chart1[".isUseTimeForSearch"] = false;





$tdatafuelmaster_Chart1[".allSearchFields"] = array();
$tdatafuelmaster_Chart1[".filterFields"] = array();
$tdatafuelmaster_Chart1[".requiredSearchFields"] = array();

$tdatafuelmaster_Chart1[".allSearchFields"][] = "Id";
	$tdatafuelmaster_Chart1[".allSearchFields"][] = "SystemDate";
	$tdatafuelmaster_Chart1[".allSearchFields"][] = "FuelDate";
	$tdatafuelmaster_Chart1[".allSearchFields"][] = "Vehicle";
	$tdatafuelmaster_Chart1[".allSearchFields"][] = "MeterReading";
	$tdatafuelmaster_Chart1[".allSearchFields"][] = "LitersPumped";
	$tdatafuelmaster_Chart1[".allSearchFields"][] = "PricePerLiter";
	$tdatafuelmaster_Chart1[".allSearchFields"][] = "FuelStation";
	$tdatafuelmaster_Chart1[".allSearchFields"][] = "Fleet";
	$tdatafuelmaster_Chart1[".allSearchFields"][] = "LastMileage";
	$tdatafuelmaster_Chart1[".allSearchFields"][] = "Economy";
	$tdatafuelmaster_Chart1[".allSearchFields"][] = "FillType";
	$tdatafuelmaster_Chart1[".allSearchFields"][] = "CouponNo";
	$tdatafuelmaster_Chart1[".allSearchFields"][] = "Driver";
	

$tdatafuelmaster_Chart1[".googleLikeFields"] = array();
$tdatafuelmaster_Chart1[".googleLikeFields"][] = "Id";
$tdatafuelmaster_Chart1[".googleLikeFields"][] = "SystemDate";
$tdatafuelmaster_Chart1[".googleLikeFields"][] = "FuelDate";
$tdatafuelmaster_Chart1[".googleLikeFields"][] = "Vehicle";
$tdatafuelmaster_Chart1[".googleLikeFields"][] = "MeterReading";
$tdatafuelmaster_Chart1[".googleLikeFields"][] = "LitersPumped";
$tdatafuelmaster_Chart1[".googleLikeFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart1[".googleLikeFields"][] = "FuelStation";
$tdatafuelmaster_Chart1[".googleLikeFields"][] = "Fleet";
$tdatafuelmaster_Chart1[".googleLikeFields"][] = "LastMileage";
$tdatafuelmaster_Chart1[".googleLikeFields"][] = "Economy";
$tdatafuelmaster_Chart1[".googleLikeFields"][] = "FillType";
$tdatafuelmaster_Chart1[".googleLikeFields"][] = "CouponNo";
$tdatafuelmaster_Chart1[".googleLikeFields"][] = "Driver";


$tdatafuelmaster_Chart1[".advSearchFields"] = array();
$tdatafuelmaster_Chart1[".advSearchFields"][] = "Id";
$tdatafuelmaster_Chart1[".advSearchFields"][] = "SystemDate";
$tdatafuelmaster_Chart1[".advSearchFields"][] = "FuelDate";
$tdatafuelmaster_Chart1[".advSearchFields"][] = "Vehicle";
$tdatafuelmaster_Chart1[".advSearchFields"][] = "MeterReading";
$tdatafuelmaster_Chart1[".advSearchFields"][] = "LitersPumped";
$tdatafuelmaster_Chart1[".advSearchFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart1[".advSearchFields"][] = "FuelStation";
$tdatafuelmaster_Chart1[".advSearchFields"][] = "Fleet";
$tdatafuelmaster_Chart1[".advSearchFields"][] = "LastMileage";
$tdatafuelmaster_Chart1[".advSearchFields"][] = "Economy";
$tdatafuelmaster_Chart1[".advSearchFields"][] = "FillType";
$tdatafuelmaster_Chart1[".advSearchFields"][] = "CouponNo";
$tdatafuelmaster_Chart1[".advSearchFields"][] = "Driver";

$tdatafuelmaster_Chart1[".tableType"] = "chart";

$tdatafuelmaster_Chart1[".printerPageOrientation"] = 0;
$tdatafuelmaster_Chart1[".nPrinterPageScale"] = 100;

$tdatafuelmaster_Chart1[".nPrinterSplitRecords"] = 40;

$tdatafuelmaster_Chart1[".nPrinterPDFSplitRecords"] = 40;



$tdatafuelmaster_Chart1[".geocodingEnabled"] = false;



// chart settings
$tdatafuelmaster_Chart1[".chartType"] = "2DColumn";
// end of chart settings


$tdatafuelmaster_Chart1[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafuelmaster_Chart1[".strOrderBy"] = $tstrOrderBy;

$tdatafuelmaster_Chart1[".orderindexes"] = array();

$tdatafuelmaster_Chart1[".sqlHead"] = "SELECT Id,  	SystemDate,  	FuelDate,  	Vehicle,  	MeterReading,  	LitersPumped,  	PricePerLiter,  	FuelStation,  	Fleet,  	LastMileage,  	Economy,  	FillType,  	CouponNo,  	Driver";
$tdatafuelmaster_Chart1[".sqlFrom"] = "FROM fuelmaster";
$tdatafuelmaster_Chart1[".sqlWhereExpr"] = "";
$tdatafuelmaster_Chart1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafuelmaster_Chart1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafuelmaster_Chart1[".arrGroupsPerPage"] = $arrGPP;

$tdatafuelmaster_Chart1[".highlightSearchResults"] = true;

$tableKeysfuelmaster_Chart1 = array();
$tableKeysfuelmaster_Chart1[] = "Id";
$tdatafuelmaster_Chart1[".Keys"] = $tableKeysfuelmaster_Chart1;

$tdatafuelmaster_Chart1[".listFields"] = array();
$tdatafuelmaster_Chart1[".listFields"][] = "Id";
$tdatafuelmaster_Chart1[".listFields"][] = "SystemDate";
$tdatafuelmaster_Chart1[".listFields"][] = "FuelDate";
$tdatafuelmaster_Chart1[".listFields"][] = "Vehicle";
$tdatafuelmaster_Chart1[".listFields"][] = "MeterReading";
$tdatafuelmaster_Chart1[".listFields"][] = "LitersPumped";
$tdatafuelmaster_Chart1[".listFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart1[".listFields"][] = "FuelStation";
$tdatafuelmaster_Chart1[".listFields"][] = "Fleet";
$tdatafuelmaster_Chart1[".listFields"][] = "LastMileage";
$tdatafuelmaster_Chart1[".listFields"][] = "Economy";
$tdatafuelmaster_Chart1[".listFields"][] = "FillType";
$tdatafuelmaster_Chart1[".listFields"][] = "CouponNo";
$tdatafuelmaster_Chart1[".listFields"][] = "Driver";

$tdatafuelmaster_Chart1[".hideMobileList"] = array();


$tdatafuelmaster_Chart1[".viewFields"] = array();
$tdatafuelmaster_Chart1[".viewFields"][] = "Id";
$tdatafuelmaster_Chart1[".viewFields"][] = "SystemDate";
$tdatafuelmaster_Chart1[".viewFields"][] = "FuelDate";
$tdatafuelmaster_Chart1[".viewFields"][] = "Vehicle";
$tdatafuelmaster_Chart1[".viewFields"][] = "MeterReading";
$tdatafuelmaster_Chart1[".viewFields"][] = "LitersPumped";
$tdatafuelmaster_Chart1[".viewFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart1[".viewFields"][] = "FuelStation";
$tdatafuelmaster_Chart1[".viewFields"][] = "Fleet";
$tdatafuelmaster_Chart1[".viewFields"][] = "LastMileage";
$tdatafuelmaster_Chart1[".viewFields"][] = "Economy";
$tdatafuelmaster_Chart1[".viewFields"][] = "FillType";
$tdatafuelmaster_Chart1[".viewFields"][] = "CouponNo";
$tdatafuelmaster_Chart1[".viewFields"][] = "Driver";

$tdatafuelmaster_Chart1[".addFields"] = array();
$tdatafuelmaster_Chart1[".addFields"][] = "SystemDate";
$tdatafuelmaster_Chart1[".addFields"][] = "FuelDate";
$tdatafuelmaster_Chart1[".addFields"][] = "Vehicle";
$tdatafuelmaster_Chart1[".addFields"][] = "MeterReading";
$tdatafuelmaster_Chart1[".addFields"][] = "LitersPumped";
$tdatafuelmaster_Chart1[".addFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart1[".addFields"][] = "FuelStation";
$tdatafuelmaster_Chart1[".addFields"][] = "Fleet";
$tdatafuelmaster_Chart1[".addFields"][] = "LastMileage";
$tdatafuelmaster_Chart1[".addFields"][] = "Economy";
$tdatafuelmaster_Chart1[".addFields"][] = "FillType";
$tdatafuelmaster_Chart1[".addFields"][] = "CouponNo";
$tdatafuelmaster_Chart1[".addFields"][] = "Driver";

$tdatafuelmaster_Chart1[".masterListFields"] = array();
$tdatafuelmaster_Chart1[".masterListFields"][] = "Id";
$tdatafuelmaster_Chart1[".masterListFields"][] = "SystemDate";
$tdatafuelmaster_Chart1[".masterListFields"][] = "FuelDate";
$tdatafuelmaster_Chart1[".masterListFields"][] = "Vehicle";
$tdatafuelmaster_Chart1[".masterListFields"][] = "MeterReading";
$tdatafuelmaster_Chart1[".masterListFields"][] = "LitersPumped";
$tdatafuelmaster_Chart1[".masterListFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart1[".masterListFields"][] = "FuelStation";
$tdatafuelmaster_Chart1[".masterListFields"][] = "Fleet";
$tdatafuelmaster_Chart1[".masterListFields"][] = "LastMileage";
$tdatafuelmaster_Chart1[".masterListFields"][] = "Economy";
$tdatafuelmaster_Chart1[".masterListFields"][] = "FillType";
$tdatafuelmaster_Chart1[".masterListFields"][] = "CouponNo";
$tdatafuelmaster_Chart1[".masterListFields"][] = "Driver";

$tdatafuelmaster_Chart1[".inlineAddFields"] = array();
$tdatafuelmaster_Chart1[".inlineAddFields"][] = "SystemDate";
$tdatafuelmaster_Chart1[".inlineAddFields"][] = "FuelDate";
$tdatafuelmaster_Chart1[".inlineAddFields"][] = "Vehicle";
$tdatafuelmaster_Chart1[".inlineAddFields"][] = "MeterReading";
$tdatafuelmaster_Chart1[".inlineAddFields"][] = "LitersPumped";
$tdatafuelmaster_Chart1[".inlineAddFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart1[".inlineAddFields"][] = "FuelStation";
$tdatafuelmaster_Chart1[".inlineAddFields"][] = "Fleet";
$tdatafuelmaster_Chart1[".inlineAddFields"][] = "LastMileage";
$tdatafuelmaster_Chart1[".inlineAddFields"][] = "Economy";
$tdatafuelmaster_Chart1[".inlineAddFields"][] = "FillType";
$tdatafuelmaster_Chart1[".inlineAddFields"][] = "CouponNo";
$tdatafuelmaster_Chart1[".inlineAddFields"][] = "Driver";

$tdatafuelmaster_Chart1[".editFields"] = array();
$tdatafuelmaster_Chart1[".editFields"][] = "SystemDate";
$tdatafuelmaster_Chart1[".editFields"][] = "FuelDate";
$tdatafuelmaster_Chart1[".editFields"][] = "Vehicle";
$tdatafuelmaster_Chart1[".editFields"][] = "MeterReading";
$tdatafuelmaster_Chart1[".editFields"][] = "LitersPumped";
$tdatafuelmaster_Chart1[".editFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart1[".editFields"][] = "FuelStation";
$tdatafuelmaster_Chart1[".editFields"][] = "Fleet";
$tdatafuelmaster_Chart1[".editFields"][] = "LastMileage";
$tdatafuelmaster_Chart1[".editFields"][] = "Economy";
$tdatafuelmaster_Chart1[".editFields"][] = "FillType";
$tdatafuelmaster_Chart1[".editFields"][] = "CouponNo";
$tdatafuelmaster_Chart1[".editFields"][] = "Driver";

$tdatafuelmaster_Chart1[".inlineEditFields"] = array();
$tdatafuelmaster_Chart1[".inlineEditFields"][] = "SystemDate";
$tdatafuelmaster_Chart1[".inlineEditFields"][] = "FuelDate";
$tdatafuelmaster_Chart1[".inlineEditFields"][] = "Vehicle";
$tdatafuelmaster_Chart1[".inlineEditFields"][] = "MeterReading";
$tdatafuelmaster_Chart1[".inlineEditFields"][] = "LitersPumped";
$tdatafuelmaster_Chart1[".inlineEditFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart1[".inlineEditFields"][] = "FuelStation";
$tdatafuelmaster_Chart1[".inlineEditFields"][] = "Fleet";
$tdatafuelmaster_Chart1[".inlineEditFields"][] = "LastMileage";
$tdatafuelmaster_Chart1[".inlineEditFields"][] = "Economy";
$tdatafuelmaster_Chart1[".inlineEditFields"][] = "FillType";
$tdatafuelmaster_Chart1[".inlineEditFields"][] = "CouponNo";
$tdatafuelmaster_Chart1[".inlineEditFields"][] = "Driver";

$tdatafuelmaster_Chart1[".updateSelectedFields"] = array();
$tdatafuelmaster_Chart1[".updateSelectedFields"][] = "SystemDate";
$tdatafuelmaster_Chart1[".updateSelectedFields"][] = "FuelDate";
$tdatafuelmaster_Chart1[".updateSelectedFields"][] = "Vehicle";
$tdatafuelmaster_Chart1[".updateSelectedFields"][] = "MeterReading";
$tdatafuelmaster_Chart1[".updateSelectedFields"][] = "LitersPumped";
$tdatafuelmaster_Chart1[".updateSelectedFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart1[".updateSelectedFields"][] = "FuelStation";
$tdatafuelmaster_Chart1[".updateSelectedFields"][] = "Fleet";
$tdatafuelmaster_Chart1[".updateSelectedFields"][] = "LastMileage";
$tdatafuelmaster_Chart1[".updateSelectedFields"][] = "Economy";
$tdatafuelmaster_Chart1[".updateSelectedFields"][] = "FillType";
$tdatafuelmaster_Chart1[".updateSelectedFields"][] = "CouponNo";
$tdatafuelmaster_Chart1[".updateSelectedFields"][] = "Driver";


$tdatafuelmaster_Chart1[".exportFields"] = array();
$tdatafuelmaster_Chart1[".exportFields"][] = "Id";
$tdatafuelmaster_Chart1[".exportFields"][] = "SystemDate";
$tdatafuelmaster_Chart1[".exportFields"][] = "FuelDate";
$tdatafuelmaster_Chart1[".exportFields"][] = "Vehicle";
$tdatafuelmaster_Chart1[".exportFields"][] = "MeterReading";
$tdatafuelmaster_Chart1[".exportFields"][] = "LitersPumped";
$tdatafuelmaster_Chart1[".exportFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart1[".exportFields"][] = "FuelStation";
$tdatafuelmaster_Chart1[".exportFields"][] = "Fleet";
$tdatafuelmaster_Chart1[".exportFields"][] = "LastMileage";
$tdatafuelmaster_Chart1[".exportFields"][] = "Economy";
$tdatafuelmaster_Chart1[".exportFields"][] = "FillType";
$tdatafuelmaster_Chart1[".exportFields"][] = "CouponNo";
$tdatafuelmaster_Chart1[".exportFields"][] = "Driver";

$tdatafuelmaster_Chart1[".importFields"] = array();
$tdatafuelmaster_Chart1[".importFields"][] = "Id";
$tdatafuelmaster_Chart1[".importFields"][] = "SystemDate";
$tdatafuelmaster_Chart1[".importFields"][] = "FuelDate";
$tdatafuelmaster_Chart1[".importFields"][] = "Vehicle";
$tdatafuelmaster_Chart1[".importFields"][] = "MeterReading";
$tdatafuelmaster_Chart1[".importFields"][] = "LitersPumped";
$tdatafuelmaster_Chart1[".importFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart1[".importFields"][] = "FuelStation";
$tdatafuelmaster_Chart1[".importFields"][] = "Fleet";
$tdatafuelmaster_Chart1[".importFields"][] = "LastMileage";
$tdatafuelmaster_Chart1[".importFields"][] = "Economy";
$tdatafuelmaster_Chart1[".importFields"][] = "FillType";
$tdatafuelmaster_Chart1[".importFields"][] = "CouponNo";
$tdatafuelmaster_Chart1[".importFields"][] = "Driver";

$tdatafuelmaster_Chart1[".printFields"] = array();
$tdatafuelmaster_Chart1[".printFields"][] = "Id";
$tdatafuelmaster_Chart1[".printFields"][] = "SystemDate";
$tdatafuelmaster_Chart1[".printFields"][] = "FuelDate";
$tdatafuelmaster_Chart1[".printFields"][] = "Vehicle";
$tdatafuelmaster_Chart1[".printFields"][] = "MeterReading";
$tdatafuelmaster_Chart1[".printFields"][] = "LitersPumped";
$tdatafuelmaster_Chart1[".printFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart1[".printFields"][] = "FuelStation";
$tdatafuelmaster_Chart1[".printFields"][] = "Fleet";
$tdatafuelmaster_Chart1[".printFields"][] = "LastMileage";
$tdatafuelmaster_Chart1[".printFields"][] = "Economy";
$tdatafuelmaster_Chart1[".printFields"][] = "FillType";
$tdatafuelmaster_Chart1[".printFields"][] = "CouponNo";
$tdatafuelmaster_Chart1[".printFields"][] = "Driver";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart1","Id");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_Chart1["Id"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart1","SystemDate");
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

		$fdata["strField"] = "SystemDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SystemDate";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 50;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_Chart1["SystemDate"] = $fdata;
//	FuelDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FuelDate";
	$fdata["GoodName"] = "FuelDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart1","FuelDate");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_Chart1["FuelDate"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart1","Vehicle");
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

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_Chart1["Vehicle"] = $fdata;
//	MeterReading
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MeterReading";
	$fdata["GoodName"] = "MeterReading";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart1","MeterReading");
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

		$edata["controlWidth"] = 100;

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




	$tdatafuelmaster_Chart1["MeterReading"] = $fdata;
//	LitersPumped
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LitersPumped";
	$fdata["GoodName"] = "LitersPumped";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart1","LitersPumped");
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

		$edata["controlWidth"] = 100;

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




	$tdatafuelmaster_Chart1["LitersPumped"] = $fdata;
//	PricePerLiter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PricePerLiter";
	$fdata["GoodName"] = "PricePerLiter";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart1","PricePerLiter");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_Chart1["PricePerLiter"] = $fdata;
//	FuelStation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FuelStation";
	$fdata["GoodName"] = "FuelStation";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart1","FuelStation");
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

		$fdata["strField"] = "FuelStation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FuelStation";

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_Chart1["FuelStation"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart1","Fleet");
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

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_Chart1["Fleet"] = $fdata;
//	LastMileage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "LastMileage";
	$fdata["GoodName"] = "LastMileage";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart1","LastMileage");
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

		$edata["controlWidth"] = 100;

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




	$tdatafuelmaster_Chart1["LastMileage"] = $fdata;
//	Economy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Economy";
	$fdata["GoodName"] = "Economy";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart1","Economy");
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_Chart1["Economy"] = $fdata;
//	FillType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FillType";
	$fdata["GoodName"] = "FillType";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart1","FillType");
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

		$fdata["strField"] = "FillType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FillType";

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_Chart1["FillType"] = $fdata;
//	CouponNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "CouponNo";
	$fdata["GoodName"] = "CouponNo";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart1","CouponNo");
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

		$fdata["strField"] = "CouponNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CouponNo";

	
	
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

	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_Chart1["CouponNo"] = $fdata;
//	Driver
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Driver";
	$fdata["GoodName"] = "Driver";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart1","Driver");
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

		$fdata["strField"] = "Driver";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Driver";

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster_Chart1["Driver"] = $fdata;

	$tdatafuelmaster_Chart1[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">fuelmaster Chart1</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatafuelmaster_Chart1[".chartXml"] .= '<attr value="0">
			<attr value="name">Id</attr>';
	$tdatafuelmaster_Chart1[".chartXml"] .= '</attr>';
	$tdatafuelmaster_Chart1[".chartXml"] .= '<attr value="1">
		<attr value="name">SystemDate</attr>
	</attr>';
	$tdatafuelmaster_Chart1[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatafuelmaster_Chart1[".chartXml"] .= '<attr value="head">'.xmlencode("fuelmaster Chart1").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("Id").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">None</attr>
<attr value="cview">Column</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatafuelmaster_Chart1[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatafuelmaster_Chart1[".chartXml"] .= '<attr value="0">
		<attr value="name">Id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart1","Id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart1[".chartXml"] .= '<attr value="1">
		<attr value="name">SystemDate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart1","SystemDate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart1[".chartXml"] .= '<attr value="2">
		<attr value="name">FuelDate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart1","FuelDate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart1[".chartXml"] .= '<attr value="3">
		<attr value="name">Vehicle</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart1","Vehicle")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart1[".chartXml"] .= '<attr value="4">
		<attr value="name">MeterReading</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart1","MeterReading")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart1[".chartXml"] .= '<attr value="5">
		<attr value="name">LitersPumped</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart1","LitersPumped")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart1[".chartXml"] .= '<attr value="6">
		<attr value="name">PricePerLiter</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart1","PricePerLiter")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart1[".chartXml"] .= '<attr value="7">
		<attr value="name">FuelStation</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart1","FuelStation")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart1[".chartXml"] .= '<attr value="8">
		<attr value="name">Fleet</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart1","Fleet")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart1[".chartXml"] .= '<attr value="9">
		<attr value="name">LastMileage</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart1","LastMileage")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart1[".chartXml"] .= '<attr value="10">
		<attr value="name">Economy</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart1","Economy")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart1[".chartXml"] .= '<attr value="11">
		<attr value="name">FillType</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart1","FillType")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart1[".chartXml"] .= '<attr value="12">
		<attr value="name">CouponNo</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart1","CouponNo")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart1[".chartXml"] .= '<attr value="13">
		<attr value="name">Driver</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart1","Driver")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatafuelmaster_Chart1[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">fuelmaster Chart1</attr>
<attr value="short_table_name">fuelmaster_Chart1</attr>
</attr>

</chart>';

$tables_data["fuelmaster Chart1"]=&$tdatafuelmaster_Chart1;
$field_labels["fuelmaster_Chart1"] = &$fieldLabelsfuelmaster_Chart1;
$fieldToolTips["fuelmaster_Chart1"] = &$fieldToolTipsfuelmaster_Chart1;
$page_titles["fuelmaster_Chart1"] = &$pageTitlesfuelmaster_Chart1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["fuelmaster Chart1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["fuelmaster Chart1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_fuelmaster_Chart1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  	SystemDate,  	FuelDate,  	Vehicle,  	MeterReading,  	LitersPumped,  	PricePerLiter,  	FuelStation,  	Fleet,  	LastMileage,  	Economy,  	FillType,  	CouponNo,  	Driver";
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
	"m_srcTableName" => "fuelmaster Chart1"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "fuelmaster Chart1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart1"
));

$proto8["m_sql"] = "SystemDate";
$proto8["m_srcTableName"] = "fuelmaster Chart1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart1"
));

$proto10["m_sql"] = "FuelDate";
$proto10["m_srcTableName"] = "fuelmaster Chart1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart1"
));

$proto12["m_sql"] = "Vehicle";
$proto12["m_srcTableName"] = "fuelmaster Chart1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MeterReading",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart1"
));

$proto14["m_sql"] = "MeterReading";
$proto14["m_srcTableName"] = "fuelmaster Chart1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LitersPumped",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart1"
));

$proto16["m_sql"] = "LitersPumped";
$proto16["m_srcTableName"] = "fuelmaster Chart1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PricePerLiter",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart1"
));

$proto18["m_sql"] = "PricePerLiter";
$proto18["m_srcTableName"] = "fuelmaster Chart1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelStation",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart1"
));

$proto20["m_sql"] = "FuelStation";
$proto20["m_srcTableName"] = "fuelmaster Chart1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart1"
));

$proto22["m_sql"] = "Fleet";
$proto22["m_srcTableName"] = "fuelmaster Chart1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "LastMileage",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart1"
));

$proto24["m_sql"] = "LastMileage";
$proto24["m_srcTableName"] = "fuelmaster Chart1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Economy",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart1"
));

$proto26["m_sql"] = "Economy";
$proto26["m_srcTableName"] = "fuelmaster Chart1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "FillType",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart1"
));

$proto28["m_sql"] = "FillType";
$proto28["m_srcTableName"] = "fuelmaster Chart1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "CouponNo",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart1"
));

$proto30["m_sql"] = "CouponNo";
$proto30["m_srcTableName"] = "fuelmaster Chart1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Driver",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart1"
));

$proto32["m_sql"] = "Driver";
$proto32["m_srcTableName"] = "fuelmaster Chart1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "fuelmaster";
$proto35["m_srcTableName"] = "fuelmaster Chart1";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "Id";
$proto35["m_columns"][] = "SystemDate";
$proto35["m_columns"][] = "FuelDate";
$proto35["m_columns"][] = "Vehicle";
$proto35["m_columns"][] = "MeterReading";
$proto35["m_columns"][] = "LitersPumped";
$proto35["m_columns"][] = "PricePerLiter";
$proto35["m_columns"][] = "FuelStation";
$proto35["m_columns"][] = "Fleet";
$proto35["m_columns"][] = "LastMileage";
$proto35["m_columns"][] = "Economy";
$proto35["m_columns"][] = "FillType";
$proto35["m_columns"][] = "CouponNo";
$proto35["m_columns"][] = "Driver";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "fuelmaster";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "fuelmaster Chart1";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="fuelmaster Chart1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fuelmaster_Chart1 = createSqlQuery_fuelmaster_Chart1();


	
					
;

														

$tdatafuelmaster_Chart1[".sqlquery"] = $queryData_fuelmaster_Chart1;

$tableEvents["fuelmaster Chart1"] = new eventsBase;
$tdatafuelmaster_Chart1[".hasEvents"] = false;

?>