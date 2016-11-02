<?php
/**
 * Class for list page with mode simple
 *
 */
class ChartPage_Master extends ChartPage 
{
	/**
	 * Constructor, set initial params
	 *
	 * @param array $params
	 */	
	function __construct(&$params) 
	{
		// call parent constructor
		parent::__construct($params);
	}

	public function getMasterHeading() 
	{
		$this->xt->assign( "masterlist_title", true );
		return $this->xt->fetch_loaded( "masterlist_title" );
	}

	public function preparePage() 
	{
		if( !$this->masterRecordData || !count($this->masterRecordData) )
			return;

		$this->xt->assign("chart_block", true);		
		$this->assignChartElement();

		$this->xt->assign("pagetitlelabel", $this->getPageTitle( $this->pageType, GoodFieldName($this->tName), $this->masterRecordData ));	

		$tKeys = $this->pSet->getTableKeys();
		$keylink = "";

				
		for($i = 0; $i < count($tKeys); $i ++) {
			$keylink.= "&key".($i + 1)."=".runner_htmlspecialchars(rawurlencode(@$this->masterRecordData[$tKeys[$i]]));
		}
		
		$fields = $this->pSet->getMasterListFields();
		$fields = array_merge( $fields, $tKeys);
		foreach( $fields as $f )
		{
			$fieldClassStr = $this->fieldClass($f);
			$this->xt->assign( GoodFieldName( $f ) . "_mastervalue", "<span class='". $fieldClassStr ."'>".$this->showDBValue( $f, $this->masterRecordData, $keylink)."</span>");
			$this->xt->assign( GoodFieldName( $f ) . "_class", $fieldClassStr); // add class for field header as field value
		}
			
		if( $this->pageLayout )
			$this->xt->assign("pageattrs", 'class="'.$this->pageLayout->style." page-".$this->pageLayout->name.'"');
		
		if( $this->pageLayout )
			$this->xt->assign("pageattrs", 'class="'.$this->pageLayout->style." page-".$this->pageLayout->name.'"');
		$this->xt->load_template( GetTemplateName($this->shortTableName, "masterchart") );
	}

	public function showMaster( $params ) 
	{

		if( !$this->masterRecordData || !count($this->masterRecordData) )
			return;

		$this->xt->assign( "masterlist_title", false );
		$this->xt->display_loaded();
	}
}

?>
