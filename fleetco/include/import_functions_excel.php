<?php
require_once getabspath("plugins/PHPExcel/IOFactory.php");

/**
 * Open an Excel file
 * It requires the PHPExcel plugin
 * @param String uploadfile
 * @param String ext
 * @return PHPExcel			 The file resource
 */
function openImportExcelFile($uploadfile, $ext)
{
	if( strtoupper($ext) == "XLSX" )
	{
		$objPHPExcel = PHPExcel_IOFactory::load($uploadfile);
	}
	else
	{
		$objPHPExcel = new PHPExcel();
		$objReader = PHPExcel_IOFactory::createReader("Excel5");
		$objPHPExcel = $objReader->load($uploadfile);
	}
	
	return $objPHPExcel;
}

/**
 * Get the filed names from the first row of the current work sheet
 * @param PHPExcel data
 * @return Array
 */
function getImportExcelFields($data)
{
	$fields = array();
	
	$worksheet = $data->getSheet();
	$highestColumn = $worksheet->getHighestColumn();
	
	$highestColumnIndex = PHPExcel_Cell::columnIndexFromString( $highestColumn );
	for($col = 0; $col < $highestColumnIndex; ++$col)
	{
		$fieldName = $worksheet->getCellByColumnAndRow($col, 1)->getValue();
		if( !strlen($fieldName) )
			break;
			
		$fields[] = $fieldName;	
	}
	
	return $fields;
}

/**
 * Import data from an Excel file
 * @param PHPExcel fileHandle
 * @param Array fieldsData
 * @param Array keys
 * @param ImportPage importPageObject
 * @param Boolean autoinc
 * @param Boolean useFirstLine
 * @param String dateFormat
 * @return Array
 */
function ImportDataFromExcel( $fileHandle, $fieldsData, $keys, $importPageObject, $autoinc, $useFirstLine )
{
	global $cCharset;
	
	$metaData = array();
	$metaData["totalRecords"] = 0;
	
	$errorMessages = array();
	$unprocessedData = array();		
	$updatedRecords = 0;
	$addedRecords = 0;
	
	$startRow = $useFirstLine ? 1 : 2;
	
	foreach($fileHandle->getWorksheetIterator() as $worksheet)
	{
		$highestRow = $worksheet->getHighestRow();
		
		// get a litteral index of the 'highest' column (e.g. 'K')
		$highestColumn = $worksheet->getHighestColumn();
		// get an index number of the 'highest' column (e.g. 11)
		$highestColumnIndex = PHPExcel_Cell::columnIndexFromString( $highestColumn );
		
		for($row = $startRow; $row <= $highestRow; $row++)
		{
			$fieldValuesData = array();
			
			for($col = 0; $col < $highestColumnIndex; $col++)
			{			
				if( !isset( $fieldsData[ $col ] ) ) 
					continue;
					
				$importFieldName = $fieldsData[ $col ]["fName"];
				
				$cell = $worksheet->getCellByColumnAndRow($col, $row);
				$cellValue = $cell->getValue();
				
				if( PHPExcel_Shared_Date::isDateTime($cell) )
				{
					$cellDateFormat = $fileHandle->getCellXfByIndex( $cell->getXfIndex() )->getNumberFormat()->getFormatCode();
					$cellTextValue = PHPExcel_Style_NumberFormat::ToFormattedString($cellValue, $cellDateFormat);
					$cellValue = getDBDateValue( $cellTextValue, $cellDateFormat );				
				}
				else
				{
					if( is_a($cellValue, 'PHPExcel_RichText') )
						$cellValue = $cellValue->getPlainText();					
										
					$error_handler = set_error_handler("empty_error_handler");
					$cellValue = PHPExcel_Shared_String::ConvertEncoding($cellValue, $cCharset, 'UTF-8');				
					if( $error_handler )
						set_error_handler($error_handler);
					
					$matches = array();
					preg_match('/^="(=.*)"$/i', $cellValue, $matches);
					if( array_key_exists(1, $matches) ) 
						$cellValue = $matches[1];	
				}
				
				$fieldValuesData[ $importFieldName ] = $cellValue;	
			}			
			
			$importPageObject->importRecord( $fieldValuesData, $keys, $autoinc, $addedRecords, $updatedRecords, $errorMessages, $unprocessedData );
			$metaData["totalRecords"] = $metaData["totalRecords"] + 1;
		}
	}

	$metaData["addedRecords"] = $addedRecords;
	$metaData["updatedRecords"] = $updatedRecords;
	$metaData["errorMessages"] = $errorMessages;
	$metaData["unprocessedData"] = $unprocessedData;
	
	return $metaData;
}

/**
 * Get no more the 100 rows of the file's data to display the file's preview.
 * It could augment the fieldsData array 
 * It requires the PHPExcel plugin
 * @param PHPExcel fileHandle
 * @param &Array fieldsData		The corresponding import fields data
 * @return Array
 */
