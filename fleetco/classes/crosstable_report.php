<?php
$group_sort_y = array();
class CrossTableReport
{
	var $tableName;
	var $shortTableName;
	var $col_summary = array();
	var $group_header = array();
	var $rowinfo = array();
	var $total_summary;
	var $xml_array;
	var $is_value_empty;
	var $pageType;
	
	/*
	 *	@type Array
	 *	The list of field aliases from webreports
	 */
	var $arrDBFieldsList = array();
	
	/*
	 *	@type Boolean
	 *	Webreports - true if the report is database table based.
	 */
	var $wrdb = false;
	
	var $index_field_x;
	var $index_field_y;
	
	/**
	 * @type String
	 * The possible values are: "project", "db", "custom"
	 */
	protected $table_type = "project";
	
	/**
	 * An instance of the 'ViewControlsContainer' class 
	 * @type Object
	 */
	protected $viewControls;
	
	/**
	 * A flag indicating if the report is run from project pages (not a web-report)
	 * @type Boolean
	 */
	protected $fromWizard = false;
	
	/**
	 * An Instance of the 'ProjectSettings' class
	 * @type Object
	 */
	protected $pSet = null;
	
	/**
	 * The selected data field settings packed in an array.
	 * @type Array
	 */
	protected $dataFieldSettings = null;

	/**
	 * The report current data field name
	 */
	protected $dataField = "";
	
	/**
	 * The report current aggregate function
	 */
	protected $dataGroupFunction = "";
	
	/**
	 * An array of table keys
	 * @type Array	 
	 */
	protected $tableKeys = null;
	
	/**
	 * @type Connection
	 */
	protected $connection;
	
	protected $sessionPrefix;
	
	/**
	 * The flag indicating if the report
	 * is show on a dashboard
	 */
	protected $dashBased = false;
	
