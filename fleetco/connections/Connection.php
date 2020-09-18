<?php
class Connection
{
	/**
	 * The db connection link identifier
	 * @type Mixed
	 */
	public $conn = null;
	
	/**
	 * The database type identifier
	 * @type Number
	 */
	public $dbType;
	
	/**
	 * The db connection id
	 * @type Number
	 */
	public $connId;

	/**
	 * @type DBInfo
	 */
	public $_encryptInfo;
	
	/**
	 * @type DBFunctions
	 */
	protected $_functions;
	
	/**
	 * @type DBInfo
	 */
	protected $_info;
	
	/**
	 * asp compatibility
	 */
	public $SQLUpdateMode;
	
	/**
	 * @type boolean 
	 */
	protected $silentMode;
	
	
	function __construct( $params )
	{
		include_once getabspath("connections/QueryResult.php");
		
		$this->assignConnectionParams( $params );
		
		// set the db connection
		$this->connect();
		
		$this->setDbFunctions( $params["leftWrap"], $params["rightWrap"] );
		$this->setDbInfo( $params["ODBCString"] );

		$this->_encryptInfo = $params["EncryptInfo"];
	}

	/**
	 * @return Boolean
	 */
	function isEncryptionByPHPEnabled() 
	{
		return isset( $this->_encryptInfo["mode"] ) && $this->_encryptInfo["mode"] == ENCRYPTION_PHP;
	}

	/**
	 * @param String sql
	 */
	function setInitializingSQL( $sql ) 
	{
		//	in PHP just exec the initialization SQL right away.
		$this->exec( $sql );
	}

	
	/**
	 * Set db connection's properties
	 * @param Array params
	 */
	protected function assignConnectionParams( $params )
	{
		$this->dbType = $params["dbType"];
		$this->connId = $params["connId"];
	}

	/**
	 * Set the DBFunction object 
	 * @param String leftWrapper
	 * @param String rightWrapper
	 */	 
	protected function setDbFunctions( $leftWrapper, $rightWrapper )
	{
		include_once getabspath("connections/dbfunctions/DBFunctions.php");
		
		$extraParams = $this->getDbFunctionsExtraParams();
		
		switch( $this->dbType )
		{
			case nDATABASE_MySQL:
				include_once getabspath("connections/dbfunctions/MySQLFunctions.php");
				$this->_functions = new MySQLFunctions( $leftWrapper, $rightWrapper, $extraParams );
			break;
			case nDATABASE_Oracle:
				include_once getabspath("connections/dbfunctions/OracleFunctions.php");
				$this->_functions = new OracleFunctions( $leftWrapper, $rightWrapper, $extraParams );
			break;
			case nDATABASE_MSSQLServer:
				include_once getabspath("connections/dbfunctions/MSSQLFunctions.php");
				$this->_functions = new MSSQLFunctions( $leftWrapper, $rightWrapper, $extraParams );
			break;
			case nDATABASE_Access:
				include_once getabspath("connections/dbfunctions/ODBCFunctions.php");
				$this->_functions = new ODBCFunctions( $leftWrapper, $rightWrapper, $extraParams );
			break;
			case nDATABASE_PostgreSQL:
				include_once getabspath("connections/dbfunctions/PostgreFunctions.php");
				$this->_functions = new PostgreFunctions( $leftWrapper, $rightWrapper, $extraParams );
			break;
			case nDATABASE_Informix:
				include_once getabspath("connections/dbfunctions/InformixFunctions.php");
				$this->_functions = new InformixFunctions( $leftWrapper, $rightWrapper, $extraParams );
			break;
			case nDATABASE_SQLite3:
				include_once getabspath("connections/dbfunctions/SQLite3Functions.php");
				$this->_functions = new SQLite3Functions( $leftWrapper, $rightWrapper, $extraParams );
			break;
			case nDATABASE_DB2:
			case 18:	//	iSeries
				include_once getabspath("connections/dbfunctions/DB2Functions.php");
				$this->_functions = new DB2Functions( $leftWrapper, $rightWrapper, $extraParams );
			break;
			default:
				include_once getabspath("connections/dbfunctions/GenericFunctions.php");
				$this->_functions = new GenericFunctions( $leftWrapper, $rightWrapper, $extraParams );
		}
	}
	
	/**
	 * Get extra connection params that may be connected 
	 * with the db connection link directly
	 * @return Array
	 */
	protected function getDbFunctionsExtraParams()
	{		
		return array();
	}
	
