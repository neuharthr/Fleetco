<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacreategrn_receive_rebuilt = array();	
	$tdatacreategrn_receive_rebuilt[".truncateText"] = true;
	$tdatacreategrn_receive_rebuilt[".NumberOfChars"] = 80; 
	$tdatacreategrn_receive_rebuilt[".ShortName"] = "creategrn_receive_rebuilt";
	$tdatacreategrn_receive_rebuilt[".OwnerID"] = "";
	$tdatacreategrn_receive_rebuilt[".OriginalTable"] = "creategrn";

//	field labels
$fieldLabelscreategrn_receive_rebuilt = array();
$fieldToolTipscreategrn_receive_rebuilt = array();
$pageTitlescreategrn_receive_rebuilt = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscreategrn_receive_rebuilt["English"] = array();
	$fieldToolTipscreategrn_receive_rebuilt["English"] = array();
	$pageTitlescreategrn_receive_rebuilt["English"] = array();
	$fieldLabelscreategrn_receive_rebuilt["English"]["ItemCode"] = "Item Code";
	$fieldToolTipscreategrn_receive_rebuilt["English"]["ItemCode"] = "";
	$fieldLabelscreategrn_receive_rebuilt["English"]["Brand"] = "Brand";
	$fieldToolTipscreategrn_receive_rebuilt["English"]["Brand"] = "";
	$fieldLabelscreategrn_receive_rebuilt["English"]["Description"] = "Descr.";
	$fieldToolTipscreategrn_receive_rebuilt["English"]["Description"] = "";
	$fieldLabelscreategrn_receive_rebuilt["English"]["Supplier"] = "Supplier";
	$fieldToolTipscreategrn_receive_rebuilt["English"]["Supplier"] = "";
	$fieldLabelscreategrn_receive_rebuilt["English"]["Quantity"] = "Qty";
	$fieldToolTipscreategrn_receive_rebuilt["English"]["Quantity"] = "";
	$fieldLabelscreategrn_receive_rebuilt["English"]["RemovedFrom"] = "Vehicle";
	$fieldToolTipscreategrn_receive_rebuilt["English"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_receive_rebuilt["English"]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn_receive_rebuilt["English"]["SystemDate"] = "";
	$fieldLabelscreategrn_receive_rebuilt["English"]["GRNDate"] = "Date";
	$fieldToolTipscreategrn_receive_rebuilt["English"]["GRNDate"] = "";
	$fieldLabelscreategrn_receive_rebuilt["English"]["EnteredBy"] = "Entered";
	$fieldToolTipscreategrn_receive_rebuilt["English"]["EnteredBy"] = "";
	$fieldLabelscreategrn_receive_rebuilt["English"]["ApprovedBy"] = "Edited By";
	$fieldToolTipscreategrn_receive_rebuilt["English"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_receive_rebuilt["English"]["Status"] = "Receipt Type";
	$fieldToolTipscreategrn_receive_rebuilt["English"]["Status"] = "";
	$fieldLabelscreategrn_receive_rebuilt["English"]["ID"] = "ID";
	$fieldToolTipscreategrn_receive_rebuilt["English"]["ID"] = "";
	$fieldLabelscreategrn_receive_rebuilt["English"]["UnitPrice"] = "Unit Cost";
	$fieldToolTipscreategrn_receive_rebuilt["English"]["UnitPrice"] = "";
	$fieldLabelscreategrn_receive_rebuilt["English"]["RefNumber"] = "PO Ref.";
	$fieldToolTipscreategrn_receive_rebuilt["English"]["RefNumber"] = "";
	$fieldLabelscreategrn_receive_rebuilt["English"]["Cost"] = "Cost";
	$fieldToolTipscreategrn_receive_rebuilt["English"]["Cost"] = "";
	$fieldLabelscreategrn_receive_rebuilt["English"]["CurrentStock"] = "In-Stock";
	$fieldToolTipscreategrn_receive_rebuilt["English"]["CurrentStock"] = "";
	$fieldLabelscreategrn_receive_rebuilt["English"]["Fleet"] = "Fleet";
	$fieldToolTipscreategrn_receive_rebuilt["English"]["Fleet"] = "";
	if (count($fieldToolTipscreategrn_receive_rebuilt["English"]))
		$tdatacreategrn_receive_rebuilt[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscreategrn_receive_rebuilt[""] = array();
	$fieldToolTipscreategrn_receive_rebuilt[""] = array();
	$pageTitlescreategrn_receive_rebuilt[""] = array();
	$fieldLabelscreategrn_receive_rebuilt[""]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn_receive_rebuilt[""]["SystemDate"] = "";
	$fieldLabelscreategrn_receive_rebuilt[""]["GRNDate"] = "GRNDate";
	$fieldToolTipscreategrn_receive_rebuilt[""]["GRNDate"] = "";
	$fieldLabelscreategrn_receive_rebuilt[""]["EnteredBy"] = "Entered By";
	$fieldToolTipscreategrn_receive_rebuilt[""]["EnteredBy"] = "";
	$fieldLabelscreategrn_receive_rebuilt[""]["ApprovedBy"] = "Approved By";
	$fieldToolTipscreategrn_receive_rebuilt[""]["ApprovedBy"] = "";
	$fieldLabelscreategrn_receive_rebuilt[""]["Status"] = "Status";
	$fieldToolTipscreategrn_receive_rebuilt[""]["Status"] = "";
	$fieldLabelscreategrn_receive_rebuilt[""]["ID"] = "ID";
	$fieldToolTipscreategrn_receive_rebuilt[""]["ID"] = "";
	$fieldLabelscreategrn_receive_rebuilt[""]["UnitPrice"] = "Unit Price";
	$fieldToolTipscreategrn_receive_rebuilt[""]["UnitPrice"] = "";
	$fieldLabelscreategrn_receive_rebuilt[""]["RefNumber"] = "Ref Number";
	$fieldToolTipscreategrn_receive_rebuilt[""]["RefNumber"] = "";
	$fieldLabelscreategrn_receive_rebuilt[""]["Cost"] = "Cost";
	$fieldToolTipscreategrn_receive_rebuilt[""]["Cost"] = "";
	$fieldLabelscreategrn_receive_rebuilt[""]["CurrentStock"] = "Current Stock";
	$fieldToolTipscreategrn_receive_rebuilt[""]["CurrentStock"] = "";
	$fieldLabelscreategrn_receive_rebuilt[""]["Fleet"] = "Fleet";
	$fieldToolTipscreategrn_receive_rebuilt[""]["Fleet"] = "";
	if (count($fieldToolTipscreategrn_receive_rebuilt[""]))
		$tdatacreategrn_receive_rebuilt[".isUseToolTips"] = true;
}
	
	
	$tdatacreategrn_receive_rebuilt[".NCSearch"] = true;



$tdatacreategrn_receive_rebuilt[".shortTableName"] = "creategrn_receive_rebuilt";
$tdatacreategrn_receive_rebuilt[".nSecOptions"] = 0;
$tdatacreategrn_receive_rebuilt[".recsPerRowList"] = 1;
$tdatacreategrn_receive_rebuilt[".recsPerRowPrint"] = 1;
$tdatacreategrn_receive_rebuilt[".mainTableOwnerID"] = "";
$tdatacreategrn_receive_rebuilt[".moveNext"] = 1;
$tdatacreategrn_receive_rebuilt[".entityType"] = 1;

$tdatacreategrn_receive_rebuilt[".strOriginalTableName"] = "creategrn";




$tdatacreategrn_receive_rebuilt[".showAddInPopup"] = false;

$tdatacreategrn_receive_rebuilt[".showEditInPopup"] = false;

$tdatacreategrn_receive_rebuilt[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacreategrn_receive_rebuilt[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacreategrn_receive_rebuilt[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatacreategrn_receive_rebuilt[".listAjax"] = true;
else 
	$tdatacreategrn_receive_rebuilt[".listAjax"] = false;

	$tdatacreategrn_receive_rebuilt[".audit"] = false;

	$tdatacreategrn_receive_rebuilt[".locking"] = false;

$tdatacreategrn_receive_rebuilt[".edit"] = true;
$tdatacreategrn_receive_rebuilt[".afterEditAction"] = 1;
$tdatacreategrn_receive_rebuilt[".closePopupAfterEdit"] = 1;
$tdatacreategrn_receive_rebuilt[".afterEditActionDetTable"] = "";

$tdatacreategrn_receive_rebuilt[".add"] = true;
$tdatacreategrn_receive_rebuilt[".afterAddAction"] = 1;
$tdatacreategrn_receive_rebuilt[".closePopupAfterAdd"] = 1;
$tdatacreategrn_receive_rebuilt[".afterAddActionDetTable"] = "";

$tdatacreategrn_receive_rebuilt[".list"] = true;

$tdatacreategrn_receive_rebuilt[".view"] = true;

$tdatacreategrn_receive_rebuilt[".import"] = true;

$tdatacreategrn_receive_rebuilt[".exportTo"] = true;

$tdatacreategrn_receive_rebuilt[".printFriendly"] = true;

$tdatacreategrn_receive_rebuilt[".delete"] = true;

$tdatacreategrn_receive_rebuilt[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacreategrn_receive_rebuilt[".searchSaving"] = false;
//

$tdatacreategrn_receive_rebuilt[".showSearchPanel"] = true;
		$tdatacreategrn_receive_rebuilt[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacreategrn_receive_rebuilt[".isUseAjaxSuggest"] = false;
else 
	$tdatacreategrn_receive_rebuilt[".isUseAjaxSuggest"] = true;

$tdatacreategrn_receive_rebuilt[".rowHighlite"] = true;



$tdatacreategrn_receive_rebuilt[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacreategrn_receive_rebuilt[".isUseTimeForSearch"] = false;





$tdatacreategrn_receive_rebuilt[".allSearchFields"] = array();
$tdatacreategrn_receive_rebuilt[".filterFields"] = array();
$tdatacreategrn_receive_rebuilt[".requiredSearchFields"] = array();

$tdatacreategrn_receive_rebuilt[".allSearchFields"][] = "Status";
	$tdatacreategrn_receive_rebuilt[".allSearchFields"][] = "GRNDate";
	$tdatacreategrn_receive_rebuilt[".allSearchFields"][] = "Fleet";
	$tdatacreategrn_receive_rebuilt[".allSearchFields"][] = "RemovedFrom";
	$tdatacreategrn_receive_rebuilt[".allSearchFields"][] = "RefNumber";
	$tdatacreategrn_receive_rebuilt[".allSearchFields"][] = "ItemCode";
	$tdatacreategrn_receive_rebuilt[".allSearchFields"][] = "Brand";
	$tdatacreategrn_receive_rebuilt[".allSearchFields"][] = "Description";
	$tdatacreategrn_receive_rebuilt[".allSearchFields"][] = "Supplier";
	$tdatacreategrn_receive_rebuilt[".allSearchFields"][] = "UnitPrice";
	$tdatacreategrn_receive_rebuilt[".allSearchFields"][] = "Quantity";
	$tdatacreategrn_receive_rebuilt[".allSearchFields"][] = "Cost";
	$tdatacreategrn_receive_rebuilt[".allSearchFields"][] = "SystemDate";
	$tdatacreategrn_receive_rebuilt[".allSearchFields"][] = "EnteredBy";
	

$tdatacreategrn_receive_rebuilt[".googleLikeFields"] = array();
$tdatacreategrn_receive_rebuilt[".googleLikeFields"][] = "ID";
$tdatacreategrn_receive_rebuilt[".googleLikeFields"][] = "ItemCode";
$tdatacreategrn_receive_rebuilt[".googleLikeFields"][] = "Brand";
$tdatacreategrn_receive_rebuilt[".googleLikeFields"][] = "Description";
$tdatacreategrn_receive_rebuilt[".googleLikeFields"][] = "Supplier";
$tdatacreategrn_receive_rebuilt[".googleLikeFields"][] = "Quantity";
$tdatacreategrn_receive_rebuilt[".googleLikeFields"][] = "RemovedFrom";
$tdatacreategrn_receive_rebuilt[".googleLikeFields"][] = "SystemDate";
$tdatacreategrn_receive_rebuilt[".googleLikeFields"][] = "GRNDate";
$tdatacreategrn_receive_rebuilt[".googleLikeFields"][] = "EnteredBy";
$tdatacreategrn_receive_rebuilt[".googleLikeFields"][] = "ApprovedBy";
$tdatacreategrn_receive_rebuilt[".googleLikeFields"][] = "UnitPrice";
$tdatacreategrn_receive_rebuilt[".googleLikeFields"][] = "Status";
$tdatacreategrn_receive_rebuilt[".googleLikeFields"][] = "RefNumber";
$tdatacreategrn_receive_rebuilt[".googleLikeFields"][] = "Cost";
$tdatacreategrn_receive_rebuilt[".googleLikeFields"][] = "CurrentStock";
$tdatacreategrn_receive_rebuilt[".googleLikeFields"][] = "Fleet";


$tdatacreategrn_receive_rebuilt[".advSearchFields"] = array();
$tdatacreategrn_receive_rebuilt[".advSearchFields"][] = "Status";
$tdatacreategrn_receive_rebuilt[".advSearchFields"][] = "GRNDate";
$tdatacreategrn_receive_rebuilt[".advSearchFields"][] = "Fleet";
$tdatacreategrn_receive_rebuilt[".advSearchFields"][] = "RemovedFrom";
$tdatacreategrn_receive_rebuilt[".advSearchFields"][] = "RefNumber";
$tdatacreategrn_receive_rebuilt[".advSearchFields"][] = "ItemCode";
$tdatacreategrn_receive_rebuilt[".advSearchFields"][] = "Brand";
$tdatacreategrn_receive_rebuilt[".advSearchFields"][] = "Description";
$tdatacreategrn_receive_rebuilt[".advSearchFields"][] = "Supplier";
$tdatacreategrn_receive_rebuilt[".advSearchFields"][] = "UnitPrice";
$tdatacreategrn_receive_rebuilt[".advSearchFields"][] = "Quantity";
$tdatacreategrn_receive_rebuilt[".advSearchFields"][] = "Cost";
$tdatacreategrn_receive_rebuilt[".advSearchFields"][] = "SystemDate";
$tdatacreategrn_receive_rebuilt[".advSearchFields"][] = "EnteredBy";

$tdatacreategrn_receive_rebuilt[".tableType"] = "list";

$tdatacreategrn_receive_rebuilt[".printerPageOrientation"] = 0;
$tdatacreategrn_receive_rebuilt[".nPrinterPageScale"] = 100;

$tdatacreategrn_receive_rebuilt[".nPrinterSplitRecords"] = 40;

$tdatacreategrn_receive_rebuilt[".nPrinterPDFSplitRecords"] = 40;



$tdatacreategrn_receive_rebuilt[".geocodingEnabled"] = false;




	





// view page pdf
$tdatacreategrn_receive_rebuilt[".isViewPagePDF"] = true;
$tdatacreategrn_receive_rebuilt[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatacreategrn_receive_rebuilt[".isPrinterPagePDF"] = true;
$tdatacreategrn_receive_rebuilt[".nPrinterPagePDFScale"] = 100;


$tdatacreategrn_receive_rebuilt[".pageSize"] = 20;

$tdatacreategrn_receive_rebuilt[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacreategrn_receive_rebuilt[".strOrderBy"] = $tstrOrderBy;

$tdatacreategrn_receive_rebuilt[".orderindexes"] = array();

$tdatacreategrn_receive_rebuilt[".sqlHead"] = "SELECT ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  UnitPrice*Quantity AS Cost,  CurrentStock,  Fleet";
$tdatacreategrn_receive_rebuilt[".sqlFrom"] = "FROM creategrn";
$tdatacreategrn_receive_rebuilt[".sqlWhereExpr"] = "Status =\"Receipt - Rebuilt\"";
$tdatacreategrn_receive_rebuilt[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatacreategrn_receive_rebuilt[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacreategrn_receive_rebuilt[".arrGroupsPerPage"] = $arrGPP;

$tdatacreategrn_receive_rebuilt[".highlightSearchResults"] = true;

$tableKeyscreategrn_receive_rebuilt = array();
$tableKeyscreategrn_receive_rebuilt[] = "ID";
$tdatacreategrn_receive_rebuilt[".Keys"] = $tableKeyscreategrn_receive_rebuilt;

$tdatacreategrn_receive_rebuilt[".listFields"] = array();
$tdatacreategrn_receive_rebuilt[".listFields"][] = "GRNDate";
$tdatacreategrn_receive_rebuilt[".listFields"][] = "Status";
$tdatacreategrn_receive_rebuilt[".listFields"][] = "Fleet";
$tdatacreategrn_receive_rebuilt[".listFields"][] = "RemovedFrom";
$tdatacreategrn_receive_rebuilt[".listFields"][] = "RefNumber";
$tdatacreategrn_receive_rebuilt[".listFields"][] = "ItemCode";
$tdatacreategrn_receive_rebuilt[".listFields"][] = "Brand";
$tdatacreategrn_receive_rebuilt[".listFields"][] = "Description";
$tdatacreategrn_receive_rebuilt[".listFields"][] = "Supplier";
$tdatacreategrn_receive_rebuilt[".listFields"][] = "UnitPrice";
$tdatacreategrn_receive_rebuilt[".listFields"][] = "Quantity";
$tdatacreategrn_receive_rebuilt[".listFields"][] = "Cost";
$tdatacreategrn_receive_rebuilt[".listFields"][] = "EnteredBy";

$tdatacreategrn_receive_rebuilt[".hideMobileList"] = array();


$tdatacreategrn_receive_rebuilt[".viewFields"] = array();
$tdatacreategrn_receive_rebuilt[".viewFields"][] = "ID";
$tdatacreategrn_receive_rebuilt[".viewFields"][] = "Status";
$tdatacreategrn_receive_rebuilt[".viewFields"][] = "GRNDate";
$tdatacreategrn_receive_rebuilt[".viewFields"][] = "Fleet";
$tdatacreategrn_receive_rebuilt[".viewFields"][] = "RemovedFrom";
$tdatacreategrn_receive_rebuilt[".viewFields"][] = "RefNumber";
$tdatacreategrn_receive_rebuilt[".viewFields"][] = "ItemCode";
$tdatacreategrn_receive_rebuilt[".viewFields"][] = "Brand";
$tdatacreategrn_receive_rebuilt[".viewFields"][] = "Description";
$tdatacreategrn_receive_rebuilt[".viewFields"][] = "Supplier";
$tdatacreategrn_receive_rebuilt[".viewFields"][] = "UnitPrice";
$tdatacreategrn_receive_rebuilt[".viewFields"][] = "Quantity";
$tdatacreategrn_receive_rebuilt[".viewFields"][] = "Cost";
$tdatacreategrn_receive_rebuilt[".viewFields"][] = "SystemDate";
$tdatacreategrn_receive_rebuilt[".viewFields"][] = "EnteredBy";
$tdatacreategrn_receive_rebuilt[".viewFields"][] = "ApprovedBy";

$tdatacreategrn_receive_rebuilt[".addFields"] = array();
$tdatacreategrn_receive_rebuilt[".addFields"][] = "Status";
$tdatacreategrn_receive_rebuilt[".addFields"][] = "GRNDate";
$tdatacreategrn_receive_rebuilt[".addFields"][] = "Fleet";
$tdatacreategrn_receive_rebuilt[".addFields"][] = "RemovedFrom";
$tdatacreategrn_receive_rebuilt[".addFields"][] = "ItemCode";
$tdatacreategrn_receive_rebuilt[".addFields"][] = "Brand";
$tdatacreategrn_receive_rebuilt[".addFields"][] = "Description";
$tdatacreategrn_receive_rebuilt[".addFields"][] = "Supplier";
$tdatacreategrn_receive_rebuilt[".addFields"][] = "UnitPrice";
$tdatacreategrn_receive_rebuilt[".addFields"][] = "Quantity";
$tdatacreategrn_receive_rebuilt[".addFields"][] = "RefNumber";
$tdatacreategrn_receive_rebuilt[".addFields"][] = "SystemDate";
$tdatacreategrn_receive_rebuilt[".addFields"][] = "EnteredBy";

$tdatacreategrn_receive_rebuilt[".masterListFields"] = array();
$tdatacreategrn_receive_rebuilt[".masterListFields"][] = "Fleet";
$tdatacreategrn_receive_rebuilt[".masterListFields"][] = "ID";
$tdatacreategrn_receive_rebuilt[".masterListFields"][] = "Status";
$tdatacreategrn_receive_rebuilt[".masterListFields"][] = "GRNDate";
$tdatacreategrn_receive_rebuilt[".masterListFields"][] = "RemovedFrom";
$tdatacreategrn_receive_rebuilt[".masterListFields"][] = "RefNumber";
$tdatacreategrn_receive_rebuilt[".masterListFields"][] = "ItemCode";
$tdatacreategrn_receive_rebuilt[".masterListFields"][] = "Brand";
$tdatacreategrn_receive_rebuilt[".masterListFields"][] = "Description";
$tdatacreategrn_receive_rebuilt[".masterListFields"][] = "Supplier";
$tdatacreategrn_receive_rebuilt[".masterListFields"][] = "UnitPrice";
$tdatacreategrn_receive_rebuilt[".masterListFields"][] = "Quantity";
$tdatacreategrn_receive_rebuilt[".masterListFields"][] = "Cost";
$tdatacreategrn_receive_rebuilt[".masterListFields"][] = "CurrentStock";
$tdatacreategrn_receive_rebuilt[".masterListFields"][] = "SystemDate";
$tdatacreategrn_receive_rebuilt[".masterListFields"][] = "EnteredBy";
$tdatacreategrn_receive_rebuilt[".masterListFields"][] = "ApprovedBy";

$tdatacreategrn_receive_rebuilt[".inlineAddFields"] = array();

$tdatacreategrn_receive_rebuilt[".editFields"] = array();
$tdatacreategrn_receive_rebuilt[".editFields"][] = "Fleet";
$tdatacreategrn_receive_rebuilt[".editFields"][] = "Status";
$tdatacreategrn_receive_rebuilt[".editFields"][] = "GRNDate";
$tdatacreategrn_receive_rebuilt[".editFields"][] = "RemovedFrom";
$tdatacreategrn_receive_rebuilt[".editFields"][] = "ItemCode";
$tdatacreategrn_receive_rebuilt[".editFields"][] = "Brand";
$tdatacreategrn_receive_rebuilt[".editFields"][] = "Description";
$tdatacreategrn_receive_rebuilt[".editFields"][] = "Supplier";
$tdatacreategrn_receive_rebuilt[".editFields"][] = "UnitPrice";
$tdatacreategrn_receive_rebuilt[".editFields"][] = "Quantity";
$tdatacreategrn_receive_rebuilt[".editFields"][] = "Cost";
$tdatacreategrn_receive_rebuilt[".editFields"][] = "RefNumber";
$tdatacreategrn_receive_rebuilt[".editFields"][] = "SystemDate";
$tdatacreategrn_receive_rebuilt[".editFields"][] = "EnteredBy";
$tdatacreategrn_receive_rebuilt[".editFields"][] = "ApprovedBy";

$tdatacreategrn_receive_rebuilt[".inlineEditFields"] = array();

$tdatacreategrn_receive_rebuilt[".exportFields"] = array();
$tdatacreategrn_receive_rebuilt[".exportFields"][] = "ID";
$tdatacreategrn_receive_rebuilt[".exportFields"][] = "Status";
$tdatacreategrn_receive_rebuilt[".exportFields"][] = "GRNDate";
$tdatacreategrn_receive_rebuilt[".exportFields"][] = "Fleet";
$tdatacreategrn_receive_rebuilt[".exportFields"][] = "RemovedFrom";
$tdatacreategrn_receive_rebuilt[".exportFields"][] = "RefNumber";
$tdatacreategrn_receive_rebuilt[".exportFields"][] = "ItemCode";
$tdatacreategrn_receive_rebuilt[".exportFields"][] = "Brand";
$tdatacreategrn_receive_rebuilt[".exportFields"][] = "Description";
$tdatacreategrn_receive_rebuilt[".exportFields"][] = "Supplier";
$tdatacreategrn_receive_rebuilt[".exportFields"][] = "UnitPrice";
$tdatacreategrn_receive_rebuilt[".exportFields"][] = "Quantity";
$tdatacreategrn_receive_rebuilt[".exportFields"][] = "Cost";
$tdatacreategrn_receive_rebuilt[".exportFields"][] = "SystemDate";
$tdatacreategrn_receive_rebuilt[".exportFields"][] = "EnteredBy";
$tdatacreategrn_receive_rebuilt[".exportFields"][] = "ApprovedBy";

$tdatacreategrn_receive_rebuilt[".importFields"] = array();
$tdatacreategrn_receive_rebuilt[".importFields"][] = "ID";
$tdatacreategrn_receive_rebuilt[".importFields"][] = "ItemCode";
$tdatacreategrn_receive_rebuilt[".importFields"][] = "Brand";
$tdatacreategrn_receive_rebuilt[".importFields"][] = "Description";
$tdatacreategrn_receive_rebuilt[".importFields"][] = "Supplier";
$tdatacreategrn_receive_rebuilt[".importFields"][] = "Quantity";
$tdatacreategrn_receive_rebuilt[".importFields"][] = "RemovedFrom";
$tdatacreategrn_receive_rebuilt[".importFields"][] = "SystemDate";
$tdatacreategrn_receive_rebuilt[".importFields"][] = "GRNDate";
$tdatacreategrn_receive_rebuilt[".importFields"][] = "EnteredBy";
$tdatacreategrn_receive_rebuilt[".importFields"][] = "ApprovedBy";
$tdatacreategrn_receive_rebuilt[".importFields"][] = "UnitPrice";
$tdatacreategrn_receive_rebuilt[".importFields"][] = "Status";
$tdatacreategrn_receive_rebuilt[".importFields"][] = "RefNumber";
$tdatacreategrn_receive_rebuilt[".importFields"][] = "Cost";
$tdatacreategrn_receive_rebuilt[".importFields"][] = "Fleet";

$tdatacreategrn_receive_rebuilt[".printFields"] = array();
$tdatacreategrn_receive_rebuilt[".printFields"][] = "ID";
$tdatacreategrn_receive_rebuilt[".printFields"][] = "Status";
$tdatacreategrn_receive_rebuilt[".printFields"][] = "GRNDate";
$tdatacreategrn_receive_rebuilt[".printFields"][] = "Fleet";
$tdatacreategrn_receive_rebuilt[".printFields"][] = "RemovedFrom";
$tdatacreategrn_receive_rebuilt[".printFields"][] = "RefNumber";
$tdatacreategrn_receive_rebuilt[".printFields"][] = "ItemCode";
$tdatacreategrn_receive_rebuilt[".printFields"][] = "Brand";
$tdatacreategrn_receive_rebuilt[".printFields"][] = "Description";
$tdatacreategrn_receive_rebuilt[".printFields"][] = "Supplier";
$tdatacreategrn_receive_rebuilt[".printFields"][] = "UnitPrice";
$tdatacreategrn_receive_rebuilt[".printFields"][] = "Quantity";
$tdatacreategrn_receive_rebuilt[".printFields"][] = "Cost";
$tdatacreategrn_receive_rebuilt[".printFields"][] = "SystemDate";
$tdatacreategrn_receive_rebuilt[".printFields"][] = "EnteredBy";
$tdatacreategrn_receive_rebuilt[".printFields"][] = "ApprovedBy";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive_rebuilt","ID"); 
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
	
	
	
	

	

	
	$tdatacreategrn_receive_rebuilt["ID"] = $fdata;
//	ItemCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemCode";
	$fdata["GoodName"] = "ItemCode";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive_rebuilt","ItemCode"); 
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "inventorymaster17";
	$edata["LookupConnId"] = "";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "ItemID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ItemID";
	
		
	$edata["LookupOrderBy"] = "ItemID";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
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

	

	
	$tdatacreategrn_receive_rebuilt["ItemCode"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive_rebuilt","Brand"); 
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

	

	
	$tdatacreategrn_receive_rebuilt["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive_rebuilt","Description"); 
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

	

	
	$tdatacreategrn_receive_rebuilt["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive_rebuilt","Supplier"); 
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

	

	
	$tdatacreategrn_receive_rebuilt["Supplier"] = $fdata;
//	Quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Quantity";
	$fdata["GoodName"] = "Quantity";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive_rebuilt","Quantity"); 
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

	

	
	$tdatacreategrn_receive_rebuilt["Quantity"] = $fdata;
//	RemovedFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RemovedFrom";
	$fdata["GoodName"] = "RemovedFrom";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive_rebuilt","RemovedFrom"); 
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

	

	
	$tdatacreategrn_receive_rebuilt["RemovedFrom"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive_rebuilt","SystemDate"); 
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

	

	
	$tdatacreategrn_receive_rebuilt["SystemDate"] = $fdata;
//	GRNDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "GRNDate";
	$fdata["GoodName"] = "GRNDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive_rebuilt","GRNDate"); 
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

	

	
	$tdatacreategrn_receive_rebuilt["GRNDate"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive_rebuilt","EnteredBy"); 
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

	

	
	$tdatacreategrn_receive_rebuilt["EnteredBy"] = $fdata;
//	ApprovedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ApprovedBy";
	$fdata["GoodName"] = "ApprovedBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive_rebuilt","ApprovedBy"); 
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
	
	
	
	

	

	
	$tdatacreategrn_receive_rebuilt["ApprovedBy"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive_rebuilt","UnitPrice"); 
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacreategrn_receive_rebuilt["UnitPrice"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive_rebuilt","Status"); 
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

	

	
	$tdatacreategrn_receive_rebuilt["Status"] = $fdata;
//	RefNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RefNumber";
	$fdata["GoodName"] = "RefNumber";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive_rebuilt","RefNumber"); 
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacreategrn_receive_rebuilt["RefNumber"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("creategrn_receive_rebuilt","Cost"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
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

	

	
	$tdatacreategrn_receive_rebuilt["Cost"] = $fdata;
//	CurrentStock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "CurrentStock";
	$fdata["GoodName"] = "CurrentStock";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive_rebuilt","CurrentStock"); 
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
	
	
	
	

	

	
	$tdatacreategrn_receive_rebuilt["CurrentStock"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_receive_rebuilt","Fleet"); 
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

	

	
	$tdatacreategrn_receive_rebuilt["Fleet"] = $fdata;

	
$tables_data["creategrn-receive-rebuilt"]=&$tdatacreategrn_receive_rebuilt;
$field_labels["creategrn_receive_rebuilt"] = &$fieldLabelscreategrn_receive_rebuilt;
$fieldToolTips["creategrn-receive-rebuilt"] = &$fieldToolTipscreategrn_receive_rebuilt;
$page_titles["creategrn_receive_rebuilt"] = &$pageTitlescreategrn_receive_rebuilt;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["creategrn-receive-rebuilt"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["creategrn-receive-rebuilt"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_creategrn_receive_rebuilt()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  UnitPrice*Quantity AS Cost,  CurrentStock,  Fleet";
$proto0["m_strFrom"] = "FROM creategrn";
$proto0["m_strWhere"] = "Status =\"Receipt - Rebuilt\"";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "Status =\"Receipt - Rebuilt\"";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive-rebuilt"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=\"Receipt - Rebuilt\"";
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
	"m_srcTableName" => "creategrn-receive-rebuilt"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "creategrn-receive-rebuilt";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive-rebuilt"
));

$proto7["m_sql"] = "ItemCode";
$proto7["m_srcTableName"] = "creategrn-receive-rebuilt";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive-rebuilt"
));

$proto9["m_sql"] = "Brand";
$proto9["m_srcTableName"] = "creategrn-receive-rebuilt";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive-rebuilt"
));

$proto11["m_sql"] = "Description";
$proto11["m_srcTableName"] = "creategrn-receive-rebuilt";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive-rebuilt"
));

$proto13["m_sql"] = "Supplier";
$proto13["m_srcTableName"] = "creategrn-receive-rebuilt";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive-rebuilt"
));

$proto15["m_sql"] = "Quantity";
$proto15["m_srcTableName"] = "creategrn-receive-rebuilt";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive-rebuilt"
));

$proto17["m_sql"] = "RemovedFrom";
$proto17["m_srcTableName"] = "creategrn-receive-rebuilt";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive-rebuilt"
));

$proto19["m_sql"] = "SystemDate";
$proto19["m_srcTableName"] = "creategrn-receive-rebuilt";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive-rebuilt"
));

$proto21["m_sql"] = "GRNDate";
$proto21["m_srcTableName"] = "creategrn-receive-rebuilt";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive-rebuilt"
));

$proto23["m_sql"] = "EnteredBy";
$proto23["m_srcTableName"] = "creategrn-receive-rebuilt";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive-rebuilt"
));

