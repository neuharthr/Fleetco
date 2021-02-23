<?php

require_once(getabspath('classes/searchclause_base.php'));

class SearchClause extends SearchClauseBase
{
	/**
	 * Array with all session data
	 * @var array
	 */
	public $_where = array(); //?
	
	/**
	 * Name of current table, for which instance of class was created
	 * @var string
	 */
	public $tName = "";
	
	/**
	 * Array of fields for basic search
	 * @var array
	 */
	protected $searchFieldsArr = array();
	
	protected $googleLikeFields = array();
	
	/**
	 * Type of search
	 * @var string
	 */
	protected $srchType = 'integrated';
	
	/**
	 * Session vars pref
	 * @var string
	 */
	protected $sessionPrefix = "";
	
	/**
	 * Indicator, if used search it will be true
	 * @var Boolean
	 */
	public $bIsUsedSrch = false;
	
	/**
	 * An indicator showing if filters functionality is activated 
	 * @var Boolean
	 */
	public $filtersActivated = false;
	
	/**
	 * Indicator, if started simple or google-like search" 
	 * @var Boolean
	 */
	public $simpleSearchActive = false;
	
	/**
	 * Indicator, if started search is Advanced or from Search Panel
	 * @var Boolean
	 */
	protected $advancedSearchActive = false;
	
	/**
	 * Indicator, if request have agregate fields it will be true
	 * @type Boolean
	 */
	protected $haveAggregateFields = false;
	
	protected $panelSearchFields = array(); //?
	
	public $cipherer = null;
	public $pSetSearch;
	
	protected $searchOptions = array();
	
	protected $fieldDelimiterLeft = ')';
	protected $fieldDelimiterRight = '(';
	protected $valueDelimiter = '~';

	protected $fieldsUsedForSearch = array();
	
	/**
	 * Local instance of EditControlsContainer. Use only for compatibility with business templates
	 * @var object
	 */
	protected $localEditControls = null;
	
	/**
	 * Indicator, if used "show basic search options" field it will be true
	 * @var boolean
	 */
	protected $isShowSimpleSrchOpt = false;
	
	/**
	 * The array to store search params ('q', 'qs', 'f')
	 * extracted from REQUEST to use them for search saving
	 * @type Array
	 */
	protected $searchParams = array();
	
	public $savedSearchIsRun = false;
	
	/**
	 * The associative array containing the filtered fields data  
	 * @var array
	 */	
	public $filteredFields = array(); 
	
	/**
	 * @type Boolean
	 */
	protected $searchSavingEnabled = false;
	
	protected $dashTName = "";

	
	/**
	 *	If the whole Dashboard (combined) search is in effect
	 *	@type bool
	 */
	protected $wholeDashboardSearch = false;
	
	protected $dashboardSearchClause = null;
	
	
	/**
	 * @type Array
	 */
	protected $customFieldSQLConditions;
	
	/**
	 * @constructor
	 */
	function __construct(&$params)
	{
		$this->setSearchOptions();
		
		$this->tName = $params['tName'];
		$this->sessionPrefix = $params['sessionPrefix'] ? $params['sessionPrefix'] : $this->tName;
		$this->cipherer = $params['cipherer'];
		
		$this->pSetSearch = new ProjectSettings($this->tName, PAGE_SEARCH);
		if( !$this->cipherer )
			$this->cipherer = new RunnerCipherer( $this->tName, $this->pSetSearch );
		
		$this->searchFieldsArr = ( $params['searchFieldsArr'] ? $params['searchFieldsArr'] : $this->pSetSearch->getAllSearchFields() ); // searchable field (could be added to the search panel)
		$this->panelSearchFields = ($params['panelSearchFields'] ? $params['panelSearchFields'] : $this->pSetSearch->getPanelSearchFields()); // fields that are always on the search panel
		$this->googleLikeFields = ($params['googleLikeFields'] ? $params['googleLikeFields'] : $this->pSetSearch->getGoogleLikeFields()); // simple search fields
		
		$this->isShowSimpleSrchOpt = $this->pSetSearch->showSimpleSearchOptions();
		$this->searchSavingEnabled = $params['searchSavingEnabled'] ? $params['searchSavingEnabled'] : false;	
		
		$this->dashTName = $params['dashTName'] ? $params['dashTName'] : "";

		if( $params['haveAggregateFields'] )
			$this->haveAggregateFields = true;

		$this->customFieldSQLConditions = array();
	}
	
	/**
	 * set searchOptions array
	 */
	protected function setSearchOptions()
	{
		$this->searchOptions["contains"] = array("option" => "Contains", "not" => false);
		$this->searchOptions["equals"] = array("option" => "Equals", "not" => false);
		$this->searchOptions["startswith"] = array("option" => "Starts with", "not" => false);
		$this->searchOptions["morethan"] = array("option" => "More than", "not" => false);
		$this->searchOptions["lessthan"] = array("option" => "Less than", "not" => false);
		$this->searchOptions["between"] = array("option" => "Between", "not" => false);
		$this->searchOptions["empty"] = array("option" => "Empty", "not" => false);
		
		$this->searchOptions["lessequal"] = array("option" => "More than", "not" => true);
		$this->searchOptions["moreequal"] = array("option" => "Less than", "not" => true); 
		
		$this->searchOptions["notcontain"] = array("option" => "Contains", "not" => true);
		$this->searchOptions["notequal"] = array("option" => "Equals", "not" => true);
		$this->searchOptions["notstartwith"] = array("option" => "Starts with", "not" => true);
		$this->searchOptions["notmorethan"] = array("option" => "More than", "not" => true);
		$this->searchOptions["notlessthan"] = array("option" => "Less than", "not" => true); 
		$this->searchOptions["notbetween"] = array("option" => "Between", "not" => true);
		$this->searchOptions["notempty"] = array("option" => "Empty", "not" => true);		
	}
	
	/**
	 * Build where for united search
	 * Params are common for advanced search and search panel on list
	 * Use in new projects
	 * 
	 * @param Array fieldsArr	An array of table field names
	 * @public
	 * @return string
	 */
	public function buildItegratedWhere($fieldsArr, $editControls = null) 
	{
		if( !count($fieldsArr) )
			return '';
		
		if( is_null($editControls) )
			$editControls = $this->getLocalEditControls();
			
		$resWhere = '';
		if( !$this->haveAggregateFields || !$this->advancedSearchActive ) //#5083
			$resWhere = $this->getSimpleSearchWhere($fieldsArr, $editControls);

			
		$srchCriteriaCombineType = $this->getCriteriaCombineType();
		$srchFields = &$this->_where[ $this->sessionPrefix."_srchFields" ];
		
		// if there are fields for build advanced where
		$sWhere = '';
		if( count($srchFields) )
		{
			// prepare vars
			$sWhere = $srchCriteriaCombineType=="and" ? "(1=1" : "(1=0";
			$prevSrchFieldName = '';
			
			// build where
			foreach ($srchFields as $ind => $srchF)
			{	
				if( in_array($srchF['fName'], $fieldsArr) && !isset( $this->customFieldSQLConditions[ $srchF['fName'] ] ) )
				{
					$control = $editControls->getControl($srchF['fName'], SEARCHID_PANEL + $ind);
					$where = $control->getSearchWhere($srchF['value1'], $srchF['opt'], $srchF['value2'], $srchF['eType']);
					
					if($where)
					{
						// add not 
						if($srchF['not'])
						{
							$where="not (".$where.")";
						}
						// and|or depends on search type
						if($srchCriteriaCombineType=="and")
						{
							// add ( if we add new clause block for same field name
							$sWhere .= ($prevSrchFieldName != $srchF['fName'] ? ") and (" : " or ").$where;
						}
						else
						{
							$sWhere .= " or ".$where;
						}
					}
					$prevSrchFieldName = $srchF['fName'];
				}
			}
			// add ) to final field block clause
			$sWhere .= ')';
		}
		
		$resWhere = whereAdd($resWhere, $sWhere);
		
		foreach( $this->customFieldSQLConditions as $field => $sql )
		{
			if( !strlen( $resWhere ) )
				$resWhere =  "(". $sql .")";
			else	
				$resWhere.= " or (". $sql .")";
		}
		
		return $resWhere;
	}
	
