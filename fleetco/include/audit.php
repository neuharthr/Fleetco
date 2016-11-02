<?php
class AuditTrailTable
{
	var $logTableName="carrier_audit";
	var $params;
	
	var $strLogin="login";
	var $strFailLogin="failed login";
	var $strLogout="logout";
	var $strChPass="change password";
	var $strAdd="add";
	var $strEdit="edit";
	var $strDelete="delete";
	var $strAccess="access";
	var $strKeysHeader="---Keys";
	var $strFieldsHeader="---Fields";
	var $columnDate="Date";
	var $columnTime="Time";
	var $columnIP="IP";
	var $columnUser="User";
	var $columnTable="Table";
	var $columnAction="Action";
	var $columnKey="Key field";
	var $columnField="Field";
	var $columnOldValue="Old value";
	var $columnNewValue="New value";
	var $attLogin=0;
	var $timeLogin=0;
	var $maxFieldLength = 300;

	/**
	 * @type Connection
	 */
	protected $connection;
	
	function __construct()
	{
		global $cman;
		
		$this->connection = $cman->getForAudit();		
		$userid="";
		if(@$_SESSION["UserID"])
			$userid=$_SESSION["UserID"];
			
		$this->params=array($_SERVER["REMOTE_ADDR"],$userid);
	}
	
    function LogLogin($pUsername)
    {
    }
	
    function LogLoginFailed($pUsername)
    {
    }
	
    function LogLogout()
    {
    }
	
    function LogChPassword()
    {
    }
	
