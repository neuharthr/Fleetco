<?php
class FilterValuesList extends FilterControl
{
	protected $useFormatedValueInSorting;
	
	protected $isDescendingSortOrder;
	
	protected $sortingType;
	
	protected $parentFiltersNamesData = array();
	
	protected $parentFiltersNames = array();
	
	protected $dependentFilterNames = array();
	
	protected $dependentFilterName;
	
	protected $hasDependent = false;
	
	protected $filteredFieldParentFiltersKeysToIgnore = null;

	protected $hideShowMore = false;
	
	/**
	 * The number of items that should be show 
	 * according to the 'Show firt N item' setting 
	 * @type Number
	 */
	protected $numberOfVisibleItems = 0;
	
	/**
	 * The flag indicating if to show 'Show N more' button
	 * @param Boolean
	 */
	protected $truncated = false;
	
	protected $numberOfExtraItemsToShow = 0;
	
	protected $hiddenExtraItemClassName = "filter-item-hidden";
	
	
	public function __construct($fName, $pageObject, $id, $viewControls)
	{
		parent::__construct($fName, $pageObject, $id, $viewControls);
		
		$this->filterFormat = FF_VALUE_LIST;
		$this->separator = "~equals~";
		$this->useApllyBtn = $this->multiSelect == FM_ALWAYS;
		
		$this->numberOfVisibleItems = $this->pSet->getNumberOfVisibleFilterItems($fName); 
		
		$this->parentFilterName = $this->pSet->getParentFilterName($fName);
		$this->dependent = $this->parentFilterName != "";
		
		$this->dependentFilterName = $this->pSet->getDependentFilterName($fName);
		$this->hasDependent = $this->dependentFilterName != "";		
		
		$this->assignParentFiltersData();
		$this->assignDependentFiltersData();
		
		$this->setSortingParams();
		$this->setAggregateType();
		$this->buildSQL();
	}
	
	/**
	 * Assign 'parentFiltersNames', 'parentFiltersNamesData' properties to
	 * the corresponding data if the current filter is dependent
	 */
	protected function assignParentFiltersData()
	{
		if( !$this->dependent )
			return;
			
		$this->parentFiltersNames = $this->pSet->getParentFiltersNames($this->fName);
		$parentFiltersData = array();
		
		foreach($this->parentFiltersNames as $parentName)
		{
			$dbName = $this->getDbFieldName($parentName);
			$hasAlias = $dbName != $this->connection->addFieldWrappers($parentName);
			$rsName = $hasAlias ? $this->connection->addFieldWrappers($parentName) : $dbName;
				
			$parentFiltersData[$parentName]['dbName'] = $dbName;
			$parentFiltersData[$parentName]['rsName'] = $rsName;
			$parentFiltersData[$parentName]['hasAlias'] = $hasAlias;		
		}
		
		$this->parentFiltersNamesData = $parentFiltersData;		
	}
	
	/**
	 * Assign the 'dependentFilterNames' property to
	 * the corresponding data if the current filter has any dependent filter
	 */
	protected function assignDependentFiltersData()
	{
		if( !$this->hasDependent )
			return;

		$this->dependentFilterNames = $this->pSet->getDependentFiltersNames($this->fName);	
	}
	
