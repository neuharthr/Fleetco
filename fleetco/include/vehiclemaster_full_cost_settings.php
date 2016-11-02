<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavehiclemaster_full_cost = array();	
	$tdatavehiclemaster_full_cost[".truncateText"] = true;
	$tdatavehiclemaster_full_cost[".NumberOfChars"] = 80; 
	$tdatavehiclemaster_full_cost[".ShortName"] = "vehiclemaster_full_cost";
	$tdatavehiclemaster_full_cost[".OwnerID"] = "";
	$tdatavehiclemaster_full_cost[".OriginalTable"] = "vehiclemaster";

//	field labels
$fieldLabelsvehiclemaster_full_cost = array();
$fieldToolTipsvehiclemaster_full_cost = array();
$pageTitlesvehiclemaster_full_cost = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvehiclemaster_full_cost["English"] = array();
	$fieldToolTipsvehiclemaster_full_cost["English"] = array();
	$pageTitlesvehiclemaster_full_cost["English"] = array();
	$fieldLabelsvehiclemaster_full_cost["English"]["ID"] = "ID";
	$fieldToolTipsvehiclemaster_full_cost["English"]["ID"] = "";
	$fieldLabelsvehiclemaster_full_cost["English"]["RegNo"] = "Reg No";
	$fieldToolTipsvehiclemaster_full_cost["English"]["RegNo"] = "";
	$fieldLabelsvehiclemaster_full_cost["English"]["Fleet"] = "Fleet";
	$fieldToolTipsvehiclemaster_full_cost["English"]["Fleet"] = "";
	$fieldLabelsvehiclemaster_full_cost["English"]["Type"] = "Type";
	$fieldToolTipsvehiclemaster_full_cost["English"]["Type"] = "";
	$fieldLabelsvehiclemaster_full_cost["English"]["RegDate"] = "Reg Date";
	$fieldToolTipsvehiclemaster_full_cost["English"]["RegDate"] = "";
	$fieldLabelsvehiclemaster_full_cost["English"]["Cost"] = "Cost";
	$fieldToolTipsvehiclemaster_full_cost["English"]["Cost"] = "";
	$fieldLabelsvehiclemaster_full_cost["English"]["DriverAsigned"] = "Driver";
	$fieldToolTipsvehiclemaster_full_cost["English"]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster_full_cost["English"]["Make"] = "Make";
	$fieldToolTipsvehiclemaster_full_cost["English"]["Make"] = "";
	$fieldLabelsvehiclemaster_full_cost["English"]["Model"] = "Model";
	$fieldToolTipsvehiclemaster_full_cost["English"]["Model"] = "";
	$fieldLabelsvehiclemaster_full_cost["English"]["InsuranceDue"] = "Renewal";
	$fieldToolTipsvehiclemaster_full_cost["English"]["InsuranceDue"] = "";
	if (count($fieldToolTipsvehiclemaster_full_cost["English"]))
		$tdatavehiclemaster_full_cost[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvehiclemaster_full_cost[""] = array();
	$fieldToolTipsvehiclemaster_full_cost[""] = array();
	$pageTitlesvehiclemaster_full_cost[""] = array();
	$fieldLabelsvehiclemaster_full_cost[""]["ID"] = "ID";
	$fieldToolTipsvehiclemaster_full_cost[""]["ID"] = "";
	$fieldLabelsvehiclemaster_full_cost[""]["RegNo"] = "Reg No";
	$fieldToolTipsvehiclemaster_full_cost[""]["RegNo"] = "";
	$fieldLabelsvehiclemaster_full_cost[""]["Fleet"] = "Fleet";
	$fieldToolTipsvehiclemaster_full_cost[""]["Fleet"] = "";
	$fieldLabelsvehiclemaster_full_cost[""]["Type"] = "Type";
	$fieldToolTipsvehiclemaster_full_cost[""]["Type"] = "";
	$fieldLabelsvehiclemaster_full_cost[""]["RegDate"] = "Reg Date";
	$fieldToolTipsvehiclemaster_full_cost[""]["RegDate"] = "";
	$fieldLabelsvehiclemaster_full_cost[""]["Cost"] = "Cost";
	$fieldToolTipsvehiclemaster_full_cost[""]["Cost"] = "";
	$fieldLabelsvehiclemaster_full_cost[""]["DriverAsigned"] = "Driver Asigned";
	$fieldToolTipsvehiclemaster_full_cost[""]["DriverAsigned"] = "";
	$fieldLabelsvehiclemaster_full_cost[""]["Make"] = "Make";
	$fieldToolTipsvehiclemaster_full_cost[""]["Make"] = "";
	$fieldLabelsvehiclemaster_full_cost[""]["Model"] = "Model";
	$fieldToolTipsvehiclemaster_full_cost[""]["Model"] = "";
	$fieldLabelsvehiclemaster_full_cost[""]["InsuranceDue"] = "Insurance Due";
	$fieldToolTipsvehiclemaster_full_cost[""]["InsuranceDue"] = "";
	if (count($fieldToolTipsvehiclemaster_full_cost[""]))
		$tdatavehiclemaster_full_cost[".isUseToolTips"] = true;
}
	
	
	$tdatavehiclemaster_full_cost[".NCSearch"] = true;



