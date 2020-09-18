<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasuppliermaster = array();
	$tdatasuppliermaster[".truncateText"] = true;
	$tdatasuppliermaster[".NumberOfChars"] = 80;
	$tdatasuppliermaster[".ShortName"] = "suppliermaster";
	$tdatasuppliermaster[".OwnerID"] = "";
	$tdatasuppliermaster[".OriginalTable"] = "suppliermaster";

//	field labels
$fieldLabelssuppliermaster = array();
$fieldToolTipssuppliermaster = array();
$pageTitlessuppliermaster = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssuppliermaster["English"] = array();
	$fieldToolTipssuppliermaster["English"] = array();
	$pageTitlessuppliermaster["English"] = array();
	$fieldLabelssuppliermaster["English"]["Id"] = "ID";
	$fieldToolTipssuppliermaster["English"]["Id"] = "";
	$fieldLabelssuppliermaster["English"]["SupplierName"] = "Supplier Name";
	$fieldToolTipssuppliermaster["English"]["SupplierName"] = "";
	$fieldLabelssuppliermaster["English"]["Address"] = "Address";
	$fieldToolTipssuppliermaster["English"]["Address"] = "";
	$fieldLabelssuppliermaster["English"]["ContactPerson"] = "Contact Person";
	$fieldToolTipssuppliermaster["English"]["ContactPerson"] = "";
	$fieldLabelssuppliermaster["English"]["Telephone"] = "Telephone";
	$fieldToolTipssuppliermaster["English"]["Telephone"] = "";
	$fieldLabelssuppliermaster["English"]["Remarks"] = "Remarks";
	$fieldToolTipssuppliermaster["English"]["Remarks"] = "";
	if (count($fieldToolTipssuppliermaster["English"]))
		$tdatasuppliermaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelssuppliermaster["Afrikaans"] = array();
	$fieldToolTipssuppliermaster["Afrikaans"] = array();
	$pageTitlessuppliermaster["Afrikaans"] = array();
	$fieldLabelssuppliermaster["Afrikaans"]["Id"] = "ID";
	$fieldToolTipssuppliermaster["Afrikaans"]["Id"] = "";
	$fieldLabelssuppliermaster["Afrikaans"]["SupplierName"] = "Verskaffernaam";
	$fieldToolTipssuppliermaster["Afrikaans"]["SupplierName"] = "";
	$fieldLabelssuppliermaster["Afrikaans"]["Address"] = "adres";
	$fieldToolTipssuppliermaster["Afrikaans"]["Address"] = "";
	$fieldLabelssuppliermaster["Afrikaans"]["ContactPerson"] = "Kontak persoon";
	$fieldToolTipssuppliermaster["Afrikaans"]["ContactPerson"] = "";
	$fieldLabelssuppliermaster["Afrikaans"]["Telephone"] = "Telefoon";
	$fieldToolTipssuppliermaster["Afrikaans"]["Telephone"] = "";
	$fieldLabelssuppliermaster["Afrikaans"]["Remarks"] = "opmerkings";
	$fieldToolTipssuppliermaster["Afrikaans"]["Remarks"] = "";
	if (count($fieldToolTipssuppliermaster["Afrikaans"]))
		$tdatasuppliermaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelssuppliermaster["Arabic"] = array();
	$fieldToolTipssuppliermaster["Arabic"] = array();
	$pageTitlessuppliermaster["Arabic"] = array();
	$fieldLabelssuppliermaster["Arabic"]["Id"] = "???? ?????";
	$fieldToolTipssuppliermaster["Arabic"]["Id"] = "";
	$fieldLabelssuppliermaster["Arabic"]["SupplierName"] = "??? ??????";
	$fieldToolTipssuppliermaster["Arabic"]["SupplierName"] = "";
	$fieldLabelssuppliermaster["Arabic"]["Address"] = "?????";
	$fieldToolTipssuppliermaster["Arabic"]["Address"] = "";
	$fieldLabelssuppliermaster["Arabic"]["ContactPerson"] = "????? ???? ???? ??????? ??";
	$fieldToolTipssuppliermaster["Arabic"]["ContactPerson"] = "";
	$fieldLabelssuppliermaster["Arabic"]["Telephone"] = "????";
	$fieldToolTipssuppliermaster["Arabic"]["Telephone"] = "";
	$fieldLabelssuppliermaster["Arabic"]["Remarks"] = "???????";
	$fieldToolTipssuppliermaster["Arabic"]["Remarks"] = "";
	if (count($fieldToolTipssuppliermaster["Arabic"]))
		$tdatasuppliermaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelssuppliermaster["Chinese"] = array();
	$fieldToolTipssuppliermaster["Chinese"] = array();
	$pageTitlessuppliermaster["Chinese"] = array();
	$fieldLabelssuppliermaster["Chinese"]["Id"] = "ID";
	$fieldToolTipssuppliermaster["Chinese"]["Id"] = "";
	$fieldLabelssuppliermaster["Chinese"]["SupplierName"] = "?????";
	$fieldToolTipssuppliermaster["Chinese"]["SupplierName"] = "";
	$fieldLabelssuppliermaster["Chinese"]["Address"] = "??";
	$fieldToolTipssuppliermaster["Chinese"]["Address"] = "";
	$fieldLabelssuppliermaster["Chinese"]["ContactPerson"] = "???";
	$fieldToolTipssuppliermaster["Chinese"]["ContactPerson"] = "";
	$fieldLabelssuppliermaster["Chinese"]["Telephone"] = "??";
	$fieldToolTipssuppliermaster["Chinese"]["Telephone"] = "";
	$fieldLabelssuppliermaster["Chinese"]["Remarks"] = "??";
	$fieldToolTipssuppliermaster["Chinese"]["Remarks"] = "";
	if (count($fieldToolTipssuppliermaster["Chinese"]))
		$tdatasuppliermaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelssuppliermaster["French"] = array();
	$fieldToolTipssuppliermaster["French"] = array();
	$pageTitlessuppliermaster["French"] = array();
	$fieldLabelssuppliermaster["French"]["Id"] = "ID";
	$fieldToolTipssuppliermaster["French"]["Id"] = "";
	$fieldLabelssuppliermaster["French"]["SupplierName"] = "Nom du fournisseur";
	$fieldToolTipssuppliermaster["French"]["SupplierName"] = "";
	$fieldLabelssuppliermaster["French"]["Address"] = "Adresse";
	$fieldToolTipssuppliermaster["French"]["Address"] = "";
	$fieldLabelssuppliermaster["French"]["ContactPerson"] = "Contact";
	$fieldToolTipssuppliermaster["French"]["ContactPerson"] = "";
	$fieldLabelssuppliermaster["French"]["Telephone"] = "Téléphone";
	$fieldToolTipssuppliermaster["French"]["Telephone"] = "";
	$fieldLabelssuppliermaster["French"]["Remarks"] = "Remarques";
	$fieldToolTipssuppliermaster["French"]["Remarks"] = "";
	if (count($fieldToolTipssuppliermaster["French"]))
		$tdatasuppliermaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelssuppliermaster["German"] = array();
	$fieldToolTipssuppliermaster["German"] = array();
	$pageTitlessuppliermaster["German"] = array();
	$fieldLabelssuppliermaster["German"]["Id"] = "ICH WÜRDE";
	$fieldToolTipssuppliermaster["German"]["Id"] = "";
	$fieldLabelssuppliermaster["German"]["SupplierName"] = "Name des Anbieters";
	$fieldToolTipssuppliermaster["German"]["SupplierName"] = "";
	$fieldLabelssuppliermaster["German"]["Address"] = "Adresse";
	$fieldToolTipssuppliermaster["German"]["Address"] = "";
	$fieldLabelssuppliermaster["German"]["ContactPerson"] = "Gesprächspartner";
	$fieldToolTipssuppliermaster["German"]["ContactPerson"] = "";
	$fieldLabelssuppliermaster["German"]["Telephone"] = "Telefon";
	$fieldToolTipssuppliermaster["German"]["Telephone"] = "";
	$fieldLabelssuppliermaster["German"]["Remarks"] = "Bemerkungen";
	$fieldToolTipssuppliermaster["German"]["Remarks"] = "";
	if (count($fieldToolTipssuppliermaster["German"]))
		$tdatasuppliermaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelssuppliermaster["Italian"] = array();
	$fieldToolTipssuppliermaster["Italian"] = array();
	$pageTitlessuppliermaster["Italian"] = array();
	$fieldLabelssuppliermaster["Italian"]["Id"] = "ID";
	$fieldToolTipssuppliermaster["Italian"]["Id"] = "";
	$fieldLabelssuppliermaster["Italian"]["SupplierName"] = "Nome del fornitore";
	$fieldToolTipssuppliermaster["Italian"]["SupplierName"] = "";
	$fieldLabelssuppliermaster["Italian"]["Address"] = "Indirizzo";
	$fieldToolTipssuppliermaster["Italian"]["Address"] = "";
	$fieldLabelssuppliermaster["Italian"]["ContactPerson"] = "Referente";
	$fieldToolTipssuppliermaster["Italian"]["ContactPerson"] = "";
	$fieldLabelssuppliermaster["Italian"]["Telephone"] = "Telefono";
	$fieldToolTipssuppliermaster["Italian"]["Telephone"] = "";
	$fieldLabelssuppliermaster["Italian"]["Remarks"] = "Osservazioni";
	$fieldToolTipssuppliermaster["Italian"]["Remarks"] = "";
	if (count($fieldToolTipssuppliermaster["Italian"]))
		$tdatasuppliermaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelssuppliermaster["Russian"] = array();
	$fieldToolTipssuppliermaster["Russian"] = array();
	$pageTitlessuppliermaster["Russian"] = array();
	$fieldLabelssuppliermaster["Russian"]["Id"] = "? ??";
	$fieldToolTipssuppliermaster["Russian"]["Id"] = "";
	$fieldLabelssuppliermaster["Russian"]["SupplierName"] = "???????????? ??????????";
	$fieldToolTipssuppliermaster["Russian"]["SupplierName"] = "";
	$fieldLabelssuppliermaster["Russian"]["Address"] = "?????";
	$fieldToolTipssuppliermaster["Russian"]["Address"] = "";
	$fieldLabelssuppliermaster["Russian"]["ContactPerson"] = "?????????? ????";
	$fieldToolTipssuppliermaster["Russian"]["ContactPerson"] = "";
	$fieldLabelssuppliermaster["Russian"]["Telephone"] = "???????";
	$fieldToolTipssuppliermaster["Russian"]["Telephone"] = "";
	$fieldLabelssuppliermaster["Russian"]["Remarks"] = "?????????";
	$fieldToolTipssuppliermaster["Russian"]["Remarks"] = "";
	if (count($fieldToolTipssuppliermaster["Russian"]))
		$tdatasuppliermaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssuppliermaster["Spanish"] = array();
	$fieldToolTipssuppliermaster["Spanish"] = array();
	$pageTitlessuppliermaster["Spanish"] = array();
	$fieldLabelssuppliermaster["Spanish"]["Id"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipssuppliermaster["Spanish"]["Id"] = "";
	$fieldLabelssuppliermaster["Spanish"]["SupplierName"] = "Nombre del proveedor";
	$fieldToolTipssuppliermaster["Spanish"]["SupplierName"] = "";
	$fieldLabelssuppliermaster["Spanish"]["Address"] = "Dirección";
	$fieldToolTipssuppliermaster["Spanish"]["Address"] = "";
	$fieldLabelssuppliermaster["Spanish"]["ContactPerson"] = "Persona de contacto";
	$fieldToolTipssuppliermaster["Spanish"]["ContactPerson"] = "";
	$fieldLabelssuppliermaster["Spanish"]["Telephone"] = "Teléfono";
	$fieldToolTipssuppliermaster["Spanish"]["Telephone"] = "";
	$fieldLabelssuppliermaster["Spanish"]["Remarks"] = "Observaciones";
	$fieldToolTipssuppliermaster["Spanish"]["Remarks"] = "";
	if (count($fieldToolTipssuppliermaster["Spanish"]))
		$tdatasuppliermaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssuppliermaster[""] = array();
	$fieldToolTipssuppliermaster[""] = array();
	$pageTitlessuppliermaster[""] = array();
	if (count($fieldToolTipssuppliermaster[""]))
		$tdatasuppliermaster[".isUseToolTips"] = true;
}


	$tdatasuppliermaster[".NCSearch"] = true;