	/**
	 * The dashboard table name
	 */	
	protected $dashTName = "";
	
	
	/**
	 * @constructor
	 * @param Array rpt_array
	 * @param String strSQL
	 */
	function __construct($rpt_array, $strSQL)
	{
		$this->xml_array = $rpt_array;

		if( $rpt_array["table_type"] )
			$this->table_type = $rpt_array["table_type"];
		
		if( $rpt_array["fromWizard"] )
			$this->fromWizard = true;
			
		$this->wrdb = $rpt_array["wrdb"];
		$this->arrDBFieldsList = $rpt_array["arrDBFieldsList"];
		
		$this->pageType	= $rpt_array["pageType"];
		
		$this->tableName = $this->xml_array["tables"][0];
		$this->setDbConnection();
		
		$this->shortTableName = GetTableURL($this->tableName);
		if( strlen($this->shortTableName) == 0 )
			$this->shortTableName = $this->tableName;
			
		$this->pSet = new ProjectSettings($this->tableName, PAGE_REPORT);
		if( $this->fromWizard )
		{
			include_once getabspath("classes/controls/ViewControlsContainer.php");
			$this->viewControls = new ViewControlsContainer($this->pSet, PAGE_REPORT);
			$this->tableKeys = $this->pSet->getTableKeys();
			
			if( $rpt_array["dashBased"] )
			{
				$this->dashBased = true;
				$this->dashTName = $rpt_array["dashTName"];
			}
		}
		
		$this->setSessionPrefix( $rpt_array["sessionPrefix"] );
		$this->fillSessionVariables();


		$this->dataField = $this->getDataField( $_SESSION[$this->sessionPrefix."_field"] );
		if( !strlen($this->dataField) )
			$this->dataField = $_SESSION['webreports']['group_fields'][0]["name"];
		
		$this->initDataFieldSettings();
		$this->initDataGroupFunction($_SESSION[$this->sessionPrefix."_group_func"]);
		
				
		// assign index_field_x, index_field_y properties
		$this->setAxisFieldsIndices();

		if( $this->fromWizard )
			$fName = $this->CrossGoodFieldName( $this->dataField );		
		else
			$fName = $this->getDBFieldName($this->CrossGoodFieldName( $this->dataField ));

		if( $fName != " " )
			$ftype = $this->getFieldType($fName);

		$crtableSQL = $this->getstrSQL( $strSQL );
		$qResult = $this->connection->query( $crtableSQL );
		
		$group_y = array();
		$group_x = array();
		$sort_y = array();
		
		$arrdata = array();
		$arravgsum = array();
		$arravgcount = array();
		
		$avgsumx = array();
		$avgcountx = array();
		
		while( $data = $qResult->fetchNumeric() )
		{
			if( !in_array($data[1], $group_y) )
			{
				$group_y[] = $data[1];
				$sort_y[] = count($sort_y);
			}
			
			if( !in_array($data[2], $group_x) )
			{
				$group_x[] = $data[2];
				$this->col_summary["data"][ count($group_x) - 1 ]["col_summary"] = "&nbsp;";
				$this->col_summary["data"][ count($group_x) - 1 ]["id_col_summary"] = "total_x_".( count($group_x) - 1);
			}
			
			$key_y = array_search( $data[1], $group_y );
			
			$key_x = array_search( $data[2], $group_x );
			
			$avgsumx[ $key_x ] = 0;
			$avgcountx[ $key_x ] = 0;

			if( !$this->is_value_empty )
			{
				$arrdata[ $key_y ][ $key_x ] = $data[0];
				$arravgsum[ $key_y ][ $key_x ] = $data[3];
				$arravgcount[ $key_y ][ $key_x ] = $data[4];
			}
			else
				$arrdata[ $key_y ][ $key_x ] = "&nbsp;";
		}
		
		//	sort y groups
		global $group_sort_y;
		$group_sort_y = $group_y;
		SortForCrosstable($sort_y);
		
		
		foreach($sort_y as $key_y)
		{
			$value_y = $group_y[ $key_y ];
			$this->rowinfo[ $key_y ]["row_summary"] = "&nbsp;";
			$this->rowinfo[ $key_y ]["group_y"] = $this->getAxisDisplayValue($this->index_field_y, $value_y);
			
			foreach($group_x as $key_x => $value_x)
			{
				if( array_key_exists($key_y, $arrdata) )
				{
					$rowValue = "&nbsp;";
					
					if( array_key_exists($key_x, $arrdata[ $key_y ]) && !$this->is_value_empty && !is_null($arrdata[ $key_y ][ $key_x ]) )
					{
						$rowValue = $arrdata[ $key_y ][ $key_x ];
						if( $this->dataGroupFunction == "avg" && !IsTimeType($ftype))
							$rowValue = round($rowValue, 2);
					}
					
					$this->rowinfo[ $key_y ]["row_record"]["data"][ $key_x ]["row_value"] = $rowValue;	
					$this->rowinfo[ $key_y ]["row_record"]["data"][ $key_x ]["id_data"] = $key_y."_".$key_x;
				}
			}
			$this->rowinfo[ $key_y ]["id_row_summary"] = "total_y_".$key_y;
		}

		foreach($group_x as $key_x => $value_x)
		{
			if($value_x != "")
				$this->group_header["data"][ $key_x ]["gr_value"] = $this->getAxisDisplayValue($this->index_field_x, $value_x);
			else
				$this->group_header["data"][ $key_x ]["gr_value"]="&nbsp;";
		}

		$sum_x = $this->xml_array["group_fields"][ count($this->xml_array["group_fields"]) - 1 ]["sum_x"];
		$sum_y = $this->xml_array["group_fields"][ count($this->xml_array["group_fields"]) - 1 ]["sum_y"];
		$sum_total = $this->xml_array["group_fields"][ count($this->xml_array["group_fields"]) - 1 ]["sum_total"];
		
		$this->total_summary = "&nbsp;";
		foreach($this->rowinfo as $key_y => $obj_y)
		{
			$obj_x = $obj_y["row_record"]["data"];
			foreach($obj_x as $key_x => $value)
			{
				if($value["row_value"] !== "&nbsp;")
				{
					switch($this->dataGroupFunction)
					{
						case "sum":
							if(!is_null($value["row_value"]))
							{
								$this->rowinfo[$key_y]["row_summary"] += $value["row_value"];
								$this->col_summary["data"][$key_x]["col_summary"] += $value["row_value"];
								$this->total_summary += $value["row_value"];
							}
						break;
						case "min":
							if(($this->rowinfo[$key_y]["row_summary"] === "&nbsp;" || $value["row_value"]<$this->rowinfo[$key_y]["row_summary"]) && !is_null($value["row_value"]))
								$this->rowinfo[$key_y]["row_summary"] = $value["row_value"];
							if(($this->col_summary["data"][$key_x]["col_summary"] === "&nbsp;" || $this->col_summary["data"][$key_x]["col_summary"]>$value["row_value"]) && !is_null($value["row_value"]))
								$this->col_summary["data"][$key_x]["col_summary"] = $value["row_value"];
							if(($this->total_summary === "&nbsp;" || $this->total_summary>$value["row_value"]) && !is_null($value["row_value"]))
								$this->total_summary = $value["row_value"];
								
						break;
						case "max":
							if($this->rowinfo[$key_y]["row_summary"] === "&nbsp;" || $value["row_value"]>$this->rowinfo[$key_y]["row_summary"])
								$this->rowinfo[$key_y]["row_summary"] = $value["row_value"];
							if($this->col_summary["data"][$key_x]["col_summary"] === "&nbsp;" || $this->col_summary["data"][$key_x]["col_summary"]<$value["row_value"])								
								$this->col_summary["data"][$key_x]["col_summary"] = $value["row_value"];
							if($this->total_summary === "&nbsp;" || $this->total_summary<$value["row_value"])
								$this->total_summary = $value["row_value"];
						break;
						case "avg":
							$this->rowinfo[$key_y]["avgsumy"] += $arravgsum[$key_y][$key_x];
							$this->rowinfo[$key_y]["avgcounty"] += $arravgcount[$key_y][$key_x];
							$this->rowinfo[$key_y]["row_record"]["data"][$key_x]["avgsumx"] += $arravgsum[$key_y][$key_x];
							$this->rowinfo[$key_y]["row_record"]["data"][$key_x]["avgcountx"] += $arravgcount[$key_y][$key_x];
						break;
					}
					if($sum_x == true && !$this->is_value_empty && !is_null($this->col_summary["data"][$key_x]["col_summary"]))
					{
						if(is_numeric($this->col_summary["data"][$key_x]["col_summary"]))
							$this->col_summary["data"][$key_x]["col_summary"] = round($this->col_summary["data"][$key_x]["col_summary"],2);
					}
					else
						$this->col_summary["data"][$key_x]["col_summary"] = "&nbsp;";
				}
			}
			if($sum_y == true && !$this->is_value_empty && !is_null($this->rowinfo[$key_y]["row_summary"]))
			{
				if(is_numeric($this->rowinfo[$key_y]["row_summary"]))
					$this->rowinfo[$key_y]["row_summary"] = round($this->rowinfo[$key_y]["row_summary"],2);
			}
			else
				$this->rowinfo[$key_y]["row_summary"] = "&nbsp;";
		}
		
		if($this->dataGroupFunction == "avg")
		{
			$total_sum = 0;
			$total_count = 0;
			
			foreach($this->rowinfo as $key_y => $valuey)
			{
				if($valuey["avgcounty"])
				{
					$this->rowinfo[$key_y]["row_summary"] = round($valuey["avgsumy"]/$valuey["avgcounty"],2);
					$total_sum += $valuey["avgsumy"];
					$total_count += $valuey["avgcounty"];
				}
				foreach($valuey["row_record"]["data"] as $key_x => $valuex)
				{
					if($valuex["avgcountx"])
					{
						$avgsumx[$key_x] += $valuex["avgsumx"];
						$avgcountx[$key_x] += $valuex["avgcountx"];
						$total_sum += $valuex["avgsumx"];
						$total_count += $valuex["avgcountx"];
					}
				}
			}
			foreach($avgsumx as $key => $value)
			{
				if($avgcountx[$key])
					$this->col_summary["data"][$key]["col_summary"] = round($value/$avgcountx[$key],2);
			}
			if($total_count)
				$this->total_summary = $total_sum/$total_count;
		}
		
		if( $sum_total != true || $this->is_value_empty )
			$this->total_summary = "&nbsp;";
		elseif( is_numeric($this->total_summary) )
			$this->total_summary = round($this->total_summary,2);
		
		$this->updateRecordsDisplayedFields();
	}

	/**
	 * Get view value basing on 'view as'
	 */
	function getViewValue( $value, $useTimeFormat = true )
	{
		$strViewFormat = $this->pSet->getViewFormat( $this->dataField );
		if( $strViewFormat == FORMAT_TIME && is_numeric($value) )
		{
			$d = intval($value / 86400);
			$h = intval(($value % 86400) / 3600);
			$m = intval((($value % 86400) % 3600) / 60);
			$s = (($value % 86400) % 3600) % 60;

			$value = $d > 0 ? $d . 'd ' : '';
			if ( $useTimeFormat )
			{
				$value .= str_format_time(array(0, 0, 0, $h, $m, $s));
			}
			else
			{
				$value .= date("H:i:s", strtotime($h.":".$m.":".$s));
			}
		}
		else
		{
			$control = $this->viewControls->getControl( $this->dataField );
			$controlData = array( $this->dataField => $value );
			$value = $control->showDBValue( $controlData, "" );
		}

		return $value;
	}	

