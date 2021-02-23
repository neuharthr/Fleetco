<?php
class MSSQLSrvConnection extends Connection
{	
	protected $host;
	
	protected $user;
	
	protected $pwd;
	
	protected $dbname;	
	
	protected $options;	
	
	
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
		
		$this->host = $params["connInfo"][0]; //strConnectInfo1
		
		if( $params["connInfo"][2] == "SSPI" )
		{
			$this->dbname = $params["connInfo"][1];  //strConnectInfo2
			$this->options = $params["connInfo"][2];  //strConnectInfo3
		}
		else
		{
			$this->user = $params["connInfo"][1];  //strConnectInfo2 
			$this->pwd = $params["connInfo"][2]; //strConnectInfo3 
			$this->dbname = $params["connInfo"][3];  //strConnectInfo4
		}
	}
	
	/**
	 * handling errors
	 */
	protected function triggerErrorMSSQL()
	{
		$error = $this->lastError();
		if( !strlen($error) )
			$this->triggerError("Udefined MSSQL Server Error");
		else 
			$this->triggerError($error);
	}
	
	/**
	 * Open a connection to db
	 */
	public function connect()
	{	
		$connectionInfo = array("Database" => $this->dbname, "PWD" => $this->pwd, "UID" => $this->user);
		if( $this->options == "SSPI" )
			$connectionInfo = array("Database" => $this->dbname );
		$this->conn = sqlsrv_connect($this->host, $connectionInfo);
			
		if( !$this->conn )
			$this->triggerErrorMSSQL();
		
		return $this->conn;
	}
	
	/**
	 * Close the db connection
	 */
	public function close()
	{
		return sqlsrv_close( $this->conn );
	}
	
	/**	
	 * Send an SQL query
	 * @param String sql
	 * @return Mixed
	 */
	public function query( $sql )
	{
		$this->debugInfo($sql);
		$ret = sqlsrv_query($this->conn, $sql);
		
		if( !$ret )
		{
			$this->triggerErrorMSSQL();
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
		$ret = sqlsrv_query($this->conn, $sql);
		
		if( $ret === false )
			$this->triggerErrorMSSQL();
		return $ret;	
	}

	/**	
	 * Get the auto generated id used in the last query
	 * @return Number
	 */
	public function getInsertedId($key = null, $table = null , $oraSequenceName = false)
	{
		$qResult = $this->query( "select @@IDENTITY as indent" );
		if( $qResult )
		{
			$row = $qResult->fetchAssoc();
			return $row["indent"];
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
		$rowArray = array();	
		$metaData = sqlsrv_field_metadata($qHandle);
		$fetchRes = sqlsrv_fetch($qHandle);
		
		if( $fetchRes === false )
		{
			$this->triggerErrorMSSQL();
			return $rowArray;
		}
		
		if( is_null($fetchRes) )
			return $rowArray;
		
		$j = 0;		
		foreach($metaData as $fieldMetadata)
		{			
			switch( $fieldMetadata['Type'] ) 
			{
				//dateTime	
				// Date
				case 93:
				case 91:
				case -154: // for type Time
					$fieldVal = sqlsrv_get_field( $qHandle, $j, SQLSRV_PHPTYPE_STRING(SQLSRV_ENC_CHAR) );
					if ( $pointPosition = strrpos($fieldVal, ".") )
						$fieldVal = substr( $fieldVal, 0, $pointPosition );
				break;
				// ntext
				case -10:
				case -9:
					$fieldVal = sqlsrv_get_field( $qHandle, $j, SQLSRV_PHPTYPE_STREAM(SQLSRV_ENC_CHAR) );
					$buffer = null;
					while( !feof($fieldVal) ) 
					{
						$buffer.= fgets($fieldVal, 4096);
					}
					fclose($fieldVal);
					$fieldVal = $buffer;
				break;
				// image
				case -4:
					$fieldVal = sqlsrv_get_field( $qHandle, $j, SQLSRV_PHPTYPE_STREAM(SQLSRV_ENC_BINARY) );
					$buffer = null;
					while( !feof($fieldVal) ) 
					{
						$buffer.= fgets($fieldVal, 4096);
					}
					fclose($fieldVal);
					$fieldVal = $buffer;				
				break;
				// text
				case -1:
					$fieldVal = sqlsrv_get_field( $qHandle, $j, SQLSRV_PHPTYPE_STREAM(SQLSRV_ENC_CHAR) );
					$buffer = null;
					while( !feof($fieldVal) ) 
					{
						$buffer.= fgets($fieldVal, 4096);
					}
					fclose($fieldVal);
					$fieldVal = $buffer;				
				break;
				// need to check, may be int data should be retrieved in another type		
				default:   				
					$fieldVal = sqlsrv_get_field( $qHandle, $j );						    
			}	
			
			$rowArray[ $fieldMetadata['Name'] ] = $fieldVal;
			$j++;			
		}
		return $rowArray;
	}
	
	/**	
	 * Fetch a result row as a numeric array
	 * @param Mixed qHanle		The query handle	 
	 * @return Array
	 */
	public function fetch_numarray( $qHandle )
	{
		$rowArray = array();	
		$metaData = sqlsrv_field_metadata($qHandle);
		$fetchRes = sqlsrv_fetch($qHandle);
				
		if( $fetchRes === false )
		{
			$this->triggerErrorMSSQL();
			return $rowArray;
		}
		
		if( is_null($fetchRes) )
			return $rowArray;
		
	
		$j = 0;		
		foreach($metaData as $fieldMetadata)
		{
			switch( $fieldMetadata['Type'] ) 
			{
				//dateTime	
				case 93:
					$fieldVal = sqlsrv_get_field( $qHandle, $j, SQLSRV_PHPTYPE_STRING(SQLSRV_ENC_CHAR) );			 
					$fieldVal = substr( $fieldVal, 0, strrpos($fieldVal, ".") );
				break;
				// ntext
				case -10:
					$fieldVal = sqlsrv_get_field( $qHandle, $j, SQLSRV_PHPTYPE_STREAM(SQLSRV_ENC_CHAR) );
					$buffer = null;
					while( !feof($fieldVal) ) 
					{
						$buffer.= fgets($fieldVal, 4096);
					}
					fclose($fieldVal);
					$fieldVal = $buffer;
				break;
				// image
				case -4:
					$fieldVal = sqlsrv_get_field( $qHandle, $j, SQLSRV_PHPTYPE_STREAM(SQLSRV_ENC_BINARY) );
					$buffer = null;
					while( !feof($fieldVal) ) 
					{
						$buffer.= fgets($fieldVal, 4096);
					}
					fclose($fieldVal);
					$fieldVal = $buffer;				
				break;
				// text
				case -1:
					$fieldVal = sqlsrv_get_field( $qHandle, $j, SQLSRV_PHPTYPE_STREAM(SQLSRV_ENC_CHAR) );
					$buffer = null;
					while( !feof($fieldVal) ) 
					{
						$buffer.= fgets($fieldVal, 4096);
					}
					fclose($fieldVal);
					$fieldVal = $buffer;				
				break;
				// need to check, may be int data should be retrieved in another type		
				default:   				
					$fieldVal = sqlsrv_get_field( $qHandle, $j );				    
			}
			
			$rowArray[] = $fieldVal;
			$j++;	
		}
		
		return $rowArray;
	}
	
	/**	
	 * Free resources associated with a query result set 
	 * @param Mixed qHanle		The query handle		 
	 */
	public function closeQuery( $qHandle )
	{
		@sqlsrv_free_stmt($qHandle);
	}

	/**	
	 * Get number of fields in a result
	 * @param Mixed qHanle		The query handle
	 * @return Number
	 */
	public function num_fields( $qHandle )
	{
		return @sqlsrv_num_fields($qHandle);
	}	
	
	/**	
	 * Get the name of the specified field in a result
	 * @param Mixed qHanle		The query handle
	 * @param Number offset
	 * @return String
	 */	 
	public function field_name( $qHandle, $offset )
	{
		$metaData = @sqlsrv_field_metadata($qHandle);
		
		if( $metaData !== false )
			return $metaData[ $offset ]['Name'];
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
		if( $row > 0 )
		{
			for($i = 0; $i < $row; $i++)
			{
				if( !sqlsrv_fetch($qHandle) )
					break;
			}			
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
		return @sqlsrv_query($this->conn, $sql);
	}
	
	function lastError() {
		$errors = @sqlsrv_errors( SQLSRV_ERR_ERRORS );
		if( !$errors ) 
			return "";
		$message = "";
		foreach( $errors as $error ) {
			$message .= @$error["code"] . " " . @$error["message"] . "<br>";
		}
		return $message;
	}
}
?>