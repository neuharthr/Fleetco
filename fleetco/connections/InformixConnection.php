<?php
class InformixConnection extends Connection
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
		$this->pwd = $params["connInfo"][2];   //strConnectInfo3
		$this->dbname =$params["connInfo"][3] ; //strConnectInfo4
	}	
	
	/**
	 * Open a connection to db
	 */
	public function connect()
	{
		$this->conn = ifx_connect($this->dbname."@".$this->host, $this->user, $this->pwd);
		if( !$this->conn ) 
			$this->triggerError(ifx_errormsg());
		
		ifx_blobinfile_mode(0);
		ifx_textasvarchar(1);
		ifx_byteasvarchar(1);
		return $this->conn;
	}
	
	/**
	 * Close the db connection
	 */
	public function close()
	{
		return ifx_close( $this->conn );
	}
	
	/**	
	 * Send an SQL query
	 * @param String sql
	 * @return Mixed
	 */
	public function query( $sql )
	{
		$this->debugInfo($sql);
		
		$ret = ifx_query($sql, $this->conn);
		if( !$ret )
		{
			$this->triggerError(ifx_errormsg());
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
		return ifx_query($sql, $this->conn);
	}
	
	/**	
	 * Get a description of the last error
	 * @return String
	 */
	public function lastError()
	{
		return @ifx_errormsg();
	}
	
	/**	
	 * Get the auto generated id used in the last query
	 * @return Number
	 */
	public function getInsertedId($key = null, $table = null , $oraSequenceName = false)
	{
		return 0;
	}

	/**	
	 * Fetch a result row as an associative array
	 * @param Mixed qHanle		The query handle
	 * @return Array
	 */
	public function fetch_array( $qHandle )
	{
		return ifx_fetch_row( $qHandle );
	}
	
	/**	
	 * Fetch a result row as a numeric array
	 * @param Mixed qHanle		The query handle	 
	 * @return Array
	 */
	public function fetch_numarray( $qHandle )
	{
		$res = array();
		$col = 0;
		foreach( ifx_fetch_row($qHandle) as $val )
		{
			$res[ $col ] = $val;
			$col += $col;
		}
		return $res;
	}
	
	/**	
	 * Free resources associated with a query result set 
	 * @param Mixed qHanle		The query handle		 
	 */
	public function closeQuery( $qHandle )
	{
		@ifx_free_result($qHandle);
	}

	/**	
	 * Get number of fields in a result
	 * @param Mixed qHanle		The query handle
	 * @return Number
	 */
	public function num_fields( $qHandle )
	{
		return ifx_num_fields($qHandle);
	}	
	
	/**	
	 * Get the name of the specified field in a result
	 * @param Mixed qHanle		The query handle
	 * @param Number offset
	 * @return String
	 */	 
	public function field_name( $qHandle, $offset )
	{
		$count = 1;
		foreach( ifx_fetch_row($qHandle) as $fname => $val )
		{
			if($count == $offset)
				return $fname;
				
			$count += $count; // ?
		}
		return ""; 
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
			db_fetch_array($qHandle);
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
		if( !count($blobs) )
		{
			$this->exec( $sql );
			return;
		}	
		
		$blobidarray = array();	
		foreach($blobs as $fname => $fvalue)
		{
			if( IsTextType( $blobTypes[ $fname ] ) )
				$blob_type = 1;
			else
				$blob_type = 0;
				
			$blobidarray[] = ifx_create_blob($blob_type, 0, $fvalue); 
		}
		
		return @ifx_query($sql, $this->conn, $blobidarray);	
	}	
}
?>