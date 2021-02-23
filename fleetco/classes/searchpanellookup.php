<?php
/**
 * Search panel builder for LIST_LOOKUP mode
 */
class SearchPanelLookup extends SearchPanel {

	function __construct(&$params) 
	{
		parent::__construct($params);
	}
	
	function searchAssign()
	{
		parent::searchAssign();
		
		$searchforAttrs = 'placeholder="'. mlang_message("SEARCH_TIP").'"';
				
		$searchGlobalParams = $this->searchClauseObj->getSearchGlobalParams();
		if($this->searchClauseObj->isUsedSrch())
		{
			$valSrchFor = $searchGlobalParams["simpleSrch"];
			$searchforAttrs.= " value=\"".runner_htmlspecialchars($valSrchFor)."\"";
		}

		$searchforAttrs.= " size=\"15\" name=\"ctlSearchFor".$this->id."\" id=\"ctlSearchFor".$this->id."\"";
		
		$this->xt->assign("searchfor_attrs", $searchforAttrs);
	}
}

?>