<?php
class oLocking
{
	var $lockTableName = "carrier_locking";
	var $ConfirmTime=250;
	var $UnlockTime=300;
	var $ConfirmAdmin;
	var $ConfirmUser;
	var $LockAdmin;
	var $LockUser;
	var $UserID;
	
	/**
	 * @type Connection
	 */
	protected $connection;
	
	/**
	 * @constructor
	 */
	function __construct()
	{
		global $cman;
		
		$this->ConfirmAdmin = mlang_message("LOCK_ADMIN_ABORTED");
		$this->ConfirmUser = mlang_message("LOCK_TIMED_OUT");
		$this->LockAdmin = mlang_message("LOCK_RECORD_EDITED_BY");
		$this->LockUser = mlang_message("LOCK_RECORD_EDITED");
		
		$this->connection = $cman->getForLocking();	
		
		if(isset($_SESSION["UserID"]) && !is_null($_SESSION["UserID"]))
			$this->UserID = $_SESSION["UserID"];
		else
			$this->UserID = "Guest";
	}

	function LockRecord($strtable,$keys)
	{
		$skeys = "";
		foreach($keys as $ind=>$val)
		{
			if(strlen($skeys))
				$skeys.="&";
			$skeys.=rawurlencode($val);
		}
			
		$sdate = now();

		//	add a record - try to lock
		$this->insert($strtable, $sdate, $sdate, $skeys, session_id(), $this->UserID, 1);

		$arrDelete = array();
		//	check all locking records
		$where = $this->connection->addFieldWrappers("table")."=".$this->connection->prepareString($strtable)
			." AND ".$this->connection->addFieldWrappers("keys")."=".$this->connection->prepareString($skeys)
			." AND ".$this->connection->addFieldWrappers("action")."=1";
			
		$qResult = $this->query( $where, $this->connection->addFieldWrappers("id")." asc" );
		while( $data = $qResult->fetchAssoc() )
		{
			if(secondsPassedFrom($data["confirmdatetime"])>$this->UnlockTime)
			{
				//	locking record is expired
				$arrDelete[]=$data["id"];
			}
			else
			{
				//	delete expired records
				foreach($arrDelete as $ind=>$val)
				{
					$this->delete($this->connection->addFieldWrappers("id"). "=" .$val);
				}
				
				if($data["sessionid"]==session_id())
				{
					//	locking was successful
					return true;
				}
				else
				{
					//	record is already locked, delete locking attempt
					$where = $this->connection->addFieldWrappers("sessionid"). "=" .$this->connection->prepareString(session_id()) ." AND ".
						$this->connection->addFieldWrappers("action"). "=1" ." AND ".
						$this->connection->addFieldWrappers("table"). "=" .$this->connection->prepareString($strtable) ." AND ".
						$this->connection->addFieldWrappers("keys"). "=" .$this->connection->prepareString($skeys);
					
					$this->delete($where);
					return false;
				}
			}
		}
		return false;
	}

	function UnlockRecord($strtable,$keys,$sid)
	{
		if($sid=="")
			$sid=session_id();
		$skeys="";
		foreach($keys as $ind=>$val)
		{
			if(strlen($skeys))
				$skeys.="&";
			$skeys.=rawurlencode($val);
		}
		
		$where = $this->connection->addFieldWrappers("sessionid"). "=" .$this->connection->prepareString($sid) ." AND ".
			$this->connection->addFieldWrappers("action"). "=1 AND ".
			$this->connection->addFieldWrappers("table"). "=" .$this->connection->prepareString($strtable) ." AND ".
			$this->connection->addFieldWrappers("keys"). "=" .$this->connection->prepareString($skeys);
		
		$this->delete($where);
	}
	
