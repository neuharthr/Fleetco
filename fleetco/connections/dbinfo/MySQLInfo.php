<?php
class MySQLInfo extends DBInfo
{
	/**
	 * @return Array
	 */	
	public function db_gettablelist()
	{		
		$ret = array();
		
		$qResult = $this->connectionObj->query( "select DATABASE() as dbname" );
		$data = $qResult->fetchAssoc(); 
		if( !$data )
			return $ret;
		
		$dbname = $data["dbname"];
		
		$qResult = $this->connectionObj->query( "SELECT VERSION() as mysql_version" );
		$data = $qResult->fetchAssoc();  
		$server_info = $data ? $data["mysql_version"] : 0;
		
		if( $server_info >= 5 )
		{

			$qResult = $this->connectionObj->query( "SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = '".$dbname."'" );
			while( $data = $qResult->fetchAssoc() )
			{
				$ret[] = $data["TABLE_NAME"];
			}
			
			$qResult = $this->connectionObj->query( "SELECT TABLE_NAME FROM information_schema.VIEWS WHERE TABLE_SCHEMA = '".$dbname."'" );
			while( $data = $qResult->fetchAssoc() )
			{	
				if( !in_array($data["TABLE_NAME"], $ret) )
					$ret[] = $data["TABLE_NAME"];
			}
			
			sort( $ret );
		}
		else
		{
			$qResult = $this->connectionObj->query( "SHOW tables" );
			while( $data = $qResult->fetchNumeric() )
			{
				$ret[] = $data[0];
			}
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
		$qHandle = $qResult->getQueryHandle();
		
		$fieldsNumber = $qResult->numFields();
		for($i = 0; $i < $fieldsNumber; $i++) 
		{		
			$stype = mysql_field_type($qHandle, $i);
			if( $stype == "blob" )
			{
				$flags = mysql_field_flags($qHandle, $i);
				if( strpos($flags, "binary") === false )
					$stype = "text";
			}

			$ntype = $this->getFieldTypeNumber( $stype );
			
			$res[$i] = array("fieldname" => $qResult->fieldName( $i ), "type" => $ntype, "not_null" => 0);
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
			case "STRING":
				return 200;
			case "INT":
				return  3;
			case "REAL":
				return 5;
			case "TIMESTAMP":
				return 135;;
			case "YEAR":
				return 3;
			case "DATE":
				return 7;
			case "TIME":
				return 134;
			case "DATETIME":
				return 135;
			case "BLOB":
				return 128;
			case "TEXT":
				return 201;
			default:
				return "";
		}
	}
}
?>