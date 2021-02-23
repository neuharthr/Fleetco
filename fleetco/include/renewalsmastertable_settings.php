<?php
require_once(getabspath("classes/cipherer.php"));




$tdatarenewalsmastertable = array();
	$tdatarenewalsmastertable[".truncateText"] = true;
	$tdatarenewalsmastertable[".NumberOfChars"] = 80;
	$tdatarenewalsmastertable[".ShortName"] = "renewalsmastertable";
	$tdatarenewalsmastertable[".OwnerID"] = "";
	$tdatarenewalsmastertable[".OriginalTable"] = "renewalsmastertable";

//	field labels
$fieldLabelsrenewalsmastertable = array();
$fieldToolTipsrenewalsmastertable = array();
$pageTitlesrenewalsmastertable = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsrenewalsmastertable["English"] = array();
	$fieldToolTipsrenewalsmastertable["English"] = array();
	$pageTitlesrenewalsmastertable["English"] = array();
	$fieldLabelsrenewalsmastertable["English"]["ID"] = "ID";
	$fieldToolTipsrenewalsmastertable["English"]["ID"] = "";
	$fieldLabelsrenewalsmastertable["English"]["Renewal"] = "Renewal";
	$fieldToolTipsrenewalsmastertable["English"]["Renewal"] = "";
	if (count($fieldToolTipsrenewalsmastertable["English"]))
		$tdatarenewalsmastertable[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsrenewalsmastertable[""] = array();
	$fieldToolTipsrenewalsmastertable[""] = array();
	$pageTitlesrenewalsmastertable[""] = array();
	if (count($fieldToolTipsrenewalsmastertable[""]))
		$tdatarenewalsmastertable[".isUseToolTips"] = true;
}


	$tdatarenewalsmastertable[".NCSearch"] = true;



$tdatarenewalsmastertable[".shortTableName"] = "renewalsmastertable";
$tdatarenewalsmastertable[".nSecOptions"] = 0;
$tdatarenewalsmastertable[".recsPerRowPrint"] = 1;
$tdatarenewalsmastertable[".mainTableOwnerID"] = "";
$tdatarenewalsmastertable[".moveNext"] = 1;
$tdatarenewalsmastertable[".entityType"] = 0;

$tdatarenewalsmastertable[".strOriginalTableName"] = "renewalsmastertable";

		 



$tdatarenewalsmastertable[".showAddInPopup"] = false;

$tdatarenewalsmastertable[".showEditInPopup"] = false;

