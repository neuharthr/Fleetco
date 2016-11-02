<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavehiclemaster_adding = array();	
	$tdatavehiclemaster_adding[".truncateText"] = true;
	$tdatavehiclemaster_adding[".NumberOfChars"] = 80; 
	$tdatavehiclemaster_adding[".ShortName"] = "vehiclemaster_adding";
	$tdatavehiclemaster_adding[".OwnerID"] = "";
	$tdatavehiclemaster_adding[".OriginalTable"] = "vehiclemaster";

//	field labels
$fieldLabelsvehiclemaster_adding = array();
$fieldToolTipsvehiclemaster_adding = array();
$pageTitlesvehiclemaster_adding = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvehiclemaster_adding["English"] = array();
	$fieldToolTipsvehiclemaster_adding["English"] = array();
	$pageTitlesvehiclemaster_adding["English"] = array();
	$fieldLabelsvehiclemaster_adding["English"]["ID"] = "ID";
	$fieldToolTipsvehiclemaster_adding["English"]["ID"] = "";
	$fieldLabelsvehiclemaster_adding["English"]["RegNo"] = "Reg No";
	$fieldToolTipsvehiclemaster_adding["English"]["RegNo"] = "";
	$fieldLabelsvehiclemaster_adding["English"]["Fleet"] = "Fleet";
	$fieldToolTipsvehiclemaster_adding["English"]["Fleet"] = "";
	$fieldLabelsvehiclemaster_adding["English"]["Type"] = "Type";
	$fieldToolTipsvehiclemaster_adding["English"]["Type"] = "";
	$fieldLabelsvehiclemaster_adding["English"]["RegDate"] = "Reg Date";
	$fieldToolTipsvehiclemaster_adding["English"]["RegDate"] = "";
	$fieldLabelsvehiclemaster_adding["English"]["Cost"] = "Cost";
	$fieldToolTipsvehiclemaster_adding["English"]["Cost"] = "";
	$fieldLabelsvehiclemaster_adding["English"]["DriverAsigned"] = "Driver Asigned";
	$fieldToolTipsvehiclemaster_adding["English"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster_adding["English"]["Make"] = "Make";
	$fieldToolTipsvehiclemaster_adding["English"]["Make"] = "";
	$fieldLabelsvehiclemaster_adding["English"]["Model"] = "Model";
	$fieldToolTipsvehiclemaster_adding["English"]["Model"] = "";
	$fieldLabelsvehiclemaster_adding["English"]["InsuranceDue"] = "Insurance Due";
	$fieldToolTipsvehiclemaster_adding["English"]["InsuranceDue"] = "";
	$fieldLabelsvehiclemaster_adding["English"]["Last_Mileage"] = "Last Mileage";
	$fieldToolTipsvehiclemaster_adding["English"]["Last Mileage"] = "";
	$fieldLabelsvehiclemaster_adding["English"]["FullTank"] = "Full Tank";
	$fieldToolTipsvehiclemaster_adding["English"]["FullTank"] = "";
	if (count($fieldToolTipsvehiclemaster_adding["English"]))
		$tdatavehiclemaster_adding[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvehiclemaster_adding[""] = array();
	$fieldToolTipsvehiclemaster_adding[""] = array();
	$pageTitlesvehiclemaster_adding[""] = array();
	$fieldLabelsvehiclemaster_adding[""]["FullTank"] = "Full Tank";
	$fieldToolTipsvehiclemaster_adding[""]["FullTank"] = "";
	if (count($fieldToolTipsvehiclemaster_adding[""]))
		$tdatavehiclemaster_adding[".isUseToolTips"] = true;
}
	
	
	$tdatavehiclemaster_adding[".NCSearch"] = true;



$tdatavehiclemaster_adding[".shortTableName"] = "vehiclemaster_adding";
$tdatavehiclemaster_adding[".nSecOptions"] = 0;
$tdatavehiclemaster_adding[".recsPerRowList"] = 1;
$tdatavehiclemaster_adding[".recsPerRowPrint"] = 1;
$tdatavehiclemaster_adding[".mainTableOwnerID"] = "";
$tdatavehiclemaster_adding[".moveNext"] = 1;
$tdatavehiclemaster_adding[".entityType"] = 1;

$tdatavehiclemaster_adding[".strOriginalTableName"] = "vehiclemaster";




$tdatavehiclemaster_adding[".showAddInPopup"] = false;

$tdatavehiclemaster_adding[".showEditInPopup"] = false;

$tdatavehiclemaster_adding[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavehiclemaster_adding[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavehiclemaster_adding[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatavehiclemaster_adding[".listAjax"] = true;
else 
	$tdatavehiclemaster_adding[".listAjax"] = false;

	$tdatavehiclemaster_adding[".audit"] = false;

	$tdatavehiclemaster_adding[".locking"] = false;

$tdatavehiclemaster_adding[".edit"] = true;
$tdatavehiclemaster_adding[".afterEditAction"] = 1;
$tdatavehiclemaster_adding[".closePopupAfterEdit"] = 1;
$tdatavehiclemaster_adding[".afterEditActionDetTable"] = "";

$tdatavehiclemaster_adding[".add"] = true;
$tdatavehiclemaster_adding[".afterAddAction"] = 1;
$tdatavehiclemaster_adding[".closePopupAfterAdd"] = 1;
$tdatavehiclemaster_adding[".afterAddActionDetTable"] = "";

$tdatavehiclemaster_adding[".list"] = true;

$tdatavehiclemaster_adding[".view"] = true;

$tdatavehiclemaster_adding[".import"] = true;

$tdatavehiclemaster_adding[".exportTo"] = true;

$tdatavehiclemaster_adding[".printFriendly"] = true;

$tdatavehiclemaster_adding[".delete"] = true;

$tdatavehiclemaster_adding[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatavehiclemaster_adding[".searchSaving"] = false;
//

$tdatavehiclemaster_adding[".showSearchPanel"] = true;
		$tdatavehiclemaster_adding[".flexibleSearch"] = true;		

if (isMobile())
	$tdatavehiclemaster_adding[".isUseAjaxSuggest"] = false;
else 
	$tdatavehiclemaster_adding[".isUseAjaxSuggest"] = true;

$tdatavehiclemaster_adding[".rowHighlite"] = true;



$tdatavehiclemaster_adding[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavehiclemaster_adding[".isUseTimeForSearch"] = false;





$tdatavehiclemaster_adding[".allSearchFields"] = array();
$tdatavehiclemaster_adding[".filterFields"] = array();
$tdatavehiclemaster_adding[".requiredSearchFields"] = array();

$tdatavehiclemaster_adding[".allSearchFields"][] = "FullTank";
	$tdatavehiclemaster_adding[".allSearchFields"][] = "ID";
	$tdatavehiclemaster_adding[".allSearchFields"][] = "Fleet";
	$tdatavehiclemaster_adding[".allSearchFields"][] = "Type";
	$tdatavehiclemaster_adding[".allSearchFields"][] = "RegDate";
	$tdatavehiclemaster_adding[".allSearchFields"][] = "RegNo";
	$tdatavehiclemaster_adding[".allSearchFields"][] = "Make";
	$tdatavehiclemaster_adding[".allSearchFields"][] = "Model";
	$tdatavehiclemaster_adding[".allSearchFields"][] = "Cost";
	$tdatavehiclemaster_adding[".allSearchFields"][] = "DriverAsigned";
	$tdatavehiclemaster_adding[".allSearchFields"][] = "InsuranceDue";
	$tdatavehiclemaster_adding[".allSearchFields"][] = "Last Mileage";
	

$tdatavehiclemaster_adding[".googleLikeFields"] = array();
$tdatavehiclemaster_adding[".googleLikeFields"][] = "ID";
$tdatavehiclemaster_adding[".googleLikeFields"][] = "RegNo";
$tdatavehiclemaster_adding[".googleLikeFields"][] = "Fleet";
$tdatavehiclemaster_adding[".googleLikeFields"][] = "Type";
$tdatavehiclemaster_adding[".googleLikeFields"][] = "RegDate";
$tdatavehiclemaster_adding[".googleLikeFields"][] = "Cost";
$tdatavehiclemaster_adding[".googleLikeFields"][] = "DriverAsigned";
$tdatavehiclemaster_adding[".googleLikeFields"][] = "Make";
$tdatavehiclemaster_adding[".googleLikeFields"][] = "Model";
$tdatavehiclemaster_adding[".googleLikeFields"][] = "InsuranceDue";
$tdatavehiclemaster_adding[".googleLikeFields"][] = "Last Mileage";
$tdatavehiclemaster_adding[".googleLikeFields"][] = "FullTank";


$tdatavehiclemaster_adding[".advSearchFields"] = array();
$tdatavehiclemaster_adding[".advSearchFields"][] = "FullTank";
$tdatavehiclemaster_adding[".advSearchFields"][] = "ID";
$tdatavehiclemaster_adding[".advSearchFields"][] = "Fleet";
$tdatavehiclemaster_adding[".advSearchFields"][] = "Type";
$tdatavehiclemaster_adding[".advSearchFields"][] = "RegDate";
$tdatavehiclemaster_adding[".advSearchFields"][] = "RegNo";
$tdatavehiclemaster_adding[".advSearchFields"][] = "Make";
$tdatavehiclemaster_adding[".advSearchFields"][] = "Model";
$tdatavehiclemaster_adding[".advSearchFields"][] = "Cost";
$tdatavehiclemaster_adding[".advSearchFields"][] = "DriverAsigned";
$tdatavehiclemaster_adding[".advSearchFields"][] = "InsuranceDue";
$tdatavehiclemaster_adding[".advSearchFields"][] = "Last Mileage";

$tdatavehiclemaster_adding[".tableType"] = "list";

$tdatavehiclemaster_adding[".printerPageOrientation"] = 0;
$tdatavehiclemaster_adding[".nPrinterPageScale"] = 100;

$tdatavehiclemaster_adding[".nPrinterSplitRecords"] = 40;

$tdatavehiclemaster_adding[".nPrinterPDFSplitRecords"] = 40;



$tdatavehiclemaster_adding[".geocodingEnabled"] = false;




	





// view page pdf
$tdatavehiclemaster_adding[".isViewPagePDF"] = true;
$tdatavehiclemaster_adding[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatavehiclemaster_adding[".isPrinterPagePDF"] = true;
$tdatavehiclemaster_adding[".nPrinterPagePDFScale"] = 100;


$tdatavehiclemaster_adding[".pageSize"] = 20;

$tdatavehiclemaster_adding[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavehiclemaster_adding[".strOrderBy"] = $tstrOrderBy;

$tdatavehiclemaster_adding[".orderindexes"] = array();

$tdatavehiclemaster_adding[".sqlHead"] = "SELECT vehiclemaster.ID,  vehiclemaster.RegNo,  vehiclemaster.Fleet,  vehiclemaster.`Type`,  vehiclemaster.RegDate,  vehiclemaster.Cost,  vehiclemaster.DriverAsigned,  vehiclemaster.Make,  vehiclemaster.Model,  vehiclemaster.InsuranceDue,  MAX(fuelmaster.MeterReading) AS `Last Mileage`,  fuelmaster.FullTank";
$tdatavehiclemaster_adding[".sqlFrom"] = "FROM vehiclemaster  LEFT OUTER JOIN fuelmaster ON vehiclemaster.RegNo = fuelmaster.Vehicle";
$tdatavehiclemaster_adding[".sqlWhereExpr"] = "";
$tdatavehiclemaster_adding[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatavehiclemaster_adding[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavehiclemaster_adding[".arrGroupsPerPage"] = $arrGPP;

$tdatavehiclemaster_adding[".highlightSearchResults"] = true;

$tableKeysvehiclemaster_adding = array();
$tableKeysvehiclemaster_adding[] = "ID";
$tdatavehiclemaster_adding[".Keys"] = $tableKeysvehiclemaster_adding;

$tdatavehiclemaster_adding[".listFields"] = array();
$tdatavehiclemaster_adding[".listFields"][] = "FullTank";
$tdatavehiclemaster_adding[".listFields"][] = "ID";
$tdatavehiclemaster_adding[".listFields"][] = "Fleet";
$tdatavehiclemaster_adding[".listFields"][] = "Type";
$tdatavehiclemaster_adding[".listFields"][] = "RegDate";
$tdatavehiclemaster_adding[".listFields"][] = "RegNo";
$tdatavehiclemaster_adding[".listFields"][] = "Make";
$tdatavehiclemaster_adding[".listFields"][] = "Model";
$tdatavehiclemaster_adding[".listFields"][] = "Cost";
$tdatavehiclemaster_adding[".listFields"][] = "DriverAsigned";
$tdatavehiclemaster_adding[".listFields"][] = "InsuranceDue";
$tdatavehiclemaster_adding[".listFields"][] = "Last Mileage";

$tdatavehiclemaster_adding[".hideMobileList"] = array();


$tdatavehiclemaster_adding[".viewFields"] = array();
$tdatavehiclemaster_adding[".viewFields"][] = "FullTank";
$tdatavehiclemaster_adding[".viewFields"][] = "ID";
$tdatavehiclemaster_adding[".viewFields"][] = "Fleet";
$tdatavehiclemaster_adding[".viewFields"][] = "Type";
$tdatavehiclemaster_adding[".viewFields"][] = "RegDate";
$tdatavehiclemaster_adding[".viewFields"][] = "RegNo";
$tdatavehiclemaster_adding[".viewFields"][] = "Make";
$tdatavehiclemaster_adding[".viewFields"][] = "Model";
$tdatavehiclemaster_adding[".viewFields"][] = "Cost";
$tdatavehiclemaster_adding[".viewFields"][] = "DriverAsigned";
$tdatavehiclemaster_adding[".viewFields"][] = "InsuranceDue";
$tdatavehiclemaster_adding[".viewFields"][] = "Last Mileage";

$tdatavehiclemaster_adding[".addFields"] = array();
$tdatavehiclemaster_adding[".addFields"][] = "Fleet";
$tdatavehiclemaster_adding[".addFields"][] = "Type";
$tdatavehiclemaster_adding[".addFields"][] = "RegDate";
$tdatavehiclemaster_adding[".addFields"][] = "RegNo";
$tdatavehiclemaster_adding[".addFields"][] = "Make";
$tdatavehiclemaster_adding[".addFields"][] = "Model";
$tdatavehiclemaster_adding[".addFields"][] = "Cost";
$tdatavehiclemaster_adding[".addFields"][] = "DriverAsigned";
$tdatavehiclemaster_adding[".addFields"][] = "InsuranceDue";

$tdatavehiclemaster_adding[".masterListFields"] = array();
$tdatavehiclemaster_adding[".masterListFields"][] = "FullTank";
$tdatavehiclemaster_adding[".masterListFields"][] = "ID";
$tdatavehiclemaster_adding[".masterListFields"][] = "Fleet";
$tdatavehiclemaster_adding[".masterListFields"][] = "Type";
$tdatavehiclemaster_adding[".masterListFields"][] = "RegDate";
$tdatavehiclemaster_adding[".masterListFields"][] = "RegNo";
$tdatavehiclemaster_adding[".masterListFields"][] = "Make";
$tdatavehiclemaster_adding[".masterListFields"][] = "Model";
$tdatavehiclemaster_adding[".masterListFields"][] = "Cost";
$tdatavehiclemaster_adding[".masterListFields"][] = "DriverAsigned";
$tdatavehiclemaster_adding[".masterListFields"][] = "InsuranceDue";
$tdatavehiclemaster_adding[".masterListFields"][] = "Last Mileage";

$tdatavehiclemaster_adding[".inlineAddFields"] = array();

$tdatavehiclemaster_adding[".editFields"] = array();
$tdatavehiclemaster_adding[".editFields"][] = "Fleet";
$tdatavehiclemaster_adding[".editFields"][] = "Type";
$tdatavehiclemaster_adding[".editFields"][] = "RegDate";
$tdatavehiclemaster_adding[".editFields"][] = "RegNo";
$tdatavehiclemaster_adding[".editFields"][] = "Make";
$tdatavehiclemaster_adding[".editFields"][] = "Model";
$tdatavehiclemaster_adding[".editFields"][] = "Cost";
$tdatavehiclemaster_adding[".editFields"][] = "DriverAsigned";
$tdatavehiclemaster_adding[".editFields"][] = "InsuranceDue";

$tdatavehiclemaster_adding[".inlineEditFields"] = array();

$tdatavehiclemaster_adding[".exportFields"] = array();
$tdatavehiclemaster_adding[".exportFields"][] = "FullTank";
$tdatavehiclemaster_adding[".exportFields"][] = "ID";
$tdatavehiclemaster_adding[".exportFields"][] = "Fleet";
$tdatavehiclemaster_adding[".exportFields"][] = "Type";
$tdatavehiclemaster_adding[".exportFields"][] = "RegDate";
$tdatavehiclemaster_adding[".exportFields"][] = "RegNo";
$tdatavehiclemaster_adding[".exportFields"][] = "Make";
$tdatavehiclemaster_adding[".exportFields"][] = "Model";
$tdatavehiclemaster_adding[".exportFields"][] = "Cost";
$tdatavehiclemaster_adding[".exportFields"][] = "DriverAsigned";
$tdatavehiclemaster_adding[".exportFields"][] = "InsuranceDue";
$tdatavehiclemaster_adding[".exportFields"][] = "Last Mileage";

$tdatavehiclemaster_adding[".importFields"] = array();
$tdatavehiclemaster_adding[".importFields"][] = "ID";
$tdatavehiclemaster_adding[".importFields"][] = "RegNo";
$tdatavehiclemaster_adding[".importFields"][] = "Fleet";
$tdatavehiclemaster_adding[".importFields"][] = "Type";
$tdatavehiclemaster_adding[".importFields"][] = "RegDate";
$tdatavehiclemaster_adding[".importFields"][] = "Cost";
$tdatavehiclemaster_adding[".importFields"][] = "DriverAsigned";
$tdatavehiclemaster_adding[".importFields"][] = "Make";
$tdatavehiclemaster_adding[".importFields"][] = "Model";
$tdatavehiclemaster_adding[".importFields"][] = "InsuranceDue";
$tdatavehiclemaster_adding[".importFields"][] = "Last Mileage";
$tdatavehiclemaster_adding[".importFields"][] = "FullTank";

$tdatavehiclemaster_adding[".printFields"] = array();
$tdatavehiclemaster_adding[".printFields"][] = "FullTank";
$tdatavehiclemaster_adding[".printFields"][] = "ID";
$tdatavehiclemaster_adding[".printFields"][] = "Fleet";
$tdatavehiclemaster_adding[".printFields"][] = "Type";
$tdatavehiclemaster_adding[".printFields"][] = "RegDate";
$tdatavehiclemaster_adding[".printFields"][] = "RegNo";
$tdatavehiclemaster_adding[".printFields"][] = "Make";
$tdatavehiclemaster_adding[".printFields"][] = "Model";
$tdatavehiclemaster_adding[".printFields"][] = "Cost";
$tdatavehiclemaster_adding[".printFields"][] = "DriverAsigned";
$tdatavehiclemaster_adding[".printFields"][] = "InsuranceDue";
$tdatavehiclemaster_adding[".printFields"][] = "Last Mileage";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_adding","ID"); 
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

	

	
	$tdatavehiclemaster_adding["ID"] = $fdata;
//	RegNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RegNo";
	$fdata["GoodName"] = "RegNo";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_adding","RegNo"); 
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

	

	
	$tdatavehiclemaster_adding["RegNo"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_adding","Fleet"); 
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

	

	
	$tdatavehiclemaster_adding["Fleet"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_adding","Type"); 
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

	

	
	$tdatavehiclemaster_adding["Type"] = $fdata;
//	RegDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RegDate";
	$fdata["GoodName"] = "RegDate";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_adding","RegDate"); 
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

	

	
	$tdatavehiclemaster_adding["RegDate"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_adding","Cost"); 
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

	

	
	$tdatavehiclemaster_adding["Cost"] = $fdata;
//	DriverAsigned
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DriverAsigned";
	$fdata["GoodName"] = "DriverAsigned";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_adding","DriverAsigned"); 
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

	

	
	$tdatavehiclemaster_adding["DriverAsigned"] = $fdata;
//	Make
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Make";
	$fdata["GoodName"] = "Make";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_adding","Make"); 
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

	

	
	$tdatavehiclemaster_adding["Make"] = $fdata;
//	Model
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Model";
	$fdata["GoodName"] = "Model";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_adding","Model"); 
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

	

	
	$tdatavehiclemaster_adding["Model"] = $fdata;
//	InsuranceDue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "InsuranceDue";
	$fdata["GoodName"] = "InsuranceDue";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_adding","InsuranceDue"); 
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

	

	
	$tdatavehiclemaster_adding["InsuranceDue"] = $fdata;
//	Last Mileage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Last Mileage";
	$fdata["GoodName"] = "Last_Mileage";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_adding","Last_Mileage"); 
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

	

	
	$tdatavehiclemaster_adding["Last Mileage"] = $fdata;
//	FullTank
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FullTank";
	$fdata["GoodName"] = "FullTank";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_adding","FullTank"); 
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

	

	
	$tdatavehiclemaster_adding["FullTank"] = $fdata;

	
$tables_data["vehiclemaster-adding"]=&$tdatavehiclemaster_adding;
$field_labels["vehiclemaster_adding"] = &$fieldLabelsvehiclemaster_adding;
$fieldToolTips["vehiclemaster-adding"] = &$fieldToolTipsvehiclemaster_adding;
$page_titles["vehiclemaster_adding"] = &$pageTitlesvehiclemaster_adding;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vehiclemaster-adding"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["vehiclemaster-adding"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vehiclemaster_adding()
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
	"m_srcTableName" => "vehiclemaster-adding"
));

$proto5["m_sql"] = "vehiclemaster.ID";
$proto5["m_srcTableName"] = "vehiclemaster-adding";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-adding"
));

$proto7["m_sql"] = "vehiclemaster.RegNo";
$proto7["m_srcTableName"] = "vehiclemaster-adding";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-adding"
));

$proto9["m_sql"] = "vehiclemaster.Fleet";
$proto9["m_srcTableName"] = "vehiclemaster-adding";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-adding"
));

$proto11["m_sql"] = "vehiclemaster.`Type`";
$proto11["m_srcTableName"] = "vehiclemaster-adding";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "RegDate",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-adding"
));

$proto13["m_sql"] = "vehiclemaster.RegDate";
$proto13["m_srcTableName"] = "vehiclemaster-adding";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-adding"
));

$proto15["m_sql"] = "vehiclemaster.Cost";
$proto15["m_srcTableName"] = "vehiclemaster-adding";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "DriverAsigned",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-adding"
));