	function ConfirmLock($strtable,$keys,&$message)
	{
		$skeys="";
		foreach($keys as $ind=>$val)
		{
			if(strlen($skeys))
				$skeys.="&";
			$skeys.=rawurlencode($val);
		}

		//	add locking attempt
		$sdate = now();
		$this->insert($strtable, $sdate, $sdate, $skeys, session_id(), $this->UserID, 1);
		
		$where = $this->connection->addFieldWrappers("table")."=".$this->connection->prepareString($strtable)
			." AND ".$this->connection->addFieldWrappers("keys")."=".$this->connection->prepareString($skeys)
			." AND ".$this->connection->addFieldWrappers("action")."=1";
		
		$qResult = $this->query( $where, $this->connection->addFieldWrappers("id")." asc" );
		
		$myfound=0;	// total our records found
		$newid=0;	//	last our record - added 5 lines ago
		$oldid=0;	//	next to last our record
		$newdate="";	//	last our confirm time
		$olddate="";	//	next to last our confirm time
		
		$otherfound=0;	// other's records found between out last and next to last
		$tempfound=0;	

		//	check all locking records, count records
		while( $data = $qResult->fetchAssoc() )
		{
			if($data["sessionid"]==session_id())
			{
				$oldid=$newid;
				$newid=$data["id"];
				$newdate=$data["confirmdatetime"];
				$olddate=$newdate;
				$myfound++;
				$otherfound=$tempfound;
				$tempfound=0;
				continue;
			}
			$tempfound++;
		}
		if($myfound>1 && !$otherfound)
		{
			//	no other's records, locking is confirmed
			$this->update($this->connection->addFieldWrappers("confirmdatetime"). "=" .$this->connection->addDateQuotes(now()),
				$this->connection->addFieldWrappers("id"). "=" .$oldid);
			
			$this->delete($this->connection->addFieldWrappers("id"). "=" .$newid);
			return true;
		}
		elseif($myfound>1 && $otherfound)
		{
			//	found some other's records
			//	check if previous record is not expired
			if(secondsPassedFrom($olddate)>$this->UnlockTime-5)
			{
				//	expired - delete locking record, confirm was not successful
				$this->UnlockRecord($strtable,$keys,session_id());
				$message=$this->ConfirmUser;
				return false;
			}
			else
			{
				//	not expired, locking is confirmed
				$this->update($this->connection->addFieldWrappers("confirmdatetime"). "=" .$this->connection->addDateQuotes(now()),
					$this->connection->addFieldWrappers("id"). "=" .$oldid);
				
				$this->delete($this->connection->addFieldWrappers("id"). "=" .$newid);
				return true;
			}
		}
		else
		{
			//	locking was lost
			$this->UnlockRecord($strtable,$keys,session_id());
			//	check if locking was removed by admin or not
			$where = $this->connection->addFieldWrappers("table")."=".$this->connection->prepareString($strtable)
				." AND ".$this->connection->addFieldWrappers("keys")."=".$this->connection->prepareString($skeys)
				." AND ".$this->connection->addFieldWrappers("sessionid")."<>'".session_id()
				."' AND ".$this->connection->addFieldWrappers("action")."=2";
			
			if($data = $this->query( $where, $this->connection->addFieldWrappers("id")." asc" )->fetchAssoc())
				$message = mysprintf($this->ConfirmAdmin,array($data["userid"]));
			else
				$message = $this->ConfirmUser;
			
			$where = $this->connection->addFieldWrappers("action"). "=2 AND ".
				$this->connection->addFieldWrappers("table"). "=" .$this->connection->prepareString($strtable) ." AND ".
				$this->connection->addFieldWrappers("keys"). "=" .$this->connection->prepareString($skeys);
			
			$this->delete($where);
			
			return false;
		}
	}
	
	function GetLockInfo($strtable,$keys,$links, $pageid)
	{
		$page=GetTableLink(GetTableURL($strtable), "edit");
		$skeys="";
		foreach($keys as $ind=>$val){
			if(strlen($skeys))
				$skeys.="&";
			$skeys.=rawurlencode($val);
		}
		
		$where = $this->connection->addFieldWrappers("table")."=".$this->connection->prepareString($strtable)
			." AND ".$this->connection->addFieldWrappers("keys")."=".$this->connection->prepareString($skeys)
			." AND ".$this->connection->addFieldWrappers("sessionid")."<>'".session_id()
			."' AND ".$this->connection->addFieldWrappers("action")."=1";
		
		$qResult = $this->query( $where, $this->connection->addFieldWrappers("id")." asc" );
		if( $data = $qResult->fetchAssoc() )
		{
			$sdate = now();
			$arrDateTime = db2time($data["startdatetime"]);
			
			$str = mysprintf($this->LockAdmin,array($data["userid"],round(secondsPassedFrom($data["startdatetime"])/60,2)));
			if($links){
				$str.='<a class="unlock" href="#" onclick="Runner.pages.PageManager.getAt(\''.runner_htmlspecialchars(jsreplace($strtable)).'\', '.$pageid.').locking.UnlockAdmin(\''
					.runner_htmlspecialchars(jsreplace($skeys)).'\',\''.$data["sessionid"].'\',\'no\');return false;">'.mlang_message("LOCK_UNLOCK").'</a>';
				$str.='<a class="edit" href="#" onclick="Runner.pages.PageManager.getAt(\''.runner_htmlspecialchars(jsreplace($strtable)).'\', '.$pageid.').locking.UnlockAdmin(\''
					.runner_htmlspecialchars(jsreplace($skeys)).'\',\''.$data["sessionid"].'\',\'yes\');$(\'#saveButton'.$pageid.'\').removeClass(\'disabled\');return false;">'.mlang_message("LOCK_EDIT").'</a>';
			}
			return $str;
		}
		
		return "";
	}
	
