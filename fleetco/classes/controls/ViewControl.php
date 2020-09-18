<?php
class ViewControl
{
	public $field = "";
	public $displayField = null;
	/**
	 * Reference to ViewControlsContainer instance
	 */
	public $container = null;
	/**
	 * Reference to RunnerPage (or its descendant) instance if its exist
	 */
	public $pageObject = null;
	/**
	 * A flag indicating whether the support for section 508 is on
	 * @var {bool}
	 */
	public $is508 = false;
	public $fieldType = null;
	public $viewFormat = FORMAT_NONE;
	public $editFormat = EDIT_FORMAT_NONE;
	public $localControlsContainer = null;
	public $linkAndDisplaySame = null;
	
	/**
	* The search clause object obtained from the page's object
	*/
	public $searchClauseObj = null;
	
	/**
	 * Storage for control settings. It fills in the init() function. 
	 * @var {array}
	 */
	public $settings = array();
	
	/**
	 * Array of view controls map
	 *
	 * @var array
	 */	
	public $viewControlsMap = array();
	
	/**
	 * Set to true, if it is custom user control
	 * @var boolean
	 */
	protected $userControl = false;
	
	/**
	 * A flag indicating whether to higlight search results ot not
	 * @var boolean
	 */	
	public $searchHighlight = false;
	
	/**
	 * A flag indicating whether the view control is used for a filter or not
	 * @var boolean
	 */
	public $isUsedForFilter = false;

	/**
	 * A flag indicating if the field is table based multiselect
	 * lookup with the same link and displayed fields 
	 * and needs comma/quotes processing
	 */
	protected $needLookupValueProcessing = true;
	
	/**
	 * A flag indicating if the field is lookup
	 */
	protected $isFieldLookup = false;
	
	protected $useUTF8 = false;
	
	/**
	 * addJSFiles
	 * Add control JS files to page object
	 */
	public function addJSFiles()
	{
		//example
		// $this->AddJSFile("include/mupload.js");
	}
	
	/**
	 * addCSSFiles
	 * Add control CSS files to page object
	 */ 
	public function addCSSFiles()
	{
		//example
		// $this->AddCSSFile("include/mupload.css");
	}

	/**
	 * The container's AddCSSFile method wrapper
	 * @param {String}
	 */
	public function AddCSSFile($fileName) 
	{
		$this->getContainer()->AddCSSFile($fileName);
	}
	
	/**
	 * The container's AddJSFile method wrapper
	 * @param {String}
	 */	
	public function AddJSFile($fileName, $req1="", $req2="", $req3="") 
	{
		$this->getContainer()->AddJSFile($fileName,  $req1, $req2, $req3);
	}
	
	public function getContainer()
	{
		if(!is_null($this->pageObject))
			return $this->pageObject;
		else
			return $this->container;
	}
	
