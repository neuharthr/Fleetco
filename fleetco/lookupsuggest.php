<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");

header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

$table = postvalue("table");
if( !checkTableName($table) )
	exit(0);

require_once("include/".$table."_variables.php");

$pageType = postvalue("pageType");
$strTableName = GetTableByShort($table);
$cipherer = new RunnerCipherer($strTableName);	
$gSettings = new ProjectSettings($strTableName, $pageType);
$field = postvalue('searchField');

// if suggest for dashboard search
if( $gSettings->getEntityType() == titDASHBOARD )
{
    $dashFields = $gSettings->getDashboardSearchFields();
    $table = GoodFieldName($dashFields[$field][0]["table"]);
    $strTableName = GetTableByShort($table);
    $field = GoodFieldName($dashFields[$field][0]["field"]);
	if (!checkTableName($table))
	{
		exit(0);
	}
	require_once("include/".$table."_variables.php");
    $cipherer = new RunnerCipherer($strTableName);
    $gSettings = new ProjectSettings($strTableName, $pageType);
}

if( $strTableName != "carrierusers" )
{
	if( !isLogged() )  
		return;	
	
	if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add") 
		&& !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
	{
		return;
	}
}
else 
{
	$checkResult = true;
	if( $field == "username" )
		$checkResult = false;

	if( $field == "password" )
		$checkResult = false;

	if( $field == "email" )
		$checkResult = false;

	if($checkResult)
	{
		if( !isLogged() )  
			return;	
			
		if( !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add") 
			&& !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search") )
		{
			return;
		}
	}
}

$isExistParent = postvalue('isExistParent');
$searchByLinkField = postvalue('searchByLinkField');
$parentCtrlsData = my_json_decode( postvalue('parentCtrlsData') );

$value = postvalue('searchFor');
$values = postvalue('multiselection') ? splitvalues($value) : array($value);


$lookupField = "";
foreach($gSettings->getFieldsList() as $f)
{
	if( GoodFieldName($f) == $field && $gSettings->getEditFormat($f) == EDIT_FORMAT_LOOKUP_WIZARD )
	{
		$LookupType = $gSettings->getLookupType($f);
		if(  $LookupType == LT_LOOKUPTABLE || $LookupType == LT_QUERY )
		{
			$lookupField = $f;
			break;
		}
	}
}

if( !$lookupField ) 
{
	$respObj = array('success' => false, 'data' => array());
	echo printJSON($respObj);
	exit();	
}


$lookupTable = $gSettings->getLookupTable($lookupField);

$linkFieldName = $gSettings->getLinkField($lookupField);
$displayFieldName = $gSettings->getDisplayField($lookupField);
$linkAndDisplaySame = $displayFieldName == $linkFieldName;

if( $LookupType == LT_QUERY )
	$lookupConnection = $cman->byTable( $lookupTable );
else
{
	$connId = $gSettings->getNotProjectLookupTableConnId( $lookupField );
	$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();		
}

$lookupOrderBy = $gSettings->getLookupOrderBy($lookupField);
if( $lookupConnection->dbType == nDATABASE_MSSQLServer )
	$strUniqueOrderBy = $lookupOrderBy;
								
if($LookupType == LT_QUERY)
{
	$lookupPSet = new ProjectSettings($lookupTable, $pageType);
	$lookupCipherer = new RunnerCipherer($lookupTable);
	$lookupQueryObj = $lookupPSet->getSQLQuery();
	
	if($gSettings->getCustomDisplay($lookupField))
		$lookupQueryObj->AddCustomExpression($displayFieldName, $lookupPSet, $strTableName, $lookupField);
	
	$lookupQueryObj->ReplaceFieldsWithDummies($lookupPSet->getBinaryFieldsIndices());
}
else
{
	$LookupSQLTable = "SELECT ";
	$lwLinkField = $lookupConnection->addFieldWrappers($gSettings->getLinkField($lookupField));
	if ($gSettings->isLookupUnique($lookupField))
	{
		$LookupSQLTable .= "DISTINCT ";
	}
	$LookupSQLTable .= $cipherer->GetLookupFieldName($lwLinkField, $lookupField, null, true);
	if( $lookupConnection->dbType == nDATABASE_MSSQLServer )
	{
		if( $strUniqueOrderBy && $gSettings->isLookupUnique($lookupField) )
			$LookupSQLTable .= ",".$lookupConnection->addFieldWrappers( $strUniqueOrderBy );
	}
	
	$lwDisplayField = RunnerPage::sqlFormattedDisplayField($lookupField, $lookupConnection, $gSettings);
	
	if(!$linkAndDisplaySame)
		$LookupSQLTable .= ",".($lwDisplayField == $lwLinkField ? $cipherer->GetFieldName($lwDisplayField, $lookupField, true) : $lwDisplayField);
	
	$LookupSQLTable .= " FROM ".$lookupConnection->addTableWrappers($lookupTable)." ";
}

$strLookupWhere = GetLWWhere($lookupField, $pageType, $strTableName);
if($LookupType == LT_QUERY)
{	
	$secOpt = $lookupPSet->getAdvancedSecurityType();
	if($secOpt == ADVSECURITY_VIEW_OWN)
		$strLookupWhere = whereAdd($strLookupWhere, SecuritySQL("Search", $lookupTable));
}
if ($strLookupWhere)
{
	$strLookupWhere = " (".$strLookupWhere.")  AND ";
}

if( $LookupType == LT_QUERY )
{
	if($gSettings->getCustomDisplay($lookupField))
		$likeField = $searchByLinkField ? $linkFieldName : $displayFieldName;
	else
		$likeField = RunnerPage::_getFieldSQLDecrypt($searchByLinkField ? $linkFieldName : $displayFieldName, $lookupConnection ,$lookupPSet, $cipherer);
}
else
	$likeField = $cipherer->GetFieldName($lwDisplayField, $lookupField);

if( $searchByLinkField ) 	
	$likeConditionField = $LookupType == LT_QUERY ? $linkFieldName : $lookupField;
else 
	$likeConditionField = $LookupType == LT_QUERY ? $displayFieldName : $lookupField;
	
$likeWheres = array();
foreach($values as $fieldValue) 
{
	if( $LookupType == LT_QUERY )
		$likeWheres[] = $likeField.$lookupCipherer->GetLikeClause($likeConditionField, $fieldValue);
	else	
		$likeWheres[] = $likeField.$cipherer->GetLikeClause($likeConditionField, $fieldValue);
}
$strLookupWhere.= implode(' OR ', $likeWheres);


if( $isExistParent && $gSettings->useCategory($lookupField) )
{
	$parentWhereParts = array();
	
	foreach( $gSettings->getParentFieldsData($lookupField) as $cData )
	{
		$arLookupWhere = array();
					
		$category = $parentCtrlsData[ $cData["main"] ];
		// convert into an array as parent ctrl can have multiple values
		$lookupCategory = $category == "" ? array() : splitvalues( $category );
		foreach($lookupCategory as $arLookupCategory)
		{
			$cvalue = make_db_value( $cData["main"] , $arLookupCategory);
			
			if( $lookupPSet )
				$catField = RunnerPage::_getFieldSQLDecrypt($cData["lookup"], $lookupConnection ,$lookupPSet, $cipherer);
			else
				$catField = $lookupConnection->addFieldWrappers($cData["lookup"]);
			
			$arLookupWhere[] = $catField . "=" . $cvalue;
		}

		if( count($arLookupWhere) )
			$parentWhereParts[] = "(".implode(" OR ", $arLookupWhere).")";
	}
	
	if( count($parentWhereParts) == count($gSettings->getParentFieldsData($lookupField)) )
		$strLookupWhere = whereAdd($strLookupWhere, "(".implode(" AND ", $parentWhereParts).")");
	else
	{
		$respObj = array('success' => false, 'data' => array());
		echo printJSON($respObj);
		exit();	
	}
}

if( strlen($lookupOrderBy) )
{
	$lookupOrderBy = $lookupConnection->addFieldWrappers($lookupOrderBy);
	if( $gSettings->isLookupDesc($lookupField) )
		$lookupOrderBy .= ' DESC';
}

if($LookupType == LT_QUERY)
{
	$LookupSQL = $lookupQueryObj->toSql(whereAdd($lookupQueryObj->m_where->toSql($lookupQueryObj), $strLookupWhere),
		strlen($lookupOrderBy) ? ' ORDER BY '.$lookupOrderBy : null);
}
else
{
	$LookupSQL = $LookupSQLTable." where ".$strLookupWhere;
	if ( !$gSettings->isLookupUnique($lookupField) || nDATABASE_Access != $lookupConnection->dbType )
	{
		if ($lookupOrderBy)
		{
			$LookupSQL.= " ORDER BY ".$lookupOrderBy;
		}
	}
}

$lookupIndices = GetLookupFieldsIndexes($gSettings, $lookupField);
$linkFieldIndex = $lookupIndices["linkFieldIndex"];
$displayFieldIndex = $lookupIndices["displayFieldIndex"];

$response = array();
$qResult = $lookupConnection->query( $LookupSQL );
while( $data = $qResult->fetchNumeric() ) 
{
	if( $LookupType == LT_QUERY && $gSettings->isLookupUnique($lookupField) )
	{
		if( !isset($uniqueArray) )
			$uniqueArray = array();
			
		if( in_array($data[ $displayFieldIndex ], $uniqueArray) )
			continue;
		
		$uniqueArray[] = $data[ $displayFieldIndex ];
	}
	
	$data[ $linkFieldIndex ] = $cipherer->DecryptField($lookupField, $data[ $linkFieldIndex ]);
	if( $LookupType == LT_QUERY )
		$data[ $displayFieldIndex ] = $cipherer->DecryptField($displayFieldName, $data[ $displayFieldIndex ]);
	
	$response[] = $data[ $linkFieldIndex ];
	$response[] = $data[ $displayFieldIndex ];
}

$respObj = array('success' => true, 'data' => array_slice($response, 0, 40));
echo printJSON($respObj);
exit();
?>