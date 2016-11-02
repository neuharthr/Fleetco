<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainventorymaster_subone1 = array();	
	$tdatainventorymaster_subone1[".truncateText"] = true;
	$tdatainventorymaster_subone1[".NumberOfChars"] = 80; 
	$tdatainventorymaster_subone1[".ShortName"] = "inventorymaster_subone1";
	$tdatainventorymaster_subone1[".OwnerID"] = "";
	$tdatainventorymaster_subone1[".OriginalTable"] = "inventorymaster";

//	field labels
$fieldLabelsinventorymaster_subone1 = array();
$fieldToolTipsinventorymaster_subone1 = array();
$pageTitlesinventorymaster_subone1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinventorymaster_subone1["English"] = array();
	$fieldToolTipsinventorymaster_subone1["English"] = array();
	$pageTitlesinventorymaster_subone1["English"] = array();
	$fieldLabelsinventorymaster_subone1["English"]["ItemID"] = "Item ID";
	$fieldToolTipsinventorymaster_subone1["English"]["ItemID"] = "";
	$fieldLabelsinventorymaster_subone1["English"]["Brand"] = "Brand";
	$fieldToolTipsinventorymaster_subone1["English"]["Brand"] = "";
	$fieldLabelsinventorymaster_subone1["English"]["Description"] = "Description";
	$fieldToolTipsinventorymaster_subone1["English"]["Description"] = "";
	$fieldLabelsinventorymaster_subone1["English"]["Supplier"] = "Supplier";
	$fieldToolTipsinventorymaster_subone1["English"]["Supplier"] = "";
	$fieldLabelsinventorymaster_subone1["English"]["SUM_Quantity_"] = "SUM(Quantity)";
	$fieldToolTipsinventorymaster_subone1["English"]["SUM(Quantity)"] = "";
	$fieldLabelsinventorymaster_subone1["English"]["MAX_Id_"] = "MAX(Id)";
	$fieldToolTipsinventorymaster_subone1["English"]["MAX(Id)"] = "";
	$fieldLabelsinventorymaster_subone1["English"]["UnitPrice"] = "Unit Price";
	$fieldToolTipsinventorymaster_subone1["English"]["UnitPrice"] = "";
	if (count($fieldToolTipsinventorymaster_subone1["English"]))
		$tdatainventorymaster_subone1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinventorymaster_subone1[""] = array();
	$fieldToolTipsinventorymaster_subone1[""] = array();
	$pageTitlesinventorymaster_subone1[""] = array();
	$fieldLabelsinventorymaster_subone1[""]["MAX_Id_"] = "MAX(Id)";
	$fieldToolTipsinventorymaster_subone1[""]["MAX(Id)"] = "";
	$fieldLabelsinventorymaster_subone1[""]["UnitPrice"] = "Unit Price";
	$fieldToolTipsinventorymaster_subone1[""]["UnitPrice"] = "";
	if (count($fieldToolTipsinventorymaster_subone1[""]))
		$tdatainventorymaster_subone1[".isUseToolTips"] = true;
}
	
	
	$tdatainventorymaster_subone1[".NCSearch"] = true;



$tdatainventorymaster_subone1[".shortTableName"] = "inventorymaster_subone1";
$tdatainventorymaster_subone1[".nSecOptions"] = 0;
$tdatainventorymaster_subone1[".recsPerRowList"] = 1;
$tdatainventorymaster_subone1[".recsPerRowPrint"] = 1;
$tdatainventorymaster_subone1[".mainTableOwnerID"] = "";
$tdatainventorymaster_subone1[".moveNext"] = 1;
$tdatainventorymaster_subone1[".entityType"] = 1;

$tdatainventorymaster_subone1[".strOriginalTableName"] = "inventorymaster";




$tdatainventorymaster_subone1[".showAddInPopup"] = false;

$tdatainventorymaster_subone1[".showEditInPopup"] = false;

