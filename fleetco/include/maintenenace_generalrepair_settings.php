<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamaintenenace_generalrepair = array();	
	$tdatamaintenenace_generalrepair[".truncateText"] = true;
	$tdatamaintenenace_generalrepair[".NumberOfChars"] = 80; 
	$tdatamaintenenace_generalrepair[".ShortName"] = "maintenenace_generalrepair";
	$tdatamaintenenace_generalrepair[".OwnerID"] = "";
	$tdatamaintenenace_generalrepair[".OriginalTable"] = "maintenenace";

//	field labels
$fieldLabelsmaintenenace_generalrepair = array();
$fieldToolTipsmaintenenace_generalrepair = array();
$pageTitlesmaintenenace_generalrepair = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmaintenenace_generalrepair["English"] = array();
	$fieldToolTipsmaintenenace_generalrepair["English"] = array();
	$pageTitlesmaintenenace_generalrepair["English"] = array();
	$fieldLabelsmaintenenace_generalrepair["English"]["Id"] = "ID";
	$fieldToolTipsmaintenenace_generalrepair["English"]["Id"] = "";
	$fieldLabelsmaintenenace_generalrepair["English"]["Fleet"] = "Fleet";
	$fieldToolTipsmaintenenace_generalrepair["English"]["Fleet"] = "";
	$fieldLabelsmaintenenace_generalrepair["English"]["Vehicle"] = "Vehicle";
	$fieldToolTipsmaintenenace_generalrepair["English"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_generalrepair["English"]["Type"] = "Type";
	$fieldToolTipsmaintenenace_generalrepair["English"]["Type"] = "";
	$fieldLabelsmaintenenace_generalrepair["English"]["Supplier"] = "Supplier";
	$fieldToolTipsmaintenenace_generalrepair["English"]["Supplier"] = "";
	$fieldLabelsmaintenenace_generalrepair["English"]["Cost"] = "Cost";
	$fieldToolTipsmaintenenace_generalrepair["English"]["Cost"] = "Cost without VAT";
	$fieldLabelsmaintenenace_generalrepair["English"]["Remarks"] = "Remarks";
	$fieldToolTipsmaintenenace_generalrepair["English"]["Remarks"] = "";
	$fieldLabelsmaintenenace_generalrepair["English"]["RefNo"] = "PO No";
	$fieldToolTipsmaintenenace_generalrepair["English"]["RefNo"] = "";
	$fieldLabelsmaintenenace_generalrepair["English"]["SysDate"] = "System Date";
	$fieldToolTipsmaintenenace_generalrepair["English"]["SysDate"] = "";
	$fieldLabelsmaintenenace_generalrepair["English"]["Date"] = "Date";
	$fieldToolTipsmaintenenace_generalrepair["English"]["Date"] = "";
	$fieldLabelsmaintenenace_generalrepair["English"]["EnteredBy"] = "Entered By";
	$fieldToolTipsmaintenenace_generalrepair["English"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_generalrepair["English"]["Approval"] = "Edited By";
	$fieldToolTipsmaintenenace_generalrepair["English"]["Approval"] = "";
	$fieldLabelsmaintenenace_generalrepair["English"]["MeterReading"] = "Meter R.";
	$fieldToolTipsmaintenenace_generalrepair["English"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_generalrepair["English"]["AccidentRef"] = "Accid.Ref";
	$fieldToolTipsmaintenenace_generalrepair["English"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_generalrepair["English"]["PaymentVoucher"] = "Pay. Ref";
	$fieldToolTipsmaintenenace_generalrepair["English"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_generalrepair["English"]["MaintType"] = "Repair Type";
	$fieldToolTipsmaintenenace_generalrepair["English"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_generalrepair["English"]))
		$tdatamaintenenace_generalrepair[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmaintenenace_generalrepair[""] = array();
	$fieldToolTipsmaintenenace_generalrepair[""] = array();
	$pageTitlesmaintenenace_generalrepair[""] = array();
	$fieldLabelsmaintenenace_generalrepair[""]["Id"] = "Id";
	$fieldToolTipsmaintenenace_generalrepair[""]["Id"] = "";
	$fieldLabelsmaintenenace_generalrepair[""]["Fleet"] = "Fleet";
	$fieldToolTipsmaintenenace_generalrepair[""]["Fleet"] = "";
	$fieldLabelsmaintenenace_generalrepair[""]["Vehicle"] = "Vehicle";
	$fieldToolTipsmaintenenace_generalrepair[""]["Vehicle"] = "";
	$fieldLabelsmaintenenace_generalrepair[""]["Type"] = "Type";
	$fieldToolTipsmaintenenace_generalrepair[""]["Type"] = "";
	$fieldLabelsmaintenenace_generalrepair[""]["Supplier"] = "Supplier";
	$fieldToolTipsmaintenenace_generalrepair[""]["Supplier"] = "";
	$fieldLabelsmaintenenace_generalrepair[""]["Cost"] = "Cost";
	$fieldToolTipsmaintenenace_generalrepair[""]["Cost"] = "";
	$fieldLabelsmaintenenace_generalrepair[""]["Remarks"] = "Remarks";
	$fieldToolTipsmaintenenace_generalrepair[""]["Remarks"] = "";
	$fieldLabelsmaintenenace_generalrepair[""]["RefNo"] = "Ref No";
	$fieldToolTipsmaintenenace_generalrepair[""]["RefNo"] = "";
	$fieldLabelsmaintenenace_generalrepair[""]["SysDate"] = "Sys Date";
	$fieldToolTipsmaintenenace_generalrepair[""]["SysDate"] = "";
	$fieldLabelsmaintenenace_generalrepair[""]["Date"] = "Date";
	$fieldToolTipsmaintenenace_generalrepair[""]["Date"] = "";
	$fieldLabelsmaintenenace_generalrepair[""]["EnteredBy"] = "Entered By";
	$fieldToolTipsmaintenenace_generalrepair[""]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_generalrepair[""]["Approval"] = "Approval";
	$fieldToolTipsmaintenenace_generalrepair[""]["Approval"] = "";
	$fieldLabelsmaintenenace_generalrepair[""]["MeterReading"] = "Meter Reading";
	$fieldToolTipsmaintenenace_generalrepair[""]["MeterReading"] = "";
	$fieldLabelsmaintenenace_generalrepair[""]["AccidentRef"] = "Accident Ref";
	$fieldToolTipsmaintenenace_generalrepair[""]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_generalrepair[""]["PaymentVoucher"] = "Payment Voucher";
	$fieldToolTipsmaintenenace_generalrepair[""]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_generalrepair[""]["MaintType"] = "Maint Type";
	$fieldToolTipsmaintenenace_generalrepair[""]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_generalrepair[""]))
		$tdatamaintenenace_generalrepair[".isUseToolTips"] = true;
}
	
	
	$tdatamaintenenace_generalrepair[".NCSearch"] = true;



$tdatamaintenenace_generalrepair[".shortTableName"] = "maintenenace_generalrepair";
$tdatamaintenenace_generalrepair[".nSecOptions"] = 0;
$tdatamaintenenace_generalrepair[".recsPerRowList"] = 1;
$tdatamaintenenace_generalrepair[".recsPerRowPrint"] = 1;
$tdatamaintenenace_generalrepair[".mainTableOwnerID"] = "";
$tdatamaintenenace_generalrepair[".moveNext"] = 1;
$tdatamaintenenace_generalrepair[".entityType"] = 1;

$tdatamaintenenace_generalrepair[".strOriginalTableName"] = "maintenenace";




$tdatamaintenenace_generalrepair[".showAddInPopup"] = false;

$tdatamaintenenace_generalrepair[".showEditInPopup"] = false;

$tdatamaintenenace_generalrepair[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamaintenenace_generalrepair[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamaintenenace_generalrepair[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatamaintenenace_generalrepair[".listAjax"] = true;
else 
	$tdatamaintenenace_generalrepair[".listAjax"] = false;

	$tdatamaintenenace_generalrepair[".audit"] = false;

	$tdatamaintenenace_generalrepair[".locking"] = false;

$tdatamaintenenace_generalrepair[".edit"] = true;
$tdatamaintenenace_generalrepair[".afterEditAction"] = 1;
$tdatamaintenenace_generalrepair[".closePopupAfterEdit"] = 1;
$tdatamaintenenace_generalrepair[".afterEditActionDetTable"] = "";

$tdatamaintenenace_generalrepair[".add"] = true;
$tdatamaintenenace_generalrepair[".afterAddAction"] = 1;
$tdatamaintenenace_generalrepair[".closePopupAfterAdd"] = 1;
$tdatamaintenenace_generalrepair[".afterAddActionDetTable"] = "";

$tdatamaintenenace_generalrepair[".list"] = true;

$tdatamaintenenace_generalrepair[".view"] = true;

$tdatamaintenenace_generalrepair[".import"] = true;

$tdatamaintenenace_generalrepair[".exportTo"] = true;

$tdatamaintenenace_generalrepair[".printFriendly"] = true;

$tdatamaintenenace_generalrepair[".delete"] = true;

$tdatamaintenenace_generalrepair[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatamaintenenace_generalrepair[".searchSaving"] = false;
//

$tdatamaintenenace_generalrepair[".showSearchPanel"] = true;
		$tdatamaintenenace_generalrepair[".flexibleSearch"] = true;		

if (isMobile())
	$tdatamaintenenace_generalrepair[".isUseAjaxSuggest"] = false;
else 
	$tdatamaintenenace_generalrepair[".isUseAjaxSuggest"] = true;

$tdatamaintenenace_generalrepair[".rowHighlite"] = true;



$tdatamaintenenace_generalrepair[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamaintenenace_generalrepair[".isUseTimeForSearch"] = false;





$tdatamaintenenace_generalrepair[".allSearchFields"] = array();
$tdatamaintenenace_generalrepair[".filterFields"] = array();
$tdatamaintenenace_generalrepair[".requiredSearchFields"] = array();

$tdatamaintenenace_generalrepair[".allSearchFields"][] = "Date";
	$tdatamaintenenace_generalrepair[".allSearchFields"][] = "MaintType";
	$tdatamaintenenace_generalrepair[".allSearchFields"][] = "Vehicle";
	$tdatamaintenenace_generalrepair[".allSearchFields"][] = "Fleet";
	$tdatamaintenenace_generalrepair[".allSearchFields"][] = "Type";
	$tdatamaintenenace_generalrepair[".allSearchFields"][] = "MeterReading";
	$tdatamaintenenace_generalrepair[".allSearchFields"][] = "RefNo";
	$tdatamaintenenace_generalrepair[".allSearchFields"][] = "Supplier";
	$tdatamaintenenace_generalrepair[".allSearchFields"][] = "Cost";
	$tdatamaintenenace_generalrepair[".allSearchFields"][] = "PaymentVoucher";
	$tdatamaintenenace_generalrepair[".allSearchFields"][] = "Remarks";
	$tdatamaintenenace_generalrepair[".allSearchFields"][] = "Approval";
	$tdatamaintenenace_generalrepair[".allSearchFields"][] = "EnteredBy";
	$tdatamaintenenace_generalrepair[".allSearchFields"][] = "SysDate";
	

$tdatamaintenenace_generalrepair[".googleLikeFields"] = array();
$tdatamaintenenace_generalrepair[".googleLikeFields"][] = "Id";
$tdatamaintenenace_generalrepair[".googleLikeFields"][] = "Fleet";
$tdatamaintenenace_generalrepair[".googleLikeFields"][] = "Vehicle";
$tdatamaintenenace_generalrepair[".googleLikeFields"][] = "Type";
$tdatamaintenenace_generalrepair[".googleLikeFields"][] = "Supplier";
$tdatamaintenenace_generalrepair[".googleLikeFields"][] = "Cost";
$tdatamaintenenace_generalrepair[".googleLikeFields"][] = "Remarks";
$tdatamaintenenace_generalrepair[".googleLikeFields"][] = "RefNo";
$tdatamaintenenace_generalrepair[".googleLikeFields"][] = "SysDate";
$tdatamaintenenace_generalrepair[".googleLikeFields"][] = "Date";
$tdatamaintenenace_generalrepair[".googleLikeFields"][] = "EnteredBy";
$tdatamaintenenace_generalrepair[".googleLikeFields"][] = "Approval";
$tdatamaintenenace_generalrepair[".googleLikeFields"][] = "MeterReading";
$tdatamaintenenace_generalrepair[".googleLikeFields"][] = "AccidentRef";
$tdatamaintenenace_generalrepair[".googleLikeFields"][] = "PaymentVoucher";
$tdatamaintenenace_generalrepair[".googleLikeFields"][] = "MaintType";


$tdatamaintenenace_generalrepair[".advSearchFields"] = array();
$tdatamaintenenace_generalrepair[".advSearchFields"][] = "Date";
$tdatamaintenenace_generalrepair[".advSearchFields"][] = "MaintType";
$tdatamaintenenace_generalrepair[".advSearchFields"][] = "Vehicle";
$tdatamaintenenace_generalrepair[".advSearchFields"][] = "Fleet";
$tdatamaintenenace_generalrepair[".advSearchFields"][] = "Type";
$tdatamaintenenace_generalrepair[".advSearchFields"][] = "MeterReading";
$tdatamaintenenace_generalrepair[".advSearchFields"][] = "RefNo";
$tdatamaintenenace_generalrepair[".advSearchFields"][] = "Supplier";
$tdatamaintenenace_generalrepair[".advSearchFields"][] = "Cost";
$tdatamaintenenace_generalrepair[".advSearchFields"][] = "PaymentVoucher";
$tdatamaintenenace_generalrepair[".advSearchFields"][] = "Remarks";
$tdatamaintenenace_generalrepair[".advSearchFields"][] = "Approval";
$tdatamaintenenace_generalrepair[".advSearchFields"][] = "EnteredBy";
$tdatamaintenenace_generalrepair[".advSearchFields"][] = "SysDate";

$tdatamaintenenace_generalrepair[".tableType"] = "list";

$tdatamaintenenace_generalrepair[".printerPageOrientation"] = 0;
$tdatamaintenenace_generalrepair[".nPrinterPageScale"] = 100;

$tdatamaintenenace_generalrepair[".nPrinterSplitRecords"] = 40;

$tdatamaintenenace_generalrepair[".nPrinterPDFSplitRecords"] = 40;



$tdatamaintenenace_generalrepair[".geocodingEnabled"] = false;




	





// view page pdf
$tdatamaintenenace_generalrepair[".isViewPagePDF"] = true;
$tdatamaintenenace_generalrepair[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatamaintenenace_generalrepair[".isPrinterPagePDF"] = true;
$tdatamaintenenace_generalrepair[".nPrinterPagePDFScale"] = 100;

$tdatamaintenenace_generalrepair[".totalsFields"] = array();
$tdatamaintenenace_generalrepair[".totalsFields"][] = array(
	"fName" => "Cost", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatamaintenenace_generalrepair[".pageSize"] = 20;

$tdatamaintenenace_generalrepair[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamaintenenace_generalrepair[".strOrderBy"] = $tstrOrderBy;

$tdatamaintenenace_generalrepair[".orderindexes"] = array();

$tdatamaintenenace_generalrepair[".sqlHead"] = "SELECT Id,  Fleet,  Vehicle,  `Type`,  Supplier,  Cost,  Remarks,  RefNo,  `SysDate`,  `Date`,  EnteredBy,  Approval,  MeterReading,  AccidentRef,  PaymentVoucher,  MaintType";
$tdatamaintenenace_generalrepair[".sqlFrom"] = "FROM maintenenace";
$tdatamaintenenace_generalrepair[".sqlWhereExpr"] = "(MaintType =\"General Repair\")";
$tdatamaintenenace_generalrepair[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatamaintenenace_generalrepair[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamaintenenace_generalrepair[".arrGroupsPerPage"] = $arrGPP;

$tdatamaintenenace_generalrepair[".highlightSearchResults"] = true;

$tableKeysmaintenenace_generalrepair = array();
$tableKeysmaintenenace_generalrepair[] = "Id";
$tdatamaintenenace_generalrepair[".Keys"] = $tableKeysmaintenenace_generalrepair;

$tdatamaintenenace_generalrepair[".listFields"] = array();
$tdatamaintenenace_generalrepair[".listFields"][] = "Date";
$tdatamaintenenace_generalrepair[".listFields"][] = "Id";
$tdatamaintenenace_generalrepair[".listFields"][] = "MaintType";
$tdatamaintenenace_generalrepair[".listFields"][] = "Vehicle";
$tdatamaintenenace_generalrepair[".listFields"][] = "Fleet";
$tdatamaintenenace_generalrepair[".listFields"][] = "Type";
$tdatamaintenenace_generalrepair[".listFields"][] = "MeterReading";
$tdatamaintenenace_generalrepair[".listFields"][] = "RefNo";
$tdatamaintenenace_generalrepair[".listFields"][] = "Supplier";
$tdatamaintenenace_generalrepair[".listFields"][] = "Cost";
$tdatamaintenenace_generalrepair[".listFields"][] = "PaymentVoucher";
$tdatamaintenenace_generalrepair[".listFields"][] = "Remarks";
$tdatamaintenenace_generalrepair[".listFields"][] = "EnteredBy";

$tdatamaintenenace_generalrepair[".hideMobileList"] = array();


$tdatamaintenenace_generalrepair[".viewFields"] = array();
$tdatamaintenenace_generalrepair[".viewFields"][] = "Date";
$tdatamaintenenace_generalrepair[".viewFields"][] = "Id";
$tdatamaintenenace_generalrepair[".viewFields"][] = "MaintType";
$tdatamaintenenace_generalrepair[".viewFields"][] = "Vehicle";
$tdatamaintenenace_generalrepair[".viewFields"][] = "Fleet";
$tdatamaintenenace_generalrepair[".viewFields"][] = "Type";
$tdatamaintenenace_generalrepair[".viewFields"][] = "MeterReading";
$tdatamaintenenace_generalrepair[".viewFields"][] = "RefNo";
$tdatamaintenenace_generalrepair[".viewFields"][] = "Supplier";
$tdatamaintenenace_generalrepair[".viewFields"][] = "Cost";
$tdatamaintenenace_generalrepair[".viewFields"][] = "PaymentVoucher";
$tdatamaintenenace_generalrepair[".viewFields"][] = "Remarks";
$tdatamaintenenace_generalrepair[".viewFields"][] = "EnteredBy";
$tdatamaintenenace_generalrepair[".viewFields"][] = "Approval";
$tdatamaintenenace_generalrepair[".viewFields"][] = "SysDate";

$tdatamaintenenace_generalrepair[".addFields"] = array();
$tdatamaintenenace_generalrepair[".addFields"][] = "MaintType";
$tdatamaintenenace_generalrepair[".addFields"][] = "Fleet";
$tdatamaintenenace_generalrepair[".addFields"][] = "Vehicle";
$tdatamaintenenace_generalrepair[".addFields"][] = "Type";
$tdatamaintenenace_generalrepair[".addFields"][] = "Date";
$tdatamaintenenace_generalrepair[".addFields"][] = "MeterReading";
$tdatamaintenenace_generalrepair[".addFields"][] = "RefNo";
$tdatamaintenenace_generalrepair[".addFields"][] = "Supplier";
$tdatamaintenenace_generalrepair[".addFields"][] = "Cost";
$tdatamaintenenace_generalrepair[".addFields"][] = "PaymentVoucher";
$tdatamaintenenace_generalrepair[".addFields"][] = "Remarks";
$tdatamaintenenace_generalrepair[".addFields"][] = "EnteredBy";
$tdatamaintenenace_generalrepair[".addFields"][] = "SysDate";

$tdatamaintenenace_generalrepair[".masterListFields"] = array();
$tdatamaintenenace_generalrepair[".masterListFields"][] = "Date";
$tdatamaintenenace_generalrepair[".masterListFields"][] = "Id";
$tdatamaintenenace_generalrepair[".masterListFields"][] = "MaintType";
$tdatamaintenenace_generalrepair[".masterListFields"][] = "Vehicle";
$tdatamaintenenace_generalrepair[".masterListFields"][] = "Fleet";
$tdatamaintenenace_generalrepair[".masterListFields"][] = "Type";
$tdatamaintenenace_generalrepair[".masterListFields"][] = "MeterReading";
$tdatamaintenenace_generalrepair[".masterListFields"][] = "RefNo";
$tdatamaintenenace_generalrepair[".masterListFields"][] = "Supplier";
$tdatamaintenenace_generalrepair[".masterListFields"][] = "Cost";
$tdatamaintenenace_generalrepair[".masterListFields"][] = "AccidentRef";
$tdatamaintenenace_generalrepair[".masterListFields"][] = "PaymentVoucher";
$tdatamaintenenace_generalrepair[".masterListFields"][] = "Remarks";
$tdatamaintenenace_generalrepair[".masterListFields"][] = "EnteredBy";
$tdatamaintenenace_generalrepair[".masterListFields"][] = "Approval";
$tdatamaintenenace_generalrepair[".masterListFields"][] = "SysDate";

$tdatamaintenenace_generalrepair[".inlineAddFields"] = array();

$tdatamaintenenace_generalrepair[".editFields"] = array();
$tdatamaintenenace_generalrepair[".editFields"][] = "Date";
$tdatamaintenenace_generalrepair[".editFields"][] = "MaintType";
$tdatamaintenenace_generalrepair[".editFields"][] = "Vehicle";
$tdatamaintenenace_generalrepair[".editFields"][] = "Fleet";
$tdatamaintenenace_generalrepair[".editFields"][] = "Type";
$tdatamaintenenace_generalrepair[".editFields"][] = "MeterReading";
$tdatamaintenenace_generalrepair[".editFields"][] = "RefNo";
$tdatamaintenenace_generalrepair[".editFields"][] = "Supplier";
$tdatamaintenenace_generalrepair[".editFields"][] = "Cost";
$tdatamaintenenace_generalrepair[".editFields"][] = "PaymentVoucher";
$tdatamaintenenace_generalrepair[".editFields"][] = "Remarks";
$tdatamaintenenace_generalrepair[".editFields"][] = "Approval";
$tdatamaintenenace_generalrepair[".editFields"][] = "EnteredBy";
$tdatamaintenenace_generalrepair[".editFields"][] = "SysDate";

$tdatamaintenenace_generalrepair[".inlineEditFields"] = array();

$tdatamaintenenace_generalrepair[".exportFields"] = array();
$tdatamaintenenace_generalrepair[".exportFields"][] = "Date";
$tdatamaintenenace_generalrepair[".exportFields"][] = "Id";
$tdatamaintenenace_generalrepair[".exportFields"][] = "MaintType";
$tdatamaintenenace_generalrepair[".exportFields"][] = "Vehicle";
$tdatamaintenenace_generalrepair[".exportFields"][] = "Fleet";
$tdatamaintenenace_generalrepair[".exportFields"][] = "Type";
$tdatamaintenenace_generalrepair[".exportFields"][] = "MeterReading";
$tdatamaintenenace_generalrepair[".exportFields"][] = "RefNo";
$tdatamaintenenace_generalrepair[".exportFields"][] = "Supplier";
$tdatamaintenenace_generalrepair[".exportFields"][] = "Cost";
$tdatamaintenenace_generalrepair[".exportFields"][] = "PaymentVoucher";
$tdatamaintenenace_generalrepair[".exportFields"][] = "Remarks";
$tdatamaintenenace_generalrepair[".exportFields"][] = "EnteredBy";
$tdatamaintenenace_generalrepair[".exportFields"][] = "Approval";
$tdatamaintenenace_generalrepair[".exportFields"][] = "SysDate";

$tdatamaintenenace_generalrepair[".importFields"] = array();
$tdatamaintenenace_generalrepair[".importFields"][] = "Id";
$tdatamaintenenace_generalrepair[".importFields"][] = "Fleet";
$tdatamaintenenace_generalrepair[".importFields"][] = "Vehicle";
$tdatamaintenenace_generalrepair[".importFields"][] = "Type";
$tdatamaintenenace_generalrepair[".importFields"][] = "Supplier";
$tdatamaintenenace_generalrepair[".importFields"][] = "Cost";
$tdatamaintenenace_generalrepair[".importFields"][] = "Remarks";
$tdatamaintenenace_generalrepair[".importFields"][] = "RefNo";
$tdatamaintenenace_generalrepair[".importFields"][] = "SysDate";
$tdatamaintenenace_generalrepair[".importFields"][] = "Date";
$tdatamaintenenace_generalrepair[".importFields"][] = "EnteredBy";
$tdatamaintenenace_generalrepair[".importFields"][] = "Approval";
$tdatamaintenenace_generalrepair[".importFields"][] = "MeterReading";
$tdatamaintenenace_generalrepair[".importFields"][] = "PaymentVoucher";
$tdatamaintenenace_generalrepair[".importFields"][] = "MaintType";

$tdatamaintenenace_generalrepair[".printFields"] = array();
$tdatamaintenenace_generalrepair[".printFields"][] = "Date";
$tdatamaintenenace_generalrepair[".printFields"][] = "Id";
$tdatamaintenenace_generalrepair[".printFields"][] = "MaintType";
$tdatamaintenenace_generalrepair[".printFields"][] = "Vehicle";
$tdatamaintenenace_generalrepair[".printFields"][] = "Fleet";
$tdatamaintenenace_generalrepair[".printFields"][] = "Type";
$tdatamaintenenace_generalrepair[".printFields"][] = "MeterReading";
$tdatamaintenenace_generalrepair[".printFields"][] = "RefNo";
$tdatamaintenenace_generalrepair[".printFields"][] = "Supplier";
$tdatamaintenenace_generalrepair[".printFields"][] = "Cost";
$tdatamaintenenace_generalrepair[".printFields"][] = "PaymentVoucher";
$tdatamaintenenace_generalrepair[".printFields"][] = "Remarks";
$tdatamaintenenace_generalrepair[".printFields"][] = "EnteredBy";
$tdatamaintenenace_generalrepair[".printFields"][] = "Approval";
$tdatamaintenenace_generalrepair[".printFields"][] = "SysDate";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_generalrepair","Id"); 
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
	
	
	
	

	

	
	$tdatamaintenenace_generalrepair["Id"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_generalrepair","Fleet"); 
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

	

	
	$tdatamaintenenace_generalrepair["Fleet"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_generalrepair","Vehicle"); 
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

	

	
	$tdatamaintenenace_generalrepair["Vehicle"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_generalrepair","Type"); 
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

	

	
	$tdatamaintenenace_generalrepair["Type"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_generalrepair","Supplier"); 
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

	

	
	$tdatamaintenenace_generalrepair["Supplier"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_generalrepair","Cost"); 
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

	

	
	$tdatamaintenenace_generalrepair["Cost"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_generalrepair","Remarks"); 
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

	

	
	$tdatamaintenenace_generalrepair["Remarks"] = $fdata;
//	RefNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "RefNo";
	$fdata["GoodName"] = "RefNo";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_generalrepair","RefNo"); 
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

	

	
	$tdatamaintenenace_generalrepair["RefNo"] = $fdata;
//	SysDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SysDate";
	$fdata["GoodName"] = "SysDate";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_generalrepair","SysDate"); 
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

	

	
	$tdatamaintenenace_generalrepair["SysDate"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_generalrepair","Date"); 
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

	

	
	$tdatamaintenenace_generalrepair["Date"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_generalrepair","EnteredBy"); 
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

	

	
	$tdatamaintenenace_generalrepair["EnteredBy"] = $fdata;
//	Approval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Approval";
	$fdata["GoodName"] = "Approval";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_generalrepair","Approval"); 
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

	

	
	$tdatamaintenenace_generalrepair["Approval"] = $fdata;
//	MeterReading
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "MeterReading";
	$fdata["GoodName"] = "MeterReading";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_generalrepair","MeterReading"); 
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

	

	
	$tdatamaintenenace_generalrepair["MeterReading"] = $fdata;
//	AccidentRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "AccidentRef";
	$fdata["GoodName"] = "AccidentRef";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_generalrepair","AccidentRef"); 
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
	
	
	
	

	

	
	$tdatamaintenenace_generalrepair["AccidentRef"] = $fdata;
//	PaymentVoucher
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "PaymentVoucher";
	$fdata["GoodName"] = "PaymentVoucher";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_generalrepair","PaymentVoucher"); 
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

	

	
	$tdatamaintenenace_generalrepair["PaymentVoucher"] = $fdata;
//	MaintType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "MaintType";
	$fdata["GoodName"] = "MaintType";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_generalrepair","MaintType"); 
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

	

	
	$tdatamaintenenace_generalrepair["MaintType"] = $fdata;

	
$tables_data["maintenenace-generalrepair"]=&$tdatamaintenenace_generalrepair;
$field_labels["maintenenace_generalrepair"] = &$fieldLabelsmaintenenace_generalrepair;
$fieldToolTips["maintenenace-generalrepair"] = &$fieldToolTipsmaintenenace_generalrepair;
$page_titles["maintenenace_generalrepair"] = &$pageTitlesmaintenenace_generalrepair;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["maintenenace-generalrepair"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["maintenenace-generalrepair"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_maintenenace_generalrepair()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  Fleet,  Vehicle,  `Type`,  Supplier,  Cost,  Remarks,  RefNo,  `SysDate`,  `Date`,  EnteredBy,  Approval,  MeterReading,  AccidentRef,  PaymentVoucher,  MaintType";
$proto0["m_strFrom"] = "FROM maintenenace";
$proto0["m_strWhere"] = "(MaintType =\"General Repair\")";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "MaintType =\"General Repair\"";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "MaintType",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-generalrepair"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=\"General Repair\"";
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
	"m_srcTableName" => "maintenenace-generalrepair"
));

$proto5["m_sql"] = "Id";
$proto5["m_srcTableName"] = "maintenenace-generalrepair";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-generalrepair"
));

$proto7["m_sql"] = "Fleet";
$proto7["m_srcTableName"] = "maintenenace-generalrepair";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-generalrepair"
));

$proto9["m_sql"] = "Vehicle";
$proto9["m_srcTableName"] = "maintenenace-generalrepair";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-generalrepair"
));

$proto11["m_sql"] = "`Type`";
$proto11["m_srcTableName"] = "maintenenace-generalrepair";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-generalrepair"
));

$proto13["m_sql"] = "Supplier";
$proto13["m_srcTableName"] = "maintenenace-generalrepair";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-generalrepair"
));

$proto15["m_sql"] = "Cost";
$proto15["m_srcTableName"] = "maintenenace-generalrepair";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-generalrepair"
));

$proto17["m_sql"] = "Remarks";
$proto17["m_srcTableName"] = "maintenenace-generalrepair";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNo",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-generalrepair"
));

$proto19["m_sql"] = "RefNo";
$proto19["m_srcTableName"] = "maintenenace-generalrepair";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "SysDate",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-generalrepair"
));

$proto21["m_sql"] = "`SysDate`";
$proto21["m_srcTableName"] = "maintenenace-generalrepair";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-generalrepair"
));

$proto23["m_sql"] = "`Date`";
$proto23["m_srcTableName"] = "maintenenace-generalrepair";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-generalrepair"
));

