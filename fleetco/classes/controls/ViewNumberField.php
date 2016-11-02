<?php
class ViewNumberField extends ViewControl
{
	public function showDBValue(&$data, $keylink)
	{
		$result = $this->getTextValue( $data );
		
		if($this->searchHighlight)
		{
			$result = $this->highlightSearchWord($result, false, $data[$this->field]);
		}
		
		return $result;
	}

	/**
	 * @param &Array data
	 * @return String	 
	 */
	public function getTextValue(&$data)
	{
		return str_format_number( $data[ $this->field ], $this->container->pSet->isDecimalDigits( $this->field ) );
	}	
	
	public function getValueHighlighted($value, $highlightData) 
	{
		$searchWordArr = array();
		foreach($highlightData['searchWords'] as $searchWord)
		{
			$curSearchWord = $searchWord;
			
			$isStringOfNumbers = preg_match('/^[\d]+$/', $searchWord);
			if(!$isStringOfNumbers) 
			{
				$decimals = $this->container->pSet->isDecimalDigits($this->field);
				$curSearchWord	= str_format_number($searchWord, $decimals);
				$quantifier = '{1,'.$decimals.'}';
				if($decimals <= 1) 
				{
					$quantifier = '?';
				}
				$curSearchWord = preg_replace('/0'.$quantifier.'$/', '', $searchWord);
				$curSearchWord = preg_replace('/\.$/', '', $searchWord);	
			}
			
			$searchWordArray = str_split($curSearchWord);
			$curSearchWord = implode('[^\d]?', $searchWordArray);
			$searchWordArr[] = $curSearchWord;
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