	/**
	 * Set the DbInfo object
	 * @param String ODBCString	 
	 */
	protected function setDbInfo( $ODBCString )
	{
		include_once getabspath("connections/dbinfo/DBInfo.php");
		switch( $this->dbType )
		{
			case nDATABASE_MySQL: 
				if( useMySQLiLib() )
				{
					include_once getabspath("connections/dbinfo/MySQLiInfo.php");
					$this->_info = new MySQLiInfo( $this );
				}
				else
				{
					include_once getabspath("connections/dbinfo/MySQLInfo.php");
					$this->_info = new MySQLInfo( $this );
				}
			break;
			case nDATABASE_Oracle:
				include_once getabspath("connections/dbinfo/OracleInfo.php");
				$this->_info = new OracleInfo( $this );
			break;
			case nDATABASE_MSSQLServer:
				include_once getabspath("connections/dbinfo/MSSQLInfo.php");
				$this->_info = new MSSQLInfo( $this );
			break;
			case nDATABASE_Access: 
				if( stripos($ODBCString, 'Provider=') !== false )
				{				
					include_once getabspath("connections/dbinfo/ADOInfo.php");
					$this->_info = new ADOInfo( $this );
				}
				else
				{
					include_once getabspath("connections/dbinfo/ODBCInfo.php");
					$this->_info = new ODBCInfo( $this );
				}
			break;
			case nDATABASE_PostgreSQL:
				include_once getabspath("connections/dbinfo/PostgreInfo.php");
				$this->_info = new PostgreInfo( $this );
			break;
			case nDATABASE_Informix:
				include_once getabspath("connections/dbinfo/InformixInfo.php");
				$this->_info = new InformixInfo( $this );
			break;
			case nDATABASE_SQLite3:
				include_once getabspath("connections/dbinfo/SQLLite3Info.php");
				$this->_info = new SQLLite3Info( $this );
			break;
			case nDATABASE_DB2:
				include_once getabspath("connections/dbinfo/DB2Info.php");
				$this->_info = new DB2Info( $this );		
		}
	}	
	
	/**
	 * An interface stub.
	 * Open a connection to db
	 */
	public function connect()
	{
		//db_connect
	}
	
	/**
	 * An interface stub	
	 * Close the db connection
	 */
	public function close()
	{
		//db_close
	}
	
	/**
	 * An interface stub	
	 * Send an SQL query
	 * @param String sql
	 * @return QueryResult
	 */
	public function query( $sql )
	{
		//db_query
		//return new QueryResult( $this, $qHandle );
	}
	
	/**
	 * An interface stub	
	 * Execute an SQL query
	 * @param String sql
	 */
	public function exec( $sql )
	{
		//db_exec
	}
	
	/**
	 * An interface stub	
	 * Get a description of the last error
	 * @return String
	 */
	public function lastError()
	{
		//db_error
	}

	/**	
	 * Get the auto generated id used in the last query
	 * @param String key (optional)	
	 * @param String table (optional)	
	 * @param String oraSequenceName (optional)	
	 * @return Number
	 */	
	public function getInsertedId( $key = null, $table = null , $oraSequenceName = false )
	{	
		$insertedIdSQL = $this->_functions->getInsertedIdSQL( $key, $table, $oraSequenceName );

		if ( $insertedIdSQL )
		{
			$qResult = $this->query( $insertedIdSQL );
			if( $qResult )
			{
				$lastId = $qResult->fetchNumeric();
				return $lastId[0];
			}
		}

		return 0;
	}
	
	/**
	 * The stub openSchema method overrided in the ADO connection class
	 * @param Number querytype
	 * @return Mixed
	 */
	public function openSchema( $querytype  )
	{
		return null;
	}
	
	/**
	 * An interface stub	
	 * Fetch a result row as an associative array
	 * @param Mixed qHanle		The query handle
	 * @return Array | Boolean
	 */
	public function fetch_array( $qHandle )
	{
		//db_fetch_array
	}
	
	/**
	 * An interface stub	
	 * Fetch a result row as a numeric array
	 * @param Mixed qHanle		The query handle	 
	 * @return Array | Boolean
	 */
	public function fetch_numarray( $qHandle )
	{
		//db_fetch_numarray
	}
	
	/**
	 * An interface stub	
	 * Free resources associated with a query result set 
	 * @param Mixed qHanle		The query handle		 
	 */
	public function closeQuery( $qHandle )
	{
		//db_closequery
	}

