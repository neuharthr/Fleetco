<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainsuranceclaims_report = array();	
	$tdatainsuranceclaims_report[".truncateText"] = true;
	$tdatainsuranceclaims_report[".NumberOfChars"] = 80; 
	$tdatainsuranceclaims_report[".ShortName"] = "insuranceclaims_report";
	$tdatainsuranceclaims_report[".OwnerID"] = "";
	$tdatainsuranceclaims_report[".OriginalTable"] = "insuranceclaims";

//	field labels
$fieldLabelsinsuranceclaims_report = array();
$fieldToolTipsinsuranceclaims_report = array();
$pageTitlesinsuranceclaims_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinsuranceclaims_report["English"] = array();
	$fieldToolTipsinsuranceclaims_report["English"] = array();
	$pageTitlesinsuranceclaims_report["English"] = array();
	$fieldLabelsinsuranceclaims_report["English"]["Id"] = "ID";
	$fieldToolTipsinsuranceclaims_report["English"]["Id"] = "";
	$fieldLabelsinsuranceclaims_report["English"]["SysDate"] = "System Date";
	$fieldToolTipsinsuranceclaims_report["English"]["SysDate"] = "";
	$fieldLabelsinsuranceclaims_report["English"]["Fleet"] = "Fleet";
	$fieldToolTipsinsuranceclaims_report["English"]["Fleet"] = "";
	$fieldLabelsinsuranceclaims_report["English"]["Type"] = "Type";
	$fieldToolTipsinsuranceclaims_report["English"]["Type"] = "";
	$fieldLabelsinsuranceclaims_report["English"]["VehicleNo"] = "Vehicle No";
	$fieldToolTipsinsuranceclaims_report["English"]["VehicleNo"] = "";
	$fieldLabelsinsuranceclaims_report["English"]["AccidentDate"] = "Accident Ref";
	$fieldToolTipsinsuranceclaims_report["English"]["AccidentDate"] = "";
	$fieldLabelsinsuranceclaims_report["English"]["Claim"] = "Claim Amount";
	$fieldToolTipsinsuranceclaims_report["English"]["Claim"] = "";
	$fieldLabelsinsuranceclaims_report["English"]["EnteredBy"] = "Entered By";
	$fieldToolTipsinsuranceclaims_report["English"]["EnteredBy"] = "";
	$fieldLabelsinsuranceclaims_report["English"]["ReceiptNo"] = "Receipt No";
	$fieldToolTipsinsuranceclaims_report["English"]["ReceiptNo"] = "";
	$fieldLabelsinsuranceclaims_report["English"]["Remarks"] = "Remarks";
	$fieldToolTipsinsuranceclaims_report["English"]["Remarks"] = "";
	$fieldLabelsinsuranceclaims_report["English"]["insurer"] = "Insurer";
	$fieldToolTipsinsuranceclaims_report["English"]["insurer"] = "";
	if (count($fieldToolTipsinsuranceclaims_report["English"]))
		$tdatainsuranceclaims_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinsuranceclaims_report[""] = array();
	$fieldToolTipsinsuranceclaims_report[""] = array();
	$pageTitlesinsuranceclaims_report[""] = array();
	$fieldLabelsinsuranceclaims_report[""]["Id"] = "Id";
	$fieldToolTipsinsuranceclaims_report[""]["Id"] = "";
	$fieldLabelsinsuranceclaims_report[""]["SysDate"] = "Sys Date";
	$fieldToolTipsinsuranceclaims_report[""]["SysDate"] = "";
	$fieldLabelsinsuranceclaims_report[""]["Fleet"] = "Fleet";
	$fieldToolTipsinsuranceclaims_report[""]["Fleet"] = "";
	$fieldLabelsinsuranceclaims_report[""]["Type"] = "Type";
	$fieldToolTipsinsuranceclaims_report[""]["Type"] = "";
	$fieldLabelsinsuranceclaims_report[""]["VehicleNo"] = "Vehicle No";
	$fieldToolTipsinsuranceclaims_report[""]["VehicleNo"] = "";
	$fieldLabelsinsuranceclaims_report[""]["AccidentDate"] = "Accident Date";
	$fieldToolTipsinsuranceclaims_report[""]["AccidentDate"] = "";
	$fieldLabelsinsuranceclaims_report[""]["Claim"] = "Claim";
	$fieldToolTipsinsuranceclaims_report[""]["Claim"] = "";
	$fieldLabelsinsuranceclaims_report[""]["EnteredBy"] = "Entered By";
	$fieldToolTipsinsuranceclaims_report[""]["EnteredBy"] = "";
	$fieldLabelsinsuranceclaims_report[""]["ReceiptNo"] = "Receipt No";
	$fieldToolTipsinsuranceclaims_report[""]["ReceiptNo"] = "";
	$fieldLabelsinsuranceclaims_report[""]["Remarks"] = "Remarks";
	$fieldToolTipsinsuranceclaims_report[""]["Remarks"] = "";
	$fieldLabelsinsuranceclaims_report[""]["insurer"] = "Insurer";
	$fieldToolTipsinsuranceclaims_report[""]["insurer"] = "";
	if (count($fieldToolTipsinsuranceclaims_report[""]))
		$tdatainsuranceclaims_report[".isUseToolTips"] = true;
}
	
	
	$tdatainsuranceclaims_report[".NCSearch"] = true;



