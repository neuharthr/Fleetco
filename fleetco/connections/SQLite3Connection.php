<?php
class SQLite3Connection extends Connection
{
	protected $dbname;
	
	
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
		
		$this->dbname = $params["connInfo"][0];  // strConnectInfo1
	}	
	
	/**
	 * Open a connection to db
	 */
	public function connect()
	{
		$this->conn = new SQLite3( $this->dbname );
		
		if (!$this->conn) 
		  $this->triggerError($this->conn->lastErrorMsg());
		
		return $this->conn;		
	}
	
	/**
	 * Close the db connection
	 */
	public function close()
	{
		return $this->conn->close();
	}
	
	/**	
	 * Send an SQL query
	 * @param String sql
	 * @return Mixed
	 */
	public function query( $sql )
	{
		$this->debugInfo($sql);
		
		$ret = $this->conn->query($sql);
		if( !$ret )
		{
			$this->triggerError($this->conn->lastErrorMsg());
			return FALSE;
		}

		return new QueryResult( $this, $ret );
	}
	
	/**	
	 * Execute an SQL query
	 * @param String sql
	 */
	public function exec( $sql )
	{
		$this->debugInfo($sql);
		return $this->conn->exec($sql);
	}
	
	/**	
	 * Get a description of the last error
	 * @return String
	 */
	public function lastError()
	{
		return @$this->conn->lastErrorMsg();
	}
	
	/**	
	 * Get the auto generated id used in the last query
	 * @return Number
	 */
	public function getInsertedId($key = null, $table = null , $oraSequenceName = false)
	{
		return @$this->conn->lastInsertRowID();
	}
	
	/**	
	 * Fetch a result row as an associative array
	 * @param Mixed qHanle		The query handle
	 * @return Array
	 */
	public function fetch_array( $qHandle )
	{
		return $qHandle->fetchArray($mode = SQLITE3_ASSOC);
	}
	
	/**
	 * Fetch a result row as a numeric array
	 * @param Mixed qHanle		The query handle	 
	 * @return Array
	 */
	public function fetch_numarray( $qHandle )
	{
		return $qHandle->fetchArray($mode = SQLITE3_NUM);
	}
	
	/**
	 * Free resources associated with a query result set 
	 * @param Mixed qHanle		The query handle		 
	 */
	public function closeQuery( $qHandle )
	{
		$qHandle->finalize();
	}

	/**	
	 * Get number of fields in a result
	 * @param Mixed qHanle		The query handle
	 * @return Number
	 */
	public function num_fields( $qHandle )
	{
		return $qHandle->numColumns();
	}	
	
	/**	
	 * Get the name of the specified field in a result
	 * @param Mixed qHanle		The query handle
	 * @param Number offset
	 * @return String
	 */	 
	public function field_name( $qHandle, $offset )
	{
		return $qHandle->columnName($offset);
	}
	
	/**
	 * @param Mixed qHandle
	 * @param Number pageSize
	 * @param Number page
	 */
	public function seekPage($qHandle, $pageSize, $page)
	{
		$row = ($page - 1) * $pageSize;
		for($i = 0; $i < $row; $i++)
		{
			$qHandle->fetchArray();		
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
		$this->debugInfo($sql);
		
		set_error_handler("empty_error_handler");
		$ret = $this->conn->exec($sql);
		set_error_handler("runner_error_handler");
		
		return $ret;
	}
}
?>