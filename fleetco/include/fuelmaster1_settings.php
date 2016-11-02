<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafuelmaster1 = array();	
	$tdatafuelmaster1[".truncateText"] = true;
	$tdatafuelmaster1[".NumberOfChars"] = 80; 
	$tdatafuelmaster1[".ShortName"] = "fuelmaster1";
	$tdatafuelmaster1[".OwnerID"] = "";
	$tdatafuelmaster1[".OriginalTable"] = "fuelmaster";

//	field labels
$fieldLabelsfuelmaster1 = array();
$fieldToolTipsfuelmaster1 = array();
$pageTitlesfuelmaster1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfuelmaster1["English"] = array();
	$fieldToolTipsfuelmaster1["English"] = array();
	$pageTitlesfuelmaster1["English"] = array();
	if (count($fieldToolTipsfuelmaster1["English"]))
		$tdatafuelmaster1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfuelmaster1[""] = array();
	$fieldToolTipsfuelmaster1[""] = array();
	$pageTitlesfuelmaster1[""] = array();
	if (count($fieldToolTipsfuelmaster1[""]))
		$tdatafuelmaster1[".isUseToolTips"] = true;
}
	
	
	$tdatafuelmaster1[".NCSearch"] = true;



$tdatafuelmaster1[".shortTableName"] = "fuelmaster1";
$tdatafuelmaster1[".nSecOptions"] = 0;
$tdatafuelmaster1[".recsPerRowList"] = 1;
$tdatafuelmaster1[".recsPerRowPrint"] = 1;
$tdatafuelmaster1[".mainTableOwnerID"] = "";
$tdatafuelmaster1[".moveNext"] = 1;
$tdatafuelmaster1[".entityType"] = 1;

$tdatafuelmaster1[".strOriginalTableName"] = "fuelmaster";




$tdatafuelmaster1[".showAddInPopup"] = false;

$tdatafuelmaster1[".showEditInPopup"] = false;

$tdatafuelmaster1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafuelmaster1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafuelmaster1[".fieldsForRegister"] = array();

$tdatafuelmaster1[".listAjax"] = false;

	$tdatafuelmaster1[".audit"] = false;

	$tdatafuelmaster1[".locking"] = false;

$tdatafuelmaster1[".edit"] = true;
$tdatafuelmaster1[".afterEditAction"] = 1;
$tdatafuelmaster1[".closePopupAfterEdit"] = 1;
$tdatafuelmaster1[".afterEditActionDetTable"] = "";

$tdatafuelmaster1[".add"] = true;
$tdatafuelmaster1[".afterAddAction"] = 1;
$tdatafuelmaster1[".closePopupAfterAdd"] = 1;
$tdatafuelmaster1[".afterAddActionDetTable"] = "";

$tdatafuelmaster1[".list"] = true;

$tdatafuelmaster1[".inlineEdit"] = true;
$tdatafuelmaster1[".inlineAdd"] = true;
$tdatafuelmaster1[".view"] = true;

$tdatafuelmaster1[".import"] = true;

$tdatafuelmaster1[".exportTo"] = true;

$tdatafuelmaster1[".printFriendly"] = true;

$tdatafuelmaster1[".delete"] = true;

