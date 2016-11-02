<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavehiclemaster_fuel1 = array();	
	$tdatavehiclemaster_fuel1[".truncateText"] = true;
	$tdatavehiclemaster_fuel1[".NumberOfChars"] = 80; 
	$tdatavehiclemaster_fuel1[".ShortName"] = "vehiclemaster_fuel1";
	$tdatavehiclemaster_fuel1[".OwnerID"] = "";
	$tdatavehiclemaster_fuel1[".OriginalTable"] = "vehiclemaster";

//	field labels
$fieldLabelsvehiclemaster_fuel1 = array();
$fieldToolTipsvehiclemaster_fuel1 = array();
$pageTitlesvehiclemaster_fuel1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvehiclemaster_fuel1["English"] = array();
	$fieldToolTipsvehiclemaster_fuel1["English"] = array();
	$pageTitlesvehiclemaster_fuel1["English"] = array();
	$fieldLabelsvehiclemaster_fuel1["English"]["ID"] = "ID";
	$fieldToolTipsvehiclemaster_fuel1["English"]["ID"] = "";
	$fieldLabelsvehiclemaster_fuel1["English"]["RegNo"] = "Reg No";
	$fieldToolTipsvehiclemaster_fuel1["English"]["RegNo"] = "";
	$fieldLabelsvehiclemaster_fuel1["English"]["Fleet"] = "Fleet";
	$fieldToolTipsvehiclemaster_fuel1["English"]["Fleet"] = "";
	$fieldLabelsvehiclemaster_fuel1["English"]["Type"] = "Type";
	$fieldToolTipsvehiclemaster_fuel1["English"]["Type"] = "";
	$fieldLabelsvehiclemaster_fuel1["English"]["RegDate"] = "Reg Date";
	$fieldToolTipsvehiclemaster_fuel1["English"]["RegDate"] = "";
	$fieldLabelsvehiclemaster_fuel1["English"]["Cost"] = "Cost";
	$fieldToolTipsvehiclemaster_fuel1["English"]["Cost"] = "";
	$fieldLabelsvehiclemaster_fuel1["English"]["DriverAsigned"] = "Driver Asigned";
	$fieldToolTipsvehiclemaster_fuel1["English"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster_fuel1["English"]["Make"] = "Make";
	$fieldToolTipsvehiclemaster_fuel1["English"]["Make"] = "";
	$fieldLabelsvehiclemaster_fuel1["English"]["Model"] = "Model";
	$fieldToolTipsvehiclemaster_fuel1["English"]["Model"] = "";
	$fieldLabelsvehiclemaster_fuel1["English"]["InsuranceDue"] = "Insurance Due";
	$fieldToolTipsvehiclemaster_fuel1["English"]["InsuranceDue"] = "";
	$fieldLabelsvehiclemaster_fuel1["English"]["MAX_LastMileage_"] = "MAX(Last Mileage)";
	$fieldToolTipsvehiclemaster_fuel1["English"]["MAX(LastMileage)"] = "";
	if (count($fieldToolTipsvehiclemaster_fuel1["English"]))
		$tdatavehiclemaster_fuel1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvehiclemaster_fuel1[""] = array();
	$fieldToolTipsvehiclemaster_fuel1[""] = array();
	$pageTitlesvehiclemaster_fuel1[""] = array();
	if (count($fieldToolTipsvehiclemaster_fuel1[""]))
		$tdatavehiclemaster_fuel1[".isUseToolTips"] = true;
}
	
	
	$tdatavehiclemaster_fuel1[".NCSearch"] = true;



$tdatavehiclemaster_fuel1[".shortTableName"] = "vehiclemaster_fuel1";
$tdatavehiclemaster_fuel1[".nSecOptions"] = 0;
$tdatavehiclemaster_fuel1[".recsPerRowList"] = 1;
$tdatavehiclemaster_fuel1[".recsPerRowPrint"] = 1;
$tdatavehiclemaster_fuel1[".mainTableOwnerID"] = "";
$tdatavehiclemaster_fuel1[".moveNext"] = 1;
$tdatavehiclemaster_fuel1[".entityType"] = 1;

