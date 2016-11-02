<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainventorymaster_subone3 = array();	
	$tdatainventorymaster_subone3[".truncateText"] = true;
	$tdatainventorymaster_subone3[".NumberOfChars"] = 80; 
	$tdatainventorymaster_subone3[".ShortName"] = "inventorymaster_subone3";
	$tdatainventorymaster_subone3[".OwnerID"] = "";
	$tdatainventorymaster_subone3[".OriginalTable"] = "inventorymaster";

//	field labels
$fieldLabelsinventorymaster_subone3 = array();
$fieldToolTipsinventorymaster_subone3 = array();
$pageTitlesinventorymaster_subone3 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinventorymaster_subone3["English"] = array();
	$fieldToolTipsinventorymaster_subone3["English"] = array();
	$pageTitlesinventorymaster_subone3["English"] = array();
	$fieldLabelsinventorymaster_subone3["English"]["MAX_GRNDate_"] = "MAX(GRNDate)";
	$fieldToolTipsinventorymaster_subone3["English"]["MAX(GRNDate)"] = "";
	$fieldLabelsinventorymaster_subone3["English"]["UnitPrice"] = "Unit Price";
	$fieldToolTipsinventorymaster_subone3["English"]["UnitPrice"] = "";
	if (count($fieldToolTipsinventorymaster_subone3["English"]))
		$tdatainventorymaster_subone3[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinventorymaster_subone3[""] = array();
	$fieldToolTipsinventorymaster_subone3[""] = array();
	$pageTitlesinventorymaster_subone3[""] = array();
	$fieldLabelsinventorymaster_subone3[""]["MAX_GRNDate_"] = "MAX(GRNDate)";
	$fieldToolTipsinventorymaster_subone3[""]["MAX(GRNDate)"] = "";
	$fieldLabelsinventorymaster_subone3[""]["UnitPrice"] = "Unit Price";
	$fieldToolTipsinventorymaster_subone3[""]["UnitPrice"] = "";
	if (count($fieldToolTipsinventorymaster_subone3[""]))
		$tdatainventorymaster_subone3[".isUseToolTips"] = true;
}
	
	
	$tdatainventorymaster_subone3[".NCSearch"] = true;



$tdatainventorymaster_subone3[".shortTableName"] = "inventorymaster_subone3";
$tdatainventorymaster_subone3[".nSecOptions"] = 0;
$tdatainventorymaster_subone3[".recsPerRowList"] = 1;
$tdatainventorymaster_subone3[".recsPerRowPrint"] = 1;
$tdatainventorymaster_subone3[".mainTableOwnerID"] = "";
$tdatainventorymaster_subone3[".moveNext"] = 1;
$tdatainventorymaster_subone3[".entityType"] = 1;

$tdatainventorymaster_subone3[".strOriginalTableName"] = "inventorymaster";




$tdatainventorymaster_subone3[".showAddInPopup"] = false;

$tdatainventorymaster_subone3[".showEditInPopup"] = false;