	/**
	 *
	 */
	protected function getSimpleSearchWhere($fieldsArr, $editControls)
	{
		$simpleSrch = $this->_where[ $this->sessionPrefix."_simpleSrch" ];
		if( trim($simpleSrch) === '%' )
			$simpleSrch = '['.$simpleSrch.']';
		
		$simpleSrchOption = $this->_where[ $this->sessionPrefix."simpleSrchTypeComboOpt" ];
		
		if( ( $simpleSrch == null || !strlen($simpleSrch) ) && $simpleSrchOption != "Empty" )
			return "";
		
		// build where for any field contains search

		$simpleSrchField = $this->_where[ $this->sessionPrefix."simpleSrchFieldsComboOpt" ];
		if( $simpleSrch != null && strlen($simpleSrchField) && !isset( $this->customFieldSQLConditions[ $simpleSrchField  ] ) )
		{
			if( !in_array($simpleSrchField, $fieldsArr)	)
				return "";
				
			$where = $editControls->getControl( $simpleSrchField, SEARCHID_SIMPLE )->getSearchWhere($simpleSrch, $simpleSrchOption, "", "");
			if( $where && $this->_where[ $this->sessionPrefix."simpleSrchTypeComboNot" ] )
				$where = "not (". $where .")";
			
			return $where;
		}
		
		if( $this->isShowSimpleSrchOpt )
			$simpleSrchArr = array( $simpleSrch );
		else
			$simpleSrchArr = $this->googleLikeParseString( $simpleSrch );
		
		$resWhereArr = array();
		$specLookupFields = array();
		foreach($simpleSrchArr as $ind => $simpleSrchItem)
		{
			$sWhere = '';
			for($i = 0; $i < count($this->searchFieldsArr); $i++)
			{
				if( isset( $this->customFieldSQLConditions[ $this->searchFieldsArr[$i] ] ) )
					continue;
					
				if( in_array($this->searchFieldsArr[$i], $fieldsArr) && in_array($this->searchFieldsArr[$i], $this->googleLikeFields ) )
				{
					if( in_array( $this->searchFieldsArr[$i], $specLookupFields ) )
						$control = $editControls->getControl($this->searchFieldsArr[$i], SEARCHID_ALL); // $ind = 0
					else	
						$control = $editControls->getControl($this->searchFieldsArr[$i], SEARCHID_ALL + $ind);
					
					$where = $control->getSearchWhere($simpleSrchItem, $simpleSrchOption, "", "");

					if( $control->checkIfDisplayFieldSearch( $simpleSrchOption ) )
						$specLookupFields[] = $this->searchFieldsArr[$i];
					
					// add not 
					if(trim($where) != "" && $this->_where[$this->sessionPrefix."simpleSrchTypeComboNot"])
					{
						$where ="not (".$where.")";
					}
					if(trim($where) != "")
					{
						if($sWhere)
							$sWhere.= " or ";
						$sWhere.= $where;
					}
				}
			}
			
			if( count($simpleSrchArr) == 1 )
				$resWhereArr[] = $sWhere;
			elseif( $sWhere )
				$resWhereArr[] = "(".$sWhere.")";
		}
		
		return implode(" and ", $resWhereArr);	
	}
	
	/**
	 *
	 */
	protected function getLocalEditControls()
	{
		include_once getabspath("classes/controls/EditControlsContainer.php");
		return new EditControlsContainer(null, $this->pSetSearch, PAGE_SEARCH, $this->cipherer);	
	}
	
	
	/**
	 * return where clause
	 *
	 * @return string
	 */	
	public function getWhere($fieldsArr, $editControls = null)
	{
		switch ($this->srchType)
		{
			case 'showall' : 
				$sWhere = '';
				break;
			case 'integrated' :
				$sWhere = $this->buildItegratedWhere($fieldsArr, $editControls);
				break;
			default:
				$sWhere = '';
		}
		return $sWhere;
	}
	
	/**
	 * Get the controls' 'INNER JOIN' clauses combined in a one space separated string
	 * @param Object editControls		An instance of the EditControlsContainer class
	 * @return String
	 */
	function getCommonJoinFromParts($editControls)
	{
		$joinParts = $this->getJoinFromPartsArrayBasingOnSimpleSearch($editControls);
			
		$srchFields = &$this->_where[ $this->sessionPrefix."_srchFields" ];	
		if( !$srchFields )
			$srchFields = array();
		
		// add to an array of the simple search control's clauses the searh fields control's INNER JOIN clauses
		foreach($srchFields as $ind => $srchF)
		{
			if( $srchF['opt'] != "Contains" && $srchF['opt'] != "Starts with" )
				continue;
				
			$control = $editControls->getControl($srchF['fName'], SEARCHID_PANEL + $ind);
			$clausesData = $control->getSelectColumnsAndJoinFromPart( $srchF['value1'], $srchF['opt'], false);
			$joinParts[] = $clausesData["joinFromPart"];
		}
		
		return implode(" ", $joinParts);
	}	
	
	/**
	 * Get an array of the simle search controls' 'INNER JOIN' clauses
	 * @param Object editControls		An instance of the EditControlsContainer class 
	 * @return Array
	 */
	protected function getJoinFromPartsArrayBasingOnSimpleSearch($editControls)
	{
		$joinParts = array();
		$simpleSrch = $this->_where[$this->sessionPrefix."_simpleSrch"];
		$simpleSrchOpt = $this->_where[$this->sessionPrefix."simpleSrchTypeComboOpt"];

		if( $this->haveAggregateFields && $this->advancedSearchActive || !strlen($simpleSrch) || $simpleSrchOpt != "Contains" && $simpleSrchOpt != "Starts with" )
			return array();
		
		$simleSrchField = $this->_where[$this->sessionPrefix."simpleSrchFieldsComboOpt"];
		
		if( strlen($simleSrchField) )
		{
			$control = $editControls->getControl( $simleSrchField, SEARCHID_SIMPLE );
			$clausesData = $control->getSelectColumnsAndJoinFromPart( $simpleSrch, $simpleSrchOpt, false);
			return array( $clausesData["joinFromPart"] );
		}
		
		if( $this->isShowSimpleSrchOpt )
			$simpleSrchArr = array($simpleSrch);
		else
			$simpleSrchArr = $this->googleLikeParseString($simpleSrch);
		
		$joinParts = array();
		$skipFields = array();
		foreach($simpleSrchArr as $ind => $simpleSrchItem)
		{
			foreach( $this->searchFieldsArr as $sField )
			{
				if( in_array($sField, $this->googleLikeFields) && !in_array($sField, $skipFields) )
				{
					$control = $editControls->getControl($sField, SEARCHID_ALL + $ind);
					$clausesData = $control->getSelectColumnsAndJoinFromPart( $simpleSrchItem, $simpleSrchOpt, false );
					
					if( $control->checkIfDisplayFieldSearch( $simpleSrchOpt ) )
						$skipFields[] = $sField;
						
					$joinParts[] = $clausesData["joinFromPart"];
				}
			}							
		}

		return $joinParts;
	}
	
	/**
	* Get the filter's WHERE clause conditions and fill 
	* the filteredFields array with fieldes' values 
	* and WHERE clauses extracted
	*/
	function processFiltersWhere( $connection )
	{
		$this->filteredFields = array();		
		$strFieldWhere = array();
		$filtersParams = postvalue('f');	

		if( !$filtersParams && isset($_SESSION[$this->sessionPrefix."_filters"]) )
			$filtersParams = $_SESSION[$this->sessionPrefix."_filters"];
			
		if(!$filtersParams || $filtersParams == 'all')
			return;
			
		$filters = $this->parseStringToArray($filtersParams, true);
		foreach($filters as $filter)
		{
			$fName = $this->searchUnEscape( $filter[0] );
			$filterType = $filter[1];
			
			$fValue = $this->searchUnEscape( $filter[2] );
			$fValues = $this->getUnescapedFValues( $fValue );
			$parentValuesAdded = count($fValues) > 1;
			$fValue = $parentValuesAdded ? $fValues[0] : $fValue;	
			$parentValues = $parentValuesAdded ? array_slice($fValues, 1) : array();
			
			$sValue = $this->searchUnEscape( $filter[3] );
			
			$where = $this->getFilterWhereByType($filterType, $fName, $fValue , $sValue, $parentValues, $connection);
			if($where)
			{
				$strFieldWhere[$fName]["where"][] = $where;
				$strFieldWhere[$fName]["value"][] = $fValue;
				if($sValue)
					$strFieldWhere[$fName]["value"][] = $sValue;
					
				$strFieldWhere[$fName]["parentValues"][] = $parentValues;
			}					
		}
		
		foreach($strFieldWhere as $fName => $fData)
		{
			$fieldWhere = implode(" or ", $fData["where"]);
			$this->filteredFields[$fName] = array("values" => $fData["value"], "where" => $fieldWhere, "parentValues" => $fData["parentValues"] );
		}
	}
	
