<?php
require_once(getabspath("classes/cipherer.php"));




$tdatarenewalsmaster = array();
	$tdatarenewalsmaster[".truncateText"] = true;
	$tdatarenewalsmaster[".NumberOfChars"] = 80;
	$tdatarenewalsmaster[".ShortName"] = "renewalsmaster";
	$tdatarenewalsmaster[".OwnerID"] = "";
	$tdatarenewalsmaster[".OriginalTable"] = "renewalsmaster";

//	field labels
$fieldLabelsrenewalsmaster = array();
$fieldToolTipsrenewalsmaster = array();
$pageTitlesrenewalsmaster = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsrenewalsmaster["English"] = array();
	$fieldToolTipsrenewalsmaster["English"] = array();
	$pageTitlesrenewalsmaster["English"] = array();
	$fieldLabelsrenewalsmaster["English"]["ID"] = "ID";
	$fieldToolTipsrenewalsmaster["English"]["ID"] = "";
	$fieldLabelsrenewalsmaster["English"]["Renewal"] = "Renewal";
	$fieldToolTipsrenewalsmaster["English"]["Renewal"] = "";
	if (count($fieldToolTipsrenewalsmaster["English"]))
		$tdatarenewalsmaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsrenewalsmaster[""] = array();
	$fieldToolTipsrenewalsmaster[""] = array();
	$pageTitlesrenewalsmaster[""] = array();
	$fieldLabelsrenewalsmaster[""]["ID"] = "ID";
	$fieldToolTipsrenewalsmaster[""]["ID"] = "";
	$fieldLabelsrenewalsmaster[""]["Renewal"] = "Renewal";
	$fieldToolTipsrenewalsmaster[""]["Renewal"] = "";
	if (count($fieldToolTipsrenewalsmaster[""]))
		$tdatarenewalsmaster[".isUseToolTips"] = true;
}


	$tdatarenewalsmaster[".NCSearch"] = true;



$tdatarenewalsmaster[".shortTableName"] = "renewalsmaster";
$tdatarenewalsmaster[".nSecOptions"] = 0;
$tdatarenewalsmaster[".recsPerRowList"] = 1;
$tdatarenewalsmaster[".recsPerRowPrint"] = 1;
$tdatarenewalsmaster[".mainTableOwnerID"] = "";
$tdatarenewalsmaster[".moveNext"] = 1;
$tdatarenewalsmaster[".entityType"] = 0;

$tdatarenewalsmaster[".strOriginalTableName"] = "renewalsmaster";

		 



$tdatarenewalsmaster[".showAddInPopup"] = false;

$tdatarenewalsmaster[".showEditInPopup"] = false;

