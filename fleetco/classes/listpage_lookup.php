<?php

class ListPage_Lookup extends ListPage_Embed
{
	/**
      * Field of link
      *
      * @var string
      */
	var $linkField = "";

	
	/**
      * Select field of lookup
      *
      * @var string
      */
	var $lookupSelectField = "";
	
	/**
      * Field customed
      *
      * @var string
      */
	var $customField = "";
	
	/**
      * Field displayed
      *
      * @var string
      */
	var $dispField = "";	
	
	var $dispFieldAlias = "";
	
	var $lookupValuesArr = array();

	/**
     * @type Array
     */
	public $parentCtrlsData;	
	
	/**
	 * The 'List page with search' lookup page's table
	 * @type String
	 */	
	public $lookupTable;
	
	/**
	 * The 'List page with search' lookup page's type
	 * @type String	 
	 */		
	public $lookupPageType;
	
	/**
	 * The 'List page with search' lookup field
	 * @type String	 
	 */
	public $lookupField = "";
	
	/**
	 * A  settings object for the table 
	 * containing the lookup field
	 * @type ProjectSettings
	 */
	protected $lookupPSet;
		
	
	/**
      * Constructor, set initial params
      *
      * @param array $params
      */
	function __construct(&$params)
	{
		// call parent constructor. always at the first line!!!
		parent::__construct($params);
		// init params
		$this->initLookupParams();	
		
		$this->permis[ $this->tName ]["search"] = 1;		
		$this->jsSettings['tableSettings'][$this->tName]['permissions'] = $this->permis[$this->tName];

		$this->isUseAjaxSuggest = false;	
	}

	/**
	 * Set the correct session prefix
	 */
	protected function assignSessionPrefix() 
	{
		$this->sessionPrefix = $this->tName."_lookup_".$this->lookupTable.'_'.$this->lookupField;	
	}
	
	/**
	 *
	 */
	function initLookupParams()
	{							
		if( $this->lookupPageType != PAGE_ADD && $this->lookupPageType != PAGE_EDIT )
			$this->lookupPageType = PAGE_SEARCH;
			
		$this->lookupPSet = new ProjectSettings($this->lookupTable, $this->lookupPageType);

		$this->linkField = $this->lookupPSet->getLinkField($this->lookupField);
		$this->dispField = $this->lookupPSet->getDisplayField($this->lookupField); 
		
		if ($this->lookupPSet->getCustomDisplay($this->lookupField))
		{
			$this->dispFieldAlias = GetGlobalData("dispFieldAlias", "rrdf1");
			$this->pSet->getSQLQuery()->AddCustomExpression($this->lookupPSet->getDisplayField($this->lookupField), $this->pSet, 
				$this->lookupTable, $this->lookupField, $this->dispFieldAlias);
			$this->customField = $this->linkField;
		}
		$this->outputFieldValue($this->linkField, 2);
		$this->outputFieldValue($this->dispField, 2);
		
		if ($this->dispFieldAlias && $this->pSet->appearOnListPage($this->dispField))
			$this->lookupSelectField=$this->dispField;	
		elseif ($this->pSet->appearOnListPage($this->dispField))
			$this->lookupSelectField=$this->dispField;
		else
			$this->lookupSelectField = $this->listFields[0]['fName'];
		
		$orderByField = $this->lookupPSet->getLookupOrderBy( $this->lookupField );		
		if( strlen($orderByField) )
		{
			// adjust the ORDER BY clause according to the main lookup settings
//			$this->gstrOrderBy = " ORDER BY ".$this->connection->addTableWrappers( $this->tName ).".".$this->connection->addFieldWrappers($orderByField);
			$this->gstrOrderBy = " ORDER BY ".$this->getFieldSQL( $orderByField );
			if( $this->lookupPSet->isLookupDesc( $this->lookupField ) )
				$this->gstrOrderBy.= ' DESC';			
		}		
	}
	
	/**
	 * clear lookup session data, while loading at first time
	 */
	function clearLookupSessionData()
	{
		if($this->firstTime)
		{
			$sessLookUpUnset = array();
			foreach($_SESSION as $key=>$value)
				if(strpos($key, "_lookup_")!== false)
					$sessLookUpUnset[] = $key;
					
			foreach($sessLookUpUnset as $key)
				unset($_SESSION[$key]);
		}
	}
	
	
	
	function addCommonJs()
	{
		$this->controlsMap['dispFieldAlias'] = $this->dispFieldAlias;
		
		$this->addControlsJSAndCSS();
		$this->addButtonHandlers();
	}
	
