<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavehiclemaster_add = array();	
	$tdatavehiclemaster_add[".truncateText"] = true;
	$tdatavehiclemaster_add[".NumberOfChars"] = 80; 
	$tdatavehiclemaster_add[".ShortName"] = "vehiclemaster_add";
	$tdatavehiclemaster_add[".OwnerID"] = "";
	$tdatavehiclemaster_add[".OriginalTable"] = "vehiclemaster";

//	field labels
$fieldLabelsvehiclemaster_add = array();
$fieldToolTipsvehiclemaster_add = array();
$pageTitlesvehiclemaster_add = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvehiclemaster_add["English"] = array();
	$fieldToolTipsvehiclemaster_add["English"] = array();
	$pageTitlesvehiclemaster_add["English"] = array();
	if (count($fieldToolTipsvehiclemaster_add["English"]))
		$tdatavehiclemaster_add[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvehiclemaster_add[""] = array();
	$fieldToolTipsvehiclemaster_add[""] = array();
	$pageTitlesvehiclemaster_add[""] = array();
	if (count($fieldToolTipsvehiclemaster_add[""]))
		$tdatavehiclemaster_add[".isUseToolTips"] = true;
}
	
	
	$tdatavehiclemaster_add[".NCSearch"] = true;



$tdatavehiclemaster_add[".shortTableName"] = "vehiclemaster_add";
$tdatavehiclemaster_add[".nSecOptions"] = 0;
$tdatavehiclemaster_add[".recsPerRowList"] = 1;
$tdatavehiclemaster_add[".recsPerRowPrint"] = 1;
$tdatavehiclemaster_add[".mainTableOwnerID"] = "";
$tdatavehiclemaster_add[".moveNext"] = 1;
$tdatavehiclemaster_add[".entityType"] = 1;

$tdatavehiclemaster_add[".strOriginalTableName"] = "vehiclemaster";




$tdatavehiclemaster_add[".showAddInPopup"] = false;

$tdatavehiclemaster_add[".showEditInPopup"] = false;

