<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainventorymaster1 = array();	
	$tdatainventorymaster1[".truncateText"] = true;
	$tdatainventorymaster1[".NumberOfChars"] = 80; 
	$tdatainventorymaster1[".ShortName"] = "inventorymaster1";
	$tdatainventorymaster1[".OwnerID"] = "";
	$tdatainventorymaster1[".OriginalTable"] = "inventorymaster";

//	field labels
$fieldLabelsinventorymaster1 = array();
$fieldToolTipsinventorymaster1 = array();
$pageTitlesinventorymaster1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinventorymaster1["English"] = array();
	$fieldToolTipsinventorymaster1["English"] = array();
	$pageTitlesinventorymaster1["English"] = array();
	if (count($fieldToolTipsinventorymaster1["English"]))
		$tdatainventorymaster1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinventorymaster1[""] = array();
	$fieldToolTipsinventorymaster1[""] = array();
	$pageTitlesinventorymaster1[""] = array();
	if (count($fieldToolTipsinventorymaster1[""]))
		$tdatainventorymaster1[".isUseToolTips"] = true;
}
	
	
	$tdatainventorymaster1[".NCSearch"] = true;



$tdatainventorymaster1[".shortTableName"] = "inventorymaster1";
$tdatainventorymaster1[".nSecOptions"] = 0;
$tdatainventorymaster1[".recsPerRowList"] = 1;
$tdatainventorymaster1[".recsPerRowPrint"] = 1;
$tdatainventorymaster1[".mainTableOwnerID"] = "";
$tdatainventorymaster1[".moveNext"] = 1;
$tdatainventorymaster1[".entityType"] = 1;

$tdatainventorymaster1[".strOriginalTableName"] = "inventorymaster";




$tdatainventorymaster1[".showAddInPopup"] = false;

$tdatainventorymaster1[".showEditInPopup"] = false;

