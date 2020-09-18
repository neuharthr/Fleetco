<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainventorymaster_pricing = array();
	$tdatainventorymaster_pricing[".truncateText"] = true;
	$tdatainventorymaster_pricing[".NumberOfChars"] = 80;
	$tdatainventorymaster_pricing[".ShortName"] = "inventorymaster_pricing";
	$tdatainventorymaster_pricing[".OwnerID"] = "";
	$tdatainventorymaster_pricing[".OriginalTable"] = "inventorymaster";

//	field labels
$fieldLabelsinventorymaster_pricing = array();
$fieldToolTipsinventorymaster_pricing = array();
$pageTitlesinventorymaster_pricing = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinventorymaster_pricing["English"] = array();
	$fieldToolTipsinventorymaster_pricing["English"] = array();
	$pageTitlesinventorymaster_pricing["English"] = array();
	$fieldLabelsinventorymaster_pricing["English"]["Id"] = "Id";
	$fieldToolTipsinventorymaster_pricing["English"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing["English"]["ItemID"] = "Item ID";
	$fieldToolTipsinventorymaster_pricing["English"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing["English"]["Brand"] = "Brand";
	$fieldToolTipsinventorymaster_pricing["English"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing["English"]["Description"] = "Description";
	$fieldToolTipsinventorymaster_pricing["English"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing["English"]["Supplier"] = "Supplier";
	$fieldToolTipsinventorymaster_pricing["English"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing["English"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing["English"]["ID1"] = "";
	$fieldLabelsinventorymaster_pricing["English"]["UnitPrice"] = "Unit Price";
	$fieldToolTipsinventorymaster_pricing["English"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing["English"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing["English"]["GRNDate"] = "";
	if (count($fieldToolTipsinventorymaster_pricing["English"]))
		$tdatainventorymaster_pricing[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsinventorymaster_pricing["Afrikaans"] = array();
	$fieldToolTipsinventorymaster_pricing["Afrikaans"] = array();
	$pageTitlesinventorymaster_pricing["Afrikaans"] = array();
	$fieldLabelsinventorymaster_pricing["Afrikaans"]["Id"] = "ID";
	$fieldToolTipsinventorymaster_pricing["Afrikaans"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing["Afrikaans"]["ItemID"] = "item ID";
	$fieldToolTipsinventorymaster_pricing["Afrikaans"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing["Afrikaans"]["Brand"] = "Brand";
	$fieldToolTipsinventorymaster_pricing["Afrikaans"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing["Afrikaans"]["Description"] = "beskrywing";
	$fieldToolTipsinventorymaster_pricing["Afrikaans"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing["Afrikaans"]["Supplier"] = "verskaffer";
	$fieldToolTipsinventorymaster_pricing["Afrikaans"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing["Afrikaans"]["UnitPrice"] = "Eenheidsprys";
	$fieldToolTipsinventorymaster_pricing["Afrikaans"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing["Afrikaans"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing["Afrikaans"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing["Afrikaans"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing["Afrikaans"]["ID1"] = "";
	if (count($fieldToolTipsinventorymaster_pricing["Afrikaans"]))
		$tdatainventorymaster_pricing[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsinventorymaster_pricing["Arabic"] = array();
	$fieldToolTipsinventorymaster_pricing["Arabic"] = array();
	$pageTitlesinventorymaster_pricing["Arabic"] = array();
	$fieldLabelsinventorymaster_pricing["Arabic"]["Id"] = "???? ?????";
	$fieldToolTipsinventorymaster_pricing["Arabic"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing["Arabic"]["ItemID"] = "??? ??????";
	$fieldToolTipsinventorymaster_pricing["Arabic"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing["Arabic"]["Brand"] = "????? ??????";
	$fieldToolTipsinventorymaster_pricing["Arabic"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing["Arabic"]["Description"] = "???";
	$fieldToolTipsinventorymaster_pricing["Arabic"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing["Arabic"]["Supplier"] = "??????";
	$fieldToolTipsinventorymaster_pricing["Arabic"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing["Arabic"]["UnitPrice"] = "??? ??????";
	$fieldToolTipsinventorymaster_pricing["Arabic"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing["Arabic"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing["Arabic"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing["Arabic"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing["Arabic"]["ID1"] = "";
	if (count($fieldToolTipsinventorymaster_pricing["Arabic"]))
		$tdatainventorymaster_pricing[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsinventorymaster_pricing["Chinese"] = array();
	$fieldToolTipsinventorymaster_pricing["Chinese"] = array();
	$pageTitlesinventorymaster_pricing["Chinese"] = array();
	$fieldLabelsinventorymaster_pricing["Chinese"]["Id"] = "ID";
	$fieldToolTipsinventorymaster_pricing["Chinese"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing["Chinese"]["ItemID"] = "??ID";
	$fieldToolTipsinventorymaster_pricing["Chinese"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing["Chinese"]["Brand"] = "?";
	$fieldToolTipsinventorymaster_pricing["Chinese"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing["Chinese"]["Description"] = "??";
	$fieldToolTipsinventorymaster_pricing["Chinese"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing["Chinese"]["Supplier"] = "???";
	$fieldToolTipsinventorymaster_pricing["Chinese"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing["Chinese"]["UnitPrice"] = "??";
	$fieldToolTipsinventorymaster_pricing["Chinese"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing["Chinese"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing["Chinese"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing["Chinese"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing["Chinese"]["ID1"] = "";
	if (count($fieldToolTipsinventorymaster_pricing["Chinese"]))
		$tdatainventorymaster_pricing[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsinventorymaster_pricing["French"] = array();
	$fieldToolTipsinventorymaster_pricing["French"] = array();
	$pageTitlesinventorymaster_pricing["French"] = array();
	$fieldLabelsinventorymaster_pricing["French"]["Id"] = "Id";
	$fieldToolTipsinventorymaster_pricing["French"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing["French"]["ItemID"] = "ID de l'article";
	$fieldToolTipsinventorymaster_pricing["French"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing["French"]["Brand"] = "Marque";
	$fieldToolTipsinventorymaster_pricing["French"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing["French"]["Description"] = "La description";
	$fieldToolTipsinventorymaster_pricing["French"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing["French"]["Supplier"] = "Fournisseur";
	$fieldToolTipsinventorymaster_pricing["French"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing["French"]["UnitPrice"] = "Prix ??unitaire";
	$fieldToolTipsinventorymaster_pricing["French"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing["French"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing["French"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing["French"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing["French"]["ID1"] = "";
	if (count($fieldToolTipsinventorymaster_pricing["French"]))
		$tdatainventorymaster_pricing[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsinventorymaster_pricing["German"] = array();
	$fieldToolTipsinventorymaster_pricing["German"] = array();
	$pageTitlesinventorymaster_pricing["German"] = array();
	$fieldLabelsinventorymaster_pricing["German"]["Id"] = "Ich würde";
	$fieldToolTipsinventorymaster_pricing["German"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing["German"]["ItemID"] = "Artikel Identifikationsnummer";
	$fieldToolTipsinventorymaster_pricing["German"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing["German"]["Brand"] = "Marke";
	$fieldToolTipsinventorymaster_pricing["German"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing["German"]["Description"] = "Beschreibung";
	$fieldToolTipsinventorymaster_pricing["German"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing["German"]["Supplier"] = "Lieferant";
	$fieldToolTipsinventorymaster_pricing["German"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing["German"]["UnitPrice"] = "Einzelpreis";
	$fieldToolTipsinventorymaster_pricing["German"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing["German"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing["German"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing["German"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing["German"]["ID1"] = "";
	if (count($fieldToolTipsinventorymaster_pricing["German"]))
		$tdatainventorymaster_pricing[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsinventorymaster_pricing["Italian"] = array();
	$fieldToolTipsinventorymaster_pricing["Italian"] = array();
	$pageTitlesinventorymaster_pricing["Italian"] = array();
	$fieldLabelsinventorymaster_pricing["Italian"]["Id"] = "Id";
	$fieldToolTipsinventorymaster_pricing["Italian"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing["Italian"]["ItemID"] = "Numero identificativo dell'oggetto";
	$fieldToolTipsinventorymaster_pricing["Italian"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing["Italian"]["Brand"] = "Marca";
	$fieldToolTipsinventorymaster_pricing["Italian"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing["Italian"]["Description"] = "Descrizione";
	$fieldToolTipsinventorymaster_pricing["Italian"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing["Italian"]["Supplier"] = "Fornitore";
	$fieldToolTipsinventorymaster_pricing["Italian"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing["Italian"]["UnitPrice"] = "Prezzo unitario";
	$fieldToolTipsinventorymaster_pricing["Italian"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing["Italian"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing["Italian"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing["Italian"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing["Italian"]["ID1"] = "";
	if (count($fieldToolTipsinventorymaster_pricing["Italian"]))
		$tdatainventorymaster_pricing[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsinventorymaster_pricing["Russian"] = array();
	$fieldToolTipsinventorymaster_pricing["Russian"] = array();
	$pageTitlesinventorymaster_pricing["Russian"] = array();
	$fieldLabelsinventorymaster_pricing["Russian"]["Id"] = "? ??";
	$fieldToolTipsinventorymaster_pricing["Russian"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing["Russian"]["ItemID"] = "Item ID";
	$fieldToolTipsinventorymaster_pricing["Russian"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing["Russian"]["Brand"] = "?????";
	$fieldToolTipsinventorymaster_pricing["Russian"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing["Russian"]["Description"] = "????????";
	$fieldToolTipsinventorymaster_pricing["Russian"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing["Russian"]["Supplier"] = "?????????";
	$fieldToolTipsinventorymaster_pricing["Russian"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing["Russian"]["UnitPrice"] = "???? ?? ???????";
	$fieldToolTipsinventorymaster_pricing["Russian"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing["Russian"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing["Russian"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing["Russian"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing["Russian"]["ID1"] = "";
	if (count($fieldToolTipsinventorymaster_pricing["Russian"]))
		$tdatainventorymaster_pricing[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinventorymaster_pricing["Spanish"] = array();
	$fieldToolTipsinventorymaster_pricing["Spanish"] = array();
	$pageTitlesinventorymaster_pricing["Spanish"] = array();
	$fieldLabelsinventorymaster_pricing["Spanish"]["Id"] = "Carné de identidad";
	$fieldToolTipsinventorymaster_pricing["Spanish"]["Id"] = "";
	$fieldLabelsinventorymaster_pricing["Spanish"]["ItemID"] = "Identificación del artículo";
	$fieldToolTipsinventorymaster_pricing["Spanish"]["ItemID"] = "";
	$fieldLabelsinventorymaster_pricing["Spanish"]["Brand"] = "Marca";
	$fieldToolTipsinventorymaster_pricing["Spanish"]["Brand"] = "";
	$fieldLabelsinventorymaster_pricing["Spanish"]["Description"] = "Descripción";
	$fieldToolTipsinventorymaster_pricing["Spanish"]["Description"] = "";
	$fieldLabelsinventorymaster_pricing["Spanish"]["Supplier"] = "Proveedor";
	$fieldToolTipsinventorymaster_pricing["Spanish"]["Supplier"] = "";
	$fieldLabelsinventorymaster_pricing["Spanish"]["UnitPrice"] = "Precio unitario";
	$fieldToolTipsinventorymaster_pricing["Spanish"]["UnitPrice"] = "";
	$fieldLabelsinventorymaster_pricing["Spanish"]["GRNDate"] = "GRNDate";
	$fieldToolTipsinventorymaster_pricing["Spanish"]["GRNDate"] = "";
	$fieldLabelsinventorymaster_pricing["Spanish"]["ID1"] = "ID1";
	$fieldToolTipsinventorymaster_pricing["Spanish"]["ID1"] = "";
	if (count($fieldToolTipsinventorymaster_pricing["Spanish"]))
		$tdatainventorymaster_pricing[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinventorymaster_pricing[""] = array();
	$fieldToolTipsinventorymaster_pricing[""] = array();
	$pageTitlesinventorymaster_pricing[""] = array();
	if (count($fieldToolTipsinventorymaster_pricing[""]))
		$tdatainventorymaster_pricing[".isUseToolTips"] = true;
}


	$tdatainventorymaster_pricing[".NCSearch"] = true;



$tdatainventorymaster_pricing[".shortTableName"] = "inventorymaster_pricing";
$tdatainventorymaster_pricing[".nSecOptions"] = 0;
$tdatainventorymaster_pricing[".recsPerRowPrint"] = 1;
$tdatainventorymaster_pricing[".mainTableOwnerID"] = "";
$tdatainventorymaster_pricing[".moveNext"] = 1;
$tdatainventorymaster_pricing[".entityType"] = 1;

$tdatainventorymaster_pricing[".strOriginalTableName"] = "inventorymaster";

		 



$tdatainventorymaster_pricing[".showAddInPopup"] = false;

$tdatainventorymaster_pricing[".showEditInPopup"] = false;

$tdatainventorymaster_pricing[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainventorymaster_pricing[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainventorymaster_pricing[".fieldsForRegister"] = array();

	$tdatainventorymaster_pricing[".listAjax"] = true;

	$tdatainventorymaster_pricing[".audit"] = false;

	$tdatainventorymaster_pricing[".locking"] = false;

$tdatainventorymaster_pricing[".edit"] = true;
$tdatainventorymaster_pricing[".afterEditAction"] = 1;
$tdatainventorymaster_pricing[".closePopupAfterEdit"] = 1;
$tdatainventorymaster_pricing[".afterEditActionDetTable"] = "";

$tdatainventorymaster_pricing[".add"] = true;
$tdatainventorymaster_pricing[".afterAddAction"] = 1;
$tdatainventorymaster_pricing[".closePopupAfterAdd"] = 1;
$tdatainventorymaster_pricing[".afterAddActionDetTable"] = "";

$tdatainventorymaster_pricing[".list"] = true;




$tdatainventorymaster_pricing[".view"] = true;

$tdatainventorymaster_pricing[".import"] = true;

$tdatainventorymaster_pricing[".exportTo"] = true;

$tdatainventorymaster_pricing[".printFriendly"] = true;

$tdatainventorymaster_pricing[".delete"] = true;

$tdatainventorymaster_pricing[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatainventorymaster_pricing[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatainventorymaster_pricing[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatainventorymaster_pricing[".searchSaving"] = false;
//

$tdatainventorymaster_pricing[".showSearchPanel"] = true;
		$tdatainventorymaster_pricing[".flexibleSearch"] = true;

$tdatainventorymaster_pricing[".isUseAjaxSuggest"] = true;

$tdatainventorymaster_pricing[".rowHighlite"] = true;



$tdatainventorymaster_pricing[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainventorymaster_pricing[".isUseTimeForSearch"] = false;





$tdatainventorymaster_pricing[".allSearchFields"] = array();
$tdatainventorymaster_pricing[".filterFields"] = array();
$tdatainventorymaster_pricing[".requiredSearchFields"] = array();

$tdatainventorymaster_pricing[".allSearchFields"][] = "ItemID";
	$tdatainventorymaster_pricing[".allSearchFields"][] = "Brand";
	$tdatainventorymaster_pricing[".allSearchFields"][] = "Description";
	$tdatainventorymaster_pricing[".allSearchFields"][] = "Supplier";
	$tdatainventorymaster_pricing[".allSearchFields"][] = "UnitPrice";
	$tdatainventorymaster_pricing[".allSearchFields"][] = "GRNDate";
	$tdatainventorymaster_pricing[".allSearchFields"][] = "ID1";
	

$tdatainventorymaster_pricing[".googleLikeFields"] = array();
$tdatainventorymaster_pricing[".googleLikeFields"][] = "Id";
$tdatainventorymaster_pricing[".googleLikeFields"][] = "ItemID";
$tdatainventorymaster_pricing[".googleLikeFields"][] = "Brand";
$tdatainventorymaster_pricing[".googleLikeFields"][] = "Description";
$tdatainventorymaster_pricing[".googleLikeFields"][] = "Supplier";
$tdatainventorymaster_pricing[".googleLikeFields"][] = "UnitPrice";
$tdatainventorymaster_pricing[".googleLikeFields"][] = "GRNDate";
$tdatainventorymaster_pricing[".googleLikeFields"][] = "ID1";


$tdatainventorymaster_pricing[".advSearchFields"] = array();
$tdatainventorymaster_pricing[".advSearchFields"][] = "ItemID";
$tdatainventorymaster_pricing[".advSearchFields"][] = "Brand";
$tdatainventorymaster_pricing[".advSearchFields"][] = "Description";
$tdatainventorymaster_pricing[".advSearchFields"][] = "Supplier";
$tdatainventorymaster_pricing[".advSearchFields"][] = "UnitPrice";
$tdatainventorymaster_pricing[".advSearchFields"][] = "GRNDate";
$tdatainventorymaster_pricing[".advSearchFields"][] = "ID1";

$tdatainventorymaster_pricing[".tableType"] = "list";

$tdatainventorymaster_pricing[".printerPageOrientation"] = 0;
$tdatainventorymaster_pricing[".nPrinterPageScale"] = 100;

$tdatainventorymaster_pricing[".nPrinterSplitRecords"] = 40;

$tdatainventorymaster_pricing[".nPrinterPDFSplitRecords"] = 40;



$tdatainventorymaster_pricing[".geocodingEnabled"] = false;





$tdatainventorymaster_pricing[".listGridLayout"] = 3;


$tdatainventorymaster_pricing[".isResizeColumns"] = true;



// view page pdf
$tdatainventorymaster_pricing[".isViewPagePDF"] = true;
$tdatainventorymaster_pricing[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatainventorymaster_pricing[".isPrinterPagePDF"] = true;
$tdatainventorymaster_pricing[".nPrinterPagePDFScale"] = 100;


$tdatainventorymaster_pricing[".pageSize"] = 20;

$tdatainventorymaster_pricing[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY creategrn.ID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainventorymaster_pricing[".strOrderBy"] = $tstrOrderBy;

$tdatainventorymaster_pricing[".orderindexes"] = array();
$tdatainventorymaster_pricing[".orderindexes"][] = array(8, (0 ? "ASC" : "DESC"), "creategrn.ID");

$tdatainventorymaster_pricing[".sqlHead"] = "SELECT inventorymaster.Id,  inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  creategrn.UnitPrice,  creategrn.GRNDate,  MAX(creategrn.ID) AS ID1";
$tdatainventorymaster_pricing[".sqlFrom"] = "FROM inventorymaster  INNER JOIN creategrn ON inventorymaster.ItemID = creategrn.ItemCode";
$tdatainventorymaster_pricing[".sqlWhereExpr"] = "";
$tdatainventorymaster_pricing[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatainventorymaster_pricing[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainventorymaster_pricing[".arrGroupsPerPage"] = $arrGPP;

$tdatainventorymaster_pricing[".highlightSearchResults"] = true;

$tableKeysinventorymaster_pricing = array();
$tableKeysinventorymaster_pricing[] = "Id";
$tdatainventorymaster_pricing[".Keys"] = $tableKeysinventorymaster_pricing;

$tdatainventorymaster_pricing[".listFields"] = array();
$tdatainventorymaster_pricing[".listFields"][] = "UnitPrice";
$tdatainventorymaster_pricing[".listFields"][] = "GRNDate";
$tdatainventorymaster_pricing[".listFields"][] = "ID1";
$tdatainventorymaster_pricing[".listFields"][] = "ItemID";
$tdatainventorymaster_pricing[".listFields"][] = "Brand";
$tdatainventorymaster_pricing[".listFields"][] = "Description";
$tdatainventorymaster_pricing[".listFields"][] = "Supplier";

$tdatainventorymaster_pricing[".hideMobileList"] = array();


$tdatainventorymaster_pricing[".viewFields"] = array();
$tdatainventorymaster_pricing[".viewFields"][] = "ItemID";
$tdatainventorymaster_pricing[".viewFields"][] = "Brand";
$tdatainventorymaster_pricing[".viewFields"][] = "Description";
$tdatainventorymaster_pricing[".viewFields"][] = "Supplier";
$tdatainventorymaster_pricing[".viewFields"][] = "UnitPrice";
$tdatainventorymaster_pricing[".viewFields"][] = "GRNDate";
$tdatainventorymaster_pricing[".viewFields"][] = "ID1";

$tdatainventorymaster_pricing[".addFields"] = array();
$tdatainventorymaster_pricing[".addFields"][] = "ItemID";
$tdatainventorymaster_pricing[".addFields"][] = "Brand";
$tdatainventorymaster_pricing[".addFields"][] = "Description";
$tdatainventorymaster_pricing[".addFields"][] = "Supplier";

$tdatainventorymaster_pricing[".masterListFields"] = array();
$tdatainventorymaster_pricing[".masterListFields"][] = "Id";
$tdatainventorymaster_pricing[".masterListFields"][] = "ItemID";
$tdatainventorymaster_pricing[".masterListFields"][] = "Brand";
$tdatainventorymaster_pricing[".masterListFields"][] = "Description";
$tdatainventorymaster_pricing[".masterListFields"][] = "Supplier";
$tdatainventorymaster_pricing[".masterListFields"][] = "UnitPrice";
$tdatainventorymaster_pricing[".masterListFields"][] = "GRNDate";
$tdatainventorymaster_pricing[".masterListFields"][] = "ID1";

$tdatainventorymaster_pricing[".inlineAddFields"] = array();

$tdatainventorymaster_pricing[".editFields"] = array();
$tdatainventorymaster_pricing[".editFields"][] = "ItemID";
$tdatainventorymaster_pricing[".editFields"][] = "Brand";
$tdatainventorymaster_pricing[".editFields"][] = "Description";
$tdatainventorymaster_pricing[".editFields"][] = "Supplier";

$tdatainventorymaster_pricing[".inlineEditFields"] = array();

$tdatainventorymaster_pricing[".updateSelectedFields"] = array();
$tdatainventorymaster_pricing[".updateSelectedFields"][] = "ItemID";
$tdatainventorymaster_pricing[".updateSelectedFields"][] = "Brand";
$tdatainventorymaster_pricing[".updateSelectedFields"][] = "Description";
$tdatainventorymaster_pricing[".updateSelectedFields"][] = "Supplier";


$tdatainventorymaster_pricing[".exportFields"] = array();
$tdatainventorymaster_pricing[".exportFields"][] = "ItemID";
$tdatainventorymaster_pricing[".exportFields"][] = "Brand";
$tdatainventorymaster_pricing[".exportFields"][] = "Description";
$tdatainventorymaster_pricing[".exportFields"][] = "Supplier";
$tdatainventorymaster_pricing[".exportFields"][] = "UnitPrice";
$tdatainventorymaster_pricing[".exportFields"][] = "GRNDate";
$tdatainventorymaster_pricing[".exportFields"][] = "ID1";

$tdatainventorymaster_pricing[".importFields"] = array();
$tdatainventorymaster_pricing[".importFields"][] = "ItemID";
$tdatainventorymaster_pricing[".importFields"][] = "Brand";
$tdatainventorymaster_pricing[".importFields"][] = "Description";
$tdatainventorymaster_pricing[".importFields"][] = "Supplier";
$tdatainventorymaster_pricing[".importFields"][] = "UnitPrice";
$tdatainventorymaster_pricing[".importFields"][] = "GRNDate";
$tdatainventorymaster_pricing[".importFields"][] = "ID1";

$tdatainventorymaster_pricing[".printFields"] = array();
$tdatainventorymaster_pricing[".printFields"][] = "ItemID";
$tdatainventorymaster_pricing[".printFields"][] = "Brand";
$tdatainventorymaster_pricing[".printFields"][] = "Description";
$tdatainventorymaster_pricing[".printFields"][] = "Supplier";
$tdatainventorymaster_pricing[".printFields"][] = "UnitPrice";
$tdatainventorymaster_pricing[".printFields"][] = "GRNDate";
$tdatainventorymaster_pricing[".printFields"][] = "ID1";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing","Id");
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








	$tdatainventorymaster_pricing["Id"] = $fdata;
//	ItemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemID";
	$fdata["GoodName"] = "ItemID";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing","ItemID");
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




	$tdatainventorymaster_pricing["ItemID"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing","Brand");
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




	$tdatainventorymaster_pricing["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing","Description");
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




	$tdatainventorymaster_pricing["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing","Supplier");
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




	$tdatainventorymaster_pricing["Supplier"] = $fdata;
//	UnitPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "UnitPrice";
	$fdata["GoodName"] = "UnitPrice";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing","UnitPrice");
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




	$tdatainventorymaster_pricing["UnitPrice"] = $fdata;
//	GRNDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "GRNDate";
	$fdata["GoodName"] = "GRNDate";
	$fdata["ownerTable"] = "creategrn";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing","GRNDate");
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




	$tdatainventorymaster_pricing["GRNDate"] = $fdata;
//	ID1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ID1";
	$fdata["GoodName"] = "ID1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("inventorymaster_pricing","ID1");
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




	$tdatainventorymaster_pricing["ID1"] = $fdata;


$tables_data["inventorymaster-pricing"]=&$tdatainventorymaster_pricing;
$field_labels["inventorymaster_pricing"] = &$fieldLabelsinventorymaster_pricing;
$fieldToolTips["inventorymaster_pricing"] = &$fieldToolTipsinventorymaster_pricing;
$page_titles["inventorymaster_pricing"] = &$pageTitlesinventorymaster_pricing;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inventorymaster-pricing"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["inventorymaster-pricing"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inventorymaster_pricing()
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
	"m_srcTableName" => "inventorymaster-pricing"
));

$proto6["m_sql"] = "inventorymaster.Id";
$proto6["m_srcTableName"] = "inventorymaster-pricing";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing"
));

$proto8["m_sql"] = "inventorymaster.ItemID";
$proto8["m_srcTableName"] = "inventorymaster-pricing";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing"
));

$proto10["m_sql"] = "inventorymaster.Brand";
$proto10["m_srcTableName"] = "inventorymaster-pricing";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing"
));

$proto12["m_sql"] = "inventorymaster.Description";
$proto12["m_srcTableName"] = "inventorymaster-pricing";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing"
));

$proto14["m_sql"] = "inventorymaster.Supplier";
$proto14["m_srcTableName"] = "inventorymaster-pricing";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-pricing"
));

$proto16["m_sql"] = "creategrn.UnitPrice";
$proto16["m_srcTableName"] = "inventorymaster-pricing";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-pricing"
));

$proto18["m_sql"] = "creategrn.GRNDate";
$proto18["m_srcTableName"] = "inventorymaster-pricing";
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
	"m_srcTableName" => "inventorymaster-pricing"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "MAX(creategrn.ID)";
$proto20["m_srcTableName"] = "inventorymaster-pricing";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "ID1";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "inventorymaster";
$proto24["m_srcTableName"] = "inventorymaster-pricing";
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
$proto23["m_srcTableName"] = "inventorymaster-pricing";
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
$proto28["m_srcTableName"] = "inventorymaster-pricing";
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
$proto27["m_srcTableName"] = "inventorymaster-pricing";
$proto29=array();
$proto29["m_sql"] = "inventorymaster.ItemID = creategrn.ItemCode";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing"
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
	"m_srcTableName" => "inventorymaster-pricing"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-pricing"
));

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "UnitPrice",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-pricing"
));

$proto41["m_column"]=$obj;
$obj = new SQLGroupByItem($proto41);

$proto0["m_groupby"][]=$obj;
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "GRNDate",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-pricing"
));

$proto43["m_column"]=$obj;
$obj = new SQLGroupByItem($proto43);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto45=array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-pricing"
));

$proto45["m_column"]=$obj;
$proto45["m_bAsc"] = 0;
$proto45["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto45);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="inventorymaster-pricing";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inventorymaster_pricing = createSqlQuery_inventorymaster_pricing();


	
					
;

								

$tdatainventorymaster_pricing[".sqlquery"] = $queryData_inventorymaster_pricing;

$tableEvents["inventorymaster-pricing"] = new eventsBase;
$tdatainventorymaster_pricing[".hasEvents"] = false;

?>