	/**
	 * In case the filter value contains the added partent filters values ("|"-separeated)
	 * it returns an array of filter's and its parent filters values. 
	 * Otherwise the returning array contains at most the own filter's value
	 * @param String fValue
	 * @return Array
	 */
	protected function getUnescapedFValues($fValue)
	{
		$start = 0;	
		$unescapedValues = array();
		$valueLength = strlen($fValue);
	
		if( !$valueLength )
			return $unescapedValues;
			
		for($i = 0; $i < $valueLength; $i++)
		{
			if( $fValue[$i] != "|" )
				continue;
			if( $i > 0 )
			{
				if( $fValue[$i - 1] == "\\" )
					continue;
			}
			$unescapedValues[] = str_replace( '\\|', '|', substr($fValue, $start, $i - $start) );
			$start = $i + 1;
		}

		if( $start < $valueLength )
			$unescapedValues[] = str_replace( '\\|', '|', substr($fValue, $start, $valueLength - $start) );
			
		return $unescapedValues;
	}
	
	/**
	* Get filter's WHERE clause condition basing on the filter's type
	* 
	* @param String filterType		A string representing the filter's type
	* @param String fName
	* @param String fValue
	* @param String dbType
	* @return String
	*/
	function getFilterWhereByType($filterType, $fName, $fValue, $sValue, $parentValues, $connection)
	{		
		$fullFieldName = RunnerPage::_getFieldSQLDecrypt( $fName, $connection, $this->pSetSearch, $this->cipherer );

		$fieldType = $this->pSetSearch->getFieldType($fName);
		$dateField = IsDateFieldType($fieldType);
		$timeField = IsTimeType($fieldType);
		
		if($dateField || $timeField) 
		{			
			include_once getabspath("classes/controls/FilterControl.php");	
			include_once getabspath("classes/controls/FilterIntervalSlider.php");
			include_once getabspath("classes/controls/FilterIntervalDateSlider.php");
		}
		
		switch($filterType)
		{
			case 'interval':
				$intervalData = $this->pSetSearch->getFilterIntervalDatabyIndex($fName, $fValue);
				if( !count($intervalData) )
					return "";
				
				include_once getabspath("classes/controls/FilterControl.php");	
				include_once getabspath("classes/controls/FilterIntervalList.php");
				return FilterIntervalList::getIntervalFilterWhere($fName, $intervalData, $this->pSetSearch, $this->cipherer, $this->tName, $connection);

			case 'equals':
				if( !count($parentValues) )
					return $fullFieldName."=".$this->cipherer->MakeDBValue($fName, $fValue, "", true);
				
				$wheres = array();
				$wheres[] = $fullFieldName."=".$this->cipherer->MakeDBValue($fName, $fValue, "", true);
				$parentFiltersNames = $this->pSetSearch->getParentFiltersNames($fName);
				
				foreach( $parentFiltersNames as $key => $parentName )
				{
					$wheres[] = RunnerPage::_getFieldSQLDecrypt($parentName, $connection, $this->pSetSearch, $this->cipherer)
						."=".$this->cipherer->MakeDBValue($parentName, $parentValues[$key], "", true);
				}
				
				return "(".implode(" AND ", $wheres).")";
				
			case 'checked':
				if($fValue != "on" && $fValue != "off")
					return "";
					
				$bNeedQuotes = NeedQuotes($fieldType);
				
				include_once getabspath("classes/controls/Control.php");				
				include_once getabspath("classes/controls/CheckboxField.php");	
				return CheckboxField::constructFieldWhere($fullFieldName, $bNeedQuotes, $fValue == "on", $this->pSetSearch->getFieldType($fName), $connection->dbType);
			
			case 'slider':
				if($dateField)
					return FilterIntervalDateSlider::getDateSliderWhere($fName, $this->pSetSearch, $this->cipherer, $this->tName, $fValue, $sValue, $filterType, $fullFieldName);

				if($timeField)
				{
					include_once getabspath("classes/controls/FilterIntervalTimeSlider.php");
					return FilterIntervalTimeSlider::getTimeSliderWhere($fName, $this->pSetSearch, $this->cipherer, $this->tName, $fValue, $sValue, $filterType, $fullFieldName);
				}
					
				return $this->cipherer->MakeDBValue($fName, $fValue, "", true)."<=".$fullFieldName." AND ".$fullFieldName."<=".$this->cipherer->MakeDBValue($fName, $sValue, "", true);
				
			case 'moreequal':
				if($dateField)
					return FilterIntervalDateSlider::getDateSliderWhere($fName, $this->pSetSearch, $this->cipherer, $this->tName, $fValue, $sValue, $filterType, $fullFieldName);

				if($timeField)
				{
					include_once getabspath("classes/controls/FilterIntervalTimeSlider.php");
					return FilterIntervalTimeSlider::getTimeSliderWhere($fName, $this->pSetSearch, $this->cipherer, $this->tName, $fValue, $sValue, $filterType, $fullFieldName);
				}	
				return $this->cipherer->MakeDBValue($fName, $fValue, "", true)."<=".$fullFieldName;
				
			case 'lessequal':
				if($dateField)
					return FilterIntervalDateSlider::getDateSliderWhere($fName, $this->pSetSearch, $this->cipherer, $this->tName, $fValue, $sValue, $filterType, $fullFieldName);

				if($timeField)
				{
					include_once getabspath("classes/controls/FilterIntervalTimeSlider.php");
					return FilterIntervalTimeSlider::getTimeSliderWhere($fName, $this->pSetSearch, $this->cipherer, $this->tName, $fValue, $sValue, $filterType, $fullFieldName);
				}
				return $fullFieldName."<=".$this->cipherer->MakeDBValue($fName, $fValue, "", true);
			
			default: 
				return "";
		}
	}
	
	/**
	 * Parse form with union search REQUEST (for new versions: 6.2 and newest)
	 * Params are common for advanced search and search panel on list
	 * Use in new projects
	 * 
	 * @protected
	 * @return string
	 */
	function parseItegratedRequest() 
	{
		global $suggestAllContent;
		
		$_SESSION[$this->sessionPrefix."_qs"] = postvalue('qs');
		$_SESSION[$this->sessionPrefix."_q"] = postvalue('q');

		
		$this->fieldsUsedForSearch = array();
		
		$this->_where[$this->sessionPrefix."simpleSrchTypeComboOpt"] = $suggestAllContent ? "Contains" : "Starts with";
		$this->_where[$this->sessionPrefix."simpleSrchTypeComboNot"] = false;
		$this->_where[$this->sessionPrefix."simpleSrchFieldsComboOpt"] = '';

		$tempArr = $this->parseStringToArray( postvalue('qs') );
		$simpleQueryArr = $tempArr[0];
		if( $this->wholeDashboardSearch ) 
			$simpleQueryArr = $this->getSimpleSearchFromDashboard();
		
		$this->_where[ $this->sessionPrefix."_simpleSrch" ] = $this->searchUnEscape( $simpleQueryArr[0] );	
		$this->simpleSearchActive = $simpleQueryArr[0] != '';
		
		if($this->simpleSearchActive && $this->wholeDashboardSearch)
		{
			$this->googleLikeFields = $this->getGoogleLikeFieldsFromDashboard();
		}
		
		if(isset($this->searchOptions[$this->getArrayValueByIndex($simpleQueryArr, 2, true)]))
		{
			$simpleSrchTypeComboNot = $this->searchOptions[$simpleQueryArr[2]]["not"];
			$this->_where[$this->sessionPrefix."simpleSrchTypeComboOpt"] = $this->searchOptions[$simpleQueryArr[2]]["option"];
			if (!strlen($this->_where[$this->sessionPrefix."simpleSrchTypeComboOpt"]))
			{
				$this->_where[$this->sessionPrefix."simpleSrchTypeComboOpt"] = $suggestAllContent ? "Contains" : "Starts with";
			}
		}
		
		$fieldName = trim($this->getArrayValueByIndex($simpleQueryArr, 1, true));
		$this->_where[$this->sessionPrefix."simpleSrchFieldsComboOpt"] = $fieldName;
		if($fieldName)
		{
			$this->fieldsUsedForSearch[$fieldName] = true;
		}	
		
		$srchCriteriaCombineType = postvalue("criteria");
		if( $this->wholeDashboardSearch ) 
			$srchCriteriaCombineType = $this->getCriteriaFromDashboard();
		
		if( !$srchCriteriaCombineType )
			$srchCriteriaCombineType = "and";
			
		$this->_where[$this->sessionPrefix."_srchCriteriaCombineType"] = $srchCriteriaCombineType;
		
		$_SESSION[$this->sessionPrefix."_criteriaSearch"] = $this->getCriteriaCombineType(); //?
		
		
		$this->_where[$this->sessionPrefix."_srchFields"] = array();
		
		$this->advancedSearchActive = false;
		
		$searchFieldsArr = $this->parseStringToArray(postvalue('q'), true);
		if( $this->wholeDashboardSearch ) 
			$searchFieldsArr = $this->getSearchFieldsFromDashboard();
		
		foreach ($searchFieldsArr as $searchItemArr) 
		{
			if( count($searchItemArr) < 2 )
				continue;

			$fName = $this->searchUnEscape($searchItemArr[0]);
			if (false == in_array($fName, $this->searchFieldsArr))
				continue;

			$this->advancedSearchActive = true;

			$srchF = array();
			$srchF['fName'] = $fName;
			$srchF['eType'] = $this->getArrayValueByIndex($searchItemArr, 3);
			$srchF['value1'] = $this->getArrayValueByIndex($searchItemArr, 2, true);
			$opt = $this->getArrayValueByIndex($searchItemArr, 1);
			$srchF['not'] = false;
			
			if(isset($this->searchOptions[$opt]))
			{
				$srchF['not'] = $this->searchOptions[$opt]["not"]; 
				$srchF['opt'] =  $this->searchOptions[$opt]["option"];
			}
			else 
			{
				$srchF['opt'] = $this->getDefaultSearchTypeOption($fName, $this->pSetSearch);
			}
			
			if( $this->wholeDashboardSearch )
			{
				$srchF['not'] = $this->getArrayValueByIndex($searchItemArr, 5);
			}
			
			$srchF['value2'] = $this->getArrayValueByIndex($searchItemArr, 4, true);	
			
			$this->_where[$this->sessionPrefix."_srchFields"][] = $srchF;
			$this->fieldsUsedForSearch[$fName] = true;
		}
		
		// process srch panel attrs, better then use coockies. 
		$this->_where[$this->sessionPrefix."_srchOptShowStatus"]= postvalue('srchOptShowStatus')==='1';
		$this->_where[$this->sessionPrefix."_ctrlTypeComboStatus"]= postvalue('ctrlTypeComboStatus')==='1';
		$this->_where[$this->sessionPrefix."srchWinShowStatus"]= postvalue('srchWinShowStatus')==='1';	
	}
	
