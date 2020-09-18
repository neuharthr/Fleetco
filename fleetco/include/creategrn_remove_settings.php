<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacreategrn_remove = array();
	$tdatacreategrn_remove[".truncateText"] = true;
	$tdatacreategrn_remove[".NumberOfChars"] = 80;
	$tdatacreategrn_remove[".ShortName"] = "creategrn_remove";
	$tdatacreategrn_remove[".OwnerID"] = "";
	$tdatacreategrn_remove[".OriginalTable"] = "creategrn";

//	field labels
$fieldLabelscreategrn_remove = array();
$fieldToolTipscreategrn_remove = array();
$pageTitlescreategrn_remove = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscreategrn_remove["English"] = array();
	$fieldToolTipscreategrn_remove["English"] = array();
	$pageTitlescreategrn_remove["English"] = array();
	$fieldLabelscreategrn_remove["English"]["ItemCode"] = "Tyre Code";
	$fieldToolTipscreategrn_remove["English"]["ItemCode"] = "";
	$fieldLabelscreategrn_remove["English"]["Brand"] = "Brand";
	$fieldToolTipscreategrn_remove["English"]["Brand"] = "";
	$fieldLabelscreategrn_remove["English"]["Description"] = "Descr.";
	$fieldToolTipscreategrn_remove["English"]["Description"] = "";
	$fieldLabelscreategrn_remove["English"]["Supplier"] = "Supplier";
	$fieldToolTipscreategrn_remove["English"]["Supplier"] = "";
	$fieldLabelscreategrn_remove["English"]["Quantity"] = "Qty";
	$fieldToolTipscreategrn_remove["English"]["Quantity"] = "";
	$fieldLabelscreategrn_remove["English"]["RemovedFrom"] = "Vehicle";
	$fieldToolTipscreategrn_remove["English"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_remove["English"]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn_remove["English"]["SystemDate"] = "";
	$fieldLabelscreategrn_remove["English"]["GRNDate"] = "Date";
	$fieldToolTipscreategrn_remove["English"]["GRNDate"] = "";
	$fieldLabelscreategrn_remove["English"]["EnteredBy"] = "Entered";
	$fieldToolTipscreategrn_remove["English"]["EnteredBy"] = "";
	$fieldLabelscreategrn_remove["English"]["ApprovedBy"] = "Edited By";
	$fieldToolTipscreategrn_remove["English"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_remove["English"]["Status"] = "Type";
	$fieldToolTipscreategrn_remove["English"]["Status"] = "";
	$fieldLabelscreategrn_remove["English"]["ID"] = "ID";
	$fieldToolTipscreategrn_remove["English"]["ID"] = "";
	$fieldLabelscreategrn_remove["English"]["UnitPrice"] = "Unit Cost";
	$fieldToolTipscreategrn_remove["English"]["UnitPrice"] = "";
	$fieldLabelscreategrn_remove["English"]["RefNumber"] = "PO Ref.";
	$fieldToolTipscreategrn_remove["English"]["RefNumber"] = "";
	$fieldLabelscreategrn_remove["English"]["Cost"] = "Cost";
	$fieldToolTipscreategrn_remove["English"]["Cost"] = "";
	$fieldLabelscreategrn_remove["English"]["CurrentStock"] = "In-Stock";
	$fieldToolTipscreategrn_remove["English"]["CurrentStock"] = "";
	$fieldLabelscreategrn_remove["English"]["Fleet"] = "Fleet";
	$fieldToolTipscreategrn_remove["English"]["Fleet"] = "";
	if (count($fieldToolTipscreategrn_remove["English"]))
		$tdatacreategrn_remove[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelscreategrn_remove["Afrikaans"] = array();
	$fieldToolTipscreategrn_remove["Afrikaans"] = array();
	$pageTitlescreategrn_remove["Afrikaans"] = array();
	$fieldLabelscreategrn_remove["Afrikaans"]["ID"] = "ID";
	$fieldToolTipscreategrn_remove["Afrikaans"]["ID"] = "";
	$fieldLabelscreategrn_remove["Afrikaans"]["ItemCode"] = "Tirus Kode";
	$fieldToolTipscreategrn_remove["Afrikaans"]["ItemCode"] = "";
	$fieldLabelscreategrn_remove["Afrikaans"]["Brand"] = "Brand";
	$fieldToolTipscreategrn_remove["Afrikaans"]["Brand"] = "";
	$fieldLabelscreategrn_remove["Afrikaans"]["Description"] = "beskrywing";
	$fieldToolTipscreategrn_remove["Afrikaans"]["Description"] = "";
	$fieldLabelscreategrn_remove["Afrikaans"]["Supplier"] = "verskaffer";
	$fieldToolTipscreategrn_remove["Afrikaans"]["Supplier"] = "";
	$fieldLabelscreategrn_remove["Afrikaans"]["Quantity"] = "hoeveelheid";
	$fieldToolTipscreategrn_remove["Afrikaans"]["Quantity"] = "";
	$fieldLabelscreategrn_remove["Afrikaans"]["RemovedFrom"] = "voertuig";
	$fieldToolTipscreategrn_remove["Afrikaans"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_remove["Afrikaans"]["SystemDate"] = "stelsel Datum";
	$fieldToolTipscreategrn_remove["Afrikaans"]["SystemDate"] = "";
	$fieldLabelscreategrn_remove["Afrikaans"]["GRNDate"] = "datum";
	$fieldToolTipscreategrn_remove["Afrikaans"]["GRNDate"] = "";
	$fieldLabelscreategrn_remove["Afrikaans"]["EnteredBy"] = "ingevoer";
	$fieldToolTipscreategrn_remove["Afrikaans"]["EnteredBy"] = "";
	$fieldLabelscreategrn_remove["Afrikaans"]["ApprovedBy"] = "geredigeer deur";
	$fieldToolTipscreategrn_remove["Afrikaans"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_remove["Afrikaans"]["UnitPrice"] = "Eenheidskoste";
	$fieldToolTipscreategrn_remove["Afrikaans"]["UnitPrice"] = "";
	$fieldLabelscreategrn_remove["Afrikaans"]["Status"] = "tipe";
	$fieldToolTipscreategrn_remove["Afrikaans"]["Status"] = "";
	$fieldLabelscreategrn_remove["Afrikaans"]["RefNumber"] = "Bestelling Verwysing";
	$fieldToolTipscreategrn_remove["Afrikaans"]["RefNumber"] = "";
	$fieldLabelscreategrn_remove["Afrikaans"]["CurrentStock"] = "Huidige Stock";
	$fieldToolTipscreategrn_remove["Afrikaans"]["CurrentStock"] = "";
	$fieldLabelscreategrn_remove["Afrikaans"]["Fleet"] = "vloot";
	$fieldToolTipscreategrn_remove["Afrikaans"]["Fleet"] = "";
	$fieldLabelscreategrn_remove["Afrikaans"]["Cost"] = "koste";
	$fieldToolTipscreategrn_remove["Afrikaans"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_remove["Afrikaans"]))
		$tdatacreategrn_remove[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelscreategrn_remove["Arabic"] = array();
	$fieldToolTipscreategrn_remove["Arabic"] = array();
	$pageTitlescreategrn_remove["Arabic"] = array();
	$fieldLabelscreategrn_remove["Arabic"]["ID"] = "???? ?????";
	$fieldToolTipscreategrn_remove["Arabic"]["ID"] = "";
	$fieldLabelscreategrn_remove["Arabic"]["ItemCode"] = "????? ???";
	$fieldToolTipscreategrn_remove["Arabic"]["ItemCode"] = "";
	$fieldLabelscreategrn_remove["Arabic"]["Brand"] = "????? ??????";
	$fieldToolTipscreategrn_remove["Arabic"]["Brand"] = "";
	$fieldLabelscreategrn_remove["Arabic"]["Description"] = "???";
	$fieldToolTipscreategrn_remove["Arabic"]["Description"] = "";
	$fieldLabelscreategrn_remove["Arabic"]["Supplier"] = "??????";
	$fieldToolTipscreategrn_remove["Arabic"]["Supplier"] = "";
	$fieldLabelscreategrn_remove["Arabic"]["Quantity"] = "????";
	$fieldToolTipscreategrn_remove["Arabic"]["Quantity"] = "";
	$fieldLabelscreategrn_remove["Arabic"]["RemovedFrom"] = "?????";
	$fieldToolTipscreategrn_remove["Arabic"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_remove["Arabic"]["SystemDate"] = "????? ??????";
	$fieldToolTipscreategrn_remove["Arabic"]["SystemDate"] = "";
	$fieldLabelscreategrn_remove["Arabic"]["GRNDate"] = "?????";
	$fieldToolTipscreategrn_remove["Arabic"]["GRNDate"] = "";
	$fieldLabelscreategrn_remove["Arabic"]["EnteredBy"] = "???";
	$fieldToolTipscreategrn_remove["Arabic"]["EnteredBy"] = "";
	$fieldLabelscreategrn_remove["Arabic"]["ApprovedBy"] = "???? ??????";
	$fieldToolTipscreategrn_remove["Arabic"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_remove["Arabic"]["UnitPrice"] = "????? ??????";
	$fieldToolTipscreategrn_remove["Arabic"]["UnitPrice"] = "";
	$fieldLabelscreategrn_remove["Arabic"]["Status"] = "????";
	$fieldToolTipscreategrn_remove["Arabic"]["Status"] = "";
	$fieldLabelscreategrn_remove["Arabic"]["RefNumber"] = "??? ?????? ???????";
	$fieldToolTipscreategrn_remove["Arabic"]["RefNumber"] = "";
	$fieldLabelscreategrn_remove["Arabic"]["CurrentStock"] = "??????? ??????";
	$fieldToolTipscreategrn_remove["Arabic"]["CurrentStock"] = "";
	$fieldLabelscreategrn_remove["Arabic"]["Fleet"] = "?????";
	$fieldToolTipscreategrn_remove["Arabic"]["Fleet"] = "";
	$fieldLabelscreategrn_remove["Arabic"]["Cost"] = "????";
	$fieldToolTipscreategrn_remove["Arabic"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_remove["Arabic"]))
		$tdatacreategrn_remove[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelscreategrn_remove["Chinese"] = array();
	$fieldToolTipscreategrn_remove["Chinese"] = array();
	$pageTitlescreategrn_remove["Chinese"] = array();
	$fieldLabelscreategrn_remove["Chinese"]["ID"] = "ID";
	$fieldToolTipscreategrn_remove["Chinese"]["ID"] = "";
	$fieldLabelscreategrn_remove["Chinese"]["ItemCode"] = "????";
	$fieldToolTipscreategrn_remove["Chinese"]["ItemCode"] = "";
	$fieldLabelscreategrn_remove["Chinese"]["Brand"] = "?";
	$fieldToolTipscreategrn_remove["Chinese"]["Brand"] = "";
	$fieldLabelscreategrn_remove["Chinese"]["Description"] = "??";
	$fieldToolTipscreategrn_remove["Chinese"]["Description"] = "";
	$fieldLabelscreategrn_remove["Chinese"]["Supplier"] = "???";
	$fieldToolTipscreategrn_remove["Chinese"]["Supplier"] = "";
	$fieldLabelscreategrn_remove["Chinese"]["Quantity"] = "??";
	$fieldToolTipscreategrn_remove["Chinese"]["Quantity"] = "";
	$fieldLabelscreategrn_remove["Chinese"]["RemovedFrom"] = "??";
	$fieldToolTipscreategrn_remove["Chinese"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_remove["Chinese"]["SystemDate"] = "????";
	$fieldToolTipscreategrn_remove["Chinese"]["SystemDate"] = "";
	$fieldLabelscreategrn_remove["Chinese"]["GRNDate"] = "??";
	$fieldToolTipscreategrn_remove["Chinese"]["GRNDate"] = "";
	$fieldLabelscreategrn_remove["Chinese"]["EnteredBy"] = "??";
	$fieldToolTipscreategrn_remove["Chinese"]["EnteredBy"] = "";
	$fieldLabelscreategrn_remove["Chinese"]["ApprovedBy"] = "??";
	$fieldToolTipscreategrn_remove["Chinese"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_remove["Chinese"]["UnitPrice"] = "????";
	$fieldToolTipscreategrn_remove["Chinese"]["UnitPrice"] = "";
	$fieldLabelscreategrn_remove["Chinese"]["Status"] = "??";
	$fieldToolTipscreategrn_remove["Chinese"]["Status"] = "";
	$fieldLabelscreategrn_remove["Chinese"]["RefNumber"] = "??????";
	$fieldToolTipscreategrn_remove["Chinese"]["RefNumber"] = "";
	$fieldLabelscreategrn_remove["Chinese"]["CurrentStock"] = "????";
	$fieldToolTipscreategrn_remove["Chinese"]["CurrentStock"] = "";
	$fieldLabelscreategrn_remove["Chinese"]["Fleet"] = "??";
	$fieldToolTipscreategrn_remove["Chinese"]["Fleet"] = "";
	$fieldLabelscreategrn_remove["Chinese"]["Cost"] = "??";
	$fieldToolTipscreategrn_remove["Chinese"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_remove["Chinese"]))
		$tdatacreategrn_remove[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelscreategrn_remove["French"] = array();
	$fieldToolTipscreategrn_remove["French"] = array();
	$pageTitlescreategrn_remove["French"] = array();
	$fieldLabelscreategrn_remove["French"]["ID"] = "ID";
	$fieldToolTipscreategrn_remove["French"]["ID"] = "";
	$fieldLabelscreategrn_remove["French"]["ItemCode"] = "Code du pneu";
	$fieldToolTipscreategrn_remove["French"]["ItemCode"] = "";
	$fieldLabelscreategrn_remove["French"]["Brand"] = "Marque";
	$fieldToolTipscreategrn_remove["French"]["Brand"] = "";
	$fieldLabelscreategrn_remove["French"]["Description"] = "La description";
	$fieldToolTipscreategrn_remove["French"]["Description"] = "";
	$fieldLabelscreategrn_remove["French"]["Supplier"] = "Fournisseur";
	$fieldToolTipscreategrn_remove["French"]["Supplier"] = "";
	$fieldLabelscreategrn_remove["French"]["Quantity"] = "Quantité";
	$fieldToolTipscreategrn_remove["French"]["Quantity"] = "";
	$fieldLabelscreategrn_remove["French"]["RemovedFrom"] = "Véhicule";
	$fieldToolTipscreategrn_remove["French"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_remove["French"]["SystemDate"] = "Date du système";
	$fieldToolTipscreategrn_remove["French"]["SystemDate"] = "";
	$fieldLabelscreategrn_remove["French"]["GRNDate"] = "date";
	$fieldToolTipscreategrn_remove["French"]["GRNDate"] = "";
	$fieldLabelscreategrn_remove["French"]["EnteredBy"] = "Entré";
	$fieldToolTipscreategrn_remove["French"]["EnteredBy"] = "";
	$fieldLabelscreategrn_remove["French"]["ApprovedBy"] = "Édité par";
	$fieldToolTipscreategrn_remove["French"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_remove["French"]["UnitPrice"] = "Coût unitaire";
	$fieldToolTipscreategrn_remove["French"]["UnitPrice"] = "";
	$fieldLabelscreategrn_remove["French"]["Status"] = "Type";
	$fieldToolTipscreategrn_remove["French"]["Status"] = "";
	$fieldLabelscreategrn_remove["French"]["RefNumber"] = "Référence du bon de commande";
	$fieldToolTipscreategrn_remove["French"]["RefNumber"] = "";
	$fieldLabelscreategrn_remove["French"]["CurrentStock"] = "Stock actuel";
	$fieldToolTipscreategrn_remove["French"]["CurrentStock"] = "";
	$fieldLabelscreategrn_remove["French"]["Fleet"] = "Flotte";
	$fieldToolTipscreategrn_remove["French"]["Fleet"] = "";
	$fieldLabelscreategrn_remove["French"]["Cost"] = "Coût";
	$fieldToolTipscreategrn_remove["French"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_remove["French"]))
		$tdatacreategrn_remove[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelscreategrn_remove["German"] = array();
	$fieldToolTipscreategrn_remove["German"] = array();
	$pageTitlescreategrn_remove["German"] = array();
	$fieldLabelscreategrn_remove["German"]["ID"] = "ICH WÜRDE";
	$fieldToolTipscreategrn_remove["German"]["ID"] = "";
	$fieldLabelscreategrn_remove["German"]["ItemCode"] = "Bereifung";
	$fieldToolTipscreategrn_remove["German"]["ItemCode"] = "";
	$fieldLabelscreategrn_remove["German"]["Brand"] = "Marke";
	$fieldToolTipscreategrn_remove["German"]["Brand"] = "";
	$fieldLabelscreategrn_remove["German"]["Description"] = "Beschreibung";
	$fieldToolTipscreategrn_remove["German"]["Description"] = "";
	$fieldLabelscreategrn_remove["German"]["Supplier"] = "Lieferant";
	$fieldToolTipscreategrn_remove["German"]["Supplier"] = "";
	$fieldLabelscreategrn_remove["German"]["Quantity"] = "Menge";
	$fieldToolTipscreategrn_remove["German"]["Quantity"] = "";
	$fieldLabelscreategrn_remove["German"]["RemovedFrom"] = "Fahrzeug";
	$fieldToolTipscreategrn_remove["German"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_remove["German"]["SystemDate"] = "Systemdatum";
	$fieldToolTipscreategrn_remove["German"]["SystemDate"] = "";
	$fieldLabelscreategrn_remove["German"]["GRNDate"] = "Datum";
	$fieldToolTipscreategrn_remove["German"]["GRNDate"] = "";
	$fieldLabelscreategrn_remove["German"]["EnteredBy"] = "Eingegeben";
	$fieldToolTipscreategrn_remove["German"]["EnteredBy"] = "";
	$fieldLabelscreategrn_remove["German"]["ApprovedBy"] = "Bearbeitet von";
	$fieldToolTipscreategrn_remove["German"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_remove["German"]["UnitPrice"] = "Kosten pro Einheit";
	$fieldToolTipscreategrn_remove["German"]["UnitPrice"] = "";
	$fieldLabelscreategrn_remove["German"]["Status"] = "Art";
	$fieldToolTipscreategrn_remove["German"]["Status"] = "";
	$fieldLabelscreategrn_remove["German"]["RefNumber"] = "Bestellbezug";
	$fieldToolTipscreategrn_remove["German"]["RefNumber"] = "";
	$fieldLabelscreategrn_remove["German"]["CurrentStock"] = "Aktueller Lagerbestand";
	$fieldToolTipscreategrn_remove["German"]["CurrentStock"] = "";
	$fieldLabelscreategrn_remove["German"]["Fleet"] = "Flotte";
	$fieldToolTipscreategrn_remove["German"]["Fleet"] = "";
	$fieldLabelscreategrn_remove["German"]["Cost"] = "Kosten";
	$fieldToolTipscreategrn_remove["German"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_remove["German"]))
		$tdatacreategrn_remove[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelscreategrn_remove["Italian"] = array();
	$fieldToolTipscreategrn_remove["Italian"] = array();
	$pageTitlescreategrn_remove["Italian"] = array();
	$fieldLabelscreategrn_remove["Italian"]["ID"] = "ID";
	$fieldToolTipscreategrn_remove["Italian"]["ID"] = "";
	$fieldLabelscreategrn_remove["Italian"]["ItemCode"] = "Codice Tyre";
	$fieldToolTipscreategrn_remove["Italian"]["ItemCode"] = "";
	$fieldLabelscreategrn_remove["Italian"]["Brand"] = "Marca";
	$fieldToolTipscreategrn_remove["Italian"]["Brand"] = "";
	$fieldLabelscreategrn_remove["Italian"]["Description"] = "Descrizione";
	$fieldToolTipscreategrn_remove["Italian"]["Description"] = "";
	$fieldLabelscreategrn_remove["Italian"]["Supplier"] = "Fornitore";
	$fieldToolTipscreategrn_remove["Italian"]["Supplier"] = "";
	$fieldLabelscreategrn_remove["Italian"]["Quantity"] = "Quantità";
	$fieldToolTipscreategrn_remove["Italian"]["Quantity"] = "";
	$fieldLabelscreategrn_remove["Italian"]["RemovedFrom"] = "Veicolo";
	$fieldToolTipscreategrn_remove["Italian"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_remove["Italian"]["SystemDate"] = "Data di sistema";
	$fieldToolTipscreategrn_remove["Italian"]["SystemDate"] = "";
	$fieldLabelscreategrn_remove["Italian"]["GRNDate"] = "Data";
	$fieldToolTipscreategrn_remove["Italian"]["GRNDate"] = "";
	$fieldLabelscreategrn_remove["Italian"]["EnteredBy"] = "inserito";
	$fieldToolTipscreategrn_remove["Italian"]["EnteredBy"] = "";
	$fieldLabelscreategrn_remove["Italian"]["ApprovedBy"] = "A cura di";
	$fieldToolTipscreategrn_remove["Italian"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_remove["Italian"]["UnitPrice"] = "Costo unitario";
	$fieldToolTipscreategrn_remove["Italian"]["UnitPrice"] = "";
	$fieldLabelscreategrn_remove["Italian"]["Status"] = "Digitare";
	$fieldToolTipscreategrn_remove["Italian"]["Status"] = "";
	$fieldLabelscreategrn_remove["Italian"]["RefNumber"] = "Ordine di acquisto di riferimento";
	$fieldToolTipscreategrn_remove["Italian"]["RefNumber"] = "";
	$fieldLabelscreategrn_remove["Italian"]["CurrentStock"] = "Scorta attuale";
	$fieldToolTipscreategrn_remove["Italian"]["CurrentStock"] = "";
	$fieldLabelscreategrn_remove["Italian"]["Fleet"] = "Flotta";
	$fieldToolTipscreategrn_remove["Italian"]["Fleet"] = "";
	$fieldLabelscreategrn_remove["Italian"]["Cost"] = "Costo";
	$fieldToolTipscreategrn_remove["Italian"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_remove["Italian"]))
		$tdatacreategrn_remove[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelscreategrn_remove["Russian"] = array();
	$fieldToolTipscreategrn_remove["Russian"] = array();
	$pageTitlescreategrn_remove["Russian"] = array();
	$fieldLabelscreategrn_remove["Russian"]["ID"] = "? ??";
	$fieldToolTipscreategrn_remove["Russian"]["ID"] = "";
	$fieldLabelscreategrn_remove["Russian"]["ItemCode"] = "??? ???";
	$fieldToolTipscreategrn_remove["Russian"]["ItemCode"] = "";
	$fieldLabelscreategrn_remove["Russian"]["Brand"] = "?????";
	$fieldToolTipscreategrn_remove["Russian"]["Brand"] = "";
	$fieldLabelscreategrn_remove["Russian"]["Description"] = "????????";
	$fieldToolTipscreategrn_remove["Russian"]["Description"] = "";
	$fieldLabelscreategrn_remove["Russian"]["Supplier"] = "?????????";
	$fieldToolTipscreategrn_remove["Russian"]["Supplier"] = "";
	$fieldLabelscreategrn_remove["Russian"]["Quantity"] = "??????????";
	$fieldToolTipscreategrn_remove["Russian"]["Quantity"] = "";
	$fieldLabelscreategrn_remove["Russian"]["RemovedFrom"] = "???????? ????????????";
	$fieldToolTipscreategrn_remove["Russian"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_remove["Russian"]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn_remove["Russian"]["SystemDate"] = "";
	$fieldLabelscreategrn_remove["Russian"]["GRNDate"] = "????";
	$fieldToolTipscreategrn_remove["Russian"]["GRNDate"] = "";
	$fieldLabelscreategrn_remove["Russian"]["EnteredBy"] = "?????";
	$fieldToolTipscreategrn_remove["Russian"]["EnteredBy"] = "";
	$fieldLabelscreategrn_remove["Russian"]["ApprovedBy"] = "???????????????";
	$fieldToolTipscreategrn_remove["Russian"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_remove["Russian"]["UnitPrice"] = "????????????? ??????? ?????????";
	$fieldToolTipscreategrn_remove["Russian"]["UnitPrice"] = "";
	$fieldLabelscreategrn_remove["Russian"]["Status"] = "???";
	$fieldToolTipscreategrn_remove["Russian"]["Status"] = "";
	$fieldLabelscreategrn_remove["Russian"]["RefNumber"] = "??????? ??? ??????";
	$fieldToolTipscreategrn_remove["Russian"]["RefNumber"] = "";
	$fieldLabelscreategrn_remove["Russian"]["CurrentStock"] = "??????? ?? ??????";
	$fieldToolTipscreategrn_remove["Russian"]["CurrentStock"] = "";
	$fieldLabelscreategrn_remove["Russian"]["Fleet"] = "????";
	$fieldToolTipscreategrn_remove["Russian"]["Fleet"] = "";
	$fieldLabelscreategrn_remove["Russian"]["Cost"] = "?????????";
	$fieldToolTipscreategrn_remove["Russian"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_remove["Russian"]))
		$tdatacreategrn_remove[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscreategrn_remove["Spanish"] = array();
	$fieldToolTipscreategrn_remove["Spanish"] = array();
	$pageTitlescreategrn_remove["Spanish"] = array();
	$fieldLabelscreategrn_remove["Spanish"]["ID"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipscreategrn_remove["Spanish"]["ID"] = "";
	$fieldLabelscreategrn_remove["Spanish"]["ItemCode"] = "Código del neumático";
	$fieldToolTipscreategrn_remove["Spanish"]["ItemCode"] = "";
	$fieldLabelscreategrn_remove["Spanish"]["Brand"] = "Marca";
	$fieldToolTipscreategrn_remove["Spanish"]["Brand"] = "";
	$fieldLabelscreategrn_remove["Spanish"]["Description"] = "Descripción";
	$fieldToolTipscreategrn_remove["Spanish"]["Description"] = "";
	$fieldLabelscreategrn_remove["Spanish"]["Supplier"] = "Proveedor";
	$fieldToolTipscreategrn_remove["Spanish"]["Supplier"] = "";
	$fieldLabelscreategrn_remove["Spanish"]["Quantity"] = "Cantidad";
	$fieldToolTipscreategrn_remove["Spanish"]["Quantity"] = "";
	$fieldLabelscreategrn_remove["Spanish"]["RemovedFrom"] = "Vehículo";
	$fieldToolTipscreategrn_remove["Spanish"]["RemovedFrom"] = "";
	$fieldLabelscreategrn_remove["Spanish"]["SystemDate"] = "Fecha del sistema";
	$fieldToolTipscreategrn_remove["Spanish"]["SystemDate"] = "";
	$fieldLabelscreategrn_remove["Spanish"]["GRNDate"] = "Fecha";
	$fieldToolTipscreategrn_remove["Spanish"]["GRNDate"] = "";
	$fieldLabelscreategrn_remove["Spanish"]["EnteredBy"] = "Ingresó";
	$fieldToolTipscreategrn_remove["Spanish"]["EnteredBy"] = "";
	$fieldLabelscreategrn_remove["Spanish"]["ApprovedBy"] = "Editado por";
	$fieldToolTipscreategrn_remove["Spanish"]["ApprovedBy"] = "";
	$fieldLabelscreategrn_remove["Spanish"]["UnitPrice"] = "Costo Unitario";
	$fieldToolTipscreategrn_remove["Spanish"]["UnitPrice"] = "";
	$fieldLabelscreategrn_remove["Spanish"]["Status"] = "Tipo";
	$fieldToolTipscreategrn_remove["Spanish"]["Status"] = "";
	$fieldLabelscreategrn_remove["Spanish"]["RefNumber"] = "Referencia de órdenes de compra";
	$fieldToolTipscreategrn_remove["Spanish"]["RefNumber"] = "";
	$fieldLabelscreategrn_remove["Spanish"]["CurrentStock"] = "Acciones actuales";
	$fieldToolTipscreategrn_remove["Spanish"]["CurrentStock"] = "";
	$fieldLabelscreategrn_remove["Spanish"]["Fleet"] = "Flota";
	$fieldToolTipscreategrn_remove["Spanish"]["Fleet"] = "";
	$fieldLabelscreategrn_remove["Spanish"]["Cost"] = "Costo";
	$fieldToolTipscreategrn_remove["Spanish"]["Cost"] = "";
	if (count($fieldToolTipscreategrn_remove["Spanish"]))
		$tdatacreategrn_remove[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscreategrn_remove[""] = array();
	$fieldToolTipscreategrn_remove[""] = array();
	$pageTitlescreategrn_remove[""] = array();
	if (count($fieldToolTipscreategrn_remove[""]))
		$tdatacreategrn_remove[".isUseToolTips"] = true;
}


	$tdatacreategrn_remove[".NCSearch"] = true;



$tdatacreategrn_remove[".shortTableName"] = "creategrn_remove";
$tdatacreategrn_remove[".nSecOptions"] = 0;
$tdatacreategrn_remove[".recsPerRowPrint"] = 1;
$tdatacreategrn_remove[".mainTableOwnerID"] = "";
$tdatacreategrn_remove[".moveNext"] = 1;
$tdatacreategrn_remove[".entityType"] = 1;

$tdatacreategrn_remove[".strOriginalTableName"] = "creategrn";

		 



$tdatacreategrn_remove[".showAddInPopup"] = false;

$tdatacreategrn_remove[".showEditInPopup"] = false;

$tdatacreategrn_remove[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacreategrn_remove[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacreategrn_remove[".fieldsForRegister"] = array();

	$tdatacreategrn_remove[".listAjax"] = true;

	$tdatacreategrn_remove[".audit"] = false;

	$tdatacreategrn_remove[".locking"] = false;

$tdatacreategrn_remove[".edit"] = true;
$tdatacreategrn_remove[".afterEditAction"] = 1;
$tdatacreategrn_remove[".closePopupAfterEdit"] = 1;
$tdatacreategrn_remove[".afterEditActionDetTable"] = "";

$tdatacreategrn_remove[".add"] = true;
$tdatacreategrn_remove[".afterAddAction"] = 1;
$tdatacreategrn_remove[".closePopupAfterAdd"] = 1;
$tdatacreategrn_remove[".afterAddActionDetTable"] = "Detail tables not found!";

$tdatacreategrn_remove[".list"] = true;




$tdatacreategrn_remove[".view"] = true;

$tdatacreategrn_remove[".import"] = true;

$tdatacreategrn_remove[".exportTo"] = true;

$tdatacreategrn_remove[".printFriendly"] = true;

$tdatacreategrn_remove[".delete"] = true;

$tdatacreategrn_remove[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacreategrn_remove[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatacreategrn_remove[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatacreategrn_remove[".searchSaving"] = false;
//

$tdatacreategrn_remove[".showSearchPanel"] = true;
		$tdatacreategrn_remove[".flexibleSearch"] = true;

$tdatacreategrn_remove[".isUseAjaxSuggest"] = true;

$tdatacreategrn_remove[".rowHighlite"] = true;



$tdatacreategrn_remove[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacreategrn_remove[".isUseTimeForSearch"] = false;





$tdatacreategrn_remove[".allSearchFields"] = array();
$tdatacreategrn_remove[".filterFields"] = array();
$tdatacreategrn_remove[".requiredSearchFields"] = array();

$tdatacreategrn_remove[".allSearchFields"][] = "Status";
	$tdatacreategrn_remove[".allSearchFields"][] = "Fleet";
	$tdatacreategrn_remove[".allSearchFields"][] = "GRNDate";
	$tdatacreategrn_remove[".allSearchFields"][] = "RemovedFrom";
	$tdatacreategrn_remove[".allSearchFields"][] = "ItemCode";
	$tdatacreategrn_remove[".allSearchFields"][] = "Brand";
	$tdatacreategrn_remove[".allSearchFields"][] = "Description";
	$tdatacreategrn_remove[".allSearchFields"][] = "Supplier";
	$tdatacreategrn_remove[".allSearchFields"][] = "UnitPrice";
	$tdatacreategrn_remove[".allSearchFields"][] = "Quantity";
	$tdatacreategrn_remove[".allSearchFields"][] = "SystemDate";
	$tdatacreategrn_remove[".allSearchFields"][] = "Cost";
	$tdatacreategrn_remove[".allSearchFields"][] = "EnteredBy";
	

$tdatacreategrn_remove[".googleLikeFields"] = array();
$tdatacreategrn_remove[".googleLikeFields"][] = "ID";
$tdatacreategrn_remove[".googleLikeFields"][] = "ItemCode";
$tdatacreategrn_remove[".googleLikeFields"][] = "Brand";
$tdatacreategrn_remove[".googleLikeFields"][] = "Description";
$tdatacreategrn_remove[".googleLikeFields"][] = "Supplier";
$tdatacreategrn_remove[".googleLikeFields"][] = "Quantity";
$tdatacreategrn_remove[".googleLikeFields"][] = "RemovedFrom";
$tdatacreategrn_remove[".googleLikeFields"][] = "SystemDate";
$tdatacreategrn_remove[".googleLikeFields"][] = "GRNDate";
$tdatacreategrn_remove[".googleLikeFields"][] = "EnteredBy";
$tdatacreategrn_remove[".googleLikeFields"][] = "ApprovedBy";
$tdatacreategrn_remove[".googleLikeFields"][] = "UnitPrice";
$tdatacreategrn_remove[".googleLikeFields"][] = "Status";
$tdatacreategrn_remove[".googleLikeFields"][] = "RefNumber";
$tdatacreategrn_remove[".googleLikeFields"][] = "CurrentStock";
$tdatacreategrn_remove[".googleLikeFields"][] = "Fleet";
$tdatacreategrn_remove[".googleLikeFields"][] = "Cost";


$tdatacreategrn_remove[".advSearchFields"] = array();
$tdatacreategrn_remove[".advSearchFields"][] = "Status";
$tdatacreategrn_remove[".advSearchFields"][] = "Fleet";
$tdatacreategrn_remove[".advSearchFields"][] = "GRNDate";
$tdatacreategrn_remove[".advSearchFields"][] = "RemovedFrom";
$tdatacreategrn_remove[".advSearchFields"][] = "ItemCode";
$tdatacreategrn_remove[".advSearchFields"][] = "Brand";
$tdatacreategrn_remove[".advSearchFields"][] = "Description";
$tdatacreategrn_remove[".advSearchFields"][] = "Supplier";
$tdatacreategrn_remove[".advSearchFields"][] = "UnitPrice";
$tdatacreategrn_remove[".advSearchFields"][] = "Quantity";
$tdatacreategrn_remove[".advSearchFields"][] = "SystemDate";
$tdatacreategrn_remove[".advSearchFields"][] = "Cost";
$tdatacreategrn_remove[".advSearchFields"][] = "EnteredBy";

$tdatacreategrn_remove[".tableType"] = "list";

$tdatacreategrn_remove[".printerPageOrientation"] = 0;
$tdatacreategrn_remove[".nPrinterPageScale"] = 100;

$tdatacreategrn_remove[".nPrinterSplitRecords"] = 40;

$tdatacreategrn_remove[".nPrinterPDFSplitRecords"] = 40;



$tdatacreategrn_remove[".geocodingEnabled"] = false;





$tdatacreategrn_remove[".listGridLayout"] = 3;


$tdatacreategrn_remove[".isResizeColumns"] = true;



// view page pdf
$tdatacreategrn_remove[".isViewPagePDF"] = true;
$tdatacreategrn_remove[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatacreategrn_remove[".isPrinterPagePDF"] = true;
$tdatacreategrn_remove[".nPrinterPagePDFScale"] = 100;

$tdatacreategrn_remove[".totalsFields"] = array();
$tdatacreategrn_remove[".totalsFields"][] = array(
	"fName" => "Cost",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatacreategrn_remove[".pageSize"] = 20;

$tdatacreategrn_remove[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacreategrn_remove[".strOrderBy"] = $tstrOrderBy;

$tdatacreategrn_remove[".orderindexes"] = array();

$tdatacreategrn_remove[".sqlHead"] = "SELECT ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  CurrentStock,  Fleet,  Cost";
$tdatacreategrn_remove[".sqlFrom"] = "FROM creategrn";
$tdatacreategrn_remove[".sqlWhereExpr"] = "Status =\"Tyre Removal\"";
$tdatacreategrn_remove[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatacreategrn_remove[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacreategrn_remove[".arrGroupsPerPage"] = $arrGPP;

$tdatacreategrn_remove[".highlightSearchResults"] = true;

$tableKeyscreategrn_remove = array();
$tableKeyscreategrn_remove[] = "ID";
$tdatacreategrn_remove[".Keys"] = $tableKeyscreategrn_remove;

$tdatacreategrn_remove[".listFields"] = array();
$tdatacreategrn_remove[".listFields"][] = "ID";
$tdatacreategrn_remove[".listFields"][] = "Status";
$tdatacreategrn_remove[".listFields"][] = "Fleet";
$tdatacreategrn_remove[".listFields"][] = "GRNDate";
$tdatacreategrn_remove[".listFields"][] = "RemovedFrom";
$tdatacreategrn_remove[".listFields"][] = "ItemCode";
$tdatacreategrn_remove[".listFields"][] = "Brand";
$tdatacreategrn_remove[".listFields"][] = "Description";
$tdatacreategrn_remove[".listFields"][] = "Supplier";
$tdatacreategrn_remove[".listFields"][] = "UnitPrice";
$tdatacreategrn_remove[".listFields"][] = "Quantity";
$tdatacreategrn_remove[".listFields"][] = "Cost";
$tdatacreategrn_remove[".listFields"][] = "EnteredBy";

$tdatacreategrn_remove[".hideMobileList"] = array();


$tdatacreategrn_remove[".viewFields"] = array();
$tdatacreategrn_remove[".viewFields"][] = "ID";
$tdatacreategrn_remove[".viewFields"][] = "Status";
$tdatacreategrn_remove[".viewFields"][] = "Fleet";
$tdatacreategrn_remove[".viewFields"][] = "GRNDate";
$tdatacreategrn_remove[".viewFields"][] = "ItemCode";
$tdatacreategrn_remove[".viewFields"][] = "RemovedFrom";
$tdatacreategrn_remove[".viewFields"][] = "Brand";
$tdatacreategrn_remove[".viewFields"][] = "Description";
$tdatacreategrn_remove[".viewFields"][] = "Supplier";
$tdatacreategrn_remove[".viewFields"][] = "UnitPrice";
$tdatacreategrn_remove[".viewFields"][] = "Quantity";
$tdatacreategrn_remove[".viewFields"][] = "SystemDate";
$tdatacreategrn_remove[".viewFields"][] = "Cost";
$tdatacreategrn_remove[".viewFields"][] = "EnteredBy";
$tdatacreategrn_remove[".viewFields"][] = "ApprovedBy";

$tdatacreategrn_remove[".addFields"] = array();
$tdatacreategrn_remove[".addFields"][] = "Status";
$tdatacreategrn_remove[".addFields"][] = "Fleet";
$tdatacreategrn_remove[".addFields"][] = "GRNDate";
$tdatacreategrn_remove[".addFields"][] = "RemovedFrom";
$tdatacreategrn_remove[".addFields"][] = "ItemCode";
$tdatacreategrn_remove[".addFields"][] = "Brand";
$tdatacreategrn_remove[".addFields"][] = "Description";
$tdatacreategrn_remove[".addFields"][] = "Quantity";
$tdatacreategrn_remove[".addFields"][] = "Supplier";
$tdatacreategrn_remove[".addFields"][] = "UnitPrice";
$tdatacreategrn_remove[".addFields"][] = "SystemDate";
$tdatacreategrn_remove[".addFields"][] = "Cost";
$tdatacreategrn_remove[".addFields"][] = "EnteredBy";

$tdatacreategrn_remove[".masterListFields"] = array();
$tdatacreategrn_remove[".masterListFields"][] = "Status";
$tdatacreategrn_remove[".masterListFields"][] = "ID";
$tdatacreategrn_remove[".masterListFields"][] = "Fleet";
$tdatacreategrn_remove[".masterListFields"][] = "GRNDate";
$tdatacreategrn_remove[".masterListFields"][] = "RemovedFrom";
$tdatacreategrn_remove[".masterListFields"][] = "ItemCode";
$tdatacreategrn_remove[".masterListFields"][] = "Brand";
$tdatacreategrn_remove[".masterListFields"][] = "Description";
$tdatacreategrn_remove[".masterListFields"][] = "Supplier";
$tdatacreategrn_remove[".masterListFields"][] = "UnitPrice";
$tdatacreategrn_remove[".masterListFields"][] = "Quantity";
$tdatacreategrn_remove[".masterListFields"][] = "RefNumber";
$tdatacreategrn_remove[".masterListFields"][] = "SystemDate";
$tdatacreategrn_remove[".masterListFields"][] = "Cost";
$tdatacreategrn_remove[".masterListFields"][] = "CurrentStock";
$tdatacreategrn_remove[".masterListFields"][] = "EnteredBy";
$tdatacreategrn_remove[".masterListFields"][] = "ApprovedBy";

$tdatacreategrn_remove[".inlineAddFields"] = array();

$tdatacreategrn_remove[".editFields"] = array();
$tdatacreategrn_remove[".editFields"][] = "Status";
$tdatacreategrn_remove[".editFields"][] = "Fleet";
$tdatacreategrn_remove[".editFields"][] = "GRNDate";
$tdatacreategrn_remove[".editFields"][] = "ItemCode";
$tdatacreategrn_remove[".editFields"][] = "RemovedFrom";
$tdatacreategrn_remove[".editFields"][] = "Brand";
$tdatacreategrn_remove[".editFields"][] = "Description";
$tdatacreategrn_remove[".editFields"][] = "Supplier";
$tdatacreategrn_remove[".editFields"][] = "UnitPrice";
$tdatacreategrn_remove[".editFields"][] = "Quantity";
$tdatacreategrn_remove[".editFields"][] = "SystemDate";
$tdatacreategrn_remove[".editFields"][] = "Cost";
$tdatacreategrn_remove[".editFields"][] = "EnteredBy";
$tdatacreategrn_remove[".editFields"][] = "ApprovedBy";

$tdatacreategrn_remove[".inlineEditFields"] = array();

$tdatacreategrn_remove[".updateSelectedFields"] = array();
$tdatacreategrn_remove[".updateSelectedFields"][] = "Status";
$tdatacreategrn_remove[".updateSelectedFields"][] = "Fleet";
$tdatacreategrn_remove[".updateSelectedFields"][] = "GRNDate";
$tdatacreategrn_remove[".updateSelectedFields"][] = "ItemCode";
$tdatacreategrn_remove[".updateSelectedFields"][] = "RemovedFrom";
$tdatacreategrn_remove[".updateSelectedFields"][] = "Brand";
$tdatacreategrn_remove[".updateSelectedFields"][] = "Description";
$tdatacreategrn_remove[".updateSelectedFields"][] = "Supplier";
$tdatacreategrn_remove[".updateSelectedFields"][] = "UnitPrice";
$tdatacreategrn_remove[".updateSelectedFields"][] = "Quantity";
$tdatacreategrn_remove[".updateSelectedFields"][] = "SystemDate";
$tdatacreategrn_remove[".updateSelectedFields"][] = "Cost";
$tdatacreategrn_remove[".updateSelectedFields"][] = "EnteredBy";
$tdatacreategrn_remove[".updateSelectedFields"][] = "ApprovedBy";


$tdatacreategrn_remove[".exportFields"] = array();
$tdatacreategrn_remove[".exportFields"][] = "Status";
$tdatacreategrn_remove[".exportFields"][] = "ID";
$tdatacreategrn_remove[".exportFields"][] = "Fleet";
$tdatacreategrn_remove[".exportFields"][] = "GRNDate";
$tdatacreategrn_remove[".exportFields"][] = "ItemCode";
$tdatacreategrn_remove[".exportFields"][] = "RemovedFrom";
$tdatacreategrn_remove[".exportFields"][] = "Brand";
$tdatacreategrn_remove[".exportFields"][] = "Description";
$tdatacreategrn_remove[".exportFields"][] = "Supplier";
$tdatacreategrn_remove[".exportFields"][] = "UnitPrice";
$tdatacreategrn_remove[".exportFields"][] = "Quantity";
$tdatacreategrn_remove[".exportFields"][] = "SystemDate";
$tdatacreategrn_remove[".exportFields"][] = "Cost";
$tdatacreategrn_remove[".exportFields"][] = "EnteredBy";
$tdatacreategrn_remove[".exportFields"][] = "ApprovedBy";

$tdatacreategrn_remove[".importFields"] = array();
$tdatacreategrn_remove[".importFields"][] = "ID";
$tdatacreategrn_remove[".importFields"][] = "ItemCode";
$tdatacreategrn_remove[".importFields"][] = "Brand";
$tdatacreategrn_remove[".importFields"][] = "Description";
$tdatacreategrn_remove[".importFields"][] = "Supplier";
$tdatacreategrn_remove[".importFields"][] = "Quantity";
$tdatacreategrn_remove[".importFields"][] = "RemovedFrom";
$tdatacreategrn_remove[".importFields"][] = "SystemDate";
$tdatacreategrn_remove[".importFields"][] = "GRNDate";
$tdatacreategrn_remove[".importFields"][] = "EnteredBy";
$tdatacreategrn_remove[".importFields"][] = "ApprovedBy";
$tdatacreategrn_remove[".importFields"][] = "UnitPrice";
$tdatacreategrn_remove[".importFields"][] = "Status";
$tdatacreategrn_remove[".importFields"][] = "Fleet";
$tdatacreategrn_remove[".importFields"][] = "Cost";

$tdatacreategrn_remove[".printFields"] = array();
$tdatacreategrn_remove[".printFields"][] = "ID";
$tdatacreategrn_remove[".printFields"][] = "Status";
$tdatacreategrn_remove[".printFields"][] = "Fleet";
$tdatacreategrn_remove[".printFields"][] = "GRNDate";
$tdatacreategrn_remove[".printFields"][] = "ItemCode";
$tdatacreategrn_remove[".printFields"][] = "RemovedFrom";
$tdatacreategrn_remove[".printFields"][] = "Brand";
$tdatacreategrn_remove[".printFields"][] = "Description";
$tdatacreategrn_remove[".printFields"][] = "Supplier";
$tdatacreategrn_remove[".printFields"][] = "UnitPrice";
$tdatacreategrn_remove[".printFields"][] = "Quantity";
$tdatacreategrn_remove[".printFields"][] = "SystemDate";
$tdatacreategrn_remove[".printFields"][] = "Cost";
$tdatacreategrn_remove[".printFields"][] = "EnteredBy";
$tdatacreategrn_remove[".printFields"][] = "ApprovedBy";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove","ID");
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








	$tdatacreategrn_remove["ID"] = $fdata;
//	ItemCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemCode";
	$fdata["GoodName"] = "ItemCode";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove","ItemCode");
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
	$edata["LookupTable"] = "inventorymaster";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Brand", 'lookupF'=>"Brand");
	$edata["autoCompleteFields"][] = array('masterF'=>"Description", 'lookupF'=>"Description");
	$edata["autoCompleteFields"][] = array('masterF'=>"Supplier", 'lookupF'=>"Supplier");
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




	$tdatacreategrn_remove["ItemCode"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove","Brand");
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




	$tdatacreategrn_remove["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove","Description");
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




	$tdatacreategrn_remove["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove","Supplier");
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




	$tdatacreategrn_remove["Supplier"] = $fdata;
//	Quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Quantity";
	$fdata["GoodName"] = "Quantity";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove","Quantity");
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




	$tdatacreategrn_remove["Quantity"] = $fdata;
//	RemovedFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RemovedFrom";
	$fdata["GoodName"] = "RemovedFrom";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove","RemovedFrom");
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




	$tdatacreategrn_remove["RemovedFrom"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove","SystemDate");
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




	$tdatacreategrn_remove["SystemDate"] = $fdata;
//	GRNDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "GRNDate";
	$fdata["GoodName"] = "GRNDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove","GRNDate");
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




	$tdatacreategrn_remove["GRNDate"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove","EnteredBy");
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




	$tdatacreategrn_remove["EnteredBy"] = $fdata;
//	ApprovedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ApprovedBy";
	$fdata["GoodName"] = "ApprovedBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove","ApprovedBy");
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








	$tdatacreategrn_remove["ApprovedBy"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove","UnitPrice");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn_remove["UnitPrice"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove","Status");
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




	$tdatacreategrn_remove["Status"] = $fdata;
//	RefNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RefNumber";
	$fdata["GoodName"] = "RefNumber";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove","RefNumber");
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








	$tdatacreategrn_remove["RefNumber"] = $fdata;
//	CurrentStock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "CurrentStock";
	$fdata["GoodName"] = "CurrentStock";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove","CurrentStock");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "CurrentStock";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CurrentStock";

	
	
			
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








	$tdatacreategrn_remove["CurrentStock"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove","Fleet");
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




	$tdatacreategrn_remove["Fleet"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn_remove","Cost");
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




	$tdatacreategrn_remove["Cost"] = $fdata;


$tables_data["creategrn-remove"]=&$tdatacreategrn_remove;
$field_labels["creategrn_remove"] = &$fieldLabelscreategrn_remove;
$fieldToolTips["creategrn_remove"] = &$fieldToolTipscreategrn_remove;
$page_titles["creategrn_remove"] = &$pageTitlescreategrn_remove;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["creategrn-remove"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["creategrn-remove"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_creategrn_remove()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  CurrentStock,  Fleet,  Cost";
$proto0["m_strFrom"] = "FROM creategrn";
$proto0["m_strWhere"] = "Status =\"Tyre Removal\"";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "Status =\"Tyre Removal\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=\"Tyre Removal\"";
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
	"m_srcTableName" => "creategrn-remove"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "creategrn-remove";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove"
));

$proto8["m_sql"] = "ItemCode";
$proto8["m_srcTableName"] = "creategrn-remove";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove"
));

$proto10["m_sql"] = "Brand";
$proto10["m_srcTableName"] = "creategrn-remove";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove"
));

$proto12["m_sql"] = "Description";
$proto12["m_srcTableName"] = "creategrn-remove";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove"
));

$proto14["m_sql"] = "Supplier";
$proto14["m_srcTableName"] = "creategrn-remove";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove"
));

$proto16["m_sql"] = "Quantity";
$proto16["m_srcTableName"] = "creategrn-remove";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove"
));

$proto18["m_sql"] = "RemovedFrom";
$proto18["m_srcTableName"] = "creategrn-remove";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove"
));

$proto20["m_sql"] = "SystemDate";
$proto20["m_srcTableName"] = "creategrn-remove";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove"
));

$proto22["m_sql"] = "GRNDate";
$proto22["m_srcTableName"] = "creategrn-remove";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove"
));

$proto24["m_sql"] = "EnteredBy";
$proto24["m_srcTableName"] = "creategrn-remove";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove"
));

$proto26["m_sql"] = "ApprovedBy";
$proto26["m_srcTableName"] = "creategrn-remove";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove"
));

$proto28["m_sql"] = "UnitPrice";
$proto28["m_srcTableName"] = "creategrn-remove";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove"
));

$proto30["m_sql"] = "Status";
$proto30["m_srcTableName"] = "creategrn-remove";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove"
));

$proto32["m_sql"] = "RefNumber";
$proto32["m_srcTableName"] = "creategrn-remove";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "CurrentStock",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove"
));

$proto34["m_sql"] = "CurrentStock";
$proto34["m_srcTableName"] = "creategrn-remove";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove"
));

$proto36["m_sql"] = "Fleet";
$proto36["m_srcTableName"] = "creategrn-remove";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-remove"
));

$proto38["m_sql"] = "Cost";
$proto38["m_srcTableName"] = "creategrn-remove";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "creategrn";
$proto41["m_srcTableName"] = "creategrn-remove";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "ID";
$proto41["m_columns"][] = "ItemCode";
$proto41["m_columns"][] = "Brand";
$proto41["m_columns"][] = "Description";
$proto41["m_columns"][] = "Supplier";
$proto41["m_columns"][] = "Quantity";
$proto41["m_columns"][] = "RemovedFrom";
$proto41["m_columns"][] = "SystemDate";
$proto41["m_columns"][] = "GRNDate";
$proto41["m_columns"][] = "EnteredBy";
$proto41["m_columns"][] = "ApprovedBy";
$proto41["m_columns"][] = "UnitPrice";
$proto41["m_columns"][] = "Status";
$proto41["m_columns"][] = "RefNumber";
$proto41["m_columns"][] = "CurrentStock";
$proto41["m_columns"][] = "Fleet";
$proto41["m_columns"][] = "PriceLink";
$proto41["m_columns"][] = "Cost";
$proto41["m_columns"][] = "Remarks";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "creategrn";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "creategrn-remove";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="creategrn-remove";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_creategrn_remove = createSqlQuery_creategrn_remove();


	
					
;

																	

$tdatacreategrn_remove[".sqlquery"] = $queryData_creategrn_remove;

include_once(getabspath("include/creategrn_remove_events.php"));
$tableEvents["creategrn-remove"] = new eventclass_creategrn_remove;
$tdatacreategrn_remove[".hasEvents"] = true;

?>