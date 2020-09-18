<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainventorymaster_Report4 = array();
	$tdatainventorymaster_Report4[".truncateText"] = true;
	$tdatainventorymaster_Report4[".NumberOfChars"] = 80;
	$tdatainventorymaster_Report4[".ShortName"] = "inventorymaster_Report4";
	$tdatainventorymaster_Report4[".OwnerID"] = "";
	$tdatainventorymaster_Report4[".OriginalTable"] = "inventorymaster";

//	field labels
$fieldLabelsinventorymaster_Report4 = array();
$fieldToolTipsinventorymaster_Report4 = array();
$pageTitlesinventorymaster_Report4 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinventorymaster_Report4["English"] = array();
	$fieldToolTipsinventorymaster_Report4["English"] = array();
	$pageTitlesinventorymaster_Report4["English"] = array();
	$fieldLabelsinventorymaster_Report4["English"]["Id"] = "Id";
	$fieldToolTipsinventorymaster_Report4["English"]["Id"] = "";
	$fieldLabelsinventorymaster_Report4["English"]["ItemID"] = "Item ID";
	$fieldToolTipsinventorymaster_Report4["English"]["ItemID"] = "";
	$fieldLabelsinventorymaster_Report4["English"]["Brand"] = "Brand";
	$fieldToolTipsinventorymaster_Report4["English"]["Brand"] = "";
	$fieldLabelsinventorymaster_Report4["English"]["Description"] = "Description";
	$fieldToolTipsinventorymaster_Report4["English"]["Description"] = "";
	$fieldLabelsinventorymaster_Report4["English"]["Supplier"] = "Supplier";
	$fieldToolTipsinventorymaster_Report4["English"]["Supplier"] = "";
	if (count($fieldToolTipsinventorymaster_Report4["English"]))
		$tdatainventorymaster_Report4[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinventorymaster_Report4[""] = array();
	$fieldToolTipsinventorymaster_Report4[""] = array();
	$pageTitlesinventorymaster_Report4[""] = array();
	if (count($fieldToolTipsinventorymaster_Report4[""]))
		$tdatainventorymaster_Report4[".isUseToolTips"] = true;
}


	$tdatainventorymaster_Report4[".NCSearch"] = true;



$tdatainventorymaster_Report4[".shortTableName"] = "inventorymaster_Report4";
$tdatainventorymaster_Report4[".nSecOptions"] = 0;
$tdatainventorymaster_Report4[".recsPerRowPrint"] = 1;
$tdatainventorymaster_Report4[".mainTableOwnerID"] = "";
$tdatainventorymaster_Report4[".moveNext"] = 1;
$tdatainventorymaster_Report4[".entityType"] = 2;

$tdatainventorymaster_Report4[".strOriginalTableName"] = "inventorymaster";

		 



$tdatainventorymaster_Report4[".showAddInPopup"] = false;

$tdatainventorymaster_Report4[".showEditInPopup"] = false;

