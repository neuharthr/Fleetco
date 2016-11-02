<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavehiclemaster_new = array();	
	$tdatavehiclemaster_new[".truncateText"] = true;
	$tdatavehiclemaster_new[".NumberOfChars"] = 80; 
	$tdatavehiclemaster_new[".ShortName"] = "vehiclemaster_new";
	$tdatavehiclemaster_new[".OwnerID"] = "";
	$tdatavehiclemaster_new[".OriginalTable"] = "vehiclemaster";

//	field labels
$fieldLabelsvehiclemaster_new = array();
$fieldToolTipsvehiclemaster_new = array();
$pageTitlesvehiclemaster_new = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvehiclemaster_new["English"] = array();
	$fieldToolTipsvehiclemaster_new["English"] = array();
	$pageTitlesvehiclemaster_new["English"] = array();
	$fieldLabelsvehiclemaster_new["English"]["ID"] = "ID";
	$fieldToolTipsvehiclemaster_new["English"]["ID"] = "";
	$fieldLabelsvehiclemaster_new["English"]["RegNo"] = "Reg No";
	$fieldToolTipsvehiclemaster_new["English"]["RegNo"] = "";
	$fieldLabelsvehiclemaster_new["English"]["Fleet"] = "Fleet";
	$fieldToolTipsvehiclemaster_new["English"]["Fleet"] = "";
	$fieldLabelsvehiclemaster_new["English"]["Type"] = "Type";
	$fieldToolTipsvehiclemaster_new["English"]["Type"] = "";
	$fieldLabelsvehiclemaster_new["English"]["RegDate"] = "Reg Date";
	$fieldToolTipsvehiclemaster_new["English"]["RegDate"] = "";
	$fieldLabelsvehiclemaster_new["English"]["Cost"] = "Cost";
	$fieldToolTipsvehiclemaster_new["English"]["Cost"] = "";
	$fieldLabelsvehiclemaster_new["English"]["DriverAsigned"] = "Driver Asigned";
	$fieldToolTipsvehiclemaster_new["English"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster_new["English"]["Make"] = "Make";
	$fieldToolTipsvehiclemaster_new["English"]["Make"] = "";
	$fieldLabelsvehiclemaster_new["English"]["Model"] = "Model";
	$fieldToolTipsvehiclemaster_new["English"]["Model"] = "";
	$fieldLabelsvehiclemaster_new["English"]["InsuranceDue"] = "Insurance Due";
	$fieldToolTipsvehiclemaster_new["English"]["InsuranceDue"] = "";
	$fieldLabelsvehiclemaster_new["English"]["Last_Mileage"] = "Last Mileage";
	$fieldToolTipsvehiclemaster_new["English"]["Last Mileage"] = "";
	$fieldLabelsvehiclemaster_new["English"]["FullTank"] = "Full Tank";
	$fieldToolTipsvehiclemaster_new["English"]["FullTank"] = "";
	if (count($fieldToolTipsvehiclemaster_new["English"]))
		$tdatavehiclemaster_new[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvehiclemaster_new[""] = array();
	$fieldToolTipsvehiclemaster_new[""] = array();
	$pageTitlesvehiclemaster_new[""] = array();
	if (count($fieldToolTipsvehiclemaster_new[""]))
		$tdatavehiclemaster_new[".isUseToolTips"] = true;
}
	
	
	$tdatavehiclemaster_new[".NCSearch"] = true;



$tdatavehiclemaster_new[".shortTableName"] = "vehiclemaster_new";
$tdatavehiclemaster_new[".nSecOptions"] = 0;
$tdatavehiclemaster_new[".recsPerRowList"] = 1;
$tdatavehiclemaster_new[".recsPerRowPrint"] = 1;
$tdatavehiclemaster_new[".mainTableOwnerID"] = "";
$tdatavehiclemaster_new[".moveNext"] = 1;
$tdatavehiclemaster_new[".entityType"] = 1;

$tdatavehiclemaster_new[".strOriginalTableName"] = "vehiclemaster";




$tdatavehiclemaster_new[".showAddInPopup"] = false;

$tdatavehiclemaster_new[".showEditInPopup"] = false;

$tdatavehiclemaster_new[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavehiclemaster_new[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavehiclemaster_new[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatavehiclemaster_new[".listAjax"] = true;
else 
	$tdatavehiclemaster_new[".listAjax"] = false;

	$tdatavehiclemaster_new[".audit"] = false;

	$tdatavehiclemaster_new[".locking"] = false;

$tdatavehiclemaster_new[".edit"] = true;
$tdatavehiclemaster_new[".afterEditAction"] = 1;
$tdatavehiclemaster_new[".closePopupAfterEdit"] = 1;
$tdatavehiclemaster_new[".afterEditActionDetTable"] = "";

$tdatavehiclemaster_new[".add"] = true;
$tdatavehiclemaster_new[".afterAddAction"] = 1;
$tdatavehiclemaster_new[".closePopupAfterAdd"] = 1;
$tdatavehiclemaster_new[".afterAddActionDetTable"] = "";

$tdatavehiclemaster_new[".list"] = true;

$tdatavehiclemaster_new[".view"] = true;

$tdatavehiclemaster_new[".import"] = true;

$tdatavehiclemaster_new[".exportTo"] = true;

$tdatavehiclemaster_new[".printFriendly"] = true;

$tdatavehiclemaster_new[".delete"] = true;

$tdatavehiclemaster_new[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatavehiclemaster_new[".searchSaving"] = false;
//

$tdatavehiclemaster_new[".showSearchPanel"] = true;
		$tdatavehiclemaster_new[".flexibleSearch"] = true;		

if (isMobile())
	$tdatavehiclemaster_new[".isUseAjaxSuggest"] = false;
else 
	$tdatavehiclemaster_new[".isUseAjaxSuggest"] = true;

$tdatavehiclemaster_new[".rowHighlite"] = true;



$tdatavehiclemaster_new[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavehiclemaster_new[".isUseTimeForSearch"] = false;





$tdatavehiclemaster_new[".allSearchFields"] = array();
$tdatavehiclemaster_new[".filterFields"] = array();
$tdatavehiclemaster_new[".requiredSearchFields"] = array();

$tdatavehiclemaster_new[".allSearchFields"][] = "FullTank";
	$tdatavehiclemaster_new[".allSearchFields"][] = "ID";
	$tdatavehiclemaster_new[".allSearchFields"][] = "Fleet";
	$tdatavehiclemaster_new[".allSearchFields"][] = "Type";
	$tdatavehiclemaster_new[".allSearchFields"][] = "RegDate";
	$tdatavehiclemaster_new[".allSearchFields"][] = "RegNo";
	$tdatavehiclemaster_new[".allSearchFields"][] = "Make";
	$tdatavehiclemaster_new[".allSearchFields"][] = "Model";
	$tdatavehiclemaster_new[".allSearchFields"][] = "Cost";
	$tdatavehiclemaster_new[".allSearchFields"][] = "DriverAsigned";
	$tdatavehiclemaster_new[".allSearchFields"][] = "InsuranceDue";
	$tdatavehiclemaster_new[".allSearchFields"][] = "Last Mileage";
	

$tdatavehiclemaster_new[".googleLikeFields"] = array();
$tdatavehiclemaster_new[".googleLikeFields"][] = "ID";
$tdatavehiclemaster_new[".googleLikeFields"][] = "RegNo";
$tdatavehiclemaster_new[".googleLikeFields"][] = "Fleet";
$tdatavehiclemaster_new[".googleLikeFields"][] = "Type";
$tdatavehiclemaster_new[".googleLikeFields"][] = "RegDate";
$tdatavehiclemaster_new[".googleLikeFields"][] = "Cost";
$tdatavehiclemaster_new[".googleLikeFields"][] = "DriverAsigned";
$tdatavehiclemaster_new[".googleLikeFields"][] = "Make";
$tdatavehiclemaster_new[".googleLikeFields"][] = "Model";
$tdatavehiclemaster_new[".googleLikeFields"][] = "InsuranceDue";
$tdatavehiclemaster_new[".googleLikeFields"][] = "Last Mileage";
$tdatavehiclemaster_new[".googleLikeFields"][] = "FullTank";


$tdatavehiclemaster_new[".advSearchFields"] = array();
$tdatavehiclemaster_new[".advSearchFields"][] = "FullTank";
$tdatavehiclemaster_new[".advSearchFields"][] = "ID";
$tdatavehiclemaster_new[".advSearchFields"][] = "Fleet";
$tdatavehiclemaster_new[".advSearchFields"][] = "Type";
$tdatavehiclemaster_new[".advSearchFields"][] = "RegDate";
$tdatavehiclemaster_new[".advSearchFields"][] = "RegNo";
$tdatavehiclemaster_new[".advSearchFields"][] = "Make";
$tdatavehiclemaster_new[".advSearchFields"][] = "Model";
$tdatavehiclemaster_new[".advSearchFields"][] = "Cost";
$tdatavehiclemaster_new[".advSearchFields"][] = "DriverAsigned";
$tdatavehiclemaster_new[".advSearchFields"][] = "InsuranceDue";
$tdatavehiclemaster_new[".advSearchFields"][] = "Last Mileage";

$tdatavehiclemaster_new[".tableType"] = "list";

$tdatavehiclemaster_new[".printerPageOrientation"] = 0;
$tdatavehiclemaster_new[".nPrinterPageScale"] = 100;

$tdatavehiclemaster_new[".nPrinterSplitRecords"] = 40;

$tdatavehiclemaster_new[".nPrinterPDFSplitRecords"] = 40;



$tdatavehiclemaster_new[".geocodingEnabled"] = false;




	





// view page pdf
$tdatavehiclemaster_new[".isViewPagePDF"] = true;
$tdatavehiclemaster_new[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatavehiclemaster_new[".isPrinterPagePDF"] = true;
$tdatavehiclemaster_new[".nPrinterPagePDFScale"] = 100;


$tdatavehiclemaster_new[".pageSize"] = 20;

$tdatavehiclemaster_new[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavehiclemaster_new[".strOrderBy"] = $tstrOrderBy;

$tdatavehiclemaster_new[".orderindexes"] = array();

$tdatavehiclemaster_new[".sqlHead"] = "SELECT vehiclemaster.ID,  vehiclemaster.RegNo,  vehiclemaster.Fleet,  vehiclemaster.`Type`,  vehiclemaster.RegDate,  vehiclemaster.Cost,  vehiclemaster.DriverAsigned,  vehiclemaster.Make,  vehiclemaster.Model,  vehiclemaster.InsuranceDue,  MAX(fuelmaster.MeterReading) AS `Last Mileage`,  fuelmaster.FullTank";
$tdatavehiclemaster_new[".sqlFrom"] = "FROM vehiclemaster  LEFT OUTER JOIN fuelmaster ON vehiclemaster.RegNo = fuelmaster.Vehicle";
$tdatavehiclemaster_new[".sqlWhereExpr"] = "";
$tdatavehiclemaster_new[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatavehiclemaster_new[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavehiclemaster_new[".arrGroupsPerPage"] = $arrGPP;

$tdatavehiclemaster_new[".highlightSearchResults"] = true;

$tableKeysvehiclemaster_new = array();
$tableKeysvehiclemaster_new[] = "ID";
$tdatavehiclemaster_new[".Keys"] = $tableKeysvehiclemaster_new;

$tdatavehiclemaster_new[".listFields"] = array();
$tdatavehiclemaster_new[".listFields"][] = "FullTank";
$tdatavehiclemaster_new[".listFields"][] = "ID";
$tdatavehiclemaster_new[".listFields"][] = "Fleet";
$tdatavehiclemaster_new[".listFields"][] = "Type";
$tdatavehiclemaster_new[".listFields"][] = "RegDate";
$tdatavehiclemaster_new[".listFields"][] = "RegNo";
$tdatavehiclemaster_new[".listFields"][] = "Make";
$tdatavehiclemaster_new[".listFields"][] = "Model";
$tdatavehiclemaster_new[".listFields"][] = "Cost";
$tdatavehiclemaster_new[".listFields"][] = "DriverAsigned";
$tdatavehiclemaster_new[".listFields"][] = "InsuranceDue";
$tdatavehiclemaster_new[".listFields"][] = "Last Mileage";

$tdatavehiclemaster_new[".hideMobileList"] = array();


$tdatavehiclemaster_new[".viewFields"] = array();
$tdatavehiclemaster_new[".viewFields"][] = "FullTank";
$tdatavehiclemaster_new[".viewFields"][] = "ID";
$tdatavehiclemaster_new[".viewFields"][] = "Fleet";
$tdatavehiclemaster_new[".viewFields"][] = "Type";
$tdatavehiclemaster_new[".viewFields"][] = "RegDate";
$tdatavehiclemaster_new[".viewFields"][] = "RegNo";
$tdatavehiclemaster_new[".viewFields"][] = "Make";
$tdatavehiclemaster_new[".viewFields"][] = "Model";
$tdatavehiclemaster_new[".viewFields"][] = "Cost";
$tdatavehiclemaster_new[".viewFields"][] = "DriverAsigned";
$tdatavehiclemaster_new[".viewFields"][] = "InsuranceDue";
$tdatavehiclemaster_new[".viewFields"][] = "Last Mileage";

$tdatavehiclemaster_new[".addFields"] = array();
$tdatavehiclemaster_new[".addFields"][] = "Fleet";
$tdatavehiclemaster_new[".addFields"][] = "Type";
$tdatavehiclemaster_new[".addFields"][] = "RegDate";
$tdatavehiclemaster_new[".addFields"][] = "RegNo";
$tdatavehiclemaster_new[".addFields"][] = "Make";
$tdatavehiclemaster_new[".addFields"][] = "Model";
$tdatavehiclemaster_new[".addFields"][] = "Cost";
$tdatavehiclemaster_new[".addFields"][] = "DriverAsigned";
$tdatavehiclemaster_new[".addFields"][] = "InsuranceDue";

$tdatavehiclemaster_new[".masterListFields"] = array();
$tdatavehiclemaster_new[".masterListFields"][] = "FullTank";
$tdatavehiclemaster_new[".masterListFields"][] = "ID";
$tdatavehiclemaster_new[".masterListFields"][] = "Fleet";
$tdatavehiclemaster_new[".masterListFields"][] = "Type";
$tdatavehiclemaster_new[".masterListFields"][] = "RegDate";
$tdatavehiclemaster_new[".masterListFields"][] = "RegNo";
$tdatavehiclemaster_new[".masterListFields"][] = "Make";
$tdatavehiclemaster_new[".masterListFields"][] = "Model";
$tdatavehiclemaster_new[".masterListFields"][] = "Cost";
$tdatavehiclemaster_new[".masterListFields"][] = "DriverAsigned";
$tdatavehiclemaster_new[".masterListFields"][] = "InsuranceDue";
$tdatavehiclemaster_new[".masterListFields"][] = "Last Mileage";

$tdatavehiclemaster_new[".inlineAddFields"] = array();

$tdatavehiclemaster_new[".editFields"] = array();
$tdatavehiclemaster_new[".editFields"][] = "Fleet";
$tdatavehiclemaster_new[".editFields"][] = "Type";
$tdatavehiclemaster_new[".editFields"][] = "RegDate";
$tdatavehiclemaster_new[".editFields"][] = "RegNo";
$tdatavehiclemaster_new[".editFields"][] = "Make";
$tdatavehiclemaster_new[".editFields"][] = "Model";
$tdatavehiclemaster_new[".editFields"][] = "Cost";
$tdatavehiclemaster_new[".editFields"][] = "DriverAsigned";
$tdatavehiclemaster_new[".editFields"][] = "InsuranceDue";

$tdatavehiclemaster_new[".inlineEditFields"] = array();

$tdatavehiclemaster_new[".exportFields"] = array();
$tdatavehiclemaster_new[".exportFields"][] = "FullTank";
$tdatavehiclemaster_new[".exportFields"][] = "ID";
$tdatavehiclemaster_new[".exportFields"][] = "Fleet";
$tdatavehiclemaster_new[".exportFields"][] = "Type";
$tdatavehiclemaster_new[".exportFields"][] = "RegDate";
$tdatavehiclemaster_new[".exportFields"][] = "RegNo";
$tdatavehiclemaster_new[".exportFields"][] = "Make";
$tdatavehiclemaster_new[".exportFields"][] = "Model";
$tdatavehiclemaster_new[".exportFields"][] = "Cost";
$tdatavehiclemaster_new[".exportFields"][] = "DriverAsigned";
$tdatavehiclemaster_new[".exportFields"][] = "InsuranceDue";
$tdatavehiclemaster_new[".exportFields"][] = "Last Mileage";

$tdatavehiclemaster_new[".importFields"] = array();
$tdatavehiclemaster_new[".importFields"][] = "ID";
$tdatavehiclemaster_new[".importFields"][] = "RegNo";
$tdatavehiclemaster_new[".importFields"][] = "Fleet";
$tdatavehiclemaster_new[".importFields"][] = "Type";
$tdatavehiclemaster_new[".importFields"][] = "RegDate";
$tdatavehiclemaster_new[".importFields"][] = "Cost";
$tdatavehiclemaster_new[".importFields"][] = "DriverAsigned";
$tdatavehiclemaster_new[".importFields"][] = "Make";
$tdatavehiclemaster_new[".importFields"][] = "Model";
$tdatavehiclemaster_new[".importFields"][] = "InsuranceDue";
$tdatavehiclemaster_new[".importFields"][] = "Last Mileage";
$tdatavehiclemaster_new[".importFields"][] = "FullTank";

$tdatavehiclemaster_new[".printFields"] = array();
$tdatavehiclemaster_new[".printFields"][] = "FullTank";
$tdatavehiclemaster_new[".printFields"][] = "ID";
$tdatavehiclemaster_new[".printFields"][] = "Fleet";
$tdatavehiclemaster_new[".printFields"][] = "Type";
$tdatavehiclemaster_new[".printFields"][] = "RegDate";
$tdatavehiclemaster_new[".printFields"][] = "RegNo";
$tdatavehiclemaster_new[".printFields"][] = "Make";
$tdatavehiclemaster_new[".printFields"][] = "Model";
$tdatavehiclemaster_new[".printFields"][] = "Cost";
$tdatavehiclemaster_new[".printFields"][] = "DriverAsigned";
$tdatavehiclemaster_new[".printFields"][] = "InsuranceDue";
$tdatavehiclemaster_new[".printFields"][] = "Last Mileage";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_new","ID"); 
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

	

	
	$tdatavehiclemaster_new["ID"] = $fdata;
//	RegNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RegNo";
	$fdata["GoodName"] = "RegNo";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_new","RegNo"); 
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

	

	
	$tdatavehiclemaster_new["RegNo"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_new","Fleet"); 
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
		$edata["autoCompleteFieldsOnEdit"] = 1;
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

	

	
	$tdatavehiclemaster_new["Fleet"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_new","Type"); 
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

	

	
	$tdatavehiclemaster_new["Type"] = $fdata;
//	RegDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RegDate";
	$fdata["GoodName"] = "RegDate";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_new","RegDate"); 
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

	

	
	$tdatavehiclemaster_new["RegDate"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_new","Cost"); 
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

	

	
	$tdatavehiclemaster_new["Cost"] = $fdata;
//	DriverAsigned
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DriverAsigned";
	$fdata["GoodName"] = "DriverAsigned";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_new","DriverAsigned"); 
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

	

	
	$tdatavehiclemaster_new["DriverAsigned"] = $fdata;
//	Make
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Make";
	$fdata["GoodName"] = "Make";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_new","Make"); 
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

	

	
	$tdatavehiclemaster_new["Make"] = $fdata;
//	Model
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Model";
	$fdata["GoodName"] = "Model";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_new","Model"); 
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

	

	
	$tdatavehiclemaster_new["Model"] = $fdata;
//	InsuranceDue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "InsuranceDue";
	$fdata["GoodName"] = "InsuranceDue";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_new","InsuranceDue"); 
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

	

	
	$tdatavehiclemaster_new["InsuranceDue"] = $fdata;
//	Last Mileage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Last Mileage";
	$fdata["GoodName"] = "Last_Mileage";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_new","Last_Mileage"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Last Mileage"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX(fuelmaster.MeterReading)";
	
		
		
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

	

	
	$tdatavehiclemaster_new["Last Mileage"] = $fdata;
//	FullTank
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FullTank";
	$fdata["GoodName"] = "FullTank";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_new","FullTank"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "FullTank"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fuelmaster.FullTank";
	
		
		
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

	

	
	$tdatavehiclemaster_new["FullTank"] = $fdata;

	
$tables_data["vehiclemaster-new"]=&$tdatavehiclemaster_new;
$field_labels["vehiclemaster_new"] = &$fieldLabelsvehiclemaster_new;
$fieldToolTips["vehiclemaster-new"] = &$fieldToolTipsvehiclemaster_new;
$page_titles["vehiclemaster_new"] = &$pageTitlesvehiclemaster_new;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vehiclemaster-new"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["vehiclemaster-new"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vehiclemaster_new()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "vehiclemaster.ID,  vehiclemaster.RegNo,  vehiclemaster.Fleet,  vehiclemaster.`Type`,  vehiclemaster.RegDate,  vehiclemaster.Cost,  vehiclemaster.DriverAsigned,  vehiclemaster.Make,  vehiclemaster.Model,  vehiclemaster.InsuranceDue,  MAX(fuelmaster.MeterReading) AS `Last Mileage`,  fuelmaster.FullTank";
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
	"m_srcTableName" => "vehiclemaster-new"
));

$proto5["m_sql"] = "vehiclemaster.ID";
$proto5["m_srcTableName"] = "vehiclemaster-new";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-new"
));

$proto7["m_sql"] = "vehiclemaster.RegNo";
$proto7["m_srcTableName"] = "vehiclemaster-new";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-new"
));

$proto9["m_sql"] = "vehiclemaster.Fleet";
$proto9["m_srcTableName"] = "vehiclemaster-new";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-new"
));

$proto11["m_sql"] = "vehiclemaster.`Type`";
$proto11["m_srcTableName"] = "vehiclemaster-new";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "RegDate",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-new"
));

$proto13["m_sql"] = "vehiclemaster.RegDate";
$proto13["m_srcTableName"] = "vehiclemaster-new";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-new"
));

$proto15["m_sql"] = "vehiclemaster.Cost";
$proto15["m_srcTableName"] = "vehiclemaster-new";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "DriverAsigned",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-new"
));