$proto25["m_sql"] = "EnteredBy";
$proto25["m_srcTableName"] = "maintenenace-generalrepair";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Approval",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-generalrepair"
));

$proto27["m_sql"] = "Approval";
$proto27["m_srcTableName"] = "maintenenace-generalrepair";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "MeterReading",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-generalrepair"
));

$proto29["m_sql"] = "MeterReading";
$proto29["m_srcTableName"] = "maintenenace-generalrepair";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "AccidentRef",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-generalrepair"
));

$proto31["m_sql"] = "AccidentRef";
$proto31["m_srcTableName"] = "maintenenace-generalrepair";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentVoucher",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-generalrepair"
));

$proto33["m_sql"] = "PaymentVoucher";
$proto33["m_srcTableName"] = "maintenenace-generalrepair";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "MaintType",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-generalrepair"
));

$proto35["m_sql"] = "MaintType";
$proto35["m_srcTableName"] = "maintenenace-generalrepair";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "maintenenace";
$proto38["m_srcTableName"] = "maintenenace-generalrepair";
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
$proto37["m_srcTableName"] = "maintenenace-generalrepair";
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
$proto0["m_srcTableName"]="maintenenace-generalrepair";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_maintenenace_generalrepair = createSqlQuery_maintenenace_generalrepair();


	
																
	
$tdatamaintenenace_generalrepair[".sqlquery"] = $queryData_maintenenace_generalrepair;

$tableEvents["maintenenace-generalrepair"] = new eventsBase;
$tdatamaintenenace_generalrepair[".hasEvents"] = false;

?>