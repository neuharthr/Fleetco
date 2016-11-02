<?php
class searchParamsLogger
{
	/**
	 * @type String
	 */
	protected $searchSaveTableName = "";
	
	/**
	 * @type String
	 */
	protected $userID = "";
	
	/**
	 * @type String
	 */	
	protected $cookie = "";
	
	/**
	 * @type String
	 */
	protected $tableName;
	protected $dbSearchSaveTableName;
	protected $dbNameFieldName;
	protected $dbSearchFieldName;
	protected $dbTableNameFieldName;
	protected $dbCookieFieldName;
	protected $dbUserNameFieldName;	
	
	/**
	 * @type Connection
	 */
	protected $connection;
	
	/**
	 * This property is used to store 
	 * the 'getSavedSeachesParams' method`s cash
	 * @type Array
	 */
	protected $savedSearchesParams = array(); 
	
	
	public function __construct( $tableName ) 
	{		
		global $cman;
		$this->tableName = $tableName;
		$this->connection = $cman->getForSavedSearches();	
		
		$this->assignDbFieldsAndTableNames();						
		$this->assignUserId();	
		$this->assignCookieParams();	
	}
	
	/**
	 * Add fields wrappers to the real fields name
	 * and assign them to the corresponding class properties
	 */
	protected function assignDbFieldsAndTableNames() 
	{
		$this->dbSearchSaveTableName = $this->connection->addTableWrappers( $this->searchSaveTableName );
		$this->dbNameFieldName = $this->connection->addFieldWrappers( "NAME" );
		$this->dbSearchFieldName = $this->connection->addFieldWrappers( "SEARCH" );
		$this->dbTableNameFieldName = $this->connection->addFieldWrappers( "TABLENAME" );
		$this->dbCookieFieldName = $this->connection->addFieldWrappers( "COOKIE" );
		$this->dbUserNameFieldName = $this->connection->addFieldWrappers( "USERNAME" );	
		
	}
	
	/**
	 * Assign the userID prop with the currenly logged in user`s name
	 */
	protected function assignUserId()
	{
		if( isset($_SESSION["UserID"]) && $_SESSION["UserID"] != "Guest" )	
			$this->userID = $_SESSION["UserID"];
	}
	
	/**
	 * Set a COOKIE 'searchSaving' param If It isn`t set before.
	 * Assign the 'cookie' property with the COOKIE 'searchSaving' param
	 */
	protected function assignCookieParams()
	{
		if( !strlen($_COOKIE["searchSaving"]) && !$this->userID ) 
			setcookie("searchSaving", generatePassword(24), time() + 5 * 365 * 86400);
		
		$this->cookie = $_COOKIE["searchSaving"];
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
		
		$columnsList = implode( ",", array( $this->dbNameFieldName, $this->dbSearchFieldName, $this->dbTableNameFieldName));
		$valuesList =  $this->connection->prepareString( $searchName ).", "
			.$this->connection->prepareString( runner_serialize_array( $searchParams ) ).", "
			.$this->connection->prepareString( $this->tableName );
		
		if($this->userID)
		{
			$columnsList.= ", ".$this->dbUserNameFieldName;
			$valuesList.= ", ".$this->connection->prepareString( $this->userID );
		} 
		else if($this->cookie)
		{	
			$columnsList.= ", ".$this->dbCookieFieldName;
			$valuesList.= ", ".$this->connection->prepareString( $this->cookie );
		}
			
		$sql = "INSERT INTO ". $this->dbSearchSaveTableName ." (".$columnsList.") values (".$valuesList.")";
		$this->connection->exec( $sql );	
	}

	/**
	 * Update the existing saved search
	 * @param String $searchName
	 * @param Array $searchParams
	 */
	public function updateSearch( $searchName, $searchParams )
	{
		$where = $this->dbNameFieldName."=".$this->connection->prepareString( $searchName )." AND ".$this->getCommonWhere();	
		$sql = "UPDATE ". $this->dbSearchSaveTableName 
			." SET ". $this->dbSearchFieldName ."=".$this->connection->prepareString( runner_serialize_array( $searchParams ) )." WHERE ".$where;
		
		$this->connection->exec( $sql );
	}
	
	/**
	 * Delete the saved search 
	 * @param String searchName
	 */	
	public function deleteSearch( $searchName )
	{	
		$where = $this->dbNameFieldName."=".$this->connection->prepareString( $searchName )." AND ".$this->getCommonWhere();	
		$sql = "DELETE FROM ". $this->dbSearchSaveTableName ." WHERE ".$where;
		
		$this->connection->exec( $sql );
	}
	
	/**
	 * Get the commont where condition envolving
	 * user id and cookie values
	 * @return String
	 */
	protected function getCommonWhere()
	{
		$wheres = array();
		if($this->userID)
			$wheres[] = $this->dbUserNameFieldName."=".$this->connection->prepareString( $this->userID );
		if($this->cookie)	
			$wheres[] = $this->dbCookieFieldName."=".$this->connection->prepareString( $this->cookie );
		
		if( !count($wheres) )
			return "1=0";
		
		return whereAdd( $this->dbTableNameFieldName."=".$this->connection->prepareString( $this->tableName ), implode(" OR ", $wheres) );	
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
		$sql = "SELECT ".$this->dbNameFieldName.", ". $this->dbSearchFieldName ." from ". $this->dbSearchSaveTableName 
			." where ".$where." ORDER BY ".$this->dbNameFieldName;
		
		$qResult = $this->connection->query( $sql );
		
		$names = array();
		while( $data = $qResult->fetchAssoc() )
		{
			$names[ $data["NAME"] ] = runner_unserialize_array( $data["SEARCH"] );
		}
		
		$this->savedSearchesParams = $names;
		return $names;
	}
}
?>