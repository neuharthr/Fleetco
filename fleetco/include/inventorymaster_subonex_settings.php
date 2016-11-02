<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainventorymaster_subonex = array();	
	$tdatainventorymaster_subonex[".truncateText"] = true;
	$tdatainventorymaster_subonex[".NumberOfChars"] = 80; 
	$tdatainventorymaster_subonex[".ShortName"] = "inventorymaster_subonex";
	$tdatainventorymaster_subonex[".OwnerID"] = "";
	$tdatainventorymaster_subonex[".OriginalTable"] = "inventorymaster";

//	field labels
$fieldLabelsinventorymaster_subonex = array();
$fieldToolTipsinventorymaster_subonex = array();
$pageTitlesinventorymaster_subonex = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinventorymaster_subonex["English"] = array();
	$fieldToolTipsinventorymaster_subonex["English"] = array();
	$pageTitlesinventorymaster_subonex["English"] = array();
	if (count($fieldToolTipsinventorymaster_subonex["English"]))
		$tdatainventorymaster_subonex[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinventorymaster_subonex[""] = array();
	$fieldToolTipsinventorymaster_subonex[""] = array();
	$pageTitlesinventorymaster_subonex[""] = array();
	if (count($fieldToolTipsinventorymaster_subonex[""]))
		$tdatainventorymaster_subonex[".isUseToolTips"] = true;
}
	
	
	$tdatainventorymaster_subonex[".NCSearch"] = true;



$tdatainventorymaster_subonex[".shortTableName"] = "inventorymaster_subonex";
$tdatainventorymaster_subonex[".nSecOptions"] = 0;
$tdatainventorymaster_subonex[".recsPerRowList"] = 1;
$tdatainventorymaster_subonex[".recsPerRowPrint"] = 1;
$tdatainventorymaster_subonex[".mainTableOwnerID"] = "";
$tdatainventorymaster_subonex[".moveNext"] = 1;
$tdatainventorymaster_subonex[".entityType"] = 1;

$tdatainventorymaster_subonex[".strOriginalTableName"] = "inventorymaster";




$tdatainventorymaster_subonex[".showAddInPopup"] = false;

$tdatainventorymaster_subonex[".showEditInPopup"] = false;