	/**
	 * Get criteria from dashboard search clause
	 * @return String
	 */
	protected function getCriteriaFromDashboard()
	{
		if( $this->dashboardSearchClause )
			return $this->dashboardSearchClause->_where[ $this->dashTName.'_srchCriteriaCombineType' ];

		return "";
	}
	
	/**
	 * Get simple search from dashboard search clause
	 * @return Array
	 */
	function getSimpleSearchFromDashboard()
	{
		if($this->dashboardSearchClause)
			return array(0 => $this->dashboardSearchClause->_where[$this->dashTName.'_simpleSrch']);
		else
			return array(0 => null);
	}
	
	/**
	 * Get search fields from dashboard search clause
	 * @return Array
	 */
	function getSearchFieldsFromDashboard()
	{
		$result = array();
		if($this->dashboardSearchClause)
			$dashSearchFieldsSession = $this->dashboardSearchClause->_where[$this->dashTName.'_srchFields'];
		else
			$dashSearchFieldsSession = null;
		
		if ($dashSearchFieldsSession)
		{
			$dashSettings = new ProjectSettings($this->dashTName, PAGE_DASHBOARD);
			$dashSearchFields = $dashSettings->getDashboardSearchFields();
			
			foreach ($dashSearchFieldsSession as $i => $data)
			{
				foreach ($dashSearchFields[ $data['fName'] ] as $j => $fData)
				{
					if ($fData['table'] != $this->tName)
						continue; 
					
					$resutlData = array();
					$resutlData[0] = $fData['field'];
					
					foreach ($this->searchOptions as $opt => $optData)
					{
						if ($data['opt'] == $optData['option'])
						{
							$resutlData[1] = $opt;
							break;
						}
					}
					
					$resutlData[2] = $data['value1'];
					if ($data['eType'])
						$resutlData[3] = $data['eType'];
					
					if ($data['value2'])
						$resutlData[4] = $data['value2'];
					
					$resutlData[5] = $data['not'];
					
					$result[] = $resutlData;
				}
			}
		}
		
		return $result;
	}
	
	/**
	 * Get google like fields from dashboard
	 * @return Array
	 */
	function getGoogleLikeFieldsFromDashboard()
	{
		$result = array();
		$dashSettings = new ProjectSettings($this->dashTName, PAGE_DASHBOARD);
		$dashGoogleLikeFields = $dashSettings->getGoogleLikeFields();
		$dashSearchFields = $dashSettings->getDashboardSearchFields();
		
		foreach ($dashGoogleLikeFields as $i => $field)
		{
			foreach ($dashSearchFields[$field] as $j => $data)
			{
				if( $data['table'] == $this->tName )
					$result[] = $data['field'];
			}
		}

		return $result;
	}
	
	/**
	 * @param String inputString
	 * @return String
	 */
	function searchUnEscape($inputString)
	{
		return str_replace("\\\\", "\\", 
			str_replace("\\".$this->valueDelimiter, $this->valueDelimiter, 
				str_replace("\\".$this->fieldDelimiterLeft.$this->fieldDelimiterRight,
					$this->fieldDelimiterLeft.$this->fieldDelimiterRight, $inputString)));
	}
	
	/**
	 * @param String inputString
     * @param Boolean advanced	 
	 * @return Array
	 */
	function parseStringToArray($inputString, $advanced = false)
	{
		if(0 == strlen($inputString))
			return array();
		$result = array();
		$valuesArray = array();
		$startPos = 0;
		if($advanced)
			$inputString = substr($inputString, 1, strlen($inputString) - 2);
		$strLength = strlen($inputString);
		for($i = 0; $i < $strLength; $i++)
		{
			if($inputString[$i] == $this->valueDelimiter)
				if($this->isDelimiter($inputString, $startPos, $i))
				{
					$valuesArray[] = substr($inputString, $startPos, $i - $startPos);
					$startPos = $i + 1;
				}
			if($i == $strLength - 1 || $inputString[$i] == $this->fieldDelimiterLeft)
				if($i == $strLength - 1 || $this->isDelimiter($inputString, $startPos, $i, true))
				{
					$valuesArray[] = substr($inputString, $startPos, $i - $startPos + ($i == $strLength - 1 ? 1 : 0));
					$result[] = $valuesArray;
					$valuesArray = array();
					$startPos = $i + 2;
					$i++;
				}
		}
		return $result;
	}
	
	/**
	 * @param &String inputString
	 * @param Number startPos
	 * @param Number currentPos
	 * @param Boolean isFieldDelimiter (optional)
	 * @return Boolean
	 */
	function isDelimiter(&$inputString, $startPos, $currentPos, $isFieldDelimiter = false)
	{
		$backSlahesCount = 0;
		for($i = $currentPos - 1; $i >= $startPos; $i--)
		{
			if($inputString[$i] != '\\')
				break;
			$backSlahesCount++;
		}
		$result = $backSlahesCount == 0 || $backSlahesCount % 2 == 0;
		if($result && $isFieldDelimiter && strlen($inputString) > $currentPos + 1)
		{
			return $inputString[$currentPos + 1] == $this->fieldDelimiterRight;
		}
		return $result; 
	}
	
	/**
	 *
	 */
	function getArrayValueByIndex(&$arr, $index, $isEncoded = false)
	{
		$result = "";
		if(isset($arr[$index]))
		{
			$result = $arr[$index];
			if($isEncoded)
				$result = $this->searchUnEscape($result);
		}
		return $result;
	}
	
	/**
	 *
	 */
	function getDefaultSearchTypeOption($fName, $pSet) 
	{
		$fType = $pSet->getEditFormat($fName);
		$option = "Equals";
		if($fType == EDIT_FORMAT_LOOKUP_WIZARD)
		{
			if ($pSet->multiSelect($fName))
				$option = "Contains";	
		}
		elseif ($fType == EDIT_FORMAT_TEXT_FIELD || $fType == EDIT_FORMAT_TEXT_AREA || $fType == EDIT_FORMAT_PASSWORD 
					|| $fType == EDIT_FORMAT_HIDDEN || $fType == EDIT_FORMAT_READONLY)
		{
			if(!$this->cipherer->isFieldPHPEncrypted($fName))
				$option = "Contains";
		}
		
		return $option;
	}
	
