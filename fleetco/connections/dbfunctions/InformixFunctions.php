<?php
class InformixFunctions extends DBFunctions
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
		return str_replace("'", "''", $str);
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
		$arrDate = db2time($val);
		return "'".$arrDate[0]."-".$arrDate[1]."-".$arrDate[2]." ".$arrDate[3].":".$arrDate[4].":".$arrDate[5]."'";
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
		return $value;
	}	
}
?>