<?php
class PrintPage extends RunnerPage
{
	public $allPagesMode = false;
	public $selectedRecords = array();
	public $masterKeys = array();
	public $masterTable = "";
	public $recordset = null;

	public $pdfWidth = PDF_PAGE_WIDTH;
	public $pdfContent = "";
	
	public $fetchedRecordCount = 0;
	public $splitByRecords = 0;
	public $detailTables;
	
	public $pageBody = array();

	
	/**
	 * Array of field names that used for totals
	 * @type array
	 * totalsFields = array('fName'=>"@f.strName s", 'totalsType'=>'@f.strTotalsType', 'viewFormat'=>"@f.strViewFormat");
	 */
	public $totalsFields = array();

	/**
	 * Temporary totals results
	 * @type array
	 */
	public $totals = array();
	
	public $sqlParts = array( "searchCriteria" => "and" );
	
	/**
	 *	Total number of records in the query
	 */
	public $totalRowCount = false;

	public $queryPageNo = 1;
	public $queryPageSize = 0;

	public $_eof = false;
	public $nextRecord = null;
	
	public $customFieldForSort = array();
	public $customHowFieldSort = array();
	
	public $pageNo = 1;
	
	public $hideColumns = array();
	
	
	/**
	 * @constructor
	 */
	function __construct(&$params = "")
	{
		parent::__construct($params);
		
		if( $this->selectedRecords )
			$this->allPagesMode = true;

		if( !$this->detailTables )
			$this->detailTables = array();
			
		if( !is_array( $this->detailTables ) )
			$this->detailTables = array( $this->detailTables );		
		
		//	save selected records and detail tables in session in normal mode
		//	read them in PDF mode	
		if( !$this->pdfMode )
		{
			$_SESSION[ $this->sessionPrefix . "_selection" ] = $this->selectedRecords;
			$_SESSION[ $this->sessionPrefix . "_detailTables" ] = $this->detailTables;
			$_SESSION[ $this->sessionPrefix . "_allPagesPrint" ] = $this->allPagesMode;
		}
		else
		{
			$this->allPagesMode = $_SESSION[ $this->sessionPrefix . "_allPagesPrint" ];
			
			$this->selectedRecords = $_SESSION[ $this->sessionPrefix . "_selection" ];	
			unset($_SESSION[ $this->sessionPrefix . "_selection" ]);
			
			//	ensure selectedRecords records is array
			if( !$this->selectedRecords )
				$this->selectedRecords = array();
				
			$this->detailTables = $_SESSION[ $this->sessionPrefix . "_detailTables" ];
			unset($_SESSION[ $this->sessionPrefix . "_detailTables" ]);
		}
		
		$this->printGridLayout = $this->pSet->getPrintGridLayout();
		$this->recsPerRowPrint = $this->pSet->getRecordsPerRowPrint();
		
		for($i = 0; $i < count($this->detailKeysByM); $i++)
		{
			$this->masterKeys[] = $_SESSION[ $this->sessionPrefix . "_masterkey" . ( $i + 1 ) ];
		}
		
		$this->masterTable = $_SESSION[$this->sessionPrefix . "_mastertable"];
		$this->totalsFields = $this->pSet->getTotalsFields();
		
		if( !$this->splitByRecords )
			$this->splitByRecords = $this->pSet->getPrinterSplitRecords();
		
		if( $this->pdfMode )
			$this->splitByRecords = $this->pSet->getPrinterPDFSplitRecords();
		
		if( $this->pSet->isAllowShowHideFields() )
		{
			$hideColumns = $this->getColumnsToHide();
			$this->hideColumns = $hideColumns[DESKTOP];
			if( !is_array( $this->hideColumns ) )
				$this->hideColumns = array();
		}
		
	}

