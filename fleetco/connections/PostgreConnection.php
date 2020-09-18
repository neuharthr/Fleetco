<?php
class PostgreConnection extends Connection
{
	/**
	 * The connection string
	 * @type String
	 */
	protected $connstr;
	
	/**
	 * db version
	 * @type Number
	 */
	public $postgreDbVersion = 8;
	
	
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
		
		$host = pg_escape_string( $params["connInfo"][0] ); //strConnectInfo1 
		$user = pg_escape_string( $params["connInfo"][1] ); //strConnectInfo2
		$password = pg_escape_string( $params["connInfo"][2] ); //strConnectInfo3
		$dbname = pg_escape_string( $params["connInfo"][4] );  //strConnectInfo5
		$options = $params["connInfo"][3]; //strConnectInfo4
		
		$this->connstr = "host='". $host .
			"' user='". $user .
			"' password='". $password .
			"' dbname='". $dbname .
			"' ".$options; 
	}	

	/**
	 *	@return Array
	 */
	protected function getDbFunctionsExtraParams()
	{
		$extraParams = parent::getDbFunctionsExtraParams();
		$extraParams["postgreDbVersion"] = $this->postgreDbVersion;
		
		return $extraParams;
	}
	
	/**
	 * Open a connection to db
	 */
	public function connect()
	{
		$this->conn = pg_connect( $this->connstr );
		if( !$this->conn )
			$this->triggerError("Unable to connect");
		
		$ret = pg_query("SELECT version()");
		$row = $this->fetch_numarray($ret);
		if( $row )
		{
			if(	preg_match("/^PostgreSQL\s(\d{1,2})\./", $row[0], $matches) )
				$this->postgreDbVersion = $matches[1];
		}	
		
		return $this->conn;
	}
	
	/**
	 * Close the db connection
	 */
	public function close()
	{
		 return pg_close( $this->conn );
	}
	
	/**	
	 * Send an SQL query
	 * @param String sql
	 * @return Mixed
	 */
	public function query( $sql )
	{
		$this->debugInfo($sql);

		if( version_compare(phpversion(),"4.2.0") >= 0 )
			$ret = pg_query($this->conn, $sql);
		else
			$ret = pg_exec($this->conn, $sql);
		
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
		$qResult = $this->query( $sql );
		if( $qResult )
			return $qResult->getQueryHandle();
			
		return FALSE;
	}
	
	/**	
	 * Get a description of the last error
	 * @return String
	 */
	public function lastError()
	{
		if( version_compare(phpversion(),"4.2.0") >= 0 )
			return @pg_last_error( $this->conn );
		
		return "PostgreSQL error happened";
	}
	
	/**	
	 * Get the auto generated id used in the last query
	 * @return Number
	 */
	public function getInsertedId($key = null, $table = null , $oraSequenceName = false)
	{
		$qResult = $this->query( "select LASTVAL() as \"lv\"" );
		if( $qResult )
		{
			$row = $qResult->fetchAssoc();
			return $row["lv"];			
		}
		return 0;
	}

	/**	
	 * Fetch a result row as an associative array
	 * @param Mixed qHanle		The query handle
	 * @return Array
	 */
	public function fetch_array( $qHandle )
	{
		$ret = pg_fetch_array($qHandle);
		//	remove numeric indexes
		if( !$ret )
			return array();
		
		$fieldNum = 0;
		foreach($ret as $key => $value)
		{
			if( is_int($key) )
			{
				$fieldNum = $key;
				unset($ret[ $key ]);
			}
			elseif( $this->postgreDbVersion >= 9 && pg_field_type($qHandle, $fieldNum) == "bytea" && $value == "\x" )
			{
				$ret[ $key ] = '';             
			}       
		}
		return $ret;
	}
	
	/**	
	 * Fetch a result row as a numeric array
	 * @param Mixed qHanle		The query handle	 
	 * @return Array
	 */
	public function fetch_numarray( $qHandle )
	{
		return @pg_fetch_row($qHandle);
	}
	
	/**
	 * Free resources associated with a query result set 
	 * @param Mixed qHanle		The query handle		 
	 */
	public function closeQuery( $qHandle )
	{
		@pg_free_result($qHandle);
	}

	/**	
	 * Get number of fields in a result
	 * @param Mixed qHanle		The query handle
	 * @return Number
	 */
	public function num_fields( $qHandle )
	{
		return @pg_num_fields($qHandle);
	}	
	
	/**	
	 * Get the name of the specified field in a result
	 * @param Mixed qHanle		The query handle
	 * @param Number offset
	 * @return String
	 */	 
	public function field_name( $qHandle, $offset )
	{
		 return @pg_field_name($qHandle, $offset);
	}

	/**
	 * @param Mixed qHandle
	 * @param Number pageSize
	 * @param Number page
	 */
	public function seekPage($qHandle, $pageSize, $page)
	{
		pg_result_seek($qHandle, ($page - 1) * $pageSize);
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
		if( version_compare(phpversion(),"4.2.0") >= 0 )
			$ret = pg_query($this->conn, $sql);
		else
			$ret = pg_exec($this->conn, $sql);
		set_error_handler("runner_error_handler");
		
		return $ret;
	}
}
?>