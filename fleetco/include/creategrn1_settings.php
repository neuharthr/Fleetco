<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacreategrn1 = array();	
	$tdatacreategrn1[".truncateText"] = true;
	$tdatacreategrn1[".NumberOfChars"] = 80; 
	$tdatacreategrn1[".ShortName"] = "creategrn1";
	$tdatacreategrn1[".OwnerID"] = "";
	$tdatacreategrn1[".OriginalTable"] = "creategrn";

//	field labels
$fieldLabelscreategrn1 = array();
$fieldToolTipscreategrn1 = array();
$pageTitlescreategrn1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscreategrn1["English"] = array();
	$fieldToolTipscreategrn1["English"] = array();
	$pageTitlescreategrn1["English"] = array();
	if (count($fieldToolTipscreategrn1["English"]))
		$tdatacreategrn1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscreategrn1[""] = array();
	$fieldToolTipscreategrn1[""] = array();
	$pageTitlescreategrn1[""] = array();
	if (count($fieldToolTipscreategrn1[""]))
		$tdatacreategrn1[".isUseToolTips"] = true;
}
	
	
	$tdatacreategrn1[".NCSearch"] = true;



$tdatacreategrn1[".shortTableName"] = "creategrn1";
$tdatacreategrn1[".nSecOptions"] = 0;
$tdatacreategrn1[".recsPerRowList"] = 1;
$tdatacreategrn1[".recsPerRowPrint"] = 1;
$tdatacreategrn1[".mainTableOwnerID"] = "";
$tdatacreategrn1[".moveNext"] = 1;
$tdatacreategrn1[".entityType"] = 1;

$tdatacreategrn1[".strOriginalTableName"] = "creategrn";




$tdatacreategrn1[".showAddInPopup"] = false;

$tdatacreategrn1[".showEditInPopup"] = false;

