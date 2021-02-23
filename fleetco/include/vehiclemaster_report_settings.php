<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavehiclemaster_report = array();
	$tdatavehiclemaster_report[".truncateText"] = true;
	$tdatavehiclemaster_report[".NumberOfChars"] = 80;
	$tdatavehiclemaster_report[".ShortName"] = "vehiclemaster_report";
	$tdatavehiclemaster_report[".OwnerID"] = "";
	$tdatavehiclemaster_report[".OriginalTable"] = "vehiclemaster";

//	field labels
$fieldLabelsvehiclemaster_report = array();
$fieldToolTipsvehiclemaster_report = array();
$pageTitlesvehiclemaster_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvehiclemaster_report["English"] = array();
	$fieldToolTipsvehiclemaster_report["English"] = array();
	$pageTitlesvehiclemaster_report["English"] = array();
	$fieldLabelsvehiclemaster_report["English"]["ID"] = "ID";
	$fieldToolTipsvehiclemaster_report["English"]["ID"] = "";
	$fieldLabelsvehiclemaster_report["English"]["RegNo"] = "Reg No";
	$fieldToolTipsvehiclemaster_report["English"]["RegNo"] = "";
	$fieldLabelsvehiclemaster_report["English"]["Fleet"] = "Fleet";
	$fieldToolTipsvehiclemaster_report["English"]["Fleet"] = "";
	$fieldLabelsvehiclemaster_report["English"]["Type"] = "Type";
	$fieldToolTipsvehiclemaster_report["English"]["Type"] = "";
	$fieldLabelsvehiclemaster_report["English"]["RegDate"] = "Reg Date";
	$fieldToolTipsvehiclemaster_report["English"]["RegDate"] = "";
	$fieldLabelsvehiclemaster_report["English"]["Cost"] = "Cost";
	$fieldToolTipsvehiclemaster_report["English"]["Cost"] = "";
	$fieldLabelsvehiclemaster_report["English"]["DriverAsigned"] = "Driver";
	$fieldToolTipsvehiclemaster_report["English"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster_report["English"]["Make"] = "Make";
	$fieldToolTipsvehiclemaster_report["English"]["Make"] = "";
	$fieldLabelsvehiclemaster_report["English"]["Model"] = "Model";
	$fieldToolTipsvehiclemaster_report["English"]["Model"] = "";
	$fieldLabelsvehiclemaster_report["English"]["InsuranceDue"] = "Renewal";
	$fieldToolTipsvehiclemaster_report["English"]["InsuranceDue"] = "";
	if (count($fieldToolTipsvehiclemaster_report["English"]))
		$tdatavehiclemaster_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsvehiclemaster_report["Afrikaans"] = array();
	$fieldToolTipsvehiclemaster_report["Afrikaans"] = array();
	$pageTitlesvehiclemaster_report["Afrikaans"] = array();
	$fieldLabelsvehiclemaster_report["Afrikaans"]["ID"] = "ID";
	$fieldToolTipsvehiclemaster_report["Afrikaans"]["ID"] = "";
	$fieldLabelsvehiclemaster_report["Afrikaans"]["RegNo"] = "Reg No";
	$fieldToolTipsvehiclemaster_report["Afrikaans"]["RegNo"] = "";
	$fieldLabelsvehiclemaster_report["Afrikaans"]["Fleet"] = "vloot";
	$fieldToolTipsvehiclemaster_report["Afrikaans"]["Fleet"] = "";
	$fieldLabelsvehiclemaster_report["Afrikaans"]["Type"] = "tipe";
	$fieldToolTipsvehiclemaster_report["Afrikaans"]["Type"] = "";
	$fieldLabelsvehiclemaster_report["Afrikaans"]["RegDate"] = "Reg Datum";
	$fieldToolTipsvehiclemaster_report["Afrikaans"]["RegDate"] = "";
	$fieldLabelsvehiclemaster_report["Afrikaans"]["Cost"] = "koste";
	$fieldToolTipsvehiclemaster_report["Afrikaans"]["Cost"] = "";
	$fieldLabelsvehiclemaster_report["Afrikaans"]["DriverAsigned"] = "bestuurder";
	$fieldToolTipsvehiclemaster_report["Afrikaans"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster_report["Afrikaans"]["Make"] = "maak";
	$fieldToolTipsvehiclemaster_report["Afrikaans"]["Make"] = "";
	$fieldLabelsvehiclemaster_report["Afrikaans"]["Model"] = "model";
	$fieldToolTipsvehiclemaster_report["Afrikaans"]["Model"] = "";
	$fieldLabelsvehiclemaster_report["Afrikaans"]["InsuranceDue"] = "hernuwing";
	$fieldToolTipsvehiclemaster_report["Afrikaans"]["InsuranceDue"] = "";
	if (count($fieldToolTipsvehiclemaster_report["Afrikaans"]))
		$tdatavehiclemaster_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsvehiclemaster_report["Arabic"] = array();
	$fieldToolTipsvehiclemaster_report["Arabic"] = array();
	$pageTitlesvehiclemaster_report["Arabic"] = array();
	$fieldLabelsvehiclemaster_report["Arabic"]["ID"] = "???? ?????";
	$fieldToolTipsvehiclemaster_report["Arabic"]["ID"] = "";
	$fieldLabelsvehiclemaster_report["Arabic"]["RegNo"] = "??? ??";
	$fieldToolTipsvehiclemaster_report["Arabic"]["RegNo"] = "";
	$fieldLabelsvehiclemaster_report["Arabic"]["Fleet"] = "?????";
	$fieldToolTipsvehiclemaster_report["Arabic"]["Fleet"] = "";
	$fieldLabelsvehiclemaster_report["Arabic"]["Type"] = "????";
	$fieldToolTipsvehiclemaster_report["Arabic"]["Type"] = "";
	$fieldLabelsvehiclemaster_report["Arabic"]["RegDate"] = "??? ???????";
	$fieldToolTipsvehiclemaster_report["Arabic"]["RegDate"] = "";
	$fieldLabelsvehiclemaster_report["Arabic"]["Cost"] = "????";
	$fieldToolTipsvehiclemaster_report["Arabic"]["Cost"] = "";
	$fieldLabelsvehiclemaster_report["Arabic"]["DriverAsigned"] = "????";
	$fieldToolTipsvehiclemaster_report["Arabic"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster_report["Arabic"]["Make"] = "???";
	$fieldToolTipsvehiclemaster_report["Arabic"]["Make"] = "";
	$fieldLabelsvehiclemaster_report["Arabic"]["Model"] = "?????";
	$fieldToolTipsvehiclemaster_report["Arabic"]["Model"] = "";
	$fieldLabelsvehiclemaster_report["Arabic"]["InsuranceDue"] = "?????";
	$fieldToolTipsvehiclemaster_report["Arabic"]["InsuranceDue"] = "";
	if (count($fieldToolTipsvehiclemaster_report["Arabic"]))
		$tdatavehiclemaster_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsvehiclemaster_report["Chinese"] = array();
	$fieldToolTipsvehiclemaster_report["Chinese"] = array();
	$pageTitlesvehiclemaster_report["Chinese"] = array();
	$fieldLabelsvehiclemaster_report["Chinese"]["ID"] = "ID";
	$fieldToolTipsvehiclemaster_report["Chinese"]["ID"] = "";
	$fieldLabelsvehiclemaster_report["Chinese"]["RegNo"] = "???";
	$fieldToolTipsvehiclemaster_report["Chinese"]["RegNo"] = "";
	$fieldLabelsvehiclemaster_report["Chinese"]["Fleet"] = "??";
	$fieldToolTipsvehiclemaster_report["Chinese"]["Fleet"] = "";
	$fieldLabelsvehiclemaster_report["Chinese"]["Type"] = "??";
	$fieldToolTipsvehiclemaster_report["Chinese"]["Type"] = "";
	$fieldLabelsvehiclemaster_report["Chinese"]["RegDate"] = "????";
	$fieldToolTipsvehiclemaster_report["Chinese"]["RegDate"] = "";
	$fieldLabelsvehiclemaster_report["Chinese"]["Cost"] = "??";
	$fieldToolTipsvehiclemaster_report["Chinese"]["Cost"] = "";
	$fieldLabelsvehiclemaster_report["Chinese"]["DriverAsigned"] = "????";
	$fieldToolTipsvehiclemaster_report["Chinese"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster_report["Chinese"]["Make"] = "?";
	$fieldToolTipsvehiclemaster_report["Chinese"]["Make"] = "";
	$fieldLabelsvehiclemaster_report["Chinese"]["Model"] = "??";
	$fieldToolTipsvehiclemaster_report["Chinese"]["Model"] = "";
	$fieldLabelsvehiclemaster_report["Chinese"]["InsuranceDue"] = "??";
	$fieldToolTipsvehiclemaster_report["Chinese"]["InsuranceDue"] = "";
	if (count($fieldToolTipsvehiclemaster_report["Chinese"]))
		$tdatavehiclemaster_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsvehiclemaster_report["French"] = array();
	$fieldToolTipsvehiclemaster_report["French"] = array();
	$pageTitlesvehiclemaster_report["French"] = array();
	$fieldLabelsvehiclemaster_report["French"]["ID"] = "ID";
	$fieldToolTipsvehiclemaster_report["French"]["ID"] = "";
	$fieldLabelsvehiclemaster_report["French"]["RegNo"] = "Reg No";
	$fieldToolTipsvehiclemaster_report["French"]["RegNo"] = "";
	$fieldLabelsvehiclemaster_report["French"]["Fleet"] = "Flotte";
	$fieldToolTipsvehiclemaster_report["French"]["Fleet"] = "";
	$fieldLabelsvehiclemaster_report["French"]["Type"] = "Type";
	$fieldToolTipsvehiclemaster_report["French"]["Type"] = "";
	$fieldLabelsvehiclemaster_report["French"]["RegDate"] = "Date d'enregistrement";
	$fieldToolTipsvehiclemaster_report["French"]["RegDate"] = "";
	$fieldLabelsvehiclemaster_report["French"]["Cost"] = "Coût";
	$fieldToolTipsvehiclemaster_report["French"]["Cost"] = "";
	$fieldLabelsvehiclemaster_report["French"]["DriverAsigned"] = "Chauffeur";
	$fieldToolTipsvehiclemaster_report["French"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster_report["French"]["Make"] = "Faire";
	$fieldToolTipsvehiclemaster_report["French"]["Make"] = "";
	$fieldLabelsvehiclemaster_report["French"]["Model"] = "Modèle";
	$fieldToolTipsvehiclemaster_report["French"]["Model"] = "";
	$fieldLabelsvehiclemaster_report["French"]["InsuranceDue"] = "Renouvellement";
	$fieldToolTipsvehiclemaster_report["French"]["InsuranceDue"] = "";
	if (count($fieldToolTipsvehiclemaster_report["French"]))
		$tdatavehiclemaster_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsvehiclemaster_report["German"] = array();
	$fieldToolTipsvehiclemaster_report["German"] = array();
	$pageTitlesvehiclemaster_report["German"] = array();
	$fieldLabelsvehiclemaster_report["German"]["ID"] = "ICH WÜRDE";
	$fieldToolTipsvehiclemaster_report["German"]["ID"] = "";
	$fieldLabelsvehiclemaster_report["German"]["RegNo"] = "Reg. Nr";
	$fieldToolTipsvehiclemaster_report["German"]["RegNo"] = "";
	$fieldLabelsvehiclemaster_report["German"]["Fleet"] = "Flotte";
	$fieldToolTipsvehiclemaster_report["German"]["Fleet"] = "";
	$fieldLabelsvehiclemaster_report["German"]["Type"] = "Art";
	$fieldToolTipsvehiclemaster_report["German"]["Type"] = "";
	$fieldLabelsvehiclemaster_report["German"]["RegDate"] = "Reg Datum";
	$fieldToolTipsvehiclemaster_report["German"]["RegDate"] = "";
	$fieldLabelsvehiclemaster_report["German"]["Cost"] = "Kosten";
	$fieldToolTipsvehiclemaster_report["German"]["Cost"] = "";
	$fieldLabelsvehiclemaster_report["German"]["DriverAsigned"] = "Treiber";
	$fieldToolTipsvehiclemaster_report["German"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster_report["German"]["Make"] = "Machen";
	$fieldToolTipsvehiclemaster_report["German"]["Make"] = "";
	$fieldLabelsvehiclemaster_report["German"]["Model"] = "Modell";
	$fieldToolTipsvehiclemaster_report["German"]["Model"] = "";
	$fieldLabelsvehiclemaster_report["German"]["InsuranceDue"] = "Erneuerung";
	$fieldToolTipsvehiclemaster_report["German"]["InsuranceDue"] = "";
	if (count($fieldToolTipsvehiclemaster_report["German"]))
		$tdatavehiclemaster_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsvehiclemaster_report["Italian"] = array();
	$fieldToolTipsvehiclemaster_report["Italian"] = array();
	$pageTitlesvehiclemaster_report["Italian"] = array();
	$fieldLabelsvehiclemaster_report["Italian"]["ID"] = "ID";
	$fieldToolTipsvehiclemaster_report["Italian"]["ID"] = "";
	$fieldLabelsvehiclemaster_report["Italian"]["RegNo"] = "Reg No";
	$fieldToolTipsvehiclemaster_report["Italian"]["RegNo"] = "";
	$fieldLabelsvehiclemaster_report["Italian"]["Fleet"] = "Flotta";
	$fieldToolTipsvehiclemaster_report["Italian"]["Fleet"] = "";
	$fieldLabelsvehiclemaster_report["Italian"]["Type"] = "Digitare";
	$fieldToolTipsvehiclemaster_report["Italian"]["Type"] = "";
	$fieldLabelsvehiclemaster_report["Italian"]["RegDate"] = "Reg Data";
	$fieldToolTipsvehiclemaster_report["Italian"]["RegDate"] = "";
	$fieldLabelsvehiclemaster_report["Italian"]["Cost"] = "Costo";
	$fieldToolTipsvehiclemaster_report["Italian"]["Cost"] = "";
	$fieldLabelsvehiclemaster_report["Italian"]["DriverAsigned"] = "autista";
	$fieldToolTipsvehiclemaster_report["Italian"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster_report["Italian"]["Make"] = "Rendere";
	$fieldToolTipsvehiclemaster_report["Italian"]["Make"] = "";
	$fieldLabelsvehiclemaster_report["Italian"]["Model"] = "Modello";
	$fieldToolTipsvehiclemaster_report["Italian"]["Model"] = "";
	$fieldLabelsvehiclemaster_report["Italian"]["InsuranceDue"] = "Rinnovo";
	$fieldToolTipsvehiclemaster_report["Italian"]["InsuranceDue"] = "";
	if (count($fieldToolTipsvehiclemaster_report["Italian"]))
		$tdatavehiclemaster_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsvehiclemaster_report["Russian"] = array();
	$fieldToolTipsvehiclemaster_report["Russian"] = array();
	$pageTitlesvehiclemaster_report["Russian"] = array();
	$fieldLabelsvehiclemaster_report["Russian"]["ID"] = "? ??";
	$fieldToolTipsvehiclemaster_report["Russian"]["ID"] = "";
	$fieldLabelsvehiclemaster_report["Russian"]["RegNo"] = "??? ???";
	$fieldToolTipsvehiclemaster_report["Russian"]["RegNo"] = "";
	$fieldLabelsvehiclemaster_report["Russian"]["Fleet"] = "????";
	$fieldToolTipsvehiclemaster_report["Russian"]["Fleet"] = "";
	$fieldLabelsvehiclemaster_report["Russian"]["Type"] = "???";
	$fieldToolTipsvehiclemaster_report["Russian"]["Type"] = "";
	$fieldLabelsvehiclemaster_report["Russian"]["RegDate"] = "??? ????";
	$fieldToolTipsvehiclemaster_report["Russian"]["RegDate"] = "";
	$fieldLabelsvehiclemaster_report["Russian"]["Cost"] = "?????????";
	$fieldToolTipsvehiclemaster_report["Russian"]["Cost"] = "";
	$fieldLabelsvehiclemaster_report["Russian"]["DriverAsigned"] = "????????";
	$fieldToolTipsvehiclemaster_report["Russian"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster_report["Russian"]["Make"] = "??????";
	$fieldToolTipsvehiclemaster_report["Russian"]["Make"] = "";
	$fieldLabelsvehiclemaster_report["Russian"]["Model"] = "??????";
	$fieldToolTipsvehiclemaster_report["Russian"]["Model"] = "";
	$fieldLabelsvehiclemaster_report["Russian"]["InsuranceDue"] = "??????????";
	$fieldToolTipsvehiclemaster_report["Russian"]["InsuranceDue"] = "";
	if (count($fieldToolTipsvehiclemaster_report["Russian"]))
		$tdatavehiclemaster_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvehiclemaster_report["Spanish"] = array();
	$fieldToolTipsvehiclemaster_report["Spanish"] = array();
	$pageTitlesvehiclemaster_report["Spanish"] = array();
	$fieldLabelsvehiclemaster_report["Spanish"]["ID"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipsvehiclemaster_report["Spanish"]["ID"] = "";
	$fieldLabelsvehiclemaster_report["Spanish"]["RegNo"] = "Reg No";
	$fieldToolTipsvehiclemaster_report["Spanish"]["RegNo"] = "";
	$fieldLabelsvehiclemaster_report["Spanish"]["Fleet"] = "Flota";
	$fieldToolTipsvehiclemaster_report["Spanish"]["Fleet"] = "";
	$fieldLabelsvehiclemaster_report["Spanish"]["Type"] = "Tipo";
	$fieldToolTipsvehiclemaster_report["Spanish"]["Type"] = "";
	$fieldLabelsvehiclemaster_report["Spanish"]["RegDate"] = "Fecha de registro";
	$fieldToolTipsvehiclemaster_report["Spanish"]["RegDate"] = "";
	$fieldLabelsvehiclemaster_report["Spanish"]["Cost"] = "Costo";
	$fieldToolTipsvehiclemaster_report["Spanish"]["Cost"] = "";
	$fieldLabelsvehiclemaster_report["Spanish"]["DriverAsigned"] = "Conductor";
	$fieldToolTipsvehiclemaster_report["Spanish"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster_report["Spanish"]["Make"] = "Hacer";
	$fieldToolTipsvehiclemaster_report["Spanish"]["Make"] = "";
	$fieldLabelsvehiclemaster_report["Spanish"]["Model"] = "Modelo";
	$fieldToolTipsvehiclemaster_report["Spanish"]["Model"] = "";
	$fieldLabelsvehiclemaster_report["Spanish"]["InsuranceDue"] = "Renovación";
	$fieldToolTipsvehiclemaster_report["Spanish"]["InsuranceDue"] = "";
	if (count($fieldToolTipsvehiclemaster_report["Spanish"]))
		$tdatavehiclemaster_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvehiclemaster_report[""] = array();
	$fieldToolTipsvehiclemaster_report[""] = array();
	$pageTitlesvehiclemaster_report[""] = array();
	if (count($fieldToolTipsvehiclemaster_report[""]))
		$tdatavehiclemaster_report[".isUseToolTips"] = true;
}


	$tdatavehiclemaster_report[".NCSearch"] = true;



$tdatavehiclemaster_report[".shortTableName"] = "vehiclemaster_report";
$tdatavehiclemaster_report[".nSecOptions"] = 0;
$tdatavehiclemaster_report[".recsPerRowPrint"] = 1;
$tdatavehiclemaster_report[".mainTableOwnerID"] = "";
$tdatavehiclemaster_report[".moveNext"] = 1;
$tdatavehiclemaster_report[".entityType"] = 1;

$tdatavehiclemaster_report[".strOriginalTableName"] = "vehiclemaster";

		 



$tdatavehiclemaster_report[".showAddInPopup"] = false;

$tdatavehiclemaster_report[".showEditInPopup"] = false;

$tdatavehiclemaster_report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavehiclemaster_report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavehiclemaster_report[".fieldsForRegister"] = array();

	$tdatavehiclemaster_report[".listAjax"] = true;

	$tdatavehiclemaster_report[".audit"] = false;

	$tdatavehiclemaster_report[".locking"] = false;



$tdatavehiclemaster_report[".list"] = true;




$tdatavehiclemaster_report[".view"] = true;


$tdatavehiclemaster_report[".exportTo"] = true;

$tdatavehiclemaster_report[".printFriendly"] = true;


$tdatavehiclemaster_report[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavehiclemaster_report[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatavehiclemaster_report[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatavehiclemaster_report[".searchSaving"] = false;
//

$tdatavehiclemaster_report[".showSearchPanel"] = true;
		$tdatavehiclemaster_report[".flexibleSearch"] = true;

$tdatavehiclemaster_report[".isUseAjaxSuggest"] = true;

$tdatavehiclemaster_report[".rowHighlite"] = true;



$tdatavehiclemaster_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavehiclemaster_report[".isUseTimeForSearch"] = false;





$tdatavehiclemaster_report[".allSearchFields"] = array();
$tdatavehiclemaster_report[".filterFields"] = array();
$tdatavehiclemaster_report[".requiredSearchFields"] = array();

$tdatavehiclemaster_report[".allSearchFields"][] = "ID";
	$tdatavehiclemaster_report[".allSearchFields"][] = "Fleet";
	$tdatavehiclemaster_report[".allSearchFields"][] = "Type";
	$tdatavehiclemaster_report[".allSearchFields"][] = "RegDate";
	$tdatavehiclemaster_report[".allSearchFields"][] = "RegNo";
	$tdatavehiclemaster_report[".allSearchFields"][] = "Make";
	$tdatavehiclemaster_report[".allSearchFields"][] = "Model";
	$tdatavehiclemaster_report[".allSearchFields"][] = "Cost";
	$tdatavehiclemaster_report[".allSearchFields"][] = "DriverAsigned";
	$tdatavehiclemaster_report[".allSearchFields"][] = "InsuranceDue";
	

$tdatavehiclemaster_report[".googleLikeFields"] = array();
$tdatavehiclemaster_report[".googleLikeFields"][] = "RegNo";
$tdatavehiclemaster_report[".googleLikeFields"][] = "Fleet";
$tdatavehiclemaster_report[".googleLikeFields"][] = "Type";
$tdatavehiclemaster_report[".googleLikeFields"][] = "RegDate";
$tdatavehiclemaster_report[".googleLikeFields"][] = "Cost";
$tdatavehiclemaster_report[".googleLikeFields"][] = "DriverAsigned";
$tdatavehiclemaster_report[".googleLikeFields"][] = "Make";
$tdatavehiclemaster_report[".googleLikeFields"][] = "Model";
$tdatavehiclemaster_report[".googleLikeFields"][] = "InsuranceDue";

$tdatavehiclemaster_report[".panelSearchFields"] = array();
$tdatavehiclemaster_report[".searchPanelOptions"] = array();
$tdatavehiclemaster_report[".panelSearchFields"][] = "RegDate";
	$tdatavehiclemaster_report[".panelSearchFields"][] = "RegNo";
	
$tdatavehiclemaster_report[".advSearchFields"] = array();
$tdatavehiclemaster_report[".advSearchFields"][] = "ID";
$tdatavehiclemaster_report[".advSearchFields"][] = "Fleet";
$tdatavehiclemaster_report[".advSearchFields"][] = "Type";
$tdatavehiclemaster_report[".advSearchFields"][] = "RegDate";
$tdatavehiclemaster_report[".advSearchFields"][] = "RegNo";
$tdatavehiclemaster_report[".advSearchFields"][] = "Make";
$tdatavehiclemaster_report[".advSearchFields"][] = "Model";
$tdatavehiclemaster_report[".advSearchFields"][] = "Cost";
$tdatavehiclemaster_report[".advSearchFields"][] = "DriverAsigned";
$tdatavehiclemaster_report[".advSearchFields"][] = "InsuranceDue";

$tdatavehiclemaster_report[".tableType"] = "list";

$tdatavehiclemaster_report[".printerPageOrientation"] = 0;
$tdatavehiclemaster_report[".nPrinterPageScale"] = 100;

$tdatavehiclemaster_report[".nPrinterSplitRecords"] = 40;

$tdatavehiclemaster_report[".nPrinterPDFSplitRecords"] = 40;



$tdatavehiclemaster_report[".geocodingEnabled"] = false;





$tdatavehiclemaster_report[".listGridLayout"] = 3;


$tdatavehiclemaster_report[".isResizeColumns"] = true;



// view page pdf
$tdatavehiclemaster_report[".isViewPagePDF"] = true;
$tdatavehiclemaster_report[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatavehiclemaster_report[".isPrinterPagePDF"] = true;
$tdatavehiclemaster_report[".nPrinterPagePDFScale"] = 100;


$tdatavehiclemaster_report[".pageSize"] = 20;

$tdatavehiclemaster_report[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavehiclemaster_report[".strOrderBy"] = $tstrOrderBy;

$tdatavehiclemaster_report[".orderindexes"] = array();

$tdatavehiclemaster_report[".sqlHead"] = "SELECT ID,  	RegNo,  	Fleet,  	`Type`,  	RegDate,  	Cost,  	DriverAsigned,  	Make,  	Model,  	InsuranceDue";
$tdatavehiclemaster_report[".sqlFrom"] = "FROM vehiclemaster";
$tdatavehiclemaster_report[".sqlWhereExpr"] = "";
$tdatavehiclemaster_report[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatavehiclemaster_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavehiclemaster_report[".arrGroupsPerPage"] = $arrGPP;

$tdatavehiclemaster_report[".highlightSearchResults"] = true;

$tableKeysvehiclemaster_report = array();
$tableKeysvehiclemaster_report[] = "ID";
$tdatavehiclemaster_report[".Keys"] = $tableKeysvehiclemaster_report;

$tdatavehiclemaster_report[".listFields"] = array();
$tdatavehiclemaster_report[".listFields"][] = "ID";
$tdatavehiclemaster_report[".listFields"][] = "Fleet";
$tdatavehiclemaster_report[".listFields"][] = "Type";
$tdatavehiclemaster_report[".listFields"][] = "RegDate";
$tdatavehiclemaster_report[".listFields"][] = "RegNo";
$tdatavehiclemaster_report[".listFields"][] = "Make";
$tdatavehiclemaster_report[".listFields"][] = "Model";
$tdatavehiclemaster_report[".listFields"][] = "Cost";
$tdatavehiclemaster_report[".listFields"][] = "DriverAsigned";
$tdatavehiclemaster_report[".listFields"][] = "InsuranceDue";

$tdatavehiclemaster_report[".hideMobileList"] = array();


$tdatavehiclemaster_report[".viewFields"] = array();
$tdatavehiclemaster_report[".viewFields"][] = "ID";
$tdatavehiclemaster_report[".viewFields"][] = "Fleet";
$tdatavehiclemaster_report[".viewFields"][] = "Type";
$tdatavehiclemaster_report[".viewFields"][] = "RegDate";
$tdatavehiclemaster_report[".viewFields"][] = "RegNo";
$tdatavehiclemaster_report[".viewFields"][] = "Make";
$tdatavehiclemaster_report[".viewFields"][] = "Model";
$tdatavehiclemaster_report[".viewFields"][] = "Cost";
$tdatavehiclemaster_report[".viewFields"][] = "DriverAsigned";
$tdatavehiclemaster_report[".viewFields"][] = "InsuranceDue";

$tdatavehiclemaster_report[".addFields"] = array();

$tdatavehiclemaster_report[".masterListFields"] = array();
$tdatavehiclemaster_report[".masterListFields"][] = "ID";
$tdatavehiclemaster_report[".masterListFields"][] = "Fleet";
$tdatavehiclemaster_report[".masterListFields"][] = "Type";
$tdatavehiclemaster_report[".masterListFields"][] = "RegDate";
$tdatavehiclemaster_report[".masterListFields"][] = "RegNo";
$tdatavehiclemaster_report[".masterListFields"][] = "Make";
$tdatavehiclemaster_report[".masterListFields"][] = "Model";
$tdatavehiclemaster_report[".masterListFields"][] = "Cost";
$tdatavehiclemaster_report[".masterListFields"][] = "DriverAsigned";
$tdatavehiclemaster_report[".masterListFields"][] = "InsuranceDue";

$tdatavehiclemaster_report[".inlineAddFields"] = array();

$tdatavehiclemaster_report[".editFields"] = array();

$tdatavehiclemaster_report[".inlineEditFields"] = array();

$tdatavehiclemaster_report[".updateSelectedFields"] = array();


$tdatavehiclemaster_report[".exportFields"] = array();
$tdatavehiclemaster_report[".exportFields"][] = "ID";
$tdatavehiclemaster_report[".exportFields"][] = "Fleet";
$tdatavehiclemaster_report[".exportFields"][] = "Type";
$tdatavehiclemaster_report[".exportFields"][] = "RegDate";
$tdatavehiclemaster_report[".exportFields"][] = "RegNo";
$tdatavehiclemaster_report[".exportFields"][] = "Make";
$tdatavehiclemaster_report[".exportFields"][] = "Model";
$tdatavehiclemaster_report[".exportFields"][] = "Cost";
$tdatavehiclemaster_report[".exportFields"][] = "DriverAsigned";
$tdatavehiclemaster_report[".exportFields"][] = "InsuranceDue";

$tdatavehiclemaster_report[".importFields"] = array();

$tdatavehiclemaster_report[".printFields"] = array();
$tdatavehiclemaster_report[".printFields"][] = "ID";
$tdatavehiclemaster_report[".printFields"][] = "Fleet";
$tdatavehiclemaster_report[".printFields"][] = "Type";
$tdatavehiclemaster_report[".printFields"][] = "RegDate";
$tdatavehiclemaster_report[".printFields"][] = "RegNo";
$tdatavehiclemaster_report[".printFields"][] = "Make";
$tdatavehiclemaster_report[".printFields"][] = "Model";
$tdatavehiclemaster_report[".printFields"][] = "Cost";
$tdatavehiclemaster_report[".printFields"][] = "DriverAsigned";
$tdatavehiclemaster_report[".printFields"][] = "InsuranceDue";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_report","ID");
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
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
// the end of search options settings




	$tdatavehiclemaster_report["ID"] = $fdata;
//	RegNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RegNo";
	$fdata["GoodName"] = "RegNo";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_report","RegNo");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegNo";

	
	
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings




	$tdatavehiclemaster_report["RegNo"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_report","Fleet");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Fleet";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fleet";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "fleettype";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "FleetType";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "FleetType";

	
	$edata["LookupOrderBy"] = "FleetType";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
// the end of search options settings




	$tdatavehiclemaster_report["Fleet"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_report","Type");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "vehicletype";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "VehicleType";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "VehicleType";

	
	$edata["LookupOrderBy"] = "VehicleType";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
// the end of search options settings




	$tdatavehiclemaster_report["Type"] = $fdata;
//	RegDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RegDate";
	$fdata["GoodName"] = "RegDate";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_report","RegDate");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Between";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings




	$tdatavehiclemaster_report["RegDate"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_report","Cost");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Cost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cost";

	
	
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
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
// the end of search options settings




	$tdatavehiclemaster_report["Cost"] = $fdata;
//	DriverAsigned
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DriverAsigned";
	$fdata["GoodName"] = "DriverAsigned";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_report","DriverAsigned");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DriverAsigned";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DriverAsigned";

	
	
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
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
// the end of search options settings




	$tdatavehiclemaster_report["DriverAsigned"] = $fdata;
//	Make
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Make";
	$fdata["GoodName"] = "Make";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_report","Make");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Make";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Make";

	
	
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
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
// the end of search options settings




	$tdatavehiclemaster_report["Make"] = $fdata;
//	Model
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Model";
	$fdata["GoodName"] = "Model";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_report","Model");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Model";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Model";

	
	
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
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
// the end of search options settings




	$tdatavehiclemaster_report["Model"] = $fdata;
//	InsuranceDue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "InsuranceDue";
	$fdata["GoodName"] = "InsuranceDue";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_report","InsuranceDue");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "InsuranceDue";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InsuranceDue";

	
	
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
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
// the end of search options settings




	$tdatavehiclemaster_report["InsuranceDue"] = $fdata;


$tables_data["vehiclemaster-report"]=&$tdatavehiclemaster_report;
$field_labels["vehiclemaster_report"] = &$fieldLabelsvehiclemaster_report;
$fieldToolTips["vehiclemaster_report"] = &$fieldToolTipsvehiclemaster_report;
$page_titles["vehiclemaster_report"] = &$pageTitlesvehiclemaster_report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vehiclemaster-report"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vehiclemaster-report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vehiclemaster_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	RegNo,  	Fleet,  	`Type`,  	RegDate,  	Cost,  	DriverAsigned,  	Make,  	Model,  	InsuranceDue";
$proto0["m_strFrom"] = "FROM vehiclemaster";
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
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-report"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "vehiclemaster-report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-report"
));

$proto8["m_sql"] = "RegNo";
$proto8["m_srcTableName"] = "vehiclemaster-report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-report"
));

$proto10["m_sql"] = "Fleet";
$proto10["m_srcTableName"] = "vehiclemaster-report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-report"
));

$proto12["m_sql"] = "`Type`";
$proto12["m_srcTableName"] = "vehiclemaster-report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "RegDate",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-report"
));

$proto14["m_sql"] = "RegDate";
$proto14["m_srcTableName"] = "vehiclemaster-report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-report"
));

$proto16["m_sql"] = "Cost";
$proto16["m_srcTableName"] = "vehiclemaster-report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DriverAsigned",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-report"
));

$proto18["m_sql"] = "DriverAsigned";
$proto18["m_srcTableName"] = "vehiclemaster-report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Make",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-report"
));

$proto20["m_sql"] = "Make";
$proto20["m_srcTableName"] = "vehiclemaster-report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Model",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-report"
));

$proto22["m_sql"] = "Model";
$proto22["m_srcTableName"] = "vehiclemaster-report";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "InsuranceDue",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-report"
));

$proto24["m_sql"] = "InsuranceDue";
$proto24["m_srcTableName"] = "vehiclemaster-report";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "vehiclemaster";
$proto27["m_srcTableName"] = "vehiclemaster-report";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "ID";
$proto27["m_columns"][] = "RegNo";
$proto27["m_columns"][] = "Fleet";
$proto27["m_columns"][] = "Type";
$proto27["m_columns"][] = "RegDate";
$proto27["m_columns"][] = "Cost";
$proto27["m_columns"][] = "DriverAsigned";
$proto27["m_columns"][] = "Make";
$proto27["m_columns"][] = "Model";
$proto27["m_columns"][] = "InsuranceDue";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "vehiclemaster";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "vehiclemaster-report";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vehiclemaster-report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vehiclemaster_report = createSqlQuery_vehiclemaster_report();


	
					
;

										

$tdatavehiclemaster_report[".sqlquery"] = $queryData_vehiclemaster_report;

$tableEvents["vehiclemaster-report"] = new eventsBase;
$tdatavehiclemaster_report[".hasEvents"] = false;

?>