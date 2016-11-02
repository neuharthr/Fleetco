<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavehiclemaster_fuel11 = array();	
	$tdatavehiclemaster_fuel11[".truncateText"] = true;
	$tdatavehiclemaster_fuel11[".NumberOfChars"] = 80; 
	$tdatavehiclemaster_fuel11[".ShortName"] = "vehiclemaster_fuel11";
	$tdatavehiclemaster_fuel11[".OwnerID"] = "";
	$tdatavehiclemaster_fuel11[".OriginalTable"] = "vehiclemaster";

//	field labels
$fieldLabelsvehiclemaster_fuel11 = array();
$fieldToolTipsvehiclemaster_fuel11 = array();
$pageTitlesvehiclemaster_fuel11 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvehiclemaster_fuel11["English"] = array();
	$fieldToolTipsvehiclemaster_fuel11["English"] = array();
	$pageTitlesvehiclemaster_fuel11["English"] = array();
	$fieldLabelsvehiclemaster_fuel11["English"]["LastMileage"] = "Last Mileage";
	$fieldToolTipsvehiclemaster_fuel11["English"]["LastMileage"] = "";
	$fieldLabelsvehiclemaster_fuel11["English"]["ID"] = "ID";
	$fieldToolTipsvehiclemaster_fuel11["English"]["ID"] = "";
	$fieldLabelsvehiclemaster_fuel11["English"]["RegNo"] = "Reg No";
	$fieldToolTipsvehiclemaster_fuel11["English"]["RegNo"] = "";
	$fieldLabelsvehiclemaster_fuel11["English"]["Fleet"] = "Fleet";
	$fieldToolTipsvehiclemaster_fuel11["English"]["Fleet"] = "";
	$fieldLabelsvehiclemaster_fuel11["English"]["Type"] = "Type";
	$fieldToolTipsvehiclemaster_fuel11["English"]["Type"] = "";
	$fieldLabelsvehiclemaster_fuel11["English"]["RegDate"] = "Reg Date";
	$fieldToolTipsvehiclemaster_fuel11["English"]["RegDate"] = "";
	$fieldLabelsvehiclemaster_fuel11["English"]["Cost"] = "Cost";
	$fieldToolTipsvehiclemaster_fuel11["English"]["Cost"] = "";
	$fieldLabelsvehiclemaster_fuel11["English"]["DriverAsigned"] = "Driver Asigned";
	$fieldToolTipsvehiclemaster_fuel11["English"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster_fuel11["English"]["Make"] = "Make";
	$fieldToolTipsvehiclemaster_fuel11["English"]["Make"] = "";
	$fieldLabelsvehiclemaster_fuel11["English"]["Model"] = "Model";
	$fieldToolTipsvehiclemaster_fuel11["English"]["Model"] = "";
	$fieldLabelsvehiclemaster_fuel11["English"]["InsuranceDue"] = "Insurance Due";
	$fieldToolTipsvehiclemaster_fuel11["English"]["InsuranceDue"] = "";
	if (count($fieldToolTipsvehiclemaster_fuel11["English"]))
		$tdatavehiclemaster_fuel11[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvehiclemaster_fuel11[""] = array();
	$fieldToolTipsvehiclemaster_fuel11[""] = array();
	$pageTitlesvehiclemaster_fuel11[""] = array();
	$fieldLabelsvehiclemaster_fuel11[""]["LastMileage"] = "Last Mileage";
	$fieldToolTipsvehiclemaster_fuel11[""]["LastMileage"] = "";
	if (count($fieldToolTipsvehiclemaster_fuel11[""]))
		$tdatavehiclemaster_fuel11[".isUseToolTips"] = true;
}
	
	
	$tdatavehiclemaster_fuel11[".NCSearch"] = true;



$tdatavehiclemaster_fuel11[".shortTableName"] = "vehiclemaster_fuel11";
$tdatavehiclemaster_fuel11[".nSecOptions"] = 0;
$tdatavehiclemaster_fuel11[".recsPerRowList"] = 1;
$tdatavehiclemaster_fuel11[".recsPerRowPrint"] = 1;
$tdatavehiclemaster_fuel11[".mainTableOwnerID"] = "";
$tdatavehiclemaster_fuel11[".moveNext"] = 1;
$tdatavehiclemaster_fuel11[".entityType"] = 1;

$tdatavehiclemaster_fuel11[".strOriginalTableName"] = "vehiclemaster";




$tdatavehiclemaster_fuel11[".showAddInPopup"] = false;

$tdatavehiclemaster_fuel11[".showEditInPopup"] = false;

$tdatavehiclemaster_fuel11[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavehiclemaster_fuel11[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavehiclemaster_fuel11[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatavehiclemaster_fuel11[".listAjax"] = true;
else 
	$tdatavehiclemaster_fuel11[".listAjax"] = false;

	$tdatavehiclemaster_fuel11[".audit"] = false;

	$tdatavehiclemaster_fuel11[".locking"] = false;

$tdatavehiclemaster_fuel11[".edit"] = true;
$tdatavehiclemaster_fuel11[".afterEditAction"] = 1;
$tdatavehiclemaster_fuel11[".closePopupAfterEdit"] = 1;
$tdatavehiclemaster_fuel11[".afterEditActionDetTable"] = "";

$tdatavehiclemaster_fuel11[".add"] = true;
$tdatavehiclemaster_fuel11[".afterAddAction"] = 1;
$tdatavehiclemaster_fuel11[".closePopupAfterAdd"] = 1;
$tdatavehiclemaster_fuel11[".afterAddActionDetTable"] = "";

$tdatavehiclemaster_fuel11[".list"] = true;

$tdatavehiclemaster_fuel11[".view"] = true;

$tdatavehiclemaster_fuel11[".import"] = true;

$tdatavehiclemaster_fuel11[".exportTo"] = true;

$tdatavehiclemaster_fuel11[".printFriendly"] = true;

$tdatavehiclemaster_fuel11[".delete"] = true;

$tdatavehiclemaster_fuel11[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatavehiclemaster_fuel11[".searchSaving"] = false;
//

$tdatavehiclemaster_fuel11[".showSearchPanel"] = true;
		$tdatavehiclemaster_fuel11[".flexibleSearch"] = true;		

if (isMobile())
	$tdatavehiclemaster_fuel11[".isUseAjaxSuggest"] = false;
else 
	$tdatavehiclemaster_fuel11[".isUseAjaxSuggest"] = true;

$tdatavehiclemaster_fuel11[".rowHighlite"] = true;



$tdatavehiclemaster_fuel11[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavehiclemaster_fuel11[".isUseTimeForSearch"] = false;





$tdatavehiclemaster_fuel11[".allSearchFields"] = array();
$tdatavehiclemaster_fuel11[".filterFields"] = array();
$tdatavehiclemaster_fuel11[".requiredSearchFields"] = array();

$tdatavehiclemaster_fuel11[".allSearchFields"][] = "LastMileage";
	$tdatavehiclemaster_fuel11[".allSearchFields"][] = "Fleet";
	$tdatavehiclemaster_fuel11[".allSearchFields"][] = "Type";
	$tdatavehiclemaster_fuel11[".allSearchFields"][] = "RegDate";
	$tdatavehiclemaster_fuel11[".allSearchFields"][] = "RegNo";
	$tdatavehiclemaster_fuel11[".allSearchFields"][] = "Make";
	$tdatavehiclemaster_fuel11[".allSearchFields"][] = "Model";
	$tdatavehiclemaster_fuel11[".allSearchFields"][] = "Cost";
	$tdatavehiclemaster_fuel11[".allSearchFields"][] = "DriverAsigned";
	$tdatavehiclemaster_fuel11[".allSearchFields"][] = "InsuranceDue";
	

$tdatavehiclemaster_fuel11[".googleLikeFields"] = array();
$tdatavehiclemaster_fuel11[".googleLikeFields"][] = "ID";
$tdatavehiclemaster_fuel11[".googleLikeFields"][] = "RegNo";
$tdatavehiclemaster_fuel11[".googleLikeFields"][] = "Fleet";
$tdatavehiclemaster_fuel11[".googleLikeFields"][] = "Type";
$tdatavehiclemaster_fuel11[".googleLikeFields"][] = "RegDate";
$tdatavehiclemaster_fuel11[".googleLikeFields"][] = "Cost";
$tdatavehiclemaster_fuel11[".googleLikeFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel11[".googleLikeFields"][] = "Make";
$tdatavehiclemaster_fuel11[".googleLikeFields"][] = "Model";
$tdatavehiclemaster_fuel11[".googleLikeFields"][] = "InsuranceDue";
$tdatavehiclemaster_fuel11[".googleLikeFields"][] = "LastMileage";


$tdatavehiclemaster_fuel11[".advSearchFields"] = array();
$tdatavehiclemaster_fuel11[".advSearchFields"][] = "LastMileage";
$tdatavehiclemaster_fuel11[".advSearchFields"][] = "Fleet";
$tdatavehiclemaster_fuel11[".advSearchFields"][] = "Type";
$tdatavehiclemaster_fuel11[".advSearchFields"][] = "RegDate";
$tdatavehiclemaster_fuel11[".advSearchFields"][] = "RegNo";
$tdatavehiclemaster_fuel11[".advSearchFields"][] = "Make";
$tdatavehiclemaster_fuel11[".advSearchFields"][] = "Model";
$tdatavehiclemaster_fuel11[".advSearchFields"][] = "Cost";
$tdatavehiclemaster_fuel11[".advSearchFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel11[".advSearchFields"][] = "InsuranceDue";

$tdatavehiclemaster_fuel11[".tableType"] = "list";

$tdatavehiclemaster_fuel11[".printerPageOrientation"] = 0;
$tdatavehiclemaster_fuel11[".nPrinterPageScale"] = 100;

$tdatavehiclemaster_fuel11[".nPrinterSplitRecords"] = 40;

$tdatavehiclemaster_fuel11[".nPrinterPDFSplitRecords"] = 40;



$tdatavehiclemaster_fuel11[".geocodingEnabled"] = false;




	





// view page pdf
$tdatavehiclemaster_fuel11[".isViewPagePDF"] = true;
$tdatavehiclemaster_fuel11[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatavehiclemaster_fuel11[".isPrinterPagePDF"] = true;
$tdatavehiclemaster_fuel11[".nPrinterPagePDFScale"] = 100;


$tdatavehiclemaster_fuel11[".pageSize"] = 20;

$tdatavehiclemaster_fuel11[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavehiclemaster_fuel11[".strOrderBy"] = $tstrOrderBy;

$tdatavehiclemaster_fuel11[".orderindexes"] = array();

$tdatavehiclemaster_fuel11[".sqlHead"] = "SELECT vehiclemaster.ID,  vehiclemaster.RegNo,  vehiclemaster.Fleet,  vehiclemaster.`Type`,  vehiclemaster.RegDate,  vehiclemaster.Cost,  vehiclemaster.DriverAsigned,  vehiclemaster.Make,  vehiclemaster.Model,  vehiclemaster.InsuranceDue,  fuelmaster.LastMileage";
$tdatavehiclemaster_fuel11[".sqlFrom"] = "FROM vehiclemaster  LEFT OUTER JOIN fuelmaster ON vehiclemaster.RegNo = fuelmaster.Vehicle";
$tdatavehiclemaster_fuel11[".sqlWhereExpr"] = "";
$tdatavehiclemaster_fuel11[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatavehiclemaster_fuel11[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavehiclemaster_fuel11[".arrGroupsPerPage"] = $arrGPP;

$tdatavehiclemaster_fuel11[".highlightSearchResults"] = true;

$tableKeysvehiclemaster_fuel11 = array();
$tableKeysvehiclemaster_fuel11[] = "ID";
$tdatavehiclemaster_fuel11[".Keys"] = $tableKeysvehiclemaster_fuel11;

$tdatavehiclemaster_fuel11[".listFields"] = array();
$tdatavehiclemaster_fuel11[".listFields"][] = "LastMileage";
$tdatavehiclemaster_fuel11[".listFields"][] = "Fleet";
$tdatavehiclemaster_fuel11[".listFields"][] = "Type";
$tdatavehiclemaster_fuel11[".listFields"][] = "RegDate";
$tdatavehiclemaster_fuel11[".listFields"][] = "RegNo";
$tdatavehiclemaster_fuel11[".listFields"][] = "Make";
$tdatavehiclemaster_fuel11[".listFields"][] = "Model";
$tdatavehiclemaster_fuel11[".listFields"][] = "Cost";
$tdatavehiclemaster_fuel11[".listFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel11[".listFields"][] = "InsuranceDue";

$tdatavehiclemaster_fuel11[".hideMobileList"] = array();


$tdatavehiclemaster_fuel11[".viewFields"] = array();
$tdatavehiclemaster_fuel11[".viewFields"][] = "LastMileage";
$tdatavehiclemaster_fuel11[".viewFields"][] = "ID";
$tdatavehiclemaster_fuel11[".viewFields"][] = "Fleet";
$tdatavehiclemaster_fuel11[".viewFields"][] = "Type";
$tdatavehiclemaster_fuel11[".viewFields"][] = "RegDate";
$tdatavehiclemaster_fuel11[".viewFields"][] = "RegNo";
$tdatavehiclemaster_fuel11[".viewFields"][] = "Make";
$tdatavehiclemaster_fuel11[".viewFields"][] = "Model";
$tdatavehiclemaster_fuel11[".viewFields"][] = "Cost";
$tdatavehiclemaster_fuel11[".viewFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel11[".viewFields"][] = "InsuranceDue";

$tdatavehiclemaster_fuel11[".addFields"] = array();
$tdatavehiclemaster_fuel11[".addFields"][] = "Fleet";
$tdatavehiclemaster_fuel11[".addFields"][] = "Type";
$tdatavehiclemaster_fuel11[".addFields"][] = "RegDate";
$tdatavehiclemaster_fuel11[".addFields"][] = "RegNo";
$tdatavehiclemaster_fuel11[".addFields"][] = "Make";
$tdatavehiclemaster_fuel11[".addFields"][] = "Model";
$tdatavehiclemaster_fuel11[".addFields"][] = "Cost";
$tdatavehiclemaster_fuel11[".addFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel11[".addFields"][] = "InsuranceDue";

$tdatavehiclemaster_fuel11[".masterListFields"] = array();
$tdatavehiclemaster_fuel11[".masterListFields"][] = "LastMileage";
$tdatavehiclemaster_fuel11[".masterListFields"][] = "ID";
$tdatavehiclemaster_fuel11[".masterListFields"][] = "Fleet";
$tdatavehiclemaster_fuel11[".masterListFields"][] = "Type";
$tdatavehiclemaster_fuel11[".masterListFields"][] = "RegDate";
$tdatavehiclemaster_fuel11[".masterListFields"][] = "RegNo";
$tdatavehiclemaster_fuel11[".masterListFields"][] = "Make";
$tdatavehiclemaster_fuel11[".masterListFields"][] = "Model";
$tdatavehiclemaster_fuel11[".masterListFields"][] = "Cost";
$tdatavehiclemaster_fuel11[".masterListFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel11[".masterListFields"][] = "InsuranceDue";

$tdatavehiclemaster_fuel11[".inlineAddFields"] = array();

$tdatavehiclemaster_fuel11[".editFields"] = array();
$tdatavehiclemaster_fuel11[".editFields"][] = "Fleet";
$tdatavehiclemaster_fuel11[".editFields"][] = "Type";
$tdatavehiclemaster_fuel11[".editFields"][] = "RegDate";
$tdatavehiclemaster_fuel11[".editFields"][] = "RegNo";
$tdatavehiclemaster_fuel11[".editFields"][] = "Make";
$tdatavehiclemaster_fuel11[".editFields"][] = "Model";
$tdatavehiclemaster_fuel11[".editFields"][] = "Cost";
$tdatavehiclemaster_fuel11[".editFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel11[".editFields"][] = "InsuranceDue";

$tdatavehiclemaster_fuel11[".inlineEditFields"] = array();

$tdatavehiclemaster_fuel11[".exportFields"] = array();
$tdatavehiclemaster_fuel11[".exportFields"][] = "LastMileage";
$tdatavehiclemaster_fuel11[".exportFields"][] = "ID";
$tdatavehiclemaster_fuel11[".exportFields"][] = "Fleet";
$tdatavehiclemaster_fuel11[".exportFields"][] = "Type";
$tdatavehiclemaster_fuel11[".exportFields"][] = "RegDate";
$tdatavehiclemaster_fuel11[".exportFields"][] = "RegNo";
$tdatavehiclemaster_fuel11[".exportFields"][] = "Make";
$tdatavehiclemaster_fuel11[".exportFields"][] = "Model";
$tdatavehiclemaster_fuel11[".exportFields"][] = "Cost";
$tdatavehiclemaster_fuel11[".exportFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel11[".exportFields"][] = "InsuranceDue";

$tdatavehiclemaster_fuel11[".importFields"] = array();
$tdatavehiclemaster_fuel11[".importFields"][] = "ID";
$tdatavehiclemaster_fuel11[".importFields"][] = "RegNo";
$tdatavehiclemaster_fuel11[".importFields"][] = "Fleet";
$tdatavehiclemaster_fuel11[".importFields"][] = "Type";
$tdatavehiclemaster_fuel11[".importFields"][] = "RegDate";
$tdatavehiclemaster_fuel11[".importFields"][] = "Cost";
$tdatavehiclemaster_fuel11[".importFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel11[".importFields"][] = "Make";
$tdatavehiclemaster_fuel11[".importFields"][] = "Model";
$tdatavehiclemaster_fuel11[".importFields"][] = "InsuranceDue";
$tdatavehiclemaster_fuel11[".importFields"][] = "LastMileage";

$tdatavehiclemaster_fuel11[".printFields"] = array();
$tdatavehiclemaster_fuel11[".printFields"][] = "LastMileage";
$tdatavehiclemaster_fuel11[".printFields"][] = "ID";
$tdatavehiclemaster_fuel11[".printFields"][] = "Fleet";
$tdatavehiclemaster_fuel11[".printFields"][] = "Type";
$tdatavehiclemaster_fuel11[".printFields"][] = "RegDate";
$tdatavehiclemaster_fuel11[".printFields"][] = "RegNo";
$tdatavehiclemaster_fuel11[".printFields"][] = "Make";
$tdatavehiclemaster_fuel11[".printFields"][] = "Model";
$tdatavehiclemaster_fuel11[".printFields"][] = "Cost";
$tdatavehiclemaster_fuel11[".printFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel11[".printFields"][] = "InsuranceDue";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel11","ID"); 
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
	
	
	
	

	

	
	$tdatavehiclemaster_fuel11["ID"] = $fdata;
//	RegNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RegNo";
	$fdata["GoodName"] = "RegNo";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel11","RegNo"); 
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

	

	
	$tdatavehiclemaster_fuel11["RegNo"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel11","Fleet"); 
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

	

	
	$tdatavehiclemaster_fuel11["Fleet"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel11","Type"); 
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

	

	
	$tdatavehiclemaster_fuel11["Type"] = $fdata;
//	RegDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RegDate";
	$fdata["GoodName"] = "RegDate";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel11","RegDate"); 
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

	

	
	$tdatavehiclemaster_fuel11["RegDate"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel11","Cost"); 
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

	

	
	$tdatavehiclemaster_fuel11["Cost"] = $fdata;
//	DriverAsigned
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DriverAsigned";
	$fdata["GoodName"] = "DriverAsigned";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel11","DriverAsigned"); 
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

	

	
	$tdatavehiclemaster_fuel11["DriverAsigned"] = $fdata;
//	Make
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Make";
	$fdata["GoodName"] = "Make";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel11","Make"); 
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

	

	
	$tdatavehiclemaster_fuel11["Make"] = $fdata;
//	Model
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Model";
	$fdata["GoodName"] = "Model";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel11","Model"); 
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

	

	
	$tdatavehiclemaster_fuel11["Model"] = $fdata;
//	InsuranceDue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "InsuranceDue";
	$fdata["GoodName"] = "InsuranceDue";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel11","InsuranceDue"); 
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

	

	
	$tdatavehiclemaster_fuel11["InsuranceDue"] = $fdata;
//	LastMileage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LastMileage";
	$fdata["GoodName"] = "LastMileage";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel11","LastMileage"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatavehiclemaster_fuel11["LastMileage"] = $fdata;

	
$tables_data["vehiclemaster-fuel11"]=&$tdatavehiclemaster_fuel11;
$field_labels["vehiclemaster_fuel11"] = &$fieldLabelsvehiclemaster_fuel11;
$fieldToolTips["vehiclemaster-fuel11"] = &$fieldToolTipsvehiclemaster_fuel11;
$page_titles["vehiclemaster_fuel11"] = &$pageTitlesvehiclemaster_fuel11;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vehiclemaster-fuel11"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["vehiclemaster-fuel11"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vehiclemaster_fuel11()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "vehiclemaster.ID,  vehiclemaster.RegNo,  vehiclemaster.Fleet,  vehiclemaster.`Type`,  vehiclemaster.RegDate,  vehiclemaster.Cost,  vehiclemaster.DriverAsigned,  vehiclemaster.Make,  vehiclemaster.Model,  vehiclemaster.InsuranceDue,  fuelmaster.LastMileage";
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
	"m_srcTableName" => "vehiclemaster-fuel11"
));

$proto5["m_sql"] = "vehiclemaster.ID";
$proto5["m_srcTableName"] = "vehiclemaster-fuel11";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel11"
));

$proto7["m_sql"] = "vehiclemaster.RegNo";
$proto7["m_srcTableName"] = "vehiclemaster-fuel11";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel11"
));

$proto9["m_sql"] = "vehiclemaster.Fleet";
$proto9["m_srcTableName"] = "vehiclemaster-fuel11";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel11"
));

$proto11["m_sql"] = "vehiclemaster.`Type`";
$proto11["m_srcTableName"] = "vehiclemaster-fuel11";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "RegDate",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel11"
));

$proto13["m_sql"] = "vehiclemaster.RegDate";
$proto13["m_srcTableName"] = "vehiclemaster-fuel11";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel11"
));

$proto15["m_sql"] = "vehiclemaster.Cost";
$proto15["m_srcTableName"] = "vehiclemaster-fuel11";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "DriverAsigned",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel11"
));

$proto17["m_sql"] = "vehiclemaster.DriverAsigned";
$proto17["m_srcTableName"] = "vehiclemaster-fuel11";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Make",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel11"
));

$proto19["m_sql"] = "vehiclemaster.Make";
$proto19["m_srcTableName"] = "vehiclemaster-fuel11";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Model",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel11"
));

$proto21["m_sql"] = "vehiclemaster.Model";
$proto21["m_srcTableName"] = "vehiclemaster-fuel11";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "InsuranceDue",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel11"
));

$proto23["m_sql"] = "vehiclemaster.InsuranceDue";
$proto23["m_srcTableName"] = "vehiclemaster-fuel11";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "LastMileage",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "vehiclemaster-fuel11"
));