$tdatacreategrn1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacreategrn1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacreategrn1[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatacreategrn1[".listAjax"] = true;
else 
	$tdatacreategrn1[".listAjax"] = false;

	$tdatacreategrn1[".audit"] = false;

	$tdatacreategrn1[".locking"] = false;



$tdatacreategrn1[".list"] = true;

$tdatacreategrn1[".view"] = true;


$tdatacreategrn1[".exportTo"] = true;

$tdatacreategrn1[".printFriendly"] = true;

$tdatacreategrn1[".delete"] = true;

$tdatacreategrn1[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdatacreategrn1[".searchSaving"] = false;
//

$tdatacreategrn1[".showSearchPanel"] = true;
		$tdatacreategrn1[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacreategrn1[".isUseAjaxSuggest"] = false;
else 
	$tdatacreategrn1[".isUseAjaxSuggest"] = true;

$tdatacreategrn1[".rowHighlite"] = true;



$tdatacreategrn1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacreategrn1[".isUseTimeForSearch"] = false;





$tdatacreategrn1[".allSearchFields"] = array();
$tdatacreategrn1[".filterFields"] = array();
$tdatacreategrn1[".requiredSearchFields"] = array();

$tdatacreategrn1[".allSearchFields"][] = "MAX(GRNDate)";
	$tdatacreategrn1[".allSearchFields"][] = "SUM(CurrentStock)";
	$tdatacreategrn1[".allSearchFields"][] = "Fleet";
	$tdatacreategrn1[".allSearchFields"][] = "SystemDate";
	$tdatacreategrn1[".allSearchFields"][] = "Status";
	$tdatacreategrn1[".allSearchFields"][] = "RemovedFrom";
	$tdatacreategrn1[".allSearchFields"][] = "RefNumber";
	$tdatacreategrn1[".allSearchFields"][] = "ItemCode";
	$tdatacreategrn1[".allSearchFields"][] = "Brand";
	$tdatacreategrn1[".allSearchFields"][] = "Description";
	$tdatacreategrn1[".allSearchFields"][] = "Supplier";
	$tdatacreategrn1[".allSearchFields"][] = "UnitPrice";
	$tdatacreategrn1[".allSearchFields"][] = "Quantity";
	$tdatacreategrn1[".allSearchFields"][] = "Cost";
	$tdatacreategrn1[".allSearchFields"][] = "EnteredBy";
	

$tdatacreategrn1[".googleLikeFields"] = array();
$tdatacreategrn1[".googleLikeFields"][] = "ItemCode";
$tdatacreategrn1[".googleLikeFields"][] = "Brand";
$tdatacreategrn1[".googleLikeFields"][] = "Description";
$tdatacreategrn1[".googleLikeFields"][] = "Supplier";
$tdatacreategrn1[".googleLikeFields"][] = "Quantity";
$tdatacreategrn1[".googleLikeFields"][] = "RemovedFrom";
$tdatacreategrn1[".googleLikeFields"][] = "SystemDate";
$tdatacreategrn1[".googleLikeFields"][] = "MAX(GRNDate)";
$tdatacreategrn1[".googleLikeFields"][] = "EnteredBy";
$tdatacreategrn1[".googleLikeFields"][] = "UnitPrice";
$tdatacreategrn1[".googleLikeFields"][] = "Status";
$tdatacreategrn1[".googleLikeFields"][] = "RefNumber";
$tdatacreategrn1[".googleLikeFields"][] = "Cost";
$tdatacreategrn1[".googleLikeFields"][] = "SUM(CurrentStock)";
$tdatacreategrn1[".googleLikeFields"][] = "Fleet";


$tdatacreategrn1[".advSearchFields"] = array();
$tdatacreategrn1[".advSearchFields"][] = "MAX(GRNDate)";
$tdatacreategrn1[".advSearchFields"][] = "SUM(CurrentStock)";
$tdatacreategrn1[".advSearchFields"][] = "Fleet";
$tdatacreategrn1[".advSearchFields"][] = "SystemDate";
$tdatacreategrn1[".advSearchFields"][] = "Status";
$tdatacreategrn1[".advSearchFields"][] = "RemovedFrom";
$tdatacreategrn1[".advSearchFields"][] = "RefNumber";
$tdatacreategrn1[".advSearchFields"][] = "ItemCode";
$tdatacreategrn1[".advSearchFields"][] = "Brand";
$tdatacreategrn1[".advSearchFields"][] = "Description";
$tdatacreategrn1[".advSearchFields"][] = "Supplier";
$tdatacreategrn1[".advSearchFields"][] = "UnitPrice";
$tdatacreategrn1[".advSearchFields"][] = "Quantity";
$tdatacreategrn1[".advSearchFields"][] = "Cost";
$tdatacreategrn1[".advSearchFields"][] = "EnteredBy";

$tdatacreategrn1[".tableType"] = "list";

$tdatacreategrn1[".printerPageOrientation"] = 0;
$tdatacreategrn1[".nPrinterPageScale"] = 100;

$tdatacreategrn1[".nPrinterSplitRecords"] = 40;

$tdatacreategrn1[".nPrinterPDFSplitRecords"] = 40;



$tdatacreategrn1[".geocodingEnabled"] = false;




	





// view page pdf
$tdatacreategrn1[".isViewPagePDF"] = true;
$tdatacreategrn1[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatacreategrn1[".isPrinterPagePDF"] = true;
$tdatacreategrn1[".nPrinterPagePDFScale"] = 100;

$tdatacreategrn1[".totalsFields"] = array();
$tdatacreategrn1[".totalsFields"][] = array(
	"fName" => "Quantity", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatacreategrn1[".totalsFields"][] = array(
	"fName" => "Cost", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatacreategrn1[".pageSize"] = 20;

$tdatacreategrn1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacreategrn1[".strOrderBy"] = $tstrOrderBy;

$tdatacreategrn1[".orderindexes"] = array();

$tdatacreategrn1[".sqlHead"] = "SELECT ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  MAX(GRNDate) AS `MAX(GRNDate)`,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  UnitPrice*Quantity AS Cost,  SUM(CurrentStock) AS `SUM(CurrentStock)`,  Fleet";
$tdatacreategrn1[".sqlFrom"] = "FROM creategrn";
$tdatacreategrn1[".sqlWhereExpr"] = "";
$tdatacreategrn1[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatacreategrn1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacreategrn1[".arrGroupsPerPage"] = $arrGPP;

$tdatacreategrn1[".highlightSearchResults"] = true;

$tableKeyscreategrn1 = array();
$tableKeyscreategrn1[] = "ID";
$tdatacreategrn1[".Keys"] = $tableKeyscreategrn1;

$tdatacreategrn1[".listFields"] = array();
$tdatacreategrn1[".listFields"][] = "SUM(CurrentStock)";
$tdatacreategrn1[".listFields"][] = "MAX(GRNDate)";
$tdatacreategrn1[".listFields"][] = "SystemDate";
$tdatacreategrn1[".listFields"][] = "Fleet";
$tdatacreategrn1[".listFields"][] = "Status";
$tdatacreategrn1[".listFields"][] = "RemovedFrom";
$tdatacreategrn1[".listFields"][] = "RefNumber";
$tdatacreategrn1[".listFields"][] = "ItemCode";
$tdatacreategrn1[".listFields"][] = "Brand";
$tdatacreategrn1[".listFields"][] = "Description";
$tdatacreategrn1[".listFields"][] = "Supplier";
$tdatacreategrn1[".listFields"][] = "UnitPrice";
$tdatacreategrn1[".listFields"][] = "Quantity";
$tdatacreategrn1[".listFields"][] = "Cost";
$tdatacreategrn1[".listFields"][] = "EnteredBy";

$tdatacreategrn1[".hideMobileList"] = array();


$tdatacreategrn1[".viewFields"] = array();
$tdatacreategrn1[".viewFields"][] = "MAX(GRNDate)";
$tdatacreategrn1[".viewFields"][] = "SUM(CurrentStock)";
$tdatacreategrn1[".viewFields"][] = "Fleet";
$tdatacreategrn1[".viewFields"][] = "ID";
$tdatacreategrn1[".viewFields"][] = "SystemDate";
$tdatacreategrn1[".viewFields"][] = "Status";
$tdatacreategrn1[".viewFields"][] = "RemovedFrom";
$tdatacreategrn1[".viewFields"][] = "RefNumber";
$tdatacreategrn1[".viewFields"][] = "ItemCode";
$tdatacreategrn1[".viewFields"][] = "Brand";
$tdatacreategrn1[".viewFields"][] = "Description";
$tdatacreategrn1[".viewFields"][] = "Supplier";
$tdatacreategrn1[".viewFields"][] = "UnitPrice";
$tdatacreategrn1[".viewFields"][] = "Quantity";
$tdatacreategrn1[".viewFields"][] = "Cost";
$tdatacreategrn1[".viewFields"][] = "EnteredBy";
$tdatacreategrn1[".viewFields"][] = "ApprovedBy";

$tdatacreategrn1[".addFields"] = array();

$tdatacreategrn1[".masterListFields"] = array();
$tdatacreategrn1[".masterListFields"][] = "MAX(GRNDate)";
$tdatacreategrn1[".masterListFields"][] = "SUM(CurrentStock)";
$tdatacreategrn1[".masterListFields"][] = "Fleet";
$tdatacreategrn1[".masterListFields"][] = "ID";
$tdatacreategrn1[".masterListFields"][] = "SystemDate";
$tdatacreategrn1[".masterListFields"][] = "Status";
$tdatacreategrn1[".masterListFields"][] = "RemovedFrom";
$tdatacreategrn1[".masterListFields"][] = "RefNumber";
$tdatacreategrn1[".masterListFields"][] = "ItemCode";
$tdatacreategrn1[".masterListFields"][] = "Brand";
$tdatacreategrn1[".masterListFields"][] = "Description";
$tdatacreategrn1[".masterListFields"][] = "Supplier";
$tdatacreategrn1[".masterListFields"][] = "UnitPrice";
$tdatacreategrn1[".masterListFields"][] = "Quantity";
$tdatacreategrn1[".masterListFields"][] = "Cost";
$tdatacreategrn1[".masterListFields"][] = "EnteredBy";
$tdatacreategrn1[".masterListFields"][] = "ApprovedBy";

$tdatacreategrn1[".inlineAddFields"] = array();

$tdatacreategrn1[".editFields"] = array();

$tdatacreategrn1[".inlineEditFields"] = array();

$tdatacreategrn1[".exportFields"] = array();
$tdatacreategrn1[".exportFields"][] = "MAX(GRNDate)";
$tdatacreategrn1[".exportFields"][] = "SUM(CurrentStock)";
$tdatacreategrn1[".exportFields"][] = "Fleet";
$tdatacreategrn1[".exportFields"][] = "ID";
$tdatacreategrn1[".exportFields"][] = "SystemDate";
$tdatacreategrn1[".exportFields"][] = "Status";
$tdatacreategrn1[".exportFields"][] = "RemovedFrom";
$tdatacreategrn1[".exportFields"][] = "RefNumber";
$tdatacreategrn1[".exportFields"][] = "ItemCode";
$tdatacreategrn1[".exportFields"][] = "Brand";
$tdatacreategrn1[".exportFields"][] = "Description";
$tdatacreategrn1[".exportFields"][] = "Supplier";
$tdatacreategrn1[".exportFields"][] = "UnitPrice";
$tdatacreategrn1[".exportFields"][] = "Quantity";
$tdatacreategrn1[".exportFields"][] = "Cost";
$tdatacreategrn1[".exportFields"][] = "EnteredBy";
$tdatacreategrn1[".exportFields"][] = "ApprovedBy";

$tdatacreategrn1[".importFields"] = array();
$tdatacreategrn1[".importFields"][] = "MAX(GRNDate)";
$tdatacreategrn1[".importFields"][] = "SUM(CurrentStock)";

$tdatacreategrn1[".printFields"] = array();
$tdatacreategrn1[".printFields"][] = "MAX(GRNDate)";
$tdatacreategrn1[".printFields"][] = "SUM(CurrentStock)";
$tdatacreategrn1[".printFields"][] = "Fleet";
$tdatacreategrn1[".printFields"][] = "ID";
$tdatacreategrn1[".printFields"][] = "SystemDate";
$tdatacreategrn1[".printFields"][] = "Status";
$tdatacreategrn1[".printFields"][] = "RemovedFrom";
$tdatacreategrn1[".printFields"][] = "RefNumber";
$tdatacreategrn1[".printFields"][] = "ItemCode";
$tdatacreategrn1[".printFields"][] = "Brand";
$tdatacreategrn1[".printFields"][] = "Description";
$tdatacreategrn1[".printFields"][] = "Supplier";
$tdatacreategrn1[".printFields"][] = "UnitPrice";
$tdatacreategrn1[".printFields"][] = "Quantity";
$tdatacreategrn1[".printFields"][] = "Cost";
$tdatacreategrn1[".printFields"][] = "EnteredBy";
$tdatacreategrn1[".printFields"][] = "ApprovedBy";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn1","ID"); 
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
	
	
	
	

	

	
	$tdatacreategrn1["ID"] = $fdata;
//	ItemCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemCode";
	$fdata["GoodName"] = "ItemCode";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn1","ItemCode"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacreategrn1["ItemCode"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn1","Brand"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatacreategrn1["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn1","Description"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatacreategrn1["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn1","Supplier"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacreategrn1["Supplier"] = $fdata;
//	Quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Quantity";
	$fdata["GoodName"] = "Quantity";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn1","Quantity"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
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

	

	
	$tdatacreategrn1["Quantity"] = $fdata;
//	RemovedFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RemovedFrom";
	$fdata["GoodName"] = "RemovedFrom";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn1","RemovedFrom"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacreategrn1["RemovedFrom"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn1","SystemDate"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatacreategrn1["SystemDate"] = $fdata;
//	MAX(GRNDate)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "MAX(GRNDate)";
	$fdata["GoodName"] = "MAX_GRNDate_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("creategrn1","MAX_GRNDate_"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MAX(GRNDate)"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX(GRNDate)";
	
		
		
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

	

	
	$tdatacreategrn1["MAX(GRNDate)"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn1","EnteredBy"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatacreategrn1["EnteredBy"] = $fdata;
//	ApprovedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ApprovedBy";
	$fdata["GoodName"] = "ApprovedBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn1","ApprovedBy"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
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
	
	
	
	

	

	
	$tdatacreategrn1["ApprovedBy"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn1","UnitPrice"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
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

	

	
	$tdatacreategrn1["UnitPrice"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn1","Status"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Receipt - New";
	$edata["LookupValues"][] = "Receipt - Used";
	$edata["LookupValues"][] = "Issue - New";
	$edata["LookupValues"][] = "Issue - Used";

		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacreategrn1["Status"] = $fdata;
//	RefNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RefNumber";
	$fdata["GoodName"] = "RefNumber";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn1","RefNumber"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatacreategrn1["RefNumber"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("creategrn1","Cost"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatacreategrn1["Cost"] = $fdata;
//	SUM(CurrentStock)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "SUM(CurrentStock)";
	$fdata["GoodName"] = "SUM_CurrentStock_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("creategrn1","SUM_CurrentStock_"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "SUM(CurrentStock)"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(CurrentStock)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacreategrn1["SUM(CurrentStock)"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn1","Fleet"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacreategrn1["Fleet"] = $fdata;

	
$tables_data["creategrn1"]=&$tdatacreategrn1;
$field_labels["creategrn1"] = &$fieldLabelscreategrn1;
$fieldToolTips["creategrn1"] = &$fieldToolTipscreategrn1;
$page_titles["creategrn1"] = &$pageTitlescreategrn1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["creategrn1"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["creategrn1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_creategrn1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  MAX(GRNDate) AS `MAX(GRNDate)`,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  UnitPrice*Quantity AS Cost,  SUM(CurrentStock) AS `SUM(CurrentStock)`,  Fleet";
$proto0["m_strFrom"] = "FROM creategrn";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
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
	"m_srcTableName" => "creategrn1"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "creategrn1";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto7["m_sql"] = "ItemCode";
$proto7["m_srcTableName"] = "creategrn1";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto9["m_sql"] = "Brand";
$proto9["m_srcTableName"] = "creategrn1";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto11["m_sql"] = "Description";
$proto11["m_srcTableName"] = "creategrn1";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto13["m_sql"] = "Supplier";
$proto13["m_srcTableName"] = "creategrn1";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto15["m_sql"] = "Quantity";
$proto15["m_srcTableName"] = "creategrn1";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto17["m_sql"] = "RemovedFrom";
$proto17["m_srcTableName"] = "creategrn1";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto19["m_sql"] = "SystemDate";
$proto19["m_srcTableName"] = "creategrn1";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_MAX";
$proto22["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto22);

$proto21["m_sql"] = "MAX(GRNDate)";
$proto21["m_srcTableName"] = "creategrn1";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "MAX(GRNDate)";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto24["m_sql"] = "EnteredBy";
$proto24["m_srcTableName"] = "creategrn1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto26["m_sql"] = "ApprovedBy";
$proto26["m_srcTableName"] = "creategrn1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto28["m_sql"] = "UnitPrice";
$proto28["m_srcTableName"] = "creategrn1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto30["m_sql"] = "Status";
$proto30["m_srcTableName"] = "creategrn1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto32["m_sql"] = "RefNumber";
$proto32["m_srcTableName"] = "creategrn1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "UnitPrice*Quantity"
));

$proto34["m_sql"] = "UnitPrice*Quantity";
$proto34["m_srcTableName"] = "creategrn1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "Cost";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$proto37=array();
$proto37["m_functiontype"] = "SQLF_SUM";
$proto37["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "CurrentStock",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto37["m_arguments"][]=$obj;
$proto37["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto37);

$proto36["m_sql"] = "SUM(CurrentStock)";
$proto36["m_srcTableName"] = "creategrn1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "SUM(CurrentStock)";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto39["m_sql"] = "Fleet";
$proto39["m_srcTableName"] = "creategrn1";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto41=array();
$proto41["m_link"] = "SQLL_MAIN";
			$proto42=array();
$proto42["m_strName"] = "creategrn";
$proto42["m_srcTableName"] = "creategrn1";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "ID";
$proto42["m_columns"][] = "ItemCode";
$proto42["m_columns"][] = "Brand";
$proto42["m_columns"][] = "Description";
$proto42["m_columns"][] = "Supplier";
$proto42["m_columns"][] = "Quantity";
$proto42["m_columns"][] = "RemovedFrom";
$proto42["m_columns"][] = "SystemDate";
$proto42["m_columns"][] = "GRNDate";
$proto42["m_columns"][] = "EnteredBy";
$proto42["m_columns"][] = "ApprovedBy";
$proto42["m_columns"][] = "UnitPrice";
$proto42["m_columns"][] = "Status";
$proto42["m_columns"][] = "RefNumber";
$proto42["m_columns"][] = "CurrentStock";
$proto42["m_columns"][] = "Fleet";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_sql"] = "creategrn";
$proto41["m_alias"] = "";
$proto41["m_srcTableName"] = "creategrn1";
$proto43=array();
$proto43["m_sql"] = "";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto45=array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto45["m_column"]=$obj;
$obj = new SQLGroupByItem($proto45);

$proto0["m_groupby"][]=$obj;
												$proto47=array();
						$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto47["m_column"]=$obj;
$obj = new SQLGroupByItem($proto47);

$proto0["m_groupby"][]=$obj;
												$proto49=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto49["m_column"]=$obj;
$obj = new SQLGroupByItem($proto49);

$proto0["m_groupby"][]=$obj;
												$proto51=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto51["m_column"]=$obj;
$obj = new SQLGroupByItem($proto51);

$proto0["m_groupby"][]=$obj;
												$proto53=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto53["m_column"]=$obj;
$obj = new SQLGroupByItem($proto53);

$proto0["m_groupby"][]=$obj;
												$proto55=array();
						$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto55["m_column"]=$obj;
$obj = new SQLGroupByItem($proto55);

$proto0["m_groupby"][]=$obj;
												$proto57=array();
						$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto57["m_column"]=$obj;
$obj = new SQLGroupByItem($proto57);

$proto0["m_groupby"][]=$obj;
												$proto59=array();
						$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto59["m_column"]=$obj;
$obj = new SQLGroupByItem($proto59);

$proto0["m_groupby"][]=$obj;
												$proto61=array();
						$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto61["m_column"]=$obj;
$obj = new SQLGroupByItem($proto61);

$proto0["m_groupby"][]=$obj;
												$proto63=array();
						$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto63["m_column"]=$obj;
$obj = new SQLGroupByItem($proto63);

$proto0["m_groupby"][]=$obj;
												$proto65=array();
						$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto65["m_column"]=$obj;
$obj = new SQLGroupByItem($proto65);

$proto0["m_groupby"][]=$obj;
												$proto67=array();
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto67["m_column"]=$obj;
$obj = new SQLGroupByItem($proto67);

$proto0["m_groupby"][]=$obj;
												$proto69=array();
						$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto69["m_column"]=$obj;
$obj = new SQLGroupByItem($proto69);

$proto0["m_groupby"][]=$obj;
												$proto71=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "UnitPrice*Quantity"
));

$proto71["m_column"]=$obj;
$obj = new SQLGroupByItem($proto71);

$proto0["m_groupby"][]=$obj;
												$proto73=array();
						$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn1"
));

$proto73["m_column"]=$obj;
$obj = new SQLGroupByItem($proto73);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="creategrn1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_creategrn1 = createSqlQuery_creategrn1();


	
																	
	
$tdatacreategrn1[".sqlquery"] = $queryData_creategrn1;

$tableEvents["creategrn1"] = new eventsBase;
$tdatacreategrn1[".hasEvents"] = false;

?>