<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainventorymaster_Report = array();
	$tdatainventorymaster_Report[".truncateText"] = true;
	$tdatainventorymaster_Report[".NumberOfChars"] = 80;
	$tdatainventorymaster_Report[".ShortName"] = "inventorymaster_Report";
	$tdatainventorymaster_Report[".OwnerID"] = "";
	$tdatainventorymaster_Report[".OriginalTable"] = "inventorymaster";

//	field labels
$fieldLabelsinventorymaster_Report = array();
$fieldToolTipsinventorymaster_Report = array();
$pageTitlesinventorymaster_Report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinventorymaster_Report["English"] = array();
	$fieldToolTipsinventorymaster_Report["English"] = array();
	$pageTitlesinventorymaster_Report["English"] = array();
	$fieldLabelsinventorymaster_Report["English"]["Id"] = "Id";
	$fieldToolTipsinventorymaster_Report["English"]["Id"] = "";
	$fieldLabelsinventorymaster_Report["English"]["ItemID"] = "Item ID";
	$fieldToolTipsinventorymaster_Report["English"]["ItemID"] = "";
	$fieldLabelsinventorymaster_Report["English"]["Brand"] = "Brand";
	$fieldToolTipsinventorymaster_Report["English"]["Brand"] = "";
	$fieldLabelsinventorymaster_Report["English"]["Description"] = "Description";
	$fieldToolTipsinventorymaster_Report["English"]["Description"] = "";
	$fieldLabelsinventorymaster_Report["English"]["Supplier"] = "Supplier";
	$fieldToolTipsinventorymaster_Report["English"]["Supplier"] = "";
	if (count($fieldToolTipsinventorymaster_Report["English"]))
		$tdatainventorymaster_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinventorymaster_Report[""] = array();
	$fieldToolTipsinventorymaster_Report[""] = array();
	$pageTitlesinventorymaster_Report[""] = array();
	if (count($fieldToolTipsinventorymaster_Report[""]))
		$tdatainventorymaster_Report[".isUseToolTips"] = true;
}


	$tdatainventorymaster_Report[".NCSearch"] = true;



$tdatainventorymaster_Report[".shortTableName"] = "inventorymaster_Report";
$tdatainventorymaster_Report[".nSecOptions"] = 0;
$tdatainventorymaster_Report[".recsPerRowPrint"] = 1;
$tdatainventorymaster_Report[".mainTableOwnerID"] = "";
$tdatainventorymaster_Report[".moveNext"] = 1;
$tdatainventorymaster_Report[".entityType"] = 2;

$tdatainventorymaster_Report[".strOriginalTableName"] = "inventorymaster";

		 



$tdatainventorymaster_Report[".showAddInPopup"] = false;

$tdatainventorymaster_Report[".showEditInPopup"] = false;

$tdatainventorymaster_Report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainventorymaster_Report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainventorymaster_Report[".fieldsForRegister"] = array();

$tdatainventorymaster_Report[".listAjax"] = false;

	$tdatainventorymaster_Report[".audit"] = false;

	$tdatainventorymaster_Report[".locking"] = false;

$tdatainventorymaster_Report[".edit"] = true;
$tdatainventorymaster_Report[".afterEditAction"] = 1;
$tdatainventorymaster_Report[".closePopupAfterEdit"] = 1;
$tdatainventorymaster_Report[".afterEditActionDetTable"] = "";

$tdatainventorymaster_Report[".add"] = true;
$tdatainventorymaster_Report[".afterAddAction"] = 1;
$tdatainventorymaster_Report[".closePopupAfterAdd"] = 1;
$tdatainventorymaster_Report[".afterAddActionDetTable"] = "";

$tdatainventorymaster_Report[".list"] = true;

$tdatainventorymaster_Report[".inlineEdit"] = true;



$tdatainventorymaster_Report[".inlineAdd"] = true;
$tdatainventorymaster_Report[".view"] = true;


$tdatainventorymaster_Report[".exportTo"] = true;

$tdatainventorymaster_Report[".printFriendly"] = true;

$tdatainventorymaster_Report[".delete"] = true;

