<?php
require_once(getabspath("classes/cipherer.php"));




$tdataservicetypemaster = array();
	$tdataservicetypemaster[".truncateText"] = true;
	$tdataservicetypemaster[".NumberOfChars"] = 80;
	$tdataservicetypemaster[".ShortName"] = "servicetypemaster";
	$tdataservicetypemaster[".OwnerID"] = "";
	$tdataservicetypemaster[".OriginalTable"] = "servicetypemaster";

//	field labels
$fieldLabelsservicetypemaster = array();
$fieldToolTipsservicetypemaster = array();
$pageTitlesservicetypemaster = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsservicetypemaster["English"] = array();
	$fieldToolTipsservicetypemaster["English"] = array();
	$pageTitlesservicetypemaster["English"] = array();
	$fieldLabelsservicetypemaster["English"]["Id"] = "ID";
	$fieldToolTipsservicetypemaster["English"]["Id"] = "";
	$fieldLabelsservicetypemaster["English"]["Type"] = "Type";
	$fieldToolTipsservicetypemaster["English"]["Type"] = "";
	if (count($fieldToolTipsservicetypemaster["English"]))
		$tdataservicetypemaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsservicetypemaster["Afrikaans"] = array();
	$fieldToolTipsservicetypemaster["Afrikaans"] = array();
	$pageTitlesservicetypemaster["Afrikaans"] = array();
	$fieldLabelsservicetypemaster["Afrikaans"]["Id"] = "ID";
	$fieldToolTipsservicetypemaster["Afrikaans"]["Id"] = "";
	$fieldLabelsservicetypemaster["Afrikaans"]["Type"] = "tipe";
	$fieldToolTipsservicetypemaster["Afrikaans"]["Type"] = "";
	if (count($fieldToolTipsservicetypemaster["Afrikaans"]))
		$tdataservicetypemaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsservicetypemaster["Arabic"] = array();
	$fieldToolTipsservicetypemaster["Arabic"] = array();
	$pageTitlesservicetypemaster["Arabic"] = array();
	$fieldLabelsservicetypemaster["Arabic"]["Id"] = "???? ?????";
	$fieldToolTipsservicetypemaster["Arabic"]["Id"] = "";
	$fieldLabelsservicetypemaster["Arabic"]["Type"] = "????";
	$fieldToolTipsservicetypemaster["Arabic"]["Type"] = "";
	if (count($fieldToolTipsservicetypemaster["Arabic"]))
		$tdataservicetypemaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsservicetypemaster["Chinese"] = array();
	$fieldToolTipsservicetypemaster["Chinese"] = array();
	$pageTitlesservicetypemaster["Chinese"] = array();
	$fieldLabelsservicetypemaster["Chinese"]["Id"] = "ID";
	$fieldToolTipsservicetypemaster["Chinese"]["Id"] = "";
	$fieldLabelsservicetypemaster["Chinese"]["Type"] = "??";
	$fieldToolTipsservicetypemaster["Chinese"]["Type"] = "";
	if (count($fieldToolTipsservicetypemaster["Chinese"]))
		$tdataservicetypemaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsservicetypemaster["French"] = array();
	$fieldToolTipsservicetypemaster["French"] = array();
	$pageTitlesservicetypemaster["French"] = array();
	$fieldLabelsservicetypemaster["French"]["Id"] = "ID";
	$fieldToolTipsservicetypemaster["French"]["Id"] = "";
	$fieldLabelsservicetypemaster["French"]["Type"] = "Type";
	$fieldToolTipsservicetypemaster["French"]["Type"] = "";
	if (count($fieldToolTipsservicetypemaster["French"]))
		$tdataservicetypemaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsservicetypemaster["German"] = array();
	$fieldToolTipsservicetypemaster["German"] = array();
	$pageTitlesservicetypemaster["German"] = array();
	$fieldLabelsservicetypemaster["German"]["Id"] = "ICH WÜRDE";
	$fieldToolTipsservicetypemaster["German"]["Id"] = "";
	$fieldLabelsservicetypemaster["German"]["Type"] = "Art";
	$fieldToolTipsservicetypemaster["German"]["Type"] = "";
	if (count($fieldToolTipsservicetypemaster["German"]))
		$tdataservicetypemaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsservicetypemaster["Italian"] = array();
	$fieldToolTipsservicetypemaster["Italian"] = array();
	$pageTitlesservicetypemaster["Italian"] = array();
	$fieldLabelsservicetypemaster["Italian"]["Id"] = "ID";
	$fieldToolTipsservicetypemaster["Italian"]["Id"] = "";
	$fieldLabelsservicetypemaster["Italian"]["Type"] = "Digitare";
	$fieldToolTipsservicetypemaster["Italian"]["Type"] = "";
	if (count($fieldToolTipsservicetypemaster["Italian"]))
		$tdataservicetypemaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsservicetypemaster["Russian"] = array();
	$fieldToolTipsservicetypemaster["Russian"] = array();
	$pageTitlesservicetypemaster["Russian"] = array();
	$fieldLabelsservicetypemaster["Russian"]["Id"] = "? ??";
	$fieldToolTipsservicetypemaster["Russian"]["Id"] = "";
	$fieldLabelsservicetypemaster["Russian"]["Type"] = "???";
	$fieldToolTipsservicetypemaster["Russian"]["Type"] = "";
	if (count($fieldToolTipsservicetypemaster["Russian"]))
		$tdataservicetypemaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsservicetypemaster["Spanish"] = array();
	$fieldToolTipsservicetypemaster["Spanish"] = array();
	$pageTitlesservicetypemaster["Spanish"] = array();
	$fieldLabelsservicetypemaster["Spanish"]["Id"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipsservicetypemaster["Spanish"]["Id"] = "";
	$fieldLabelsservicetypemaster["Spanish"]["Type"] = "Tipo";
	$fieldToolTipsservicetypemaster["Spanish"]["Type"] = "";
	if (count($fieldToolTipsservicetypemaster["Spanish"]))
		$tdataservicetypemaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsservicetypemaster[""] = array();
	$fieldToolTipsservicetypemaster[""] = array();
	$pageTitlesservicetypemaster[""] = array();
	if (count($fieldToolTipsservicetypemaster[""]))
		$tdataservicetypemaster[".isUseToolTips"] = true;
}


	$tdataservicetypemaster[".NCSearch"] = true;



