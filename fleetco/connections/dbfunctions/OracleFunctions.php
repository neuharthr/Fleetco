<?php
class OracleFunctions extends DBFunctions
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
	public function prepareString($str)
	{
		$ora_maxstring = 4000;
		
		if( strlen($str) < $ora_maxstring )
			return "'".$this->addSlashes( $str )."'";
			
	//	split ret to 4000-len substrings
		$i = 0;
		$out = "";
		while( $i < strlen($str) )
		{
			if( strlen($out) )
				$out.="||";
			$out.= "to_clob('".$this->addSlashes( substr($str, $i, $ora_maxstring) )."')";
			$i += $ora_maxstring;
		}
		return $out;
		
	}
	
	/**
	 * @param String str
	 * @return String		 
	 */	
	function addSlashes( $str )
	{
		return str_replace("'", "''", $str);
	}
	
	/**
	 * @param String str
	 * @return String		 
	 */	
	function addSlashesBinary( $str )
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
	 * @param String
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
		if ( $oraSequenceName )
			$lastIdSQL = "SELECT " . $oraSequenceName . ".CURRVAL FROM DUAL";
		else if ( !is_null($key) && !is_null($table) )
			$lastIdSQL = "SELECT MAX(" . $this->addFieldWrappers( $key ) . ") FROM " . $this->addTableWrappers( $table );
		else
			return false;

		return $lastIdSQL;
	}		
}
?>