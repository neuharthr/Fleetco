<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamaintenenace_accidentrepair = array();	
	$tdatamaintenenace_accidentrepair[".truncateText"] = true;
	$tdatamaintenenace_accidentrepair[".NumberOfChars"] = 80; 
	$tdatamaintenenace_accidentrepair[".ShortName"] = "maintenenace_accidentrepair";
	$tdatamaintenenace_accidentrepair[".OwnerID"] = "";
	$tdatamaintenenace_accidentrepair[".OriginalTable"] = "maintenenace";

//	field labels
$fieldLabelsmaintenenace_accidentrepair = array();
$fieldToolTipsmaintenenace_accidentrepair = array();
$pageTitlesmaintenenace_accidentrepair = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmaintenenace_accidentrepair["English"] = array();
	$fieldToolTipsmaintenenace_accidentrepair["English"] = array();
	$pageTitlesmaintenenace_accidentrepair["English"] = array();
	$fieldLabelsmaintenenace_accidentrepair["English"]["Id"] = "ID";
	$fieldToolTipsmaintenenace_accidentrepair["English"]["Id"] = "";
	$fieldLabelsmaintenenace_accidentrepair["English"]["Fleet"] = "Fleet";
	$fieldToolTipsmaintenenace_accidentrepair["English"]["Fleet"] = "";
	$fieldLabelsmaintenenace_accidentrepair["English"]["Vehicle"] = "Vehicle";
	$fieldToolTipsmaintenenace_accidentrepair["English"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_accidentrepair["English"]["Type"] = "Type";
	$fieldToolTipsmaintenenace_accidentrepair["English"]["Type"] = "";
	$fieldLabelsmaintenenace_accidentrepair["English"]["Supplier"] = "Supplier";
	$fieldToolTipsmaintenenace_accidentrepair["English"]["Supplier"] = "";
	$fieldLabelsmaintenenace_accidentrepair["English"]["Cost"] = "Cost";
	$fieldToolTipsmaintenenace_accidentrepair["English"]["Cost"] = "Cost without VAT";
	$fieldLabelsmaintenenace_accidentrepair["English"]["Remarks"] = "Remarks";
	$fieldToolTipsmaintenenace_accidentrepair["English"]["Remarks"] = "";
	$fieldLabelsmaintenenace_accidentrepair["English"]["RefNo"] = "PO No";
	$fieldToolTipsmaintenenace_accidentrepair["English"]["RefNo"] = "";
	$fieldLabelsmaintenenace_accidentrepair["English"]["SysDate"] = "System Date";
	$fieldToolTipsmaintenenace_accidentrepair["English"]["SysDate"] = "";
	$fieldLabelsmaintenenace_accidentrepair["English"]["Date"] = "Date";
	$fieldToolTipsmaintenenace_accidentrepair["English"]["Date"] = "";
	$fieldLabelsmaintenenace_accidentrepair["English"]["EnteredBy"] = "Entered By";
	$fieldToolTipsmaintenenace_accidentrepair["English"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_accidentrepair["English"]["Approval"] = "Edited By";
	$fieldToolTipsmaintenenace_accidentrepair["English"]["Approval"] = "";
	$fieldLabelsmaintenenace_accidentrepair["English"]["MeterReading"] = "Meter R.";
	$fieldToolTipsmaintenenace_accidentrepair["English"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_accidentrepair["English"]["AccidentRef"] = "Accid.Ref";
	$fieldToolTipsmaintenenace_accidentrepair["English"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_accidentrepair["English"]["PaymentVoucher"] = "Pay. Ref";
	$fieldToolTipsmaintenenace_accidentrepair["English"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_accidentrepair["English"]["MaintType"] = "Repair Type";
	$fieldToolTipsmaintenenace_accidentrepair["English"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_accidentrepair["English"]))
		$tdatamaintenenace_accidentrepair[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmaintenenace_accidentrepair[""] = array();
	$fieldToolTipsmaintenenace_accidentrepair[""] = array();
	$pageTitlesmaintenenace_accidentrepair[""] = array();
	$fieldLabelsmaintenenace_accidentrepair[""]["Id"] = "Id";
	$fieldToolTipsmaintenenace_accidentrepair[""]["Id"] = "";
	$fieldLabelsmaintenenace_accidentrepair[""]["Fleet"] = "Fleet";
	$fieldToolTipsmaintenenace_accidentrepair[""]["Fleet"] = "";
	$fieldLabelsmaintenenace_accidentrepair[""]["Vehicle"] = "Vehicle";
	$fieldToolTipsmaintenenace_accidentrepair[""]["Vehicle"] = "";
	$fieldLabelsmaintenenace_accidentrepair[""]["Type"] = "Type";
	$fieldToolTipsmaintenenace_accidentrepair[""]["Type"] = "";
	$fieldLabelsmaintenenace_accidentrepair[""]["Supplier"] = "Supplier";
	$fieldToolTipsmaintenenace_accidentrepair[""]["Supplier"] = "";
	$fieldLabelsmaintenenace_accidentrepair[""]["Cost"] = "Cost";
	$fieldToolTipsmaintenenace_accidentrepair[""]["Cost"] = "";
	$fieldLabelsmaintenenace_accidentrepair[""]["Remarks"] = "Remarks";
	$fieldToolTipsmaintenenace_accidentrepair[""]["Remarks"] = "";
	$fieldLabelsmaintenenace_accidentrepair[""]["RefNo"] = "Ref No";
	$fieldToolTipsmaintenenace_accidentrepair[""]["RefNo"] = "";
	$fieldLabelsmaintenenace_accidentrepair[""]["SysDate"] = "Sys Date";
	$fieldToolTipsmaintenenace_accidentrepair[""]["SysDate"] = "";
	$fieldLabelsmaintenenace_accidentrepair[""]["Date"] = "Date";
	$fieldToolTipsmaintenenace_accidentrepair[""]["Date"] = "";
	$fieldLabelsmaintenenace_accidentrepair[""]["EnteredBy"] = "Entered By";
	$fieldToolTipsmaintenenace_accidentrepair[""]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_accidentrepair[""]["Approval"] = "Approval";
	$fieldToolTipsmaintenenace_accidentrepair[""]["Approval"] = "";
	$fieldLabelsmaintenenace_accidentrepair[""]["MeterReading"] = "Meter Reading";
	$fieldToolTipsmaintenenace_accidentrepair[""]["MeterReading"] = "";
	$fieldLabelsmaintenenace_accidentrepair[""]["AccidentRef"] = "Accident Ref";
	$fieldToolTipsmaintenenace_accidentrepair[""]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_accidentrepair[""]["PaymentVoucher"] = "Payment Voucher";
	$fieldToolTipsmaintenenace_accidentrepair[""]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_accidentrepair[""]["MaintType"] = "Maint Type";
	$fieldToolTipsmaintenenace_accidentrepair[""]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_accidentrepair[""]))
		$tdatamaintenenace_accidentrepair[".isUseToolTips"] = true;
}
	
	
	$tdatamaintenenace_accidentrepair[".NCSearch"] = true;



$tdatamaintenenace_accidentrepair[".shortTableName"] = "maintenenace_accidentrepair";
$tdatamaintenenace_accidentrepair[".nSecOptions"] = 0;
$tdatamaintenenace_accidentrepair[".recsPerRowList"] = 1;
$tdatamaintenenace_accidentrepair[".recsPerRowPrint"] = 1;
$tdatamaintenenace_accidentrepair[".mainTableOwnerID"] = "";
$tdatamaintenenace_accidentrepair[".moveNext"] = 1;
$tdatamaintenenace_accidentrepair[".entityType"] = 1;

$tdatamaintenenace_accidentrepair[".strOriginalTableName"] = "maintenenace";




$tdatamaintenenace_accidentrepair[".showAddInPopup"] = false;

$tdatamaintenenace_accidentrepair[".showEditInPopup"] = false;

$tdatamaintenenace_accidentrepair[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamaintenenace_accidentrepair[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamaintenenace_accidentrepair[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatamaintenenace_accidentrepair[".listAjax"] = true;
else 
	$tdatamaintenenace_accidentrepair[".listAjax"] = false;

	$tdatamaintenenace_accidentrepair[".audit"] = false;

	$tdatamaintenenace_accidentrepair[".locking"] = false;

$tdatamaintenenace_accidentrepair[".edit"] = true;
$tdatamaintenenace_accidentrepair[".afterEditAction"] = 1;
$tdatamaintenenace_accidentrepair[".closePopupAfterEdit"] = 1;
$tdatamaintenenace_accidentrepair[".afterEditActionDetTable"] = "";

$tdatamaintenenace_accidentrepair[".add"] = true;
$tdatamaintenenace_accidentrepair[".afterAddAction"] = 1;
$tdatamaintenenace_accidentrepair[".closePopupAfterAdd"] = 1;
$tdatamaintenenace_accidentrepair[".afterAddActionDetTable"] = "";

$tdatamaintenenace_accidentrepair[".list"] = true;

$tdatamaintenenace_accidentrepair[".view"] = true;

$tdatamaintenenace_accidentrepair[".import"] = true;

$tdatamaintenenace_accidentrepair[".exportTo"] = true;

$tdatamaintenenace_accidentrepair[".printFriendly"] = true;

$tdatamaintenenace_accidentrepair[".delete"] = true;

$tdatamaintenenace_accidentrepair[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatamaintenenace_accidentrepair[".searchSaving"] = false;
//

$tdatamaintenenace_accidentrepair[".showSearchPanel"] = true;
		$tdatamaintenenace_accidentrepair[".flexibleSearch"] = true;		

if (isMobile())
	$tdatamaintenenace_accidentrepair[".isUseAjaxSuggest"] = false;
else 
	$tdatamaintenenace_accidentrepair[".isUseAjaxSuggest"] = true;

$tdatamaintenenace_accidentrepair[".rowHighlite"] = true;



$tdatamaintenenace_accidentrepair[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamaintenenace_accidentrepair[".isUseTimeForSearch"] = false;





$tdatamaintenenace_accidentrepair[".allSearchFields"] = array();
$tdatamaintenenace_accidentrepair[".filterFields"] = array();
$tdatamaintenenace_accidentrepair[".requiredSearchFields"] = array();

$tdatamaintenenace_accidentrepair[".allSearchFields"][] = "Date";
	$tdatamaintenenace_accidentrepair[".allSearchFields"][] = "MaintType";
	$tdatamaintenenace_accidentrepair[".allSearchFields"][] = "Vehicle";
	$tdatamaintenenace_accidentrepair[".allSearchFields"][] = "Fleet";
	$tdatamaintenenace_accidentrepair[".allSearchFields"][] = "Type";
	$tdatamaintenenace_accidentrepair[".allSearchFields"][] = "MeterReading";
	$tdatamaintenenace_accidentrepair[".allSearchFields"][] = "RefNo";
	$tdatamaintenenace_accidentrepair[".allSearchFields"][] = "Supplier";
	$tdatamaintenenace_accidentrepair[".allSearchFields"][] = "AccidentRef";
	$tdatamaintenenace_accidentrepair[".allSearchFields"][] = "Cost";
	$tdatamaintenenace_accidentrepair[".allSearchFields"][] = "PaymentVoucher";
	$tdatamaintenenace_accidentrepair[".allSearchFields"][] = "Remarks";
	$tdatamaintenenace_accidentrepair[".allSearchFields"][] = "EnteredBy";
	$tdatamaintenenace_accidentrepair[".allSearchFields"][] = "Approval";
	$tdatamaintenenace_accidentrepair[".allSearchFields"][] = "SysDate";
	

$tdatamaintenenace_accidentrepair[".googleLikeFields"] = array();
$tdatamaintenenace_accidentrepair[".googleLikeFields"][] = "Id";
$tdatamaintenenace_accidentrepair[".googleLikeFields"][] = "Fleet";
$tdatamaintenenace_accidentrepair[".googleLikeFields"][] = "Vehicle";
$tdatamaintenenace_accidentrepair[".googleLikeFields"][] = "Type";
$tdatamaintenenace_accidentrepair[".googleLikeFields"][] = "Supplier";
$tdatamaintenenace_accidentrepair[".googleLikeFields"][] = "Cost";
$tdatamaintenenace_accidentrepair[".googleLikeFields"][] = "Remarks";
$tdatamaintenenace_accidentrepair[".googleLikeFields"][] = "RefNo";
$tdatamaintenenace_accidentrepair[".googleLikeFields"][] = "SysDate";
$tdatamaintenenace_accidentrepair[".googleLikeFields"][] = "Date";
$tdatamaintenenace_accidentrepair[".googleLikeFields"][] = "EnteredBy";
$tdatamaintenenace_accidentrepair[".googleLikeFields"][] = "Approval";
$tdatamaintenenace_accidentrepair[".googleLikeFields"][] = "MeterReading";
$tdatamaintenenace_accidentrepair[".googleLikeFields"][] = "AccidentRef";
$tdatamaintenenace_accidentrepair[".googleLikeFields"][] = "PaymentVoucher";
$tdatamaintenenace_accidentrepair[".googleLikeFields"][] = "MaintType";


$tdatamaintenenace_accidentrepair[".advSearchFields"] = array();
$tdatamaintenenace_accidentrepair[".advSearchFields"][] = "Date";
$tdatamaintenenace_accidentrepair[".advSearchFields"][] = "MaintType";
$tdatamaintenenace_accidentrepair[".advSearchFields"][] = "Vehicle";
$tdatamaintenenace_accidentrepair[".advSearchFields"][] = "Fleet";
$tdatamaintenenace_accidentrepair[".advSearchFields"][] = "Type";
$tdatamaintenenace_accidentrepair[".advSearchFields"][] = "MeterReading";
$tdatamaintenenace_accidentrepair[".advSearchFields"][] = "RefNo";
$tdatamaintenenace_accidentrepair[".advSearchFields"][] = "Supplier";
$tdatamaintenenace_accidentrepair[".advSearchFields"][] = "AccidentRef";
$tdatamaintenenace_accidentrepair[".advSearchFields"][] = "Cost";
$tdatamaintenenace_accidentrepair[".advSearchFields"][] = "PaymentVoucher";
$tdatamaintenenace_accidentrepair[".advSearchFields"][] = "Remarks";
$tdatamaintenenace_accidentrepair[".advSearchFields"][] = "EnteredBy";
$tdatamaintenenace_accidentrepair[".advSearchFields"][] = "Approval";
$tdatamaintenenace_accidentrepair[".advSearchFields"][] = "SysDate";

$tdatamaintenenace_accidentrepair[".tableType"] = "list";

$tdatamaintenenace_accidentrepair[".printerPageOrientation"] = 0;
$tdatamaintenenace_accidentrepair[".nPrinterPageScale"] = 100;

$tdatamaintenenace_accidentrepair[".nPrinterSplitRecords"] = 40;

$tdatamaintenenace_accidentrepair[".nPrinterPDFSplitRecords"] = 40;



$tdatamaintenenace_accidentrepair[".geocodingEnabled"] = false;




	





// view page pdf
$tdatamaintenenace_accidentrepair[".isViewPagePDF"] = true;
$tdatamaintenenace_accidentrepair[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatamaintenenace_accidentrepair[".isPrinterPagePDF"] = true;
$tdatamaintenenace_accidentrepair[".nPrinterPagePDFScale"] = 100;

$tdatamaintenenace_accidentrepair[".totalsFields"] = array();
$tdatamaintenenace_accidentrepair[".totalsFields"][] = array(
	"fName" => "Cost", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatamaintenenace_accidentrepair[".pageSize"] = 20;

$tdatamaintenenace_accidentrepair[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamaintenenace_accidentrepair[".strOrderBy"] = $tstrOrderBy;

$tdatamaintenenace_accidentrepair[".orderindexes"] = array();

$tdatamaintenenace_accidentrepair[".sqlHead"] = "SELECT Id,  Fleet,  Vehicle,  `Type`,  Supplier,  Cost,  Remarks,  RefNo,  `SysDate`,  `Date`,  EnteredBy,  Approval,  MeterReading,  AccidentRef,  PaymentVoucher,  MaintType";
$tdatamaintenenace_accidentrepair[".sqlFrom"] = "FROM maintenenace";
$tdatamaintenenace_accidentrepair[".sqlWhereExpr"] = "(MaintType =\"Accident Repair\")";
$tdatamaintenenace_accidentrepair[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatamaintenenace_accidentrepair[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamaintenenace_accidentrepair[".arrGroupsPerPage"] = $arrGPP;

$tdatamaintenenace_accidentrepair[".highlightSearchResults"] = true;

$tableKeysmaintenenace_accidentrepair = array();
$tableKeysmaintenenace_accidentrepair[] = "Id";
$tdatamaintenenace_accidentrepair[".Keys"] = $tableKeysmaintenenace_accidentrepair;

$tdatamaintenenace_accidentrepair[".listFields"] = array();
$tdatamaintenenace_accidentrepair[".listFields"][] = "Date";
$tdatamaintenenace_accidentrepair[".listFields"][] = "Id";
$tdatamaintenenace_accidentrepair[".listFields"][] = "MaintType";
$tdatamaintenenace_accidentrepair[".listFields"][] = "Vehicle";
$tdatamaintenenace_accidentrepair[".listFields"][] = "Fleet";
$tdatamaintenenace_accidentrepair[".listFields"][] = "Type";
$tdatamaintenenace_accidentrepair[".listFields"][] = "MeterReading";
$tdatamaintenenace_accidentrepair[".listFields"][] = "RefNo";
$tdatamaintenenace_accidentrepair[".listFields"][] = "Supplier";
$tdatamaintenenace_accidentrepair[".listFields"][] = "Cost";
$tdatamaintenenace_accidentrepair[".listFields"][] = "AccidentRef";
$tdatamaintenenace_accidentrepair[".listFields"][] = "PaymentVoucher";
$tdatamaintenenace_accidentrepair[".listFields"][] = "Remarks";
$tdatamaintenenace_accidentrepair[".listFields"][] = "EnteredBy";

$tdatamaintenenace_accidentrepair[".hideMobileList"] = array();


$tdatamaintenenace_accidentrepair[".viewFields"] = array();
$tdatamaintenenace_accidentrepair[".viewFields"][] = "Date";
$tdatamaintenenace_accidentrepair[".viewFields"][] = "Id";
$tdatamaintenenace_accidentrepair[".viewFields"][] = "MaintType";
$tdatamaintenenace_accidentrepair[".viewFields"][] = "Vehicle";
$tdatamaintenenace_accidentrepair[".viewFields"][] = "Fleet";
$tdatamaintenenace_accidentrepair[".viewFields"][] = "Type";
$tdatamaintenenace_accidentrepair[".viewFields"][] = "MeterReading";
$tdatamaintenenace_accidentrepair[".viewFields"][] = "RefNo";
$tdatamaintenenace_accidentrepair[".viewFields"][] = "Supplier";
$tdatamaintenenace_accidentrepair[".viewFields"][] = "Cost";
$tdatamaintenenace_accidentrepair[".viewFields"][] = "AccidentRef";
$tdatamaintenenace_accidentrepair[".viewFields"][] = "PaymentVoucher";
$tdatamaintenenace_accidentrepair[".viewFields"][] = "Remarks";
$tdatamaintenenace_accidentrepair[".viewFields"][] = "EnteredBy";
$tdatamaintenenace_accidentrepair[".viewFields"][] = "Approval";
$tdatamaintenenace_accidentrepair[".viewFields"][] = "SysDate";

$tdatamaintenenace_accidentrepair[".addFields"] = array();
$tdatamaintenenace_accidentrepair[".addFields"][] = "MaintType";
$tdatamaintenenace_accidentrepair[".addFields"][] = "Fleet";
$tdatamaintenenace_accidentrepair[".addFields"][] = "Vehicle";
$tdatamaintenenace_accidentrepair[".addFields"][] = "Type";
$tdatamaintenenace_accidentrepair[".addFields"][] = "Date";
$tdatamaintenenace_accidentrepair[".addFields"][] = "MeterReading";
$tdatamaintenenace_accidentrepair[".addFields"][] = "RefNo";
$tdatamaintenenace_accidentrepair[".addFields"][] = "Supplier";
$tdatamaintenenace_accidentrepair[".addFields"][] = "Cost";
$tdatamaintenenace_accidentrepair[".addFields"][] = "AccidentRef";
$tdatamaintenenace_accidentrepair[".addFields"][] = "PaymentVoucher";
$tdatamaintenenace_accidentrepair[".addFields"][] = "Remarks";
$tdatamaintenenace_accidentrepair[".addFields"][] = "EnteredBy";
$tdatamaintenenace_accidentrepair[".addFields"][] = "SysDate";

$tdatamaintenenace_accidentrepair[".masterListFields"] = array();
$tdatamaintenenace_accidentrepair[".masterListFields"][] = "Date";
$tdatamaintenenace_accidentrepair[".masterListFields"][] = "Id";
$tdatamaintenenace_accidentrepair[".masterListFields"][] = "MaintType";
$tdatamaintenenace_accidentrepair[".masterListFields"][] = "Vehicle";
$tdatamaintenenace_accidentrepair[".masterListFields"][] = "Fleet";
$tdatamaintenenace_accidentrepair[".masterListFields"][] = "Type";
$tdatamaintenenace_accidentrepair[".masterListFields"][] = "MeterReading";
$tdatamaintenenace_accidentrepair[".masterListFields"][] = "RefNo";
$tdatamaintenenace_accidentrepair[".masterListFields"][] = "Supplier";
$tdatamaintenenace_accidentrepair[".masterListFields"][] = "Cost";
$tdatamaintenenace_accidentrepair[".masterListFields"][] = "AccidentRef";
$tdatamaintenenace_accidentrepair[".masterListFields"][] = "PaymentVoucher";
$tdatamaintenenace_accidentrepair[".masterListFields"][] = "Remarks";
$tdatamaintenenace_accidentrepair[".masterListFields"][] = "EnteredBy";
$tdatamaintenenace_accidentrepair[".masterListFields"][] = "Approval";
$tdatamaintenenace_accidentrepair[".masterListFields"][] = "SysDate";

$tdatamaintenenace_accidentrepair[".inlineAddFields"] = array();

$tdatamaintenenace_accidentrepair[".editFields"] = array();
$tdatamaintenenace_accidentrepair[".editFields"][] = "Date";
$tdatamaintenenace_accidentrepair[".editFields"][] = "MaintType";
$tdatamaintenenace_accidentrepair[".editFields"][] = "Vehicle";
$tdatamaintenenace_accidentrepair[".editFields"][] = "Fleet";
$tdatamaintenenace_accidentrepair[".editFields"][] = "Type";
$tdatamaintenenace_accidentrepair[".editFields"][] = "MeterReading";
$tdatamaintenenace_accidentrepair[".editFields"][] = "RefNo";
$tdatamaintenenace_accidentrepair[".editFields"][] = "Supplier";
$tdatamaintenenace_accidentrepair[".editFields"][] = "AccidentRef";
$tdatamaintenenace_accidentrepair[".editFields"][] = "Cost";
$tdatamaintenenace_accidentrepair[".editFields"][] = "PaymentVoucher";
$tdatamaintenenace_accidentrepair[".editFields"][] = "Remarks";
$tdatamaintenenace_accidentrepair[".editFields"][] = "EnteredBy";
$tdatamaintenenace_accidentrepair[".editFields"][] = "Approval";
$tdatamaintenenace_accidentrepair[".editFields"][] = "SysDate";

$tdatamaintenenace_accidentrepair[".inlineEditFields"] = array();

$tdatamaintenenace_accidentrepair[".exportFields"] = array();
$tdatamaintenenace_accidentrepair[".exportFields"][] = "Date";
$tdatamaintenenace_accidentrepair[".exportFields"][] = "Id";
$tdatamaintenenace_accidentrepair[".exportFields"][] = "MaintType";
$tdatamaintenenace_accidentrepair[".exportFields"][] = "Vehicle";
$tdatamaintenenace_accidentrepair[".exportFields"][] = "Fleet";
$tdatamaintenenace_accidentrepair[".exportFields"][] = "Type";
$tdatamaintenenace_accidentrepair[".exportFields"][] = "MeterReading";
$tdatamaintenenace_accidentrepair[".exportFields"][] = "RefNo";
$tdatamaintenenace_accidentrepair[".exportFields"][] = "Supplier";
$tdatamaintenenace_accidentrepair[".exportFields"][] = "Cost";
$tdatamaintenenace_accidentrepair[".exportFields"][] = "AccidentRef";
$tdatamaintenenace_accidentrepair[".exportFields"][] = "PaymentVoucher";
$tdatamaintenenace_accidentrepair[".exportFields"][] = "Remarks";
$tdatamaintenenace_accidentrepair[".exportFields"][] = "EnteredBy";
$tdatamaintenenace_accidentrepair[".exportFields"][] = "Approval";
$tdatamaintenenace_accidentrepair[".exportFields"][] = "SysDate";

$tdatamaintenenace_accidentrepair[".importFields"] = array();
$tdatamaintenenace_accidentrepair[".importFields"][] = "Id";
$tdatamaintenenace_accidentrepair[".importFields"][] = "Fleet";
$tdatamaintenenace_accidentrepair[".importFields"][] = "Vehicle";
$tdatamaintenenace_accidentrepair[".importFields"][] = "Type";
$tdatamaintenenace_accidentrepair[".importFields"][] = "Supplier";
$tdatamaintenenace_accidentrepair[".importFields"][] = "Cost";
$tdatamaintenenace_accidentrepair[".importFields"][] = "Remarks";
$tdatamaintenenace_accidentrepair[".importFields"][] = "RefNo";
$tdatamaintenenace_accidentrepair[".importFields"][] = "SysDate";
$tdatamaintenenace_accidentrepair[".importFields"][] = "Date";
$tdatamaintenenace_accidentrepair[".importFields"][] = "EnteredBy";
$tdatamaintenenace_accidentrepair[".importFields"][] = "Approval";
$tdatamaintenenace_accidentrepair[".importFields"][] = "MeterReading";
$tdatamaintenenace_accidentrepair[".importFields"][] = "AccidentRef";
$tdatamaintenenace_accidentrepair[".importFields"][] = "PaymentVoucher";
$tdatamaintenenace_accidentrepair[".importFields"][] = "MaintType";

$tdatamaintenenace_accidentrepair[".printFields"] = array();
$tdatamaintenenace_accidentrepair[".printFields"][] = "Date";
$tdatamaintenenace_accidentrepair[".printFields"][] = "Id";
$tdatamaintenenace_accidentrepair[".printFields"][] = "MaintType";
$tdatamaintenenace_accidentrepair[".printFields"][] = "Vehicle";
$tdatamaintenenace_accidentrepair[".printFields"][] = "Fleet";
$tdatamaintenenace_accidentrepair[".printFields"][] = "Type";
$tdatamaintenenace_accidentrepair[".printFields"][] = "MeterReading";
$tdatamaintenenace_accidentrepair[".printFields"][] = "RefNo";
$tdatamaintenenace_accidentrepair[".printFields"][] = "Supplier";
$tdatamaintenenace_accidentrepair[".printFields"][] = "Cost";
$tdatamaintenenace_accidentrepair[".printFields"][] = "AccidentRef";
$tdatamaintenenace_accidentrepair[".printFields"][] = "PaymentVoucher";
$tdatamaintenenace_accidentrepair[".printFields"][] = "Remarks";
$tdatamaintenenace_accidentrepair[".printFields"][] = "EnteredBy";
$tdatamaintenenace_accidentrepair[".printFields"][] = "Approval";
$tdatamaintenenace_accidentrepair[".printFields"][] = "SysDate";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accidentrepair","Id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	
	
	

	

	
	$tdatamaintenenace_accidentrepair["Id"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accidentrepair","Fleet"); 
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
	
		
			
		
				
				//dependent dropdowns	
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "Vehicle";
	
	
		
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

	

	
	$tdatamaintenenace_accidentrepair["Fleet"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accidentrepair","Vehicle"); 
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
		$edata["autoCompleteFields"][] = array('masterF'=>"Type", 'lookupF'=>"Type");
	$edata["LCType"] = 0;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "RegNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RegNo";
	
		
	$edata["LookupOrderBy"] = "RegNo";
	
		
		$edata["UseCategory"] = true; 
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Fleet", "lookup" => "Fleet" );
		
		
				
	
	
		
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

	

	
	$tdatamaintenenace_accidentrepair["Vehicle"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accidentrepair","Type"); 
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

	

	
	$tdatamaintenenace_accidentrepair["Type"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accidentrepair","Supplier"); 
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

	

	
	$tdatamaintenenace_accidentrepair["Supplier"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accidentrepair","Cost"); 
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

	

	
	$tdatamaintenenace_accidentrepair["Cost"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accidentrepair","Remarks"); 
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

	

	
	$tdatamaintenenace_accidentrepair["Remarks"] = $fdata;
//	RefNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "RefNo";
	$fdata["GoodName"] = "RefNo";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accidentrepair","RefNo"); 
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

	

	
	$tdatamaintenenace_accidentrepair["RefNo"] = $fdata;
//	SysDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SysDate";
	$fdata["GoodName"] = "SysDate";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accidentrepair","SysDate"); 
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

	

	
	$tdatamaintenenace_accidentrepair["SysDate"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accidentrepair","Date"); 
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

	

	
	$tdatamaintenenace_accidentrepair["Date"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accidentrepair","EnteredBy"); 
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

	

	
	$tdatamaintenenace_accidentrepair["EnteredBy"] = $fdata;
//	Approval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Approval";
	$fdata["GoodName"] = "Approval";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accidentrepair","Approval"); 
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

	

	
	$tdatamaintenenace_accidentrepair["Approval"] = $fdata;
//	MeterReading
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "MeterReading";
	$fdata["GoodName"] = "MeterReading";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accidentrepair","MeterReading"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatamaintenenace_accidentrepair["MeterReading"] = $fdata;
//	AccidentRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "AccidentRef";
	$fdata["GoodName"] = "AccidentRef";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accidentrepair","AccidentRef"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "accidents";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;
		
		
			
	$edata["LinkField"] = "Id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Id";
	
		
	$edata["LookupOrderBy"] = "Id";
	
		
			
		
				
	
	
		
		
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

	

	
	$tdatamaintenenace_accidentrepair["AccidentRef"] = $fdata;
//	PaymentVoucher
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "PaymentVoucher";
	$fdata["GoodName"] = "PaymentVoucher";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accidentrepair","PaymentVoucher"); 
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

	

	
	$tdatamaintenenace_accidentrepair["PaymentVoucher"] = $fdata;
//	MaintType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "MaintType";
	$fdata["GoodName"] = "MaintType";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accidentrepair","MaintType"); 
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatamaintenenace_accidentrepair["MaintType"] = $fdata;

	
$tables_data["maintenenace-accidentrepair"]=&$tdatamaintenenace_accidentrepair;
$field_labels["maintenenace_accidentrepair"] = &$fieldLabelsmaintenenace_accidentrepair;
$fieldToolTips["maintenenace-accidentrepair"] = &$fieldToolTipsmaintenenace_accidentrepair;
$page_titles["maintenenace_accidentrepair"] = &$pageTitlesmaintenenace_accidentrepair;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["maintenenace-accidentrepair"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["maintenenace-accidentrepair"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_maintenenace_accidentrepair()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  Fleet,  Vehicle,  `Type`,  Supplier,  Cost,  Remarks,  RefNo,  `SysDate`,  `Date`,  EnteredBy,  Approval,  MeterReading,  AccidentRef,  PaymentVoucher,  MaintType";
$proto0["m_strFrom"] = "FROM maintenenace";
$proto0["m_strWhere"] = "(MaintType =\"Accident Repair\")";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "MaintType =\"Accident Repair\"";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "MaintType",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accidentrepair"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=\"Accident Repair\"";
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
	"m_srcTableName" => "maintenenace-accidentrepair"
));

$proto5["m_sql"] = "Id";
$proto5["m_srcTableName"] = "maintenenace-accidentrepair";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accidentrepair"
));

$proto7["m_sql"] = "Fleet";
$proto7["m_srcTableName"] = "maintenenace-accidentrepair";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accidentrepair"
));

$proto9["m_sql"] = "Vehicle";
$proto9["m_srcTableName"] = "maintenenace-accidentrepair";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accidentrepair"
));

$proto11["m_sql"] = "`Type`";
$proto11["m_srcTableName"] = "maintenenace-accidentrepair";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accidentrepair"
));

$proto13["m_sql"] = "Supplier";
$proto13["m_srcTableName"] = "maintenenace-accidentrepair";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accidentrepair"
));

$proto15["m_sql"] = "Cost";
$proto15["m_srcTableName"] = "maintenenace-accidentrepair";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accidentrepair"
));

$proto17["m_sql"] = "Remarks";
$proto17["m_srcTableName"] = "maintenenace-accidentrepair";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNo",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accidentrepair"
));

$proto19["m_sql"] = "RefNo";
$proto19["m_srcTableName"] = "maintenenace-accidentrepair";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "SysDate",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accidentrepair"
));

$proto21["m_sql"] = "`SysDate`";
$proto21["m_srcTableName"] = "maintenenace-accidentrepair";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accidentrepair"
));

$proto23["m_sql"] = "`Date`";
$proto23["m_srcTableName"] = "maintenenace-accidentrepair";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accidentrepair"
));