$tdatainventorymaster_Report[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatainventorymaster_Report[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatainventorymaster_Report[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatainventorymaster_Report[".searchSaving"] = false;
//

$tdatainventorymaster_Report[".showSearchPanel"] = true;
		$tdatainventorymaster_Report[".flexibleSearch"] = true;

$tdatainventorymaster_Report[".isUseAjaxSuggest"] = true;




$tdatainventorymaster_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainventorymaster_Report[".isUseTimeForSearch"] = false;





$tdatainventorymaster_Report[".allSearchFields"] = array();
$tdatainventorymaster_Report[".filterFields"] = array();
$tdatainventorymaster_Report[".requiredSearchFields"] = array();

$tdatainventorymaster_Report[".allSearchFields"][] = "Id";
	$tdatainventorymaster_Report[".allSearchFields"][] = "ItemID";
	$tdatainventorymaster_Report[".allSearchFields"][] = "Brand";
	$tdatainventorymaster_Report[".allSearchFields"][] = "Description";
	$tdatainventorymaster_Report[".allSearchFields"][] = "Supplier";
	

$tdatainventorymaster_Report[".googleLikeFields"] = array();
$tdatainventorymaster_Report[".googleLikeFields"][] = "Id";
$tdatainventorymaster_Report[".googleLikeFields"][] = "ItemID";
$tdatainventorymaster_Report[".googleLikeFields"][] = "Brand";
$tdatainventorymaster_Report[".googleLikeFields"][] = "Description";
$tdatainventorymaster_Report[".googleLikeFields"][] = "Supplier";


$tdatainventorymaster_Report[".advSearchFields"] = array();
$tdatainventorymaster_Report[".advSearchFields"][] = "Id";
$tdatainventorymaster_Report[".advSearchFields"][] = "ItemID";
$tdatainventorymaster_Report[".advSearchFields"][] = "Brand";
$tdatainventorymaster_Report[".advSearchFields"][] = "Description";
$tdatainventorymaster_Report[".advSearchFields"][] = "Supplier";

$tdatainventorymaster_Report[".tableType"] = "report";

$tdatainventorymaster_Report[".printerPageOrientation"] = 0;
$tdatainventorymaster_Report[".nPrinterPageScale"] = 100;

$tdatainventorymaster_Report[".nPrinterSplitRecords"] = 40;

$tdatainventorymaster_Report[".nPrinterPDFSplitRecords"] = 40;



$tdatainventorymaster_Report[".geocodingEnabled"] = false;

//report settings
$tdatainventorymaster_Report[".printReportLayout"] = 6;

$tdatainventorymaster_Report[".reportPrintPartitionType"] = 1;
$tdatainventorymaster_Report[".reportPrintGroupsPerPage"] = 40;
$tdatainventorymaster_Report[".reportPrintPDFGroupsPerPage"] = 40;
$tdatainventorymaster_Report[".lowGroup"] = 0;



$tdatainventorymaster_Report[".pageSize"] = 20;






$tdatainventorymaster_Report[".repShowDet"] = true;

$tdatainventorymaster_Report[".reportLayout"] = 6;

//end of report settings




$tdatainventorymaster_Report[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainventorymaster_Report[".strOrderBy"] = $tstrOrderBy;

$tdatainventorymaster_Report[".orderindexes"] = array();

$tdatainventorymaster_Report[".sqlHead"] = "SELECT Id,  	ItemID,  	Brand,  	Description,  	Supplier";
$tdatainventorymaster_Report[".sqlFrom"] = "FROM inventorymaster";
$tdatainventorymaster_Report[".sqlWhereExpr"] = "";
$tdatainventorymaster_Report[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainventorymaster_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainventorymaster_Report[".arrGroupsPerPage"] = $arrGPP;

$tdatainventorymaster_Report[".highlightSearchResults"] = true;

$tableKeysinventorymaster_Report = array();
$tableKeysinventorymaster_Report[] = "Id";
$tdatainventorymaster_Report[".Keys"] = $tableKeysinventorymaster_Report;

$tdatainventorymaster_Report[".listFields"] = array();
$tdatainventorymaster_Report[".listFields"][] = "Id";
$tdatainventorymaster_Report[".listFields"][] = "ItemID";
$tdatainventorymaster_Report[".listFields"][] = "Brand";
$tdatainventorymaster_Report[".listFields"][] = "Description";
$tdatainventorymaster_Report[".listFields"][] = "Supplier";

$tdatainventorymaster_Report[".hideMobileList"] = array();


$tdatainventorymaster_Report[".viewFields"] = array();
$tdatainventorymaster_Report[".viewFields"][] = "Id";
$tdatainventorymaster_Report[".viewFields"][] = "ItemID";
$tdatainventorymaster_Report[".viewFields"][] = "Brand";
$tdatainventorymaster_Report[".viewFields"][] = "Description";
$tdatainventorymaster_Report[".viewFields"][] = "Supplier";

$tdatainventorymaster_Report[".addFields"] = array();
$tdatainventorymaster_Report[".addFields"][] = "ItemID";
$tdatainventorymaster_Report[".addFields"][] = "Brand";
$tdatainventorymaster_Report[".addFields"][] = "Description";
$tdatainventorymaster_Report[".addFields"][] = "Supplier";

$tdatainventorymaster_Report[".masterListFields"] = array();
$tdatainventorymaster_Report[".masterListFields"][] = "Id";
$tdatainventorymaster_Report[".masterListFields"][] = "ItemID";
$tdatainventorymaster_Report[".masterListFields"][] = "Brand";
$tdatainventorymaster_Report[".masterListFields"][] = "Description";
$tdatainventorymaster_Report[".masterListFields"][] = "Supplier";

$tdatainventorymaster_Report[".inlineAddFields"] = array();
$tdatainventorymaster_Report[".inlineAddFields"][] = "ItemID";
$tdatainventorymaster_Report[".inlineAddFields"][] = "Brand";
$tdatainventorymaster_Report[".inlineAddFields"][] = "Description";
$tdatainventorymaster_Report[".inlineAddFields"][] = "Supplier";

$tdatainventorymaster_Report[".editFields"] = array();
$tdatainventorymaster_Report[".editFields"][] = "ItemID";
$tdatainventorymaster_Report[".editFields"][] = "Brand";
$tdatainventorymaster_Report[".editFields"][] = "Description";
$tdatainventorymaster_Report[".editFields"][] = "Supplier";

$tdatainventorymaster_Report[".inlineEditFields"] = array();
$tdatainventorymaster_Report[".inlineEditFields"][] = "ItemID";
$tdatainventorymaster_Report[".inlineEditFields"][] = "Brand";
$tdatainventorymaster_Report[".inlineEditFields"][] = "Description";
$tdatainventorymaster_Report[".inlineEditFields"][] = "Supplier";

$tdatainventorymaster_Report[".updateSelectedFields"] = array();
$tdatainventorymaster_Report[".updateSelectedFields"][] = "ItemID";
$tdatainventorymaster_Report[".updateSelectedFields"][] = "Brand";
$tdatainventorymaster_Report[".updateSelectedFields"][] = "Description";
$tdatainventorymaster_Report[".updateSelectedFields"][] = "Supplier";


$tdatainventorymaster_Report[".exportFields"] = array();
$tdatainventorymaster_Report[".exportFields"][] = "Id";
$tdatainventorymaster_Report[".exportFields"][] = "ItemID";
$tdatainventorymaster_Report[".exportFields"][] = "Brand";
$tdatainventorymaster_Report[".exportFields"][] = "Description";
$tdatainventorymaster_Report[".exportFields"][] = "Supplier";

$tdatainventorymaster_Report[".importFields"] = array();
$tdatainventorymaster_Report[".importFields"][] = "Id";
$tdatainventorymaster_Report[".importFields"][] = "ItemID";
$tdatainventorymaster_Report[".importFields"][] = "Brand";
$tdatainventorymaster_Report[".importFields"][] = "Description";
$tdatainventorymaster_Report[".importFields"][] = "Supplier";

$tdatainventorymaster_Report[".printFields"] = array();
$tdatainventorymaster_Report[".printFields"][] = "Id";
$tdatainventorymaster_Report[".printFields"][] = "ItemID";
$tdatainventorymaster_Report[".printFields"][] = "Brand";
$tdatainventorymaster_Report[".printFields"][] = "Description";
$tdatainventorymaster_Report[".printFields"][] = "Supplier";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_Report","Id");
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




	$tdatainventorymaster_Report["Id"] = $fdata;
//	ItemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemID";
	$fdata["GoodName"] = "ItemID";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_Report","ItemID");
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




	$tdatainventorymaster_Report["ItemID"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_Report","Brand");
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




	$tdatainventorymaster_Report["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_Report","Description");
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




	$tdatainventorymaster_Report["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_Report","Supplier");
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




	$tdatainventorymaster_Report["Supplier"] = $fdata;


$tables_data["inventorymaster Report"]=&$tdatainventorymaster_Report;
$field_labels["inventorymaster_Report"] = &$fieldLabelsinventorymaster_Report;
$fieldToolTips["inventorymaster_Report"] = &$fieldToolTipsinventorymaster_Report;
$page_titles["inventorymaster_Report"] = &$pageTitlesinventorymaster_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inventorymaster Report"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["inventorymaster Report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inventorymaster_Report()
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
	"m_srcTableName" => "inventorymaster Report"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "inventorymaster Report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster Report"
));

$proto8["m_sql"] = "ItemID";
$proto8["m_srcTableName"] = "inventorymaster Report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster Report"
));

$proto10["m_sql"] = "Brand";
$proto10["m_srcTableName"] = "inventorymaster Report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster Report"
));

$proto12["m_sql"] = "Description";
$proto12["m_srcTableName"] = "inventorymaster Report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster Report"
));

$proto14["m_sql"] = "Supplier";
$proto14["m_srcTableName"] = "inventorymaster Report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "inventorymaster";
$proto17["m_srcTableName"] = "inventorymaster Report";
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
$proto16["m_srcTableName"] = "inventorymaster Report";
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
$proto0["m_srcTableName"]="inventorymaster Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inventorymaster_Report = createSqlQuery_inventorymaster_Report();


	
					
;

					

$tdatainventorymaster_Report[".sqlquery"] = $queryData_inventorymaster_Report;

$tableEvents["inventorymaster Report"] = new eventsBase;
$tdatainventorymaster_Report[".hasEvents"] = false;

?>