<?php
class MySQLiInfo extends DBInfo
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

		$qResult = $this->connectionObj->query( "SELECT VERSION() as mysqli_version" );
		$data = $qResult->fetchAssoc();  		
		$server_info = $data ? $data["mysqli_version"] : 0;
		
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
			
			sort($ret);
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
	 * @param String stype
	 * @return Number
	 */		
	public function db_getfieldslist( $strSQL )
	{		
		$res = array();
		
		$rs = mysqli_query( $this->connectionObj->conn, $strSQL );
		while( $finfo = mysqli_fetch_field($rs) ) 
		{
			$stype = $this->getFieldTypeNumber( $finfo->type, $finfo->flags );
			
			$res[] = array("fieldname" => $finfo->name, "type" => $stype, "not_null" => 0);
		}
		$rs->close();
		
		return $res;
	}
	
	/**
	 * @param String stype
	 * @param  String flags
	 * @return Number
	 */
	protected function getFieldTypeNumber( $stype, $flags )
	{
		switch($stype)
		{
			case 0:
			case 246:
				return 14;
			case 1:
			case 2:				
				return 2;
			case 3:
			case 8:
			case 9:
			case 13:				
				return 3;
			case 4:
			case 5:				
				return 5;
			case 7:
			case 12:
			case 14:				
				return 135;
			case 10:
				return 7;
			case 11:
				return 134;
			case 253:
				return 200;
			case 247:
			case 248:					
				return 129;
			case 249:
			case 250:
			case 251:
			case 252:				
				if( is_numeric($flags) && $flags & 16 && $flags & 128 || strpos($flags, "binary") !== false)
					return 128;

				return 201;
			case 254:
				return 129;
			default:
				return 13;
		}
	}
}
?>