<?php

class ExportPage extends RunnerPage
{
	public $exportType = "";
	
	public $action = "";
	
	public $records = "";
	
	/**
	 *
	 */
	 
	function __construct(&$params)
	{
		parent::__construct($params);
		$this->formBricks["header"] = "exportheader";
		$this->assignFormFooterAndHeaderBricks( true );	
	}
	 
	public function process()
	{
		global $gQuery;
		
		if( $this->eventsObject->exists("BeforeProcessExport") )
			$this->eventsObject->BeforeProcessExport( $this );
	
		if( $this->action != "" ) // action == export, exporting from a list page
		{	
			$selectedWhere = $this->getSelectedWhere();	
			
			$_SESSION[ $this->tName."_SelectedWhere" ] = $selectedWhere;	
			$_SESSION[ $this->tName."_SelectedSQL" ] = $gQuery->gSQLWhere( $selectedWhere );
		}

		if( $this->exportType )
		{	
			$this->exportByType();
			return;
		}

		$this->doCommonAssignments();	
		$this->addButtonHandlers();
		$this->addCommonJs();
		$this->addCommonHtml();

		$this->displayExportPage();	
	}

	/**
	 * Assign 'body' element
	 */
	public function addCommonHtml()
	{
		// assign body begin
		$this->body["begin"] = GetBaseScriptsForPage(false);
		// assign body end
		$this->body["end"] = XTempl::create_method_assignment( "assignBodyEnd", $this );

		$this->xt->assignbyref("body", $this->body);
	}	

	/**
	 * Assign basic page's xt variables
	 */
	protected function doCommonAssignments()
	{
		$this->xt->assign("groupExcel", true);
		$this->xt->assign("exportlink_attrs", 'id="saveButton'.$this->id.'"');

		if( !$this->action )
		{
			$this->xt->assign("rangeheader_block", true);
			$this->xt->assign("range_block", true);
		}		
	}
	
	/**
	 *
	 */
	protected function getSelectedWhere()
	{
		$selected_recs = array();	
		$keyFields = $this->pSet->getTableKeys();
			
		//	process selection
		if( @$_REQUEST["mdelete"] )
		{
			foreach( @$_REQUEST["mdelete"] as $ind )
			{
				$keys = array();
				foreach( $keyFields as $idx => $f )
				{					
					$keys[ $f ] = refine( $_REQUEST[ "mdelete" + ( $idx + 1 ) ][ mdeleteIndex( $ind ) ] );
				}
				$selected_recs[] = $keys;
			}
		}
		elseif( @$_REQUEST["selection"] )
		{
			foreach( @$_REQUEST["selection"] as $keyblock )
			{
				$arr = explode( "&", refine( $keyblock ) );
				if( count( $arr ) < count( $keyFields ) )
					continue;
					
				$keys = array();
				foreach( $keyFields as $idx => $f)	
				{
					$keys[ $f ] = urldecode( $arr[ $idx ] );
				}
				$selected_recs[] = $keys;
			}
		}
		
		$sWhere = "1=0";
		
		foreach( $selected_recs as $keys )
		{
			$sWhere = $sWhere . " or " . KeyWhere($keys);
		}

		if( $this->pSet->getAdvancedSecurityType() == ADVSECURITY_VIEW_OWN )
			$sWhere = whereAdd( $sWhere, SecuritySQL("Search", $this->tName) );
	
		$_SESSION[ $this->tName."_SelectedRecords" ] = $selected_recs;
		
		return $sWhere;
	}
	
