<?php
class MSSQLInfo extends DBInfo
{
	/**
	 * @return Array
	 */	
	function db_gettablelist()
	{		
		$ret = array();

		$qResult = $this->connectionObj->query( "sp_tables" );
		while( $data = $qResult->fetchAssoc() )
		{
			if( strtoupper($data["TABLE_OWNER"]) != "SYS" && strtoupper($data["TABLE_OWNER"]) != "INFORMATION_SCHEMA")
				$ret[] = $data["TABLE_OWNER"].".".$data["TABLE_NAME"];
		}
		
		return $ret;
	}
	
	/**
	 * @param String strSQL
	 * @return Array
	 */	
	function db_getfieldslist($strSQL)
	{		
		$res = array();

		$qResult = $this->connectionObj->query( $strSQL );
		$qHandle = $qResult->getQueryHandle();
		
		$fieldsNumber = $qResult->numFields();
		for($i = 0; $i < $fieldsNumber; $i++) 
		{
			$ntype = $qHandle->Fields[ $i ]->Type;
			
			$res[ $i ] = array("fieldname" => $qResult->fieldName( $i ), "type" => $ntype, "not_null" => 0); 
		}
		
		return $res;
	}
}
?>