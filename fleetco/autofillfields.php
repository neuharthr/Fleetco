<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 


$mainTable = postvalue('mainTable');
$pageType = postvalue('pageType');

if (!checkTableName($mainTable))
	exit(0);
require_once("include/".$mainTable."_variables.php");

$gSettings = new ProjectSettings($strTableName, $pageType);

$mainField = postvalue('mainField');
$linkFieldName = postvalue('linkField');

if( $strTableName != "carrierusers" )
{
	if(!isLogged())  
		return;	
	
	if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")) 
		return;
}
else 
{
	$checkResult = true;
	if($mainField=="username")
		$checkResult=false;

	if($mainField=="password")
		$checkResult=false;

	if($mainField=="email")
		$checkResult=false;

	if($checkResult)
	{
		if(!isLogged()) 
			return;
			
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
			return;
	}
}
$autoCompleteFields = array();

$separatedSettings = $gSettings->isSeparate( $mainField );
if( $strTableName == "creategrn" && $mainField == "ItemCode" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Brand", 'lookupF'=>"Brand");
	$autoCompleteFields[] = array('masterF'=>"Description", 'lookupF'=>"Description");
	$autoCompleteFields[] = array('masterF'=>"Supplier", 'lookupF'=>"Supplier");
	$lookupTable = "inventorymaster";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "creategrn-issue" && $mainField == "ItemCode" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Brand", 'lookupF'=>"Brand");
	$autoCompleteFields[] = array('masterF'=>"Description", 'lookupF'=>"Description");
	$autoCompleteFields[] = array('masterF'=>"Supplier", 'lookupF'=>"Supplier");
	$autoCompleteFields[] = array('masterF'=>"CurrentStock", 'lookupF'=>"SUM(Quantity)");
	$lookupTable = "inventorymaster-qty";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "creategrn-issue" && $mainField == "PriceLink" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"UnitPrice", 'lookupF'=>"UnitPrice");
	$lookupTable = "inventorymaster-pricing";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "creategrn-receive" && $mainField == "ItemCode" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Brand", 'lookupF'=>"Brand");
	$autoCompleteFields[] = array('masterF'=>"Description", 'lookupF'=>"Description");
	$autoCompleteFields[] = array('masterF'=>"Supplier", 'lookupF'=>"Supplier");
	$lookupTable = "inventorymaster";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "fuelmaster" && $mainField == "Vehicle" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"LastMileage", 'lookupF'=>"Last Mileage");
	$autoCompleteFields[] = array('masterF'=>"Driver", 'lookupF'=>"DriverAsigned");
	$lookupTable = "vehiclemaster";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "accidents" && $mainField == "Vehicle" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Type", 'lookupF'=>"Type");
	$autoCompleteFields[] = array('masterF'=>"Driver", 'lookupF'=>"DriverAsigned");
	$lookupTable = "vehiclemaster";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "maintenenace" && $mainField == "Vehicle" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Fleet", 'lookupF'=>"Fleet");
	$autoCompleteFields[] = array('masterF'=>"Type", 'lookupF'=>"Type");
	$lookupTable = "vehiclemaster";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "insurance-payments" && $mainField == "VehicleNo" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Type", 'lookupF'=>"Type");
	$autoCompleteFields[] = array('masterF'=>"RenewalDueDate", 'lookupF'=>"InsuranceDue");
	$lookupTable = "vehiclemaster";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "insuranceclaims" && $mainField == "VehicleNo" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Type", 'lookupF'=>"Type");
	$lookupTable = "vehiclemaster";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "maintenenace-regularservice" && $mainField == "Vehicle" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Type", 'lookupF'=>"Type");
	$lookupTable = "vehiclemaster";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "maintenenace-general-repair" && $mainField == "Vehicle" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Type", 'lookupF'=>"Type");
	$lookupTable = "vehiclemaster";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "maintenenace-accident-repair" && $mainField == "Vehicle" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Type", 'lookupF'=>"Type");
	$lookupTable = "vehiclemaster";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "accidents-report" && $mainField == "Vehicle" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Fleet", 'lookupF'=>"Fleet");
	$autoCompleteFields[] = array('masterF'=>"Type", 'lookupF'=>"Type");
	$autoCompleteFields[] = array('masterF'=>"Driver", 'lookupF'=>"DriverAsigned");
	$lookupTable = "vehiclemaster";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "creategrn-remove" && $mainField == "ItemCode" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Brand", 'lookupF'=>"Brand");
	$autoCompleteFields[] = array('masterF'=>"Description", 'lookupF'=>"Description");
	$autoCompleteFields[] = array('masterF'=>"Supplier", 'lookupF'=>"Supplier");
	$lookupTable = "inventorymaster";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "creategrn-issuetorebuild" && $mainField == "ItemCode" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Brand", 'lookupF'=>"Brand");
	$autoCompleteFields[] = array('masterF'=>"Description", 'lookupF'=>"Description");
	$autoCompleteFields[] = array('masterF'=>"Supplier", 'lookupF'=>"Supplier");
	$autoCompleteFields[] = array('masterF'=>"CurrentStock", 'lookupF'=>"SUM(Quantity)");
	$lookupTable = "inventorymaster-qty";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "creategrn-receiveafterrebuild" && $mainField == "ItemCode" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Brand", 'lookupF'=>"Brand");
	$autoCompleteFields[] = array('masterF'=>"Description", 'lookupF'=>"Description");
	$autoCompleteFields[] = array('masterF'=>"Supplier", 'lookupF'=>"Supplier");
	$lookupTable = "inventorymaster-qty";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "creategrn-issue-rebuilt" && $mainField == "ItemCode" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Brand", 'lookupF'=>"Brand");
	$autoCompleteFields[] = array('masterF'=>"Description", 'lookupF'=>"Description");
	$autoCompleteFields[] = array('masterF'=>"Supplier", 'lookupF'=>"Supplier");
	$autoCompleteFields[] = array('masterF'=>"CurrentStock", 'lookupF'=>"SUM(Quantity)");
	$lookupTable = "inventorymaster-qty";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "creategrn-issue-rebuilt" && $mainField == "PriceLink" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"UnitPrice", 'lookupF'=>"UnitPrice");
	$lookupTable = "inventorymaster-pricing5";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "fuelmaster-reports" && $mainField == "Vehicle" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"LastMileage", 'lookupF'=>"Last Mileage");
	$lookupTable = "vehiclemaster";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "otherrenewal" && $mainField == "VehicleNo" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"VehicleType", 'lookupF'=>"Type");
	$lookupTable = "vehiclemaster";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "creategrn-disposal" && $mainField == "ItemCode" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Brand", 'lookupF'=>"Brand");
	$autoCompleteFields[] = array('masterF'=>"Description", 'lookupF'=>"Description");
	$autoCompleteFields[] = array('masterF'=>"Supplier", 'lookupF'=>"Supplier");
	$autoCompleteFields[] = array('masterF'=>"CurrentStock", 'lookupF'=>"SUM(Quantity)");
	$lookupTable = "inventorymaster-qty";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "creategrn-remove-other" && $mainField == "ItemCode" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Brand", 'lookupF'=>"Brand");
	$autoCompleteFields[] = array('masterF'=>"Description", 'lookupF'=>"Description");
	$autoCompleteFields[] = array('masterF'=>"Supplier", 'lookupF'=>"Supplier");
	$lookupTable = "inventorymaster";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "creategrn-disposal-rebuild" && $mainField == "ItemCode" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Brand", 'lookupF'=>"Brand");
	$autoCompleteFields[] = array('masterF'=>"Description", 'lookupF'=>"Description");
	$autoCompleteFields[] = array('masterF'=>"Supplier", 'lookupF'=>"Supplier");
	$autoCompleteFields[] = array('masterF'=>"CurrentStock", 'lookupF'=>"SUM(Quantity)");
	$lookupTable = "inventorymaster-qty";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "fuelmaster Chart" && $mainField == "Vehicle" && (!$separatedSettings || $pageType == "search" ) )
{
	$autoCompleteFields[] = array('masterF'=>"LastMileage", 'lookupF'=>"Last Mileage");
	$autoCompleteFields[] = array('masterF'=>"Driver", 'lookupF'=>"DriverAsigned");
	$lookupTable = "vehiclemaster";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "maintenenace Chart" && $mainField == "Vehicle" && (!$separatedSettings || $pageType == "search" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Fleet", 'lookupF'=>"Fleet");
	$autoCompleteFields[] = array('masterF'=>"Type", 'lookupF'=>"Type");
	$lookupTable = "vehiclemaster";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}

$nLookupType = $gSettings->getLookupType($mainField);
$cipherer = new RunnerCipherer($nLookupType == LT_QUERY ? $lookupTable : $strTableName);
$linkFieldVal = postvalue('linkFieldVal');
$linkFieldVal = $cipherer->MakeDBValue($nLookupType == LT_QUERY ? $linkFieldName : $mainField, $linkFieldVal, "", true);
$strLookupWhere = GetLWWhere($mainField, $pageType, $strTableName);

if($nLookupType == LT_QUERY)
{
	$lookupSettings = new ProjectSettings($lookupTable, $pageType);
	$lookupQueryObj = $lookupSettings->getSQLQuery();
	$lookupQueryObj->ReplaceFieldsWithDummies($lookupSettings->getBinaryFieldsIndices());
	$strWhere = whereAdd($lookupQueryObj->m_where->toSql($lookupQueryObj), 
		RunnerPage::_getFieldSQLDecrypt( $linkFieldName, $lookupConnection, $lookupSettings, $cipherer ).'='.$linkFieldVal);
	$strWhere = whereAdd($strWhere, $strLookupWhere);
	$strSQL = $lookupQueryObj->toSql(whereAdd($lookupQueryObj->m_where->toSql($lookupQueryObj), $strWhere));
}
else
{
	$strSQL = 'SELECT ';
	for($i=0; $i<count($autoCompleteFields); $i++)
	{
		$strSQL .= $lookupConnection->addFieldWrappers( $autoCompleteFields[$i]['lookupF'] ).', ';
	}
	$strSQL = substr($strSQL, 0, strlen($strSQL)-2);
	
	$strSQL .= " FROM ".$lookupConnection->addTableWrappers($lookupTable);
	$linkFieldName = $cipherer->GetLookupFieldName( $lookupConnection->addFieldWrappers($linkFieldName), $mainField );
	$strWhere = $linkFieldName.'='.$linkFieldVal;
	$strWhere = whereAdd($strWhere, $strLookupWhere);
	$strSQL .= " WHERE ".$strWhere;
}

$row = $lookupConnection->query( $strSQL )->fetchAssoc();
if($nLookupType == LT_QUERY)
	$row =  $cipherer->DecryptFetchedArray( $row );

$lookupConnection->close();	
	
if( !$row )
	$row = array($mainField=>'');
	
echo printJSON(array('success'=>true, 'data'=>$row));
exit();
?>