<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamaintenenace_other_maintain = array();	
	$tdatamaintenenace_other_maintain[".truncateText"] = true;
	$tdatamaintenenace_other_maintain[".NumberOfChars"] = 80; 
	$tdatamaintenenace_other_maintain[".ShortName"] = "maintenenace_other_maintain";
	$tdatamaintenenace_other_maintain[".OwnerID"] = "";
	$tdatamaintenenace_other_maintain[".OriginalTable"] = "maintenenace";

//	field labels
$fieldLabelsmaintenenace_other_maintain = array();
$fieldToolTipsmaintenenace_other_maintain = array();
$pageTitlesmaintenenace_other_maintain = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmaintenenace_other_maintain["English"] = array();
	$fieldToolTipsmaintenenace_other_maintain["English"] = array();
	$pageTitlesmaintenenace_other_maintain["English"] = array();
	$fieldLabelsmaintenenace_other_maintain["English"]["Id"] = "Id";
	$fieldToolTipsmaintenenace_other_maintain["English"]["Id"] = "";
	$fieldLabelsmaintenenace_other_maintain["English"]["Fleet"] = "Fleet";
	$fieldToolTipsmaintenenace_other_maintain["English"]["Fleet"] = "";
	$fieldLabelsmaintenenace_other_maintain["English"]["Vehicle"] = "Vehicle";
	$fieldToolTipsmaintenenace_other_maintain["English"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_other_maintain["English"]["Type"] = "Type";
	$fieldToolTipsmaintenenace_other_maintain["English"]["Type"] = "";
	$fieldLabelsmaintenenace_other_maintain["English"]["Supplier"] = "Supplier";
	$fieldToolTipsmaintenenace_other_maintain["English"]["Supplier"] = "";
	$fieldLabelsmaintenenace_other_maintain["English"]["Cost"] = "Cost";
	$fieldToolTipsmaintenenace_other_maintain["English"]["Cost"] = "Cost without VAT";
	$fieldLabelsmaintenenace_other_maintain["English"]["Remarks"] = "Remarks";
	$fieldToolTipsmaintenenace_other_maintain["English"]["Remarks"] = "";
	$fieldLabelsmaintenenace_other_maintain["English"]["RefNo"] = "PO No";
	$fieldToolTipsmaintenenace_other_maintain["English"]["RefNo"] = "";
	$fieldLabelsmaintenenace_other_maintain["English"]["SysDate"] = "System Date";
	$fieldToolTipsmaintenenace_other_maintain["English"]["SysDate"] = "";
	$fieldLabelsmaintenenace_other_maintain["English"]["Date"] = "Date";
	$fieldToolTipsmaintenenace_other_maintain["English"]["Date"] = "";
	$fieldLabelsmaintenenace_other_maintain["English"]["EnteredBy"] = "Entered By";
	$fieldToolTipsmaintenenace_other_maintain["English"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_other_maintain["English"]["Approval"] = "Edited By";
	$fieldToolTipsmaintenenace_other_maintain["English"]["Approval"] = "";
	$fieldLabelsmaintenenace_other_maintain["English"]["MeterReading"] = "Meter Reading";
	$fieldToolTipsmaintenenace_other_maintain["English"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_other_maintain["English"]["AccidentRef"] = "Accident Ref";
	$fieldToolTipsmaintenenace_other_maintain["English"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_other_maintain["English"]["PaymentVoucher"] = "Pay. Vou. No.";
	$fieldToolTipsmaintenenace_other_maintain["English"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_other_maintain["English"]["MaintType"] = "Maint Type";
	$fieldToolTipsmaintenenace_other_maintain["English"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_other_maintain["English"]))
		$tdatamaintenenace_other_maintain[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmaintenenace_other_maintain[""] = array();
	$fieldToolTipsmaintenenace_other_maintain[""] = array();
	$pageTitlesmaintenenace_other_maintain[""] = array();
	$fieldLabelsmaintenenace_other_maintain[""]["Id"] = "Id";
	$fieldToolTipsmaintenenace_other_maintain[""]["Id"] = "";
	$fieldLabelsmaintenenace_other_maintain[""]["Fleet"] = "Fleet";
	$fieldToolTipsmaintenenace_other_maintain[""]["Fleet"] = "";
	$fieldLabelsmaintenenace_other_maintain[""]["Vehicle"] = "Vehicle";
	$fieldToolTipsmaintenenace_other_maintain[""]["Vehicle"] = "";
	$fieldLabelsmaintenenace_other_maintain[""]["Type"] = "Type";
	$fieldToolTipsmaintenenace_other_maintain[""]["Type"] = "";
	$fieldLabelsmaintenenace_other_maintain[""]["Supplier"] = "Supplier";
	$fieldToolTipsmaintenenace_other_maintain[""]["Supplier"] = "";
	$fieldLabelsmaintenenace_other_maintain[""]["Cost"] = "Cost";
	$fieldToolTipsmaintenenace_other_maintain[""]["Cost"] = "";
	$fieldLabelsmaintenenace_other_maintain[""]["Remarks"] = "Remarks";
	$fieldToolTipsmaintenenace_other_maintain[""]["Remarks"] = "";
	$fieldLabelsmaintenenace_other_maintain[""]["RefNo"] = "Ref No";
	$fieldToolTipsmaintenenace_other_maintain[""]["RefNo"] = "";
	$fieldLabelsmaintenenace_other_maintain[""]["SysDate"] = "Sys Date";
	$fieldToolTipsmaintenenace_other_maintain[""]["SysDate"] = "";
	$fieldLabelsmaintenenace_other_maintain[""]["Date"] = "Date";
	$fieldToolTipsmaintenenace_other_maintain[""]["Date"] = "";
	$fieldLabelsmaintenenace_other_maintain[""]["EnteredBy"] = "Entered By";
	$fieldToolTipsmaintenenace_other_maintain[""]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_other_maintain[""]["Approval"] = "Approval";
	$fieldToolTipsmaintenenace_other_maintain[""]["Approval"] = "";
	$fieldLabelsmaintenenace_other_maintain[""]["MeterReading"] = "Meter Reading";
	$fieldToolTipsmaintenenace_other_maintain[""]["MeterReading"] = "";
	$fieldLabelsmaintenenace_other_maintain[""]["AccidentRef"] = "Accident Ref";
	$fieldToolTipsmaintenenace_other_maintain[""]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_other_maintain[""]["PaymentVoucher"] = "Payment Voucher";
	$fieldToolTipsmaintenenace_other_maintain[""]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_other_maintain[""]["MaintType"] = "Maint Type";
	$fieldToolTipsmaintenenace_other_maintain[""]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_other_maintain[""]))
		$tdatamaintenenace_other_maintain[".isUseToolTips"] = true;
}
	
	
	$tdatamaintenenace_other_maintain[".NCSearch"] = true;



$tdatamaintenenace_other_maintain[".shortTableName"] = "maintenenace_other_maintain";
$tdatamaintenenace_other_maintain[".nSecOptions"] = 0;
$tdatamaintenenace_other_maintain[".recsPerRowList"] = 1;
$tdatamaintenenace_other_maintain[".recsPerRowPrint"] = 1;
$tdatamaintenenace_other_maintain[".mainTableOwnerID"] = "";
$tdatamaintenenace_other_maintain[".moveNext"] = 1;
$tdatamaintenenace_other_maintain[".entityType"] = 1;

$tdatamaintenenace_other_maintain[".strOriginalTableName"] = "maintenenace";




$tdatamaintenenace_other_maintain[".showAddInPopup"] = false;

$tdatamaintenenace_other_maintain[".showEditInPopup"] = false;

$tdatamaintenenace_other_maintain[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamaintenenace_other_maintain[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamaintenenace_other_maintain[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatamaintenenace_other_maintain[".listAjax"] = true;
else 
	$tdatamaintenenace_other_maintain[".listAjax"] = false;

	$tdatamaintenenace_other_maintain[".audit"] = false;

	$tdatamaintenenace_other_maintain[".locking"] = false;

$tdatamaintenenace_other_maintain[".edit"] = true;
$tdatamaintenenace_other_maintain[".afterEditAction"] = 1;
$tdatamaintenenace_other_maintain[".closePopupAfterEdit"] = 1;
$tdatamaintenenace_other_maintain[".afterEditActionDetTable"] = "";

$tdatamaintenenace_other_maintain[".add"] = true;
$tdatamaintenenace_other_maintain[".afterAddAction"] = 1;
$tdatamaintenenace_other_maintain[".closePopupAfterAdd"] = 1;
$tdatamaintenenace_other_maintain[".afterAddActionDetTable"] = "";

$tdatamaintenenace_other_maintain[".list"] = true;

$tdatamaintenenace_other_maintain[".view"] = true;

$tdatamaintenenace_other_maintain[".import"] = true;

$tdatamaintenenace_other_maintain[".exportTo"] = true;

$tdatamaintenenace_other_maintain[".printFriendly"] = true;

$tdatamaintenenace_other_maintain[".delete"] = true;

$tdatamaintenenace_other_maintain[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatamaintenenace_other_maintain[".searchSaving"] = false;
//

$tdatamaintenenace_other_maintain[".showSearchPanel"] = true;
		$tdatamaintenenace_other_maintain[".flexibleSearch"] = true;		

if (isMobile())
	$tdatamaintenenace_other_maintain[".isUseAjaxSuggest"] = false;
else 
	$tdatamaintenenace_other_maintain[".isUseAjaxSuggest"] = true;

$tdatamaintenenace_other_maintain[".rowHighlite"] = true;



$tdatamaintenenace_other_maintain[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamaintenenace_other_maintain[".isUseTimeForSearch"] = false;





$tdatamaintenenace_other_maintain[".allSearchFields"] = array();
$tdatamaintenenace_other_maintain[".filterFields"] = array();
$tdatamaintenenace_other_maintain[".requiredSearchFields"] = array();

$tdatamaintenenace_other_maintain[".allSearchFields"][] = "Date";
	$tdatamaintenenace_other_maintain[".allSearchFields"][] = "MaintType";
	$tdatamaintenenace_other_maintain[".allSearchFields"][] = "Vehicle";
	$tdatamaintenenace_other_maintain[".allSearchFields"][] = "Fleet";
	$tdatamaintenenace_other_maintain[".allSearchFields"][] = "Type";
	$tdatamaintenenace_other_maintain[".allSearchFields"][] = "RefNo";
	$tdatamaintenenace_other_maintain[".allSearchFields"][] = "Supplier";
	$tdatamaintenenace_other_maintain[".allSearchFields"][] = "Cost";
	$tdatamaintenenace_other_maintain[".allSearchFields"][] = "PaymentVoucher";
	$tdatamaintenenace_other_maintain[".allSearchFields"][] = "Remarks";
	$tdatamaintenenace_other_maintain[".allSearchFields"][] = "EnteredBy";
	$tdatamaintenenace_other_maintain[".allSearchFields"][] = "Approval";
	$tdatamaintenenace_other_maintain[".allSearchFields"][] = "SysDate";
	

$tdatamaintenenace_other_maintain[".googleLikeFields"] = array();
$tdatamaintenenace_other_maintain[".googleLikeFields"][] = "Id";
$tdatamaintenenace_other_maintain[".googleLikeFields"][] = "Fleet";
$tdatamaintenenace_other_maintain[".googleLikeFields"][] = "Vehicle";
$tdatamaintenenace_other_maintain[".googleLikeFields"][] = "Type";
$tdatamaintenenace_other_maintain[".googleLikeFields"][] = "Supplier";
$tdatamaintenenace_other_maintain[".googleLikeFields"][] = "Cost";
$tdatamaintenenace_other_maintain[".googleLikeFields"][] = "Remarks";
$tdatamaintenenace_other_maintain[".googleLikeFields"][] = "RefNo";
$tdatamaintenenace_other_maintain[".googleLikeFields"][] = "SysDate";
$tdatamaintenenace_other_maintain[".googleLikeFields"][] = "Date";
$tdatamaintenenace_other_maintain[".googleLikeFields"][] = "EnteredBy";
$tdatamaintenenace_other_maintain[".googleLikeFields"][] = "Approval";
$tdatamaintenenace_other_maintain[".googleLikeFields"][] = "MeterReading";
$tdatamaintenenace_other_maintain[".googleLikeFields"][] = "AccidentRef";
$tdatamaintenenace_other_maintain[".googleLikeFields"][] = "PaymentVoucher";
$tdatamaintenenace_other_maintain[".googleLikeFields"][] = "MaintType";


$tdatamaintenenace_other_maintain[".advSearchFields"] = array();
$tdatamaintenenace_other_maintain[".advSearchFields"][] = "Date";
$tdatamaintenenace_other_maintain[".advSearchFields"][] = "MaintType";
$tdatamaintenenace_other_maintain[".advSearchFields"][] = "Vehicle";
$tdatamaintenenace_other_maintain[".advSearchFields"][] = "Fleet";
$tdatamaintenenace_other_maintain[".advSearchFields"][] = "Type";
$tdatamaintenenace_other_maintain[".advSearchFields"][] = "RefNo";
$tdatamaintenenace_other_maintain[".advSearchFields"][] = "Supplier";
$tdatamaintenenace_other_maintain[".advSearchFields"][] = "Cost";
$tdatamaintenenace_other_maintain[".advSearchFields"][] = "PaymentVoucher";
$tdatamaintenenace_other_maintain[".advSearchFields"][] = "Remarks";
$tdatamaintenenace_other_maintain[".advSearchFields"][] = "EnteredBy";
$tdatamaintenenace_other_maintain[".advSearchFields"][] = "Approval";
$tdatamaintenenace_other_maintain[".advSearchFields"][] = "SysDate";

$tdatamaintenenace_other_maintain[".tableType"] = "list";

$tdatamaintenenace_other_maintain[".printerPageOrientation"] = 0;
$tdatamaintenenace_other_maintain[".nPrinterPageScale"] = 100;

$tdatamaintenenace_other_maintain[".nPrinterSplitRecords"] = 40;

$tdatamaintenenace_other_maintain[".nPrinterPDFSplitRecords"] = 40;



$tdatamaintenenace_other_maintain[".geocodingEnabled"] = false;




	





// view page pdf
$tdatamaintenenace_other_maintain[".isViewPagePDF"] = true;
$tdatamaintenenace_other_maintain[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatamaintenenace_other_maintain[".isPrinterPagePDF"] = true;
$tdatamaintenenace_other_maintain[".nPrinterPagePDFScale"] = 100;

$tdatamaintenenace_other_maintain[".totalsFields"] = array();
$tdatamaintenenace_other_maintain[".totalsFields"][] = array(
	"fName" => "Cost", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatamaintenenace_other_maintain[".pageSize"] = 20;

$tdatamaintenenace_other_maintain[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamaintenenace_other_maintain[".strOrderBy"] = $tstrOrderBy;

$tdatamaintenenace_other_maintain[".orderindexes"] = array();

$tdatamaintenenace_other_maintain[".sqlHead"] = "SELECT Id,  Fleet,  Vehicle,  `Type`,  Supplier,  Cost,  Remarks,  RefNo,  `SysDate`,  `Date`,  EnteredBy,  Approval,  MeterReading,  AccidentRef,  PaymentVoucher,  MaintType";
$tdatamaintenenace_other_maintain[".sqlFrom"] = "FROM maintenenace";
$tdatamaintenenace_other_maintain[".sqlWhereExpr"] = "(MaintType =\"General Maintenance\")";
$tdatamaintenenace_other_maintain[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatamaintenenace_other_maintain[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamaintenenace_other_maintain[".arrGroupsPerPage"] = $arrGPP;

$tdatamaintenenace_other_maintain[".highlightSearchResults"] = true;

$tableKeysmaintenenace_other_maintain = array();
$tableKeysmaintenenace_other_maintain[] = "Id";
$tdatamaintenenace_other_maintain[".Keys"] = $tableKeysmaintenenace_other_maintain;

$tdatamaintenenace_other_maintain[".listFields"] = array();
$tdatamaintenenace_other_maintain[".listFields"][] = "Date";
$tdatamaintenenace_other_maintain[".listFields"][] = "MaintType";
$tdatamaintenenace_other_maintain[".listFields"][] = "Vehicle";
$tdatamaintenenace_other_maintain[".listFields"][] = "Fleet";
$tdatamaintenenace_other_maintain[".listFields"][] = "Type";
$tdatamaintenenace_other_maintain[".listFields"][] = "RefNo";
$tdatamaintenenace_other_maintain[".listFields"][] = "Supplier";
$tdatamaintenenace_other_maintain[".listFields"][] = "Cost";
$tdatamaintenenace_other_maintain[".listFields"][] = "PaymentVoucher";
$tdatamaintenenace_other_maintain[".listFields"][] = "Remarks";
$tdatamaintenenace_other_maintain[".listFields"][] = "EnteredBy";

$tdatamaintenenace_other_maintain[".hideMobileList"] = array();


$tdatamaintenenace_other_maintain[".viewFields"] = array();
$tdatamaintenenace_other_maintain[".viewFields"][] = "Date";
$tdatamaintenenace_other_maintain[".viewFields"][] = "Id";
$tdatamaintenenace_other_maintain[".viewFields"][] = "MaintType";
$tdatamaintenenace_other_maintain[".viewFields"][] = "Vehicle";
$tdatamaintenenace_other_maintain[".viewFields"][] = "Fleet";
$tdatamaintenenace_other_maintain[".viewFields"][] = "Type";
$tdatamaintenenace_other_maintain[".viewFields"][] = "RefNo";
$tdatamaintenenace_other_maintain[".viewFields"][] = "Supplier";
$tdatamaintenenace_other_maintain[".viewFields"][] = "Cost";
$tdatamaintenenace_other_maintain[".viewFields"][] = "PaymentVoucher";
$tdatamaintenenace_other_maintain[".viewFields"][] = "Remarks";
$tdatamaintenenace_other_maintain[".viewFields"][] = "EnteredBy";
$tdatamaintenenace_other_maintain[".viewFields"][] = "SysDate";
$tdatamaintenenace_other_maintain[".viewFields"][] = "Approval";

$tdatamaintenenace_other_maintain[".addFields"] = array();
$tdatamaintenenace_other_maintain[".addFields"][] = "Date";
$tdatamaintenenace_other_maintain[".addFields"][] = "MaintType";
$tdatamaintenenace_other_maintain[".addFields"][] = "Vehicle";
$tdatamaintenenace_other_maintain[".addFields"][] = "Fleet";
$tdatamaintenenace_other_maintain[".addFields"][] = "Type";
$tdatamaintenenace_other_maintain[".addFields"][] = "RefNo";
$tdatamaintenenace_other_maintain[".addFields"][] = "Supplier";
$tdatamaintenenace_other_maintain[".addFields"][] = "Cost";
$tdatamaintenenace_other_maintain[".addFields"][] = "PaymentVoucher";
$tdatamaintenenace_other_maintain[".addFields"][] = "Remarks";
$tdatamaintenenace_other_maintain[".addFields"][] = "EnteredBy";
$tdatamaintenenace_other_maintain[".addFields"][] = "SysDate";

$tdatamaintenenace_other_maintain[".masterListFields"] = array();
$tdatamaintenenace_other_maintain[".masterListFields"][] = "Date";
$tdatamaintenenace_other_maintain[".masterListFields"][] = "Id";
$tdatamaintenenace_other_maintain[".masterListFields"][] = "MaintType";
$tdatamaintenenace_other_maintain[".masterListFields"][] = "Vehicle";
$tdatamaintenenace_other_maintain[".masterListFields"][] = "Fleet";
$tdatamaintenenace_other_maintain[".masterListFields"][] = "Type";
$tdatamaintenenace_other_maintain[".masterListFields"][] = "MeterReading";
$tdatamaintenenace_other_maintain[".masterListFields"][] = "RefNo";
$tdatamaintenenace_other_maintain[".masterListFields"][] = "Supplier";
$tdatamaintenenace_other_maintain[".masterListFields"][] = "Cost";
$tdatamaintenenace_other_maintain[".masterListFields"][] = "PaymentVoucher";
$tdatamaintenenace_other_maintain[".masterListFields"][] = "AccidentRef";
$tdatamaintenenace_other_maintain[".masterListFields"][] = "Remarks";
$tdatamaintenenace_other_maintain[".masterListFields"][] = "EnteredBy";
$tdatamaintenenace_other_maintain[".masterListFields"][] = "Approval";
$tdatamaintenenace_other_maintain[".masterListFields"][] = "SysDate";

$tdatamaintenenace_other_maintain[".inlineAddFields"] = array();

$tdatamaintenenace_other_maintain[".editFields"] = array();
$tdatamaintenenace_other_maintain[".editFields"][] = "Date";
$tdatamaintenenace_other_maintain[".editFields"][] = "MaintType";
$tdatamaintenenace_other_maintain[".editFields"][] = "Vehicle";
$tdatamaintenenace_other_maintain[".editFields"][] = "Fleet";
$tdatamaintenenace_other_maintain[".editFields"][] = "Type";
$tdatamaintenenace_other_maintain[".editFields"][] = "RefNo";
$tdatamaintenenace_other_maintain[".editFields"][] = "Supplier";
$tdatamaintenenace_other_maintain[".editFields"][] = "Cost";
$tdatamaintenenace_other_maintain[".editFields"][] = "PaymentVoucher";
$tdatamaintenenace_other_maintain[".editFields"][] = "Remarks";
$tdatamaintenenace_other_maintain[".editFields"][] = "EnteredBy";
$tdatamaintenenace_other_maintain[".editFields"][] = "Approval";
$tdatamaintenenace_other_maintain[".editFields"][] = "SysDate";

$tdatamaintenenace_other_maintain[".inlineEditFields"] = array();

$tdatamaintenenace_other_maintain[".exportFields"] = array();
$tdatamaintenenace_other_maintain[".exportFields"][] = "Date";
$tdatamaintenenace_other_maintain[".exportFields"][] = "Id";
$tdatamaintenenace_other_maintain[".exportFields"][] = "MaintType";
$tdatamaintenenace_other_maintain[".exportFields"][] = "Vehicle";
$tdatamaintenenace_other_maintain[".exportFields"][] = "Fleet";
$tdatamaintenenace_other_maintain[".exportFields"][] = "Type";
$tdatamaintenenace_other_maintain[".exportFields"][] = "RefNo";
$tdatamaintenenace_other_maintain[".exportFields"][] = "Supplier";
$tdatamaintenenace_other_maintain[".exportFields"][] = "Cost";
$tdatamaintenenace_other_maintain[".exportFields"][] = "PaymentVoucher";
$tdatamaintenenace_other_maintain[".exportFields"][] = "Remarks";
$tdatamaintenenace_other_maintain[".exportFields"][] = "EnteredBy";
$tdatamaintenenace_other_maintain[".exportFields"][] = "SysDate";
$tdatamaintenenace_other_maintain[".exportFields"][] = "Approval";

$tdatamaintenenace_other_maintain[".importFields"] = array();
$tdatamaintenenace_other_maintain[".importFields"][] = "Id";
$tdatamaintenenace_other_maintain[".importFields"][] = "Fleet";
$tdatamaintenenace_other_maintain[".importFields"][] = "Vehicle";
$tdatamaintenenace_other_maintain[".importFields"][] = "Type";
$tdatamaintenenace_other_maintain[".importFields"][] = "Supplier";
$tdatamaintenenace_other_maintain[".importFields"][] = "Cost";
$tdatamaintenenace_other_maintain[".importFields"][] = "Remarks";
$tdatamaintenenace_other_maintain[".importFields"][] = "RefNo";
$tdatamaintenenace_other_maintain[".importFields"][] = "SysDate";
$tdatamaintenenace_other_maintain[".importFields"][] = "Date";
$tdatamaintenenace_other_maintain[".importFields"][] = "EnteredBy";
$tdatamaintenenace_other_maintain[".importFields"][] = "Approval";
$tdatamaintenenace_other_maintain[".importFields"][] = "PaymentVoucher";
$tdatamaintenenace_other_maintain[".importFields"][] = "MaintType";

$tdatamaintenenace_other_maintain[".printFields"] = array();
$tdatamaintenenace_other_maintain[".printFields"][] = "Date";
$tdatamaintenenace_other_maintain[".printFields"][] = "Id";
$tdatamaintenenace_other_maintain[".printFields"][] = "MaintType";
$tdatamaintenenace_other_maintain[".printFields"][] = "Vehicle";
$tdatamaintenenace_other_maintain[".printFields"][] = "Fleet";
$tdatamaintenenace_other_maintain[".printFields"][] = "Type";
$tdatamaintenenace_other_maintain[".printFields"][] = "RefNo";
$tdatamaintenenace_other_maintain[".printFields"][] = "Supplier";
$tdatamaintenenace_other_maintain[".printFields"][] = "Cost";
$tdatamaintenenace_other_maintain[".printFields"][] = "PaymentVoucher";
$tdatamaintenenace_other_maintain[".printFields"][] = "Remarks";
$tdatamaintenenace_other_maintain[".printFields"][] = "EnteredBy";
$tdatamaintenenace_other_maintain[".printFields"][] = "SysDate";
$tdatamaintenenace_other_maintain[".printFields"][] = "Approval";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_other_maintain","Id"); 
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
	
	
	
	

	

	
	$tdatamaintenenace_other_maintain["Id"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_other_maintain","Fleet"); 
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

	

	
	$tdatamaintenenace_other_maintain["Fleet"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_other_maintain","Vehicle"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatamaintenenace_other_maintain["Vehicle"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_other_maintain","Type"); 
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

	

	
	$tdatamaintenenace_other_maintain["Type"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_other_maintain","Supplier"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatamaintenenace_other_maintain["Supplier"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_other_maintain","Cost"); 
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

	

	
	$tdatamaintenenace_other_maintain["Cost"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_other_maintain","Remarks"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatamaintenenace_other_maintain["Remarks"] = $fdata;
//	RefNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "RefNo";
	$fdata["GoodName"] = "RefNo";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_other_maintain","RefNo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatamaintenenace_other_maintain["RefNo"] = $fdata;
//	SysDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SysDate";
	$fdata["GoodName"] = "SysDate";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_other_maintain","SysDate"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatamaintenenace_other_maintain["SysDate"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_other_maintain","Date"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatamaintenenace_other_maintain["Date"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_other_maintain","EnteredBy"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatamaintenenace_other_maintain["EnteredBy"] = $fdata;
//	Approval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Approval";
	$fdata["GoodName"] = "Approval";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_other_maintain","Approval"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatamaintenenace_other_maintain["Approval"] = $fdata;
//	MeterReading
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "MeterReading";
	$fdata["GoodName"] = "MeterReading";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_other_maintain","MeterReading"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "MeterReading"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MeterReading";
	
		
		
				
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
	
	
	
	

	

	
	$tdatamaintenenace_other_maintain["MeterReading"] = $fdata;
//	AccidentRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "AccidentRef";
	$fdata["GoodName"] = "AccidentRef";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_other_maintain","AccidentRef"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "AccidentRef"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccidentRef";
	
		
		
				
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
	
	
	
	

	

	
	$tdatamaintenenace_other_maintain["AccidentRef"] = $fdata;
//	PaymentVoucher
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "PaymentVoucher";
	$fdata["GoodName"] = "PaymentVoucher";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_other_maintain","PaymentVoucher"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatamaintenenace_other_maintain["PaymentVoucher"] = $fdata;
//	MaintType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "MaintType";
	$fdata["GoodName"] = "MaintType";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_other_maintain","MaintType"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatamaintenenace_other_maintain["MaintType"] = $fdata;

	
$tables_data["maintenenace-other-maintain"]=&$tdatamaintenenace_other_maintain;
$field_labels["maintenenace_other_maintain"] = &$fieldLabelsmaintenenace_other_maintain;
$fieldToolTips["maintenenace-other-maintain"] = &$fieldToolTipsmaintenenace_other_maintain;
$page_titles["maintenenace_other_maintain"] = &$pageTitlesmaintenenace_other_maintain;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["maintenenace-other-maintain"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["maintenenace-other-maintain"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_maintenenace_other_maintain()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  Fleet,  Vehicle,  `Type`,  Supplier,  Cost,  Remarks,  RefNo,  `SysDate`,  `Date`,  EnteredBy,  Approval,  MeterReading,  AccidentRef,  PaymentVoucher,  MaintType";
$proto0["m_strFrom"] = "FROM maintenenace";
$proto0["m_strWhere"] = "(MaintType =\"General Maintenance\")";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "MaintType =\"General Maintenance\"";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "MaintType",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-other-maintain"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=\"General Maintenance\"";
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
	"m_srcTableName" => "maintenenace-other-maintain"
));

$proto5["m_sql"] = "Id";
$proto5["m_srcTableName"] = "maintenenace-other-maintain";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-other-maintain"
));

$proto7["m_sql"] = "Fleet";
$proto7["m_srcTableName"] = "maintenenace-other-maintain";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-other-maintain"
));

$proto9["m_sql"] = "Vehicle";
$proto9["m_srcTableName"] = "maintenenace-other-maintain";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-other-maintain"
));

$proto11["m_sql"] = "`Type`";
$proto11["m_srcTableName"] = "maintenenace-other-maintain";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-other-maintain"
));

$proto13["m_sql"] = "Supplier";
$proto13["m_srcTableName"] = "maintenenace-other-maintain";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-other-maintain"
));

$proto15["m_sql"] = "Cost";
$proto15["m_srcTableName"] = "maintenenace-other-maintain";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-other-maintain"
));

$proto17["m_sql"] = "Remarks";
$proto17["m_srcTableName"] = "maintenenace-other-maintain";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNo",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-other-maintain"
));

$proto19["m_sql"] = "RefNo";
$proto19["m_srcTableName"] = "maintenenace-other-maintain";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "SysDate",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-other-maintain"
));