$proto25["m_sql"] = "EnteredBy";
$proto25["m_srcTableName"] = "maintenenace-accidentrepair";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Approval",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accidentrepair"
));

$proto27["m_sql"] = "Approval";
$proto27["m_srcTableName"] = "maintenenace-accidentrepair";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "MeterReading",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accidentrepair"
));

$proto29["m_sql"] = "MeterReading";
$proto29["m_srcTableName"] = "maintenenace-accidentrepair";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "AccidentRef",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accidentrepair"
));

$proto31["m_sql"] = "AccidentRef";
$proto31["m_srcTableName"] = "maintenenace-accidentrepair";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentVoucher",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accidentrepair"
));

$proto33["m_sql"] = "PaymentVoucher";
$proto33["m_srcTableName"] = "maintenenace-accidentrepair";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "MaintType",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accidentrepair"
));

$proto35["m_sql"] = "MaintType";
$proto35["m_srcTableName"] = "maintenenace-accidentrepair";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "maintenenace";
$proto38["m_srcTableName"] = "maintenenace-accidentrepair";
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
$proto37["m_srcTableName"] = "maintenenace-accidentrepair";
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
$proto0["m_srcTableName"]="maintenenace-accidentrepair";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_maintenenace_accidentrepair = createSqlQuery_maintenenace_accidentrepair();


	
																
	
$tdatamaintenenace_accidentrepair[".sqlquery"] = $queryData_maintenenace_accidentrepair;

$tableEvents["maintenenace-accidentrepair"] = new eventsBase;
$tdatamaintenenace_accidentrepair[".hasEvents"] = false;

?>