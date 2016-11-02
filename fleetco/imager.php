<?php 
include_once("include/dbcommon.php");

$table = (isset($pdf) ? @$params["table"] : postvalue("table"));

if (!checkTableName($table))
{
	exit(0);
}

include_once("include/" . $table . "_variables.php");

if(!isset($gQuery)){
	if(!isset($gSettings))
		$gSettings = new ProjectSettings( GetTableByShort( $table ) );
	$gQuery = $gSettings->getSQLQuery();
}
$file = GetImageFromDB($gQuery, isset($pdf), isset($params) ? $params : array());
?>
