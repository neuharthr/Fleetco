<?php
if($_SERVER['PHP_SELF'] == '/'.GetTableLink("ciphcoding"))
{
	echo "<!DOCTYPE html>
		  <html>
			<head>
				<style type='text/css'>
					div#message {
						width: 300px;
						height: 50px auto;
						background: #fff;
						border-radius: 10px;
						margin: 100px auto 10px;
						box-shadow: 10px 20px 30px rgba(0,0,0,0.4);
						text-align: left;
						padding: 10px 20px 10px 20px;
						font: 14px Arial, sans-serif;
					}								
				</style>
			</head>
			<body style='background: #bbb'>				         
				<div id='message'> 
					<h3> How-to </h3>	
					<p> Add the following line to the 'Before process' event of your list page: </p> 
					<hr />
					<p> &nbsp;&nbsp;include_once(\"ciphcoding.php\");</p>
					<hr />
					<p> Run you list page that contains encrypted fields with 'ciphcoding=1' parameter,  eg:</p>
					<hr />
					<p> &nbsp;&nbsp;".GetTableLink("mytable_list", "", "ciphcoding=1")."</p>
					<hr />
							
				</div>
			</body>    
		  </html>
	";  
	exit();
}

if(postvalue("ciphcoding"))
{
	global  $cman, $gSettings, $strTableName, $strOriginalTableName;
	
	$_connection = $cman->byTable( $strTableName );
	$origTableName = $strOriginalTableName;
	$goodTableName = GetTableURL($strTableName);
	
	$fieldsList = $gSettings->getFieldsList();
	
	if(isset($fieldArray) && count($fieldArray)>0)
	{
		foreach($fieldArray as $key=>$field)
		{
			if(in_array($field,$fieldsList))
			{
				$fieldType = $gSettings->getFieldType($field);
				if(!IsCharType($fieldType))
					unset($fieldArray[$key]);
			}
			else
				unset($fieldArray[$key]);
		}
	}
	
	if(!isset($fieldArray) || count($fieldArray) == 0) 
	{
		foreach($fieldsList as $field)
		{
			if($pageObject->cipherer->isFieldEncrypted($field))
				$fieldArray[] = $field;
		}
	}

	if( !isset($fieldArray) || count($fieldArray) == 0 )
		HeaderRedirect($goodTableName, "list");
		
	if( !postvalue("ajax") ) 
	{
		$keyFields = array();
		$query = $gSettings->getSQLQuery();

		$qResult = $_connection->query( $query->tosql() );
		while( $data = $qResult->fetchAssoc() )
		{
			$items = array();
			foreach($gSettings->getTableKeys() as $name)
			{
				$items[ $name ] = $data[ $name ];
			}
			$keyFields[] = $items;       
		}
		
		$action = array();
		foreach($fieldArray as $field)
		{
			$action[ GoodFieldName($field) ] = postvalue( GoodFieldName($field) );
		}
		echo "<!DOCTYPE html>
		  <html>
			<head>
				<title> Ciphcoding </title>
				<script src='".GetRootPathForResources("include/jquery.js")."'></script>
				<script type='text/javascript'>
					function initialize () {
						var keyFields = [];
						var fieldArray = [];
						var action = [];
						keyFields = ".my_json_encode($keyFields).";
						fieldArray = ".my_json_encode($fieldArray).";
						action = ".my_json_encode($action).";
						if (keyFields.length > 0) 
						{
							$.post('".GetTableLink($goodTableName, "list")."', {ajax: 1, ciphcoding: '".postvalue("ciphcoding")."', keyfields: keyFields,fieldarray: fieldArray,action: action}, function (data) {
								if (data == ''){
									$('#inf').html('<p>Error</p>');
								}
								else
								{
									if(data!='OK')
										$('#inf').html('<p>'+data+'</p>');
									else
										$('#inf').html('<p>Ready</p>');
								}
							});  
						}  
						else {
							$('#inf').html('<p>No records</p>');
						}
					}    
				</script>
				<style type='text/css'>       
					.runner-btnframe {
						display: inline-block;
						position: relative;
						white-space: nowrap;
						width: auto;
						z-index: 0;
						vertical-align: middle;
						margin: 0 4pt;
						font: 14px Arial, sans-serif;
						height: 30px;		
					}
					div#inf{
						width: 400px;
						background: #fff;
						border-radius: 10px;
						margin: 100px auto 30px auto;
						padding: 10px 10px 10px 10px;
						box-shadow: 10px 20px 30px rgba(0,0,0,0.4);
						text-align: center;
						font: 16px Arial, sans-serif;				
					}		
				</style>
			</head>
			<body style='background: #bbb;' onload='initialize()'>
				<div id='inf'>
				<p>Please wait...</p>	
				</div>
			</body>
		</html>
		";
		exit();
	}
	else 
	{
		$fieldArray = $_POST["fieldarray"];
		if( postvalue("ciphcoding") != "done" )
		{
			$totals = 0;
			
			$qResult = $_connection->query( "select * from ".$_connection->addTableWrappers($origTableName) );
			while( $data = $qResult->fetchAssoc() )
			{
				foreach($fieldArray as $field)
				{
					$value = $data[ $field ];
					$flagCiph = 0;
					//$flagCiph = 2 - not cipherer, $flagCiph = 1 - cipherer, $flagCiph = 0 - empty
					if(is_string($value) and strlen($value) != 0 )
					{
						if($_connection->isEncryptionByPHPEnabled())
						{
							if(strlen($value) % 2 > 0 || preg_match ("/[^0-9a-f]/", $value) == 1)
								$flagCiph = 2;
							else
								$flagCiph = 1;
						}
						else
						{
							if( $_connection->dbType == nDATABASE_MySQL	)
							{
								if(strlen($value) % 2 > 0 || preg_match ("/[^0-9A-F]/", $value) == 1)
									$flagCiph = 2;
								else
									$flagCiph = 1;
							}
							
							if( $_connection->dbType ==  nDATABASE_MSSQLServer	)
							{
								if(ord(substr($value,0,1))!=1 || strlen($value)>1)
									$flagCiph = 2;
								else
									$flagCiph = 1;
							}
							
							if( $_connection->dbType == nDATABASE_PostgreSQL	)
							{							
								if(strlen($value)<24 || substr($value,0,24)!="\\303\\015\\004\\007\\003\\002")
									$flagCiph = 2;
								else
									$flagCiph = 1;
							}
							
							if( $_connection->dbType == nDATABASE_Oracle	)							
								$flagCiph = 2;
						}
						
						if( $flagCiph == 1 )
						{
							if( isset($res[ $field ]["ciph"]) )
								$res[ $field ]["ciph"]++;
							else
								$res[ $field ]["ciph"]=1;
						}
						if( $flagCiph == 2 )
						{
							if( isset($res[ $field ]["notciph"]) )
								$res[ $field ]["notciph"]++;
							else
								$res[ $field ]["notciph"]=1;
						}
					}
				}
				$totals++;
			}
			echo "<form action=".GetTableLink($goodTableName, "list", "ciphcoding=done")." name=act method='POST'>";
			echo "<table width=100%><tr><td colspan=3 align=center><b>Total records: ".$totals."</b></td></tr>";
			
			if( isset($res) )
			{
				echo "<tr><td></td><td><p><b>Fields name</p></b></td><td><b>Not cipherer</b></td><td><b>Cipherer</b></td></tr>";
				foreach($res as $field=>$arr)
				{
					$notciph = 0;
					if( isset($arr["notciph"]) )
						$notciph = $arr["notciph"];
					
					$ciph = 0;
					if( isset($arr["ciph"]) )
						$ciph = $arr["ciph"];
					
					echo "<tr>";
					echo "<td align=left><input type=radio name='".GoodFieldName($field)."' value='all'>All<br>";
					
					if( $_connection->dbType != nDATABASE_Oracle	)						
						echo "<input type=radio name='".GoodFieldName($field)."' value='selected'>Selected<br>";
					
					echo "<input type=radio name='".GoodFieldName($field)."' checked value=''>None";
					echo "<td>".$field."</td><td>".$notciph."</td><td>".$ciph."</td></tr>";
				}
			}
			echo "<tr><td colspan=4><p><table width=60% align=center>";
			echo "<tr><td><p><button class='runner-btnframe' type='button' onclick='document.forms[0].submit();return false;'>Done</button></p></td>";
			echo "<td><p><button class='runner-btnframe' type='button' onclick=\"window.location='".GetTableLink($goodTableName, "list")."'\">Cancel</button></p></td></tr></table></td></tr>";
			echo "</table></form>";
			
			exit();
		}
		else
		{
			unset($res);
			$keyFields = $_POST["keyfields"];
			$actFields = $_POST["action"];
			$fieldArray = $_POST["fieldarray"];
			foreach($keyFields as $keyvalue)
			{
				$cipherer_update = "";
				$where = keyWhere($keyvalue, $strTableName);
				
				$qResult = $_connection->query( "select * from ".$_connection->addTableWrappers($origTableName)." where ".$where );
				$data = $qResult->fetchAssoc();
				if( $data )
				{
					foreach($fieldArray as $field)
					{						
						$ciphcoding = $actFields[ GoodFieldName($field) ];
						if( !$ciphcoding )
							continue;
						
						$value = $data[ $field ];						
						
						$flagCiph = 0;
						if( is_string($value) and strlen($value) != 0 )
						{
							if($_connection->isEncryptionByPHPEnabled())
							{
								if((strlen($value) % 2 > 0 || preg_match ("/[^0-9a-f]/", $value) == 1) && $ciphcoding=="selected" || $ciphcoding=="all")
									$flagCiph = 2;
							}
							else
							{
								if( $_connection->dbType ==  nDATABASE_MySQL )
								{
									if((strlen($value) % 2 > 0 || preg_match ("/[^0-9A-F]/", $value) == 1) && $ciphcoding=="selected" || $ciphcoding=="all")
										$flagCiph = 2;
								}
								
								if( $_connection->dbType ==  nDATABASE_MSSQLServer )
								{								
									if((ord(substr($value,0,1))!=1 || strlen($value)>1) && $ciphcoding=="selected" || $ciphcoding=="all")
										$flagCiph = 2;
								}

								if( $_connection->dbType ==  nDATABASE_PostgreSQL )
								{									
									if((strlen($value)<24 || substr($value,0,24)!="\\303\\015\\004\\007\\003\\002") && $ciphcoding=="selected" || $ciphcoding=="all")
										$flagCiph = 2;

								}
								
								if( $_connection->dbType ==  nDATABASE_PostgreSQL )
								{								
									if($ciphcoding=="all")
										$flagCiph = 2;
								}
							}
							
							if( $flagCiph == 2 )
							{
								if( strlen($cipherer_update) > 0 )
									$cipherer_update.= ", ";
									
								if( $_connection->isEncryptionByPHPEnabled() )
									$cipherer_update.= $_connection->addFieldWrappers($field)."=".$_connection->prepareString($pageObject->cipherer->EncryptField($field,$value));
								else
									$cipherer_update.= $_connection->addFieldWrappers($field)."=".$pageObject->cipherer->EncryptValueByDB($field, $_connection->prepareString($value));
								
								if( isset($res[ $field ]) )
									$res[ $field ]++;
								else
									$res[ $field ] = 1;
							}
						}
					}
				}
				
				if($cipherer_update)
					$_connection->exec("update ".$_connection->addTableWrappers($origTableName)." set ".$cipherer_update." where ".$where);
			}
			
			echo "<table width=100%><tr><td colspan=2 align=center><b>Ready</b></td></tr>";
			
			if( isset($res) )
			{
				echo "<tr><td><p><b>Field name</p></b></td><td><b>Cipherer</b></td></tr>";
				foreach($res as $field => $value)
				{
					echo "<tr><td>".$field."</td><td>".$value."</td></tr>";
				}
			}
			else
				echo "<tr><td colspan=2 align=center>No records updating...</td></tr>";
				
			echo "<tr><td colspan=2><p><table width=100% align=center>";
			echo "<button class='runner-btnframe' type='button' onclick=\"window.location='".GetTableLink($goodTableName, "list")."'\">Cancel</button></td></tr></table></p></td></tr>";
			echo "</table>";
			exit();
		}
	}
}
?>