$proto17["m_sql"] = "vehiclemaster.DriverAsigned";
$proto17["m_srcTableName"] = "vehiclemaster-new";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Make",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-new"
));

$proto19["m_sql"] = "vehiclemaster.Make";
$proto19["m_srcTableName"] = "vehiclemaster-new";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Model",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-new"
));

$proto21["m_sql"] = "vehiclemaster.Model";
$proto21["m_srcTableName"] = "vehiclemaster-new";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "InsuranceDue",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-new"
));

$proto23["m_sql"] = "vehiclemaster.InsuranceDue";
$proto23["m_srcTableName"] = "vehiclemaster-new";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$proto26=array();
$proto26["m_functiontype"] = "SQLF_MAX";
$proto26["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "MeterReading",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "vehiclemaster-new"
));

$proto26["m_arguments"][]=$obj;
$proto26["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto26);

$proto25["m_sql"] = "MAX(fuelmaster.MeterReading)";
$proto25["m_srcTableName"] = "vehiclemaster-new";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "Last Mileage";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "FullTank",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "vehiclemaster-new"
));

$proto28["m_sql"] = "fuelmaster.FullTank";
$proto28["m_srcTableName"] = "vehiclemaster-new";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "vehiclemaster";
$proto31["m_srcTableName"] = "vehiclemaster-new";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "ID";
$proto31["m_columns"][] = "RegNo";
$proto31["m_columns"][] = "Fleet";
$proto31["m_columns"][] = "Type";
$proto31["m_columns"][] = "RegDate";
$proto31["m_columns"][] = "Cost";
$proto31["m_columns"][] = "DriverAsigned";
$proto31["m_columns"][] = "Make";
$proto31["m_columns"][] = "Model";
$proto31["m_columns"][] = "InsuranceDue";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "vehiclemaster";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "vehiclemaster-new";
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
												$proto34=array();
