<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/admin_rights_variables.php");

if( !Security::processAdminPageSecurity( false ) )
	return;


$tables = array();
$pageMask = array();
$table = "inventorymaster";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("inventorymaster", " " . "M - Stock Codes");
$table = "creategrn";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("creategrn", " " . "Stock Movement");
$table = "vehiclemaster";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("vehiclemaster", " " . "M - Fleet");
$table = "creategrn-issue";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("creategrn_issue", " " . "Stock Issues");
$table = "inventorymaster-qty";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("inventorymaster_qty", " " . "M - Inventory Master Sub");
$table = "creategrn-receive";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("creategrn_receive", " " . "Stock Purchases");
$table = "fuelmaster";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("fuelmaster", " " . "Fuel Records");
$table = "suppliermaster";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("suppliermaster", " " . "M - Suppliers");
$table = "accidents";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("accidents", " " . "Accident Records");
$table = "maintenenace";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("maintenenace", " " . "Maintenance Records");
$table = "fleettype";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("fleettype", " " . "M - Fleet Types");
$table = "fuelprices";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("fuelprices", " " . "M - Fuel Prices");
$table = "fuelstationmaster";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("fuelstationmaster", " " . "M - Fuel Stations");
$table = "vehicletype";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("vehicletype", " " . "M - Vehicle Types");
$table = "servicetypemaster";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("servicetypemaster", " " . "M - Service Types");
$table = "insurance-payments";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("insurance_payments", " " . "Insurance Payments");
$table = "insuranceclaims";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("insuranceclaims", " " . "Insurance Claims");
$table = "insurancecompany";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("insurancecompany", " " . "M - Insurance Companies");
$table = "maintenenace-regularservice";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("maintenenace_regularservice", " " . "Regular Maint.");
$table = "maintenenace-general-repair";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("maintenenace_general_repair", " " . "General Repair");
$table = "maintenenace-accident-repair";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("maintenenace_accident_repair", " " . "Accident Repair");
$table = "vehiclemaster-report";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("vehiclemaster_report", " " . "Fleet Report");
$table = "accidents-report";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("accidents_report", " " . "Accident Report");
$table = "carrierusers";
$mask="";
			
$pageMask[$table] = $mask;
$tables[$table] = array("carrierusers", " " . "User Management");
$table = "inventorymaster-pricing";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("inventorymaster_pricing", " " . "Inventorymaster-pricing");
$table = "creategrn-remove";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("creategrn_remove", " " . "Tyre Removals");
$table = "creategrn-issuetorebuild";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("creategrn_issuetorebuild", " " . "Send to Rebuild");
$table = "creategrn-receiveafterrebuild";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("creategrn_receiveafterrebuild", " " . "Rebuilt Receipts");
$table = "creategrn-issue-rebuilt";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("creategrn_issue_rebuilt", " " . "Rebuilt Issues");
$table = "fuelmaster-reports";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("fuelmaster_reports", " " . "Fuel Report");
$table = "creategrn-stock-balance";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("creategrn_stock_balance", " " . "Stock Balance");
$table = "rnewalmastertable";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("rnewalmastertable", " " . "M - Renewals");
$table = "otherrenewal";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("otherrenewal", " " . "Other Renewals");
$table = "creategrn-disposal";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("creategrn_disposal", " " . "Disposals");
$table = "creategrn-remove-other";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("creategrn_remove_other", " " . "Removals");
$table = "creategrn-disposal-rebuild";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("creategrn_disposal_rebuild", " " . "Rebuild Tyre Disposals");
$table = "inventorymaster-pricing1";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("inventorymaster_pricing1", " " . "Inventorymaster-pricing1");
$table = "inventorymaster-pricing5";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("inventorymaster_pricing5", " " . "Inventorymaster-pricing5");
$table = "fuelmaster Chart";
$mask="";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("fuelmaster_Chart", " " . "Fuelmaster Chart");
$table = "maintenenace Chart";
$mask="";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("maintenenace_Chart", " " . "Maintenenace Chart");




$layout = new TLayout("ug_rights", "AvenueAvenue", "MobileAvenue");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->containers["ugcontrols"] = array();
$layout->container_properties["ugcontrols"] = array(  );
$layout->containers["ugcontrols"][] = array("name"=>"ugbuttons",
	"block"=>"savebuttons_block", "substyle"=>1  );

$layout->containers["ugcontrols"][] = array("name"=>"ugrightbuttons",
	"block"=>"savebuttons_block", "substyle"=>1  );

$layout->skins["ugcontrols"] = "1";

$layout->blocks["center"][] = "ugcontrols";
$layout->containers["message"] = array();
$layout->container_properties["message"] = array(  );
$layout->containers["message"][] = array("name"=>"message",
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "1";

$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();
$layout->container_properties["grid"] = array(  );
$layout->containers["grid"][] = array("name"=>"ugrightsblock",
	"block"=>"rights_block", "substyle"=>1  );

$layout->skins["grid"] = "grid";

$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();
$layout->container_properties["pagination"] = array(  );
$layout->containers["pagination"][] = array("name"=>"pagination",
	"block"=>"pagination_block", "substyle"=>1  );

$layout->skins["pagination"] = "2";

$layout->blocks["center"][] = "pagination";
$layout->blocks["left"] = array();
$layout->containers["left"] = array();
$layout->container_properties["left"] = array(  );
$layout->containers["left"][] = array("name"=>"loggedas",
	"block"=>"security_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"vmenu",
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["left"] = "menu";

$layout->blocks["left"][] = "left";
$layout->containers["uggroup"] = array();
$layout->container_properties["uggroup"] = array(  );
$layout->containers["uggroup"][] = array("name"=>"ugrightsgroup",
	"block"=>"", "substyle"=>1  );

$layout->skins["uggroup"] = "1";

$layout->blocks["left"][] = "uggroup";
$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";

$layout->blocks["top"][] = "master";
$layout->skins["toplinks"] = "2";

$layout->blocks["top"][] = "toplinks";
$page_layouts["admin_rights_list"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



require_once('include/xtempl.php');
require_once('classes/listpage.php');
require_once('classes/rightspage.php');

$xt = new Xtempl();

$options = array();
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = RIGHTS_PAGE;
$options['xt'] = &$xt;


$options["tables"] = $tables;
$options["pageMasks"] = $pageMask;

$pageObject = ListPage::createListPage($strTableName, $options);

if( postvalue("a") == "saveRights" )
{
	$modifiedRights = my_json_decode(postvalue('values'));
	$pageObject->saveRights($modifiedRights);
	return;
}

 
// add buttons if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();
	


?>
