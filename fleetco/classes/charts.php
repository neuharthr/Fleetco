<?php
class Chart
{
	protected $strSQL;

	protected $header;
	protected $footer;

	protected $y_axis_label;

	protected $strLabel;

	protected $arrDataLabels = array();	
	protected $arrDataSeries = array();
	
	protected $chrt_array = array();
	public $webchart;
	protected $cname;
	
	protected $gstrOrderBy;
	
	protected $table_type;
	
	protected $cipherer = null;
	protected $pSet = null;
	protected $searchClauseObj = null;
	
	protected $sessionPrefix = "";

	protected $detailTablesData = array();
	
	protected $pageId;
	
	/**
	 * A flag helping to detect if to apply
	 * 'details' functionality to the chart
	 */
	protected $showDetails = true;
	
	protected $chartPreview = false;

	/**
	 * It indicates if chart is shown on a dashboard
	 */
	protected $dashChart = false;
	
	/**
	 * It indicates if first point selected
	 */
	protected $dashChartFirstPointSelected = false;
	
	protected $detailMasterKeys = "";	
	
	/**
	 * Dashboard table name
	 * It's set up if chart is shown on a dashboard only
	 */
	protected $dashTName = "";
	
	/**
	 * Dashboard element name
	 * It's set up if chart is shown on a dashboard only
	 */
	protected $dashElementName = "";	
	
	/**
	 * @type Connection
	 */
	protected $connection;
	
	/**
	 *
	 */
	protected $_2d;

	/**
	 *
	 */
	protected $noRecordsFound = false;
	
	/**
	 *
	 */
	protected $singleSeries = false;
	
	
	
	function __construct( &$ch_array, $param )
	{		
		global $strTableName;
		
		$this->webchart = $param["webchart"];
		
		if( $this->webchart ) 
			$this->chrt_array = Convert_Old_Chart($ch_array);
		else
			$this->chrt_array = $ch_array;
		
		// #10461, $this->setConnection(); needs to be called after value is assigned to $this->webchart
		$this->setConnection();
		
		$this->pSet = new ProjectSettings( $this->chrt_array['tables'][0] );
		$this->showDetails = $param['showDetails'];
		if( $this->showDetails )
		{
			$this->detailTablesData = $this->pSet->getDetailTablesArr();
			for($i = 0; $i < count($this->detailTablesData); $i ++) 
			{
				$strPerm = GetUserPermissions($this->detailTablesData[$i]['dDataSourceTable']);
				if ( strpos($strPerm, "S") === false )
					unset($this->detailTablesData[$i]);
			}
		}
		
		$this->pageId = $param["pageId"];
		$this->chrt_array["appearance"]["autoupdate"] = false; //?
		
		$this->table_type = $this->chrt_array["table_type"];
		if( !$this->table_type )
			$this->table_type = "project";
				
		$this->cname = $param["cname"];
		
		$this->sessionPrefix = $this->chrt_array['tables'][0];
		
		$this->chartPreview = $param["chartPreview"];
		$this->dashChart = $param["dashChart"];
		
		if( $this->dashChart )
		{
			$this->dashTName = $param["dashTName"];
			$this->dashElementName = $param["dashElementName"];
			$this->sessionPrefix = $this->dashTName."_".$this->sessionPrefix;
		}
		
		$this->gstrOrderBy = $param["gstrOrderBy"];

		if( !$this->webchart && !$this->chartPreview && isset( $_SESSION[ $this->sessionPrefix.'_advsearch' ] ) )
			$this->searchClauseObj = SearchClause::UnserializeObject( $_SESSION[ $this->sessionPrefix.'_advsearch' ] ); 
		
		if( $this->isProjectDB() )
			$this->cipherer = new RunnerCipherer( $this->chrt_array['tables'][0] ); 
		
		$this->setBasicChartProp();
		
		$this->strSQL = $this->getSQL();
			
		if( tableEventExists("UpdateChartSettings", $strTableName) )
		{
			$eventObj = getEventObject( $strTableName );
			$eventObj->UpdateChartSettings( $this );
		}
	}
	
	/**
	 * @param Array params
	 */
	protected function setSpecParams( $params )
	{
		if( $params['name'] == "" ) 
			return;
		
		if( $this->table_type != "db" )
			$this->arrDataSeries[] = $params['agr_func'] ? $params['label'] : $params['name'];
		else
			$this->arrDataSeries[] = $params['agr_func'] ? $params['agr_func']."_".$params['table']."_".$params['name'] : $params['table']."_".$params['name'];		
	}
	
	/**
	 * @param Array params
	 * @param String gTableName
	 */
	protected function setDataLabels( $params, $gTableName )
	{
		$chartType = $this->chrt_array["chart_type"]["type"];
		if( $this->table_type == "project" && !$this->webchart )
		{
			if( $chartType != "candlestick" && $chartType != "ohlc" )
				$this->arrDataLabels[] = $this->chart_xmlencode( GetFieldLabel( $gTableName, GoodFieldName($params['name']) ) );
			else
				$this->arrDataLabels[] = $this->chart_xmlencode( GetFieldLabel( $gTableName, GoodFieldName($params['ohlcOpen']) ) );
		}
		else
		{
			if( !$this->chart_xmlencode($params['label']) )
			{
				if( $chartType != "candlestick" && $chartType != "ohlc" )
					$this->arrDataLabels[] = $this->chart_xmlencode( $params['name'] );
				else
					$this->arrDataLabels[] = $this->chart_xmlencode( $params['ohlcOpen'] );
			}
			else
				$this->arrDataLabels[] = $this->chart_xmlencode( $params['label'] );
		}	
	}

	/**
	 *
	 */
	protected function setBasicChartProp()
	{
		$this->header = $this->chrt_array['appearance']['head'];
		$this->footer = $this->chrt_array['appearance']['foot'];
			
		for ( $i = 0; $i<count($this->chrt_array['parameters']) - 1; $i++) 
		{								
			$this->setSpecParams( $this->chrt_array['parameters'][$i] );
			$this->setDataLabels( $this->chrt_array['parameters'][$i], GoodFieldName( $this->chrt_array['tables'][0] ) );
		}		
		
		if( $this->chrt_array["chart_type"]["type"] != "gauge" )
		{
			$chartParams = $this->chrt_array['parameters'];
			$params = $chartParams[ count($chartParams) - 1 ];
			
			if( $this->table_type != "db" )
				$this->strLabel = $params['name'];
			else
				$this->strLabel = $params['agr_func'] ? $params['agr_func']."_".$params['table']."_".$params['name']: $params['table']."_".$params['name'];
		}

		if( count( $this->arrDataLabels ) == 1 )
			$this->y_axis_label = $this->arrDataLabels[0];
		else
			$this->y_axis_label = $this->chrt_array['appearance']['y_axis_label'];		
	}
	
