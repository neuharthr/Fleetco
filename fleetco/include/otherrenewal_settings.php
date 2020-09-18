<?php
require_once(getabspath("classes/cipherer.php"));




$tdataotherrenewal = array();
	$tdataotherrenewal[".truncateText"] = true;
	$tdataotherrenewal[".NumberOfChars"] = 80;
	$tdataotherrenewal[".ShortName"] = "otherrenewal";
	$tdataotherrenewal[".OwnerID"] = "";
	$tdataotherrenewal[".OriginalTable"] = "otherrenewal";

//	field labels
$fieldLabelsotherrenewal = array();
$fieldToolTipsotherrenewal = array();
$pageTitlesotherrenewal = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsotherrenewal["English"] = array();
	$fieldToolTipsotherrenewal["English"] = array();
	$pageTitlesotherrenewal["English"] = array();
	$fieldLabelsotherrenewal["English"]["ID"] = "ID";
	$fieldToolTipsotherrenewal["English"]["ID"] = "";
	$fieldLabelsotherrenewal["English"]["Fleet"] = "Fleet";
	$fieldToolTipsotherrenewal["English"]["Fleet"] = "";
	$fieldLabelsotherrenewal["English"]["VehicleNo"] = "Veh. No";
	$fieldToolTipsotherrenewal["English"]["VehicleNo"] = "";
	$fieldLabelsotherrenewal["English"]["VehicleType"] = "Veh. Type";
	$fieldToolTipsotherrenewal["English"]["VehicleType"] = "";
	$fieldLabelsotherrenewal["English"]["PaymentType"] = "Ren. Type";
	$fieldToolTipsotherrenewal["English"]["PaymentType"] = "";
	$fieldLabelsotherrenewal["English"]["PaymentDate"] = "Pay. Date";
	$fieldToolTipsotherrenewal["English"]["PaymentDate"] = "";
	$fieldLabelsotherrenewal["English"]["Cost"] = "Cost";
	$fieldToolTipsotherrenewal["English"]["Cost"] = "";
	$fieldLabelsotherrenewal["English"]["SystemDate"] = "Sys. Date";
	$fieldToolTipsotherrenewal["English"]["SystemDate"] = "";
	$fieldLabelsotherrenewal["English"]["EnteredBy"] = "Entered By";
	$fieldToolTipsotherrenewal["English"]["EnteredBy"] = "";
	$fieldLabelsotherrenewal["English"]["PeriodFrom"] = "From";
	$fieldToolTipsotherrenewal["English"]["PeriodFrom"] = "";
	$fieldLabelsotherrenewal["English"]["PeriodTo"] = "To";
	$fieldToolTipsotherrenewal["English"]["PeriodTo"] = "";
	$fieldLabelsotherrenewal["English"]["PaymentRef"] = "Pay. Ref";
	$fieldToolTipsotherrenewal["English"]["PaymentRef"] = "";
	if (count($fieldToolTipsotherrenewal["English"]))
		$tdataotherrenewal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsotherrenewal["Afrikaans"] = array();
	$fieldToolTipsotherrenewal["Afrikaans"] = array();
	$pageTitlesotherrenewal["Afrikaans"] = array();
	$fieldLabelsotherrenewal["Afrikaans"]["ID"] = "ID";
	$fieldToolTipsotherrenewal["Afrikaans"]["ID"] = "";
	$fieldLabelsotherrenewal["Afrikaans"]["Fleet"] = "vloot";
	$fieldToolTipsotherrenewal["Afrikaans"]["Fleet"] = "";
	$fieldLabelsotherrenewal["Afrikaans"]["VehicleNo"] = "voertuig Geen";
	$fieldToolTipsotherrenewal["Afrikaans"]["VehicleNo"] = "";
	$fieldLabelsotherrenewal["Afrikaans"]["VehicleType"] = "voertuig Tipe";
	$fieldToolTipsotherrenewal["Afrikaans"]["VehicleType"] = "";
	$fieldLabelsotherrenewal["Afrikaans"]["PaymentType"] = "hernuwing Tipe";
	$fieldToolTipsotherrenewal["Afrikaans"]["PaymentType"] = "";
	$fieldLabelsotherrenewal["Afrikaans"]["PaymentDate"] = "Betaaldatum";
	$fieldToolTipsotherrenewal["Afrikaans"]["PaymentDate"] = "";
	$fieldLabelsotherrenewal["Afrikaans"]["Cost"] = "koste";
	$fieldToolTipsotherrenewal["Afrikaans"]["Cost"] = "";
	$fieldLabelsotherrenewal["Afrikaans"]["SystemDate"] = "stelsel Datum";
	$fieldToolTipsotherrenewal["Afrikaans"]["SystemDate"] = "";
	$fieldLabelsotherrenewal["Afrikaans"]["EnteredBy"] = "aangegaan deur";
	$fieldToolTipsotherrenewal["Afrikaans"]["EnteredBy"] = "";
	$fieldLabelsotherrenewal["Afrikaans"]["PeriodFrom"] = "Van";
	$fieldToolTipsotherrenewal["Afrikaans"]["PeriodFrom"] = "";
	$fieldLabelsotherrenewal["Afrikaans"]["PeriodTo"] = "om";
	$fieldToolTipsotherrenewal["Afrikaans"]["PeriodTo"] = "";
	$fieldLabelsotherrenewal["Afrikaans"]["PaymentRef"] = "Inbetalingsverwyssingsnommer";
	$fieldToolTipsotherrenewal["Afrikaans"]["PaymentRef"] = "";
	if (count($fieldToolTipsotherrenewal["Afrikaans"]))
		$tdataotherrenewal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsotherrenewal["Arabic"] = array();
	$fieldToolTipsotherrenewal["Arabic"] = array();
	$pageTitlesotherrenewal["Arabic"] = array();
	$fieldLabelsotherrenewal["Arabic"]["ID"] = "???? ?????";
	$fieldToolTipsotherrenewal["Arabic"]["ID"] = "";
	$fieldLabelsotherrenewal["Arabic"]["Fleet"] = "?????";
	$fieldToolTipsotherrenewal["Arabic"]["Fleet"] = "";
	$fieldLabelsotherrenewal["Arabic"]["VehicleNo"] = "??????? ??";
	$fieldToolTipsotherrenewal["Arabic"]["VehicleNo"] = "";
	$fieldLabelsotherrenewal["Arabic"]["VehicleType"] = "??? ???????";
	$fieldToolTipsotherrenewal["Arabic"]["VehicleType"] = "";
	$fieldLabelsotherrenewal["Arabic"]["PaymentType"] = "??? ???????";
	$fieldToolTipsotherrenewal["Arabic"]["PaymentType"] = "";
	$fieldLabelsotherrenewal["Arabic"]["PaymentDate"] = "????? ?????";
	$fieldToolTipsotherrenewal["Arabic"]["PaymentDate"] = "";
	$fieldLabelsotherrenewal["Arabic"]["Cost"] = "????";
	$fieldToolTipsotherrenewal["Arabic"]["Cost"] = "";
	$fieldLabelsotherrenewal["Arabic"]["SystemDate"] = "????? ??????";
	$fieldToolTipsotherrenewal["Arabic"]["SystemDate"] = "";
	$fieldLabelsotherrenewal["Arabic"]["EnteredBy"] = "?? ?????? ??????";
	$fieldToolTipsotherrenewal["Arabic"]["EnteredBy"] = "";
	$fieldLabelsotherrenewal["Arabic"]["PeriodFrom"] = "?? ???";
	$fieldToolTipsotherrenewal["Arabic"]["PeriodFrom"] = "";
	$fieldLabelsotherrenewal["Arabic"]["PeriodTo"] = "???";
	$fieldToolTipsotherrenewal["Arabic"]["PeriodTo"] = "";
	$fieldLabelsotherrenewal["Arabic"]["PaymentRef"] = "????? ???";
	$fieldToolTipsotherrenewal["Arabic"]["PaymentRef"] = "";
	if (count($fieldToolTipsotherrenewal["Arabic"]))
		$tdataotherrenewal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsotherrenewal["Chinese"] = array();
	$fieldToolTipsotherrenewal["Chinese"] = array();
	$pageTitlesotherrenewal["Chinese"] = array();
	$fieldLabelsotherrenewal["Chinese"]["ID"] = "ID";
	$fieldToolTipsotherrenewal["Chinese"]["ID"] = "";
	$fieldLabelsotherrenewal["Chinese"]["Fleet"] = "??";
	$fieldToolTipsotherrenewal["Chinese"]["Fleet"] = "";
	$fieldLabelsotherrenewal["Chinese"]["VehicleNo"] = "????";
	$fieldToolTipsotherrenewal["Chinese"]["VehicleNo"] = "";
	$fieldLabelsotherrenewal["Chinese"]["VehicleType"] = "????";
	$fieldToolTipsotherrenewal["Chinese"]["VehicleType"] = "";
	$fieldLabelsotherrenewal["Chinese"]["PaymentType"] = "????";
	$fieldToolTipsotherrenewal["Chinese"]["PaymentType"] = "";
	$fieldLabelsotherrenewal["Chinese"]["PaymentDate"] = "????";
	$fieldToolTipsotherrenewal["Chinese"]["PaymentDate"] = "";
	$fieldLabelsotherrenewal["Chinese"]["Cost"] = "??";
	$fieldToolTipsotherrenewal["Chinese"]["Cost"] = "";
	$fieldLabelsotherrenewal["Chinese"]["SystemDate"] = "????";
	$fieldToolTipsotherrenewal["Chinese"]["SystemDate"] = "";
	$fieldLabelsotherrenewal["Chinese"]["EnteredBy"] = "???";
	$fieldToolTipsotherrenewal["Chinese"]["EnteredBy"] = "";
	$fieldLabelsotherrenewal["Chinese"]["PeriodFrom"] = "?";
	$fieldToolTipsotherrenewal["Chinese"]["PeriodFrom"] = "";
	$fieldLabelsotherrenewal["Chinese"]["PeriodTo"] = "?";
	$fieldToolTipsotherrenewal["Chinese"]["PeriodTo"] = "";
	$fieldLabelsotherrenewal["Chinese"]["PaymentRef"] = "????";
	$fieldToolTipsotherrenewal["Chinese"]["PaymentRef"] = "";
	if (count($fieldToolTipsotherrenewal["Chinese"]))
		$tdataotherrenewal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsotherrenewal["French"] = array();
	$fieldToolTipsotherrenewal["French"] = array();
	$pageTitlesotherrenewal["French"] = array();
	$fieldLabelsotherrenewal["French"]["ID"] = "ID";
	$fieldToolTipsotherrenewal["French"]["ID"] = "";
	$fieldLabelsotherrenewal["French"]["Fleet"] = "Flotte";
	$fieldToolTipsotherrenewal["French"]["Fleet"] = "";
	$fieldLabelsotherrenewal["French"]["VehicleNo"] = "Numéro de véhicule";
	$fieldToolTipsotherrenewal["French"]["VehicleNo"] = "";
	$fieldLabelsotherrenewal["French"]["VehicleType"] = "Type de véhicule";
	$fieldToolTipsotherrenewal["French"]["VehicleType"] = "";
	$fieldLabelsotherrenewal["French"]["PaymentType"] = "Type de renouvellement";
	$fieldToolTipsotherrenewal["French"]["PaymentType"] = "";
	$fieldLabelsotherrenewal["French"]["PaymentDate"] = "Date de paiement";
	$fieldToolTipsotherrenewal["French"]["PaymentDate"] = "";
	$fieldLabelsotherrenewal["French"]["Cost"] = "Coût";
	$fieldToolTipsotherrenewal["French"]["Cost"] = "";
	$fieldLabelsotherrenewal["French"]["SystemDate"] = "Date du système";
	$fieldToolTipsotherrenewal["French"]["SystemDate"] = "";
	$fieldLabelsotherrenewal["French"]["EnteredBy"] = "Entré par";
	$fieldToolTipsotherrenewal["French"]["EnteredBy"] = "";
	$fieldLabelsotherrenewal["French"]["PeriodFrom"] = "De";
	$fieldToolTipsotherrenewal["French"]["PeriodFrom"] = "";
	$fieldLabelsotherrenewal["French"]["PeriodTo"] = "À";
	$fieldToolTipsotherrenewal["French"]["PeriodTo"] = "";
	$fieldLabelsotherrenewal["French"]["PaymentRef"] = "Référence de paiement";
	$fieldToolTipsotherrenewal["French"]["PaymentRef"] = "";
	if (count($fieldToolTipsotherrenewal["French"]))
		$tdataotherrenewal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsotherrenewal["German"] = array();
	$fieldToolTipsotherrenewal["German"] = array();
	$pageTitlesotherrenewal["German"] = array();
	$fieldLabelsotherrenewal["German"]["ID"] = "ICH WÜRDE";
	$fieldToolTipsotherrenewal["German"]["ID"] = "";
	$fieldLabelsotherrenewal["German"]["Fleet"] = "Flotte";
	$fieldToolTipsotherrenewal["German"]["Fleet"] = "";
	$fieldLabelsotherrenewal["German"]["VehicleNo"] = "Fahrzeug Nr";
	$fieldToolTipsotherrenewal["German"]["VehicleNo"] = "";
	$fieldLabelsotherrenewal["German"]["VehicleType"] = "Fahrzeugtyp";
	$fieldToolTipsotherrenewal["German"]["VehicleType"] = "";
	$fieldLabelsotherrenewal["German"]["PaymentType"] = "Erneuerungstyp";
	$fieldToolTipsotherrenewal["German"]["PaymentType"] = "";
	$fieldLabelsotherrenewal["German"]["PaymentDate"] = "Zahlungsdatum";
	$fieldToolTipsotherrenewal["German"]["PaymentDate"] = "";
	$fieldLabelsotherrenewal["German"]["Cost"] = "Kosten";
	$fieldToolTipsotherrenewal["German"]["Cost"] = "";
	$fieldLabelsotherrenewal["German"]["SystemDate"] = "Systemdatum";
	$fieldToolTipsotherrenewal["German"]["SystemDate"] = "";
	$fieldLabelsotherrenewal["German"]["EnteredBy"] = "Betreten von";
	$fieldToolTipsotherrenewal["German"]["EnteredBy"] = "";
	$fieldLabelsotherrenewal["German"]["PeriodFrom"] = "Von";
	$fieldToolTipsotherrenewal["German"]["PeriodFrom"] = "";
	$fieldLabelsotherrenewal["German"]["PeriodTo"] = "Nach";
	$fieldToolTipsotherrenewal["German"]["PeriodTo"] = "";
	$fieldLabelsotherrenewal["German"]["PaymentRef"] = "Zahlungsreferenz";
	$fieldToolTipsotherrenewal["German"]["PaymentRef"] = "";
	if (count($fieldToolTipsotherrenewal["German"]))
		$tdataotherrenewal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsotherrenewal["Italian"] = array();
	$fieldToolTipsotherrenewal["Italian"] = array();
	$pageTitlesotherrenewal["Italian"] = array();
	$fieldLabelsotherrenewal["Italian"]["ID"] = "ID";
	$fieldToolTipsotherrenewal["Italian"]["ID"] = "";
	$fieldLabelsotherrenewal["Italian"]["Fleet"] = "Flotta";
	$fieldToolTipsotherrenewal["Italian"]["Fleet"] = "";
	$fieldLabelsotherrenewal["Italian"]["VehicleNo"] = "Vehicle No";
	$fieldToolTipsotherrenewal["Italian"]["VehicleNo"] = "";
	$fieldLabelsotherrenewal["Italian"]["VehicleType"] = "tipo di veicolo";
	$fieldToolTipsotherrenewal["Italian"]["VehicleType"] = "";
	$fieldLabelsotherrenewal["Italian"]["PaymentType"] = "Tipo di rinnovo";
	$fieldToolTipsotherrenewal["Italian"]["PaymentType"] = "";
	$fieldLabelsotherrenewal["Italian"]["PaymentDate"] = "Data di pagamento";
	$fieldToolTipsotherrenewal["Italian"]["PaymentDate"] = "";
	$fieldLabelsotherrenewal["Italian"]["Cost"] = "Costo";
	$fieldToolTipsotherrenewal["Italian"]["Cost"] = "";
	$fieldLabelsotherrenewal["Italian"]["SystemDate"] = "Data di sistema";
	$fieldToolTipsotherrenewal["Italian"]["SystemDate"] = "";
	$fieldLabelsotherrenewal["Italian"]["EnteredBy"] = "Inserito da";
	$fieldToolTipsotherrenewal["Italian"]["EnteredBy"] = "";
	$fieldLabelsotherrenewal["Italian"]["PeriodFrom"] = "Da parte di";
	$fieldToolTipsotherrenewal["Italian"]["PeriodFrom"] = "";
	$fieldLabelsotherrenewal["Italian"]["PeriodTo"] = "A";
	$fieldToolTipsotherrenewal["Italian"]["PeriodTo"] = "";
	$fieldLabelsotherrenewal["Italian"]["PaymentRef"] = "Referenza di pagamento";
	$fieldToolTipsotherrenewal["Italian"]["PaymentRef"] = "";
	if (count($fieldToolTipsotherrenewal["Italian"]))
		$tdataotherrenewal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsotherrenewal["Russian"] = array();
	$fieldToolTipsotherrenewal["Russian"] = array();
	$pageTitlesotherrenewal["Russian"] = array();
	$fieldLabelsotherrenewal["Russian"]["ID"] = "? ??";
	$fieldToolTipsotherrenewal["Russian"]["ID"] = "";
	$fieldLabelsotherrenewal["Russian"]["Fleet"] = "????";
	$fieldToolTipsotherrenewal["Russian"]["Fleet"] = "";
	$fieldLabelsotherrenewal["Russian"]["VehicleNo"] = "?????????? ???";
	$fieldToolTipsotherrenewal["Russian"]["VehicleNo"] = "";
	$fieldLabelsotherrenewal["Russian"]["VehicleType"] = "??? ??????";
	$fieldToolTipsotherrenewal["Russian"]["VehicleType"] = "";
	$fieldLabelsotherrenewal["Russian"]["PaymentType"] = "??? ??????????";
	$fieldToolTipsotherrenewal["Russian"]["PaymentType"] = "";
	$fieldLabelsotherrenewal["Russian"]["PaymentDate"] = "???? ???????";
	$fieldToolTipsotherrenewal["Russian"]["PaymentDate"] = "";
	$fieldLabelsotherrenewal["Russian"]["Cost"] = "?????????";
	$fieldToolTipsotherrenewal["Russian"]["Cost"] = "";
	$fieldLabelsotherrenewal["Russian"]["SystemDate"] = "System Date";
	$fieldToolTipsotherrenewal["Russian"]["SystemDate"] = "";
	$fieldLabelsotherrenewal["Russian"]["EnteredBy"] = "??????";
	$fieldToolTipsotherrenewal["Russian"]["EnteredBy"] = "";
	$fieldLabelsotherrenewal["Russian"]["PeriodFrom"] = "??";
	$fieldToolTipsotherrenewal["Russian"]["PeriodFrom"] = "";
	$fieldLabelsotherrenewal["Russian"]["PeriodTo"] = "?";
	$fieldToolTipsotherrenewal["Russian"]["PeriodTo"] = "";
	$fieldLabelsotherrenewal["Russian"]["PaymentRef"] = "?????? ??????";
	$fieldToolTipsotherrenewal["Russian"]["PaymentRef"] = "";
	if (count($fieldToolTipsotherrenewal["Russian"]))
		$tdataotherrenewal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsotherrenewal["Spanish"] = array();
	$fieldToolTipsotherrenewal["Spanish"] = array();
	$pageTitlesotherrenewal["Spanish"] = array();
	$fieldLabelsotherrenewal["Spanish"]["ID"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipsotherrenewal["Spanish"]["ID"] = "";
	$fieldLabelsotherrenewal["Spanish"]["Fleet"] = "Flota";
	$fieldToolTipsotherrenewal["Spanish"]["Fleet"] = "";
	$fieldLabelsotherrenewal["Spanish"]["VehicleNo"] = "Vehículo No";
	$fieldToolTipsotherrenewal["Spanish"]["VehicleNo"] = "";
	$fieldLabelsotherrenewal["Spanish"]["VehicleType"] = "tipo de vehiculo";
	$fieldToolTipsotherrenewal["Spanish"]["VehicleType"] = "";
	$fieldLabelsotherrenewal["Spanish"]["PaymentType"] = "Tipo de Renovación";
	$fieldToolTipsotherrenewal["Spanish"]["PaymentType"] = "";
	$fieldLabelsotherrenewal["Spanish"]["PaymentDate"] = "Fecha de pago";
	$fieldToolTipsotherrenewal["Spanish"]["PaymentDate"] = "";
	$fieldLabelsotherrenewal["Spanish"]["Cost"] = "Costo";
	$fieldToolTipsotherrenewal["Spanish"]["Cost"] = "";
	$fieldLabelsotherrenewal["Spanish"]["SystemDate"] = "Fecha del sistema";
	$fieldToolTipsotherrenewal["Spanish"]["SystemDate"] = "";
	$fieldLabelsotherrenewal["Spanish"]["EnteredBy"] = "Introducido por";
	$fieldToolTipsotherrenewal["Spanish"]["EnteredBy"] = "";
	$fieldLabelsotherrenewal["Spanish"]["PeriodFrom"] = "De";
	$fieldToolTipsotherrenewal["Spanish"]["PeriodFrom"] = "";
	$fieldLabelsotherrenewal["Spanish"]["PeriodTo"] = "A";
	$fieldToolTipsotherrenewal["Spanish"]["PeriodTo"] = "";
	$fieldLabelsotherrenewal["Spanish"]["PaymentRef"] = "Referencia de pago";
	$fieldToolTipsotherrenewal["Spanish"]["PaymentRef"] = "";
	if (count($fieldToolTipsotherrenewal["Spanish"]))
		$tdataotherrenewal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsotherrenewal[""] = array();
	$fieldToolTipsotherrenewal[""] = array();
	$pageTitlesotherrenewal[""] = array();
	if (count($fieldToolTipsotherrenewal[""]))
		$tdataotherrenewal[".isUseToolTips"] = true;
}


	$tdataotherrenewal[".NCSearch"] = true;



