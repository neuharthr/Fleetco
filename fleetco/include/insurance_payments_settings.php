<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainsurance_payments = array();
	$tdatainsurance_payments[".truncateText"] = true;
	$tdatainsurance_payments[".NumberOfChars"] = 80;
	$tdatainsurance_payments[".ShortName"] = "insurance_payments";
	$tdatainsurance_payments[".OwnerID"] = "";
	$tdatainsurance_payments[".OriginalTable"] = "insurance-payments";

//	field labels
$fieldLabelsinsurance_payments = array();
$fieldToolTipsinsurance_payments = array();
$pageTitlesinsurance_payments = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinsurance_payments["English"] = array();
	$fieldToolTipsinsurance_payments["English"] = array();
	$pageTitlesinsurance_payments["English"] = array();
	$fieldLabelsinsurance_payments["English"]["Id"] = "ID";
	$fieldToolTipsinsurance_payments["English"]["Id"] = "";
	$fieldLabelsinsurance_payments["English"]["SysDate"] = "Sys. Date";
	$fieldToolTipsinsurance_payments["English"]["SysDate"] = "";
	$fieldLabelsinsurance_payments["English"]["Fleet"] = "Fleet";
	$fieldToolTipsinsurance_payments["English"]["Fleet"] = "";
	$fieldLabelsinsurance_payments["English"]["Type"] = "Type";
	$fieldToolTipsinsurance_payments["English"]["Type"] = "";
	$fieldLabelsinsurance_payments["English"]["VehicleNo"] = "Veh. No";
	$fieldToolTipsinsurance_payments["English"]["VehicleNo"] = "";
	$fieldLabelsinsurance_payments["English"]["Premium"] = "Premium";
	$fieldToolTipsinsurance_payments["English"]["Premium"] = "";
	$fieldLabelsinsurance_payments["English"]["Cost"] = "Cost";
	$fieldToolTipsinsurance_payments["English"]["Cost"] = "Cost without Tax";
	$fieldLabelsinsurance_payments["English"]["PaymentVoucher"] = "Pay. Ref";
	$fieldToolTipsinsurance_payments["English"]["PaymentVoucher"] = "Payment Voucher No";
	$fieldLabelsinsurance_payments["English"]["EnteredBy"] = "Entered By";
	$fieldToolTipsinsurance_payments["English"]["EnteredBy"] = "";
	$fieldLabelsinsurance_payments["English"]["RenewalDueDate"] = "Renewal";
	$fieldToolTipsinsurance_payments["English"]["RenewalDueDate"] = "";
	$fieldLabelsinsurance_payments["English"]["DateofPayment"] = "Pay. Date";
	$fieldToolTipsinsurance_payments["English"]["DateofPayment"] = "Payment Date";
	$fieldLabelsinsurance_payments["English"]["Insurer"] = "Insurer";
	$fieldToolTipsinsurance_payments["English"]["Insurer"] = "";
	$fieldLabelsinsurance_payments["English"]["Date"] = "Date";
	$fieldToolTipsinsurance_payments["English"]["Date"] = "";
	$fieldLabelsinsurance_payments["English"]["From"] = "From";
	$fieldToolTipsinsurance_payments["English"]["From"] = "Starting date of period covered";
	$fieldLabelsinsurance_payments["English"]["To"] = "To";
	$fieldToolTipsinsurance_payments["English"]["To"] = "Last date of period covered";
	if (count($fieldToolTipsinsurance_payments["English"]))
		$tdatainsurance_payments[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinsurance_payments[""] = array();
	$fieldToolTipsinsurance_payments[""] = array();
	$pageTitlesinsurance_payments[""] = array();
	if (count($fieldToolTipsinsurance_payments[""]))
		$tdatainsurance_payments[".isUseToolTips"] = true;
}


	$tdatainsurance_payments[".NCSearch"] = true;



$tdatainsurance_payments[".shortTableName"] = "insurance_payments";
$tdatainsurance_payments[".nSecOptions"] = 0;
$tdatainsurance_payments[".recsPerRowPrint"] = 1;
$tdatainsurance_payments[".mainTableOwnerID"] = "";
$tdatainsurance_payments[".moveNext"] = 1;
$tdatainsurance_payments[".entityType"] = 0;

$tdatainsurance_payments[".strOriginalTableName"] = "insurance-payments";

		 



$tdatainsurance_payments[".showAddInPopup"] = false;