	public function __construct($field, $container, $pageObject = null)
	{	
		$this->useUTF8 = "utf-8" == "utf-8";
		$this->field = $field;
		$this->container = $container;
		$this->pageObject = $pageObject;
		$this->is508 = isEnableSection508();
		
		$this->fieldType = $container->pSet->getFieldType($this->field);
		$this->viewFormat = $container->pSet->getViewFormat($this->field);
		$this->editFormat = $container->pSet->getEditFormat($this->field);
		
		if( $this->pageObject )
		{
			$this->searchClauseObj = $this->pageObject->searchClauseObj;
			if ( $this->searchClauseObj )
				$this->searchHighlight = $container->searchHighlight &&	$this->searchClauseObj->bIsUsedSrch; 
		}	
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
	 * Get the field's content
	 * @param &Array data
	 * @param String keylink
	 * @return String	 
	 */
	public function showDBValue(&$data, $keylink)
	{
		$value = $data[$this->field];
				
		if(IsBinaryType($this->fieldType))
		{
			$value = mlang_message("LONG_BINARY");
			$this->searchHighlight = false; 
		} 
		
		if($value === false)
			$value = "";
		
	
		if($this->editFormat == EDIT_FORMAT_CHECKBOX && $this->viewFormat == FORMAT_NONE)
		{
			if($value && $value!=0)
				$value = mlang_message("YES");
			else
				$value = mlang_message("NO");
				
			$this->searchHighlight = false; 	
		}		
		
		if($this->container->forExport == "excel" || $this->container->forExport == "csv")
		{
			return $value;
		}
		
		$processedText = $this->processText($value, $keylink);
		return nl2br( $processedText );
	}
	
	/**
	 * @param &Array data
	 * @return String	 
	 */
	public function getTextValue(&$data)
	{
		return $data[ $this->field ];
	}
	
	/**
	 * Format the text trunceting it or highlighting the search word within this text.
	 * @param String value			The field's content
	 * @param String keylink		
	 * @return String
	 */			
	public function processText($value, $keylink)
	{
		$isMobileLookup = false;
		$inlineOrFlyMode = false; 
		$pageType = $this->container->pageType;		
		if( !is_null($this->pageObject) )
		{
			$mode = $this->pageObject->mode;
			$isMobileLookup = ($mode == LIST_LOOKUP) && $this->pageObject->mobileTemplateMode();
			$inlineOrFlyMode = $pageType == PAGE_EDIT && ($mode == EDIT_INLINE || $mode == EDIT_POPUP) || $pageType == PAGE_ADD && ($mode == ADD_INLINE || $mode == ADD_POPUP);
		}
		$isDetailPreview = $this->container->isDetailsPreview;
		
		if( $pageType == PAGE_ADD || $pageType == PAGE_EDIT )
			$pageType = PAGE_VIEW;

		$isPagePrint = ($pageType == PAGE_RPRINT && $this->container->forExport) || $pageType == PAGE_PRINT || $pageType == PAGE_RPRINT;
			
		if( $this->editFormat == EDIT_FORMAT_LOOKUP_WIZARD )
		{
			$this->isFieldLookup = true;
			$this->needLookupValueProcessing = $this->checkIfLookupValueIsToProcess();
			$value = $this->processMultiselectLWValue($value);	
		}
		
		$cNumberOfChars = $this->container->pSet->getNumberOfChars();
		$needShortening = $this->textNeedsTruncating($value, $cNumberOfChars);
		
		if( $needShortening && ($pageType == PAGE_LIST || $pageType == PAGE_REPORT || $inlineOrFlyMode) && !$isMobileLookup && !$isDetailPreview && $keylink != "")
			return $this->getShorteningTextAndMoreLink($value, $cNumberOfChars, $keylink, $mode);
		
		if( $needShortening && ($isPagePrint || $isMobileLookup || $isDetailPreview) )
			return $this->getShorteningText($value, $cNumberOfChars);

		return $this->getText($value);
	}
		
	/**
	 * Check if the text needs truncating 
	 * @param String value				The field's content
	 * @param Number cNumberOfChars		The number of chars from the 'value' string that will be visible after truncation 
	 * @return Boolean
	 */
	protected function textNeedsTruncating($value, $cNumberOfChars) 
	{
		return !$this->isUsedForFilter && !$this->container->fullText && $cNumberOfChars > 0 && runner_strlen($value) > $cNumberOfChars;
	}
	
	/**
	 * The object's wrapper for GetShorteningForLargeText function
	 * @param String value				The field's content
	 * @param Number cNumberOfChars		The number of chars up to truncation
	 * @return String
	 */
	protected function getShorteningText($value, $cNumberOfChars)
	{
		return GetShorteningForLargeText($value, $cNumberOfChars)."&nbsp;...";
	}
	
	/**
	 * Get the More link following the truncated and highlighted field's content
	 * @param String value				The field's content
	 * @param Number cNumberOfChars		The number of chars from the 'value' string that will be visible after truncation 
	 * @param String keylink	
	 * @param Boolean isLookup			An indicator showing if this is a lookup list page control	
	 * @return String	
	 */
	protected function getShorteningTextAndMoreLink($value, $cNumberOfChars, $keylink, $mode)
	{		
		$truncatedValue = GetShorteningForLargeText($value, $cNumberOfChars);
		if( $this->searchHighlight ) 
			$truncatedValue = $this->highlightTruncatedBeforeMore($value, $truncatedValue, $cNumberOfChars, $cNumberOfChars);
			
		$tName = $this->getContainer()->tName;
		$params = 'pagetype='.$this->container->pSet->_viewPage.'&table='.GetTableURL($tName).'&field='.rawurlencode($this->field).$keylink;
		
		if ( $mode == LIST_DASHBOARD )
			$params.= '&mode='.$mode;
		
		if ( $mode == LIST_LOOKUP )
			$params.= '&maintable='.$this->pageObject->mainTable.'&mainfield='.$this->pageObject->mainField;
					
		return $truncatedValue.' <a href="javascript:void(0);" data-query="'.GetTableLink('fulltext', '', $params).'">'.mlang_message("MORE").'&nbsp;...</a>';
	}

	/**
	 * Get the encoded and highlighted text
	 * @param String value
	 * @return String
	 */
	protected function getText($value)
	{
		$value = runner_htmlspecialchars($value);
		if( $this->searchHighlight ) 
			$value = $this->highlightSearchWord($value, true, "");
		
		return $value;
	}
	
	/**
	 * Check if the fiedl is the project or database table's 
	 * multiselect lookup wizard with the same link and display field
	 */
	protected function checkIfLookupValueIsToProcess()
	{
		$pSet = $this->container->pSet;
		
		if( ($pSet->getLookupType($this->field) == LT_LOOKUPTABLE || $pSet->getLookupType($this->field) == LT_QUERY) &&
			$pSet->getLinkField($this->field) == $pSet->getDisplayField($this->field) && $pSet->multiSelect($this->field) ) 
		{
			return true;
		}
		
		return false;	
	}
	
	/**
	 * Remove excessive quotes for the multiselect lookup wizard field with 
	 * the same display and link field
	 * @param string value
	 * @return string
	 */
	protected function processMultiselectLWValue($value)
	{
		if( !$this->needLookupValueProcessing )
			return $value;
		
		return implode(",", splitvalues($value));
	}	
	
	/**
	 * Highlight the search word within the $value string
	 * @param String value		The field's content
	 * @param Boolean encoded	An indicator showing if the field's content is htmlspecialchars encoded
	 * @param String dbValue	The database field's value
	 * @return string
	 */	
	public function highlightSearchWord($value, $encoded, $dbValue = "")
	{
		if( $dbValue == "" )
		{
			$dbValue = $value;
		}

		$lookupParams = $this->getLookupParams();
		$highlightData = $this->searchClauseObj->getSearchHighlightingData($this->field, $dbValue, $encoded, $lookupParams);
		if( !$highlightData )
		{
			return $value;
		}
		return $this->getValueHighlighted($value, $highlightData); 
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
		$searchWordsPattern = $this->getSearchWordPattern($highlightData['searchWords'], false);
		
		switch($searchOpt)
		{
			case 'Equals':
				return $this->addHighlightingSpan($value);
	
			case 'Starts with':
				return preg_replace('/(^'.$searchWordsPattern.')/i', $this->addHighlightingSpan('$1'), $value);
			
			case 'Contains':
				$pattern = '/('.$searchWordsPattern.')/i';
				
				if( !$this->haveTheSameSpChReference($pattern, $value) ) 
					return preg_replace($pattern, $this->addHighlightingSpan('$1'), $value);

				return $this->highlightValueWithSpecialChars($value, $pattern);
			
			default:
				return $value;
		}		
	}

	/**
	 * Check if the pattern string is contained in any special chars codes 
	 * occuring in the value string.
	 * @param string pattern
	 * @param string value
	 * @return array	
	 */	
	protected function haveTheSameSpChReference($pattern, $value)
	{
		$scContainedPattern = $this->getSpecialCharsContainingPattern($pattern);
		$scFromValue = $this->getSpecialCharsFromString($value);
		foreach($scContainedPattern as $sc)
		{
			if( array_search($sc, $scFromValue) !== FALSE )
				return true;	
		}
		return false;
	}
	
	/**
	 * Get the array of special chars contained the pattern
	 * @param string pattern
	 * @return array	
	 */	
	protected function getSpecialCharsContainingPattern($pattern)
	{
		$chars = array('&amp;', '&quot;', '&lt;', '&gt;');
		$csArray = array();
		foreach($chars as $char) 
		{
			if( preg_match($pattern, $char, $matches) )
			{
				if( $matches[0] != $char )
					$csArray[] = $char;
			}
		}	
		return $csArray;	
	}

	/**
 	 * Get the array of special chars extracted from the string passed
	 * @param string str
	 * @return array	
	 */	
	protected function getSpecialCharsFromString($str)
	{
		$chars = array('&amp;', '&quot;', '&lt;', '&gt;');
		$csArray = array();
		foreach($chars as $char)
		{
			if( strpos($str, $char) !== FALSE )
				$csArray[] = $char;
		}
		
		return $csArray;		
	}		

	/**
	 * Split the string into array that contains all the string's not overlaping
	 * fragments that are delimeter-substrings and all non-delimeter parts
	 * adjacent with delimiter-substrings. These fragments are indexed in the
	 * same order as they occur in the string.
	 * @param String pattern	The regular expression setting delimeter strings
	 * @param String str		The string that is split based on its delimiter-substrings occurrences
	 * @return Array
	 */
	protected function getSplitStringWithCapturedDelimiters($pattern, $str)
	{
		$resArray = array();
		
		if( !strlen($str) )
			return $resArray ;
		
		if( !preg_match_all($pattern, $str, $matches) ) 
		{
			$resArray[] = $str; 
			return $resArray;
		}
		
		$delimiters = $matches[0];
		$strArray = preg_split($pattern, $str);
		foreach($strArray as $key=>$item)
		{
			$resArray[] = $item;
			if( isset( $delimiters[$key] ) ) 
				$resArray[] = $delimiters[$key];
		}
		
		return $resArray;	
	}
	
	/**
	 * Highlight the value escaping the special chars codes	
	 * @param string pattern
	 * @param string value
	 * @return string
	 */
	protected function highlightValueWithSpecialChars($value, $pattern) 
	{
		$chars = array('&amp;', '&quot;', '&lt;', '&gt;');
		foreach($chars as $char) 
		{
			$valueArr = $this->getSplitStringWithCapturedDelimiters('/'.$char.'/', $value);
			if( count($valueArr) == 1 || !preg_match($pattern, $char, $matches) ) 
				continue;
				
			$valueArr2 = array();
			
			foreach($valueArr as $key=>$part)
			{				
				if( $part != $char )
					$valueArr2[] = preg_replace($pattern, $this->addHighlightingSpan('$1'), $part);
				else 
					$valueArr2[] = $char;				
			}
			
			$value = implode("",$valueArr2);	
		}
		return $value;
	}

	/**
	 * Check if the item string has HTML entities
	 * @param String item
	 * @return Boolean
	 */
	protected function hasHTMLEntities($item)
	{
		if( preg_match_all("/&[^&;]{3,7};/", $item, $matches) )
		{
			foreach($matches[0] as $entity)
			{
				$data = getHTMLEntityData($entity);
				if( $data['isHTMLEntity'] ) 
					return true;
			}
		}
		return false;
	}
	
	/**
	 * Highlight item string basing on the pattern value
	 * skipping the HTML entities
	 * @param String item
	 * @param String pattern
	 * @return String
	 */
	protected function highlightValueWithHTMLEntities($item, $pattern)
	{
		$valueArr = $this->getSplitStringWithCapturedDelimiters("/&[^&;]{3,7};/", $item);
		$valueArr2 = array();
		foreach($valueArr as $subitem)
		{
			$data = getHTMLEntityData($subitem);
			if( $data['isHTMLEntity'] )	
				$valueArr2[] = $subitem;
			else
				$valueArr2[] = preg_replace($pattern, $this->addHighlightingSpan('$1'), $subitem);
		}
		return implode("",$valueArr2);	
	}
	
	/**
	 * Get the lookup params and settings to pass it 
	 * to the searchClause object's getSearchHighlightingData method 
	 * @return Array
	 */
	protected function getLookupParams()
	{
		$lookupParams = array();

		if( $this->isFieldLookup )
		{
			$pSet = $this->container->pSet;	
			$lookupParams["multiselect"] = $pSet->multiSelect($this->field);
			$lookupParams["needLookupProcessing"] = $this->needLookupValueProcessing;
			//linkFieldValue and originLinkValue params are set for looku fields with distinct Link and Displayed fields only
			$lookupParams["linkFieldValue"] = $this->container->linkFieldValues[$this->field];
			//originLinkValue param is set for multiselet lookups only
			$lookupParams["originLinkValue"] = $this->container->originlinkValues[$this->field];
		}
		return $lookupParams;		
	}

	/**
	 * Get the first search word from the text truncating field's value
	 * @param Array searchWords
	 * @param String value			The raw field's value
	 * @return String
	 */
	protected function getFirstSearchWordInLargeText($searchWords, $value)
	{	
		$searchWordsPattern = $this->getSearchWordPattern($searchWords, false);
		
		if( preg_match('/'.$searchWordsPattern.'/i', $value, $matches) )
			return $matches[0];
			
		return $searchWords[0];	
	}
	
	/**
	 * Format the string before the "More ..." link and highlight a search word depending on the search option's value.
	 * @param String value				The raw field's content
	 * @param String truncatedValue	 	The truncated, htmlspecialchars encoded field's content
	 * @param Number cNumberOfChars	
     * @prarm Number contenLength		The length of the truncated value	 
	 * @return string
	 */	
	protected function highlightTruncatedBeforeMore($value, $truncatedValue, $cNumberOfChars, $contenLength)
	{			
		$lookupParams = $this->getLookupParams();	
		$highlightData = $this->searchClauseObj->getSearchHighlightingData($this->field, $value, false, $lookupParams);
		if(!$highlightData)
		{
			return $truncatedValue;
		}
		
		$searchWord = $this->getFirstSearchWordInLargeText($highlightData['searchWords'], $value);		
		$searchWordEncoded = runner_htmlspecialchars($searchWord);
		$highlighting = $this->addHighlightingSpan($searchWordEncoded);	
		$searchOpt = $highlightData['searchOpt'];

		switch ($searchOpt) 
		{
			case 'Equals':
				return $this->addHighlightingSpan($truncatedValue); 

			case 'Starts with':
				if( strlen($searchWordEncoded) > strlen($truncatedValue) )
					return $this->addHighlightingSpan($truncatedValue);  
					
				return preg_replace('/^'.preg_quote($searchWordEncoded,"/").'/i', $highlighting, $truncatedValue);	

			case 'Contains':		
				$regExpModifier = $this->useUTF8 ? 'u' : '';
				
				$firstPos = $this->getFistOccurencePosition($value, $searchWord, $searchWordEncoded);
				$lastPos = $this->getLastOccurencePosition($value, $searchWord, $searchWordEncoded);
				$searchWordEncodedLen = runner_strlen($searchWordEncoded);
				$truncLen = runner_strlen($truncatedValue);
				
				$pattern = '/('.$this->getSearchWordPattern($highlightData['searchWords'], true).')/i';	
				
				if( $lastPos + $searchWordEncodedLen <= $truncLen || $firstPos + $searchWordEncodedLen <= $truncLen )
				{
					if( !$this->haveTheSameSpChReference($pattern, $truncatedValue) )
						return preg_replace($pattern.$regExpModifier, $this->addHighlightingSpan('$1'), $truncatedValue);
						
					return $this->highlightValueWithSpecialChars($truncatedValue, $pattern.$regExpModifier);	
				}
				
				if( $firstPos > $truncLen )
				{
					$newNumberOfChars = ceil($cNumberOfChars / 2);
					$qNumberOfChars = ceil($cNumberOfChars / 4);
					$firstPosDecoded = runner_strpos($value, $searchWord);
					
					$truncSubsr = runner_substr($value, 0, $cNumberOfChars);
					$valueSubstr = runner_substr($value, $firstPosDecoded - $qNumberOfChars, $qNumberOfChars + runner_strlen($searchWord));
					$truncSubsr = runner_substr($truncSubsr, 0, $newNumberOfChars);
					$valueSubstr = runner_htmlspecialchars($valueSubstr);
					
					$pattern = '/('.preg_quote($searchWordEncoded,"/").')/i';
					
					if( !$this->haveTheSameSpChReference($pattern, $valueSubstr) )
						$valueSubstr = preg_replace($pattern.$regExpModifier, $highlighting, $valueSubstr);
					else 
						$valueSubstr = $this->highlightValueWithSpecialChars($valueSubstr, $pattern.$regExpModifier);
				
					return runner_htmlspecialchars($truncSubsr)."&nbsp;&lt;...&gt;&nbsp;".$valueSubstr;;
				}
				
				return runner_substr($truncatedValue, 0, $firstPos).$highlighting;

			default:
				return $truncatedValue;
		}	
	}	

	/**
	 * Get the first searchWord occurence in the encoded value string
	 * @param String value
	 * @param String searchWord
	 * @param String searchWordEncoded
	 * @return Number
	 */
	protected function getFistOccurencePosition($value, $searchWord, $searchWordEncoded)
	{
		$planeFirstPos = strpos($value, $searchWord);
		$planeSubstr = substr($value, 0, $planeFirstPos);
		$encodedPlaneSubstr = runner_htmlspecialchars($planeSubstr);
		
		return runner_strpos( runner_htmlspecialchars($value), $searchWordEncoded, runner_strlen($encodedPlaneSubstr) );
	}
	
	/**
	 * Get the last searchWord occurence in the encoded value string
	 * @param String value
	 * @param String searchWord
	 * @param String searchWordEncoded
	 * @return Number
	 */	
	protected function getLastOccurencePosition($value, $searchWord, $searchWordEncoded)
	{
		$planeLastPos = strrpos($value, $searchWord);
		$planeSubstr = substr($value, 0, $planeLastPos);
		$encodedPlaneSubstr = runner_htmlspecialchars($planeSubstr);
		
		return runner_strrpos(runner_htmlspecialchars($value), $searchWordEncoded, runner_strlen($encodedPlaneSubstr));
	}
	
	/**
	 * Get common search words pattern
	 * @param Array searchWords
	 * @param Boolean encoded
	 * @return String
	 */
	protected function getSearchWordPattern($searchWords, $encoded = false)
	{
		$searchWordsPatterns = array();
		foreach($searchWords as $searchWord)
		{
			$wordPattern = preg_quote($searchWord, "/");
			if( $encoded )
				$wordPattern = runner_htmlspecialchars($wordPattern);
			
			$searchWordsPatterns[] = $wordPattern;
		}
		return implode('|', $searchWordsPatterns);	
	}	
	
	/**
	 * Wrap the string value with a span element
	 * @param String str
	 * @return String
	 */
	public function addHighlightingSpan($str)
	{
		return '<span class="rnr-search-highlight">'.$str.'</span>';
	}
	
	public function & getJSControl()
	{
		if(!isset($this->getContainer()->viewControlsMap["controls"]))
			$this->getContainer()->viewControlsMap["controls"] = array();
			
		for($i = 0; $i < count($this->getContainer()->viewControlsMap["controls"]); $i++) 
		{
			if($this->getContainer()->viewControlsMap["controls"][$i]["fieldName"] == $this->field)
				return $this->getContainer()->viewControlsMap["controls"][$i];
		}
		
		$controlData = array("fieldName" => $this->field, "viewFormat" => $this->viewFormat);
		$this->getContainer()->viewControlsMap["controls"][] = $controlData ;			
		return $controlData;
	}
	
	/**
	 * addJSControlSetting
	 * Add setting for JS control to controls map
	 * @param {string} setting name
	 * @param {object} setting value
	 */
	public function addJSControlSetting($name, $value)
	{
		$JScontrol =& $this->getJSControl();
		$JScontrol[$name] = $value;
	}
	
	/**
	 * Check for need to load the javascript files
	 * @return boolean
	 */
	public function neededLoadJSFiles()
	{
		switch ($this->getContainer()->pageType)
		{
			case PAGE_PRINT:
				return false;
			default:
				return true;
		}
	}
	
	/**
	 * Returns true if it is user control
	 * @return boolean
	 */
	public function isUserControl()
	{
		return $this->userControl && $this->userControl === true;
	}

	/**
	 * Returns css code for thumbnail size optionally wrapped into style="" attribute
	 */
	protected function getThumbnailSizeStyle($returnStyleAttr = true)
	{
		$width = $this->container->pSet->getThumbnailSize($this->field);
		if(!$width)
			return "";
		$style = 'max-width:'.$width.'px; max-height:'.$width.'px;';
		if( $returnStyleAttr )
			return ' style="'.$style.'"';
		return $style;
	}

	/**
	 * Returns css code for image size optionally wrapped into style="" attribute
	 */
	protected function getImageSizeStyle($returnStyleAttr = true)
	{
		$imgWidth = $this->container->pSet->getImageWidth($this->field);
		$imgHeight = $this->container->pSet->getImageHeight($this->field);
		if(!$imgWidth && !$imgHeight)
			return "";
		$style = '';
		if( $imgWidth )
			$style .= 'max-width:'.$imgWidth.'px;';
		if( $imgHeight )
			$style .= 'max-height:'.$imgHeight.'px;';
		if( $returnStyleAttr )
			return ' style="'.$style.'"';
		return $style;
	}
	
	/**
	 * User API function
	 * @param Array data
	 * @param String field
	 * @param String table		The datasource table name
	 */
	public static function Format($data, $field, $table )
	{
		global $strTableName;
		if(!$table)
			$table = $strTableName;
		$pSet = new ProjectSettings( $table );
		
		include_once getabspath("classes/controls/ViewControlsContainer.php");
		$viewControls = new ViewControlsContainer( $pSet, PAGE_VIEW );
		
		return $viewControls->getControl( $field )->getTextValue( $data );
	}
}

class ViewControlTypes
{
	public $viewTypes = array();
		
