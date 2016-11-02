<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavehiclemaster_fullcost = array();	
	$tdatavehiclemaster_fullcost[".truncateText"] = true;
	$tdatavehiclemaster_fullcost[".NumberOfChars"] = 80; 
	$tdatavehiclemaster_fullcost[".ShortName"] = "vehiclemaster_fullcost";
	$tdatavehiclemaster_fullcost[".OwnerID"] = "";
	$tdatavehiclemaster_fullcost[".OriginalTable"] = "vehiclemaster";

//	field labels
$fieldLabelsvehiclemaster_fullcost = array();
$fieldToolTipsvehiclemaster_fullcost = array();
$pageTitlesvehiclemaster_fullcost = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvehiclemaster_fullcost["English"] = array();
	$fieldToolTipsvehiclemaster_fullcost["English"] = array();
	$pageTitlesvehiclemaster_fullcost["English"] = array();
	$fieldLabelsvehiclemaster_fullcost["English"]["ID"] = "ID";
	$fieldToolTipsvehiclemaster_fullcost["English"]["ID"] = "";
	$fieldLabelsvehiclemaster_fullcost["English"]["RegNo"] = "Reg No";
	$fieldToolTipsvehiclemaster_fullcost["English"]["RegNo"] = "";
	$fieldLabelsvehiclemaster_fullcost["English"]["Fleet"] = "Fleet";
	$fieldToolTipsvehiclemaster_fullcost["English"]["Fleet"] = "";
	$fieldLabelsvehiclemaster_fullcost["English"]["SUM_LitersPumped_"] = "Fuel Cost";
	$fieldToolTipsvehiclemaster_fullcost["English"]["SUM(LitersPumped)"] = "";
	$fieldLabelsvehiclemaster_fullcost["English"]["FuelDate"] = "Fuel Date";
	$fieldToolTipsvehiclemaster_fullcost["English"]["FuelDate"] = "";
	if (count($fieldToolTipsvehiclemaster_fullcost["English"]))
		$tdatavehiclemaster_fullcost[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvehiclemaster_fullcost[""] = array();
	$fieldToolTipsvehiclemaster_fullcost[""] = array();
	$pageTitlesvehiclemaster_fullcost[""] = array();
	$fieldLabelsvehiclemaster_fullcost[""]["ID"] = "ID";
	$fieldToolTipsvehiclemaster_fullcost[""]["ID"] = "";
	$fieldLabelsvehiclemaster_fullcost[""]["RegNo"] = "Reg No";
	$fieldToolTipsvehiclemaster_fullcost[""]["RegNo"] = "";
	$fieldLabelsvehiclemaster_fullcost[""]["Fleet"] = "Fleet";
	$fieldToolTipsvehiclemaster_fullcost[""]["Fleet"] = "";
	$fieldLabelsvehiclemaster_fullcost[""]["SUM_LitersPumped_"] = "SUM(Liters Pumped)";
	$fieldToolTipsvehiclemaster_fullcost[""]["SUM(LitersPumped)"] = "";
	$fieldLabelsvehiclemaster_fullcost[""]["FuelDate"] = "Fuel Date";
	$fieldToolTipsvehiclemaster_fullcost[""]["FuelDate"] = "";
	if (count($fieldToolTipsvehiclemaster_fullcost[""]))
		$tdatavehiclemaster_fullcost[".isUseToolTips"] = true;
}
	
	
	$tdatavehiclemaster_fullcost[".NCSearch"] = true;



$tdatavehiclemaster_fullcost[".shortTableName"] = "vehiclemaster_fullcost";
$tdatavehiclemaster_fullcost[".nSecOptions"] = 0;
$tdatavehiclemaster_fullcost[".recsPerRowList"] = 1;
$tdatavehiclemaster_fullcost[".recsPerRowPrint"] = 1;
$tdatavehiclemaster_fullcost[".mainTableOwnerID"] = "";
$tdatavehiclemaster_fullcost[".moveNext"] = 1;
$tdatavehiclemaster_fullcost[".entityType"] = 1;

$tdatavehiclemaster_fullcost[".strOriginalTableName"] = "vehiclemaster";




$tdatavehiclemaster_fullcost[".showAddInPopup"] = false;

$tdatavehiclemaster_fullcost[".showEditInPopup"] = false;

