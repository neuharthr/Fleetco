<?php
/**
 * Base class for all search control builders
 *
 */
class SearchPanel 
{
	/**
	 * strTableName of searchPanel's table
	 *
	 * @var string
	 */
	var $tName = '';
	var $pSet = null;
	var $dispNoneStyle = 'style="display: none;"';
	/**
	 * Object of page for output. Used for call xt methods for current page
	 *
	 * @var object
	 */
	var $pageObj = null;
	/**
	 * Object of searchClause class.
	 *
	 * @var object
	 */
	var $searchClauseObj = null;
	/**
	 * Object of PanelSearchControl class.
	 *
	 * @var object
	 */
	var $searchControlBuilder = null;
	/**
	 * Panel id
	 *
	 * @var int
	 */
	var $id = 1;
	/**
	 * Array of panel state parametres, such as open|close menu etc.
	 *
	 * @var array
	 */
	var $panelState = array();
	/**
	 * Fields that used for search on panel, and should be open on every page load
	 *
	 * @var array
	 */
	var $panelSearchFields = array();
	/**
	 * Array of key's fields
	 *
	 * @var array
	 */
	
	var $allSearchFields = array();
	/**
	 * Indicator use suggest or not
	 *
	 * @var bool
	 */
	var $isUseAjaxSuggest = false;
	/**
	 * Permissions for search
	 *
	 * @var bool
	 */
	var $searchPerm = true;

	/**
	 * The page's xTeml instance
	 */
	var $xt;
	
	/**
	 * Constructor, accepts array of parametres, which will be copied to object properties by link
	 *
	 * @param array $params
	 * @return SearchPanel
	 */
	function __construct(&$params)
	{
		// copy properties to object
		RunnerApply($this, $params);
		
		$this->searchClauseObj = &$this->pageObj->searchClauseObj;	
		
		$this->id = $this->pageObj->id;
		$this->pSet = $this->pageObj->pSetSearch;
		$this->tName = $this->pageObj->searchTableName;
		$this->xt = $this->pageObj->xt;
		
		$this->panelState = $this->searchClauseObj->getSrchPanelAttrs();
		$this->isUseAjaxSuggest = $this->pSet->isUseAjaxSuggest();
		if( $this->pageObj->mobileTemplateMode() )
			$this->isUseAjaxSuggest = false;
		
		$this->searchControlBuilder = new PanelSearchControl($this->id, $this->tName, $this->searchClauseObj, $this->pageObj);	
		
		// get search fields if not passed to contructor
		if (!isset($params['panelSearchFields']))
		{
			$this->panelSearchFields = $this->pSet->getPanelSearchFields();	
		}
		if (!isset($params['allSearchFields']))
		{
			$this->allSearchFields = $this->pSet->getAllSearchFields();
		}
	}	
	
	function getSearchPerm($tName = "")
	{
		global $isGroupSecurity;
		$tName = $tName ? $tName : $this->tName;
		if(!$isGroupSecurity)
			return true;

		$strPerm = GetUserPermissions($tName);
		return (strpos($strPerm, "S") !== false);
	}
	
	/**
	 * Main method, call to build search panel
	 *
	 */
	function buildSearchPanel()
	{
		$this->searchAssign();
	}
	
	/**
	 *
	 */
	function searchAssign() 
	{
		$this->xt->assign("asearch_link", $this->searchPerm);
		
		if(isEnableSection508() && $this->searchPerm)
		{
			$searchPerm=array();
			$searchPerm["begin"]="<a name=\"skipsearch\"></a>";
		}
		else
			$searchPerm=$this->searchPerm;
		
		$this->xt->assign("searchform_block", $searchPerm);
		if( $this->pageObj->mobileTemplateMode() )
			$this->xt->assign("searchformmobile_block", $searchPerm);
		
		$this->xt->assign("searchformbuttons_block",$searchPerm);
		
		$this->xt->assign("searchform_text", true);
		$this->xt->assign("searchform_search", true);

		$srchButtTitle = mlang_message("SEARCH"); 
		$this->xt->assign('searchbutton_attrs', 'id="searchButtTop'.$this->id.'" title="'.$srchButtTitle.'"');
		$this->xt->assign('clear_searchbutton_attrs', 'id="clearSearch'.$this->id.'"');
		
		if( $this->pageObj->mobileTemplateMode() )
		{
			$this->xt->assign("searchform_showall_mobile", true);
			$this->xt->assign("searchform_clear_search_mobile", true);
		}
		else 
		{
			$this->xt->assign("searchform_showall", true);
			$this->xt->assign("searchform_clear_search", true);
		}
		
		$showallbutton_attrs = 'id="showAll'.$this->id.'"';
		
		if( !$this->searchClauseObj->isShowAll() )
		{
			$showallbutton_attrs.= ' '.$this->dispNoneStyle;
			$this->xt->assign("showAllCont_attrs", $this->dispNoneStyle);
			$this->xt->assign("clearSearchCont_attrs", $this->dispNoneStyle);
		}

		$this->xt->assign('showallbutton_attrs', $showallbutton_attrs);
	}
}

?>