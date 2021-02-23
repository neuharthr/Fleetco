<?php
class ViewHTMLField extends ViewControl
{
	public function showDBValue(&$data, $keylink)
	{
		$value = $this->refineHTMLValue( $data[ $this->field ] );
		return "<table><tr><td>".$this->processText( $value, $keylink )."</td></tr></table>";
	}

	/**
	 * Get the field's content that will be exported
	 * @prarm &Array data
	 * @prarm String keylink
	 * @return String
	 */
	public function getExportValue(&$data, $keylink = "")
	{
		return $this->refineHTMLValue( $data[ $this->field ] );
	}	
	
	/**
	 * Remove excessive spaces and script tags from the string passed
	 * @param String value
	 * @return String
	 */	
	protected function refineHTMLValue($value)
	{
		$value = preg_replace('/\s+/u', ' ', $value);
		return $this->stripScriptTags($value);
	}
	
	/**
	 * Get the string obtained from the string passed
	 * by removing all script tags	
	 * @param String value
	 * @return String
	 */
	protected function stripScriptTags($value)
	{	
		return preg_replace('/<\s*script\s*(([^">]+="[^"]+"\s*)|'."([^'>]+='[^']+'\s*)".')*>.*<\s*\/script\s*>/', '', $value);	
	} 
	
	/**
	 * Check if the text needs truncating 	
	 * @param String value				The field's content
	 * @param Number cNumberOfChars		The number of chars up to truncation
	 * @return Boolean
	 */
	protected function textNeedsTruncating($value, $cNumberOfChars) 
	{
		return !$this->isUsedForFilter && !$this->container->fullText && $cNumberOfChars > 0 && runner_strlen($value) > $cNumberOfChars * 1.2;
	}
	