$tdatainsuranceclaims_report[".shortTableName"] = "insuranceclaims_report";
$tdatainsuranceclaims_report[".nSecOptions"] = 0;
$tdatainsuranceclaims_report[".recsPerRowList"] = 1;
$tdatainsuranceclaims_report[".recsPerRowPrint"] = 1;
$tdatainsuranceclaims_report[".mainTableOwnerID"] = "";
$tdatainsuranceclaims_report[".moveNext"] = 1;
$tdatainsuranceclaims_report[".entityType"] = 1;

$tdatainsuranceclaims_report[".strOriginalTableName"] = "insuranceclaims";




$tdatainsuranceclaims_report[".showAddInPopup"] = false;

$tdatainsuranceclaims_report[".showEditInPopup"] = false;

$tdatainsuranceclaims_report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainsuranceclaims_report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainsuranceclaims_report[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatainsuranceclaims_report[".listAjax"] = true;
else 
	$tdatainsuranceclaims_report[".listAjax"] = false;

	$tdatainsuranceclaims_report[".audit"] = false;

	$tdatainsuranceclaims_report[".locking"] = false;



$tdatainsuranceclaims_report[".list"] = true;

$tdatainsuranceclaims_report[".view"] = true;


$tdatainsuranceclaims_report[".exportTo"] = true;

$tdatainsuranceclaims_report[".printFriendly"] = true;


$tdatainsuranceclaims_report[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdatainsuranceclaims_report[".searchSaving"] = false;
//

$tdatainsuranceclaims_report[".showSearchPanel"] = true;
		$tdatainsuranceclaims_report[".flexibleSearch"] = true;		

if (isMobile())
	$tdatainsuranceclaims_report[".isUseAjaxSuggest"] = false;
else 
	$tdatainsuranceclaims_report[".isUseAjaxSuggest"] = true;

$tdatainsuranceclaims_report[".rowHighlite"] = true;



$tdatainsuranceclaims_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainsuranceclaims_report[".isUseTimeForSearch"] = false;





$tdatainsuranceclaims_report[".allSearchFields"] = array();
$tdatainsuranceclaims_report[".filterFields"] = array();
$tdatainsuranceclaims_report[".requiredSearchFields"] = array();

$tdatainsuranceclaims_report[".allSearchFields"][] = "Id";
	$tdatainsuranceclaims_report[".allSearchFields"][] = "SysDate";
	$tdatainsuranceclaims_report[".allSearchFields"][] = "VehicleNo";
	$tdatainsuranceclaims_report[".allSearchFields"][] = "Fleet";
	$tdatainsuranceclaims_report[".allSearchFields"][] = "Type";
	$tdatainsuranceclaims_report[".allSearchFields"][] = "AccidentDate";
	$tdatainsuranceclaims_report[".allSearchFields"][] = "insurer";
	$tdatainsuranceclaims_report[".allSearchFields"][] = "Claim";
	$tdatainsuranceclaims_report[".allSearchFields"][] = "ReceiptNo";
	$tdatainsuranceclaims_report[".allSearchFields"][] = "Remarks";
	$tdatainsuranceclaims_report[".allSearchFields"][] = "EnteredBy";
	

$tdatainsuranceclaims_report[".googleLikeFields"] = array();
$tdatainsuranceclaims_report[".googleLikeFields"][] = "Id";
$tdatainsuranceclaims_report[".googleLikeFields"][] = "SysDate";
$tdatainsuranceclaims_report[".googleLikeFields"][] = "Fleet";
$tdatainsuranceclaims_report[".googleLikeFields"][] = "Type";
$tdatainsuranceclaims_report[".googleLikeFields"][] = "VehicleNo";
$tdatainsuranceclaims_report[".googleLikeFields"][] = "AccidentDate";
$tdatainsuranceclaims_report[".googleLikeFields"][] = "Claim";
$tdatainsuranceclaims_report[".googleLikeFields"][] = "EnteredBy";
$tdatainsuranceclaims_report[".googleLikeFields"][] = "ReceiptNo";
$tdatainsuranceclaims_report[".googleLikeFields"][] = "Remarks";
$tdatainsuranceclaims_report[".googleLikeFields"][] = "insurer";

$tdatainsuranceclaims_report[".panelSearchFields"] = array();
$tdatainsuranceclaims_report[".searchPanelOptions"] = array();
$tdatainsuranceclaims_report[".panelSearchFields"][] = "VehicleNo";
	
$tdatainsuranceclaims_report[".advSearchFields"] = array();
$tdatainsuranceclaims_report[".advSearchFields"][] = "Id";
$tdatainsuranceclaims_report[".advSearchFields"][] = "SysDate";
$tdatainsuranceclaims_report[".advSearchFields"][] = "VehicleNo";
$tdatainsuranceclaims_report[".advSearchFields"][] = "Fleet";
$tdatainsuranceclaims_report[".advSearchFields"][] = "Type";
$tdatainsuranceclaims_report[".advSearchFields"][] = "AccidentDate";
$tdatainsuranceclaims_report[".advSearchFields"][] = "insurer";
$tdatainsuranceclaims_report[".advSearchFields"][] = "Claim";
$tdatainsuranceclaims_report[".advSearchFields"][] = "ReceiptNo";
$tdatainsuranceclaims_report[".advSearchFields"][] = "Remarks";
$tdatainsuranceclaims_report[".advSearchFields"][] = "EnteredBy";

$tdatainsuranceclaims_report[".tableType"] = "list";

$tdatainsuranceclaims_report[".printerPageOrientation"] = 0;
$tdatainsuranceclaims_report[".nPrinterPageScale"] = 100;

$tdatainsuranceclaims_report[".nPrinterSplitRecords"] = 40;

$tdatainsuranceclaims_report[".nPrinterPDFSplitRecords"] = 40;



$tdatainsuranceclaims_report[".geocodingEnabled"] = false;




	





// view page pdf
$tdatainsuranceclaims_report[".isViewPagePDF"] = true;
$tdatainsuranceclaims_report[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatainsuranceclaims_report[".isPrinterPagePDF"] = true;
$tdatainsuranceclaims_report[".nPrinterPagePDFScale"] = 100;


$tdatainsuranceclaims_report[".pageSize"] = 20;

$tdatainsuranceclaims_report[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainsuranceclaims_report[".strOrderBy"] = $tstrOrderBy;

$tdatainsuranceclaims_report[".orderindexes"] = array();

$tdatainsuranceclaims_report[".sqlHead"] = "SELECT Id,  	`SysDate`,  	Fleet,  	`Type`,  	VehicleNo,  	AccidentDate,  	Claim,  	EnteredBy,  	ReceiptNo,  	Remarks,  	insurer";
$tdatainsuranceclaims_report[".sqlFrom"] = "FROM insuranceclaims";
$tdatainsuranceclaims_report[".sqlWhereExpr"] = "";
$tdatainsuranceclaims_report[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatainsuranceclaims_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainsuranceclaims_report[".arrGroupsPerPage"] = $arrGPP;

$tdatainsuranceclaims_report[".highlightSearchResults"] = true;

$tableKeysinsuranceclaims_report = array();
$tableKeysinsuranceclaims_report[] = "Id";
$tdatainsuranceclaims_report[".Keys"] = $tableKeysinsuranceclaims_report;

$tdatainsuranceclaims_report[".listFields"] = array();
$tdatainsuranceclaims_report[".listFields"][] = "Id";
$tdatainsuranceclaims_report[".listFields"][] = "SysDate";
$tdatainsuranceclaims_report[".listFields"][] = "VehicleNo";
$tdatainsuranceclaims_report[".listFields"][] = "Fleet";
$tdatainsuranceclaims_report[".listFields"][] = "Type";
$tdatainsuranceclaims_report[".listFields"][] = "AccidentDate";
$tdatainsuranceclaims_report[".listFields"][] = "insurer";
$tdatainsuranceclaims_report[".listFields"][] = "Claim";
$tdatainsuranceclaims_report[".listFields"][] = "ReceiptNo";
$tdatainsuranceclaims_report[".listFields"][] = "Remarks";
$tdatainsuranceclaims_report[".listFields"][] = "EnteredBy";

$tdatainsuranceclaims_report[".hideMobileList"] = array();


$tdatainsuranceclaims_report[".viewFields"] = array();
$tdatainsuranceclaims_report[".viewFields"][] = "Id";
$tdatainsuranceclaims_report[".viewFields"][] = "SysDate";
$tdatainsuranceclaims_report[".viewFields"][] = "VehicleNo";
$tdatainsuranceclaims_report[".viewFields"][] = "Fleet";
$tdatainsuranceclaims_report[".viewFields"][] = "Type";
$tdatainsuranceclaims_report[".viewFields"][] = "AccidentDate";
$tdatainsuranceclaims_report[".viewFields"][] = "insurer";
$tdatainsuranceclaims_report[".viewFields"][] = "Claim";
$tdatainsuranceclaims_report[".viewFields"][] = "ReceiptNo";
$tdatainsuranceclaims_report[".viewFields"][] = "Remarks";
$tdatainsuranceclaims_report[".viewFields"][] = "EnteredBy";

$tdatainsuranceclaims_report[".addFields"] = array();

$tdatainsuranceclaims_report[".masterListFields"] = array();
$tdatainsuranceclaims_report[".masterListFields"][] = "Id";
$tdatainsuranceclaims_report[".masterListFields"][] = "SysDate";
$tdatainsuranceclaims_report[".masterListFields"][] = "VehicleNo";
$tdatainsuranceclaims_report[".masterListFields"][] = "Fleet";
$tdatainsuranceclaims_report[".masterListFields"][] = "Type";
$tdatainsuranceclaims_report[".masterListFields"][] = "AccidentDate";
$tdatainsuranceclaims_report[".masterListFields"][] = "insurer";
$tdatainsuranceclaims_report[".masterListFields"][] = "Claim";
$tdatainsuranceclaims_report[".masterListFields"][] = "ReceiptNo";
$tdatainsuranceclaims_report[".masterListFields"][] = "Remarks";
$tdatainsuranceclaims_report[".masterListFields"][] = "EnteredBy";

$tdatainsuranceclaims_report[".inlineAddFields"] = array();

$tdatainsuranceclaims_report[".editFields"] = array();

$tdatainsuranceclaims_report[".inlineEditFields"] = array();

$tdatainsuranceclaims_report[".exportFields"] = array();
$tdatainsuranceclaims_report[".exportFields"][] = "Id";
$tdatainsuranceclaims_report[".exportFields"][] = "SysDate";
$tdatainsuranceclaims_report[".exportFields"][] = "VehicleNo";
$tdatainsuranceclaims_report[".exportFields"][] = "Fleet";
$tdatainsuranceclaims_report[".exportFields"][] = "Type";
$tdatainsuranceclaims_report[".exportFields"][] = "AccidentDate";
$tdatainsuranceclaims_report[".exportFields"][] = "insurer";
$tdatainsuranceclaims_report[".exportFields"][] = "Claim";
$tdatainsuranceclaims_report[".exportFields"][] = "ReceiptNo";
$tdatainsuranceclaims_report[".exportFields"][] = "Remarks";
$tdatainsuranceclaims_report[".exportFields"][] = "EnteredBy";

$tdatainsuranceclaims_report[".importFields"] = array();

$tdatainsuranceclaims_report[".printFields"] = array();
$tdatainsuranceclaims_report[".printFields"][] = "Id";
$tdatainsuranceclaims_report[".printFields"][] = "SysDate";
$tdatainsuranceclaims_report[".printFields"][] = "VehicleNo";
$tdatainsuranceclaims_report[".printFields"][] = "Fleet";
$tdatainsuranceclaims_report[".printFields"][] = "Type";
$tdatainsuranceclaims_report[".printFields"][] = "AccidentDate";
$tdatainsuranceclaims_report[".printFields"][] = "insurer";
$tdatainsuranceclaims_report[".printFields"][] = "Claim";
$tdatainsuranceclaims_report[".printFields"][] = "ReceiptNo";
$tdatainsuranceclaims_report[".printFields"][] = "Remarks";
$tdatainsuranceclaims_report[".printFields"][] = "EnteredBy";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "insuranceclaims";
	$fdata["Label"] = GetFieldLabel("insuranceclaims_report","Id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Id";
	
		
		
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

	

	
	$tdatainsuranceclaims_report["Id"] = $fdata;
//	SysDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SysDate";
	$fdata["GoodName"] = "SysDate";
	$fdata["ownerTable"] = "insuranceclaims";
	$fdata["Label"] = GetFieldLabel("insuranceclaims_report","SysDate"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "SysDate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`SysDate`";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	

	
	$tdatainsuranceclaims_report["SysDate"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "insuranceclaims";
	$fdata["Label"] = GetFieldLabel("insuranceclaims_report","Fleet"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	

	
	$tdatainsuranceclaims_report["Fleet"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "insuranceclaims";
	$fdata["Label"] = GetFieldLabel("insuranceclaims_report","Type"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Type"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Type`";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	

	
	$tdatainsuranceclaims_report["Type"] = $fdata;
//	VehicleNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "VehicleNo";
	$fdata["GoodName"] = "VehicleNo";
	$fdata["ownerTable"] = "insuranceclaims";
	$fdata["Label"] = GetFieldLabel("insuranceclaims_report","VehicleNo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "VehicleNo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VehicleNo";
	
		
		
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
	$edata["LookupTable"] = "vehiclemaster";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Fleet", 'lookupF'=>"Fleet");
	$edata["autoCompleteFields"][] = array('masterF'=>"Type", 'lookupF'=>"Type");
	$edata["LCType"] = 0;
		
		
			
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings	

	

	
	$tdatainsuranceclaims_report["VehicleNo"] = $fdata;
//	AccidentDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AccidentDate";
	$fdata["GoodName"] = "AccidentDate";
	$fdata["ownerTable"] = "insuranceclaims";
	$fdata["Label"] = GetFieldLabel("insuranceclaims_report","AccidentDate"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "AccidentDate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccidentDate";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "accidents";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "Id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Id";
	
		
	$edata["LookupOrderBy"] = "Id";
	
		
			
		
				
	
	
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatainsuranceclaims_report["AccidentDate"] = $fdata;
//	Claim
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Claim";
	$fdata["GoodName"] = "Claim";
	$fdata["ownerTable"] = "insuranceclaims";
	$fdata["Label"] = GetFieldLabel("insuranceclaims_report","Claim"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Claim"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Claim";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatainsuranceclaims_report["Claim"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "insuranceclaims";
	$fdata["Label"] = GetFieldLabel("insuranceclaims_report","EnteredBy"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "EnteredBy"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EnteredBy";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	

	
	$tdatainsuranceclaims_report["EnteredBy"] = $fdata;
//	ReceiptNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ReceiptNo";
	$fdata["GoodName"] = "ReceiptNo";
	$fdata["ownerTable"] = "insuranceclaims";
	$fdata["Label"] = GetFieldLabel("insuranceclaims_report","ReceiptNo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ReceiptNo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ReceiptNo";
	
		
		
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

	

	
	$tdatainsuranceclaims_report["ReceiptNo"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "insuranceclaims";
	$fdata["Label"] = GetFieldLabel("insuranceclaims_report","Remarks"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Remarks"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Remarks";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
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

	

	
	$tdatainsuranceclaims_report["Remarks"] = $fdata;
//	insurer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "insurer";
	$fdata["GoodName"] = "insurer";
	$fdata["ownerTable"] = "insuranceclaims";
	$fdata["Label"] = GetFieldLabel("insuranceclaims_report","insurer"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "insurer"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "insurer";
	
		
		
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
	$edata["LookupTable"] = "insurancecompany";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "Name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupOrderBy"] = "Name";
	
		
			
		
				
	
	
		
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

	

	
	$tdatainsuranceclaims_report["insurer"] = $fdata;

	
$tables_data["insuranceclaims-report"]=&$tdatainsuranceclaims_report;
$field_labels["insuranceclaims_report"] = &$fieldLabelsinsuranceclaims_report;
$fieldToolTips["insuranceclaims-report"] = &$fieldToolTipsinsuranceclaims_report;
$page_titles["insuranceclaims_report"] = &$pageTitlesinsuranceclaims_report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["insuranceclaims-report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["insuranceclaims-report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_insuranceclaims_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  	`SysDate`,  	Fleet,  	`Type`,  	VehicleNo,  	AccidentDate,  	Claim,  	EnteredBy,  	ReceiptNo,  	Remarks,  	insurer";
$proto0["m_strFrom"] = "FROM insuranceclaims";
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
	"m_strName" => "Id",
	"m_strTable" => "insuranceclaims",
	"m_srcTableName" => "insuranceclaims-report"
));

$proto5["m_sql"] = "Id";
$proto5["m_srcTableName"] = "insuranceclaims-report";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "SysDate",
	"m_strTable" => "insuranceclaims",
	"m_srcTableName" => "insuranceclaims-report"
));

$proto7["m_sql"] = "`SysDate`";
$proto7["m_srcTableName"] = "insuranceclaims-report";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "insuranceclaims",
	"m_srcTableName" => "insuranceclaims-report"
));

$proto9["m_sql"] = "Fleet";
$proto9["m_srcTableName"] = "insuranceclaims-report";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "insuranceclaims",
	"m_srcTableName" => "insuranceclaims-report"
));

$proto11["m_sql"] = "`Type`";
$proto11["m_srcTableName"] = "insuranceclaims-report";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "VehicleNo",
	"m_strTable" => "insuranceclaims",
	"m_srcTableName" => "insuranceclaims-report"
));

$proto13["m_sql"] = "VehicleNo";
$proto13["m_srcTableName"] = "insuranceclaims-report";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "AccidentDate",
	"m_strTable" => "insuranceclaims",
	"m_srcTableName" => "insuranceclaims-report"
));

$proto15["m_sql"] = "AccidentDate";
$proto15["m_srcTableName"] = "insuranceclaims-report";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Claim",
	"m_strTable" => "insuranceclaims",
	"m_srcTableName" => "insuranceclaims-report"
));

$proto17["m_sql"] = "Claim";
$proto17["m_srcTableName"] = "insuranceclaims-report";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "insuranceclaims",
	"m_srcTableName" => "insuranceclaims-report"
));

$proto19["m_sql"] = "EnteredBy";
$proto19["m_srcTableName"] = "insuranceclaims-report";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "ReceiptNo",
	"m_strTable" => "insuranceclaims",
	"m_srcTableName" => "insuranceclaims-report"
));

$proto21["m_sql"] = "ReceiptNo";
$proto21["m_srcTableName"] = "insuranceclaims-report";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "insuranceclaims",
	"m_srcTableName" => "insuranceclaims-report"
));