$tdatainsurance_payments[".showEditInPopup"] = false;

$tdatainsurance_payments[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainsurance_payments[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainsurance_payments[".fieldsForRegister"] = array();

	$tdatainsurance_payments[".listAjax"] = true;

	$tdatainsurance_payments[".audit"] = false;

	$tdatainsurance_payments[".locking"] = false;

$tdatainsurance_payments[".edit"] = true;
$tdatainsurance_payments[".afterEditAction"] = 1;
$tdatainsurance_payments[".closePopupAfterEdit"] = 1;
$tdatainsurance_payments[".afterEditActionDetTable"] = "";

$tdatainsurance_payments[".add"] = true;
$tdatainsurance_payments[".afterAddAction"] = 1;
$tdatainsurance_payments[".closePopupAfterAdd"] = 1;
$tdatainsurance_payments[".afterAddActionDetTable"] = "";

$tdatainsurance_payments[".list"] = true;

$tdatainsurance_payments[".view"] = true;

$tdatainsurance_payments[".import"] = true;

$tdatainsurance_payments[".exportTo"] = true;

$tdatainsurance_payments[".printFriendly"] = true;

$tdatainsurance_payments[".delete"] = true;

$tdatainsurance_payments[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatainsurance_payments[".searchSaving"] = false;
//

$tdatainsurance_payments[".showSearchPanel"] = true;
		$tdatainsurance_payments[".flexibleSearch"] = true;

$tdatainsurance_payments[".isUseAjaxSuggest"] = true;

$tdatainsurance_payments[".rowHighlite"] = true;



$tdatainsurance_payments[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainsurance_payments[".isUseTimeForSearch"] = false;





$tdatainsurance_payments[".allSearchFields"] = array();
$tdatainsurance_payments[".filterFields"] = array();
$tdatainsurance_payments[".requiredSearchFields"] = array();

$tdatainsurance_payments[".allSearchFields"][] = "Fleet";
	$tdatainsurance_payments[".allSearchFields"][] = "VehicleNo";
	$tdatainsurance_payments[".allSearchFields"][] = "Type";
	$tdatainsurance_payments[".allSearchFields"][] = "RenewalDueDate";
	$tdatainsurance_payments[".allSearchFields"][] = "Insurer";
	$tdatainsurance_payments[".allSearchFields"][] = "Premium";
	$tdatainsurance_payments[".allSearchFields"][] = "From";
	$tdatainsurance_payments[".allSearchFields"][] = "To";
	$tdatainsurance_payments[".allSearchFields"][] = "DateofPayment";
	$tdatainsurance_payments[".allSearchFields"][] = "PaymentVoucher";
	$tdatainsurance_payments[".allSearchFields"][] = "SysDate";
	$tdatainsurance_payments[".allSearchFields"][] = "EnteredBy";
	

$tdatainsurance_payments[".googleLikeFields"] = array();
$tdatainsurance_payments[".googleLikeFields"][] = "Id";
$tdatainsurance_payments[".googleLikeFields"][] = "SysDate";
$tdatainsurance_payments[".googleLikeFields"][] = "Fleet";
$tdatainsurance_payments[".googleLikeFields"][] = "Type";
$tdatainsurance_payments[".googleLikeFields"][] = "VehicleNo";
$tdatainsurance_payments[".googleLikeFields"][] = "RenewalDueDate";
$tdatainsurance_payments[".googleLikeFields"][] = "Premium";
$tdatainsurance_payments[".googleLikeFields"][] = "Cost";
$tdatainsurance_payments[".googleLikeFields"][] = "PaymentVoucher";
$tdatainsurance_payments[".googleLikeFields"][] = "EnteredBy";
$tdatainsurance_payments[".googleLikeFields"][] = "DateofPayment";
$tdatainsurance_payments[".googleLikeFields"][] = "Insurer";
$tdatainsurance_payments[".googleLikeFields"][] = "Date";
$tdatainsurance_payments[".googleLikeFields"][] = "From";
$tdatainsurance_payments[".googleLikeFields"][] = "To";


$tdatainsurance_payments[".advSearchFields"] = array();
$tdatainsurance_payments[".advSearchFields"][] = "Fleet";
$tdatainsurance_payments[".advSearchFields"][] = "VehicleNo";
$tdatainsurance_payments[".advSearchFields"][] = "Type";
$tdatainsurance_payments[".advSearchFields"][] = "RenewalDueDate";
$tdatainsurance_payments[".advSearchFields"][] = "Insurer";
$tdatainsurance_payments[".advSearchFields"][] = "Premium";
$tdatainsurance_payments[".advSearchFields"][] = "From";
$tdatainsurance_payments[".advSearchFields"][] = "To";
$tdatainsurance_payments[".advSearchFields"][] = "DateofPayment";
$tdatainsurance_payments[".advSearchFields"][] = "PaymentVoucher";
$tdatainsurance_payments[".advSearchFields"][] = "SysDate";
$tdatainsurance_payments[".advSearchFields"][] = "EnteredBy";

$tdatainsurance_payments[".tableType"] = "list";

$tdatainsurance_payments[".printerPageOrientation"] = 0;
$tdatainsurance_payments[".nPrinterPageScale"] = 100;

$tdatainsurance_payments[".nPrinterSplitRecords"] = 40;

$tdatainsurance_payments[".nPrinterPDFSplitRecords"] = 40;



$tdatainsurance_payments[".geocodingEnabled"] = false;





$tdatainsurance_payments[".listGridLayout"] = 3;





// view page pdf
$tdatainsurance_payments[".isViewPagePDF"] = true;
$tdatainsurance_payments[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatainsurance_payments[".isPrinterPagePDF"] = true;
$tdatainsurance_payments[".nPrinterPagePDFScale"] = 100;


$tdatainsurance_payments[".pageSize"] = 20;

$tdatainsurance_payments[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainsurance_payments[".strOrderBy"] = $tstrOrderBy;

$tdatainsurance_payments[".orderindexes"] = array();

$tdatainsurance_payments[".sqlHead"] = "SELECT Id,  	`SysDate`,  	Fleet,  	`Type`,  	VehicleNo,  	RenewalDueDate,  	Premium,  	Cost,  	PaymentVoucher,  	EnteredBy,  	DateofPayment,  	Insurer,  	`Date`,  	`From`,  	`To`";
$tdatainsurance_payments[".sqlFrom"] = "FROM `insurance-payments`";
$tdatainsurance_payments[".sqlWhereExpr"] = "";
$tdatainsurance_payments[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatainsurance_payments[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainsurance_payments[".arrGroupsPerPage"] = $arrGPP;

$tdatainsurance_payments[".highlightSearchResults"] = true;

$tableKeysinsurance_payments = array();
$tableKeysinsurance_payments[] = "Id";
$tdatainsurance_payments[".Keys"] = $tableKeysinsurance_payments;

$tdatainsurance_payments[".listFields"] = array();
$tdatainsurance_payments[".listFields"][] = "Fleet";
$tdatainsurance_payments[".listFields"][] = "Id";
$tdatainsurance_payments[".listFields"][] = "VehicleNo";
$tdatainsurance_payments[".listFields"][] = "Type";
$tdatainsurance_payments[".listFields"][] = "RenewalDueDate";
$tdatainsurance_payments[".listFields"][] = "Insurer";
$tdatainsurance_payments[".listFields"][] = "Premium";
$tdatainsurance_payments[".listFields"][] = "From";
$tdatainsurance_payments[".listFields"][] = "To";
$tdatainsurance_payments[".listFields"][] = "DateofPayment";
$tdatainsurance_payments[".listFields"][] = "PaymentVoucher";
$tdatainsurance_payments[".listFields"][] = "EnteredBy";

$tdatainsurance_payments[".hideMobileList"] = array();


$tdatainsurance_payments[".viewFields"] = array();
$tdatainsurance_payments[".viewFields"][] = "Fleet";
$tdatainsurance_payments[".viewFields"][] = "Id";
$tdatainsurance_payments[".viewFields"][] = "VehicleNo";
$tdatainsurance_payments[".viewFields"][] = "Type";
$tdatainsurance_payments[".viewFields"][] = "RenewalDueDate";
$tdatainsurance_payments[".viewFields"][] = "Insurer";
$tdatainsurance_payments[".viewFields"][] = "Premium";
$tdatainsurance_payments[".viewFields"][] = "From";
$tdatainsurance_payments[".viewFields"][] = "To";
$tdatainsurance_payments[".viewFields"][] = "DateofPayment";
$tdatainsurance_payments[".viewFields"][] = "PaymentVoucher";
$tdatainsurance_payments[".viewFields"][] = "SysDate";
$tdatainsurance_payments[".viewFields"][] = "EnteredBy";

$tdatainsurance_payments[".addFields"] = array();
$tdatainsurance_payments[".addFields"][] = "Fleet";
$tdatainsurance_payments[".addFields"][] = "VehicleNo";
$tdatainsurance_payments[".addFields"][] = "Type";
$tdatainsurance_payments[".addFields"][] = "RenewalDueDate";
$tdatainsurance_payments[".addFields"][] = "Insurer";
$tdatainsurance_payments[".addFields"][] = "Premium";
$tdatainsurance_payments[".addFields"][] = "From";
$tdatainsurance_payments[".addFields"][] = "To";
$tdatainsurance_payments[".addFields"][] = "DateofPayment";
$tdatainsurance_payments[".addFields"][] = "PaymentVoucher";
$tdatainsurance_payments[".addFields"][] = "SysDate";
$tdatainsurance_payments[".addFields"][] = "EnteredBy";

$tdatainsurance_payments[".masterListFields"] = array();
$tdatainsurance_payments[".masterListFields"][] = "Fleet";
$tdatainsurance_payments[".masterListFields"][] = "Id";
$tdatainsurance_payments[".masterListFields"][] = "VehicleNo";
$tdatainsurance_payments[".masterListFields"][] = "Type";
$tdatainsurance_payments[".masterListFields"][] = "Cost";
$tdatainsurance_payments[".masterListFields"][] = "RenewalDueDate";
$tdatainsurance_payments[".masterListFields"][] = "Insurer";
$tdatainsurance_payments[".masterListFields"][] = "Date";
$tdatainsurance_payments[".masterListFields"][] = "Premium";
$tdatainsurance_payments[".masterListFields"][] = "From";
$tdatainsurance_payments[".masterListFields"][] = "To";
$tdatainsurance_payments[".masterListFields"][] = "DateofPayment";
$tdatainsurance_payments[".masterListFields"][] = "PaymentVoucher";
$tdatainsurance_payments[".masterListFields"][] = "SysDate";
$tdatainsurance_payments[".masterListFields"][] = "EnteredBy";

$tdatainsurance_payments[".inlineAddFields"] = array();

$tdatainsurance_payments[".editFields"] = array();
$tdatainsurance_payments[".editFields"][] = "Fleet";
$tdatainsurance_payments[".editFields"][] = "VehicleNo";
$tdatainsurance_payments[".editFields"][] = "Type";
$tdatainsurance_payments[".editFields"][] = "RenewalDueDate";
$tdatainsurance_payments[".editFields"][] = "Insurer";
$tdatainsurance_payments[".editFields"][] = "Premium";
$tdatainsurance_payments[".editFields"][] = "From";
$tdatainsurance_payments[".editFields"][] = "To";
$tdatainsurance_payments[".editFields"][] = "DateofPayment";
$tdatainsurance_payments[".editFields"][] = "PaymentVoucher";
$tdatainsurance_payments[".editFields"][] = "SysDate";
$tdatainsurance_payments[".editFields"][] = "EnteredBy";

$tdatainsurance_payments[".inlineEditFields"] = array();

$tdatainsurance_payments[".exportFields"] = array();
$tdatainsurance_payments[".exportFields"][] = "Fleet";
$tdatainsurance_payments[".exportFields"][] = "Id";
$tdatainsurance_payments[".exportFields"][] = "VehicleNo";
$tdatainsurance_payments[".exportFields"][] = "Type";
$tdatainsurance_payments[".exportFields"][] = "RenewalDueDate";
$tdatainsurance_payments[".exportFields"][] = "Insurer";
$tdatainsurance_payments[".exportFields"][] = "Premium";
$tdatainsurance_payments[".exportFields"][] = "From";
$tdatainsurance_payments[".exportFields"][] = "To";
$tdatainsurance_payments[".exportFields"][] = "DateofPayment";
$tdatainsurance_payments[".exportFields"][] = "PaymentVoucher";
$tdatainsurance_payments[".exportFields"][] = "SysDate";
$tdatainsurance_payments[".exportFields"][] = "EnteredBy";

$tdatainsurance_payments[".importFields"] = array();
$tdatainsurance_payments[".importFields"][] = "Id";
$tdatainsurance_payments[".importFields"][] = "SysDate";
$tdatainsurance_payments[".importFields"][] = "Fleet";
$tdatainsurance_payments[".importFields"][] = "Type";
$tdatainsurance_payments[".importFields"][] = "VehicleNo";
$tdatainsurance_payments[".importFields"][] = "RenewalDueDate";
$tdatainsurance_payments[".importFields"][] = "Premium";
$tdatainsurance_payments[".importFields"][] = "PaymentVoucher";
$tdatainsurance_payments[".importFields"][] = "EnteredBy";
$tdatainsurance_payments[".importFields"][] = "DateofPayment";
$tdatainsurance_payments[".importFields"][] = "Insurer";
$tdatainsurance_payments[".importFields"][] = "From";
$tdatainsurance_payments[".importFields"][] = "To";

$tdatainsurance_payments[".printFields"] = array();
$tdatainsurance_payments[".printFields"][] = "Fleet";
$tdatainsurance_payments[".printFields"][] = "Id";
$tdatainsurance_payments[".printFields"][] = "VehicleNo";
$tdatainsurance_payments[".printFields"][] = "Type";
$tdatainsurance_payments[".printFields"][] = "RenewalDueDate";
$tdatainsurance_payments[".printFields"][] = "Insurer";
$tdatainsurance_payments[".printFields"][] = "Premium";
$tdatainsurance_payments[".printFields"][] = "From";
$tdatainsurance_payments[".printFields"][] = "To";
$tdatainsurance_payments[".printFields"][] = "DateofPayment";
$tdatainsurance_payments[".printFields"][] = "PaymentVoucher";
$tdatainsurance_payments[".printFields"][] = "SysDate";
$tdatainsurance_payments[".printFields"][] = "EnteredBy";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments","Id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
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








	$tdatainsurance_payments["Id"] = $fdata;
//	SysDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SysDate";
	$fdata["GoodName"] = "SysDate";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments","SysDate");
	$fdata["FieldType"] = 200;

	
	
	
										
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SysDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`SysDate`";

	
	
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




	$tdatainsurance_payments["SysDate"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments","Fleet");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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
	$edata["DependentLookups"][] = "VehicleNo";

	
	
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




	$tdatainsurance_payments["Fleet"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments","Type");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Type`";

	
	
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




	$tdatainsurance_payments["Type"] = $fdata;
//	VehicleNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "VehicleNo";
	$fdata["GoodName"] = "VehicleNo";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments","VehicleNo");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VehicleNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VehicleNo";

	
	
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
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Type", 'lookupF'=>"Type");
	$edata["autoCompleteFields"][] = array('masterF'=>"RenewalDueDate", 'lookupF'=>"InsuranceDue");
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




	$tdatainsurance_payments["VehicleNo"] = $fdata;
//	RenewalDueDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "RenewalDueDate";
	$fdata["GoodName"] = "RenewalDueDate";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments","RenewalDueDate");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RenewalDueDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RenewalDueDate";

	
	
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




	$tdatainsurance_payments["RenewalDueDate"] = $fdata;
//	Premium
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Premium";
	$fdata["GoodName"] = "Premium";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments","Premium");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Premium";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Premium";

	
	
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




	$tdatainsurance_payments["Premium"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments","Cost");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "Cost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cost";

	
	
			
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








	$tdatainsurance_payments["Cost"] = $fdata;
//	PaymentVoucher
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PaymentVoucher";
	$fdata["GoodName"] = "PaymentVoucher";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments","PaymentVoucher");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PaymentVoucher";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PaymentVoucher";

	
	
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




	$tdatainsurance_payments["PaymentVoucher"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments","EnteredBy");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdatainsurance_payments["EnteredBy"] = $fdata;
//	DateofPayment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DateofPayment";
	$fdata["GoodName"] = "DateofPayment";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments","DateofPayment");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DateofPayment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DateofPayment";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatainsurance_payments["DateofPayment"] = $fdata;
//	Insurer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Insurer";
	$fdata["GoodName"] = "Insurer";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments","Insurer");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Insurer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Insurer";

	
	
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
	$edata["LookupTable"] = "insurancecompany";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	
	$edata["LookupOrderBy"] = "Name";

	
	
	
	

	
	
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




	$tdatainsurance_payments["Insurer"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments","Date");
	$fdata["FieldType"] = 200;

	
	
	
										
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "Date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Date`";

	
	
			
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








	$tdatainsurance_payments["Date"] = $fdata;
//	From
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "From";
	$fdata["GoodName"] = "From";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments","From");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "From";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`From`";

	
	
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




	$tdatainsurance_payments["From"] = $fdata;
//	To
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "To";
	$fdata["GoodName"] = "To";
	$fdata["ownerTable"] = "insurance-payments";
	$fdata["Label"] = GetFieldLabel("insurance_payments","To");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "To";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`To`";

	
	
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




	$tdatainsurance_payments["To"] = $fdata;


$tables_data["insurance-payments"]=&$tdatainsurance_payments;
$field_labels["insurance_payments"] = &$fieldLabelsinsurance_payments;
$fieldToolTips["insurance_payments"] = &$fieldToolTipsinsurance_payments;
$page_titles["insurance_payments"] = &$pageTitlesinsurance_payments;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["insurance-payments"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["insurance-payments"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_insurance_payments()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  	`SysDate`,  	Fleet,  	`Type`,  	VehicleNo,  	RenewalDueDate,  	Premium,  	Cost,  	PaymentVoucher,  	EnteredBy,  	DateofPayment,  	Insurer,  	`Date`,  	`From`,  	`To`";
$proto0["m_strFrom"] = "FROM `insurance-payments`";
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
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "insurance-payments";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SysDate",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments"
));

$proto8["m_sql"] = "`SysDate`";
$proto8["m_srcTableName"] = "insurance-payments";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments"
));

$proto10["m_sql"] = "Fleet";
$proto10["m_srcTableName"] = "insurance-payments";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments"
));

$proto12["m_sql"] = "`Type`";
$proto12["m_srcTableName"] = "insurance-payments";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "VehicleNo",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments"
));

$proto14["m_sql"] = "VehicleNo";
$proto14["m_srcTableName"] = "insurance-payments";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "RenewalDueDate",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments"
));

$proto16["m_sql"] = "RenewalDueDate";
$proto16["m_srcTableName"] = "insurance-payments";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Premium",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments"
));

$proto18["m_sql"] = "Premium";
$proto18["m_srcTableName"] = "insurance-payments";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments"
));

$proto20["m_sql"] = "Cost";
$proto20["m_srcTableName"] = "insurance-payments";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentVoucher",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments"
));

