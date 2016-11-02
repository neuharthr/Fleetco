<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacreategrn_receiveafterrebuild = array();
	$tdatacreategrn_receiveafterrebuild[".truncateText"] = true;
	$tdatacreategrn_receiveafterrebuild[".NumberOfChars"] = 80;
	$tdatacreategrn_receiveafterrebuild[".ShortName"] = "creategrn_receiveafterrebuild";
	$tdatacreategrn_receiveafterrebuild[".OwnerID"] = "";
	$tdatacreategrn_receiveafterrebuild[".OriginalTable"] = "creategrn";

//	field labels
$fieldLabelscreategrn_receiveafterrebuild = array();
$fieldToolTipscreategrn_receiveafterrebuild = array();
$pageTitlescreategrn_receiveafterrebuild = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscreategrn_receiveafterrebuild["English"] = array();
	$fieldToolTipscreategrn_receiveafterrebuild["English"] = array();
	$pageTitlescreategrn_receiveafterrebuild["English"] = array();
	$fieldLabelscreategrn_receiveafterrebuild["English"]["ItemCode"] = "Tyre Code";
	$fieldToolTipscreategrn_receiveafterrebuild["English"]["ItemCode"] = "";
	$fieldLabelscreategrn_receiveafterrebuild["English"]["Brand"] = "Brand";
	$fieldToolTipscreategrn_receiveafterrebuild["English"]["Brand"] = "";
	$fieldLabelscreategrn_receiveafterrebuild["English"]["Description"] = "Descr.";
	$fieldToolTipscreategrn_receiveafterrebuild["English"]["Description"] = "";
	$fieldLabelscreategrn_receiveafterrebuild["English"]["Supplier"] = "Supplier";
	$fieldToolTipscreategrn_receiveafterrebuild["English"]["Supplier"] = "";
	$fieldLabelscreategrn_receiveafterrebuild["English"]["Quantity"] = "Qty";
	$fieldToolTipscreategrn_receiveafterrebuild["English"]["Quantity"] = "";
	$fieldLabelscreategrn_receiveafterrebuild["English"]["RemovedFrom"] = "Removed From";
	$fieldToolTipscreategrn_receiveafterrebuild["English"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_receiveafterrebuild["English"]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn_receiveafterrebuild["English"]["SystemDate"] = "";
	$fieldLabelscreategrn_receiveafterrebuild["English"]["GRNDate"] = "Date";
	$fieldToolTipscreategrn_receiveafterrebuild["English"]["GRNDate"] = "";
	$fieldLabelscreategrn_receiveafterrebuild["English"]["EnteredBy"] = "Entered";
	$fieldToolTipscreategrn_receiveafterrebuild["English"]["EnteredBy"] = "";
	$fieldLabelscreategrn_receiveafterrebuild["English"]["ApprovedBy"] = "Edited By";
	$fieldToolTipscreategrn_receiveafterrebuild["English"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_receiveafterrebuild["English"]["Status"] = "Type";
	$fieldToolTipscreategrn_receiveafterrebuild["English"]["Status"] = "";
	$fieldLabelscreategrn_receiveafterrebuild["English"]["ID"] = "ID";
	$fieldToolTipscreategrn_receiveafterrebuild["English"]["ID"] = "";
	$fieldLabelscreategrn_receiveafterrebuild["English"]["UnitPrice"] = "Unit Cost";
	$fieldToolTipscreategrn_receiveafterrebuild["English"]["UnitPrice"] = "";
	$fieldLabelscreategrn_receiveafterrebuild["English"]["RefNumber"] = "PO Ref.";
	$fieldToolTipscreategrn_receiveafterrebuild["English"]["RefNumber"] = "";
	$fieldLabelscreategrn_receiveafterrebuild["English"]["Cost"] = "Cost";
	$fieldToolTipscreategrn_receiveafterrebuild["English"]["Cost"] = "";
	$fieldLabelscreategrn_receiveafterrebuild["English"]["CurrentStock"] = "In-Stock";
	$fieldToolTipscreategrn_receiveafterrebuild["English"]["CurrentStock"] = "";
	$fieldLabelscreategrn_receiveafterrebuild["English"]["Fleet"] = "Fleet";
	$fieldToolTipscreategrn_receiveafterrebuild["English"]["Fleet"] = "";
	if (count($fieldToolTipscreategrn_receiveafterrebuild["English"]))
		$tdatacreategrn_receiveafterrebuild[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscreategrn_receiveafterrebuild[""] = array();
	$fieldToolTipscreategrn_receiveafterrebuild[""] = array();
	$pageTitlescreategrn_receiveafterrebuild[""] = array();
	if (count($fieldToolTipscreategrn_receiveafterrebuild[""]))
		$tdatacreategrn_receiveafterrebuild[".isUseToolTips"] = true;
}


	$tdatacreategrn_receiveafterrebuild[".NCSearch"] = true;



$tdatacreategrn_receiveafterrebuild[".shortTableName"] = "creategrn_receiveafterrebuild";
$tdatacreategrn_receiveafterrebuild[".nSecOptions"] = 0;
$tdatacreategrn_receiveafterrebuild[".recsPerRowPrint"] = 1;
$tdatacreategrn_receiveafterrebuild[".mainTableOwnerID"] = "";
$tdatacreategrn_receiveafterrebuild[".moveNext"] = 1;
$tdatacreategrn_receiveafterrebuild[".entityType"] = 1;

$tdatacreategrn_receiveafterrebuild[".strOriginalTableName"] = "creategrn";

		 



$tdatacreategrn_receiveafterrebuild[".showAddInPopup"] = false;

$tdatacreategrn_receiveafterrebuild[".showEditInPopup"] = false;

$tdatacreategrn_receiveafterrebuild[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacreategrn_receiveafterrebuild[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacreategrn_receiveafterrebuild[".fieldsForRegister"] = array();

	$tdatacreategrn_receiveafterrebuild[".listAjax"] = true;

	$tdatacreategrn_receiveafterrebuild[".audit"] = false;

	$tdatacreategrn_receiveafterrebuild[".locking"] = false;

$tdatacreategrn_receiveafterrebuild[".edit"] = true;
$tdatacreategrn_receiveafterrebuild[".afterEditAction"] = 1;
$tdatacreategrn_receiveafterrebuild[".closePopupAfterEdit"] = 1;
$tdatacreategrn_receiveafterrebuild[".afterEditActionDetTable"] = "";

$tdatacreategrn_receiveafterrebuild[".add"] = true;
$tdatacreategrn_receiveafterrebuild[".afterAddAction"] = 1;
$tdatacreategrn_receiveafterrebuild[".closePopupAfterAdd"] = 1;
$tdatacreategrn_receiveafterrebuild[".afterAddActionDetTable"] = "Detail tables not found!";

$tdatacreategrn_receiveafterrebuild[".list"] = true;

$tdatacreategrn_receiveafterrebuild[".view"] = true;

$tdatacreategrn_receiveafterrebuild[".import"] = true;

$tdatacreategrn_receiveafterrebuild[".exportTo"] = true;

$tdatacreategrn_receiveafterrebuild[".printFriendly"] = true;

$tdatacreategrn_receiveafterrebuild[".delete"] = true;

$tdatacreategrn_receiveafterrebuild[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacreategrn_receiveafterrebuild[".searchSaving"] = false;
//

$tdatacreategrn_receiveafterrebuild[".showSearchPanel"] = true;
		$tdatacreategrn_receiveafterrebuild[".flexibleSearch"] = true;

$tdatacreategrn_receiveafterrebuild[".isUseAjaxSuggest"] = true;

$tdatacreategrn_receiveafterrebuild[".rowHighlite"] = true;



$tdatacreategrn_receiveafterrebuild[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacreategrn_receiveafterrebuild[".isUseTimeForSearch"] = false;





$tdatacreategrn_receiveafterrebuild[".allSearchFields"] = array();
$tdatacreategrn_receiveafterrebuild[".filterFields"] = array();
$tdatacreategrn_receiveafterrebuild[".requiredSearchFields"] = array();

$tdatacreategrn_receiveafterrebuild[".allSearchFields"][] = "Status";
	$tdatacreategrn_receiveafterrebuild[".allSearchFields"][] = "Fleet";
	$tdatacreategrn_receiveafterrebuild[".allSearchFields"][] = "GRNDate";
	$tdatacreategrn_receiveafterrebuild[".allSearchFields"][] = "ItemCode";
	$tdatacreategrn_receiveafterrebuild[".allSearchFields"][] = "Brand";
	$tdatacreategrn_receiveafterrebuild[".allSearchFields"][] = "Description";
	$tdatacreategrn_receiveafterrebuild[".allSearchFields"][] = "Supplier";
	$tdatacreategrn_receiveafterrebuild[".allSearchFields"][] = "UnitPrice";
	$tdatacreategrn_receiveafterrebuild[".allSearchFields"][] = "Quantity";
	$tdatacreategrn_receiveafterrebuild[".allSearchFields"][] = "RefNumber";
	$tdatacreategrn_receiveafterrebuild[".allSearchFields"][] = "SystemDate";
	$tdatacreategrn_receiveafterrebuild[".allSearchFields"][] = "Cost";
	$tdatacreategrn_receiveafterrebuild[".allSearchFields"][] = "EnteredBy";
	

$tdatacreategrn_receiveafterrebuild[".googleLikeFields"] = array();
$tdatacreategrn_receiveafterrebuild[".googleLikeFields"][] = "ID";
$tdatacreategrn_receiveafterrebuild[".googleLikeFields"][] = "ItemCode";
$tdatacreategrn_receiveafterrebuild[".googleLikeFields"][] = "Brand";
$tdatacreategrn_receiveafterrebuild[".googleLikeFields"][] = "Description";
$tdatacreategrn_receiveafterrebuild[".googleLikeFields"][] = "Supplier";
$tdatacreategrn_receiveafterrebuild[".googleLikeFields"][] = "Quantity";
$tdatacreategrn_receiveafterrebuild[".googleLikeFields"][] = "RemovedFrom";
$tdatacreategrn_receiveafterrebuild[".googleLikeFields"][] = "SystemDate";
$tdatacreategrn_receiveafterrebuild[".googleLikeFields"][] = "GRNDate";
$tdatacreategrn_receiveafterrebuild[".googleLikeFields"][] = "EnteredBy";
$tdatacreategrn_receiveafterrebuild[".googleLikeFields"][] = "ApprovedBy";
$tdatacreategrn_receiveafterrebuild[".googleLikeFields"][] = "UnitPrice";
$tdatacreategrn_receiveafterrebuild[".googleLikeFields"][] = "Status";
$tdatacreategrn_receiveafterrebuild[".googleLikeFields"][] = "RefNumber";
$tdatacreategrn_receiveafterrebuild[".googleLikeFields"][] = "CurrentStock";
$tdatacreategrn_receiveafterrebuild[".googleLikeFields"][] = "Fleet";
$tdatacreategrn_receiveafterrebuild[".googleLikeFields"][] = "Cost";


$tdatacreategrn_receiveafterrebuild[".advSearchFields"] = array();
$tdatacreategrn_receiveafterrebuild[".advSearchFields"][] = "Status";
$tdatacreategrn_receiveafterrebuild[".advSearchFields"][] = "Fleet";
$tdatacreategrn_receiveafterrebuild[".advSearchFields"][] = "GRNDate";
$tdatacreategrn_receiveafterrebuild[".advSearchFields"][] = "ItemCode";
$tdatacreategrn_receiveafterrebuild[".advSearchFields"][] = "Brand";
$tdatacreategrn_receiveafterrebuild[".advSearchFields"][] = "Description";
$tdatacreategrn_receiveafterrebuild[".advSearchFields"][] = "Supplier";
$tdatacreategrn_receiveafterrebuild[".advSearchFields"][] = "UnitPrice";
$tdatacreategrn_receiveafterrebuild[".advSearchFields"][] = "Quantity";
$tdatacreategrn_receiveafterrebuild[".advSearchFields"][] = "RefNumber";
$tdatacreategrn_receiveafterrebuild[".advSearchFields"][] = "SystemDate";
$tdatacreategrn_receiveafterrebuild[".advSearchFields"][] = "Cost";
$tdatacreategrn_receiveafterrebuild[".advSearchFields"][] = "EnteredBy";

$tdatacreategrn_receiveafterrebuild[".tableType"] = "list";

$tdatacreategrn_receiveafterrebuild[".printerPageOrientation"] = 0;
$tdatacreategrn_receiveafterrebuild[".nPrinterPageScale"] = 100;

$tdatacreategrn_receiveafterrebuild[".nPrinterSplitRecords"] = 40;

$tdatacreategrn_receiveafterrebuild[".nPrinterPDFSplitRecords"] = 40;



$tdatacreategrn_receiveafterrebuild[".geocodingEnabled"] = false;





$tdatacreategrn_receiveafterrebuild[".listGridLayout"] = 3;





// view page pdf
$tdatacreategrn_receiveafterrebuild[".isViewPagePDF"] = true;
$tdatacreategrn_receiveafterrebuild[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatacreategrn_receiveafterrebuild[".isPrinterPagePDF"] = true;
$tdatacreategrn_receiveafterrebuild[".nPrinterPagePDFScale"] = 100;

$tdatacreategrn_receiveafterrebuild[".totalsFields"] = array();
$tdatacreategrn_receiveafterrebuild[".totalsFields"][] = array(
	"fName" => "Cost",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatacreategrn_receiveafterrebuild[".pageSize"] = 20;

$tdatacreategrn_receiveafterrebuild[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacreategrn_receiveafterrebuild[".strOrderBy"] = $tstrOrderBy;

$tdatacreategrn_receiveafterrebuild[".orderindexes"] = array();

$tdatacreategrn_receiveafterrebuild[".sqlHead"] = "SELECT ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  CurrentStock,  Fleet,  Cost";
$tdatacreategrn_receiveafterrebuild[".sqlFrom"] = "FROM creategrn";
$tdatacreategrn_receiveafterrebuild[".sqlWhereExpr"] = "Status =\"Rebuilt receipts\"";
$tdatacreategrn_receiveafterrebuild[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatacreategrn_receiveafterrebuild[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacreategrn_receiveafterrebuild[".arrGroupsPerPage"] = $arrGPP;

$tdatacreategrn_receiveafterrebuild[".highlightSearchResults"] = true;

$tableKeyscreategrn_receiveafterrebuild = array();
$tableKeyscreategrn_receiveafterrebuild[] = "ID";
$tdatacreategrn_receiveafterrebuild[".Keys"] = $tableKeyscreategrn_receiveafterrebuild;

$tdatacreategrn_receiveafterrebuild[".listFields"] = array();
$tdatacreategrn_receiveafterrebuild[".listFields"][] = "ID";
$tdatacreategrn_receiveafterrebuild[".listFields"][] = "Status";
$tdatacreategrn_receiveafterrebuild[".listFields"][] = "Fleet";
$tdatacreategrn_receiveafterrebuild[".listFields"][] = "GRNDate";
$tdatacreategrn_receiveafterrebuild[".listFields"][] = "ItemCode";
$tdatacreategrn_receiveafterrebuild[".listFields"][] = "Brand";
$tdatacreategrn_receiveafterrebuild[".listFields"][] = "Description";
$tdatacreategrn_receiveafterrebuild[".listFields"][] = "Supplier";
$tdatacreategrn_receiveafterrebuild[".listFields"][] = "UnitPrice";
$tdatacreategrn_receiveafterrebuild[".listFields"][] = "Quantity";
$tdatacreategrn_receiveafterrebuild[".listFields"][] = "RefNumber";
$tdatacreategrn_receiveafterrebuild[".listFields"][] = "Cost";
$tdatacreategrn_receiveafterrebuild[".listFields"][] = "EnteredBy";

$tdatacreategrn_receiveafterrebuild[".hideMobileList"] = array();


$tdatacreategrn_receiveafterrebuild[".viewFields"] = array();
$tdatacreategrn_receiveafterrebuild[".viewFields"][] = "ID";
$tdatacreategrn_receiveafterrebuild[".viewFields"][] = "Status";
$tdatacreategrn_receiveafterrebuild[".viewFields"][] = "Fleet";
$tdatacreategrn_receiveafterrebuild[".viewFields"][] = "GRNDate";
$tdatacreategrn_receiveafterrebuild[".viewFields"][] = "ItemCode";
$tdatacreategrn_receiveafterrebuild[".viewFields"][] = "Brand";
$tdatacreategrn_receiveafterrebuild[".viewFields"][] = "Description";
$tdatacreategrn_receiveafterrebuild[".viewFields"][] = "Supplier";
$tdatacreategrn_receiveafterrebuild[".viewFields"][] = "UnitPrice";
$tdatacreategrn_receiveafterrebuild[".viewFields"][] = "Quantity";
$tdatacreategrn_receiveafterrebuild[".viewFields"][] = "RefNumber";
$tdatacreategrn_receiveafterrebuild[".viewFields"][] = "SystemDate";
$tdatacreategrn_receiveafterrebuild[".viewFields"][] = "Cost";
$tdatacreategrn_receiveafterrebuild[".viewFields"][] = "EnteredBy";
$tdatacreategrn_receiveafterrebuild[".viewFields"][] = "ApprovedBy";

$tdatacreategrn_receiveafterrebuild[".addFields"] = array();
$tdatacreategrn_receiveafterrebuild[".addFields"][] = "Status";
$tdatacreategrn_receiveafterrebuild[".addFields"][] = "Fleet";
$tdatacreategrn_receiveafterrebuild[".addFields"][] = "GRNDate";
$tdatacreategrn_receiveafterrebuild[".addFields"][] = "ItemCode";
$tdatacreategrn_receiveafterrebuild[".addFields"][] = "UnitPrice";
$tdatacreategrn_receiveafterrebuild[".addFields"][] = "RefNumber";
$tdatacreategrn_receiveafterrebuild[".addFields"][] = "Brand";
$tdatacreategrn_receiveafterrebuild[".addFields"][] = "Description";
$tdatacreategrn_receiveafterrebuild[".addFields"][] = "Supplier";
$tdatacreategrn_receiveafterrebuild[".addFields"][] = "SystemDate";
$tdatacreategrn_receiveafterrebuild[".addFields"][] = "Quantity";
$tdatacreategrn_receiveafterrebuild[".addFields"][] = "Cost";
$tdatacreategrn_receiveafterrebuild[".addFields"][] = "EnteredBy";

$tdatacreategrn_receiveafterrebuild[".masterListFields"] = array();
$tdatacreategrn_receiveafterrebuild[".masterListFields"][] = "Status";
$tdatacreategrn_receiveafterrebuild[".masterListFields"][] = "ID";
$tdatacreategrn_receiveafterrebuild[".masterListFields"][] = "Fleet";
$tdatacreategrn_receiveafterrebuild[".masterListFields"][] = "GRNDate";
$tdatacreategrn_receiveafterrebuild[".masterListFields"][] = "RemovedFrom";
$tdatacreategrn_receiveafterrebuild[".masterListFields"][] = "ItemCode";
$tdatacreategrn_receiveafterrebuild[".masterListFields"][] = "Brand";
$tdatacreategrn_receiveafterrebuild[".masterListFields"][] = "Description";
$tdatacreategrn_receiveafterrebuild[".masterListFields"][] = "Supplier";
$tdatacreategrn_receiveafterrebuild[".masterListFields"][] = "UnitPrice";
$tdatacreategrn_receiveafterrebuild[".masterListFields"][] = "Quantity";
$tdatacreategrn_receiveafterrebuild[".masterListFields"][] = "RefNumber";
$tdatacreategrn_receiveafterrebuild[".masterListFields"][] = "SystemDate";
$tdatacreategrn_receiveafterrebuild[".masterListFields"][] = "Cost";
$tdatacreategrn_receiveafterrebuild[".masterListFields"][] = "CurrentStock";
$tdatacreategrn_receiveafterrebuild[".masterListFields"][] = "EnteredBy";
$tdatacreategrn_receiveafterrebuild[".masterListFields"][] = "ApprovedBy";

$tdatacreategrn_receiveafterrebuild[".inlineAddFields"] = array();

$tdatacreategrn_receiveafterrebuild[".editFields"] = array();
$tdatacreategrn_receiveafterrebuild[".editFields"][] = "Status";
$tdatacreategrn_receiveafterrebuild[".editFields"][] = "Fleet";
$tdatacreategrn_receiveafterrebuild[".editFields"][] = "GRNDate";
$tdatacreategrn_receiveafterrebuild[".editFields"][] = "ItemCode";
$tdatacreategrn_receiveafterrebuild[".editFields"][] = "Brand";
$tdatacreategrn_receiveafterrebuild[".editFields"][] = "Description";
$tdatacreategrn_receiveafterrebuild[".editFields"][] = "Supplier";
$tdatacreategrn_receiveafterrebuild[".editFields"][] = "UnitPrice";
$tdatacreategrn_receiveafterrebuild[".editFields"][] = "Quantity";
$tdatacreategrn_receiveafterrebuild[".editFields"][] = "RefNumber";
$tdatacreategrn_receiveafterrebuild[".editFields"][] = "SystemDate";
$tdatacreategrn_receiveafterrebuild[".editFields"][] = "Cost";
$tdatacreategrn_receiveafterrebuild[".editFields"][] = "EnteredBy";
$tdatacreategrn_receiveafterrebuild[".editFields"][] = "ApprovedBy";

$tdatacreategrn_receiveafterrebuild[".inlineEditFields"] = array();

$tdatacreategrn_receiveafterrebuild[".exportFields"] = array();
$tdatacreategrn_receiveafterrebuild[".exportFields"][] = "Status";
$tdatacreategrn_receiveafterrebuild[".exportFields"][] = "ID";
$tdatacreategrn_receiveafterrebuild[".exportFields"][] = "Fleet";
$tdatacreategrn_receiveafterrebuild[".exportFields"][] = "GRNDate";
$tdatacreategrn_receiveafterrebuild[".exportFields"][] = "ItemCode";
$tdatacreategrn_receiveafterrebuild[".exportFields"][] = "Brand";
$tdatacreategrn_receiveafterrebuild[".exportFields"][] = "Description";
$tdatacreategrn_receiveafterrebuild[".exportFields"][] = "Supplier";
$tdatacreategrn_receiveafterrebuild[".exportFields"][] = "UnitPrice";
$tdatacreategrn_receiveafterrebuild[".exportFields"][] = "Quantity";
$tdatacreategrn_receiveafterrebuild[".exportFields"][] = "RefNumber";
$tdatacreategrn_receiveafterrebuild[".exportFields"][] = "SystemDate";
$tdatacreategrn_receiveafterrebuild[".exportFields"][] = "Cost";
$tdatacreategrn_receiveafterrebuild[".exportFields"][] = "EnteredBy";
$tdatacreategrn_receiveafterrebuild[".exportFields"][] = "ApprovedBy";

$tdatacreategrn_receiveafterrebuild[".importFields"] = array();
$tdatacreategrn_receiveafterrebuild[".importFields"][] = "ID";
$tdatacreategrn_receiveafterrebuild[".importFields"][] = "ItemCode";
$tdatacreategrn_receiveafterrebuild[".importFields"][] = "Brand";
$tdatacreategrn_receiveafterrebuild[".importFields"][] = "Description";
$tdatacreategrn_receiveafterrebuild[".importFields"][] = "Supplier";
$tdatacreategrn_receiveafterrebuild[".importFields"][] = "Quantity";
$tdatacreategrn_receiveafterrebuild[".importFields"][] = "SystemDate";
$tdatacreategrn_receiveafterrebuild[".importFields"][] = "GRNDate";
$tdatacreategrn_receiveafterrebuild[".importFields"][] = "EnteredBy";
$tdatacreategrn_receiveafterrebuild[".importFields"][] = "ApprovedBy";
$tdatacreategrn_receiveafterrebuild[".importFields"][] = "UnitPrice";
$tdatacreategrn_receiveafterrebuild[".importFields"][] = "Status";
$tdatacreategrn_receiveafterrebuild[".importFields"][] = "RefNumber";
$tdatacreategrn_receiveafterrebuild[".importFields"][] = "Fleet";
$tdatacreategrn_receiveafterrebuild[".importFields"][] = "Cost";

$tdatacreategrn_receiveafterrebuild[".printFields"] = array();
$tdatacreategrn_receiveafterrebuild[".printFields"][] = "ID";
$tdatacreategrn_receiveafterrebuild[".printFields"][] = "Status";
$tdatacreategrn_receiveafterrebuild[".printFields"][] = "Fleet";
$tdatacreategrn_receiveafterrebuild[".printFields"][] = "GRNDate";
$tdatacreategrn_receiveafterrebuild[".printFields"][] = "ItemCode";
$tdatacreategrn_receiveafterrebuild[".printFields"][] = "Brand";
$tdatacreategrn_receiveafterrebuild[".printFields"][] = "Description";
$tdatacreategrn_receiveafterrebuild[".printFields"][] = "Supplier";
$tdatacreategrn_receiveafterrebuild[".printFields"][] = "UnitPrice";
$tdatacreategrn_receiveafterrebuild[".printFields"][] = "Quantity";
$tdatacreategrn_receiveafterrebuild[".printFields"][] = "RefNumber";
$tdatacreategrn_receiveafterrebuild[".printFields"][] = "SystemDate";
$tdatacreategrn_receiveafterrebuild[".printFields"][] = "Cost";
$tdatacreategrn_receiveafterrebuild[".printFields"][] = "EnteredBy";
$tdatacreategrn_receiveafterrebuild[".printFields"][] = "ApprovedBy";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receiveafterrebuild","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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








	$tdatacreategrn_receiveafterrebuild["ID"] = $fdata;
//	ItemCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemCode";
	$fdata["GoodName"] = "ItemCode";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receiveafterrebuild","ItemCode");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ItemCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ItemCode";

	
	
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
	$edata["LookupTable"] = "inventorymaster-qty";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Brand", 'lookupF'=>"Brand");
	$edata["autoCompleteFields"][] = array('masterF'=>"Description", 'lookupF'=>"Description");
	$edata["autoCompleteFields"][] = array('masterF'=>"Supplier", 'lookupF'=>"Supplier");
	$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "ItemID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ItemID";

	
	$edata["LookupOrderBy"] = "ItemID";

	
	
	
	

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_receiveafterrebuild["ItemCode"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receiveafterrebuild","Brand");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Brand";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Brand";

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_receiveafterrebuild["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receiveafterrebuild","Description");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Description";

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_receiveafterrebuild["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receiveafterrebuild","Supplier");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_receiveafterrebuild["Supplier"] = $fdata;
//	Quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Quantity";
	$fdata["GoodName"] = "Quantity";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receiveafterrebuild","Quantity");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Quantity";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Quantity";

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_receiveafterrebuild["Quantity"] = $fdata;
//	RemovedFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RemovedFrom";
	$fdata["GoodName"] = "RemovedFrom";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receiveafterrebuild","RemovedFrom");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "RemovedFrom";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RemovedFrom";

	
	
			
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








	$tdatacreategrn_receiveafterrebuild["RemovedFrom"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receiveafterrebuild","SystemDate");
	$fdata["FieldType"] = 200;

	
	
	
										
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SystemDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SystemDate";

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_receiveafterrebuild["SystemDate"] = $fdata;
//	GRNDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "GRNDate";
	$fdata["GoodName"] = "GRNDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receiveafterrebuild","GRNDate");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "GRNDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GRNDate";

	
	
				$fdata["FieldPermissions"] = true;

			
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_receiveafterrebuild["GRNDate"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receiveafterrebuild","EnteredBy");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_receiveafterrebuild["EnteredBy"] = $fdata;
//	ApprovedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ApprovedBy";
	$fdata["GoodName"] = "ApprovedBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receiveafterrebuild","ApprovedBy");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApprovedBy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ApprovedBy";

	
	
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








	$tdatacreategrn_receiveafterrebuild["ApprovedBy"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receiveafterrebuild","UnitPrice");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UnitPrice";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UnitPrice";

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_receiveafterrebuild["UnitPrice"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receiveafterrebuild","Status");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status";

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_receiveafterrebuild["Status"] = $fdata;
//	RefNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RefNumber";
	$fdata["GoodName"] = "RefNumber";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receiveafterrebuild","RefNumber");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RefNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RefNumber";

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_receiveafterrebuild["RefNumber"] = $fdata;
//	CurrentStock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "CurrentStock";
	$fdata["GoodName"] = "CurrentStock";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receiveafterrebuild","CurrentStock");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "CurrentStock";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CurrentStock";

	
	
			
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








	$tdatacreategrn_receiveafterrebuild["CurrentStock"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receiveafterrebuild","Fleet");
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
	$edata["DependentLookups"][] = "RemovedFrom";

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_receiveafterrebuild["Fleet"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receiveafterrebuild","Cost");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_receiveafterrebuild["Cost"] = $fdata;


$tables_data["creategrn-receiveafterrebuild"]=&$tdatacreategrn_receiveafterrebuild;
$field_labels["creategrn_receiveafterrebuild"] = &$fieldLabelscreategrn_receiveafterrebuild;
$fieldToolTips["creategrn_receiveafterrebuild"] = &$fieldToolTipscreategrn_receiveafterrebuild;
$page_titles["creategrn_receiveafterrebuild"] = &$pageTitlescreategrn_receiveafterrebuild;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["creategrn-receiveafterrebuild"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["creategrn-receiveafterrebuild"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_creategrn_receiveafterrebuild()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  CurrentStock,  Fleet,  Cost";
$proto0["m_strFrom"] = "FROM creategrn";
$proto0["m_strWhere"] = "Status =\"Rebuilt receipts\"";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "Status =\"Rebuilt receipts\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receiveafterrebuild"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=\"Rebuilt receipts\"";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receiveafterrebuild"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "creategrn-receiveafterrebuild";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receiveafterrebuild"
));

$proto8["m_sql"] = "ItemCode";
$proto8["m_srcTableName"] = "creategrn-receiveafterrebuild";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receiveafterrebuild"
));

$proto10["m_sql"] = "Brand";
$proto10["m_srcTableName"] = "creategrn-receiveafterrebuild";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receiveafterrebuild"
));

$proto12["m_sql"] = "Description";
$proto12["m_srcTableName"] = "creategrn-receiveafterrebuild";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receiveafterrebuild"
));

$proto14["m_sql"] = "Supplier";
$proto14["m_srcTableName"] = "creategrn-receiveafterrebuild";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receiveafterrebuild"
));

$proto16["m_sql"] = "Quantity";
$proto16["m_srcTableName"] = "creategrn-receiveafterrebuild";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receiveafterrebuild"
));

$proto18["m_sql"] = "RemovedFrom";
$proto18["m_srcTableName"] = "creategrn-receiveafterrebuild";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receiveafterrebuild"
));

$proto20["m_sql"] = "SystemDate";
$proto20["m_srcTableName"] = "creategrn-receiveafterrebuild";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receiveafterrebuild"
));

$proto22["m_sql"] = "GRNDate";
$proto22["m_srcTableName"] = "creategrn-receiveafterrebuild";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receiveafterrebuild"
));

