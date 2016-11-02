<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainsurance_payments_report = array();	
	$tdatainsurance_payments_report[".truncateText"] = true;
	$tdatainsurance_payments_report[".NumberOfChars"] = 80; 
	$tdatainsurance_payments_report[".ShortName"] = "insurance_payments_report";
	$tdatainsurance_payments_report[".OwnerID"] = "";
	$tdatainsurance_payments_report[".OriginalTable"] = "insurance-payments";

//	field labels
$fieldLabelsinsurance_payments_report = array();
$fieldToolTipsinsurance_payments_report = array();
$pageTitlesinsurance_payments_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinsurance_payments_report["English"] = array();
	$fieldToolTipsinsurance_payments_report["English"] = array();
	$pageTitlesinsurance_payments_report["English"] = array();
	$fieldLabelsinsurance_payments_report["English"]["Id"] = "ID";
	$fieldToolTipsinsurance_payments_report["English"]["Id"] = "";
	$fieldLabelsinsurance_payments_report["English"]["SysDate"] = "System Date";
	$fieldToolTipsinsurance_payments_report["English"]["SysDate"] = "";
	$fieldLabelsinsurance_payments_report["English"]["Fleet"] = "Fleet";
	$fieldToolTipsinsurance_payments_report["English"]["Fleet"] = "";
	$fieldLabelsinsurance_payments_report["English"]["Type"] = "Type";
	$fieldToolTipsinsurance_payments_report["English"]["Type"] = "";
	$fieldLabelsinsurance_payments_report["English"]["VehicleNo"] = "Vehicle No";
	$fieldToolTipsinsurance_payments_report["English"]["VehicleNo"] = "";
	$fieldLabelsinsurance_payments_report["English"]["Premium"] = "Premium";
	$fieldToolTipsinsurance_payments_report["English"]["Premium"] = "";
	$fieldLabelsinsurance_payments_report["English"]["Cost"] = "Cost";
	$fieldToolTipsinsurance_payments_report["English"]["Cost"] = "";
	$fieldLabelsinsurance_payments_report["English"]["PaymentVoucher"] = "Pay. Voucher No";
	$fieldToolTipsinsurance_payments_report["English"]["PaymentVoucher"] = "";
	$fieldLabelsinsurance_payments_report["English"]["EnteredBy"] = "Entered By";
	$fieldToolTipsinsurance_payments_report["English"]["EnteredBy"] = "";
	$fieldLabelsinsurance_payments_report["English"]["RenewalDueDate"] = "Renewal Date";
	$fieldToolTipsinsurance_payments_report["English"]["RenewalDueDate"] = "";
	$fieldLabelsinsurance_payments_report["English"]["DateofPayment"] = "Pay. Voucher Date";
	$fieldToolTipsinsurance_payments_report["English"]["DateofPayment"] = "";
	$fieldLabelsinsurance_payments_report["English"]["Insurer"] = "Insurer";
	$fieldToolTipsinsurance_payments_report["English"]["Insurer"] = "";
	if (count($fieldToolTipsinsurance_payments_report["English"]))
		$tdatainsurance_payments_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinsurance_payments_report[""] = array();
	$fieldToolTipsinsurance_payments_report[""] = array();
	$pageTitlesinsurance_payments_report[""] = array();
	$fieldLabelsinsurance_payments_report[""]["Id"] = "Id";
	$fieldToolTipsinsurance_payments_report[""]["Id"] = "";
	$fieldLabelsinsurance_payments_report[""]["SysDate"] = "Sys Date";
	$fieldToolTipsinsurance_payments_report[""]["SysDate"] = "";
	$fieldLabelsinsurance_payments_report[""]["Fleet"] = "Fleet";
	$fieldToolTipsinsurance_payments_report[""]["Fleet"] = "";
	$fieldLabelsinsurance_payments_report[""]["Type"] = "Type";
	$fieldToolTipsinsurance_payments_report[""]["Type"] = "";
	$fieldLabelsinsurance_payments_report[""]["VehicleNo"] = "Vehicle No";
	$fieldToolTipsinsurance_payments_report[""]["VehicleNo"] = "";
	$fieldLabelsinsurance_payments_report[""]["Premium"] = "Premium";
	$fieldToolTipsinsurance_payments_report[""]["Premium"] = "";
	$fieldLabelsinsurance_payments_report[""]["Cost"] = "Cost";
	$fieldToolTipsinsurance_payments_report[""]["Cost"] = "";
	$fieldLabelsinsurance_payments_report[""]["PaymentVoucher"] = "Payment Voucher";
	$fieldToolTipsinsurance_payments_report[""]["PaymentVoucher"] = "";
	$fieldLabelsinsurance_payments_report[""]["EnteredBy"] = "Entered By";
	$fieldToolTipsinsurance_payments_report[""]["EnteredBy"] = "";
	$fieldLabelsinsurance_payments_report[""]["RenewalDueDate"] = "Renewal Due Date";
	$fieldToolTipsinsurance_payments_report[""]["RenewalDueDate"] = "";
	$fieldLabelsinsurance_payments_report[""]["DateofPayment"] = "Dateof Payment";
	$fieldToolTipsinsurance_payments_report[""]["DateofPayment"] = "";
	$fieldLabelsinsurance_payments_report[""]["Insurer"] = "Insurer";
	$fieldToolTipsinsurance_payments_report[""]["Insurer"] = "";
	if (count($fieldToolTipsinsurance_payments_report[""]))
		$tdatainsurance_payments_report[".isUseToolTips"] = true;
}
	
	
	$tdatainsurance_payments_report[".NCSearch"] = true;



