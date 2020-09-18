<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamaintenenace_regularservice = array();
	$tdatamaintenenace_regularservice[".truncateText"] = true;
	$tdatamaintenenace_regularservice[".NumberOfChars"] = 80;
	$tdatamaintenenace_regularservice[".ShortName"] = "maintenenace_regularservice";
	$tdatamaintenenace_regularservice[".OwnerID"] = "";
	$tdatamaintenenace_regularservice[".OriginalTable"] = "maintenenace";

//	field labels
$fieldLabelsmaintenenace_regularservice = array();
$fieldToolTipsmaintenenace_regularservice = array();
$pageTitlesmaintenenace_regularservice = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmaintenenace_regularservice["English"] = array();
	$fieldToolTipsmaintenenace_regularservice["English"] = array();
	$pageTitlesmaintenenace_regularservice["English"] = array();
	$fieldLabelsmaintenenace_regularservice["English"]["Id"] = "ID";
	$fieldToolTipsmaintenenace_regularservice["English"]["Id"] = "";
	$fieldLabelsmaintenenace_regularservice["English"]["Fleet"] = "Fleet";
	$fieldToolTipsmaintenenace_regularservice["English"]["Fleet"] = "";
	$fieldLabelsmaintenenace_regularservice["English"]["Vehicle"] = "Vehicle";
	$fieldToolTipsmaintenenace_regularservice["English"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_regularservice["English"]["Type"] = "Type";
	$fieldToolTipsmaintenenace_regularservice["English"]["Type"] = "";
	$fieldLabelsmaintenenace_regularservice["English"]["Supplier"] = "Supplier";
	$fieldToolTipsmaintenenace_regularservice["English"]["Supplier"] = "";
	$fieldLabelsmaintenenace_regularservice["English"]["Cost"] = "Cost";
	$fieldToolTipsmaintenenace_regularservice["English"]["Cost"] = "";
	$fieldLabelsmaintenenace_regularservice["English"]["Remarks"] = "Remarks";
	$fieldToolTipsmaintenenace_regularservice["English"]["Remarks"] = "";
	$fieldLabelsmaintenenace_regularservice["English"]["RefNo"] = "PO No";
	$fieldToolTipsmaintenenace_regularservice["English"]["RefNo"] = "";
	$fieldLabelsmaintenenace_regularservice["English"]["SysDate"] = "System Date";
	$fieldToolTipsmaintenenace_regularservice["English"]["SysDate"] = "";
	$fieldLabelsmaintenenace_regularservice["English"]["Date"] = "Date";
	$fieldToolTipsmaintenenace_regularservice["English"]["Date"] = "";
	$fieldLabelsmaintenenace_regularservice["English"]["EnteredBy"] = "Entered By";
	$fieldToolTipsmaintenenace_regularservice["English"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_regularservice["English"]["Approval"] = "Edited By";
	$fieldToolTipsmaintenenace_regularservice["English"]["Approval"] = "";
	$fieldLabelsmaintenenace_regularservice["English"]["MeterReading"] = "Meter R.";
	$fieldToolTipsmaintenenace_regularservice["English"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_regularservice["English"]["AccidentRef"] = "Accid.Ref";
	$fieldToolTipsmaintenenace_regularservice["English"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_regularservice["English"]["PaymentVoucher"] = "Pay. Ref";
	$fieldToolTipsmaintenenace_regularservice["English"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_regularservice["English"]["MaintType"] = "Maint Type";
	$fieldToolTipsmaintenenace_regularservice["English"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_regularservice["English"]))
		$tdatamaintenenace_regularservice[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsmaintenenace_regularservice["Afrikaans"] = array();
	$fieldToolTipsmaintenenace_regularservice["Afrikaans"] = array();
	$pageTitlesmaintenenace_regularservice["Afrikaans"] = array();
	$fieldLabelsmaintenenace_regularservice["Afrikaans"]["Id"] = "ID";
	$fieldToolTipsmaintenenace_regularservice["Afrikaans"]["Id"] = "";
	$fieldLabelsmaintenenace_regularservice["Afrikaans"]["Fleet"] = "vloot";
	$fieldToolTipsmaintenenace_regularservice["Afrikaans"]["Fleet"] = "";
	$fieldLabelsmaintenenace_regularservice["Afrikaans"]["Vehicle"] = "voertuig";
	$fieldToolTipsmaintenenace_regularservice["Afrikaans"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_regularservice["Afrikaans"]["Type"] = "tipe";
	$fieldToolTipsmaintenenace_regularservice["Afrikaans"]["Type"] = "";
	$fieldLabelsmaintenenace_regularservice["Afrikaans"]["Supplier"] = "verskaffer";
	$fieldToolTipsmaintenenace_regularservice["Afrikaans"]["Supplier"] = "";
	$fieldLabelsmaintenenace_regularservice["Afrikaans"]["Cost"] = "koste";
	$fieldToolTipsmaintenenace_regularservice["Afrikaans"]["Cost"] = "";
	$fieldLabelsmaintenenace_regularservice["Afrikaans"]["Remarks"] = "opmerkings";
	$fieldToolTipsmaintenenace_regularservice["Afrikaans"]["Remarks"] = "";
	$fieldLabelsmaintenenace_regularservice["Afrikaans"]["RefNo"] = "Bestelling No.";
	$fieldToolTipsmaintenenace_regularservice["Afrikaans"]["RefNo"] = "";
	$fieldLabelsmaintenenace_regularservice["Afrikaans"]["SysDate"] = "stelsel Datum";
	$fieldToolTipsmaintenenace_regularservice["Afrikaans"]["SysDate"] = "";
	$fieldLabelsmaintenenace_regularservice["Afrikaans"]["Date"] = "datum";
	$fieldToolTipsmaintenenace_regularservice["Afrikaans"]["Date"] = "";
	$fieldLabelsmaintenenace_regularservice["Afrikaans"]["EnteredBy"] = "aangegaan deur";
	$fieldToolTipsmaintenenace_regularservice["Afrikaans"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_regularservice["Afrikaans"]["Approval"] = "geredigeer deur";
	$fieldToolTipsmaintenenace_regularservice["Afrikaans"]["Approval"] = "";
	$fieldLabelsmaintenenace_regularservice["Afrikaans"]["MeterReading"] = "meterlesing";
	$fieldToolTipsmaintenenace_regularservice["Afrikaans"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_regularservice["Afrikaans"]["AccidentRef"] = "ongeluk Verwysing";
	$fieldToolTipsmaintenenace_regularservice["Afrikaans"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_regularservice["Afrikaans"]["PaymentVoucher"] = "Inbetalingsverwyssingsnommer";
	$fieldToolTipsmaintenenace_regularservice["Afrikaans"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_regularservice["Afrikaans"]["MaintType"] = "Onderhoud Tipe";
	$fieldToolTipsmaintenenace_regularservice["Afrikaans"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_regularservice["Afrikaans"]))
		$tdatamaintenenace_regularservice[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsmaintenenace_regularservice["Arabic"] = array();
	$fieldToolTipsmaintenenace_regularservice["Arabic"] = array();
	$pageTitlesmaintenenace_regularservice["Arabic"] = array();
	$fieldLabelsmaintenenace_regularservice["Arabic"]["Id"] = "???? ?????";
	$fieldToolTipsmaintenenace_regularservice["Arabic"]["Id"] = "";
	$fieldLabelsmaintenenace_regularservice["Arabic"]["Fleet"] = "?????";
	$fieldToolTipsmaintenenace_regularservice["Arabic"]["Fleet"] = "";
	$fieldLabelsmaintenenace_regularservice["Arabic"]["Vehicle"] = "?????";
	$fieldToolTipsmaintenenace_regularservice["Arabic"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_regularservice["Arabic"]["Type"] = "????";
	$fieldToolTipsmaintenenace_regularservice["Arabic"]["Type"] = "";
	$fieldLabelsmaintenenace_regularservice["Arabic"]["Supplier"] = "??????";
	$fieldToolTipsmaintenenace_regularservice["Arabic"]["Supplier"] = "";
	$fieldLabelsmaintenenace_regularservice["Arabic"]["Cost"] = "????";
	$fieldToolTipsmaintenenace_regularservice["Arabic"]["Cost"] = "";
	$fieldLabelsmaintenenace_regularservice["Arabic"]["Remarks"] = "???????";
	$fieldToolTipsmaintenenace_regularservice["Arabic"]["Remarks"] = "";
	$fieldLabelsmaintenenace_regularservice["Arabic"]["RefNo"] = "????? ???.";
	$fieldToolTipsmaintenenace_regularservice["Arabic"]["RefNo"] = "";
	$fieldLabelsmaintenenace_regularservice["Arabic"]["SysDate"] = "????? ??????";
	$fieldToolTipsmaintenenace_regularservice["Arabic"]["SysDate"] = "";
	$fieldLabelsmaintenenace_regularservice["Arabic"]["Date"] = "?????";
	$fieldToolTipsmaintenenace_regularservice["Arabic"]["Date"] = "";
	$fieldLabelsmaintenenace_regularservice["Arabic"]["EnteredBy"] = "?? ?????? ??????";
	$fieldToolTipsmaintenenace_regularservice["Arabic"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_regularservice["Arabic"]["Approval"] = "???? ??????";
	$fieldToolTipsmaintenenace_regularservice["Arabic"]["Approval"] = "";
	$fieldLabelsmaintenenace_regularservice["Arabic"]["MeterReading"] = "????? ??????";
	$fieldToolTipsmaintenenace_regularservice["Arabic"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_regularservice["Arabic"]["AccidentRef"] = "???? ???????";
	$fieldToolTipsmaintenenace_regularservice["Arabic"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_regularservice["Arabic"]["PaymentVoucher"] = "????? ???";
	$fieldToolTipsmaintenenace_regularservice["Arabic"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_regularservice["Arabic"]["MaintType"] = "??? ???????";
	$fieldToolTipsmaintenenace_regularservice["Arabic"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_regularservice["Arabic"]))
		$tdatamaintenenace_regularservice[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsmaintenenace_regularservice["Chinese"] = array();
	$fieldToolTipsmaintenenace_regularservice["Chinese"] = array();
	$pageTitlesmaintenenace_regularservice["Chinese"] = array();
	$fieldLabelsmaintenenace_regularservice["Chinese"]["Id"] = "ID";
	$fieldToolTipsmaintenenace_regularservice["Chinese"]["Id"] = "";
	$fieldLabelsmaintenenace_regularservice["Chinese"]["Fleet"] = "??";
	$fieldToolTipsmaintenenace_regularservice["Chinese"]["Fleet"] = "";
	$fieldLabelsmaintenenace_regularservice["Chinese"]["Vehicle"] = "??";
	$fieldToolTipsmaintenenace_regularservice["Chinese"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_regularservice["Chinese"]["Type"] = "??";
	$fieldToolTipsmaintenenace_regularservice["Chinese"]["Type"] = "";
	$fieldLabelsmaintenenace_regularservice["Chinese"]["Supplier"] = "???";
	$fieldToolTipsmaintenenace_regularservice["Chinese"]["Supplier"] = "";
	$fieldLabelsmaintenenace_regularservice["Chinese"]["Cost"] = "??";
	$fieldToolTipsmaintenenace_regularservice["Chinese"]["Cost"] = "";
	$fieldLabelsmaintenenace_regularservice["Chinese"]["Remarks"] = "??";
	$fieldToolTipsmaintenenace_regularservice["Chinese"]["Remarks"] = "";
	$fieldLabelsmaintenenace_regularservice["Chinese"]["RefNo"] = "?????";
	$fieldToolTipsmaintenenace_regularservice["Chinese"]["RefNo"] = "";
	$fieldLabelsmaintenenace_regularservice["Chinese"]["SysDate"] = "????";
	$fieldToolTipsmaintenenace_regularservice["Chinese"]["SysDate"] = "";
	$fieldLabelsmaintenenace_regularservice["Chinese"]["Date"] = "??";
	$fieldToolTipsmaintenenace_regularservice["Chinese"]["Date"] = "";
	$fieldLabelsmaintenenace_regularservice["Chinese"]["EnteredBy"] = "???";
	$fieldToolTipsmaintenenace_regularservice["Chinese"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_regularservice["Chinese"]["Approval"] = "??";
	$fieldToolTipsmaintenenace_regularservice["Chinese"]["Approval"] = "";
	$fieldLabelsmaintenenace_regularservice["Chinese"]["MeterReading"] = "????";
	$fieldToolTipsmaintenenace_regularservice["Chinese"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_regularservice["Chinese"]["AccidentRef"] = "????";
	$fieldToolTipsmaintenenace_regularservice["Chinese"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_regularservice["Chinese"]["PaymentVoucher"] = "????";
	$fieldToolTipsmaintenenace_regularservice["Chinese"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_regularservice["Chinese"]["MaintType"] = "????";
	$fieldToolTipsmaintenenace_regularservice["Chinese"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_regularservice["Chinese"]))
		$tdatamaintenenace_regularservice[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsmaintenenace_regularservice["French"] = array();
	$fieldToolTipsmaintenenace_regularservice["French"] = array();
	$pageTitlesmaintenenace_regularservice["French"] = array();
	$fieldLabelsmaintenenace_regularservice["French"]["Id"] = "ID";
	$fieldToolTipsmaintenenace_regularservice["French"]["Id"] = "";
	$fieldLabelsmaintenenace_regularservice["French"]["Fleet"] = "Flotte";
	$fieldToolTipsmaintenenace_regularservice["French"]["Fleet"] = "";
	$fieldLabelsmaintenenace_regularservice["French"]["Vehicle"] = "Véhicule";
	$fieldToolTipsmaintenenace_regularservice["French"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_regularservice["French"]["Type"] = "Type";
	$fieldToolTipsmaintenenace_regularservice["French"]["Type"] = "";
	$fieldLabelsmaintenenace_regularservice["French"]["Supplier"] = "Fournisseur";
	$fieldToolTipsmaintenenace_regularservice["French"]["Supplier"] = "";
	$fieldLabelsmaintenenace_regularservice["French"]["Cost"] = "Coût";
	$fieldToolTipsmaintenenace_regularservice["French"]["Cost"] = "";
	$fieldLabelsmaintenenace_regularservice["French"]["Remarks"] = "Remarques";
	$fieldToolTipsmaintenenace_regularservice["French"]["Remarks"] = "";
	$fieldLabelsmaintenenace_regularservice["French"]["RefNo"] = "N ° d'ordre d'achat";
	$fieldToolTipsmaintenenace_regularservice["French"]["RefNo"] = "";
	$fieldLabelsmaintenenace_regularservice["French"]["SysDate"] = "Date du système";
	$fieldToolTipsmaintenenace_regularservice["French"]["SysDate"] = "";
	$fieldLabelsmaintenenace_regularservice["French"]["Date"] = "date";
	$fieldToolTipsmaintenenace_regularservice["French"]["Date"] = "";
	$fieldLabelsmaintenenace_regularservice["French"]["EnteredBy"] = "Entré par";
	$fieldToolTipsmaintenenace_regularservice["French"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_regularservice["French"]["Approval"] = "Édité par";
	$fieldToolTipsmaintenenace_regularservice["French"]["Approval"] = "";
	$fieldLabelsmaintenenace_regularservice["French"]["MeterReading"] = "Lecture de compteur";
	$fieldToolTipsmaintenenace_regularservice["French"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_regularservice["French"]["AccidentRef"] = "Références d'accidents";
	$fieldToolTipsmaintenenace_regularservice["French"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_regularservice["French"]["PaymentVoucher"] = "Référence de paiement";
	$fieldToolTipsmaintenenace_regularservice["French"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_regularservice["French"]["MaintType"] = "Type d'entretien";
	$fieldToolTipsmaintenenace_regularservice["French"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_regularservice["French"]))
		$tdatamaintenenace_regularservice[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsmaintenenace_regularservice["German"] = array();
	$fieldToolTipsmaintenenace_regularservice["German"] = array();
	$pageTitlesmaintenenace_regularservice["German"] = array();
	$fieldLabelsmaintenenace_regularservice["German"]["Id"] = "ICH WÜRDE";
	$fieldToolTipsmaintenenace_regularservice["German"]["Id"] = "";
	$fieldLabelsmaintenenace_regularservice["German"]["Fleet"] = "Flotte";
	$fieldToolTipsmaintenenace_regularservice["German"]["Fleet"] = "";
	$fieldLabelsmaintenenace_regularservice["German"]["Vehicle"] = "Fahrzeug";
	$fieldToolTipsmaintenenace_regularservice["German"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_regularservice["German"]["Type"] = "Art";
	$fieldToolTipsmaintenenace_regularservice["German"]["Type"] = "";
	$fieldLabelsmaintenenace_regularservice["German"]["Supplier"] = "Lieferant";
	$fieldToolTipsmaintenenace_regularservice["German"]["Supplier"] = "";
	$fieldLabelsmaintenenace_regularservice["German"]["Cost"] = "Kosten";
	$fieldToolTipsmaintenenace_regularservice["German"]["Cost"] = "";
	$fieldLabelsmaintenenace_regularservice["German"]["Remarks"] = "Bemerkungen";
	$fieldToolTipsmaintenenace_regularservice["German"]["Remarks"] = "";
	$fieldLabelsmaintenenace_regularservice["German"]["RefNo"] = "Bestell-Nr.";
	$fieldToolTipsmaintenenace_regularservice["German"]["RefNo"] = "";
	$fieldLabelsmaintenenace_regularservice["German"]["SysDate"] = "Systemdatum";
	$fieldToolTipsmaintenenace_regularservice["German"]["SysDate"] = "";
	$fieldLabelsmaintenenace_regularservice["German"]["Date"] = "Datum";
	$fieldToolTipsmaintenenace_regularservice["German"]["Date"] = "";
	$fieldLabelsmaintenenace_regularservice["German"]["EnteredBy"] = "Betreten von";
	$fieldToolTipsmaintenenace_regularservice["German"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_regularservice["German"]["Approval"] = "Bearbeitet von";
	$fieldToolTipsmaintenenace_regularservice["German"]["Approval"] = "";
	$fieldLabelsmaintenenace_regularservice["German"]["MeterReading"] = "Zählerstand";
	$fieldToolTipsmaintenenace_regularservice["German"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_regularservice["German"]["AccidentRef"] = "Unfallverweis";
	$fieldToolTipsmaintenenace_regularservice["German"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_regularservice["German"]["PaymentVoucher"] = "Zahlungsreferenz";
	$fieldToolTipsmaintenenace_regularservice["German"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_regularservice["German"]["MaintType"] = "Wartungsart";
	$fieldToolTipsmaintenenace_regularservice["German"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_regularservice["German"]))
		$tdatamaintenenace_regularservice[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsmaintenenace_regularservice["Italian"] = array();
	$fieldToolTipsmaintenenace_regularservice["Italian"] = array();
	$pageTitlesmaintenenace_regularservice["Italian"] = array();
	$fieldLabelsmaintenenace_regularservice["Italian"]["Id"] = "ID";
	$fieldToolTipsmaintenenace_regularservice["Italian"]["Id"] = "";
	$fieldLabelsmaintenenace_regularservice["Italian"]["Fleet"] = "Flotta";
	$fieldToolTipsmaintenenace_regularservice["Italian"]["Fleet"] = "";
	$fieldLabelsmaintenenace_regularservice["Italian"]["Vehicle"] = "Veicolo";
	$fieldToolTipsmaintenenace_regularservice["Italian"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_regularservice["Italian"]["Type"] = "Digitare";
	$fieldToolTipsmaintenenace_regularservice["Italian"]["Type"] = "";
	$fieldLabelsmaintenenace_regularservice["Italian"]["Supplier"] = "Fornitore";
	$fieldToolTipsmaintenenace_regularservice["Italian"]["Supplier"] = "";
	$fieldLabelsmaintenenace_regularservice["Italian"]["Cost"] = "Costo";
	$fieldToolTipsmaintenenace_regularservice["Italian"]["Cost"] = "";
	$fieldLabelsmaintenenace_regularservice["Italian"]["Remarks"] = "Osservazioni";
	$fieldToolTipsmaintenenace_regularservice["Italian"]["Remarks"] = "";
	$fieldLabelsmaintenenace_regularservice["Italian"]["RefNo"] = "Ordine d'Acquisto N °.";
	$fieldToolTipsmaintenenace_regularservice["Italian"]["RefNo"] = "";
	$fieldLabelsmaintenenace_regularservice["Italian"]["SysDate"] = "Data di sistema";
	$fieldToolTipsmaintenenace_regularservice["Italian"]["SysDate"] = "";
	$fieldLabelsmaintenenace_regularservice["Italian"]["Date"] = "Data";
	$fieldToolTipsmaintenenace_regularservice["Italian"]["Date"] = "";
	$fieldLabelsmaintenenace_regularservice["Italian"]["EnteredBy"] = "Inserito da";
	$fieldToolTipsmaintenenace_regularservice["Italian"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_regularservice["Italian"]["Approval"] = "A cura di";
	$fieldToolTipsmaintenenace_regularservice["Italian"]["Approval"] = "";
	$fieldLabelsmaintenenace_regularservice["Italian"]["MeterReading"] = "Lettura contatori";
	$fieldToolTipsmaintenenace_regularservice["Italian"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_regularservice["Italian"]["AccidentRef"] = "incidenti di riferimento";
	$fieldToolTipsmaintenenace_regularservice["Italian"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_regularservice["Italian"]["PaymentVoucher"] = "Referenza di pagamento";
	$fieldToolTipsmaintenenace_regularservice["Italian"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_regularservice["Italian"]["MaintType"] = "Tipo di manutenzione";
	$fieldToolTipsmaintenenace_regularservice["Italian"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_regularservice["Italian"]))
		$tdatamaintenenace_regularservice[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsmaintenenace_regularservice["Russian"] = array();
	$fieldToolTipsmaintenenace_regularservice["Russian"] = array();
	$pageTitlesmaintenenace_regularservice["Russian"] = array();
	$fieldLabelsmaintenenace_regularservice["Russian"]["Id"] = "? ??";
	$fieldToolTipsmaintenenace_regularservice["Russian"]["Id"] = "";
	$fieldLabelsmaintenenace_regularservice["Russian"]["Fleet"] = "????";
	$fieldToolTipsmaintenenace_regularservice["Russian"]["Fleet"] = "";
	$fieldLabelsmaintenenace_regularservice["Russian"]["Vehicle"] = "???????? ????????????";
	$fieldToolTipsmaintenenace_regularservice["Russian"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_regularservice["Russian"]["Type"] = "???";
	$fieldToolTipsmaintenenace_regularservice["Russian"]["Type"] = "";
	$fieldLabelsmaintenenace_regularservice["Russian"]["Supplier"] = "?????????";
	$fieldToolTipsmaintenenace_regularservice["Russian"]["Supplier"] = "";
	$fieldLabelsmaintenenace_regularservice["Russian"]["Cost"] = "?????????";
	$fieldToolTipsmaintenenace_regularservice["Russian"]["Cost"] = "";
	$fieldLabelsmaintenenace_regularservice["Russian"]["Remarks"] = "?????????";
	$fieldToolTipsmaintenenace_regularservice["Russian"]["Remarks"] = "";
	$fieldLabelsmaintenenace_regularservice["Russian"]["RefNo"] = "????? ?????.";
	$fieldToolTipsmaintenenace_regularservice["Russian"]["RefNo"] = "";
	$fieldLabelsmaintenenace_regularservice["Russian"]["SysDate"] = "System Date";
	$fieldToolTipsmaintenenace_regularservice["Russian"]["SysDate"] = "";
	$fieldLabelsmaintenenace_regularservice["Russian"]["Date"] = "????";
	$fieldToolTipsmaintenenace_regularservice["Russian"]["Date"] = "";
	$fieldLabelsmaintenenace_regularservice["Russian"]["EnteredBy"] = "??????";
	$fieldToolTipsmaintenenace_regularservice["Russian"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_regularservice["Russian"]["Approval"] = "???????????????";
	$fieldToolTipsmaintenenace_regularservice["Russian"]["Approval"] = "";
	$fieldLabelsmaintenenace_regularservice["Russian"]["MeterReading"] = "????????? ????????";
	$fieldToolTipsmaintenenace_regularservice["Russian"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_regularservice["Russian"]["AccidentRef"] = "?? ?????????? ??????? ??????";
	$fieldToolTipsmaintenenace_regularservice["Russian"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_regularservice["Russian"]["PaymentVoucher"] = "?????? ??????";
	$fieldToolTipsmaintenenace_regularservice["Russian"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_regularservice["Russian"]["MaintType"] = "??? ???????????? ????????????";
	$fieldToolTipsmaintenenace_regularservice["Russian"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_regularservice["Russian"]))
		$tdatamaintenenace_regularservice[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmaintenenace_regularservice["Spanish"] = array();
	$fieldToolTipsmaintenenace_regularservice["Spanish"] = array();
	$pageTitlesmaintenenace_regularservice["Spanish"] = array();
	$fieldLabelsmaintenenace_regularservice["Spanish"]["Id"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipsmaintenenace_regularservice["Spanish"]["Id"] = "";
	$fieldLabelsmaintenenace_regularservice["Spanish"]["Fleet"] = "Flota";
	$fieldToolTipsmaintenenace_regularservice["Spanish"]["Fleet"] = "";
	$fieldLabelsmaintenenace_regularservice["Spanish"]["Vehicle"] = "Vehículo";
	$fieldToolTipsmaintenenace_regularservice["Spanish"]["Vehicle"] = "";
	$fieldLabelsmaintenenace_regularservice["Spanish"]["Type"] = "Tipo";
	$fieldToolTipsmaintenenace_regularservice["Spanish"]["Type"] = "";
	$fieldLabelsmaintenenace_regularservice["Spanish"]["Supplier"] = "Proveedor";
	$fieldToolTipsmaintenenace_regularservice["Spanish"]["Supplier"] = "";
	$fieldLabelsmaintenenace_regularservice["Spanish"]["Cost"] = "Costo";
	$fieldToolTipsmaintenenace_regularservice["Spanish"]["Cost"] = "";
	$fieldLabelsmaintenenace_regularservice["Spanish"]["Remarks"] = "Observaciones";
	$fieldToolTipsmaintenenace_regularservice["Spanish"]["Remarks"] = "";
	$fieldLabelsmaintenenace_regularservice["Spanish"]["RefNo"] = "Orden de compra número.";
	$fieldToolTipsmaintenenace_regularservice["Spanish"]["RefNo"] = "";
	$fieldLabelsmaintenenace_regularservice["Spanish"]["SysDate"] = "Fecha del sistema";
	$fieldToolTipsmaintenenace_regularservice["Spanish"]["SysDate"] = "";
	$fieldLabelsmaintenenace_regularservice["Spanish"]["Date"] = "Fecha";
	$fieldToolTipsmaintenenace_regularservice["Spanish"]["Date"] = "";
	$fieldLabelsmaintenenace_regularservice["Spanish"]["EnteredBy"] = "Introducido por";
	$fieldToolTipsmaintenenace_regularservice["Spanish"]["EnteredBy"] = "";
	$fieldLabelsmaintenenace_regularservice["Spanish"]["Approval"] = "Editado por";
	$fieldToolTipsmaintenenace_regularservice["Spanish"]["Approval"] = "";
	$fieldLabelsmaintenenace_regularservice["Spanish"]["MeterReading"] = "Lectura del medidor";
	$fieldToolTipsmaintenenace_regularservice["Spanish"]["MeterReading"] = "";
	$fieldLabelsmaintenenace_regularservice["Spanish"]["AccidentRef"] = "Referencia de Accidente";
	$fieldToolTipsmaintenenace_regularservice["Spanish"]["AccidentRef"] = "";
	$fieldLabelsmaintenenace_regularservice["Spanish"]["PaymentVoucher"] = "Referencia de pago";
	$fieldToolTipsmaintenenace_regularservice["Spanish"]["PaymentVoucher"] = "";
	$fieldLabelsmaintenenace_regularservice["Spanish"]["MaintType"] = "Tipo de mantenimiento";
	$fieldToolTipsmaintenenace_regularservice["Spanish"]["MaintType"] = "";
	if (count($fieldToolTipsmaintenenace_regularservice["Spanish"]))
		$tdatamaintenenace_regularservice[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmaintenenace_regularservice[""] = array();
	$fieldToolTipsmaintenenace_regularservice[""] = array();
	$pageTitlesmaintenenace_regularservice[""] = array();
	if (count($fieldToolTipsmaintenenace_regularservice[""]))
		$tdatamaintenenace_regularservice[".isUseToolTips"] = true;
}


	$tdatamaintenenace_regularservice[".NCSearch"] = true;



$tdatamaintenenace_regularservice[".shortTableName"] = "maintenenace_regularservice";
$tdatamaintenenace_regularservice[".nSecOptions"] = 0;
$tdatamaintenenace_regularservice[".recsPerRowPrint"] = 1;
$tdatamaintenenace_regularservice[".mainTableOwnerID"] = "";
$tdatamaintenenace_regularservice[".moveNext"] = 1;
$tdatamaintenenace_regularservice[".entityType"] = 1;

$tdatamaintenenace_regularservice[".strOriginalTableName"] = "maintenenace";

		 



$tdatamaintenenace_regularservice[".showAddInPopup"] = false;

$tdatamaintenenace_regularservice[".showEditInPopup"] = false;

$tdatamaintenenace_regularservice[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamaintenenace_regularservice[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamaintenenace_regularservice[".fieldsForRegister"] = array();

	$tdatamaintenenace_regularservice[".listAjax"] = true;

	$tdatamaintenenace_regularservice[".audit"] = false;

	$tdatamaintenenace_regularservice[".locking"] = false;

$tdatamaintenenace_regularservice[".edit"] = true;
$tdatamaintenenace_regularservice[".afterEditAction"] = 1;
$tdatamaintenenace_regularservice[".closePopupAfterEdit"] = 1;
$tdatamaintenenace_regularservice[".afterEditActionDetTable"] = "";

$tdatamaintenenace_regularservice[".add"] = true;
$tdatamaintenenace_regularservice[".afterAddAction"] = 1;
$tdatamaintenenace_regularservice[".closePopupAfterAdd"] = 1;
$tdatamaintenenace_regularservice[".afterAddActionDetTable"] = "";

$tdatamaintenenace_regularservice[".list"] = true;




$tdatamaintenenace_regularservice[".view"] = true;

$tdatamaintenenace_regularservice[".import"] = true;

$tdatamaintenenace_regularservice[".exportTo"] = true;

$tdatamaintenenace_regularservice[".printFriendly"] = true;

$tdatamaintenenace_regularservice[".delete"] = true;

$tdatamaintenenace_regularservice[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamaintenenace_regularservice[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatamaintenenace_regularservice[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatamaintenenace_regularservice[".searchSaving"] = false;
//

$tdatamaintenenace_regularservice[".showSearchPanel"] = true;
		$tdatamaintenenace_regularservice[".flexibleSearch"] = true;

$tdatamaintenenace_regularservice[".isUseAjaxSuggest"] = true;

$tdatamaintenenace_regularservice[".rowHighlite"] = true;



$tdatamaintenenace_regularservice[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamaintenenace_regularservice[".isUseTimeForSearch"] = false;





$tdatamaintenenace_regularservice[".allSearchFields"] = array();
$tdatamaintenenace_regularservice[".filterFields"] = array();
$tdatamaintenenace_regularservice[".requiredSearchFields"] = array();

$tdatamaintenenace_regularservice[".allSearchFields"][] = "Date";
	$tdatamaintenenace_regularservice[".allSearchFields"][] = "Id";
	$tdatamaintenenace_regularservice[".allSearchFields"][] = "MaintType";
	$tdatamaintenenace_regularservice[".allSearchFields"][] = "Vehicle";
	$tdatamaintenenace_regularservice[".allSearchFields"][] = "Fleet";
	$tdatamaintenenace_regularservice[".allSearchFields"][] = "Type";
	$tdatamaintenenace_regularservice[".allSearchFields"][] = "MeterReading";
	$tdatamaintenenace_regularservice[".allSearchFields"][] = "RefNo";
	$tdatamaintenenace_regularservice[".allSearchFields"][] = "Supplier";
	$tdatamaintenenace_regularservice[".allSearchFields"][] = "Cost";
	$tdatamaintenenace_regularservice[".allSearchFields"][] = "PaymentVoucher";
	$tdatamaintenenace_regularservice[".allSearchFields"][] = "Remarks";
	$tdatamaintenenace_regularservice[".allSearchFields"][] = "EnteredBy";
	$tdatamaintenenace_regularservice[".allSearchFields"][] = "Approval";
	$tdatamaintenenace_regularservice[".allSearchFields"][] = "SysDate";
	

$tdatamaintenenace_regularservice[".googleLikeFields"] = array();
$tdatamaintenenace_regularservice[".googleLikeFields"][] = "Id";
$tdatamaintenenace_regularservice[".googleLikeFields"][] = "Fleet";
$tdatamaintenenace_regularservice[".googleLikeFields"][] = "Vehicle";
$tdatamaintenenace_regularservice[".googleLikeFields"][] = "Type";
$tdatamaintenenace_regularservice[".googleLikeFields"][] = "Supplier";
$tdatamaintenenace_regularservice[".googleLikeFields"][] = "Cost";
$tdatamaintenenace_regularservice[".googleLikeFields"][] = "Remarks";
$tdatamaintenenace_regularservice[".googleLikeFields"][] = "RefNo";
$tdatamaintenenace_regularservice[".googleLikeFields"][] = "SysDate";
$tdatamaintenenace_regularservice[".googleLikeFields"][] = "Date";
$tdatamaintenenace_regularservice[".googleLikeFields"][] = "EnteredBy";
$tdatamaintenenace_regularservice[".googleLikeFields"][] = "Approval";
$tdatamaintenenace_regularservice[".googleLikeFields"][] = "MeterReading";
$tdatamaintenenace_regularservice[".googleLikeFields"][] = "AccidentRef";
$tdatamaintenenace_regularservice[".googleLikeFields"][] = "PaymentVoucher";
$tdatamaintenenace_regularservice[".googleLikeFields"][] = "MaintType";


$tdatamaintenenace_regularservice[".advSearchFields"] = array();
$tdatamaintenenace_regularservice[".advSearchFields"][] = "Date";
$tdatamaintenenace_regularservice[".advSearchFields"][] = "Id";
$tdatamaintenenace_regularservice[".advSearchFields"][] = "MaintType";
$tdatamaintenenace_regularservice[".advSearchFields"][] = "Vehicle";
$tdatamaintenenace_regularservice[".advSearchFields"][] = "Fleet";
$tdatamaintenenace_regularservice[".advSearchFields"][] = "Type";
$tdatamaintenenace_regularservice[".advSearchFields"][] = "MeterReading";
$tdatamaintenenace_regularservice[".advSearchFields"][] = "RefNo";
$tdatamaintenenace_regularservice[".advSearchFields"][] = "Supplier";
$tdatamaintenenace_regularservice[".advSearchFields"][] = "Cost";
$tdatamaintenenace_regularservice[".advSearchFields"][] = "PaymentVoucher";
$tdatamaintenenace_regularservice[".advSearchFields"][] = "Remarks";
$tdatamaintenenace_regularservice[".advSearchFields"][] = "EnteredBy";
$tdatamaintenenace_regularservice[".advSearchFields"][] = "Approval";
$tdatamaintenenace_regularservice[".advSearchFields"][] = "SysDate";

$tdatamaintenenace_regularservice[".tableType"] = "list";

$tdatamaintenenace_regularservice[".printerPageOrientation"] = 0;
$tdatamaintenenace_regularservice[".nPrinterPageScale"] = 100;

$tdatamaintenenace_regularservice[".nPrinterSplitRecords"] = 40;

$tdatamaintenenace_regularservice[".nPrinterPDFSplitRecords"] = 40;



$tdatamaintenenace_regularservice[".geocodingEnabled"] = false;





$tdatamaintenenace_regularservice[".listGridLayout"] = 3;


$tdatamaintenenace_regularservice[".isResizeColumns"] = true;



// view page pdf
$tdatamaintenenace_regularservice[".isViewPagePDF"] = true;
$tdatamaintenenace_regularservice[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatamaintenenace_regularservice[".isPrinterPagePDF"] = true;
$tdatamaintenenace_regularservice[".nPrinterPagePDFScale"] = 100;

$tdatamaintenenace_regularservice[".totalsFields"] = array();
$tdatamaintenenace_regularservice[".totalsFields"][] = array(
	"fName" => "Cost",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatamaintenenace_regularservice[".pageSize"] = 20;

$tdatamaintenenace_regularservice[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamaintenenace_regularservice[".strOrderBy"] = $tstrOrderBy;

$tdatamaintenenace_regularservice[".orderindexes"] = array();

$tdatamaintenenace_regularservice[".sqlHead"] = "SELECT Id,  Fleet,  Vehicle,  `Type`,  Supplier,  Cost,  Remarks,  RefNo,  `SysDate`,  `Date`,  EnteredBy,  Approval,  MeterReading,  AccidentRef,  PaymentVoucher,  MaintType";
$tdatamaintenenace_regularservice[".sqlFrom"] = "FROM maintenenace";
$tdatamaintenenace_regularservice[".sqlWhereExpr"] = "MaintType =\"Full Service\" OR MaintType =\"Lub Service\" OR MaintType =\"Mechanical Service\" OR MaintType =\"Other Maintenance\" OR MaintType =\"Tyre Repairs\" OR MaintType =\"Service and Repair\"";
$tdatamaintenenace_regularservice[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatamaintenenace_regularservice[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamaintenenace_regularservice[".arrGroupsPerPage"] = $arrGPP;

$tdatamaintenenace_regularservice[".highlightSearchResults"] = true;

$tableKeysmaintenenace_regularservice = array();
$tableKeysmaintenenace_regularservice[] = "Id";
$tdatamaintenenace_regularservice[".Keys"] = $tableKeysmaintenenace_regularservice;

$tdatamaintenenace_regularservice[".listFields"] = array();
$tdatamaintenenace_regularservice[".listFields"][] = "Id";
$tdatamaintenenace_regularservice[".listFields"][] = "Date";
$tdatamaintenenace_regularservice[".listFields"][] = "MaintType";
$tdatamaintenenace_regularservice[".listFields"][] = "Vehicle";
$tdatamaintenenace_regularservice[".listFields"][] = "Fleet";
$tdatamaintenenace_regularservice[".listFields"][] = "Type";
$tdatamaintenenace_regularservice[".listFields"][] = "MeterReading";
$tdatamaintenenace_regularservice[".listFields"][] = "RefNo";
$tdatamaintenenace_regularservice[".listFields"][] = "Supplier";
$tdatamaintenenace_regularservice[".listFields"][] = "Cost";
$tdatamaintenenace_regularservice[".listFields"][] = "PaymentVoucher";
$tdatamaintenenace_regularservice[".listFields"][] = "Remarks";
$tdatamaintenenace_regularservice[".listFields"][] = "EnteredBy";

$tdatamaintenenace_regularservice[".hideMobileList"] = array();


$tdatamaintenenace_regularservice[".viewFields"] = array();
$tdatamaintenenace_regularservice[".viewFields"][] = "Id";
$tdatamaintenenace_regularservice[".viewFields"][] = "Date";
$tdatamaintenenace_regularservice[".viewFields"][] = "MaintType";
$tdatamaintenenace_regularservice[".viewFields"][] = "Vehicle";
$tdatamaintenenace_regularservice[".viewFields"][] = "Fleet";
$tdatamaintenenace_regularservice[".viewFields"][] = "Type";
$tdatamaintenenace_regularservice[".viewFields"][] = "MeterReading";
$tdatamaintenenace_regularservice[".viewFields"][] = "RefNo";
$tdatamaintenenace_regularservice[".viewFields"][] = "Supplier";
$tdatamaintenenace_regularservice[".viewFields"][] = "Cost";
$tdatamaintenenace_regularservice[".viewFields"][] = "PaymentVoucher";
$tdatamaintenenace_regularservice[".viewFields"][] = "Remarks";
$tdatamaintenenace_regularservice[".viewFields"][] = "EnteredBy";
$tdatamaintenenace_regularservice[".viewFields"][] = "SysDate";
$tdatamaintenenace_regularservice[".viewFields"][] = "Approval";

$tdatamaintenenace_regularservice[".addFields"] = array();
$tdatamaintenenace_regularservice[".addFields"][] = "Fleet";
$tdatamaintenenace_regularservice[".addFields"][] = "Vehicle";
$tdatamaintenenace_regularservice[".addFields"][] = "Type";
$tdatamaintenenace_regularservice[".addFields"][] = "Date";
$tdatamaintenenace_regularservice[".addFields"][] = "MaintType";
$tdatamaintenenace_regularservice[".addFields"][] = "MeterReading";
$tdatamaintenenace_regularservice[".addFields"][] = "RefNo";
$tdatamaintenenace_regularservice[".addFields"][] = "Supplier";
$tdatamaintenenace_regularservice[".addFields"][] = "Cost";
$tdatamaintenenace_regularservice[".addFields"][] = "PaymentVoucher";
$tdatamaintenenace_regularservice[".addFields"][] = "Remarks";
$tdatamaintenenace_regularservice[".addFields"][] = "EnteredBy";
$tdatamaintenenace_regularservice[".addFields"][] = "SysDate";

$tdatamaintenenace_regularservice[".masterListFields"] = array();
$tdatamaintenenace_regularservice[".masterListFields"][] = "Date";
$tdatamaintenenace_regularservice[".masterListFields"][] = "Id";
$tdatamaintenenace_regularservice[".masterListFields"][] = "MaintType";
$tdatamaintenenace_regularservice[".masterListFields"][] = "Vehicle";
$tdatamaintenenace_regularservice[".masterListFields"][] = "Fleet";
$tdatamaintenenace_regularservice[".masterListFields"][] = "Type";
$tdatamaintenenace_regularservice[".masterListFields"][] = "MeterReading";
$tdatamaintenenace_regularservice[".masterListFields"][] = "RefNo";
$tdatamaintenenace_regularservice[".masterListFields"][] = "Supplier";
$tdatamaintenenace_regularservice[".masterListFields"][] = "Cost";
$tdatamaintenenace_regularservice[".masterListFields"][] = "AccidentRef";
$tdatamaintenenace_regularservice[".masterListFields"][] = "PaymentVoucher";
$tdatamaintenenace_regularservice[".masterListFields"][] = "Remarks";
$tdatamaintenenace_regularservice[".masterListFields"][] = "EnteredBy";
$tdatamaintenenace_regularservice[".masterListFields"][] = "Approval";
$tdatamaintenenace_regularservice[".masterListFields"][] = "SysDate";

$tdatamaintenenace_regularservice[".inlineAddFields"] = array();

$tdatamaintenenace_regularservice[".editFields"] = array();
$tdatamaintenenace_regularservice[".editFields"][] = "Date";
$tdatamaintenenace_regularservice[".editFields"][] = "MaintType";
$tdatamaintenenace_regularservice[".editFields"][] = "Vehicle";
$tdatamaintenenace_regularservice[".editFields"][] = "Fleet";
$tdatamaintenenace_regularservice[".editFields"][] = "Type";
$tdatamaintenenace_regularservice[".editFields"][] = "MeterReading";
$tdatamaintenenace_regularservice[".editFields"][] = "RefNo";
$tdatamaintenenace_regularservice[".editFields"][] = "Supplier";
$tdatamaintenenace_regularservice[".editFields"][] = "Cost";
$tdatamaintenenace_regularservice[".editFields"][] = "PaymentVoucher";
$tdatamaintenenace_regularservice[".editFields"][] = "Remarks";
$tdatamaintenenace_regularservice[".editFields"][] = "Approval";
$tdatamaintenenace_regularservice[".editFields"][] = "EnteredBy";
$tdatamaintenenace_regularservice[".editFields"][] = "SysDate";

$tdatamaintenenace_regularservice[".inlineEditFields"] = array();

$tdatamaintenenace_regularservice[".updateSelectedFields"] = array();
$tdatamaintenenace_regularservice[".updateSelectedFields"][] = "Date";
$tdatamaintenenace_regularservice[".updateSelectedFields"][] = "MaintType";
$tdatamaintenenace_regularservice[".updateSelectedFields"][] = "Vehicle";
$tdatamaintenenace_regularservice[".updateSelectedFields"][] = "Fleet";
$tdatamaintenenace_regularservice[".updateSelectedFields"][] = "Type";
$tdatamaintenenace_regularservice[".updateSelectedFields"][] = "MeterReading";
$tdatamaintenenace_regularservice[".updateSelectedFields"][] = "RefNo";
$tdatamaintenenace_regularservice[".updateSelectedFields"][] = "Supplier";
$tdatamaintenenace_regularservice[".updateSelectedFields"][] = "Cost";
$tdatamaintenenace_regularservice[".updateSelectedFields"][] = "PaymentVoucher";
$tdatamaintenenace_regularservice[".updateSelectedFields"][] = "Remarks";
$tdatamaintenenace_regularservice[".updateSelectedFields"][] = "Approval";
$tdatamaintenenace_regularservice[".updateSelectedFields"][] = "EnteredBy";
$tdatamaintenenace_regularservice[".updateSelectedFields"][] = "SysDate";


$tdatamaintenenace_regularservice[".exportFields"] = array();
$tdatamaintenenace_regularservice[".exportFields"][] = "Date";
$tdatamaintenenace_regularservice[".exportFields"][] = "Id";
$tdatamaintenenace_regularservice[".exportFields"][] = "MaintType";
$tdatamaintenenace_regularservice[".exportFields"][] = "Vehicle";
$tdatamaintenenace_regularservice[".exportFields"][] = "Fleet";
$tdatamaintenenace_regularservice[".exportFields"][] = "Type";
$tdatamaintenenace_regularservice[".exportFields"][] = "MeterReading";
$tdatamaintenenace_regularservice[".exportFields"][] = "RefNo";
$tdatamaintenenace_regularservice[".exportFields"][] = "Supplier";
$tdatamaintenenace_regularservice[".exportFields"][] = "Cost";
$tdatamaintenenace_regularservice[".exportFields"][] = "PaymentVoucher";
$tdatamaintenenace_regularservice[".exportFields"][] = "Remarks";
$tdatamaintenenace_regularservice[".exportFields"][] = "EnteredBy";
$tdatamaintenenace_regularservice[".exportFields"][] = "Approval";
$tdatamaintenenace_regularservice[".exportFields"][] = "SysDate";

$tdatamaintenenace_regularservice[".importFields"] = array();
$tdatamaintenenace_regularservice[".importFields"][] = "Id";
$tdatamaintenenace_regularservice[".importFields"][] = "Fleet";
$tdatamaintenenace_regularservice[".importFields"][] = "Vehicle";
$tdatamaintenenace_regularservice[".importFields"][] = "Type";
$tdatamaintenenace_regularservice[".importFields"][] = "Supplier";
$tdatamaintenenace_regularservice[".importFields"][] = "Cost";
$tdatamaintenenace_regularservice[".importFields"][] = "Remarks";
$tdatamaintenenace_regularservice[".importFields"][] = "RefNo";
$tdatamaintenenace_regularservice[".importFields"][] = "SysDate";
$tdatamaintenenace_regularservice[".importFields"][] = "Date";
$tdatamaintenenace_regularservice[".importFields"][] = "EnteredBy";
$tdatamaintenenace_regularservice[".importFields"][] = "Approval";
$tdatamaintenenace_regularservice[".importFields"][] = "MeterReading";
$tdatamaintenenace_regularservice[".importFields"][] = "PaymentVoucher";
$tdatamaintenenace_regularservice[".importFields"][] = "MaintType";

$tdatamaintenenace_regularservice[".printFields"] = array();
$tdatamaintenenace_regularservice[".printFields"][] = "Date";
$tdatamaintenenace_regularservice[".printFields"][] = "Id";
$tdatamaintenenace_regularservice[".printFields"][] = "MaintType";
$tdatamaintenenace_regularservice[".printFields"][] = "Vehicle";
$tdatamaintenenace_regularservice[".printFields"][] = "Fleet";
$tdatamaintenenace_regularservice[".printFields"][] = "Type";
$tdatamaintenenace_regularservice[".printFields"][] = "MeterReading";
$tdatamaintenenace_regularservice[".printFields"][] = "RefNo";
$tdatamaintenenace_regularservice[".printFields"][] = "Supplier";
$tdatamaintenenace_regularservice[".printFields"][] = "Cost";
$tdatamaintenenace_regularservice[".printFields"][] = "PaymentVoucher";
$tdatamaintenenace_regularservice[".printFields"][] = "Remarks";
$tdatamaintenenace_regularservice[".printFields"][] = "EnteredBy";
$tdatamaintenenace_regularservice[".printFields"][] = "Approval";
$tdatamaintenenace_regularservice[".printFields"][] = "SysDate";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_regularservice","Id");
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




	$tdatamaintenenace_regularservice["Id"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_regularservice","Fleet");
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




	$tdatamaintenenace_regularservice["Fleet"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_regularservice","Vehicle");
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




	$tdatamaintenenace_regularservice["Vehicle"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_regularservice","Type");
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




	$tdatamaintenenace_regularservice["Type"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_regularservice","Supplier");
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




	$tdatamaintenenace_regularservice["Supplier"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_regularservice","Cost");
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




	$tdatamaintenenace_regularservice["Cost"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_regularservice","Remarks");
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




	$tdatamaintenenace_regularservice["Remarks"] = $fdata;
//	RefNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "RefNo";
	$fdata["GoodName"] = "RefNo";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_regularservice","RefNo");
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




	$tdatamaintenenace_regularservice["RefNo"] = $fdata;
//	SysDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SysDate";
	$fdata["GoodName"] = "SysDate";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_regularservice","SysDate");
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




	$tdatamaintenenace_regularservice["SysDate"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_regularservice","Date");
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




	$tdatamaintenenace_regularservice["Date"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_regularservice","EnteredBy");
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




	$tdatamaintenenace_regularservice["EnteredBy"] = $fdata;
//	Approval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Approval";
	$fdata["GoodName"] = "Approval";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_regularservice","Approval");
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




	$tdatamaintenenace_regularservice["Approval"] = $fdata;
//	MeterReading
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "MeterReading";
	$fdata["GoodName"] = "MeterReading";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_regularservice","MeterReading");
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




	$tdatamaintenenace_regularservice["MeterReading"] = $fdata;
//	AccidentRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "AccidentRef";
	$fdata["GoodName"] = "AccidentRef";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_regularservice","AccidentRef");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "AccidentRef";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccidentRef";

	
	
			
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








	$tdatamaintenenace_regularservice["AccidentRef"] = $fdata;
//	PaymentVoucher
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "PaymentVoucher";
	$fdata["GoodName"] = "PaymentVoucher";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_regularservice","PaymentVoucher");
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




	$tdatamaintenenace_regularservice["PaymentVoucher"] = $fdata;
//	MaintType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "MaintType";
	$fdata["GoodName"] = "MaintType";
	$fdata["ownerTable"] = "maintenenace";
	$fdata["Label"] = GetFieldLabel("maintenenace_regularservice","MaintType");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamaintenenace_regularservice["MaintType"] = $fdata;


$tables_data["maintenenace-regularservice"]=&$tdatamaintenenace_regularservice;
$field_labels["maintenenace_regularservice"] = &$fieldLabelsmaintenenace_regularservice;
$fieldToolTips["maintenenace_regularservice"] = &$fieldToolTipsmaintenenace_regularservice;
$page_titles["maintenenace_regularservice"] = &$pageTitlesmaintenenace_regularservice;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["maintenenace-regularservice"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["maintenenace-regularservice"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_maintenenace_regularservice()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  Fleet,  Vehicle,  `Type`,  Supplier,  Cost,  Remarks,  RefNo,  `SysDate`,  `Date`,  EnteredBy,  Approval,  MeterReading,  AccidentRef,  PaymentVoucher,  MaintType";
$proto0["m_strFrom"] = "FROM maintenenace";
$proto0["m_strWhere"] = "MaintType =\"Full Service\" OR MaintType =\"Lub Service\" OR MaintType =\"Mechanical Service\" OR MaintType =\"Other Maintenance\" OR MaintType =\"Tyre Repairs\" OR MaintType =\"Service and Repair\"";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "MaintType =\"Full Service\" OR MaintType =\"Lub Service\" OR MaintType =\"Mechanical Service\" OR MaintType =\"Other Maintenance\" OR MaintType =\"Tyre Repairs\" OR MaintType =\"Service and Repair\"";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "MaintType =\"Full Service\" OR MaintType =\"Lub Service\" OR MaintType =\"Mechanical Service\" OR MaintType =\"Other Maintenance\" OR MaintType =\"Tyre Repairs\" OR MaintType =\"Service and Repair\""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "MaintType =\"Full Service\"";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "MaintType",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-regularservice"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=\"Full Service\"";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "MaintType =\"Lub Service\"";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "MaintType",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-regularservice"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=\"Lub Service\"";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "MaintType =\"Mechanical Service\"";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "MaintType",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-regularservice"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "=\"Mechanical Service\"";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto2["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "MaintType =\"Other Maintenance\"";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "MaintType",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-regularservice"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "=\"Other Maintenance\"";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto2["m_contained"][]=$obj;
						$proto12=array();
$proto12["m_sql"] = "MaintType =\"Tyre Repairs\"";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "MaintType",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-regularservice"
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "=\"Tyre Repairs\"";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

			$proto2["m_contained"][]=$obj;
						$proto14=array();
$proto14["m_sql"] = "MaintType =\"Service and Repair\"";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "MaintType",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-regularservice"
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "=\"Service and Repair\"";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Id",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-regularservice"
));

$proto18["m_sql"] = "Id";
$proto18["m_srcTableName"] = "maintenenace-regularservice";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-regularservice"
));

$proto20["m_sql"] = "Fleet";
$proto20["m_srcTableName"] = "maintenenace-regularservice";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-regularservice"
));

$proto22["m_sql"] = "Vehicle";
$proto22["m_srcTableName"] = "maintenenace-regularservice";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-regularservice"
));

$proto24["m_sql"] = "`Type`";
$proto24["m_srcTableName"] = "maintenenace-regularservice";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-regularservice"
));

$proto26["m_sql"] = "Supplier";
$proto26["m_srcTableName"] = "maintenenace-regularservice";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-regularservice"
));

$proto28["m_sql"] = "Cost";
$proto28["m_srcTableName"] = "maintenenace-regularservice";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-regularservice"
));

$proto30["m_sql"] = "Remarks";
$proto30["m_srcTableName"] = "maintenenace-regularservice";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNo",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-regularservice"
));

$proto32["m_sql"] = "RefNo";
$proto32["m_srcTableName"] = "maintenenace-regularservice";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "SysDate",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-regularservice"
));

$proto34["m_sql"] = "`SysDate`";
$proto34["m_srcTableName"] = "maintenenace-regularservice";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-regularservice"
));

$proto36["m_sql"] = "`Date`";
$proto36["m_srcTableName"] = "maintenenace-regularservice";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-regularservice"
));

$proto38["m_sql"] = "EnteredBy";
$proto38["m_srcTableName"] = "maintenenace-regularservice";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Approval",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-regularservice"
));

$proto40["m_sql"] = "Approval";
$proto40["m_srcTableName"] = "maintenenace-regularservice";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "MeterReading",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-regularservice"
));

$proto42["m_sql"] = "MeterReading";
$proto42["m_srcTableName"] = "maintenenace-regularservice";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "AccidentRef",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-regularservice"
));

$proto44["m_sql"] = "AccidentRef";
$proto44["m_srcTableName"] = "maintenenace-regularservice";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentVoucher",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-regularservice"
));

$proto46["m_sql"] = "PaymentVoucher";
$proto46["m_srcTableName"] = "maintenenace-regularservice";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "MaintType",
	"m_strTable" => "maintenenace",
	"m_srcTableName" => "maintenenace-regularservice"
));

$proto48["m_sql"] = "MaintType";
$proto48["m_srcTableName"] = "maintenenace-regularservice";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "maintenenace";
$proto51["m_srcTableName"] = "maintenenace-regularservice";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "Id";
$proto51["m_columns"][] = "Fleet";
$proto51["m_columns"][] = "Vehicle";
$proto51["m_columns"][] = "Type";
$proto51["m_columns"][] = "Supplier";
$proto51["m_columns"][] = "Cost";
$proto51["m_columns"][] = "Remarks";
$proto51["m_columns"][] = "RefNo";
$proto51["m_columns"][] = "SysDate";
$proto51["m_columns"][] = "Date";
$proto51["m_columns"][] = "EnteredBy";
$proto51["m_columns"][] = "Approval";
$proto51["m_columns"][] = "MeterReading";
$proto51["m_columns"][] = "AccidentRef";
$proto51["m_columns"][] = "PaymentVoucher";
$proto51["m_columns"][] = "MaintType";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "maintenenace";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "maintenenace-regularservice";
$proto52=array();
$proto52["m_sql"] = "";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="maintenenace-regularservice";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_maintenenace_regularservice = createSqlQuery_maintenenace_regularservice();


	
					
;

																

$tdatamaintenenace_regularservice[".sqlquery"] = $queryData_maintenenace_regularservice;

$tableEvents["maintenenace-regularservice"] = new eventsBase;
$tdatamaintenenace_regularservice[".hasEvents"] = false;

?>