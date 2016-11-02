<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamaintenenace_report = array();	
	$tdatamaintenenace_report[".truncateText"] = true;
	$tdatamaintenenace_report[".NumberOfChars"] = 80; 
	$tdatamaintenenace_report[".ShortName"] = "maintenenace_report";
	$tdatamaintenenace_report[".OwnerID"] = "";
	$tdatamaintenenace_report[".OriginalTable"] = "maintenenace";

//	field labels
$fieldLabelsmaintenenace_report = array();
$fieldToolTipsmaintenenace_report = array();
$pageTitlesmaintenenace_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmaintenenace_report["English"] = array();
	$fieldToolTipsmaintenenace_report["English"] = array();
	$pageTitlesmaintenenace_report["English"] = array();
	$fieldLabelsmaintenenace_report["English"]["Id"] = "Id";
	$fieldToolTipsmaintenenace_report["English"]["Id"] = "";
	$fieldLabelsmaintenenace_report["English"]["Fleet"] = "Fleet";
	$fieldToolTipsmaintenenace_report["English"]["Fleet"] = "";
	$fieldLabelsmaintenenace_report["English"]["Vehicle"] = "Vehicle";
	$fieldToolTipsmaintenenace_report["English"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_report["English"]["Type"] = "Ft.Type";
	$fieldToolTipsmaintenenace_report["English"]["Type"] = "";
	$fieldLabelsmaintenenace_report["English"]["Supplier"] = "Supplier";
	$fieldToolTipsmaintenenace_report["English"]["Supplier"] = "";
	$fieldLabelsmaintenenace_report["English"]["Cost"] = "Cost";
	$fieldToolTipsmaintenenace_report["English"]["Cost"] = "";
	$fieldLabelsmaintenenace_report["English"]["Remarks"] = "Remarks";
	$fieldToolTipsmaintenenace_report["English"]["Remarks"] = "";
	$fieldLabelsmaintenenace_report["English"]["RefNo"] = "PO No";
	$fieldToolTipsmaintenenace_report["English"]["RefNo"] = "";
	$fieldLabelsmaintenenace_report["English"]["SysDate"] = "Sys Date";
	$fieldToolTipsmaintenenace_report["English"]["SysDate"] = "";
	$fieldLabelsmaintenenace_report["English"]["Date"] = "Date";
	$fieldToolTipsmaintenenace_report["English"]["Date"] = "";
	$fieldLabelsmaintenenace_report["English"]["EnteredBy"] = "Entered By";
	$fieldToolTipsmaintenenace_report["English"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_report["English"]["Approval"] = "Edited By";
	$fieldToolTipsmaintenenace_report["English"]["Approval"] = "";
	$fieldLabelsmaintenenace_report["English"]["MeterReading"] = "Meter Reading";
	$fieldToolTipsmaintenenace_report["English"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_report["English"]["AccidentRef"] = "Accident Ref";
	$fieldToolTipsmaintenenace_report["English"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_report["English"]["PaymentVoucher"] = "Pay. Vou. No.";
	$fieldToolTipsmaintenenace_report["English"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_report["English"]["MaintType"] = "Maint. Type";
	$fieldToolTipsmaintenenace_report["English"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_report["English"]))
		$tdatamaintenenace_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmaintenenace_report[""] = array();
	$fieldToolTipsmaintenenace_report[""] = array();
	$pageTitlesmaintenenace_report[""] = array();
	$fieldLabelsmaintenenace_report[""]["Id"] = "Id";
	$fieldToolTipsmaintenenace_report[""]["Id"] = "";
	$fieldLabelsmaintenenace_report[""]["Fleet"] = "Fleet";
	$fieldToolTipsmaintenenace_report[""]["Fleet"] = "";
	$fieldLabelsmaintenenace_report[""]["Vehicle"] = "Vehicle";
	$fieldToolTipsmaintenenace_report[""]["Vehicle"] = "";
	$fieldLabelsmaintenenace_report[""]["Type"] = "Type";
	$fieldToolTipsmaintenenace_report[""]["Type"] = "";
	$fieldLabelsmaintenenace_report[""]["Supplier"] = "Supplier";
	$fieldToolTipsmaintenenace_report[""]["Supplier"] = "";
	$fieldLabelsmaintenenace_report[""]["Cost"] = "Cost";
	$fieldToolTipsmaintenenace_report[""]["Cost"] = "";
	$fieldLabelsmaintenenace_report[""]["Remarks"] = "Remarks";
	$fieldToolTipsmaintenenace_report[""]["Remarks"] = "";
	$fieldLabelsmaintenenace_report[""]["RefNo"] = "Ref No";
	$fieldToolTipsmaintenenace_report[""]["RefNo"] = "";
	$fieldLabelsmaintenenace_report[""]["SysDate"] = "Sys Date";
	$fieldToolTipsmaintenenace_report[""]["SysDate"] = "";
	$fieldLabelsmaintenenace_report[""]["Date"] = "Date";
	$fieldToolTipsmaintenenace_report[""]["Date"] = "";
	$fieldLabelsmaintenenace_report[""]["EnteredBy"] = "Entered By";
	$fieldToolTipsmaintenenace_report[""]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_report[""]["Approval"] = "Approval";
	$fieldToolTipsmaintenenace_report[""]["Approval"] = "";
	$fieldLabelsmaintenenace_report[""]["MeterReading"] = "Meter Reading";
	$fieldToolTipsmaintenenace_report[""]["MeterReading"] = "";
	$fieldLabelsmaintenenace_report[""]["AccidentRef"] = "Accident Ref";
	$fieldToolTipsmaintenenace_report[""]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_report[""]["PaymentVoucher"] = "Payment Voucher";
	$fieldToolTipsmaintenenace_report[""]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_report[""]["MaintType"] = "Maint Type";
	$fieldToolTipsmaintenenace_report[""]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_report[""]))
		$tdatamaintenenace_report[".isUseToolTips"] = true;
}
	
	
	$tdatamaintenenace_report[".NCSearch"] = true;



$tdatamaintenenace_report[".shortTableName"] = "maintenenace_report";
$tdatamaintenenace_report[".nSecOptions"] = 0;
$tdatamaintenenace_report[".recsPerRowList"] = 1;
$tdatamaintenenace_report[".recsPerRowPrint"] = 1;
$tdatamaintenenace_report[".mainTableOwnerID"] = "";
$tdatamaintenenace_report[".moveNext"] = 1;
$tdatamaintenenace_report[".entityType"] = 1;

$tdatamaintenenace_report[".strOriginalTableName"] = "maintenenace";




$tdatamaintenenace_report[".showAddInPopup"] = false;

$tdatamaintenenace_report[".showEditInPopup"] = false;

$tdatamaintenenace_report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamaintenenace_report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamaintenenace_report[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatamaintenenace_report[".listAjax"] = true;
else 
	$tdatamaintenenace_report[".listAjax"] = false;

	$tdatamaintenenace_report[".audit"] = false;

	$tdatamaintenenace_report[".locking"] = false;



$tdatamaintenenace_report[".list"] = true;

$tdatamaintenenace_report[".view"] = true;


$tdatamaintenenace_report[".exportTo"] = true;

$tdatamaintenenace_report[".printFriendly"] = true;


$tdatamaintenenace_report[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatamaintenenace_report[".searchSaving"] = false;
//

$tdatamaintenenace_report[".showSearchPanel"] = true;
		$tdatamaintenenace_report[".flexibleSearch"] = true;		

if (isMobile())
	$tdatamaintenenace_report[".isUseAjaxSuggest"] = false;
else 
	$tdatamaintenenace_report[".isUseAjaxSuggest"] = true;

$tdatamaintenenace_report[".rowHighlite"] = true;



$tdatamaintenenace_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamaintenenace_report[".isUseTimeForSearch"] = false;





$tdatamaintenenace_report[".allSearchFields"] = array();
$tdatamaintenenace_report[".filterFields"] = array();
$tdatamaintenenace_report[".requiredSearchFields"] = array();

$tdatamaintenenace_report[".allSearchFields"][] = "PaymentVoucher";
	$tdatamaintenenace_report[".allSearchFields"][] = "MaintType";
	$tdatamaintenenace_report[".allSearchFields"][] = "Vehicle";
	$tdatamaintenenace_report[".allSearchFields"][] = "Fleet";
	$tdatamaintenenace_report[".allSearchFields"][] = "Type";
	$tdatamaintenenace_report[".allSearchFields"][] = "Date";
	$tdatamaintenenace_report[".allSearchFields"][] = "MeterReading";
	$tdatamaintenenace_report[".allSearchFields"][] = "RefNo";
	$tdatamaintenenace_report[".allSearchFields"][] = "Supplier";
	$tdatamaintenenace_report[".allSearchFields"][] = "Cost";
	$tdatamaintenenace_report[".allSearchFields"][] = "AccidentRef";
	$tdatamaintenenace_report[".allSearchFields"][] = "Remarks";
	$tdatamaintenenace_report[".allSearchFields"][] = "EnteredBy";
	$tdatamaintenenace_report[".allSearchFields"][] = "Approval";
	

$tdatamaintenenace_report[".googleLikeFields"] = array();
$tdatamaintenenace_report[".googleLikeFields"][] = "Id";
$tdatamaintenenace_report[".googleLikeFields"][] = "Fleet";
$tdatamaintenenace_report[".googleLikeFields"][] = "Vehicle";
$tdatamaintenenace_report[".googleLikeFields"][] = "Type";
$tdatamaintenenace_report[".googleLikeFields"][] = "Supplier";
$tdatamaintenenace_report[".googleLikeFields"][] = "Cost";
$tdatamaintenenace_report[".googleLikeFields"][] = "Remarks";
$tdatamaintenenace_report[".googleLikeFields"][] = "RefNo";
$tdatamaintenenace_report[".googleLikeFields"][] = "SysDate";
$tdatamaintenenace_report[".googleLikeFields"][] = "Date";
$tdatamaintenenace_report[".googleLikeFields"][] = "EnteredBy";
$tdatamaintenenace_report[".googleLikeFields"][] = "Approval";
$tdatamaintenenace_report[".googleLikeFields"][] = "MeterReading";
$tdatamaintenenace_report[".googleLikeFields"][] = "AccidentRef";
$tdatamaintenenace_report[".googleLikeFields"][] = "PaymentVoucher";
$tdatamaintenenace_report[".googleLikeFields"][] = "MaintType";


$tdatamaintenenace_report[".advSearchFields"] = array();
$tdatamaintenenace_report[".advSearchFields"][] = "PaymentVoucher";
$tdatamaintenenace_report[".advSearchFields"][] = "MaintType";
$tdatamaintenenace_report[".advSearchFields"][] = "Vehicle";
$tdatamaintenenace_report[".advSearchFields"][] = "Fleet";
$tdatamaintenenace_report[".advSearchFields"][] = "Type";
$tdatamaintenenace_report[".advSearchFields"][] = "Date";
$tdatamaintenenace_report[".advSearchFields"][] = "MeterReading";
$tdatamaintenenace_report[".advSearchFields"][] = "RefNo";
$tdatamaintenenace_report[".advSearchFields"][] = "Supplier";
$tdatamaintenenace_report[".advSearchFields"][] = "Cost";
$tdatamaintenenace_report[".advSearchFields"][] = "AccidentRef";
$tdatamaintenenace_report[".advSearchFields"][] = "Remarks";
$tdatamaintenenace_report[".advSearchFields"][] = "EnteredBy";
$tdatamaintenenace_report[".advSearchFields"][] = "Approval";

$tdatamaintenenace_report[".tableType"] = "list";

$tdatamaintenenace_report[".printerPageOrientation"] = 0;
$tdatamaintenenace_report[".nPrinterPageScale"] = 100;

$tdatamaintenenace_report[".nPrinterSplitRecords"] = 40;

$tdatamaintenenace_report[".nPrinterPDFSplitRecords"] = 40;



$tdatamaintenenace_report[".geocodingEnabled"] = false;




	





// view page pdf
$tdatamaintenenace_report[".isViewPagePDF"] = true;
$tdatamaintenenace_report[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatamaintenenace_report[".isPrinterPagePDF"] = true;
$tdatamaintenenace_report[".nPrinterPagePDFScale"] = 100;

$tdatamaintenenace_report[".totalsFields"] = array();
$tdatamaintenenace_report[".totalsFields"][] = array(
	"fName" => "Cost", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatamaintenenace_report[".pageSize"] = 20;

$tdatamaintenenace_report[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamaintenenace_report[".strOrderBy"] = $tstrOrderBy;

$tdatamaintenenace_report[".orderindexes"] = array();

$tdatamaintenenace_report[".sqlHead"] = "SELECT Id,  	Fleet,  	Vehicle,  	`Type`,  	Supplier,  	Cost,  	Remarks,  	RefNo,  	`SysDate`,  	`Date`,  	EnteredBy,  	Approval,  	MeterReading,  	AccidentRef,  	PaymentVoucher,  	MaintType";
$tdatamaintenenace_report[".sqlFrom"] = "FROM maintenenace";
$tdatamaintenenace_report[".sqlWhereExpr"] = "";
$tdatamaintenenace_report[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatamaintenenace_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamaintenenace_report[".arrGroupsPerPage"] = $arrGPP;

$tdatamaintenenace_report[".highlightSearchResults"] = true;

$tableKeysmaintenenace_report = array();
$tableKeysmaintenenace_report[] = "Id";
$tdatamaintenenace_report[".Keys"] = $tableKeysmaintenenace_report;

$tdatamaintenenace_report[".listFields"] = array();
$tdatamaintenenace_report[".listFields"][] = "Date";
$tdatamaintenenace_report[".listFields"][] = "MaintType";
$tdatamaintenenace_report[".listFields"][] = "Vehicle";
$tdatamaintenenace_report[".listFields"][] = "Fleet";
$tdatamaintenenace_report[".listFields"][] = "Type";
$tdatamaintenenace_report[".listFields"][] = "MeterReading";
$tdatamaintenenace_report[".listFields"][] = "RefNo";
$tdatamaintenenace_report[".listFields"][] = "Supplier";
$tdatamaintenenace_report[".listFields"][] = "Cost";
$tdatamaintenenace_report[".listFields"][] = "PaymentVoucher";
$tdatamaintenenace_report[".listFields"][] = "AccidentRef";
$tdatamaintenenace_report[".listFields"][] = "Remarks";
$tdatamaintenenace_report[".listFields"][] = "EnteredBy";

$tdatamaintenenace_report[".hideMobileList"] = array();


$tdatamaintenenace_report[".viewFields"] = array();
$tdatamaintenenace_report[".viewFields"][] = "PaymentVoucher";
$tdatamaintenenace_report[".viewFields"][] = "MaintType";
$tdatamaintenenace_report[".viewFields"][] = "Vehicle";
$tdatamaintenenace_report[".viewFields"][] = "Id";
$tdatamaintenenace_report[".viewFields"][] = "Fleet";
$tdatamaintenenace_report[".viewFields"][] = "Type";
$tdatamaintenenace_report[".viewFields"][] = "Date";
$tdatamaintenenace_report[".viewFields"][] = "MeterReading";
$tdatamaintenenace_report[".viewFields"][] = "RefNo";
$tdatamaintenenace_report[".viewFields"][] = "Supplier";
$tdatamaintenenace_report[".viewFields"][] = "Cost";
$tdatamaintenenace_report[".viewFields"][] = "AccidentRef";
$tdatamaintenenace_report[".viewFields"][] = "Remarks";
$tdatamaintenenace_report[".viewFields"][] = "EnteredBy";
$tdatamaintenenace_report[".viewFields"][] = "SysDate";
$tdatamaintenenace_report[".viewFields"][] = "Approval";

$tdatamaintenenace_report[".addFields"] = array();

$tdatamaintenenace_report[".masterListFields"] = array();
$tdatamaintenenace_report[".masterListFields"][] = "PaymentVoucher";
$tdatamaintenenace_report[".masterListFields"][] = "MaintType";
$tdatamaintenenace_report[".masterListFields"][] = "Vehicle";
$tdatamaintenenace_report[".masterListFields"][] = "Id";
$tdatamaintenenace_report[".masterListFields"][] = "Fleet";
$tdatamaintenenace_report[".masterListFields"][] = "Type";
$tdatamaintenenace_report[".masterListFields"][] = "Date";
$tdatamaintenenace_report[".masterListFields"][] = "MeterReading";
$tdatamaintenenace_report[".masterListFields"][] = "RefNo";
$tdatamaintenenace_report[".masterListFields"][] = "Supplier";
$tdatamaintenenace_report[".masterListFields"][] = "Cost";
$tdatamaintenenace_report[".masterListFields"][] = "AccidentRef";
$tdatamaintenenace_report[".masterListFields"][] = "Remarks";
$tdatamaintenenace_report[".masterListFields"][] = "EnteredBy";
$tdatamaintenenace_report[".masterListFields"][] = "SysDate";
$tdatamaintenenace_report[".masterListFields"][] = "Approval";

$tdatamaintenenace_report[".inlineAddFields"] = array();

$tdatamaintenenace_report[".editFields"] = array();

$tdatamaintenenace_report[".inlineEditFields"] = array();

$tdatamaintenenace_report[".exportFields"] = array();
$tdatamaintenenace_report[".exportFields"][] = "PaymentVoucher";
$tdatamaintenenace_report[".exportFields"][] = "MaintType";
$tdatamaintenenace_report[".exportFields"][] = "Vehicle";
$tdatamaintenenace_report[".exportFields"][] = "Id";
$tdatamaintenenace_report[".exportFields"][] = "Fleet";
$tdatamaintenenace_report[".exportFields"][] = "Type";
$tdatamaintenenace_report[".exportFields"][] = "Date";
$tdatamaintenenace_report[".exportFields"][] = "MeterReading";
$tdatamaintenenace_report[".exportFields"][] = "RefNo";
$tdatamaintenenace_report[".exportFields"][] = "Supplier";
$tdatamaintenenace_report[".exportFields"][] = "Cost";
$tdatamaintenenace_report[".exportFields"][] = "AccidentRef";
$tdatamaintenenace_report[".exportFields"][] = "Remarks";
$tdatamaintenenace_report[".exportFields"][] = "EnteredBy";
$tdatamaintenenace_report[".exportFields"][] = "SysDate";
$tdatamaintenenace_report[".exportFields"][] = "Approval";

$tdatamaintenenace_report[".importFields"] = array();
$tdatamaintenenace_report[".importFields"][] = "Id";
$tdatamaintenenace_report[".importFields"][] = "Fleet";
$tdatamaintenenace_report[".importFields"][] = "Vehicle";
$tdatamaintenenace_report[".importFields"][] = "Type";
$tdatamaintenenace_report[".importFields"][] = "Supplier";
$tdatamaintenenace_report[".importFields"][] = "Cost";
$tdatamaintenenace_report[".importFields"][] = "Remarks";
$tdatamaintenenace_report[".importFields"][] = "RefNo";
$tdatamaintenenace_report[".importFields"][] = "SysDate";
$tdatamaintenenace_report[".importFields"][] = "Date";
$tdatamaintenenace_report[".importFields"][] = "EnteredBy";
$tdatamaintenenace_report[".importFields"][] = "Approval";
$tdatamaintenenace_report[".importFields"][] = "MeterReading";
$tdatamaintenenace_report[".importFields"][] = "AccidentRef";
$tdatamaintenenace_report[".importFields"][] = "PaymentVoucher";
$tdatamaintenenace_report[".importFields"][] = "MaintType";

$tdatamaintenenace_report[".printFields"] = array();
$tdatamaintenenace_report[".printFields"][] = "PaymentVoucher";
$tdatamaintenenace_report[".printFields"][] = "MaintType";
$tdatamaintenenace_report[".printFields"][] = "Vehicle";
$tdatamaintenenace_report[".printFields"][] = "Id";
$tdatamaintenenace_report[".printFields"][] = "Fleet";
$tdatamaintenenace_report[".printFields"][] = "Type";
$tdatamaintenenace_report[".printFields"][] = "Date";
$tdatamaintenenace_report[".printFields"][] = "MeterReading";
$tdatamaintenenace_report[".printFields"][] = "RefNo";
$tdatamaintenenace_report[".printFields"][] = "Supplier";
$tdatamaintenenace_report[".printFields"][] = "Cost";
$tdatamaintenenace_report[".printFields"][] = "AccidentRef";
$tdatamaintenenace_report[".printFields"][] = "Remarks";
$tdatamaintenenace_report[".printFields"][] = "EnteredBy";
$tdatamaintenenace_report[".printFields"][] = "SysDate";
$tdatamaintenenace_report[".printFields"][] = "Approval";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_report","Id"); 
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
	
	
	
	

	

	
	$tdatamaintenenace_report["Id"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_report","Fleet"); 
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatamaintenenace_report["Fleet"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_report","Vehicle"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatamaintenenace_report["Vehicle"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_report","Type"); 
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatamaintenenace_report["Type"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_report","Supplier"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Supplier"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Supplier";
	
		
		
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
	$edata["LookupTable"] = "suppliermaster";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "SupplierName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "SupplierName";
	
		
	$edata["LookupOrderBy"] = "SupplierName";
	
		
			
		
				
	
	
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatamaintenenace_report["Supplier"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_report","Cost"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Cost"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cost";
	
		
		
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

	

	
	$tdatamaintenenace_report["Cost"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_report","Remarks"); 
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

	

	
	$tdatamaintenenace_report["Remarks"] = $fdata;
//	RefNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "RefNo";
	$fdata["GoodName"] = "RefNo";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_report","RefNo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "RefNo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RefNo";
	
		
		
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

	

	
	$tdatamaintenenace_report["RefNo"] = $fdata;
//	SysDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SysDate";
	$fdata["GoodName"] = "SysDate";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_report","SysDate"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
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
	
	
	
	

	

	
	$tdatamaintenenace_report["SysDate"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_report","Date"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatamaintenenace_report["Date"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_report","EnteredBy"); 
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

	

	
	$tdatamaintenenace_report["EnteredBy"] = $fdata;
//	Approval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Approval";
	$fdata["GoodName"] = "Approval";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_report","Approval"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Approval"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Approval";
	
		
		
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
		
		$edata["autoUpdatable"] = true;
	
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatamaintenenace_report["Approval"] = $fdata;
//	MeterReading
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "MeterReading";
	$fdata["GoodName"] = "MeterReading";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_report","MeterReading"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MeterReading"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MeterReading";
	
		
		
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

	

	
	$tdatamaintenenace_report["MeterReading"] = $fdata;
//	AccidentRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "AccidentRef";
	$fdata["GoodName"] = "AccidentRef";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_report","AccidentRef"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "AccidentRef"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccidentRef";
	
		
		
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

	

	
	$tdatamaintenenace_report["AccidentRef"] = $fdata;
//	PaymentVoucher
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "PaymentVoucher";
	$fdata["GoodName"] = "PaymentVoucher";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_report","PaymentVoucher"); 
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

	

	
	$tdatamaintenenace_report["PaymentVoucher"] = $fdata;
//	MaintType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "MaintType";
	$fdata["GoodName"] = "MaintType";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_report","MaintType"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatamaintenenace_report["MaintType"] = $fdata;

	
$tables_data["maintenenace-report"]=&$tdatamaintenenace_report;
$field_labels["maintenenace_report"] = &$fieldLabelsmaintenenace_report;
$fieldToolTips["maintenenace-report"] = &$fieldToolTipsmaintenenace_report;
$page_titles["maintenenace_report"] = &$pageTitlesmaintenenace_report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["maintenenace-report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["maintenenace-report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_maintenenace_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  	Fleet,  	Vehicle,  	`Type`,  	Supplier,  	Cost,  	Remarks,  	RefNo,  	`SysDate`,  	`Date`,  	EnteredBy,  	Approval,  	MeterReading,  	AccidentRef,  	PaymentVoucher,  	MaintType";
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
	"m_strName" => "Id",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-report"
));

$proto5["m_sql"] = "Id";
$proto5["m_srcTableName"] = "maintenenace-report";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-report"
));

$proto7["m_sql"] = "Fleet";
$proto7["m_srcTableName"] = "maintenenace-report";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-report"
));

$proto9["m_sql"] = "Vehicle";
$proto9["m_srcTableName"] = "maintenenace-report";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-report"
));

$proto11["m_sql"] = "`Type`";
$proto11["m_srcTableName"] = "maintenenace-report";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-report"
));

$proto13["m_sql"] = "Supplier";
$proto13["m_srcTableName"] = "maintenenace-report";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-report"
));

