<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacreategrn_issue = array();
	$tdatacreategrn_issue[".truncateText"] = true;
	$tdatacreategrn_issue[".NumberOfChars"] = 80;
	$tdatacreategrn_issue[".ShortName"] = "creategrn_issue";
	$tdatacreategrn_issue[".OwnerID"] = "";
	$tdatacreategrn_issue[".OriginalTable"] = "creategrn";

//	field labels
$fieldLabelscreategrn_issue = array();
$fieldToolTipscreategrn_issue = array();
$pageTitlescreategrn_issue = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscreategrn_issue["English"] = array();
	$fieldToolTipscreategrn_issue["English"] = array();
	$pageTitlescreategrn_issue["English"] = array();
	$fieldLabelscreategrn_issue["English"]["ItemCode"] = "Item Code";
	$fieldToolTipscreategrn_issue["English"]["ItemCode"] = "";
	$fieldLabelscreategrn_issue["English"]["Brand"] = "Brand";
	$fieldToolTipscreategrn_issue["English"]["Brand"] = "";
	$fieldLabelscreategrn_issue["English"]["Description"] = "Descr.";
	$fieldToolTipscreategrn_issue["English"]["Description"] = "";
	$fieldLabelscreategrn_issue["English"]["Supplier"] = "Supplier";
	$fieldToolTipscreategrn_issue["English"]["Supplier"] = "";
	$fieldLabelscreategrn_issue["English"]["Quantity"] = "Qty";
	$fieldToolTipscreategrn_issue["English"]["Quantity"] = "";
	$fieldLabelscreategrn_issue["English"]["RemovedFrom"] = "Vehicle";
	$fieldToolTipscreategrn_issue["English"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_issue["English"]["SystemDate"] = "Sys. Date";
	$fieldToolTipscreategrn_issue["English"]["SystemDate"] = "";
	$fieldLabelscreategrn_issue["English"]["EnteredBy"] = "Entered";
	$fieldToolTipscreategrn_issue["English"]["EnteredBy"] = "";
	$fieldLabelscreategrn_issue["English"]["ApprovedBy"] = "Edited By";
	$fieldToolTipscreategrn_issue["English"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_issue["English"]["Status"] = "Type";
	$fieldToolTipscreategrn_issue["English"]["Status"] = "";
	$fieldLabelscreategrn_issue["English"]["ID"] = "ID";
	$fieldToolTipscreategrn_issue["English"]["ID"] = "";
	$fieldLabelscreategrn_issue["English"]["RefNumber"] = "Ref No.";
	$fieldToolTipscreategrn_issue["English"]["RefNumber"] = "";
	$fieldLabelscreategrn_issue["English"]["Cost"] = "Cost";
	$fieldToolTipscreategrn_issue["English"]["Cost"] = "Cost without Tax";
	$fieldLabelscreategrn_issue["English"]["Fleet"] = "Fleet";
	$fieldToolTipscreategrn_issue["English"]["Fleet"] = "";
	$fieldLabelscreategrn_issue["English"]["GRNDate"] = "Date";
	$fieldToolTipscreategrn_issue["English"]["GRNDate"] = "";
	$fieldLabelscreategrn_issue["English"]["UnitPrice"] = "Rate";
	$fieldToolTipscreategrn_issue["English"]["UnitPrice"] = "Price without Tax";
	$fieldLabelscreategrn_issue["English"]["CurrentStock"] = "In-Stock";
	$fieldToolTipscreategrn_issue["English"]["CurrentStock"] = "";
	$fieldLabelscreategrn_issue["English"]["PriceLink"] = "Cost Code";
	$fieldToolTipscreategrn_issue["English"]["PriceLink"] = "Select the same as \"Item Code\"";
	$fieldLabelscreategrn_issue["English"]["Remarks"] = "Remarks";
	$fieldToolTipscreategrn_issue["English"]["Remarks"] = "";
	if (count($fieldToolTipscreategrn_issue["English"]))
		$tdatacreategrn_issue[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscreategrn_issue[""] = array();
	$fieldToolTipscreategrn_issue[""] = array();
	$pageTitlescreategrn_issue[""] = array();
	if (count($fieldToolTipscreategrn_issue[""]))
		$tdatacreategrn_issue[".isUseToolTips"] = true;
}


	$tdatacreategrn_issue[".NCSearch"] = true;



$tdatacreategrn_issue[".shortTableName"] = "creategrn_issue";
$tdatacreategrn_issue[".nSecOptions"] = 0;
$tdatacreategrn_issue[".recsPerRowPrint"] = 1;
$tdatacreategrn_issue[".mainTableOwnerID"] = "";
$tdatacreategrn_issue[".moveNext"] = 1;
$tdatacreategrn_issue[".entityType"] = 1;

$tdatacreategrn_issue[".strOriginalTableName"] = "creategrn";

		 



$tdatacreategrn_issue[".showAddInPopup"] = false;

$tdatacreategrn_issue[".showEditInPopup"] = false;

$tdatacreategrn_issue[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacreategrn_issue[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacreategrn_issue[".fieldsForRegister"] = array();

	$tdatacreategrn_issue[".listAjax"] = true;

	$tdatacreategrn_issue[".audit"] = false;

	$tdatacreategrn_issue[".locking"] = false;

$tdatacreategrn_issue[".edit"] = true;
$tdatacreategrn_issue[".afterEditAction"] = 1;
$tdatacreategrn_issue[".closePopupAfterEdit"] = 1;
$tdatacreategrn_issue[".afterEditActionDetTable"] = "Detail tables not found!";

$tdatacreategrn_issue[".add"] = true;
$tdatacreategrn_issue[".afterAddAction"] = 1;
$tdatacreategrn_issue[".closePopupAfterAdd"] = 1;
$tdatacreategrn_issue[".afterAddActionDetTable"] = "Detail tables not found!";

$tdatacreategrn_issue[".list"] = true;

$tdatacreategrn_issue[".view"] = true;

$tdatacreategrn_issue[".import"] = true;

$tdatacreategrn_issue[".exportTo"] = true;

$tdatacreategrn_issue[".printFriendly"] = true;

$tdatacreategrn_issue[".delete"] = true;

$tdatacreategrn_issue[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacreategrn_issue[".searchSaving"] = false;
//

$tdatacreategrn_issue[".showSearchPanel"] = true;
		$tdatacreategrn_issue[".flexibleSearch"] = true;

$tdatacreategrn_issue[".isUseAjaxSuggest"] = true;

$tdatacreategrn_issue[".rowHighlite"] = true;



$tdatacreategrn_issue[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacreategrn_issue[".isUseTimeForSearch"] = false;



$tdatacreategrn_issue[".badgeColor"] = "5F9EA0";


$tdatacreategrn_issue[".allSearchFields"] = array();
$tdatacreategrn_issue[".filterFields"] = array();
$tdatacreategrn_issue[".requiredSearchFields"] = array();

$tdatacreategrn_issue[".allSearchFields"][] = "Status";
	$tdatacreategrn_issue[".allSearchFields"][] = "Fleet";
	$tdatacreategrn_issue[".allSearchFields"][] = "RemovedFrom";
	$tdatacreategrn_issue[".allSearchFields"][] = "GRNDate";
	$tdatacreategrn_issue[".allSearchFields"][] = "ItemCode";
	$tdatacreategrn_issue[".allSearchFields"][] = "Remarks";
	$tdatacreategrn_issue[".allSearchFields"][] = "Quantity";
	$tdatacreategrn_issue[".allSearchFields"][] = "PriceLink";
	$tdatacreategrn_issue[".allSearchFields"][] = "Brand";
	$tdatacreategrn_issue[".allSearchFields"][] = "Description";
	$tdatacreategrn_issue[".allSearchFields"][] = "Supplier";
	$tdatacreategrn_issue[".allSearchFields"][] = "UnitPrice";
	$tdatacreategrn_issue[".allSearchFields"][] = "Cost";
	$tdatacreategrn_issue[".allSearchFields"][] = "EnteredBy";
	$tdatacreategrn_issue[".allSearchFields"][] = "CurrentStock";
	$tdatacreategrn_issue[".allSearchFields"][] = "SystemDate";
	

$tdatacreategrn_issue[".googleLikeFields"] = array();
$tdatacreategrn_issue[".googleLikeFields"][] = "ID";
$tdatacreategrn_issue[".googleLikeFields"][] = "ItemCode";
$tdatacreategrn_issue[".googleLikeFields"][] = "Brand";
$tdatacreategrn_issue[".googleLikeFields"][] = "Description";
$tdatacreategrn_issue[".googleLikeFields"][] = "Supplier";
$tdatacreategrn_issue[".googleLikeFields"][] = "Quantity";
$tdatacreategrn_issue[".googleLikeFields"][] = "RemovedFrom";
$tdatacreategrn_issue[".googleLikeFields"][] = "SystemDate";
$tdatacreategrn_issue[".googleLikeFields"][] = "GRNDate";
$tdatacreategrn_issue[".googleLikeFields"][] = "EnteredBy";
$tdatacreategrn_issue[".googleLikeFields"][] = "ApprovedBy";
$tdatacreategrn_issue[".googleLikeFields"][] = "UnitPrice";
$tdatacreategrn_issue[".googleLikeFields"][] = "Status";
$tdatacreategrn_issue[".googleLikeFields"][] = "RefNumber";
$tdatacreategrn_issue[".googleLikeFields"][] = "CurrentStock";
$tdatacreategrn_issue[".googleLikeFields"][] = "Fleet";
$tdatacreategrn_issue[".googleLikeFields"][] = "PriceLink";
$tdatacreategrn_issue[".googleLikeFields"][] = "Cost";
$tdatacreategrn_issue[".googleLikeFields"][] = "Remarks";


$tdatacreategrn_issue[".advSearchFields"] = array();
$tdatacreategrn_issue[".advSearchFields"][] = "Status";
$tdatacreategrn_issue[".advSearchFields"][] = "Fleet";
$tdatacreategrn_issue[".advSearchFields"][] = "RemovedFrom";
$tdatacreategrn_issue[".advSearchFields"][] = "GRNDate";
$tdatacreategrn_issue[".advSearchFields"][] = "ItemCode";
$tdatacreategrn_issue[".advSearchFields"][] = "Remarks";
$tdatacreategrn_issue[".advSearchFields"][] = "Quantity";
$tdatacreategrn_issue[".advSearchFields"][] = "PriceLink";
$tdatacreategrn_issue[".advSearchFields"][] = "Brand";
$tdatacreategrn_issue[".advSearchFields"][] = "Description";
$tdatacreategrn_issue[".advSearchFields"][] = "Supplier";
$tdatacreategrn_issue[".advSearchFields"][] = "UnitPrice";
$tdatacreategrn_issue[".advSearchFields"][] = "Cost";
$tdatacreategrn_issue[".advSearchFields"][] = "EnteredBy";
$tdatacreategrn_issue[".advSearchFields"][] = "CurrentStock";
$tdatacreategrn_issue[".advSearchFields"][] = "SystemDate";

$tdatacreategrn_issue[".tableType"] = "list";

$tdatacreategrn_issue[".printerPageOrientation"] = 0;
$tdatacreategrn_issue[".nPrinterPageScale"] = 100;

$tdatacreategrn_issue[".nPrinterSplitRecords"] = 40;

$tdatacreategrn_issue[".nPrinterPDFSplitRecords"] = 40;



$tdatacreategrn_issue[".geocodingEnabled"] = false;





$tdatacreategrn_issue[".listGridLayout"] = 3;





// view page pdf
$tdatacreategrn_issue[".isViewPagePDF"] = true;
$tdatacreategrn_issue[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatacreategrn_issue[".isPrinterPagePDF"] = true;
$tdatacreategrn_issue[".nPrinterPagePDFScale"] = 100;

$tdatacreategrn_issue[".totalsFields"] = array();
$tdatacreategrn_issue[".totalsFields"][] = array(
	"fName" => "Cost",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatacreategrn_issue[".pageSize"] = 20;

$tdatacreategrn_issue[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY CurrentStock DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacreategrn_issue[".strOrderBy"] = $tstrOrderBy;

$tdatacreategrn_issue[".orderindexes"] = array();
$tdatacreategrn_issue[".orderindexes"][] = array(15, (0 ? "ASC" : "DESC"), "CurrentStock");

$tdatacreategrn_issue[".sqlHead"] = "SELECT ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  SUM(CurrentStock) AS CurrentStock,  Fleet,  PriceLink,  Quantity*UnitPrice*-1 AS Cost,  Remarks";
$tdatacreategrn_issue[".sqlFrom"] = "FROM creategrn";
$tdatacreategrn_issue[".sqlWhereExpr"] = "(Status =\"Issue\")";
$tdatacreategrn_issue[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatacreategrn_issue[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacreategrn_issue[".arrGroupsPerPage"] = $arrGPP;

$tdatacreategrn_issue[".highlightSearchResults"] = true;

$tableKeyscreategrn_issue = array();
$tableKeyscreategrn_issue[] = "ID";
$tdatacreategrn_issue[".Keys"] = $tableKeyscreategrn_issue;

$tdatacreategrn_issue[".listFields"] = array();
$tdatacreategrn_issue[".listFields"][] = "ID";
$tdatacreategrn_issue[".listFields"][] = "Status";
$tdatacreategrn_issue[".listFields"][] = "Fleet";
$tdatacreategrn_issue[".listFields"][] = "RemovedFrom";
$tdatacreategrn_issue[".listFields"][] = "GRNDate";
$tdatacreategrn_issue[".listFields"][] = "ItemCode";
$tdatacreategrn_issue[".listFields"][] = "Remarks";
$tdatacreategrn_issue[".listFields"][] = "Brand";
$tdatacreategrn_issue[".listFields"][] = "Description";
$tdatacreategrn_issue[".listFields"][] = "Supplier";
$tdatacreategrn_issue[".listFields"][] = "Quantity";
$tdatacreategrn_issue[".listFields"][] = "UnitPrice";
$tdatacreategrn_issue[".listFields"][] = "Cost";
$tdatacreategrn_issue[".listFields"][] = "EnteredBy";

$tdatacreategrn_issue[".hideMobileList"] = array();


$tdatacreategrn_issue[".viewFields"] = array();
$tdatacreategrn_issue[".viewFields"][] = "ID";
$tdatacreategrn_issue[".viewFields"][] = "Status";
$tdatacreategrn_issue[".viewFields"][] = "Fleet";
$tdatacreategrn_issue[".viewFields"][] = "RemovedFrom";
$tdatacreategrn_issue[".viewFields"][] = "GRNDate";
$tdatacreategrn_issue[".viewFields"][] = "ItemCode";
$tdatacreategrn_issue[".viewFields"][] = "Remarks";
$tdatacreategrn_issue[".viewFields"][] = "CurrentStock";
$tdatacreategrn_issue[".viewFields"][] = "Quantity";
$tdatacreategrn_issue[".viewFields"][] = "Brand";
$tdatacreategrn_issue[".viewFields"][] = "Description";
$tdatacreategrn_issue[".viewFields"][] = "Supplier";
$tdatacreategrn_issue[".viewFields"][] = "UnitPrice";
$tdatacreategrn_issue[".viewFields"][] = "Cost";
$tdatacreategrn_issue[".viewFields"][] = "SystemDate";
$tdatacreategrn_issue[".viewFields"][] = "EnteredBy";
$tdatacreategrn_issue[".viewFields"][] = "ApprovedBy";

$tdatacreategrn_issue[".addFields"] = array();
$tdatacreategrn_issue[".addFields"][] = "Status";
$tdatacreategrn_issue[".addFields"][] = "Fleet";
$tdatacreategrn_issue[".addFields"][] = "RemovedFrom";
$tdatacreategrn_issue[".addFields"][] = "GRNDate";
$tdatacreategrn_issue[".addFields"][] = "ItemCode";
$tdatacreategrn_issue[".addFields"][] = "Remarks";
$tdatacreategrn_issue[".addFields"][] = "Quantity";
$tdatacreategrn_issue[".addFields"][] = "PriceLink";
$tdatacreategrn_issue[".addFields"][] = "Brand";
$tdatacreategrn_issue[".addFields"][] = "Description";
$tdatacreategrn_issue[".addFields"][] = "Supplier";
$tdatacreategrn_issue[".addFields"][] = "UnitPrice";
$tdatacreategrn_issue[".addFields"][] = "Cost";
$tdatacreategrn_issue[".addFields"][] = "EnteredBy";
$tdatacreategrn_issue[".addFields"][] = "CurrentStock";
$tdatacreategrn_issue[".addFields"][] = "SystemDate";

$tdatacreategrn_issue[".masterListFields"] = array();
$tdatacreategrn_issue[".masterListFields"][] = "Remarks";
$tdatacreategrn_issue[".masterListFields"][] = "ID";
$tdatacreategrn_issue[".masterListFields"][] = "Status";
$tdatacreategrn_issue[".masterListFields"][] = "Fleet";
$tdatacreategrn_issue[".masterListFields"][] = "RemovedFrom";
$tdatacreategrn_issue[".masterListFields"][] = "GRNDate";
$tdatacreategrn_issue[".masterListFields"][] = "RefNumber";
$tdatacreategrn_issue[".masterListFields"][] = "ItemCode";
$tdatacreategrn_issue[".masterListFields"][] = "Quantity";
$tdatacreategrn_issue[".masterListFields"][] = "PriceLink";
$tdatacreategrn_issue[".masterListFields"][] = "Brand";
$tdatacreategrn_issue[".masterListFields"][] = "Description";
$tdatacreategrn_issue[".masterListFields"][] = "Supplier";
$tdatacreategrn_issue[".masterListFields"][] = "UnitPrice";
$tdatacreategrn_issue[".masterListFields"][] = "ApprovedBy";
$tdatacreategrn_issue[".masterListFields"][] = "Cost";
$tdatacreategrn_issue[".masterListFields"][] = "EnteredBy";
$tdatacreategrn_issue[".masterListFields"][] = "CurrentStock";
$tdatacreategrn_issue[".masterListFields"][] = "SystemDate";

$tdatacreategrn_issue[".inlineAddFields"] = array();

$tdatacreategrn_issue[".editFields"] = array();
$tdatacreategrn_issue[".editFields"][] = "Status";
$tdatacreategrn_issue[".editFields"][] = "Fleet";
$tdatacreategrn_issue[".editFields"][] = "RemovedFrom";
$tdatacreategrn_issue[".editFields"][] = "GRNDate";
$tdatacreategrn_issue[".editFields"][] = "ItemCode";
$tdatacreategrn_issue[".editFields"][] = "Remarks";
$tdatacreategrn_issue[".editFields"][] = "Quantity";
$tdatacreategrn_issue[".editFields"][] = "PriceLink";
$tdatacreategrn_issue[".editFields"][] = "Brand";
$tdatacreategrn_issue[".editFields"][] = "Description";
$tdatacreategrn_issue[".editFields"][] = "Supplier";
$tdatacreategrn_issue[".editFields"][] = "UnitPrice";
$tdatacreategrn_issue[".editFields"][] = "Cost";
$tdatacreategrn_issue[".editFields"][] = "CurrentStock";
$tdatacreategrn_issue[".editFields"][] = "SystemDate";
$tdatacreategrn_issue[".editFields"][] = "EnteredBy";
$tdatacreategrn_issue[".editFields"][] = "ApprovedBy";

$tdatacreategrn_issue[".inlineEditFields"] = array();

$tdatacreategrn_issue[".exportFields"] = array();
$tdatacreategrn_issue[".exportFields"][] = "ID";
$tdatacreategrn_issue[".exportFields"][] = "Status";
$tdatacreategrn_issue[".exportFields"][] = "Fleet";
$tdatacreategrn_issue[".exportFields"][] = "RemovedFrom";
$tdatacreategrn_issue[".exportFields"][] = "GRNDate";
$tdatacreategrn_issue[".exportFields"][] = "ItemCode";
$tdatacreategrn_issue[".exportFields"][] = "Remarks";
$tdatacreategrn_issue[".exportFields"][] = "Quantity";
$tdatacreategrn_issue[".exportFields"][] = "PriceLink";
$tdatacreategrn_issue[".exportFields"][] = "Brand";
$tdatacreategrn_issue[".exportFields"][] = "Description";
$tdatacreategrn_issue[".exportFields"][] = "Supplier";
$tdatacreategrn_issue[".exportFields"][] = "UnitPrice";
$tdatacreategrn_issue[".exportFields"][] = "ApprovedBy";
$tdatacreategrn_issue[".exportFields"][] = "Cost";
$tdatacreategrn_issue[".exportFields"][] = "EnteredBy";
$tdatacreategrn_issue[".exportFields"][] = "CurrentStock";
$tdatacreategrn_issue[".exportFields"][] = "SystemDate";

$tdatacreategrn_issue[".importFields"] = array();
$tdatacreategrn_issue[".importFields"][] = "ID";
$tdatacreategrn_issue[".importFields"][] = "ItemCode";
$tdatacreategrn_issue[".importFields"][] = "Brand";
$tdatacreategrn_issue[".importFields"][] = "Description";
$tdatacreategrn_issue[".importFields"][] = "Supplier";
$tdatacreategrn_issue[".importFields"][] = "Quantity";
$tdatacreategrn_issue[".importFields"][] = "RemovedFrom";
$tdatacreategrn_issue[".importFields"][] = "SystemDate";
$tdatacreategrn_issue[".importFields"][] = "GRNDate";
$tdatacreategrn_issue[".importFields"][] = "EnteredBy";
$tdatacreategrn_issue[".importFields"][] = "ApprovedBy";
$tdatacreategrn_issue[".importFields"][] = "UnitPrice";
$tdatacreategrn_issue[".importFields"][] = "Status";
$tdatacreategrn_issue[".importFields"][] = "CurrentStock";
$tdatacreategrn_issue[".importFields"][] = "Fleet";
$tdatacreategrn_issue[".importFields"][] = "PriceLink";
$tdatacreategrn_issue[".importFields"][] = "Cost";
$tdatacreategrn_issue[".importFields"][] = "Remarks";

$tdatacreategrn_issue[".printFields"] = array();
$tdatacreategrn_issue[".printFields"][] = "ID";
$tdatacreategrn_issue[".printFields"][] = "Status";
$tdatacreategrn_issue[".printFields"][] = "Fleet";
$tdatacreategrn_issue[".printFields"][] = "RemovedFrom";
$tdatacreategrn_issue[".printFields"][] = "GRNDate";
$tdatacreategrn_issue[".printFields"][] = "ItemCode";
$tdatacreategrn_issue[".printFields"][] = "Remarks";
$tdatacreategrn_issue[".printFields"][] = "Quantity";
$tdatacreategrn_issue[".printFields"][] = "PriceLink";
$tdatacreategrn_issue[".printFields"][] = "Brand";
$tdatacreategrn_issue[".printFields"][] = "Description";
$tdatacreategrn_issue[".printFields"][] = "Supplier";
$tdatacreategrn_issue[".printFields"][] = "UnitPrice";
$tdatacreategrn_issue[".printFields"][] = "ApprovedBy";
$tdatacreategrn_issue[".printFields"][] = "Cost";
$tdatacreategrn_issue[".printFields"][] = "EnteredBy";
$tdatacreategrn_issue[".printFields"][] = "CurrentStock";
$tdatacreategrn_issue[".printFields"][] = "SystemDate";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue","ID");
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








	$tdatacreategrn_issue["ID"] = $fdata;
//	ItemCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemCode";
	$fdata["GoodName"] = "ItemCode";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue","ItemCode");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_issue["ItemCode"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue","Brand");
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




	$tdatacreategrn_issue["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue","Description");
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




	$tdatacreategrn_issue["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue","Supplier");
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




	$tdatacreategrn_issue["Supplier"] = $fdata;
//	Quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Quantity";
	$fdata["GoodName"] = "Quantity";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue","Quantity");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_issue["Quantity"] = $fdata;
//	RemovedFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RemovedFrom";
	$fdata["GoodName"] = "RemovedFrom";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue","RemovedFrom");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_issue["RemovedFrom"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue","SystemDate");
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




	$tdatacreategrn_issue["SystemDate"] = $fdata;
//	GRNDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "GRNDate";
	$fdata["GoodName"] = "GRNDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue","GRNDate");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_issue["GRNDate"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue","EnteredBy");
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




	$tdatacreategrn_issue["EnteredBy"] = $fdata;
//	ApprovedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ApprovedBy";
	$fdata["GoodName"] = "ApprovedBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue","ApprovedBy");
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








	$tdatacreategrn_issue["ApprovedBy"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue","UnitPrice");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_issue["UnitPrice"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue","Status");
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




	$tdatacreategrn_issue["Status"] = $fdata;
//	RefNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RefNumber";
	$fdata["GoodName"] = "RefNumber";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue","RefNumber");
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








	$tdatacreategrn_issue["RefNumber"] = $fdata;
//	CurrentStock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "CurrentStock";
	$fdata["GoodName"] = "CurrentStock";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("creategrn_issue","CurrentStock");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_issue["CurrentStock"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue","Fleet");
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




	$tdatacreategrn_issue["Fleet"] = $fdata;
//	PriceLink
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "PriceLink";
	$fdata["GoodName"] = "PriceLink";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue","PriceLink");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_issue["PriceLink"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("creategrn_issue","Cost");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_issue["Cost"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue","Remarks");
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




	$tdatacreategrn_issue["Remarks"] = $fdata;


$tables_data["creategrn-issue"]=&$tdatacreategrn_issue;
$field_labels["creategrn_issue"] = &$fieldLabelscreategrn_issue;
$fieldToolTips["creategrn_issue"] = &$fieldToolTipscreategrn_issue;
$page_titles["creategrn_issue"] = &$pageTitlescreategrn_issue;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["creategrn-issue"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["creategrn-issue"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_creategrn_issue()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  SUM(CurrentStock) AS CurrentStock,  Fleet,  PriceLink,  Quantity*UnitPrice*-1 AS Cost,  Remarks";
$proto0["m_strFrom"] = "FROM creategrn";
$proto0["m_strWhere"] = "(Status =\"Issue\")";
$proto0["m_strOrderBy"] = "ORDER BY CurrentStock DESC";
$proto0["m_strTail"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "Status =\"Issue\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=\"Issue\"";
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
	"m_srcTableName" => "creategrn-issue"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "creategrn-issue";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto8["m_sql"] = "ItemCode";
$proto8["m_srcTableName"] = "creategrn-issue";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto10["m_sql"] = "Brand";
$proto10["m_srcTableName"] = "creategrn-issue";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto12["m_sql"] = "Description";
$proto12["m_srcTableName"] = "creategrn-issue";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto14["m_sql"] = "Supplier";
$proto14["m_srcTableName"] = "creategrn-issue";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto16["m_sql"] = "Quantity";
$proto16["m_srcTableName"] = "creategrn-issue";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto18["m_sql"] = "RemovedFrom";
$proto18["m_srcTableName"] = "creategrn-issue";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto20["m_sql"] = "SystemDate";
$proto20["m_srcTableName"] = "creategrn-issue";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto22["m_sql"] = "GRNDate";
$proto22["m_srcTableName"] = "creategrn-issue";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto24["m_sql"] = "EnteredBy";
$proto24["m_srcTableName"] = "creategrn-issue";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto26["m_sql"] = "ApprovedBy";
$proto26["m_srcTableName"] = "creategrn-issue";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto28["m_sql"] = "UnitPrice";
$proto28["m_srcTableName"] = "creategrn-issue";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto30["m_sql"] = "Status";
$proto30["m_srcTableName"] = "creategrn-issue";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto32["m_sql"] = "RefNumber";
$proto32["m_srcTableName"] = "creategrn-issue";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$proto35=array();
$proto35["m_functiontype"] = "SQLF_SUM";
$proto35["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "CurrentStock",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto35["m_arguments"][]=$obj;
$proto35["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto35);

$proto34["m_sql"] = "SUM(CurrentStock)";
$proto34["m_srcTableName"] = "creategrn-issue";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "CurrentStock";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto37["m_sql"] = "Fleet";
$proto37["m_srcTableName"] = "creategrn-issue";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "PriceLink",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto39["m_sql"] = "PriceLink";
$proto39["m_srcTableName"] = "creategrn-issue";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "Quantity*UnitPrice*-1"
));

$proto41["m_sql"] = "Quantity*UnitPrice*-1";
$proto41["m_srcTableName"] = "creategrn-issue";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "Cost";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto43["m_sql"] = "Remarks";
$proto43["m_srcTableName"] = "creategrn-issue";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto45=array();
$proto45["m_link"] = "SQLL_MAIN";
			$proto46=array();
$proto46["m_strName"] = "creategrn";
$proto46["m_srcTableName"] = "creategrn-issue";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "ID";
$proto46["m_columns"][] = "ItemCode";
$proto46["m_columns"][] = "Brand";
$proto46["m_columns"][] = "Description";
$proto46["m_columns"][] = "Supplier";
$proto46["m_columns"][] = "Quantity";
$proto46["m_columns"][] = "RemovedFrom";
$proto46["m_columns"][] = "SystemDate";
$proto46["m_columns"][] = "GRNDate";
$proto46["m_columns"][] = "EnteredBy";
$proto46["m_columns"][] = "ApprovedBy";
$proto46["m_columns"][] = "UnitPrice";
$proto46["m_columns"][] = "Status";
$proto46["m_columns"][] = "RefNumber";
$proto46["m_columns"][] = "CurrentStock";
$proto46["m_columns"][] = "Fleet";
$proto46["m_columns"][] = "PriceLink";
$proto46["m_columns"][] = "Cost";
$proto46["m_columns"][] = "Remarks";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "creategrn";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "creategrn-issue";
$proto47=array();
$proto47["m_sql"] = "";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto49=array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto49["m_column"]=$obj;
$obj = new SQLGroupByItem($proto49);

$proto0["m_groupby"][]=$obj;
												$proto51=array();
						$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto51["m_column"]=$obj;
$obj = new SQLGroupByItem($proto51);

$proto0["m_groupby"][]=$obj;
												$proto53=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto53["m_column"]=$obj;
$obj = new SQLGroupByItem($proto53);

$proto0["m_groupby"][]=$obj;
												$proto55=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto55["m_column"]=$obj;
$obj = new SQLGroupByItem($proto55);

$proto0["m_groupby"][]=$obj;
												$proto57=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto57["m_column"]=$obj;
$obj = new SQLGroupByItem($proto57);

$proto0["m_groupby"][]=$obj;
												$proto59=array();
						$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto59["m_column"]=$obj;
$obj = new SQLGroupByItem($proto59);

$proto0["m_groupby"][]=$obj;
												$proto61=array();
						$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto61["m_column"]=$obj;
$obj = new SQLGroupByItem($proto61);

$proto0["m_groupby"][]=$obj;
												$proto63=array();
						$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto63["m_column"]=$obj;
$obj = new SQLGroupByItem($proto63);

$proto0["m_groupby"][]=$obj;
												$proto65=array();
						$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto65["m_column"]=$obj;
$obj = new SQLGroupByItem($proto65);

$proto0["m_groupby"][]=$obj;
												$proto67=array();
						$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto67["m_column"]=$obj;
$obj = new SQLGroupByItem($proto67);

$proto0["m_groupby"][]=$obj;
												$proto69=array();
						$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto69["m_column"]=$obj;
$obj = new SQLGroupByItem($proto69);

$proto0["m_groupby"][]=$obj;
												$proto71=array();
						$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto71["m_column"]=$obj;
$obj = new SQLGroupByItem($proto71);

$proto0["m_groupby"][]=$obj;
												$proto73=array();
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto73["m_column"]=$obj;
$obj = new SQLGroupByItem($proto73);

$proto0["m_groupby"][]=$obj;
												$proto75=array();
						$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto75["m_column"]=$obj;
$obj = new SQLGroupByItem($proto75);

$proto0["m_groupby"][]=$obj;
												$proto77=array();
						$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto77["m_column"]=$obj;
$obj = new SQLGroupByItem($proto77);

$proto0["m_groupby"][]=$obj;
												$proto79=array();
						$obj = new SQLField(array(
	"m_strName" => "PriceLink",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto79["m_column"]=$obj;
$obj = new SQLGroupByItem($proto79);

$proto0["m_groupby"][]=$obj;
												$proto81=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Quantity*UnitPrice*-1"
));

$proto81["m_column"]=$obj;
$obj = new SQLGroupByItem($proto81);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto83=array();
						$obj = new SQLField(array(
	"m_strName" => "CurrentStock",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue"
));

$proto83["m_column"]=$obj;
$proto83["m_bAsc"] = 0;
$proto83["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto83);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="creategrn-issue";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_creategrn_issue = createSqlQuery_creategrn_issue();


	
					
;

																			

$tdatacreategrn_issue[".sqlquery"] = $queryData_creategrn_issue;

include_once(getabspath("include/creategrn_issue_events.php"));
$tableEvents["creategrn-issue"] = new eventclass_creategrn_issue;
$tdatacreategrn_issue[".hasEvents"] = true;

?>