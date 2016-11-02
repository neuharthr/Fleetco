<?php

require_once getabspath("include/import_functions_excel.php");

/**
 * Get db prepared dateTime value
 * @param String textValue
 * @param String dateFormat
 * @return String
 */
function getDBDateValue( $textValue, $dateFormat )
{
	if( !$textValue )
		return NULL;
		
	$timeStamp = getTimeStamp($textValue, $dateFormat);
	if( $timeStamp === FALSE )
		return NULL;
		
	$time = localtime($timeStamp, true);
	return ($time["tm_year"] + 1900)."-".($time["tm_mon"] + 1)."-".$time["tm_mday"]." ".$time["tm_hour"].":".$time["tm_min"].":".$time["tm_sec"];
}

/**
 * Get the date format string
 * @param String dateFormat
 * @return String
 */
function getRefinedDateFormat( $dateFormat )
{
	$refinedFormat = "";
	
	$dateFormat = strtolower( $dateFormat );
	for($i = 0; $i < strlen($dateFormat); $i++)
	{
		$letter = $dateFormat[$i];
		if( ( $letter == "d" || $letter == "m" || $letter == "y" ) && strpos($refinedFormat, $letter) === false )
			$refinedFormat.= $letter;
	}
	
	return $refinedFormat;
}

/**
 * Get timestamp
 * @param String value
 * @param String dateFormat
 * @return String 
 */
function getTimeStamp($value, $dateFormat)
{
	$refinedDateFormat = getRefinedDateFormat($dateFormat);
	return strtotime( localdatetime2db($value, $refinedDateFormat) );
}

/**
 * A PHP fopen function wrapper
 * @param String uploadfile
 * @param String delimeter 	used only in .net
 * @return Mixed
 */
function OpenCSVFile($uploadfile, $delimeter)
{
	return fopen($uploadfile, "r");
}

/**
 * A PHP fclose function wrapper
 * @param Mixed handle
 */
function CloseCSVFile($handle)
{
	fclose($handle);
}

/**
 * A PHP fgetcsv function wrapper
 * @param Mixed handle
 * @param Number length
 * @param String delimiter
 * @return Array
 */
function GetCSVLine($handle, $length, $delimiter)
{
	return fgetcsv($handle, $length, $delimiter);
}

/**
 * An extended PHP str_getcsv function wrapper 
 * @param String line
 * @param String delimiter
 * @param Boolean removeBOM (optional)
 * @return Array
 */
function parceCSVLine($line, $delimiter, $removeBOM = false)
{
	$line = cutBOM($line);
		
	return str_getcsv($line, $delimiter);
}

/**
 * Check if the number passed could be a month component of a date
 * @param Number number
 * @return Boolean
 */ 
function testMonth( $number ) 
{
	$match = array();
	$matched = preg_match('/0[1-9]|1[0-2]/', $number, $match);
	
	if( $matched && count($match) || 1 <= $number && $number <= 12 )
		return true;
		
	return false;	
}

?>