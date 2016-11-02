<?php
$dalTablevehiclemaster = array();
$dalTablevehiclemaster["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablevehiclemaster["RegNo"] = array("type"=>200,"varname"=>"RegNo");
$dalTablevehiclemaster["Fleet"] = array("type"=>200,"varname"=>"Fleet");
$dalTablevehiclemaster["Type"] = array("type"=>200,"varname"=>"Type");
$dalTablevehiclemaster["RegDate"] = array("type"=>200,"varname"=>"RegDate");
$dalTablevehiclemaster["Cost"] = array("type"=>200,"varname"=>"Cost");
$dalTablevehiclemaster["DriverAsigned"] = array("type"=>200,"varname"=>"DriverAsigned");
$dalTablevehiclemaster["Make"] = array("type"=>200,"varname"=>"Make");
$dalTablevehiclemaster["Model"] = array("type"=>200,"varname"=>"Model");
$dalTablevehiclemaster["InsuranceDue"] = array("type"=>200,"varname"=>"InsuranceDue");
	$dalTablevehiclemaster["ID"]["key"]=true;

$dal_info["carrier_at_localhost__vehiclemaster"] = &$dalTablevehiclemaster;
?>