<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainventorymaster = array();
	$tdatainventorymaster[".truncateText"] = true;
	$tdatainventorymaster[".NumberOfChars"] = 80;
	$tdatainventorymaster[".ShortName"] = "inventorymaster";
	$tdatainventorymaster[".OwnerID"] = "";
	$tdatainventorymaster[".OriginalTable"] = "inventorymaster";

//	field labels
$fieldLabelsinventorymaster = array();
$fieldToolTipsinventorymaster = array();
$pageTitlesinventorymaster = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinventorymaster["English"] = array();
	$fieldToolTipsinventorymaster["English"] = array();
	$pageTitlesinventorymaster["English"] = array();
	$fieldLabelsinventorymaster["English"]["Id"] = "ID";
	$fieldToolTipsinventorymaster["English"]["Id"] = "";
	$fieldLabelsinventorymaster["English"]["ItemID"] = "Item ID";
	$fieldToolTipsinventorymaster["English"]["ItemID"] = "";
	$fieldLabelsinventorymaster["English"]["Brand"] = "Brand";
	$fieldToolTipsinventorymaster["English"]["Brand"] = "";
	$fieldLabelsinventorymaster["English"]["Description"] = "Description";
	$fieldToolTipsinventorymaster["English"]["Description"] = "";
	$fieldLabelsinventorymaster["English"]["Supplier"] = "Supplier";
	$fieldToolTipsinventorymaster["English"]["Supplier"] = "";
	if (count($fieldToolTipsinventorymaster["English"]))
		$tdatainventorymaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsinventorymaster["Afrikaans"] = array();
	$fieldToolTipsinventorymaster["Afrikaans"] = array();
	$pageTitlesinventorymaster["Afrikaans"] = array();
	$fieldLabelsinventorymaster["Afrikaans"]["Id"] = "ID";
	$fieldToolTipsinventorymaster["Afrikaans"]["Id"] = "";
	$fieldLabelsinventorymaster["Afrikaans"]["ItemID"] = "item ID";
	$fieldToolTipsinventorymaster["Afrikaans"]["ItemID"] = "";
	$fieldLabelsinventorymaster["Afrikaans"]["Brand"] = "Brand";
	$fieldToolTipsinventorymaster["Afrikaans"]["Brand"] = "";
	$fieldLabelsinventorymaster["Afrikaans"]["Description"] = "beskrywing";
	$fieldToolTipsinventorymaster["Afrikaans"]["Description"] = "";
	$fieldLabelsinventorymaster["Afrikaans"]["Supplier"] = "verskaffer";
	$fieldToolTipsinventorymaster["Afrikaans"]["Supplier"] = "";
	if (count($fieldToolTipsinventorymaster["Afrikaans"]))
		$tdatainventorymaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsinventorymaster["Arabic"] = array();
	$fieldToolTipsinventorymaster["Arabic"] = array();
	$pageTitlesinventorymaster["Arabic"] = array();
	$fieldLabelsinventorymaster["Arabic"]["Id"] = "???? ?????";
	$fieldToolTipsinventorymaster["Arabic"]["Id"] = "";
	$fieldLabelsinventorymaster["Arabic"]["ItemID"] = "??? ??????";
	$fieldToolTipsinventorymaster["Arabic"]["ItemID"] = "";
	$fieldLabelsinventorymaster["Arabic"]["Brand"] = "????? ??????";
	$fieldToolTipsinventorymaster["Arabic"]["Brand"] = "";
	$fieldLabelsinventorymaster["Arabic"]["Description"] = "???";
	$fieldToolTipsinventorymaster["Arabic"]["Description"] = "";
	$fieldLabelsinventorymaster["Arabic"]["Supplier"] = "??????";
	$fieldToolTipsinventorymaster["Arabic"]["Supplier"] = "";
	if (count($fieldToolTipsinventorymaster["Arabic"]))
		$tdatainventorymaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsinventorymaster["Chinese"] = array();
	$fieldToolTipsinventorymaster["Chinese"] = array();
	$pageTitlesinventorymaster["Chinese"] = array();
	$fieldLabelsinventorymaster["Chinese"]["Id"] = "ID";
	$fieldToolTipsinventorymaster["Chinese"]["Id"] = "";
	$fieldLabelsinventorymaster["Chinese"]["ItemID"] = "??ID";
	$fieldToolTipsinventorymaster["Chinese"]["ItemID"] = "";
	$fieldLabelsinventorymaster["Chinese"]["Brand"] = "?";
	$fieldToolTipsinventorymaster["Chinese"]["Brand"] = "";
	$fieldLabelsinventorymaster["Chinese"]["Description"] = "??";
	$fieldToolTipsinventorymaster["Chinese"]["Description"] = "";
	$fieldLabelsinventorymaster["Chinese"]["Supplier"] = "???";
	$fieldToolTipsinventorymaster["Chinese"]["Supplier"] = "";
	if (count($fieldToolTipsinventorymaster["Chinese"]))
		$tdatainventorymaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsinventorymaster["French"] = array();
	$fieldToolTipsinventorymaster["French"] = array();
	$pageTitlesinventorymaster["French"] = array();
	$fieldLabelsinventorymaster["French"]["Id"] = "ID";
	$fieldToolTipsinventorymaster["French"]["Id"] = "";
	$fieldLabelsinventorymaster["French"]["ItemID"] = "ID de l'article";
	$fieldToolTipsinventorymaster["French"]["ItemID"] = "";
	$fieldLabelsinventorymaster["French"]["Brand"] = "Marque";
	$fieldToolTipsinventorymaster["French"]["Brand"] = "";
	$fieldLabelsinventorymaster["French"]["Description"] = "La description";
	$fieldToolTipsinventorymaster["French"]["Description"] = "";
	$fieldLabelsinventorymaster["French"]["Supplier"] = "Fournisseur";
	$fieldToolTipsinventorymaster["French"]["Supplier"] = "";
	if (count($fieldToolTipsinventorymaster["French"]))
		$tdatainventorymaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsinventorymaster["German"] = array();
	$fieldToolTipsinventorymaster["German"] = array();
	$pageTitlesinventorymaster["German"] = array();
	$fieldLabelsinventorymaster["German"]["Id"] = "ICH WÜRDE";
	$fieldToolTipsinventorymaster["German"]["Id"] = "";
	$fieldLabelsinventorymaster["German"]["ItemID"] = "Artikel Identifikationsnummer";
	$fieldToolTipsinventorymaster["German"]["ItemID"] = "";
	$fieldLabelsinventorymaster["German"]["Brand"] = "Marke";
	$fieldToolTipsinventorymaster["German"]["Brand"] = "";
	$fieldLabelsinventorymaster["German"]["Description"] = "Beschreibung";
	$fieldToolTipsinventorymaster["German"]["Description"] = "";
	$fieldLabelsinventorymaster["German"]["Supplier"] = "Lieferant";
	$fieldToolTipsinventorymaster["German"]["Supplier"] = "";
	if (count($fieldToolTipsinventorymaster["German"]))
		$tdatainventorymaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsinventorymaster["Italian"] = array();
	$fieldToolTipsinventorymaster["Italian"] = array();
	$pageTitlesinventorymaster["Italian"] = array();
	$fieldLabelsinventorymaster["Italian"]["Id"] = "ID";
	$fieldToolTipsinventorymaster["Italian"]["Id"] = "";
	$fieldLabelsinventorymaster["Italian"]["ItemID"] = "Numero identificativo dell'oggetto";
	$fieldToolTipsinventorymaster["Italian"]["ItemID"] = "";
	$fieldLabelsinventorymaster["Italian"]["Brand"] = "Marca";
	$fieldToolTipsinventorymaster["Italian"]["Brand"] = "";
	$fieldLabelsinventorymaster["Italian"]["Description"] = "Descrizione";
	$fieldToolTipsinventorymaster["Italian"]["Description"] = "";
	$fieldLabelsinventorymaster["Italian"]["Supplier"] = "Fornitore";
	$fieldToolTipsinventorymaster["Italian"]["Supplier"] = "";
	if (count($fieldToolTipsinventorymaster["Italian"]))
		$tdatainventorymaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsinventorymaster["Russian"] = array();
	$fieldToolTipsinventorymaster["Russian"] = array();
	$pageTitlesinventorymaster["Russian"] = array();
	$fieldLabelsinventorymaster["Russian"]["Id"] = "? ??";
	$fieldToolTipsinventorymaster["Russian"]["Id"] = "";
	$fieldLabelsinventorymaster["Russian"]["ItemID"] = "Item ID";
	$fieldToolTipsinventorymaster["Russian"]["ItemID"] = "";
	$fieldLabelsinventorymaster["Russian"]["Brand"] = "?????";
	$fieldToolTipsinventorymaster["Russian"]["Brand"] = "";
	$fieldLabelsinventorymaster["Russian"]["Description"] = "????????";
	$fieldToolTipsinventorymaster["Russian"]["Description"] = "";
	$fieldLabelsinventorymaster["Russian"]["Supplier"] = "?????????";
	$fieldToolTipsinventorymaster["Russian"]["Supplier"] = "";
	if (count($fieldToolTipsinventorymaster["Russian"]))
		$tdatainventorymaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinventorymaster["Spanish"] = array();
	$fieldToolTipsinventorymaster["Spanish"] = array();
	$pageTitlesinventorymaster["Spanish"] = array();
	$fieldLabelsinventorymaster["Spanish"]["Id"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipsinventorymaster["Spanish"]["Id"] = "";
	$fieldLabelsinventorymaster["Spanish"]["ItemID"] = "Identificación del artículo";
	$fieldToolTipsinventorymaster["Spanish"]["ItemID"] = "";
	$fieldLabelsinventorymaster["Spanish"]["Brand"] = "Marca";
	$fieldToolTipsinventorymaster["Spanish"]["Brand"] = "";
	$fieldLabelsinventorymaster["Spanish"]["Description"] = "Descripción";
	$fieldToolTipsinventorymaster["Spanish"]["Description"] = "";
	$fieldLabelsinventorymaster["Spanish"]["Supplier"] = "Proveedor";
	$fieldToolTipsinventorymaster["Spanish"]["Supplier"] = "";
	if (count($fieldToolTipsinventorymaster["Spanish"]))
		$tdatainventorymaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinventorymaster[""] = array();
	$fieldToolTipsinventorymaster[""] = array();
	$pageTitlesinventorymaster[""] = array();
	if (count($fieldToolTipsinventorymaster[""]))
		$tdatainventorymaster[".isUseToolTips"] = true;
}


	$tdatainventorymaster[".NCSearch"] = true;



