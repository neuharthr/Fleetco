<?php
function DisplayMasterTableInfo_##@TABLE.strShortTableName##($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	$data = $params["masterRecordData"];
	
	$xt = new Xtempl();
	$tName = "##@TABLE.strDataSourceTable s##";
	$xt->eventsObject = getEventObject($tName);
	
	include_once('classes/listpage.##@ext##');
	include_once('classes/listpage_simple.##@ext##');
	$mParams  = array();
	$mParams["xt"] = &$xt;
	$mParams["mode"] = LIST_MASTER;
	$mParams["pageType"] = PAGE_REPORT;
	$mParams["flyId"] = $params["recId"];
	$masterPage = ListPage::createListPage($tName, $mParams);
	
	$settings = $masterPage->pSet;
	$viewControls = new ViewControlsContainer($settings, PAGE_REPORT, $masterPage);
	
	$keysAssoc = array();
	$showKeys = "";
	
##foreach @TABLE.arrDetailTables as @dt##
##set @t=@BUILDER.Tables{@dt}##
	if($detailtable == "##@t.strDataSourceTable s##")
	{
	##foreach @t.arrMasterTables{@TABLE.strDataSourceTable}.arrMasterKeys as @mk##
		$keysAssoc["##@mk s##"] = $keys[##@index##-1];
	##endfor##
	##foreach @t.arrMasterTables{@TABLE.strDataSourceTable}.arrMasterKeys as @mk##
		##if !@first##
		$showKeys.= " , ";
		##endif##
		##if IsShowKey(Field(@mk), TYPE_PAGE_REPORT)##
		$keyValue = runner_htmlspecialchars($keysAssoc["##@mk s##"]);
		##else##
		$keyValue = $viewControls->showDBValue("##@mk s##", $keysAssoc);
		##endif##
		$showKeys.= " ".##label @TABLE.strDataSourceTable @mk##.": ".$keyValue;
	##endfor##
		$xt->assign('showKeys', $showKeys);
	}
	##endfor##
	
	if( !$data || !count($data) )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));		
	
	$keylink = "";
##foreach @TABLE.arrKeyFields as @k##
	$keylink.="&key##@index##=".runner_htmlspecialchars(rawurlencode(@$data["##@k s##"]));
##endfor##
	
##foreach Fields as @f filter @f.bMasterListPage##
	##if GetViewFormat(@f, TYPE_PAGE_REPORT) == FORMAT_FILE ## 
	$xt->assign("##@f.strName g##_mastervalue", "<span class='rnr-field-file'>".$viewControls->showDBValue("##@f.strName s##", $data, $keylink)."</span>");
	##else##
	$xt->assign("##@f.strName g##_mastervalue", $viewControls->showDBValue("##@f.strName s##", $data, $keylink));
	##endif##
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
	
	$layout = GetPageLayout("##@TABLE.strShortTableName##", "masterreport");
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("##@TABLE.strShortTableName##", "masterreport"));
}
?>