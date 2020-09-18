<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamaintenenace_general_repair = array();
	$tdatamaintenenace_general_repair[".truncateText"] = true;
	$tdatamaintenenace_general_repair[".NumberOfChars"] = 80;
	$tdatamaintenenace_general_repair[".ShortName"] = "maintenenace_general_repair";
	$tdatamaintenenace_general_repair[".OwnerID"] = "";
	$tdatamaintenenace_general_repair[".OriginalTable"] = "maintenenace";

//	field labels
$fieldLabelsmaintenenace_general_repair = array();
$fieldToolTipsmaintenenace_general_repair = array();
$pageTitlesmaintenenace_general_repair = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmaintenenace_general_repair["English"] = array();
	$fieldToolTipsmaintenenace_general_repair["English"] = array();
	$pageTitlesmaintenenace_general_repair["English"] = array();
	$fieldLabelsmaintenenace_general_repair["English"]["Id"] = "ID";
	$fieldToolTipsmaintenenace_general_repair["English"]["Id"] = "";
	$fieldLabelsmaintenenace_general_repair["English"]["Fleet"] = "Fleet";
	$fieldToolTipsmaintenenace_general_repair["English"]["Fleet"] = "";
	$fieldLabelsmaintenenace_general_repair["English"]["Vehicle"] = "Vehicle";
	$fieldToolTipsmaintenenace_general_repair["English"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_general_repair["English"]["Type"] = "Type";
	$fieldToolTipsmaintenenace_general_repair["English"]["Type"] = "";
	$fieldLabelsmaintenenace_general_repair["English"]["Supplier"] = "Supplier";
	$fieldToolTipsmaintenenace_general_repair["English"]["Supplier"] = "";
	$fieldLabelsmaintenenace_general_repair["English"]["Cost"] = "Cost";
	$fieldToolTipsmaintenenace_general_repair["English"]["Cost"] = "";
	$fieldLabelsmaintenenace_general_repair["English"]["Remarks"] = "Remarks";
	$fieldToolTipsmaintenenace_general_repair["English"]["Remarks"] = "";
	$fieldLabelsmaintenenace_general_repair["English"]["RefNo"] = "PO No";
	$fieldToolTipsmaintenenace_general_repair["English"]["RefNo"] = "";
	$fieldLabelsmaintenenace_general_repair["English"]["SysDate"] = "System Date";
	$fieldToolTipsmaintenenace_general_repair["English"]["SysDate"] = "";
	$fieldLabelsmaintenenace_general_repair["English"]["Date"] = "Date";
	$fieldToolTipsmaintenenace_general_repair["English"]["Date"] = "";
	$fieldLabelsmaintenenace_general_repair["English"]["EnteredBy"] = "Entered By";
	$fieldToolTipsmaintenenace_general_repair["English"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_general_repair["English"]["Approval"] = "Edited By";
	$fieldToolTipsmaintenenace_general_repair["English"]["Approval"] = "";
	$fieldLabelsmaintenenace_general_repair["English"]["MeterReading"] = "Meter Re.";
	$fieldToolTipsmaintenenace_general_repair["English"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_general_repair["English"]["AccidentRef"] = "Accident Ref";
	$fieldToolTipsmaintenenace_general_repair["English"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_general_repair["English"]["PaymentVoucher"] = "Pay. Ref";
	$fieldToolTipsmaintenenace_general_repair["English"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_general_repair["English"]["MaintType"] = "Maint Type";
	$fieldToolTipsmaintenenace_general_repair["English"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_general_repair["English"]))
		$tdatamaintenenace_general_repair[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsmaintenenace_general_repair["Afrikaans"] = array();
	$fieldToolTipsmaintenenace_general_repair["Afrikaans"] = array();
	$pageTitlesmaintenenace_general_repair["Afrikaans"] = array();
	$fieldLabelsmaintenenace_general_repair["Afrikaans"]["Id"] = "ID";
	$fieldToolTipsmaintenenace_general_repair["Afrikaans"]["Id"] = "";
	$fieldLabelsmaintenenace_general_repair["Afrikaans"]["Fleet"] = "vloot";
	$fieldToolTipsmaintenenace_general_repair["Afrikaans"]["Fleet"] = "";
	$fieldLabelsmaintenenace_general_repair["Afrikaans"]["Vehicle"] = "voertuig";
	$fieldToolTipsmaintenenace_general_repair["Afrikaans"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_general_repair["Afrikaans"]["Type"] = "tipe";
	$fieldToolTipsmaintenenace_general_repair["Afrikaans"]["Type"] = "";
	$fieldLabelsmaintenenace_general_repair["Afrikaans"]["Supplier"] = "verskaffer";
	$fieldToolTipsmaintenenace_general_repair["Afrikaans"]["Supplier"] = "";
	$fieldLabelsmaintenenace_general_repair["Afrikaans"]["Cost"] = "koste";
	$fieldToolTipsmaintenenace_general_repair["Afrikaans"]["Cost"] = "";
	$fieldLabelsmaintenenace_general_repair["Afrikaans"]["Remarks"] = "opmerkings";
	$fieldToolTipsmaintenenace_general_repair["Afrikaans"]["Remarks"] = "";
	$fieldLabelsmaintenenace_general_repair["Afrikaans"]["RefNo"] = "Bestelling Geen";
	$fieldToolTipsmaintenenace_general_repair["Afrikaans"]["RefNo"] = "";
	$fieldLabelsmaintenenace_general_repair["Afrikaans"]["SysDate"] = "stelsel Datum";
	$fieldToolTipsmaintenenace_general_repair["Afrikaans"]["SysDate"] = "";
	$fieldLabelsmaintenenace_general_repair["Afrikaans"]["Date"] = "datum";
	$fieldToolTipsmaintenenace_general_repair["Afrikaans"]["Date"] = "";
	$fieldLabelsmaintenenace_general_repair["Afrikaans"]["EnteredBy"] = "aangegaan deur";
	$fieldToolTipsmaintenenace_general_repair["Afrikaans"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_general_repair["Afrikaans"]["Approval"] = "geredigeer deur";
	$fieldToolTipsmaintenenace_general_repair["Afrikaans"]["Approval"] = "";
	$fieldLabelsmaintenenace_general_repair["Afrikaans"]["MeterReading"] = "meterlesing";
	$fieldToolTipsmaintenenace_general_repair["Afrikaans"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_general_repair["Afrikaans"]["AccidentRef"] = "ongeluk Verwysing";
	$fieldToolTipsmaintenenace_general_repair["Afrikaans"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_general_repair["Afrikaans"]["PaymentVoucher"] = "Inbetalingsverwyssingsnommer";
	$fieldToolTipsmaintenenace_general_repair["Afrikaans"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_general_repair["Afrikaans"]["MaintType"] = "Onderhoud Tipe";
	$fieldToolTipsmaintenenace_general_repair["Afrikaans"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_general_repair["Afrikaans"]))
		$tdatamaintenenace_general_repair[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsmaintenenace_general_repair["Arabic"] = array();
	$fieldToolTipsmaintenenace_general_repair["Arabic"] = array();
	$pageTitlesmaintenenace_general_repair["Arabic"] = array();
	$fieldLabelsmaintenenace_general_repair["Arabic"]["Id"] = "???? ?????";
	$fieldToolTipsmaintenenace_general_repair["Arabic"]["Id"] = "";
	$fieldLabelsmaintenenace_general_repair["Arabic"]["Fleet"] = "?????";
	$fieldToolTipsmaintenenace_general_repair["Arabic"]["Fleet"] = "";
	$fieldLabelsmaintenenace_general_repair["Arabic"]["Vehicle"] = "?????";
	$fieldToolTipsmaintenenace_general_repair["Arabic"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_general_repair["Arabic"]["Type"] = "????";
	$fieldToolTipsmaintenenace_general_repair["Arabic"]["Type"] = "";
	$fieldLabelsmaintenenace_general_repair["Arabic"]["Supplier"] = "??????";
	$fieldToolTipsmaintenenace_general_repair["Arabic"]["Supplier"] = "";
	$fieldLabelsmaintenenace_general_repair["Arabic"]["Cost"] = "????";
	$fieldToolTipsmaintenenace_general_repair["Arabic"]["Cost"] = "";
	$fieldLabelsmaintenenace_general_repair["Arabic"]["Remarks"] = "???????";
	$fieldToolTipsmaintenenace_general_repair["Arabic"]["Remarks"] = "";
	$fieldLabelsmaintenenace_general_repair["Arabic"]["RefNo"] = "????? ???";
	$fieldToolTipsmaintenenace_general_repair["Arabic"]["RefNo"] = "";
	$fieldLabelsmaintenenace_general_repair["Arabic"]["SysDate"] = "????? ??????";
	$fieldToolTipsmaintenenace_general_repair["Arabic"]["SysDate"] = "";
	$fieldLabelsmaintenenace_general_repair["Arabic"]["Date"] = "?????";
	$fieldToolTipsmaintenenace_general_repair["Arabic"]["Date"] = "";
	$fieldLabelsmaintenenace_general_repair["Arabic"]["EnteredBy"] = "?? ?????? ??????";
	$fieldToolTipsmaintenenace_general_repair["Arabic"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_general_repair["Arabic"]["Approval"] = "???? ??????";
	$fieldToolTipsmaintenenace_general_repair["Arabic"]["Approval"] = "";
	$fieldLabelsmaintenenace_general_repair["Arabic"]["MeterReading"] = "????? ??????";
	$fieldToolTipsmaintenenace_general_repair["Arabic"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_general_repair["Arabic"]["AccidentRef"] = "???? ???????";
	$fieldToolTipsmaintenenace_general_repair["Arabic"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_general_repair["Arabic"]["PaymentVoucher"] = "????? ???";
	$fieldToolTipsmaintenenace_general_repair["Arabic"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_general_repair["Arabic"]["MaintType"] = "??? ???????";
	$fieldToolTipsmaintenenace_general_repair["Arabic"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_general_repair["Arabic"]))
		$tdatamaintenenace_general_repair[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsmaintenenace_general_repair["Chinese"] = array();
	$fieldToolTipsmaintenenace_general_repair["Chinese"] = array();
	$pageTitlesmaintenenace_general_repair["Chinese"] = array();
	$fieldLabelsmaintenenace_general_repair["Chinese"]["Id"] = "ID";
	$fieldToolTipsmaintenenace_general_repair["Chinese"]["Id"] = "";
	$fieldLabelsmaintenenace_general_repair["Chinese"]["Fleet"] = "??";
	$fieldToolTipsmaintenenace_general_repair["Chinese"]["Fleet"] = "";
	$fieldLabelsmaintenenace_general_repair["Chinese"]["Vehicle"] = "??";
	$fieldToolTipsmaintenenace_general_repair["Chinese"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_general_repair["Chinese"]["Type"] = "??";
	$fieldToolTipsmaintenenace_general_repair["Chinese"]["Type"] = "";
	$fieldLabelsmaintenenace_general_repair["Chinese"]["Supplier"] = "???";
	$fieldToolTipsmaintenenace_general_repair["Chinese"]["Supplier"] = "";
	$fieldLabelsmaintenenace_general_repair["Chinese"]["Cost"] = "??";
	$fieldToolTipsmaintenenace_general_repair["Chinese"]["Cost"] = "";
	$fieldLabelsmaintenenace_general_repair["Chinese"]["Remarks"] = "??";
	$fieldToolTipsmaintenenace_general_repair["Chinese"]["Remarks"] = "";
	$fieldLabelsmaintenenace_general_repair["Chinese"]["RefNo"] = "??????";
	$fieldToolTipsmaintenenace_general_repair["Chinese"]["RefNo"] = "";
	$fieldLabelsmaintenenace_general_repair["Chinese"]["SysDate"] = "????";
	$fieldToolTipsmaintenenace_general_repair["Chinese"]["SysDate"] = "";
	$fieldLabelsmaintenenace_general_repair["Chinese"]["Date"] = "??";
	$fieldToolTipsmaintenenace_general_repair["Chinese"]["Date"] = "";
	$fieldLabelsmaintenenace_general_repair["Chinese"]["EnteredBy"] = "???";
	$fieldToolTipsmaintenenace_general_repair["Chinese"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_general_repair["Chinese"]["Approval"] = "??";
	$fieldToolTipsmaintenenace_general_repair["Chinese"]["Approval"] = "";
	$fieldLabelsmaintenenace_general_repair["Chinese"]["MeterReading"] = "????";
	$fieldToolTipsmaintenenace_general_repair["Chinese"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_general_repair["Chinese"]["AccidentRef"] = "????";
	$fieldToolTipsmaintenenace_general_repair["Chinese"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_general_repair["Chinese"]["PaymentVoucher"] = "????";
	$fieldToolTipsmaintenenace_general_repair["Chinese"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_general_repair["Chinese"]["MaintType"] = "????";
	$fieldToolTipsmaintenenace_general_repair["Chinese"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_general_repair["Chinese"]))
		$tdatamaintenenace_general_repair[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsmaintenenace_general_repair["French"] = array();
	$fieldToolTipsmaintenenace_general_repair["French"] = array();
	$pageTitlesmaintenenace_general_repair["French"] = array();
	$fieldLabelsmaintenenace_general_repair["French"]["Id"] = "ID";
	$fieldToolTipsmaintenenace_general_repair["French"]["Id"] = "";
	$fieldLabelsmaintenenace_general_repair["French"]["Fleet"] = "Flotte";
	$fieldToolTipsmaintenenace_general_repair["French"]["Fleet"] = "";
	$fieldLabelsmaintenenace_general_repair["French"]["Vehicle"] = "Véhicule";
	$fieldToolTipsmaintenenace_general_repair["French"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_general_repair["French"]["Type"] = "Type";
	$fieldToolTipsmaintenenace_general_repair["French"]["Type"] = "";
	$fieldLabelsmaintenenace_general_repair["French"]["Supplier"] = "Fournisseur";
	$fieldToolTipsmaintenenace_general_repair["French"]["Supplier"] = "";
	$fieldLabelsmaintenenace_general_repair["French"]["Cost"] = "Coût";
	$fieldToolTipsmaintenenace_general_repair["French"]["Cost"] = "";
	$fieldLabelsmaintenenace_general_repair["French"]["Remarks"] = "Remarques";
	$fieldToolTipsmaintenenace_general_repair["French"]["Remarks"] = "";
	$fieldLabelsmaintenenace_general_repair["French"]["RefNo"] = "Bon de commande Non";
	$fieldToolTipsmaintenenace_general_repair["French"]["RefNo"] = "";
	$fieldLabelsmaintenenace_general_repair["French"]["SysDate"] = "Date du système";
	$fieldToolTipsmaintenenace_general_repair["French"]["SysDate"] = "";
	$fieldLabelsmaintenenace_general_repair["French"]["Date"] = "date";
	$fieldToolTipsmaintenenace_general_repair["French"]["Date"] = "";
	$fieldLabelsmaintenenace_general_repair["French"]["EnteredBy"] = "Entré par";
	$fieldToolTipsmaintenenace_general_repair["French"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_general_repair["French"]["Approval"] = "Édité par";
	$fieldToolTipsmaintenenace_general_repair["French"]["Approval"] = "";
	$fieldLabelsmaintenenace_general_repair["French"]["MeterReading"] = "Lecture de compteur";
	$fieldToolTipsmaintenenace_general_repair["French"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_general_repair["French"]["AccidentRef"] = "Références d'accidents";
	$fieldToolTipsmaintenenace_general_repair["French"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_general_repair["French"]["PaymentVoucher"] = "Référence de paiement";
	$fieldToolTipsmaintenenace_general_repair["French"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_general_repair["French"]["MaintType"] = "Type d'entretien";
	$fieldToolTipsmaintenenace_general_repair["French"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_general_repair["French"]))
		$tdatamaintenenace_general_repair[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsmaintenenace_general_repair["German"] = array();
	$fieldToolTipsmaintenenace_general_repair["German"] = array();
	$pageTitlesmaintenenace_general_repair["German"] = array();
	$fieldLabelsmaintenenace_general_repair["German"]["Id"] = "ICH WÜRDE";
	$fieldToolTipsmaintenenace_general_repair["German"]["Id"] = "";
	$fieldLabelsmaintenenace_general_repair["German"]["Fleet"] = "Flotte";
	$fieldToolTipsmaintenenace_general_repair["German"]["Fleet"] = "";
	$fieldLabelsmaintenenace_general_repair["German"]["Vehicle"] = "Fahrzeug";
	$fieldToolTipsmaintenenace_general_repair["German"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_general_repair["German"]["Type"] = "Art";
	$fieldToolTipsmaintenenace_general_repair["German"]["Type"] = "";
	$fieldLabelsmaintenenace_general_repair["German"]["Supplier"] = "Lieferant";
	$fieldToolTipsmaintenenace_general_repair["German"]["Supplier"] = "";
	$fieldLabelsmaintenenace_general_repair["German"]["Cost"] = "Kosten";
	$fieldToolTipsmaintenenace_general_repair["German"]["Cost"] = "";
	$fieldLabelsmaintenenace_general_repair["German"]["Remarks"] = "Bemerkungen";
	$fieldToolTipsmaintenenace_general_repair["German"]["Remarks"] = "";
	$fieldLabelsmaintenenace_general_repair["German"]["RefNo"] = "Bestell - Nr";
	$fieldToolTipsmaintenenace_general_repair["German"]["RefNo"] = "";
	$fieldLabelsmaintenenace_general_repair["German"]["SysDate"] = "Systemdatum";
	$fieldToolTipsmaintenenace_general_repair["German"]["SysDate"] = "";
	$fieldLabelsmaintenenace_general_repair["German"]["Date"] = "Datum";
	$fieldToolTipsmaintenenace_general_repair["German"]["Date"] = "";
	$fieldLabelsmaintenenace_general_repair["German"]["EnteredBy"] = "Betreten von";
	$fieldToolTipsmaintenenace_general_repair["German"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_general_repair["German"]["Approval"] = "Bearbeitet von";
	$fieldToolTipsmaintenenace_general_repair["German"]["Approval"] = "";
	$fieldLabelsmaintenenace_general_repair["German"]["MeterReading"] = "Zählerstand";
	$fieldToolTipsmaintenenace_general_repair["German"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_general_repair["German"]["AccidentRef"] = "Unfallverweis";
	$fieldToolTipsmaintenenace_general_repair["German"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_general_repair["German"]["PaymentVoucher"] = "Zahlungsreferenz";
	$fieldToolTipsmaintenenace_general_repair["German"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_general_repair["German"]["MaintType"] = "Wartungsart";
	$fieldToolTipsmaintenenace_general_repair["German"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_general_repair["German"]))
		$tdatamaintenenace_general_repair[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsmaintenenace_general_repair["Italian"] = array();
	$fieldToolTipsmaintenenace_general_repair["Italian"] = array();
	$pageTitlesmaintenenace_general_repair["Italian"] = array();
	$fieldLabelsmaintenenace_general_repair["Italian"]["Id"] = "ID";
	$fieldToolTipsmaintenenace_general_repair["Italian"]["Id"] = "";
	$fieldLabelsmaintenenace_general_repair["Italian"]["Fleet"] = "Flotta";
	$fieldToolTipsmaintenenace_general_repair["Italian"]["Fleet"] = "";
	$fieldLabelsmaintenenace_general_repair["Italian"]["Vehicle"] = "Veicolo";
	$fieldToolTipsmaintenenace_general_repair["Italian"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_general_repair["Italian"]["Type"] = "Digitare";
	$fieldToolTipsmaintenenace_general_repair["Italian"]["Type"] = "";
	$fieldLabelsmaintenenace_general_repair["Italian"]["Supplier"] = "Fornitore";
	$fieldToolTipsmaintenenace_general_repair["Italian"]["Supplier"] = "";
	$fieldLabelsmaintenenace_general_repair["Italian"]["Cost"] = "Costo";
	$fieldToolTipsmaintenenace_general_repair["Italian"]["Cost"] = "";
	$fieldLabelsmaintenenace_general_repair["Italian"]["Remarks"] = "Osservazioni";
	$fieldToolTipsmaintenenace_general_repair["Italian"]["Remarks"] = "";
	$fieldLabelsmaintenenace_general_repair["Italian"]["RefNo"] = "Ordine d'Acquisto N °";
	$fieldToolTipsmaintenenace_general_repair["Italian"]["RefNo"] = "";
	$fieldLabelsmaintenenace_general_repair["Italian"]["SysDate"] = "Data di sistema";
	$fieldToolTipsmaintenenace_general_repair["Italian"]["SysDate"] = "";
	$fieldLabelsmaintenenace_general_repair["Italian"]["Date"] = "Data";
	$fieldToolTipsmaintenenace_general_repair["Italian"]["Date"] = "";
	$fieldLabelsmaintenenace_general_repair["Italian"]["EnteredBy"] = "Inserito da";
	$fieldToolTipsmaintenenace_general_repair["Italian"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_general_repair["Italian"]["Approval"] = "A cura di";
	$fieldToolTipsmaintenenace_general_repair["Italian"]["Approval"] = "";
	$fieldLabelsmaintenenace_general_repair["Italian"]["MeterReading"] = "Lettura contatori";
	$fieldToolTipsmaintenenace_general_repair["Italian"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_general_repair["Italian"]["AccidentRef"] = "incidenti di riferimento";
	$fieldToolTipsmaintenenace_general_repair["Italian"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_general_repair["Italian"]["PaymentVoucher"] = "Referenza di pagamento";
	$fieldToolTipsmaintenenace_general_repair["Italian"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_general_repair["Italian"]["MaintType"] = "Tipo di manutenzione";
	$fieldToolTipsmaintenenace_general_repair["Italian"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_general_repair["Italian"]))
		$tdatamaintenenace_general_repair[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsmaintenenace_general_repair["Russian"] = array();
	$fieldToolTipsmaintenenace_general_repair["Russian"] = array();
	$pageTitlesmaintenenace_general_repair["Russian"] = array();
	$fieldLabelsmaintenenace_general_repair["Russian"]["Id"] = "? ??";
	$fieldToolTipsmaintenenace_general_repair["Russian"]["Id"] = "";
	$fieldLabelsmaintenenace_general_repair["Russian"]["Fleet"] = "????";
	$fieldToolTipsmaintenenace_general_repair["Russian"]["Fleet"] = "";
	$fieldLabelsmaintenenace_general_repair["Russian"]["Vehicle"] = "???????? ????????????";
	$fieldToolTipsmaintenenace_general_repair["Russian"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_general_repair["Russian"]["Type"] = "???";
	$fieldToolTipsmaintenenace_general_repair["Russian"]["Type"] = "";
	$fieldLabelsmaintenenace_general_repair["Russian"]["Supplier"] = "?????????";
	$fieldToolTipsmaintenenace_general_repair["Russian"]["Supplier"] = "";
	$fieldLabelsmaintenenace_general_repair["Russian"]["Cost"] = "?????????";
	$fieldToolTipsmaintenenace_general_repair["Russian"]["Cost"] = "";
	$fieldLabelsmaintenenace_general_repair["Russian"]["Remarks"] = "?????????";
	$fieldToolTipsmaintenenace_general_repair["Russian"]["Remarks"] = "";
	$fieldLabelsmaintenenace_general_repair["Russian"]["RefNo"] = "????? ?????";
	$fieldToolTipsmaintenenace_general_repair["Russian"]["RefNo"] = "";
	$fieldLabelsmaintenenace_general_repair["Russian"]["SysDate"] = "System Date";
	$fieldToolTipsmaintenenace_general_repair["Russian"]["SysDate"] = "";
	$fieldLabelsmaintenenace_general_repair["Russian"]["Date"] = "????";
	$fieldToolTipsmaintenenace_general_repair["Russian"]["Date"] = "";
	$fieldLabelsmaintenenace_general_repair["Russian"]["EnteredBy"] = "??????";
	$fieldToolTipsmaintenenace_general_repair["Russian"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_general_repair["Russian"]["Approval"] = "???????????????";
	$fieldToolTipsmaintenenace_general_repair["Russian"]["Approval"] = "";
	$fieldLabelsmaintenenace_general_repair["Russian"]["MeterReading"] = "????????? ????????";
	$fieldToolTipsmaintenenace_general_repair["Russian"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_general_repair["Russian"]["AccidentRef"] = "?? ?????????? ??????? ??????";
	$fieldToolTipsmaintenenace_general_repair["Russian"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_general_repair["Russian"]["PaymentVoucher"] = "?????? ??????";
	$fieldToolTipsmaintenenace_general_repair["Russian"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_general_repair["Russian"]["MaintType"] = "??? ???????????? ????????????";
	$fieldToolTipsmaintenenace_general_repair["Russian"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_general_repair["Russian"]))
		$tdatamaintenenace_general_repair[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmaintenenace_general_repair["Spanish"] = array();
	$fieldToolTipsmaintenenace_general_repair["Spanish"] = array();
	$pageTitlesmaintenenace_general_repair["Spanish"] = array();
	$fieldLabelsmaintenenace_general_repair["Spanish"]["Id"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipsmaintenenace_general_repair["Spanish"]["Id"] = "";
	$fieldLabelsmaintenenace_general_repair["Spanish"]["Fleet"] = "Flota";
	$fieldToolTipsmaintenenace_general_repair["Spanish"]["Fleet"] = "";
	$fieldLabelsmaintenenace_general_repair["Spanish"]["Vehicle"] = "Vehículo";
	$fieldToolTipsmaintenenace_general_repair["Spanish"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_general_repair["Spanish"]["Type"] = "Tipo";
	$fieldToolTipsmaintenenace_general_repair["Spanish"]["Type"] = "";
	$fieldLabelsmaintenenace_general_repair["Spanish"]["Supplier"] = "Proveedor";
	$fieldToolTipsmaintenenace_general_repair["Spanish"]["Supplier"] = "";
	$fieldLabelsmaintenenace_general_repair["Spanish"]["Cost"] = "Costo";
	$fieldToolTipsmaintenenace_general_repair["Spanish"]["Cost"] = "";
	$fieldLabelsmaintenenace_general_repair["Spanish"]["Remarks"] = "Observaciones";
	$fieldToolTipsmaintenenace_general_repair["Spanish"]["Remarks"] = "";
	$fieldLabelsmaintenenace_general_repair["Spanish"]["RefNo"] = "Orden de compra número";
	$fieldToolTipsmaintenenace_general_repair["Spanish"]["RefNo"] = "";
	$fieldLabelsmaintenenace_general_repair["Spanish"]["SysDate"] = "Fecha del sistema";
	$fieldToolTipsmaintenenace_general_repair["Spanish"]["SysDate"] = "";
	$fieldLabelsmaintenenace_general_repair["Spanish"]["Date"] = "Fecha";
	$fieldToolTipsmaintenenace_general_repair["Spanish"]["Date"] = "";
	$fieldLabelsmaintenenace_general_repair["Spanish"]["EnteredBy"] = "Introducido por";
	$fieldToolTipsmaintenenace_general_repair["Spanish"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_general_repair["Spanish"]["Approval"] = "Editado por";
	$fieldToolTipsmaintenenace_general_repair["Spanish"]["Approval"] = "";
	$fieldLabelsmaintenenace_general_repair["Spanish"]["MeterReading"] = "Lectura del medidor";
	$fieldToolTipsmaintenenace_general_repair["Spanish"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_general_repair["Spanish"]["AccidentRef"] = "Referencia de Accidente";
	$fieldToolTipsmaintenenace_general_repair["Spanish"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_general_repair["Spanish"]["PaymentVoucher"] = "Referencia de pago";
	$fieldToolTipsmaintenenace_general_repair["Spanish"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_general_repair["Spanish"]["MaintType"] = "Tipo de mantenimiento";
	$fieldToolTipsmaintenenace_general_repair["Spanish"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_general_repair["Spanish"]))
		$tdatamaintenenace_general_repair[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmaintenenace_general_repair[""] = array();
	$fieldToolTipsmaintenenace_general_repair[""] = array();
	$pageTitlesmaintenenace_general_repair[""] = array();
	if (count($fieldToolTipsmaintenenace_general_repair[""]))
		$tdatamaintenenace_general_repair[".isUseToolTips"] = true;
}


	$tdatamaintenenace_general_repair[".NCSearch"] = true;



$tdatamaintenenace_general_repair[".shortTableName"] = "maintenenace_general_repair";
$tdatamaintenenace_general_repair[".nSecOptions"] = 0;
$tdatamaintenenace_general_repair[".recsPerRowPrint"] = 1;
$tdatamaintenenace_general_repair[".mainTableOwnerID"] = "";
$tdatamaintenenace_general_repair[".moveNext"] = 1;
$tdatamaintenenace_general_repair[".entityType"] = 1;

$tdatamaintenenace_general_repair[".strOriginalTableName"] = "maintenenace";

		 



$tdatamaintenenace_general_repair[".showAddInPopup"] = false;

$tdatamaintenenace_general_repair[".showEditInPopup"] = false;

$tdatamaintenenace_general_repair[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamaintenenace_general_repair[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamaintenenace_general_repair[".fieldsForRegister"] = array();

	$tdatamaintenenace_general_repair[".listAjax"] = true;

	$tdatamaintenenace_general_repair[".audit"] = false;

	$tdatamaintenenace_general_repair[".locking"] = false;

$tdatamaintenenace_general_repair[".edit"] = true;
$tdatamaintenenace_general_repair[".afterEditAction"] = 1;
$tdatamaintenenace_general_repair[".closePopupAfterEdit"] = 1;
$tdatamaintenenace_general_repair[".afterEditActionDetTable"] = "";

$tdatamaintenenace_general_repair[".add"] = true;
$tdatamaintenenace_general_repair[".afterAddAction"] = 1;
$tdatamaintenenace_general_repair[".closePopupAfterAdd"] = 1;
$tdatamaintenenace_general_repair[".afterAddActionDetTable"] = "";

$tdatamaintenenace_general_repair[".list"] = true;




$tdatamaintenenace_general_repair[".view"] = true;

$tdatamaintenenace_general_repair[".import"] = true;

$tdatamaintenenace_general_repair[".exportTo"] = true;

$tdatamaintenenace_general_repair[".printFriendly"] = true;

$tdatamaintenenace_general_repair[".delete"] = true;

$tdatamaintenenace_general_repair[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamaintenenace_general_repair[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatamaintenenace_general_repair[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatamaintenenace_general_repair[".searchSaving"] = false;
//

$tdatamaintenenace_general_repair[".showSearchPanel"] = true;
		$tdatamaintenenace_general_repair[".flexibleSearch"] = true;

$tdatamaintenenace_general_repair[".isUseAjaxSuggest"] = true;

$tdatamaintenenace_general_repair[".rowHighlite"] = true;



$tdatamaintenenace_general_repair[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamaintenenace_general_repair[".isUseTimeForSearch"] = false;





$tdatamaintenenace_general_repair[".allSearchFields"] = array();
$tdatamaintenenace_general_repair[".filterFields"] = array();
$tdatamaintenenace_general_repair[".requiredSearchFields"] = array();

$tdatamaintenenace_general_repair[".allSearchFields"][] = "Date";
	$tdatamaintenenace_general_repair[".allSearchFields"][] = "Id";
	$tdatamaintenenace_general_repair[".allSearchFields"][] = "MaintType";
	$tdatamaintenenace_general_repair[".allSearchFields"][] = "Vehicle";
	$tdatamaintenenace_general_repair[".allSearchFields"][] = "Fleet";
	$tdatamaintenenace_general_repair[".allSearchFields"][] = "Type";
	$tdatamaintenenace_general_repair[".allSearchFields"][] = "MeterReading";
	$tdatamaintenenace_general_repair[".allSearchFields"][] = "RefNo";
	$tdatamaintenenace_general_repair[".allSearchFields"][] = "Supplier";
	$tdatamaintenenace_general_repair[".allSearchFields"][] = "Cost";
	$tdatamaintenenace_general_repair[".allSearchFields"][] = "PaymentVoucher";
	$tdatamaintenenace_general_repair[".allSearchFields"][] = "Remarks";
	$tdatamaintenenace_general_repair[".allSearchFields"][] = "EnteredBy";
	$tdatamaintenenace_general_repair[".allSearchFields"][] = "SysDate";
	$tdatamaintenenace_general_repair[".allSearchFields"][] = "Approval";
	

$tdatamaintenenace_general_repair[".googleLikeFields"] = array();
$tdatamaintenenace_general_repair[".googleLikeFields"][] = "Id";
$tdatamaintenenace_general_repair[".googleLikeFields"][] = "Fleet";
$tdatamaintenenace_general_repair[".googleLikeFields"][] = "Vehicle";
$tdatamaintenenace_general_repair[".googleLikeFields"][] = "Type";
$tdatamaintenenace_general_repair[".googleLikeFields"][] = "Supplier";
$tdatamaintenenace_general_repair[".googleLikeFields"][] = "Cost";
$tdatamaintenenace_general_repair[".googleLikeFields"][] = "Remarks";
$tdatamaintenenace_general_repair[".googleLikeFields"][] = "RefNo";
$tdatamaintenenace_general_repair[".googleLikeFields"][] = "SysDate";
$tdatamaintenenace_general_repair[".googleLikeFields"][] = "Date";
$tdatamaintenenace_general_repair[".googleLikeFields"][] = "EnteredBy";
$tdatamaintenenace_general_repair[".googleLikeFields"][] = "Approval";
$tdatamaintenenace_general_repair[".googleLikeFields"][] = "MeterReading";
$tdatamaintenenace_general_repair[".googleLikeFields"][] = "AccidentRef";
$tdatamaintenenace_general_repair[".googleLikeFields"][] = "PaymentVoucher";
$tdatamaintenenace_general_repair[".googleLikeFields"][] = "MaintType";


$tdatamaintenenace_general_repair[".advSearchFields"] = array();
$tdatamaintenenace_general_repair[".advSearchFields"][] = "Date";
$tdatamaintenenace_general_repair[".advSearchFields"][] = "Id";
$tdatamaintenenace_general_repair[".advSearchFields"][] = "MaintType";
$tdatamaintenenace_general_repair[".advSearchFields"][] = "Vehicle";
$tdatamaintenenace_general_repair[".advSearchFields"][] = "Fleet";
$tdatamaintenenace_general_repair[".advSearchFields"][] = "Type";
$tdatamaintenenace_general_repair[".advSearchFields"][] = "MeterReading";
$tdatamaintenenace_general_repair[".advSearchFields"][] = "RefNo";
$tdatamaintenenace_general_repair[".advSearchFields"][] = "Supplier";
$tdatamaintenenace_general_repair[".advSearchFields"][] = "Cost";
$tdatamaintenenace_general_repair[".advSearchFields"][] = "PaymentVoucher";
$tdatamaintenenace_general_repair[".advSearchFields"][] = "Remarks";
$tdatamaintenenace_general_repair[".advSearchFields"][] = "EnteredBy";
$tdatamaintenenace_general_repair[".advSearchFields"][] = "SysDate";
$tdatamaintenenace_general_repair[".advSearchFields"][] = "Approval";

$tdatamaintenenace_general_repair[".tableType"] = "list";

$tdatamaintenenace_general_repair[".printerPageOrientation"] = 0;
$tdatamaintenenace_general_repair[".nPrinterPageScale"] = 100;

$tdatamaintenenace_general_repair[".nPrinterSplitRecords"] = 40;

$tdatamaintenenace_general_repair[".nPrinterPDFSplitRecords"] = 40;



$tdatamaintenenace_general_repair[".geocodingEnabled"] = false;





$tdatamaintenenace_general_repair[".listGridLayout"] = 3;


$tdatamaintenenace_general_repair[".isResizeColumns"] = true;



// view page pdf
$tdatamaintenenace_general_repair[".isViewPagePDF"] = true;
$tdatamaintenenace_general_repair[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatamaintenenace_general_repair[".isPrinterPagePDF"] = true;
$tdatamaintenenace_general_repair[".nPrinterPagePDFScale"] = 100;

$tdatamaintenenace_general_repair[".totalsFields"] = array();
$tdatamaintenenace_general_repair[".totalsFields"][] = array(
	"fName" => "Cost",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatamaintenenace_general_repair[".pageSize"] = 20;

$tdatamaintenenace_general_repair[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamaintenenace_general_repair[".strOrderBy"] = $tstrOrderBy;

$tdatamaintenenace_general_repair[".orderindexes"] = array();

$tdatamaintenenace_general_repair[".sqlHead"] = "SELECT Id,  Fleet,  Vehicle,  `Type`,  Supplier,  Cost,  Remarks,  RefNo,  `SysDate`,  `Date`,  EnteredBy,  Approval,  MeterReading,  AccidentRef,  PaymentVoucher,  MaintType";
$tdatamaintenenace_general_repair[".sqlFrom"] = "FROM maintenenace";
$tdatamaintenenace_general_repair[".sqlWhereExpr"] = "MaintType =\"General Repair\"";
$tdatamaintenenace_general_repair[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatamaintenenace_general_repair[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamaintenenace_general_repair[".arrGroupsPerPage"] = $arrGPP;

$tdatamaintenenace_general_repair[".highlightSearchResults"] = true;

$tableKeysmaintenenace_general_repair = array();
$tableKeysmaintenenace_general_repair[] = "Id";
$tdatamaintenenace_general_repair[".Keys"] = $tableKeysmaintenenace_general_repair;

$tdatamaintenenace_general_repair[".listFields"] = array();
$tdatamaintenenace_general_repair[".listFields"][] = "Id";
$tdatamaintenenace_general_repair[".listFields"][] = "Date";
$tdatamaintenenace_general_repair[".listFields"][] = "MaintType";
$tdatamaintenenace_general_repair[".listFields"][] = "Vehicle";
$tdatamaintenenace_general_repair[".listFields"][] = "Fleet";
$tdatamaintenenace_general_repair[".listFields"][] = "Type";
$tdatamaintenenace_general_repair[".listFields"][] = "MeterReading";
$tdatamaintenenace_general_repair[".listFields"][] = "RefNo";
$tdatamaintenenace_general_repair[".listFields"][] = "Supplier";
$tdatamaintenenace_general_repair[".listFields"][] = "Cost";
$tdatamaintenenace_general_repair[".listFields"][] = "PaymentVoucher";
$tdatamaintenenace_general_repair[".listFields"][] = "Remarks";
$tdatamaintenenace_general_repair[".listFields"][] = "EnteredBy";

$tdatamaintenenace_general_repair[".hideMobileList"] = array();


$tdatamaintenenace_general_repair[".viewFields"] = array();
$tdatamaintenenace_general_repair[".viewFields"][] = "Id";
$tdatamaintenenace_general_repair[".viewFields"][] = "Date";
$tdatamaintenenace_general_repair[".viewFields"][] = "MaintType";
$tdatamaintenenace_general_repair[".viewFields"][] = "Vehicle";
$tdatamaintenenace_general_repair[".viewFields"][] = "Fleet";
$tdatamaintenenace_general_repair[".viewFields"][] = "Type";
$tdatamaintenenace_general_repair[".viewFields"][] = "MeterReading";
$tdatamaintenenace_general_repair[".viewFields"][] = "RefNo";
$tdatamaintenenace_general_repair[".viewFields"][] = "Supplier";
$tdatamaintenenace_general_repair[".viewFields"][] = "Cost";
$tdatamaintenenace_general_repair[".viewFields"][] = "PaymentVoucher";
$tdatamaintenenace_general_repair[".viewFields"][] = "Remarks";
$tdatamaintenenace_general_repair[".viewFields"][] = "EnteredBy";
$tdatamaintenenace_general_repair[".viewFields"][] = "SysDate";
$tdatamaintenenace_general_repair[".viewFields"][] = "Approval";

$tdatamaintenenace_general_repair[".addFields"] = array();
$tdatamaintenenace_general_repair[".addFields"][] = "MaintType";
$tdatamaintenenace_general_repair[".addFields"][] = "Fleet";
$tdatamaintenenace_general_repair[".addFields"][] = "Vehicle";
$tdatamaintenenace_general_repair[".addFields"][] = "Type";
$tdatamaintenenace_general_repair[".addFields"][] = "Date";
$tdatamaintenenace_general_repair[".addFields"][] = "MeterReading";
$tdatamaintenenace_general_repair[".addFields"][] = "RefNo";
$tdatamaintenenace_general_repair[".addFields"][] = "Supplier";
$tdatamaintenenace_general_repair[".addFields"][] = "Cost";
$tdatamaintenenace_general_repair[".addFields"][] = "PaymentVoucher";
$tdatamaintenenace_general_repair[".addFields"][] = "Remarks";
$tdatamaintenenace_general_repair[".addFields"][] = "SysDate";
$tdatamaintenenace_general_repair[".addFields"][] = "EnteredBy";

$tdatamaintenenace_general_repair[".masterListFields"] = array();
$tdatamaintenenace_general_repair[".masterListFields"][] = "Date";
$tdatamaintenenace_general_repair[".masterListFields"][] = "Id";
$tdatamaintenenace_general_repair[".masterListFields"][] = "MaintType";
$tdatamaintenenace_general_repair[".masterListFields"][] = "Vehicle";
$tdatamaintenenace_general_repair[".masterListFields"][] = "Fleet";
$tdatamaintenenace_general_repair[".masterListFields"][] = "Type";
$tdatamaintenenace_general_repair[".masterListFields"][] = "MeterReading";
$tdatamaintenenace_general_repair[".masterListFields"][] = "RefNo";
$tdatamaintenenace_general_repair[".masterListFields"][] = "Supplier";
$tdatamaintenenace_general_repair[".masterListFields"][] = "Cost";
$tdatamaintenenace_general_repair[".masterListFields"][] = "AccidentRef";
$tdatamaintenenace_general_repair[".masterListFields"][] = "PaymentVoucher";
$tdatamaintenenace_general_repair[".masterListFields"][] = "Remarks";
$tdatamaintenenace_general_repair[".masterListFields"][] = "SysDate";
$tdatamaintenenace_general_repair[".masterListFields"][] = "EnteredBy";
$tdatamaintenenace_general_repair[".masterListFields"][] = "Approval";

$tdatamaintenenace_general_repair[".inlineAddFields"] = array();

$tdatamaintenenace_general_repair[".editFields"] = array();
$tdatamaintenenace_general_repair[".editFields"][] = "Date";
$tdatamaintenenace_general_repair[".editFields"][] = "MaintType";
$tdatamaintenenace_general_repair[".editFields"][] = "Vehicle";
$tdatamaintenenace_general_repair[".editFields"][] = "Fleet";
$tdatamaintenenace_general_repair[".editFields"][] = "Type";
$tdatamaintenenace_general_repair[".editFields"][] = "MeterReading";
$tdatamaintenenace_general_repair[".editFields"][] = "RefNo";
$tdatamaintenenace_general_repair[".editFields"][] = "Supplier";
$tdatamaintenenace_general_repair[".editFields"][] = "Cost";
$tdatamaintenenace_general_repair[".editFields"][] = "PaymentVoucher";
$tdatamaintenenace_general_repair[".editFields"][] = "Remarks";
$tdatamaintenenace_general_repair[".editFields"][] = "SysDate";
$tdatamaintenenace_general_repair[".editFields"][] = "EnteredBy";
$tdatamaintenenace_general_repair[".editFields"][] = "Approval";

$tdatamaintenenace_general_repair[".inlineEditFields"] = array();

$tdatamaintenenace_general_repair[".updateSelectedFields"] = array();
$tdatamaintenenace_general_repair[".updateSelectedFields"][] = "Date";
$tdatamaintenenace_general_repair[".updateSelectedFields"][] = "MaintType";
$tdatamaintenenace_general_repair[".updateSelectedFields"][] = "Vehicle";
$tdatamaintenenace_general_repair[".updateSelectedFields"][] = "Fleet";
$tdatamaintenenace_general_repair[".updateSelectedFields"][] = "Type";
$tdatamaintenenace_general_repair[".updateSelectedFields"][] = "MeterReading";
$tdatamaintenenace_general_repair[".updateSelectedFields"][] = "RefNo";
$tdatamaintenenace_general_repair[".updateSelectedFields"][] = "Supplier";
$tdatamaintenenace_general_repair[".updateSelectedFields"][] = "Cost";
$tdatamaintenenace_general_repair[".updateSelectedFields"][] = "PaymentVoucher";
$tdatamaintenenace_general_repair[".updateSelectedFields"][] = "Remarks";
$tdatamaintenenace_general_repair[".updateSelectedFields"][] = "SysDate";
$tdatamaintenenace_general_repair[".updateSelectedFields"][] = "EnteredBy";
$tdatamaintenenace_general_repair[".updateSelectedFields"][] = "Approval";


$tdatamaintenenace_general_repair[".exportFields"] = array();
$tdatamaintenenace_general_repair[".exportFields"][] = "Date";
$tdatamaintenenace_general_repair[".exportFields"][] = "Id";
$tdatamaintenenace_general_repair[".exportFields"][] = "MaintType";
$tdatamaintenenace_general_repair[".exportFields"][] = "Vehicle";
$tdatamaintenenace_general_repair[".exportFields"][] = "Fleet";
$tdatamaintenenace_general_repair[".exportFields"][] = "Type";
$tdatamaintenenace_general_repair[".exportFields"][] = "MeterReading";
$tdatamaintenenace_general_repair[".exportFields"][] = "RefNo";
$tdatamaintenenace_general_repair[".exportFields"][] = "Supplier";
$tdatamaintenenace_general_repair[".exportFields"][] = "Cost";
$tdatamaintenenace_general_repair[".exportFields"][] = "PaymentVoucher";
$tdatamaintenenace_general_repair[".exportFields"][] = "Remarks";
$tdatamaintenenace_general_repair[".exportFields"][] = "EnteredBy";
$tdatamaintenenace_general_repair[".exportFields"][] = "SysDate";
$tdatamaintenenace_general_repair[".exportFields"][] = "Approval";

$tdatamaintenenace_general_repair[".importFields"] = array();
$tdatamaintenenace_general_repair[".importFields"][] = "Id";
$tdatamaintenenace_general_repair[".importFields"][] = "Fleet";
$tdatamaintenenace_general_repair[".importFields"][] = "Vehicle";
$tdatamaintenenace_general_repair[".importFields"][] = "Type";
$tdatamaintenenace_general_repair[".importFields"][] = "Supplier";
$tdatamaintenenace_general_repair[".importFields"][] = "Cost";
$tdatamaintenenace_general_repair[".importFields"][] = "Remarks";
$tdatamaintenenace_general_repair[".importFields"][] = "RefNo";
$tdatamaintenenace_general_repair[".importFields"][] = "SysDate";
$tdatamaintenenace_general_repair[".importFields"][] = "Date";
$tdatamaintenenace_general_repair[".importFields"][] = "EnteredBy";
$tdatamaintenenace_general_repair[".importFields"][] = "Approval";
$tdatamaintenenace_general_repair[".importFields"][] = "MeterReading";
$tdatamaintenenace_general_repair[".importFields"][] = "PaymentVoucher";
$tdatamaintenenace_general_repair[".importFields"][] = "MaintType";

$tdatamaintenenace_general_repair[".printFields"] = array();
$tdatamaintenenace_general_repair[".printFields"][] = "Date";
$tdatamaintenenace_general_repair[".printFields"][] = "Id";
$tdatamaintenenace_general_repair[".printFields"][] = "MaintType";
$tdatamaintenenace_general_repair[".printFields"][] = "Vehicle";
$tdatamaintenenace_general_repair[".printFields"][] = "Fleet";
$tdatamaintenenace_general_repair[".printFields"][] = "Type";
$tdatamaintenenace_general_repair[".printFields"][] = "MeterReading";
$tdatamaintenenace_general_repair[".printFields"][] = "RefNo";
$tdatamaintenenace_general_repair[".printFields"][] = "Supplier";
$tdatamaintenenace_general_repair[".printFields"][] = "Cost";
$tdatamaintenenace_general_repair[".printFields"][] = "PaymentVoucher";
$tdatamaintenenace_general_repair[".printFields"][] = "Remarks";
$tdatamaintenenace_general_repair[".printFields"][] = "EnteredBy";
$tdatamaintenenace_general_repair[".printFields"][] = "SysDate";
$tdatamaintenenace_general_repair[".printFields"][] = "Approval";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_general_repair","Id");
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




	$tdatamaintenenace_general_repair["Id"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_general_repair","Fleet");
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
	$edata["DependentLookups"][] = "Vehicle";

	
	
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




	$tdatamaintenenace_general_repair["Fleet"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_general_repair","Vehicle");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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
		$edata["autoCompleteFields"][] = array('masterF'=>"Type", 'lookupF'=>"Type");
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




	$tdatamaintenenace_general_repair["Vehicle"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_general_repair","Type");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamaintenenace_general_repair["Type"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_general_repair","Supplier");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamaintenenace_general_repair["Supplier"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_general_repair","Cost");
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




	$tdatamaintenenace_general_repair["Cost"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_general_repair","Remarks");
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




	$tdatamaintenenace_general_repair["Remarks"] = $fdata;
//	RefNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "RefNo";
	$fdata["GoodName"] = "RefNo";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_general_repair","RefNo");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamaintenenace_general_repair["RefNo"] = $fdata;
//	SysDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SysDate";
	$fdata["GoodName"] = "SysDate";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_general_repair","SysDate");
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




	$tdatamaintenenace_general_repair["SysDate"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_general_repair","Date");
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




	$tdatamaintenenace_general_repair["Date"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_general_repair","EnteredBy");
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




	$tdatamaintenenace_general_repair["EnteredBy"] = $fdata;
//	Approval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Approval";
	$fdata["GoodName"] = "Approval";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_general_repair","Approval");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamaintenenace_general_repair["Approval"] = $fdata;
//	MeterReading
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "MeterReading";
	$fdata["GoodName"] = "MeterReading";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_general_repair","MeterReading");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamaintenenace_general_repair["MeterReading"] = $fdata;
//	AccidentRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "AccidentRef";
	$fdata["GoodName"] = "AccidentRef";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_general_repair","AccidentRef");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "AccidentRef";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccidentRef";

	
	
			
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "accidents";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Id";

	
	$edata["LookupOrderBy"] = "Id";

	
	
	
	

	
	
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








	$tdatamaintenenace_general_repair["AccidentRef"] = $fdata;
//	PaymentVoucher
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "PaymentVoucher";
	$fdata["GoodName"] = "PaymentVoucher";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_general_repair","PaymentVoucher");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PaymentVoucher";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PaymentVoucher";

	
	
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




	$tdatamaintenenace_general_repair["PaymentVoucher"] = $fdata;
//	MaintType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "MaintType";
	$fdata["GoodName"] = "MaintType";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_general_repair","MaintType");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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




	$tdatamaintenenace_general_repair["MaintType"] = $fdata;


$tables_data["maintenenace-general-repair"]=&$tdatamaintenenace_general_repair;
$field_labels["maintenenace_general_repair"] = &$fieldLabelsmaintenenace_general_repair;
$fieldToolTips["maintenenace_general_repair"] = &$fieldToolTipsmaintenenace_general_repair;
$page_titles["maintenenace_general_repair"] = &$pageTitlesmaintenenace_general_repair;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["maintenenace-general-repair"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["maintenenace-general-repair"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_maintenenace_general_repair()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  Fleet,  Vehicle,  `Type`,  Supplier,  Cost,  Remarks,  RefNo,  `SysDate`,  `Date`,  EnteredBy,  Approval,  MeterReading,  AccidentRef,  PaymentVoucher,  MaintType";
$proto0["m_strFrom"] = "FROM maintenenace";
$proto0["m_strWhere"] = "MaintType =\"General Repair\"";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "MaintType =\"General Repair\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "MaintType",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-general-repair"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=\"General Repair\"";
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
	"m_srcTableName" => "maintenenace-general-repair"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "maintenenace-general-repair";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-general-repair"
));

$proto8["m_sql"] = "Fleet";
$proto8["m_srcTableName"] = "maintenenace-general-repair";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-general-repair"
));

$proto10["m_sql"] = "Vehicle";
$proto10["m_srcTableName"] = "maintenenace-general-repair";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-general-repair"
));

$proto12["m_sql"] = "`Type`";
$proto12["m_srcTableName"] = "maintenenace-general-repair";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-general-repair"
));

$proto14["m_sql"] = "Supplier";
$proto14["m_srcTableName"] = "maintenenace-general-repair";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-general-repair"
));

$proto16["m_sql"] = "Cost";
$proto16["m_srcTableName"] = "maintenenace-general-repair";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-general-repair"
));

$proto18["m_sql"] = "Remarks";
$proto18["m_srcTableName"] = "maintenenace-general-repair";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNo",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-general-repair"
));

$proto20["m_sql"] = "RefNo";
$proto20["m_srcTableName"] = "maintenenace-general-repair";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "SysDate",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-general-repair"
));

$proto22["m_sql"] = "`SysDate`";
$proto22["m_srcTableName"] = "maintenenace-general-repair";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-general-repair"
));

$proto24["m_sql"] = "`Date`";
$proto24["m_srcTableName"] = "maintenenace-general-repair";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-general-repair"
));

$proto26["m_sql"] = "EnteredBy";
$proto26["m_srcTableName"] = "maintenenace-general-repair";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Approval",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-general-repair"
));

$proto28["m_sql"] = "Approval";
$proto28["m_srcTableName"] = "maintenenace-general-repair";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "MeterReading",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-general-repair"
));

$proto30["m_sql"] = "MeterReading";
$proto30["m_srcTableName"] = "maintenenace-general-repair";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "AccidentRef",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-general-repair"
));

$proto32["m_sql"] = "AccidentRef";
$proto32["m_srcTableName"] = "maintenenace-general-repair";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentVoucher",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-general-repair"
));

$proto34["m_sql"] = "PaymentVoucher";
$proto34["m_srcTableName"] = "maintenenace-general-repair";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "MaintType",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-general-repair"
));

$proto36["m_sql"] = "MaintType";
$proto36["m_srcTableName"] = "maintenenace-general-repair";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "maintenenace";
$proto39["m_srcTableName"] = "maintenenace-general-repair";
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
$proto38["m_srcTableName"] = "maintenenace-general-repair";
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
$proto0["m_srcTableName"]="maintenenace-general-repair";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_maintenenace_general_repair = createSqlQuery_maintenenace_general_repair();


	
					
;

																

$tdatamaintenenace_general_repair[".sqlquery"] = $queryData_maintenenace_general_repair;

$tableEvents["maintenenace-general-repair"] = new eventsBase;
$tdatamaintenenace_general_repair[".hasEvents"] = false;

?>