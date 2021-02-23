<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacreategrn_disposal = array();
	$tdatacreategrn_disposal[".truncateText"] = true;
	$tdatacreategrn_disposal[".NumberOfChars"] = 80;
	$tdatacreategrn_disposal[".ShortName"] = "creategrn_disposal";
	$tdatacreategrn_disposal[".OwnerID"] = "";
	$tdatacreategrn_disposal[".OriginalTable"] = "creategrn";

//	field labels
$fieldLabelscreategrn_disposal = array();
$fieldToolTipscreategrn_disposal = array();
$pageTitlescreategrn_disposal = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscreategrn_disposal["English"] = array();
	$fieldToolTipscreategrn_disposal["English"] = array();
	$pageTitlescreategrn_disposal["English"] = array();
	$fieldLabelscreategrn_disposal["English"]["ItemCode"] = "Item Code";
	$fieldToolTipscreategrn_disposal["English"]["ItemCode"] = "";
	$fieldLabelscreategrn_disposal["English"]["Brand"] = "Brand";
	$fieldToolTipscreategrn_disposal["English"]["Brand"] = "";
	$fieldLabelscreategrn_disposal["English"]["Description"] = "Descr.";
	$fieldToolTipscreategrn_disposal["English"]["Description"] = "";
	$fieldLabelscreategrn_disposal["English"]["Supplier"] = "Supplier";
	$fieldToolTipscreategrn_disposal["English"]["Supplier"] = "";
	$fieldLabelscreategrn_disposal["English"]["Quantity"] = "Qty";
	$fieldToolTipscreategrn_disposal["English"]["Quantity"] = "";
	$fieldLabelscreategrn_disposal["English"]["RemovedFrom"] = "Vehicle";
	$fieldToolTipscreategrn_disposal["English"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_disposal["English"]["SystemDate"] = "Sys. Date";
	$fieldToolTipscreategrn_disposal["English"]["SystemDate"] = "";
	$fieldLabelscreategrn_disposal["English"]["EnteredBy"] = "Entered";
	$fieldToolTipscreategrn_disposal["English"]["EnteredBy"] = "";
	$fieldLabelscreategrn_disposal["English"]["ApprovedBy"] = "Edited By";
	$fieldToolTipscreategrn_disposal["English"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_disposal["English"]["Status"] = "Type";
	$fieldToolTipscreategrn_disposal["English"]["Status"] = "";
	$fieldLabelscreategrn_disposal["English"]["ID"] = "ID";
	$fieldToolTipscreategrn_disposal["English"]["ID"] = "";
	$fieldLabelscreategrn_disposal["English"]["RefNumber"] = "Ref No.";
	$fieldToolTipscreategrn_disposal["English"]["RefNumber"] = "";
	$fieldLabelscreategrn_disposal["English"]["Cost"] = "Value";
	$fieldToolTipscreategrn_disposal["English"]["Cost"] = "";
	$fieldLabelscreategrn_disposal["English"]["Fleet"] = "Fleet";
	$fieldToolTipscreategrn_disposal["English"]["Fleet"] = "";
	$fieldLabelscreategrn_disposal["English"]["GRNDate"] = "Date";
	$fieldToolTipscreategrn_disposal["English"]["GRNDate"] = "";
	$fieldLabelscreategrn_disposal["English"]["UnitPrice"] = "Rate";
	$fieldToolTipscreategrn_disposal["English"]["UnitPrice"] = "";
	$fieldLabelscreategrn_disposal["English"]["CurrentStock"] = "In-Stock";
	$fieldToolTipscreategrn_disposal["English"]["CurrentStock"] = "";
	$fieldLabelscreategrn_disposal["English"]["PriceLink"] = "Cost Code";
	$fieldToolTipscreategrn_disposal["English"]["PriceLink"] = "";
	if (count($fieldToolTipscreategrn_disposal["English"]))
		$tdatacreategrn_disposal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelscreategrn_disposal["Afrikaans"] = array();
	$fieldToolTipscreategrn_disposal["Afrikaans"] = array();
	$pageTitlescreategrn_disposal["Afrikaans"] = array();
	$fieldLabelscreategrn_disposal["Afrikaans"]["ID"] = "ID";
	$fieldToolTipscreategrn_disposal["Afrikaans"]["ID"] = "";
	$fieldLabelscreategrn_disposal["Afrikaans"]["ItemCode"] = "itemkode";
	$fieldToolTipscreategrn_disposal["Afrikaans"]["ItemCode"] = "";
	$fieldLabelscreategrn_disposal["Afrikaans"]["Brand"] = "Brand";
	$fieldToolTipscreategrn_disposal["Afrikaans"]["Brand"] = "";
	$fieldLabelscreategrn_disposal["Afrikaans"]["Description"] = "beskrywing";
	$fieldToolTipscreategrn_disposal["Afrikaans"]["Description"] = "";
	$fieldLabelscreategrn_disposal["Afrikaans"]["Supplier"] = "verskaffer";
	$fieldToolTipscreategrn_disposal["Afrikaans"]["Supplier"] = "";
	$fieldLabelscreategrn_disposal["Afrikaans"]["Quantity"] = "hoeveelheid";
	$fieldToolTipscreategrn_disposal["Afrikaans"]["Quantity"] = "";
	$fieldLabelscreategrn_disposal["Afrikaans"]["RemovedFrom"] = "voertuig";
	$fieldToolTipscreategrn_disposal["Afrikaans"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_disposal["Afrikaans"]["SystemDate"] = "stelsel Datum";
	$fieldToolTipscreategrn_disposal["Afrikaans"]["SystemDate"] = "";
	$fieldLabelscreategrn_disposal["Afrikaans"]["GRNDate"] = "datum";
	$fieldToolTipscreategrn_disposal["Afrikaans"]["GRNDate"] = "";
	$fieldLabelscreategrn_disposal["Afrikaans"]["EnteredBy"] = "ingevoer";
	$fieldToolTipscreategrn_disposal["Afrikaans"]["EnteredBy"] = "";
	$fieldLabelscreategrn_disposal["Afrikaans"]["ApprovedBy"] = "geredigeer deur";
	$fieldToolTipscreategrn_disposal["Afrikaans"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_disposal["Afrikaans"]["UnitPrice"] = "Koers";
	$fieldToolTipscreategrn_disposal["Afrikaans"]["UnitPrice"] = "";
	$fieldLabelscreategrn_disposal["Afrikaans"]["Status"] = "tipe";
	$fieldToolTipscreategrn_disposal["Afrikaans"]["Status"] = "";
	$fieldLabelscreategrn_disposal["Afrikaans"]["RefNumber"] = "Verwysing No.";
	$fieldToolTipscreategrn_disposal["Afrikaans"]["RefNumber"] = "";
	$fieldLabelscreategrn_disposal["Afrikaans"]["CurrentStock"] = "Huidige Stock";
	$fieldToolTipscreategrn_disposal["Afrikaans"]["CurrentStock"] = "";
	$fieldLabelscreategrn_disposal["Afrikaans"]["Fleet"] = "vloot";
	$fieldToolTipscreategrn_disposal["Afrikaans"]["Fleet"] = "";
	$fieldLabelscreategrn_disposal["Afrikaans"]["PriceLink"] = "koste Kode";
	$fieldToolTipscreategrn_disposal["Afrikaans"]["PriceLink"] = "";
	$fieldLabelscreategrn_disposal["Afrikaans"]["Cost"] = "waarde";
	$fieldToolTipscreategrn_disposal["Afrikaans"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_disposal["Afrikaans"]))
		$tdatacreategrn_disposal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelscreategrn_disposal["Arabic"] = array();
	$fieldToolTipscreategrn_disposal["Arabic"] = array();
	$pageTitlescreategrn_disposal["Arabic"] = array();
	$fieldLabelscreategrn_disposal["Arabic"]["ID"] = "???? ?????";
	$fieldToolTipscreategrn_disposal["Arabic"]["ID"] = "";
	$fieldLabelscreategrn_disposal["Arabic"]["ItemCode"] = "??? ?????";
	$fieldToolTipscreategrn_disposal["Arabic"]["ItemCode"] = "";
	$fieldLabelscreategrn_disposal["Arabic"]["Brand"] = "????? ??????";
	$fieldToolTipscreategrn_disposal["Arabic"]["Brand"] = "";
	$fieldLabelscreategrn_disposal["Arabic"]["Description"] = "???";
	$fieldToolTipscreategrn_disposal["Arabic"]["Description"] = "";
	$fieldLabelscreategrn_disposal["Arabic"]["Supplier"] = "??????";
	$fieldToolTipscreategrn_disposal["Arabic"]["Supplier"] = "";
	$fieldLabelscreategrn_disposal["Arabic"]["Quantity"] = "????";
	$fieldToolTipscreategrn_disposal["Arabic"]["Quantity"] = "";
	$fieldLabelscreategrn_disposal["Arabic"]["RemovedFrom"] = "?????";
	$fieldToolTipscreategrn_disposal["Arabic"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_disposal["Arabic"]["SystemDate"] = "????? ??????";
	$fieldToolTipscreategrn_disposal["Arabic"]["SystemDate"] = "";
	$fieldLabelscreategrn_disposal["Arabic"]["GRNDate"] = "?????";
	$fieldToolTipscreategrn_disposal["Arabic"]["GRNDate"] = "";
	$fieldLabelscreategrn_disposal["Arabic"]["EnteredBy"] = "???";
	$fieldToolTipscreategrn_disposal["Arabic"]["EnteredBy"] = "";
	$fieldLabelscreategrn_disposal["Arabic"]["ApprovedBy"] = "???? ??????";
	$fieldToolTipscreategrn_disposal["Arabic"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_disposal["Arabic"]["UnitPrice"] = "????";
	$fieldToolTipscreategrn_disposal["Arabic"]["UnitPrice"] = "";
	$fieldLabelscreategrn_disposal["Arabic"]["Status"] = "????";
	$fieldToolTipscreategrn_disposal["Arabic"]["Status"] = "";
	$fieldLabelscreategrn_disposal["Arabic"]["RefNumber"] = "??? ??????.";
	$fieldToolTipscreategrn_disposal["Arabic"]["RefNumber"] = "";
	$fieldLabelscreategrn_disposal["Arabic"]["CurrentStock"] = "??????? ??????";
	$fieldToolTipscreategrn_disposal["Arabic"]["CurrentStock"] = "";
	$fieldLabelscreategrn_disposal["Arabic"]["Fleet"] = "?????";
	$fieldToolTipscreategrn_disposal["Arabic"]["Fleet"] = "";
	$fieldLabelscreategrn_disposal["Arabic"]["PriceLink"] = "??? ???????";
	$fieldToolTipscreategrn_disposal["Arabic"]["PriceLink"] = "";
	$fieldLabelscreategrn_disposal["Arabic"]["Cost"] = "??????";
	$fieldToolTipscreategrn_disposal["Arabic"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_disposal["Arabic"]))
		$tdatacreategrn_disposal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelscreategrn_disposal["Chinese"] = array();
	$fieldToolTipscreategrn_disposal["Chinese"] = array();
	$pageTitlescreategrn_disposal["Chinese"] = array();
	$fieldLabelscreategrn_disposal["Chinese"]["ID"] = "ID";
	$fieldToolTipscreategrn_disposal["Chinese"]["ID"] = "";
	$fieldLabelscreategrn_disposal["Chinese"]["ItemCode"] = "????";
	$fieldToolTipscreategrn_disposal["Chinese"]["ItemCode"] = "";
	$fieldLabelscreategrn_disposal["Chinese"]["Brand"] = "?";
	$fieldToolTipscreategrn_disposal["Chinese"]["Brand"] = "";
	$fieldLabelscreategrn_disposal["Chinese"]["Description"] = "??";
	$fieldToolTipscreategrn_disposal["Chinese"]["Description"] = "";
	$fieldLabelscreategrn_disposal["Chinese"]["Supplier"] = "???";
	$fieldToolTipscreategrn_disposal["Chinese"]["Supplier"] = "";
	$fieldLabelscreategrn_disposal["Chinese"]["Quantity"] = "??";
	$fieldToolTipscreategrn_disposal["Chinese"]["Quantity"] = "";
	$fieldLabelscreategrn_disposal["Chinese"]["RemovedFrom"] = "??";
	$fieldToolTipscreategrn_disposal["Chinese"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_disposal["Chinese"]["SystemDate"] = "????";
	$fieldToolTipscreategrn_disposal["Chinese"]["SystemDate"] = "";
	$fieldLabelscreategrn_disposal["Chinese"]["GRNDate"] = "??";
	$fieldToolTipscreategrn_disposal["Chinese"]["GRNDate"] = "";
	$fieldLabelscreategrn_disposal["Chinese"]["EnteredBy"] = "??";
	$fieldToolTipscreategrn_disposal["Chinese"]["EnteredBy"] = "";
	$fieldLabelscreategrn_disposal["Chinese"]["ApprovedBy"] = "??";
	$fieldToolTipscreategrn_disposal["Chinese"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_disposal["Chinese"]["UnitPrice"] = "?";
	$fieldToolTipscreategrn_disposal["Chinese"]["UnitPrice"] = "";
	$fieldLabelscreategrn_disposal["Chinese"]["Status"] = "??";
	$fieldToolTipscreategrn_disposal["Chinese"]["Status"] = "";
	$fieldLabelscreategrn_disposal["Chinese"]["RefNumber"] = "?????";
	$fieldToolTipscreategrn_disposal["Chinese"]["RefNumber"] = "";
	$fieldLabelscreategrn_disposal["Chinese"]["CurrentStock"] = "????";
	$fieldToolTipscreategrn_disposal["Chinese"]["CurrentStock"] = "";
	$fieldLabelscreategrn_disposal["Chinese"]["Fleet"] = "??";
	$fieldToolTipscreategrn_disposal["Chinese"]["Fleet"] = "";
	$fieldLabelscreategrn_disposal["Chinese"]["PriceLink"] = "????";
	$fieldToolTipscreategrn_disposal["Chinese"]["PriceLink"] = "";
	$fieldLabelscreategrn_disposal["Chinese"]["Cost"] = "?";
	$fieldToolTipscreategrn_disposal["Chinese"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_disposal["Chinese"]))
		$tdatacreategrn_disposal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelscreategrn_disposal["French"] = array();
	$fieldToolTipscreategrn_disposal["French"] = array();
	$pageTitlescreategrn_disposal["French"] = array();
	$fieldLabelscreategrn_disposal["French"]["ID"] = "ID";
	$fieldToolTipscreategrn_disposal["French"]["ID"] = "";
	$fieldLabelscreategrn_disposal["French"]["ItemCode"] = "Code de l'article";
	$fieldToolTipscreategrn_disposal["French"]["ItemCode"] = "";
	$fieldLabelscreategrn_disposal["French"]["Brand"] = "Marque";
	$fieldToolTipscreategrn_disposal["French"]["Brand"] = "";
	$fieldLabelscreategrn_disposal["French"]["Description"] = "La description";
	$fieldToolTipscreategrn_disposal["French"]["Description"] = "";
	$fieldLabelscreategrn_disposal["French"]["Supplier"] = "Fournisseur";
	$fieldToolTipscreategrn_disposal["French"]["Supplier"] = "";
	$fieldLabelscreategrn_disposal["French"]["Quantity"] = "Quantité";
	$fieldToolTipscreategrn_disposal["French"]["Quantity"] = "";
	$fieldLabelscreategrn_disposal["French"]["RemovedFrom"] = "Véhicule";
	$fieldToolTipscreategrn_disposal["French"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_disposal["French"]["SystemDate"] = "Date du système";
	$fieldToolTipscreategrn_disposal["French"]["SystemDate"] = "";
	$fieldLabelscreategrn_disposal["French"]["GRNDate"] = "date";
	$fieldToolTipscreategrn_disposal["French"]["GRNDate"] = "";
	$fieldLabelscreategrn_disposal["French"]["EnteredBy"] = "Entré";
	$fieldToolTipscreategrn_disposal["French"]["EnteredBy"] = "";
	$fieldLabelscreategrn_disposal["French"]["ApprovedBy"] = "Édité par";
	$fieldToolTipscreategrn_disposal["French"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_disposal["French"]["UnitPrice"] = "Taux";
	$fieldToolTipscreategrn_disposal["French"]["UnitPrice"] = "";
	$fieldLabelscreategrn_disposal["French"]["Status"] = "Type";
	$fieldToolTipscreategrn_disposal["French"]["Status"] = "";
	$fieldLabelscreategrn_disposal["French"]["RefNumber"] = "Numéro de référence.";
	$fieldToolTipscreategrn_disposal["French"]["RefNumber"] = "";
	$fieldLabelscreategrn_disposal["French"]["CurrentStock"] = "Stock actuel";
	$fieldToolTipscreategrn_disposal["French"]["CurrentStock"] = "";
	$fieldLabelscreategrn_disposal["French"]["Fleet"] = "Flotte";
	$fieldToolTipscreategrn_disposal["French"]["Fleet"] = "";
	$fieldLabelscreategrn_disposal["French"]["PriceLink"] = "Code de Coût";
	$fieldToolTipscreategrn_disposal["French"]["PriceLink"] = "";
	$fieldLabelscreategrn_disposal["French"]["Cost"] = "Valeur";
	$fieldToolTipscreategrn_disposal["French"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_disposal["French"]))
		$tdatacreategrn_disposal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelscreategrn_disposal["German"] = array();
	$fieldToolTipscreategrn_disposal["German"] = array();
	$pageTitlescreategrn_disposal["German"] = array();
	$fieldLabelscreategrn_disposal["German"]["ID"] = "ICH WÜRDE";
	$fieldToolTipscreategrn_disposal["German"]["ID"] = "";
	$fieldLabelscreategrn_disposal["German"]["ItemCode"] = "Produktcode";
	$fieldToolTipscreategrn_disposal["German"]["ItemCode"] = "";
	$fieldLabelscreategrn_disposal["German"]["Brand"] = "Marke";
	$fieldToolTipscreategrn_disposal["German"]["Brand"] = "";
	$fieldLabelscreategrn_disposal["German"]["Description"] = "Beschreibung";
	$fieldToolTipscreategrn_disposal["German"]["Description"] = "";
	$fieldLabelscreategrn_disposal["German"]["Supplier"] = "Lieferant";
	$fieldToolTipscreategrn_disposal["German"]["Supplier"] = "";
	$fieldLabelscreategrn_disposal["German"]["Quantity"] = "Menge";
	$fieldToolTipscreategrn_disposal["German"]["Quantity"] = "";
	$fieldLabelscreategrn_disposal["German"]["RemovedFrom"] = "Fahrzeug";
	$fieldToolTipscreategrn_disposal["German"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_disposal["German"]["SystemDate"] = "Systemdatum";
	$fieldToolTipscreategrn_disposal["German"]["SystemDate"] = "";
	$fieldLabelscreategrn_disposal["German"]["GRNDate"] = "Datum";
	$fieldToolTipscreategrn_disposal["German"]["GRNDate"] = "";
	$fieldLabelscreategrn_disposal["German"]["EnteredBy"] = "Eingegeben";
	$fieldToolTipscreategrn_disposal["German"]["EnteredBy"] = "";
	$fieldLabelscreategrn_disposal["German"]["ApprovedBy"] = "Bearbeitet von";
	$fieldToolTipscreategrn_disposal["German"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_disposal["German"]["UnitPrice"] = "Preis";
	$fieldToolTipscreategrn_disposal["German"]["UnitPrice"] = "";
	$fieldLabelscreategrn_disposal["German"]["Status"] = "Art";
	$fieldToolTipscreategrn_disposal["German"]["Status"] = "";
	$fieldLabelscreategrn_disposal["German"]["RefNumber"] = "Referenznummer.";
	$fieldToolTipscreategrn_disposal["German"]["RefNumber"] = "";
	$fieldLabelscreategrn_disposal["German"]["CurrentStock"] = "Aktueller Lagerbestand";
	$fieldToolTipscreategrn_disposal["German"]["CurrentStock"] = "";
	$fieldLabelscreategrn_disposal["German"]["Fleet"] = "Flotte";
	$fieldToolTipscreategrn_disposal["German"]["Fleet"] = "";
	$fieldLabelscreategrn_disposal["German"]["PriceLink"] = "Kostencode";
	$fieldToolTipscreategrn_disposal["German"]["PriceLink"] = "";
	$fieldLabelscreategrn_disposal["German"]["Cost"] = "Wert";
	$fieldToolTipscreategrn_disposal["German"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_disposal["German"]))
		$tdatacreategrn_disposal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelscreategrn_disposal["Italian"] = array();
	$fieldToolTipscreategrn_disposal["Italian"] = array();
	$pageTitlescreategrn_disposal["Italian"] = array();
	$fieldLabelscreategrn_disposal["Italian"]["ID"] = "ID";
	$fieldToolTipscreategrn_disposal["Italian"]["ID"] = "";
	$fieldLabelscreategrn_disposal["Italian"]["ItemCode"] = "Codice articolo";
	$fieldToolTipscreategrn_disposal["Italian"]["ItemCode"] = "";
	$fieldLabelscreategrn_disposal["Italian"]["Brand"] = "Marca";
	$fieldToolTipscreategrn_disposal["Italian"]["Brand"] = "";
	$fieldLabelscreategrn_disposal["Italian"]["Description"] = "Descrizione";
	$fieldToolTipscreategrn_disposal["Italian"]["Description"] = "";
	$fieldLabelscreategrn_disposal["Italian"]["Supplier"] = "Fornitore";
	$fieldToolTipscreategrn_disposal["Italian"]["Supplier"] = "";
	$fieldLabelscreategrn_disposal["Italian"]["Quantity"] = "Quantità";
	$fieldToolTipscreategrn_disposal["Italian"]["Quantity"] = "";
	$fieldLabelscreategrn_disposal["Italian"]["RemovedFrom"] = "Veicolo";
	$fieldToolTipscreategrn_disposal["Italian"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_disposal["Italian"]["SystemDate"] = "Data di sistema";
	$fieldToolTipscreategrn_disposal["Italian"]["SystemDate"] = "";
	$fieldLabelscreategrn_disposal["Italian"]["GRNDate"] = "Data";
	$fieldToolTipscreategrn_disposal["Italian"]["GRNDate"] = "";
	$fieldLabelscreategrn_disposal["Italian"]["EnteredBy"] = "inserito";
	$fieldToolTipscreategrn_disposal["Italian"]["EnteredBy"] = "";
	$fieldLabelscreategrn_disposal["Italian"]["ApprovedBy"] = "A cura di";
	$fieldToolTipscreategrn_disposal["Italian"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_disposal["Italian"]["UnitPrice"] = "tasso";
	$fieldToolTipscreategrn_disposal["Italian"]["UnitPrice"] = "";
	$fieldLabelscreategrn_disposal["Italian"]["Status"] = "Digitare";
	$fieldToolTipscreategrn_disposal["Italian"]["Status"] = "";
	$fieldLabelscreategrn_disposal["Italian"]["RefNumber"] = "Riferimento No.";
	$fieldToolTipscreategrn_disposal["Italian"]["RefNumber"] = "";
	$fieldLabelscreategrn_disposal["Italian"]["CurrentStock"] = "Scorta attuale";
	$fieldToolTipscreategrn_disposal["Italian"]["CurrentStock"] = "";
	$fieldLabelscreategrn_disposal["Italian"]["Fleet"] = "Flotta";
	$fieldToolTipscreategrn_disposal["Italian"]["Fleet"] = "";
	$fieldLabelscreategrn_disposal["Italian"]["PriceLink"] = "Codice costo";
	$fieldToolTipscreategrn_disposal["Italian"]["PriceLink"] = "";
	$fieldLabelscreategrn_disposal["Italian"]["Cost"] = "Valore";
	$fieldToolTipscreategrn_disposal["Italian"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_disposal["Italian"]))
		$tdatacreategrn_disposal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelscreategrn_disposal["Russian"] = array();
	$fieldToolTipscreategrn_disposal["Russian"] = array();
	$pageTitlescreategrn_disposal["Russian"] = array();
	$fieldLabelscreategrn_disposal["Russian"]["ID"] = "? ??";
	$fieldToolTipscreategrn_disposal["Russian"]["ID"] = "";
	$fieldLabelscreategrn_disposal["Russian"]["ItemCode"] = "??? ??????";
	$fieldToolTipscreategrn_disposal["Russian"]["ItemCode"] = "";
	$fieldLabelscreategrn_disposal["Russian"]["Brand"] = "?????";
	$fieldToolTipscreategrn_disposal["Russian"]["Brand"] = "";
	$fieldLabelscreategrn_disposal["Russian"]["Description"] = "????????";
	$fieldToolTipscreategrn_disposal["Russian"]["Description"] = "";
	$fieldLabelscreategrn_disposal["Russian"]["Supplier"] = "?????????";
	$fieldToolTipscreategrn_disposal["Russian"]["Supplier"] = "";
	$fieldLabelscreategrn_disposal["Russian"]["Quantity"] = "??????????";
	$fieldToolTipscreategrn_disposal["Russian"]["Quantity"] = "";
	$fieldLabelscreategrn_disposal["Russian"]["RemovedFrom"] = "???????? ????????????";
	$fieldToolTipscreategrn_disposal["Russian"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_disposal["Russian"]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn_disposal["Russian"]["SystemDate"] = "";
	$fieldLabelscreategrn_disposal["Russian"]["GRNDate"] = "????";
	$fieldToolTipscreategrn_disposal["Russian"]["GRNDate"] = "";
	$fieldLabelscreategrn_disposal["Russian"]["EnteredBy"] = "?????";
	$fieldToolTipscreategrn_disposal["Russian"]["EnteredBy"] = "";
	$fieldLabelscreategrn_disposal["Russian"]["ApprovedBy"] = "???????????????";
	$fieldToolTipscreategrn_disposal["Russian"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_disposal["Russian"]["UnitPrice"] = "??????";
	$fieldToolTipscreategrn_disposal["Russian"]["UnitPrice"] = "";
	$fieldLabelscreategrn_disposal["Russian"]["Status"] = "???";
	$fieldToolTipscreategrn_disposal["Russian"]["Status"] = "";
	$fieldLabelscreategrn_disposal["Russian"]["RefNumber"] = "?????? ?";
	$fieldToolTipscreategrn_disposal["Russian"]["RefNumber"] = "";
	$fieldLabelscreategrn_disposal["Russian"]["CurrentStock"] = "??????? ?? ??????";
	$fieldToolTipscreategrn_disposal["Russian"]["CurrentStock"] = "";
	$fieldLabelscreategrn_disposal["Russian"]["Fleet"] = "????";
	$fieldToolTipscreategrn_disposal["Russian"]["Fleet"] = "";
	$fieldLabelscreategrn_disposal["Russian"]["PriceLink"] = "??? ?????????";
	$fieldToolTipscreategrn_disposal["Russian"]["PriceLink"] = "";
	$fieldLabelscreategrn_disposal["Russian"]["Cost"] = "?????????";
	$fieldToolTipscreategrn_disposal["Russian"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_disposal["Russian"]))
		$tdatacreategrn_disposal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscreategrn_disposal["Spanish"] = array();
	$fieldToolTipscreategrn_disposal["Spanish"] = array();
	$pageTitlescreategrn_disposal["Spanish"] = array();
	$fieldLabelscreategrn_disposal["Spanish"]["ID"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipscreategrn_disposal["Spanish"]["ID"] = "";
	$fieldLabelscreategrn_disposal["Spanish"]["ItemCode"] = "Código del objeto";
	$fieldToolTipscreategrn_disposal["Spanish"]["ItemCode"] = "";
	$fieldLabelscreategrn_disposal["Spanish"]["Brand"] = "Marca";
	$fieldToolTipscreategrn_disposal["Spanish"]["Brand"] = "";
	$fieldLabelscreategrn_disposal["Spanish"]["Description"] = "Descripción";
	$fieldToolTipscreategrn_disposal["Spanish"]["Description"] = "";
	$fieldLabelscreategrn_disposal["Spanish"]["Supplier"] = "Proveedor";
	$fieldToolTipscreategrn_disposal["Spanish"]["Supplier"] = "";
	$fieldLabelscreategrn_disposal["Spanish"]["Quantity"] = "Cantidad";
	$fieldToolTipscreategrn_disposal["Spanish"]["Quantity"] = "";
	$fieldLabelscreategrn_disposal["Spanish"]["RemovedFrom"] = "Vehículo";
	$fieldToolTipscreategrn_disposal["Spanish"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_disposal["Spanish"]["SystemDate"] = "Fecha del sistema";
	$fieldToolTipscreategrn_disposal["Spanish"]["SystemDate"] = "";
	$fieldLabelscreategrn_disposal["Spanish"]["GRNDate"] = "Fecha";
	$fieldToolTipscreategrn_disposal["Spanish"]["GRNDate"] = "";
	$fieldLabelscreategrn_disposal["Spanish"]["EnteredBy"] = "Ingresó";
	$fieldToolTipscreategrn_disposal["Spanish"]["EnteredBy"] = "";
	$fieldLabelscreategrn_disposal["Spanish"]["ApprovedBy"] = "Editado por";
	$fieldToolTipscreategrn_disposal["Spanish"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_disposal["Spanish"]["UnitPrice"] = "Tarifa";
	$fieldToolTipscreategrn_disposal["Spanish"]["UnitPrice"] = "";
	$fieldLabelscreategrn_disposal["Spanish"]["Status"] = "Tipo";
	$fieldToolTipscreategrn_disposal["Spanish"]["Status"] = "";
	$fieldLabelscreategrn_disposal["Spanish"]["RefNumber"] = "Numero de referencia.";
	$fieldToolTipscreategrn_disposal["Spanish"]["RefNumber"] = "";
	$fieldLabelscreategrn_disposal["Spanish"]["CurrentStock"] = "Acciones actuales";
	$fieldToolTipscreategrn_disposal["Spanish"]["CurrentStock"] = "";
	$fieldLabelscreategrn_disposal["Spanish"]["Fleet"] = "Flota";
	$fieldToolTipscreategrn_disposal["Spanish"]["Fleet"] = "";
	$fieldLabelscreategrn_disposal["Spanish"]["PriceLink"] = "Código de costo";
	$fieldToolTipscreategrn_disposal["Spanish"]["PriceLink"] = "";
	$fieldLabelscreategrn_disposal["Spanish"]["Cost"] = "Valor";
	$fieldToolTipscreategrn_disposal["Spanish"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_disposal["Spanish"]))
		$tdatacreategrn_disposal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscreategrn_disposal[""] = array();
	$fieldToolTipscreategrn_disposal[""] = array();
	$pageTitlescreategrn_disposal[""] = array();
	if (count($fieldToolTipscreategrn_disposal[""]))
		$tdatacreategrn_disposal[".isUseToolTips"] = true;
}


	$tdatacreategrn_disposal[".NCSearch"] = true;



$tdatacreategrn_disposal[".shortTableName"] = "creategrn_disposal";
$tdatacreategrn_disposal[".nSecOptions"] = 0;
$tdatacreategrn_disposal[".recsPerRowPrint"] = 1;
$tdatacreategrn_disposal[".mainTableOwnerID"] = "";
$tdatacreategrn_disposal[".moveNext"] = 1;
$tdatacreategrn_disposal[".entityType"] = 1;

$tdatacreategrn_disposal[".strOriginalTableName"] = "creategrn";

		 



$tdatacreategrn_disposal[".showAddInPopup"] = false;

$tdatacreategrn_disposal[".showEditInPopup"] = false;

$tdatacreategrn_disposal[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacreategrn_disposal[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacreategrn_disposal[".fieldsForRegister"] = array();

	$tdatacreategrn_disposal[".listAjax"] = true;

	$tdatacreategrn_disposal[".audit"] = false;

	$tdatacreategrn_disposal[".locking"] = false;

$tdatacreategrn_disposal[".edit"] = true;
$tdatacreategrn_disposal[".afterEditAction"] = 1;
$tdatacreategrn_disposal[".closePopupAfterEdit"] = 1;
$tdatacreategrn_disposal[".afterEditActionDetTable"] = "Detail tables not found!";

$tdatacreategrn_disposal[".add"] = true;
$tdatacreategrn_disposal[".afterAddAction"] = 1;
$tdatacreategrn_disposal[".closePopupAfterAdd"] = 1;
$tdatacreategrn_disposal[".afterAddActionDetTable"] = "Detail tables not found!";

$tdatacreategrn_disposal[".list"] = true;




$tdatacreategrn_disposal[".view"] = true;

$tdatacreategrn_disposal[".import"] = true;

$tdatacreategrn_disposal[".exportTo"] = true;

$tdatacreategrn_disposal[".printFriendly"] = true;

$tdatacreategrn_disposal[".delete"] = true;

$tdatacreategrn_disposal[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacreategrn_disposal[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatacreategrn_disposal[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatacreategrn_disposal[".searchSaving"] = false;
//

$tdatacreategrn_disposal[".showSearchPanel"] = true;
		$tdatacreategrn_disposal[".flexibleSearch"] = true;

$tdatacreategrn_disposal[".isUseAjaxSuggest"] = true;

$tdatacreategrn_disposal[".rowHighlite"] = true;



$tdatacreategrn_disposal[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacreategrn_disposal[".isUseTimeForSearch"] = false;





$tdatacreategrn_disposal[".allSearchFields"] = array();
$tdatacreategrn_disposal[".filterFields"] = array();
$tdatacreategrn_disposal[".requiredSearchFields"] = array();

$tdatacreategrn_disposal[".allSearchFields"][] = "Status";
	$tdatacreategrn_disposal[".allSearchFields"][] = "Fleet";
	$tdatacreategrn_disposal[".allSearchFields"][] = "GRNDate";
	$tdatacreategrn_disposal[".allSearchFields"][] = "ItemCode";
	$tdatacreategrn_disposal[".allSearchFields"][] = "Quantity";
	$tdatacreategrn_disposal[".allSearchFields"][] = "Brand";
	$tdatacreategrn_disposal[".allSearchFields"][] = "Description";
	$tdatacreategrn_disposal[".allSearchFields"][] = "Supplier";
	$tdatacreategrn_disposal[".allSearchFields"][] = "UnitPrice";
	$tdatacreategrn_disposal[".allSearchFields"][] = "Cost";
	$tdatacreategrn_disposal[".allSearchFields"][] = "CurrentStock";
	$tdatacreategrn_disposal[".allSearchFields"][] = "EnteredBy";
	$tdatacreategrn_disposal[".allSearchFields"][] = "SystemDate";
	

$tdatacreategrn_disposal[".googleLikeFields"] = array();
$tdatacreategrn_disposal[".googleLikeFields"][] = "ID";
$tdatacreategrn_disposal[".googleLikeFields"][] = "ItemCode";
$tdatacreategrn_disposal[".googleLikeFields"][] = "Brand";
$tdatacreategrn_disposal[".googleLikeFields"][] = "Description";
$tdatacreategrn_disposal[".googleLikeFields"][] = "Supplier";
$tdatacreategrn_disposal[".googleLikeFields"][] = "Quantity";
$tdatacreategrn_disposal[".googleLikeFields"][] = "RemovedFrom";
$tdatacreategrn_disposal[".googleLikeFields"][] = "SystemDate";
$tdatacreategrn_disposal[".googleLikeFields"][] = "GRNDate";
$tdatacreategrn_disposal[".googleLikeFields"][] = "EnteredBy";
$tdatacreategrn_disposal[".googleLikeFields"][] = "ApprovedBy";
$tdatacreategrn_disposal[".googleLikeFields"][] = "UnitPrice";
$tdatacreategrn_disposal[".googleLikeFields"][] = "Status";
$tdatacreategrn_disposal[".googleLikeFields"][] = "RefNumber";
$tdatacreategrn_disposal[".googleLikeFields"][] = "CurrentStock";
$tdatacreategrn_disposal[".googleLikeFields"][] = "Fleet";
$tdatacreategrn_disposal[".googleLikeFields"][] = "PriceLink";
$tdatacreategrn_disposal[".googleLikeFields"][] = "Cost";


$tdatacreategrn_disposal[".advSearchFields"] = array();
$tdatacreategrn_disposal[".advSearchFields"][] = "Status";
$tdatacreategrn_disposal[".advSearchFields"][] = "Fleet";
$tdatacreategrn_disposal[".advSearchFields"][] = "GRNDate";
$tdatacreategrn_disposal[".advSearchFields"][] = "ItemCode";
$tdatacreategrn_disposal[".advSearchFields"][] = "Quantity";
$tdatacreategrn_disposal[".advSearchFields"][] = "Brand";
$tdatacreategrn_disposal[".advSearchFields"][] = "Description";
$tdatacreategrn_disposal[".advSearchFields"][] = "Supplier";
$tdatacreategrn_disposal[".advSearchFields"][] = "UnitPrice";
$tdatacreategrn_disposal[".advSearchFields"][] = "Cost";
$tdatacreategrn_disposal[".advSearchFields"][] = "CurrentStock";
$tdatacreategrn_disposal[".advSearchFields"][] = "EnteredBy";
$tdatacreategrn_disposal[".advSearchFields"][] = "SystemDate";

$tdatacreategrn_disposal[".tableType"] = "list";

$tdatacreategrn_disposal[".printerPageOrientation"] = 0;
$tdatacreategrn_disposal[".nPrinterPageScale"] = 100;

$tdatacreategrn_disposal[".nPrinterSplitRecords"] = 40;

$tdatacreategrn_disposal[".nPrinterPDFSplitRecords"] = 40;



$tdatacreategrn_disposal[".geocodingEnabled"] = false;





$tdatacreategrn_disposal[".listGridLayout"] = 3;


$tdatacreategrn_disposal[".isResizeColumns"] = true;



// view page pdf
$tdatacreategrn_disposal[".isViewPagePDF"] = true;
$tdatacreategrn_disposal[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatacreategrn_disposal[".isPrinterPagePDF"] = true;
$tdatacreategrn_disposal[".nPrinterPagePDFScale"] = 100;

$tdatacreategrn_disposal[".totalsFields"] = array();
$tdatacreategrn_disposal[".totalsFields"][] = array(
	"fName" => "Cost",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatacreategrn_disposal[".pageSize"] = 20;

$tdatacreategrn_disposal[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY CurrentStock DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacreategrn_disposal[".strOrderBy"] = $tstrOrderBy;

$tdatacreategrn_disposal[".orderindexes"] = array();
$tdatacreategrn_disposal[".orderindexes"][] = array(15, (0 ? "ASC" : "DESC"), "CurrentStock");

$tdatacreategrn_disposal[".sqlHead"] = "SELECT ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  SUM(CurrentStock) AS CurrentStock,  Fleet,  PriceLink,  Quantity*UnitPrice*-1 AS Cost";
$tdatacreategrn_disposal[".sqlFrom"] = "FROM creategrn";
$tdatacreategrn_disposal[".sqlWhereExpr"] = "Status =\"Disposal\"";
$tdatacreategrn_disposal[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatacreategrn_disposal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacreategrn_disposal[".arrGroupsPerPage"] = $arrGPP;

$tdatacreategrn_disposal[".highlightSearchResults"] = true;

$tableKeyscreategrn_disposal = array();
$tableKeyscreategrn_disposal[] = "ID";
$tdatacreategrn_disposal[".Keys"] = $tableKeyscreategrn_disposal;

$tdatacreategrn_disposal[".listFields"] = array();
$tdatacreategrn_disposal[".listFields"][] = "ID";
$tdatacreategrn_disposal[".listFields"][] = "Status";
$tdatacreategrn_disposal[".listFields"][] = "Fleet";
$tdatacreategrn_disposal[".listFields"][] = "GRNDate";
$tdatacreategrn_disposal[".listFields"][] = "ItemCode";
$tdatacreategrn_disposal[".listFields"][] = "Brand";
$tdatacreategrn_disposal[".listFields"][] = "Description";
$tdatacreategrn_disposal[".listFields"][] = "Supplier";
$tdatacreategrn_disposal[".listFields"][] = "Quantity";
$tdatacreategrn_disposal[".listFields"][] = "UnitPrice";
$tdatacreategrn_disposal[".listFields"][] = "Cost";
$tdatacreategrn_disposal[".listFields"][] = "EnteredBy";

$tdatacreategrn_disposal[".hideMobileList"] = array();


$tdatacreategrn_disposal[".viewFields"] = array();
$tdatacreategrn_disposal[".viewFields"][] = "ID";
$tdatacreategrn_disposal[".viewFields"][] = "Status";
$tdatacreategrn_disposal[".viewFields"][] = "Fleet";
$tdatacreategrn_disposal[".viewFields"][] = "GRNDate";
$tdatacreategrn_disposal[".viewFields"][] = "ItemCode";
$tdatacreategrn_disposal[".viewFields"][] = "CurrentStock";
$tdatacreategrn_disposal[".viewFields"][] = "Quantity";
$tdatacreategrn_disposal[".viewFields"][] = "Brand";
$tdatacreategrn_disposal[".viewFields"][] = "Description";
$tdatacreategrn_disposal[".viewFields"][] = "Supplier";
$tdatacreategrn_disposal[".viewFields"][] = "UnitPrice";
$tdatacreategrn_disposal[".viewFields"][] = "Cost";
$tdatacreategrn_disposal[".viewFields"][] = "SystemDate";
$tdatacreategrn_disposal[".viewFields"][] = "EnteredBy";
$tdatacreategrn_disposal[".viewFields"][] = "ApprovedBy";

$tdatacreategrn_disposal[".addFields"] = array();
$tdatacreategrn_disposal[".addFields"][] = "Status";
$tdatacreategrn_disposal[".addFields"][] = "Fleet";
$tdatacreategrn_disposal[".addFields"][] = "GRNDate";
$tdatacreategrn_disposal[".addFields"][] = "ItemCode";
$tdatacreategrn_disposal[".addFields"][] = "Quantity";
$tdatacreategrn_disposal[".addFields"][] = "UnitPrice";
$tdatacreategrn_disposal[".addFields"][] = "Brand";
$tdatacreategrn_disposal[".addFields"][] = "Description";
$tdatacreategrn_disposal[".addFields"][] = "Supplier";
$tdatacreategrn_disposal[".addFields"][] = "Cost";
$tdatacreategrn_disposal[".addFields"][] = "EnteredBy";
$tdatacreategrn_disposal[".addFields"][] = "CurrentStock";
$tdatacreategrn_disposal[".addFields"][] = "SystemDate";

$tdatacreategrn_disposal[".masterListFields"] = array();
$tdatacreategrn_disposal[".masterListFields"][] = "ID";
$tdatacreategrn_disposal[".masterListFields"][] = "Status";
$tdatacreategrn_disposal[".masterListFields"][] = "Fleet";
$tdatacreategrn_disposal[".masterListFields"][] = "RemovedFrom";
$tdatacreategrn_disposal[".masterListFields"][] = "RefNumber";
$tdatacreategrn_disposal[".masterListFields"][] = "GRNDate";
$tdatacreategrn_disposal[".masterListFields"][] = "ItemCode";
$tdatacreategrn_disposal[".masterListFields"][] = "Quantity";
$tdatacreategrn_disposal[".masterListFields"][] = "PriceLink";
$tdatacreategrn_disposal[".masterListFields"][] = "Brand";
$tdatacreategrn_disposal[".masterListFields"][] = "Description";
$tdatacreategrn_disposal[".masterListFields"][] = "Supplier";
$tdatacreategrn_disposal[".masterListFields"][] = "UnitPrice";
$tdatacreategrn_disposal[".masterListFields"][] = "Cost";
$tdatacreategrn_disposal[".masterListFields"][] = "ApprovedBy";
$tdatacreategrn_disposal[".masterListFields"][] = "EnteredBy";
$tdatacreategrn_disposal[".masterListFields"][] = "CurrentStock";
$tdatacreategrn_disposal[".masterListFields"][] = "SystemDate";

$tdatacreategrn_disposal[".inlineAddFields"] = array();

$tdatacreategrn_disposal[".editFields"] = array();
$tdatacreategrn_disposal[".editFields"][] = "Status";
$tdatacreategrn_disposal[".editFields"][] = "Fleet";
$tdatacreategrn_disposal[".editFields"][] = "GRNDate";
$tdatacreategrn_disposal[".editFields"][] = "ItemCode";
$tdatacreategrn_disposal[".editFields"][] = "Quantity";
$tdatacreategrn_disposal[".editFields"][] = "Brand";
$tdatacreategrn_disposal[".editFields"][] = "Description";
$tdatacreategrn_disposal[".editFields"][] = "Supplier";
$tdatacreategrn_disposal[".editFields"][] = "UnitPrice";
$tdatacreategrn_disposal[".editFields"][] = "Cost";
$tdatacreategrn_disposal[".editFields"][] = "CurrentStock";
$tdatacreategrn_disposal[".editFields"][] = "SystemDate";
$tdatacreategrn_disposal[".editFields"][] = "EnteredBy";
$tdatacreategrn_disposal[".editFields"][] = "ApprovedBy";

$tdatacreategrn_disposal[".inlineEditFields"] = array();

$tdatacreategrn_disposal[".updateSelectedFields"] = array();
$tdatacreategrn_disposal[".updateSelectedFields"][] = "Status";
$tdatacreategrn_disposal[".updateSelectedFields"][] = "Fleet";
$tdatacreategrn_disposal[".updateSelectedFields"][] = "GRNDate";
$tdatacreategrn_disposal[".updateSelectedFields"][] = "ItemCode";
$tdatacreategrn_disposal[".updateSelectedFields"][] = "Quantity";
$tdatacreategrn_disposal[".updateSelectedFields"][] = "Brand";
$tdatacreategrn_disposal[".updateSelectedFields"][] = "Description";
$tdatacreategrn_disposal[".updateSelectedFields"][] = "Supplier";
$tdatacreategrn_disposal[".updateSelectedFields"][] = "UnitPrice";
$tdatacreategrn_disposal[".updateSelectedFields"][] = "Cost";
$tdatacreategrn_disposal[".updateSelectedFields"][] = "CurrentStock";
$tdatacreategrn_disposal[".updateSelectedFields"][] = "SystemDate";
$tdatacreategrn_disposal[".updateSelectedFields"][] = "EnteredBy";
$tdatacreategrn_disposal[".updateSelectedFields"][] = "ApprovedBy";


$tdatacreategrn_disposal[".exportFields"] = array();
$tdatacreategrn_disposal[".exportFields"][] = "ID";
$tdatacreategrn_disposal[".exportFields"][] = "Status";
$tdatacreategrn_disposal[".exportFields"][] = "Fleet";
$tdatacreategrn_disposal[".exportFields"][] = "GRNDate";
$tdatacreategrn_disposal[".exportFields"][] = "ItemCode";
$tdatacreategrn_disposal[".exportFields"][] = "Quantity";
$tdatacreategrn_disposal[".exportFields"][] = "Brand";
$tdatacreategrn_disposal[".exportFields"][] = "Description";
$tdatacreategrn_disposal[".exportFields"][] = "Supplier";
$tdatacreategrn_disposal[".exportFields"][] = "UnitPrice";
$tdatacreategrn_disposal[".exportFields"][] = "ApprovedBy";
$tdatacreategrn_disposal[".exportFields"][] = "Cost";
$tdatacreategrn_disposal[".exportFields"][] = "CurrentStock";
$tdatacreategrn_disposal[".exportFields"][] = "EnteredBy";
$tdatacreategrn_disposal[".exportFields"][] = "SystemDate";

$tdatacreategrn_disposal[".importFields"] = array();
$tdatacreategrn_disposal[".importFields"][] = "ID";
$tdatacreategrn_disposal[".importFields"][] = "ItemCode";
$tdatacreategrn_disposal[".importFields"][] = "Brand";
$tdatacreategrn_disposal[".importFields"][] = "Description";
$tdatacreategrn_disposal[".importFields"][] = "Supplier";
$tdatacreategrn_disposal[".importFields"][] = "Quantity";
$tdatacreategrn_disposal[".importFields"][] = "SystemDate";
$tdatacreategrn_disposal[".importFields"][] = "GRNDate";
$tdatacreategrn_disposal[".importFields"][] = "EnteredBy";
$tdatacreategrn_disposal[".importFields"][] = "ApprovedBy";
$tdatacreategrn_disposal[".importFields"][] = "UnitPrice";
$tdatacreategrn_disposal[".importFields"][] = "Status";
$tdatacreategrn_disposal[".importFields"][] = "CurrentStock";
$tdatacreategrn_disposal[".importFields"][] = "Fleet";
$tdatacreategrn_disposal[".importFields"][] = "Cost";

$tdatacreategrn_disposal[".printFields"] = array();
$tdatacreategrn_disposal[".printFields"][] = "ID";
$tdatacreategrn_disposal[".printFields"][] = "Status";
$tdatacreategrn_disposal[".printFields"][] = "Fleet";
$tdatacreategrn_disposal[".printFields"][] = "GRNDate";
$tdatacreategrn_disposal[".printFields"][] = "ItemCode";
$tdatacreategrn_disposal[".printFields"][] = "Quantity";
$tdatacreategrn_disposal[".printFields"][] = "Brand";
$tdatacreategrn_disposal[".printFields"][] = "Description";
$tdatacreategrn_disposal[".printFields"][] = "Supplier";
$tdatacreategrn_disposal[".printFields"][] = "UnitPrice";
$tdatacreategrn_disposal[".printFields"][] = "ApprovedBy";
$tdatacreategrn_disposal[".printFields"][] = "Cost";
$tdatacreategrn_disposal[".printFields"][] = "EnteredBy";
$tdatacreategrn_disposal[".printFields"][] = "CurrentStock";
$tdatacreategrn_disposal[".printFields"][] = "SystemDate";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal","ID");
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








	$tdatacreategrn_disposal["ID"] = $fdata;
//	ItemCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemCode";
	$fdata["GoodName"] = "ItemCode";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal","ItemCode");
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




	$tdatacreategrn_disposal["ItemCode"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal","Brand");
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




	$tdatacreategrn_disposal["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal","Description");
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




	$tdatacreategrn_disposal["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal","Supplier");
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




	$tdatacreategrn_disposal["Supplier"] = $fdata;
//	Quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Quantity";
	$fdata["GoodName"] = "Quantity";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal","Quantity");
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




	$tdatacreategrn_disposal["Quantity"] = $fdata;
//	RemovedFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RemovedFrom";
	$fdata["GoodName"] = "RemovedFrom";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal","RemovedFrom");
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








	$tdatacreategrn_disposal["RemovedFrom"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal","SystemDate");
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




	$tdatacreategrn_disposal["SystemDate"] = $fdata;
//	GRNDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "GRNDate";
	$fdata["GoodName"] = "GRNDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal","GRNDate");
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




	$tdatacreategrn_disposal["GRNDate"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal","EnteredBy");
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




	$tdatacreategrn_disposal["EnteredBy"] = $fdata;
//	ApprovedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ApprovedBy";
	$fdata["GoodName"] = "ApprovedBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal","ApprovedBy");
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








	$tdatacreategrn_disposal["ApprovedBy"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal","UnitPrice");
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




	$tdatacreategrn_disposal["UnitPrice"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal","Status");
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




	$tdatacreategrn_disposal["Status"] = $fdata;
//	RefNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RefNumber";
	$fdata["GoodName"] = "RefNumber";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal","RefNumber");
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








	$tdatacreategrn_disposal["RefNumber"] = $fdata;
//	CurrentStock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "CurrentStock";
	$fdata["GoodName"] = "CurrentStock";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal","CurrentStock");
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




	$tdatacreategrn_disposal["CurrentStock"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal","Fleet");
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




	$tdatacreategrn_disposal["Fleet"] = $fdata;
//	PriceLink
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "PriceLink";
	$fdata["GoodName"] = "PriceLink";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal","PriceLink");
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








	$tdatacreategrn_disposal["PriceLink"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("creategrn_disposal","Cost");
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




	$tdatacreategrn_disposal["Cost"] = $fdata;


$tables_data["creategrn-disposal"]=&$tdatacreategrn_disposal;
$field_labels["creategrn_disposal"] = &$fieldLabelscreategrn_disposal;
$fieldToolTips["creategrn_disposal"] = &$fieldToolTipscreategrn_disposal;
$page_titles["creategrn_disposal"] = &$pageTitlescreategrn_disposal;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["creategrn-disposal"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["creategrn-disposal"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_creategrn_disposal()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  SUM(CurrentStock) AS CurrentStock,  Fleet,  PriceLink,  Quantity*UnitPrice*-1 AS Cost";
$proto0["m_strFrom"] = "FROM creategrn";
$proto0["m_strWhere"] = "Status =\"Disposal\"";
$proto0["m_strOrderBy"] = "ORDER BY CurrentStock DESC";
$proto0["m_strTail"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "Status =\"Disposal\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=\"Disposal\"";
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
	"m_srcTableName" => "creategrn-disposal"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "creategrn-disposal";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto8["m_sql"] = "ItemCode";
$proto8["m_srcTableName"] = "creategrn-disposal";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto10["m_sql"] = "Brand";
$proto10["m_srcTableName"] = "creategrn-disposal";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto12["m_sql"] = "Description";
$proto12["m_srcTableName"] = "creategrn-disposal";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto14["m_sql"] = "Supplier";
$proto14["m_srcTableName"] = "creategrn-disposal";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto16["m_sql"] = "Quantity";
$proto16["m_srcTableName"] = "creategrn-disposal";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto18["m_sql"] = "RemovedFrom";
$proto18["m_srcTableName"] = "creategrn-disposal";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto20["m_sql"] = "SystemDate";
$proto20["m_srcTableName"] = "creategrn-disposal";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto22["m_sql"] = "GRNDate";
$proto22["m_srcTableName"] = "creategrn-disposal";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto24["m_sql"] = "EnteredBy";
$proto24["m_srcTableName"] = "creategrn-disposal";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto26["m_sql"] = "ApprovedBy";
$proto26["m_srcTableName"] = "creategrn-disposal";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto28["m_sql"] = "UnitPrice";
$proto28["m_srcTableName"] = "creategrn-disposal";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto30["m_sql"] = "Status";
$proto30["m_srcTableName"] = "creategrn-disposal";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto32["m_sql"] = "RefNumber";
$proto32["m_srcTableName"] = "creategrn-disposal";
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
	"m_srcTableName" => "creategrn-disposal"
));

$proto35["m_arguments"][]=$obj;
$proto35["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto35);

$proto34["m_sql"] = "SUM(CurrentStock)";
$proto34["m_srcTableName"] = "creategrn-disposal";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "CurrentStock";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto37["m_sql"] = "Fleet";
$proto37["m_srcTableName"] = "creategrn-disposal";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "PriceLink",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto39["m_sql"] = "PriceLink";
$proto39["m_srcTableName"] = "creategrn-disposal";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "Quantity*UnitPrice*-1"
));

$proto41["m_sql"] = "Quantity*UnitPrice*-1";
$proto41["m_srcTableName"] = "creategrn-disposal";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "Cost";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto43=array();
$proto43["m_link"] = "SQLL_MAIN";
			$proto44=array();
$proto44["m_strName"] = "creategrn";
$proto44["m_srcTableName"] = "creategrn-disposal";
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
$proto43["m_srcTableName"] = "creategrn-disposal";
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
	"m_srcTableName" => "creategrn-disposal"
));

$proto47["m_column"]=$obj;
$obj = new SQLGroupByItem($proto47);

$proto0["m_groupby"][]=$obj;
												$proto49=array();
						$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto49["m_column"]=$obj;
$obj = new SQLGroupByItem($proto49);

$proto0["m_groupby"][]=$obj;
												$proto51=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto51["m_column"]=$obj;
$obj = new SQLGroupByItem($proto51);

$proto0["m_groupby"][]=$obj;
												$proto53=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto53["m_column"]=$obj;
$obj = new SQLGroupByItem($proto53);

$proto0["m_groupby"][]=$obj;
												$proto55=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto55["m_column"]=$obj;
$obj = new SQLGroupByItem($proto55);

$proto0["m_groupby"][]=$obj;
												$proto57=array();
						$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto57["m_column"]=$obj;
$obj = new SQLGroupByItem($proto57);

$proto0["m_groupby"][]=$obj;
												$proto59=array();
						$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto59["m_column"]=$obj;
$obj = new SQLGroupByItem($proto59);

$proto0["m_groupby"][]=$obj;
												$proto61=array();
						$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto61["m_column"]=$obj;
$obj = new SQLGroupByItem($proto61);

$proto0["m_groupby"][]=$obj;
												$proto63=array();
						$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto63["m_column"]=$obj;
$obj = new SQLGroupByItem($proto63);

$proto0["m_groupby"][]=$obj;
												$proto65=array();
						$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto65["m_column"]=$obj;
$obj = new SQLGroupByItem($proto65);

$proto0["m_groupby"][]=$obj;
												$proto67=array();
						$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto67["m_column"]=$obj;
$obj = new SQLGroupByItem($proto67);

$proto0["m_groupby"][]=$obj;
												$proto69=array();
						$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto69["m_column"]=$obj;
$obj = new SQLGroupByItem($proto69);

$proto0["m_groupby"][]=$obj;
												$proto71=array();
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto71["m_column"]=$obj;
$obj = new SQLGroupByItem($proto71);

$proto0["m_groupby"][]=$obj;
												$proto73=array();
						$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto73["m_column"]=$obj;
$obj = new SQLGroupByItem($proto73);

$proto0["m_groupby"][]=$obj;
												$proto75=array();
						$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
));

$proto75["m_column"]=$obj;
$obj = new SQLGroupByItem($proto75);

$proto0["m_groupby"][]=$obj;
												$proto77=array();
						$obj = new SQLField(array(
	"m_strName" => "PriceLink",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-disposal"
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
	"m_srcTableName" => "creategrn-disposal"
));

$proto81["m_column"]=$obj;
$proto81["m_bAsc"] = 0;
$proto81["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto81);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="creategrn-disposal";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_creategrn_disposal = createSqlQuery_creategrn_disposal();


	
					
;

																		

$tdatacreategrn_disposal[".sqlquery"] = $queryData_creategrn_disposal;

include_once(getabspath("include/creategrn_disposal_events.php"));
$tableEvents["creategrn-disposal"] = new eventclass_creategrn_disposal;
$tdatacreategrn_disposal[".hasEvents"] = true;

?>