$tdatavehiclemaster_fuel1[".strOriginalTableName"] = "vehiclemaster";




$tdatavehiclemaster_fuel1[".showAddInPopup"] = false;

$tdatavehiclemaster_fuel1[".showEditInPopup"] = false;

$tdatavehiclemaster_fuel1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavehiclemaster_fuel1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavehiclemaster_fuel1[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatavehiclemaster_fuel1[".listAjax"] = true;
else 
	$tdatavehiclemaster_fuel1[".listAjax"] = false;

	$tdatavehiclemaster_fuel1[".audit"] = false;

	$tdatavehiclemaster_fuel1[".locking"] = false;

$tdatavehiclemaster_fuel1[".edit"] = true;
$tdatavehiclemaster_fuel1[".afterEditAction"] = 1;
$tdatavehiclemaster_fuel1[".closePopupAfterEdit"] = 1;
$tdatavehiclemaster_fuel1[".afterEditActionDetTable"] = "";

$tdatavehiclemaster_fuel1[".add"] = true;
$tdatavehiclemaster_fuel1[".afterAddAction"] = 1;
$tdatavehiclemaster_fuel1[".closePopupAfterAdd"] = 1;
$tdatavehiclemaster_fuel1[".afterAddActionDetTable"] = "";

$tdatavehiclemaster_fuel1[".list"] = true;

$tdatavehiclemaster_fuel1[".view"] = true;

$tdatavehiclemaster_fuel1[".import"] = true;

$tdatavehiclemaster_fuel1[".exportTo"] = true;

$tdatavehiclemaster_fuel1[".printFriendly"] = true;

$tdatavehiclemaster_fuel1[".delete"] = true;

$tdatavehiclemaster_fuel1[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatavehiclemaster_fuel1[".searchSaving"] = false;
//

$tdatavehiclemaster_fuel1[".showSearchPanel"] = true;
		$tdatavehiclemaster_fuel1[".flexibleSearch"] = true;		

if (isMobile())
	$tdatavehiclemaster_fuel1[".isUseAjaxSuggest"] = false;
else 
	$tdatavehiclemaster_fuel1[".isUseAjaxSuggest"] = true;

$tdatavehiclemaster_fuel1[".rowHighlite"] = true;



$tdatavehiclemaster_fuel1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavehiclemaster_fuel1[".isUseTimeForSearch"] = false;





$tdatavehiclemaster_fuel1[".allSearchFields"] = array();
$tdatavehiclemaster_fuel1[".filterFields"] = array();
$tdatavehiclemaster_fuel1[".requiredSearchFields"] = array();

$tdatavehiclemaster_fuel1[".allSearchFields"][] = "MAX(LastMileage)";
	$tdatavehiclemaster_fuel1[".allSearchFields"][] = "Fleet";
	$tdatavehiclemaster_fuel1[".allSearchFields"][] = "Type";
	$tdatavehiclemaster_fuel1[".allSearchFields"][] = "RegDate";
	$tdatavehiclemaster_fuel1[".allSearchFields"][] = "RegNo";
	$tdatavehiclemaster_fuel1[".allSearchFields"][] = "Make";
	$tdatavehiclemaster_fuel1[".allSearchFields"][] = "Model";
	$tdatavehiclemaster_fuel1[".allSearchFields"][] = "Cost";
	$tdatavehiclemaster_fuel1[".allSearchFields"][] = "DriverAsigned";
	$tdatavehiclemaster_fuel1[".allSearchFields"][] = "InsuranceDue";
	

$tdatavehiclemaster_fuel1[".googleLikeFields"] = array();
$tdatavehiclemaster_fuel1[".googleLikeFields"][] = "ID";
$tdatavehiclemaster_fuel1[".googleLikeFields"][] = "RegNo";
$tdatavehiclemaster_fuel1[".googleLikeFields"][] = "Fleet";
$tdatavehiclemaster_fuel1[".googleLikeFields"][] = "Type";
$tdatavehiclemaster_fuel1[".googleLikeFields"][] = "RegDate";
$tdatavehiclemaster_fuel1[".googleLikeFields"][] = "Cost";
$tdatavehiclemaster_fuel1[".googleLikeFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel1[".googleLikeFields"][] = "Make";
$tdatavehiclemaster_fuel1[".googleLikeFields"][] = "Model";
$tdatavehiclemaster_fuel1[".googleLikeFields"][] = "InsuranceDue";
$tdatavehiclemaster_fuel1[".googleLikeFields"][] = "MAX(LastMileage)";


$tdatavehiclemaster_fuel1[".advSearchFields"] = array();
$tdatavehiclemaster_fuel1[".advSearchFields"][] = "MAX(LastMileage)";
$tdatavehiclemaster_fuel1[".advSearchFields"][] = "Fleet";
$tdatavehiclemaster_fuel1[".advSearchFields"][] = "Type";
$tdatavehiclemaster_fuel1[".advSearchFields"][] = "RegDate";
$tdatavehiclemaster_fuel1[".advSearchFields"][] = "RegNo";
$tdatavehiclemaster_fuel1[".advSearchFields"][] = "Make";
$tdatavehiclemaster_fuel1[".advSearchFields"][] = "Model";
$tdatavehiclemaster_fuel1[".advSearchFields"][] = "Cost";
$tdatavehiclemaster_fuel1[".advSearchFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel1[".advSearchFields"][] = "InsuranceDue";

$tdatavehiclemaster_fuel1[".tableType"] = "list";

$tdatavehiclemaster_fuel1[".printerPageOrientation"] = 0;
$tdatavehiclemaster_fuel1[".nPrinterPageScale"] = 100;

$tdatavehiclemaster_fuel1[".nPrinterSplitRecords"] = 40;

$tdatavehiclemaster_fuel1[".nPrinterPDFSplitRecords"] = 40;



$tdatavehiclemaster_fuel1[".geocodingEnabled"] = false;




	





// view page pdf
$tdatavehiclemaster_fuel1[".isViewPagePDF"] = true;
$tdatavehiclemaster_fuel1[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatavehiclemaster_fuel1[".isPrinterPagePDF"] = true;
$tdatavehiclemaster_fuel1[".nPrinterPagePDFScale"] = 100;


$tdatavehiclemaster_fuel1[".pageSize"] = 20;

$tdatavehiclemaster_fuel1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavehiclemaster_fuel1[".strOrderBy"] = $tstrOrderBy;

$tdatavehiclemaster_fuel1[".orderindexes"] = array();

$tdatavehiclemaster_fuel1[".sqlHead"] = "SELECT vehiclemaster.ID,  vehiclemaster.RegNo,  vehiclemaster.Fleet,  vehiclemaster.`Type`,  vehiclemaster.RegDate,  vehiclemaster.Cost,  vehiclemaster.DriverAsigned,  vehiclemaster.Make,  vehiclemaster.Model,  vehiclemaster.InsuranceDue,  MAX(fuelmaster.LastMileage) AS `MAX(LastMileage)`";
$tdatavehiclemaster_fuel1[".sqlFrom"] = "FROM vehiclemaster  LEFT OUTER JOIN fuelmaster ON vehiclemaster.RegNo = fuelmaster.Vehicle";
$tdatavehiclemaster_fuel1[".sqlWhereExpr"] = "";
$tdatavehiclemaster_fuel1[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatavehiclemaster_fuel1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavehiclemaster_fuel1[".arrGroupsPerPage"] = $arrGPP;

$tdatavehiclemaster_fuel1[".highlightSearchResults"] = true;

$tableKeysvehiclemaster_fuel1 = array();
$tableKeysvehiclemaster_fuel1[] = "ID";
$tdatavehiclemaster_fuel1[".Keys"] = $tableKeysvehiclemaster_fuel1;

$tdatavehiclemaster_fuel1[".listFields"] = array();
$tdatavehiclemaster_fuel1[".listFields"][] = "MAX(LastMileage)";
$tdatavehiclemaster_fuel1[".listFields"][] = "Fleet";
$tdatavehiclemaster_fuel1[".listFields"][] = "Type";
$tdatavehiclemaster_fuel1[".listFields"][] = "RegDate";
$tdatavehiclemaster_fuel1[".listFields"][] = "RegNo";
$tdatavehiclemaster_fuel1[".listFields"][] = "Make";
$tdatavehiclemaster_fuel1[".listFields"][] = "Model";
$tdatavehiclemaster_fuel1[".listFields"][] = "Cost";
$tdatavehiclemaster_fuel1[".listFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel1[".listFields"][] = "InsuranceDue";

$tdatavehiclemaster_fuel1[".hideMobileList"] = array();


$tdatavehiclemaster_fuel1[".viewFields"] = array();
$tdatavehiclemaster_fuel1[".viewFields"][] = "MAX(LastMileage)";
$tdatavehiclemaster_fuel1[".viewFields"][] = "ID";
$tdatavehiclemaster_fuel1[".viewFields"][] = "Fleet";
$tdatavehiclemaster_fuel1[".viewFields"][] = "Type";
$tdatavehiclemaster_fuel1[".viewFields"][] = "RegDate";
$tdatavehiclemaster_fuel1[".viewFields"][] = "RegNo";
$tdatavehiclemaster_fuel1[".viewFields"][] = "Make";
$tdatavehiclemaster_fuel1[".viewFields"][] = "Model";
$tdatavehiclemaster_fuel1[".viewFields"][] = "Cost";
$tdatavehiclemaster_fuel1[".viewFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel1[".viewFields"][] = "InsuranceDue";

$tdatavehiclemaster_fuel1[".addFields"] = array();
$tdatavehiclemaster_fuel1[".addFields"][] = "Fleet";
$tdatavehiclemaster_fuel1[".addFields"][] = "Type";
$tdatavehiclemaster_fuel1[".addFields"][] = "RegDate";
$tdatavehiclemaster_fuel1[".addFields"][] = "RegNo";
$tdatavehiclemaster_fuel1[".addFields"][] = "Make";
$tdatavehiclemaster_fuel1[".addFields"][] = "Model";
$tdatavehiclemaster_fuel1[".addFields"][] = "Cost";
$tdatavehiclemaster_fuel1[".addFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel1[".addFields"][] = "InsuranceDue";

$tdatavehiclemaster_fuel1[".masterListFields"] = array();
$tdatavehiclemaster_fuel1[".masterListFields"][] = "MAX(LastMileage)";
$tdatavehiclemaster_fuel1[".masterListFields"][] = "ID";
$tdatavehiclemaster_fuel1[".masterListFields"][] = "Fleet";
$tdatavehiclemaster_fuel1[".masterListFields"][] = "Type";
$tdatavehiclemaster_fuel1[".masterListFields"][] = "RegDate";
$tdatavehiclemaster_fuel1[".masterListFields"][] = "RegNo";
$tdatavehiclemaster_fuel1[".masterListFields"][] = "Make";
$tdatavehiclemaster_fuel1[".masterListFields"][] = "Model";
$tdatavehiclemaster_fuel1[".masterListFields"][] = "Cost";
$tdatavehiclemaster_fuel1[".masterListFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel1[".masterListFields"][] = "InsuranceDue";

$tdatavehiclemaster_fuel1[".inlineAddFields"] = array();

$tdatavehiclemaster_fuel1[".editFields"] = array();
$tdatavehiclemaster_fuel1[".editFields"][] = "Fleet";
$tdatavehiclemaster_fuel1[".editFields"][] = "Type";
$tdatavehiclemaster_fuel1[".editFields"][] = "RegDate";
$tdatavehiclemaster_fuel1[".editFields"][] = "RegNo";
$tdatavehiclemaster_fuel1[".editFields"][] = "Make";
$tdatavehiclemaster_fuel1[".editFields"][] = "Model";
$tdatavehiclemaster_fuel1[".editFields"][] = "Cost";
$tdatavehiclemaster_fuel1[".editFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel1[".editFields"][] = "InsuranceDue";

$tdatavehiclemaster_fuel1[".inlineEditFields"] = array();

$tdatavehiclemaster_fuel1[".exportFields"] = array();
$tdatavehiclemaster_fuel1[".exportFields"][] = "MAX(LastMileage)";
$tdatavehiclemaster_fuel1[".exportFields"][] = "ID";
$tdatavehiclemaster_fuel1[".exportFields"][] = "Fleet";
$tdatavehiclemaster_fuel1[".exportFields"][] = "Type";
$tdatavehiclemaster_fuel1[".exportFields"][] = "RegDate";
$tdatavehiclemaster_fuel1[".exportFields"][] = "RegNo";
$tdatavehiclemaster_fuel1[".exportFields"][] = "Make";
$tdatavehiclemaster_fuel1[".exportFields"][] = "Model";
$tdatavehiclemaster_fuel1[".exportFields"][] = "Cost";
$tdatavehiclemaster_fuel1[".exportFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel1[".exportFields"][] = "InsuranceDue";

$tdatavehiclemaster_fuel1[".importFields"] = array();
$tdatavehiclemaster_fuel1[".importFields"][] = "ID";
$tdatavehiclemaster_fuel1[".importFields"][] = "RegNo";
$tdatavehiclemaster_fuel1[".importFields"][] = "Fleet";
$tdatavehiclemaster_fuel1[".importFields"][] = "Type";
$tdatavehiclemaster_fuel1[".importFields"][] = "RegDate";
$tdatavehiclemaster_fuel1[".importFields"][] = "Cost";
$tdatavehiclemaster_fuel1[".importFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel1[".importFields"][] = "Make";
$tdatavehiclemaster_fuel1[".importFields"][] = "Model";
$tdatavehiclemaster_fuel1[".importFields"][] = "InsuranceDue";
$tdatavehiclemaster_fuel1[".importFields"][] = "MAX(LastMileage)";

$tdatavehiclemaster_fuel1[".printFields"] = array();
$tdatavehiclemaster_fuel1[".printFields"][] = "MAX(LastMileage)";
$tdatavehiclemaster_fuel1[".printFields"][] = "ID";
$tdatavehiclemaster_fuel1[".printFields"][] = "Fleet";
$tdatavehiclemaster_fuel1[".printFields"][] = "Type";
$tdatavehiclemaster_fuel1[".printFields"][] = "RegDate";
$tdatavehiclemaster_fuel1[".printFields"][] = "RegNo";
$tdatavehiclemaster_fuel1[".printFields"][] = "Make";
$tdatavehiclemaster_fuel1[".printFields"][] = "Model";
$tdatavehiclemaster_fuel1[".printFields"][] = "Cost";
$tdatavehiclemaster_fuel1[".printFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel1[".printFields"][] = "InsuranceDue";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel1","ID"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
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
	
	
	
	

	

	
	$tdatavehiclemaster_fuel1["ID"] = $fdata;
//	RegNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RegNo";
	$fdata["GoodName"] = "RegNo";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel1","RegNo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";	
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");
	
		
	//	End validation
	
		
				
		
		$edata["denyDuplicates"] = true;	

		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatavehiclemaster_fuel1["RegNo"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel1","Fleet"); 
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
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
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

	

	
	$tdatavehiclemaster_fuel1["Fleet"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel1","Type"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "vehicletype";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "VehicleType";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "VehicleType";
	
		
	$edata["LookupOrderBy"] = "VehicleType";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
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

	

	
	$tdatavehiclemaster_fuel1["Type"] = $fdata;
//	RegDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RegDate";
	$fdata["GoodName"] = "RegDate";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel1","RegDate"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
		
		
		
		$edata["controlWidth"] = 200;
	
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

	

	
	$tdatavehiclemaster_fuel1["RegDate"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel1","Cost"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatavehiclemaster_fuel1["Cost"] = $fdata;
//	DriverAsigned
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DriverAsigned";
	$fdata["GoodName"] = "DriverAsigned";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel1","DriverAsigned"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatavehiclemaster_fuel1["DriverAsigned"] = $fdata;
//	Make
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Make";
	$fdata["GoodName"] = "Make";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel1","Make"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatavehiclemaster_fuel1["Make"] = $fdata;
//	Model
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Model";
	$fdata["GoodName"] = "Model";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel1","Model"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatavehiclemaster_fuel1["Model"] = $fdata;
//	InsuranceDue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "InsuranceDue";
	$fdata["GoodName"] = "InsuranceDue";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel1","InsuranceDue"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatavehiclemaster_fuel1["InsuranceDue"] = $fdata;
//	MAX(LastMileage)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "MAX(LastMileage)";
	$fdata["GoodName"] = "MAX_LastMileage_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel1","MAX_LastMileage_"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MAX(LastMileage)"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX(fuelmaster.LastMileage)";
	
		
		
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

	

	
	$tdatavehiclemaster_fuel1["MAX(LastMileage)"] = $fdata;

	
$tables_data["vehiclemaster-fuel1"]=&$tdatavehiclemaster_fuel1;
$field_labels["vehiclemaster_fuel1"] = &$fieldLabelsvehiclemaster_fuel1;
$fieldToolTips["vehiclemaster-fuel1"] = &$fieldToolTipsvehiclemaster_fuel1;
$page_titles["vehiclemaster_fuel1"] = &$pageTitlesvehiclemaster_fuel1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vehiclemaster-fuel1"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["vehiclemaster-fuel1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vehiclemaster_fuel1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "vehiclemaster.ID,  vehiclemaster.RegNo,  vehiclemaster.Fleet,  vehiclemaster.`Type`,  vehiclemaster.RegDate,  vehiclemaster.Cost,  vehiclemaster.DriverAsigned,  vehiclemaster.Make,  vehiclemaster.Model,  vehiclemaster.InsuranceDue,  MAX(fuelmaster.LastMileage) AS `MAX(LastMileage)`";
$proto0["m_strFrom"] = "FROM vehiclemaster  LEFT OUTER JOIN fuelmaster ON vehiclemaster.RegNo = fuelmaster.Vehicle";
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
	"m_srcTableName" => "vehiclemaster-fuel1"
));

$proto5["m_sql"] = "vehiclemaster.ID";
$proto5["m_srcTableName"] = "vehiclemaster-fuel1";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel1"
));

$proto7["m_sql"] = "vehiclemaster.RegNo";
$proto7["m_srcTableName"] = "vehiclemaster-fuel1";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel1"
));

$proto9["m_sql"] = "vehiclemaster.Fleet";
$proto9["m_srcTableName"] = "vehiclemaster-fuel1";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel1"
));

$proto11["m_sql"] = "vehiclemaster.`Type`";
$proto11["m_srcTableName"] = "vehiclemaster-fuel1";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "RegDate",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel1"
));

$proto13["m_sql"] = "vehiclemaster.RegDate";
$proto13["m_srcTableName"] = "vehiclemaster-fuel1";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel1"
));

$proto15["m_sql"] = "vehiclemaster.Cost";
$proto15["m_srcTableName"] = "vehiclemaster-fuel1";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "DriverAsigned",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel1"
));

$proto17["m_sql"] = "vehiclemaster.DriverAsigned";
$proto17["m_srcTableName"] = "vehiclemaster-fuel1";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Make",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel1"
));

$proto19["m_sql"] = "vehiclemaster.Make";
$proto19["m_srcTableName"] = "vehiclemaster-fuel1";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Model",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel1"
));

