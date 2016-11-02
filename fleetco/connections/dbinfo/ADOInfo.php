<?php
class ADOInfo extends DBInfo
{	
	/**
	 * @return Array
	 */	
	public function db_gettablelist()
	{			
		$ret = array();
		
		$qResult = $this->connectionObj->openSchema( 20 );
		while( $data = $qResult->fetchAssoc() )
		{
			if( $data["TABLE_TYPE"] == "TABLE" || $data["TABLE_TYPE"] == "VIEW" )
				$ret[] = $data["TABLE_NAME"];
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
		$rs = $qResult->getQueryHandle();

		$fieldsNumber = $qResult->numFields();
		for($i = 0; $i < $fieldsNumber; $i++)
		{		
			$res[$i] = array("fieldname" => $rs->Fields[$i]->Name, "type" => $rs->Fields[$i]->Type, "is_nullable" => 0);
		}
		return $res;
	}	
}
?>