	/**
	 *
	 */
	protected function removeSessionSearchVariables()
	{
		if ( @$_SESSION[$this->sessionPrefix."_qs"] )
			unset($_SESSION[$this->sessionPrefix."_qs"]);
		
		if ( @$_SESSION[$this->sessionPrefix."_q"] )
			unset($_SESSION[$this->sessionPrefix."_q"]);
		
		if ( @$_SESSION[$this->sessionPrefix."_criteriaSearch"] )
			unset($_SESSION[$this->sessionPrefix."_criteriaSearch"]);
	}
	
	/**
	 * Parse REQUEST
	 */
	public function parseRequest()
	{
		$this->wholeDashboardSearch = false;
		
		//set session if show all records
		if(@$_REQUEST["a"] == "showall")
		{
			$this->_where[$this->sessionPrefix."_search"] = 0;
			$this->srchType = 'showall';
			$this->bIsUsedSrch = false;
			$this->clearSearch();
			$_SESSION[$this->sessionPrefix."_pagenumber"] = 1;

			$this->removeSessionSearchVariables();

			$this->simpleSearchActive = false;
		}
		else if( isset($_REQUEST["q"]) || isset($_REQUEST["qs"]) || @$_REQUEST["f"] )
		{
			$this->srchType = 'integrated';
			$this->parseItegratedRequest();
			$this->bIsUsedSrch = isset($_REQUEST["q"]) && $_REQUEST["q"] !== "" || isset($_REQUEST["qs"]) && $_REQUEST["qs"] !== "";
			$_SESSION[$this->sessionPrefix."_pagenumber"] = 1;
		}
		else if( $this->dashTName && isset($_SESSION[$this->dashTName.'_advsearch']) )
		{
			$this->dashboardSearchClause = SearchClause::UnserializeObject($_SESSION[$this->dashTName.'_advsearch']);
			$this->wholeDashboardSearch = $this->dashboardSearchClause->bIsUsedSrch;
			if( $this->wholeDashboardSearch ) 
			{
				$this->srchType = 'integrated';
				$this->parseItegratedRequest();
				$this->bIsUsedSrch = true;
			} 
			else if( $this->dashboardSearchClause->srchType == 'showall' )
			{
				$this->_where[$this->sessionPrefix."_search"] = 0;
				$this->srchType = 'showall';
				$this->bIsUsedSrch = false;
				$this->clearSearch();
				$this->simpleSearchActive = false;

				$this->removeSessionSearchVariables();		
			}
		}
				
		//set session for filters
		if( @$_REQUEST["f"] ) 
			$_SESSION[$this->sessionPrefix."_filters"] = $_REQUEST["f"];		
		$this->filtersActivated = isset( $_SESSION[$this->sessionPrefix."_filters"] ) && $_SESSION[$this->sessionPrefix."_filters"] != 'all';
		
		if( $this->searchSavingEnabled ) 
		{
			if( isset($_REQUEST["savedSearch"]) )
				$this->savedSearchIsRun = true;
			else if( ( $this->bIsUsedSrch || $this->filtersActivated ) && !$this->searchHasTheSameSearchParams() || $this->srchType == 'showall' )
				$this->savedSearchIsRun = false;
		}
	}
	
	/** 
	 * Fill the 'searchParams' array with extracted  from REQUEST's 'q', 'qs' 
	 * and 'f' params to use them then for a search saving process. 
	 */
	public function storeSearchParamsForLogging()
	{
		if( !$this->searchSavingEnabled ) 
			return;
				
		if( !isset($_REQUEST["saveSearch"]) && !isset($_REQUEST["deleteSearch"]) )
		{
			if( $this->srchType == 'showall' )
				// reset the simple search and search panel params 
				$this->searchParams = array( "f" => $this->searchParams["f"] );
			else if( !@$_REQUEST["goto"] && !@$_REQUEST["orderby"] && !@$_REQUEST["pagesize"] )
				// reset all stored params
				$this->searchParams = array();
		}
		
		if( isset( $_REQUEST["q"] ) )
		{
			$this->searchParams["q"] = $_REQUEST["q"];
			$this->searchParams["criteria"] = @$_REQUEST["criteria"];
		}
		
		if( isset( $_REQUEST["qs"] ) )
			$this->searchParams["qs"] = $_REQUEST["qs"];
		
		if( isset( $_REQUEST["f"] ) )
			$this->searchParams["f"] = $_REQUEST["f"];
	}
	
	/**
	 * Check if the current REQUEST search params are equal to stored save search params.
	 * When the pagination or sorting is activated and there are some stored search params
	 * the current and stored search params are deemed the same
	 * @return Boolean
	 */
	public function searchHasTheSameSearchParams() 
	{
		if( @$_REQUEST["goto"] || @$_REQUEST["orderby"] || @$_REQUEST["pagesize"] )
			return true;
		
		if( !count($this->searchParams) ) 
			return false;
			
		if( @$_REQUEST["q"] != $this->searchParams["q"] || @$_REQUEST["qs"] != $this->searchParams["qs"] || @$_REQUEST["f"] != $this->searchParams["f"])
			return false;

		return true;
	}
	
	/**
	 * @return Array
	 */
	public function getSearchParamsForSaving()
	{		
		return $this->searchParams;
	}
	
	/**
	 * Clears search params
	 */
	function clearSearch()
	{
		$this->_where[$this->sessionPrefix."_simpleSrch"] = '';
		$this->_where[$this->sessionPrefix."_srchCriteriaCombineType"] = "and";
		$this->_where[$this->sessionPrefix."simpleSrchTypeComboOpt"] = "Contains";
		$this->_where[$this->sessionPrefix."simpleSrchTypeComboNot"] = false;
		$this->_where[$this->sessionPrefix."simpleSrchFieldsComboOpt"] = '';
		// prepare vars
		$this->_where[$this->sessionPrefix."_srchFields"] = array();
		// process srch panel attrs, better then use coockies. 
		$this->_where[$this->sessionPrefix."_srchOptShowStatus"]= false;
		$this->_where[$this->sessionPrefix."_ctrlTypeComboStatus"]= false;
		$this->_where[$this->sessionPrefix."srchWinShowStatus"]= false;
		
		$this->fieldsUsedForSearch = array();
	}

	/**
	 * @param String fName
	 * @return Array
	 */
	public function getSearchCtrlParams($fName)
	{
		$resArr = array();	
		$editControls = $this->getLocalEditControls();		
		
		if( $this->_where[$this->sessionPrefix."_srchFields"] )
		{
			foreach( $this->_where[$this->sessionPrefix."_srchFields"] as $srchField )
			{
				if( strtolower( $srchField['fName'] ) == strtolower( $fName ) )
				{
					$tField = $srchField;				
					$ctrl = $editControls->getControl( $fName );
					
					$eType =  $tField["eType"];
					if( $ctrl->checkIfDisplayFieldSearch( $tField["opt"] ) )
						$eType = "display";
						
					$tField["value1"] = prepare_for_db( $tField["fName"], $tField["value1"], $eType, "", $this->tName );
					$tField["value2"] = prepare_for_db( $tField["fName"], $tField["value2"], $eType, "", $this->tName );
					
					$resArr[] = $tField;					
				}
			}
		}
		
		return $resArr;
	}
	
	/**
	 * @return Number
	 */
	public function getUsedCtrlsCount() 
	{
		if( $this->_where[ $this->sessionPrefix."_srchFields" ] )
			return count( $this->_where[ $this->sessionPrefix."_srchFields" ] );
		
		return 0;
	}
	/**
	 * Global search params: use and|or, srchType panel|adv and simple search value
	 * @return array
	 */	
	public function getSearchGlobalParams() 
	{
		return array('simpleSrch' => $this->_where[ $this->sessionPrefix."_simpleSrch" ], 
					 'srchTypeRadio' => $this->getCriteriaCombineType(),
					 'srchType'=> $this->srchType,
					 'simpleSrchTypeComboOpt' => $this->_where[ $this->sessionPrefix."simpleSrchTypeComboOpt" ],
					 'simpleSrchTypeComboNot' => $this->_where[ $this->sessionPrefix."simpleSrchTypeComboNot" ],
					 'simpleSrchFieldsComboOpt' => $this->_where[ $this->sessionPrefix."simpleSrchFieldsComboOpt" ]
		);
	}
	
