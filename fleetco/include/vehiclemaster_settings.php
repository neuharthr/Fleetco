<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavehiclemaster = array();
	$tdatavehiclemaster[".truncateText"] = true;
	$tdatavehiclemaster[".NumberOfChars"] = 80;
	$tdatavehiclemaster[".ShortName"] = "vehiclemaster";
	$tdatavehiclemaster[".OwnerID"] = "";
	$tdatavehiclemaster[".OriginalTable"] = "vehiclemaster";

//	field labels
$fieldLabelsvehiclemaster = array();
$fieldToolTipsvehiclemaster = array();
$pageTitlesvehiclemaster = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvehiclemaster["English"] = array();
	$fieldToolTipsvehiclemaster["English"] = array();
	$pageTitlesvehiclemaster["English"] = array();
	$fieldLabelsvehiclemaster["English"]["ID"] = "ID";
	$fieldToolTipsvehiclemaster["English"]["ID"] = "";
	$fieldLabelsvehiclemaster["English"]["RegNo"] = "Reg No";
	$fieldToolTipsvehiclemaster["English"]["RegNo"] = "";
	$fieldLabelsvehiclemaster["English"]["Fleet"] = "Fleet";
	$fieldToolTipsvehiclemaster["English"]["Fleet"] = "";
	$fieldLabelsvehiclemaster["English"]["Type"] = "Type";
	$fieldToolTipsvehiclemaster["English"]["Type"] = "";
	$fieldLabelsvehiclemaster["English"]["RegDate"] = "Reg Date";
	$fieldToolTipsvehiclemaster["English"]["RegDate"] = "";
	$fieldLabelsvehiclemaster["English"]["Cost"] = "Cost";
	$fieldToolTipsvehiclemaster["English"]["Cost"] = "";
	$fieldLabelsvehiclemaster["English"]["DriverAsigned"] = "Driver";
	$fieldToolTipsvehiclemaster["English"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster["English"]["Make"] = "Make";
	$fieldToolTipsvehiclemaster["English"]["Make"] = "";
	$fieldLabelsvehiclemaster["English"]["Model"] = "Model";
	$fieldToolTipsvehiclemaster["English"]["Model"] = "";
	$fieldLabelsvehiclemaster["English"]["InsuranceDue"] = "Renewal";
	$fieldToolTipsvehiclemaster["English"]["InsuranceDue"] = "";
	$fieldLabelsvehiclemaster["English"]["Last_Mileage"] = "Last Mileage";
	$fieldToolTipsvehiclemaster["English"]["Last_Mileage"] = "";
	if (count($fieldToolTipsvehiclemaster["English"]))
		$tdatavehiclemaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsvehiclemaster["Afrikaans"] = array();
	$fieldToolTipsvehiclemaster["Afrikaans"] = array();
	$pageTitlesvehiclemaster["Afrikaans"] = array();
	$fieldLabelsvehiclemaster["Afrikaans"]["ID"] = "ID";
	$fieldToolTipsvehiclemaster["Afrikaans"]["ID"] = "";
	$fieldLabelsvehiclemaster["Afrikaans"]["RegNo"] = "Reg No";
	$fieldToolTipsvehiclemaster["Afrikaans"]["RegNo"] = "";
	$fieldLabelsvehiclemaster["Afrikaans"]["Fleet"] = "vloot";
	$fieldToolTipsvehiclemaster["Afrikaans"]["Fleet"] = "";
	$fieldLabelsvehiclemaster["Afrikaans"]["Type"] = "tipe";
	$fieldToolTipsvehiclemaster["Afrikaans"]["Type"] = "";
	$fieldLabelsvehiclemaster["Afrikaans"]["RegDate"] = "geregistreer Datum";
	$fieldToolTipsvehiclemaster["Afrikaans"]["RegDate"] = "";
	$fieldLabelsvehiclemaster["Afrikaans"]["Cost"] = "koste";
	$fieldToolTipsvehiclemaster["Afrikaans"]["Cost"] = "";
	$fieldLabelsvehiclemaster["Afrikaans"]["DriverAsigned"] = "bestuurder";
	$fieldToolTipsvehiclemaster["Afrikaans"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster["Afrikaans"]["Make"] = "maak";
	$fieldToolTipsvehiclemaster["Afrikaans"]["Make"] = "";
	$fieldLabelsvehiclemaster["Afrikaans"]["Model"] = "model";
	$fieldToolTipsvehiclemaster["Afrikaans"]["Model"] = "";
	$fieldLabelsvehiclemaster["Afrikaans"]["InsuranceDue"] = "hernuwing";
	$fieldToolTipsvehiclemaster["Afrikaans"]["InsuranceDue"] = "";
	$fieldLabelsvehiclemaster["Afrikaans"]["Last_Mileage"] = "laaste kilometers";
	$fieldToolTipsvehiclemaster["Afrikaans"]["Last_Mileage"] = "";
	if (count($fieldToolTipsvehiclemaster["Afrikaans"]))
		$tdatavehiclemaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsvehiclemaster["Arabic"] = array();
	$fieldToolTipsvehiclemaster["Arabic"] = array();
	$pageTitlesvehiclemaster["Arabic"] = array();
	$fieldLabelsvehiclemaster["Arabic"]["ID"] = "???? ?????";
	$fieldToolTipsvehiclemaster["Arabic"]["ID"] = "";
	$fieldLabelsvehiclemaster["Arabic"]["RegNo"] = "??? ??";
	$fieldToolTipsvehiclemaster["Arabic"]["RegNo"] = "";
	$fieldLabelsvehiclemaster["Arabic"]["Fleet"] = "?????";
	$fieldToolTipsvehiclemaster["Arabic"]["Fleet"] = "";
	$fieldLabelsvehiclemaster["Arabic"]["Type"] = "????";
	$fieldToolTipsvehiclemaster["Arabic"]["Type"] = "";
	$fieldLabelsvehiclemaster["Arabic"]["RegDate"] = "????? ???????";
	$fieldToolTipsvehiclemaster["Arabic"]["RegDate"] = "";
	$fieldLabelsvehiclemaster["Arabic"]["Cost"] = "????";
	$fieldToolTipsvehiclemaster["Arabic"]["Cost"] = "";
	$fieldLabelsvehiclemaster["Arabic"]["DriverAsigned"] = "????";
	$fieldToolTipsvehiclemaster["Arabic"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster["Arabic"]["Make"] = "???";
	$fieldToolTipsvehiclemaster["Arabic"]["Make"] = "";
	$fieldLabelsvehiclemaster["Arabic"]["Model"] = "?????";
	$fieldToolTipsvehiclemaster["Arabic"]["Model"] = "";
	$fieldLabelsvehiclemaster["Arabic"]["InsuranceDue"] = "?????";
	$fieldToolTipsvehiclemaster["Arabic"]["InsuranceDue"] = "";
	$fieldLabelsvehiclemaster["Arabic"]["Last_Mileage"] = "??? ??????????? ??????";
	$fieldToolTipsvehiclemaster["Arabic"]["Last_Mileage"] = "";
	if (count($fieldToolTipsvehiclemaster["Arabic"]))
		$tdatavehiclemaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsvehiclemaster["Chinese"] = array();
	$fieldToolTipsvehiclemaster["Chinese"] = array();
	$pageTitlesvehiclemaster["Chinese"] = array();
	$fieldLabelsvehiclemaster["Chinese"]["ID"] = "ID";
	$fieldToolTipsvehiclemaster["Chinese"]["ID"] = "";
	$fieldLabelsvehiclemaster["Chinese"]["RegNo"] = "???";
	$fieldToolTipsvehiclemaster["Chinese"]["RegNo"] = "";
	$fieldLabelsvehiclemaster["Chinese"]["Fleet"] = "??";
	$fieldToolTipsvehiclemaster["Chinese"]["Fleet"] = "";
	$fieldLabelsvehiclemaster["Chinese"]["Type"] = "??";
	$fieldToolTipsvehiclemaster["Chinese"]["Type"] = "";
	$fieldLabelsvehiclemaster["Chinese"]["RegDate"] = "????";
	$fieldToolTipsvehiclemaster["Chinese"]["RegDate"] = "";
	$fieldLabelsvehiclemaster["Chinese"]["Cost"] = "??";
	$fieldToolTipsvehiclemaster["Chinese"]["Cost"] = "";
	$fieldLabelsvehiclemaster["Chinese"]["DriverAsigned"] = "????";
	$fieldToolTipsvehiclemaster["Chinese"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster["Chinese"]["Make"] = "?";
	$fieldToolTipsvehiclemaster["Chinese"]["Make"] = "";
	$fieldLabelsvehiclemaster["Chinese"]["Model"] = "??";
	$fieldToolTipsvehiclemaster["Chinese"]["Model"] = "";
	$fieldLabelsvehiclemaster["Chinese"]["InsuranceDue"] = "??";
	$fieldToolTipsvehiclemaster["Chinese"]["InsuranceDue"] = "";
	$fieldLabelsvehiclemaster["Chinese"]["Last_Mileage"] = "????";
	$fieldToolTipsvehiclemaster["Chinese"]["Last_Mileage"] = "";
	if (count($fieldToolTipsvehiclemaster["Chinese"]))
		$tdatavehiclemaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsvehiclemaster["French"] = array();
	$fieldToolTipsvehiclemaster["French"] = array();
	$pageTitlesvehiclemaster["French"] = array();
	$fieldLabelsvehiclemaster["French"]["ID"] = "ID";
	$fieldToolTipsvehiclemaster["French"]["ID"] = "";
	$fieldLabelsvehiclemaster["French"]["RegNo"] = "Reg No";
	$fieldToolTipsvehiclemaster["French"]["RegNo"] = "";
	$fieldLabelsvehiclemaster["French"]["Fleet"] = "Flotte";
	$fieldToolTipsvehiclemaster["French"]["Fleet"] = "";
	$fieldLabelsvehiclemaster["French"]["Type"] = "Type";
	$fieldToolTipsvehiclemaster["French"]["Type"] = "";
	$fieldLabelsvehiclemaster["French"]["RegDate"] = "Date d'enregistrement";
	$fieldToolTipsvehiclemaster["French"]["RegDate"] = "";
	$fieldLabelsvehiclemaster["French"]["Cost"] = "Coût";
	$fieldToolTipsvehiclemaster["French"]["Cost"] = "";
	$fieldLabelsvehiclemaster["French"]["DriverAsigned"] = "Chauffeur";
	$fieldToolTipsvehiclemaster["French"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster["French"]["Make"] = "Faire";
	$fieldToolTipsvehiclemaster["French"]["Make"] = "";
	$fieldLabelsvehiclemaster["French"]["Model"] = "Modèle";
	$fieldToolTipsvehiclemaster["French"]["Model"] = "";
	$fieldLabelsvehiclemaster["French"]["InsuranceDue"] = "Renouvellement";
	$fieldToolTipsvehiclemaster["French"]["InsuranceDue"] = "";
	$fieldLabelsvehiclemaster["French"]["Last_Mileage"] = "Dernier kilométrage";
	$fieldToolTipsvehiclemaster["French"]["Last_Mileage"] = "";
	if (count($fieldToolTipsvehiclemaster["French"]))
		$tdatavehiclemaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsvehiclemaster["German"] = array();
	$fieldToolTipsvehiclemaster["German"] = array();
	$pageTitlesvehiclemaster["German"] = array();
	$fieldLabelsvehiclemaster["German"]["ID"] = "ICH WÜRDE";
	$fieldToolTipsvehiclemaster["German"]["ID"] = "";
	$fieldLabelsvehiclemaster["German"]["RegNo"] = "Reg. Nr";
	$fieldToolTipsvehiclemaster["German"]["RegNo"] = "";
	$fieldLabelsvehiclemaster["German"]["Fleet"] = "Flotte";
	$fieldToolTipsvehiclemaster["German"]["Fleet"] = "";
	$fieldLabelsvehiclemaster["German"]["Type"] = "Art";
	$fieldToolTipsvehiclemaster["German"]["Type"] = "";
	$fieldLabelsvehiclemaster["German"]["RegDate"] = "Eingetragener Termin";
	$fieldToolTipsvehiclemaster["German"]["RegDate"] = "";
	$fieldLabelsvehiclemaster["German"]["Cost"] = "Kosten";
	$fieldToolTipsvehiclemaster["German"]["Cost"] = "";
	$fieldLabelsvehiclemaster["German"]["DriverAsigned"] = "Treiber";
	$fieldToolTipsvehiclemaster["German"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster["German"]["Make"] = "Machen";
	$fieldToolTipsvehiclemaster["German"]["Make"] = "";
	$fieldLabelsvehiclemaster["German"]["Model"] = "Modell";
	$fieldToolTipsvehiclemaster["German"]["Model"] = "";
	$fieldLabelsvehiclemaster["German"]["InsuranceDue"] = "Erneuerung";
	$fieldToolTipsvehiclemaster["German"]["InsuranceDue"] = "";
	$fieldLabelsvehiclemaster["German"]["Last_Mileage"] = "Letzte Meilenzahl";
	$fieldToolTipsvehiclemaster["German"]["Last_Mileage"] = "";
	if (count($fieldToolTipsvehiclemaster["German"]))
		$tdatavehiclemaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsvehiclemaster["Italian"] = array();
	$fieldToolTipsvehiclemaster["Italian"] = array();
	$pageTitlesvehiclemaster["Italian"] = array();
	$fieldLabelsvehiclemaster["Italian"]["ID"] = "ID";
	$fieldToolTipsvehiclemaster["Italian"]["ID"] = "";
	$fieldLabelsvehiclemaster["Italian"]["RegNo"] = "Reg No";
	$fieldToolTipsvehiclemaster["Italian"]["RegNo"] = "";
	$fieldLabelsvehiclemaster["Italian"]["Fleet"] = "Flotta";
	$fieldToolTipsvehiclemaster["Italian"]["Fleet"] = "";
	$fieldLabelsvehiclemaster["Italian"]["Type"] = "Digitare";
	$fieldToolTipsvehiclemaster["Italian"]["Type"] = "";
	$fieldLabelsvehiclemaster["Italian"]["RegDate"] = "Data di registrazione";
	$fieldToolTipsvehiclemaster["Italian"]["RegDate"] = "";
	$fieldLabelsvehiclemaster["Italian"]["Cost"] = "Costo";
	$fieldToolTipsvehiclemaster["Italian"]["Cost"] = "";
	$fieldLabelsvehiclemaster["Italian"]["DriverAsigned"] = "autista";
	$fieldToolTipsvehiclemaster["Italian"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster["Italian"]["Make"] = "Rendere";
	$fieldToolTipsvehiclemaster["Italian"]["Make"] = "";
	$fieldLabelsvehiclemaster["Italian"]["Model"] = "Modello";
	$fieldToolTipsvehiclemaster["Italian"]["Model"] = "";
	$fieldLabelsvehiclemaster["Italian"]["InsuranceDue"] = "Rinnovo";
	$fieldToolTipsvehiclemaster["Italian"]["InsuranceDue"] = "";
	$fieldLabelsvehiclemaster["Italian"]["Last_Mileage"] = "Ultima Chilometraggio";
	$fieldToolTipsvehiclemaster["Italian"]["Last_Mileage"] = "";
	if (count($fieldToolTipsvehiclemaster["Italian"]))
		$tdatavehiclemaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsvehiclemaster["Russian"] = array();
	$fieldToolTipsvehiclemaster["Russian"] = array();
	$pageTitlesvehiclemaster["Russian"] = array();
	$fieldLabelsvehiclemaster["Russian"]["ID"] = "? ??";
	$fieldToolTipsvehiclemaster["Russian"]["ID"] = "";
	$fieldLabelsvehiclemaster["Russian"]["RegNo"] = "??? ???";
	$fieldToolTipsvehiclemaster["Russian"]["RegNo"] = "";
	$fieldLabelsvehiclemaster["Russian"]["Fleet"] = "????";
	$fieldToolTipsvehiclemaster["Russian"]["Fleet"] = "";
	$fieldLabelsvehiclemaster["Russian"]["Type"] = "???";
	$fieldToolTipsvehiclemaster["Russian"]["Type"] = "";
	$fieldLabelsvehiclemaster["Russian"]["RegDate"] = "???? ??????????? ????";
	$fieldToolTipsvehiclemaster["Russian"]["RegDate"] = "";
	$fieldLabelsvehiclemaster["Russian"]["Cost"] = "?????????";
	$fieldToolTipsvehiclemaster["Russian"]["Cost"] = "";
	$fieldLabelsvehiclemaster["Russian"]["DriverAsigned"] = "????????";
	$fieldToolTipsvehiclemaster["Russian"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster["Russian"]["Make"] = "??????";
	$fieldToolTipsvehiclemaster["Russian"]["Make"] = "";
	$fieldLabelsvehiclemaster["Russian"]["Model"] = "??????";
	$fieldToolTipsvehiclemaster["Russian"]["Model"] = "";
	$fieldLabelsvehiclemaster["Russian"]["InsuranceDue"] = "??????????";
	$fieldToolTipsvehiclemaster["Russian"]["InsuranceDue"] = "";
	$fieldLabelsvehiclemaster["Russian"]["Last_Mileage"] = "????????? ??????";
	$fieldToolTipsvehiclemaster["Russian"]["Last_Mileage"] = "";
	if (count($fieldToolTipsvehiclemaster["Russian"]))
		$tdatavehiclemaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvehiclemaster["Spanish"] = array();
	$fieldToolTipsvehiclemaster["Spanish"] = array();
	$pageTitlesvehiclemaster["Spanish"] = array();
	$fieldLabelsvehiclemaster["Spanish"]["ID"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipsvehiclemaster["Spanish"]["ID"] = "";
	$fieldLabelsvehiclemaster["Spanish"]["RegNo"] = "Reg No";
	$fieldToolTipsvehiclemaster["Spanish"]["RegNo"] = "";
	$fieldLabelsvehiclemaster["Spanish"]["Fleet"] = "Flota";
	$fieldToolTipsvehiclemaster["Spanish"]["Fleet"] = "";
	$fieldLabelsvehiclemaster["Spanish"]["Type"] = "Tipo";
	$fieldToolTipsvehiclemaster["Spanish"]["Type"] = "";
	$fieldLabelsvehiclemaster["Spanish"]["RegDate"] = "Fecha registrada";
	$fieldToolTipsvehiclemaster["Spanish"]["RegDate"] = "";
	$fieldLabelsvehiclemaster["Spanish"]["Cost"] = "Costo";
	$fieldToolTipsvehiclemaster["Spanish"]["Cost"] = "";
	$fieldLabelsvehiclemaster["Spanish"]["DriverAsigned"] = "Conductor";
	$fieldToolTipsvehiclemaster["Spanish"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster["Spanish"]["Make"] = "Hacer";
	$fieldToolTipsvehiclemaster["Spanish"]["Make"] = "";
	$fieldLabelsvehiclemaster["Spanish"]["Model"] = "Modelo";
	$fieldToolTipsvehiclemaster["Spanish"]["Model"] = "";
	$fieldLabelsvehiclemaster["Spanish"]["InsuranceDue"] = "Renovación";
	$fieldToolTipsvehiclemaster["Spanish"]["InsuranceDue"] = "";
	$fieldLabelsvehiclemaster["Spanish"]["Last_Mileage"] = "Kilometraje pasado";
	$fieldToolTipsvehiclemaster["Spanish"]["Last_Mileage"] = "";
	if (count($fieldToolTipsvehiclemaster["Spanish"]))
		$tdatavehiclemaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvehiclemaster[""] = array();
	$fieldToolTipsvehiclemaster[""] = array();
	$pageTitlesvehiclemaster[""] = array();
	if (count($fieldToolTipsvehiclemaster[""]))
		$tdatavehiclemaster[".isUseToolTips"] = true;
}


	$tdatavehiclemaster[".NCSearch"] = true;



$tdatavehiclemaster[".shortTableName"] = "vehiclemaster";
$tdatavehiclemaster[".nSecOptions"] = 0;
$tdatavehiclemaster[".recsPerRowPrint"] = 1;
$tdatavehiclemaster[".mainTableOwnerID"] = "";
$tdatavehiclemaster[".moveNext"] = 1;
$tdatavehiclemaster[".entityType"] = 0;

$tdatavehiclemaster[".strOriginalTableName"] = "vehiclemaster";

		 



$tdatavehiclemaster[".showAddInPopup"] = false;

$tdatavehiclemaster[".showEditInPopup"] = false;

$tdatavehiclemaster[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavehiclemaster[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavehiclemaster[".fieldsForRegister"] = array();

	$tdatavehiclemaster[".listAjax"] = true;

	$tdatavehiclemaster[".audit"] = false;

	$tdatavehiclemaster[".locking"] = false;

$tdatavehiclemaster[".edit"] = true;
$tdatavehiclemaster[".afterEditAction"] = 1;
$tdatavehiclemaster[".closePopupAfterEdit"] = 1;
$tdatavehiclemaster[".afterEditActionDetTable"] = "";

$tdatavehiclemaster[".add"] = true;
$tdatavehiclemaster[".afterAddAction"] = 1;
$tdatavehiclemaster[".closePopupAfterAdd"] = 1;
$tdatavehiclemaster[".afterAddActionDetTable"] = "";

$tdatavehiclemaster[".list"] = true;




$tdatavehiclemaster[".view"] = true;

$tdatavehiclemaster[".import"] = true;

$tdatavehiclemaster[".exportTo"] = true;

$tdatavehiclemaster[".printFriendly"] = true;

$tdatavehiclemaster[".delete"] = true;

$tdatavehiclemaster[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavehiclemaster[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatavehiclemaster[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatavehiclemaster[".searchSaving"] = false;
//

$tdatavehiclemaster[".showSearchPanel"] = true;
		$tdatavehiclemaster[".flexibleSearch"] = true;

$tdatavehiclemaster[".isUseAjaxSuggest"] = true;

$tdatavehiclemaster[".rowHighlite"] = true;



$tdatavehiclemaster[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavehiclemaster[".isUseTimeForSearch"] = false;



$tdatavehiclemaster[".badgeColor"] = "3CB371";


$tdatavehiclemaster[".allSearchFields"] = array();
$tdatavehiclemaster[".filterFields"] = array();
$tdatavehiclemaster[".requiredSearchFields"] = array();

$tdatavehiclemaster[".allSearchFields"][] = "Fleet";
	$tdatavehiclemaster[".allSearchFields"][] = "ID";
	$tdatavehiclemaster[".allSearchFields"][] = "Type";
	$tdatavehiclemaster[".allSearchFields"][] = "RegDate";
	$tdatavehiclemaster[".allSearchFields"][] = "RegNo";
	$tdatavehiclemaster[".allSearchFields"][] = "Make";
	$tdatavehiclemaster[".allSearchFields"][] = "Model";
	$tdatavehiclemaster[".allSearchFields"][] = "Cost";
	$tdatavehiclemaster[".allSearchFields"][] = "DriverAsigned";
	$tdatavehiclemaster[".allSearchFields"][] = "InsuranceDue";
	$tdatavehiclemaster[".allSearchFields"][] = "Last Mileage";
	

$tdatavehiclemaster[".googleLikeFields"] = array();
$tdatavehiclemaster[".googleLikeFields"][] = "ID";
$tdatavehiclemaster[".googleLikeFields"][] = "RegNo";
$tdatavehiclemaster[".googleLikeFields"][] = "Fleet";
$tdatavehiclemaster[".googleLikeFields"][] = "Type";
$tdatavehiclemaster[".googleLikeFields"][] = "RegDate";
$tdatavehiclemaster[".googleLikeFields"][] = "Cost";
$tdatavehiclemaster[".googleLikeFields"][] = "DriverAsigned";
$tdatavehiclemaster[".googleLikeFields"][] = "Make";
$tdatavehiclemaster[".googleLikeFields"][] = "Model";
$tdatavehiclemaster[".googleLikeFields"][] = "InsuranceDue";
$tdatavehiclemaster[".googleLikeFields"][] = "Last Mileage";


$tdatavehiclemaster[".advSearchFields"] = array();
$tdatavehiclemaster[".advSearchFields"][] = "Fleet";
$tdatavehiclemaster[".advSearchFields"][] = "ID";
$tdatavehiclemaster[".advSearchFields"][] = "Type";
$tdatavehiclemaster[".advSearchFields"][] = "RegDate";
$tdatavehiclemaster[".advSearchFields"][] = "RegNo";
$tdatavehiclemaster[".advSearchFields"][] = "Make";
$tdatavehiclemaster[".advSearchFields"][] = "Model";
$tdatavehiclemaster[".advSearchFields"][] = "Cost";
$tdatavehiclemaster[".advSearchFields"][] = "DriverAsigned";
$tdatavehiclemaster[".advSearchFields"][] = "InsuranceDue";
$tdatavehiclemaster[".advSearchFields"][] = "Last Mileage";

$tdatavehiclemaster[".tableType"] = "list";

$tdatavehiclemaster[".printerPageOrientation"] = 0;
$tdatavehiclemaster[".nPrinterPageScale"] = 100;

$tdatavehiclemaster[".nPrinterSplitRecords"] = 40;

$tdatavehiclemaster[".nPrinterPDFSplitRecords"] = 40;



$tdatavehiclemaster[".geocodingEnabled"] = false;





$tdatavehiclemaster[".listGridLayout"] = 3;


$tdatavehiclemaster[".isResizeColumns"] = true;



// view page pdf
$tdatavehiclemaster[".isViewPagePDF"] = true;
$tdatavehiclemaster[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatavehiclemaster[".isPrinterPagePDF"] = true;
$tdatavehiclemaster[".nPrinterPagePDFScale"] = 100;


$tdatavehiclemaster[".pageSize"] = 20;

$tdatavehiclemaster[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavehiclemaster[".strOrderBy"] = $tstrOrderBy;

$tdatavehiclemaster[".orderindexes"] = array();

$tdatavehiclemaster[".sqlHead"] = "SELECT vehiclemaster.ID,  vehiclemaster.RegNo,  vehiclemaster.Fleet,  vehiclemaster.`Type`,  vehiclemaster.RegDate,  vehiclemaster.Cost,  vehiclemaster.DriverAsigned,  vehiclemaster.Make,  vehiclemaster.Model,  vehiclemaster.InsuranceDue,  MAX(fuelmaster.MeterReading) AS `Last Mileage`";
$tdatavehiclemaster[".sqlFrom"] = "FROM vehiclemaster  LEFT OUTER JOIN fuelmaster ON vehiclemaster.RegNo = fuelmaster.Vehicle";
$tdatavehiclemaster[".sqlWhereExpr"] = "";
$tdatavehiclemaster[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatavehiclemaster[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavehiclemaster[".arrGroupsPerPage"] = $arrGPP;

$tdatavehiclemaster[".highlightSearchResults"] = true;

$tableKeysvehiclemaster = array();
$tableKeysvehiclemaster[] = "ID";
$tdatavehiclemaster[".Keys"] = $tableKeysvehiclemaster;

$tdatavehiclemaster[".listFields"] = array();
$tdatavehiclemaster[".listFields"][] = "ID";
$tdatavehiclemaster[".listFields"][] = "Fleet";
$tdatavehiclemaster[".listFields"][] = "Type";
$tdatavehiclemaster[".listFields"][] = "RegDate";
$tdatavehiclemaster[".listFields"][] = "RegNo";
$tdatavehiclemaster[".listFields"][] = "Make";
$tdatavehiclemaster[".listFields"][] = "Model";
$tdatavehiclemaster[".listFields"][] = "Cost";
$tdatavehiclemaster[".listFields"][] = "DriverAsigned";
$tdatavehiclemaster[".listFields"][] = "InsuranceDue";
$tdatavehiclemaster[".listFields"][] = "Last Mileage";

$tdatavehiclemaster[".hideMobileList"] = array();


$tdatavehiclemaster[".viewFields"] = array();
$tdatavehiclemaster[".viewFields"][] = "Fleet";
$tdatavehiclemaster[".viewFields"][] = "ID";
$tdatavehiclemaster[".viewFields"][] = "Type";
$tdatavehiclemaster[".viewFields"][] = "RegDate";
$tdatavehiclemaster[".viewFields"][] = "RegNo";
$tdatavehiclemaster[".viewFields"][] = "Make";
$tdatavehiclemaster[".viewFields"][] = "Model";
$tdatavehiclemaster[".viewFields"][] = "Cost";
$tdatavehiclemaster[".viewFields"][] = "DriverAsigned";
$tdatavehiclemaster[".viewFields"][] = "InsuranceDue";
$tdatavehiclemaster[".viewFields"][] = "Last Mileage";

$tdatavehiclemaster[".addFields"] = array();
$tdatavehiclemaster[".addFields"][] = "Fleet";
$tdatavehiclemaster[".addFields"][] = "Type";
$tdatavehiclemaster[".addFields"][] = "RegDate";
$tdatavehiclemaster[".addFields"][] = "RegNo";
$tdatavehiclemaster[".addFields"][] = "Make";
$tdatavehiclemaster[".addFields"][] = "Model";
$tdatavehiclemaster[".addFields"][] = "Cost";
$tdatavehiclemaster[".addFields"][] = "DriverAsigned";
$tdatavehiclemaster[".addFields"][] = "InsuranceDue";

$tdatavehiclemaster[".masterListFields"] = array();
$tdatavehiclemaster[".masterListFields"][] = "Fleet";
$tdatavehiclemaster[".masterListFields"][] = "ID";
$tdatavehiclemaster[".masterListFields"][] = "Type";
$tdatavehiclemaster[".masterListFields"][] = "RegDate";
$tdatavehiclemaster[".masterListFields"][] = "RegNo";
$tdatavehiclemaster[".masterListFields"][] = "Make";
$tdatavehiclemaster[".masterListFields"][] = "Model";
$tdatavehiclemaster[".masterListFields"][] = "Cost";
$tdatavehiclemaster[".masterListFields"][] = "DriverAsigned";
$tdatavehiclemaster[".masterListFields"][] = "InsuranceDue";
$tdatavehiclemaster[".masterListFields"][] = "Last Mileage";

$tdatavehiclemaster[".inlineAddFields"] = array();

$tdatavehiclemaster[".editFields"] = array();
$tdatavehiclemaster[".editFields"][] = "Fleet";
$tdatavehiclemaster[".editFields"][] = "Type";
$tdatavehiclemaster[".editFields"][] = "RegDate";
$tdatavehiclemaster[".editFields"][] = "RegNo";
$tdatavehiclemaster[".editFields"][] = "Make";
$tdatavehiclemaster[".editFields"][] = "Model";
$tdatavehiclemaster[".editFields"][] = "Cost";
$tdatavehiclemaster[".editFields"][] = "DriverAsigned";
$tdatavehiclemaster[".editFields"][] = "InsuranceDue";

$tdatavehiclemaster[".inlineEditFields"] = array();

$tdatavehiclemaster[".updateSelectedFields"] = array();
$tdatavehiclemaster[".updateSelectedFields"][] = "Fleet";
$tdatavehiclemaster[".updateSelectedFields"][] = "Type";
$tdatavehiclemaster[".updateSelectedFields"][] = "RegDate";
$tdatavehiclemaster[".updateSelectedFields"][] = "RegNo";
$tdatavehiclemaster[".updateSelectedFields"][] = "Make";
$tdatavehiclemaster[".updateSelectedFields"][] = "Model";
$tdatavehiclemaster[".updateSelectedFields"][] = "Cost";
$tdatavehiclemaster[".updateSelectedFields"][] = "DriverAsigned";
$tdatavehiclemaster[".updateSelectedFields"][] = "InsuranceDue";


$tdatavehiclemaster[".exportFields"] = array();
$tdatavehiclemaster[".exportFields"][] = "Fleet";
$tdatavehiclemaster[".exportFields"][] = "ID";
$tdatavehiclemaster[".exportFields"][] = "Type";
$tdatavehiclemaster[".exportFields"][] = "RegDate";
$tdatavehiclemaster[".exportFields"][] = "RegNo";
$tdatavehiclemaster[".exportFields"][] = "Make";
$tdatavehiclemaster[".exportFields"][] = "Model";
$tdatavehiclemaster[".exportFields"][] = "Cost";
$tdatavehiclemaster[".exportFields"][] = "DriverAsigned";
$tdatavehiclemaster[".exportFields"][] = "InsuranceDue";
$tdatavehiclemaster[".exportFields"][] = "Last Mileage";

$tdatavehiclemaster[".importFields"] = array();
$tdatavehiclemaster[".importFields"][] = "ID";
$tdatavehiclemaster[".importFields"][] = "RegNo";
$tdatavehiclemaster[".importFields"][] = "Fleet";
$tdatavehiclemaster[".importFields"][] = "Type";
$tdatavehiclemaster[".importFields"][] = "RegDate";
$tdatavehiclemaster[".importFields"][] = "Cost";
$tdatavehiclemaster[".importFields"][] = "DriverAsigned";
$tdatavehiclemaster[".importFields"][] = "Make";
$tdatavehiclemaster[".importFields"][] = "Model";
$tdatavehiclemaster[".importFields"][] = "InsuranceDue";
$tdatavehiclemaster[".importFields"][] = "Last Mileage";

$tdatavehiclemaster[".printFields"] = array();
$tdatavehiclemaster[".printFields"][] = "Fleet";
$tdatavehiclemaster[".printFields"][] = "ID";
$tdatavehiclemaster[".printFields"][] = "Type";
$tdatavehiclemaster[".printFields"][] = "RegDate";
$tdatavehiclemaster[".printFields"][] = "RegNo";
$tdatavehiclemaster[".printFields"][] = "Make";
$tdatavehiclemaster[".printFields"][] = "Model";
$tdatavehiclemaster[".printFields"][] = "Cost";
$tdatavehiclemaster[".printFields"][] = "DriverAsigned";
$tdatavehiclemaster[".printFields"][] = "InsuranceDue";
$tdatavehiclemaster[".printFields"][] = "Last Mileage";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vehiclemaster.ID";

	
	
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




	$tdatavehiclemaster["ID"] = $fdata;
//	RegNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RegNo";
	$fdata["GoodName"] = "RegNo";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster","RegNo");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vehiclemaster.RegNo";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatavehiclemaster["RegNo"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster","Fleet");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Fleet";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vehiclemaster.Fleet";

	
	
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
		$edata["autoCompleteFieldsOnEdit"] = 1;
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatavehiclemaster["Fleet"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster","Type");
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
	$fdata["FullName"] = "vehiclemaster.`Type`";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatavehiclemaster["Type"] = $fdata;
//	RegDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RegDate";
	$fdata["GoodName"] = "RegDate";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster","RegDate");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RegDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vehiclemaster.RegDate";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatavehiclemaster["RegDate"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster","Cost");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Cost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vehiclemaster.Cost";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
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




	$tdatavehiclemaster["Cost"] = $fdata;
//	DriverAsigned
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DriverAsigned";
	$fdata["GoodName"] = "DriverAsigned";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster","DriverAsigned");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DriverAsigned";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vehiclemaster.DriverAsigned";

	
	
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




	$tdatavehiclemaster["DriverAsigned"] = $fdata;
//	Make
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Make";
	$fdata["GoodName"] = "Make";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster","Make");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Make";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vehiclemaster.Make";

	
	
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




	$tdatavehiclemaster["Make"] = $fdata;
//	Model
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Model";
	$fdata["GoodName"] = "Model";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster","Model");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Model";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vehiclemaster.Model";

	
	
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




	$tdatavehiclemaster["Model"] = $fdata;
//	InsuranceDue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "InsuranceDue";
	$fdata["GoodName"] = "InsuranceDue";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster","InsuranceDue");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "InsuranceDue";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vehiclemaster.InsuranceDue";

	
	
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




	$tdatavehiclemaster["InsuranceDue"] = $fdata;
//	Last Mileage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Last Mileage";
	$fdata["GoodName"] = "Last_Mileage";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vehiclemaster","Last_Mileage");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Last Mileage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX(fuelmaster.MeterReading)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatavehiclemaster["Last Mileage"] = $fdata;


$tables_data["vehiclemaster"]=&$tdatavehiclemaster;
$field_labels["vehiclemaster"] = &$fieldLabelsvehiclemaster;
$fieldToolTips["vehiclemaster"] = &$fieldToolTipsvehiclemaster;
$page_titles["vehiclemaster"] = &$pageTitlesvehiclemaster;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vehiclemaster"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vehiclemaster"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vehiclemaster()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "vehiclemaster.ID,  vehiclemaster.RegNo,  vehiclemaster.Fleet,  vehiclemaster.`Type`,  vehiclemaster.RegDate,  vehiclemaster.Cost,  vehiclemaster.DriverAsigned,  vehiclemaster.Make,  vehiclemaster.Model,  vehiclemaster.InsuranceDue,  MAX(fuelmaster.MeterReading) AS `Last Mileage`";
$proto0["m_strFrom"] = "FROM vehiclemaster  LEFT OUTER JOIN fuelmaster ON vehiclemaster.RegNo = fuelmaster.Vehicle";
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
	"m_srcTableName" => "vehiclemaster"
));

$proto6["m_sql"] = "vehiclemaster.ID";
$proto6["m_srcTableName"] = "vehiclemaster";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster"
));

$proto8["m_sql"] = "vehiclemaster.RegNo";
$proto8["m_srcTableName"] = "vehiclemaster";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster"
));

$proto10["m_sql"] = "vehiclemaster.Fleet";
$proto10["m_srcTableName"] = "vehiclemaster";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster"
));

$proto12["m_sql"] = "vehiclemaster.`Type`";
$proto12["m_srcTableName"] = "vehiclemaster";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "RegDate",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster"
));

$proto14["m_sql"] = "vehiclemaster.RegDate";
$proto14["m_srcTableName"] = "vehiclemaster";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster"
));

$proto16["m_sql"] = "vehiclemaster.Cost";
$proto16["m_srcTableName"] = "vehiclemaster";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DriverAsigned",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster"
));

$proto18["m_sql"] = "vehiclemaster.DriverAsigned";
$proto18["m_srcTableName"] = "vehiclemaster";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Make",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster"
));

$proto20["m_sql"] = "vehiclemaster.Make";
$proto20["m_srcTableName"] = "vehiclemaster";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Model",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster"
));

$proto22["m_sql"] = "vehiclemaster.Model";
$proto22["m_srcTableName"] = "vehiclemaster";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "InsuranceDue",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster"
));

$proto24["m_sql"] = "vehiclemaster.InsuranceDue";
$proto24["m_srcTableName"] = "vehiclemaster";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_functiontype"] = "SQLF_MAX";
$proto27["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "MeterReading",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "vehiclemaster"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "MAX(fuelmaster.MeterReading)";
$proto26["m_srcTableName"] = "vehiclemaster";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "Last Mileage";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "vehiclemaster";
$proto30["m_srcTableName"] = "vehiclemaster";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "ID";
$proto30["m_columns"][] = "RegNo";
$proto30["m_columns"][] = "Fleet";
$proto30["m_columns"][] = "Type";
$proto30["m_columns"][] = "RegDate";
$proto30["m_columns"][] = "Cost";
$proto30["m_columns"][] = "DriverAsigned";
$proto30["m_columns"][] = "Make";
$proto30["m_columns"][] = "Model";
$proto30["m_columns"][] = "InsuranceDue";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "vehiclemaster";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "vehiclemaster";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
												$proto33=array();
$proto33["m_link"] = "SQLL_LEFTJOIN";
			$proto34=array();
$proto34["m_strName"] = "fuelmaster";
$proto34["m_srcTableName"] = "vehiclemaster";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "Id";
$proto34["m_columns"][] = "SystemDate";
$proto34["m_columns"][] = "FuelDate";
$proto34["m_columns"][] = "Vehicle";
$proto34["m_columns"][] = "MeterReading";
$proto34["m_columns"][] = "LitersPumped";
$proto34["m_columns"][] = "PricePerLiter";
$proto34["m_columns"][] = "FuelStation";
$proto34["m_columns"][] = "Fleet";
$proto34["m_columns"][] = "LastMileage";
$proto34["m_columns"][] = "Economy";
$proto34["m_columns"][] = "FillType";
$proto34["m_columns"][] = "CouponNo";
$proto34["m_columns"][] = "Driver";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "LEFT OUTER JOIN fuelmaster ON vehiclemaster.RegNo = fuelmaster.Vehicle";
$proto33["m_alias"] = "";
$proto33["m_srcTableName"] = "vehiclemaster";
$proto35=array();
$proto35["m_sql"] = "vehiclemaster.RegNo = fuelmaster.Vehicle";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster"
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "= fuelmaster.Vehicle";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster"
));

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster"
));