	/**
	 * Update the records and summaries data basing on 'view as' and 'total' settings 
	 */
	protected function updateRecordsDisplayedFields()
	{		
		if( !count($this->rowinfo) )
			return;
		
		if( !$this->fromWizard )
		{
			$this->updateWebReportRecordsDisplayedFields( );
			return;
		}
		
		foreach($this->rowinfo as $key_y => $data)
		{
			foreach($data["row_record"]["data"] as $key_x => $fieldData)
			{
				if( $fieldData["row_value"] == "&nbsp;" )
					continue;

				$this->rowinfo[ $key_y ]["row_record"]["data"][$key_x]["row_value"] = $this->getViewValue($fieldData["row_value"]);
			}

			if( $data["row_summary"] != "&nbsp;" ) 
			{
				$this->rowinfo[ $key_y ]["row_summary"] = $this->getViewValue( $data["row_summary"], false);
			}
		}

		if( $this->total_summary != "&nbsp;" )
		{
			$this->total_summary = $this->getViewValue($this->total_summary, false);
		}

		foreach($this->col_summary["data"] as $key => $summaryData)
		{
			if( $summaryData["col_summary"] == "&nbsp;" )
				continue;

			$this->col_summary["data"][$key]["col_summary"] = $this->getViewValue($summaryData["col_summary"], false);
		}		
	}
	
	/**
	 * Apply currency formatting to the data field values and totals (for Web reports only)
	 */
	protected function updateWebReportRecordsDisplayedFields()
	{
		if( $this->dataFieldSettings['curr'] != true )
			return;
			
		foreach($this->rowinfo as $arrkey => $arrfield)
		{
			foreach($arrfield["row_record"]["data"] as $fieldkey => $fieldvalue)
			{
				if( is_numeric($fieldvalue["row_value"]) )
					$this->rowinfo[$arrkey]["row_record"]["data"][$fieldkey]["row_value"] = str_format_currency($fieldvalue["row_value"]);
			}
			
			if( is_numeric($arrfield["row_summary"]) )
				$this->rowinfo[$arrkey]["row_summary"] = str_format_currency($arrfield["row_summary"]);
		}
		
		if( is_numeric($this->total_summary) )
			$this->total_summary = str_format_currency($this->total_summary);
		
		foreach( $this->col_summary["data"] as $arrkey => $arrvalue )
		{
			if(is_numeric($arrvalue["col_summary"]))
				$this->col_summary["data"][$arrkey]["col_summary"] = str_format_currency($arrvalue["col_summary"]);
		}	
	}
	
	/**
	 *
	 */
	protected function setSessionPrefix( $sessionPrefix = "")
	{
		if( $sessionPrefix )
			$this->sessionPrefix = $sessionPrefix;
		else
			$this->sessionPrefix = $this->shortTableName;
	}
	
	/**
	 * Fill a cross-table report's session variable
	 */
	protected function fillSessionVariables()
	{
		if( postvalue("group_func") != "" )
			$_SESSION[$this->sessionPrefix."_group_func"] = postvalue("group_func");
			
		if( postvalue("field") != "" )
			$_SESSION[$this->sessionPrefix."_field"] = postvalue("field");
			
		if( postvalue("axis_x") != "" )
			$_SESSION[$this->sessionPrefix."_gr_x"] = postvalue("axis_x");
			
		if( postvalue("axis_y") != "" )
			$_SESSION[$this->sessionPrefix."_gr_y"] = postvalue("axis_y");
			
		if( postvalue("rname") != "" )
			$_SESSION[$this->sessionPrefix."_rname"] = postvalue("rname");		
	}
	
	public function getCrossTableData()
	{
		return $this->rowinfo;
	}
	
	public function getCrossTableHeader()
	{
		return $this->group_header;
	}
	
	public function getCrossTableSummary()
	{
		return $this->col_summary;
	}
	
	public function getTotalSummary()
	{
		return $this->total_summary;
	}
	
	/**
	 * Assign index_field_x, index_field_y properties
	 */
	protected function setAxisFieldsIndices()
	{
		$gr_x = $_SESSION[$this->sessionPrefix."_gr_x"];
		$gr_y = $_SESSION[$this->sessionPrefix."_gr_y"];
		
		if( $gr_x == "" )
			$this->index_field_x = $this->getFirstGroupField("x");
		else 
			$this->index_field_x = $gr_x;
		
		if( $gr_y == "" )
			$this->index_field_y = $this->getFirstGroupField("y");
		else
			$this->index_field_y = $gr_y;		
	}	
	
	/**
	 * Assign 'connection' property 
	 */
	 
	protected function setDbConnection()
	{
		global $cman;
		if($this->isProjectDB())
			$this->connection = $cman->byTable( $this->tableName ); //#9875
		else
			$this->connection = $cman->getDefault();
	}	

	/**
	 * Get a report's SQL query string
	 * @param String strSQL		The report table's SQL query
	 * @return String	
	 */
	protected function getstrSQL( $strSQL )
	{
		global $strTableName;
			
		$group_x = $this->getIntervalType( $this->index_field_x );
		$group_y = $this->getIntervalType( $this->index_field_y );
		if( $this->fromWizard )
			$fName = $this->CrossGoodFieldName( $this->dataField );		
		else
			$fName = $this->getDBFieldName($this->CrossGoodFieldName( $this->dataField ));		
		
		$select_field = "' ', ";
		$avg_func = "";
		if( $fName != " " )
		{	
			$strViewFormat = $this->pSet->getViewFormat( $this->dataField );
			$ftype = $this->getFieldType($fName);
			$isTime = $strViewFormat == FORMAT_TIME || IsTimeType($ftype);
			
			if ( $isTime )
			{
				$select_field = $this->dataGroupFunction."(".$this->connection->timeToSecWrapper($fName)."), ";
			}
			else
			{
				$select_field = $this->dataGroupFunction."(".$this->connection->addFieldWrappers($fName)."), ";
			}
			
			$this->is_value_empty = false;

			if( $this->dataGroupFunction == "avg" && !IsDateFieldType($ftype) )
			{
				$sum_for_avg = !$isTime ? "sum(".$this->connection->addFieldWrappers($fName).")" : "sum(".$this->connection->timeToSecWrapper($fName).")";
				$avg_func = ", " . $sum_for_avg . " as ".$this->connection->addFieldWrappers("avg_sum")
					.", count(".$this->connection->addFieldWrappers($fName).") as ".$this->connection->addFieldWrappers("avg_count");
			}
			else
				$avg_func = ", 1 as ".$this->connection->addFieldWrappers("avg_sum").", 1 as ".$this->connection->addFieldWrappers("avg_count");	
		}
		
		$whereClause = "";

		if( $this->pageType == PAGE_REPORT ) {
			if( tableEventExists("BeforeQueryReport", $strTableName) ) 
			{
				$eventObj = getEventObject($strTableName);
				$eventObj->BeforeQueryReport($whereClause);
				if( $whereClause )
					$whereClause = " where ".$whereClause;
			}
		}
		else {
			if( tableEventExists("BeforeQueryReportPrint", $strTableName) ) 
			{
				$eventObj = getEventObject($strTableName);
				$eventObj->BeforeQueryReportPrint($whereClause);
				if( $whereClause )
					$whereClause = " where ".$whereClause;
			}
			
		}
		
		
		if( $this->fromWizard ) {
			$gx0 = $group_x[0];
			$gx1 = $group_x[1];
			$gy0 = $group_y[0];
			$gy1 = $group_y[1];
		} else {
			$gx0 = $this->getDBFieldName($group_x[0]);
			$gx1 = $this->getDBFieldName($group_x[1]);
			$gy0 = $this->getDBFieldName($group_y[0]);
			$gy1 = $this->getDBFieldName($group_y[1]);
		}
		$selectClause = "select ".$select_field.$gy0.", ".$gx0. $avg_func;
		$groupByClause = "group by ".$gx1.", ".$gy1;
		$orderByClause = "order by ".$gx1.",".$gy1;
		
		if( $this->connection->dbType != nDATABASE_Oracle )
		{
			if( $this->connection->dbType == nDATABASE_MSSQLServer )
			{
				$pos = strrpos(strtoupper($strSQL), "ORDER BY");
				if( $pos )
					$strSQL = substr($strSQL, 0, $pos);
			}
			return $selectClause." from (".$strSQL.") as cross_table".$whereClause." ".$groupByClause." ".$orderByClause;
		}

		return $selectClause." from (".$strSQL.")".$whereClause." ".$groupByClause." ".$orderByClause;
	}
	
