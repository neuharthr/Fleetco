<?php
class EditControl
{
	/**
	 * Reference to RunnerPage (or its descendant) instance 
	 */
	public $pageObject = null;
	/**
	 * Reference to EditControlsContainer instance
	 */
	public $container = null;
	
	public $id = "";
	public $field = "";
	public $goodFieldName = "";
	public $format = "";
	/**
	 * Field name prefix
	 * @var {string}
	 */
	public $cfieldname = "";
	/**
	 * Value field name
	 * @var {string}
	 */
	public $cfield = "";
	/**
	 * Type field name
	 * @var {string}
	 */
	public $ctype = "";
	/**
	 * A flag indicating whether the support for section 508 is on
	 * @var {bool}
	 */
	public $is508 = false;
	public $strLabel = "";
	public $type = "";
	public $inputStyle = "";
	public $iquery = "";
	public $keylink = "";
	public $webValue = null;
	public $webType = null;
	
	/**
	 * Storage for control settings. It fills in the init() function. 
	 * @var {array}
	 */
	public $settings = array();
	
	//Search params
	public $isOracle = false;
	public $ismssql = false;
	public $isdb2 = false;
	public $btexttype = false;
	public $isMysql = false;
	public $like = "like";
	
	public $searchOptions = array();
	
	public $searchPanelControl = false;
	public $data = array();
	
	/**
	 * @type Connection
	 */
	protected $connection;
	
	
	function __construct($field, $pageObject, $id, $connection)
	{
		$this->field = $field;
		$this->goodFieldName = GoodFieldName($field);
		$this->setID($id);
		$this->connection = $connection;

		$this->pageObject = $pageObject;

		$this->is508 = isEnableSection508();
		
		$this->strLabel = $pageObject->pSetEdit->label($field);
		$this->type = $pageObject->pSetEdit->getFieldType($this->field);
		
		if( $this->connection->dbType == nDATABASE_Oracle )
			$this->isOracle = true;

		if( $this->connection->dbType == nDATABASE_MSSQLServer )
			$this->ismssql=true;

		if( $this->connection->dbType == nDATABASE_DB2 )
			$this->isdb2=true;

		if( $this->connection->dbType == nDATABASE_MySQL )
			$this->isMysql = true;

		if( $this->connection->dbType == nDATABASE_PostgreSQL )
			$this->like = "ilike";

		$this->searchOptions[CONTAINS] = mlang_message("CONTAINS");
		$this->searchOptions[EQUALS] = mlang_message("EQUALS");
		$this->searchOptions[STARTS_WITH] = mlang_message("STARTS_WITH");
		$this->searchOptions[MORE_THAN] = mlang_message("MORE_THAN");
		$this->searchOptions[LESS_THAN] = mlang_message("LESS_THAN");
		$this->searchOptions[BETWEEN] = mlang_message("BETWEEN");
		$this->searchOptions[EMPTY_SEARCH] = mlang_message("EMPTY");
		$this->searchOptions[NOT_CONTAINS] = mlang_message("SEARCH_NOT_CONTAINS");
		$this->searchOptions[NOT_EQUALS] = mlang_message("SEARCH_NOT_EQUALS");
		$this->searchOptions[NOT_STARTS_WITH] = mlang_message("SEARCH_NOT_STARTS_WITH");
		$this->searchOptions[NOT_MORE_THAN] = mlang_message("SEARCH_NOT_MORE_THAN");
		$this->searchOptions[NOT_LESS_THAN] = mlang_message("SEARCH_NOT_LESS_THAN");
		$this->searchOptions[NOT_BETWEEN] = mlang_message("SEARCH_NOT_BETWEEN");
		$this->searchOptions[NOT_EMPTY] = mlang_message("SEARCH_NOT_EMPTY");
		
		$this->init();
	}
	
	function setID($id)
	{
		$this->id = $id;		
		$this->cfieldname = $this->goodFieldName."_".$id;
		$this->cfield = "value_".$this->goodFieldName."_".$id;
		$this->ctype = "type_".$this->goodFieldName."_".$id;
	}
	 
	/**
	 * addJSFiles
	 * Add control JS files to page object
	 */
	function addJSFiles()
	{
		//example
		// $this->pageObject->AddJSFile("include/mupload.js");
	}
	
