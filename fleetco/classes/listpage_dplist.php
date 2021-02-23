<?php

class ListPage_DPList extends ListPage_DPInline
{
	
	/**
	 * Constructor, set initial params
	 * @param array $params
	 */
	function __construct(&$params)
	{
		// copy properties to object
		//RunnerApply($this, $params);
		// call parent constructor
		parent::__construct($params);
		
		/*$this->formBricks["header"] = array( 
//			array( "name" => "details_block", "align" => "right" ),
//			array( "name" => "newrecord_controls_block", "align" => "left" ), 
//			array( "name" => "record_controls_block", "align" => "left" ) 
		);*/
		$this->formBricks["footer"] = array( "pagination_block" );	
	}
	
	/**
	 * Show the page.
	 * It's supposed to be displayed in resonce on an ajax-like request
	 */
	public function showPage()
	{				
		$this->BeforeShowList();
		
		if( $this->mobileTemplateMode() )
			$bricksExcept = array("grid_mobile", "pagination", "details_found");
		else 
			$bricksExcept = array("grid", "pagination", "message", /*"recordcontrols_new", "recordcontrol"*/);
		
		$this->xt->hideAllBricksExcept( $bricksExcept );
		$this->xt->prepare_template($this->templatefile);
		$this->showPageAjax();
	}

	/**
	 * @return String
	 */
	protected function getHeaderControlsBlocks()
	{
		$controlsBlocks = "";
		$buttons = "";
		$bs_button_class = "btn btn-sm btn-link";
		if( $this->inlineAddAvailable() && $this->xt->getVar("inlineadd_link") )
		{
			$inlineaddlink_attrs = $this->xt->getVar("inlineaddlink_attrs");
			if( $this->getLayoutVersion() != BOOTSTRAP_LAYOUT) 
			{
				$controlsBlocks = '<span class="rnr-dbebrick ">'
					.'<div class="style1 rnr-bl rnr-b-recordcontrols_new">'
						.'<a class="rnr-button" href="#" '.$inlineaddlink_attrs.'>'.mlang_message("AA_P_ADD").'</a> '
					.'</div>'
				.'</span>';		
			}
			else
			{
				$buttons .= '<a class="' . $bs_button_class . '" href="#" '.$inlineaddlink_attrs.'>'.mlang_message("AA_P_ADD").'</a> ';		
			}
		}

		
		if( $this->inlineEditAvailable() && $this->xt->getVar("editselected_link") )
		{
			$editselectedlink_attrs = $this->xt->getVar("editselectedlink_attrs");
			$editselectedlink_span = $this->xt->getVar("editselectedlink_span");
			
			// "bs-invisible-button" class need for init hidden in bootstrap
			if( $this->getLayoutVersion() != BOOTSTRAP_LAYOUT) 
				$buttons.= '<a class="rnr-button" href="#" '.$editselectedlink_attrs.' '.$editselectedlink_span.'>'.mlang_message("AA_P_EDIT").'</a> ';
			else
				$buttons.= '<a class="' . $bs_button_class . ' " disabled href="#" '.$editselectedlink_attrs.' '.$editselectedlink_span.'>'.mlang_message("AA_P_EDIT").'</a> ';
		};	
		
		if( $this->xt->getVar("saveall_link") )
		{
			$savealllink_attrs = $this->xt->getVar("savealllink_attrs");	
			$savealllink_span = $this->xt->getVar("savealllink_span");	
	
			if( $this->getLayoutVersion() != BOOTSTRAP_LAYOUT) 
				$buttons.= '<a class="rnr-button" href="#" '.$savealllink_attrs.' '.$savealllink_span.'>'.mlang_message("SAVE_ALL").'</a> ';					  
			else
				$buttons.= '<a class="' . $bs_button_class . '" href="#" '.$savealllink_attrs.' '.$savealllink_span.'>'.mlang_message("SAVE_ALL").'</a> ';					  
		}
		
		if( $this->xt->getVar("cancelall_link") )
		{
			$cancelalllink_attrs = $this->xt->getVar("cancelalllink_attrs");	
			$cancelalllink_span = $this->xt->getVar("cancelalllink_span");

			if( $this->getLayoutVersion() != BOOTSTRAP_LAYOUT) 
				$buttons.= '<a class="rnr-button" href="#" '.$cancelalllink_attrs.' '.$cancelalllink_span.'>'.mlang_message("CANCEL_ALL").'</a> ';					  
			else
				$buttons.= '<a class="' . $bs_button_class . '" href="#" '.$cancelalllink_attrs.' '.$cancelalllink_span.'>'.mlang_message("CANCEL_ALL").'</a> ';					  
		}
		
		if( $this->deleteAvailable() && $this->xt->getVar("deleteselected_link") )
		{
			$deleteselectedlink_attrs = $this->xt->getVar("deleteselectedlink_attrs");	
			$deleteselectedlink_span = $this->xt->getVar("deleteselectedlink_span");            

			// "bs-invisible-button" class need for init hidden in bootstrap
			if( $this->getLayoutVersion() != BOOTSTRAP_LAYOUT) 
				$buttons.= '<a class="rnr-button " href="#" '.$deleteselectedlink_attrs.' '.$deleteselectedlink_span.'>'.mlang_message("AA_P_DELETE").'</a> ';		  
			else
				$buttons.= '<a class="' . $bs_button_class . '" disabled href="#" '.$deleteselectedlink_attrs.' '.$deleteselectedlink_span.'>'.mlang_message("AA_P_DELETE").'</a> ';		  
		}		

		
		if( $buttons ) 
		{
			if( $this->getLayoutVersion() != BOOTSTRAP_LAYOUT) 
			{
				$controlsBlocks.= '<span class="rnr-dbebrick ">'
					.'<div class="style1 rnr-bl rnr-b-recordcontrol ">'
					.$buttons
					.'</div>'
				.'</span>';				
			} else {
				$controlsBlocks.= '<span class="rnr-dbebrick ">'
					.$buttons
				.'</span>';				
			}
		}
		
		return $controlsBlocks.'<div class="rnr-dbefiller"></div>';
	}
	
