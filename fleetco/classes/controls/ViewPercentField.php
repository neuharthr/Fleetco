<?php
class ViewPercentField extends ViewControl
{
	public function showDBValue(&$data, $keylink)
	{
		if( $data[ $this->field ] == null || $data[ $this->field ] == "" )
			return "";
		
		$result = ( $data[$this->field] * 100 )."%";
			
		if( $this->searchHighlight )
			$result = $this->highlightSearchWord ($result, false, $data[ $this->field ] );
			
		return $result;
	}

	/**
	 * @param &Array data
	 * @return String	 
	 */
	public function getTextValue(&$data)
	{
		if( $data[ $this->field ] != null && $data[ $this->field ] != "" )
			return( $data[ $this->field ] * 100 )."%";
		
		return "";	
	}	
	
	public function getValueHighlighted($value, $highlightData) 
	{
		$searchWordArr = array();
		foreach($highlightData['searchWords'] as $searchWord)
		{
			$word = $searchWord * 100;
			$word = preg_replace('/0{0,2}$/', '', $word);
			$wordArr = str_split($word);
			$searchWordArr[] = implode("[^\d]?", $wordArr);
		}
		$searchWord = implode('|', $searchWordArr);
		$searchOpt = $highlightData['searchOpt'];

		switch($searchOpt)
		{
			case 'Equals':
				return $this->addHighlightingSpan($value);
	
			case 'Starts with':
				return preg_replace('/^('.$searchWord.')/', $this->addHighlightingSpan('$1'), $value);
			
			case 'Contains':	
				return preg_replace('/('.$searchWord.')/', $this->addHighlightingSpan('$1'), $value);
			
			default:
				return $value;
		}			
	}
}
?>