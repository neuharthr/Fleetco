<?php
class ODBCConnection extends Connection
{	
	protected $ODBCString;
	
	/**
	 * @type String
	 */
	protected $ODBCUID;
	
	/**
	 * @type String
	 */	
	protected $ODBCPWD;
	
	
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
		
		$this->ODBCString = $params["ODBCString"];
		$this->ODBCUID = $params["ODBCUID"];
		$this->ODBCPWD = $params["ODBCPWD"];
	}	
	
	/**
	 * Open a connection to db
	 */
	public function connect()
	{
		$uid = "";
		$pwd = "";
		if( $this->dbType == nDATABASE_Interbase )
		{
			$uid = $this->ODBCUID; 
			$pwd = $this->ODBCPWD;
		}

		$this->conn = odbc_connect( $this->ODBCString, $uid, $pwd );
		if( !$this->conn ) 
			$this->triggerError( $this->lastError() );
		
		return $this->conn;
	}
	
	/**
	 * Close the db connection
	 */
	public function close()
	{
		return odbc_close( $this->conn );
	}
	
	/**	
	 * Send an SQL query
	 * @param String sql
	 * @return Mixed
	 */
	public function query( $sql )
	{
		$this->debugInfo($sql);
		
		$rs = odbc_exec( $this->conn, $sql );
		if( !$rs )
		{
			$this->triggerError(odbc_error());
			return FALSE;
		}
		
		odbc_binmode($rs, ODBC_BINMODE_RETURN);
		odbc_longreadlen($rs, 1024*1024);
		return new QueryResult( $this, $rs );
	}
	
	/**	
	 * Execute an SQL query
	 * @param String sql
	 */
	public function exec( $sql )
	{
		$this->debugInfo($sql);
		return odbc_exec( $this->conn, $sql );
	}
	
	/**	
	 * Get a description of the last error
	 * @return String
	 */
	public function lastError()
	{
		return @odbc_errormsg();
	}

	/**
	 * Fetch a result row as an associative array
	 * @param Mixed qHanle		The query handle
	 * @return Array
	 */
	public function fetch_array( $qHandle )
	{
		return odbc_fetch_array($qHandle);
	}
	
	/**	
	 * Fetch a result row as a numeric array
	 * @param Mixed qHanle		The query handle	 
	 * @return Array
	 */
	public function fetch_numarray( $qHandle )
	{
		$row = array();
		odbc_fetch_into($qHandle, $row);
		
		return $row;
	}
	
	/**
	 * Free resources associated with a query result set 
	 * @param Mixed qHanle		The query handle		 
	 */
	public function closeQuery( $qHandle )
	{
		@odbc_free_result($qHandle);
	}

	/**	
	 * Get number of fields in a result
	 * @param Mixed qHanle		The query handle
	 * @return Number
	 */
	public function num_fields( $qHandle )
	{
		return @odbc_num_fields($qHandle);
	}	
	
	/**	
	 * Get the name of the specified field in a result
	 * @param Mixed qHanle		The query handle
	 * @param Number offset
	 * @return String
	 */	 
	public function field_name( $qHandle, $offset )
	{
		return @odbc_field_name($qHandle, $offset + 1);
	}
	
	/**
	 * @param Mixed qHandle
	 * @param Number pageSize
	 * @param Number page
	 */
	public function seekPage($qHandle, $pageSize, $page)
	{
		$i = 0;
		$row = ($page - 1) * $pageSize;
		
		while( $i < $row )
		{
			odbc_fetch_row( $qHandle );
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
		$this->debugInfo($sql);
		set_error_handler("empty_error_handler");
		$qResult = odbc_exec( $this->conn, $sql );
		set_error_handler("runner_error_handler");
		
		return $qResult;
	}
}
?>