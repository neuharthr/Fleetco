<?php
$strTableName="inventorymaster-pricing";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="inventorymaster";

$gstrOrderBy="ORDER BY creategrn.ID DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("inventorymaster-pricing");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["inventorymaster-pricing"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>