	/**
	 * @param String table
	 * @return Array
	 */
	public static function readSelectedRecordsFromRequest( $table )
	{
		if( !$_REQUEST["selection"] )
			return array();
			
		$pSet = new ProjectSettings( $table );
		$keyFields = $pSet->getTableKeys();
		
		$selected_recs = array();
		foreach(@$_REQUEST["selection"] as $keyblock)
		{
			$arr = explode("&", refine($keyblock));
			if( count($arr) < count($keyFields) )
				continue;
			
			$keys = array();
			foreach($arr as $i => $value)
			{
				$keys[ $keyFields[$i] ] = urldecode( $value );
			}
			$selected_recs[] = $keys;
		}
		
		return $selected_recs;
	}

	/**
	 *
	 */
	protected function buildSQL()
	{
		global $gQuery, $gstrOrderBy;
		//	build Where expression
		if( $this->selectedRecords )
		{
			$selectionSQL = array();
			foreach($this->selectedRecords as $keys)
			{	
				$selectionSQL[] = $this->keysSQLExpression( $keys );
			}
			$sWhere = implode(" or ", $selectionSQL );
				if( $this->pSet->getAdvancedSecurityType() == ADVSECURITY_VIEW_OWN )
			{
				// select only owned records
				$sWhere = whereAdd($sWhere, SecuritySQL("Search", $this->tName));
			}
			$this->sqlParts["sql"] = $gQuery->gSQLWhere($sWhere);
			$this->sqlParts["where"] = $sWhere;
		}
		else
		{
			$this->sqlParts["where"] = @$_SESSION[$this->sessionPrefix . "_where"];
			$this->sqlParts["having"] = @$_SESSION[$this->sessionPrefix . "_having"];
			$this->sqlParts["searchCriteria"] = @$_SESSION[$this->sessionPrefix . "_criteria"];
			$this->sqlParts["join"] = @$_SESSION[$this->sessionPrefix . "_joinFromPart"];
				if( !$this->sqlParts["where"] && $this->pSet->getAdvancedSecurityType() == ADVSECURITY_VIEW_OWN )
			{
				$this->sqlParts["where"] = SecuritySQL("Search", $this->tName);
			}
			$this->sqlParts["head"] = $gQuery->HeadToSql();
			if( $this->connection->dbType == nDATABASE_DB2 ) 
				$this->sqlParts["head"] .= ", ROW_NUMBER() over () as DB2_ROW_NUMBER ";

			$this->sqlParts["sql"] = SQLQuery::gSQLWhere_having( $this->sqlParts["head"], 
				$gQuery->FromToSql().$this->sqlParts["join"], 
				$gQuery->WhereToSql(),
				$gQuery->GroupByToSql(), 
				$gQuery->Having()->toSql($gQuery), 
				$this->sqlParts["where"], 
				$this->sqlParts["having"], 
				$this->sqlParts["searchCriteria"]);	
		}
		
		$this->sqlParts["orderby"] = $_SESSION[$this->sessionPrefix . "_order"];
		if(!$this->sqlParts["orderby"])
			$this->sqlParts["orderby"] = $gstrOrderBy;
		
		$this->sqlParts["sql"].= " " . trim( $this->sqlParts["orderby"] );
	}
	
