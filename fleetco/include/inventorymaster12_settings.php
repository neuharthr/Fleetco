<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainventorymaster12 = array();	
	$tdatainventorymaster12[".truncateText"] = true;
	$tdatainventorymaster12[".NumberOfChars"] = 80; 
	$tdatainventorymaster12[".ShortName"] = "inventorymaster12";
	$tdatainventorymaster12[".OwnerID"] = "";
	$tdatainventorymaster12[".OriginalTable"] = "inventorymaster";

//	field labels
$fieldLabelsinventorymaster12 = array();
$fieldToolTipsinventorymaster12 = array();
$pageTitlesinventorymaster12 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinventorymaster12["English"] = array();
	$fieldToolTipsinventorymaster12["English"] = array();
	$pageTitlesinventorymaster12["English"] = array();
	if (count($fieldToolTipsinventorymaster12["English"]))
		$tdatainventorymaster12[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinventorymaster12[""] = array();
	$fieldToolTipsinventorymaster12[""] = array();
	$pageTitlesinventorymaster12[""] = array();
	if (count($fieldToolTipsinventorymaster12[""]))
		$tdatainventorymaster12[".isUseToolTips"] = true;
}
	
	
	$tdatainventorymaster12[".NCSearch"] = true;



$tdatainventorymaster12[".shortTableName"] = "inventorymaster12";
$tdatainventorymaster12[".nSecOptions"] = 0;
$tdatainventorymaster12[".recsPerRowList"] = 1;
$tdatainventorymaster12[".recsPerRowPrint"] = 1;
$tdatainventorymaster12[".mainTableOwnerID"] = "";
$tdatainventorymaster12[".moveNext"] = 1;
$tdatainventorymaster12[".entityType"] = 1;

$tdatainventorymaster12[".strOriginalTableName"] = "inventorymaster";




$tdatainventorymaster12[".showAddInPopup"] = false;

$tdatainventorymaster12[".showEditInPopup"] = false;