$tdatasuppliermaster[".shortTableName"] = "suppliermaster";
$tdatasuppliermaster[".nSecOptions"] = 0;
$tdatasuppliermaster[".recsPerRowPrint"] = 1;
$tdatasuppliermaster[".mainTableOwnerID"] = "";
$tdatasuppliermaster[".moveNext"] = 1;
$tdatasuppliermaster[".entityType"] = 0;

$tdatasuppliermaster[".strOriginalTableName"] = "suppliermaster";

		 



$tdatasuppliermaster[".showAddInPopup"] = false;

$tdatasuppliermaster[".showEditInPopup"] = false;

$tdatasuppliermaster[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasuppliermaster[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasuppliermaster[".fieldsForRegister"] = array();

	$tdatasuppliermaster[".listAjax"] = true;

	$tdatasuppliermaster[".audit"] = false;

	$tdatasuppliermaster[".locking"] = false;

$tdatasuppliermaster[".edit"] = true;
$tdatasuppliermaster[".afterEditAction"] = 1;
$tdatasuppliermaster[".closePopupAfterEdit"] = 1;
$tdatasuppliermaster[".afterEditActionDetTable"] = "";

$tdatasuppliermaster[".add"] = true;
$tdatasuppliermaster[".afterAddAction"] = 1;
$tdatasuppliermaster[".closePopupAfterAdd"] = 1;
$tdatasuppliermaster[".afterAddActionDetTable"] = "";

$tdatasuppliermaster[".list"] = true;




$tdatasuppliermaster[".view"] = true;

$tdatasuppliermaster[".import"] = true;

$tdatasuppliermaster[".exportTo"] = true;

$tdatasuppliermaster[".printFriendly"] = true;

$tdatasuppliermaster[".delete"] = true;

$tdatasuppliermaster[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasuppliermaster[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatasuppliermaster[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatasuppliermaster[".searchSaving"] = false;
//

$tdatasuppliermaster[".showSearchPanel"] = true;
		$tdatasuppliermaster[".flexibleSearch"] = true;

$tdatasuppliermaster[".isUseAjaxSuggest"] = true;

$tdatasuppliermaster[".rowHighlite"] = true;



$tdatasuppliermaster[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasuppliermaster[".isUseTimeForSearch"] = false;





$tdatasuppliermaster[".allSearchFields"] = array();
$tdatasuppliermaster[".filterFields"] = array();
$tdatasuppliermaster[".requiredSearchFields"] = array();

$tdatasuppliermaster[".allSearchFields"][] = "Id";
	$tdatasuppliermaster[".allSearchFields"][] = "SupplierName";
	$tdatasuppliermaster[".allSearchFields"][] = "Address";
	$tdatasuppliermaster[".allSearchFields"][] = "ContactPerson";
	$tdatasuppliermaster[".allSearchFields"][] = "Telephone";
	$tdatasuppliermaster[".allSearchFields"][] = "Remarks";
	

$tdatasuppliermaster[".googleLikeFields"] = array();
$tdatasuppliermaster[".googleLikeFields"][] = "Id";
$tdatasuppliermaster[".googleLikeFields"][] = "SupplierName";
$tdatasuppliermaster[".googleLikeFields"][] = "Address";
$tdatasuppliermaster[".googleLikeFields"][] = "ContactPerson";
$tdatasuppliermaster[".googleLikeFields"][] = "Telephone";
$tdatasuppliermaster[".googleLikeFields"][] = "Remarks";


$tdatasuppliermaster[".advSearchFields"] = array();
$tdatasuppliermaster[".advSearchFields"][] = "Id";
$tdatasuppliermaster[".advSearchFields"][] = "SupplierName";
$tdatasuppliermaster[".advSearchFields"][] = "Address";
$tdatasuppliermaster[".advSearchFields"][] = "ContactPerson";
$tdatasuppliermaster[".advSearchFields"][] = "Telephone";
$tdatasuppliermaster[".advSearchFields"][] = "Remarks";

$tdatasuppliermaster[".tableType"] = "list";

$tdatasuppliermaster[".printerPageOrientation"] = 0;
$tdatasuppliermaster[".nPrinterPageScale"] = 100;

$tdatasuppliermaster[".nPrinterSplitRecords"] = 40;

$tdatasuppliermaster[".nPrinterPDFSplitRecords"] = 40;



$tdatasuppliermaster[".geocodingEnabled"] = false;





$tdatasuppliermaster[".listGridLayout"] = 3;


$tdatasuppliermaster[".isResizeColumns"] = true;



// view page pdf
$tdatasuppliermaster[".isViewPagePDF"] = true;
$tdatasuppliermaster[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatasuppliermaster[".isPrinterPagePDF"] = true;
$tdatasuppliermaster[".nPrinterPagePDFScale"] = 100;


$tdatasuppliermaster[".pageSize"] = 20;

$tdatasuppliermaster[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasuppliermaster[".strOrderBy"] = $tstrOrderBy;

$tdatasuppliermaster[".orderindexes"] = array();

$tdatasuppliermaster[".sqlHead"] = "SELECT Id,  	SupplierName,  	Address,  	ContactPerson,  	Telephone,  	Remarks";
$tdatasuppliermaster[".sqlFrom"] = "FROM suppliermaster";
$tdatasuppliermaster[".sqlWhereExpr"] = "";
$tdatasuppliermaster[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatasuppliermaster[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasuppliermaster[".arrGroupsPerPage"] = $arrGPP;

$tdatasuppliermaster[".highlightSearchResults"] = true;

$tableKeyssuppliermaster = array();
$tableKeyssuppliermaster[] = "Id";
$tdatasuppliermaster[".Keys"] = $tableKeyssuppliermaster;

$tdatasuppliermaster[".listFields"] = array();
$tdatasuppliermaster[".listFields"][] = "Id";
$tdatasuppliermaster[".listFields"][] = "SupplierName";
$tdatasuppliermaster[".listFields"][] = "Address";
$tdatasuppliermaster[".listFields"][] = "ContactPerson";
$tdatasuppliermaster[".listFields"][] = "Telephone";
$tdatasuppliermaster[".listFields"][] = "Remarks";

$tdatasuppliermaster[".hideMobileList"] = array();


$tdatasuppliermaster[".viewFields"] = array();
$tdatasuppliermaster[".viewFields"][] = "Id";
$tdatasuppliermaster[".viewFields"][] = "SupplierName";
$tdatasuppliermaster[".viewFields"][] = "Address";
$tdatasuppliermaster[".viewFields"][] = "ContactPerson";
$tdatasuppliermaster[".viewFields"][] = "Telephone";
$tdatasuppliermaster[".viewFields"][] = "Remarks";

$tdatasuppliermaster[".addFields"] = array();
$tdatasuppliermaster[".addFields"][] = "SupplierName";
$tdatasuppliermaster[".addFields"][] = "Address";
$tdatasuppliermaster[".addFields"][] = "ContactPerson";
$tdatasuppliermaster[".addFields"][] = "Telephone";
$tdatasuppliermaster[".addFields"][] = "Remarks";

$tdatasuppliermaster[".masterListFields"] = array();
$tdatasuppliermaster[".masterListFields"][] = "Id";
$tdatasuppliermaster[".masterListFields"][] = "SupplierName";
$tdatasuppliermaster[".masterListFields"][] = "Address";
$tdatasuppliermaster[".masterListFields"][] = "ContactPerson";
$tdatasuppliermaster[".masterListFields"][] = "Telephone";
$tdatasuppliermaster[".masterListFields"][] = "Remarks";

$tdatasuppliermaster[".inlineAddFields"] = array();

$tdatasuppliermaster[".editFields"] = array();
$tdatasuppliermaster[".editFields"][] = "SupplierName";
$tdatasuppliermaster[".editFields"][] = "Address";
$tdatasuppliermaster[".editFields"][] = "ContactPerson";
$tdatasuppliermaster[".editFields"][] = "Telephone";
$tdatasuppliermaster[".editFields"][] = "Remarks";

$tdatasuppliermaster[".inlineEditFields"] = array();

$tdatasuppliermaster[".updateSelectedFields"] = array();
$tdatasuppliermaster[".updateSelectedFields"][] = "SupplierName";
$tdatasuppliermaster[".updateSelectedFields"][] = "Address";
$tdatasuppliermaster[".updateSelectedFields"][] = "ContactPerson";
$tdatasuppliermaster[".updateSelectedFields"][] = "Telephone";
$tdatasuppliermaster[".updateSelectedFields"][] = "Remarks";


$tdatasuppliermaster[".exportFields"] = array();
$tdatasuppliermaster[".exportFields"][] = "Id";
$tdatasuppliermaster[".exportFields"][] = "SupplierName";
$tdatasuppliermaster[".exportFields"][] = "Address";
$tdatasuppliermaster[".exportFields"][] = "ContactPerson";
$tdatasuppliermaster[".exportFields"][] = "Telephone";
$tdatasuppliermaster[".exportFields"][] = "Remarks";

$tdatasuppliermaster[".importFields"] = array();
$tdatasuppliermaster[".importFields"][] = "Id";
$tdatasuppliermaster[".importFields"][] = "SupplierName";
$tdatasuppliermaster[".importFields"][] = "Address";
$tdatasuppliermaster[".importFields"][] = "ContactPerson";
$tdatasuppliermaster[".importFields"][] = "Telephone";
$tdatasuppliermaster[".importFields"][] = "Remarks";

$tdatasuppliermaster[".printFields"] = array();
$tdatasuppliermaster[".printFields"][] = "Id";
$tdatasuppliermaster[".printFields"][] = "SupplierName";
$tdatasuppliermaster[".printFields"][] = "Address";
$tdatasuppliermaster[".printFields"][] = "ContactPerson";
$tdatasuppliermaster[".printFields"][] = "Telephone";
$tdatasuppliermaster[".printFields"][] = "Remarks";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "suppliermaster";
	$fdata["Label"] = GetFieldLabel("suppliermaster","Id");
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




	$tdatasuppliermaster["Id"] = $fdata;
//	SupplierName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SupplierName";
	$fdata["GoodName"] = "SupplierName";
	$fdata["ownerTable"] = "suppliermaster";
	$fdata["Label"] = GetFieldLabel("suppliermaster","SupplierName");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SupplierName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SupplierName";

	
	
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




	$tdatasuppliermaster["SupplierName"] = $fdata;
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "suppliermaster";
	$fdata["Label"] = GetFieldLabel("suppliermaster","Address");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Address";

	
	
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




	$tdatasuppliermaster["Address"] = $fdata;
//	ContactPerson
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ContactPerson";
	$fdata["GoodName"] = "ContactPerson";
	$fdata["ownerTable"] = "suppliermaster";
	$fdata["Label"] = GetFieldLabel("suppliermaster","ContactPerson");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ContactPerson";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ContactPerson";

	
	
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




	$tdatasuppliermaster["ContactPerson"] = $fdata;
//	Telephone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Telephone";
	$fdata["GoodName"] = "Telephone";
	$fdata["ownerTable"] = "suppliermaster";
	$fdata["Label"] = GetFieldLabel("suppliermaster","Telephone");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Telephone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Telephone";

	
	
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




	$tdatasuppliermaster["Telephone"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "suppliermaster";
	$fdata["Label"] = GetFieldLabel("suppliermaster","Remarks");
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




	$tdatasuppliermaster["Remarks"] = $fdata;


$tables_data["suppliermaster"]=&$tdatasuppliermaster;
$field_labels["suppliermaster"] = &$fieldLabelssuppliermaster;
$fieldToolTips["suppliermaster"] = &$fieldToolTipssuppliermaster;
$page_titles["suppliermaster"] = &$pageTitlessuppliermaster;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["suppliermaster"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["suppliermaster"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_suppliermaster()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  	SupplierName,  	Address,  	ContactPerson,  	Telephone,  	Remarks";
$proto0["m_strFrom"] = "FROM suppliermaster";
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
	"m_strTable" => "suppliermaster",
	"m_srcTableName" => "suppliermaster"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "suppliermaster";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SupplierName",
	"m_strTable" => "suppliermaster",
	"m_srcTableName" => "suppliermaster"
));

$proto8["m_sql"] = "SupplierName";
$proto8["m_srcTableName"] = "suppliermaster";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Address",
	"m_strTable" => "suppliermaster",
	"m_srcTableName" => "suppliermaster"
));

$proto10["m_sql"] = "Address";
$proto10["m_srcTableName"] = "suppliermaster";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ContactPerson",
	"m_strTable" => "suppliermaster",
	"m_srcTableName" => "suppliermaster"
));

$proto12["m_sql"] = "ContactPerson";
$proto12["m_srcTableName"] = "suppliermaster";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Telephone",
	"m_strTable" => "suppliermaster",
	"m_srcTableName" => "suppliermaster"
));

$proto14["m_sql"] = "Telephone";
$proto14["m_srcTableName"] = "suppliermaster";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "suppliermaster",
	"m_srcTableName" => "suppliermaster"
));

$proto16["m_sql"] = "Remarks";
$proto16["m_srcTableName"] = "suppliermaster";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "suppliermaster";
$proto19["m_srcTableName"] = "suppliermaster";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "Id";
$proto19["m_columns"][] = "SupplierName";
$proto19["m_columns"][] = "Address";
$proto19["m_columns"][] = "ContactPerson";
$proto19["m_columns"][] = "Telephone";
$proto19["m_columns"][] = "Remarks";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "suppliermaster";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "suppliermaster";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="suppliermaster";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_suppliermaster = createSqlQuery_suppliermaster();


	
					
;

						

$tdatasuppliermaster[".sqlquery"] = $queryData_suppliermaster;

$tableEvents["suppliermaster"] = new eventsBase;
$tdatasuppliermaster[".hasEvents"] = false;

?>