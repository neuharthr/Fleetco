<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainventorymaster_subone = array();	
	$tdatainventorymaster_subone[".truncateText"] = true;
	$tdatainventorymaster_subone[".NumberOfChars"] = 80; 
	$tdatainventorymaster_subone[".ShortName"] = "inventorymaster_subone";
	$tdatainventorymaster_subone[".OwnerID"] = "";
	$tdatainventorymaster_subone[".OriginalTable"] = "inventorymaster";

//	field labels
$fieldLabelsinventorymaster_subone = array();
$fieldToolTipsinventorymaster_subone = array();
$pageTitlesinventorymaster_subone = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinventorymaster_subone["English"] = array();
	$fieldToolTipsinventorymaster_subone["English"] = array();
	$pageTitlesinventorymaster_subone["English"] = array();
	$fieldLabelsinventorymaster_subone["English"]["Id"] = "Id";
	$fieldToolTipsinventorymaster_subone["English"]["Id"] = "";
	$fieldLabelsinventorymaster_subone["English"]["ItemID"] = "Item ID";
	$fieldToolTipsinventorymaster_subone["English"]["ItemID"] = "";
	$fieldLabelsinventorymaster_subone["English"]["Brand"] = "Brand";
	$fieldToolTipsinventorymaster_subone["English"]["Brand"] = "";
	$fieldLabelsinventorymaster_subone["English"]["Description"] = "Description";
	$fieldToolTipsinventorymaster_subone["English"]["Description"] = "";
	$fieldLabelsinventorymaster_subone["English"]["Supplier"] = "Supplier";
	$fieldToolTipsinventorymaster_subone["English"]["Supplier"] = "";
	$fieldLabelsinventorymaster_subone["English"]["UnitPrice"] = "Unit Price";
	$fieldToolTipsinventorymaster_subone["English"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_subone["English"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_subone["English"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_subone["English"]["SUM_Quantity_"] = "SUM(Quantity)";
	$fieldToolTipsinventorymaster_subone["English"]["SUM(Quantity)"] = "";
	if (count($fieldToolTipsinventorymaster_subone["English"]))
		$tdatainventorymaster_subone[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinventorymaster_subone[""] = array();
	$fieldToolTipsinventorymaster_subone[""] = array();
	$pageTitlesinventorymaster_subone[""] = array();
	$fieldLabelsinventorymaster_subone[""]["UnitPrice"] = "Unit Price";
	$fieldToolTipsinventorymaster_subone[""]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_subone[""]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_subone[""]["GRNDate"] = "";
	$fieldLabelsinventorymaster_subone[""]["SUM_Quantity_"] = "SUM(Quantity)";
	$fieldToolTipsinventorymaster_subone[""]["SUM(Quantity)"] = "";
	if (count($fieldToolTipsinventorymaster_subone[""]))
		$tdatainventorymaster_subone[".isUseToolTips"] = true;
}
	
	
	$tdatainventorymaster_subone[".NCSearch"] = true;



$tdatainventorymaster_subone[".shortTableName"] = "inventorymaster_subone";
$tdatainventorymaster_subone[".nSecOptions"] = 0;
$tdatainventorymaster_subone[".recsPerRowList"] = 1;
$tdatainventorymaster_subone[".recsPerRowPrint"] = 1;
$tdatainventorymaster_subone[".mainTableOwnerID"] = "";
$tdatainventorymaster_subone[".moveNext"] = 1;
$tdatainventorymaster_subone[".entityType"] = 1;

$tdatainventorymaster_subone[".strOriginalTableName"] = "inventorymaster";




$tdatainventorymaster_subone[".showAddInPopup"] = false;

$tdatainventorymaster_subone[".showEditInPopup"] = false;

$tdatainventorymaster_subone[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainventorymaster_subone[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainventorymaster_subone[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatainventorymaster_subone[".listAjax"] = true;
else 
	$tdatainventorymaster_subone[".listAjax"] = false;

	$tdatainventorymaster_subone[".audit"] = false;

	$tdatainventorymaster_subone[".locking"] = false;

$tdatainventorymaster_subone[".edit"] = true;
$tdatainventorymaster_subone[".afterEditAction"] = 1;
$tdatainventorymaster_subone[".closePopupAfterEdit"] = 1;
$tdatainventorymaster_subone[".afterEditActionDetTable"] = "";

$tdatainventorymaster_subone[".add"] = true;
$tdatainventorymaster_subone[".afterAddAction"] = 1;
$tdatainventorymaster_subone[".closePopupAfterAdd"] = 1;
$tdatainventorymaster_subone[".afterAddActionDetTable"] = "";

$tdatainventorymaster_subone[".list"] = true;

$tdatainventorymaster_subone[".view"] = true;

$tdatainventorymaster_subone[".import"] = true;

$tdatainventorymaster_subone[".exportTo"] = true;

$tdatainventorymaster_subone[".printFriendly"] = true;

$tdatainventorymaster_subone[".delete"] = true;

$tdatainventorymaster_subone[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatainventorymaster_subone[".searchSaving"] = false;
//

$tdatainventorymaster_subone[".showSearchPanel"] = true;
		$tdatainventorymaster_subone[".flexibleSearch"] = true;		

if (isMobile())
	$tdatainventorymaster_subone[".isUseAjaxSuggest"] = false;
else 
	$tdatainventorymaster_subone[".isUseAjaxSuggest"] = true;

$tdatainventorymaster_subone[".rowHighlite"] = true;



$tdatainventorymaster_subone[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainventorymaster_subone[".isUseTimeForSearch"] = false;





$tdatainventorymaster_subone[".allSearchFields"] = array();
$tdatainventorymaster_subone[".filterFields"] = array();
$tdatainventorymaster_subone[".requiredSearchFields"] = array();

$tdatainventorymaster_subone[".allSearchFields"][] = "ItemID";
	$tdatainventorymaster_subone[".allSearchFields"][] = "Brand";
	$tdatainventorymaster_subone[".allSearchFields"][] = "Description";
	$tdatainventorymaster_subone[".allSearchFields"][] = "Supplier";
	$tdatainventorymaster_subone[".allSearchFields"][] = "UnitPrice";
	$tdatainventorymaster_subone[".allSearchFields"][] = "GRNDate";
	$tdatainventorymaster_subone[".allSearchFields"][] = "SUM(Quantity)";
	

$tdatainventorymaster_subone[".googleLikeFields"] = array();
$tdatainventorymaster_subone[".googleLikeFields"][] = "Id";
$tdatainventorymaster_subone[".googleLikeFields"][] = "ItemID";
$tdatainventorymaster_subone[".googleLikeFields"][] = "Brand";
$tdatainventorymaster_subone[".googleLikeFields"][] = "Description";
$tdatainventorymaster_subone[".googleLikeFields"][] = "Supplier";
$tdatainventorymaster_subone[".googleLikeFields"][] = "UnitPrice";
$tdatainventorymaster_subone[".googleLikeFields"][] = "GRNDate";
$tdatainventorymaster_subone[".googleLikeFields"][] = "SUM(Quantity)";


$tdatainventorymaster_subone[".advSearchFields"] = array();
$tdatainventorymaster_subone[".advSearchFields"][] = "ItemID";
$tdatainventorymaster_subone[".advSearchFields"][] = "Brand";
$tdatainventorymaster_subone[".advSearchFields"][] = "Description";
$tdatainventorymaster_subone[".advSearchFields"][] = "Supplier";
$tdatainventorymaster_subone[".advSearchFields"][] = "UnitPrice";
$tdatainventorymaster_subone[".advSearchFields"][] = "GRNDate";
$tdatainventorymaster_subone[".advSearchFields"][] = "SUM(Quantity)";

$tdatainventorymaster_subone[".tableType"] = "list";

$tdatainventorymaster_subone[".printerPageOrientation"] = 0;
$tdatainventorymaster_subone[".nPrinterPageScale"] = 100;

$tdatainventorymaster_subone[".nPrinterSplitRecords"] = 40;

$tdatainventorymaster_subone[".nPrinterPDFSplitRecords"] = 40;



$tdatainventorymaster_subone[".geocodingEnabled"] = false;




	





// view page pdf
$tdatainventorymaster_subone[".isViewPagePDF"] = true;
$tdatainventorymaster_subone[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatainventorymaster_subone[".isPrinterPagePDF"] = true;
$tdatainventorymaster_subone[".nPrinterPagePDFScale"] = 100;


$tdatainventorymaster_subone[".pageSize"] = 20;

$tdatainventorymaster_subone[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainventorymaster_subone[".strOrderBy"] = $tstrOrderBy;

$tdatainventorymaster_subone[".orderindexes"] = array();

$tdatainventorymaster_subone[".sqlHead"] = "SELECT inventorymaster.Id,  inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  creategrn.UnitPrice,  creategrn.GRNDate,  SUM(creategrn.Quantity) AS `SUM(Quantity)`";
$tdatainventorymaster_subone[".sqlFrom"] = "FROM inventorymaster  RIGHT OUTER JOIN creategrn ON creategrn.ItemCode = inventorymaster.ItemID";
$tdatainventorymaster_subone[".sqlWhereExpr"] = "";
$tdatainventorymaster_subone[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$tdatainventorymaster_subone[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainventorymaster_subone[".arrGroupsPerPage"] = $arrGPP;

$tdatainventorymaster_subone[".highlightSearchResults"] = true;

$tableKeysinventorymaster_subone = array();
$tableKeysinventorymaster_subone[] = "Id";
$tdatainventorymaster_subone[".Keys"] = $tableKeysinventorymaster_subone;

$tdatainventorymaster_subone[".listFields"] = array();
$tdatainventorymaster_subone[".listFields"][] = "UnitPrice";
$tdatainventorymaster_subone[".listFields"][] = "GRNDate";
$tdatainventorymaster_subone[".listFields"][] = "SUM(Quantity)";
$tdatainventorymaster_subone[".listFields"][] = "ItemID";
$tdatainventorymaster_subone[".listFields"][] = "Brand";
$tdatainventorymaster_subone[".listFields"][] = "Description";
$tdatainventorymaster_subone[".listFields"][] = "Supplier";

$tdatainventorymaster_subone[".hideMobileList"] = array();


$tdatainventorymaster_subone[".viewFields"] = array();
$tdatainventorymaster_subone[".viewFields"][] = "ItemID";
$tdatainventorymaster_subone[".viewFields"][] = "Brand";
$tdatainventorymaster_subone[".viewFields"][] = "Description";
$tdatainventorymaster_subone[".viewFields"][] = "Supplier";
$tdatainventorymaster_subone[".viewFields"][] = "UnitPrice";
$tdatainventorymaster_subone[".viewFields"][] = "GRNDate";
$tdatainventorymaster_subone[".viewFields"][] = "SUM(Quantity)";

$tdatainventorymaster_subone[".addFields"] = array();
$tdatainventorymaster_subone[".addFields"][] = "ItemID";
$tdatainventorymaster_subone[".addFields"][] = "Brand";
$tdatainventorymaster_subone[".addFields"][] = "Description";
$tdatainventorymaster_subone[".addFields"][] = "Supplier";

$tdatainventorymaster_subone[".masterListFields"] = array();
$tdatainventorymaster_subone[".masterListFields"][] = "Id";
$tdatainventorymaster_subone[".masterListFields"][] = "ItemID";
$tdatainventorymaster_subone[".masterListFields"][] = "Brand";
$tdatainventorymaster_subone[".masterListFields"][] = "Description";
$tdatainventorymaster_subone[".masterListFields"][] = "Supplier";
$tdatainventorymaster_subone[".masterListFields"][] = "UnitPrice";
$tdatainventorymaster_subone[".masterListFields"][] = "GRNDate";
$tdatainventorymaster_subone[".masterListFields"][] = "SUM(Quantity)";

$tdatainventorymaster_subone[".inlineAddFields"] = array();

$tdatainventorymaster_subone[".editFields"] = array();
$tdatainventorymaster_subone[".editFields"][] = "ItemID";
$tdatainventorymaster_subone[".editFields"][] = "Brand";
$tdatainventorymaster_subone[".editFields"][] = "Description";
$tdatainventorymaster_subone[".editFields"][] = "Supplier";

$tdatainventorymaster_subone[".inlineEditFields"] = array();

$tdatainventorymaster_subone[".exportFields"] = array();
$tdatainventorymaster_subone[".exportFields"][] = "ItemID";
$tdatainventorymaster_subone[".exportFields"][] = "Brand";
$tdatainventorymaster_subone[".exportFields"][] = "Description";
$tdatainventorymaster_subone[".exportFields"][] = "Supplier";
$tdatainventorymaster_subone[".exportFields"][] = "UnitPrice";
$tdatainventorymaster_subone[".exportFields"][] = "GRNDate";
$tdatainventorymaster_subone[".exportFields"][] = "SUM(Quantity)";

$tdatainventorymaster_subone[".importFields"] = array();
$tdatainventorymaster_subone[".importFields"][] = "ItemID";
$tdatainventorymaster_subone[".importFields"][] = "Brand";
$tdatainventorymaster_subone[".importFields"][] = "Description";
$tdatainventorymaster_subone[".importFields"][] = "Supplier";
$tdatainventorymaster_subone[".importFields"][] = "UnitPrice";
$tdatainventorymaster_subone[".importFields"][] = "GRNDate";
$tdatainventorymaster_subone[".importFields"][] = "SUM(Quantity)";

$tdatainventorymaster_subone[".printFields"] = array();
$tdatainventorymaster_subone[".printFields"][] = "ItemID";
$tdatainventorymaster_subone[".printFields"][] = "Brand";
$tdatainventorymaster_subone[".printFields"][] = "Description";
$tdatainventorymaster_subone[".printFields"][] = "Supplier";
$tdatainventorymaster_subone[".printFields"][] = "UnitPrice";
$tdatainventorymaster_subone[".printFields"][] = "GRNDate";
$tdatainventorymaster_subone[".printFields"][] = "SUM(Quantity)";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone","Id"); 
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
	
	
	
	

	

	
	$tdatainventorymaster_subone["Id"] = $fdata;
//	ItemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemID";
	$fdata["GoodName"] = "ItemID";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone","ItemID"); 
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

	

	
	$tdatainventorymaster_subone["ItemID"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone","Brand"); 
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

	

	
	$tdatainventorymaster_subone["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone","Description"); 
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

	

	
	$tdatainventorymaster_subone["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone","Supplier"); 
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

	

	
	$tdatainventorymaster_subone["Supplier"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone","UnitPrice"); 
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

	

	
	$tdatainventorymaster_subone["UnitPrice"] = $fdata;
//	GRNDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "GRNDate";
	$fdata["GoodName"] = "GRNDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone","GRNDate"); 
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

	

	
	$tdatainventorymaster_subone["GRNDate"] = $fdata;
//	SUM(Quantity)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SUM(Quantity)";
	$fdata["GoodName"] = "SUM_Quantity_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("inventorymaster_subone","SUM_Quantity_"); 
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

	

	
	$tdatainventorymaster_subone["SUM(Quantity)"] = $fdata;

	
$tables_data["inventorymaster-subone"]=&$tdatainventorymaster_subone;
$field_labels["inventorymaster_subone"] = &$fieldLabelsinventorymaster_subone;
$fieldToolTips["inventorymaster-subone"] = &$fieldToolTipsinventorymaster_subone;
$page_titles["inventorymaster_subone"] = &$pageTitlesinventorymaster_subone;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inventorymaster-subone"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["inventorymaster-subone"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inventorymaster_subone()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "inventorymaster.Id,  inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  creategrn.UnitPrice,  creategrn.GRNDate,  SUM(creategrn.Quantity) AS `SUM(Quantity)`";
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
	"m_srcTableName" => "inventorymaster-subone"
));

$proto5["m_sql"] = "inventorymaster.Id";
$proto5["m_srcTableName"] = "inventorymaster-subone";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone"
));

$proto7["m_sql"] = "inventorymaster.ItemID";
$proto7["m_srcTableName"] = "inventorymaster-subone";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone"
));

$proto9["m_sql"] = "inventorymaster.Brand";
$proto9["m_srcTableName"] = "inventorymaster-subone";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone"
));

$proto11["m_sql"] = "inventorymaster.Description";
$proto11["m_srcTableName"] = "inventorymaster-subone";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone"
));

$proto13["m_sql"] = "inventorymaster.Supplier";
$proto13["m_srcTableName"] = "inventorymaster-subone";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone"
));

$proto15["m_sql"] = "creategrn.UnitPrice";
$proto15["m_srcTableName"] = "inventorymaster-subone";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone"
));

