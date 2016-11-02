<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacreategrn_issueofrebuild = array();	
	$tdatacreategrn_issueofrebuild[".truncateText"] = true;
	$tdatacreategrn_issueofrebuild[".NumberOfChars"] = 80; 
	$tdatacreategrn_issueofrebuild[".ShortName"] = "creategrn_issueofrebuild";
	$tdatacreategrn_issueofrebuild[".OwnerID"] = "";
	$tdatacreategrn_issueofrebuild[".OriginalTable"] = "creategrn";

//	field labels
$fieldLabelscreategrn_issueofrebuild = array();
$fieldToolTipscreategrn_issueofrebuild = array();
$pageTitlescreategrn_issueofrebuild = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscreategrn_issueofrebuild["English"] = array();
	$fieldToolTipscreategrn_issueofrebuild["English"] = array();
	$pageTitlescreategrn_issueofrebuild["English"] = array();
	$fieldLabelscreategrn_issueofrebuild["English"]["ItemCode"] = "Item Code";
	$fieldToolTipscreategrn_issueofrebuild["English"]["ItemCode"] = "";
	$fieldLabelscreategrn_issueofrebuild["English"]["Brand"] = "Brand";
	$fieldToolTipscreategrn_issueofrebuild["English"]["Brand"] = "";
	$fieldLabelscreategrn_issueofrebuild["English"]["Description"] = "Descr.";
	$fieldToolTipscreategrn_issueofrebuild["English"]["Description"] = "";
	$fieldLabelscreategrn_issueofrebuild["English"]["Supplier"] = "Supplier";
	$fieldToolTipscreategrn_issueofrebuild["English"]["Supplier"] = "";
	$fieldLabelscreategrn_issueofrebuild["English"]["Quantity"] = "Qty";
	$fieldToolTipscreategrn_issueofrebuild["English"]["Quantity"] = "";
	$fieldLabelscreategrn_issueofrebuild["English"]["RemovedFrom"] = "Vehicle";
	$fieldToolTipscreategrn_issueofrebuild["English"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_issueofrebuild["English"]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn_issueofrebuild["English"]["SystemDate"] = "";
	$fieldLabelscreategrn_issueofrebuild["English"]["EnteredBy"] = "Entered";
	$fieldToolTipscreategrn_issueofrebuild["English"]["EnteredBy"] = "";
	$fieldLabelscreategrn_issueofrebuild["English"]["ApprovedBy"] = "Edited By";
	$fieldToolTipscreategrn_issueofrebuild["English"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_issueofrebuild["English"]["Status"] = "Type";
	$fieldToolTipscreategrn_issueofrebuild["English"]["Status"] = "";
	$fieldLabelscreategrn_issueofrebuild["English"]["ID"] = "ID";
	$fieldToolTipscreategrn_issueofrebuild["English"]["ID"] = "";
	$fieldLabelscreategrn_issueofrebuild["English"]["RefNumber"] = "Ref No.";
	$fieldToolTipscreategrn_issueofrebuild["English"]["RefNumber"] = "";
	$fieldLabelscreategrn_issueofrebuild["English"]["Cost"] = "Cost";
	$fieldToolTipscreategrn_issueofrebuild["English"]["Cost"] = "";
	$fieldLabelscreategrn_issueofrebuild["English"]["Fleet"] = "Fleet";
	$fieldToolTipscreategrn_issueofrebuild["English"]["Fleet"] = "";
	$fieldLabelscreategrn_issueofrebuild["English"]["GRNDate"] = "Date";
	$fieldToolTipscreategrn_issueofrebuild["English"]["GRNDate"] = "";
	$fieldLabelscreategrn_issueofrebuild["English"]["UnitPrice"] = "Rate";
	$fieldToolTipscreategrn_issueofrebuild["English"]["UnitPrice"] = "";
	$fieldLabelscreategrn_issueofrebuild["English"]["CurrentStock"] = "In-Stock";
	$fieldToolTipscreategrn_issueofrebuild["English"]["CurrentStock"] = "";
	$fieldLabelscreategrn_issueofrebuild["English"]["PriceLink"] = "Cost Code";
	$fieldToolTipscreategrn_issueofrebuild["English"]["PriceLink"] = "";
	if (count($fieldToolTipscreategrn_issueofrebuild["English"]))
		$tdatacreategrn_issueofrebuild[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscreategrn_issueofrebuild[""] = array();
	$fieldToolTipscreategrn_issueofrebuild[""] = array();
	$pageTitlescreategrn_issueofrebuild[""] = array();
	$fieldLabelscreategrn_issueofrebuild[""]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn_issueofrebuild[""]["SystemDate"] = "";
	$fieldLabelscreategrn_issueofrebuild[""]["EnteredBy"] = "Entered By";
	$fieldToolTipscreategrn_issueofrebuild[""]["EnteredBy"] = "";
	$fieldLabelscreategrn_issueofrebuild[""]["ApprovedBy"] = "Approved By";
	$fieldToolTipscreategrn_issueofrebuild[""]["ApprovedBy"] = "";
	$fieldLabelscreategrn_issueofrebuild[""]["Status"] = "Status";
	$fieldToolTipscreategrn_issueofrebuild[""]["Status"] = "";
	$fieldLabelscreategrn_issueofrebuild[""]["ID"] = "ID";
	$fieldToolTipscreategrn_issueofrebuild[""]["ID"] = "";
	$fieldLabelscreategrn_issueofrebuild[""]["RefNumber"] = "Ref Number";
	$fieldToolTipscreategrn_issueofrebuild[""]["RefNumber"] = "";
	$fieldLabelscreategrn_issueofrebuild[""]["Cost"] = "Cost";
	$fieldToolTipscreategrn_issueofrebuild[""]["Cost"] = "";
	$fieldLabelscreategrn_issueofrebuild[""]["Fleet"] = "Fleet";
	$fieldToolTipscreategrn_issueofrebuild[""]["Fleet"] = "";
	$fieldLabelscreategrn_issueofrebuild[""]["GRNDate"] = "GRNDate";
	$fieldToolTipscreategrn_issueofrebuild[""]["GRNDate"] = "";
	$fieldLabelscreategrn_issueofrebuild[""]["UnitPrice"] = "Unit Price";
	$fieldToolTipscreategrn_issueofrebuild[""]["UnitPrice"] = "";
	$fieldLabelscreategrn_issueofrebuild[""]["CurrentStock"] = "Current Stock";
	$fieldToolTipscreategrn_issueofrebuild[""]["CurrentStock"] = "";
	$fieldLabelscreategrn_issueofrebuild[""]["PriceLink"] = "Price Link";
	$fieldToolTipscreategrn_issueofrebuild[""]["PriceLink"] = "";
	if (count($fieldToolTipscreategrn_issueofrebuild[""]))
		$tdatacreategrn_issueofrebuild[".isUseToolTips"] = true;
}
	
	
	$tdatacreategrn_issueofrebuild[".NCSearch"] = true;



$tdatacreategrn_issueofrebuild[".shortTableName"] = "creategrn_issueofrebuild";
$tdatacreategrn_issueofrebuild[".nSecOptions"] = 0;
$tdatacreategrn_issueofrebuild[".recsPerRowList"] = 1;
$tdatacreategrn_issueofrebuild[".recsPerRowPrint"] = 1;
$tdatacreategrn_issueofrebuild[".mainTableOwnerID"] = "";
$tdatacreategrn_issueofrebuild[".moveNext"] = 1;
$tdatacreategrn_issueofrebuild[".entityType"] = 1;

$tdatacreategrn_issueofrebuild[".strOriginalTableName"] = "creategrn";




$tdatacreategrn_issueofrebuild[".showAddInPopup"] = false;

$tdatacreategrn_issueofrebuild[".showEditInPopup"] = false;

$tdatacreategrn_issueofrebuild[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacreategrn_issueofrebuild[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacreategrn_issueofrebuild[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatacreategrn_issueofrebuild[".listAjax"] = true;
else 
	$tdatacreategrn_issueofrebuild[".listAjax"] = false;

	$tdatacreategrn_issueofrebuild[".audit"] = false;

	$tdatacreategrn_issueofrebuild[".locking"] = false;

$tdatacreategrn_issueofrebuild[".edit"] = true;
$tdatacreategrn_issueofrebuild[".afterEditAction"] = 1;
$tdatacreategrn_issueofrebuild[".closePopupAfterEdit"] = 1;
$tdatacreategrn_issueofrebuild[".afterEditActionDetTable"] = "";

$tdatacreategrn_issueofrebuild[".add"] = true;
$tdatacreategrn_issueofrebuild[".afterAddAction"] = 1;
$tdatacreategrn_issueofrebuild[".closePopupAfterAdd"] = 1;
$tdatacreategrn_issueofrebuild[".afterAddActionDetTable"] = "Detail tables not found!";

$tdatacreategrn_issueofrebuild[".list"] = true;

$tdatacreategrn_issueofrebuild[".view"] = true;

$tdatacreategrn_issueofrebuild[".import"] = true;

$tdatacreategrn_issueofrebuild[".exportTo"] = true;

$tdatacreategrn_issueofrebuild[".printFriendly"] = true;

$tdatacreategrn_issueofrebuild[".delete"] = true;

$tdatacreategrn_issueofrebuild[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacreategrn_issueofrebuild[".searchSaving"] = false;
//

$tdatacreategrn_issueofrebuild[".showSearchPanel"] = true;
		$tdatacreategrn_issueofrebuild[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacreategrn_issueofrebuild[".isUseAjaxSuggest"] = false;
else 
	$tdatacreategrn_issueofrebuild[".isUseAjaxSuggest"] = true;

$tdatacreategrn_issueofrebuild[".rowHighlite"] = true;



$tdatacreategrn_issueofrebuild[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacreategrn_issueofrebuild[".isUseTimeForSearch"] = false;





$tdatacreategrn_issueofrebuild[".allSearchFields"] = array();
$tdatacreategrn_issueofrebuild[".filterFields"] = array();
$tdatacreategrn_issueofrebuild[".requiredSearchFields"] = array();

$tdatacreategrn_issueofrebuild[".allSearchFields"][] = "Status";
	$tdatacreategrn_issueofrebuild[".allSearchFields"][] = "Fleet";
	$tdatacreategrn_issueofrebuild[".allSearchFields"][] = "RemovedFrom";
	$tdatacreategrn_issueofrebuild[".allSearchFields"][] = "GRNDate";
	$tdatacreategrn_issueofrebuild[".allSearchFields"][] = "ItemCode";
	$tdatacreategrn_issueofrebuild[".allSearchFields"][] = "PriceLink";
	$tdatacreategrn_issueofrebuild[".allSearchFields"][] = "Quantity";
	$tdatacreategrn_issueofrebuild[".allSearchFields"][] = "Brand";
	$tdatacreategrn_issueofrebuild[".allSearchFields"][] = "Description";
	$tdatacreategrn_issueofrebuild[".allSearchFields"][] = "Supplier";
	$tdatacreategrn_issueofrebuild[".allSearchFields"][] = "UnitPrice";
	$tdatacreategrn_issueofrebuild[".allSearchFields"][] = "Cost";
	$tdatacreategrn_issueofrebuild[".allSearchFields"][] = "CurrentStock";
	$tdatacreategrn_issueofrebuild[".allSearchFields"][] = "EnteredBy";
	$tdatacreategrn_issueofrebuild[".allSearchFields"][] = "SystemDate";
	

$tdatacreategrn_issueofrebuild[".googleLikeFields"] = array();
$tdatacreategrn_issueofrebuild[".googleLikeFields"][] = "ID";
$tdatacreategrn_issueofrebuild[".googleLikeFields"][] = "ItemCode";
$tdatacreategrn_issueofrebuild[".googleLikeFields"][] = "Brand";
$tdatacreategrn_issueofrebuild[".googleLikeFields"][] = "Description";
$tdatacreategrn_issueofrebuild[".googleLikeFields"][] = "Supplier";
$tdatacreategrn_issueofrebuild[".googleLikeFields"][] = "Quantity";
$tdatacreategrn_issueofrebuild[".googleLikeFields"][] = "RemovedFrom";
$tdatacreategrn_issueofrebuild[".googleLikeFields"][] = "SystemDate";
$tdatacreategrn_issueofrebuild[".googleLikeFields"][] = "GRNDate";
$tdatacreategrn_issueofrebuild[".googleLikeFields"][] = "EnteredBy";
$tdatacreategrn_issueofrebuild[".googleLikeFields"][] = "ApprovedBy";
$tdatacreategrn_issueofrebuild[".googleLikeFields"][] = "UnitPrice";
$tdatacreategrn_issueofrebuild[".googleLikeFields"][] = "Status";
$tdatacreategrn_issueofrebuild[".googleLikeFields"][] = "RefNumber";
$tdatacreategrn_issueofrebuild[".googleLikeFields"][] = "CurrentStock";
$tdatacreategrn_issueofrebuild[".googleLikeFields"][] = "Fleet";
$tdatacreategrn_issueofrebuild[".googleLikeFields"][] = "PriceLink";
$tdatacreategrn_issueofrebuild[".googleLikeFields"][] = "Cost";


$tdatacreategrn_issueofrebuild[".advSearchFields"] = array();
$tdatacreategrn_issueofrebuild[".advSearchFields"][] = "Status";
$tdatacreategrn_issueofrebuild[".advSearchFields"][] = "Fleet";
$tdatacreategrn_issueofrebuild[".advSearchFields"][] = "RemovedFrom";
$tdatacreategrn_issueofrebuild[".advSearchFields"][] = "GRNDate";
$tdatacreategrn_issueofrebuild[".advSearchFields"][] = "ItemCode";
$tdatacreategrn_issueofrebuild[".advSearchFields"][] = "PriceLink";
$tdatacreategrn_issueofrebuild[".advSearchFields"][] = "Quantity";
$tdatacreategrn_issueofrebuild[".advSearchFields"][] = "Brand";
$tdatacreategrn_issueofrebuild[".advSearchFields"][] = "Description";
$tdatacreategrn_issueofrebuild[".advSearchFields"][] = "Supplier";
$tdatacreategrn_issueofrebuild[".advSearchFields"][] = "UnitPrice";
$tdatacreategrn_issueofrebuild[".advSearchFields"][] = "Cost";
$tdatacreategrn_issueofrebuild[".advSearchFields"][] = "CurrentStock";
$tdatacreategrn_issueofrebuild[".advSearchFields"][] = "EnteredBy";
$tdatacreategrn_issueofrebuild[".advSearchFields"][] = "SystemDate";

$tdatacreategrn_issueofrebuild[".tableType"] = "list";

$tdatacreategrn_issueofrebuild[".printerPageOrientation"] = 0;
$tdatacreategrn_issueofrebuild[".nPrinterPageScale"] = 100;

$tdatacreategrn_issueofrebuild[".nPrinterSplitRecords"] = 40;

$tdatacreategrn_issueofrebuild[".nPrinterPDFSplitRecords"] = 40;



$tdatacreategrn_issueofrebuild[".geocodingEnabled"] = false;




	





// view page pdf
$tdatacreategrn_issueofrebuild[".isViewPagePDF"] = true;
$tdatacreategrn_issueofrebuild[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatacreategrn_issueofrebuild[".isPrinterPagePDF"] = true;
$tdatacreategrn_issueofrebuild[".nPrinterPagePDFScale"] = 100;

$tdatacreategrn_issueofrebuild[".totalsFields"] = array();
$tdatacreategrn_issueofrebuild[".totalsFields"][] = array(
	"fName" => "Cost", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatacreategrn_issueofrebuild[".pageSize"] = 20;

$tdatacreategrn_issueofrebuild[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY CurrentStock DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacreategrn_issueofrebuild[".strOrderBy"] = $tstrOrderBy;

$tdatacreategrn_issueofrebuild[".orderindexes"] = array();
$tdatacreategrn_issueofrebuild[".orderindexes"][] = array(15, (0 ? "ASC" : "DESC"), "CurrentStock");

$tdatacreategrn_issueofrebuild[".sqlHead"] = "SELECT ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  SUM(CurrentStock) AS CurrentStock,  Fleet,  PriceLink,  Quantity*UnitPrice*-1 AS Cost";
$tdatacreategrn_issueofrebuild[".sqlFrom"] = "FROM creategrn";
$tdatacreategrn_issueofrebuild[".sqlWhereExpr"] = "(Status =\"Issue\")";
$tdatacreategrn_issueofrebuild[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatacreategrn_issueofrebuild[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacreategrn_issueofrebuild[".arrGroupsPerPage"] = $arrGPP;

$tdatacreategrn_issueofrebuild[".highlightSearchResults"] = true;

$tableKeyscreategrn_issueofrebuild = array();
$tableKeyscreategrn_issueofrebuild[] = "ID";
$tdatacreategrn_issueofrebuild[".Keys"] = $tableKeyscreategrn_issueofrebuild;

$tdatacreategrn_issueofrebuild[".listFields"] = array();
$tdatacreategrn_issueofrebuild[".listFields"][] = "ID";
$tdatacreategrn_issueofrebuild[".listFields"][] = "Status";
$tdatacreategrn_issueofrebuild[".listFields"][] = "Fleet";
$tdatacreategrn_issueofrebuild[".listFields"][] = "RemovedFrom";
$tdatacreategrn_issueofrebuild[".listFields"][] = "GRNDate";
$tdatacreategrn_issueofrebuild[".listFields"][] = "ItemCode";
$tdatacreategrn_issueofrebuild[".listFields"][] = "Brand";
$tdatacreategrn_issueofrebuild[".listFields"][] = "Description";
$tdatacreategrn_issueofrebuild[".listFields"][] = "Supplier";
$tdatacreategrn_issueofrebuild[".listFields"][] = "Quantity";
$tdatacreategrn_issueofrebuild[".listFields"][] = "UnitPrice";
$tdatacreategrn_issueofrebuild[".listFields"][] = "Cost";
$tdatacreategrn_issueofrebuild[".listFields"][] = "EnteredBy";

$tdatacreategrn_issueofrebuild[".hideMobileList"] = array();


$tdatacreategrn_issueofrebuild[".viewFields"] = array();
$tdatacreategrn_issueofrebuild[".viewFields"][] = "ID";
$tdatacreategrn_issueofrebuild[".viewFields"][] = "Status";
$tdatacreategrn_issueofrebuild[".viewFields"][] = "Fleet";
$tdatacreategrn_issueofrebuild[".viewFields"][] = "RemovedFrom";
$tdatacreategrn_issueofrebuild[".viewFields"][] = "GRNDate";
$tdatacreategrn_issueofrebuild[".viewFields"][] = "ItemCode";
$tdatacreategrn_issueofrebuild[".viewFields"][] = "Quantity";
$tdatacreategrn_issueofrebuild[".viewFields"][] = "Brand";
$tdatacreategrn_issueofrebuild[".viewFields"][] = "Description";
$tdatacreategrn_issueofrebuild[".viewFields"][] = "Supplier";
$tdatacreategrn_issueofrebuild[".viewFields"][] = "UnitPrice";
$tdatacreategrn_issueofrebuild[".viewFields"][] = "ApprovedBy";
$tdatacreategrn_issueofrebuild[".viewFields"][] = "Cost";
$tdatacreategrn_issueofrebuild[".viewFields"][] = "CurrentStock";
$tdatacreategrn_issueofrebuild[".viewFields"][] = "EnteredBy";
$tdatacreategrn_issueofrebuild[".viewFields"][] = "SystemDate";

$tdatacreategrn_issueofrebuild[".addFields"] = array();
$tdatacreategrn_issueofrebuild[".addFields"][] = "Status";
$tdatacreategrn_issueofrebuild[".addFields"][] = "Fleet";
$tdatacreategrn_issueofrebuild[".addFields"][] = "RemovedFrom";
$tdatacreategrn_issueofrebuild[".addFields"][] = "GRNDate";
$tdatacreategrn_issueofrebuild[".addFields"][] = "ItemCode";
$tdatacreategrn_issueofrebuild[".addFields"][] = "Quantity";
$tdatacreategrn_issueofrebuild[".addFields"][] = "PriceLink";
$tdatacreategrn_issueofrebuild[".addFields"][] = "Brand";
$tdatacreategrn_issueofrebuild[".addFields"][] = "Description";
$tdatacreategrn_issueofrebuild[".addFields"][] = "Supplier";
$tdatacreategrn_issueofrebuild[".addFields"][] = "UnitPrice";
$tdatacreategrn_issueofrebuild[".addFields"][] = "Cost";
$tdatacreategrn_issueofrebuild[".addFields"][] = "EnteredBy";
$tdatacreategrn_issueofrebuild[".addFields"][] = "CurrentStock";
$tdatacreategrn_issueofrebuild[".addFields"][] = "SystemDate";

$tdatacreategrn_issueofrebuild[".masterListFields"] = array();
$tdatacreategrn_issueofrebuild[".masterListFields"][] = "ID";
$tdatacreategrn_issueofrebuild[".masterListFields"][] = "Status";
$tdatacreategrn_issueofrebuild[".masterListFields"][] = "Fleet";
$tdatacreategrn_issueofrebuild[".masterListFields"][] = "RemovedFrom";
$tdatacreategrn_issueofrebuild[".masterListFields"][] = "RefNumber";
$tdatacreategrn_issueofrebuild[".masterListFields"][] = "GRNDate";
$tdatacreategrn_issueofrebuild[".masterListFields"][] = "ItemCode";
$tdatacreategrn_issueofrebuild[".masterListFields"][] = "Quantity";
$tdatacreategrn_issueofrebuild[".masterListFields"][] = "PriceLink";
$tdatacreategrn_issueofrebuild[".masterListFields"][] = "Brand";
$tdatacreategrn_issueofrebuild[".masterListFields"][] = "Description";
$tdatacreategrn_issueofrebuild[".masterListFields"][] = "Supplier";
$tdatacreategrn_issueofrebuild[".masterListFields"][] = "UnitPrice";
$tdatacreategrn_issueofrebuild[".masterListFields"][] = "Cost";
$tdatacreategrn_issueofrebuild[".masterListFields"][] = "ApprovedBy";
$tdatacreategrn_issueofrebuild[".masterListFields"][] = "EnteredBy";
$tdatacreategrn_issueofrebuild[".masterListFields"][] = "CurrentStock";
$tdatacreategrn_issueofrebuild[".masterListFields"][] = "SystemDate";

$tdatacreategrn_issueofrebuild[".inlineAddFields"] = array();

$tdatacreategrn_issueofrebuild[".editFields"] = array();
$tdatacreategrn_issueofrebuild[".editFields"][] = "Status";
$tdatacreategrn_issueofrebuild[".editFields"][] = "Fleet";
$tdatacreategrn_issueofrebuild[".editFields"][] = "RemovedFrom";
$tdatacreategrn_issueofrebuild[".editFields"][] = "GRNDate";
$tdatacreategrn_issueofrebuild[".editFields"][] = "ItemCode";
$tdatacreategrn_issueofrebuild[".editFields"][] = "PriceLink";
$tdatacreategrn_issueofrebuild[".editFields"][] = "Quantity";
$tdatacreategrn_issueofrebuild[".editFields"][] = "Brand";
$tdatacreategrn_issueofrebuild[".editFields"][] = "Description";
$tdatacreategrn_issueofrebuild[".editFields"][] = "Supplier";
$tdatacreategrn_issueofrebuild[".editFields"][] = "UnitPrice";
$tdatacreategrn_issueofrebuild[".editFields"][] = "ApprovedBy";
$tdatacreategrn_issueofrebuild[".editFields"][] = "Cost";
$tdatacreategrn_issueofrebuild[".editFields"][] = "EnteredBy";
$tdatacreategrn_issueofrebuild[".editFields"][] = "CurrentStock";
$tdatacreategrn_issueofrebuild[".editFields"][] = "SystemDate";

$tdatacreategrn_issueofrebuild[".inlineEditFields"] = array();

$tdatacreategrn_issueofrebuild[".exportFields"] = array();
$tdatacreategrn_issueofrebuild[".exportFields"][] = "ID";
$tdatacreategrn_issueofrebuild[".exportFields"][] = "Status";
$tdatacreategrn_issueofrebuild[".exportFields"][] = "Fleet";
$tdatacreategrn_issueofrebuild[".exportFields"][] = "RemovedFrom";
$tdatacreategrn_issueofrebuild[".exportFields"][] = "GRNDate";
$tdatacreategrn_issueofrebuild[".exportFields"][] = "ItemCode";
$tdatacreategrn_issueofrebuild[".exportFields"][] = "PriceLink";
$tdatacreategrn_issueofrebuild[".exportFields"][] = "Quantity";
$tdatacreategrn_issueofrebuild[".exportFields"][] = "Brand";
$tdatacreategrn_issueofrebuild[".exportFields"][] = "Description";
$tdatacreategrn_issueofrebuild[".exportFields"][] = "Supplier";
$tdatacreategrn_issueofrebuild[".exportFields"][] = "UnitPrice";
$tdatacreategrn_issueofrebuild[".exportFields"][] = "Cost";
$tdatacreategrn_issueofrebuild[".exportFields"][] = "ApprovedBy";
$tdatacreategrn_issueofrebuild[".exportFields"][] = "EnteredBy";
$tdatacreategrn_issueofrebuild[".exportFields"][] = "CurrentStock";
$tdatacreategrn_issueofrebuild[".exportFields"][] = "SystemDate";

$tdatacreategrn_issueofrebuild[".importFields"] = array();
$tdatacreategrn_issueofrebuild[".importFields"][] = "ID";
$tdatacreategrn_issueofrebuild[".importFields"][] = "ItemCode";
$tdatacreategrn_issueofrebuild[".importFields"][] = "Brand";
$tdatacreategrn_issueofrebuild[".importFields"][] = "Description";
$tdatacreategrn_issueofrebuild[".importFields"][] = "Supplier";
$tdatacreategrn_issueofrebuild[".importFields"][] = "Quantity";
$tdatacreategrn_issueofrebuild[".importFields"][] = "RemovedFrom";
$tdatacreategrn_issueofrebuild[".importFields"][] = "SystemDate";
$tdatacreategrn_issueofrebuild[".importFields"][] = "GRNDate";
$tdatacreategrn_issueofrebuild[".importFields"][] = "EnteredBy";
$tdatacreategrn_issueofrebuild[".importFields"][] = "ApprovedBy";
$tdatacreategrn_issueofrebuild[".importFields"][] = "UnitPrice";
$tdatacreategrn_issueofrebuild[".importFields"][] = "Status";
$tdatacreategrn_issueofrebuild[".importFields"][] = "CurrentStock";
$tdatacreategrn_issueofrebuild[".importFields"][] = "Fleet";
$tdatacreategrn_issueofrebuild[".importFields"][] = "PriceLink";
$tdatacreategrn_issueofrebuild[".importFields"][] = "Cost";

$tdatacreategrn_issueofrebuild[".printFields"] = array();
$tdatacreategrn_issueofrebuild[".printFields"][] = "ID";
$tdatacreategrn_issueofrebuild[".printFields"][] = "Status";
$tdatacreategrn_issueofrebuild[".printFields"][] = "Fleet";
$tdatacreategrn_issueofrebuild[".printFields"][] = "RemovedFrom";
$tdatacreategrn_issueofrebuild[".printFields"][] = "GRNDate";
$tdatacreategrn_issueofrebuild[".printFields"][] = "ItemCode";
$tdatacreategrn_issueofrebuild[".printFields"][] = "Quantity";
$tdatacreategrn_issueofrebuild[".printFields"][] = "PriceLink";
$tdatacreategrn_issueofrebuild[".printFields"][] = "Brand";
$tdatacreategrn_issueofrebuild[".printFields"][] = "Description";
$tdatacreategrn_issueofrebuild[".printFields"][] = "Supplier";
$tdatacreategrn_issueofrebuild[".printFields"][] = "UnitPrice";
$tdatacreategrn_issueofrebuild[".printFields"][] = "ApprovedBy";
$tdatacreategrn_issueofrebuild[".printFields"][] = "Cost";
$tdatacreategrn_issueofrebuild[".printFields"][] = "EnteredBy";
$tdatacreategrn_issueofrebuild[".printFields"][] = "CurrentStock";
$tdatacreategrn_issueofrebuild[".printFields"][] = "SystemDate";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuild","ID"); 
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
	
	
	
	

	

	
	$tdatacreategrn_issueofrebuild["ID"] = $fdata;
//	ItemCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemCode";
	$fdata["GoodName"] = "ItemCode";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuild","ItemCode"); 
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
	$edata["autoCompleteFields"][] = array('masterF'=>"CurrentStock", 'lookupF'=>"SUM(Quantity)");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacreategrn_issueofrebuild["ItemCode"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuild","Brand"); 
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacreategrn_issueofrebuild["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuild","Description"); 
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacreategrn_issueofrebuild["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuild","Supplier"); 
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacreategrn_issueofrebuild["Supplier"] = $fdata;
//	Quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Quantity";
	$fdata["GoodName"] = "Quantity";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuild","Quantity"); 
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

	

	
	$tdatacreategrn_issueofrebuild["Quantity"] = $fdata;
//	RemovedFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RemovedFrom";
	$fdata["GoodName"] = "RemovedFrom";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuild","RemovedFrom"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "RemovedFrom"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RemovedFrom";
	
		
		
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

	

	
	$tdatacreategrn_issueofrebuild["RemovedFrom"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuild","SystemDate"); 
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacreategrn_issueofrebuild["SystemDate"] = $fdata;
//	GRNDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "GRNDate";
	$fdata["GoodName"] = "GRNDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuild","GRNDate"); 
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

	

	
	$tdatacreategrn_issueofrebuild["GRNDate"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuild","EnteredBy"); 
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

	

	
	$tdatacreategrn_issueofrebuild["EnteredBy"] = $fdata;
//	ApprovedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ApprovedBy";
	$fdata["GoodName"] = "ApprovedBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuild","ApprovedBy"); 
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
	
	
	
	

	

	
	$tdatacreategrn_issueofrebuild["ApprovedBy"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuild","UnitPrice"); 
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

	

	
	$tdatacreategrn_issueofrebuild["UnitPrice"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuild","Status"); 
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacreategrn_issueofrebuild["Status"] = $fdata;
//	RefNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RefNumber";
	$fdata["GoodName"] = "RefNumber";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuild","RefNumber"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "RefNumber"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RefNumber";
	
		
		
				
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
	
	
	
	

	

	
	$tdatacreategrn_issueofrebuild["RefNumber"] = $fdata;
//	CurrentStock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "CurrentStock";
	$fdata["GoodName"] = "CurrentStock";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuild","CurrentStock"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CurrentStock"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(CurrentStock)";
	
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacreategrn_issueofrebuild["CurrentStock"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuild","Fleet"); 
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacreategrn_issueofrebuild["Fleet"] = $fdata;
//	PriceLink
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "PriceLink";
	$fdata["GoodName"] = "PriceLink";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuild","PriceLink"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "PriceLink"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PriceLink";
	
		
		
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
	$edata["LookupTable"] = "inventorymaster-pricing";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"UnitPrice", 'lookupF'=>"UnitPrice");
	$edata["LCType"] = 0;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "ItemID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ItemID";
	
		
	$edata["LookupOrderBy"] = "ItemID";
	
		$edata["LookupDesc"] = true;
	
			
		
				
	
	
		
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

	

	
	$tdatacreategrn_issueofrebuild["PriceLink"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuild","Cost"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Cost"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Quantity*UnitPrice*-1";
	
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacreategrn_issueofrebuild["Cost"] = $fdata;

	
$tables_data["creategrn-issueofrebuild"]=&$tdatacreategrn_issueofrebuild;
$field_labels["creategrn_issueofrebuild"] = &$fieldLabelscreategrn_issueofrebuild;
$fieldToolTips["creategrn-issueofrebuild"] = &$fieldToolTipscreategrn_issueofrebuild;
$page_titles["creategrn_issueofrebuild"] = &$pageTitlescreategrn_issueofrebuild;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["creategrn-issueofrebuild"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["creategrn-issueofrebuild"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_creategrn_issueofrebuild()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  SUM(CurrentStock) AS CurrentStock,  Fleet,  PriceLink,  Quantity*UnitPrice*-1 AS Cost";
$proto0["m_strFrom"] = "FROM creategrn";
$proto0["m_strWhere"] = "(Status =\"Issue\")";
$proto0["m_strOrderBy"] = "ORDER BY CurrentStock DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "Status =\"Issue\"";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=\"Issue\"";
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
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "creategrn-issueofrebuild";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto7["m_sql"] = "ItemCode";
$proto7["m_srcTableName"] = "creategrn-issueofrebuild";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto9["m_sql"] = "Brand";
$proto9["m_srcTableName"] = "creategrn-issueofrebuild";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto11["m_sql"] = "Description";
$proto11["m_srcTableName"] = "creategrn-issueofrebuild";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto13["m_sql"] = "Supplier";
$proto13["m_srcTableName"] = "creategrn-issueofrebuild";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto15["m_sql"] = "Quantity";
$proto15["m_srcTableName"] = "creategrn-issueofrebuild";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto17["m_sql"] = "RemovedFrom";
$proto17["m_srcTableName"] = "creategrn-issueofrebuild";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto19["m_sql"] = "SystemDate";
$proto19["m_srcTableName"] = "creategrn-issueofrebuild";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto21["m_sql"] = "GRNDate";
$proto21["m_srcTableName"] = "creategrn-issueofrebuild";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto23["m_sql"] = "EnteredBy";
$proto23["m_srcTableName"] = "creategrn-issueofrebuild";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto25["m_sql"] = "ApprovedBy";
$proto25["m_srcTableName"] = "creategrn-issueofrebuild";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto27["m_sql"] = "UnitPrice";
$proto27["m_srcTableName"] = "creategrn-issueofrebuild";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto29["m_sql"] = "Status";
$proto29["m_srcTableName"] = "creategrn-issueofrebuild";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto31["m_sql"] = "RefNumber";
$proto31["m_srcTableName"] = "creategrn-issueofrebuild";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$proto34=array();
$proto34["m_functiontype"] = "SQLF_SUM";
$proto34["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "CurrentStock",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto34["m_arguments"][]=$obj;
$proto34["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto34);

$proto33["m_sql"] = "SUM(CurrentStock)";
$proto33["m_srcTableName"] = "creategrn-issueofrebuild";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "CurrentStock";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto36["m_sql"] = "Fleet";
$proto36["m_srcTableName"] = "creategrn-issueofrebuild";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "PriceLink",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto38["m_sql"] = "PriceLink";
$proto38["m_srcTableName"] = "creategrn-issueofrebuild";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "Quantity*UnitPrice*-1"
));

$proto40["m_sql"] = "Quantity*UnitPrice*-1";
$proto40["m_srcTableName"] = "creategrn-issueofrebuild";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "Cost";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "creategrn";
$proto43["m_srcTableName"] = "creategrn-issueofrebuild";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "ID";
$proto43["m_columns"][] = "ItemCode";
$proto43["m_columns"][] = "Brand";
$proto43["m_columns"][] = "Description";
$proto43["m_columns"][] = "Supplier";
$proto43["m_columns"][] = "Quantity";
$proto43["m_columns"][] = "RemovedFrom";
$proto43["m_columns"][] = "SystemDate";
$proto43["m_columns"][] = "GRNDate";
$proto43["m_columns"][] = "EnteredBy";
$proto43["m_columns"][] = "ApprovedBy";
$proto43["m_columns"][] = "UnitPrice";
$proto43["m_columns"][] = "Status";
$proto43["m_columns"][] = "RefNumber";
$proto43["m_columns"][] = "CurrentStock";
$proto43["m_columns"][] = "Fleet";
$proto43["m_columns"][] = "PriceLink";
$proto43["m_columns"][] = "Cost";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "creategrn";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "creategrn-issueofrebuild";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto50["m_column"]=$obj;
$obj = new SQLGroupByItem($proto50);

$proto0["m_groupby"][]=$obj;
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto52["m_column"]=$obj;
$obj = new SQLGroupByItem($proto52);

$proto0["m_groupby"][]=$obj;
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto54["m_column"]=$obj;
$obj = new SQLGroupByItem($proto54);

$proto0["m_groupby"][]=$obj;
												$proto56=array();
						$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto56["m_column"]=$obj;
$obj = new SQLGroupByItem($proto56);

$proto0["m_groupby"][]=$obj;
												$proto58=array();
						$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto58["m_column"]=$obj;
$obj = new SQLGroupByItem($proto58);

$proto0["m_groupby"][]=$obj;
												$proto60=array();
						$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto60["m_column"]=$obj;
$obj = new SQLGroupByItem($proto60);

$proto0["m_groupby"][]=$obj;
												$proto62=array();
						$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto62["m_column"]=$obj;
$obj = new SQLGroupByItem($proto62);

$proto0["m_groupby"][]=$obj;
												$proto64=array();
						$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto64["m_column"]=$obj;
$obj = new SQLGroupByItem($proto64);

$proto0["m_groupby"][]=$obj;
												$proto66=array();
						$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto66["m_column"]=$obj;
$obj = new SQLGroupByItem($proto66);

$proto0["m_groupby"][]=$obj;
												$proto68=array();
						$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto68["m_column"]=$obj;
$obj = new SQLGroupByItem($proto68);

$proto0["m_groupby"][]=$obj;
												$proto70=array();
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto70["m_column"]=$obj;
$obj = new SQLGroupByItem($proto70);

$proto0["m_groupby"][]=$obj;
												$proto72=array();
						$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto72["m_column"]=$obj;
$obj = new SQLGroupByItem($proto72);

$proto0["m_groupby"][]=$obj;
												$proto74=array();
						$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto74["m_column"]=$obj;
$obj = new SQLGroupByItem($proto74);

$proto0["m_groupby"][]=$obj;
												$proto76=array();
						$obj = new SQLField(array(
	"m_strName" => "PriceLink",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto76["m_column"]=$obj;
$obj = new SQLGroupByItem($proto76);

$proto0["m_groupby"][]=$obj;
												$proto78=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Quantity*UnitPrice*-1"
));

$proto78["m_column"]=$obj;
$obj = new SQLGroupByItem($proto78);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto80=array();
						$obj = new SQLField(array(
	"m_strName" => "CurrentStock",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuild"
));

$proto80["m_column"]=$obj;
$proto80["m_bAsc"] = 0;
$proto80["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto80);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="creategrn-issueofrebuild";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_creategrn_issueofrebuild = createSqlQuery_creategrn_issueofrebuild();


	
																		
	
$tdatacreategrn_issueofrebuild[".sqlquery"] = $queryData_creategrn_issueofrebuild;

include_once(getabspath("include/creategrn_issueofrebuild_events.php"));
$tableEvents["creategrn-issueofrebuild"] = new eventclass_creategrn_issueofrebuild;
$tdatacreategrn_issueofrebuild[".hasEvents"] = true;

?>