$tdatainventorymaster_Report4[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainventorymaster_Report4[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainventorymaster_Report4[".fieldsForRegister"] = array();

$tdatainventorymaster_Report4[".listAjax"] = false;

	$tdatainventorymaster_Report4[".audit"] = false;

	$tdatainventorymaster_Report4[".locking"] = false;

$tdatainventorymaster_Report4[".edit"] = true;
$tdatainventorymaster_Report4[".afterEditAction"] = 1;
$tdatainventorymaster_Report4[".closePopupAfterEdit"] = 1;
$tdatainventorymaster_Report4[".afterEditActionDetTable"] = "";

$tdatainventorymaster_Report4[".add"] = true;
$tdatainventorymaster_Report4[".afterAddAction"] = 1;
$tdatainventorymaster_Report4[".closePopupAfterAdd"] = 1;
$tdatainventorymaster_Report4[".afterAddActionDetTable"] = "";

$tdatainventorymaster_Report4[".list"] = true;

$tdatainventorymaster_Report4[".inlineEdit"] = true;



$tdatainventorymaster_Report4[".inlineAdd"] = true;
$tdatainventorymaster_Report4[".view"] = true;


$tdatainventorymaster_Report4[".exportTo"] = true;

$tdatainventorymaster_Report4[".printFriendly"] = true;

$tdatainventorymaster_Report4[".delete"] = true;

$tdatainventorymaster_Report4[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatainventorymaster_Report4[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatainventorymaster_Report4[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatainventorymaster_Report4[".searchSaving"] = false;
//

$tdatainventorymaster_Report4[".showSearchPanel"] = true;
		$tdatainventorymaster_Report4[".flexibleSearch"] = true;

$tdatainventorymaster_Report4[".isUseAjaxSuggest"] = true;




$tdatainventorymaster_Report4[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainventorymaster_Report4[".isUseTimeForSearch"] = false;





$tdatainventorymaster_Report4[".allSearchFields"] = array();
$tdatainventorymaster_Report4[".filterFields"] = array();
$tdatainventorymaster_Report4[".requiredSearchFields"] = array();

$tdatainventorymaster_Report4[".allSearchFields"][] = "Id";
	$tdatainventorymaster_Report4[".allSearchFields"][] = "ItemID";
	$tdatainventorymaster_Report4[".allSearchFields"][] = "Brand";
	$tdatainventorymaster_Report4[".allSearchFields"][] = "Description";
	$tdatainventorymaster_Report4[".allSearchFields"][] = "Supplier";
	

$tdatainventorymaster_Report4[".googleLikeFields"] = array();
$tdatainventorymaster_Report4[".googleLikeFields"][] = "Id";
$tdatainventorymaster_Report4[".googleLikeFields"][] = "ItemID";
$tdatainventorymaster_Report4[".googleLikeFields"][] = "Brand";
$tdatainventorymaster_Report4[".googleLikeFields"][] = "Description";
$tdatainventorymaster_Report4[".googleLikeFields"][] = "Supplier";


$tdatainventorymaster_Report4[".advSearchFields"] = array();
$tdatainventorymaster_Report4[".advSearchFields"][] = "Id";
$tdatainventorymaster_Report4[".advSearchFields"][] = "ItemID";
$tdatainventorymaster_Report4[".advSearchFields"][] = "Brand";
$tdatainventorymaster_Report4[".advSearchFields"][] = "Description";
$tdatainventorymaster_Report4[".advSearchFields"][] = "Supplier";

$tdatainventorymaster_Report4[".tableType"] = "report";

$tdatainventorymaster_Report4[".printerPageOrientation"] = 0;
$tdatainventorymaster_Report4[".nPrinterPageScale"] = 100;

$tdatainventorymaster_Report4[".nPrinterSplitRecords"] = 40;

$tdatainventorymaster_Report4[".nPrinterPDFSplitRecords"] = 40;



$tdatainventorymaster_Report4[".geocodingEnabled"] = false;

//report settings
$tdatainventorymaster_Report4[".printReportLayout"] = 6;

$tdatainventorymaster_Report4[".reportPrintPartitionType"] = 1;
$tdatainventorymaster_Report4[".reportPrintGroupsPerPage"] = 40;
$tdatainventorymaster_Report4[".reportPrintPDFGroupsPerPage"] = 40;
$tdatainventorymaster_Report4[".lowGroup"] = 0;



$tdatainventorymaster_Report4[".pageSize"] = 20;






$tdatainventorymaster_Report4[".repShowDet"] = true;

$tdatainventorymaster_Report4[".reportLayout"] = 6;

//end of report settings




$tdatainventorymaster_Report4[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainventorymaster_Report4[".strOrderBy"] = $tstrOrderBy;

$tdatainventorymaster_Report4[".orderindexes"] = array();

$tdatainventorymaster_Report4[".sqlHead"] = "SELECT Id,  	ItemID,  	Brand,  	Description,  	Supplier";
$tdatainventorymaster_Report4[".sqlFrom"] = "FROM inventorymaster";
$tdatainventorymaster_Report4[".sqlWhereExpr"] = "";
$tdatainventorymaster_Report4[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainventorymaster_Report4[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainventorymaster_Report4[".arrGroupsPerPage"] = $arrGPP;

$tdatainventorymaster_Report4[".highlightSearchResults"] = true;

$tableKeysinventorymaster_Report4 = array();
$tableKeysinventorymaster_Report4[] = "Id";
$tdatainventorymaster_Report4[".Keys"] = $tableKeysinventorymaster_Report4;

$tdatainventorymaster_Report4[".listFields"] = array();
$tdatainventorymaster_Report4[".listFields"][] = "Id";
$tdatainventorymaster_Report4[".listFields"][] = "ItemID";
$tdatainventorymaster_Report4[".listFields"][] = "Brand";
$tdatainventorymaster_Report4[".listFields"][] = "Description";
$tdatainventorymaster_Report4[".listFields"][] = "Supplier";

$tdatainventorymaster_Report4[".hideMobileList"] = array();


$tdatainventorymaster_Report4[".viewFields"] = array();
$tdatainventorymaster_Report4[".viewFields"][] = "Id";
$tdatainventorymaster_Report4[".viewFields"][] = "ItemID";
$tdatainventorymaster_Report4[".viewFields"][] = "Brand";
$tdatainventorymaster_Report4[".viewFields"][] = "Description";
$tdatainventorymaster_Report4[".viewFields"][] = "Supplier";

$tdatainventorymaster_Report4[".addFields"] = array();
$tdatainventorymaster_Report4[".addFields"][] = "ItemID";
$tdatainventorymaster_Report4[".addFields"][] = "Brand";
$tdatainventorymaster_Report4[".addFields"][] = "Description";
$tdatainventorymaster_Report4[".addFields"][] = "Supplier";

$tdatainventorymaster_Report4[".masterListFields"] = array();
$tdatainventorymaster_Report4[".masterListFields"][] = "Id";
$tdatainventorymaster_Report4[".masterListFields"][] = "ItemID";
$tdatainventorymaster_Report4[".masterListFields"][] = "Brand";
$tdatainventorymaster_Report4[".masterListFields"][] = "Description";
$tdatainventorymaster_Report4[".masterListFields"][] = "Supplier";

$tdatainventorymaster_Report4[".inlineAddFields"] = array();
$tdatainventorymaster_Report4[".inlineAddFields"][] = "ItemID";
$tdatainventorymaster_Report4[".inlineAddFields"][] = "Brand";
$tdatainventorymaster_Report4[".inlineAddFields"][] = "Description";
$tdatainventorymaster_Report4[".inlineAddFields"][] = "Supplier";

$tdatainventorymaster_Report4[".editFields"] = array();
$tdatainventorymaster_Report4[".editFields"][] = "ItemID";
$tdatainventorymaster_Report4[".editFields"][] = "Brand";
$tdatainventorymaster_Report4[".editFields"][] = "Description";
$tdatainventorymaster_Report4[".editFields"][] = "Supplier";

$tdatainventorymaster_Report4[".inlineEditFields"] = array();
$tdatainventorymaster_Report4[".inlineEditFields"][] = "ItemID";
$tdatainventorymaster_Report4[".inlineEditFields"][] = "Brand";
$tdatainventorymaster_Report4[".inlineEditFields"][] = "Description";
$tdatainventorymaster_Report4[".inlineEditFields"][] = "Supplier";

$tdatainventorymaster_Report4[".updateSelectedFields"] = array();
$tdatainventorymaster_Report4[".updateSelectedFields"][] = "ItemID";
$tdatainventorymaster_Report4[".updateSelectedFields"][] = "Brand";
$tdatainventorymaster_Report4[".updateSelectedFields"][] = "Description";
$tdatainventorymaster_Report4[".updateSelectedFields"][] = "Supplier";


$tdatainventorymaster_Report4[".exportFields"] = array();
$tdatainventorymaster_Report4[".exportFields"][] = "Id";
$tdatainventorymaster_Report4[".exportFields"][] = "ItemID";
$tdatainventorymaster_Report4[".exportFields"][] = "Brand";
$tdatainventorymaster_Report4[".exportFields"][] = "Description";
$tdatainventorymaster_Report4[".exportFields"][] = "Supplier";

$tdatainventorymaster_Report4[".importFields"] = array();
$tdatainventorymaster_Report4[".importFields"][] = "Id";
$tdatainventorymaster_Report4[".importFields"][] = "ItemID";
$tdatainventorymaster_Report4[".importFields"][] = "Brand";
$tdatainventorymaster_Report4[".importFields"][] = "Description";
$tdatainventorymaster_Report4[".importFields"][] = "Supplier";

$tdatainventorymaster_Report4[".printFields"] = array();
$tdatainventorymaster_Report4[".printFields"][] = "Id";
$tdatainventorymaster_Report4[".printFields"][] = "ItemID";
$tdatainventorymaster_Report4[".printFields"][] = "Brand";
$tdatainventorymaster_Report4[".printFields"][] = "Description";
$tdatainventorymaster_Report4[".printFields"][] = "Supplier";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_Report4","Id");
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




	$tdatainventorymaster_Report4["Id"] = $fdata;
//	ItemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemID";
	$fdata["GoodName"] = "ItemID";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_Report4","ItemID");
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




	$tdatainventorymaster_Report4["ItemID"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_Report4","Brand");
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




	$tdatainventorymaster_Report4["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_Report4","Description");
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




	$tdatainventorymaster_Report4["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_Report4","Supplier");
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




	$tdatainventorymaster_Report4["Supplier"] = $fdata;


$tables_data["inventorymaster Report4"]=&$tdatainventorymaster_Report4;
$field_labels["inventorymaster_Report4"] = &$fieldLabelsinventorymaster_Report4;
$fieldToolTips["inventorymaster_Report4"] = &$fieldToolTipsinventorymaster_Report4;
$page_titles["inventorymaster_Report4"] = &$pageTitlesinventorymaster_Report4;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inventorymaster Report4"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["inventorymaster Report4"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inventorymaster_Report4()
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
	"m_srcTableName" => "inventorymaster Report4"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "inventorymaster Report4";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster Report4"
));

$proto8["m_sql"] = "ItemID";
$proto8["m_srcTableName"] = "inventorymaster Report4";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster Report4"
));

$proto10["m_sql"] = "Brand";
$proto10["m_srcTableName"] = "inventorymaster Report4";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster Report4"
));

$proto12["m_sql"] = "Description";
$proto12["m_srcTableName"] = "inventorymaster Report4";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster Report4"
));

$proto14["m_sql"] = "Supplier";
$proto14["m_srcTableName"] = "inventorymaster Report4";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "inventorymaster";
$proto17["m_srcTableName"] = "inventorymaster Report4";
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
$proto16["m_srcTableName"] = "inventorymaster Report4";
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
$proto0["m_srcTableName"]="inventorymaster Report4";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inventorymaster_Report4 = createSqlQuery_inventorymaster_Report4();


	
					
;

					

$tdatainventorymaster_Report4[".sqlquery"] = $queryData_inventorymaster_Report4;

$tableEvents["inventorymaster Report4"] = new eventsBase;
$tdatainventorymaster_Report4[".hasEvents"] = false;

?>