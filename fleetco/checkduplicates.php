<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");

$tableName = postvalue("tableName");
$pageType = postvalue("pageType");
$fieldName = postvalue("fieldName");
$fieldControlType = postvalue("fieldControlType");
$value = postvalue("value");

if( !checkTableName($tableName) )
{
	exit(0);
}

require_once("include/".$tableName."_variables.php");

if($pageType != PAGE_REGISTER && ( !isLogged() || !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"], "Search") ))
{ 
	$returnJSON = array("success" => false, "error" => "Error: You have not permissions to read the ".$tableName." table's data");
	echo printJSON($returnJSON);
	return;
}

// set db connection
$_connection = $cman->byTable( $strTableName );

$pSet = new ProjectSettings($strTableName, $pageType);
$denyChecking = $pSet->allowDuplicateValues( $fieldName );

if( $denyChecking )
{
	$returnJSON = array("success" => false, "error" => "Duplicated values are allowed");
	echo printJSON($returnJSON);
	return;
}

$cipherer = new RunnerCipherer($strTableName, $pSet);

if( $cipherer->isFieldEncrypted($fieldName) )
	$value = $cipherer->MakeDBValue($fieldName, $value, $fieldControlType, true);	
else
	$value = make_db_value($fieldName, $value, $fieldControlType, "", $strTableName);

if( $value == "null" )
{
	$fieldSQL = RunnerPage::_getFieldSQL($fieldName, $_connection, $pSet);
}
else
{
	$fieldSQL = RunnerPage::_getFieldSQLDecrypt($fieldName, $_connection, $pSet, $cipherer);
}
$where = $fieldSQL . ( $value == "null" ? ' is ' : '=' ) . $value; 
$sql = "SELECT count(*) from ".$_connection->addTableWrappers( $pSet->getOriginalTableName() )." where ".$where;

$qResult = $_connection->query( $sql );
if( !$qResult || !($data = $qResult->fetchNumeric()) )
{
	$returnJSON = array("success" => false, "error" => "Error: Wrong SQL query");
	echo printJSON($returnJSON);
	return;
}

$hasDuplicates = $data[0] ? true : false;
$returnJSON = array("success" => true, "hasDuplicates" => $hasDuplicates, "error"=>"");	
echo printJSON($returnJSON);
return;
?>