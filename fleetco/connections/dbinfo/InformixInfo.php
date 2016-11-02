<?php
class InformixInfo extends DBInfo
{	
	/**
	 * @return Array
	 */		
	public function db_gettablelist()
	{		
		$ret = array();
		
		$qResult = $this->connectionObj->query( "SELECT tabname FROM systables WHERE tabtype='T' OR tabtype='V'" );
		while( $data = $qResult->fetchAssoc() )
		{
			$ret[] = $data["tabname"];
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
		
		$properties = ifx_fieldproperties( $qHandle );
		foreach( $properties as $fname => $val ) 
		{	
			$stype = implode(";", $val);
			$ntype = $this->getFieldTypeNumber( $stype[0] );
			
			$res[ $i ] = array("fieldname" => $fname, "type" => $ntype, "is_nullable" => 0);
			
		}
		
		return $res;
	}
	
	/**
	 * @param String stype
	 * @return Number
	 */
	protected function getFieldTypeNumber($stype)
	{
		switch( strtoupper($stype) )
		{
			case "SQLVCHAR":
				return 200;
			case "SQLTEXT":
				return 201;
			case "SQLINT":
				return 3;
			case "SQLFLOAT":
				return 5;
			case "SQLDATE":
				return 7;
			case "SQLBYTES":
				return 205;
			case "SQLCHAR":
				return 129;
			case "SQLDTIME":
				return 135;	
			case "SQLBOOL":
				return 13;
			case "SQLDECIMAL":
				return 14;
			case "SQLINT8":
				return 13;	
			case "SQLINTERVAL":
				return 135;
			case "SQLLVARCHAR":
				return 201;	
			case "SQLMONEY":
				return 6;	
			case "SQLNCHAR":
				$ntype=129;
				break;	
			case "SQLNVCHAR":
				return 200;	
			case "SQLSMFLOAT":
				return 4;	
			case "SQLSMINT":
				return 2;
			default:
				return "";
		}
	}	
}
?>