$tdatafuelmaster1[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafuelmaster1[".searchSaving"] = false;
//

$tdatafuelmaster1[".showSearchPanel"] = true;
		$tdatafuelmaster1[".flexibleSearch"] = true;		

if (isMobile())
	$tdatafuelmaster1[".isUseAjaxSuggest"] = false;
else 
	$tdatafuelmaster1[".isUseAjaxSuggest"] = true;

$tdatafuelmaster1[".rowHighlite"] = true;



$tdatafuelmaster1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafuelmaster1[".isUseTimeForSearch"] = false;





$tdatafuelmaster1[".allSearchFields"] = array();
$tdatafuelmaster1[".filterFields"] = array();
$tdatafuelmaster1[".requiredSearchFields"] = array();

$tdatafuelmaster1[".allSearchFields"][] = "ID";
	$tdatafuelmaster1[".allSearchFields"][] = "RegNo";
	$tdatafuelmaster1[".allSearchFields"][] = "Fleet";
	$tdatafuelmaster1[".allSearchFields"][] = "Type";
	$tdatafuelmaster1[".allSearchFields"][] = "RegDate";
	$tdatafuelmaster1[".allSearchFields"][] = "Cost";
	$tdatafuelmaster1[".allSearchFields"][] = "DriverAsigned";
	$tdatafuelmaster1[".allSearchFields"][] = "Make";
	$tdatafuelmaster1[".allSearchFields"][] = "Model";
	$tdatafuelmaster1[".allSearchFields"][] = "InsuranceDue";
	$tdatafuelmaster1[".allSearchFields"][] = "LastMileage";
	$tdatafuelmaster1[".allSearchFields"][] = "MeterReading";
	

$tdatafuelmaster1[".googleLikeFields"] = array();
$tdatafuelmaster1[".googleLikeFields"][] = "ID";
$tdatafuelmaster1[".googleLikeFields"][] = "RegNo";
$tdatafuelmaster1[".googleLikeFields"][] = "Fleet";
$tdatafuelmaster1[".googleLikeFields"][] = "Type";
$tdatafuelmaster1[".googleLikeFields"][] = "RegDate";
$tdatafuelmaster1[".googleLikeFields"][] = "Cost";
$tdatafuelmaster1[".googleLikeFields"][] = "DriverAsigned";
$tdatafuelmaster1[".googleLikeFields"][] = "Make";
$tdatafuelmaster1[".googleLikeFields"][] = "Model";
$tdatafuelmaster1[".googleLikeFields"][] = "InsuranceDue";
$tdatafuelmaster1[".googleLikeFields"][] = "LastMileage";
$tdatafuelmaster1[".googleLikeFields"][] = "MeterReading";


$tdatafuelmaster1[".advSearchFields"] = array();
$tdatafuelmaster1[".advSearchFields"][] = "ID";
$tdatafuelmaster1[".advSearchFields"][] = "RegNo";
$tdatafuelmaster1[".advSearchFields"][] = "Fleet";
$tdatafuelmaster1[".advSearchFields"][] = "Type";
$tdatafuelmaster1[".advSearchFields"][] = "RegDate";
$tdatafuelmaster1[".advSearchFields"][] = "Cost";
$tdatafuelmaster1[".advSearchFields"][] = "DriverAsigned";
$tdatafuelmaster1[".advSearchFields"][] = "Make";
$tdatafuelmaster1[".advSearchFields"][] = "Model";
$tdatafuelmaster1[".advSearchFields"][] = "InsuranceDue";
$tdatafuelmaster1[".advSearchFields"][] = "LastMileage";
$tdatafuelmaster1[".advSearchFields"][] = "MeterReading";

$tdatafuelmaster1[".tableType"] = "list";

$tdatafuelmaster1[".printerPageOrientation"] = 0;
$tdatafuelmaster1[".nPrinterPageScale"] = 100;

$tdatafuelmaster1[".nPrinterSplitRecords"] = 40;

$tdatafuelmaster1[".nPrinterPDFSplitRecords"] = 40;



$tdatafuelmaster1[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatafuelmaster1[".pageSize"] = 20;

$tdatafuelmaster1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafuelmaster1[".strOrderBy"] = $tstrOrderBy;

$tdatafuelmaster1[".orderindexes"] = array();

$tdatafuelmaster1[".sqlHead"] = "SELECT vehiclemaster.ID,  vehiclemaster.RegNo,  vehiclemaster.Fleet,  vehiclemaster.`Type`,  vehiclemaster.RegDate,  vehiclemaster.Cost,  vehiclemaster.DriverAsigned,  vehiclemaster.Make,  vehiclemaster.Model,  vehiclemaster.InsuranceDue,  fuelmaster.LastMileage,  fuelmaster.MeterReading";
$tdatafuelmaster1[".sqlFrom"] = "FROM fuelmaster  LEFT OUTER JOIN vehiclemaster ON fuelmaster.Vehicle = vehiclemaster.RegNo";
$tdatafuelmaster1[".sqlWhereExpr"] = "";
$tdatafuelmaster1[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafuelmaster1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafuelmaster1[".arrGroupsPerPage"] = $arrGPP;

$tdatafuelmaster1[".highlightSearchResults"] = true;

$tableKeysfuelmaster1 = array();
$tableKeysfuelmaster1[] = "Id";
$tdatafuelmaster1[".Keys"] = $tableKeysfuelmaster1;

$tdatafuelmaster1[".listFields"] = array();
$tdatafuelmaster1[".listFields"][] = "ID";
$tdatafuelmaster1[".listFields"][] = "RegNo";
$tdatafuelmaster1[".listFields"][] = "Fleet";
$tdatafuelmaster1[".listFields"][] = "Type";
$tdatafuelmaster1[".listFields"][] = "RegDate";
$tdatafuelmaster1[".listFields"][] = "Cost";
$tdatafuelmaster1[".listFields"][] = "DriverAsigned";
$tdatafuelmaster1[".listFields"][] = "Make";
$tdatafuelmaster1[".listFields"][] = "Model";
$tdatafuelmaster1[".listFields"][] = "InsuranceDue";
$tdatafuelmaster1[".listFields"][] = "LastMileage";
$tdatafuelmaster1[".listFields"][] = "MeterReading";

$tdatafuelmaster1[".hideMobileList"] = array();


$tdatafuelmaster1[".viewFields"] = array();
$tdatafuelmaster1[".viewFields"][] = "ID";
$tdatafuelmaster1[".viewFields"][] = "RegNo";
$tdatafuelmaster1[".viewFields"][] = "Fleet";
$tdatafuelmaster1[".viewFields"][] = "Type";
$tdatafuelmaster1[".viewFields"][] = "RegDate";
$tdatafuelmaster1[".viewFields"][] = "Cost";
$tdatafuelmaster1[".viewFields"][] = "DriverAsigned";
$tdatafuelmaster1[".viewFields"][] = "Make";
$tdatafuelmaster1[".viewFields"][] = "Model";
$tdatafuelmaster1[".viewFields"][] = "InsuranceDue";
$tdatafuelmaster1[".viewFields"][] = "LastMileage";
$tdatafuelmaster1[".viewFields"][] = "MeterReading";

$tdatafuelmaster1[".addFields"] = array();
$tdatafuelmaster1[".addFields"][] = "Fleet";
$tdatafuelmaster1[".addFields"][] = "LastMileage";
$tdatafuelmaster1[".addFields"][] = "MeterReading";

$tdatafuelmaster1[".masterListFields"] = array();
$tdatafuelmaster1[".masterListFields"][] = "ID";
$tdatafuelmaster1[".masterListFields"][] = "RegNo";
$tdatafuelmaster1[".masterListFields"][] = "Fleet";
$tdatafuelmaster1[".masterListFields"][] = "Type";
$tdatafuelmaster1[".masterListFields"][] = "RegDate";
$tdatafuelmaster1[".masterListFields"][] = "Cost";
$tdatafuelmaster1[".masterListFields"][] = "DriverAsigned";
$tdatafuelmaster1[".masterListFields"][] = "Make";
$tdatafuelmaster1[".masterListFields"][] = "Model";
$tdatafuelmaster1[".masterListFields"][] = "InsuranceDue";
$tdatafuelmaster1[".masterListFields"][] = "LastMileage";
$tdatafuelmaster1[".masterListFields"][] = "MeterReading";

$tdatafuelmaster1[".inlineAddFields"] = array();
$tdatafuelmaster1[".inlineAddFields"][] = "Fleet";
$tdatafuelmaster1[".inlineAddFields"][] = "LastMileage";
$tdatafuelmaster1[".inlineAddFields"][] = "MeterReading";

$tdatafuelmaster1[".editFields"] = array();
$tdatafuelmaster1[".editFields"][] = "Fleet";
$tdatafuelmaster1[".editFields"][] = "LastMileage";
$tdatafuelmaster1[".editFields"][] = "MeterReading";

$tdatafuelmaster1[".inlineEditFields"] = array();
$tdatafuelmaster1[".inlineEditFields"][] = "Fleet";
$tdatafuelmaster1[".inlineEditFields"][] = "LastMileage";
$tdatafuelmaster1[".inlineEditFields"][] = "MeterReading";

$tdatafuelmaster1[".exportFields"] = array();
$tdatafuelmaster1[".exportFields"][] = "ID";
$tdatafuelmaster1[".exportFields"][] = "RegNo";
$tdatafuelmaster1[".exportFields"][] = "Fleet";
$tdatafuelmaster1[".exportFields"][] = "Type";
$tdatafuelmaster1[".exportFields"][] = "RegDate";
$tdatafuelmaster1[".exportFields"][] = "Cost";
$tdatafuelmaster1[".exportFields"][] = "DriverAsigned";
$tdatafuelmaster1[".exportFields"][] = "Make";
$tdatafuelmaster1[".exportFields"][] = "Model";
$tdatafuelmaster1[".exportFields"][] = "InsuranceDue";
$tdatafuelmaster1[".exportFields"][] = "LastMileage";
$tdatafuelmaster1[".exportFields"][] = "MeterReading";

$tdatafuelmaster1[".importFields"] = array();
$tdatafuelmaster1[".importFields"][] = "ID";
$tdatafuelmaster1[".importFields"][] = "RegNo";
$tdatafuelmaster1[".importFields"][] = "Fleet";
$tdatafuelmaster1[".importFields"][] = "Type";
$tdatafuelmaster1[".importFields"][] = "RegDate";
$tdatafuelmaster1[".importFields"][] = "Cost";
$tdatafuelmaster1[".importFields"][] = "DriverAsigned";
$tdatafuelmaster1[".importFields"][] = "Make";
$tdatafuelmaster1[".importFields"][] = "Model";
$tdatafuelmaster1[".importFields"][] = "InsuranceDue";
$tdatafuelmaster1[".importFields"][] = "LastMileage";
$tdatafuelmaster1[".importFields"][] = "MeterReading";

$tdatafuelmaster1[".printFields"] = array();
$tdatafuelmaster1[".printFields"][] = "ID";
$tdatafuelmaster1[".printFields"][] = "RegNo";
$tdatafuelmaster1[".printFields"][] = "Fleet";
$tdatafuelmaster1[".printFields"][] = "Type";
$tdatafuelmaster1[".printFields"][] = "RegDate";
$tdatafuelmaster1[".printFields"][] = "Cost";
$tdatafuelmaster1[".printFields"][] = "DriverAsigned";
$tdatafuelmaster1[".printFields"][] = "Make";
$tdatafuelmaster1[".printFields"][] = "Model";
$tdatafuelmaster1[".printFields"][] = "InsuranceDue";
$tdatafuelmaster1[".printFields"][] = "LastMileage";
$tdatafuelmaster1[".printFields"][] = "MeterReading";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster1","ID"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vehiclemaster.ID";
	
		
		
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

	

	
	$tdatafuelmaster1["ID"] = $fdata;
//	RegNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RegNo";
	$fdata["GoodName"] = "RegNo";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster1","RegNo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "RegNo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vehiclemaster.RegNo";
	
		
		
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

	

	
	$tdatafuelmaster1["RegNo"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster1","Fleet"); 
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
	
		$fdata["strField"] = "Fleet"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vehiclemaster.Fleet";
	
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafuelmaster1["Fleet"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster1","Type"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Type"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vehiclemaster.`Type`";
	
		
		
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

	

	
	$tdatafuelmaster1["Type"] = $fdata;
//	RegDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RegDate";
	$fdata["GoodName"] = "RegDate";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster1","RegDate"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "RegDate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vehiclemaster.RegDate";
	
		
		
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

	

	
	$tdatafuelmaster1["RegDate"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster1","Cost"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Cost"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vehiclemaster.Cost";
	
		
		
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

	

	
	$tdatafuelmaster1["Cost"] = $fdata;
//	DriverAsigned
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DriverAsigned";
	$fdata["GoodName"] = "DriverAsigned";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster1","DriverAsigned"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DriverAsigned"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vehiclemaster.DriverAsigned";
	
		
		
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

	

	
	$tdatafuelmaster1["DriverAsigned"] = $fdata;
//	Make
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Make";
	$fdata["GoodName"] = "Make";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster1","Make"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Make"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vehiclemaster.Make";
	
		
		
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

	

	
	$tdatafuelmaster1["Make"] = $fdata;
//	Model
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Model";
	$fdata["GoodName"] = "Model";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster1","Model"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Model"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vehiclemaster.Model";
	
		
		
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

	

	
	$tdatafuelmaster1["Model"] = $fdata;
//	InsuranceDue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "InsuranceDue";
	$fdata["GoodName"] = "InsuranceDue";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster1","InsuranceDue"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "InsuranceDue"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vehiclemaster.InsuranceDue";
	
		
		
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

	

	
	$tdatafuelmaster1["InsuranceDue"] = $fdata;
//	LastMileage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LastMileage";
	$fdata["GoodName"] = "LastMileage";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster1","LastMileage"); 
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
	$fdata["FullName"] = "fuelmaster.LastMileage";
	
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafuelmaster1["LastMileage"] = $fdata;
//	MeterReading
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "MeterReading";
	$fdata["GoodName"] = "MeterReading";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster1","MeterReading"); 
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
	
		$fdata["strField"] = "MeterReading"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fuelmaster.MeterReading";
	
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafuelmaster1["MeterReading"] = $fdata;

	
$tables_data["fuelmaster1"]=&$tdatafuelmaster1;
$field_labels["fuelmaster1"] = &$fieldLabelsfuelmaster1;
$fieldToolTips["fuelmaster1"] = &$fieldToolTipsfuelmaster1;
$page_titles["fuelmaster1"] = &$pageTitlesfuelmaster1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["fuelmaster1"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["fuelmaster1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_fuelmaster1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "vehiclemaster.ID,  vehiclemaster.RegNo,  vehiclemaster.Fleet,  vehiclemaster.`Type`,  vehiclemaster.RegDate,  vehiclemaster.Cost,  vehiclemaster.DriverAsigned,  vehiclemaster.Make,  vehiclemaster.Model,  vehiclemaster.InsuranceDue,  fuelmaster.LastMileage,  fuelmaster.MeterReading";
$proto0["m_strFrom"] = "FROM fuelmaster  LEFT OUTER JOIN vehiclemaster ON fuelmaster.Vehicle = vehiclemaster.RegNo";
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
	"m_strName" => "ID",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "fuelmaster1"
));

$proto5["m_sql"] = "vehiclemaster.ID";
$proto5["m_srcTableName"] = "fuelmaster1";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "fuelmaster1"
));

$proto7["m_sql"] = "vehiclemaster.RegNo";
$proto7["m_srcTableName"] = "fuelmaster1";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "fuelmaster1"
));

$proto9["m_sql"] = "vehiclemaster.Fleet";
$proto9["m_srcTableName"] = "fuelmaster1";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "fuelmaster1"
));

