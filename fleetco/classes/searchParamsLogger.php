<?php
include_once(getabspath("classes/paramsLogger.php"));
class searchParamsLogger extends paramsLogger
{
	/**
	 * @type String
	 */
	protected $dbNameFieldName;
	
	/**
	 * This property is used to store 
	 * the 'getSavedSeachesParams' method`s cash
	 * @type Array
	 */
	protected $savedSearchesParams = array(); 
	
	
	public function __construct( $tableNameId, $type = SSEARCH_PARAMS_TYPE ) 
	{		
		// type 1 - saved search
		parent::__construct( $tableNameId, SSEARCH_PARAMS_TYPE );
		
		//	.NET conversion needs this
		$this->type = SSEARCH_PARAMS_TYPE;
	}
	
	/**
	 * Add fields wrappers to the real fields name
	 * and assign them to the corresponding class properties
	 */
	protected function assignDbFieldsAndTableNames() 
	{
		parent::assignDbFieldsAndTableNames();

		$this->dbNameFieldName = $this->connection->addFieldWrappers( "NAME" );
	}
	
	
	/**
	 * Save the search under a particular name
	 * @param String $searchName
	 * @param Array $searchParams
	 */
	public function saveSearch( $searchName, $searchParams )
	{	
		$savedSearchNames = $this->getSavedSeachesParams();
		if (array_key_exists($searchName, $savedSearchNames) )
		{
			$this->updateSearch( $searchName, $searchParams );
			return;
		}
		
		$column = $this->dbNameFieldName . ", ";
		$value = $this->connection->prepareString( $searchName ).", ";

		$this->save($searchParams, $column, $value);	
	}

	/**
	 * Update the existing saved search
	 * @param String $searchName
	 * @param Array $searchParams
	 */
	public function updateSearch( $searchName, $searchParams )
	{
		$where = $this->dbNameFieldName."=".$this->connection->prepareString( $searchName );	
		$this->update($searchParams, $where);				
	}
	
	/**
	 * Delete the saved search 
	 * @param String searchName
	 */	
	public function deleteSearch( $searchName )
	{	
		$where = $this->dbNameFieldName."=".$this->connection->prepareString( $searchName );	
		$this->delete($where);
	}
	
	/**
	 * Get the save searches` names basing on 
	 * security params and current page`s table name
	 * @return Array
	 */
	public function getSavedSeachesParams()
	{
		if( count($this->savedSearchesParams) )
			return $this->savedSearchesParams; 			
	
		$where = $this->getCommonWhere();			
		$sql = "SELECT ".$this->dbNameFieldName.", ". $this->dbDataFieldName.", ". $this->dbTypeFieldName ." from ". $this->dbParamsTableName 
			." where ".$where." ORDER BY ".$this->dbNameFieldName;
		
		$qResult = $this->connection->querySilent( $sql );
		if( !$qResult )
			return array();
		
		$names = array();
		while( $data = $qResult->fetchAssoc() )
		{
			if( !$data["TYPE"] || $data["TYPE"] == 1 ) 
			{
				if(substr($data["SEARCH"],0,2) != "{\"")
					$names[ $data["NAME"] ] = runner_unserialize_array( $data["SEARCH"] );
				else
					$names[ $data["NAME"] ] = $this->decode( $data["SEARCH"] );
				
			}
		}
		
		$this->savedSearchesParams = $names;
		return $names;
	}
}
?>