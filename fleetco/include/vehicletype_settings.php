<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavehicletype = array();
	$tdatavehicletype[".truncateText"] = true;
	$tdatavehicletype[".NumberOfChars"] = 80;
	$tdatavehicletype[".ShortName"] = "vehicletype";
	$tdatavehicletype[".OwnerID"] = "";
	$tdatavehicletype[".OriginalTable"] = "vehicletype";

//	field labels
$fieldLabelsvehicletype = array();
$fieldToolTipsvehicletype = array();
$pageTitlesvehicletype = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvehicletype["English"] = array();
	$fieldToolTipsvehicletype["English"] = array();
	$pageTitlesvehicletype["English"] = array();
	$fieldLabelsvehicletype["English"]["Id"] = "ID";
	$fieldToolTipsvehicletype["English"]["Id"] = "";
	$fieldLabelsvehicletype["English"]["VehicleType"] = "Vehicle Type";
	$fieldToolTipsvehicletype["English"]["VehicleType"] = "";
	if (count($fieldToolTipsvehicletype["English"]))
		$tdatavehicletype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsvehicletype["Afrikaans"] = array();
	$fieldToolTipsvehicletype["Afrikaans"] = array();
	$pageTitlesvehicletype["Afrikaans"] = array();
	$fieldLabelsvehicletype["Afrikaans"]["Id"] = "ID";
	$fieldToolTipsvehicletype["Afrikaans"]["Id"] = "";
	$fieldLabelsvehicletype["Afrikaans"]["VehicleType"] = "voertuig Tipe";
	$fieldToolTipsvehicletype["Afrikaans"]["VehicleType"] = "";
	if (count($fieldToolTipsvehicletype["Afrikaans"]))
		$tdatavehicletype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsvehicletype["Arabic"] = array();
	$fieldToolTipsvehicletype["Arabic"] = array();
	$pageTitlesvehicletype["Arabic"] = array();
	$fieldLabelsvehicletype["Arabic"]["Id"] = "???? ?????";
	$fieldToolTipsvehicletype["Arabic"]["Id"] = "";
	$fieldLabelsvehicletype["Arabic"]["VehicleType"] = "??? ???????";
	$fieldToolTipsvehicletype["Arabic"]["VehicleType"] = "";
	if (count($fieldToolTipsvehicletype["Arabic"]))
		$tdatavehicletype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsvehicletype["Chinese"] = array();
	$fieldToolTipsvehicletype["Chinese"] = array();
	$pageTitlesvehicletype["Chinese"] = array();
	$fieldLabelsvehicletype["Chinese"]["Id"] = "ID";
	$fieldToolTipsvehicletype["Chinese"]["Id"] = "";
	$fieldLabelsvehicletype["Chinese"]["VehicleType"] = "????";
	$fieldToolTipsvehicletype["Chinese"]["VehicleType"] = "";
	if (count($fieldToolTipsvehicletype["Chinese"]))
		$tdatavehicletype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsvehicletype["French"] = array();
	$fieldToolTipsvehicletype["French"] = array();
	$pageTitlesvehicletype["French"] = array();
	$fieldLabelsvehicletype["French"]["Id"] = "ID";
	$fieldToolTipsvehicletype["French"]["Id"] = "";
	$fieldLabelsvehicletype["French"]["VehicleType"] = "Type de véhicule";
	$fieldToolTipsvehicletype["French"]["VehicleType"] = "";
	if (count($fieldToolTipsvehicletype["French"]))
		$tdatavehicletype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsvehicletype["German"] = array();
	$fieldToolTipsvehicletype["German"] = array();
	$pageTitlesvehicletype["German"] = array();
	$fieldLabelsvehicletype["German"]["Id"] = "ICH WÜRDE";
	$fieldToolTipsvehicletype["German"]["Id"] = "";
	$fieldLabelsvehicletype["German"]["VehicleType"] = "Fahrzeugtyp";
	$fieldToolTipsvehicletype["German"]["VehicleType"] = "";
	if (count($fieldToolTipsvehicletype["German"]))
		$tdatavehicletype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsvehicletype["Italian"] = array();
	$fieldToolTipsvehicletype["Italian"] = array();
	$pageTitlesvehicletype["Italian"] = array();
	$fieldLabelsvehicletype["Italian"]["Id"] = "ID";
	$fieldToolTipsvehicletype["Italian"]["Id"] = "";
	$fieldLabelsvehicletype["Italian"]["VehicleType"] = "tipo di veicolo";
	$fieldToolTipsvehicletype["Italian"]["VehicleType"] = "";
	if (count($fieldToolTipsvehicletype["Italian"]))
		$tdatavehicletype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsvehicletype["Russian"] = array();
	$fieldToolTipsvehicletype["Russian"] = array();
	$pageTitlesvehicletype["Russian"] = array();
	$fieldLabelsvehicletype["Russian"]["Id"] = "? ??";
	$fieldToolTipsvehicletype["Russian"]["Id"] = "";
	$fieldLabelsvehicletype["Russian"]["VehicleType"] = "??? ??????";
	$fieldToolTipsvehicletype["Russian"]["VehicleType"] = "";
	if (count($fieldToolTipsvehicletype["Russian"]))
		$tdatavehicletype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvehicletype["Spanish"] = array();
	$fieldToolTipsvehicletype["Spanish"] = array();
	$pageTitlesvehicletype["Spanish"] = array();
	$fieldLabelsvehicletype["Spanish"]["Id"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipsvehicletype["Spanish"]["Id"] = "";
	$fieldLabelsvehicletype["Spanish"]["VehicleType"] = "tipo de vehiculo";
	$fieldToolTipsvehicletype["Spanish"]["VehicleType"] = "";
	if (count($fieldToolTipsvehicletype["Spanish"]))
		$tdatavehicletype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvehicletype[""] = array();
	$fieldToolTipsvehicletype[""] = array();
	$pageTitlesvehicletype[""] = array();
	if (count($fieldToolTipsvehicletype[""]))
		$tdatavehicletype[".isUseToolTips"] = true;
}


	$tdatavehicletype[".NCSearch"] = true;



