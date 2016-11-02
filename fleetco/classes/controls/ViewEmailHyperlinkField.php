<?php
class ViewEmailHyperlinkField extends ViewControl
{
	public function showDBValue(&$data, $keylink)
	{
		$result = $data[$this->field];
		
		if( !strlen( $result ) )
			return "";
			
		$containsMailTo = substr($result,0,7) == "mailto:";	
		$title = runner_htmlspecialchars( $containsMailTo ? substr($result, 8) : $result );
		$link = runner_htmlspecialchars( $containsMailTo ? $result : "mailto:".$result );
			
		if( $this->searchHighlight )
			$title = $this->highlightSearchWord($title, false, ""); 
					
		return '<a href="'.$link.'">'.$title.'</a>';
	}

	/**
	 * @param &Array data
	 * @return String	 
	 */
	public function getTextValue(&$data)
	{
		$result = $data[$this->field];
		
		if( !strlen( $result ) )
			return "";
			
		if( substr($result, 0, 7) == "mailto:" )
			return substr($result, 8);	

		return $result;
	}
	
	/**
	 * Get the field's content that will be exported
	 * @prarm &Array data
	 * @prarm String keylink
	 * @return String
	 */
	public function getExportValue(&$data, $keylink = "")
	{
		return nl2br( $data[ $this->field ] );
	}	
}
?>