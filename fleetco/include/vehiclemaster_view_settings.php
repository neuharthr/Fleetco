<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavehiclemaster_view = array();	
	$tdatavehiclemaster_view[".truncateText"] = true;
	$tdatavehiclemaster_view[".NumberOfChars"] = 80; 
	$tdatavehiclemaster_view[".ShortName"] = "vehiclemaster_view";
	$tdatavehiclemaster_view[".OwnerID"] = "";
	$tdatavehiclemaster_view[".OriginalTable"] = "vehiclemaster";

//	field labels
$fieldLabelsvehiclemaster_view = array();
$fieldToolTipsvehiclemaster_view = array();
$pageTitlesvehiclemaster_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvehiclemaster_view["English"] = array();
	$fieldToolTipsvehiclemaster_view["English"] = array();
	$pageTitlesvehiclemaster_view["English"] = array();
	$fieldLabelsvehiclemaster_view["English"]["Premium"] = "Premium";
	$fieldToolTipsvehiclemaster_view["English"]["Premium"] = "";
	$fieldLabelsvehiclemaster_view["English"]["DateofPayment"] = "Dateof Payment";
	$fieldToolTipsvehiclemaster_view["English"]["DateofPayment"] = "";
	$fieldLabelsvehiclemaster_view["English"]["Insurer"] = "Insurer";
	$fieldToolTipsvehiclemaster_view["English"]["Insurer"] = "";
	$fieldLabelsvehiclemaster_view["English"]["ID"] = "ID";
	$fieldToolTipsvehiclemaster_view["English"]["ID"] = "";
	$fieldLabelsvehiclemaster_view["English"]["RegNo"] = "Reg No";
	$fieldToolTipsvehiclemaster_view["English"]["RegNo"] = "";
	$fieldLabelsvehiclemaster_view["English"]["Fleet"] = "Fleet";
	$fieldToolTipsvehiclemaster_view["English"]["Fleet"] = "";
	$fieldLabelsvehiclemaster_view["English"]["Type"] = "Type";
	$fieldToolTipsvehiclemaster_view["English"]["Type"] = "";
	$fieldLabelsvehiclemaster_view["English"]["RegDate"] = "Reg Date";
	$fieldToolTipsvehiclemaster_view["English"]["RegDate"] = "";
	$fieldLabelsvehiclemaster_view["English"]["Cost"] = "Cost";
	$fieldToolTipsvehiclemaster_view["English"]["Cost"] = "Cost without VAT";
	$fieldLabelsvehiclemaster_view["English"]["DriverAsigned"] = "Driver Asigned";
	$fieldToolTipsvehiclemaster_view["English"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster_view["English"]["Make"] = "Make";
	$fieldToolTipsvehiclemaster_view["English"]["Make"] = "";
	$fieldLabelsvehiclemaster_view["English"]["Model"] = "Model";
	$fieldToolTipsvehiclemaster_view["English"]["Model"] = "";
	$fieldLabelsvehiclemaster_view["English"]["InsuranceDue"] = "Insurance Due";
	$fieldToolTipsvehiclemaster_view["English"]["InsuranceDue"] = "";
	$fieldLabelsvehiclemaster_view["English"]["MAX_MeterReading_"] = "MAX(Meter Reading)";
	$fieldToolTipsvehiclemaster_view["English"]["MAX(MeterReading)"] = "";
	if (count($fieldToolTipsvehiclemaster_view["English"]))
		$tdatavehiclemaster_view[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvehiclemaster_view[""] = array();
	$fieldToolTipsvehiclemaster_view[""] = array();
	$pageTitlesvehiclemaster_view[""] = array();
	$fieldLabelsvehiclemaster_view[""]["Premium"] = "Premium";
	$fieldToolTipsvehiclemaster_view[""]["Premium"] = "";
	$fieldLabelsvehiclemaster_view[""]["DateofPayment"] = "Dateof Payment";
	$fieldToolTipsvehiclemaster_view[""]["DateofPayment"] = "";
	$fieldLabelsvehiclemaster_view[""]["Insurer"] = "Insurer";
	$fieldToolTipsvehiclemaster_view[""]["Insurer"] = "";
	$fieldLabelsvehiclemaster_view[""]["MAX_MeterReading_"] = "MAX(Meter Reading)";
	$fieldToolTipsvehiclemaster_view[""]["MAX(MeterReading)"] = "";
	if (count($fieldToolTipsvehiclemaster_view[""]))
		$tdatavehiclemaster_view[".isUseToolTips"] = true;
}
	
	
	$tdatavehiclemaster_view[".NCSearch"] = true;



$tdatavehiclemaster_view[".shortTableName"] = "vehiclemaster_view";
$tdatavehiclemaster_view[".nSecOptions"] = 0;
$tdatavehiclemaster_view[".recsPerRowList"] = 1;
$tdatavehiclemaster_view[".recsPerRowPrint"] = 1;
$tdatavehiclemaster_view[".mainTableOwnerID"] = "";
$tdatavehiclemaster_view[".moveNext"] = 1;
$tdatavehiclemaster_view[".entityType"] = 1;

$tdatavehiclemaster_view[".strOriginalTableName"] = "vehiclemaster";




$tdatavehiclemaster_view[".showAddInPopup"] = false;

$tdatavehiclemaster_view[".showEditInPopup"] = false;

$tdatavehiclemaster_view[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavehiclemaster_view[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavehiclemaster_view[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatavehiclemaster_view[".listAjax"] = true;
else 
	$tdatavehiclemaster_view[".listAjax"] = false;

	$tdatavehiclemaster_view[".audit"] = false;

	$tdatavehiclemaster_view[".locking"] = false;



$tdatavehiclemaster_view[".list"] = true;

$tdatavehiclemaster_view[".view"] = true;


$tdatavehiclemaster_view[".exportTo"] = true;

$tdatavehiclemaster_view[".printFriendly"] = true;


$tdatavehiclemaster_view[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatavehiclemaster_view[".searchSaving"] = false;
//

$tdatavehiclemaster_view[".showSearchPanel"] = true;
		$tdatavehiclemaster_view[".flexibleSearch"] = true;		

if (isMobile())
	$tdatavehiclemaster_view[".isUseAjaxSuggest"] = false;
else 
	$tdatavehiclemaster_view[".isUseAjaxSuggest"] = true;

$tdatavehiclemaster_view[".rowHighlite"] = true;



$tdatavehiclemaster_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavehiclemaster_view[".isUseTimeForSearch"] = false;





$tdatavehiclemaster_view[".allSearchFields"] = array();
$tdatavehiclemaster_view[".filterFields"] = array();
$tdatavehiclemaster_view[".requiredSearchFields"] = array();

$tdatavehiclemaster_view[".allSearchFields"][] = "MAX(MeterReading)";
	$tdatavehiclemaster_view[".allSearchFields"][] = "ID";
	$tdatavehiclemaster_view[".allSearchFields"][] = "RegDate";
	$tdatavehiclemaster_view[".allSearchFields"][] = "RegNo";
	$tdatavehiclemaster_view[".allSearchFields"][] = "Fleet";
	$tdatavehiclemaster_view[".allSearchFields"][] = "Type";
	$tdatavehiclemaster_view[".allSearchFields"][] = "Make";
	$tdatavehiclemaster_view[".allSearchFields"][] = "Model";
	$tdatavehiclemaster_view[".allSearchFields"][] = "Cost";
	$tdatavehiclemaster_view[".allSearchFields"][] = "DriverAsigned";
	$tdatavehiclemaster_view[".allSearchFields"][] = "InsuranceDue";
	

$tdatavehiclemaster_view[".googleLikeFields"] = array();
$tdatavehiclemaster_view[".googleLikeFields"][] = "ID";
$tdatavehiclemaster_view[".googleLikeFields"][] = "RegNo";
$tdatavehiclemaster_view[".googleLikeFields"][] = "Fleet";
$tdatavehiclemaster_view[".googleLikeFields"][] = "Type";
$tdatavehiclemaster_view[".googleLikeFields"][] = "RegDate";
$tdatavehiclemaster_view[".googleLikeFields"][] = "Cost";
$tdatavehiclemaster_view[".googleLikeFields"][] = "DriverAsigned";
$tdatavehiclemaster_view[".googleLikeFields"][] = "Make";
$tdatavehiclemaster_view[".googleLikeFields"][] = "Model";
$tdatavehiclemaster_view[".googleLikeFields"][] = "InsuranceDue";
$tdatavehiclemaster_view[".googleLikeFields"][] = "MAX(MeterReading)";


$tdatavehiclemaster_view[".advSearchFields"] = array();
$tdatavehiclemaster_view[".advSearchFields"][] = "MAX(MeterReading)";
$tdatavehiclemaster_view[".advSearchFields"][] = "ID";
$tdatavehiclemaster_view[".advSearchFields"][] = "RegDate";
$tdatavehiclemaster_view[".advSearchFields"][] = "RegNo";
$tdatavehiclemaster_view[".advSearchFields"][] = "Fleet";
$tdatavehiclemaster_view[".advSearchFields"][] = "Type";
$tdatavehiclemaster_view[".advSearchFields"][] = "Make";
$tdatavehiclemaster_view[".advSearchFields"][] = "Model";
$tdatavehiclemaster_view[".advSearchFields"][] = "Cost";
$tdatavehiclemaster_view[".advSearchFields"][] = "DriverAsigned";
$tdatavehiclemaster_view[".advSearchFields"][] = "InsuranceDue";

$tdatavehiclemaster_view[".tableType"] = "list";

$tdatavehiclemaster_view[".printerPageOrientation"] = 0;
$tdatavehiclemaster_view[".nPrinterPageScale"] = 100;

$tdatavehiclemaster_view[".nPrinterSplitRecords"] = 40;

$tdatavehiclemaster_view[".nPrinterPDFSplitRecords"] = 40;



$tdatavehiclemaster_view[".geocodingEnabled"] = false;




	





// view page pdf
$tdatavehiclemaster_view[".isViewPagePDF"] = true;
$tdatavehiclemaster_view[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatavehiclemaster_view[".isPrinterPagePDF"] = true;
$tdatavehiclemaster_view[".nPrinterPagePDFScale"] = 100;


$tdatavehiclemaster_view[".pageSize"] = 20;

$tdatavehiclemaster_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavehiclemaster_view[".strOrderBy"] = $tstrOrderBy;

$tdatavehiclemaster_view[".orderindexes"] = array();

$tdatavehiclemaster_view[".sqlHead"] = "SELECT vehiclemaster.ID,  vehiclemaster.RegNo,  vehiclemaster.Fleet,  vehiclemaster.`Type`,  vehiclemaster.RegDate,  vehiclemaster.Cost,  vehiclemaster.DriverAsigned,  vehiclemaster.Make,  vehiclemaster.Model,  vehiclemaster.InsuranceDue,  MAX(fuelmaster.MeterReading) AS `MAX(MeterReading)`";
$tdatavehiclemaster_view[".sqlFrom"] = "FROM vehiclemaster  LEFT OUTER JOIN fuelmaster ON vehiclemaster.RegNo = fuelmaster.Vehicle";
$tdatavehiclemaster_view[".sqlWhereExpr"] = "";
$tdatavehiclemaster_view[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatavehiclemaster_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavehiclemaster_view[".arrGroupsPerPage"] = $arrGPP;

$tdatavehiclemaster_view[".highlightSearchResults"] = true;

$tableKeysvehiclemaster_view = array();
$tableKeysvehiclemaster_view[] = "ID";
$tdatavehiclemaster_view[".Keys"] = $tableKeysvehiclemaster_view;

$tdatavehiclemaster_view[".listFields"] = array();
$tdatavehiclemaster_view[".listFields"][] = "MAX(MeterReading)";
$tdatavehiclemaster_view[".listFields"][] = "ID";
$tdatavehiclemaster_view[".listFields"][] = "RegDate";
$tdatavehiclemaster_view[".listFields"][] = "RegNo";
$tdatavehiclemaster_view[".listFields"][] = "Fleet";
$tdatavehiclemaster_view[".listFields"][] = "Type";
$tdatavehiclemaster_view[".listFields"][] = "Make";
$tdatavehiclemaster_view[".listFields"][] = "Model";
$tdatavehiclemaster_view[".listFields"][] = "Cost";
$tdatavehiclemaster_view[".listFields"][] = "DriverAsigned";
$tdatavehiclemaster_view[".listFields"][] = "InsuranceDue";

$tdatavehiclemaster_view[".hideMobileList"] = array();


$tdatavehiclemaster_view[".viewFields"] = array();
$tdatavehiclemaster_view[".viewFields"][] = "MAX(MeterReading)";
$tdatavehiclemaster_view[".viewFields"][] = "ID";
$tdatavehiclemaster_view[".viewFields"][] = "RegDate";
$tdatavehiclemaster_view[".viewFields"][] = "RegNo";
$tdatavehiclemaster_view[".viewFields"][] = "Fleet";
$tdatavehiclemaster_view[".viewFields"][] = "Type";
$tdatavehiclemaster_view[".viewFields"][] = "Make";
$tdatavehiclemaster_view[".viewFields"][] = "Model";
$tdatavehiclemaster_view[".viewFields"][] = "Cost";
$tdatavehiclemaster_view[".viewFields"][] = "DriverAsigned";
$tdatavehiclemaster_view[".viewFields"][] = "InsuranceDue";

$tdatavehiclemaster_view[".addFields"] = array();

$tdatavehiclemaster_view[".masterListFields"] = array();
$tdatavehiclemaster_view[".masterListFields"][] = "MAX(MeterReading)";
$tdatavehiclemaster_view[".masterListFields"][] = "ID";
$tdatavehiclemaster_view[".masterListFields"][] = "RegDate";
$tdatavehiclemaster_view[".masterListFields"][] = "RegNo";
$tdatavehiclemaster_view[".masterListFields"][] = "Fleet";
$tdatavehiclemaster_view[".masterListFields"][] = "Type";
$tdatavehiclemaster_view[".masterListFields"][] = "Make";
$tdatavehiclemaster_view[".masterListFields"][] = "Model";
$tdatavehiclemaster_view[".masterListFields"][] = "Cost";
$tdatavehiclemaster_view[".masterListFields"][] = "DriverAsigned";
$tdatavehiclemaster_view[".masterListFields"][] = "InsuranceDue";

$tdatavehiclemaster_view[".inlineAddFields"] = array();

$tdatavehiclemaster_view[".editFields"] = array();

$tdatavehiclemaster_view[".inlineEditFields"] = array();

$tdatavehiclemaster_view[".exportFields"] = array();
$tdatavehiclemaster_view[".exportFields"][] = "MAX(MeterReading)";
$tdatavehiclemaster_view[".exportFields"][] = "ID";
$tdatavehiclemaster_view[".exportFields"][] = "RegDate";
$tdatavehiclemaster_view[".exportFields"][] = "RegNo";
$tdatavehiclemaster_view[".exportFields"][] = "Fleet";
$tdatavehiclemaster_view[".exportFields"][] = "Type";
$tdatavehiclemaster_view[".exportFields"][] = "Make";
$tdatavehiclemaster_view[".exportFields"][] = "Model";
$tdatavehiclemaster_view[".exportFields"][] = "Cost";
$tdatavehiclemaster_view[".exportFields"][] = "DriverAsigned";
$tdatavehiclemaster_view[".exportFields"][] = "InsuranceDue";

$tdatavehiclemaster_view[".importFields"] = array();
$tdatavehiclemaster_view[".importFields"][] = "MAX(MeterReading)";

$tdatavehiclemaster_view[".printFields"] = array();
$tdatavehiclemaster_view[".printFields"][] = "MAX(MeterReading)";
$tdatavehiclemaster_view[".printFields"][] = "ID";
$tdatavehiclemaster_view[".printFields"][] = "RegDate";
$tdatavehiclemaster_view[".printFields"][] = "RegNo";
$tdatavehiclemaster_view[".printFields"][] = "Fleet";
$tdatavehiclemaster_view[".printFields"][] = "Type";
$tdatavehiclemaster_view[".printFields"][] = "Make";
$tdatavehiclemaster_view[".printFields"][] = "Model";
$tdatavehiclemaster_view[".printFields"][] = "Cost";
$tdatavehiclemaster_view[".printFields"][] = "DriverAsigned";
$tdatavehiclemaster_view[".printFields"][] = "InsuranceDue";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_view","ID"); 
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

	

	
	$tdatavehiclemaster_view["ID"] = $fdata;
//	RegNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RegNo";
	$fdata["GoodName"] = "RegNo";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_view","RegNo"); 
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

	

	
	$tdatavehiclemaster_view["RegNo"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_view","Fleet"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "FleetType";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "FleetType";
	
		
	$edata["LookupOrderBy"] = "FleetType";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
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

	

	
	$tdatavehiclemaster_view["Fleet"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_view","Type"); 
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "VehicleType";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "VehicleType";
	
		
	$edata["LookupOrderBy"] = "VehicleType";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
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

	

	
	$tdatavehiclemaster_view["Type"] = $fdata;
//	RegDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RegDate";
	$fdata["GoodName"] = "RegDate";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_view","RegDate"); 
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

	

	
	$tdatavehiclemaster_view["RegDate"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_view","Cost"); 
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

	

	
	$tdatavehiclemaster_view["Cost"] = $fdata;
//	DriverAsigned
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DriverAsigned";
	$fdata["GoodName"] = "DriverAsigned";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_view","DriverAsigned"); 
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

	

	
	$tdatavehiclemaster_view["DriverAsigned"] = $fdata;
//	Make
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Make";
	$fdata["GoodName"] = "Make";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_view","Make"); 
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

	

	
	$tdatavehiclemaster_view["Make"] = $fdata;
//	Model
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Model";
	$fdata["GoodName"] = "Model";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_view","Model"); 
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

	

	
	$tdatavehiclemaster_view["Model"] = $fdata;
//	InsuranceDue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "InsuranceDue";
	$fdata["GoodName"] = "InsuranceDue";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_view","InsuranceDue"); 
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

	

	
	$tdatavehiclemaster_view["InsuranceDue"] = $fdata;
//	MAX(MeterReading)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "MAX(MeterReading)";
	$fdata["GoodName"] = "MAX_MeterReading_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_view","MAX_MeterReading_"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MAX(MeterReading)"; 
	
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

	

	
	$tdatavehiclemaster_view["MAX(MeterReading)"] = $fdata;

	
$tables_data["vehiclemaster-view"]=&$tdatavehiclemaster_view;
$field_labels["vehiclemaster_view"] = &$fieldLabelsvehiclemaster_view;
$fieldToolTips["vehiclemaster-view"] = &$fieldToolTipsvehiclemaster_view;
$page_titles["vehiclemaster_view"] = &$pageTitlesvehiclemaster_view;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vehiclemaster-view"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["vehiclemaster-view"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vehiclemaster_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "vehiclemaster.ID,  vehiclemaster.RegNo,  vehiclemaster.Fleet,  vehiclemaster.`Type`,  vehiclemaster.RegDate,  vehiclemaster.Cost,  vehiclemaster.DriverAsigned,  vehiclemaster.Make,  vehiclemaster.Model,  vehiclemaster.InsuranceDue,  MAX(fuelmaster.MeterReading) AS `MAX(MeterReading)`";
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
	"m_srcTableName" => "vehiclemaster-view"
));

$proto5["m_sql"] = "vehiclemaster.ID";
$proto5["m_srcTableName"] = "vehiclemaster-view";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-view"
));

$proto7["m_sql"] = "vehiclemaster.RegNo";
$proto7["m_srcTableName"] = "vehiclemaster-view";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-view"
));

$proto9["m_sql"] = "vehiclemaster.Fleet";
$proto9["m_srcTableName"] = "vehiclemaster-view";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-view"
));

$proto11["m_sql"] = "vehiclemaster.`Type`";
$proto11["m_srcTableName"] = "vehiclemaster-view";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "RegDate",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-view"
));