	/**
	 * Form the the string with the search word highlighted
	 * @param String value			The field's content
	 * @param Array highlightData
	 * @return string
	 */	
	public function getValueHighlighted($value, $highlightData) 
	{	
		$searchOpt = $highlightData['searchOpt'];	
		if( $searchOpt == 'Equals' )
			return $this->addHighlightingSpan($value);
		
		$flags = $this->useUTF8 ? "iu" : "i";
		$prefix = ($searchOpt == 'Starts with') ? "^" : "";		
		//ungreedy tag pattern
		$tagPattern = "/(<[^=>]+\s*(?:(?:[^=>]+=\s*'[^']+'\s*)|".'(?:[^=>]+=\s*"[^"]+"\s*)'.")*>)/iU";
		
		foreach($highlightData['searchWords'] as $searchWord)
		{	
			$searchWordParts = preg_split($tagPattern, $searchWord);
		
			if( count($searchWordParts) == 1 )
			{
				$res = "";
				$highlighted = false;
				//remove tag fragments
				$newSearchWord = preg_replace("/^.*>|<.*$/U", '', $searchWord);
				$pattern = '/'.$prefix.'('.preg_quote($newSearchWord,"/").')/'.$flags;
				
				//the search word doesn't contain any tags
				$valueArr = $this->getSplitStringWithCapturedDelimiters($tagPattern, $value); 
				foreach($valueArr as $item)
				{
					if( !strlen($item) )
						continue;
					//It's a tag or the tag inside a tag's attribute was matched
					if( $item[0] == '<' || $item[ strlen($item) - 1 ] == '>' || $highlighted )
					{
						$res.= $item;
						continue;
					}	

					if( !$this->hasHTMLEntities($item) )
						$replacedItem = preg_replace($pattern, $this->addHighlightingSpan('$1'), $item);
					else
						$replacedItem = $this->highlightValueWithHTMLEntities($item, $pattern);
					
					if( $searchOpt == 'Starts with' && $item != $replacedItem )
						$highlighted = true;					
					
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
	
	/**
	 * Remove from the value the current tag defined by its start 
	 * and end positions in the value string
	 * @param &String value
	 * @param Number tagStart
	 * @param Number tagEnd
	 */
	protected function removeCurrentTag(&$value, $tagStart, $tagEnd)
	{
		if( $tagStart > 0 ) 
			$value = substr($value, 0, $tagStart).substr($value, $tagEnd + 1);
		 else 
			$value = substr($value, $tagEnd + 1);
	}
	
	/**
	 * Basing on the data passed method returns the data array
	 * that contains the 'removeTag' property indicating
	 * If it's necessary to remove the current tag from the field's content
	 * and 'tags' array containing the tag names that should be closed then
	 * @param Array tags
	 * @param String tagName
	 * @param Boolean closingTag
	 * @return Array
	 */
	protected function processTagsToClose($tags, $tagName, $closingTag)
	{
		$data = array('removeTag'=> false, 'tags'=> $tags);
		
		if( $this->isTagSingleTon($tagName) )
			return $data;
			
		if( !$closingTag )
		{		
			$data['tags'][] = $tagName;
			return $data;
		}
			
		$keys = array_keys($tags, $tagName);
		if( !count($keys) ) 
			$data['removeTag'] = true;
		else	
			//pop all elements upto the preceeding element of the openin tag
			$data['tags'] = array_slice( $tags, 0, -1 );
		
		return $data;
	}

	/**
	 * Form the data array that contains a 'isHTMLEntity' status (if the HTML entity 
	 * is on the 'pos' position in the string passed) and It could contain the
	 * length of the html entity('htmlEntityLength') and the number of characters 
	 * It represents('entityLength')
	 * @param Number pos
	 * @param String string
	 * @return Array
	 */ 
	protected function isHTMLEntity($pos, $string)
	{	
		$endityEndPos = strpos($string, ";", $pos);
		if( $endityEndPos === FALSE )
			return array('isHTMLEntity'=> false);
			
		$suspect = substr( $string, $pos, $endityEndPos - $pos + 1 );
		$data = getHTMLEntityData( $suspect );
		$data['htmlEntityLength'] = strlen( $suspect );
		
		return $data;
	}

	/**
	 * Check if a comment startes from the position 'pos' in a string passed
	 * @param Number pos
	 * @param String string
	 * @return Array
	 */
	protected function isComment($pos, $string)
	{
		if( substr($string, $pos, 4) != "<!--" )
			return array('status'=> false);
		
		$commentClosePos = strpos($string, "-->", $pos);
		if( $commentClosePos !== FALSE )
			return array('status'=> true, "commentLength"=> $commentClosePos - $pos + 3);
			
		return array('status'=> false);	
	}	
	
	/**
	 * Get an array containing the corrected field's content and
	 * the flas if the field's content was truncated
	 * @param String value				The field's content
	 * @param Number cNumberOfChars		This number defines set of chars in the HTML value's text nodes that should be included in the processed value
     * return Array						The array containing the processed value and 
										the flag "isTruncated" indicating if the content is truncated	 
	 */
	protected function getPocessedHTMLValueData($value, $cNumberOfChars)
	{
		$tag = $closingTag = $attrValue = $tagNameReady = $waitForAttrValue = $skipTagContent =false;		
		$attrCloseMark = "";
		$tagName = "";
		$tags = array();
		$notContentPositions = array();
		$i = $j = 0;
		$skipTagStart = -1;

		//traversing the html string
		while( $i < strlen($value) && $j < $cNumberOfChars )
		{		
			if( !$tag && $value[$i] == '<')
			{			
				$data = $this->isComment($i, $value);
				if( $data['status'] ) 
				{
					$notContentPositions[] = array(0=> $i, 1=>  $i + $data['commentLength']);
					//skip the comment
					$i = $i + $data['commentLength'];
				}
				else
				{
					$tagStart = $i;
					$tagNameReady = false;
					$tag = true; 
					$i = $i + 1;;
				}		
				continue;
			}

			if( $tag && $attrValue && ($attrCloseMark == "" || $attrCloseMark == " ") && $value[$i] == '>' )
				$attrValue  = false;
				
			if( $tag && !$attrValue && $value[$i] == '>' )
			{				
				//presuppose that invisible tags(style) could not be enclosed
				if( $this->isInvisibleTag($tagName) )
					$skipTagContent = !$closingTag; 
		
				if( $skipTagContent )
					$skipTagStart = $i;
				else if( $skipTagStart != -1 ) 
				{
					$notContentPositions[] = array(0=> $skipTagStart, 1=> $i);
					$skipTagStart = -1;
				}				
					
				$data = $this->processTagsToClose( $tags, $tagName, $closingTag);
				$tags = $data['tags'];
				
				if( $data['removeTag'] ) 
				{
					//remove the single closing tag 
					$this->removeCurrentTag($value, $tagStart, $i);
					//update the itertator value
					$i = $tagStart;
				} 
				else 
				{
					$notContentPositions[] = array(0=> $tagStart, 1=> $i);
					$i = $i + 1;;
				}
				
				$tag = $closingTag = false;
				$tagNameReady = true;		
				$tagName = "";
				continue;
			}
			
			if( $tag && !$tagNameReady )
			{
				if( $value[$i] == "/" )
					$closingTag = true;
				else if( $value[$i] == " " && $tagName != "" ) 
					$tagNameReady = true;
				else if( $value[$i] != " " )
					//form the tag's name
					$tagName.= $value[$i];
								
				$i = $i + 1;
				continue;
				
			}

			if( $tag && $tagNameReady )
			{
				//process the attributes inside the tag
				if( $value[$i] == "=" && !$attrValue ) 		
					$waitForAttrValue = true;
				else if( $waitForAttrValue && $value[$i] != " " )
				{
					if( $value[$i] == "'" || $value[$i] == '"' )
						$attrCloseMark = $value[$i];
					
					$waitForAttrValue = false;
					$attrValue = true;		
				} else if( $attrValue && $value[$i] == $attrCloseMark )	{
					$attrValue = false;
					$attrCloseMark = " "; 					
				} 	
				
				$i = $i + 1; 
				continue;
			}
			
			if( $skipTagContent )
			{
				$i = $i + 1;
				continue;
			}
			
			if( $value[$i] == '&' )
			{ 
				$data = $this->isHTMLEntity($i, $value);
				if( $data['isHTMLEntity'] ) 
				{
					//skip the html-entity
					$i = $i + $data['htmlEntityLength'];
					$j = $j + $data['entityLength'];
					continue;	
				} 
			}
			
			//echo $value[$i]." ".$i."<br>";
						if( $this->useUTF8 ) 
			{
				$ordord = ord( $value[$i] );
				
				if (0xC0 == (0xC0 & $ordord)) // 11000000
					$i = $i + 1;
				else if (0xE0 == (0xE0 & $ordord)) // 11100000
					$i = $i + 2;
				else if (0xF0 == (0xF0 & $ordord)) // 11110000
					$i = $i + 3;
				else if (0xF8 == (0xF8 & $ordord)) // 11111000
					$i = $i + 4;
				else if(0xFC == (0xFC & $ordord)) // 11111100
					$i = $i + 5;
			}
			
			$i = $i + 1;
			$j = $j + 1;
		}		

		$truncatedValue = substr($value, 0, $i);
		$tags = array_reverse( $tags );
		foreach($tags as $tag)
		{
			$truncatedValue.= "</".$tag.">";
		}
		$notContentPositions[] = array(0=> $i, 1=> strlen($truncatedValue) - 1);
		
		//echo "<br>".runner_htmlspecialchars( $truncatedValue );
		return array("value"=> $truncatedValue, "isTruncated"=> $i < strlen($value), "notContentPositions"=> $notContentPositions, "truncLength"=> $i);
	}
	
	/**
	 * Get the More link following the truncated and highlighted field's content
	 * @param String value				The field's content
	 * @param Number cNumberOfChars		
	 * @param String keylink	
	 * @param Boolean isLookup			An indicator showing if this is a lookup list page control. 
	 *									It's alway equal to false for the view as HTML field	
	 * @return String	
	 */
	protected function getShorteningTextAndMoreLink($value, $cNumberOfChars, $keylink, $isLookup)
	{	
		$data = $this->getPocessedHTMLValueData($value, $cNumberOfChars);
		$isTruncated = $data["isTruncated"];
		$processedValue = $data["value"];
		
		if( $this->searchHighlight )
		{
			if(	$isTruncated )
				$processedValue = $this->highlightTruncatedBeforeMore($value, $processedValue, $cNumberOfChars, $data["truncLength"]);
			else 
				$processedValue = $this->highlightSearchWord($processedValue, false, "");	
		}
			
		if( $isTruncated )
		{
			$tName = $this->getContainer()->tName;
			$params = 'pagetype='.$this->container->pSet->_viewPage.'&table='.GetTableURL($tName).'&field='.rawurlencode($this->field).$keylink;
			$link = ' <a href="javascript:void(0);" data-query="'.GetTableLink("fulltext").'?'.$params.'">'.mlang_message("MORE").'&nbsp;...</a>';
			$processedValue.= $link;			
		}
			
		return $processedValue;
	}
	
	/**
	 * Format the string before the "More ..." link and highlight a search word depending on the search option's value.
	 * @param String value				The raw field's content
	 * @param String truncatedValue	 	The truncated field's content
	 * @param Number cNumberOfChars	
	 * @param Number truncLength		The length of the truncated field's content without the final closing tags
	 * @return string
	 */	
	protected function highlightTruncatedBeforeMore($value, $truncatedValue, $cNumberOfChars, $truncLength)
	{
		$highlightData = $this->searchClauseObj->getSearchHighlightingData( $this->field, $value, false, array() );
		if( !$highlightData )
			return $truncatedValue;

		$data = $this->getPocessedHTMLValueData( $value, strlen($value) );
		$processedValue = $data['value'];

		$firstSearchWordData = $this->getFirstSearchWordData($highlightData['searchWords'], $data['notContentPositions'], $processedValue);
		$firstPos = $firstSearchWordData["position"];
		$hasTags = $firstSearchWordData["hasTags"];	
		$firstSearchWord = $firstSearchWordData["searchWord"];
		
		if( $firstPos === FALSE )
			return $truncatedValue;
					
		if( $firstPos + strlen( $firstSearchWord ) <= $truncLength )
			return $this->getValueHighlighted($truncatedValue, $highlightData); 
	
		if( $firstPos <= $truncLength ) 
		{
			$truncatedUnicodeLength = runner_strlen( substr($value, 0, $truncLength) );
            $truncatedWithSearchWordUnicodeLength = runner_strlen( substr($value, 0,  $firstPos + strlen($firstSearchWord)));

			$data = $this->getPocessedHTMLValueData($value, $cNumberOfChars + $truncatedWithSearchWordUnicodeLength - $truncatedUnicodeLength);
			return $this->getValueHighlighted($data['value'], $highlightData); 
		}
		
		return $this->getValueHighlighted($truncatedValue, $highlightData)."&nbsp;&lt;...&gt;&nbsp;".$this->getSearchWordHighlighted($hasTags, $firstSearchWord);
	}

	/**
	 * Hightlight the search word passed
	 * @param Boolean hasTags
	 * @param String searchWord
	 * @return Boolean
	 */
	protected function getSearchWordHighlighted($hasTags, $searchWord)
	{
		if( !$hasTags )
			return $this->addHighlightingSpan($searchWord);
		
		$highligntedSearchWord = "";
		$tagPattern = "/(<[^=>]+\s*(?:(?:[^=>]+=\s*'[^']+'\s*)|".'(?:[^=>]+=\s*"[^"]+"\s*)'.")*>)/iU";
		$searchWordArr = $this->getSplitStringWithCapturedDelimiters($tagPattern, $searchWord); 
		foreach($searchWordArr as $item)
		{
			if( trim($item) && $item[0] != '<' && $item[ strlen($item) - 1 ] != '>' )
			{
				//remove tag fragments
				$newItem = preg_replace("/^.*>|<.*$/", '', $item);			
				$itemPattern = preg_quote($newItem,"/");
				$newItem = preg_replace('/('.$itemPattern.')/', $this->addHighlightingSpan('$1'), $newItem);
			}
			$highligntedSearchWord.= $newItem;	
		}
		return 	$highligntedSearchWord;
	}
	
	/**
	 * Get the first search word and its position in the HTML value content
	 * @param String searchWords
	 * @param Array notContentPositions
	 * @param String value
	 * @return Array
	 */
	protected function getFirstSearchWordData($searchWords, $notContentPositions, $value)
	{
		$hasTags = false;
		$firstSearchWord = "";
		$firstPos = strlen($value);
		$tagPattern = "/(<[^=>]+\s*(?:(?:[^=>]+=\s*'[^']+'\s*)|".'(?:[^=>]+=\s*"[^"]+"\s*)'.")*>)/iU";
		
		foreach($searchWords as $searchWord)
		{
			$pos = strpos($value, $searchWord);
			$hasTags = true;
			
			if( !preg_match($tagPattern, $searchWord, $matches) )
			{
				while( $this->notInContent($pos, $notContentPositions) && $pos !== FALSE )
				{
					$pos = strpos($value, $searchWord, $pos + 1);	
				}
				$hasTags = false;
			}
			
			if( $pos !== FALSE && $pos < $firstPos )
			{
				$firstPos = $pos;
				$firstSearchWord = $searchWord;
			}
		}
		return array("position"=> $firstPos != strlen($value) ? $firstPos : FALSE, "searchWord"=> $firstSearchWord, "hasTags"=> $hasTags);
	}
	
	/**
	 * Check if the position 'pos' is inside the HTML non content's parts (tags, 
	 * comments) basing on the array containing the non-content 
	 * start-end positions pairs (eg a tag's start and end positions)
	 * @param Number pos 
	 * @param Array notContentPositions 
	 * @return Boolean 
	 */
	protected function notInContent($pos, $notContentPositions)
	{
		foreach($notContentPositions as $positions)
		{
			if( $positions[0] <= $pos && $pos <= $positions[1] )
				return true;
		}
		return false;
	}
	
	/**
	 * Get the shortening HTML value
	 * @param String value				The field's content
	 * @param Number cNumberOfChars		
	 * @return String
	 */	
	protected function getShorteningText($value, $cNumberOfChars)
	{
		$data = $this->getPocessedHTMLValueData($value, $cNumberOfChars);
		if( $data["isTruncated"] )		
			return $data["value"]."&nbsp...";

		return $data["value"];
	}

	/**
	 * Get the corrected and highlighted HTML value
	 * @param String value
	 * @return String
	 */
	protected function getText($value)
	{
		$data = $this->getPocessedHTMLValueData( $value, strlen($value) );
		
		$value = $data['value'];
		if( $this->searchHighlight ) 
			$value = $this->highlightSearchWord($value, false, "");
		
		return $value;
	}
	
	/**
	 * Check if the tag has invisible content
	 * @param String tagName
	 * @return Boolean 
	 */
	protected function isInvisibleTag($tagName)
	{
		return $tagName == "style"; 
	}
	
	/**
	 * Check if the tag is a singleton
	 * @param String tagName
	 * @return Boolean 
	 */	
	protected function isTagSingleTon($tagName)
	{
		$singleTonTags = array("base", "br", "col", "command", "embed", "hr", "img", "input", "link", "meta", "param", "source");
		if( in_array( $tagName, $singleTonTags ) )
			return true;
		
		return false;
	}	
}
?>