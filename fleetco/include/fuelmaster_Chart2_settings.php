<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafuelmaster_Chart2 = array();
	$tdatafuelmaster_Chart2[".ShortName"] = "fuelmaster_Chart2";
	$tdatafuelmaster_Chart2[".OwnerID"] = "";
	$tdatafuelmaster_Chart2[".OriginalTable"] = "fuelmaster";

//	field labels
$fieldLabelsfuelmaster_Chart2 = array();
$fieldToolTipsfuelmaster_Chart2 = array();
$pageTitlesfuelmaster_Chart2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfuelmaster_Chart2["English"] = array();
	$fieldToolTipsfuelmaster_Chart2["English"] = array();
	$pageTitlesfuelmaster_Chart2["English"] = array();
	$fieldLabelsfuelmaster_Chart2["English"]["Id"] = "Id";
	$fieldToolTipsfuelmaster_Chart2["English"]["Id"] = "";
	$fieldLabelsfuelmaster_Chart2["English"]["SystemDate"] = "System Date";
	$fieldToolTipsfuelmaster_Chart2["English"]["SystemDate"] = "";
	$fieldLabelsfuelmaster_Chart2["English"]["FuelDate"] = "Fuel Date";
	$fieldToolTipsfuelmaster_Chart2["English"]["FuelDate"] = "";
	$fieldLabelsfuelmaster_Chart2["English"]["Vehicle"] = "Vehicle";
	$fieldToolTipsfuelmaster_Chart2["English"]["Vehicle"] = "";
	$fieldLabelsfuelmaster_Chart2["English"]["MeterReading"] = "Meter Reading";
	$fieldToolTipsfuelmaster_Chart2["English"]["MeterReading"] = "";
	$fieldLabelsfuelmaster_Chart2["English"]["LitersPumped"] = "Liters Pumped";
	$fieldToolTipsfuelmaster_Chart2["English"]["LitersPumped"] = "";
	$fieldLabelsfuelmaster_Chart2["English"]["PricePerLiter"] = "Price Per Liter";
	$fieldToolTipsfuelmaster_Chart2["English"]["PricePerLiter"] = "";
	$fieldLabelsfuelmaster_Chart2["English"]["FuelStation"] = "Fuel Station";
	$fieldToolTipsfuelmaster_Chart2["English"]["FuelStation"] = "";
	$fieldLabelsfuelmaster_Chart2["English"]["Fleet"] = "Fleet";
	$fieldToolTipsfuelmaster_Chart2["English"]["Fleet"] = "";
	$fieldLabelsfuelmaster_Chart2["English"]["LastMileage"] = "Last Mileage";
	$fieldToolTipsfuelmaster_Chart2["English"]["LastMileage"] = "";
	$fieldLabelsfuelmaster_Chart2["English"]["Economy"] = "Economy";
	$fieldToolTipsfuelmaster_Chart2["English"]["Economy"] = "";
	$fieldLabelsfuelmaster_Chart2["English"]["FillType"] = "Fill Type";
	$fieldToolTipsfuelmaster_Chart2["English"]["FillType"] = "";
	$fieldLabelsfuelmaster_Chart2["English"]["CouponNo"] = "Coupon No";
	$fieldToolTipsfuelmaster_Chart2["English"]["CouponNo"] = "";
	$fieldLabelsfuelmaster_Chart2["English"]["Driver"] = "Driver";
	$fieldToolTipsfuelmaster_Chart2["English"]["Driver"] = "";
	if (count($fieldToolTipsfuelmaster_Chart2["English"]))
		$tdatafuelmaster_Chart2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfuelmaster_Chart2[""] = array();
	$fieldToolTipsfuelmaster_Chart2[""] = array();
	$pageTitlesfuelmaster_Chart2[""] = array();
	if (count($fieldToolTipsfuelmaster_Chart2[""]))
		$tdatafuelmaster_Chart2[".isUseToolTips"] = true;
}


	$tdatafuelmaster_Chart2[".NCSearch"] = true;

	$tdatafuelmaster_Chart2[".ChartRefreshTime"] = 0;