$proto17["m_sql"] = "vehiclemaster.DriverAsigned";
$proto17["m_srcTableName"] = "vehiclemaster-adding";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Make",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-adding"
));

$proto19["m_sql"] = "vehiclemaster.Make";
$proto19["m_srcTableName"] = "vehiclemaster-adding";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Model",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-adding"
));

$proto21["m_sql"] = "vehiclemaster.Model";
$proto21["m_srcTableName"] = "vehiclemaster-adding";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "InsuranceDue",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-adding"
));

$proto23["m_sql"] = "vehiclemaster.InsuranceDue";
$proto23["m_srcTableName"] = "vehiclemaster-adding";
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
	"m_srcTableName" => "vehiclemaster-adding"
));

$proto26["m_arguments"][]=$obj;
$proto26["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto26);

$proto25["m_sql"] = "MAX(fuelmaster.MeterReading)";
$proto25["m_srcTableName"] = "vehiclemaster-adding";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "Last Mileage";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "FullTank",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "vehiclemaster-adding"
));

$proto28["m_sql"] = "fuelmaster.FullTank";
$proto28["m_srcTableName"] = "vehiclemaster-adding";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "vehiclemaster";
$proto31["m_srcTableName"] = "vehiclemaster-adding";
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
$proto30["m_srcTableName"] = "vehiclemaster-adding";
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
$proto35["m_srcTableName"] = "vehiclemaster-adding";
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
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "LEFT OUTER JOIN fuelmaster ON vehiclemaster.RegNo = fuelmaster.Vehicle";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "vehiclemaster-adding";
$proto36=array();
$proto36["m_sql"] = "vehiclemaster.RegNo = fuelmaster.Vehicle";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-adding"
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
	"m_srcTableName" => "vehiclemaster-adding"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-adding"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-adding"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-adding"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "RegDate",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-adding"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-adding"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "DriverAsigned",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-adding"
));

