<?php
class ViewControlsContainer
{
	public $viewControls = array();
	public $pSet = null;
	public $pageType = "";
	public $isDetailsPreview = false;

	/**
	 * Reference to RunnerPage (or its descendant) instance 
	 */
	public $pageObject = null;
	public $forExport = "";
	/**
	 * A flag indicating whether this container is an internal object of ViewControl (for LookupWizard fields only)
	 * @var {bool}
	 */
	public $isLocal = false;
	
	public $recId = 0;
	
	public $id = 0;
	
	/**
	* This flag is set true for the "More" link lookup only (before the "More" popup is showing) 
	* @var boolean
	*/
	var $fullText = false;
	
	/**
	 *	The list of including js files 
	 */	  
	var $includes_js = array();
	/**
	 *	The list of including js files 
	 */
	var $includes_jsreq = array();
	/**
	 *	The list of including css files
	 */
	var $includes_css = array();
	
	var $viewControlsMap = array();
	
	/**
	* 	Array of link fields values for lookup fields with distict link and displayed values
	*/
	var $linkFieldValues = array();
	
	var $originlinkValues = array();
	
	var $tName = "";
	
	var $searchHighlight = false;
	
	public function __construct($pSet, $pageType, $pageObject = null)
	{
		$this->pSet = $pSet;
		$this->pageType = $pageType;
		$this->pageObject = $pageObject;
		$this->tName = $pSet->getTableName();
		if($pageObject)
			$this->pSet->setPageMode($pageObject->mode);
			
		$this->searchHighlight= $this->highlightSearchResults();	
	}
	
	/**
	 * Check if search results need to be highlighted through the page's view controls
	 * @return Boolean
	 */
	protected function highlightSearchResults()
	{
		$curPageObject = $this->pageObject;
		
		if( is_null($curPageObject) || !$this->pSet->highlightSearchResults() || $this->pageType != PAGE_LIST)
			return false;
		
		if( $curPageObject->mode != LIST_SIMPLE && $curPageObject->mode != LIST_AJAX && $curPageObject->mode != LIST_LOOKUP && $curPageObject->mode != LIST_DASHBOARD)
			return false;

		return true;
	}
	
	function setForExportVar($forExport)
	{
		$this->forExport = $forExport;
	}
	
	/**
	  * Add js files for page
	  */
	function AddJSFile($file,$req1="",$req2="",$req3="")
	{
		$rootPath = GetRootPathForResources($file);
		$this->includes_js[] = $rootPath;
		if($req1!="")
		{
			$this->includes_jsreq[$rootPath] = array(GetRootPathForResources($req1));
		}
		if($req2!="")
		{
			$this->includes_jsreq[$rootPath][] = GetRootPathForResources($req2);
		}
		if($req3!="")
		{
			$this->includes_jsreq[$rootPath][] = GetRootPathForResources($req3);
		}
	}
	
	/**
	  * Add css files for page
	  */	
	function AddCSSFile($file)
	{
		$this->includes_css[] = $file;
	}
	
	function addControlsJSAndCSS()
	{
		switch ($this->pageType)
		{
			case PAGE_VIEW:
				$pageTypeStr = "View";
				break;
			case PAGE_EDIT:
				$pageTypeStr = "Edit";
				break;
			case PAGE_PRINT:
			case PAGE_RPRINT:
				$pageTypeStr = "Printer";
				break;
			case PAGE_LIST:
			case PAGE_SEARCH:
			case PAGE_REPORT:
			case PAGE_CHART:
				$pageTypeStr = "List";
				break;
			default:
				return;
		}
		$getFieldsFunc = "get".$pageTypeStr."Fields";
		$appearOnPageFunc = "appearOn".$pageTypeStr."Page";
		$fields = $this->pSet->$getFieldsFunc();
		for($i = 0; $i < count($fields); $i++)
		{
			if($this->pSet->$appearOnPageFunc($fields[$i]))
			{
				if ($this->getControl($fields[$i])->neededLoadJSFiles())
					$this->getControl($fields[$i])->addJSFiles();
				
				$this->getControl($fields[$i])->addCSSFiles();
			}
		}
	}
	
	/**
	 * Create new control (if needed) for view field, and return it
	 * @param {string} field name
	 * @param {string} predefined view format 
	 */
	public function getControl($field, $format = null)
	{
		// if conrol does not created previously  
		if(!array_key_exists($field, $this->viewControls))
		{
			include_once(getabspath("classes/controls/ViewControl.php"));
			$vcTypes = new ViewControlTypes();
			$editFormat = $this->pSet->getEditFormat($field);
			if(is_null($format)){
				$localPSet = $this->pSet;
				$lookupPageType = "";
				if(!$this->isLocal)
				{
					$lookupPageType = $this->pSet->getPageTypeByFieldEditFormat($field, EDIT_FORMAT_LOOKUP_WIZARD);
					if($lookupPageType != "")
						$localPSet = new ProjectSettings($this->pSet->_table, $lookupPageType);
				}
				if(!$this->isLocal
					&& ($editFormat == EDIT_FORMAT_LOOKUP_WIZARD || $lookupPageType != "")  
					&& ($localPSet->getLookupType($field) == LT_LOOKUPTABLE || $localPSet->getLookupType($field) == LT_QUERY) 
					&& $localPSet->getLinkField($field) != $localPSet->getDisplayField($field))
				{
					$viewFormat = FORMAT_LOOKUP_WIZARD;
				}else
					$viewFormat = $this->pSet->getViewFormat($field);
			}else 
				$viewFormat = $format;
				
			$className = $vcTypes->viewTypes[$viewFormat];
			if($className == "" && $viewFormat != "")
			{
				$className = "View".$viewFormat;
				$userControl = true;
				include_once(getabspath("classes/controls/ViewUserControl.php"));
			}
		
			if($className != "")
			{
				$this->viewControls[$field] = createViewControlClass($className, $field, $this, $this->pageObject);
			}
			else
				$this->viewControls[$field] = new ViewControl($field, $this, $this->pageObject);
			
			if($userControl)
			{
				$this->viewControls[$field]->viewFormat = $className;
				$this->viewControls[$field]->init();
				$this->viewControls[$field]->initUserControl();
			}
		}
		return $this->viewControls[$field];
	}
	
	/**
	 * showDBValue
	 * Wrapper for ViewControl creation and showDBValue call on it
	 * @param {string} field name
	 * @param {array} associative array with record data
	 * @param {string} string with record keys and values
	 */
	function showDBValue($field, &$data, $keylink = "", $value = "")
	{
		$control = $this->getControl($field);
		if($value != ""){
			$control->displayField = $value;
		}
		
		return $control->showDBValue($data, $keylink);
	}
	
	/**
	 * Check availability user control in ViewControlsContaier
	 * @return boolean
	 */
	public function hasUserControls()
	{
		$arFields = $this->pSet->getPrinterFields();
		foreach ($arFields as $arField)
		{
			if ($this->getControl($arField)->isUserControl())
				return true;
		}
		return false;
	}
	function mobileTemplateMode() 
	{
		return false;
	}
}
?>