	/**
	 * Set order links attribute for order on list page
	 *
	 * @param {string} $field - name field, which is ordering
	 * @param {string} $sort - how is filed ordering, "a" - asc or "d" - desc, default is "a"
	 * @param String $setIcon
	 * @return String		 
	 */
	function setLinksAttr($field, $sort = "", $setIcon = false)
	{
		$href = GetTableLink($this->shortTableName, "list", "orderby=".($sort == "a" ? "d" : "a").$field);
		$orderlinkattrs = 'id="order_'.$field.'_'.$this->id.'" name="order_'.$field.'_'.$this->id.'" data-href="'.$href.'" class="rnr-orderlink"';
		
		return $orderlinkattrs;
	}
	
	/**
	 *
	 */
	function addSpanVal($fName, &$data) 
	{
		if ($this->dispFieldAlias && @$this->arrFieldSpanVal[$fName] == 2)
			return "val=\"".runner_htmlspecialchars($data[$this->dispFieldAlias])."\" ";
		else
			return parent::addSpanVal($fName, $data);
	}
	
	/**
	 *
	 */
	function buildLookupWhereClause()
	{
		$strLookupWhere = GetLWWhere($this->lookupField, $this->lookupPageType, $this->lookupTable);
		
		if( strlen($strLookupWhere) )
			$this->strWhereClause = whereAdd($this->strWhereClause, $strLookupWhere);		
		
		if( !$this->lookupPSet->useCategory($this->lookupField) ) 
			return;
	
		// add 1=0 if parent control contain empty value and no search used	
		if( $this->lookupPageType != PAGE_SEARCH && !count($this->parentCtrlsData) )
		{
			$this->strWhereClause = whereAdd($this->strWhereClause, "1=0");
			return;
		}
		
		$parentWhereParts = array();
		foreach( $this->lookupPSet->getParentFieldsData( $this->lookupField ) as $cData )
		{
			if( !isset( $this->parentCtrlsData[ $cData["main"] ] ) )
				continue;
			
			$parentFieldName = $cData["lookup"];
			$parentFieldValues = splitvalues( $this->parentCtrlsData[ $cData["main"] ] );
			
			$arWhereClause = array();
			foreach($parentFieldValues as $value)
			{
				if( $this->cipherer != null )
					$lookupValue = $this->cipherer->MakeDBValue($parentFieldName, $value);
				else 
					$lookupValue = make_db_value($parentFieldName, $value);
					
				$arWhereClause[] = $this->getFieldSQLDecrypt($parentFieldName) . "=" . $lookupValue;
			}
			
			if( count($arWhereClause) )
				$parentWhereParts[] = "(".implode(" OR ", $arWhereClause).")";	
		}
		
		if( count($parentWhereParts) )
			$this->strWhereClause = whereAdd($this->strWhereClause, "(".implode(" AND ", $parentWhereParts).")");
	}
	
	/**
	 *
	 */
	function buildSQL()
	{	
		$this->buildLookupWhereClause();
		if ($this->dispFieldAlias)
		{
			$this->gsqlHead.=", ".$this->dispField." ";
			$this->gsqlHead .= "as ".$this->connection->addFieldWrappers($this->dispFieldAlias)." ";
		}
		
		parent::buildSQL();
	}
	
	/**
	 * Build a lookup's search panel
	 */
	function buildSearchPanel() 
	{
		if( !$this->permis[ $this->tName ]['search'] )
			return;
		
		$params = array();
		$params['pageObj'] = &$this;
		$params['panelSearchFields'] = $this->panelSearchFields;
		$this->searchPanel = new SearchPanelLookup($params);
		$this->searchPanel->buildSearchPanel();
	}
	
	/**
	 *
	 */
	function addLookupVals()
	{
		$this->controlsMap['lookupVals'] = $this->lookupValuesArr;
	}
	
	function fillGridData()
	{
		parent::fillGridData();

		$this->addLookupVals();
		
	}

	
	function fillCheckAttr(&$record,$data,$keyblock)
	{
		$checkbox_attrs="name=\"selection[]\" value=\"".runner_htmlspecialchars(@$data[$this->linkField])."\" id=\"check".$this->recId."\"";
		$record["checkbox"]=array("begin"=>"<input type='checkbox' ".$checkbox_attrs.">", "data"=>array());
	}
	
