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
	$fieldLabelsinventorymaster1["English"]["Id"] = "ID";
	$fieldToolTipsinventorymaster1["English"]["Id"] = "";
	$fieldLabelsinventorymaster1["English"]["ItemID"] = "Item ID";
	$fieldToolTipsinventorymaster1["English"]["ItemID"] = "";
	$fieldLabelsinventorymaster1["English"]["Brand"] = "Brand";
	$fieldToolTipsinventorymaster1["English"]["Brand"] = "";
	$fieldLabelsinventorymaster1["English"]["Description"] = "Description";
	$fieldToolTipsinventorymaster1["English"]["Description"] = "";
	$fieldLabelsinventorymaster1["English"]["Supplier"] = "Supplier";
	$fieldToolTipsinventorymaster1["English"]["Supplier"] = "";
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

	$tdatainventorymaster1[".listAjax"] = true;

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

// Allow Show/Hide Fields in GRID
$tdatainventorymaster1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatainventorymaster1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatainventorymaster1[".searchSaving"] = false;
//

$tdatainventorymaster1[".showSearchPanel"] = true;
		$tdatainventorymaster1[".flexibleSearch"] = true;

$tdatainventorymaster1[".isUseAjaxSuggest"] = true;

$tdatainventorymaster1[".rowHighlite"] = true;



$tdatainventorymaster1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainventorymaster1[".isUseTimeForSearch"] = false;



$tdatainventorymaster1[".badgeColor"] = "7B68EE";


$tdatainventorymaster1[".allSearchFields"] = array();
$tdatainventorymaster1[".filterFields"] = array();
$tdatainventorymaster1[".requiredSearchFields"] = array();

$tdatainventorymaster1[".allSearchFields"][] = "Id";
	$tdatainventorymaster1[".allSearchFields"][] = "ItemID";
	$tdatainventorymaster1[".allSearchFields"][] = "Brand";
	$tdatainventorymaster1[".allSearchFields"][] = "Description";
	$tdatainventorymaster1[".allSearchFields"][] = "Supplier";
	

$tdatainventorymaster1[".googleLikeFields"] = array();
$tdatainventorymaster1[".googleLikeFields"][] = "Id";
$tdatainventorymaster1[".googleLikeFields"][] = "ItemID";
$tdatainventorymaster1[".googleLikeFields"][] = "Brand";
$tdatainventorymaster1[".googleLikeFields"][] = "Description";
$tdatainventorymaster1[".googleLikeFields"][] = "Supplier";


$tdatainventorymaster1[".advSearchFields"] = array();
$tdatainventorymaster1[".advSearchFields"][] = "Id";
$tdatainventorymaster1[".advSearchFields"][] = "ItemID";
$tdatainventorymaster1[".advSearchFields"][] = "Brand";
$tdatainventorymaster1[".advSearchFields"][] = "Description";
$tdatainventorymaster1[".advSearchFields"][] = "Supplier";

$tdatainventorymaster1[".tableType"] = "list";

$tdatainventorymaster1[".printerPageOrientation"] = 0;
$tdatainventorymaster1[".nPrinterPageScale"] = 100;

$tdatainventorymaster1[".nPrinterSplitRecords"] = 40;

$tdatainventorymaster1[".nPrinterPDFSplitRecords"] = 40;



$tdatainventorymaster1[".geocodingEnabled"] = false;





$tdatainventorymaster1[".listGridLayout"] = 3;





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

$tdatainventorymaster1[".sqlHead"] = "SELECT Id,  	ItemID,  	Brand,  	Description,  	Supplier";
$tdatainventorymaster1[".sqlFrom"] = "FROM inventorymaster";
$tdatainventorymaster1[".sqlWhereExpr"] = "";
$tdatainventorymaster1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
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
$tdatainventorymaster1[".listFields"][] = "Id";
$tdatainventorymaster1[".listFields"][] = "ItemID";
$tdatainventorymaster1[".listFields"][] = "Brand";
$tdatainventorymaster1[".listFields"][] = "Description";
$tdatainventorymaster1[".listFields"][] = "Supplier";

$tdatainventorymaster1[".hideMobileList"] = array();


