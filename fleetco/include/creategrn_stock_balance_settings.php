<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacreategrn_stock_balance = array();
	$tdatacreategrn_stock_balance[".truncateText"] = true;
	$tdatacreategrn_stock_balance[".NumberOfChars"] = 80;
	$tdatacreategrn_stock_balance[".ShortName"] = "creategrn_stock_balance";
	$tdatacreategrn_stock_balance[".OwnerID"] = "";
	$tdatacreategrn_stock_balance[".OriginalTable"] = "creategrn";

//	field labels
$fieldLabelscreategrn_stock_balance = array();
$fieldToolTipscreategrn_stock_balance = array();
$pageTitlescreategrn_stock_balance = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscreategrn_stock_balance["English"] = array();
	$fieldToolTipscreategrn_stock_balance["English"] = array();
	$pageTitlescreategrn_stock_balance["English"] = array();
	$fieldLabelscreategrn_stock_balance["English"]["Brand"] = "Brand";
	$fieldToolTipscreategrn_stock_balance["English"]["Brand"] = "";
	$fieldLabelscreategrn_stock_balance["English"]["Description"] = "Description";
	$fieldToolTipscreategrn_stock_balance["English"]["Description"] = "";
	$fieldLabelscreategrn_stock_balance["English"]["Supplier"] = "Supplier";
	$fieldToolTipscreategrn_stock_balance["English"]["Supplier"] = "";
	$fieldLabelscreategrn_stock_balance["English"]["SUM_Quantity_"] = "Stock Balance";
	$fieldToolTipscreategrn_stock_balance["English"]["SUM_Quantity_"] = "";
	$fieldLabelscreategrn_stock_balance["English"]["ItemID"] = "Item ID";
	$fieldToolTipscreategrn_stock_balance["English"]["ItemID"] = "";
	if (count($fieldToolTipscreategrn_stock_balance["English"]))
		$tdatacreategrn_stock_balance[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelscreategrn_stock_balance["Afrikaans"] = array();
	$fieldToolTipscreategrn_stock_balance["Afrikaans"] = array();
	$pageTitlescreategrn_stock_balance["Afrikaans"] = array();
	$fieldLabelscreategrn_stock_balance["Afrikaans"]["ItemID"] = "item ID";
	$fieldToolTipscreategrn_stock_balance["Afrikaans"]["ItemID"] = "";
	$fieldLabelscreategrn_stock_balance["Afrikaans"]["Brand"] = "Brand";
	$fieldToolTipscreategrn_stock_balance["Afrikaans"]["Brand"] = "";
	$fieldLabelscreategrn_stock_balance["Afrikaans"]["Description"] = "beskrywing";
	$fieldToolTipscreategrn_stock_balance["Afrikaans"]["Description"] = "";
	$fieldLabelscreategrn_stock_balance["Afrikaans"]["Supplier"] = "verskaffer";
	$fieldToolTipscreategrn_stock_balance["Afrikaans"]["Supplier"] = "";
	$fieldLabelscreategrn_stock_balance["Afrikaans"]["SUM_Quantity_"] = "Stock Balans";
	$fieldToolTipscreategrn_stock_balance["Afrikaans"]["SUM_Quantity_"] = "";
	if (count($fieldToolTipscreategrn_stock_balance["Afrikaans"]))
		$tdatacreategrn_stock_balance[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelscreategrn_stock_balance["Arabic"] = array();
	$fieldToolTipscreategrn_stock_balance["Arabic"] = array();
	$pageTitlescreategrn_stock_balance["Arabic"] = array();
	$fieldLabelscreategrn_stock_balance["Arabic"]["ItemID"] = "??? ??????";
	$fieldToolTipscreategrn_stock_balance["Arabic"]["ItemID"] = "";
	$fieldLabelscreategrn_stock_balance["Arabic"]["Brand"] = "????? ??????";
	$fieldToolTipscreategrn_stock_balance["Arabic"]["Brand"] = "";
	$fieldLabelscreategrn_stock_balance["Arabic"]["Description"] = "???";
	$fieldToolTipscreategrn_stock_balance["Arabic"]["Description"] = "";
	$fieldLabelscreategrn_stock_balance["Arabic"]["Supplier"] = "??????";
	$fieldToolTipscreategrn_stock_balance["Arabic"]["Supplier"] = "";
	$fieldLabelscreategrn_stock_balance["Arabic"]["SUM_Quantity_"] = "????? ??????";
	$fieldToolTipscreategrn_stock_balance["Arabic"]["SUM_Quantity_"] = "";
	if (count($fieldToolTipscreategrn_stock_balance["Arabic"]))
		$tdatacreategrn_stock_balance[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelscreategrn_stock_balance["Chinese"] = array();
	$fieldToolTipscreategrn_stock_balance["Chinese"] = array();
	$pageTitlescreategrn_stock_balance["Chinese"] = array();
	$fieldLabelscreategrn_stock_balance["Chinese"]["ItemID"] = "??ID";
	$fieldToolTipscreategrn_stock_balance["Chinese"]["ItemID"] = "";
	$fieldLabelscreategrn_stock_balance["Chinese"]["Brand"] = "?";
	$fieldToolTipscreategrn_stock_balance["Chinese"]["Brand"] = "";
	$fieldLabelscreategrn_stock_balance["Chinese"]["Description"] = "??";
	$fieldToolTipscreategrn_stock_balance["Chinese"]["Description"] = "";
	$fieldLabelscreategrn_stock_balance["Chinese"]["Supplier"] = "???";
	$fieldToolTipscreategrn_stock_balance["Chinese"]["Supplier"] = "";
	$fieldLabelscreategrn_stock_balance["Chinese"]["SUM_Quantity_"] = "????";
	$fieldToolTipscreategrn_stock_balance["Chinese"]["SUM_Quantity_"] = "";
	if (count($fieldToolTipscreategrn_stock_balance["Chinese"]))
		$tdatacreategrn_stock_balance[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelscreategrn_stock_balance["French"] = array();
	$fieldToolTipscreategrn_stock_balance["French"] = array();
	$pageTitlescreategrn_stock_balance["French"] = array();
	$fieldLabelscreategrn_stock_balance["French"]["ItemID"] = "ID de l'article";
	$fieldToolTipscreategrn_stock_balance["French"]["ItemID"] = "";
	$fieldLabelscreategrn_stock_balance["French"]["Brand"] = "Marque";
	$fieldToolTipscreategrn_stock_balance["French"]["Brand"] = "";
	$fieldLabelscreategrn_stock_balance["French"]["Description"] = "La description";
	$fieldToolTipscreategrn_stock_balance["French"]["Description"] = "";
	$fieldLabelscreategrn_stock_balance["French"]["Supplier"] = "Fournisseur";
	$fieldToolTipscreategrn_stock_balance["French"]["Supplier"] = "";
	$fieldLabelscreategrn_stock_balance["French"]["SUM_Quantity_"] = "Balance des stocks";
	$fieldToolTipscreategrn_stock_balance["French"]["SUM_Quantity_"] = "";
	if (count($fieldToolTipscreategrn_stock_balance["French"]))
		$tdatacreategrn_stock_balance[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelscreategrn_stock_balance["German"] = array();
	$fieldToolTipscreategrn_stock_balance["German"] = array();
	$pageTitlescreategrn_stock_balance["German"] = array();
	$fieldLabelscreategrn_stock_balance["German"]["ItemID"] = "Artikel Identifikationsnummer";
	$fieldToolTipscreategrn_stock_balance["German"]["ItemID"] = "";
	$fieldLabelscreategrn_stock_balance["German"]["Brand"] = "Marke";
	$fieldToolTipscreategrn_stock_balance["German"]["Brand"] = "";
	$fieldLabelscreategrn_stock_balance["German"]["Description"] = "Beschreibung";
	$fieldToolTipscreategrn_stock_balance["German"]["Description"] = "";
	$fieldLabelscreategrn_stock_balance["German"]["Supplier"] = "Lieferant";
	$fieldToolTipscreategrn_stock_balance["German"]["Supplier"] = "";
	$fieldLabelscreategrn_stock_balance["German"]["SUM_Quantity_"] = "Aktienbilanz";
	$fieldToolTipscreategrn_stock_balance["German"]["SUM_Quantity_"] = "";
	if (count($fieldToolTipscreategrn_stock_balance["German"]))
		$tdatacreategrn_stock_balance[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelscreategrn_stock_balance["Italian"] = array();
	$fieldToolTipscreategrn_stock_balance["Italian"] = array();
	$pageTitlescreategrn_stock_balance["Italian"] = array();
	$fieldLabelscreategrn_stock_balance["Italian"]["ItemID"] = "Numero identificativo dell'oggetto";
	$fieldToolTipscreategrn_stock_balance["Italian"]["ItemID"] = "";
	$fieldLabelscreategrn_stock_balance["Italian"]["Brand"] = "Marca";
	$fieldToolTipscreategrn_stock_balance["Italian"]["Brand"] = "";
	$fieldLabelscreategrn_stock_balance["Italian"]["Description"] = "Descrizione";
	$fieldToolTipscreategrn_stock_balance["Italian"]["Description"] = "";
	$fieldLabelscreategrn_stock_balance["Italian"]["Supplier"] = "Fornitore";
	$fieldToolTipscreategrn_stock_balance["Italian"]["Supplier"] = "";
	$fieldLabelscreategrn_stock_balance["Italian"]["SUM_Quantity_"] = "della Balance";
	$fieldToolTipscreategrn_stock_balance["Italian"]["SUM_Quantity_"] = "";
	if (count($fieldToolTipscreategrn_stock_balance["Italian"]))
		$tdatacreategrn_stock_balance[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelscreategrn_stock_balance["Russian"] = array();
	$fieldToolTipscreategrn_stock_balance["Russian"] = array();
	$pageTitlescreategrn_stock_balance["Russian"] = array();
	$fieldLabelscreategrn_stock_balance["Russian"]["ItemID"] = "Item ID";
	$fieldToolTipscreategrn_stock_balance["Russian"]["ItemID"] = "";
	$fieldLabelscreategrn_stock_balance["Russian"]["Brand"] = "?????";
	$fieldToolTipscreategrn_stock_balance["Russian"]["Brand"] = "";
	$fieldLabelscreategrn_stock_balance["Russian"]["Description"] = "????????";
	$fieldToolTipscreategrn_stock_balance["Russian"]["Description"] = "";
	$fieldLabelscreategrn_stock_balance["Russian"]["Supplier"] = "?????????";
	$fieldToolTipscreategrn_stock_balance["Russian"]["Supplier"] = "";
	$fieldLabelscreategrn_stock_balance["Russian"]["SUM_Quantity_"] = "???? ??????";
	$fieldToolTipscreategrn_stock_balance["Russian"]["SUM_Quantity_"] = "";
	if (count($fieldToolTipscreategrn_stock_balance["Russian"]))
		$tdatacreategrn_stock_balance[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscreategrn_stock_balance["Spanish"] = array();
	$fieldToolTipscreategrn_stock_balance["Spanish"] = array();
	$pageTitlescreategrn_stock_balance["Spanish"] = array();
	$fieldLabelscreategrn_stock_balance["Spanish"]["ItemID"] = "Identificación del artículo";
	$fieldToolTipscreategrn_stock_balance["Spanish"]["ItemID"] = "";
	$fieldLabelscreategrn_stock_balance["Spanish"]["Brand"] = "Marca";
	$fieldToolTipscreategrn_stock_balance["Spanish"]["Brand"] = "";
	$fieldLabelscreategrn_stock_balance["Spanish"]["Description"] = "Descripción";
	$fieldToolTipscreategrn_stock_balance["Spanish"]["Description"] = "";
	$fieldLabelscreategrn_stock_balance["Spanish"]["Supplier"] = "Proveedor";
	$fieldToolTipscreategrn_stock_balance["Spanish"]["Supplier"] = "";
	$fieldLabelscreategrn_stock_balance["Spanish"]["SUM_Quantity_"] = "Balance de acciones";
	$fieldToolTipscreategrn_stock_balance["Spanish"]["SUM_Quantity_"] = "";
	if (count($fieldToolTipscreategrn_stock_balance["Spanish"]))
		$tdatacreategrn_stock_balance[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscreategrn_stock_balance[""] = array();
	$fieldToolTipscreategrn_stock_balance[""] = array();
	$pageTitlescreategrn_stock_balance[""] = array();
	if (count($fieldToolTipscreategrn_stock_balance[""]))
		$tdatacreategrn_stock_balance[".isUseToolTips"] = true;
}


	$tdatacreategrn_stock_balance[".NCSearch"] = true;



$tdatacreategrn_stock_balance[".shortTableName"] = "creategrn_stock_balance";
$tdatacreategrn_stock_balance[".nSecOptions"] = 0;
$tdatacreategrn_stock_balance[".recsPerRowPrint"] = 1;
$tdatacreategrn_stock_balance[".mainTableOwnerID"] = "";
$tdatacreategrn_stock_balance[".moveNext"] = 1;
$tdatacreategrn_stock_balance[".entityType"] = 1;

$tdatacreategrn_stock_balance[".strOriginalTableName"] = "creategrn";

		 



$tdatacreategrn_stock_balance[".showAddInPopup"] = false;

$tdatacreategrn_stock_balance[".showEditInPopup"] = false;

$tdatacreategrn_stock_balance[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacreategrn_stock_balance[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacreategrn_stock_balance[".fieldsForRegister"] = array();

	$tdatacreategrn_stock_balance[".listAjax"] = true;

	$tdatacreategrn_stock_balance[".audit"] = false;

	$tdatacreategrn_stock_balance[".locking"] = false;



$tdatacreategrn_stock_balance[".list"] = true;






$tdatacreategrn_stock_balance[".exportTo"] = true;

$tdatacreategrn_stock_balance[".printFriendly"] = true;


$tdatacreategrn_stock_balance[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacreategrn_stock_balance[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatacreategrn_stock_balance[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatacreategrn_stock_balance[".searchSaving"] = false;
//

$tdatacreategrn_stock_balance[".showSearchPanel"] = true;
		$tdatacreategrn_stock_balance[".flexibleSearch"] = true;

$tdatacreategrn_stock_balance[".isUseAjaxSuggest"] = true;

$tdatacreategrn_stock_balance[".rowHighlite"] = true;



$tdatacreategrn_stock_balance[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacreategrn_stock_balance[".isUseTimeForSearch"] = false;





$tdatacreategrn_stock_balance[".allSearchFields"] = array();
$tdatacreategrn_stock_balance[".filterFields"] = array();
$tdatacreategrn_stock_balance[".requiredSearchFields"] = array();

$tdatacreategrn_stock_balance[".allSearchFields"][] = "ItemID";
	$tdatacreategrn_stock_balance[".allSearchFields"][] = "Brand";
	$tdatacreategrn_stock_balance[".allSearchFields"][] = "Description";
	$tdatacreategrn_stock_balance[".allSearchFields"][] = "Supplier";
	$tdatacreategrn_stock_balance[".allSearchFields"][] = "SUM(Quantity)";
	

$tdatacreategrn_stock_balance[".googleLikeFields"] = array();
$tdatacreategrn_stock_balance[".googleLikeFields"][] = "ItemID";
$tdatacreategrn_stock_balance[".googleLikeFields"][] = "Brand";
$tdatacreategrn_stock_balance[".googleLikeFields"][] = "Description";
$tdatacreategrn_stock_balance[".googleLikeFields"][] = "Supplier";
$tdatacreategrn_stock_balance[".googleLikeFields"][] = "SUM(Quantity)";


$tdatacreategrn_stock_balance[".advSearchFields"] = array();
$tdatacreategrn_stock_balance[".advSearchFields"][] = "ItemID";
$tdatacreategrn_stock_balance[".advSearchFields"][] = "Brand";
$tdatacreategrn_stock_balance[".advSearchFields"][] = "Description";
$tdatacreategrn_stock_balance[".advSearchFields"][] = "Supplier";
$tdatacreategrn_stock_balance[".advSearchFields"][] = "SUM(Quantity)";

$tdatacreategrn_stock_balance[".tableType"] = "list";

$tdatacreategrn_stock_balance[".printerPageOrientation"] = 0;
$tdatacreategrn_stock_balance[".nPrinterPageScale"] = 100;

$tdatacreategrn_stock_balance[".nPrinterSplitRecords"] = 40;

$tdatacreategrn_stock_balance[".nPrinterPDFSplitRecords"] = 40;



$tdatacreategrn_stock_balance[".geocodingEnabled"] = false;





$tdatacreategrn_stock_balance[".listGridLayout"] = 3;


$tdatacreategrn_stock_balance[".isResizeColumns"] = true;



// view page pdf
$tdatacreategrn_stock_balance[".isViewPagePDF"] = true;
$tdatacreategrn_stock_balance[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatacreategrn_stock_balance[".isPrinterPagePDF"] = true;
$tdatacreategrn_stock_balance[".nPrinterPagePDFScale"] = 100;


$tdatacreategrn_stock_balance[".pageSize"] = 20;

$tdatacreategrn_stock_balance[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacreategrn_stock_balance[".strOrderBy"] = $tstrOrderBy;

$tdatacreategrn_stock_balance[".orderindexes"] = array();

$tdatacreategrn_stock_balance[".sqlHead"] = "SELECT inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  SUM(creategrn.Quantity) AS `SUM(Quantity)`";
$tdatacreategrn_stock_balance[".sqlFrom"] = "FROM creategrn  RIGHT OUTER JOIN inventorymaster ON inventorymaster.ItemID = creategrn.ItemCode";
$tdatacreategrn_stock_balance[".sqlWhereExpr"] = "";
$tdatacreategrn_stock_balance[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatacreategrn_stock_balance[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacreategrn_stock_balance[".arrGroupsPerPage"] = $arrGPP;

$tdatacreategrn_stock_balance[".highlightSearchResults"] = true;

$tableKeyscreategrn_stock_balance = array();
$tdatacreategrn_stock_balance[".Keys"] = $tableKeyscreategrn_stock_balance;

$tdatacreategrn_stock_balance[".listFields"] = array();
$tdatacreategrn_stock_balance[".listFields"][] = "ItemID";
$tdatacreategrn_stock_balance[".listFields"][] = "Brand";
$tdatacreategrn_stock_balance[".listFields"][] = "Description";
$tdatacreategrn_stock_balance[".listFields"][] = "Supplier";
$tdatacreategrn_stock_balance[".listFields"][] = "SUM(Quantity)";

$tdatacreategrn_stock_balance[".hideMobileList"] = array();


$tdatacreategrn_stock_balance[".viewFields"] = array();

$tdatacreategrn_stock_balance[".addFields"] = array();

$tdatacreategrn_stock_balance[".masterListFields"] = array();
$tdatacreategrn_stock_balance[".masterListFields"][] = "ItemID";
$tdatacreategrn_stock_balance[".masterListFields"][] = "Brand";
$tdatacreategrn_stock_balance[".masterListFields"][] = "Description";
$tdatacreategrn_stock_balance[".masterListFields"][] = "Supplier";
$tdatacreategrn_stock_balance[".masterListFields"][] = "SUM(Quantity)";

$tdatacreategrn_stock_balance[".inlineAddFields"] = array();

$tdatacreategrn_stock_balance[".editFields"] = array();

$tdatacreategrn_stock_balance[".inlineEditFields"] = array();

$tdatacreategrn_stock_balance[".updateSelectedFields"] = array();


$tdatacreategrn_stock_balance[".exportFields"] = array();
$tdatacreategrn_stock_balance[".exportFields"][] = "ItemID";
$tdatacreategrn_stock_balance[".exportFields"][] = "Brand";
$tdatacreategrn_stock_balance[".exportFields"][] = "Description";
$tdatacreategrn_stock_balance[".exportFields"][] = "Supplier";
$tdatacreategrn_stock_balance[".exportFields"][] = "SUM(Quantity)";

$tdatacreategrn_stock_balance[".importFields"] = array();

$tdatacreategrn_stock_balance[".printFields"] = array();
$tdatacreategrn_stock_balance[".printFields"][] = "ItemID";
$tdatacreategrn_stock_balance[".printFields"][] = "Brand";
$tdatacreategrn_stock_balance[".printFields"][] = "Description";
$tdatacreategrn_stock_balance[".printFields"][] = "Supplier";
$tdatacreategrn_stock_balance[".printFields"][] = "SUM(Quantity)";

//	ItemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ItemID";
	$fdata["GoodName"] = "ItemID";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("creategrn_stock_balance","ItemID");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatacreategrn_stock_balance["ItemID"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("creategrn_stock_balance","Brand");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatacreategrn_stock_balance["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("creategrn_stock_balance","Description");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatacreategrn_stock_balance["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("creategrn_stock_balance","Supplier");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatacreategrn_stock_balance["Supplier"] = $fdata;
//	SUM(Quantity)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SUM(Quantity)";
	$fdata["GoodName"] = "SUM_Quantity_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("creategrn_stock_balance","SUM_Quantity_");
	$fdata["FieldType"] = 5;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SUM(Quantity)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(creategrn.Quantity)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
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




	$tdatacreategrn_stock_balance["SUM(Quantity)"] = $fdata;


$tables_data["creategrn-stock-balance"]=&$tdatacreategrn_stock_balance;
$field_labels["creategrn_stock_balance"] = &$fieldLabelscreategrn_stock_balance;
$fieldToolTips["creategrn_stock_balance"] = &$fieldToolTipscreategrn_stock_balance;
$page_titles["creategrn_stock_balance"] = &$pageTitlescreategrn_stock_balance;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["creategrn-stock-balance"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["creategrn-stock-balance"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_creategrn_stock_balance()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  SUM(creategrn.Quantity) AS `SUM(Quantity)`";
$proto0["m_strFrom"] = "FROM creategrn  RIGHT OUTER JOIN inventorymaster ON inventorymaster.ItemID = creategrn.ItemCode";
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
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "creategrn-stock-balance"
));

$proto6["m_sql"] = "inventorymaster.ItemID";
$proto6["m_srcTableName"] = "creategrn-stock-balance";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "creategrn-stock-balance"
));

$proto8["m_sql"] = "inventorymaster.Brand";
$proto8["m_srcTableName"] = "creategrn-stock-balance";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "creategrn-stock-balance"
));

$proto10["m_sql"] = "inventorymaster.Description";
$proto10["m_srcTableName"] = "creategrn-stock-balance";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "creategrn-stock-balance"
));

$proto12["m_sql"] = "inventorymaster.Supplier";
$proto12["m_srcTableName"] = "creategrn-stock-balance";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_SUM";
$proto15["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "creategrn-stock-balance"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "SUM(creategrn.Quantity)";
$proto14["m_srcTableName"] = "creategrn-stock-balance";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "SUM(Quantity)";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "creategrn";
$proto18["m_srcTableName"] = "creategrn-stock-balance";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "ID";
$proto18["m_columns"][] = "ItemCode";
$proto18["m_columns"][] = "Brand";
$proto18["m_columns"][] = "Description";
$proto18["m_columns"][] = "Supplier";
$proto18["m_columns"][] = "Quantity";
$proto18["m_columns"][] = "RemovedFrom";
$proto18["m_columns"][] = "SystemDate";
$proto18["m_columns"][] = "GRNDate";
$proto18["m_columns"][] = "EnteredBy";
$proto18["m_columns"][] = "ApprovedBy";
$proto18["m_columns"][] = "UnitPrice";
$proto18["m_columns"][] = "Status";
$proto18["m_columns"][] = "RefNumber";
$proto18["m_columns"][] = "CurrentStock";
$proto18["m_columns"][] = "Fleet";
$proto18["m_columns"][] = "PriceLink";
$proto18["m_columns"][] = "Cost";
$proto18["m_columns"][] = "Remarks";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "creategrn";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "creategrn-stock-balance";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
												$proto21=array();
$proto21["m_link"] = "SQLL_RIGHTJOIN";
			$proto22=array();
$proto22["m_strName"] = "inventorymaster";
$proto22["m_srcTableName"] = "creategrn-stock-balance";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "Id";
$proto22["m_columns"][] = "ItemID";
$proto22["m_columns"][] = "Brand";
$proto22["m_columns"][] = "Description";
$proto22["m_columns"][] = "Supplier";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "RIGHT OUTER JOIN inventorymaster ON inventorymaster.ItemID = creategrn.ItemCode";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "creategrn-stock-balance";
$proto23=array();
$proto23["m_sql"] = "inventorymaster.ItemID = creategrn.ItemCode";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "creategrn-stock-balance"
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "= creategrn.ItemCode";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "creategrn-stock-balance"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "creategrn-stock-balance"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "creategrn-stock-balance"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "creategrn-stock-balance"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="creategrn-stock-balance";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_creategrn_stock_balance = createSqlQuery_creategrn_stock_balance();


	
					
;

					

$tdatacreategrn_stock_balance[".sqlquery"] = $queryData_creategrn_stock_balance;

$tableEvents["creategrn-stock-balance"] = new eventsBase;
$tdatacreategrn_stock_balance[".hasEvents"] = false;

?>