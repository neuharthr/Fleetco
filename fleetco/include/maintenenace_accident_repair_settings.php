<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamaintenenace_accident_repair = array();
	$tdatamaintenenace_accident_repair[".truncateText"] = true;
	$tdatamaintenenace_accident_repair[".NumberOfChars"] = 80;
	$tdatamaintenenace_accident_repair[".ShortName"] = "maintenenace_accident_repair";
	$tdatamaintenenace_accident_repair[".OwnerID"] = "";
	$tdatamaintenenace_accident_repair[".OriginalTable"] = "maintenenace";

//	field labels
$fieldLabelsmaintenenace_accident_repair = array();
$fieldToolTipsmaintenenace_accident_repair = array();
$pageTitlesmaintenenace_accident_repair = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmaintenenace_accident_repair["English"] = array();
	$fieldToolTipsmaintenenace_accident_repair["English"] = array();
	$pageTitlesmaintenenace_accident_repair["English"] = array();
	$fieldLabelsmaintenenace_accident_repair["English"]["Id"] = "ID";
	$fieldToolTipsmaintenenace_accident_repair["English"]["Id"] = "";
	$fieldLabelsmaintenenace_accident_repair["English"]["Fleet"] = "Fleet";
	$fieldToolTipsmaintenenace_accident_repair["English"]["Fleet"] = "";
	$fieldLabelsmaintenenace_accident_repair["English"]["Vehicle"] = "Vehicle";
	$fieldToolTipsmaintenenace_accident_repair["English"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_accident_repair["English"]["Type"] = "Type";
	$fieldToolTipsmaintenenace_accident_repair["English"]["Type"] = "";
	$fieldLabelsmaintenenace_accident_repair["English"]["Supplier"] = "Supplier";
	$fieldToolTipsmaintenenace_accident_repair["English"]["Supplier"] = "";
	$fieldLabelsmaintenenace_accident_repair["English"]["Cost"] = "Cost";
	$fieldToolTipsmaintenenace_accident_repair["English"]["Cost"] = "";
	$fieldLabelsmaintenenace_accident_repair["English"]["Remarks"] = "Remarks";
	$fieldToolTipsmaintenenace_accident_repair["English"]["Remarks"] = "";
	$fieldLabelsmaintenenace_accident_repair["English"]["RefNo"] = "PO No";
	$fieldToolTipsmaintenenace_accident_repair["English"]["RefNo"] = "";
	$fieldLabelsmaintenenace_accident_repair["English"]["SysDate"] = "System Date";
	$fieldToolTipsmaintenenace_accident_repair["English"]["SysDate"] = "";
	$fieldLabelsmaintenenace_accident_repair["English"]["Date"] = "Date";
	$fieldToolTipsmaintenenace_accident_repair["English"]["Date"] = "";
	$fieldLabelsmaintenenace_accident_repair["English"]["EnteredBy"] = "Entered By";
	$fieldToolTipsmaintenenace_accident_repair["English"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_accident_repair["English"]["Approval"] = "Edited By";
	$fieldToolTipsmaintenenace_accident_repair["English"]["Approval"] = "";
	$fieldLabelsmaintenenace_accident_repair["English"]["MeterReading"] = "Meter Re.";
	$fieldToolTipsmaintenenace_accident_repair["English"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_accident_repair["English"]["AccidentRef"] = "Acci. Ref";
	$fieldToolTipsmaintenenace_accident_repair["English"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_accident_repair["English"]["PaymentVoucher"] = "Pay. Ref";
	$fieldToolTipsmaintenenace_accident_repair["English"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_accident_repair["English"]["MaintType"] = "Maint Type";
	$fieldToolTipsmaintenenace_accident_repair["English"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_accident_repair["English"]))
		$tdatamaintenenace_accident_repair[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsmaintenenace_accident_repair["Afrikaans"] = array();
	$fieldToolTipsmaintenenace_accident_repair["Afrikaans"] = array();
	$pageTitlesmaintenenace_accident_repair["Afrikaans"] = array();
	$fieldLabelsmaintenenace_accident_repair["Afrikaans"]["Id"] = "ID";
	$fieldToolTipsmaintenenace_accident_repair["Afrikaans"]["Id"] = "";
	$fieldLabelsmaintenenace_accident_repair["Afrikaans"]["Fleet"] = "vloot";
	$fieldToolTipsmaintenenace_accident_repair["Afrikaans"]["Fleet"] = "";
	$fieldLabelsmaintenenace_accident_repair["Afrikaans"]["Vehicle"] = "voertuig";
	$fieldToolTipsmaintenenace_accident_repair["Afrikaans"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_accident_repair["Afrikaans"]["Type"] = "tipe";
	$fieldToolTipsmaintenenace_accident_repair["Afrikaans"]["Type"] = "";
	$fieldLabelsmaintenenace_accident_repair["Afrikaans"]["Supplier"] = "verskaffer";
	$fieldToolTipsmaintenenace_accident_repair["Afrikaans"]["Supplier"] = "";
	$fieldLabelsmaintenenace_accident_repair["Afrikaans"]["Cost"] = "koste";
	$fieldToolTipsmaintenenace_accident_repair["Afrikaans"]["Cost"] = "";
	$fieldLabelsmaintenenace_accident_repair["Afrikaans"]["Remarks"] = "opmerkings";
	$fieldToolTipsmaintenenace_accident_repair["Afrikaans"]["Remarks"] = "";
	$fieldLabelsmaintenenace_accident_repair["Afrikaans"]["RefNo"] = "Bestelling Geen";
	$fieldToolTipsmaintenenace_accident_repair["Afrikaans"]["RefNo"] = "";
	$fieldLabelsmaintenenace_accident_repair["Afrikaans"]["SysDate"] = "stelsel Datum";
	$fieldToolTipsmaintenenace_accident_repair["Afrikaans"]["SysDate"] = "";
	$fieldLabelsmaintenenace_accident_repair["Afrikaans"]["Date"] = "datum";
	$fieldToolTipsmaintenenace_accident_repair["Afrikaans"]["Date"] = "";
	$fieldLabelsmaintenenace_accident_repair["Afrikaans"]["EnteredBy"] = "aangegaan deur";
	$fieldToolTipsmaintenenace_accident_repair["Afrikaans"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_accident_repair["Afrikaans"]["Approval"] = "geredigeer deur";
	$fieldToolTipsmaintenenace_accident_repair["Afrikaans"]["Approval"] = "";
	$fieldLabelsmaintenenace_accident_repair["Afrikaans"]["MeterReading"] = "meterlesing";
	$fieldToolTipsmaintenenace_accident_repair["Afrikaans"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_accident_repair["Afrikaans"]["AccidentRef"] = "ongeluk Verwysing";
	$fieldToolTipsmaintenenace_accident_repair["Afrikaans"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_accident_repair["Afrikaans"]["PaymentVoucher"] = "Inbetalingsverwyssingsnommer";
	$fieldToolTipsmaintenenace_accident_repair["Afrikaans"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_accident_repair["Afrikaans"]["MaintType"] = "maint Tipe";
	$fieldToolTipsmaintenenace_accident_repair["Afrikaans"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_accident_repair["Afrikaans"]))
		$tdatamaintenenace_accident_repair[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsmaintenenace_accident_repair["Arabic"] = array();
	$fieldToolTipsmaintenenace_accident_repair["Arabic"] = array();
	$pageTitlesmaintenenace_accident_repair["Arabic"] = array();
	$fieldLabelsmaintenenace_accident_repair["Arabic"]["Id"] = "???? ?????";
	$fieldToolTipsmaintenenace_accident_repair["Arabic"]["Id"] = "";
	$fieldLabelsmaintenenace_accident_repair["Arabic"]["Fleet"] = "?????";
	$fieldToolTipsmaintenenace_accident_repair["Arabic"]["Fleet"] = "";
	$fieldLabelsmaintenenace_accident_repair["Arabic"]["Vehicle"] = "?????";
	$fieldToolTipsmaintenenace_accident_repair["Arabic"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_accident_repair["Arabic"]["Type"] = "????";
	$fieldToolTipsmaintenenace_accident_repair["Arabic"]["Type"] = "";
	$fieldLabelsmaintenenace_accident_repair["Arabic"]["Supplier"] = "??????";
	$fieldToolTipsmaintenenace_accident_repair["Arabic"]["Supplier"] = "";
	$fieldLabelsmaintenenace_accident_repair["Arabic"]["Cost"] = "????";
	$fieldToolTipsmaintenenace_accident_repair["Arabic"]["Cost"] = "";
	$fieldLabelsmaintenenace_accident_repair["Arabic"]["Remarks"] = "???????";
	$fieldToolTipsmaintenenace_accident_repair["Arabic"]["Remarks"] = "";
	$fieldLabelsmaintenenace_accident_repair["Arabic"]["RefNo"] = "????? ???";
	$fieldToolTipsmaintenenace_accident_repair["Arabic"]["RefNo"] = "";
	$fieldLabelsmaintenenace_accident_repair["Arabic"]["SysDate"] = "????? ??????";
	$fieldToolTipsmaintenenace_accident_repair["Arabic"]["SysDate"] = "";
	$fieldLabelsmaintenenace_accident_repair["Arabic"]["Date"] = "?????";
	$fieldToolTipsmaintenenace_accident_repair["Arabic"]["Date"] = "";
	$fieldLabelsmaintenenace_accident_repair["Arabic"]["EnteredBy"] = "?? ?????? ??????";
	$fieldToolTipsmaintenenace_accident_repair["Arabic"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_accident_repair["Arabic"]["Approval"] = "???? ??????";
	$fieldToolTipsmaintenenace_accident_repair["Arabic"]["Approval"] = "";
	$fieldLabelsmaintenenace_accident_repair["Arabic"]["MeterReading"] = "????? ??????";
	$fieldToolTipsmaintenenace_accident_repair["Arabic"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_accident_repair["Arabic"]["AccidentRef"] = "???? ???????";
	$fieldToolTipsmaintenenace_accident_repair["Arabic"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_accident_repair["Arabic"]["PaymentVoucher"] = "????? ???";
	$fieldToolTipsmaintenenace_accident_repair["Arabic"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_accident_repair["Arabic"]["MaintType"] = "??? ???????";
	$fieldToolTipsmaintenenace_accident_repair["Arabic"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_accident_repair["Arabic"]))
		$tdatamaintenenace_accident_repair[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsmaintenenace_accident_repair["Chinese"] = array();
	$fieldToolTipsmaintenenace_accident_repair["Chinese"] = array();
	$pageTitlesmaintenenace_accident_repair["Chinese"] = array();
	$fieldLabelsmaintenenace_accident_repair["Chinese"]["Id"] = "ID";
	$fieldToolTipsmaintenenace_accident_repair["Chinese"]["Id"] = "";
	$fieldLabelsmaintenenace_accident_repair["Chinese"]["Fleet"] = "??";
	$fieldToolTipsmaintenenace_accident_repair["Chinese"]["Fleet"] = "";
	$fieldLabelsmaintenenace_accident_repair["Chinese"]["Vehicle"] = "??";
	$fieldToolTipsmaintenenace_accident_repair["Chinese"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_accident_repair["Chinese"]["Type"] = "??";
	$fieldToolTipsmaintenenace_accident_repair["Chinese"]["Type"] = "";
	$fieldLabelsmaintenenace_accident_repair["Chinese"]["Supplier"] = "???";
	$fieldToolTipsmaintenenace_accident_repair["Chinese"]["Supplier"] = "";
	$fieldLabelsmaintenenace_accident_repair["Chinese"]["Cost"] = "??";
	$fieldToolTipsmaintenenace_accident_repair["Chinese"]["Cost"] = "";
	$fieldLabelsmaintenenace_accident_repair["Chinese"]["Remarks"] = "??";
	$fieldToolTipsmaintenenace_accident_repair["Chinese"]["Remarks"] = "";
	$fieldLabelsmaintenenace_accident_repair["Chinese"]["RefNo"] = "?????";
	$fieldToolTipsmaintenenace_accident_repair["Chinese"]["RefNo"] = "";
	$fieldLabelsmaintenenace_accident_repair["Chinese"]["SysDate"] = "????";
	$fieldToolTipsmaintenenace_accident_repair["Chinese"]["SysDate"] = "";
	$fieldLabelsmaintenenace_accident_repair["Chinese"]["Date"] = "??";
	$fieldToolTipsmaintenenace_accident_repair["Chinese"]["Date"] = "";
	$fieldLabelsmaintenenace_accident_repair["Chinese"]["EnteredBy"] = "???";
	$fieldToolTipsmaintenenace_accident_repair["Chinese"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_accident_repair["Chinese"]["Approval"] = "??";
	$fieldToolTipsmaintenenace_accident_repair["Chinese"]["Approval"] = "";
	$fieldLabelsmaintenenace_accident_repair["Chinese"]["MeterReading"] = "????";
	$fieldToolTipsmaintenenace_accident_repair["Chinese"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_accident_repair["Chinese"]["AccidentRef"] = "????";
	$fieldToolTipsmaintenenace_accident_repair["Chinese"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_accident_repair["Chinese"]["PaymentVoucher"] = "????";
	$fieldToolTipsmaintenenace_accident_repair["Chinese"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_accident_repair["Chinese"]["MaintType"] = "????";
	$fieldToolTipsmaintenenace_accident_repair["Chinese"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_accident_repair["Chinese"]))
		$tdatamaintenenace_accident_repair[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsmaintenenace_accident_repair["French"] = array();
	$fieldToolTipsmaintenenace_accident_repair["French"] = array();
	$pageTitlesmaintenenace_accident_repair["French"] = array();
	$fieldLabelsmaintenenace_accident_repair["French"]["Id"] = "ID";
	$fieldToolTipsmaintenenace_accident_repair["French"]["Id"] = "";
	$fieldLabelsmaintenenace_accident_repair["French"]["Fleet"] = "Flotte";
	$fieldToolTipsmaintenenace_accident_repair["French"]["Fleet"] = "";
	$fieldLabelsmaintenenace_accident_repair["French"]["Vehicle"] = "Véhicule";
	$fieldToolTipsmaintenenace_accident_repair["French"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_accident_repair["French"]["Type"] = "Type";
	$fieldToolTipsmaintenenace_accident_repair["French"]["Type"] = "";
	$fieldLabelsmaintenenace_accident_repair["French"]["Supplier"] = "Fournisseur";
	$fieldToolTipsmaintenenace_accident_repair["French"]["Supplier"] = "";
	$fieldLabelsmaintenenace_accident_repair["French"]["Cost"] = "Coût";
	$fieldToolTipsmaintenenace_accident_repair["French"]["Cost"] = "";
	$fieldLabelsmaintenenace_accident_repair["French"]["Remarks"] = "Remarques";
	$fieldToolTipsmaintenenace_accident_repair["French"]["Remarks"] = "";
	$fieldLabelsmaintenenace_accident_repair["French"]["RefNo"] = "Bon de commande Non";
	$fieldToolTipsmaintenenace_accident_repair["French"]["RefNo"] = "";
	$fieldLabelsmaintenenace_accident_repair["French"]["SysDate"] = "Date du système";
	$fieldToolTipsmaintenenace_accident_repair["French"]["SysDate"] = "";
	$fieldLabelsmaintenenace_accident_repair["French"]["Date"] = "date";
	$fieldToolTipsmaintenenace_accident_repair["French"]["Date"] = "";
	$fieldLabelsmaintenenace_accident_repair["French"]["EnteredBy"] = "Entré par";
	$fieldToolTipsmaintenenace_accident_repair["French"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_accident_repair["French"]["Approval"] = "Édité par";
	$fieldToolTipsmaintenenace_accident_repair["French"]["Approval"] = "";
	$fieldLabelsmaintenenace_accident_repair["French"]["MeterReading"] = "Lecture de compteur";
	$fieldToolTipsmaintenenace_accident_repair["French"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_accident_repair["French"]["AccidentRef"] = "Références d'accidents";
	$fieldToolTipsmaintenenace_accident_repair["French"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_accident_repair["French"]["PaymentVoucher"] = "Référence de paiement";
	$fieldToolTipsmaintenenace_accident_repair["French"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_accident_repair["French"]["MaintType"] = "Type d'entretien";
	$fieldToolTipsmaintenenace_accident_repair["French"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_accident_repair["French"]))
		$tdatamaintenenace_accident_repair[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsmaintenenace_accident_repair["German"] = array();
	$fieldToolTipsmaintenenace_accident_repair["German"] = array();
	$pageTitlesmaintenenace_accident_repair["German"] = array();
	$fieldLabelsmaintenenace_accident_repair["German"]["Id"] = "ICH WÜRDE";
	$fieldToolTipsmaintenenace_accident_repair["German"]["Id"] = "";
	$fieldLabelsmaintenenace_accident_repair["German"]["Fleet"] = "Flotte";
	$fieldToolTipsmaintenenace_accident_repair["German"]["Fleet"] = "";
	$fieldLabelsmaintenenace_accident_repair["German"]["Vehicle"] = "Fahrzeug";
	$fieldToolTipsmaintenenace_accident_repair["German"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_accident_repair["German"]["Type"] = "Art";
	$fieldToolTipsmaintenenace_accident_repair["German"]["Type"] = "";
	$fieldLabelsmaintenenace_accident_repair["German"]["Supplier"] = "Lieferant";
	$fieldToolTipsmaintenenace_accident_repair["German"]["Supplier"] = "";
	$fieldLabelsmaintenenace_accident_repair["German"]["Cost"] = "Kosten";
	$fieldToolTipsmaintenenace_accident_repair["German"]["Cost"] = "";
	$fieldLabelsmaintenenace_accident_repair["German"]["Remarks"] = "Bemerkungen";
	$fieldToolTipsmaintenenace_accident_repair["German"]["Remarks"] = "";
	$fieldLabelsmaintenenace_accident_repair["German"]["RefNo"] = "Bestell - Nr";
	$fieldToolTipsmaintenenace_accident_repair["German"]["RefNo"] = "";
	$fieldLabelsmaintenenace_accident_repair["German"]["SysDate"] = "Systemdatum";
	$fieldToolTipsmaintenenace_accident_repair["German"]["SysDate"] = "";
	$fieldLabelsmaintenenace_accident_repair["German"]["Date"] = "Datum";
	$fieldToolTipsmaintenenace_accident_repair["German"]["Date"] = "";
	$fieldLabelsmaintenenace_accident_repair["German"]["EnteredBy"] = "Betreten von";
	$fieldToolTipsmaintenenace_accident_repair["German"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_accident_repair["German"]["Approval"] = "Bearbeitet von";
	$fieldToolTipsmaintenenace_accident_repair["German"]["Approval"] = "";
	$fieldLabelsmaintenenace_accident_repair["German"]["MeterReading"] = "Zählerstand";
	$fieldToolTipsmaintenenace_accident_repair["German"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_accident_repair["German"]["AccidentRef"] = "Unfallverweis";
	$fieldToolTipsmaintenenace_accident_repair["German"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_accident_repair["German"]["PaymentVoucher"] = "Zahlungsreferenz";
	$fieldToolTipsmaintenenace_accident_repair["German"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_accident_repair["German"]["MaintType"] = "Maint Type";
	$fieldToolTipsmaintenenace_accident_repair["German"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_accident_repair["German"]))
		$tdatamaintenenace_accident_repair[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsmaintenenace_accident_repair["Italian"] = array();
	$fieldToolTipsmaintenenace_accident_repair["Italian"] = array();
	$pageTitlesmaintenenace_accident_repair["Italian"] = array();
	$fieldLabelsmaintenenace_accident_repair["Italian"]["Id"] = "ID";
	$fieldToolTipsmaintenenace_accident_repair["Italian"]["Id"] = "";
	$fieldLabelsmaintenenace_accident_repair["Italian"]["Fleet"] = "Flotta";
	$fieldToolTipsmaintenenace_accident_repair["Italian"]["Fleet"] = "";
	$fieldLabelsmaintenenace_accident_repair["Italian"]["Vehicle"] = "Veicolo";
	$fieldToolTipsmaintenenace_accident_repair["Italian"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_accident_repair["Italian"]["Type"] = "Digitare";
	$fieldToolTipsmaintenenace_accident_repair["Italian"]["Type"] = "";
	$fieldLabelsmaintenenace_accident_repair["Italian"]["Supplier"] = "Fornitore";
	$fieldToolTipsmaintenenace_accident_repair["Italian"]["Supplier"] = "";
	$fieldLabelsmaintenenace_accident_repair["Italian"]["Cost"] = "Costo";
	$fieldToolTipsmaintenenace_accident_repair["Italian"]["Cost"] = "";
	$fieldLabelsmaintenenace_accident_repair["Italian"]["Remarks"] = "Osservazioni";
	$fieldToolTipsmaintenenace_accident_repair["Italian"]["Remarks"] = "";
	$fieldLabelsmaintenenace_accident_repair["Italian"]["RefNo"] = "Ordine d'Acquisto N °";
	$fieldToolTipsmaintenenace_accident_repair["Italian"]["RefNo"] = "";
	$fieldLabelsmaintenenace_accident_repair["Italian"]["SysDate"] = "Data di sistema";
	$fieldToolTipsmaintenenace_accident_repair["Italian"]["SysDate"] = "";
	$fieldLabelsmaintenenace_accident_repair["Italian"]["Date"] = "Data";
	$fieldToolTipsmaintenenace_accident_repair["Italian"]["Date"] = "";
	$fieldLabelsmaintenenace_accident_repair["Italian"]["EnteredBy"] = "Inserito da";
	$fieldToolTipsmaintenenace_accident_repair["Italian"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_accident_repair["Italian"]["Approval"] = "A cura di";
	$fieldToolTipsmaintenenace_accident_repair["Italian"]["Approval"] = "";
	$fieldLabelsmaintenenace_accident_repair["Italian"]["MeterReading"] = "Lettura contatori";
	$fieldToolTipsmaintenenace_accident_repair["Italian"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_accident_repair["Italian"]["AccidentRef"] = "incidenti di riferimento";
	$fieldToolTipsmaintenenace_accident_repair["Italian"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_accident_repair["Italian"]["PaymentVoucher"] = "Referenza di pagamento";
	$fieldToolTipsmaintenenace_accident_repair["Italian"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_accident_repair["Italian"]["MaintType"] = "Tipo maint";
	$fieldToolTipsmaintenenace_accident_repair["Italian"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_accident_repair["Italian"]))
		$tdatamaintenenace_accident_repair[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsmaintenenace_accident_repair["Russian"] = array();
	$fieldToolTipsmaintenenace_accident_repair["Russian"] = array();
	$pageTitlesmaintenenace_accident_repair["Russian"] = array();
	$fieldLabelsmaintenenace_accident_repair["Russian"]["Id"] = "? ??";
	$fieldToolTipsmaintenenace_accident_repair["Russian"]["Id"] = "";
	$fieldLabelsmaintenenace_accident_repair["Russian"]["Fleet"] = "????";
	$fieldToolTipsmaintenenace_accident_repair["Russian"]["Fleet"] = "";
	$fieldLabelsmaintenenace_accident_repair["Russian"]["Vehicle"] = "???????? ????????????";
	$fieldToolTipsmaintenenace_accident_repair["Russian"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_accident_repair["Russian"]["Type"] = "???";
	$fieldToolTipsmaintenenace_accident_repair["Russian"]["Type"] = "";
	$fieldLabelsmaintenenace_accident_repair["Russian"]["Supplier"] = "?????????";
	$fieldToolTipsmaintenenace_accident_repair["Russian"]["Supplier"] = "";
	$fieldLabelsmaintenenace_accident_repair["Russian"]["Cost"] = "?????????";
	$fieldToolTipsmaintenenace_accident_repair["Russian"]["Cost"] = "";
	$fieldLabelsmaintenenace_accident_repair["Russian"]["Remarks"] = "?????????";
	$fieldToolTipsmaintenenace_accident_repair["Russian"]["Remarks"] = "";
	$fieldLabelsmaintenenace_accident_repair["Russian"]["RefNo"] = "????? ?????";
	$fieldToolTipsmaintenenace_accident_repair["Russian"]["RefNo"] = "";
	$fieldLabelsmaintenenace_accident_repair["Russian"]["SysDate"] = "System Date";
	$fieldToolTipsmaintenenace_accident_repair["Russian"]["SysDate"] = "";
	$fieldLabelsmaintenenace_accident_repair["Russian"]["Date"] = "????";
	$fieldToolTipsmaintenenace_accident_repair["Russian"]["Date"] = "";
	$fieldLabelsmaintenenace_accident_repair["Russian"]["EnteredBy"] = "??????";
	$fieldToolTipsmaintenenace_accident_repair["Russian"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_accident_repair["Russian"]["Approval"] = "???????????????";
	$fieldToolTipsmaintenenace_accident_repair["Russian"]["Approval"] = "";
	$fieldLabelsmaintenenace_accident_repair["Russian"]["MeterReading"] = "????????? ????????";
	$fieldToolTipsmaintenenace_accident_repair["Russian"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_accident_repair["Russian"]["AccidentRef"] = "?? ?????????? ??????? ??????";
	$fieldToolTipsmaintenenace_accident_repair["Russian"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_accident_repair["Russian"]["PaymentVoucher"] = "?????? ??????";
	$fieldToolTipsmaintenenace_accident_repair["Russian"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_accident_repair["Russian"]["MaintType"] = "????? ???";
	$fieldToolTipsmaintenenace_accident_repair["Russian"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_accident_repair["Russian"]))
		$tdatamaintenenace_accident_repair[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmaintenenace_accident_repair["Spanish"] = array();
	$fieldToolTipsmaintenenace_accident_repair["Spanish"] = array();
	$pageTitlesmaintenenace_accident_repair["Spanish"] = array();
	$fieldLabelsmaintenenace_accident_repair["Spanish"]["Id"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipsmaintenenace_accident_repair["Spanish"]["Id"] = "";
	$fieldLabelsmaintenenace_accident_repair["Spanish"]["Fleet"] = "Flota";
	$fieldToolTipsmaintenenace_accident_repair["Spanish"]["Fleet"] = "";
	$fieldLabelsmaintenenace_accident_repair["Spanish"]["Vehicle"] = "Vehículo";
	$fieldToolTipsmaintenenace_accident_repair["Spanish"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_accident_repair["Spanish"]["Type"] = "Tipo";
	$fieldToolTipsmaintenenace_accident_repair["Spanish"]["Type"] = "";
	$fieldLabelsmaintenenace_accident_repair["Spanish"]["Supplier"] = "Proveedor";
	$fieldToolTipsmaintenenace_accident_repair["Spanish"]["Supplier"] = "";
	$fieldLabelsmaintenenace_accident_repair["Spanish"]["Cost"] = "Costo";
	$fieldToolTipsmaintenenace_accident_repair["Spanish"]["Cost"] = "";
	$fieldLabelsmaintenenace_accident_repair["Spanish"]["Remarks"] = "Observaciones";
	$fieldToolTipsmaintenenace_accident_repair["Spanish"]["Remarks"] = "";
	$fieldLabelsmaintenenace_accident_repair["Spanish"]["RefNo"] = "Orden de compra número";
	$fieldToolTipsmaintenenace_accident_repair["Spanish"]["RefNo"] = "";
	$fieldLabelsmaintenenace_accident_repair["Spanish"]["SysDate"] = "Fecha del sistema";
	$fieldToolTipsmaintenenace_accident_repair["Spanish"]["SysDate"] = "";
	$fieldLabelsmaintenenace_accident_repair["Spanish"]["Date"] = "Fecha";
	$fieldToolTipsmaintenenace_accident_repair["Spanish"]["Date"] = "";
	$fieldLabelsmaintenenace_accident_repair["Spanish"]["EnteredBy"] = "Introducido por";
	$fieldToolTipsmaintenenace_accident_repair["Spanish"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_accident_repair["Spanish"]["Approval"] = "Editado por";
	$fieldToolTipsmaintenenace_accident_repair["Spanish"]["Approval"] = "";
	$fieldLabelsmaintenenace_accident_repair["Spanish"]["MeterReading"] = "Lectura del medidor";
	$fieldToolTipsmaintenenace_accident_repair["Spanish"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_accident_repair["Spanish"]["AccidentRef"] = "Referencia de Accidente";
	$fieldToolTipsmaintenenace_accident_repair["Spanish"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_accident_repair["Spanish"]["PaymentVoucher"] = "Referencia de pago";
	$fieldToolTipsmaintenenace_accident_repair["Spanish"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_accident_repair["Spanish"]["MaintType"] = "Tipo de mantenimiento";
	$fieldToolTipsmaintenenace_accident_repair["Spanish"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_accident_repair["Spanish"]))
		$tdatamaintenenace_accident_repair[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmaintenenace_accident_repair[""] = array();
	$fieldToolTipsmaintenenace_accident_repair[""] = array();
	$pageTitlesmaintenenace_accident_repair[""] = array();
	if (count($fieldToolTipsmaintenenace_accident_repair[""]))
		$tdatamaintenenace_accident_repair[".isUseToolTips"] = true;
}


	$tdatamaintenenace_accident_repair[".NCSearch"] = true;



$tdatamaintenenace_accident_repair[".shortTableName"] = "maintenenace_accident_repair";
$tdatamaintenenace_accident_repair[".nSecOptions"] = 0;
$tdatamaintenenace_accident_repair[".recsPerRowPrint"] = 1;
$tdatamaintenenace_accident_repair[".mainTableOwnerID"] = "";
$tdatamaintenenace_accident_repair[".moveNext"] = 1;
$tdatamaintenenace_accident_repair[".entityType"] = 1;

$tdatamaintenenace_accident_repair[".strOriginalTableName"] = "maintenenace";

		 



$tdatamaintenenace_accident_repair[".showAddInPopup"] = false;

$tdatamaintenenace_accident_repair[".showEditInPopup"] = false;

$tdatamaintenenace_accident_repair[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamaintenenace_accident_repair[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamaintenenace_accident_repair[".fieldsForRegister"] = array();

	$tdatamaintenenace_accident_repair[".listAjax"] = true;

	$tdatamaintenenace_accident_repair[".audit"] = false;

	$tdatamaintenenace_accident_repair[".locking"] = false;

$tdatamaintenenace_accident_repair[".edit"] = true;
$tdatamaintenenace_accident_repair[".afterEditAction"] = 1;
$tdatamaintenenace_accident_repair[".closePopupAfterEdit"] = 1;
$tdatamaintenenace_accident_repair[".afterEditActionDetTable"] = "";

$tdatamaintenenace_accident_repair[".add"] = true;
$tdatamaintenenace_accident_repair[".afterAddAction"] = 1;
$tdatamaintenenace_accident_repair[".closePopupAfterAdd"] = 1;
$tdatamaintenenace_accident_repair[".afterAddActionDetTable"] = "";

$tdatamaintenenace_accident_repair[".list"] = true;




$tdatamaintenenace_accident_repair[".view"] = true;

$tdatamaintenenace_accident_repair[".import"] = true;

$tdatamaintenenace_accident_repair[".exportTo"] = true;

$tdatamaintenenace_accident_repair[".printFriendly"] = true;

$tdatamaintenenace_accident_repair[".delete"] = true;

$tdatamaintenenace_accident_repair[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamaintenenace_accident_repair[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatamaintenenace_accident_repair[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatamaintenenace_accident_repair[".searchSaving"] = false;
//

$tdatamaintenenace_accident_repair[".showSearchPanel"] = true;
		$tdatamaintenenace_accident_repair[".flexibleSearch"] = true;

$tdatamaintenenace_accident_repair[".isUseAjaxSuggest"] = true;

$tdatamaintenenace_accident_repair[".rowHighlite"] = true;



$tdatamaintenenace_accident_repair[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamaintenenace_accident_repair[".isUseTimeForSearch"] = false;





$tdatamaintenenace_accident_repair[".allSearchFields"] = array();
$tdatamaintenenace_accident_repair[".filterFields"] = array();
$tdatamaintenenace_accident_repair[".requiredSearchFields"] = array();

$tdatamaintenenace_accident_repair[".allSearchFields"][] = "Date";
	$tdatamaintenenace_accident_repair[".allSearchFields"][] = "Id";
	$tdatamaintenenace_accident_repair[".allSearchFields"][] = "MaintType";
	$tdatamaintenenace_accident_repair[".allSearchFields"][] = "Vehicle";
	$tdatamaintenenace_accident_repair[".allSearchFields"][] = "Fleet";
	$tdatamaintenenace_accident_repair[".allSearchFields"][] = "Type";
	$tdatamaintenenace_accident_repair[".allSearchFields"][] = "MeterReading";
	$tdatamaintenenace_accident_repair[".allSearchFields"][] = "RefNo";
	$tdatamaintenenace_accident_repair[".allSearchFields"][] = "Supplier";
	$tdatamaintenenace_accident_repair[".allSearchFields"][] = "Cost";
	$tdatamaintenenace_accident_repair[".allSearchFields"][] = "PaymentVoucher";
	$tdatamaintenenace_accident_repair[".allSearchFields"][] = "AccidentRef";
	$tdatamaintenenace_accident_repair[".allSearchFields"][] = "Remarks";
	$tdatamaintenenace_accident_repair[".allSearchFields"][] = "Approval";
	$tdatamaintenenace_accident_repair[".allSearchFields"][] = "EnteredBy";
	$tdatamaintenenace_accident_repair[".allSearchFields"][] = "SysDate";
	

$tdatamaintenenace_accident_repair[".googleLikeFields"] = array();
$tdatamaintenenace_accident_repair[".googleLikeFields"][] = "Id";
$tdatamaintenenace_accident_repair[".googleLikeFields"][] = "Fleet";
$tdatamaintenenace_accident_repair[".googleLikeFields"][] = "Vehicle";
$tdatamaintenenace_accident_repair[".googleLikeFields"][] = "Type";
$tdatamaintenenace_accident_repair[".googleLikeFields"][] = "Supplier";
$tdatamaintenenace_accident_repair[".googleLikeFields"][] = "Cost";
$tdatamaintenenace_accident_repair[".googleLikeFields"][] = "Remarks";
$tdatamaintenenace_accident_repair[".googleLikeFields"][] = "RefNo";
$tdatamaintenenace_accident_repair[".googleLikeFields"][] = "SysDate";
$tdatamaintenenace_accident_repair[".googleLikeFields"][] = "Date";
$tdatamaintenenace_accident_repair[".googleLikeFields"][] = "EnteredBy";
$tdatamaintenenace_accident_repair[".googleLikeFields"][] = "Approval";
$tdatamaintenenace_accident_repair[".googleLikeFields"][] = "MeterReading";
$tdatamaintenenace_accident_repair[".googleLikeFields"][] = "AccidentRef";
$tdatamaintenenace_accident_repair[".googleLikeFields"][] = "PaymentVoucher";
$tdatamaintenenace_accident_repair[".googleLikeFields"][] = "MaintType";


$tdatamaintenenace_accident_repair[".advSearchFields"] = array();
$tdatamaintenenace_accident_repair[".advSearchFields"][] = "Date";
$tdatamaintenenace_accident_repair[".advSearchFields"][] = "Id";
$tdatamaintenenace_accident_repair[".advSearchFields"][] = "MaintType";
$tdatamaintenenace_accident_repair[".advSearchFields"][] = "Vehicle";
$tdatamaintenenace_accident_repair[".advSearchFields"][] = "Fleet";
$tdatamaintenenace_accident_repair[".advSearchFields"][] = "Type";
$tdatamaintenenace_accident_repair[".advSearchFields"][] = "MeterReading";
$tdatamaintenenace_accident_repair[".advSearchFields"][] = "RefNo";
$tdatamaintenenace_accident_repair[".advSearchFields"][] = "Supplier";
$tdatamaintenenace_accident_repair[".advSearchFields"][] = "Cost";
$tdatamaintenenace_accident_repair[".advSearchFields"][] = "PaymentVoucher";
$tdatamaintenenace_accident_repair[".advSearchFields"][] = "AccidentRef";
$tdatamaintenenace_accident_repair[".advSearchFields"][] = "Remarks";
$tdatamaintenenace_accident_repair[".advSearchFields"][] = "Approval";
$tdatamaintenenace_accident_repair[".advSearchFields"][] = "EnteredBy";
$tdatamaintenenace_accident_repair[".advSearchFields"][] = "SysDate";

$tdatamaintenenace_accident_repair[".tableType"] = "list";

$tdatamaintenenace_accident_repair[".printerPageOrientation"] = 0;
$tdatamaintenenace_accident_repair[".nPrinterPageScale"] = 100;

$tdatamaintenenace_accident_repair[".nPrinterSplitRecords"] = 40;

$tdatamaintenenace_accident_repair[".nPrinterPDFSplitRecords"] = 40;



$tdatamaintenenace_accident_repair[".geocodingEnabled"] = false;





$tdatamaintenenace_accident_repair[".listGridLayout"] = 3;


$tdatamaintenenace_accident_repair[".isResizeColumns"] = true;



// view page pdf
$tdatamaintenenace_accident_repair[".isViewPagePDF"] = true;
$tdatamaintenenace_accident_repair[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatamaintenenace_accident_repair[".isPrinterPagePDF"] = true;
$tdatamaintenenace_accident_repair[".nPrinterPagePDFScale"] = 100;

$tdatamaintenenace_accident_repair[".totalsFields"] = array();
$tdatamaintenenace_accident_repair[".totalsFields"][] = array(
	"fName" => "Cost",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatamaintenenace_accident_repair[".pageSize"] = 20;

$tdatamaintenenace_accident_repair[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamaintenenace_accident_repair[".strOrderBy"] = $tstrOrderBy;

$tdatamaintenenace_accident_repair[".orderindexes"] = array();

$tdatamaintenenace_accident_repair[".sqlHead"] = "SELECT Id,  Fleet,  Vehicle,  `Type`,  Supplier,  Cost,  Remarks,  RefNo,  `SysDate`,  `Date`,  EnteredBy,  Approval,  MeterReading,  AccidentRef,  PaymentVoucher,  MaintType";
$tdatamaintenenace_accident_repair[".sqlFrom"] = "FROM maintenenace";
$tdatamaintenenace_accident_repair[".sqlWhereExpr"] = "MaintType =\"Accident Repair\"";
$tdatamaintenenace_accident_repair[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatamaintenenace_accident_repair[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamaintenenace_accident_repair[".arrGroupsPerPage"] = $arrGPP;

$tdatamaintenenace_accident_repair[".highlightSearchResults"] = true;

$tableKeysmaintenenace_accident_repair = array();
$tableKeysmaintenenace_accident_repair[] = "Id";
$tdatamaintenenace_accident_repair[".Keys"] = $tableKeysmaintenenace_accident_repair;

$tdatamaintenenace_accident_repair[".listFields"] = array();
$tdatamaintenenace_accident_repair[".listFields"][] = "Id";
$tdatamaintenenace_accident_repair[".listFields"][] = "Date";
$tdatamaintenenace_accident_repair[".listFields"][] = "MaintType";
$tdatamaintenenace_accident_repair[".listFields"][] = "Vehicle";
$tdatamaintenenace_accident_repair[".listFields"][] = "Fleet";
$tdatamaintenenace_accident_repair[".listFields"][] = "Type";
$tdatamaintenenace_accident_repair[".listFields"][] = "MeterReading";
$tdatamaintenenace_accident_repair[".listFields"][] = "RefNo";
$tdatamaintenenace_accident_repair[".listFields"][] = "Supplier";
$tdatamaintenenace_accident_repair[".listFields"][] = "Cost";
$tdatamaintenenace_accident_repair[".listFields"][] = "PaymentVoucher";
$tdatamaintenenace_accident_repair[".listFields"][] = "AccidentRef";
$tdatamaintenenace_accident_repair[".listFields"][] = "Remarks";

$tdatamaintenenace_accident_repair[".hideMobileList"] = array();


$tdatamaintenenace_accident_repair[".viewFields"] = array();
$tdatamaintenenace_accident_repair[".viewFields"][] = "Id";
$tdatamaintenenace_accident_repair[".viewFields"][] = "Date";
$tdatamaintenenace_accident_repair[".viewFields"][] = "MaintType";
$tdatamaintenenace_accident_repair[".viewFields"][] = "Vehicle";
$tdatamaintenenace_accident_repair[".viewFields"][] = "Fleet";
$tdatamaintenenace_accident_repair[".viewFields"][] = "Type";
$tdatamaintenenace_accident_repair[".viewFields"][] = "MeterReading";
$tdatamaintenenace_accident_repair[".viewFields"][] = "RefNo";
$tdatamaintenenace_accident_repair[".viewFields"][] = "Supplier";
$tdatamaintenenace_accident_repair[".viewFields"][] = "Cost";
$tdatamaintenenace_accident_repair[".viewFields"][] = "PaymentVoucher";
$tdatamaintenenace_accident_repair[".viewFields"][] = "AccidentRef";
$tdatamaintenenace_accident_repair[".viewFields"][] = "Remarks";
$tdatamaintenenace_accident_repair[".viewFields"][] = "EnteredBy";
$tdatamaintenenace_accident_repair[".viewFields"][] = "SysDate";
$tdatamaintenenace_accident_repair[".viewFields"][] = "Approval";

$tdatamaintenenace_accident_repair[".addFields"] = array();
$tdatamaintenenace_accident_repair[".addFields"][] = "MaintType";
$tdatamaintenenace_accident_repair[".addFields"][] = "Fleet";
$tdatamaintenenace_accident_repair[".addFields"][] = "Vehicle";
$tdatamaintenenace_accident_repair[".addFields"][] = "Type";
$tdatamaintenenace_accident_repair[".addFields"][] = "Date";
$tdatamaintenenace_accident_repair[".addFields"][] = "MeterReading";
$tdatamaintenenace_accident_repair[".addFields"][] = "RefNo";
$tdatamaintenenace_accident_repair[".addFields"][] = "Supplier";
$tdatamaintenenace_accident_repair[".addFields"][] = "Cost";
$tdatamaintenenace_accident_repair[".addFields"][] = "PaymentVoucher";
$tdatamaintenenace_accident_repair[".addFields"][] = "AccidentRef";
$tdatamaintenenace_accident_repair[".addFields"][] = "Remarks";
$tdatamaintenenace_accident_repair[".addFields"][] = "SysDate";
$tdatamaintenenace_accident_repair[".addFields"][] = "EnteredBy";

$tdatamaintenenace_accident_repair[".masterListFields"] = array();
$tdatamaintenenace_accident_repair[".masterListFields"][] = "Date";
$tdatamaintenenace_accident_repair[".masterListFields"][] = "Id";
$tdatamaintenenace_accident_repair[".masterListFields"][] = "MaintType";
$tdatamaintenenace_accident_repair[".masterListFields"][] = "Vehicle";
$tdatamaintenenace_accident_repair[".masterListFields"][] = "Fleet";
$tdatamaintenenace_accident_repair[".masterListFields"][] = "Type";
$tdatamaintenenace_accident_repair[".masterListFields"][] = "MeterReading";
$tdatamaintenenace_accident_repair[".masterListFields"][] = "RefNo";
$tdatamaintenenace_accident_repair[".masterListFields"][] = "Supplier";
$tdatamaintenenace_accident_repair[".masterListFields"][] = "Cost";
$tdatamaintenenace_accident_repair[".masterListFields"][] = "PaymentVoucher";
$tdatamaintenenace_accident_repair[".masterListFields"][] = "AccidentRef";
$tdatamaintenenace_accident_repair[".masterListFields"][] = "Remarks";
$tdatamaintenenace_accident_repair[".masterListFields"][] = "Approval";
$tdatamaintenenace_accident_repair[".masterListFields"][] = "EnteredBy";
$tdatamaintenenace_accident_repair[".masterListFields"][] = "SysDate";

$tdatamaintenenace_accident_repair[".inlineAddFields"] = array();

$tdatamaintenenace_accident_repair[".editFields"] = array();
$tdatamaintenenace_accident_repair[".editFields"][] = "Date";
$tdatamaintenenace_accident_repair[".editFields"][] = "MaintType";
$tdatamaintenenace_accident_repair[".editFields"][] = "Vehicle";
$tdatamaintenenace_accident_repair[".editFields"][] = "Fleet";
$tdatamaintenenace_accident_repair[".editFields"][] = "MeterReading";
$tdatamaintenenace_accident_repair[".editFields"][] = "Type";
$tdatamaintenenace_accident_repair[".editFields"][] = "RefNo";
$tdatamaintenenace_accident_repair[".editFields"][] = "Supplier";
$tdatamaintenenace_accident_repair[".editFields"][] = "Cost";
$tdatamaintenenace_accident_repair[".editFields"][] = "PaymentVoucher";
$tdatamaintenenace_accident_repair[".editFields"][] = "AccidentRef";
$tdatamaintenenace_accident_repair[".editFields"][] = "Remarks";
$tdatamaintenenace_accident_repair[".editFields"][] = "EnteredBy";
$tdatamaintenenace_accident_repair[".editFields"][] = "Approval";
$tdatamaintenenace_accident_repair[".editFields"][] = "SysDate";

$tdatamaintenenace_accident_repair[".inlineEditFields"] = array();

$tdatamaintenenace_accident_repair[".updateSelectedFields"] = array();
$tdatamaintenenace_accident_repair[".updateSelectedFields"][] = "Date";
$tdatamaintenenace_accident_repair[".updateSelectedFields"][] = "MaintType";
$tdatamaintenenace_accident_repair[".updateSelectedFields"][] = "Vehicle";
$tdatamaintenenace_accident_repair[".updateSelectedFields"][] = "Fleet";
$tdatamaintenenace_accident_repair[".updateSelectedFields"][] = "MeterReading";
$tdatamaintenenace_accident_repair[".updateSelectedFields"][] = "Type";
$tdatamaintenenace_accident_repair[".updateSelectedFields"][] = "RefNo";
$tdatamaintenenace_accident_repair[".updateSelectedFields"][] = "Supplier";
$tdatamaintenenace_accident_repair[".updateSelectedFields"][] = "Cost";
$tdatamaintenenace_accident_repair[".updateSelectedFields"][] = "PaymentVoucher";
$tdatamaintenenace_accident_repair[".updateSelectedFields"][] = "AccidentRef";
$tdatamaintenenace_accident_repair[".updateSelectedFields"][] = "Remarks";
$tdatamaintenenace_accident_repair[".updateSelectedFields"][] = "EnteredBy";
$tdatamaintenenace_accident_repair[".updateSelectedFields"][] = "Approval";
$tdatamaintenenace_accident_repair[".updateSelectedFields"][] = "SysDate";


$tdatamaintenenace_accident_repair[".exportFields"] = array();
$tdatamaintenenace_accident_repair[".exportFields"][] = "Date";
$tdatamaintenenace_accident_repair[".exportFields"][] = "Id";
$tdatamaintenenace_accident_repair[".exportFields"][] = "MaintType";
$tdatamaintenenace_accident_repair[".exportFields"][] = "Vehicle";
$tdatamaintenenace_accident_repair[".exportFields"][] = "Fleet";
$tdatamaintenenace_accident_repair[".exportFields"][] = "Type";
$tdatamaintenenace_accident_repair[".exportFields"][] = "MeterReading";
$tdatamaintenenace_accident_repair[".exportFields"][] = "RefNo";
$tdatamaintenenace_accident_repair[".exportFields"][] = "Supplier";
$tdatamaintenenace_accident_repair[".exportFields"][] = "Cost";
$tdatamaintenenace_accident_repair[".exportFields"][] = "PaymentVoucher";
$tdatamaintenenace_accident_repair[".exportFields"][] = "AccidentRef";
$tdatamaintenenace_accident_repair[".exportFields"][] = "Remarks";
$tdatamaintenenace_accident_repair[".exportFields"][] = "Approval";
$tdatamaintenenace_accident_repair[".exportFields"][] = "EnteredBy";
$tdatamaintenenace_accident_repair[".exportFields"][] = "SysDate";

$tdatamaintenenace_accident_repair[".importFields"] = array();
$tdatamaintenenace_accident_repair[".importFields"][] = "Id";
$tdatamaintenenace_accident_repair[".importFields"][] = "Fleet";
$tdatamaintenenace_accident_repair[".importFields"][] = "Vehicle";
$tdatamaintenenace_accident_repair[".importFields"][] = "Type";
$tdatamaintenenace_accident_repair[".importFields"][] = "Supplier";
$tdatamaintenenace_accident_repair[".importFields"][] = "Cost";
$tdatamaintenenace_accident_repair[".importFields"][] = "Remarks";
$tdatamaintenenace_accident_repair[".importFields"][] = "RefNo";
$tdatamaintenenace_accident_repair[".importFields"][] = "SysDate";
$tdatamaintenenace_accident_repair[".importFields"][] = "Date";
$tdatamaintenenace_accident_repair[".importFields"][] = "EnteredBy";
$tdatamaintenenace_accident_repair[".importFields"][] = "Approval";
$tdatamaintenenace_accident_repair[".importFields"][] = "MeterReading";
$tdatamaintenenace_accident_repair[".importFields"][] = "AccidentRef";
$tdatamaintenenace_accident_repair[".importFields"][] = "PaymentVoucher";
$tdatamaintenenace_accident_repair[".importFields"][] = "MaintType";

$tdatamaintenenace_accident_repair[".printFields"] = array();
$tdatamaintenenace_accident_repair[".printFields"][] = "Date";
$tdatamaintenenace_accident_repair[".printFields"][] = "Id";
$tdatamaintenenace_accident_repair[".printFields"][] = "MaintType";
$tdatamaintenenace_accident_repair[".printFields"][] = "Vehicle";
$tdatamaintenenace_accident_repair[".printFields"][] = "Fleet";
$tdatamaintenenace_accident_repair[".printFields"][] = "Type";
$tdatamaintenenace_accident_repair[".printFields"][] = "MeterReading";
$tdatamaintenenace_accident_repair[".printFields"][] = "RefNo";
$tdatamaintenenace_accident_repair[".printFields"][] = "Supplier";
$tdatamaintenenace_accident_repair[".printFields"][] = "Cost";
$tdatamaintenenace_accident_repair[".printFields"][] = "PaymentVoucher";
$tdatamaintenenace_accident_repair[".printFields"][] = "AccidentRef";
$tdatamaintenenace_accident_repair[".printFields"][] = "Remarks";
$tdatamaintenenace_accident_repair[".printFields"][] = "Approval";
$tdatamaintenenace_accident_repair[".printFields"][] = "EnteredBy";
$tdatamaintenenace_accident_repair[".printFields"][] = "SysDate";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accident_repair","Id");
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




	$tdatamaintenenace_accident_repair["Id"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accident_repair","Fleet");
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




	$tdatamaintenenace_accident_repair["Fleet"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accident_repair","Vehicle");
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




	$tdatamaintenenace_accident_repair["Vehicle"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accident_repair","Type");
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




	$tdatamaintenenace_accident_repair["Type"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accident_repair","Supplier");
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




	$tdatamaintenenace_accident_repair["Supplier"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accident_repair","Cost");
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




	$tdatamaintenenace_accident_repair["Cost"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accident_repair","Remarks");
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




	$tdatamaintenenace_accident_repair["Remarks"] = $fdata;
//	RefNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "RefNo";
	$fdata["GoodName"] = "RefNo";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accident_repair","RefNo");
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




	$tdatamaintenenace_accident_repair["RefNo"] = $fdata;
//	SysDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SysDate";
	$fdata["GoodName"] = "SysDate";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accident_repair","SysDate");
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




	$tdatamaintenenace_accident_repair["SysDate"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accident_repair","Date");
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




	$tdatamaintenenace_accident_repair["Date"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accident_repair","EnteredBy");
	$fdata["FieldType"] = 200;

	
	
	
										
	
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




	$tdatamaintenenace_accident_repair["EnteredBy"] = $fdata;
//	Approval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Approval";
	$fdata["GoodName"] = "Approval";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accident_repair","Approval");
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




	$tdatamaintenenace_accident_repair["Approval"] = $fdata;
//	MeterReading
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "MeterReading";
	$fdata["GoodName"] = "MeterReading";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accident_repair","MeterReading");
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




	$tdatamaintenenace_accident_repair["MeterReading"] = $fdata;
//	AccidentRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "AccidentRef";
	$fdata["GoodName"] = "AccidentRef";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accident_repair","AccidentRef");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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




	$tdatamaintenenace_accident_repair["AccidentRef"] = $fdata;
//	PaymentVoucher
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "PaymentVoucher";
	$fdata["GoodName"] = "PaymentVoucher";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accident_repair","PaymentVoucher");
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




	$tdatamaintenenace_accident_repair["PaymentVoucher"] = $fdata;
//	MaintType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "MaintType";
	$fdata["GoodName"] = "MaintType";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_accident_repair","MaintType");
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




	$tdatamaintenenace_accident_repair["MaintType"] = $fdata;


$tables_data["maintenenace-accident-repair"]=&$tdatamaintenenace_accident_repair;
$field_labels["maintenenace_accident_repair"] = &$fieldLabelsmaintenenace_accident_repair;
$fieldToolTips["maintenenace_accident_repair"] = &$fieldToolTipsmaintenenace_accident_repair;
$page_titles["maintenenace_accident_repair"] = &$pageTitlesmaintenenace_accident_repair;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["maintenenace-accident-repair"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["maintenenace-accident-repair"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_maintenenace_accident_repair()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  Fleet,  Vehicle,  `Type`,  Supplier,  Cost,  Remarks,  RefNo,  `SysDate`,  `Date`,  EnteredBy,  Approval,  MeterReading,  AccidentRef,  PaymentVoucher,  MaintType";
$proto0["m_strFrom"] = "FROM maintenenace";
$proto0["m_strWhere"] = "MaintType =\"Accident Repair\"";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "MaintType =\"Accident Repair\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "MaintType",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accident-repair"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=\"Accident Repair\"";
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
	"m_srcTableName" => "maintenenace-accident-repair"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "maintenenace-accident-repair";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accident-repair"
));

$proto8["m_sql"] = "Fleet";
$proto8["m_srcTableName"] = "maintenenace-accident-repair";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accident-repair"
));

$proto10["m_sql"] = "Vehicle";
$proto10["m_srcTableName"] = "maintenenace-accident-repair";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accident-repair"
));

$proto12["m_sql"] = "`Type`";
$proto12["m_srcTableName"] = "maintenenace-accident-repair";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accident-repair"
));

$proto14["m_sql"] = "Supplier";
$proto14["m_srcTableName"] = "maintenenace-accident-repair";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accident-repair"
));

$proto16["m_sql"] = "Cost";
$proto16["m_srcTableName"] = "maintenenace-accident-repair";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accident-repair"
));

$proto18["m_sql"] = "Remarks";
$proto18["m_srcTableName"] = "maintenenace-accident-repair";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNo",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accident-repair"
));

$proto20["m_sql"] = "RefNo";
$proto20["m_srcTableName"] = "maintenenace-accident-repair";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "SysDate",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accident-repair"
));

$proto22["m_sql"] = "`SysDate`";
$proto22["m_srcTableName"] = "maintenenace-accident-repair";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accident-repair"
));

$proto24["m_sql"] = "`Date`";
$proto24["m_srcTableName"] = "maintenenace-accident-repair";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accident-repair"
));

$proto26["m_sql"] = "EnteredBy";
$proto26["m_srcTableName"] = "maintenenace-accident-repair";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Approval",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accident-repair"
));

$proto28["m_sql"] = "Approval";
$proto28["m_srcTableName"] = "maintenenace-accident-repair";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "MeterReading",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accident-repair"
));

$proto30["m_sql"] = "MeterReading";
$proto30["m_srcTableName"] = "maintenenace-accident-repair";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "AccidentRef",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accident-repair"
));

$proto32["m_sql"] = "AccidentRef";
$proto32["m_srcTableName"] = "maintenenace-accident-repair";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentVoucher",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accident-repair"
));

$proto34["m_sql"] = "PaymentVoucher";
$proto34["m_srcTableName"] = "maintenenace-accident-repair";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "MaintType",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-accident-repair"
));

$proto36["m_sql"] = "MaintType";
$proto36["m_srcTableName"] = "maintenenace-accident-repair";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "maintenenace";
$proto39["m_srcTableName"] = "maintenenace-accident-repair";
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
$proto38["m_srcTableName"] = "maintenenace-accident-repair";
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
$proto0["m_srcTableName"]="maintenenace-accident-repair";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_maintenenace_accident_repair = createSqlQuery_maintenenace_accident_repair();


	
					
;

																

$tdatamaintenenace_accident_repair[".sqlquery"] = $queryData_maintenenace_accident_repair;

$tableEvents["maintenenace-accident-repair"] = new eventsBase;
$tdatamaintenenace_accident_repair[".hasEvents"] = false;

?>