<?php
class ODBCInfo extends DBInfo
{
	/**
	 * @return Array
	 */		
	public function db_gettablelist()
	{	
		$ret = array();
		$rs = odbc_tables( $this->connectionObj->conn );
		while( odbc_fetch_row($rs) )
		{
			if( odbc_result($rs, "TABLE_TYPE") == "TABLE" || odbc_result($rs, "TABLE_TYPE") == "VIEW" )
				$ret[] = odbc_result($rs, "TABLE_NAME");
		}
		
		return $ret;
	}
	
	/**
	 * @param String strSQL
	 * @return Array
	 */		
	public function db_getfieldslist($strSQL)
	{	
		$res = array();
		
		$qResult = $this->connectionObj->query( $strSQL );	
		
		$fieldsNumber = $qResult->numFields();
		for($i = 0; $i < $fieldsNumber; $i++) 
		{
			$stype = odbc_field_type( $qResult->getQueryHandle(), $i + 1 );
			$ntype = $this->getFieldTypeNumber( $stype );
			
			$res[ $i ] = array("fieldname" => $qResult->fieldName( $i ), "type" => $ntype, "is_nullable" => 0);
		}
		return $res;
	}
	
	/**
	 * @param String stype
	 * @return Number
	 */
	protected function getFieldTypeNumber( $stype )
	{
		switch( strtoupper($stype) )
		{
			case "COUNTER":
				return 3;
			case "VARCHAR":
				return 202;
			case "LONGCHAR":
				return 203;
			case "INTEGER":
				return 3;
			case "BYTE":
				return 17;
			case "SMALLINT":
				return 2;
			case "REAL":
				return 4;
			case "DOUNLE":
				return 5;
			case "GUID":
				return 72;
			case "DECIMAL":
				return 131;
			case "DATETIME":
				return 7;
			case "CURRENCY":
				return 6;
			case "BIT":
				return 11;
			case "LONGBINARY":
				return 205;
			case "DOUBLE":
				return 5;
			case "BYTE":
				return 11;
			default:
				return "";
		}
	}	
}
?>