	/**
	 * @param Number index
	 * @return Array
	 */
	protected function getIntervalType($index)
	{
		$field = $this->xml_array["group_fields"][$index]["name"];
		$ftype = $this->getFieldType($field);
		
		$arr = $this->xml_array["group_fields"];
		for($i = 0; $i < count($arr) - 1; $i++)
		{
			if($field == $arr[$i]["name"] && $index == $i)
			{
				$int_type = $arr[$i]["int_type"];
				break;
			}
		}
		
		if( $int_type == 0 ) 
		{
			$wrappedGoodFieldName = $this->connection->addFieldWrappers($this->CrossGoodFieldName($field));
			return array( $wrappedGoodFieldName, $wrappedGoodFieldName );
		}
		
		if( IsNumberType($ftype) )
			return $this->getNumberTypeInterval($field, $int_type);
		
		if( IsCharType( $ftype ) )
			return $this->getCharTypeInterval($field, $int_type);
		
		if( IsDateFieldType( $ftype ) )
			return $this->getDateTypeInterval($field, $int_type);
	}
	
	protected function getDateTypeInterval($field, $int_type)
	{
		$field = $this->connection->addFieldWrappers( $this->CrossGoodFieldName($field) );
		switch( $this->connection->dbType )
		{
			case nDATABASE_MySQL:
				if($int_type == 1) // DATE_INTERVAL_YEAR
					return array("year(".$field.")*10000+0101","YEAR(".$field.")");
				elseif($int_type == 2) // DATE_INTERVAL_QUARTER
					return array("year(".$field.")*10000+QUARTER(".$field.")*100+1","year(".$field."),QUARTER(".$field.")");
				elseif($int_type == 3) // DATE_INTERVAL_MONTH
					return array("year(".$field.")*10000+month(".$field.")*100+1","year(".$field."),month(".$field.")");
				elseif($int_type == 4) // DATE_INTERVAL_WEEK
					return array("year(".$field.")*10000+week(".$field.")*100+01","year(".$field."),WEEK(".$field.")");
				elseif($int_type == 5) // DATE_INTERVAL_DAY
					return array("year(".$field.")*10000+month(".$field.")*100+day(".$field.")","year(".$field."),month(".$field."),day(".$field.")");
				elseif($int_type == 6) // DATE_INTERVAL_HOUR
					return array("year(".$field.")*1000000+month(".$field.")*10000+day(".$field.")*100+HOUR(".$field.")","year(".$field."),month(".$field."),day(".$field."),hour(".$field.")");
				elseif($int_type == 7) // DATE_INTERVAL_MINUTE
					return array("year(".$field.")*1000000+month(".$field.")*1000000+day(".$field.")*10000+HOUR(".$field.")*100+minute(".$field.")","year(".$field."),month(".$field."),day(".$field."),hour(".$field."),minute(".$field.")");
				break;

			case nDATABASE_Oracle:
				if($int_type == 1) // DATE_INTERVAL_YEAR
					return array("TO_CHAR(".$field.", 'YYYY')*10000+0101","TO_CHAR(".$field.", 'YYYY')");
				elseif($int_type == 2) // DATE_INTERVAL_QUARTER
					return array("TO_CHAR(".$field.", 'YYYY')*10000+TO_CHAR(".$field.",'Q')*100+1","TO_CHAR(".$field.", 'YYYY'),TO_CHAR(".$field.",'Q')");
				elseif($int_type == 3) // DATE_INTERVAL_MONTH
					return array("TO_CHAR(".$field.", 'YYYY')*10000+TO_CHAR(".$field.".'MM')*100+1","TO_CHAR(".$field.", 'YYYY'),TO_CHAR(".$field.".'MM')");
				elseif($int_type == 4) // DATE_INTERVAL_WEEK
					return array("TO_CHAR(".$field.", 'YYYY')*10000+TO_CHAR(".$field.",'W')*100+01","TO_CHAR(".$field.", 'YYYY'),TO_CHAR(".$field.",'W')");
				elseif($int_type == 5) // DATE_INTERVAL_DAY
					return array("TO_CHAR(".$field.", 'YYYY')*10000+TO_CHAR(".$field.",'MM')*100+TO_CHAR(".$field.",'DD')","TO_CHAR(".$field.", 'YYYY'),TO_CHAR(".$field.",'MM'),TO_CHAR(".$field.",'DD')");
				elseif($int_type == 6) // DATE_INTERVAL_HOUR
					return array("TO_CHAR(".$field.", 'YYYY')*1000000+TO_CHAR(".$field.",'MM')*10000+TO_CHAR(".$field.",'DD')*100+TO_CHAR(".$field.",'HH')","TO_CHAR(".$field.", 'YYYY'),TO_CHAR(".$field.",'MM'),TO_CHAR(".$field.",'DD'),TO_CHAR(".$field.",'HH')");
				elseif($int_type == 7) // DATE_INTERVAL_MINUTE
					return array("TO_CHAR(".$field.", 'YYYY')*1000000+TO_CHAR(".$field.",'MM')*1000000+TO_CHAR(".$field.",'DD')*10000+TO_CHAR(".$field.",'HH')*100+TO_CHAR(".$field.",'MI')","TO_CHAR(".$field.", 'YYYY'),TO_CHAR(".$field.",'MM'),TO_CHAR(".$field.",'DD'),TO_CHAR(".$field.",'HH'),TO_CHAR(".$field.",'MI')");
				break;

			case nDATABASE_MSSQLServer:
				if($int_type == 1) // DATE_INTERVAL_YEAR
					return array("datepart(yyyy,".$field.")*10000+0101","datepart(yyyy,".$field.")");
				elseif($int_type == 2) // DATE_INTERVAL_QUARTER
					return array("datepart(yyyy,".$field.")*10000+datepart(qq,".$field.")*100+1","datepart(yyyy,".$field."),datepart(qq,".$field.")");
				elseif($int_type == 3) // DATE_INTERVAL_MONTH
					return array("datepart(yyyy,".$field.")*10000+datepart(mm,".$field.")*100+1","datepart(yyyy,".$field."),datepart(mm,".$field.")");
				elseif($int_type == 4) // DATE_INTERVAL_WEEK
					return array("datepart(yyyy,".$field.")*10000+(datepart(ww,".$field.")-1)*100+01","datepart(yyyy,".$field."),datepart(ww,".$field.")");
				elseif($int_type == 5) // DATE_INTERVAL_DAY
					return array("datepart(yyyy,".$field.")*10000+datepart(mm,".$field.")*100+datepart(dd,".$field.")","datepart(yyyy,".$field."),datepart(mm,".$field."),datepart(dd,".$field.")");
				elseif($int_type == 6) // DATE_INTERVAL_HOUR
					return array("datepart(yyyy,".$field.")*1000000+datepart(mm,".$field.")*10000+datepart(dd,".$field.")*100+datepart(hh,".$field.")","datepart(yyyy,".$field."),datepart(mm,".$field."),datepart(dd,".$field."),datepart(hh,".$field.")");
				elseif($int_type == 7) // DATE_INTERVAL_MINUTE
					return array("datepart(yyyy,".$field.")*1000000+datepart(mm,".$field.")*1000000+datepart(dd,".$field.")*10000+datepart(hh,".$field.")*100+datepart(mi,".$field.")","datepart(yyyy,".$field."),datepart(mm,".$field."),datepart(dd,".$field."),datepart(hh,".$field."),datepart(mi,".$field.")");
				break;

			case nDATABASE_Access:
				if($int_type == 1) // DATE_INTERVAL_YEAR
					return array("datepart('yyyy',".$field.")*10000+0101","datepart('yyyy',".$field.")");
				elseif($int_type == 2) // DATE_INTERVAL_QUARTER
					return array("datepart('yyyy',".$field.")*10000+datepart('q',".$field.")*100+1","datepart('yyyy',".$field."),datepart('q',".$field.")");
				elseif($int_type == 3) // DATE_INTERVAL_MONTH
					return array("datepart('yyyy',".$field.")*10000+datepart('m',".$field.")*100+1","datepart('yyyy',".$field."),datepart('m',".$field.")");
				elseif($int_type == 4) // DATE_INTERVAL_WEEK
					return array("datepart('yyyy',".$field.")*10000+(datepart('ww',".$field.")-1)*100+01","datepart('yyyy',".$field."),datepart('ww',".$field.")");
				elseif($int_type == 5) // DATE_INTERVAL_DAY
					return array("datepart('yyyy',".$field.")*10000+datepart('m',".$field.")*100+datepart('d',".$field.")","datepart('yyyy',".$field."),datepart('m',".$field."),datepart('d',".$field.")");
				elseif($int_type == 6) // DATE_INTERVAL_HOUR
					return array("datepart('yyyy',".$field.")*1000000+datepart('m',".$field.")*10000+datepart('d',".$field.")*100+datepart('h',".$field.")","datepart('yyyy',".$field."),datepart('m',".$field."),datepart('d',".$field."),datepart('h',".$field.")");
				elseif($int_type == 7) // DATE_INTERVAL_MINUTE
					return array("datepart('yyyy',".$field.")*1000000+datepart('m',".$field.")*1000000+datepart('d',".$field.")*10000+datepart('h',".$field.")*100+datepart('n',".$field.")","datepart('yyyy',".$field."),datepart('m',".$field."),datepart('d',".$field."),datepart('h',".$field."),datepart('n',".$field.")");
				break;

			case nDATABASE_PostgreSQL: 
				if($int_type == 1) // DATE_INTERVAL_YEAR
					return array("date_part('year',".$field.")*10000+0101","date_part('year',".$field.")");
				elseif($int_type == 2) // DATE_INTERVAL_QUARTER
					return array("date_part('year',".$field.")*10000+date_part('quarter',".$field.")*100+1","date_part('year',".$field."),date_part('quarter',".$field.")");
				elseif($int_type == 3) // DATE_INTERVAL_MONTH
					return array("date_part('year',".$field.")*10000+date_part('month',".$field.")*100+1","date_part('year',".$field."),date_part('month',".$field.")");
				elseif($int_type == 4) // DATE_INTERVAL_WEEK
					return array("date_part('year',".$field.")*10000+(date_part('week',".$field.")-1)*100+01","date_part('year',".$field."),date_part('week',".$field.")");
				elseif($int_type == 5) // DATE_INTERVAL_DAY
					return array("date_part('year',".$field.")*10000+date_part('month',".$field.")*100+date_part('days',".$field.")","date_part('year',".$field."),date_part('month',".$field."),date_part('days',".$field.")");
				elseif($int_type == 6) // DATE_INTERVAL_HOUR
					return array("date_part('year',".$field.")*1000000+date_part('month',".$field.")*10000+date_part('days',".$field.")*100+date_part('hour',".$field.")","date_part('year',".$field."),date_part('month',".$field."),date_part('days',".$field."),date_part('hour',".$field.")");
				elseif($int_type == 7) // DATE_INTERVAL_MINUTE
					return array("date_part('year',".$field.")*1000000+date_part('month',".$field.")*1000000+date_part('days',".$field.")*10000+date_part('hour',".$field.")*100+date_part('minute',".$field.")","date_part('year',".$field."),date_part('month',".$field."),date_part('days',".$field."),date_part('hour',".$field."),date_part('minute',".$field.")");
				break;

			case nDATABASE_Informix:
				return "substring(".$field." from 1 for ".$int_type.")"; //fix it!

			case nDATABASE_SQLite3:
				return array($field, $field);
				
			case nDATABASE_DB2: 
				if($int_type == 1) // DATE_INTERVAL_YEAR
					return array("year(".$field.")*10000+0101","YEAR(".$field.")");
				elseif($int_type == 2) // DATE_INTERVAL_QUARTER
					return array("year(".$field.")*10000+QUARTER(".$field.")*100+1","year(".$field."),QUARTER(".$field.")");
				elseif($int_type == 3) // DATE_INTERVAL_MONTH
					return array("year(".$field.")*10000+month(".$field.")*100+1","year(".$field."),month(".$field.")");
				elseif($int_type == 4) // DATE_INTERVAL_WEEK
					return array("year(".$field.")*10000+week(".$field.")*100+01","year(".$field."),WEEK(".$field.")");
				elseif($int_type == 5) // DATE_INTERVAL_DAY
					return array("year(".$field.")*10000+month(".$field.")*100+day(".$field.")","year(".$field."),month(".$field."),day(".$field.")");
				elseif($int_type == 6) // DATE_INTERVAL_HOUR
					return array("year(".$field.")*1000000+month(".$field.")*10000+day(".$field.")*100+HOUR(".$field.")","year(".$field."),month(".$field."),day(".$field."),hour(".$field.")");
				elseif($int_type == 7) // DATE_INTERVAL_MINUTE
					return array("year(".$field.")*1000000+month(".$field.")*1000000+day(".$field.")*10000+HOUR(".$field.")*100+minute(".$field.")","year(".$field."),month(".$field."),day(".$field."),hour(".$field."),minute(".$field.")");
				break;
		}
	}
	