	/**
	 * addCSSFiles
	 * Add control CSS files to page object
	 */ 
	function addCSSFiles()
	{
		//example
		// $this->pageObject->AddCSSFile("include/mupload.css");
	}
	
	function getSetting($key)
	{
		return $this->pageObject->pSetEdit->getFieldData($this->field, $key);
	}
	
	function addJSSetting($key, $value)
	{
		$this->pageObject->jsSettings['tableSettings'][$this->pageObject->tName]['fieldSettings'][$this->field][$this->container->pageType][$key] = $value;
	}
	
	function buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		$this->searchPanelControl = $this->isSearchPanelControl( $mode, $additionalCtrlParams );
		$this->inputStyle = $this->getInputStyle( $mode );
	
		if($fieldNum)
		{
			$this->cfield="value".$fieldNum."_".$this->goodFieldName."_".$this->id;
			$this->ctype="type".$fieldNum."_".$this->goodFieldName."_".$this->id;
		}

		$this->iquery = "field=".rawurlencode($this->field);
	
		$arrKeys = $this->pageObject->pSetEdit->getTableKeys();
		for ($j = 0; $j < count($arrKeys); $j++) 
		{
			$this->keylink .= "&key".($j+1)."=".rawurlencode($data[$arrKeys[$j]]);
		}
		$this->iquery .= $this->keylink;
					
		$isHidden = (isset($additionalCtrlParams['hidden']) && $additionalCtrlParams['hidden']);

		$additionalClass = "";
		if( $this->pageObject->getLayoutVersion() == BOOTSTRAP_LAYOUT )
		{		
			$additionalClass.= "bs-ctrlspan rnr-nowrap ";
			if( $this->format == EDIT_FORMAT_READONLY )
				$additionalClass.= "form-control-static ";
			
			if( count($validate['basicValidate']) && array_search('IsRequired', $validate['basicValidate']) !== false )	
				$additionalClass.= "bs-inlinerequired";
		}
		else
		{
			$additionalClass.= "rnr-nowrap ";
		}

