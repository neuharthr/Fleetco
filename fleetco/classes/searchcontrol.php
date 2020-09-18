<?php
/**
 * Base class for all search control builders
 */
class SearchControl 
{	
	var $tName = '';

	var $globSrchParams = array();

	var $getSrchPanelAttrs = array();

	var $dispNoneStyle = 'style="display: none;"';

	var $pageObj = null;

	var $pSet = null;

	var $searchClauseObj = false;

	var $id = 1;
	
	/**
	 * The instance of the EditControlsContainer class
	 * @type Object
	 */		
	var $controlsContainer;
		
	function __construct($id, $tName = '', &$searchClauseObj, &$pageObj)
	{
		$this->tName = $tName;
		
		$this->searchClauseObj = $searchClauseObj;
		$this->getSrchPanelAttrs = $this->searchClauseObj->getSrchPanelAttrs();
		$this->globSrchParams = $this->searchClauseObj->getSearchGlobalParams();
		
		$this->id = $id;
		$this->pageObj = &$pageObj;
		
		$this->pSet = $this->pageObj->pageType != PAGE_SEARCH ? new ProjectSettings($tName, PAGE_SEARCH) : $this->pageObj->pSetSearch;
		$this->controlsContainer = new EditControlsContainer($this->pageObj, $this->pSet, PAGE_SEARCH, $this->pageObj->cipherer);	
	}
	
	/**
	 * @param String fName 				The search field's name	
	 * @param Number recId 				The search field row's Id
	 * @param Number fieldNum 			The search field control's index (0 for the first, 1 for the second)
	 * @param String value 				The search control's value
	 * @param String opt 				The search control's search option 
	 * @param Boolean renderHidden 		Indicator showing if the search control is visible	
	 * @param Boolean isCached 			Indicator showing if the search control is cached
	 * @return Array
	 */
	function buildCtrlParamsArr($fName, $recId, $fieldNum, $value, $opt, $renderHidden = false, $isCached = true) 
	{
		$hidden = $renderHidden;
		$fType = $this->pSet->getEditFormat($fName);
		$format = $fType;	
		
		if ($fType == EDIT_FORMAT_TEXT_AREA	|| $fType == EDIT_FORMAT_PASSWORD || $fType == EDIT_FORMAT_HIDDEN
			|| $fType == EDIT_FORMAT_READONLY || $fType == EDIT_FORMAT_FILE)
		{
			$format = EDIT_FORMAT_TEXT_FIELD;
		}
		
		$parameters = array();
		$parameters["field"] = $fName;
		$parameters["mode"] = "search";
		$parameters["ptype"] = PAGE_SEARCH;
		$parameters["id"] = $recId;
		$parameters["fieldNum"] = $fieldNum;
		$parameters["format"] = $format;
		// the SearchControl object is passed instead off the page's object in order to
		// not mix 'Controls' instances fot the search and edit controls on the same page
		$parameters["pageObj"] = $this; 
		$parameters["value"]= $value;
		$parameters["additionalCtrlParams"] = array('hidden' => $hidden, 'option' => $opt);
		
		$ctrlsMap = $this->getControlMap($fName, $format, $recId, $fieldNum, $hidden, $value);
		$this->pageObj->fillControlsMap($ctrlsMap);	
		
		return $parameters;
	}
	
	/**
	 * @param String fName 				The search field's name	
	 * @param Number recId 				The search field row's Id
	 * @param Number fieldNum 			The search field control's index (0 for the first, 1 for the second)
	 * @param String value 				The search control's value
	 * @param Boolean renderHidden 		Indicator showing if the search control is visible	
	 * @param Boolean isCached 			Indicator showing if the search control is cached
	 * @return Array
	 */
	function getCtrlParamsArr($fName, $recId, $fieldNum, $value, $opt, $renderHidden = false, $isCached = true) 
	{
		$parameters = $this->buildCtrlParamsArr($fName, $recId, $fieldNum, $value, $opt, $renderHidden, $isCached);
		
		return XTempl::create_function_assignment( "xt_buildeditcontrol", $parameters);
	}
	