$proto15["m_sql"] = "Cost";
$proto15["m_srcTableName"] = "maintenenace-report";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-report"
));

$proto17["m_sql"] = "Remarks";
$proto17["m_srcTableName"] = "maintenenace-report";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNo",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-report"
));

$proto19["m_sql"] = "RefNo";
$proto19["m_srcTableName"] = "maintenenace-report";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "SysDate",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-report"
));

$proto21["m_sql"] = "`SysDate`";
$proto21["m_srcTableName"] = "maintenenace-report";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-report"
));

$proto23["m_sql"] = "`Date`";
$proto23["m_srcTableName"] = "maintenenace-report";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-report"
));

$proto25["m_sql"] = "EnteredBy";
$proto25["m_srcTableName"] = "maintenenace-report";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Approval",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-report"
));

$proto27["m_sql"] = "Approval";
$proto27["m_srcTableName"] = "maintenenace-report";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "MeterReading",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-report"
));

$proto29["m_sql"] = "MeterReading";
$proto29["m_srcTableName"] = "maintenenace-report";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "AccidentRef",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-report"
));

$proto31["m_sql"] = "AccidentRef";
$proto31["m_srcTableName"] = "maintenenace-report";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentVoucher",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-report"
));

$proto33["m_sql"] = "PaymentVoucher";
$proto33["m_srcTableName"] = "maintenenace-report";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "MaintType",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-report"
));

