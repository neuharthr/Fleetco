<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainventorymaster_subone211 = array();	
	$tdatainventorymaster_subone211[".truncateText"] = true;
	$tdatainventorymaster_subone211[".NumberOfChars"] = 80; 
	$tdatainventorymaster_subone211[".ShortName"] = "inventorymaster_subone211";
	$tdatainventorymaster_subone211[".OwnerID"] = "";
	$tdatainventorymaster_subone211[".OriginalTable"] = "inventorymaster";

//	field labels
$fieldLabelsinventorymaster_subone211 = array();
$fieldToolTipsinventorymaster_subone211 = array();
$pageTitlesinventorymaster_subone211 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinventorymaster_subone211["English"] = array();
	$fieldToolTipsinventorymaster_subone211["English"] = array();
	$pageTitlesinventorymaster_subone211["English"] = array();
	$fieldLabelsinventorymaster_subone211["English"]["MAX_UnitPrice_"] = "MAX(Unit Price)";
	$fieldToolTipsinventorymaster_subone211["English"]["MAX(UnitPrice)"] = "";
	$fieldLabelsinventorymaster_subone211["English"]["MAX_GRNDate_"] = "MAX(GRNDate)";
	$fieldToolTipsinventorymaster_subone211["English"]["MAX(GRNDate)"] = "";
	if (count($fieldToolTipsinventorymaster_subone211["English"]))
		$tdatainventorymaster_subone211[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinventorymaster_subone211[""] = array();
	$fieldToolTipsinventorymaster_subone211[""] = array();
	$pageTitlesinventorymaster_subone211[""] = array();
	$fieldLabelsinventorymaster_subone211[""]["MAX_UnitPrice_"] = "MAX(Unit Price)";
	$fieldToolTipsinventorymaster_subone211[""]["MAX(UnitPrice)"] = "";
	$fieldLabelsinventorymaster_subone211[""]["MAX_GRNDate_"] = "MAX(GRNDate)";
	$fieldToolTipsinventorymaster_subone211[""]["MAX(GRNDate)"] = "";
	if (count($fieldToolTipsinventorymaster_subone211[""]))
		$tdatainventorymaster_subone211[".isUseToolTips"] = true;
}
	
	
	$tdatainventorymaster_subone211[".NCSearch"] = true;



$tdatainventorymaster_subone211[".shortTableName"] = "inventorymaster_subone211";
$tdatainventorymaster_subone211[".nSecOptions"] = 0;
$tdatainventorymaster_subone211[".recsPerRowList"] = 1;
$tdatainventorymaster_subone211[".recsPerRowPrint"] = 1;
$tdatainventorymaster_subone211[".mainTableOwnerID"] = "";
$tdatainventorymaster_subone211[".moveNext"] = 1;
$tdatainventorymaster_subone211[".entityType"] = 1;

$tdatainventorymaster_subone211[".strOriginalTableName"] = "inventorymaster";




$tdatainventorymaster_subone211[".showAddInPopup"] = false;

$tdatainventorymaster_subone211[".showEditInPopup"] = false;

