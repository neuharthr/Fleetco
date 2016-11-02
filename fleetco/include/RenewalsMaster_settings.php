<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRenewalsMaster = array();	
	$tdataRenewalsMaster[".truncateText"] = true;
	$tdataRenewalsMaster[".NumberOfChars"] = 80; 
	$tdataRenewalsMaster[".ShortName"] = "RenewalsMaster";
	$tdataRenewalsMaster[".OwnerID"] = "";
	$tdataRenewalsMaster[".OriginalTable"] = "RenewalsMaster";

//	field labels
$fieldLabelsRenewalsMaster = array();
$fieldToolTipsRenewalsMaster = array();
$pageTitlesRenewalsMaster = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRenewalsMaster["English"] = array();
	$fieldToolTipsRenewalsMaster["English"] = array();
	$pageTitlesRenewalsMaster["English"] = array();
	$fieldLabelsRenewalsMaster["English"]["ID"] = "ID";
	$fieldToolTipsRenewalsMaster["English"]["ID"] = "";
	$fieldLabelsRenewalsMaster["English"]["RenewalType"] = "Renewal Type";
	$fieldToolTipsRenewalsMaster["English"]["RenewalType"] = "";
	if (count($fieldToolTipsRenewalsMaster["English"]))
		$tdataRenewalsMaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRenewalsMaster[""] = array();
	$fieldToolTipsRenewalsMaster[""] = array();
	$pageTitlesRenewalsMaster[""] = array();
	$fieldLabelsRenewalsMaster[""]["ID"] = "ID";
	$fieldToolTipsRenewalsMaster[""]["ID"] = "";
	$fieldLabelsRenewalsMaster[""]["RenewalType"] = "Renewal Type";
	$fieldToolTipsRenewalsMaster[""]["RenewalType"] = "";
	if (count($fieldToolTipsRenewalsMaster[""]))
		$tdataRenewalsMaster[".isUseToolTips"] = true;
}
	
	
	$tdataRenewalsMaster[".NCSearch"] = true;



$tdataRenewalsMaster[".shortTableName"] = "RenewalsMaster";
$tdataRenewalsMaster[".nSecOptions"] = 0;
$tdataRenewalsMaster[".recsPerRowList"] = 1;
$tdataRenewalsMaster[".recsPerRowPrint"] = 1;
$tdataRenewalsMaster[".mainTableOwnerID"] = "";
$tdataRenewalsMaster[".moveNext"] = 1;
$tdataRenewalsMaster[".entityType"] = 0;

$tdataRenewalsMaster[".strOriginalTableName"] = "RenewalsMaster";




$tdataRenewalsMaster[".showAddInPopup"] = false;

$tdataRenewalsMaster[".showEditInPopup"] = false;