$tdataotherrenewal[".shortTableName"] = "otherrenewal";
$tdataotherrenewal[".nSecOptions"] = 0;
$tdataotherrenewal[".recsPerRowPrint"] = 1;
$tdataotherrenewal[".mainTableOwnerID"] = "";
$tdataotherrenewal[".moveNext"] = 1;
$tdataotherrenewal[".entityType"] = 0;

$tdataotherrenewal[".strOriginalTableName"] = "otherrenewal";

		 



$tdataotherrenewal[".showAddInPopup"] = false;

$tdataotherrenewal[".showEditInPopup"] = false;

$tdataotherrenewal[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataotherrenewal[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataotherrenewal[".fieldsForRegister"] = array();

	$tdataotherrenewal[".listAjax"] = true;

	$tdataotherrenewal[".audit"] = false;

	$tdataotherrenewal[".locking"] = false;

$tdataotherrenewal[".edit"] = true;
$tdataotherrenewal[".afterEditAction"] = 1;
$tdataotherrenewal[".closePopupAfterEdit"] = 1;
$tdataotherrenewal[".afterEditActionDetTable"] = "";

$tdataotherrenewal[".add"] = true;
$tdataotherrenewal[".afterAddAction"] = 1;
$tdataotherrenewal[".closePopupAfterAdd"] = 1;
$tdataotherrenewal[".afterAddActionDetTable"] = "";

$tdataotherrenewal[".list"] = true;




$tdataotherrenewal[".view"] = true;


$tdataotherrenewal[".exportTo"] = true;

$tdataotherrenewal[".printFriendly"] = true;

$tdataotherrenewal[".delete"] = true;

$tdataotherrenewal[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataotherrenewal[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataotherrenewal[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataotherrenewal[".searchSaving"] = false;
//

$tdataotherrenewal[".showSearchPanel"] = true;
		$tdataotherrenewal[".flexibleSearch"] = true;

$tdataotherrenewal[".isUseAjaxSuggest"] = true;

$tdataotherrenewal[".rowHighlite"] = true;



$tdataotherrenewal[".addPageEvents"] = false;

// use timepicker for search panel
$tdataotherrenewal[".isUseTimeForSearch"] = false;





$tdataotherrenewal[".allSearchFields"] = array();
$tdataotherrenewal[".filterFields"] = array();
$tdataotherrenewal[".requiredSearchFields"] = array();

$tdataotherrenewal[".allSearchFields"][] = "ID";
	$tdataotherrenewal[".allSearchFields"][] = "Fleet";
	$tdataotherrenewal[".allSearchFields"][] = "VehicleNo";
	$tdataotherrenewal[".allSearchFields"][] = "VehicleType";
	$tdataotherrenewal[".allSearchFields"][] = "PaymentType";
	$tdataotherrenewal[".allSearchFields"][] = "PaymentDate";
	$tdataotherrenewal[".allSearchFields"][] = "Cost";
	$tdataotherrenewal[".allSearchFields"][] = "PeriodFrom";
	$tdataotherrenewal[".allSearchFields"][] = "PeriodTo";
	$tdataotherrenewal[".allSearchFields"][] = "PaymentRef";
	$tdataotherrenewal[".allSearchFields"][] = "SystemDate";
	$tdataotherrenewal[".allSearchFields"][] = "EnteredBy";
	

$tdataotherrenewal[".googleLikeFields"] = array();
$tdataotherrenewal[".googleLikeFields"][] = "ID";
$tdataotherrenewal[".googleLikeFields"][] = "Fleet";
$tdataotherrenewal[".googleLikeFields"][] = "VehicleNo";
$tdataotherrenewal[".googleLikeFields"][] = "VehicleType";
$tdataotherrenewal[".googleLikeFields"][] = "PaymentType";
$tdataotherrenewal[".googleLikeFields"][] = "PaymentDate";
$tdataotherrenewal[".googleLikeFields"][] = "Cost";
$tdataotherrenewal[".googleLikeFields"][] = "SystemDate";
$tdataotherrenewal[".googleLikeFields"][] = "EnteredBy";
$tdataotherrenewal[".googleLikeFields"][] = "PeriodFrom";
$tdataotherrenewal[".googleLikeFields"][] = "PeriodTo";
$tdataotherrenewal[".googleLikeFields"][] = "PaymentRef";


$tdataotherrenewal[".advSearchFields"] = array();
$tdataotherrenewal[".advSearchFields"][] = "ID";
$tdataotherrenewal[".advSearchFields"][] = "Fleet";
$tdataotherrenewal[".advSearchFields"][] = "VehicleNo";
$tdataotherrenewal[".advSearchFields"][] = "VehicleType";
$tdataotherrenewal[".advSearchFields"][] = "PaymentType";
$tdataotherrenewal[".advSearchFields"][] = "PaymentDate";
$tdataotherrenewal[".advSearchFields"][] = "Cost";
$tdataotherrenewal[".advSearchFields"][] = "PeriodFrom";
$tdataotherrenewal[".advSearchFields"][] = "PeriodTo";
$tdataotherrenewal[".advSearchFields"][] = "PaymentRef";
$tdataotherrenewal[".advSearchFields"][] = "SystemDate";
$tdataotherrenewal[".advSearchFields"][] = "EnteredBy";

$tdataotherrenewal[".tableType"] = "list";

$tdataotherrenewal[".printerPageOrientation"] = 0;
$tdataotherrenewal[".nPrinterPageScale"] = 100;

$tdataotherrenewal[".nPrinterSplitRecords"] = 40;

$tdataotherrenewal[".nPrinterPDFSplitRecords"] = 40;



$tdataotherrenewal[".geocodingEnabled"] = false;





$tdataotherrenewal[".listGridLayout"] = 3;


$tdataotherrenewal[".isResizeColumns"] = true;



// view page pdf
$tdataotherrenewal[".isViewPagePDF"] = true;
$tdataotherrenewal[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataotherrenewal[".isPrinterPagePDF"] = true;
$tdataotherrenewal[".nPrinterPagePDFScale"] = 100;


$tdataotherrenewal[".pageSize"] = 20;

$tdataotherrenewal[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataotherrenewal[".strOrderBy"] = $tstrOrderBy;

$tdataotherrenewal[".orderindexes"] = array();

$tdataotherrenewal[".sqlHead"] = "SELECT ID,  	Fleet,  	VehicleNo,  	VehicleType,  	PaymentType,  	PaymentDate,  	Cost,  	SystemDate,  	EnteredBy,  	PeriodFrom,  	PeriodTo,  	PaymentRef";
$tdataotherrenewal[".sqlFrom"] = "FROM otherrenewal";
$tdataotherrenewal[".sqlWhereExpr"] = "";
$tdataotherrenewal[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataotherrenewal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataotherrenewal[".arrGroupsPerPage"] = $arrGPP;

$tdataotherrenewal[".highlightSearchResults"] = true;

$tableKeysotherrenewal = array();
$tableKeysotherrenewal[] = "ID";
$tdataotherrenewal[".Keys"] = $tableKeysotherrenewal;

$tdataotherrenewal[".listFields"] = array();
$tdataotherrenewal[".listFields"][] = "ID";
$tdataotherrenewal[".listFields"][] = "Fleet";
$tdataotherrenewal[".listFields"][] = "VehicleNo";
$tdataotherrenewal[".listFields"][] = "VehicleType";
$tdataotherrenewal[".listFields"][] = "PaymentType";
$tdataotherrenewal[".listFields"][] = "PaymentDate";
$tdataotherrenewal[".listFields"][] = "Cost";
$tdataotherrenewal[".listFields"][] = "PeriodFrom";
$tdataotherrenewal[".listFields"][] = "PeriodTo";
$tdataotherrenewal[".listFields"][] = "PaymentRef";
$tdataotherrenewal[".listFields"][] = "EnteredBy";

$tdataotherrenewal[".hideMobileList"] = array();


$tdataotherrenewal[".viewFields"] = array();
$tdataotherrenewal[".viewFields"][] = "ID";
$tdataotherrenewal[".viewFields"][] = "Fleet";
$tdataotherrenewal[".viewFields"][] = "VehicleNo";
$tdataotherrenewal[".viewFields"][] = "VehicleType";
$tdataotherrenewal[".viewFields"][] = "PaymentType";
$tdataotherrenewal[".viewFields"][] = "PaymentDate";
$tdataotherrenewal[".viewFields"][] = "Cost";
$tdataotherrenewal[".viewFields"][] = "PeriodFrom";
$tdataotherrenewal[".viewFields"][] = "PeriodTo";
$tdataotherrenewal[".viewFields"][] = "PaymentRef";
$tdataotherrenewal[".viewFields"][] = "SystemDate";
$tdataotherrenewal[".viewFields"][] = "EnteredBy";

$tdataotherrenewal[".addFields"] = array();
$tdataotherrenewal[".addFields"][] = "Fleet";
$tdataotherrenewal[".addFields"][] = "VehicleNo";
$tdataotherrenewal[".addFields"][] = "VehicleType";
$tdataotherrenewal[".addFields"][] = "PaymentType";
$tdataotherrenewal[".addFields"][] = "PaymentDate";
$tdataotherrenewal[".addFields"][] = "Cost";
$tdataotherrenewal[".addFields"][] = "PeriodFrom";
$tdataotherrenewal[".addFields"][] = "PeriodTo";
$tdataotherrenewal[".addFields"][] = "PaymentRef";
$tdataotherrenewal[".addFields"][] = "SystemDate";
$tdataotherrenewal[".addFields"][] = "EnteredBy";

$tdataotherrenewal[".masterListFields"] = array();
$tdataotherrenewal[".masterListFields"][] = "ID";
$tdataotherrenewal[".masterListFields"][] = "Fleet";
$tdataotherrenewal[".masterListFields"][] = "VehicleNo";
$tdataotherrenewal[".masterListFields"][] = "VehicleType";
$tdataotherrenewal[".masterListFields"][] = "PaymentType";
$tdataotherrenewal[".masterListFields"][] = "PaymentDate";
$tdataotherrenewal[".masterListFields"][] = "Cost";
$tdataotherrenewal[".masterListFields"][] = "PeriodFrom";
$tdataotherrenewal[".masterListFields"][] = "PeriodTo";
$tdataotherrenewal[".masterListFields"][] = "PaymentRef";
$tdataotherrenewal[".masterListFields"][] = "SystemDate";
$tdataotherrenewal[".masterListFields"][] = "EnteredBy";

$tdataotherrenewal[".inlineAddFields"] = array();

$tdataotherrenewal[".editFields"] = array();
$tdataotherrenewal[".editFields"][] = "Fleet";
$tdataotherrenewal[".editFields"][] = "VehicleNo";
$tdataotherrenewal[".editFields"][] = "VehicleType";
$tdataotherrenewal[".editFields"][] = "PaymentType";
$tdataotherrenewal[".editFields"][] = "PaymentDate";
$tdataotherrenewal[".editFields"][] = "Cost";
$tdataotherrenewal[".editFields"][] = "PeriodFrom";
$tdataotherrenewal[".editFields"][] = "PeriodTo";
$tdataotherrenewal[".editFields"][] = "PaymentRef";
$tdataotherrenewal[".editFields"][] = "SystemDate";
$tdataotherrenewal[".editFields"][] = "EnteredBy";

$tdataotherrenewal[".inlineEditFields"] = array();

$tdataotherrenewal[".updateSelectedFields"] = array();
$tdataotherrenewal[".updateSelectedFields"][] = "Fleet";
$tdataotherrenewal[".updateSelectedFields"][] = "VehicleNo";
$tdataotherrenewal[".updateSelectedFields"][] = "VehicleType";
$tdataotherrenewal[".updateSelectedFields"][] = "PaymentType";
$tdataotherrenewal[".updateSelectedFields"][] = "PaymentDate";
$tdataotherrenewal[".updateSelectedFields"][] = "Cost";
$tdataotherrenewal[".updateSelectedFields"][] = "PeriodFrom";
$tdataotherrenewal[".updateSelectedFields"][] = "PeriodTo";
$tdataotherrenewal[".updateSelectedFields"][] = "PaymentRef";
$tdataotherrenewal[".updateSelectedFields"][] = "SystemDate";
$tdataotherrenewal[".updateSelectedFields"][] = "EnteredBy";


$tdataotherrenewal[".exportFields"] = array();
$tdataotherrenewal[".exportFields"][] = "ID";
$tdataotherrenewal[".exportFields"][] = "Fleet";
$tdataotherrenewal[".exportFields"][] = "VehicleNo";
$tdataotherrenewal[".exportFields"][] = "VehicleType";
$tdataotherrenewal[".exportFields"][] = "PaymentType";
$tdataotherrenewal[".exportFields"][] = "PaymentDate";
$tdataotherrenewal[".exportFields"][] = "Cost";
$tdataotherrenewal[".exportFields"][] = "PeriodFrom";
$tdataotherrenewal[".exportFields"][] = "PeriodTo";
$tdataotherrenewal[".exportFields"][] = "PaymentRef";
$tdataotherrenewal[".exportFields"][] = "SystemDate";
$tdataotherrenewal[".exportFields"][] = "EnteredBy";

$tdataotherrenewal[".importFields"] = array();

$tdataotherrenewal[".printFields"] = array();
$tdataotherrenewal[".printFields"][] = "ID";
$tdataotherrenewal[".printFields"][] = "Fleet";
$tdataotherrenewal[".printFields"][] = "VehicleNo";
$tdataotherrenewal[".printFields"][] = "VehicleType";
$tdataotherrenewal[".printFields"][] = "PaymentType";
$tdataotherrenewal[".printFields"][] = "PaymentDate";
$tdataotherrenewal[".printFields"][] = "Cost";
$tdataotherrenewal[".printFields"][] = "PeriodFrom";
$tdataotherrenewal[".printFields"][] = "PeriodTo";
$tdataotherrenewal[".printFields"][] = "PaymentRef";
$tdataotherrenewal[".printFields"][] = "SystemDate";
$tdataotherrenewal[".printFields"][] = "EnteredBy";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "otherrenewal";
	$fdata["Label"] = GetFieldLabel("otherrenewal","ID");
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




	$tdataotherrenewal["ID"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "otherrenewal";
	$fdata["Label"] = GetFieldLabel("otherrenewal","Fleet");
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
	$fdata["FullName"] = "Fleet";

	
	
				$fdata["FieldPermissions"] = true;

			
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

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "VehicleNo";

	
	
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




	$tdataotherrenewal["Fleet"] = $fdata;
//	VehicleNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "VehicleNo";
	$fdata["GoodName"] = "VehicleNo";
	$fdata["ownerTable"] = "otherrenewal";
	$fdata["Label"] = GetFieldLabel("otherrenewal","VehicleNo");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VehicleNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VehicleNo";

	
	
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
	$edata["LookupTable"] = "vehiclemaster";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"VehicleType", 'lookupF'=>"Type");
	$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "RegNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RegNo";

	
	$edata["LookupOrderBy"] = "RegNo";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Fleet", "lookup" => "Fleet" );

	
	

	
	
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




	$tdataotherrenewal["VehicleNo"] = $fdata;
//	VehicleType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "VehicleType";
	$fdata["GoodName"] = "VehicleType";
	$fdata["ownerTable"] = "otherrenewal";
	$fdata["Label"] = GetFieldLabel("otherrenewal","VehicleType");
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

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdataotherrenewal["VehicleType"] = $fdata;
//	PaymentType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PaymentType";
	$fdata["GoodName"] = "PaymentType";
	$fdata["ownerTable"] = "otherrenewal";
	$fdata["Label"] = GetFieldLabel("otherrenewal","PaymentType");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PaymentType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PaymentType";

	
	
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
	$edata["LookupTable"] = "rnewalmastertable";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Renewal";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Renewal";

	
	$edata["LookupOrderBy"] = "Renewal";

	
	
	
	

	
	
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




	$tdataotherrenewal["PaymentType"] = $fdata;
//	PaymentDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PaymentDate";
	$fdata["GoodName"] = "PaymentDate";
	$fdata["ownerTable"] = "otherrenewal";
	$fdata["Label"] = GetFieldLabel("otherrenewal","PaymentDate");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PaymentDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PaymentDate";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataotherrenewal["PaymentDate"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "otherrenewal";
	$fdata["Label"] = GetFieldLabel("otherrenewal","Cost");
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
	$fdata["FullName"] = "Cost";

	
	
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




	$tdataotherrenewal["Cost"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "otherrenewal";
	$fdata["Label"] = GetFieldLabel("otherrenewal","SystemDate");
	$fdata["FieldType"] = 200;

	
	
	
										
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SystemDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SystemDate";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdataotherrenewal["SystemDate"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "otherrenewal";
	$fdata["Label"] = GetFieldLabel("otherrenewal","EnteredBy");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EnteredBy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EnteredBy";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdataotherrenewal["EnteredBy"] = $fdata;
//	PeriodFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PeriodFrom";
	$fdata["GoodName"] = "PeriodFrom";
	$fdata["ownerTable"] = "otherrenewal";
	$fdata["Label"] = GetFieldLabel("otherrenewal","PeriodFrom");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PeriodFrom";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PeriodFrom";

	
	
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




	$tdataotherrenewal["PeriodFrom"] = $fdata;
//	PeriodTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "PeriodTo";
	$fdata["GoodName"] = "PeriodTo";
	$fdata["ownerTable"] = "otherrenewal";
	$fdata["Label"] = GetFieldLabel("otherrenewal","PeriodTo");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PeriodTo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PeriodTo";

	
	
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




	$tdataotherrenewal["PeriodTo"] = $fdata;
//	PaymentRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PaymentRef";
	$fdata["GoodName"] = "PaymentRef";
	$fdata["ownerTable"] = "otherrenewal";
	$fdata["Label"] = GetFieldLabel("otherrenewal","PaymentRef");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PaymentRef";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PaymentRef";

	
	
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




	$tdataotherrenewal["PaymentRef"] = $fdata;


$tables_data["otherrenewal"]=&$tdataotherrenewal;
$field_labels["otherrenewal"] = &$fieldLabelsotherrenewal;
$fieldToolTips["otherrenewal"] = &$fieldToolTipsotherrenewal;
$page_titles["otherrenewal"] = &$pageTitlesotherrenewal;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["otherrenewal"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["otherrenewal"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_otherrenewal()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	Fleet,  	VehicleNo,  	VehicleType,  	PaymentType,  	PaymentDate,  	Cost,  	SystemDate,  	EnteredBy,  	PeriodFrom,  	PeriodTo,  	PaymentRef";
$proto0["m_strFrom"] = "FROM otherrenewal";
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
	"m_strTable" => "otherrenewal",
	"m_srcTableName" => "otherrenewal"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "otherrenewal";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "otherrenewal",
	"m_srcTableName" => "otherrenewal"
));

$proto8["m_sql"] = "Fleet";
$proto8["m_srcTableName"] = "otherrenewal";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "VehicleNo",
	"m_strTable" => "otherrenewal",
	"m_srcTableName" => "otherrenewal"
));

$proto10["m_sql"] = "VehicleNo";
$proto10["m_srcTableName"] = "otherrenewal";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "VehicleType",
	"m_strTable" => "otherrenewal",
	"m_srcTableName" => "otherrenewal"
));

$proto12["m_sql"] = "VehicleType";
$proto12["m_srcTableName"] = "otherrenewal";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentType",
	"m_strTable" => "otherrenewal",
	"m_srcTableName" => "otherrenewal"
));

$proto14["m_sql"] = "PaymentType";
$proto14["m_srcTableName"] = "otherrenewal";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentDate",
	"m_strTable" => "otherrenewal",
	"m_srcTableName" => "otherrenewal"
));

$proto16["m_sql"] = "PaymentDate";
$proto16["m_srcTableName"] = "otherrenewal";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "otherrenewal",
	"m_srcTableName" => "otherrenewal"
));

