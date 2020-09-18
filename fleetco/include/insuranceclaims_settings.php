<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainsuranceclaims = array();
	$tdatainsuranceclaims[".truncateText"] = true;
	$tdatainsuranceclaims[".NumberOfChars"] = 80;
	$tdatainsuranceclaims[".ShortName"] = "insuranceclaims";
	$tdatainsuranceclaims[".OwnerID"] = "";
	$tdatainsuranceclaims[".OriginalTable"] = "insuranceclaims";

//	field labels
$fieldLabelsinsuranceclaims = array();
$fieldToolTipsinsuranceclaims = array();
$pageTitlesinsuranceclaims = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinsuranceclaims["English"] = array();
	$fieldToolTipsinsuranceclaims["English"] = array();
	$pageTitlesinsuranceclaims["English"] = array();
	$fieldLabelsinsuranceclaims["English"]["Id"] = "ID";
	$fieldToolTipsinsuranceclaims["English"]["Id"] = "";
	$fieldLabelsinsuranceclaims["English"]["SysDate"] = "Sys. Date";
	$fieldToolTipsinsuranceclaims["English"]["SysDate"] = "";
	$fieldLabelsinsuranceclaims["English"]["Fleet"] = "Fleet";
	$fieldToolTipsinsuranceclaims["English"]["Fleet"] = "";
	$fieldLabelsinsuranceclaims["English"]["Type"] = "Type";
	$fieldToolTipsinsuranceclaims["English"]["Type"] = "";
	$fieldLabelsinsuranceclaims["English"]["VehicleNo"] = "Vehicle No";
	$fieldToolTipsinsuranceclaims["English"]["VehicleNo"] = "";
	$fieldLabelsinsuranceclaims["English"]["AccidentDate"] = "Acci. Ref";
	$fieldToolTipsinsuranceclaims["English"]["AccidentDate"] = "";
	$fieldLabelsinsuranceclaims["English"]["Claim"] = "Claim";
	$fieldToolTipsinsuranceclaims["English"]["Claim"] = "";
	$fieldLabelsinsuranceclaims["English"]["EnteredBy"] = "Entered By";
	$fieldToolTipsinsuranceclaims["English"]["EnteredBy"] = "";
	$fieldLabelsinsuranceclaims["English"]["ReceiptNo"] = "Recp. Ref";
	$fieldToolTipsinsuranceclaims["English"]["ReceiptNo"] = "";
	$fieldLabelsinsuranceclaims["English"]["Remarks"] = "Remarks";
	$fieldToolTipsinsuranceclaims["English"]["Remarks"] = "";
	$fieldLabelsinsuranceclaims["English"]["insurer"] = "Insurer";
	$fieldToolTipsinsuranceclaims["English"]["insurer"] = "";
	$fieldLabelsinsuranceclaims["English"]["Date"] = "Date";
	$fieldToolTipsinsuranceclaims["English"]["Date"] = "";
	if (count($fieldToolTipsinsuranceclaims["English"]))
		$tdatainsuranceclaims[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsinsuranceclaims["Afrikaans"] = array();
	$fieldToolTipsinsuranceclaims["Afrikaans"] = array();
	$pageTitlesinsuranceclaims["Afrikaans"] = array();
	$fieldLabelsinsuranceclaims["Afrikaans"]["Id"] = "ID";
	$fieldToolTipsinsuranceclaims["Afrikaans"]["Id"] = "";
	$fieldLabelsinsuranceclaims["Afrikaans"]["SysDate"] = "stelsel Datum";
	$fieldToolTipsinsuranceclaims["Afrikaans"]["SysDate"] = "";
	$fieldLabelsinsuranceclaims["Afrikaans"]["Fleet"] = "vloot";
	$fieldToolTipsinsuranceclaims["Afrikaans"]["Fleet"] = "";
	$fieldLabelsinsuranceclaims["Afrikaans"]["Type"] = "tipe";
	$fieldToolTipsinsuranceclaims["Afrikaans"]["Type"] = "";
	$fieldLabelsinsuranceclaims["Afrikaans"]["VehicleNo"] = "voertuig Geen";
	$fieldToolTipsinsuranceclaims["Afrikaans"]["VehicleNo"] = "";
	$fieldLabelsinsuranceclaims["Afrikaans"]["AccidentDate"] = "ongeluk Verwysing";
	$fieldToolTipsinsuranceclaims["Afrikaans"]["AccidentDate"] = "";
	$fieldLabelsinsuranceclaims["Afrikaans"]["Claim"] = "Eis";
	$fieldToolTipsinsuranceclaims["Afrikaans"]["Claim"] = "";
	$fieldLabelsinsuranceclaims["Afrikaans"]["EnteredBy"] = "aangegaan deur";
	$fieldToolTipsinsuranceclaims["Afrikaans"]["EnteredBy"] = "";
	$fieldLabelsinsuranceclaims["Afrikaans"]["ReceiptNo"] = "Ontvangs No.";
	$fieldToolTipsinsuranceclaims["Afrikaans"]["ReceiptNo"] = "";
	$fieldLabelsinsuranceclaims["Afrikaans"]["Remarks"] = "opmerkings";
	$fieldToolTipsinsuranceclaims["Afrikaans"]["Remarks"] = "";
	$fieldLabelsinsuranceclaims["Afrikaans"]["insurer"] = "versekeraar";
	$fieldToolTipsinsuranceclaims["Afrikaans"]["insurer"] = "";
	$fieldLabelsinsuranceclaims["Afrikaans"]["Date"] = "datum";
	$fieldToolTipsinsuranceclaims["Afrikaans"]["Date"] = "";
	if (count($fieldToolTipsinsuranceclaims["Afrikaans"]))
		$tdatainsuranceclaims[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsinsuranceclaims["Arabic"] = array();
	$fieldToolTipsinsuranceclaims["Arabic"] = array();
	$pageTitlesinsuranceclaims["Arabic"] = array();
	$fieldLabelsinsuranceclaims["Arabic"]["Id"] = "???? ?????";
	$fieldToolTipsinsuranceclaims["Arabic"]["Id"] = "";
	$fieldLabelsinsuranceclaims["Arabic"]["SysDate"] = "????? ??????";
	$fieldToolTipsinsuranceclaims["Arabic"]["SysDate"] = "";
	$fieldLabelsinsuranceclaims["Arabic"]["Fleet"] = "?????";
	$fieldToolTipsinsuranceclaims["Arabic"]["Fleet"] = "";
	$fieldLabelsinsuranceclaims["Arabic"]["Type"] = "????";
	$fieldToolTipsinsuranceclaims["Arabic"]["Type"] = "";
	$fieldLabelsinsuranceclaims["Arabic"]["VehicleNo"] = "??????? ??";
	$fieldToolTipsinsuranceclaims["Arabic"]["VehicleNo"] = "";
	$fieldLabelsinsuranceclaims["Arabic"]["AccidentDate"] = "???? ???????";
	$fieldToolTipsinsuranceclaims["Arabic"]["AccidentDate"] = "";
	$fieldLabelsinsuranceclaims["Arabic"]["Claim"] = "?????";
	$fieldToolTipsinsuranceclaims["Arabic"]["Claim"] = "";
	$fieldLabelsinsuranceclaims["Arabic"]["EnteredBy"] = "?? ?????? ??????";
	$fieldToolTipsinsuranceclaims["Arabic"]["EnteredBy"] = "";
	$fieldLabelsinsuranceclaims["Arabic"]["ReceiptNo"] = "??? ???????.";
	$fieldToolTipsinsuranceclaims["Arabic"]["ReceiptNo"] = "";
	$fieldLabelsinsuranceclaims["Arabic"]["Remarks"] = "???????";
	$fieldToolTipsinsuranceclaims["Arabic"]["Remarks"] = "";
	$fieldLabelsinsuranceclaims["Arabic"]["insurer"] = "???? ???????";
	$fieldToolTipsinsuranceclaims["Arabic"]["insurer"] = "";
	$fieldLabelsinsuranceclaims["Arabic"]["Date"] = "?????";
	$fieldToolTipsinsuranceclaims["Arabic"]["Date"] = "";
	if (count($fieldToolTipsinsuranceclaims["Arabic"]))
		$tdatainsuranceclaims[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsinsuranceclaims["Chinese"] = array();
	$fieldToolTipsinsuranceclaims["Chinese"] = array();
	$pageTitlesinsuranceclaims["Chinese"] = array();
	$fieldLabelsinsuranceclaims["Chinese"]["Id"] = "ID";
	$fieldToolTipsinsuranceclaims["Chinese"]["Id"] = "";
	$fieldLabelsinsuranceclaims["Chinese"]["SysDate"] = "????";
	$fieldToolTipsinsuranceclaims["Chinese"]["SysDate"] = "";
	$fieldLabelsinsuranceclaims["Chinese"]["Fleet"] = "??";
	$fieldToolTipsinsuranceclaims["Chinese"]["Fleet"] = "";
	$fieldLabelsinsuranceclaims["Chinese"]["Type"] = "??";
	$fieldToolTipsinsuranceclaims["Chinese"]["Type"] = "";
	$fieldLabelsinsuranceclaims["Chinese"]["VehicleNo"] = "????";
	$fieldToolTipsinsuranceclaims["Chinese"]["VehicleNo"] = "";
	$fieldLabelsinsuranceclaims["Chinese"]["AccidentDate"] = "????";
	$fieldToolTipsinsuranceclaims["Chinese"]["AccidentDate"] = "";
	$fieldLabelsinsuranceclaims["Chinese"]["Claim"] = "??";
	$fieldToolTipsinsuranceclaims["Chinese"]["Claim"] = "";
	$fieldLabelsinsuranceclaims["Chinese"]["EnteredBy"] = "???";
	$fieldToolTipsinsuranceclaims["Chinese"]["EnteredBy"] = "";
	$fieldLabelsinsuranceclaims["Chinese"]["ReceiptNo"] = "????";
	$fieldToolTipsinsuranceclaims["Chinese"]["ReceiptNo"] = "";
	$fieldLabelsinsuranceclaims["Chinese"]["Remarks"] = "??";
	$fieldToolTipsinsuranceclaims["Chinese"]["Remarks"] = "";
	$fieldLabelsinsuranceclaims["Chinese"]["insurer"] = "????";
	$fieldToolTipsinsuranceclaims["Chinese"]["insurer"] = "";
	$fieldLabelsinsuranceclaims["Chinese"]["Date"] = "??";
	$fieldToolTipsinsuranceclaims["Chinese"]["Date"] = "";
	if (count($fieldToolTipsinsuranceclaims["Chinese"]))
		$tdatainsuranceclaims[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsinsuranceclaims["French"] = array();
	$fieldToolTipsinsuranceclaims["French"] = array();
	$pageTitlesinsuranceclaims["French"] = array();
	$fieldLabelsinsuranceclaims["French"]["Id"] = "ID";
	$fieldToolTipsinsuranceclaims["French"]["Id"] = "";
	$fieldLabelsinsuranceclaims["French"]["SysDate"] = "Date du système";
	$fieldToolTipsinsuranceclaims["French"]["SysDate"] = "";
	$fieldLabelsinsuranceclaims["French"]["Fleet"] = "Flotte";
	$fieldToolTipsinsuranceclaims["French"]["Fleet"] = "";
	$fieldLabelsinsuranceclaims["French"]["Type"] = "Type";
	$fieldToolTipsinsuranceclaims["French"]["Type"] = "";
	$fieldLabelsinsuranceclaims["French"]["VehicleNo"] = "Numéro de véhicule";
	$fieldToolTipsinsuranceclaims["French"]["VehicleNo"] = "";
	$fieldLabelsinsuranceclaims["French"]["AccidentDate"] = "Références d'accidents";
	$fieldToolTipsinsuranceclaims["French"]["AccidentDate"] = "";
	$fieldLabelsinsuranceclaims["French"]["Claim"] = "revendication";
	$fieldToolTipsinsuranceclaims["French"]["Claim"] = "";
	$fieldLabelsinsuranceclaims["French"]["EnteredBy"] = "Entré par";
	$fieldToolTipsinsuranceclaims["French"]["EnteredBy"] = "";
	$fieldLabelsinsuranceclaims["French"]["ReceiptNo"] = "No de réception";
	$fieldToolTipsinsuranceclaims["French"]["ReceiptNo"] = "";
	$fieldLabelsinsuranceclaims["French"]["Remarks"] = "Remarques";
	$fieldToolTipsinsuranceclaims["French"]["Remarks"] = "";
	$fieldLabelsinsuranceclaims["French"]["insurer"] = "Assureur";
	$fieldToolTipsinsuranceclaims["French"]["insurer"] = "";
	$fieldLabelsinsuranceclaims["French"]["Date"] = "date";
	$fieldToolTipsinsuranceclaims["French"]["Date"] = "";
	if (count($fieldToolTipsinsuranceclaims["French"]))
		$tdatainsuranceclaims[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsinsuranceclaims["German"] = array();
	$fieldToolTipsinsuranceclaims["German"] = array();
	$pageTitlesinsuranceclaims["German"] = array();
	$fieldLabelsinsuranceclaims["German"]["Id"] = "ICH WÜRDE";
	$fieldToolTipsinsuranceclaims["German"]["Id"] = "";
	$fieldLabelsinsuranceclaims["German"]["SysDate"] = "Systemdatum";
	$fieldToolTipsinsuranceclaims["German"]["SysDate"] = "";
	$fieldLabelsinsuranceclaims["German"]["Fleet"] = "Flotte";
	$fieldToolTipsinsuranceclaims["German"]["Fleet"] = "";
	$fieldLabelsinsuranceclaims["German"]["Type"] = "Art";
	$fieldToolTipsinsuranceclaims["German"]["Type"] = "";
	$fieldLabelsinsuranceclaims["German"]["VehicleNo"] = "Fahrzeug Nr";
	$fieldToolTipsinsuranceclaims["German"]["VehicleNo"] = "";
	$fieldLabelsinsuranceclaims["German"]["AccidentDate"] = "Unfallverweis";
	$fieldToolTipsinsuranceclaims["German"]["AccidentDate"] = "";
	$fieldLabelsinsuranceclaims["German"]["Claim"] = "Anspruch";
	$fieldToolTipsinsuranceclaims["German"]["Claim"] = "";
	$fieldLabelsinsuranceclaims["German"]["EnteredBy"] = "Betreten von";
	$fieldToolTipsinsuranceclaims["German"]["EnteredBy"] = "";
	$fieldLabelsinsuranceclaims["German"]["ReceiptNo"] = "Beleg-Nr.";
	$fieldToolTipsinsuranceclaims["German"]["ReceiptNo"] = "";
	$fieldLabelsinsuranceclaims["German"]["Remarks"] = "Bemerkungen";
	$fieldToolTipsinsuranceclaims["German"]["Remarks"] = "";
	$fieldLabelsinsuranceclaims["German"]["insurer"] = "Versicherer";
	$fieldToolTipsinsuranceclaims["German"]["insurer"] = "";
	$fieldLabelsinsuranceclaims["German"]["Date"] = "Datum";
	$fieldToolTipsinsuranceclaims["German"]["Date"] = "";
	if (count($fieldToolTipsinsuranceclaims["German"]))
		$tdatainsuranceclaims[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsinsuranceclaims["Italian"] = array();
	$fieldToolTipsinsuranceclaims["Italian"] = array();
	$pageTitlesinsuranceclaims["Italian"] = array();
	$fieldLabelsinsuranceclaims["Italian"]["Id"] = "ID";
	$fieldToolTipsinsuranceclaims["Italian"]["Id"] = "";
	$fieldLabelsinsuranceclaims["Italian"]["SysDate"] = "Data di sistema";
	$fieldToolTipsinsuranceclaims["Italian"]["SysDate"] = "";
	$fieldLabelsinsuranceclaims["Italian"]["Fleet"] = "Flotta";
	$fieldToolTipsinsuranceclaims["Italian"]["Fleet"] = "";
	$fieldLabelsinsuranceclaims["Italian"]["Type"] = "Digitare";
	$fieldToolTipsinsuranceclaims["Italian"]["Type"] = "";
	$fieldLabelsinsuranceclaims["Italian"]["VehicleNo"] = "Vehicle No";
	$fieldToolTipsinsuranceclaims["Italian"]["VehicleNo"] = "";
	$fieldLabelsinsuranceclaims["Italian"]["AccidentDate"] = "incidenti di riferimento";
	$fieldToolTipsinsuranceclaims["Italian"]["AccidentDate"] = "";
	$fieldLabelsinsuranceclaims["Italian"]["Claim"] = "Richiesta";
	$fieldToolTipsinsuranceclaims["Italian"]["Claim"] = "";
	$fieldLabelsinsuranceclaims["Italian"]["EnteredBy"] = "Inserito da";
	$fieldToolTipsinsuranceclaims["Italian"]["EnteredBy"] = "";
	$fieldLabelsinsuranceclaims["Italian"]["ReceiptNo"] = "Numero di ricevuta.";
	$fieldToolTipsinsuranceclaims["Italian"]["ReceiptNo"] = "";
	$fieldLabelsinsuranceclaims["Italian"]["Remarks"] = "Osservazioni";
	$fieldToolTipsinsuranceclaims["Italian"]["Remarks"] = "";
	$fieldLabelsinsuranceclaims["Italian"]["insurer"] = "Assicuratore";
	$fieldToolTipsinsuranceclaims["Italian"]["insurer"] = "";
	$fieldLabelsinsuranceclaims["Italian"]["Date"] = "Data";
	$fieldToolTipsinsuranceclaims["Italian"]["Date"] = "";
	if (count($fieldToolTipsinsuranceclaims["Italian"]))
		$tdatainsuranceclaims[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsinsuranceclaims["Russian"] = array();
	$fieldToolTipsinsuranceclaims["Russian"] = array();
	$pageTitlesinsuranceclaims["Russian"] = array();
	$fieldLabelsinsuranceclaims["Russian"]["Id"] = "? ??";
	$fieldToolTipsinsuranceclaims["Russian"]["Id"] = "";
	$fieldLabelsinsuranceclaims["Russian"]["SysDate"] = "System Date";
	$fieldToolTipsinsuranceclaims["Russian"]["SysDate"] = "";
	$fieldLabelsinsuranceclaims["Russian"]["Fleet"] = "????";
	$fieldToolTipsinsuranceclaims["Russian"]["Fleet"] = "";
	$fieldLabelsinsuranceclaims["Russian"]["Type"] = "???";
	$fieldToolTipsinsuranceclaims["Russian"]["Type"] = "";
	$fieldLabelsinsuranceclaims["Russian"]["VehicleNo"] = "?????????? ???";
	$fieldToolTipsinsuranceclaims["Russian"]["VehicleNo"] = "";
	$fieldLabelsinsuranceclaims["Russian"]["AccidentDate"] = "?? ?????????? ??????? ??????";
	$fieldToolTipsinsuranceclaims["Russian"]["AccidentDate"] = "";
	$fieldLabelsinsuranceclaims["Russian"]["Claim"] = "??????";
	$fieldToolTipsinsuranceclaims["Russian"]["Claim"] = "";
	$fieldLabelsinsuranceclaims["Russian"]["EnteredBy"] = "??????";
	$fieldToolTipsinsuranceclaims["Russian"]["EnteredBy"] = "";
	$fieldLabelsinsuranceclaims["Russian"]["ReceiptNo"] = "????????? No.";
	$fieldToolTipsinsuranceclaims["Russian"]["ReceiptNo"] = "";
	$fieldLabelsinsuranceclaims["Russian"]["Remarks"] = "?????????";
	$fieldToolTipsinsuranceclaims["Russian"]["Remarks"] = "";
	$fieldLabelsinsuranceclaims["Russian"]["insurer"] = "????????????";
	$fieldToolTipsinsuranceclaims["Russian"]["insurer"] = "";
	$fieldLabelsinsuranceclaims["Russian"]["Date"] = "????";
	$fieldToolTipsinsuranceclaims["Russian"]["Date"] = "";
	if (count($fieldToolTipsinsuranceclaims["Russian"]))
		$tdatainsuranceclaims[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinsuranceclaims["Spanish"] = array();
	$fieldToolTipsinsuranceclaims["Spanish"] = array();
	$pageTitlesinsuranceclaims["Spanish"] = array();
	$fieldLabelsinsuranceclaims["Spanish"]["Id"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipsinsuranceclaims["Spanish"]["Id"] = "";
	$fieldLabelsinsuranceclaims["Spanish"]["SysDate"] = "Fecha del sistema";
	$fieldToolTipsinsuranceclaims["Spanish"]["SysDate"] = "";
	$fieldLabelsinsuranceclaims["Spanish"]["Fleet"] = "Flota";
	$fieldToolTipsinsuranceclaims["Spanish"]["Fleet"] = "";
	$fieldLabelsinsuranceclaims["Spanish"]["Type"] = "Tipo";
	$fieldToolTipsinsuranceclaims["Spanish"]["Type"] = "";
	$fieldLabelsinsuranceclaims["Spanish"]["VehicleNo"] = "Vehículo No";
	$fieldToolTipsinsuranceclaims["Spanish"]["VehicleNo"] = "";
	$fieldLabelsinsuranceclaims["Spanish"]["AccidentDate"] = "Referencia de Accidente";
	$fieldToolTipsinsuranceclaims["Spanish"]["AccidentDate"] = "";
	$fieldLabelsinsuranceclaims["Spanish"]["Claim"] = "Reclamación";
	$fieldToolTipsinsuranceclaims["Spanish"]["Claim"] = "";
	$fieldLabelsinsuranceclaims["Spanish"]["EnteredBy"] = "Introducido por";
	$fieldToolTipsinsuranceclaims["Spanish"]["EnteredBy"] = "";
	$fieldLabelsinsuranceclaims["Spanish"]["ReceiptNo"] = "Nº de recibo";
	$fieldToolTipsinsuranceclaims["Spanish"]["ReceiptNo"] = "";
	$fieldLabelsinsuranceclaims["Spanish"]["Remarks"] = "Observaciones";
	$fieldToolTipsinsuranceclaims["Spanish"]["Remarks"] = "";
	$fieldLabelsinsuranceclaims["Spanish"]["insurer"] = "Asegurador";
	$fieldToolTipsinsuranceclaims["Spanish"]["insurer"] = "";
	$fieldLabelsinsuranceclaims["Spanish"]["Date"] = "Fecha";
	$fieldToolTipsinsuranceclaims["Spanish"]["Date"] = "";
	if (count($fieldToolTipsinsuranceclaims["Spanish"]))
		$tdatainsuranceclaims[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinsuranceclaims[""] = array();
	$fieldToolTipsinsuranceclaims[""] = array();
	$pageTitlesinsuranceclaims[""] = array();
	if (count($fieldToolTipsinsuranceclaims[""]))
		$tdatainsuranceclaims[".isUseToolTips"] = true;
}


	$tdatainsuranceclaims[".NCSearch"] = true;



$tdatainsuranceclaims[".shortTableName"] = "insuranceclaims";
$tdatainsuranceclaims[".nSecOptions"] = 0;
$tdatainsuranceclaims[".recsPerRowPrint"] = 1;
$tdatainsuranceclaims[".mainTableOwnerID"] = "";
$tdatainsuranceclaims[".moveNext"] = 1;
$tdatainsuranceclaims[".entityType"] = 0;

$tdatainsuranceclaims[".strOriginalTableName"] = "insuranceclaims";

		 



$tdatainsuranceclaims[".showAddInPopup"] = false;

$tdatainsuranceclaims[".showEditInPopup"] = false;

$tdatainsuranceclaims[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainsuranceclaims[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainsuranceclaims[".fieldsForRegister"] = array();

	$tdatainsuranceclaims[".listAjax"] = true;

	$tdatainsuranceclaims[".audit"] = false;

	$tdatainsuranceclaims[".locking"] = false;

$tdatainsuranceclaims[".edit"] = true;
$tdatainsuranceclaims[".afterEditAction"] = 1;
$tdatainsuranceclaims[".closePopupAfterEdit"] = 1;
$tdatainsuranceclaims[".afterEditActionDetTable"] = "";

$tdatainsuranceclaims[".add"] = true;
$tdatainsuranceclaims[".afterAddAction"] = 1;
$tdatainsuranceclaims[".closePopupAfterAdd"] = 1;
$tdatainsuranceclaims[".afterAddActionDetTable"] = "";

$tdatainsuranceclaims[".list"] = true;




$tdatainsuranceclaims[".view"] = true;

$tdatainsuranceclaims[".import"] = true;

$tdatainsuranceclaims[".exportTo"] = true;

$tdatainsuranceclaims[".printFriendly"] = true;

$tdatainsuranceclaims[".delete"] = true;

$tdatainsuranceclaims[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatainsuranceclaims[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatainsuranceclaims[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatainsuranceclaims[".searchSaving"] = false;
//

$tdatainsuranceclaims[".showSearchPanel"] = true;
		$tdatainsuranceclaims[".flexibleSearch"] = true;

$tdatainsuranceclaims[".isUseAjaxSuggest"] = true;

$tdatainsuranceclaims[".rowHighlite"] = true;



$tdatainsuranceclaims[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainsuranceclaims[".isUseTimeForSearch"] = false;





$tdatainsuranceclaims[".allSearchFields"] = array();
$tdatainsuranceclaims[".filterFields"] = array();
$tdatainsuranceclaims[".requiredSearchFields"] = array();

$tdatainsuranceclaims[".allSearchFields"][] = "Date";
	$tdatainsuranceclaims[".allSearchFields"][] = "Id";
	$tdatainsuranceclaims[".allSearchFields"][] = "SysDate";
	$tdatainsuranceclaims[".allSearchFields"][] = "VehicleNo";
	$tdatainsuranceclaims[".allSearchFields"][] = "Fleet";
	$tdatainsuranceclaims[".allSearchFields"][] = "Type";
	$tdatainsuranceclaims[".allSearchFields"][] = "AccidentDate";
	$tdatainsuranceclaims[".allSearchFields"][] = "insurer";
	$tdatainsuranceclaims[".allSearchFields"][] = "Claim";
	$tdatainsuranceclaims[".allSearchFields"][] = "ReceiptNo";
	$tdatainsuranceclaims[".allSearchFields"][] = "Remarks";
	$tdatainsuranceclaims[".allSearchFields"][] = "EnteredBy";
	

$tdatainsuranceclaims[".googleLikeFields"] = array();
$tdatainsuranceclaims[".googleLikeFields"][] = "Id";
$tdatainsuranceclaims[".googleLikeFields"][] = "SysDate";
$tdatainsuranceclaims[".googleLikeFields"][] = "Fleet";
$tdatainsuranceclaims[".googleLikeFields"][] = "Type";
$tdatainsuranceclaims[".googleLikeFields"][] = "VehicleNo";
$tdatainsuranceclaims[".googleLikeFields"][] = "AccidentDate";
$tdatainsuranceclaims[".googleLikeFields"][] = "Claim";
$tdatainsuranceclaims[".googleLikeFields"][] = "EnteredBy";
$tdatainsuranceclaims[".googleLikeFields"][] = "ReceiptNo";
$tdatainsuranceclaims[".googleLikeFields"][] = "Remarks";
$tdatainsuranceclaims[".googleLikeFields"][] = "insurer";
$tdatainsuranceclaims[".googleLikeFields"][] = "Date";


$tdatainsuranceclaims[".advSearchFields"] = array();
$tdatainsuranceclaims[".advSearchFields"][] = "Date";
$tdatainsuranceclaims[".advSearchFields"][] = "Id";
$tdatainsuranceclaims[".advSearchFields"][] = "SysDate";
$tdatainsuranceclaims[".advSearchFields"][] = "VehicleNo";
$tdatainsuranceclaims[".advSearchFields"][] = "Fleet";
$tdatainsuranceclaims[".advSearchFields"][] = "Type";
$tdatainsuranceclaims[".advSearchFields"][] = "AccidentDate";
$tdatainsuranceclaims[".advSearchFields"][] = "insurer";
$tdatainsuranceclaims[".advSearchFields"][] = "Claim";
$tdatainsuranceclaims[".advSearchFields"][] = "ReceiptNo";
$tdatainsuranceclaims[".advSearchFields"][] = "Remarks";
$tdatainsuranceclaims[".advSearchFields"][] = "EnteredBy";

$tdatainsuranceclaims[".tableType"] = "list";

$tdatainsuranceclaims[".printerPageOrientation"] = 0;
$tdatainsuranceclaims[".nPrinterPageScale"] = 100;

$tdatainsuranceclaims[".nPrinterSplitRecords"] = 40;

$tdatainsuranceclaims[".nPrinterPDFSplitRecords"] = 40;



$tdatainsuranceclaims[".geocodingEnabled"] = false;





$tdatainsuranceclaims[".listGridLayout"] = 3;


$tdatainsuranceclaims[".isResizeColumns"] = true;



// view page pdf
$tdatainsuranceclaims[".isViewPagePDF"] = true;
$tdatainsuranceclaims[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatainsuranceclaims[".isPrinterPagePDF"] = true;
$tdatainsuranceclaims[".nPrinterPagePDFScale"] = 100;


$tdatainsuranceclaims[".pageSize"] = 20;

$tdatainsuranceclaims[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainsuranceclaims[".strOrderBy"] = $tstrOrderBy;

$tdatainsuranceclaims[".orderindexes"] = array();

$tdatainsuranceclaims[".sqlHead"] = "SELECT Id,  	`SysDate`,  	Fleet,  	`Type`,  	VehicleNo,  	AccidentDate,  	Claim,  	EnteredBy,  	ReceiptNo,  	Remarks,  	insurer,  	`Date`";
$tdatainsuranceclaims[".sqlFrom"] = "FROM insuranceclaims";
$tdatainsuranceclaims[".sqlWhereExpr"] = "";
$tdatainsuranceclaims[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatainsuranceclaims[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainsuranceclaims[".arrGroupsPerPage"] = $arrGPP;

$tdatainsuranceclaims[".highlightSearchResults"] = true;

$tableKeysinsuranceclaims = array();
$tableKeysinsuranceclaims[] = "Id";
$tdatainsuranceclaims[".Keys"] = $tableKeysinsuranceclaims;

$tdatainsuranceclaims[".listFields"] = array();
$tdatainsuranceclaims[".listFields"][] = "Id";
$tdatainsuranceclaims[".listFields"][] = "Date";
$tdatainsuranceclaims[".listFields"][] = "VehicleNo";
$tdatainsuranceclaims[".listFields"][] = "Fleet";
$tdatainsuranceclaims[".listFields"][] = "Type";
$tdatainsuranceclaims[".listFields"][] = "AccidentDate";
$tdatainsuranceclaims[".listFields"][] = "insurer";
$tdatainsuranceclaims[".listFields"][] = "Claim";
$tdatainsuranceclaims[".listFields"][] = "ReceiptNo";
$tdatainsuranceclaims[".listFields"][] = "Remarks";
$tdatainsuranceclaims[".listFields"][] = "EnteredBy";

$tdatainsuranceclaims[".hideMobileList"] = array();


$tdatainsuranceclaims[".viewFields"] = array();
$tdatainsuranceclaims[".viewFields"][] = "Date";
$tdatainsuranceclaims[".viewFields"][] = "Id";
$tdatainsuranceclaims[".viewFields"][] = "SysDate";
$tdatainsuranceclaims[".viewFields"][] = "VehicleNo";
$tdatainsuranceclaims[".viewFields"][] = "Fleet";
$tdatainsuranceclaims[".viewFields"][] = "Type";
$tdatainsuranceclaims[".viewFields"][] = "AccidentDate";
$tdatainsuranceclaims[".viewFields"][] = "insurer";
$tdatainsuranceclaims[".viewFields"][] = "Claim";
$tdatainsuranceclaims[".viewFields"][] = "ReceiptNo";
$tdatainsuranceclaims[".viewFields"][] = "Remarks";
$tdatainsuranceclaims[".viewFields"][] = "EnteredBy";

$tdatainsuranceclaims[".addFields"] = array();
$tdatainsuranceclaims[".addFields"][] = "Fleet";
$tdatainsuranceclaims[".addFields"][] = "VehicleNo";
$tdatainsuranceclaims[".addFields"][] = "Type";
$tdatainsuranceclaims[".addFields"][] = "Date";
$tdatainsuranceclaims[".addFields"][] = "AccidentDate";
$tdatainsuranceclaims[".addFields"][] = "insurer";
$tdatainsuranceclaims[".addFields"][] = "Claim";
$tdatainsuranceclaims[".addFields"][] = "ReceiptNo";
$tdatainsuranceclaims[".addFields"][] = "Remarks";
$tdatainsuranceclaims[".addFields"][] = "EnteredBy";
$tdatainsuranceclaims[".addFields"][] = "SysDate";

$tdatainsuranceclaims[".masterListFields"] = array();
$tdatainsuranceclaims[".masterListFields"][] = "Date";
$tdatainsuranceclaims[".masterListFields"][] = "Id";
$tdatainsuranceclaims[".masterListFields"][] = "SysDate";
$tdatainsuranceclaims[".masterListFields"][] = "VehicleNo";
$tdatainsuranceclaims[".masterListFields"][] = "Fleet";
$tdatainsuranceclaims[".masterListFields"][] = "Type";
$tdatainsuranceclaims[".masterListFields"][] = "AccidentDate";
$tdatainsuranceclaims[".masterListFields"][] = "insurer";
$tdatainsuranceclaims[".masterListFields"][] = "Claim";
$tdatainsuranceclaims[".masterListFields"][] = "ReceiptNo";
$tdatainsuranceclaims[".masterListFields"][] = "Remarks";
$tdatainsuranceclaims[".masterListFields"][] = "EnteredBy";

$tdatainsuranceclaims[".inlineAddFields"] = array();

$tdatainsuranceclaims[".editFields"] = array();
$tdatainsuranceclaims[".editFields"][] = "Fleet";
$tdatainsuranceclaims[".editFields"][] = "VehicleNo";
$tdatainsuranceclaims[".editFields"][] = "Type";
$tdatainsuranceclaims[".editFields"][] = "Date";
$tdatainsuranceclaims[".editFields"][] = "AccidentDate";
$tdatainsuranceclaims[".editFields"][] = "insurer";
$tdatainsuranceclaims[".editFields"][] = "Claim";
$tdatainsuranceclaims[".editFields"][] = "ReceiptNo";
$tdatainsuranceclaims[".editFields"][] = "Remarks";
$tdatainsuranceclaims[".editFields"][] = "EnteredBy";
$tdatainsuranceclaims[".editFields"][] = "SysDate";

$tdatainsuranceclaims[".inlineEditFields"] = array();

$tdatainsuranceclaims[".updateSelectedFields"] = array();
$tdatainsuranceclaims[".updateSelectedFields"][] = "Fleet";
$tdatainsuranceclaims[".updateSelectedFields"][] = "VehicleNo";
$tdatainsuranceclaims[".updateSelectedFields"][] = "Type";
$tdatainsuranceclaims[".updateSelectedFields"][] = "Date";
$tdatainsuranceclaims[".updateSelectedFields"][] = "AccidentDate";
$tdatainsuranceclaims[".updateSelectedFields"][] = "insurer";
$tdatainsuranceclaims[".updateSelectedFields"][] = "Claim";
$tdatainsuranceclaims[".updateSelectedFields"][] = "ReceiptNo";
$tdatainsuranceclaims[".updateSelectedFields"][] = "Remarks";
$tdatainsuranceclaims[".updateSelectedFields"][] = "EnteredBy";
$tdatainsuranceclaims[".updateSelectedFields"][] = "SysDate";


$tdatainsuranceclaims[".exportFields"] = array();
$tdatainsuranceclaims[".exportFields"][] = "Date";
$tdatainsuranceclaims[".exportFields"][] = "Id";
$tdatainsuranceclaims[".exportFields"][] = "SysDate";
$tdatainsuranceclaims[".exportFields"][] = "VehicleNo";
$tdatainsuranceclaims[".exportFields"][] = "Fleet";
$tdatainsuranceclaims[".exportFields"][] = "Type";
$tdatainsuranceclaims[".exportFields"][] = "AccidentDate";
$tdatainsuranceclaims[".exportFields"][] = "insurer";
$tdatainsuranceclaims[".exportFields"][] = "Claim";
$tdatainsuranceclaims[".exportFields"][] = "ReceiptNo";
$tdatainsuranceclaims[".exportFields"][] = "Remarks";
$tdatainsuranceclaims[".exportFields"][] = "EnteredBy";

$tdatainsuranceclaims[".importFields"] = array();
$tdatainsuranceclaims[".importFields"][] = "Id";
$tdatainsuranceclaims[".importFields"][] = "SysDate";
$tdatainsuranceclaims[".importFields"][] = "Fleet";
$tdatainsuranceclaims[".importFields"][] = "Type";
$tdatainsuranceclaims[".importFields"][] = "VehicleNo";
$tdatainsuranceclaims[".importFields"][] = "AccidentDate";
$tdatainsuranceclaims[".importFields"][] = "Claim";
$tdatainsuranceclaims[".importFields"][] = "EnteredBy";
$tdatainsuranceclaims[".importFields"][] = "ReceiptNo";
$tdatainsuranceclaims[".importFields"][] = "Remarks";
$tdatainsuranceclaims[".importFields"][] = "insurer";
$tdatainsuranceclaims[".importFields"][] = "Date";

$tdatainsuranceclaims[".printFields"] = array();
$tdatainsuranceclaims[".printFields"][] = "Date";
$tdatainsuranceclaims[".printFields"][] = "Id";
$tdatainsuranceclaims[".printFields"][] = "SysDate";
$tdatainsuranceclaims[".printFields"][] = "VehicleNo";
$tdatainsuranceclaims[".printFields"][] = "Fleet";
$tdatainsuranceclaims[".printFields"][] = "Type";
$tdatainsuranceclaims[".printFields"][] = "AccidentDate";
$tdatainsuranceclaims[".printFields"][] = "insurer";
$tdatainsuranceclaims[".printFields"][] = "Claim";
$tdatainsuranceclaims[".printFields"][] = "ReceiptNo";
$tdatainsuranceclaims[".printFields"][] = "Remarks";
$tdatainsuranceclaims[".printFields"][] = "EnteredBy";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "insuranceclaims";
	$fdata["Label"] = GetFieldLabel("insuranceclaims","Id");
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




	$tdatainsuranceclaims["Id"] = $fdata;
//	SysDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SysDate";
	$fdata["GoodName"] = "SysDate";
	$fdata["ownerTable"] = "insuranceclaims";
	$fdata["Label"] = GetFieldLabel("insuranceclaims","SysDate");
	$fdata["FieldType"] = 200;

	
	
	
										
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SysDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`SysDate`";

	
	
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




	$tdatainsuranceclaims["SysDate"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "insuranceclaims";
	$fdata["Label"] = GetFieldLabel("insuranceclaims","Fleet");
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

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "VehicleNo";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatainsuranceclaims["Fleet"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "insuranceclaims";
	$fdata["Label"] = GetFieldLabel("insuranceclaims","Type");
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




	$tdatainsuranceclaims["Type"] = $fdata;
//	VehicleNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "VehicleNo";
	$fdata["GoodName"] = "VehicleNo";
	$fdata["ownerTable"] = "insuranceclaims";
	$fdata["Label"] = GetFieldLabel("insuranceclaims","VehicleNo");
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
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Type", 'lookupF'=>"Type");
	$edata["LCType"] = 0;

	
		
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




	$tdatainsuranceclaims["VehicleNo"] = $fdata;
//	AccidentDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AccidentDate";
	$fdata["GoodName"] = "AccidentDate";
	$fdata["ownerTable"] = "insuranceclaims";
	$fdata["Label"] = GetFieldLabel("insuranceclaims","AccidentDate");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AccidentDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccidentDate";

	
	
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
	$edata["LookupTable"] = "accidents";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Id";

	
	$edata["LookupOrderBy"] = "Id";

	
	
	
	

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatainsuranceclaims["AccidentDate"] = $fdata;
//	Claim
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Claim";
	$fdata["GoodName"] = "Claim";
	$fdata["ownerTable"] = "insuranceclaims";
	$fdata["Label"] = GetFieldLabel("insuranceclaims","Claim");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Claim";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Claim";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatainsuranceclaims["Claim"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "insuranceclaims";
	$fdata["Label"] = GetFieldLabel("insuranceclaims","EnteredBy");
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




	$tdatainsuranceclaims["EnteredBy"] = $fdata;
//	ReceiptNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ReceiptNo";
	$fdata["GoodName"] = "ReceiptNo";
	$fdata["ownerTable"] = "insuranceclaims";
	$fdata["Label"] = GetFieldLabel("insuranceclaims","ReceiptNo");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ReceiptNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ReceiptNo";

	
	
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




	$tdatainsuranceclaims["ReceiptNo"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "insuranceclaims";
	$fdata["Label"] = GetFieldLabel("insuranceclaims","Remarks");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Remarks";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Remarks";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdatainsuranceclaims["Remarks"] = $fdata;
//	insurer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "insurer";
	$fdata["GoodName"] = "insurer";
	$fdata["ownerTable"] = "insuranceclaims";
	$fdata["Label"] = GetFieldLabel("insuranceclaims","insurer");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "insurer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "insurer";

	
	
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
	$edata["LookupTable"] = "insurancecompany";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	
	$edata["LookupOrderBy"] = "Name";

	
	
	
	

	
	
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




	$tdatainsuranceclaims["insurer"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "insuranceclaims";
	$fdata["Label"] = GetFieldLabel("insuranceclaims","Date");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Date`";

	
	
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




	$tdatainsuranceclaims["Date"] = $fdata;


$tables_data["insuranceclaims"]=&$tdatainsuranceclaims;
$field_labels["insuranceclaims"] = &$fieldLabelsinsuranceclaims;
$fieldToolTips["insuranceclaims"] = &$fieldToolTipsinsuranceclaims;
$page_titles["insuranceclaims"] = &$pageTitlesinsuranceclaims;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["insuranceclaims"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["insuranceclaims"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_insuranceclaims()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  	`SysDate`,  	Fleet,  	`Type`,  	VehicleNo,  	AccidentDate,  	Claim,  	EnteredBy,  	ReceiptNo,  	Remarks,  	insurer,  	`Date`";
$proto0["m_strFrom"] = "FROM insuranceclaims";
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
	"m_strTable" => "insuranceclaims",
	"m_srcTableName" => "insuranceclaims"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "insuranceclaims";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SysDate",
	"m_strTable" => "insuranceclaims",
	"m_srcTableName" => "insuranceclaims"
));

$proto8["m_sql"] = "`SysDate`";
$proto8["m_srcTableName"] = "insuranceclaims";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "insuranceclaims",
	"m_srcTableName" => "insuranceclaims"
));

$proto10["m_sql"] = "Fleet";
$proto10["m_srcTableName"] = "insuranceclaims";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "insuranceclaims",
	"m_srcTableName" => "insuranceclaims"
));

$proto12["m_sql"] = "`Type`";
$proto12["m_srcTableName"] = "insuranceclaims";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "VehicleNo",
	"m_strTable" => "insuranceclaims",
	"m_srcTableName" => "insuranceclaims"
));

$proto14["m_sql"] = "VehicleNo";
$proto14["m_srcTableName"] = "insuranceclaims";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "AccidentDate",
	"m_strTable" => "insuranceclaims",
	"m_srcTableName" => "insuranceclaims"
));

$proto16["m_sql"] = "AccidentDate";
$proto16["m_srcTableName"] = "insuranceclaims";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Claim",
	"m_strTable" => "insuranceclaims",
	"m_srcTableName" => "insuranceclaims"
));

$proto18["m_sql"] = "Claim";
$proto18["m_srcTableName"] = "insuranceclaims";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "insuranceclaims",
	"m_srcTableName" => "insuranceclaims"
));

$proto20["m_sql"] = "EnteredBy";
$proto20["m_srcTableName"] = "insuranceclaims";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ReceiptNo",
	"m_strTable" => "insuranceclaims",
	"m_srcTableName" => "insuranceclaims"
));

$proto22["m_sql"] = "ReceiptNo";
$proto22["m_srcTableName"] = "insuranceclaims";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "insuranceclaims",
	"m_srcTableName" => "insuranceclaims"
));

$proto24["m_sql"] = "Remarks";
$proto24["m_srcTableName"] = "insuranceclaims";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "insurer",
	"m_strTable" => "insuranceclaims",
	"m_srcTableName" => "insuranceclaims"
));

$proto26["m_sql"] = "insurer";
$proto26["m_srcTableName"] = "insuranceclaims";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "insuranceclaims",
	"m_srcTableName" => "insuranceclaims"
));

$proto28["m_sql"] = "`Date`";
$proto28["m_srcTableName"] = "insuranceclaims";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "insuranceclaims";
$proto31["m_srcTableName"] = "insuranceclaims";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "Id";
$proto31["m_columns"][] = "SysDate";
$proto31["m_columns"][] = "Fleet";
$proto31["m_columns"][] = "Type";
$proto31["m_columns"][] = "VehicleNo";
$proto31["m_columns"][] = "AccidentDate";
$proto31["m_columns"][] = "Claim";
$proto31["m_columns"][] = "EnteredBy";
$proto31["m_columns"][] = "ReceiptNo";
$proto31["m_columns"][] = "Remarks";
$proto31["m_columns"][] = "insurer";
$proto31["m_columns"][] = "Date";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "insuranceclaims";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "insuranceclaims";
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
$proto0["m_srcTableName"]="insuranceclaims";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_insuranceclaims = createSqlQuery_insuranceclaims();


	
					
;

												

$tdatainsuranceclaims[".sqlquery"] = $queryData_insuranceclaims;

$tableEvents["insuranceclaims"] = new eventsBase;
$tdatainsuranceclaims[".hasEvents"] = false;

?>