	/**
	 * Form the SQL query string to get then the filter's data 
	 */	
	protected function buildSQL()
	{
		$dbfName = $this->getDbFieldName($this->fName);	
		$sqlHead = "SELECT ".$dbfName;
		
		if( $dbfName != $this->connection->addFieldWrappers($this->fName) ) 
			$sqlHead.= " as ".$this->connection->addFieldWrappers($this->fName);
		
		$sqlHead.= $this->getExtraSelectColumns();
		
		if($this->useTotals)
			$sqlHead .= ", ".$this->getTotals();
	
		$whereComponents = $this->whereComponents;
			
		$gQuery = $this->pSet->getSQLQuery();
		$sqlFrom = $gQuery->FromToSql().$whereComponents["joinFromPart"];					
		$sqlGroupBy = "GROUP BY ".$this->getGroupByColumns( $dbfName ) ;
		$sqlHaving = $this->getCombinedFilterHaving();
		
		$notNullWhere = $this->getNotNullWhere($dbfName);
		$sqlWhere = whereAdd( $notNullWhere, $this->getCombinedFilterWhere( $this->hasDependent ) );		
		
		$searchCombineType = $whereComponents["searchUnionRequired"] ? "or" : "and";
		
		$this->strSQL = SQLQuery::gSQLWhere_having($sqlHead, $sqlFrom, $sqlWhere, $sqlGroupBy, $sqlHaving, $whereComponents["searchWhere"], $whereComponents["searchHaving"], $searchCombineType);	
		
		// add ORDER BY to sort the result records
		if( $this->sortingType != SORT_BY_DISP_VALUE ) 
		{
			$sortFieldName = $dbfName;
			if( $this->sortingType == SORT_BY_GR_VALUE && $this->useTotals )
				$sortFieldName = $this->connection->addFieldWrappers($this->fName."TOTAL");
				
			$this->strSQL.= ' ORDER BY '.$sortFieldName.( $this->isDescendingSortOrder ? ' DESC' : ' ASC');
		}
	}

	/**
	 * Get extra select columns list for a dependent filter
	 * @return String
	 */
	protected function getExtraSelectColumns()
	{
		if( !$this->dependent ) 
			return '';
		
		$sqlColumns = '';		
		foreach($this->parentFiltersNamesData as $names)
		{
			$sqlColumns.= ", ".$names["dbName"];			
			
			if( $names['hasAlias'] ) 
				$sqlColumns.= " as ".$names["rsName"];			
		}
		
		return $sqlColumns;	
	}
	
	/**
	 * Get a list of columns for the GROUP BY clause 
	 * @param String dbfName
	 * @return String	 
	 */
	protected function getGroupByColumns($dbfName)
	{
		$mainFieldNames = array();
		$mainFieldNames[] = $dbfName;
		
		if( $this->dependent ) 
		{
			foreach($this->parentFiltersNamesData as $names)
			{
				$mainFieldNames[] =	$names["dbName"];			
			}
			$mainFieldNames = array_reverse( $mainFieldNames );
		}
		
		return implode(", ", $mainFieldNames);
	}
	
	/**
	 * Get the 'not null' condition to add it to the WHERE clause
	 * @param String dbfName
	 * @return String
	 */
	protected function getNotNullWhere($dbfName)
	{
		$notNullWhere = $dbfName." is not NULL";
		if( $this->connection->dbType != nDATABASE_Oracle )
		{	
			if( IsCharType($this->fieldType) )
				$notNullWhere = $dbfName."<>'' and ".$notNullWhere;
		}

			
		if( !$this->dependent )
			return $notNullWhere;
			
		$notNullWheres = array();
		foreach($this->parentFiltersNamesData as $pName => $names)
		{
			$notNullWhereP = $names['dbName']." is not NULL";
			
			if( $this->connection->dbType != nDATABASE_Oracle )
			{	
				$fieldType = $this->pSet->getFieldType($pName);
				if( IsCharType($fieldType) )
					$notNullWhereP = $names['dbName']."<>'' and ".$notNullWhereP;
			}
			
			$notNullWheres[] = $notNullWhereP; 
		}		
			
		return $notNullWhere." AND ".implode(" AND ", $notNullWheres);
	}
	
	/**
	 * Set the sorting params
	 */
	protected function setSortingParams()
	{
		$this->sortingType = $this->pSet->getFilterSortValueType($this->fName);
		$this->isDescendingSortOrder = $this->pSet->isFilterSortOrderDescending($this->fName);
		$this->useFormatedValueInSorting = $this->sortingType == SORT_BY_DISP_VALUE || IsCharType($this->fieldType) || $this->pSet->getEditFormat($this->fName) == EDIT_FORMAT_LOOKUP_WIZARD; 		
	}
	
	/**
	 * Set the type of the aggregate funtion
	 */
	protected function setAggregateType() 
	{
		$this->aggregate = $this->totalsOptions[ $this->totals ]; 
	}
	