$tdatavehicletype[".shortTableName"] = "vehicletype";
$tdatavehicletype[".nSecOptions"] = 0;
$tdatavehicletype[".recsPerRowPrint"] = 1;
$tdatavehicletype[".mainTableOwnerID"] = "";
$tdatavehicletype[".moveNext"] = 1;
$tdatavehicletype[".entityType"] = 0;

$tdatavehicletype[".strOriginalTableName"] = "vehicletype";

		 



$tdatavehicletype[".showAddInPopup"] = false;

$tdatavehicletype[".showEditInPopup"] = false;

$tdatavehicletype[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavehicletype[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavehicletype[".fieldsForRegister"] = array();

	$tdatavehicletype[".listAjax"] = true;

	$tdatavehicletype[".audit"] = false;

	$tdatavehicletype[".locking"] = false;

$tdatavehicletype[".edit"] = true;
$tdatavehicletype[".afterEditAction"] = 1;
$tdatavehicletype[".closePopupAfterEdit"] = 1;
$tdatavehicletype[".afterEditActionDetTable"] = "";

$tdatavehicletype[".add"] = true;
$tdatavehicletype[".afterAddAction"] = 1;
$tdatavehicletype[".closePopupAfterAdd"] = 1;
$tdatavehicletype[".afterAddActionDetTable"] = "";

$tdatavehicletype[".list"] = true;




$tdatavehicletype[".view"] = true;

$tdatavehicletype[".import"] = true;

$tdatavehicletype[".exportTo"] = true;

$tdatavehicletype[".printFriendly"] = true;

$tdatavehicletype[".delete"] = true;

$tdatavehicletype[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavehicletype[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatavehicletype[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatavehicletype[".searchSaving"] = false;
//

$tdatavehicletype[".showSearchPanel"] = true;
		$tdatavehicletype[".flexibleSearch"] = true;

$tdatavehicletype[".isUseAjaxSuggest"] = true;

$tdatavehicletype[".rowHighlite"] = true;



$tdatavehicletype[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavehicletype[".isUseTimeForSearch"] = false;



$tdatavehicletype[".badgeColor"] = "40E0D0";


$tdatavehicletype[".allSearchFields"] = array();
$tdatavehicletype[".filterFields"] = array();
$tdatavehicletype[".requiredSearchFields"] = array();

$tdatavehicletype[".allSearchFields"][] = "Id";
	$tdatavehicletype[".allSearchFields"][] = "VehicleType";
	

$tdatavehicletype[".googleLikeFields"] = array();
$tdatavehicletype[".googleLikeFields"][] = "Id";
$tdatavehicletype[".googleLikeFields"][] = "VehicleType";


$tdatavehicletype[".advSearchFields"] = array();
$tdatavehicletype[".advSearchFields"][] = "Id";
$tdatavehicletype[".advSearchFields"][] = "VehicleType";

$tdatavehicletype[".tableType"] = "list";

$tdatavehicletype[".printerPageOrientation"] = 0;
$tdatavehicletype[".nPrinterPageScale"] = 100;

$tdatavehicletype[".nPrinterSplitRecords"] = 40;

$tdatavehicletype[".nPrinterPDFSplitRecords"] = 40;



$tdatavehicletype[".geocodingEnabled"] = false;





$tdatavehicletype[".listGridLayout"] = 3;


$tdatavehicletype[".isResizeColumns"] = true;



// view page pdf
$tdatavehicletype[".isViewPagePDF"] = true;
$tdatavehicletype[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatavehicletype[".isPrinterPagePDF"] = true;
$tdatavehicletype[".nPrinterPagePDFScale"] = 100;


$tdatavehicletype[".pageSize"] = 20;

$tdatavehicletype[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavehicletype[".strOrderBy"] = $tstrOrderBy;

$tdatavehicletype[".orderindexes"] = array();

$tdatavehicletype[".sqlHead"] = "SELECT Id,  	VehicleType";
$tdatavehicletype[".sqlFrom"] = "FROM vehicletype";
$tdatavehicletype[".sqlWhereExpr"] = "";
$tdatavehicletype[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatavehicletype[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavehicletype[".arrGroupsPerPage"] = $arrGPP;

$tdatavehicletype[".highlightSearchResults"] = true;

$tableKeysvehicletype = array();
$tableKeysvehicletype[] = "Id";
$tdatavehicletype[".Keys"] = $tableKeysvehicletype;

$tdatavehicletype[".listFields"] = array();
$tdatavehicletype[".listFields"][] = "Id";
$tdatavehicletype[".listFields"][] = "VehicleType";

$tdatavehicletype[".hideMobileList"] = array();


$tdatavehicletype[".viewFields"] = array();
$tdatavehicletype[".viewFields"][] = "Id";
$tdatavehicletype[".viewFields"][] = "VehicleType";

$tdatavehicletype[".addFields"] = array();
$tdatavehicletype[".addFields"][] = "VehicleType";

$tdatavehicletype[".masterListFields"] = array();
$tdatavehicletype[".masterListFields"][] = "Id";
$tdatavehicletype[".masterListFields"][] = "VehicleType";

$tdatavehicletype[".inlineAddFields"] = array();

$tdatavehicletype[".editFields"] = array();
$tdatavehicletype[".editFields"][] = "VehicleType";

$tdatavehicletype[".inlineEditFields"] = array();

$tdatavehicletype[".updateSelectedFields"] = array();
$tdatavehicletype[".updateSelectedFields"][] = "VehicleType";


$tdatavehicletype[".exportFields"] = array();
$tdatavehicletype[".exportFields"][] = "Id";
$tdatavehicletype[".exportFields"][] = "VehicleType";

$tdatavehicletype[".importFields"] = array();
$tdatavehicletype[".importFields"][] = "Id";
$tdatavehicletype[".importFields"][] = "VehicleType";

$tdatavehicletype[".printFields"] = array();
$tdatavehicletype[".printFields"][] = "Id";
$tdatavehicletype[".printFields"][] = "VehicleType";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "vehicletype";
	$fdata["Label"] = GetFieldLabel("vehicletype","Id");
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




	$tdatavehicletype["Id"] = $fdata;
//	VehicleType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "VehicleType";
	$fdata["GoodName"] = "VehicleType";
	$fdata["ownerTable"] = "vehicletype";
	$fdata["Label"] = GetFieldLabel("vehicletype","VehicleType");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VehicleType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VehicleType";

	
	
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




	$tdatavehicletype["VehicleType"] = $fdata;


$tables_data["vehicletype"]=&$tdatavehicletype;
$field_labels["vehicletype"] = &$fieldLabelsvehicletype;
$fieldToolTips["vehicletype"] = &$fieldToolTipsvehicletype;
$page_titles["vehicletype"] = &$pageTitlesvehicletype;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vehicletype"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vehicletype"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vehicletype()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  	VehicleType";
$proto0["m_strFrom"] = "FROM vehicletype";
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
	"m_strTable" => "vehicletype",
	"m_srcTableName" => "vehicletype"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "vehicletype";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "VehicleType",
	"m_strTable" => "vehicletype",
	"m_srcTableName" => "vehicletype"
));

$proto8["m_sql"] = "VehicleType";
$proto8["m_srcTableName"] = "vehicletype";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "vehicletype";
$proto11["m_srcTableName"] = "vehicletype";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Id";
$proto11["m_columns"][] = "VehicleType";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "vehicletype";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "vehicletype";
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
$proto0["m_srcTableName"]="vehicletype";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vehicletype = createSqlQuery_vehicletype();


	
					
;

		

$tdatavehicletype[".sqlquery"] = $queryData_vehicletype;

$tableEvents["vehicletype"] = new eventsBase;
$tdatavehicletype[".hasEvents"] = false;

?>