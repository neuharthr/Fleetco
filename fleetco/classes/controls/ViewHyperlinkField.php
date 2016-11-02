<?php
class ViewHyperlinkField extends ViewControl
{
	public function showDBValue(&$data, $keylink)
	{
		if(!strlen($data[$this->field]))
			return "";
		$ret = $data[$this->field];
		$title = $ret;
		$link = $ret;
		if(substr($ret,strlen($ret)-1)=='#')
		{
			$i = strpos($ret,'#');
			$title = substr($ret,0,$i);
			$link = substr($ret,$i+1,strlen($ret)-$i-2);
			if(!$title)
				$title = $link;
		}
		$prefix = $this->getContainer()->pSet->getLinkPrefix($this->field);
		$target = $this->getContainer()->pSet->openLinkInNewWindow($this->field) ? " target=_blank" : ""; 
		$type = $this->getContainer()->pSet->getLinkType($this->field);
		
		$isExactMatched = false;
		if($this->searchHighlight)
		{
			$searchData = $this->pageObject->searchClauseObj->getSearchToHighlight($this->field);
			if($searchData)
			{
				$isExactMatched = true;
				foreach($searchData['searchWords'] as $searchWord)
				{
					if($searchWord != $data[$this->field])
					{
						$isExactMatched = false;
						break;
					}
				}
			}
		}
		// display word
		if($type == 1)
		{
			if($this->getContainer()->pSet->getLinkWordNameType($this->field) === "Text")
				$title = $this->getContainer()->pSet->getLinkWordText($this->field);
			else
				$title = GetCustomLabel($this->getContainer()->pSet->getLinkWordText($this->field));
			
			if($isExactMatched)
				$title = $this->addHighlightingSpan($title);
		}
		// display field content
		else if($type == 2)
		{
			$title = $data[$this->getContainer()->pSet->getLinkDisplayField($this->field)];
			
			if($isExactMatched)
				$title = $this->addHighlightingSpan($title);
			else if($this->field == $this->getContainer()->pSet->getLinkDisplayField($this->field) && $this->searchHighlight)
				$title = $this->highlightSearchWord(runner_htmlspecialchars($title), true, "");
		}
		// display url
		else
		{
			if($this->searchHighlight)
			{
				if($isExactMatched)
					$title = $this->addHighlightingSpan($prefix.$title);
				else
					$title = $prefix.$this->highlightSearchWord(runner_htmlspecialchars($title), true, "");
			}
			else
			{
				$title = runner_htmlspecialchars($prefix.$title);
			}
		}
		if(strpos($link,"://")===false && substr($link,0,7)!="mailto:")
			$link=$prefix.$link;

		return '<a href="'.runner_htmlspecialchars($link).'"'.$target.'>'.$title.'</a>';
	}

	/**
	 * @param &Array data
	 * @return String	 
	 */
	public function getTextValue(&$data)
	{
		if( !strlen( $data[ $this->field ] ) )
			return "";	

		$link = $data[ $this->field ];
		if( substr($ret, strlen($ret) - 1) == '#' )
		{
			$i = strpos($ret, '#');
			$link = substr($ret, $i + 1, strlen($ret) - $i - 2);
		}
		
		$prefix = $this->getContainer()->pSet->getLinkPrefix( $this->field );
		
		if( strpos($link, "://") === false && substr($link, 0, 7) != "mailto:" )
			$link = $prefix.$link;			
		
		return $link;
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