	/**
	 * Get the sql string containing the filter totals
	 * to add it to the SELECT clause
	 * @return String
	 */
	protected function getTotals()
	{		
		$fullTotalFieldName = $this->getDbFieldName($this->totalsfName);
		return $this->aggregate."(".$fullTotalFieldName.") as ".$this->connection->addFieldWrappers($this->fName."TOTAL");
	}
	
	/**
	 * Get the view controls' value 
	 *
	 * @param String values
	 * @return String
	 */
	protected function getValueToShow($value) 
	{
		$data = array($this->fName => $value); 	
		$showValue = $this->viewControl->showDBValue($data, "");

		return $showValue;
	}
	
	/**
	 * Get the filter blocks data using the database query
	 * and add it the the existing blocks
	 * @param &Array
	 */
	protected function addFilterBlocksFromDB( &$filterCtrlBlocks )
	{
		$containsFilteredDependentOnDemandFilter = !$this->dependent && !$this->filtered && $this->hasFilteredDependentOnDemandFilter();
		$visibilityClass = $this->filtered && $this->multiSelect == FM_ON_DEMAND ? $this->onDemandHiddenItemClassName : "";
		
		//query to database with current where settings
		$qResult = $this->connection->query( $this->strSQL );
		while( $data = $qResult->fetchAssoc() )
		{	
			$this->decryptDataRow($data);
			$rawValue = $data[ $this->fName ];
			
			$parentFiltersData = array();
			if( $this->dependent )
			{
				foreach($this->parentFiltersNames as $pName)
				{
					$parentFiltersData[ $pName ] = $data[ $pName ];
				}
			}
				
			$this->valuesObtainedFromDB[] = $rawValue;
					
			$filterControl = $this->buildControl($data, $parentFiltersData);
			if( $containsFilteredDependentOnDemandFilter )
				$filterControl = $this->getDelButtonHtml($this->gfName, $this->id,  $data[ $this->fName ]).$filterControl;

			$filterCtrlBlocks[] = $this->getFilterBlockStructure($filterControl, $visibilityClass, $rawValue, $parentFiltersData);
		}
	}

	/**
	 * Check if the current filter has any dependent filtered 'on demand' filter
	 * @return Boolean
	 */
	protected function hasFilteredDependentOnDemandFilter()
	{
		if( !$this->hasDependent )
			return false;
		
		foreach( $this->dependentFilterNames as $dName )
		{ 
			if( count( $this->filteredFields[ $dName ] ) && $this->pSet->getFilterFiledMultiSelect($dName) == FM_ON_DEMAND )
				return true;
		}
		
		return false;
	}
	
	/**
	 * Get the parent filters data
	 * @param String value
	 * @return Array
	 */
	protected function getParentFiltersDataForFilteredBlock( $value )
	{
		$parentFiltersData = array();
		
		if( !$this->filtered || !$this->dependent )
			return $parentFiltersData;
		
		$parentValuesData = $this->filteredFields[ $this->fName ]["parentValues"];
		if( count($parentValuesData) <= 1 )
		{		
			foreach($this->parentFiltersNames as $pName)
			{
				//parent filter is single selected
				$pValue = $this->filteredFields[ $pName ]["values"][0];
				//parent filter is not presented in filter params string
				if(	!isset($this->filteredFields[ $pName ]) && count( $parentValuesData[0] ) )
					$pValue = $parentValuesData[0][0];
					
				$parentFiltersData[ $pName ] = $pValue;
			}
			return $parentFiltersData;
		} 

		if( !$this->filteredFieldParentFiltersKeysToIgnore )
			$this->filteredFieldParentFiltersKeysToIgnore = array();
					
		foreach( $parentValuesData as $key => $parentValues )
		{
			if( $value != $this->filteredFields[ $this->fName ]['values'][ $key ] || in_array($key, $this->filteredFieldParentFiltersKeysToIgnore) )
				continue;
			
			$this->filteredFieldParentFiltersKeysToIgnore[] = $key;

			foreach($this->parentFiltersNames as $pKey => $pName)
			{
				$pValue = $parentValues[$pKey];
				$parentFiltersData[ $pName ] = $pValue;
			}
			
			return $parentFiltersData;
		}
		
		return $parentFiltersData;
	}
	
