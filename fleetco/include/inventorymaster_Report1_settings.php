<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainventorymaster_Report1 = array();
	$tdatainventorymaster_Report1[".truncateText"] = true;
	$tdatainventorymaster_Report1[".NumberOfChars"] = 80;
	$tdatainventorymaster_Report1[".ShortName"] = "inventorymaster_Report1";
	$tdatainventorymaster_Report1[".OwnerID"] = "";
	$tdatainventorymaster_Report1[".OriginalTable"] = "inventorymaster";

//	field labels
$fieldLabelsinventorymaster_Report1 = array();
$fieldToolTipsinventorymaster_Report1 = array();
$pageTitlesinventorymaster_Report1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinventorymaster_Report1["English"] = array();
	$fieldToolTipsinventorymaster_Report1["English"] = array();
	$pageTitlesinventorymaster_Report1["English"] = array();
	$fieldLabelsinventorymaster_Report1["English"]["Id"] = "Id";
	$fieldToolTipsinventorymaster_Report1["English"]["Id"] = "";
	$fieldLabelsinventorymaster_Report1["English"]["ItemID"] = "Item ID";
	$fieldToolTipsinventorymaster_Report1["English"]["ItemID"] = "";
	$fieldLabelsinventorymaster_Report1["English"]["Brand"] = "Brand";
	$fieldToolTipsinventorymaster_Report1["English"]["Brand"] = "";
	$fieldLabelsinventorymaster_Report1["English"]["Description"] = "Description";
	$fieldToolTipsinventorymaster_Report1["English"]["Description"] = "";
	$fieldLabelsinventorymaster_Report1["English"]["Supplier"] = "Supplier";
	$fieldToolTipsinventorymaster_Report1["English"]["Supplier"] = "";
	if (count($fieldToolTipsinventorymaster_Report1["English"]))
		$tdatainventorymaster_Report1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinventorymaster_Report1[""] = array();
	$fieldToolTipsinventorymaster_Report1[""] = array();
	$pageTitlesinventorymaster_Report1[""] = array();
	if (count($fieldToolTipsinventorymaster_Report1[""]))
		$tdatainventorymaster_Report1[".isUseToolTips"] = true;
}


	$tdatainventorymaster_Report1[".NCSearch"] = true;



$tdatainventorymaster_Report1[".shortTableName"] = "inventorymaster_Report1";
$tdatainventorymaster_Report1[".nSecOptions"] = 0;
$tdatainventorymaster_Report1[".recsPerRowPrint"] = 1;
$tdatainventorymaster_Report1[".mainTableOwnerID"] = "";
$tdatainventorymaster_Report1[".moveNext"] = 1;
$tdatainventorymaster_Report1[".entityType"] = 2;

$tdatainventorymaster_Report1[".strOriginalTableName"] = "inventorymaster";

		 



$tdatainventorymaster_Report1[".showAddInPopup"] = false;

$tdatainventorymaster_Report1[".showEditInPopup"] = false;

$tdatainventorymaster_Report1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainventorymaster_Report1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainventorymaster_Report1[".fieldsForRegister"] = array();

$tdatainventorymaster_Report1[".listAjax"] = false;

	$tdatainventorymaster_Report1[".audit"] = false;

	$tdatainventorymaster_Report1[".locking"] = false;

$tdatainventorymaster_Report1[".edit"] = true;
$tdatainventorymaster_Report1[".afterEditAction"] = 1;
$tdatainventorymaster_Report1[".closePopupAfterEdit"] = 1;
$tdatainventorymaster_Report1[".afterEditActionDetTable"] = "";

$tdatainventorymaster_Report1[".add"] = true;
$tdatainventorymaster_Report1[".afterAddAction"] = 1;
$tdatainventorymaster_Report1[".closePopupAfterAdd"] = 1;
$tdatainventorymaster_Report1[".afterAddActionDetTable"] = "";

$tdatainventorymaster_Report1[".list"] = true;

