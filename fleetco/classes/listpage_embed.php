<?php

class ListPage_Embed extends ListPage
{
	var $viewPDF = 0;
	/**
	 * Constructor, set initial params
	 *
	 * @param array $params
	 */
	function __construct(&$params)
	{
		// copy properties to object
		//RunnerApply($this, $params);
		// call parent constructor
		parent::__construct($params);
	}
	/**
	 * Add common html code for curent mode
	 *
	 */
	function addCommonHtml()
	{
		parent::addCommonHtml();
		$this->xt->assign("footer","");
	}
	
	
	/**
	 * Add common assign for simple mode on list page
	 */	
	function commonAssign() 
	{
		parent::commonAssign();	
		if ($this->isDispGrid())
		{
			$this->xt->assign_section ("grid_block", '', '');
			if(!$this->rowsFound)
				$this->xt->displayBrickHidden("grid");
		}
	}	
	function importAvailable() {
		return false;
	}
	function printAvailable() {
		return false;
	}
	function advSearchAvailable() {
		return false;
	}
	
	function exportAvailable() {
		return false;
	}
}
?>
