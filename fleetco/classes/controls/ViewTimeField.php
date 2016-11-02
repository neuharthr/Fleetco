<?php
class ViewTimeField extends ViewControl
{
	public function showDBValue(&$data, $keylink)
	{	
		$result = $this->getTextValue( $data );
		
		if(!$this->container->forExport || $this->container->forExport && $this->container->forExport != "excel" && $this->container->forExport != "csv")
		{	
			$result = runner_htmlspecialchars($result);
		}
		return $result;
	}
	
	/**
	 * @param &Array data
	 * @return String	 
	 */
	public function getTextValue(&$data)
	{
		$result = "";
		if( IsDateFieldType( $this->fieldType ) )
			return str_format_time( db2time( $data[ $this->field ] ) );
		
		$numbers = parsenumbers( $data[ $this->field ] );
		
		if( !count($numbers) )
			return "";
			
		while( count($numbers) < 3 )
		{
			$numbers[] = 0;
		}
		
		if( count($numbers) == 6 )
			return str_format_time( array(0, 0, 0, $numbers[3], $numbers[4], $numbers[5]) ); // sometimes data is datetime
	 
		return str_format_time( array(0, 0, 0, $numbers[0], $numbers[1], $numbers[2]) );		
	}	
}
?>