	protected function getNumberTypeInterval($field, $int_type)
	{
		return array("floor(".$this->connection->addFieldWrappers( $this->CrossGoodFieldName($field) )."/".$int_type.")*".$int_type,
			 "floor(".$this->connection->addFieldWrappers( $this->CrossGoodFieldName($field) )."/".$int_type.")*".$int_type);
	}
	
	/**
	 * @param String field
	 * @param Number int_type
	 * @return Array
	 */
	protected function getCharTypeInterval($field, $int_type)
	{
		$field = $this->connection->addFieldWrappers( $this->CrossGoodFieldName($field) );
		switch( $this->connection->dbType )
		{
			case nDATABASE_MySQL:
			case nDATABASE_MSSQLServer:
			case nDATABASE_Access:
				return array("left(".$field.",".$int_type.")","left(".$field.",".$int_type.")");

			case nDATABASE_PostgreSQL:
			case nDATABASE_Informix:
				return array("substring(".$field." from 1 for ".$int_type.")","substring(".$field." from 1 for ".$int_type.")");

			case nDATABASE_Oracle:
			case nDATABASE_SQLite3:
			case nDATABASE_DB2:
				return array("substr(".$field.",1,".$int_type.")","substr(".$field.",1,".$int_type.")");
		}
	}
	