	/**
	 * @return String
	 */
	protected function getMasterWhere()
	{		
		if( $this->dashChart ) 
			return "";
				
		$masterTable = $_SESSION[ $this->sessionPrefix."_mastertable" ];
		$detailKeysByM = $this->pSet->getDetailKeysByMasterTable( $masterTable );
		$masterWhereParts = array();
		
		for($i = 0; $i < count($detailKeysByM); $i++) 
		{				
			if( $this->cipherer && $this->cipherer->isEncryptionByPHPEnabled() )
				$mValue = $this->cipherer->MakeDBValue( $detailKeysByM[$i], $_SESSION[ $this->sessionPrefix."_masterkey".($i + 1) ] );
			else 
				$mValue = make_db_value( $detailKeysByM[$i], $_SESSION[ $this->sessionPrefix."_masterkey".($i + 1) ] );
			
			if( strlen($mValue) != 0 )
				$masterWhereParts[] = RunnerPage::_getFieldSQLDecrypt( $detailKeysByM[$i], $this->connection, $this->pSet, $this->cipherer )."=".$mValue;
			else 
				$masterWhereParts[] = "1=0";	
		}

		return implode( " and ", $masterWhereParts );
	}
	
	/**
	 * @return String
	 */
	protected function getSQL()
	{
		global $strTableName;
		
		// prepare search params
		$gQuery = $this->pSet->getSQLQuery();

		$masterWhere = $this->getMasterWhere();
		$strWhereClause = "";
		$searchHavingClause = "";
		$strSearchCriteria = "and";
		
		// search where for basic charts
		if( !$this->webchart )
		{	
			if( !$this->chartPreview && $this->searchClauseObj )
			{
				include_once getabspath('classes/controls/EditControlsContainer.php');
				$editControls = new EditControlsContainer( null, $this->pSet, PAGE_SEARCH, $this->cipherer );
				
				$whereComponents = RunnerPage::sGetWhereComponents( $gQuery, $this->pSet, $this->searchClauseObj, $editControls, $this->connection );
				$strWhereClause = $whereComponents["searchWhere"];
				foreach($whereComponents["filterWhere"] as $fWhere)
				{
					$strWhereClause = whereAdd($strWhereClause, $fWhere);
				}
		
				$searchHavingClause = $whereComponents["searchHaving"];
				foreach($whereComponents["filterHaving"] as $fHaving)
				{
					$searchHavingClause = whereAdd($searchHavingClause, $fHaving);
				}
				
				$strSearchCriteria = $whereComponents["searchUnionRequired"] ? "or" : "and";
			}
		}
		else 
		{
			if($this->table_type != "project")
				$strTableName = "webchart".$this->cname;
				
			$strWhereClause = CalcSearchParam($this->table_type != "project");
		}
		
		if ($strWhereClause) 
		{
			$this->chrt_array['where'] .= ($this->chrt_array['where']) ?
				" AND (" . $strWhereClause . ")" :
				" WHERE (" . $strWhereClause . ")";
		}
		
		if($this->table_type == "project")
		{
			if(SecuritySQL("Search", $this->chrt_array['tables'][0]))
			{
				$strWhereClause = whereAdd($strWhereClause, SecuritySQL("Search", $strTableName ));
			}
			$strSQL = $gQuery->gSQLWhere($strWhereClause,$searchHavingClause, $strSearchCriteria);
		
			$strOrderBy = $this->gstrOrderBy;
			$strSQL.= " ".$strOrderBy;

			if( $masterWhere )
				$strWhereClause = whereAdd($strWhereClause, $masterWhere);
			
			$strSQLbak = $strSQL;
			if(tableEventExists("BeforeQueryChart",$strTableName)) 
			{
				$tstrSQL = $strSQL;
				$eventObj = getEventObject($strTableName);
				$eventObj->BeforeQueryChart($tstrSQL,$strWhereClause,$strOrderBy);
				$strSQL = $tstrSQL;
			}
			if($strSQLbak == $strSQL)
			{								
				$strSQL = $gQuery->gSQLWhere($strWhereClause, $searchHavingClause, $strSearchCriteria);
				$strSQL.= " ".$strOrderBy;
			}
		}
		

		if ($this->cname && $this->table_type == "db") 
			$strSQL = $this->chrt_array['sql'] . $this->chrt_array['where'] . $this->chrt_array['group_by'] . $this->chrt_array['order_by'];
		elseif ($this->cname && $this->table_type == "custom") 
		{
			if(!IsStoredProcedure($this->chrt_array['sql']))
			{
				$sql_query=$this->chrt_array['sql'];
				
				if( $this->connection->dbType == nDATABASE_MSSQLServer )
				{
					$pos=strrpos(strtoupper($sql_query),"ORDER BY");
					if($pos)
						$sql_query=substr($sql_query,0,$pos);
				}
				
				if( $this->connection->dbType != nDATABASE_Oracle )
					$strSQL = "select * from (".$sql_query.") as ".$this->connection->addFieldWrappers("custom_query").$this->chrt_array['where'];
				else
					$strSQL = "select * from (".$sql_query.")". $this->chrt_array['where'];
			}
			else
			{
				$strSQL = $this->chrt_array['sql'];
			}
		}
		
		return $strSQL;
	}

