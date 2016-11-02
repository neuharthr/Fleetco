<?php
require_once(getabspath("plugins/PHPExcel/IOFactory.php"));
require_once getabspath("include/export_functions_excel.php");

function ExportToExcel($rs, $nPageSize, $eventObj, $cipherer, $pageObj)
{
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObj);
	else
		$row = $cipherer->DecryptFetchedArray( $pageObj->connection->fetch_array( $rs ) );
	
	$tmpArr = array();
	$totals = array();
	$arrLabel = array();
	$arrTotal = array();
	$arrFields = array();
	$arrTmpTotal = array();
	$arrColumnWidth = array();
	$arrTotalMessage = array();
	
	$tmpArr = $pageObj->pSet->getExportFields();
	
	foreach($tmpArr as $value)
		if($pageObj->pSet->appearOnExportPage($value))
			$arrFields[] = $value;
	
	$arrTmpTotal = $pageObj->pSet->getTotalsFields();
	$pageObj->viewControls->setForExportVar( "excel" );
	foreach($arrFields as $value)
	{
		$arrLabel[$value] = GetFieldLabel(GoodFieldName($pageObj->tName), GoodFieldName($value)); 
		$arrColumnWidth[$value] = 10;
		$totals[$value] = array("value" => 0, "numRows" => 0);
		$totalsType = "";
		foreach($arrTmpTotal as $tvalue)
		{
			if($tvalue["fName"] == $value) {
				$totalsType = $tvalue["totalsType"];
				$totalsFields[] = array('fName'=>$value, 'totalsType'=>$totalsType, 'viewFormat'=>$pageObj->pSet->getViewFormat($value));
			}	
		}

	}
	
// write data rows
	$iNumberOfRows = 0;
	
	$objPHPExcel = ExportExcelInit($arrLabel,$arrColumnWidth);
	
	while((!$nPageSize || $iNumberOfRows<$nPageSize) && $row)
	{
		countTotals($totals, $totalsFields, $row);
		
		$values = array();
		$arrData = array();	
		$arrDataType = array();	
		
		foreach($arrFields as $field)
		{
			if(IsBinaryType($pageObj->pSet->getFieldType($field)))
				$values[$field] = $row[$field];
			else
			{
				$values[$field] = $pageObj->getExportValue($field, $row);
			}
		}
		
		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
			$eventRes = $eventObj->BeforeOut($row, $values, $pageObj);
		
		if ($eventRes)
		{
			$iNumberOfRows++;
			$i = 0;
			foreach($arrFields as $field)
			{
				if(IsBinaryType($pageObj->pSet->getFieldType($field)))
					$arrDataType[$field] = "binary";
				elseif($pageObj->pSet->getViewFormat($field)==FORMAT_DATE_SHORT || $pageObj->pSet->getViewFormat($field)==FORMAT_DATE_LONG || $pageObj->pSet->getViewFormat($field)==FORMAT_DATE_TIME)
					$arrDataType[$field] = "date";
				elseif($pageObj->pSet->getViewFormat($field) == FORMAT_FILE_IMAGE)
					$arrDataType[$field] = "file";
				else
					$arrDataType[$field] = "";
				$arrData[$field] = $values[$field];
			}
			ExportExcelRecord($arrData, $arrDataType, $iNumberOfRows, $objPHPExcel,$pageObj);
		}
		
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObj);
		else
			$row = $cipherer->DecryptFetchedArray( $pageObj->connection->fetch_array( $rs ) );
	}
	
	if(count($arrTmpTotal))
	{
		foreach($arrFields as $fName)
		{
			$value = array();
			foreach($arrTmpTotal as $tvalue)
			{
				if($tvalue["fName"] == $fName)
					$value = $tvalue;
			}
			$total = "";
			$totalMess = "";
			if($value["totalsType"])
			{
				if($value["totalsType"]=="COUNT")
					$totalMess = "Count".": ";
				elseif($value["totalsType"]=="TOTAL")
					$totalMess = "Total".": ";
				elseif($value["totalsType"]=="AVERAGE")
					$totalMess = "Average".": ";
				$total = GetTotals($fName, $totals[$fName]["value"], $value["totalsType"], $totals[$fName]["numRows"], $value["viewFormat"], "export", $pageObj->pSet);
			}
			$arrTotal[$fName] = $total;
			$arrTotalMessage[$fName] = $totalMess;
		}
	}

	ExportExcelTotals($arrTotal,$arrTotalMessage,++$iNumberOfRows,$objPHPExcel);
	
	$extExcel = ".xlsx";
	$formatExcel = "Excel2007";

	ExportExcelSave(GoodFieldName($pageObj->tName).$extExcel,$formatExcel,$objPHPExcel);
}

?>