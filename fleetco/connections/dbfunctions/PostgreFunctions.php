<?php
class PostgreFunctions extends DBFunctions
{
	/**
	 * db version
	 * @type Number
	 */
	protected $postgreDbVersion;
	
	
	function __construct( $leftWrapper, $rightWrapper, $extraParams )
	{
		parent::__construct(  $leftWrapper, $rightWrapper, $extraParams  );
		
		$this->postgreDbVersion = $extraParams["postgreDbVersion"];
	}
	
	/**
	 * @param String str
	 * @return String
	 */	
	public function escapeLIKEpattern( $str )
	{
		return $str;
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
		return pg_escape_string( $str );
	}

	/**
	 * @param String str
	 * @return String
	 */		
	public function addSlashesBinary( $str )
	{		
		if( $this->postgreDbVersion < 9 )
			return "'".pg_escape_bytea($str)."'";
		
		if( !strlen($str) )
			return "''";
			
		return "E'\\\\x".bin2hex($str)."'";
		
	}
	
	/**
	 * @param String str
	 * @return String
	 */	
	public function stripSlashesBinary( $str )
	{
		if( $this->postgreDbVersion < 9 )	
			return pg_unescape_bytea($str);
			
		return hex2bin( substr($str, 2) );	
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
	 * @param Mixed val
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
	public function field2char( $value, $type = 3 )
	{
		if( IsCharType($type) )
			return $value;
		
		return "''||(".$value.")";
	}
	
	/**
	 * @param Mixed value
	 * @param Number type
	 * @return String	 
	 */
	public function field2time($value, $type)
	{
		return $value;
	}

	/**
	 * Get the auto generated SQL string used in the last query
	 * @param String key (optional)
	 * @param String table (optional)
	 * @param String oraSequenceName (optional)
	 * @return String
	 */
	public function getInsertedIdSQL( $key = null, $table = null, $oraSequenceName = false )
	{
		return "SELECT LASTVAL()";
	}	
}
?>