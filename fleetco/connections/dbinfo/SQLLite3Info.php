<?php
class SQLLite3Info extends DBInfo
{
	/**
	 * @return Array
	 */
	public function db_gettablelist()
	{	
		$ret = array();
		
		$qResult = $this->connectionObj->query( "SELECT tbl_name FROM sqlite_master WHERE type='table' ORDER BY name" );
		while( $data = $qResult->fetchAssoc() )
		{
			$ret[] = $data["tbl_name"];
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

		$qResult =  $this->connectionObj->query( $strSQL );
		$fieldsNumber = $qResult->numFields();
		for($i = 0; $i < $fieldsNumber; $i++)
		{
			$res[ $i ] = array("fieldname" => $qResult->fieldName( $i ), "type"=> 202, "is_nullable" => 0); 
		}
		return $res;
	}
}
?>