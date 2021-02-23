<?php
class PDOConnection extends Connection
{	
	protected $connectionString;
	
	protected $user;
	
	protected $pass;
	
	
	function __construct( $params )
	{
		parent::__construct( $params );
	}
	
	/**
	 * Set db connection's properties
	 * @param Array params
	 */
	protected function assignConnectionParams( $params )
	{
		parent::assignConnectionParams( $params );
		
		$this->user = $params["PDOUser"];
		$this->pass = $params["PDOPass"];
		$this->connectionString = $params["PDOString"];
	}	
	
	/**
	 * Open a connection to db
	 */
	public function connect()
	{
		try 
		{
			$this->conn = new PDO( $this->connectionString, $this->user, $this->pass);
		}
		catch( PDOException $e ) 
		{
			$this->triggerError( $e->getMessage() );
			return null;
		}
		
		return $this->conn;
	}
	
	/**
	 * Close the db connection
	 */
	public function close()
	{
		$this->conn = NULL;
	}
	
	/**	
	 * Send an SQL query
	 * @param String sql
	 * @return Mixed
	 */
	public function query( $sql )
	{
		$this->debugInfo($sql);
		
		$sth = $this->conn->query( $sql );
		if( !$sth )
		{
			$errInfo = $sth->errorInfo();
			$this->triggerError( $errInfo[2] );
			return FALSE;
		}
		
		return new QueryResult( $this, $sth );
	}
	
	/**	
	 * Execute an SQL query
	 * @param String sql
	 * @return Mixed
	 */
	public function exec( $sql )
	{
		$this->debugInfo($sql);
		
		$rowsAffected = $this->conn->exec( $sql );
		if( $rowsAffected === FALSE )
		{
			$errInfo = $this->conn->errorInfo();
			$this->triggerError( $errInfo[2] );
			return FALSE;
		}
		
		return TRUE;
	}
	
	/**	
	 * Get a description of the last error
	 * @return String
	 */
	public function lastError()
	{
		$errInfo = $this->conn->errorInfo();
		return $errInfo[2];
	}

	/**
	 * Fetch a result row as an associative array
	 * @param PDOStatement qHandle		The query handle
	 * @return Array
	 */
	public function fetch_array( $qHandle )
	{
		return $qHandle->fetch( PDO::FETCH_ASSOC );
	}
	
	/**	
	 * Fetch a result row as a numeric array
	 * @param PDOStatement qHandle		The query handle	 
	 * @return Array
	 */
	public function fetch_numarray( $qHandle )
	{
		return $qHandle->fetch( PDO::FETCH_NUM );
	}
	
	/**
	 * Free resources associated with a query result set 
	 * @param PDOStatement qHandle		The query handle		 
	 */
	public function closeQuery( $qHandle )
	{
		$qHandle = NULL;
	}

	/**	
	 * Get number of fields in a result
	 * @param PDOStatement qHandle		The query handle
	 * @return Number
	 */
	public function num_fields( $qHandle )
	{
		return $qHandle->columnCount();
	}	
	
	/**	
	 * Get the name of the specified field in a result
	 * @param PDOStatement qHandle		The query handle
	 * @param Number offset
	 * @return String
	 */	 
	public function field_name( $qHandle, $offset )
	{
		return $qHandle->fetchColumn( $offset );
	}
	
	/**
	 * @param Mixed qHandle
	 * @param Number pageSize
	 * @param Number page
	 */
	public function seekPage($qHandle, $pageSize, $page)
	{
		if( $page == 1 )
			return;
			
		$rowNum = $pageSize * ($page - 1);
		
		if( $this->conn->setAttribute( PDO::ATTR_CURSOR, PDO::CURSOR_SCROLL ) )
		{
			// db supports CURSOR_SCROLL ??
			$qHandle->fetch( PDO::FETCH_ASSOC, PDO::FETCH_ORI_ABS, $rowNum );
			return;
		}
		
		//scroll fwd doesn't work
		$i = 0;
		while( $i < $rowNum )
		{
			$qHandle->fetch();
			$i++;
		}
	}
	
	/**
	 * Execute an SQL query with blob fields processing
	 * @param String sql
	 * @param Array blobs
	 * @param Array blobTypes
	 * @return Boolean
	 */
	public function execWithBlobProcessing( $sql, $blobs, $blobTypes = array() )
	{
		$this->debugInfo( $sql );
		return $this->conn->query( $sql );
	}
}
?>