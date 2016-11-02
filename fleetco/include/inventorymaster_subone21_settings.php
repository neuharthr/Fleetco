<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainventorymaster_subone21 = array();	
	$tdatainventorymaster_subone21[".truncateText"] = true;
	$tdatainventorymaster_subone21[".NumberOfChars"] = 80; 
	$tdatainventorymaster_subone21[".ShortName"] = "inventorymaster_subone21";
	$tdatainventorymaster_subone21[".OwnerID"] = "";
	$tdatainventorymaster_subone21[".OriginalTable"] = "inventorymaster";

//	field labels
$fieldLabelsinventorymaster_subone21 = array();
$fieldToolTipsinventorymaster_subone21 = array();
$pageTitlesinventorymaster_subone21 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinventorymaster_subone21["English"] = array();
	$fieldToolTipsinventorymaster_subone21["English"] = array();
	$pageTitlesinventorymaster_subone21["English"] = array();
	if (count($fieldToolTipsinventorymaster_subone21["English"]))
		$tdatainventorymaster_subone21[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinventorymaster_subone21[""] = array();
	$fieldToolTipsinventorymaster_subone21[""] = array();
	$pageTitlesinventorymaster_subone21[""] = array();
	if (count($fieldToolTipsinventorymaster_subone21[""]))
		$tdatainventorymaster_subone21[".isUseToolTips"] = true;
}
	
	
	$tdatainventorymaster_subone21[".NCSearch"] = true;



$tdatainventorymaster_subone21[".shortTableName"] = "inventorymaster_subone21";
$tdatainventorymaster_subone21[".nSecOptions"] = 0;
$tdatainventorymaster_subone21[".recsPerRowList"] = 1;
$tdatainventorymaster_subone21[".recsPerRowPrint"] = 1;
$tdatainventorymaster_subone21[".mainTableOwnerID"] = "";
$tdatainventorymaster_subone21[".moveNext"] = 1;
$tdatainventorymaster_subone21[".entityType"] = 1;

$tdatainventorymaster_subone21[".strOriginalTableName"] = "inventorymaster";




$tdatainventorymaster_subone21[".showAddInPopup"] = false;

$tdatainventorymaster_subone21[".showEditInPopup"] = false;

