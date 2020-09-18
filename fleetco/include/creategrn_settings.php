<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacreategrn = array();
	$tdatacreategrn[".truncateText"] = true;
	$tdatacreategrn[".NumberOfChars"] = 80;
	$tdatacreategrn[".ShortName"] = "creategrn";
	$tdatacreategrn[".OwnerID"] = "";
	$tdatacreategrn[".OriginalTable"] = "creategrn";

//	field labels
$fieldLabelscreategrn = array();
$fieldToolTipscreategrn = array();
$pageTitlescreategrn = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscreategrn["English"] = array();
	$fieldToolTipscreategrn["English"] = array();
	$pageTitlescreategrn["English"] = array();
	$fieldLabelscreategrn["English"]["ItemCode"] = "Item Code";
	$fieldToolTipscreategrn["English"]["ItemCode"] = "";
	$fieldLabelscreategrn["English"]["Brand"] = "Brand";
	$fieldToolTipscreategrn["English"]["Brand"] = "";
	$fieldLabelscreategrn["English"]["Description"] = "Descr.";
	$fieldToolTipscreategrn["English"]["Description"] = "";
	$fieldLabelscreategrn["English"]["Supplier"] = "Supplier";
	$fieldToolTipscreategrn["English"]["Supplier"] = "";
	$fieldLabelscreategrn["English"]["Quantity"] = "Qty";
	$fieldToolTipscreategrn["English"]["Quantity"] = "";
	$fieldLabelscreategrn["English"]["RemovedFrom"] = "Vehicle Ref";
	$fieldToolTipscreategrn["English"]["RemovedFrom"] = "";
	$fieldLabelscreategrn["English"]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn["English"]["SystemDate"] = "";
	$fieldLabelscreategrn["English"]["GRNDate"] = "Date";
	$fieldToolTipscreategrn["English"]["GRNDate"] = "";
	$fieldLabelscreategrn["English"]["EnteredBy"] = "Entered";
	$fieldToolTipscreategrn["English"]["EnteredBy"] = "";
	$fieldLabelscreategrn["English"]["ApprovedBy"] = "Last Edited";
	$fieldToolTipscreategrn["English"]["ApprovedBy"] = "";
	$fieldLabelscreategrn["English"]["Status"] = "Status";
	$fieldToolTipscreategrn["English"]["Status"] = "";
	$fieldLabelscreategrn["English"]["ID"] = "ID";
	$fieldToolTipscreategrn["English"]["ID"] = "";
	$fieldLabelscreategrn["English"]["UnitPrice"] = "Unit Price";
	$fieldToolTipscreategrn["English"]["UnitPrice"] = "";
	$fieldLabelscreategrn["English"]["RefNumber"] = "PO/GP Ref";
	$fieldToolTipscreategrn["English"]["RefNumber"] = "";
	$fieldLabelscreategrn["English"]["Cost"] = "Cost";
	$fieldToolTipscreategrn["English"]["Cost"] = "";
	$fieldLabelscreategrn["English"]["CurrentStock"] = "In-Stock";
	$fieldToolTipscreategrn["English"]["CurrentStock"] = "";
	$fieldLabelscreategrn["English"]["Fleet"] = "Fleet";
	$fieldToolTipscreategrn["English"]["Fleet"] = "";
	$fieldLabelscreategrn["English"]["PriceLink"] = "Price Link";
	$fieldToolTipscreategrn["English"]["PriceLink"] = "";
	$fieldLabelscreategrn["English"]["Remarks"] = "Remarks";
	$fieldToolTipscreategrn["English"]["Remarks"] = "";
	if (count($fieldToolTipscreategrn["English"]))
		$tdatacreategrn[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelscreategrn["Afrikaans"] = array();
	$fieldToolTipscreategrn["Afrikaans"] = array();
	$pageTitlescreategrn["Afrikaans"] = array();
	$fieldLabelscreategrn["Afrikaans"]["ID"] = "ID";
	$fieldToolTipscreategrn["Afrikaans"]["ID"] = "";
	$fieldLabelscreategrn["Afrikaans"]["ItemCode"] = "itemkode";
	$fieldToolTipscreategrn["Afrikaans"]["ItemCode"] = "";
	$fieldLabelscreategrn["Afrikaans"]["Brand"] = "Brand";
	$fieldToolTipscreategrn["Afrikaans"]["Brand"] = "";
	$fieldLabelscreategrn["Afrikaans"]["Description"] = "beskrywing";
	$fieldToolTipscreategrn["Afrikaans"]["Description"] = "";
	$fieldLabelscreategrn["Afrikaans"]["Supplier"] = "verskaffer";
	$fieldToolTipscreategrn["Afrikaans"]["Supplier"] = "";
	$fieldLabelscreategrn["Afrikaans"]["Quantity"] = "hoeveelheid";
	$fieldToolTipscreategrn["Afrikaans"]["Quantity"] = "";
	$fieldLabelscreategrn["Afrikaans"]["RemovedFrom"] = "voertuig Verwysing";
	$fieldToolTipscreategrn["Afrikaans"]["RemovedFrom"] = "";
	$fieldLabelscreategrn["Afrikaans"]["SystemDate"] = "stelsel Datum";
	$fieldToolTipscreategrn["Afrikaans"]["SystemDate"] = "";
	$fieldLabelscreategrn["Afrikaans"]["GRNDate"] = "datum";
	$fieldToolTipscreategrn["Afrikaans"]["GRNDate"] = "";
	$fieldLabelscreategrn["Afrikaans"]["EnteredBy"] = "ingevoer";
	$fieldToolTipscreategrn["Afrikaans"]["EnteredBy"] = "";
	$fieldLabelscreategrn["Afrikaans"]["ApprovedBy"] = "Geredigeer Datum";
	$fieldToolTipscreategrn["Afrikaans"]["ApprovedBy"] = "";
	$fieldLabelscreategrn["Afrikaans"]["UnitPrice"] = "Prys per eenheid";
	$fieldToolTipscreategrn["Afrikaans"]["UnitPrice"] = "";
	$fieldLabelscreategrn["Afrikaans"]["Status"] = "status";
	$fieldToolTipscreategrn["Afrikaans"]["Status"] = "";
	$fieldLabelscreategrn["Afrikaans"]["RefNumber"] = "Bestelling Verwysing";
	$fieldToolTipscreategrn["Afrikaans"]["RefNumber"] = "";
	$fieldLabelscreategrn["Afrikaans"]["CurrentStock"] = "Huidige Stock";
	$fieldToolTipscreategrn["Afrikaans"]["CurrentStock"] = "";
	$fieldLabelscreategrn["Afrikaans"]["Fleet"] = "vloot";
	$fieldToolTipscreategrn["Afrikaans"]["Fleet"] = "";
	$fieldLabelscreategrn["Afrikaans"]["PriceLink"] = "prys Link";
	$fieldToolTipscreategrn["Afrikaans"]["PriceLink"] = "";
	$fieldLabelscreategrn["Afrikaans"]["Cost"] = "koste";
	$fieldToolTipscreategrn["Afrikaans"]["Cost"] = "";
	$fieldLabelscreategrn["Afrikaans"]["Remarks"] = "opmerkings";
	$fieldToolTipscreategrn["Afrikaans"]["Remarks"] = "";
	if (count($fieldToolTipscreategrn["Afrikaans"]))
		$tdatacreategrn[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelscreategrn["Arabic"] = array();
	$fieldToolTipscreategrn["Arabic"] = array();
	$pageTitlescreategrn["Arabic"] = array();
	$fieldLabelscreategrn["Arabic"]["ID"] = "???? ?????";
	$fieldToolTipscreategrn["Arabic"]["ID"] = "";
	$fieldLabelscreategrn["Arabic"]["ItemCode"] = "??? ?????";
	$fieldToolTipscreategrn["Arabic"]["ItemCode"] = "";
	$fieldLabelscreategrn["Arabic"]["Brand"] = "????? ??????";
	$fieldToolTipscreategrn["Arabic"]["Brand"] = "";
	$fieldLabelscreategrn["Arabic"]["Description"] = "???";
	$fieldToolTipscreategrn["Arabic"]["Description"] = "";
	$fieldLabelscreategrn["Arabic"]["Supplier"] = "??????";
	$fieldToolTipscreategrn["Arabic"]["Supplier"] = "";
	$fieldLabelscreategrn["Arabic"]["Quantity"] = "????";
	$fieldToolTipscreategrn["Arabic"]["Quantity"] = "";
	$fieldLabelscreategrn["Arabic"]["RemovedFrom"] = "?????? ???????";
	$fieldToolTipscreategrn["Arabic"]["RemovedFrom"] = "";
	$fieldLabelscreategrn["Arabic"]["SystemDate"] = "????? ??????";
	$fieldToolTipscreategrn["Arabic"]["SystemDate"] = "";
	$fieldLabelscreategrn["Arabic"]["GRNDate"] = "?????";
	$fieldToolTipscreategrn["Arabic"]["GRNDate"] = "";
	$fieldLabelscreategrn["Arabic"]["EnteredBy"] = "???";
	$fieldToolTipscreategrn["Arabic"]["EnteredBy"] = "";
	$fieldLabelscreategrn["Arabic"]["ApprovedBy"] = "??????? ?????? ?? ???????";
	$fieldToolTipscreategrn["Arabic"]["ApprovedBy"] = "";
	$fieldLabelscreategrn["Arabic"]["UnitPrice"] = "????? ??? ????";
	$fieldToolTipscreategrn["Arabic"]["UnitPrice"] = "";
	$fieldLabelscreategrn["Arabic"]["Status"] = "??????";
	$fieldToolTipscreategrn["Arabic"]["Status"] = "";
	$fieldLabelscreategrn["Arabic"]["RefNumber"] = "??? ?????? ???????";
	$fieldToolTipscreategrn["Arabic"]["RefNumber"] = "";
	$fieldLabelscreategrn["Arabic"]["CurrentStock"] = "??????? ??????";
	$fieldToolTipscreategrn["Arabic"]["CurrentStock"] = "";
	$fieldLabelscreategrn["Arabic"]["Fleet"] = "?????";
	$fieldToolTipscreategrn["Arabic"]["Fleet"] = "";
	$fieldLabelscreategrn["Arabic"]["PriceLink"] = "??? ????";
	$fieldToolTipscreategrn["Arabic"]["PriceLink"] = "";
	$fieldLabelscreategrn["Arabic"]["Cost"] = "????";
	$fieldToolTipscreategrn["Arabic"]["Cost"] = "";
	$fieldLabelscreategrn["Arabic"]["Remarks"] = "???????";
	$fieldToolTipscreategrn["Arabic"]["Remarks"] = "";
	if (count($fieldToolTipscreategrn["Arabic"]))
		$tdatacreategrn[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelscreategrn["Chinese"] = array();
	$fieldToolTipscreategrn["Chinese"] = array();
	$pageTitlescreategrn["Chinese"] = array();
	$fieldLabelscreategrn["Chinese"]["ID"] = "ID";
	$fieldToolTipscreategrn["Chinese"]["ID"] = "";
	$fieldLabelscreategrn["Chinese"]["ItemCode"] = "????";
	$fieldToolTipscreategrn["Chinese"]["ItemCode"] = "";
	$fieldLabelscreategrn["Chinese"]["Brand"] = "?";
	$fieldToolTipscreategrn["Chinese"]["Brand"] = "";
	$fieldLabelscreategrn["Chinese"]["Description"] = "??";
	$fieldToolTipscreategrn["Chinese"]["Description"] = "";
	$fieldLabelscreategrn["Chinese"]["Supplier"] = "???";
	$fieldToolTipscreategrn["Chinese"]["Supplier"] = "";
	$fieldLabelscreategrn["Chinese"]["Quantity"] = "??";
	$fieldToolTipscreategrn["Chinese"]["Quantity"] = "";
	$fieldLabelscreategrn["Chinese"]["RemovedFrom"] = "????";
	$fieldToolTipscreategrn["Chinese"]["RemovedFrom"] = "";
	$fieldLabelscreategrn["Chinese"]["SystemDate"] = "????";
	$fieldToolTipscreategrn["Chinese"]["SystemDate"] = "";
	$fieldLabelscreategrn["Chinese"]["GRNDate"] = "??";
	$fieldToolTipscreategrn["Chinese"]["GRNDate"] = "";
	$fieldLabelscreategrn["Chinese"]["EnteredBy"] = "??";
	$fieldToolTipscreategrn["Chinese"]["EnteredBy"] = "";
	$fieldLabelscreategrn["Chinese"]["ApprovedBy"] = "??????";
	$fieldToolTipscreategrn["Chinese"]["ApprovedBy"] = "";
	$fieldLabelscreategrn["Chinese"]["UnitPrice"] = "?????";
	$fieldToolTipscreategrn["Chinese"]["UnitPrice"] = "";
	$fieldLabelscreategrn["Chinese"]["Status"] = "??";
	$fieldToolTipscreategrn["Chinese"]["Status"] = "";
	$fieldLabelscreategrn["Chinese"]["RefNumber"] = "??????";
	$fieldToolTipscreategrn["Chinese"]["RefNumber"] = "";
	$fieldLabelscreategrn["Chinese"]["CurrentStock"] = "????";
	$fieldToolTipscreategrn["Chinese"]["CurrentStock"] = "";
	$fieldLabelscreategrn["Chinese"]["Fleet"] = "??";
	$fieldToolTipscreategrn["Chinese"]["Fleet"] = "";
	$fieldLabelscreategrn["Chinese"]["PriceLink"] = "????";
	$fieldToolTipscreategrn["Chinese"]["PriceLink"] = "";
	$fieldLabelscreategrn["Chinese"]["Cost"] = "??";
	$fieldToolTipscreategrn["Chinese"]["Cost"] = "";
	$fieldLabelscreategrn["Chinese"]["Remarks"] = "??";
	$fieldToolTipscreategrn["Chinese"]["Remarks"] = "";
	if (count($fieldToolTipscreategrn["Chinese"]))
		$tdatacreategrn[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelscreategrn["French"] = array();
	$fieldToolTipscreategrn["French"] = array();
	$pageTitlescreategrn["French"] = array();
	$fieldLabelscreategrn["French"]["ID"] = "ID";
	$fieldToolTipscreategrn["French"]["ID"] = "";
	$fieldLabelscreategrn["French"]["ItemCode"] = "Code de l'article";
	$fieldToolTipscreategrn["French"]["ItemCode"] = "";
	$fieldLabelscreategrn["French"]["Brand"] = "Marque";
	$fieldToolTipscreategrn["French"]["Brand"] = "";
	$fieldLabelscreategrn["French"]["Description"] = "La description";
	$fieldToolTipscreategrn["French"]["Description"] = "";
	$fieldLabelscreategrn["French"]["Supplier"] = "Fournisseur";
	$fieldToolTipscreategrn["French"]["Supplier"] = "";
	$fieldLabelscreategrn["French"]["Quantity"] = "Quantité";
	$fieldToolTipscreategrn["French"]["Quantity"] = "";
	$fieldLabelscreategrn["French"]["RemovedFrom"] = "Référence du véhicule";
	$fieldToolTipscreategrn["French"]["RemovedFrom"] = "";
	$fieldLabelscreategrn["French"]["SystemDate"] = "Date du système";
	$fieldToolTipscreategrn["French"]["SystemDate"] = "";
	$fieldLabelscreategrn["French"]["GRNDate"] = "date";
	$fieldToolTipscreategrn["French"]["GRNDate"] = "";
	$fieldLabelscreategrn["French"]["EnteredBy"] = "Entré";
	$fieldToolTipscreategrn["French"]["EnteredBy"] = "";
	$fieldLabelscreategrn["French"]["ApprovedBy"] = "Date de la dernière édition";
	$fieldToolTipscreategrn["French"]["ApprovedBy"] = "";
	$fieldLabelscreategrn["French"]["UnitPrice"] = "Prix ??par unité";
	$fieldToolTipscreategrn["French"]["UnitPrice"] = "";
	$fieldLabelscreategrn["French"]["Status"] = "statut";
	$fieldToolTipscreategrn["French"]["Status"] = "";
	$fieldLabelscreategrn["French"]["RefNumber"] = "Référence du bon de commande";
	$fieldToolTipscreategrn["French"]["RefNumber"] = "";
	$fieldLabelscreategrn["French"]["CurrentStock"] = "Stock actuel";
	$fieldToolTipscreategrn["French"]["CurrentStock"] = "";
	$fieldLabelscreategrn["French"]["Fleet"] = "Flotte";
	$fieldToolTipscreategrn["French"]["Fleet"] = "";
	$fieldLabelscreategrn["French"]["PriceLink"] = "Prix ??Lien";
	$fieldToolTipscreategrn["French"]["PriceLink"] = "";
	$fieldLabelscreategrn["French"]["Cost"] = "Coût";
	$fieldToolTipscreategrn["French"]["Cost"] = "";
	$fieldLabelscreategrn["French"]["Remarks"] = "Remarques";
	$fieldToolTipscreategrn["French"]["Remarks"] = "";
	if (count($fieldToolTipscreategrn["French"]))
		$tdatacreategrn[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelscreategrn["German"] = array();
	$fieldToolTipscreategrn["German"] = array();
	$pageTitlescreategrn["German"] = array();
	$fieldLabelscreategrn["German"]["ID"] = "ICH WÜRDE";
	$fieldToolTipscreategrn["German"]["ID"] = "";
	$fieldLabelscreategrn["German"]["ItemCode"] = "Produktcode";
	$fieldToolTipscreategrn["German"]["ItemCode"] = "";
	$fieldLabelscreategrn["German"]["Brand"] = "Marke";
	$fieldToolTipscreategrn["German"]["Brand"] = "";
	$fieldLabelscreategrn["German"]["Description"] = "Beschreibung";
	$fieldToolTipscreategrn["German"]["Description"] = "";
	$fieldLabelscreategrn["German"]["Supplier"] = "Lieferant";
	$fieldToolTipscreategrn["German"]["Supplier"] = "";
	$fieldLabelscreategrn["German"]["Quantity"] = "Menge";
	$fieldToolTipscreategrn["German"]["Quantity"] = "";
	$fieldLabelscreategrn["German"]["RemovedFrom"] = "Fahrzeugreferenz";
	$fieldToolTipscreategrn["German"]["RemovedFrom"] = "";
	$fieldLabelscreategrn["German"]["SystemDate"] = "Systemdatum";
	$fieldToolTipscreategrn["German"]["SystemDate"] = "";
	$fieldLabelscreategrn["German"]["GRNDate"] = "Datum";
	$fieldToolTipscreategrn["German"]["GRNDate"] = "";
	$fieldLabelscreategrn["German"]["EnteredBy"] = "Eingegeben";
	$fieldToolTipscreategrn["German"]["EnteredBy"] = "";
	$fieldLabelscreategrn["German"]["ApprovedBy"] = "Datum der letzten Bearbeitung";
	$fieldToolTipscreategrn["German"]["ApprovedBy"] = "";
	$fieldLabelscreategrn["German"]["UnitPrice"] = "Preis pro Einheit";
	$fieldToolTipscreategrn["German"]["UnitPrice"] = "";
	$fieldLabelscreategrn["German"]["Status"] = "Status";
	$fieldToolTipscreategrn["German"]["Status"] = "";
	$fieldLabelscreategrn["German"]["RefNumber"] = "Bestellbezug";
	$fieldToolTipscreategrn["German"]["RefNumber"] = "";
	$fieldLabelscreategrn["German"]["CurrentStock"] = "Aktueller Lagerbestand";
	$fieldToolTipscreategrn["German"]["CurrentStock"] = "";
	$fieldLabelscreategrn["German"]["Fleet"] = "Flotte";
	$fieldToolTipscreategrn["German"]["Fleet"] = "";
	$fieldLabelscreategrn["German"]["PriceLink"] = "Preis Verbindung";
	$fieldToolTipscreategrn["German"]["PriceLink"] = "";
	$fieldLabelscreategrn["German"]["Cost"] = "Kosten";
	$fieldToolTipscreategrn["German"]["Cost"] = "";
	$fieldLabelscreategrn["German"]["Remarks"] = "Bemerkungen";
	$fieldToolTipscreategrn["German"]["Remarks"] = "";
	if (count($fieldToolTipscreategrn["German"]))
		$tdatacreategrn[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelscreategrn["Italian"] = array();
	$fieldToolTipscreategrn["Italian"] = array();
	$pageTitlescreategrn["Italian"] = array();
	$fieldLabelscreategrn["Italian"]["ID"] = "ID";
	$fieldToolTipscreategrn["Italian"]["ID"] = "";
	$fieldLabelscreategrn["Italian"]["ItemCode"] = "Codice articolo";
	$fieldToolTipscreategrn["Italian"]["ItemCode"] = "";
	$fieldLabelscreategrn["Italian"]["Brand"] = "Marca";
	$fieldToolTipscreategrn["Italian"]["Brand"] = "";
	$fieldLabelscreategrn["Italian"]["Description"] = "Descrizione";
	$fieldToolTipscreategrn["Italian"]["Description"] = "";
	$fieldLabelscreategrn["Italian"]["Supplier"] = "Fornitore";
	$fieldToolTipscreategrn["Italian"]["Supplier"] = "";
	$fieldLabelscreategrn["Italian"]["Quantity"] = "Quantità";
	$fieldToolTipscreategrn["Italian"]["Quantity"] = "";
	$fieldLabelscreategrn["Italian"]["RemovedFrom"] = "di riferimento del veicolo";
	$fieldToolTipscreategrn["Italian"]["RemovedFrom"] = "";
	$fieldLabelscreategrn["Italian"]["SystemDate"] = "Data di sistema";
	$fieldToolTipscreategrn["Italian"]["SystemDate"] = "";
	$fieldLabelscreategrn["Italian"]["GRNDate"] = "Data";
	$fieldToolTipscreategrn["Italian"]["GRNDate"] = "";
	$fieldLabelscreategrn["Italian"]["EnteredBy"] = "inserito";
	$fieldToolTipscreategrn["Italian"]["EnteredBy"] = "";
	$fieldLabelscreategrn["Italian"]["ApprovedBy"] = "Ultima data Edited";
	$fieldToolTipscreategrn["Italian"]["ApprovedBy"] = "";
	$fieldLabelscreategrn["Italian"]["UnitPrice"] = "Prezzo per unità";
	$fieldToolTipscreategrn["Italian"]["UnitPrice"] = "";
	$fieldLabelscreategrn["Italian"]["Status"] = "Stato";
	$fieldToolTipscreategrn["Italian"]["Status"] = "";
	$fieldLabelscreategrn["Italian"]["RefNumber"] = "Ordine di acquisto di riferimento";
	$fieldToolTipscreategrn["Italian"]["RefNumber"] = "";
	$fieldLabelscreategrn["Italian"]["CurrentStock"] = "Scorta attuale";
	$fieldToolTipscreategrn["Italian"]["CurrentStock"] = "";
	$fieldLabelscreategrn["Italian"]["Fleet"] = "Flotta";
	$fieldToolTipscreategrn["Italian"]["Fleet"] = "";
	$fieldLabelscreategrn["Italian"]["PriceLink"] = "Prezzo link";
	$fieldToolTipscreategrn["Italian"]["PriceLink"] = "";
	$fieldLabelscreategrn["Italian"]["Cost"] = "Costo";
	$fieldToolTipscreategrn["Italian"]["Cost"] = "";
	$fieldLabelscreategrn["Italian"]["Remarks"] = "Osservazioni";
	$fieldToolTipscreategrn["Italian"]["Remarks"] = "";
	if (count($fieldToolTipscreategrn["Italian"]))
		$tdatacreategrn[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelscreategrn["Russian"] = array();
	$fieldToolTipscreategrn["Russian"] = array();
	$pageTitlescreategrn["Russian"] = array();
	$fieldLabelscreategrn["Russian"]["ID"] = "? ??";
	$fieldToolTipscreategrn["Russian"]["ID"] = "";
	$fieldLabelscreategrn["Russian"]["ItemCode"] = "??? ??????";
	$fieldToolTipscreategrn["Russian"]["ItemCode"] = "";
	$fieldLabelscreategrn["Russian"]["Brand"] = "?????";
	$fieldToolTipscreategrn["Russian"]["Brand"] = "";
	$fieldLabelscreategrn["Russian"]["Description"] = "????????";
	$fieldToolTipscreategrn["Russian"]["Description"] = "";
	$fieldLabelscreategrn["Russian"]["Supplier"] = "?????????";
	$fieldToolTipscreategrn["Russian"]["Supplier"] = "";
	$fieldLabelscreategrn["Russian"]["Quantity"] = "??????????";
	$fieldToolTipscreategrn["Russian"]["Quantity"] = "";
	$fieldLabelscreategrn["Russian"]["RemovedFrom"] = "?????????? ???????????? ???????";
	$fieldToolTipscreategrn["Russian"]["RemovedFrom"] = "";
	$fieldLabelscreategrn["Russian"]["SystemDate"] = "System Date";
	$fieldToolTipscreategrn["Russian"]["SystemDate"] = "";
	$fieldLabelscreategrn["Russian"]["GRNDate"] = "????";
	$fieldToolTipscreategrn["Russian"]["GRNDate"] = "";
	$fieldLabelscreategrn["Russian"]["EnteredBy"] = "?????";
	$fieldToolTipscreategrn["Russian"]["EnteredBy"] = "";
	$fieldLabelscreategrn["Russian"]["ApprovedBy"] = "????????? ??? ??????????????? ????";
	$fieldToolTipscreategrn["Russian"]["ApprovedBy"] = "";
	$fieldLabelscreategrn["Russian"]["UnitPrice"] = "???? ?? ???????";
	$fieldToolTipscreategrn["Russian"]["UnitPrice"] = "";
	$fieldLabelscreategrn["Russian"]["Status"] = "????????? ???";
	$fieldToolTipscreategrn["Russian"]["Status"] = "";
	$fieldLabelscreategrn["Russian"]["RefNumber"] = "??????? ??? ??????";
	$fieldToolTipscreategrn["Russian"]["RefNumber"] = "";
	$fieldLabelscreategrn["Russian"]["CurrentStock"] = "??????? ?? ??????";
	$fieldToolTipscreategrn["Russian"]["CurrentStock"] = "";
	$fieldLabelscreategrn["Russian"]["Fleet"] = "????";
	$fieldToolTipscreategrn["Russian"]["Fleet"] = "";
	$fieldLabelscreategrn["Russian"]["PriceLink"] = "???? ??????";
	$fieldToolTipscreategrn["Russian"]["PriceLink"] = "";
	$fieldLabelscreategrn["Russian"]["Cost"] = "?????????";
	$fieldToolTipscreategrn["Russian"]["Cost"] = "";
	$fieldLabelscreategrn["Russian"]["Remarks"] = "?????????";
	$fieldToolTipscreategrn["Russian"]["Remarks"] = "";
	if (count($fieldToolTipscreategrn["Russian"]))
		$tdatacreategrn[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscreategrn["Spanish"] = array();
	$fieldToolTipscreategrn["Spanish"] = array();
	$pageTitlescreategrn["Spanish"] = array();
	$fieldLabelscreategrn["Spanish"]["ID"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipscreategrn["Spanish"]["ID"] = "";
	$fieldLabelscreategrn["Spanish"]["ItemCode"] = "Código del objeto";
	$fieldToolTipscreategrn["Spanish"]["ItemCode"] = "";
	$fieldLabelscreategrn["Spanish"]["Brand"] = "Marca";
	$fieldToolTipscreategrn["Spanish"]["Brand"] = "";
	$fieldLabelscreategrn["Spanish"]["Description"] = "Descripción";
	$fieldToolTipscreategrn["Spanish"]["Description"] = "";
	$fieldLabelscreategrn["Spanish"]["Supplier"] = "Proveedor";
	$fieldToolTipscreategrn["Spanish"]["Supplier"] = "";
	$fieldLabelscreategrn["Spanish"]["Quantity"] = "Cantidad";
	$fieldToolTipscreategrn["Spanish"]["Quantity"] = "";
	$fieldLabelscreategrn["Spanish"]["RemovedFrom"] = "Referencia del vehículo";
	$fieldToolTipscreategrn["Spanish"]["RemovedFrom"] = "";
	$fieldLabelscreategrn["Spanish"]["SystemDate"] = "Fecha del sistema";
	$fieldToolTipscreategrn["Spanish"]["SystemDate"] = "";
	$fieldLabelscreategrn["Spanish"]["GRNDate"] = "Fecha";
	$fieldToolTipscreategrn["Spanish"]["GRNDate"] = "";
	$fieldLabelscreategrn["Spanish"]["EnteredBy"] = "Ingresó";
	$fieldToolTipscreategrn["Spanish"]["EnteredBy"] = "";
	$fieldLabelscreategrn["Spanish"]["ApprovedBy"] = "Fecha de la última edición";
	$fieldToolTipscreategrn["Spanish"]["ApprovedBy"] = "";
	$fieldLabelscreategrn["Spanish"]["UnitPrice"] = "Precio por unidad";
	$fieldToolTipscreategrn["Spanish"]["UnitPrice"] = "";
	$fieldLabelscreategrn["Spanish"]["Status"] = "Estado";
	$fieldToolTipscreategrn["Spanish"]["Status"] = "";
	$fieldLabelscreategrn["Spanish"]["RefNumber"] = "Referencia de órdenes de compra";
	$fieldToolTipscreategrn["Spanish"]["RefNumber"] = "";
	$fieldLabelscreategrn["Spanish"]["CurrentStock"] = "Acciones actuales";
	$fieldToolTipscreategrn["Spanish"]["CurrentStock"] = "";
	$fieldLabelscreategrn["Spanish"]["Fleet"] = "Flota";
	$fieldToolTipscreategrn["Spanish"]["Fleet"] = "";
	$fieldLabelscreategrn["Spanish"]["PriceLink"] = "Precio Enlace";
	$fieldToolTipscreategrn["Spanish"]["PriceLink"] = "";
	$fieldLabelscreategrn["Spanish"]["Cost"] = "Costo";
	$fieldToolTipscreategrn["Spanish"]["Cost"] = "";
	$fieldLabelscreategrn["Spanish"]["Remarks"] = "Observaciones";
	$fieldToolTipscreategrn["Spanish"]["Remarks"] = "";
	if (count($fieldToolTipscreategrn["Spanish"]))
		$tdatacreategrn[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscreategrn[""] = array();
	$fieldToolTipscreategrn[""] = array();
	$pageTitlescreategrn[""] = array();
	if (count($fieldToolTipscreategrn[""]))
		$tdatacreategrn[".isUseToolTips"] = true;
}


	$tdatacreategrn[".NCSearch"] = true;



$tdatacreategrn[".shortTableName"] = "creategrn";
$tdatacreategrn[".nSecOptions"] = 0;
$tdatacreategrn[".recsPerRowPrint"] = 1;
$tdatacreategrn[".mainTableOwnerID"] = "";
$tdatacreategrn[".moveNext"] = 1;
$tdatacreategrn[".entityType"] = 0;

$tdatacreategrn[".strOriginalTableName"] = "creategrn";

		 



$tdatacreategrn[".showAddInPopup"] = false;

$tdatacreategrn[".showEditInPopup"] = false;

$tdatacreategrn[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacreategrn[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacreategrn[".fieldsForRegister"] = array();

	$tdatacreategrn[".listAjax"] = true;

	$tdatacreategrn[".audit"] = false;

	$tdatacreategrn[".locking"] = false;



$tdatacreategrn[".list"] = true;




$tdatacreategrn[".view"] = true;


$tdatacreategrn[".exportTo"] = true;

$tdatacreategrn[".printFriendly"] = true;


$tdatacreategrn[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacreategrn[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatacreategrn[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatacreategrn[".searchSaving"] = false;
//

$tdatacreategrn[".showSearchPanel"] = true;
		$tdatacreategrn[".flexibleSearch"] = true;

$tdatacreategrn[".isUseAjaxSuggest"] = true;

$tdatacreategrn[".rowHighlite"] = true;



$tdatacreategrn[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacreategrn[".isUseTimeForSearch"] = false;



$tdatacreategrn[".badgeColor"] = "D2AF80";


$tdatacreategrn[".allSearchFields"] = array();
$tdatacreategrn[".filterFields"] = array();
$tdatacreategrn[".requiredSearchFields"] = array();

$tdatacreategrn[".allSearchFields"][] = "Fleet";
	$tdatacreategrn[".allSearchFields"][] = "SystemDate";
	$tdatacreategrn[".allSearchFields"][] = "GRNDate";
	$tdatacreategrn[".allSearchFields"][] = "Status";
	$tdatacreategrn[".allSearchFields"][] = "RemovedFrom";
	$tdatacreategrn[".allSearchFields"][] = "RefNumber";
	$tdatacreategrn[".allSearchFields"][] = "ItemCode";
	$tdatacreategrn[".allSearchFields"][] = "Brand";
	$tdatacreategrn[".allSearchFields"][] = "Description";
	$tdatacreategrn[".allSearchFields"][] = "Supplier";
	$tdatacreategrn[".allSearchFields"][] = "UnitPrice";
	$tdatacreategrn[".allSearchFields"][] = "Quantity";
	$tdatacreategrn[".allSearchFields"][] = "Cost";
	$tdatacreategrn[".allSearchFields"][] = "CurrentStock";
	$tdatacreategrn[".allSearchFields"][] = "Remarks";
	$tdatacreategrn[".allSearchFields"][] = "EnteredBy";
	

$tdatacreategrn[".googleLikeFields"] = array();
$tdatacreategrn[".googleLikeFields"][] = "ItemCode";
$tdatacreategrn[".googleLikeFields"][] = "Brand";
$tdatacreategrn[".googleLikeFields"][] = "Description";
$tdatacreategrn[".googleLikeFields"][] = "Supplier";
$tdatacreategrn[".googleLikeFields"][] = "Quantity";
$tdatacreategrn[".googleLikeFields"][] = "RemovedFrom";
$tdatacreategrn[".googleLikeFields"][] = "SystemDate";
$tdatacreategrn[".googleLikeFields"][] = "GRNDate";
$tdatacreategrn[".googleLikeFields"][] = "EnteredBy";
$tdatacreategrn[".googleLikeFields"][] = "UnitPrice";
$tdatacreategrn[".googleLikeFields"][] = "Status";
$tdatacreategrn[".googleLikeFields"][] = "RefNumber";
$tdatacreategrn[".googleLikeFields"][] = "CurrentStock";
$tdatacreategrn[".googleLikeFields"][] = "Fleet";
$tdatacreategrn[".googleLikeFields"][] = "PriceLink";
$tdatacreategrn[".googleLikeFields"][] = "Cost";
$tdatacreategrn[".googleLikeFields"][] = "Remarks";

$tdatacreategrn[".panelSearchFields"] = array();
$tdatacreategrn[".searchPanelOptions"] = array();
$tdatacreategrn[".panelSearchFields"][] = "GRNDate";
	
$tdatacreategrn[".advSearchFields"] = array();
$tdatacreategrn[".advSearchFields"][] = "Fleet";
$tdatacreategrn[".advSearchFields"][] = "SystemDate";
$tdatacreategrn[".advSearchFields"][] = "GRNDate";
$tdatacreategrn[".advSearchFields"][] = "Status";
$tdatacreategrn[".advSearchFields"][] = "RemovedFrom";
$tdatacreategrn[".advSearchFields"][] = "RefNumber";
$tdatacreategrn[".advSearchFields"][] = "ItemCode";
$tdatacreategrn[".advSearchFields"][] = "Brand";
$tdatacreategrn[".advSearchFields"][] = "Description";
$tdatacreategrn[".advSearchFields"][] = "Supplier";
$tdatacreategrn[".advSearchFields"][] = "UnitPrice";
$tdatacreategrn[".advSearchFields"][] = "Quantity";
$tdatacreategrn[".advSearchFields"][] = "Cost";
$tdatacreategrn[".advSearchFields"][] = "CurrentStock";
$tdatacreategrn[".advSearchFields"][] = "Remarks";
$tdatacreategrn[".advSearchFields"][] = "EnteredBy";

$tdatacreategrn[".tableType"] = "list";

$tdatacreategrn[".printerPageOrientation"] = 0;
$tdatacreategrn[".nPrinterPageScale"] = 100;

$tdatacreategrn[".nPrinterSplitRecords"] = 40;

$tdatacreategrn[".nPrinterPDFSplitRecords"] = 40;



$tdatacreategrn[".geocodingEnabled"] = false;





$tdatacreategrn[".listGridLayout"] = 3;


$tdatacreategrn[".isResizeColumns"] = true;



// view page pdf
$tdatacreategrn[".isViewPagePDF"] = true;
$tdatacreategrn[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatacreategrn[".isPrinterPagePDF"] = true;
$tdatacreategrn[".nPrinterPagePDFScale"] = 100;

$tdatacreategrn[".totalsFields"] = array();
$tdatacreategrn[".totalsFields"][] = array(
	"fName" => "UnitPrice",
	"numRows" => 0,
	"totalsType" => "AVERAGE",
	"viewFormat" => 'Number');
$tdatacreategrn[".totalsFields"][] = array(
	"fName" => "Quantity",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatacreategrn[".totalsFields"][] = array(
	"fName" => "Cost",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatacreategrn[".pageSize"] = 20;

$tdatacreategrn[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacreategrn[".strOrderBy"] = $tstrOrderBy;

$tdatacreategrn[".orderindexes"] = array();

$tdatacreategrn[".sqlHead"] = "SELECT ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  CurrentStock,  Fleet,  PriceLink,  Quantity*UnitPrice AS Cost,  Remarks";
$tdatacreategrn[".sqlFrom"] = "FROM creategrn";
$tdatacreategrn[".sqlWhereExpr"] = "";
$tdatacreategrn[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatacreategrn[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacreategrn[".arrGroupsPerPage"] = $arrGPP;

$tdatacreategrn[".highlightSearchResults"] = true;

$tableKeyscreategrn = array();
$tableKeyscreategrn[] = "ID";
$tdatacreategrn[".Keys"] = $tableKeyscreategrn;

$tdatacreategrn[".listFields"] = array();
$tdatacreategrn[".listFields"][] = "ID";
$tdatacreategrn[".listFields"][] = "SystemDate";
$tdatacreategrn[".listFields"][] = "GRNDate";
$tdatacreategrn[".listFields"][] = "Fleet";
$tdatacreategrn[".listFields"][] = "Status";
$tdatacreategrn[".listFields"][] = "RemovedFrom";
$tdatacreategrn[".listFields"][] = "RefNumber";
$tdatacreategrn[".listFields"][] = "ItemCode";
$tdatacreategrn[".listFields"][] = "Brand";
$tdatacreategrn[".listFields"][] = "Description";
$tdatacreategrn[".listFields"][] = "Supplier";
$tdatacreategrn[".listFields"][] = "UnitPrice";
$tdatacreategrn[".listFields"][] = "Quantity";
$tdatacreategrn[".listFields"][] = "Cost";
$tdatacreategrn[".listFields"][] = "Remarks";
$tdatacreategrn[".listFields"][] = "EnteredBy";

$tdatacreategrn[".hideMobileList"] = array();


$tdatacreategrn[".viewFields"] = array();
$tdatacreategrn[".viewFields"][] = "Fleet";
$tdatacreategrn[".viewFields"][] = "ID";
$tdatacreategrn[".viewFields"][] = "SystemDate";
$tdatacreategrn[".viewFields"][] = "GRNDate";
$tdatacreategrn[".viewFields"][] = "Status";
$tdatacreategrn[".viewFields"][] = "RemovedFrom";
$tdatacreategrn[".viewFields"][] = "RefNumber";
$tdatacreategrn[".viewFields"][] = "ItemCode";
$tdatacreategrn[".viewFields"][] = "Brand";
$tdatacreategrn[".viewFields"][] = "Description";
$tdatacreategrn[".viewFields"][] = "Supplier";
$tdatacreategrn[".viewFields"][] = "UnitPrice";
$tdatacreategrn[".viewFields"][] = "Quantity";
$tdatacreategrn[".viewFields"][] = "Cost";
$tdatacreategrn[".viewFields"][] = "CurrentStock";
$tdatacreategrn[".viewFields"][] = "Remarks";
$tdatacreategrn[".viewFields"][] = "EnteredBy";
$tdatacreategrn[".viewFields"][] = "ApprovedBy";

$tdatacreategrn[".addFields"] = array();

$tdatacreategrn[".masterListFields"] = array();
$tdatacreategrn[".masterListFields"][] = "PriceLink";
$tdatacreategrn[".masterListFields"][] = "Fleet";
$tdatacreategrn[".masterListFields"][] = "Remarks";
$tdatacreategrn[".masterListFields"][] = "ID";
$tdatacreategrn[".masterListFields"][] = "SystemDate";
$tdatacreategrn[".masterListFields"][] = "GRNDate";
$tdatacreategrn[".masterListFields"][] = "Status";
$tdatacreategrn[".masterListFields"][] = "RemovedFrom";
$tdatacreategrn[".masterListFields"][] = "RefNumber";
$tdatacreategrn[".masterListFields"][] = "ItemCode";
$tdatacreategrn[".masterListFields"][] = "Brand";
$tdatacreategrn[".masterListFields"][] = "Description";
$tdatacreategrn[".masterListFields"][] = "Supplier";
$tdatacreategrn[".masterListFields"][] = "UnitPrice";
$tdatacreategrn[".masterListFields"][] = "Quantity";
$tdatacreategrn[".masterListFields"][] = "Cost";
$tdatacreategrn[".masterListFields"][] = "CurrentStock";
$tdatacreategrn[".masterListFields"][] = "EnteredBy";
$tdatacreategrn[".masterListFields"][] = "ApprovedBy";

$tdatacreategrn[".inlineAddFields"] = array();

$tdatacreategrn[".editFields"] = array();

$tdatacreategrn[".inlineEditFields"] = array();

$tdatacreategrn[".updateSelectedFields"] = array();


$tdatacreategrn[".exportFields"] = array();
$tdatacreategrn[".exportFields"][] = "Fleet";
$tdatacreategrn[".exportFields"][] = "ID";
$tdatacreategrn[".exportFields"][] = "SystemDate";
$tdatacreategrn[".exportFields"][] = "GRNDate";
$tdatacreategrn[".exportFields"][] = "Status";
$tdatacreategrn[".exportFields"][] = "RemovedFrom";
$tdatacreategrn[".exportFields"][] = "RefNumber";
$tdatacreategrn[".exportFields"][] = "ItemCode";
$tdatacreategrn[".exportFields"][] = "Brand";
$tdatacreategrn[".exportFields"][] = "Description";
$tdatacreategrn[".exportFields"][] = "Supplier";
$tdatacreategrn[".exportFields"][] = "UnitPrice";
$tdatacreategrn[".exportFields"][] = "Quantity";
$tdatacreategrn[".exportFields"][] = "Cost";
$tdatacreategrn[".exportFields"][] = "CurrentStock";
$tdatacreategrn[".exportFields"][] = "Remarks";
$tdatacreategrn[".exportFields"][] = "EnteredBy";
$tdatacreategrn[".exportFields"][] = "ApprovedBy";

$tdatacreategrn[".importFields"] = array();

$tdatacreategrn[".printFields"] = array();
$tdatacreategrn[".printFields"][] = "Fleet";
$tdatacreategrn[".printFields"][] = "ID";
$tdatacreategrn[".printFields"][] = "SystemDate";
$tdatacreategrn[".printFields"][] = "GRNDate";
$tdatacreategrn[".printFields"][] = "Status";
$tdatacreategrn[".printFields"][] = "RemovedFrom";
$tdatacreategrn[".printFields"][] = "RefNumber";
$tdatacreategrn[".printFields"][] = "ItemCode";
$tdatacreategrn[".printFields"][] = "Brand";
$tdatacreategrn[".printFields"][] = "Description";
$tdatacreategrn[".printFields"][] = "Supplier";
$tdatacreategrn[".printFields"][] = "UnitPrice";
$tdatacreategrn[".printFields"][] = "Quantity";
$tdatacreategrn[".printFields"][] = "Cost";
$tdatacreategrn[".printFields"][] = "CurrentStock";
$tdatacreategrn[".printFields"][] = "Remarks";
$tdatacreategrn[".printFields"][] = "EnteredBy";
$tdatacreategrn[".printFields"][] = "ApprovedBy";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn","ID");
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








	$tdatacreategrn["ID"] = $fdata;
//	ItemCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemCode";
	$fdata["GoodName"] = "ItemCode";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn","ItemCode");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn["ItemCode"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn","Brand");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatacreategrn["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn","Description");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatacreategrn["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn","Supplier");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn["Supplier"] = $fdata;
//	Quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Quantity";
	$fdata["GoodName"] = "Quantity";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn","Quantity");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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




	$tdatacreategrn["Quantity"] = $fdata;
//	RemovedFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RemovedFrom";
	$fdata["GoodName"] = "RemovedFrom";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn","RemovedFrom");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn["RemovedFrom"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn","SystemDate");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatacreategrn["SystemDate"] = $fdata;
//	GRNDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "GRNDate";
	$fdata["GoodName"] = "GRNDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn","GRNDate");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

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
		$fdata["defaultSearchOption"] = "Between";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings




	$tdatacreategrn["GRNDate"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn","EnteredBy");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn["EnteredBy"] = $fdata;
//	ApprovedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ApprovedBy";
	$fdata["GoodName"] = "ApprovedBy";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn","ApprovedBy");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	

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








	$tdatacreategrn["ApprovedBy"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn","UnitPrice");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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




	$tdatacreategrn["UnitPrice"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn","Status");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Receipt - New";
	$edata["LookupValues"][] = "Receipt - Used";
	$edata["LookupValues"][] = "Issue - New";
	$edata["LookupValues"][] = "Issue - Used";

	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn["Status"] = $fdata;
//	RefNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RefNumber";
	$fdata["GoodName"] = "RefNumber";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn","RefNumber");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RefNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RefNumber";

	
	
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




	$tdatacreategrn["RefNumber"] = $fdata;
//	CurrentStock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "CurrentStock";
	$fdata["GoodName"] = "CurrentStock";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn","CurrentStock");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CurrentStock";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CurrentStock";

	
	
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




	$tdatacreategrn["CurrentStock"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn","Fleet");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacreategrn["Fleet"] = $fdata;
//	PriceLink
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "PriceLink";
	$fdata["GoodName"] = "PriceLink";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn","PriceLink");
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








	$tdatacreategrn["PriceLink"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("creategrn","Cost");
	$fdata["FieldType"] = 5;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Cost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Quantity*UnitPrice";

	
	
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




	$tdatacreategrn["Cost"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("creategrn","Remarks");
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




	$tdatacreategrn["Remarks"] = $fdata;


$tables_data["creategrn"]=&$tdatacreategrn;
$field_labels["creategrn"] = &$fieldLabelscreategrn;
$fieldToolTips["creategrn"] = &$fieldToolTipscreategrn;
$page_titles["creategrn"] = &$pageTitlescreategrn;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["creategrn"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["creategrn"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_creategrn()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  ItemCode,  Brand,  Description,  Supplier,  Quantity,  RemovedFrom,  SystemDate,  GRNDate,  EnteredBy,  ApprovedBy,  UnitPrice,  Status,  RefNumber,  CurrentStock,  Fleet,  PriceLink,  Quantity*UnitPrice AS Cost,  Remarks";
$proto0["m_strFrom"] = "FROM creategrn";
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
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "creategrn";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemCode",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn"
));

$proto8["m_sql"] = "ItemCode";
$proto8["m_srcTableName"] = "creategrn";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn"
));

$proto10["m_sql"] = "Brand";
$proto10["m_srcTableName"] = "creategrn";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn"
));

$proto12["m_sql"] = "Description";
$proto12["m_srcTableName"] = "creategrn";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn"
));

$proto14["m_sql"] = "Supplier";
$proto14["m_srcTableName"] = "creategrn";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn"
));

$proto16["m_sql"] = "Quantity";
$proto16["m_srcTableName"] = "creategrn";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "RemovedFrom",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn"
));

$proto18["m_sql"] = "RemovedFrom";
$proto18["m_srcTableName"] = "creategrn";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn"
));

$proto20["m_sql"] = "SystemDate";
$proto20["m_srcTableName"] = "creategrn";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn"
));

$proto22["m_sql"] = "GRNDate";
$proto22["m_srcTableName"] = "creategrn";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn"
));

$proto24["m_sql"] = "EnteredBy";
$proto24["m_srcTableName"] = "creategrn";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ApprovedBy",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn"
));

$proto26["m_sql"] = "ApprovedBy";
$proto26["m_srcTableName"] = "creategrn";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn"
));

$proto28["m_sql"] = "UnitPrice";
$proto28["m_srcTableName"] = "creategrn";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn"
));

$proto30["m_sql"] = "Status";
$proto30["m_srcTableName"] = "creategrn";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "RefNumber",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn"
));