	/**
	 * Check for a web chart if it's based on the project table
	 * @return Boolean
	 */
	protected function isProjectDB()
	{
		if( !$this->webchart )
			return true;
			
		if("inventorymaster" == $this->chrt_array['tables'][0])
			return true;
		if("creategrn" == $this->chrt_array['tables'][0])
			return true;
		if("vehiclemaster" == $this->chrt_array['tables'][0])
			return true;
		if("creategrn" == $this->chrt_array['tables'][0])
			return true;
		if("inventorymaster" == $this->chrt_array['tables'][0])
			return true;
		if("creategrn" == $this->chrt_array['tables'][0])
			return true;
		if("fuelmaster" == $this->chrt_array['tables'][0])
			return true;
		if("suppliermaster" == $this->chrt_array['tables'][0])
			return true;
		if("accidents" == $this->chrt_array['tables'][0])
			return true;
		if("maintenenace" == $this->chrt_array['tables'][0])
			return true;
		if("fleettype" == $this->chrt_array['tables'][0])
			return true;
		if("fuelprices" == $this->chrt_array['tables'][0])
			return true;
		if("fuelstationmaster" == $this->chrt_array['tables'][0])
			return true;
		if("vehicletype" == $this->chrt_array['tables'][0])
			return true;
		if("servicetypemaster" == $this->chrt_array['tables'][0])
			return true;
		if("insurance-payments" == $this->chrt_array['tables'][0])
			return true;
		if("insuranceclaims" == $this->chrt_array['tables'][0])
			return true;
		if("insurancecompany" == $this->chrt_array['tables'][0])
			return true;
		if("maintenenace" == $this->chrt_array['tables'][0])
			return true;
		if("maintenenace" == $this->chrt_array['tables'][0])
			return true;
		if("maintenenace" == $this->chrt_array['tables'][0])
			return true;
		if("vehiclemaster" == $this->chrt_array['tables'][0])
			return true;
		if("accidents" == $this->chrt_array['tables'][0])
			return true;
		if("carrier_ugrights" == $this->chrt_array['tables'][0])
			return true;
		if("carrierusers" == $this->chrt_array['tables'][0])
			return true;
		if("carrierusers" == $this->chrt_array['tables'][0])
			return true;
		if("carrierusers" == $this->chrt_array['tables'][0])
			return true;
		if("inventorymaster" == $this->chrt_array['tables'][0])
			return true;
		if("creategrn" == $this->chrt_array['tables'][0])
			return true;
		if("creategrn" == $this->chrt_array['tables'][0])
			return true;
		if("creategrn" == $this->chrt_array['tables'][0])
			return true;
		if("creategrn" == $this->chrt_array['tables'][0])
			return true;
		if("fuelmaster" == $this->chrt_array['tables'][0])
			return true;
		if("creategrn" == $this->chrt_array['tables'][0])
			return true;
		if("rnewalmastertable" == $this->chrt_array['tables'][0])
			return true;
		if("otherrenewal" == $this->chrt_array['tables'][0])
			return true;
		if("creategrn" == $this->chrt_array['tables'][0])
			return true;
		if("creategrn" == $this->chrt_array['tables'][0])
			return true;
		if("creategrn" == $this->chrt_array['tables'][0])
			return true;
		if("inventorymaster" == $this->chrt_array['tables'][0])
			return true;
		if("inventorymaster" == $this->chrt_array['tables'][0])
			return true;
		if("fuelmaster" == $this->chrt_array['tables'][0])
			return true;
		if("maintenenace" == $this->chrt_array['tables'][0])
			return true;
		return false;
	}
	
	/**
	 * Set the 'connection' property #9875
	 */
	protected function setConnection()
	{
		global $cman;
		
		if($this->isProjectDB())
			$this->connection = $cman->byTable( $this->chrt_array['tables'][0] );
		else
			$this->connection = $cman->getDefault();
	}		

	public function setFooter($name) 
	{
		$this->footer = $name;
	}
	
	public function getFooter() 
	{
		return $this->footer;
	}
	
	public function setHeader($name) 
	{
		$this->header = $name;
	}
	
	public function getHeader() 
	{
		return $this->header;
	}
	
	public function setLabelField($name) 
	{
		$this->strLabel = $name;
	}
	
	public function getLabelField() 
	{
		return $this->strLabel;
	}

	/**
	 * @return String
	 */
	protected function getDetailedToolipMessage()
	{
		if( !$this->showDetails || !count( $this->detailTablesData ) )
			return "";	
			
		$showClickHere = true;
		
		if( $this->dashChart )
		{
			$showClickHere = false;			
			
			$pDSet = new ProjectSettings( $this->dashTName );
			$arrDElem = $pDSet->getDashboardElements();
			foreach($arrDElem as $elem)
			{
				if( $elem["table"] == $this->chrt_array['tables'][0] && count( $elem["details"] ) )
					$showClickHere = true;
			}
		}
		
		if( $showClickHere ) 
		{
			$tableCaption = GetTableCaption( $this->detailTablesData[0]['dDataSourceTable'] );
			$tableCaption = $tableCaption ? $tableCaption : $this->detailTablesData[0]['dDataSourceTable'];	

			 return "\nClick here to see ".$tableCaption." details";
		}
		
		return "";	
	}
	
	/**
	 * @return String
	 */
	protected function getNoDataMessage()
	{
		if( !$this->noRecordsFound )
			return "";
			
		if( !$this->searchClauseObj )
			return mlang_message("NO_DATA_YET");

		if( $this->searchClauseObj->isSearchFunctionalityActivated() )
			return mlang_message("NO_RECORDS");
		
		return mlang_message("NO_DATA_YET");
	}
	
	/**
	 *
	 */
	public function write()
	{
		$data = array();
		$chart = array();

		$this->setTypeSpecChartSettings( $chart );	

		if( $this->noRecordsFound )
		{
			$data["noDataMessage"] = $this->getNoDataMessage();				
			echo my_json_encode( $data );
			return;
		}
		
		// animation
		if( $this->chrt_array["appearance"]["sanim"] == "true" && $this->chrt_array["appearance"]["autoupdate"] != "true" ) // update? 
			$chart["animation"] = array("enabled" => "true", "duration" => 1000);

		// legend
		if( $this->chrt_array['appearance']['slegend'] == "true" && !$this->chartPreview )
			$chart["legend"] = array("enabled"=> "true");
		else
			$chart["legend"] = array("enabled"=> false);
		
		// title/header
		$chart["title"]	= array("enabled" => "true", "text" => $this->header);
		
		// assign and display
		$data["chart"] = $chart;
		echo my_json_encode( $data );
	}
	
	/**
	 * A stub
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
	}
	
	/**
	 * @return Array
	 */
	protected function getGrids()
	{
		$grids = array();
		
		if($this->chrt_array["appearance"]["sgrid"] == "true") 
		{
			$grids[] = array(
				"enabled" => true,
				"drawLastLine" => false,
				"stroke" => "#ddd",
				"scale" => 0,
				"axis" => 0
			);
						
			$grids[] = array(
				"enabled"=> true,
				"drawLastLine" => false,
				"stroke" => "#ddd",
				"axis" => 1
			);		
		}
		
		return $grids;
	}
	
