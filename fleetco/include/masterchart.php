<?php
function DisplayMasterTableInfo_##@TABLE.strShortTableName##($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	
	$xt = new Xtempl();
	$tName = "##@TABLE.strDataSourceTable s##";
	$xt->eventsObject = getEventObject($tName);
	
	$settings = new ProjectSettings($tName, PAGE_CHART);
	$viewControls = new ViewControlsContainer($settings, PAGE_CHART);

	$showKeys = array();
	$keysAssoc = array();

##foreach @TABLE.arrDetailTables as @dt##
##set @t=@BUILDER.Tables{@dt}##
	if( $detailtable == "##@t.strDataSourceTable s##" )
	{
##foreach @t.arrMasterTables{@TABLE.strDataSourceTable}.arrMasterKeys as @mk##
		$keysAssoc["##@mk s##"] = $keys[##@index## - 1];
##if IsShowKey(Field(@mk), TYPE_PAGE_CHART)##
		$keyValue = runner_htmlspecialchars( $keysAssoc["##@mk s##"] );
##else##
		$keyValue = $viewControls->showDBValue("##@mk s##", $keysAssoc);
##endif##
		$showKeys[] = ##label @TABLE.strDataSourceTable @mk##.": ".$keyValue;
##endfor##

		$xt->assign('showKeys', implode(", ", $showKeys));
	}
##endfor##
	
	$xt->assign("chart_block", true);
	//set params for the 'xt_showchart' method showing the chart
	$chartXtParams = array(
		"chartname" => "##@TABLE.strShortTableName##",
		"table" => "##@TABLE.strDataSourceTable s##",
		"ctype" => "##@TABLE.strChartType##", 
		"showDetails" => false,
		"chartPreview" => true,
		"resize" => false, 
		"id" => "1"
	);
	$xt->assign_function("##@TABLE.strShortTableName##_chart", "xt_showchart", $chartXtParams);
	
	$layout = GetPageLayout("##@TABLE.strShortTableName##", "masterchart");
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("##@TABLE.strShortTableName##", "masterchart"));
}
?>