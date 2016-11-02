<?php
class DB2Info extends DBInfo
{	
	/**
	 * @return Array
	 */	
	public function db_gettablelist()
	{	
		$ret = array();
		
		$qResult = $this->connectionObj->query( "select TABNAME from syscat.tables order by 1,2" );
		while( $data = $qResult->fetchAssoc() )
		{
			$ret[] = $data["TABNAME"];
		}

		return $ret;
	}
	
	/**
	 * @param String strSQL
	 * @return Array
	 */	
	public function db_getfieldslist($table)
	{			
		$res = array();
		
		$arr = implode(".", $table);
		$stmt = db2_columns( $this->connectionObj->conn, null , $arr[0] , $arr[1] , '%' ); 
		if ( $stmt ) 
		{
			while( $rowC = db2_fetch_assoc($stmt) ) 
			{
				$ntype = $this->getFieldTypeNumber( $rowC["TYPE_NAME"] );
				$res[ $i ] = array("fieldname" => $rowC["COLUMN_NAME"], "type" => $ntype, "is_nullable" => 0);
			}
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
			case "BIGINT":
				return 20;
			case "BLOB":
				return 205;
			case "CHAR":
				return 13;
			case "CLOB":
				return 201;
			case "DATE":
				return 7;
			case "DECIMAL":
				return 131;
			case "DOUBLE":
				return 5;
			case "INTEGER":
				return 3;
			case "LONG VARCHAR":
				return 200;
			case "REAL":
				return 5;
			case "SMALLINT":
				return 2;
			case "TIME":
				return 134;
			case "TIMESTAMP":
				return 135;
			case "VARCHAR":
				return 200;
			default:
				return "";		
		}
	}	
}
?>