$tdatavehiclemaster_full_cost[".shortTableName"] = "vehiclemaster_full_cost";
$tdatavehiclemaster_full_cost[".nSecOptions"] = 0;
$tdatavehiclemaster_full_cost[".recsPerRowList"] = 1;
$tdatavehiclemaster_full_cost[".recsPerRowPrint"] = 1;
$tdatavehiclemaster_full_cost[".mainTableOwnerID"] = "";
$tdatavehiclemaster_full_cost[".moveNext"] = 1;
$tdatavehiclemaster_full_cost[".entityType"] = 1;

$tdatavehiclemaster_full_cost[".strOriginalTableName"] = "vehiclemaster";




$tdatavehiclemaster_full_cost[".showAddInPopup"] = false;

$tdatavehiclemaster_full_cost[".showEditInPopup"] = false;

$tdatavehiclemaster_full_cost[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavehiclemaster_full_cost[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavehiclemaster_full_cost[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatavehiclemaster_full_cost[".listAjax"] = true;
else 
	$tdatavehiclemaster_full_cost[".listAjax"] = false;

	$tdatavehiclemaster_full_cost[".audit"] = false;

	$tdatavehiclemaster_full_cost[".locking"] = false;

$tdatavehiclemaster_full_cost[".edit"] = true;
$tdatavehiclemaster_full_cost[".afterEditAction"] = 1;
$tdatavehiclemaster_full_cost[".closePopupAfterEdit"] = 1;
$tdatavehiclemaster_full_cost[".afterEditActionDetTable"] = "";

$tdatavehiclemaster_full_cost[".add"] = true;
$tdatavehiclemaster_full_cost[".afterAddAction"] = 1;
$tdatavehiclemaster_full_cost[".closePopupAfterAdd"] = 1;
$tdatavehiclemaster_full_cost[".afterAddActionDetTable"] = "";

$tdatavehiclemaster_full_cost[".list"] = true;

$tdatavehiclemaster_full_cost[".view"] = true;

$tdatavehiclemaster_full_cost[".import"] = true;

$tdatavehiclemaster_full_cost[".exportTo"] = true;

$tdatavehiclemaster_full_cost[".printFriendly"] = true;

$tdatavehiclemaster_full_cost[".delete"] = true;

$tdatavehiclemaster_full_cost[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatavehiclemaster_full_cost[".searchSaving"] = false;
//

$tdatavehiclemaster_full_cost[".showSearchPanel"] = true;
		$tdatavehiclemaster_full_cost[".flexibleSearch"] = true;		

if (isMobile())
	$tdatavehiclemaster_full_cost[".isUseAjaxSuggest"] = false;
else 
	$tdatavehiclemaster_full_cost[".isUseAjaxSuggest"] = true;

$tdatavehiclemaster_full_cost[".rowHighlite"] = true;



$tdatavehiclemaster_full_cost[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavehiclemaster_full_cost[".isUseTimeForSearch"] = false;





$tdatavehiclemaster_full_cost[".allSearchFields"] = array();
$tdatavehiclemaster_full_cost[".filterFields"] = array();
$tdatavehiclemaster_full_cost[".requiredSearchFields"] = array();

$tdatavehiclemaster_full_cost[".allSearchFields"][] = "Fleet";
	$tdatavehiclemaster_full_cost[".allSearchFields"][] = "ID";
	$tdatavehiclemaster_full_cost[".allSearchFields"][] = "Type";
	$tdatavehiclemaster_full_cost[".allSearchFields"][] = "RegDate";
	$tdatavehiclemaster_full_cost[".allSearchFields"][] = "RegNo";
	$tdatavehiclemaster_full_cost[".allSearchFields"][] = "Make";
	$tdatavehiclemaster_full_cost[".allSearchFields"][] = "Model";
	$tdatavehiclemaster_full_cost[".allSearchFields"][] = "Cost";
	$tdatavehiclemaster_full_cost[".allSearchFields"][] = "DriverAsigned";
	$tdatavehiclemaster_full_cost[".allSearchFields"][] = "InsuranceDue";
	

$tdatavehiclemaster_full_cost[".googleLikeFields"] = array();
$tdatavehiclemaster_full_cost[".googleLikeFields"][] = "ID";
$tdatavehiclemaster_full_cost[".googleLikeFields"][] = "RegNo";
$tdatavehiclemaster_full_cost[".googleLikeFields"][] = "Fleet";
$tdatavehiclemaster_full_cost[".googleLikeFields"][] = "Type";
$tdatavehiclemaster_full_cost[".googleLikeFields"][] = "RegDate";
$tdatavehiclemaster_full_cost[".googleLikeFields"][] = "Cost";
$tdatavehiclemaster_full_cost[".googleLikeFields"][] = "DriverAsigned";
$tdatavehiclemaster_full_cost[".googleLikeFields"][] = "Make";
$tdatavehiclemaster_full_cost[".googleLikeFields"][] = "Model";
$tdatavehiclemaster_full_cost[".googleLikeFields"][] = "InsuranceDue";


$tdatavehiclemaster_full_cost[".advSearchFields"] = array();
$tdatavehiclemaster_full_cost[".advSearchFields"][] = "Fleet";
$tdatavehiclemaster_full_cost[".advSearchFields"][] = "ID";
$tdatavehiclemaster_full_cost[".advSearchFields"][] = "Type";
$tdatavehiclemaster_full_cost[".advSearchFields"][] = "RegDate";
$tdatavehiclemaster_full_cost[".advSearchFields"][] = "RegNo";
$tdatavehiclemaster_full_cost[".advSearchFields"][] = "Make";
$tdatavehiclemaster_full_cost[".advSearchFields"][] = "Model";
$tdatavehiclemaster_full_cost[".advSearchFields"][] = "Cost";
$tdatavehiclemaster_full_cost[".advSearchFields"][] = "DriverAsigned";
$tdatavehiclemaster_full_cost[".advSearchFields"][] = "InsuranceDue";

$tdatavehiclemaster_full_cost[".tableType"] = "list";

$tdatavehiclemaster_full_cost[".printerPageOrientation"] = 0;
$tdatavehiclemaster_full_cost[".nPrinterPageScale"] = 100;

$tdatavehiclemaster_full_cost[".nPrinterSplitRecords"] = 40;

$tdatavehiclemaster_full_cost[".nPrinterPDFSplitRecords"] = 40;



$tdatavehiclemaster_full_cost[".geocodingEnabled"] = false;




	





// view page pdf
$tdatavehiclemaster_full_cost[".isViewPagePDF"] = true;
$tdatavehiclemaster_full_cost[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatavehiclemaster_full_cost[".isPrinterPagePDF"] = true;
$tdatavehiclemaster_full_cost[".nPrinterPagePDFScale"] = 100;


$tdatavehiclemaster_full_cost[".pageSize"] = 20;

$tdatavehiclemaster_full_cost[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavehiclemaster_full_cost[".strOrderBy"] = $tstrOrderBy;

$tdatavehiclemaster_full_cost[".orderindexes"] = array();

$tdatavehiclemaster_full_cost[".sqlHead"] = "SELECT ID,  RegNo,  Fleet,  `Type`,  RegDate,  Cost,  DriverAsigned,  Make,  Model,  InsuranceDue";
$tdatavehiclemaster_full_cost[".sqlFrom"] = "FROM vehiclemaster";
$tdatavehiclemaster_full_cost[".sqlWhereExpr"] = "";
$tdatavehiclemaster_full_cost[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatavehiclemaster_full_cost[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavehiclemaster_full_cost[".arrGroupsPerPage"] = $arrGPP;

$tdatavehiclemaster_full_cost[".highlightSearchResults"] = true;

$tableKeysvehiclemaster_full_cost = array();
$tableKeysvehiclemaster_full_cost[] = "ID";
$tdatavehiclemaster_full_cost[".Keys"] = $tableKeysvehiclemaster_full_cost;

$tdatavehiclemaster_full_cost[".listFields"] = array();
$tdatavehiclemaster_full_cost[".listFields"][] = "ID";
$tdatavehiclemaster_full_cost[".listFields"][] = "Fleet";
$tdatavehiclemaster_full_cost[".listFields"][] = "Type";
$tdatavehiclemaster_full_cost[".listFields"][] = "RegDate";
$tdatavehiclemaster_full_cost[".listFields"][] = "RegNo";
$tdatavehiclemaster_full_cost[".listFields"][] = "Make";
$tdatavehiclemaster_full_cost[".listFields"][] = "Model";
$tdatavehiclemaster_full_cost[".listFields"][] = "Cost";
$tdatavehiclemaster_full_cost[".listFields"][] = "DriverAsigned";
$tdatavehiclemaster_full_cost[".listFields"][] = "InsuranceDue";

$tdatavehiclemaster_full_cost[".hideMobileList"] = array();


$tdatavehiclemaster_full_cost[".viewFields"] = array();
$tdatavehiclemaster_full_cost[".viewFields"][] = "Fleet";
$tdatavehiclemaster_full_cost[".viewFields"][] = "ID";
$tdatavehiclemaster_full_cost[".viewFields"][] = "Type";
$tdatavehiclemaster_full_cost[".viewFields"][] = "RegDate";
$tdatavehiclemaster_full_cost[".viewFields"][] = "RegNo";
$tdatavehiclemaster_full_cost[".viewFields"][] = "Make";
$tdatavehiclemaster_full_cost[".viewFields"][] = "Model";
$tdatavehiclemaster_full_cost[".viewFields"][] = "Cost";
$tdatavehiclemaster_full_cost[".viewFields"][] = "DriverAsigned";
$tdatavehiclemaster_full_cost[".viewFields"][] = "InsuranceDue";

$tdatavehiclemaster_full_cost[".addFields"] = array();
$tdatavehiclemaster_full_cost[".addFields"][] = "Fleet";
$tdatavehiclemaster_full_cost[".addFields"][] = "Type";
$tdatavehiclemaster_full_cost[".addFields"][] = "RegDate";
$tdatavehiclemaster_full_cost[".addFields"][] = "RegNo";
$tdatavehiclemaster_full_cost[".addFields"][] = "Make";
$tdatavehiclemaster_full_cost[".addFields"][] = "Model";
$tdatavehiclemaster_full_cost[".addFields"][] = "Cost";
$tdatavehiclemaster_full_cost[".addFields"][] = "DriverAsigned";
$tdatavehiclemaster_full_cost[".addFields"][] = "InsuranceDue";

$tdatavehiclemaster_full_cost[".masterListFields"] = array();
$tdatavehiclemaster_full_cost[".masterListFields"][] = "Fleet";
$tdatavehiclemaster_full_cost[".masterListFields"][] = "ID";
$tdatavehiclemaster_full_cost[".masterListFields"][] = "Type";
$tdatavehiclemaster_full_cost[".masterListFields"][] = "RegDate";
$tdatavehiclemaster_full_cost[".masterListFields"][] = "RegNo";
$tdatavehiclemaster_full_cost[".masterListFields"][] = "Make";
$tdatavehiclemaster_full_cost[".masterListFields"][] = "Model";
$tdatavehiclemaster_full_cost[".masterListFields"][] = "Cost";
$tdatavehiclemaster_full_cost[".masterListFields"][] = "DriverAsigned";
$tdatavehiclemaster_full_cost[".masterListFields"][] = "InsuranceDue";

$tdatavehiclemaster_full_cost[".inlineAddFields"] = array();

$tdatavehiclemaster_full_cost[".editFields"] = array();
$tdatavehiclemaster_full_cost[".editFields"][] = "Fleet";
$tdatavehiclemaster_full_cost[".editFields"][] = "Type";
$tdatavehiclemaster_full_cost[".editFields"][] = "RegDate";
$tdatavehiclemaster_full_cost[".editFields"][] = "RegNo";
$tdatavehiclemaster_full_cost[".editFields"][] = "Make";
$tdatavehiclemaster_full_cost[".editFields"][] = "Model";
$tdatavehiclemaster_full_cost[".editFields"][] = "Cost";
$tdatavehiclemaster_full_cost[".editFields"][] = "DriverAsigned";
$tdatavehiclemaster_full_cost[".editFields"][] = "InsuranceDue";

$tdatavehiclemaster_full_cost[".inlineEditFields"] = array();

$tdatavehiclemaster_full_cost[".exportFields"] = array();
$tdatavehiclemaster_full_cost[".exportFields"][] = "Fleet";
$tdatavehiclemaster_full_cost[".exportFields"][] = "ID";
$tdatavehiclemaster_full_cost[".exportFields"][] = "Type";
$tdatavehiclemaster_full_cost[".exportFields"][] = "RegDate";
$tdatavehiclemaster_full_cost[".exportFields"][] = "RegNo";
$tdatavehiclemaster_full_cost[".exportFields"][] = "Make";
$tdatavehiclemaster_full_cost[".exportFields"][] = "Model";
$tdatavehiclemaster_full_cost[".exportFields"][] = "Cost";
$tdatavehiclemaster_full_cost[".exportFields"][] = "DriverAsigned";
$tdatavehiclemaster_full_cost[".exportFields"][] = "InsuranceDue";

$tdatavehiclemaster_full_cost[".importFields"] = array();
$tdatavehiclemaster_full_cost[".importFields"][] = "ID";
$tdatavehiclemaster_full_cost[".importFields"][] = "RegNo";
$tdatavehiclemaster_full_cost[".importFields"][] = "Fleet";
$tdatavehiclemaster_full_cost[".importFields"][] = "Type";
$tdatavehiclemaster_full_cost[".importFields"][] = "RegDate";
$tdatavehiclemaster_full_cost[".importFields"][] = "Cost";
$tdatavehiclemaster_full_cost[".importFields"][] = "DriverAsigned";
$tdatavehiclemaster_full_cost[".importFields"][] = "Make";
$tdatavehiclemaster_full_cost[".importFields"][] = "Model";
$tdatavehiclemaster_full_cost[".importFields"][] = "InsuranceDue";

$tdatavehiclemaster_full_cost[".printFields"] = array();
$tdatavehiclemaster_full_cost[".printFields"][] = "ID";
$tdatavehiclemaster_full_cost[".printFields"][] = "Fleet";
$tdatavehiclemaster_full_cost[".printFields"][] = "Type";
$tdatavehiclemaster_full_cost[".printFields"][] = "RegDate";
$tdatavehiclemaster_full_cost[".printFields"][] = "RegNo";
$tdatavehiclemaster_full_cost[".printFields"][] = "Make";
$tdatavehiclemaster_full_cost[".printFields"][] = "Model";
$tdatavehiclemaster_full_cost[".printFields"][] = "Cost";
$tdatavehiclemaster_full_cost[".printFields"][] = "DriverAsigned";
$tdatavehiclemaster_full_cost[".printFields"][] = "InsuranceDue";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_full_cost","ID"); 
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

	

	
	$tdatavehiclemaster_full_cost["ID"] = $fdata;
//	RegNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RegNo";
	$fdata["GoodName"] = "RegNo";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_full_cost","RegNo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "RegNo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegNo";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatavehiclemaster_full_cost["RegNo"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_full_cost","Fleet"); 
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
		$edata["autoCompleteFieldsOnEdit"] = 1;
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatavehiclemaster_full_cost["Fleet"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_full_cost","Type"); 
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "vehicletype";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "VehicleType";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "VehicleType";
	
		
	$edata["LookupOrderBy"] = "VehicleType";
	
		
			
		
				
	
	
		
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

	

	
	$tdatavehiclemaster_full_cost["Type"] = $fdata;
//	RegDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RegDate";
	$fdata["GoodName"] = "RegDate";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_full_cost","RegDate"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "RegDate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegDate";
	
		
		
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

	

	
	$tdatavehiclemaster_full_cost["RegDate"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_full_cost","Cost"); 
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

	

	
	$tdatavehiclemaster_full_cost["Cost"] = $fdata;
//	DriverAsigned
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DriverAsigned";
	$fdata["GoodName"] = "DriverAsigned";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_full_cost","DriverAsigned"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DriverAsigned"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DriverAsigned";
	
		
		
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

	

	
	$tdatavehiclemaster_full_cost["DriverAsigned"] = $fdata;
//	Make
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Make";
	$fdata["GoodName"] = "Make";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_full_cost","Make"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Make"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Make";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatavehiclemaster_full_cost["Make"] = $fdata;
//	Model
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Model";
	$fdata["GoodName"] = "Model";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_full_cost","Model"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Model"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Model";
	
		
		
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

	

	
	$tdatavehiclemaster_full_cost["Model"] = $fdata;
//	InsuranceDue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "InsuranceDue";
	$fdata["GoodName"] = "InsuranceDue";
	$fdata["ownerTable"] = "vehiclemaster";
	$fdata["Label"] = GetFieldLabel("vehiclemaster_full_cost","InsuranceDue"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "InsuranceDue"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InsuranceDue";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatavehiclemaster_full_cost["InsuranceDue"] = $fdata;

	
$tables_data["vehiclemaster-full-cost"]=&$tdatavehiclemaster_full_cost;
$field_labels["vehiclemaster_full_cost"] = &$fieldLabelsvehiclemaster_full_cost;
$fieldToolTips["vehiclemaster-full-cost"] = &$fieldToolTipsvehiclemaster_full_cost;
$page_titles["vehiclemaster_full_cost"] = &$pageTitlesvehiclemaster_full_cost;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vehiclemaster-full-cost"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["vehiclemaster-full-cost"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vehiclemaster_full_cost()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  RegNo,  Fleet,  `Type`,  RegDate,  Cost,  DriverAsigned,  Make,  Model,  InsuranceDue";
$proto0["m_strFrom"] = "FROM vehiclemaster";
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
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-full-cost"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "vehiclemaster-full-cost";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-full-cost"
));

$proto7["m_sql"] = "RegNo";
$proto7["m_srcTableName"] = "vehiclemaster-full-cost";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-full-cost"
));

$proto9["m_sql"] = "Fleet";
$proto9["m_srcTableName"] = "vehiclemaster-full-cost";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-full-cost"
));

$proto11["m_sql"] = "`Type`";
$proto11["m_srcTableName"] = "vehiclemaster-full-cost";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "RegDate",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-full-cost"
));

$proto13["m_sql"] = "RegDate";
$proto13["m_srcTableName"] = "vehiclemaster-full-cost";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-full-cost"
));

$proto15["m_sql"] = "Cost";
$proto15["m_srcTableName"] = "vehiclemaster-full-cost";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "DriverAsigned",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-full-cost"
));

$proto17["m_sql"] = "DriverAsigned";
$proto17["m_srcTableName"] = "vehiclemaster-full-cost";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Make",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-full-cost"
));

