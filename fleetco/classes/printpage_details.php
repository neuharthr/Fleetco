<?php
class PrintPage_Details extends PrintPage
{
	public $printMasterTable = array();
	public $printMasterKeys = array();
	
	public $multipleDetails = false;
	
	
	/**
	 * @constructor
	 */
	function __construct(&$params = "")
	{
		parent::__construct($params);
		//details
	}

	/**
	 *
	 */
	protected function buildSQL()
	{
		$gQuery = $this->pSet->getSQLQuery();
		$gstrOrderBy = $this->pSet->getStrOrderBy();
		$this->sqlParts["where"] = "";
		if( $this->pSet->getAdvancedSecurityType() == ADVSECURITY_VIEW_OWN )
		{
			$this->sqlParts["where"] = SecuritySQL("Search", $this->tName);
		}
		$this->sqlParts["where"] = whereAdd( $this->sqlParts["where"], $this->getMasterTableSQLClause() );
		$this->sqlParts["sql"] = SQLQuery::gSQLWhere_having($gQuery->HeadToSql(), 
			$gQuery->FromToSql(), 
			$gQuery->WhereToSql(),
			$gQuery->GroupByToSql(), 
			"", 
			$this->sqlParts["where"], 
			"");	

		$this->sqlParts["orderby"] = $gstrOrderBy;
		$this->sqlParts["sql"] .= " " . trim( $this->sqlParts["orderby"] );
	}
	
	/**
	 * Process the page 
	 */
	public function process()
	{
		//	Before Process event
		if( $this->eventsObject->exists("BeforeProcessPrint") )
			$this->eventsObject->BeforeProcessPrint( $this );
			
		$this->commonAssign();
		$this->setMapParams();

		$this->splitByRecords = 0; // show all details in master list print page
		$this->allPagesMode = true;
		$this->buildSQL();
		$this->openQuery();
		
		$this->fillGridPage();
		$this->showTotals();

		$this->doCommonAssignments();
		$this->addCustomCss();
		$this->displayPrintPage();		
	}
	
	/**
	 *
	 */
	public function displayPrintPage()
	{
		if( !$this->fetchedRecordCount )
			return;
			
		$this->xt->bulk_assign( $this->pageBody );
		$this->xt->hideAllBricksExcept( array( "grid" ) );

		$this->xt->assign("grid_block", true);
		//	show table name only when several details are printed
		$this->xt->assign( "printheader", $this->multipleDetails );

		$this->xt->load_template($this->templatefile);
//		$this->xt->prepareContainers();

		echo "<div class='rnr-print-details'>";
		if( $this->multipleDetails )
		{
			echo "<div class='rnr-pd-title'>";
			echo $this->getPageTitle( $this->pageType, GoodFieldName($this->tName));
			echo "</div>";
		}
		echo "<div class='rnr-pd-grid'>";
		echo $this->xt->fetch_loaded("container_grid");
		echo "</div>";
		echo "</div>";
	}
	
	/**
	 * returns where clause for active master-detail relationship
	 *
	 * @return string
	 */
	function getMasterTableSQLClause() 
	{
		$where = "";
		$dKeys = $this->pSet->getDetailKeysByMasterTable( $this->printMasterTable );
		if( !$dKeys )
			return "1=0";
		
		foreach( $dKeys as $i => $key ) 
		{
			if($i != 0) 
				$where.= " and ";
				
			if($this->cipherer && $this->cipherer->isEncryptionByPHPEnabled())
				$mValue = $this->cipherer->MakeDBValue( $key, $this->printMasterKeys[$i] );
			else 
				$mValue = make_db_value( $key, $this->printMasterKeys[$i], "", "", $this->tName);
				
			if(strlen($mValue) != 0)
				$where.= $this->getFieldSQLDecrypt( $key ) . "=" . $mValue;
			else 
				$where.= "1=0";
		}
		return $where;
	}
}
?>