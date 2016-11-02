<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainventorymaster_subone2 = array();	
	$tdatainventorymaster_subone2[".truncateText"] = true;
	$tdatainventorymaster_subone2[".NumberOfChars"] = 80; 
	$tdatainventorymaster_subone2[".ShortName"] = "inventorymaster_subone2";
	$tdatainventorymaster_subone2[".OwnerID"] = "";
	$tdatainventorymaster_subone2[".OriginalTable"] = "inventorymaster";

//	field labels
$fieldLabelsinventorymaster_subone2 = array();
$fieldToolTipsinventorymaster_subone2 = array();
$pageTitlesinventorymaster_subone2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinventorymaster_subone2["English"] = array();
	$fieldToolTipsinventorymaster_subone2["English"] = array();
	$pageTitlesinventorymaster_subone2["English"] = array();
	if (count($fieldToolTipsinventorymaster_subone2["English"]))
		$tdatainventorymaster_subone2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinventorymaster_subone2[""] = array();
	$fieldToolTipsinventorymaster_subone2[""] = array();
	$pageTitlesinventorymaster_subone2[""] = array();
	if (count($fieldToolTipsinventorymaster_subone2[""]))
		$tdatainventorymaster_subone2[".isUseToolTips"] = true;
}
	
	
	$tdatainventorymaster_subone2[".NCSearch"] = true;



$tdatainventorymaster_subone2[".shortTableName"] = "inventorymaster_subone2";
$tdatainventorymaster_subone2[".nSecOptions"] = 0;
$tdatainventorymaster_subone2[".recsPerRowList"] = 1;
$tdatainventorymaster_subone2[".recsPerRowPrint"] = 1;
$tdatainventorymaster_subone2[".mainTableOwnerID"] = "";
$tdatainventorymaster_subone2[".moveNext"] = 1;
$tdatainventorymaster_subone2[".entityType"] = 1;

$tdatainventorymaster_subone2[".strOriginalTableName"] = "inventorymaster";




$tdatainventorymaster_subone2[".showAddInPopup"] = false;

$tdatainventorymaster_subone2[".showEditInPopup"] = false;