$proto11["m_sql"] = "vehiclemaster.`Type`";
$proto11["m_srcTableName"] = "fuelmaster1";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "RegDate",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "fuelmaster1"
));

$proto13["m_sql"] = "vehiclemaster.RegDate";
$proto13["m_srcTableName"] = "fuelmaster1";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "fuelmaster1"
));

$proto15["m_sql"] = "vehiclemaster.Cost";
$proto15["m_srcTableName"] = "fuelmaster1";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "DriverAsigned",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "fuelmaster1"
));

$proto17["m_sql"] = "vehiclemaster.DriverAsigned";
$proto17["m_srcTableName"] = "fuelmaster1";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Make",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "fuelmaster1"
));

$proto19["m_sql"] = "vehiclemaster.Make";
$proto19["m_srcTableName"] = "fuelmaster1";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Model",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "fuelmaster1"
));

$proto21["m_sql"] = "vehiclemaster.Model";
$proto21["m_srcTableName"] = "fuelmaster1";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "InsuranceDue",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "fuelmaster1"
));

$proto23["m_sql"] = "vehiclemaster.InsuranceDue";
$proto23["m_srcTableName"] = "fuelmaster1";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "LastMileage",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster1"
));

$proto25["m_sql"] = "fuelmaster.LastMileage";
$proto25["m_srcTableName"] = "fuelmaster1";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "MeterReading",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster1"
));

