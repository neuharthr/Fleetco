<?php
$dalTablesuppliermaster = array();
$dalTablesuppliermaster["Id"] = array("type"=>3,"varname"=>"Id");
$dalTablesuppliermaster["SupplierName"] = array("type"=>200,"varname"=>"SupplierName");
$dalTablesuppliermaster["Address"] = array("type"=>200,"varname"=>"Address");
$dalTablesuppliermaster["ContactPerson"] = array("type"=>200,"varname"=>"ContactPerson");
$dalTablesuppliermaster["Telephone"] = array("type"=>200,"varname"=>"Telephone");
$dalTablesuppliermaster["Remarks"] = array("type"=>200,"varname"=>"Remarks");
	$dalTablesuppliermaster["Id"]["key"]=true;

$dal_info["carrier_at_localhost__suppliermaster"] = &$dalTablesuppliermaster;
?>