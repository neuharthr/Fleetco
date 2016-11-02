<?php
class ViewCustomField extends ViewControl
{
	public function showDBValue(&$data, $keylink)
	{
		$fieldData = $data[$this->field];
		if(!is_null($this->displayField))
		{
			$fieldData = $this->displayField;
		}
		$pageType = $this->container->pageType;
		if($this->pageObject)
		{
			if($this->pageObject->mode == EDIT_INLINE) 
			{
				$pageType = PAGE_LIST;
			}
		}
		$result = CustomExpression($fieldData, $data, $this->field, $pageType, $this->container->tName);
		
		if($this->searchHighlight)
		{		
			$result = $this->highlightSearchWord($result, false, ""); 
		}
		return $result;
	}

	public function getValueHighlighted($value, $highlightData) 
	{		
		$searchOpt = $highlightData['searchOpt'];	
		if($searchOpt == 'Equals')
			return $this->addHighlightingSpan($value);
		
		$flags = $this->useUTF8 ? "iu" : "i";
		$prefix = ($searchOpt == 'Starts with') ? "^" : "";
		//ungreedy tag pattern
		$tagPattern = "/(<[^=>]+\s*(?:(?:[^=>]+=\s*'[^']+'\s*)|".'(?:[^=>]+=\s*"[^"]+"\s*)'.")*>)/iU";
		
		foreach($highlightData['searchWords'] as $searchWord)
		{			
			$searchWordParts = preg_split($tagPattern, $searchWord);	
			
			if(count($searchWordParts) == 1)
			{
				$res = "";
				$replaced = false;
				//remove tag fragments
				$newSearchWord = preg_replace("/^.*>|<.*$/U", '', $searchWord);
				$pattern = '/'.$prefix.'('.preg_quote($newSearchWord,"/").')/'.$flags;
				
				//the search word doesn't contain any tags
				$valueArr = $this->getSplitStringWithCapturedDelimiters($tagPattern, $value); 
				foreach($valueArr as $item)
				{
					if( !strlen($item) )
						continue;
					//the tag inside a tag's attribute was matched
					if( $item[0] == "<" || $item[ strlen($item) - 1 ] == ">" || $replaced )
					{
						$res.= $item;
						continue;
					}
					
					if( !$this->hasHTMLEntities($item) )
						$replacedItem = preg_replace($pattern, $this->addHighlightingSpan('$1'), $item);
					else
						$replacedItem = $this->highlightValueWithHTMLEntities($item, $pattern);
						
					if( $searchOpt == 'Starts with' && $item != $replacedItem )
						$replaced = true;
					
					$res.= $replacedItem;			
				}
				$value = $res;
				continue; 
			}

			//the search word contains tags	
			foreach($searchWordParts as $item)
			{
				if( trim($item) )
				{
					if($item[0] != '<' && $item[ strlen($item) - 1 ] != '>' )
					{
						//remove tag fragments						
						$newItem = preg_replace("/^.*>|<.*$/", '', $item);
						$itemPattern = preg_quote($newItem, "/");
						$pattern = '/(>[^>]*)('.$itemPattern.')([^<]*<)|^([^<>]*)('.$itemPattern.')(<)|(>)('.$itemPattern.')([^<>]*$)/U';
						//$patterns = array('/(>[^>]*)('.$itemPattern.')([^<]*<)/U' , '/^([^<>]*)('.$itemPattern.')(<)/', '/(>)('.$itemPattern.')([^<>]*$)/');									
						$value = preg_replace($pattern, "$1".$this->addHighlightingSpan("$2")."$3", $value);
					}
				}
			}
		}
		
		return $value;	
	}	
}
?>