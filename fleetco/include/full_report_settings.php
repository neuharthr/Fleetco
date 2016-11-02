<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafull_report = array();	
	$tdatafull_report[".truncateText"] = true;
	$tdatafull_report[".NumberOfChars"] = 80; 
	$tdatafull_report[".ShortName"] = "full_report";
	$tdatafull_report[".OwnerID"] = "";
	$tdatafull_report[".OriginalTable"] = "full-report";

//	field labels
$fieldLabelsfull_report = array();
$fieldToolTipsfull_report = array();
$pageTitlesfull_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfull_report["English"] = array();
	$fieldToolTipsfull_report["English"] = array();
	$pageTitlesfull_report["English"] = array();
	$fieldLabelsfull_report["English"]["Id"] = "Id";
	$fieldToolTipsfull_report["English"]["Id"] = "";
	$fieldLabelsfull_report["English"]["SysDate"] = "Sys Date";
	$fieldToolTipsfull_report["English"]["SysDate"] = "";
	$fieldLabelsfull_report["English"]["Cost"] = "Cost";
	$fieldToolTipsfull_report["English"]["Cost"] = "";
	$fieldLabelsfull_report["English"]["Type"] = "Type";
	$fieldToolTipsfull_report["English"]["Type"] = "";
	$fieldLabelsfull_report["English"]["Date"] = "Date";
	$fieldToolTipsfull_report["English"]["Date"] = "";
	if (count($fieldToolTipsfull_report["English"]))
		$tdatafull_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfull_report[""] = array();
	$fieldToolTipsfull_report[""] = array();
	$pageTitlesfull_report[""] = array();
	$fieldLabelsfull_report[""]["Id"] = "Id";
	$fieldToolTipsfull_report[""]["Id"] = "";
	$fieldLabelsfull_report[""]["SysDate"] = "Sys Date";
	$fieldToolTipsfull_report[""]["SysDate"] = "";
	$fieldLabelsfull_report[""]["Cost"] = "Cost";
	$fieldToolTipsfull_report[""]["Cost"] = "";
	$fieldLabelsfull_report[""]["Type"] = "Type";
	$fieldToolTipsfull_report[""]["Type"] = "";
	$fieldLabelsfull_report[""]["Date"] = "Date";
	$fieldToolTipsfull_report[""]["Date"] = "";
	if (count($fieldToolTipsfull_report[""]))
		$tdatafull_report[".isUseToolTips"] = true;
}
	
	
	$tdatafull_report[".NCSearch"] = true;



$tdatafull_report[".shortTableName"] = "full_report";
$tdatafull_report[".nSecOptions"] = 0;
$tdatafull_report[".recsPerRowList"] = 1;
$tdatafull_report[".recsPerRowPrint"] = 1;
$tdatafull_report[".mainTableOwnerID"] = "";
$tdatafull_report[".moveNext"] = 1;
$tdatafull_report[".entityType"] = 0;

$tdatafull_report[".strOriginalTableName"] = "full-report";




$tdatafull_report[".showAddInPopup"] = false;

$tdatafull_report[".showEditInPopup"] = false;

$tdatafull_report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafull_report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafull_report[".fieldsForRegister"] = array();

$tdatafull_report[".listAjax"] = false;

	$tdatafull_report[".audit"] = false;

	$tdatafull_report[".locking"] = false;

$tdatafull_report[".edit"] = true;
$tdatafull_report[".afterEditAction"] = 1;
$tdatafull_report[".closePopupAfterEdit"] = 1;
$tdatafull_report[".afterEditActionDetTable"] = "";

$tdatafull_report[".add"] = true;
$tdatafull_report[".afterAddAction"] = 1;
$tdatafull_report[".closePopupAfterAdd"] = 1;
$tdatafull_report[".afterAddActionDetTable"] = "";

$tdatafull_report[".list"] = true;

$tdatafull_report[".inlineEdit"] = true;
$tdatafull_report[".inlineAdd"] = true;
$tdatafull_report[".view"] = true;

$tdatafull_report[".import"] = true;

$tdatafull_report[".exportTo"] = true;

$tdatafull_report[".printFriendly"] = true;

$tdatafull_report[".delete"] = true;