	/**
	 * Get the bas search control's map array 
	 * @return Array
	 */ 
	protected function getControlMap($fName, $format, $recId, $fieldNum, $hidden, $value)
	{
		$ctrlsMap = array( 'controls' => array() );
		$ctrlsMap['controls']['fieldName'] = $fName;
		$ctrlsMap['controls']['mode'] = MODE_SEARCH;
		$ctrlsMap['controls']['editFormat'] = $format;
		$ctrlsMap['controls']['id'] = $recId;
		$ctrlsMap['controls']['ctrlInd'] = $fieldNum;
		$ctrlsMap['controls']["hidden"] = $hidden;
		$ctrlsMap['controls']["table"] = $this->tName;
		
		$preload = $this->pageObj->fillPreload($fName, array($fName), array($fName => $value), $this->controlsContainer);
		if($preload !== false)
			$ctrlsMap["controls"]['preloadData'] = $preload;
				
		return $ctrlsMap;
	}
	
	/**
	 * Get a new edit control or the existing one
	 * The method is also invoked from the 'xt_buildeditcontrol' function only
	 *
	 * @param String field		Field name
	 * @param String id			Field id
	 * @return Object			Edit control
	 */
	public function getControl($field, $id = "", $extraParams = array())
	{
		return $this->controlsContainer->getControl($field, $id);
	}

	/**
	 * Get the current record data to build correct edit controls (xt_buildeditcontrol)
	 * @return Array
	 */
	public function getFieldControlsData()
	{
		return array();
	}
	
	/**
	 * If the search field needs the second control It returns second search control's params.
	 * Otherwise It returns false
	 *	 
	 * @param String fName 				The search field's name	
	 * @param Number recId 				The search field row's Id
	 * @param Number fieldNum 			The second search field control's index (=1)
	 * @param String value 				The second search control's value
	 * @param String opt 				The second search control's option
	 * @param Boolean renderHidden 		Indicator showing if the search control is visible	
	 * @param Boolean isCached 			Indicator showing if the search control is cached
	 * @return Array || Boolean
	 */	
	function getSecCtrlParamsArr($fName, $recId, $fieldNum = 0, $value, $opt, $renderHidden = false, $isCached=true) 
	{
		$fType = $this->pSet->getEditFormat($fName);	
		
		if( $this->isNeedSecondCtrl($fName) )
			return $this->getCtrlParamsArr($fName, $recId, $fieldNum + 1, $value, $opt, $renderHidden, $isCached);

		return false;
	}
	
	/**
	 * Check if the search field needs the second control 
	 * @param String fName
	 * @return Boolean
	 */
	function isNeedSecondCtrl($fName)
	{
		$fType = $this->pSet->getEditFormat($fName);
		
		$lookupType = $this->pSet->lookupControlType($fName);
		if( $this->pageObj->mobileTemplateMode() && $lookupType == LCT_AJAX )
			$lookupType = LCT_DROPDOWN;
		
		if ($fType == EDIT_FORMAT_DATE || $fType == EDIT_FORMAT_TIME || $fType == EDIT_FORMAT_TEXT_FIELD 
			|| $fType == EDIT_FORMAT_TEXT_AREA || $fType == EDIT_FORMAT_PASSWORD || $fType == EDIT_FORMAT_HIDDEN 
			|| $fType == EDIT_FORMAT_READONLY || $fType == EDIT_FORMAT_LOOKUP_WIZARD && $lookupType == LCT_AJAX)
		{
			return true;
		}
		
		return false;
	}
	
