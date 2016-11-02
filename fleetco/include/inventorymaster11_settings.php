<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainventorymaster11 = array();	
	$tdatainventorymaster11[".truncateText"] = true;
	$tdatainventorymaster11[".NumberOfChars"] = 80; 
	$tdatainventorymaster11[".ShortName"] = "inventorymaster11";
	$tdatainventorymaster11[".OwnerID"] = "";
	$tdatainventorymaster11[".OriginalTable"] = "inventorymaster";

//	field labels
$fieldLabelsinventorymaster11 = array();
$fieldToolTipsinventorymaster11 = array();
$pageTitlesinventorymaster11 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinventorymaster11["English"] = array();
	$fieldToolTipsinventorymaster11["English"] = array();
	$pageTitlesinventorymaster11["English"] = array();
	$fieldLabelsinventorymaster11["English"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster11["English"]["GRNDate"] = "";
	if (count($fieldToolTipsinventorymaster11["English"]))
		$tdatainventorymaster11[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinventorymaster11[""] = array();
	$fieldToolTipsinventorymaster11[""] = array();
	$pageTitlesinventorymaster11[""] = array();
	$fieldLabelsinventorymaster11[""]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster11[""]["GRNDate"] = "";
	if (count($fieldToolTipsinventorymaster11[""]))
		$tdatainventorymaster11[".isUseToolTips"] = true;
}
	
	
	$tdatainventorymaster11[".NCSearch"] = true;



$tdatainventorymaster11[".shortTableName"] = "inventorymaster11";
$tdatainventorymaster11[".nSecOptions"] = 0;
$tdatainventorymaster11[".recsPerRowList"] = 1;
$tdatainventorymaster11[".recsPerRowPrint"] = 1;
$tdatainventorymaster11[".mainTableOwnerID"] = "";
$tdatainventorymaster11[".moveNext"] = 1;
$tdatainventorymaster11[".entityType"] = 1;

$tdatainventorymaster11[".strOriginalTableName"] = "inventorymaster";




$tdatainventorymaster11[".showAddInPopup"] = false;

$tdatainventorymaster11[".showEditInPopup"] = false;

$tdatainventorymaster11[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainventorymaster11[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainventorymaster11[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatainventorymaster11[".listAjax"] = true;
else 
	$tdatainventorymaster11[".listAjax"] = false;

	$tdatainventorymaster11[".audit"] = false;

	$tdatainventorymaster11[".locking"] = false;

$tdatainventorymaster11[".edit"] = true;
$tdatainventorymaster11[".afterEditAction"] = 1;
$tdatainventorymaster11[".closePopupAfterEdit"] = 1;
$tdatainventorymaster11[".afterEditActionDetTable"] = "";

$tdatainventorymaster11[".add"] = true;
$tdatainventorymaster11[".afterAddAction"] = 1;
$tdatainventorymaster11[".closePopupAfterAdd"] = 1;
$tdatainventorymaster11[".afterAddActionDetTable"] = "";

$tdatainventorymaster11[".list"] = true;

$tdatainventorymaster11[".view"] = true;

$tdatainventorymaster11[".import"] = true;

$tdatainventorymaster11[".exportTo"] = true;

$tdatainventorymaster11[".printFriendly"] = true;

$tdatainventorymaster11[".delete"] = true;

$tdatainventorymaster11[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatainventorymaster11[".searchSaving"] = false;
//

$tdatainventorymaster11[".showSearchPanel"] = true;
		$tdatainventorymaster11[".flexibleSearch"] = true;		

if (isMobile())
	$tdatainventorymaster11[".isUseAjaxSuggest"] = false;
else 
	$tdatainventorymaster11[".isUseAjaxSuggest"] = true;

$tdatainventorymaster11[".rowHighlite"] = true;



$tdatainventorymaster11[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainventorymaster11[".isUseTimeForSearch"] = false;





$tdatainventorymaster11[".allSearchFields"] = array();
$tdatainventorymaster11[".filterFields"] = array();
$tdatainventorymaster11[".requiredSearchFields"] = array();

$tdatainventorymaster11[".allSearchFields"][] = "ItemID";
	$tdatainventorymaster11[".allSearchFields"][] = "Brand";
	$tdatainventorymaster11[".allSearchFields"][] = "Description";
	$tdatainventorymaster11[".allSearchFields"][] = "Supplier";
	$tdatainventorymaster11[".allSearchFields"][] = "SUM(CurrentStock)";
	$tdatainventorymaster11[".allSearchFields"][] = "UnitPrice";
	$tdatainventorymaster11[".allSearchFields"][] = "GRNDate";
	

$tdatainventorymaster11[".googleLikeFields"] = array();
$tdatainventorymaster11[".googleLikeFields"][] = "Id";
$tdatainventorymaster11[".googleLikeFields"][] = "ItemID";
$tdatainventorymaster11[".googleLikeFields"][] = "Brand";
$tdatainventorymaster11[".googleLikeFields"][] = "Description";
$tdatainventorymaster11[".googleLikeFields"][] = "Supplier";
$tdatainventorymaster11[".googleLikeFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster11[".googleLikeFields"][] = "UnitPrice";
$tdatainventorymaster11[".googleLikeFields"][] = "GRNDate";


$tdatainventorymaster11[".advSearchFields"] = array();
$tdatainventorymaster11[".advSearchFields"][] = "ItemID";
$tdatainventorymaster11[".advSearchFields"][] = "Brand";
$tdatainventorymaster11[".advSearchFields"][] = "Description";
$tdatainventorymaster11[".advSearchFields"][] = "Supplier";
$tdatainventorymaster11[".advSearchFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster11[".advSearchFields"][] = "UnitPrice";
$tdatainventorymaster11[".advSearchFields"][] = "GRNDate";

$tdatainventorymaster11[".tableType"] = "list";

$tdatainventorymaster11[".printerPageOrientation"] = 0;
$tdatainventorymaster11[".nPrinterPageScale"] = 100;

$tdatainventorymaster11[".nPrinterSplitRecords"] = 40;

$tdatainventorymaster11[".nPrinterPDFSplitRecords"] = 40;



$tdatainventorymaster11[".geocodingEnabled"] = false;




	





// view page pdf
$tdatainventorymaster11[".isViewPagePDF"] = true;
$tdatainventorymaster11[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatainventorymaster11[".isPrinterPagePDF"] = true;
$tdatainventorymaster11[".nPrinterPagePDFScale"] = 100;


$tdatainventorymaster11[".pageSize"] = 20;

$tdatainventorymaster11[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainventorymaster11[".strOrderBy"] = $tstrOrderBy;

$tdatainventorymaster11[".orderindexes"] = array();

$tdatainventorymaster11[".sqlHead"] = "SELECT inventorymaster.Id,  inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  SUM(creategrn.CurrentStock) AS `SUM(CurrentStock)`,  creategrn.UnitPrice,  creategrn.GRNDate";
$tdatainventorymaster11[".sqlFrom"] = "FROM inventorymaster  INNER JOIN creategrn ON inventorymaster.ItemID = creategrn.ItemCode";
$tdatainventorymaster11[".sqlWhereExpr"] = "";
$tdatainventorymaster11[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatainventorymaster11[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainventorymaster11[".arrGroupsPerPage"] = $arrGPP;

$tdatainventorymaster11[".highlightSearchResults"] = true;

$tableKeysinventorymaster11 = array();
$tableKeysinventorymaster11[] = "Id";
$tdatainventorymaster11[".Keys"] = $tableKeysinventorymaster11;

$tdatainventorymaster11[".listFields"] = array();
$tdatainventorymaster11[".listFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster11[".listFields"][] = "UnitPrice";
$tdatainventorymaster11[".listFields"][] = "GRNDate";
$tdatainventorymaster11[".listFields"][] = "ItemID";
$tdatainventorymaster11[".listFields"][] = "Brand";
$tdatainventorymaster11[".listFields"][] = "Description";
$tdatainventorymaster11[".listFields"][] = "Supplier";

$tdatainventorymaster11[".hideMobileList"] = array();


$tdatainventorymaster11[".viewFields"] = array();
$tdatainventorymaster11[".viewFields"][] = "ItemID";
$tdatainventorymaster11[".viewFields"][] = "Brand";
$tdatainventorymaster11[".viewFields"][] = "Description";
$tdatainventorymaster11[".viewFields"][] = "Supplier";
$tdatainventorymaster11[".viewFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster11[".viewFields"][] = "UnitPrice";
$tdatainventorymaster11[".viewFields"][] = "GRNDate";

$tdatainventorymaster11[".addFields"] = array();

$tdatainventorymaster11[".masterListFields"] = array();
$tdatainventorymaster11[".masterListFields"][] = "Id";
$tdatainventorymaster11[".masterListFields"][] = "ItemID";
$tdatainventorymaster11[".masterListFields"][] = "Brand";
$tdatainventorymaster11[".masterListFields"][] = "Description";
$tdatainventorymaster11[".masterListFields"][] = "Supplier";
$tdatainventorymaster11[".masterListFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster11[".masterListFields"][] = "UnitPrice";
$tdatainventorymaster11[".masterListFields"][] = "GRNDate";

$tdatainventorymaster11[".inlineAddFields"] = array();

$tdatainventorymaster11[".editFields"] = array();

$tdatainventorymaster11[".inlineEditFields"] = array();

$tdatainventorymaster11[".exportFields"] = array();
$tdatainventorymaster11[".exportFields"][] = "ItemID";
$tdatainventorymaster11[".exportFields"][] = "Brand";
$tdatainventorymaster11[".exportFields"][] = "Description";
$tdatainventorymaster11[".exportFields"][] = "Supplier";
$tdatainventorymaster11[".exportFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster11[".exportFields"][] = "UnitPrice";
$tdatainventorymaster11[".exportFields"][] = "GRNDate";

$tdatainventorymaster11[".importFields"] = array();
$tdatainventorymaster11[".importFields"][] = "ItemID";
$tdatainventorymaster11[".importFields"][] = "Brand";
$tdatainventorymaster11[".importFields"][] = "Description";
$tdatainventorymaster11[".importFields"][] = "Supplier";
$tdatainventorymaster11[".importFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster11[".importFields"][] = "UnitPrice";
$tdatainventorymaster11[".importFields"][] = "GRNDate";

$tdatainventorymaster11[".printFields"] = array();
$tdatainventorymaster11[".printFields"][] = "ItemID";
$tdatainventorymaster11[".printFields"][] = "Brand";
$tdatainventorymaster11[".printFields"][] = "Description";
$tdatainventorymaster11[".printFields"][] = "Supplier";
$tdatainventorymaster11[".printFields"][] = "SUM(CurrentStock)";
$tdatainventorymaster11[".printFields"][] = "UnitPrice";
$tdatainventorymaster11[".printFields"][] = "GRNDate";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster11","Id"); 
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
	
	
	
	

	

	
	$tdatainventorymaster11["Id"] = $fdata;
//	ItemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemID";
	$fdata["GoodName"] = "ItemID";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster11","ItemID"); 
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

	

	
	$tdatainventorymaster11["ItemID"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster11","Brand"); 
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

	

	
	$tdatainventorymaster11["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster11","Description"); 
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

	

	
	$tdatainventorymaster11["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster11","Supplier"); 
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

	

	
	$tdatainventorymaster11["Supplier"] = $fdata;
//	SUM(CurrentStock)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SUM(CurrentStock)";
	$fdata["GoodName"] = "SUM_CurrentStock_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("inventorymaster11","SUM_CurrentStock_"); 
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

	

	
	$tdatainventorymaster11["SUM(CurrentStock)"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("inventorymaster11","UnitPrice"); 
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

	

	
	$tdatainventorymaster11["UnitPrice"] = $fdata;
//	GRNDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "GRNDate";
	$fdata["GoodName"] = "GRNDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("inventorymaster11","GRNDate"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "GRNDate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creategrn.GRNDate";
	
		
		
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

	

	
	$tdatainventorymaster11["GRNDate"] = $fdata;

	
$tables_data["inventorymaster11"]=&$tdatainventorymaster11;
$field_labels["inventorymaster11"] = &$fieldLabelsinventorymaster11;
$fieldToolTips["inventorymaster11"] = &$fieldToolTipsinventorymaster11;
$page_titles["inventorymaster11"] = &$pageTitlesinventorymaster11;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inventorymaster11"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["inventorymaster11"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inventorymaster11()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "inventorymaster.Id,  inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  SUM(creategrn.CurrentStock) AS `SUM(CurrentStock)`,  creategrn.UnitPrice,  creategrn.GRNDate";
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
	"m_srcTableName" => "inventorymaster11"
));

$proto5["m_sql"] = "inventorymaster.Id";
$proto5["m_srcTableName"] = "inventorymaster11";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster11"
));

$proto7["m_sql"] = "inventorymaster.ItemID";
$proto7["m_srcTableName"] = "inventorymaster11";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster11"
));

$proto9["m_sql"] = "inventorymaster.Brand";
$proto9["m_srcTableName"] = "inventorymaster11";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster11"
));

$proto11["m_sql"] = "inventorymaster.Description";
$proto11["m_srcTableName"] = "inventorymaster11";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster11"
));

$proto13["m_sql"] = "inventorymaster.Supplier";
$proto13["m_srcTableName"] = "inventorymaster11";
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
	"m_srcTableName" => "inventorymaster11"
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "SUM(creategrn.CurrentStock)";
$proto15["m_srcTableName"] = "inventorymaster11";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "SUM(CurrentStock)";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster11"
));

$proto18["m_sql"] = "creategrn.UnitPrice";
$proto18["m_srcTableName"] = "inventorymaster11";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster11"
));

$proto20["m_sql"] = "creategrn.GRNDate";
$proto20["m_srcTableName"] = "inventorymaster11";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "inventorymaster";
$proto23["m_srcTableName"] = "inventorymaster11";
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
$proto22["m_srcTableName"] = "inventorymaster11";
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
$proto27["m_srcTableName"] = "inventorymaster11";
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
$proto26["m_srcTableName"] = "inventorymaster11";
$proto28=array();
$proto28["m_sql"] = "inventorymaster.ItemID = creategrn.ItemCode";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster11"
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
	"m_srcTableName" => "inventorymaster11"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster11"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster11"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster11"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster11"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster11"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="inventorymaster11";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inventorymaster11 = createSqlQuery_inventorymaster11();


	
								
	
$tdatainventorymaster11[".sqlquery"] = $queryData_inventorymaster11;

$tableEvents["inventorymaster11"] = new eventsBase;
$tdatainventorymaster11[".hasEvents"] = false;

?>