$tdatainventorymaster_subone2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainventorymaster_subone2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainventorymaster_subone2[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatainventorymaster_subone2[".listAjax"] = true;
else 
	$tdatainventorymaster_subone2[".listAjax"] = false;

	$tdatainventorymaster_subone2[".audit"] = false;

	$tdatainventorymaster_subone2[".locking"] = false;

$tdatainventorymaster_subone2[".edit"] = true;
$tdatainventorymaster_subone2[".afterEditAction"] = 1;
$tdatainventorymaster_subone2[".closePopupAfterEdit"] = 1;
$tdatainventorymaster_subone2[".afterEditActionDetTable"] = "";

$tdatainventorymaster_subone2[".add"] = true;
$tdatainventorymaster_subone2[".afterAddAction"] = 1;
$tdatainventorymaster_subone2[".closePopupAfterAdd"] = 1;
$tdatainventorymaster_subone2[".afterAddActionDetTable"] = "";

$tdatainventorymaster_subone2[".list"] = true;

$tdatainventorymaster_subone2[".view"] = true;

$tdatainventorymaster_subone2[".import"] = true;

$tdatainventorymaster_subone2[".exportTo"] = true;

$tdatainventorymaster_subone2[".printFriendly"] = true;

$tdatainventorymaster_subone2[".delete"] = true;

$tdatainventorymaster_subone2[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatainventorymaster_subone2[".searchSaving"] = false;
//

$tdatainventorymaster_subone2[".showSearchPanel"] = true;
		$tdatainventorymaster_subone2[".flexibleSearch"] = true;		

if (isMobile())
	$tdatainventorymaster_subone2[".isUseAjaxSuggest"] = false;
else 
	$tdatainventorymaster_subone2[".isUseAjaxSuggest"] = true;

$tdatainventorymaster_subone2[".rowHighlite"] = true;



$tdatainventorymaster_subone2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainventorymaster_subone2[".isUseTimeForSearch"] = false;





$tdatainventorymaster_subone2[".allSearchFields"] = array();
$tdatainventorymaster_subone2[".filterFields"] = array();
$tdatainventorymaster_subone2[".requiredSearchFields"] = array();

$tdatainventorymaster_subone2[".allSearchFields"][] = "MAX(ItemID)";
	$tdatainventorymaster_subone2[".allSearchFields"][] = "Brand";
	$tdatainventorymaster_subone2[".allSearchFields"][] = "Description";
	$tdatainventorymaster_subone2[".allSearchFields"][] = "Supplier";
	$tdatainventorymaster_subone2[".allSearchFields"][] = "UnitPrice";
	$tdatainventorymaster_subone2[".allSearchFields"][] = "SUM(Quantity)";
	

$tdatainventorymaster_subone2[".googleLikeFields"] = array();
$tdatainventorymaster_subone2[".googleLikeFields"][] = "Id";
$tdatainventorymaster_subone2[".googleLikeFields"][] = "MAX(ItemID)";
$tdatainventorymaster_subone2[".googleLikeFields"][] = "Brand";
$tdatainventorymaster_subone2[".googleLikeFields"][] = "Description";
$tdatainventorymaster_subone2[".googleLikeFields"][] = "Supplier";
$tdatainventorymaster_subone2[".googleLikeFields"][] = "UnitPrice";
$tdatainventorymaster_subone2[".googleLikeFields"][] = "SUM(Quantity)";


$tdatainventorymaster_subone2[".advSearchFields"] = array();
$tdatainventorymaster_subone2[".advSearchFields"][] = "MAX(ItemID)";
$tdatainventorymaster_subone2[".advSearchFields"][] = "Brand";
$tdatainventorymaster_subone2[".advSearchFields"][] = "Description";
$tdatainventorymaster_subone2[".advSearchFields"][] = "Supplier";
$tdatainventorymaster_subone2[".advSearchFields"][] = "UnitPrice";
$tdatainventorymaster_subone2[".advSearchFields"][] = "SUM(Quantity)";

$tdatainventorymaster_subone2[".tableType"] = "list";

$tdatainventorymaster_subone2[".printerPageOrientation"] = 0;
$tdatainventorymaster_subone2[".nPrinterPageScale"] = 100;

$tdatainventorymaster_subone2[".nPrinterSplitRecords"] = 40;

$tdatainventorymaster_subone2[".nPrinterPDFSplitRecords"] = 40;



$tdatainventorymaster_subone2[".geocodingEnabled"] = false;




	





// view page pdf
$tdatainventorymaster_subone2[".isViewPagePDF"] = true;
$tdatainventorymaster_subone2[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatainventorymaster_subone2[".isPrinterPagePDF"] = true;
$tdatainventorymaster_subone2[".nPrinterPagePDFScale"] = 100;


$tdatainventorymaster_subone2[".pageSize"] = 20;

$tdatainventorymaster_subone2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainventorymaster_subone2[".strOrderBy"] = $tstrOrderBy;

$tdatainventorymaster_subone2[".orderindexes"] = array();

$tdatainventorymaster_subone2[".sqlHead"] = "SELECT inventorymaster.Id,  MAX(inventorymaster.ItemID) AS `MAX(ItemID)`,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  creategrn.UnitPrice,  SUM(creategrn.Quantity) AS `SUM(Quantity)`";
$tdatainventorymaster_subone2[".sqlFrom"] = "FROM inventorymaster  RIGHT OUTER JOIN creategrn ON creategrn.ItemCode = inventorymaster.ItemID";
$tdatainventorymaster_subone2[".sqlWhereExpr"] = "";
$tdatainventorymaster_subone2[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatainventorymaster_subone2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainventorymaster_subone2[".arrGroupsPerPage"] = $arrGPP;

$tdatainventorymaster_subone2[".highlightSearchResults"] = true;

$tableKeysinventorymaster_subone2 = array();
$tableKeysinventorymaster_subone2[] = "Id";
$tdatainventorymaster_subone2[".Keys"] = $tableKeysinventorymaster_subone2;

$tdatainventorymaster_subone2[".listFields"] = array();
$tdatainventorymaster_subone2[".listFields"][] = "UnitPrice";
$tdatainventorymaster_subone2[".listFields"][] = "MAX(ItemID)";
$tdatainventorymaster_subone2[".listFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subone2[".listFields"][] = "Brand";
$tdatainventorymaster_subone2[".listFields"][] = "Description";
$tdatainventorymaster_subone2[".listFields"][] = "Supplier";

$tdatainventorymaster_subone2[".hideMobileList"] = array();


$tdatainventorymaster_subone2[".viewFields"] = array();
$tdatainventorymaster_subone2[".viewFields"][] = "MAX(ItemID)";
$tdatainventorymaster_subone2[".viewFields"][] = "Brand";
$tdatainventorymaster_subone2[".viewFields"][] = "Description";
$tdatainventorymaster_subone2[".viewFields"][] = "Supplier";
$tdatainventorymaster_subone2[".viewFields"][] = "UnitPrice";
$tdatainventorymaster_subone2[".viewFields"][] = "SUM(Quantity)";

$tdatainventorymaster_subone2[".addFields"] = array();
$tdatainventorymaster_subone2[".addFields"][] = "Brand";
$tdatainventorymaster_subone2[".addFields"][] = "Description";
$tdatainventorymaster_subone2[".addFields"][] = "Supplier";

$tdatainventorymaster_subone2[".masterListFields"] = array();
$tdatainventorymaster_subone2[".masterListFields"][] = "Id";
$tdatainventorymaster_subone2[".masterListFields"][] = "MAX(ItemID)";
$tdatainventorymaster_subone2[".masterListFields"][] = "Brand";
$tdatainventorymaster_subone2[".masterListFields"][] = "Description";
$tdatainventorymaster_subone2[".masterListFields"][] = "Supplier";
$tdatainventorymaster_subone2[".masterListFields"][] = "UnitPrice";
$tdatainventorymaster_subone2[".masterListFields"][] = "SUM(Quantity)";

$tdatainventorymaster_subone2[".inlineAddFields"] = array();

$tdatainventorymaster_subone2[".editFields"] = array();
$tdatainventorymaster_subone2[".editFields"][] = "Brand";
$tdatainventorymaster_subone2[".editFields"][] = "Description";
$tdatainventorymaster_subone2[".editFields"][] = "Supplier";

$tdatainventorymaster_subone2[".inlineEditFields"] = array();

$tdatainventorymaster_subone2[".exportFields"] = array();
$tdatainventorymaster_subone2[".exportFields"][] = "MAX(ItemID)";
$tdatainventorymaster_subone2[".exportFields"][] = "Brand";
$tdatainventorymaster_subone2[".exportFields"][] = "Description";
$tdatainventorymaster_subone2[".exportFields"][] = "Supplier";
$tdatainventorymaster_subone2[".exportFields"][] = "UnitPrice";
$tdatainventorymaster_subone2[".exportFields"][] = "SUM(Quantity)";

$tdatainventorymaster_subone2[".importFields"] = array();
$tdatainventorymaster_subone2[".importFields"][] = "MAX(ItemID)";
$tdatainventorymaster_subone2[".importFields"][] = "Brand";
$tdatainventorymaster_subone2[".importFields"][] = "Description";
$tdatainventorymaster_subone2[".importFields"][] = "Supplier";
$tdatainventorymaster_subone2[".importFields"][] = "UnitPrice";
$tdatainventorymaster_subone2[".importFields"][] = "SUM(Quantity)";

$tdatainventorymaster_subone2[".printFields"] = array();
$tdatainventorymaster_subone2[".printFields"][] = "MAX(ItemID)";
$tdatainventorymaster_subone2[".printFields"][] = "Brand";
$tdatainventorymaster_subone2[".printFields"][] = "Description";
$tdatainventorymaster_subone2[".printFields"][] = "Supplier";
$tdatainventorymaster_subone2[".printFields"][] = "UnitPrice";
$tdatainventorymaster_subone2[".printFields"][] = "SUM(Quantity)";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone2","Id"); 
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
	
	
	
	

	

	
	$tdatainventorymaster_subone2["Id"] = $fdata;
//	MAX(ItemID)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MAX(ItemID)";
	$fdata["GoodName"] = "MAX_ItemID_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone2","MAX_ItemID_"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MAX(ItemID)"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX(inventorymaster.ItemID)";
	
		
		
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

	

	
	$tdatainventorymaster_subone2["MAX(ItemID)"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone2","Brand"); 
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

	

	
	$tdatainventorymaster_subone2["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone2","Description"); 
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

	

	
	$tdatainventorymaster_subone2["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone2","Supplier"); 
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

	

	
	$tdatainventorymaster_subone2["Supplier"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone2","UnitPrice"); 
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

	

	
	$tdatainventorymaster_subone2["UnitPrice"] = $fdata;
//	SUM(Quantity)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SUM(Quantity)";
	$fdata["GoodName"] = "SUM_Quantity_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone2","SUM_Quantity_"); 
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

	

	
	$tdatainventorymaster_subone2["SUM(Quantity)"] = $fdata;

	
$tables_data["inventorymaster-subone2"]=&$tdatainventorymaster_subone2;
$field_labels["inventorymaster_subone2"] = &$fieldLabelsinventorymaster_subone2;
$fieldToolTips["inventorymaster-subone2"] = &$fieldToolTipsinventorymaster_subone2;
$page_titles["inventorymaster_subone2"] = &$pageTitlesinventorymaster_subone2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inventorymaster-subone2"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["inventorymaster-subone2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inventorymaster_subone2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "inventorymaster.Id,  MAX(inventorymaster.ItemID) AS `MAX(ItemID)`,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  creategrn.UnitPrice,  SUM(creategrn.Quantity) AS `SUM(Quantity)`";
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
	"m_srcTableName" => "inventorymaster-subone2"
));

$proto5["m_sql"] = "inventorymaster.Id";
$proto5["m_srcTableName"] = "inventorymaster-subone2";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$proto8=array();
$proto8["m_functiontype"] = "SQLF_MAX";
$proto8["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone2"
));

$proto8["m_arguments"][]=$obj;
$proto8["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto8);

$proto7["m_sql"] = "MAX(inventorymaster.ItemID)";
$proto7["m_srcTableName"] = "inventorymaster-subone2";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "MAX(ItemID)";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone2"
));

$proto10["m_sql"] = "inventorymaster.Brand";
$proto10["m_srcTableName"] = "inventorymaster-subone2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone2"
));