$tdatainventorymaster_Report1[".inlineEdit"] = true;



$tdatainventorymaster_Report1[".inlineAdd"] = true;
$tdatainventorymaster_Report1[".view"] = true;


$tdatainventorymaster_Report1[".exportTo"] = true;

$tdatainventorymaster_Report1[".printFriendly"] = true;

$tdatainventorymaster_Report1[".delete"] = true;

$tdatainventorymaster_Report1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatainventorymaster_Report1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatainventorymaster_Report1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatainventorymaster_Report1[".searchSaving"] = false;
//

$tdatainventorymaster_Report1[".showSearchPanel"] = true;
		$tdatainventorymaster_Report1[".flexibleSearch"] = true;

$tdatainventorymaster_Report1[".isUseAjaxSuggest"] = true;




$tdatainventorymaster_Report1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainventorymaster_Report1[".isUseTimeForSearch"] = false;





$tdatainventorymaster_Report1[".allSearchFields"] = array();
$tdatainventorymaster_Report1[".filterFields"] = array();
$tdatainventorymaster_Report1[".requiredSearchFields"] = array();

$tdatainventorymaster_Report1[".allSearchFields"][] = "Id";
	$tdatainventorymaster_Report1[".allSearchFields"][] = "ItemID";
	$tdatainventorymaster_Report1[".allSearchFields"][] = "Brand";
	$tdatainventorymaster_Report1[".allSearchFields"][] = "Description";
	$tdatainventorymaster_Report1[".allSearchFields"][] = "Supplier";
	

$tdatainventorymaster_Report1[".googleLikeFields"] = array();
$tdatainventorymaster_Report1[".googleLikeFields"][] = "Id";
$tdatainventorymaster_Report1[".googleLikeFields"][] = "ItemID";
$tdatainventorymaster_Report1[".googleLikeFields"][] = "Brand";
$tdatainventorymaster_Report1[".googleLikeFields"][] = "Description";
$tdatainventorymaster_Report1[".googleLikeFields"][] = "Supplier";


$tdatainventorymaster_Report1[".advSearchFields"] = array();
$tdatainventorymaster_Report1[".advSearchFields"][] = "Id";
$tdatainventorymaster_Report1[".advSearchFields"][] = "ItemID";
$tdatainventorymaster_Report1[".advSearchFields"][] = "Brand";
$tdatainventorymaster_Report1[".advSearchFields"][] = "Description";
$tdatainventorymaster_Report1[".advSearchFields"][] = "Supplier";

$tdatainventorymaster_Report1[".tableType"] = "report";

$tdatainventorymaster_Report1[".printerPageOrientation"] = 0;
$tdatainventorymaster_Report1[".nPrinterPageScale"] = 100;

$tdatainventorymaster_Report1[".nPrinterSplitRecords"] = 40;

$tdatainventorymaster_Report1[".nPrinterPDFSplitRecords"] = 40;



$tdatainventorymaster_Report1[".geocodingEnabled"] = false;

//report settings
$tdatainventorymaster_Report1[".printReportLayout"] = 6;

$tdatainventorymaster_Report1[".reportPrintPartitionType"] = 1;
$tdatainventorymaster_Report1[".reportPrintGroupsPerPage"] = 40;
$tdatainventorymaster_Report1[".reportPrintPDFGroupsPerPage"] = 40;
$tdatainventorymaster_Report1[".lowGroup"] = 0;



$tdatainventorymaster_Report1[".pageSize"] = 20;






$tdatainventorymaster_Report1[".repShowDet"] = true;

$tdatainventorymaster_Report1[".reportLayout"] = 6;

//end of report settings




