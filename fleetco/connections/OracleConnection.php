<?php
class OracleConnection extends Connection
{
	protected $user;
	
	protected $pwd; 
	
	protected $sid;	 
	
	
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
		
		$this->user = $params["connInfo"][0];  //strConnectInfo1
		$this->pwd = $params["connInfo"][1];  //strConnectInfo2
		$this->sid = $params["connInfo"][2];  //strConnectInfo3
	}
	
	/**
	 * Open a connection to db
	 */
	public function connect()
	{
		$this->conn = @ociplogon($this->user, $this->pwd, $this->sid);
		if( !$this->conn )
			$this->triggerError($this->lastError());
			
		$stmt = ociparse($this->conn, "alter session set nls_date_format='YYYY-MM-DD HH24:MI:SS'");
		ociexecute($stmt);
		ocifreestatement($stmt);
		$stmt = ociparse($this->conn, "alter session set nls_timestamp_format='YYYY-MM-DD HH24:MI:SS'");
		ociexecute($stmt);
		ocifreestatement($stmt);
		return $this->conn;
	}
	
	/**
	 * Close the db connection
	 */
	public function close()
	{
		return @ocilogoff( $this->conn );
	}
	
	/**	
	 * Send an SQL query
	 * @param String sql
	 * @return Mixed
	 */
	public function query( $sql )
	{
		$this->debugInfo($sql);
		
		$stmt = ociparse($this->conn, $sql);
		$stmt_type = ocistatementtype($stmt);
		if( !ociexecute($stmt) )
		{
			$this->triggerError($this->lastError());
			return FALSE;
		}
		
		return new QueryResult( $this, $stmt );
	}
	
	/**	
	 * Execute an SQL query
	 * @param String sql
	 * @return Mixed
	 */
	public function exec( $sql )
	{
		$this->debugInfo($sql);
		
		$stmt = ociparse($this->conn, $sql);
		$stmt_type = ocistatementtype($stmt);
		if( !ociexecute($stmt) )
		{
			$this->triggerError( $this->lastError() );
			return FALSE;
		}
		
		return 1;
	}
	
	/**	
	 * Get a description of the last error
	 * @return String
	 */
	public function lastError()
	{
		$arr = ocierror();
		if( count($arr) > 1 )
			return $arr["code"]." - ".$arr["message"];
		
		return "";
	}

	/**
	 * Fetch a result row as an array
	 * @param Mixed qHanle		The query handle
	 * @param Number flags
	 * @return Array
	 */
	protected function myoci_fetch_array($qHandle, $flags)
	{
		if( function_exists("oci_fetch_array") )
			return oci_fetch_array($qHandle, $flags);
			
		$data = array();
		if( ocifetchinto($qHandle, $data, $flags) )
			return $data;
			
		return array();
	}	
	
	/**
	 * Fetch a result row as an associative array
	 * @param Mixed qHanle		The query handle
	 * @return Array
	 */
	public function fetch_array( $qHandle )
	{
		return $this->myoci_fetch_array($qHandle, OCI_ASSOC + OCI_RETURN_NULLS + OCI_RETURN_LOBS);
	}
	
	/**	
	 * Fetch a result row as a numeric array
	 * @param Mixed qHanle		The query handle	 
	 * @return Array
	 */
	public function fetch_numarray( $qHandle )
	{
		return $this->myoci_fetch_array($qHandle, OCI_NUM + OCI_RETURN_NULLS + OCI_RETURN_LOBS);
	}
	
	/**	
	 * Free resources associated with a query result set 
	 * @param Mixed qHanle		The query handle		 
	 */
	public function closeQuery( $qHandle )
	{
		if( function_exists("oci_free_statement") )
			oci_free_statement($qHandle);
		else
			ocifreestatement($qHandle);
	}

	/**
	 * Get number of fields in a result
	 * @param Mixed qHanle		The query handle
	 * @return Number
	 */
	public function num_fields( $qHandle )
	{
		return OCINumCols($qHandle);
	}	
	
	/**	
	 * Get the name of the specified field in a result
	 * @param Mixed qHanle		The query handle
	 * @param Number offset
	 * @return String
	 */	 
	public function field_name( $qHandle, $offset )
	{
		return OCIColumnName($qHandle, $offset + 1);
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
			$this->myoci_fetch_array($qHandle, OCI_NUM + OCI_RETURN_NULLS);
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
		set_error_handler("empty_error_handler");
		
		$locs = array();
		
		if( count($blobs) )
		{
			$idx = 1;
			$sql.=" returning ";
			
			$blobfields = "";
			$blobvars = "";
			foreach($blobs as $ekey => $value)
			{
				if( count($locs) )
				{
					$blobfields.= ",";
					$blobvars.= ",";
				}
				
				$blobfields .= $ekey;
				$blobvars.= ":bnd".$idx;
				$locs[ $ekey ] = OCINewDescriptor($this->conn, OCI_D_LOB);
				$idx++;
			}
			
			$sql.= $blobfields." into ".$blobvars;
		}
		
		$stmt = OCIParse($this->conn, $sql);
		
		$idx = 1;
		foreach($locs as $ekey => $value)
		{
			OCIBindByName($stmt, ":bnd".$idx, $locs[ $ekey ], -1 , OCI_B_BLOB);
			$idx++;
		}

		$result = OCIExecute($stmt, OCI_DEFAULT) !== false;
		
		foreach($locs as $ekey => $value)
		{
			$locs[ $ekey ]->save( $blobs[ $ekey ] );
			$locs[ $ekey ]->free();
		}
		
		OCICommit($this->conn);
		
		OCIFreeStatement( $stmt );
		
		set_error_handler("runner_error_handler");
		return $result;
	}
}
?>