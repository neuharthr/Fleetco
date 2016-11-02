<?php
$dalTableinsuranceclaims = array();
$dalTableinsuranceclaims["Id"] = array("type"=>3,"varname"=>"Id");
$dalTableinsuranceclaims["SysDate"] = array("type"=>200,"varname"=>"SysDate");
$dalTableinsuranceclaims["Fleet"] = array("type"=>200,"varname"=>"Fleet");
$dalTableinsuranceclaims["Type"] = array("type"=>200,"varname"=>"Type");
$dalTableinsuranceclaims["VehicleNo"] = array("type"=>200,"varname"=>"VehicleNo");
$dalTableinsuranceclaims["AccidentDate"] = array("type"=>200,"varname"=>"AccidentDate");
$dalTableinsuranceclaims["Claim"] = array("type"=>200,"varname"=>"Claim");
$dalTableinsuranceclaims["EnteredBy"] = array("type"=>200,"varname"=>"EnteredBy");
$dalTableinsuranceclaims["ReceiptNo"] = array("type"=>200,"varname"=>"ReceiptNo");
$dalTableinsuranceclaims["Remarks"] = array("type"=>200,"varname"=>"Remarks");
$dalTableinsuranceclaims["insurer"] = array("type"=>200,"varname"=>"insurer");
$dalTableinsuranceclaims["Date"] = array("type"=>200,"varname"=>"Date");
	$dalTableinsuranceclaims["Id"]["key"]=true;

$dal_info["carrier_at_localhost__insuranceclaims"] = &$dalTableinsuranceclaims;
?>