	/**
	 * Search panel status indicators array. Open|closed etc
	 * @return array
	 */
	public function getSrchPanelAttrs()
	{
		return array('srchOptShowStatus' => ($this->_where[$this->sessionPrefix."_srchOptShowStatus"] || count($this->panelSearchFields)),
					 'ctrlTypeComboStatus' => $this->_where[$this->sessionPrefix."_ctrlTypeComboStatus"],
					 'srchWinShowStatus' => $this->_where[$this->sessionPrefix."srchWinShowStatus"]
		);
	}
	
	/**
	 * Returns indicator is search was init
	 * @return Boolean
	 */
	public function isUsedSrch() 
	{
		return $this->bIsUsedSrch;
	}
	
	/**
	 * Returns indicator is show button 'Show All'
	 * @return Boolean
	 */
	public function isShowAll() 
	{
		return $this->bIsUsedSrch;
	}
	
	/**
	 * Check if search functionality is activated
     * @return Boolean
	 */
	public function isSearchFunctionalityActivated()
	{
		return $this->bIsUsedSrch || $this->filtersActivated || count( $this->getSearchFields() ) > 0; 
	}
	
	/**
	 * Checks whether required search fields are used for the searching or not 
	 * @return Boolean
	 */
	public function isRequiredSearchRunning() 
	{
		if(!$this->bIsUsedSrch)
		{
			//the search isn't run
			return false;
		}
		
		if(count($this->pSetSearch)){
			$requiredSearchFields = $this->pSetSearch->getSearchRequiredFields();
			foreach($requiredSearchFields as $fName)
			{
				if( !$this->fieldsUsedForSearch[$fName] )
				{
					//a required search field isn't involved in the current search
					return false;
				}
			}
		}
		return true;
	}
	
	/**
	 * Forms an array containing the search words and options
	 *
	 * @param String fname
	 * @param Array lookupParams
	 * @return array | false
	 */	
	public function getSearchToHighlight($fname, $lookupParams = array()) 
	{
		// if not in search fields array
		if (!in_array($fname, $this->searchFieldsArr))
			return false;

		$options = array();
		
		//simple search processing
		$simpleSearch['fname'] = $this->_where[$this->sessionPrefix."simpleSrchFieldsComboOpt"];
		$opt = $this->_where[$this->sessionPrefix."simpleSrchTypeComboOpt"];
		
		if($this->isShowSimpleSrchOpt)
			$simpleSearch['value'] = array($this->_where[$this->sessionPrefix."_simpleSrch"]);
		else
			$simpleSearch['value'] = $this->googleLikeParseString($this->_where[$this->sessionPrefix."_simpleSrch"]);
			
		if( isset($simpleSearch['value']) && count($simpleSearch['value']) && (!$simpleSearch['fname'] || $simpleSearch['fname'] == $fname) )
		{
			foreach($simpleSearch['value'] as $simpleSearchValue)
			{
				if( strlen( trim($simpleSearchValue) ) )
					$options[$opt][$fname][] = $simpleSearchValue;	
			}
		}

		//integrated search processing
		$srchFields = $this->_where[$this->sessionPrefix."_srchFields"];	
		if( !$srchFields )
			$srchFields = array();
		
		$multiselect = $lookupParams["multiselect"];
		$needLookupProcessing = $lookupParams["needLookupProcessing"];
		
		foreach($srchFields as $srchFieldData)
		{
			if($srchFieldData['fName'] != $fname || $srchFieldData['not'])
			{
				continue;
			}
			
			$opt = $srchFieldData['opt'];
			if($opt != "Contains" && $opt != "Equals" && $opt != "Starts with")
			{
				continue;
			}
			

			if($needLookupProcessing && $opt == "Equals")
			{
				$options[$opt][$srchFieldData['fName']][] = implode(",", splitvalues( $srchFieldData['value1'] ));
				continue;
			}
			
			if(!$multiselect ||  $opt != "Contains")
			{
				$options[$opt][$srchFieldData['fName']][] = $srchFieldData['value1'];
				continue;
			}

			$values = splitvalues( $srchFieldData['value1'] );
			foreach($values as $value)
			{
				$options[$opt][$srchFieldData['fName']][] = $value;
			}				
		}		
		
		if($options['Equals'][$fname])
			return array("searchWords" => $options['Equals'][$fname], "option" => 'Equals');
				
		if($options['Starts with'][$fname])
			return array("searchWords" => $options['Starts with'][$fname], "option" => 'Starts with');
		 
		if($options['Contains'][$fname])
			return array("searchWords" => $options['Contains'][$fname], "option" => 'Contains');
		
		return false;
	}
	
	/**
	 * Forms an array containing the actual search word and option, if there is at least one word to highlight.
	 *
	 * @param String fname
	 * @param String value
	 * @param Boolean encoded	It indicates if runner_htmlspecialchars should be applied to the search words
	 * @param Array lookupParams	It contains the following propeties:
	 * 		String linkFieldValue			The value of the link field if the link field differs from the displayed field
	 * 	 	Boolean multiselect				An indicator showing if the lookup is multiselect
	 * 		Boolean needLookupProcessing	An indicator showing if the lookup is tablebased, multiselect, with
	 *										the same link and displayed fields			
	 * @return Array | false
	 */	
	public function getSearchHighlightingData($fname, $value, $encoded, $lookupParams)
	{
		global $useUTF8;
		
		$searchData = $this->getSearchToHighlight($fname, $lookupParams);
		if(!$searchData)
		{
			return false;
		}
		
		$flags = $useUTF8 ? "iu" : "i";
		$searchWordArr = array();		
		$searchOpt = $searchData['option'];

		
		foreach($searchData['searchWords'] as $searchWord)
		{
			$curSearchWord = $searchWord;
			
			//linkFieldValue and linkFieldValue params are set for lookup contols with distinct Link and Displayed fields only
			//originLinkValue param is set for multiselet lookups only
			if($searchOpt == 'Contains' &&  $lookupParams["originLinkValue"] == $searchWord || $searchOpt == 'Equals' && $lookupParams["linkFieldValue"] == $searchWord )
			{
				return array("searchWords" => array($value), "searchOpt" => $searchData['option']);
			}
			
			if($encoded)
			{
				$curSearchWord = runner_htmlspecialchars($curSearchWord);
			}
			
			$pattern = '/'.preg_quote($curSearchWord,"/").'/'.$flags;
			if($searchOpt == 'Starts with')
			{
				$pattern = '/^'.preg_quote($curSearchWord,"/").'/'.$flags;
			}
			
			$isMatched = preg_match($pattern, $value, $matches);
			if( $isMatched && ( $searchOpt != 'Equals' ||  $value == $matches[0] ) ) 
			{
				//get the actual search word contained in the $value string
				$curSearchWord = $matches[0];
				$searchWordArr[] = $curSearchWord;				
			}
		}
		
		if(count($searchWordArr))
		{
			return array("searchWords" => $searchWordArr, "searchOpt" => $searchOpt);
		}
		
		return false;		
	}

	/**
	 * Google-like parse search string
	 * Input: "a b" c d "e f"
	 * Output: array("a b", "c", "d", "e f")
	 *
	 * @param string $str search string
	 * @return array
	 */
	protected function googleLikeParseString($str)
	{
		$ret = array();
		$matches = array();
		if(preg_match_all('/(\"[^"]+\")|([^\s]+)/', $str, $matches))
		{
			foreach($matches[0] as $match)
			{
				$ret[] = ($match[0] == '"') ? substr($match, 1, -1) : $match;
			}
		}
		return array_unique($ret);
	}
	
	/**
	*  Informs how search criterions are combined.
	*  Returns "and" or "or";
	*
	*  @return string
	*/
	public function getCriteriaCombineType()
	{
		if( $this->_where[$this->sessionPrefix."_srchCriteriaCombineType"] == "or" )
			return "or";	
		
		if( $this->simpleSearchActive && !count($this->_where[$this->sessionPrefix."_srchFields"]) )
			return "or";
		
		return "and";
	}