$proto21["m_sql"] = "vehiclemaster.Model";
$proto21["m_srcTableName"] = "vehiclemaster-fuel1";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "InsuranceDue",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel1"
));

$proto23["m_sql"] = "vehiclemaster.InsuranceDue";
$proto23["m_srcTableName"] = "vehiclemaster-fuel1";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$proto26=array();
$proto26["m_functiontype"] = "SQLF_MAX";
$proto26["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "LastMileage",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "vehiclemaster-fuel1"
));

$proto26["m_arguments"][]=$obj;
$proto26["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto26);

$proto25["m_sql"] = "MAX(fuelmaster.LastMileage)";
$proto25["m_srcTableName"] = "vehiclemaster-fuel1";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "MAX(LastMileage)";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "vehiclemaster";
$proto29["m_srcTableName"] = "vehiclemaster-fuel1";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "ID";
$proto29["m_columns"][] = "RegNo";
$proto29["m_columns"][] = "Fleet";
$proto29["m_columns"][] = "Type";
$proto29["m_columns"][] = "RegDate";
$proto29["m_columns"][] = "Cost";
$proto29["m_columns"][] = "DriverAsigned";
$proto29["m_columns"][] = "Make";
$proto29["m_columns"][] = "Model";
$proto29["m_columns"][] = "InsuranceDue";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "vehiclemaster";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "vehiclemaster-fuel1";
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
												$proto32=array();
$proto32["m_link"] = "SQLL_LEFTJOIN";
			$proto33=array();
$proto33["m_strName"] = "fuelmaster";
$proto33["m_srcTableName"] = "vehiclemaster-fuel1";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "Id";
$proto33["m_columns"][] = "SystemDate";
$proto33["m_columns"][] = "FuelDate";
$proto33["m_columns"][] = "Vehicle";
$proto33["m_columns"][] = "MeterReading";
$proto33["m_columns"][] = "LitersPumped";
$proto33["m_columns"][] = "PricePerLiter";
$proto33["m_columns"][] = "FuelStation";
$proto33["m_columns"][] = "Fleet";
$proto33["m_columns"][] = "LastMileage";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "LEFT OUTER JOIN fuelmaster ON vehiclemaster.RegNo = fuelmaster.Vehicle";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "vehiclemaster-fuel1";
$proto34=array();
$proto34["m_sql"] = "vehiclemaster.RegNo = fuelmaster.Vehicle";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel1"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= fuelmaster.Vehicle";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel1"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel1"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel1"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel1"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "RegDate",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel1"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel1"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "DriverAsigned",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel1"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "Make",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel1"
));

$proto50["m_column"]=$obj;
$obj = new SQLGroupByItem($proto50);

$proto0["m_groupby"][]=$obj;
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "Model",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel1"
));

$proto52["m_column"]=$obj;
$obj = new SQLGroupByItem($proto52);

$proto0["m_groupby"][]=$obj;
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "InsuranceDue",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel1"
));

$proto54["m_column"]=$obj;
$obj = new SQLGroupByItem($proto54);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vehiclemaster-fuel1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vehiclemaster_fuel1 = createSqlQuery_vehiclemaster_fuel1();


	
											
	
$tdatavehiclemaster_fuel1[".sqlquery"] = $queryData_vehiclemaster_fuel1;

$tableEvents["vehiclemaster-fuel1"] = new eventsBase;
$tdatavehiclemaster_fuel1[".hasEvents"] = false;

?>