$proto23["m_sql"] = "Remarks";
$proto23["m_srcTableName"] = "insuranceclaims-report";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "insurer",
	"m_strTable" => "insuranceclaims",
	"m_srcTableName" => "insuranceclaims-report"
));

$proto25["m_sql"] = "insurer";
$proto25["m_srcTableName"] = "insuranceclaims-report";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "insuranceclaims";
$proto28["m_srcTableName"] = "insuranceclaims-report";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "Id";
$proto28["m_columns"][] = "SysDate";
$proto28["m_columns"][] = "Fleet";
$proto28["m_columns"][] = "Type";
$proto28["m_columns"][] = "VehicleNo";
$proto28["m_columns"][] = "AccidentDate";
$proto28["m_columns"][] = "Claim";
$proto28["m_columns"][] = "EnteredBy";
$proto28["m_columns"][] = "ReceiptNo";
$proto28["m_columns"][] = "Remarks";
$proto28["m_columns"][] = "insurer";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "insuranceclaims";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "insuranceclaims-report";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="insuranceclaims-report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_insuranceclaims_report = createSqlQuery_insuranceclaims_report();


	
											
	
$tdatainsuranceclaims_report[".sqlquery"] = $queryData_insuranceclaims_report;

$tableEvents["insuranceclaims-report"] = new eventsBase;
$tdatainsuranceclaims_report[".hasEvents"] = false;

?>