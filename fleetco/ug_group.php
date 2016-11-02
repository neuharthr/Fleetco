<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 


if(!isLogged())
{ 
	return;
}
if(!IsAdmin())
{
	return;
}
$nonAdminTablesArr = array();
$nonAdminTablesArr[] = "inventorymaster";
$nonAdminTablesArr[] = "creategrn";
$nonAdminTablesArr[] = "vehiclemaster";
$nonAdminTablesArr[] = "creategrn-issue";
$nonAdminTablesArr[] = "inventorymaster-qty";
$nonAdminTablesArr[] = "creategrn-receive";
$nonAdminTablesArr[] = "fuelmaster";
$nonAdminTablesArr[] = "suppliermaster";
$nonAdminTablesArr[] = "accidents";
$nonAdminTablesArr[] = "maintenenace";
$nonAdminTablesArr[] = "fleettype";
$nonAdminTablesArr[] = "fuelprices";
$nonAdminTablesArr[] = "fuelstationmaster";
$nonAdminTablesArr[] = "vehicletype";
$nonAdminTablesArr[] = "servicetypemaster";
$nonAdminTablesArr[] = "insurance-payments";
$nonAdminTablesArr[] = "insuranceclaims";
$nonAdminTablesArr[] = "insurancecompany";
$nonAdminTablesArr[] = "maintenenace-regularservice";
$nonAdminTablesArr[] = "maintenenace-general-repair";
$nonAdminTablesArr[] = "maintenenace-accident-repair";
$nonAdminTablesArr[] = "vehiclemaster-report";
$nonAdminTablesArr[] = "accidents-report";
$nonAdminTablesArr[] = "carrierusers";
$nonAdminTablesArr[] = "inventorymaster-pricing";
$nonAdminTablesArr[] = "creategrn-remove";
$nonAdminTablesArr[] = "creategrn-issuetorebuild";
$nonAdminTablesArr[] = "creategrn-receiveafterrebuild";
$nonAdminTablesArr[] = "creategrn-issue-rebuilt";
$nonAdminTablesArr[] = "fuelmaster-reports";
$nonAdminTablesArr[] = "creategrn-stock-balance";
$nonAdminTablesArr[] = "rnewalmastertable";
$nonAdminTablesArr[] = "otherrenewal";
$nonAdminTablesArr[] = "creategrn-disposal";
$nonAdminTablesArr[] = "creategrn-remove-other";
$nonAdminTablesArr[] = "creategrn-disposal-rebuild";
$nonAdminTablesArr[] = "inventorymaster-pricing1";
$nonAdminTablesArr[] = "inventorymaster-pricing5";
$nonAdminTablesArr[] = "fuelmaster Chart";
$nonAdminTablesArr[] = "maintenenace Chart";

$ug_connection = $cman->getForUserGroups();

$cbxNames = array('add' => array('mask' => 'A', 'rightName' => 'add')
	, 'edt' => array('mask' => 'E', 'rightName' => 'edit')
	, 'del' => array('mask' => 'D', 'rightName' => 'delete')
	, 'lst' => array('mask' => 'S', 'rightName' => 'list')
	, 'exp' => array('mask' => 'P', 'rightName' => 'export')
	, 'imp' => array('mask' => 'I', 'rightName' => 'import')
	, 'adm' => array('mask' => 'M'));

$wGroupTableName = $ug_connection->addTableWrappers( "carrier_uggroups" );
	
