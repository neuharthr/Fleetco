<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacreategrn_rebuilt_issue = array();	
	$tdatacreategrn_rebuilt_issue[".truncateText"] = true;
	$tdatacreategrn_rebuilt_issue[".NumberOfChars"] = 80; 
	$tdatacreategrn_rebuilt_issue[".ShortName"] = "creategrn_rebuilt_issue";
	$tdatacreategrn_rebuilt_issue[".OwnerID"] = "";
	$tdatacreategrn_rebuilt_issue[".OriginalTable"] = "creategrn";

//	field labels
$fieldLabelscreategrn_rebuilt_issue = array();
$fieldToolTipscreategrn_rebuilt_issue = array();
$pageTitlescreategrn_rebuilt_issue = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscreategrn_rebuilt_issue["English"] = array();
	$fieldToolTipscreategrn_rebuilt_issue["English"] = array();
	$pageTitlescreategrn_rebuilt_issue["English"] = array();
	$fieldLabelscreategrn_rebuilt_issue["English"]["ItemCode"] = "Item Code";
	$fieldToolTipscreategrn_rebuilt_issue["English"]["ItemCode"] = "";
	$fieldLabelscreategrn_rebuilt_issue["English"]["Brand"] = "Brand";
	$fieldToolTipscreategrn_rebuilt_issue["English"]["Brand"] = "";
	$fieldLabelscreategrn_rebuilt_issue["English"]["Description"] = "Descr.";
	$fieldToolTipscreategrn_rebuilt_issue["English"]["Description"] = "";
	$fieldLabelscreategrn_rebuilt_issue["English"]["Supplier"] = "Supplier";
	$fieldToolTipscreategrn_rebuilt_issue["English"]["Supplier"] = "";
	$fieldLabelscreategrn_rebuilt_issue["English"]["Quantity"] = "Qty";
	$fieldToolTipscreategrn_rebuilt_issue["English"]["Quantity"] = "";
	$fieldLabelscreategrn_rebuilt_issue["English"]["RemovedFrom"] = "Vehicle";
	$fieldToolTipscreategrn_rebuilt_issue["English"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_rebuilt_issue["English"]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn_rebuilt_issue["English"]["SystemDate"] = "";
	$fieldLabelscreategrn_rebuilt_issue["English"]["EnteredBy"] = "Entered";
	$fieldToolTipscreategrn_rebuilt_issue["English"]["EnteredBy"] = "";
	$fieldLabelscreategrn_rebuilt_issue["English"]["ApprovedBy"] = "Edited By";
	$fieldToolTipscreategrn_rebuilt_issue["English"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_rebuilt_issue["English"]["Status"] = "Type";
	$fieldToolTipscreategrn_rebuilt_issue["English"]["Status"] = "";
	$fieldLabelscreategrn_rebuilt_issue["English"]["ID"] = "ID";
	$fieldToolTipscreategrn_rebuilt_issue["English"]["ID"] = "";
	$fieldLabelscreategrn_rebuilt_issue["English"]["RefNumber"] = "Ref No.";
	$fieldToolTipscreategrn_rebuilt_issue["English"]["RefNumber"] = "";
	$fieldLabelscreategrn_rebuilt_issue["English"]["Cost"] = "Cost";
	$fieldToolTipscreategrn_rebuilt_issue["English"]["Cost"] = "";
	$fieldLabelscreategrn_rebuilt_issue["English"]["Fleet"] = "Fleet";
	$fieldToolTipscreategrn_rebuilt_issue["English"]["Fleet"] = "";
	$fieldLabelscreategrn_rebuilt_issue["English"]["GRNDate"] = "Date";
	$fieldToolTipscreategrn_rebuilt_issue["English"]["GRNDate"] = "";
	$fieldLabelscreategrn_rebuilt_issue["English"]["UnitPrice"] = "Rate";
	$fieldToolTipscreategrn_rebuilt_issue["English"]["UnitPrice"] = "";
	$fieldLabelscreategrn_rebuilt_issue["English"]["CurrentStock"] = "In-Stock";
	$fieldToolTipscreategrn_rebuilt_issue["English"]["CurrentStock"] = "";
	$fieldLabelscreategrn_rebuilt_issue["English"]["PriceLink"] = "Cost Code";
	$fieldToolTipscreategrn_rebuilt_issue["English"]["PriceLink"] = "";
	if (count($fieldToolTipscreategrn_rebuilt_issue["English"]))
		$tdatacreategrn_rebuilt_issue[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscreategrn_rebuilt_issue[""] = array();
	$fieldToolTipscreategrn_rebuilt_issue[""] = array();
	$pageTitlescreategrn_rebuilt_issue[""] = array();
	$fieldLabelscreategrn_rebuilt_issue[""]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn_rebuilt_issue[""]["SystemDate"] = "";
	$fieldLabelscreategrn_rebuilt_issue[""]["EnteredBy"] = "Entered By";
	$fieldToolTipscreategrn_rebuilt_issue[""]["EnteredBy"] = "";
	$fieldLabelscreategrn_rebuilt_issue[""]["ApprovedBy"] = "Approved By";
	$fieldToolTipscreategrn_rebuilt_issue[""]["ApprovedBy"] = "";
	$fieldLabelscreategrn_rebuilt_issue[""]["Status"] = "Status";
	$fieldToolTipscreategrn_rebuilt_issue[""]["Status"] = "";
	$fieldLabelscreategrn_rebuilt_issue[""]["ID"] = "ID";
	$fieldToolTipscreategrn_rebuilt_issue[""]["ID"] = "";
	$fieldLabelscreategrn_rebuilt_issue[""]["RefNumber"] = "Ref Number";
	$fieldToolTipscreategrn_rebuilt_issue[""]["RefNumber"] = "";
	$fieldLabelscreategrn_rebuilt_issue[""]["Cost"] = "Cost";
	$fieldToolTipscreategrn_rebuilt_issue[""]["Cost"] = "";
	$fieldLabelscreategrn_rebuilt_issue[""]["Fleet"] = "Fleet";
	$fieldToolTipscreategrn_rebuilt_issue[""]["Fleet"] = "";
	$fieldLabelscreategrn_rebuilt_issue[""]["GRNDate"] = "GRNDate";
	$fieldToolTipscreategrn_rebuilt_issue[""]["GRNDate"] = "";
	$fieldLabelscreategrn_rebuilt_issue[""]["UnitPrice"] = "Unit Price";
	$fieldToolTipscreategrn_rebuilt_issue[""]["UnitPrice"] = "";
	$fieldLabelscreategrn_rebuilt_issue[""]["CurrentStock"] = "Current Stock";
	$fieldToolTipscreategrn_rebuilt_issue[""]["CurrentStock"] = "";
	$fieldLabelscreategrn_rebuilt_issue[""]["PriceLink"] = "Price Link";
	$fieldToolTipscreategrn_rebuilt_issue[""]["PriceLink"] = "";
	if (count($fieldToolTipscreategrn_rebuilt_issue[""]))
		$tdatacreategrn_rebuilt_issue[".isUseToolTips"] = true;
}
	
	
	$tdatacreategrn_rebuilt_issue[".NCSearch"] = true;



$tdatacreategrn_rebuilt_issue[".shortTableName"] = "creategrn_rebuilt_issue";
$tdatacreategrn_rebuilt_issue[".nSecOptions"] = 0;
$tdatacreategrn_rebuilt_issue[".recsPerRowList"] = 1;
$tdatacreategrn_rebuilt_issue[".recsPerRowPrint"] = 1;
$tdatacreategrn_rebuilt_issue[".mainTableOwnerID"] = "";
$tdatacreategrn_rebuilt_issue[".moveNext"] = 1;
$tdatacreategrn_rebuilt_issue[".entityType"] = 1;

$tdatacreategrn_rebuilt_issue[".strOriginalTableName"] = "creategrn";




$tdatacreategrn_rebuilt_issue[".showAddInPopup"] = false;

$tdatacreategrn_rebuilt_issue[".showEditInPopup"] = false;

$tdatacreategrn_rebuilt_issue[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacreategrn_rebuilt_issue[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacreategrn_rebuilt_issue[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatacreategrn_rebuilt_issue[".listAjax"] = true;
else 
	$tdatacreategrn_rebuilt_issue[".listAjax"] = false;

	$tdatacreategrn_rebuilt_issue[".audit"] = false;

	$tdatacreategrn_rebuilt_issue[".locking"] = false;

$tdatacreategrn_rebuilt_issue[".edit"] = true;
$tdatacreategrn_rebuilt_issue[".afterEditAction"] = 1;
$tdatacreategrn_rebuilt_issue[".closePopupAfterEdit"] = 1;
$tdatacreategrn_rebuilt_issue[".afterEditActionDetTable"] = "";

$tdatacreategrn_rebuilt_issue[".add"] = true;
$tdatacreategrn_rebuilt_issue[".afterAddAction"] = 1;
$tdatacreategrn_rebuilt_issue[".closePopupAfterAdd"] = 1;
$tdatacreategrn_rebuilt_issue[".afterAddActionDetTable"] = "Detail tables not found!";

$tdatacreategrn_rebuilt_issue[".list"] = true;

$tdatacreategrn_rebuilt_issue[".view"] = true;

$tdatacreategrn_rebuilt_issue[".import"] = true;

$tdatacreategrn_rebuilt_issue[".exportTo"] = true;

$tdatacreategrn_rebuilt_issue[".printFriendly"] = true;

$tdatacreategrn_rebuilt_issue[".delete"] = true;

$tdatacreategrn_rebuilt_issue[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacreategrn_rebuilt_issue[".searchSaving"] = false;
//

$tdatacreategrn_rebuilt_issue[".showSearchPanel"] = true;
		$tdatacreategrn_rebuilt_issue[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacreategrn_rebuilt_issue[".isUseAjaxSuggest"] = false;
else 
	$tdatacreategrn_rebuilt_issue[".isUseAjaxSuggest"] = true;

$tdatacreategrn_rebuilt_issue[".rowHighlite"] = true;



$tdatacreategrn_rebuilt_issue[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacreategrn_rebuilt_issue[".isUseTimeForSearch"] = false;





$tdatacreategrn_rebuilt_issue[".allSearchFields"] = array();
$tdatacreategrn_rebuilt_issue[".filterFields"] = array();
$tdatacreategrn_rebuilt_issue[".requiredSearchFields"] = array();

$tdatacreategrn_rebuilt_issue[".allSearchFields"][] = "Status";
	$tdatacreategrn_rebuilt_issue[".allSearchFields"][] = "Fleet";
	$tdatacreategrn_rebuilt_issue[".allSearchFields"][] = "RemovedFrom";
	$tdatacreategrn_rebuilt_issue[".allSearchFields"][] = "GRNDate";
	$tdatacreategrn_rebuilt_issue[".allSearchFields"][] = "ItemCode";
	$tdatacreategrn_rebuilt_issue[".allSearchFields"][] = "PriceLink";
	$tdatacreategrn_rebuilt_issue[".allSearchFields"][] = "Quantity";
	$tdatacreategrn_rebuilt_issue[".allSearchFields"][] = "Brand";
	$tdatacreategrn_rebuilt_issue[".allSearchFields"][] = "Description";
	$tdatacreategrn_rebuilt_issue[".allSearchFields"][] = "Supplier";
	$tdatacreategrn_rebuilt_issue[".allSearchFields"][] = "UnitPrice";
	$tdatacreategrn_rebuilt_issue[".allSearchFields"][] = "Cost";
	$tdatacreategrn_rebuilt_issue[".allSearchFields"][] = "CurrentStock";
	$tdatacreategrn_rebuilt_issue[".allSearchFields"][] = "EnteredBy";
	$tdatacreategrn_rebuilt_issue[".allSearchFields"][] = "SystemDate";
	

$tdatacreategrn_rebuilt_issue[".googleLikeFields"] = array();
$tdatacreategrn_rebuilt_issue[".googleLikeFields"][] = "ID";
$tdatacreategrn_rebuilt_issue[".googleLikeFields"][] = "ItemCode";
$tdatacreategrn_rebuilt_issue[".googleLikeFields"][] = "Brand";
$tdatacreategrn_rebuilt_issue[".googleLikeFields"][] = "Description";
$tdatacreategrn_rebuilt_issue[".googleLikeFields"][] = "Supplier";
$tdatacreategrn_rebuilt_issue[".googleLikeFields"][] = "Quantity";
$tdatacreategrn_rebuilt_issue[".googleLikeFields"][] = "RemovedFrom";
$tdatacreategrn_rebuilt_issue[".googleLikeFields"][] = "SystemDate";
$tdatacreategrn_rebuilt_issue[".googleLikeFields"][] = "GRNDate";
$tdatacreategrn_rebuilt_issue[".googleLikeFields"][] = "EnteredBy";
$tdatacreategrn_rebuilt_issue[".googleLikeFields"][] = "ApprovedBy";
$tdatacreategrn_rebuilt_issue[".googleLikeFields"][] = "UnitPrice";
$tdatacreategrn_rebuilt_issue[".googleLikeFields"][] = "Status";
$tdatacreategrn_rebuilt_issue[".googleLikeFields"][] = "RefNumber";
$tdatacreategrn_rebuilt_issue[".googleLikeFields"][] = "CurrentStock";
$tdatacreategrn_rebuilt_issue[".googleLikeFields"][] = "Fleet";
$tdatacreategrn_rebuilt_issue[".googleLikeFields"][] = "PriceLink";
$tdatacreategrn_rebuilt_issue[".googleLikeFields"][] = "Cost";


$tdatacreategrn_rebuilt_issue[".advSearchFields"] = array();
$tdatacreategrn_rebuilt_issue[".advSearchFields"][] = "Status";
$tdatacreategrn_rebuilt_issue[".advSearchFields"][] = "Fleet";
$tdatacreategrn_rebuilt_issue[".advSearchFields"][] = "RemovedFrom";
$tdatacreategrn_rebuilt_issue[".advSearchFields"][] = "GRNDate";
$tdatacreategrn_rebuilt_issue[".advSearchFields"][] = "ItemCode";
$tdatacreategrn_rebuilt_issue[".advSearchFields"][] = "PriceLink";
$tdatacreategrn_rebuilt_issue[".advSearchFields"][] = "Quantity";
$tdatacreategrn_rebuilt_issue[".advSearchFields"][] = "Brand";
$tdatacreategrn_rebuilt_issue[".advSearchFields"][] = "Description";
$tdatacreategrn_rebuilt_issue[".advSearchFields"][] = "Supplier";
$tdatacreategrn_rebuilt_issue[".advSearchFields"][] = "UnitPrice";
$tdatacreategrn_rebuilt_issue[".advSearchFields"][] = "Cost";
$tdatacreategrn_rebuilt_issue[".advSearchFields"][] = "CurrentStock";
$tdatacreategrn_rebuilt_issue[".advSearchFields"][] = "EnteredBy";
$tdatacreategrn_rebuilt_issue[".advSearchFields"][] = "SystemDate";

$tdatacreategrn_rebuilt_issue[".tableType"] = "list";

$tdatacreategrn_rebuilt_issue[".printerPageOrientation"] = 0;
$tdatacreategrn_rebuilt_issue[".nPrinterPageScale"] = 100;

$tdatacreategrn_rebuilt_issue[".nPrinterSplitRecords"] = 40;

$tdatacreategrn_rebuilt_issue[".nPrinterPDFSplitRecords"] = 40;



$tdatacreategrn_rebuilt_issue[".geocodingEnabled"] = false;




	





// view page pdf
$tdatacreategrn_rebuilt_issue[".isViewPagePDF"] = true;
$tdatacreategrn_rebuilt_issue[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatacreategrn_rebuilt_issue[".isPrinterPagePDF"] = true;
$tdatacreategrn_rebuilt_issue[".nPrinterPagePDFScale"] = 100;

$tdatacreategrn_rebuilt_issue[".totalsFields"] = array();
$tdatacreategrn_rebuilt_issue[".totalsFields"][] = array(
	"fName" => "Cost", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatacreategrn_rebuilt_issue[".pageSize"] = 20;

$tdatacreategrn_rebuilt_issue[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY CurrentStock DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacreategrn_rebuilt_issue[".strOrderBy"] = $tstrOrderBy;

$tdatacreategrn_rebuilt_issue[".orderindexes"] = array();
$tdatacreategrn_rebuilt_issue[".orderindexes"][] = array(15, (0 ? "ASC" : "DESC"), "CurrentStock");

$tdatacreategrn_rebuilt_issue[".sqlHead"] = "SELECT ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  SUM(CurrentStock) AS CurrentStock,  Fleet,  PriceLink,  Cost";
$tdatacreategrn_rebuilt_issue[".sqlFrom"] = "FROM creategrn";
$tdatacreategrn_rebuilt_issue[".sqlWhereExpr"] = "(Status =\"Rebuilt Issue\")";
$tdatacreategrn_rebuilt_issue[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatacreategrn_rebuilt_issue[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacreategrn_rebuilt_issue[".arrGroupsPerPage"] = $arrGPP;

$tdatacreategrn_rebuilt_issue[".highlightSearchResults"] = true;

$tableKeyscreategrn_rebuilt_issue = array();
$tableKeyscreategrn_rebuilt_issue[] = "ID";
$tdatacreategrn_rebuilt_issue[".Keys"] = $tableKeyscreategrn_rebuilt_issue;

$tdatacreategrn_rebuilt_issue[".listFields"] = array();
$tdatacreategrn_rebuilt_issue[".listFields"][] = "ID";
$tdatacreategrn_rebuilt_issue[".listFields"][] = "Status";
$tdatacreategrn_rebuilt_issue[".listFields"][] = "Fleet";
$tdatacreategrn_rebuilt_issue[".listFields"][] = "RemovedFrom";
$tdatacreategrn_rebuilt_issue[".listFields"][] = "GRNDate";
$tdatacreategrn_rebuilt_issue[".listFields"][] = "ItemCode";
$tdatacreategrn_rebuilt_issue[".listFields"][] = "Brand";
$tdatacreategrn_rebuilt_issue[".listFields"][] = "Description";
$tdatacreategrn_rebuilt_issue[".listFields"][] = "Supplier";
$tdatacreategrn_rebuilt_issue[".listFields"][] = "Quantity";
$tdatacreategrn_rebuilt_issue[".listFields"][] = "UnitPrice";
$tdatacreategrn_rebuilt_issue[".listFields"][] = "Cost";
$tdatacreategrn_rebuilt_issue[".listFields"][] = "EnteredBy";

$tdatacreategrn_rebuilt_issue[".hideMobileList"] = array();


$tdatacreategrn_rebuilt_issue[".viewFields"] = array();
$tdatacreategrn_rebuilt_issue[".viewFields"][] = "ID";
$tdatacreategrn_rebuilt_issue[".viewFields"][] = "Status";
$tdatacreategrn_rebuilt_issue[".viewFields"][] = "Fleet";
$tdatacreategrn_rebuilt_issue[".viewFields"][] = "RemovedFrom";
$tdatacreategrn_rebuilt_issue[".viewFields"][] = "GRNDate";
$tdatacreategrn_rebuilt_issue[".viewFields"][] = "ItemCode";
$tdatacreategrn_rebuilt_issue[".viewFields"][] = "Quantity";
$tdatacreategrn_rebuilt_issue[".viewFields"][] = "Brand";
$tdatacreategrn_rebuilt_issue[".viewFields"][] = "Description";
$tdatacreategrn_rebuilt_issue[".viewFields"][] = "Supplier";
$tdatacreategrn_rebuilt_issue[".viewFields"][] = "UnitPrice";
$tdatacreategrn_rebuilt_issue[".viewFields"][] = "ApprovedBy";
$tdatacreategrn_rebuilt_issue[".viewFields"][] = "Cost";
$tdatacreategrn_rebuilt_issue[".viewFields"][] = "CurrentStock";
$tdatacreategrn_rebuilt_issue[".viewFields"][] = "EnteredBy";
$tdatacreategrn_rebuilt_issue[".viewFields"][] = "SystemDate";

$tdatacreategrn_rebuilt_issue[".addFields"] = array();
$tdatacreategrn_rebuilt_issue[".addFields"][] = "Status";
$tdatacreategrn_rebuilt_issue[".addFields"][] = "Fleet";
$tdatacreategrn_rebuilt_issue[".addFields"][] = "RemovedFrom";
$tdatacreategrn_rebuilt_issue[".addFields"][] = "GRNDate";
$tdatacreategrn_rebuilt_issue[".addFields"][] = "ItemCode";
$tdatacreategrn_rebuilt_issue[".addFields"][] = "Quantity";
$tdatacreategrn_rebuilt_issue[".addFields"][] = "PriceLink";
$tdatacreategrn_rebuilt_issue[".addFields"][] = "Brand";
$tdatacreategrn_rebuilt_issue[".addFields"][] = "Description";
$tdatacreategrn_rebuilt_issue[".addFields"][] = "Supplier";
$tdatacreategrn_rebuilt_issue[".addFields"][] = "UnitPrice";
$tdatacreategrn_rebuilt_issue[".addFields"][] = "Cost";
$tdatacreategrn_rebuilt_issue[".addFields"][] = "EnteredBy";
$tdatacreategrn_rebuilt_issue[".addFields"][] = "CurrentStock";
$tdatacreategrn_rebuilt_issue[".addFields"][] = "SystemDate";

$tdatacreategrn_rebuilt_issue[".masterListFields"] = array();
$tdatacreategrn_rebuilt_issue[".masterListFields"][] = "ID";
$tdatacreategrn_rebuilt_issue[".masterListFields"][] = "Status";
$tdatacreategrn_rebuilt_issue[".masterListFields"][] = "Fleet";
$tdatacreategrn_rebuilt_issue[".masterListFields"][] = "RemovedFrom";
$tdatacreategrn_rebuilt_issue[".masterListFields"][] = "RefNumber";
$tdatacreategrn_rebuilt_issue[".masterListFields"][] = "GRNDate";
$tdatacreategrn_rebuilt_issue[".masterListFields"][] = "ItemCode";
$tdatacreategrn_rebuilt_issue[".masterListFields"][] = "Quantity";
$tdatacreategrn_rebuilt_issue[".masterListFields"][] = "PriceLink";
$tdatacreategrn_rebuilt_issue[".masterListFields"][] = "Brand";
$tdatacreategrn_rebuilt_issue[".masterListFields"][] = "Description";
$tdatacreategrn_rebuilt_issue[".masterListFields"][] = "Supplier";
$tdatacreategrn_rebuilt_issue[".masterListFields"][] = "UnitPrice";
$tdatacreategrn_rebuilt_issue[".masterListFields"][] = "Cost";
$tdatacreategrn_rebuilt_issue[".masterListFields"][] = "ApprovedBy";
$tdatacreategrn_rebuilt_issue[".masterListFields"][] = "EnteredBy";
$tdatacreategrn_rebuilt_issue[".masterListFields"][] = "CurrentStock";
$tdatacreategrn_rebuilt_issue[".masterListFields"][] = "SystemDate";

$tdatacreategrn_rebuilt_issue[".inlineAddFields"] = array();

$tdatacreategrn_rebuilt_issue[".editFields"] = array();
$tdatacreategrn_rebuilt_issue[".editFields"][] = "Status";
$tdatacreategrn_rebuilt_issue[".editFields"][] = "Fleet";
$tdatacreategrn_rebuilt_issue[".editFields"][] = "RemovedFrom";
$tdatacreategrn_rebuilt_issue[".editFields"][] = "GRNDate";
$tdatacreategrn_rebuilt_issue[".editFields"][] = "ItemCode";
$tdatacreategrn_rebuilt_issue[".editFields"][] = "PriceLink";
$tdatacreategrn_rebuilt_issue[".editFields"][] = "Quantity";
$tdatacreategrn_rebuilt_issue[".editFields"][] = "Brand";
$tdatacreategrn_rebuilt_issue[".editFields"][] = "Description";
$tdatacreategrn_rebuilt_issue[".editFields"][] = "Supplier";
$tdatacreategrn_rebuilt_issue[".editFields"][] = "UnitPrice";
$tdatacreategrn_rebuilt_issue[".editFields"][] = "ApprovedBy";
$tdatacreategrn_rebuilt_issue[".editFields"][] = "Cost";
$tdatacreategrn_rebuilt_issue[".editFields"][] = "EnteredBy";
$tdatacreategrn_rebuilt_issue[".editFields"][] = "CurrentStock";
$tdatacreategrn_rebuilt_issue[".editFields"][] = "SystemDate";

$tdatacreategrn_rebuilt_issue[".inlineEditFields"] = array();

$tdatacreategrn_rebuilt_issue[".exportFields"] = array();
$tdatacreategrn_rebuilt_issue[".exportFields"][] = "ID";
$tdatacreategrn_rebuilt_issue[".exportFields"][] = "Status";
$tdatacreategrn_rebuilt_issue[".exportFields"][] = "Fleet";
$tdatacreategrn_rebuilt_issue[".exportFields"][] = "RemovedFrom";
$tdatacreategrn_rebuilt_issue[".exportFields"][] = "GRNDate";
$tdatacreategrn_rebuilt_issue[".exportFields"][] = "ItemCode";
$tdatacreategrn_rebuilt_issue[".exportFields"][] = "PriceLink";
$tdatacreategrn_rebuilt_issue[".exportFields"][] = "Quantity";
$tdatacreategrn_rebuilt_issue[".exportFields"][] = "Brand";
$tdatacreategrn_rebuilt_issue[".exportFields"][] = "Description";
$tdatacreategrn_rebuilt_issue[".exportFields"][] = "Supplier";
$tdatacreategrn_rebuilt_issue[".exportFields"][] = "UnitPrice";
$tdatacreategrn_rebuilt_issue[".exportFields"][] = "Cost";
$tdatacreategrn_rebuilt_issue[".exportFields"][] = "ApprovedBy";
$tdatacreategrn_rebuilt_issue[".exportFields"][] = "EnteredBy";
$tdatacreategrn_rebuilt_issue[".exportFields"][] = "CurrentStock";
$tdatacreategrn_rebuilt_issue[".exportFields"][] = "SystemDate";

$tdatacreategrn_rebuilt_issue[".importFields"] = array();
$tdatacreategrn_rebuilt_issue[".importFields"][] = "ID";
$tdatacreategrn_rebuilt_issue[".importFields"][] = "ItemCode";
$tdatacreategrn_rebuilt_issue[".importFields"][] = "Brand";
$tdatacreategrn_rebuilt_issue[".importFields"][] = "Description";
$tdatacreategrn_rebuilt_issue[".importFields"][] = "Supplier";
$tdatacreategrn_rebuilt_issue[".importFields"][] = "Quantity";
$tdatacreategrn_rebuilt_issue[".importFields"][] = "RemovedFrom";
$tdatacreategrn_rebuilt_issue[".importFields"][] = "SystemDate";
$tdatacreategrn_rebuilt_issue[".importFields"][] = "GRNDate";
$tdatacreategrn_rebuilt_issue[".importFields"][] = "EnteredBy";
$tdatacreategrn_rebuilt_issue[".importFields"][] = "ApprovedBy";
$tdatacreategrn_rebuilt_issue[".importFields"][] = "UnitPrice";
$tdatacreategrn_rebuilt_issue[".importFields"][] = "Status";
$tdatacreategrn_rebuilt_issue[".importFields"][] = "CurrentStock";
$tdatacreategrn_rebuilt_issue[".importFields"][] = "Fleet";
$tdatacreategrn_rebuilt_issue[".importFields"][] = "PriceLink";
$tdatacreategrn_rebuilt_issue[".importFields"][] = "Cost";

$tdatacreategrn_rebuilt_issue[".printFields"] = array();
$tdatacreategrn_rebuilt_issue[".printFields"][] = "ID";
$tdatacreategrn_rebuilt_issue[".printFields"][] = "Status";
$tdatacreategrn_rebuilt_issue[".printFields"][] = "Fleet";
$tdatacreategrn_rebuilt_issue[".printFields"][] = "RemovedFrom";
$tdatacreategrn_rebuilt_issue[".printFields"][] = "GRNDate";
$tdatacreategrn_rebuilt_issue[".printFields"][] = "ItemCode";
$tdatacreategrn_rebuilt_issue[".printFields"][] = "PriceLink";
$tdatacreategrn_rebuilt_issue[".printFields"][] = "Quantity";
$tdatacreategrn_rebuilt_issue[".printFields"][] = "Brand";
$tdatacreategrn_rebuilt_issue[".printFields"][] = "Description";
$tdatacreategrn_rebuilt_issue[".printFields"][] = "Supplier";
$tdatacreategrn_rebuilt_issue[".printFields"][] = "UnitPrice";
$tdatacreategrn_rebuilt_issue[".printFields"][] = "Cost";
$tdatacreategrn_rebuilt_issue[".printFields"][] = "ApprovedBy";
$tdatacreategrn_rebuilt_issue[".printFields"][] = "EnteredBy";
$tdatacreategrn_rebuilt_issue[".printFields"][] = "CurrentStock";
$tdatacreategrn_rebuilt_issue[".printFields"][] = "SystemDate";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_rebuilt_issue","ID"); 
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
	
	
	
	

	

	
	$tdatacreategrn_rebuilt_issue["ID"] = $fdata;
//	ItemCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemCode";
	$fdata["GoodName"] = "ItemCode";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_rebuilt_issue","ItemCode"); 
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
	$edata["LCType"] = 1;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "ItemID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ItemID";
	
		
	$edata["LookupOrderBy"] = "ItemID";
	
		
			
		
				
	
	
		
		
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

	

	
	$tdatacreategrn_rebuilt_issue["ItemCode"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_rebuilt_issue","Brand"); 
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

	

	
	$tdatacreategrn_rebuilt_issue["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_rebuilt_issue","Description"); 
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

	

	
	$tdatacreategrn_rebuilt_issue["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_rebuilt_issue","Supplier"); 
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

	

	
	$tdatacreategrn_rebuilt_issue["Supplier"] = $fdata;
//	Quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Quantity";
	$fdata["GoodName"] = "Quantity";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_rebuilt_issue","Quantity"); 
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

	

	
	$tdatacreategrn_rebuilt_issue["Quantity"] = $fdata;
//	RemovedFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RemovedFrom";
	$fdata["GoodName"] = "RemovedFrom";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_rebuilt_issue","RemovedFrom"); 
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

	

	
	$tdatacreategrn_rebuilt_issue["RemovedFrom"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_rebuilt_issue","SystemDate"); 
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

	

	
	$tdatacreategrn_rebuilt_issue["SystemDate"] = $fdata;
//	GRNDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "GRNDate";
	$fdata["GoodName"] = "GRNDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_rebuilt_issue","GRNDate"); 
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

	

	
	$tdatacreategrn_rebuilt_issue["GRNDate"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_rebuilt_issue","EnteredBy"); 
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

	

	
	$tdatacreategrn_rebuilt_issue["EnteredBy"] = $fdata;
//	ApprovedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ApprovedBy";
	$fdata["GoodName"] = "ApprovedBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_rebuilt_issue","ApprovedBy"); 
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
	
	
	
	

	

	
	$tdatacreategrn_rebuilt_issue["ApprovedBy"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_rebuilt_issue","UnitPrice"); 
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

	

	
	$tdatacreategrn_rebuilt_issue["UnitPrice"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_rebuilt_issue","Status"); 
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

	

	
	$tdatacreategrn_rebuilt_issue["Status"] = $fdata;
//	RefNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RefNumber";
	$fdata["GoodName"] = "RefNumber";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_rebuilt_issue","RefNumber"); 
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
	
	
	
	

	

	
	$tdatacreategrn_rebuilt_issue["RefNumber"] = $fdata;
//	CurrentStock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "CurrentStock";
	$fdata["GoodName"] = "CurrentStock";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("creategrn_rebuilt_issue","CurrentStock"); 
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

	

	
	$tdatacreategrn_rebuilt_issue["CurrentStock"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_rebuilt_issue","Fleet"); 
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

	

	
	$tdatacreategrn_rebuilt_issue["Fleet"] = $fdata;
//	PriceLink
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "PriceLink";
	$fdata["GoodName"] = "PriceLink";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_rebuilt_issue","PriceLink"); 
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
		$edata["autoCompleteFieldsOnEdit"] = 0;
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

	

	
	$tdatacreategrn_rebuilt_issue["PriceLink"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_rebuilt_issue","Cost"); 
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacreategrn_rebuilt_issue["Cost"] = $fdata;

	
$tables_data["creategrn-rebuilt-issue"]=&$tdatacreategrn_rebuilt_issue;
$field_labels["creategrn_rebuilt_issue"] = &$fieldLabelscreategrn_rebuilt_issue;
$fieldToolTips["creategrn-rebuilt-issue"] = &$fieldToolTipscreategrn_rebuilt_issue;
$page_titles["creategrn_rebuilt_issue"] = &$pageTitlescreategrn_rebuilt_issue;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["creategrn-rebuilt-issue"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["creategrn-rebuilt-issue"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_creategrn_rebuilt_issue()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  SUM(CurrentStock) AS CurrentStock,  Fleet,  PriceLink,  Cost";
$proto0["m_strFrom"] = "FROM creategrn";
$proto0["m_strWhere"] = "(Status =\"Rebuilt Issue\")";
$proto0["m_strOrderBy"] = "ORDER BY CurrentStock DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "Status =\"Rebuilt Issue\"";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=\"Rebuilt Issue\"";
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
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "creategrn-rebuilt-issue";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto7["m_sql"] = "ItemCode";
$proto7["m_srcTableName"] = "creategrn-rebuilt-issue";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto9["m_sql"] = "Brand";
$proto9["m_srcTableName"] = "creategrn-rebuilt-issue";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto11["m_sql"] = "Description";
$proto11["m_srcTableName"] = "creategrn-rebuilt-issue";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto13["m_sql"] = "Supplier";
$proto13["m_srcTableName"] = "creategrn-rebuilt-issue";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto15["m_sql"] = "Quantity";
$proto15["m_srcTableName"] = "creategrn-rebuilt-issue";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto17["m_sql"] = "RemovedFrom";
$proto17["m_srcTableName"] = "creategrn-rebuilt-issue";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto19["m_sql"] = "SystemDate";
$proto19["m_srcTableName"] = "creategrn-rebuilt-issue";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto21["m_sql"] = "GRNDate";
$proto21["m_srcTableName"] = "creategrn-rebuilt-issue";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto23["m_sql"] = "EnteredBy";
$proto23["m_srcTableName"] = "creategrn-rebuilt-issue";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto25["m_sql"] = "ApprovedBy";
$proto25["m_srcTableName"] = "creategrn-rebuilt-issue";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto27["m_sql"] = "UnitPrice";
$proto27["m_srcTableName"] = "creategrn-rebuilt-issue";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto29["m_sql"] = "Status";
$proto29["m_srcTableName"] = "creategrn-rebuilt-issue";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto31["m_sql"] = "RefNumber";
$proto31["m_srcTableName"] = "creategrn-rebuilt-issue";
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
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto34["m_arguments"][]=$obj;
$proto34["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto34);

$proto33["m_sql"] = "SUM(CurrentStock)";
$proto33["m_srcTableName"] = "creategrn-rebuilt-issue";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "CurrentStock";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto36["m_sql"] = "Fleet";
$proto36["m_srcTableName"] = "creategrn-rebuilt-issue";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "PriceLink",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto38["m_sql"] = "PriceLink";
$proto38["m_srcTableName"] = "creategrn-rebuilt-issue";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto40["m_sql"] = "Cost";
$proto40["m_srcTableName"] = "creategrn-rebuilt-issue";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "creategrn";
$proto43["m_srcTableName"] = "creategrn-rebuilt-issue";
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
$proto42["m_srcTableName"] = "creategrn-rebuilt-issue";
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
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto50["m_column"]=$obj;
$obj = new SQLGroupByItem($proto50);

$proto0["m_groupby"][]=$obj;
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto52["m_column"]=$obj;
$obj = new SQLGroupByItem($proto52);

$proto0["m_groupby"][]=$obj;
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto54["m_column"]=$obj;
$obj = new SQLGroupByItem($proto54);

$proto0["m_groupby"][]=$obj;
												$proto56=array();
						$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto56["m_column"]=$obj;
$obj = new SQLGroupByItem($proto56);

$proto0["m_groupby"][]=$obj;
												$proto58=array();
						$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto58["m_column"]=$obj;
$obj = new SQLGroupByItem($proto58);

$proto0["m_groupby"][]=$obj;
												$proto60=array();
						$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto60["m_column"]=$obj;
$obj = new SQLGroupByItem($proto60);

$proto0["m_groupby"][]=$obj;
												$proto62=array();
						$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto62["m_column"]=$obj;
$obj = new SQLGroupByItem($proto62);

$proto0["m_groupby"][]=$obj;
												$proto64=array();
						$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto64["m_column"]=$obj;
$obj = new SQLGroupByItem($proto64);

$proto0["m_groupby"][]=$obj;
												$proto66=array();
						$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto66["m_column"]=$obj;
$obj = new SQLGroupByItem($proto66);

$proto0["m_groupby"][]=$obj;
												$proto68=array();
						$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto68["m_column"]=$obj;
$obj = new SQLGroupByItem($proto68);

$proto0["m_groupby"][]=$obj;
												$proto70=array();
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto70["m_column"]=$obj;
$obj = new SQLGroupByItem($proto70);

$proto0["m_groupby"][]=$obj;
												$proto72=array();
						$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto72["m_column"]=$obj;
$obj = new SQLGroupByItem($proto72);

$proto0["m_groupby"][]=$obj;
												$proto74=array();
						$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto74["m_column"]=$obj;
$obj = new SQLGroupByItem($proto74);

$proto0["m_groupby"][]=$obj;
												$proto76=array();
						$obj = new SQLField(array(
	"m_strName" => "PriceLink",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto76["m_column"]=$obj;
$obj = new SQLGroupByItem($proto76);

$proto0["m_groupby"][]=$obj;
												$proto78=array();
						$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto78["m_column"]=$obj;
$obj = new SQLGroupByItem($proto78);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto80=array();
						$obj = new SQLField(array(
	"m_strName" => "CurrentStock",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-rebuilt-issue"
));

$proto80["m_column"]=$obj;
$proto80["m_bAsc"] = 0;
$proto80["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto80);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="creategrn-rebuilt-issue";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_creategrn_rebuilt_issue = createSqlQuery_creategrn_rebuilt_issue();


	
																		
	
$tdatacreategrn_rebuilt_issue[".sqlquery"] = $queryData_creategrn_rebuilt_issue;

include_once(getabspath("include/creategrn_rebuilt_issue_events.php"));
$tableEvents["creategrn-rebuilt-issue"] = new eventclass_creategrn_rebuilt_issue;
$tdatacreategrn_rebuilt_issue[".hasEvents"] = true;

?>