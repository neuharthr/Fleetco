<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafleettype = array();
	$tdatafleettype[".truncateText"] = true;
	$tdatafleettype[".NumberOfChars"] = 80;
	$tdatafleettype[".ShortName"] = "fleettype";
	$tdatafleettype[".OwnerID"] = "";
	$tdatafleettype[".OriginalTable"] = "fleettype";

//	field labels
$fieldLabelsfleettype = array();
$fieldToolTipsfleettype = array();
$pageTitlesfleettype = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfleettype["English"] = array();
	$fieldToolTipsfleettype["English"] = array();
	$pageTitlesfleettype["English"] = array();
	$fieldLabelsfleettype["English"]["Id"] = "ID";
	$fieldToolTipsfleettype["English"]["Id"] = "";
	$fieldLabelsfleettype["English"]["FleetType"] = "Fleet Type";
	$fieldToolTipsfleettype["English"]["FleetType"] = "";
	$fieldLabelsfleettype["English"]["In_Charge"] = "In-Charge";
	$fieldToolTipsfleettype["English"]["In_Charge"] = "";
	if (count($fieldToolTipsfleettype["English"]))
		$tdatafleettype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsfleettype["Afrikaans"] = array();
	$fieldToolTipsfleettype["Afrikaans"] = array();
	$pageTitlesfleettype["Afrikaans"] = array();
	$fieldLabelsfleettype["Afrikaans"]["Id"] = "ID";
	$fieldToolTipsfleettype["Afrikaans"]["Id"] = "";
	$fieldLabelsfleettype["Afrikaans"]["FleetType"] = "vloot Tipe";
	$fieldToolTipsfleettype["Afrikaans"]["FleetType"] = "";
	$fieldLabelsfleettype["Afrikaans"]["In_Charge"] = "In-bevel";
	$fieldToolTipsfleettype["Afrikaans"]["In_Charge"] = "";
	if (count($fieldToolTipsfleettype["Afrikaans"]))
		$tdatafleettype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsfleettype["Arabic"] = array();
	$fieldToolTipsfleettype["Arabic"] = array();
	$pageTitlesfleettype["Arabic"] = array();
	$fieldLabelsfleettype["Arabic"]["Id"] = "???? ?????";
	$fieldToolTipsfleettype["Arabic"]["Id"] = "";
	$fieldLabelsfleettype["Arabic"]["FleetType"] = "????? ???";
	$fieldToolTipsfleettype["Arabic"]["FleetType"] = "";
	$fieldLabelsfleettype["Arabic"]["In_Charge"] = "????? ??";
	$fieldToolTipsfleettype["Arabic"]["In_Charge"] = "";
	if (count($fieldToolTipsfleettype["Arabic"]))
		$tdatafleettype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsfleettype["Chinese"] = array();
	$fieldToolTipsfleettype["Chinese"] = array();
	$pageTitlesfleettype["Chinese"] = array();
	$fieldLabelsfleettype["Chinese"]["Id"] = "ID";
	$fieldToolTipsfleettype["Chinese"]["Id"] = "";
	$fieldLabelsfleettype["Chinese"]["FleetType"] = "????";
	$fieldToolTipsfleettype["Chinese"]["FleetType"] = "";
	$fieldLabelsfleettype["Chinese"]["In_Charge"] = "??";
	$fieldToolTipsfleettype["Chinese"]["In_Charge"] = "";
	if (count($fieldToolTipsfleettype["Chinese"]))
		$tdatafleettype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsfleettype["French"] = array();
	$fieldToolTipsfleettype["French"] = array();
	$pageTitlesfleettype["French"] = array();
	$fieldLabelsfleettype["French"]["Id"] = "ID";
	$fieldToolTipsfleettype["French"]["Id"] = "";
	$fieldLabelsfleettype["French"]["FleetType"] = "Type de flotte";
	$fieldToolTipsfleettype["French"]["FleetType"] = "";
	$fieldLabelsfleettype["French"]["In_Charge"] = "En charge";
	$fieldToolTipsfleettype["French"]["In_Charge"] = "";
	if (count($fieldToolTipsfleettype["French"]))
		$tdatafleettype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsfleettype["German"] = array();
	$fieldToolTipsfleettype["German"] = array();
	$pageTitlesfleettype["German"] = array();
	$fieldLabelsfleettype["German"]["Id"] = "ICH WÜRDE";
	$fieldToolTipsfleettype["German"]["Id"] = "";
	$fieldLabelsfleettype["German"]["FleetType"] = "Flottenart";
	$fieldToolTipsfleettype["German"]["FleetType"] = "";
	$fieldLabelsfleettype["German"]["In_Charge"] = "Verantwortlich";
	$fieldToolTipsfleettype["German"]["In_Charge"] = "";
	if (count($fieldToolTipsfleettype["German"]))
		$tdatafleettype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsfleettype["Italian"] = array();
	$fieldToolTipsfleettype["Italian"] = array();
	$pageTitlesfleettype["Italian"] = array();
	$fieldLabelsfleettype["Italian"]["Id"] = "ID";
	$fieldToolTipsfleettype["Italian"]["Id"] = "";
	$fieldLabelsfleettype["Italian"]["FleetType"] = "Fleet Tipo";
	$fieldToolTipsfleettype["Italian"]["FleetType"] = "";
	$fieldLabelsfleettype["Italian"]["In_Charge"] = "In carica";
	$fieldToolTipsfleettype["Italian"]["In_Charge"] = "";
	if (count($fieldToolTipsfleettype["Italian"]))
		$tdatafleettype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsfleettype["Russian"] = array();
	$fieldToolTipsfleettype["Russian"] = array();
	$pageTitlesfleettype["Russian"] = array();
	$fieldLabelsfleettype["Russian"]["Id"] = "? ??";
	$fieldToolTipsfleettype["Russian"]["Id"] = "";
	$fieldLabelsfleettype["Russian"]["FleetType"] = "???? ???";
	$fieldToolTipsfleettype["Russian"]["FleetType"] = "";
	$fieldLabelsfleettype["Russian"]["In_Charge"] = "?????????????";
	$fieldToolTipsfleettype["Russian"]["In_Charge"] = "";
	if (count($fieldToolTipsfleettype["Russian"]))
		$tdatafleettype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsfleettype["Spanish"] = array();
	$fieldToolTipsfleettype["Spanish"] = array();
	$pageTitlesfleettype["Spanish"] = array();
	$fieldLabelsfleettype["Spanish"]["Id"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipsfleettype["Spanish"]["Id"] = "";
	$fieldLabelsfleettype["Spanish"]["FleetType"] = "Tipo de flota";
	$fieldToolTipsfleettype["Spanish"]["FleetType"] = "";
	$fieldLabelsfleettype["Spanish"]["In_Charge"] = "En cargo";
	$fieldToolTipsfleettype["Spanish"]["In_Charge"] = "";
	if (count($fieldToolTipsfleettype["Spanish"]))
		$tdatafleettype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfleettype[""] = array();
	$fieldToolTipsfleettype[""] = array();
	$pageTitlesfleettype[""] = array();
	if (count($fieldToolTipsfleettype[""]))
		$tdatafleettype[".isUseToolTips"] = true;
}


	$tdatafleettype[".NCSearch"] = true;



