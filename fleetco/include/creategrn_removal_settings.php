<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacreategrn_removal = array();	
	$tdatacreategrn_removal[".truncateText"] = true;
	$tdatacreategrn_removal[".NumberOfChars"] = 80; 
	$tdatacreategrn_removal[".ShortName"] = "creategrn_removal";
	$tdatacreategrn_removal[".OwnerID"] = "";
	$tdatacreategrn_removal[".OriginalTable"] = "creategrn";

//	field labels
$fieldLabelscreategrn_removal = array();
$fieldToolTipscreategrn_removal = array();
$pageTitlescreategrn_removal = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscreategrn_removal["English"] = array();
	$fieldToolTipscreategrn_removal["English"] = array();
	$pageTitlescreategrn_removal["English"] = array();
	$fieldLabelscreategrn_removal["English"]["ItemCode"] = "Item Code";
	$fieldToolTipscreategrn_removal["English"]["ItemCode"] = "";
	$fieldLabelscreategrn_removal["English"]["Brand"] = "Brand";
	$fieldToolTipscreategrn_removal["English"]["Brand"] = "";
	$fieldLabelscreategrn_removal["English"]["Description"] = "Descr.";
	$fieldToolTipscreategrn_removal["English"]["Description"] = "";
	$fieldLabelscreategrn_removal["English"]["Supplier"] = "Supplier";
	$fieldToolTipscreategrn_removal["English"]["Supplier"] = "";
	$fieldLabelscreategrn_removal["English"]["Quantity"] = "Qty";
	$fieldToolTipscreategrn_removal["English"]["Quantity"] = "";
	$fieldLabelscreategrn_removal["English"]["RemovedFrom"] = "Removed From";
	$fieldToolTipscreategrn_removal["English"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_removal["English"]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn_removal["English"]["SystemDate"] = "";
	$fieldLabelscreategrn_removal["English"]["GRNDate"] = "Date";
	$fieldToolTipscreategrn_removal["English"]["GRNDate"] = "";
	$fieldLabelscreategrn_removal["English"]["EnteredBy"] = "Entered";
	$fieldToolTipscreategrn_removal["English"]["EnteredBy"] = "";
	$fieldLabelscreategrn_removal["English"]["ApprovedBy"] = "Edited By";
	$fieldToolTipscreategrn_removal["English"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_removal["English"]["Status"] = "Type";
	$fieldToolTipscreategrn_removal["English"]["Status"] = "";
	$fieldLabelscreategrn_removal["English"]["ID"] = "ID";
	$fieldToolTipscreategrn_removal["English"]["ID"] = "";
	$fieldLabelscreategrn_removal["English"]["UnitPrice"] = "Unit Cost";
	$fieldToolTipscreategrn_removal["English"]["UnitPrice"] = "";
	$fieldLabelscreategrn_removal["English"]["RefNumber"] = "PO Ref.";
	$fieldToolTipscreategrn_removal["English"]["RefNumber"] = "";
	$fieldLabelscreategrn_removal["English"]["Cost"] = "Cost";
	$fieldToolTipscreategrn_removal["English"]["Cost"] = "";
	$fieldLabelscreategrn_removal["English"]["CurrentStock"] = "In-Stock";
	$fieldToolTipscreategrn_removal["English"]["CurrentStock"] = "";
	$fieldLabelscreategrn_removal["English"]["Fleet"] = "Fleet";
	$fieldToolTipscreategrn_removal["English"]["Fleet"] = "";
	if (count($fieldToolTipscreategrn_removal["English"]))
		$tdatacreategrn_removal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscreategrn_removal[""] = array();
	$fieldToolTipscreategrn_removal[""] = array();
	$pageTitlescreategrn_removal[""] = array();
	$fieldLabelscreategrn_removal[""]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn_removal[""]["SystemDate"] = "";
	$fieldLabelscreategrn_removal[""]["GRNDate"] = "GRNDate";
	$fieldToolTipscreategrn_removal[""]["GRNDate"] = "";
	$fieldLabelscreategrn_removal[""]["EnteredBy"] = "Entered By";
	$fieldToolTipscreategrn_removal[""]["EnteredBy"] = "";
	$fieldLabelscreategrn_removal[""]["ApprovedBy"] = "Approved By";
	$fieldToolTipscreategrn_removal[""]["ApprovedBy"] = "";
	$fieldLabelscreategrn_removal[""]["Status"] = "Status";
	$fieldToolTipscreategrn_removal[""]["Status"] = "";
	$fieldLabelscreategrn_removal[""]["ID"] = "ID";
	$fieldToolTipscreategrn_removal[""]["ID"] = "";
	$fieldLabelscreategrn_removal[""]["UnitPrice"] = "Unit Price";
	$fieldToolTipscreategrn_removal[""]["UnitPrice"] = "";
	$fieldLabelscreategrn_removal[""]["RefNumber"] = "Ref Number";
	$fieldToolTipscreategrn_removal[""]["RefNumber"] = "";
	$fieldLabelscreategrn_removal[""]["Cost"] = "Cost";
	$fieldToolTipscreategrn_removal[""]["Cost"] = "";
	$fieldLabelscreategrn_removal[""]["CurrentStock"] = "Current Stock";
	$fieldToolTipscreategrn_removal[""]["CurrentStock"] = "";
	$fieldLabelscreategrn_removal[""]["Fleet"] = "Fleet";
	$fieldToolTipscreategrn_removal[""]["Fleet"] = "";
	if (count($fieldToolTipscreategrn_removal[""]))
		$tdatacreategrn_removal[".isUseToolTips"] = true;
}
	
	
	$tdatacreategrn_removal[".NCSearch"] = true;



$tdatacreategrn_removal[".shortTableName"] = "creategrn_removal";
$tdatacreategrn_removal[".nSecOptions"] = 0;
$tdatacreategrn_removal[".recsPerRowList"] = 1;
$tdatacreategrn_removal[".recsPerRowPrint"] = 1;
$tdatacreategrn_removal[".mainTableOwnerID"] = "";
$tdatacreategrn_removal[".moveNext"] = 1;
$tdatacreategrn_removal[".entityType"] = 1;

$tdatacreategrn_removal[".strOriginalTableName"] = "creategrn";




$tdatacreategrn_removal[".showAddInPopup"] = false;

$tdatacreategrn_removal[".showEditInPopup"] = false;

$tdatacreategrn_removal[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacreategrn_removal[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacreategrn_removal[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatacreategrn_removal[".listAjax"] = true;
else 
	$tdatacreategrn_removal[".listAjax"] = false;

	$tdatacreategrn_removal[".audit"] = false;

	$tdatacreategrn_removal[".locking"] = false;

$tdatacreategrn_removal[".edit"] = true;
$tdatacreategrn_removal[".afterEditAction"] = 1;
$tdatacreategrn_removal[".closePopupAfterEdit"] = 1;
$tdatacreategrn_removal[".afterEditActionDetTable"] = "";

$tdatacreategrn_removal[".add"] = true;
$tdatacreategrn_removal[".afterAddAction"] = 1;
$tdatacreategrn_removal[".closePopupAfterAdd"] = 1;
$tdatacreategrn_removal[".afterAddActionDetTable"] = "Detail tables not found!";

$tdatacreategrn_removal[".list"] = true;

$tdatacreategrn_removal[".view"] = true;

$tdatacreategrn_removal[".import"] = true;

$tdatacreategrn_removal[".exportTo"] = true;

$tdatacreategrn_removal[".printFriendly"] = true;

$tdatacreategrn_removal[".delete"] = true;

$tdatacreategrn_removal[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacreategrn_removal[".searchSaving"] = false;
//

$tdatacreategrn_removal[".showSearchPanel"] = true;
		$tdatacreategrn_removal[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacreategrn_removal[".isUseAjaxSuggest"] = false;
else 
	$tdatacreategrn_removal[".isUseAjaxSuggest"] = true;

$tdatacreategrn_removal[".rowHighlite"] = true;



$tdatacreategrn_removal[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacreategrn_removal[".isUseTimeForSearch"] = false;





$tdatacreategrn_removal[".allSearchFields"] = array();
$tdatacreategrn_removal[".filterFields"] = array();
$tdatacreategrn_removal[".requiredSearchFields"] = array();

$tdatacreategrn_removal[".allSearchFields"][] = "Status";
	$tdatacreategrn_removal[".allSearchFields"][] = "Fleet";
	$tdatacreategrn_removal[".allSearchFields"][] = "GRNDate";
	$tdatacreategrn_removal[".allSearchFields"][] = "ItemCode";
	$tdatacreategrn_removal[".allSearchFields"][] = "RemovedFrom";
	$tdatacreategrn_removal[".allSearchFields"][] = "Brand";
	$tdatacreategrn_removal[".allSearchFields"][] = "Description";
	$tdatacreategrn_removal[".allSearchFields"][] = "Supplier";
	$tdatacreategrn_removal[".allSearchFields"][] = "UnitPrice";
	$tdatacreategrn_removal[".allSearchFields"][] = "Quantity";
	$tdatacreategrn_removal[".allSearchFields"][] = "RefNumber";
	$tdatacreategrn_removal[".allSearchFields"][] = "SystemDate";
	$tdatacreategrn_removal[".allSearchFields"][] = "Cost";
	$tdatacreategrn_removal[".allSearchFields"][] = "EnteredBy";
	

$tdatacreategrn_removal[".googleLikeFields"] = array();
$tdatacreategrn_removal[".googleLikeFields"][] = "ID";
$tdatacreategrn_removal[".googleLikeFields"][] = "ItemCode";
$tdatacreategrn_removal[".googleLikeFields"][] = "Brand";
$tdatacreategrn_removal[".googleLikeFields"][] = "Description";
$tdatacreategrn_removal[".googleLikeFields"][] = "Supplier";
$tdatacreategrn_removal[".googleLikeFields"][] = "Quantity";
$tdatacreategrn_removal[".googleLikeFields"][] = "RemovedFrom";
$tdatacreategrn_removal[".googleLikeFields"][] = "SystemDate";
$tdatacreategrn_removal[".googleLikeFields"][] = "GRNDate";
$tdatacreategrn_removal[".googleLikeFields"][] = "EnteredBy";
$tdatacreategrn_removal[".googleLikeFields"][] = "ApprovedBy";
$tdatacreategrn_removal[".googleLikeFields"][] = "UnitPrice";
$tdatacreategrn_removal[".googleLikeFields"][] = "Status";
$tdatacreategrn_removal[".googleLikeFields"][] = "RefNumber";
$tdatacreategrn_removal[".googleLikeFields"][] = "CurrentStock";
$tdatacreategrn_removal[".googleLikeFields"][] = "Fleet";
$tdatacreategrn_removal[".googleLikeFields"][] = "Cost";


$tdatacreategrn_removal[".advSearchFields"] = array();
$tdatacreategrn_removal[".advSearchFields"][] = "Status";
$tdatacreategrn_removal[".advSearchFields"][] = "Fleet";
$tdatacreategrn_removal[".advSearchFields"][] = "GRNDate";
$tdatacreategrn_removal[".advSearchFields"][] = "ItemCode";
$tdatacreategrn_removal[".advSearchFields"][] = "RemovedFrom";
$tdatacreategrn_removal[".advSearchFields"][] = "Brand";
$tdatacreategrn_removal[".advSearchFields"][] = "Description";
$tdatacreategrn_removal[".advSearchFields"][] = "Supplier";
$tdatacreategrn_removal[".advSearchFields"][] = "UnitPrice";
$tdatacreategrn_removal[".advSearchFields"][] = "Quantity";
$tdatacreategrn_removal[".advSearchFields"][] = "RefNumber";
$tdatacreategrn_removal[".advSearchFields"][] = "SystemDate";
$tdatacreategrn_removal[".advSearchFields"][] = "Cost";
$tdatacreategrn_removal[".advSearchFields"][] = "EnteredBy";

$tdatacreategrn_removal[".tableType"] = "list";

$tdatacreategrn_removal[".printerPageOrientation"] = 0;
$tdatacreategrn_removal[".nPrinterPageScale"] = 100;

$tdatacreategrn_removal[".nPrinterSplitRecords"] = 40;

$tdatacreategrn_removal[".nPrinterPDFSplitRecords"] = 40;



$tdatacreategrn_removal[".geocodingEnabled"] = false;




	





// view page pdf
$tdatacreategrn_removal[".isViewPagePDF"] = true;
$tdatacreategrn_removal[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatacreategrn_removal[".isPrinterPagePDF"] = true;
$tdatacreategrn_removal[".nPrinterPagePDFScale"] = 100;

$tdatacreategrn_removal[".totalsFields"] = array();
$tdatacreategrn_removal[".totalsFields"][] = array(
	"fName" => "Cost", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatacreategrn_removal[".pageSize"] = 20;

$tdatacreategrn_removal[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacreategrn_removal[".strOrderBy"] = $tstrOrderBy;

$tdatacreategrn_removal[".orderindexes"] = array();

$tdatacreategrn_removal[".sqlHead"] = "SELECT ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  CurrentStock,  Fleet,  Cost";
$tdatacreategrn_removal[".sqlFrom"] = "FROM creategrn";
$tdatacreategrn_removal[".sqlWhereExpr"] = "(Status =\"Removal\")";
$tdatacreategrn_removal[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatacreategrn_removal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacreategrn_removal[".arrGroupsPerPage"] = $arrGPP;

$tdatacreategrn_removal[".highlightSearchResults"] = true;

$tableKeyscreategrn_removal = array();
$tableKeyscreategrn_removal[] = "ID";
$tdatacreategrn_removal[".Keys"] = $tableKeyscreategrn_removal;

$tdatacreategrn_removal[".listFields"] = array();
$tdatacreategrn_removal[".listFields"][] = "ID";
$tdatacreategrn_removal[".listFields"][] = "Status";
$tdatacreategrn_removal[".listFields"][] = "Fleet";
$tdatacreategrn_removal[".listFields"][] = "RemovedFrom";
$tdatacreategrn_removal[".listFields"][] = "GRNDate";
$tdatacreategrn_removal[".listFields"][] = "ItemCode";
$tdatacreategrn_removal[".listFields"][] = "Brand";
$tdatacreategrn_removal[".listFields"][] = "Description";
$tdatacreategrn_removal[".listFields"][] = "Supplier";
$tdatacreategrn_removal[".listFields"][] = "UnitPrice";
$tdatacreategrn_removal[".listFields"][] = "Quantity";
$tdatacreategrn_removal[".listFields"][] = "RefNumber";
$tdatacreategrn_removal[".listFields"][] = "Cost";
$tdatacreategrn_removal[".listFields"][] = "EnteredBy";

$tdatacreategrn_removal[".hideMobileList"] = array();


$tdatacreategrn_removal[".viewFields"] = array();
$tdatacreategrn_removal[".viewFields"][] = "Status";
$tdatacreategrn_removal[".viewFields"][] = "ID";
$tdatacreategrn_removal[".viewFields"][] = "Fleet";
$tdatacreategrn_removal[".viewFields"][] = "GRNDate";
$tdatacreategrn_removal[".viewFields"][] = "RemovedFrom";
$tdatacreategrn_removal[".viewFields"][] = "ItemCode";
$tdatacreategrn_removal[".viewFields"][] = "Brand";
$tdatacreategrn_removal[".viewFields"][] = "Description";
$tdatacreategrn_removal[".viewFields"][] = "Supplier";
$tdatacreategrn_removal[".viewFields"][] = "UnitPrice";
$tdatacreategrn_removal[".viewFields"][] = "Quantity";
$tdatacreategrn_removal[".viewFields"][] = "RefNumber";
$tdatacreategrn_removal[".viewFields"][] = "SystemDate";
$tdatacreategrn_removal[".viewFields"][] = "Cost";
$tdatacreategrn_removal[".viewFields"][] = "EnteredBy";
$tdatacreategrn_removal[".viewFields"][] = "ApprovedBy";

$tdatacreategrn_removal[".addFields"] = array();
$tdatacreategrn_removal[".addFields"][] = "Status";
$tdatacreategrn_removal[".addFields"][] = "Fleet";
$tdatacreategrn_removal[".addFields"][] = "GRNDate";
$tdatacreategrn_removal[".addFields"][] = "ItemCode";
$tdatacreategrn_removal[".addFields"][] = "RemovedFrom";
$tdatacreategrn_removal[".addFields"][] = "Brand";
$tdatacreategrn_removal[".addFields"][] = "Description";
$tdatacreategrn_removal[".addFields"][] = "Supplier";
$tdatacreategrn_removal[".addFields"][] = "UnitPrice";
$tdatacreategrn_removal[".addFields"][] = "Quantity";
$tdatacreategrn_removal[".addFields"][] = "RefNumber";
$tdatacreategrn_removal[".addFields"][] = "SystemDate";
$tdatacreategrn_removal[".addFields"][] = "Cost";
$tdatacreategrn_removal[".addFields"][] = "EnteredBy";

$tdatacreategrn_removal[".masterListFields"] = array();
$tdatacreategrn_removal[".masterListFields"][] = "Status";
$tdatacreategrn_removal[".masterListFields"][] = "ID";
$tdatacreategrn_removal[".masterListFields"][] = "Fleet";
$tdatacreategrn_removal[".masterListFields"][] = "GRNDate";
$tdatacreategrn_removal[".masterListFields"][] = "RemovedFrom";
$tdatacreategrn_removal[".masterListFields"][] = "ItemCode";
$tdatacreategrn_removal[".masterListFields"][] = "Brand";
$tdatacreategrn_removal[".masterListFields"][] = "Description";
$tdatacreategrn_removal[".masterListFields"][] = "Supplier";
$tdatacreategrn_removal[".masterListFields"][] = "UnitPrice";
$tdatacreategrn_removal[".masterListFields"][] = "Quantity";
$tdatacreategrn_removal[".masterListFields"][] = "RefNumber";
$tdatacreategrn_removal[".masterListFields"][] = "SystemDate";
$tdatacreategrn_removal[".masterListFields"][] = "Cost";
$tdatacreategrn_removal[".masterListFields"][] = "CurrentStock";
$tdatacreategrn_removal[".masterListFields"][] = "EnteredBy";
$tdatacreategrn_removal[".masterListFields"][] = "ApprovedBy";

$tdatacreategrn_removal[".inlineAddFields"] = array();

$tdatacreategrn_removal[".editFields"] = array();
$tdatacreategrn_removal[".editFields"][] = "Status";
$tdatacreategrn_removal[".editFields"][] = "Fleet";
$tdatacreategrn_removal[".editFields"][] = "GRNDate";
$tdatacreategrn_removal[".editFields"][] = "ItemCode";
$tdatacreategrn_removal[".editFields"][] = "RemovedFrom";
$tdatacreategrn_removal[".editFields"][] = "Brand";
$tdatacreategrn_removal[".editFields"][] = "Description";
$tdatacreategrn_removal[".editFields"][] = "Supplier";
$tdatacreategrn_removal[".editFields"][] = "UnitPrice";
$tdatacreategrn_removal[".editFields"][] = "Quantity";
$tdatacreategrn_removal[".editFields"][] = "RefNumber";
$tdatacreategrn_removal[".editFields"][] = "SystemDate";
$tdatacreategrn_removal[".editFields"][] = "Cost";
$tdatacreategrn_removal[".editFields"][] = "EnteredBy";
$tdatacreategrn_removal[".editFields"][] = "ApprovedBy";

$tdatacreategrn_removal[".inlineEditFields"] = array();

$tdatacreategrn_removal[".exportFields"] = array();
$tdatacreategrn_removal[".exportFields"][] = "Status";
$tdatacreategrn_removal[".exportFields"][] = "ID";
$tdatacreategrn_removal[".exportFields"][] = "Fleet";
$tdatacreategrn_removal[".exportFields"][] = "GRNDate";
$tdatacreategrn_removal[".exportFields"][] = "RemovedFrom";
$tdatacreategrn_removal[".exportFields"][] = "ItemCode";
$tdatacreategrn_removal[".exportFields"][] = "Brand";
$tdatacreategrn_removal[".exportFields"][] = "Description";
$tdatacreategrn_removal[".exportFields"][] = "Supplier";
$tdatacreategrn_removal[".exportFields"][] = "UnitPrice";
$tdatacreategrn_removal[".exportFields"][] = "Quantity";
$tdatacreategrn_removal[".exportFields"][] = "RefNumber";
$tdatacreategrn_removal[".exportFields"][] = "SystemDate";
$tdatacreategrn_removal[".exportFields"][] = "Cost";
$tdatacreategrn_removal[".exportFields"][] = "EnteredBy";
$tdatacreategrn_removal[".exportFields"][] = "ApprovedBy";

$tdatacreategrn_removal[".importFields"] = array();
$tdatacreategrn_removal[".importFields"][] = "ID";
$tdatacreategrn_removal[".importFields"][] = "ItemCode";
$tdatacreategrn_removal[".importFields"][] = "Brand";
$tdatacreategrn_removal[".importFields"][] = "Description";
$tdatacreategrn_removal[".importFields"][] = "Supplier";
$tdatacreategrn_removal[".importFields"][] = "Quantity";
$tdatacreategrn_removal[".importFields"][] = "RemovedFrom";
$tdatacreategrn_removal[".importFields"][] = "SystemDate";
$tdatacreategrn_removal[".importFields"][] = "GRNDate";
$tdatacreategrn_removal[".importFields"][] = "EnteredBy";
$tdatacreategrn_removal[".importFields"][] = "ApprovedBy";
$tdatacreategrn_removal[".importFields"][] = "UnitPrice";
$tdatacreategrn_removal[".importFields"][] = "Status";
$tdatacreategrn_removal[".importFields"][] = "RefNumber";
$tdatacreategrn_removal[".importFields"][] = "Fleet";
$tdatacreategrn_removal[".importFields"][] = "Cost";

$tdatacreategrn_removal[".printFields"] = array();
$tdatacreategrn_removal[".printFields"][] = "Status";
$tdatacreategrn_removal[".printFields"][] = "ID";
$tdatacreategrn_removal[".printFields"][] = "Fleet";
$tdatacreategrn_removal[".printFields"][] = "GRNDate";
$tdatacreategrn_removal[".printFields"][] = "RemovedFrom";
$tdatacreategrn_removal[".printFields"][] = "ItemCode";
$tdatacreategrn_removal[".printFields"][] = "Brand";
$tdatacreategrn_removal[".printFields"][] = "Description";
$tdatacreategrn_removal[".printFields"][] = "Supplier";
$tdatacreategrn_removal[".printFields"][] = "UnitPrice";
$tdatacreategrn_removal[".printFields"][] = "Quantity";
$tdatacreategrn_removal[".printFields"][] = "RefNumber";
$tdatacreategrn_removal[".printFields"][] = "SystemDate";
$tdatacreategrn_removal[".printFields"][] = "Cost";
$tdatacreategrn_removal[".printFields"][] = "EnteredBy";
$tdatacreategrn_removal[".printFields"][] = "ApprovedBy";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_removal","ID"); 
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
	
	
	
	

	

	
	$tdatacreategrn_removal["ID"] = $fdata;
//	ItemCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemCode";
	$fdata["GoodName"] = "ItemCode";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_removal","ItemCode"); 
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

	

	
	$tdatacreategrn_removal["ItemCode"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_removal","Brand"); 
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

	

	
	$tdatacreategrn_removal["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_removal","Description"); 
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

	

	
	$tdatacreategrn_removal["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_removal","Supplier"); 
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

	

	
	$tdatacreategrn_removal["Supplier"] = $fdata;
//	Quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Quantity";
	$fdata["GoodName"] = "Quantity";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_removal","Quantity"); 
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

	

	
	$tdatacreategrn_removal["Quantity"] = $fdata;
//	RemovedFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RemovedFrom";
	$fdata["GoodName"] = "RemovedFrom";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_removal","RemovedFrom"); 
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
		$edata["LCType"] = 2;
		
		
			
	$edata["LinkField"] = "RegNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RegNo";
	
		
	$edata["LookupOrderBy"] = "RegNo";
	
		
		$edata["UseCategory"] = true; 
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Fleet", "lookup" => "Fleet" );
		
		
				
	
	
		
		
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

	

	
	$tdatacreategrn_removal["RemovedFrom"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_removal","SystemDate"); 
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

	

	
	$tdatacreategrn_removal["SystemDate"] = $fdata;
//	GRNDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "GRNDate";
	$fdata["GoodName"] = "GRNDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_removal","GRNDate"); 
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

	

	
	$tdatacreategrn_removal["GRNDate"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_removal","EnteredBy"); 
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

	

	
	$tdatacreategrn_removal["EnteredBy"] = $fdata;
//	ApprovedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ApprovedBy";
	$fdata["GoodName"] = "ApprovedBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_removal","ApprovedBy"); 
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
	
	
	
	

	

	
	$tdatacreategrn_removal["ApprovedBy"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_removal","UnitPrice"); 
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

	

	
	$tdatacreategrn_removal["UnitPrice"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_removal","Status"); 
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

	

	
	$tdatacreategrn_removal["Status"] = $fdata;
//	RefNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RefNumber";
	$fdata["GoodName"] = "RefNumber";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_removal","RefNumber"); 
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

	

	
	$tdatacreategrn_removal["RefNumber"] = $fdata;
//	CurrentStock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "CurrentStock";
	$fdata["GoodName"] = "CurrentStock";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_removal","CurrentStock"); 
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
	
	
	
	

	

	
	$tdatacreategrn_removal["CurrentStock"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_removal","Fleet"); 
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

	

	
	$tdatacreategrn_removal["Fleet"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_removal","Cost"); 
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

	

	
	$tdatacreategrn_removal["Cost"] = $fdata;

	
$tables_data["creategrn-removal"]=&$tdatacreategrn_removal;
$field_labels["creategrn_removal"] = &$fieldLabelscreategrn_removal;
$fieldToolTips["creategrn-removal"] = &$fieldToolTipscreategrn_removal;
$page_titles["creategrn_removal"] = &$pageTitlescreategrn_removal;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["creategrn-removal"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["creategrn-removal"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_creategrn_removal()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  CurrentStock,  Fleet,  Cost";
$proto0["m_strFrom"] = "FROM creategrn";
$proto0["m_strWhere"] = "(Status =\"Removal\")";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "Status =\"Removal\"";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-removal"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=\"Removal\"";
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
	"m_srcTableName" => "creategrn-removal"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "creategrn-removal";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-removal"
));

$proto7["m_sql"] = "ItemCode";
$proto7["m_srcTableName"] = "creategrn-removal";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-removal"
));

$proto9["m_sql"] = "Brand";
$proto9["m_srcTableName"] = "creategrn-removal";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-removal"
));

$proto11["m_sql"] = "Description";
$proto11["m_srcTableName"] = "creategrn-removal";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-removal"
));

$proto13["m_sql"] = "Supplier";
$proto13["m_srcTableName"] = "creategrn-removal";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-removal"
));

$proto15["m_sql"] = "Quantity";
$proto15["m_srcTableName"] = "creategrn-removal";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-removal"
));

$proto17["m_sql"] = "RemovedFrom";
$proto17["m_srcTableName"] = "creategrn-removal";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-removal"
));

$proto19["m_sql"] = "SystemDate";
$proto19["m_srcTableName"] = "creategrn-removal";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-removal"
));

$proto21["m_sql"] = "GRNDate";
$proto21["m_srcTableName"] = "creategrn-removal";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-removal"
));

