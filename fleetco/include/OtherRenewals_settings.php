<?php
require_once(getabspath("classes/cipherer.php"));




$tdataOtherRenewals = array();	
	$tdataOtherRenewals[".truncateText"] = true;
	$tdataOtherRenewals[".NumberOfChars"] = 80; 
	$tdataOtherRenewals[".ShortName"] = "OtherRenewals";
	$tdataOtherRenewals[".OwnerID"] = "";
	$tdataOtherRenewals[".OriginalTable"] = "OtherRenewals";

//	field labels
$fieldLabelsOtherRenewals = array();
$fieldToolTipsOtherRenewals = array();
$pageTitlesOtherRenewals = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsOtherRenewals["English"] = array();
	$fieldToolTipsOtherRenewals["English"] = array();
	$pageTitlesOtherRenewals["English"] = array();
	$fieldLabelsOtherRenewals["English"]["ID"] = "ID";
	$fieldToolTipsOtherRenewals["English"]["ID"] = "";
	$fieldLabelsOtherRenewals["English"]["Fleet"] = "Fleet";
	$fieldToolTipsOtherRenewals["English"]["Fleet"] = "";
	$fieldLabelsOtherRenewals["English"]["VehicleNo"] = "Veh. No";
	$fieldToolTipsOtherRenewals["English"]["VehicleNo"] = "";
	$fieldLabelsOtherRenewals["English"]["VehicleType"] = "Veh. Type";
	$fieldToolTipsOtherRenewals["English"]["VehicleType"] = "";
	$fieldLabelsOtherRenewals["English"]["PaymentType"] = "Renewal";
	$fieldToolTipsOtherRenewals["English"]["PaymentType"] = "";
	$fieldLabelsOtherRenewals["English"]["RenewalDate"] = "Pay.Date";
	$fieldToolTipsOtherRenewals["English"]["RenewalDate"] = "Date of payment";
	$fieldLabelsOtherRenewals["English"]["Cost"] = "Cost";
	$fieldToolTipsOtherRenewals["English"]["Cost"] = "Cost without VAT";
	$fieldLabelsOtherRenewals["English"]["SystemDate"] = "Sys. Date";
	$fieldToolTipsOtherRenewals["English"]["SystemDate"] = "";
	$fieldLabelsOtherRenewals["English"]["EnteredBy"] = "Entered By";
	$fieldToolTipsOtherRenewals["English"]["EnteredBy"] = "";
	$fieldLabelsOtherRenewals["English"]["PeriodFrom"] = "From";
	$fieldToolTipsOtherRenewals["English"]["PeriodFrom"] = "Starting date of period covered by the payment";
	$fieldLabelsOtherRenewals["English"]["PeriodTo"] = "To";
	$fieldToolTipsOtherRenewals["English"]["PeriodTo"] = "Last date of period covered by the payment";
	$fieldLabelsOtherRenewals["English"]["PaymentRef"] = "Pay. Ref";
	$fieldToolTipsOtherRenewals["English"]["PaymentRef"] = "Payment voucher no. if any";
	if (count($fieldToolTipsOtherRenewals["English"]))
		$tdataOtherRenewals[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsOtherRenewals[""] = array();
	$fieldToolTipsOtherRenewals[""] = array();
	$pageTitlesOtherRenewals[""] = array();
	$fieldLabelsOtherRenewals[""]["ID"] = "ID";
	$fieldToolTipsOtherRenewals[""]["ID"] = "";
	$fieldLabelsOtherRenewals[""]["Fleet"] = "Fleet";
	$fieldToolTipsOtherRenewals[""]["Fleet"] = "";
	$fieldLabelsOtherRenewals[""]["VehicleNo"] = "Vehicle No";
	$fieldToolTipsOtherRenewals[""]["VehicleNo"] = "";
	$fieldLabelsOtherRenewals[""]["VehicleType"] = "Vehicle Type";
	$fieldToolTipsOtherRenewals[""]["VehicleType"] = "";
	$fieldLabelsOtherRenewals[""]["PaymentType"] = "Payment Type";
	$fieldToolTipsOtherRenewals[""]["PaymentType"] = "";
	$fieldLabelsOtherRenewals[""]["RenewalDate"] = "Renewal Date";
	$fieldToolTipsOtherRenewals[""]["RenewalDate"] = "";
	$fieldLabelsOtherRenewals[""]["Cost"] = "Cost";
	$fieldToolTipsOtherRenewals[""]["Cost"] = "";
	$fieldLabelsOtherRenewals[""]["SystemDate"] = "System Date";
	$fieldToolTipsOtherRenewals[""]["SystemDate"] = "";
	$fieldLabelsOtherRenewals[""]["EnteredBy"] = "Entered By";
	$fieldToolTipsOtherRenewals[""]["EnteredBy"] = "";
	$fieldLabelsOtherRenewals[""]["PeriodFrom"] = "Period From";
	$fieldToolTipsOtherRenewals[""]["PeriodFrom"] = "";
	$fieldLabelsOtherRenewals[""]["PeriodTo"] = "Period To";
	$fieldToolTipsOtherRenewals[""]["PeriodTo"] = "";
	$fieldLabelsOtherRenewals[""]["PaymentRef"] = "Payment Ref";
	$fieldToolTipsOtherRenewals[""]["PaymentRef"] = "";
	if (count($fieldToolTipsOtherRenewals[""]))
		$tdataOtherRenewals[".isUseToolTips"] = true;
}
	
	
	$tdataOtherRenewals[".NCSearch"] = true;