$tdatafuelmaster_Chart2[".shortTableName"] = "fuelmaster_Chart2";
$tdatafuelmaster_Chart2[".nSecOptions"] = 0;
$tdatafuelmaster_Chart2[".recsPerRowPrint"] = 1;
$tdatafuelmaster_Chart2[".mainTableOwnerID"] = "";
$tdatafuelmaster_Chart2[".moveNext"] = 1;
$tdatafuelmaster_Chart2[".entityType"] = 3;

$tdatafuelmaster_Chart2[".strOriginalTableName"] = "fuelmaster";

		 



$tdatafuelmaster_Chart2[".showAddInPopup"] = false;

$tdatafuelmaster_Chart2[".showEditInPopup"] = false;

$tdatafuelmaster_Chart2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafuelmaster_Chart2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafuelmaster_Chart2[".fieldsForRegister"] = array();

$tdatafuelmaster_Chart2[".listAjax"] = false;

	$tdatafuelmaster_Chart2[".audit"] = false;

	$tdatafuelmaster_Chart2[".locking"] = false;

$tdatafuelmaster_Chart2[".edit"] = true;
$tdatafuelmaster_Chart2[".afterEditAction"] = 1;
$tdatafuelmaster_Chart2[".closePopupAfterEdit"] = 1;
$tdatafuelmaster_Chart2[".afterEditActionDetTable"] = "";

$tdatafuelmaster_Chart2[".add"] = true;
$tdatafuelmaster_Chart2[".afterAddAction"] = 1;
$tdatafuelmaster_Chart2[".closePopupAfterAdd"] = 1;
$tdatafuelmaster_Chart2[".afterAddActionDetTable"] = "";

$tdatafuelmaster_Chart2[".list"] = true;

$tdatafuelmaster_Chart2[".inlineEdit"] = true;



$tdatafuelmaster_Chart2[".inlineAdd"] = true;
$tdatafuelmaster_Chart2[".view"] = true;




$tdatafuelmaster_Chart2[".delete"] = true;

