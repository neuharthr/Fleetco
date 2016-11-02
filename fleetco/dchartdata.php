<?php
    @ini_set("display_errors","1");
    @ini_set("display_startup_errors","1");
    require_once("include/dbcommon.php");
    header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 
    require_once("classes/charts.php");
	require_once(getabspath("include/xml.php"));
	require_once(getabspath("classes/searchclause.php"));
	

	if(!isLogged())
	{
		Security::saveRedirectURL();
		HeaderRedirect("login", "", "message=expired");
		return;
	}

    $xml = new xml();

	$chrt_strXML = "";
	if( checkTableName(postvalue("chartname"), titCHART) )
	{
		include_once("include/".postvalue("chartname")."_variables.php");
		$chrt_strXML = GetChartXML(postvalue("chartname"));
		$chrt_array = $xml->xml_to_array( $chrt_strXML );
		
		$_SESSION["webobject"]["table_type"] = "project";
		$_SESSION["object_sql"] = "";
	}
	
	$webchart = false;
	if( !$chrt_strXML )
	{
		$sessPrefix = "webchart".postvalue('cname');
		$chrt_strXML = LoadSelectedChart(postvalue('cname'));
		$webchart = true;
		$chrt_array = $xml->xml_to_array( $chrt_strXML );
		if( is_wr_project() )
	    	include_once("include/" . $chrt_array['settings']['short_table_name'] . "_variables.php");
	}
	
	$param = array();
	$param["webchart"] = $webchart;
	$param["showDetails"] = postvalue('showDetails');
	$param["chartPreview"] = postvalue('chartPreview');
	$param["dashChart"] = postvalue('dashChart');
	$param["pageId"] = postvalue('pageId');
	
	if( $param["dashChart"] )
	{
		$param["dashTName"] = postvalue('dashTName');
		$param["dashElementName"] = postvalue('dashElName');
	}
	
	if( $webchart )
	{
		$param["cname"] = postvalue("cname");
		switch( $chrt_array["chart_type"]["type"] )
		{
			case "3d_column":
				$chrt_array["chart_type"]["type"] = "2d_column";
				$chrt_array["appearance"]["is3d"] = "true";
				$chrt_array["appearance"]["isstacked"] = "false";
			break;
			case "3d_bar":
				$chrt_array["chart_type"]["type"] = "2d_bar";
				$chrt_array["appearance"]["is3d"] = "true";
				$chrt_array["appearance"]["isstacked"] = "false";
			break;
			case "3d_column_stacked":
				$chrt_array["chart_type"]["type"] = "2d_column";
				$chrt_array["appearance"]["is3d"] = "true";
				$chrt_array["appearance"]["isstacked"] = "true";
			break;
			case "3d_bar_stacked":
				$chrt_array["chart_type"]["type"] = "2d_bar";
				$chrt_array["appearance"]["is3d"] = "true";
				$chrt_array["appearance"]["isstacked"] = "true";
			break;
			case "2d_column_stacked":
				$chrt_array["chart_type"]["type"] = "2d_column";
				$chrt_array["appearance"]["isstacked"] = "true";
				$chrt_array["appearance"]["is3d"] = "false";
			break;
			case "2d_bar_stacked":
				$chrt_array["chart_type"]["type"] = "2d_bar";
				$chrt_array["appearance"]["isstacked"] = "true";
				$chrt_array["appearance"]["is3d"] = "false";
			break;
			case "line":
				$chrt_array["chart_type"]["type"] = "line";
				if( !isset( $chrt_array["appearance"]["linestyle"] ) )
					$chrt_array["appearance"]["linestyle"] = 0;
			break;
			case "spline":
				$chrt_array["chart_type"]["type"] = "line";
				$chrt_array["appearance"]["linestyle"] = 1;
			break;
			case "step_line":
				$chrt_array["chart_type"]["type"] = "line";
				$chrt_array["appearance"]["linestyle"] = 2;
			break;
			case "area_stacked":
				$chrt_array["chart_type"]["type"] = "area";
				$chrt_array["appearance"]["isstacked"] = "true";
			break;
		}
	}
	else
	{
		$param["cname"] = postvalue("chartname");
	}
		
	if( !$webchart )
		$param["gstrOrderBy"] = $gstrOrderBy;
	
	if( $chrt_array["chart_type"]["type"] == "candle" )
        $chrt_array["chart_type"]["type"] = "candlestick";

	switch( $chrt_array["chart_type"]["type"] )
	{
		case "2d_column": 
			$param["2d"] = true;
			$param["bar"] = false;
			$param["stacked"] = false;
			
			if( $chrt_array["appearance"]["is3d"] == "true" || $chrt_array["appearance"]["is3d"] == 1 )
				$param["2d"] = false;
				
			if( $chrt_array["appearance"]["isstacked"] == "true" || $chrt_array["appearance"]["isstacked"] == 1 )
				$param["stacked"] = true;
				
			$chartObj = new Chart_Bar($chrt_array, $param);
		break;
		case "2d_bar": 
			$param["2d"] = true;
			$param["bar"] = true;
			$param["stacked"] = false;
			
			if( $chrt_array["appearance"]["is3d"] == "true" || $chrt_array["appearance"]["is3d"] == 1 )
				$param["2d"] = false;
				
			if( $chrt_array["appearance"]["isstacked"] == "true" || $chrt_array["appearance"]["isstacked"] == 1 )
				$param["stacked"] = true;
				
			$chartObj = new Chart_Bar($chrt_array, $param);
		break;
		case "line":
			if( $chrt_array["appearance"]["linestyle"] == 0 )
				$param["type_line"] = "line";
			elseif( $chrt_array["appearance"]["linestyle"] == 2 )
				$param["type_line"] = "step_line";
			else
				$param["type_line"] = "spline";
				
			$chartObj = new Chart_Line($chrt_array, $param);
		break;
		case "area":
			$param["stacked"] = false;
			if( $chrt_array["appearance"]["isstacked"] == "true" || $chrt_array["appearance"]["isstacked"] == 1 )
				$param["stacked"] = true;
				
			$chartObj = new Chart_Area($chrt_array, $param);
		break;
		case "2d_pie":
			$param["2d"] = true;
			if( $chrt_array["appearance"]["is3d"] == "true" || $chrt_array["appearance"]["is3d"] == 1 )
				$param["2d"] = false;
				
			$param["pie"] = true;
			$chartObj = new Chart_Pie( $chrt_array, $param );
		break;
		case "2d_doughnut":
			$param["pie"] = false;
			$param["2d"] = true;
			if( $chrt_array["appearance"]["is3d"] == "true" || $chrt_array["appearance"]["is3d"] == 1 )
				$param["2d"] = false;
				
			$chartObj = new Chart_Pie($chrt_array, $param);
		break;
		case "combined":
			$chartObj = new Chart_Combined($chrt_array, $param);
		break;
		case "funnel":
			$param["funnel_type"] = $chrt_array["appearance"]["accumulstyle"]; 
			$param["funnel_inv"] = false;
			if( $chrt_array["appearance"]["accumulinvert"] == "true" || $chrt_array["appearance"]["accumulinvert"] == 1 )
				$param["funnel_inv"] = true;
				
			$chartObj = new Chart_Funnel($chrt_array, $param);
		break;
		case "bubble":
			$param["2d"] = true;
			if( $chrt_array["appearance"]["is3d"] == "true" || $chrt_array["appearance"]["is3d"] == 1 )
				$param["2d"] = false;
				
			$param["oppos"] = 1;
			if( $chrt_array["appearance"]["bubbletransp"] == "true" || $chrt_array["appearance"]["bubbletransp"] == 1 )
				$param["oppos"] = 0.3;
			
			$chartObj = new Chart_Bubble($chrt_array, $param);
		break;
		case "gauge":
			if( $chrt_array["appearance"]["gaugestyle"] == 0 )
				$param["gaugeType"] = "circular";
			else
				$param["gaugeType"] = "linearGauge";
				
			if( $chrt_array["appearance"]["gaugestyle"] == 1 )
				$param["layout"] = "horizontal";
			else
				$param["layout"] = "";	
				
			$chartObj = new Chart_Gauge($chrt_array, $param);
		break;
		case "ohlc":
			$param["ohcl_type"] = "ohcl";
			$chartObj = new Chart_Ohlc($chrt_array, $param);
		break;
		case "candlestick":
			$param["ohcl_type"] = "candlestick";
			$chartObj = new Chart_Ohlc($chrt_array, $param);
		break;
	}
	
	if( postvalue("action") == "refresh" )
	{
		echo my_json_encode( $chartObj->get_data() );
		exit();
	}
	
    header("Content-Type: application/json");
	$chartObj->write();
?>
