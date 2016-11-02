<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacreategrn_issue_rebuilt_use = array();	
	$tdatacreategrn_issue_rebuilt_use[".truncateText"] = true;
	$tdatacreategrn_issue_rebuilt_use[".NumberOfChars"] = 80; 
	$tdatacreategrn_issue_rebuilt_use[".ShortName"] = "creategrn_issue_rebuilt_use";
	$tdatacreategrn_issue_rebuilt_use[".OwnerID"] = "";
	$tdatacreategrn_issue_rebuilt_use[".OriginalTable"] = "creategrn";

//	field labels
$fieldLabelscreategrn_issue_rebuilt_use = array();
$fieldToolTipscreategrn_issue_rebuilt_use = array();
$pageTitlescreategrn_issue_rebuilt_use = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscreategrn_issue_rebuilt_use["English"] = array();
	$fieldToolTipscreategrn_issue_rebuilt_use["English"] = array();
	$pageTitlescreategrn_issue_rebuilt_use["English"] = array();
	$fieldLabelscreategrn_issue_rebuilt_use["English"]["ItemCode"] = "Item Code";
	$fieldToolTipscreategrn_issue_rebuilt_use["English"]["ItemCode"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use["English"]["Brand"] = "Brand";
	$fieldToolTipscreategrn_issue_rebuilt_use["English"]["Brand"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use["English"]["Description"] = "Descr.";
	$fieldToolTipscreategrn_issue_rebuilt_use["English"]["Description"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use["English"]["Supplier"] = "Supplier";
	$fieldToolTipscreategrn_issue_rebuilt_use["English"]["Supplier"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use["English"]["Quantity"] = "Qty";
	$fieldToolTipscreategrn_issue_rebuilt_use["English"]["Quantity"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use["English"]["RemovedFrom"] = "Vehicle";
	$fieldToolTipscreategrn_issue_rebuilt_use["English"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use["English"]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn_issue_rebuilt_use["English"]["SystemDate"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use["English"]["GRNDate"] = "Date";
	$fieldToolTipscreategrn_issue_rebuilt_use["English"]["GRNDate"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use["English"]["EnteredBy"] = "Entered";
	$fieldToolTipscreategrn_issue_rebuilt_use["English"]["EnteredBy"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use["English"]["ApprovedBy"] = "Edited By";
	$fieldToolTipscreategrn_issue_rebuilt_use["English"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use["English"]["Status"] = "Issue Type";
	$fieldToolTipscreategrn_issue_rebuilt_use["English"]["Status"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use["English"]["ID"] = "ID";
	$fieldToolTipscreategrn_issue_rebuilt_use["English"]["ID"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use["English"]["UnitPrice"] = "Applied Cost";
	$fieldToolTipscreategrn_issue_rebuilt_use["English"]["UnitPrice"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use["English"]["RefNumber"] = "Ref No.";
	$fieldToolTipscreategrn_issue_rebuilt_use["English"]["RefNumber"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use["English"]["Cost"] = "Cost";
	$fieldToolTipscreategrn_issue_rebuilt_use["English"]["Cost"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use["English"]["CurrentStock"] = "In-Stock";
	$fieldToolTipscreategrn_issue_rebuilt_use["English"]["CurrentStock"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use["English"]["Fleet"] = "Fleet";
	$fieldToolTipscreategrn_issue_rebuilt_use["English"]["Fleet"] = "";
	if (count($fieldToolTipscreategrn_issue_rebuilt_use["English"]))
		$tdatacreategrn_issue_rebuilt_use[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscreategrn_issue_rebuilt_use[""] = array();
	$fieldToolTipscreategrn_issue_rebuilt_use[""] = array();
	$pageTitlescreategrn_issue_rebuilt_use[""] = array();
	$fieldLabelscreategrn_issue_rebuilt_use[""]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn_issue_rebuilt_use[""]["SystemDate"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use[""]["GRNDate"] = "GRNDate";
	$fieldToolTipscreategrn_issue_rebuilt_use[""]["GRNDate"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use[""]["EnteredBy"] = "Entered By";
	$fieldToolTipscreategrn_issue_rebuilt_use[""]["EnteredBy"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use[""]["ApprovedBy"] = "Approved By";
	$fieldToolTipscreategrn_issue_rebuilt_use[""]["ApprovedBy"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use[""]["Status"] = "Status";
	$fieldToolTipscreategrn_issue_rebuilt_use[""]["Status"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use[""]["ID"] = "ID";
	$fieldToolTipscreategrn_issue_rebuilt_use[""]["ID"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use[""]["UnitPrice"] = "Unit Price";
	$fieldToolTipscreategrn_issue_rebuilt_use[""]["UnitPrice"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use[""]["RefNumber"] = "Ref Number";
	$fieldToolTipscreategrn_issue_rebuilt_use[""]["RefNumber"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use[""]["Cost"] = "Cost";
	$fieldToolTipscreategrn_issue_rebuilt_use[""]["Cost"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use[""]["CurrentStock"] = "Current Stock";
	$fieldToolTipscreategrn_issue_rebuilt_use[""]["CurrentStock"] = "";
	$fieldLabelscreategrn_issue_rebuilt_use[""]["Fleet"] = "Fleet";
	$fieldToolTipscreategrn_issue_rebuilt_use[""]["Fleet"] = "";
	if (count($fieldToolTipscreategrn_issue_rebuilt_use[""]))
		$tdatacreategrn_issue_rebuilt_use[".isUseToolTips"] = true;
}
	
	
	$tdatacreategrn_issue_rebuilt_use[".NCSearch"] = true;



$tdatacreategrn_issue_rebuilt_use[".shortTableName"] = "creategrn_issue_rebuilt_use";
$tdatacreategrn_issue_rebuilt_use[".nSecOptions"] = 0;
$tdatacreategrn_issue_rebuilt_use[".recsPerRowList"] = 1;
$tdatacreategrn_issue_rebuilt_use[".recsPerRowPrint"] = 1;
$tdatacreategrn_issue_rebuilt_use[".mainTableOwnerID"] = "";
$tdatacreategrn_issue_rebuilt_use[".moveNext"] = 1;
$tdatacreategrn_issue_rebuilt_use[".entityType"] = 1;

$tdatacreategrn_issue_rebuilt_use[".strOriginalTableName"] = "creategrn";




$tdatacreategrn_issue_rebuilt_use[".showAddInPopup"] = false;

$tdatacreategrn_issue_rebuilt_use[".showEditInPopup"] = false;

$tdatacreategrn_issue_rebuilt_use[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacreategrn_issue_rebuilt_use[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacreategrn_issue_rebuilt_use[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatacreategrn_issue_rebuilt_use[".listAjax"] = true;
else 
	$tdatacreategrn_issue_rebuilt_use[".listAjax"] = false;

	$tdatacreategrn_issue_rebuilt_use[".audit"] = false;

	$tdatacreategrn_issue_rebuilt_use[".locking"] = false;

$tdatacreategrn_issue_rebuilt_use[".edit"] = true;
$tdatacreategrn_issue_rebuilt_use[".afterEditAction"] = 1;
$tdatacreategrn_issue_rebuilt_use[".closePopupAfterEdit"] = 1;
$tdatacreategrn_issue_rebuilt_use[".afterEditActionDetTable"] = "";

$tdatacreategrn_issue_rebuilt_use[".add"] = true;
$tdatacreategrn_issue_rebuilt_use[".afterAddAction"] = 1;
$tdatacreategrn_issue_rebuilt_use[".closePopupAfterAdd"] = 1;
$tdatacreategrn_issue_rebuilt_use[".afterAddActionDetTable"] = "";

$tdatacreategrn_issue_rebuilt_use[".list"] = true;

$tdatacreategrn_issue_rebuilt_use[".view"] = true;

$tdatacreategrn_issue_rebuilt_use[".import"] = true;

$tdatacreategrn_issue_rebuilt_use[".exportTo"] = true;

$tdatacreategrn_issue_rebuilt_use[".printFriendly"] = true;

$tdatacreategrn_issue_rebuilt_use[".delete"] = true;

$tdatacreategrn_issue_rebuilt_use[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacreategrn_issue_rebuilt_use[".searchSaving"] = false;
//

$tdatacreategrn_issue_rebuilt_use[".showSearchPanel"] = true;
		$tdatacreategrn_issue_rebuilt_use[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacreategrn_issue_rebuilt_use[".isUseAjaxSuggest"] = false;
else 
	$tdatacreategrn_issue_rebuilt_use[".isUseAjaxSuggest"] = true;

$tdatacreategrn_issue_rebuilt_use[".rowHighlite"] = true;



$tdatacreategrn_issue_rebuilt_use[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacreategrn_issue_rebuilt_use[".isUseTimeForSearch"] = false;





$tdatacreategrn_issue_rebuilt_use[".allSearchFields"] = array();
$tdatacreategrn_issue_rebuilt_use[".filterFields"] = array();
$tdatacreategrn_issue_rebuilt_use[".requiredSearchFields"] = array();

$tdatacreategrn_issue_rebuilt_use[".allSearchFields"][] = "Status";
	$tdatacreategrn_issue_rebuilt_use[".allSearchFields"][] = "GRNDate";
	$tdatacreategrn_issue_rebuilt_use[".allSearchFields"][] = "Fleet";
	$tdatacreategrn_issue_rebuilt_use[".allSearchFields"][] = "RemovedFrom";
	$tdatacreategrn_issue_rebuilt_use[".allSearchFields"][] = "ItemCode";
	$tdatacreategrn_issue_rebuilt_use[".allSearchFields"][] = "Brand";
	$tdatacreategrn_issue_rebuilt_use[".allSearchFields"][] = "Description";
	$tdatacreategrn_issue_rebuilt_use[".allSearchFields"][] = "Supplier";
	$tdatacreategrn_issue_rebuilt_use[".allSearchFields"][] = "CurrentStock";
	$tdatacreategrn_issue_rebuilt_use[".allSearchFields"][] = "Quantity";
	$tdatacreategrn_issue_rebuilt_use[".allSearchFields"][] = "Cost";
	$tdatacreategrn_issue_rebuilt_use[".allSearchFields"][] = "SystemDate";
	$tdatacreategrn_issue_rebuilt_use[".allSearchFields"][] = "EnteredBy";
	

$tdatacreategrn_issue_rebuilt_use[".googleLikeFields"] = array();
$tdatacreategrn_issue_rebuilt_use[".googleLikeFields"][] = "ID";
$tdatacreategrn_issue_rebuilt_use[".googleLikeFields"][] = "ItemCode";
$tdatacreategrn_issue_rebuilt_use[".googleLikeFields"][] = "Brand";
$tdatacreategrn_issue_rebuilt_use[".googleLikeFields"][] = "Description";
$tdatacreategrn_issue_rebuilt_use[".googleLikeFields"][] = "Supplier";
$tdatacreategrn_issue_rebuilt_use[".googleLikeFields"][] = "Quantity";
$tdatacreategrn_issue_rebuilt_use[".googleLikeFields"][] = "RemovedFrom";
$tdatacreategrn_issue_rebuilt_use[".googleLikeFields"][] = "SystemDate";
$tdatacreategrn_issue_rebuilt_use[".googleLikeFields"][] = "GRNDate";
$tdatacreategrn_issue_rebuilt_use[".googleLikeFields"][] = "EnteredBy";
$tdatacreategrn_issue_rebuilt_use[".googleLikeFields"][] = "ApprovedBy";
$tdatacreategrn_issue_rebuilt_use[".googleLikeFields"][] = "UnitPrice";
$tdatacreategrn_issue_rebuilt_use[".googleLikeFields"][] = "Status";
$tdatacreategrn_issue_rebuilt_use[".googleLikeFields"][] = "RefNumber";
$tdatacreategrn_issue_rebuilt_use[".googleLikeFields"][] = "Cost";
$tdatacreategrn_issue_rebuilt_use[".googleLikeFields"][] = "CurrentStock";
$tdatacreategrn_issue_rebuilt_use[".googleLikeFields"][] = "Fleet";


$tdatacreategrn_issue_rebuilt_use[".advSearchFields"] = array();
$tdatacreategrn_issue_rebuilt_use[".advSearchFields"][] = "Status";
$tdatacreategrn_issue_rebuilt_use[".advSearchFields"][] = "GRNDate";
$tdatacreategrn_issue_rebuilt_use[".advSearchFields"][] = "Fleet";
$tdatacreategrn_issue_rebuilt_use[".advSearchFields"][] = "RemovedFrom";
$tdatacreategrn_issue_rebuilt_use[".advSearchFields"][] = "ItemCode";
$tdatacreategrn_issue_rebuilt_use[".advSearchFields"][] = "Brand";
$tdatacreategrn_issue_rebuilt_use[".advSearchFields"][] = "Description";
$tdatacreategrn_issue_rebuilt_use[".advSearchFields"][] = "Supplier";
$tdatacreategrn_issue_rebuilt_use[".advSearchFields"][] = "CurrentStock";
$tdatacreategrn_issue_rebuilt_use[".advSearchFields"][] = "Quantity";
$tdatacreategrn_issue_rebuilt_use[".advSearchFields"][] = "Cost";
$tdatacreategrn_issue_rebuilt_use[".advSearchFields"][] = "SystemDate";
$tdatacreategrn_issue_rebuilt_use[".advSearchFields"][] = "EnteredBy";

$tdatacreategrn_issue_rebuilt_use[".tableType"] = "list";

$tdatacreategrn_issue_rebuilt_use[".printerPageOrientation"] = 0;
$tdatacreategrn_issue_rebuilt_use[".nPrinterPageScale"] = 100;

$tdatacreategrn_issue_rebuilt_use[".nPrinterSplitRecords"] = 40;

$tdatacreategrn_issue_rebuilt_use[".nPrinterPDFSplitRecords"] = 40;



$tdatacreategrn_issue_rebuilt_use[".geocodingEnabled"] = false;




	





// view page pdf
$tdatacreategrn_issue_rebuilt_use[".isViewPagePDF"] = true;
$tdatacreategrn_issue_rebuilt_use[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatacreategrn_issue_rebuilt_use[".isPrinterPagePDF"] = true;
$tdatacreategrn_issue_rebuilt_use[".nPrinterPagePDFScale"] = 100;


$tdatacreategrn_issue_rebuilt_use[".pageSize"] = 20;

$tdatacreategrn_issue_rebuilt_use[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacreategrn_issue_rebuilt_use[".strOrderBy"] = $tstrOrderBy;

$tdatacreategrn_issue_rebuilt_use[".orderindexes"] = array();

$tdatacreategrn_issue_rebuilt_use[".sqlHead"] = "SELECT ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  UnitPrice*Quantity AS Cost,  CurrentStock,  Fleet";
$tdatacreategrn_issue_rebuilt_use[".sqlFrom"] = "FROM creategrn";
$tdatacreategrn_issue_rebuilt_use[".sqlWhereExpr"] = "(Status =\"Used - Rebuilt\")";
$tdatacreategrn_issue_rebuilt_use[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatacreategrn_issue_rebuilt_use[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacreategrn_issue_rebuilt_use[".arrGroupsPerPage"] = $arrGPP;

$tdatacreategrn_issue_rebuilt_use[".highlightSearchResults"] = true;

$tableKeyscreategrn_issue_rebuilt_use = array();
$tableKeyscreategrn_issue_rebuilt_use[] = "ID";
$tdatacreategrn_issue_rebuilt_use[".Keys"] = $tableKeyscreategrn_issue_rebuilt_use;

$tdatacreategrn_issue_rebuilt_use[".listFields"] = array();
$tdatacreategrn_issue_rebuilt_use[".listFields"][] = "GRNDate";
$tdatacreategrn_issue_rebuilt_use[".listFields"][] = "Status";
$tdatacreategrn_issue_rebuilt_use[".listFields"][] = "Fleet";
$tdatacreategrn_issue_rebuilt_use[".listFields"][] = "RemovedFrom";
$tdatacreategrn_issue_rebuilt_use[".listFields"][] = "ItemCode";
$tdatacreategrn_issue_rebuilt_use[".listFields"][] = "Brand";
$tdatacreategrn_issue_rebuilt_use[".listFields"][] = "Description";
$tdatacreategrn_issue_rebuilt_use[".listFields"][] = "Supplier";
$tdatacreategrn_issue_rebuilt_use[".listFields"][] = "Quantity";
$tdatacreategrn_issue_rebuilt_use[".listFields"][] = "EnteredBy";

$tdatacreategrn_issue_rebuilt_use[".hideMobileList"] = array();


$tdatacreategrn_issue_rebuilt_use[".viewFields"] = array();
$tdatacreategrn_issue_rebuilt_use[".viewFields"][] = "ID";
$tdatacreategrn_issue_rebuilt_use[".viewFields"][] = "Status";
$tdatacreategrn_issue_rebuilt_use[".viewFields"][] = "GRNDate";
$tdatacreategrn_issue_rebuilt_use[".viewFields"][] = "Fleet";
$tdatacreategrn_issue_rebuilt_use[".viewFields"][] = "RemovedFrom";
$tdatacreategrn_issue_rebuilt_use[".viewFields"][] = "ItemCode";
$tdatacreategrn_issue_rebuilt_use[".viewFields"][] = "Brand";
$tdatacreategrn_issue_rebuilt_use[".viewFields"][] = "Description";
$tdatacreategrn_issue_rebuilt_use[".viewFields"][] = "Supplier";
$tdatacreategrn_issue_rebuilt_use[".viewFields"][] = "CurrentStock";
$tdatacreategrn_issue_rebuilt_use[".viewFields"][] = "Quantity";
$tdatacreategrn_issue_rebuilt_use[".viewFields"][] = "Cost";
$tdatacreategrn_issue_rebuilt_use[".viewFields"][] = "SystemDate";
$tdatacreategrn_issue_rebuilt_use[".viewFields"][] = "EnteredBy";
$tdatacreategrn_issue_rebuilt_use[".viewFields"][] = "ApprovedBy";

$tdatacreategrn_issue_rebuilt_use[".addFields"] = array();
$tdatacreategrn_issue_rebuilt_use[".addFields"][] = "Status";
$tdatacreategrn_issue_rebuilt_use[".addFields"][] = "GRNDate";
$tdatacreategrn_issue_rebuilt_use[".addFields"][] = "Fleet";
$tdatacreategrn_issue_rebuilt_use[".addFields"][] = "RemovedFrom";
$tdatacreategrn_issue_rebuilt_use[".addFields"][] = "ItemCode";
$tdatacreategrn_issue_rebuilt_use[".addFields"][] = "Brand";
$tdatacreategrn_issue_rebuilt_use[".addFields"][] = "Description";
$tdatacreategrn_issue_rebuilt_use[".addFields"][] = "Supplier";
$tdatacreategrn_issue_rebuilt_use[".addFields"][] = "CurrentStock";
$tdatacreategrn_issue_rebuilt_use[".addFields"][] = "Quantity";
$tdatacreategrn_issue_rebuilt_use[".addFields"][] = "SystemDate";
$tdatacreategrn_issue_rebuilt_use[".addFields"][] = "EnteredBy";

$tdatacreategrn_issue_rebuilt_use[".masterListFields"] = array();
$tdatacreategrn_issue_rebuilt_use[".masterListFields"][] = "Fleet";
$tdatacreategrn_issue_rebuilt_use[".masterListFields"][] = "ID";
$tdatacreategrn_issue_rebuilt_use[".masterListFields"][] = "Status";
$tdatacreategrn_issue_rebuilt_use[".masterListFields"][] = "GRNDate";
$tdatacreategrn_issue_rebuilt_use[".masterListFields"][] = "RemovedFrom";
$tdatacreategrn_issue_rebuilt_use[".masterListFields"][] = "RefNumber";
$tdatacreategrn_issue_rebuilt_use[".masterListFields"][] = "ItemCode";
$tdatacreategrn_issue_rebuilt_use[".masterListFields"][] = "Brand";
$tdatacreategrn_issue_rebuilt_use[".masterListFields"][] = "Description";
$tdatacreategrn_issue_rebuilt_use[".masterListFields"][] = "Supplier";
$tdatacreategrn_issue_rebuilt_use[".masterListFields"][] = "CurrentStock";
$tdatacreategrn_issue_rebuilt_use[".masterListFields"][] = "Quantity";
$tdatacreategrn_issue_rebuilt_use[".masterListFields"][] = "Cost";
$tdatacreategrn_issue_rebuilt_use[".masterListFields"][] = "UnitPrice";
$tdatacreategrn_issue_rebuilt_use[".masterListFields"][] = "SystemDate";
$tdatacreategrn_issue_rebuilt_use[".masterListFields"][] = "EnteredBy";
$tdatacreategrn_issue_rebuilt_use[".masterListFields"][] = "ApprovedBy";

$tdatacreategrn_issue_rebuilt_use[".inlineAddFields"] = array();

$tdatacreategrn_issue_rebuilt_use[".editFields"] = array();
$tdatacreategrn_issue_rebuilt_use[".editFields"][] = "Status";
$tdatacreategrn_issue_rebuilt_use[".editFields"][] = "GRNDate";
$tdatacreategrn_issue_rebuilt_use[".editFields"][] = "Fleet";
$tdatacreategrn_issue_rebuilt_use[".editFields"][] = "RemovedFrom";
$tdatacreategrn_issue_rebuilt_use[".editFields"][] = "ItemCode";
$tdatacreategrn_issue_rebuilt_use[".editFields"][] = "Brand";
$tdatacreategrn_issue_rebuilt_use[".editFields"][] = "Description";
$tdatacreategrn_issue_rebuilt_use[".editFields"][] = "Supplier";
$tdatacreategrn_issue_rebuilt_use[".editFields"][] = "CurrentStock";
$tdatacreategrn_issue_rebuilt_use[".editFields"][] = "Quantity";
$tdatacreategrn_issue_rebuilt_use[".editFields"][] = "Cost";
$tdatacreategrn_issue_rebuilt_use[".editFields"][] = "SystemDate";
$tdatacreategrn_issue_rebuilt_use[".editFields"][] = "EnteredBy";
$tdatacreategrn_issue_rebuilt_use[".editFields"][] = "ApprovedBy";

$tdatacreategrn_issue_rebuilt_use[".inlineEditFields"] = array();

$tdatacreategrn_issue_rebuilt_use[".exportFields"] = array();
$tdatacreategrn_issue_rebuilt_use[".exportFields"][] = "ID";
$tdatacreategrn_issue_rebuilt_use[".exportFields"][] = "Status";
$tdatacreategrn_issue_rebuilt_use[".exportFields"][] = "GRNDate";
$tdatacreategrn_issue_rebuilt_use[".exportFields"][] = "Fleet";
$tdatacreategrn_issue_rebuilt_use[".exportFields"][] = "RemovedFrom";
$tdatacreategrn_issue_rebuilt_use[".exportFields"][] = "ItemCode";
$tdatacreategrn_issue_rebuilt_use[".exportFields"][] = "Brand";
$tdatacreategrn_issue_rebuilt_use[".exportFields"][] = "Description";
$tdatacreategrn_issue_rebuilt_use[".exportFields"][] = "Supplier";
$tdatacreategrn_issue_rebuilt_use[".exportFields"][] = "CurrentStock";
$tdatacreategrn_issue_rebuilt_use[".exportFields"][] = "Quantity";
$tdatacreategrn_issue_rebuilt_use[".exportFields"][] = "Cost";
$tdatacreategrn_issue_rebuilt_use[".exportFields"][] = "SystemDate";
$tdatacreategrn_issue_rebuilt_use[".exportFields"][] = "EnteredBy";
$tdatacreategrn_issue_rebuilt_use[".exportFields"][] = "ApprovedBy";

$tdatacreategrn_issue_rebuilt_use[".importFields"] = array();
$tdatacreategrn_issue_rebuilt_use[".importFields"][] = "ID";
$tdatacreategrn_issue_rebuilt_use[".importFields"][] = "ItemCode";
$tdatacreategrn_issue_rebuilt_use[".importFields"][] = "Brand";
$tdatacreategrn_issue_rebuilt_use[".importFields"][] = "Description";
$tdatacreategrn_issue_rebuilt_use[".importFields"][] = "Supplier";
$tdatacreategrn_issue_rebuilt_use[".importFields"][] = "Quantity";
$tdatacreategrn_issue_rebuilt_use[".importFields"][] = "RemovedFrom";
$tdatacreategrn_issue_rebuilt_use[".importFields"][] = "SystemDate";
$tdatacreategrn_issue_rebuilt_use[".importFields"][] = "GRNDate";
$tdatacreategrn_issue_rebuilt_use[".importFields"][] = "EnteredBy";
$tdatacreategrn_issue_rebuilt_use[".importFields"][] = "ApprovedBy";
$tdatacreategrn_issue_rebuilt_use[".importFields"][] = "Status";
$tdatacreategrn_issue_rebuilt_use[".importFields"][] = "Cost";
$tdatacreategrn_issue_rebuilt_use[".importFields"][] = "CurrentStock";
$tdatacreategrn_issue_rebuilt_use[".importFields"][] = "Fleet";

$tdatacreategrn_issue_rebuilt_use[".printFields"] = array();
$tdatacreategrn_issue_rebuilt_use[".printFields"][] = "ID";
$tdatacreategrn_issue_rebuilt_use[".printFields"][] = "Status";
$tdatacreategrn_issue_rebuilt_use[".printFields"][] = "GRNDate";
$tdatacreategrn_issue_rebuilt_use[".printFields"][] = "Fleet";
$tdatacreategrn_issue_rebuilt_use[".printFields"][] = "RemovedFrom";
$tdatacreategrn_issue_rebuilt_use[".printFields"][] = "ItemCode";
$tdatacreategrn_issue_rebuilt_use[".printFields"][] = "Brand";
$tdatacreategrn_issue_rebuilt_use[".printFields"][] = "Description";
$tdatacreategrn_issue_rebuilt_use[".printFields"][] = "Supplier";
$tdatacreategrn_issue_rebuilt_use[".printFields"][] = "CurrentStock";
$tdatacreategrn_issue_rebuilt_use[".printFields"][] = "Quantity";
$tdatacreategrn_issue_rebuilt_use[".printFields"][] = "Cost";
$tdatacreategrn_issue_rebuilt_use[".printFields"][] = "SystemDate";
$tdatacreategrn_issue_rebuilt_use[".printFields"][] = "EnteredBy";
$tdatacreategrn_issue_rebuilt_use[".printFields"][] = "ApprovedBy";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt_use","ID"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
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
	
	
	
	

	

	
	$tdatacreategrn_issue_rebuilt_use["ID"] = $fdata;
//	ItemCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemCode";
	$fdata["GoodName"] = "ItemCode";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt_use","ItemCode"); 
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
	$edata["LookupTable"] = "creategrn-receive-rebuilt";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Brand", 'lookupF'=>"Brand");
	$edata["autoCompleteFields"][] = array('masterF'=>"Description", 'lookupF'=>"Description");
	$edata["autoCompleteFields"][] = array('masterF'=>"Supplier", 'lookupF'=>"Supplier");
	$edata["autoCompleteFields"][] = array('masterF'=>"UnitPrice", 'lookupF'=>"UnitPrice");
	$edata["autoCompleteFields"][] = array('masterF'=>"CurrentStock", 'lookupF'=>"CurrentStock");
	$edata["LCType"] = 0;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "ItemCode";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ItemCode";
	
		
	$edata["LookupOrderBy"] = "ItemCode";
	
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

	

	
	$tdatacreategrn_issue_rebuilt_use["ItemCode"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt_use","Brand"); 
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

	

	
	$tdatacreategrn_issue_rebuilt_use["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt_use","Description"); 
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

	

	
	$tdatacreategrn_issue_rebuilt_use["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt_use","Supplier"); 
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

	

	
	$tdatacreategrn_issue_rebuilt_use["Supplier"] = $fdata;
//	Quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Quantity";
	$fdata["GoodName"] = "Quantity";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt_use","Quantity"); 
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

	

	
	$tdatacreategrn_issue_rebuilt_use["Quantity"] = $fdata;
//	RemovedFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RemovedFrom";
	$fdata["GoodName"] = "RemovedFrom";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt_use","RemovedFrom"); 
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

	

	
	$tdatacreategrn_issue_rebuilt_use["RemovedFrom"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt_use","SystemDate"); 
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

	

	
	$tdatacreategrn_issue_rebuilt_use["SystemDate"] = $fdata;
//	GRNDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "GRNDate";
	$fdata["GoodName"] = "GRNDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt_use","GRNDate"); 
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacreategrn_issue_rebuilt_use["GRNDate"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt_use","EnteredBy"); 
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

	

	
	$tdatacreategrn_issue_rebuilt_use["EnteredBy"] = $fdata;
//	ApprovedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ApprovedBy";
	$fdata["GoodName"] = "ApprovedBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt_use","ApprovedBy"); 
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
	
	
	
	

	

	
	$tdatacreategrn_issue_rebuilt_use["ApprovedBy"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt_use","UnitPrice"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "UnitPrice"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UnitPrice";
	
		
		
				
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
	
	
	
	

	

	
	$tdatacreategrn_issue_rebuilt_use["UnitPrice"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt_use","Status"); 
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

	

	
	$tdatacreategrn_issue_rebuilt_use["Status"] = $fdata;
//	RefNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RefNumber";
	$fdata["GoodName"] = "RefNumber";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt_use","RefNumber"); 
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
	
	
	
	

	

	
	$tdatacreategrn_issue_rebuilt_use["RefNumber"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt_use","Cost"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Cost"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UnitPrice*Quantity";
	
		
		
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

	

	
	$tdatacreategrn_issue_rebuilt_use["Cost"] = $fdata;
//	CurrentStock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "CurrentStock";
	$fdata["GoodName"] = "CurrentStock";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt_use","CurrentStock"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CurrentStock"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CurrentStock";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacreategrn_issue_rebuilt_use["CurrentStock"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt_use","Fleet"); 
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

	

	
	$tdatacreategrn_issue_rebuilt_use["Fleet"] = $fdata;

	
$tables_data["creategrn-issue-rebuilt-use"]=&$tdatacreategrn_issue_rebuilt_use;
$field_labels["creategrn_issue_rebuilt_use"] = &$fieldLabelscreategrn_issue_rebuilt_use;
$fieldToolTips["creategrn-issue-rebuilt-use"] = &$fieldToolTipscreategrn_issue_rebuilt_use;
$page_titles["creategrn_issue_rebuilt_use"] = &$pageTitlescreategrn_issue_rebuilt_use;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["creategrn-issue-rebuilt-use"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["creategrn-issue-rebuilt-use"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_creategrn_issue_rebuilt_use()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  UnitPrice*Quantity AS Cost,  CurrentStock,  Fleet";
$proto0["m_strFrom"] = "FROM creategrn";
$proto0["m_strWhere"] = "(Status =\"Used - Rebuilt\")";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "Status =\"Used - Rebuilt\"";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt-use"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=\"Used - Rebuilt\"";
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
	"m_srcTableName" => "creategrn-issue-rebuilt-use"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "creategrn-issue-rebuilt-use";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt-use"
));

$proto7["m_sql"] = "ItemCode";
$proto7["m_srcTableName"] = "creategrn-issue-rebuilt-use";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt-use"
));

$proto9["m_sql"] = "Brand";
$proto9["m_srcTableName"] = "creategrn-issue-rebuilt-use";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt-use"
));

$proto11["m_sql"] = "Description";
$proto11["m_srcTableName"] = "creategrn-issue-rebuilt-use";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt-use"
));

$proto13["m_sql"] = "Supplier";
$proto13["m_srcTableName"] = "creategrn-issue-rebuilt-use";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt-use"
));

$proto15["m_sql"] = "Quantity";
$proto15["m_srcTableName"] = "creategrn-issue-rebuilt-use";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt-use"
));

$proto17["m_sql"] = "RemovedFrom";
$proto17["m_srcTableName"] = "creategrn-issue-rebuilt-use";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt-use"
));

$proto19["m_sql"] = "SystemDate";
$proto19["m_srcTableName"] = "creategrn-issue-rebuilt-use";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt-use"
));

$proto21["m_sql"] = "GRNDate";
$proto21["m_srcTableName"] = "creategrn-issue-rebuilt-use";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt-use"
));

$proto23["m_sql"] = "EnteredBy";
$proto23["m_srcTableName"] = "creategrn-issue-rebuilt-use";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt-use"
));

$proto25["m_sql"] = "ApprovedBy";
$proto25["m_srcTableName"] = "creategrn-issue-rebuilt-use";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt-use"
));

$proto27["m_sql"] = "UnitPrice";
$proto27["m_srcTableName"] = "creategrn-issue-rebuilt-use";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt-use"
));

$proto29["m_sql"] = "Status";
$proto29["m_srcTableName"] = "creategrn-issue-rebuilt-use";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt-use"
));

$proto31["m_sql"] = "RefNumber";
$proto31["m_srcTableName"] = "creategrn-issue-rebuilt-use";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "UnitPrice*Quantity"
));

$proto33["m_sql"] = "UnitPrice*Quantity";
$proto33["m_srcTableName"] = "creategrn-issue-rebuilt-use";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "Cost";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "CurrentStock",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt-use"
));

$proto35["m_sql"] = "CurrentStock";
$proto35["m_srcTableName"] = "creategrn-issue-rebuilt-use";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt-use"
));

$proto37["m_sql"] = "Fleet";
$proto37["m_srcTableName"] = "creategrn-issue-rebuilt-use";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto39=array();
$proto39["m_link"] = "SQLL_MAIN";
			$proto40=array();
$proto40["m_strName"] = "creategrn";
$proto40["m_srcTableName"] = "creategrn-issue-rebuilt-use";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "ID";
$proto40["m_columns"][] = "ItemCode";
$proto40["m_columns"][] = "Brand";
$proto40["m_columns"][] = "Description";
$proto40["m_columns"][] = "Supplier";
$proto40["m_columns"][] = "Quantity";
$proto40["m_columns"][] = "RemovedFrom";
$proto40["m_columns"][] = "SystemDate";
$proto40["m_columns"][] = "GRNDate";
$proto40["m_columns"][] = "EnteredBy";
$proto40["m_columns"][] = "ApprovedBy";
$proto40["m_columns"][] = "UnitPrice";
$proto40["m_columns"][] = "Status";
$proto40["m_columns"][] = "RefNumber";
$proto40["m_columns"][] = "CurrentStock";
$proto40["m_columns"][] = "Fleet";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "creategrn";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "creategrn-issue-rebuilt-use";
$proto41=array();
$proto41["m_sql"] = "";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="creategrn-issue-rebuilt-use";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_creategrn_issue_rebuilt_use = createSqlQuery_creategrn_issue_rebuilt_use();


	
																	
	
$tdatacreategrn_issue_rebuilt_use[".sqlquery"] = $queryData_creategrn_issue_rebuilt_use;

include_once(getabspath("include/creategrn_issue_rebuilt_use_events.php"));
$tableEvents["creategrn-issue-rebuilt-use"] = new eventclass_creategrn_issue_rebuilt_use;
$tdatacreategrn_issue_rebuilt_use[".hasEvents"] = true;

?>