$tdatarenewalsmaster[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarenewalsmaster[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarenewalsmaster[".fieldsForRegister"] = array();

$tdatarenewalsmaster[".listAjax"] = false;

	$tdatarenewalsmaster[".audit"] = false;

	$tdatarenewalsmaster[".locking"] = false;

$tdatarenewalsmaster[".edit"] = true;
$tdatarenewalsmaster[".afterEditAction"] = 1;
$tdatarenewalsmaster[".closePopupAfterEdit"] = 1;
$tdatarenewalsmaster[".afterEditActionDetTable"] = "";

$tdatarenewalsmaster[".add"] = true;
$tdatarenewalsmaster[".afterAddAction"] = 1;
$tdatarenewalsmaster[".closePopupAfterAdd"] = 1;
$tdatarenewalsmaster[".afterAddActionDetTable"] = "";

$tdatarenewalsmaster[".list"] = true;

$tdatarenewalsmaster[".inlineEdit"] = true;



$tdatarenewalsmaster[".inlineAdd"] = true;
$tdatarenewalsmaster[".view"] = true;

$tdatarenewalsmaster[".import"] = true;

$tdatarenewalsmaster[".exportTo"] = true;

$tdatarenewalsmaster[".printFriendly"] = true;

$tdatarenewalsmaster[".delete"] = true;

$tdatarenewalsmaster[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatarenewalsmaster[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatarenewalsmaster[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatarenewalsmaster[".searchSaving"] = false;
//

$tdatarenewalsmaster[".showSearchPanel"] = true;
		$tdatarenewalsmaster[".flexibleSearch"] = true;

$tdatarenewalsmaster[".isUseAjaxSuggest"] = true;

$tdatarenewalsmaster[".rowHighlite"] = true;



$tdatarenewalsmaster[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarenewalsmaster[".isUseTimeForSearch"] = false;



$tdatarenewalsmaster[".badgeColor"] = "5F9EA0";


$tdatarenewalsmaster[".allSearchFields"] = array();
$tdatarenewalsmaster[".filterFields"] = array();
$tdatarenewalsmaster[".requiredSearchFields"] = array();

$tdatarenewalsmaster[".allSearchFields"][] = "ID";
	$tdatarenewalsmaster[".allSearchFields"][] = "Renewal";
	

$tdatarenewalsmaster[".googleLikeFields"] = array();
$tdatarenewalsmaster[".googleLikeFields"][] = "ID";
$tdatarenewalsmaster[".googleLikeFields"][] = "Renewal";


$tdatarenewalsmaster[".advSearchFields"] = array();
$tdatarenewalsmaster[".advSearchFields"][] = "ID";
$tdatarenewalsmaster[".advSearchFields"][] = "Renewal";

$tdatarenewalsmaster[".tableType"] = "list";

$tdatarenewalsmaster[".printerPageOrientation"] = 0;
$tdatarenewalsmaster[".nPrinterPageScale"] = 100;

$tdatarenewalsmaster[".nPrinterSplitRecords"] = 40;

$tdatarenewalsmaster[".nPrinterPDFSplitRecords"] = 40;



$tdatarenewalsmaster[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatarenewalsmaster[".pageSize"] = 20;

$tdatarenewalsmaster[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarenewalsmaster[".strOrderBy"] = $tstrOrderBy;

$tdatarenewalsmaster[".orderindexes"] = array();

$tdatarenewalsmaster[".sqlHead"] = "SELECT ID,  	Renewal";
$tdatarenewalsmaster[".sqlFrom"] = "FROM renewalsmaster";
$tdatarenewalsmaster[".sqlWhereExpr"] = "";
$tdatarenewalsmaster[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarenewalsmaster[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarenewalsmaster[".arrGroupsPerPage"] = $arrGPP;

$tdatarenewalsmaster[".highlightSearchResults"] = true;

$tableKeysrenewalsmaster = array();
$tableKeysrenewalsmaster[] = "ID";
$tdatarenewalsmaster[".Keys"] = $tableKeysrenewalsmaster;

$tdatarenewalsmaster[".listFields"] = array();
$tdatarenewalsmaster[".listFields"][] = "ID";
$tdatarenewalsmaster[".listFields"][] = "Renewal";

$tdatarenewalsmaster[".hideMobileList"] = array();


$tdatarenewalsmaster[".viewFields"] = array();
$tdatarenewalsmaster[".viewFields"][] = "ID";
$tdatarenewalsmaster[".viewFields"][] = "Renewal";

$tdatarenewalsmaster[".addFields"] = array();
$tdatarenewalsmaster[".addFields"][] = "Renewal";

$tdatarenewalsmaster[".masterListFields"] = array();
$tdatarenewalsmaster[".masterListFields"][] = "ID";
$tdatarenewalsmaster[".masterListFields"][] = "Renewal";

$tdatarenewalsmaster[".inlineAddFields"] = array();
$tdatarenewalsmaster[".inlineAddFields"][] = "Renewal";

$tdatarenewalsmaster[".editFields"] = array();
$tdatarenewalsmaster[".editFields"][] = "Renewal";

$tdatarenewalsmaster[".inlineEditFields"] = array();
$tdatarenewalsmaster[".inlineEditFields"][] = "Renewal";

$tdatarenewalsmaster[".updateSelectedFields"] = array();
$tdatarenewalsmaster[".updateSelectedFields"][] = "Renewal";


$tdatarenewalsmaster[".exportFields"] = array();
$tdatarenewalsmaster[".exportFields"][] = "ID";
$tdatarenewalsmaster[".exportFields"][] = "Renewal";

$tdatarenewalsmaster[".importFields"] = array();
$tdatarenewalsmaster[".importFields"][] = "ID";
$tdatarenewalsmaster[".importFields"][] = "Renewal";

$tdatarenewalsmaster[".printFields"] = array();
$tdatarenewalsmaster[".printFields"][] = "ID";
$tdatarenewalsmaster[".printFields"][] = "Renewal";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "renewalsmaster";
	$fdata["Label"] = GetFieldLabel("renewalsmaster","ID");
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




	$tdatarenewalsmaster["ID"] = $fdata;
//	Renewal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Renewal";
	$fdata["GoodName"] = "Renewal";
	$fdata["ownerTable"] = "renewalsmaster";
	$fdata["Label"] = GetFieldLabel("renewalsmaster","Renewal");
	$fdata["FieldType"] = 200;

	
	
	
										
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarenewalsmaster["Renewal"] = $fdata;


$tables_data["renewalsmaster"]=&$tdatarenewalsmaster;
$field_labels["renewalsmaster"] = &$fieldLabelsrenewalsmaster;
$fieldToolTips["renewalsmaster"] = &$fieldToolTipsrenewalsmaster;
$page_titles["renewalsmaster"] = &$pageTitlesrenewalsmaster;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["renewalsmaster"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["renewalsmaster"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_renewalsmaster()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	Renewal";
$proto0["m_strFrom"] = "FROM renewalsmaster";
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
	"m_strTable" => "renewalsmaster",
	"m_srcTableName" => "renewalsmaster"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "renewalsmaster";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Renewal",
	"m_strTable" => "renewalsmaster",
	"m_srcTableName" => "renewalsmaster"
));

$proto8["m_sql"] = "Renewal";
$proto8["m_srcTableName"] = "renewalsmaster";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "renewalsmaster";
$proto11["m_srcTableName"] = "renewalsmaster";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID";
$proto11["m_columns"][] = "Renewal";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "renewalsmaster";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "renewalsmaster";
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
$proto0["m_srcTableName"]="renewalsmaster";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_renewalsmaster = createSqlQuery_renewalsmaster();


	
					
;

		

$tdatarenewalsmaster[".sqlquery"] = $queryData_renewalsmaster;

$tableEvents["renewalsmaster"] = new eventsBase;
$tdatarenewalsmaster[".hasEvents"] = false;

?>