<?php
class MySQLFunctions extends DBFunctions
{
	/**
	 *  A db connection link identifier
	 * @type Mixed
	 */
	protected $conn = null;
	
	
	function __construct( $leftWrapper, $rightWrapper, $extraParams )
	{
		parent::__construct( $leftWrapper, $rightWrapper, $extraParams );
		
		$this->conn = $extraParams["conn"];	
	}
	
	/**
	 * @param String str
	 * @return String
	 */
	public function escapeLIKEpattern( $str )
	{
		return str_replace(array('\\', '%', '_'), array('\\\\', '\\%', '\\_'), $str);
	}

	/**
	 * @param String str
	 * @return String
	 */ 
	public function prepareString( $str )
	{
		return "'".$this->addSlashes( $str )."'";
	}
	
	/**
	 * @param String str
	 * @return String
	 */
	public function addSlashes( $str )
	{
		if( useMySQLiLib() && $this->conn )
		{
			if( $this->conn )
				return mysqli_real_escape_string( $this->conn, $str );
		} 
//	deprecated
/*
		else if( function_exists('mysql_real_escape_string') )
		{
			mysql_real_escape_string($str);
		}
*/		
		else
		{
			//	ODBC connection, no MySQL library included
			return str_replace(array('\\', '\''), array('\\\\', '\\\''), $str);
		}
	}
	
	/**
	 * @param String str
	 * @return String
	 */	
	public function addSlashesBinary( $str )
	{
		if( !strlen($str) )
			return "''";
			
		return "0x".bin2hex($str);
	}

	/**
	 * @param String str
	 */
	public function stripSlashesBinary( $str )
	{
		return $str;
	}

	/**
	 * adds wrappers to field name if required
	 * @param String strName
	 * @return String
	 */
	public function addFieldWrappers( $strName )
	{		
		if( substr($strName, 0, 1) == $this->strLeftWrapper )
			return $strName;
			
		return $this->strLeftWrapper.$strName.$this->strRightWrapper;
	}
	

	/**
	 * @param String dbval
	 * @return String	 
	 */
	public function upper( $dbval )
	{
		return "upper(".$dbval.")";
	}
	
	/**
	 * @param Mixed $val
	 * @return String
	 */
	public function addDateQuotes( $val )
	{
		return "'".$val."'";
	}
	
	/**
	 * It's called for Contains and Starts with searches
	 * @param Mixed value
	 * @param Number type (optional)
	 * @return String	 
	 */
	public function field2char($value, $type = 3)
	{
		return $value;
	}
	
	/**
	 * @param Mixed value
	 * @param Number type
	 * @return String	 
	 */
	public function field2time($value, $type)
	{
		if( IsDateFieldType($type) )
			return "time(".$value.")";
			
		return $value;
	}

	/**
	 *  Get the auto generated SQL string used in the last query
	 * @param String key (optional)	
	 * @param String table (optional)	
	 * @param String oraSequenceName (optional)	
	 * @return String
	 */
	public function getInsertedIdSQL( $key = null, $table = null, $oraSequenceName = false )
	{
		return "SELECT LAST_INSERT_ID()";
	}

	/**
	 * @param String strName
	 * @return String
	 */	
	public function timeToSecWrapper( $strName )
	{
		return "TIME_TO_SEC(" . $this->addTableWrappers($strName) . ")";
	}
}
?>