$proto17["m_sql"] = "creategrn.GRNDate";
$proto17["m_srcTableName"] = "inventorymaster-subone";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$proto20=array();
$proto20["m_functiontype"] = "SQLF_SUM";
$proto20["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone"
));

$proto20["m_arguments"][]=$obj;
$proto20["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto20);

$proto19["m_sql"] = "SUM(creategrn.Quantity)";
$proto19["m_srcTableName"] = "inventorymaster-subone";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "SUM(Quantity)";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "inventorymaster";
$proto23["m_srcTableName"] = "inventorymaster-subone";
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
$proto22["m_srcTableName"] = "inventorymaster-subone";
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
$proto27["m_srcTableName"] = "inventorymaster-subone";
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
$proto26["m_srcTableName"] = "inventorymaster-subone";
$proto28=array();
$proto28["m_sql"] = "creategrn.ItemCode = inventorymaster.ItemID";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone"
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
	"m_strName" => "Id",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-subone"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-subone"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="inventorymaster-subone";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inventorymaster_subone = createSqlQuery_inventorymaster_subone();


	
								
	
$tdatainventorymaster_subone[".sqlquery"] = $queryData_inventorymaster_subone;

$tableEvents["inventorymaster-subone"] = new eventsBase;
$tdatainventorymaster_subone[".hasEvents"] = false;

?>