	/**
	 * Name of function came from listpage class, but on listpage_lookup it used for collection link and display field data
	 *
	 * @param String type
	 * @param Array &record
	 * @param Array data (optional)
	 */
	function addSpansForGridCells($type, &$record, $data = null) 
	{
		if($type == 'add')
		{
			parent::addSpansForGridCells($type, $record, $data);
			return;
		}
		
		if(!is_null($data))
		{
			if ($this->dispFieldAlias)
				$dispVal = $data[$this->dispFieldAlias];
			else 
				$dispVal = $data[$this->dispField];
			
			$this->lookupValuesArr[] = array('linkVal' => $data[$this->linkField], 'dispVal' => $dispVal);
		}
	}
	
	/**
	 *
	 */
	function proccessRecordValue(&$data, &$keylink, $listFieldInfo)
	{
		$value = parent::proccessRecordValue($data, $keylink, $listFieldInfo);
		
		if ($this->lookupSelectField == $listFieldInfo['fName'])
			$value = '<a href="#" data-ind="'.count( $this->lookupValuesArr ).'" type="lookupSelect'.$this->id.'">'.$value."</a>";
		
		return $value;
	}
	
	/**
	 *
	 */	
	function showPage() 
	{
		$this->BeforeShowList();
		
		if ($this->mobileTemplateMode())
		{
			$this->xt->assign("cancelbutton_block",true);
			$this->xt->assign("searchform_block", true);
			$this->xt->assign("searchform_showall", true);
			$bricksExcept = array("grid_mobile", "message", "pagination", "vmsearch2", "cancelbutton_mobile");
		}
		else 
		{
			$bricksExcept = array("grid", "message", "pagination", "vsearch1", "vsearch2", "search", "recordcontrols_new");
			if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
				$bricksExcept[] = "add";
		}
		
		$this->xt->hideAllBricksExcept($bricksExcept);
		$this->xt->prepare_template($this->templatefile);
		$this->showPageAjax();
	}

	
	/**
	 * Display blocks after loaded template of page
	 */
	function showPageAjax() 
	{
		$lookupSearchControls = $this->xt->fetch_loaded('searchform_text').$this->xt->fetch_loaded('searchform_search')
			.$this->xt->fetch_loaded('searchform_showall');
		$this->xt->assign("lookupSearchControls", $lookupSearchControls);
		
		$this->addControlsJSAndCSS();
		$this->fillSetCntrlMaps();
		
		$returnJSON = array();
		$returnJSON['controlsMap'] = $this->controlsHTMLMap;
		$returnJSON['viewControlsMap'] = $this->viewControlsHTMLMap;
		$returnJSON['settings'] = $this->jsSettings;
		$this->xt->assign("header",false);
		$this->xt->assign("footer",false);
		
		$returnJSON["html"] = $this->xt->fetch_loaded("body");
		
		$returnJSON['idStartFrom'] = $this->flyId;
		$returnJSON['success'] = true;
		
		$returnJSON["additionalJS"] = $this->grabAllJsFiles();
		$returnJSON["CSSFiles"] = $this->grabAllCSSFiles();

		echo printJSON($returnJSON);
	}
	
	/**
	 *
	 */
	function SecuritySQL($strAction, $table="")
	{
		global $strTableName;
		
		if( !strlen($table) )	
			$table = $strTableName;
		
		$strPerm = GetUserPermissions($table);
		if( strpos( $strPerm, "S" ) === false )
			$strPerm .=  "S" ;
		
		return SecuritySQL($strAction, $table, $strPerm);
	}
	
	/**
	 * A stub
	 */
	function buildTotals(&$totals)
	{
	}
	
	/**
	 * Returns where clause for active master-detail relationship
	 * @return string
	 */
	function getMasterTableSQLClause()
	{
		return "";
	}	

	function deleteAvailable() {
		return false;
	}
	function importAvailable() {
		return false;
	}
	function editAvailable() {
		return false;
	}
	function addAvailable() {
		return false;
	}
	function copyAvailable() {
		return false;
	}
	function inlineAddAvailable() {
		return parent::inlineAddAvailable() && $this->lookupPSet->isAllowToAdd($this->lookupField);
	}
	function inlineEditAvailable() {
		return false;
	}
	function viewAvailable() {
		return false;
	}
	function exportAvailable() {
		return false;
	}
	function printAvailable() {
		return false;
	}
	function advSearchAvailable() {
		return false;
	}
	function detailsInGridAvailable()
	{
		return false;
	}
}
?>