$tdatainventorymaster12[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainventorymaster12[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainventorymaster12[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatainventorymaster12[".listAjax"] = true;
else 
	$tdatainventorymaster12[".listAjax"] = false;

	$tdatainventorymaster12[".audit"] = false;

	$tdatainventorymaster12[".locking"] = false;

$tdatainventorymaster12[".edit"] = true;
$tdatainventorymaster12[".afterEditAction"] = 1;
$tdatainventorymaster12[".closePopupAfterEdit"] = 1;
$tdatainventorymaster12[".afterEditActionDetTable"] = "";

$tdatainventorymaster12[".add"] = true;
$tdatainventorymaster12[".afterAddAction"] = 1;
$tdatainventorymaster12[".closePopupAfterAdd"] = 1;
$tdatainventorymaster12[".afterAddActionDetTable"] = "";

$tdatainventorymaster12[".list"] = true;

$tdatainventorymaster12[".view"] = true;

$tdatainventorymaster12[".import"] = true;

$tdatainventorymaster12[".exportTo"] = true;

$tdatainventorymaster12[".printFriendly"] = true;

$tdatainventorymaster12[".delete"] = true;

$tdatainventorymaster12[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatainventorymaster12[".searchSaving"] = false;
//

$tdatainventorymaster12[".showSearchPanel"] = true;
		$tdatainventorymaster12[".flexibleSearch"] = true;		

if (isMobile())
	$tdatainventorymaster12[".isUseAjaxSuggest"] = false;
else 
	$tdatainventorymaster12[".isUseAjaxSuggest"] = true;

$tdatainventorymaster12[".rowHighlite"] = true;



$tdatainventorymaster12[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainventorymaster12[".isUseTimeForSearch"] = false;





$tdatainventorymaster12[".allSearchFields"] = array();
$tdatainventorymaster12[".filterFields"] = array();
$tdatainventorymaster12[".requiredSearchFields"] = array();

$tdatainventorymaster12[".allSearchFields"][] = "ItemID";
	$tdatainventorymaster12[".allSearchFields"][] = "Brand";
	$tdatainventorymaster12[".allSearchFields"][] = "Description";
	$tdatainventorymaster12[".allSearchFields"][] = "Supplier";
	$tdatainventorymaster12[".allSearchFields"][] = "SUM(CurrentStock)";
	$tdatainventorymaster12[".allSearchFields"][] = "UnitPrice";
	

$tdatainventorymaster12[".googleLikeFields"] = array();
$tdatainventorymaster12[".googleLikeFields"][] = "Id";
$tdatainventorymaster12[".googleLikeFields"][] = "ItemID";
$tdatainventorymaster12[".googleLikeFields"][] = "Brand";
$tdatainventorymaster12[".googleLikeFields"][] = "Description";
$tdatainventorymaster12[".googleLikeFields"][] = "Supplier";
$tdatainventorymaster12[".googleLikeFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster12[".googleLikeFields"][] = "UnitPrice";


$tdatainventorymaster12[".advSearchFields"] = array();
$tdatainventorymaster12[".advSearchFields"][] = "ItemID";
$tdatainventorymaster12[".advSearchFields"][] = "Brand";
$tdatainventorymaster12[".advSearchFields"][] = "Description";
$tdatainventorymaster12[".advSearchFields"][] = "Supplier";
$tdatainventorymaster12[".advSearchFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster12[".advSearchFields"][] = "UnitPrice";

$tdatainventorymaster12[".tableType"] = "list";

$tdatainventorymaster12[".printerPageOrientation"] = 0;
$tdatainventorymaster12[".nPrinterPageScale"] = 100;

$tdatainventorymaster12[".nPrinterSplitRecords"] = 40;

$tdatainventorymaster12[".nPrinterPDFSplitRecords"] = 40;



$tdatainventorymaster12[".geocodingEnabled"] = false;




	





// view page pdf
$tdatainventorymaster12[".isViewPagePDF"] = true;
$tdatainventorymaster12[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatainventorymaster12[".isPrinterPagePDF"] = true;
$tdatainventorymaster12[".nPrinterPagePDFScale"] = 100;


$tdatainventorymaster12[".pageSize"] = 20;

$tdatainventorymaster12[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainventorymaster12[".strOrderBy"] = $tstrOrderBy;

$tdatainventorymaster12[".orderindexes"] = array();

$tdatainventorymaster12[".sqlHead"] = "SELECT inventorymaster.Id,  inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  SUM(creategrn.CurrentStock) AS `SUM(CurrentStock)`,  creategrn.UnitPrice";
$tdatainventorymaster12[".sqlFrom"] = "FROM inventorymaster  INNER JOIN creategrn ON inventorymaster.ItemID = creategrn.ItemCode";
$tdatainventorymaster12[".sqlWhereExpr"] = "";
$tdatainventorymaster12[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatainventorymaster12[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainventorymaster12[".arrGroupsPerPage"] = $arrGPP;

$tdatainventorymaster12[".highlightSearchResults"] = true;

$tableKeysinventorymaster12 = array();
$tableKeysinventorymaster12[] = "Id";
$tdatainventorymaster12[".Keys"] = $tableKeysinventorymaster12;

$tdatainventorymaster12[".listFields"] = array();
$tdatainventorymaster12[".listFields"][] = "UnitPrice";
$tdatainventorymaster12[".listFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster12[".listFields"][] = "ItemID";
$tdatainventorymaster12[".listFields"][] = "Brand";
$tdatainventorymaster12[".listFields"][] = "Description";
$tdatainventorymaster12[".listFields"][] = "Supplier";

$tdatainventorymaster12[".hideMobileList"] = array();


$tdatainventorymaster12[".viewFields"] = array();
$tdatainventorymaster12[".viewFields"][] = "ItemID";
$tdatainventorymaster12[".viewFields"][] = "Brand";
$tdatainventorymaster12[".viewFields"][] = "Description";
$tdatainventorymaster12[".viewFields"][] = "Supplier";
$tdatainventorymaster12[".viewFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster12[".viewFields"][] = "UnitPrice";

$tdatainventorymaster12[".addFields"] = array();

$tdatainventorymaster12[".masterListFields"] = array();
$tdatainventorymaster12[".masterListFields"][] = "Id";
$tdatainventorymaster12[".masterListFields"][] = "ItemID";
$tdatainventorymaster12[".masterListFields"][] = "Brand";
$tdatainventorymaster12[".masterListFields"][] = "Description";
$tdatainventorymaster12[".masterListFields"][] = "Supplier";
$tdatainventorymaster12[".masterListFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster12[".masterListFields"][] = "UnitPrice";

$tdatainventorymaster12[".inlineAddFields"] = array();

$tdatainventorymaster12[".editFields"] = array();

$tdatainventorymaster12[".inlineEditFields"] = array();

$tdatainventorymaster12[".exportFields"] = array();
$tdatainventorymaster12[".exportFields"][] = "ItemID";
$tdatainventorymaster12[".exportFields"][] = "Brand";
$tdatainventorymaster12[".exportFields"][] = "Description";
$tdatainventorymaster12[".exportFields"][] = "Supplier";
$tdatainventorymaster12[".exportFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster12[".exportFields"][] = "UnitPrice";

$tdatainventorymaster12[".importFields"] = array();
$tdatainventorymaster12[".importFields"][] = "ItemID";
$tdatainventorymaster12[".importFields"][] = "Brand";
$tdatainventorymaster12[".importFields"][] = "Description";
$tdatainventorymaster12[".importFields"][] = "Supplier";
$tdatainventorymaster12[".importFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster12[".importFields"][] = "UnitPrice";

$tdatainventorymaster12[".printFields"] = array();
$tdatainventorymaster12[".printFields"][] = "ItemID";
$tdatainventorymaster12[".printFields"][] = "Brand";
$tdatainventorymaster12[".printFields"][] = "Description";
$tdatainventorymaster12[".printFields"][] = "Supplier";
$tdatainventorymaster12[".printFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster12[".printFields"][] = "UnitPrice";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster12","Id"); 
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
	
	
	
	

	

	
	$tdatainventorymaster12["Id"] = $fdata;
//	ItemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemID";
	$fdata["GoodName"] = "ItemID";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster12","ItemID"); 
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

	

	
	$tdatainventorymaster12["ItemID"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster12","Brand"); 
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

	

	
	$tdatainventorymaster12["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster12","Description"); 
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

	

	
	$tdatainventorymaster12["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster12","Supplier"); 
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

	

	
	$tdatainventorymaster12["Supplier"] = $fdata;
//	SUM(CurrentStock)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SUM(CurrentStock)";
	$fdata["GoodName"] = "SUM_CurrentStock_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("inventorymaster12","SUM_CurrentStock_"); 
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

	

	
	$tdatainventorymaster12["SUM(CurrentStock)"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("inventorymaster12","UnitPrice"); 
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

	

	
	$tdatainventorymaster12["UnitPrice"] = $fdata;

	
$tables_data["inventorymaster12"]=&$tdatainventorymaster12;
$field_labels["inventorymaster12"] = &$fieldLabelsinventorymaster12;
$fieldToolTips["inventorymaster12"] = &$fieldToolTipsinventorymaster12;
$page_titles["inventorymaster12"] = &$pageTitlesinventorymaster12;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inventorymaster12"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["inventorymaster12"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inventorymaster12()
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
	"m_srcTableName" => "inventorymaster12"
));

$proto5["m_sql"] = "inventorymaster.Id";
$proto5["m_srcTableName"] = "inventorymaster12";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster12"
));

$proto7["m_sql"] = "inventorymaster.ItemID";
$proto7["m_srcTableName"] = "inventorymaster12";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster12"
));

$proto9["m_sql"] = "inventorymaster.Brand";
$proto9["m_srcTableName"] = "inventorymaster12";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster12"
));

$proto11["m_sql"] = "inventorymaster.Description";
$proto11["m_srcTableName"] = "inventorymaster12";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster12"
));

$proto13["m_sql"] = "inventorymaster.Supplier";
$proto13["m_srcTableName"] = "inventorymaster12";
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
	"m_srcTableName" => "inventorymaster12"
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "SUM(creategrn.CurrentStock)";
$proto15["m_srcTableName"] = "inventorymaster12";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "SUM(CurrentStock)";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster12"
));

$proto18["m_sql"] = "creategrn.UnitPrice";
$proto18["m_srcTableName"] = "inventorymaster12";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "inventorymaster";
$proto21["m_srcTableName"] = "inventorymaster12";
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
$proto20["m_srcTableName"] = "inventorymaster12";
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
$proto25["m_srcTableName"] = "inventorymaster12";
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
$proto24["m_srcTableName"] = "inventorymaster12";
$proto26=array();
$proto26["m_sql"] = "inventorymaster.ItemID = creategrn.ItemCode";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster12"
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
	"m_srcTableName" => "inventorymaster12"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster12"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster12"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster12"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster12"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster12"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="inventorymaster12";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inventorymaster12 = createSqlQuery_inventorymaster12();


	
							
	
$tdatainventorymaster12[".sqlquery"] = $queryData_inventorymaster12;

$tableEvents["inventorymaster12"] = new eventsBase;
$tdatainventorymaster12[".hasEvents"] = false;

?>