$tdatainventorymaster_subone1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainventorymaster_subone1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainventorymaster_subone1[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatainventorymaster_subone1[".listAjax"] = true;
else 
	$tdatainventorymaster_subone1[".listAjax"] = false;

	$tdatainventorymaster_subone1[".audit"] = false;

	$tdatainventorymaster_subone1[".locking"] = false;


$tdatainventorymaster_subone1[".add"] = true;
$tdatainventorymaster_subone1[".afterAddAction"] = 1;
$tdatainventorymaster_subone1[".closePopupAfterAdd"] = 1;
$tdatainventorymaster_subone1[".afterAddActionDetTable"] = "";

$tdatainventorymaster_subone1[".list"] = true;


$tdatainventorymaster_subone1[".import"] = true;

$tdatainventorymaster_subone1[".exportTo"] = true;

$tdatainventorymaster_subone1[".printFriendly"] = true;


$tdatainventorymaster_subone1[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatainventorymaster_subone1[".searchSaving"] = false;
//

$tdatainventorymaster_subone1[".showSearchPanel"] = true;
		$tdatainventorymaster_subone1[".flexibleSearch"] = true;		

if (isMobile())
	$tdatainventorymaster_subone1[".isUseAjaxSuggest"] = false;
else 
	$tdatainventorymaster_subone1[".isUseAjaxSuggest"] = true;

$tdatainventorymaster_subone1[".rowHighlite"] = true;



$tdatainventorymaster_subone1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainventorymaster_subone1[".isUseTimeForSearch"] = false;





$tdatainventorymaster_subone1[".allSearchFields"] = array();
$tdatainventorymaster_subone1[".filterFields"] = array();
$tdatainventorymaster_subone1[".requiredSearchFields"] = array();

$tdatainventorymaster_subone1[".allSearchFields"][] = "MAX(Id)";
	$tdatainventorymaster_subone1[".allSearchFields"][] = "ItemID";
	$tdatainventorymaster_subone1[".allSearchFields"][] = "Brand";
	$tdatainventorymaster_subone1[".allSearchFields"][] = "Description";
	$tdatainventorymaster_subone1[".allSearchFields"][] = "Supplier";
	$tdatainventorymaster_subone1[".allSearchFields"][] = "UnitPrice";
	$tdatainventorymaster_subone1[".allSearchFields"][] = "SUM(Quantity)";
	

$tdatainventorymaster_subone1[".googleLikeFields"] = array();
$tdatainventorymaster_subone1[".googleLikeFields"][] = "MAX(Id)";
$tdatainventorymaster_subone1[".googleLikeFields"][] = "ItemID";
$tdatainventorymaster_subone1[".googleLikeFields"][] = "Brand";
$tdatainventorymaster_subone1[".googleLikeFields"][] = "Description";
$tdatainventorymaster_subone1[".googleLikeFields"][] = "Supplier";
$tdatainventorymaster_subone1[".googleLikeFields"][] = "UnitPrice";
$tdatainventorymaster_subone1[".googleLikeFields"][] = "SUM(Quantity)";


$tdatainventorymaster_subone1[".advSearchFields"] = array();
$tdatainventorymaster_subone1[".advSearchFields"][] = "MAX(Id)";
$tdatainventorymaster_subone1[".advSearchFields"][] = "ItemID";
$tdatainventorymaster_subone1[".advSearchFields"][] = "Brand";
$tdatainventorymaster_subone1[".advSearchFields"][] = "Description";
$tdatainventorymaster_subone1[".advSearchFields"][] = "Supplier";
$tdatainventorymaster_subone1[".advSearchFields"][] = "UnitPrice";
$tdatainventorymaster_subone1[".advSearchFields"][] = "SUM(Quantity)";

$tdatainventorymaster_subone1[".tableType"] = "list";

$tdatainventorymaster_subone1[".printerPageOrientation"] = 0;
$tdatainventorymaster_subone1[".nPrinterPageScale"] = 100;

$tdatainventorymaster_subone1[".nPrinterSplitRecords"] = 40;

$tdatainventorymaster_subone1[".nPrinterPDFSplitRecords"] = 40;



$tdatainventorymaster_subone1[".geocodingEnabled"] = false;




	





// view page pdf
$tdatainventorymaster_subone1[".isViewPagePDF"] = true;
$tdatainventorymaster_subone1[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatainventorymaster_subone1[".isPrinterPagePDF"] = true;
$tdatainventorymaster_subone1[".nPrinterPagePDFScale"] = 100;


$tdatainventorymaster_subone1[".pageSize"] = 20;

$tdatainventorymaster_subone1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainventorymaster_subone1[".strOrderBy"] = $tstrOrderBy;

$tdatainventorymaster_subone1[".orderindexes"] = array();

$tdatainventorymaster_subone1[".sqlHead"] = "SELECT MAX(inventorymaster.Id) AS `MAX(Id)`,  inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  creategrn.UnitPrice,  SUM(creategrn.Quantity) AS `SUM(Quantity)`";
$tdatainventorymaster_subone1[".sqlFrom"] = "FROM inventorymaster  RIGHT OUTER JOIN creategrn ON creategrn.ItemCode = inventorymaster.ItemID";
$tdatainventorymaster_subone1[".sqlWhereExpr"] = "";
$tdatainventorymaster_subone1[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatainventorymaster_subone1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainventorymaster_subone1[".arrGroupsPerPage"] = $arrGPP;

$tdatainventorymaster_subone1[".highlightSearchResults"] = true;

$tableKeysinventorymaster_subone1 = array();
$tdatainventorymaster_subone1[".Keys"] = $tableKeysinventorymaster_subone1;

$tdatainventorymaster_subone1[".listFields"] = array();
$tdatainventorymaster_subone1[".listFields"][] = "UnitPrice";
$tdatainventorymaster_subone1[".listFields"][] = "MAX(Id)";
$tdatainventorymaster_subone1[".listFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subone1[".listFields"][] = "ItemID";
$tdatainventorymaster_subone1[".listFields"][] = "Brand";
$tdatainventorymaster_subone1[".listFields"][] = "Description";
$tdatainventorymaster_subone1[".listFields"][] = "Supplier";

$tdatainventorymaster_subone1[".hideMobileList"] = array();


$tdatainventorymaster_subone1[".viewFields"] = array();
$tdatainventorymaster_subone1[".viewFields"][] = "MAX(Id)";
$tdatainventorymaster_subone1[".viewFields"][] = "ItemID";
$tdatainventorymaster_subone1[".viewFields"][] = "Brand";
$tdatainventorymaster_subone1[".viewFields"][] = "Description";
$tdatainventorymaster_subone1[".viewFields"][] = "Supplier";
$tdatainventorymaster_subone1[".viewFields"][] = "UnitPrice";
$tdatainventorymaster_subone1[".viewFields"][] = "SUM(Quantity)";

$tdatainventorymaster_subone1[".addFields"] = array();
$tdatainventorymaster_subone1[".addFields"][] = "ItemID";
$tdatainventorymaster_subone1[".addFields"][] = "Brand";
$tdatainventorymaster_subone1[".addFields"][] = "Description";
$tdatainventorymaster_subone1[".addFields"][] = "Supplier";

$tdatainventorymaster_subone1[".masterListFields"] = array();
$tdatainventorymaster_subone1[".masterListFields"][] = "MAX(Id)";
$tdatainventorymaster_subone1[".masterListFields"][] = "ItemID";
$tdatainventorymaster_subone1[".masterListFields"][] = "Brand";
$tdatainventorymaster_subone1[".masterListFields"][] = "Description";
$tdatainventorymaster_subone1[".masterListFields"][] = "Supplier";
$tdatainventorymaster_subone1[".masterListFields"][] = "UnitPrice";
$tdatainventorymaster_subone1[".masterListFields"][] = "SUM(Quantity)";

$tdatainventorymaster_subone1[".inlineAddFields"] = array();

$tdatainventorymaster_subone1[".editFields"] = array();
$tdatainventorymaster_subone1[".editFields"][] = "ItemID";
$tdatainventorymaster_subone1[".editFields"][] = "Brand";
$tdatainventorymaster_subone1[".editFields"][] = "Description";
$tdatainventorymaster_subone1[".editFields"][] = "Supplier";

$tdatainventorymaster_subone1[".inlineEditFields"] = array();

$tdatainventorymaster_subone1[".exportFields"] = array();
$tdatainventorymaster_subone1[".exportFields"][] = "MAX(Id)";
$tdatainventorymaster_subone1[".exportFields"][] = "ItemID";
$tdatainventorymaster_subone1[".exportFields"][] = "Brand";
$tdatainventorymaster_subone1[".exportFields"][] = "Description";
$tdatainventorymaster_subone1[".exportFields"][] = "Supplier";
$tdatainventorymaster_subone1[".exportFields"][] = "UnitPrice";
$tdatainventorymaster_subone1[".exportFields"][] = "SUM(Quantity)";

$tdatainventorymaster_subone1[".importFields"] = array();
$tdatainventorymaster_subone1[".importFields"][] = "MAX(Id)";
$tdatainventorymaster_subone1[".importFields"][] = "ItemID";
$tdatainventorymaster_subone1[".importFields"][] = "Brand";
$tdatainventorymaster_subone1[".importFields"][] = "Description";
$tdatainventorymaster_subone1[".importFields"][] = "Supplier";
$tdatainventorymaster_subone1[".importFields"][] = "UnitPrice";
$tdatainventorymaster_subone1[".importFields"][] = "SUM(Quantity)";

$tdatainventorymaster_subone1[".printFields"] = array();
$tdatainventorymaster_subone1[".printFields"][] = "MAX(Id)";
$tdatainventorymaster_subone1[".printFields"][] = "ItemID";
$tdatainventorymaster_subone1[".printFields"][] = "Brand";
$tdatainventorymaster_subone1[".printFields"][] = "Description";
$tdatainventorymaster_subone1[".printFields"][] = "Supplier";
$tdatainventorymaster_subone1[".printFields"][] = "UnitPrice";
$tdatainventorymaster_subone1[".printFields"][] = "SUM(Quantity)";

//	MAX(Id)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MAX(Id)";
	$fdata["GoodName"] = "MAX_Id_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone1","MAX_Id_"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MAX(Id)"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX(inventorymaster.Id)";
	
		
		
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatainventorymaster_subone1["MAX(Id)"] = $fdata;
//	ItemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemID";
	$fdata["GoodName"] = "ItemID";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone1","ItemID"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdatainventorymaster_subone1["ItemID"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone1","Brand"); 
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

	

	
	$tdatainventorymaster_subone1["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone1","Description"); 
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

	

	
	$tdatainventorymaster_subone1["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone1","Supplier"); 
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

	

	
	$tdatainventorymaster_subone1["Supplier"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone1","UnitPrice"); 
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

	

	
	$tdatainventorymaster_subone1["UnitPrice"] = $fdata;
//	SUM(Quantity)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SUM(Quantity)";
	$fdata["GoodName"] = "SUM_Quantity_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone1","SUM_Quantity_"); 
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

	

	
	$tdatainventorymaster_subone1["SUM(Quantity)"] = $fdata;

	
$tables_data["inventorymaster-subone1"]=&$tdatainventorymaster_subone1;
$field_labels["inventorymaster_subone1"] = &$fieldLabelsinventorymaster_subone1;
$fieldToolTips["inventorymaster-subone1"] = &$fieldToolTipsinventorymaster_subone1;
$page_titles["inventorymaster_subone1"] = &$pageTitlesinventorymaster_subone1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inventorymaster-subone1"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["inventorymaster-subone1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inventorymaster_subone1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MAX(inventorymaster.Id) AS `MAX(Id)`,  inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  creategrn.UnitPrice,  SUM(creategrn.Quantity) AS `SUM(Quantity)`";
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
			$proto6=array();
$proto6["m_functiontype"] = "SQLF_MAX";
$proto6["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "Id",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone1"
));

$proto6["m_arguments"][]=$obj;
$proto6["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto6);

$proto5["m_sql"] = "MAX(inventorymaster.Id)";
$proto5["m_srcTableName"] = "inventorymaster-subone1";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "MAX(Id)";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone1"
));

$proto8["m_sql"] = "inventorymaster.ItemID";
$proto8["m_srcTableName"] = "inventorymaster-subone1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone1"
));

