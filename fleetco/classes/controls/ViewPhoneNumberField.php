<?php
class ViewPhoneNumberField extends ViewControl
{
	public function showDBValue(&$data, $keylink)
	{
		$result = $this->getTextValue( $data );

		if(!$this->container->forExport || $this->container->forExport && $this->container->forExport != "excel" && $this->container->forExport != "csv")
		{	
			$result = runner_htmlspecialchars($result);
		}
		
		if($this->searchHighlight)
		{
			$result = $this->highlightSearchWord($result, true, $data[$this->field]);
		}
		
		return $result;
	}

	/**
	 * @param &Array data
	 * @return String	 
	 */
	public function getTextValue(&$data)
	{
		$result = $data[ $this->field ];
		
		if( strlen($result) == 7 )
			return substr($result, 0, 3)."-".substr($result, 3);
		
		if( strlen($result) == 10 )
			return "(".substr($result, 0, 3).") ".substr($result, 3, 3)."-".substr($result, 6);	
		
		return $result;
	}	
	
	public function getValueHighlighted($value, $highlightData) 
	{
		$searchWordArr = array();
		foreach($highlightData['searchWords'] as $searchWord)
		{
			$word = $searchWord;
			$wordArr = str_split($word);
			$word = implode("([\-\(]|\) )?", $wordArr);
			$searchWordArr[] = '[(]?'.runner_htmlspecialchars($word);
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