$tdataservicetypemaster[".shortTableName"] = "servicetypemaster";
$tdataservicetypemaster[".nSecOptions"] = 0;
$tdataservicetypemaster[".recsPerRowPrint"] = 1;
$tdataservicetypemaster[".mainTableOwnerID"] = "";
$tdataservicetypemaster[".moveNext"] = 1;
$tdataservicetypemaster[".entityType"] = 0;

$tdataservicetypemaster[".strOriginalTableName"] = "servicetypemaster";

		 



$tdataservicetypemaster[".showAddInPopup"] = false;

$tdataservicetypemaster[".showEditInPopup"] = false;

$tdataservicetypemaster[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataservicetypemaster[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataservicetypemaster[".fieldsForRegister"] = array();

	$tdataservicetypemaster[".listAjax"] = true;

	$tdataservicetypemaster[".audit"] = false;

	$tdataservicetypemaster[".locking"] = false;

$tdataservicetypemaster[".edit"] = true;
$tdataservicetypemaster[".afterEditAction"] = 1;
$tdataservicetypemaster[".closePopupAfterEdit"] = 1;
$tdataservicetypemaster[".afterEditActionDetTable"] = "";

$tdataservicetypemaster[".add"] = true;
$tdataservicetypemaster[".afterAddAction"] = 1;
$tdataservicetypemaster[".closePopupAfterAdd"] = 1;
$tdataservicetypemaster[".afterAddActionDetTable"] = "";

$tdataservicetypemaster[".list"] = true;




$tdataservicetypemaster[".view"] = true;

$tdataservicetypemaster[".import"] = true;

$tdataservicetypemaster[".exportTo"] = true;

$tdataservicetypemaster[".printFriendly"] = true;

$tdataservicetypemaster[".delete"] = true;

$tdataservicetypemaster[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataservicetypemaster[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataservicetypemaster[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataservicetypemaster[".searchSaving"] = false;
//

$tdataservicetypemaster[".showSearchPanel"] = true;
		$tdataservicetypemaster[".flexibleSearch"] = true;

$tdataservicetypemaster[".isUseAjaxSuggest"] = true;

$tdataservicetypemaster[".rowHighlite"] = true;



$tdataservicetypemaster[".addPageEvents"] = false;

// use timepicker for search panel
$tdataservicetypemaster[".isUseTimeForSearch"] = false;



$tdataservicetypemaster[".badgeColor"] = "FFAD5B";


$tdataservicetypemaster[".allSearchFields"] = array();
$tdataservicetypemaster[".filterFields"] = array();
$tdataservicetypemaster[".requiredSearchFields"] = array();

$tdataservicetypemaster[".allSearchFields"][] = "Id";
	$tdataservicetypemaster[".allSearchFields"][] = "Type";
	

$tdataservicetypemaster[".googleLikeFields"] = array();
$tdataservicetypemaster[".googleLikeFields"][] = "Id";
$tdataservicetypemaster[".googleLikeFields"][] = "Type";


$tdataservicetypemaster[".advSearchFields"] = array();
$tdataservicetypemaster[".advSearchFields"][] = "Id";
$tdataservicetypemaster[".advSearchFields"][] = "Type";

$tdataservicetypemaster[".tableType"] = "list";

$tdataservicetypemaster[".printerPageOrientation"] = 0;
$tdataservicetypemaster[".nPrinterPageScale"] = 100;

$tdataservicetypemaster[".nPrinterSplitRecords"] = 40;

$tdataservicetypemaster[".nPrinterPDFSplitRecords"] = 40;



$tdataservicetypemaster[".geocodingEnabled"] = false;





$tdataservicetypemaster[".listGridLayout"] = 3;


$tdataservicetypemaster[".isResizeColumns"] = true;



// view page pdf
$tdataservicetypemaster[".isViewPagePDF"] = true;
$tdataservicetypemaster[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataservicetypemaster[".isPrinterPagePDF"] = true;
$tdataservicetypemaster[".nPrinterPagePDFScale"] = 100;


$tdataservicetypemaster[".pageSize"] = 20;

$tdataservicetypemaster[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataservicetypemaster[".strOrderBy"] = $tstrOrderBy;

$tdataservicetypemaster[".orderindexes"] = array();

$tdataservicetypemaster[".sqlHead"] = "SELECT Id,  	`Type`";
$tdataservicetypemaster[".sqlFrom"] = "FROM servicetypemaster";
$tdataservicetypemaster[".sqlWhereExpr"] = "";
$tdataservicetypemaster[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdataservicetypemaster[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataservicetypemaster[".arrGroupsPerPage"] = $arrGPP;

$tdataservicetypemaster[".highlightSearchResults"] = true;

$tableKeysservicetypemaster = array();
$tableKeysservicetypemaster[] = "Id";
$tdataservicetypemaster[".Keys"] = $tableKeysservicetypemaster;

$tdataservicetypemaster[".listFields"] = array();
$tdataservicetypemaster[".listFields"][] = "Id";
$tdataservicetypemaster[".listFields"][] = "Type";

$tdataservicetypemaster[".hideMobileList"] = array();


$tdataservicetypemaster[".viewFields"] = array();
$tdataservicetypemaster[".viewFields"][] = "Id";
$tdataservicetypemaster[".viewFields"][] = "Type";

$tdataservicetypemaster[".addFields"] = array();
$tdataservicetypemaster[".addFields"][] = "Type";

$tdataservicetypemaster[".masterListFields"] = array();
$tdataservicetypemaster[".masterListFields"][] = "Id";
$tdataservicetypemaster[".masterListFields"][] = "Type";

$tdataservicetypemaster[".inlineAddFields"] = array();

$tdataservicetypemaster[".editFields"] = array();
$tdataservicetypemaster[".editFields"][] = "Type";

$tdataservicetypemaster[".inlineEditFields"] = array();

$tdataservicetypemaster[".updateSelectedFields"] = array();
$tdataservicetypemaster[".updateSelectedFields"][] = "Type";


$tdataservicetypemaster[".exportFields"] = array();
$tdataservicetypemaster[".exportFields"][] = "Id";
$tdataservicetypemaster[".exportFields"][] = "Type";

$tdataservicetypemaster[".importFields"] = array();
$tdataservicetypemaster[".importFields"][] = "Id";
$tdataservicetypemaster[".importFields"][] = "Type";

$tdataservicetypemaster[".printFields"] = array();
$tdataservicetypemaster[".printFields"][] = "Id";
$tdataservicetypemaster[".printFields"][] = "Type";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "servicetypemaster";
	$fdata["Label"] = GetFieldLabel("servicetypemaster","Id");
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




	$tdataservicetypemaster["Id"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "servicetypemaster";
	$fdata["Label"] = GetFieldLabel("servicetypemaster","Type");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Type`";

	
	
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




	$tdataservicetypemaster["Type"] = $fdata;


$tables_data["servicetypemaster"]=&$tdataservicetypemaster;
$field_labels["servicetypemaster"] = &$fieldLabelsservicetypemaster;
$fieldToolTips["servicetypemaster"] = &$fieldToolTipsservicetypemaster;
$page_titles["servicetypemaster"] = &$pageTitlesservicetypemaster;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["servicetypemaster"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["servicetypemaster"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_servicetypemaster()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  	`Type`";
$proto0["m_strFrom"] = "FROM servicetypemaster";
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
	"m_strTable" => "servicetypemaster",
	"m_srcTableName" => "servicetypemaster"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "servicetypemaster";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "servicetypemaster",
	"m_srcTableName" => "servicetypemaster"
));

$proto8["m_sql"] = "`Type`";
$proto8["m_srcTableName"] = "servicetypemaster";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "servicetypemaster";
$proto11["m_srcTableName"] = "servicetypemaster";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Id";
$proto11["m_columns"][] = "Type";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "servicetypemaster";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "servicetypemaster";
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
$proto0["m_srcTableName"]="servicetypemaster";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_servicetypemaster = createSqlQuery_servicetypemaster();


	
					
;

		

$tdataservicetypemaster[".sqlquery"] = $queryData_servicetypemaster;

$tableEvents["servicetypemaster"] = new eventsBase;
$tdataservicetypemaster[".hasEvents"] = false;

?>