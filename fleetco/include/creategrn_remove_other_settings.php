<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacreategrn_remove_other = array();
	$tdatacreategrn_remove_other[".truncateText"] = true;
	$tdatacreategrn_remove_other[".NumberOfChars"] = 80;
	$tdatacreategrn_remove_other[".ShortName"] = "creategrn_remove_other";
	$tdatacreategrn_remove_other[".OwnerID"] = "";
	$tdatacreategrn_remove_other[".OriginalTable"] = "creategrn";

//	field labels
$fieldLabelscreategrn_remove_other = array();
$fieldToolTipscreategrn_remove_other = array();
$pageTitlescreategrn_remove_other = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscreategrn_remove_other["English"] = array();
	$fieldToolTipscreategrn_remove_other["English"] = array();
	$pageTitlescreategrn_remove_other["English"] = array();
	$fieldLabelscreategrn_remove_other["English"]["ItemCode"] = "Item Code";
	$fieldToolTipscreategrn_remove_other["English"]["ItemCode"] = "";
	$fieldLabelscreategrn_remove_other["English"]["Brand"] = "Brand";
	$fieldToolTipscreategrn_remove_other["English"]["Brand"] = "";
	$fieldLabelscreategrn_remove_other["English"]["Description"] = "Descr.";
	$fieldToolTipscreategrn_remove_other["English"]["Description"] = "";
	$fieldLabelscreategrn_remove_other["English"]["Supplier"] = "Supplier";
	$fieldToolTipscreategrn_remove_other["English"]["Supplier"] = "";
	$fieldLabelscreategrn_remove_other["English"]["Quantity"] = "Qty";
	$fieldToolTipscreategrn_remove_other["English"]["Quantity"] = "";
	$fieldLabelscreategrn_remove_other["English"]["RemovedFrom"] = "Vehicle";
	$fieldToolTipscreategrn_remove_other["English"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_remove_other["English"]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn_remove_other["English"]["SystemDate"] = "";
	$fieldLabelscreategrn_remove_other["English"]["GRNDate"] = "Date";
	$fieldToolTipscreategrn_remove_other["English"]["GRNDate"] = "";
	$fieldLabelscreategrn_remove_other["English"]["EnteredBy"] = "Entered";
	$fieldToolTipscreategrn_remove_other["English"]["EnteredBy"] = "";
	$fieldLabelscreategrn_remove_other["English"]["ApprovedBy"] = "Edited By";
	$fieldToolTipscreategrn_remove_other["English"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_remove_other["English"]["Status"] = "Type";
	$fieldToolTipscreategrn_remove_other["English"]["Status"] = "";
	$fieldLabelscreategrn_remove_other["English"]["ID"] = "ID";
	$fieldToolTipscreategrn_remove_other["English"]["ID"] = "";
	$fieldLabelscreategrn_remove_other["English"]["UnitPrice"] = "Unit Cost";
	$fieldToolTipscreategrn_remove_other["English"]["UnitPrice"] = "";
	$fieldLabelscreategrn_remove_other["English"]["RefNumber"] = "PO Ref.";
	$fieldToolTipscreategrn_remove_other["English"]["RefNumber"] = "";
	$fieldLabelscreategrn_remove_other["English"]["Cost"] = "Cost";
	$fieldToolTipscreategrn_remove_other["English"]["Cost"] = "";
	$fieldLabelscreategrn_remove_other["English"]["CurrentStock"] = "In-Stock";
	$fieldToolTipscreategrn_remove_other["English"]["CurrentStock"] = "";
	$fieldLabelscreategrn_remove_other["English"]["Fleet"] = "Fleet";
	$fieldToolTipscreategrn_remove_other["English"]["Fleet"] = "";
	if (count($fieldToolTipscreategrn_remove_other["English"]))
		$tdatacreategrn_remove_other[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscreategrn_remove_other[""] = array();
	$fieldToolTipscreategrn_remove_other[""] = array();
	$pageTitlescreategrn_remove_other[""] = array();
	if (count($fieldToolTipscreategrn_remove_other[""]))
		$tdatacreategrn_remove_other[".isUseToolTips"] = true;
}


	$tdatacreategrn_remove_other[".NCSearch"] = true;



$tdatacreategrn_remove_other[".shortTableName"] = "creategrn_remove_other";
$tdatacreategrn_remove_other[".nSecOptions"] = 0;
$tdatacreategrn_remove_other[".recsPerRowPrint"] = 1;
$tdatacreategrn_remove_other[".mainTableOwnerID"] = "";
$tdatacreategrn_remove_other[".moveNext"] = 1;
$tdatacreategrn_remove_other[".entityType"] = 1;

$tdatacreategrn_remove_other[".strOriginalTableName"] = "creategrn";

		 



$tdatacreategrn_remove_other[".showAddInPopup"] = false;

$tdatacreategrn_remove_other[".showEditInPopup"] = false;

$tdatacreategrn_remove_other[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacreategrn_remove_other[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacreategrn_remove_other[".fieldsForRegister"] = array();

	$tdatacreategrn_remove_other[".listAjax"] = true;

	$tdatacreategrn_remove_other[".audit"] = false;

	$tdatacreategrn_remove_other[".locking"] = false;

$tdatacreategrn_remove_other[".edit"] = true;
$tdatacreategrn_remove_other[".afterEditAction"] = 1;
$tdatacreategrn_remove_other[".closePopupAfterEdit"] = 1;
$tdatacreategrn_remove_other[".afterEditActionDetTable"] = "";

$tdatacreategrn_remove_other[".add"] = true;
$tdatacreategrn_remove_other[".afterAddAction"] = 1;
$tdatacreategrn_remove_other[".closePopupAfterAdd"] = 1;
$tdatacreategrn_remove_other[".afterAddActionDetTable"] = "Detail tables not found!";

$tdatacreategrn_remove_other[".list"] = true;

$tdatacreategrn_remove_other[".view"] = true;

$tdatacreategrn_remove_other[".import"] = true;

$tdatacreategrn_remove_other[".exportTo"] = true;

$tdatacreategrn_remove_other[".printFriendly"] = true;

$tdatacreategrn_remove_other[".delete"] = true;

$tdatacreategrn_remove_other[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacreategrn_remove_other[".searchSaving"] = false;
//

$tdatacreategrn_remove_other[".showSearchPanel"] = true;
		$tdatacreategrn_remove_other[".flexibleSearch"] = true;

$tdatacreategrn_remove_other[".isUseAjaxSuggest"] = true;

$tdatacreategrn_remove_other[".rowHighlite"] = true;



$tdatacreategrn_remove_other[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacreategrn_remove_other[".isUseTimeForSearch"] = false;





$tdatacreategrn_remove_other[".allSearchFields"] = array();
$tdatacreategrn_remove_other[".filterFields"] = array();
$tdatacreategrn_remove_other[".requiredSearchFields"] = array();

$tdatacreategrn_remove_other[".allSearchFields"][] = "Status";
	$tdatacreategrn_remove_other[".allSearchFields"][] = "Fleet";
	$tdatacreategrn_remove_other[".allSearchFields"][] = "GRNDate";
	$tdatacreategrn_remove_other[".allSearchFields"][] = "RemovedFrom";
	$tdatacreategrn_remove_other[".allSearchFields"][] = "ItemCode";
	$tdatacreategrn_remove_other[".allSearchFields"][] = "Brand";
	$tdatacreategrn_remove_other[".allSearchFields"][] = "Description";
	$tdatacreategrn_remove_other[".allSearchFields"][] = "Supplier";
	$tdatacreategrn_remove_other[".allSearchFields"][] = "UnitPrice";
	$tdatacreategrn_remove_other[".allSearchFields"][] = "Quantity";
	$tdatacreategrn_remove_other[".allSearchFields"][] = "SystemDate";
	$tdatacreategrn_remove_other[".allSearchFields"][] = "Cost";
	$tdatacreategrn_remove_other[".allSearchFields"][] = "EnteredBy";
	

$tdatacreategrn_remove_other[".googleLikeFields"] = array();
$tdatacreategrn_remove_other[".googleLikeFields"][] = "ID";
$tdatacreategrn_remove_other[".googleLikeFields"][] = "ItemCode";
$tdatacreategrn_remove_other[".googleLikeFields"][] = "Brand";
$tdatacreategrn_remove_other[".googleLikeFields"][] = "Description";
$tdatacreategrn_remove_other[".googleLikeFields"][] = "Supplier";
$tdatacreategrn_remove_other[".googleLikeFields"][] = "Quantity";
$tdatacreategrn_remove_other[".googleLikeFields"][] = "RemovedFrom";
$tdatacreategrn_remove_other[".googleLikeFields"][] = "SystemDate";
$tdatacreategrn_remove_other[".googleLikeFields"][] = "GRNDate";
$tdatacreategrn_remove_other[".googleLikeFields"][] = "EnteredBy";
$tdatacreategrn_remove_other[".googleLikeFields"][] = "ApprovedBy";
$tdatacreategrn_remove_other[".googleLikeFields"][] = "UnitPrice";
$tdatacreategrn_remove_other[".googleLikeFields"][] = "Status";
$tdatacreategrn_remove_other[".googleLikeFields"][] = "RefNumber";
$tdatacreategrn_remove_other[".googleLikeFields"][] = "CurrentStock";
$tdatacreategrn_remove_other[".googleLikeFields"][] = "Fleet";
$tdatacreategrn_remove_other[".googleLikeFields"][] = "Cost";


$tdatacreategrn_remove_other[".advSearchFields"] = array();
$tdatacreategrn_remove_other[".advSearchFields"][] = "Status";
$tdatacreategrn_remove_other[".advSearchFields"][] = "Fleet";
$tdatacreategrn_remove_other[".advSearchFields"][] = "GRNDate";
$tdatacreategrn_remove_other[".advSearchFields"][] = "RemovedFrom";
$tdatacreategrn_remove_other[".advSearchFields"][] = "ItemCode";
$tdatacreategrn_remove_other[".advSearchFields"][] = "Brand";
$tdatacreategrn_remove_other[".advSearchFields"][] = "Description";
$tdatacreategrn_remove_other[".advSearchFields"][] = "Supplier";
$tdatacreategrn_remove_other[".advSearchFields"][] = "UnitPrice";
$tdatacreategrn_remove_other[".advSearchFields"][] = "Quantity";
$tdatacreategrn_remove_other[".advSearchFields"][] = "SystemDate";
$tdatacreategrn_remove_other[".advSearchFields"][] = "Cost";
$tdatacreategrn_remove_other[".advSearchFields"][] = "EnteredBy";

$tdatacreategrn_remove_other[".tableType"] = "list";

$tdatacreategrn_remove_other[".printerPageOrientation"] = 0;
$tdatacreategrn_remove_other[".nPrinterPageScale"] = 100;

$tdatacreategrn_remove_other[".nPrinterSplitRecords"] = 40;

$tdatacreategrn_remove_other[".nPrinterPDFSplitRecords"] = 40;



$tdatacreategrn_remove_other[".geocodingEnabled"] = false;





$tdatacreategrn_remove_other[".listGridLayout"] = 3;





// view page pdf
$tdatacreategrn_remove_other[".isViewPagePDF"] = true;
$tdatacreategrn_remove_other[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatacreategrn_remove_other[".isPrinterPagePDF"] = true;
$tdatacreategrn_remove_other[".nPrinterPagePDFScale"] = 100;

$tdatacreategrn_remove_other[".totalsFields"] = array();
$tdatacreategrn_remove_other[".totalsFields"][] = array(
	"fName" => "Cost",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatacreategrn_remove_other[".pageSize"] = 20;

$tdatacreategrn_remove_other[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacreategrn_remove_other[".strOrderBy"] = $tstrOrderBy;

$tdatacreategrn_remove_other[".orderindexes"] = array();

$tdatacreategrn_remove_other[".sqlHead"] = "SELECT ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  CurrentStock,  Fleet,  Cost";
$tdatacreategrn_remove_other[".sqlFrom"] = "FROM creategrn";
$tdatacreategrn_remove_other[".sqlWhereExpr"] = "Status =\"Removal\"";
$tdatacreategrn_remove_other[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatacreategrn_remove_other[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacreategrn_remove_other[".arrGroupsPerPage"] = $arrGPP;

$tdatacreategrn_remove_other[".highlightSearchResults"] = true;

$tableKeyscreategrn_remove_other = array();
$tableKeyscreategrn_remove_other[] = "ID";
$tdatacreategrn_remove_other[".Keys"] = $tableKeyscreategrn_remove_other;

$tdatacreategrn_remove_other[".listFields"] = array();
$tdatacreategrn_remove_other[".listFields"][] = "ID";
$tdatacreategrn_remove_other[".listFields"][] = "Status";
$tdatacreategrn_remove_other[".listFields"][] = "Fleet";
$tdatacreategrn_remove_other[".listFields"][] = "RemovedFrom";
$tdatacreategrn_remove_other[".listFields"][] = "GRNDate";
$tdatacreategrn_remove_other[".listFields"][] = "ItemCode";
$tdatacreategrn_remove_other[".listFields"][] = "Brand";
$tdatacreategrn_remove_other[".listFields"][] = "Description";
$tdatacreategrn_remove_other[".listFields"][] = "Supplier";
$tdatacreategrn_remove_other[".listFields"][] = "UnitPrice";
$tdatacreategrn_remove_other[".listFields"][] = "Quantity";
$tdatacreategrn_remove_other[".listFields"][] = "Cost";
$tdatacreategrn_remove_other[".listFields"][] = "EnteredBy";

$tdatacreategrn_remove_other[".hideMobileList"] = array();


$tdatacreategrn_remove_other[".viewFields"] = array();
$tdatacreategrn_remove_other[".viewFields"][] = "ID";
$tdatacreategrn_remove_other[".viewFields"][] = "Status";
$tdatacreategrn_remove_other[".viewFields"][] = "Fleet";
$tdatacreategrn_remove_other[".viewFields"][] = "GRNDate";
$tdatacreategrn_remove_other[".viewFields"][] = "ItemCode";
$tdatacreategrn_remove_other[".viewFields"][] = "RemovedFrom";
$tdatacreategrn_remove_other[".viewFields"][] = "Brand";
$tdatacreategrn_remove_other[".viewFields"][] = "Description";
$tdatacreategrn_remove_other[".viewFields"][] = "Supplier";
$tdatacreategrn_remove_other[".viewFields"][] = "UnitPrice";
$tdatacreategrn_remove_other[".viewFields"][] = "Quantity";
$tdatacreategrn_remove_other[".viewFields"][] = "SystemDate";
$tdatacreategrn_remove_other[".viewFields"][] = "Cost";
$tdatacreategrn_remove_other[".viewFields"][] = "EnteredBy";
$tdatacreategrn_remove_other[".viewFields"][] = "ApprovedBy";

$tdatacreategrn_remove_other[".addFields"] = array();
$tdatacreategrn_remove_other[".addFields"][] = "Status";
$tdatacreategrn_remove_other[".addFields"][] = "Fleet";
$tdatacreategrn_remove_other[".addFields"][] = "RemovedFrom";
$tdatacreategrn_remove_other[".addFields"][] = "GRNDate";
$tdatacreategrn_remove_other[".addFields"][] = "ItemCode";
$tdatacreategrn_remove_other[".addFields"][] = "Quantity";
$tdatacreategrn_remove_other[".addFields"][] = "Brand";
$tdatacreategrn_remove_other[".addFields"][] = "Description";
$tdatacreategrn_remove_other[".addFields"][] = "Supplier";
$tdatacreategrn_remove_other[".addFields"][] = "UnitPrice";
$tdatacreategrn_remove_other[".addFields"][] = "SystemDate";
$tdatacreategrn_remove_other[".addFields"][] = "Cost";
$tdatacreategrn_remove_other[".addFields"][] = "EnteredBy";

$tdatacreategrn_remove_other[".masterListFields"] = array();
$tdatacreategrn_remove_other[".masterListFields"][] = "Status";
$tdatacreategrn_remove_other[".masterListFields"][] = "ID";
$tdatacreategrn_remove_other[".masterListFields"][] = "Fleet";
$tdatacreategrn_remove_other[".masterListFields"][] = "GRNDate";
$tdatacreategrn_remove_other[".masterListFields"][] = "RemovedFrom";
$tdatacreategrn_remove_other[".masterListFields"][] = "ItemCode";
$tdatacreategrn_remove_other[".masterListFields"][] = "Brand";
$tdatacreategrn_remove_other[".masterListFields"][] = "Description";
$tdatacreategrn_remove_other[".masterListFields"][] = "Supplier";
$tdatacreategrn_remove_other[".masterListFields"][] = "UnitPrice";
$tdatacreategrn_remove_other[".masterListFields"][] = "Quantity";
$tdatacreategrn_remove_other[".masterListFields"][] = "RefNumber";
$tdatacreategrn_remove_other[".masterListFields"][] = "SystemDate";
$tdatacreategrn_remove_other[".masterListFields"][] = "Cost";
$tdatacreategrn_remove_other[".masterListFields"][] = "CurrentStock";
$tdatacreategrn_remove_other[".masterListFields"][] = "EnteredBy";
$tdatacreategrn_remove_other[".masterListFields"][] = "ApprovedBy";

$tdatacreategrn_remove_other[".inlineAddFields"] = array();

$tdatacreategrn_remove_other[".editFields"] = array();
$tdatacreategrn_remove_other[".editFields"][] = "Status";
$tdatacreategrn_remove_other[".editFields"][] = "Fleet";
$tdatacreategrn_remove_other[".editFields"][] = "GRNDate";
$tdatacreategrn_remove_other[".editFields"][] = "ItemCode";
$tdatacreategrn_remove_other[".editFields"][] = "Quantity";
$tdatacreategrn_remove_other[".editFields"][] = "RemovedFrom";
$tdatacreategrn_remove_other[".editFields"][] = "Brand";
$tdatacreategrn_remove_other[".editFields"][] = "Description";
$tdatacreategrn_remove_other[".editFields"][] = "Supplier";
$tdatacreategrn_remove_other[".editFields"][] = "UnitPrice";
$tdatacreategrn_remove_other[".editFields"][] = "SystemDate";
$tdatacreategrn_remove_other[".editFields"][] = "Cost";
$tdatacreategrn_remove_other[".editFields"][] = "EnteredBy";
$tdatacreategrn_remove_other[".editFields"][] = "ApprovedBy";

$tdatacreategrn_remove_other[".inlineEditFields"] = array();

$tdatacreategrn_remove_other[".exportFields"] = array();
$tdatacreategrn_remove_other[".exportFields"][] = "Status";
$tdatacreategrn_remove_other[".exportFields"][] = "ID";
$tdatacreategrn_remove_other[".exportFields"][] = "Fleet";
$tdatacreategrn_remove_other[".exportFields"][] = "GRNDate";
$tdatacreategrn_remove_other[".exportFields"][] = "ItemCode";
$tdatacreategrn_remove_other[".exportFields"][] = "RemovedFrom";
$tdatacreategrn_remove_other[".exportFields"][] = "Brand";
$tdatacreategrn_remove_other[".exportFields"][] = "Description";
$tdatacreategrn_remove_other[".exportFields"][] = "Supplier";
$tdatacreategrn_remove_other[".exportFields"][] = "UnitPrice";
$tdatacreategrn_remove_other[".exportFields"][] = "Quantity";
$tdatacreategrn_remove_other[".exportFields"][] = "SystemDate";
$tdatacreategrn_remove_other[".exportFields"][] = "Cost";
$tdatacreategrn_remove_other[".exportFields"][] = "EnteredBy";
$tdatacreategrn_remove_other[".exportFields"][] = "ApprovedBy";

$tdatacreategrn_remove_other[".importFields"] = array();
$tdatacreategrn_remove_other[".importFields"][] = "ID";
$tdatacreategrn_remove_other[".importFields"][] = "ItemCode";
$tdatacreategrn_remove_other[".importFields"][] = "Brand";
$tdatacreategrn_remove_other[".importFields"][] = "Description";
$tdatacreategrn_remove_other[".importFields"][] = "Supplier";
$tdatacreategrn_remove_other[".importFields"][] = "Quantity";
$tdatacreategrn_remove_other[".importFields"][] = "RemovedFrom";
$tdatacreategrn_remove_other[".importFields"][] = "SystemDate";
$tdatacreategrn_remove_other[".importFields"][] = "GRNDate";
$tdatacreategrn_remove_other[".importFields"][] = "EnteredBy";
$tdatacreategrn_remove_other[".importFields"][] = "ApprovedBy";
$tdatacreategrn_remove_other[".importFields"][] = "UnitPrice";
$tdatacreategrn_remove_other[".importFields"][] = "Status";
$tdatacreategrn_remove_other[".importFields"][] = "Fleet";
$tdatacreategrn_remove_other[".importFields"][] = "Cost";

$tdatacreategrn_remove_other[".printFields"] = array();
$tdatacreategrn_remove_other[".printFields"][] = "ID";
$tdatacreategrn_remove_other[".printFields"][] = "Status";
$tdatacreategrn_remove_other[".printFields"][] = "Fleet";
$tdatacreategrn_remove_other[".printFields"][] = "GRNDate";
$tdatacreategrn_remove_other[".printFields"][] = "ItemCode";
$tdatacreategrn_remove_other[".printFields"][] = "RemovedFrom";
$tdatacreategrn_remove_other[".printFields"][] = "Brand";
$tdatacreategrn_remove_other[".printFields"][] = "Description";
$tdatacreategrn_remove_other[".printFields"][] = "Supplier";
$tdatacreategrn_remove_other[".printFields"][] = "UnitPrice";
$tdatacreategrn_remove_other[".printFields"][] = "Quantity";
$tdatacreategrn_remove_other[".printFields"][] = "SystemDate";
$tdatacreategrn_remove_other[".printFields"][] = "Cost";
$tdatacreategrn_remove_other[".printFields"][] = "EnteredBy";
$tdatacreategrn_remove_other[".printFields"][] = "ApprovedBy";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove_other","ID");
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








	$tdatacreategrn_remove_other["ID"] = $fdata;
//	ItemCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemCode";
	$fdata["GoodName"] = "ItemCode";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove_other","ItemCode");
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
	$edata["LookupTable"] = "inventorymaster";
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




	$tdatacreategrn_remove_other["ItemCode"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove_other","Brand");
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




	$tdatacreategrn_remove_other["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove_other","Description");
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




	$tdatacreategrn_remove_other["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove_other","Supplier");
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




	$tdatacreategrn_remove_other["Supplier"] = $fdata;
//	Quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Quantity";
	$fdata["GoodName"] = "Quantity";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove_other","Quantity");
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




	$tdatacreategrn_remove_other["Quantity"] = $fdata;
//	RemovedFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RemovedFrom";
	$fdata["GoodName"] = "RemovedFrom";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove_other","RemovedFrom");
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




	$tdatacreategrn_remove_other["RemovedFrom"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove_other","SystemDate");
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




	$tdatacreategrn_remove_other["SystemDate"] = $fdata;
//	GRNDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "GRNDate";
	$fdata["GoodName"] = "GRNDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove_other","GRNDate");
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




	$tdatacreategrn_remove_other["GRNDate"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove_other","EnteredBy");
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




	$tdatacreategrn_remove_other["EnteredBy"] = $fdata;
//	ApprovedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ApprovedBy";
	$fdata["GoodName"] = "ApprovedBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove_other","ApprovedBy");
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








	$tdatacreategrn_remove_other["ApprovedBy"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove_other","UnitPrice");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_remove_other["UnitPrice"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove_other","Status");
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




	$tdatacreategrn_remove_other["Status"] = $fdata;
//	RefNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RefNumber";
	$fdata["GoodName"] = "RefNumber";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove_other","RefNumber");
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








	$tdatacreategrn_remove_other["RefNumber"] = $fdata;
//	CurrentStock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "CurrentStock";
	$fdata["GoodName"] = "CurrentStock";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove_other","CurrentStock");
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








	$tdatacreategrn_remove_other["CurrentStock"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove_other","Fleet");
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




	$tdatacreategrn_remove_other["Fleet"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove_other","Cost");
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




	$tdatacreategrn_remove_other["Cost"] = $fdata;


$tables_data["creategrn-remove-other"]=&$tdatacreategrn_remove_other;
$field_labels["creategrn_remove_other"] = &$fieldLabelscreategrn_remove_other;
$fieldToolTips["creategrn_remove_other"] = &$fieldToolTipscreategrn_remove_other;
$page_titles["creategrn_remove_other"] = &$pageTitlescreategrn_remove_other;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["creategrn-remove-other"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["creategrn-remove-other"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_creategrn_remove_other()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  CurrentStock,  Fleet,  Cost";
$proto0["m_strFrom"] = "FROM creategrn";
$proto0["m_strWhere"] = "Status =\"Removal\"";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "Status =\"Removal\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove-other"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=\"Removal\"";
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
	"m_srcTableName" => "creategrn-remove-other"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "creategrn-remove-other";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove-other"
));

$proto8["m_sql"] = "ItemCode";
$proto8["m_srcTableName"] = "creategrn-remove-other";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove-other"
));

$proto10["m_sql"] = "Brand";
$proto10["m_srcTableName"] = "creategrn-remove-other";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove-other"
));

$proto12["m_sql"] = "Description";
$proto12["m_srcTableName"] = "creategrn-remove-other";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove-other"
));

$proto14["m_sql"] = "Supplier";
$proto14["m_srcTableName"] = "creategrn-remove-other";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove-other"
));

$proto16["m_sql"] = "Quantity";
$proto16["m_srcTableName"] = "creategrn-remove-other";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove-other"
));

$proto18["m_sql"] = "RemovedFrom";
$proto18["m_srcTableName"] = "creategrn-remove-other";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove-other"
));

$proto20["m_sql"] = "SystemDate";
$proto20["m_srcTableName"] = "creategrn-remove-other";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove-other"
));

