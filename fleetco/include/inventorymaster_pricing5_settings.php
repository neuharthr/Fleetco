<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainventorymaster_pricing5 = array();
	$tdatainventorymaster_pricing5[".truncateText"] = true;
	$tdatainventorymaster_pricing5[".NumberOfChars"] = 80;
	$tdatainventorymaster_pricing5[".ShortName"] = "inventorymaster_pricing5";
	$tdatainventorymaster_pricing5[".OwnerID"] = "";
	$tdatainventorymaster_pricing5[".OriginalTable"] = "inventorymaster";

//	field labels
$fieldLabelsinventorymaster_pricing5 = array();
$fieldToolTipsinventorymaster_pricing5 = array();
$pageTitlesinventorymaster_pricing5 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinventorymaster_pricing5["English"] = array();
	$fieldToolTipsinventorymaster_pricing5["English"] = array();
	$pageTitlesinventorymaster_pricing5["English"] = array();
	$fieldLabelsinventorymaster_pricing5["English"]["Id"] = "Id";
	$fieldToolTipsinventorymaster_pricing5["English"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing5["English"]["ItemID"] = "Item ID";
	$fieldToolTipsinventorymaster_pricing5["English"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing5["English"]["Brand"] = "Brand";
	$fieldToolTipsinventorymaster_pricing5["English"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing5["English"]["Description"] = "Description";
	$fieldToolTipsinventorymaster_pricing5["English"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing5["English"]["Supplier"] = "Supplier";
	$fieldToolTipsinventorymaster_pricing5["English"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing5["English"]["UnitPrice"] = "Unit Price";
	$fieldToolTipsinventorymaster_pricing5["English"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing5["English"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing5["English"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing5["English"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing5["English"]["ID1"] = "";
	$fieldLabelsinventorymaster_pricing5["English"]["Status"] = "Status";
	$fieldToolTipsinventorymaster_pricing5["English"]["Status"] = "";
	$fieldLabelsinventorymaster_pricing5["English"]["creategrn_ID"] = "Creategrn.ID";
	$fieldToolTipsinventorymaster_pricing5["English"]["creategrn_ID"] = "";
	if (count($fieldToolTipsinventorymaster_pricing5["English"]))
		$tdatainventorymaster_pricing5[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsinventorymaster_pricing5["Afrikaans"] = array();
	$fieldToolTipsinventorymaster_pricing5["Afrikaans"] = array();
	$pageTitlesinventorymaster_pricing5["Afrikaans"] = array();
	$fieldLabelsinventorymaster_pricing5["Afrikaans"]["Id"] = "ID";
	$fieldToolTipsinventorymaster_pricing5["Afrikaans"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing5["Afrikaans"]["ItemID"] = "item ID";
	$fieldToolTipsinventorymaster_pricing5["Afrikaans"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing5["Afrikaans"]["Brand"] = "Brand";
	$fieldToolTipsinventorymaster_pricing5["Afrikaans"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing5["Afrikaans"]["Description"] = "beskrywing";
	$fieldToolTipsinventorymaster_pricing5["Afrikaans"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing5["Afrikaans"]["Supplier"] = "verskaffer";
	$fieldToolTipsinventorymaster_pricing5["Afrikaans"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing5["Afrikaans"]["UnitPrice"] = "Eenheidsprys";
	$fieldToolTipsinventorymaster_pricing5["Afrikaans"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing5["Afrikaans"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing5["Afrikaans"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing5["Afrikaans"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing5["Afrikaans"]["ID1"] = "";
	$fieldLabelsinventorymaster_pricing5["Afrikaans"]["Status"] = "status";
	$fieldToolTipsinventorymaster_pricing5["Afrikaans"]["Status"] = "";
	$fieldLabelsinventorymaster_pricing5["Afrikaans"]["creategrn_ID"] = "Creategrn.ID";
	$fieldToolTipsinventorymaster_pricing5["Afrikaans"]["creategrn_ID"] = "";
	if (count($fieldToolTipsinventorymaster_pricing5["Afrikaans"]))
		$tdatainventorymaster_pricing5[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsinventorymaster_pricing5["Arabic"] = array();
	$fieldToolTipsinventorymaster_pricing5["Arabic"] = array();
	$pageTitlesinventorymaster_pricing5["Arabic"] = array();
	$fieldLabelsinventorymaster_pricing5["Arabic"]["Id"] = "???? ?????";
	$fieldToolTipsinventorymaster_pricing5["Arabic"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing5["Arabic"]["ItemID"] = "??? ??????";
	$fieldToolTipsinventorymaster_pricing5["Arabic"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing5["Arabic"]["Brand"] = "????? ??????";
	$fieldToolTipsinventorymaster_pricing5["Arabic"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing5["Arabic"]["Description"] = "???";
	$fieldToolTipsinventorymaster_pricing5["Arabic"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing5["Arabic"]["Supplier"] = "??????";
	$fieldToolTipsinventorymaster_pricing5["Arabic"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing5["Arabic"]["UnitPrice"] = "??? ??????";
	$fieldToolTipsinventorymaster_pricing5["Arabic"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing5["Arabic"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing5["Arabic"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing5["Arabic"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing5["Arabic"]["ID1"] = "";
	$fieldLabelsinventorymaster_pricing5["Arabic"]["Status"] = "??????";
	$fieldToolTipsinventorymaster_pricing5["Arabic"]["Status"] = "";
	$fieldLabelsinventorymaster_pricing5["Arabic"]["creategrn_ID"] = "Creategrn.ID";
	$fieldToolTipsinventorymaster_pricing5["Arabic"]["creategrn_ID"] = "";
	if (count($fieldToolTipsinventorymaster_pricing5["Arabic"]))
		$tdatainventorymaster_pricing5[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsinventorymaster_pricing5["Chinese"] = array();
	$fieldToolTipsinventorymaster_pricing5["Chinese"] = array();
	$pageTitlesinventorymaster_pricing5["Chinese"] = array();
	$fieldLabelsinventorymaster_pricing5["Chinese"]["Id"] = "ID";
	$fieldToolTipsinventorymaster_pricing5["Chinese"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing5["Chinese"]["ItemID"] = "??ID";
	$fieldToolTipsinventorymaster_pricing5["Chinese"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing5["Chinese"]["Brand"] = "?";
	$fieldToolTipsinventorymaster_pricing5["Chinese"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing5["Chinese"]["Description"] = "??";
	$fieldToolTipsinventorymaster_pricing5["Chinese"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing5["Chinese"]["Supplier"] = "???";
	$fieldToolTipsinventorymaster_pricing5["Chinese"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing5["Chinese"]["UnitPrice"] = "??";
	$fieldToolTipsinventorymaster_pricing5["Chinese"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing5["Chinese"]["GRNDate"] = "GRNDATE";
	$fieldToolTipsinventorymaster_pricing5["Chinese"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing5["Chinese"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing5["Chinese"]["ID1"] = "";
	$fieldLabelsinventorymaster_pricing5["Chinese"]["Status"] = "??";
	$fieldToolTipsinventorymaster_pricing5["Chinese"]["Status"] = "";
	$fieldLabelsinventorymaster_pricing5["Chinese"]["creategrn_ID"] = "Creategrn.ID";
	$fieldToolTipsinventorymaster_pricing5["Chinese"]["creategrn_ID"] = "";
	if (count($fieldToolTipsinventorymaster_pricing5["Chinese"]))
		$tdatainventorymaster_pricing5[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsinventorymaster_pricing5["French"] = array();
	$fieldToolTipsinventorymaster_pricing5["French"] = array();
	$pageTitlesinventorymaster_pricing5["French"] = array();
	$fieldLabelsinventorymaster_pricing5["French"]["Id"] = "Id";
	$fieldToolTipsinventorymaster_pricing5["French"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing5["French"]["ItemID"] = "ID de l'article";
	$fieldToolTipsinventorymaster_pricing5["French"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing5["French"]["Brand"] = "Marque";
	$fieldToolTipsinventorymaster_pricing5["French"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing5["French"]["Description"] = "La description";
	$fieldToolTipsinventorymaster_pricing5["French"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing5["French"]["Supplier"] = "Fournisseur";
	$fieldToolTipsinventorymaster_pricing5["French"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing5["French"]["UnitPrice"] = "Prix ??unitaire";
	$fieldToolTipsinventorymaster_pricing5["French"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing5["French"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing5["French"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing5["French"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing5["French"]["ID1"] = "";
	$fieldLabelsinventorymaster_pricing5["French"]["Status"] = "statut";
	$fieldToolTipsinventorymaster_pricing5["French"]["Status"] = "";
	$fieldLabelsinventorymaster_pricing5["French"]["creategrn_ID"] = "Creategrn.ID";
	$fieldToolTipsinventorymaster_pricing5["French"]["creategrn_ID"] = "";
	if (count($fieldToolTipsinventorymaster_pricing5["French"]))
		$tdatainventorymaster_pricing5[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsinventorymaster_pricing5["German"] = array();
	$fieldToolTipsinventorymaster_pricing5["German"] = array();
	$pageTitlesinventorymaster_pricing5["German"] = array();
	$fieldLabelsinventorymaster_pricing5["German"]["Id"] = "Ich würde";
	$fieldToolTipsinventorymaster_pricing5["German"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing5["German"]["ItemID"] = "Artikel Identifikationsnummer";
	$fieldToolTipsinventorymaster_pricing5["German"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing5["German"]["Brand"] = "Marke";
	$fieldToolTipsinventorymaster_pricing5["German"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing5["German"]["Description"] = "Beschreibung";
	$fieldToolTipsinventorymaster_pricing5["German"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing5["German"]["Supplier"] = "Lieferant";
	$fieldToolTipsinventorymaster_pricing5["German"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing5["German"]["UnitPrice"] = "Einzelpreis";
	$fieldToolTipsinventorymaster_pricing5["German"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing5["German"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing5["German"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing5["German"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing5["German"]["ID1"] = "";
	$fieldLabelsinventorymaster_pricing5["German"]["Status"] = "Status";
	$fieldToolTipsinventorymaster_pricing5["German"]["Status"] = "";
	$fieldLabelsinventorymaster_pricing5["German"]["creategrn_ID"] = "Creategrn.ID";
	$fieldToolTipsinventorymaster_pricing5["German"]["creategrn_ID"] = "";
	if (count($fieldToolTipsinventorymaster_pricing5["German"]))
		$tdatainventorymaster_pricing5[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsinventorymaster_pricing5["Italian"] = array();
	$fieldToolTipsinventorymaster_pricing5["Italian"] = array();
	$pageTitlesinventorymaster_pricing5["Italian"] = array();
	$fieldLabelsinventorymaster_pricing5["Italian"]["Id"] = "Id";
	$fieldToolTipsinventorymaster_pricing5["Italian"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing5["Italian"]["ItemID"] = "Numero identificativo dell'oggetto";
	$fieldToolTipsinventorymaster_pricing5["Italian"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing5["Italian"]["Brand"] = "Marca";
	$fieldToolTipsinventorymaster_pricing5["Italian"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing5["Italian"]["Description"] = "Descrizione";
	$fieldToolTipsinventorymaster_pricing5["Italian"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing5["Italian"]["Supplier"] = "Fornitore";
	$fieldToolTipsinventorymaster_pricing5["Italian"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing5["Italian"]["UnitPrice"] = "Prezzo unitario";
	$fieldToolTipsinventorymaster_pricing5["Italian"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing5["Italian"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing5["Italian"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing5["Italian"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing5["Italian"]["ID1"] = "";
	$fieldLabelsinventorymaster_pricing5["Italian"]["Status"] = "Stato";
	$fieldToolTipsinventorymaster_pricing5["Italian"]["Status"] = "";
	$fieldLabelsinventorymaster_pricing5["Italian"]["creategrn_ID"] = "Creategrn.ID";
	$fieldToolTipsinventorymaster_pricing5["Italian"]["creategrn_ID"] = "";
	if (count($fieldToolTipsinventorymaster_pricing5["Italian"]))
		$tdatainventorymaster_pricing5[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsinventorymaster_pricing5["Russian"] = array();
	$fieldToolTipsinventorymaster_pricing5["Russian"] = array();
	$pageTitlesinventorymaster_pricing5["Russian"] = array();
	$fieldLabelsinventorymaster_pricing5["Russian"]["Id"] = "? ??";
	$fieldToolTipsinventorymaster_pricing5["Russian"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing5["Russian"]["ItemID"] = "Item ID";
	$fieldToolTipsinventorymaster_pricing5["Russian"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing5["Russian"]["Brand"] = "?????";
	$fieldToolTipsinventorymaster_pricing5["Russian"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing5["Russian"]["Description"] = "????????";
	$fieldToolTipsinventorymaster_pricing5["Russian"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing5["Russian"]["Supplier"] = "?????????";
	$fieldToolTipsinventorymaster_pricing5["Russian"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing5["Russian"]["UnitPrice"] = "???? ?? ???????";
	$fieldToolTipsinventorymaster_pricing5["Russian"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing5["Russian"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing5["Russian"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing5["Russian"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing5["Russian"]["ID1"] = "";
	$fieldLabelsinventorymaster_pricing5["Russian"]["Status"] = "????????? ???";
	$fieldToolTipsinventorymaster_pricing5["Russian"]["Status"] = "";
	$fieldLabelsinventorymaster_pricing5["Russian"]["creategrn_ID"] = "Creategrn.ID";
	$fieldToolTipsinventorymaster_pricing5["Russian"]["creategrn_ID"] = "";
	if (count($fieldToolTipsinventorymaster_pricing5["Russian"]))
		$tdatainventorymaster_pricing5[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinventorymaster_pricing5["Spanish"] = array();
	$fieldToolTipsinventorymaster_pricing5["Spanish"] = array();
	$pageTitlesinventorymaster_pricing5["Spanish"] = array();
	$fieldLabelsinventorymaster_pricing5["Spanish"]["Id"] = "Carné de identidad";
	$fieldToolTipsinventorymaster_pricing5["Spanish"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing5["Spanish"]["ItemID"] = "Identificación del artículo";
	$fieldToolTipsinventorymaster_pricing5["Spanish"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing5["Spanish"]["Brand"] = "Marca";
	$fieldToolTipsinventorymaster_pricing5["Spanish"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing5["Spanish"]["Description"] = "Descripción";
	$fieldToolTipsinventorymaster_pricing5["Spanish"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing5["Spanish"]["Supplier"] = "Proveedor";
	$fieldToolTipsinventorymaster_pricing5["Spanish"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing5["Spanish"]["UnitPrice"] = "Precio unitario";
	$fieldToolTipsinventorymaster_pricing5["Spanish"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing5["Spanish"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing5["Spanish"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing5["Spanish"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing5["Spanish"]["ID1"] = "";
	$fieldLabelsinventorymaster_pricing5["Spanish"]["Status"] = "Estado";
	$fieldToolTipsinventorymaster_pricing5["Spanish"]["Status"] = "";
	$fieldLabelsinventorymaster_pricing5["Spanish"]["creategrn_ID"] = "Creategrn.ID";
	$fieldToolTipsinventorymaster_pricing5["Spanish"]["creategrn_ID"] = "";
	if (count($fieldToolTipsinventorymaster_pricing5["Spanish"]))
		$tdatainventorymaster_pricing5[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinventorymaster_pricing5[""] = array();
	$fieldToolTipsinventorymaster_pricing5[""] = array();
	$pageTitlesinventorymaster_pricing5[""] = array();
	if (count($fieldToolTipsinventorymaster_pricing5[""]))
		$tdatainventorymaster_pricing5[".isUseToolTips"] = true;
}


	$tdatainventorymaster_pricing5[".NCSearch"] = true;



$tdatainventorymaster_pricing5[".shortTableName"] = "inventorymaster_pricing5";
$tdatainventorymaster_pricing5[".nSecOptions"] = 0;
$tdatainventorymaster_pricing5[".recsPerRowPrint"] = 1;
$tdatainventorymaster_pricing5[".mainTableOwnerID"] = "";
$tdatainventorymaster_pricing5[".moveNext"] = 1;
$tdatainventorymaster_pricing5[".entityType"] = 1;

$tdatainventorymaster_pricing5[".strOriginalTableName"] = "inventorymaster";

		 



$tdatainventorymaster_pricing5[".showAddInPopup"] = false;

$tdatainventorymaster_pricing5[".showEditInPopup"] = false;

$tdatainventorymaster_pricing5[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainventorymaster_pricing5[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainventorymaster_pricing5[".fieldsForRegister"] = array();

	$tdatainventorymaster_pricing5[".listAjax"] = true;

	$tdatainventorymaster_pricing5[".audit"] = false;

	$tdatainventorymaster_pricing5[".locking"] = false;

$tdatainventorymaster_pricing5[".edit"] = true;
$tdatainventorymaster_pricing5[".afterEditAction"] = 1;
$tdatainventorymaster_pricing5[".closePopupAfterEdit"] = 1;
$tdatainventorymaster_pricing5[".afterEditActionDetTable"] = "";

$tdatainventorymaster_pricing5[".add"] = true;
$tdatainventorymaster_pricing5[".afterAddAction"] = 1;
$tdatainventorymaster_pricing5[".closePopupAfterAdd"] = 1;
$tdatainventorymaster_pricing5[".afterAddActionDetTable"] = "";

$tdatainventorymaster_pricing5[".list"] = true;




$tdatainventorymaster_pricing5[".view"] = true;

$tdatainventorymaster_pricing5[".import"] = true;

$tdatainventorymaster_pricing5[".exportTo"] = true;

$tdatainventorymaster_pricing5[".printFriendly"] = true;

$tdatainventorymaster_pricing5[".delete"] = true;

$tdatainventorymaster_pricing5[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatainventorymaster_pricing5[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatainventorymaster_pricing5[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatainventorymaster_pricing5[".searchSaving"] = false;
//

$tdatainventorymaster_pricing5[".showSearchPanel"] = true;
		$tdatainventorymaster_pricing5[".flexibleSearch"] = true;

$tdatainventorymaster_pricing5[".isUseAjaxSuggest"] = true;

$tdatainventorymaster_pricing5[".rowHighlite"] = true;



$tdatainventorymaster_pricing5[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainventorymaster_pricing5[".isUseTimeForSearch"] = false;





$tdatainventorymaster_pricing5[".allSearchFields"] = array();
$tdatainventorymaster_pricing5[".filterFields"] = array();
$tdatainventorymaster_pricing5[".requiredSearchFields"] = array();

$tdatainventorymaster_pricing5[".allSearchFields"][] = "ItemID";
	$tdatainventorymaster_pricing5[".allSearchFields"][] = "Brand";
	$tdatainventorymaster_pricing5[".allSearchFields"][] = "Description";
	$tdatainventorymaster_pricing5[".allSearchFields"][] = "Supplier";
	$tdatainventorymaster_pricing5[".allSearchFields"][] = "UnitPrice";
	$tdatainventorymaster_pricing5[".allSearchFields"][] = "GRNDate";
	$tdatainventorymaster_pricing5[".allSearchFields"][] = "ID1";
	$tdatainventorymaster_pricing5[".allSearchFields"][] = "Status";
	$tdatainventorymaster_pricing5[".allSearchFields"][] = "creategrn.ID";
	

$tdatainventorymaster_pricing5[".googleLikeFields"] = array();
$tdatainventorymaster_pricing5[".googleLikeFields"][] = "Id";
$tdatainventorymaster_pricing5[".googleLikeFields"][] = "ItemID";
$tdatainventorymaster_pricing5[".googleLikeFields"][] = "Brand";
$tdatainventorymaster_pricing5[".googleLikeFields"][] = "Description";
$tdatainventorymaster_pricing5[".googleLikeFields"][] = "Supplier";
$tdatainventorymaster_pricing5[".googleLikeFields"][] = "UnitPrice";
$tdatainventorymaster_pricing5[".googleLikeFields"][] = "GRNDate";
$tdatainventorymaster_pricing5[".googleLikeFields"][] = "ID1";
$tdatainventorymaster_pricing5[".googleLikeFields"][] = "Status";
$tdatainventorymaster_pricing5[".googleLikeFields"][] = "creategrn.ID";


$tdatainventorymaster_pricing5[".advSearchFields"] = array();
$tdatainventorymaster_pricing5[".advSearchFields"][] = "ItemID";
$tdatainventorymaster_pricing5[".advSearchFields"][] = "Brand";
$tdatainventorymaster_pricing5[".advSearchFields"][] = "Description";
$tdatainventorymaster_pricing5[".advSearchFields"][] = "Supplier";
$tdatainventorymaster_pricing5[".advSearchFields"][] = "UnitPrice";
$tdatainventorymaster_pricing5[".advSearchFields"][] = "GRNDate";
$tdatainventorymaster_pricing5[".advSearchFields"][] = "ID1";
$tdatainventorymaster_pricing5[".advSearchFields"][] = "Status";
$tdatainventorymaster_pricing5[".advSearchFields"][] = "creategrn.ID";

$tdatainventorymaster_pricing5[".tableType"] = "list";

$tdatainventorymaster_pricing5[".printerPageOrientation"] = 0;
$tdatainventorymaster_pricing5[".nPrinterPageScale"] = 100;

$tdatainventorymaster_pricing5[".nPrinterSplitRecords"] = 40;

$tdatainventorymaster_pricing5[".nPrinterPDFSplitRecords"] = 40;



$tdatainventorymaster_pricing5[".geocodingEnabled"] = false;





$tdatainventorymaster_pricing5[".listGridLayout"] = 3;


$tdatainventorymaster_pricing5[".isResizeColumns"] = true;



// view page pdf
$tdatainventorymaster_pricing5[".isViewPagePDF"] = true;
$tdatainventorymaster_pricing5[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatainventorymaster_pricing5[".isPrinterPagePDF"] = true;
$tdatainventorymaster_pricing5[".nPrinterPagePDFScale"] = 100;


$tdatainventorymaster_pricing5[".pageSize"] = 20;

$tdatainventorymaster_pricing5[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY creategrn.ID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainventorymaster_pricing5[".strOrderBy"] = $tstrOrderBy;

$tdatainventorymaster_pricing5[".orderindexes"] = array();
$tdatainventorymaster_pricing5[".orderindexes"][] = array(8, (0 ? "ASC" : "DESC"), "creategrn.ID");

$tdatainventorymaster_pricing5[".sqlHead"] = "SELECT inventorymaster.Id,  inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  creategrn.UnitPrice,  creategrn.GRNDate,  MAX(creategrn.ID) AS ID1,  creategrn.Status,  creategrn.ID AS `creategrn.ID`";
$tdatainventorymaster_pricing5[".sqlFrom"] = "FROM inventorymaster  INNER JOIN creategrn ON inventorymaster.ItemID = creategrn.ItemCode";
$tdatainventorymaster_pricing5[".sqlWhereExpr"] = "";
$tdatainventorymaster_pricing5[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatainventorymaster_pricing5[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainventorymaster_pricing5[".arrGroupsPerPage"] = $arrGPP;

$tdatainventorymaster_pricing5[".highlightSearchResults"] = true;

$tableKeysinventorymaster_pricing5 = array();
$tableKeysinventorymaster_pricing5[] = "Id";
$tdatainventorymaster_pricing5[".Keys"] = $tableKeysinventorymaster_pricing5;

$tdatainventorymaster_pricing5[".listFields"] = array();
$tdatainventorymaster_pricing5[".listFields"][] = "Status";
$tdatainventorymaster_pricing5[".listFields"][] = "creategrn.ID";
$tdatainventorymaster_pricing5[".listFields"][] = "UnitPrice";
$tdatainventorymaster_pricing5[".listFields"][] = "GRNDate";
$tdatainventorymaster_pricing5[".listFields"][] = "ID1";
$tdatainventorymaster_pricing5[".listFields"][] = "ItemID";
$tdatainventorymaster_pricing5[".listFields"][] = "Brand";
$tdatainventorymaster_pricing5[".listFields"][] = "Description";
$tdatainventorymaster_pricing5[".listFields"][] = "Supplier";

$tdatainventorymaster_pricing5[".hideMobileList"] = array();


$tdatainventorymaster_pricing5[".viewFields"] = array();
$tdatainventorymaster_pricing5[".viewFields"][] = "ItemID";
$tdatainventorymaster_pricing5[".viewFields"][] = "Brand";
$tdatainventorymaster_pricing5[".viewFields"][] = "Description";
$tdatainventorymaster_pricing5[".viewFields"][] = "Supplier";
$tdatainventorymaster_pricing5[".viewFields"][] = "UnitPrice";
$tdatainventorymaster_pricing5[".viewFields"][] = "GRNDate";
$tdatainventorymaster_pricing5[".viewFields"][] = "ID1";
$tdatainventorymaster_pricing5[".viewFields"][] = "Status";
$tdatainventorymaster_pricing5[".viewFields"][] = "creategrn.ID";

$tdatainventorymaster_pricing5[".addFields"] = array();
$tdatainventorymaster_pricing5[".addFields"][] = "ItemID";
$tdatainventorymaster_pricing5[".addFields"][] = "Brand";
$tdatainventorymaster_pricing5[".addFields"][] = "Description";
$tdatainventorymaster_pricing5[".addFields"][] = "Supplier";

$tdatainventorymaster_pricing5[".masterListFields"] = array();
$tdatainventorymaster_pricing5[".masterListFields"][] = "Id";
$tdatainventorymaster_pricing5[".masterListFields"][] = "ItemID";
$tdatainventorymaster_pricing5[".masterListFields"][] = "Brand";
$tdatainventorymaster_pricing5[".masterListFields"][] = "Description";
$tdatainventorymaster_pricing5[".masterListFields"][] = "Supplier";
$tdatainventorymaster_pricing5[".masterListFields"][] = "UnitPrice";
$tdatainventorymaster_pricing5[".masterListFields"][] = "GRNDate";
$tdatainventorymaster_pricing5[".masterListFields"][] = "ID1";
$tdatainventorymaster_pricing5[".masterListFields"][] = "Status";
$tdatainventorymaster_pricing5[".masterListFields"][] = "creategrn.ID";

$tdatainventorymaster_pricing5[".inlineAddFields"] = array();

$tdatainventorymaster_pricing5[".editFields"] = array();
$tdatainventorymaster_pricing5[".editFields"][] = "ItemID";
$tdatainventorymaster_pricing5[".editFields"][] = "Brand";
$tdatainventorymaster_pricing5[".editFields"][] = "Description";
$tdatainventorymaster_pricing5[".editFields"][] = "Supplier";

$tdatainventorymaster_pricing5[".inlineEditFields"] = array();

$tdatainventorymaster_pricing5[".updateSelectedFields"] = array();
$tdatainventorymaster_pricing5[".updateSelectedFields"][] = "ItemID";
$tdatainventorymaster_pricing5[".updateSelectedFields"][] = "Brand";
$tdatainventorymaster_pricing5[".updateSelectedFields"][] = "Description";
$tdatainventorymaster_pricing5[".updateSelectedFields"][] = "Supplier";


$tdatainventorymaster_pricing5[".exportFields"] = array();
$tdatainventorymaster_pricing5[".exportFields"][] = "ItemID";
$tdatainventorymaster_pricing5[".exportFields"][] = "Brand";
$tdatainventorymaster_pricing5[".exportFields"][] = "Description";
$tdatainventorymaster_pricing5[".exportFields"][] = "Supplier";
$tdatainventorymaster_pricing5[".exportFields"][] = "UnitPrice";
$tdatainventorymaster_pricing5[".exportFields"][] = "GRNDate";
$tdatainventorymaster_pricing5[".exportFields"][] = "ID1";
$tdatainventorymaster_pricing5[".exportFields"][] = "Status";
$tdatainventorymaster_pricing5[".exportFields"][] = "creategrn.ID";

$tdatainventorymaster_pricing5[".importFields"] = array();
$tdatainventorymaster_pricing5[".importFields"][] = "ItemID";
$tdatainventorymaster_pricing5[".importFields"][] = "Brand";
$tdatainventorymaster_pricing5[".importFields"][] = "Description";
$tdatainventorymaster_pricing5[".importFields"][] = "Supplier";
$tdatainventorymaster_pricing5[".importFields"][] = "UnitPrice";
$tdatainventorymaster_pricing5[".importFields"][] = "GRNDate";
$tdatainventorymaster_pricing5[".importFields"][] = "ID1";
$tdatainventorymaster_pricing5[".importFields"][] = "Status";
$tdatainventorymaster_pricing5[".importFields"][] = "creategrn.ID";

$tdatainventorymaster_pricing5[".printFields"] = array();
$tdatainventorymaster_pricing5[".printFields"][] = "ItemID";
$tdatainventorymaster_pricing5[".printFields"][] = "Brand";
$tdatainventorymaster_pricing5[".printFields"][] = "Description";
$tdatainventorymaster_pricing5[".printFields"][] = "Supplier";
$tdatainventorymaster_pricing5[".printFields"][] = "UnitPrice";
$tdatainventorymaster_pricing5[".printFields"][] = "GRNDate";
$tdatainventorymaster_pricing5[".printFields"][] = "ID1";
$tdatainventorymaster_pricing5[".printFields"][] = "Status";
$tdatainventorymaster_pricing5[".printFields"][] = "creategrn.ID";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing5","Id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inventorymaster.Id";

	
	
			
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








	$tdatainventorymaster_pricing5["Id"] = $fdata;
//	ItemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemID";
	$fdata["GoodName"] = "ItemID";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing5","ItemID");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ItemID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inventorymaster.ItemID";

	
	
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




	$tdatainventorymaster_pricing5["ItemID"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing5","Brand");
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
	$fdata["FullName"] = "inventorymaster.Brand";

	
	
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




	$tdatainventorymaster_pricing5["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing5","Description");
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
	$fdata["FullName"] = "inventorymaster.Description";

	
	
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




	$tdatainventorymaster_pricing5["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing5","Supplier");
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
	$fdata["FullName"] = "inventorymaster.Supplier";

	
	
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




	$tdatainventorymaster_pricing5["Supplier"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing5","UnitPrice");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UnitPrice";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creategrn.UnitPrice";

	
	
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




	$tdatainventorymaster_pricing5["UnitPrice"] = $fdata;
//	GRNDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "GRNDate";
	$fdata["GoodName"] = "GRNDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing5","GRNDate");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "GRNDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creategrn.GRNDate";

	
	
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




	$tdatainventorymaster_pricing5["GRNDate"] = $fdata;
//	ID1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ID1";
	$fdata["GoodName"] = "ID1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing5","ID1");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX(creategrn.ID)";

	
	
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




	$tdatainventorymaster_pricing5["ID1"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing5","Status");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creategrn.Status";

	
	
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




	$tdatainventorymaster_pricing5["Status"] = $fdata;
//	creategrn.ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "creategrn.ID";
	$fdata["GoodName"] = "creategrn_ID";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing5","creategrn_ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creategrn.ID";

	
	
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




	$tdatainventorymaster_pricing5["creategrn.ID"] = $fdata;


$tables_data["inventorymaster-pricing5"]=&$tdatainventorymaster_pricing5;
$field_labels["inventorymaster_pricing5"] = &$fieldLabelsinventorymaster_pricing5;
$fieldToolTips["inventorymaster_pricing5"] = &$fieldToolTipsinventorymaster_pricing5;
$page_titles["inventorymaster_pricing5"] = &$pageTitlesinventorymaster_pricing5;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inventorymaster-pricing5"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["inventorymaster-pricing5"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inventorymaster_pricing5()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "inventorymaster.Id,  inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  creategrn.UnitPrice,  creategrn.GRNDate,  MAX(creategrn.ID) AS ID1,  creategrn.Status,  creategrn.ID AS `creategrn.ID`";
$proto0["m_strFrom"] = "FROM inventorymaster  INNER JOIN creategrn ON inventorymaster.ItemID = creategrn.ItemCode";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY creategrn.ID DESC";
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
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing5"
));

$proto6["m_sql"] = "inventorymaster.Id";
$proto6["m_srcTableName"] = "inventorymaster-pricing5";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing5"
));

$proto8["m_sql"] = "inventorymaster.ItemID";
$proto8["m_srcTableName"] = "inventorymaster-pricing5";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing5"
));

$proto10["m_sql"] = "inventorymaster.Brand";
$proto10["m_srcTableName"] = "inventorymaster-pricing5";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing5"
));

$proto12["m_sql"] = "inventorymaster.Description";
$proto12["m_srcTableName"] = "inventorymaster-pricing5";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing5"
));

$proto14["m_sql"] = "inventorymaster.Supplier";
$proto14["m_srcTableName"] = "inventorymaster-pricing5";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-pricing5"
));

$proto16["m_sql"] = "creategrn.UnitPrice";
$proto16["m_srcTableName"] = "inventorymaster-pricing5";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-pricing5"
));

$proto18["m_sql"] = "creategrn.GRNDate";
$proto18["m_srcTableName"] = "inventorymaster-pricing5";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_MAX";
$proto21["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-pricing5"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "MAX(creategrn.ID)";
$proto20["m_srcTableName"] = "inventorymaster-pricing5";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "ID1";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-pricing5"
));

$proto23["m_sql"] = "creategrn.Status";
$proto23["m_srcTableName"] = "inventorymaster-pricing5";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-pricing5"
));

$proto25["m_sql"] = "creategrn.ID";
$proto25["m_srcTableName"] = "inventorymaster-pricing5";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "creategrn.ID";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "inventorymaster";
$proto28["m_srcTableName"] = "inventorymaster-pricing5";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "Id";
$proto28["m_columns"][] = "ItemID";
$proto28["m_columns"][] = "Brand";
$proto28["m_columns"][] = "Description";
$proto28["m_columns"][] = "Supplier";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "inventorymaster";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "inventorymaster-pricing5";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
												$proto31=array();
$proto31["m_link"] = "SQLL_INNERJOIN";
			$proto32=array();
$proto32["m_strName"] = "creategrn";
$proto32["m_srcTableName"] = "inventorymaster-pricing5";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "ID";
$proto32["m_columns"][] = "ItemCode";
$proto32["m_columns"][] = "Brand";
$proto32["m_columns"][] = "Description";
$proto32["m_columns"][] = "Supplier";
$proto32["m_columns"][] = "Quantity";
$proto32["m_columns"][] = "RemovedFrom";
$proto32["m_columns"][] = "SystemDate";
$proto32["m_columns"][] = "GRNDate";
$proto32["m_columns"][] = "EnteredBy";
$proto32["m_columns"][] = "ApprovedBy";
$proto32["m_columns"][] = "UnitPrice";
$proto32["m_columns"][] = "Status";
$proto32["m_columns"][] = "RefNumber";
$proto32["m_columns"][] = "CurrentStock";
$proto32["m_columns"][] = "Fleet";
$proto32["m_columns"][] = "PriceLink";
$proto32["m_columns"][] = "Cost";
$proto32["m_columns"][] = "Remarks";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "INNER JOIN creategrn ON inventorymaster.ItemID = creategrn.ItemCode";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "inventorymaster-pricing5";
$proto33=array();
$proto33["m_sql"] = "inventorymaster.ItemID = creategrn.ItemCode";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing5"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "= creategrn.ItemCode";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "Id",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing5"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing5"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing5"
));

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing5"
));

$proto41["m_column"]=$obj;
$obj = new SQLGroupByItem($proto41);

$proto0["m_groupby"][]=$obj;
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing5"
));

$proto43["m_column"]=$obj;
$obj = new SQLGroupByItem($proto43);

$proto0["m_groupby"][]=$obj;
												$proto45=array();
						$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-pricing5"
));

$proto45["m_column"]=$obj;
$obj = new SQLGroupByItem($proto45);

$proto0["m_groupby"][]=$obj;
												$proto47=array();
						$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-pricing5"
));

$proto47["m_column"]=$obj;
$obj = new SQLGroupByItem($proto47);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto49=array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-pricing5"
));

$proto49["m_column"]=$obj;
$proto49["m_bAsc"] = 0;
$proto49["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto49);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="inventorymaster-pricing5";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inventorymaster_pricing5 = createSqlQuery_inventorymaster_pricing5();


	
					
;

										

$tdatainventorymaster_pricing5[".sqlquery"] = $queryData_inventorymaster_pricing5;

$tableEvents["inventorymaster-pricing5"] = new eventsBase;
$tdatainventorymaster_pricing5[".hasEvents"] = false;

?>