	/**
	 * Get the arrray with keys corresponding to filter blocks markup
	 * @param String filterControl
	 * @param String visibilityClass
	 * @param String value							The raw Db field's value
	 * @param Array parentFiltersData (optional)
	 * @return Array
	 */
	protected function getFilterBlockStructure( $filterControl, $visibilityClass, $value, $parentFiltersData = array() )
	{
		$sortValue = $value;
		if( $this->useFormatedValueInSorting )
		{
			$valueData = array($this->fName => $sortValue);
			$sortValue = $this->viewControl->showDBValue($valueData, "");	
		}
		
		if( $this->multiSelect != FM_ALWAYS )
			$visibilityClass.= " filter-link";
				
		return array(
			$this->gfName."_filter" => $filterControl, 
			"visibilityClass_".$this->gfName => $visibilityClass,
			"sortValue" => $sortValue,
			"dbValue" => $value,
			"mainValues" => $parentFiltersData
		);
	}
	
	/**
	 * Get the html markup representing the control on the page
	 * @param Array data
	 * @param Array parentFiltersData (optional)
	 * @return String
	 */
	protected function buildControl( $data, $parentFiltersData = array() )
	{
		$value = $data[ $this->fName ];
		$showValue = $this->viewControl->showDBValue($data, "");		
		$dataValue = $data[ $this->fName ];
		$totalValue = $this->getTotalValueToShow( $data[ $this->fName."TOTAL" ] );
		$separator = $this->separator;

		return $this->getControlHTML($value, $showValue, $dataValue, $totalValue, $separator, $parentFiltersData);
	}

	/**
	 * Check if to show the 'Show N more' button
	 * for a not dependent filter
	 * @return Boolean
	 */
	protected function isTruncated()
	{
		return !$this->dependent && $this->truncated;
	}
	
	/**
	 * Get the extra data attributes for the control's HTML elements
	 * @param Array parentFiltersData 
	 * @return String
	 */
	protected function getExtraDataAttrs( $parentFiltersData )
	{
		if( !$this->dependent || is_null($parentFiltersData) )
			return '';
			
		return ' data-parent-filters-values="'.runner_htmlspecialchars( my_json_encode( $parentFiltersData ) ).'" ';
	}	
	
	/**
	 * Get the cheked attribute string for a multiselect filter control
	 * @param String value
	 * @param String parentFiltersData
	 * @return String	 
	 */
	protected function getCheckedAttr( $value, $parentFiltersData = null )
	{
		$filteredValues = $this->filteredFields[ $this->fName ]['values'];
		
		if( $this->multiSelect == FM_NONE || $this->filtered && !in_array($value, $filteredValues) )
			return '';
		
		if( $this->filtered && $this->dependent && $this->multiSelect == FM_ON_DEMAND && count($filteredValues) == 1 )
			return 'checked="checked"';
		
		if( !$this->filtered || !$this->dependent || is_null($parentFiltersData) )
			return 'checked="checked"';
			
		foreach( $this->filteredFields[ $this->fName ]["parentValues"] as $key => $parentValues )	
		{
			if( $value == $this->filteredFields[ $this->fName ]['values'][$key] && $this->isParentsValuesDataTheSame($parentFiltersData, $parentValues) )
				return 'checked="checked"';
		}
		return '';
	}
	
	/**
	 * Check if two data structures passed are similar
	 * @param Array parentFiltersData
	 * @param Array parentValues
	 * @return Boolean
	 */
	protected function isParentsValuesDataTheSame($parentFiltersData, $parentValues)
	{
		foreach($this->parentFiltersNames as $pKey => $pName)
		{
			if( $parentFiltersData[$pName] != $parentValues[$pKey] )
				return false;
		}
		return true;	
	}
	
	/**
	 * Get filter control's base ControlsMap array
	 * @return array
	 */	
	protected function getBaseContolsMapParams() 
	{
		$ctrlsMap = parent::getBaseContolsMapParams();
		
		if( $this->dependent )
		{
			$ctrlsMap['dependent'] = true;
			$ctrlsMap['parentFilterNames'] = $this->parentFiltersNames;
			$ctrlsMap['goodParentName'] = GoodFieldName( $this->parentFilterName );
			$ctrlsMap['goodOutermostParentName'] = GoodFieldName( $this->parentFiltersNames[ count($this->parentFiltersNames) - 1 ] );
		}
		
		if( $this->hasDependent )
		{
			$ctrlsMap['hasDependent'] = true;
			$ctrlsMap['dependentFilterNames'] = $this->dependentFilterNames;
		}
		
		return $ctrlsMap;	
	}

