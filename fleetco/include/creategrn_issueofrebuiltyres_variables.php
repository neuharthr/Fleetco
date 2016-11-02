<?php
$strTableName="creategrn-issueofrebuiltyres";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="creategrn";

$gstrOrderBy="ORDER BY CurrentStock DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("creategrn-issueofrebuiltyres");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["creategrn-issueofrebuiltyres"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>