    function LogAdd($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strAdd, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($keys as $idx=>$val)
					$str.=$idx." : ".$val."\r\n";
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [new]: ";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$val);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($val,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
					}
				}
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			
			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strAdd, $str);
		}
		return $retval;
    }
	
    function LogEdit($str_table,$newvalues,$oldvalues,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strEdit, $this->params, $table, $keys, $newvalues, $oldvalues);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($newvalues as $idx=>$val)
				{
					if(array_key_exists($idx,$keys))
					{
						if($val!=$oldvalues[$idx])
						{
							$str.=$idx." [old]: ".$oldvalues[$idx]."\r\n";
							$str.=$idx." [new]: ".$val."\r\n";
						}
						else
							$str.=$idx." : ".$val."\r\n";
					}
				}
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				$v="";
				foreach($newvalues as $idx=>$val)
				{
					$type=$pSet->getFieldType($idx);
					if(IsBinaryType($type))
						continue;
					if(IsDateFieldType($type))
					{
						$newvalue=format_datetime_custom(db2time($newvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
						$oldvalue=format_datetime_custom(db2time($oldvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
					}
					else
					{
						$newvalue=$newvalues[$idx];
						$oldvalue=$oldvalues[$idx];
					}
					if($newvalue!=$oldvalue && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [old]: ";
						if(IsBinaryType($type))
							$v="<binary value>";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$oldvalue);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
												
						$strFields.=$idx." [new]: ";
						if(IsBinaryType($type))
							$v="<binary value>";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$newvalue);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
					}
				}
				$v="";
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			
			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strEdit, $str);
		}
		return $retval;
    }
	
    function LogDelete($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strDelete, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($keys as $idx=>$val)
					$str.=$idx." : ".$val."\r\n";
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				$v="";
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [old]: ";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>";
						else
						{	
							$v=str_replace(array("\r\n","\n","\t")," ",$val);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
					}
				}
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			
			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strDelete, $str);
		}
		return $retval;
    }
    
    function LogAddEvent($message,$description="",$stable="")
    {
		global $globalEvents;
		$retval=true;
		$table=$stable;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($message, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $stable, $message, $description);
		}
		return $retval;
    }
	
    function LoginSuccessful()
    {
		if($this->attLogin>0 && $this->timeLogin>0)
		{
			$where = $this->connection->addFieldWrappers("ip"). "=" .$this->connection->prepareString($_SERVER["REMOTE_ADDR"]). 
				" AND " .$this->connection->addFieldWrappers("action"). "=" .$this->connection->prepareString($this->strAccess);
			$sql = "DELETE FROM " .$this->connection->addTableWrappers( $this->logTableName ). " WHERE " .$where;
			
			$this->connection->exec( $sql );
		}
		
    }
	
    function LoginUnsuccessful($pUsername)
    {
		if($this->attLogin>0 && $this->timeLogin>0)
		{
			$this->insert(now(), $_SERVER["REMOTE_ADDR"], $pUsername, "", $this->strAccess, "");
		}
    }
    
	function LoginAccess()
	{
		if( $this->attLogin > 0 && $this->timeLogin > 0 )
		{
			$where = $this->connection->addFieldWrappers("ip"). "=" .$this->connection->prepareString($_SERVER["REMOTE_ADDR"]). 
				" AND " .$this->connection->addFieldWrappers("action"). "=".$this->connection->prepareString("access");
			$orderBy = $this->connection->addFieldWrappers("id")." asc";
			$sql = "SELECT * FROM " .$this->connection->addTableWrappers( $this->logTableName ). " WHERE " .$where. " ORDER BY " .$orderBy;
			
			$qResult = $this->connection->query( $sql );
			
			$i = 0;
			while( $data = $qResult->fetchAssoc() )
			{
				if( secondsPassedFrom($data["datetime"]) / 60 <= $this->timeLogin )
				{
					if($i==0)
						$firstAccess=$data["datetime"];
					$i+=1;
				}
			}
			
			if( $i >= $this->attLogin )
				return ceil($this->timeLogin-secondsPassedFrom($firstAccess) / 60);
		}

		return false;
	}
	
	function logValueEnable($table)
	{
		if($table=="inventorymaster")
		{
			return false;
		}
		if($table=="creategrn")
		{
			return false;
		}
		if($table=="vehiclemaster")
		{
			return false;
		}
		if($table=="creategrn-issue")
		{
			return false;
		}
		if($table=="inventorymaster-qty")
		{
			return false;
		}
		if($table=="creategrn-receive")
		{
			return false;
		}
		if($table=="fuelmaster")
		{
			return false;
		}
		if($table=="suppliermaster")
		{
			return false;
		}
		if($table=="accidents")
		{
			return false;
		}
		if($table=="maintenenace")
		{
			return false;
		}
		if($table=="fleettype")
		{
			return false;
		}
		if($table=="fuelprices")
		{
			return false;
		}
		if($table=="fuelstationmaster")
		{
			return false;
		}
		if($table=="vehicletype")
		{
			return false;
		}
		if($table=="servicetypemaster")
		{
			return false;
		}
		if($table=="insurance-payments")
		{
			return false;
		}
		if($table=="insuranceclaims")
		{
			return false;
		}
		if($table=="insurancecompany")
		{
			return false;
		}
		if($table=="maintenenace-regularservice")
		{
			return false;
		}
		if($table=="maintenenace-general-repair")
		{
			return false;
		}
		if($table=="maintenenace-accident-repair")
		{
			return false;
		}
		if($table=="vehiclemaster-report")
		{
			return false;
		}
		if($table=="accidents-report")
		{
			return false;
		}
		if($table=="admin_rights")
		{
			return false;
		}
		if($table=="carrierusers")
		{
			return false;
		}
		if($table=="admin_members")
		{
			return false;
		}
		if($table=="admin_users")
		{
			return false;
		}
		if($table=="inventorymaster-pricing")
		{
			return false;
		}
		if($table=="creategrn-remove")
		{
			return false;
		}
		if($table=="creategrn-issuetorebuild")
		{
			return false;
		}
		if($table=="creategrn-receiveafterrebuild")
		{
			return false;
		}
		if($table=="creategrn-issue-rebuilt")
		{
			return false;
		}
		if($table=="fuelmaster-reports")
		{
			return false;
		}
		if($table=="creategrn-stock-balance")
		{
			return false;
		}
		if($table=="rnewalmastertable")
		{
			return false;
		}
		if($table=="otherrenewal")
		{
			return false;
		}
		if($table=="creategrn-disposal")
		{
			return false;
		}
		if($table=="creategrn-remove-other")
		{
			return false;
		}
		if($table=="creategrn-disposal-rebuild")
		{
			return false;
		}
		if($table=="inventorymaster-pricing1")
		{
			return false;
		}
		if($table=="inventorymaster-pricing5")
		{
			return false;
		}
		if($table=="fuelmaster Chart")
		{
			return false;
		}
		if($table=="maintenenace Chart")
		{
			return false;
		}
	}
	
	protected function insert($datetime, $ip, $user, $table, $action, $description)
	{
		$sql = "INSERT INTO " .$this->connection->addTableWrappers( $this->logTableName ).
			" (" .$this->connection->addFieldWrappers("datetime").
			"," .$this->connection->addFieldWrappers("ip").
			"," .$this->connection->addFieldWrappers("user").
			"," .$this->connection->addFieldWrappers("table"). 
			"," .$this->connection->addFieldWrappers("action").
			"," .$this->connection->addFieldWrappers("description").
			") VALUES (" .$this->connection->addDateQuotes($datetime).
			"," .$this->connection->prepareString($ip). 
			"," .$this->connection->prepareString($user).
			"," .$this->connection->prepareString($table).
			"," .$this->connection->prepareString($action). 
			"," .$this->connection->prepareString($description).
			")";
		
		return $this->connection->exec( $sql );
	}
}