	function getSimpleSearchTypeCombo($selOpt, $not) 
	{
		$options = "<option value=\"Contains\" ".( $selOpt == "Contains" && !$not ? "selected" : "" ).">".mlang_message("CONTAINS")."</option>";
		$options.= "<option value=\"Equals\" ".( $selOpt == "Equals" && !$not ? "selected" : "" ).">".mlang_message("EQUALS")."</option>";
		$options.= "<option value=\"Starts with\" ".( $selOpt == "Starts with" && !$not ? "selected" : "" ).">".mlang_message("STARTS_WITH")."</option>";
		$options.= "<option value=\"More than\" ".( $selOpt == "More than" && !$not ? "selected" : "" ).">".mlang_message("MORE_THAN")."</option>";
		$options.= "<option value=\"Less than\" ".( $selOpt == "Less than" && !$not ? "selected" : "" ).">".mlang_message("LESS_THAN")."</option>";
		$options.= "<option value=\"Empty\" ".( $selOpt == "Empty" && !$not ? "selected" : "" ).">".mlang_message("EMPTY")."</option>";
		return $options;
	}
	
	/**
	 * Get the search options
	 * @param String fName
	 * @param String selOpt
	 * @param Boolean not
	 * @param Boolean flexible (optional)
	 * @param Boolean both 		It indicates if the control needs 'NOT'-options
	 * @return String
	 */
	function getCtrlSearchTypeOptions($fName, $selOpt, $not, $flexible = false, $both = false) 
	{
		return $this->getControl($fName)->getSearchOptions($selOpt, $not, $both);
	}
	
	/**
	 * Get the control's search options list
	 * @param String fName
	 * @param Number recId
	 * @param Number fieldNum	The contol's indes ( 0: the first control; 1: the second one)
	 * @param String selOpt		The control's search option
	 * @param Boolean not		The search field's 'not' param indicating if it's necessary to invert an search option
	 * @param Boolean both		It indicates if the control needs 'NOT'-options
	 * @return String
	 */
	function getCtrlSearchType($fName, $recId, $fieldNum=0, $selOpt, $not, $flexible, $both) 
	{
		$emptyOption = $selOpt == EMPTY_SEARCH || $selOpt == NOT_EMPTY; 
		$visibility = !$flexible || $this->getSrchPanelAttrs['ctrlTypeComboStatus'] || $emptyOption ? '' : 'style="display: none;"';
		
		$searchtype = '<span id="'.$this->getCtrlComboContId($recId, $fName).'" '.$visibility.'>';
		$searchtype.= '<select class="form-control" '.$class.' id="'.$this->getSearchOptionId($fName, $recId).'" name="'.$this->getSearchOptionId($fName, $recId).'" size=1 '.$visibility.'>';
		$searchtype.= $this->getCtrlSearchTypeOptions($fName, $selOpt, $not, $flexible, $both);
		$searchtype.= "</select></span>";
		
		return $searchtype;
	}
	
	function getSearchOptionId($fName, $recId) 
	{
		return 'srchOpt_'.$recId.'_'.GoodFieldName($fName);
	}
	
	/**
	 * @param String fName
	 * @param Number recId
	 * @param Boolean not
	 * @return String
	 */
	function getNotBox($fName, $recId, $not)
	{
		$notbox = 'id="not_'.$recId.'_'.GoodFieldName($fName).'"';
		if($not)
			$notbox .=" checked";
			
		return $notbox;
	}
	
	function  getDelButtonHtml($fName, $recId)
	{
		$text = "";
		$iconAttr = 'data-icon="remove"';
		if( $this->pageObj->getLayoutVersion() == BOOTSTRAP_LAYOUT )
		{
			$text = '<span class="glyphicon glyphicon-remove"></span>';
			$iconAttr = "";
		}
		
		$html = '<a id = "'.$this->getDelButtonId($fName, $recId).'" ctrlId="'.$recId.'" fName="'.GoodFieldName($fName)
			.'" class="searchPanelButton searchpanel-options" '.$iconAttr.' href="#" title="'.mlang_message("DELETE_CONTROL").'">' . $text . '</a>';
		return $html;
	}
	