$proto34["m_link"] = "SQLL_LEFTJOIN";
			$proto35=array();
$proto35["m_strName"] = "fuelmaster";
$proto35["m_srcTableName"] = "vehiclemaster-new";
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
$proto35["m_columns"][] = "FullTank";
$proto35["m_columns"][] = "Economy";
$proto35["m_columns"][] = "LastRefill";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "LEFT OUTER JOIN fuelmaster ON vehiclemaster.RegNo = fuelmaster.Vehicle";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "vehiclemaster-new";
$proto36=array();
$proto36["m_sql"] = "vehiclemaster.RegNo = fuelmaster.Vehicle";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-new"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "= fuelmaster.Vehicle";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-new"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-new"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-new"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-new"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "RegDate",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-new"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-new"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "DriverAsigned",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-new"
));

$proto50["m_column"]=$obj;
$obj = new SQLGroupByItem($proto50);

$proto0["m_groupby"][]=$obj;
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "Make",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-new"
));

$proto52["m_column"]=$obj;
$obj = new SQLGroupByItem($proto52);

$proto0["m_groupby"][]=$obj;
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "Model",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-new"
));

$proto54["m_column"]=$obj;
$obj = new SQLGroupByItem($proto54);

$proto0["m_groupby"][]=$obj;
												$proto56=array();
						$obj = new SQLField(array(
	"m_strName" => "InsuranceDue",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-new"
));

$proto56["m_column"]=$obj;
$obj = new SQLGroupByItem($proto56);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vehiclemaster-new";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vehiclemaster_new = createSqlQuery_vehiclemaster_new();


	
												
	
$tdatavehiclemaster_new[".sqlquery"] = $queryData_vehiclemaster_new;

$tableEvents["vehiclemaster-new"] = new eventsBase;
$tdatavehiclemaster_new[".hasEvents"] = false;

?>