$tdatainventorymaster_subonex[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainventorymaster_subonex[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainventorymaster_subonex[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatainventorymaster_subonex[".listAjax"] = true;
else 
	$tdatainventorymaster_subonex[".listAjax"] = false;

	$tdatainventorymaster_subonex[".audit"] = false;

	$tdatainventorymaster_subonex[".locking"] = false;

$tdatainventorymaster_subonex[".edit"] = true;
$tdatainventorymaster_subonex[".afterEditAction"] = 1;
$tdatainventorymaster_subonex[".closePopupAfterEdit"] = 1;
$tdatainventorymaster_subonex[".afterEditActionDetTable"] = "";

$tdatainventorymaster_subonex[".add"] = true;
$tdatainventorymaster_subonex[".afterAddAction"] = 1;
$tdatainventorymaster_subonex[".closePopupAfterAdd"] = 1;
$tdatainventorymaster_subonex[".afterAddActionDetTable"] = "";

$tdatainventorymaster_subonex[".list"] = true;

$tdatainventorymaster_subonex[".view"] = true;

$tdatainventorymaster_subonex[".import"] = true;

$tdatainventorymaster_subonex[".exportTo"] = true;

$tdatainventorymaster_subonex[".printFriendly"] = true;

$tdatainventorymaster_subonex[".delete"] = true;

$tdatainventorymaster_subonex[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatainventorymaster_subonex[".searchSaving"] = false;
//

$tdatainventorymaster_subonex[".showSearchPanel"] = true;
		$tdatainventorymaster_subonex[".flexibleSearch"] = true;		

if (isMobile())
	$tdatainventorymaster_subonex[".isUseAjaxSuggest"] = false;
else 
	$tdatainventorymaster_subonex[".isUseAjaxSuggest"] = true;

$tdatainventorymaster_subonex[".rowHighlite"] = true;



$tdatainventorymaster_subonex[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainventorymaster_subonex[".isUseTimeForSearch"] = false;





$tdatainventorymaster_subonex[".allSearchFields"] = array();
$tdatainventorymaster_subonex[".filterFields"] = array();
$tdatainventorymaster_subonex[".requiredSearchFields"] = array();

$tdatainventorymaster_subonex[".allSearchFields"][] = "ItemID";
	$tdatainventorymaster_subonex[".allSearchFields"][] = "Brand";
	$tdatainventorymaster_subonex[".allSearchFields"][] = "Description";
	$tdatainventorymaster_subonex[".allSearchFields"][] = "Supplier";
	$tdatainventorymaster_subonex[".allSearchFields"][] = "SUM(Quantity)";
	$tdatainventorymaster_subonex[".allSearchFields"][] = "MAX(UnitPrice)";
	

$tdatainventorymaster_subonex[".googleLikeFields"] = array();
$tdatainventorymaster_subonex[".googleLikeFields"][] = "Id";
$tdatainventorymaster_subonex[".googleLikeFields"][] = "ItemID";
$tdatainventorymaster_subonex[".googleLikeFields"][] = "Brand";
$tdatainventorymaster_subonex[".googleLikeFields"][] = "Description";
$tdatainventorymaster_subonex[".googleLikeFields"][] = "Supplier";
$tdatainventorymaster_subonex[".googleLikeFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subonex[".googleLikeFields"][] = "MAX(UnitPrice)";


$tdatainventorymaster_subonex[".advSearchFields"] = array();
$tdatainventorymaster_subonex[".advSearchFields"][] = "ItemID";
$tdatainventorymaster_subonex[".advSearchFields"][] = "Brand";
$tdatainventorymaster_subonex[".advSearchFields"][] = "Description";
$tdatainventorymaster_subonex[".advSearchFields"][] = "Supplier";
$tdatainventorymaster_subonex[".advSearchFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subonex[".advSearchFields"][] = "MAX(UnitPrice)";

$tdatainventorymaster_subonex[".tableType"] = "list";

$tdatainventorymaster_subonex[".printerPageOrientation"] = 0;
$tdatainventorymaster_subonex[".nPrinterPageScale"] = 100;

$tdatainventorymaster_subonex[".nPrinterSplitRecords"] = 40;

$tdatainventorymaster_subonex[".nPrinterPDFSplitRecords"] = 40;



$tdatainventorymaster_subonex[".geocodingEnabled"] = false;




	





// view page pdf
$tdatainventorymaster_subonex[".isViewPagePDF"] = true;
$tdatainventorymaster_subonex[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatainventorymaster_subonex[".isPrinterPagePDF"] = true;
$tdatainventorymaster_subonex[".nPrinterPagePDFScale"] = 100;


$tdatainventorymaster_subonex[".pageSize"] = 20;

$tdatainventorymaster_subonex[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainventorymaster_subonex[".strOrderBy"] = $tstrOrderBy;

$tdatainventorymaster_subonex[".orderindexes"] = array();

$tdatainventorymaster_subonex[".sqlHead"] = "SELECT inventorymaster.Id,  inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  SUM(creategrn.Quantity) AS `SUM(Quantity)`,  MAX(creategrn.UnitPrice) AS `MAX(UnitPrice)`";
$tdatainventorymaster_subonex[".sqlFrom"] = "FROM inventorymaster  RIGHT OUTER JOIN creategrn ON creategrn.ItemCode = inventorymaster.ItemID";
$tdatainventorymaster_subonex[".sqlWhereExpr"] = "";
$tdatainventorymaster_subonex[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatainventorymaster_subonex[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainventorymaster_subonex[".arrGroupsPerPage"] = $arrGPP;

$tdatainventorymaster_subonex[".highlightSearchResults"] = true;

$tableKeysinventorymaster_subonex = array();
$tableKeysinventorymaster_subonex[] = "Id";
$tdatainventorymaster_subonex[".Keys"] = $tableKeysinventorymaster_subonex;

$tdatainventorymaster_subonex[".listFields"] = array();
$tdatainventorymaster_subonex[".listFields"][] = "MAX(UnitPrice)";
$tdatainventorymaster_subonex[".listFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subonex[".listFields"][] = "ItemID";
$tdatainventorymaster_subonex[".listFields"][] = "Brand";
$tdatainventorymaster_subonex[".listFields"][] = "Description";
$tdatainventorymaster_subonex[".listFields"][] = "Supplier";

$tdatainventorymaster_subonex[".hideMobileList"] = array();


$tdatainventorymaster_subonex[".viewFields"] = array();
$tdatainventorymaster_subonex[".viewFields"][] = "ItemID";
$tdatainventorymaster_subonex[".viewFields"][] = "Brand";
$tdatainventorymaster_subonex[".viewFields"][] = "Description";
$tdatainventorymaster_subonex[".viewFields"][] = "Supplier";
$tdatainventorymaster_subonex[".viewFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subonex[".viewFields"][] = "MAX(UnitPrice)";

$tdatainventorymaster_subonex[".addFields"] = array();
$tdatainventorymaster_subonex[".addFields"][] = "ItemID";
$tdatainventorymaster_subonex[".addFields"][] = "Brand";
$tdatainventorymaster_subonex[".addFields"][] = "Description";
$tdatainventorymaster_subonex[".addFields"][] = "Supplier";

$tdatainventorymaster_subonex[".masterListFields"] = array();
$tdatainventorymaster_subonex[".masterListFields"][] = "Id";
$tdatainventorymaster_subonex[".masterListFields"][] = "ItemID";
$tdatainventorymaster_subonex[".masterListFields"][] = "Brand";
$tdatainventorymaster_subonex[".masterListFields"][] = "Description";
$tdatainventorymaster_subonex[".masterListFields"][] = "Supplier";
$tdatainventorymaster_subonex[".masterListFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subonex[".masterListFields"][] = "MAX(UnitPrice)";

$tdatainventorymaster_subonex[".inlineAddFields"] = array();

$tdatainventorymaster_subonex[".editFields"] = array();
$tdatainventorymaster_subonex[".editFields"][] = "ItemID";
$tdatainventorymaster_subonex[".editFields"][] = "Brand";
$tdatainventorymaster_subonex[".editFields"][] = "Description";
$tdatainventorymaster_subonex[".editFields"][] = "Supplier";

$tdatainventorymaster_subonex[".inlineEditFields"] = array();

$tdatainventorymaster_subonex[".exportFields"] = array();
$tdatainventorymaster_subonex[".exportFields"][] = "ItemID";
$tdatainventorymaster_subonex[".exportFields"][] = "Brand";
$tdatainventorymaster_subonex[".exportFields"][] = "Description";
$tdatainventorymaster_subonex[".exportFields"][] = "Supplier";
$tdatainventorymaster_subonex[".exportFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subonex[".exportFields"][] = "MAX(UnitPrice)";

$tdatainventorymaster_subonex[".importFields"] = array();
$tdatainventorymaster_subonex[".importFields"][] = "ItemID";
$tdatainventorymaster_subonex[".importFields"][] = "Brand";
$tdatainventorymaster_subonex[".importFields"][] = "Description";
$tdatainventorymaster_subonex[".importFields"][] = "Supplier";
$tdatainventorymaster_subonex[".importFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subonex[".importFields"][] = "MAX(UnitPrice)";

$tdatainventorymaster_subonex[".printFields"] = array();
$tdatainventorymaster_subonex[".printFields"][] = "ItemID";
$tdatainventorymaster_subonex[".printFields"][] = "Brand";
$tdatainventorymaster_subonex[".printFields"][] = "Description";
$tdatainventorymaster_subonex[".printFields"][] = "Supplier";
$tdatainventorymaster_subonex[".printFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subonex[".printFields"][] = "MAX(UnitPrice)";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subonex","Id"); 
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
	
	
	
	

	

	
	$tdatainventorymaster_subonex["Id"] = $fdata;
//	ItemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemID";
	$fdata["GoodName"] = "ItemID";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subonex","ItemID"); 
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

	

	
	$tdatainventorymaster_subonex["ItemID"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subonex","Brand"); 
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

	

	
	$tdatainventorymaster_subonex["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subonex","Description"); 
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

	

	
	$tdatainventorymaster_subonex["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subonex","Supplier"); 
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

	

	
	$tdatainventorymaster_subonex["Supplier"] = $fdata;
//	SUM(Quantity)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SUM(Quantity)";
	$fdata["GoodName"] = "SUM_Quantity_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subonex","SUM_Quantity_"); 
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

	

	
	$tdatainventorymaster_subonex["SUM(Quantity)"] = $fdata;
//	MAX(UnitPrice)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MAX(UnitPrice)";
	$fdata["GoodName"] = "MAX_UnitPrice_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subonex","MAX_UnitPrice_"); 
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

	

	
	$tdatainventorymaster_subonex["MAX(UnitPrice)"] = $fdata;

	
$tables_data["inventorymaster-subonex"]=&$tdatainventorymaster_subonex;
$field_labels["inventorymaster_subonex"] = &$fieldLabelsinventorymaster_subonex;
$fieldToolTips["inventorymaster-subonex"] = &$fieldToolTipsinventorymaster_subonex;
$page_titles["inventorymaster_subonex"] = &$pageTitlesinventorymaster_subonex;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inventorymaster-subonex"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["inventorymaster-subonex"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inventorymaster_subonex()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "inventorymaster.Id,  inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  SUM(creategrn.Quantity) AS `SUM(Quantity)`,  MAX(creategrn.UnitPrice) AS `MAX(UnitPrice)`";
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
	"m_strName" => "Id",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subonex"
));

$proto5["m_sql"] = "inventorymaster.Id";
$proto5["m_srcTableName"] = "inventorymaster-subonex";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subonex"
));

$proto7["m_sql"] = "inventorymaster.ItemID";
$proto7["m_srcTableName"] = "inventorymaster-subonex";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subonex"
));

$proto9["m_sql"] = "inventorymaster.Brand";
$proto9["m_srcTableName"] = "inventorymaster-subonex";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subonex"
));

$proto11["m_sql"] = "inventorymaster.Description";
$proto11["m_srcTableName"] = "inventorymaster-subonex";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subonex"
));

$proto13["m_sql"] = "inventorymaster.Supplier";
$proto13["m_srcTableName"] = "inventorymaster-subonex";
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
	"m_srcTableName" => "inventorymaster-subonex"
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "SUM(creategrn.Quantity)";
$proto15["m_srcTableName"] = "inventorymaster-subonex";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "SUM(Quantity)";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_MAX";
$proto19["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subonex"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "MAX(creategrn.UnitPrice)";
$proto18["m_srcTableName"] = "inventorymaster-subonex";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "MAX(UnitPrice)";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "inventorymaster";
$proto22["m_srcTableName"] = "inventorymaster-subonex";
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
$proto21["m_srcTableName"] = "inventorymaster-subonex";
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
$proto26["m_srcTableName"] = "inventorymaster-subonex";
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
$proto25["m_srcTableName"] = "inventorymaster-subonex";
$proto27=array();
$proto27["m_sql"] = "creategrn.ItemCode = inventorymaster.ItemID";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subonex"
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
	"m_strName" => "Id",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subonex"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subonex"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subonex"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subonex"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subonex"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="inventorymaster-subonex";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inventorymaster_subonex = createSqlQuery_inventorymaster_subonex();


	
							
	
$tdatainventorymaster_subonex[".sqlquery"] = $queryData_inventorymaster_subonex;

$tableEvents["inventorymaster-subonex"] = new eventsBase;
$tdatainventorymaster_subonex[".hasEvents"] = false;

?>