	function UnlockAdmin($strtable, $keys, $startEdit)
	{
		$skeys = "";
		foreach($keys as $ind=>$val)
		{
			if(strlen($skeys))
				$skeys .= "&";
			$skeys .= rawurlencode($val);
		}
		$sdate = now();
		if($startEdit)
		{
			//	add a record - lock
			$this->insert($strtable, $sdate, $sdate, $skeys, session_id(), $this->UserID, 1);
		}
		//	delete all other locking records 
		$where = $this->connection->addFieldWrappers("table")."=".$this->connection->prepareString($strtable)
			." AND ".$this->connection->addFieldWrappers("keys")."=".$this->connection->prepareString($skeys)
			." AND ".$this->connection->addFieldWrappers("action")."=1 AND ".$this->connection->addFieldWrappers("sessionid")."<>".$this->connection->prepareString(session_id());
		
		$this->delete( $where );	
		
		//	inform other users that their locking were removed by locking
		$where = $this->connection->addFieldWrappers("startdatetime")."<".$this->connection->addDateQuotes(format_datetime_custom( adddays(db2time(now()), -2), "yyyy-MM-dd HH:mm:ss" ))
			." AND ".$this->connection->addFieldWrappers("action")."=2";
		
		$this->delete( $where );
		
		$this->insert($strtable, $sdate, $sdate, $skeys, session_id(), $this->UserID, 2);
	}
	
	/**
	 * Check if there is any record with particular
	 * fields' values in the 'locking' table
	 * @param String table
	 * @param String keys
	 * @param String action
	 * @return Boolean
	 */
	public function isLocked( $table, $keys, $action )
	{		
		$lockSQL = "select count(*) from ". $this->connection->addTableWrappers( $this->lockTableName )
			." where ". $this->connection->addFieldWrappers("keys") ."=". $this->connection->prepareString( $lockWhere )
			." AND ". $this->connection->addFieldWrappers("table") ."=". $this->connection->prepareString( $table )
			." AND ". $this->connection->addFieldWrappers("action") ."=". $action;
		
		$lockSet = $this->connection->query( $lockSQL )->fetchNumeric();
		return $lockSet[0] > 0;
	}
	
	protected function insert($table, $startdatetime, $confirmdatetime, $keys, $sessionid, $userid, $action)
	{
		$sql = "INSERT INTO " .$this->connection->addTableWrappers( $this->lockTableName ).
			" (" .$this->connection->addFieldWrappers("table").
			"," .$this->connection->addFieldWrappers("startdatetime").
			"," .$this->connection->addFieldWrappers("confirmdatetime").
			"," .$this->connection->addFieldWrappers("keys"). 
			"," .$this->connection->addFieldWrappers("sessionid").
			"," .$this->connection->addFieldWrappers("userid").
			"," .$this->connection->addFieldWrappers("action").
			") VALUES (" .$this->connection->prepareString($table).
			"," .$this->connection->addDateQuotes($startdatetime).
			"," .$this->connection->addDateQuotes($confirmdatetime).
			"," .$this->connection->prepareString($keys). 
			"," .$this->connection->prepareString($sessionid).
			"," .$this->connection->prepareString($this->UserID).
			"," .$action.
			")";
		
		return $this->connection->exec( $sql );
	}
	
	protected function query($where, $orderBy)
	{
		if(!$where)
			return;
		
		$sql = "SELECT * FROM " .$this->connection->addTableWrappers( $this->lockTableName ). " WHERE " .$where. " ORDER BY " .$orderBy;
		
		return $this->connection->query( $sql );
	}
	
	protected function delete($where)
	{
		if(!$where)
			return;
		
		$sql = "DELETE FROM " .$this->connection->addTableWrappers( $this->lockTableName ). " WHERE " .$where;
		
		$this->connection->exec( $sql );
	}
	
	protected function update($values, $where)
	{
		if(!$where || !$values)
			return;
		
		$sql = "UPDATE " .$this->connection->addTableWrappers( $this->lockTableName ). " SET " .$values. " WHERE " .$where;
		
		$this->connection->exec( $sql );
	}
}
?>