	/**
	 *
	 */
	protected function calcRowCount()
	{
		global $gQuery;
		
		$strSQLbak = $this->sqlParts["sql"];
		$sql = $this->sqlParts["sql"];
		$where = $this->sqlParts["where"];
		$orderby = $this->sqlParts["orderby"];
		
		if( $this->eventsObject->exists("BeforeQueryPrint") )
			$this->eventsObject->BeforeQueryPrint($sql, $where, $orderby, $this);

		//	Rebuild SQL if needed
		if( $sql != $strSQLbak )
		{
			//	changed $strSQL - old style	
			$this->totalRowCount = GetRowCount($sql, $this->connection);
			return;
		}

		// rebuild sql
		if( $this->selectedRecords )
		{
			$selectionSQL = array();
			foreach($this->selectedRecords as $keys)
			{	
				$selectionSQL[] = $this->keysSQLExpression( $keys );
			}
			$sWhere = implode(" or ", $selectionSQL );
			if( $this->pSet->getAdvancedSecurityType() == ADVSECURITY_VIEW_OWN )
			{
				// select only owned records
				$sWhere = whereAdd($sWhere, SecuritySQL("Search", $this->tName));
			}
			$this->sqlParts["sql"] = $gQuery->gSQLWhere($sWhere);
			$this->sqlParts["where"] = $sWhere;
		}
		else{
			$this->sqlParts["where"] = $where;
			$this->sqlParts["sql"] = SQLQuery::gSQLWhere_having( $this->sqlParts["head"] , 
				$gQuery->FromToSql().$this->sqlParts["join"], 
				$gQuery->WhereToSql(),
				$gQuery->GroupByToSql(), 
				$gQuery->Having()->toSql($gQuery), 
				$this->sqlParts["where"], 
				$this->sqlParts["having"], 
				$this->sqlParts["searchCriteria"]);	
				
			
		}
		$this->sqlParts["orderby"] = $orderby;
		$this->sqlParts["sql"] .= " ".trim( $this->sqlParts["orderby"] );
		
		if( $this->eventsObject->exists("ListGetRowCount") )
		{
			$this->totalRowCount = $this->eventsObject->ListGetRowCount($this->searchClauseObj, 
				$this->masterTable, 
				$this->masterKeys, 
				$this->selectedRecords, 
				$this);
		}
		
		if( $this->totalRowCount === false )
		{
			$this->totalRowCount = SQLQuery::gSQLRowCount_int( $gQuery->HeadToSql(), 
				$gQuery->FromToSql().$this->sqlParts["join"], 
				$gQuery->WhereToSql(), 
				$gQuery->GroupByToSql(), 
				$gQuery->Having()->toSql($gQuery), 
				$this->sqlParts["where"], 
				$this->sqlParts["having"], 
				$this->connection, 
				$this->sqlParts["searchCriteria"] );		
		}
	}
	
	/**
	 *
	 */
	protected function prepareCustomListQueryLegacySorting()
	{
		if( !$this->eventsObject->exists("ListQuery") )
			return;
			
		$arrFieldForSort = array();
		$arrHowFieldSort = array();
		require_once getabspath('classes/orderclause.php');
		
		$fieldList = unserialize( $_SESSION[ $this->sessionPrefix . "_orderFieldsList" ] );
		for($i = 0; $i < count($fieldList); $i++)
		{
			$this->customFieldForSort[] = $fieldList[$i]->fieldIndex; 
			$this->customHowFieldSort[] = $fieldList[$i]->orderDirection; 
		}
	}

	/**
	 *
	 */
	protected function calcPageSizeAndNumber()
	{
		if( $this->allPagesMode )
			return;
		
		$this->queryPageNo = (integer)$_SESSION[ $this->sessionPrefix . "_pagenumber" ];
		if( !$this->queryPageNo )
			$this->queryPageNo = 1;

		//	page size
		$this->queryPageSize = (integer)$_SESSION[$this->sessionPrefix . "_pagesize"];
		if(!$this->queryPageSize)
			$this->queryPageSize = $this->pSet->getInitialPageSize();

		if($this->queryPageSize < 0)
			$this->allPagesMode = true;	
	}
	
	/**
	 *
	 */
	protected function openQuery()
	{
		$this->prepareCustomListQueryLegacySorting();
		$this->calcPageSizeAndNumber();
		
		$listarray = false;
		if( $this->eventsObject->exists("ListQuery") )
		{
			$listarray = $this->eventsObject->ListQuery($this->searchClauseObj, 
				$this->customFieldForSort, 
				$this->customHowFieldSort,
				$this->masterTable,
				$this->masterKeys, 
				$this->selectedRecords, 
				$this->queryPageSize, 
				$this->queryPageNo, 
				$this);
		}
		
		if( $listarray !== false )
		{
			$this->recordset = $listarray;
		}
		else
		{
			if( $this->allPagesMode )
				$this->recordset = $this->connection->query( $this->sqlParts["sql"] )->getQueryHandle(); 
			else
				$this->recordset = $this->connection->queryPage( $this->sqlParts["sql"], 
					$this->queryPageNo, 
					$this->queryPageSize, 
					$this->totalRowCount );
		}
	}
	
