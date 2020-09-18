<?php
require_once(getabspath("classes/cipherer.php"));




$tdatarnewalmastertable = array();
	$tdatarnewalmastertable[".truncateText"] = true;
	$tdatarnewalmastertable[".NumberOfChars"] = 80;
	$tdatarnewalmastertable[".ShortName"] = "rnewalmastertable";
	$tdatarnewalmastertable[".OwnerID"] = "";
	$tdatarnewalmastertable[".OriginalTable"] = "rnewalmastertable";

//	field labels
$fieldLabelsrnewalmastertable = array();
$fieldToolTipsrnewalmastertable = array();
$pageTitlesrnewalmastertable = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsrnewalmastertable["English"] = array();
	$fieldToolTipsrnewalmastertable["English"] = array();
	$pageTitlesrnewalmastertable["English"] = array();
	$fieldLabelsrnewalmastertable["English"]["ID"] = "ID";
	$fieldToolTipsrnewalmastertable["English"]["ID"] = "";
	$fieldLabelsrnewalmastertable["English"]["Renewal"] = "Renewal";
	$fieldToolTipsrnewalmastertable["English"]["Renewal"] = "";
	if (count($fieldToolTipsrnewalmastertable["English"]))
		$tdatarnewalmastertable[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsrnewalmastertable["Afrikaans"] = array();
	$fieldToolTipsrnewalmastertable["Afrikaans"] = array();
	$pageTitlesrnewalmastertable["Afrikaans"] = array();
	$fieldLabelsrnewalmastertable["Afrikaans"]["ID"] = "ID";
	$fieldToolTipsrnewalmastertable["Afrikaans"]["ID"] = "";
	$fieldLabelsrnewalmastertable["Afrikaans"]["Renewal"] = "hernuwing";
	$fieldToolTipsrnewalmastertable["Afrikaans"]["Renewal"] = "";
	if (count($fieldToolTipsrnewalmastertable["Afrikaans"]))
		$tdatarnewalmastertable[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsrnewalmastertable["Arabic"] = array();
	$fieldToolTipsrnewalmastertable["Arabic"] = array();
	$pageTitlesrnewalmastertable["Arabic"] = array();
	$fieldLabelsrnewalmastertable["Arabic"]["ID"] = "???? ?????";
	$fieldToolTipsrnewalmastertable["Arabic"]["ID"] = "";
	$fieldLabelsrnewalmastertable["Arabic"]["Renewal"] = "?????";
	$fieldToolTipsrnewalmastertable["Arabic"]["Renewal"] = "";
	if (count($fieldToolTipsrnewalmastertable["Arabic"]))
		$tdatarnewalmastertable[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsrnewalmastertable["Chinese"] = array();
	$fieldToolTipsrnewalmastertable["Chinese"] = array();
	$pageTitlesrnewalmastertable["Chinese"] = array();
	$fieldLabelsrnewalmastertable["Chinese"]["ID"] = "ID";
	$fieldToolTipsrnewalmastertable["Chinese"]["ID"] = "";
	$fieldLabelsrnewalmastertable["Chinese"]["Renewal"] = "??";
	$fieldToolTipsrnewalmastertable["Chinese"]["Renewal"] = "";
	if (count($fieldToolTipsrnewalmastertable["Chinese"]))
		$tdatarnewalmastertable[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsrnewalmastertable["French"] = array();
	$fieldToolTipsrnewalmastertable["French"] = array();
	$pageTitlesrnewalmastertable["French"] = array();
	$fieldLabelsrnewalmastertable["French"]["ID"] = "ID";
	$fieldToolTipsrnewalmastertable["French"]["ID"] = "";
	$fieldLabelsrnewalmastertable["French"]["Renewal"] = "Renouvellement";
	$fieldToolTipsrnewalmastertable["French"]["Renewal"] = "";
	if (count($fieldToolTipsrnewalmastertable["French"]))
		$tdatarnewalmastertable[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsrnewalmastertable["German"] = array();
	$fieldToolTipsrnewalmastertable["German"] = array();
	$pageTitlesrnewalmastertable["German"] = array();
	$fieldLabelsrnewalmastertable["German"]["ID"] = "ICH WÜRDE";
	$fieldToolTipsrnewalmastertable["German"]["ID"] = "";
	$fieldLabelsrnewalmastertable["German"]["Renewal"] = "Erneuerung";
	$fieldToolTipsrnewalmastertable["German"]["Renewal"] = "";
	if (count($fieldToolTipsrnewalmastertable["German"]))
		$tdatarnewalmastertable[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsrnewalmastertable["Italian"] = array();
	$fieldToolTipsrnewalmastertable["Italian"] = array();
	$pageTitlesrnewalmastertable["Italian"] = array();
	$fieldLabelsrnewalmastertable["Italian"]["ID"] = "ID";
	$fieldToolTipsrnewalmastertable["Italian"]["ID"] = "";
	$fieldLabelsrnewalmastertable["Italian"]["Renewal"] = "Rinnovo";
	$fieldToolTipsrnewalmastertable["Italian"]["Renewal"] = "";
	if (count($fieldToolTipsrnewalmastertable["Italian"]))
		$tdatarnewalmastertable[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsrnewalmastertable["Russian"] = array();
	$fieldToolTipsrnewalmastertable["Russian"] = array();
	$pageTitlesrnewalmastertable["Russian"] = array();
	$fieldLabelsrnewalmastertable["Russian"]["ID"] = "? ??";
	$fieldToolTipsrnewalmastertable["Russian"]["ID"] = "";
	$fieldLabelsrnewalmastertable["Russian"]["Renewal"] = "??????????";
	$fieldToolTipsrnewalmastertable["Russian"]["Renewal"] = "";
	if (count($fieldToolTipsrnewalmastertable["Russian"]))
		$tdatarnewalmastertable[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsrnewalmastertable["Spanish"] = array();
	$fieldToolTipsrnewalmastertable["Spanish"] = array();
	$pageTitlesrnewalmastertable["Spanish"] = array();
	$fieldLabelsrnewalmastertable["Spanish"]["ID"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipsrnewalmastertable["Spanish"]["ID"] = "";
	$fieldLabelsrnewalmastertable["Spanish"]["Renewal"] = "Renovación";
	$fieldToolTipsrnewalmastertable["Spanish"]["Renewal"] = "";
	if (count($fieldToolTipsrnewalmastertable["Spanish"]))
		$tdatarnewalmastertable[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsrnewalmastertable[""] = array();
	$fieldToolTipsrnewalmastertable[""] = array();
	$pageTitlesrnewalmastertable[""] = array();
	if (count($fieldToolTipsrnewalmastertable[""]))
		$tdatarnewalmastertable[".isUseToolTips"] = true;
}


	$tdatarnewalmastertable[".NCSearch"] = true;



$tdatarnewalmastertable[".shortTableName"] = "rnewalmastertable";
$tdatarnewalmastertable[".nSecOptions"] = 0;
$tdatarnewalmastertable[".recsPerRowPrint"] = 1;
$tdatarnewalmastertable[".mainTableOwnerID"] = "";
$tdatarnewalmastertable[".moveNext"] = 1;
$tdatarnewalmastertable[".entityType"] = 0;

$tdatarnewalmastertable[".strOriginalTableName"] = "rnewalmastertable";

		 



$tdatarnewalmastertable[".showAddInPopup"] = false;

$tdatarnewalmastertable[".showEditInPopup"] = false;

$tdatarnewalmastertable[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarnewalmastertable[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarnewalmastertable[".fieldsForRegister"] = array();

	$tdatarnewalmastertable[".listAjax"] = true;

	$tdatarnewalmastertable[".audit"] = false;

	$tdatarnewalmastertable[".locking"] = false;

$tdatarnewalmastertable[".edit"] = true;
$tdatarnewalmastertable[".afterEditAction"] = 1;
$tdatarnewalmastertable[".closePopupAfterEdit"] = 1;
$tdatarnewalmastertable[".afterEditActionDetTable"] = "";

$tdatarnewalmastertable[".add"] = true;
$tdatarnewalmastertable[".afterAddAction"] = 1;
$tdatarnewalmastertable[".closePopupAfterAdd"] = 1;
$tdatarnewalmastertable[".afterAddActionDetTable"] = "";

$tdatarnewalmastertable[".list"] = true;




$tdatarnewalmastertable[".view"] = true;


$tdatarnewalmastertable[".exportTo"] = true;

$tdatarnewalmastertable[".printFriendly"] = true;

$tdatarnewalmastertable[".delete"] = true;

$tdatarnewalmastertable[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatarnewalmastertable[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatarnewalmastertable[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatarnewalmastertable[".searchSaving"] = false;
//

$tdatarnewalmastertable[".showSearchPanel"] = true;
		$tdatarnewalmastertable[".flexibleSearch"] = true;

$tdatarnewalmastertable[".isUseAjaxSuggest"] = true;

$tdatarnewalmastertable[".rowHighlite"] = true;



$tdatarnewalmastertable[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarnewalmastertable[".isUseTimeForSearch"] = false;



$tdatarnewalmastertable[".badgeColor"] = "C0C0C0";


$tdatarnewalmastertable[".allSearchFields"] = array();
$tdatarnewalmastertable[".filterFields"] = array();
$tdatarnewalmastertable[".requiredSearchFields"] = array();

$tdatarnewalmastertable[".allSearchFields"][] = "ID";
	$tdatarnewalmastertable[".allSearchFields"][] = "Renewal";
	

$tdatarnewalmastertable[".googleLikeFields"] = array();
$tdatarnewalmastertable[".googleLikeFields"][] = "ID";
$tdatarnewalmastertable[".googleLikeFields"][] = "Renewal";


$tdatarnewalmastertable[".advSearchFields"] = array();
$tdatarnewalmastertable[".advSearchFields"][] = "ID";
$tdatarnewalmastertable[".advSearchFields"][] = "Renewal";

$tdatarnewalmastertable[".tableType"] = "list";

$tdatarnewalmastertable[".printerPageOrientation"] = 0;
$tdatarnewalmastertable[".nPrinterPageScale"] = 100;

$tdatarnewalmastertable[".nPrinterSplitRecords"] = 40;

$tdatarnewalmastertable[".nPrinterPDFSplitRecords"] = 40;



$tdatarnewalmastertable[".geocodingEnabled"] = false;





$tdatarnewalmastertable[".listGridLayout"] = 3;


$tdatarnewalmastertable[".isResizeColumns"] = true;



// view page pdf
$tdatarnewalmastertable[".isViewPagePDF"] = true;
$tdatarnewalmastertable[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatarnewalmastertable[".isPrinterPagePDF"] = true;
$tdatarnewalmastertable[".nPrinterPagePDFScale"] = 100;


$tdatarnewalmastertable[".pageSize"] = 20;

$tdatarnewalmastertable[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarnewalmastertable[".strOrderBy"] = $tstrOrderBy;

$tdatarnewalmastertable[".orderindexes"] = array();

$tdatarnewalmastertable[".sqlHead"] = "SELECT ID,  	Renewal";
$tdatarnewalmastertable[".sqlFrom"] = "FROM rnewalmastertable";
$tdatarnewalmastertable[".sqlWhereExpr"] = "";
$tdatarnewalmastertable[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarnewalmastertable[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarnewalmastertable[".arrGroupsPerPage"] = $arrGPP;

$tdatarnewalmastertable[".highlightSearchResults"] = true;

$tableKeysrnewalmastertable = array();
$tableKeysrnewalmastertable[] = "ID";
$tdatarnewalmastertable[".Keys"] = $tableKeysrnewalmastertable;

$tdatarnewalmastertable[".listFields"] = array();
$tdatarnewalmastertable[".listFields"][] = "ID";
$tdatarnewalmastertable[".listFields"][] = "Renewal";

$tdatarnewalmastertable[".hideMobileList"] = array();


$tdatarnewalmastertable[".viewFields"] = array();
$tdatarnewalmastertable[".viewFields"][] = "ID";
$tdatarnewalmastertable[".viewFields"][] = "Renewal";

$tdatarnewalmastertable[".addFields"] = array();
$tdatarnewalmastertable[".addFields"][] = "Renewal";

$tdatarnewalmastertable[".masterListFields"] = array();
$tdatarnewalmastertable[".masterListFields"][] = "ID";
$tdatarnewalmastertable[".masterListFields"][] = "Renewal";

$tdatarnewalmastertable[".inlineAddFields"] = array();

$tdatarnewalmastertable[".editFields"] = array();
$tdatarnewalmastertable[".editFields"][] = "Renewal";

$tdatarnewalmastertable[".inlineEditFields"] = array();

$tdatarnewalmastertable[".updateSelectedFields"] = array();
$tdatarnewalmastertable[".updateSelectedFields"][] = "Renewal";


$tdatarnewalmastertable[".exportFields"] = array();
$tdatarnewalmastertable[".exportFields"][] = "ID";
$tdatarnewalmastertable[".exportFields"][] = "Renewal";

$tdatarnewalmastertable[".importFields"] = array();

$tdatarnewalmastertable[".printFields"] = array();
$tdatarnewalmastertable[".printFields"][] = "ID";
$tdatarnewalmastertable[".printFields"][] = "Renewal";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "rnewalmastertable";
	$fdata["Label"] = GetFieldLabel("rnewalmastertable","ID");
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




	$tdatarnewalmastertable["ID"] = $fdata;
//	Renewal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Renewal";
	$fdata["GoodName"] = "Renewal";
	$fdata["ownerTable"] = "rnewalmastertable";
	$fdata["Label"] = GetFieldLabel("rnewalmastertable","Renewal");
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




	$tdatarnewalmastertable["Renewal"] = $fdata;


$tables_data["rnewalmastertable"]=&$tdatarnewalmastertable;
$field_labels["rnewalmastertable"] = &$fieldLabelsrnewalmastertable;
$fieldToolTips["rnewalmastertable"] = &$fieldToolTipsrnewalmastertable;
$page_titles["rnewalmastertable"] = &$pageTitlesrnewalmastertable;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["rnewalmastertable"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["rnewalmastertable"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_rnewalmastertable()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	Renewal";
$proto0["m_strFrom"] = "FROM rnewalmastertable";
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
	"m_strTable" => "rnewalmastertable",
	"m_srcTableName" => "rnewalmastertable"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "rnewalmastertable";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Renewal",
	"m_strTable" => "rnewalmastertable",
	"m_srcTableName" => "rnewalmastertable"
));

$proto8["m_sql"] = "Renewal";
$proto8["m_srcTableName"] = "rnewalmastertable";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "rnewalmastertable";
$proto11["m_srcTableName"] = "rnewalmastertable";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID";
$proto11["m_columns"][] = "Renewal";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "rnewalmastertable";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "rnewalmastertable";
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
$proto0["m_srcTableName"]="rnewalmastertable";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_rnewalmastertable = createSqlQuery_rnewalmastertable();


	
					
;

		

$tdatarnewalmastertable[".sqlquery"] = $queryData_rnewalmastertable;

$tableEvents["rnewalmastertable"] = new eventsBase;
$tdatarnewalmastertable[".hasEvents"] = false;

?>