$tdataOtherRenewals[".shortTableName"] = "OtherRenewals";
$tdataOtherRenewals[".nSecOptions"] = 0;
$tdataOtherRenewals[".recsPerRowList"] = 1;
$tdataOtherRenewals[".recsPerRowPrint"] = 1;
$tdataOtherRenewals[".mainTableOwnerID"] = "";
$tdataOtherRenewals[".moveNext"] = 1;
$tdataOtherRenewals[".entityType"] = 0;

$tdataOtherRenewals[".strOriginalTableName"] = "OtherRenewals";




$tdataOtherRenewals[".showAddInPopup"] = false;

$tdataOtherRenewals[".showEditInPopup"] = false;

$tdataOtherRenewals[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataOtherRenewals[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataOtherRenewals[".fieldsForRegister"] = array();

$tdataOtherRenewals[".listAjax"] = false;

	$tdataOtherRenewals[".audit"] = false;

	$tdataOtherRenewals[".locking"] = false;

$tdataOtherRenewals[".edit"] = true;
$tdataOtherRenewals[".afterEditAction"] = 1;
$tdataOtherRenewals[".closePopupAfterEdit"] = 1;
$tdataOtherRenewals[".afterEditActionDetTable"] = "";

$tdataOtherRenewals[".add"] = true;
$tdataOtherRenewals[".afterAddAction"] = 1;
$tdataOtherRenewals[".closePopupAfterAdd"] = 1;
$tdataOtherRenewals[".afterAddActionDetTable"] = "";

$tdataOtherRenewals[".list"] = true;

$tdataOtherRenewals[".view"] = true;


$tdataOtherRenewals[".exportTo"] = true;

$tdataOtherRenewals[".printFriendly"] = true;

$tdataOtherRenewals[".delete"] = true;

$tdataOtherRenewals[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataOtherRenewals[".searchSaving"] = false;
//

$tdataOtherRenewals[".showSearchPanel"] = true;
		$tdataOtherRenewals[".flexibleSearch"] = true;		

if (isMobile())
	$tdataOtherRenewals[".isUseAjaxSuggest"] = false;
else 
	$tdataOtherRenewals[".isUseAjaxSuggest"] = true;

$tdataOtherRenewals[".rowHighlite"] = true;



$tdataOtherRenewals[".addPageEvents"] = false;

// use timepicker for search panel
$tdataOtherRenewals[".isUseTimeForSearch"] = false;





$tdataOtherRenewals[".allSearchFields"] = array();
$tdataOtherRenewals[".filterFields"] = array();
$tdataOtherRenewals[".requiredSearchFields"] = array();

$tdataOtherRenewals[".allSearchFields"][] = "Fleet";
	$tdataOtherRenewals[".allSearchFields"][] = "ID";
	$tdataOtherRenewals[".allSearchFields"][] = "VehicleNo";
	$tdataOtherRenewals[".allSearchFields"][] = "VehicleType";
	$tdataOtherRenewals[".allSearchFields"][] = "PaymentType";
	$tdataOtherRenewals[".allSearchFields"][] = "RenewalDate";
	$tdataOtherRenewals[".allSearchFields"][] = "Cost";
	$tdataOtherRenewals[".allSearchFields"][] = "PaymentRef";
	$tdataOtherRenewals[".allSearchFields"][] = "PeriodFrom";
	$tdataOtherRenewals[".allSearchFields"][] = "PeriodTo";
	$tdataOtherRenewals[".allSearchFields"][] = "SystemDate";
	$tdataOtherRenewals[".allSearchFields"][] = "EnteredBy";
	

$tdataOtherRenewals[".googleLikeFields"] = array();
$tdataOtherRenewals[".googleLikeFields"][] = "ID";
$tdataOtherRenewals[".googleLikeFields"][] = "Fleet";
$tdataOtherRenewals[".googleLikeFields"][] = "VehicleNo";
$tdataOtherRenewals[".googleLikeFields"][] = "VehicleType";
$tdataOtherRenewals[".googleLikeFields"][] = "PaymentType";
$tdataOtherRenewals[".googleLikeFields"][] = "RenewalDate";
$tdataOtherRenewals[".googleLikeFields"][] = "Cost";
$tdataOtherRenewals[".googleLikeFields"][] = "SystemDate";
$tdataOtherRenewals[".googleLikeFields"][] = "EnteredBy";
$tdataOtherRenewals[".googleLikeFields"][] = "PeriodFrom";
$tdataOtherRenewals[".googleLikeFields"][] = "PeriodTo";
$tdataOtherRenewals[".googleLikeFields"][] = "PaymentRef";


$tdataOtherRenewals[".advSearchFields"] = array();
$tdataOtherRenewals[".advSearchFields"][] = "Fleet";
$tdataOtherRenewals[".advSearchFields"][] = "ID";
$tdataOtherRenewals[".advSearchFields"][] = "VehicleNo";
$tdataOtherRenewals[".advSearchFields"][] = "VehicleType";
$tdataOtherRenewals[".advSearchFields"][] = "PaymentType";
$tdataOtherRenewals[".advSearchFields"][] = "RenewalDate";
$tdataOtherRenewals[".advSearchFields"][] = "Cost";
$tdataOtherRenewals[".advSearchFields"][] = "PaymentRef";
$tdataOtherRenewals[".advSearchFields"][] = "PeriodFrom";
$tdataOtherRenewals[".advSearchFields"][] = "PeriodTo";
$tdataOtherRenewals[".advSearchFields"][] = "SystemDate";
$tdataOtherRenewals[".advSearchFields"][] = "EnteredBy";

$tdataOtherRenewals[".tableType"] = "list";

$tdataOtherRenewals[".printerPageOrientation"] = 0;
$tdataOtherRenewals[".nPrinterPageScale"] = 100;

$tdataOtherRenewals[".nPrinterSplitRecords"] = 40;

$tdataOtherRenewals[".nPrinterPDFSplitRecords"] = 40;



$tdataOtherRenewals[".geocodingEnabled"] = false;




	





// view page pdf
$tdataOtherRenewals[".isViewPagePDF"] = true;
$tdataOtherRenewals[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataOtherRenewals[".isPrinterPagePDF"] = true;
$tdataOtherRenewals[".nPrinterPagePDFScale"] = 100;


$tdataOtherRenewals[".pageSize"] = 20;

$tdataOtherRenewals[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataOtherRenewals[".strOrderBy"] = $tstrOrderBy;

$tdataOtherRenewals[".orderindexes"] = array();

$tdataOtherRenewals[".sqlHead"] = "SELECT ID,  Fleet,  VehicleNo,  VehicleType,  PaymentType,  RenewalDate,  Cost,  SystemDate,  EnteredBy,  PeriodFrom,  PeriodTo,  PaymentRef";
$tdataOtherRenewals[".sqlFrom"] = "FROM otherrenewals";
$tdataOtherRenewals[".sqlWhereExpr"] = "";
$tdataOtherRenewals[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataOtherRenewals[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataOtherRenewals[".arrGroupsPerPage"] = $arrGPP;

$tdataOtherRenewals[".highlightSearchResults"] = true;

$tableKeysOtherRenewals = array();
$tableKeysOtherRenewals[] = "ID";
$tdataOtherRenewals[".Keys"] = $tableKeysOtherRenewals;

$tdataOtherRenewals[".listFields"] = array();
$tdataOtherRenewals[".listFields"][] = "Fleet";
$tdataOtherRenewals[".listFields"][] = "ID";
$tdataOtherRenewals[".listFields"][] = "VehicleNo";
$tdataOtherRenewals[".listFields"][] = "VehicleType";
$tdataOtherRenewals[".listFields"][] = "PaymentType";
$tdataOtherRenewals[".listFields"][] = "RenewalDate";
$tdataOtherRenewals[".listFields"][] = "Cost";
$tdataOtherRenewals[".listFields"][] = "PaymentRef";
$tdataOtherRenewals[".listFields"][] = "PeriodFrom";
$tdataOtherRenewals[".listFields"][] = "PeriodTo";
$tdataOtherRenewals[".listFields"][] = "SystemDate";
$tdataOtherRenewals[".listFields"][] = "EnteredBy";

$tdataOtherRenewals[".hideMobileList"] = array();


$tdataOtherRenewals[".viewFields"] = array();
$tdataOtherRenewals[".viewFields"][] = "Fleet";
$tdataOtherRenewals[".viewFields"][] = "ID";
$tdataOtherRenewals[".viewFields"][] = "VehicleNo";
$tdataOtherRenewals[".viewFields"][] = "VehicleType";
$tdataOtherRenewals[".viewFields"][] = "PaymentType";
$tdataOtherRenewals[".viewFields"][] = "RenewalDate";
$tdataOtherRenewals[".viewFields"][] = "Cost";
$tdataOtherRenewals[".viewFields"][] = "PaymentRef";
$tdataOtherRenewals[".viewFields"][] = "PeriodFrom";
$tdataOtherRenewals[".viewFields"][] = "PeriodTo";
$tdataOtherRenewals[".viewFields"][] = "SystemDate";
$tdataOtherRenewals[".viewFields"][] = "EnteredBy";

$tdataOtherRenewals[".addFields"] = array();
$tdataOtherRenewals[".addFields"][] = "Fleet";
$tdataOtherRenewals[".addFields"][] = "VehicleNo";
$tdataOtherRenewals[".addFields"][] = "VehicleType";
$tdataOtherRenewals[".addFields"][] = "PaymentType";
$tdataOtherRenewals[".addFields"][] = "RenewalDate";
$tdataOtherRenewals[".addFields"][] = "Cost";
$tdataOtherRenewals[".addFields"][] = "PaymentRef";
$tdataOtherRenewals[".addFields"][] = "PeriodFrom";
$tdataOtherRenewals[".addFields"][] = "PeriodTo";
$tdataOtherRenewals[".addFields"][] = "SystemDate";
$tdataOtherRenewals[".addFields"][] = "EnteredBy";

$tdataOtherRenewals[".masterListFields"] = array();
$tdataOtherRenewals[".masterListFields"][] = "Fleet";
$tdataOtherRenewals[".masterListFields"][] = "ID";
$tdataOtherRenewals[".masterListFields"][] = "VehicleNo";
$tdataOtherRenewals[".masterListFields"][] = "VehicleType";
$tdataOtherRenewals[".masterListFields"][] = "PaymentType";
$tdataOtherRenewals[".masterListFields"][] = "RenewalDate";
$tdataOtherRenewals[".masterListFields"][] = "Cost";
$tdataOtherRenewals[".masterListFields"][] = "PaymentRef";
$tdataOtherRenewals[".masterListFields"][] = "PeriodFrom";
$tdataOtherRenewals[".masterListFields"][] = "PeriodTo";
$tdataOtherRenewals[".masterListFields"][] = "SystemDate";
$tdataOtherRenewals[".masterListFields"][] = "EnteredBy";

$tdataOtherRenewals[".inlineAddFields"] = array();

$tdataOtherRenewals[".editFields"] = array();
$tdataOtherRenewals[".editFields"][] = "Fleet";
$tdataOtherRenewals[".editFields"][] = "VehicleNo";
$tdataOtherRenewals[".editFields"][] = "VehicleType";
$tdataOtherRenewals[".editFields"][] = "PaymentType";
$tdataOtherRenewals[".editFields"][] = "RenewalDate";
$tdataOtherRenewals[".editFields"][] = "Cost";
$tdataOtherRenewals[".editFields"][] = "PaymentRef";
$tdataOtherRenewals[".editFields"][] = "PeriodFrom";
$tdataOtherRenewals[".editFields"][] = "PeriodTo";
$tdataOtherRenewals[".editFields"][] = "SystemDate";
$tdataOtherRenewals[".editFields"][] = "EnteredBy";

$tdataOtherRenewals[".inlineEditFields"] = array();

$tdataOtherRenewals[".exportFields"] = array();
$tdataOtherRenewals[".exportFields"][] = "Fleet";
$tdataOtherRenewals[".exportFields"][] = "ID";
$tdataOtherRenewals[".exportFields"][] = "VehicleNo";
$tdataOtherRenewals[".exportFields"][] = "VehicleType";
$tdataOtherRenewals[".exportFields"][] = "PaymentType";
$tdataOtherRenewals[".exportFields"][] = "RenewalDate";
$tdataOtherRenewals[".exportFields"][] = "Cost";
$tdataOtherRenewals[".exportFields"][] = "PaymentRef";
$tdataOtherRenewals[".exportFields"][] = "PeriodFrom";
$tdataOtherRenewals[".exportFields"][] = "PeriodTo";
$tdataOtherRenewals[".exportFields"][] = "SystemDate";
$tdataOtherRenewals[".exportFields"][] = "EnteredBy";

$tdataOtherRenewals[".importFields"] = array();

$tdataOtherRenewals[".printFields"] = array();
$tdataOtherRenewals[".printFields"][] = "Fleet";
$tdataOtherRenewals[".printFields"][] = "ID";
$tdataOtherRenewals[".printFields"][] = "VehicleNo";
$tdataOtherRenewals[".printFields"][] = "VehicleType";
$tdataOtherRenewals[".printFields"][] = "PaymentType";
$tdataOtherRenewals[".printFields"][] = "RenewalDate";
$tdataOtherRenewals[".printFields"][] = "Cost";
$tdataOtherRenewals[".printFields"][] = "PaymentRef";
$tdataOtherRenewals[".printFields"][] = "PeriodFrom";
$tdataOtherRenewals[".printFields"][] = "PeriodTo";
$tdataOtherRenewals[".printFields"][] = "SystemDate";
$tdataOtherRenewals[".printFields"][] = "EnteredBy";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "otherrenewals";
	$fdata["Label"] = GetFieldLabel("OtherRenewals","ID"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataOtherRenewals["ID"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "otherrenewals";
	$fdata["Label"] = GetFieldLabel("OtherRenewals","Fleet"); 
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataOtherRenewals["Fleet"] = $fdata;
//	VehicleNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "VehicleNo";
	$fdata["GoodName"] = "VehicleNo";
	$fdata["ownerTable"] = "otherrenewals";
	$fdata["Label"] = GetFieldLabel("OtherRenewals","VehicleNo"); 
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
		$edata["autoCompleteFields"][] = array('masterF'=>"VehicleType", 'lookupF'=>"Type");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataOtherRenewals["VehicleNo"] = $fdata;
//	VehicleType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "VehicleType";
	$fdata["GoodName"] = "VehicleType";
	$fdata["ownerTable"] = "otherrenewals";
	$fdata["Label"] = GetFieldLabel("OtherRenewals","VehicleType"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "VehicleType"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VehicleType";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataOtherRenewals["VehicleType"] = $fdata;
//	PaymentType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PaymentType";
	$fdata["GoodName"] = "PaymentType";
	$fdata["ownerTable"] = "otherrenewals";
	$fdata["Label"] = GetFieldLabel("OtherRenewals","PaymentType"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "PaymentType"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PaymentType";
	
		
		
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
	$edata["LookupTable"] = "RenewalsMaster";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "RenewalType";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RenewalType";
	
		
	$edata["LookupOrderBy"] = "RenewalType";
	
		
			
		
				
	
	
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataOtherRenewals["PaymentType"] = $fdata;
//	RenewalDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "RenewalDate";
	$fdata["GoodName"] = "RenewalDate";
	$fdata["ownerTable"] = "otherrenewals";
	$fdata["Label"] = GetFieldLabel("OtherRenewals","RenewalDate"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "RenewalDate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RenewalDate";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataOtherRenewals["RenewalDate"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "otherrenewals";
	$fdata["Label"] = GetFieldLabel("OtherRenewals","Cost"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataOtherRenewals["Cost"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "otherrenewals";
	$fdata["Label"] = GetFieldLabel("OtherRenewals","SystemDate"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataOtherRenewals["SystemDate"] = $fdata;
//	EnteredBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "EnteredBy";
	$fdata["GoodName"] = "EnteredBy";
	$fdata["ownerTable"] = "otherrenewals";
	$fdata["Label"] = GetFieldLabel("OtherRenewals","EnteredBy"); 
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataOtherRenewals["EnteredBy"] = $fdata;
//	PeriodFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PeriodFrom";
	$fdata["GoodName"] = "PeriodFrom";
	$fdata["ownerTable"] = "otherrenewals";
	$fdata["Label"] = GetFieldLabel("OtherRenewals","PeriodFrom"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "PeriodFrom"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PeriodFrom";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataOtherRenewals["PeriodFrom"] = $fdata;
//	PeriodTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "PeriodTo";
	$fdata["GoodName"] = "PeriodTo";
	$fdata["ownerTable"] = "otherrenewals";
	$fdata["Label"] = GetFieldLabel("OtherRenewals","PeriodTo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "PeriodTo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PeriodTo";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataOtherRenewals["PeriodTo"] = $fdata;
//	PaymentRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PaymentRef";
	$fdata["GoodName"] = "PaymentRef";
	$fdata["ownerTable"] = "otherrenewals";
	$fdata["Label"] = GetFieldLabel("OtherRenewals","PaymentRef"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "PaymentRef"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PaymentRef";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataOtherRenewals["PaymentRef"] = $fdata;

	
$tables_data["OtherRenewals"]=&$tdataOtherRenewals;
$field_labels["OtherRenewals"] = &$fieldLabelsOtherRenewals;
$fieldToolTips["OtherRenewals"] = &$fieldToolTipsOtherRenewals;
$page_titles["OtherRenewals"] = &$pageTitlesOtherRenewals;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["OtherRenewals"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["OtherRenewals"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_OtherRenewals()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  Fleet,  VehicleNo,  VehicleType,  PaymentType,  RenewalDate,  Cost,  SystemDate,  EnteredBy,  PeriodFrom,  PeriodTo,  PaymentRef";
$proto0["m_strFrom"] = "FROM otherrenewals";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "otherrenewals",
	"m_srcTableName" => "OtherRenewals"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "OtherRenewals";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "otherrenewals",
	"m_srcTableName" => "OtherRenewals"
));

$proto7["m_sql"] = "Fleet";
$proto7["m_srcTableName"] = "OtherRenewals";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "VehicleNo",
	"m_strTable" => "otherrenewals",
	"m_srcTableName" => "OtherRenewals"
));

$proto9["m_sql"] = "VehicleNo";
$proto9["m_srcTableName"] = "OtherRenewals";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "VehicleType",
	"m_strTable" => "otherrenewals",
	"m_srcTableName" => "OtherRenewals"
));

$proto11["m_sql"] = "VehicleType";
$proto11["m_srcTableName"] = "OtherRenewals";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentType",
	"m_strTable" => "otherrenewals",
	"m_srcTableName" => "OtherRenewals"
));

$proto13["m_sql"] = "PaymentType";
$proto13["m_srcTableName"] = "OtherRenewals";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "RenewalDate",
	"m_strTable" => "otherrenewals",
	"m_srcTableName" => "OtherRenewals"
));

$proto15["m_sql"] = "RenewalDate";
$proto15["m_srcTableName"] = "OtherRenewals";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "otherrenewals",
	"m_srcTableName" => "OtherRenewals"
));

$proto17["m_sql"] = "Cost";
$proto17["m_srcTableName"] = "OtherRenewals";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "otherrenewals",
	"m_srcTableName" => "OtherRenewals"
));

$proto19["m_sql"] = "SystemDate";
$proto19["m_srcTableName"] = "OtherRenewals";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "EnteredBy",
	"m_strTable" => "otherrenewals",
	"m_srcTableName" => "OtherRenewals"
));

$proto21["m_sql"] = "EnteredBy";
$proto21["m_srcTableName"] = "OtherRenewals";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "PeriodFrom",
	"m_strTable" => "otherrenewals",
	"m_srcTableName" => "OtherRenewals"
));

$proto23["m_sql"] = "PeriodFrom";
$proto23["m_srcTableName"] = "OtherRenewals";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "PeriodTo",
	"m_strTable" => "otherrenewals",
	"m_srcTableName" => "OtherRenewals"
));

$proto25["m_sql"] = "PeriodTo";
$proto25["m_srcTableName"] = "OtherRenewals";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentRef",
	"m_strTable" => "otherrenewals",
	"m_srcTableName" => "OtherRenewals"
));

$proto27["m_sql"] = "PaymentRef";
$proto27["m_srcTableName"] = "OtherRenewals";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "otherrenewals";
$proto30["m_srcTableName"] = "OtherRenewals";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "ID";
$proto30["m_columns"][] = "Fleet";
$proto30["m_columns"][] = "VehicleNo";
$proto30["m_columns"][] = "VehicleType";
$proto30["m_columns"][] = "PaymentType";
$proto30["m_columns"][] = "RenewalDate";
$proto30["m_columns"][] = "Cost";
$proto30["m_columns"][] = "SystemDate";
$proto30["m_columns"][] = "EnteredBy";
$proto30["m_columns"][] = "PeriodFrom";
$proto30["m_columns"][] = "PeriodTo";
$proto30["m_columns"][] = "PaymentRef";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "otherrenewals";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "OtherRenewals";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="OtherRenewals";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_OtherRenewals = createSqlQuery_OtherRenewals();


	
												
	
$tdataOtherRenewals[".sqlquery"] = $queryData_OtherRenewals;

$tableEvents["OtherRenewals"] = new eventsBase;
$tdataOtherRenewals[".hasEvents"] = false;

?>