$tdatavehiclemaster_add[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavehiclemaster_add[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavehiclemaster_add[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatavehiclemaster_add[".listAjax"] = true;
else 
	$tdatavehiclemaster_add[".listAjax"] = false;

	$tdatavehiclemaster_add[".audit"] = false;

	$tdatavehiclemaster_add[".locking"] = false;

$tdatavehiclemaster_add[".edit"] = true;
$tdatavehiclemaster_add[".afterEditAction"] = 1;
$tdatavehiclemaster_add[".closePopupAfterEdit"] = 1;
$tdatavehiclemaster_add[".afterEditActionDetTable"] = "";

$tdatavehiclemaster_add[".add"] = true;
$tdatavehiclemaster_add[".afterAddAction"] = 1;
$tdatavehiclemaster_add[".closePopupAfterAdd"] = 1;
$tdatavehiclemaster_add[".afterAddActionDetTable"] = "";

$tdatavehiclemaster_add[".list"] = true;

$tdatavehiclemaster_add[".view"] = true;

$tdatavehiclemaster_add[".import"] = true;

$tdatavehiclemaster_add[".exportTo"] = true;

$tdatavehiclemaster_add[".printFriendly"] = true;

$tdatavehiclemaster_add[".delete"] = true;

$tdatavehiclemaster_add[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatavehiclemaster_add[".searchSaving"] = false;
//

$tdatavehiclemaster_add[".showSearchPanel"] = true;
		$tdatavehiclemaster_add[".flexibleSearch"] = true;		

if (isMobile())
	$tdatavehiclemaster_add[".isUseAjaxSuggest"] = false;
else 
	$tdatavehiclemaster_add[".isUseAjaxSuggest"] = true;

$tdatavehiclemaster_add[".rowHighlite"] = true;



$tdatavehiclemaster_add[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavehiclemaster_add[".isUseTimeForSearch"] = false;





$tdatavehiclemaster_add[".allSearchFields"] = array();
$tdatavehiclemaster_add[".filterFields"] = array();
$tdatavehiclemaster_add[".requiredSearchFields"] = array();

$tdatavehiclemaster_add[".allSearchFields"][] = "LastRefill";
	$tdatavehiclemaster_add[".allSearchFields"][] = "ID";
	$tdatavehiclemaster_add[".allSearchFields"][] = "Fleet";
	$tdatavehiclemaster_add[".allSearchFields"][] = "Type";
	$tdatavehiclemaster_add[".allSearchFields"][] = "RegDate";
	$tdatavehiclemaster_add[".allSearchFields"][] = "RegNo";
	$tdatavehiclemaster_add[".allSearchFields"][] = "Make";
	$tdatavehiclemaster_add[".allSearchFields"][] = "Model";
	$tdatavehiclemaster_add[".allSearchFields"][] = "Cost";
	$tdatavehiclemaster_add[".allSearchFields"][] = "DriverAsigned";
	$tdatavehiclemaster_add[".allSearchFields"][] = "InsuranceDue";
	$tdatavehiclemaster_add[".allSearchFields"][] = "Last Mileage";
	

$tdatavehiclemaster_add[".googleLikeFields"] = array();
$tdatavehiclemaster_add[".googleLikeFields"][] = "ID";
$tdatavehiclemaster_add[".googleLikeFields"][] = "RegNo";
$tdatavehiclemaster_add[".googleLikeFields"][] = "Fleet";
$tdatavehiclemaster_add[".googleLikeFields"][] = "Type";
$tdatavehiclemaster_add[".googleLikeFields"][] = "RegDate";
$tdatavehiclemaster_add[".googleLikeFields"][] = "Cost";
$tdatavehiclemaster_add[".googleLikeFields"][] = "DriverAsigned";
$tdatavehiclemaster_add[".googleLikeFields"][] = "Make";
$tdatavehiclemaster_add[".googleLikeFields"][] = "Model";
$tdatavehiclemaster_add[".googleLikeFields"][] = "InsuranceDue";
$tdatavehiclemaster_add[".googleLikeFields"][] = "Last Mileage";
$tdatavehiclemaster_add[".googleLikeFields"][] = "LastRefill";


$tdatavehiclemaster_add[".advSearchFields"] = array();
$tdatavehiclemaster_add[".advSearchFields"][] = "LastRefill";
$tdatavehiclemaster_add[".advSearchFields"][] = "ID";
$tdatavehiclemaster_add[".advSearchFields"][] = "Fleet";
$tdatavehiclemaster_add[".advSearchFields"][] = "Type";
$tdatavehiclemaster_add[".advSearchFields"][] = "RegDate";
$tdatavehiclemaster_add[".advSearchFields"][] = "RegNo";
$tdatavehiclemaster_add[".advSearchFields"][] = "Make";
$tdatavehiclemaster_add[".advSearchFields"][] = "Model";
$tdatavehiclemaster_add[".advSearchFields"][] = "Cost";
$tdatavehiclemaster_add[".advSearchFields"][] = "DriverAsigned";
$tdatavehiclemaster_add[".advSearchFields"][] = "InsuranceDue";
$tdatavehiclemaster_add[".advSearchFields"][] = "Last Mileage";

$tdatavehiclemaster_add[".tableType"] = "list";

$tdatavehiclemaster_add[".printerPageOrientation"] = 0;
$tdatavehiclemaster_add[".nPrinterPageScale"] = 100;

$tdatavehiclemaster_add[".nPrinterSplitRecords"] = 40;

$tdatavehiclemaster_add[".nPrinterPDFSplitRecords"] = 40;



$tdatavehiclemaster_add[".geocodingEnabled"] = false;




	





// view page pdf
$tdatavehiclemaster_add[".isViewPagePDF"] = true;
$tdatavehiclemaster_add[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatavehiclemaster_add[".isPrinterPagePDF"] = true;
$tdatavehiclemaster_add[".nPrinterPagePDFScale"] = 100;


$tdatavehiclemaster_add[".pageSize"] = 20;

$tdatavehiclemaster_add[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavehiclemaster_add[".strOrderBy"] = $tstrOrderBy;

$tdatavehiclemaster_add[".orderindexes"] = array();

$tdatavehiclemaster_add[".sqlHead"] = "SELECT vehiclemaster.ID,  vehiclemaster.RegNo,  vehiclemaster.Fleet,  vehiclemaster.`Type`,  vehiclemaster.RegDate,  vehiclemaster.Cost,  vehiclemaster.DriverAsigned,  vehiclemaster.Make,  vehiclemaster.Model,  vehiclemaster.InsuranceDue,  MAX(fuelmaster.MeterReading) AS `Last Mileage`,  fuelmaster.LastRefill";
$tdatavehiclemaster_add[".sqlFrom"] = "FROM vehiclemaster  LEFT OUTER JOIN fuelmaster ON vehiclemaster.RegNo = fuelmaster.Vehicle";
$tdatavehiclemaster_add[".sqlWhereExpr"] = "";
$tdatavehiclemaster_add[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatavehiclemaster_add[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavehiclemaster_add[".arrGroupsPerPage"] = $arrGPP;

$tdatavehiclemaster_add[".highlightSearchResults"] = true;

$tableKeysvehiclemaster_add = array();
$tableKeysvehiclemaster_add[] = "ID";
$tdatavehiclemaster_add[".Keys"] = $tableKeysvehiclemaster_add;

$tdatavehiclemaster_add[".listFields"] = array();
$tdatavehiclemaster_add[".listFields"][] = "LastRefill";
$tdatavehiclemaster_add[".listFields"][] = "ID";
$tdatavehiclemaster_add[".listFields"][] = "Fleet";
$tdatavehiclemaster_add[".listFields"][] = "Type";
$tdatavehiclemaster_add[".listFields"][] = "RegDate";
$tdatavehiclemaster_add[".listFields"][] = "RegNo";
$tdatavehiclemaster_add[".listFields"][] = "Make";
$tdatavehiclemaster_add[".listFields"][] = "Model";
$tdatavehiclemaster_add[".listFields"][] = "Cost";
$tdatavehiclemaster_add[".listFields"][] = "DriverAsigned";
$tdatavehiclemaster_add[".listFields"][] = "InsuranceDue";
$tdatavehiclemaster_add[".listFields"][] = "Last Mileage";

$tdatavehiclemaster_add[".hideMobileList"] = array();


$tdatavehiclemaster_add[".viewFields"] = array();
$tdatavehiclemaster_add[".viewFields"][] = "LastRefill";
$tdatavehiclemaster_add[".viewFields"][] = "ID";
$tdatavehiclemaster_add[".viewFields"][] = "Fleet";
$tdatavehiclemaster_add[".viewFields"][] = "Type";
$tdatavehiclemaster_add[".viewFields"][] = "RegDate";
$tdatavehiclemaster_add[".viewFields"][] = "RegNo";
$tdatavehiclemaster_add[".viewFields"][] = "Make";
$tdatavehiclemaster_add[".viewFields"][] = "Model";
$tdatavehiclemaster_add[".viewFields"][] = "Cost";
$tdatavehiclemaster_add[".viewFields"][] = "DriverAsigned";
$tdatavehiclemaster_add[".viewFields"][] = "InsuranceDue";
$tdatavehiclemaster_add[".viewFields"][] = "Last Mileage";

$tdatavehiclemaster_add[".addFields"] = array();
$tdatavehiclemaster_add[".addFields"][] = "Fleet";
$tdatavehiclemaster_add[".addFields"][] = "Type";
$tdatavehiclemaster_add[".addFields"][] = "RegDate";
$tdatavehiclemaster_add[".addFields"][] = "RegNo";
$tdatavehiclemaster_add[".addFields"][] = "Make";
$tdatavehiclemaster_add[".addFields"][] = "Model";
$tdatavehiclemaster_add[".addFields"][] = "Cost";
$tdatavehiclemaster_add[".addFields"][] = "DriverAsigned";
$tdatavehiclemaster_add[".addFields"][] = "InsuranceDue";

$tdatavehiclemaster_add[".masterListFields"] = array();
$tdatavehiclemaster_add[".masterListFields"][] = "LastRefill";
$tdatavehiclemaster_add[".masterListFields"][] = "ID";
$tdatavehiclemaster_add[".masterListFields"][] = "Fleet";
$tdatavehiclemaster_add[".masterListFields"][] = "Type";
$tdatavehiclemaster_add[".masterListFields"][] = "RegDate";
$tdatavehiclemaster_add[".masterListFields"][] = "RegNo";
$tdatavehiclemaster_add[".masterListFields"][] = "Make";
$tdatavehiclemaster_add[".masterListFields"][] = "Model";
$tdatavehiclemaster_add[".masterListFields"][] = "Cost";
$tdatavehiclemaster_add[".masterListFields"][] = "DriverAsigned";
$tdatavehiclemaster_add[".masterListFields"][] = "InsuranceDue";
$tdatavehiclemaster_add[".masterListFields"][] = "Last Mileage";

$tdatavehiclemaster_add[".inlineAddFields"] = array();

$tdatavehiclemaster_add[".editFields"] = array();
$tdatavehiclemaster_add[".editFields"][] = "Fleet";
$tdatavehiclemaster_add[".editFields"][] = "Type";
$tdatavehiclemaster_add[".editFields"][] = "RegDate";
$tdatavehiclemaster_add[".editFields"][] = "RegNo";
$tdatavehiclemaster_add[".editFields"][] = "Make";
$tdatavehiclemaster_add[".editFields"][] = "Model";
$tdatavehiclemaster_add[".editFields"][] = "Cost";
$tdatavehiclemaster_add[".editFields"][] = "DriverAsigned";
$tdatavehiclemaster_add[".editFields"][] = "InsuranceDue";

$tdatavehiclemaster_add[".inlineEditFields"] = array();

$tdatavehiclemaster_add[".exportFields"] = array();
$tdatavehiclemaster_add[".exportFields"][] = "LastRefill";
$tdatavehiclemaster_add[".exportFields"][] = "ID";
$tdatavehiclemaster_add[".exportFields"][] = "Fleet";
$tdatavehiclemaster_add[".exportFields"][] = "Type";
$tdatavehiclemaster_add[".exportFields"][] = "RegDate";
$tdatavehiclemaster_add[".exportFields"][] = "RegNo";
$tdatavehiclemaster_add[".exportFields"][] = "Make";
$tdatavehiclemaster_add[".exportFields"][] = "Model";
$tdatavehiclemaster_add[".exportFields"][] = "Cost";
$tdatavehiclemaster_add[".exportFields"][] = "DriverAsigned";
$tdatavehiclemaster_add[".exportFields"][] = "InsuranceDue";
$tdatavehiclemaster_add[".exportFields"][] = "Last Mileage";

$tdatavehiclemaster_add[".importFields"] = array();
$tdatavehiclemaster_add[".importFields"][] = "ID";
$tdatavehiclemaster_add[".importFields"][] = "RegNo";
$tdatavehiclemaster_add[".importFields"][] = "Fleet";
$tdatavehiclemaster_add[".importFields"][] = "Type";
$tdatavehiclemaster_add[".importFields"][] = "RegDate";
$tdatavehiclemaster_add[".importFields"][] = "Cost";
$tdatavehiclemaster_add[".importFields"][] = "DriverAsigned";
$tdatavehiclemaster_add[".importFields"][] = "Make";
$tdatavehiclemaster_add[".importFields"][] = "Model";
$tdatavehiclemaster_add[".importFields"][] = "InsuranceDue";
$tdatavehiclemaster_add[".importFields"][] = "Last Mileage";
$tdatavehiclemaster_add[".importFields"][] = "LastRefill";

$tdatavehiclemaster_add[".printFields"] = array();
$tdatavehiclemaster_add[".printFields"][] = "LastRefill";
$tdatavehiclemaster_add[".printFields"][] = "ID";
$tdatavehiclemaster_add[".printFields"][] = "Fleet";
$tdatavehiclemaster_add[".printFields"][] = "Type";
$tdatavehiclemaster_add[".printFields"][] = "RegDate";
$tdatavehiclemaster_add[".printFields"][] = "RegNo";
$tdatavehiclemaster_add[".printFields"][] = "Make";
$tdatavehiclemaster_add[".printFields"][] = "Model";
$tdatavehiclemaster_add[".printFields"][] = "Cost";
$tdatavehiclemaster_add[".printFields"][] = "DriverAsigned";
$tdatavehiclemaster_add[".printFields"][] = "InsuranceDue";
$tdatavehiclemaster_add[".printFields"][] = "Last Mileage";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_add","ID"); 
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

	

	
	$tdatavehiclemaster_add["ID"] = $fdata;
//	RegNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RegNo";
	$fdata["GoodName"] = "RegNo";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_add","RegNo"); 
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

	

	
	$tdatavehiclemaster_add["RegNo"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_add","Fleet"); 
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

	

	
	$tdatavehiclemaster_add["Fleet"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_add","Type"); 
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

	

	
	$tdatavehiclemaster_add["Type"] = $fdata;
//	RegDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RegDate";
	$fdata["GoodName"] = "RegDate";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_add","RegDate"); 
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

	

	
	$tdatavehiclemaster_add["RegDate"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_add","Cost"); 
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

	

	
	$tdatavehiclemaster_add["Cost"] = $fdata;
//	DriverAsigned
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DriverAsigned";
	$fdata["GoodName"] = "DriverAsigned";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_add","DriverAsigned"); 
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

	

	
	$tdatavehiclemaster_add["DriverAsigned"] = $fdata;
//	Make
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Make";
	$fdata["GoodName"] = "Make";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_add","Make"); 
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

	

	
	$tdatavehiclemaster_add["Make"] = $fdata;
//	Model
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Model";
	$fdata["GoodName"] = "Model";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_add","Model"); 
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

	

	
	$tdatavehiclemaster_add["Model"] = $fdata;
//	InsuranceDue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "InsuranceDue";
	$fdata["GoodName"] = "InsuranceDue";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_add","InsuranceDue"); 
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

	

	
	$tdatavehiclemaster_add["InsuranceDue"] = $fdata;
//	Last Mileage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Last Mileage";
	$fdata["GoodName"] = "Last_Mileage";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_add","Last_Mileage"); 
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

	

	
	$tdatavehiclemaster_add["Last Mileage"] = $fdata;
//	LastRefill
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "LastRefill";
	$fdata["GoodName"] = "LastRefill";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_add","LastRefill"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "LastRefill"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fuelmaster.LastRefill";
	
		
		
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

	

	
	$tdatavehiclemaster_add["LastRefill"] = $fdata;

	
$tables_data["vehiclemaster-add"]=&$tdatavehiclemaster_add;
$field_labels["vehiclemaster_add"] = &$fieldLabelsvehiclemaster_add;
$fieldToolTips["vehiclemaster-add"] = &$fieldToolTipsvehiclemaster_add;
$page_titles["vehiclemaster_add"] = &$pageTitlesvehiclemaster_add;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vehiclemaster-add"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["vehiclemaster-add"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vehiclemaster_add()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "vehiclemaster.ID,  vehiclemaster.RegNo,  vehiclemaster.Fleet,  vehiclemaster.`Type`,  vehiclemaster.RegDate,  vehiclemaster.Cost,  vehiclemaster.DriverAsigned,  vehiclemaster.Make,  vehiclemaster.Model,  vehiclemaster.InsuranceDue,  MAX(fuelmaster.MeterReading) AS `Last Mileage`,  fuelmaster.LastRefill";
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
	"m_srcTableName" => "vehiclemaster-add"
));

$proto5["m_sql"] = "vehiclemaster.ID";
$proto5["m_srcTableName"] = "vehiclemaster-add";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-add"
));

$proto7["m_sql"] = "vehiclemaster.RegNo";
$proto7["m_srcTableName"] = "vehiclemaster-add";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-add"
));

$proto9["m_sql"] = "vehiclemaster.Fleet";
$proto9["m_srcTableName"] = "vehiclemaster-add";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-add"
));

$proto11["m_sql"] = "vehiclemaster.`Type`";
$proto11["m_srcTableName"] = "vehiclemaster-add";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "RegDate",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-add"
));

$proto13["m_sql"] = "vehiclemaster.RegDate";
$proto13["m_srcTableName"] = "vehiclemaster-add";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-add"
));

