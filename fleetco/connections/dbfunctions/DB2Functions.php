<?php
class DB2Functions extends DBFunctions
{	
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
		return "'".$this->addSlashes($str)."'";
	}
	
	/**
	 * @param String str
	 * @return String
	 */		
	public function addSlashes( $str )
	{
		//$search_array = array('\\', '\'', "\x00", "\x0a", "\x0d", "\x1a");
		//$replace_array = array('\\\\', '\\\'', '\0', '\n', '\r', '\Z');
		//return str_replace($search_array, $replace_array, $str);
		return str_replace("'", "''", $str);
		//return addslashes($str);
	}
	
	/**
	 * @param String str
	 * @return String
	 */	
	public function addSlashesBinary( $str )
	{
		return $str;
	}
	
	/**
	 * @param String str
	 * @return String
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
	 * @param Number type (oprional)
	 * @return String	 
	 */
	public function field2char($value, $type = 3)
	{
		if( IsCharType($type) )
			return $value;
		return "char(".$value.")";
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
	 * @param String key
	 * @param String table
	 * @param String oraSequenceName (optional)	
	 * @return String
	 */
	public function getInsertedIdSQL( $key = null, $table = null, $oraSequenceName = false )
	{
		return "SELECT IDENTITY_VAL_LOCAL()";
	}
}
?>