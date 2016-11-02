<?php
$dalTablecarrierusers = array();
$dalTablecarrierusers["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablecarrierusers["username"] = array("type"=>200,"varname"=>"username");
$dalTablecarrierusers["password"] = array("type"=>200,"varname"=>"password");
$dalTablecarrierusers["email"] = array("type"=>200,"varname"=>"email");
$dalTablecarrierusers["fullname"] = array("type"=>200,"varname"=>"fullname");
$dalTablecarrierusers["groupid"] = array("type"=>200,"varname"=>"groupid");
$dalTablecarrierusers["active"] = array("type"=>3,"varname"=>"active");
	$dalTablecarrierusers["ID"]["key"]=true;

$dal_info["carrier_at_localhost__carrierusers"] = &$dalTablecarrierusers;
?>