		echo '<span id="edit'.$this->id.'_'.$this->goodFieldName.'_'.$fieldNum.'" class="'.$additionalClass.'"'.($isHidden ? ' style="display:none"' : '').'>';
	}

	function getFirstElementId()
	{
		return false;
	}
	
	/**
	 * Check if the contril belongs to the Search Panel
	 * @param Number mode
	 * @param Array additionalCtrlParams
	 * @return Boolean
	 */
	function isSearchPanelControl( $mode, $additionalCtrlParams )
	{
		return $mode == MODE_SEARCH && isset( $additionalCtrlParams['searchPanelControl'] ) && $additionalCtrlParams['searchPanelControl'] && !$this->pageObject->mobileTemplateMode();
	}
	
	function buildControlEnd($validate, $mode)
	{
		if( $this->pageObject->getLayoutVersion() == BOOTSTRAP_LAYOUT )
			echo '</span>';
		else if(count($validate['basicValidate']) && array_search('IsRequired', $validate['basicValidate'])!==false)
			echo'&nbsp;<font color="red">*</font></span>';
		else
			echo '</span>';
	}
	
	function getPostValueAndType()
	{
		$this->webValue = postvalue("value_".$this->goodFieldName."_".$this->id);
		$this->webType = postvalue("type_".$this->goodFieldName."_".$this->id);
	}
	
	function getWebValue()
	{
		return $this->webValue;
	}
	
	function readWebValue(&$avalues, &$blobfields, $legacy1, $legacy2, &$filename_values)
	{
		$this->getPostValueAndType();
		if (FieldSubmitted($this->goodFieldName."_".$this->id))
			$this->webValue = prepare_for_db($this->field, $this->webValue, $this->webType);
		else
			$this->webValue = false;
			
		if($this->pageObject->pageType == PAGE_EDIT && $this->pageObject->pSetEdit->isReadonly($this->field))
		{
			if( $this->pageObject->pSetEdit->getAutoUpdateValue($this->field) ) 
				$this->webValue = $this->pageObject->pSetEdit->getAutoUpdateValue($this->field);
			else
				if($this->pageObject->pSetEdit->getOwnerTable($this->field) != $this->pageObject->pSetEdit->getStrOriginalTableName())
					$this->webValue = false;
		}
		
		if(!($this->webValue===false))
		{
			if( $this->connection->dbType == nDATABASE_Informix )
			{
				if(IsTextType($this->pageObject->pSetEdit->getFieldType($this->field)))
					$blobfields[] = $this->field;
			}
			$avalues[$this->field] = $this->webValue;
		}
	} 
	
	/**
	 * @param String strSearchOption
	 * @return String | Boolean
	 */
	function baseSQLWhere($strSearchOption)
	{
		if(IsBinaryType($this->type))
			return false;
		
		if( $this->connection->dbType != nDATABASE_MySQL )	
			$this->btexttype = IsTextType($this->type);
		
		if( $this->connection->dbType == nDATABASE_MSSQLServer )
		{
			if($this->btexttype && $strSearchOption!="Contains" && $strSearchOption!="Starts with" )
				return false;
		}
		
		if($strSearchOption != 'Empty')
			return "";
		
		$fullFieldName = $this->getFieldSQLDecrypt();
		
		if( IsCharType($this->type) && (!$this->ismssql || !$this->btexttype) && !$this->isOracle )
			return "(".$fullFieldName." is null or ".$fullFieldName."='')";
		
		if( $this->ismssql && $this->btexttype )
			return "(".$fullFieldName." is null or ".$fullFieldName." LIKE '')";
		
		return $fullFieldName." is null";
	}
	
	/**
	 * Get the WHERE clause conditions string for the search or suggest SQL query
	 * @param String SearchFor
	 * @param String strSearchOption
	 * @param String SearchFor2
	 * @param String etype
	 * @param Boolean isSuggest
	 */
	function SQLWhere($SearchFor, $strSearchOption, $SearchFor2, $etype, $isSuggest)
	{
		$baseResult = $this->baseSQLWhere($strSearchOption);
		
		if( $baseResult === false )
			return "";
		
		if( $baseResult != "" )
			return $baseResult;
		
		if( !strlen($SearchFor) && !strlen($SearchFor2) )
			return "";
		
		$value1 = $this->pageObject->cipherer->MakeDBValue($this->field, $SearchFor, $etype, true);
		$value2 = false;
		$cleanvalue2 = false;
		
		if( $strSearchOption == "Between" )
		{
			$cleanvalue2 = prepare_for_db($this->field, $SearchFor2, $etype);
			$value2 = make_db_value($this->field, $SearchFor2, $etype);
		}
			
		if( $strSearchOption != "Contains" && $strSearchOption != "Starts with" && ($value1 === "null" && $value2 === "null" )
			&& !$this->pageObject->cipherer->isFieldPHPEncrypted($this->field) )
		{	
			return "";
		}
		
		if( ($strSearchOption == "Contains" || $strSearchOption == "Starts with") && !$this->isStringValidForLike($SearchFor) )
			return "";
		
		$searchIsCaseInsensitive = $this->pageObject->pSetEdit->getNCSearch();
		
		if( IsCharType($this->type) && !$this->btexttype )
		{
			$gstrField = $this->getFieldSQLDecrypt();
			
			if( !$this->pageObject->cipherer->isFieldPHPEncrypted($this->field) && $searchIsCaseInsensitive )
			{
				if ( strlen($SearchFor) )
					$value1 = $this->connection->upper( $value1 );
				if ( strlen($SearchFor2) )
					$value2 = $this->connection->upper( $value2 );
				$gstrField = $this->connection->upper( $gstrField );
			}
		}	
		elseif( $strSearchOption == "Contains" || $strSearchOption == "Starts with" )
		{
			$gstrField = $this->connection->field2char($this->getFieldSQLDecrypt(), $this->type);
		}
		elseif( $this->pageObject->pSetEdit->getViewFormat($this->field) == FORMAT_TIME )
		{
			$gstrField = $this->connection->field2time($this->getFieldSQLDecrypt(), $this->type);
		}
		else 
		{
			$gstrField = $this->getFieldSQLDecrypt();
		}

		
		if( $strSearchOption == "Contains" )
		{
			if( $this->pageObject->cipherer->isFieldPHPEncrypted($this->field) )
				return $gstrField."=".$this->pageObject->cipherer->MakeDBValue($this->field, $SearchFor);
			
			$SearchFor = $this->connection->escapeLIKEpattern( $SearchFor );
			
			if( IsCharType($this->type) && !$this->btexttype && $searchIsCaseInsensitive )
				return $gstrField." ".$this->like." ".$this->connection->upper( $this->connection->prepareString("%".$SearchFor."%") );
			
			return $gstrField." ".$this->like." ".$this->connection->prepareString("%".$SearchFor."%");
		}
		
		if( $strSearchOption == "Equals" ) 
			return $gstrField."=".$value1;
		
		if( $strSearchOption == "Starts with" )
		{
			$SearchFor = $this->connection->escapeLIKEpattern( $SearchFor );
			
			if( IsCharType($this->type) && !$this->btexttype && $searchIsCaseInsensitive )
				return $gstrField." ".$this->like." ".$this->connection->upper( $this->connection->prepareString($SearchFor."%") );
			
			return $gstrField." ".$this->like." ".$this->connection->prepareString($SearchFor."%");
		}
		
		if( $strSearchOption == "More than" )
			return $gstrField.">".$value1;
		
		if( $strSearchOption == "Less than" ) 
			return $gstrField."<".$value1;
		
		if( $strSearchOption == "Equal or more than" ) 
			return $gstrField.">=".$value1;
			
		if( $strSearchOption == "Equal or less than" )
			return $gstrField."<=".$value1;
			
		if( $strSearchOption == "Between" )
		{
			$betweenRange = array();
			if ( $value1 !== "null" && strlen($SearchFor) )
			{
				$betweenRange["from"] = $gstrField.">=".$value1;
			}

			if ( $value2 !== "null" && strlen($SearchFor2) )
			{
				if (IsDateFieldType($this->type))
				{
					$timeArr = db2time($cleanvalue2);
					// for dates without time, add one day
					if ($timeArr[3] == 0 && $timeArr[4] == 0 && $timeArr[5] == 0)
					{
						$timeArr = adddays($timeArr, 1);

						$value2 = mysprintf("%02d-%02d-%02d",$timeArr);
						$value2 = add_db_quotes($this->field, $value2, $this->pageObject->tName);
						$betweenRange["to"] = $gstrField . "<" . $value2;
					}
					else
					{
						$betweenRange["to"] = $gstrField . "<=" . $value2;
					}
				}
				else 
				{
					$betweenRange["to"] = $gstrField . "<=" . $value2;
				}
			}

			return implode(" and ", $betweenRange);
		}
		
		return "";
	}
	
	/**
	 * A wrapper for the SearchClause SQLWhere method
	 */
	public function getSearchWhere($searchFor, $strSearchOption, $searchFor2, $etype)
	{
		return $this->SQLWhere($searchFor, $strSearchOption, $searchFor2, $etype, false);
	}
	
	/**
	 * Get an extra WHERE clause condtion	
	 * that helps to retrieve a field's search suggest value
	 * @param String searchOpt
	 * @param String searchFor
	 * @param Boolean isAggregateField (optional)
	 * @return String
	 */
	public function getSuggestWhere($searchOpt, $searchFor, $isAggregateField = false) 
	{
		if( $isAggregateField )
			return "";
		return $this->SQLWhere($searchFor, $searchOpt, "", "", true);
	}
	
	/**
	 * Get an extra HAVING clause condtion	
	 * that helps to retrieve a field's search suggest value
	 * @param String searchOpt
	 * @param String searchFor
	 * @param Boolean isAggregateField (optional)
	 * @return String
	 */
	public function getSuggestHaving($searchOpt, $searchFor, $isAggregateField = true)
	{
		if( $isAggregateField )
			return $this->SQLWhere($searchFor, $searchOpt, "", "", true);
		return "";
	}
	
	/**
	 * Get the substitute columns list for the SELECT Clause and the FORM clause part 
	 * that will be joined to the basic page's FROM clause 	 
	 * @param String searchFor
	 * @param String searchOpt
	 * @param Boolean isSuggest
	 * @return Array
	 */
	public function getSelectColumnsAndJoinFromPart($searchFor, $searchOpt, $isSuggest)
	{
		return array(
			"selectColumns"=> $this->getFieldSQLDecrypt(),
			"joinFromPart"=> ""
		);
	}
	
	/**
	 * @param String strSearchOption
	 * @return Boolean
	 */
	public function checkIfDisplayFieldSearch( $strSearchOption )
	{
		return false;
	}	
	
	/**
	 * Form the control's search options markup basing on user's search options settings
	 * @param Array optionsArray	Control specified search options
	 * @param String selOpt		 	The control selected search option
	 * @param Boolean not			It indicates if the search option passed should be inverted ($selOpt should be considered as "NOT ".$selOpt)
	 * @param Boolean both			It indicates if control needs both positive and negative("NOT ...") search options
	 * @return String
	 */
	function buildSearchOptions($optionsArray, $selOpt, $not, $both)
	{
		$userSearchOptions = $this->pageObject->pSetEdit->getSearchOptionsList( $this->field );
		
		$currentOption = $not ? 'NOT '.$selOpt : $selOpt;
		if( count($userSearchOptions) && isset( $this->searchOptions[$currentOption] ) )
			$userSearchOptions[] = $currentOption;
			
		if( count($userSearchOptions) ) 
			$optionsArray = array_intersect($optionsArray, $userSearchOptions);

		$defaultOption = $this->pageObject->pSetEdit->getDefaultSearchOption( $this->field );	
		if( !$defaultOption )
			$defaultOption = $optionsArray[0];
			
		$result = ''; 
		foreach($optionsArray as $option)
		{
			if( !isset( $this->searchOptions[$option] ) || !$both && substr($option, 0, 4) == 'NOT ' )
				continue;

			$selected = $currentOption == $option ? 'selected' : '';
			$dataAttr = $defaultOption == $option ? ' data-default-option="true"' : '';
			$result.= '<option value="'.$option.'" '.$selected.$dataAttr.'>'.$this->searchOptions[$option].'</option>';
		}
		return $result;
	}

	/**
	 * Form the control specified search options array and built the control's search options markup
	 * @param String selOpt		The search option value	
	 * @param Boolean not		It indicates if the search option negation is set 	
	 * @param Boolean both		It indicates if the control needs 'NOT'-options
	 * @return String			A string containing options markup
	 */	
	function getSearchOptions($selOpt, $not, $both)
	{
		return $this->buildSearchOptions(array(EQUALS, NOT_EQUALS), $selOpt, $not, $both);
	}

	/**
	 * Fill the response array with the suggest values
	 *
	 * @param String value	
	 *		Note: value is preceeded with "_" 
	 * @param String searchFor
	 * @param &Array response
	 * @param &Array row
	 */	
	function suggestValue($value, $searchFor, &$response, &$row)
	{
		$SuggestStringSize = GetGlobalData("suggestStringSize", 40);
		
		if( $SuggestStringSize <= runner_strlen($searchFor) )
		{
			$response[ "_".$searchFor ] = $searchFor;
			return;
		}
		
		$viewFormat = $this->pageObject->pSetEdit->getViewFormat($this->field);
		if( $viewFormat == FORMAT_NUMBER )
		{
			$dotPosition = strpos($value, '.'); 
			if($dotPosition !== FALSE)
			{
				for($i = strlen($value) - 1; $i > $dotPosition; $i--) 
				{
					if(substr($value, $i, 1) != '0')
					{
						if($i < strlen($value) - 1)
							$value = substr($value, 0, $i + 1);
						break;
					}
					if($i == $dotPosition + 1 && $dotPosition > 0)
					{
						$value = substr($value, 0, $dotPosition);
						break;
					}
				}
			}
		}
		
		$realValue = $value;
		
		if( $viewFormat == FORMAT_HTML )
		{
			// declarate patterns for regex
			$html_tags = '/<.*?>/i'.($useUTF8 ? 'u':'');
			$get_text = '/(.*<.*>|^.*?)([.]*'.preg_quote($searchFor, "/").'.*?)(<.*>|$)/i'.($useUTF8 ? 'u':'');
			
			// decode html entity and delete all html tags from value
			$value = preg_replace($html_tags, '', runner_html_entity_decode($value));
			
			// if not searchFor in value return
			if (stristr($value, $searchFor) === false)
				return;
			
			// get realValue (string between html tags)
			if (preg_match($get_text, $realValue, $match))
				$realValue = $match[2];
			else
				$realValue = $value;
		}
		
		// if large string cut value and add dots
		if( $SuggestStringSize < runner_strlen($value) )
		{
            $startPos = 0;
            $valueLength = 0;
            $value = $this->cutStr($value, $searchFor, $SuggestStringSize, $startPos, $valueLength);
			if( $viewFormat !== FORMAT_HTML ) // because realValue and value different (according to algorithm)
				$realValue = $value;
			
			if( $startPos > 0 )
				$value = "...".$value;
			
			if( $startPos + $SuggestStringSize != $valueLength )
				$value.= "...";
		}
		
		$response[ $value ] = $realValue;
	}
	
	/**
	 *
	 */
	function cutStr($value, $searchFor, $SuggestStringSize, &$startPos, &$valueLength)
	{
		$diffLength = $SuggestStringSize - runner_strlen($searchFor);
		$leftContextLength = floor($diffLength / 2);
		$rigthContextLength = $diffLength - $leftContextLength;

		if( $this->pageObject->pSetEdit->getNCSearch() )
		{
				// case-insensitive search 
				$startPos = stripos($value, $searchFor);
				$startPos = runner_strlen( substr($value, 0 , $startPos) ); //UTF-8 support
		}
		else 
				$startPos = runner_strpos($value, $searchFor);

		$searchStartPos = $startPos;
		$valueLength = runner_strlen($value);
		if( $startPos < $leftContextLength )
		{
				$rigthContextLength -= $startPos - $leftContextLength;
				$startPos = 0;
		}
		else 
				$startPos -= $leftContextLength;

		if( $startPos > 0 )
		{
				$found = false;
				for($i = $startPos - 1;	$i >= $startPos - 5 && $i >= 0;	$i--)
				{
						if( $i == 0 || $this->isStopSymbol( runner_substr($value, $i, 1) ) )
						{
								if($i == 0)
										$startPos = 0;
								else 
										$startPos = $i + 1;
								$found = true;
								break;
						}
				}
				if( !$found )
				{
						for($i = $startPos;	$i <= $startPos + 5 && $i < $searchStartPos; $i++)
						{
								if( $this->isStopSymbol(runner_substr($value, $i, 1)) )
								{
										$startPos = $i + 1;
										break;
								}
						}
				}
		}

		if( $startPos + $SuggestStringSize > $valueLength )
		{
				$SuggestStringSize = $valueLength - $startPos;
		}

		if( $startPos + $SuggestStringSize < $valueLength )
		{
				$found = false;
				$tempStartPos = $startPos + $SuggestStringSize;
				for($i = $tempStartPos + 1; $i <= $tempStartPos + 5 && $i < $valueLength; $i++)
				{
						if( $i == $valueLength - 1 || $this->isStopSymbol( runner_substr($value, $i, 1) ) )
						{
								if($i == $valueLength - 1)
										$SuggestStringSize = $i - $startPos + 1;
								else 
										$SuggestStringSize = $i - $startPos;
								$found = true;
								break;
						}
				}
				if(!$found)
				{
						for($i = $tempStartPos; $i >= $tempStartPos - 5; $i--)
						{
								if( $this->isStopSymbol( runner_substr($value, $i, 1) ) )
								{
										$SuggestStringSize = $i - $startPos;
										break;
								}
						}
				}				
		}

		return runner_substr($value, $startPos, $SuggestStringSize);
	}
	
	/**
	 * @param String smb
	 * @return Boolean
	 */
	function isStopSymbol($smb)
	{
		return strpos(" .,;:\"'?!|\\/=(){}[]*-+\n\r", $smb) !== FALSE;
	}
	
	/**
	 * This function ivokes after successful saving of added/edited record
	 */
	function afterSuccessfulSave()
	{
	}
	
	/**
	 * Control settings filling
	 */
	function init()
	{
	}
	
	/**
	 * Is the search string valid for LIKE search
	 */
	function isStringValidForLike($str)
	{
		if(!IsCharType($this->type) && hasNonAsciiSymbols($str))
			return false;
		
		return true;
	}
	
	/**
	 * Get the displayed control elemnt's style attribute string
	 * @return String
	 */
	function getInputStyle( $mode )
	{
		if( $this->pageObject->getLayoutVersion() == BOOTSTRAP_LAYOUT 
			&& ($this->pageObject->pageType != PAGE_ADD || $this->pageObject->mode != ADD_INLINE) 
			&& ($this->pageObject->pageType != PAGE_EDIT || $this->pageObject->mode != EDIT_INLINE) )
		{
			return "";
		}
		
		$width = $this->searchPanelControl ? 150 : $this->pageObject->pSetEdit->getControlWidth( $this->field );
		$style = $this->makeWidthStyle( $width );
		
		return 'style="'.$style.'"';		
	}
	
	/** 
	 * Create a CSS rule specifying the control's width
	 * @param Number widthPx
	 */
	function makeWidthStyle( $widthPx )
	{
		if( 0 == $widthPx )
			return "";
			
		return "width: ".$widthPx."px;";
	}
	
	public function loadLookupContent( $parentValuesData, $childVal = "", $doCategoryFilter = true, $initialLoad = true )
	{
		return ""; // .net compatibility
	}
	
	/**
	 * A stub
	 */
	public function getFieldValueCopy( $value )
	{
		return $value;
	}
	
	public function getFieldSQLDecrypt()
	{
		return RunnerPage::_getFieldSQLDecrypt( $this->field, $this->connection, $this->pageObject->pSetEdit,  $this->pageObject->cipherer );
	}
}