$tdatainventorymaster1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainventorymaster1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainventorymaster1[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatainventorymaster1[".listAjax"] = true;
else 
	$tdatainventorymaster1[".listAjax"] = false;

	$tdatainventorymaster1[".audit"] = false;

	$tdatainventorymaster1[".locking"] = false;

$tdatainventorymaster1[".edit"] = true;
$tdatainventorymaster1[".afterEditAction"] = 1;
$tdatainventorymaster1[".closePopupAfterEdit"] = 1;
$tdatainventorymaster1[".afterEditActionDetTable"] = "";

$tdatainventorymaster1[".add"] = true;
$tdatainventorymaster1[".afterAddAction"] = 1;
$tdatainventorymaster1[".closePopupAfterAdd"] = 1;
$tdatainventorymaster1[".afterAddActionDetTable"] = "";

$tdatainventorymaster1[".list"] = true;

$tdatainventorymaster1[".view"] = true;

$tdatainventorymaster1[".import"] = true;

$tdatainventorymaster1[".exportTo"] = true;

$tdatainventorymaster1[".printFriendly"] = true;

$tdatainventorymaster1[".delete"] = true;

$tdatainventorymaster1[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatainventorymaster1[".searchSaving"] = false;
//

$tdatainventorymaster1[".showSearchPanel"] = true;
		$tdatainventorymaster1[".flexibleSearch"] = true;		

if (isMobile())
	$tdatainventorymaster1[".isUseAjaxSuggest"] = false;
else 
	$tdatainventorymaster1[".isUseAjaxSuggest"] = true;

$tdatainventorymaster1[".rowHighlite"] = true;



$tdatainventorymaster1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainventorymaster1[".isUseTimeForSearch"] = false;





$tdatainventorymaster1[".allSearchFields"] = array();
$tdatainventorymaster1[".filterFields"] = array();
$tdatainventorymaster1[".requiredSearchFields"] = array();

$tdatainventorymaster1[".allSearchFields"][] = "ItemID";
	$tdatainventorymaster1[".allSearchFields"][] = "Brand";
	$tdatainventorymaster1[".allSearchFields"][] = "Description";
	$tdatainventorymaster1[".allSearchFields"][] = "Supplier";
	$tdatainventorymaster1[".allSearchFields"][] = "SUM(CurrentStock)";
	$tdatainventorymaster1[".allSearchFields"][] = "UnitPrice";
	

$tdatainventorymaster1[".googleLikeFields"] = array();
$tdatainventorymaster1[".googleLikeFields"][] = "Id";
$tdatainventorymaster1[".googleLikeFields"][] = "ItemID";
$tdatainventorymaster1[".googleLikeFields"][] = "Brand";
$tdatainventorymaster1[".googleLikeFields"][] = "Description";
$tdatainventorymaster1[".googleLikeFields"][] = "Supplier";
$tdatainventorymaster1[".googleLikeFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster1[".googleLikeFields"][] = "UnitPrice";


$tdatainventorymaster1[".advSearchFields"] = array();
$tdatainventorymaster1[".advSearchFields"][] = "ItemID";
$tdatainventorymaster1[".advSearchFields"][] = "Brand";
$tdatainventorymaster1[".advSearchFields"][] = "Description";
$tdatainventorymaster1[".advSearchFields"][] = "Supplier";
$tdatainventorymaster1[".advSearchFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster1[".advSearchFields"][] = "UnitPrice";

$tdatainventorymaster1[".tableType"] = "list";

$tdatainventorymaster1[".printerPageOrientation"] = 0;
$tdatainventorymaster1[".nPrinterPageScale"] = 100;

$tdatainventorymaster1[".nPrinterSplitRecords"] = 40;

$tdatainventorymaster1[".nPrinterPDFSplitRecords"] = 40;



$tdatainventorymaster1[".geocodingEnabled"] = false;




	





// view page pdf
$tdatainventorymaster1[".isViewPagePDF"] = true;
$tdatainventorymaster1[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatainventorymaster1[".isPrinterPagePDF"] = true;
$tdatainventorymaster1[".nPrinterPagePDFScale"] = 100;


$tdatainventorymaster1[".pageSize"] = 20;

$tdatainventorymaster1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainventorymaster1[".strOrderBy"] = $tstrOrderBy;

$tdatainventorymaster1[".orderindexes"] = array();

$tdatainventorymaster1[".sqlHead"] = "SELECT inventorymaster.Id,  inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  SUM(creategrn.CurrentStock) AS `SUM(CurrentStock)`,  creategrn.UnitPrice";
$tdatainventorymaster1[".sqlFrom"] = "FROM inventorymaster  INNER JOIN creategrn ON inventorymaster.ItemID = creategrn.ItemCode";
$tdatainventorymaster1[".sqlWhereExpr"] = "";
$tdatainventorymaster1[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatainventorymaster1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainventorymaster1[".arrGroupsPerPage"] = $arrGPP;

$tdatainventorymaster1[".highlightSearchResults"] = true;

$tableKeysinventorymaster1 = array();
$tableKeysinventorymaster1[] = "Id";
$tdatainventorymaster1[".Keys"] = $tableKeysinventorymaster1;

$tdatainventorymaster1[".listFields"] = array();
$tdatainventorymaster1[".listFields"][] = "UnitPrice";
$tdatainventorymaster1[".listFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster1[".listFields"][] = "ItemID";
$tdatainventorymaster1[".listFields"][] = "Brand";
$tdatainventorymaster1[".listFields"][] = "Description";
$tdatainventorymaster1[".listFields"][] = "Supplier";

$tdatainventorymaster1[".hideMobileList"] = array();


$tdatainventorymaster1[".viewFields"] = array();
$tdatainventorymaster1[".viewFields"][] = "ItemID";
$tdatainventorymaster1[".viewFields"][] = "Brand";
$tdatainventorymaster1[".viewFields"][] = "Description";
$tdatainventorymaster1[".viewFields"][] = "Supplier";
$tdatainventorymaster1[".viewFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster1[".viewFields"][] = "UnitPrice";

$tdatainventorymaster1[".addFields"] = array();

$tdatainventorymaster1[".masterListFields"] = array();
$tdatainventorymaster1[".masterListFields"][] = "Id";
$tdatainventorymaster1[".masterListFields"][] = "ItemID";
$tdatainventorymaster1[".masterListFields"][] = "Brand";
$tdatainventorymaster1[".masterListFields"][] = "Description";
$tdatainventorymaster1[".masterListFields"][] = "Supplier";
$tdatainventorymaster1[".masterListFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster1[".masterListFields"][] = "UnitPrice";

$tdatainventorymaster1[".inlineAddFields"] = array();

$tdatainventorymaster1[".editFields"] = array();

$tdatainventorymaster1[".inlineEditFields"] = array();

$tdatainventorymaster1[".exportFields"] = array();
$tdatainventorymaster1[".exportFields"][] = "ItemID";
$tdatainventorymaster1[".exportFields"][] = "Brand";
$tdatainventorymaster1[".exportFields"][] = "Description";
$tdatainventorymaster1[".exportFields"][] = "Supplier";
$tdatainventorymaster1[".exportFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster1[".exportFields"][] = "UnitPrice";

$tdatainventorymaster1[".importFields"] = array();
$tdatainventorymaster1[".importFields"][] = "ItemID";
$tdatainventorymaster1[".importFields"][] = "Brand";
$tdatainventorymaster1[".importFields"][] = "Description";
$tdatainventorymaster1[".importFields"][] = "Supplier";
$tdatainventorymaster1[".importFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster1[".importFields"][] = "UnitPrice";

$tdatainventorymaster1[".printFields"] = array();
$tdatainventorymaster1[".printFields"][] = "ItemID";
$tdatainventorymaster1[".printFields"][] = "Brand";
$tdatainventorymaster1[".printFields"][] = "Description";
$tdatainventorymaster1[".printFields"][] = "Supplier";
$tdatainventorymaster1[".printFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster1[".printFields"][] = "UnitPrice";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster1","Id"); 
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
	
	
	
	

	

	
	$tdatainventorymaster1["Id"] = $fdata;
//	ItemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemID";
	$fdata["GoodName"] = "ItemID";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster1","ItemID"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatainventorymaster1["ItemID"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster1","Brand"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatainventorymaster1["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster1","Description"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatainventorymaster1["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster1","Supplier"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "suppliermaster";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
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

	

	
	$tdatainventorymaster1["Supplier"] = $fdata;
//	SUM(CurrentStock)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SUM(CurrentStock)";
	$fdata["GoodName"] = "SUM_CurrentStock_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("inventorymaster1","SUM_CurrentStock_"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "SUM(CurrentStock)"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(creategrn.CurrentStock)";
	
		
		
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

	

	
	$tdatainventorymaster1["SUM(CurrentStock)"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("inventorymaster1","UnitPrice"); 
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

	

	
	$tdatainventorymaster1["UnitPrice"] = $fdata;

	
$tables_data["inventorymaster1"]=&$tdatainventorymaster1;
$field_labels["inventorymaster1"] = &$fieldLabelsinventorymaster1;
$fieldToolTips["inventorymaster1"] = &$fieldToolTipsinventorymaster1;
$page_titles["inventorymaster1"] = &$pageTitlesinventorymaster1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inventorymaster1"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["inventorymaster1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inventorymaster1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "inventorymaster.Id,  inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  SUM(creategrn.CurrentStock) AS `SUM(CurrentStock)`,  creategrn.UnitPrice";
$proto0["m_strFrom"] = "FROM inventorymaster  INNER JOIN creategrn ON inventorymaster.ItemID = creategrn.ItemCode";
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
	"m_strName" => "Id",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster1"
));

$proto5["m_sql"] = "inventorymaster.Id";
$proto5["m_srcTableName"] = "inventorymaster1";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster1"
));

$proto7["m_sql"] = "inventorymaster.ItemID";
$proto7["m_srcTableName"] = "inventorymaster1";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster1"
));

$proto9["m_sql"] = "inventorymaster.Brand";
$proto9["m_srcTableName"] = "inventorymaster1";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster1"
));

$proto11["m_sql"] = "inventorymaster.Description";
$proto11["m_srcTableName"] = "inventorymaster1";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster1"
));

$proto13["m_sql"] = "inventorymaster.Supplier";
$proto13["m_srcTableName"] = "inventorymaster1";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$proto16=array();
$proto16["m_functiontype"] = "SQLF_SUM";
$proto16["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "CurrentStock",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster1"
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "SUM(creategrn.CurrentStock)";
$proto15["m_srcTableName"] = "inventorymaster1";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "SUM(CurrentStock)";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster1"
));

$proto18["m_sql"] = "creategrn.UnitPrice";
$proto18["m_srcTableName"] = "inventorymaster1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "inventorymaster";
$proto21["m_srcTableName"] = "inventorymaster1";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "Id";
$proto21["m_columns"][] = "ItemID";
$proto21["m_columns"][] = "Brand";
$proto21["m_columns"][] = "Description";
$proto21["m_columns"][] = "Supplier";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "inventorymaster";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "inventorymaster1";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
												$proto24=array();
$proto24["m_link"] = "SQLL_INNERJOIN";
			$proto25=array();
$proto25["m_strName"] = "creategrn";
$proto25["m_srcTableName"] = "inventorymaster1";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "ID";
$proto25["m_columns"][] = "ItemCode";
$proto25["m_columns"][] = "Brand";
$proto25["m_columns"][] = "Description";
$proto25["m_columns"][] = "Supplier";
$proto25["m_columns"][] = "Quantity";
$proto25["m_columns"][] = "RemovedFrom";
$proto25["m_columns"][] = "SystemDate";
$proto25["m_columns"][] = "GRNDate";
$proto25["m_columns"][] = "EnteredBy";
$proto25["m_columns"][] = "ApprovedBy";
$proto25["m_columns"][] = "UnitPrice";
$proto25["m_columns"][] = "Status";
$proto25["m_columns"][] = "RefNumber";
$proto25["m_columns"][] = "CurrentStock";
$proto25["m_columns"][] = "Fleet";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "INNER JOIN creategrn ON inventorymaster.ItemID = creategrn.ItemCode";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "inventorymaster1";
$proto26=array();
$proto26["m_sql"] = "inventorymaster.ItemID = creategrn.ItemCode";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster1"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= creategrn.ItemCode";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "Id",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster1"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster1"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster1"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster1"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster1"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster1"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="inventorymaster1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inventorymaster1 = createSqlQuery_inventorymaster1();


	
							
	
$tdatainventorymaster1[".sqlquery"] = $queryData_inventorymaster1;

$tableEvents["inventorymaster1"] = new eventsBase;
$tdatainventorymaster1[".hasEvents"] = false;

?>