$tdatainventorymaster[".shortTableName"] = "inventorymaster";
$tdatainventorymaster[".nSecOptions"] = 0;
$tdatainventorymaster[".recsPerRowPrint"] = 1;
$tdatainventorymaster[".mainTableOwnerID"] = "";
$tdatainventorymaster[".moveNext"] = 1;
$tdatainventorymaster[".entityType"] = 0;

$tdatainventorymaster[".strOriginalTableName"] = "inventorymaster";

		 



$tdatainventorymaster[".showAddInPopup"] = false;

$tdatainventorymaster[".showEditInPopup"] = false;

$tdatainventorymaster[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainventorymaster[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainventorymaster[".fieldsForRegister"] = array();

	$tdatainventorymaster[".listAjax"] = true;

	$tdatainventorymaster[".audit"] = false;

	$tdatainventorymaster[".locking"] = false;

$tdatainventorymaster[".edit"] = true;
$tdatainventorymaster[".afterEditAction"] = 1;
$tdatainventorymaster[".closePopupAfterEdit"] = 1;
$tdatainventorymaster[".afterEditActionDetTable"] = "";

$tdatainventorymaster[".add"] = true;
$tdatainventorymaster[".afterAddAction"] = 1;
$tdatainventorymaster[".closePopupAfterAdd"] = 1;
$tdatainventorymaster[".afterAddActionDetTable"] = "";

$tdatainventorymaster[".list"] = true;




$tdatainventorymaster[".view"] = true;

$tdatainventorymaster[".import"] = true;

$tdatainventorymaster[".exportTo"] = true;

$tdatainventorymaster[".printFriendly"] = true;

$tdatainventorymaster[".delete"] = true;

$tdatainventorymaster[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatainventorymaster[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatainventorymaster[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatainventorymaster[".searchSaving"] = false;
//

$tdatainventorymaster[".showSearchPanel"] = true;
		$tdatainventorymaster[".flexibleSearch"] = true;

$tdatainventorymaster[".isUseAjaxSuggest"] = true;

$tdatainventorymaster[".rowHighlite"] = true;



$tdatainventorymaster[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainventorymaster[".isUseTimeForSearch"] = false;



$tdatainventorymaster[".badgeColor"] = "7B7BC0";


$tdatainventorymaster[".allSearchFields"] = array();
$tdatainventorymaster[".filterFields"] = array();
$tdatainventorymaster[".requiredSearchFields"] = array();

$tdatainventorymaster[".allSearchFields"][] = "Id";
	$tdatainventorymaster[".allSearchFields"][] = "ItemID";
	$tdatainventorymaster[".allSearchFields"][] = "Brand";
	$tdatainventorymaster[".allSearchFields"][] = "Description";
	$tdatainventorymaster[".allSearchFields"][] = "Supplier";
	

$tdatainventorymaster[".googleLikeFields"] = array();
$tdatainventorymaster[".googleLikeFields"][] = "Id";
$tdatainventorymaster[".googleLikeFields"][] = "ItemID";
$tdatainventorymaster[".googleLikeFields"][] = "Brand";
$tdatainventorymaster[".googleLikeFields"][] = "Description";
$tdatainventorymaster[".googleLikeFields"][] = "Supplier";


$tdatainventorymaster[".advSearchFields"] = array();
$tdatainventorymaster[".advSearchFields"][] = "Id";
$tdatainventorymaster[".advSearchFields"][] = "ItemID";
$tdatainventorymaster[".advSearchFields"][] = "Brand";
$tdatainventorymaster[".advSearchFields"][] = "Description";
$tdatainventorymaster[".advSearchFields"][] = "Supplier";

$tdatainventorymaster[".tableType"] = "list";

$tdatainventorymaster[".printerPageOrientation"] = 0;
$tdatainventorymaster[".nPrinterPageScale"] = 100;

$tdatainventorymaster[".nPrinterSplitRecords"] = 40;

$tdatainventorymaster[".nPrinterPDFSplitRecords"] = 40;



$tdatainventorymaster[".geocodingEnabled"] = false;





$tdatainventorymaster[".listGridLayout"] = 3;


$tdatainventorymaster[".isResizeColumns"] = true;



// view page pdf
$tdatainventorymaster[".isViewPagePDF"] = true;
$tdatainventorymaster[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatainventorymaster[".isPrinterPagePDF"] = true;
$tdatainventorymaster[".nPrinterPagePDFScale"] = 100;


$tdatainventorymaster[".pageSize"] = 20;

$tdatainventorymaster[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainventorymaster[".strOrderBy"] = $tstrOrderBy;

$tdatainventorymaster[".orderindexes"] = array();

$tdatainventorymaster[".sqlHead"] = "SELECT Id,  	ItemID,  	Brand,  	Description,  	Supplier";
$tdatainventorymaster[".sqlFrom"] = "FROM inventorymaster";
$tdatainventorymaster[".sqlWhereExpr"] = "";
$tdatainventorymaster[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatainventorymaster[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainventorymaster[".arrGroupsPerPage"] = $arrGPP;

$tdatainventorymaster[".highlightSearchResults"] = true;

$tableKeysinventorymaster = array();
$tableKeysinventorymaster[] = "Id";
$tdatainventorymaster[".Keys"] = $tableKeysinventorymaster;

$tdatainventorymaster[".listFields"] = array();
$tdatainventorymaster[".listFields"][] = "Id";
$tdatainventorymaster[".listFields"][] = "ItemID";
$tdatainventorymaster[".listFields"][] = "Brand";
$tdatainventorymaster[".listFields"][] = "Description";
$tdatainventorymaster[".listFields"][] = "Supplier";

$tdatainventorymaster[".hideMobileList"] = array();


$tdatainventorymaster[".viewFields"] = array();
$tdatainventorymaster[".viewFields"][] = "Id";
$tdatainventorymaster[".viewFields"][] = "ItemID";
$tdatainventorymaster[".viewFields"][] = "Brand";
$tdatainventorymaster[".viewFields"][] = "Description";
$tdatainventorymaster[".viewFields"][] = "Supplier";

$tdatainventorymaster[".addFields"] = array();
$tdatainventorymaster[".addFields"][] = "ItemID";
$tdatainventorymaster[".addFields"][] = "Brand";
$tdatainventorymaster[".addFields"][] = "Description";
$tdatainventorymaster[".addFields"][] = "Supplier";

$tdatainventorymaster[".masterListFields"] = array();
$tdatainventorymaster[".masterListFields"][] = "Id";
$tdatainventorymaster[".masterListFields"][] = "ItemID";
$tdatainventorymaster[".masterListFields"][] = "Brand";
$tdatainventorymaster[".masterListFields"][] = "Description";
$tdatainventorymaster[".masterListFields"][] = "Supplier";

$tdatainventorymaster[".inlineAddFields"] = array();

$tdatainventorymaster[".editFields"] = array();
$tdatainventorymaster[".editFields"][] = "ItemID";
$tdatainventorymaster[".editFields"][] = "Brand";
$tdatainventorymaster[".editFields"][] = "Description";
$tdatainventorymaster[".editFields"][] = "Supplier";

$tdatainventorymaster[".inlineEditFields"] = array();

$tdatainventorymaster[".updateSelectedFields"] = array();
$tdatainventorymaster[".updateSelectedFields"][] = "ItemID";
$tdatainventorymaster[".updateSelectedFields"][] = "Brand";
$tdatainventorymaster[".updateSelectedFields"][] = "Description";
$tdatainventorymaster[".updateSelectedFields"][] = "Supplier";


$tdatainventorymaster[".exportFields"] = array();
$tdatainventorymaster[".exportFields"][] = "Id";
$tdatainventorymaster[".exportFields"][] = "ItemID";
$tdatainventorymaster[".exportFields"][] = "Brand";
$tdatainventorymaster[".exportFields"][] = "Description";
$tdatainventorymaster[".exportFields"][] = "Supplier";

$tdatainventorymaster[".importFields"] = array();
$tdatainventorymaster[".importFields"][] = "Id";
$tdatainventorymaster[".importFields"][] = "ItemID";
$tdatainventorymaster[".importFields"][] = "Brand";
$tdatainventorymaster[".importFields"][] = "Description";
$tdatainventorymaster[".importFields"][] = "Supplier";

$tdatainventorymaster[".printFields"] = array();
$tdatainventorymaster[".printFields"][] = "Id";
$tdatainventorymaster[".printFields"][] = "ItemID";
$tdatainventorymaster[".printFields"][] = "Brand";
$tdatainventorymaster[".printFields"][] = "Description";
$tdatainventorymaster[".printFields"][] = "Supplier";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster","Id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Id";

	
	
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




	$tdatainventorymaster["Id"] = $fdata;
//	ItemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ItemID";
	$fdata["GoodName"] = "ItemID";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster","ItemID");
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
	$fdata["FullName"] = "ItemID";

	
	
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatainventorymaster["ItemID"] = $fdata;
//	Brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Brand";
	$fdata["GoodName"] = "Brand";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster","Brand");
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




	$tdatainventorymaster["Brand"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster","Description");
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




	$tdatainventorymaster["Description"] = $fdata;
//	Supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Supplier";
	$fdata["GoodName"] = "Supplier";
	$fdata["ownerTable"] = "inventorymaster";
	$fdata["Label"] = GetFieldLabel("inventorymaster","Supplier");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "suppliermaster";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatainventorymaster["Supplier"] = $fdata;


$tables_data["inventorymaster"]=&$tdatainventorymaster;
$field_labels["inventorymaster"] = &$fieldLabelsinventorymaster;
$fieldToolTips["inventorymaster"] = &$fieldToolTipsinventorymaster;
$page_titles["inventorymaster"] = &$pageTitlesinventorymaster;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inventorymaster"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["inventorymaster"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inventorymaster()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  	ItemID,  	Brand,  	Description,  	Supplier";
$proto0["m_strFrom"] = "FROM inventorymaster";
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
	"m_srcTableName" => "inventorymaster"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "inventorymaster";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemID",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster"
));

$proto8["m_sql"] = "ItemID";
$proto8["m_srcTableName"] = "inventorymaster";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Brand",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster"
));

$proto10["m_sql"] = "Brand";
$proto10["m_srcTableName"] = "inventorymaster";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster"
));

$proto12["m_sql"] = "Description";
$proto12["m_srcTableName"] = "inventorymaster";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Supplier",
	"m_strTable" => "inventorymaster",
	"m_srcTableName" => "inventorymaster"
));

$proto14["m_sql"] = "Supplier";
$proto14["m_srcTableName"] = "inventorymaster";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "inventorymaster";
$proto17["m_srcTableName"] = "inventorymaster";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "Id";
$proto17["m_columns"][] = "ItemID";
$proto17["m_columns"][] = "Brand";
$proto17["m_columns"][] = "Description";
$proto17["m_columns"][] = "Supplier";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "inventorymaster";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "inventorymaster";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="inventorymaster";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inventorymaster = createSqlQuery_inventorymaster();


	
					
;

					

$tdatainventorymaster[".sqlquery"] = $queryData_inventorymaster;

$tableEvents["inventorymaster"] = new eventsBase;
$tdatainventorymaster[".hasEvents"] = false;

?>