	/**
	 * @param String fieldName
	 * @param Array data
	 * @return String
	 */
	protected function labelFormat($fieldName, $data, $truncated = true)
	{	
		if( $this->table_type == "db" && count( $this->chrt_array['customLabels'] ) )		
			$fieldName = $this->chrt_array['customLabels'][ $fieldName ];	
			
		include_once getabspath('classes/controls/ViewControlsContainer.php');
		$viewControls = new ViewControlsContainer($this->pSet, PAGE_CHART);			
		$value = html_special_decode( $viewControls->showDBValue( $fieldName, $data ) );

		if( $truncated && strlen($value) > 50 )
			$value = runner_substr($value, 0, 47)."...";
			
		return $this->chart_xmlencode( $value );
	}
	
	/**
	 * @return Array
	 */
	public function get_data()
	{
		$data = array();
		$clickdata = array();
		for ( $i = 0; $i < count($this->arrDataSeries); $i++ ) 
		{ 
			$data[$i] = array();
			$clickdata[$i] = array();
		}
		
		$qResult = $this->connection->query( $this->strSQL );
		
		if( $this->cipherer != null )
			$row = $this->cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
		else 
			$row = $qResult->fetchAssoc();
	
		if( !$row ) 
			$this->noRecordsFound = true;
	
		while ($row) 
		{
			for ( $i = 0; $i < count($this->arrDataSeries); $i++ ) 
			{
				$data[$i][] = $this->getPoint($i, $row);

				$strLabelFormat = $this->labelFormat( $this->strLabel, $row );
				$clickdata[$i][] = $this->getActions( $row , $this->arrDataSeries[$i], $strLabelFormat );
			}
			
			if( $this->cipherer != null )
				$row = $this->cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
			else 
				$row = $qResult->fetchAssoc();
		}
		
		$this->connection->close();
		
		$series = array();
		for ( $i = 0; $i < count($this->arrDataSeries); $i++ ) 
		{
			$series[] = $this->getSeriesData( $this->arrDataLabels[$i], $data[$i], $clickdata[$i], $i);
		}
		
		return $series;
	}
	
	/**
	 * @param Number seriesNumber
	 * @param Array row
	 * @return Array
	 */
	protected function getPoint($seriesNumber, $row)
	{
		$strLabelFormat = $this->labelFormat( $this->strLabel, $row );
		
		if( $this->table_type != "db" || !count( $this->chrt_array['customLabels'] ) )
			$strDataSeries = $row[ $this->arrDataSeries[ $seriesNumber ] ];
		else
			$strDataSeries = $row[ $this->chrt_array['customLabels'][ $this->arrDataSeries[ $seriesNumber ] ] ];
		
		return array( "x" => $strLabelFormat , "value" => $this->chart_xmlencode( str_replace(",", ".", $strDataSeries) + 0 ) );
	}	
	
	/**
	 * @param String name
	 * @param Array pointsData
	 * @param Array clickData
	 * @param Number seriesNumber
	 * @return Array
	 */
	protected function getSeriesData( $name, $pointsData, $clickData, $seriesNumber )
	{
		$data = array(
			"name" => $name, 
			"data" => $pointsData,
			"xScale" => "0",
			"yScale" => "1",
			"seriesType" => $this->getSeriesType()
		);
		
		$data["labels"] = array( "enabled" => $this->chrt_array["appearance"]["sval"] );
		if( $data["seriesType"] == "area" )
			$data["labels"] = array( "enabled" => true );
		
		if( $clickData )
			$data["clickData"] = $clickData;
		
		if( $this->showDetails ) 
		{
			$data["tooltip"] = array( 
				"enabled" => true,
				"title" => array( 
					"enabled" => true,
					"text" => $name . $this->getDetailedToolipMessage()
				)
			);
		} 
		
		return $data;		
	}
	
	/**
	 * @return String
	 */
	protected function getSeriesType()
	{
		return "column";
	}
	
	/**
	 * ?
	 * @param String str
	 * @return String
	 */
	protected function chart_xmlencode($str)
	{
		return str_replace(array("&","<",">","\""),array("&amp;","&lt;","&gt;","&quot;"),$str);
	}

	/**
	 * Get a 'point click' action data
	 * @param Array data
	 * @param Number seriesId
	 * @param Number pointId
	 * @return Array
	 */
	protected function getActions( $data, $seriesId, $pointId )
	{		
		global $strTableName;

		if( !count($this->detailTablesData) )
			return null;
		
		if ( $this->dashChart )
		{
			$masterKeysArr = array();
			foreach ( $this->detailTablesData as $detailId => $detail )
			{
				foreach( $detail['masterKeys'] as $idx => $mk ) 
				{
					$masterKeysArr[ $detail['dDataSourceTable'] ] = array( 'masterkey'.($idx + 1) => $data[ $mk ] );
				}
			}
			
			if (!$this->dashChartFirstPointSelected)
			{
				$this->dashChartFirstPointSelected = true;
				$this->detailMasterKeys = my_json_encode( $masterKeysArr );
			}
			
			return array( "masterKeys" => $masterKeysArr, "seriesId" => $seriesId, "pointId" => $pointId );
		}

		// The one detail table is allowed for a chart page only
		$detailTableData = $this->detailTablesData[0];
		$masterquery = "mastertable=".rawurlencode( $strTableName );
		foreach( $detailTableData['masterKeys'] as $idx => $mk ) 
		{
			$masterquery.= "&masterkey".($idx + 1)."=".rawurlencode( $data[ $mk ] );
		}
		
		return array( "url" => GetTableLink( $detailTableData['dShortTable'], $detailTableData['dType'], $masterquery ) );
	}
}


class Chart_Bar extends Chart
{
	protected $stacked;
	protected $bar;
	
	function __construct( &$ch_array, $param )
	{
		parent::__construct( $ch_array, $param );
		
		$this->stacked = $param["stacked"];
		$this->_2d = $param["2d"];
		$this->bar = $param["bar"];
	}
	
	/**
	 * @return String
	 */
	protected function getSeriesType()
	{
		if($this->bar)
			return "bar";
		else	
			return "column";
	}
	
