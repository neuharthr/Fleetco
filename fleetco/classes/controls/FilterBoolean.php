<?php
class FilterBoolean extends FilterControl
{
	public function __construct($fName, $pageObject, $id, $viewControls)
	{
		parent::__construct($fName, $pageObject, $id, $viewControls);
		
		$this->separator = "~checked~";
		$this->filterFormat = FF_BOOLEAN;
		
		$this->setAggregateType();
		$this->buildSQL();
	}
		
	/**
	 * Get an SQL string containing the intervals totals
	 * to add them then to the SELECT clause
	 * @return String
	 */
	protected function getTotals()
	{
		$type = $this->pSet->getFieldType($this->fName);
		$bNeedQuotes = NeedQuotes($type);
		
		$fullFieldName = $this->getDbFieldName($this->fName);
		$fullTotalFieldName = $this->getDbFieldName($this->totalsfName);
		
		$booleanData = array("checked", "unchecked");
		$totals = array();
		
		foreach($booleanData as $type)
		{
			$checked = $type == "checked";
			$caseCondition = CheckboxField::constructFieldWhere($fullFieldName, $bNeedQuotes, $checked, $type, $this->connection->dbType);
			
			$caseStatement = $this->getCaseStatement($caseCondition, $fullTotalFieldName, "null");
			$totals[] = $this->aggregate."(".$caseStatement.") as ".$this->connection->addFieldWrappers($type);
			
			if($this->useTotals && $this->fName != $this->totalsfName)
			{
				$caseStatement = $this->getCaseStatement($caseCondition, $fullFieldName, "null");
				$totals[] = $this->aggregate."(".$caseStatement.") as ".$this->connection->addFieldWrappers($this->fName.$type);
			}
		}
			
		return implode(", ", $totals);	
	}
	
	/**
	 * Get the view controls' value 
	 * @param String value
	 * @return String
	 */
	protected function getValueToShow($value) 
	{
		$checked = $value == "on";
		$showValue = $this->getShownValue($checked);
		
		return $showValue;
	}
	
	/**
	 * Get the filter's label
	 * @param Boolean checked 	The flag indicating if to get
	 * the label for the checed records ro not
	 * @param Boolean checked
	 * @return String
	 */
	protected function getShownValue($checked)
	{
		if($checked)
		{
			$type = $this->pSet->getFilterCheckedMessageType($this->fName);
			$message = $this->pSet->getFilterCheckedMessage($this->fName);
		} 
		else 
		{
			$type = $this->pSet->getFilterUncheckedMessageType($this->fName);
			$message = $this->pSet->getFilterUncheckedMessage($this->fName);
		}
		
		return $this->getLabel($type, $message);
	}
	
	/**
	 * Get the filter blocks data using the database query
	 * and add it the the existing blocks
	 * @param &Array
	 */
	protected function addFilterBlocksFromDB( &$filterCtrlBlocks )
	{	
		//query to database with current where settings
		$data = $this->connection->query( $this->strSQL )->fetchAssoc();
		$this->decryptDataRow($data);
		
		$aggFuncIsCount = $this->aggregate == $this->totalsOptions[ FT_COUNT ];
		
		$dataTotals = array("checked" => $data["checked"], "unchecked" => $data["unchecked"]);
		foreach($dataTotals as $key => $total)
		{
			if( $this->useTotals && $this->fName != $this->totalsfName )
				$fieldTotal = $data[ $this->fName.$key ];
				
			if( $aggFuncIsCount && ($total > 0 || $fieldTotal > 0)
				|| !$aggFuncIsCount && (!is_null($total) || !is_null($fieldTotal)) )
			{
				$booleanData = array("checked" => $key == "checked", "total" => $total);
				$filterControl = $this->buildControl($booleanData);
				$filterCtrlBlocks[] = $this->getFilterBlockStructure($filterControl);
			}	
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
		$checked = $data["checked"];
		$value = $checked? "on" : "off";	
		$showValue = $this->getShownValue($checked);
		$totalValue = $this->getTotalValueToShow( $data["total"] );
		$separator = $this->separator;
	
		return $this->getControlHTML($value, $showValue, $value, $totalValue, $separator);
	}		
}	
?>