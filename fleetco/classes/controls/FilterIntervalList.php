<?php

class FilterIntervalList extends FilterControl
{
	protected $sqlTotalsString;
	
	protected $intervalsData = array();
	
	protected $showWithNoRecords = false;
	
		
	public function __construct($fName, $pageObject, $id, $viewControls)
	{
		parent::__construct($fName, $pageObject, $id, $viewControls);

		$this->separator = "~interval~";
		$this->filterFormat = FF_INTERVAL_LIST;
		
		$this->showWithNoRecords = $this->pSet->showWithNoRecords($fName);
		$this->useApllyBtn = $this->multiSelect == FM_ALWAYS;
		$this->setAggregateType();
		$this->processRowIntervalData();
		$this->buildSQL();	
	}	
	
	/**
	 * Process the intervals data
	 */
	protected function processRowIntervalData()
	{
		$totals = array(); 
		$intervalsRowData = $this->pSet->getFilterIntervals($this->fName);
		
		foreach($intervalsRowData as $intervalData) 
		{
			$idx = $intervalData["index"];
			$caseCondition = $this->getCaseCondition($intervalData);
			
			$totals[] = $this->getTotalString($caseCondition, $idx);
			$this->setIntervalData($this->fName.$idx, $intervalData, $caseCondition);				
		}
		
		$this->sqlTotalsString = implode(", ", $totals);	
	}

	/**
	 * Get the sql string containing the aggregate function 
	 * applied to a case expression
	 *
	 * @param String caseCondition
	 * @param Number idx
	 * @return String
	 */	
	protected function getTotalString($caseCondition, $idx)
	{
		$fullFieldName = $this->getDbFieldName($this->fName);
		$fullTotalFieldName = $this->getDbFieldName($this->totalsfName);
		
		$caseStatement = $this->getCaseStatement($caseCondition,  $fullFieldName, "null");
		$totalString = $this->aggregate."(".$caseStatement.") as ".$this->connection->addFieldWrappers($this->fName.$idx)." ";
			
		if( $this->useTotals && $this->totalsfName != $this->fName )
		{
			$caseStatement = $this->getCaseStatement($caseCondition, $fullTotalFieldName, "null");
			$totalString.= ", ". $this->aggregate."(".$caseStatement.") as ".$this->connection->addFieldWrappers("TOTAL".$idx);
		}		
		return $totalString;
	}	
	
	/**
	 * Get a case condition basing on the interval's limit types
	 * @param Array interval
	 * @return String
	 */
	protected function getCaseCondition($interval) 
	{
		return FilterIntervalList::getIntervalFilterWhere($this->fName, $interval, $this->pSet, $this->cipherer, $this->tName, $this->connection);
	}
	
	/**
	 * Get a filter's SQL where clause condition 
	 *
	 * @param String fName
	 * @param Array intervalData
	 * @param Object pSet
	 * @param Object cipherer
	 * @param String tableName
	 * @return String
	 */ 
	static function getIntervalFilterWhere($fName, $intervalData, $pSet, $cipherer, $tableName, $connection)
	{
		$fullFieldName = RunnerPage::_getFieldSQL($fName, $connection, $pSet); 
		if( $intervalData["remainder"] )  
		{
			$index = $intervalData["index"];
			$intervalsData = $pSet->getFilterIntervals($fName);
			$conditions = array();
			foreach($intervalsData as $intervalData)
			{
				if( $intervalData["noLimits"] )
					return "1=0";
				
				if( $intervalData["index"] == $index )
					continue;
				
				$conditions[] = FilterIntervalList::getLimitsConditions($fName, $fullFieldName, $intervalData, $cipherer, $tableName, $connection, true);
			}
			return implode(" AND ", $conditions);
		}

		if( $intervalData["noLimits"] )
			return $fullFieldName." is not NULL AND ".$fullFieldName." <> '' ";;
		
		return FilterIntervalList::getLimitsConditions($fName, $fullFieldName, $intervalData, $cipherer, $tableName, $connection);

	}
	
