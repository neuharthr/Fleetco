<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("classes/searchclause.php");
require_once("classes/sql.php");

require_once("include/maintenenace_other_maintain_variables.php");

if( !Security::processPageSecurity( $strtablename, 'P' ) )
	return;




$layout = new TLayout("export", "AvenueAvenue", "MobileAvenue");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["export"] = array();
$layout->container_properties["export"] = array(  );
$layout->containers["export"][] = array("name"=>"exportheader", 
	"block"=>"", "substyle"=>2  );

$layout->containers["export"][] = array("name"=>"exprange", 
	"block"=>"range_block", "substyle"=>1  );

$layout->containers["export"][] = array("name"=>"expoutput", 
	"block"=>"", "substyle"=>1  );

$layout->containers["export"][] = array("name"=>"expbuttons", 
	"block"=>"", "substyle"=>2  );

$layout->skins["export"] = "fields";

$layout->blocks["top"][] = "export";
$page_layouts["maintenenace_other_maintain_export"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



require_once("include/export_functions.php");
require_once("classes/exportpage.php");
require_once('include/xtempl.php');

$xt = new Xtempl();
$id = postvalue("id");
$id = $id != "" ? $id : 1;

$xt->assign("groupExcel", true);

//array of params for classes
$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["tName"] = $strTableName;
$params["pageType"] = PAGE_EXPORT;

if( !$eventObj->exists("ListGetRowCount") && !$eventObj->exists("ListQuery") )
	$params["needSearchClauseObj"] = false;

$pageObject = new ExportPage($params);
$pageObject->init();

//	Before Process event
if( $eventObj->exists("BeforeProcessExport") )
	$eventObj->BeforeProcessExport( $pageObject );

$strWhereClause = "";
$strHavingClause = "";
$strSearchCriteria = "and";
$selected_recs = array();
$options = true;
	
if( @$_REQUEST["a"] != "" )
{
	$options = false;
	$sWhere = "1=0";	

	//	process selection
	$selected_recs = array();
	if (@$_REQUEST["mdelete"])
	{
		foreach(@$_REQUEST["mdelete"] as $ind)
		{
			$keys=array();
			$keys["Id"] = refine($_REQUEST["mdelete1"][mdeleteIndex($ind)]);
			$selected_recs[] = $keys;
		}
	}
	elseif(@$_REQUEST["selection"])
	{
		foreach(@$_REQUEST["selection"] as $keyblock)
		{
			$arr = explode("&", refine($keyblock));
			if( count($arr) < 1 )
				continue;
				
			$keys = array();
			$keys["Id"] = urldecode($arr[0]);
			$selected_recs[] = $keys;
		}
	}

	foreach($selected_recs as $keys)
	{
		$sWhere = $sWhere . " or ";
		$sWhere.= KeyWhere($keys);
	}


	$strSQL = $gQuery->gSQLWhere($sWhere);
	$strWhereClause = $sWhere;
	
	$_SESSION[$strTableName."_SelectedSQL"] = $strSQL;
	$_SESSION[$strTableName."_SelectedWhere"] = $sWhere;
	$_SESSION[$strTableName."_SelectedRecords"] = $selected_recs;
}

if( $_SESSION[$strTableName."_SelectedSQL"] != "" && @$_REQUEST["records"] == "" ) 
{
	$strSQL = $_SESSION[$strTableName."_SelectedSQL"];
	$strWhereClause = @$_SESSION[$strTableName."_SelectedWhere"];
	$selected_recs = $_SESSION[$strTableName."_SelectedRecords"];
}
else
{
	$strWhereClause = @$_SESSION[$strTableName."_where"];
	$strHavingClause = @$_SESSION[$strTableName."_having"];
	$strSearchCriteria = @$_SESSION[$strTableName."_criteria"];
	$joinFromPart = @$_SESSION[$strTableName."_joinFromPart"];

	$strSQL = SQLQuery::gSQLWhere_having($gQuery->HeadToSql(), $gQuery->FromToSql().$joinFromPart, $gQuery->WhereToSql(),
			$gQuery->GroupByToSql(), $gQuery->Having()->toSql($gQuery), $strWhereClause, $strHavingClause, $strSearchCriteria);		
}

if( @$_REQUEST["type"] )
{	
	//	order by
	$strOrderBy = $_SESSION[$strTableName."_order"];
	if( !$strOrderBy )
		$strOrderBy = $gstrOrderBy;
		
	$strSQL.= " ".trim($strOrderBy);

	$strSQLbak = $strSQL;
	if( $eventObj->exists("BeforeQueryExport") )
		$eventObj->BeforeQueryExport($strSQL, $strWhereClause, $strOrderBy, $pageObject);
	
	//	Rebuild SQL if needed
	if( $strSQL != $strSQLbak )
	{
		//	changed $strSQL - old style	
		$numrows = GetRowCount($strSQL, $pageObject->connection);
	}
	else
	{
		$strSQL = SQLQuery::gSQLWhere_having($gQuery->HeadToSql(), $gQuery->FromToSql().$joinFromPart, $gQuery->WhereToSql(),
			$gQuery->GroupByToSql(), $gQuery->Having()->toSql($gQuery), $strWhereClause, $strHavingClause, $strSearchCriteria);
			
		$strSQL.= " ".trim($strOrderBy);
		
		$rowcount = false;
		if( $eventObj->exists("ListGetRowCount") )
		{
			$masterKeysReq = array();
			for($i = 0; $i < count($pageObject->detailKeysByM); $i ++)
			{
				$masterKeysReq[] = $_SESSION[$strTableName."_masterkey".($i + 1)];
			}
			$rowcount = $eventObj->ListGetRowCount($pageObject->searchClauseObj, $_SESSION[$strTableName."_mastertable"], $masterKeysReq, $selected_recs, $pageObject);
		}
		
		if($rowcount !== false)
			$numrows = $rowcount;
		else
		{
			$numrows = SQLQuery::gSQLRowCount_int($gQuery->HeadToSql(), $gQuery->FromToSql().$joinFromPart, $gQuery->WhereToSql(), $gQuery->GroupByToSql(),
				$gQuery->Having()->toSql($gQuery), $strWhereClause, $strHavingClause, $pageObject->connection, $strSearchCriteria);
		}
	}
	LogInfo($strSQL);

	//	 Pagination:
	$mypage = 1;
	$nPageSize = 0;
	if( @$_REQUEST["records"] == "page" && $numrows )
	{
		$mypage = (integer)@$_SESSION[$strTableName."_pagenumber"];
		$nPageSize = (integer)@$_SESSION[$strTableName."_pagesize"];
		
		if( !$nPageSize )
			$nPageSize = $gSettings->getInitialPageSize();
				
		if( $nPageSize < 0 )
			$nPageSize = 0;
			
		if( $nPageSize > 0 )
		{
			if( $numrows <= ($mypage - 1) * $nPageSize )
				$mypage = ceil($numrows / $nPageSize);
		
			if( !$mypage )
				$mypage = 1;
		}
	}
	
	$listarray = null;
	if( $eventObj->exists("ListQuery") )
	{
		$arrFieldForSort = array();
		$arrHowFieldSort = array();
		
		require_once getabspath('classes/orderclause.php');
		$fieldList = unserialize($_SESSION[$strTableName."_orderFieldsList"]);
		for($i = 0; $i < count($fieldList); $i++)
		{
			$arrFieldForSort[] = $fieldList[$i]->fieldIndex; 
			$arrHowFieldSort[] = $fieldList[$i]->orderDirection; 
		}
		$listarray = $eventObj->ListQuery($pageObject->searchClauseObj, $arrFieldForSort, $arrHowFieldSort,
			$_SESSION[$strTableName."_mastertable"], $masterKeysReq, $selected_recs, $nPageSize, $mypage, $pageObject);
	}
	
	if( $listarray != null )
		$rs = $listarray;
	else
		$rs = $pageObject->connection->queryPage( $strSQL, $mypage, $nPageSize, $nPageSize > 0 );


	if(!ini_get("safe_mode"))
		set_time_limit(300);
	
	$pageObject->exportTo( @$_REQUEST["type"], $rs, $nPageSize );	
	$pageObject->connection->close();
	exit();
}

if($options)
{
	$xt->assign("rangeheader_block", true);
	$xt->assign("range_block", true);
}
$xt->assign("exportlink_attrs", 'id="saveButton'.$pageObject->id.'"');

// add button events if exist
$pageObject->addButtonHandlers();
$pageObject->addCommonJs();
$pageObject->addCommonHtml();

$templatefile = $pageObject->templatefile;

if( $eventObj->exists("BeforeShowExport") )
	$eventObj->BeforeShowExport($xt, $templatefile, $pageObject);
	
$pageObject->display( $templatefile );
?>