switch(postvalue("a"))
{
	case "add":
		$sql = "insert into ". $wGroupTableName ." (". $ug_connection->addFieldWrappers( "Label" ) .")"
			." values (". $ug_connection->prepareString( postvalue("name") ). ")";		
		$ug_connection->exec( $sql );

		$sql = "select max(". $ug_connection->addFieldWrappers( "GroupID") .") from ". $wGroupTableName;
		$data = $ug_connection->query( $sql )->fetchNumeric();
		
		echo printJSON( array('success' => true, 'id' => $data[0]) );
		break;
		
	case "del":
		$sql = "delete from ". $wGroupTableName ." where ". $ug_connection->addFieldWrappers("GroupID") ."=".(postvalue("id")+0);
		$ug_connection->exec( $sql );
		
		$sql = "delete from ". $ug_connection->addTableWrappers( "carrier_ugrights" ) 
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue("id")+0);
		$ug_connection->exec( $sql );
		
		$sql = "delete from ".$ug_connection->addTableWrappers( "carrier_ugmembers" ) 
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue("id")+0);
		$ug_connection->exec( $sql );
		
		echo printJSON( array('success' => true) );
		break;
		
	case "rename":
		$sql = "update ". $wGroupTableName  
			." set ". $ug_connection->addFieldWrappers( "Label" ) ."=". $ug_connection->prepareString( postvalue("name") )
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue("id")+0);
		$ug_connection->exec( $sql );
		
		echo printJSON( array('success' => true) );
		break;
	
	case 'saveRights':
		$error = '';
		if( postvalue('state') )
		{	
			$allRights = array();
			$sql = "select ". $ug_connection->addFieldWrappers( "GroupID" ) 
				.", ". $ug_connection->addFieldWrappers( "TableName" ) 
				.", ". $ug_connection->addFieldWrappers( "AccessMask" ) ." from ". $wGroupTableName;
			
			$qResult = $ug_connection->query( $sql );
			// don't use fetchAssoc! because of ORACLE and PostgreSQL
			while( $rightsRow = $qResult->fetchNumeric() )
			{
				$allRights[] = $rightsRow;
			}
			
			$wRightsTableName = $ug_connection->addTableWrappers( "carrier_ugrights" );
			
			$delGroupId = 0;
			$state = my_json_decode( postvalue('state') );
			// delete all extra permissions from db
			foreach($allRights as $i => $rightValue)
			{
				$groupIDInt = (int) $rightValue[0];
				
				if($groupIDInt == $delGroupId)
					continue;
					
				//delete all extra permissions for group
				if( !array_key_exists($groupIDInt, $state) )
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt;
					$ug_connection->exec( $sql );
				}
				//delete all extra permissions for table in group
				else if(!array_key_exists(GetTableId($data[1]), $state[$groupIDInt]))
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt 
						." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=".$ug_connection->prepareString( html_special_decode($data[1]) );				
					$ug_connection->exec( $sql );
				}
			}
			
			$realTables = GetRealValues();
			foreach ($state as $groupId => $groupRights)
			{
				foreach ($groupRights as $table => $mask)
				{
					if( !array_key_exists($table, $realTables) )
						continue;
					
					$ins = true;
					foreach($allRights as $i => $rightValue)
					{	
						if($rightValue[0] == $groupId && $rightValue[1] == $realTables[$table])	
						{
							$ins = false;
							if($data[2]!= $mask)
							{
								$sql ="update". $wRightsTableName 
									." set ". $ug_connection->addFieldWrappers( "AccessMask" ) ."=". $ug_connection->prepareString( $mask )
									." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupId 
									." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=". $ug_connection->prepareString( html_special_decode($realTables[$table]) );
								$ug_connection->exec( $sql );
							}
						}
					}
					if($ins)
					{
						$sql = "insert into ". $wRightsTableName
							." (". $ug_connection->addFieldWrappers( "TableName" ) 
							.", ". $ug_connection->addFieldWrappers( "GroupID" ) 
							.", ". $ug_connection->addFieldWrappers( "AccessMask" ) .") " 
							."values (". $ug_connection->prepareString(html_special_decode($realTables[$table])) .", ". $groupId .", ". $ug_connection->prepareString($mask)  .")";
						$ug_connection->exec( $sql );
					}
					
					$error = $ug_connection->lastError();
				}
			}
		}
		
		getJSONResult($error);
		break;
		
	case 'saveMembership':
		$error = '';
		$groupId = postvalue('group');
		$realUsers = GetRealValues();
		
		$wMemebersTableName = $ug_connection->addTableWrappers( "carrier_ugmembers" );
		
		for($i = 0; $i < count($realUsers); $i++)
		{
			if( $realUsers[$i] != $_SESSION["UserID"] )
			{
				$sql = "delete from ". $wMemebersTableName ." where ". $ug_connection->addFieldWrappers( "UserName" )."=%s";
			}
			else
			{
				$sql = "delete from ". $wMemebersTableName ." where ". $ug_connection->addFieldWrappers( "UserName" ) ."=%s "
					."and ". $ug_connection->addFieldWrappers( "GroupID" ) ."<>-1";
			}
			
			$ug_connection->exec( mysprintf($sql, array( $ug_connection->prepareString( html_special_decode($realUsers[$i]) ) )) );	
		}
		
		if(postvalue('state'))
		{
			$state = my_json_decode( postvalue('state') );
			foreach ($state as $group => $users)
			{
				foreach ($users as $user)
				{
					if( !array_key_exists($user, $realUsers) )
						continue;
					
					$sql = "insert into ". $wMemebersTableName 
						." (". $ug_connection->addFieldWrappers( "UserName" ) 
						.", ". $ug_connection->addFieldWrappers( "GroupID" ) 
						.") values (". $ug_connection->prepareString( html_special_decode($realUsers[$user]) ) .", ". $group .")";
					
					$ug_connection->exec( $sql );
					
					$error = $ug_connection->lastError();
				}
			}
		}
		
		getJSONResult($error);
		break;
}

function GetTableId($name)
{
	$tbls = GetRealValues();
	for($i = 0;$i < count($tbls); $i++)
	{
		if($tbls[$i] == $name)
			return $i;
	}
	return -1;
}

/**
 * GetRealValues
 * Form array with real users or tables names
 * @return {array} array of reaf names
 */
function GetRealValues()
{
	$result = array();
	if(postvalue('realValues'))
		$realValues = my_json_decode(postvalue('realValues'));
		foreach ($realValues as $key =>$value)
			$result[$key] = $value;
	return $result;
}

/**
 * getJSONResult
 * Form result as a JSON object according of errors
 * @param {string} list of errors
 */
function getJSONResult($error)
{
	$result['success'] = $error == '';
	$result['error'] = $error;	
	echo printJSON($result);
}