$tdatainventorymaster_subone21[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainventorymaster_subone21[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainventorymaster_subone21[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatainventorymaster_subone21[".listAjax"] = true;
else 
	$tdatainventorymaster_subone21[".listAjax"] = false;

	$tdatainventorymaster_subone21[".audit"] = false;

	$tdatainventorymaster_subone21[".locking"] = false;


$tdatainventorymaster_subone21[".add"] = true;
$tdatainventorymaster_subone21[".afterAddAction"] = 1;
$tdatainventorymaster_subone21[".closePopupAfterAdd"] = 1;
$tdatainventorymaster_subone21[".afterAddActionDetTable"] = "";

$tdatainventorymaster_subone21[".list"] = true;


$tdatainventorymaster_subone21[".import"] = true;

$tdatainventorymaster_subone21[".exportTo"] = true;

$tdatainventorymaster_subone21[".printFriendly"] = true;


$tdatainventorymaster_subone21[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatainventorymaster_subone21[".searchSaving"] = false;
//

$tdatainventorymaster_subone21[".showSearchPanel"] = true;
		$tdatainventorymaster_subone21[".flexibleSearch"] = true;		

if (isMobile())
	$tdatainventorymaster_subone21[".isUseAjaxSuggest"] = false;
else 
	$tdatainventorymaster_subone21[".isUseAjaxSuggest"] = true;

$tdatainventorymaster_subone21[".rowHighlite"] = true;



$tdatainventorymaster_subone21[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainventorymaster_subone21[".isUseTimeForSearch"] = false;





$tdatainventorymaster_subone21[".allSearchFields"] = array();
$tdatainventorymaster_subone21[".filterFields"] = array();
$tdatainventorymaster_subone21[".requiredSearchFields"] = array();

$tdatainventorymaster_subone21[".allSearchFields"][] = "MAX(Id)";
	$tdatainventorymaster_subone21[".allSearchFields"][] = "ItemID";
	$tdatainventorymaster_subone21[".allSearchFields"][] = "Brand";
	$tdatainventorymaster_subone21[".allSearchFields"][] = "Description";
	$tdatainventorymaster_subone21[".allSearchFields"][] = "Supplier";
	$tdatainventorymaster_subone21[".allSearchFields"][] = "UnitPrice";
	$tdatainventorymaster_subone21[".allSearchFields"][] = "SUM(Quantity)";
	

$tdatainventorymaster_subone21[".googleLikeFields"] = array();
$tdatainventorymaster_subone21[".googleLikeFields"][] = "MAX(Id)";
$tdatainventorymaster_subone21[".googleLikeFields"][] = "ItemID";
$tdatainventorymaster_subone21[".googleLikeFields"][] = "Brand";
$tdatainventorymaster_subone21[".googleLikeFields"][] = "Description";
$tdatainventorymaster_subone21[".googleLikeFields"][] = "Supplier";
$tdatainventorymaster_subone21[".googleLikeFields"][] = "UnitPrice";
$tdatainventorymaster_subone21[".googleLikeFields"][] = "SUM(Quantity)";


$tdatainventorymaster_subone21[".advSearchFields"] = array();
$tdatainventorymaster_subone21[".advSearchFields"][] = "MAX(Id)";
$tdatainventorymaster_subone21[".advSearchFields"][] = "ItemID";
$tdatainventorymaster_subone21[".advSearchFields"][] = "Brand";
$tdatainventorymaster_subone21[".advSearchFields"][] = "Description";
$tdatainventorymaster_subone21[".advSearchFields"][] = "Supplier";
$tdatainventorymaster_subone21[".advSearchFields"][] = "UnitPrice";
$tdatainventorymaster_subone21[".advSearchFields"][] = "SUM(Quantity)";

$tdatainventorymaster_subone21[".tableType"] = "list";

$tdatainventorymaster_subone21[".printerPageOrientation"] = 0;
$tdatainventorymaster_subone21[".nPrinterPageScale"] = 100;

$tdatainventorymaster_subone21[".nPrinterSplitRecords"] = 40;

$tdatainventorymaster_subone21[".nPrinterPDFSplitRecords"] = 40;



$tdatainventorymaster_subone21[".geocodingEnabled"] = false;




	





// view page pdf
$tdatainventorymaster_subone21[".isViewPagePDF"] = true;
$tdatainventorymaster_subone21[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatainventorymaster_subone21[".isPrinterPagePDF"] = true;
$tdatainventorymaster_subone21[".nPrinterPagePDFScale"] = 100;


$tdatainventorymaster_subone21[".pageSize"] = 20;

$tdatainventorymaster_subone21[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainventorymaster_subone21[".strOrderBy"] = $tstrOrderBy;

$tdatainventorymaster_subone21[".orderindexes"] = array();

$tdatainventorymaster_subone21[".sqlHead"] = "SELECT MAX(inventorymaster.Id) AS `MAX(Id)`,  inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  creategrn.UnitPrice,  SUM(creategrn.Quantity) AS `SUM(Quantity)`";
$tdatainventorymaster_subone21[".sqlFrom"] = "FROM inventorymaster  RIGHT OUTER JOIN creategrn ON creategrn.ItemCode = inventorymaster.ItemID";
$tdatainventorymaster_subone21[".sqlWhereExpr"] = "";
$tdatainventorymaster_subone21[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatainventorymaster_subone21[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainventorymaster_subone21[".arrGroupsPerPage"] = $arrGPP;

$tdatainventorymaster_subone21[".highlightSearchResults"] = true;

$tableKeysinventorymaster_subone21 = array();
$tdatainventorymaster_subone21[".Keys"] = $tableKeysinventorymaster_subone21;

$tdatainventorymaster_subone21[".listFields"] = array();
$tdatainventorymaster_subone21[".listFields"][] = "ItemID";
$tdatainventorymaster_subone21[".listFields"][] = "UnitPrice";
$tdatainventorymaster_subone21[".listFields"][] = "MAX(Id)";
$tdatainventorymaster_subone21[".listFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subone21[".listFields"][] = "Brand";
$tdatainventorymaster_subone21[".listFields"][] = "Description";
$tdatainventorymaster_subone21[".listFields"][] = "Supplier";

$tdatainventorymaster_subone21[".hideMobileList"] = array();


$tdatainventorymaster_subone21[".viewFields"] = array();
$tdatainventorymaster_subone21[".viewFields"][] = "MAX(Id)";
$tdatainventorymaster_subone21[".viewFields"][] = "ItemID";
$tdatainventorymaster_subone21[".viewFields"][] = "Brand";
$tdatainventorymaster_subone21[".viewFields"][] = "Description";
$tdatainventorymaster_subone21[".viewFields"][] = "Supplier";
$tdatainventorymaster_subone21[".viewFields"][] = "UnitPrice";
$tdatainventorymaster_subone21[".viewFields"][] = "SUM(Quantity)";

$tdatainventorymaster_subone21[".addFields"] = array();
$tdatainventorymaster_subone21[".addFields"][] = "ItemID";
$tdatainventorymaster_subone21[".addFields"][] = "Brand";
$tdatainventorymaster_subone21[".addFields"][] = "Description";
$tdatainventorymaster_subone21[".addFields"][] = "Supplier";

$tdatainventorymaster_subone21[".masterListFields"] = array();
$tdatainventorymaster_subone21[".masterListFields"][] = "MAX(Id)";
$tdatainventorymaster_subone21[".masterListFields"][] = "ItemID";
$tdatainventorymaster_subone21[".masterListFields"][] = "Brand";
$tdatainventorymaster_subone21[".masterListFields"][] = "Description";
$tdatainventorymaster_subone21[".masterListFields"][] = "Supplier";
$tdatainventorymaster_subone21[".masterListFields"][] = "UnitPrice";
$tdatainventorymaster_subone21[".masterListFields"][] = "SUM(Quantity)";

$tdatainventorymaster_subone21[".inlineAddFields"] = array();
$tdatainventorymaster_subone21[".inlineAddFields"][] = "ItemID";

$tdatainventorymaster_subone21[".editFields"] = array();
$tdatainventorymaster_subone21[".editFields"][] = "ItemID";
$tdatainventorymaster_subone21[".editFields"][] = "Brand";
$tdatainventorymaster_subone21[".editFields"][] = "Description";
$tdatainventorymaster_subone21[".editFields"][] = "Supplier";

$tdatainventorymaster_subone21[".inlineEditFields"] = array();
$tdatainventorymaster_subone21[".inlineEditFields"][] = "ItemID";

$tdatainventorymaster_subone21[".exportFields"] = array();
$tdatainventorymaster_subone21[".exportFields"][] = "MAX(Id)";
$tdatainventorymaster_subone21[".exportFields"][] = "ItemID";
$tdatainventorymaster_subone21[".exportFields"][] = "Brand";
$tdatainventorymaster_subone21[".exportFields"][] = "Description";
$tdatainventorymaster_subone21[".exportFields"][] = "Supplier";
$tdatainventorymaster_subone21[".exportFields"][] = "UnitPrice";
$tdatainventorymaster_subone21[".exportFields"][] = "SUM(Quantity)";

$tdatainventorymaster_subone21[".importFields"] = array();
$tdatainventorymaster_subone21[".importFields"][] = "MAX(Id)";
$tdatainventorymaster_subone21[".importFields"][] = "ItemID";
$tdatainventorymaster_subone21[".importFields"][] = "Brand";
$tdatainventorymaster_subone21[".importFields"][] = "Description";
$tdatainventorymaster_subone21[".importFields"][] = "Supplier";
$tdatainventorymaster_subone21[".importFields"][] = "UnitPrice";
$tdatainventorymaster_subone21[".importFields"][] = "SUM(Quantity)";

$tdatainventorymaster_subone21[".printFields"] = array();
$tdatainventorymaster_subone21[".printFields"][] = "MAX(Id)";
$tdatainventorymaster_subone21[".printFields"][] = "ItemID";
$tdatainventorymaster_subone21[".printFields"][] = "Brand";
$tdatainventorymaster_subone21[".printFields"][] = "Description";
$tdatainventorymaster_subone21[".printFields"][] = "Supplier";
$tdatainventorymaster_subone21[".printFields"][] = "UnitPrice";
$tdatainventorymaster_subone21[".printFields"][] = "SUM(Quantity)";

//	MAX(Id)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MAX(Id)";
	$fdata["GoodName"] = "MAX_Id_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone21","MAX_Id_"); 
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

	

	
	$tdatainventorymaster_subone21["MAX(Id)"] = $fdata;
//	ItemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemID";
	$fdata["GoodName"] = "ItemID";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone21","ItemID"); 
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

	

	
	$tdatainventorymaster_subone21["ItemID"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone21","Brand"); 
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

	

	
	$tdatainventorymaster_subone21["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone21","Description"); 
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

	

	
	$tdatainventorymaster_subone21["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone21","Supplier"); 
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

	

	
	$tdatainventorymaster_subone21["Supplier"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone21","UnitPrice"); 
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

	

	
	$tdatainventorymaster_subone21["UnitPrice"] = $fdata;
//	SUM(Quantity)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SUM(Quantity)";
	$fdata["GoodName"] = "SUM_Quantity_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone21","SUM_Quantity_"); 
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

	

	
	$tdatainventorymaster_subone21["SUM(Quantity)"] = $fdata;

	
$tables_data["inventorymaster-subone21"]=&$tdatainventorymaster_subone21;
$field_labels["inventorymaster_subone21"] = &$fieldLabelsinventorymaster_subone21;
$fieldToolTips["inventorymaster-subone21"] = &$fieldToolTipsinventorymaster_subone21;
$page_titles["inventorymaster_subone21"] = &$pageTitlesinventorymaster_subone21;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inventorymaster-subone21"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["inventorymaster-subone21"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inventorymaster_subone21()
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
	"m_srcTableName" => "inventorymaster-subone21"
));

$proto6["m_arguments"][]=$obj;
$proto6["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto6);

$proto5["m_sql"] = "MAX(inventorymaster.Id)";
$proto5["m_srcTableName"] = "inventorymaster-subone21";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "MAX(Id)";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone21"
));

$proto8["m_sql"] = "inventorymaster.ItemID";
$proto8["m_srcTableName"] = "inventorymaster-subone21";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone21"
));

$proto10["m_sql"] = "inventorymaster.Brand";
$proto10["m_srcTableName"] = "inventorymaster-subone21";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone21"
));

$proto12["m_sql"] = "inventorymaster.Description";
$proto12["m_srcTableName"] = "inventorymaster-subone21";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone21"
));

$proto14["m_sql"] = "inventorymaster.Supplier";
$proto14["m_srcTableName"] = "inventorymaster-subone21";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone21"
));

$proto16["m_sql"] = "creategrn.UnitPrice";
$proto16["m_srcTableName"] = "inventorymaster-subone21";
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
	"m_srcTableName" => "inventorymaster-subone21"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "SUM(creategrn.Quantity)";
$proto18["m_srcTableName"] = "inventorymaster-subone21";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "SUM(Quantity)";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "inventorymaster";
$proto22["m_srcTableName"] = "inventorymaster-subone21";
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
$proto21["m_srcTableName"] = "inventorymaster-subone21";
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
$proto26["m_srcTableName"] = "inventorymaster-subone21";
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
$proto25["m_srcTableName"] = "inventorymaster-subone21";
$proto27=array();
$proto27["m_sql"] = "creategrn.ItemCode = inventorymaster.ItemID";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone21"
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
	"m_srcTableName" => "inventorymaster-subone21"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone21"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone21"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone21"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone21"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="inventorymaster-subone21";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inventorymaster_subone21 = createSqlQuery_inventorymaster_subone21();


	
							
	
$tdatainventorymaster_subone21[".sqlquery"] = $queryData_inventorymaster_subone21;

$tableEvents["inventorymaster-subone21"] = new eventsBase;
$tdatainventorymaster_subone21[".hasEvents"] = false;

?>