	/**
	 *
	 */
	function showPageAjax() 
	{
		$returnJSON = array();
		$proceedLink = $this->getProceedLink();
		if( !$this->numRowsFromSQL && !$this->inlineAddAvailable() && !$this->recordsDeleted && $proceedLink == '') 
		{
			$returnJSON['success'] = false;
			echo printJSON($returnJSON);
			return;
		}
		
		$this->addControlsJSAndCSS();
		$this->fillSetCntrlMaps();
		
		$returnJSON['controlsMap'] = $this->controlsHTMLMap;
		$returnJSON['viewControlsMap'] = $this->viewControlsHTMLMap;
		$returnJSON['settings'] = $this->jsSettings;
		$this->xt->assign("header",false);
		$this->xt->assign("footer",false);
		
		/*if( $this->formBricks["header"] )
			$returnJSON['headerCont'] = $this->fetchBlocksList( $this->formBricks["header"], true );*/					
		
		$returnJSON['headerCont'] = $proceedLink . $this->getHeaderControlsBlocks();

		if( $this->formBricks["footer"] )
			$returnJSON["footerCont"] = $this->fetchBlocksList( $this->formBricks["footer"], true );
			
		$this->assignFormFooterAndHeaderBricks(false);
		
		$this->xt->prepareContainers();
		$returnJSON["html"] = $this->xt->fetch_loaded("body");
		
		$returnJSON['idStartFrom'] = $this->flyId;
		$returnJSON['success'] = true;
		
		$returnJSON["additionalJS"] = $this->grabAllJsFiles();
		$returnJSON["CSSFiles"] = $this->grabAllCSSFiles();

		echo printJSON($returnJSON);
	}

	protected function assignSessionPrefix() 
	{
		$this->sessionPrefix = $this->tName."_preview";	
	}
	
	function showNoRecordsMessage()
	{
		//	show nothing
	}

	
	function deleteAvailable() {
		return $this->masterPageType!=PAGE_VIEW && $this->masterPageType != PAGE_ADD && parent::deleteAvailable();
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
		return $this->masterPageType!=PAGE_VIEW && $this->masterPageType != PAGE_ADD && parent::copyAvailable();
	}
	function inlineEditAvailable() {
		return $this->masterPageType!=PAGE_VIEW && $this->masterPageType != PAGE_ADD && parent::inlineEditAvailable();
	}
	function inlineAddAvailable() {
		return $this->masterPageType!=PAGE_VIEW && parent::inlineAddAvailable();
	}
	function viewAvailable() {
		return false;
	}	
}
?>
