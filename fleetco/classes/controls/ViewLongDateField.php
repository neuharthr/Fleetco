<?php
class ViewLongDateField extends ViewControl
{
	public function showDBValue(&$data, $keylink)
	{
		return $this->getTextValue( $data );
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
	
	/**
	 * @param &Array data
	 * @return String	 
	 */
	public function getTextValue(&$data)
	{
		return format_longdate( db2time( $data[ $this->field ] ) );
	}	
}
?>