	/**
	 *
	 */
	protected function setMapParams()
	{
		$fieldsArr = array();
		foreach( $this->pSet->getPrinterFields() as $f )
		{
			$fieldsArr[] = array( 'fName' => $f, 'viewFormat' => $this->pSet->getViewFormat($f) );
		}
		$this->setGoogleMapsParams( $fieldsArr );
	}
	
	/**
	 * Process the page 
	 */
	public function process()
	{
		// do PDF conversion only
		if($this->pdfMode == "convert")
		{
			$this->convertToPDF();
			return;
		}

		//	Before Process event
		if( $this->eventsObject->exists("BeforeProcessPrint") )
			$this->eventsObject->BeforeProcessPrint( $this );
					
		$this->prepareJsSettings();
		$this->addButtonHandlers();
		$this->addCommonJs();
		$this->commonAssign();
		$this->setMapParams();
	
		$this->buildSQL();
		$this->calcRowCount();
		$this->openQuery();
		
		$this->doFirstPageAssignments();
		if( !$this->splitByRecords )
		{
			$this->fillGridPage();
			$this->showTotals();
			// display the 'Back to Master' link and master table info
			$this->displayMasterTableInfo();
//			$this->printMasterTableInfo();

			$this->body["data"][] = $this->pageBody;
		}
		else
		{
			$masterAdded = false;
			while( true )
			{
				if( !$masterAdded )
				{
					//$this->printMasterTableInfo();
					$this->displayMasterTableInfo();
					$masterAdded = true;
				}
				else
				{
					//	hide master table info everywhere except the first page
					$this->pageBody["container_master"] = false;
					$this->pageBody["container_pdf"] = false;
					
				}
				
				$this->fillGridPage();
				if($this->EOF())
					break;
				
				$this->wrapPageBody();					
				
				$this->body["data"][] = $this->pageBody;
				++$this->pageNo;
				$this->pageBody = array();
			}
			//	add totals to the last page
			$this->showTotals();
			$this->wrapPageBody();					
			$this->body["data"][] = $this->pageBody;
		}
		
		$this->xt->assign( "pagecount", $this->pageNo );

		$this->doCommonAssignments();
		$this->addCustomCss();
		$this->displayPrintPage();		
	}
	
	/**
	 *
	 */
	protected function wrapPageBody()
	{
		if( $this->pdfMode )
			$this->pageBody["begin"] = "<div class=\"rp-page\">";
		else
			$this->pageBody["begin"] = "<div class=\"rp-presplitpage rp-page\">";
		
		$this->pageBody["end"] = "</div>";
	}
	
	/**
	 *
	 */
	protected function showTotals()
	{
		if( !$this->totalsFields )
			return;
			
		$record = array();
		$this->pageBody["totals_record"] = true;
		foreach( $this->totalsFields as $tf )
		{
			$total = GetTotals( $tf["fName"], 
				$this->totals[ $tf["fName"] ], 
				$tf[ "totalsType" ], 
				$tf["numRows"], 
				$tf[ "viewFormat" ],
				PAGE_PRINT,
				$this->pSet );
			$this->pageBody[ GoodFieldName( $tf['fName'] ) . "_total" ] = $total;
			$record[ GoodFieldName( $tf['fName'] ) . "_showtotal"] = true;
		}
		
		$this->pageBody[ "totals_row" ] = array("data" => array(0 => $record));
	}
	
	/**
	 * @return Boolean
	 */
	protected function EOF()
	{
		if( !$this->allPagesMode && $this->fetchedRecordCount >= $this->queryPageSize )
			return true;
		
		$this->readNextRecordInternal();
		if( $this->_eof )
			return true;
			
		return false;	
	}
	