	/**
	 * Get where/when conditions basing on the interval's bounds types and limit values
	 *
	 * The function is static because It can be invoked through the getIntervalFilterWhere
	 * static method from the SearchClause object to build the filters' SQL where clause
	 *
	 * @param String fName
	 * @param String fullFieldName
	 * @param Array intervalData
	 * @param Object pSet
	 * @param String tableName
	 * @param Boolean inverted	The flag indicating if the codition is prepared for the 'Other values'
     * interval (false) or not (true).	
	 * @return String
	 */ 	
	static function getLimitsConditions($fName, $fullFieldName, $intervalData, $cipherer, $tableName, $connection, $inverted = false) 
	{
		$signLow = FilterIntervalList::getIntervalSign($intervalData["lowerLimitType"], true, $inverted);
		$signUp = FilterIntervalList::getIntervalSign($intervalData["upperLimitType"], false, $inverted);
		$condition = array();
		
		if($signLow)
		{
			$fValue = FilterIntervalList::getLimitValue($fName, $intervalData, $cipherer, $tableName, true);				
			if( $intervalData["caseSensetive"] )
				$condition[] = $fValue.$signLow.$fullFieldName;
			else 			
				$condition[] = $connection->upper( $fValue ).$signLow.$connection->upper( $fullFieldName );
		}
	
		if($signUp)
		{
			$fValue = FilterIntervalList::getLimitValue($fName, $intervalData, $cipherer, $tableName, false);
			if( $intervalData["caseSensetive"] )
				$condition[] = $fullFieldName.$signUp.$fValue;
			else		
				$condition[] = $connection->upper( $fullFieldName ).$signUp.$connection->upper( $fValue );
		}
			
		return "(".implode($inverted? " OR " : " AND ", $condition).")";
	}

	/**
	 * Get the db prepared interval limit's value
	 *
	 * The function is static because It can be invoked through the getIntervalFilterWhere,
	 * getLimitsConditions static methods from the SearchClause object to build the filters' SQL where clause
	 *
	 * @param String fName
	 * @param Array intervalData
	 * @param Object cipherer
	 * @param String tableName
	 * @param Boolean isLower	The flag indicating if the value is prepared for the lower limit or not.
	 * @return String
	 */ 		
	static function getLimitValue($fName, $intervalData, $cipherer, $tableName, $isLower)
	{
		$keyPrefix = $isLower ? "lower" : "upper";
		$isFieldEncrypted = $cipherer->isFieldEncrypted($fName);
		
		if( $intervalData[$keyPrefix."UsesExpression"] )
			$fValue = getIntervalLimitsExpressions($tableName, $fName, $intervalData["index"], $isLower);
		else 
			$fValue = $intervalData[$keyPrefix."Limit"];
		
		if($isFieldEncrypted)
			return $cipherer->MakeDBValue($fName, $fValue, "", true);	

		return make_db_value($fName, $fValue, "", "", $tableName);
	}
	
	/**
	 * Get the inequality signs basing om the interval's limit and bound type
	 *
	 * The function is static because It can be invoked through the getIntervalFilterWhere,
	 * getLimitsConditions static methods from the SearchClause object to build the filters' SQL where clause
	 *
	 * @param String limitType
	 * @param Boolean isLowerBound 	The flag indicating if the sign is for the lower limit or not.
	 * @param Boolean inverted		The flag indicating if the sign is prepared for the 'Other values'
     * interval's condition (false) or not (true).
	 * @return String
	 */ 		
	static function getIntervalSign($limitType, $isLowerBound, $inverted = false)
	{	
		if( $limitType == FIL_MORE_THAN && $isLowerBound
			|| $limitType == FIL_LESS_THAN && !$isLowerBound )
		{
			if( $inverted )
				return ">=";

			return "<";	
		}
		
		if( $limitType == FIL_MORE_THAN_OR_EQUAL && $isLowerBound
			|| $limitType == FIL_LESS_THAN_OR_EQUAL && !$isLowerBound )
		{
			if( $inverted )		
				return ">";				
			
			return "<=";
		}			
			
		return "";
	}
	
	/**
	 * Add the interval's data to the intervalsData array 
	 * @param Number key
	 * @param Array intervalData
	 * @param String caseCondition
	 */
	protected function setIntervalData($key, $intervalData, $caseCondition)
	{	
		//get the label
		$type = $intervalData["intervalLabelNameType"];
		$message = $intervalData["intervalLabelText"];
		$this->intervalsData[$key]["label"] =  $this->getLabel($type, $message);

		$this->intervalsData[$key]["where"] = $caseCondition;
		$this->intervalsData[$key]["index"] = $intervalData["index"];
	}
		
	/**
	 * Get the sql string containing the intervals totals
	 * to add them then to the SELECT clause
	 *
	 * @return String
	 */
	protected function getTotals()
	{					
		return $this->sqlTotalsString;
	}
	