	/**
	 * An interface stub.	
	 * Get number of fields in a result
	 * @param Mixed qHanle		The query handle
	 * @return Number
	 */
	public function num_fields( $qHandle )
	{
		//db_numfields
	}	
	
	/**
	 * An interface stub.	
	 * Get the name of the specified field in a result
	 * @param Mixed qHanle		The query handle
	 * @param Number offset
	 * @return String
	 */	 
	public function field_name( $qHandle, $offset )
	{
		//db_fieldname
	}

	/**
	 * An interface stub
	 * @param Mixed qHandle
	 * @param Number pageSize
	 * @param Number page
	 */
	public function seekPage($qHandle, $pageSize, $page)
	{
		//db_pageseek
	}
	
	/**
	 * @param String str
	 * @return String
	 */	
	public function escapeLIKEpattern( $str )
	{
		return $this->_functions->escapeLIKEpattern( $str );
	}
	
	/**
	 * @param String str
	 * @return String
	 */
	public function prepareString( $str )
	{
		return $this->_functions->prepareString( $str );
	}
	
	/**
	 * @param String str
	 * @return String
	 */	
	public function addSlashes( $str )
	{
		return $this->_functions->addslashes( $str );
	}
	
	/**
	 * @param String str
	 * @return String
	 */		
	public function addSlashesBinary( $str )
	{
		return $this->_functions->addSlashesBinary( $str );
	}
	
	/**
	 * @param String str
	 * @return String
	 */	
	public function stripSlashesBinary( $str )
	{
		return $this->_functions->stripSlashesBinary( $str );
	}
	
	/**
	 * @param String fName
	 * @return String
	 */
	public function addFieldWrappers( $fName )
	{
		return $this->_functions->addFieldWrappers( $fName );
	}
	
	/**
	 * @param String tName
	 * @return String
	 */	
	public function addTableWrappers( $tName )
	{
		return $this->_functions->addTableWrappers( $tName );
	}
	
	/**
	 * @param String str
	 * @return String
	 */		
	public function upper( $str )
	{
		return $this->_functions->upper( $str );
	}
	
	/**
	 * @param Mixed value
	 * @return String
	 */
	public function addDateQuotes( $value )
	{
		return $this->_functions->addDateQuotes( $value );
	}
	
	/**
	 * @param Mixed value
	 * @param Number type ( optional )
	 * @return String
	 */
	public function field2char( $value, $type = 3 )
	{
		return $this->_functions->field2char( $value, $type );
	}
	
	/**
	 * It's invoked when search is running on the 'View as:Time' field
	 * @param Mixed value
	 * @param Number type
	 * @return String	 
	 */
	public function field2time( $value, $type )
	{
		return $this->_functions->field2time( $value, $type );
	}

	/**
	 * @param String tName
	 * @return String
	 */	
	public function timeToSecWrapper( $tName )
	{
		return $this->_functions->timeToSecWrapper( $tName );
	}
	
	
	/**
	 * @return Array
	 */
	public function getTableList()
	{
		return $this->_info->db_gettablelist();
	}
	
	/**
	 * @param String
	 * @return Array	 
	 */
	public function getFieldsList( $sql )
	{
		return $this->_info->db_getfieldslist( $sql );
	}
	
	
	/**
	 * Check if the db supports subqueries
	 * @return Boolean
	 */
	public function checkDBSubqueriesSupport()
	{
		return true;
	}
	