	/**
	 *
	 */
	public static function UnserializeObject($str)
	{
		if(!$str)
			return null;
		
		include_once getabspath("classes/controls/EditControlsContainer.php");
		$obj = unserialize($str);
		
		$obj->pSetSearch = new ProjectSettings($obj->tName, PAGE_SEARCH);

		$obj->cipherer = new RunnerCipherer($obj->tName, $obj->pSetSearch );
		
		return $obj;
	}
/*
	public function Serialize()
	{
		return serialize($this);
		// PHP7 can't serialize connection object which is linked through one of the objects
		$_pset = $this->pSetSearch;
		$_cipherer = $obj->cipherer;
		$this->pSetSearch = null;
		$obj->cipherer = null;
		
		$ret = serialize($this);
		
		$this->pSetSearch = $_pset;
		$obj->cipherer = $_cipherer;
		
		return $ret;
		
	}

	*/
	/**
	 * User Search API
	 * @return Array
	 */
	public function getSearchFields()
	{
		$fieldsData = array();

		if(count($this->_where[ $this->sessionPrefix."_srchFields" ])>0){ //for asp
			foreach( $this->_where[ $this->sessionPrefix."_srchFields" ] as $ind => $sfData )
			{	
				if( !$fieldsData[ $sfData['fName'] ] )
					$fieldsData[ $sfData['fName'] ] = array();				
				
				$fieldsData[ $sfData['fName'] ][] = SEARCHID_PANEL + $ind;
			}
		}
		
		if( $this->haveAggregateFields && $this->advancedSearchActive )
			return $fieldsData;
		
		$simpleSrch = $this->_where[ $this->sessionPrefix."_simpleSrch" ];
		$simpleSrchOption = $this->_where[ $this->sessionPrefix."simpleSrchTypeComboOpt" ];		
		
		if( ( $simpleSrch == null || !strlen($simpleSrch) ) && $simpleSrchOption != "Empty" )
			return $fieldsData;
		
		$simpleSrchField = $this->_where[ $this->sessionPrefix."simpleSrchFieldsComboOpt" ];
		if( $simpleSrch != null && strlen($simpleSrchField) && in_array($simpleSrchField,  $this->googleLikeFields) )
		{
			if( !$fieldsData[ $simpleSrchField ] )
				$fieldsData[ $simpleSrchField ] = array();				
			
			$fieldsData[ $simpleSrchField ][] = SEARCHID_SIMPLE;						
		}
	
		if( $this->isShowSimpleSrchOpt )
			$simpleSrchArr = array( $simpleSrch );
		else
			$simpleSrchArr = $this->googleLikeParseString( $simpleSrch );

		foreach($simpleSrchArr as $ind => $simpleSrchItem)
		{
			for($i = 0; $i < count($this->searchFieldsArr); $i++)
			{
				if ( in_array($this->searchFieldsArr[$i], $this->googleLikeFields) )
				{
					if( !$fieldsData[ $this->searchFieldsArr[$i] ] )
						$fieldsData[ $this->searchFieldsArr[$i] ] = array();				
					
					$fieldsData[ $this->searchFieldsArr[$i] ][] = SEARCHID_ALL + $ind;							
				}
			}
		}

		return $fieldsData;
	}

	/**
	 * @return Boolean
	 */
	public function isSearchPanelByUserApiRun()
	{
		if ( !count( $this->_where[ $this->sessionPrefix."_srchFields" ] ) )
			return false;
			
		foreach( $this->_where[ $this->sessionPrefix."_srchFields" ] as $ind => $sfData )
		{	
			if( $sfData['byUserApi'] )
				return true;
		}
		
		return false;
	}
	
	/**
	 * User Search API	
	 * @param String field
	 * @param Number id
	 * @return mixed ( String | null )
	 */
	public function getFieldValue( $field, $id = null )
	{
		$srchFields = &$this->_where[ $this->sessionPrefix."_srchFields" ];
		foreach($srchFields as $ind => $srchF)
		{
			if( $srchF['fName'] == $field && ( $id == SEARCHID_PANEL + $ind || is_null($id) ) )
				return $srchF['value1'];
		}
		
		if( $this->haveAggregateFields && $this->advancedSearchActive )
			return null;
			
		$simpleSrch = $this->_where[ $this->sessionPrefix."_simpleSrch" ];	
		$simpleSrchOption = $this->_where[ $this->sessionPrefix."simpleSrchTypeComboOpt" ];		
		
		if( ( $simpleSrch == null || !strlen($simpleSrch) ) && $simpleSrchOption != "Empty" || !in_array($field, $this->googleLikeFields) )
			return null;			
		
		$simpleSrchField = $this->_where[ $this->sessionPrefix."simpleSrchFieldsComboOpt" ];
		if( $simpleSrchField == $field && $simpleSrch != null && ( $id == SEARCHID_SIMPLE || is_null($id) ) )
			return $simpleSrch;						
	
		if( strlen( $simpleSrchField ) )
			return null;
	
		if( $this->isShowSimpleSrchOpt )
			$simpleSrchArr = array( $simpleSrch );
		else
			$simpleSrchArr = $this->googleLikeParseString( $simpleSrch );	

		foreach($simpleSrchArr as $ind => $simpleSrchItem)
		{
			for($i = 0; $i < count($this->searchFieldsArr); $i++)
			{
				if ( $this->searchFieldsArr[$i] == $field && ( $id == SEARCHID_ALL + $ind || is_null($id) ) )
					return $simpleSrchItem;	
			}
		}
			
		return null;
	}
	
	/**
	 * between case
	 * User Search API		 
	 * @param String field
	 * @param Number id
	 * @return mixed ( String | null )
	 */	
	public function getSecondFieldValue( $field, $id = null )
	{
		$srchFields = &$this->_where[ $this->sessionPrefix."_srchFields" ];
		foreach($srchFields as $ind => $srchF)
		{
			if( $srchF['fName'] == $field && ( $id == SEARCHID_PANEL + $ind || is_null($id) ) )
				return $srchF['value2'];
		}
		
		return null;
	}	

	/**
	 * @param String opt
	 * @param Boolean not
	 * @return String
	 */
	protected function getSearchOptionUserText( $opt, $not )
	{
		switch( $opt )
		{
			case "Contains":
				return $not ? NOT_CONTAINS : CONTAINS;
			case "Equals":
				return $not ? NOT_EQUALS : EQUALS;
			case "Starts with":
				return $not ? NOT_STARTS_WITH : STARTS_WITH;
			case "More than":
				return $not ? NOT_MORE_THAN : MORE_THAN;
			case "Less than":
				return $not ? NOT_LESS_THAN : LESS_THAN;
			case "Between":
				return $not ? NOT_BETWEEN : BETWEEN;
			case "Empty":
				return $not ? NOT_EMPTY : EMPTY_SEARCH;
			default:
				return CONTAINS;
		}
	}
	
	/**
	 * User Search API		
	 * @param String field
	 * @param Number id
	 * @return String
	 */
	public function getSearchOption( $field, $id = null )
	{
		$srchFields = &$this->_where[ $this->sessionPrefix."_srchFields" ];
		foreach($srchFields as $ind => $srchF)
		{
			if( $srchF['fName'] == $field && ( $id == SEARCHID_PANEL + $ind || is_null($id) ) )
				return $this->getSearchOptionUserText( $srchF['opt'], $srchF['not'] );
		}
		
		if( $this->haveAggregateFields && $this->advancedSearchActive )
			return "";	
					
		$simpleSrchOption = $this->_where[ $this->sessionPrefix."simpleSrchTypeComboOpt" ];			
		if( strlen($simpleSrchOption) )
			return $simpleSrchOption;
			
		$simpleSrch = $this->_where[ $this->sessionPrefix."_simpleSrch" ];
		if( $simpleSrch == null || !strlen($simpleSrch) ) 
			return "";
		
		return CONTAINS;
	}

	/**
	 * User Search API		
	 * Get an all field search control's value
	 * @return mixed ( String | null )
	 */
	public function	getAllFieldsSearchValue()
	{
		if( $this->haveAggregateFields && $this->advancedSearchActive )
			return null;

		return $this->_where[ $this->sessionPrefix."_simpleSrch" ];	
	}
	
	/**
	 * Add a new search panel control data
	 * @param String field
	 * @param String value1
	 * @param String value2
	 * @param String opt
	 * @param Boolean not
	 * @return Number
	 */
	protected function addSPControlData( $field, $value1, $value2, $opt = "", $not = false )
	{
		if( !in_array($field, $this->searchFieldsArr) )
			return -1;
		
		if( !$opt )
			$opt =  $this->getDefaultSearchTypeOption($field, $this->pSetSearch);
		
		$srchFields = &$this->_where[ $this->sessionPrefix."_srchFields" ];
		
		// add a new control on the search panel
		$srchF = array();
		$srchF['fName'] = $field;
		$srchF['eType'] = $this->getSPCtrlEType( $field, $opt );
		$srchF['value1'] = $value1;
		$srchF['not'] = $not;
		$srchF['opt'] = $opt;
		$srchF['value2'] = $value2;		
		$srchF['byUserApi'] = true;		
		
		$srchFields[] = $srchF;
		
		return SEARCHID_PANEL + count( $srchFields ) - 1;		
	}
	
