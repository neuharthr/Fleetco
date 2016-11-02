<?php
class ViewLookupWizardField extends ViewControl
{
	public $nLookupType;
	public $lookupTable;
	public $displayFieldName;
	public $linkFieldName;
	public $linkAndDisplaySame;
	public $pSet;
	public $lookupPSet;
	public $cipherer; 
	public $lookupQueryObj;
	public $displayFieldIndex;
	public $LookupSQL;
	public $resolvedLookupValues = array();
	public $resolvedLinkLookupValues = array();
	public $linkFieldIndex;
	
	public $localControlsContainer;
	
	/**
	* @type Connection
	*/ 
	protected $lookupConnection;
	
	public function __construct($field, $container, $pageObject)
	{
		parent::__construct($field, $container, $pageObject);
		
		$this->lookupPSet = null;
		$this->cipherer = null; 
		$this->lookupQueryObj = null;
		$this->displayFieldIndex = 0;
		$this->linkFieldIndex = 1;
		$this->LookupSQL = "";
		
		if($this->container->pSet->getEditFormat($field) != EDIT_FORMAT_LOOKUP_WIZARD)
		{
			$this->pSet = new ProjectSettings( $this->container->pSet->_table );
			//	set view page
			$this->pSet->setPage( $this->container->pageType );
			//	set edit page
			$this->pSet->setPage( $this->container->pSet->getPageTypeByFieldEditFormat($field, EDIT_FORMAT_LOOKUP_WIZARD) );
		}
		else
			$this->pSet = $this->container->pSet;
		
		$this->nLookupType = $this->pSet->getLookupType($this->field);
		$this->lookupTable = $this->pSet->getLookupTable($this->field);
		$this->setLookupConnection();
		
		$this->displayFieldName = $this->pSet->getDisplayField($this->field);
		$this->linkFieldName = $this->pSet->getLinkField($this->field);
		$this->linkAndDisplaySame = $this->displayFieldName == $this->linkFieldName;
		if($this->nLookupType == LT_QUERY)
		{
			$this->lookupPSet = new ProjectSettings($this->lookupTable, $this->container->pageType);
			$this->cipherer = new RunnerCipherer($this->lookupTable);
			$this->lookupQueryObj = $this->lookupPSet->getSQLQuery()->CloneObject();
			if($this->pSet->getCustomDisplay($this->field))
				$this->lookupQueryObj->AddCustomExpression($this->displayFieldName, $this->lookupPSet, $this->pSet->_table, $this->field);
			$this->lookupQueryObj->ReplaceFieldsWithDummies($this->lookupPSet->getBinaryFieldsIndices());
			$lookupIndexes = GetLookupFieldsIndexes($this->pSet, $this->field);
			$this->displayFieldIndex = $lookupIndexes["displayFieldIndex"];
			$this->linkFieldIndex = $lookupIndexes["linkFieldIndex"];			
		}
		else
		{
			$this->cipherer = new RunnerCipherer($this->pSet->_table);
			$this->LookupSQL = "SELECT ";
			$this->LookupSQL.= RunnerPage::sqlFormattedDisplayField($this->field, $this->lookupConnection, $this->pSet);
			$this->LookupSQL.= ", ".$this->lookupConnection->addFieldWrappers($this->pSet->getLinkField($this->field));
			$this->LookupSQL.= " FROM ".$this->lookupConnection->addTableWrappers( $this->lookupTable )." WHERE ";
		}
		
		$this->localControlsContainer = new ViewControlsContainer($this->pSet, $this->container->pageType, $pageObject);
		$this->localControlsContainer->isLocal = true;
	}

	/**
	 * Set the lookupConnection property
	 */
	protected function setLookupConnection()
	{		
		global $cman;
			
		if( $this->nLookupType == LT_QUERY )
		{
			$this->lookupConnection = $cman->byTable( $this->lookupTable );	
			return;
		}
		
		$connId = $this->pSet->getNotProjectLookupTableConnId( $this->field );
		$this->lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();		
	}
	