function getPreviewDataFromExcel( $fileHandle, &$fieldsData )
{
	global $locale_info;
	$previewData = array();
	
	$remainNumOfPreviewRows = 100;
	
	foreach($fileHandle->getWorksheetIterator() as $worksheet)
	{
		if( $remainNumOfPreviewRows <= 0 )
			break;
		
		// get the number of rows for the current worksheet	
		$highestRow = $worksheet->getHighestRow();
		if( $highestRow > $remainNumOfPreviewRows )
			$highestRow = $remainNumOfPreviewRows;
		
		$remainNumOfPreviewRows -= $highestRow;
		
		// get a litteral index of the 'highest' column (e.g. 'K')
		$highestColumn = $worksheet->getHighestColumn();
		// get an index number of the 'highest' column (e.g. 11)
		$highestColumnIndex = PHPExcel_Cell::columnIndexFromString( $highestColumn );
		
		// start traversing rows from the first one that contains columns' names
		for($row = 1; $row <= $highestRow; $row++)
		{
			$rowData = array();
			for($col = 0; $col < $highestColumnIndex; $col++)
			{
				$cell = $worksheet->getCellByColumnAndRow($col, $row);
				$cellValue = $cell->getValue();
				
				if( $row > 1 )
				{
					$columnMatched = isset( $fieldsData[ $col ] );
					if( PHPExcel_Shared_Date::isDateTime($cell) )
					{
						$cellDateFormat = $fileHandle->getCellXfByIndex( $cell->getXfIndex() )->getNumberFormat()->getFormatCode();
						$cellTextValue = PHPExcel_Style_NumberFormat::ToFormattedString($cellValue, $cellDateFormat);
						$cellValue = getTimeStamp($cellTextValue, $cellDateFormat);	

						if( !$columnMatched )
							$fieldsData[ $col ] = array();

						$fieldsData[ $col ]["dateTimeType"] = true;
						$fieldsData[ $col ]["requireFormatting"] = true;						
					}
					else if( $columnMatched && $fieldsData[ $col ]["dateTimeType"] && !strlen($dateFormat) )
						$dateFormat = ImportPage::extractDateFormat( $cellValue );			
				}

				$rowData[] = $cellValue;
			}
			if( $rowData && ( count($rowData) >1 || $rowData[0] != null ) )
				$tableData[] = $rowData;
		}
	}
	
	$previewData["tableData"] = $tableData;
	
	if( ImportPage::hasDateTimeFields( $fieldsData ) )
		$previewData["dateFormat"] = !strlen($dateFormat) ? $locale_info["LOCALE_SSHORTDATE"] : $dateFormat;
	
	return $previewData;
}

/**
 * Get the uploded file's data from superglobals
 * @param String fileName
 * @return Mixed
 */
function getImportFileData( $fileName )
{
	return $_FILES[ $fileName ];
}


/**
 * @param String fname
 * @return String
 */
function getImportFileExtension($fname)
{
	return getFileExtension( $_FILES[$fname]['name'] );
}

/**
 * @param String fname
 * @return String
 */
function getTempImportFileName($fname)
{
	return $_FILES[$fname]['tmp_name'];
}


/**
 * Delete am import temp file
 * @param String filePath
 */
function deleteImportTempFile( $filePath )
{
	$error_handler = set_error_handler("empty_error_handler");
	
	runner_delete_file( $filePath );
	
	if( $error_handler )
		set_error_handler($error_handler);
}

/**
 * Do not touch $table and $isIdentityOffNeeded - they needed for ASP.Net MVC version
 * @param String sql
 * @param Connection connection
 * @param String table
 * @param Boolean isIdentityOffNeeded
 * @return Mixed
 */ 
function db_exec_import($sql, $connection, $table = "", $isIdentityOffNeeded = false)
{
	set_error_handler("import_error_handler");
	return $connection->exec( $sql );
}


/**
 * A PHP rewind function wrapper
 * @param Mixed handle
 * @param $filePath added for ASP
 * @return Boolean (TRUE | FALSE)
 */
function rewindFilePointerPosition($handle,$filePath)
{
	rewind( $handle );
	return $handle;
}

/**
 * Get the list of file names from a particular directory
 * @param String dirPath
 * @return Array
 */
function getFileNamesFromDir( $dirPath )
{
	$fileNames = array();
	
	$dirHandle = opendir( $dirPath );
	if( $dirHandle )
	{	
		while( false !== ($fileName = readdir($dirHandle)) )
		{
			$fileNames[] = $fileName;									
		}
		closedir( $dirHandle );	
	}
	
	return $fileNames;
}

/**
 * A PHP fgets function wrapper 
 * @param Mixed handle
 * @param Number length
 */
function getLineFromFile($handle, $length)
{
	return fgets($handle, $length);
}

?>