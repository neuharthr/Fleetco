<?php
function ExportExcelInit($arrdata,$arrwidth)
{
	global $cCharset;
	$objPHPExcel = new PHPExcel();
	$objProp = $objPHPExcel->getProperties();
	$objProp->setCreator("PHP");
	$objASIndex = $objPHPExcel->setActiveSheetIndex(0);
	$objASIndex->setTitle("Export");
	$col = 0;
	foreach($arrdata as $field=>$data)
	{
		$data = PHPExcel_Shared_String::ConvertEncoding($data, 'UTF-8', $cCharset);
		if(substr($data,0,1) == '=')
			$data = '="' . str_replace('"','""',$data) . '"';
		$objASIndex->setCellValueByColumnAndRow($col,1,$data);
		$colLetter = PHPExcel_Cell::stringFromColumnIndex($col);
		$objASheet = $objPHPExcel->getActiveSheet();
		$objDim = $objASheet->getColumnDimension($colLetter);
		$objDim->setWidth($arrwidth[$field]);
		$col++;
	}

	return $objPHPExcel;
}

function ExportExcelRecord($arrdata, $datatype, $numberRow, $objPHPExcel,$pageObj)
{
	global $cCharset, $locale_info;
	$col = -1;
	$objASIndex = $objPHPExcel->setActiveSheetIndex(0);
	$objASheet = $objPHPExcel->getActiveSheet();
	$rowDim = $objASIndex->getRowDimension($numberRow+1);
	
	foreach($arrdata as $field => $data)
	{
		$col++;
		$colLetter = PHPExcel_Cell::stringFromColumnIndex($col);
		$colDim = $objASIndex->getColumnDimension($colLetter);
		if($datatype[$field] == "binary")
		{
			if(!$data)
				continue;
			if(!function_exists("imagecreatefromstring"))
			{
				$objASIndex->setCellValueByColumnAndRow($col,$numberRow+1,mlang_message("LONG_BINARY"));
				continue;
			}
			$error_handler = set_error_handler("empty_error_handler");
			$gdImage = imagecreatefromstring($data);
			if($error_handler)
				set_error_handler($error_handler);
			if($gdImage)
			{
				$objDrawing = new PHPExcel_Worksheet_MemoryDrawing();
				$objDrawing->setImageResource($gdImage);
				$objDrawing->setCoordinates($colLetter.($row+1));
				$objDrawing->setWorksheet($objASheet);
				
				$width = $objDrawing->getWidth()*0.143;
				$height = $objDrawing->getHeight()*0.75;
				
				if($rowDim->getRowHeight() < $height)
					$rowDim->setRowHeight($height);
				
				$colDimSh = $objASheet->getColumnDimension($colLetter);
				$colDimSh->setAutoSize(false);
				
				if($colDim->getWidth() < $width)
					$colDim->setWidth($width);
			}
		}
		elseif($datatype[$field] == "file")
		{
			$arr = my_json_decode($row[$field]);
			if(count($arr) == 0)
			{
				$data = PHPExcel_Shared_String::ConvertEncoding($data, 'UTF-8', $cCharset);
				if($data == "<img src=\"images/no_image.gif\" />")
					$arr[]=array("name"=>"images/no_image.gif");
				else
				{
					if(substr($data,0,1) == '=')
						$data = '="' . str_replace('"','""',$data) . '"';
					$objASIndex->setCellValueByColumnAndRow($col,$numberRow+1,$data);
					continue;
				}
			}
			$offsetY = 0;
			$height = 0;
			foreach($arr as $img)
			{
				
				if(!file_exists($img["name"]) || !$img["name"])
				{
					$data = PHPExcel_Shared_String::ConvertEncoding($data, 'UTF-8', $cCharset);
					if(substr($data,0,1) == '=')
						$data = '="' . str_replace('"','""',$data) . '"';
					$objASIndex->setCellValueByColumnAndRow($col,$numberRow+1,$data);
					continue;
				}
				$objDrawing = new PHPExcel_Worksheet_Drawing();
				$objDrawing->setPath($img["name"]);
				$objDrawing->setCoordinates($colLetter.($numberRow+1));
				$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
				
				$objDrawing->setOffsetY($offsetY);
				
				$width = $objDrawing->getWidth()*0.143;
				$height = $height + $objDrawing->getHeight()*0.75;
				$offsetY = $offsetY + $objDrawing->getHeight();
				
				if($rowDim->getRowHeight() < $height)
					$rowDim->setRowHeight($height);
				
				$colDimSh = $objASheet->getColumnDimension($colLetter);
				$colDimSh->setAutoSize(false);
				
				if($colDim->getWidth() < $width)
					$colDim->setWidth($width);
			}
		}
		else
		{
			$data = PHPExcel_Shared_String::ConvertEncoding($data, 'UTF-8', $cCharset);
			if(substr($data,0,1) == '=')
				$data = '="' . str_replace('"','""',$data) . '"';
			$objASIndex->setCellValueByColumnAndRow($col,$numberRow+1,$data);
			if($datatype[$field] == "date")
			{
				$objStyle = $objASIndex->getStyle($colLetter.($numberRow+1));
				$objNumFrm = $objStyle->getNumberFormat();
				$objNumFrm->setFormatCode($locale_info["LOCALE_SSHORTDATE"]." hh:mm:ss");
			}
		}
	}
}

function ExportExcelTotals($arrTotal, $arrTotalMessage, $row, $objPHPExcel)
{
	global $cCharset;
	$col = 0;
	$objASIndex = $objPHPExcel->setActiveSheetIndex(0);
	foreach($arrTotal as $key => $value)
	{
		if($value)
			$objASIndex->setCellValueByColumnAndRow($col,$row+1,$arrTotalMessage[$key].PHPExcel_Shared_String::ConvertEncoding($value, 'UTF-8', $cCharset));
		$col++;
	}
}
function ExportExcelSave($filename,$format,$objPHPExcel)
{
	global $cCharset;
	$filename = PHPExcel_Shared_String::ConvertEncoding($filename, 'UTF-8', $cCharset);
	if($format == "Excel2007")
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	else
		header('Content-Type: application/vnd.ms-excel');
	
	header('Content-Disposition: attachment;filename="'.$filename.'";');
	header('Cache-Control: max-age=0');	
	
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, $format);
	$objWriter->save('php://output'); 
}
?>