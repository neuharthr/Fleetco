<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainventorymaster_pricing1 = array();
	$tdatainventorymaster_pricing1[".truncateText"] = true;
	$tdatainventorymaster_pricing1[".NumberOfChars"] = 80;
	$tdatainventorymaster_pricing1[".ShortName"] = "inventorymaster_pricing1";
	$tdatainventorymaster_pricing1[".OwnerID"] = "";
	$tdatainventorymaster_pricing1[".OriginalTable"] = "inventorymaster";

//	field labels
$fieldLabelsinventorymaster_pricing1 = array();
$fieldToolTipsinventorymaster_pricing1 = array();
$pageTitlesinventorymaster_pricing1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinventorymaster_pricing1["English"] = array();
	$fieldToolTipsinventorymaster_pricing1["English"] = array();
	$pageTitlesinventorymaster_pricing1["English"] = array();
	$fieldLabelsinventorymaster_pricing1["English"]["Id"] = "Id";
	$fieldToolTipsinventorymaster_pricing1["English"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing1["English"]["ItemID"] = "Item ID";
	$fieldToolTipsinventorymaster_pricing1["English"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing1["English"]["Brand"] = "Brand";
	$fieldToolTipsinventorymaster_pricing1["English"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing1["English"]["Description"] = "Description";
	$fieldToolTipsinventorymaster_pricing1["English"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing1["English"]["Supplier"] = "Supplier";
	$fieldToolTipsinventorymaster_pricing1["English"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing1["English"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing1["English"]["ID1"] = "";
	$fieldLabelsinventorymaster_pricing1["English"]["UnitPrice"] = "Unit Price";
	$fieldToolTipsinventorymaster_pricing1["English"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing1["English"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing1["English"]["GRNDate"] = "";
	if (count($fieldToolTipsinventorymaster_pricing1["English"]))
		$tdatainventorymaster_pricing1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsinventorymaster_pricing1["Afrikaans"] = array();
	$fieldToolTipsinventorymaster_pricing1["Afrikaans"] = array();
	$pageTitlesinventorymaster_pricing1["Afrikaans"] = array();
	$fieldLabelsinventorymaster_pricing1["Afrikaans"]["Id"] = "ID";
	$fieldToolTipsinventorymaster_pricing1["Afrikaans"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing1["Afrikaans"]["ItemID"] = "item ID";
	$fieldToolTipsinventorymaster_pricing1["Afrikaans"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing1["Afrikaans"]["Brand"] = "Brand";
	$fieldToolTipsinventorymaster_pricing1["Afrikaans"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing1["Afrikaans"]["Description"] = "beskrywing";
	$fieldToolTipsinventorymaster_pricing1["Afrikaans"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing1["Afrikaans"]["Supplier"] = "verskaffer";
	$fieldToolTipsinventorymaster_pricing1["Afrikaans"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing1["Afrikaans"]["UnitPrice"] = "Eenheidsprys";
	$fieldToolTipsinventorymaster_pricing1["Afrikaans"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing1["Afrikaans"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing1["Afrikaans"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing1["Afrikaans"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing1["Afrikaans"]["ID1"] = "";
	if (count($fieldToolTipsinventorymaster_pricing1["Afrikaans"]))
		$tdatainventorymaster_pricing1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsinventorymaster_pricing1["Arabic"] = array();
	$fieldToolTipsinventorymaster_pricing1["Arabic"] = array();
	$pageTitlesinventorymaster_pricing1["Arabic"] = array();
	$fieldLabelsinventorymaster_pricing1["Arabic"]["Id"] = "???? ?????";
	$fieldToolTipsinventorymaster_pricing1["Arabic"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing1["Arabic"]["ItemID"] = "??? ??????";
	$fieldToolTipsinventorymaster_pricing1["Arabic"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing1["Arabic"]["Brand"] = "????? ??????";
	$fieldToolTipsinventorymaster_pricing1["Arabic"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing1["Arabic"]["Description"] = "???";
	$fieldToolTipsinventorymaster_pricing1["Arabic"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing1["Arabic"]["Supplier"] = "??????";
	$fieldToolTipsinventorymaster_pricing1["Arabic"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing1["Arabic"]["UnitPrice"] = "??? ??????";
	$fieldToolTipsinventorymaster_pricing1["Arabic"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing1["Arabic"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing1["Arabic"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing1["Arabic"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing1["Arabic"]["ID1"] = "";
	if (count($fieldToolTipsinventorymaster_pricing1["Arabic"]))
		$tdatainventorymaster_pricing1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsinventorymaster_pricing1["Chinese"] = array();
	$fieldToolTipsinventorymaster_pricing1["Chinese"] = array();
	$pageTitlesinventorymaster_pricing1["Chinese"] = array();
	$fieldLabelsinventorymaster_pricing1["Chinese"]["Id"] = "ID";
	$fieldToolTipsinventorymaster_pricing1["Chinese"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing1["Chinese"]["ItemID"] = "??ID";
	$fieldToolTipsinventorymaster_pricing1["Chinese"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing1["Chinese"]["Brand"] = "?";
	$fieldToolTipsinventorymaster_pricing1["Chinese"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing1["Chinese"]["Description"] = "??";
	$fieldToolTipsinventorymaster_pricing1["Chinese"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing1["Chinese"]["Supplier"] = "???";
	$fieldToolTipsinventorymaster_pricing1["Chinese"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing1["Chinese"]["UnitPrice"] = "??";
	$fieldToolTipsinventorymaster_pricing1["Chinese"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing1["Chinese"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing1["Chinese"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing1["Chinese"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing1["Chinese"]["ID1"] = "";
	if (count($fieldToolTipsinventorymaster_pricing1["Chinese"]))
		$tdatainventorymaster_pricing1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsinventorymaster_pricing1["French"] = array();
	$fieldToolTipsinventorymaster_pricing1["French"] = array();
	$pageTitlesinventorymaster_pricing1["French"] = array();
	$fieldLabelsinventorymaster_pricing1["French"]["Id"] = "Id";
	$fieldToolTipsinventorymaster_pricing1["French"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing1["French"]["ItemID"] = "ID de l'article";
	$fieldToolTipsinventorymaster_pricing1["French"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing1["French"]["Brand"] = "Marque";
	$fieldToolTipsinventorymaster_pricing1["French"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing1["French"]["Description"] = "La description";
	$fieldToolTipsinventorymaster_pricing1["French"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing1["French"]["Supplier"] = "Fournisseur";
	$fieldToolTipsinventorymaster_pricing1["French"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing1["French"]["UnitPrice"] = "Prix ??unitaire";
	$fieldToolTipsinventorymaster_pricing1["French"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing1["French"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing1["French"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing1["French"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing1["French"]["ID1"] = "";
	if (count($fieldToolTipsinventorymaster_pricing1["French"]))
		$tdatainventorymaster_pricing1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsinventorymaster_pricing1["German"] = array();
	$fieldToolTipsinventorymaster_pricing1["German"] = array();
	$pageTitlesinventorymaster_pricing1["German"] = array();
	$fieldLabelsinventorymaster_pricing1["German"]["Id"] = "Ich würde";
	$fieldToolTipsinventorymaster_pricing1["German"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing1["German"]["ItemID"] = "Artikel Identifikationsnummer";
	$fieldToolTipsinventorymaster_pricing1["German"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing1["German"]["Brand"] = "Marke";
	$fieldToolTipsinventorymaster_pricing1["German"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing1["German"]["Description"] = "Beschreibung";
	$fieldToolTipsinventorymaster_pricing1["German"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing1["German"]["Supplier"] = "Lieferant";
	$fieldToolTipsinventorymaster_pricing1["German"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing1["German"]["UnitPrice"] = "Einzelpreis";
	$fieldToolTipsinventorymaster_pricing1["German"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing1["German"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing1["German"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing1["German"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing1["German"]["ID1"] = "";
	if (count($fieldToolTipsinventorymaster_pricing1["German"]))
		$tdatainventorymaster_pricing1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsinventorymaster_pricing1["Italian"] = array();
	$fieldToolTipsinventorymaster_pricing1["Italian"] = array();
	$pageTitlesinventorymaster_pricing1["Italian"] = array();
	$fieldLabelsinventorymaster_pricing1["Italian"]["Id"] = "Id";
	$fieldToolTipsinventorymaster_pricing1["Italian"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing1["Italian"]["ItemID"] = "Numero identificativo dell'oggetto";
	$fieldToolTipsinventorymaster_pricing1["Italian"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing1["Italian"]["Brand"] = "Marca";
	$fieldToolTipsinventorymaster_pricing1["Italian"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing1["Italian"]["Description"] = "Descrizione";
	$fieldToolTipsinventorymaster_pricing1["Italian"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing1["Italian"]["Supplier"] = "Fornitore";
	$fieldToolTipsinventorymaster_pricing1["Italian"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing1["Italian"]["UnitPrice"] = "Prezzo unitario";
	$fieldToolTipsinventorymaster_pricing1["Italian"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing1["Italian"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing1["Italian"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing1["Italian"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing1["Italian"]["ID1"] = "";
	if (count($fieldToolTipsinventorymaster_pricing1["Italian"]))
		$tdatainventorymaster_pricing1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsinventorymaster_pricing1["Russian"] = array();
	$fieldToolTipsinventorymaster_pricing1["Russian"] = array();
	$pageTitlesinventorymaster_pricing1["Russian"] = array();
	$fieldLabelsinventorymaster_pricing1["Russian"]["Id"] = "? ??";
	$fieldToolTipsinventorymaster_pricing1["Russian"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing1["Russian"]["ItemID"] = "Item ID";
	$fieldToolTipsinventorymaster_pricing1["Russian"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing1["Russian"]["Brand"] = "?????";
	$fieldToolTipsinventorymaster_pricing1["Russian"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing1["Russian"]["Description"] = "????????";
	$fieldToolTipsinventorymaster_pricing1["Russian"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing1["Russian"]["Supplier"] = "?????????";
	$fieldToolTipsinventorymaster_pricing1["Russian"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing1["Russian"]["UnitPrice"] = "???? ?? ???????";
	$fieldToolTipsinventorymaster_pricing1["Russian"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing1["Russian"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing1["Russian"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing1["Russian"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing1["Russian"]["ID1"] = "";
	if (count($fieldToolTipsinventorymaster_pricing1["Russian"]))
		$tdatainventorymaster_pricing1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinventorymaster_pricing1["Spanish"] = array();
	$fieldToolTipsinventorymaster_pricing1["Spanish"] = array();
	$pageTitlesinventorymaster_pricing1["Spanish"] = array();
	$fieldLabelsinventorymaster_pricing1["Spanish"]["Id"] = "Carné de identidad";
	$fieldToolTipsinventorymaster_pricing1["Spanish"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing1["Spanish"]["ItemID"] = "Identificación del artículo";
	$fieldToolTipsinventorymaster_pricing1["Spanish"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing1["Spanish"]["Brand"] = "Marca";
	$fieldToolTipsinventorymaster_pricing1["Spanish"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing1["Spanish"]["Description"] = "Descripción";
	$fieldToolTipsinventorymaster_pricing1["Spanish"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing1["Spanish"]["Supplier"] = "Proveedor";
	$fieldToolTipsinventorymaster_pricing1["Spanish"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing1["Spanish"]["UnitPrice"] = "Precio unitario";
	$fieldToolTipsinventorymaster_pricing1["Spanish"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing1["Spanish"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing1["Spanish"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing1["Spanish"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing1["Spanish"]["ID1"] = "";
	if (count($fieldToolTipsinventorymaster_pricing1["Spanish"]))
		$tdatainventorymaster_pricing1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinventorymaster_pricing1[""] = array();
	$fieldToolTipsinventorymaster_pricing1[""] = array();
	$pageTitlesinventorymaster_pricing1[""] = array();
	if (count($fieldToolTipsinventorymaster_pricing1[""]))
		$tdatainventorymaster_pricing1[".isUseToolTips"] = true;
}


	$tdatainventorymaster_pricing1[".NCSearch"] = true;



$tdatainventorymaster_pricing1[".shortTableName"] = "inventorymaster_pricing1";
$tdatainventorymaster_pricing1[".nSecOptions"] = 0;
$tdatainventorymaster_pricing1[".recsPerRowPrint"] = 1;
$tdatainventorymaster_pricing1[".mainTableOwnerID"] = "";
$tdatainventorymaster_pricing1[".moveNext"] = 1;
$tdatainventorymaster_pricing1[".entityType"] = 1;

$tdatainventorymaster_pricing1[".strOriginalTableName"] = "inventorymaster";

		 



$tdatainventorymaster_pricing1[".showAddInPopup"] = false;

$tdatainventorymaster_pricing1[".showEditInPopup"] = false;

$tdatainventorymaster_pricing1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainventorymaster_pricing1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainventorymaster_pricing1[".fieldsForRegister"] = array();

	$tdatainventorymaster_pricing1[".listAjax"] = true;

	$tdatainventorymaster_pricing1[".audit"] = false;

	$tdatainventorymaster_pricing1[".locking"] = false;

$tdatainventorymaster_pricing1[".edit"] = true;
$tdatainventorymaster_pricing1[".afterEditAction"] = 1;
$tdatainventorymaster_pricing1[".closePopupAfterEdit"] = 1;
$tdatainventorymaster_pricing1[".afterEditActionDetTable"] = "";

$tdatainventorymaster_pricing1[".add"] = true;
$tdatainventorymaster_pricing1[".afterAddAction"] = 1;
$tdatainventorymaster_pricing1[".closePopupAfterAdd"] = 1;
$tdatainventorymaster_pricing1[".afterAddActionDetTable"] = "";

$tdatainventorymaster_pricing1[".list"] = true;




$tdatainventorymaster_pricing1[".view"] = true;

$tdatainventorymaster_pricing1[".import"] = true;

$tdatainventorymaster_pricing1[".exportTo"] = true;

$tdatainventorymaster_pricing1[".printFriendly"] = true;

$tdatainventorymaster_pricing1[".delete"] = true;

$tdatainventorymaster_pricing1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatainventorymaster_pricing1[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatainventorymaster_pricing1[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatainventorymaster_pricing1[".searchSaving"] = false;
//

$tdatainventorymaster_pricing1[".showSearchPanel"] = true;
		$tdatainventorymaster_pricing1[".flexibleSearch"] = true;

$tdatainventorymaster_pricing1[".isUseAjaxSuggest"] = true;

$tdatainventorymaster_pricing1[".rowHighlite"] = true;



$tdatainventorymaster_pricing1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainventorymaster_pricing1[".isUseTimeForSearch"] = false;





$tdatainventorymaster_pricing1[".allSearchFields"] = array();
$tdatainventorymaster_pricing1[".filterFields"] = array();
$tdatainventorymaster_pricing1[".requiredSearchFields"] = array();

$tdatainventorymaster_pricing1[".allSearchFields"][] = "ItemID";
	$tdatainventorymaster_pricing1[".allSearchFields"][] = "Brand";
	$tdatainventorymaster_pricing1[".allSearchFields"][] = "Description";
	$tdatainventorymaster_pricing1[".allSearchFields"][] = "Supplier";
	$tdatainventorymaster_pricing1[".allSearchFields"][] = "UnitPrice";
	$tdatainventorymaster_pricing1[".allSearchFields"][] = "GRNDate";
	$tdatainventorymaster_pricing1[".allSearchFields"][] = "ID1";
	

$tdatainventorymaster_pricing1[".googleLikeFields"] = array();
$tdatainventorymaster_pricing1[".googleLikeFields"][] = "Id";
$tdatainventorymaster_pricing1[".googleLikeFields"][] = "ItemID";
$tdatainventorymaster_pricing1[".googleLikeFields"][] = "Brand";
$tdatainventorymaster_pricing1[".googleLikeFields"][] = "Description";
$tdatainventorymaster_pricing1[".googleLikeFields"][] = "Supplier";
$tdatainventorymaster_pricing1[".googleLikeFields"][] = "UnitPrice";
$tdatainventorymaster_pricing1[".googleLikeFields"][] = "GRNDate";
$tdatainventorymaster_pricing1[".googleLikeFields"][] = "ID1";


$tdatainventorymaster_pricing1[".advSearchFields"] = array();
$tdatainventorymaster_pricing1[".advSearchFields"][] = "ItemID";
$tdatainventorymaster_pricing1[".advSearchFields"][] = "Brand";
$tdatainventorymaster_pricing1[".advSearchFields"][] = "Description";
$tdatainventorymaster_pricing1[".advSearchFields"][] = "Supplier";
$tdatainventorymaster_pricing1[".advSearchFields"][] = "UnitPrice";
$tdatainventorymaster_pricing1[".advSearchFields"][] = "GRNDate";
$tdatainventorymaster_pricing1[".advSearchFields"][] = "ID1";

$tdatainventorymaster_pricing1[".tableType"] = "list";

$tdatainventorymaster_pricing1[".printerPageOrientation"] = 0;
$tdatainventorymaster_pricing1[".nPrinterPageScale"] = 100;

$tdatainventorymaster_pricing1[".nPrinterSplitRecords"] = 40;

$tdatainventorymaster_pricing1[".nPrinterPDFSplitRecords"] = 40;



$tdatainventorymaster_pricing1[".geocodingEnabled"] = false;





$tdatainventorymaster_pricing1[".listGridLayout"] = 3;


$tdatainventorymaster_pricing1[".isResizeColumns"] = true;



// view page pdf
$tdatainventorymaster_pricing1[".isViewPagePDF"] = true;
$tdatainventorymaster_pricing1[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatainventorymaster_pricing1[".isPrinterPagePDF"] = true;
$tdatainventorymaster_pricing1[".nPrinterPagePDFScale"] = 100;


$tdatainventorymaster_pricing1[".pageSize"] = 20;

$tdatainventorymaster_pricing1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY creategrn.ID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainventorymaster_pricing1[".strOrderBy"] = $tstrOrderBy;

$tdatainventorymaster_pricing1[".orderindexes"] = array();
$tdatainventorymaster_pricing1[".orderindexes"][] = array(8, (0 ? "ASC" : "DESC"), "creategrn.ID");

$tdatainventorymaster_pricing1[".sqlHead"] = "SELECT inventorymaster.Id,  inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  creategrn.UnitPrice,  creategrn.GRNDate,  MAX(creategrn.ID) AS ID1";
$tdatainventorymaster_pricing1[".sqlFrom"] = "FROM inventorymaster  INNER JOIN creategrn ON inventorymaster.ItemID = creategrn.ItemCode";
$tdatainventorymaster_pricing1[".sqlWhereExpr"] = "";
$tdatainventorymaster_pricing1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatainventorymaster_pricing1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainventorymaster_pricing1[".arrGroupsPerPage"] = $arrGPP;

$tdatainventorymaster_pricing1[".highlightSearchResults"] = true;

$tableKeysinventorymaster_pricing1 = array();
$tableKeysinventorymaster_pricing1[] = "Id";
$tdatainventorymaster_pricing1[".Keys"] = $tableKeysinventorymaster_pricing1;

$tdatainventorymaster_pricing1[".listFields"] = array();
$tdatainventorymaster_pricing1[".listFields"][] = "UnitPrice";
$tdatainventorymaster_pricing1[".listFields"][] = "GRNDate";
$tdatainventorymaster_pricing1[".listFields"][] = "ID1";
$tdatainventorymaster_pricing1[".listFields"][] = "ItemID";
$tdatainventorymaster_pricing1[".listFields"][] = "Brand";
$tdatainventorymaster_pricing1[".listFields"][] = "Description";
$tdatainventorymaster_pricing1[".listFields"][] = "Supplier";

$tdatainventorymaster_pricing1[".hideMobileList"] = array();


$tdatainventorymaster_pricing1[".viewFields"] = array();
$tdatainventorymaster_pricing1[".viewFields"][] = "ItemID";
$tdatainventorymaster_pricing1[".viewFields"][] = "Brand";
$tdatainventorymaster_pricing1[".viewFields"][] = "Description";
$tdatainventorymaster_pricing1[".viewFields"][] = "Supplier";
$tdatainventorymaster_pricing1[".viewFields"][] = "UnitPrice";
$tdatainventorymaster_pricing1[".viewFields"][] = "GRNDate";
$tdatainventorymaster_pricing1[".viewFields"][] = "ID1";

$tdatainventorymaster_pricing1[".addFields"] = array();
$tdatainventorymaster_pricing1[".addFields"][] = "ItemID";
$tdatainventorymaster_pricing1[".addFields"][] = "Brand";
$tdatainventorymaster_pricing1[".addFields"][] = "Description";
$tdatainventorymaster_pricing1[".addFields"][] = "Supplier";

$tdatainventorymaster_pricing1[".masterListFields"] = array();
$tdatainventorymaster_pricing1[".masterListFields"][] = "Id";
$tdatainventorymaster_pricing1[".masterListFields"][] = "ItemID";
$tdatainventorymaster_pricing1[".masterListFields"][] = "Brand";
$tdatainventorymaster_pricing1[".masterListFields"][] = "Description";
$tdatainventorymaster_pricing1[".masterListFields"][] = "Supplier";
$tdatainventorymaster_pricing1[".masterListFields"][] = "UnitPrice";
$tdatainventorymaster_pricing1[".masterListFields"][] = "GRNDate";
$tdatainventorymaster_pricing1[".masterListFields"][] = "ID1";

$tdatainventorymaster_pricing1[".inlineAddFields"] = array();

$tdatainventorymaster_pricing1[".editFields"] = array();
$tdatainventorymaster_pricing1[".editFields"][] = "ItemID";
$tdatainventorymaster_pricing1[".editFields"][] = "Brand";
$tdatainventorymaster_pricing1[".editFields"][] = "Description";
$tdatainventorymaster_pricing1[".editFields"][] = "Supplier";

$tdatainventorymaster_pricing1[".inlineEditFields"] = array();

$tdatainventorymaster_pricing1[".updateSelectedFields"] = array();
$tdatainventorymaster_pricing1[".updateSelectedFields"][] = "ItemID";
$tdatainventorymaster_pricing1[".updateSelectedFields"][] = "Brand";
$tdatainventorymaster_pricing1[".updateSelectedFields"][] = "Description";
$tdatainventorymaster_pricing1[".updateSelectedFields"][] = "Supplier";


$tdatainventorymaster_pricing1[".exportFields"] = array();
$tdatainventorymaster_pricing1[".exportFields"][] = "ItemID";
$tdatainventorymaster_pricing1[".exportFields"][] = "Brand";
$tdatainventorymaster_pricing1[".exportFields"][] = "Description";
$tdatainventorymaster_pricing1[".exportFields"][] = "Supplier";
$tdatainventorymaster_pricing1[".exportFields"][] = "UnitPrice";
$tdatainventorymaster_pricing1[".exportFields"][] = "GRNDate";
$tdatainventorymaster_pricing1[".exportFields"][] = "ID1";

$tdatainventorymaster_pricing1[".importFields"] = array();
$tdatainventorymaster_pricing1[".importFields"][] = "ItemID";
$tdatainventorymaster_pricing1[".importFields"][] = "Brand";
$tdatainventorymaster_pricing1[".importFields"][] = "Description";
$tdatainventorymaster_pricing1[".importFields"][] = "Supplier";
$tdatainventorymaster_pricing1[".importFields"][] = "UnitPrice";
$tdatainventorymaster_pricing1[".importFields"][] = "GRNDate";
$tdatainventorymaster_pricing1[".importFields"][] = "ID1";

$tdatainventorymaster_pricing1[".printFields"] = array();
$tdatainventorymaster_pricing1[".printFields"][] = "ItemID";
$tdatainventorymaster_pricing1[".printFields"][] = "Brand";
$tdatainventorymaster_pricing1[".printFields"][] = "Description";
$tdatainventorymaster_pricing1[".printFields"][] = "Supplier";
$tdatainventorymaster_pricing1[".printFields"][] = "UnitPrice";
$tdatainventorymaster_pricing1[".printFields"][] = "GRNDate";
$tdatainventorymaster_pricing1[".printFields"][] = "ID1";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing1","Id");
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








	$tdatainventorymaster_pricing1["Id"] = $fdata;
//	ItemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemID";
	$fdata["GoodName"] = "ItemID";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing1","ItemID");
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




	$tdatainventorymaster_pricing1["ItemID"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing1","Brand");
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




	$tdatainventorymaster_pricing1["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing1","Description");
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




	$tdatainventorymaster_pricing1["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing1","Supplier");
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




	$tdatainventorymaster_pricing1["Supplier"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing1","UnitPrice");
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




	$tdatainventorymaster_pricing1["UnitPrice"] = $fdata;
//	GRNDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "GRNDate";
	$fdata["GoodName"] = "GRNDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing1","GRNDate");
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




	$tdatainventorymaster_pricing1["GRNDate"] = $fdata;
//	ID1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ID1";
	$fdata["GoodName"] = "ID1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing1","ID1");
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




	$tdatainventorymaster_pricing1["ID1"] = $fdata;


$tables_data["inventorymaster-pricing1"]=&$tdatainventorymaster_pricing1;
$field_labels["inventorymaster_pricing1"] = &$fieldLabelsinventorymaster_pricing1;
$fieldToolTips["inventorymaster_pricing1"] = &$fieldToolTipsinventorymaster_pricing1;
$page_titles["inventorymaster_pricing1"] = &$pageTitlesinventorymaster_pricing1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inventorymaster-pricing1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["inventorymaster-pricing1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inventorymaster_pricing1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "inventorymaster.Id,  inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  creategrn.UnitPrice,  creategrn.GRNDate,  MAX(creategrn.ID) AS ID1";
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
	"m_srcTableName" => "inventorymaster-pricing1"
));

$proto6["m_sql"] = "inventorymaster.Id";
$proto6["m_srcTableName"] = "inventorymaster-pricing1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing1"
));

$proto8["m_sql"] = "inventorymaster.ItemID";
$proto8["m_srcTableName"] = "inventorymaster-pricing1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing1"
));

$proto10["m_sql"] = "inventorymaster.Brand";
$proto10["m_srcTableName"] = "inventorymaster-pricing1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing1"
));

$proto12["m_sql"] = "inventorymaster.Description";
$proto12["m_srcTableName"] = "inventorymaster-pricing1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing1"
));

$proto14["m_sql"] = "inventorymaster.Supplier";
$proto14["m_srcTableName"] = "inventorymaster-pricing1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-pricing1"
));

$proto16["m_sql"] = "creategrn.UnitPrice";
$proto16["m_srcTableName"] = "inventorymaster-pricing1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-pricing1"
));

$proto18["m_sql"] = "creategrn.GRNDate";
$proto18["m_srcTableName"] = "inventorymaster-pricing1";
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
	"m_srcTableName" => "inventorymaster-pricing1"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "MAX(creategrn.ID)";
$proto20["m_srcTableName"] = "inventorymaster-pricing1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "ID1";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "inventorymaster";
$proto24["m_srcTableName"] = "inventorymaster-pricing1";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "Id";
$proto24["m_columns"][] = "ItemID";
$proto24["m_columns"][] = "Brand";
$proto24["m_columns"][] = "Description";
$proto24["m_columns"][] = "Supplier";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "inventorymaster";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "inventorymaster-pricing1";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
												$proto27=array();
$proto27["m_link"] = "SQLL_INNERJOIN";
			$proto28=array();
$proto28["m_strName"] = "creategrn";
$proto28["m_srcTableName"] = "inventorymaster-pricing1";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "ID";
$proto28["m_columns"][] = "ItemCode";
$proto28["m_columns"][] = "Brand";
$proto28["m_columns"][] = "Description";
$proto28["m_columns"][] = "Supplier";
$proto28["m_columns"][] = "Quantity";
$proto28["m_columns"][] = "RemovedFrom";
$proto28["m_columns"][] = "SystemDate";
$proto28["m_columns"][] = "GRNDate";
$proto28["m_columns"][] = "EnteredBy";
$proto28["m_columns"][] = "ApprovedBy";
$proto28["m_columns"][] = "UnitPrice";
$proto28["m_columns"][] = "Status";
$proto28["m_columns"][] = "RefNumber";
$proto28["m_columns"][] = "CurrentStock";
$proto28["m_columns"][] = "Fleet";
$proto28["m_columns"][] = "PriceLink";
$proto28["m_columns"][] = "Cost";
$proto28["m_columns"][] = "Remarks";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "INNER JOIN creategrn ON inventorymaster.ItemID = creategrn.ItemCode";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "inventorymaster-pricing1";
$proto29=array();
$proto29["m_sql"] = "inventorymaster.ItemID = creategrn.ItemCode";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing1"
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "= creategrn.ItemCode";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "Id",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing1"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing1"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing1"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing1"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing1"
));

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-pricing1"
));

$proto41["m_column"]=$obj;
$obj = new SQLGroupByItem($proto41);

$proto0["m_groupby"][]=$obj;
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-pricing1"
));

$proto43["m_column"]=$obj;
$obj = new SQLGroupByItem($proto43);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto45=array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-pricing1"
));

$proto45["m_column"]=$obj;
$proto45["m_bAsc"] = 0;
$proto45["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto45);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="inventorymaster-pricing1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inventorymaster_pricing1 = createSqlQuery_inventorymaster_pricing1();


	
					
;

								

$tdatainventorymaster_pricing1[".sqlquery"] = $queryData_inventorymaster_pricing1;

$tableEvents["inventorymaster-pricing1"] = new eventsBase;
$tdatainventorymaster_pricing1[".hasEvents"] = false;

?>