$proto19["m_sql"] = "Make";
$proto19["m_srcTableName"] = "vehiclemaster-full-cost";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Model",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-full-cost"
));

$proto21["m_sql"] = "Model";
$proto21["m_srcTableName"] = "vehiclemaster-full-cost";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "InsuranceDue",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-full-cost"
));

$proto23["m_sql"] = "InsuranceDue";
$proto23["m_srcTableName"] = "vehiclemaster-full-cost";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "vehiclemaster";
$proto26["m_srcTableName"] = "vehiclemaster-full-cost";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "ID";
$proto26["m_columns"][] = "RegNo";
$proto26["m_columns"][] = "Fleet";
$proto26["m_columns"][] = "Type";
$proto26["m_columns"][] = "RegDate";
$proto26["m_columns"][] = "Cost";
$proto26["m_columns"][] = "DriverAsigned";
$proto26["m_columns"][] = "Make";
$proto26["m_columns"][] = "Model";
$proto26["m_columns"][] = "InsuranceDue";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "vehiclemaster";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "vehiclemaster-full-cost";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-full-cost"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "RegNo",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-full-cost"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-full-cost"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-full-cost"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "RegDate",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-full-cost"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-full-cost"
));

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "DriverAsigned",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-full-cost"
));

$proto41["m_column"]=$obj;
$obj = new SQLGroupByItem($proto41);

$proto0["m_groupby"][]=$obj;
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "Make",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-full-cost"
));

$proto43["m_column"]=$obj;
$obj = new SQLGroupByItem($proto43);

$proto0["m_groupby"][]=$obj;
												$proto45=array();
						$obj = new SQLField(array(
	"m_strName" => "Model",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-full-cost"
));

$proto45["m_column"]=$obj;
$obj = new SQLGroupByItem($proto45);

$proto0["m_groupby"][]=$obj;
												$proto47=array();
						$obj = new SQLField(array(
	"m_strName" => "InsuranceDue",
	"m_strTable" => "vehiclemaster",
	"m_srcTableName" => "vehiclemaster-full-cost"
));

$proto47["m_column"]=$obj;
$obj = new SQLGroupByItem($proto47);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vehiclemaster-full-cost";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vehiclemaster_full_cost = createSqlQuery_vehiclemaster_full_cost();


	
										
	
$tdatavehiclemaster_full_cost[".sqlquery"] = $queryData_vehiclemaster_full_cost;

$tableEvents["vehiclemaster-full-cost"] = new eventsBase;
$tdatavehiclemaster_full_cost[".hasEvents"] = false;

?>