$proto22["m_sql"] = "GRNDate";
$proto22["m_srcTableName"] = "creategrn-remove-other";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove-other"
));

$proto24["m_sql"] = "EnteredBy";
$proto24["m_srcTableName"] = "creategrn-remove-other";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove-other"
));

$proto26["m_sql"] = "ApprovedBy";
$proto26["m_srcTableName"] = "creategrn-remove-other";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove-other"
));

$proto28["m_sql"] = "UnitPrice";
$proto28["m_srcTableName"] = "creategrn-remove-other";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove-other"
));

$proto30["m_sql"] = "Status";
$proto30["m_srcTableName"] = "creategrn-remove-other";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove-other"
));

$proto32["m_sql"] = "RefNumber";
$proto32["m_srcTableName"] = "creategrn-remove-other";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "CurrentStock",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove-other"
));

$proto34["m_sql"] = "CurrentStock";
$proto34["m_srcTableName"] = "creategrn-remove-other";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove-other"
));

$proto36["m_sql"] = "Fleet";
$proto36["m_srcTableName"] = "creategrn-remove-other";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove-other"
));

$proto38["m_sql"] = "Cost";
$proto38["m_srcTableName"] = "creategrn-remove-other";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "creategrn";
$proto41["m_srcTableName"] = "creategrn-remove-other";
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
$proto40["m_srcTableName"] = "creategrn-remove-other";
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
$proto0["m_srcTableName"]="creategrn-remove-other";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_creategrn_remove_other = createSqlQuery_creategrn_remove_other();


	
					
;

																	

$tdatacreategrn_remove_other[".sqlquery"] = $queryData_creategrn_remove_other;

include_once(getabspath("include/creategrn_remove_other_events.php"));
$tableEvents["creategrn-remove-other"] = new eventclass_creategrn_remove_other;
$tdatacreategrn_remove_other[".hasEvents"] = true;

?>