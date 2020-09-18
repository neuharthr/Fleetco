<?php
class paramsLogger
{
	/**
	 * @type String
	 */
	protected $paramsTableName = "fleetcov96_settings";
	
	/**
	 * 1 - saved searches
	 * 2 - columns sizes
	 * 3 - show/hide fields
	 * 4 - reordering fields
	 *
	 * @type Number
	 */
	protected $type;

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
	protected $tableNameId;

	protected $dbParamsTableName;
	protected $dbTypeFieldName;
	protected $dbDataFieldName;
	protected $dbTableNameFieldName;
	protected $dbCookieFieldName;
	protected $dbUserNameFieldName;	
	protected $dbNameFieldName;	
	
	/**
	 * @type Connection
	 */
	protected $connection;
	
	
	public function __construct( $tableNameId, $type ) 
	{		
		global $cman;

		$this->type = $type;
		$this->tableNameId = $tableNameId;
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
		$this->dbParamsTableName = $this->connection->addTableWrappers( $this->paramsTableName );
		$this->dbTypeFieldName = $this->connection->addFieldWrappers( "TYPE" );
		$this->dbDataFieldName = $this->connection->addFieldWrappers( "SEARCH" );
		$this->dbTableNameFieldName = $this->connection->addFieldWrappers( "TABLENAME" );
		$this->dbCookieFieldName = $this->connection->addFieldWrappers( "COOKIE" );
		$this->dbUserNameFieldName = $this->connection->addFieldWrappers( "USERNAME" );	
		$this->dbNameFieldName = $this->connection->addFieldWrappers( "NAME" );	
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
		if( !strlen($_COOKIE["paramsLogger"]) && !$this->userID ) 
			setcookie("paramsLogger", generatePassword(24), time() + 5 * 365 * 86400);
		
		$this->cookie = $_COOKIE["paramsLogger"];
	}

	/**
	 * Get the commont where condition envolving
	 * user id and cookie values
	 * @return String
	 */
	protected function getCommonWhere()
	{
		$wheres = array();
		
		if( $this->userID )
			$wheres[] = $this->dbUserNameFieldName."=".$this->connection->prepareString( $this->userID );
			
		if( $this->cookie )	
			$wheres[] = $this->dbCookieFieldName."=".$this->connection->prepareString( $this->cookie );
		
		if( !count( $wheres ) )
			return "1=0";

		$typeWhere = "1=1";
		// if not searchParamsLogger
		if ( $this->type !== SSEARCH_PARAMS_TYPE )
		{
			$typeWhere = $this->dbTypeFieldName . "=" . $this->type; 
		}		

		$addWhere = whereAdd($typeWhere, implode(" OR ", $wheres));
		
		return whereAdd( $this->dbTableNameFieldName."=".$this->connection->prepareString( $this->tableNameId ), $addWhere );	
	}

	/**
	 * Save the param
	 *
	 * @param array $data
	 * @param String $addColumnsList (optional)
	 * @param String $addValuesList (optional)
	 */
	public function save( $data, $addColumnsList = "", $addValuesList = "" )
	{	
		$issetData = strlen( $this->readData() ) != 0;
		if ( $issetData && $this->type != SSEARCH_PARAMS_TYPE )
		{
			$this->update( $data );
			return;
		}

		$columnsList = $addColumnsList . implode( ",", array($this->dbDataFieldName, $this->dbTableNameFieldName));
		
		$valuesList = $addValuesList 
			.$this->connection->prepareString( my_json_encode( $data ) ).", "
			.$this->connection->prepareString( $this->tableNameId );
		
		if ( $this->userID )
		{
			$columnsList.= ", ".$this->dbUserNameFieldName;
			$valuesList.= ", ".$this->connection->prepareString( $this->userID );
		} 
		else if ( $this->cookie )
		{	
			$columnsList.= ", ".$this->dbCookieFieldName;
			$valuesList.= ", ".$this->connection->prepareString( $this->cookie );
		}

		if ( $this->type != SSEARCH_PARAMS_TYPE )
		{
			$columnsList.= ", ".$this->dbTypeFieldName;
			$valuesList.= ", ".$this->type;
		}
			
		$sql = "INSERT INTO ". $this->dbParamsTableName." (".$columnsList.") values (".$valuesList.")";
		$this->connection->execSilent( $sql );	
	}


