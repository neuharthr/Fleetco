<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainventorymaster_price = array();	
	$tdatainventorymaster_price[".truncateText"] = true;
	$tdatainventorymaster_price[".NumberOfChars"] = 80; 
	$tdatainventorymaster_price[".ShortName"] = "inventorymaster_price";
	$tdatainventorymaster_price[".OwnerID"] = "";
	$tdatainventorymaster_price[".OriginalTable"] = "inventorymaster";

//	field labels
$fieldLabelsinventorymaster_price = array();
$fieldToolTipsinventorymaster_price = array();
$pageTitlesinventorymaster_price = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinventorymaster_price["English"] = array();
	$fieldToolTipsinventorymaster_price["English"] = array();
	$pageTitlesinventorymaster_price["English"] = array();
	$fieldLabelsinventorymaster_price["English"]["Id"] = "Id";
	$fieldToolTipsinventorymaster_price["English"]["Id"] = "";
	$fieldLabelsinventorymaster_price["English"]["ItemID"] = "Item ID";
	$fieldToolTipsinventorymaster_price["English"]["ItemID"] = "";
	$fieldLabelsinventorymaster_price["English"]["Brand"] = "Brand";
	$fieldToolTipsinventorymaster_price["English"]["Brand"] = "";
	$fieldLabelsinventorymaster_price["English"]["Description"] = "Description";
	$fieldToolTipsinventorymaster_price["English"]["Description"] = "";
	$fieldLabelsinventorymaster_price["English"]["Supplier"] = "Supplier";
	$fieldToolTipsinventorymaster_price["English"]["Supplier"] = "";
	$fieldLabelsinventorymaster_price["English"]["Quantity"] = "Quantity";
	$fieldToolTipsinventorymaster_price["English"]["Quantity"] = "";
	$fieldLabelsinventorymaster_price["English"]["UnitPrice"] = "Unit Price";
	$fieldToolTipsinventorymaster_price["English"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_price["English"]["MAX_GRNDate_"] = "MAX(GRNDate)";
	$fieldToolTipsinventorymaster_price["English"]["MAX(GRNDate)"] = "";
	if (count($fieldToolTipsinventorymaster_price["English"]))
		$tdatainventorymaster_price[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinventorymaster_price[""] = array();
	$fieldToolTipsinventorymaster_price[""] = array();
	$pageTitlesinventorymaster_price[""] = array();
	$fieldLabelsinventorymaster_price[""]["Quantity"] = "Quantity";
	$fieldToolTipsinventorymaster_price[""]["Quantity"] = "";
	$fieldLabelsinventorymaster_price[""]["UnitPrice"] = "Unit Price";
	$fieldToolTipsinventorymaster_price[""]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_price[""]["MAX_GRNDate_"] = "MAX(GRNDate)";
	$fieldToolTipsinventorymaster_price[""]["MAX(GRNDate)"] = "";
	if (count($fieldToolTipsinventorymaster_price[""]))
		$tdatainventorymaster_price[".isUseToolTips"] = true;
}
	
	
	$tdatainventorymaster_price[".NCSearch"] = true;



$tdatainventorymaster_price[".shortTableName"] = "inventorymaster_price";
$tdatainventorymaster_price[".nSecOptions"] = 0;
$tdatainventorymaster_price[".recsPerRowList"] = 1;
$tdatainventorymaster_price[".recsPerRowPrint"] = 1;
$tdatainventorymaster_price[".mainTableOwnerID"] = "";
$tdatainventorymaster_price[".moveNext"] = 1;
$tdatainventorymaster_price[".entityType"] = 1;

$tdatainventorymaster_price[".strOriginalTableName"] = "inventorymaster";




$tdatainventorymaster_price[".showAddInPopup"] = false;

$tdatainventorymaster_price[".showEditInPopup"] = false;

$tdatainventorymaster_price[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainventorymaster_price[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainventorymaster_price[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatainventorymaster_price[".listAjax"] = true;
else 
	$tdatainventorymaster_price[".listAjax"] = false;

	$tdatainventorymaster_price[".audit"] = false;

	$tdatainventorymaster_price[".locking"] = false;

$tdatainventorymaster_price[".edit"] = true;
$tdatainventorymaster_price[".afterEditAction"] = 1;
$tdatainventorymaster_price[".closePopupAfterEdit"] = 1;
$tdatainventorymaster_price[".afterEditActionDetTable"] = "";

$tdatainventorymaster_price[".add"] = true;
$tdatainventorymaster_price[".afterAddAction"] = 1;
$tdatainventorymaster_price[".closePopupAfterAdd"] = 1;
$tdatainventorymaster_price[".afterAddActionDetTable"] = "";

$tdatainventorymaster_price[".list"] = true;

$tdatainventorymaster_price[".view"] = true;

$tdatainventorymaster_price[".import"] = true;

$tdatainventorymaster_price[".exportTo"] = true;

$tdatainventorymaster_price[".printFriendly"] = true;

$tdatainventorymaster_price[".delete"] = true;

$tdatainventorymaster_price[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatainventorymaster_price[".searchSaving"] = false;
//

$tdatainventorymaster_price[".showSearchPanel"] = true;
		$tdatainventorymaster_price[".flexibleSearch"] = true;		

if (isMobile())
	$tdatainventorymaster_price[".isUseAjaxSuggest"] = false;
else 
	$tdatainventorymaster_price[".isUseAjaxSuggest"] = true;

$tdatainventorymaster_price[".rowHighlite"] = true;



$tdatainventorymaster_price[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainventorymaster_price[".isUseTimeForSearch"] = false;





$tdatainventorymaster_price[".allSearchFields"] = array();
$tdatainventorymaster_price[".filterFields"] = array();
$tdatainventorymaster_price[".requiredSearchFields"] = array();

$tdatainventorymaster_price[".allSearchFields"][] = "ItemID";
	$tdatainventorymaster_price[".allSearchFields"][] = "Brand";
	$tdatainventorymaster_price[".allSearchFields"][] = "Description";
	$tdatainventorymaster_price[".allSearchFields"][] = "Supplier";
	$tdatainventorymaster_price[".allSearchFields"][] = "Quantity";
	$tdatainventorymaster_price[".allSearchFields"][] = "UnitPrice";
	$tdatainventorymaster_price[".allSearchFields"][] = "MAX(GRNDate)";
	

$tdatainventorymaster_price[".googleLikeFields"] = array();
$tdatainventorymaster_price[".googleLikeFields"][] = "Id";
$tdatainventorymaster_price[".googleLikeFields"][] = "ItemID";
$tdatainventorymaster_price[".googleLikeFields"][] = "Brand";
$tdatainventorymaster_price[".googleLikeFields"][] = "Description";
$tdatainventorymaster_price[".googleLikeFields"][] = "Supplier";
$tdatainventorymaster_price[".googleLikeFields"][] = "Quantity";
$tdatainventorymaster_price[".googleLikeFields"][] = "UnitPrice";
$tdatainventorymaster_price[".googleLikeFields"][] = "MAX(GRNDate)";


$tdatainventorymaster_price[".advSearchFields"] = array();
$tdatainventorymaster_price[".advSearchFields"][] = "ItemID";
$tdatainventorymaster_price[".advSearchFields"][] = "Brand";
$tdatainventorymaster_price[".advSearchFields"][] = "Description";
$tdatainventorymaster_price[".advSearchFields"][] = "Supplier";
$tdatainventorymaster_price[".advSearchFields"][] = "Quantity";
$tdatainventorymaster_price[".advSearchFields"][] = "UnitPrice";
$tdatainventorymaster_price[".advSearchFields"][] = "MAX(GRNDate)";

$tdatainventorymaster_price[".tableType"] = "list";

$tdatainventorymaster_price[".printerPageOrientation"] = 0;
$tdatainventorymaster_price[".nPrinterPageScale"] = 100;

$tdatainventorymaster_price[".nPrinterSplitRecords"] = 40;

$tdatainventorymaster_price[".nPrinterPDFSplitRecords"] = 40;



$tdatainventorymaster_price[".geocodingEnabled"] = false;




	





// view page pdf
$tdatainventorymaster_price[".isViewPagePDF"] = true;
$tdatainventorymaster_price[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatainventorymaster_price[".isPrinterPagePDF"] = true;
$tdatainventorymaster_price[".nPrinterPagePDFScale"] = 100;


$tdatainventorymaster_price[".pageSize"] = 20;

$tdatainventorymaster_price[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY creategrn.GRNDate DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainventorymaster_price[".strOrderBy"] = $tstrOrderBy;

$tdatainventorymaster_price[".orderindexes"] = array();
$tdatainventorymaster_price[".orderindexes"][] = array(8, (0 ? "ASC" : "DESC"), "creategrn.GRNDate");

$tdatainventorymaster_price[".sqlHead"] = "SELECT inventorymaster.Id,  inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  creategrn.Quantity,  creategrn.UnitPrice,  MAX(creategrn.GRNDate) AS `MAX(GRNDate)`";
$tdatainventorymaster_price[".sqlFrom"] = "FROM inventorymaster  INNER JOIN creategrn ON inventorymaster.ItemID = creategrn.ItemCode";
$tdatainventorymaster_price[".sqlWhereExpr"] = "";
$tdatainventorymaster_price[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatainventorymaster_price[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainventorymaster_price[".arrGroupsPerPage"] = $arrGPP;

$tdatainventorymaster_price[".highlightSearchResults"] = true;

$tableKeysinventorymaster_price = array();
$tableKeysinventorymaster_price[] = "Id";
$tdatainventorymaster_price[".Keys"] = $tableKeysinventorymaster_price;

$tdatainventorymaster_price[".listFields"] = array();
$tdatainventorymaster_price[".listFields"][] = "Quantity";
$tdatainventorymaster_price[".listFields"][] = "UnitPrice";
$tdatainventorymaster_price[".listFields"][] = "MAX(GRNDate)";
$tdatainventorymaster_price[".listFields"][] = "ItemID";
$tdatainventorymaster_price[".listFields"][] = "Brand";
$tdatainventorymaster_price[".listFields"][] = "Description";
$tdatainventorymaster_price[".listFields"][] = "Supplier";

$tdatainventorymaster_price[".hideMobileList"] = array();


$tdatainventorymaster_price[".viewFields"] = array();
$tdatainventorymaster_price[".viewFields"][] = "ItemID";
$tdatainventorymaster_price[".viewFields"][] = "Brand";
$tdatainventorymaster_price[".viewFields"][] = "Description";
$tdatainventorymaster_price[".viewFields"][] = "Supplier";
$tdatainventorymaster_price[".viewFields"][] = "Quantity";
$tdatainventorymaster_price[".viewFields"][] = "UnitPrice";
$tdatainventorymaster_price[".viewFields"][] = "MAX(GRNDate)";

$tdatainventorymaster_price[".addFields"] = array();
$tdatainventorymaster_price[".addFields"][] = "ItemID";
$tdatainventorymaster_price[".addFields"][] = "Brand";
$tdatainventorymaster_price[".addFields"][] = "Description";
$tdatainventorymaster_price[".addFields"][] = "Supplier";

$tdatainventorymaster_price[".masterListFields"] = array();
$tdatainventorymaster_price[".masterListFields"][] = "Id";
$tdatainventorymaster_price[".masterListFields"][] = "ItemID";
$tdatainventorymaster_price[".masterListFields"][] = "Brand";
$tdatainventorymaster_price[".masterListFields"][] = "Description";
$tdatainventorymaster_price[".masterListFields"][] = "Supplier";
$tdatainventorymaster_price[".masterListFields"][] = "Quantity";
$tdatainventorymaster_price[".masterListFields"][] = "UnitPrice";
$tdatainventorymaster_price[".masterListFields"][] = "MAX(GRNDate)";

$tdatainventorymaster_price[".inlineAddFields"] = array();

$tdatainventorymaster_price[".editFields"] = array();
$tdatainventorymaster_price[".editFields"][] = "ItemID";
$tdatainventorymaster_price[".editFields"][] = "Brand";
$tdatainventorymaster_price[".editFields"][] = "Description";
$tdatainventorymaster_price[".editFields"][] = "Supplier";

$tdatainventorymaster_price[".inlineEditFields"] = array();

$tdatainventorymaster_price[".exportFields"] = array();
$tdatainventorymaster_price[".exportFields"][] = "ItemID";
$tdatainventorymaster_price[".exportFields"][] = "Brand";
$tdatainventorymaster_price[".exportFields"][] = "Description";
$tdatainventorymaster_price[".exportFields"][] = "Supplier";
$tdatainventorymaster_price[".exportFields"][] = "Quantity";
$tdatainventorymaster_price[".exportFields"][] = "UnitPrice";
$tdatainventorymaster_price[".exportFields"][] = "MAX(GRNDate)";

$tdatainventorymaster_price[".importFields"] = array();
$tdatainventorymaster_price[".importFields"][] = "ItemID";
$tdatainventorymaster_price[".importFields"][] = "Brand";
$tdatainventorymaster_price[".importFields"][] = "Description";
$tdatainventorymaster_price[".importFields"][] = "Supplier";
$tdatainventorymaster_price[".importFields"][] = "Quantity";
$tdatainventorymaster_price[".importFields"][] = "UnitPrice";
$tdatainventorymaster_price[".importFields"][] = "MAX(GRNDate)";

$tdatainventorymaster_price[".printFields"] = array();
$tdatainventorymaster_price[".printFields"][] = "ItemID";
$tdatainventorymaster_price[".printFields"][] = "Brand";
$tdatainventorymaster_price[".printFields"][] = "Description";
$tdatainventorymaster_price[".printFields"][] = "Supplier";
$tdatainventorymaster_price[".printFields"][] = "Quantity";
$tdatainventorymaster_price[".printFields"][] = "UnitPrice";
$tdatainventorymaster_price[".printFields"][] = "MAX(GRNDate)";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_price","Id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inventorymaster.Id";
	
		
		
				
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
	
	
	
	

	

	
	$tdatainventorymaster_price["Id"] = $fdata;
//	ItemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemID";
	$fdata["GoodName"] = "ItemID";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_price","ItemID"); 
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

	

	
	$tdatainventorymaster_price["ItemID"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_price","Brand"); 
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

	

	
	$tdatainventorymaster_price["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_price","Description"); 
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

	

	
	$tdatainventorymaster_price["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_price","Supplier"); 
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

	

	
	$tdatainventorymaster_price["Supplier"] = $fdata;
//	Quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Quantity";
	$fdata["GoodName"] = "Quantity";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("inventorymaster_price","Quantity"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Quantity"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creategrn.Quantity";
	
		
		
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

	

	
	$tdatainventorymaster_price["Quantity"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("inventorymaster_price","UnitPrice"); 
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

	

	
	$tdatainventorymaster_price["UnitPrice"] = $fdata;
//	MAX(GRNDate)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "MAX(GRNDate)";
	$fdata["GoodName"] = "MAX_GRNDate_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("inventorymaster_price","MAX_GRNDate_"); 
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

	

	
	$tdatainventorymaster_price["MAX(GRNDate)"] = $fdata;

	
$tables_data["inventorymaster-price"]=&$tdatainventorymaster_price;
$field_labels["inventorymaster_price"] = &$fieldLabelsinventorymaster_price;
$fieldToolTips["inventorymaster-price"] = &$fieldToolTipsinventorymaster_price;
$page_titles["inventorymaster_price"] = &$pageTitlesinventorymaster_price;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inventorymaster-price"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["inventorymaster-price"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inventorymaster_price()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "inventorymaster.Id,  inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  creategrn.Quantity,  creategrn.UnitPrice,  MAX(creategrn.GRNDate) AS `MAX(GRNDate)`";
$proto0["m_strFrom"] = "FROM inventorymaster  INNER JOIN creategrn ON inventorymaster.ItemID = creategrn.ItemCode";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY creategrn.GRNDate DESC";
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
	"m_strName" => "Id",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-price"
));

$proto5["m_sql"] = "inventorymaster.Id";
$proto5["m_srcTableName"] = "inventorymaster-price";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-price"
));

$proto7["m_sql"] = "inventorymaster.ItemID";
$proto7["m_srcTableName"] = "inventorymaster-price";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-price"
));

$proto9["m_sql"] = "inventorymaster.Brand";
$proto9["m_srcTableName"] = "inventorymaster-price";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-price"
));

$proto11["m_sql"] = "inventorymaster.Description";
$proto11["m_srcTableName"] = "inventorymaster-price";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-price"
));

$proto13["m_sql"] = "inventorymaster.Supplier";
$proto13["m_srcTableName"] = "inventorymaster-price";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-price"
));

$proto15["m_sql"] = "creategrn.Quantity";
$proto15["m_srcTableName"] = "inventorymaster-price";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-price"
));