$tdatarenewalsmastertable[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarenewalsmastertable[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarenewalsmastertable[".fieldsForRegister"] = array();

$tdatarenewalsmastertable[".listAjax"] = false;

	$tdatarenewalsmastertable[".audit"] = false;

	$tdatarenewalsmastertable[".locking"] = false;

$tdatarenewalsmastertable[".edit"] = true;
$tdatarenewalsmastertable[".afterEditAction"] = 1;
$tdatarenewalsmastertable[".closePopupAfterEdit"] = 1;
$tdatarenewalsmastertable[".afterEditActionDetTable"] = "";

$tdatarenewalsmastertable[".add"] = true;
$tdatarenewalsmastertable[".afterAddAction"] = 1;
$tdatarenewalsmastertable[".closePopupAfterAdd"] = 1;
$tdatarenewalsmastertable[".afterAddActionDetTable"] = "";

$tdatarenewalsmastertable[".list"] = true;




$tdatarenewalsmastertable[".view"] = true;


$tdatarenewalsmastertable[".exportTo"] = true;

$tdatarenewalsmastertable[".printFriendly"] = true;

$tdatarenewalsmastertable[".delete"] = true;

$tdatarenewalsmastertable[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatarenewalsmastertable[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatarenewalsmastertable[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatarenewalsmastertable[".searchSaving"] = false;
//

$tdatarenewalsmastertable[".showSearchPanel"] = true;
		$tdatarenewalsmastertable[".flexibleSearch"] = true;

$tdatarenewalsmastertable[".isUseAjaxSuggest"] = true;

$tdatarenewalsmastertable[".rowHighlite"] = true;



$tdatarenewalsmastertable[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarenewalsmastertable[".isUseTimeForSearch"] = false;



$tdatarenewalsmastertable[".badgeColor"] = "6B8E23";


$tdatarenewalsmastertable[".allSearchFields"] = array();
$tdatarenewalsmastertable[".filterFields"] = array();
$tdatarenewalsmastertable[".requiredSearchFields"] = array();

$tdatarenewalsmastertable[".allSearchFields"][] = "ID";
	$tdatarenewalsmastertable[".allSearchFields"][] = "Renewal";
	

$tdatarenewalsmastertable[".googleLikeFields"] = array();
$tdatarenewalsmastertable[".googleLikeFields"][] = "ID";
$tdatarenewalsmastertable[".googleLikeFields"][] = "Renewal";


$tdatarenewalsmastertable[".advSearchFields"] = array();
$tdatarenewalsmastertable[".advSearchFields"][] = "ID";
$tdatarenewalsmastertable[".advSearchFields"][] = "Renewal";

$tdatarenewalsmastertable[".tableType"] = "list";

$tdatarenewalsmastertable[".printerPageOrientation"] = 0;
$tdatarenewalsmastertable[".nPrinterPageScale"] = 100;

$tdatarenewalsmastertable[".nPrinterSplitRecords"] = 40;

$tdatarenewalsmastertable[".nPrinterPDFSplitRecords"] = 40;



$tdatarenewalsmastertable[".geocodingEnabled"] = false;





$tdatarenewalsmastertable[".listGridLayout"] = 3;





// view page pdf
$tdatarenewalsmastertable[".isViewPagePDF"] = true;
$tdatarenewalsmastertable[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatarenewalsmastertable[".isPrinterPagePDF"] = true;
$tdatarenewalsmastertable[".nPrinterPagePDFScale"] = 100;


$tdatarenewalsmastertable[".pageSize"] = 20;

$tdatarenewalsmastertable[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarenewalsmastertable[".strOrderBy"] = $tstrOrderBy;

$tdatarenewalsmastertable[".orderindexes"] = array();

$tdatarenewalsmastertable[".sqlHead"] = "SELECT ID,  	Renewal";
$tdatarenewalsmastertable[".sqlFrom"] = "FROM renewalsmastertable";
$tdatarenewalsmastertable[".sqlWhereExpr"] = "";
$tdatarenewalsmastertable[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarenewalsmastertable[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarenewalsmastertable[".arrGroupsPerPage"] = $arrGPP;

$tdatarenewalsmastertable[".highlightSearchResults"] = true;

$tableKeysrenewalsmastertable = array();
$tableKeysrenewalsmastertable[] = "ID";
$tdatarenewalsmastertable[".Keys"] = $tableKeysrenewalsmastertable;

$tdatarenewalsmastertable[".listFields"] = array();
$tdatarenewalsmastertable[".listFields"][] = "ID";
$tdatarenewalsmastertable[".listFields"][] = "Renewal";

$tdatarenewalsmastertable[".hideMobileList"] = array();


$tdatarenewalsmastertable[".viewFields"] = array();
$tdatarenewalsmastertable[".viewFields"][] = "ID";
$tdatarenewalsmastertable[".viewFields"][] = "Renewal";

$tdatarenewalsmastertable[".addFields"] = array();
$tdatarenewalsmastertable[".addFields"][] = "Renewal";

$tdatarenewalsmastertable[".masterListFields"] = array();
$tdatarenewalsmastertable[".masterListFields"][] = "ID";
$tdatarenewalsmastertable[".masterListFields"][] = "Renewal";

$tdatarenewalsmastertable[".inlineAddFields"] = array();

$tdatarenewalsmastertable[".editFields"] = array();
$tdatarenewalsmastertable[".editFields"][] = "Renewal";

$tdatarenewalsmastertable[".inlineEditFields"] = array();

$tdatarenewalsmastertable[".updateSelectedFields"] = array();
$tdatarenewalsmastertable[".updateSelectedFields"][] = "Renewal";


$tdatarenewalsmastertable[".exportFields"] = array();
$tdatarenewalsmastertable[".exportFields"][] = "ID";
$tdatarenewalsmastertable[".exportFields"][] = "Renewal";

$tdatarenewalsmastertable[".importFields"] = array();

$tdatarenewalsmastertable[".printFields"] = array();
$tdatarenewalsmastertable[".printFields"][] = "ID";
$tdatarenewalsmastertable[".printFields"][] = "Renewal";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "renewalsmastertable";
	$fdata["Label"] = GetFieldLabel("renewalsmastertable","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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




	$tdatarenewalsmastertable["ID"] = $fdata;
//	Renewal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Renewal";
	$fdata["GoodName"] = "Renewal";
	$fdata["ownerTable"] = "renewalsmastertable";
	$fdata["Label"] = GetFieldLabel("renewalsmastertable","Renewal");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Renewal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Renewal";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewalsmastertable["Renewal"] = $fdata;


$tables_data["renewalsmastertable"]=&$tdatarenewalsmastertable;
$field_labels["renewalsmastertable"] = &$fieldLabelsrenewalsmastertable;
$fieldToolTips["renewalsmastertable"] = &$fieldToolTipsrenewalsmastertable;
$page_titles["renewalsmastertable"] = &$pageTitlesrenewalsmastertable;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["renewalsmastertable"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["renewalsmastertable"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_renewalsmastertable()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	Renewal";
$proto0["m_strFrom"] = "FROM renewalsmastertable";
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
	"m_strName" => "ID",
	"m_strTable" => "renewalsmastertable",
	"m_srcTableName" => "renewalsmastertable"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "renewalsmastertable";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Renewal",
	"m_strTable" => "renewalsmastertable",
	"m_srcTableName" => "renewalsmastertable"
));

$proto8["m_sql"] = "Renewal";
$proto8["m_srcTableName"] = "renewalsmastertable";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "renewalsmastertable";
$proto11["m_srcTableName"] = "renewalsmastertable";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID";
$proto11["m_columns"][] = "Renewal";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "renewalsmastertable";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "renewalsmastertable";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="renewalsmastertable";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_renewalsmastertable = createSqlQuery_renewalsmastertable();


	
					
;

		

$tdatarenewalsmastertable[".sqlquery"] = $queryData_renewalsmastertable;

$tableEvents["renewalsmastertable"] = new eventsBase;
$tdatarenewalsmastertable[".hasEvents"] = false;

?>