$proto12["m_sql"] = "inventorymaster.Description";
$proto12["m_srcTableName"] = "inventorymaster-subone2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone2"
));

$proto14["m_sql"] = "inventorymaster.Supplier";
$proto14["m_srcTableName"] = "inventorymaster-subone2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone2"
));

$proto16["m_sql"] = "creategrn.UnitPrice";
$proto16["m_srcTableName"] = "inventorymaster-subone2";
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
	"m_srcTableName" => "inventorymaster-subone2"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "SUM(creategrn.Quantity)";
$proto18["m_srcTableName"] = "inventorymaster-subone2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "SUM(Quantity)";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "inventorymaster";
$proto22["m_srcTableName"] = "inventorymaster-subone2";
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
$proto21["m_srcTableName"] = "inventorymaster-subone2";
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
$proto26["m_srcTableName"] = "inventorymaster-subone2";
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
$proto25["m_srcTableName"] = "inventorymaster-subone2";
$proto27=array();
$proto27["m_sql"] = "creategrn.ItemCode = inventorymaster.ItemID";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone2"
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
	"m_srcTableName" => "inventorymaster-subone2"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone2"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone2"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone2"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone2"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="inventorymaster-subone2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inventorymaster_subone2 = createSqlQuery_inventorymaster_subone2();


	
							
	
$tdatainventorymaster_subone2[".sqlquery"] = $queryData_inventorymaster_subone2;

$tableEvents["inventorymaster-subone2"] = new eventsBase;
$tdatainventorymaster_subone2[".hasEvents"] = false;

?>