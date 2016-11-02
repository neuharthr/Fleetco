<?php
$strTableName="creategrn-receiveafterrebuild";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="creategrn";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("creategrn-receiveafterrebuild");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["creategrn-receiveafterrebuild"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>