	/**
	 * @return Array
	 */
	public function getSelectedValue()
	{
		$arr = array();
		$firstarr = array();
		foreach($this->xml_array["totals"] as $key => $value)
		{
			if(count($firstarr) == 0)
				$firstarr[] = $this->FullFieldName($value["name"],$value["table"]);
			if($value["min"] == true || $value["max"] == true || $value["sum"] == true || $value["avg"] == true)
			{
				$arr[] = $this->FullFieldName($value["name"],$value["table"]);
			}
		}
		if(count($arr) == 0)
			$arr = $firstarr;
		return $arr;
	}
	
	/**
	 * 
	 * @param {String} hostPageLocation	(optional)
	 * @param {String} hostPageId (optional)
	 */
	public function getRadioGroupFunctions( $hostPageLocation = "", $hostPageId = "" )
	{
		$arr = array();
		$arrDisplay = array();
		$res = "";
		if($this->dataFieldSettings["sum"] == true)
		{
			$arrDisplay[] = mlang_message("SUM");
			$arr[] = "sum";
		}
		if($this->dataFieldSettings["max"] == true)
		{
			$arrDisplay[] = mlang_message("MAX");
			$arr[] = "max";
		}
		if($this->dataFieldSettings["min"] == true)
		{
			$arrDisplay[] = mlang_message("MIN");
			$arr[] = "min";
		}
		if($this->dataFieldSettings["avg"] == true)
		{
			$arrDisplay[] = mlang_message("AVERAGE");
			$arr[] = "avg";
		}

		if(!count($arr))
		{
				$arr[] = "sum";
				$arrDisplay[] = mlang_message("SUM");
		}
		
		$res = "";	
		$onclick = "onclick='refresh_crosstable(\"".$hostPageLocation."\", \"".$hostPageId."\", \"".$this->dashBased."\", \"".$this->dashTName."\");'";
		for($j = 0; $j < count($arr); $j++)
		{
			$s = "";
			if($res == "" || $this->dataGroupFunction == $arr[$j])
				$s = "checked";
				
			$res.= "<input type=radio value='".$arr[$j]."' name=\"group_func".$hostPageId."\" ".$s." ".$onclick."> "
				.$arrDisplay[$j]."&nbsp;&nbsp;";
		}
		return $res;
	}
	
	public function ajax_refresh_crosstable( $hostPageLocation = "", $hostPageId = "" )
	{
		$reportData = array(
			$this->rowinfo,
			$this->col_summary,
			$this->total_summary,
			$this->getTotalsName( $this->dataGroupFunction ),
			$this->getRadioGroupFunctions( $hostPageLocation, $hostPageId )
		);
	
		echo my_json_encode( $reportData );
	}
	
	public function getGroupFields($axis)
	{
		$res = "";
		$label = $this->xml_array["totals"];
		$arr = $this->xml_array["group_fields"];
		for($i = 0; $i < count($arr) - 1; $i++)
		{
			$s = "";
			if($axis == "x" && $arr[$i]["group_type"] == "x" || $axis == "y" && $arr[$i]["group_type"] == "y" || $arr[$i]["group_type"] == "all")
			{
				if($axis == "x" && $this->index_field_y != $i || $axis == "y" && $this->index_field_x != $i)
				{
					if($this->index_field_x == $i && $axis == "x" || $this->index_field_y == $i && $axis == "y")
						$s = "selected";
					$strlabel = "";
					foreach($label as $val)
					{
						if($arr[$i]["name"] == $this->FullFieldName($val["name"],$val["table"]))
						{
							$strlabel = $val["label"];
							break;
						}
					}
					$res.= "<option value='".$i."' ".$s.">".$strlabel."</option>";
				}
			}
		}
		return $res;
	}
	
	protected function getFirstGroupField($axis)
	{
		$arr = $this->xml_array["group_fields"];
		$arrX = array();
		$arrY = array();
		$arrAll = array();
		
		for($i = 0; $i < count($arr) - 1; $i++)
		{
			if($arr[$i]["group_type"] == "x")
				$arrX[] = $i;
			if($arr[$i]["group_type"] == "y")
				$arrY[] = $i;
			if($arr[$i]["group_type"] == "all")
				$arrAll[] = $i;
		}	
		if(count($arrX) > 0 && $axis == "x")
			return $arrX[0];
		if(count($arrY) > 0 && $axis == "y")
			return $arrY[0];
		if(count($arrX) == 0 && $axis == "x")
			return $arrAll[0];
		if(count($arrY) == 0 && $axis == "y")
		{
			if(count($arrX) == 0)
				return $arrAll[1];
			else
				return $arrAll[0];
		}
	}
	