	/**
	 * @param String sql
	 * @param Number pageStart
	 * @param Number pageSize
	 * @param Boolean applyLimit
	 */
	public function queryPage($strSQL, $pageStart, $pageSize, $applyLimit)
	{
		if( $this->dbType == nDATABASE_MySQL ) 
		{
			if( $applyLimit ) 
				$strSQL.= " limit ".(($pageStart - 1) * $pageSize).",".$pageSize;
			
			return $this->query( $strSQL )->getQueryHandle();
		} 
		
		if( $this->dbType == nDATABASE_MSSQLServer || $this->dbType == nDATABASE_Access ) 
		{
			if( $applyLimit ) 
				$strSQL = AddTop($strSQL, $pageStart * $pageSize);
			
			$qResult = $this->query( $strSQL );
			$qResult->seekPage( $pageSize, $pageStart );
			
			return $qResult->getQueryHandle();
		} 
		
		if( $this->dbType == nDATABASE_Oracle ) 
		{
			if( $applyLimit ) 
				$strSQL = AddRowNumber($strSQL, $pageStart * $pageSize);
			
			$qResult =  $this->query( $strSQL );
			$qResult->seekPage( $pageSize, $pageStart );
			
			return $qResult->getQueryHandle();
		} 
		
		if( $this->dbType == nDATABASE_PostgreSQL ) 
		{
			if( $applyLimit )
				$strSQL.= " limit ".$pageSize." offset ".(($pageStart - 1) * $pageSize);
			
			return $this->query( $strSQL )->getQueryHandle();
		}
		
		if( $this->dbType == nDATABASE_DB2 ) 
		{
			if( $applyLimit ) 
			{
				$strSQL = "with DB2_QUERY as (".$strSQL.") select * from DB2_QUERY where DB2_ROW_NUMBER between "
					.(($pageStart - 1) * $pageSize + 1)." and ".($pageStart * $pageSize);
			}
			
			return $this->query( $strSQL )->getQueryHandle();
		} 
		
		if( $this->dbType == nDATABASE_Informix ) 
		{
			if( $applyLimit ) 
				$strSQL = AddTopIfx($strSQL, $pageStart * $pageSize);
			
			$qResult =  $this->query( $strSQL );
			$qResult->seekPage( $pageSize, $pageStart );
			
			return $qResult->getQueryHandle();
		} 
		
		if( $this->dbType == nDATABASE_SQLite3 ) 
		{
			if( $applyLimit ) 
				$strSQL.= " limit ".(($pageStart - 1) * $pageSize).",".$pageSize;
			
			return $this->query( $strSQL )->getQueryHandle();
		} 
		
		$qResult =  $this->query( $strSQL );
		$qResult->seekPage( $pageSize, $pageStart );
		
		return $qResult->getQueryHandle();
	}
	
	/**
	 * An interface stub	
	 * Execute an SQL query with blob fields processing
	 * @param String sql
	 * @param Array blobs
	 * @param Array blobTypes
	 * @return Boolean
	 */
	public function execWithBlobProcessing( $sql, $blobs, $blobTypes = array() )
	{
		return $this->exec( $sql );
	}
	
	/**
	 * Get the number of rows fetched by an SQL query
	 * @param String sql	A part of an SQL query or a full SQL query
	 * @param Boolean  		The flag indicating if the full SQL query (that can be used as a subquery) 
	 * or the part of an sql query ( from + where clauses ) is passed as the first param
	 */
	public function getFetchedRowsNumber( $sql, $useAsSubquery )
	{
		if( $useAsSubquery )
			$countSql = "select count(*) from (".$sql.") a";
		else
			$countSql = "select count(*) ".$sql;
			
		$countdata = $this->query( $countSql )->fetchNumeric();
		return $countdata[0];	
	}
	
	/**
	 * Check if SQL queries containing joined subquery are optimized
	 * @return Boolean
	 */
	public function checkIfJoinSubqueriesOptimized()
	{
		return true;
	}
	
	/**
	 * Set and print debug information
	 * @param String sql
	 */
	function debugInfo( $sql )
	{
		global $strLastSQL, $dDebug;
		
		$strLastSQL = $sql;
		
		if( $dDebug === true )
			echo $sql."<br>";	
	}
	
	/**
	 * @param String message
	 */
	function triggerError( $message ) 
	{
		if( !$this->silentMode )
			trigger_error( $message, E_USER_ERROR );
	}

	/**
	 *	Enables or disables Silent Mode, when no SQL errors are displayed.
	 *	@param 	Boolean silent
	 *  @return Boolean - previous Silent mode
	 */
	public function setSilentMode( $silent ) 
	{
		$oldMode = $this->silentMode;
		$this->silentMode = $silent;
		return $oldMode;
	}
	
	/**
	 *	query, silent mode
	 *	@param 	String sql
	 *  @return QueryResult
	 */
	public function querySilent( $sql ) 
	{
		$silent = $this->setSilentMode( true );
		$ret = $this->query( $sql );
		$this->setSilentMode( $silent );
		return $ret;
	}
	
	/**
	 *	exec, silent mode
	 *	@param 	String sql
	 *  @return Mixed
	 */
	public function execSilent( $sql ) 
	{
		$silent = $this->setSilentMode( true );
		$ret = $this->exec( $sql );
		$this->setSilentMode( $silent );
		return $ret;
	}
}
?>