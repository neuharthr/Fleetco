<?php
class Button
{
	var $keys = array();
	
	var $currentKeys = array();
	
	var $selectedKeys = array();
	
	var $isManyKeys = false;
	
	var $isGetNext = false;
	
	var $location = "";
	
	var $nextInd;
	
	function __construct(&$params)
	{
		RunnerApply($this, $params);
		
		$this->nextInd = 0;
		$this->modifyKeys();
		$this->separateKeys();
	}
	/**
	 * Separate modified post keys to current and selected  
	 */
	function separateKeys()
	{
		if($this->location == 'grid')
		{
			if($this->isManyKeys) 
			{
				$this->currentKeys = $this->keys[0];
				for($i=1; $i<count($this->keys); $i++)
					$this->selectedKeys[$i-1] = $this->keys[$i]; 
			}
			else
				$this->currentKeys = $this->keys;
		}
		if($this->location == PAGE_LIST)
			$this->selectedKeys = $this->keys;
		
		if($this->location == PAGE_EDIT || $this->location == PAGE_VIEW)
			$this->currentKeys = $this->keys;
	}
	/**
	 * Modify post keys array to associative 
	 */
	function modifyKeys()
	{
		global $strTableName, $gSettings;
		
		$keys = array();
		
		// if array of keys exists
		if(count($this->keys))
		{
			$tKeysNamesArr = $gSettings->getTableKeys();
			if($this->isManyKeys)
			{
				foreach ($this->keys as $ind => $value)
				{
					$keys[$ind] = array();
					$recKeyArr = explode('&', $value);
					for($j=0;$j<count($tKeysNamesArr);$j++)
					{
						if (isset($recKeyArr[$j])){
							$keys[$ind][$tKeysNamesArr[$j]] = urldecode($recKeyArr[$j]);
						}
					}
				}
			}
			elseif(count($this->keys))
			{
				for($j=0;$j<count($tKeysNamesArr);$j++)
				{
					$keys[$tKeysNamesArr[$j]] = urldecode(@$this->keys[$j]);
				}
			}
		}
		$this->keys = $keys;
	}
	/**
	 * Get keys
	 * @return {array} 
	 */
	function getKeys()
	{
		return $this->keys;
	}	
	/**
	 * Get current record data
	 *
	 * @return {mixed} array of next record data or false
	 */
	function getCurrentRecord()
	{
		return $this->getRecordData();
	}
	/**
	 * Get next selected record
	 *
	 * @return {mixed} array of next record data or false
	 */
	function getNextSelectedRecord()
	{
		if($this->nextInd < count($this->selectedKeys))
		{
			$this->isGetNext = true;
			return $this->getRecordData();
		}
		else
			return false;
	}
	/**
	 * Read values from the database by keys
	 *
	 * @return {mixed} array of current record data or false
	 */
	function getRecordData()
	{
		global $gSettings, $gQuery, $cipherer, $strTableName, $cman;
	
		if($this->location!=PAGE_EDIT && $this->location!=PAGE_VIEW && $this->location!=PAGE_LIST && $this->location!='grid' && !$next)
			return false;
		
		$connection = $cman->byTable( $strTableName );
		
		if($this->isGetNext)
		{
			$this->isGetNext = false;
			$keys = $this->selectedKeys[$this->nextInd];
			$this->nextInd=$this->nextInd+1;
		}
		else
			$keys = $this->currentKeys;
		
		$strWhereClause = KeyWhere($keys);
		if($gSettings->getAdvancedSecurityType()!=ADVSECURITY_ALL)
		{
			if($this->location == PAGE_EDIT)
				$strWhereClause = whereAdd($strWhereClause, SecuritySQL("Edit"));
			else
				$strWhereClause = whereAdd($strWhereClause, SecuritySQL("Search"));
		}
		
		$strSQL = $gQuery->gSQLWhere($strWhereClause);
		
		$strSQLbak = $strSQL;
		
		if($strSQLbak == $strSQL)
			$strSQL = $gQuery->gSQLWhere($strWhereClause);
		
		LogInfo($strSQL);
		
		$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
		$res = array(); // .net compatibility
		foreach($data as $fName => $val)
		{
			$res[$fName] = $val;
			$isBlobField = false;
			if($this->location == PAGE_EDIT)
			{
				$editFormat = $gSettings->getEditFormat($fName);
				if($editFormat == EDIT_FORMAT_DATABASE_FILE || $editFormat==EDIT_FORMAT_DATABASE_IMAGE)
					$isBlobField = true;
				
				if(@$_POST["a"]!= "edited" && $gSettings->getAutoUpdateValue($fName))
					$res[$fName] = $gSettings->getAutoUpdateValue($fName);
			}
			else
			{
				$viewFormat = $gSettings->getViewFormat($fName);
				if($viewFormat == FORMAT_DATABASE_FILE || $viewFormat == FORMAT_DATABASE_IMAGE || $viewFormat == FORMAT_FILE_IMAGE)
					$isBlobField = true;
			}
			if($isBlobField)
			{
				if($data[$fName])
					$res[$fName] = true;
				else
					$res[$fName] = false;
			}
		}
		return $res;
	}
}
?>