$proto25["m_sql"] = "ApprovedBy";
$proto25["m_srcTableName"] = "creategrn-receive-rebuilt";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive-rebuilt"
));

$proto27["m_sql"] = "UnitPrice";
$proto27["m_srcTableName"] = "creategrn-receive-rebuilt";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive-rebuilt"
));

$proto29["m_sql"] = "Status";
$proto29["m_srcTableName"] = "creategrn-receive-rebuilt";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive-rebuilt"
));

$proto31["m_sql"] = "RefNumber";
$proto31["m_srcTableName"] = "creategrn-receive-rebuilt";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "UnitPrice*Quantity"
));

$proto33["m_sql"] = "UnitPrice*Quantity";
$proto33["m_srcTableName"] = "creategrn-receive-rebuilt";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "Cost";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "CurrentStock",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive-rebuilt"
));

$proto35["m_sql"] = "CurrentStock";
$proto35["m_srcTableName"] = "creategrn-receive-rebuilt";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-receive-rebuilt"
));

$proto37["m_sql"] = "Fleet";
$proto37["m_srcTableName"] = "creategrn-receive-rebuilt";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto39=array();
$proto39["m_link"] = "SQLL_MAIN";
			$proto40=array();
$proto40["m_strName"] = "creategrn";
$proto40["m_srcTableName"] = "creategrn-receive-rebuilt";
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
$proto40["m_columns"][] = "PriceLink";
$proto40["m_columns"][] = "Cost";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "creategrn";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "creategrn-receive-rebuilt";
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
$proto0["m_srcTableName"]="creategrn-receive-rebuilt";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_creategrn_receive_rebuilt = createSqlQuery_creategrn_receive_rebuilt();


	
																	
	
$tdatacreategrn_receive_rebuilt[".sqlquery"] = $queryData_creategrn_receive_rebuilt;

include_once(getabspath("include/creategrn_receive_rebuilt_events.php"));
$tableEvents["creategrn-receive-rebuilt"] = new eventclass_creategrn_receive_rebuilt;
$tdatacreategrn_receive_rebuilt[".hasEvents"] = true;

?>