$tdatainventorymaster_subone3[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainventorymaster_subone3[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainventorymaster_subone3[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatainventorymaster_subone3[".listAjax"] = true;
else 
	$tdatainventorymaster_subone3[".listAjax"] = false;

	$tdatainventorymaster_subone3[".audit"] = false;

	$tdatainventorymaster_subone3[".locking"] = false;


$tdatainventorymaster_subone3[".add"] = true;
$tdatainventorymaster_subone3[".afterAddAction"] = 1;
$tdatainventorymaster_subone3[".closePopupAfterAdd"] = 1;
$tdatainventorymaster_subone3[".afterAddActionDetTable"] = "";

$tdatainventorymaster_subone3[".list"] = true;


$tdatainventorymaster_subone3[".import"] = true;

$tdatainventorymaster_subone3[".exportTo"] = true;

$tdatainventorymaster_subone3[".printFriendly"] = true;


$tdatainventorymaster_subone3[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatainventorymaster_subone3[".searchSaving"] = false;
//

$tdatainventorymaster_subone3[".showSearchPanel"] = true;
		$tdatainventorymaster_subone3[".flexibleSearch"] = true;		

if (isMobile())
	$tdatainventorymaster_subone3[".isUseAjaxSuggest"] = false;
else 
	$tdatainventorymaster_subone3[".isUseAjaxSuggest"] = true;

$tdatainventorymaster_subone3[".rowHighlite"] = true;



$tdatainventorymaster_subone3[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainventorymaster_subone3[".isUseTimeForSearch"] = false;





$tdatainventorymaster_subone3[".allSearchFields"] = array();
$tdatainventorymaster_subone3[".filterFields"] = array();
$tdatainventorymaster_subone3[".requiredSearchFields"] = array();

$tdatainventorymaster_subone3[".allSearchFields"][] = "ItemID";
	$tdatainventorymaster_subone3[".allSearchFields"][] = "Brand";
	$tdatainventorymaster_subone3[".allSearchFields"][] = "Description";
	$tdatainventorymaster_subone3[".allSearchFields"][] = "Supplier";
	$tdatainventorymaster_subone3[".allSearchFields"][] = "UnitPrice";
	$tdatainventorymaster_subone3[".allSearchFields"][] = "SUM(Quantity)";
	$tdatainventorymaster_subone3[".allSearchFields"][] = "MAX(GRNDate)";
	

$tdatainventorymaster_subone3[".googleLikeFields"] = array();
$tdatainventorymaster_subone3[".googleLikeFields"][] = "ItemID";
$tdatainventorymaster_subone3[".googleLikeFields"][] = "Brand";
$tdatainventorymaster_subone3[".googleLikeFields"][] = "Description";
$tdatainventorymaster_subone3[".googleLikeFields"][] = "Supplier";
$tdatainventorymaster_subone3[".googleLikeFields"][] = "UnitPrice";
$tdatainventorymaster_subone3[".googleLikeFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subone3[".googleLikeFields"][] = "MAX(GRNDate)";


$tdatainventorymaster_subone3[".advSearchFields"] = array();
$tdatainventorymaster_subone3[".advSearchFields"][] = "ItemID";
$tdatainventorymaster_subone3[".advSearchFields"][] = "Brand";
$tdatainventorymaster_subone3[".advSearchFields"][] = "Description";
$tdatainventorymaster_subone3[".advSearchFields"][] = "Supplier";
$tdatainventorymaster_subone3[".advSearchFields"][] = "UnitPrice";
$tdatainventorymaster_subone3[".advSearchFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subone3[".advSearchFields"][] = "MAX(GRNDate)";

$tdatainventorymaster_subone3[".tableType"] = "list";

$tdatainventorymaster_subone3[".printerPageOrientation"] = 0;
$tdatainventorymaster_subone3[".nPrinterPageScale"] = 100;

$tdatainventorymaster_subone3[".nPrinterSplitRecords"] = 40;

$tdatainventorymaster_subone3[".nPrinterPDFSplitRecords"] = 40;



$tdatainventorymaster_subone3[".geocodingEnabled"] = false;




	





// view page pdf
$tdatainventorymaster_subone3[".isViewPagePDF"] = true;
$tdatainventorymaster_subone3[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatainventorymaster_subone3[".isPrinterPagePDF"] = true;
$tdatainventorymaster_subone3[".nPrinterPagePDFScale"] = 100;


$tdatainventorymaster_subone3[".pageSize"] = 20;

$tdatainventorymaster_subone3[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainventorymaster_subone3[".strOrderBy"] = $tstrOrderBy;

$tdatainventorymaster_subone3[".orderindexes"] = array();

$tdatainventorymaster_subone3[".sqlHead"] = "SELECT inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  creategrn.UnitPrice,  SUM(creategrn.Quantity) AS `SUM(Quantity)`,  MAX(creategrn.GRNDate) AS `MAX(GRNDate)`";
$tdatainventorymaster_subone3[".sqlFrom"] = "FROM inventorymaster  RIGHT OUTER JOIN creategrn ON creategrn.ItemCode = inventorymaster.ItemID";
$tdatainventorymaster_subone3[".sqlWhereExpr"] = "";
$tdatainventorymaster_subone3[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatainventorymaster_subone3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainventorymaster_subone3[".arrGroupsPerPage"] = $arrGPP;

$tdatainventorymaster_subone3[".highlightSearchResults"] = true;

$tableKeysinventorymaster_subone3 = array();
$tdatainventorymaster_subone3[".Keys"] = $tableKeysinventorymaster_subone3;

$tdatainventorymaster_subone3[".listFields"] = array();
$tdatainventorymaster_subone3[".listFields"][] = "UnitPrice";
$tdatainventorymaster_subone3[".listFields"][] = "MAX(GRNDate)";
$tdatainventorymaster_subone3[".listFields"][] = "ItemID";
$tdatainventorymaster_subone3[".listFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subone3[".listFields"][] = "Brand";
$tdatainventorymaster_subone3[".listFields"][] = "Description";
$tdatainventorymaster_subone3[".listFields"][] = "Supplier";

$tdatainventorymaster_subone3[".hideMobileList"] = array();


$tdatainventorymaster_subone3[".viewFields"] = array();
$tdatainventorymaster_subone3[".viewFields"][] = "ItemID";
$tdatainventorymaster_subone3[".viewFields"][] = "Brand";
$tdatainventorymaster_subone3[".viewFields"][] = "Description";
$tdatainventorymaster_subone3[".viewFields"][] = "Supplier";
$tdatainventorymaster_subone3[".viewFields"][] = "UnitPrice";
$tdatainventorymaster_subone3[".viewFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subone3[".viewFields"][] = "MAX(GRNDate)";

$tdatainventorymaster_subone3[".addFields"] = array();
$tdatainventorymaster_subone3[".addFields"][] = "ItemID";
$tdatainventorymaster_subone3[".addFields"][] = "Brand";
$tdatainventorymaster_subone3[".addFields"][] = "Description";
$tdatainventorymaster_subone3[".addFields"][] = "Supplier";

$tdatainventorymaster_subone3[".masterListFields"] = array();
$tdatainventorymaster_subone3[".masterListFields"][] = "ItemID";
$tdatainventorymaster_subone3[".masterListFields"][] = "Brand";
$tdatainventorymaster_subone3[".masterListFields"][] = "Description";
$tdatainventorymaster_subone3[".masterListFields"][] = "Supplier";
$tdatainventorymaster_subone3[".masterListFields"][] = "UnitPrice";
$tdatainventorymaster_subone3[".masterListFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subone3[".masterListFields"][] = "MAX(GRNDate)";

$tdatainventorymaster_subone3[".inlineAddFields"] = array();
$tdatainventorymaster_subone3[".inlineAddFields"][] = "ItemID";

$tdatainventorymaster_subone3[".editFields"] = array();
$tdatainventorymaster_subone3[".editFields"][] = "ItemID";
$tdatainventorymaster_subone3[".editFields"][] = "Brand";
$tdatainventorymaster_subone3[".editFields"][] = "Description";
$tdatainventorymaster_subone3[".editFields"][] = "Supplier";

$tdatainventorymaster_subone3[".inlineEditFields"] = array();
$tdatainventorymaster_subone3[".inlineEditFields"][] = "ItemID";

$tdatainventorymaster_subone3[".exportFields"] = array();
$tdatainventorymaster_subone3[".exportFields"][] = "ItemID";
$tdatainventorymaster_subone3[".exportFields"][] = "Brand";
$tdatainventorymaster_subone3[".exportFields"][] = "Description";
$tdatainventorymaster_subone3[".exportFields"][] = "Supplier";
$tdatainventorymaster_subone3[".exportFields"][] = "UnitPrice";
$tdatainventorymaster_subone3[".exportFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subone3[".exportFields"][] = "MAX(GRNDate)";

$tdatainventorymaster_subone3[".importFields"] = array();
$tdatainventorymaster_subone3[".importFields"][] = "ItemID";
$tdatainventorymaster_subone3[".importFields"][] = "Brand";
$tdatainventorymaster_subone3[".importFields"][] = "Description";
$tdatainventorymaster_subone3[".importFields"][] = "Supplier";
$tdatainventorymaster_subone3[".importFields"][] = "UnitPrice";
$tdatainventorymaster_subone3[".importFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subone3[".importFields"][] = "MAX(GRNDate)";

$tdatainventorymaster_subone3[".printFields"] = array();
$tdatainventorymaster_subone3[".printFields"][] = "ItemID";
$tdatainventorymaster_subone3[".printFields"][] = "Brand";
$tdatainventorymaster_subone3[".printFields"][] = "Description";
$tdatainventorymaster_subone3[".printFields"][] = "Supplier";
$tdatainventorymaster_subone3[".printFields"][] = "UnitPrice";
$tdatainventorymaster_subone3[".printFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subone3[".printFields"][] = "MAX(GRNDate)";

//	ItemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ItemID";
	$fdata["GoodName"] = "ItemID";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone3","ItemID"); 
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

	

	
	$tdatainventorymaster_subone3["ItemID"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone3","Brand"); 
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

	

	
	$tdatainventorymaster_subone3["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone3","Description"); 
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

	

	
	$tdatainventorymaster_subone3["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone3","Supplier"); 
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

	

	
	$tdatainventorymaster_subone3["Supplier"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone3","UnitPrice"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "UnitPrice"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creategrn.UnitPrice";
	
		
		
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

	

	
	$tdatainventorymaster_subone3["UnitPrice"] = $fdata;
//	SUM(Quantity)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SUM(Quantity)";
	$fdata["GoodName"] = "SUM_Quantity_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone3","SUM_Quantity_"); 
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

	

	
	$tdatainventorymaster_subone3["SUM(Quantity)"] = $fdata;
//	MAX(GRNDate)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MAX(GRNDate)";
	$fdata["GoodName"] = "MAX_GRNDate_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone3","MAX_GRNDate_"); 
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

	

	
	$tdatainventorymaster_subone3["MAX(GRNDate)"] = $fdata;

	
$tables_data["inventorymaster-subone3"]=&$tdatainventorymaster_subone3;
$field_labels["inventorymaster_subone3"] = &$fieldLabelsinventorymaster_subone3;
$fieldToolTips["inventorymaster-subone3"] = &$fieldToolTipsinventorymaster_subone3;
$page_titles["inventorymaster_subone3"] = &$pageTitlesinventorymaster_subone3;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inventorymaster-subone3"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["inventorymaster-subone3"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inventorymaster_subone3()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  creategrn.UnitPrice,  SUM(creategrn.Quantity) AS `SUM(Quantity)`,  MAX(creategrn.GRNDate) AS `MAX(GRNDate)`";
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
	"m_srcTableName" => "inventorymaster-subone3"
));

$proto5["m_sql"] = "inventorymaster.ItemID";
$proto5["m_srcTableName"] = "inventorymaster-subone3";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone3"
));

$proto7["m_sql"] = "inventorymaster.Brand";
$proto7["m_srcTableName"] = "inventorymaster-subone3";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone3"
));

$proto9["m_sql"] = "inventorymaster.Description";
$proto9["m_srcTableName"] = "inventorymaster-subone3";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone3"
));

$proto11["m_sql"] = "inventorymaster.Supplier";
$proto11["m_srcTableName"] = "inventorymaster-subone3";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone3"
));

$proto13["m_sql"] = "creategrn.UnitPrice";
$proto13["m_srcTableName"] = "inventorymaster-subone3";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$proto16=array();
$proto16["m_functiontype"] = "SQLF_SUM";
$proto16["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone3"
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "SUM(creategrn.Quantity)";
$proto15["m_srcTableName"] = "inventorymaster-subone3";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "SUM(Quantity)";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_MAX";
$proto19["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone3"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "MAX(creategrn.GRNDate)";
$proto18["m_srcTableName"] = "inventorymaster-subone3";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "MAX(GRNDate)";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "inventorymaster";
$proto22["m_srcTableName"] = "inventorymaster-subone3";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "Id";
$proto22["m_columns"][] = "ItemID";
$proto22["m_columns"][] = "Brand";
$proto22["m_columns"][] = "Description";
$proto22["m_columns"][] = "Supplier";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "inventorymaster";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "inventorymaster-subone3";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
												$proto25=array();
$proto25["m_link"] = "SQLL_RIGHTJOIN";
			$proto26=array();
$proto26["m_strName"] = "creategrn";
$proto26["m_srcTableName"] = "inventorymaster-subone3";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "ID";
$proto26["m_columns"][] = "ItemCode";
$proto26["m_columns"][] = "Brand";
$proto26["m_columns"][] = "Description";
$proto26["m_columns"][] = "Supplier";
$proto26["m_columns"][] = "Quantity";
$proto26["m_columns"][] = "RemovedFrom";
$proto26["m_columns"][] = "SystemDate";
$proto26["m_columns"][] = "GRNDate";
$proto26["m_columns"][] = "EnteredBy";
$proto26["m_columns"][] = "ApprovedBy";
$proto26["m_columns"][] = "UnitPrice";
$proto26["m_columns"][] = "Status";
$proto26["m_columns"][] = "RefNumber";
$proto26["m_columns"][] = "CurrentStock";
$proto26["m_columns"][] = "Fleet";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "RIGHT OUTER JOIN creategrn ON creategrn.ItemCode = inventorymaster.ItemID";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "inventorymaster-subone3";
$proto27=array();
$proto27["m_sql"] = "creategrn.ItemCode = inventorymaster.ItemID";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone3"
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "= inventorymaster.ItemID";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone3"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone3"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone3"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone3"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone3"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="inventorymaster-subone3";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inventorymaster_subone3 = createSqlQuery_inventorymaster_subone3();


	
							
	
$tdatainventorymaster_subone3[".sqlquery"] = $queryData_inventorymaster_subone3;

$tableEvents["inventorymaster-subone3"] = new eventsBase;
$tdatainventorymaster_subone3[".hasEvents"] = false;

?>