	/**
	 * @param String value
	 * @return String
	 */
	protected function getDbPreparedValuesList( $value )
	{
		if( !$this->pSet->multiSelect($this->field) )
			return "";
		
		$values = splitvalues($value);	
		$type = $this->pSet->getLWLinkFieldType($this->field);
		
		$numeric = true;
		if(!$type)
		{
			foreach($values as $val) 
			{
				if( strlen($val) && !is_numeric($val) )
				{
					$numeric = false;
					break;
				}
			}
		}
		else
			$numeric = !NeedQuotes($type);
			
		$listValues = array();	
		foreach($values as $val)
		{
			if( $numeric && !strlen($val) )
				continue;

			if( $numeric )
				$listValues[] = ($val + 0);
			else
			{
				$fName = $this->nLookupType == LT_QUERY ? $this->linkFieldName : $this->field;
				$listValues[] = $this->lookupConnection->prepareString( $this->cipherer->EncryptField($fName, $val) );
			}
		}
		return implode(",", $listValues);
	}
	
	/**
	 * @param String value
	 * @param String in
	 * @return String
	 */	
	protected function getMultiselectLookupResolvingSQL( $value, $in )
	{
		if( !$this->pSet->multiSelect($this->field) )
			return "";		
		
		$where = GetLWWhere($this->field, $this->pSet->getEditPageType());
		
		if( $this->nLookupType == LT_QUERY )
		{
			$inWhere = RunnerPage::_getFieldSQLDecrypt( $this->linkFieldName, $this->lookupConnection, $this->lookupPSet, $this->cipherer )
				." in (".$in.")";
			if( strlen($where) )
				$inWhere.=" and (".$where.")";
				
			$LookupSQL = $this->lookupQueryObj->toSql(whereAdd($this->lookupQueryObj->m_where->toSql($this->lookupQueryObj), $inWhere));
		}
		else
		{
			$LookupSQL = $this->LookupSQL.$this->lookupConnection->addFieldWrappers($this->pSet->getLinkField($this->field))." in (".$in.")";
			if( strlen($where) ) 
				$LookupSQL.=" and (".$where.")";
		}
		
		return $LookupSQL;		
	}
	
	/**
	 * @param String value
	 * @return String
	 */
	protected function getNotMultiselectLookupResolvingSQL( $value )
	{
		if( $this->pSet->multiSelect($this->field) )
			return "";

		$where = GetLWWhere($this->field, $this->pSet->getEditPageType());
		
		$strdata = $this->cipherer->MakeDBValue($this->nLookupType == LT_QUERY ? $this->linkFieldName : $this->field, $value, "", true);
		if( $this->nLookupType == LT_QUERY )
		{
			$strWhere = GetFullFieldName($this->linkFieldName, $this->lookupTable, false)." = " . $strdata;
			if( strlen($where) )
				$strWhere.= " and (".$where.")";
				
			$LookupSQL = $this->lookupQueryObj->toSql(whereAdd($this->lookupQueryObj->m_where->toSql($this->lookupQueryObj), $strWhere));
		}
		else
		{
			$strWhere = $this->lookupConnection->addFieldWrappers($this->pSet->getLinkField($this->field))." = " . $strdata;
			if( strlen($where) )
				$strWhere.= " and (".$where.")";
				
			$LookupSQL = $this->LookupSQL.$strWhere;
		}
		
		return $LookupSQL;
	}
	
	/**
	 * @param String lookupValue
	 * @return String
	 */
	protected function getDecryptLookupValue( $lookupValue )
	{
		if( $this->nLookupType == LT_QUERY || $this->linkAndDisplaySame )
			return $this->cipherer->DecryptField($this->nLookupType == LT_QUERY ? $this->displayFieldName : $this->field, $lookupValue);
			
		return $lookupValue;
	}