$tdatafleettype[".shortTableName"] = "fleettype";
$tdatafleettype[".nSecOptions"] = 0;
$tdatafleettype[".recsPerRowPrint"] = 1;
$tdatafleettype[".mainTableOwnerID"] = "";
$tdatafleettype[".moveNext"] = 1;
$tdatafleettype[".entityType"] = 0;

$tdatafleettype[".strOriginalTableName"] = "fleettype";

		 



$tdatafleettype[".showAddInPopup"] = false;

$tdatafleettype[".showEditInPopup"] = false;

$tdatafleettype[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafleettype[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafleettype[".fieldsForRegister"] = array();

	$tdatafleettype[".listAjax"] = true;

	$tdatafleettype[".audit"] = false;

	$tdatafleettype[".locking"] = false;

$tdatafleettype[".edit"] = true;
$tdatafleettype[".afterEditAction"] = 1;
$tdatafleettype[".closePopupAfterEdit"] = 1;
$tdatafleettype[".afterEditActionDetTable"] = "";

$tdatafleettype[".add"] = true;
$tdatafleettype[".afterAddAction"] = 1;
$tdatafleettype[".closePopupAfterAdd"] = 1;
$tdatafleettype[".afterAddActionDetTable"] = "";

$tdatafleettype[".list"] = true;




$tdatafleettype[".view"] = true;

$tdatafleettype[".import"] = true;

$tdatafleettype[".exportTo"] = true;

$tdatafleettype[".printFriendly"] = true;

$tdatafleettype[".delete"] = true;

$tdatafleettype[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafleettype[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatafleettype[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatafleettype[".searchSaving"] = false;
//

$tdatafleettype[".showSearchPanel"] = true;
		$tdatafleettype[".flexibleSearch"] = true;

$tdatafleettype[".isUseAjaxSuggest"] = true;

$tdatafleettype[".rowHighlite"] = true;



$tdatafleettype[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafleettype[".isUseTimeForSearch"] = false;



$tdatafleettype[".badgeColor"] = "FFD700";


$tdatafleettype[".allSearchFields"] = array();
$tdatafleettype[".filterFields"] = array();
$tdatafleettype[".requiredSearchFields"] = array();

$tdatafleettype[".allSearchFields"][] = "Id";
	$tdatafleettype[".allSearchFields"][] = "FleetType";
	$tdatafleettype[".allSearchFields"][] = "In-Charge";
	

$tdatafleettype[".googleLikeFields"] = array();
$tdatafleettype[".googleLikeFields"][] = "Id";
$tdatafleettype[".googleLikeFields"][] = "FleetType";
$tdatafleettype[".googleLikeFields"][] = "In-Charge";


$tdatafleettype[".advSearchFields"] = array();
$tdatafleettype[".advSearchFields"][] = "Id";
$tdatafleettype[".advSearchFields"][] = "FleetType";
$tdatafleettype[".advSearchFields"][] = "In-Charge";

$tdatafleettype[".tableType"] = "list";

$tdatafleettype[".printerPageOrientation"] = 0;
$tdatafleettype[".nPrinterPageScale"] = 100;

$tdatafleettype[".nPrinterSplitRecords"] = 40;

$tdatafleettype[".nPrinterPDFSplitRecords"] = 40;



$tdatafleettype[".geocodingEnabled"] = false;





$tdatafleettype[".listGridLayout"] = 3;


$tdatafleettype[".isResizeColumns"] = true;



// view page pdf
$tdatafleettype[".isViewPagePDF"] = true;
$tdatafleettype[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatafleettype[".isPrinterPagePDF"] = true;
$tdatafleettype[".nPrinterPagePDFScale"] = 100;


$tdatafleettype[".pageSize"] = 20;

$tdatafleettype[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafleettype[".strOrderBy"] = $tstrOrderBy;

$tdatafleettype[".orderindexes"] = array();

$tdatafleettype[".sqlHead"] = "SELECT Id,  	FleetType,  	`In-Charge`";
$tdatafleettype[".sqlFrom"] = "FROM fleettype";
$tdatafleettype[".sqlWhereExpr"] = "";
$tdatafleettype[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatafleettype[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafleettype[".arrGroupsPerPage"] = $arrGPP;

$tdatafleettype[".highlightSearchResults"] = true;

$tableKeysfleettype = array();
$tableKeysfleettype[] = "Id";
$tdatafleettype[".Keys"] = $tableKeysfleettype;

$tdatafleettype[".listFields"] = array();
$tdatafleettype[".listFields"][] = "Id";
$tdatafleettype[".listFields"][] = "FleetType";
$tdatafleettype[".listFields"][] = "In-Charge";

$tdatafleettype[".hideMobileList"] = array();


$tdatafleettype[".viewFields"] = array();
$tdatafleettype[".viewFields"][] = "Id";
$tdatafleettype[".viewFields"][] = "FleetType";
$tdatafleettype[".viewFields"][] = "In-Charge";

$tdatafleettype[".addFields"] = array();
$tdatafleettype[".addFields"][] = "FleetType";
$tdatafleettype[".addFields"][] = "In-Charge";

$tdatafleettype[".masterListFields"] = array();
$tdatafleettype[".masterListFields"][] = "Id";
$tdatafleettype[".masterListFields"][] = "FleetType";
$tdatafleettype[".masterListFields"][] = "In-Charge";

$tdatafleettype[".inlineAddFields"] = array();

$tdatafleettype[".editFields"] = array();
$tdatafleettype[".editFields"][] = "FleetType";
$tdatafleettype[".editFields"][] = "In-Charge";

$tdatafleettype[".inlineEditFields"] = array();

$tdatafleettype[".updateSelectedFields"] = array();
$tdatafleettype[".updateSelectedFields"][] = "FleetType";
$tdatafleettype[".updateSelectedFields"][] = "In-Charge";


$tdatafleettype[".exportFields"] = array();
$tdatafleettype[".exportFields"][] = "Id";
$tdatafleettype[".exportFields"][] = "FleetType";
$tdatafleettype[".exportFields"][] = "In-Charge";

$tdatafleettype[".importFields"] = array();
$tdatafleettype[".importFields"][] = "Id";
$tdatafleettype[".importFields"][] = "FleetType";
$tdatafleettype[".importFields"][] = "In-Charge";

$tdatafleettype[".printFields"] = array();
$tdatafleettype[".printFields"][] = "Id";
$tdatafleettype[".printFields"][] = "FleetType";
$tdatafleettype[".printFields"][] = "In-Charge";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "fleettype";
	$fdata["Label"] = GetFieldLabel("fleettype","Id");
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




	$tdatafleettype["Id"] = $fdata;
//	FleetType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FleetType";
	$fdata["GoodName"] = "FleetType";
	$fdata["ownerTable"] = "fleettype";
	$fdata["Label"] = GetFieldLabel("fleettype","FleetType");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FleetType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FleetType";

	
	
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




	$tdatafleettype["FleetType"] = $fdata;
//	In-Charge
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "In-Charge";
	$fdata["GoodName"] = "In_Charge";
	$fdata["ownerTable"] = "fleettype";
	$fdata["Label"] = GetFieldLabel("fleettype","In_Charge");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "In-Charge";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`In-Charge`";

	
	
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




	$tdatafleettype["In-Charge"] = $fdata;


$tables_data["fleettype"]=&$tdatafleettype;
$field_labels["fleettype"] = &$fieldLabelsfleettype;
$fieldToolTips["fleettype"] = &$fieldToolTipsfleettype;
$page_titles["fleettype"] = &$pageTitlesfleettype;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["fleettype"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["fleettype"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_fleettype()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  	FleetType,  	`In-Charge`";
$proto0["m_strFrom"] = "FROM fleettype";
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
	"m_strTable" => "fleettype",
	"m_srcTableName" => "fleettype"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "fleettype";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FleetType",
	"m_strTable" => "fleettype",
	"m_srcTableName" => "fleettype"
));

$proto8["m_sql"] = "FleetType";
$proto8["m_srcTableName"] = "fleettype";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "In-Charge",
	"m_strTable" => "fleettype",
	"m_srcTableName" => "fleettype"
));

$proto10["m_sql"] = "`In-Charge`";
$proto10["m_srcTableName"] = "fleettype";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "fleettype";
$proto13["m_srcTableName"] = "fleettype";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "Id";
$proto13["m_columns"][] = "FleetType";
$proto13["m_columns"][] = "In-Charge";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "fleettype";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "fleettype";
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
$proto0["m_srcTableName"]="fleettype";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fleettype = createSqlQuery_fleettype();


	
					
;

			

$tdatafleettype[".sqlquery"] = $queryData_fleettype;

$tableEvents["fleettype"] = new eventsBase;
$tdatafleettype[".hasEvents"] = false;

?>