$tdatainventorymaster_Report1[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainventorymaster_Report1[".strOrderBy"] = $tstrOrderBy;

$tdatainventorymaster_Report1[".orderindexes"] = array();

$tdatainventorymaster_Report1[".sqlHead"] = "SELECT Id,  	ItemID,  	Brand,  	Description,  	Supplier";
$tdatainventorymaster_Report1[".sqlFrom"] = "FROM inventorymaster";
$tdatainventorymaster_Report1[".sqlWhereExpr"] = "";
$tdatainventorymaster_Report1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainventorymaster_Report1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainventorymaster_Report1[".arrGroupsPerPage"] = $arrGPP;

$tdatainventorymaster_Report1[".highlightSearchResults"] = true;

$tableKeysinventorymaster_Report1 = array();
$tableKeysinventorymaster_Report1[] = "Id";
$tdatainventorymaster_Report1[".Keys"] = $tableKeysinventorymaster_Report1;

$tdatainventorymaster_Report1[".listFields"] = array();
$tdatainventorymaster_Report1[".listFields"][] = "Id";
$tdatainventorymaster_Report1[".listFields"][] = "ItemID";
$tdatainventorymaster_Report1[".listFields"][] = "Brand";
$tdatainventorymaster_Report1[".listFields"][] = "Description";
$tdatainventorymaster_Report1[".listFields"][] = "Supplier";

$tdatainventorymaster_Report1[".hideMobileList"] = array();


$tdatainventorymaster_Report1[".viewFields"] = array();
$tdatainventorymaster_Report1[".viewFields"][] = "Id";
$tdatainventorymaster_Report1[".viewFields"][] = "ItemID";
$tdatainventorymaster_Report1[".viewFields"][] = "Brand";
$tdatainventorymaster_Report1[".viewFields"][] = "Description";
$tdatainventorymaster_Report1[".viewFields"][] = "Supplier";

$tdatainventorymaster_Report1[".addFields"] = array();
$tdatainventorymaster_Report1[".addFields"][] = "ItemID";
$tdatainventorymaster_Report1[".addFields"][] = "Brand";
$tdatainventorymaster_Report1[".addFields"][] = "Description";
$tdatainventorymaster_Report1[".addFields"][] = "Supplier";

$tdatainventorymaster_Report1[".masterListFields"] = array();
$tdatainventorymaster_Report1[".masterListFields"][] = "Id";
$tdatainventorymaster_Report1[".masterListFields"][] = "ItemID";
$tdatainventorymaster_Report1[".masterListFields"][] = "Brand";
$tdatainventorymaster_Report1[".masterListFields"][] = "Description";
$tdatainventorymaster_Report1[".masterListFields"][] = "Supplier";

$tdatainventorymaster_Report1[".inlineAddFields"] = array();
$tdatainventorymaster_Report1[".inlineAddFields"][] = "ItemID";
$tdatainventorymaster_Report1[".inlineAddFields"][] = "Brand";
$tdatainventorymaster_Report1[".inlineAddFields"][] = "Description";
$tdatainventorymaster_Report1[".inlineAddFields"][] = "Supplier";

$tdatainventorymaster_Report1[".editFields"] = array();
$tdatainventorymaster_Report1[".editFields"][] = "ItemID";
$tdatainventorymaster_Report1[".editFields"][] = "Brand";
$tdatainventorymaster_Report1[".editFields"][] = "Description";
$tdatainventorymaster_Report1[".editFields"][] = "Supplier";

$tdatainventorymaster_Report1[".inlineEditFields"] = array();
$tdatainventorymaster_Report1[".inlineEditFields"][] = "ItemID";
$tdatainventorymaster_Report1[".inlineEditFields"][] = "Brand";
$tdatainventorymaster_Report1[".inlineEditFields"][] = "Description";
$tdatainventorymaster_Report1[".inlineEditFields"][] = "Supplier";

$tdatainventorymaster_Report1[".updateSelectedFields"] = array();
$tdatainventorymaster_Report1[".updateSelectedFields"][] = "ItemID";
$tdatainventorymaster_Report1[".updateSelectedFields"][] = "Brand";
$tdatainventorymaster_Report1[".updateSelectedFields"][] = "Description";
$tdatainventorymaster_Report1[".updateSelectedFields"][] = "Supplier";


$tdatainventorymaster_Report1[".exportFields"] = array();
$tdatainventorymaster_Report1[".exportFields"][] = "Id";
$tdatainventorymaster_Report1[".exportFields"][] = "ItemID";
$tdatainventorymaster_Report1[".exportFields"][] = "Brand";
$tdatainventorymaster_Report1[".exportFields"][] = "Description";
$tdatainventorymaster_Report1[".exportFields"][] = "Supplier";

$tdatainventorymaster_Report1[".importFields"] = array();
$tdatainventorymaster_Report1[".importFields"][] = "Id";
$tdatainventorymaster_Report1[".importFields"][] = "ItemID";
$tdatainventorymaster_Report1[".importFields"][] = "Brand";
$tdatainventorymaster_Report1[".importFields"][] = "Description";
$tdatainventorymaster_Report1[".importFields"][] = "Supplier";

$tdatainventorymaster_Report1[".printFields"] = array();
$tdatainventorymaster_Report1[".printFields"][] = "Id";
$tdatainventorymaster_Report1[".printFields"][] = "ItemID";
$tdatainventorymaster_Report1[".printFields"][] = "Brand";
$tdatainventorymaster_Report1[".printFields"][] = "Description";
$tdatainventorymaster_Report1[".printFields"][] = "Supplier";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_Report1","Id");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

		$fdata["AutoInc"] = true;

	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatainventorymaster_Report1["Id"] = $fdata;
//	ItemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemID";
	$fdata["GoodName"] = "ItemID";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_Report1","ItemID");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ItemID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ItemID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
	
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatainventorymaster_Report1["ItemID"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_Report1","Brand");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Brand";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Brand";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatainventorymaster_Report1["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_Report1","Description");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Description";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatainventorymaster_Report1["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_Report1","Supplier");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Supplier";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Supplier";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatainventorymaster_Report1["Supplier"] = $fdata;


$tables_data["inventorymaster Report1"]=&$tdatainventorymaster_Report1;
$field_labels["inventorymaster_Report1"] = &$fieldLabelsinventorymaster_Report1;
$fieldToolTips["inventorymaster_Report1"] = &$fieldToolTipsinventorymaster_Report1;
$page_titles["inventorymaster_Report1"] = &$pageTitlesinventorymaster_Report1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inventorymaster Report1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["inventorymaster Report1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inventorymaster_Report1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  	ItemID,  	Brand,  	Description,  	Supplier";
$proto0["m_strFrom"] = "FROM inventorymaster";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "Id",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster Report1"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "inventorymaster Report1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster Report1"
));

$proto8["m_sql"] = "ItemID";
$proto8["m_srcTableName"] = "inventorymaster Report1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster Report1"
));

$proto10["m_sql"] = "Brand";
$proto10["m_srcTableName"] = "inventorymaster Report1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster Report1"
));

$proto12["m_sql"] = "Description";
$proto12["m_srcTableName"] = "inventorymaster Report1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster Report1"
));

$proto14["m_sql"] = "Supplier";
$proto14["m_srcTableName"] = "inventorymaster Report1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "inventorymaster";
$proto17["m_srcTableName"] = "inventorymaster Report1";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "Id";
$proto17["m_columns"][] = "ItemID";
$proto17["m_columns"][] = "Brand";
$proto17["m_columns"][] = "Description";
$proto17["m_columns"][] = "Supplier";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "inventorymaster";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "inventorymaster Report1";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="inventorymaster Report1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inventorymaster_Report1 = createSqlQuery_inventorymaster_Report1();


	
					
;

					

$tdatainventorymaster_Report1[".sqlquery"] = $queryData_inventorymaster_Report1;

$tableEvents["inventorymaster Report1"] = new eventsBase;
$tdatainventorymaster_Report1[".hasEvents"] = false;

?>