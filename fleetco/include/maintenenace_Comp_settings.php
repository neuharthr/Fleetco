<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamaintenenace_Comp = array();	
	$tdatamaintenenace_Comp[".ShortName"] = "maintenenace_Comp";
	$tdatamaintenenace_Comp[".OwnerID"] = "";
	$tdatamaintenenace_Comp[".OriginalTable"] = "maintenenace";

//	field labels
$fieldLabelsmaintenenace_Comp = array();
$fieldToolTipsmaintenenace_Comp = array();
$pageTitlesmaintenenace_Comp = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmaintenenace_Comp["English"] = array();
	$fieldToolTipsmaintenenace_Comp["English"] = array();
	$pageTitlesmaintenenace_Comp["English"] = array();
	$fieldLabelsmaintenenace_Comp["English"]["Fleet"] = "Fleet";
	$fieldToolTipsmaintenenace_Comp["English"]["Fleet"] = "";
	$fieldLabelsmaintenenace_Comp["English"]["Vehicle"] = "Vehicle";
	$fieldToolTipsmaintenenace_Comp["English"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_Comp["English"]["Cost"] = "Cost";
	$fieldToolTipsmaintenenace_Comp["English"]["Cost"] = "";
	$fieldLabelsmaintenenace_Comp["English"]["Date"] = "Date";
	$fieldToolTipsmaintenenace_Comp["English"]["Date"] = "";
	$fieldLabelsmaintenenace_Comp["English"]["MaintType"] = "Maint Type";
	$fieldToolTipsmaintenenace_Comp["English"]["MaintType"] = "";
	$fieldLabelsmaintenenace_Comp["English"]["Cost_1"] = "Cost";
	$fieldToolTipsmaintenenace_Comp["English"]["Cost*1"] = "";
	if (count($fieldToolTipsmaintenenace_Comp["English"]))
		$tdatamaintenenace_Comp[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmaintenenace_Comp[""] = array();
	$fieldToolTipsmaintenenace_Comp[""] = array();
	$pageTitlesmaintenenace_Comp[""] = array();
	$fieldLabelsmaintenenace_Comp[""]["Fleet"] = "Fleet";
	$fieldToolTipsmaintenenace_Comp[""]["Fleet"] = "";
	$fieldLabelsmaintenenace_Comp[""]["Vehicle"] = "Vehicle";
	$fieldToolTipsmaintenenace_Comp[""]["Vehicle"] = "";
	$fieldLabelsmaintenenace_Comp[""]["Cost"] = "Cost";
	$fieldToolTipsmaintenenace_Comp[""]["Cost"] = "";
	$fieldLabelsmaintenenace_Comp[""]["Date"] = "Date";
	$fieldToolTipsmaintenenace_Comp[""]["Date"] = "";
	$fieldLabelsmaintenenace_Comp[""]["MaintType"] = "Maint Type";
	$fieldToolTipsmaintenenace_Comp[""]["MaintType"] = "";
	$fieldLabelsmaintenenace_Comp[""]["Cost_1"] = "Cost*1";
	$fieldToolTipsmaintenenace_Comp[""]["Cost*1"] = "";
	if (count($fieldToolTipsmaintenenace_Comp[""]))
		$tdatamaintenenace_Comp[".isUseToolTips"] = true;
}
	
	
	$tdatamaintenenace_Comp[".NCSearch"] = true;

	$tdatamaintenenace_Comp[".ChartRefreshTime"] = 0;


$tdatamaintenenace_Comp[".shortTableName"] = "maintenenace_Comp";
$tdatamaintenenace_Comp[".nSecOptions"] = 0;
$tdatamaintenenace_Comp[".recsPerRowList"] = 1;
$tdatamaintenenace_Comp[".recsPerRowPrint"] = 1;
$tdatamaintenenace_Comp[".mainTableOwnerID"] = "";
$tdatamaintenenace_Comp[".moveNext"] = 1;
$tdatamaintenenace_Comp[".entityType"] = 3;

$tdatamaintenenace_Comp[".strOriginalTableName"] = "maintenenace";




$tdatamaintenenace_Comp[".showAddInPopup"] = false;

$tdatamaintenenace_Comp[".showEditInPopup"] = false;

$tdatamaintenenace_Comp[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamaintenenace_Comp[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamaintenenace_Comp[".fieldsForRegister"] = array();

$tdatamaintenenace_Comp[".listAjax"] = false;

	$tdatamaintenenace_Comp[".audit"] = false;

	$tdatamaintenenace_Comp[".locking"] = false;


$tdatamaintenenace_Comp[".add"] = true;
$tdatamaintenenace_Comp[".afterAddAction"] = 1;
$tdatamaintenenace_Comp[".closePopupAfterAdd"] = 1;
$tdatamaintenenace_Comp[".afterAddActionDetTable"] = "";

$tdatamaintenenace_Comp[".list"] = true;

$tdatamaintenenace_Comp[".inlineAdd"] = true;





$tdatamaintenenace_Comp[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatamaintenenace_Comp[".searchSaving"] = false;
//

$tdatamaintenenace_Comp[".showSearchPanel"] = true;
		$tdatamaintenenace_Comp[".flexibleSearch"] = true;		

if (isMobile())
	$tdatamaintenenace_Comp[".isUseAjaxSuggest"] = false;
else 
	$tdatamaintenenace_Comp[".isUseAjaxSuggest"] = true;




$tdatamaintenenace_Comp[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamaintenenace_Comp[".isUseTimeForSearch"] = false;





$tdatamaintenenace_Comp[".allSearchFields"] = array();
$tdatamaintenenace_Comp[".filterFields"] = array();
$tdatamaintenenace_Comp[".requiredSearchFields"] = array();

$tdatamaintenenace_Comp[".allSearchFields"][] = "Fleet";
	$tdatamaintenenace_Comp[".allSearchFields"][] = "Vehicle";
	$tdatamaintenenace_Comp[".allSearchFields"][] = "Date";
	$tdatamaintenenace_Comp[".allSearchFields"][] = "MaintType";
	$tdatamaintenenace_Comp[".allSearchFields"][] = "Cost*1";
	

$tdatamaintenenace_Comp[".googleLikeFields"] = array();
$tdatamaintenenace_Comp[".googleLikeFields"][] = "Fleet";
$tdatamaintenenace_Comp[".googleLikeFields"][] = "Vehicle";
$tdatamaintenenace_Comp[".googleLikeFields"][] = "Date";
$tdatamaintenenace_Comp[".googleLikeFields"][] = "MaintType";
$tdatamaintenenace_Comp[".googleLikeFields"][] = "Cost*1";

$tdatamaintenenace_Comp[".panelSearchFields"] = array();
$tdatamaintenenace_Comp[".searchPanelOptions"] = array();
$tdatamaintenenace_Comp[".panelSearchFields"][] = "Fleet";
	$tdatamaintenenace_Comp[".panelSearchFields"][] = "Vehicle";
	$tdatamaintenenace_Comp[".panelSearchFields"][] = "Date";
	$tdatamaintenenace_Comp[".panelSearchFields"][] = "MaintType";
	
$tdatamaintenenace_Comp[".advSearchFields"] = array();
$tdatamaintenenace_Comp[".advSearchFields"][] = "Fleet";
$tdatamaintenenace_Comp[".advSearchFields"][] = "Vehicle";
$tdatamaintenenace_Comp[".advSearchFields"][] = "Date";
$tdatamaintenenace_Comp[".advSearchFields"][] = "MaintType";
$tdatamaintenenace_Comp[".advSearchFields"][] = "Cost*1";

$tdatamaintenenace_Comp[".tableType"] = "chart";

$tdatamaintenenace_Comp[".printerPageOrientation"] = 0;
$tdatamaintenenace_Comp[".nPrinterPageScale"] = 100;

$tdatamaintenenace_Comp[".nPrinterSplitRecords"] = 40;

$tdatamaintenenace_Comp[".nPrinterPDFSplitRecords"] = 40;



$tdatamaintenenace_Comp[".geocodingEnabled"] = false;



// chart settings
$tdatamaintenenace_Comp[".chartType"] = "2DDoughnut";
// end of chart settings

	





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamaintenenace_Comp[".strOrderBy"] = $tstrOrderBy;

$tdatamaintenenace_Comp[".orderindexes"] = array();

$tdatamaintenenace_Comp[".sqlHead"] = "SELECT Fleet,  Vehicle,  Cost,  `Date`,  MaintType,  Cost*1 AS `Cost*1`";
$tdatamaintenenace_Comp[".sqlFrom"] = "FROM maintenenace";
$tdatamaintenenace_Comp[".sqlWhereExpr"] = "";
$tdatamaintenenace_Comp[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamaintenenace_Comp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamaintenenace_Comp[".arrGroupsPerPage"] = $arrGPP;

$tdatamaintenenace_Comp[".highlightSearchResults"] = true;

$tableKeysmaintenenace_Comp = array();
$tdatamaintenenace_Comp[".Keys"] = $tableKeysmaintenenace_Comp;

$tdatamaintenenace_Comp[".listFields"] = array();
$tdatamaintenenace_Comp[".listFields"][] = "Fleet";
$tdatamaintenenace_Comp[".listFields"][] = "Vehicle";
$tdatamaintenenace_Comp[".listFields"][] = "Cost";
$tdatamaintenenace_Comp[".listFields"][] = "Date";
$tdatamaintenenace_Comp[".listFields"][] = "MaintType";
$tdatamaintenenace_Comp[".listFields"][] = "Cost*1";

$tdatamaintenenace_Comp[".hideMobileList"] = array();


$tdatamaintenenace_Comp[".viewFields"] = array();
$tdatamaintenenace_Comp[".viewFields"][] = "Fleet";
$tdatamaintenenace_Comp[".viewFields"][] = "Vehicle";
$tdatamaintenenace_Comp[".viewFields"][] = "Cost";
$tdatamaintenenace_Comp[".viewFields"][] = "Date";
$tdatamaintenenace_Comp[".viewFields"][] = "MaintType";
$tdatamaintenenace_Comp[".viewFields"][] = "Cost*1";

$tdatamaintenenace_Comp[".addFields"] = array();
$tdatamaintenenace_Comp[".addFields"][] = "Fleet";
$tdatamaintenenace_Comp[".addFields"][] = "Vehicle";
$tdatamaintenenace_Comp[".addFields"][] = "Cost";
$tdatamaintenenace_Comp[".addFields"][] = "Date";
$tdatamaintenenace_Comp[".addFields"][] = "MaintType";

$tdatamaintenenace_Comp[".masterListFields"] = array();
$tdatamaintenenace_Comp[".masterListFields"][] = "Fleet";
$tdatamaintenenace_Comp[".masterListFields"][] = "Vehicle";
$tdatamaintenenace_Comp[".masterListFields"][] = "Cost";
$tdatamaintenenace_Comp[".masterListFields"][] = "Date";
$tdatamaintenenace_Comp[".masterListFields"][] = "MaintType";
$tdatamaintenenace_Comp[".masterListFields"][] = "Cost*1";

$tdatamaintenenace_Comp[".inlineAddFields"] = array();
$tdatamaintenenace_Comp[".inlineAddFields"][] = "Fleet";
$tdatamaintenenace_Comp[".inlineAddFields"][] = "Vehicle";
$tdatamaintenenace_Comp[".inlineAddFields"][] = "Cost";
$tdatamaintenenace_Comp[".inlineAddFields"][] = "Date";
$tdatamaintenenace_Comp[".inlineAddFields"][] = "MaintType";

$tdatamaintenenace_Comp[".editFields"] = array();
$tdatamaintenenace_Comp[".editFields"][] = "Fleet";
$tdatamaintenenace_Comp[".editFields"][] = "Vehicle";
$tdatamaintenenace_Comp[".editFields"][] = "Cost";
$tdatamaintenenace_Comp[".editFields"][] = "Date";
$tdatamaintenenace_Comp[".editFields"][] = "MaintType";

$tdatamaintenenace_Comp[".inlineEditFields"] = array();
$tdatamaintenenace_Comp[".inlineEditFields"][] = "Fleet";
$tdatamaintenenace_Comp[".inlineEditFields"][] = "Vehicle";
$tdatamaintenenace_Comp[".inlineEditFields"][] = "Cost";
$tdatamaintenenace_Comp[".inlineEditFields"][] = "Date";
$tdatamaintenenace_Comp[".inlineEditFields"][] = "MaintType";

$tdatamaintenenace_Comp[".exportFields"] = array();
$tdatamaintenenace_Comp[".exportFields"][] = "Fleet";
$tdatamaintenenace_Comp[".exportFields"][] = "Vehicle";
$tdatamaintenenace_Comp[".exportFields"][] = "Cost";
$tdatamaintenenace_Comp[".exportFields"][] = "Date";
$tdatamaintenenace_Comp[".exportFields"][] = "MaintType";
$tdatamaintenenace_Comp[".exportFields"][] = "Cost*1";

$tdatamaintenenace_Comp[".importFields"] = array();
$tdatamaintenenace_Comp[".importFields"][] = "Fleet";
$tdatamaintenenace_Comp[".importFields"][] = "Vehicle";
$tdatamaintenenace_Comp[".importFields"][] = "Cost";
$tdatamaintenenace_Comp[".importFields"][] = "Date";
$tdatamaintenenace_Comp[".importFields"][] = "MaintType";
$tdatamaintenenace_Comp[".importFields"][] = "Cost*1";

$tdatamaintenenace_Comp[".printFields"] = array();
$tdatamaintenenace_Comp[".printFields"][] = "Fleet";
$tdatamaintenenace_Comp[".printFields"][] = "Vehicle";
$tdatamaintenenace_Comp[".printFields"][] = "Cost";
$tdatamaintenenace_Comp[".printFields"][] = "Date";
$tdatamaintenenace_Comp[".printFields"][] = "MaintType";
$tdatamaintenenace_Comp[".printFields"][] = "Cost*1";

//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_Comp","Fleet"); 
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings	

	

	
	$tdatamaintenenace_Comp["Fleet"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_Comp","Vehicle"); 
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
		$edata["autoCompleteFields"][] = array('masterF'=>"Fleet", 'lookupF'=>"Fleet");
	$edata["autoCompleteFields"][] = array('masterF'=>"Type", 'lookupF'=>"Type");
	$edata["LCType"] = 0;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "RegNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RegNo";
	
		
	$edata["LookupOrderBy"] = "RegNo";
	
		
			
		
				
	
	
		
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings	

	

	
	$tdatamaintenenace_Comp["Vehicle"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_Comp","Cost"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Cost"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cost";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
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
	
	
	
	

	

	
	$tdatamaintenenace_Comp["Cost"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_Comp","Date"); 
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
	
		$fdata["strField"] = "Date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Date`";
	
		
		
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
	
		
		
		
		$edata["controlWidth"] = 200;
	
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
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings	

	

	
	$tdatamaintenenace_Comp["Date"] = $fdata;
//	MaintType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MaintType";
	$fdata["GoodName"] = "MaintType";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_Comp","MaintType"); 
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
	
		$fdata["strField"] = "MaintType"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MaintType";
	
		
		
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
	$edata["LookupTable"] = "servicetypemaster";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "Type";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Type";
	
		
	$edata["LookupOrderBy"] = "Type";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings	

	

	
	$tdatamaintenenace_Comp["MaintType"] = $fdata;
//	Cost*1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cost*1";
	$fdata["GoodName"] = "Cost_1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("maintenenace_Comp","Cost_1"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Cost*1"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cost*1";
	
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatamaintenenace_Comp["Cost*1"] = $fdata;

	$tdatamaintenenace_Comp[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">maintenenace Comp</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_doughnut</attr>
		</attr>
		
		<attr value="parameters">';
	$tdatamaintenenace_Comp[".chartXml"] .= '<attr value="0">
			<attr value="name">Cost*1</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdatamaintenenace_Comp[".chartXml"] .= '</attr>';
	$tdatamaintenenace_Comp[".chartXml"] .= '<attr value="1">
		<attr value="name">MaintType</attr>
	</attr>';
	$tdatamaintenenace_Comp[".chartXml"] .= '</attr>
			<attr value="appearance">';
	$tdatamaintenenace_Comp[".chartXml"] .= '<attr value="scolor11">FF0000</attr>
			<attr value="scolor12">FF0000</attr>';

	$tdatamaintenenace_Comp[".chartXml"] .= '<attr value="head">'.xmlencode("Maintenance Costs").'</attr>
<attr value="foot">'.xmlencode("Vehicle").'</attr>
<attr value="y_axis_label">'.xmlencode("Id").'</attr>

<attr value="color51">49563A</attr>
<attr value="color52">49563A</attr>
<attr value="color61">49563A</attr>
<attr value="color62">49563A</attr>
<attr value="color71">C7CDC1</attr>
<attr value="color72">C7CDC1</attr>
<attr value="color81">ECF0E8</attr>
<attr value="color82">ECF0E8</attr>
<attr value="color91">68838B</attr>
<attr value="color92">68838B</attr>
<attr value="color101">48505A</attr>
<attr value="color102">48505A</attr>
<attr value="color111">45595F</attr>
<attr value="color112">45595F</attr>
<attr value="color121"></attr>
<attr value="color122"></attr>
<attr value="color131">000000</attr>
<attr value="color132">000000</attr>
<attr value="color141">000000</attr>
<attr value="color142">000000</attr>

<attr value="slegend">false</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">false</attr>
<attr value="sstacked">false</attr>
<attr value="saxes">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>
<attr value="cscroll">true</attr>
<attr value="maxbarscroll">10</attr>';
$tdatamaintenenace_Comp[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatamaintenenace_Comp[".chartXml"] .= '<attr value="0">
		<attr value="name">Fleet</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("maintenenace_Comp","Fleet")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamaintenenace_Comp[".chartXml"] .= '<attr value="1">
		<attr value="name">Vehicle</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("maintenenace_Comp","Vehicle")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamaintenenace_Comp[".chartXml"] .= '<attr value="2">
		<attr value="name">Cost</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("maintenenace_Comp","Cost")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamaintenenace_Comp[".chartXml"] .= '<attr value="3">
		<attr value="name">Date</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("maintenenace_Comp","Date")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamaintenenace_Comp[".chartXml"] .= '<attr value="4">
		<attr value="name">MaintType</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("maintenenace_Comp","MaintType")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamaintenenace_Comp[".chartXml"] .= '<attr value="5">
		<attr value="name">Cost*1</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("maintenenace_Comp","Cost_1")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatamaintenenace_Comp[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">maintenenace Comp</attr>
<attr value="short_table_name">maintenenace_Comp</attr>
</attr>

</chart>';
	
$tables_data["maintenenace Comp"]=&$tdatamaintenenace_Comp;
$field_labels["maintenenace_Comp"] = &$fieldLabelsmaintenenace_Comp;
$fieldToolTips["maintenenace Comp"] = &$fieldToolTipsmaintenenace_Comp;
$page_titles["maintenenace_Comp"] = &$pageTitlesmaintenenace_Comp;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["maintenenace Comp"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["maintenenace Comp"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_maintenenace_Comp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Fleet,  Vehicle,  Cost,  `Date`,  MaintType,  Cost*1 AS `Cost*1`";
$proto0["m_strFrom"] = "FROM maintenenace";
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
	"m_strName" => "Fleet",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace Comp"
));

$proto5["m_sql"] = "Fleet";
$proto5["m_srcTableName"] = "maintenenace Comp";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace Comp"
));

$proto7["m_sql"] = "Vehicle";
$proto7["m_srcTableName"] = "maintenenace Comp";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace Comp"
));

$proto9["m_sql"] = "Cost";
$proto9["m_srcTableName"] = "maintenenace Comp";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace Comp"
));

$proto11["m_sql"] = "`Date`";
$proto11["m_srcTableName"] = "maintenenace Comp";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "MaintType",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace Comp"
));

$proto13["m_sql"] = "MaintType";
$proto13["m_srcTableName"] = "maintenenace Comp";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "Cost*1"
));

$proto15["m_sql"] = "Cost*1";
$proto15["m_srcTableName"] = "maintenenace Comp";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "Cost*1";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "maintenenace";
$proto18["m_srcTableName"] = "maintenenace Comp";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "Id";
$proto18["m_columns"][] = "Fleet";
$proto18["m_columns"][] = "Vehicle";
$proto18["m_columns"][] = "Type";
$proto18["m_columns"][] = "Supplier";
$proto18["m_columns"][] = "Cost";
$proto18["m_columns"][] = "Remarks";
$proto18["m_columns"][] = "RefNo";
$proto18["m_columns"][] = "SysDate";
$proto18["m_columns"][] = "Date";
$proto18["m_columns"][] = "EnteredBy";
$proto18["m_columns"][] = "Approval";
$proto18["m_columns"][] = "MeterReading";
$proto18["m_columns"][] = "AccidentRef";
$proto18["m_columns"][] = "PaymentVoucher";
$proto18["m_columns"][] = "MaintType";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "maintenenace";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "maintenenace Comp";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="maintenenace Comp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_maintenenace_Comp = createSqlQuery_maintenenace_Comp();


	
						
	
$tdatamaintenenace_Comp[".sqlquery"] = $queryData_maintenenace_Comp;

$tableEvents["maintenenace Comp"] = new eventsBase;
$tdatamaintenenace_Comp[".hasEvents"] = false;

?>