	function __construct() 
	{		
		$this->viewTypes[FORMAT_NONE] = "";
		$this->viewTypes[FORMAT_DATE_SHORT] = "ViewShortDateField";
		$this->viewTypes[FORMAT_DATE_LONG] = "ViewLongDateField";
		$this->viewTypes[FORMAT_DATE_TIME] = "ViewDatetimeField";
		$this->viewTypes[FORMAT_TIME] = "ViewTimeField";
		$this->viewTypes[FORMAT_CURRENCY] = "ViewCurrencyField";
		$this->viewTypes[FORMAT_PERCENT] = "ViewPercentField";
		$this->viewTypes[FORMAT_HYPERLINK] = "ViewHyperlinkField";
		$this->viewTypes[FORMAT_EMAILHYPERLINK] = "ViewEmailHyperlinkField";
		$this->viewTypes[FORMAT_DATABASE_IMAGE] = "ViewDatabaseImageField";
		$this->viewTypes[FORMAT_DATABASE_FILE] = "ViewDatabaseFileField";
		$this->viewTypes[FORMAT_FILE] = "ViewFileDownloadField";
		$this->viewTypes[FORMAT_FILE_IMAGE] = "ViewImageDownloadField";
		$this->viewTypes[FORMAT_PHONE_NUMBER] = "ViewPhoneNumberField";
		$this->viewTypes[FORMAT_NUMBER] = "ViewNumberField";
		$this->viewTypes[FORMAT_CHECKBOX] = "ViewCheckboxField";
		$this->viewTypes[FORMAT_MAP] = "ViewMapField";
		$this->viewTypes[FORMAT_AUDIO] = "ViewAudioFileField";
		$this->viewTypes[FORMAT_DATABASE_AUDIO] = "ViewDatabaseAudioField";
		$this->viewTypes[FORMAT_VIDEO] = "ViewVideoFileField";
		$this->viewTypes[FORMAT_DATABASE_VIDEO] = "ViewDatabaseVideoField";
		$this->viewTypes[FORMAT_CUSTOM] = "ViewCustomField";
		$this->viewTypes[FORMAT_LOOKUP_WIZARD] = "ViewLookupWizardField";
		$this->viewTypes[FORMAT_HTML] = "ViewHTMLField";
	}
}
?>