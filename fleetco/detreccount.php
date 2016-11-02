<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

$mSTable = postvalue("mSTable");
if(!checkTableName($mSTable)){
	
	$respObj = array("success"=>false, "error"=>'Wrong master short table name');
	echo (my_json_encode($respObj));
	return;
}	
require_once("include/".$mSTable."_variables.php");

$dSTable = postvalue("dSTable");
if(!checkTableName($dSTable)){
	
	$respObj = array("success"=>false, "error"=>'Wrong detail short table name');
	echo (my_json_encode($respObj));
	return;
}	
require_once("include/".$dSTable."_variables.php");

if(!isLogged() || !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{ 
	$respObj = array("success"=>false, "error"=>'');
	echo (my_json_encode($respObj));
	return;
}

require_once('include/xtempl.php');

$mKeys = my_json_decode(postvalue("mKeys"));
$mTable = postvalue("mTable");
$dTable = postvalue("dTable");
$pageType = postvalue("pageType");

$xt = new Xtempl();
//array of params for classes
$params = array("pageType" =>$pageType);
$params['xt'] = &$xt;
$params["tName"] = $mTable;
$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);
//$pageObject->init();

for($dInd = 0; $dInd < count($pageObject->allDetailsTablesArr); $dInd ++) 
{
	if($pageObject->allDetailsTablesArr[$dInd]['dDataSourceTable'] == $dTable)
		break;
}
$output = $pageObject->countDetailsRecsNoSubQ($dInd,$mKeys);

$respObj = array('success'=>true, 'recsCount'=>$output);
echo printJSON($respObj);
?>