	/**
	 * reads the next record and fills in $this->nextRecord
	 */
	protected function readNextRecordInternal()
	{
		//	no more data
		if( $this->_eof )
			return;
			
		//	next record already read
		if( $this->nextRecord )
			return;
			
		//	read the record and store it in $this->nextRecord
		while(true)
		{
			if( $this->eventsObject->exists("ListFetchArray") )
				$data = $this->eventsObject->ListFetchArray($this->recordset, $this);
			else
				$data = $this->cipherer->DecryptFetchedArray( $this->connection->fetch_array( $this->recordset ) );
			
			if( !$data )
			{
				$this->_eof = true;
				return;
			}
				
			if( $this->eventsObject->exists("BeforeProcessRowPrint") )
			{
				if( !$this->eventsObject->BeforeProcessRowPrint($data, $this) )
				{
					continue;
				}
			}
			
			$this->nextRecord = $data;
			return;
		}
	}
	
	/**
	 * @return Mixed
	 */
	protected function readNextRecord()
	{
		if($this->EOF())
			return false;
		++$this->fetchedRecordCount;
		$data = $this->nextRecord;
		$this->nextRecord = false;
		return $data;
	}
	
	/**
	 * @param Array data
	 * @param &Array row
	 * @return Array
	 */
	protected function buildGridRecord( $data, &$row )
	{
		$this->genId();
		
		$record = array();
		$record["recordattrs"] = "data-record-id=\"".$this->recId."\"";	

		$this->countTotals( $this->totals , $data );
		
		$keyFields = $this->pSet->getTableKeys();
		$keylink = "";
		for($i = 0; $i < count( $keyFields ); $i ++)
		{
			$keylink.= "&key".($i + 1) . "=" . runner_htmlspecialchars( rawurlencode( @$data[ $keyFields[$i] ] ) );
		}

		if( $this->eventsObject->exists("BeforeMoveNextPrint") )
			$this->eventsObject->BeforeMoveNextPrint($data, $row, $record, $this);
		
		$printFields = &$this->pSet->getPrinterFields();
		for($i = 0; $i < count($printFields); $i++) 
		{
			$record[GoodFieldName($printFields[$i])."_value"] = $this->showDBValue( $printFields[$i], $data, $keylink );
			$this->setRowClassNames($record, $printFields[$i]);
		}
		
		$this->spreadRowStyles($data, $row, $record);
		$this->setRowCssRules($record);
		
		$record["grid_recordheader"] = true;
		$record["grid_vrecord"] = true;
		
		return $record;
	}
	
	/**
	 * @param Array columns
	 */
	protected function showGridHeader( $columns )
	{

	foreach( $this->pSet->getPrinterFields() as $f )
		{
			$gf = GoodFieldName($f);
			$this->pageBody[ $gf . "_fieldheadercolumn"] = true;
			$this->pageBody[ $gf . "_fieldheader"] = true;
			$this->pageBody[ $gf . "_class"] = $this->fieldClass( $f );
			$this->pageBody[ $gf . "_fieldcolumn"] = true;
			$this->pageBody[ $gf . "_fieldfootercolumn"] = true;
		}
		
		$this->pageBody[ "record_header" ] = array("data"=>array());
		$this->pageBody[ "record_footer" ] = array("data"=>array());

		for($i = 0; $i < $columns; $i++)
		{
			$rheader = array();
			$rfooter = array();
			if($i < $columns - 1)
			{
				$rheader["endrecordheader_block"] = true;
				$rfooter["endrecordheader_block"] = true;
			}
			$this->pageBody[ "record_header" ]["data"][] = $rheader;
			$this->pageBody[ "record_footer" ]["data"][] = $rfooter;
		}
		$this->pageBody[ "grid_header" ] = true;
		$this->pageBody[ "grid_footer" ] = true;
	}
	