$proto27["m_sql"] = "fuelmaster.MeterReading";
$proto27["m_srcTableName"] = "fuelmaster1";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "fuelmaster";
$proto30["m_srcTableName"] = "fuelmaster1";
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
$proto29["m_srcTableName"] = "fuelmaster1";
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
												$proto33=array();
$proto33["m_link"] = "SQLL_LEFTJOIN";
			$proto34=array();
$proto34["m_strName"] = "vehiclemaster";
$proto34["m_srcTableName"] = "fuelmaster1";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "ID";
$proto34["m_columns"][] = "RegNo";
$proto34["m_columns"][] = "Fleet";
$proto34["m_columns"][] = "Type";
$proto34["m_columns"][] = "RegDate";
$proto34["m_columns"][] = "Cost";
$proto34["m_columns"][] = "DriverAsigned";
$proto34["m_columns"][] = "Make";
$proto34["m_columns"][] = "Model";
$proto34["m_columns"][] = "InsuranceDue";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "LEFT OUTER JOIN vehiclemaster ON fuelmaster.Vehicle = vehiclemaster.RegNo";
$proto33["m_alias"] = "";
$proto33["m_srcTableName"] = "fuelmaster1";
$proto35=array();
$proto35["m_sql"] = "fuelmaster.Vehicle = vehiclemaster.RegNo";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster1"
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "= vehiclemaster.RegNo";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="fuelmaster1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fuelmaster1 = createSqlQuery_fuelmaster1();


	
												
	
$tdatafuelmaster1[".sqlquery"] = $queryData_fuelmaster1;

$tableEvents["fuelmaster1"] = new eventsBase;
$tdatafuelmaster1[".hasEvents"] = false;

?>