$proto22["m_sql"] = "PaymentVoucher";
$proto22["m_srcTableName"] = "insurance-payments";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments"
));

$proto24["m_sql"] = "EnteredBy";
$proto24["m_srcTableName"] = "insurance-payments";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DateofPayment",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments"
));

$proto26["m_sql"] = "DateofPayment";
$proto26["m_srcTableName"] = "insurance-payments";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Insurer",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments"
));

$proto28["m_sql"] = "Insurer";
$proto28["m_srcTableName"] = "insurance-payments";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments"
));

$proto30["m_sql"] = "`Date`";
$proto30["m_srcTableName"] = "insurance-payments";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "From",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments"
));

$proto32["m_sql"] = "`From`";
$proto32["m_srcTableName"] = "insurance-payments";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "To",
	"m_strTable" => "insurance-payments",
	"m_srcTableName" => "insurance-payments"
));

$proto34["m_sql"] = "`To`";
$proto34["m_srcTableName"] = "insurance-payments";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "insurance-payments";
$proto37["m_srcTableName"] = "insurance-payments";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "Id";
$proto37["m_columns"][] = "SysDate";
$proto37["m_columns"][] = "Fleet";
$proto37["m_columns"][] = "Type";
$proto37["m_columns"][] = "VehicleNo";
$proto37["m_columns"][] = "RenewalDueDate";
$proto37["m_columns"][] = "Premium";
$proto37["m_columns"][] = "Cost";
$proto37["m_columns"][] = "PaymentVoucher";
$proto37["m_columns"][] = "EnteredBy";
$proto37["m_columns"][] = "DateofPayment";
$proto37["m_columns"][] = "Insurer";
$proto37["m_columns"][] = "Date";
$proto37["m_columns"][] = "From";
$proto37["m_columns"][] = "To";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "`insurance-payments`";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "insurance-payments";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="insurance-payments";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_insurance_payments = createSqlQuery_insurance_payments();


	
					
;

															

$tdatainsurance_payments[".sqlquery"] = $queryData_insurance_payments;

$tableEvents["insurance-payments"] = new eventsBase;
$tdatainsurance_payments[".hasEvents"] = false;

?>