$proto23["m_sql"] = "EnteredBy";
$proto23["m_srcTableName"] = "creategrn-removal";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-removal"
));

$proto25["m_sql"] = "ApprovedBy";
$proto25["m_srcTableName"] = "creategrn-removal";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-removal"
));

$proto27["m_sql"] = "UnitPrice";
$proto27["m_srcTableName"] = "creategrn-removal";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-removal"
));

$proto29["m_sql"] = "Status";
$proto29["m_srcTableName"] = "creategrn-removal";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-removal"
));

$proto31["m_sql"] = "RefNumber";
$proto31["m_srcTableName"] = "creategrn-removal";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "CurrentStock",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-removal"
));

$proto33["m_sql"] = "CurrentStock";
$proto33["m_srcTableName"] = "creategrn-removal";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-removal"
));

$proto35["m_sql"] = "Fleet";
$proto35["m_srcTableName"] = "creategrn-removal";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-removal"
));

$proto37["m_sql"] = "Cost";
$proto37["m_srcTableName"] = "creategrn-removal";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto39=array();
$proto39["m_link"] = "SQLL_MAIN";
			$proto40=array();
$proto40["m_strName"] = "creategrn";
$proto40["m_srcTableName"] = "creategrn-removal";
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
$proto39["m_srcTableName"] = "creategrn-removal";
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
$proto0["m_srcTableName"]="creategrn-removal";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_creategrn_removal = createSqlQuery_creategrn_removal();


	
																	
	
$tdatacreategrn_removal[".sqlquery"] = $queryData_creategrn_removal;

include_once(getabspath("include/creategrn_removal_events.php"));
$tableEvents["creategrn-removal"] = new eventclass_creategrn_removal;
$tdatacreategrn_removal[".hasEvents"] = true;

?>