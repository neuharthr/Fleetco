<?php
include_once(getabspath("classes/printpage.##@ext##"));

function DisplayMasterTableInfoForPrint_##@TABLE.strShortTableName##($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "##@TABLE.strDataSourceTable s##";
	$xt->eventsObject = getEventObject($tName);

##if @TABLE.nType==titREPORT##
	$pageType = PAGE_RPRINT;
##else##
	$pageType = PAGE_PRINT;
##endif##

	$mParams  = array();
	$mParams["xt"] = &$xt;
	$mParams["mode"] = PRINT_MASTER;
	$mParams["pageType"] = $pageType;
	$mParams["tName"] = $tName;
	$masterPage = new PrintPage($mParams);
	
	$cipherer = new RunnerCipherer( $tName );
	$settings = new ProjectSettings($tName, $pageType);
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, $pageType, $masterPage);
	
	$where = "";
	$keysAssoc = array();
	$showKeys = "";
##foreach @TABLE.arrDetailTables as @dt##
##set @t=@BUILDER.Tables{@dt}##
	if( $detailtable == "##@t.strDataSourceTable s##" )
	{
	##foreach @t.arrMasterTables{@TABLE.strDataSourceTable}.arrMasterKeys as @mk##
		$keysAssoc["##@mk s##"] = $keys[##@index##-1];
	##endfor##
	##foreach @t.arrMasterTables{@TABLE.strDataSourceTable}.arrMasterKeys as @mk##
		##if !@first##
		$where.= " and ";
		$showKeys.= " , ";
		##endif##
		$where.= RunnerPage::_getFieldSQLDecrypt("##@mk s##", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("##@mk s##", $keys[##@index##-1], "", true);
		
		##if IsShowKey(Field(@mk), TYPE_PAGE_PRINT)##
		$keyValue = runner_htmlspecialchars($keysAssoc["##@mk s##"]);
		##else##
		$keyValue = $viewControls->showDBValue("##@mk s##", $keysAssoc);
		##endif##
		$showKeys.= " ".##label @TABLE.strDataSourceTable @mk##.": ".$keyValue;
	##endfor##
		$xt->assign('showKeys', $showKeys);	
	}
##endfor##
	
	if( !$where )
		return;
	
	$str = SecuritySQL("Export", $tName );
	if( strlen($str) )
		$where.= " and ".$str;
	
	$strWhere = whereAdd( $masterQuery->m_where->toSql($masterQuery), $where );
	if( strlen($strWhere) )
		$strWhere= " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));	
	
	$keylink = "";
##foreach @TABLE.arrKeyFields as @k##
	$keylink.= "&key##@index##=".runner_htmlspecialchars(rawurlencode(@$data["##@k s##"]));
##endfor##
	
##foreach Fields as @f filter @f.bMasterPrintPage##
	$xt->assign("##@f.strName g##_mastervalue", $viewControls->showDBValue("##@f.strName s##", $data, $keylink));
	$format = $settings->getViewFormat("##@f.strName s##");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("##@f.strName s##")))
		$class = ' rnr-field-number';
		
	$xt->assign("##@f.strName g##_class", $class); // add class for field header as field value
##endfor##

	$layout = GetPageLayout("##@TABLE.strShortTableName##", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("##@TABLE.strShortTableName##", "masterprint"));
}

?>