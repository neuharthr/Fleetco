<?php

class ListPage_DPDash extends ListPage_Dashboard
{
	
	/**
	 * Array of details preview master key
	 * @var integer
	 */
	var $dpMasterKey = array ();
	
	var $showDetails = false;


	/**
	 * Constructor, set initial params
	 * @param array $params
	 */
	function __construct(&$params)
	{
		parent::__construct($params);
		
		$dashDetails = $this->dashElementData["details"][$this->tName];
		
		$this->showAddInPopup = $dashDetails["add"];
		$this->showEditInPopup = $dashDetails["edit"];
		$this->showViewInPopup = $dashDetails["view"];		

		if($this->mobileTemplateMode())
			$this->pageSize = -1;
		
		$this->searchClauseObj->clearSearch();
		
		$this->jsSettings['tableSettings'][$this->tName]['masterTable'] = $this->masterTable;
		$this->jsSettings['tableSettings'][$this->tName]['firstTime'] = $this->firstTime;
		$this->jsSettings['tableSettings'][$this->tName]['strKey'] = $this->getStrMasterKey();
	}
	
	/**
	 * Assigne Import Links or not
	 */
	function importLinksAttrs() 
	{
	}
	
	/**
	 * The stub preventing the detail page from showing a master info block
	 */
	function displayMasterTableInfo() 
	{
	}
	
	/**
	 * Process master key value
	 * Set master key for create DPInline params
	 */
	function processMasterKeyValue() 
	{
		parent::processMasterKeyValue();
		for($i = 1; $i <= count($this->masterKeysReq); $i++)
			$this->dpMasterKey[] = $this->masterKeysReq[$i];
	}
	
	/**
	 * Get string of master keys for dpInline on Edit page
	 */
	function getStrMasterKey()
	{
		$strkey = array();
		for($i = 0; $i < count($this->dpMasterKey); $i++)
		{
			$strkey[$i] = $this->dpMasterKey[$i];
		}
		return $strkey;	
	}
	
	/**
	 * A stub preventing the Search Panel from building
	 */
	function buildSearchPanel()
	{
	}
	function deleteAvailable() {
		return ListPage_Embed::deleteAvailable() &&  $this->dashElementData["details"][$this->tName]["delete"];
	}

	function editAvailable() {
		return ListPage_Embed::editAvailable() && $this->dashElementData["details"][$this->tName]["edit"];
	}

	function addAvailable() {
		return ListPage_Embed::addAvailable() && $this->dashElementData["details"][$this->tName]["add"];
	}

	function viewAvailable() {
		return ListPage_Embed::viewAvailable() && $this->dashElementData["details"][$this->tName]["view"];
	}

	function inlineEditAvailable() {
		return false; 
	}
	function inlineAddAvailable() {
		return false;
	}
}
?>