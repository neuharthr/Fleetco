<?php
require_once(getabspath("classes/cipherer.php"));



$tdataDashboard = array();
$tdataDashboard[".ShortName"] = "Dashboard";

//	field labels
$fieldLabelsDashboard = array();
$pageTitlesDashboard = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDashboard["English"] = array();
	$fieldLabelsDashboard["English"]["vehiclemaster_ID"] = "ID";
	$fieldLabelsDashboard["English"]["vehiclemaster_RegNo"] = "Reg No";
	$fieldLabelsDashboard["English"]["vehiclemaster_Fleet"] = "Fleet";
	$fieldLabelsDashboard["English"]["vehiclemaster_Type"] = "Type";
	$fieldLabelsDashboard["English"]["vehiclemaster_RegDate"] = "Reg Date";
	$fieldLabelsDashboard["English"]["vehiclemaster_Cost"] = "Cost";
	$fieldLabelsDashboard["English"]["vehiclemaster_DriverAsigned"] = "Driver";
	$fieldLabelsDashboard["English"]["vehiclemaster_Make"] = "Make";
	$fieldLabelsDashboard["English"]["vehiclemaster_Model"] = "Model";
	$fieldLabelsDashboard["English"]["vehiclemaster_InsuranceDue"] = "Renewal";
	$fieldLabelsDashboard["English"]["vehiclemaster_Last_Mileage"] = "Last Mileage";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDashboard[""] = array();
}

//	search fields
$tdataDashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"vehiclemaster", "field"=>"ID" );
$tdataDashboard[".searchFields"]["vehiclemaster_ID"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"vehiclemaster", "field"=>"RegNo" );
$tdataDashboard[".searchFields"]["vehiclemaster_RegNo"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"vehiclemaster", "field"=>"Fleet" );
$tdataDashboard[".searchFields"]["vehiclemaster_Fleet"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"vehiclemaster", "field"=>"Type" );
$tdataDashboard[".searchFields"]["vehiclemaster_Type"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"vehiclemaster", "field"=>"RegDate" );
$tdataDashboard[".searchFields"]["vehiclemaster_RegDate"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"vehiclemaster", "field"=>"Cost" );
$tdataDashboard[".searchFields"]["vehiclemaster_Cost"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"vehiclemaster", "field"=>"DriverAsigned" );
$tdataDashboard[".searchFields"]["vehiclemaster_DriverAsigned"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"vehiclemaster", "field"=>"Make" );
$tdataDashboard[".searchFields"]["vehiclemaster_Make"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"vehiclemaster", "field"=>"Model" );
$tdataDashboard[".searchFields"]["vehiclemaster_Model"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"vehiclemaster", "field"=>"InsuranceDue" );
$tdataDashboard[".searchFields"]["vehiclemaster_InsuranceDue"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"vehiclemaster", "field"=>"Last Mileage" );
$tdataDashboard[".searchFields"]["vehiclemaster_Last_Mileage"] = $dashField;

// all search fields
$tdataDashboard[".allSearchFields"] = array();
$tdataDashboard[".allSearchFields"][] = "vehiclemaster_ID";
$tdataDashboard[".allSearchFields"][] = "vehiclemaster_RegNo";
$tdataDashboard[".allSearchFields"][] = "vehiclemaster_Fleet";
$tdataDashboard[".allSearchFields"][] = "vehiclemaster_Type";
$tdataDashboard[".allSearchFields"][] = "vehiclemaster_RegDate";
$tdataDashboard[".allSearchFields"][] = "vehiclemaster_Cost";
$tdataDashboard[".allSearchFields"][] = "vehiclemaster_DriverAsigned";
$tdataDashboard[".allSearchFields"][] = "vehiclemaster_Make";
$tdataDashboard[".allSearchFields"][] = "vehiclemaster_Model";
$tdataDashboard[".allSearchFields"][] = "vehiclemaster_InsuranceDue";
$tdataDashboard[".allSearchFields"][] = "vehiclemaster_Last_Mileage";

// good like search fields
$tdataDashboard[".googleLikeFields"] = array();
$tdataDashboard[".googleLikeFields"][] = "vehiclemaster_ID";
$tdataDashboard[".googleLikeFields"][] = "vehiclemaster_RegNo";
$tdataDashboard[".googleLikeFields"][] = "vehiclemaster_Fleet";
$tdataDashboard[".googleLikeFields"][] = "vehiclemaster_Type";
$tdataDashboard[".googleLikeFields"][] = "vehiclemaster_RegDate";
$tdataDashboard[".googleLikeFields"][] = "vehiclemaster_Cost";
$tdataDashboard[".googleLikeFields"][] = "vehiclemaster_DriverAsigned";
$tdataDashboard[".googleLikeFields"][] = "vehiclemaster_Make";
$tdataDashboard[".googleLikeFields"][] = "vehiclemaster_Model";
$tdataDashboard[".googleLikeFields"][] = "vehiclemaster_InsuranceDue";
$tdataDashboard[".googleLikeFields"][] = "vehiclemaster_Last_Mileage";

$tdataDashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "vehiclemaster_search", "table" => "vehiclemaster", "type" => 4);
	$dbelement["cellName"] = "cell_0_0";

			

	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "maintenenace_Chart_chart", "table" => "maintenenace Chart", "type" => 1);
	$dbelement["cellName"] = "cell_0_1";

			

	$tdataDashboard[".dashElements"][] = $dbelement;

$tdataDashboard[".shortTableName"] = "Dashboard";
$tdataDashboard[".entityType"] = 4;


$tableEvents["Dashboard"] = new eventsBase;
$tdataDashboard[".hasEvents"] = false;


$tdataDashboard[".tableType"] = "dashboard";



$tdataDashboard[".addPageEvents"] = false;

$tables_data["Dashboard"]=&$tdataDashboard;
$field_labels["Dashboard"] = &$fieldLabelsDashboard;
$page_titles["Dashboard"] = &$pageTitlesDashboard;

?>