$proto13["m_sql"] = "vehiclemaster.RegDate";
$proto13["m_srcTableName"] = "vehiclemaster-view";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-view"
));

$proto15["m_sql"] = "vehiclemaster.Cost";
$proto15["m_srcTableName"] = "vehiclemaster-view";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "DriverAsigned",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-view"
));

$proto17["m_sql"] = "vehiclemaster.DriverAsigned";
$proto17["m_srcTableName"] = "vehiclemaster-view";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Make",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-view"
));

$proto19["m_sql"] = "vehiclemaster.Make";
$proto19["m_srcTableName"] = "vehiclemaster-view";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Model",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-view"
));

$proto21["m_sql"] = "vehiclemaster.Model";
$proto21["m_srcTableName"] = "vehiclemaster-view";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "InsuranceDue",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-view"
));

$proto23["m_sql"] = "vehiclemaster.InsuranceDue";
$proto23["m_srcTableName"] = "vehiclemaster-view";
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
	"m_srcTableName" => "vehiclemaster-view"
));

$proto26["m_arguments"][]=$obj;
$proto26["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto26);

$proto25["m_sql"] = "MAX(fuelmaster.MeterReading)";
$proto25["m_srcTableName"] = "vehiclemaster-view";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "MAX(MeterReading)";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "vehiclemaster";
$proto29["m_srcTableName"] = "vehiclemaster-view";
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
$proto28["m_srcTableName"] = "vehiclemaster-view";
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
$proto33["m_srcTableName"] = "vehiclemaster-view";
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
$proto32["m_srcTableName"] = "vehiclemaster-view";
$proto34=array();
$proto34["m_sql"] = "vehiclemaster.RegNo = fuelmaster.Vehicle";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-view"
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
	"m_srcTableName" => "vehiclemaster-view"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-view"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-view"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-view"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "RegDate",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-view"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-view"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "DriverAsigned",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-view"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "Make",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-view"
));

$proto50["m_column"]=$obj;
$obj = new SQLGroupByItem($proto50);

$proto0["m_groupby"][]=$obj;
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "Model",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-view"
));

$proto52["m_column"]=$obj;
$obj = new SQLGroupByItem($proto52);

$proto0["m_groupby"][]=$obj;
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "InsuranceDue",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-view"
));

$proto54["m_column"]=$obj;
$obj = new SQLGroupByItem($proto54);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vehiclemaster-view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vehiclemaster_view = createSqlQuery_vehiclemaster_view();


	
											
	
$tdatavehiclemaster_view[".sqlquery"] = $queryData_vehiclemaster_view;

$tableEvents["vehiclemaster-view"] = new eventsBase;
$tdatavehiclemaster_view[".hasEvents"] = false;

?>