$tdatafull_report[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafull_report[".searchSaving"] = false;
//

$tdatafull_report[".showSearchPanel"] = true;
		$tdatafull_report[".flexibleSearch"] = true;		

if (isMobile())
	$tdatafull_report[".isUseAjaxSuggest"] = false;
else 
	$tdatafull_report[".isUseAjaxSuggest"] = true;

$tdatafull_report[".rowHighlite"] = true;



$tdatafull_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafull_report[".isUseTimeForSearch"] = false;





$tdatafull_report[".allSearchFields"] = array();
$tdatafull_report[".filterFields"] = array();
$tdatafull_report[".requiredSearchFields"] = array();

$tdatafull_report[".allSearchFields"][] = "Id";
	$tdatafull_report[".allSearchFields"][] = "SysDate";
	$tdatafull_report[".allSearchFields"][] = "Cost";
	$tdatafull_report[".allSearchFields"][] = "Type";
	$tdatafull_report[".allSearchFields"][] = "Date";
	

$tdatafull_report[".googleLikeFields"] = array();
$tdatafull_report[".googleLikeFields"][] = "Id";
$tdatafull_report[".googleLikeFields"][] = "SysDate";
$tdatafull_report[".googleLikeFields"][] = "Cost";
$tdatafull_report[".googleLikeFields"][] = "Type";
$tdatafull_report[".googleLikeFields"][] = "Date";


$tdatafull_report[".advSearchFields"] = array();
$tdatafull_report[".advSearchFields"][] = "Id";
$tdatafull_report[".advSearchFields"][] = "SysDate";
$tdatafull_report[".advSearchFields"][] = "Cost";
$tdatafull_report[".advSearchFields"][] = "Type";
$tdatafull_report[".advSearchFields"][] = "Date";

$tdatafull_report[".tableType"] = "list";

$tdatafull_report[".printerPageOrientation"] = 0;
$tdatafull_report[".nPrinterPageScale"] = 100;

$tdatafull_report[".nPrinterSplitRecords"] = 40;

$tdatafull_report[".nPrinterPDFSplitRecords"] = 40;



$tdatafull_report[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatafull_report[".pageSize"] = 20;

$tdatafull_report[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafull_report[".strOrderBy"] = $tstrOrderBy;

$tdatafull_report[".orderindexes"] = array();

$tdatafull_report[".sqlHead"] = "SELECT `full-report`.Id,  `full-report`.`SysDate`,  maintenenace.Cost,  maintenenace.`Type`,  maintenenace.`Date`";
$tdatafull_report[".sqlFrom"] = "FROM `full-report`  RIGHT OUTER JOIN maintenenace ON maintenenace.`Date` = `full-report`.`SysDate`";
$tdatafull_report[".sqlWhereExpr"] = "";
$tdatafull_report[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafull_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafull_report[".arrGroupsPerPage"] = $arrGPP;

$tdatafull_report[".highlightSearchResults"] = true;

$tableKeysfull_report = array();
$tableKeysfull_report[] = "Id";
$tdatafull_report[".Keys"] = $tableKeysfull_report;

$tdatafull_report[".listFields"] = array();
$tdatafull_report[".listFields"][] = "Date";
$tdatafull_report[".listFields"][] = "Cost";
$tdatafull_report[".listFields"][] = "Type";
$tdatafull_report[".listFields"][] = "Id";
$tdatafull_report[".listFields"][] = "SysDate";

$tdatafull_report[".hideMobileList"] = array();


$tdatafull_report[".viewFields"] = array();
$tdatafull_report[".viewFields"][] = "Id";
$tdatafull_report[".viewFields"][] = "SysDate";
$tdatafull_report[".viewFields"][] = "Cost";
$tdatafull_report[".viewFields"][] = "Type";
$tdatafull_report[".viewFields"][] = "Date";

$tdatafull_report[".addFields"] = array();
$tdatafull_report[".addFields"][] = "SysDate";

$tdatafull_report[".masterListFields"] = array();
$tdatafull_report[".masterListFields"][] = "Id";
$tdatafull_report[".masterListFields"][] = "SysDate";
$tdatafull_report[".masterListFields"][] = "Cost";
$tdatafull_report[".masterListFields"][] = "Type";
$tdatafull_report[".masterListFields"][] = "Date";

$tdatafull_report[".inlineAddFields"] = array();
$tdatafull_report[".inlineAddFields"][] = "SysDate";

$tdatafull_report[".editFields"] = array();
$tdatafull_report[".editFields"][] = "SysDate";

$tdatafull_report[".inlineEditFields"] = array();
$tdatafull_report[".inlineEditFields"][] = "SysDate";

$tdatafull_report[".exportFields"] = array();
$tdatafull_report[".exportFields"][] = "Id";
$tdatafull_report[".exportFields"][] = "SysDate";
$tdatafull_report[".exportFields"][] = "Cost";
$tdatafull_report[".exportFields"][] = "Type";
$tdatafull_report[".exportFields"][] = "Date";

$tdatafull_report[".importFields"] = array();
$tdatafull_report[".importFields"][] = "Id";
$tdatafull_report[".importFields"][] = "SysDate";
$tdatafull_report[".importFields"][] = "Cost";
$tdatafull_report[".importFields"][] = "Type";
$tdatafull_report[".importFields"][] = "Date";

$tdatafull_report[".printFields"] = array();
$tdatafull_report[".printFields"][] = "Id";
$tdatafull_report[".printFields"][] = "SysDate";
$tdatafull_report[".printFields"][] = "Cost";
$tdatafull_report[".printFields"][] = "Type";
$tdatafull_report[".printFields"][] = "Date";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "full-report";
	$fdata["Label"] = GetFieldLabel("full_report","Id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`full-report`.Id";
	
		
		
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

	

	
	$tdatafull_report["Id"] = $fdata;
//	SysDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SysDate";
	$fdata["GoodName"] = "SysDate";
	$fdata["ownerTable"] = "full-report";
	$fdata["Label"] = GetFieldLabel("full_report","SysDate"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "SysDate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`full-report`.`SysDate`";
	
		
		
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

	

	
	$tdatafull_report["SysDate"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("full_report","Cost"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Cost"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "maintenenace.Cost";
	
		
		
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

	

	
	$tdatafull_report["Cost"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("full_report","Type"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Type"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "maintenenace.`Type`";
	
		
		
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

	

	
	$tdatafull_report["Type"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("full_report","Date"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "maintenenace.`Date`";
	
		
		
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

	

	
	$tdatafull_report["Date"] = $fdata;

	
$tables_data["full-report"]=&$tdatafull_report;
$field_labels["full_report"] = &$fieldLabelsfull_report;
$fieldToolTips["full-report"] = &$fieldToolTipsfull_report;
$page_titles["full_report"] = &$pageTitlesfull_report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["full-report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["full-report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_full_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`full-report`.Id,  `full-report`.`SysDate`,  maintenenace.Cost,  maintenenace.`Type`,  maintenenace.`Date`";
$proto0["m_strFrom"] = "FROM `full-report`  RIGHT OUTER JOIN maintenenace ON maintenenace.`Date` = `full-report`.`SysDate`";
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
	"m_strName" => "Id",
	"m_strTable" => "full-report",
	"m_srcTableName" => "full-report"
));

$proto5["m_sql"] = "`full-report`.Id";
$proto5["m_srcTableName"] = "full-report";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "SysDate",
	"m_strTable" => "full-report",
	"m_srcTableName" => "full-report"
));

$proto7["m_sql"] = "`full-report`.`SysDate`";
$proto7["m_srcTableName"] = "full-report";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "full-report"
));

$proto9["m_sql"] = "maintenenace.Cost";
$proto9["m_srcTableName"] = "full-report";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "full-report"
));

$proto11["m_sql"] = "maintenenace.`Type`";
$proto11["m_srcTableName"] = "full-report";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "full-report"
));

$proto13["m_sql"] = "maintenenace.`Date`";
$proto13["m_srcTableName"] = "full-report";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "full-report";
$proto16["m_srcTableName"] = "full-report";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "Id";
$proto16["m_columns"][] = "SysDate";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "`full-report`";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "full-report";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
												$proto19=array();
$proto19["m_link"] = "SQLL_RIGHTJOIN";
			$proto20=array();
$proto20["m_strName"] = "maintenenace";
$proto20["m_srcTableName"] = "full-report";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "Id";
$proto20["m_columns"][] = "Fleet";
$proto20["m_columns"][] = "Vehicle";
$proto20["m_columns"][] = "Type";
$proto20["m_columns"][] = "Supplier";
$proto20["m_columns"][] = "Cost";
$proto20["m_columns"][] = "Remarks";
$proto20["m_columns"][] = "RefNo";
$proto20["m_columns"][] = "SysDate";
$proto20["m_columns"][] = "Date";
$proto20["m_columns"][] = "EnteredBy";
$proto20["m_columns"][] = "Approval";
$proto20["m_columns"][] = "MeterReading";
$proto20["m_columns"][] = "AccidentRef";
$proto20["m_columns"][] = "PaymentVoucher";
$proto20["m_columns"][] = "MaintType";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "RIGHT OUTER JOIN maintenenace ON maintenenace.`Date` = `full-report`.`SysDate`";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "full-report";
$proto21=array();
$proto21["m_sql"] = "maintenenace.`Date` = `full-report`.`SysDate`";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "full-report"
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "= `full-report`.`SysDate`";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="full-report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_full_report = createSqlQuery_full_report();


	
					
	
$tdatafull_report[".sqlquery"] = $queryData_full_report;

$tableEvents["full-report"] = new eventsBase;
$tdatafull_report[".hasEvents"] = false;

?>