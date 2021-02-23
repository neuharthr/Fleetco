<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamaintenenace = array();
	$tdatamaintenenace[".truncateText"] = true;
	$tdatamaintenenace[".NumberOfChars"] = 80;
	$tdatamaintenenace[".ShortName"] = "maintenenace";
	$tdatamaintenenace[".OwnerID"] = "";
	$tdatamaintenenace[".OriginalTable"] = "maintenenace";

//	field labels
$fieldLabelsmaintenenace = array();
$fieldToolTipsmaintenenace = array();
$pageTitlesmaintenenace = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmaintenenace["English"] = array();
	$fieldToolTipsmaintenenace["English"] = array();
	$pageTitlesmaintenenace["English"] = array();
	$fieldLabelsmaintenenace["English"]["Id"] = "ID";
	$fieldToolTipsmaintenenace["English"]["Id"] = "";
	$fieldLabelsmaintenenace["English"]["Fleet"] = "Fleet";
	$fieldToolTipsmaintenenace["English"]["Fleet"] = "";
	$fieldLabelsmaintenenace["English"]["Vehicle"] = "Vehicle";
	$fieldToolTipsmaintenenace["English"]["Vehicle"] = "";
	$fieldLabelsmaintenenace["English"]["Type"] = "Ft.Type";
	$fieldToolTipsmaintenenace["English"]["Type"] = "";
	$fieldLabelsmaintenenace["English"]["Supplier"] = "Supplier";
	$fieldToolTipsmaintenenace["English"]["Supplier"] = "";
	$fieldLabelsmaintenenace["English"]["Cost"] = "Cost";
	$fieldToolTipsmaintenenace["English"]["Cost"] = "";
	$fieldLabelsmaintenenace["English"]["Remarks"] = "Remarks";
	$fieldToolTipsmaintenenace["English"]["Remarks"] = "";
	$fieldLabelsmaintenenace["English"]["RefNo"] = "PO No";
	$fieldToolTipsmaintenenace["English"]["RefNo"] = "";
	$fieldLabelsmaintenenace["English"]["SysDate"] = "Sys Date";
	$fieldToolTipsmaintenenace["English"]["SysDate"] = "";
	$fieldLabelsmaintenenace["English"]["Date"] = "Date";
	$fieldToolTipsmaintenenace["English"]["Date"] = "";
	$fieldLabelsmaintenenace["English"]["EnteredBy"] = "Entered By";
	$fieldToolTipsmaintenenace["English"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace["English"]["Approval"] = "Edited By";
	$fieldToolTipsmaintenenace["English"]["Approval"] = "";
	$fieldLabelsmaintenenace["English"]["MeterReading"] = "Meter Reading";
	$fieldToolTipsmaintenenace["English"]["MeterReading"] = "";
	$fieldLabelsmaintenenace["English"]["AccidentRef"] = "Accident Ref";
	$fieldToolTipsmaintenenace["English"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace["English"]["PaymentVoucher"] = "Pay. Vou. No.";
	$fieldToolTipsmaintenenace["English"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace["English"]["MaintType"] = "Maint. Type";
	$fieldToolTipsmaintenenace["English"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace["English"]))
		$tdatamaintenenace[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsmaintenenace["Afrikaans"] = array();
	$fieldToolTipsmaintenenace["Afrikaans"] = array();
	$pageTitlesmaintenenace["Afrikaans"] = array();
	$fieldLabelsmaintenenace["Afrikaans"]["Id"] = "ID";
	$fieldToolTipsmaintenenace["Afrikaans"]["Id"] = "";
	$fieldLabelsmaintenenace["Afrikaans"]["Fleet"] = "vloot";
	$fieldToolTipsmaintenenace["Afrikaans"]["Fleet"] = "";
	$fieldLabelsmaintenenace["Afrikaans"]["Vehicle"] = "voertuig";
	$fieldToolTipsmaintenenace["Afrikaans"]["Vehicle"] = "";
	$fieldLabelsmaintenenace["Afrikaans"]["Type"] = "vloot tipe";
	$fieldToolTipsmaintenenace["Afrikaans"]["Type"] = "";
	$fieldLabelsmaintenenace["Afrikaans"]["Supplier"] = "verskaffer";
	$fieldToolTipsmaintenenace["Afrikaans"]["Supplier"] = "";
	$fieldLabelsmaintenenace["Afrikaans"]["Cost"] = "koste";
	$fieldToolTipsmaintenenace["Afrikaans"]["Cost"] = "";
	$fieldLabelsmaintenenace["Afrikaans"]["Remarks"] = "opmerkings";
	$fieldToolTipsmaintenenace["Afrikaans"]["Remarks"] = "";
	$fieldLabelsmaintenenace["Afrikaans"]["RefNo"] = "Bestelling nommer";
	$fieldToolTipsmaintenenace["Afrikaans"]["RefNo"] = "";
	$fieldLabelsmaintenenace["Afrikaans"]["SysDate"] = "stelsel Datum";
	$fieldToolTipsmaintenenace["Afrikaans"]["SysDate"] = "";
	$fieldLabelsmaintenenace["Afrikaans"]["Date"] = "datum";
	$fieldToolTipsmaintenenace["Afrikaans"]["Date"] = "";
	$fieldLabelsmaintenenace["Afrikaans"]["EnteredBy"] = "aangegaan deur";
	$fieldToolTipsmaintenenace["Afrikaans"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace["Afrikaans"]["Approval"] = "geredigeer deur";
	$fieldToolTipsmaintenenace["Afrikaans"]["Approval"] = "";
	$fieldLabelsmaintenenace["Afrikaans"]["MeterReading"] = "meterlesing";
	$fieldToolTipsmaintenenace["Afrikaans"]["MeterReading"] = "";
	$fieldLabelsmaintenenace["Afrikaans"]["AccidentRef"] = "ongeluk Verw";
	$fieldToolTipsmaintenenace["Afrikaans"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace["Afrikaans"]["PaymentVoucher"] = "Betaling Voucher No.";
	$fieldToolTipsmaintenenace["Afrikaans"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace["Afrikaans"]["MaintType"] = "Onderhoud Tipe";
	$fieldToolTipsmaintenenace["Afrikaans"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace["Afrikaans"]))
		$tdatamaintenenace[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsmaintenenace["Arabic"] = array();
	$fieldToolTipsmaintenenace["Arabic"] = array();
	$pageTitlesmaintenenace["Arabic"] = array();
	$fieldLabelsmaintenenace["Arabic"]["Id"] = "???? ?????";
	$fieldToolTipsmaintenenace["Arabic"]["Id"] = "";
	$fieldLabelsmaintenenace["Arabic"]["Fleet"] = "?????";
	$fieldToolTipsmaintenenace["Arabic"]["Fleet"] = "";
	$fieldLabelsmaintenenace["Arabic"]["Vehicle"] = "?????";
	$fieldToolTipsmaintenenace["Arabic"]["Vehicle"] = "";
	$fieldLabelsmaintenenace["Arabic"]["Type"] = "??? ?????";
	$fieldToolTipsmaintenenace["Arabic"]["Type"] = "";
	$fieldLabelsmaintenenace["Arabic"]["Supplier"] = "??????";
	$fieldToolTipsmaintenenace["Arabic"]["Supplier"] = "";
	$fieldLabelsmaintenenace["Arabic"]["Cost"] = "????";
	$fieldToolTipsmaintenenace["Arabic"]["Cost"] = "";
	$fieldLabelsmaintenenace["Arabic"]["Remarks"] = "???????";
	$fieldToolTipsmaintenenace["Arabic"]["Remarks"] = "";
	$fieldLabelsmaintenenace["Arabic"]["RefNo"] = "??? ??? ??????";
	$fieldToolTipsmaintenenace["Arabic"]["RefNo"] = "";
	$fieldLabelsmaintenenace["Arabic"]["SysDate"] = "????? ??????";
	$fieldToolTipsmaintenenace["Arabic"]["SysDate"] = "";
	$fieldLabelsmaintenenace["Arabic"]["Date"] = "?????";
	$fieldToolTipsmaintenenace["Arabic"]["Date"] = "";
	$fieldLabelsmaintenenace["Arabic"]["EnteredBy"] = "?? ?????? ??????";
	$fieldToolTipsmaintenenace["Arabic"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace["Arabic"]["Approval"] = "???? ??????";
	$fieldToolTipsmaintenenace["Arabic"]["Approval"] = "";
	$fieldLabelsmaintenenace["Arabic"]["MeterReading"] = "????? ??????";
	$fieldToolTipsmaintenenace["Arabic"]["MeterReading"] = "";
	$fieldLabelsmaintenenace["Arabic"]["AccidentRef"] = "?????? ???????";
	$fieldToolTipsmaintenenace["Arabic"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace["Arabic"]["PaymentVoucher"] = "??? ????? ???";
	$fieldToolTipsmaintenenace["Arabic"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace["Arabic"]["MaintType"] = "??? ???????";
	$fieldToolTipsmaintenenace["Arabic"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace["Arabic"]))
		$tdatamaintenenace[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsmaintenenace["Chinese"] = array();
	$fieldToolTipsmaintenenace["Chinese"] = array();
	$pageTitlesmaintenenace["Chinese"] = array();
	$fieldLabelsmaintenenace["Chinese"]["Id"] = "ID";
	$fieldToolTipsmaintenenace["Chinese"]["Id"] = "";
	$fieldLabelsmaintenenace["Chinese"]["Fleet"] = "??";
	$fieldToolTipsmaintenenace["Chinese"]["Fleet"] = "";
	$fieldLabelsmaintenenace["Chinese"]["Vehicle"] = "??";
	$fieldToolTipsmaintenenace["Chinese"]["Vehicle"] = "";
	$fieldLabelsmaintenenace["Chinese"]["Type"] = "????";
	$fieldToolTipsmaintenenace["Chinese"]["Type"] = "";
	$fieldLabelsmaintenenace["Chinese"]["Supplier"] = "???";
	$fieldToolTipsmaintenenace["Chinese"]["Supplier"] = "";
	$fieldLabelsmaintenenace["Chinese"]["Cost"] = "??";
	$fieldToolTipsmaintenenace["Chinese"]["Cost"] = "";
	$fieldLabelsmaintenenace["Chinese"]["Remarks"] = "??";
	$fieldToolTipsmaintenenace["Chinese"]["Remarks"] = "";
	$fieldLabelsmaintenenace["Chinese"]["RefNo"] = "?????";
	$fieldToolTipsmaintenenace["Chinese"]["RefNo"] = "";
	$fieldLabelsmaintenenace["Chinese"]["SysDate"] = "????";
	$fieldToolTipsmaintenenace["Chinese"]["SysDate"] = "";
	$fieldLabelsmaintenenace["Chinese"]["Date"] = "??";
	$fieldToolTipsmaintenenace["Chinese"]["Date"] = "";
	$fieldLabelsmaintenenace["Chinese"]["EnteredBy"] = "???";
	$fieldToolTipsmaintenenace["Chinese"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace["Chinese"]["Approval"] = "??";
	$fieldToolTipsmaintenenace["Chinese"]["Approval"] = "";
	$fieldLabelsmaintenenace["Chinese"]["MeterReading"] = "????";
	$fieldToolTipsmaintenenace["Chinese"]["MeterReading"] = "";
	$fieldLabelsmaintenenace["Chinese"]["AccidentRef"] = "????";
	$fieldToolTipsmaintenenace["Chinese"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace["Chinese"]["PaymentVoucher"] = "?????";
	$fieldToolTipsmaintenenace["Chinese"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace["Chinese"]["MaintType"] = "????";
	$fieldToolTipsmaintenenace["Chinese"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace["Chinese"]))
		$tdatamaintenenace[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsmaintenenace["French"] = array();
	$fieldToolTipsmaintenenace["French"] = array();
	$pageTitlesmaintenenace["French"] = array();
	$fieldLabelsmaintenenace["French"]["Id"] = "ID";
	$fieldToolTipsmaintenenace["French"]["Id"] = "";
	$fieldLabelsmaintenenace["French"]["Fleet"] = "Flotte";
	$fieldToolTipsmaintenenace["French"]["Fleet"] = "";
	$fieldLabelsmaintenenace["French"]["Vehicle"] = "Véhicule";
	$fieldToolTipsmaintenenace["French"]["Vehicle"] = "";
	$fieldLabelsmaintenenace["French"]["Type"] = "Type de flotte";
	$fieldToolTipsmaintenenace["French"]["Type"] = "";
	$fieldLabelsmaintenenace["French"]["Supplier"] = "Fournisseur";
	$fieldToolTipsmaintenenace["French"]["Supplier"] = "";
	$fieldLabelsmaintenenace["French"]["Cost"] = "Coût";
	$fieldToolTipsmaintenenace["French"]["Cost"] = "";
	$fieldLabelsmaintenenace["French"]["Remarks"] = "Remarques";
	$fieldToolTipsmaintenenace["French"]["Remarks"] = "";
	$fieldLabelsmaintenenace["French"]["RefNo"] = "Numéro de commande";
	$fieldToolTipsmaintenenace["French"]["RefNo"] = "";
	$fieldLabelsmaintenenace["French"]["SysDate"] = "Date du système";
	$fieldToolTipsmaintenenace["French"]["SysDate"] = "";
	$fieldLabelsmaintenenace["French"]["Date"] = "date";
	$fieldToolTipsmaintenenace["French"]["Date"] = "";
	$fieldLabelsmaintenenace["French"]["EnteredBy"] = "Entré par";
	$fieldToolTipsmaintenenace["French"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace["French"]["Approval"] = "Édité par";
	$fieldToolTipsmaintenenace["French"]["Approval"] = "";
	$fieldLabelsmaintenenace["French"]["MeterReading"] = "Lecture de compteur";
	$fieldToolTipsmaintenenace["French"]["MeterReading"] = "";
	$fieldLabelsmaintenenace["French"]["AccidentRef"] = "Réf. Accident";
	$fieldToolTipsmaintenenace["French"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace["French"]["PaymentVoucher"] = "Numéro de bon de paiement";
	$fieldToolTipsmaintenenace["French"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace["French"]["MaintType"] = "Type d'entretien";
	$fieldToolTipsmaintenenace["French"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace["French"]))
		$tdatamaintenenace[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsmaintenenace["German"] = array();
	$fieldToolTipsmaintenenace["German"] = array();
	$pageTitlesmaintenenace["German"] = array();
	$fieldLabelsmaintenenace["German"]["Id"] = "ICH WÜRDE";
	$fieldToolTipsmaintenenace["German"]["Id"] = "";
	$fieldLabelsmaintenenace["German"]["Fleet"] = "Flotte";
	$fieldToolTipsmaintenenace["German"]["Fleet"] = "";
	$fieldLabelsmaintenenace["German"]["Vehicle"] = "Fahrzeug";
	$fieldToolTipsmaintenenace["German"]["Vehicle"] = "";
	$fieldLabelsmaintenenace["German"]["Type"] = "Flottenart";
	$fieldToolTipsmaintenenace["German"]["Type"] = "";
	$fieldLabelsmaintenenace["German"]["Supplier"] = "Lieferant";
	$fieldToolTipsmaintenenace["German"]["Supplier"] = "";
	$fieldLabelsmaintenenace["German"]["Cost"] = "Kosten";
	$fieldToolTipsmaintenenace["German"]["Cost"] = "";
	$fieldLabelsmaintenenace["German"]["Remarks"] = "Bemerkungen";
	$fieldToolTipsmaintenenace["German"]["Remarks"] = "";
	$fieldLabelsmaintenenace["German"]["RefNo"] = "Bestellnummer";
	$fieldToolTipsmaintenenace["German"]["RefNo"] = "";
	$fieldLabelsmaintenenace["German"]["SysDate"] = "Systemdatum";
	$fieldToolTipsmaintenenace["German"]["SysDate"] = "";
	$fieldLabelsmaintenenace["German"]["Date"] = "Datum";
	$fieldToolTipsmaintenenace["German"]["Date"] = "";
	$fieldLabelsmaintenenace["German"]["EnteredBy"] = "Betreten von";
	$fieldToolTipsmaintenenace["German"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace["German"]["Approval"] = "Bearbeitet von";
	$fieldToolTipsmaintenenace["German"]["Approval"] = "";
	$fieldLabelsmaintenenace["German"]["MeterReading"] = "Zählerstand";
	$fieldToolTipsmaintenenace["German"]["MeterReading"] = "";
	$fieldLabelsmaintenenace["German"]["AccidentRef"] = "Unfall";
	$fieldToolTipsmaintenenace["German"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace["German"]["PaymentVoucher"] = "Zahlungsbeleg Nr.";
	$fieldToolTipsmaintenenace["German"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace["German"]["MaintType"] = "Wartungsart";
	$fieldToolTipsmaintenenace["German"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace["German"]))
		$tdatamaintenenace[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsmaintenenace["Italian"] = array();
	$fieldToolTipsmaintenenace["Italian"] = array();
	$pageTitlesmaintenenace["Italian"] = array();
	$fieldLabelsmaintenenace["Italian"]["Id"] = "ID";
	$fieldToolTipsmaintenenace["Italian"]["Id"] = "";
	$fieldLabelsmaintenenace["Italian"]["Fleet"] = "Flotta";
	$fieldToolTipsmaintenenace["Italian"]["Fleet"] = "";
	$fieldLabelsmaintenenace["Italian"]["Vehicle"] = "Veicolo";
	$fieldToolTipsmaintenenace["Italian"]["Vehicle"] = "";
	$fieldLabelsmaintenenace["Italian"]["Type"] = "tipo di Fleet";
	$fieldToolTipsmaintenenace["Italian"]["Type"] = "";
	$fieldLabelsmaintenenace["Italian"]["Supplier"] = "Fornitore";
	$fieldToolTipsmaintenenace["Italian"]["Supplier"] = "";
	$fieldLabelsmaintenenace["Italian"]["Cost"] = "Costo";
	$fieldToolTipsmaintenenace["Italian"]["Cost"] = "";
	$fieldLabelsmaintenenace["Italian"]["Remarks"] = "Osservazioni";
	$fieldToolTipsmaintenenace["Italian"]["Remarks"] = "";
	$fieldLabelsmaintenenace["Italian"]["RefNo"] = "Numero dell'ordine d'acquisto";
	$fieldToolTipsmaintenenace["Italian"]["RefNo"] = "";
	$fieldLabelsmaintenenace["Italian"]["SysDate"] = "Data di sistema";
	$fieldToolTipsmaintenenace["Italian"]["SysDate"] = "";
	$fieldLabelsmaintenenace["Italian"]["Date"] = "Data";
	$fieldToolTipsmaintenenace["Italian"]["Date"] = "";
	$fieldLabelsmaintenenace["Italian"]["EnteredBy"] = "Inserito da";
	$fieldToolTipsmaintenenace["Italian"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace["Italian"]["Approval"] = "A cura di";
	$fieldToolTipsmaintenenace["Italian"]["Approval"] = "";
	$fieldLabelsmaintenenace["Italian"]["MeterReading"] = "Lettura contatori";
	$fieldToolTipsmaintenenace["Italian"]["MeterReading"] = "";
	$fieldLabelsmaintenenace["Italian"]["AccidentRef"] = "Rif Accident";
	$fieldToolTipsmaintenenace["Italian"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace["Italian"]["PaymentVoucher"] = "Il pagamento Voucher No.";
	$fieldToolTipsmaintenenace["Italian"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace["Italian"]["MaintType"] = "Tipo di manutenzione";
	$fieldToolTipsmaintenenace["Italian"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace["Italian"]))
		$tdatamaintenenace[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsmaintenenace["Russian"] = array();
	$fieldToolTipsmaintenenace["Russian"] = array();
	$pageTitlesmaintenenace["Russian"] = array();
	$fieldLabelsmaintenenace["Russian"]["Id"] = "? ??";
	$fieldToolTipsmaintenenace["Russian"]["Id"] = "";
	$fieldLabelsmaintenenace["Russian"]["Fleet"] = "????";
	$fieldToolTipsmaintenenace["Russian"]["Fleet"] = "";
	$fieldLabelsmaintenenace["Russian"]["Vehicle"] = "???????? ????????????";
	$fieldToolTipsmaintenenace["Russian"]["Vehicle"] = "";
	$fieldLabelsmaintenenace["Russian"]["Type"] = "??? ?????";
	$fieldToolTipsmaintenenace["Russian"]["Type"] = "";
	$fieldLabelsmaintenenace["Russian"]["Supplier"] = "?????????";
	$fieldToolTipsmaintenenace["Russian"]["Supplier"] = "";
	$fieldLabelsmaintenenace["Russian"]["Cost"] = "?????????";
	$fieldToolTipsmaintenenace["Russian"]["Cost"] = "";
	$fieldLabelsmaintenenace["Russian"]["Remarks"] = "?????????";
	$fieldToolTipsmaintenenace["Russian"]["Remarks"] = "";
	$fieldLabelsmaintenenace["Russian"]["RefNo"] = "????? ?????? ?? ????????";
	$fieldToolTipsmaintenenace["Russian"]["RefNo"] = "";
	$fieldLabelsmaintenenace["Russian"]["SysDate"] = "System Date";
	$fieldToolTipsmaintenenace["Russian"]["SysDate"] = "";
	$fieldLabelsmaintenenace["Russian"]["Date"] = "????";
	$fieldToolTipsmaintenenace["Russian"]["Date"] = "";
	$fieldLabelsmaintenenace["Russian"]["EnteredBy"] = "??????";
	$fieldToolTipsmaintenenace["Russian"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace["Russian"]["Approval"] = "???????????????";
	$fieldToolTipsmaintenenace["Russian"]["Approval"] = "";
	$fieldLabelsmaintenenace["Russian"]["MeterReading"] = "????????? ????????";
	$fieldToolTipsmaintenenace["Russian"]["MeterReading"] = "";
	$fieldLabelsmaintenenace["Russian"]["AccidentRef"] = "?????? ??????";
	$fieldToolTipsmaintenenace["Russian"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace["Russian"]["PaymentVoucher"] = "?????? ???????? ?????? ?";
	$fieldToolTipsmaintenenace["Russian"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace["Russian"]["MaintType"] = "??? ???????????? ????????????";
	$fieldToolTipsmaintenenace["Russian"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace["Russian"]))
		$tdatamaintenenace[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmaintenenace["Spanish"] = array();
	$fieldToolTipsmaintenenace["Spanish"] = array();
	$pageTitlesmaintenenace["Spanish"] = array();
	$fieldLabelsmaintenenace["Spanish"]["Id"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipsmaintenenace["Spanish"]["Id"] = "";
	$fieldLabelsmaintenenace["Spanish"]["Fleet"] = "Flota";
	$fieldToolTipsmaintenenace["Spanish"]["Fleet"] = "";
	$fieldLabelsmaintenenace["Spanish"]["Vehicle"] = "Vehículo";
	$fieldToolTipsmaintenenace["Spanish"]["Vehicle"] = "";
	$fieldLabelsmaintenenace["Spanish"]["Type"] = "Tipo de flota";
	$fieldToolTipsmaintenenace["Spanish"]["Type"] = "";
	$fieldLabelsmaintenenace["Spanish"]["Supplier"] = "Proveedor";
	$fieldToolTipsmaintenenace["Spanish"]["Supplier"] = "";
	$fieldLabelsmaintenenace["Spanish"]["Cost"] = "Costo";
	$fieldToolTipsmaintenenace["Spanish"]["Cost"] = "";
	$fieldLabelsmaintenenace["Spanish"]["Remarks"] = "Observaciones";
	$fieldToolTipsmaintenenace["Spanish"]["Remarks"] = "";
	$fieldLabelsmaintenenace["Spanish"]["RefNo"] = "Número de orden de compra";
	$fieldToolTipsmaintenenace["Spanish"]["RefNo"] = "";
	$fieldLabelsmaintenenace["Spanish"]["SysDate"] = "Fecha del sistema";
	$fieldToolTipsmaintenenace["Spanish"]["SysDate"] = "";
	$fieldLabelsmaintenenace["Spanish"]["Date"] = "Fecha";
	$fieldToolTipsmaintenenace["Spanish"]["Date"] = "";
	$fieldLabelsmaintenenace["Spanish"]["EnteredBy"] = "Introducido por";
	$fieldToolTipsmaintenenace["Spanish"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace["Spanish"]["Approval"] = "Editado por";
	$fieldToolTipsmaintenenace["Spanish"]["Approval"] = "";
	$fieldLabelsmaintenenace["Spanish"]["MeterReading"] = "Lectura del medidor";
	$fieldToolTipsmaintenenace["Spanish"]["MeterReading"] = "";
	$fieldLabelsmaintenenace["Spanish"]["AccidentRef"] = "Ref. Accidente";
	$fieldToolTipsmaintenenace["Spanish"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace["Spanish"]["PaymentVoucher"] = "Número de comprobante de pago";
	$fieldToolTipsmaintenenace["Spanish"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace["Spanish"]["MaintType"] = "Tipo de mantenimiento";
	$fieldToolTipsmaintenenace["Spanish"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace["Spanish"]))
		$tdatamaintenenace[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmaintenenace[""] = array();
	$fieldToolTipsmaintenenace[""] = array();
	$pageTitlesmaintenenace[""] = array();
	if (count($fieldToolTipsmaintenenace[""]))
		$tdatamaintenenace[".isUseToolTips"] = true;
}


	$tdatamaintenenace[".NCSearch"] = true;



$tdatamaintenenace[".shortTableName"] = "maintenenace";
$tdatamaintenenace[".nSecOptions"] = 0;
$tdatamaintenenace[".recsPerRowPrint"] = 1;
$tdatamaintenenace[".mainTableOwnerID"] = "";
$tdatamaintenenace[".moveNext"] = 1;
$tdatamaintenenace[".entityType"] = 0;

$tdatamaintenenace[".strOriginalTableName"] = "maintenenace";

		 



$tdatamaintenenace[".showAddInPopup"] = false;

$tdatamaintenenace[".showEditInPopup"] = false;

$tdatamaintenenace[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamaintenenace[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamaintenenace[".fieldsForRegister"] = array();

	$tdatamaintenenace[".listAjax"] = true;

	$tdatamaintenenace[".audit"] = false;

	$tdatamaintenenace[".locking"] = false;



$tdatamaintenenace[".list"] = true;




$tdatamaintenenace[".view"] = true;


$tdatamaintenenace[".exportTo"] = true;

$tdatamaintenenace[".printFriendly"] = true;


$tdatamaintenenace[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamaintenenace[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatamaintenenace[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatamaintenenace[".searchSaving"] = false;
//

$tdatamaintenenace[".showSearchPanel"] = true;
		$tdatamaintenenace[".flexibleSearch"] = true;

$tdatamaintenenace[".isUseAjaxSuggest"] = true;

$tdatamaintenenace[".rowHighlite"] = true;



$tdatamaintenenace[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamaintenenace[".isUseTimeForSearch"] = false;



$tdatamaintenenace[".badgeColor"] = "8B0000";


$tdatamaintenenace[".allSearchFields"] = array();
$tdatamaintenenace[".filterFields"] = array();
$tdatamaintenenace[".requiredSearchFields"] = array();

$tdatamaintenenace[".allSearchFields"][] = "MaintType";
	$tdatamaintenenace[".allSearchFields"][] = "Id";
	$tdatamaintenenace[".allSearchFields"][] = "Vehicle";
	$tdatamaintenenace[".allSearchFields"][] = "Fleet";
	$tdatamaintenenace[".allSearchFields"][] = "Type";
	$tdatamaintenenace[".allSearchFields"][] = "Date";
	$tdatamaintenenace[".allSearchFields"][] = "MeterReading";
	$tdatamaintenenace[".allSearchFields"][] = "RefNo";
	$tdatamaintenenace[".allSearchFields"][] = "Supplier";
	$tdatamaintenenace[".allSearchFields"][] = "Cost";
	$tdatamaintenenace[".allSearchFields"][] = "AccidentRef";
	$tdatamaintenenace[".allSearchFields"][] = "Remarks";
	$tdatamaintenenace[".allSearchFields"][] = "EnteredBy";
	$tdatamaintenenace[".allSearchFields"][] = "Approval";
	

$tdatamaintenenace[".googleLikeFields"] = array();
$tdatamaintenenace[".googleLikeFields"][] = "Fleet";
$tdatamaintenenace[".googleLikeFields"][] = "Vehicle";
$tdatamaintenenace[".googleLikeFields"][] = "Type";
$tdatamaintenenace[".googleLikeFields"][] = "Supplier";
$tdatamaintenenace[".googleLikeFields"][] = "Cost";
$tdatamaintenenace[".googleLikeFields"][] = "Remarks";
$tdatamaintenenace[".googleLikeFields"][] = "RefNo";
$tdatamaintenenace[".googleLikeFields"][] = "Date";
$tdatamaintenenace[".googleLikeFields"][] = "EnteredBy";
$tdatamaintenenace[".googleLikeFields"][] = "Approval";
$tdatamaintenenace[".googleLikeFields"][] = "MeterReading";
$tdatamaintenenace[".googleLikeFields"][] = "AccidentRef";
$tdatamaintenenace[".googleLikeFields"][] = "MaintType";

$tdatamaintenenace[".panelSearchFields"] = array();
$tdatamaintenenace[".searchPanelOptions"] = array();
$tdatamaintenenace[".panelSearchFields"][] = "Date";
	
$tdatamaintenenace[".advSearchFields"] = array();
$tdatamaintenenace[".advSearchFields"][] = "MaintType";
$tdatamaintenenace[".advSearchFields"][] = "Id";
$tdatamaintenenace[".advSearchFields"][] = "Vehicle";
$tdatamaintenenace[".advSearchFields"][] = "Fleet";
$tdatamaintenenace[".advSearchFields"][] = "Type";
$tdatamaintenenace[".advSearchFields"][] = "Date";
$tdatamaintenenace[".advSearchFields"][] = "MeterReading";
$tdatamaintenenace[".advSearchFields"][] = "RefNo";
$tdatamaintenenace[".advSearchFields"][] = "Supplier";
$tdatamaintenenace[".advSearchFields"][] = "Cost";
$tdatamaintenenace[".advSearchFields"][] = "AccidentRef";
$tdatamaintenenace[".advSearchFields"][] = "Remarks";
$tdatamaintenenace[".advSearchFields"][] = "EnteredBy";
$tdatamaintenenace[".advSearchFields"][] = "Approval";

$tdatamaintenenace[".tableType"] = "list";

$tdatamaintenenace[".printerPageOrientation"] = 0;
$tdatamaintenenace[".nPrinterPageScale"] = 100;

$tdatamaintenenace[".nPrinterSplitRecords"] = 40;

$tdatamaintenenace[".nPrinterPDFSplitRecords"] = 40;



$tdatamaintenenace[".geocodingEnabled"] = false;





$tdatamaintenenace[".listGridLayout"] = 3;


$tdatamaintenenace[".isResizeColumns"] = true;



// view page pdf
$tdatamaintenenace[".isViewPagePDF"] = true;
$tdatamaintenenace[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatamaintenenace[".isPrinterPagePDF"] = true;
$tdatamaintenenace[".nPrinterPagePDFScale"] = 100;

$tdatamaintenenace[".totalsFields"] = array();
$tdatamaintenenace[".totalsFields"][] = array(
	"fName" => "Cost",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatamaintenenace[".pageSize"] = 20;

$tdatamaintenenace[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamaintenenace[".strOrderBy"] = $tstrOrderBy;

$tdatamaintenenace[".orderindexes"] = array();

$tdatamaintenenace[".sqlHead"] = "SELECT Id,  	Fleet,  	Vehicle,  	`Type`,  	Supplier,  	Cost,  	Remarks,  	RefNo,  	`SysDate`,  	`Date`,  	EnteredBy,  	Approval,  	MeterReading,  	AccidentRef,  	PaymentVoucher,  	MaintType";
$tdatamaintenenace[".sqlFrom"] = "FROM maintenenace";
$tdatamaintenenace[".sqlWhereExpr"] = "";
$tdatamaintenenace[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatamaintenenace[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamaintenenace[".arrGroupsPerPage"] = $arrGPP;

$tdatamaintenenace[".highlightSearchResults"] = true;

$tableKeysmaintenenace = array();
$tableKeysmaintenenace[] = "Id";
$tdatamaintenenace[".Keys"] = $tableKeysmaintenenace;

$tdatamaintenenace[".listFields"] = array();
$tdatamaintenenace[".listFields"][] = "Id";
$tdatamaintenenace[".listFields"][] = "Date";
$tdatamaintenenace[".listFields"][] = "MaintType";
$tdatamaintenenace[".listFields"][] = "Vehicle";
$tdatamaintenenace[".listFields"][] = "Fleet";
$tdatamaintenenace[".listFields"][] = "Type";
$tdatamaintenenace[".listFields"][] = "MeterReading";
$tdatamaintenenace[".listFields"][] = "RefNo";
$tdatamaintenenace[".listFields"][] = "Supplier";
$tdatamaintenenace[".listFields"][] = "Cost";
$tdatamaintenenace[".listFields"][] = "AccidentRef";
$tdatamaintenenace[".listFields"][] = "Remarks";
$tdatamaintenenace[".listFields"][] = "EnteredBy";

$tdatamaintenenace[".hideMobileList"] = array();


$tdatamaintenenace[".viewFields"] = array();
$tdatamaintenenace[".viewFields"][] = "Id";
$tdatamaintenenace[".viewFields"][] = "MaintType";
$tdatamaintenenace[".viewFields"][] = "Vehicle";
$tdatamaintenenace[".viewFields"][] = "Fleet";
$tdatamaintenenace[".viewFields"][] = "Type";
$tdatamaintenenace[".viewFields"][] = "Date";
$tdatamaintenenace[".viewFields"][] = "MeterReading";
$tdatamaintenenace[".viewFields"][] = "RefNo";
$tdatamaintenenace[".viewFields"][] = "Supplier";
$tdatamaintenenace[".viewFields"][] = "Cost";
$tdatamaintenenace[".viewFields"][] = "AccidentRef";
$tdatamaintenenace[".viewFields"][] = "Remarks";
$tdatamaintenenace[".viewFields"][] = "EnteredBy";
$tdatamaintenenace[".viewFields"][] = "SysDate";
$tdatamaintenenace[".viewFields"][] = "Approval";

$tdatamaintenenace[".addFields"] = array();

$tdatamaintenenace[".masterListFields"] = array();
$tdatamaintenenace[".masterListFields"][] = "PaymentVoucher";
$tdatamaintenenace[".masterListFields"][] = "MaintType";
$tdatamaintenenace[".masterListFields"][] = "Vehicle";
$tdatamaintenenace[".masterListFields"][] = "Id";
$tdatamaintenenace[".masterListFields"][] = "Fleet";
$tdatamaintenenace[".masterListFields"][] = "Type";
$tdatamaintenenace[".masterListFields"][] = "Date";
$tdatamaintenenace[".masterListFields"][] = "MeterReading";
$tdatamaintenenace[".masterListFields"][] = "RefNo";
$tdatamaintenenace[".masterListFields"][] = "Supplier";
$tdatamaintenenace[".masterListFields"][] = "Cost";
$tdatamaintenenace[".masterListFields"][] = "AccidentRef";
$tdatamaintenenace[".masterListFields"][] = "Remarks";
$tdatamaintenenace[".masterListFields"][] = "EnteredBy";
$tdatamaintenenace[".masterListFields"][] = "SysDate";
$tdatamaintenenace[".masterListFields"][] = "Approval";

$tdatamaintenenace[".inlineAddFields"] = array();

$tdatamaintenenace[".editFields"] = array();

$tdatamaintenenace[".inlineEditFields"] = array();

$tdatamaintenenace[".updateSelectedFields"] = array();


$tdatamaintenenace[".exportFields"] = array();
$tdatamaintenenace[".exportFields"][] = "MaintType";
$tdatamaintenenace[".exportFields"][] = "Id";
$tdatamaintenenace[".exportFields"][] = "Vehicle";
$tdatamaintenenace[".exportFields"][] = "Fleet";
$tdatamaintenenace[".exportFields"][] = "Type";
$tdatamaintenenace[".exportFields"][] = "Date";
$tdatamaintenenace[".exportFields"][] = "MeterReading";
$tdatamaintenenace[".exportFields"][] = "RefNo";
$tdatamaintenenace[".exportFields"][] = "Supplier";
$tdatamaintenenace[".exportFields"][] = "Cost";
$tdatamaintenenace[".exportFields"][] = "AccidentRef";
$tdatamaintenenace[".exportFields"][] = "Remarks";
$tdatamaintenenace[".exportFields"][] = "EnteredBy";
$tdatamaintenenace[".exportFields"][] = "SysDate";
$tdatamaintenenace[".exportFields"][] = "Approval";

$tdatamaintenenace[".importFields"] = array();

$tdatamaintenenace[".printFields"] = array();
$tdatamaintenenace[".printFields"][] = "MaintType";
$tdatamaintenenace[".printFields"][] = "Id";
$tdatamaintenenace[".printFields"][] = "Vehicle";
$tdatamaintenenace[".printFields"][] = "Fleet";
$tdatamaintenenace[".printFields"][] = "Type";
$tdatamaintenenace[".printFields"][] = "Date";
$tdatamaintenenace[".printFields"][] = "MeterReading";
$tdatamaintenenace[".printFields"][] = "RefNo";
$tdatamaintenenace[".printFields"][] = "Supplier";
$tdatamaintenenace[".printFields"][] = "Cost";
$tdatamaintenenace[".printFields"][] = "AccidentRef";
$tdatamaintenenace[".printFields"][] = "Remarks";
$tdatamaintenenace[".printFields"][] = "EnteredBy";
$tdatamaintenenace[".printFields"][] = "SysDate";
$tdatamaintenenace[".printFields"][] = "Approval";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace","Id");
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
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings




	$tdatamaintenenace["Id"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace","Fleet");
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

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
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
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings




	$tdatamaintenenace["Fleet"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace","Vehicle");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Vehicle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Vehicle";

	
	
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
		$edata["autoCompleteFields"][] = array('masterF'=>"Fleet", 'lookupF'=>"Fleet");
	$edata["autoCompleteFields"][] = array('masterF'=>"Type", 'lookupF'=>"Type");
	$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "RegNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RegNo";

	
	$edata["LookupOrderBy"] = "RegNo";

	
	
	
	

	
	
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
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings




	$tdatamaintenenace["Vehicle"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace","Type");
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

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
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
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings




	$tdatamaintenenace["Type"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace","Supplier");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Supplier";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Supplier";

	
	
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
	$edata["LookupTable"] = "suppliermaster";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "SupplierName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "SupplierName";

	
	$edata["LookupOrderBy"] = "SupplierName";

	
	
	
	

	
	
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
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings




	$tdatamaintenenace["Supplier"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace","Cost");
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
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings




	$tdatamaintenenace["Cost"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace","Remarks");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

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
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings




	$tdatamaintenenace["Remarks"] = $fdata;
//	RefNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "RefNo";
	$fdata["GoodName"] = "RefNo";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace","RefNo");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RefNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RefNo";

	
	
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
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings




	$tdatamaintenenace["RefNo"] = $fdata;
//	SysDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SysDate";
	$fdata["GoodName"] = "SysDate";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace","SysDate");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatamaintenenace["SysDate"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace","Date");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

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
		$fdata["defaultSearchOption"] = "Between";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings




	$tdatamaintenenace["Date"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace","EnteredBy");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

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
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings




	$tdatamaintenenace["EnteredBy"] = $fdata;
//	Approval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Approval";
	$fdata["GoodName"] = "Approval";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace","Approval");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Approval";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Approval";

	
	
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
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings




	$tdatamaintenenace["Approval"] = $fdata;
//	MeterReading
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "MeterReading";
	$fdata["GoodName"] = "MeterReading";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace","MeterReading");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MeterReading";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MeterReading";

	
	
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
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings




	$tdatamaintenenace["MeterReading"] = $fdata;
//	AccidentRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "AccidentRef";
	$fdata["GoodName"] = "AccidentRef";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace","AccidentRef");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AccidentRef";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccidentRef";

	
	
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
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings




	$tdatamaintenenace["AccidentRef"] = $fdata;
//	PaymentVoucher
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "PaymentVoucher";
	$fdata["GoodName"] = "PaymentVoucher";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace","PaymentVoucher");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "PaymentVoucher";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PaymentVoucher";

	
	
			
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








	$tdatamaintenenace["PaymentVoucher"] = $fdata;
//	MaintType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "MaintType";
	$fdata["GoodName"] = "MaintType";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace","MaintType");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MaintType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MaintType";

	
	
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
	$edata["LookupTable"] = "servicetypemaster";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Type";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Type";

	
	$edata["LookupOrderBy"] = "Type";

	
	
	
	

	
	
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
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings




	$tdatamaintenenace["MaintType"] = $fdata;


$tables_data["maintenenace"]=&$tdatamaintenenace;
$field_labels["maintenenace"] = &$fieldLabelsmaintenenace;
$fieldToolTips["maintenenace"] = &$fieldToolTipsmaintenenace;
$page_titles["maintenenace"] = &$pageTitlesmaintenenace;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["maintenenace"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["maintenenace"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_maintenenace()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  	Fleet,  	Vehicle,  	`Type`,  	Supplier,  	Cost,  	Remarks,  	RefNo,  	`SysDate`,  	`Date`,  	EnteredBy,  	Approval,  	MeterReading,  	AccidentRef,  	PaymentVoucher,  	MaintType";
$proto0["m_strFrom"] = "FROM maintenenace";
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
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "maintenenace";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace"
));

$proto8["m_sql"] = "Fleet";
$proto8["m_srcTableName"] = "maintenenace";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace"
));

$proto10["m_sql"] = "Vehicle";
$proto10["m_srcTableName"] = "maintenenace";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace"
));

$proto12["m_sql"] = "`Type`";
$proto12["m_srcTableName"] = "maintenenace";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace"
));

$proto14["m_sql"] = "Supplier";
$proto14["m_srcTableName"] = "maintenenace";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace"
));

$proto16["m_sql"] = "Cost";
$proto16["m_srcTableName"] = "maintenenace";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace"
));

$proto18["m_sql"] = "Remarks";
$proto18["m_srcTableName"] = "maintenenace";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNo",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace"
));

$proto20["m_sql"] = "RefNo";
$proto20["m_srcTableName"] = "maintenenace";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "SysDate",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace"
));

$proto22["m_sql"] = "`SysDate`";
$proto22["m_srcTableName"] = "maintenenace";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace"
));

$proto24["m_sql"] = "`Date`";
$proto24["m_srcTableName"] = "maintenenace";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace"
));

$proto26["m_sql"] = "EnteredBy";
$proto26["m_srcTableName"] = "maintenenace";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Approval",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace"
));

$proto28["m_sql"] = "Approval";
$proto28["m_srcTableName"] = "maintenenace";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "MeterReading",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace"
));

$proto30["m_sql"] = "MeterReading";
$proto30["m_srcTableName"] = "maintenenace";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "AccidentRef",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace"
));

$proto32["m_sql"] = "AccidentRef";
$proto32["m_srcTableName"] = "maintenenace";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentVoucher",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace"
));

$proto34["m_sql"] = "PaymentVoucher";
$proto34["m_srcTableName"] = "maintenenace";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "MaintType",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace"
));

$proto36["m_sql"] = "MaintType";
$proto36["m_srcTableName"] = "maintenenace";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "maintenenace";
$proto39["m_srcTableName"] = "maintenenace";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "Id";
$proto39["m_columns"][] = "Fleet";
$proto39["m_columns"][] = "Vehicle";
$proto39["m_columns"][] = "Type";
$proto39["m_columns"][] = "Supplier";
$proto39["m_columns"][] = "Cost";
$proto39["m_columns"][] = "Remarks";
$proto39["m_columns"][] = "RefNo";
$proto39["m_columns"][] = "SysDate";
$proto39["m_columns"][] = "Date";
$proto39["m_columns"][] = "EnteredBy";
$proto39["m_columns"][] = "Approval";
$proto39["m_columns"][] = "MeterReading";
$proto39["m_columns"][] = "AccidentRef";
$proto39["m_columns"][] = "PaymentVoucher";
$proto39["m_columns"][] = "MaintType";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "maintenenace";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "maintenenace";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="maintenenace";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_maintenenace = createSqlQuery_maintenenace();


	
					
;

																

$tdatamaintenenace[".sqlquery"] = $queryData_maintenenace;

$tableEvents["maintenenace"] = new eventsBase;
$tdatamaintenenace[".hasEvents"] = false;

?>