	/**
	 * @param String value
	 * return Array
	 */
	protected function getMultiselectLookupValues( $value )
	{
		$in = $this->getDbPreparedValuesList( $value ); 
		if( !strlen($in) )
			return array( $value );
		 
		if( count($this->resolvedLookupValues[ $value ]) )
			return $this->resolvedLookupValues[ $value ];	
		
		$LookupSQL = $this->getMultiselectLookupResolvingSQL($value, $in);
		LogInfo($LookupSQL);
		
		$lookupArr = array(); 
		$qResult = $this->lookupConnection->query( $LookupSQL );
		while( $lookuprow = $qResult->fetchNumeric() )
		{
			$displayValue = $lookuprow[ $this->displayFieldIndex ];
			$lookupArr[] = $displayValue;
			$this->resolvedLinkLookupValues[ $value ][ $displayValue ] = $lookuprow[ $this->linkFieldIndex ];
		}
		
		$lookupValues = array();
		$lookupArr = array_unique( $lookupArr );			
		foreach($lookupArr as $lookupvalue)
		{	
			$lookupValues[] = $this->getDecryptLookupValue( $lookupvalue );
		}
		
		if( count($lookupValues) ) 
			$this->resolvedLookupValues[ $value ] = $lookupValues;
		
		return $lookupValues;	
	}

	/**
	 * @param String value
	 * return Array
	 */
	protected function getNotMultiselectLookupValues( $value )
	{		
		if( isset( $this->resolvedLookupValues[ $value ] ) )
			return array( $this->resolvedLookupValues[ $value ] );

		$lookupvalue = $value;			
			
		$LookupSQL = $this->getNotMultiselectLookupResolvingSQL( $value );
		LogInfo($LookupSQL);
		
		$qResult = $this->lookupConnection->query( $LookupSQL );
		if( $lookuprow = $qResult->fetchNumeric() )
		{
			$lookupvalue = $this->getDecryptLookupValue( $lookuprow[ $this->displayFieldIndex ] );
			$this->resolvedLookupValues[ $value ] = $lookupvalue;
		}
			
		return array( $lookupvalue );
	}
	
	/**
	 * @param String value
	 * return Array
	 */
	protected function getLookupValues( $value )
	{
		if( $this->pSet->multiSelect($this->field) )
			return $this->getMultiselectLookupValues( $value );
			
		return $this->getNotMultiselectLookupValues( $value );	
	}

	/**
	 * @param &Array data
	 * @param String keylink
	 */
	public function showDBValue(&$data, $keylink)
	{
		$value = $data[ $this->field ];
		if( !strlen($value) )
			return "";

		$outValues = array();
		$localData = $data;	
		
		$lookupValues = $this->getLookupValues( $value );
		foreach( $lookupValues as $lookupvalue )
		{
			$this->localControlsContainer->linkFieldValues[ $this->field ] = $data[ $this->field ];
			
			// to highlight lookup search result correctly
			if( isset( $this->resolvedLinkLookupValues[ $value ] ) && isset( $this->resolvedLinkLookupValues[ $value ][ $lookupvalue ] ) )
				$this->localControlsContainer->originlinkValues[ $this->field ] = $this->resolvedLinkLookupValues[ $value ][ $lookupvalue ];
			
			if( $this->pSet->getViewFormat($this->field) != "Custom" )	
				$localData[ $this->field ] = $lookupvalue;
			
			$outValues[] = $this->localControlsContainer->showDBValue($this->field, $localData, $keylink, $lookupvalue);			
		}

		return implode(",", $outValues);		
	}	
	
	/**
	 * User API function
	 * @param &Array data
	 * @return String	 
	 */
	public function getTextValue(&$data)
	{
		$value = $data[ $this->field ];
		if( !strlen($value) )
			return "";
			
		$textValues = array();
		$localData = $data;
		
		$lookupValues = $this->getLookupValues( $value );
		foreach( $lookupValues as $lookupvalue )
		{
			if( $this->pSet->getViewFormat($this->field) != "Custom" )	
				$localData[ $this->field ] = $lookupvalue;
			
			$textValues[] = $this->localControlsContainer->getControl( $this->field )->getTextValue( $localData );			
		}		

		return implode(",", $textValues);
	}	
	
	/**
	 * Get the field's content that will be exported
	 * @prarm &Array data
	 * @prarm String keylink
	 * @return String
	 */
	public function getExportValue(&$data, $keylink = "")
	{
		$this->localControlsContainer->setForExportVar( $this->container->forExport );
		
		if( $this->container->forExport == "csv" )
			return $data[ $this->field ];
		
		return $this->showDBValue($data, $keylink);	
	}	
}
?>