	/**
	 *
	 */
	protected function fillGridPage()
	{

		$this->pageBody["grid_row"] = array();
		$this->pageBody["grid_row"]["data"] = array();
		$recno = 0;
		
		$recordsPrinted = 0;

		$row = array();
		$col = 0;
		while( $data = $this->readNextRecord() )
		{
			$row["details"] = array();
			if( !$col )
			{
				//	create new row
				$row = array();
				$row["grid_record"] = array();
				$row["grid_record"]["data"] = array();
				$row["details_record"] = array();
				$row["details_record"]["data"] = array();	
			}
			else
			{
				//	update previous record in the row
				$row["grid_record"]["data"][ $col - 1 ]["endrecord_block"] = true;
				$row["details_record"]["data"][ $col - 1 ]["endrecord_block"] = true;
				//	add two empty cells to the vertical layout grid
				$row["grid_recordspace"]["data"][] = true;
				$row["grid_recordspace"]["data"][] = true;
			}

			//	add the record to the row
			if( $this->printGridLayout == gltVERTICAL || $this->recsPerRowPrint != 1 )
			{ 
				$row["grid_record"]["data"][] = $this->buildGridRecord( $data, $row );
				$builtDetails = $this->buildDetails( $data );
				if( $builtDetails )
				{					
					$row["details_record"]["data"][] = array( "details_table" => array("data" => $builtDetails ) );
					$row["details_row"] = true;
				}
			} 
			else
			{
				// simplify row/record structure - put everything to $row
				$builtrow = $this->buildGridRecord( $data, $row );
				foreach( $builtrow as $index => $value)
				{
					$row[ $index ] = $value;
				}
				$row["grid_record"] = true;

				$builtDetails = $this->buildDetails( $data );
				if( $builtDetails )
				{
					$row["details_record"] = true;
					$row["details_table"] = array( "data" => $builtDetails );
					$row["details_row"] = true;
				}
			}
			
			//	finalize row if needed
			++$col;
			++$recno;
			if( $col >= $this->recsPerRowPrint )
			{
				$row["grid_recordspace"]["data"][] = true;
				$row["grid_rowspace"] = true;
				$this->pageBody["grid_row"]["data"][] = $row;
				$col = 0;
			}
			
			if( $this->splitByRecords && $recno >= $this->splitByRecords )
				break;
		
		}
		
		//	finalize grid
		if( $col )
		{
			if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT && $builtDetails && ($this->printGridLayout == gltVERTICAL || $this->recsPerRowPrint != 1) )
			{		
				$row["details_record"]["data"][0]["bs_clear_class"] = "bs-print-details-clear";
			}
			$this->pageBody["grid_row"]["data"][] = $row;
		}
		
