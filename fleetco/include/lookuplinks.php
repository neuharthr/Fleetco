<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["suppliermaster"]["inventorymaster.Supplier"]["edit"] = array("table" => "inventorymaster", "field" => "Supplier", "page" => "edit");
	$lookupTableLinks["inventorymaster"]["creategrn.ItemCode"]["edit"] = array("table" => "creategrn", "field" => "ItemCode", "page" => "edit");
	$lookupTableLinks["suppliermaster"]["creategrn.Supplier"]["edit"] = array("table" => "creategrn", "field" => "Supplier", "page" => "edit");
	$lookupTableLinks["vehiclemaster"]["creategrn.RemovedFrom"]["edit"] = array("table" => "creategrn", "field" => "RemovedFrom", "page" => "edit");
	$lookupTableLinks["fleettype"]["creategrn.Fleet"]["edit"] = array("table" => "creategrn", "field" => "Fleet", "page" => "edit");
	$lookupTableLinks["fleettype"]["vehiclemaster.Fleet"]["edit"] = array("table" => "vehiclemaster", "field" => "Fleet", "page" => "edit");
	$lookupTableLinks["vehicletype"]["vehiclemaster.Type"]["edit"] = array("table" => "vehiclemaster", "field" => "Type", "page" => "edit");
	$lookupTableLinks["inventorymaster-qty"]["creategrn_issue.ItemCode"]["edit"] = array("table" => "creategrn-issue", "field" => "ItemCode", "page" => "edit");
	$lookupTableLinks["vehiclemaster"]["creategrn_issue.RemovedFrom"]["edit"] = array("table" => "creategrn-issue", "field" => "RemovedFrom", "page" => "edit");
	$lookupTableLinks["fleettype"]["creategrn_issue.Fleet"]["edit"] = array("table" => "creategrn-issue", "field" => "Fleet", "page" => "edit");
	$lookupTableLinks["inventorymaster-pricing"]["creategrn_issue.PriceLink"]["edit"] = array("table" => "creategrn-issue", "field" => "PriceLink", "page" => "edit");
	$lookupTableLinks["inventorymaster"]["creategrn_receive.ItemCode"]["edit"] = array("table" => "creategrn-receive", "field" => "ItemCode", "page" => "edit");
	$lookupTableLinks["vehiclemaster"]["creategrn_receive.RemovedFrom"]["edit"] = array("table" => "creategrn-receive", "field" => "RemovedFrom", "page" => "edit");
	$lookupTableLinks["fleettype"]["creategrn_receive.Fleet"]["edit"] = array("table" => "creategrn-receive", "field" => "Fleet", "page" => "edit");
	$lookupTableLinks["vehiclemaster"]["fuelmaster.Vehicle"]["edit"] = array("table" => "fuelmaster", "field" => "Vehicle", "page" => "edit");
	$lookupTableLinks["fuelprices"]["fuelmaster.PricePerLiter"]["edit"] = array("table" => "fuelmaster", "field" => "PricePerLiter", "page" => "edit");
	$lookupTableLinks["fuelstationmaster"]["fuelmaster.FuelStation"]["edit"] = array("table" => "fuelmaster", "field" => "FuelStation", "page" => "edit");
	$lookupTableLinks["fleettype"]["fuelmaster.Fleet"]["edit"] = array("table" => "fuelmaster", "field" => "Fleet", "page" => "edit");
	$lookupTableLinks["fleettype"]["accidents.Fleet"]["edit"] = array("table" => "accidents", "field" => "Fleet", "page" => "edit");
	$lookupTableLinks["vehiclemaster"]["accidents.Vehicle"]["edit"] = array("table" => "accidents", "field" => "Vehicle", "page" => "edit");
	$lookupTableLinks["vehiclemaster"]["maintenenace.Vehicle"]["edit"] = array("table" => "maintenenace", "field" => "Vehicle", "page" => "edit");
	$lookupTableLinks["suppliermaster"]["maintenenace.Supplier"]["edit"] = array("table" => "maintenenace", "field" => "Supplier", "page" => "edit");
	$lookupTableLinks["servicetypemaster"]["maintenenace.MaintType"]["edit"] = array("table" => "maintenenace", "field" => "MaintType", "page" => "edit");
	$lookupTableLinks["fleettype"]["insurance_payments.Fleet"]["edit"] = array("table" => "insurance-payments", "field" => "Fleet", "page" => "edit");
	$lookupTableLinks["vehiclemaster"]["insurance_payments.VehicleNo"]["edit"] = array("table" => "insurance-payments", "field" => "VehicleNo", "page" => "edit");
	$lookupTableLinks["insurancecompany"]["insurance_payments.Insurer"]["edit"] = array("table" => "insurance-payments", "field" => "Insurer", "page" => "edit");
	$lookupTableLinks["fleettype"]["insuranceclaims.Fleet"]["edit"] = array("table" => "insuranceclaims", "field" => "Fleet", "page" => "edit");
	$lookupTableLinks["vehiclemaster"]["insuranceclaims.VehicleNo"]["edit"] = array("table" => "insuranceclaims", "field" => "VehicleNo", "page" => "edit");
	$lookupTableLinks["accidents"]["insuranceclaims.AccidentDate"]["edit"] = array("table" => "insuranceclaims", "field" => "AccidentDate", "page" => "edit");
	$lookupTableLinks["insurancecompany"]["insuranceclaims.insurer"]["edit"] = array("table" => "insuranceclaims", "field" => "insurer", "page" => "edit");
	$lookupTableLinks["fleettype"]["maintenenace_regularservice.Fleet"]["edit"] = array("table" => "maintenenace-regularservice", "field" => "Fleet", "page" => "edit");
	$lookupTableLinks["vehiclemaster"]["maintenenace_regularservice.Vehicle"]["edit"] = array("table" => "maintenenace-regularservice", "field" => "Vehicle", "page" => "edit");
	$lookupTableLinks["suppliermaster"]["maintenenace_regularservice.Supplier"]["edit"] = array("table" => "maintenenace-regularservice", "field" => "Supplier", "page" => "edit");
	$lookupTableLinks["servicetypemaster"]["maintenenace_regularservice.MaintType"]["edit"] = array("table" => "maintenenace-regularservice", "field" => "MaintType", "page" => "edit");
	$lookupTableLinks["fleettype"]["maintenenace_general_repair.Fleet"]["edit"] = array("table" => "maintenenace-general-repair", "field" => "Fleet", "page" => "edit");
	$lookupTableLinks["vehiclemaster"]["maintenenace_general_repair.Vehicle"]["edit"] = array("table" => "maintenenace-general-repair", "field" => "Vehicle", "page" => "edit");
	$lookupTableLinks["suppliermaster"]["maintenenace_general_repair.Supplier"]["edit"] = array("table" => "maintenenace-general-repair", "field" => "Supplier", "page" => "edit");
	$lookupTableLinks["accidents"]["maintenenace_general_repair.AccidentRef"]["edit"] = array("table" => "maintenenace-general-repair", "field" => "AccidentRef", "page" => "edit");
	$lookupTableLinks["fleettype"]["maintenenace_accident_repair.Fleet"]["edit"] = array("table" => "maintenenace-accident-repair", "field" => "Fleet", "page" => "edit");
	$lookupTableLinks["vehiclemaster"]["maintenenace_accident_repair.Vehicle"]["edit"] = array("table" => "maintenenace-accident-repair", "field" => "Vehicle", "page" => "edit");
	$lookupTableLinks["suppliermaster"]["maintenenace_accident_repair.Supplier"]["edit"] = array("table" => "maintenenace-accident-repair", "field" => "Supplier", "page" => "edit");
	$lookupTableLinks["accidents"]["maintenenace_accident_repair.AccidentRef"]["edit"] = array("table" => "maintenenace-accident-repair", "field" => "AccidentRef", "page" => "edit");
	$lookupTableLinks["fleettype"]["vehiclemaster_report.Fleet"]["edit"] = array("table" => "vehiclemaster-report", "field" => "Fleet", "page" => "edit");
	$lookupTableLinks["vehicletype"]["vehiclemaster_report.Type"]["edit"] = array("table" => "vehiclemaster-report", "field" => "Type", "page" => "edit");
	$lookupTableLinks["vehiclemaster"]["accidents_report.Vehicle"]["edit"] = array("table" => "accidents-report", "field" => "Vehicle", "page" => "edit");
	$lookupTableLinks["inventorymaster"]["creategrn_remove.ItemCode"]["edit"] = array("table" => "creategrn-remove", "field" => "ItemCode", "page" => "edit");
	$lookupTableLinks["vehiclemaster"]["creategrn_remove.RemovedFrom"]["edit"] = array("table" => "creategrn-remove", "field" => "RemovedFrom", "page" => "edit");
	$lookupTableLinks["fleettype"]["creategrn_remove.Fleet"]["edit"] = array("table" => "creategrn-remove", "field" => "Fleet", "page" => "edit");
	$lookupTableLinks["inventorymaster-qty"]["creategrn_issuetorebuild.ItemCode"]["edit"] = array("table" => "creategrn-issuetorebuild", "field" => "ItemCode", "page" => "edit");
	$lookupTableLinks["vehiclemaster"]["creategrn_issuetorebuild.RemovedFrom"]["edit"] = array("table" => "creategrn-issuetorebuild", "field" => "RemovedFrom", "page" => "edit");
	$lookupTableLinks["fleettype"]["creategrn_issuetorebuild.Fleet"]["edit"] = array("table" => "creategrn-issuetorebuild", "field" => "Fleet", "page" => "edit");
	$lookupTableLinks["inventorymaster-pricing"]["creategrn_issuetorebuild.PriceLink"]["edit"] = array("table" => "creategrn-issuetorebuild", "field" => "PriceLink", "page" => "edit");
	$lookupTableLinks["inventorymaster-qty"]["creategrn_receiveafterrebuild.ItemCode"]["edit"] = array("table" => "creategrn-receiveafterrebuild", "field" => "ItemCode", "page" => "edit");
	$lookupTableLinks["vehiclemaster"]["creategrn_receiveafterrebuild.RemovedFrom"]["edit"] = array("table" => "creategrn-receiveafterrebuild", "field" => "RemovedFrom", "page" => "edit");
	$lookupTableLinks["fleettype"]["creategrn_receiveafterrebuild.Fleet"]["edit"] = array("table" => "creategrn-receiveafterrebuild", "field" => "Fleet", "page" => "edit");
	$lookupTableLinks["inventorymaster-qty"]["creategrn_issue_rebuilt.ItemCode"]["edit"] = array("table" => "creategrn-issue-rebuilt", "field" => "ItemCode", "page" => "edit");
	$lookupTableLinks["vehiclemaster"]["creategrn_issue_rebuilt.RemovedFrom"]["edit"] = array("table" => "creategrn-issue-rebuilt", "field" => "RemovedFrom", "page" => "edit");
	$lookupTableLinks["fleettype"]["creategrn_issue_rebuilt.Fleet"]["edit"] = array("table" => "creategrn-issue-rebuilt", "field" => "Fleet", "page" => "edit");
	$lookupTableLinks["inventorymaster-pricing5"]["creategrn_issue_rebuilt.PriceLink"]["edit"] = array("table" => "creategrn-issue-rebuilt", "field" => "PriceLink", "page" => "edit");
	$lookupTableLinks["vehiclemaster"]["fuelmaster_reports.Vehicle"]["edit"] = array("table" => "fuelmaster-reports", "field" => "Vehicle", "page" => "edit");
	$lookupTableLinks["fuelprices"]["fuelmaster_reports.PricePerLiter"]["edit"] = array("table" => "fuelmaster-reports", "field" => "PricePerLiter", "page" => "edit");
	$lookupTableLinks["fuelstationmaster"]["fuelmaster_reports.FuelStation"]["edit"] = array("table" => "fuelmaster-reports", "field" => "FuelStation", "page" => "edit");
	$lookupTableLinks["fleettype"]["fuelmaster_reports.Fleet"]["edit"] = array("table" => "fuelmaster-reports", "field" => "Fleet", "page" => "edit");
	$lookupTableLinks["suppliermaster"]["creategrn_stock_balance.Supplier"]["edit"] = array("table" => "creategrn-stock-balance", "field" => "Supplier", "page" => "edit");
	$lookupTableLinks["fleettype"]["otherrenewal.Fleet"]["edit"] = array("table" => "otherrenewal", "field" => "Fleet", "page" => "edit");
	$lookupTableLinks["vehiclemaster"]["otherrenewal.VehicleNo"]["edit"] = array("table" => "otherrenewal", "field" => "VehicleNo", "page" => "edit");
	$lookupTableLinks["rnewalmastertable"]["otherrenewal.PaymentType"]["edit"] = array("table" => "otherrenewal", "field" => "PaymentType", "page" => "edit");
	$lookupTableLinks["inventorymaster-qty"]["creategrn_disposal.ItemCode"]["edit"] = array("table" => "creategrn-disposal", "field" => "ItemCode", "page" => "edit");
	$lookupTableLinks["vehiclemaster"]["creategrn_disposal.RemovedFrom"]["edit"] = array("table" => "creategrn-disposal", "field" => "RemovedFrom", "page" => "edit");
	$lookupTableLinks["fleettype"]["creategrn_disposal.Fleet"]["edit"] = array("table" => "creategrn-disposal", "field" => "Fleet", "page" => "edit");
	$lookupTableLinks["inventorymaster-pricing"]["creategrn_disposal.PriceLink"]["edit"] = array("table" => "creategrn-disposal", "field" => "PriceLink", "page" => "edit");
	$lookupTableLinks["inventorymaster"]["creategrn_remove_other.ItemCode"]["edit"] = array("table" => "creategrn-remove-other", "field" => "ItemCode", "page" => "edit");
	$lookupTableLinks["vehiclemaster"]["creategrn_remove_other.RemovedFrom"]["edit"] = array("table" => "creategrn-remove-other", "field" => "RemovedFrom", "page" => "edit");
	$lookupTableLinks["fleettype"]["creategrn_remove_other.Fleet"]["edit"] = array("table" => "creategrn-remove-other", "field" => "Fleet", "page" => "edit");
	$lookupTableLinks["inventorymaster-qty"]["creategrn_disposal_rebuild.ItemCode"]["edit"] = array("table" => "creategrn-disposal-rebuild", "field" => "ItemCode", "page" => "edit");
	$lookupTableLinks["vehiclemaster"]["creategrn_disposal_rebuild.RemovedFrom"]["edit"] = array("table" => "creategrn-disposal-rebuild", "field" => "RemovedFrom", "page" => "edit");
	$lookupTableLinks["fleettype"]["creategrn_disposal_rebuild.Fleet"]["edit"] = array("table" => "creategrn-disposal-rebuild", "field" => "Fleet", "page" => "edit");
	$lookupTableLinks["inventorymaster-pricing"]["creategrn_disposal_rebuild.PriceLink"]["edit"] = array("table" => "creategrn-disposal-rebuild", "field" => "PriceLink", "page" => "edit");
	$lookupTableLinks["vehiclemaster"]["fuelmaster_Chart.Vehicle"]["search"] = array("table" => "fuelmaster Chart", "field" => "Vehicle", "page" => "search");
	$lookupTableLinks["fleettype"]["fuelmaster_Chart.Fleet"]["search"] = array("table" => "fuelmaster Chart", "field" => "Fleet", "page" => "search");
	$lookupTableLinks["fleettype"]["maintenenace_Chart.Fleet"]["search"] = array("table" => "maintenenace Chart", "field" => "Fleet", "page" => "search");
	$lookupTableLinks["vehiclemaster"]["maintenenace_Chart.Vehicle"]["search"] = array("table" => "maintenenace Chart", "field" => "Vehicle", "page" => "search");
	$lookupTableLinks["servicetypemaster"]["maintenenace_Chart.MaintType"]["search"] = array("table" => "maintenenace Chart", "field" => "MaintType", "page" => "search");
}

?>