$tdatainventorymaster_subone211[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainventorymaster_subone211[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainventorymaster_subone211[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatainventorymaster_subone211[".listAjax"] = true;
else 
	$tdatainventorymaster_subone211[".listAjax"] = false;

	$tdatainventorymaster_subone211[".audit"] = false;

	$tdatainventorymaster_subone211[".locking"] = false;


$tdatainventorymaster_subone211[".add"] = true;
$tdatainventorymaster_subone211[".afterAddAction"] = 1;
$tdatainventorymaster_subone211[".closePopupAfterAdd"] = 1;
$tdatainventorymaster_subone211[".afterAddActionDetTable"] = "";

$tdatainventorymaster_subone211[".list"] = true;


$tdatainventorymaster_subone211[".import"] = true;

$tdatainventorymaster_subone211[".exportTo"] = true;

$tdatainventorymaster_subone211[".printFriendly"] = true;


$tdatainventorymaster_subone211[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatainventorymaster_subone211[".searchSaving"] = false;
//

$tdatainventorymaster_subone211[".showSearchPanel"] = true;
		$tdatainventorymaster_subone211[".flexibleSearch"] = true;		

if (isMobile())
	$tdatainventorymaster_subone211[".isUseAjaxSuggest"] = false;
else 
	$tdatainventorymaster_subone211[".isUseAjaxSuggest"] = true;

$tdatainventorymaster_subone211[".rowHighlite"] = true;



$tdatainventorymaster_subone211[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainventorymaster_subone211[".isUseTimeForSearch"] = false;





$tdatainventorymaster_subone211[".allSearchFields"] = array();
$tdatainventorymaster_subone211[".filterFields"] = array();
$tdatainventorymaster_subone211[".requiredSearchFields"] = array();

$tdatainventorymaster_subone211[".allSearchFields"][] = "ItemID";
	$tdatainventorymaster_subone211[".allSearchFields"][] = "Brand";
	$tdatainventorymaster_subone211[".allSearchFields"][] = "Description";
	$tdatainventorymaster_subone211[".allSearchFields"][] = "Supplier";
	$tdatainventorymaster_subone211[".allSearchFields"][] = "MAX(UnitPrice)";
	$tdatainventorymaster_subone211[".allSearchFields"][] = "SUM(Quantity)";
	$tdatainventorymaster_subone211[".allSearchFields"][] = "MAX(GRNDate)";
	

$tdatainventorymaster_subone211[".googleLikeFields"] = array();
$tdatainventorymaster_subone211[".googleLikeFields"][] = "ItemID";
$tdatainventorymaster_subone211[".googleLikeFields"][] = "Brand";
$tdatainventorymaster_subone211[".googleLikeFields"][] = "Description";
$tdatainventorymaster_subone211[".googleLikeFields"][] = "Supplier";
$tdatainventorymaster_subone211[".googleLikeFields"][] = "MAX(UnitPrice)";
$tdatainventorymaster_subone211[".googleLikeFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subone211[".googleLikeFields"][] = "MAX(GRNDate)";


$tdatainventorymaster_subone211[".advSearchFields"] = array();
$tdatainventorymaster_subone211[".advSearchFields"][] = "ItemID";
$tdatainventorymaster_subone211[".advSearchFields"][] = "Brand";
$tdatainventorymaster_subone211[".advSearchFields"][] = "Description";
$tdatainventorymaster_subone211[".advSearchFields"][] = "Supplier";
$tdatainventorymaster_subone211[".advSearchFields"][] = "MAX(UnitPrice)";
$tdatainventorymaster_subone211[".advSearchFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subone211[".advSearchFields"][] = "MAX(GRNDate)";

$tdatainventorymaster_subone211[".tableType"] = "list";

$tdatainventorymaster_subone211[".printerPageOrientation"] = 0;
$tdatainventorymaster_subone211[".nPrinterPageScale"] = 100;

$tdatainventorymaster_subone211[".nPrinterSplitRecords"] = 40;

$tdatainventorymaster_subone211[".nPrinterPDFSplitRecords"] = 40;



$tdatainventorymaster_subone211[".geocodingEnabled"] = false;




	





// view page pdf
$tdatainventorymaster_subone211[".isViewPagePDF"] = true;
$tdatainventorymaster_subone211[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatainventorymaster_subone211[".isPrinterPagePDF"] = true;
$tdatainventorymaster_subone211[".nPrinterPagePDFScale"] = 100;


$tdatainventorymaster_subone211[".pageSize"] = 20;

$tdatainventorymaster_subone211[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainventorymaster_subone211[".strOrderBy"] = $tstrOrderBy;

$tdatainventorymaster_subone211[".orderindexes"] = array();

$tdatainventorymaster_subone211[".sqlHead"] = "SELECT inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  MAX(creategrn.UnitPrice) AS `MAX(UnitPrice)`,  SUM(creategrn.Quantity) AS `SUM(Quantity)`,  MAX(creategrn.GRNDate) AS `MAX(GRNDate)`";
$tdatainventorymaster_subone211[".sqlFrom"] = "FROM inventorymaster  RIGHT OUTER JOIN creategrn ON creategrn.ItemCode = inventorymaster.ItemID";
$tdatainventorymaster_subone211[".sqlWhereExpr"] = "";
$tdatainventorymaster_subone211[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatainventorymaster_subone211[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainventorymaster_subone211[".arrGroupsPerPage"] = $arrGPP;

$tdatainventorymaster_subone211[".highlightSearchResults"] = true;

$tableKeysinventorymaster_subone211 = array();
$tdatainventorymaster_subone211[".Keys"] = $tableKeysinventorymaster_subone211;

$tdatainventorymaster_subone211[".listFields"] = array();
$tdatainventorymaster_subone211[".listFields"][] = "MAX(UnitPrice)";
$tdatainventorymaster_subone211[".listFields"][] = "MAX(GRNDate)";
$tdatainventorymaster_subone211[".listFields"][] = "ItemID";
$tdatainventorymaster_subone211[".listFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subone211[".listFields"][] = "Brand";
$tdatainventorymaster_subone211[".listFields"][] = "Description";
$tdatainventorymaster_subone211[".listFields"][] = "Supplier";

$tdatainventorymaster_subone211[".hideMobileList"] = array();


$tdatainventorymaster_subone211[".viewFields"] = array();
$tdatainventorymaster_subone211[".viewFields"][] = "ItemID";
$tdatainventorymaster_subone211[".viewFields"][] = "Brand";
$tdatainventorymaster_subone211[".viewFields"][] = "Description";
$tdatainventorymaster_subone211[".viewFields"][] = "Supplier";
$tdatainventorymaster_subone211[".viewFields"][] = "MAX(UnitPrice)";
$tdatainventorymaster_subone211[".viewFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subone211[".viewFields"][] = "MAX(GRNDate)";

$tdatainventorymaster_subone211[".addFields"] = array();
$tdatainventorymaster_subone211[".addFields"][] = "ItemID";
$tdatainventorymaster_subone211[".addFields"][] = "Brand";
$tdatainventorymaster_subone211[".addFields"][] = "Description";
$tdatainventorymaster_subone211[".addFields"][] = "Supplier";

$tdatainventorymaster_subone211[".masterListFields"] = array();
$tdatainventorymaster_subone211[".masterListFields"][] = "ItemID";
$tdatainventorymaster_subone211[".masterListFields"][] = "Brand";
$tdatainventorymaster_subone211[".masterListFields"][] = "Description";
$tdatainventorymaster_subone211[".masterListFields"][] = "Supplier";
$tdatainventorymaster_subone211[".masterListFields"][] = "MAX(UnitPrice)";
$tdatainventorymaster_subone211[".masterListFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subone211[".masterListFields"][] = "MAX(GRNDate)";

$tdatainventorymaster_subone211[".inlineAddFields"] = array();
$tdatainventorymaster_subone211[".inlineAddFields"][] = "ItemID";

$tdatainventorymaster_subone211[".editFields"] = array();
$tdatainventorymaster_subone211[".editFields"][] = "ItemID";
$tdatainventorymaster_subone211[".editFields"][] = "Brand";
$tdatainventorymaster_subone211[".editFields"][] = "Description";
$tdatainventorymaster_subone211[".editFields"][] = "Supplier";

$tdatainventorymaster_subone211[".inlineEditFields"] = array();
$tdatainventorymaster_subone211[".inlineEditFields"][] = "ItemID";

$tdatainventorymaster_subone211[".exportFields"] = array();
$tdatainventorymaster_subone211[".exportFields"][] = "ItemID";
$tdatainventorymaster_subone211[".exportFields"][] = "Brand";
$tdatainventorymaster_subone211[".exportFields"][] = "Description";
$tdatainventorymaster_subone211[".exportFields"][] = "Supplier";
$tdatainventorymaster_subone211[".exportFields"][] = "MAX(UnitPrice)";
$tdatainventorymaster_subone211[".exportFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subone211[".exportFields"][] = "MAX(GRNDate)";

$tdatainventorymaster_subone211[".importFields"] = array();
$tdatainventorymaster_subone211[".importFields"][] = "ItemID";
$tdatainventorymaster_subone211[".importFields"][] = "Brand";
$tdatainventorymaster_subone211[".importFields"][] = "Description";
$tdatainventorymaster_subone211[".importFields"][] = "Supplier";
$tdatainventorymaster_subone211[".importFields"][] = "MAX(UnitPrice)";
$tdatainventorymaster_subone211[".importFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subone211[".importFields"][] = "MAX(GRNDate)";

$tdatainventorymaster_subone211[".printFields"] = array();
$tdatainventorymaster_subone211[".printFields"][] = "ItemID";
$tdatainventorymaster_subone211[".printFields"][] = "Brand";
$tdatainventorymaster_subone211[".printFields"][] = "Description";
$tdatainventorymaster_subone211[".printFields"][] = "Supplier";
$tdatainventorymaster_subone211[".printFields"][] = "MAX(UnitPrice)";
$tdatainventorymaster_subone211[".printFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subone211[".printFields"][] = "MAX(GRNDate)";

//	ItemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ItemID";
	$fdata["GoodName"] = "ItemID";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone211","ItemID"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ItemID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inventorymaster.ItemID";
	
		
		
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

	

	
	$tdatainventorymaster_subone211["ItemID"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone211","Brand"); 
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
	$fdata["FullName"] = "inventorymaster.Brand";
	
		
		
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

	

	
	$tdatainventorymaster_subone211["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone211","Description"); 
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
	$fdata["FullName"] = "inventorymaster.Description";
	
		
		
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

	

	
	$tdatainventorymaster_subone211["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone211","Supplier"); 
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
	$fdata["FullName"] = "inventorymaster.Supplier";
	
		
		
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

	

	
	$tdatainventorymaster_subone211["Supplier"] = $fdata;
//	MAX(UnitPrice)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MAX(UnitPrice)";
	$fdata["GoodName"] = "MAX_UnitPrice_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone211","MAX_UnitPrice_"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MAX(UnitPrice)"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX(creategrn.UnitPrice)";
	
		
		
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

	

	
	$tdatainventorymaster_subone211["MAX(UnitPrice)"] = $fdata;
//	SUM(Quantity)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SUM(Quantity)";
	$fdata["GoodName"] = "SUM_Quantity_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone211","SUM_Quantity_"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "SUM(Quantity)"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(creategrn.Quantity)";
	
		
		
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

	

	
	$tdatainventorymaster_subone211["SUM(Quantity)"] = $fdata;
//	MAX(GRNDate)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MAX(GRNDate)";
	$fdata["GoodName"] = "MAX_GRNDate_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone211","MAX_GRNDate_"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MAX(GRNDate)"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX(creategrn.GRNDate)";
	
		
		
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

	

	
	$tdatainventorymaster_subone211["MAX(GRNDate)"] = $fdata;

	
$tables_data["inventorymaster-subone211"]=&$tdatainventorymaster_subone211;
$field_labels["inventorymaster_subone211"] = &$fieldLabelsinventorymaster_subone211;
$fieldToolTips["inventorymaster-subone211"] = &$fieldToolTipsinventorymaster_subone211;
$page_titles["inventorymaster_subone211"] = &$pageTitlesinventorymaster_subone211;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inventorymaster-subone211"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["inventorymaster-subone211"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inventorymaster_subone211()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  MAX(creategrn.UnitPrice) AS `MAX(UnitPrice)`,  SUM(creategrn.Quantity) AS `SUM(Quantity)`,  MAX(creategrn.GRNDate) AS `MAX(GRNDate)`";
$proto0["m_strFrom"] = "FROM inventorymaster  RIGHT OUTER JOIN creategrn ON creategrn.ItemCode = inventorymaster.ItemID";
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
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone211"
));

$proto5["m_sql"] = "inventorymaster.ItemID";
$proto5["m_srcTableName"] = "inventorymaster-subone211";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone211"
));

$proto7["m_sql"] = "inventorymaster.Brand";
$proto7["m_srcTableName"] = "inventorymaster-subone211";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone211"
));

$proto9["m_sql"] = "inventorymaster.Description";
$proto9["m_srcTableName"] = "inventorymaster-subone211";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone211"
));

$proto11["m_sql"] = "inventorymaster.Supplier";
$proto11["m_srcTableName"] = "inventorymaster-subone211";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$proto14=array();
$proto14["m_functiontype"] = "SQLF_MAX";
$proto14["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone211"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto14);

$proto13["m_sql"] = "MAX(creategrn.UnitPrice)";
$proto13["m_srcTableName"] = "inventorymaster-subone211";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "MAX(UnitPrice)";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_SUM";
$proto17["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone211"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "SUM(creategrn.Quantity)";
$proto16["m_srcTableName"] = "inventorymaster-subone211";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "SUM(Quantity)";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$proto20=array();
$proto20["m_functiontype"] = "SQLF_MAX";
$proto20["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone211"
));

$proto20["m_arguments"][]=$obj;
$proto20["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto20);

$proto19["m_sql"] = "MAX(creategrn.GRNDate)";
$proto19["m_srcTableName"] = "inventorymaster-subone211";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "MAX(GRNDate)";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "inventorymaster";
$proto23["m_srcTableName"] = "inventorymaster-subone211";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "Id";
$proto23["m_columns"][] = "ItemID";
$proto23["m_columns"][] = "Brand";
$proto23["m_columns"][] = "Description";
$proto23["m_columns"][] = "Supplier";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "inventorymaster";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "inventorymaster-subone211";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
												$proto26=array();
$proto26["m_link"] = "SQLL_RIGHTJOIN";
			$proto27=array();
$proto27["m_strName"] = "creategrn";
$proto27["m_srcTableName"] = "inventorymaster-subone211";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "ID";
$proto27["m_columns"][] = "ItemCode";
$proto27["m_columns"][] = "Brand";
$proto27["m_columns"][] = "Description";
$proto27["m_columns"][] = "Supplier";
$proto27["m_columns"][] = "Quantity";
$proto27["m_columns"][] = "RemovedFrom";
$proto27["m_columns"][] = "SystemDate";
$proto27["m_columns"][] = "GRNDate";
$proto27["m_columns"][] = "EnteredBy";
$proto27["m_columns"][] = "ApprovedBy";
$proto27["m_columns"][] = "UnitPrice";
$proto27["m_columns"][] = "Status";
$proto27["m_columns"][] = "RefNumber";
$proto27["m_columns"][] = "CurrentStock";
$proto27["m_columns"][] = "Fleet";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "RIGHT OUTER JOIN creategrn ON creategrn.ItemCode = inventorymaster.ItemID";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "inventorymaster-subone211";
$proto28=array();
$proto28["m_sql"] = "creategrn.ItemCode = inventorymaster.ItemID";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone211"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "= inventorymaster.ItemID";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone211"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone211"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone211"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone211"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="inventorymaster-subone211";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inventorymaster_subone211 = createSqlQuery_inventorymaster_subone211();


	
							
	
$tdatainventorymaster_subone211[".sqlquery"] = $queryData_inventorymaster_subone211;

$tableEvents["inventorymaster-subone211"] = new eventsBase;
$tdatainventorymaster_subone211[".hasEvents"] = false;

?>