		$this->showGridHeader( $this->recsPerRowPrint < $recno ? $this->recsPerRowPrint : $recno);
		$this->pageBody["pageno"] = $this->pageNo;
	}
	
	/**
	 *
	 */
	public function doCommonAssignments() // TODO: make it protected
	{
		$this->body['begin'].= GetBaseScriptsForPage( false );

		// assign body end
		$this->body['end'] = XTempl::create_method_assignment( "assignBodyEnd", $this );

		$this->xt->assignbyref('body', $this->body);	
		
		$this->xt->assign("grid_block", true);
		$this->xt->assign("page_number",true);
		
		if( !$this->splitByRecords )
		{
			$this->xt->assign("divideintopages_block", true);
		}
		
		//	display Prepare for printing or PDF buttons
		if( !$this->pdfMode && ( !$this->splitByRecords || $this->pSet->isPrinterPagePDF() ))
		{
			$this->xt->assign("printbuttons", true);
		}
		
		$this->xt->assign("printheader",true);

	}	
	
	/**
	 *
	 */
	protected function prepareJsSettings()
	{
		if( isRTL() )
			$this->jsSettings['tableSettings'][ $this->tName ]['isRTL'] = true;

		if( $this->pSet->isPrinterPagePDF() )
			$this->jsSettings['tableSettings'][ $this->tName ]['printerPagePDF'] = true;

		$this->jsSettings['tableSettings'][ $this->tName ]['printerPageOrientation'] = $this->pSet->getPrinterPageOrientation();
		$this->jsSettings['tableSettings'][ $this->tName ]['printerPageScale'] = $this->pSet->getPrinterPageScale();
		$this->jsSettings['tableSettings'][ $this->tName ]['isPrinterPageFitToPage'] = $this->pSet->isPrinterPageFitToPage();
		$this->jsSettings['tableSettings'][ $this->tName ]['printerSplitRecords'] = $this->pSet->getPrinterSplitRecords();
		$this->jsSettings['tableSettings'][ $this->tName ]['printerPDFSplitRecords'] = $this->pSet->getPrinterPDFSplitRecords();

		if( $this->printGridLayout )
			$this->jsSettings['tableSettings'][$this->tName]['printGridLayout'] = $this->printGridLayout;
			
		if( $this->pSet->isAllowShowHideFields() ) 
			$this->jsSettings['tableSettings'][ $this->tName ]['isAllowShowHideFields'] = true;
			
		if( $this->pSet->isAllowFieldsReordering() && $this->printGridLayout == gltHORIZONTAL && $this->recsPerRowPrint == 1 )
		{
			$this->jsSettings['tableSettings'][ $this->tName ]['isAllowFieldsReordering'] = true;
			
			include_once getabspath("classes/paramsLogger.php");
			$logger = new paramsLogger( $this->tName, FORDER_PARAMS_TYPE );
			
			$columnOrder = $logger->getData();
			if( $columnOrder )
				$this->jsSettings['tableSettings'][ $this->tName ]['columnOrder'] = $columnOrder;			
		}
	}
	
	/**
	 *
	 */
	public function convertToPDF()
	{
		$this->preparePDFDimensions();
		$this->buildPdf($this->pSet->isLandscapePrinterPagePDFOrientation(), $this->pdfWidth, $this->pdfContent);
	}
	
	/**
	 *
	 */
	public function preparePDFDisplay()
	{
		if( !$this->pdfMode )
			return;
		
		$this->AddCSSFile("styles/defaultPDF.css");
		
		if( $this->pdfMode == "prepare")
		{
			$this->jsSettings['tableSettings'][ $this->tName ]['pdfPrinterPageOrientation'] = $this->pSet->isLandscapePrinterPagePDFOrientation();
			$this->setProxyValue('createPdf', 1);
			$this->jsSettings['tableSettings'][ $this->tName ]['pdfFitToPage'] = $this->pSet->isPrinterPagePDFFitToPage();
			$this->jsSettings['tableSettings'][ $this->tName ]['pdfPrinterPageScale'] = $this->pSet->getPrinterPagePDFScale();
		}
	}
	
	/**
	 *
	 */
	public function displayPrintPage()
	{
		$templateFile = $this->templatefile;
		if($this->eventsObject->exists("BeforeShowPrint"))
			$this->eventsObject->BeforeShowPrint($this->xt, $templateFile, $this);
		
		$this->preparePDFDisplay();

		if( $this->pdfMode == "build" )
		{

			$this->preparePDFDimensions();
			$this->assignStyleFiles( true );
			$this->xt->load_template($this->templatefile);
			$page = $this->xt->fetch_loaded();
			$this->buildPdf($this->pSet->isLandscapePrinterPagePDFOrientation(), $this->pdfWidth, $page);
		}
		else
		{
			$this->display($this->templatefile);
		}
	}

	/**
	 *
	 */
	protected function preparePDFDimensions()
	{
		if( $this->pSet->isPrinterPagePDFFitToPage() )
			return;
			
		if( !$this->pSet->isLandscapePrinterPagePDFOrientation() )
		{
			$this->pdfWidth = PDF_PAGE_WIDTH * 100 / $this->pSet->getPrinterPagePDFScale();
		}
		else
		{
			$this->pdfWidth = PDF_PAGE_HEIGHT * 100 / $this->pSet->getPrinterPagePDFScale();
		}
	}

	public function doFirstPageAssignments() 
	{
		if( $this->pSet->isPrinterPagePDF() && !$this->pdfMode )
			$this->pageBody["pdflink_block"] = true;
	}
	
	/**
	 *
	 */
	protected function buildPdf($_landscape, $_pagewidth, $_page)
	{
		$landscape = $_landscape;
		$pagewidth = $_pagewidth;
		$page = $_page;
		include(getabspath("plugins/page2pdf.php"));
	}

	/**
	 * Hide the field on the page
	 * @param String fieldName
	 */
	function hideField($fieldName)
	{
		$gf = GoodFieldName($fieldName);
		foreach ($this->body["data"] as $key => $value)
		{
			unset($this->body["data"][$key][ $gf . "_fieldheadercolumn"]);
			unset($this->body["data"][$key][ $gf . "_fieldcolumn"]);
			unset($this->body["data"][$key][ $gf . "_fieldfootercolumn"]);
		}
	}

	/**
	 * Show the field on the page
	 * @param String fieldName
	 */
	function showField($fieldName)
	{
		$gf = GoodFieldName($fieldName);
		foreach ($this->body["data"] as $key => $value) 
		{
			$this->body["data"][$key][ $gf . "_fieldheadercolumn"] = true;
			$this->body["data"][$key][ $gf . "_fieldcolumn"] = true;
			$this->body["data"][$key][ $gf . "_fieldfootercolumn"] = true;
		}
	}

	/**
	 * @param Array data
	 * @return Array 
	 */
	protected function buildDetails( $data )
	{
		$details = array();
		$multipleDetails = count($this->detailTables) > 1;
		
		foreach( $this->detailTables as $dt )
		{
			$dTable = GetTableByShort( $dt );
			$mkeys = $this->pSet->getMasterKeysByDetailTable( $dTable );
			if( !$mkeys )
				continue;

			$tSet = $this->pSet->getTable( $dTable );
			$tType = $tSet->getTableType();

			$dtableArrParams = array();
//			$dtableArr["object"] = $this;
			//$dtableArr["method"] = "showDetails";
			$dtableArrParams = array();
			$dtableArrParams["id"] = 1;	//	doesn't matter
			$dtableArrParams["xt"] = new Xtempl();
			$dtableArrParams["tName"] = $dTable;
			$dtableArrParams["multipleDetails"] = $multipleDetails;

			if ( $tType == PAGE_REPORT )
			{
				$dtableArrParams["pageType"] = PAGE_RPRINT;
				$dtableArrParams["isDetail"] = true;
				$dtableArrParams["masterTable"] = $this->tName;
				$dtableArrParams["masterKeysReq"] = array();
				$i = 0;
				foreach( $mkeys as $mkey )
				{
					$i++;
					$dtableArrParams["masterKeysReq"][$i] = $data[$mkey] ;
				}
			}
			else
			{
				$dtableArrParams["pageType"] = PAGE_PRINT;
				$dtableArrParams["printMasterTable"] = $this->tName;
				$dtableArrParams["printMasterKeys"] = array();
				foreach( $mkeys as $mkey )
				{
					$dtableArrParams["printMasterKeys"][] = $data[ $mkey ];
				}
			}
			
			$details[] = array( "details"=> XTempl::create_method_assignment( "showDetails", $this, $dtableArrParams ) );
		}
		
		return $details;
	}
	
	/**
	 * @param Array params
	 */
	public function showDetails( $params ) 
	{
		if ( $params["pageType"] == PAGE_RPRINT )
		{
			$detailsObject = new ReportPrintPage( $params );
			$detailsObject->init();
			$detailsObject->processDetailPrint();
		}
		else
		{
			$detailsObject = new PrintPage_Details( $params );
			$detailsObject->init();
			$detailsObject->process();
		}
	}

	protected function getColumnsToHide()  
	{
		return $this->getCombinedHiddenColumns();
	}
	
	function fieldClass($f) {
		$ret = parent::fieldClass($f);
		if( array_search( GoodFieldname($f), $this->hideColumns ) !== FALSE )
			$ret .= " bs-hidden-column";
		return $ret;
	}
	
	
}
?>