$tdatainsurance_payments_report[".shortTableName"] = "insurance_payments_report";
$tdatainsurance_payments_report[".nSecOptions"] = 0;
$tdatainsurance_payments_report[".recsPerRowList"] = 1;
$tdatainsurance_payments_report[".recsPerRowPrint"] = 1;
$tdatainsurance_payments_report[".mainTableOwnerID"] = "";
$tdatainsurance_payments_report[".moveNext"] = 1;
$tdatainsurance_payments_report[".entityType"] = 1;

$tdatainsurance_payments_report[".strOriginalTableName"] = "insurance-payments";




$tdatainsurance_payments_report[".showAddInPopup"] = false;

$tdatainsurance_payments_report[".showEditInPopup"] = false;

$tdatainsurance_payments_report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainsurance_payments_report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainsurance_payments_report[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatainsurance_payments_report[".listAjax"] = true;
else 
	$tdatainsurance_payments_report[".listAjax"] = false;

	$tdatainsurance_payments_report[".audit"] = false;

	$tdatainsurance_payments_report[".locking"] = false;



$tdatainsurance_payments_report[".list"] = true;

$tdatainsurance_payments_report[".view"] = true;


$tdatainsurance_payments_report[".exportTo"] = true;

$tdatainsurance_payments_report[".printFriendly"] = true;


$tdatainsurance_payments_report[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdatainsurance_payments_report[".searchSaving"] = false;
//

$tdatainsurance_payments_report[".showSearchPanel"] = true;
		$tdatainsurance_payments_report[".flexibleSearch"] = true;		

if (isMobile())
	$tdatainsurance_payments_report[".isUseAjaxSuggest"] = false;
else 
	$tdatainsurance_payments_report[".isUseAjaxSuggest"] = true;

$tdatainsurance_payments_report[".rowHighlite"] = true;



$tdatainsurance_payments_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainsurance_payments_report[".isUseTimeForSearch"] = false;





$tdatainsurance_payments_report[".allSearchFields"] = array();
$tdatainsurance_payments_report[".filterFields"] = array();
$tdatainsurance_payments_report[".requiredSearchFields"] = array();

$tdatainsurance_payments_report[".allSearchFields"][] = "SysDate";
	$tdatainsurance_payments_report[".allSearchFields"][] = "VehicleNo";
	$tdatainsurance_payments_report[".allSearchFields"][] = "Fleet";
	$tdatainsurance_payments_report[".allSearchFields"][] = "Type";
	$tdatainsurance_payments_report[".allSearchFields"][] = "Insurer";
	$tdatainsurance_payments_report[".allSearchFields"][] = "RenewalDueDate";
	$tdatainsurance_payments_report[".allSearchFields"][] = "Premium";
	$tdatainsurance_payments_report[".allSearchFields"][] = "DateofPayment";
	$tdatainsurance_payments_report[".allSearchFields"][] = "PaymentVoucher";
	$tdatainsurance_payments_report[".allSearchFields"][] = "EnteredBy";
	

$tdatainsurance_payments_report[".googleLikeFields"] = array();
$tdatainsurance_payments_report[".googleLikeFields"][] = "SysDate";
$tdatainsurance_payments_report[".googleLikeFields"][] = "Fleet";
$tdatainsurance_payments_report[".googleLikeFields"][] = "Type";
$tdatainsurance_payments_report[".googleLikeFields"][] = "VehicleNo";
$tdatainsurance_payments_report[".googleLikeFields"][] = "RenewalDueDate";
$tdatainsurance_payments_report[".googleLikeFields"][] = "Premium";
$tdatainsurance_payments_report[".googleLikeFields"][] = "PaymentVoucher";
$tdatainsurance_payments_report[".googleLikeFields"][] = "EnteredBy";
$tdatainsurance_payments_report[".googleLikeFields"][] = "DateofPayment";
$tdatainsurance_payments_report[".googleLikeFields"][] = "Insurer";

$tdatainsurance_payments_report[".panelSearchFields"] = array();
$tdatainsurance_payments_report[".searchPanelOptions"] = array();
$tdatainsurance_payments_report[".panelSearchFields"][] = "VehicleNo";
	
$tdatainsurance_payments_report[".advSearchFields"] = array();
$tdatainsurance_payments_report[".advSearchFields"][] = "SysDate";
$tdatainsurance_payments_report[".advSearchFields"][] = "VehicleNo";
$tdatainsurance_payments_report[".advSearchFields"][] = "Fleet";
$tdatainsurance_payments_report[".advSearchFields"][] = "Type";
$tdatainsurance_payments_report[".advSearchFields"][] = "Insurer";
$tdatainsurance_payments_report[".advSearchFields"][] = "RenewalDueDate";
$tdatainsurance_payments_report[".advSearchFields"][] = "Premium";
$tdatainsurance_payments_report[".advSearchFields"][] = "DateofPayment";
$tdatainsurance_payments_report[".advSearchFields"][] = "PaymentVoucher";
$tdatainsurance_payments_report[".advSearchFields"][] = "EnteredBy";

$tdatainsurance_payments_report[".tableType"] = "list";

$tdatainsurance_payments_report[".printerPageOrientation"] = 0;
$tdatainsurance_payments_report[".nPrinterPageScale"] = 100;

$tdatainsurance_payments_report[".nPrinterSplitRecords"] = 40;

$tdatainsurance_payments_report[".nPrinterPDFSplitRecords"] = 40;



$tdatainsurance_payments_report[".geocodingEnabled"] = false;




	





// view page pdf
$tdatainsurance_payments_report[".isViewPagePDF"] = true;
$tdatainsurance_payments_report[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatainsurance_payments_report[".isPrinterPagePDF"] = true;
$tdatainsurance_payments_report[".nPrinterPagePDFScale"] = 100;


$tdatainsurance_payments_report[".pageSize"] = 20;

$tdatainsurance_payments_report[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainsurance_payments_report[".strOrderBy"] = $tstrOrderBy;

$tdatainsurance_payments_report[".orderindexes"] = array();

$tdatainsurance_payments_report[".sqlHead"] = "SELECT Id,  	`SysDate`,  	Fleet,  	`Type`,  	VehicleNo,  	RenewalDueDate,  	Premium,  	Cost,  	PaymentVoucher,  	EnteredBy,  	DateofPayment,  	Insurer";
$tdatainsurance_payments_report[".sqlFrom"] = "FROM `insurance-payments`";
$tdatainsurance_payments_report[".sqlWhereExpr"] = "";
$tdatainsurance_payments_report[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatainsurance_payments_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainsurance_payments_report[".arrGroupsPerPage"] = $arrGPP;

$tdatainsurance_payments_report[".highlightSearchResults"] = true;

$tableKeysinsurance_payments_report = array();
$tableKeysinsurance_payments_report[] = "Id";
$tdatainsurance_payments_report[".Keys"] = $tableKeysinsurance_payments_report;

$tdatainsurance_payments_report[".listFields"] = array();
$tdatainsurance_payments_report[".listFields"][] = "SysDate";
$tdatainsurance_payments_report[".listFields"][] = "VehicleNo";
$tdatainsurance_payments_report[".listFields"][] = "Fleet";
$tdatainsurance_payments_report[".listFields"][] = "Type";
$tdatainsurance_payments_report[".listFields"][] = "Insurer";
$tdatainsurance_payments_report[".listFields"][] = "RenewalDueDate";
$tdatainsurance_payments_report[".listFields"][] = "Premium";
$tdatainsurance_payments_report[".listFields"][] = "PaymentVoucher";
$tdatainsurance_payments_report[".listFields"][] = "DateofPayment";
$tdatainsurance_payments_report[".listFields"][] = "EnteredBy";

$tdatainsurance_payments_report[".hideMobileList"] = array();


$tdatainsurance_payments_report[".viewFields"] = array();
$tdatainsurance_payments_report[".viewFields"][] = "SysDate";
$tdatainsurance_payments_report[".viewFields"][] = "Id";
$tdatainsurance_payments_report[".viewFields"][] = "VehicleNo";
$tdatainsurance_payments_report[".viewFields"][] = "Fleet";
$tdatainsurance_payments_report[".viewFields"][] = "Type";
$tdatainsurance_payments_report[".viewFields"][] = "Insurer";
$tdatainsurance_payments_report[".viewFields"][] = "RenewalDueDate";
$tdatainsurance_payments_report[".viewFields"][] = "Premium";
$tdatainsurance_payments_report[".viewFields"][] = "DateofPayment";
$tdatainsurance_payments_report[".viewFields"][] = "PaymentVoucher";
$tdatainsurance_payments_report[".viewFields"][] = "EnteredBy";

$tdatainsurance_payments_report[".addFields"] = array();

$tdatainsurance_payments_report[".masterListFields"] = array();
$tdatainsurance_payments_report[".masterListFields"][] = "SysDate";
$tdatainsurance_payments_report[".masterListFields"][] = "Id";
$tdatainsurance_payments_report[".masterListFields"][] = "VehicleNo";
$tdatainsurance_payments_report[".masterListFields"][] = "Fleet";
$tdatainsurance_payments_report[".masterListFields"][] = "Type";
$tdatainsurance_payments_report[".masterListFields"][] = "Cost";
$tdatainsurance_payments_report[".masterListFields"][] = "Insurer";
$tdatainsurance_payments_report[".masterListFields"][] = "RenewalDueDate";
$tdatainsurance_payments_report[".masterListFields"][] = "Premium";
$tdatainsurance_payments_report[".masterListFields"][] = "DateofPayment";
$tdatainsurance_payments_report[".masterListFields"][] = "PaymentVoucher";
$tdatainsurance_payments_report[".masterListFields"][] = "EnteredBy";

$tdatainsurance_payments_report[".inlineAddFields"] = array();

$tdatainsurance_payments_report[".editFields"] = array();

$tdatainsurance_payments_report[".inlineEditFields"] = array();

$tdatainsurance_payments_report[".exportFields"] = array();
$tdatainsurance_payments_report[".exportFields"][] = "SysDate";
$tdatainsurance_payments_report[".exportFields"][] = "Id";
$tdatainsurance_payments_report[".exportFields"][] = "VehicleNo";
$tdatainsurance_payments_report[".exportFields"][] = "Fleet";
$tdatainsurance_payments_report[".exportFields"][] = "Type";
$tdatainsurance_payments_report[".exportFields"][] = "Insurer";
$tdatainsurance_payments_report[".exportFields"][] = "RenewalDueDate";
$tdatainsurance_payments_report[".exportFields"][] = "Premium";
$tdatainsurance_payments_report[".exportFields"][] = "DateofPayment";
$tdatainsurance_payments_report[".exportFields"][] = "PaymentVoucher";
$tdatainsurance_payments_report[".exportFields"][] = "EnteredBy";

$tdatainsurance_payments_report[".importFields"] = array();

$tdatainsurance_payments_report[".printFields"] = array();
$tdatainsurance_payments_report[".printFields"][] = "SysDate";
$tdatainsurance_payments_report[".printFields"][] = "Id";
$tdatainsurance_payments_report[".printFields"][] = "VehicleNo";
$tdatainsurance_payments_report[".printFields"][] = "Fleet";
$tdatainsurance_payments_report[".printFields"][] = "Type";
$tdatainsurance_payments_report[".printFields"][] = "Insurer";
$tdatainsurance_payments_report[".printFields"][] = "RenewalDueDate";
$tdatainsurance_payments_report[".printFields"][] = "Premium";
$tdatainsurance_payments_report[".printFields"][] = "DateofPayment";
$tdatainsurance_payments_report[".printFields"][] = "PaymentVoucher";
$tdatainsurance_payments_report[".printFields"][] = "EnteredBy";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments_report","Id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
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
	
	
	
	

	

	
	$tdatainsurance_payments_report["Id"] = $fdata;
//	SysDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SysDate";
	$fdata["GoodName"] = "SysDate";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments_report","SysDate"); 
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatainsurance_payments_report["SysDate"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments_report","Fleet"); 
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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

	

	
	$tdatainsurance_payments_report["Fleet"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments_report","Type"); 
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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

	

	
	$tdatainsurance_payments_report["Type"] = $fdata;
//	VehicleNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "VehicleNo";
	$fdata["GoodName"] = "VehicleNo";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments_report","VehicleNo"); 
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
	$edata["autoCompleteFields"][] = array('masterF'=>"RenewalDueDate", 'lookupF'=>"InsuranceDue");
	$edata["autoCompleteFields"][] = array('masterF'=>"Cost", 'lookupF'=>"Cost");
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings	

	

	
	$tdatainsurance_payments_report["VehicleNo"] = $fdata;
//	RenewalDueDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "RenewalDueDate";
	$fdata["GoodName"] = "RenewalDueDate";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments_report","RenewalDueDate"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "RenewalDueDate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RenewalDueDate";
	
		
		
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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

	

	
	$tdatainsurance_payments_report["RenewalDueDate"] = $fdata;
//	Premium
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Premium";
	$fdata["GoodName"] = "Premium";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments_report","Premium"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Premium"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Premium";
	
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatainsurance_payments_report["Premium"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments_report","Cost"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Cost"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cost";
	
		
		
				
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
	
	
	
	

	

	
	$tdatainsurance_payments_report["Cost"] = $fdata;
//	PaymentVoucher
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PaymentVoucher";
	$fdata["GoodName"] = "PaymentVoucher";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments_report","PaymentVoucher"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "PaymentVoucher"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PaymentVoucher";
	
		
		
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

	

	
	$tdatainsurance_payments_report["PaymentVoucher"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments_report","EnteredBy"); 
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

	

	
	$tdatainsurance_payments_report["EnteredBy"] = $fdata;
//	DateofPayment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DateofPayment";
	$fdata["GoodName"] = "DateofPayment";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments_report","DateofPayment"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DateofPayment"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DateofPayment";
	
		
		
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

	

	
	$tdatainsurance_payments_report["DateofPayment"] = $fdata;
//	Insurer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Insurer";
	$fdata["GoodName"] = "Insurer";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments_report","Insurer"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Insurer"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Insurer";
	
		
		
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

	

	
	$tdatainsurance_payments_report["Insurer"] = $fdata;

	
$tables_data["insurance-payments-report"]=&$tdatainsurance_payments_report;
$field_labels["insurance_payments_report"] = &$fieldLabelsinsurance_payments_report;
$fieldToolTips["insurance-payments-report"] = &$fieldToolTipsinsurance_payments_report;
$page_titles["insurance_payments_report"] = &$pageTitlesinsurance_payments_report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["insurance-payments-report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["insurance-payments-report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_insurance_payments_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  	`SysDate`,  	Fleet,  	`Type`,  	VehicleNo,  	RenewalDueDate,  	Premium,  	Cost,  	PaymentVoucher,  	EnteredBy,  	DateofPayment,  	Insurer";
$proto0["m_strFrom"] = "FROM `insurance-payments`";
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
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments-report"
));

$proto5["m_sql"] = "Id";
$proto5["m_srcTableName"] = "insurance-payments-report";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "SysDate",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments-report"
));

$proto7["m_sql"] = "`SysDate`";
$proto7["m_srcTableName"] = "insurance-payments-report";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments-report"
));

$proto9["m_sql"] = "Fleet";
$proto9["m_srcTableName"] = "insurance-payments-report";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments-report"
));

$proto11["m_sql"] = "`Type`";
$proto11["m_srcTableName"] = "insurance-payments-report";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "VehicleNo",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments-report"
));