	/**
	 * Get the murkup of the control's delete button
	 * @param String gfName
	 * @param Number id
	 * @param String deleteValue
	 * @return String
	 */
	protected function getDelButtonHtml($gfName, $id, $deleteValue) 
	{
		if( $this->multiSelect == FM_ALWAYS || $this->dependent )
			return '';
		
		return parent::getDelButtonHtml($gfName, $id, $deleteValue);	
	}
	
	/**
	 * A stub
	 * @return Number
	 */
	protected function getNumberOfExtraItemsToShow()
	{
		return $this->numberOfExtraItemsToShow;
	}
	
	/**
	 * Update filter blocks structures
	 * @param &Array
	 */
	protected function extraBlocksProcessing( &$filterCtrlBlocks )
	{
		parent::extraBlocksProcessing($filterCtrlBlocks);
		
		if( !$this->numberOfVisibleItems || $this->dependent )
			return;
			
		$visbleItemsCounter = $hiddenItemsCounter = 0;
		foreach($filterCtrlBlocks as $index => $block)
		{
			$visible = ( strpos( $block[ "visibilityClass_".$this->gfName ], $this->onDemandHiddenItemClassName ) === FALSE );
			if( $visible )
				$visbleItemsCounter = $visbleItemsCounter + 1;
			else
				$hiddenItemsCounter = $hiddenItemsCounter + 1;
			
			if( $visible && $visbleItemsCounter > $this->numberOfVisibleItems || !$visible && $hiddenItemsCounter > $this->numberOfVisibleItems )
				$filterCtrlBlocks[ $index ][ "visibilityClass_".$this->gfName ].= " ".$this->hiddenExtraItemClassName;
		}
		
		if( $this->filtered && $this->multiSelect == FM_ON_DEMAND )
		{
			if( count($this->filteredFields[ $this->fName ]["values"]) < $this->numberOfVisibleItems && $hiddenItemsCounter > $this->numberOfVisibleItems )
			{
				$this->truncated = true;
				$this->hideShowMore = true;
				$this->numberOfExtraItemsToShow = $hiddenItemsCounter - $this->numberOfVisibleItems;
			}
		} 
		elseif( $visbleItemsCounter > $this->numberOfVisibleItems )
		{
			$this->truncated = true;
			$this->numberOfExtraItemsToShow = $visbleItemsCounter - $this->numberOfVisibleItems;
		}			
	}
	
	/**
     * Check if the "show more" button must be hidden by class attr
	 * @return Boolean
	 */
	protected function isShowMoreHidden()
	{
		return $this->hideShowMore;
	}
	
	/**
	 * Sort filter blocks depending on the field's type and format
	 * @param &Array filterCtrlBlocks
	 */
	protected function sortFilterBlocks(&$filterCtrlBlocks)
	{
		if( $this->sortingType != SORT_BY_DISP_VALUE )
			return;
			
		$compareFunction = IsNumberType($this->fieldType) ? "compareBlocksByNumericValues" : "compareBlocksByStringValues";	
		usort( $filterCtrlBlocks, array("FilterControl", $compareFunction) );
		
		if( $this->isDescendingSortOrder ) 
			$filterCtrlBlocks = array_reverse( $filterCtrlBlocks );
	}
	
	/**
	 * Get the Filter's control block data.
	 * @param Object pageObj
	 * @param Array $dFilterBlocks (optional)
	 * @return Array
	 */	
	public function buildFilterCtrlBlockArray( $pageObj, $dFilterBlocks = null )
	{
		$filterBlocks = parent::buildFilterCtrlBlockArray( $pageObj );
		
		if( !$this->hasDependent || is_null($dFilterBlocks) ) 
			return $filterBlocks;
		
		return $this->getCtrlBlocksMergeWithDependentFilterBlocks( $filterBlocks, $dFilterBlocks );
	}	