$proto32["m_sql"] = "RefNumber";
$proto32["m_srcTableName"] = "creategrn";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "CurrentStock",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn"
));

$proto34["m_sql"] = "CurrentStock";
$proto34["m_srcTableName"] = "creategrn";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn"
));

$proto36["m_sql"] = "Fleet";
$proto36["m_srcTableName"] = "creategrn";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "PriceLink",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn"
));

$proto38["m_sql"] = "PriceLink";
$proto38["m_srcTableName"] = "creategrn";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "Quantity*UnitPrice"
));

$proto40["m_sql"] = "Quantity*UnitPrice";
$proto40["m_srcTableName"] = "creategrn";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "Cost";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn"
));

$proto42["m_sql"] = "Remarks";
$proto42["m_srcTableName"] = "creategrn";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "creategrn";
$proto45["m_srcTableName"] = "creategrn";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "ID";
$proto45["m_columns"][] = "ItemCode";
$proto45["m_columns"][] = "Brand";
$proto45["m_columns"][] = "Description";
$proto45["m_columns"][] = "Supplier";
$proto45["m_columns"][] = "Quantity";
$proto45["m_columns"][] = "RemovedFrom";
$proto45["m_columns"][] = "SystemDate";
$proto45["m_columns"][] = "GRNDate";
$proto45["m_columns"][] = "EnteredBy";
$proto45["m_columns"][] = "ApprovedBy";
$proto45["m_columns"][] = "UnitPrice";
$proto45["m_columns"][] = "Status";
$proto45["m_columns"][] = "RefNumber";
$proto45["m_columns"][] = "CurrentStock";
$proto45["m_columns"][] = "Fleet";
$proto45["m_columns"][] = "PriceLink";
$proto45["m_columns"][] = "Cost";
$proto45["m_columns"][] = "Remarks";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "creategrn";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "creategrn";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="creategrn";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_creategrn = createSqlQuery_creategrn();


	
					
;

																			

$tdatacreategrn[".sqlquery"] = $queryData_creategrn;

$tableEvents["creategrn"] = new eventsBase;
$tdatacreategrn[".hasEvents"] = false;

?>