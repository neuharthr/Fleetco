<?php
$dalTablefuelprices = array();
$dalTablefuelprices["Id"] = array("type"=>3,"varname"=>"Id");
$dalTablefuelprices["FuelType"] = array("type"=>200,"varname"=>"FuelType");
$dalTablefuelprices["PricePerLiter"] = array("type"=>200,"varname"=>"PricePerLiter");
	$dalTablefuelprices["Id"]["key"]=true;

$dal_info["carrier_at_localhost__fuelprices"] = &$dalTablefuelprices;
?>