<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacreategrn_issueofrebuiltyres = array();	
	$tdatacreategrn_issueofrebuiltyres[".truncateText"] = true;
	$tdatacreategrn_issueofrebuiltyres[".NumberOfChars"] = 80; 
	$tdatacreategrn_issueofrebuiltyres[".ShortName"] = "creategrn_issueofrebuiltyres";
	$tdatacreategrn_issueofrebuiltyres[".OwnerID"] = "";
	$tdatacreategrn_issueofrebuiltyres[".OriginalTable"] = "creategrn";

//	field labels
$fieldLabelscreategrn_issueofrebuiltyres = array();
$fieldToolTipscreategrn_issueofrebuiltyres = array();
$pageTitlescreategrn_issueofrebuiltyres = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscreategrn_issueofrebuiltyres["English"] = array();
	$fieldToolTipscreategrn_issueofrebuiltyres["English"] = array();
	$pageTitlescreategrn_issueofrebuiltyres["English"] = array();
	$fieldLabelscreategrn_issueofrebuiltyres["English"]["ItemCode"] = "Item Code";
	$fieldToolTipscreategrn_issueofrebuiltyres["English"]["ItemCode"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres["English"]["Brand"] = "Brand";
	$fieldToolTipscreategrn_issueofrebuiltyres["English"]["Brand"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres["English"]["Description"] = "Descr.";
	$fieldToolTipscreategrn_issueofrebuiltyres["English"]["Description"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres["English"]["Supplier"] = "Supplier";
	$fieldToolTipscreategrn_issueofrebuiltyres["English"]["Supplier"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres["English"]["Quantity"] = "Qty";
	$fieldToolTipscreategrn_issueofrebuiltyres["English"]["Quantity"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres["English"]["RemovedFrom"] = "Vehicle";
	$fieldToolTipscreategrn_issueofrebuiltyres["English"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres["English"]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn_issueofrebuiltyres["English"]["SystemDate"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres["English"]["EnteredBy"] = "Entered";
	$fieldToolTipscreategrn_issueofrebuiltyres["English"]["EnteredBy"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres["English"]["ApprovedBy"] = "Edited By";
	$fieldToolTipscreategrn_issueofrebuiltyres["English"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres["English"]["Status"] = "Type";
	$fieldToolTipscreategrn_issueofrebuiltyres["English"]["Status"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres["English"]["ID"] = "ID";
	$fieldToolTipscreategrn_issueofrebuiltyres["English"]["ID"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres["English"]["RefNumber"] = "Ref No.";
	$fieldToolTipscreategrn_issueofrebuiltyres["English"]["RefNumber"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres["English"]["Cost"] = "Cost";
	$fieldToolTipscreategrn_issueofrebuiltyres["English"]["Cost"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres["English"]["Fleet"] = "Fleet";
	$fieldToolTipscreategrn_issueofrebuiltyres["English"]["Fleet"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres["English"]["GRNDate"] = "Date";
	$fieldToolTipscreategrn_issueofrebuiltyres["English"]["GRNDate"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres["English"]["UnitPrice"] = "Rate";
	$fieldToolTipscreategrn_issueofrebuiltyres["English"]["UnitPrice"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres["English"]["CurrentStock"] = "In-Stock";
	$fieldToolTipscreategrn_issueofrebuiltyres["English"]["CurrentStock"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres["English"]["PriceLink"] = "Cost Code";
	$fieldToolTipscreategrn_issueofrebuiltyres["English"]["PriceLink"] = "";
	if (count($fieldToolTipscreategrn_issueofrebuiltyres["English"]))
		$tdatacreategrn_issueofrebuiltyres[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscreategrn_issueofrebuiltyres[""] = array();
	$fieldToolTipscreategrn_issueofrebuiltyres[""] = array();
	$pageTitlescreategrn_issueofrebuiltyres[""] = array();
	$fieldLabelscreategrn_issueofrebuiltyres[""]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn_issueofrebuiltyres[""]["SystemDate"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres[""]["EnteredBy"] = "Entered By";
	$fieldToolTipscreategrn_issueofrebuiltyres[""]["EnteredBy"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres[""]["ApprovedBy"] = "Approved By";
	$fieldToolTipscreategrn_issueofrebuiltyres[""]["ApprovedBy"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres[""]["Status"] = "Status";
	$fieldToolTipscreategrn_issueofrebuiltyres[""]["Status"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres[""]["ID"] = "ID";
	$fieldToolTipscreategrn_issueofrebuiltyres[""]["ID"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres[""]["RefNumber"] = "Ref Number";
	$fieldToolTipscreategrn_issueofrebuiltyres[""]["RefNumber"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres[""]["Cost"] = "Cost";
	$fieldToolTipscreategrn_issueofrebuiltyres[""]["Cost"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres[""]["Fleet"] = "Fleet";
	$fieldToolTipscreategrn_issueofrebuiltyres[""]["Fleet"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres[""]["GRNDate"] = "GRNDate";
	$fieldToolTipscreategrn_issueofrebuiltyres[""]["GRNDate"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres[""]["UnitPrice"] = "Unit Price";
	$fieldToolTipscreategrn_issueofrebuiltyres[""]["UnitPrice"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres[""]["CurrentStock"] = "Current Stock";
	$fieldToolTipscreategrn_issueofrebuiltyres[""]["CurrentStock"] = "";
	$fieldLabelscreategrn_issueofrebuiltyres[""]["PriceLink"] = "Price Link";
	$fieldToolTipscreategrn_issueofrebuiltyres[""]["PriceLink"] = "";
	if (count($fieldToolTipscreategrn_issueofrebuiltyres[""]))
		$tdatacreategrn_issueofrebuiltyres[".isUseToolTips"] = true;
}
	
	
	$tdatacreategrn_issueofrebuiltyres[".NCSearch"] = true;



$tdatacreategrn_issueofrebuiltyres[".shortTableName"] = "creategrn_issueofrebuiltyres";
$tdatacreategrn_issueofrebuiltyres[".nSecOptions"] = 0;
$tdatacreategrn_issueofrebuiltyres[".recsPerRowList"] = 1;
$tdatacreategrn_issueofrebuiltyres[".recsPerRowPrint"] = 1;
$tdatacreategrn_issueofrebuiltyres[".mainTableOwnerID"] = "";
$tdatacreategrn_issueofrebuiltyres[".moveNext"] = 1;
$tdatacreategrn_issueofrebuiltyres[".entityType"] = 1;

$tdatacreategrn_issueofrebuiltyres[".strOriginalTableName"] = "creategrn";




$tdatacreategrn_issueofrebuiltyres[".showAddInPopup"] = false;

$tdatacreategrn_issueofrebuiltyres[".showEditInPopup"] = false;

$tdatacreategrn_issueofrebuiltyres[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacreategrn_issueofrebuiltyres[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacreategrn_issueofrebuiltyres[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatacreategrn_issueofrebuiltyres[".listAjax"] = true;
else 
	$tdatacreategrn_issueofrebuiltyres[".listAjax"] = false;

	$tdatacreategrn_issueofrebuiltyres[".audit"] = false;

	$tdatacreategrn_issueofrebuiltyres[".locking"] = false;

$tdatacreategrn_issueofrebuiltyres[".edit"] = true;
$tdatacreategrn_issueofrebuiltyres[".afterEditAction"] = 1;
$tdatacreategrn_issueofrebuiltyres[".closePopupAfterEdit"] = 1;
$tdatacreategrn_issueofrebuiltyres[".afterEditActionDetTable"] = "";

$tdatacreategrn_issueofrebuiltyres[".add"] = true;
$tdatacreategrn_issueofrebuiltyres[".afterAddAction"] = 1;
$tdatacreategrn_issueofrebuiltyres[".closePopupAfterAdd"] = 1;
$tdatacreategrn_issueofrebuiltyres[".afterAddActionDetTable"] = "Detail tables not found!";

$tdatacreategrn_issueofrebuiltyres[".list"] = true;

$tdatacreategrn_issueofrebuiltyres[".view"] = true;

$tdatacreategrn_issueofrebuiltyres[".import"] = true;

$tdatacreategrn_issueofrebuiltyres[".exportTo"] = true;

$tdatacreategrn_issueofrebuiltyres[".printFriendly"] = true;

$tdatacreategrn_issueofrebuiltyres[".delete"] = true;

$tdatacreategrn_issueofrebuiltyres[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacreategrn_issueofrebuiltyres[".searchSaving"] = false;
//

$tdatacreategrn_issueofrebuiltyres[".showSearchPanel"] = true;
		$tdatacreategrn_issueofrebuiltyres[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacreategrn_issueofrebuiltyres[".isUseAjaxSuggest"] = false;
else 
	$tdatacreategrn_issueofrebuiltyres[".isUseAjaxSuggest"] = true;

$tdatacreategrn_issueofrebuiltyres[".rowHighlite"] = true;



$tdatacreategrn_issueofrebuiltyres[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacreategrn_issueofrebuiltyres[".isUseTimeForSearch"] = false;





$tdatacreategrn_issueofrebuiltyres[".allSearchFields"] = array();
$tdatacreategrn_issueofrebuiltyres[".filterFields"] = array();
$tdatacreategrn_issueofrebuiltyres[".requiredSearchFields"] = array();

$tdatacreategrn_issueofrebuiltyres[".allSearchFields"][] = "Status";
	$tdatacreategrn_issueofrebuiltyres[".allSearchFields"][] = "Fleet";
	$tdatacreategrn_issueofrebuiltyres[".allSearchFields"][] = "RemovedFrom";
	$tdatacreategrn_issueofrebuiltyres[".allSearchFields"][] = "GRNDate";
	$tdatacreategrn_issueofrebuiltyres[".allSearchFields"][] = "ItemCode";
	$tdatacreategrn_issueofrebuiltyres[".allSearchFields"][] = "PriceLink";
	$tdatacreategrn_issueofrebuiltyres[".allSearchFields"][] = "Quantity";
	$tdatacreategrn_issueofrebuiltyres[".allSearchFields"][] = "Brand";
	$tdatacreategrn_issueofrebuiltyres[".allSearchFields"][] = "Description";
	$tdatacreategrn_issueofrebuiltyres[".allSearchFields"][] = "Supplier";
	$tdatacreategrn_issueofrebuiltyres[".allSearchFields"][] = "UnitPrice";
	$tdatacreategrn_issueofrebuiltyres[".allSearchFields"][] = "Cost";
	$tdatacreategrn_issueofrebuiltyres[".allSearchFields"][] = "CurrentStock";
	$tdatacreategrn_issueofrebuiltyres[".allSearchFields"][] = "EnteredBy";
	$tdatacreategrn_issueofrebuiltyres[".allSearchFields"][] = "SystemDate";
	

$tdatacreategrn_issueofrebuiltyres[".googleLikeFields"] = array();
$tdatacreategrn_issueofrebuiltyres[".googleLikeFields"][] = "ID";
$tdatacreategrn_issueofrebuiltyres[".googleLikeFields"][] = "ItemCode";
$tdatacreategrn_issueofrebuiltyres[".googleLikeFields"][] = "Brand";
$tdatacreategrn_issueofrebuiltyres[".googleLikeFields"][] = "Description";
$tdatacreategrn_issueofrebuiltyres[".googleLikeFields"][] = "Supplier";
$tdatacreategrn_issueofrebuiltyres[".googleLikeFields"][] = "Quantity";
$tdatacreategrn_issueofrebuiltyres[".googleLikeFields"][] = "RemovedFrom";
$tdatacreategrn_issueofrebuiltyres[".googleLikeFields"][] = "SystemDate";
$tdatacreategrn_issueofrebuiltyres[".googleLikeFields"][] = "GRNDate";
$tdatacreategrn_issueofrebuiltyres[".googleLikeFields"][] = "EnteredBy";
$tdatacreategrn_issueofrebuiltyres[".googleLikeFields"][] = "ApprovedBy";
$tdatacreategrn_issueofrebuiltyres[".googleLikeFields"][] = "UnitPrice";
$tdatacreategrn_issueofrebuiltyres[".googleLikeFields"][] = "Status";
$tdatacreategrn_issueofrebuiltyres[".googleLikeFields"][] = "RefNumber";
$tdatacreategrn_issueofrebuiltyres[".googleLikeFields"][] = "CurrentStock";
$tdatacreategrn_issueofrebuiltyres[".googleLikeFields"][] = "Fleet";
$tdatacreategrn_issueofrebuiltyres[".googleLikeFields"][] = "PriceLink";
$tdatacreategrn_issueofrebuiltyres[".googleLikeFields"][] = "Cost";


$tdatacreategrn_issueofrebuiltyres[".advSearchFields"] = array();
$tdatacreategrn_issueofrebuiltyres[".advSearchFields"][] = "Status";
$tdatacreategrn_issueofrebuiltyres[".advSearchFields"][] = "Fleet";
$tdatacreategrn_issueofrebuiltyres[".advSearchFields"][] = "RemovedFrom";
$tdatacreategrn_issueofrebuiltyres[".advSearchFields"][] = "GRNDate";
$tdatacreategrn_issueofrebuiltyres[".advSearchFields"][] = "ItemCode";
$tdatacreategrn_issueofrebuiltyres[".advSearchFields"][] = "PriceLink";
$tdatacreategrn_issueofrebuiltyres[".advSearchFields"][] = "Quantity";
$tdatacreategrn_issueofrebuiltyres[".advSearchFields"][] = "Brand";
$tdatacreategrn_issueofrebuiltyres[".advSearchFields"][] = "Description";
$tdatacreategrn_issueofrebuiltyres[".advSearchFields"][] = "Supplier";
$tdatacreategrn_issueofrebuiltyres[".advSearchFields"][] = "UnitPrice";
$tdatacreategrn_issueofrebuiltyres[".advSearchFields"][] = "Cost";
$tdatacreategrn_issueofrebuiltyres[".advSearchFields"][] = "CurrentStock";
$tdatacreategrn_issueofrebuiltyres[".advSearchFields"][] = "EnteredBy";
$tdatacreategrn_issueofrebuiltyres[".advSearchFields"][] = "SystemDate";

$tdatacreategrn_issueofrebuiltyres[".tableType"] = "list";

$tdatacreategrn_issueofrebuiltyres[".printerPageOrientation"] = 0;
$tdatacreategrn_issueofrebuiltyres[".nPrinterPageScale"] = 100;

$tdatacreategrn_issueofrebuiltyres[".nPrinterSplitRecords"] = 40;

$tdatacreategrn_issueofrebuiltyres[".nPrinterPDFSplitRecords"] = 40;



$tdatacreategrn_issueofrebuiltyres[".geocodingEnabled"] = false;




	





// view page pdf
$tdatacreategrn_issueofrebuiltyres[".isViewPagePDF"] = true;
$tdatacreategrn_issueofrebuiltyres[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatacreategrn_issueofrebuiltyres[".isPrinterPagePDF"] = true;
$tdatacreategrn_issueofrebuiltyres[".nPrinterPagePDFScale"] = 100;

$tdatacreategrn_issueofrebuiltyres[".totalsFields"] = array();
$tdatacreategrn_issueofrebuiltyres[".totalsFields"][] = array(
	"fName" => "Cost", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatacreategrn_issueofrebuiltyres[".pageSize"] = 20;

$tdatacreategrn_issueofrebuiltyres[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY CurrentStock DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacreategrn_issueofrebuiltyres[".strOrderBy"] = $tstrOrderBy;

$tdatacreategrn_issueofrebuiltyres[".orderindexes"] = array();
$tdatacreategrn_issueofrebuiltyres[".orderindexes"][] = array(15, (0 ? "ASC" : "DESC"), "CurrentStock");

$tdatacreategrn_issueofrebuiltyres[".sqlHead"] = "SELECT ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  SUM(CurrentStock) AS CurrentStock,  Fleet,  PriceLink,  Quantity*UnitPrice*-1 AS Cost";
$tdatacreategrn_issueofrebuiltyres[".sqlFrom"] = "FROM creategrn";
$tdatacreategrn_issueofrebuiltyres[".sqlWhereExpr"] = "(Status =\"Rebuilt issue\")";
$tdatacreategrn_issueofrebuiltyres[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatacreategrn_issueofrebuiltyres[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacreategrn_issueofrebuiltyres[".arrGroupsPerPage"] = $arrGPP;

$tdatacreategrn_issueofrebuiltyres[".highlightSearchResults"] = true;

$tableKeyscreategrn_issueofrebuiltyres = array();
$tableKeyscreategrn_issueofrebuiltyres[] = "ID";
$tdatacreategrn_issueofrebuiltyres[".Keys"] = $tableKeyscreategrn_issueofrebuiltyres;

$tdatacreategrn_issueofrebuiltyres[".listFields"] = array();
$tdatacreategrn_issueofrebuiltyres[".listFields"][] = "ID";
$tdatacreategrn_issueofrebuiltyres[".listFields"][] = "Status";
$tdatacreategrn_issueofrebuiltyres[".listFields"][] = "Fleet";
$tdatacreategrn_issueofrebuiltyres[".listFields"][] = "RemovedFrom";
$tdatacreategrn_issueofrebuiltyres[".listFields"][] = "GRNDate";
$tdatacreategrn_issueofrebuiltyres[".listFields"][] = "ItemCode";
$tdatacreategrn_issueofrebuiltyres[".listFields"][] = "Brand";
$tdatacreategrn_issueofrebuiltyres[".listFields"][] = "Description";
$tdatacreategrn_issueofrebuiltyres[".listFields"][] = "Supplier";
$tdatacreategrn_issueofrebuiltyres[".listFields"][] = "Quantity";
$tdatacreategrn_issueofrebuiltyres[".listFields"][] = "UnitPrice";
$tdatacreategrn_issueofrebuiltyres[".listFields"][] = "Cost";
$tdatacreategrn_issueofrebuiltyres[".listFields"][] = "EnteredBy";

$tdatacreategrn_issueofrebuiltyres[".hideMobileList"] = array();


$tdatacreategrn_issueofrebuiltyres[".viewFields"] = array();
$tdatacreategrn_issueofrebuiltyres[".viewFields"][] = "ID";
$tdatacreategrn_issueofrebuiltyres[".viewFields"][] = "Status";
$tdatacreategrn_issueofrebuiltyres[".viewFields"][] = "Fleet";
$tdatacreategrn_issueofrebuiltyres[".viewFields"][] = "RemovedFrom";
$tdatacreategrn_issueofrebuiltyres[".viewFields"][] = "GRNDate";
$tdatacreategrn_issueofrebuiltyres[".viewFields"][] = "ItemCode";
$tdatacreategrn_issueofrebuiltyres[".viewFields"][] = "Quantity";
$tdatacreategrn_issueofrebuiltyres[".viewFields"][] = "Brand";
$tdatacreategrn_issueofrebuiltyres[".viewFields"][] = "Description";
$tdatacreategrn_issueofrebuiltyres[".viewFields"][] = "Supplier";
$tdatacreategrn_issueofrebuiltyres[".viewFields"][] = "UnitPrice";
$tdatacreategrn_issueofrebuiltyres[".viewFields"][] = "ApprovedBy";
$tdatacreategrn_issueofrebuiltyres[".viewFields"][] = "Cost";
$tdatacreategrn_issueofrebuiltyres[".viewFields"][] = "CurrentStock";
$tdatacreategrn_issueofrebuiltyres[".viewFields"][] = "EnteredBy";
$tdatacreategrn_issueofrebuiltyres[".viewFields"][] = "SystemDate";

$tdatacreategrn_issueofrebuiltyres[".addFields"] = array();
$tdatacreategrn_issueofrebuiltyres[".addFields"][] = "Status";
$tdatacreategrn_issueofrebuiltyres[".addFields"][] = "Fleet";
$tdatacreategrn_issueofrebuiltyres[".addFields"][] = "RemovedFrom";
$tdatacreategrn_issueofrebuiltyres[".addFields"][] = "GRNDate";
$tdatacreategrn_issueofrebuiltyres[".addFields"][] = "ItemCode";
$tdatacreategrn_issueofrebuiltyres[".addFields"][] = "Quantity";
$tdatacreategrn_issueofrebuiltyres[".addFields"][] = "PriceLink";
$tdatacreategrn_issueofrebuiltyres[".addFields"][] = "Brand";
$tdatacreategrn_issueofrebuiltyres[".addFields"][] = "Description";
$tdatacreategrn_issueofrebuiltyres[".addFields"][] = "Supplier";
$tdatacreategrn_issueofrebuiltyres[".addFields"][] = "UnitPrice";
$tdatacreategrn_issueofrebuiltyres[".addFields"][] = "Cost";
$tdatacreategrn_issueofrebuiltyres[".addFields"][] = "EnteredBy";
$tdatacreategrn_issueofrebuiltyres[".addFields"][] = "CurrentStock";
$tdatacreategrn_issueofrebuiltyres[".addFields"][] = "SystemDate";

$tdatacreategrn_issueofrebuiltyres[".masterListFields"] = array();
$tdatacreategrn_issueofrebuiltyres[".masterListFields"][] = "ID";
$tdatacreategrn_issueofrebuiltyres[".masterListFields"][] = "Status";
$tdatacreategrn_issueofrebuiltyres[".masterListFields"][] = "Fleet";
$tdatacreategrn_issueofrebuiltyres[".masterListFields"][] = "RemovedFrom";
$tdatacreategrn_issueofrebuiltyres[".masterListFields"][] = "RefNumber";
$tdatacreategrn_issueofrebuiltyres[".masterListFields"][] = "GRNDate";
$tdatacreategrn_issueofrebuiltyres[".masterListFields"][] = "ItemCode";
$tdatacreategrn_issueofrebuiltyres[".masterListFields"][] = "Quantity";
$tdatacreategrn_issueofrebuiltyres[".masterListFields"][] = "PriceLink";
$tdatacreategrn_issueofrebuiltyres[".masterListFields"][] = "Brand";
$tdatacreategrn_issueofrebuiltyres[".masterListFields"][] = "Description";
$tdatacreategrn_issueofrebuiltyres[".masterListFields"][] = "Supplier";
$tdatacreategrn_issueofrebuiltyres[".masterListFields"][] = "UnitPrice";
$tdatacreategrn_issueofrebuiltyres[".masterListFields"][] = "Cost";
$tdatacreategrn_issueofrebuiltyres[".masterListFields"][] = "ApprovedBy";
$tdatacreategrn_issueofrebuiltyres[".masterListFields"][] = "EnteredBy";
$tdatacreategrn_issueofrebuiltyres[".masterListFields"][] = "CurrentStock";
$tdatacreategrn_issueofrebuiltyres[".masterListFields"][] = "SystemDate";

$tdatacreategrn_issueofrebuiltyres[".inlineAddFields"] = array();

$tdatacreategrn_issueofrebuiltyres[".editFields"] = array();
$tdatacreategrn_issueofrebuiltyres[".editFields"][] = "Status";
$tdatacreategrn_issueofrebuiltyres[".editFields"][] = "Fleet";
$tdatacreategrn_issueofrebuiltyres[".editFields"][] = "RemovedFrom";
$tdatacreategrn_issueofrebuiltyres[".editFields"][] = "GRNDate";
$tdatacreategrn_issueofrebuiltyres[".editFields"][] = "ItemCode";
$tdatacreategrn_issueofrebuiltyres[".editFields"][] = "PriceLink";
$tdatacreategrn_issueofrebuiltyres[".editFields"][] = "Quantity";
$tdatacreategrn_issueofrebuiltyres[".editFields"][] = "Brand";
$tdatacreategrn_issueofrebuiltyres[".editFields"][] = "Description";
$tdatacreategrn_issueofrebuiltyres[".editFields"][] = "Supplier";
$tdatacreategrn_issueofrebuiltyres[".editFields"][] = "UnitPrice";
$tdatacreategrn_issueofrebuiltyres[".editFields"][] = "ApprovedBy";
$tdatacreategrn_issueofrebuiltyres[".editFields"][] = "Cost";
$tdatacreategrn_issueofrebuiltyres[".editFields"][] = "EnteredBy";
$tdatacreategrn_issueofrebuiltyres[".editFields"][] = "CurrentStock";
$tdatacreategrn_issueofrebuiltyres[".editFields"][] = "SystemDate";

$tdatacreategrn_issueofrebuiltyres[".inlineEditFields"] = array();

$tdatacreategrn_issueofrebuiltyres[".exportFields"] = array();
$tdatacreategrn_issueofrebuiltyres[".exportFields"][] = "ID";
$tdatacreategrn_issueofrebuiltyres[".exportFields"][] = "Status";
$tdatacreategrn_issueofrebuiltyres[".exportFields"][] = "Fleet";
$tdatacreategrn_issueofrebuiltyres[".exportFields"][] = "RemovedFrom";
$tdatacreategrn_issueofrebuiltyres[".exportFields"][] = "GRNDate";
$tdatacreategrn_issueofrebuiltyres[".exportFields"][] = "ItemCode";
$tdatacreategrn_issueofrebuiltyres[".exportFields"][] = "PriceLink";
$tdatacreategrn_issueofrebuiltyres[".exportFields"][] = "Quantity";
$tdatacreategrn_issueofrebuiltyres[".exportFields"][] = "Brand";
$tdatacreategrn_issueofrebuiltyres[".exportFields"][] = "Description";
$tdatacreategrn_issueofrebuiltyres[".exportFields"][] = "Supplier";
$tdatacreategrn_issueofrebuiltyres[".exportFields"][] = "UnitPrice";
$tdatacreategrn_issueofrebuiltyres[".exportFields"][] = "Cost";
$tdatacreategrn_issueofrebuiltyres[".exportFields"][] = "ApprovedBy";
$tdatacreategrn_issueofrebuiltyres[".exportFields"][] = "EnteredBy";
$tdatacreategrn_issueofrebuiltyres[".exportFields"][] = "CurrentStock";
$tdatacreategrn_issueofrebuiltyres[".exportFields"][] = "SystemDate";

$tdatacreategrn_issueofrebuiltyres[".importFields"] = array();
$tdatacreategrn_issueofrebuiltyres[".importFields"][] = "ID";
$tdatacreategrn_issueofrebuiltyres[".importFields"][] = "ItemCode";
$tdatacreategrn_issueofrebuiltyres[".importFields"][] = "Brand";
$tdatacreategrn_issueofrebuiltyres[".importFields"][] = "Description";
$tdatacreategrn_issueofrebuiltyres[".importFields"][] = "Supplier";
$tdatacreategrn_issueofrebuiltyres[".importFields"][] = "Quantity";
$tdatacreategrn_issueofrebuiltyres[".importFields"][] = "RemovedFrom";
$tdatacreategrn_issueofrebuiltyres[".importFields"][] = "SystemDate";
$tdatacreategrn_issueofrebuiltyres[".importFields"][] = "GRNDate";
$tdatacreategrn_issueofrebuiltyres[".importFields"][] = "EnteredBy";
$tdatacreategrn_issueofrebuiltyres[".importFields"][] = "ApprovedBy";
$tdatacreategrn_issueofrebuiltyres[".importFields"][] = "UnitPrice";
$tdatacreategrn_issueofrebuiltyres[".importFields"][] = "Status";
$tdatacreategrn_issueofrebuiltyres[".importFields"][] = "CurrentStock";
$tdatacreategrn_issueofrebuiltyres[".importFields"][] = "Fleet";
$tdatacreategrn_issueofrebuiltyres[".importFields"][] = "PriceLink";
$tdatacreategrn_issueofrebuiltyres[".importFields"][] = "Cost";

$tdatacreategrn_issueofrebuiltyres[".printFields"] = array();
$tdatacreategrn_issueofrebuiltyres[".printFields"][] = "ID";
$tdatacreategrn_issueofrebuiltyres[".printFields"][] = "Status";
$tdatacreategrn_issueofrebuiltyres[".printFields"][] = "Fleet";
$tdatacreategrn_issueofrebuiltyres[".printFields"][] = "RemovedFrom";
$tdatacreategrn_issueofrebuiltyres[".printFields"][] = "GRNDate";
$tdatacreategrn_issueofrebuiltyres[".printFields"][] = "ItemCode";
$tdatacreategrn_issueofrebuiltyres[".printFields"][] = "Quantity";
$tdatacreategrn_issueofrebuiltyres[".printFields"][] = "PriceLink";
$tdatacreategrn_issueofrebuiltyres[".printFields"][] = "Brand";
$tdatacreategrn_issueofrebuiltyres[".printFields"][] = "Description";
$tdatacreategrn_issueofrebuiltyres[".printFields"][] = "Supplier";
$tdatacreategrn_issueofrebuiltyres[".printFields"][] = "UnitPrice";
$tdatacreategrn_issueofrebuiltyres[".printFields"][] = "ApprovedBy";
$tdatacreategrn_issueofrebuiltyres[".printFields"][] = "Cost";
$tdatacreategrn_issueofrebuiltyres[".printFields"][] = "EnteredBy";
$tdatacreategrn_issueofrebuiltyres[".printFields"][] = "CurrentStock";
$tdatacreategrn_issueofrebuiltyres[".printFields"][] = "SystemDate";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuiltyres","ID"); 
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
	
	
	
	

	

	
	$tdatacreategrn_issueofrebuiltyres["ID"] = $fdata;
//	ItemCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemCode";
	$fdata["GoodName"] = "ItemCode";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuiltyres","ItemCode"); 
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

	

	
	$tdatacreategrn_issueofrebuiltyres["ItemCode"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuiltyres","Brand"); 
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

	

	
	$tdatacreategrn_issueofrebuiltyres["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuiltyres","Description"); 
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

	

	
	$tdatacreategrn_issueofrebuiltyres["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuiltyres","Supplier"); 
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

	

	
	$tdatacreategrn_issueofrebuiltyres["Supplier"] = $fdata;
//	Quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Quantity";
	$fdata["GoodName"] = "Quantity";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuiltyres","Quantity"); 
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacreategrn_issueofrebuiltyres["Quantity"] = $fdata;
//	RemovedFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RemovedFrom";
	$fdata["GoodName"] = "RemovedFrom";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuiltyres","RemovedFrom"); 
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

	

	
	$tdatacreategrn_issueofrebuiltyres["RemovedFrom"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuiltyres","SystemDate"); 
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

	

	
	$tdatacreategrn_issueofrebuiltyres["SystemDate"] = $fdata;
//	GRNDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "GRNDate";
	$fdata["GoodName"] = "GRNDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuiltyres","GRNDate"); 
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

	

	
	$tdatacreategrn_issueofrebuiltyres["GRNDate"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuiltyres","EnteredBy"); 
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

	

	
	$tdatacreategrn_issueofrebuiltyres["EnteredBy"] = $fdata;
//	ApprovedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ApprovedBy";
	$fdata["GoodName"] = "ApprovedBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuiltyres","ApprovedBy"); 
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
	
	
	
	

	

	
	$tdatacreategrn_issueofrebuiltyres["ApprovedBy"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuiltyres","UnitPrice"); 
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

	

	
	$tdatacreategrn_issueofrebuiltyres["UnitPrice"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuiltyres","Status"); 
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

	

	
	$tdatacreategrn_issueofrebuiltyres["Status"] = $fdata;
//	RefNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RefNumber";
	$fdata["GoodName"] = "RefNumber";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuiltyres","RefNumber"); 
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
	
	
	
	

	

	
	$tdatacreategrn_issueofrebuiltyres["RefNumber"] = $fdata;
//	CurrentStock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "CurrentStock";
	$fdata["GoodName"] = "CurrentStock";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuiltyres","CurrentStock"); 
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

	

	
	$tdatacreategrn_issueofrebuiltyres["CurrentStock"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuiltyres","Fleet"); 
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

	

	
	$tdatacreategrn_issueofrebuiltyres["Fleet"] = $fdata;
//	PriceLink
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "PriceLink";
	$fdata["GoodName"] = "PriceLink";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuiltyres","PriceLink"); 
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

	

	
	$tdatacreategrn_issueofrebuiltyres["PriceLink"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("creategrn_issueofrebuiltyres","Cost"); 
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

	

	
	$tdatacreategrn_issueofrebuiltyres["Cost"] = $fdata;

	
$tables_data["creategrn-issueofrebuiltyres"]=&$tdatacreategrn_issueofrebuiltyres;
$field_labels["creategrn_issueofrebuiltyres"] = &$fieldLabelscreategrn_issueofrebuiltyres;
$fieldToolTips["creategrn-issueofrebuiltyres"] = &$fieldToolTipscreategrn_issueofrebuiltyres;
$page_titles["creategrn_issueofrebuiltyres"] = &$pageTitlescreategrn_issueofrebuiltyres;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["creategrn-issueofrebuiltyres"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["creategrn-issueofrebuiltyres"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_creategrn_issueofrebuiltyres()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  SUM(CurrentStock) AS CurrentStock,  Fleet,  PriceLink,  Quantity*UnitPrice*-1 AS Cost";
$proto0["m_strFrom"] = "FROM creategrn";
$proto0["m_strWhere"] = "(Status =\"Rebuilt issue\")";
$proto0["m_strOrderBy"] = "ORDER BY CurrentStock DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "Status =\"Rebuilt issue\"";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=\"Rebuilt issue\"";
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
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "creategrn-issueofrebuiltyres";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto7["m_sql"] = "ItemCode";
$proto7["m_srcTableName"] = "creategrn-issueofrebuiltyres";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto9["m_sql"] = "Brand";
$proto9["m_srcTableName"] = "creategrn-issueofrebuiltyres";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto11["m_sql"] = "Description";
$proto11["m_srcTableName"] = "creategrn-issueofrebuiltyres";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto13["m_sql"] = "Supplier";
$proto13["m_srcTableName"] = "creategrn-issueofrebuiltyres";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto15["m_sql"] = "Quantity";
$proto15["m_srcTableName"] = "creategrn-issueofrebuiltyres";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto17["m_sql"] = "RemovedFrom";
$proto17["m_srcTableName"] = "creategrn-issueofrebuiltyres";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto19["m_sql"] = "SystemDate";
$proto19["m_srcTableName"] = "creategrn-issueofrebuiltyres";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto21["m_sql"] = "GRNDate";
$proto21["m_srcTableName"] = "creategrn-issueofrebuiltyres";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto23["m_sql"] = "EnteredBy";
$proto23["m_srcTableName"] = "creategrn-issueofrebuiltyres";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto25["m_sql"] = "ApprovedBy";
$proto25["m_srcTableName"] = "creategrn-issueofrebuiltyres";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto27["m_sql"] = "UnitPrice";
$proto27["m_srcTableName"] = "creategrn-issueofrebuiltyres";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto29["m_sql"] = "Status";
$proto29["m_srcTableName"] = "creategrn-issueofrebuiltyres";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto31["m_sql"] = "RefNumber";
$proto31["m_srcTableName"] = "creategrn-issueofrebuiltyres";
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
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto34["m_arguments"][]=$obj;
$proto34["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto34);

$proto33["m_sql"] = "SUM(CurrentStock)";
$proto33["m_srcTableName"] = "creategrn-issueofrebuiltyres";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "CurrentStock";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto36["m_sql"] = "Fleet";
$proto36["m_srcTableName"] = "creategrn-issueofrebuiltyres";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "PriceLink",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto38["m_sql"] = "PriceLink";
$proto38["m_srcTableName"] = "creategrn-issueofrebuiltyres";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "Quantity*UnitPrice*-1"
));

$proto40["m_sql"] = "Quantity*UnitPrice*-1";
$proto40["m_srcTableName"] = "creategrn-issueofrebuiltyres";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "Cost";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "creategrn";
$proto43["m_srcTableName"] = "creategrn-issueofrebuiltyres";
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
$proto42["m_srcTableName"] = "creategrn-issueofrebuiltyres";
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
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto50["m_column"]=$obj;
$obj = new SQLGroupByItem($proto50);

$proto0["m_groupby"][]=$obj;
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto52["m_column"]=$obj;
$obj = new SQLGroupByItem($proto52);

$proto0["m_groupby"][]=$obj;
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto54["m_column"]=$obj;
$obj = new SQLGroupByItem($proto54);

$proto0["m_groupby"][]=$obj;
												$proto56=array();
						$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto56["m_column"]=$obj;
$obj = new SQLGroupByItem($proto56);

$proto0["m_groupby"][]=$obj;
												$proto58=array();
						$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto58["m_column"]=$obj;
$obj = new SQLGroupByItem($proto58);

$proto0["m_groupby"][]=$obj;
												$proto60=array();
						$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto60["m_column"]=$obj;
$obj = new SQLGroupByItem($proto60);

$proto0["m_groupby"][]=$obj;
												$proto62=array();
						$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto62["m_column"]=$obj;
$obj = new SQLGroupByItem($proto62);

$proto0["m_groupby"][]=$obj;
												$proto64=array();
						$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto64["m_column"]=$obj;
$obj = new SQLGroupByItem($proto64);

$proto0["m_groupby"][]=$obj;
												$proto66=array();
						$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto66["m_column"]=$obj;
$obj = new SQLGroupByItem($proto66);

$proto0["m_groupby"][]=$obj;
												$proto68=array();
						$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto68["m_column"]=$obj;
$obj = new SQLGroupByItem($proto68);

$proto0["m_groupby"][]=$obj;
												$proto70=array();
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto70["m_column"]=$obj;
$obj = new SQLGroupByItem($proto70);

$proto0["m_groupby"][]=$obj;
												$proto72=array();
						$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto72["m_column"]=$obj;
$obj = new SQLGroupByItem($proto72);

$proto0["m_groupby"][]=$obj;
												$proto74=array();
						$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto74["m_column"]=$obj;
$obj = new SQLGroupByItem($proto74);

$proto0["m_groupby"][]=$obj;
												$proto76=array();
						$obj = new SQLField(array(
	"m_strName" => "PriceLink",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
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
	"m_srcTableName" => "creategrn-issueofrebuiltyres"
));

$proto80["m_column"]=$obj;
$proto80["m_bAsc"] = 0;
$proto80["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto80);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="creategrn-issueofrebuiltyres";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_creategrn_issueofrebuiltyres = createSqlQuery_creategrn_issueofrebuiltyres();


	
																		
	
$tdatacreategrn_issueofrebuiltyres[".sqlquery"] = $queryData_creategrn_issueofrebuiltyres;

include_once(getabspath("include/creategrn_issueofrebuiltyres_events.php"));
$tableEvents["creategrn-issueofrebuiltyres"] = new eventclass_creategrn_issueofrebuiltyres;
$tdatacreategrn_issueofrebuiltyres[".hasEvents"] = true;

?>