$proto25["m_sql"] = "fuelmaster.LastMileage";
$proto25["m_srcTableName"] = "vehiclemaster-fuel11";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "vehiclemaster";
$proto28["m_srcTableName"] = "vehiclemaster-fuel11";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "ID";
$proto28["m_columns"][] = "RegNo";
$proto28["m_columns"][] = "Fleet";
$proto28["m_columns"][] = "Type";
$proto28["m_columns"][] = "RegDate";
$proto28["m_columns"][] = "Cost";
$proto28["m_columns"][] = "DriverAsigned";
$proto28["m_columns"][] = "Make";
$proto28["m_columns"][] = "Model";
$proto28["m_columns"][] = "InsuranceDue";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "vehiclemaster";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "vehiclemaster-fuel11";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
												$proto31=array();
$proto31["m_link"] = "SQLL_LEFTJOIN";
			$proto32=array();
$proto32["m_strName"] = "fuelmaster";
$proto32["m_srcTableName"] = "vehiclemaster-fuel11";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "Id";
$proto32["m_columns"][] = "SystemDate";
$proto32["m_columns"][] = "FuelDate";
$proto32["m_columns"][] = "Vehicle";
$proto32["m_columns"][] = "MeterReading";
$proto32["m_columns"][] = "LitersPumped";
$proto32["m_columns"][] = "PricePerLiter";
$proto32["m_columns"][] = "FuelStation";
$proto32["m_columns"][] = "Fleet";
$proto32["m_columns"][] = "LastMileage";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "LEFT OUTER JOIN fuelmaster ON vehiclemaster.RegNo = fuelmaster.Vehicle";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "vehiclemaster-fuel11";
$proto33=array();
$proto33["m_sql"] = "vehiclemaster.RegNo = fuelmaster.Vehicle";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel11"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "= fuelmaster.Vehicle";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vehiclemaster-fuel11";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vehiclemaster_fuel11 = createSqlQuery_vehiclemaster_fuel11();


	
											
	
$tdatavehiclemaster_fuel11[".sqlquery"] = $queryData_vehiclemaster_fuel11;

$tableEvents["vehiclemaster-fuel11"] = new eventsBase;
$tdatavehiclemaster_fuel11[".hasEvents"] = false;

?>