$tdatavehiclemaster_fullcost[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavehiclemaster_fullcost[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavehiclemaster_fullcost[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatavehiclemaster_fullcost[".listAjax"] = true;
else 
	$tdatavehiclemaster_fullcost[".listAjax"] = false;

	$tdatavehiclemaster_fullcost[".audit"] = false;

	$tdatavehiclemaster_fullcost[".locking"] = false;



$tdatavehiclemaster_fullcost[".list"] = true;

$tdatavehiclemaster_fullcost[".view"] = true;


$tdatavehiclemaster_fullcost[".exportTo"] = true;

$tdatavehiclemaster_fullcost[".printFriendly"] = true;


$tdatavehiclemaster_fullcost[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatavehiclemaster_fullcost[".searchSaving"] = false;
//

$tdatavehiclemaster_fullcost[".showSearchPanel"] = true;
		$tdatavehiclemaster_fullcost[".flexibleSearch"] = true;		

if (isMobile())
	$tdatavehiclemaster_fullcost[".isUseAjaxSuggest"] = false;
else 
	$tdatavehiclemaster_fullcost[".isUseAjaxSuggest"] = true;

$tdatavehiclemaster_fullcost[".rowHighlite"] = true;



$tdatavehiclemaster_fullcost[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavehiclemaster_fullcost[".isUseTimeForSearch"] = false;





$tdatavehiclemaster_fullcost[".allSearchFields"] = array();
$tdatavehiclemaster_fullcost[".filterFields"] = array();
$tdatavehiclemaster_fullcost[".requiredSearchFields"] = array();

$tdatavehiclemaster_fullcost[".allSearchFields"][] = "ID";
	$tdatavehiclemaster_fullcost[".allSearchFields"][] = "FuelDate";
	$tdatavehiclemaster_fullcost[".allSearchFields"][] = "Fleet";
	$tdatavehiclemaster_fullcost[".allSearchFields"][] = "RegNo";
	$tdatavehiclemaster_fullcost[".allSearchFields"][] = "SUM(LitersPumped)";
	

$tdatavehiclemaster_fullcost[".googleLikeFields"] = array();
$tdatavehiclemaster_fullcost[".googleLikeFields"][] = "ID";
$tdatavehiclemaster_fullcost[".googleLikeFields"][] = "RegNo";
$tdatavehiclemaster_fullcost[".googleLikeFields"][] = "Fleet";
$tdatavehiclemaster_fullcost[".googleLikeFields"][] = "SUM(LitersPumped)";
$tdatavehiclemaster_fullcost[".googleLikeFields"][] = "FuelDate";

$tdatavehiclemaster_fullcost[".panelSearchFields"] = array();
$tdatavehiclemaster_fullcost[".searchPanelOptions"] = array();
$tdatavehiclemaster_fullcost[".panelSearchFields"][] = "FuelDate";
	$tdatavehiclemaster_fullcost[".panelSearchFields"][] = "Fleet";
	$tdatavehiclemaster_fullcost[".panelSearchFields"][] = "RegNo";
	
$tdatavehiclemaster_fullcost[".advSearchFields"] = array();
$tdatavehiclemaster_fullcost[".advSearchFields"][] = "ID";
$tdatavehiclemaster_fullcost[".advSearchFields"][] = "FuelDate";
$tdatavehiclemaster_fullcost[".advSearchFields"][] = "Fleet";
$tdatavehiclemaster_fullcost[".advSearchFields"][] = "RegNo";
$tdatavehiclemaster_fullcost[".advSearchFields"][] = "SUM(LitersPumped)";

$tdatavehiclemaster_fullcost[".tableType"] = "list";

$tdatavehiclemaster_fullcost[".printerPageOrientation"] = 0;
$tdatavehiclemaster_fullcost[".nPrinterPageScale"] = 100;

$tdatavehiclemaster_fullcost[".nPrinterSplitRecords"] = 40;

$tdatavehiclemaster_fullcost[".nPrinterPDFSplitRecords"] = 40;



$tdatavehiclemaster_fullcost[".geocodingEnabled"] = false;




	





// view page pdf
$tdatavehiclemaster_fullcost[".isViewPagePDF"] = true;
$tdatavehiclemaster_fullcost[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatavehiclemaster_fullcost[".isPrinterPagePDF"] = true;
$tdatavehiclemaster_fullcost[".nPrinterPagePDFScale"] = 100;


$tdatavehiclemaster_fullcost[".pageSize"] = 20;

$tdatavehiclemaster_fullcost[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavehiclemaster_fullcost[".strOrderBy"] = $tstrOrderBy;

$tdatavehiclemaster_fullcost[".orderindexes"] = array();

$tdatavehiclemaster_fullcost[".sqlHead"] = "SELECT vehiclemaster.ID,  vehiclemaster.RegNo,  vehiclemaster.Fleet,  SUM(fuelmaster.LitersPumped) AS `SUM(LitersPumped)`,  fuelmaster.FuelDate";
$tdatavehiclemaster_fullcost[".sqlFrom"] = "FROM vehiclemaster  LEFT OUTER JOIN fuelmaster ON vehiclemaster.RegNo = fuelmaster.Vehicle";
$tdatavehiclemaster_fullcost[".sqlWhereExpr"] = "";
$tdatavehiclemaster_fullcost[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatavehiclemaster_fullcost[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavehiclemaster_fullcost[".arrGroupsPerPage"] = $arrGPP;

$tdatavehiclemaster_fullcost[".highlightSearchResults"] = true;

$tableKeysvehiclemaster_fullcost = array();
$tableKeysvehiclemaster_fullcost[] = "ID";
$tdatavehiclemaster_fullcost[".Keys"] = $tableKeysvehiclemaster_fullcost;

$tdatavehiclemaster_fullcost[".listFields"] = array();
$tdatavehiclemaster_fullcost[".listFields"][] = "ID";
$tdatavehiclemaster_fullcost[".listFields"][] = "FuelDate";
$tdatavehiclemaster_fullcost[".listFields"][] = "Fleet";
$tdatavehiclemaster_fullcost[".listFields"][] = "RegNo";
$tdatavehiclemaster_fullcost[".listFields"][] = "SUM(LitersPumped)";

$tdatavehiclemaster_fullcost[".hideMobileList"] = array();


$tdatavehiclemaster_fullcost[".viewFields"] = array();
$tdatavehiclemaster_fullcost[".viewFields"][] = "ID";
$tdatavehiclemaster_fullcost[".viewFields"][] = "FuelDate";
$tdatavehiclemaster_fullcost[".viewFields"][] = "Fleet";
$tdatavehiclemaster_fullcost[".viewFields"][] = "RegNo";
$tdatavehiclemaster_fullcost[".viewFields"][] = "SUM(LitersPumped)";

$tdatavehiclemaster_fullcost[".addFields"] = array();

$tdatavehiclemaster_fullcost[".masterListFields"] = array();
$tdatavehiclemaster_fullcost[".masterListFields"][] = "ID";
$tdatavehiclemaster_fullcost[".masterListFields"][] = "FuelDate";
$tdatavehiclemaster_fullcost[".masterListFields"][] = "Fleet";
$tdatavehiclemaster_fullcost[".masterListFields"][] = "RegNo";
$tdatavehiclemaster_fullcost[".masterListFields"][] = "SUM(LitersPumped)";

$tdatavehiclemaster_fullcost[".inlineAddFields"] = array();

$tdatavehiclemaster_fullcost[".editFields"] = array();

$tdatavehiclemaster_fullcost[".inlineEditFields"] = array();

$tdatavehiclemaster_fullcost[".exportFields"] = array();
$tdatavehiclemaster_fullcost[".exportFields"][] = "ID";
$tdatavehiclemaster_fullcost[".exportFields"][] = "FuelDate";
$tdatavehiclemaster_fullcost[".exportFields"][] = "Fleet";
$tdatavehiclemaster_fullcost[".exportFields"][] = "RegNo";
$tdatavehiclemaster_fullcost[".exportFields"][] = "SUM(LitersPumped)";

$tdatavehiclemaster_fullcost[".importFields"] = array();

$tdatavehiclemaster_fullcost[".printFields"] = array();
$tdatavehiclemaster_fullcost[".printFields"][] = "ID";
$tdatavehiclemaster_fullcost[".printFields"][] = "FuelDate";
$tdatavehiclemaster_fullcost[".printFields"][] = "Fleet";
$tdatavehiclemaster_fullcost[".printFields"][] = "RegNo";
$tdatavehiclemaster_fullcost[".printFields"][] = "SUM(LitersPumped)";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fullcost","ID"); 
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

	

	
	$tdatavehiclemaster_fullcost["ID"] = $fdata;
//	RegNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RegNo";
	$fdata["GoodName"] = "RegNo";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fullcost","RegNo"); 
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings	

	

	
	$tdatavehiclemaster_fullcost["RegNo"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fullcost","Fleet"); 
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings	

	

	
	$tdatavehiclemaster_fullcost["Fleet"] = $fdata;
//	SUM(LitersPumped)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SUM(LitersPumped)";
	$fdata["GoodName"] = "SUM_LitersPumped_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fullcost","SUM_LitersPumped_"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "SUM(LitersPumped)"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(fuelmaster.LitersPumped)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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

	

	
	$tdatavehiclemaster_fullcost["SUM(LitersPumped)"] = $fdata;
//	FuelDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FuelDate";
	$fdata["GoodName"] = "FuelDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_fullcost","FuelDate"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "FuelDate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fuelmaster.FuelDate";
	
		
		
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
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings	

	

	
	$tdatavehiclemaster_fullcost["FuelDate"] = $fdata;

	
$tables_data["vehiclemaster-fullcost"]=&$tdatavehiclemaster_fullcost;
$field_labels["vehiclemaster_fullcost"] = &$fieldLabelsvehiclemaster_fullcost;
$fieldToolTips["vehiclemaster-fullcost"] = &$fieldToolTipsvehiclemaster_fullcost;
$page_titles["vehiclemaster_fullcost"] = &$pageTitlesvehiclemaster_fullcost;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vehiclemaster-fullcost"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["vehiclemaster-fullcost"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vehiclemaster_fullcost()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "vehiclemaster.ID,  vehiclemaster.RegNo,  vehiclemaster.Fleet,  SUM(fuelmaster.LitersPumped) AS `SUM(LitersPumped)`,  fuelmaster.FuelDate";
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
	"m_srcTableName" => "vehiclemaster-fullcost"
));

$proto5["m_sql"] = "vehiclemaster.ID";
$proto5["m_srcTableName"] = "vehiclemaster-fullcost";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fullcost"
));

$proto7["m_sql"] = "vehiclemaster.RegNo";
$proto7["m_srcTableName"] = "vehiclemaster-fullcost";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fullcost"
));

$proto9["m_sql"] = "vehiclemaster.Fleet";
$proto9["m_srcTableName"] = "vehiclemaster-fullcost";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$proto12=array();
$proto12["m_functiontype"] = "SQLF_SUM";
$proto12["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "LitersPumped",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "vehiclemaster-fullcost"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto12);

$proto11["m_sql"] = "SUM(fuelmaster.LitersPumped)";
$proto11["m_srcTableName"] = "vehiclemaster-fullcost";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "SUM(LitersPumped)";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "vehiclemaster-fullcost"
));

$proto14["m_sql"] = "fuelmaster.FuelDate";
$proto14["m_srcTableName"] = "vehiclemaster-fullcost";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "vehiclemaster";
$proto17["m_srcTableName"] = "vehiclemaster-fullcost";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ID";
$proto17["m_columns"][] = "RegNo";
$proto17["m_columns"][] = "Fleet";
$proto17["m_columns"][] = "Type";
$proto17["m_columns"][] = "RegDate";
$proto17["m_columns"][] = "Cost";
$proto17["m_columns"][] = "DriverAsigned";
$proto17["m_columns"][] = "Make";
$proto17["m_columns"][] = "Model";
$proto17["m_columns"][] = "InsuranceDue";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "vehiclemaster";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "vehiclemaster-fullcost";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
												$proto20=array();
$proto20["m_link"] = "SQLL_LEFTJOIN";
			$proto21=array();
$proto21["m_strName"] = "fuelmaster";
$proto21["m_srcTableName"] = "vehiclemaster-fullcost";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "Id";
$proto21["m_columns"][] = "SystemDate";
$proto21["m_columns"][] = "FuelDate";
$proto21["m_columns"][] = "Vehicle";
$proto21["m_columns"][] = "MeterReading";
$proto21["m_columns"][] = "LitersPumped";
$proto21["m_columns"][] = "PricePerLiter";
$proto21["m_columns"][] = "FuelStation";
$proto21["m_columns"][] = "Fleet";
$proto21["m_columns"][] = "LastMileage";
$proto21["m_columns"][] = "Economy";
$proto21["m_columns"][] = "FillType";
$proto21["m_columns"][] = "CouponNo";
$proto21["m_columns"][] = "Driver";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "LEFT OUTER JOIN fuelmaster ON vehiclemaster.RegNo = fuelmaster.Vehicle";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "vehiclemaster-fullcost";
$proto22=array();
$proto22["m_sql"] = "vehiclemaster.RegNo = fuelmaster.Vehicle";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fullcost"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= fuelmaster.Vehicle";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fullcost"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fullcost"
));

$proto26["m_column"]=$obj;
$obj = new SQLGroupByItem($proto26);

$proto0["m_groupby"][]=$obj;
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-fullcost"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vehiclemaster-fullcost";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vehiclemaster_fullcost = createSqlQuery_vehiclemaster_fullcost();


	
					
	
$tdatavehiclemaster_fullcost[".sqlquery"] = $queryData_vehiclemaster_fullcost;

$tableEvents["vehiclemaster-fullcost"] = new eventsBase;
$tdatavehiclemaster_fullcost[".hasEvents"] = false;

?>