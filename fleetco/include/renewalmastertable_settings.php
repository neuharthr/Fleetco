<?php
require_once(getabspath("classes/cipherer.php"));




$tdatarenewalmastertable = array();
	$tdatarenewalmastertable[".truncateText"] = true;
	$tdatarenewalmastertable[".NumberOfChars"] = 80;
	$tdatarenewalmastertable[".ShortName"] = "renewalmastertable";
	$tdatarenewalmastertable[".OwnerID"] = "";
	$tdatarenewalmastertable[".OriginalTable"] = "renewalmastertable";

//	field labels
$fieldLabelsrenewalmastertable = array();
$fieldToolTipsrenewalmastertable = array();
$pageTitlesrenewalmastertable = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsrenewalmastertable["English"] = array();
	$fieldToolTipsrenewalmastertable["English"] = array();
	$pageTitlesrenewalmastertable["English"] = array();
	$fieldLabelsrenewalmastertable["English"]["ID"] = "ID";
	$fieldToolTipsrenewalmastertable["English"]["ID"] = "";
	$fieldLabelsrenewalmastertable["English"]["Renewal"] = "Renewal";
	$fieldToolTipsrenewalmastertable["English"]["Renewal"] = "";
	if (count($fieldToolTipsrenewalmastertable["English"]))
		$tdatarenewalmastertable[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsrenewalmastertable[""] = array();
	$fieldToolTipsrenewalmastertable[""] = array();
	$pageTitlesrenewalmastertable[""] = array();
	if (count($fieldToolTipsrenewalmastertable[""]))
		$tdatarenewalmastertable[".isUseToolTips"] = true;
}


	$tdatarenewalmastertable[".NCSearch"] = true;



$tdatarenewalmastertable[".shortTableName"] = "renewalmastertable";
$tdatarenewalmastertable[".nSecOptions"] = 0;
$tdatarenewalmastertable[".recsPerRowPrint"] = 1;
$tdatarenewalmastertable[".mainTableOwnerID"] = "";
$tdatarenewalmastertable[".moveNext"] = 1;
$tdatarenewalmastertable[".entityType"] = 0;

$tdatarenewalmastertable[".strOriginalTableName"] = "renewalmastertable";

		 



$tdatarenewalmastertable[".showAddInPopup"] = false;

$tdatarenewalmastertable[".showEditInPopup"] = false;