$proto35["m_sql"] = "MaintType";
$proto35["m_srcTableName"] = "maintenenace-report";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "maintenenace";
$proto38["m_srcTableName"] = "maintenenace-report";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "Id";
$proto38["m_columns"][] = "Fleet";
$proto38["m_columns"][] = "Vehicle";
$proto38["m_columns"][] = "Type";
$proto38["m_columns"][] = "Supplier";
$proto38["m_columns"][] = "Cost";
$proto38["m_columns"][] = "Remarks";
$proto38["m_columns"][] = "RefNo";
$proto38["m_columns"][] = "SysDate";
$proto38["m_columns"][] = "Date";
$proto38["m_columns"][] = "EnteredBy";
$proto38["m_columns"][] = "Approval";
$proto38["m_columns"][] = "MeterReading";
$proto38["m_columns"][] = "AccidentRef";
$proto38["m_columns"][] = "PaymentVoucher";
$proto38["m_columns"][] = "MaintType";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "maintenenace";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "maintenenace-report";
$proto39=array();
$proto39["m_sql"] = "";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="maintenenace-report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_maintenenace_report = createSqlQuery_maintenenace_report();


	
																
	
$tdatamaintenenace_report[".sqlquery"] = $queryData_maintenenace_report;

$tableEvents["maintenenace-report"] = new eventsBase;
$tdatamaintenenace_report[".hasEvents"] = false;

?>