$proto13["m_sql"] = "VehicleNo";
$proto13["m_srcTableName"] = "insurance-payments-report";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "RenewalDueDate",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments-report"
));

$proto15["m_sql"] = "RenewalDueDate";
$proto15["m_srcTableName"] = "insurance-payments-report";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Premium",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments-report"
));

$proto17["m_sql"] = "Premium";
$proto17["m_srcTableName"] = "insurance-payments-report";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments-report"
));

$proto19["m_sql"] = "Cost";
$proto19["m_srcTableName"] = "insurance-payments-report";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentVoucher",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments-report"
));

$proto21["m_sql"] = "PaymentVoucher";
$proto21["m_srcTableName"] = "insurance-payments-report";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments-report"
));

$proto23["m_sql"] = "EnteredBy";
$proto23["m_srcTableName"] = "insurance-payments-report";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "DateofPayment",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments-report"
));

$proto25["m_sql"] = "DateofPayment";
$proto25["m_srcTableName"] = "insurance-payments-report";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Insurer",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments-report"
));

$proto27["m_sql"] = "Insurer";
$proto27["m_srcTableName"] = "insurance-payments-report";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "insurance-payments";
$proto30["m_srcTableName"] = "insurance-payments-report";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "Id";
$proto30["m_columns"][] = "SysDate";
$proto30["m_columns"][] = "Fleet";
$proto30["m_columns"][] = "Type";
$proto30["m_columns"][] = "VehicleNo";
$proto30["m_columns"][] = "RenewalDueDate";
$proto30["m_columns"][] = "Premium";
$proto30["m_columns"][] = "Cost";
$proto30["m_columns"][] = "PaymentVoucher";
$proto30["m_columns"][] = "EnteredBy";
$proto30["m_columns"][] = "DateofPayment";
$proto30["m_columns"][] = "Insurer";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "`insurance-payments`";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "insurance-payments-report";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="insurance-payments-report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_insurance_payments_report = createSqlQuery_insurance_payments_report();


	
												
	
$tdatainsurance_payments_report[".sqlquery"] = $queryData_insurance_payments_report;

$tableEvents["insurance-payments-report"] = new eventsBase;
$tdatainsurance_payments_report[".hasEvents"] = false;

?>