	/**
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
		$chart["series"] = $this->get_data();

		$chart["scales"] = $this->getScales(); 
		
		if( $this->bar )
			$chart["type"] = "bar";
		else	
			$chart["type"] = "column";
		
		if( !$this->_2d ) 
			$chart["type"] .= "3d";
	
		$chart["xScale"] = 0;
		$chart["yScale"] = 1;

		// grid
		$chart["grids"] = $this->getGrids();
	

		// Y-axis label
		$chart["yAxes"]	= array(array("enabled"=>"true", 
				"title" => $this->y_axis_label));

		// X-axis label
		$chart["xAxes"]	= array(array("enabled"=>"true", 
				"title" => $this->footer,
				"labels" => array("enabled" => $this->chrt_array["appearance"]["sname"])
				));		
	}
	
	/**
	 * "scales"
	 * @return Array
	 */
	protected function getScales()
	{
		if($this->stacked || $this->chrt_array["appearance"]["slog"] == "true")
		{
			$arr = array();
			if( $this->stacked )
				$arr["stackMode"] = "value";	

			if( $this->chrt_array["appearance"]["slog"] == "true" ) 
			{
				$arr["logBase"] = 10;
				$arr["type"] = "log";
			};

			return array(
				array("names"=> array()),
				$arr); 
		}
		
		return array();
	}
}

class Chart_Line extends Chart
{
	protected $type_line;
	
	
	function __construct( &$ch_array, $param )
	{
		parent::__construct( $ch_array, $param );
		
		$this->type_line = $param["type_line"];
	}

	/**
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
		$chart["series"] = $this->get_data();
		$chart["type"] = "line";
	
		$chart["xScale"] = 0;
		$chart["yScale"] = 1;
		$chart["grids"] = $this->getGrids();
	
		$chart["yAxes"]	= array(
			array( "enabled" => "true", "title" => $this->y_axis_label )
		);

		$chart["xAxes"]	= array(
			array(
				"enabled" => "true",
				"title" => $this->footer,
				"labels" => array( "enabled" => $this->chrt_array["appearance"]["sname"] )
			));		
	}
	
	/**
	 * @return String
	 */
	protected function getSeriesType()
	{		
		switch( $this->type_line )
		{
			case "line": 
				return "line";
			case "spline": 
				return "spline";
			case "step_line": 
				return "stepLine";
			default:
				return "line";	
		}
	}
}

class Chart_Area extends Chart
{
	protected $stacked;
	

	function __construct( &$ch_array, $param )
	{
		parent::__construct( $ch_array, $param );
		
		$this->stacked = $param["stacked"];
	}

	/**
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
		$chart["series"] = $this->get_data();

		if( $this->stacked )
			$chart["scales"] = $this->getScales();
		
		$chart["type"] = "area";
		$chart["xScale"] = 0;
		$chart["yScale"] = 1;
		
		$chart["grids"] = $this->getGrids();
	

		$chart["yAxes"]	= array( 
			array( "enabled" => "true", "title" => $this->y_axis_label )
		);

		$chart["xAxes"]	= array(
			array(
				"enabled" => "true",
				"title" => $this->footer,
				"labels" => array( "enabled" => $this->chrt_array["appearance"]["sname"] )
			));		
	}

	/**
	 * @return String
	 */
	protected function getSeriesType()
	{
		return "area";
	}
	
	/**
	 * "scales"
	 * @return Array
	 */	
	protected function getScales()
	{		
		if( $this->stacked )
		{
			$arr = array();
			$arr["stackMode"] = "value";	

			if( $this->chrt_array["appearance"]["sstacked"] == "true" ) 
			{
				$arr["stackMode"] = "percent";				
				$arr["maximumGap"] = "10";	
				$arr["maximum"] = "100";	
			};

			return array(
				array( "names"=> array() ),
				$arr
			); 
		}
		
		return array();		
	}	
}

/**
 * A single series chart
 */
class Chart_Pie extends Chart
{
	protected $pie;
	
	
	function __construct( &$ch_array, $param )
	{
		parent::__construct( $ch_array, $param );
		
		$this->pie = $param["pie"];
		$this->_2d = $param["2d"];	
		$this->singleSeries = true;
	}

	/**
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
		$series = $this->get_data();
		
		$chart["data"] = $series[0]["data"];
		$chart["clickData"] = $series[0]["clickData"];		
		$chart["singleSeries"] = true;
		
		$chart["tooltip"] = $series[0]["tooltip"];
		if( $this->showDetails ) 
			$chart["tooltipExtra"] = $this->getDetailedToolipMessage(); // single series fix
		
		if( $this->_2d ) 
			$chart["type"] = "pie";
		else 
			$chart["type"] = "pie3d";
			
		if( !$this->pie )
			$chart["innerRadius"] = "30%";

		if( $this->chrt_array['appearance']['slegend'] == "true" && !$this->chartPreview )
		{
			$chart["legend"]["title"] = array( 
				"enabled" => true,
				"text" => $this->footer,
			);
		}
				
		$chart["labels"] = array( "enabled" => $this->chrt_array["appearance"]["sval"] == "true" || $this->chrt_array["appearance"]["sname"] == "true" );		
	}
}

class Chart_Combined extends Chart
{
	function __construct( &$ch_array, $param )
	{
		parent::__construct( $ch_array, $param );
	}
	
	/**
	 * @param &Array chart
	 */	
	protected function setTypeSpecChartSettings( &$chart )
	{
		$chart["series"] = $this->get_data();
		$chart["type"] = "column";
	
		$chart["xScale"] = 0;
		$chart["yScale"] = 1;
		$chart["grids"] = $this->getGrids();
	
		$chart["yAxes"]	= array(
			array( "enabled" => "true", "title" => $this->y_axis_label )
		);

		$chart["xAxes"]	= array(
			array(
				"enabled" => "true", 
				"title" => $this->footer,
				"labels" => array( "enabled" => $this->chrt_array["appearance"]["sname"] )
			));	
	}	

	/**
	 * @return String
	 */
	protected function getSeriesType()
	{
		if( $seriesNumber == 0 )
			return "line";
		
		return "column";
	}	
}

/**
 * A single series chart
 */
class Chart_Funnel extends Chart
{
	protected $inver;
	
	
	function __construct( &$ch_array, $param )
	{
		parent::__construct( $ch_array, $param );
		
		$this->inver = $param["funnel_inv"];
		$this->singleSeries = true;
	}
	
