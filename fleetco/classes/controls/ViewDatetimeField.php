<?php
class ViewDatetimeField extends ViewControl
{
	public function showDBValue(&$data, $keylink)
	{
		return $this->getTextValue( $data );
	}
	
	/**
	 * @param &Array data
	 * @return String	 
	 */
	public function getTextValue(&$data)
	{
		return str_format_datetime( db2time( $data[ $this->field ] ) );
	}	
	
	/**
	 * Get the field's content that will be exported
	 * @prarm &Array data
	 * @prarm String keylink
	 * @return String
	 */
	public function getExportValue(&$data, $keylink = "")
	{
		return $this->showDBValue($data, $keylink);
	}	
}
?>