	/**	
	 * @param String fName
	 * @return String
	 */
	protected function getSPCtrlEType( $fName, $opt = "" )
	{
		$editFormat = $this->pSetSearch->getEditFormat( $fName );
		
		if( $editFormat == EDIT_FORMAT_DATE )
		{
			$dateEditType = $this->pSetSearch->getDateEditType( $fName );
			//BOOTSTRAP_LAYOUT?		
			return "date" + $dateEditType;
		}
		
		if( $editFormat == EDIT_FORMAT_CHECKBOX )
			return "checkbox";
	
		$editControls = $this->getLocalEditControls();
		$ctrl = $editControls->getControl( $fName );
		if( $ctrl->checkIfDisplayFieldSearch( $opt ) )
			return "display";
	
		return "";
	}
	
	/**
	 * @param String field
	 * @param String value
	 * @param Number id
	 * @return Number
	 */
	public function setFieldValue( $field, $value, $id = null )
	{
		if( !in_array($field, $this->searchFieldsArr) )
			return -1;
			
		$srchFields = &$this->_where[ $this->sessionPrefix."_srchFields" ];	
		
		if( $this->isShowSimpleSrchOpt && ( !strlen( $this->_where[ $this->sessionPrefix."simpleSrchFieldsComboOpt" ] ) ||  $this->_where[ $this->sessionPrefix."simpleSrchFieldsComboOpt" ] == $field ) 
			&& $this->_where[ $this->sessionPrefix."_simpleSrch" ] == '' && ( $id == SEARCHID_SIMPLE || !count($srchFields) && is_null($id) ) )
		{
			$this->_where[ $this->sessionPrefix."simpleSrchFieldsComboOpt" ] = $field;
			$this->_where[ $this->sessionPrefix."_simpleSrch" ] = $value;
			return SEARCHID_SIMPLE;
		}
		
		foreach($srchFields as $ind => $srchF)
		{
			if( $srchF['fName'] == $field && ( $id == SEARCHID_PANEL + $ind || is_null($id) ) )
			{			
				$srchFields[ $ind ]['value1'] = $value;
				return SEARCHID_PANEL + $ind;
			}
		}
		
		$newId = $this->addSPControlData( $field,  $value, "", "" );
		return $newId;
	}
	
	/**
	 * User Search API		
	 * between case
	 * @param String field
	 * @param String value
	 * @param Number id
	 * @return Number	 
	 */
	public function setSecondFieldValue( $field, $value, $id = null )
	{
		if( !in_array($field, $this->searchFieldsArr) )
			return -1;
			
		$srchFields = &$this->_where[ $this->sessionPrefix."_srchFields" ];	
		foreach($srchFields as $ind => $srchF)
		{
			if( $srchF['fName'] == $field && ( $id == SEARCHID_PANEL + $ind || is_null($id) ) )
			{			
				$srchFields[ $ind ]['value2'] = $value;
				return SEARCHID_PANEL + $ind;
			}
		}
		
		$newId = $this->addSPControlData( $field, "" , $value, "Between" );
		return $newId;		
	}
	
	/**
	 * Get the searchOptions prop's key
	 * @param String opt
	 * @return String
	 */
	protected function convertUserSearchOption( $opt )
	{
		switch( $opt )
		{
			case CONTAINS: 
				return "contains";
			case EQUALS: 
				return "equals";
			case STARTS_WITH: 
				return "startswith";
			case MORE_THAN: 
				return "morethan";
			case LESS_THAN: 
				return "lessthan";
			case BETWEEN: 
				return "between";
			case EMPTY_SEARCH: 
				return "empty";
			case NOT_CONTAINS: 
				return "notcontain";
			case NOT_EQUALS: 
				return "notequal";
			case NOT_STARTS_WITH: 
				return "notstartwith";
			case NOT_MORE_THAN: 
				return "notmorethan";
			case NOT_LESS_THAN: 
				return "notlessthan";
			case NOT_BETWEEN: 
				return "notbetween";
			case NOT_EMPTY: 
				return "notempty";
			default:
				return "contains";
		}
	}
	
	
	/**
	 * User Search API		
	 * @param String field
	 * @param String opt
	 * @param Number id
	 * @return Number
	 */
	public function setSearchOption( $field, $opt, $id = null )
	{
		if( !in_array($field, $this->searchFieldsArr) )
			return -1;
	
		$srchFields = &$this->_where[ $this->sessionPrefix."_srchFields" ];	
	
		if( $this->isShowSimpleSrchOpt && ( !strlen( $this->_where[ $this->sessionPrefix."simpleSrchFieldsComboOpt" ] ) ||  $this->_where[ $this->sessionPrefix."simpleSrchFieldsComboOpt" ] == $field ) 
			&& ( $id == SEARCHID_SIMPLE || !count($srchFields) && is_null($id) ) )
		{
			$this->_where[ $this->sessionPrefix."simpleSrchFieldsComboOpt" ] = $field;
			$simpleSrchOption = $this->_where[ $this->sessionPrefix."simpleSrchTypeComboOpt" ] = $opt;
			return SEARCHID_SIMPLE;
		}
			
		$opt = $this->convertUserSearchOption( $opt );	
			
		foreach($srchFields as $ind => $srchF)
		{
			if( $srchF['fName'] == $field && ( $id == SEARCHID_PANEL + $ind || is_null($id) ) )
			{		
				if( isset($this->searchOptions[$opt]) )
				{
					$srchFields[ $ind ]['not'] = $this->searchOptions[$opt]["not"]; 
					$srchFields[ $ind ]['opt'] =  $this->searchOptions[$opt]["option"];
				}
				
				return SEARCHID_PANEL + $ind;
			}
		}		
	}	
	
	/**
	 * User Search API	
	 * @param String field
	 * @param String value	 
	 */
	public function addFieldValue( $field, $value )
	{
		return $this->addSPControlData( $field,  $value, "", "" );
	}

	/**
	 * User Search API		
	 * @param String value
	 */
	public function	setAllFieldsSearchValue( $value )
	{
		global $suggestAllContent;
		if( !$this->haveAggregateFields || !$this->advancedSearchActive /* + ? */)
		{
			$this->_where[ $this->sessionPrefix."_simpleSrch" ]	= $value;
			$this->_where[$this->sessionPrefix."simpleSrchTypeComboOpt"] = $suggestAllContent ? "Contains" : "Starts with";
			$this->_where[$this->sessionPrefix."simpleSrchTypeComboNot"] = false;			
		}
	}
	
	/**
	 * User Search API		
	 * @param String field
	 * @param String sqlCondition
	 */
	public function setSearchSQL( $field, $sqlCondition )
	{
		if( in_array( $field, $this->searchFieldsArr) )
			$this->customFieldSQLConditions[ $field ] = $sqlCondition;
	}
	
	/**
	 *
	 * @return SearchClause
	 */
	public static function getSearchObject( $tName = "", $dashTName = "", $sessionPrefix = "", $cipherer = null, $searchSavingEnabled = false, $pSet = null )
	{
		global $strTableName, $_cachedSeachClauses;
		
		if( !$tName )
			$tName = $strTableName;
		
		if( !$sessionPrefix )
			$sessionPrefix = $dashTName ? $dashTName."_".$tName : $tName;
		
		if( $_cachedSeachClauses[ $sessionPrefix ] )
			return $_cachedSeachClauses[ $sessionPrefix ];
		
		if( $tName != $strTableName ) //dashboard ??
			$currentSearchClause = SearchClause::getSearchObject( $strTableName );
		
		if( isset( $_SESSION[ $sessionPrefix.'_advsearch' ] ) )
		{
			$searchClauseObj = SearchClause::UnserializeObject( $_SESSION[ $sessionPrefix.'_advsearch' ] );
		}
		else
		{
			$params = array();
		
			$params['tName'] = $tName;
			$params['dashTName'] = $dashTName;
			$params['sessionPrefix'] = $sessionPrefix;
			$params['searchSavingEnabled'] = $searchSavingEnabled;
			
			if( $cipherer )
				$params['cipherer'] = $cipherer;
			
			if( !$pSet )
				$pSet = new ProjectSettings( $tName );
			
			$params['haveAggregateFields'] = count( $pSet->getListOfFieldsByExprType( true ) ) > 0;
			
			$searchClauseObj = new SearchClause( $params );
		}
		
		$searchClauseObj->parseRequest();
		$_cachedSeachClauses[ $sessionPrefix ] = $searchClauseObj;	
	
		return $searchClauseObj;
	}
}
?>