	/**
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
		$series = $this->get_data();
		$chart["type"] = "pyramid";
		
		$chart["data"] = $series[0]["data"];
		$chart["clickData"] = $series[0]["clickData"];
		$chart["singleSeries"] = true;
		
		$chart["tooltip"] = $series[0]["tooltip"];
		if( $this->showDetails ) 
			$chart["tooltipExtra"] = $this->getDetailedToolipMessage(); // single series fix		
		
		if( $this->inver )	
			$chart["reversed"] = true;
	}
}

class Chart_Bubble extends Chart
{	
	protected $arrDataSize = array();
	
	
	function __construct( &$ch_array, $param )
	{
		parent::__construct( $ch_array, $param );

		$this->_2d = $param["2d"];
	}

	/**
	 * @param Array params
	 */
	protected function setSpecParams( $params )
	{
		parent::setSpecParams( $params );
		
		if( $params['name'] != "" ) 
		{
			if( $this->table_type != "db" )
				$this->arrDataSize[] = $params['size'];
			else
				$this->arrDataSize[] = $params['table']."_".$params['size'];
		}		
	}
	
	/**
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{		
		$chart["series"] = $this->get_data();
		$chart["type"] = "scatter"; 
		$chart["grids"] = $this->getGrids();
	
		$chart["yAxes"]	= array(
			array(
				"enabled" => true,
				"title" => $this->y_axis_label,
				"labels" => array( "enabled" => $this->chrt_array["appearance"]["sval"] )
			));
		
		$chart["xAxes"]	= array(
			array(
				"enabled" => "true", 
				"title" => $this->footer,
				"labels" => array( "enabled" => $this->chrt_array["appearance"]["sname"] )
			));	
	}

	/**
	 * @return String
	 */
	protected function getSeriesType()
	{
		return "bubble";
	}	
	
	/**
	 * @param Number seriesNumber
	 * @param Array row
	 * @return Array
	 */
	protected function getPoint( $seriesNumber, $row )
	{
		$pointData = parent::getPoint( $seriesNumber, $row );
		$pointData["size"] = $this->chart_xmlencode( str_replace(",", ".", $row[ $this->arrDataSize[ $seriesNumber ] ]) + 0 ); 
		
		return $pointData;
	}
}

class Chart_Gauge extends Chart
{	
	protected $arrGaugeColor = array();
	protected $gaugeType = "";
	protected $layout = "";
	
	function __construct( &$ch_array, $param )
	{
		parent::__construct( $ch_array, $param );
		
		$this->gaugeType = $param["gaugeType"];
		$this->layout = $param["layout"];
	}

	/**
	 * @param Array params
	 */
	protected function setSpecParams( $params )
	{
		parent::setSpecParams( $params );
		
		if ( $params['name'] != "" )
		{						
			for ($k = 0; is_array( $params["gaugeColorZone"] ) && $k < count( $params["gaugeColorZone"] ); $k++ ) 
			{
				$beginColor = (float)@$params["gaugeColorZone"][ $k ]["gaugeBeginColor"];
				$endColor = (float)@$params["gaugeColorZone"][ $k ]["gaugeEndColor"];
				$gColor = "#".@$params["gaugeColorZone"][ $k ]["gaugeColor"];
				
				$this->arrGaugeColor[ count($this->arrDataSeries) - 1 ][] = array($beginColor, $endColor, $gColor);
			}
		}		
	}
	
	/**
	 *
	 */
	public function write()
	{
		$data = array();
		
		for($i = 0; $i < count($this->arrDataSeries); $i++)
		{
			$chart = array();
			
			if( $this->chrt_array["appearance"]["sanim"] == "true" ) 
				$chart["animation"] = array("enabled" => "true", "duration" => 1000);
			
			$this->setGaugeSpecChartSettings( $chart, $i );
			if( $this->noRecordsFound )
			{
				$data["noDataMessage"] = $this->getNoDataMessage();				
				echo my_json_encode( $data );
				return;
			}			
			
			$data[] = array( "gauge" => $chart );
		}
		
		echo my_json_encode( array( "gauge" => $data ) );
	}

	/**
	 * @param &Array chart
	 * @param Number seriesNumber
	 */
	protected function setGaugeSpecChartSettings( &$chart, $seriesNumber )
	{
		$series = $this->get_data();
		$chart["data"] = $series[ $seriesNumber ]["data"];

		$chart["type"] = $this->gaugeType;
		$chart["layout"] = $this->layout;
		$chart["axes"] = array( $this->getAxesSettings( $seriesNumber ) );
		$chart["chartLabels"] = $this->getCircularGaugeLabel( $seriesNumber, $chart["data"][0] );
		
		if( $this->gaugeType == "circular" )
		{
			$chart["needles"] = array( array("enabled" => true) );
			$chart["ranges"] = $this->getColorRanges( $seriesNumber );
		}
		else
		{
			$hasColorZones = count( $this->arrGaugeColor ) > 0 && array_key_exists($seriesNumber, $this->arrGaugeColor ); 
			
			$chart["pointers"] = array( 
				array(
					"enabled" => true, 
					"pointerType" => "marker",
					"type" => $this->layout == "horizontal" ? "triangleUp" : "triangleLeft",
					"name" => "",
					"offset" => $hasColorZones ? "20%" : "10%",
					"dataIndex" => 0,		
				) 
			);
			
			if( $hasColorZones ) 
			{
				foreach( $this->arrGaugeColor[ $seriesNumber ] as $ind => $val )
				{
					$chart["pointers"][] = array(
						"enabled" => true,
						"pointerType" => "rangeBar",
						"name" => "",
						"offset" => "10%",
						"dataIndex" => $ind + 1, // 0 is an index of the db point then range bars coords go
						"color" => $val[2]
					);
				}
			}
			
			$scalesData = $this->getGaugeScales( $seriesNumber );
			
			$chart["scale"] = 0;	
			$chart["scales"] = array(
				array( 
					"maximum" => $scalesData["max"],
					"minimum" => $scalesData["min"],
					"ticks" => array( "interval"=> $scalesData["interval"] ),
					"minorTicks" => array( "interval"=> $scalesData["interval"] / 2 )
				)
			);			
		}		
	}
	
