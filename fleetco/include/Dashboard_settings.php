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
	$fieldLabelsDashboard["English"]["fuelmaster_Id"] = "ID";
	$fieldLabelsDashboard["English"]["fuelmaster_SystemDate"] = "Sys. Date";
	$fieldLabelsDashboard["English"]["fuelmaster_FuelDate"] = "Fuel Date";
	$fieldLabelsDashboard["English"]["fuelmaster_Vehicle"] = "Vehicle";
	$fieldLabelsDashboard["English"]["fuelmaster_MeterReading"] = "Mtr.Read.";
	$fieldLabelsDashboard["English"]["fuelmaster_LitersPumped"] = "Ltr.Pump.";
	$fieldLabelsDashboard["English"]["fuelmaster_PricePerLiter"] = "Ltr.Price";
	$fieldLabelsDashboard["English"]["fuelmaster_FuelStation"] = "Fuel Stat.";
	$fieldLabelsDashboard["English"]["fuelmaster_Fleet"] = "Fleet";
	$fieldLabelsDashboard["English"]["fuelmaster_Cost"] = "Cost";
	$fieldLabelsDashboard["English"]["fuelmaster_LastMileage"] = "Last Milea.";
	$fieldLabelsDashboard["English"]["fuelmaster_Economy"] = "Economy";
	$fieldLabelsDashboard["English"]["fuelmaster_FillType"] = "Fill Type";
	$fieldLabelsDashboard["English"]["fuelmaster_CouponNo"] = "Coupon";
	$fieldLabelsDashboard["English"]["fuelmaster_Driver"] = "Driver";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDashboard[""] = array();
}

//	search fields
$tdataDashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"fuelmaster", "field"=>"Id" );
$tdataDashboard[".searchFields"]["fuelmaster_Id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"fuelmaster", "field"=>"SystemDate" );
$tdataDashboard[".searchFields"]["fuelmaster_SystemDate"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"fuelmaster", "field"=>"FuelDate" );
$tdataDashboard[".searchFields"]["fuelmaster_FuelDate"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"fuelmaster", "field"=>"Vehicle" );
$tdataDashboard[".searchFields"]["fuelmaster_Vehicle"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"fuelmaster", "field"=>"MeterReading" );
$tdataDashboard[".searchFields"]["fuelmaster_MeterReading"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"fuelmaster", "field"=>"LitersPumped" );
$tdataDashboard[".searchFields"]["fuelmaster_LitersPumped"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"fuelmaster", "field"=>"PricePerLiter" );
$tdataDashboard[".searchFields"]["fuelmaster_PricePerLiter"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"fuelmaster", "field"=>"FuelStation" );
$tdataDashboard[".searchFields"]["fuelmaster_FuelStation"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"fuelmaster", "field"=>"Fleet" );
$tdataDashboard[".searchFields"]["fuelmaster_Fleet"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"fuelmaster", "field"=>"Cost" );
$tdataDashboard[".searchFields"]["fuelmaster_Cost"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"fuelmaster", "field"=>"LastMileage" );
$tdataDashboard[".searchFields"]["fuelmaster_LastMileage"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"fuelmaster", "field"=>"Economy" );
$tdataDashboard[".searchFields"]["fuelmaster_Economy"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"fuelmaster", "field"=>"FillType" );
$tdataDashboard[".searchFields"]["fuelmaster_FillType"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"fuelmaster", "field"=>"CouponNo" );
$tdataDashboard[".searchFields"]["fuelmaster_CouponNo"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"fuelmaster", "field"=>"Driver" );
$tdataDashboard[".searchFields"]["fuelmaster_Driver"] = $dashField;

// all search fields
$tdataDashboard[".allSearchFields"] = array();
$tdataDashboard[".allSearchFields"][] = "fuelmaster_Id";
$tdataDashboard[".allSearchFields"][] = "fuelmaster_SystemDate";
$tdataDashboard[".allSearchFields"][] = "fuelmaster_FuelDate";
$tdataDashboard[".allSearchFields"][] = "fuelmaster_Vehicle";
$tdataDashboard[".allSearchFields"][] = "fuelmaster_MeterReading";
$tdataDashboard[".allSearchFields"][] = "fuelmaster_LitersPumped";
$tdataDashboard[".allSearchFields"][] = "fuelmaster_PricePerLiter";
$tdataDashboard[".allSearchFields"][] = "fuelmaster_FuelStation";
$tdataDashboard[".allSearchFields"][] = "fuelmaster_Fleet";
$tdataDashboard[".allSearchFields"][] = "fuelmaster_Cost";
$tdataDashboard[".allSearchFields"][] = "fuelmaster_LastMileage";
$tdataDashboard[".allSearchFields"][] = "fuelmaster_Economy";
$tdataDashboard[".allSearchFields"][] = "fuelmaster_FillType";
$tdataDashboard[".allSearchFields"][] = "fuelmaster_CouponNo";
$tdataDashboard[".allSearchFields"][] = "fuelmaster_Driver";

// good like search fields
$tdataDashboard[".googleLikeFields"] = array();
$tdataDashboard[".googleLikeFields"][] = "fuelmaster_Id";
$tdataDashboard[".googleLikeFields"][] = "fuelmaster_SystemDate";
$tdataDashboard[".googleLikeFields"][] = "fuelmaster_FuelDate";
$tdataDashboard[".googleLikeFields"][] = "fuelmaster_Vehicle";
$tdataDashboard[".googleLikeFields"][] = "fuelmaster_MeterReading";
$tdataDashboard[".googleLikeFields"][] = "fuelmaster_LitersPumped";
$tdataDashboard[".googleLikeFields"][] = "fuelmaster_PricePerLiter";
$tdataDashboard[".googleLikeFields"][] = "fuelmaster_FuelStation";
$tdataDashboard[".googleLikeFields"][] = "fuelmaster_Fleet";
$tdataDashboard[".googleLikeFields"][] = "fuelmaster_Cost";
$tdataDashboard[".googleLikeFields"][] = "fuelmaster_LastMileage";
$tdataDashboard[".googleLikeFields"][] = "fuelmaster_Economy";
$tdataDashboard[".googleLikeFields"][] = "fuelmaster_FillType";
$tdataDashboard[".googleLikeFields"][] = "fuelmaster_CouponNo";
$tdataDashboard[".googleLikeFields"][] = "fuelmaster_Driver";

$tdataDashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "fuelmaster_search", "table" => "fuelmaster", "type" => 4);
	$dbelement["cellName"] = "cell_0_0";
	
			

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