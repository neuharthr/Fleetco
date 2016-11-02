<?php
/*
 * jQuery File Upload Plugin PHP Example 5.7
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

include_once ("include/dbcommon.php");

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


$isPDF = isset($pdf);


if($isPDF)
{
	$strTableName = $params["table"];
	$field = $params["field"];
	$pageType = $params["pageType"];
	$outputAsAttachment = false;
}
else
{
	$strTableName = postvalue("table");
	$field = postvalue("field");
	$pageType = postvalue("pageType");
	$outputAsAttachment = ( postvalue("nodisp") != 1 );
}

if($strTableName == "")
{
	if(!$isPDF)
		echo "<p>No table name received</p>";
	return;
}
if($field == "")
{
	if(!$isPDF)
		echo "<p>No field name received</p>";
	return;
}

if (!GetTableURL($strTableName))
{
	exit(0);
}


if($isPDF)
{
	$requestAction = 'GET';
}
else 
{
	$requestAction = $_REQUEST['_action'];
}

global $cman;	
$_connection = $cman->byTable( $strTableName );
$pSet = new ProjectSettings($strTableName, $pageType);

if($requestAction == "POST")
{
	if($pageType == PAGE_ADD && !$pSet->appearOnAddPage($field) && !$pSet->appearOnInlineAdd($field) 
		|| $pageType == PAGE_EDIT && !$pSet->appearOnEditPage($field) && !$pSet->appearOnInlineEdit($field)
		|| $pageType == PAGE_REGISTER && !$pSet->appearOnRegisterOrSearchPage($field, $pageType)
		|| $pageType != PAGE_ADD && $pageType != PAGE_EDIT && $pageType != PAGE_REGISTER)
		exit("You have no permissions for this action");
}
else 
	if(!$pSet->checkFieldPermissions($field) && ($pageType != PAGE_ADD || !$pSet->appearOnAddPage($field) && !$pSet->appearOnInlineAdd($field)))
		exit("You have no permissions for this action");
	
if(!$isPDF)
	add_nocache_headers();

include_once("include/".GetTableURL($strTableName)."_variables.php");


//	check if logged in
if($requestAction == 'POST')
	$havePermission = CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"], "Add") 
		|| CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"], "Edit");
else
	$havePermission = CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"], "Search");
	
if(!isLogged() && $pageType != PAGE_REGISTER || !$havePermission)
{ 
	HeaderRedirect("login", "", "message=expired"); 
	return;
}


require_once getabspath('classes/uploadhandler.php');

$upload_handler = new UploadHandler(getOptionsForMultiUpload($pSet, $field));
$upload_handler->pSet = $pSet;
$upload_handler->field = $field;
$upload_handler->table = $strTableName;
$upload_handler->pageType = $pageType;	

switch ($requestAction) {
    case 'DELETE':
    	printMFHandlerHeaders();
    	$formStamp = postvalue("formStamp");
    	if($formStamp != ""){
    		$upload_handler->formStamp = $formStamp;
        	$upload_handler->delete();
    	}
        break;
    case 'POST':
    	printMFHandlerHeaders();
    	$formStamp = postvalue("formStamp");
    	if($formStamp != ""){
    		$upload_handler->formStamp = $formStamp;
    		$upload_handler->post();
    	}
    	break;
    case 'GET':
    default:
    	if($isPDF)
    	{
    		$isDBFile = isset($params["filename"]); 
	    	$fileName = isset($params["file"]) ? $params["file"] : $params["filename"];
    	}
    	else 
    	{
	    	$isDBFile = postvalue("filename") != ""; 
	    	$fileName = postvalue("file") != "" ? postvalue("file") : postvalue("filename");
	    	$formStamp = postvalue("fkey");
    	}
    	if($fileName == "")
    		exit();
    	$sessionFile = null;
    	$fsFileName = "";
    	if(!$isDBFile && $formStamp != "" && isset($_SESSION["mupload_".$formStamp][$fileName]))
    	{
			$sessionFile = $_SESSION["mupload_".$formStamp][$fileName]["file"];
    	}
    	else
    	{
    		$keys = array();
	    	$tKeys = $pSet->getTableKeys();
			for($i = 0; $i < count($tKeys); $i++)
			{
				if($isPDF)
					$keys[$tKeys[$i]] = $params["key".($i+1)];
				else 
					$keys[$tKeys[$i]] = postvalue("key".($i+1));
			}
			$strWhereClause = KeyWhere($keys);
	
			if($pSet->getAdvancedSecurityType()!=ADVSECURITY_ALL)
				$strWhereClause = whereAdd($strWhereClause, SecuritySQL("Search"));
	
			$queryObj = $pSet->getQueryObject();
    		if( !$queryObj->HasGroupBy() )
			{
				// Do not select any fields except current (file) field.
				// If query has 'group by' clause then other fields are used in it and we may not simply cut 'em off.
				// Just don't do anything in that case.
				$queryObj->RemoveAllFieldsExcept($pSet->getFieldIndex($field));
			}
			
			$qResult = $_connection->query( $queryObj->gSQLWhere($strWhereClause) );
			if($isDBFile)
			{
				if( $qResult )
				{
					$data = $qResult->fetchAssoc();
					if($data)
						$value = $_connection->stripSlashesBinary( $data[ $field ] );
				}
			}
			else 
			{
				$cipherer = new RunnerCipherer($strTableName, $pSet);
				$row =  $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
				if( $row )
				{
					$filesArray = my_json_decode($row[$field]);
					if(!is_array($filesArray) || count($filesArray) == 0)
					{
						if($row[$field] == "")
							$filesArray = array();
						else 
						{
							$uploadedFile = $upload_handler->get_file_object($row[$field]);
							if(is_null($uploadedFile))
								$filesArray =  array();
							else
								$filesArray = array(my_json_decode(my_json_encode($uploadedFile)));
						}
					}
					foreach ($filesArray as $uploadedFile)
					{
						if($uploadedFile["usrName"] == $fileName)
						{
							$sessionFile = $uploadedFile;
							break;
						}
					}
				}
			}
    	}
    	$iconShowed = false;
    	if($isDBFile)
    	{
    		$ftype = "";
    		if($pSet->getViewFormat($field) == FORMAT_DATABASE_IMAGE)
    		{
    			if(!$value)
    			{
    				$value = myfile_get_contents('images/no_image.gif');
    			}
				$ftype = SupposeImageType($value);
    		}
			if(!$ftype)
				$ftype = getContentTypeByExtension(substr($fileName, strrpos($fileName, '.')));
			$fsize = strlen_bin($value);
    	}
    	else if($sessionFile != null)
    	{
    		$isThumbnail = false;
    		$isSRC = false;
    		if($isPDF)
    		{
    			$isThumbnail = isset($params["thumbnail"]);
    			$isSRC = isset($params['src']);
    		}
    		else
    		{ 
    			$isThumbnail = postvalue("thumbnail") != "";
    			$isSRC = postvalue('src') == 1;
    		}
    		if(postvalue("icon") != ""){
    			$fsFileName = "images/icons/".getIconByFileType($sessionFile["type"], $sessionFile["name"]);
				$fsize = filesize(getabspath($fsFileName));
				$ftype = "image/png";
    		}
			else if($isThumbnail && $sessionFile["thumbnail"] && GDExist())
			{
				$fsFileName = $sessionFile["thumbnail"];
				$fsize = $sessionFile["thumbnail_size"];
				$ftype = $sessionFile["thumbnail_type"];
			}
			else
			{
				if(($pageType == PAGE_EDIT || $pageType == PAGE_ADD) && $isSRC )
				{
					$iconShowed = true;
					$fsFileName = "images/icons/".getIconByFileType($sessionFile["type"], $sessionFile["name"]);
					$fsize = filesize(getabspath($fsFileName));
					$ftype = "image/png";
				}
				else 
				{
					$fsFileName = $sessionFile["name"];
					$fsize = $sessionFile["size"];
					$ftype = $sessionFile["type"];
				}
			}    		
    	}
    	if($isDBFile && $value || $fsFileName != "")
    	{
			if(!$isDBFile)
			{
				if(!$pSet->isAbsolute($field) && !isAbsolutePath($fsFileName) || $iconShowed)
					$fsFileName = getabspath($fsFileName);
					
				if(!myfile_exists($fsFileName))
				{
					$fsFileName = getabspath("images/no_image.gif");
					$fsize = filesize($fsFileName);
					$ftype = "image/gif";
				}
			}
								
			if($isPDF)
			{
				if($isDBFile)
					$file = $value;
				else
					$file = myfile_get_contents($fsFileName);
				return;
			}
			
			if(postvalue('norange') == 1)
    		{
				header('Accept-Ranges: none');
				header("Cache-Control: private");
				header("Content-Type: ".$ftype);
				header('Access-Control-Allow-Methods: HEAD, GET, POST');
				if( $outputAsAttachment )
					header("Content-Disposition: attachment;Filename=\"".$fileName."\"");
				sendContentLength( $fsize );
				if($_SERVER['REQUEST_METHOD'] == 'HEAD')
					exit();
				if($isDBFile)
					echoBinary($value);
				else
					printfile($fsFileName);
			}
			else
			{
				$size_unit = "";
				$range_orig = "";
				$httpRange = $_SERVER['HTTP_RANGE'];
				if(preg_match('/^bytes=((\d*-\d*,? ?)+)$/', $httpRange))
				{
		        	$tmparr = explode('=', $httpRange);
					$size_unit = $tmparr[0];
					$range_orig = $tmparr[1];
				}
		        if ($size_unit == 'bytes')
		        {
		        	//multiple ranges could be specified at the same time, but we accept only the first range
		        	if(strpos($range_orig, ',') !== false)
					{
		            	$tmparr = explode(',', $range_orig);
						$range = $tmparr[0];
						$extra_ranges = $tmparr[1];
					}else
		            	$range = $range_orig;
		        }
		        else
		            $range = '-';
		        //figure out download piece from range (if set)
    			$tmparr = explode('-', $range);
				$seek_start = $tmparr[0];
				$seek_end = $tmparr[1];
				
    			//set start and end based on range (if set), else set defaults
			    //also check for invalid ranges.
    			$seek_end = (strlen($seek_end) == 0) ? ($fsize - 1) : min(abs(intval($seek_end)),($fsize - 1));
			    $seek_start = (strlen($seek_start) == 0 || $seek_end < abs(intval($seek_start))) ? 0 : max(abs(intval($seek_start)),0);
				
				//	print headers
				if ($seek_start > 0 || $seek_end < ($fsize - 1))
				{
					header('HTTP/1.1 206 Partial Content');
				}
				header('Accept-Ranges: bytes');
				header('Content-Range: bytes '.$seek_start.'-'.$seek_end.'/'.$fsize);

				if( $outputAsAttachment ) 
				{
					header("Content-Disposition: attachment;Filename=\"".$fileName."\"");
				}

				$printContentLength = true;
				
				if( $printContentLength ) 
				{
					header( "Content-Length: ". ($seek_end - $seek_start + 1) );
				}
				
				header("Cache-Control: cache, must-revalidate");   
    			header("Pragma: public");
				header("Content-Type: ".$ftype);
				if($_SERVER['REQUEST_METHOD'] == 'HEAD')
				{
					exit();
				}
				if($isDBFile)
				{
					echoBinaryPartial($value, $seek_start, $seek_end);
				}
				else
				{
					printfileByRange($fsFileName, $seek_start, $seek_end);
				}
			}
    	}
}
exit();
?>