	/**
	 * @param Number seriesNumber
	 * @param Array pointData
	 * @return Array 
	 */
	protected function getCircularGaugeLabel( $seriesNumber, $pointData )
	{
		$label = array(
			"enabled" => true,
			"vAlign" => "center",
			"hAlign" => "center",			
			"text" =>  $this->getChartLabelText( $seriesNumber, $pointData["value"] )
		);
		
		if( $this->gaugeType == "circular" )
		{	
			$label["offsetY"] = -150; //fix it	
			$label["anchor"] = "center";

			$label["background"] = array( 
				"enabled" => true, 
				"fill" => "#fff", 
				"cornerType" => "round", 
				"corner" => 0
			);
			
			$label["padding"] = array(
				"top" => 15,
				"right" => 20,
				"bottom" => 15,
				"left" => 20
			);
		}
		
		return array( $label );
	}
	
	/**
	 * @param Number seriesNumber
	 * @return Array
	 */	
	protected function getColorRanges( $seriesNumber )
	{
		$ranges = array();
		if( count( $this->arrGaugeColor ) > 0 && array_key_exists($seriesNumber, $this->arrGaugeColor ) )
		{
			foreach( $this->arrGaugeColor[ $seriesNumber ] as $ind => $val )
			{
				$ranges[] = array(
					"radius" => 70,
					"from" => $val[0],
					"to" => $val[1],
					"fill" => $val[2],
					"endSize" => "10%",
					"startSize" => "10%"
				);
			}
		}

		return $ranges;
	}
	
	/**
	 * @param Number seriesNumber
	 * @return Array
	 */
	protected function getAxesSettings( $seriesNumber )
	{	
		$axes = array();
		
		if( $this->gaugeType == "circular" )
		{
			$axes["startAngle"] = -150;
			$axes["sweepAngle"] = 300;
		
			$scalesData = $this->getGaugeScales( $seriesNumber );
		
			$axes["scale"] = array( 
				"maximum" => $scalesData["max"],
				"minimum" => $scalesData["min"],
				"ticks" => array( "interval"=> $scalesData["interval"] ),
				"minorTicks" => array( "interval"=> $scalesData["interval"] / 2 )
			);
			
			$axes["ticks"] = array(
				"type" => "trapezoid",
				"interval" => $scalesData["interval"]
			);
			
			$axes["minorTicks"] = array(
				"enabled" => true, 
				"length" => 2
			 );			
		}

		$axes["enabled"] = true;
		$axes["labels"] = array( "enabled" => $this->chrt_array["appearance"]["sval"] );

		return $axes;
	}
	
	/**
	 * @param Number seriesNumber
	 * @return Array
	 */
	protected function getGaugeScales( $seriesNumber ) 
	{
		$min = $this->chrt_array["parameters"][ $seriesNumber ]["gaugeMinValue"];
		$max = $this->chrt_array["parameters"][ $seriesNumber ]["gaugeMaxValue"];
		
		if( !is_numeric( $min ) )
			$min = 0;
			
		if( !is_numeric( $max ) )
			$max = 100;		
	
		$diff = $max - $min;
		$slog = floor( log10( $diff ) );
		$interval = pow(10, $slog - 2);
		$muls = array(1,2,3,5,10);

		while(true)
		{
			foreach($muls as $m)
			{
				if( $diff / ($interval * $m) <= 10 )
				{
					$interval*= $m;
					break; 
				}
			}
			if( $diff / ($interval) <= 10 )
				break;
			
			$interval*= 10;
		}
		
		return array(
			"min" => $min,
			"max" => $max,
			"interval" => $interval
		);
	}
	
	/**
	 * @return String
	 */
	protected function getSQL()
	{
		global $gSettings;
		
		$strSQL = parent::getSQL();
		
		if( $this->table_type == "project" )
		{ 
			$g_orderindexes = $gSettings->GetTableData(".orderindexes");
			$p = strpos( strtolower( $strSQL ), "order by");
			
			if( $p > 0 && count( $g_orderindexes ) )
			{
				$ob = "ORDER BY";
				foreach( $g_orderindexes as $ind => $val )
				{
					$ob.=" ".$val[0]." ";
					if( $val[1] == "ASC") 
						$ob.= "DESC";
					else
						$ob.= "ASC";
					
					if( $ind + 1 != count( $g_orderindexes ) )
						$ob.=",";
				}
				
				$strSQL = substr($strSQL, 0, $p).$ob;
			}
		}
		
		return $strSQL;
	}
	
	/**
	 *
	 */
	public function get_data()
	{		
		$data = array();
		
		$qResult = $this->connection->query( $this->strSQL );

		if( $this->cipherer != null )
			$row = $this->cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
		else 
			$row = $qResult->fetchAssoc();
	
		if( !$row ) 
			$this->noRecordsFound = true;
	
		for($i = 0; $i < count($this->arrDataSeries); $i++)
		{
			if( $row ) 
			{	
				$data[$i] = array();
				$data[$i][] = $this->getPoint($i, $row);
			}
		}
		
		$series = array();
		for ( $i = 0; $i < count($this->arrDataSeries); $i++ ) 
		{
			$series[] = $this->getSeriesData( $this->arrDataLabels[$i], $data[$i], $clickdata[$i], $i);
		}
		
		return $series;				
	}

	/**
	 * @param String name
	 * @param Array pointsData
	 * @param Array clickData
	 * @param Number seriesNumber
	 * @return Array
	 */
	protected function getSeriesData( $name, $pointsData, $clickData, $seriesNumber )
	{		
		if( $this->gaugeType == "linearGauge" && count( $this->arrGaugeColor ) > 0 && array_key_exists( $seriesNumber, $this->arrGaugeColor ) )
		{
			foreach( $this->arrGaugeColor[ $seriesNumber ] as $ind => $val )
			{
				$pointsData[] = array(
					"low" => $val[0],
					"high" => $val[1]
				);
			}
		}
		
		return array( 
			"data" => $pointsData,
			"labelText" => $this->getChartLabelText( $seriesNumber, $pointsData[0]["value"] )
		);	
	}
	
	/**
	 * @param Number seriesNumber
	 * @param String value
	 * @return String
	 */
	protected function getChartLabelText( $seriesNumber, $value )
	{	
		if( $this->table_type == "project" && !$this->webchart ) 
		{
			$fieldName = $this->arrDataSeries[ $seriesNumber ];

			include_once getabspath('classes/controls/ViewControlsContainer.php');
			$viewControls = new ViewControlsContainer($this->pSet, PAGE_CHART);
			
			$data = array( $fieldName => $value );
			$viewValue = html_special_decode( $viewControls->showDBValue( $fieldName, $data ) );
			
			return $this->arrDataLabels[ $seriesNumber ].": ". $viewValue;
		}

		return $this->arrDataLabels[ $seriesNumber ].": ". $value;
	}
}	