$proto17["m_sql"] = "creategrn.UnitPrice";
$proto17["m_srcTableName"] = "inventorymaster-price";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$proto20=array();
$proto20["m_functiontype"] = "SQLF_MAX";
$proto20["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-price"
));

$proto20["m_arguments"][]=$obj;
$proto20["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto20);

$proto19["m_sql"] = "MAX(creategrn.GRNDate)";
$proto19["m_srcTableName"] = "inventorymaster-price";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "MAX(GRNDate)";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "inventorymaster";
$proto23["m_srcTableName"] = "inventorymaster-price";
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
$proto22["m_srcTableName"] = "inventorymaster-price";
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
$proto26["m_link"] = "SQLL_INNERJOIN";
			$proto27=array();
$proto27["m_strName"] = "creategrn";
$proto27["m_srcTableName"] = "inventorymaster-price";
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
$proto26["m_sql"] = "INNER JOIN creategrn ON inventorymaster.ItemID = creategrn.ItemCode";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "inventorymaster-price";
$proto28=array();
$proto28["m_sql"] = "inventorymaster.ItemID = creategrn.ItemCode";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-price"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "= creategrn.ItemCode";
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
	"m_strName" => "Id",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-price"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-price"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-price"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-price"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-price"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-price"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-price"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-price"
));

$proto44["m_column"]=$obj;
$proto44["m_bAsc"] = 0;
$proto44["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto44);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="inventorymaster-price";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inventorymaster_price = createSqlQuery_inventorymaster_price();


	
								
	
$tdatainventorymaster_price[".sqlquery"] = $queryData_inventorymaster_price;

$tableEvents["inventorymaster-price"] = new eventsBase;
$tdatainventorymaster_price[".hasEvents"] = false;

?>