	/**
	 * Get axes displyed values
	 * @param Number index
	 * @param String value
	 * @return String
	 */
	protected function getAxisDisplayValue($index, $value)
	{
		global $locale_info;
		
		if( $value == "" || is_null($value) )
			return "";
				
		$groupFieldsData = $this->xml_array["group_fields"];
		$field = $groupFieldsData[ $index ]["name"];
		$int_type = $groupFieldsData[ $index ]["int_type"];
		if( $this->fromWizard )
			$control = $this->viewControls->getControl( $field );
		
		$ftype = $this->getFieldType($field);		

		if ( $int_type == 0 ) 
		{	
			// The 'Normal' interval is set
			if( $this->fromWizard )
			{
				$data = array( $field => $value );
				return $control->showDBValue( $data, "" );		
			}
			
			if ( $this->table_type != "db" )
				$fieldIdentifier = $this->xml_array["tables"][0]."_".$field;
			else
				$fieldIdentifier = $this->CrossGoodFieldName($field);
			
			if( $this->xml_array['totals'][ $fieldIdentifier ]['curr'] == true )
				return str_format_currency($value);

			if( IsDateFieldType( $ftype ) )
			{
				return format_shortdate( db2time($value) );
			}
			
			return xmlencode($value);
		}
		
		
		if ( IsNumberType( $ftype ) ) 
		{
			$start = $value - ($value % $int_type);
			$end = $start + $int_type;
			
			if( $this->fromWizard ) 
			{
				$dataStart = array( $field => $start );
				$dataEnd = array( $field => $end );
				return $control->showDBValue( $dataStart, "" )." - ".$control->showDBValue( $dataEnd, "");
			}

			if( $this->table_type != "db" )
				$fieldIdentifier = $this->xml_array["tables"][0]."_".$field;
			else
				$fieldIdentifier = $this->CrossGoodFieldName($field);
			
			if( $this->xml_array['totals'][ $fieldIdentifier ]['curr'] == true )
				return str_format_currency($start)." - ".str_format_currency($end);
			
			return $start." - ".$end;
		} 
		
		if ( IsCharType( $ftype ) ) 
		{
			return xmlencode(substr($value,0,$int_type));
		} 
		
		if ( IsDateFieldType( $ftype ) ) 
		{
			$dvalue = substr($value, 0, 4).'-'.substr($value, 4, 2).'-'.substr($value, 6, 2);
			
			if( strlen($value) == 10 )
				$dvalue.=" ".substr($value, 8, 2)."00:00";
			elseif( strlen($value) == 12 )
				$dvalue.=" ".substr($value, 8, 2).":".substr($value, 10, 2).":00";
			
			$tm = db2time($dvalue);
			if( !count($tm) )
				return "";
		
			switch( $int_type )
			{
				case 1: // DATE_INTERVAL_YEAR
					return $tm[0];
				case 2: // DATE_INTERVAL_QUARTER
					return $tm[0]."/Q".$tm[1];
				case 3: // DATE_INTERVAL_MONTH
					return @$locale_info[ "LOCALE_SABBREVMONTHNAME".$tm[1] ]." ".$tm[0];
				case 4: // DATE_INTERVAL_WEEK
					$dates = $this->getDatesByWeek($tm[1] + 1, $tm[0]);
					return format_shortdate( db2time($dates[0]) ) . ' - ' . format_shortdate( db2time($dates[1]) );				
				case 5: // DATE_INTERVAL_DAY
					return format_shortdate($tm);
				case 6: // DATE_INTERVAL_HOUR
					$tm[4] = 0;
					$tm[5] = 0;
					return str_format_datetime($tm);
				case 7: // DATE_INTERVAL_MINUTE
					$tm[5] = 0;
					return str_format_datetime($tm);
				default:
					return str_format_datetime($tm);
			}
		}
		
		return "";
	}
	