class AuditTrailFile
{
	var $logfile="audit.log";
	var $strLogin="login";
	var $strFailLogin="failed login";
	var $strLogout="logout";
	var $strChPass="change password";
	var $strAdd="add";
	var $strEdit="edit";
	var $strDelete="delete";
	var $strAccess="access";
	var $strKeysHeader="---Keys";
	var $strFieldsHeader="---Fields";
	var $columnDate="Date";
	var $columnTime="Time";
	var $columnIP="IP";
	var $columnUser="User";
	var $columnTable="Table";
	var $columnAction="Action";
	var $columnKey="Key field";
	var $columnField="Field";
	var $columnOldValue="Old value";
	var $columnNewValue="New value";
	var $params;
	var $maxFieldLength = 300;
	
	function __construct()
	{
		$userid="";
		if(@$_SESSION["UserID"])
			$userid=$_SESSION["UserID"];
		$this->params=array($_SERVER["REMOTE_ADDR"],$userid);
	}
	
    function LogLogin($pUsername)
    {
		    }
	
    function LogLoginFailed($pUsername)
    {
		    }
	
    function LogLogout()
    {
    }
	
    function LogChPassword()
    {
    }
	
    function LogAdd($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strAdd, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}

			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strAdd.chr(9).$key;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$v="";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>"."\r\n";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$val);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$str_add.=$str.chr(9).$idx.chr(9).chr(9).$v."\r\n";
					}
				}
			}
			else
				$str_add.=$str."\r\n";
			
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }
	
    function LogEdit($str_table,$newvalues,$oldvalues,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strEdit, $this->params, $table, $keys, $newvalues, $oldvalues);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}

			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strEdit.chr(9).$key;
			$putsValue=true;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($newvalues as $idx=>$val)
				{
					$type=$pSet->getFieldType($idx);
					if(IsBinaryType($type))
						continue;
					if(IsDateFieldType($type))
					{
						$newvalue=format_datetime_custom(db2time($newvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
						$oldvalue=format_datetime_custom(db2time($oldvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
					}
					else
					{
						$newvalue=$newvalues[$idx];
						$oldvalue=$oldvalues[$idx];
					}
					if($newvalue!=$oldvalue)
					{
						$v1="";
						if(IsBinaryType($type))
							$v1="<binary value>";
						else
						{
							$v1=str_replace(array("\r\n","\n","\t")," ",$oldvalue);
							if(strlen($v1)>$this->maxFieldLength)
								$v1=runner_substr($v1,0,$this->maxFieldLength);
						}
						
						$v2="";
						if(IsBinaryType($type))
							$v2="<binary value>";
						else
						{
							$v2=str_replace(array("\r\n","\n","\t")," ",$newvalue);
							if(strlen($v2)>$this->maxFieldLength)
								$v2=runner_substr($v2,0,$this->maxFieldLength);
						}
						$str_add.=$str.chr(9).$idx.chr(9).$v1.chr(9).$v2."\r\n";
					}
				}
			}
			else
				$str_add.=$str."\r\n";
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }
	
    function LogDelete($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strDelete, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strDelete.chr(9).$key;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					$v="";
					if(IsBinaryType($pSet->getFieldType($idx)))
						$v="<binary value>";
					else
					{
						$v=str_replace(array("\r\n","\n","\t")," ",$val);
						if(strlen($v)>$this->maxFieldLength)
							$v=runner_substr($v,0,$this->maxFieldLength);
					}
					$str_add.=$str.chr(9).$idx.chr(9).$v."\r\n";
				}
			}
			else
				$str_add=$str."\r\n";
				
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }
	
	function writeToLogFile( $str )
	{
		$p=strrpos($this->logfile,".");
		$logfileName=runner_substr($this->logfile,0,$p);
		$logfileExt=runner_substr($this->logfile,$p+1, strlen($this->logfile)-1);
		$tn=$logfileName."_".format_datetime_custom(db2time(now()),"yyyyMMdd").".".$logfileExt;
		
		$fullname = getabspath($tn);
		$fsize = 0;
		if (file_exists($fullname)){
			$fsize = filesize($fullname);
		}
		$str_to_append = "";
		if( !$fsize )
		{
			$str_to_append = $this->columnDate.chr(9).$this->columnTime.chr(9).$this->columnIP.chr(9).$this->columnUser.chr(9).$this->columnTable.chr(9).$this->columnAction.chr(9).$this->columnKey.chr(9).$this->columnField.chr(9).$this->columnOldValue.chr(9).$this->columnNewValue."\r\n";
		}
		$str_to_append .= $str;
		append_to_file( $fullname, $str_to_append );
		
	}
	
	function LogAddEvent($message,$description="",$str_table="")
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($message, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$params[0].chr(9).$params[1].chr(9).$table.chr(9).$message.chr(9).$description."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }
    
    function LoginAccess()
	{
		return false;
	}
	
	function LoginSuccessful()
    {
		return true;
    }
	
    function LoginUnsuccessful($pUsername)
    {	
		return true;
	}
	
	function logValueEnable($table)
	{
		if($table=="inventorymaster")
		{
			return false;
		}
		if($table=="creategrn")
		{
			return false;
		}
		if($table=="vehiclemaster")
		{
			return false;
		}
		if($table=="creategrn-issue")
		{
			return false;
		}
		if($table=="inventorymaster-qty")
		{
			return false;
		}
		if($table=="creategrn-receive")
		{
			return false;
		}
		if($table=="fuelmaster")
		{
			return false;
		}
		if($table=="suppliermaster")
		{
			return false;
		}
		if($table=="accidents")
		{
			return false;
		}
		if($table=="maintenenace")
		{
			return false;
		}
		if($table=="fleettype")
		{
			return false;
		}
		if($table=="fuelprices")
		{
			return false;
		}
		if($table=="fuelstationmaster")
		{
			return false;
		}
		if($table=="vehicletype")
		{
			return false;
		}
		if($table=="servicetypemaster")
		{
			return false;
		}
		if($table=="insurance-payments")
		{
			return false;
		}
		if($table=="insuranceclaims")
		{
			return false;
		}
		if($table=="insurancecompany")
		{
			return false;
		}
		if($table=="maintenenace-regularservice")
		{
			return false;
		}
		if($table=="maintenenace-general-repair")
		{
			return false;
		}
		if($table=="maintenenace-accident-repair")
		{
			return false;
		}
		if($table=="vehiclemaster-report")
		{
			return false;
		}
		if($table=="accidents-report")
		{
			return false;
		}
		if($table=="admin_rights")
		{
			return false;
		}
		if($table=="carrierusers")
		{
			return false;
		}
		if($table=="admin_members")
		{
			return false;
		}
		if($table=="admin_users")
		{
			return false;
		}
		if($table=="inventorymaster-pricing")
		{
			return false;
		}
		if($table=="creategrn-remove")
		{
			return false;
		}
		if($table=="creategrn-issuetorebuild")
		{
			return false;
		}
		if($table=="creategrn-receiveafterrebuild")
		{
			return false;
		}
		if($table=="creategrn-issue-rebuilt")
		{
			return false;
		}
		if($table=="fuelmaster-reports")
		{
			return false;
		}
		if($table=="creategrn-stock-balance")
		{
			return false;
		}
		if($table=="rnewalmastertable")
		{
			return false;
		}
		if($table=="otherrenewal")
		{
			return false;
		}
		if($table=="creategrn-disposal")
		{
			return false;
		}
		if($table=="creategrn-remove-other")
		{
			return false;
		}
		if($table=="creategrn-disposal-rebuild")
		{
			return false;
		}
		if($table=="inventorymaster-pricing1")
		{
			return false;
		}
		if($table=="inventorymaster-pricing5")
		{
			return false;
		}
		if($table=="fuelmaster Chart")
		{
			return false;
		}
		if($table=="maintenenace Chart")
		{
			return false;
		}
	}
}
?>