	/**
	 *
	 */
	protected function exportByType()
	{
		global $gQuery, $gstrOrderBy;

		if( $_SESSION[ $this->tName."_SelectedSQL" ] != "" && $this->records == "" ) 
		{
			$strSQL = $_SESSION[ $this->tName."_SelectedSQL" ];
			$strWhereClause = @$_SESSION[ $this->tName."_SelectedWhere" ];
			$selected_recs = $_SESSION[ $this->tName."_SelectedRecords" ];
			$strHavingClause = "";
			$strSearchCriteria = "and";	
		}
		else
		{
			$selected_recs = array();
			$strWhereClause = @$_SESSION[ $this->tName."_where" ];
			$strHavingClause = @$_SESSION[ $this->tName."_having" ];
			$strSearchCriteria = @$_SESSION[ $this->tName."_criteria" ];
			$joinFromPart = @$_SESSION[ $this->tName."_joinFromPart" ];
				if( $strWhereClause == "" && $this->pSet->getAdvancedSecurityType() == ADVSECURITY_VIEW_OWN )
				$strWhereClause = whereAdd( $strWhereClause, SecuritySQL("Search", $this->tName) );

			$strSQL = SQLQuery::gSQLWhere_having( $gQuery->HeadToSql(), $gQuery->FromToSql().$joinFromPart, $gQuery->WhereToSql(),
					$gQuery->GroupByToSql(), $gQuery->Having()->toSql($gQuery), $strWhereClause, $strHavingClause, $strSearchCriteria );		
		}		
		
		$strOrderBy = $_SESSION[ $this->tName."_order" ];
		if( !$strOrderBy )
			$strOrderBy = $gstrOrderBy;
			
		$strSQL.= " ".trim( $strOrderBy );

		$strSQLbak = $strSQL;
		if( $this->eventsObject->exists("BeforeQueryExport") )
			$this->eventsObject->BeforeQueryExport($strSQL, $strWhereClause, $strOrderBy, $this);
		
		//	Rebuild SQL if needed
		if( $strSQL != $strSQLbak )
		{
			//	changed $strSQL - old style	
			$numrows = GetRowCount( $strSQL, $this->connection );
		}
		else
		{
			$strSQL = SQLQuery::gSQLWhere_having( $gQuery->HeadToSql(), $gQuery->FromToSql().$joinFromPart, $gQuery->WhereToSql(),
				$gQuery->GroupByToSql(), $gQuery->Having()->toSql($gQuery), $strWhereClause, $strHavingClause, $strSearchCriteria );
				
			$strSQL.= " ".trim( $strOrderBy );
			
			$rowcount = false;
			if( $this->eventsObject->exists("ListGetRowCount") )
			{
				$masterKeysReq = array();
				for($i = 0; $i < count( $this->detailKeysByM ); $i ++)
				{
					$masterKeysReq[] = $_SESSION[ $this->tName."_masterkey".($i + 1) ];
				}
				$rowcount = $this->eventsObject->ListGetRowCount( $this->searchClauseObj, $_SESSION[ $this->tName."_mastertable" ], 
					$masterKeysReq, $selected_recs, $this );
			}
			
			if( $rowcount !== false )
			{
				$numrows = $rowcount;
			}
			else
			{
				$numrows = SQLQuery::gSQLRowCount_int( $gQuery->HeadToSql(), $gQuery->FromToSql().$joinFromPart, $gQuery->WhereToSql(), 
					$gQuery->GroupByToSql(), $gQuery->Having()->toSql($gQuery), $strWhereClause, $strHavingClause, $this->connection, $strSearchCriteria );
			}
		}
		LogInfo($strSQL);

		//	Pagination:
		$mypage = 1;
		$nPageSize = 0;
		if( $this->records == "page" && $numrows )
		{
			$mypage = (integer)@$_SESSION[ $this->tName."_pagenumber" ];
			$nPageSize = (integer)@$_SESSION[ $this->tName."_pagesize" ];
			
			if( !$nPageSize )
				$nPageSize = $this->pSet->getInitialPageSize();
					
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
		if( $this->eventsObject->exists("ListQuery") )
		{
			$arrFieldForSort = array();
			$arrHowFieldSort = array();
			
			require_once getabspath('classes/orderclause.php');
			$fieldList = unserialize( $_SESSION[ $this->tName."_orderFieldsList" ] );
			for($i = 0; $i < count($fieldList); $i++)
			{
				$arrFieldForSort[] = $fieldList[ $i ]->fieldIndex; 
				$arrHowFieldSort[] = $fieldList[ $i ]->orderDirection; 
			}
			$listarray = $this->eventsObject->ListQuery( $this->searchClauseObj, $arrFieldForSort, $arrHowFieldSort,
				$_SESSION[ $this->tName."_mastertable" ], $masterKeysReq, $selected_recs, $nPageSize, $mypage, $this );
		}
		
		if( $listarray != null )
			$rs = $listarray;
		else
			$rs = $this->connection->queryPage( $strSQL, $mypage, $nPageSize, $nPageSize > 0 );


		runner_set_page_timeout(300);
		
		$this->exportTo( $this->exportType, $rs, $nPageSize );	
		$this->connection->close();	
	}
	
	/**
	 * @param String type
	 * @param Mixed rs
	 * @param Number nPageSize
	 */
	public function exportTo( $type, $rs, $nPageSize)
	{
		global $locale_info;
		
		if( substr(@$type, 0, 5) == "excel" )
		{
			//	remove grouping
			$locale_info["LOCALE_SGROUPING"] = "0";
			$locale_info["LOCALE_SMONGROUPING"] = "0";
			ExportToExcel($rs, $nPageSize, $this->eventsObject, $this->cipherer, $this);
			
			return;
		}
		
		if( $type == "word" )
		{
			$this->ExportToWord($rs, $nPageSize);
			return;
		}
		
		if( $type == "xml" )
		{
			$this->ExportToXML($rs, $nPageSize);
			return;
		}
		
		if( $type == "csv" )
		{
			$locale_info["LOCALE_SGROUPING"] = "0";
			$locale_info["LOCALE_SDECIMAL"] = ".";
			$locale_info["LOCALE_SMONGROUPING"] = "0";
			$locale_info["LOCALE_SMONDECIMALSEP"] = ".";
			
			$this->ExportToCSV($rs, $nPageSize);
		}		
		
	}
	
	/**
	 * @param Mixed rs
	 * @param Number nPageSize
	 */
	public function ExportToWord($rs, $nPageSize)
	{
		global $cCharset;
		header("Content-Type: application/vnd.ms-word");
		header("Content-Disposition: attachment;Filename=".GetTableURL($this->tName).".doc");

		echo "<html>";
		echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
		echo "<body>";
		echo "<table border=1>";

		$this->WriteTableData($rs, $nPageSize);

		echo "</table>";
		echo "</body>";
		echo "</html>";
	}

	/**
	 * @param Mixed rs
	 * @param Number nPageSize
	 */
	public function ExportToXML($rs, $nPageSize)
	{
		global $cCharset;
		
		$exportFields = $this->pSet->getExportFields();
		
		header("Content-Type: text/xml");
		header("Content-Disposition: attachment;Filename=".GetTableURL($this->tName).".xml");
		if($this->eventsObject->exists("ListFetchArray"))
			$row = $this->eventsObject->ListFetchArray($rs, $this);
		else
			$row = $this->cipherer->DecryptFetchedArray( $this->connection->fetch_array( $rs ) );
		
		echo "<?xml version=\"1.0\" encoding=\"".$cCharset."\" standalone=\"yes\"?>\r\n";
		echo "<table>\r\n";
		$i = 0;
		$this->viewControls->setForExportVar("xml");
		while((!$nPageSize || $i<$nPageSize) && $row)
		{
			$values = array();
			foreach( $exportFields as $field )
			{
				$fType = $this->pSet->getFieldType($field);
				if( IsBinaryType( $fType ) )
					$values[ $field ] = mlang_message("LONG_BINARY");
				else
					$values[ $field ] = $this->getExportValue($field, $row);
			}
			
			$eventRes = true;
			if ($this->eventsObject->exists('BeforeOut'))
				$eventRes = $this->eventsObject->BeforeOut($row, $values, $this);
			
			if ($eventRes)
			{
				$i++;
				echo "<row>\r\n";
				foreach ($values as $fName => $val)
				{
					$field = runner_htmlspecialchars(XMLNameEncode($fName));
					echo "<".$field.">";
					echo $values[ $fName ];
					echo "</".$field.">\r\n";
				}
				echo "</row>\r\n";
			}
			
			
			if($this->eventsObject->exists("ListFetchArray"))
				$row = $this->eventsObject->ListFetchArray($rs, $this);
			else
				$row = $this->cipherer->DecryptFetchedArray( $this->connection->fetch_array( $rs ) );
		}
		echo "</table>\r\n";
	}

	/**
	 * @param Mixed rs
	 * @param Number nPageSize
	 */
	public function ExportToCSV($rs, $nPageSize)
	{
		$exportFields = $this->pSet->getExportFields();
		
		header("Content-Type: application/csv");
		header("Content-Disposition: attachment;Filename=".GetTableURL($this->tName).".csv");
		printBOM();
		
		if($this->eventsObject->exists("ListFetchArray"))
			$row = $this->eventsObject->ListFetchArray($rs, $this);
		else
			$row = $this->cipherer->DecryptFetchedArray( $this->connection->fetch_array( $rs ) );

		// write header
		$outstr = "";
		foreach( $exportFields as $field )
		{
			if($outstr != "")
				$outstr.= ",";
			$outstr.= "\"".$field."\"";
		}
		echo $outstr;
		echo "\r\n";

		// write data rows
		$iNumberOfRows = 0;
		$this->viewControls->setForExportVar( "csv" );
		while((!$nPageSize || $iNumberOfRows < $nPageSize) && $row)
		{
			$values = array();
			foreach( $exportFields as $field )
			{
				$fType = $this->pSet->getFieldType($field);
				if( IsBinaryType( $fType ) )
					$values[ $field ] = mlang_message("LONG_BINARY");
				else
					$values[ $field ] = $row[ $field ];
			}

			$eventRes = true;
			if( $this->eventsObject->exists('BeforeOut') )
			{
				$eventRes = $this->eventsObject->BeforeOut($row,$values, $this);
			}
			if ($eventRes)
			{
				$outstr = "";
				foreach( $exportFields as $field )
				{				
					if($outstr != "")
						$outstr.= ",";
					$outstr.='"'.str_replace('"', '""', $values[ $field ]).'"';
				}
				echo $outstr;
			}
			
			$iNumberOfRows++;
			if( $this->eventsObject->exists("ListFetchArray") )
				$row = $this->eventsObject->ListFetchArray($rs, $this);
			else
				$row = $this->cipherer->DecryptFetchedArray( $this->connection->fetch_array( $rs ) );
				
			if(((!$nPageSize || $iNumberOfRows<$nPageSize) && $row) && $eventRes)
				echo "\r\n";
		}
	}

	/**
	 * @param Mixed rs
	 * @param Number nPageSize
	 */
	protected function WriteTableData($rs, $nPageSize)
	{	
		$exportFields = $this->pSet->getExportFields();
		$totalFieldsData = $this->pSet->getTotalsFields();
		
		if($this->eventsObject->exists("ListFetchArray"))
			$row = $this->eventsObject->ListFetchArray($rs, $this);
		else
			$row = $this->cipherer->DecryptFetchedArray( $this->connection->fetch_array( $rs ) );

		// write header
		echo "<tr>";
		if( $this->exportType == "excel" )
		{
			foreach( $exportFields as $field )
			{
				echo '<td style="width: 100" x:str>'.PrepareForExcel( $this->pSet->label( $field ) ).'</td>';	
			}
		}
		else
		{
			foreach( $exportFields as $field )
			{
				echo "<td>".$this->pSet->label( $field )."</td>";
			}
		}
		echo "</tr>";
		
		$totals = array();
		$totalsFields = array();
		foreach( $totalFieldsData as $data )
		{
			if( !in_array( $data["fName"], $exportFields ) )
				continue;
				
			$totals[ $data["fName"] ] = array("value" => 0, "numRows" => 0);
			$totalsFields[] = array('fName' => $data["fName"], 'totalsType' => $data["totalsType"], 'viewFormat' => $this->pSet->getViewFormat( $data["fName"] ));
		}
		
		// write data rows
		$iNumberOfRows = 0;
		$this->viewControls->setForExportVar( "export" );
		while( (!$nPageSize || $iNumberOfRows < $nPageSize) && $row )
		{
			countTotals($totals, $totalsFields, $row);
			
			$values = array();
		
			foreach( $exportFields as $field )
			{
				$fType = $this->pSet->getFieldType($field);
				if( IsBinaryType( $fType ) )
					$values[ $field ] = mlang_message("LONG_BINARY");
				else 
					$values[ $field ] = $this->getViewControl( $field )->getExportValue($row, "");
			}
			
			$eventRes = true;
			if( $this->eventsObject->exists('BeforeOut') )
			{
				$eventRes = $this->eventsObject->BeforeOut($row, $values, $this);
			}
			if ($eventRes)
			{
				$iNumberOfRows++;
				echo "<tr>";
				
				foreach( $exportFields as $field )
				{
					$fType = $this->pSet->getFieldType($field);
					if( IsCharType($fType) )
					{
						if( $this->exportType == "excel" )
							echo '<td x:str>';
						else
							echo '<td>';
					}
					else
						echo '<td>';
				
					$editFormat = $this->pSet->getEditFormat( $field );
					if( $editFormat == EDIT_FORMAT_LOOKUP_WIZARD )
					{	
						if( $this->pSet->NeedEncode($field) )
						{						
							if( $this->exportType == "excel" )
								echo PrepareForExcel( $values[ $field ] );
							else
								echo $values[ $field ];
						}
						else
							echo $values[ $field ];
					} 
					elseif( IsBinaryType( $fType ) )	
						echo $values[ $field ];
					else
					{
						if( $editFormat == FORMAT_CUSTOM || $this->pSet->isUseRTE( $field ) )
							echo $values[ $field ];
						elseif( NeedQuotes($field) )
						{						
							if( $this->exportType == "excel")
								echo PrepareForExcel( $values[ $field ] );
							else
								echo $values[ $field ];
						}
						else
							echo $values[ $field ];
					}
					echo '</td>';
				}			
				echo "</tr>";
			}
				
			if( $this->eventsObject->exists("ListFetchArray") )
				$row = $this->eventsObject->ListFetchArray($rs, $this);
			else
				$row = $this->cipherer->DecryptFetchedArray( $this->connection->fetch_array( $rs ) );
		}
		
		if( count($totalFieldsData) )
		{
			echo "<tr>";
			foreach( $totalFieldsData as $data )
			{
				if( !in_array( $data["fName"], $exportFields ) )
					continue;
			
				echo "<td>";
				if( strlen($data["totalsType"]) )
				{
					if( $data["totalsType"] == "COUNT" )
						echo mlang_message("COUNT").": ";
					elseif( $data["totalsType"] == "TOTAL" )	
						echo mlang_message("TOTAL").": ";
					elseif( $data["totalsType"] == "AVERAGE" )
						echo mlang_message("AVERAGE").": ";

					echo runner_htmlspecialchars( GetTotals($data["fName"], 
						$totals[ $data["fName"] ]["value"], 
						$data["totalsType"], 
						$totals[ $data["fName"] ]["numRows"],
						$this->pSet->getViewFormat( $data["fName"] ), 
						PAGE_EXPORT,
						$this->pSet) );
				}
				echo "</td>";
			}
			echo "</tr>";
		}
	}	
	
	/**
	 * @deprecated
	 * @param Mixed rs
	 * @param Number nPageSize	 
	 */
	public function ExportToExcel_old($rs, $nPageSize)
	{
		global $cCharset;
		header("Content-Type: application/vnd.ms-excel");
		header("Content-Disposition: attachment;Filename=".GetTableURL($this->tName).".xls");

		echo "<html>";
		echo "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\">";
		
		echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
		echo "<body>";
		echo "<table border=1>";

		$this->WriteTableData($rs, $nPageSize);

		echo "</table>";
		echo "</body>";
		echo "</html>";
	}
	
	/**
	 *
	 */
	protected function displayExportPage()
	{	
		$templatefile = $this->templatefile;

		if( $this->eventsObject->exists("BeforeShowExport") )
			$this->eventsObject->BeforeShowExport($this->xt, $templatefile, $this);
			
		$this->display( $templatefile );	
	}
}