class ControlTypes
{
	public $forEdit = null;
		
	public $forSearch = null;
		
	function __construct() 
	{
		$this->forEdit = array();
		$this->forEdit[EDIT_FORMAT_TEXT_FIELD] = "TextField";
		$this->forEdit[EDIT_FORMAT_TIME] = "TimeField";
		$this->forEdit[EDIT_FORMAT_TEXT_AREA] = "TextAreaField";
		$this->forEdit[EDIT_FORMAT_PASSWORD] = "PasswordField";
		$this->forEdit[EDIT_FORMAT_DATE] = "DateField";
		$this->forEdit[EDIT_FORMAT_CHECKBOX] = "CheckboxField";
		$this->forEdit[EDIT_FORMAT_DATABASE_IMAGE] = "DatabaseFileField";
		$this->forEdit[EDIT_FORMAT_DATABASE_FILE] = "DatabaseFileField";
		$this->forEdit[EDIT_FORMAT_HIDDEN] = "HiddenField";
		$this->forEdit[EDIT_FORMAT_READONLY] = "ReadOnlyField";
		$this->forEdit[EDIT_FORMAT_FILE] = "FileField";
		$this->forEdit[EDIT_FORMAT_LOOKUP_WIZARD] = "LookupField";
			
		$this->forSearch = array();
		$this->forSearch[EDIT_FORMAT_TEXT_FIELD] = "TextField";
		$this->forSearch[EDIT_FORMAT_TIME] = "TimeField";
		$this->forSearch[EDIT_FORMAT_TEXT_AREA] = "TextField";
		$this->forSearch[EDIT_FORMAT_PASSWORD] = "TextField";
		$this->forSearch[EDIT_FORMAT_DATE] = "DateField";
		$this->forSearch[EDIT_FORMAT_CHECKBOX] = "CheckboxField";
		$this->forSearch[EDIT_FORMAT_DATABASE_IMAGE] = "TextField";
		$this->forSearch[EDIT_FORMAT_DATABASE_FILE] = "TextField";
		$this->forSearch[EDIT_FORMAT_HIDDEN] = "TextField";
		$this->forSearch[EDIT_FORMAT_READONLY] = "TextField";
		$this->forSearch[EDIT_FORMAT_FILE] = "FileField";
		$this->forSearch[EDIT_FORMAT_LOOKUP_WIZARD] = "LookupField";
	}
}
?>