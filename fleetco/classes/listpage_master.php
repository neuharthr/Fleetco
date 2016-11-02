<?php
/**
 * Class for list page with mode simple
 *
 */
class ListPage_Master extends ListPage 
{
	public $masterPageType = "";
	
	/**
	 * Constructor, set initial params
	 *
	 * @param array $params
	 */	
	function __construct(&$params) 
	{
		// call parent constructor
		parent::__construct($params);	
		$this->pageType = "masterlist";
		$this->masterPageType = $params["masterPageType"];
	}
	/**
	 * Add common assign for simple mode on list page
	 */	
	function commonAssign() 
	{
		parent::commonAssign();
		
		
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
		$this->xt->load_template( GetTemplateName($this->shortTableName, "master".$this->masterPageType) );
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
