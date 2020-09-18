<?php
class MSSQLUnixConnection extends Connection
{	
	protected $host;
	
	protected $user;
	
	protected $pwd;
	
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
		
		$this->host = $params["connInfo"][0];  //strConnectInfo1
		$this->user = $params["connInfo"][1];  //strConnectInfo2
		$this->pwd = $params["connInfo"][2];  //strConnectInfo3
		$this->dbname = $params["connInfo"][3];  //strConnectInfo4
	}
	
	/**
	 * Open a connection to db
	 */
	public function connect()
	{
		$this->conn = mssql_connect( $this->host, $this->user, $this->pwd );
		if( !$this->conn )
			$this->triggerError( $this->lastError() );
		
		mssql_select_db( $this->dbname, $this->conn );
		return $this->conn;
	}
	
	/**
	 * Close the db connection
	 */
	public function close()
	{
		return mssql_close( $this->conn );
	}
	
	/**	
	 * Send an SQL query
	 * @param String sql
	 * @return Mixed
	 */
	public function query( $sql )
	{
		$this->debugInfo($sql);
		$ret = mssql_query( $sql, $this->conn );
		if( !$ret )
		{
			$this->triggerError($this->lastError());
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
		return mssql_query( $sql, $this->conn );
	}
	
	/**	
	 * Get a description of the last error
	 * @return String
	 */
	public function lastError()
	{
		return @mssql_get_last_message();
	}

	/**	
	 * Fetch a result row as an associative array
	 * @param Mixed qHanle		The query handle
	 * @return Array
	 */
	public function fetch_array( $qHandle )
	{
		return @mssql_fetch_array($qHandle, MSSQL_ASSOC);
	}
	
	/**	
	 * Fetch a result row as a numeric array
	 * @param Mixed qHanle		The query handle	 
	 * @return Array
	 */
	public function fetch_numarray( $qHandle )
	{
		return @mssql_fetch_array($qHandle, MSSQL_NUM);
	}
	
	/**	
	 * Free resources associated with a query result set 
	 * @param Mixed qHanle		The query handle		 
	 */
	public function closeQuery( $qHandle )
	{
		@mssql_free_result($qHandle);
	}

	/**	
	 * Get number of fields in a result
	 * @param Mixed qHanle		The query handle
	 * @return Number
	 */
	public function num_fields( $qHandle )
	{
		return @mssql_num_fields( $qHandle );
	}	
	
	/**	
	 * Get the name of the specified field in a result
	 * @param Mixed qHanle		The query handle
	 * @param Number offset
	 * @return String
	 */	 
	public function field_name( $qHandle, $offset )
	{
		return @mssql_field_name($qHandle, $offset);
	}
	
	/**
	 * @param Mixed qHandle
	 * @param Number pageSize
	 * @param Number page
	 */
	public function seekPage($qHandle, $pageSize, $page)
	{
		$row = ($page - 1) * $pageSize;
		if( $row > 0 )
			mssql_data_seek($qHandle, $row);
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
		return @mssql_query( $sql, $this->conn );
	}
}
?>