<?php
$dalTablefuelmaster = array();
$dalTablefuelmaster["Id"] = array("type"=>3,"varname"=>"Id");
$dalTablefuelmaster["SystemDate"] = array("type"=>200,"varname"=>"SystemDate");
$dalTablefuelmaster["FuelDate"] = array("type"=>200,"varname"=>"FuelDate");
$dalTablefuelmaster["Vehicle"] = array("type"=>200,"varname"=>"Vehicle");
$dalTablefuelmaster["MeterReading"] = array("type"=>200,"varname"=>"MeterReading");
$dalTablefuelmaster["LitersPumped"] = array("type"=>200,"varname"=>"LitersPumped");
$dalTablefuelmaster["PricePerLiter"] = array("type"=>200,"varname"=>"PricePerLiter");
$dalTablefuelmaster["FuelStation"] = array("type"=>200,"varname"=>"FuelStation");
$dalTablefuelmaster["Fleet"] = array("type"=>200,"varname"=>"Fleet");
$dalTablefuelmaster["LastMileage"] = array("type"=>200,"varname"=>"LastMileage");
$dalTablefuelmaster["Economy"] = array("type"=>200,"varname"=>"Economy");
$dalTablefuelmaster["FillType"] = array("type"=>200,"varname"=>"FillType");
$dalTablefuelmaster["CouponNo"] = array("type"=>200,"varname"=>"CouponNo");
$dalTablefuelmaster["Driver"] = array("type"=>200,"varname"=>"Driver");
	$dalTablefuelmaster["Id"]["key"]=true;

$dal_info["carrier_at_localhost__fuelmaster"] = &$dalTablefuelmaster;
?>