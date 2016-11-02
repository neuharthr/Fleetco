<?php
class PostgreInfo extends DBInfo
{
	/**
	 * @return Array
	 */
	public function db_gettablelist()
	{		
		$ret = array();
		$strSQL = "select schemaname||'.'||tablename as name from pg_tables where schemaname not in ('pg_catalog','information_schema')
					 union all
					 select schemaname||'.'||viewname as name from pg_views where schemaname not in ('pg_catalog','information_schema')";

		$qResult = $this->connectionObj->query( $strSQL );
		while( $data = $qResult->fetchAssoc() )
		{
			$ret[] = $data["name"];
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
		for($i = 0;$i < $fieldsNumber; $i++) 
		{
			$stype = pg_field_type( $qResult->getQueryHandle(), $i );
			$ntype = $this->getFeldTypeNumber($stype);
			
			$res[$i] = array("fieldname" => $qResult->fieldName( $i ), "type" => $ntype, "is_nullable" => 0); 
		}
		
		return $res;
	}

	/**
	 * @param String stype
	 * @return Number
	 */		
	protected function getFeldTypeNumber( $stype )
	{
		switch( strtoupper($stype) )
		{
			case "INT4":
			case "INT2":
			case "INT8":
				return 3;
			case "FLOAT4":
			case "FLOAT8":
				return 5;
			case "NUMERIC":	
			case "MONEY":	
				return 14;
			case "ABSTIME":	
			case "TIMESTAMP":	
			case "TIMESTAMPTZ":	
				return 135;
			case "TIME":	
			case "TIMETZ":	
				return 134;
			case "BYTEA":
				return 13;
			case "CHAR":
				return 129;
			case "VARCHAR":
				return 200;
			case "DATE":
				return 7;
			case "TEXT":
				return 201;
			default: 
				return "";
		}
	}	
}
?>