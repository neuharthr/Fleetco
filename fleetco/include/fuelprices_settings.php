<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafuelprices = array();
	$tdatafuelprices[".truncateText"] = true;
	$tdatafuelprices[".NumberOfChars"] = 80;
	$tdatafuelprices[".ShortName"] = "fuelprices";
	$tdatafuelprices[".OwnerID"] = "";
	$tdatafuelprices[".OriginalTable"] = "fuelprices";

//	field labels
$fieldLabelsfuelprices = array();
$fieldToolTipsfuelprices = array();
$pageTitlesfuelprices = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfuelprices["English"] = array();
	$fieldToolTipsfuelprices["English"] = array();
	$pageTitlesfuelprices["English"] = array();
	$fieldLabelsfuelprices["English"]["Id"] = "ID";
	$fieldToolTipsfuelprices["English"]["Id"] = "";
	$fieldLabelsfuelprices["English"]["FuelType"] = "Fuel Type";
	$fieldToolTipsfuelprices["English"]["FuelType"] = "";
	$fieldLabelsfuelprices["English"]["PricePerLiter"] = "Price Per Liter";
	$fieldToolTipsfuelprices["English"]["PricePerLiter"] = "";
	if (count($fieldToolTipsfuelprices["English"]))
		$tdatafuelprices[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsfuelprices["Afrikaans"] = array();
	$fieldToolTipsfuelprices["Afrikaans"] = array();
	$pageTitlesfuelprices["Afrikaans"] = array();
	$fieldLabelsfuelprices["Afrikaans"]["Id"] = "ID";
	$fieldToolTipsfuelprices["Afrikaans"]["Id"] = "";
	$fieldLabelsfuelprices["Afrikaans"]["FuelType"] = "brandstof Tipe";
	$fieldToolTipsfuelprices["Afrikaans"]["FuelType"] = "";
	$fieldLabelsfuelprices["Afrikaans"]["PricePerLiter"] = "Prys per liter";
	$fieldToolTipsfuelprices["Afrikaans"]["PricePerLiter"] = "";
	if (count($fieldToolTipsfuelprices["Afrikaans"]))
		$tdatafuelprices[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsfuelprices["Arabic"] = array();
	$fieldToolTipsfuelprices["Arabic"] = array();
	$pageTitlesfuelprices["Arabic"] = array();
	$fieldLabelsfuelprices["Arabic"]["Id"] = "???? ?????";
	$fieldToolTipsfuelprices["Arabic"]["Id"] = "";
	$fieldLabelsfuelprices["Arabic"]["FuelType"] = "??? ??????";
	$fieldToolTipsfuelprices["Arabic"]["FuelType"] = "";
	$fieldLabelsfuelprices["Arabic"]["PricePerLiter"] = "????? ??? ???";
	$fieldToolTipsfuelprices["Arabic"]["PricePerLiter"] = "";
	if (count($fieldToolTipsfuelprices["Arabic"]))
		$tdatafuelprices[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsfuelprices["Chinese"] = array();
	$fieldToolTipsfuelprices["Chinese"] = array();
	$pageTitlesfuelprices["Chinese"] = array();
	$fieldLabelsfuelprices["Chinese"]["Id"] = "ID";
	$fieldToolTipsfuelprices["Chinese"]["Id"] = "";
	$fieldLabelsfuelprices["Chinese"]["FuelType"] = "????";
	$fieldToolTipsfuelprices["Chinese"]["FuelType"] = "";
	$fieldLabelsfuelprices["Chinese"]["PricePerLiter"] = "????";
	$fieldToolTipsfuelprices["Chinese"]["PricePerLiter"] = "";
	if (count($fieldToolTipsfuelprices["Chinese"]))
		$tdatafuelprices[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsfuelprices["French"] = array();
	$fieldToolTipsfuelprices["French"] = array();
	$pageTitlesfuelprices["French"] = array();
	$fieldLabelsfuelprices["French"]["Id"] = "ID";
	$fieldToolTipsfuelprices["French"]["Id"] = "";
	$fieldLabelsfuelprices["French"]["FuelType"] = "Type de carburant";
	$fieldToolTipsfuelprices["French"]["FuelType"] = "";
	$fieldLabelsfuelprices["French"]["PricePerLiter"] = "Prix ??par litre";
	$fieldToolTipsfuelprices["French"]["PricePerLiter"] = "";
	if (count($fieldToolTipsfuelprices["French"]))
		$tdatafuelprices[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsfuelprices["German"] = array();
	$fieldToolTipsfuelprices["German"] = array();
	$pageTitlesfuelprices["German"] = array();
	$fieldLabelsfuelprices["German"]["Id"] = "ICH WÜRDE";
	$fieldToolTipsfuelprices["German"]["Id"] = "";
	$fieldLabelsfuelprices["German"]["FuelType"] = "Treibstoffart";
	$fieldToolTipsfuelprices["German"]["FuelType"] = "";
	$fieldLabelsfuelprices["German"]["PricePerLiter"] = "Preis pro Liter";
	$fieldToolTipsfuelprices["German"]["PricePerLiter"] = "";
	if (count($fieldToolTipsfuelprices["German"]))
		$tdatafuelprices[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsfuelprices["Italian"] = array();
	$fieldToolTipsfuelprices["Italian"] = array();
	$pageTitlesfuelprices["Italian"] = array();
	$fieldLabelsfuelprices["Italian"]["Id"] = "ID";
	$fieldToolTipsfuelprices["Italian"]["Id"] = "";
	$fieldLabelsfuelprices["Italian"]["FuelType"] = "Tipo di carburante";
	$fieldToolTipsfuelprices["Italian"]["FuelType"] = "";
	$fieldLabelsfuelprices["Italian"]["PricePerLiter"] = "Prezzo al litro";
	$fieldToolTipsfuelprices["Italian"]["PricePerLiter"] = "";
	if (count($fieldToolTipsfuelprices["Italian"]))
		$tdatafuelprices[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsfuelprices["Russian"] = array();
	$fieldToolTipsfuelprices["Russian"] = array();
	$pageTitlesfuelprices["Russian"] = array();
	$fieldLabelsfuelprices["Russian"]["Id"] = "? ??";
	$fieldToolTipsfuelprices["Russian"]["Id"] = "";
	$fieldLabelsfuelprices["Russian"]["FuelType"] = "??? ???????";
	$fieldToolTipsfuelprices["Russian"]["FuelType"] = "";
	$fieldLabelsfuelprices["Russian"]["PricePerLiter"] = "???? ?? ????";
	$fieldToolTipsfuelprices["Russian"]["PricePerLiter"] = "";
	if (count($fieldToolTipsfuelprices["Russian"]))
		$tdatafuelprices[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsfuelprices["Spanish"] = array();
	$fieldToolTipsfuelprices["Spanish"] = array();
	$pageTitlesfuelprices["Spanish"] = array();
	$fieldLabelsfuelprices["Spanish"]["Id"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipsfuelprices["Spanish"]["Id"] = "";
	$fieldLabelsfuelprices["Spanish"]["FuelType"] = "Tipo de combustible";
	$fieldToolTipsfuelprices["Spanish"]["FuelType"] = "";
	$fieldLabelsfuelprices["Spanish"]["PricePerLiter"] = "Precio por litro";
	$fieldToolTipsfuelprices["Spanish"]["PricePerLiter"] = "";
	if (count($fieldToolTipsfuelprices["Spanish"]))
		$tdatafuelprices[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfuelprices[""] = array();
	$fieldToolTipsfuelprices[""] = array();
	$pageTitlesfuelprices[""] = array();
	if (count($fieldToolTipsfuelprices[""]))
		$tdatafuelprices[".isUseToolTips"] = true;
}


	$tdatafuelprices[".NCSearch"] = true;



$tdatafuelprices[".shortTableName"] = "fuelprices";
$tdatafuelprices[".nSecOptions"] = 0;
$tdatafuelprices[".recsPerRowPrint"] = 1;
$tdatafuelprices[".mainTableOwnerID"] = "";
$tdatafuelprices[".moveNext"] = 1;
$tdatafuelprices[".entityType"] = 0;

$tdatafuelprices[".strOriginalTableName"] = "fuelprices";

		 



$tdatafuelprices[".showAddInPopup"] = false;

$tdatafuelprices[".showEditInPopup"] = false;

$tdatafuelprices[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafuelprices[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafuelprices[".fieldsForRegister"] = array();

	$tdatafuelprices[".listAjax"] = true;

	$tdatafuelprices[".audit"] = false;

	$tdatafuelprices[".locking"] = false;

$tdatafuelprices[".edit"] = true;
$tdatafuelprices[".afterEditAction"] = 1;
$tdatafuelprices[".closePopupAfterEdit"] = 1;
$tdatafuelprices[".afterEditActionDetTable"] = "";

$tdatafuelprices[".add"] = true;
$tdatafuelprices[".afterAddAction"] = 1;
$tdatafuelprices[".closePopupAfterAdd"] = 1;
$tdatafuelprices[".afterAddActionDetTable"] = "";

$tdatafuelprices[".list"] = true;




$tdatafuelprices[".view"] = true;

$tdatafuelprices[".import"] = true;

$tdatafuelprices[".exportTo"] = true;

$tdatafuelprices[".printFriendly"] = true;

$tdatafuelprices[".delete"] = true;

$tdatafuelprices[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafuelprices[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatafuelprices[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatafuelprices[".searchSaving"] = false;
//

$tdatafuelprices[".showSearchPanel"] = true;
		$tdatafuelprices[".flexibleSearch"] = true;

$tdatafuelprices[".isUseAjaxSuggest"] = true;

$tdatafuelprices[".rowHighlite"] = true;



$tdatafuelprices[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafuelprices[".isUseTimeForSearch"] = false;



$tdatafuelprices[".badgeColor"] = "279ED8";


$tdatafuelprices[".allSearchFields"] = array();
$tdatafuelprices[".filterFields"] = array();
$tdatafuelprices[".requiredSearchFields"] = array();

$tdatafuelprices[".allSearchFields"][] = "Id";
	$tdatafuelprices[".allSearchFields"][] = "FuelType";
	$tdatafuelprices[".allSearchFields"][] = "PricePerLiter";
	

$tdatafuelprices[".googleLikeFields"] = array();
$tdatafuelprices[".googleLikeFields"][] = "Id";
$tdatafuelprices[".googleLikeFields"][] = "FuelType";
$tdatafuelprices[".googleLikeFields"][] = "PricePerLiter";


$tdatafuelprices[".advSearchFields"] = array();
$tdatafuelprices[".advSearchFields"][] = "Id";
$tdatafuelprices[".advSearchFields"][] = "FuelType";
$tdatafuelprices[".advSearchFields"][] = "PricePerLiter";

$tdatafuelprices[".tableType"] = "list";

$tdatafuelprices[".printerPageOrientation"] = 0;
$tdatafuelprices[".nPrinterPageScale"] = 100;

$tdatafuelprices[".nPrinterSplitRecords"] = 40;

$tdatafuelprices[".nPrinterPDFSplitRecords"] = 40;



$tdatafuelprices[".geocodingEnabled"] = false;





$tdatafuelprices[".listGridLayout"] = 3;


$tdatafuelprices[".isResizeColumns"] = true;



// view page pdf
$tdatafuelprices[".isViewPagePDF"] = true;
$tdatafuelprices[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatafuelprices[".isPrinterPagePDF"] = true;
$tdatafuelprices[".nPrinterPagePDFScale"] = 100;


$tdatafuelprices[".pageSize"] = 20;

$tdatafuelprices[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafuelprices[".strOrderBy"] = $tstrOrderBy;

$tdatafuelprices[".orderindexes"] = array();

$tdatafuelprices[".sqlHead"] = "SELECT Id,  	FuelType,  	PricePerLiter";
$tdatafuelprices[".sqlFrom"] = "FROM fuelprices";
$tdatafuelprices[".sqlWhereExpr"] = "";
$tdatafuelprices[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatafuelprices[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafuelprices[".arrGroupsPerPage"] = $arrGPP;

$tdatafuelprices[".highlightSearchResults"] = true;

$tableKeysfuelprices = array();
$tableKeysfuelprices[] = "Id";
$tdatafuelprices[".Keys"] = $tableKeysfuelprices;

$tdatafuelprices[".listFields"] = array();
$tdatafuelprices[".listFields"][] = "Id";
$tdatafuelprices[".listFields"][] = "FuelType";
$tdatafuelprices[".listFields"][] = "PricePerLiter";

$tdatafuelprices[".hideMobileList"] = array();


$tdatafuelprices[".viewFields"] = array();
$tdatafuelprices[".viewFields"][] = "Id";
$tdatafuelprices[".viewFields"][] = "FuelType";
$tdatafuelprices[".viewFields"][] = "PricePerLiter";

$tdatafuelprices[".addFields"] = array();
$tdatafuelprices[".addFields"][] = "FuelType";
$tdatafuelprices[".addFields"][] = "PricePerLiter";

$tdatafuelprices[".masterListFields"] = array();
$tdatafuelprices[".masterListFields"][] = "Id";
$tdatafuelprices[".masterListFields"][] = "FuelType";
$tdatafuelprices[".masterListFields"][] = "PricePerLiter";

$tdatafuelprices[".inlineAddFields"] = array();

$tdatafuelprices[".editFields"] = array();
$tdatafuelprices[".editFields"][] = "FuelType";
$tdatafuelprices[".editFields"][] = "PricePerLiter";

$tdatafuelprices[".inlineEditFields"] = array();

$tdatafuelprices[".updateSelectedFields"] = array();
$tdatafuelprices[".updateSelectedFields"][] = "FuelType";
$tdatafuelprices[".updateSelectedFields"][] = "PricePerLiter";


$tdatafuelprices[".exportFields"] = array();
$tdatafuelprices[".exportFields"][] = "Id";
$tdatafuelprices[".exportFields"][] = "FuelType";
$tdatafuelprices[".exportFields"][] = "PricePerLiter";

$tdatafuelprices[".importFields"] = array();
$tdatafuelprices[".importFields"][] = "Id";
$tdatafuelprices[".importFields"][] = "FuelType";
$tdatafuelprices[".importFields"][] = "PricePerLiter";

$tdatafuelprices[".printFields"] = array();
$tdatafuelprices[".printFields"][] = "Id";
$tdatafuelprices[".printFields"][] = "FuelType";
$tdatafuelprices[".printFields"][] = "PricePerLiter";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "fuelprices";
	$fdata["Label"] = GetFieldLabel("fuelprices","Id");
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




	$tdatafuelprices["Id"] = $fdata;
//	FuelType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FuelType";
	$fdata["GoodName"] = "FuelType";
	$fdata["ownerTable"] = "fuelprices";
	$fdata["Label"] = GetFieldLabel("fuelprices","FuelType");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FuelType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FuelType";

	
	
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
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelprices["FuelType"] = $fdata;
//	PricePerLiter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PricePerLiter";
	$fdata["GoodName"] = "PricePerLiter";
	$fdata["ownerTable"] = "fuelprices";
	$fdata["Label"] = GetFieldLabel("fuelprices","PricePerLiter");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PricePerLiter";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PricePerLiter";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

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




	$tdatafuelprices["PricePerLiter"] = $fdata;


$tables_data["fuelprices"]=&$tdatafuelprices;
$field_labels["fuelprices"] = &$fieldLabelsfuelprices;
$fieldToolTips["fuelprices"] = &$fieldToolTipsfuelprices;
$page_titles["fuelprices"] = &$pageTitlesfuelprices;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["fuelprices"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["fuelprices"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_fuelprices()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  	FuelType,  	PricePerLiter";
$proto0["m_strFrom"] = "FROM fuelprices";
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
	"m_strTable" => "fuelprices",
	"m_srcTableName" => "fuelprices"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "fuelprices";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelType",
	"m_strTable" => "fuelprices",
	"m_srcTableName" => "fuelprices"
));

$proto8["m_sql"] = "FuelType";
$proto8["m_srcTableName"] = "fuelprices";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PricePerLiter",
	"m_strTable" => "fuelprices",
	"m_srcTableName" => "fuelprices"
));

$proto10["m_sql"] = "PricePerLiter";
$proto10["m_srcTableName"] = "fuelprices";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "fuelprices";
$proto13["m_srcTableName"] = "fuelprices";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "Id";
$proto13["m_columns"][] = "FuelType";
$proto13["m_columns"][] = "PricePerLiter";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "fuelprices";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "fuelprices";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="fuelprices";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fuelprices = createSqlQuery_fuelprices();


	
					
;

			

$tdatafuelprices[".sqlquery"] = $queryData_fuelprices;

$tableEvents["fuelprices"] = new eventsBase;
$tdatafuelprices[".hasEvents"] = false;

?>