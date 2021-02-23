<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainventorymaster_qty = array();
	$tdatainventorymaster_qty[".truncateText"] = true;
	$tdatainventorymaster_qty[".NumberOfChars"] = 80;
	$tdatainventorymaster_qty[".ShortName"] = "inventorymaster_qty";
	$tdatainventorymaster_qty[".OwnerID"] = "";
	$tdatainventorymaster_qty[".OriginalTable"] = "inventorymaster";

//	field labels
$fieldLabelsinventorymaster_qty = array();
$fieldToolTipsinventorymaster_qty = array();
$pageTitlesinventorymaster_qty = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinventorymaster_qty["English"] = array();
	$fieldToolTipsinventorymaster_qty["English"] = array();
	$pageTitlesinventorymaster_qty["English"] = array();
	$fieldLabelsinventorymaster_qty["English"]["Id"] = "Id";
	$fieldToolTipsinventorymaster_qty["English"]["Id"] = "";
	$fieldLabelsinventorymaster_qty["English"]["ItemID"] = "Item ID";
	$fieldToolTipsinventorymaster_qty["English"]["ItemID"] = "";
	$fieldLabelsinventorymaster_qty["English"]["Brand"] = "Brand";
	$fieldToolTipsinventorymaster_qty["English"]["Brand"] = "";
	$fieldLabelsinventorymaster_qty["English"]["Description"] = "Description";
	$fieldToolTipsinventorymaster_qty["English"]["Description"] = "";
	$fieldLabelsinventorymaster_qty["English"]["Supplier"] = "Supplier";
	$fieldToolTipsinventorymaster_qty["English"]["Supplier"] = "";
	$fieldLabelsinventorymaster_qty["English"]["SUM_Quantity_"] = "SUM(Quantity)";
	$fieldToolTipsinventorymaster_qty["English"]["SUM_Quantity_"] = "";
	if (count($fieldToolTipsinventorymaster_qty["English"]))
		$tdatainventorymaster_qty[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsinventorymaster_qty["Afrikaans"] = array();
	$fieldToolTipsinventorymaster_qty["Afrikaans"] = array();
	$pageTitlesinventorymaster_qty["Afrikaans"] = array();
	$fieldLabelsinventorymaster_qty["Afrikaans"]["Id"] = "ID";
	$fieldToolTipsinventorymaster_qty["Afrikaans"]["Id"] = "";
	$fieldLabelsinventorymaster_qty["Afrikaans"]["ItemID"] = "item ID";
	$fieldToolTipsinventorymaster_qty["Afrikaans"]["ItemID"] = "";
	$fieldLabelsinventorymaster_qty["Afrikaans"]["Brand"] = "Brand";
	$fieldToolTipsinventorymaster_qty["Afrikaans"]["Brand"] = "";
	$fieldLabelsinventorymaster_qty["Afrikaans"]["Description"] = "beskrywing";
	$fieldToolTipsinventorymaster_qty["Afrikaans"]["Description"] = "";
	$fieldLabelsinventorymaster_qty["Afrikaans"]["Supplier"] = "verskaffer";
	$fieldToolTipsinventorymaster_qty["Afrikaans"]["Supplier"] = "";
	$fieldLabelsinventorymaster_qty["Afrikaans"]["SUM_Quantity_"] = "Som (Hoeveelheid)";
	$fieldToolTipsinventorymaster_qty["Afrikaans"]["SUM_Quantity_"] = "";
	if (count($fieldToolTipsinventorymaster_qty["Afrikaans"]))
		$tdatainventorymaster_qty[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsinventorymaster_qty["Arabic"] = array();
	$fieldToolTipsinventorymaster_qty["Arabic"] = array();
	$pageTitlesinventorymaster_qty["Arabic"] = array();
	$fieldLabelsinventorymaster_qty["Arabic"]["Id"] = "???? ?????";
	$fieldToolTipsinventorymaster_qty["Arabic"]["Id"] = "";
	$fieldLabelsinventorymaster_qty["Arabic"]["ItemID"] = "??? ??????";
	$fieldToolTipsinventorymaster_qty["Arabic"]["ItemID"] = "";
	$fieldLabelsinventorymaster_qty["Arabic"]["Brand"] = "????? ??????";
	$fieldToolTipsinventorymaster_qty["Arabic"]["Brand"] = "";
	$fieldLabelsinventorymaster_qty["Arabic"]["Description"] = "???";
	$fieldToolTipsinventorymaster_qty["Arabic"]["Description"] = "";
	$fieldLabelsinventorymaster_qty["Arabic"]["Supplier"] = "??????";
	$fieldToolTipsinventorymaster_qty["Arabic"]["Supplier"] = "";
	$fieldLabelsinventorymaster_qty["Arabic"]["SUM_Quantity_"] = "SUM (??????)";
	$fieldToolTipsinventorymaster_qty["Arabic"]["SUM_Quantity_"] = "";
	if (count($fieldToolTipsinventorymaster_qty["Arabic"]))
		$tdatainventorymaster_qty[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsinventorymaster_qty["Chinese"] = array();
	$fieldToolTipsinventorymaster_qty["Chinese"] = array();
	$pageTitlesinventorymaster_qty["Chinese"] = array();
	$fieldLabelsinventorymaster_qty["Chinese"]["Id"] = "ID";
	$fieldToolTipsinventorymaster_qty["Chinese"]["Id"] = "";
	$fieldLabelsinventorymaster_qty["Chinese"]["ItemID"] = "??ID";
	$fieldToolTipsinventorymaster_qty["Chinese"]["ItemID"] = "";
	$fieldLabelsinventorymaster_qty["Chinese"]["Brand"] = "?";
	$fieldToolTipsinventorymaster_qty["Chinese"]["Brand"] = "";
	$fieldLabelsinventorymaster_qty["Chinese"]["Description"] = "??";
	$fieldToolTipsinventorymaster_qty["Chinese"]["Description"] = "";
	$fieldLabelsinventorymaster_qty["Chinese"]["Supplier"] = "???";
	$fieldToolTipsinventorymaster_qty["Chinese"]["Supplier"] = "";
	$fieldLabelsinventorymaster_qty["Chinese"]["SUM_Quantity_"] = "SUM????";
	$fieldToolTipsinventorymaster_qty["Chinese"]["SUM_Quantity_"] = "";
	if (count($fieldToolTipsinventorymaster_qty["Chinese"]))
		$tdatainventorymaster_qty[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsinventorymaster_qty["French"] = array();
	$fieldToolTipsinventorymaster_qty["French"] = array();
	$pageTitlesinventorymaster_qty["French"] = array();
	$fieldLabelsinventorymaster_qty["French"]["Id"] = "Id";
	$fieldToolTipsinventorymaster_qty["French"]["Id"] = "";
	$fieldLabelsinventorymaster_qty["French"]["ItemID"] = "ID de l'article";
	$fieldToolTipsinventorymaster_qty["French"]["ItemID"] = "";
	$fieldLabelsinventorymaster_qty["French"]["Brand"] = "Marque";
	$fieldToolTipsinventorymaster_qty["French"]["Brand"] = "";
	$fieldLabelsinventorymaster_qty["French"]["Description"] = "La description";
	$fieldToolTipsinventorymaster_qty["French"]["Description"] = "";
	$fieldLabelsinventorymaster_qty["French"]["Supplier"] = "Fournisseur";
	$fieldToolTipsinventorymaster_qty["French"]["Supplier"] = "";
	$fieldLabelsinventorymaster_qty["French"]["SUM_Quantity_"] = "SOMME (Quantité)";
	$fieldToolTipsinventorymaster_qty["French"]["SUM_Quantity_"] = "";
	if (count($fieldToolTipsinventorymaster_qty["French"]))
		$tdatainventorymaster_qty[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsinventorymaster_qty["German"] = array();
	$fieldToolTipsinventorymaster_qty["German"] = array();
	$pageTitlesinventorymaster_qty["German"] = array();
	$fieldLabelsinventorymaster_qty["German"]["Id"] = "Ich würde";
	$fieldToolTipsinventorymaster_qty["German"]["Id"] = "";
	$fieldLabelsinventorymaster_qty["German"]["ItemID"] = "Artikel Identifikationsnummer";
	$fieldToolTipsinventorymaster_qty["German"]["ItemID"] = "";
	$fieldLabelsinventorymaster_qty["German"]["Brand"] = "Marke";
	$fieldToolTipsinventorymaster_qty["German"]["Brand"] = "";
	$fieldLabelsinventorymaster_qty["German"]["Description"] = "Beschreibung";
	$fieldToolTipsinventorymaster_qty["German"]["Description"] = "";
	$fieldLabelsinventorymaster_qty["German"]["Supplier"] = "Lieferant";
	$fieldToolTipsinventorymaster_qty["German"]["Supplier"] = "";
	$fieldLabelsinventorymaster_qty["German"]["SUM_Quantity_"] = "SUM (Anzahl)";
	$fieldToolTipsinventorymaster_qty["German"]["SUM_Quantity_"] = "";
	if (count($fieldToolTipsinventorymaster_qty["German"]))
		$tdatainventorymaster_qty[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsinventorymaster_qty["Italian"] = array();
	$fieldToolTipsinventorymaster_qty["Italian"] = array();
	$pageTitlesinventorymaster_qty["Italian"] = array();
	$fieldLabelsinventorymaster_qty["Italian"]["Id"] = "Id";
	$fieldToolTipsinventorymaster_qty["Italian"]["Id"] = "";
	$fieldLabelsinventorymaster_qty["Italian"]["ItemID"] = "Numero identificativo dell'oggetto";
	$fieldToolTipsinventorymaster_qty["Italian"]["ItemID"] = "";
	$fieldLabelsinventorymaster_qty["Italian"]["Brand"] = "Marca";
	$fieldToolTipsinventorymaster_qty["Italian"]["Brand"] = "";
	$fieldLabelsinventorymaster_qty["Italian"]["Description"] = "Descrizione";
	$fieldToolTipsinventorymaster_qty["Italian"]["Description"] = "";
	$fieldLabelsinventorymaster_qty["Italian"]["Supplier"] = "Fornitore";
	$fieldToolTipsinventorymaster_qty["Italian"]["Supplier"] = "";
	$fieldLabelsinventorymaster_qty["Italian"]["SUM_Quantity_"] = "SUM (Quantità)";
	$fieldToolTipsinventorymaster_qty["Italian"]["SUM_Quantity_"] = "";
	if (count($fieldToolTipsinventorymaster_qty["Italian"]))
		$tdatainventorymaster_qty[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsinventorymaster_qty["Russian"] = array();
	$fieldToolTipsinventorymaster_qty["Russian"] = array();
	$pageTitlesinventorymaster_qty["Russian"] = array();
	$fieldLabelsinventorymaster_qty["Russian"]["Id"] = "? ??";
	$fieldToolTipsinventorymaster_qty["Russian"]["Id"] = "";
	$fieldLabelsinventorymaster_qty["Russian"]["ItemID"] = "Item ID";
	$fieldToolTipsinventorymaster_qty["Russian"]["ItemID"] = "";
	$fieldLabelsinventorymaster_qty["Russian"]["Brand"] = "?????";
	$fieldToolTipsinventorymaster_qty["Russian"]["Brand"] = "";
	$fieldLabelsinventorymaster_qty["Russian"]["Description"] = "????????";
	$fieldToolTipsinventorymaster_qty["Russian"]["Description"] = "";
	$fieldLabelsinventorymaster_qty["Russian"]["Supplier"] = "?????????";
	$fieldToolTipsinventorymaster_qty["Russian"]["Supplier"] = "";
	$fieldLabelsinventorymaster_qty["Russian"]["SUM_Quantity_"] = "????? (??????????)";
	$fieldToolTipsinventorymaster_qty["Russian"]["SUM_Quantity_"] = "";
	if (count($fieldToolTipsinventorymaster_qty["Russian"]))
		$tdatainventorymaster_qty[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinventorymaster_qty["Spanish"] = array();
	$fieldToolTipsinventorymaster_qty["Spanish"] = array();
	$pageTitlesinventorymaster_qty["Spanish"] = array();
	$fieldLabelsinventorymaster_qty["Spanish"]["Id"] = "Carné de identidad";
	$fieldToolTipsinventorymaster_qty["Spanish"]["Id"] = "";
	$fieldLabelsinventorymaster_qty["Spanish"]["ItemID"] = "Identificación del artículo";
	$fieldToolTipsinventorymaster_qty["Spanish"]["ItemID"] = "";
	$fieldLabelsinventorymaster_qty["Spanish"]["Brand"] = "Marca";
	$fieldToolTipsinventorymaster_qty["Spanish"]["Brand"] = "";
	$fieldLabelsinventorymaster_qty["Spanish"]["Description"] = "Descripción";
	$fieldToolTipsinventorymaster_qty["Spanish"]["Description"] = "";
	$fieldLabelsinventorymaster_qty["Spanish"]["Supplier"] = "Proveedor";
	$fieldToolTipsinventorymaster_qty["Spanish"]["Supplier"] = "";
	$fieldLabelsinventorymaster_qty["Spanish"]["SUM_Quantity_"] = "SUM (Cantidad)";
	$fieldToolTipsinventorymaster_qty["Spanish"]["SUM_Quantity_"] = "";
	if (count($fieldToolTipsinventorymaster_qty["Spanish"]))
		$tdatainventorymaster_qty[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinventorymaster_qty[""] = array();
	$fieldToolTipsinventorymaster_qty[""] = array();
	$pageTitlesinventorymaster_qty[""] = array();
	if (count($fieldToolTipsinventorymaster_qty[""]))
		$tdatainventorymaster_qty[".isUseToolTips"] = true;
}


	$tdatainventorymaster_qty[".NCSearch"] = true;



$tdatainventorymaster_qty[".shortTableName"] = "inventorymaster_qty";
$tdatainventorymaster_qty[".nSecOptions"] = 0;
$tdatainventorymaster_qty[".recsPerRowPrint"] = 1;
$tdatainventorymaster_qty[".mainTableOwnerID"] = "";
$tdatainventorymaster_qty[".moveNext"] = 1;
$tdatainventorymaster_qty[".entityType"] = 1;

$tdatainventorymaster_qty[".strOriginalTableName"] = "inventorymaster";

		 



$tdatainventorymaster_qty[".showAddInPopup"] = false;

$tdatainventorymaster_qty[".showEditInPopup"] = false;

$tdatainventorymaster_qty[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainventorymaster_qty[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainventorymaster_qty[".fieldsForRegister"] = array();

	$tdatainventorymaster_qty[".listAjax"] = true;

	$tdatainventorymaster_qty[".audit"] = false;

	$tdatainventorymaster_qty[".locking"] = false;

$tdatainventorymaster_qty[".edit"] = true;
$tdatainventorymaster_qty[".afterEditAction"] = 1;
$tdatainventorymaster_qty[".closePopupAfterEdit"] = 1;
$tdatainventorymaster_qty[".afterEditActionDetTable"] = "";

$tdatainventorymaster_qty[".add"] = true;
$tdatainventorymaster_qty[".afterAddAction"] = 1;
$tdatainventorymaster_qty[".closePopupAfterAdd"] = 1;
$tdatainventorymaster_qty[".afterAddActionDetTable"] = "";

$tdatainventorymaster_qty[".list"] = true;




$tdatainventorymaster_qty[".view"] = true;

$tdatainventorymaster_qty[".import"] = true;

$tdatainventorymaster_qty[".exportTo"] = true;

$tdatainventorymaster_qty[".printFriendly"] = true;

$tdatainventorymaster_qty[".delete"] = true;

$tdatainventorymaster_qty[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatainventorymaster_qty[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatainventorymaster_qty[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatainventorymaster_qty[".searchSaving"] = false;
//

$tdatainventorymaster_qty[".showSearchPanel"] = true;
		$tdatainventorymaster_qty[".flexibleSearch"] = true;

$tdatainventorymaster_qty[".isUseAjaxSuggest"] = true;

$tdatainventorymaster_qty[".rowHighlite"] = true;



$tdatainventorymaster_qty[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainventorymaster_qty[".isUseTimeForSearch"] = false;





$tdatainventorymaster_qty[".allSearchFields"] = array();
$tdatainventorymaster_qty[".filterFields"] = array();
$tdatainventorymaster_qty[".requiredSearchFields"] = array();

$tdatainventorymaster_qty[".allSearchFields"][] = "Id";
	$tdatainventorymaster_qty[".allSearchFields"][] = "ItemID";
	$tdatainventorymaster_qty[".allSearchFields"][] = "Brand";
	$tdatainventorymaster_qty[".allSearchFields"][] = "Description";
	$tdatainventorymaster_qty[".allSearchFields"][] = "Supplier";
	$tdatainventorymaster_qty[".allSearchFields"][] = "SUM(Quantity)";
	

$tdatainventorymaster_qty[".googleLikeFields"] = array();
$tdatainventorymaster_qty[".googleLikeFields"][] = "Id";
$tdatainventorymaster_qty[".googleLikeFields"][] = "ItemID";
$tdatainventorymaster_qty[".googleLikeFields"][] = "Brand";
$tdatainventorymaster_qty[".googleLikeFields"][] = "Description";
$tdatainventorymaster_qty[".googleLikeFields"][] = "Supplier";
$tdatainventorymaster_qty[".googleLikeFields"][] = "SUM(Quantity)";


$tdatainventorymaster_qty[".advSearchFields"] = array();
$tdatainventorymaster_qty[".advSearchFields"][] = "Id";
$tdatainventorymaster_qty[".advSearchFields"][] = "ItemID";
$tdatainventorymaster_qty[".advSearchFields"][] = "Brand";
$tdatainventorymaster_qty[".advSearchFields"][] = "Description";
$tdatainventorymaster_qty[".advSearchFields"][] = "Supplier";
$tdatainventorymaster_qty[".advSearchFields"][] = "SUM(Quantity)";

$tdatainventorymaster_qty[".tableType"] = "list";

$tdatainventorymaster_qty[".printerPageOrientation"] = 0;
$tdatainventorymaster_qty[".nPrinterPageScale"] = 100;

$tdatainventorymaster_qty[".nPrinterSplitRecords"] = 40;

$tdatainventorymaster_qty[".nPrinterPDFSplitRecords"] = 40;



$tdatainventorymaster_qty[".geocodingEnabled"] = false;





$tdatainventorymaster_qty[".listGridLayout"] = 3;


$tdatainventorymaster_qty[".isResizeColumns"] = true;



// view page pdf
$tdatainventorymaster_qty[".isViewPagePDF"] = true;
$tdatainventorymaster_qty[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatainventorymaster_qty[".isPrinterPagePDF"] = true;
$tdatainventorymaster_qty[".nPrinterPagePDFScale"] = 100;


$tdatainventorymaster_qty[".pageSize"] = 20;

$tdatainventorymaster_qty[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainventorymaster_qty[".strOrderBy"] = $tstrOrderBy;

$tdatainventorymaster_qty[".orderindexes"] = array();

$tdatainventorymaster_qty[".sqlHead"] = "SELECT inventorymaster.Id,  inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  SUM(creategrn.Quantity) AS `SUM(Quantity)`";
$tdatainventorymaster_qty[".sqlFrom"] = "FROM inventorymaster  INNER JOIN creategrn ON inventorymaster.ItemID = creategrn.ItemCode";
$tdatainventorymaster_qty[".sqlWhereExpr"] = "";
$tdatainventorymaster_qty[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatainventorymaster_qty[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainventorymaster_qty[".arrGroupsPerPage"] = $arrGPP;

$tdatainventorymaster_qty[".highlightSearchResults"] = true;

$tableKeysinventorymaster_qty = array();
$tableKeysinventorymaster_qty[] = "Id";
$tdatainventorymaster_qty[".Keys"] = $tableKeysinventorymaster_qty;

$tdatainventorymaster_qty[".listFields"] = array();
$tdatainventorymaster_qty[".listFields"][] = "SUM(Quantity)";
$tdatainventorymaster_qty[".listFields"][] = "ItemID";
$tdatainventorymaster_qty[".listFields"][] = "Brand";
$tdatainventorymaster_qty[".listFields"][] = "Description";
$tdatainventorymaster_qty[".listFields"][] = "Supplier";

$tdatainventorymaster_qty[".hideMobileList"] = array();


$tdatainventorymaster_qty[".viewFields"] = array();
$tdatainventorymaster_qty[".viewFields"][] = "ItemID";
$tdatainventorymaster_qty[".viewFields"][] = "Brand";
$tdatainventorymaster_qty[".viewFields"][] = "Description";
$tdatainventorymaster_qty[".viewFields"][] = "Supplier";
$tdatainventorymaster_qty[".viewFields"][] = "SUM(Quantity)";

$tdatainventorymaster_qty[".addFields"] = array();
$tdatainventorymaster_qty[".addFields"][] = "ItemID";
$tdatainventorymaster_qty[".addFields"][] = "Brand";
$tdatainventorymaster_qty[".addFields"][] = "Description";
$tdatainventorymaster_qty[".addFields"][] = "Supplier";

$tdatainventorymaster_qty[".masterListFields"] = array();
$tdatainventorymaster_qty[".masterListFields"][] = "Id";
$tdatainventorymaster_qty[".masterListFields"][] = "ItemID";
$tdatainventorymaster_qty[".masterListFields"][] = "Brand";
$tdatainventorymaster_qty[".masterListFields"][] = "Description";
$tdatainventorymaster_qty[".masterListFields"][] = "Supplier";
$tdatainventorymaster_qty[".masterListFields"][] = "SUM(Quantity)";

$tdatainventorymaster_qty[".inlineAddFields"] = array();

$tdatainventorymaster_qty[".editFields"] = array();
$tdatainventorymaster_qty[".editFields"][] = "ItemID";
$tdatainventorymaster_qty[".editFields"][] = "Brand";
$tdatainventorymaster_qty[".editFields"][] = "Description";
$tdatainventorymaster_qty[".editFields"][] = "Supplier";

$tdatainventorymaster_qty[".inlineEditFields"] = array();

$tdatainventorymaster_qty[".updateSelectedFields"] = array();
$tdatainventorymaster_qty[".updateSelectedFields"][] = "ItemID";
$tdatainventorymaster_qty[".updateSelectedFields"][] = "Brand";
$tdatainventorymaster_qty[".updateSelectedFields"][] = "Description";
$tdatainventorymaster_qty[".updateSelectedFields"][] = "Supplier";


$tdatainventorymaster_qty[".exportFields"] = array();
$tdatainventorymaster_qty[".exportFields"][] = "ItemID";
$tdatainventorymaster_qty[".exportFields"][] = "Brand";
$tdatainventorymaster_qty[".exportFields"][] = "Description";
$tdatainventorymaster_qty[".exportFields"][] = "Supplier";
$tdatainventorymaster_qty[".exportFields"][] = "SUM(Quantity)";

$tdatainventorymaster_qty[".importFields"] = array();
$tdatainventorymaster_qty[".importFields"][] = "ItemID";
$tdatainventorymaster_qty[".importFields"][] = "Brand";
$tdatainventorymaster_qty[".importFields"][] = "Description";
$tdatainventorymaster_qty[".importFields"][] = "Supplier";
$tdatainventorymaster_qty[".importFields"][] = "SUM(Quantity)";

$tdatainventorymaster_qty[".printFields"] = array();
$tdatainventorymaster_qty[".printFields"][] = "ItemID";
$tdatainventorymaster_qty[".printFields"][] = "Brand";
$tdatainventorymaster_qty[".printFields"][] = "Description";
$tdatainventorymaster_qty[".printFields"][] = "Supplier";
$tdatainventorymaster_qty[".printFields"][] = "SUM(Quantity)";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_qty","Id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inventorymaster.Id";

	
	
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




	$tdatainventorymaster_qty["Id"] = $fdata;
//	ItemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemID";
	$fdata["GoodName"] = "ItemID";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_qty","ItemID");
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




	$tdatainventorymaster_qty["ItemID"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_qty","Brand");
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




	$tdatainventorymaster_qty["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_qty","Description");
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




	$tdatainventorymaster_qty["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster_qty","Supplier");
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




	$tdatainventorymaster_qty["Supplier"] = $fdata;
//	SUM(Quantity)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SUM(Quantity)";
	$fdata["GoodName"] = "SUM_Quantity_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("inventorymaster_qty","SUM_Quantity_");
	$fdata["FieldType"] = 5;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatainventorymaster_qty["SUM(Quantity)"] = $fdata;


$tables_data["inventorymaster-qty"]=&$tdatainventorymaster_qty;
$field_labels["inventorymaster_qty"] = &$fieldLabelsinventorymaster_qty;
$fieldToolTips["inventorymaster_qty"] = &$fieldToolTipsinventorymaster_qty;
$page_titles["inventorymaster_qty"] = &$pageTitlesinventorymaster_qty;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inventorymaster-qty"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["inventorymaster-qty"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inventorymaster_qty()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "inventorymaster.Id,  inventorymaster.ItemID,  inventorymaster.Brand,  inventorymaster.Description,  inventorymaster.Supplier,  SUM(creategrn.Quantity) AS `SUM(Quantity)`";
$proto0["m_strFrom"] = "FROM inventorymaster  INNER JOIN creategrn ON inventorymaster.ItemID = creategrn.ItemCode";
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
	"m_strName" => "Id",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-qty"
));

$proto6["m_sql"] = "inventorymaster.Id";
$proto6["m_srcTableName"] = "inventorymaster-qty";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-qty"
));

$proto8["m_sql"] = "inventorymaster.ItemID";
$proto8["m_srcTableName"] = "inventorymaster-qty";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-qty"
));

$proto10["m_sql"] = "inventorymaster.Brand";
$proto10["m_srcTableName"] = "inventorymaster-qty";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-qty"
));

$proto12["m_sql"] = "inventorymaster.Description";
$proto12["m_srcTableName"] = "inventorymaster-qty";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-qty"
));

$proto14["m_sql"] = "inventorymaster.Supplier";
$proto14["m_srcTableName"] = "inventorymaster-qty";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_SUM";
$proto17["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "creategrn",
	"m_srcTableName" => "inventorymaster-qty"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "SUM(creategrn.Quantity)";
$proto16["m_srcTableName"] = "inventorymaster-qty";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "SUM(Quantity)";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "inventorymaster";
$proto20["m_srcTableName"] = "inventorymaster-qty";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "Id";
$proto20["m_columns"][] = "ItemID";
$proto20["m_columns"][] = "Brand";
$proto20["m_columns"][] = "Description";
$proto20["m_columns"][] = "Supplier";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "inventorymaster";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "inventorymaster-qty";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
												$proto23=array();
$proto23["m_link"] = "SQLL_INNERJOIN";
			$proto24=array();
$proto24["m_strName"] = "creategrn";
$proto24["m_srcTableName"] = "inventorymaster-qty";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "ID";
$proto24["m_columns"][] = "ItemCode";
$proto24["m_columns"][] = "Brand";
$proto24["m_columns"][] = "Description";
$proto24["m_columns"][] = "Supplier";
$proto24["m_columns"][] = "Quantity";
$proto24["m_columns"][] = "RemovedFrom";
$proto24["m_columns"][] = "SystemDate";
$proto24["m_columns"][] = "GRNDate";
$proto24["m_columns"][] = "EnteredBy";
$proto24["m_columns"][] = "ApprovedBy";
$proto24["m_columns"][] = "UnitPrice";
$proto24["m_columns"][] = "Status";
$proto24["m_columns"][] = "RefNumber";
$proto24["m_columns"][] = "CurrentStock";
$proto24["m_columns"][] = "Fleet";
$proto24["m_columns"][] = "PriceLink";
$proto24["m_columns"][] = "Cost";
$proto24["m_columns"][] = "Remarks";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "INNER JOIN creategrn ON inventorymaster.ItemID = creategrn.ItemCode";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "inventorymaster-qty";
$proto25=array();
$proto25["m_sql"] = "inventorymaster.ItemID = creategrn.ItemCode";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-qty"
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "= creategrn.ItemCode";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "Id",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-qty"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-qty"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-qty"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-qty"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster-qty"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="inventorymaster-qty";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inventorymaster_qty = createSqlQuery_inventorymaster_qty();


	
					
;

						

$tdatainventorymaster_qty[".sqlquery"] = $queryData_inventorymaster_qty;

$tableEvents["inventorymaster-qty"] = new eventsBase;
$tdatainventorymaster_qty[".hasEvents"] = false;

?>