<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacreategrn_issue_rebuilt = array();
	$tdatacreategrn_issue_rebuilt[".truncateText"] = true;
	$tdatacreategrn_issue_rebuilt[".NumberOfChars"] = 80;
	$tdatacreategrn_issue_rebuilt[".ShortName"] = "creategrn_issue_rebuilt";
	$tdatacreategrn_issue_rebuilt[".OwnerID"] = "";
	$tdatacreategrn_issue_rebuilt[".OriginalTable"] = "creategrn";

//	field labels
$fieldLabelscreategrn_issue_rebuilt = array();
$fieldToolTipscreategrn_issue_rebuilt = array();
$pageTitlescreategrn_issue_rebuilt = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscreategrn_issue_rebuilt["English"] = array();
	$fieldToolTipscreategrn_issue_rebuilt["English"] = array();
	$pageTitlescreategrn_issue_rebuilt["English"] = array();
	$fieldLabelscreategrn_issue_rebuilt["English"]["ItemCode"] = "Item Code";
	$fieldToolTipscreategrn_issue_rebuilt["English"]["ItemCode"] = "";
	$fieldLabelscreategrn_issue_rebuilt["English"]["Brand"] = "Brand";
	$fieldToolTipscreategrn_issue_rebuilt["English"]["Brand"] = "";
	$fieldLabelscreategrn_issue_rebuilt["English"]["Description"] = "Descr.";
	$fieldToolTipscreategrn_issue_rebuilt["English"]["Description"] = "";
	$fieldLabelscreategrn_issue_rebuilt["English"]["Supplier"] = "Supplier";
	$fieldToolTipscreategrn_issue_rebuilt["English"]["Supplier"] = "";
	$fieldLabelscreategrn_issue_rebuilt["English"]["Quantity"] = "Qty";
	$fieldToolTipscreategrn_issue_rebuilt["English"]["Quantity"] = "";
	$fieldLabelscreategrn_issue_rebuilt["English"]["RemovedFrom"] = "Vehicle";
	$fieldToolTipscreategrn_issue_rebuilt["English"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_issue_rebuilt["English"]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn_issue_rebuilt["English"]["SystemDate"] = "";
	$fieldLabelscreategrn_issue_rebuilt["English"]["EnteredBy"] = "Entered";
	$fieldToolTipscreategrn_issue_rebuilt["English"]["EnteredBy"] = "";
	$fieldLabelscreategrn_issue_rebuilt["English"]["ApprovedBy"] = "Edited By";
	$fieldToolTipscreategrn_issue_rebuilt["English"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_issue_rebuilt["English"]["Status"] = "Type";
	$fieldToolTipscreategrn_issue_rebuilt["English"]["Status"] = "";
	$fieldLabelscreategrn_issue_rebuilt["English"]["ID"] = "ID";
	$fieldToolTipscreategrn_issue_rebuilt["English"]["ID"] = "";
	$fieldLabelscreategrn_issue_rebuilt["English"]["RefNumber"] = "Ref No.";
	$fieldToolTipscreategrn_issue_rebuilt["English"]["RefNumber"] = "";
	$fieldLabelscreategrn_issue_rebuilt["English"]["Fleet"] = "Fleet";
	$fieldToolTipscreategrn_issue_rebuilt["English"]["Fleet"] = "";
	$fieldLabelscreategrn_issue_rebuilt["English"]["GRNDate"] = "Date";
	$fieldToolTipscreategrn_issue_rebuilt["English"]["GRNDate"] = "";
	$fieldLabelscreategrn_issue_rebuilt["English"]["UnitPrice"] = "Rate";
	$fieldToolTipscreategrn_issue_rebuilt["English"]["UnitPrice"] = "";
	$fieldLabelscreategrn_issue_rebuilt["English"]["CurrentStock"] = "In-Stock";
	$fieldToolTipscreategrn_issue_rebuilt["English"]["CurrentStock"] = "";
	$fieldLabelscreategrn_issue_rebuilt["English"]["PriceLink"] = "Cost Code";
	$fieldToolTipscreategrn_issue_rebuilt["English"]["PriceLink"] = "";
	$fieldLabelscreategrn_issue_rebuilt["English"]["Cost"] = "Cost";
	$fieldToolTipscreategrn_issue_rebuilt["English"]["Cost"] = "";
	$fieldLabelscreategrn_issue_rebuilt["English"]["Remarks"] = "Remarks";
	$fieldToolTipscreategrn_issue_rebuilt["English"]["Remarks"] = "";
	if (count($fieldToolTipscreategrn_issue_rebuilt["English"]))
		$tdatacreategrn_issue_rebuilt[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelscreategrn_issue_rebuilt["Afrikaans"] = array();
	$fieldToolTipscreategrn_issue_rebuilt["Afrikaans"] = array();
	$pageTitlescreategrn_issue_rebuilt["Afrikaans"] = array();
	$fieldLabelscreategrn_issue_rebuilt["Afrikaans"]["ID"] = "ID";
	$fieldToolTipscreategrn_issue_rebuilt["Afrikaans"]["ID"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Afrikaans"]["ItemCode"] = "itemkode";
	$fieldToolTipscreategrn_issue_rebuilt["Afrikaans"]["ItemCode"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Afrikaans"]["Brand"] = "Brand";
	$fieldToolTipscreategrn_issue_rebuilt["Afrikaans"]["Brand"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Afrikaans"]["Description"] = "beskrywing";
	$fieldToolTipscreategrn_issue_rebuilt["Afrikaans"]["Description"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Afrikaans"]["Supplier"] = "verskaffer";
	$fieldToolTipscreategrn_issue_rebuilt["Afrikaans"]["Supplier"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Afrikaans"]["Quantity"] = "hoeveelheid";
	$fieldToolTipscreategrn_issue_rebuilt["Afrikaans"]["Quantity"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Afrikaans"]["RemovedFrom"] = "voertuig";
	$fieldToolTipscreategrn_issue_rebuilt["Afrikaans"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Afrikaans"]["SystemDate"] = "stelsel Datum";
	$fieldToolTipscreategrn_issue_rebuilt["Afrikaans"]["SystemDate"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Afrikaans"]["GRNDate"] = "datum";
	$fieldToolTipscreategrn_issue_rebuilt["Afrikaans"]["GRNDate"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Afrikaans"]["EnteredBy"] = "ingevoer";
	$fieldToolTipscreategrn_issue_rebuilt["Afrikaans"]["EnteredBy"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Afrikaans"]["ApprovedBy"] = "geredigeer deur";
	$fieldToolTipscreategrn_issue_rebuilt["Afrikaans"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Afrikaans"]["UnitPrice"] = "Koers";
	$fieldToolTipscreategrn_issue_rebuilt["Afrikaans"]["UnitPrice"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Afrikaans"]["Status"] = "tipe";
	$fieldToolTipscreategrn_issue_rebuilt["Afrikaans"]["Status"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Afrikaans"]["RefNumber"] = "Verwysing No.";
	$fieldToolTipscreategrn_issue_rebuilt["Afrikaans"]["RefNumber"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Afrikaans"]["CurrentStock"] = "Huidige Stock";
	$fieldToolTipscreategrn_issue_rebuilt["Afrikaans"]["CurrentStock"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Afrikaans"]["Fleet"] = "vloot";
	$fieldToolTipscreategrn_issue_rebuilt["Afrikaans"]["Fleet"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Afrikaans"]["PriceLink"] = "koste Kode";
	$fieldToolTipscreategrn_issue_rebuilt["Afrikaans"]["PriceLink"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Afrikaans"]["Cost"] = "koste";
	$fieldToolTipscreategrn_issue_rebuilt["Afrikaans"]["Cost"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Afrikaans"]["Remarks"] = "opmerkings";
	$fieldToolTipscreategrn_issue_rebuilt["Afrikaans"]["Remarks"] = "";
	if (count($fieldToolTipscreategrn_issue_rebuilt["Afrikaans"]))
		$tdatacreategrn_issue_rebuilt[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelscreategrn_issue_rebuilt["Arabic"] = array();
	$fieldToolTipscreategrn_issue_rebuilt["Arabic"] = array();
	$pageTitlescreategrn_issue_rebuilt["Arabic"] = array();
	$fieldLabelscreategrn_issue_rebuilt["Arabic"]["ID"] = "???? ?????";
	$fieldToolTipscreategrn_issue_rebuilt["Arabic"]["ID"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Arabic"]["ItemCode"] = "??? ?????";
	$fieldToolTipscreategrn_issue_rebuilt["Arabic"]["ItemCode"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Arabic"]["Brand"] = "????? ??????";
	$fieldToolTipscreategrn_issue_rebuilt["Arabic"]["Brand"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Arabic"]["Description"] = "???";
	$fieldToolTipscreategrn_issue_rebuilt["Arabic"]["Description"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Arabic"]["Supplier"] = "??????";
	$fieldToolTipscreategrn_issue_rebuilt["Arabic"]["Supplier"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Arabic"]["Quantity"] = "????";
	$fieldToolTipscreategrn_issue_rebuilt["Arabic"]["Quantity"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Arabic"]["RemovedFrom"] = "?????";
	$fieldToolTipscreategrn_issue_rebuilt["Arabic"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Arabic"]["SystemDate"] = "????? ??????";
	$fieldToolTipscreategrn_issue_rebuilt["Arabic"]["SystemDate"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Arabic"]["GRNDate"] = "?????";
	$fieldToolTipscreategrn_issue_rebuilt["Arabic"]["GRNDate"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Arabic"]["EnteredBy"] = "???";
	$fieldToolTipscreategrn_issue_rebuilt["Arabic"]["EnteredBy"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Arabic"]["ApprovedBy"] = "???? ??????";
	$fieldToolTipscreategrn_issue_rebuilt["Arabic"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Arabic"]["UnitPrice"] = "????";
	$fieldToolTipscreategrn_issue_rebuilt["Arabic"]["UnitPrice"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Arabic"]["Status"] = "????";
	$fieldToolTipscreategrn_issue_rebuilt["Arabic"]["Status"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Arabic"]["RefNumber"] = "??? ??????.";
	$fieldToolTipscreategrn_issue_rebuilt["Arabic"]["RefNumber"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Arabic"]["CurrentStock"] = "??????? ??????";
	$fieldToolTipscreategrn_issue_rebuilt["Arabic"]["CurrentStock"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Arabic"]["Fleet"] = "?????";
	$fieldToolTipscreategrn_issue_rebuilt["Arabic"]["Fleet"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Arabic"]["PriceLink"] = "??? ???????";
	$fieldToolTipscreategrn_issue_rebuilt["Arabic"]["PriceLink"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Arabic"]["Cost"] = "????";
	$fieldToolTipscreategrn_issue_rebuilt["Arabic"]["Cost"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Arabic"]["Remarks"] = "???????";
	$fieldToolTipscreategrn_issue_rebuilt["Arabic"]["Remarks"] = "";
	if (count($fieldToolTipscreategrn_issue_rebuilt["Arabic"]))
		$tdatacreategrn_issue_rebuilt[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelscreategrn_issue_rebuilt["Chinese"] = array();
	$fieldToolTipscreategrn_issue_rebuilt["Chinese"] = array();
	$pageTitlescreategrn_issue_rebuilt["Chinese"] = array();
	$fieldLabelscreategrn_issue_rebuilt["Chinese"]["ID"] = "ID";
	$fieldToolTipscreategrn_issue_rebuilt["Chinese"]["ID"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Chinese"]["ItemCode"] = "????";
	$fieldToolTipscreategrn_issue_rebuilt["Chinese"]["ItemCode"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Chinese"]["Brand"] = "?";
	$fieldToolTipscreategrn_issue_rebuilt["Chinese"]["Brand"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Chinese"]["Description"] = "??";
	$fieldToolTipscreategrn_issue_rebuilt["Chinese"]["Description"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Chinese"]["Supplier"] = "???";
	$fieldToolTipscreategrn_issue_rebuilt["Chinese"]["Supplier"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Chinese"]["Quantity"] = "??";
	$fieldToolTipscreategrn_issue_rebuilt["Chinese"]["Quantity"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Chinese"]["RemovedFrom"] = "??";
	$fieldToolTipscreategrn_issue_rebuilt["Chinese"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Chinese"]["SystemDate"] = "????";
	$fieldToolTipscreategrn_issue_rebuilt["Chinese"]["SystemDate"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Chinese"]["GRNDate"] = "??";
	$fieldToolTipscreategrn_issue_rebuilt["Chinese"]["GRNDate"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Chinese"]["EnteredBy"] = "??";
	$fieldToolTipscreategrn_issue_rebuilt["Chinese"]["EnteredBy"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Chinese"]["ApprovedBy"] = "??";
	$fieldToolTipscreategrn_issue_rebuilt["Chinese"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Chinese"]["UnitPrice"] = "?";
	$fieldToolTipscreategrn_issue_rebuilt["Chinese"]["UnitPrice"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Chinese"]["Status"] = "??";
	$fieldToolTipscreategrn_issue_rebuilt["Chinese"]["Status"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Chinese"]["RefNumber"] = "?????";
	$fieldToolTipscreategrn_issue_rebuilt["Chinese"]["RefNumber"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Chinese"]["CurrentStock"] = "????";
	$fieldToolTipscreategrn_issue_rebuilt["Chinese"]["CurrentStock"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Chinese"]["Fleet"] = "??";
	$fieldToolTipscreategrn_issue_rebuilt["Chinese"]["Fleet"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Chinese"]["PriceLink"] = "????";
	$fieldToolTipscreategrn_issue_rebuilt["Chinese"]["PriceLink"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Chinese"]["Cost"] = "??";
	$fieldToolTipscreategrn_issue_rebuilt["Chinese"]["Cost"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Chinese"]["Remarks"] = "??";
	$fieldToolTipscreategrn_issue_rebuilt["Chinese"]["Remarks"] = "";
	if (count($fieldToolTipscreategrn_issue_rebuilt["Chinese"]))
		$tdatacreategrn_issue_rebuilt[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelscreategrn_issue_rebuilt["French"] = array();
	$fieldToolTipscreategrn_issue_rebuilt["French"] = array();
	$pageTitlescreategrn_issue_rebuilt["French"] = array();
	$fieldLabelscreategrn_issue_rebuilt["French"]["ID"] = "ID";
	$fieldToolTipscreategrn_issue_rebuilt["French"]["ID"] = "";
	$fieldLabelscreategrn_issue_rebuilt["French"]["ItemCode"] = "Code de l'article";
	$fieldToolTipscreategrn_issue_rebuilt["French"]["ItemCode"] = "";
	$fieldLabelscreategrn_issue_rebuilt["French"]["Brand"] = "Marque";
	$fieldToolTipscreategrn_issue_rebuilt["French"]["Brand"] = "";
	$fieldLabelscreategrn_issue_rebuilt["French"]["Description"] = "La description";
	$fieldToolTipscreategrn_issue_rebuilt["French"]["Description"] = "";
	$fieldLabelscreategrn_issue_rebuilt["French"]["Supplier"] = "Fournisseur";
	$fieldToolTipscreategrn_issue_rebuilt["French"]["Supplier"] = "";
	$fieldLabelscreategrn_issue_rebuilt["French"]["Quantity"] = "Quantité";
	$fieldToolTipscreategrn_issue_rebuilt["French"]["Quantity"] = "";
	$fieldLabelscreategrn_issue_rebuilt["French"]["RemovedFrom"] = "Véhicule";
	$fieldToolTipscreategrn_issue_rebuilt["French"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_issue_rebuilt["French"]["SystemDate"] = "Date du système";
	$fieldToolTipscreategrn_issue_rebuilt["French"]["SystemDate"] = "";
	$fieldLabelscreategrn_issue_rebuilt["French"]["GRNDate"] = "date";
	$fieldToolTipscreategrn_issue_rebuilt["French"]["GRNDate"] = "";
	$fieldLabelscreategrn_issue_rebuilt["French"]["EnteredBy"] = "Entré";
	$fieldToolTipscreategrn_issue_rebuilt["French"]["EnteredBy"] = "";
	$fieldLabelscreategrn_issue_rebuilt["French"]["ApprovedBy"] = "Édité par";
	$fieldToolTipscreategrn_issue_rebuilt["French"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_issue_rebuilt["French"]["UnitPrice"] = "Taux";
	$fieldToolTipscreategrn_issue_rebuilt["French"]["UnitPrice"] = "";
	$fieldLabelscreategrn_issue_rebuilt["French"]["Status"] = "Type";
	$fieldToolTipscreategrn_issue_rebuilt["French"]["Status"] = "";
	$fieldLabelscreategrn_issue_rebuilt["French"]["RefNumber"] = "Numéro de référence.";
	$fieldToolTipscreategrn_issue_rebuilt["French"]["RefNumber"] = "";
	$fieldLabelscreategrn_issue_rebuilt["French"]["CurrentStock"] = "Stock actuel";
	$fieldToolTipscreategrn_issue_rebuilt["French"]["CurrentStock"] = "";
	$fieldLabelscreategrn_issue_rebuilt["French"]["Fleet"] = "Flotte";
	$fieldToolTipscreategrn_issue_rebuilt["French"]["Fleet"] = "";
	$fieldLabelscreategrn_issue_rebuilt["French"]["PriceLink"] = "Code de Coût";
	$fieldToolTipscreategrn_issue_rebuilt["French"]["PriceLink"] = "";
	$fieldLabelscreategrn_issue_rebuilt["French"]["Cost"] = "Coût";
	$fieldToolTipscreategrn_issue_rebuilt["French"]["Cost"] = "";
	$fieldLabelscreategrn_issue_rebuilt["French"]["Remarks"] = "Remarques";
	$fieldToolTipscreategrn_issue_rebuilt["French"]["Remarks"] = "";
	if (count($fieldToolTipscreategrn_issue_rebuilt["French"]))
		$tdatacreategrn_issue_rebuilt[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelscreategrn_issue_rebuilt["German"] = array();
	$fieldToolTipscreategrn_issue_rebuilt["German"] = array();
	$pageTitlescreategrn_issue_rebuilt["German"] = array();
	$fieldLabelscreategrn_issue_rebuilt["German"]["ID"] = "ICH WÜRDE";
	$fieldToolTipscreategrn_issue_rebuilt["German"]["ID"] = "";
	$fieldLabelscreategrn_issue_rebuilt["German"]["ItemCode"] = "Produktcode";
	$fieldToolTipscreategrn_issue_rebuilt["German"]["ItemCode"] = "";
	$fieldLabelscreategrn_issue_rebuilt["German"]["Brand"] = "Marke";
	$fieldToolTipscreategrn_issue_rebuilt["German"]["Brand"] = "";
	$fieldLabelscreategrn_issue_rebuilt["German"]["Description"] = "Beschreibung";
	$fieldToolTipscreategrn_issue_rebuilt["German"]["Description"] = "";
	$fieldLabelscreategrn_issue_rebuilt["German"]["Supplier"] = "Lieferant";
	$fieldToolTipscreategrn_issue_rebuilt["German"]["Supplier"] = "";
	$fieldLabelscreategrn_issue_rebuilt["German"]["Quantity"] = "Menge";
	$fieldToolTipscreategrn_issue_rebuilt["German"]["Quantity"] = "";
	$fieldLabelscreategrn_issue_rebuilt["German"]["RemovedFrom"] = "Fahrzeug";
	$fieldToolTipscreategrn_issue_rebuilt["German"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_issue_rebuilt["German"]["SystemDate"] = "Systemdatum";
	$fieldToolTipscreategrn_issue_rebuilt["German"]["SystemDate"] = "";
	$fieldLabelscreategrn_issue_rebuilt["German"]["GRNDate"] = "Datum";
	$fieldToolTipscreategrn_issue_rebuilt["German"]["GRNDate"] = "";
	$fieldLabelscreategrn_issue_rebuilt["German"]["EnteredBy"] = "Eingegeben";
	$fieldToolTipscreategrn_issue_rebuilt["German"]["EnteredBy"] = "";
	$fieldLabelscreategrn_issue_rebuilt["German"]["ApprovedBy"] = "Bearbeitet von";
	$fieldToolTipscreategrn_issue_rebuilt["German"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_issue_rebuilt["German"]["UnitPrice"] = "Preis";
	$fieldToolTipscreategrn_issue_rebuilt["German"]["UnitPrice"] = "";
	$fieldLabelscreategrn_issue_rebuilt["German"]["Status"] = "Art";
	$fieldToolTipscreategrn_issue_rebuilt["German"]["Status"] = "";
	$fieldLabelscreategrn_issue_rebuilt["German"]["RefNumber"] = "Referenznummer.";
	$fieldToolTipscreategrn_issue_rebuilt["German"]["RefNumber"] = "";
	$fieldLabelscreategrn_issue_rebuilt["German"]["CurrentStock"] = "Aktueller Lagerbestand";
	$fieldToolTipscreategrn_issue_rebuilt["German"]["CurrentStock"] = "";
	$fieldLabelscreategrn_issue_rebuilt["German"]["Fleet"] = "Flotte";
	$fieldToolTipscreategrn_issue_rebuilt["German"]["Fleet"] = "";
	$fieldLabelscreategrn_issue_rebuilt["German"]["PriceLink"] = "Kostencode";
	$fieldToolTipscreategrn_issue_rebuilt["German"]["PriceLink"] = "";
	$fieldLabelscreategrn_issue_rebuilt["German"]["Cost"] = "Kosten";
	$fieldToolTipscreategrn_issue_rebuilt["German"]["Cost"] = "";
	$fieldLabelscreategrn_issue_rebuilt["German"]["Remarks"] = "Bemerkungen";
	$fieldToolTipscreategrn_issue_rebuilt["German"]["Remarks"] = "";
	if (count($fieldToolTipscreategrn_issue_rebuilt["German"]))
		$tdatacreategrn_issue_rebuilt[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelscreategrn_issue_rebuilt["Italian"] = array();
	$fieldToolTipscreategrn_issue_rebuilt["Italian"] = array();
	$pageTitlescreategrn_issue_rebuilt["Italian"] = array();
	$fieldLabelscreategrn_issue_rebuilt["Italian"]["ID"] = "ID";
	$fieldToolTipscreategrn_issue_rebuilt["Italian"]["ID"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Italian"]["ItemCode"] = "Codice articolo";
	$fieldToolTipscreategrn_issue_rebuilt["Italian"]["ItemCode"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Italian"]["Brand"] = "Marca";
	$fieldToolTipscreategrn_issue_rebuilt["Italian"]["Brand"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Italian"]["Description"] = "Descrizione";
	$fieldToolTipscreategrn_issue_rebuilt["Italian"]["Description"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Italian"]["Supplier"] = "Fornitore";
	$fieldToolTipscreategrn_issue_rebuilt["Italian"]["Supplier"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Italian"]["Quantity"] = "Quantità";
	$fieldToolTipscreategrn_issue_rebuilt["Italian"]["Quantity"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Italian"]["RemovedFrom"] = "Veicolo";
	$fieldToolTipscreategrn_issue_rebuilt["Italian"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Italian"]["SystemDate"] = "Data di sistema";
	$fieldToolTipscreategrn_issue_rebuilt["Italian"]["SystemDate"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Italian"]["GRNDate"] = "Data";
	$fieldToolTipscreategrn_issue_rebuilt["Italian"]["GRNDate"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Italian"]["EnteredBy"] = "inserito";
	$fieldToolTipscreategrn_issue_rebuilt["Italian"]["EnteredBy"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Italian"]["ApprovedBy"] = "A cura di";
	$fieldToolTipscreategrn_issue_rebuilt["Italian"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Italian"]["UnitPrice"] = "tasso";
	$fieldToolTipscreategrn_issue_rebuilt["Italian"]["UnitPrice"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Italian"]["Status"] = "Digitare";
	$fieldToolTipscreategrn_issue_rebuilt["Italian"]["Status"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Italian"]["RefNumber"] = "Riferimento No.";
	$fieldToolTipscreategrn_issue_rebuilt["Italian"]["RefNumber"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Italian"]["CurrentStock"] = "Scorta attuale";
	$fieldToolTipscreategrn_issue_rebuilt["Italian"]["CurrentStock"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Italian"]["Fleet"] = "Flotta";
	$fieldToolTipscreategrn_issue_rebuilt["Italian"]["Fleet"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Italian"]["PriceLink"] = "Codice costo";
	$fieldToolTipscreategrn_issue_rebuilt["Italian"]["PriceLink"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Italian"]["Cost"] = "Costo";
	$fieldToolTipscreategrn_issue_rebuilt["Italian"]["Cost"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Italian"]["Remarks"] = "Osservazioni";
	$fieldToolTipscreategrn_issue_rebuilt["Italian"]["Remarks"] = "";
	if (count($fieldToolTipscreategrn_issue_rebuilt["Italian"]))
		$tdatacreategrn_issue_rebuilt[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelscreategrn_issue_rebuilt["Russian"] = array();
	$fieldToolTipscreategrn_issue_rebuilt["Russian"] = array();
	$pageTitlescreategrn_issue_rebuilt["Russian"] = array();
	$fieldLabelscreategrn_issue_rebuilt["Russian"]["ID"] = "? ??";
	$fieldToolTipscreategrn_issue_rebuilt["Russian"]["ID"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Russian"]["ItemCode"] = "??? ??????";
	$fieldToolTipscreategrn_issue_rebuilt["Russian"]["ItemCode"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Russian"]["Brand"] = "?????";
	$fieldToolTipscreategrn_issue_rebuilt["Russian"]["Brand"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Russian"]["Description"] = "????????";
	$fieldToolTipscreategrn_issue_rebuilt["Russian"]["Description"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Russian"]["Supplier"] = "?????????";
	$fieldToolTipscreategrn_issue_rebuilt["Russian"]["Supplier"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Russian"]["Quantity"] = "??????????";
	$fieldToolTipscreategrn_issue_rebuilt["Russian"]["Quantity"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Russian"]["RemovedFrom"] = "???????? ????????????";
	$fieldToolTipscreategrn_issue_rebuilt["Russian"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Russian"]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn_issue_rebuilt["Russian"]["SystemDate"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Russian"]["GRNDate"] = "????";
	$fieldToolTipscreategrn_issue_rebuilt["Russian"]["GRNDate"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Russian"]["EnteredBy"] = "?????";
	$fieldToolTipscreategrn_issue_rebuilt["Russian"]["EnteredBy"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Russian"]["ApprovedBy"] = "???????????????";
	$fieldToolTipscreategrn_issue_rebuilt["Russian"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Russian"]["UnitPrice"] = "??????";
	$fieldToolTipscreategrn_issue_rebuilt["Russian"]["UnitPrice"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Russian"]["Status"] = "???";
	$fieldToolTipscreategrn_issue_rebuilt["Russian"]["Status"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Russian"]["RefNumber"] = "?????? ?";
	$fieldToolTipscreategrn_issue_rebuilt["Russian"]["RefNumber"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Russian"]["CurrentStock"] = "??????? ?? ??????";
	$fieldToolTipscreategrn_issue_rebuilt["Russian"]["CurrentStock"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Russian"]["Fleet"] = "????";
	$fieldToolTipscreategrn_issue_rebuilt["Russian"]["Fleet"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Russian"]["PriceLink"] = "??? ?????????";
	$fieldToolTipscreategrn_issue_rebuilt["Russian"]["PriceLink"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Russian"]["Cost"] = "?????????";
	$fieldToolTipscreategrn_issue_rebuilt["Russian"]["Cost"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Russian"]["Remarks"] = "?????????";
	$fieldToolTipscreategrn_issue_rebuilt["Russian"]["Remarks"] = "";
	if (count($fieldToolTipscreategrn_issue_rebuilt["Russian"]))
		$tdatacreategrn_issue_rebuilt[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscreategrn_issue_rebuilt["Spanish"] = array();
	$fieldToolTipscreategrn_issue_rebuilt["Spanish"] = array();
	$pageTitlescreategrn_issue_rebuilt["Spanish"] = array();
	$fieldLabelscreategrn_issue_rebuilt["Spanish"]["ID"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipscreategrn_issue_rebuilt["Spanish"]["ID"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Spanish"]["ItemCode"] = "Código del objeto";
	$fieldToolTipscreategrn_issue_rebuilt["Spanish"]["ItemCode"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Spanish"]["Brand"] = "Marca";
	$fieldToolTipscreategrn_issue_rebuilt["Spanish"]["Brand"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Spanish"]["Description"] = "Descripción";
	$fieldToolTipscreategrn_issue_rebuilt["Spanish"]["Description"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Spanish"]["Supplier"] = "Proveedor";
	$fieldToolTipscreategrn_issue_rebuilt["Spanish"]["Supplier"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Spanish"]["Quantity"] = "Cantidad";
	$fieldToolTipscreategrn_issue_rebuilt["Spanish"]["Quantity"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Spanish"]["RemovedFrom"] = "Vehículo";
	$fieldToolTipscreategrn_issue_rebuilt["Spanish"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Spanish"]["SystemDate"] = "Fecha del sistema";
	$fieldToolTipscreategrn_issue_rebuilt["Spanish"]["SystemDate"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Spanish"]["GRNDate"] = "Fecha";
	$fieldToolTipscreategrn_issue_rebuilt["Spanish"]["GRNDate"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Spanish"]["EnteredBy"] = "Ingresó";
	$fieldToolTipscreategrn_issue_rebuilt["Spanish"]["EnteredBy"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Spanish"]["ApprovedBy"] = "Editado por";
	$fieldToolTipscreategrn_issue_rebuilt["Spanish"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Spanish"]["UnitPrice"] = "Tarifa";
	$fieldToolTipscreategrn_issue_rebuilt["Spanish"]["UnitPrice"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Spanish"]["Status"] = "Tipo";
	$fieldToolTipscreategrn_issue_rebuilt["Spanish"]["Status"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Spanish"]["RefNumber"] = "Numero de referencia.";
	$fieldToolTipscreategrn_issue_rebuilt["Spanish"]["RefNumber"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Spanish"]["CurrentStock"] = "Acciones actuales";
	$fieldToolTipscreategrn_issue_rebuilt["Spanish"]["CurrentStock"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Spanish"]["Fleet"] = "Flota";
	$fieldToolTipscreategrn_issue_rebuilt["Spanish"]["Fleet"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Spanish"]["PriceLink"] = "Código de costo";
	$fieldToolTipscreategrn_issue_rebuilt["Spanish"]["PriceLink"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Spanish"]["Cost"] = "Costo";
	$fieldToolTipscreategrn_issue_rebuilt["Spanish"]["Cost"] = "";
	$fieldLabelscreategrn_issue_rebuilt["Spanish"]["Remarks"] = "Observaciones";
	$fieldToolTipscreategrn_issue_rebuilt["Spanish"]["Remarks"] = "";
	if (count($fieldToolTipscreategrn_issue_rebuilt["Spanish"]))
		$tdatacreategrn_issue_rebuilt[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscreategrn_issue_rebuilt[""] = array();
	$fieldToolTipscreategrn_issue_rebuilt[""] = array();
	$pageTitlescreategrn_issue_rebuilt[""] = array();
	if (count($fieldToolTipscreategrn_issue_rebuilt[""]))
		$tdatacreategrn_issue_rebuilt[".isUseToolTips"] = true;
}


	$tdatacreategrn_issue_rebuilt[".NCSearch"] = true;



$tdatacreategrn_issue_rebuilt[".shortTableName"] = "creategrn_issue_rebuilt";
$tdatacreategrn_issue_rebuilt[".nSecOptions"] = 0;
$tdatacreategrn_issue_rebuilt[".recsPerRowPrint"] = 1;
$tdatacreategrn_issue_rebuilt[".mainTableOwnerID"] = "";
$tdatacreategrn_issue_rebuilt[".moveNext"] = 1;
$tdatacreategrn_issue_rebuilt[".entityType"] = 1;

$tdatacreategrn_issue_rebuilt[".strOriginalTableName"] = "creategrn";

		 



$tdatacreategrn_issue_rebuilt[".showAddInPopup"] = false;

$tdatacreategrn_issue_rebuilt[".showEditInPopup"] = false;

$tdatacreategrn_issue_rebuilt[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacreategrn_issue_rebuilt[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacreategrn_issue_rebuilt[".fieldsForRegister"] = array();

	$tdatacreategrn_issue_rebuilt[".listAjax"] = true;

	$tdatacreategrn_issue_rebuilt[".audit"] = false;

	$tdatacreategrn_issue_rebuilt[".locking"] = false;

$tdatacreategrn_issue_rebuilt[".edit"] = true;
$tdatacreategrn_issue_rebuilt[".afterEditAction"] = 1;
$tdatacreategrn_issue_rebuilt[".closePopupAfterEdit"] = 1;
$tdatacreategrn_issue_rebuilt[".afterEditActionDetTable"] = "";

$tdatacreategrn_issue_rebuilt[".add"] = true;
$tdatacreategrn_issue_rebuilt[".afterAddAction"] = 1;
$tdatacreategrn_issue_rebuilt[".closePopupAfterAdd"] = 1;
$tdatacreategrn_issue_rebuilt[".afterAddActionDetTable"] = "Detail tables not found!";

$tdatacreategrn_issue_rebuilt[".list"] = true;




$tdatacreategrn_issue_rebuilt[".view"] = true;

$tdatacreategrn_issue_rebuilt[".import"] = true;

$tdatacreategrn_issue_rebuilt[".exportTo"] = true;

$tdatacreategrn_issue_rebuilt[".printFriendly"] = true;

$tdatacreategrn_issue_rebuilt[".delete"] = true;

$tdatacreategrn_issue_rebuilt[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacreategrn_issue_rebuilt[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatacreategrn_issue_rebuilt[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatacreategrn_issue_rebuilt[".searchSaving"] = false;
//

$tdatacreategrn_issue_rebuilt[".showSearchPanel"] = true;
		$tdatacreategrn_issue_rebuilt[".flexibleSearch"] = true;

$tdatacreategrn_issue_rebuilt[".isUseAjaxSuggest"] = true;

$tdatacreategrn_issue_rebuilt[".rowHighlite"] = true;



$tdatacreategrn_issue_rebuilt[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacreategrn_issue_rebuilt[".isUseTimeForSearch"] = false;





$tdatacreategrn_issue_rebuilt[".allSearchFields"] = array();
$tdatacreategrn_issue_rebuilt[".filterFields"] = array();
$tdatacreategrn_issue_rebuilt[".requiredSearchFields"] = array();

$tdatacreategrn_issue_rebuilt[".allSearchFields"][] = "Status";
	$tdatacreategrn_issue_rebuilt[".allSearchFields"][] = "Fleet";
	$tdatacreategrn_issue_rebuilt[".allSearchFields"][] = "RemovedFrom";
	$tdatacreategrn_issue_rebuilt[".allSearchFields"][] = "GRNDate";
	$tdatacreategrn_issue_rebuilt[".allSearchFields"][] = "ItemCode";
	$tdatacreategrn_issue_rebuilt[".allSearchFields"][] = "Remarks";
	$tdatacreategrn_issue_rebuilt[".allSearchFields"][] = "Quantity";
	$tdatacreategrn_issue_rebuilt[".allSearchFields"][] = "PriceLink";
	$tdatacreategrn_issue_rebuilt[".allSearchFields"][] = "Brand";
	$tdatacreategrn_issue_rebuilt[".allSearchFields"][] = "Description";
	$tdatacreategrn_issue_rebuilt[".allSearchFields"][] = "Supplier";
	$tdatacreategrn_issue_rebuilt[".allSearchFields"][] = "UnitPrice";
	$tdatacreategrn_issue_rebuilt[".allSearchFields"][] = "Cost";
	$tdatacreategrn_issue_rebuilt[".allSearchFields"][] = "EnteredBy";
	$tdatacreategrn_issue_rebuilt[".allSearchFields"][] = "CurrentStock";
	$tdatacreategrn_issue_rebuilt[".allSearchFields"][] = "SystemDate";
	

$tdatacreategrn_issue_rebuilt[".googleLikeFields"] = array();
$tdatacreategrn_issue_rebuilt[".googleLikeFields"][] = "ID";
$tdatacreategrn_issue_rebuilt[".googleLikeFields"][] = "ItemCode";
$tdatacreategrn_issue_rebuilt[".googleLikeFields"][] = "Brand";
$tdatacreategrn_issue_rebuilt[".googleLikeFields"][] = "Description";
$tdatacreategrn_issue_rebuilt[".googleLikeFields"][] = "Supplier";
$tdatacreategrn_issue_rebuilt[".googleLikeFields"][] = "Quantity";
$tdatacreategrn_issue_rebuilt[".googleLikeFields"][] = "RemovedFrom";
$tdatacreategrn_issue_rebuilt[".googleLikeFields"][] = "SystemDate";
$tdatacreategrn_issue_rebuilt[".googleLikeFields"][] = "GRNDate";
$tdatacreategrn_issue_rebuilt[".googleLikeFields"][] = "EnteredBy";
$tdatacreategrn_issue_rebuilt[".googleLikeFields"][] = "ApprovedBy";
$tdatacreategrn_issue_rebuilt[".googleLikeFields"][] = "UnitPrice";
$tdatacreategrn_issue_rebuilt[".googleLikeFields"][] = "Status";
$tdatacreategrn_issue_rebuilt[".googleLikeFields"][] = "RefNumber";
$tdatacreategrn_issue_rebuilt[".googleLikeFields"][] = "CurrentStock";
$tdatacreategrn_issue_rebuilt[".googleLikeFields"][] = "Fleet";
$tdatacreategrn_issue_rebuilt[".googleLikeFields"][] = "PriceLink";
$tdatacreategrn_issue_rebuilt[".googleLikeFields"][] = "Cost";
$tdatacreategrn_issue_rebuilt[".googleLikeFields"][] = "Remarks";


$tdatacreategrn_issue_rebuilt[".advSearchFields"] = array();
$tdatacreategrn_issue_rebuilt[".advSearchFields"][] = "Status";
$tdatacreategrn_issue_rebuilt[".advSearchFields"][] = "Fleet";
$tdatacreategrn_issue_rebuilt[".advSearchFields"][] = "RemovedFrom";
$tdatacreategrn_issue_rebuilt[".advSearchFields"][] = "GRNDate";
$tdatacreategrn_issue_rebuilt[".advSearchFields"][] = "ItemCode";
$tdatacreategrn_issue_rebuilt[".advSearchFields"][] = "Remarks";
$tdatacreategrn_issue_rebuilt[".advSearchFields"][] = "Quantity";
$tdatacreategrn_issue_rebuilt[".advSearchFields"][] = "PriceLink";
$tdatacreategrn_issue_rebuilt[".advSearchFields"][] = "Brand";
$tdatacreategrn_issue_rebuilt[".advSearchFields"][] = "Description";
$tdatacreategrn_issue_rebuilt[".advSearchFields"][] = "Supplier";
$tdatacreategrn_issue_rebuilt[".advSearchFields"][] = "UnitPrice";
$tdatacreategrn_issue_rebuilt[".advSearchFields"][] = "Cost";
$tdatacreategrn_issue_rebuilt[".advSearchFields"][] = "EnteredBy";
$tdatacreategrn_issue_rebuilt[".advSearchFields"][] = "CurrentStock";
$tdatacreategrn_issue_rebuilt[".advSearchFields"][] = "SystemDate";

$tdatacreategrn_issue_rebuilt[".tableType"] = "list";

$tdatacreategrn_issue_rebuilt[".printerPageOrientation"] = 0;
$tdatacreategrn_issue_rebuilt[".nPrinterPageScale"] = 100;

$tdatacreategrn_issue_rebuilt[".nPrinterSplitRecords"] = 40;

$tdatacreategrn_issue_rebuilt[".nPrinterPDFSplitRecords"] = 40;



$tdatacreategrn_issue_rebuilt[".geocodingEnabled"] = false;





$tdatacreategrn_issue_rebuilt[".listGridLayout"] = 3;


$tdatacreategrn_issue_rebuilt[".isResizeColumns"] = true;



// view page pdf
$tdatacreategrn_issue_rebuilt[".isViewPagePDF"] = true;
$tdatacreategrn_issue_rebuilt[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatacreategrn_issue_rebuilt[".isPrinterPagePDF"] = true;
$tdatacreategrn_issue_rebuilt[".nPrinterPagePDFScale"] = 100;


$tdatacreategrn_issue_rebuilt[".pageSize"] = 20;

$tdatacreategrn_issue_rebuilt[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY CurrentStock DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacreategrn_issue_rebuilt[".strOrderBy"] = $tstrOrderBy;

$tdatacreategrn_issue_rebuilt[".orderindexes"] = array();
$tdatacreategrn_issue_rebuilt[".orderindexes"][] = array(15, (0 ? "ASC" : "DESC"), "CurrentStock");

$tdatacreategrn_issue_rebuilt[".sqlHead"] = "SELECT ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  SUM(CurrentStock) AS CurrentStock,  Fleet,  PriceLink,  Quantity*UnitPrice*-1 AS Cost,  Remarks";
$tdatacreategrn_issue_rebuilt[".sqlFrom"] = "FROM creategrn";
$tdatacreategrn_issue_rebuilt[".sqlWhereExpr"] = "Status =\"Rebuilt issue\"";
$tdatacreategrn_issue_rebuilt[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatacreategrn_issue_rebuilt[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacreategrn_issue_rebuilt[".arrGroupsPerPage"] = $arrGPP;

$tdatacreategrn_issue_rebuilt[".highlightSearchResults"] = true;

$tableKeyscreategrn_issue_rebuilt = array();
$tableKeyscreategrn_issue_rebuilt[] = "ID";
$tdatacreategrn_issue_rebuilt[".Keys"] = $tableKeyscreategrn_issue_rebuilt;

$tdatacreategrn_issue_rebuilt[".listFields"] = array();
$tdatacreategrn_issue_rebuilt[".listFields"][] = "ID";
$tdatacreategrn_issue_rebuilt[".listFields"][] = "Status";
$tdatacreategrn_issue_rebuilt[".listFields"][] = "Fleet";
$tdatacreategrn_issue_rebuilt[".listFields"][] = "RemovedFrom";
$tdatacreategrn_issue_rebuilt[".listFields"][] = "GRNDate";
$tdatacreategrn_issue_rebuilt[".listFields"][] = "ItemCode";
$tdatacreategrn_issue_rebuilt[".listFields"][] = "Remarks";
$tdatacreategrn_issue_rebuilt[".listFields"][] = "Quantity";
$tdatacreategrn_issue_rebuilt[".listFields"][] = "Brand";
$tdatacreategrn_issue_rebuilt[".listFields"][] = "Description";
$tdatacreategrn_issue_rebuilt[".listFields"][] = "Supplier";
$tdatacreategrn_issue_rebuilt[".listFields"][] = "UnitPrice";
$tdatacreategrn_issue_rebuilt[".listFields"][] = "Cost";
$tdatacreategrn_issue_rebuilt[".listFields"][] = "EnteredBy";

$tdatacreategrn_issue_rebuilt[".hideMobileList"] = array();


$tdatacreategrn_issue_rebuilt[".viewFields"] = array();
$tdatacreategrn_issue_rebuilt[".viewFields"][] = "ID";
$tdatacreategrn_issue_rebuilt[".viewFields"][] = "Status";
$tdatacreategrn_issue_rebuilt[".viewFields"][] = "Fleet";
$tdatacreategrn_issue_rebuilt[".viewFields"][] = "RemovedFrom";
$tdatacreategrn_issue_rebuilt[".viewFields"][] = "GRNDate";
$tdatacreategrn_issue_rebuilt[".viewFields"][] = "ItemCode";
$tdatacreategrn_issue_rebuilt[".viewFields"][] = "Remarks";
$tdatacreategrn_issue_rebuilt[".viewFields"][] = "CurrentStock";
$tdatacreategrn_issue_rebuilt[".viewFields"][] = "Quantity";
$tdatacreategrn_issue_rebuilt[".viewFields"][] = "Brand";
$tdatacreategrn_issue_rebuilt[".viewFields"][] = "Description";
$tdatacreategrn_issue_rebuilt[".viewFields"][] = "Supplier";
$tdatacreategrn_issue_rebuilt[".viewFields"][] = "UnitPrice";
$tdatacreategrn_issue_rebuilt[".viewFields"][] = "Cost";
$tdatacreategrn_issue_rebuilt[".viewFields"][] = "SystemDate";
$tdatacreategrn_issue_rebuilt[".viewFields"][] = "EnteredBy";
$tdatacreategrn_issue_rebuilt[".viewFields"][] = "ApprovedBy";

$tdatacreategrn_issue_rebuilt[".addFields"] = array();
$tdatacreategrn_issue_rebuilt[".addFields"][] = "Status";
$tdatacreategrn_issue_rebuilt[".addFields"][] = "Fleet";
$tdatacreategrn_issue_rebuilt[".addFields"][] = "RemovedFrom";
$tdatacreategrn_issue_rebuilt[".addFields"][] = "GRNDate";
$tdatacreategrn_issue_rebuilt[".addFields"][] = "ItemCode";
$tdatacreategrn_issue_rebuilt[".addFields"][] = "Remarks";
$tdatacreategrn_issue_rebuilt[".addFields"][] = "Quantity";
$tdatacreategrn_issue_rebuilt[".addFields"][] = "PriceLink";
$tdatacreategrn_issue_rebuilt[".addFields"][] = "Brand";
$tdatacreategrn_issue_rebuilt[".addFields"][] = "Description";
$tdatacreategrn_issue_rebuilt[".addFields"][] = "Supplier";
$tdatacreategrn_issue_rebuilt[".addFields"][] = "UnitPrice";
$tdatacreategrn_issue_rebuilt[".addFields"][] = "Cost";
$tdatacreategrn_issue_rebuilt[".addFields"][] = "EnteredBy";
$tdatacreategrn_issue_rebuilt[".addFields"][] = "CurrentStock";
$tdatacreategrn_issue_rebuilt[".addFields"][] = "SystemDate";

$tdatacreategrn_issue_rebuilt[".masterListFields"] = array();
$tdatacreategrn_issue_rebuilt[".masterListFields"][] = "Remarks";
$tdatacreategrn_issue_rebuilt[".masterListFields"][] = "Status";
$tdatacreategrn_issue_rebuilt[".masterListFields"][] = "ID";
$tdatacreategrn_issue_rebuilt[".masterListFields"][] = "Fleet";
$tdatacreategrn_issue_rebuilt[".masterListFields"][] = "RemovedFrom";
$tdatacreategrn_issue_rebuilt[".masterListFields"][] = "GRNDate";
$tdatacreategrn_issue_rebuilt[".masterListFields"][] = "ItemCode";
$tdatacreategrn_issue_rebuilt[".masterListFields"][] = "RefNumber";
$tdatacreategrn_issue_rebuilt[".masterListFields"][] = "Quantity";
$tdatacreategrn_issue_rebuilt[".masterListFields"][] = "PriceLink";
$tdatacreategrn_issue_rebuilt[".masterListFields"][] = "Brand";
$tdatacreategrn_issue_rebuilt[".masterListFields"][] = "Description";
$tdatacreategrn_issue_rebuilt[".masterListFields"][] = "Supplier";
$tdatacreategrn_issue_rebuilt[".masterListFields"][] = "UnitPrice";
$tdatacreategrn_issue_rebuilt[".masterListFields"][] = "ApprovedBy";
$tdatacreategrn_issue_rebuilt[".masterListFields"][] = "Cost";
$tdatacreategrn_issue_rebuilt[".masterListFields"][] = "EnteredBy";
$tdatacreategrn_issue_rebuilt[".masterListFields"][] = "CurrentStock";
$tdatacreategrn_issue_rebuilt[".masterListFields"][] = "SystemDate";

$tdatacreategrn_issue_rebuilt[".inlineAddFields"] = array();

$tdatacreategrn_issue_rebuilt[".editFields"] = array();
$tdatacreategrn_issue_rebuilt[".editFields"][] = "Status";
$tdatacreategrn_issue_rebuilt[".editFields"][] = "Fleet";
$tdatacreategrn_issue_rebuilt[".editFields"][] = "RemovedFrom";
$tdatacreategrn_issue_rebuilt[".editFields"][] = "GRNDate";
$tdatacreategrn_issue_rebuilt[".editFields"][] = "ItemCode";
$tdatacreategrn_issue_rebuilt[".editFields"][] = "Remarks";
$tdatacreategrn_issue_rebuilt[".editFields"][] = "Quantity";
$tdatacreategrn_issue_rebuilt[".editFields"][] = "PriceLink";
$tdatacreategrn_issue_rebuilt[".editFields"][] = "Brand";
$tdatacreategrn_issue_rebuilt[".editFields"][] = "Description";
$tdatacreategrn_issue_rebuilt[".editFields"][] = "Supplier";
$tdatacreategrn_issue_rebuilt[".editFields"][] = "UnitPrice";
$tdatacreategrn_issue_rebuilt[".editFields"][] = "Cost";
$tdatacreategrn_issue_rebuilt[".editFields"][] = "CurrentStock";
$tdatacreategrn_issue_rebuilt[".editFields"][] = "SystemDate";
$tdatacreategrn_issue_rebuilt[".editFields"][] = "EnteredBy";
$tdatacreategrn_issue_rebuilt[".editFields"][] = "ApprovedBy";

$tdatacreategrn_issue_rebuilt[".inlineEditFields"] = array();

$tdatacreategrn_issue_rebuilt[".updateSelectedFields"] = array();
$tdatacreategrn_issue_rebuilt[".updateSelectedFields"][] = "Status";
$tdatacreategrn_issue_rebuilt[".updateSelectedFields"][] = "Fleet";
$tdatacreategrn_issue_rebuilt[".updateSelectedFields"][] = "RemovedFrom";
$tdatacreategrn_issue_rebuilt[".updateSelectedFields"][] = "GRNDate";
$tdatacreategrn_issue_rebuilt[".updateSelectedFields"][] = "ItemCode";
$tdatacreategrn_issue_rebuilt[".updateSelectedFields"][] = "Remarks";
$tdatacreategrn_issue_rebuilt[".updateSelectedFields"][] = "Quantity";
$tdatacreategrn_issue_rebuilt[".updateSelectedFields"][] = "PriceLink";
$tdatacreategrn_issue_rebuilt[".updateSelectedFields"][] = "Brand";
$tdatacreategrn_issue_rebuilt[".updateSelectedFields"][] = "Description";
$tdatacreategrn_issue_rebuilt[".updateSelectedFields"][] = "Supplier";
$tdatacreategrn_issue_rebuilt[".updateSelectedFields"][] = "UnitPrice";
$tdatacreategrn_issue_rebuilt[".updateSelectedFields"][] = "Cost";
$tdatacreategrn_issue_rebuilt[".updateSelectedFields"][] = "CurrentStock";
$tdatacreategrn_issue_rebuilt[".updateSelectedFields"][] = "SystemDate";
$tdatacreategrn_issue_rebuilt[".updateSelectedFields"][] = "EnteredBy";
$tdatacreategrn_issue_rebuilt[".updateSelectedFields"][] = "ApprovedBy";


$tdatacreategrn_issue_rebuilt[".exportFields"] = array();
$tdatacreategrn_issue_rebuilt[".exportFields"][] = "ID";
$tdatacreategrn_issue_rebuilt[".exportFields"][] = "Status";
$tdatacreategrn_issue_rebuilt[".exportFields"][] = "Fleet";
$tdatacreategrn_issue_rebuilt[".exportFields"][] = "RemovedFrom";
$tdatacreategrn_issue_rebuilt[".exportFields"][] = "GRNDate";
$tdatacreategrn_issue_rebuilt[".exportFields"][] = "ItemCode";
$tdatacreategrn_issue_rebuilt[".exportFields"][] = "Remarks";
$tdatacreategrn_issue_rebuilt[".exportFields"][] = "Quantity";
$tdatacreategrn_issue_rebuilt[".exportFields"][] = "PriceLink";
$tdatacreategrn_issue_rebuilt[".exportFields"][] = "Brand";
$tdatacreategrn_issue_rebuilt[".exportFields"][] = "Description";
$tdatacreategrn_issue_rebuilt[".exportFields"][] = "Supplier";
$tdatacreategrn_issue_rebuilt[".exportFields"][] = "UnitPrice";
$tdatacreategrn_issue_rebuilt[".exportFields"][] = "ApprovedBy";
$tdatacreategrn_issue_rebuilt[".exportFields"][] = "Cost";
$tdatacreategrn_issue_rebuilt[".exportFields"][] = "EnteredBy";
$tdatacreategrn_issue_rebuilt[".exportFields"][] = "CurrentStock";
$tdatacreategrn_issue_rebuilt[".exportFields"][] = "SystemDate";

$tdatacreategrn_issue_rebuilt[".importFields"] = array();
$tdatacreategrn_issue_rebuilt[".importFields"][] = "ID";
$tdatacreategrn_issue_rebuilt[".importFields"][] = "ItemCode";
$tdatacreategrn_issue_rebuilt[".importFields"][] = "Brand";
$tdatacreategrn_issue_rebuilt[".importFields"][] = "Description";
$tdatacreategrn_issue_rebuilt[".importFields"][] = "Supplier";
$tdatacreategrn_issue_rebuilt[".importFields"][] = "Quantity";
$tdatacreategrn_issue_rebuilt[".importFields"][] = "RemovedFrom";
$tdatacreategrn_issue_rebuilt[".importFields"][] = "SystemDate";
$tdatacreategrn_issue_rebuilt[".importFields"][] = "GRNDate";
$tdatacreategrn_issue_rebuilt[".importFields"][] = "EnteredBy";
$tdatacreategrn_issue_rebuilt[".importFields"][] = "ApprovedBy";
$tdatacreategrn_issue_rebuilt[".importFields"][] = "UnitPrice";
$tdatacreategrn_issue_rebuilt[".importFields"][] = "Status";
$tdatacreategrn_issue_rebuilt[".importFields"][] = "CurrentStock";
$tdatacreategrn_issue_rebuilt[".importFields"][] = "Fleet";
$tdatacreategrn_issue_rebuilt[".importFields"][] = "PriceLink";
$tdatacreategrn_issue_rebuilt[".importFields"][] = "Cost";
$tdatacreategrn_issue_rebuilt[".importFields"][] = "Remarks";

$tdatacreategrn_issue_rebuilt[".printFields"] = array();
$tdatacreategrn_issue_rebuilt[".printFields"][] = "ID";
$tdatacreategrn_issue_rebuilt[".printFields"][] = "Status";
$tdatacreategrn_issue_rebuilt[".printFields"][] = "Fleet";
$tdatacreategrn_issue_rebuilt[".printFields"][] = "RemovedFrom";
$tdatacreategrn_issue_rebuilt[".printFields"][] = "GRNDate";
$tdatacreategrn_issue_rebuilt[".printFields"][] = "ItemCode";
$tdatacreategrn_issue_rebuilt[".printFields"][] = "Remarks";
$tdatacreategrn_issue_rebuilt[".printFields"][] = "Quantity";
$tdatacreategrn_issue_rebuilt[".printFields"][] = "PriceLink";
$tdatacreategrn_issue_rebuilt[".printFields"][] = "Brand";
$tdatacreategrn_issue_rebuilt[".printFields"][] = "Description";
$tdatacreategrn_issue_rebuilt[".printFields"][] = "Supplier";
$tdatacreategrn_issue_rebuilt[".printFields"][] = "UnitPrice";
$tdatacreategrn_issue_rebuilt[".printFields"][] = "ApprovedBy";
$tdatacreategrn_issue_rebuilt[".printFields"][] = "Cost";
$tdatacreategrn_issue_rebuilt[".printFields"][] = "EnteredBy";
$tdatacreategrn_issue_rebuilt[".printFields"][] = "CurrentStock";
$tdatacreategrn_issue_rebuilt[".printFields"][] = "SystemDate";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt","ID");
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








	$tdatacreategrn_issue_rebuilt["ID"] = $fdata;
//	ItemCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemCode";
	$fdata["GoodName"] = "ItemCode";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt","ItemCode");
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




	$tdatacreategrn_issue_rebuilt["ItemCode"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt","Brand");
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




	$tdatacreategrn_issue_rebuilt["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt","Description");
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




	$tdatacreategrn_issue_rebuilt["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt","Supplier");
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




	$tdatacreategrn_issue_rebuilt["Supplier"] = $fdata;
//	Quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Quantity";
	$fdata["GoodName"] = "Quantity";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt","Quantity");
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




	$tdatacreategrn_issue_rebuilt["Quantity"] = $fdata;
//	RemovedFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RemovedFrom";
	$fdata["GoodName"] = "RemovedFrom";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt","RemovedFrom");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RemovedFrom";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RemovedFrom";

	
	
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




	$tdatacreategrn_issue_rebuilt["RemovedFrom"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt","SystemDate");
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




	$tdatacreategrn_issue_rebuilt["SystemDate"] = $fdata;
//	GRNDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "GRNDate";
	$fdata["GoodName"] = "GRNDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt","GRNDate");
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




	$tdatacreategrn_issue_rebuilt["GRNDate"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt","EnteredBy");
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




	$tdatacreategrn_issue_rebuilt["EnteredBy"] = $fdata;
//	ApprovedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ApprovedBy";
	$fdata["GoodName"] = "ApprovedBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt","ApprovedBy");
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








	$tdatacreategrn_issue_rebuilt["ApprovedBy"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt","UnitPrice");
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




	$tdatacreategrn_issue_rebuilt["UnitPrice"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt","Status");
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




	$tdatacreategrn_issue_rebuilt["Status"] = $fdata;
//	RefNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RefNumber";
	$fdata["GoodName"] = "RefNumber";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt","RefNumber");
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








	$tdatacreategrn_issue_rebuilt["RefNumber"] = $fdata;
//	CurrentStock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "CurrentStock";
	$fdata["GoodName"] = "CurrentStock";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt","CurrentStock");
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




	$tdatacreategrn_issue_rebuilt["CurrentStock"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt","Fleet");
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




	$tdatacreategrn_issue_rebuilt["Fleet"] = $fdata;
//	PriceLink
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "PriceLink";
	$fdata["GoodName"] = "PriceLink";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt","PriceLink");
	$fdata["FieldType"] = 200;

	
	
	
										
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PriceLink";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PriceLink";

	
	
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
	$edata["LookupTable"] = "inventorymaster-pricing5";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"UnitPrice", 'lookupF'=>"UnitPrice");
	$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "ItemID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ItemID";

	
	$edata["LookupOrderBy"] = "ItemID";

		$edata["LookupDesc"] = true;

	
	
	

	
	
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




	$tdatacreategrn_issue_rebuilt["PriceLink"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt","Cost");
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




	$tdatacreategrn_issue_rebuilt["Cost"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_issue_rebuilt","Remarks");
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




	$tdatacreategrn_issue_rebuilt["Remarks"] = $fdata;


$tables_data["creategrn-issue-rebuilt"]=&$tdatacreategrn_issue_rebuilt;
$field_labels["creategrn_issue_rebuilt"] = &$fieldLabelscreategrn_issue_rebuilt;
$fieldToolTips["creategrn_issue_rebuilt"] = &$fieldToolTipscreategrn_issue_rebuilt;
$page_titles["creategrn_issue_rebuilt"] = &$pageTitlescreategrn_issue_rebuilt;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["creategrn-issue-rebuilt"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["creategrn-issue-rebuilt"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_creategrn_issue_rebuilt()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  SUM(CurrentStock) AS CurrentStock,  Fleet,  PriceLink,  Quantity*UnitPrice*-1 AS Cost,  Remarks";
$proto0["m_strFrom"] = "FROM creategrn";
$proto0["m_strWhere"] = "Status =\"Rebuilt issue\"";
$proto0["m_strOrderBy"] = "ORDER BY CurrentStock DESC";
$proto0["m_strTail"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "Status =\"Rebuilt issue\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=\"Rebuilt issue\"";
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
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "creategrn-issue-rebuilt";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto8["m_sql"] = "ItemCode";
$proto8["m_srcTableName"] = "creategrn-issue-rebuilt";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto10["m_sql"] = "Brand";
$proto10["m_srcTableName"] = "creategrn-issue-rebuilt";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto12["m_sql"] = "Description";
$proto12["m_srcTableName"] = "creategrn-issue-rebuilt";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto14["m_sql"] = "Supplier";
$proto14["m_srcTableName"] = "creategrn-issue-rebuilt";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto16["m_sql"] = "Quantity";
$proto16["m_srcTableName"] = "creategrn-issue-rebuilt";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto18["m_sql"] = "RemovedFrom";
$proto18["m_srcTableName"] = "creategrn-issue-rebuilt";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto20["m_sql"] = "SystemDate";
$proto20["m_srcTableName"] = "creategrn-issue-rebuilt";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto22["m_sql"] = "GRNDate";
$proto22["m_srcTableName"] = "creategrn-issue-rebuilt";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto24["m_sql"] = "EnteredBy";
$proto24["m_srcTableName"] = "creategrn-issue-rebuilt";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto26["m_sql"] = "ApprovedBy";
$proto26["m_srcTableName"] = "creategrn-issue-rebuilt";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto28["m_sql"] = "UnitPrice";
$proto28["m_srcTableName"] = "creategrn-issue-rebuilt";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto30["m_sql"] = "Status";
$proto30["m_srcTableName"] = "creategrn-issue-rebuilt";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto32["m_sql"] = "RefNumber";
$proto32["m_srcTableName"] = "creategrn-issue-rebuilt";
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
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto35["m_arguments"][]=$obj;
$proto35["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto35);

$proto34["m_sql"] = "SUM(CurrentStock)";
$proto34["m_srcTableName"] = "creategrn-issue-rebuilt";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "CurrentStock";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto37["m_sql"] = "Fleet";
$proto37["m_srcTableName"] = "creategrn-issue-rebuilt";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "PriceLink",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto39["m_sql"] = "PriceLink";
$proto39["m_srcTableName"] = "creategrn-issue-rebuilt";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "Quantity*UnitPrice*-1"
));

$proto41["m_sql"] = "Quantity*UnitPrice*-1";
$proto41["m_srcTableName"] = "creategrn-issue-rebuilt";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "Cost";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto43["m_sql"] = "Remarks";
$proto43["m_srcTableName"] = "creategrn-issue-rebuilt";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto45=array();
$proto45["m_link"] = "SQLL_MAIN";
			$proto46=array();
$proto46["m_strName"] = "creategrn";
$proto46["m_srcTableName"] = "creategrn-issue-rebuilt";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "ID";
$proto46["m_columns"][] = "ItemCode";
$proto46["m_columns"][] = "Brand";
$proto46["m_columns"][] = "Description";
$proto46["m_columns"][] = "Supplier";
$proto46["m_columns"][] = "Quantity";
$proto46["m_columns"][] = "RemovedFrom";
$proto46["m_columns"][] = "SystemDate";
$proto46["m_columns"][] = "GRNDate";
$proto46["m_columns"][] = "EnteredBy";
$proto46["m_columns"][] = "ApprovedBy";
$proto46["m_columns"][] = "UnitPrice";
$proto46["m_columns"][] = "Status";
$proto46["m_columns"][] = "RefNumber";
$proto46["m_columns"][] = "CurrentStock";
$proto46["m_columns"][] = "Fleet";
$proto46["m_columns"][] = "PriceLink";
$proto46["m_columns"][] = "Cost";
$proto46["m_columns"][] = "Remarks";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "creategrn";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "creategrn-issue-rebuilt";
$proto47=array();
$proto47["m_sql"] = "";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto49=array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto49["m_column"]=$obj;
$obj = new SQLGroupByItem($proto49);

$proto0["m_groupby"][]=$obj;
												$proto51=array();
						$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto51["m_column"]=$obj;
$obj = new SQLGroupByItem($proto51);

$proto0["m_groupby"][]=$obj;
												$proto53=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto53["m_column"]=$obj;
$obj = new SQLGroupByItem($proto53);

$proto0["m_groupby"][]=$obj;
												$proto55=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto55["m_column"]=$obj;
$obj = new SQLGroupByItem($proto55);

$proto0["m_groupby"][]=$obj;
												$proto57=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto57["m_column"]=$obj;
$obj = new SQLGroupByItem($proto57);

$proto0["m_groupby"][]=$obj;
												$proto59=array();
						$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto59["m_column"]=$obj;
$obj = new SQLGroupByItem($proto59);

$proto0["m_groupby"][]=$obj;
												$proto61=array();
						$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto61["m_column"]=$obj;
$obj = new SQLGroupByItem($proto61);

$proto0["m_groupby"][]=$obj;
												$proto63=array();
						$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto63["m_column"]=$obj;
$obj = new SQLGroupByItem($proto63);

$proto0["m_groupby"][]=$obj;
												$proto65=array();
						$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto65["m_column"]=$obj;
$obj = new SQLGroupByItem($proto65);

$proto0["m_groupby"][]=$obj;
												$proto67=array();
						$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto67["m_column"]=$obj;
$obj = new SQLGroupByItem($proto67);

$proto0["m_groupby"][]=$obj;
												$proto69=array();
						$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto69["m_column"]=$obj;
$obj = new SQLGroupByItem($proto69);

$proto0["m_groupby"][]=$obj;
												$proto71=array();
						$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto71["m_column"]=$obj;
$obj = new SQLGroupByItem($proto71);

$proto0["m_groupby"][]=$obj;
												$proto73=array();
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto73["m_column"]=$obj;
$obj = new SQLGroupByItem($proto73);

$proto0["m_groupby"][]=$obj;
												$proto75=array();
						$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto75["m_column"]=$obj;
$obj = new SQLGroupByItem($proto75);

$proto0["m_groupby"][]=$obj;
												$proto77=array();
						$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto77["m_column"]=$obj;
$obj = new SQLGroupByItem($proto77);

$proto0["m_groupby"][]=$obj;
												$proto79=array();
						$obj = new SQLField(array(
	"m_strName" => "PriceLink",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto79["m_column"]=$obj;
$obj = new SQLGroupByItem($proto79);

$proto0["m_groupby"][]=$obj;
												$proto81=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Quantity*UnitPrice*-1"
));

$proto81["m_column"]=$obj;
$obj = new SQLGroupByItem($proto81);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto83=array();
						$obj = new SQLField(array(
	"m_strName" => "CurrentStock",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-issue-rebuilt"
));

$proto83["m_column"]=$obj;
$proto83["m_bAsc"] = 0;
$proto83["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto83);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="creategrn-issue-rebuilt";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_creategrn_issue_rebuilt = createSqlQuery_creategrn_issue_rebuilt();


	
					
;

																			

$tdatacreategrn_issue_rebuilt[".sqlquery"] = $queryData_creategrn_issue_rebuilt;

include_once(getabspath("include/creategrn_issue_rebuilt_events.php"));
$tableEvents["creategrn-issue-rebuilt"] = new eventclass_creategrn_issue_rebuilt;
$tdatacreategrn_issue_rebuilt[".hasEvents"] = true;

?>