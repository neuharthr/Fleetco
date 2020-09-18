<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacreategrn_disposal_rebuild = array();
	$tdatacreategrn_disposal_rebuild[".truncateText"] = true;
	$tdatacreategrn_disposal_rebuild[".NumberOfChars"] = 80;
	$tdatacreategrn_disposal_rebuild[".ShortName"] = "creategrn_disposal_rebuild";
	$tdatacreategrn_disposal_rebuild[".OwnerID"] = "";
	$tdatacreategrn_disposal_rebuild[".OriginalTable"] = "creategrn";

//	field labels
$fieldLabelscreategrn_disposal_rebuild = array();
$fieldToolTipscreategrn_disposal_rebuild = array();
$pageTitlescreategrn_disposal_rebuild = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscreategrn_disposal_rebuild["English"] = array();
	$fieldToolTipscreategrn_disposal_rebuild["English"] = array();
	$pageTitlescreategrn_disposal_rebuild["English"] = array();
	$fieldLabelscreategrn_disposal_rebuild["English"]["ItemCode"] = "Tyre Code";
	$fieldToolTipscreategrn_disposal_rebuild["English"]["ItemCode"] = "";
	$fieldLabelscreategrn_disposal_rebuild["English"]["Brand"] = "Brand";
	$fieldToolTipscreategrn_disposal_rebuild["English"]["Brand"] = "";
	$fieldLabelscreategrn_disposal_rebuild["English"]["Description"] = "Descr.";
	$fieldToolTipscreategrn_disposal_rebuild["English"]["Description"] = "";
	$fieldLabelscreategrn_disposal_rebuild["English"]["Supplier"] = "Supplier";
	$fieldToolTipscreategrn_disposal_rebuild["English"]["Supplier"] = "";
	$fieldLabelscreategrn_disposal_rebuild["English"]["Quantity"] = "Qty";
	$fieldToolTipscreategrn_disposal_rebuild["English"]["Quantity"] = "";
	$fieldLabelscreategrn_disposal_rebuild["English"]["RemovedFrom"] = "Vehicle";
	$fieldToolTipscreategrn_disposal_rebuild["English"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_disposal_rebuild["English"]["SystemDate"] = "Sys. Date";
	$fieldToolTipscreategrn_disposal_rebuild["English"]["SystemDate"] = "";
	$fieldLabelscreategrn_disposal_rebuild["English"]["EnteredBy"] = "Entered";
	$fieldToolTipscreategrn_disposal_rebuild["English"]["EnteredBy"] = "";
	$fieldLabelscreategrn_disposal_rebuild["English"]["ApprovedBy"] = "Edited By";
	$fieldToolTipscreategrn_disposal_rebuild["English"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_disposal_rebuild["English"]["Status"] = "Type";
	$fieldToolTipscreategrn_disposal_rebuild["English"]["Status"] = "";
	$fieldLabelscreategrn_disposal_rebuild["English"]["ID"] = "ID";
	$fieldToolTipscreategrn_disposal_rebuild["English"]["ID"] = "";
	$fieldLabelscreategrn_disposal_rebuild["English"]["RefNumber"] = "Ref No.";
	$fieldToolTipscreategrn_disposal_rebuild["English"]["RefNumber"] = "";
	$fieldLabelscreategrn_disposal_rebuild["English"]["Cost"] = "Value";
	$fieldToolTipscreategrn_disposal_rebuild["English"]["Cost"] = "";
	$fieldLabelscreategrn_disposal_rebuild["English"]["Fleet"] = "Fleet";
	$fieldToolTipscreategrn_disposal_rebuild["English"]["Fleet"] = "";
	$fieldLabelscreategrn_disposal_rebuild["English"]["GRNDate"] = "Date";
	$fieldToolTipscreategrn_disposal_rebuild["English"]["GRNDate"] = "";
	$fieldLabelscreategrn_disposal_rebuild["English"]["UnitPrice"] = "Rate";
	$fieldToolTipscreategrn_disposal_rebuild["English"]["UnitPrice"] = "";
	$fieldLabelscreategrn_disposal_rebuild["English"]["CurrentStock"] = "In-Stock";
	$fieldToolTipscreategrn_disposal_rebuild["English"]["CurrentStock"] = "";
	$fieldLabelscreategrn_disposal_rebuild["English"]["PriceLink"] = "Cost Code";
	$fieldToolTipscreategrn_disposal_rebuild["English"]["PriceLink"] = "";
	if (count($fieldToolTipscreategrn_disposal_rebuild["English"]))
		$tdatacreategrn_disposal_rebuild[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelscreategrn_disposal_rebuild["Afrikaans"] = array();
	$fieldToolTipscreategrn_disposal_rebuild["Afrikaans"] = array();
	$pageTitlescreategrn_disposal_rebuild["Afrikaans"] = array();
	$fieldLabelscreategrn_disposal_rebuild["Afrikaans"]["ID"] = "ID";
	$fieldToolTipscreategrn_disposal_rebuild["Afrikaans"]["ID"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Afrikaans"]["ItemCode"] = "Tirus Kode";
	$fieldToolTipscreategrn_disposal_rebuild["Afrikaans"]["ItemCode"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Afrikaans"]["Brand"] = "Brand";
	$fieldToolTipscreategrn_disposal_rebuild["Afrikaans"]["Brand"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Afrikaans"]["Description"] = "beskrywing";
	$fieldToolTipscreategrn_disposal_rebuild["Afrikaans"]["Description"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Afrikaans"]["Supplier"] = "verskaffer";
	$fieldToolTipscreategrn_disposal_rebuild["Afrikaans"]["Supplier"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Afrikaans"]["Quantity"] = "hoeveelheid";
	$fieldToolTipscreategrn_disposal_rebuild["Afrikaans"]["Quantity"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Afrikaans"]["RemovedFrom"] = "voertuig";
	$fieldToolTipscreategrn_disposal_rebuild["Afrikaans"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Afrikaans"]["SystemDate"] = "stelsel Datum";
	$fieldToolTipscreategrn_disposal_rebuild["Afrikaans"]["SystemDate"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Afrikaans"]["GRNDate"] = "datum";
	$fieldToolTipscreategrn_disposal_rebuild["Afrikaans"]["GRNDate"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Afrikaans"]["EnteredBy"] = "ingevoer";
	$fieldToolTipscreategrn_disposal_rebuild["Afrikaans"]["EnteredBy"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Afrikaans"]["ApprovedBy"] = "geredigeer deur";
	$fieldToolTipscreategrn_disposal_rebuild["Afrikaans"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Afrikaans"]["UnitPrice"] = "Koers";
	$fieldToolTipscreategrn_disposal_rebuild["Afrikaans"]["UnitPrice"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Afrikaans"]["Status"] = "tipe";
	$fieldToolTipscreategrn_disposal_rebuild["Afrikaans"]["Status"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Afrikaans"]["RefNumber"] = "Verwysing No.";
	$fieldToolTipscreategrn_disposal_rebuild["Afrikaans"]["RefNumber"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Afrikaans"]["CurrentStock"] = "Huidige Stock";
	$fieldToolTipscreategrn_disposal_rebuild["Afrikaans"]["CurrentStock"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Afrikaans"]["Fleet"] = "vloot";
	$fieldToolTipscreategrn_disposal_rebuild["Afrikaans"]["Fleet"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Afrikaans"]["PriceLink"] = "koste Kode";
	$fieldToolTipscreategrn_disposal_rebuild["Afrikaans"]["PriceLink"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Afrikaans"]["Cost"] = "waarde";
	$fieldToolTipscreategrn_disposal_rebuild["Afrikaans"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_disposal_rebuild["Afrikaans"]))
		$tdatacreategrn_disposal_rebuild[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelscreategrn_disposal_rebuild["Arabic"] = array();
	$fieldToolTipscreategrn_disposal_rebuild["Arabic"] = array();
	$pageTitlescreategrn_disposal_rebuild["Arabic"] = array();
	$fieldLabelscreategrn_disposal_rebuild["Arabic"]["ID"] = "???? ?????";
	$fieldToolTipscreategrn_disposal_rebuild["Arabic"]["ID"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Arabic"]["ItemCode"] = "????? ???";
	$fieldToolTipscreategrn_disposal_rebuild["Arabic"]["ItemCode"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Arabic"]["Brand"] = "????? ??????";
	$fieldToolTipscreategrn_disposal_rebuild["Arabic"]["Brand"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Arabic"]["Description"] = "???";
	$fieldToolTipscreategrn_disposal_rebuild["Arabic"]["Description"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Arabic"]["Supplier"] = "??????";
	$fieldToolTipscreategrn_disposal_rebuild["Arabic"]["Supplier"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Arabic"]["Quantity"] = "????";
	$fieldToolTipscreategrn_disposal_rebuild["Arabic"]["Quantity"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Arabic"]["RemovedFrom"] = "?????";
	$fieldToolTipscreategrn_disposal_rebuild["Arabic"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Arabic"]["SystemDate"] = "????? ??????";
	$fieldToolTipscreategrn_disposal_rebuild["Arabic"]["SystemDate"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Arabic"]["GRNDate"] = "?????";
	$fieldToolTipscreategrn_disposal_rebuild["Arabic"]["GRNDate"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Arabic"]["EnteredBy"] = "???";
	$fieldToolTipscreategrn_disposal_rebuild["Arabic"]["EnteredBy"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Arabic"]["ApprovedBy"] = "???? ??????";
	$fieldToolTipscreategrn_disposal_rebuild["Arabic"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Arabic"]["UnitPrice"] = "????";
	$fieldToolTipscreategrn_disposal_rebuild["Arabic"]["UnitPrice"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Arabic"]["Status"] = "????";
	$fieldToolTipscreategrn_disposal_rebuild["Arabic"]["Status"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Arabic"]["RefNumber"] = "??? ??????.";
	$fieldToolTipscreategrn_disposal_rebuild["Arabic"]["RefNumber"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Arabic"]["CurrentStock"] = "??????? ??????";
	$fieldToolTipscreategrn_disposal_rebuild["Arabic"]["CurrentStock"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Arabic"]["Fleet"] = "?????";
	$fieldToolTipscreategrn_disposal_rebuild["Arabic"]["Fleet"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Arabic"]["PriceLink"] = "??? ???????";
	$fieldToolTipscreategrn_disposal_rebuild["Arabic"]["PriceLink"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Arabic"]["Cost"] = "??????";
	$fieldToolTipscreategrn_disposal_rebuild["Arabic"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_disposal_rebuild["Arabic"]))
		$tdatacreategrn_disposal_rebuild[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelscreategrn_disposal_rebuild["Chinese"] = array();
	$fieldToolTipscreategrn_disposal_rebuild["Chinese"] = array();
	$pageTitlescreategrn_disposal_rebuild["Chinese"] = array();
	$fieldLabelscreategrn_disposal_rebuild["Chinese"]["ID"] = "ID";
	$fieldToolTipscreategrn_disposal_rebuild["Chinese"]["ID"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Chinese"]["ItemCode"] = "????";
	$fieldToolTipscreategrn_disposal_rebuild["Chinese"]["ItemCode"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Chinese"]["Brand"] = "?";
	$fieldToolTipscreategrn_disposal_rebuild["Chinese"]["Brand"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Chinese"]["Description"] = "??";
	$fieldToolTipscreategrn_disposal_rebuild["Chinese"]["Description"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Chinese"]["Supplier"] = "???";
	$fieldToolTipscreategrn_disposal_rebuild["Chinese"]["Supplier"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Chinese"]["Quantity"] = "??";
	$fieldToolTipscreategrn_disposal_rebuild["Chinese"]["Quantity"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Chinese"]["RemovedFrom"] = "??";
	$fieldToolTipscreategrn_disposal_rebuild["Chinese"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Chinese"]["SystemDate"] = "????";
	$fieldToolTipscreategrn_disposal_rebuild["Chinese"]["SystemDate"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Chinese"]["GRNDate"] = "??";
	$fieldToolTipscreategrn_disposal_rebuild["Chinese"]["GRNDate"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Chinese"]["EnteredBy"] = "??";
	$fieldToolTipscreategrn_disposal_rebuild["Chinese"]["EnteredBy"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Chinese"]["ApprovedBy"] = "??";
	$fieldToolTipscreategrn_disposal_rebuild["Chinese"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Chinese"]["UnitPrice"] = "?";
	$fieldToolTipscreategrn_disposal_rebuild["Chinese"]["UnitPrice"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Chinese"]["Status"] = "??";
	$fieldToolTipscreategrn_disposal_rebuild["Chinese"]["Status"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Chinese"]["RefNumber"] = "?????";
	$fieldToolTipscreategrn_disposal_rebuild["Chinese"]["RefNumber"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Chinese"]["CurrentStock"] = "????";
	$fieldToolTipscreategrn_disposal_rebuild["Chinese"]["CurrentStock"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Chinese"]["Fleet"] = "??";
	$fieldToolTipscreategrn_disposal_rebuild["Chinese"]["Fleet"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Chinese"]["PriceLink"] = "????";
	$fieldToolTipscreategrn_disposal_rebuild["Chinese"]["PriceLink"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Chinese"]["Cost"] = "?";
	$fieldToolTipscreategrn_disposal_rebuild["Chinese"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_disposal_rebuild["Chinese"]))
		$tdatacreategrn_disposal_rebuild[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelscreategrn_disposal_rebuild["French"] = array();
	$fieldToolTipscreategrn_disposal_rebuild["French"] = array();
	$pageTitlescreategrn_disposal_rebuild["French"] = array();
	$fieldLabelscreategrn_disposal_rebuild["French"]["ID"] = "ID";
	$fieldToolTipscreategrn_disposal_rebuild["French"]["ID"] = "";
	$fieldLabelscreategrn_disposal_rebuild["French"]["ItemCode"] = "Code du pneu";
	$fieldToolTipscreategrn_disposal_rebuild["French"]["ItemCode"] = "";
	$fieldLabelscreategrn_disposal_rebuild["French"]["Brand"] = "Marque";
	$fieldToolTipscreategrn_disposal_rebuild["French"]["Brand"] = "";
	$fieldLabelscreategrn_disposal_rebuild["French"]["Description"] = "La description";
	$fieldToolTipscreategrn_disposal_rebuild["French"]["Description"] = "";
	$fieldLabelscreategrn_disposal_rebuild["French"]["Supplier"] = "Fournisseur";
	$fieldToolTipscreategrn_disposal_rebuild["French"]["Supplier"] = "";
	$fieldLabelscreategrn_disposal_rebuild["French"]["Quantity"] = "Quantité";
	$fieldToolTipscreategrn_disposal_rebuild["French"]["Quantity"] = "";
	$fieldLabelscreategrn_disposal_rebuild["French"]["RemovedFrom"] = "Véhicule";
	$fieldToolTipscreategrn_disposal_rebuild["French"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_disposal_rebuild["French"]["SystemDate"] = "Date du système";
	$fieldToolTipscreategrn_disposal_rebuild["French"]["SystemDate"] = "";
	$fieldLabelscreategrn_disposal_rebuild["French"]["GRNDate"] = "date";
	$fieldToolTipscreategrn_disposal_rebuild["French"]["GRNDate"] = "";
	$fieldLabelscreategrn_disposal_rebuild["French"]["EnteredBy"] = "Entré";
	$fieldToolTipscreategrn_disposal_rebuild["French"]["EnteredBy"] = "";
	$fieldLabelscreategrn_disposal_rebuild["French"]["ApprovedBy"] = "Édité par";
	$fieldToolTipscreategrn_disposal_rebuild["French"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_disposal_rebuild["French"]["UnitPrice"] = "Taux";
	$fieldToolTipscreategrn_disposal_rebuild["French"]["UnitPrice"] = "";
	$fieldLabelscreategrn_disposal_rebuild["French"]["Status"] = "Type";
	$fieldToolTipscreategrn_disposal_rebuild["French"]["Status"] = "";
	$fieldLabelscreategrn_disposal_rebuild["French"]["RefNumber"] = "Numéro de référence.";
	$fieldToolTipscreategrn_disposal_rebuild["French"]["RefNumber"] = "";
	$fieldLabelscreategrn_disposal_rebuild["French"]["CurrentStock"] = "Stock actuel";
	$fieldToolTipscreategrn_disposal_rebuild["French"]["CurrentStock"] = "";
	$fieldLabelscreategrn_disposal_rebuild["French"]["Fleet"] = "Flotte";
	$fieldToolTipscreategrn_disposal_rebuild["French"]["Fleet"] = "";
	$fieldLabelscreategrn_disposal_rebuild["French"]["PriceLink"] = "Code de Coût";
	$fieldToolTipscreategrn_disposal_rebuild["French"]["PriceLink"] = "";
	$fieldLabelscreategrn_disposal_rebuild["French"]["Cost"] = "Valeur";
	$fieldToolTipscreategrn_disposal_rebuild["French"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_disposal_rebuild["French"]))
		$tdatacreategrn_disposal_rebuild[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelscreategrn_disposal_rebuild["German"] = array();
	$fieldToolTipscreategrn_disposal_rebuild["German"] = array();
	$pageTitlescreategrn_disposal_rebuild["German"] = array();
	$fieldLabelscreategrn_disposal_rebuild["German"]["ID"] = "ICH WÜRDE";
	$fieldToolTipscreategrn_disposal_rebuild["German"]["ID"] = "";
	$fieldLabelscreategrn_disposal_rebuild["German"]["ItemCode"] = "Bereifung";
	$fieldToolTipscreategrn_disposal_rebuild["German"]["ItemCode"] = "";
	$fieldLabelscreategrn_disposal_rebuild["German"]["Brand"] = "Marke";
	$fieldToolTipscreategrn_disposal_rebuild["German"]["Brand"] = "";
	$fieldLabelscreategrn_disposal_rebuild["German"]["Description"] = "Beschreibung";
	$fieldToolTipscreategrn_disposal_rebuild["German"]["Description"] = "";
	$fieldLabelscreategrn_disposal_rebuild["German"]["Supplier"] = "Lieferant";
	$fieldToolTipscreategrn_disposal_rebuild["German"]["Supplier"] = "";
	$fieldLabelscreategrn_disposal_rebuild["German"]["Quantity"] = "Menge";
	$fieldToolTipscreategrn_disposal_rebuild["German"]["Quantity"] = "";
	$fieldLabelscreategrn_disposal_rebuild["German"]["RemovedFrom"] = "Fahrzeug";
	$fieldToolTipscreategrn_disposal_rebuild["German"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_disposal_rebuild["German"]["SystemDate"] = "Systemdatum";
	$fieldToolTipscreategrn_disposal_rebuild["German"]["SystemDate"] = "";
	$fieldLabelscreategrn_disposal_rebuild["German"]["GRNDate"] = "Datum";
	$fieldToolTipscreategrn_disposal_rebuild["German"]["GRNDate"] = "";
	$fieldLabelscreategrn_disposal_rebuild["German"]["EnteredBy"] = "Eingegeben";
	$fieldToolTipscreategrn_disposal_rebuild["German"]["EnteredBy"] = "";
	$fieldLabelscreategrn_disposal_rebuild["German"]["ApprovedBy"] = "Bearbeitet von";
	$fieldToolTipscreategrn_disposal_rebuild["German"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_disposal_rebuild["German"]["UnitPrice"] = "Preis";
	$fieldToolTipscreategrn_disposal_rebuild["German"]["UnitPrice"] = "";
	$fieldLabelscreategrn_disposal_rebuild["German"]["Status"] = "Art";
	$fieldToolTipscreategrn_disposal_rebuild["German"]["Status"] = "";
	$fieldLabelscreategrn_disposal_rebuild["German"]["RefNumber"] = "Referenznummer.";
	$fieldToolTipscreategrn_disposal_rebuild["German"]["RefNumber"] = "";
	$fieldLabelscreategrn_disposal_rebuild["German"]["CurrentStock"] = "Aktueller Lagerbestand";
	$fieldToolTipscreategrn_disposal_rebuild["German"]["CurrentStock"] = "";
	$fieldLabelscreategrn_disposal_rebuild["German"]["Fleet"] = "Flotte";
	$fieldToolTipscreategrn_disposal_rebuild["German"]["Fleet"] = "";
	$fieldLabelscreategrn_disposal_rebuild["German"]["PriceLink"] = "Kostencode";
	$fieldToolTipscreategrn_disposal_rebuild["German"]["PriceLink"] = "";
	$fieldLabelscreategrn_disposal_rebuild["German"]["Cost"] = "Wert";
	$fieldToolTipscreategrn_disposal_rebuild["German"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_disposal_rebuild["German"]))
		$tdatacreategrn_disposal_rebuild[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelscreategrn_disposal_rebuild["Italian"] = array();
	$fieldToolTipscreategrn_disposal_rebuild["Italian"] = array();
	$pageTitlescreategrn_disposal_rebuild["Italian"] = array();
	$fieldLabelscreategrn_disposal_rebuild["Italian"]["ID"] = "ID";
	$fieldToolTipscreategrn_disposal_rebuild["Italian"]["ID"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Italian"]["ItemCode"] = "Codice Tyre";
	$fieldToolTipscreategrn_disposal_rebuild["Italian"]["ItemCode"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Italian"]["Brand"] = "Marca";
	$fieldToolTipscreategrn_disposal_rebuild["Italian"]["Brand"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Italian"]["Description"] = "Descrizione";
	$fieldToolTipscreategrn_disposal_rebuild["Italian"]["Description"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Italian"]["Supplier"] = "Fornitore";
	$fieldToolTipscreategrn_disposal_rebuild["Italian"]["Supplier"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Italian"]["Quantity"] = "Quantità";
	$fieldToolTipscreategrn_disposal_rebuild["Italian"]["Quantity"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Italian"]["RemovedFrom"] = "Veicolo";
	$fieldToolTipscreategrn_disposal_rebuild["Italian"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Italian"]["SystemDate"] = "Data di sistema";
	$fieldToolTipscreategrn_disposal_rebuild["Italian"]["SystemDate"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Italian"]["GRNDate"] = "Data";
	$fieldToolTipscreategrn_disposal_rebuild["Italian"]["GRNDate"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Italian"]["EnteredBy"] = "inserito";
	$fieldToolTipscreategrn_disposal_rebuild["Italian"]["EnteredBy"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Italian"]["ApprovedBy"] = "A cura di";
	$fieldToolTipscreategrn_disposal_rebuild["Italian"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Italian"]["UnitPrice"] = "tasso";
	$fieldToolTipscreategrn_disposal_rebuild["Italian"]["UnitPrice"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Italian"]["Status"] = "Digitare";
	$fieldToolTipscreategrn_disposal_rebuild["Italian"]["Status"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Italian"]["RefNumber"] = "Riferimento No.";
	$fieldToolTipscreategrn_disposal_rebuild["Italian"]["RefNumber"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Italian"]["CurrentStock"] = "Scorta attuale";
	$fieldToolTipscreategrn_disposal_rebuild["Italian"]["CurrentStock"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Italian"]["Fleet"] = "Flotta";
	$fieldToolTipscreategrn_disposal_rebuild["Italian"]["Fleet"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Italian"]["PriceLink"] = "Codice costo";
	$fieldToolTipscreategrn_disposal_rebuild["Italian"]["PriceLink"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Italian"]["Cost"] = "Valore";
	$fieldToolTipscreategrn_disposal_rebuild["Italian"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_disposal_rebuild["Italian"]))
		$tdatacreategrn_disposal_rebuild[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelscreategrn_disposal_rebuild["Russian"] = array();
	$fieldToolTipscreategrn_disposal_rebuild["Russian"] = array();
	$pageTitlescreategrn_disposal_rebuild["Russian"] = array();
	$fieldLabelscreategrn_disposal_rebuild["Russian"]["ID"] = "? ??";
	$fieldToolTipscreategrn_disposal_rebuild["Russian"]["ID"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Russian"]["ItemCode"] = "??? ???";
	$fieldToolTipscreategrn_disposal_rebuild["Russian"]["ItemCode"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Russian"]["Brand"] = "?????";
	$fieldToolTipscreategrn_disposal_rebuild["Russian"]["Brand"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Russian"]["Description"] = "????????";
	$fieldToolTipscreategrn_disposal_rebuild["Russian"]["Description"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Russian"]["Supplier"] = "?????????";
	$fieldToolTipscreategrn_disposal_rebuild["Russian"]["Supplier"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Russian"]["Quantity"] = "??????????";
	$fieldToolTipscreategrn_disposal_rebuild["Russian"]["Quantity"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Russian"]["RemovedFrom"] = "???????? ????????????";
	$fieldToolTipscreategrn_disposal_rebuild["Russian"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Russian"]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn_disposal_rebuild["Russian"]["SystemDate"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Russian"]["GRNDate"] = "????";
	$fieldToolTipscreategrn_disposal_rebuild["Russian"]["GRNDate"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Russian"]["EnteredBy"] = "?????";
	$fieldToolTipscreategrn_disposal_rebuild["Russian"]["EnteredBy"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Russian"]["ApprovedBy"] = "???????????????";
	$fieldToolTipscreategrn_disposal_rebuild["Russian"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Russian"]["UnitPrice"] = "??????";
	$fieldToolTipscreategrn_disposal_rebuild["Russian"]["UnitPrice"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Russian"]["Status"] = "???";
	$fieldToolTipscreategrn_disposal_rebuild["Russian"]["Status"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Russian"]["RefNumber"] = "?????? ?";
	$fieldToolTipscreategrn_disposal_rebuild["Russian"]["RefNumber"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Russian"]["CurrentStock"] = "??????? ?? ??????";
	$fieldToolTipscreategrn_disposal_rebuild["Russian"]["CurrentStock"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Russian"]["Fleet"] = "????";
	$fieldToolTipscreategrn_disposal_rebuild["Russian"]["Fleet"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Russian"]["PriceLink"] = "??? ?????????";
	$fieldToolTipscreategrn_disposal_rebuild["Russian"]["PriceLink"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Russian"]["Cost"] = "?????????";
	$fieldToolTipscreategrn_disposal_rebuild["Russian"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_disposal_rebuild["Russian"]))
		$tdatacreategrn_disposal_rebuild[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscreategrn_disposal_rebuild["Spanish"] = array();
	$fieldToolTipscreategrn_disposal_rebuild["Spanish"] = array();
	$pageTitlescreategrn_disposal_rebuild["Spanish"] = array();
	$fieldLabelscreategrn_disposal_rebuild["Spanish"]["ID"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipscreategrn_disposal_rebuild["Spanish"]["ID"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Spanish"]["ItemCode"] = "Código del neumático";
	$fieldToolTipscreategrn_disposal_rebuild["Spanish"]["ItemCode"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Spanish"]["Brand"] = "Marca";
	$fieldToolTipscreategrn_disposal_rebuild["Spanish"]["Brand"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Spanish"]["Description"] = "Descripción";
	$fieldToolTipscreategrn_disposal_rebuild["Spanish"]["Description"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Spanish"]["Supplier"] = "Proveedor";
	$fieldToolTipscreategrn_disposal_rebuild["Spanish"]["Supplier"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Spanish"]["Quantity"] = "Cantidad";
	$fieldToolTipscreategrn_disposal_rebuild["Spanish"]["Quantity"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Spanish"]["RemovedFrom"] = "Vehículo";
	$fieldToolTipscreategrn_disposal_rebuild["Spanish"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Spanish"]["SystemDate"] = "Fecha del sistema";
	$fieldToolTipscreategrn_disposal_rebuild["Spanish"]["SystemDate"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Spanish"]["GRNDate"] = "Fecha";
	$fieldToolTipscreategrn_disposal_rebuild["Spanish"]["GRNDate"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Spanish"]["EnteredBy"] = "Ingresó";
	$fieldToolTipscreategrn_disposal_rebuild["Spanish"]["EnteredBy"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Spanish"]["ApprovedBy"] = "Editado por";
	$fieldToolTipscreategrn_disposal_rebuild["Spanish"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Spanish"]["UnitPrice"] = "Tarifa";
	$fieldToolTipscreategrn_disposal_rebuild["Spanish"]["UnitPrice"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Spanish"]["Status"] = "Tipo";
	$fieldToolTipscreategrn_disposal_rebuild["Spanish"]["Status"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Spanish"]["RefNumber"] = "Numero de referencia.";
	$fieldToolTipscreategrn_disposal_rebuild["Spanish"]["RefNumber"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Spanish"]["CurrentStock"] = "Acciones actuales";
	$fieldToolTipscreategrn_disposal_rebuild["Spanish"]["CurrentStock"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Spanish"]["Fleet"] = "Flota";
	$fieldToolTipscreategrn_disposal_rebuild["Spanish"]["Fleet"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Spanish"]["PriceLink"] = "Código de costo";
	$fieldToolTipscreategrn_disposal_rebuild["Spanish"]["PriceLink"] = "";
	$fieldLabelscreategrn_disposal_rebuild["Spanish"]["Cost"] = "Valor";
	$fieldToolTipscreategrn_disposal_rebuild["Spanish"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_disposal_rebuild["Spanish"]))
		$tdatacreategrn_disposal_rebuild[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscreategrn_disposal_rebuild[""] = array();
	$fieldToolTipscreategrn_disposal_rebuild[""] = array();
	$pageTitlescreategrn_disposal_rebuild[""] = array();
	if (count($fieldToolTipscreategrn_disposal_rebuild[""]))
		$tdatacreategrn_disposal_rebuild[".isUseToolTips"] = true;
}


	$tdatacreategrn_disposal_rebuild[".NCSearch"] = true;



$tdatacreategrn_disposal_rebuild[".shortTableName"] = "creategrn_disposal_rebuild";
$tdatacreategrn_disposal_rebuild[".nSecOptions"] = 0;
$tdatacreategrn_disposal_rebuild[".recsPerRowPrint"] = 1;
$tdatacreategrn_disposal_rebuild[".mainTableOwnerID"] = "";
$tdatacreategrn_disposal_rebuild[".moveNext"] = 1;
$tdatacreategrn_disposal_rebuild[".entityType"] = 1;

$tdatacreategrn_disposal_rebuild[".strOriginalTableName"] = "creategrn";

		 



$tdatacreategrn_disposal_rebuild[".showAddInPopup"] = false;

$tdatacreategrn_disposal_rebuild[".showEditInPopup"] = false;

$tdatacreategrn_disposal_rebuild[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacreategrn_disposal_rebuild[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacreategrn_disposal_rebuild[".fieldsForRegister"] = array();

	$tdatacreategrn_disposal_rebuild[".listAjax"] = true;

	$tdatacreategrn_disposal_rebuild[".audit"] = false;

	$tdatacreategrn_disposal_rebuild[".locking"] = false;

$tdatacreategrn_disposal_rebuild[".edit"] = true;
$tdatacreategrn_disposal_rebuild[".afterEditAction"] = 1;
$tdatacreategrn_disposal_rebuild[".closePopupAfterEdit"] = 1;
$tdatacreategrn_disposal_rebuild[".afterEditActionDetTable"] = "Detail tables not found!";

$tdatacreategrn_disposal_rebuild[".add"] = true;
$tdatacreategrn_disposal_rebuild[".afterAddAction"] = 1;
$tdatacreategrn_disposal_rebuild[".closePopupAfterAdd"] = 1;
$tdatacreategrn_disposal_rebuild[".afterAddActionDetTable"] = "Detail tables not found!";

$tdatacreategrn_disposal_rebuild[".list"] = true;




$tdatacreategrn_disposal_rebuild[".view"] = true;

$tdatacreategrn_disposal_rebuild[".import"] = true;

$tdatacreategrn_disposal_rebuild[".exportTo"] = true;

$tdatacreategrn_disposal_rebuild[".printFriendly"] = true;

$tdatacreategrn_disposal_rebuild[".delete"] = true;

$tdatacreategrn_disposal_rebuild[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacreategrn_disposal_rebuild[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatacreategrn_disposal_rebuild[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatacreategrn_disposal_rebuild[".searchSaving"] = false;
//

$tdatacreategrn_disposal_rebuild[".showSearchPanel"] = true;
		$tdatacreategrn_disposal_rebuild[".flexibleSearch"] = true;

$tdatacreategrn_disposal_rebuild[".isUseAjaxSuggest"] = true;

$tdatacreategrn_disposal_rebuild[".rowHighlite"] = true;



$tdatacreategrn_disposal_rebuild[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacreategrn_disposal_rebuild[".isUseTimeForSearch"] = false;





$tdatacreategrn_disposal_rebuild[".allSearchFields"] = array();
$tdatacreategrn_disposal_rebuild[".filterFields"] = array();
$tdatacreategrn_disposal_rebuild[".requiredSearchFields"] = array();

$tdatacreategrn_disposal_rebuild[".allSearchFields"][] = "Status";
	$tdatacreategrn_disposal_rebuild[".allSearchFields"][] = "Fleet";
	$tdatacreategrn_disposal_rebuild[".allSearchFields"][] = "GRNDate";
	$tdatacreategrn_disposal_rebuild[".allSearchFields"][] = "ItemCode";
	$tdatacreategrn_disposal_rebuild[".allSearchFields"][] = "Quantity";
	$tdatacreategrn_disposal_rebuild[".allSearchFields"][] = "Brand";
	$tdatacreategrn_disposal_rebuild[".allSearchFields"][] = "Description";
	$tdatacreategrn_disposal_rebuild[".allSearchFields"][] = "Supplier";
	$tdatacreategrn_disposal_rebuild[".allSearchFields"][] = "UnitPrice";
	$tdatacreategrn_disposal_rebuild[".allSearchFields"][] = "Cost";
	$tdatacreategrn_disposal_rebuild[".allSearchFields"][] = "CurrentStock";
	$tdatacreategrn_disposal_rebuild[".allSearchFields"][] = "EnteredBy";
	$tdatacreategrn_disposal_rebuild[".allSearchFields"][] = "SystemDate";
	

$tdatacreategrn_disposal_rebuild[".googleLikeFields"] = array();
$tdatacreategrn_disposal_rebuild[".googleLikeFields"][] = "ID";
$tdatacreategrn_disposal_rebuild[".googleLikeFields"][] = "ItemCode";
$tdatacreategrn_disposal_rebuild[".googleLikeFields"][] = "Brand";
$tdatacreategrn_disposal_rebuild[".googleLikeFields"][] = "Description";
$tdatacreategrn_disposal_rebuild[".googleLikeFields"][] = "Supplier";
$tdatacreategrn_disposal_rebuild[".googleLikeFields"][] = "Quantity";
$tdatacreategrn_disposal_rebuild[".googleLikeFields"][] = "RemovedFrom";
$tdatacreategrn_disposal_rebuild[".googleLikeFields"][] = "SystemDate";
$tdatacreategrn_disposal_rebuild[".googleLikeFields"][] = "GRNDate";
$tdatacreategrn_disposal_rebuild[".googleLikeFields"][] = "EnteredBy";
$tdatacreategrn_disposal_rebuild[".googleLikeFields"][] = "ApprovedBy";
$tdatacreategrn_disposal_rebuild[".googleLikeFields"][] = "UnitPrice";
$tdatacreategrn_disposal_rebuild[".googleLikeFields"][] = "Status";
$tdatacreategrn_disposal_rebuild[".googleLikeFields"][] = "RefNumber";
$tdatacreategrn_disposal_rebuild[".googleLikeFields"][] = "CurrentStock";
$tdatacreategrn_disposal_rebuild[".googleLikeFields"][] = "Fleet";
$tdatacreategrn_disposal_rebuild[".googleLikeFields"][] = "PriceLink";
$tdatacreategrn_disposal_rebuild[".googleLikeFields"][] = "Cost";


$tdatacreategrn_disposal_rebuild[".advSearchFields"] = array();
$tdatacreategrn_disposal_rebuild[".advSearchFields"][] = "Status";
$tdatacreategrn_disposal_rebuild[".advSearchFields"][] = "Fleet";
$tdatacreategrn_disposal_rebuild[".advSearchFields"][] = "GRNDate";
$tdatacreategrn_disposal_rebuild[".advSearchFields"][] = "ItemCode";
$tdatacreategrn_disposal_rebuild[".advSearchFields"][] = "Quantity";
$tdatacreategrn_disposal_rebuild[".advSearchFields"][] = "Brand";
$tdatacreategrn_disposal_rebuild[".advSearchFields"][] = "Description";
$tdatacreategrn_disposal_rebuild[".advSearchFields"][] = "Supplier";
$tdatacreategrn_disposal_rebuild[".advSearchFields"][] = "UnitPrice";
$tdatacreategrn_disposal_rebuild[".advSearchFields"][] = "Cost";
$tdatacreategrn_disposal_rebuild[".advSearchFields"][] = "CurrentStock";
$tdatacreategrn_disposal_rebuild[".advSearchFields"][] = "EnteredBy";
$tdatacreategrn_disposal_rebuild[".advSearchFields"][] = "SystemDate";

$tdatacreategrn_disposal_rebuild[".tableType"] = "list";

$tdatacreategrn_disposal_rebuild[".printerPageOrientation"] = 0;
$tdatacreategrn_disposal_rebuild[".nPrinterPageScale"] = 100;

$tdatacreategrn_disposal_rebuild[".nPrinterSplitRecords"] = 40;

$tdatacreategrn_disposal_rebuild[".nPrinterPDFSplitRecords"] = 40;



$tdatacreategrn_disposal_rebuild[".geocodingEnabled"] = false;





$tdatacreategrn_disposal_rebuild[".listGridLayout"] = 3;


$tdatacreategrn_disposal_rebuild[".isResizeColumns"] = true;



// view page pdf
$tdatacreategrn_disposal_rebuild[".isViewPagePDF"] = true;
$tdatacreategrn_disposal_rebuild[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatacreategrn_disposal_rebuild[".isPrinterPagePDF"] = true;
$tdatacreategrn_disposal_rebuild[".nPrinterPagePDFScale"] = 100;

$tdatacreategrn_disposal_rebuild[".totalsFields"] = array();
$tdatacreategrn_disposal_rebuild[".totalsFields"][] = array(
	"fName" => "Cost",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatacreategrn_disposal_rebuild[".pageSize"] = 20;

$tdatacreategrn_disposal_rebuild[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY CurrentStock DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacreategrn_disposal_rebuild[".strOrderBy"] = $tstrOrderBy;

$tdatacreategrn_disposal_rebuild[".orderindexes"] = array();
$tdatacreategrn_disposal_rebuild[".orderindexes"][] = array(15, (0 ? "ASC" : "DESC"), "CurrentStock");

$tdatacreategrn_disposal_rebuild[".sqlHead"] = "SELECT ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  SUM(CurrentStock) AS CurrentStock,  Fleet,  PriceLink,  Quantity*UnitPrice*-1 AS Cost";
$tdatacreategrn_disposal_rebuild[".sqlFrom"] = "FROM creategrn";
$tdatacreategrn_disposal_rebuild[".sqlWhereExpr"] = "Status =\"Rebuild Disposal\"";
$tdatacreategrn_disposal_rebuild[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatacreategrn_disposal_rebuild[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacreategrn_disposal_rebuild[".arrGroupsPerPage"] = $arrGPP;

$tdatacreategrn_disposal_rebuild[".highlightSearchResults"] = true;

$tableKeyscreategrn_disposal_rebuild = array();
$tableKeyscreategrn_disposal_rebuild[] = "ID";
$tdatacreategrn_disposal_rebuild[".Keys"] = $tableKeyscreategrn_disposal_rebuild;

$tdatacreategrn_disposal_rebuild[".listFields"] = array();
$tdatacreategrn_disposal_rebuild[".listFields"][] = "ID";
$tdatacreategrn_disposal_rebuild[".listFields"][] = "Status";
$tdatacreategrn_disposal_rebuild[".listFields"][] = "Fleet";
$tdatacreategrn_disposal_rebuild[".listFields"][] = "GRNDate";
$tdatacreategrn_disposal_rebuild[".listFields"][] = "ItemCode";
$tdatacreategrn_disposal_rebuild[".listFields"][] = "Brand";
$tdatacreategrn_disposal_rebuild[".listFields"][] = "Description";
$tdatacreategrn_disposal_rebuild[".listFields"][] = "Supplier";
$tdatacreategrn_disposal_rebuild[".listFields"][] = "Quantity";
$tdatacreategrn_disposal_rebuild[".listFields"][] = "UnitPrice";
$tdatacreategrn_disposal_rebuild[".listFields"][] = "Cost";
$tdatacreategrn_disposal_rebuild[".listFields"][] = "EnteredBy";

$tdatacreategrn_disposal_rebuild[".hideMobileList"] = array();


$tdatacreategrn_disposal_rebuild[".viewFields"] = array();
$tdatacreategrn_disposal_rebuild[".viewFields"][] = "ID";
$tdatacreategrn_disposal_rebuild[".viewFields"][] = "Status";
$tdatacreategrn_disposal_rebuild[".viewFields"][] = "Fleet";
$tdatacreategrn_disposal_rebuild[".viewFields"][] = "GRNDate";
$tdatacreategrn_disposal_rebuild[".viewFields"][] = "ItemCode";
$tdatacreategrn_disposal_rebuild[".viewFields"][] = "CurrentStock";
$tdatacreategrn_disposal_rebuild[".viewFields"][] = "Quantity";
$tdatacreategrn_disposal_rebuild[".viewFields"][] = "Brand";
$tdatacreategrn_disposal_rebuild[".viewFields"][] = "Description";
$tdatacreategrn_disposal_rebuild[".viewFields"][] = "Supplier";
$tdatacreategrn_disposal_rebuild[".viewFields"][] = "UnitPrice";
$tdatacreategrn_disposal_rebuild[".viewFields"][] = "Cost";
$tdatacreategrn_disposal_rebuild[".viewFields"][] = "SystemDate";
$tdatacreategrn_disposal_rebuild[".viewFields"][] = "EnteredBy";
$tdatacreategrn_disposal_rebuild[".viewFields"][] = "ApprovedBy";

$tdatacreategrn_disposal_rebuild[".addFields"] = array();
$tdatacreategrn_disposal_rebuild[".addFields"][] = "Status";
$tdatacreategrn_disposal_rebuild[".addFields"][] = "Fleet";
$tdatacreategrn_disposal_rebuild[".addFields"][] = "GRNDate";
$tdatacreategrn_disposal_rebuild[".addFields"][] = "ItemCode";
$tdatacreategrn_disposal_rebuild[".addFields"][] = "Quantity";
$tdatacreategrn_disposal_rebuild[".addFields"][] = "UnitPrice";
$tdatacreategrn_disposal_rebuild[".addFields"][] = "Brand";
$tdatacreategrn_disposal_rebuild[".addFields"][] = "Description";
$tdatacreategrn_disposal_rebuild[".addFields"][] = "Supplier";
$tdatacreategrn_disposal_rebuild[".addFields"][] = "Cost";
$tdatacreategrn_disposal_rebuild[".addFields"][] = "EnteredBy";
$tdatacreategrn_disposal_rebuild[".addFields"][] = "CurrentStock";
$tdatacreategrn_disposal_rebuild[".addFields"][] = "SystemDate";

$tdatacreategrn_disposal_rebuild[".masterListFields"] = array();
$tdatacreategrn_disposal_rebuild[".masterListFields"][] = "ID";
$tdatacreategrn_disposal_rebuild[".masterListFields"][] = "Status";
$tdatacreategrn_disposal_rebuild[".masterListFields"][] = "Fleet";
$tdatacreategrn_disposal_rebuild[".masterListFields"][] = "RemovedFrom";
$tdatacreategrn_disposal_rebuild[".masterListFields"][] = "RefNumber";
$tdatacreategrn_disposal_rebuild[".masterListFields"][] = "GRNDate";
$tdatacreategrn_disposal_rebuild[".masterListFields"][] = "ItemCode";
$tdatacreategrn_disposal_rebuild[".masterListFields"][] = "Quantity";
$tdatacreategrn_disposal_rebuild[".masterListFields"][] = "PriceLink";
$tdatacreategrn_disposal_rebuild[".masterListFields"][] = "Brand";
$tdatacreategrn_disposal_rebuild[".masterListFields"][] = "Description";
$tdatacreategrn_disposal_rebuild[".masterListFields"][] = "Supplier";
$tdatacreategrn_disposal_rebuild[".masterListFields"][] = "UnitPrice";
$tdatacreategrn_disposal_rebuild[".masterListFields"][] = "Cost";
$tdatacreategrn_disposal_rebuild[".masterListFields"][] = "ApprovedBy";
$tdatacreategrn_disposal_rebuild[".masterListFields"][] = "EnteredBy";
$tdatacreategrn_disposal_rebuild[".masterListFields"][] = "CurrentStock";
$tdatacreategrn_disposal_rebuild[".masterListFields"][] = "SystemDate";

$tdatacreategrn_disposal_rebuild[".inlineAddFields"] = array();

$tdatacreategrn_disposal_rebuild[".editFields"] = array();
$tdatacreategrn_disposal_rebuild[".editFields"][] = "Status";
$tdatacreategrn_disposal_rebuild[".editFields"][] = "Fleet";
$tdatacreategrn_disposal_rebuild[".editFields"][] = "GRNDate";
$tdatacreategrn_disposal_rebuild[".editFields"][] = "ItemCode";
$tdatacreategrn_disposal_rebuild[".editFields"][] = "Quantity";
$tdatacreategrn_disposal_rebuild[".editFields"][] = "Brand";
$tdatacreategrn_disposal_rebuild[".editFields"][] = "Description";
$tdatacreategrn_disposal_rebuild[".editFields"][] = "Supplier";
$tdatacreategrn_disposal_rebuild[".editFields"][] = "UnitPrice";
$tdatacreategrn_disposal_rebuild[".editFields"][] = "Cost";
$tdatacreategrn_disposal_rebuild[".editFields"][] = "CurrentStock";
$tdatacreategrn_disposal_rebuild[".editFields"][] = "SystemDate";
$tdatacreategrn_disposal_rebuild[".editFields"][] = "EnteredBy";
$tdatacreategrn_disposal_rebuild[".editFields"][] = "ApprovedBy";

$tdatacreategrn_disposal_rebuild[".inlineEditFields"] = array();

$tdatacreategrn_disposal_rebuild[".updateSelectedFields"] = array();
$tdatacreategrn_disposal_rebuild[".updateSelectedFields"][] = "Status";
$tdatacreategrn_disposal_rebuild[".updateSelectedFields"][] = "Fleet";
$tdatacreategrn_disposal_rebuild[".updateSelectedFields"][] = "GRNDate";
$tdatacreategrn_disposal_rebuild[".updateSelectedFields"][] = "ItemCode";
$tdatacreategrn_disposal_rebuild[".updateSelectedFields"][] = "Quantity";
$tdatacreategrn_disposal_rebuild[".updateSelectedFields"][] = "Brand";
$tdatacreategrn_disposal_rebuild[".updateSelectedFields"][] = "Description";
$tdatacreategrn_disposal_rebuild[".updateSelectedFields"][] = "Supplier";
$tdatacreategrn_disposal_rebuild[".updateSelectedFields"][] = "UnitPrice";
$tdatacreategrn_disposal_rebuild[".updateSelectedFields"][] = "Cost";
$tdatacreategrn_disposal_rebuild[".updateSelectedFields"][] = "CurrentStock";
$tdatacreategrn_disposal_rebuild[".updateSelectedFields"][] = "SystemDate";
$tdatacreategrn_disposal_rebuild[".updateSelectedFields"][] = "EnteredBy";
$tdatacreategrn_disposal_rebuild[".updateSelectedFields"][] = "ApprovedBy";


$tdatacreategrn_disposal_rebuild[".exportFields"] = array();
$tdatacreategrn_disposal_rebuild[".exportFields"][] = "ID";
$tdatacreategrn_disposal_rebuild[".exportFields"][] = "Status";
$tdatacreategrn_disposal_rebuild[".exportFields"][] = "Fleet";
$tdatacreategrn_disposal_rebuild[".exportFields"][] = "GRNDate";
$tdatacreategrn_disposal_rebuild[".exportFields"][] = "ItemCode";
$tdatacreategrn_disposal_rebuild[".exportFields"][] = "Quantity";
$tdatacreategrn_disposal_rebuild[".exportFields"][] = "Brand";
$tdatacreategrn_disposal_rebuild[".exportFields"][] = "Description";
$tdatacreategrn_disposal_rebuild[".exportFields"][] = "Supplier";
$tdatacreategrn_disposal_rebuild[".exportFields"][] = "UnitPrice";
$tdatacreategrn_disposal_rebuild[".exportFields"][] = "ApprovedBy";
$tdatacreategrn_disposal_rebuild[".exportFields"][] = "Cost";
$tdatacreategrn_disposal_rebuild[".exportFields"][] = "CurrentStock";
$tdatacreategrn_disposal_rebuild[".exportFields"][] = "EnteredBy";
$tdatacreategrn_disposal_rebuild[".exportFields"][] = "SystemDate";

$tdatacreategrn_disposal_rebuild[".importFields"] = array();
$tdatacreategrn_disposal_rebuild[".importFields"][] = "ID";
$tdatacreategrn_disposal_rebuild[".importFields"][] = "ItemCode";
$tdatacreategrn_disposal_rebuild[".importFields"][] = "Brand";
$tdatacreategrn_disposal_rebuild[".importFields"][] = "Description";
$tdatacreategrn_disposal_rebuild[".importFields"][] = "Supplier";
$tdatacreategrn_disposal_rebuild[".importFields"][] = "Quantity";
$tdatacreategrn_disposal_rebuild[".importFields"][] = "SystemDate";
$tdatacreategrn_disposal_rebuild[".importFields"][] = "GRNDate";
$tdatacreategrn_disposal_rebuild[".importFields"][] = "EnteredBy";
$tdatacreategrn_disposal_rebuild[".importFields"][] = "ApprovedBy";
$tdatacreategrn_disposal_rebuild[".importFields"][] = "UnitPrice";
$tdatacreategrn_disposal_rebuild[".importFields"][] = "Status";
$tdatacreategrn_disposal_rebuild[".importFields"][] = "CurrentStock";
$tdatacreategrn_disposal_rebuild[".importFields"][] = "Fleet";
$tdatacreategrn_disposal_rebuild[".importFields"][] = "Cost";

$tdatacreategrn_disposal_rebuild[".printFields"] = array();
$tdatacreategrn_disposal_rebuild[".printFields"][] = "ID";
$tdatacreategrn_disposal_rebuild[".printFields"][] = "Status";
$tdatacreategrn_disposal_rebuild[".printFields"][] = "Fleet";
$tdatacreategrn_disposal_rebuild[".printFields"][] = "GRNDate";
$tdatacreategrn_disposal_rebuild[".printFields"][] = "ItemCode";
$tdatacreategrn_disposal_rebuild[".printFields"][] = "Quantity";
$tdatacreategrn_disposal_rebuild[".printFields"][] = "Brand";
$tdatacreategrn_disposal_rebuild[".printFields"][] = "Description";
$tdatacreategrn_disposal_rebuild[".printFields"][] = "Supplier";
$tdatacreategrn_disposal_rebuild[".printFields"][] = "UnitPrice";
$tdatacreategrn_disposal_rebuild[".printFields"][] = "ApprovedBy";
$tdatacreategrn_disposal_rebuild[".printFields"][] = "Cost";
$tdatacreategrn_disposal_rebuild[".printFields"][] = "EnteredBy";
$tdatacreategrn_disposal_rebuild[".printFields"][] = "CurrentStock";
$tdatacreategrn_disposal_rebuild[".printFields"][] = "SystemDate";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal_rebuild","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatacreategrn_disposal_rebuild["ID"] = $fdata;
//	ItemCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemCode";
	$fdata["GoodName"] = "ItemCode";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal_rebuild","ItemCode");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ItemCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ItemCode";

	
	
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
	$edata["LookupTable"] = "inventorymaster-qty";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Brand", 'lookupF'=>"Brand");
	$edata["autoCompleteFields"][] = array('masterF'=>"Description", 'lookupF'=>"Description");
	$edata["autoCompleteFields"][] = array('masterF'=>"Supplier", 'lookupF'=>"Supplier");
	$edata["autoCompleteFields"][] = array('masterF'=>"CurrentStock", 'lookupF'=>"SUM(Quantity)");
	$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "ItemID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ItemID";

	
	$edata["LookupOrderBy"] = "ItemID";

	
	
	
	

	
	
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




	$tdatacreategrn_disposal_rebuild["ItemCode"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal_rebuild","Brand");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Brand";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Brand";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_disposal_rebuild["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal_rebuild","Description");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Description";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_disposal_rebuild["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal_rebuild","Supplier");
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




	$tdatacreategrn_disposal_rebuild["Supplier"] = $fdata;
//	Quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Quantity";
	$fdata["GoodName"] = "Quantity";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal_rebuild","Quantity");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Quantity";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Quantity";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_disposal_rebuild["Quantity"] = $fdata;
//	RemovedFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RemovedFrom";
	$fdata["GoodName"] = "RemovedFrom";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal_rebuild","RemovedFrom");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "RemovedFrom";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RemovedFrom";

	
	
			
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








	$tdatacreategrn_disposal_rebuild["RemovedFrom"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal_rebuild","SystemDate");
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




	$tdatacreategrn_disposal_rebuild["SystemDate"] = $fdata;
//	GRNDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "GRNDate";
	$fdata["GoodName"] = "GRNDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal_rebuild","GRNDate");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "GRNDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GRNDate";

	
	
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




	$tdatacreategrn_disposal_rebuild["GRNDate"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal_rebuild","EnteredBy");
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




	$tdatacreategrn_disposal_rebuild["EnteredBy"] = $fdata;
//	ApprovedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ApprovedBy";
	$fdata["GoodName"] = "ApprovedBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal_rebuild","ApprovedBy");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ApprovedBy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ApprovedBy";

	
	
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








	$tdatacreategrn_disposal_rebuild["ApprovedBy"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal_rebuild","UnitPrice");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UnitPrice";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UnitPrice";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_disposal_rebuild["UnitPrice"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal_rebuild","Status");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status";

	
	
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




	$tdatacreategrn_disposal_rebuild["Status"] = $fdata;
//	RefNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RefNumber";
	$fdata["GoodName"] = "RefNumber";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal_rebuild","RefNumber");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "RefNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RefNumber";

	
	
			
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








	$tdatacreategrn_disposal_rebuild["RefNumber"] = $fdata;
//	CurrentStock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "CurrentStock";
	$fdata["GoodName"] = "CurrentStock";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal_rebuild","CurrentStock");
	$fdata["FieldType"] = 5;

	
	
	
										
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CurrentStock";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(CurrentStock)";

	
	
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




	$tdatacreategrn_disposal_rebuild["CurrentStock"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal_rebuild","Fleet");
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
	$edata["DependentLookups"][] = "RemovedFrom";

	
	
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




	$tdatacreategrn_disposal_rebuild["Fleet"] = $fdata;
//	PriceLink
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "PriceLink";
	$fdata["GoodName"] = "PriceLink";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal_rebuild","PriceLink");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "PriceLink";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PriceLink";

	
	
			
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
	$edata["LookupTable"] = "inventorymaster-pricing";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "ItemID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ItemID";

	
	$edata["LookupOrderBy"] = "ItemID";

		$edata["LookupDesc"] = true;

	
	
	

	
	
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








	$tdatacreategrn_disposal_rebuild["PriceLink"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal_rebuild","Cost");
	$fdata["FieldType"] = 5;

	
	
	
										
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
	$fdata["FullName"] = "Quantity*UnitPrice*-1";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_disposal_rebuild["Cost"] = $fdata;


$tables_data["creategrn-disposal-rebuild"]=&$tdatacreategrn_disposal_rebuild;
$field_labels["creategrn_disposal_rebuild"] = &$fieldLabelscreategrn_disposal_rebuild;
$fieldToolTips["creategrn_disposal_rebuild"] = &$fieldToolTipscreategrn_disposal_rebuild;
$page_titles["creategrn_disposal_rebuild"] = &$pageTitlescreategrn_disposal_rebuild;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["creategrn-disposal-rebuild"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["creategrn-disposal-rebuild"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_creategrn_disposal_rebuild()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  SUM(CurrentStock) AS CurrentStock,  Fleet,  PriceLink,  Quantity*UnitPrice*-1 AS Cost";
$proto0["m_strFrom"] = "FROM creategrn";
$proto0["m_strWhere"] = "Status =\"Rebuild Disposal\"";
$proto0["m_strOrderBy"] = "ORDER BY CurrentStock DESC";
$proto0["m_strTail"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "Status =\"Rebuild Disposal\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=\"Rebuild Disposal\"";
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
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "creategrn-disposal-rebuild";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto8["m_sql"] = "ItemCode";
$proto8["m_srcTableName"] = "creategrn-disposal-rebuild";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto10["m_sql"] = "Brand";
$proto10["m_srcTableName"] = "creategrn-disposal-rebuild";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto12["m_sql"] = "Description";
$proto12["m_srcTableName"] = "creategrn-disposal-rebuild";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto14["m_sql"] = "Supplier";
$proto14["m_srcTableName"] = "creategrn-disposal-rebuild";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto16["m_sql"] = "Quantity";
$proto16["m_srcTableName"] = "creategrn-disposal-rebuild";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto18["m_sql"] = "RemovedFrom";
$proto18["m_srcTableName"] = "creategrn-disposal-rebuild";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto20["m_sql"] = "SystemDate";
$proto20["m_srcTableName"] = "creategrn-disposal-rebuild";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto22["m_sql"] = "GRNDate";
$proto22["m_srcTableName"] = "creategrn-disposal-rebuild";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto24["m_sql"] = "EnteredBy";
$proto24["m_srcTableName"] = "creategrn-disposal-rebuild";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto26["m_sql"] = "ApprovedBy";
$proto26["m_srcTableName"] = "creategrn-disposal-rebuild";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto28["m_sql"] = "UnitPrice";
$proto28["m_srcTableName"] = "creategrn-disposal-rebuild";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto30["m_sql"] = "Status";
$proto30["m_srcTableName"] = "creategrn-disposal-rebuild";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto32["m_sql"] = "RefNumber";
$proto32["m_srcTableName"] = "creategrn-disposal-rebuild";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$proto35=array();
$proto35["m_functiontype"] = "SQLF_SUM";
$proto35["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "CurrentStock",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto35["m_arguments"][]=$obj;
$proto35["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto35);

$proto34["m_sql"] = "SUM(CurrentStock)";
$proto34["m_srcTableName"] = "creategrn-disposal-rebuild";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "CurrentStock";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto37["m_sql"] = "Fleet";
$proto37["m_srcTableName"] = "creategrn-disposal-rebuild";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "PriceLink",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto39["m_sql"] = "PriceLink";
$proto39["m_srcTableName"] = "creategrn-disposal-rebuild";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "Quantity*UnitPrice*-1"
));

$proto41["m_sql"] = "Quantity*UnitPrice*-1";
$proto41["m_srcTableName"] = "creategrn-disposal-rebuild";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "Cost";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto43=array();
$proto43["m_link"] = "SQLL_MAIN";
			$proto44=array();
$proto44["m_strName"] = "creategrn";
$proto44["m_srcTableName"] = "creategrn-disposal-rebuild";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "ID";
$proto44["m_columns"][] = "ItemCode";
$proto44["m_columns"][] = "Brand";
$proto44["m_columns"][] = "Description";
$proto44["m_columns"][] = "Supplier";
$proto44["m_columns"][] = "Quantity";
$proto44["m_columns"][] = "RemovedFrom";
$proto44["m_columns"][] = "SystemDate";
$proto44["m_columns"][] = "GRNDate";
$proto44["m_columns"][] = "EnteredBy";
$proto44["m_columns"][] = "ApprovedBy";
$proto44["m_columns"][] = "UnitPrice";
$proto44["m_columns"][] = "Status";
$proto44["m_columns"][] = "RefNumber";
$proto44["m_columns"][] = "CurrentStock";
$proto44["m_columns"][] = "Fleet";
$proto44["m_columns"][] = "PriceLink";
$proto44["m_columns"][] = "Cost";
$proto44["m_columns"][] = "Remarks";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_sql"] = "creategrn";
$proto43["m_alias"] = "";
$proto43["m_srcTableName"] = "creategrn-disposal-rebuild";
$proto45=array();
$proto45["m_sql"] = "";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto47=array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto47["m_column"]=$obj;
$obj = new SQLGroupByItem($proto47);

$proto0["m_groupby"][]=$obj;
												$proto49=array();
						$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto49["m_column"]=$obj;
$obj = new SQLGroupByItem($proto49);

$proto0["m_groupby"][]=$obj;
												$proto51=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto51["m_column"]=$obj;
$obj = new SQLGroupByItem($proto51);

$proto0["m_groupby"][]=$obj;
												$proto53=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto53["m_column"]=$obj;
$obj = new SQLGroupByItem($proto53);

$proto0["m_groupby"][]=$obj;
												$proto55=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto55["m_column"]=$obj;
$obj = new SQLGroupByItem($proto55);

$proto0["m_groupby"][]=$obj;
												$proto57=array();
						$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto57["m_column"]=$obj;
$obj = new SQLGroupByItem($proto57);

$proto0["m_groupby"][]=$obj;
												$proto59=array();
						$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto59["m_column"]=$obj;
$obj = new SQLGroupByItem($proto59);

$proto0["m_groupby"][]=$obj;
												$proto61=array();
						$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto61["m_column"]=$obj;
$obj = new SQLGroupByItem($proto61);

$proto0["m_groupby"][]=$obj;
												$proto63=array();
						$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto63["m_column"]=$obj;
$obj = new SQLGroupByItem($proto63);

$proto0["m_groupby"][]=$obj;
												$proto65=array();
						$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto65["m_column"]=$obj;
$obj = new SQLGroupByItem($proto65);

$proto0["m_groupby"][]=$obj;
												$proto67=array();
						$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto67["m_column"]=$obj;
$obj = new SQLGroupByItem($proto67);

$proto0["m_groupby"][]=$obj;
												$proto69=array();
						$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto69["m_column"]=$obj;
$obj = new SQLGroupByItem($proto69);

$proto0["m_groupby"][]=$obj;
												$proto71=array();
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto71["m_column"]=$obj;
$obj = new SQLGroupByItem($proto71);

$proto0["m_groupby"][]=$obj;
												$proto73=array();
						$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto73["m_column"]=$obj;
$obj = new SQLGroupByItem($proto73);

$proto0["m_groupby"][]=$obj;
												$proto75=array();
						$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto75["m_column"]=$obj;
$obj = new SQLGroupByItem($proto75);

$proto0["m_groupby"][]=$obj;
												$proto77=array();
						$obj = new SQLField(array(
	"m_strName" => "PriceLink",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto77["m_column"]=$obj;
$obj = new SQLGroupByItem($proto77);

$proto0["m_groupby"][]=$obj;
												$proto79=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Quantity*UnitPrice*-1"
));

$proto79["m_column"]=$obj;
$obj = new SQLGroupByItem($proto79);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto81=array();
						$obj = new SQLField(array(
	"m_strName" => "CurrentStock",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal-rebuild"
));

$proto81["m_column"]=$obj;
$proto81["m_bAsc"] = 0;
$proto81["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto81);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="creategrn-disposal-rebuild";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_creategrn_disposal_rebuild = createSqlQuery_creategrn_disposal_rebuild();


	
					
;

																		

$tdatacreategrn_disposal_rebuild[".sqlquery"] = $queryData_creategrn_disposal_rebuild;

include_once(getabspath("include/creategrn_disposal_rebuild_events.php"));
$tableEvents["creategrn-disposal-rebuild"] = new eventclass_creategrn_disposal_rebuild;
$tdatacreategrn_disposal_rebuild[".hasEvents"] = true;

?>