$proto18["m_sql"] = "Cost";
$proto18["m_srcTableName"] = "otherrenewal";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "otherrenewal",
	"m_srcTableName" => "otherrenewal"
));

$proto20["m_sql"] = "SystemDate";
$proto20["m_srcTableName"] = "otherrenewal";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "otherrenewal",
	"m_srcTableName" => "otherrenewal"
));

$proto22["m_sql"] = "EnteredBy";
$proto22["m_srcTableName"] = "otherrenewal";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "PeriodFrom",
	"m_strTable" => "otherrenewal",
	"m_srcTableName" => "otherrenewal"
));

$proto24["m_sql"] = "PeriodFrom";
$proto24["m_srcTableName"] = "otherrenewal";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "PeriodTo",
	"m_strTable" => "otherrenewal",
	"m_srcTableName" => "otherrenewal"
));

$proto26["m_sql"] = "PeriodTo";
$proto26["m_srcTableName"] = "otherrenewal";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentRef",
	"m_strTable" => "otherrenewal",
	"m_srcTableName" => "otherrenewal"
));

$proto28["m_sql"] = "PaymentRef";
$proto28["m_srcTableName"] = "otherrenewal";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "otherrenewal";
$proto31["m_srcTableName"] = "otherrenewal";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "ID";
$proto31["m_columns"][] = "Fleet";
$proto31["m_columns"][] = "VehicleNo";
$proto31["m_columns"][] = "VehicleType";
$proto31["m_columns"][] = "PaymentType";
$proto31["m_columns"][] = "PaymentDate";
$proto31["m_columns"][] = "Cost";
$proto31["m_columns"][] = "SystemDate";
$proto31["m_columns"][] = "EnteredBy";
$proto31["m_columns"][] = "PeriodFrom";
$proto31["m_columns"][] = "PeriodTo";
$proto31["m_columns"][] = "PaymentRef";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "otherrenewal";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "otherrenewal";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="otherrenewal";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_otherrenewal = createSqlQuery_otherrenewal();


	
					
;

												

$tdataotherrenewal[".sqlquery"] = $queryData_otherrenewal;

$tableEvents["otherrenewal"] = new eventsBase;
$tdataotherrenewal[".hasEvents"] = false;

?>