$tdatafuelmaster_Chart2[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafuelmaster_Chart2[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafuelmaster_Chart2[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafuelmaster_Chart2[".searchSaving"] = false;
//

$tdatafuelmaster_Chart2[".showSearchPanel"] = true;
		$tdatafuelmaster_Chart2[".flexibleSearch"] = true;

$tdatafuelmaster_Chart2[".isUseAjaxSuggest"] = true;




$tdatafuelmaster_Chart2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafuelmaster_Chart2[".isUseTimeForSearch"] = false;





$tdatafuelmaster_Chart2[".allSearchFields"] = array();
$tdatafuelmaster_Chart2[".filterFields"] = array();
$tdatafuelmaster_Chart2[".requiredSearchFields"] = array();

$tdatafuelmaster_Chart2[".allSearchFields"][] = "Id";
	$tdatafuelmaster_Chart2[".allSearchFields"][] = "SystemDate";
	$tdatafuelmaster_Chart2[".allSearchFields"][] = "FuelDate";
	$tdatafuelmaster_Chart2[".allSearchFields"][] = "Vehicle";
	$tdatafuelmaster_Chart2[".allSearchFields"][] = "MeterReading";
	$tdatafuelmaster_Chart2[".allSearchFields"][] = "LitersPumped";
	$tdatafuelmaster_Chart2[".allSearchFields"][] = "PricePerLiter";
	$tdatafuelmaster_Chart2[".allSearchFields"][] = "FuelStation";
	$tdatafuelmaster_Chart2[".allSearchFields"][] = "Fleet";
	$tdatafuelmaster_Chart2[".allSearchFields"][] = "LastMileage";
	$tdatafuelmaster_Chart2[".allSearchFields"][] = "Economy";
	$tdatafuelmaster_Chart2[".allSearchFields"][] = "FillType";
	$tdatafuelmaster_Chart2[".allSearchFields"][] = "CouponNo";
	$tdatafuelmaster_Chart2[".allSearchFields"][] = "Driver";
	

$tdatafuelmaster_Chart2[".googleLikeFields"] = array();
$tdatafuelmaster_Chart2[".googleLikeFields"][] = "Id";
$tdatafuelmaster_Chart2[".googleLikeFields"][] = "SystemDate";
$tdatafuelmaster_Chart2[".googleLikeFields"][] = "FuelDate";
$tdatafuelmaster_Chart2[".googleLikeFields"][] = "Vehicle";
$tdatafuelmaster_Chart2[".googleLikeFields"][] = "MeterReading";
$tdatafuelmaster_Chart2[".googleLikeFields"][] = "LitersPumped";
$tdatafuelmaster_Chart2[".googleLikeFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart2[".googleLikeFields"][] = "FuelStation";
$tdatafuelmaster_Chart2[".googleLikeFields"][] = "Fleet";
$tdatafuelmaster_Chart2[".googleLikeFields"][] = "LastMileage";
$tdatafuelmaster_Chart2[".googleLikeFields"][] = "Economy";
$tdatafuelmaster_Chart2[".googleLikeFields"][] = "FillType";
$tdatafuelmaster_Chart2[".googleLikeFields"][] = "CouponNo";
$tdatafuelmaster_Chart2[".googleLikeFields"][] = "Driver";


$tdatafuelmaster_Chart2[".advSearchFields"] = array();
$tdatafuelmaster_Chart2[".advSearchFields"][] = "Id";
$tdatafuelmaster_Chart2[".advSearchFields"][] = "SystemDate";
$tdatafuelmaster_Chart2[".advSearchFields"][] = "FuelDate";
$tdatafuelmaster_Chart2[".advSearchFields"][] = "Vehicle";
$tdatafuelmaster_Chart2[".advSearchFields"][] = "MeterReading";
$tdatafuelmaster_Chart2[".advSearchFields"][] = "LitersPumped";
$tdatafuelmaster_Chart2[".advSearchFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart2[".advSearchFields"][] = "FuelStation";
$tdatafuelmaster_Chart2[".advSearchFields"][] = "Fleet";
$tdatafuelmaster_Chart2[".advSearchFields"][] = "LastMileage";
$tdatafuelmaster_Chart2[".advSearchFields"][] = "Economy";
$tdatafuelmaster_Chart2[".advSearchFields"][] = "FillType";
$tdatafuelmaster_Chart2[".advSearchFields"][] = "CouponNo";
$tdatafuelmaster_Chart2[".advSearchFields"][] = "Driver";

$tdatafuelmaster_Chart2[".tableType"] = "chart";

$tdatafuelmaster_Chart2[".printerPageOrientation"] = 0;
$tdatafuelmaster_Chart2[".nPrinterPageScale"] = 100;

$tdatafuelmaster_Chart2[".nPrinterSplitRecords"] = 40;

$tdatafuelmaster_Chart2[".nPrinterPDFSplitRecords"] = 40;



$tdatafuelmaster_Chart2[".geocodingEnabled"] = false;



// chart settings
$tdatafuelmaster_Chart2[".chartType"] = "2DColumn";
// end of chart settings


$tdatafuelmaster_Chart2[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafuelmaster_Chart2[".strOrderBy"] = $tstrOrderBy;

$tdatafuelmaster_Chart2[".orderindexes"] = array();

$tdatafuelmaster_Chart2[".sqlHead"] = "SELECT Id,  	SystemDate,  	FuelDate,  	Vehicle,  	MeterReading,  	LitersPumped,  	PricePerLiter,  	FuelStation,  	Fleet,  	LastMileage,  	Economy,  	FillType,  	CouponNo,  	Driver";
$tdatafuelmaster_Chart2[".sqlFrom"] = "FROM fuelmaster";
$tdatafuelmaster_Chart2[".sqlWhereExpr"] = "";
$tdatafuelmaster_Chart2[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafuelmaster_Chart2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafuelmaster_Chart2[".arrGroupsPerPage"] = $arrGPP;

$tdatafuelmaster_Chart2[".highlightSearchResults"] = true;

$tableKeysfuelmaster_Chart2 = array();
$tableKeysfuelmaster_Chart2[] = "Id";
$tdatafuelmaster_Chart2[".Keys"] = $tableKeysfuelmaster_Chart2;

$tdatafuelmaster_Chart2[".listFields"] = array();
$tdatafuelmaster_Chart2[".listFields"][] = "Id";
$tdatafuelmaster_Chart2[".listFields"][] = "SystemDate";
$tdatafuelmaster_Chart2[".listFields"][] = "FuelDate";
$tdatafuelmaster_Chart2[".listFields"][] = "Vehicle";
$tdatafuelmaster_Chart2[".listFields"][] = "MeterReading";
$tdatafuelmaster_Chart2[".listFields"][] = "LitersPumped";
$tdatafuelmaster_Chart2[".listFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart2[".listFields"][] = "FuelStation";
$tdatafuelmaster_Chart2[".listFields"][] = "Fleet";
$tdatafuelmaster_Chart2[".listFields"][] = "LastMileage";
$tdatafuelmaster_Chart2[".listFields"][] = "Economy";
$tdatafuelmaster_Chart2[".listFields"][] = "FillType";
$tdatafuelmaster_Chart2[".listFields"][] = "CouponNo";
$tdatafuelmaster_Chart2[".listFields"][] = "Driver";

$tdatafuelmaster_Chart2[".hideMobileList"] = array();


$tdatafuelmaster_Chart2[".viewFields"] = array();
$tdatafuelmaster_Chart2[".viewFields"][] = "Id";
$tdatafuelmaster_Chart2[".viewFields"][] = "SystemDate";
$tdatafuelmaster_Chart2[".viewFields"][] = "FuelDate";
$tdatafuelmaster_Chart2[".viewFields"][] = "Vehicle";
$tdatafuelmaster_Chart2[".viewFields"][] = "MeterReading";
$tdatafuelmaster_Chart2[".viewFields"][] = "LitersPumped";
$tdatafuelmaster_Chart2[".viewFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart2[".viewFields"][] = "FuelStation";
$tdatafuelmaster_Chart2[".viewFields"][] = "Fleet";
$tdatafuelmaster_Chart2[".viewFields"][] = "LastMileage";
$tdatafuelmaster_Chart2[".viewFields"][] = "Economy";
$tdatafuelmaster_Chart2[".viewFields"][] = "FillType";
$tdatafuelmaster_Chart2[".viewFields"][] = "CouponNo";
$tdatafuelmaster_Chart2[".viewFields"][] = "Driver";

$tdatafuelmaster_Chart2[".addFields"] = array();
$tdatafuelmaster_Chart2[".addFields"][] = "SystemDate";
$tdatafuelmaster_Chart2[".addFields"][] = "FuelDate";
$tdatafuelmaster_Chart2[".addFields"][] = "Vehicle";
$tdatafuelmaster_Chart2[".addFields"][] = "MeterReading";
$tdatafuelmaster_Chart2[".addFields"][] = "LitersPumped";
$tdatafuelmaster_Chart2[".addFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart2[".addFields"][] = "FuelStation";
$tdatafuelmaster_Chart2[".addFields"][] = "Fleet";
$tdatafuelmaster_Chart2[".addFields"][] = "LastMileage";
$tdatafuelmaster_Chart2[".addFields"][] = "Economy";
$tdatafuelmaster_Chart2[".addFields"][] = "FillType";
$tdatafuelmaster_Chart2[".addFields"][] = "CouponNo";
$tdatafuelmaster_Chart2[".addFields"][] = "Driver";

$tdatafuelmaster_Chart2[".masterListFields"] = array();
$tdatafuelmaster_Chart2[".masterListFields"][] = "Id";
$tdatafuelmaster_Chart2[".masterListFields"][] = "SystemDate";
$tdatafuelmaster_Chart2[".masterListFields"][] = "FuelDate";
$tdatafuelmaster_Chart2[".masterListFields"][] = "Vehicle";
$tdatafuelmaster_Chart2[".masterListFields"][] = "MeterReading";
$tdatafuelmaster_Chart2[".masterListFields"][] = "LitersPumped";
$tdatafuelmaster_Chart2[".masterListFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart2[".masterListFields"][] = "FuelStation";
$tdatafuelmaster_Chart2[".masterListFields"][] = "Fleet";
$tdatafuelmaster_Chart2[".masterListFields"][] = "LastMileage";
$tdatafuelmaster_Chart2[".masterListFields"][] = "Economy";
$tdatafuelmaster_Chart2[".masterListFields"][] = "FillType";
$tdatafuelmaster_Chart2[".masterListFields"][] = "CouponNo";
$tdatafuelmaster_Chart2[".masterListFields"][] = "Driver";

$tdatafuelmaster_Chart2[".inlineAddFields"] = array();
$tdatafuelmaster_Chart2[".inlineAddFields"][] = "SystemDate";
$tdatafuelmaster_Chart2[".inlineAddFields"][] = "FuelDate";
$tdatafuelmaster_Chart2[".inlineAddFields"][] = "Vehicle";
$tdatafuelmaster_Chart2[".inlineAddFields"][] = "MeterReading";
$tdatafuelmaster_Chart2[".inlineAddFields"][] = "LitersPumped";
$tdatafuelmaster_Chart2[".inlineAddFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart2[".inlineAddFields"][] = "FuelStation";
$tdatafuelmaster_Chart2[".inlineAddFields"][] = "Fleet";
$tdatafuelmaster_Chart2[".inlineAddFields"][] = "LastMileage";
$tdatafuelmaster_Chart2[".inlineAddFields"][] = "Economy";
$tdatafuelmaster_Chart2[".inlineAddFields"][] = "FillType";
$tdatafuelmaster_Chart2[".inlineAddFields"][] = "CouponNo";
$tdatafuelmaster_Chart2[".inlineAddFields"][] = "Driver";

$tdatafuelmaster_Chart2[".editFields"] = array();
$tdatafuelmaster_Chart2[".editFields"][] = "SystemDate";
$tdatafuelmaster_Chart2[".editFields"][] = "FuelDate";
$tdatafuelmaster_Chart2[".editFields"][] = "Vehicle";
$tdatafuelmaster_Chart2[".editFields"][] = "MeterReading";
$tdatafuelmaster_Chart2[".editFields"][] = "LitersPumped";
$tdatafuelmaster_Chart2[".editFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart2[".editFields"][] = "FuelStation";
$tdatafuelmaster_Chart2[".editFields"][] = "Fleet";
$tdatafuelmaster_Chart2[".editFields"][] = "LastMileage";
$tdatafuelmaster_Chart2[".editFields"][] = "Economy";
$tdatafuelmaster_Chart2[".editFields"][] = "FillType";
$tdatafuelmaster_Chart2[".editFields"][] = "CouponNo";
$tdatafuelmaster_Chart2[".editFields"][] = "Driver";

$tdatafuelmaster_Chart2[".inlineEditFields"] = array();
$tdatafuelmaster_Chart2[".inlineEditFields"][] = "SystemDate";
$tdatafuelmaster_Chart2[".inlineEditFields"][] = "FuelDate";
$tdatafuelmaster_Chart2[".inlineEditFields"][] = "Vehicle";
$tdatafuelmaster_Chart2[".inlineEditFields"][] = "MeterReading";
$tdatafuelmaster_Chart2[".inlineEditFields"][] = "LitersPumped";
$tdatafuelmaster_Chart2[".inlineEditFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart2[".inlineEditFields"][] = "FuelStation";
$tdatafuelmaster_Chart2[".inlineEditFields"][] = "Fleet";
$tdatafuelmaster_Chart2[".inlineEditFields"][] = "LastMileage";
$tdatafuelmaster_Chart2[".inlineEditFields"][] = "Economy";
$tdatafuelmaster_Chart2[".inlineEditFields"][] = "FillType";
$tdatafuelmaster_Chart2[".inlineEditFields"][] = "CouponNo";
$tdatafuelmaster_Chart2[".inlineEditFields"][] = "Driver";

$tdatafuelmaster_Chart2[".updateSelectedFields"] = array();
$tdatafuelmaster_Chart2[".updateSelectedFields"][] = "SystemDate";
$tdatafuelmaster_Chart2[".updateSelectedFields"][] = "FuelDate";
$tdatafuelmaster_Chart2[".updateSelectedFields"][] = "Vehicle";
$tdatafuelmaster_Chart2[".updateSelectedFields"][] = "MeterReading";
$tdatafuelmaster_Chart2[".updateSelectedFields"][] = "LitersPumped";
$tdatafuelmaster_Chart2[".updateSelectedFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart2[".updateSelectedFields"][] = "FuelStation";
$tdatafuelmaster_Chart2[".updateSelectedFields"][] = "Fleet";
$tdatafuelmaster_Chart2[".updateSelectedFields"][] = "LastMileage";
$tdatafuelmaster_Chart2[".updateSelectedFields"][] = "Economy";
$tdatafuelmaster_Chart2[".updateSelectedFields"][] = "FillType";
$tdatafuelmaster_Chart2[".updateSelectedFields"][] = "CouponNo";
$tdatafuelmaster_Chart2[".updateSelectedFields"][] = "Driver";


$tdatafuelmaster_Chart2[".exportFields"] = array();
$tdatafuelmaster_Chart2[".exportFields"][] = "Id";
$tdatafuelmaster_Chart2[".exportFields"][] = "SystemDate";
$tdatafuelmaster_Chart2[".exportFields"][] = "FuelDate";
$tdatafuelmaster_Chart2[".exportFields"][] = "Vehicle";
$tdatafuelmaster_Chart2[".exportFields"][] = "MeterReading";
$tdatafuelmaster_Chart2[".exportFields"][] = "LitersPumped";
$tdatafuelmaster_Chart2[".exportFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart2[".exportFields"][] = "FuelStation";
$tdatafuelmaster_Chart2[".exportFields"][] = "Fleet";
$tdatafuelmaster_Chart2[".exportFields"][] = "LastMileage";
$tdatafuelmaster_Chart2[".exportFields"][] = "Economy";
$tdatafuelmaster_Chart2[".exportFields"][] = "FillType";
$tdatafuelmaster_Chart2[".exportFields"][] = "CouponNo";
$tdatafuelmaster_Chart2[".exportFields"][] = "Driver";

$tdatafuelmaster_Chart2[".importFields"] = array();
$tdatafuelmaster_Chart2[".importFields"][] = "Id";
$tdatafuelmaster_Chart2[".importFields"][] = "SystemDate";
$tdatafuelmaster_Chart2[".importFields"][] = "FuelDate";
$tdatafuelmaster_Chart2[".importFields"][] = "Vehicle";
$tdatafuelmaster_Chart2[".importFields"][] = "MeterReading";
$tdatafuelmaster_Chart2[".importFields"][] = "LitersPumped";
$tdatafuelmaster_Chart2[".importFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart2[".importFields"][] = "FuelStation";
$tdatafuelmaster_Chart2[".importFields"][] = "Fleet";
$tdatafuelmaster_Chart2[".importFields"][] = "LastMileage";
$tdatafuelmaster_Chart2[".importFields"][] = "Economy";
$tdatafuelmaster_Chart2[".importFields"][] = "FillType";
$tdatafuelmaster_Chart2[".importFields"][] = "CouponNo";
$tdatafuelmaster_Chart2[".importFields"][] = "Driver";

$tdatafuelmaster_Chart2[".printFields"] = array();
$tdatafuelmaster_Chart2[".printFields"][] = "Id";
$tdatafuelmaster_Chart2[".printFields"][] = "SystemDate";
$tdatafuelmaster_Chart2[".printFields"][] = "FuelDate";
$tdatafuelmaster_Chart2[".printFields"][] = "Vehicle";
$tdatafuelmaster_Chart2[".printFields"][] = "MeterReading";
$tdatafuelmaster_Chart2[".printFields"][] = "LitersPumped";
$tdatafuelmaster_Chart2[".printFields"][] = "PricePerLiter";
$tdatafuelmaster_Chart2[".printFields"][] = "FuelStation";
$tdatafuelmaster_Chart2[".printFields"][] = "Fleet";
$tdatafuelmaster_Chart2[".printFields"][] = "LastMileage";
$tdatafuelmaster_Chart2[".printFields"][] = "Economy";
$tdatafuelmaster_Chart2[".printFields"][] = "FillType";
$tdatafuelmaster_Chart2[".printFields"][] = "CouponNo";
$tdatafuelmaster_Chart2[".printFields"][] = "Driver";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart2","Id");
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




	$tdatafuelmaster_Chart2["Id"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart2","SystemDate");
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




	$tdatafuelmaster_Chart2["SystemDate"] = $fdata;
//	FuelDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FuelDate";
	$fdata["GoodName"] = "FuelDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart2","FuelDate");
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




	$tdatafuelmaster_Chart2["FuelDate"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart2","Vehicle");
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




	$tdatafuelmaster_Chart2["Vehicle"] = $fdata;
//	MeterReading
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MeterReading";
	$fdata["GoodName"] = "MeterReading";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart2","MeterReading");
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




	$tdatafuelmaster_Chart2["MeterReading"] = $fdata;
//	LitersPumped
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LitersPumped";
	$fdata["GoodName"] = "LitersPumped";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart2","LitersPumped");
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




	$tdatafuelmaster_Chart2["LitersPumped"] = $fdata;
//	PricePerLiter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PricePerLiter";
	$fdata["GoodName"] = "PricePerLiter";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart2","PricePerLiter");
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




	$tdatafuelmaster_Chart2["PricePerLiter"] = $fdata;
//	FuelStation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FuelStation";
	$fdata["GoodName"] = "FuelStation";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart2","FuelStation");
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




	$tdatafuelmaster_Chart2["FuelStation"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart2","Fleet");
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




	$tdatafuelmaster_Chart2["Fleet"] = $fdata;
//	LastMileage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "LastMileage";
	$fdata["GoodName"] = "LastMileage";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart2","LastMileage");
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




	$tdatafuelmaster_Chart2["LastMileage"] = $fdata;
//	Economy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Economy";
	$fdata["GoodName"] = "Economy";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart2","Economy");
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




	$tdatafuelmaster_Chart2["Economy"] = $fdata;
//	FillType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FillType";
	$fdata["GoodName"] = "FillType";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart2","FillType");
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




	$tdatafuelmaster_Chart2["FillType"] = $fdata;
//	CouponNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "CouponNo";
	$fdata["GoodName"] = "CouponNo";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart2","CouponNo");
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




	$tdatafuelmaster_Chart2["CouponNo"] = $fdata;
//	Driver
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Driver";
	$fdata["GoodName"] = "Driver";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster_Chart2","Driver");
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




	$tdatafuelmaster_Chart2["Driver"] = $fdata;

	$tdatafuelmaster_Chart2[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">fuelmaster Chart2</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatafuelmaster_Chart2[".chartXml"] .= '<attr value="0">
			<attr value="name">Id</attr>';
	$tdatafuelmaster_Chart2[".chartXml"] .= '</attr>';
	$tdatafuelmaster_Chart2[".chartXml"] .= '<attr value="1">
		<attr value="name">SystemDate</attr>
	</attr>';
	$tdatafuelmaster_Chart2[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatafuelmaster_Chart2[".chartXml"] .= '<attr value="head">'.xmlencode("fuelmaster Chart2").'</attr>
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
$tdatafuelmaster_Chart2[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatafuelmaster_Chart2[".chartXml"] .= '<attr value="0">
		<attr value="name">Id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart2","Id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart2[".chartXml"] .= '<attr value="1">
		<attr value="name">SystemDate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart2","SystemDate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart2[".chartXml"] .= '<attr value="2">
		<attr value="name">FuelDate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart2","FuelDate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart2[".chartXml"] .= '<attr value="3">
		<attr value="name">Vehicle</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart2","Vehicle")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart2[".chartXml"] .= '<attr value="4">
		<attr value="name">MeterReading</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart2","MeterReading")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart2[".chartXml"] .= '<attr value="5">
		<attr value="name">LitersPumped</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart2","LitersPumped")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart2[".chartXml"] .= '<attr value="6">
		<attr value="name">PricePerLiter</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart2","PricePerLiter")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart2[".chartXml"] .= '<attr value="7">
		<attr value="name">FuelStation</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart2","FuelStation")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart2[".chartXml"] .= '<attr value="8">
		<attr value="name">Fleet</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart2","Fleet")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart2[".chartXml"] .= '<attr value="9">
		<attr value="name">LastMileage</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart2","LastMileage")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart2[".chartXml"] .= '<attr value="10">
		<attr value="name">Economy</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart2","Economy")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart2[".chartXml"] .= '<attr value="11">
		<attr value="name">FillType</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart2","FillType")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart2[".chartXml"] .= '<attr value="12">
		<attr value="name">CouponNo</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart2","CouponNo")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafuelmaster_Chart2[".chartXml"] .= '<attr value="13">
		<attr value="name">Driver</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("fuelmaster_Chart2","Driver")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatafuelmaster_Chart2[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">fuelmaster Chart2</attr>
<attr value="short_table_name">fuelmaster_Chart2</attr>
</attr>

</chart>';

$tables_data["fuelmaster Chart2"]=&$tdatafuelmaster_Chart2;
$field_labels["fuelmaster_Chart2"] = &$fieldLabelsfuelmaster_Chart2;
$fieldToolTips["fuelmaster_Chart2"] = &$fieldToolTipsfuelmaster_Chart2;
$page_titles["fuelmaster_Chart2"] = &$pageTitlesfuelmaster_Chart2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["fuelmaster Chart2"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["fuelmaster Chart2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_fuelmaster_Chart2()
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
	"m_srcTableName" => "fuelmaster Chart2"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "fuelmaster Chart2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart2"
));

$proto8["m_sql"] = "SystemDate";
$proto8["m_srcTableName"] = "fuelmaster Chart2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart2"
));

$proto10["m_sql"] = "FuelDate";
$proto10["m_srcTableName"] = "fuelmaster Chart2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart2"
));

$proto12["m_sql"] = "Vehicle";
$proto12["m_srcTableName"] = "fuelmaster Chart2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MeterReading",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart2"
));

$proto14["m_sql"] = "MeterReading";
$proto14["m_srcTableName"] = "fuelmaster Chart2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LitersPumped",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart2"
));

$proto16["m_sql"] = "LitersPumped";
$proto16["m_srcTableName"] = "fuelmaster Chart2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PricePerLiter",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart2"
));

$proto18["m_sql"] = "PricePerLiter";
$proto18["m_srcTableName"] = "fuelmaster Chart2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelStation",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart2"
));

$proto20["m_sql"] = "FuelStation";
$proto20["m_srcTableName"] = "fuelmaster Chart2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart2"
));

$proto22["m_sql"] = "Fleet";
$proto22["m_srcTableName"] = "fuelmaster Chart2";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "LastMileage",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart2"
));

$proto24["m_sql"] = "LastMileage";
$proto24["m_srcTableName"] = "fuelmaster Chart2";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Economy",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart2"
));

$proto26["m_sql"] = "Economy";
$proto26["m_srcTableName"] = "fuelmaster Chart2";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "FillType",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart2"
));

$proto28["m_sql"] = "FillType";
$proto28["m_srcTableName"] = "fuelmaster Chart2";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "CouponNo",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart2"
));

$proto30["m_sql"] = "CouponNo";
$proto30["m_srcTableName"] = "fuelmaster Chart2";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Driver",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster Chart2"
));

$proto32["m_sql"] = "Driver";
$proto32["m_srcTableName"] = "fuelmaster Chart2";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "fuelmaster";
$proto35["m_srcTableName"] = "fuelmaster Chart2";
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
$proto34["m_srcTableName"] = "fuelmaster Chart2";
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
$proto0["m_srcTableName"]="fuelmaster Chart2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fuelmaster_Chart2 = createSqlQuery_fuelmaster_Chart2();


	
					
;

														

$tdatafuelmaster_Chart2[".sqlquery"] = $queryData_fuelmaster_Chart2;

$tableEvents["fuelmaster Chart2"] = new eventsBase;
$tdatafuelmaster_Chart2[".hasEvents"] = false;

?>