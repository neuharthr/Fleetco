<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavehiclemaster_fuel = array();	
	$tdatavehiclemaster_fuel[".truncateText"] = true;
	$tdatavehiclemaster_fuel[".NumberOfChars"] = 80; 
	$tdatavehiclemaster_fuel[".ShortName"] = "vehiclemaster_fuel";
	$tdatavehiclemaster_fuel[".OwnerID"] = "";
	$tdatavehiclemaster_fuel[".OriginalTable"] = "vehiclemaster";

//	field labels
$fieldLabelsvehiclemaster_fuel = array();
$fieldToolTipsvehiclemaster_fuel = array();
$pageTitlesvehiclemaster_fuel = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvehiclemaster_fuel["English"] = array();
	$fieldToolTipsvehiclemaster_fuel["English"] = array();
	$pageTitlesvehiclemaster_fuel["English"] = array();
	if (count($fieldToolTipsvehiclemaster_fuel["English"]))
		$tdatavehiclemaster_fuel[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvehiclemaster_fuel[""] = array();
	$fieldToolTipsvehiclemaster_fuel[""] = array();
	$pageTitlesvehiclemaster_fuel[""] = array();
	if (count($fieldToolTipsvehiclemaster_fuel[""]))
		$tdatavehiclemaster_fuel[".isUseToolTips"] = true;
}
	
	
	$tdatavehiclemaster_fuel[".NCSearch"] = true;



$tdatavehiclemaster_fuel[".shortTableName"] = "vehiclemaster_fuel";
$tdatavehiclemaster_fuel[".nSecOptions"] = 0;
$tdatavehiclemaster_fuel[".recsPerRowList"] = 1;
$tdatavehiclemaster_fuel[".recsPerRowPrint"] = 1;
$tdatavehiclemaster_fuel[".mainTableOwnerID"] = "";
$tdatavehiclemaster_fuel[".moveNext"] = 1;
$tdatavehiclemaster_fuel[".entityType"] = 1;

$tdatavehiclemaster_fuel[".strOriginalTableName"] = "vehiclemaster";




$tdatavehiclemaster_fuel[".showAddInPopup"] = false;

$tdatavehiclemaster_fuel[".showEditInPopup"] = false;