	/**
	 * Get the main filter's and dependent blocks merged
	 * @param Array mFilterBlocks
	 * @param Array dFilterBlocks
	 * @return Array 
	 */
	protected function getCtrlBlocksMergeWithDependentFilterBlocks( $mFilterBlocks, $dFilterBlocks )
	{	
		$dgName = GoodFieldName( $this->dependentFilterName ); 	
		$dBlockName = "filterCtrlBlock_".$dgName;
		$showMoreBlockName = "filter_button_showmore_".$dgName;
		
		//Get 'Show first ...' settings
		$numberOfdItemsToShow = $this->pSet->getNumberOfVisibleFilterItems( $this->dependentFilterName );
		
		foreach($mFilterBlocks as $key => $block)
		{
			$mMainValues = $block["mainValues"];
			$visibleItemsCounter = 0;			
			$invisibleItemsCounter = 0;
			
			foreach($dFilterBlocks as $dBlock)
			{
				$dMainValues = $dBlock["mainValues"];
				if( $dMainValues[ $this->fName ] != $block["dbValue"] )
					continue;
				
				$addDependentBlock = true;
				
				foreach($mMainValues as $fName=>$value)
				{
					if( $mMainValues[ $fName ] != $dMainValues[ $fName ] )
					{
						$addDependentBlock = false;
						break;
					}
				}

				if( $addDependentBlock )
				{
					if( $numberOfdItemsToShow ) 
					{
						$visible = $dBlock["visibilityClass_".$dgName] != $this->onDemandHiddenItemClassName;
						if( $visible )
							$visibleItemsCounter = $visibleItemsCounter + 1;
						else
							$invisibleItemsCounter = $invisibleItemsCounter + 1;
							
						if(  $visible && $visibleItemsCounter > $numberOfdItemsToShow || !$visible && $invisibleItemsCounter > $numberOfdItemsToShow )
							$dBlock["visibilityClass_".$dgName] = $this->hiddenExtraItemClassName;
					}
						
					$mFilterBlocks[ $key ][ $dBlockName ]["data"][] = $dBlock;
				}
				
				
				$mFilterBlocks[ $key ]["show_n_more_".$dgName] = str_replace( "%n%", $visibleItemsCounter - $numberOfdItemsToShow, mlang_message("SHOW_N_MORE") );
				$mFilterBlocks[ $key ][ $showMoreBlockName ] = $numberOfdItemsToShow && $numberOfdItemsToShow < $visibleItemsCounter;		
			}
		}
		
		return $mFilterBlocks;	
	}	
	
	/**
	 * Get the filter's buttons parameters such as buttons' labels, 
	 * class names and attributes
	 * @param Array dBtnParams (optional)	 
	 * @return Array
	 */
	public function getFilterButtonParams( $dBtnParams = null )
	{
		$mBtnParams = parent::getFilterButtonParams();
		
		if( $this->hasDependent && !is_null($dBtnParams) )
		{
			$mBtnParams['hasMultiselectBtn'] = $mBtnParams['hasMultiselectBtn'] || $dBtnParams['hasMultiselectBtn'];
			$mBtnParams['hasApplyBtn'] = $mBtnParams['hasApplyBtn'] || $dBtnParams['hasApplyBtn'];
		}
		
		return $mBtnParams;		
	}

	/**
	 * Get the filter's extra controlls parameters
	 * @param Array dBtnParams (dExtraCtrls)	 
	 * @return Array
	 */	
	public function getFilterExtraControls( $dExtraCtrls = null )
	{
		$mExtraCtrls = parent::getFilterExtraControls();
		
		if( !$this->hasDependent || is_null($dExtraCtrls) )
			return $mExtraCtrls;
			
		if( !$mExtraCtrls['selectAllAttrs'] || $this->multiSelect == FM_ON_DEMAND && $dExtraCtrls['selectAllAttrs'] )
			$mExtraCtrls['selectAllAttrs'] = $dExtraCtrls['selectAllAttrs'];
		
		if( !$mExtraCtrls['clearLink'] )
			$mExtraCtrls['clearLink'] = $dExtraCtrls['clearLink'];		
			
		return $mExtraCtrls;
	}	
}
?>