	protected function getDatesByWeek($week, $year) 
	{
		global $locale_info;
		$startweekday = 0;
		if($locale_info["LOCALE_IFIRSTDAYOFWEEK"]>0)
			$startweekday = 7 - $locale_info["LOCALE_IFIRSTDAYOFWEEK"];	

		$L = isleapyear($year) ? 1 : 0;
		$months = array(31, 28 + $L, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
		$total_days = ($week - 1) * 7; 
		$i = 0;
		$sum = 0;
		while($sum <= $total_days)
		{
			$sum += $months[$i++];
		}
		$sum -= $months[$i-1];
		$month = $i;
		$day = $total_days - $sum;
		$day_of_week = getdayofweek(array($year, $month, $day));
		if ($day_of_week == 0) 
			$day_of_week = 7;
		
		$day = $day - ($day_of_week - 1) - $startweekday;
		$dates = array();
		$dates[0] = getYMDdate(mktime(0,0,0, $month, $day, $year));
		$dates[1] = getYMDdate(mktime(1,1,1, $month, $day+6, $year));
		return $dates;
	}
	
	public function getValuesControl()
	{
		$arr_list = $this->getSelectedValue();
		$arr_label = $this->xml_array["totals"];
		$res = "";
		$first_field = 0;
		$i = 0;
		if(count($arr_list) != 0 )
		{
			foreach($arr_list as $value)
			{
				$s = "";
				if($i == 0 || $i == $_SESSION[$this->sessionPrefix."_field"])
				{
					$first_field = $i;
					$s = "selected";
				}
				$strlabel = "";
				foreach($arr_label as $val)
					if($value == $this->FullFieldName($val["name"],$val["table"]))
					{
						$strlabel = $val["label"];
						break;
					}
				$res.= "<option value=".$i." ".$s.">".runner_htmlspecialchars($strlabel)."</option>";
				$i++;
			}
		}
		return array($res,$first_field);
	}
	
	protected function FullFieldName($field, $table = "")
	{
		if(!$table)
			$table = $this->tableName;
		if($this->table_type == "db")
			if(strpos($field,".") === false)
				$res = $table.".".$field;
			else
				$res = $field;
		else
			$res = $field;
		return $res;
	}
	
	protected function CrossGoodFieldName($field)
	{
		if($this->table_type == "db")
			return GoodFieldName($field);
		else 
			return $field;
	}
	
	/**
	 * Get the report print header html-markup
	 * @return String
	 */
	public function getPrintCrossHeader()
	{					
		$fieldNameX = $this->xml_array["group_fields"][ $this->index_field_x ]["name"];
		$fieldNameY = $this->xml_array["group_fields"][ $this->index_field_y ]["name"];
		$fieldName = $this->dataField;
		
		if(!$this->fromWizard)
		{
			$prefix = "";
			if( $this->table_type != "db" )
				$prefix = $this->xml_array["tables"][0]."_";			
			
			$fieldNameX = $prefix.GoodFieldName($fieldNameX);
			$fieldNameY = $prefix.GoodFieldName($fieldNameY);
			$fieldName = $prefix.GoodFieldName($fieldName);
		}
		
		return mlang_message("GROUP_X")
			.":<b>".$this->xml_array["totals"][ $fieldNameX ]["label"]."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".mlang_message("GROUP_Y")
			.":<b>".$this->xml_array["totals"][ $fieldNameY ]["label"]."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".mlang_message("FIELD")
			.":<b>".$this->xml_array["totals"][ $fieldName ]["label"]."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".mlang_message("GROUP_FUNCTION")
			.":<b>".$this->dataGroupFunction."</b>";
	}
	
	public function getTotalsName($grfunc)
	{
		switch($grfunc)
		{
			case "sum":
				return mlang_message("SUM");
				break;
			case "min":
				return mlang_message("MIN");
				break;
			case "max":
				return mlang_message("MAX");
				break;
			case "avg":
				return mlang_message("AVERAGE");
				break;
		}
	}
	
	protected function getFieldType($field)
	{
		if($this->table_type == "db")
			$ftype = WRGetFieldType($this->FullFieldName($field));
		elseif($this->table_type == "project")
			$ftype = $this->pSet->getFieldType($field);
		else
		{ 
			$fields_type = WRGetAllCustomFieldType();
			$ftype = $fields_type[$field];
		}
		return $ftype;
	}
	
	protected function getDataField($idx)
	{
		$idx = 0+$idx;
		$arr_value = $this->getSelectedValue();	
		if($idx >= count($arr_value))
			return "";
		return $arr_value[$idx];
	}
	
	protected function initDataFieldSettings()
	{
		foreach($this->xml_array["totals"] as $key => $value)
		{
			if($this->FullFieldName($value["name"],$value["table"]) == $this->dataField)
			{
				$this->dataFieldSettings = $this->xml_array["totals"][$key];
				break; 
			}
		}
	}

	/**
	 * Checks whether passed function name is valid
	 * @param String func
	 */
	protected function initDataGroupFunction($func)
	{
		//	good
		if( $this->dataFieldSettings[$func] == true )
		{
			$this->dataGroupFunction = $func;
			return;
		}

		//	bad, set first possible
		$gfuncs = array("sum", "max", "min", "avg");
		foreach($gfuncs as $gf)
		{
			if( $this->dataFieldSettings[$gf] == true )
			{
				$this->dataGroupFunction = $gf;
				return;
			}
		}
		
		// default
		$this->dataGroupFunction = "sum";
	}
	
	/**
	 * Get the current group function name
	 * @return String
	 */
	public function getCurrentGroupFunction()
	{
		return $this->dataGroupFunction;
	}
	public function isProjectDB()
	{
		if($this->fromWizard)
			return true;
			
		$isDB = false;
		if("inventorymaster" == $this->xml_array['tables'][0])
			$isDB = true;
		if("creategrn" == $this->xml_array['tables'][0])
			$isDB = true;
		if("vehiclemaster" == $this->xml_array['tables'][0])
			$isDB = true;
		if("creategrn" == $this->xml_array['tables'][0])
			$isDB = true;
		if("inventorymaster" == $this->xml_array['tables'][0])
			$isDB = true;
		if("creategrn" == $this->xml_array['tables'][0])
			$isDB = true;
		if("fuelmaster" == $this->xml_array['tables'][0])
			$isDB = true;
		if("suppliermaster" == $this->xml_array['tables'][0])
			$isDB = true;
		if("accidents" == $this->xml_array['tables'][0])
			$isDB = true;
		if("maintenenace" == $this->xml_array['tables'][0])
			$isDB = true;
		if("fleettype" == $this->xml_array['tables'][0])
			$isDB = true;
		if("fuelprices" == $this->xml_array['tables'][0])
			$isDB = true;
		if("fuelstationmaster" == $this->xml_array['tables'][0])
			$isDB = true;
		if("vehicletype" == $this->xml_array['tables'][0])
			$isDB = true;
		if("servicetypemaster" == $this->xml_array['tables'][0])
			$isDB = true;
		if("insurance-payments" == $this->xml_array['tables'][0])
			$isDB = true;
		if("insuranceclaims" == $this->xml_array['tables'][0])
			$isDB = true;
		if("insurancecompany" == $this->xml_array['tables'][0])
			$isDB = true;
		if("maintenenace" == $this->xml_array['tables'][0])
			$isDB = true;
		if("maintenenace" == $this->xml_array['tables'][0])
			$isDB = true;
		if("maintenenace" == $this->xml_array['tables'][0])
			$isDB = true;
		if("vehiclemaster" == $this->xml_array['tables'][0])
			$isDB = true;
		if("accidents" == $this->xml_array['tables'][0])
			$isDB = true;
		if("carrier_ugrights" == $this->xml_array['tables'][0])
			$isDB = true;
		if("carrierusers" == $this->xml_array['tables'][0])
			$isDB = true;
		if("carrierusers" == $this->xml_array['tables'][0])
			$isDB = true;
		if("carrierusers" == $this->xml_array['tables'][0])
			$isDB = true;
		if("inventorymaster" == $this->xml_array['tables'][0])
			$isDB = true;
		if("creategrn" == $this->xml_array['tables'][0])
			$isDB = true;
		if("creategrn" == $this->xml_array['tables'][0])
			$isDB = true;
		if("creategrn" == $this->xml_array['tables'][0])
			$isDB = true;
		if("creategrn" == $this->xml_array['tables'][0])
			$isDB = true;
		if("fuelmaster" == $this->xml_array['tables'][0])
			$isDB = true;
		if("creategrn" == $this->xml_array['tables'][0])
			$isDB = true;
		if("rnewalmastertable" == $this->xml_array['tables'][0])
			$isDB = true;
		if("otherrenewal" == $this->xml_array['tables'][0])
			$isDB = true;
		if("creategrn" == $this->xml_array['tables'][0])
			$isDB = true;
		if("creategrn" == $this->xml_array['tables'][0])
			$isDB = true;
		if("creategrn" == $this->xml_array['tables'][0])
			$isDB = true;
		if("inventorymaster" == $this->xml_array['tables'][0])
			$isDB = true;
		if("inventorymaster" == $this->xml_array['tables'][0])
			$isDB = true;
		if("fuelmaster" == $this->xml_array['tables'][0])
			$isDB = true;
		if("maintenenace" == $this->xml_array['tables'][0])
			$isDB = true;
		return $isDB;
	}
	
	protected function getDBFieldName($name)
	{
		if( !$this->wrdb )
			return $name;
		else{
			$gname = GoodFieldName($name);
			if(substr($gname,0,1)=="_" && substr($gname,-1)=="_")
				$gname = substr($gname,1,-1);
			return $this->arrDBFieldsList[ $gname ];
		}
	}
	
}
?>