$proto10["m_sql"] = "inventorymaster.Brand";
$proto10["m_srcTableName"] = "inventorymaster-subone1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone1"
));

$proto12["m_sql"] = "inventorymaster.Description";
$proto12["m_srcTableName"] = "inventorymaster-subone1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone1"
));

$proto14["m_sql"] = "inventorymaster.Supplier";
$proto14["m_srcTableName"] = "inventorymaster-subone1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone1"
));

$proto16["m_sql"] = "creategrn.UnitPrice";
$proto16["m_srcTableName"] = "inventorymaster-subone1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_SUM";
$proto19["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone1"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "SUM(creategrn.Quantity)";
$proto18["m_srcTableName"] = "inventorymaster-subone1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "SUM(Quantity)";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "inventorymaster";
$proto22["m_srcTableName"] = "inventorymaster-subone1";
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
$proto21["m_srcTableName"] = "inventorymaster-subone1";
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
$proto26["m_srcTableName"] = "inventorymaster-subone1";
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
$proto25["m_srcTableName"] = "inventorymaster-subone1";
$proto27=array();
$proto27["m_sql"] = "creategrn.ItemCode = inventorymaster.ItemID";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone1"
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
	"m_srcTableName" => "inventorymaster-subone1"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone1"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone1"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone1"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone1"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="inventorymaster-subone1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inventorymaster_subone1 = createSqlQuery_inventorymaster_subone1();


	
							
	
$tdatainventorymaster_subone1[".sqlquery"] = $queryData_inventorymaster_subone1;

$tableEvents["inventorymaster-subone1"] = new eventsBase;
$tdatainventorymaster_subone1[".hasEvents"] = false;

?>