	function getDelButtonId($fName, $recId) 
	{
		return 'delCtrlButt_'.$recId.'_'.GoodFieldName($fName);
	}
	
	function getSearchRadio()
	{	
		$resArr = array();
		// search panel radio button assign
		$resArr['all_checkbox_label'] = array(0=>'', 1=>'');
		$resArr['any_checkbox_label'] = array(0=>'', 1=>'');
		
		if(isEnableSection508())
		{
			$resArr['all_checkbox_label'] = array(0=>"<label for=\"all_checkbox\">", 1=>"</label>");
			$resArr['any_checkbox_label'] = array(0=>"<label for=\"any_checkbox\">", 1=>"</label>");			
		}
		
		$id508l="id=\"all_checkbox\" ";
		$id508n="id=\"any_checkbox\" ";
		
		$resArr['all_checkbox']	= $id508l;
		$resArr['any_checkbox']	= $id508n;
		
		$resArr['all_checkbox'] .= "value=\"and\" ";
		$resArr['any_checkbox'] .= "value=\"or\" ";
		
		if(isset($this->globSrchParams['srchTypeRadio']) && $this->globSrchParams['srchTypeRadio']=="or")
			$resArr['any_checkbox'] .=" checked";
		else
			$resArr['all_checkbox'] .=" checked";
		
		return $resArr;
	}
	
	function getFilterRowId($recId, $fName)
	{
		return 'filter_'.$recId.'_'.GoodFieldName($fName);
	}
	
	function getCtrlComboContId($recId, $fName)
	{
		return 'searchType_'.$recId.'_'.GoodFieldName($fName);
	}
	
	function buildSearchCtrlBlockArr($recId, $fName, $ctrlInd, $opt, $not, $isChached, $val1, $val2, $panelField = false, $flexible = true, $immutable = false, $both = false)
	{
		$srchCtrlBlock = array();
		
		$postfix = '';
		if($panelField)
			$postfix = '_'.GoodFieldName($fName);
		
		// if the search option isn't set by search params use the user's search option settings
		if($opt == "")
			$opt = $this->pSet->getDefaultSearchOption($fName);
		
		// create the first control
		$renderHidden = strtolower($opt) == 'empty' || strtolower($opt) == 'not empty';
		$srchCtrlBlock['searchcontrol'.$postfix] = $this->getCtrlParamsArr($fName, $recId, $ctrlInd, $val1, $opt, $renderHidden, $isChached);

		$renderHidden = strtolower($opt) != 'between' && strtolower($opt) != 'not between';
		if($flexible || !$renderHidden)
		{
			// create the second control
			$srchCtrlBlock['searchcontrol1'.$postfix] = $this->getSecCtrlParamsArr($fName, $recId, $ctrlInd, $val2, $opt, $renderHidden, $isChached);
		}
		
		// del button
		if( !$immutable )
			$srchCtrlBlock['delCtrlButt'] = $this->getDelButtonHtml($fName, $recId);
		
		// one control with options container attr
		$filterRowId = $this->getFilterRowId($recId, $fName);
		$filterRowAttrs = 'id="'.$filterRowId.'" ';
		if($isChached)
			$filterRowAttrs.= $this->dispNoneStyle;
			
		$srchCtrlBlock['filterRow_attrs'.$postfix] = $filterRowAttrs;
		
		if($immutable)
			$srchCtrlBlock['filterRow_class'.$postfix] = 'rnr-basic-search-field';
		
		$srchCtrlBlock['fName'] = $fName;
		// combo with attrs
		$srchCtrlBlock['searchtype'.$postfix] = $this->getCtrlSearchType($fName, $recId, $ctrlInd, $opt, $not, $flexible, $both);
		// checkbox attrs
		$srchCtrlBlock['notbox'] = $this->getNotBox($fName, $recId, $not);
		$srchCtrlBlock['fLabel'.$postfix] = GetFieldLabel(GoodFieldName($this->tName),GoodFieldName($fName));
		
		return $srchCtrlBlock;
	}
}
?>