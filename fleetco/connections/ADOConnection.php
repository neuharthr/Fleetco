<?php
class ADOConnection extends Connection
{
	/**
	 * A date format string
	 * @type String
	 */
	protected $access_dmy;
	
	protected $ODBCString;
	
	
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
	}	
	
	/**
	 * Open a connection to db
	 */
	public function connect()
	{
		global $cCodepage;
			
		try 
		{
			$this->conn = new COM("ADODB.Connection", NULL, $cCodepage);
			$this->conn->Open( $this->ODBCString );
			
			if( $this->dbType == nDATABASE_Access )
			{
				$rs = $this->conn->Execute("select datevalue('2000-11-22') as qw");
				$str = $rs->Fields[0]->Value;
				
				$this->access_dmy = "mdy";
				$y = strpos($str,"2000");
				$m = strpos($str,"11");
				$d = strpos($str,"22");
				if( $y < $m && $m < $d )
					$this->access_dmy = "ymd";
				
				if( $d < $m && $m < $y )
					$this->access_dmy = "dmy";				
			}
		} 
		catch(Exception $e)
		{
			trigger_error($e->getMessage());
		}
		
		return $this->conn;
	}
	
	/**
	 * Close the db connection
	 */
	public function close()
	{
		$this->conn->Close();
	}
	
	/**	
	 * Send an SQL query
	 * @param String sql
	 * @return Mixed
	 */
	public function query( $sql )
	{
		global $cCodepage;
		
		$this->debugInfo($sql);
		
		try
		{
			$recordset = new COM("ADODB.recordset", NULL, $cCodepage);
			$recordset->Open($sql, $this->conn, 2);
			
			return new QueryResult( $this, $recordset );
		} 
		catch(com_exception $e)
		{
			trigger_error($e->getMessage(),E_USER_ERROR);
		}
		
		return FALSE;
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
		if( $this->conn->Errors->Count )
			return $this->conn->Errors[ $this->conn->Errors->Count - 1 ]->Description;
		
		return '';
	}

	/**
	 * The stub openSchema method overrided in the ADO connection class
	 * @param Number
	 * @return Mixed
	 */
	public function openSchema( $querytype )
	{
		$recordset = $this->conn->OpenSchema( $querytype );
		return new QueryResult( $this, $recordset );
	}	
	
	/**	
	 * Fetch a result row as an  array
	 * @param Mixed qHanle				The query handle
	 * @param Number assoc (optional)
	 * @return Array
	 */
	protected function _fetch_array( $qHanle, $assoc = 1 )
	{
		$ret = array();
		
		if( $qHanle->EOF() )
			  return false;
		
		try {			
			for( $i = 0; $i < $this->num_fields( $qHanle ); $i++ )
			{
				if( IsBinaryType( $qHanle->Fields[$i]->Type ) && $qHanle->Fields[$i]->Type != 128 || $qHanle->Fields[$i]->Type == 203 )
				{
					$str = "";
					if( $qHanle->Fields[$i]->ActualSize > 0 )
					{
						$size = $qHanle->Fields[$i]->ActualSize;
						$val = $qHanle->Fields[$i]->GetChunk( $size );
						
						if( is_array($val) || is_object($val) )
						{
							$str = str_pad("", $size);
							$j = 0;
							foreach($val as $byte)
							{
								$str[ $j++ ] = chr($byte);
							}
						}
						else
							$str = $val;
					}
					
					if( $assoc )
						$ret[ $qHanle->Fields[$i]->Name ] = $str;
					else
						$ret[ $i ] = $str;
				}
				else
				{
					$value = $qHanle->Fields[$i]->Value;
					
					if( is_null($value) )
						$val = NULL;
					else
					{
						if( isdatefieldtype( $qHanle->Fields[$i]->Type ) )
							$value = localdatetime2db( (string)$qHanle->Fields[$i]->Value, $this->access_dmy );
						if( IsNumberType( $qHanle->Fields[$i]->Type ) )
							$val = floatval($value);
						else
							$val = strval($value);
					}
					
					if( $assoc )
						$ret[ $qHanle->Fields[$i]->Name ] = $val;
					else
						$ret[ $i ] = $val;
				}
			}
			
			$qHanle->MoveNext();	
		} 
		catch(com_exception $e)
		{
			trigger_error($e->getMessage(), E_USER_ERROR);
		}

		return $ret;
	}

	/**	
	 * Fetch a result row as an associative array
	 * @param Mixed qHanle		The query handle
	 * @return Array | Boolean
	 */
	public function fetch_array( $qHanle )
	{
		return $this->_fetch_array($qHanle, 1);
	}
	
	/**	
	 * Fetch a result row as a numeric array
	 * @param Mixed qHanle		The query handle	 
	 * @return Array | Boolean
	 */
	public function fetch_numarray( $qHanle )
	{
		return $this->_fetch_array($qHanle, 0);
	}

	/**
	 * Free resources associated with a query result set 
	 * @param Mixed qHanle		The query handle		 
	 */
	public function closeQuery( $qHanle )
	{
		$qHanle->Close();
	}
	
	/**	
	 * Get number of fields in a result
	 * @param Mixed qHanle		The query handle
	 * @return Number
	 */
	public function num_fields( $qHandle )
	{
		return $qHandle->Fields->Count;
	}
	
	/**
	 * Get the name of the specified field in a result
	 * @param Mixed qHanle		The query handle
	 * @param Number offset
	 * @return String
	 */	 
	public function field_name( $qHanle, $offset )
	{
		return $qHanle->Fields( $offset )->Name;
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
			
		if( $qHandle->EOF() )
			return;
			
	   $qHandle->Move( $pageSize * ($page - 1) );
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
		global $cCodepage;
		
		$this->debugInfo($sql);
		
		try
		{
			$recordset = new COM("ADODB.recordset", NULL, $cCodepage);
			$recordset->Open($sql, $this->conn, 2);
			return true;
		}
		catch(com_exception $e)
		{
			return false;
		}
	}
}
?>