$proto24["m_sql"] = "EnteredBy";
$proto24["m_srcTableName"] = "creategrn-receiveafterrebuild";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receiveafterrebuild"
));

$proto26["m_sql"] = "ApprovedBy";
$proto26["m_srcTableName"] = "creategrn-receiveafterrebuild";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receiveafterrebuild"
));

$proto28["m_sql"] = "UnitPrice";
$proto28["m_srcTableName"] = "creategrn-receiveafterrebuild";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receiveafterrebuild"
));

$proto30["m_sql"] = "Status";
$proto30["m_srcTableName"] = "creategrn-receiveafterrebuild";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receiveafterrebuild"
));

$proto32["m_sql"] = "RefNumber";
$proto32["m_srcTableName"] = "creategrn-receiveafterrebuild";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "CurrentStock",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receiveafterrebuild"
));

$proto34["m_sql"] = "CurrentStock";
$proto34["m_srcTableName"] = "creategrn-receiveafterrebuild";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receiveafterrebuild"
));

$proto36["m_sql"] = "Fleet";
$proto36["m_srcTableName"] = "creategrn-receiveafterrebuild";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receiveafterrebuild"
));

$proto38["m_sql"] = "Cost";
$proto38["m_srcTableName"] = "creategrn-receiveafterrebuild";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "creategrn";
$proto41["m_srcTableName"] = "creategrn-receiveafterrebuild";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "ID";
$proto41["m_columns"][] = "ItemCode";
$proto41["m_columns"][] = "Brand";
$proto41["m_columns"][] = "Description";
$proto41["m_columns"][] = "Supplier";
$proto41["m_columns"][] = "Quantity";
$proto41["m_columns"][] = "RemovedFrom";
$proto41["m_columns"][] = "SystemDate";
$proto41["m_columns"][] = "GRNDate";
$proto41["m_columns"][] = "EnteredBy";
$proto41["m_columns"][] = "ApprovedBy";
$proto41["m_columns"][] = "UnitPrice";
$proto41["m_columns"][] = "Status";
$proto41["m_columns"][] = "RefNumber";
$proto41["m_columns"][] = "CurrentStock";
$proto41["m_columns"][] = "Fleet";
$proto41["m_columns"][] = "PriceLink";
$proto41["m_columns"][] = "Cost";
$proto41["m_columns"][] = "Remarks";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "creategrn";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "creategrn-receiveafterrebuild";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="creategrn-receiveafterrebuild";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_creategrn_receiveafterrebuild = createSqlQuery_creategrn_receiveafterrebuild();


	
					
;

																	

$tdatacreategrn_receiveafterrebuild[".sqlquery"] = $queryData_creategrn_receiveafterrebuild;

include_once(getabspath("include/creategrn_receiveafterrebuild_events.php"));
$tableEvents["creategrn-receiveafterrebuild"] = new eventclass_creategrn_receiveafterrebuild;
$tdatacreategrn_receiveafterrebuild[".hasEvents"] = true;

?>