	/**
	 * Get the view controls' value 
	 *
	 * @param String index
	 * @return String
	 */
	protected function getValueToShow($index) 
	{
		$interval = $this->pSet->getFilterIntervalDatabyIndex($this->fName, $index); 	
		$showValue = $this->getLabel($interval["intervalLabelNameType"], $interval["intervalLabelText"]);

		return $showValue;
	}
	
	/**
	 * Get the filter blocks data using the database query
	 * and add it the the existing blocks
	 * @param &Array
	 */
	protected function addFilterBlocksFromDB( &$filterCtrlBlocks )
	{
		$visibilityClass = $this->filtered && $this->multiSelect == FM_ON_DEMAND ? $this->onDemandHiddenItemClassName : "";
		
		//query to database with current where settings
		$data = $this->connection->query( $this->strSQL )->fetchAssoc(); 
		$this->decryptDataRow($data);
		
		$aggFuncIsCount = $this->aggregate ==  $this->totalsOptions[ FT_COUNT ];	
		
		foreach($this->intervalsData  as $key => $intervalData)
		{
			$fieldValue = $data[$key];
			$totalValue = $data[$key];

			if( $this->useTotals && $this->fName != $this->totalsfName)
				$totalValue = $data[ "TOTAL".$intervalData["index"] ]; 

			if( $this->showWithNoRecords || $aggFuncIsCount && ($totalValue > 0 || $fieldValue > 0) 
				|| !$aggFuncIsCount && (!is_null($totalValue) || !is_null($fieldValue)) )
			{
				$this->valuesObtainedFromDB[] = $intervalData["index"];
				$intervalData["total"] = $totalValue;
				$filterControl = $this->buildControl($intervalData);
				$filterCtrlBlocks[] = $this->getFilterBlockStructure($filterControl, $visibilityClass, $intervalData["index"]);
			}
		}	
	}

	/**
	 * Get the arrray with keys corresponding to filter blocks markup
	 * @param String filterControl
	 * @param String visibilityClass
	 * @param String value							The Interval's index
	 * @param Array parentFiltersData (optional)	 
	 * @return Array
	 */
	protected function getFilterBlockStructure( $filterControl, $visibilityClass, $value, $parentFiltersData = array() )
	{		
		if( $this->multiSelect != FM_ALWAYS )
			$visibilityClass.= " filter-link";
			
		return array(
			$this->gfName."_filter" => $filterControl, 
			"visibilityClass_".$this->gfName => $visibilityClass,
			"sortValue" => $value
		);
	}

	/**
	 * Sort filter blocks depending on the field's type and format
	 * @param &Array filterCtrlBlocks
	 */
	protected function sortFilterBlocks(&$filterCtrlBlocks)
	{
		usort( $filterCtrlBlocks, array("FilterControl", "compareBlocksByNumericValues") );
	}
	
	/**
	 * Get the multiselect filters' filterblocks for values 
	 * that are out of range. And add them to the existing filter blocks
	 * @param &Array filterCtrlBlocks
	 */
	protected function addOutRangeValuesToFilter( &$filterCtrlBlocks )
	{
		$visibilityClass = $this->multiSelect == FM_ON_DEMAND ? $this->onDemandHiddenItemClassName : "";
		
		foreach( $this->filteredFields[ $this->fName ]["values"] as $value) 
		{
			if( in_array($value, $this->valuesObtainedFromDB) )
				continue;
			
			foreach($this->intervalsData as $intervalData)
			{
				if( $intervalData["index"] == $value )
				{
					$label = $intervalData["label"];
					break;
				}
			}	
			$filterControl = $this->buildControl( array("index" => $value, "label" => $label) );
			$filterCtrlBlocks[] = $this->getFilterBlockStructure($filterControl, $visibilityClass, $value);				
		}
	}
	
	/**
	 * Get the html markup representing the control on the page
	 * @params Array data
	 * @param Array parentFiltersData (optional)
	 * @return String
	 */
	protected function buildControl( $data, $parentFiltersData = array() )
	{
		$value = $data["index"];
		$showValue = $data["label"];
		$dataValue = $data["index"];
		$totalValue = $this->getTotalValueToShow( $data["total"] );
		$separator = $this->separator;
		
		return $this->getControlHTML($value, $showValue, $dataValue, $totalValue, $separator);
	}	
}
?>