		/**
	 * Save the param
	 *
	 * @param array $data
	 * @param String $addColumnsList (optional)
	 * @param String $addValuesList (optional)
	 */
	public function saveShowHideData( $deviceClass, $data )
	{	
		if( $this->getShowHideData( $deviceClass ) ) {
			$this->update( $data, $this->dbNameFieldName . "=" . $this->connection->prepareString( $deviceClass ) );
			return;
		} 

		$columnsList = implode( ",", array( $this->dbNameFieldName, $this->dbDataFieldName, $this->dbTableNameFieldName) );
		
		$valuesList = $this->connection->prepareString( $deviceClass )  .", " 
			.$this->connection->prepareString( my_json_encode( $data ) ).", "
			.$this->connection->prepareString( $this->tableNameId );
		
		if ( $this->userID )
		{
			$columnsList.= ", ".$this->dbUserNameFieldName;
			$valuesList.= ", ".$this->connection->prepareString( $this->userID );
		} 
		else if ( $this->cookie )
		{	
			$columnsList.= ", ".$this->dbCookieFieldName;
			$valuesList.= ", ".$this->connection->prepareString( $this->cookie );
		}

		$columnsList.= ", ".$this->dbTypeFieldName;
		$valuesList.= ", ".$this->type;
			
		$sql = "INSERT INTO ". $this->dbParamsTableName." (".$columnsList.") values (".$valuesList.")";
		$this->connection->execSilent( $sql );	
	}

	
    /**
	 * Update the existing params
	 *
	 * @param array $data
	 * @param String $addWhere (optional)
	 */
	protected function update( $data, $addWhere = '' )
	{
		if( $addWhere != '' )
			$addWhere .= ' AND ';
		$sql = "UPDATE ". $this->dbParamsTableName 
			." SET ". $this->dbDataFieldName ."=".$this->connection->prepareString( my_json_encode( $data ) )
			." WHERE " . $addWhere.$this->getCommonWhere();
		
		$this->connection->execSilent( $sql );
	}

	/**
	 * Delete param
	 * @param String $addWhere (optional)
	 */	
	protected function delete( $addWhere = '' )
	{		
		if( $addWhere != '' )
			$addWhere .= ' AND ';
		$sql = "DELETE FROM " . $this->dbParamsTableName . " WHERE " . $addWhere.$this->getCommonWhere();
		
		$this->connection->execSilent( $sql );
	}


	/**
	 * @return array or null
	 */
	public function getData()
	{	
		return $this->decode( $this->readData() );
	}


	
	/**
	 * @return array or null
	 */
	public function decode( $data )
	{	
		$parsed = my_json_decode($data);
		if( !is_array( $parsed ) )
			$parsed = runner_unserialize_array( $data );
		return $parsed;
	}
	

	protected function queryData( $addWhere = '' ) 
	{
		if( $addWhere != '' )
		$addWhere .= ' AND ';
		$sql = "SELECT ". $this->dbNameFieldName . "," . $this->dbDataFieldName ." from ". $this->dbParamsTableName 
			." where " . $addWhere . $this->getCommonWhere();
		return $this->connection->querySilent( $sql );	
	}
		
	/**
	 * @return String
	 */
	protected function readData()
	{	
		$qResult = $this->queryData();
		if( !$qResult )
			return "";
		$data = $qResult->fetchAssoc();
		if( !isset( $data["SEARCH"] ) ) 
			return false;

		return $data["SEARCH"];
	}
	
	/**
	 * @return array or null
	 */
	public function getShowHideData( $deviceClass = -1 )
	{	
		$where = "";
		if( $deviceClass >= 0)
			$where = $this->dbNameFieldName . "=" . $this->connection->prepareString( $deviceClass );
		$qResult = $this->queryData( $where );
		if( !$qResult )
			return array();
		
		$ret = array();
		while( $data = $qResult->fetchAssoc() )
			$ret[ $data["NAME"] ] = $this->decode( $data["SEARCH"] );
		return $ret;
	}
	
}
?>