$proto50["m_column"]=$obj;
$obj = new SQLGroupByItem($proto50);

$proto0["m_groupby"][]=$obj;
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "Make",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-adding"
));

$proto52["m_column"]=$obj;
$obj = new SQLGroupByItem($proto52);

$proto0["m_groupby"][]=$obj;
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "Model",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-adding"
));

$proto54["m_column"]=$obj;
$obj = new SQLGroupByItem($proto54);

$proto0["m_groupby"][]=$obj;
												$proto56=array();
						$obj = new SQLField(array(
	"m_strName" => "InsuranceDue",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-adding"
));

$proto56["m_column"]=$obj;
$obj = new SQLGroupByItem($proto56);

$proto0["m_groupby"][]=$obj;
												$proto58=array();
						$obj = new SQLField(array(
	"m_strName" => "FullTank",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "vehiclemaster-adding"
));

$proto58["m_column"]=$obj;
$obj = new SQLGroupByItem($proto58);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vehiclemaster-adding";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vehiclemaster_adding = createSqlQuery_vehiclemaster_adding();


	
												
	
$tdatavehiclemaster_adding[".sqlquery"] = $queryData_vehiclemaster_adding;

$tableEvents["vehiclemaster-adding"] = new eventsBase;
$tdatavehiclemaster_adding[".hasEvents"] = false;

?>