$proto15["m_sql"] = "vehiclemaster.Cost";
$proto15["m_srcTableName"] = "vehiclemaster-add";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "DriverAsigned",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-add"
));

$proto17["m_sql"] = "vehiclemaster.DriverAsigned";
$proto17["m_srcTableName"] = "vehiclemaster-add";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Make",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-add"
));

$proto19["m_sql"] = "vehiclemaster.Make";
$proto19["m_srcTableName"] = "vehiclemaster-add";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Model",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-add"
));

$proto21["m_sql"] = "vehiclemaster.Model";
$proto21["m_srcTableName"] = "vehiclemaster-add";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "InsuranceDue",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-add"
));

$proto23["m_sql"] = "vehiclemaster.InsuranceDue";
$proto23["m_srcTableName"] = "vehiclemaster-add";
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
	"m_srcTableName" => "vehiclemaster-add"
));

$proto26["m_arguments"][]=$obj;
$proto26["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto26);

$proto25["m_sql"] = "MAX(fuelmaster.MeterReading)";
$proto25["m_srcTableName"] = "vehiclemaster-add";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "Last Mileage";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "LastRefill",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "vehiclemaster-add"
));

$proto28["m_sql"] = "fuelmaster.LastRefill";
$proto28["m_srcTableName"] = "vehiclemaster-add";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "vehiclemaster";
$proto31["m_srcTableName"] = "vehiclemaster-add";
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
$proto30["m_srcTableName"] = "vehiclemaster-add";
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
$proto35["m_srcTableName"] = "vehiclemaster-add";
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
$proto34["m_srcTableName"] = "vehiclemaster-add";
$proto36=array();
$proto36["m_sql"] = "vehiclemaster.RegNo = fuelmaster.Vehicle";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-add"
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
	"m_srcTableName" => "vehiclemaster-add"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-add"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-add"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-add"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "RegDate",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-add"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-add"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "DriverAsigned",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-add"
));

$proto50["m_column"]=$obj;
$obj = new SQLGroupByItem($proto50);

$proto0["m_groupby"][]=$obj;
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "Make",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-add"
));

$proto52["m_column"]=$obj;
$obj = new SQLGroupByItem($proto52);

$proto0["m_groupby"][]=$obj;
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "Model",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-add"
));

$proto54["m_column"]=$obj;
$obj = new SQLGroupByItem($proto54);

$proto0["m_groupby"][]=$obj;
												$proto56=array();
						$obj = new SQLField(array(
	"m_strName" => "InsuranceDue",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-add"
));

$proto56["m_column"]=$obj;
$obj = new SQLGroupByItem($proto56);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vehiclemaster-add";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vehiclemaster_add = createSqlQuery_vehiclemaster_add();


	
												
	
$tdatavehiclemaster_add[".sqlquery"] = $queryData_vehiclemaster_add;

$tableEvents["vehiclemaster-add"] = new eventsBase;
$tdatavehiclemaster_add[".hasEvents"] = false;

?>