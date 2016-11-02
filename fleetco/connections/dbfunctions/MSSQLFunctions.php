<?php
class MSSQLFunctions extends DBFunctions
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
		return "N'".$this->addSlashes($str)."'";
	}
	
	/**
	 * @param String str
	 * @return String
	 */		
	public function addSlashes( $str )
	{
		return str_replace("'", "''", $str);
	}
		
	/**
	 * @param String str
	 * @return String
	 */	
	public function addSlashesBinary( $str )
	{
		return "0x".bin2hex($str);
	}
	
	/**
	 * @param String str
	 * @return String
	 */	
	public function stripSlashesBinary( $str )
	{
	//	try to remove ole header for BMP pictures
		$pos = strpos($str, ".Picture");
		if( $pos === false || $pos > 300 )
			return $str;
			
		$pos1 = strpos($str, "BM", $pos);
		if( $pos1 === false || $pos1 > 300 )
			return $str;
			
		return substr($str, $pos1);
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
		return "convert(datetime,'".$val."',120)";
	}
	
	/**
	 * It's called for Contains and Starts with searches
	 * @param Mixed value
	 * @param Number type (optional)
	 * @return String	 
	 */
	public function field2char($value, $type = 3)
	{
		if( IsCharType($type) )
			return $value;
			
		if( !IsDateFieldType($type) )
			return "convert(varchar(250),".$value.")";
		
		return "convert(varchar(50),".$value.", 120)";
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
		return "SELECT @@IDENTITY";
	}

	/**
	 * @param String strName
	 * @return String
	 */	
	public function timeToSecWrapper( $strName )
	{
		$wrappedFieldName = $this->addTableWrappers($strName);
		return "(DATEPART(HOUR, " . $wrappedFieldName . ") * 3600) + (DATEPART(MINUTE, " . $wrappedFieldName . ") * 60) + (DATEPART(SECOND, " . $wrappedFieldName . "))";
	}	

}
?>