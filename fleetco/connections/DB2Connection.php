<?php
class DB2Connection extends Connection
{
	protected $host;
	
	protected $user;
	
	protected $pwd;
	
	protected $port;
	
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
		$this->port = $params["connInfo"][1];  //strConnectInfo2
		$this->user = $params["connInfo"][2];  //strConnectInfo3
		$this->pwd = $params["connInfo"][3];  //strConnectInfo4
		$this->dbname = $params["connInfo"][4];  //strConnectInfo5
	}	
	
	/**
	 * Open a connection to db
	 */
	public function connect()
	{
		$conn_string = "DATABASE=".$this->dbname.";HOSTNAME=".$this->host.";PORT=".$this->port.";PROTOCOL=TCPIP;UID=".$this->user.";PWD=".$this->pwd.";";
		$this->conn = db2_connect($conn_string, '', '');
		
		if( !$this->conn ) 
			$this->triggerError( db2_conn_errormsg() );
		
		return $this->conn;
	}
	
	/**
	 * Close the db connection
	 */
	public function close()
	{
		return db2_close( $this->conn );
	}
	
	/**	
	 * Send an SQL query
	 * @param String sql
	 * @return Mixed
	 */
	public function query( $sql )
	{
		$this->debugInfo($sql);
		
		$ret = db2_exec( $this->conn, $sql );
		if( !$ret )
		{
			$this->triggerError(db2_stmt_errormsg());
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
		return db2_exec($this->conn, $sql);
	}
	
	/**	
	 * Get a description of the last error
	 * @return String
	 */
	public function lastError()
	{
		return @db2_stmt_errormsg();
	}
	
	/**	
	 * Get the auto generated id used in the last query
	 * @return Number
	 */
	public function getInsertedId($key = null, $table = null , $oraSequenceName = false)
	{
		db2_last_insert_id( $this->conn );
	}

	/**	
	 * Fetch a result row as an associative array
	 * @param Mixed qHanle		The query handle
	 * @return Array
	 */
	public function fetch_array( $qHandle )
	{
		return db2_fetch_assoc($qHandle);
	}
	
	/**	
	 * Fetch a result row as a numeric array
	 * @param Mixed qHanle		The query handle	 
	 * @return Array
	 */
	public function fetch_numarray( $qHandle )
	{
		return db2_fetch_array($qHandle);
	}
	
	/**	
	 * Free resources associated with a query result set 
	 * @param Mixed qHanle		The query handle		 
	 */
	public function closeQuery( $qHandle )
	{
		@db2_free_result($qHandle);
	}

	/**	
	 * Get number of fields in a result
	 * @param Mixed qHanle		The query handle
	 * @return Number
	 */
	public function num_fields( $qHandle )
	{
		return num_fields($qHandle);
	}	
	
	/**	
	 * Get the name of the specified field in a result
	 * @param Mixed qHanle		The query handle
	 * @param Number offset
	 * @return String
	 */	 
	public function field_name( $qHandle, $offset )
	{
		return db2_field_name($qHandle, $offset);
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
			$this->fetch_array( $qHandle );
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
		$stml = db2_prepare($this->conn, $sql);
		
		$numblobs = 1;
		foreach($blobs as $bfield)
		{
			db2_bind_param($stml, $numblobs, "bfield", DB2_BINARY, DB2_PARAM_IN);
			$numblobs += 1;
		}
		
		$ret = @db2_execute( $stml );
		db2_commit( $this->conn );
		return $ret;
	}	
}
?>