<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/fuelmaster_Chart1_variables.php");

$field = postvalue('field');

	if( !isLogged() ) 
		return;	
	if( !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add") 
		&& !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search") )
	{
		return;
	}

$pageType = postvalue('pageType');
$parentCtrlsData = my_json_decode( postvalue('parentCtrlsData') );
$isExistParent = postvalue('isExistParent');
$mode = intval(postvalue('mode'));

$cipherer = new RunnerCipherer($strTableName);
$pSet = new ProjectSettings($strTableName, $pageType);

include_once getabspath("classes/controls/EditControlsContainer.php");
$editControls = new EditControlsContainer(null, $pSet, $pageType, $cipherer);
$control = $editControls->getControl($field);

$hasEmptyParent = false;
if( $isExistParent === '1' )
{
	foreach($parentCtrlsData as $value)
	{
		if( $value === '' ) 
		{
			$hasEmptyParent = true;
			break;
		}
	}
}

// if no parent
if($isExistParent === '0')
{
	// there aren't parent lookups on the page
	if( $mode == MODE_SEARCH || $mode == MODE_INLINE_ADD || $mode == MODE_ADD || $mode == MODE_EDIT || $mode == MODE_INLINE_EDIT )
		$output = $control->loadLookupContent( array(), '', false, false ); 
	else	
		$output = $control->loadLookupContent( $parentCtrlsData, '', true, false ); 
}
// if exist parent
else if($isExistParent === '1' && $hasEmptyParent)
{
	// there are parent lookups on the page one of them is empty
	if ($mode == MODE_SEARCH)
	{
		$output = $control->loadLookupContent( $parentCtrlsData, '', false, false );
	}
	elseif ($mode == MODE_EDIT || $mode == MODE_INLINE_EDIT || $mode == MODE_INLINE_ADD || $mode == MODE_ADD)
	{
		echo printJSON(array('success'=>true, 'data'=>''));
		exit();
	}
	else 
		$output = $control->loadLookupContent( $parentCtrlsData, '', true, false );		
}
else
	// there are parent lookups on the page none of them is empty
	$output = $control->loadLookupContent( $parentCtrlsData, '', true, false );	


$respObj = array('success' => true, 'data' => $output);
echo printJSON($respObj);
exit();
?>