$proto21["m_sql"] = "`SysDate`";
$proto21["m_srcTableName"] = "maintenenace-other-maintain";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-other-maintain"
));

$proto23["m_sql"] = "`Date`";
$proto23["m_srcTableName"] = "maintenenace-other-maintain";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-other-maintain"
));

$proto25["m_sql"] = "EnteredBy";
$proto25["m_srcTableName"] = "maintenenace-other-maintain";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Approval",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-other-maintain"
));

$proto27["m_sql"] = "Approval";
$proto27["m_srcTableName"] = "maintenenace-other-maintain";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "MeterReading",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-other-maintain"
));

$proto29["m_sql"] = "MeterReading";
$proto29["m_srcTableName"] = "maintenenace-other-maintain";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "AccidentRef",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-other-maintain"
));

$proto31["m_sql"] = "AccidentRef";
$proto31["m_srcTableName"] = "maintenenace-other-maintain";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentVoucher",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-other-maintain"
));

$proto33["m_sql"] = "PaymentVoucher";
$proto33["m_srcTableName"] = "maintenenace-other-maintain";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "MaintType",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-other-maintain"
));

$proto35["m_sql"] = "MaintType";
$proto35["m_srcTableName"] = "maintenenace-other-maintain";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "maintenenace";
$proto38["m_srcTableName"] = "maintenenace-other-maintain";
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
$proto37["m_srcTableName"] = "maintenenace-other-maintain";
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
$proto0["m_srcTableName"]="maintenenace-other-maintain";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_maintenenace_other_maintain = createSqlQuery_maintenenace_other_maintain();


	
																
	
$tdatamaintenenace_other_maintain[".sqlquery"] = $queryData_maintenenace_other_maintain;

$tableEvents["maintenenace-other-maintain"] = new eventsBase;
$tdatamaintenenace_other_maintain[".hasEvents"] = false;

?>