$tdatavehiclemaster_fuel[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavehiclemaster_fuel[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavehiclemaster_fuel[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatavehiclemaster_fuel[".listAjax"] = true;
else 
	$tdatavehiclemaster_fuel[".listAjax"] = false;

	$tdatavehiclemaster_fuel[".audit"] = false;

	$tdatavehiclemaster_fuel[".locking"] = false;

$tdatavehiclemaster_fuel[".edit"] = true;
$tdatavehiclemaster_fuel[".afterEditAction"] = 1;
$tdatavehiclemaster_fuel[".closePopupAfterEdit"] = 1;
$tdatavehiclemaster_fuel[".afterEditActionDetTable"] = "";

$tdatavehiclemaster_fuel[".add"] = true;
$tdatavehiclemaster_fuel[".afterAddAction"] = 1;
$tdatavehiclemaster_fuel[".closePopupAfterAdd"] = 1;
$tdatavehiclemaster_fuel[".afterAddActionDetTable"] = "";

$tdatavehiclemaster_fuel[".list"] = true;

$tdatavehiclemaster_fuel[".view"] = true;

$tdatavehiclemaster_fuel[".import"] = true;

$tdatavehiclemaster_fuel[".exportTo"] = true;

$tdatavehiclemaster_fuel[".printFriendly"] = true;

$tdatavehiclemaster_fuel[".delete"] = true;

$tdatavehiclemaster_fuel[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatavehiclemaster_fuel[".searchSaving"] = false;
//

$tdatavehiclemaster_fuel[".showSearchPanel"] = true;
		$tdatavehiclemaster_fuel[".flexibleSearch"] = true;		

if (isMobile())
	$tdatavehiclemaster_fuel[".isUseAjaxSuggest"] = false;
else 
	$tdatavehiclemaster_fuel[".isUseAjaxSuggest"] = true;

$tdatavehiclemaster_fuel[".rowHighlite"] = true;



$tdatavehiclemaster_fuel[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavehiclemaster_fuel[".isUseTimeForSearch"] = false;





$tdatavehiclemaster_fuel[".allSearchFields"] = array();
$tdatavehiclemaster_fuel[".filterFields"] = array();
$tdatavehiclemaster_fuel[".requiredSearchFields"] = array();

$tdatavehiclemaster_fuel[".allSearchFields"][] = "LastMileage";
	$tdatavehiclemaster_fuel[".allSearchFields"][] = "Fleet";
	$tdatavehiclemaster_fuel[".allSearchFields"][] = "Type";
	$tdatavehiclemaster_fuel[".allSearchFields"][] = "RegDate";
	$tdatavehiclemaster_fuel[".allSearchFields"][] = "RegNo";
	$tdatavehiclemaster_fuel[".allSearchFields"][] = "Make";
	$tdatavehiclemaster_fuel[".allSearchFields"][] = "Model";
	$tdatavehiclemaster_fuel[".allSearchFields"][] = "Cost";
	$tdatavehiclemaster_fuel[".allSearchFields"][] = "DriverAsigned";
	$tdatavehiclemaster_fuel[".allSearchFields"][] = "InsuranceDue";
	

$tdatavehiclemaster_fuel[".googleLikeFields"] = array();
$tdatavehiclemaster_fuel[".googleLikeFields"][] = "ID";
$tdatavehiclemaster_fuel[".googleLikeFields"][] = "RegNo";
$tdatavehiclemaster_fuel[".googleLikeFields"][] = "Fleet";
$tdatavehiclemaster_fuel[".googleLikeFields"][] = "Type";
$tdatavehiclemaster_fuel[".googleLikeFields"][] = "RegDate";
$tdatavehiclemaster_fuel[".googleLikeFields"][] = "Cost";
$tdatavehiclemaster_fuel[".googleLikeFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel[".googleLikeFields"][] = "Make";
$tdatavehiclemaster_fuel[".googleLikeFields"][] = "Model";
$tdatavehiclemaster_fuel[".googleLikeFields"][] = "InsuranceDue";
$tdatavehiclemaster_fuel[".googleLikeFields"][] = "LastMileage";


$tdatavehiclemaster_fuel[".advSearchFields"] = array();
$tdatavehiclemaster_fuel[".advSearchFields"][] = "LastMileage";
$tdatavehiclemaster_fuel[".advSearchFields"][] = "Fleet";
$tdatavehiclemaster_fuel[".advSearchFields"][] = "Type";
$tdatavehiclemaster_fuel[".advSearchFields"][] = "RegDate";
$tdatavehiclemaster_fuel[".advSearchFields"][] = "RegNo";
$tdatavehiclemaster_fuel[".advSearchFields"][] = "Make";
$tdatavehiclemaster_fuel[".advSearchFields"][] = "Model";
$tdatavehiclemaster_fuel[".advSearchFields"][] = "Cost";
$tdatavehiclemaster_fuel[".advSearchFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel[".advSearchFields"][] = "InsuranceDue";

$tdatavehiclemaster_fuel[".tableType"] = "list";

$tdatavehiclemaster_fuel[".printerPageOrientation"] = 0;
$tdatavehiclemaster_fuel[".nPrinterPageScale"] = 100;

$tdatavehiclemaster_fuel[".nPrinterSplitRecords"] = 40;

$tdatavehiclemaster_fuel[".nPrinterPDFSplitRecords"] = 40;



$tdatavehiclemaster_fuel[".geocodingEnabled"] = false;




	





// view page pdf
$tdatavehiclemaster_fuel[".isViewPagePDF"] = true;
$tdatavehiclemaster_fuel[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatavehiclemaster_fuel[".isPrinterPagePDF"] = true;
$tdatavehiclemaster_fuel[".nPrinterPagePDFScale"] = 100;


$tdatavehiclemaster_fuel[".pageSize"] = 20;

$tdatavehiclemaster_fuel[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavehiclemaster_fuel[".strOrderBy"] = $tstrOrderBy;

$tdatavehiclemaster_fuel[".orderindexes"] = array();

$tdatavehiclemaster_fuel[".sqlHead"] = "SELECT vehiclemaster.ID,  vehiclemaster.RegNo,  vehiclemaster.Fleet,  vehiclemaster.`Type`,  vehiclemaster.RegDate,  vehiclemaster.Cost,  vehiclemaster.DriverAsigned,  vehiclemaster.Make,  vehiclemaster.Model,  vehiclemaster.InsuranceDue,  fuelmaster.LastMileage";
$tdatavehiclemaster_fuel[".sqlFrom"] = "FROM vehiclemaster  LEFT OUTER JOIN fuelmaster ON vehiclemaster.RegNo = fuelmaster.Vehicle";
$tdatavehiclemaster_fuel[".sqlWhereExpr"] = "";
$tdatavehiclemaster_fuel[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatavehiclemaster_fuel[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavehiclemaster_fuel[".arrGroupsPerPage"] = $arrGPP;

$tdatavehiclemaster_fuel[".highlightSearchResults"] = true;

$tableKeysvehiclemaster_fuel = array();
$tableKeysvehiclemaster_fuel[] = "ID";
$tdatavehiclemaster_fuel[".Keys"] = $tableKeysvehiclemaster_fuel;

$tdatavehiclemaster_fuel[".listFields"] = array();
$tdatavehiclemaster_fuel[".listFields"][] = "LastMileage";
$tdatavehiclemaster_fuel[".listFields"][] = "Fleet";
$tdatavehiclemaster_fuel[".listFields"][] = "Type";
$tdatavehiclemaster_fuel[".listFields"][] = "RegDate";
$tdatavehiclemaster_fuel[".listFields"][] = "RegNo";
$tdatavehiclemaster_fuel[".listFields"][] = "Make";
$tdatavehiclemaster_fuel[".listFields"][] = "Model";
$tdatavehiclemaster_fuel[".listFields"][] = "Cost";
$tdatavehiclemaster_fuel[".listFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel[".listFields"][] = "InsuranceDue";

$tdatavehiclemaster_fuel[".hideMobileList"] = array();


$tdatavehiclemaster_fuel[".viewFields"] = array();
$tdatavehiclemaster_fuel[".viewFields"][] = "LastMileage";
$tdatavehiclemaster_fuel[".viewFields"][] = "ID";
$tdatavehiclemaster_fuel[".viewFields"][] = "Fleet";
$tdatavehiclemaster_fuel[".viewFields"][] = "Type";
$tdatavehiclemaster_fuel[".viewFields"][] = "RegDate";
$tdatavehiclemaster_fuel[".viewFields"][] = "RegNo";
$tdatavehiclemaster_fuel[".viewFields"][] = "Make";
$tdatavehiclemaster_fuel[".viewFields"][] = "Model";
$tdatavehiclemaster_fuel[".viewFields"][] = "Cost";
$tdatavehiclemaster_fuel[".viewFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel[".viewFields"][] = "InsuranceDue";

$tdatavehiclemaster_fuel[".addFields"] = array();
$tdatavehiclemaster_fuel[".addFields"][] = "Fleet";
$tdatavehiclemaster_fuel[".addFields"][] = "Type";
$tdatavehiclemaster_fuel[".addFields"][] = "RegDate";
$tdatavehiclemaster_fuel[".addFields"][] = "RegNo";
$tdatavehiclemaster_fuel[".addFields"][] = "Make";
$tdatavehiclemaster_fuel[".addFields"][] = "Model";
$tdatavehiclemaster_fuel[".addFields"][] = "Cost";
$tdatavehiclemaster_fuel[".addFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel[".addFields"][] = "InsuranceDue";

$tdatavehiclemaster_fuel[".masterListFields"] = array();
$tdatavehiclemaster_fuel[".masterListFields"][] = "LastMileage";
$tdatavehiclemaster_fuel[".masterListFields"][] = "ID";
$tdatavehiclemaster_fuel[".masterListFields"][] = "Fleet";
$tdatavehiclemaster_fuel[".masterListFields"][] = "Type";
$tdatavehiclemaster_fuel[".masterListFields"][] = "RegDate";
$tdatavehiclemaster_fuel[".masterListFields"][] = "RegNo";
$tdatavehiclemaster_fuel[".masterListFields"][] = "Make";
$tdatavehiclemaster_fuel[".masterListFields"][] = "Model";
$tdatavehiclemaster_fuel[".masterListFields"][] = "Cost";
$tdatavehiclemaster_fuel[".masterListFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel[".masterListFields"][] = "InsuranceDue";

$tdatavehiclemaster_fuel[".inlineAddFields"] = array();

$tdatavehiclemaster_fuel[".editFields"] = array();
$tdatavehiclemaster_fuel[".editFields"][] = "Fleet";
$tdatavehiclemaster_fuel[".editFields"][] = "Type";
$tdatavehiclemaster_fuel[".editFields"][] = "RegDate";
$tdatavehiclemaster_fuel[".editFields"][] = "RegNo";
$tdatavehiclemaster_fuel[".editFields"][] = "Make";
$tdatavehiclemaster_fuel[".editFields"][] = "Model";
$tdatavehiclemaster_fuel[".editFields"][] = "Cost";
$tdatavehiclemaster_fuel[".editFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel[".editFields"][] = "InsuranceDue";

$tdatavehiclemaster_fuel[".inlineEditFields"] = array();

$tdatavehiclemaster_fuel[".exportFields"] = array();
$tdatavehiclemaster_fuel[".exportFields"][] = "LastMileage";
$tdatavehiclemaster_fuel[".exportFields"][] = "ID";
$tdatavehiclemaster_fuel[".exportFields"][] = "Fleet";
$tdatavehiclemaster_fuel[".exportFields"][] = "Type";
$tdatavehiclemaster_fuel[".exportFields"][] = "RegDate";
$tdatavehiclemaster_fuel[".exportFields"][] = "RegNo";
$tdatavehiclemaster_fuel[".exportFields"][] = "Make";
$tdatavehiclemaster_fuel[".exportFields"][] = "Model";
$tdatavehiclemaster_fuel[".exportFields"][] = "Cost";
$tdatavehiclemaster_fuel[".exportFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel[".exportFields"][] = "InsuranceDue";

$tdatavehiclemaster_fuel[".importFields"] = array();
$tdatavehiclemaster_fuel[".importFields"][] = "ID";
$tdatavehiclemaster_fuel[".importFields"][] = "RegNo";
$tdatavehiclemaster_fuel[".importFields"][] = "Fleet";
$tdatavehiclemaster_fuel[".importFields"][] = "Type";
$tdatavehiclemaster_fuel[".importFields"][] = "RegDate";
$tdatavehiclemaster_fuel[".importFields"][] = "Cost";
$tdatavehiclemaster_fuel[".importFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel[".importFields"][] = "Make";
$tdatavehiclemaster_fuel[".importFields"][] = "Model";
$tdatavehiclemaster_fuel[".importFields"][] = "InsuranceDue";
$tdatavehiclemaster_fuel[".importFields"][] = "LastMileage";

$tdatavehiclemaster_fuel[".printFields"] = array();
$tdatavehiclemaster_fuel[".printFields"][] = "LastMileage";
$tdatavehiclemaster_fuel[".printFields"][] = "ID";
$tdatavehiclemaster_fuel[".printFields"][] = "Fleet";
$tdatavehiclemaster_fuel[".printFields"][] = "Type";
$tdatavehiclemaster_fuel[".printFields"][] = "RegDate";
$tdatavehiclemaster_fuel[".printFields"][] = "RegNo";
$tdatavehiclemaster_fuel[".printFields"][] = "Make";
$tdatavehiclemaster_fuel[".printFields"][] = "Model";
$tdatavehiclemaster_fuel[".printFields"][] = "Cost";
$tdatavehiclemaster_fuel[".printFields"][] = "DriverAsigned";
$tdatavehiclemaster_fuel[".printFields"][] = "InsuranceDue";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel","ID"); 
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
	
	
	
	

	

	
	$tdatavehiclemaster_fuel["ID"] = $fdata;
//	RegNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RegNo";
	$fdata["GoodName"] = "RegNo";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel","RegNo"); 
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

	

	
	$tdatavehiclemaster_fuel["RegNo"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel","Fleet"); 
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

	

	
	$tdatavehiclemaster_fuel["Fleet"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel","Type"); 
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

	

	
	$tdatavehiclemaster_fuel["Type"] = $fdata;
//	RegDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RegDate";
	$fdata["GoodName"] = "RegDate";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel","RegDate"); 
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

	

	
	$tdatavehiclemaster_fuel["RegDate"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel","Cost"); 
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

	

	
	$tdatavehiclemaster_fuel["Cost"] = $fdata;
//	DriverAsigned
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DriverAsigned";
	$fdata["GoodName"] = "DriverAsigned";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel","DriverAsigned"); 
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

	

	
	$tdatavehiclemaster_fuel["DriverAsigned"] = $fdata;
//	Make
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Make";
	$fdata["GoodName"] = "Make";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel","Make"); 
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

	

	
	$tdatavehiclemaster_fuel["Make"] = $fdata;
//	Model
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Model";
	$fdata["GoodName"] = "Model";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel","Model"); 
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

	

	
	$tdatavehiclemaster_fuel["Model"] = $fdata;
//	InsuranceDue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "InsuranceDue";
	$fdata["GoodName"] = "InsuranceDue";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel","InsuranceDue"); 
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

	

	
	$tdatavehiclemaster_fuel["InsuranceDue"] = $fdata;
//	LastMileage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LastMileage";
	$fdata["GoodName"] = "LastMileage";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fuel","LastMileage"); 
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

	

	
	$tdatavehiclemaster_fuel["LastMileage"] = $fdata;

	
$tables_data["vehiclemaster-fuel"]=&$tdatavehiclemaster_fuel;
$field_labels["vehiclemaster_fuel"] = &$fieldLabelsvehiclemaster_fuel;
$fieldToolTips["vehiclemaster-fuel"] = &$fieldToolTipsvehiclemaster_fuel;
$page_titles["vehiclemaster_fuel"] = &$pageTitlesvehiclemaster_fuel;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vehiclemaster-fuel"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["vehiclemaster-fuel"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vehiclemaster_fuel()
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
	"m_srcTableName" => "vehiclemaster-fuel"
));

$proto5["m_sql"] = "vehiclemaster.ID";
$proto5["m_srcTableName"] = "vehiclemaster-fuel";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel"
));

$proto7["m_sql"] = "vehiclemaster.RegNo";
$proto7["m_srcTableName"] = "vehiclemaster-fuel";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel"
));

$proto9["m_sql"] = "vehiclemaster.Fleet";
$proto9["m_srcTableName"] = "vehiclemaster-fuel";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel"
));

$proto11["m_sql"] = "vehiclemaster.`Type`";
$proto11["m_srcTableName"] = "vehiclemaster-fuel";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "RegDate",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel"
));

$proto13["m_sql"] = "vehiclemaster.RegDate";
$proto13["m_srcTableName"] = "vehiclemaster-fuel";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel"
));

$proto15["m_sql"] = "vehiclemaster.Cost";
$proto15["m_srcTableName"] = "vehiclemaster-fuel";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "DriverAsigned",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel"
));

$proto17["m_sql"] = "vehiclemaster.DriverAsigned";
$proto17["m_srcTableName"] = "vehiclemaster-fuel";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Make",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel"
));

$proto19["m_sql"] = "vehiclemaster.Make";
$proto19["m_srcTableName"] = "vehiclemaster-fuel";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Model",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel"
));

$proto21["m_sql"] = "vehiclemaster.Model";
$proto21["m_srcTableName"] = "vehiclemaster-fuel";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "InsuranceDue",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel"
));

$proto23["m_sql"] = "vehiclemaster.InsuranceDue";
$proto23["m_srcTableName"] = "vehiclemaster-fuel";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "LastMileage",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "vehiclemaster-fuel"
));

$proto25["m_sql"] = "fuelmaster.LastMileage";
$proto25["m_srcTableName"] = "vehiclemaster-fuel";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "vehiclemaster";
$proto28["m_srcTableName"] = "vehiclemaster-fuel";
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
$proto27["m_srcTableName"] = "vehiclemaster-fuel";
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
$proto32["m_srcTableName"] = "vehiclemaster-fuel";
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
$proto31["m_srcTableName"] = "vehiclemaster-fuel";
$proto33=array();
$proto33["m_sql"] = "vehiclemaster.RegNo = fuelmaster.Vehicle";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fuel"
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
$proto0["m_srcTableName"]="vehiclemaster-fuel";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vehiclemaster_fuel = createSqlQuery_vehiclemaster_fuel();


	
											
	
$tdatavehiclemaster_fuel[".sqlquery"] = $queryData_vehiclemaster_fuel;

$tableEvents["vehiclemaster-fuel"] = new eventsBase;
$tdatavehiclemaster_fuel[".hasEvents"] = false;

?>