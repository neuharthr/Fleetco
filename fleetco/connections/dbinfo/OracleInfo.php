<?php
class OracleInfo extends DBInfo
{
	/**
	 * @return Array
	 */		
	public function db_gettablelist()
	{
		$ret = array();
		$strSQL = "select owner||'.'||table_name as name,'TABLE' as type from all_tables where owner not like '%SYS%'
					 union all
					 select owner||'.'||view_name as name,'VIEW' from all_views where owner not like '%SYS%'";
		
		$qResult = $this->connectionObj->query( $strSQL );		
		while( $data = $qResult->fetchNumeric() )
		{	
			$ret[] = $data[0];
		}
		
		return $ret;
	}
	
	/**
	 * @param String strSQL
	 * @return Array
	 */		
	public function db_getfieldslist( $strSQL )
	{		
		$res = array();
		$qResult = $this->connectionObj->query( $strSQL );
		
		$fieldsNumber = $qResult->numFields();
		for($i = 0; $i < $fieldsNumber; $i++)
		{
			$stype = oci_field_type( $qResult->getQueryHandle(), $i + 1 );
			$ntype = $this->getFieldTypeNumber( $stype );
			
			$res[$i] = array("fieldname" => $qResult->fieldName( $i ), "type"=> $ntype, "is_nullable" => 0);
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
			case "INTEGER":
				return 3;
			case "SMALLINT": 
			case "OCTET":
				return 2;
			case "NUMBER":
				return 14;
			case "REAL": 
			case "DOUBLE": 
			case "FLOAT": 
				return 5;
			case "BLOB": 	
			case "BFILE": 	
				return 128;
			case "CHAR":
				return 129;
			case "VARCHAR":				
			case "VARCHAR2":				
				return 200;
			case "DATE":
				return 135;
			case "CLOB":
				return 201;
			default:
				return "";	
		}
	}
}
?>