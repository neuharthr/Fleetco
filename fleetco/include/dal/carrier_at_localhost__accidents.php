<?php
$dalTableaccidents = array();
$dalTableaccidents["Id"] = array("type"=>3,"varname"=>"Id");
$dalTableaccidents["SysDate"] = array("type"=>200,"varname"=>"SysDate");
$dalTableaccidents["Date"] = array("type"=>200,"varname"=>"Date");
$dalTableaccidents["Fleet"] = array("type"=>200,"varname"=>"Fleet");
$dalTableaccidents["Vehicle"] = array("type"=>200,"varname"=>"Vehicle");
$dalTableaccidents["Type"] = array("type"=>200,"varname"=>"Type");
$dalTableaccidents["Details"] = array("type"=>200,"varname"=>"Details");
$dalTableaccidents["Driver"] = array("type"=>200,"varname"=>"Driver");
$dalTableaccidents["Injured"] = array("type"=>200,"varname"=>"Injured");
$dalTableaccidents["Images"] = array("type"=>200,"varname"=>"Images");
$dalTableaccidents["EnteredBy"] = array("type"=>200,"varname"=>"EnteredBy");
$dalTableaccidents["DamageToVehicle"] = array("type"=>200,"varname"=>"DamageToVehicle");
$dalTableaccidents["3rdPartyDamages"] = array("type"=>200,"varname"=>"fld3rdPartyDamages");
$dalTableaccidents["Time"] = array("type"=>200,"varname"=>"Time");
$dalTableaccidents["Deaths"] = array("type"=>200,"varname"=>"Deaths");
$dalTableaccidents["Location"] = array("type"=>200,"varname"=>"Location");
$dalTableaccidents["StatusInjured"] = array("type"=>200,"varname"=>"StatusInjured");
$dalTableaccidents["Category"] = array("type"=>200,"varname"=>"Category");
	$dalTableaccidents["Id"]["key"]=true;

$dal_info["carrier_at_localhost__accidents"] = &$dalTableaccidents;
?>