$tdatainventorymaster1[".viewFields"] = array();
$tdatainventorymaster1[".viewFields"][] = "Id";
$tdatainventorymaster1[".viewFields"][] = "ItemID";
$tdatainventorymaster1[".viewFields"][] = "Brand";
$tdatainventorymaster1[".viewFields"][] = "Description";
$tdatainventorymaster1[".viewFields"][] = "Supplier";

$tdatainventorymaster1[".addFields"] = array();
$tdatainventorymaster1[".addFields"][] = "ItemID";
$tdatainventorymaster1[".addFields"][] = "Brand";
$tdatainventorymaster1[".addFields"][] = "Description";
$tdatainventorymaster1[".addFields"][] = "Supplier";

$tdatainventorymaster1[".masterListFields"] = array();
$tdatainventorymaster1[".masterListFields"][] = "Id";
$tdatainventorymaster1[".masterListFields"][] = "ItemID";
$tdatainventorymaster1[".masterListFields"][] = "Brand";
$tdatainventorymaster1[".masterListFields"][] = "Description";
$tdatainventorymaster1[".masterListFields"][] = "Supplier";

$tdatainventorymaster1[".inlineAddFields"] = array();

$tdatainventorymaster1[".editFields"] = array();
$tdatainventorymaster1[".editFields"][] = "ItemID";
$tdatainventorymaster1[".editFields"][] = "Brand";
$tdatainventorymaster1[".editFields"][] = "Description";
$tdatainventorymaster1[".editFields"][] = "Supplier";

$tdatainventorymaster1[".inlineEditFields"] = array();

$tdatainventorymaster1[".updateSelectedFields"] = array();
$tdatainventorymaster1[".updateSelectedFields"][] = "ItemID";
$tdatainventorymaster1[".updateSelectedFields"][] = "Brand";
$tdatainventorymaster1[".updateSelectedFields"][] = "Description";
$tdatainventorymaster1[".updateSelectedFields"][] = "Supplier";


$tdatainventorymaster1[".exportFields"] = array();
$tdatainventorymaster1[".exportFields"][] = "Id";
$tdatainventorymaster1[".exportFields"][] = "ItemID";
$tdatainventorymaster1[".exportFields"][] = "Brand";
$tdatainventorymaster1[".exportFields"][] = "Description";
$tdatainventorymaster1[".exportFields"][] = "Supplier";

$tdatainventorymaster1[".importFields"] = array();
$tdatainventorymaster1[".importFields"][] = "Id";
$tdatainventorymaster1[".importFields"][] = "ItemID";
$tdatainventorymaster1[".importFields"][] = "Brand";
$tdatainventorymaster1[".importFields"][] = "Description";
$tdatainventorymaster1[".importFields"][] = "Supplier";

$tdatainventorymaster1[".printFields"] = array();
$tdatainventorymaster1[".printFields"][] = "Id";
$tdatainventorymaster1[".printFields"][] = "ItemID";
$tdatainventorymaster1[".printFields"][] = "Brand";
$tdatainventorymaster1[".printFields"][] = "Description";
$tdatainventorymaster1[".printFields"][] = "Supplier";

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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




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

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
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

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
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

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
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

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatainventorymaster1["Supplier"] = $fdata;


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
	"m_srcTableName" => "inventorymaster1"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "inventorymaster1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster1"
));

$proto8["m_sql"] = "ItemID";
$proto8["m_srcTableName"] = "inventorymaster1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster1"
));

$proto10["m_sql"] = "Brand";
$proto10["m_srcTableName"] = "inventorymaster1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster1"
));

$proto12["m_sql"] = "Description";
$proto12["m_srcTableName"] = "inventorymaster1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster1"
));

$proto14["m_sql"] = "Supplier";
$proto14["m_srcTableName"] = "inventorymaster1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "inventorymaster";
$proto17["m_srcTableName"] = "inventorymaster1";
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
$proto16["m_srcTableName"] = "inventorymaster1";
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
$proto0["m_srcTableName"]="inventorymaster1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inventorymaster1 = createSqlQuery_inventorymaster1();


	
					
;

					

$tdatainventorymaster1[".sqlquery"] = $queryData_inventorymaster1;

$tableEvents["inventorymaster1"] = new eventsBase;
$tdatainventorymaster1[".hasEvents"] = false;

?>