class Chart_Ohlc extends Chart
{
	protected $ohcl_type;

	protected $arrOHLC_high = array();
	protected $arrOHLC_low = array();
	protected $arrOHLC_open = array();
	protected $arrOHLC_close = array();
	
	function __construct( &$ch_array, $param )
	{
		parent::__construct( $ch_array, $param );
		
		$this->ohcl_type = $param["ohcl_type"];
	}

	/**
	 * @param Array params
	 */	
	protected function setSpecParams( $params )
	{
		if($this->table_type != "db")
		{
			$this->arrOHLC_open[] = $params['ohlcOpen'];
			$this->arrOHLC_high[] = $params['ohlcHigh'];
			$this->arrOHLC_low[] = $params['ohlcLow'];
			$this->arrOHLC_close[] = $params['ohlcClose'];
			return;
		}

		if( $params['agr_func'] )
		{
			$this->arrOHLC_open[] = $params['agr_func']."_".$params['table']."_".$params['ohlcOpen'];
			$this->arrOHLC_high[] = $params['agr_func']."_".$params['table']."_".$params['ohlcHigh'];
			$this->arrOHLC_low[] = $params['agr_func']."_".$params['table']."_".$params['ohlcLow'];
			$this->arrOHLC_close[] = $params['agr_func']."_".$params['table']."_".$params['ohlcClose'];
		}
		else
		{
			$this->arrOHLC_open[] = $params['table']."_".$params['ohlcOpen'];
			$this->arrOHLC_high[] = $params['table']."_".$params['ohlcHigh'];
			$this->arrOHLC_low[] = $params['table']."_".$params['ohlcLow'];
			$this->arrOHLC_close[] = $params['table']."_".$params['ohlcClose'];
		}
	}
	
	/**
	 *
	 */
	public function write()
	{
		$data = array();
		$chart = array();

		$this->setTypeSpecChartSettings( $chart );	
			
		$chart["title"]	= array("enabled" => "true", "text" => $this->header);

		if( $this->chrt_array['appearance']['slegend'] == "true" && !$this->chartPreview )
			$chart["legend"] = array("enabled" => "true");
		
		$data["chart"] = $chart;
		echo my_json_encode( $data );
	}
	
	/**
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
		$chart["series"] = $this->get_data();
		$chart["grids"] = $this->getGrids();
		
		$chart["type"] = "financial";	
		$chart["xScale"] = 0;
		$chart["yScale"] = 1;

		$chart["yAxes"]	= array(
			array(
				"enabled" => "true", 
				"title" => $this->y_axis_label,
				"labels" => array("enabled" => $this->chrt_array["appearance"]["sval"])
			));

		$chart["xAxes"]	= array(
			array(
				"enabled" => "true", 
				"title" => $this->footer,		
				"labels" => array("enabled" => $this->chrt_array["appearance"]["sname"])
			));
				
		if( $this->chrt_array["appearance"]["slog"] == "true" )
		{
			$chart["scales"] = array(
				array( "names" => array() ),
				array( "logBase" => 10, "type" => "log" )
			);
		}	
	}
	
	/**
	 * @return Array
	 */
	public function get_data()
	{
		$data = array();
		$clickdata = array();		

		for ( $i = 0; $i < count($this->arrOHLC_open); $i++ ) 
		{ 
			$data[$i] = array();
			$clickdata[$i] = array();
		}
		
		$qResult = $this->connection->query( $this->strSQL );

		if( $this->cipherer != null )
			$row = $this->cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
		else 
			$row = $qResult->fetchAssoc();

		if( !$row )
			$this->noRecordsFound = true;
			
		while($row) 
		{
			for ( $i = 0; $i < count($this->arrOHLC_open); $i++ ) 
			{
				$data[$i][] = $this->getPoint($i, $row);

				$strLabelFormat = $this->labelFormat( $this->strLabel, $row );
				$clickdata[$i][] = $this->getActions( $row , $this->arrDataSeries[$i], $strLabelFormat );				
			}
			
			if( $this->cipherer != null )
				$row = $this->cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
			else 
				$row = $qResult->fetchAssoc();			
		}
		
		$this->connection->close();
		
		$series = array();
		for ( $i = 0; $i < count($this->arrOHLC_open); $i++ ) 
		{
			$series[] = $this->getSeriesData( $this->arrDataLabels[$i], $data[$i], $clickdata[$i], $i );
		}
		
		return $series;		
	}

	/**
	 * @return String
	 */
	protected function getSeriesType()
	{		
		if( $this->ohcl_type == "ohcl" ) 
			return "ohlc";

		return "candlestick";
	}	
	
	/**
	 * @param Number seriesNumber
	 * @param Array row
	 * @return Array
	 */
	protected function getPoint( $seriesNumber, $row )
	{
		if( $this->table_type!="db" || !count($this->chrt_array['customLabels']) )
		{
			$high = $row[ $this->arrOHLC_high[ $seriesNumber ] ];
			$low = $row[ $this->arrOHLC_low[ $seriesNumber ] ];
			$open = $row[ $this->arrOHLC_open[ $seriesNumber ] ];
			$close = $row[ $this->arrOHLC_close[ $seriesNumber ] ];
		}
		else
		{
			$high = $row[ $this->chrt_array['customLabels'][ $this->arrOHLC_high[ $seriesNumber ] ] ];
			$low = $row[ $this->chrt_array['customLabels'][ $this->arrOHLC_low[ $seriesNumber ] ] ];
			$open = $row[ $this->chrt_array['customLabels'][ $this->arrOHLC_open[ $seriesNumber ] ] ];
			$close = $row[ $this->chrt_array['customLabels'][ $this->arrOHLC_close[ $seriesNumber ] ] ];
		}

		return array( 
			"x" => $this->labelFormat( $this->strLabel, $row ), 
			"open" => $this->chart_xmlencode( $open + 0 ),
			"high" => $this->chart_xmlencode( $high + 0 ),
			"low" => $this->chart_xmlencode( $low + 0 ),
			"close" => $this->chart_xmlencode( str_replace(",", ".", $close) + 0 )
		);
	}
}
?>