$proto41["m_column"]=$obj;
$obj = new SQLGroupByItem($proto41);

$proto0["m_groupby"][]=$obj;
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster"
));

$proto43["m_column"]=$obj;
$obj = new SQLGroupByItem($proto43);

$proto0["m_groupby"][]=$obj;
												$proto45=array();
						$obj = new SQLField(array(
	"m_strName" => "RegDate",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster"
));

$proto45["m_column"]=$obj;
$obj = new SQLGroupByItem($proto45);

$proto0["m_groupby"][]=$obj;
												$proto47=array();
						$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster"
));

$proto47["m_column"]=$obj;
$obj = new SQLGroupByItem($proto47);

$proto0["m_groupby"][]=$obj;
												$proto49=array();
						$obj = new SQLField(array(
	"m_strName" => "DriverAsigned",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster"
));

$proto49["m_column"]=$obj;
$obj = new SQLGroupByItem($proto49);

$proto0["m_groupby"][]=$obj;
												$proto51=array();
						$obj = new SQLField(array(
	"m_strName" => "Make",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster"
));

$proto51["m_column"]=$obj;
$obj = new SQLGroupByItem($proto51);

$proto0["m_groupby"][]=$obj;
												$proto53=array();
						$obj = new SQLField(array(
	"m_strName" => "Model",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster"
));

$proto53["m_column"]=$obj;
$obj = new SQLGroupByItem($proto53);

$proto0["m_groupby"][]=$obj;
												$proto55=array();
						$obj = new SQLField(array(
	"m_strName" => "InsuranceDue",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster"
));

$proto55["m_column"]=$obj;
$obj = new SQLGroupByItem($proto55);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vehiclemaster";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vehiclemaster = createSqlQuery_vehiclemaster();


	
					
;

											

$tdatavehiclemaster[".sqlquery"] = $queryData_vehiclemaster;

$tableEvents["vehiclemaster"] = new eventsBase;
$tdatavehiclemaster[".hasEvents"] = false;

?>