<?php
$dalTableinventorymaster = array();
$dalTableinventorymaster["Id"] = array("type"=>3,"varname"=>"Id");
$dalTableinventorymaster["ItemID"] = array("type"=>200,"varname"=>"ItemID");
$dalTableinventorymaster["Brand"] = array("type"=>200,"varname"=>"Brand");
$dalTableinventorymaster["Description"] = array("type"=>200,"varname"=>"Description");
$dalTableinventorymaster["Supplier"] = array("type"=>200,"varname"=>"Supplier");
	$dalTableinventorymaster["Id"]["key"]=true;

$dal_info["carrier_at_localhost__inventorymaster"] = &$dalTableinventorymaster;
?>