$tdataRenewalsMaster[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRenewalsMaster[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRenewalsMaster[".fieldsForRegister"] = array();

$tdataRenewalsMaster[".listAjax"] = false;

	$tdataRenewalsMaster[".audit"] = false;

	$tdataRenewalsMaster[".locking"] = false;

$tdataRenewalsMaster[".edit"] = true;
$tdataRenewalsMaster[".afterEditAction"] = 1;
$tdataRenewalsMaster[".closePopupAfterEdit"] = 1;
$tdataRenewalsMaster[".afterEditActionDetTable"] = "";

$tdataRenewalsMaster[".add"] = true;
$tdataRenewalsMaster[".afterAddAction"] = 1;
$tdataRenewalsMaster[".closePopupAfterAdd"] = 1;
$tdataRenewalsMaster[".afterAddActionDetTable"] = "";

$tdataRenewalsMaster[".list"] = true;

$tdataRenewalsMaster[".view"] = true;

$tdataRenewalsMaster[".import"] = true;

$tdataRenewalsMaster[".exportTo"] = true;

$tdataRenewalsMaster[".printFriendly"] = true;

$tdataRenewalsMaster[".delete"] = true;

$tdataRenewalsMaster[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataRenewalsMaster[".searchSaving"] = false;
//

$tdataRenewalsMaster[".showSearchPanel"] = true;
		$tdataRenewalsMaster[".flexibleSearch"] = true;		

if (isMobile())
	$tdataRenewalsMaster[".isUseAjaxSuggest"] = false;
else 
	$tdataRenewalsMaster[".isUseAjaxSuggest"] = true;

$tdataRenewalsMaster[".rowHighlite"] = true;



$tdataRenewalsMaster[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRenewalsMaster[".isUseTimeForSearch"] = false;





$tdataRenewalsMaster[".allSearchFields"] = array();
$tdataRenewalsMaster[".filterFields"] = array();
$tdataRenewalsMaster[".requiredSearchFields"] = array();

$tdataRenewalsMaster[".allSearchFields"][] = "ID";
	$tdataRenewalsMaster[".allSearchFields"][] = "RenewalType";
	

$tdataRenewalsMaster[".googleLikeFields"] = array();
$tdataRenewalsMaster[".googleLikeFields"][] = "ID";
$tdataRenewalsMaster[".googleLikeFields"][] = "RenewalType";


$tdataRenewalsMaster[".advSearchFields"] = array();
$tdataRenewalsMaster[".advSearchFields"][] = "ID";
$tdataRenewalsMaster[".advSearchFields"][] = "RenewalType";

$tdataRenewalsMaster[".tableType"] = "list";

$tdataRenewalsMaster[".printerPageOrientation"] = 0;
$tdataRenewalsMaster[".nPrinterPageScale"] = 100;

$tdataRenewalsMaster[".nPrinterSplitRecords"] = 40;

$tdataRenewalsMaster[".nPrinterPDFSplitRecords"] = 40;



$tdataRenewalsMaster[".geocodingEnabled"] = false;




	





// view page pdf
$tdataRenewalsMaster[".isViewPagePDF"] = true;
$tdataRenewalsMaster[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataRenewalsMaster[".isPrinterPagePDF"] = true;
$tdataRenewalsMaster[".nPrinterPagePDFScale"] = 100;


$tdataRenewalsMaster[".pageSize"] = 20;

$tdataRenewalsMaster[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRenewalsMaster[".strOrderBy"] = $tstrOrderBy;

$tdataRenewalsMaster[".orderindexes"] = array();

$tdataRenewalsMaster[".sqlHead"] = "SELECT ID,  	RenewalType";
$tdataRenewalsMaster[".sqlFrom"] = "FROM RenewalsMaster";
$tdataRenewalsMaster[".sqlWhereExpr"] = "";
$tdataRenewalsMaster[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRenewalsMaster[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRenewalsMaster[".arrGroupsPerPage"] = $arrGPP;

$tdataRenewalsMaster[".highlightSearchResults"] = true;

$tableKeysRenewalsMaster = array();
$tableKeysRenewalsMaster[] = "ID";
$tdataRenewalsMaster[".Keys"] = $tableKeysRenewalsMaster;

$tdataRenewalsMaster[".listFields"] = array();
$tdataRenewalsMaster[".listFields"][] = "ID";
$tdataRenewalsMaster[".listFields"][] = "RenewalType";

$tdataRenewalsMaster[".hideMobileList"] = array();


$tdataRenewalsMaster[".viewFields"] = array();
$tdataRenewalsMaster[".viewFields"][] = "ID";
$tdataRenewalsMaster[".viewFields"][] = "RenewalType";

$tdataRenewalsMaster[".addFields"] = array();
$tdataRenewalsMaster[".addFields"][] = "RenewalType";

$tdataRenewalsMaster[".masterListFields"] = array();
$tdataRenewalsMaster[".masterListFields"][] = "ID";
$tdataRenewalsMaster[".masterListFields"][] = "RenewalType";

$tdataRenewalsMaster[".inlineAddFields"] = array();

$tdataRenewalsMaster[".editFields"] = array();
$tdataRenewalsMaster[".editFields"][] = "RenewalType";

$tdataRenewalsMaster[".inlineEditFields"] = array();

$tdataRenewalsMaster[".exportFields"] = array();
$tdataRenewalsMaster[".exportFields"][] = "ID";
$tdataRenewalsMaster[".exportFields"][] = "RenewalType";

$tdataRenewalsMaster[".importFields"] = array();
$tdataRenewalsMaster[".importFields"][] = "ID";
$tdataRenewalsMaster[".importFields"][] = "RenewalType";

$tdataRenewalsMaster[".printFields"] = array();
$tdataRenewalsMaster[".printFields"][] = "ID";
$tdataRenewalsMaster[".printFields"][] = "RenewalType";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "renewalsmaster";
	$fdata["Label"] = GetFieldLabel("RenewalsMaster","ID"); 
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataRenewalsMaster["ID"] = $fdata;
//	RenewalType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RenewalType";
	$fdata["GoodName"] = "RenewalType";
	$fdata["ownerTable"] = "renewalsmaster";
	$fdata["Label"] = GetFieldLabel("RenewalsMaster","RenewalType"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "RenewalType"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RenewalType";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataRenewalsMaster["RenewalType"] = $fdata;

	
$tables_data["RenewalsMaster"]=&$tdataRenewalsMaster;
$field_labels["RenewalsMaster"] = &$fieldLabelsRenewalsMaster;
$fieldToolTips["RenewalsMaster"] = &$fieldToolTipsRenewalsMaster;
$page_titles["RenewalsMaster"] = &$pageTitlesRenewalsMaster;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["RenewalsMaster"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["RenewalsMaster"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_RenewalsMaster()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	RenewalType";
$proto0["m_strFrom"] = "FROM RenewalsMaster";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "renewalsmaster",
	"m_srcTableName" => "RenewalsMaster"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "RenewalsMaster";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "RenewalType",
	"m_strTable" => "renewalsmaster",
	"m_srcTableName" => "RenewalsMaster"
));

$proto7["m_sql"] = "RenewalType";
$proto7["m_srcTableName"] = "RenewalsMaster";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "renewalsmaster";
$proto10["m_srcTableName"] = "RenewalsMaster";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "ID";
$proto10["m_columns"][] = "RenewalType";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "RenewalsMaster";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "RenewalsMaster";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="RenewalsMaster";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_RenewalsMaster = createSqlQuery_RenewalsMaster();


	
		
	
$tdataRenewalsMaster[".sqlquery"] = $queryData_RenewalsMaster;

$tableEvents["RenewalsMaster"] = new eventsBase;
$tdataRenewalsMaster[".hasEvents"] = false;

?>