$tdatarenewalmastertable[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarenewalmastertable[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarenewalmastertable[".fieldsForRegister"] = array();

$tdatarenewalmastertable[".listAjax"] = false;

	$tdatarenewalmastertable[".audit"] = false;

	$tdatarenewalmastertable[".locking"] = false;

$tdatarenewalmastertable[".edit"] = true;
$tdatarenewalmastertable[".afterEditAction"] = 1;
$tdatarenewalmastertable[".closePopupAfterEdit"] = 1;
$tdatarenewalmastertable[".afterEditActionDetTable"] = "";

$tdatarenewalmastertable[".add"] = true;
$tdatarenewalmastertable[".afterAddAction"] = 1;
$tdatarenewalmastertable[".closePopupAfterAdd"] = 1;
$tdatarenewalmastertable[".afterAddActionDetTable"] = "";

$tdatarenewalmastertable[".list"] = true;




$tdatarenewalmastertable[".view"] = true;


$tdatarenewalmastertable[".exportTo"] = true;

$tdatarenewalmastertable[".printFriendly"] = true;

$tdatarenewalmastertable[".delete"] = true;

$tdatarenewalmastertable[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatarenewalmastertable[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatarenewalmastertable[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatarenewalmastertable[".searchSaving"] = false;
//

$tdatarenewalmastertable[".showSearchPanel"] = true;
		$tdatarenewalmastertable[".flexibleSearch"] = true;

$tdatarenewalmastertable[".isUseAjaxSuggest"] = true;

$tdatarenewalmastertable[".rowHighlite"] = true;



$tdatarenewalmastertable[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarenewalmastertable[".isUseTimeForSearch"] = false;



$tdatarenewalmastertable[".badgeColor"] = "6B8E23";


$tdatarenewalmastertable[".allSearchFields"] = array();
$tdatarenewalmastertable[".filterFields"] = array();
$tdatarenewalmastertable[".requiredSearchFields"] = array();

$tdatarenewalmastertable[".allSearchFields"][] = "ID";
	$tdatarenewalmastertable[".allSearchFields"][] = "Renewal";
	

$tdatarenewalmastertable[".googleLikeFields"] = array();
$tdatarenewalmastertable[".googleLikeFields"][] = "ID";
$tdatarenewalmastertable[".googleLikeFields"][] = "Renewal";


$tdatarenewalmastertable[".advSearchFields"] = array();
$tdatarenewalmastertable[".advSearchFields"][] = "ID";
$tdatarenewalmastertable[".advSearchFields"][] = "Renewal";

$tdatarenewalmastertable[".tableType"] = "list";

$tdatarenewalmastertable[".printerPageOrientation"] = 0;
$tdatarenewalmastertable[".nPrinterPageScale"] = 100;

$tdatarenewalmastertable[".nPrinterSplitRecords"] = 40;

$tdatarenewalmastertable[".nPrinterPDFSplitRecords"] = 40;



$tdatarenewalmastertable[".geocodingEnabled"] = false;





$tdatarenewalmastertable[".listGridLayout"] = 3;





// view page pdf
$tdatarenewalmastertable[".isViewPagePDF"] = true;
$tdatarenewalmastertable[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatarenewalmastertable[".isPrinterPagePDF"] = true;
$tdatarenewalmastertable[".nPrinterPagePDFScale"] = 100;


$tdatarenewalmastertable[".pageSize"] = 20;

$tdatarenewalmastertable[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarenewalmastertable[".strOrderBy"] = $tstrOrderBy;

$tdatarenewalmastertable[".orderindexes"] = array();

$tdatarenewalmastertable[".sqlHead"] = "SELECT ID,  	Renewal";
$tdatarenewalmastertable[".sqlFrom"] = "FROM renewalmastertable";
$tdatarenewalmastertable[".sqlWhereExpr"] = "";
$tdatarenewalmastertable[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarenewalmastertable[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarenewalmastertable[".arrGroupsPerPage"] = $arrGPP;

$tdatarenewalmastertable[".highlightSearchResults"] = true;

$tableKeysrenewalmastertable = array();
$tableKeysrenewalmastertable[] = "ID";
$tdatarenewalmastertable[".Keys"] = $tableKeysrenewalmastertable;

$tdatarenewalmastertable[".listFields"] = array();
$tdatarenewalmastertable[".listFields"][] = "ID";
$tdatarenewalmastertable[".listFields"][] = "Renewal";

$tdatarenewalmastertable[".hideMobileList"] = array();


$tdatarenewalmastertable[".viewFields"] = array();
$tdatarenewalmastertable[".viewFields"][] = "ID";
$tdatarenewalmastertable[".viewFields"][] = "Renewal";

$tdatarenewalmastertable[".addFields"] = array();
$tdatarenewalmastertable[".addFields"][] = "Renewal";

$tdatarenewalmastertable[".masterListFields"] = array();
$tdatarenewalmastertable[".masterListFields"][] = "ID";
$tdatarenewalmastertable[".masterListFields"][] = "Renewal";

$tdatarenewalmastertable[".inlineAddFields"] = array();

$tdatarenewalmastertable[".editFields"] = array();
$tdatarenewalmastertable[".editFields"][] = "Renewal";

$tdatarenewalmastertable[".inlineEditFields"] = array();

$tdatarenewalmastertable[".updateSelectedFields"] = array();
$tdatarenewalmastertable[".updateSelectedFields"][] = "Renewal";


$tdatarenewalmastertable[".exportFields"] = array();
$tdatarenewalmastertable[".exportFields"][] = "ID";
$tdatarenewalmastertable[".exportFields"][] = "Renewal";

$tdatarenewalmastertable[".importFields"] = array();

$tdatarenewalmastertable[".printFields"] = array();
$tdatarenewalmastertable[".printFields"][] = "ID";
$tdatarenewalmastertable[".printFields"][] = "Renewal";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "renewalmastertable";
	$fdata["Label"] = GetFieldLabel("renewalmastertable","ID");
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




	$tdatarenewalmastertable["ID"] = $fdata;
//	Renewal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Renewal";
	$fdata["GoodName"] = "Renewal";
	$fdata["ownerTable"] = "renewalmastertable";
	$fdata["Label"] = GetFieldLabel("renewalmastertable","Renewal");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewalmastertable["Renewal"] = $fdata;


$tables_data["renewalmastertable"]=&$tdatarenewalmastertable;
$field_labels["renewalmastertable"] = &$fieldLabelsrenewalmastertable;
$fieldToolTips["renewalmastertable"] = &$fieldToolTipsrenewalmastertable;
$page_titles["renewalmastertable"] = &$pageTitlesrenewalmastertable;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["renewalmastertable"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["renewalmastertable"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_renewalmastertable()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	Renewal";
$proto0["m_strFrom"] = "FROM renewalmastertable";
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
	"m_strTable" => "renewalmastertable",
	"m_srcTableName" => "renewalmastertable"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "renewalmastertable";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Renewal",
	"m_strTable" => "renewalmastertable",
	"m_srcTableName" => "renewalmastertable"
));

$proto8["m_sql"] = "Renewal";
$proto8["m_srcTableName"] = "renewalmastertable";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "renewalmastertable";
$proto11["m_srcTableName"] = "renewalmastertable";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID";
$proto11["m_columns"][] = "Renewal";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "renewalmastertable";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "renewalmastertable";
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
$proto0["m_srcTableName"]="renewalmastertable";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_renewalmastertable = createSqlQuery_renewalmastertable();


	
					
;

		

$tdatarenewalmastertable[".sqlquery"] = $queryData_renewalmastertable;

$tableEvents["renewalmastertable"] = new eventsBase;
$tdatarenewalmastertable[".hasEvents"] = false;

?>