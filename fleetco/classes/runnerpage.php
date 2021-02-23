<?php
include_once(getabspath("classes/files.php"));

/**
 * Abstract base class for all pages. Contains main functionality 
 */
class RunnerPage
{
	/**
     * Id on page.
     * @var integer
     * @intellisense
     */
	public $id = 1;
	
	/**
     * Use tool tips or not
     * @var bool
     * @intellisense
     */
	protected $isUseToolTips = false;
	
	/**
	 * If use Ajax Suggest js file or not
	 * @var bool
	 * @intellisense
	 */
	protected $isUseAjaxSuggest = true;
	
	/**
     * Type of page
     * @var string
     * @intellisense
     */
	public $pageType = "";
	
	/**
     * Mode of page
     * @var integer
     * @intellisense
     */
	public $mode = 0;
	
	/**
 	 * If use display loading or not
	 * @var bool
	 * @intellisense
	 */
	public $isDisplayLoading = false;
	
	/**
     * Original table name
     * @var string
     * @intellisense
     */
	public $strOriginalTableName = ""; //fix it
	
	/**
	 * String caption of table
	 * @var string
	 * @intellisense
	 */
	protected $strCaption = "";
	
	/**
     * Short table name
     * @var string
     * @intellisense
     */
	public $shortTableName = '';
	
	/**
     * Prefix for session variable
     * @var integer
     * @intellisense
     */
	public $sessionPrefix = "";
	
	/**
     * Name of current table
     * @var string
     * @intellisense
     */	
	public $tName = "";

	/**
     * Array of order index in table
     * @var array()
     * @intellisense
     */
	public $gOrderIndexes = array();
	
	/**
     * String of OrderBy for query
     * @var string
     * @intellisense
     */
	public $gstrOrderBy = "";
	
	/**
     * Instance of class Xtempl
     * @var object
     * @objtype{XTempl}
     * @intellisense
     */
	public $xt = null;
	
	/**
	 * Instance of SearchClause class
	 * @var object
	 * @objtype{SearchClause}
	 * @intellisense
	 */
	public $searchClauseObj = null;
	
	/**
     * Need use search clause object or not 
     * @var boolean
     * @intellisense
     */
	public $needSearchClauseObj = true;
	
	public $flyId = 1;
	
	/**
	 *	The list of including js files 
	 * @intellisense
	 */	  
	public $includes_js = array();
	
	/**
	 *	The list of including js files 
	 * @intellisense
	 */
	public $includes_jsreq = array();
	
	/**
	 *	The list of including css files
	 * @intellisense
	 */
	public $includes_css = array();

	/**
	 * Id of record
	 * @var integer
	 * @intellisense
	 */
	public $recId = 0;
	
	/**
	 * Google maps default settings
	 * @var array
	 * @intellisense
	 */
	public $googleMapCfg = array();

	/**
	 * Recaptcha default settings
	 * @var array
	 * @intellisense
	 */
	public $reCaptchaCfg = array();

	/**
	 * Captcha Value
	 * @var string
	 * @intellisense
	 */
	public $captchaValue = '';

	/**
	 * Is captcha ok after submit or not
	 * @var boolean
	 * @intellisense
	 */
	public $isCaptchaOk = true;

	/**
	 * How many CAPTCHAs to skip after a successful
	 * @var integer
	 * @intellisense
	 */
	public $captchaPassesCount = 5;

	/**
	 * Array of permissions for pages
	 * @var array
	 * @intellisense
	 */
	public $permis = array();
	
	/**
	 * If use group scurity or not
	 * @var bool
	 * @intellisense
	 */
	public $isGroupSecurity = true;
	
	/**
	 * Use or not debug mode for js
	 * @var bool
	 * @intellisense
	 */
	protected $debugJSMode = false;
	
	/**
	 * Array of record ??? for lookup with search
	 * @var array
	 */
	protected $recIds = array();
	
	/**
	 * Use mode ajax for simple listPage
	 * @var boolean
	 * @intellisense
	 */
	public $listAjax = false;

	/**
	 * Array of body begin, end code and body attributs
	 * @var array
	 * @intellisense
	 */
	public $body = array('begin' => '', 'end'=> '');
	
	/**
	 * Master table name
	 * @var string
	 * @intellisense
	 */
	public $masterTable = "";

	/**
	 * Master table record data
	 * @var object
	 * @intellisense
	 */
	public $masterRecordData = array();
	
	/**
	 * Type of the details preview on List page
	 * @var bool
	 * @intellisense
	 */
	protected $detailsLinksOnList;
	
	/**
	 * Array of all details tables data
	 * @var array
	 * @intellisense
	 */	
	public $allDetailsTablesArr = array();
	
	/**
	 * Array of java script settings for page
	 * @var array
	 * @intellisense
	 */	
	public $jsSettings = array();
	
	/**
	 * Array of controls HTML map
	 * @var array
	 * @intellisense
	 */	
	public $controlsHTMLMap = array();
	
	/**
	 * Array of view controls HTML map
	 * @var array
	 * @intellisense
	 */	
	public $viewControlsHTMLMap = array();
	
	/**
	 * Array of controls map
	 * @var array
	 * @intellisense
	 */	
	public $controlsMap = array();
	
	/**
	 * Array of view controls map
	 * @var array
	 * @intellisense
	 */	
	public $viewControlsMap = array();
	
	/**
	 * Array of field settings for use it in javascript settings
	 * @var array
	 * @intellisense
	 */	
	public $settingsMap = array();
	
	/**
	 * Array of records per page for list and report without group fields
	 * @var array
	 * @intellisense
	 */	
	public $arrRecsPerPage = array();

	/**
	 * Number of page size
	 * @var integer
	 * @intellisense
	 */
	public $pageSize = 0;
	
	/**
	 * The page's table type: list, report or chart
	 * @var string
	 * @intellisense
	 */
	protected $tableType = "";
	
	/**
	 * Events object for the current table
	 * @var object
	 * @intellisense
	 */	
	public $eventsObject;
	
	/**
	 * Master table requested keys
	 * @var array
	 */
	public $masterKeysReq = array();
	
	/**
	 * Detail keys by master table
	 * @var array
	 * @intellisense
	 */
	public $detailKeysByM = array();
	
	/**
	 * Locking object
	 * @var object
	 * @intellisense
	 */
	public $lockingObj = null;
	
	/**
	 * Is use Video player or not
	 * @var boolean
	 * @intellisense
	 */
	protected $isUseVideo = false;
	
	/**
	 * Is columns will be resizable or not
	 * @var boolean
	 * @intellisense
	 */
	protected $isResizeColumns = false;
	
	/**
	 * Is use CKeditor or not
	 * @var boolean
	 * @intellisense
	 */
	protected $isUseCK = false;
	
	/**
	 * Is display detail data on page or not
	 * @var boolean
	 * @intellisense
	 */
	public $isShowDetailTables = false;
	
	/**
	 * arrays of files to process after adding or editing a record
	 * @intellisense
	 */
    public $filesToSave = array(); //FileFieldSingle
	public $filesToMove = array(); 
	public $filesToDelete = array(); 
	
	/**
	 * Master keys by detail table
	 * @var array
	 * @intellisense
	 */
	protected $masterKeysByD = array();
	
	/**
	 * Indicator is permissions dynamic
	 * @var bool
	 * @intellisense
	 */
	public $isDynamicPerm = false;
	
	/**
	 * If nedd add web report or not
	 * @var bool
	 * @intellisense
	 */
	protected $isAddWebRep = true;
	
	/**
	 * Indicator, is used section 508 
	 * @var bool
	 * @intellisense
	 */
	protected $is508 = false;
	
	/**
	 * Instance of Cypher class for encoding/decoding fields values
	 * @var object
	 * @intellisense
	 */
	public $cipherer = null;
	
	/**
	 * Project settings
	 * @type ProjectSettings
	 * @intellisense
	 */
	public $pSet = null;
	
	/**
	 * Project settings for edit controls
	 * @type ProjectSettings
	 * @intellisense
	 */
	public $pSetEdit = null;
	
	/**
	 * Number of rows
	 * @var integer
	 * @intellisense
	 */
	protected $numRowsFromSQL = 0;	
	
	/**
	 * Index of my page
	 * @var integer
	 * @intellisense
	 */
	protected $myPage = 0;
	
	protected $mapProvider = 0;
	
	protected $recordsOnPage = 0;
	
	/**
	 * Number of records per row list
	 * @var integer
	 * @intellisense
	 */
	public $recsPerRowList = 0;

	/**
	 * Number of records per row print
	 * @var integer
	 * @intellisense
	 */
	public $recsPerRowPrint = 0;
	
	/**
	 * grid layout - gltHORIZONTAL, gltVERTICAL or gltCOLUMNS
	 * @type bool
	 */
	public $listGridLayout = false;

	/**
	 * grid layout - gltHORIZONTAL, gltVERTICAL or gltCOLUMNS
	 * @type bool
	 */
	public $printGridLayout = false;
	
	/**
	 * An array that keys are different field's css rules
	 * @type array
	 */
	protected $fieldCssRules = array();
	
	/**
	 * Cells' custom css rules
	 * @type string
	 */
	protected $cell_css_rules = "";
	
	/**
	 * Rows' custom css rules
	 * @type string
	 */
	protected $row_css_rules = "";

	/**
	 * css rules to hide fields on mobile devices columns
	 * It could be also applied to the desktop version	 
	 * @type string
	 */
	protected $mobile_css_rules = "";

	protected $colsOnPage = 1;
	
	/**
	 * Array of field names that used for totals
	 * @type array
	 * array['totalsFields']= array('fName'=>"@f.strName s", 'totalsType'=>'@f.strTotalsType', 'viewFormat'=>"@f.strViewFormat");
	 */
	public $totalsFields = array();


	/**
	 * Number of founed rows
	 * @var bool
	 * @intellisense
	 */
	public $rowsFound = false;
	
	/**
	 * Constructor, set initial params
	 * @param array $params
	 * @intellisense
	 */
	protected $deleteMessage = '';
	
	/**
	 * Number of maximum pages
	 * @var integer
	 * @intellisense
	 */
	protected $maxPages = 1;
	
	/**
	 * Name of the templete file
	 * @var string
	 * @intellisense
	 */
	public $templatefile = "";
	
	/**
	 * Array of menu nodes
	 * @var array
	 * @intellisense
	 */	
	public $menuNodes = array();
	
	/**
	 * Refferense to sqlquery object 
	 * @var object
	 * @intellisense
	 */
	protected $gQuery = null;
	
	/**
	 * Flag. True if fillSetCntrlMaps already called 
	 * @intellisense
	 */
	protected $isControlsMapFilled = false;
	
	/**
	 * Instance of EditControlsContainer
	 * @var {object}
	 * @intellisense
	 */
	protected $controls = null;
	
	/**
	 * Instance of ViewControlsContainer
	 * @var {object}
	 * @intellisense
	 */
	public $viewControls = null;
	
	/**
	 * Associative array of readonly fields for add, edit and register page
	 * @var array
	 * @intellisense
	 */
	public $readOnlyFields = array();
	
	/**
	 * It indicates if the searchpanel brick id added to the page's layout
	 */
	protected $searchPanelActivated = false;
	
	/**
	 * the instance of the "projectSettings" object 
	 * It differs from the pSet (and is set as a pSet for the Search panel's searh table)
	 * in case the Search panel is activated on the non table page
	 * @type ProjectSettings	 
	 */
	public $pSetSearch = null;
	
	/**
	 * The real Search panel's searh table name.
	 * It differs from the tName in case the Search panel is activated on the non table page
	 */
	public $searchTableName = "";

	/**
	 * Page layout object
	 */
	protected $pageLayout = null;
	
	protected $warnLeavingPages = null;
	
	/**
	 * Indicator showing if It's neccessary to add the search panel fields's settings
	 * It's set equal to true when the Search panel is added on the non table page
	 */
	public $tableBasedSearchPanelAdded = false;
	
	public $mainTable = ""; //fix it
	public $mainField = ""; //fix it
	
	/**
	 * Cached results of getWhereComponents function
	 */
	protected $_cachedWhereComponents = null;
	
	/**
	 * the local time format regexp
	 * @type String
	 */ 
	protected $timeRegexp;
	
	protected $dispNoneStyle = 'style="display: none;"';

	/**
	 * Detail keys by detail table
	 */
	protected $detailKeysByD = array();
	
	/**
	 * The page's searchParamsLogger class instance
	 * @type Object
	 */
	public $searchLogger = null;

	/**
	 * @type Boolean
	 */
	public $searchSavingEnabled = false;
	
	/**
	 * @type Boolean
	 */
	public $pageHasSavedSearches = false;	
	

	/**
	 * The 'form' logic elements
	 * @type Array
	 */
	protected $formBricks = array();
	
	/**
	 * The instance of class representing a db connection
	 * @type Connection 
	 */
	public $connection = null;
	
	/**
	 * Dashboard name
	 * @type string 
	 */
	public $dashTName = '';
	
	/**
	 * Element from dashboard
	 * @type string 
	 */
	public $dashElementName = '';

	/**
	 * @type ProjectSettings
	 */
	protected $dashSet;
	
	/**
	 * @type Array
	 */
	protected $dashElementData = array();
	
	
	/**
	 *	PDF rendering mode. 
	 *  empty - regular page display
	 * 	"build" - build page and return PDF
	 * 	"prepare" - build page and return HTML for browser post-processing
	 *	"convert" - convert post-processed HTML to PDF
	 */
	public $pdfMode = "";
	
	/**
	 * In a multistepped layout the step number
	 * @type Integer
	 */
	public $initialStep = 0;
	
	/**
	 *	This property is used by ReportPrint page only to indicate that export to Word/Excel is in progress.
	 *	@type String
	 */
	public $format = "";

	public $message = "";

	public $viewPdfEnabled = false;

	/**
	 * @type Boolean
	 */
	public $mapRefresh = false;
	
	/**
	 * @type Array
	 */
	public $vpCoordinates = array();	
	
	public $querySQL = "";
	
	/**
	 * type of main master page
	 * @type String
	 */
	public $mainMasterPageType = "";
	
	/**
	 * View page data
	 * @type array
	 */
	protected $data = null;
	
	/**
	 * errorFields
	 */
	public $errorFields = array();
	
	protected $menuRoots = array();
	
	protected $detailsTableObjects = array();

	/**
	 * If use body scroll for grid
	 * @type bool
	 */
	public $isScrollGridBody = false;
	
	/**
	 * Suppress Post/Redirect/Get pattern after submitting the form on Add/Edit/Register/Delete pages
	 * With $this->stopPRG=false the page will not be redirected.
	 */
	public $stopPRG = false;
	
	/**
	 * Override default page title
	 * @type String
	 */
	public $pageTitle = null;
	
	/**
	 * @constructor
	 * @param &Array params
	 */
	function __construct(&$params)
	{
		global $locale_info, $cCharset, $page_layouts;
		
		// copy properties to object
		RunnerApply($this, $params);
		
		if( $this->xt )
			$this->xt->pageId = $this->id;
		$this->setTableConnection();
		
		$this->pSet = new ProjectSettings($this->tName, $this->pageType);
		$this->pSetEdit = $this->pSet;
		$this->pSetSearch = new ProjectSettings($this->tName, PAGE_SEARCH); 
		$this->searchTableName = $this->tName; 
		
		if( $this->dashTName )
		{
			$this->dashSet = new ProjectSettings( $this->dashTName );
			if( $this->isDashboardElement() )
				$this->dashElementData = $this->dashSet->getDashboardElementData( $this->dashElementName );
		}
		
		$this->assignCipherer();
		
		include_once getabspath("classes/controls/EditControlsContainer.php");
		$this->controls = new EditControlsContainer($this, $this->pSetEdit, $this->pageType);
		include_once getabspath("classes/controls/ViewControlsContainer.php");
		$this->viewControls = new ViewControlsContainer($this->pSet, $this->pageType, $this);
		
		$this->gQuery = $this->pSet->getSQLQuery();
		
		//set google map configuration
		$this->googleMapCfg = array('isUseMainMaps'=>false, 'isUseFieldsMaps'=> false, 'isUseGoogleMap'=>false, 'APIcode'=>GetGlobalData("apiGoogleMapsCode",""), 'mainMapIds'=>array(), 'fieldMapsIds'=>array(), 'mapsData'=>array());

		//set recaptcha configuration
		$captchaSettings = GetGlobalData("CaptchaSettings", "");
		$this->captchaPassesCount = $captchaSettings["captchaPassesCount"];
		if ( $captchaSettings["type"] == RE_CAPTCHA )
		{
			$this->AddJSFile('include/runnerJS/ReCaptcha.js');
			$this->reCaptchaCfg = array('siteKey' => $captchaSettings["siteKey"],  'inputCaptchaId' => "");
		}

				$this->debugJSMode = false;
		
		if($this->flyId < $this->id+1)
			$this->flyId = $this->id+1;
		
		// get permissions 
		if ($this->tName)
		{
			$this->permis[$this->tName]= $this->getPermissions();
			$this->eventsObject = &getEventObject($this->tName);
		}
		
		if( !$this->sessionPrefix )
			$this->assignSessionPrefix();
		
		$this->isDisplayLoading = $this->pSet->displayLoading();
		
		//init settingMap globalSettings
		$this->settingsMap["globalSettings"] = array();
		$this->settingsMap["globalSettings"]["shortTNames"] = array();
				
		$this->searchPanelActivated = $this->checkIfSearchPanelActivated( $this->mobileTemplateMode() );
		//global settings including "shortTNames" might be updated
		$this->setParamsForSearchPanel();
		
		$this->searchSavingEnabled = $this->isSearchSavingEnabled() && $this->needSearchClauseObj;
		
		if ( $this->mode != LIST_MASTER )
			$this->setSessionVariables();
		
		//	get locking object
		$this->lockingObj = $this->getLockingObject();	
		$this->warnLeavingPages = $this->pSet->warnLeavingPages(); 
		$this->is508 = isEnableSection508();
		$this->mapProvider = getMapProvider();
		$this->isUseVideo = $this->pSet->isUseVideo();
		$this->strCaption = GetTableCaption(GoodFieldName($this->tName));
		
		$this->tableType = $this->pSet->getTableType();
		$this->isAddWebRep = GetGlobalData("isAddWebRep",false);
		//	get details keys by master table
		$this->detailKeysByM = $this->getDetailKeysByMasterTable();
		$this->isDynamicPerm = GetGlobalData("isDynamicPerm",false);
		$this->shortTableName = $this->pSet->getShortTableName();

		$this->isResizeColumns = $this->pSet->isResizeColumns();
		$this->isUseAjaxSuggest = $this->pSetSearch->isUseAjaxSuggest();
		$this->detailsLinksOnList = $this->pSet->getDetailsLinksOnList();
		$this->isShowDetailTables = displayDetailsOn($this->tName,$this->pageType);
		//	get all details table for current table
		if ( $this->mode != LIST_MASTER )
			$this->allDetailsTablesArr = $this->pSet->getDetailTablesArr();

	
		//	set template file
		$this->setTemplateFile();
		
		// set layout
		
		if ($this->pageType == PAGE_REGISTER || $this->pageType == PAGE_CHANGEPASS)
			$this->pageLayout = GetPageLayout('', $this->pageType);
		else if ( !($this->pageType == PAGE_ADD && $this->mode == ADD_INLINE) && !($this->pageType == PAGE_EDIT && $this->mode == EDIT_INLINE ) ) 
			$this->pageLayout = GetPageLayout($this->shortTableName, $this->pageType);
		if($this->pageLayout)
		{
			$this->jsSettings['tableSettings'][$this->tName]['pageSkinStyle'] = array();
			$this->jsSettings['tableSettings'][$this->tName]['pageSkinStyle'][ $this->pageType ] = $this->pageLayout->style." page-".$this->pageLayout->name;
			$this->AddCSSFile( $this->pageLayout->getCSSFiles(isRTL(), isPageLayoutMobile( $this->templatefile ), $this->pdfMode != "" ) );
			foreach( $this->getArrTabs() as $tabs )
			{
				$layout = GetPageLayout( $this->shortTableName, $this->pageType, $tabs['tabId'] );
				if( $layout )
					$this->AddCSSFile( $layout->getCSSFiles(isRTL(), $this->mobileTemplateMode(), $this->pdfMode != "" ) );				
			}
		}
		
		if( $this->mobileTemplateMode() )
		{
			$this->recsPerRowList = 1;
			$this->isScrollGridBody = false;
			$this->listAjax = false;
			$this->isUseAjaxSuggest = false;
		}
		
		
		//	init jsSettings
		$this->jsSettings = array();
		$this->jsSettings["tableSettings"] = array();
		$this->jsSettings["tableSettings"][$this->tName] = array();
		$this->jsSettings["tableSettings"][$this->tName]["proxy"] = array("proxy" => "");
		$this->jsSettings["tableSettings"][$this->tName]['fieldSettings'] = array();
	
		$this->settingsMap["globalSettings"]["webRootPath"] = GetWebRootPath();
		$this->settingsMap["globalSettings"]["ext"] = "php";
		$this->settingsMap["globalSettings"]["charSet"] = $cCharset;
		$this->settingsMap["globalSettings"]["curretLang"] = mlang_getcurrentlang(); // need for Runner.getGoogleLanguage() see Issue #10990
		$this->settingsMap["globalSettings"]["debugMode"] = $this->debugJSMode;
		$this->settingsMap["globalSettings"]["googleMapsApiCode"] = $this->googleMapCfg['APIcode'];
		$this->settingsMap["globalSettings"]["shortTNames"][$this->tName] = $this->shortTableName;
	
		$globalPopupPagesLayoutNames = GetGlobalData("popupPagesLayoutNames", array());
		if( !$this->mobileTemplateMode() && count( $globalPopupPagesLayoutNames ) ) 
			$this->settingsMap["globalSettings"]["popupPagesLayoutNames"] = $globalPopupPagesLayoutNames;
		
				
		$this->settingsMap["globalSettings"]["isMobile"] = $this->mobileTemplateMode();
		$this->settingsMap["globalSettings"]["mobileDeteced"] = detectMobileDevice();
		
		// s508 must be in global settings
		$this->settingsMap['globalSettings']['s508'] = $this->is508;
		$this->settingsMap['globalSettings']['mapProvider'] = $this->mapProvider;
		$this->settingsMap["globalSettings"]["locale"] = array();
		$this->settingsMap["globalSettings"]["locale"]["dateFormat"] = $locale_info["LOCALE_IDATE"];
		$this->settingsMap["globalSettings"]["locale"]["langName"] = $locale_info["LOCALE_LANGNAME"];
		$this->settingsMap["globalSettings"]["locale"]["ctryName"] = $locale_info["LOCALE_CTRYNAME"];
		$this->settingsMap["globalSettings"]["locale"]["startWeekDay"] = $locale_info["LOCALE_IFIRSTDAYOFWEEK"];
		$this->settingsMap["globalSettings"]["locale"]["dateDelimiter"] = $locale_info["LOCALE_SDATE"];

		$this->settingsMap["globalSettings"]["locale"]["is24hoursFormat"] = $locale_info["LOCALE_ITIME"];
		$this->settingsMap["globalSettings"]["locale"]["leadingZero"] = $locale_info["LOCALE_ITLZERO"];
		$this->settingsMap["globalSettings"]["locale"]["timeDelimiter"] = $locale_info["LOCALE_STIME"];
		$this->settingsMap["globalSettings"]["locale"]["timePmLetter"] = $locale_info["LOCALE_S2359"];
		$this->settingsMap["globalSettings"]["locale"]["timeAmLetter"] = $locale_info["LOCALE_S1159"];

		$this->settingsMap["globalSettings"]["showDetailedError"] = GetGlobalData("showDetailedError", true);
		$this->settingsMap["globalSettings"]["customErrorMessage"] = GetGlobalData("customErrorMessage", "");
		
		
		$this->settingsMap["tableSettings"] = array();
		$this->settingsMap['tableSettings']['entityType'] = array("default"=> 0 , "jsName"=>"entityType" );
		$this->settingsMap['tableSettings']['hasEvents'] = array("default"=>false,"jsName"=>"hasEvents");
		$this->settingsMap["tableSettings"]["strCaption"] = array("default"=>"","jsName"=>"strCaption");
		$this->settingsMap["tableSettings"]["isUseAudio"] = array("default"=>false,"jsName"=>"isUseAudio"); //fix it
		$this->settingsMap["tableSettings"]["isUseVideo"] = array("default"=>false,"jsName"=>"isUseVideo");
		$this->settingsMap['tableSettings']['listGridLayout'] = array("default"=> gltHORIZONTAL, "jsName"=>"listGridLayout");
		$this->settingsMap["tableSettings"]["rowHighlite"] = array("default"=>false,"jsName"=>"isUseHighlite");
		$this->settingsMap["tableSettings"]["isUseToolTips"] = array("default"=>false,"jsName"=>"isUseToolTips");
		$this->settingsMap['tableSettings']['recsPerRowList'] = array("default"=>1,"jsName"=>"recsPerRowList");
		$this->settingsMap["tableSettings"]["showAddInPopup"] = array("default"=>false, "jsName"=>"showAddInPopup");
		$this->settingsMap["tableSettings"]["showEditInPopup"] = array("default"=>false,"jsName"=>"showEditInPopup");
		$this->settingsMap["tableSettings"]["showViewInPopup"] = array("default"=>false,"jsName"=>"showViewInPopup");
		$this->settingsMap["tableSettings"]["updateSelected"] = array("default"=>false,"jsName"=>"updateSelected");
		$this->settingsMap["tableSettings"]["isResizeColumns"] = array("default"=>false,"jsName"=>"isUseResize");
		$this->settingsMap["tableSettings"]["detailsLinksOnList"] = array("default"=>DL_SINGLE,"jsName"=>"detailsLinksOnList");
		$this->settingsMap['tableSettings']['isUsebuttonHandlers'] = array("default"=>false,"jsName"=>"isUseButtons");
		
		//if the Search panel added to the non table based page ajax suggests should be configured according to the search table's settings
		$ajaxSuggestDefault = $this->tableBasedSearchPanelAdded ? !$this->isUseAjaxSuggest : true;
		$this->settingsMap["tableSettings"]["isUseAjaxSuggest"] = array("default"=>$ajaxSuggestDefault,"jsName"=>"ajaxSuggest");
		
		
		
		$this->controlsMap["oldLayout"] = $this->isOldLayout();
		$this->controlsMap["layoutVersion"] = $this->getLayoutVersion();
		$this->controlsMap["layoutName"] = $this->getLayoutName();
		
		$this->settingsMap["fieldSettings"] = array();
		$this->settingsMap["fieldSettings"]["UseTimestamp"] = array("default"=>false,"jsName"=>"isUseTimeStamp");
		$this->settingsMap["fieldSettings"]["strName"] = array("default"=>"","jsName"=>"strName");
		$this->settingsMap["fieldSettings"]["ShowTime"] = array("default"=>false,"jsName"=>"showTime");
		$this->settingsMap["fieldSettings"]["EditFormat"] = array("default"=>"","jsName"=>"editFormat");
		$this->settingsMap["fieldSettings"]["DateEditType"] = array("default"=>EDIT_DATE_SIMPLE,"jsName"=>"dateEditType");
		$this->settingsMap["fieldSettings"]["RTEType"] = array("default"=>"","jsName"=>"RTEType");
		$this->settingsMap["fieldSettings"]["ViewFormat"] = array("default"=>"","jsName"=>"viewFormat");
		$this->settingsMap["fieldSettings"]["validateAs"] = array("default"=>null,"jsName"=>"validation");
		$this->settingsMap["fieldSettings"]["strEditMask"] = array("default"=>null,"jsName"=>"mask");
		$this->settingsMap["fieldSettings"]["LastYearFactor"] = array("default"=>10,"jsName"=>"lastYear");
		$this->settingsMap["fieldSettings"]["InitialYearFactor"] = array("default"=>100,"jsName"=>"initialYear");
		$this->settingsMap["fieldSettings"]["ShowListOfThumbnails"] = array("default"=>false,"jsName"=>"showListOfThumbnails");
		$this->settingsMap["fieldSettings"]["ImageWidth"] = array("default"=>0,"jsName"=>"imageWidth");
		$this->settingsMap["fieldSettings"]["ImageHeight"] = array("default"=>0,"jsName"=>"imageHeight");
		
		$this->jsSettings["tableSettings"][$this->tName]["strCaption"] = $this->strCaption;
		$this->jsSettings["tableSettings"][$this->tName]["pageMode"] = $this->mode;
		
		if ($this->listAjax)
			$this->jsSettings['tableSettings'][$this->tName]['pageMode'] = LIST_AJAX;
		
		if($this->lockingObj)
			$this->jsSettings['tableSettings'][$this->tName]['locking'] = true;
		
		if( $this->warnLeavingPages && ($this->pageType ==PAGE_REGISTER || $this->pageType ==PAGE_ADD || $this->pageType ==PAGE_EDIT) )
			$this->jsSettings['tableSettings'][$this->tName]['warnOnLeaving'] = true;
		
		//If current table has detail tables
		if(count($this->allDetailsTablesArr))
		{
			if($this->pageType==PAGE_LIST)
				$this->jsSettings['tableSettings'][$this->tName]['detailTables'] = array();
			
			$this->jsSettings['tableSettings'][$this->tName]['isShowDetails'] = $this->isShowDetailTables;
			
			for($i = 0; $i < count($this->allDetailsTablesArr); $i ++) 
			{
				$this->settingsMap["globalSettings"]['shortTNames'][ $this->allDetailsTablesArr[$i]['dDataSourceTable'] ] = $this->allDetailsTablesArr[$i]['dShortTable'];
				$dPermission = $this->getPermissions( $this->allDetailsTablesArr[$i]['dDataSourceTable'] );
				$this->permis[$this->allDetailsTablesArr[$i]['dDataSourceTable']] = $dPermission;

				// field names of master keys of current table for passed details table name
				$this->masterKeysByD[$i] = $this->allDetailsTablesArr[$i]['masterKeys'];		

				if(($this->pageType == PAGE_LIST) || ($this->pageType == PAGE_REPORT) || ($this->pageType == PAGE_CHART))
				{
					unset($_SESSION[$this->allDetailsTablesArr[$i]['dDataSourceTable'].'_advsearch']);
					
					$dPermission = $this->getPermissions( $this->allDetailsTablesArr[$i]['dDataSourceTable'] );
					if( $dPermission["search"] ) 
					{
						$this->jsSettings['tableSettings'][$this->tName]['detailTables'][ $this->allDetailsTablesArr[$i]['dDataSourceTable'] ] = 
							array(
								'pageType' => $this->allDetailsTablesArr[$i]['dType'],
								'dispChildCount' => $this->allDetailsTablesArr[$i]['dispChildCount'], 
								'hideChild' => $this->allDetailsTablesArr[$i]['hideChild'],
								'listShowType'=> $this->allDetailsTablesArr[$i]['previewOnList'],
								'addShowType' => $this->allDetailsTablesArr[$i]['previewOnAdd'],
								'editShowType' => $this->allDetailsTablesArr[$i]['previewOnEdit'],
								'viewShowType' => $this->allDetailsTablesArr[$i]['previewOnView'],
								'proceedLink' => $this->allDetailsTablesArr[$i]['proceedLink'],
								'label'=> GetTableCaption( GoodFieldName( $this->allDetailsTablesArr[$i]['dDataSourceTable'] ) )
							);
					}	
					
					if( $this->allDetailsTablesArr[$i]['previewOnList'] == DP_POPUP )
						$this->jsSettings['tableSettings'][$this->tName]['isUsePopUp'] = true;
						
				}
			}
			
			if( ($this->pageType==PAGE_ADD || $this->pageType==PAGE_EDIT) && $this->isShowDetailTables )
				$this->controlsMap["dControlsMap"] = array();
		}
		$this->controlsMap["video"] = array();
		$this->controlsMap['toolTips'] = array();
		$this->addLookupSettings();
		$this->addMultiUploadSettings();
		
		$this->controlsMap["searchPanelActivated"] = $this->searchPanelActivated;

		if($this->pageType != PAGE_LIST || $this->mode != LIST_DETAILS)
		{
			$this->controlsMap["controls"] = array();
			if( !($this->pageType == PAGE_ADD && $this->mode == ADD_INLINE) && !($this->pageType == PAGE_EDIT && $this->mode == EDIT_INLINE) )
			{
				$allSearchFields = $this->pSetSearch->getAllSearchFields();
				$this->controlsMap["search"] = array();
				$this->controlsMap["search"]["searchBlocks"] = array();
				$this->controlsMap["search"]["allSearchFields"] = $allSearchFields;
				$this->controlsMap["search"]["allSearchFieldsLabels"] = $this->getSearchFieldsLabels( $allSearchFields );				
				$this->controlsMap["search"]["panelSearchFields"] = $this->pSetSearch->GetPanelSearchFields();
				$this->controlsMap["search"]["googleLikeFields"] = $this->pSetSearch->getGoogleLikeFields();
				$this->controlsMap["search"]["inflexSearchPanel"] = !$this->pSetSearch->isFlexibleSearch();
				$this->controlsMap["search"]["requiredSearchFields"] = $this->pSetSearch->getSearchRequiredFields();
				$this->controlsMap["search"]["isSearchRequired"] = $this->pSetSearch->noRecordsOnFirstPage();
				$this->controlsMap["search"]["searchTableName"] = $this->searchTableName;
				$this->controlsMap["search"]["shortSearchTableName"] = $this->pSetSearch->getShortTableName();
					
				if($this->pageType!=PAGE_SEARCH)
					$this->controlsMap["search"]["submitPageType"] = $this->pageType;
				else
				{
					if(postvalue("rname")){
						$this->controlsMap["search"]["submitPageType"] = "dreport";
						$this->controlsMap["search"]["baseParams"]["rname"] = postvalue("rname");
						if($_SESSION["crossLink"])
						{
							if(substr($_SESSION["crossLink"],0,1)=="&")
								$_SESSION["crossLink"]=substr($_SESSION["crossLink"],1);
							$alink=explode("&",$_SESSION["crossLink"]);
							foreach($alink as $param)
							{
								$arrtmp=explode("=",$param);
								$this->controlsMap["search"]["baseParams"][$arrtmp[0]] = $arrtmp[1];
							}
						}
					}elseif(postvalue("cname")){
						$this->controlsMap["search"]["submitPageType"] = "dchart";
						$this->controlsMap["search"]["baseParams"]["cname"] = postvalue("cname");
					}else{
						$this->controlsMap["search"]["submitPageType"] = $this->tableType;
					}
				}
			}
		}
			
		$this->isUseToolTips = $this->isUseToolTips || $this->pSet->isUseToolTips(); 
		
		$this->googleMapCfg["APIcode"] = "";

		$this->processMasterKeyValue();
		$this->assignSearchLogger();	
	}
	
	/**
	 * get locking object
	 * @retunr Mixed
	 */
	protected function getLockingObject()
	{
		return GetLockingObject( $this->tName );
	}
	
	/**
	 * Check is dashboard element
	 */
	function isDashboardElement()
	{
		if ( $this->dashElementName == "" )
		{
			return false;
		}
		
		return true;
	}
	

	/**
	 * Init the page's functionality.
	 * The method is invoked just after the constructor has been called
	 */
	function init() 
	{
		if( $this->xt )
			$this->xt->assign("pagetitle", $this->getPageTitle( $this->pageType, $this->tName == NOT_TABLE_BASED_TNAME ? "" : GoodFieldName($this->tName) ));	
		
		//build the Search panel if the "searchpanel" brick is added to the page's layout
		$this->buildAddedSearchPanel();

			$this->initLogin();
		if( $this->pageType == PAGE_LIST && ($this->mode == LIST_AJAX || $this->mode == LIST_SIMPLE) || $this->pageType == PAGE_DASHBOARD
			|| ( $this->pageType == PAGE_REPORT && $this->mode === REPORT_SIMPLE || $this->pageType == PAGE_CHART && $this->mode == CHART_SIMPLE ) )
		{
			$this->buildFilterPanel();
		}
	}	
	
	/**
	 * Set the 'connection' property if the table is page based #9875
	 */
	protected function setTableConnection()
	{
		global $cman;
		if( $this->tName != NOT_TABLE_BASED_TNAME )
			$this->connection = $cman->byTable( $this->tName );			
	}

	/**
	 * Set the 'cipherer' property
	 */
	protected function assignCipherer()
	{
		$this->cipherer = new RunnerCipherer($this->tName, $this->pSet);
	}
	
	/**
	 * Init login form
	 */
	function initLogin()
	{
		$this->settingsMap["globalSettings"]["loginFormType"] = GetGlobalData("nLoginForm", 0);
		if( $this->mobileTemplateMode() )
			$this->settingsMap["globalSettings"]["loginFormType"] = 0;
		
		$this->xt->assign("security_block", true);
		// The user might rewrite $_SESSION["UserName"] value with HTML code in an event, so no encoding will be performed while printing this value.
		$this->xt->assign("username", $_SESSION["UserName"]);
		$this->xt->assign("logoutlink_attrs", 'id="logoutButton'.$this->id.'"');
		
		$loggedAsGuest = isLoggedAsGuest();
		$this->xt->assign("loggedas_message", !$loggedAsGuest); 
		$this->xt->assign("guestloginbutton", $loggedAsGuest);
		$this->xt->assign("logoutbutton", isSingleSign() && !$loggedAsGuest);
		
		if($this->mobileTemplateMode())
		{
			$this->xt->assign("guestloginlink_attrs", 'id="loginButton'.$this->id.'"');
			return;
		}
		
		$this->xt->assign("guestloginlink_attrs", 'id="loginButton'.$this->id.'"');
			if( !$this->mobileTemplateMode() ) 
		{
			$this->xt->assign("embeded_log_fields", true);
			$this->xt->assign("embeded_log_ctrls", true);
			
			$this->xt->assign("username_attrs", 'id="username" value="'.runner_htmlspecialchars(refine(@$_COOKIE["username"])).'" placeholder="login"');
			$this->xt->assign("password_attrs", 'id="password" value="'.runner_htmlspecialchars(refine(@$_COOKIE["password"])).'" placeholder="password"');
		
			$rememberbox_attrs = 'id="remember_password" name="remember_password" value="1"';
			if( @$_COOKIE["username"] || @$_COOKIE["password"] )
				$rememberbox_attrs.= " checked";
			
			$this->xt->assign("rememberbox_attrs", $rememberbox_attrs);	
		}
		else
		{
			$this->xt->assign("embeded_log_fields", false);
			$this->xt->assign("embeded_log_ctrls", false);
		}
	}
	
	/**
	 * Makes assigns for admin
	 */
	function assignAdmin() 
	{
		if($this->isAdminTable()) 
		{
			$this->xt->assign("exitadminarea_link", true);
			$this->xt->assign("exitaalink_attrs", "id=\"exitAdminArea".$this->id."\"");
		}
		
		if($this->isDynamicPerm && IsAdmin()) 
		{
			$this->xt->assign("adminarea_link", true);
			$this->xt->assign("adminarealink_attrs", "id=\"adminArea".$this->id."\"");
		}
	}
	
	protected function assignSessionPrefix()
	{
		$this->sessionPrefix = $this->tName;
	}
	
	/**
	 * Check if the 'Search saving' is enabled basing on
	 * the project settings and the current page's type
	 * @return Boolean
	 */
	public function isSearchSavingEnabled()
	{
		$searchSavingEnabled = $this->pSet->isSearchSavingEnabled();
		
		if( !$searchSavingEnabled )
			return false;
			
		return $this->pageType == PAGE_LIST && ($this->mode == LIST_AJAX || $this->mode == LIST_SIMPLE) 
			   || $this->pageType == PAGE_REPORT && $this->mode == REPORT_SIMPLE
			   || $this->pageType == PAGE_CHART && $this->mode == CHART_SIMPLE; 
	}

	/**
	 * Assign the page's 'searchLogger' object 
	 * if the 'Search saving' is enabled
	 */
	protected function assignSearchLogger()
	{		
		if( !$this->searchSavingEnabled || !$this->searchClauseObj )
			return;
		
		include_once getabspath("classes/searchParamsLogger.php");	
		$this->searchLogger = new searchParamsLogger( $this->tName );
		
		$this->jsSettings['tableSettings'][$this->tName]['searchSaving'] = true;
		$savedSearches = $this->searchLogger->getSavedSeachesParams();
		if( count($savedSearches) )
		{
			$this->pageHasSavedSearches = true;
			$this->controlsMap["search"]["savedSearches"] = $savedSearches;
			$this->controlsMap["search"]["savedSearchIsRun"] = $this->searchClauseObj->savedSearchIsRun;
		}
	
		$this->assignSearchSavingButtons();
	}

	/**
	 * Assign search saving buttons block
	 */
	protected function assignSearchSavingButtons()
	{
		$this->xt->assign('searchsaving_block', true);
		
		if( $this->searchClauseObj->isSearchFunctionalityActivated() && !$this->searchClauseObj->savedSearchIsRun ) 
			$this->xt->assign("saveSeachButton", true);

		$this->xt->assign("savedSeachesButton", true);
		
		if( !$this->pageHasSavedSearches )
			$this->xt->assign('saveSearchButtonAttrs', $this->dispNoneStyle); 
	}	
	
	/**
	 * The searchClauseObj method wrapper
	 * @return Array
	 */
	public function getSearchParamsForSaving()
	{
		return $this->searchClauseObj->getSearchParamsForSaving();
	}
	
	/**
	 * Get the search fields labels array
	 * @param Array
	 * @return Array
	 */
	protected function getSearchFieldsLabels($searchFields)
	{
		$sFieldLabels = array();
		foreach($searchFields as $sField)
		{
			$sFieldLabels[ $sField ] = $this->pSetSearch->label($sField);
		}
		return $sFieldLabels;
	}
	
	/**
	 * Add css rules
	 * Wrapper function
	 * 
	 * @param &Array data
	 * @param &Array row
	 * @param &Array record
	 */
	function spreadRowStyles(&$data, &$row, &$record)
	{
		$this->spreadRowStyle($data, $row, $record);
		$this->spreadRowCssStyle($data, $row, $record);
	}
	
	/**
	 * Add css rules to the record fields' "_style" elements if the row's "rowstyle" attribute is set
	 * 
	 * @param &Array data
	 * @param &Array row
	 * @param &Array record
	 */
	protected function spreadRowStyle(&$data, &$row, &$record)
	{
		if(!array_key_exists("rowstyle",$row))
			return;
		$style = extractStyle($row["rowstyle"]);
		if($style=="")
			return;
		foreach(array_keys($data) as $field)
		{
			$record[GoodFieldName($field)."_style"] = injectStyle($record[GoodFieldName($field)."_style"], $style);
		}
	}
	
	/**
	 * Add css rules to the record fields' "_css" elements if the row's "style" attribute is set
	 * 
	 * @param &Array data
	 * @param &Array row
	 * @param &Array record	 
	 */	
	protected function spreadRowCssStyle(&$data, &$row, &$record)
	{
		if( !isset($row["style"]) ) 
			return;	
			
		$style = $row["style"];
		if( trim($style) == "" )
		{
			return;
		}
		foreach(array_keys($data) as $field)
		{
			$record[GoodFieldName($field)."_css"] = $style."; ".$record[GoodFieldName($field)."_css"];
		}			
	}
	
	/**
	 * Set the custom css rules for the current record in process adding 
	 * corresponding css rules to the "row_css_rules" string property 
	 * 
	 * @param string $rowCssRule
	 */
	protected function setRowCssRule($rowCssRule)
	{
		$selectors = ' td[data-record-id="'.$this->recId.'"]';
		if( $this->listGridLayout == gltVERTICAL ) 	
			$selectors.= ' td'; 
			
		$this->row_css_rules.= $selectors.'{'.$this->getCustomCSSRule( $rowCssRule ).'}';
	}
	
	/**
	 * Form a cell's custom css rule string	 	
	 * @param String unprocessedCss
	 * @return String
	 */	
	protected function getCustomCSSRule($unprocessedCss)
	{
		$cssRules = array();
		$rules = explode(";", $unprocessedCss);
		
		for($i = 0; $i < count($rules); $i++) 
		{
			if(trim($rules[$i]) != "") 
				$cssRules[] = $rules[$i] . " !important" ;
		}
		
		return implode(";", $cssRules);
	}
	
	/**
	 * Check whether such a css rule exists. If It does get the existing class's name.
	 * If It doesn't form a new class name, add a rule to the "fieldCssRules" array and 
	 * add a prepared css rule to the "cell_css_rules" string property
	 *
	 * @param String fieldCssRule
	 * @param String fieldName
	 * @return String
	 */	
	protected function setFieldCssRule($fieldCssRule, $fieldName)
	{
		if( isset($this->fieldCssRules[ $fieldCssRule ]) )
			return $this->fieldCssRules[ $fieldCssRule ];
		
		$className = 'rnr-style'.$this->recId.'-'.$fieldName;
		$this->fieldCssRules[ $fieldCssRule ] = $className;
		
		if( $this->listGridLayout == gltVERTICAL )	
			$selectors = ' td[data-record-id] td.'.$className.', .'.$className;
		else
			$selectors = ' td[data-record-id].'.$className.', .'.$className;
			
		$this->cell_css_rules.= $selectors.'{'.$this->getCustomCSSRule( $fieldCssRule ).'}';

		return $className;
	}
	
	/**
	 * Add a cells' custom style block at the beginning of grid_block
	 */	
	function addCustomCss() 
	{
		if( !$this->cell_css_rules && !$this->row_css_rules && !$this->mobile_css_rules )
			return;
		
		$gbl = $this->xt->getVar("grid_block");
		if( $gbl ) 
		{
			$rules = $this->row_css_rules.$this->cell_css_rules."\n".$this->mobile_css_rules;
			
			if( !is_array($gbl) ) 
				$gbl = array("begin" => '<style class="rnr-cells-css" type="text/css"> '.$rules.' </style>');
			else 
				$gbl["begin"] = $gbl["begin"]. '<style class="rnr-cells-css" type="text/css"> '.$rules.' </style>';
			
			$this->xt->assign("grid_block", $gbl);
		}
	}
	
	/**
	 * Set row css rules
	 * 
	 * @param &Array $record
	 */
	function setRowCssRules(&$record)
	{
		if( $record["css"] )
			$this->setRowCssRule( $record["css"] );
		
		if( $record["hovercss"] )
			$this->setRowHoverCssRule( $record["hovercss"] );
	}
	
	/**
	 * Set row class names
	 * 
	 * @param &Array $record
	 * @param string $field
	 */
	function setRowClassNames(&$record, $field)
	{
		$gFieldName = GoodFieldName( $field );
		$record[ $gFieldName."_class" ] .= $this->fieldClass( $field );
				
		if( $record[ $gFieldName."_css" ] ) 
		{
			$className = $this->setFieldCssRule( $record[ $gFieldName."_css" ], $gFieldName );
			$record[ $gFieldName."_class" ] .= " ".$className;
		}

		if( $record[ $gFieldName."_hovercss" ] ) 
		{
			$classNameHover = $this->setRowHoverCssRule( $record[ $gFieldName."_hovercss" ], $gFieldName );
			if( $classNameHover !== $className)
				$record[ $gFieldName."_class" ] .= " ".$classNameHover;
		}
	}
	
	/**
	 * Get the page layout's name
	 * @return string
	 */
	function getLayoutName() 
	{
		if($this->pageLayout)
			return $this->pageLayout->style;
		else
			return "";
	}

	function getLayoutVersion() 
	{
		if($this->pageLayout)
			return $this->pageLayout->version;
		else
			return 2;	//	modern, non-bootstrap layout
	}

	
	/**
	 * addMultiUploadSettings
	 * Adding js-settings for FileField
	 * @intellisense
	 */
	function addMultiUploadSettings()
	{
		$this->settingsMap["fieldSettings"]["autoUpload"] = array("default"=>false, "jsName"=>"autoUpload");
		$this->settingsMap["fieldSettings"]["acceptFileTypes"] = array("default"=>".+$", "jsName"=>"acceptFileTypes");
		$this->settingsMap["fieldSettings"]["CompatibilityMode"] = array("default"=>false, "jsName"=>"compatibilityMode");
		$this->settingsMap["fieldSettings"]["maxFileSize"] = array("default"=>null, "jsName"=>"maxFileSize");
		$this->settingsMap["fieldSettings"]["maxTotalFilesSize"] = array("default"=>null, "jsName"=>"maxTotalFilesSize");
		$this->settingsMap["fieldSettings"]["maxNumberOfFiles"] = array("default"=>1, "jsName"=>"maxNumberOfFiles");
	}

	/**
	 * Process master key value. 
	 * Copy master keys values to SESSION
	 */
	function processMasterKeyValue() 
	{
		if(count($this->masterKeysReq))
		{
			//	copy keys to session
			for($i = 1; $i <= count($this->masterKeysReq); $i++)
			{
				$_SESSION[$this->sessionPrefix."_masterkey".$i] = $this->masterKeysReq[$i];
			}
			
			if( isset($_SESSION[$this->sessionPrefix."_masterkey".$i]) )
				unset($_SESSION[$this->sessionPrefix."_masterkey".$i]);
		}
		elseif( count($this->detailKeysByM) )
		{
			for($i = 0; $i < count($this->detailKeysByM); $i++)
			{
				if( isset($_SESSION[$this->sessionPrefix."_masterkey".($i + 1)]) )
					$this->masterKeysReq[$i + 1] = $_SESSION[$this->sessionPrefix."_masterkey".($i + 1)];
			}	
		}
		
		if( !in_array( $this->pageType, array( PAGE_LIST, PAGE_REPORT, PAGE_CHART ) ) 
			|| !$this->masterTable || $this->getLayoutVersion() != BOOTSTRAP_LAYOUT )
		{
			return;
		}
		
		$masterTableData = $this->getMasterTableInfoByPSet( $this->tName, $this->masterTable, $this->pSet );
		if( !$masterTableData )
			return;
		
		$mPSet = new ProjectSettings( $this->masterTable, $masterTableData["type"] );
		foreach( $mPSet->getDetailTablesArr() as $dt )
		{
			if( $dt["dDataSourceTable"] == $this->tName && $dt["dType"] == $this->pageType )
				continue;

			$masterRecordData = $this->getMasterRecord();	
				
			foreach( $dt["masterKeys"] as $idx => $dk )
			{
				$_SESSION[ $dt["dDataSourceTable"]."_masterkey".($idx + 1) ] = $masterRecordData[ $dk ];
			}				
		}		
	}
	
	/**
	 * Display the 'Back to Master' link and master table info
	 */
	public function displayMasterTableInfo() 
	{
		$masterTableData = $this->getMasterTableInfo();
		if( !$masterTableData ) 
			return;


		$this->xt->assign("mastertable_block", true);
		$backButtonHref = GetTableLink($masterTableData['mShortTable'], $masterTableData["type"], "a=return"); 
		$this->xt->assign("backtomasterlink_attrs", "href=\"".$backButtonHref."\"");
		$this->xt->assign("backtomasterlink_caption", GetTableCaption( GoodFieldName($masterTableData['mDataSourceTable']) ));		


		// process "Display master data on details pages" if report, chart then check "list", if rprint then check "print"
		$checkDisplay = $this->pageType;
		if ( $this->pageType == PAGE_REPORT || $this->pageType == PAGE_CHART )
			$checkDisplay = PAGE_LIST;
		else if ( $this->pageType == PAGE_RPRINT )
			$checkDisplay = PAGE_PRINT;

		if( !$masterTableData["dispMasterInfo"][ $checkDisplay ] )
			return;
			
		if( ($this->pageType == PAGE_PRINT || $this->pageType == PAGE_RPRINT) && $masterTableData["type"] == PAGE_CHART ) 
		{
			return;
		}
		
		$this->jsSettings["tableSettings"][$this->tName]["hasMasterList"] = true;
		
		$detailKeys = $masterTableData['detailKeys'];
		$masterKeys = array();
		for($j = 0; $j < count($detailKeys); $j ++)
		{
			$masterKeys[]= @$_SESSION[$this->sessionPrefix."_masterkey".($j + 1)];
		}
		
		$this->addMasterInfoJSAndCSS( $masterTableData["type"], $masterTableData["mDataSourceTable"], $masterTableData["mShortTable"] );
		
		$master = array();
		$mrData = $this->getListMasterRecordData( $masterTableData['mDataSourceTable'], $masterKeys );
		$params = array("detailtable" => $this->tName, "keys" => $masterKeys, "recId" => $this->recId, "masterRecordData" => $mrData);
		
		$keys = $params["keys"];
		$detailtable = $params["detailtable"];

		$xt = new Xtempl();
		$xt->eventsObject = getEventObject($tName);

		$mParams  = array();
		$mParams["xt"] = &$xt;
		$mParams["flyId"] = $params["recId"];
		$mParams["masterRecordData"] = $mrData;
		$mParams["masterPageType"] = $masterTableData["type"];

		if( $this->pageType == PAGE_PRINT || $this->pageType == PAGE_RPRINT )
		{
			if ( $mParams["masterPageType"] == PAGE_REPORT )
			{
				$mParams["pageType"] = PAGE_RPRINT;
			}
			else {
				$mParams["pageType"] = PAGE_PRINT;
			}
			$mParams["tName"] = $this->masterTable;
			$mParams["mode"] = PRINT_MASTER;
			
			include_once(getabspath('classes/printpage.php'));
			include_once(getabspath('classes/printpage_master.php'));
			$masterPage = new PrintPage_Master( $mParams );
		}
		else
		{
			if( $mParams["masterPageType"] == PAGE_CHART )
			{	
				$mParams["tName"] = $this->masterTable;
				$mParams["pageType"] = PAGE_CHART;
				$mParams["pageMode"] = 	CHART_SIMPLE;
			
				include_once(getabspath('classes/chartpage.php'));
				include_once(getabspath('classes/chartpage_master.php'));
				$masterPage = new ChartPage_Master( $mParams );
			}
			else {
				$mParams["pageType"] = $mParams["masterPageType"];
				$mParams["mode"] = LIST_MASTER;
				
				include_once(getabspath('classes/listpage.php'));
				include_once(getabspath('classes/listpage_simple.php'));
				include_once(getabspath('classes/listpage_master.php'));
				$masterPage = ListPage::createListPage($this->masterTable, $mParams);
			}
		}
		$masterPage->init();
		$masterPage->preparePage();
		
		$this->xt->assign("master_heading", $masterPage->getMasterHeading() );
		
		$this->xt->assign_method("showmasterfile", $masterPage, "showMaster",array());
		
		$this->addMasterMapsSettings( $masterTableData['mDataSourceTable'], $this->recId + 2, $mrData );
		
		$this->genId();
	
	}
	
	/**
	 * Get master record data for display on master table info
	 * @param String mTName
	 * @param Array masterKeys
	 */
	public function getListMasterRecordData( $mTName, $masterKeys )
	{
		global $cman;
		$detailtable = $this->tName;
		$connection = $cman->byTable( $mTName );
		$mPSet = new ProjectSettings( $mTName, PAGE_LIST );
		$mCiph =  new RunnerCipherer( $mTName );
		
		$whereParts = array();
		foreach($mPSet->getDetailTablesArr() as $dt)
		{
			if( $dt["dDataSourceTable"] == $detailtable )
			{
				foreach( $dt["masterKeys"] as $i=>$mk )
				{
					$whereParts[] = RunnerPage::_getFieldSQLDecrypt($mk, $connection , $mPSet , $mCiph) . "=" . $mCiph->MakeDBValue($mk, $masterKeys[ $i ], "", true);;
				}
				break;
			}
		}
		$where = implode( " and ", $whereParts );
		if( !$where )
			return array();
		
		$strWhere = SecuritySQL("Search", $mTName);
		if( strlen($strWhere) )
			$where.= " and ".$strWhere;
		
		$masterQuery = $mPSet->getSQLQuery();
		$where = " where ".whereAdd( $masterQuery->WhereToSql(), $where )." ";
		
		$sql = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$where.$masterQuery->TailToSql();
		LogInfo($sql);
		
		return $mCiph->DecryptFetchedArray( $connection->query( $sql )->fetchAssoc() );			
	}
	
	/**
	 * Add master maps settings
	 * @param String mTName		master table name
	 * @param Number recId		master record id
	 * @param &Array data		master record data
	 */
	public function addMasterMapsSettings( $mTName, $recId, &$data ) 
	{
		$mPSet = new ProjectSettings( $mTName, PAGE_LIST );
		
		if( !count($data) )	
			return;
		
		$haveMap = false;
		foreach( $mPSet->getMasterListFields() as $fName )
		{
			$fieldMapData = $mPSet->getMapData( $fName );
			if( !count($fieldMapData) )
				continue;
			
			$mapData = array();
			$mapData['fName'] = $fName;
			$mapData['zoom'] = isset( $fieldMapData['zoom'] ) ? $fieldMapData['zoom'] : '';
			$mapData['type'] = 'FIELD_MAP';
			$mapData['mapFieldValue'] = $data[ $fName ];
			
			$address = $data[ $fieldMapData['address'] ] ? $data[ $fieldMapData['address'] ] : "";
			$lat =  str_replace(",", ".", ( $data[ $fieldMapData['lat'] ] ? $data[ $fieldMapData['lat'] ] : ''));
			$lng =  str_replace(",", ".", ($data[ $fieldMapData['lng'] ] ? $data[ $fieldMapData['lng'] ] : ''));
			$desc = $data[ $fieldMapData['desc'] ] ? $data[ $fieldMapData['desc'] ] : $address;
			
			$mapData['markers'][] = array(
				'address' => $address, 
				'lat' => $lat, 
				'lng' => $lng, 
				'link' => $viewLink, 
				'desc' => $desc, 
				'keys' => $keys, 
				'mapIcon' => $mPSet->getMapIcon($fName, $data)
			); 
			
			$mapId = 'littleMap_'.GoodFieldName( $fName ).'_'.$recId;
			$this->googleMapCfg['mapsData'][ $mapId ] = $mapData;
			$this->googleMapCfg['fieldMapsIds'][] = $mapId;
			
			$haveMap = true;
		}
		
		if( $haveMap )
		{
			$this->googleMapCfg['isUseGoogleMap'] = true;
			$this->googleMapCfg['isUseFieldsMaps'] = true;
		}
	}	
	
	/**
	 * Add to the page master info page's extra js/css files
	 * @param String mPageType			the master page type
	 * @param String mTableName			the master page data source table name
	 * @param String mShortTableName	the master page short table name
	 */
	protected function addMasterInfoJSAndCSS( $mPageType, $mTableName, $mShortTableName )
	{
		if( $mPageType == PAGE_CHART )
			$mastertype = "masterchart";
		elseif( $mPageType == PAGE_REPORT )
			$mastertype = "masterreport";
		else // $mPageType == PAGE_LIST
			$mastertype = "masterlist";
		
		if( $mPageType != PAGE_CHART ) 
		{
			include_once getabspath('classes/controls/ViewControlsContainer.php');
			$viewControls = new ViewControlsContainer(new ProjectSettings($mTableName, $mPageType), $mPageType);	
			
			$viewControls->addControlsJSAndCSS();
			$this->includes_js = array_merge($this->includes_js, $viewControls->includes_js);
			$this->includes_jsreq = array_merge($this->includes_jsreq, $viewControls->includes_jsreq);
			$this->includes_css = array_merge($this->includes_css, $viewControls->includes_css);
			
			$this->viewControlsMap['mViewControlsMap'] = $viewControls->viewControlsMap;			
		}
		
		$layout = GetPageLayout( $mShortTableName, $mastertype );
		if( $layout )
		{
			$layoutMobile = isPageLayoutMobile( GetTemplateName($mShortTableName, $mastertype) );
			$this->AddCSSFile( $layout->getCSSFiles(isRTL(), $layoutMobile, $this->pdfMode != "" ) );		
		}
	}
	
	/**
	 * Get master record
	 * User API function
	 *
	 * @return Array
	 * @intellisense
	 */
	function getMasterRecord()
	{
		if( $this->masterRecordData )
			return $this->masterRecordData;
		
		if( !$this->masterTable )
			return null;
	
	
		global $detailsTablesData, $masterTablesData, $cman;	
		$settings = new ProjectSettings($this->masterTable, PAGE_LIST);
		$masterConnection = $cman->byTable( $this->masterTable );
		
		$where = "";
		$masterTablesInfoArr = $this->pSet->getMasterTablesArr($this->tName);
		for($i=0; $i < count($masterTablesInfoArr); $i++) 
		{
			if($this->masterTable == $masterTablesInfoArr[$i]['mDataSourceTable']) 
			{
				$masterKeys = $this->getActiveMasterKeys();
				$cipherer = new RunnerCipherer($this->masterTable);
				for($j=0; $j < count($masterTablesInfoArr[$i]['masterKeys']); $j++)
				{
					if($j)
						$where.= " and ";
					$mKey = $masterTablesInfoArr[$i]['masterKeys'][$j];
					$where.= RunnerPage::_getFieldSQL($mKey, $masterConnection, $settings)."=".$cipherer->MakeDBValue($mKey, $masterKeys[$j], "", true);
				}
			}
		}
		
		if(!$where)
			return null;
		
		$masterQuery = $settings->getSQLQuery();
		
		$str = SecuritySQL("Search", $this->masterTable);
		if(strlen($str))
			$where.= " and ".$str;
		
		$strWhere = whereAdd($masterQuery->WhereToSql(),$where);
		if(strlen($strWhere))
			$strWhere = " where ".$strWhere." ";
		$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
		LogInfo($strSQL);
		
		$this->masterRecordData = $cipherer->DecryptFetchedArray( $masterConnection->query( $strSQL )->fetchAssoc() );
		return $this->masterRecordData;
	}
	
	/**
	 * Returns the list of master key values read from either request or session
	 * @return Array
	 */ 
	function getActiveMasterKeys() 
	{
		$i = 1;
		$ret = array();
		while(true)
		{
			if( isset( $this->masterKeysReq[$i] ) )
				$ret[] = $this->masterKeysReq[$i];
			else if( isset( $_SESSION[$this->sessionPrefix."_masterkey".$i] ) )
				$ret[] = $_SESSION[$this->sessionPrefix."_masterkey".$i];
			else
				break;
			++$i;
		}
		return $ret;
	}
	
	/**
	 * Set Proxy Value 
	 * Fill array serverData for using in js OnLoad event
	 *
	 * User function
	 * Using only in events by users
	 *
	 * @param{string} name of data
	 * @param{string} value of data
	 * @intellisense
	 */
	function setProxyValue($name, $value)
	{
		if(!$name)
			return;
		$this->jsSettings["tableSettings"][$this->tName]["proxy"][$name] = $value;
	}
	
	/**
	 * Get Proxy Value 
	 *
	 * User function
	 * Using only in events by users
	 *
	 * @param{string} name of data
	 * @return{}
	 * @intellisense
	 */
	function getProxyValue($name)
	{
		if(array_key_exists($name, $this->jsSettings['tableSettings'][$this->tName]['proxy']))
			return $this->jsSettings["tableSettings"][$this->tName]["proxy"][$name];
		return null;	
	}
	
	/**
	 * Set template file if it empty
	 * @intellisense
	 */
	function setTemplateFile()
	{
		if(!$this->templatefile)
		{
			$this->templatefile	= GetTemplateName($this->shortTableName, $this->pageType);
		}
		$this->xt->set_template($this->templatefile);
	}
	/**
	 * Get menu nodes if use menu on page
	 * @intellisense
	 */	
	function &getMenuNodes($name = 'main')
	{
		if(!count($this->menuNodes[$name]))
		{
			global $menuNodesObject;
			$menuNodesObject  = &$this;
			require_once(getabspath("include/menunodes_".$name.".php"));
			
			if($name == 'main')
			{
				getMenuNodes_main($menuNodesObject);
				return $this->menuNodes[$name];
			}
				if($name == 'adminarea')
			{
				getMenuNodes_adminarea($menuNodesObject);
				return $this->menuNodes[$name];
			}
			
			if($name == 'welcome_page')
			{
				getMenuNodes_welcome_page($menuNodesObject);
				return $this->menuNodes[$name];
			}
			
		}
		return $this->menuNodes[$name];
	}
	/**
	 * Check is use menu on page
	 * @intellisense
	 */
	function menuAppearInLayout()
	{
		if( !$this->pageLayout )
			return false;
		$menuBricks = array('vmenu', 'vmenu_mobile', 'hmenu', 'bsmenu', 'quickjump');
		foreach( $menuBricks as $b )
		{
			if( $this->pageLayout->isBrickSet( $b ) )
				return true;
		}
		return false;
	}
	
	/**
	 * Check is need to show menu
	 * @intellisense
	 */
	function isShowMenu()
	{
		global $menuAssignments;
		
		if( !$this->menuAppearInLayout() && $this->pageType != PAGE_MENU && $this->pageType != PAGE_ADD  && $this->pageType != PAGE_VIEW && $this->pageType != PAGE_EDIT )
			return false;
			
		$allowedMenuItems = $this->getAllowedMenuItems();
		if( $allowedMenuItems > 1 )
			return true;
		
		foreach($menuAssignments as $menuSelector)
		{
			$menuName = $menuSelector["name"];	
			
			if( $menuSelector["page"] != $templateName && $menuName == "main" )
				continue;
						
			$allowedMenuItems = $this->getAllowedMenuItems( $menuName );
				
			if( $allowedMenuItems > 0 )
				return true;
		}
		
		return false;	
	}
	
	/**
	 * @param String menuName (optional)
	 * @return Number
	 */
	function getAllowedMenuItems( $menuName = "main" )
	{
		$menuNodes = $this->getMenuNodes( $menuName );
		
		$allowedMenuItems = 0;
		for($i = 0; $i < count($menuNodes); $i++)
		{
			if( $menuNodes[$i]["linkType"] == "Internal" )
			{
				if( $this->isUserHaveTablePerm($menuNodes[$i]["table"], $menuNodes[$i]["pageType"]) )
					$allowedMenuItems++;
			}
			elseif( $menuNodes[$i]["linkType"] != "None" || $menuNodes[$i]["type"] != "Group" )
				$allowedMenuItems++;
		}
		
		if( $this->isDynamicPerm && IsAdmin() && $this->pageType == PAGE_MENU ) 
			$allowedMenuItems++;
			
		if( $this->isAddWebRep ) 
			$allowedMenuItems++;

		return $allowedMenuItems;	
	}
	
	/**
	 * Check if user have permission for link
	 * @param {string} table name
	 * @param {string} page type
	 * @return {boolean}
	 * @intellisense
	 */
	function isUserHaveTablePerm($tName, $pageType)
	{
		if($pageType == "WebReports")
			return true;
		if(!strlen($tName))
			return false;
		$type = $this->getPermisType($pageType);
		$strPerm = GetUserPermissions($tName);
		
		if( !strlen($type) ) //temporary #9784 fix
			return false;
		
		if(strpos($strPerm, $type) !== false)
			return true;

		return false;
	}
	
	/**
	 * Get type of permission
	 * @param String pageType
	 * @return String
	 * @intellisense
	 */
	function getPermisType($pageType)
	{
		$type = '';
		if ($pageType == "List" || $pageType == "View" || $pageType == "Search" || $pageType == "Report" || $pageType == "Chart" || $pageType == "Dashboard")
			$type = "S";
		elseif ($pageType == "Add")
			$type = "A";
		elseif ($pageType == "Edit")
			$type = "E";
		elseif ($pageType == "Print" || $pageType == "Export")
			$type = "P";
		elseif ($pageType == "Import")
			$type = "I";
		return $type;
	}
	
	/**
	 * Get redirect location for menu page
	 * @return {string}
	 * @intellisense
	 */
	function getRedirectForMenuPage() 
	{
		if($this->isShowMenu())
			return '';
		
		$redirect = '';
		$menuNodes = $this->getMenuNodes();
		for($i=0;$i<count($menuNodes);$i++)
		{
			if($menuNodes[$i]["linkType"] == "Internal")
			{
				if($this->isUserHaveTablePerm($menuNodes[$i]["table"], $menuNodes[$i]["pageType"]))
				{	
					$type = $this->getPermisType($menuNodes[$i]['pageType']);
					if($type == "A")
						$redirect = "add";
					if($type == "E")
						$redirect = "edit";						
					elseif($menuNodes[$i]["pageType"] == "List" && $type == "S")
						$redirect = "list";
					elseif($menuNodes[$i]["pageType"] == "Report" && $type == "S")
						$redirect = "report";
					elseif($menuNodes[$i]["pageType"] == "Chart" && $type == "S")
						$redirect = "chart";
					elseif($menuNodes[$i]["pageType"] == "View" && $type == "S")
						$redirect = "view";						
					elseif($menuNodes[$i]["pageType"] == "Dashboard" && $type == "S")
						$redirect = "dashboard";
					$redirect = GetTableLink(GetTableURL($menuNodes[$i]["table"]), $redirect);	
				}	
			}
		}
		if($this->isDynamicPerm && IsAdmin()) 
			$redirect = GetTableLink("admin_rights", "list");
			
		if($this->isAddWebRep) 
			$redirect = GetTableLink("webreport");
		
		return $redirect;
	}

	/**
	 * Clear session kyes
	 * @intellisense
	 */
	function clearSessionKeys() 
	{
		if( $this->pageType == PAGE_LIST && !count($_POST) && (!count($_GET) || count($_GET) == 1 && isset($_GET["menuItemId"]) || $this->masterTable && $this->mode != LIST_DETAILS ) 
			|| ($this->pageType == PAGE_CHART || $this->pageType == PAGE_REPORT || $this->pageType == PAGE_DASHBOARD) && !count($_POST) && !count($_GET)
			|| @$_GET["editType"] == ADD_ONTHEFLY )
		{
			$this->unsetAllPageSessionKeys();
		}
		
		if( $this->pageType == PAGE_LIST && ( $this->mode === LIST_DETAILS || $this->mode === LIST_LOOKUP ) 
			|| ( $this->pageType == PAGE_REPORT && $this->mode != REPORT_SIMPLE || $this->pageType == PAGE_CHART && $this->mode != CHART_SIMPLE ) )
		{
			unset( $_SESSION[$this->sessionPrefix."_filters"] );
		}
	}

	/**
	 * Unset all session keys started with the page's session prefix
	 * @param String sessionPrefix
	 */
	protected function unsetAllPageSessionKeys( $sessionPrefix = "" )
	{
		if( !$sessionPrefix )
			$sessionPrefix = $this->sessionPrefix;
		
		$prefixLength =	strlen($sessionPrefix);	
			
		$sess_unset = array();
		
		foreach($_SESSION as $key => $value)
		{
			if( substr($key, 0, $prefixLength + 1) == $sessionPrefix."_" && strpos(substr($key, $prefixLength + 1), "_") === false )
				$sess_unset[] = $key;
		}
		
		foreach($sess_unset as $key)
		{
			unset( $_SESSION[ $key ] );
		}			
	}
	
	/**
	 * Set session variables
	 * @intellisense
	 */	
	function setSessionVariables() 
	{
		//clear session keys
		$this->clearSessionKeys();
		
		// Process master table value
		if( $this->masterTable != "" )
			$_SESSION[$this->sessionPrefix."_mastertable"] = $this->masterTable;
		else
			$this->masterTable = $_SESSION[$this->sessionPrefix."_mastertable"];
			
		// SearchClause class stuff
		if( $this->needSearchClauseObj && !$this->searchClauseObj )
			$this->searchClauseObj = $this->getSearchObject(); 
		
		if( $this->searchSavingEnabled && $this->searchClauseObj )
			$this->searchClauseObj->storeSearchParamsForLogging();
		
		//set session page size
		if(@$_REQUEST["pagesize"]) 
		{
			$_SESSION[$this->sessionPrefix."_pagesize"] = @$_REQUEST["pagesize"];
			$_SESSION[$this->sessionPrefix."_pagenumber"] = 1;
		}
		//set page size
		$this->pageSize = (integer) $_SESSION[$this->sessionPrefix."_pagesize"];
	}
	
	/**
	 * Add lookup settings to settings map
	 * Use on list and add pages
	 * @intellisense
	 */
	function addLookupSettings()
	{
		$this->settingsMap["fieldSettings"]["parentFields"] = array("default" => array(), "jsName" => "parentFields");
		$this->settingsMap["fieldSettings"]["DependentLookups"] = array("default" => array(), "jsName" => "depLookups");
		$this->settingsMap["fieldSettings"]["LCType"] = array("default" => LCT_DROPDOWN, "jsName" => "lcType");
		$this->settingsMap["fieldSettings"]["LookupTable"] = array("default" => "", "jsName" => "lookupTable");
		$this->settingsMap["fieldSettings"]["SelectSize"] = array("default" => 1, "jsName" => "selectSize");
		$this->settingsMap["fieldSettings"]["Multiselect"] = array("default" => false, "jsName" => "Multiselect");
		$this->settingsMap["fieldSettings"]["LinkField"] = array("default" => "", "jsName" => "linkField");
		$this->settingsMap["fieldSettings"]["DisplayField"] = array("default" => "", "jsName" => "dispField");
		$this->settingsMap["fieldSettings"]["freeInput"] = array("default" => false, "jsName" => "freeInput");
		$this->settingsMap["fieldSettings"]["HorizontalLookup"] = array("default" => false, "jsName" => "HorizontalLookup");
		$this->settingsMap["fieldSettings"]["autoCompleteFields"] = array("default" => array(), "jsName" => "autoCompleteFields");
	}
	
	/**
	 * Fill global settings
	 * @intellisense
	 */
	function fillGlobalSettings()
	{
		$this->jsSettings["global"] = array();
		foreach($this->settingsMap["globalSettings"] as $key => $val)
			$this->jsSettings["global"][$key] = $val;
		// start augment id from this value	
		$this->jsSettings["global"]['idStartFrom'] = $this->flyId;	
	}
	
	/**
	 * Fill table settings
	 * @intellisense
	 */
	protected function fillTableSettings( $table = "", $pSet = null ) 
	{
		if( !$table )
		{
			$table = $this->tName;
			$pSet = $this->pSet;
		}
		
		foreach($this->settingsMap["tableSettings"] as $key => $val)
		{
			$tData = $pSet->getTableData(".".$key);

			$isDefault = false;
			if(is_array($tData))
				$isDefault = !count($tData);
			else if(!is_array($val['default']))
				$isDefault = ($tData == $val['default']);
			
			if(!$isDefault)
				$this->jsSettings['tableSettings'][ $table ][$val['jsName']] = $tData;		
		}	
		$this->jsSettings['global']['shortTNames'][ $table ] = GetTableURL( $table );
	}
	
	/**
	 * Add fields settings for the fields with names contained in array of fields
	 *
	 * @param array		$arrFields The array of fields
	 * @param object	$pSet The project settings
	 * @param boolean	$pageBased 
	 * @param string	$pageType The page type
	 */
	function addFieldsSettings($arrFields, $pSet, $pageBased, $pageType)
	{
		foreach($arrFields as $fName)
		{
			if( !array_key_exists($fName, $this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings']) )
				$this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings'][ $fName ] = array();
			
			if( !array_key_exists($pageType, $this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings'][ $fName ]) )
				$this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings'][ $fName ][ $pageType ] = array();
						
			$matchDK = $this->matchWithDetailKeys($fName) && $this->pageType != PAGE_SEARCH && $this->pageType != PAGE_LIST && $pageBased;
			
			foreach($this->settingsMap["fieldSettings"] as $key => $val)
			{
				$fData = $pSet->getFieldData($fName, $key);
				
				if( $key == "DateEditType" && $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
				{
					//	search panel control
					if( $pageType == PAGE_SEARCH && ( $this->pageType == PAGE_LIST || $this->pageType == PAGE_CHART || $this->pageType == PAGE_REPORT) || 
						$this->pageType == PAGE_SEARCH && $this->mode == SEARCH_LOAD_CONTROL )
					{
						//	show edit box date in search panel in Bootstrap layouts
						if( $fData == EDIT_DATE_DD )
							$fData = EDIT_DATE_SIMPLE;
						else if( $fData == EDIT_DATE_DD_DP )
							$fData = EDIT_DATE_SIMPLE_DP;
						else if( $fData == EDIT_DATE_DD_INLINE )
							$fData = EDIT_DATE_SIMPLE_INLINE;
					}
				}
				
				if( $key == "validateAs" && !$matchDK )
				{
					if( $pageType == PAGE_ADD || $pageType == PAGE_EDIT || $pageType == PAGE_REGISTER ) 
						$this->fillValidation($fData, $val, $this->jsSettings['tableSettings'][ $this->tName]['fieldSettings'][ $fName ][ $pageType ]);
					continue;
				}
				
				if( $key == "EditFormat" )
				{
					if($matchDK)
						$fData = EDIT_FORMAT_READONLY;
				}
				elseif( $key == "RTEType" )
				{
					$fData = $pSet->getRTEType($fName);
					if($fData == "RTECK")
					{
						$this->isUseCK = true;
						$this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings'][ $fName ][ $pageType ]['nWidth'] = $pSet->getNCols($fName);
						$this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings'][ $fName ][ $pageType ]['nHeight'] = $pSet->getNRows($fName);
					}	
				}
				elseif( $key == "autoCompleteFields" )
					$fData = $pSet->getAutoCompleteFields( $fName );
				elseif( $key == "parentFields" )
					$fData = $pSet->getLookupParentFNames( $fName );
					
				$isDefault = false;
				if( is_array($fData) )
					$isDefault = !count($fData);
				else if( !is_array($val['default']) )
					$isDefault = $fData === $val['default'];
				
				if( !$isDefault && !$matchDK )
					$this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings'][ $fName ][ $pageType ][ $val['jsName'] ] = $fData;
				else if( $matchDK && ($key == "EditFormat" || $key == "strName" || $key == "autoCompleteFields" || $key == "LinkField") )
					$this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings'][ $fName ][ $pageType ][ $val['jsName'] ] = $fData;
			}
			
			$this->jsSettings['tableSettings'][ $this->tName ]['isUseCK'] = $this->isUseCK;
			
			if( count($this->googleMapCfg) != 0 && $this->googleMapCfg['isUseGoogleMap'] )
			{
				$this->jsSettings['tableSettings'][ $this->tName ]['isUseGoogleMap'] = true;
				$this->jsSettings['tableSettings'][ $this->tName ]['googleMapCfg'] = $this->googleMapCfg;	
			}
			
			$lookupTableName = $pSet->getLookupTable($fName);
			if( $lookupTableName )
				$this->jsSettings['global']['shortTNames'][ $lookupTableName ] = GetTableURL($lookupTableName);
				
			if( $pSet->getEditFormat($fName) == 'Time' )
				$this->fillTimePickSettings($fName, "", $pSet, $pageType);
		}
	}
		
	/**
	 * Fill field settings for current table 
	 * @intellisense
	 */
	function fillFieldSettings()
	{		
		$arrFields = $this->pSet->getFieldsList();
		$this->addFieldsSettings($arrFields, $this->pSet, true, $this->pageType);
		
		$this->addExtraFieldsToFieldSettings();	
				
		if( $this->searchPanelActivated && $this->permis[$this->searchTableName]["search"] )
		{
			$arrFields = $this->pSetSearch->getAllSearchFields();
			$this->addFieldsSettings($arrFields, $this->pSetSearch, true, PAGE_SEARCH);	
		}
	}
	
	/**
	 * Match field with details keys
	 *
	 * @param string	$fName The field name
	 * 
	 * @return boolean
	 * @intellisense
	 */
	function matchWithDetailKeys($fName)
	{
		$match = false;
		if($this->detailKeysByM)
		{
			for($j=0;$j<count($this->detailKeysByM);$j++)
			{
				if($this->detailKeysByM[$j]==$fName)
				{
					$match = true;
					break;
				}
			}
		}
		return $match;
	}
	
	/**
	 * Fill preload array for js settings
	 * Use on Add, Edit, Register pages and for search fields only
	 *
	 * @param String fName
	 * @param Array pageFields
	 * @param Array values
	 * @param EditControlsContainer controls 	An instance of the 'EditControlsContainer' class OPTIONAL
	 *
	 * @return boolean|array 
	 * @intellisense
	 */
	function fillPreload($fName, $pageFields, $values, $controls = null)
	{
		if( $this->matchWithDetailKeys($fName) || !$this->pSet->useCategory($fName) )
			return false;
		
		$vals = $this->getRawPreloadData( $fName, $values, $pageFields );
		
		if( $this->pageType == PAGE_ADD || $this->pageType == PAGE_EDIT || $this->pageType == PAGE_REGISTER )
			return $this->getPreloadArr($fName, $vals);

		return $this->getSearchPreloadArr($fName, $vals, $controls);
	}
	
	/**
	 * Get parent fields data 
	 * @param String fName
	 * @param Array values	 
	 * @param Array pageFields
	 * @return Array
	 */
	protected function getRawPreloadData( $fName, $values, $pageFields )
	{
		$vals = array();
		$vals[ $fName ] = @$values[ $fName ];
		
		
		if( $this->pageType != PAGE_ADD && $this->pageType != PAGE_EDIT && $this->pageType != PAGE_REGISTER )
			return $vals;
		
		foreach( $this->getLookupParentFieldsNames( $fName ) as $parentFName )
		{
			if( in_array($parentFName, $pageFields) )
				$vals[ $parentFName ] = @$values[ $parentFName ];			
		}
			
		return $vals;	
	}
	
	/**
	 * Get main lookup controls field names for the dependent lookup field
	 * 
	 * @param string	$fName The field name
	 * @return Array 	An array of category control field names
	 * @intellisense
	 */
	function getLookupParentFieldsNames( $fName )
	{
		if( ($this->pSet->getEditFormat($fName) != EDIT_FORMAT_LOOKUP_WIZARD || $this->pSet->getEditFormat($fName) != EDIT_FORMAT_RADIO) && !$this->pSet->useCategory($fName) )
			return array();
		
		return  $this->pSet->getLookupParentFNames( $fName );	
	}
	
	/**
	 * Get lookup display field with wrappers if needed
	 * Used only when we create SQL to access lookup table
	 *
	 * @param string	$field The field
	 * @param object	$connection The connection object
	 * @param object	$pSet The project settings object
	 *
	 * @return String
	 */
	static function sqlFormattedDisplayField($field, $connection, $pSet)
	{
		$displayField = $pSet->getDisplayField($field);
		
		if(strlen($displayField) && !$pSet->getCustomDisplay( $field ))
			return $connection->addFieldWrappers( $displayField );
		
		return $displayField;
	}

	/**
	 * Get field underlying SQL as it's defined in the original SQL string.
	 * 
	 *
	 * @param string	$field The field name - can be NULL
	 * @param object	$connection The connection object - can be NULL
	 * @param object	$pSet The settings object - can be NULL
	 *
	 * @return string
	 */
	static function _getFieldSQL($field, $connection, $pSet)
	{
		$fname = "";
		if( $pSet )
			$fname = $pSet->getFullFieldName($field);
		global $cman;
		if( !$connection )
			$connection = $cman->getDefault();
		if ( $fname == "" )
			return $connection->addFieldWrappers($field);
		
		if (!$pSet->isSQLExpression($field))
			return $connection->addTableWrappers( $pSet->getStrOriginalTableName() ).".".$connection->addFieldWrappers( $fname );
		return $fname;
		
	}

	/**
	 * Get field underlying SQL as it's defined in the original SQL string.
	 * Add decryption clause if Database-based Encryption is set for the field.
	 * 
	 *
	 * @param string	$field The field name
	 * @param object	$connection The connection object - can be NULL
	 * @param object	$pSet The settings object - can be NULL
	 * @param object	$cipherer The cypherer object - can be NULL
	 *
	 * @return string
	 */
	static function _getFieldSQLDecrypt($field, $connection, $pSet, $cipherer)
	{
		$fname = RunnerPage::_getFieldSQL( $field, $connection, $pSet );
		
		if( $cipherer && $pSet )
		{
			if ( $pSet->hasEncryptedFields() && !$cipherer->isEncryptionByPHPEnabled() ) 
				return $cipherer->GetFieldName($fname, $field);
		}
		
		return $fname;
	}

	/**
	 * Get field underlying SQL as it's defined in the original SQL string.
	 * Add decryption clause if Database-based Encryption is set for the field.
	 * Use current page connection and settings
	 * 
	 * @param string	$field The field name
	 *
	 * @return string
	 */
	function getFieldSQLDecrypt($field)
	{
		return RunnerPage::_getFieldSQLDecrypt( $field, $this->connection, $this->pSet, $this->cipherer );
	}

	/**
	 * Get field underlying SQL as it's defined in the original SQL string.
	 * Use current page connection and settings
	 *
	 * @param string	$field The field name
	 *
	 * @return string
	 */
	function getFieldSQL($field)
	{
		return RunnerPage::_getFieldSQL( $field, $this->connection, $this->pSet );
	}
	
	/**
	 * Returns just the wrapped underlying field name - to be used only in SQL UPDATE and INSERT clauses.
	 * Add wrappers if needed.
	 *
	 * Example
	 ************************************************
	 * Original SQL: 
	 * select cars.make as carmake from cars
	 * 
	 * getTableField("carmake") -> "`make`"
	 * 
	 * Insert/Update SQL:
	 * insert into cars ( `make` ) values ("aaa")
	 * update cars set `make`="aaa"
	 ************************************************
	 * @param string $field The field name
	 *
	 * @return string
	 */
	function getTableField($field)
	{
		$strField = $this->pSet->getStrField($field);
		
		if( $strField != "" )
			return $this->connection->addFieldWrappers( $strField );
		
		return $this->getFieldSQL($field);
	}
		
	/**
	 * Return JS for preload dependent ctrl 
	 *
	 * @param string fName 
	 * @param Array	vals 	Dependent and main fields' values
	 * @return mixed
	 * @intellisense
	 */
	function getPreloadArr($fName, $vals)
	{
		if( $this->pageType != PAGE_ADD && $this->pageType != PAGE_EDIT && $this->pageType != PAGE_REGISTER )
			return false;
			
		$parentFNames = $this->getLookupParentFieldsNames( $fName );
		if( !count($parentFNames) )
			return false;
		
		if( !$this->checkFieldOnPage( $fName ) )
			return false;
		
		$categoryFieldAppear = true;
		if( $this->pageType == PAGE_ADD )
		{
			foreach( $parentFNames as $pFName )
			{
				$categoryFieldAppear = $this->checkFieldOnPage( $pFName );
				if( $categoryFieldAppear )
					break;
			}
		}
				
		$output = array();	
		if( !$this->pSet->isFreeInput($fName) )
		{
			$parentFiltersData = array();
			foreach( $parentFNames as $pFName )
			{
				$parentFiltersData[ $pFName ] = @$vals[ $pFName ];
			}
			
			$output = $this->getControl($fName)->loadLookupContent( $parentFiltersData, @$vals[ $fName ], $categoryFieldAppear ); 
		}
		else if( isset($vals[ $fName ]) )
			$output = array(0 => @$vals[ $fName ], 1 => @$vals[ $fName ]);
		
		if( !count($output) )
			return false;
			
		$fVal = "";
		if( strlen($vals[ $fName ]) )
			$fVal = $vals[ $fName ];
		
		if( $this->pageType == PAGE_EDIT && $this->pSet->multiSelect($fName) )
			$fVal = splitvalues($fVal);
		
		return array("vals" => $output, "fVal" => $fVal);
	}
	
	/**
	 * A stub
	 * @param String fName
	 * @return Boolean
	 */
	protected function checkFieldOnPage( $fName )
	{			
		return true;			
	}
	
	/**
	 * Common assign for diferent mode on list page
	 * Branch classes add to this method its individualy code
	 * @intellisense
	 */
	function commonAssign() 
	{
		$this->xt->assign("quickjump_attrs", 'class="'.$this->makeClassName("quickjump").'"');

		$this->xt->assign( "logo_block", true );
		if( $this->pdfMode == "" )
			$this->xt->assign( "defaultCSS", true );
		$this->xt->assign( "collapse_block", true );

		$this->xt->assign("more_list", true);
		// more button visible
		if ( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT ) {
			$multilang = false;
						$multilang = true;
			$showMoreButton = $multilang || $this->exportAvailable() || $this->printAvailable() || $this->importAvailable() ||  $this->advSearchAvailable() || $this->inlineEditAvailable() || $this->deleteAvailable();
			$moreButtHideClass = $showMoreButton ? "" : "hideMoreButton";
			$this->xt->assign("moreButtHideClass", $moreButtHideClass );			
		}
		
		$this->xt->displayBrickHidden("searchpanel");
		if( $this->mobileTemplateMode() )
		{
			if( $this->pageType != "menu" )
				$this->xt->displayBrickHidden("vmenu");
			$this->xt->displayBrickHidden("backbutton");
			$this->xt->displayBrickHidden("fulltext_mobile");
			$this->xt->displayBrickHidden("searchpanel_mobile");
			$this->xt->displayBrickHidden("vmsearch2");
			$this->xt->displayBrickHidden("adv_search_button");
		}
	}
	
	/**
	 * Return JS for preload dependent ctrl for search fields
	 *
	 * @param String fName 		field name
	 * @param Array vals 		dependent and main fields' values
	 * @param Object contorls	 
	 * @return Mixed
	 * @intellisense
	 */
	function getSearchPreloadArr($fName, $vals, $controls)
	{
		if( is_null($controls) || $this->pSet->getEditFormat($fName) != EDIT_FORMAT_LOOKUP_WIZARD || !$this->pSet->useCategory( $fName ) )
			return false;

		$parentsFieldsData = array();
		$searchApplied = $this->searchClauseObj->isUsedSrch();
		
		foreach( $this->pSet->getParentFieldsData( $fName ) as $cData )
		{
			if( $searchApplied )
			{
				$categoryFieldParams = $this->searchClauseObj->getSearchCtrlParams( $cData['main'] );
				
				if( count($categoryFieldParams) )
					$parentsFieldsData[ $cData['main'] ] = $categoryFieldParams[0]['value1'];
			} 
			else 
			{
				$defaultValue = GetDefaultValue($cData['main'], PAGE_SEARCH);
				if( strlen($defaultValue) )			
					$parentsFieldsData[ $cData['main'] ] = $defaultValue;	
			}
		}
			
		$output = $controls->getControl( $fName )->loadLookupContent( $parentsFieldsData, $vals[ $fName ], count($parentsFieldsData) > 0 );
		
		if( !count( $output ) )
			return false;
		
		$fVal = $vals[ $fName ];
		if( $this->pSet->multiSelect( $fName ) )
			$fVal = splitvalues( $fVal );	
		
		return array("vals" => $output, "fVal" => $fVal);	
	}
	
	/**
	 * Add additional fields to field settings
	 * Use only for: 
	 * 		register page,
	 * 		changepwd page,	
	 * 		admin members page with Active Directory
	 * @intellisense
	 */	
	function addExtraFieldsToFieldSettings($isCaptcha = false)
	{
		$extraParams = array('fields' => array());
		
		if($isCaptcha)
		{
			$extraParams['fields'] = array($this->getCaptchaFieldName());
			$extraParams['format'] = 'Text Field';
		}
		else if($this->pageType == PAGE_REGISTER )
		{
			$extraParams['fields'] = array('confirm');
			$extraParams['format'] = 'Password';
		}	
		else if($this->pageType == PAGE_CHANGEPASS)
		{
			$extraParams['fields'] = array('oldpass', 'newpass', 'confirm');
			$extraParams['format'] = 'Password';
		}
		else if((GetGlobalData("nLoginMethod", 0) == SECURITY_AD) && ($this->mode == MEMBERS_PAGE))
		{
			$extraParams['fields'] = array('displayname', 'name', 'category');
			$extraParams['format'] = 'Text Field';
		}
		
		foreach($extraParams['fields'] as $fName)
		{
			$arrSetVals = array();
			$arrSetVals['strName'] = $fName;
			$arrSetVals['EditFormat'] = $extraParams['format'];
			$arrSetVals['validation']['validationArr'][] = 'IsRequired';
			$this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$fName][$this->pageType] = $arrSetVals;
		}	
	}

	/**
	 * Fill validation for current field
	 * @intellisense
	 */
	function fillValidation($fData, $val, &$arrSetVals)
	{
		if( !count($fData) )
			return;
		
		if( count( $fData['basicValidate'] ) )
			$arrSetVals[ $val['jsName'] ]["validationArr"] = $fData['basicValidate'];
		
		if( array_key_exists("regExp", $fData) ) 
			$arrSetVals[ $val['jsName'] ]["regExp"] = $fData["regExp"];
		
		if( array_key_exists("customMessages", $fData) && count( $fData["customMessages"] ) )
			$arrSetVals[ $val['jsName'] ]["customMessages"] = $fData["customMessages"];	
			
		if( in_array("IsTime", $fData['basicValidate']) )
		{
			if( !$this->timeRegexp ) 
				$this->timeRegexp = $this->getTimeRegexp();
			
			$arrSetVals[ $val['jsName'] ]["regExp"] = $this->timeRegexp;
		}		
	}
	
	/**
	 * Get the local time format regexp
	 */	
	function getTimeRegexp()
	{
		global $locale_info;
		
		$timeDelimiter = $locale_info["LOCALE_STIME"];
		$timeFormat = $locale_info["LOCALE_STIMEFORMAT"];
		$is24hoursFormat = $locale_info["LOCALE_ITIME"] == "1";
		$leadingZero = $locale_info["LOCALE_ITLZERO"] == "1";
        if($locale_info["LOCALE_ITIME"] == "0") 
			$designators = preg_quote($locale_info["LOCALE_S1159"],"")."|".preg_quote($locale_info["LOCALE_S2359"],"");
			
		if($is24hoursFormat)
		{
			if($leadingZero)
				$timeFormat = str_replace("HH", "(?:0[0-9]|1[0-9]|2[0-3])" ,$timeFormat);
			else
				$timeFormat = str_replace("H", "(?:[1-9]|1[0-9]|2[0-3])", $timeFormat);
		} 
		else
		{
			if($leadingZero)
				$timeFormat = str_replace("hh", "(?:0[1-9]|1[0-2])",$timeFormat);
			else
				$timeFormat = str_replace("h", "(?:[1-9]|1[0-2])",$timeFormat);
				
			$timeFormat = str_replace("tt", "[\s]{0,2}(?:".$designators."|am|pm)[\s]{0,2}", $timeFormat);	
        }
		$timeSep = $timeDelimiter == ":" ? ":" : "(?:".$timeDelimiter."|:)";
		$timeFormat = str_replace($timeDelimiter."mm".$timeDelimiter."ss", "(?:".$timeSep."[0-5][0-9](?:".$timeSep."[0-5][0-9])?)?", $timeFormat);
        $timeFormat = "^".str_replace(" ", "[\s]{0,2}", $timeFormat)."$"; 
		return $timeFormat;	
	}
	
	/**
	 * Fill all settings for current table 
	 * @intellisense
	 */
	function fillSettings()
	{
		$this->fillGlobalSettings();
		$this->fillTableSettings();
		$this->fillFieldSettings();	
	}
	
	/**
	 * Fill tool tips for current table fields
	 * @param $fName - filed name
	 * @intellisense
	 */
	function fillFieldToolTips($fName)
	{
		// don't fill tooltips in Bootstrap layout
		if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
			return;
		$toolTipText = GetFieldToolTip( GoodFieldname($this->tName), GoodFieldname($fName) );
		if( strlen($toolTipText) ) 
			$this->controlsMap['toolTips'][$fName] = $toolTipText;
	}
	
	/**
	 * Fill controls map 
	 * For add, edit, search pages - controls
	 * 
	 * @param Array arr			an array of settings for one control
	 * @param Boolean addSet  	indicates if to add additional settings to control or not
	 * @param String fName 		(optional) a field's name
	 * @intellisense
	 */		
	function fillControlsMap($arr, $addSet = false, $fName="")
	{
		if(!$addSet)
		{
			foreach($arr as $key=>$val)
			{
				initArray($this->controlsMap, $key);
				$this->controlsMap[$key][] = $val;
			}
			
			return;
		}

		foreach($arr as $key=>$val)
		{
			foreach($val as $vkey=>$vval)
			{
				if(!$fName)
					$this->controlsMap[$key][ count($this->controlsMap[$key]) - 1 ][$vkey] = $vval;
				else
				{
					for($i = 0; $i < count($this->controlsMap[$key]); $i++)
					{
						if($this->controlsMap[$key][$i]['fieldName']==$fName)
						{
							$this->controlsMap[$key][$i][$vkey] = $vval;
							break;
						}	
					}		
				}		
			}	
		}				
	}
	
	/**
	 * Fill field settings for current table 
	 * @intellisense
	 */	
	function fillControlsHTMLMap()
	{
		$this->controlsHTMLMap[$this->tName] = array();
		$this->controlsHTMLMap[$this->tName][$this->pageType] = array();
		$this->controlsHTMLMap[$this->tName][$this->pageType][$this->id] = array();
		
		$this->controlsMap['gMaps'] = $this->googleMapCfg;
		if($this->searchClauseObj)
		{
			if(!isset($this->controlsMap["search"]))
			{
				$this->controlsMap["search"] = array();
			}
			$this->controlsMap["search"]["usedSrch"] = $this->searchClauseObj->isUsedSrch();
		}
			
		foreach($this->controlsMap as $key=>$val)
		{
			$this->controlsHTMLMap[$this->tName][$this->pageType][$this->id][$key] = $val;
		}
			
		$this->viewControlsHTMLMap[$this->tName] = array();
		$this->viewControlsHTMLMap[$this->tName][$this->pageType] = array();
		$this->viewControlsHTMLMap[$this->tName][$this->pageType][$this->id] = array();
		
		foreach($this->viewControlsMap as $key => $val)
			$this->viewControlsHTMLMap[$this->tName][$this->pageType][$this->id][$key] = $val;
	}
	
	/**
	 * Fill jsSettings and controlsHTMLMap arrays for current table 
	 * @intellisense
	 */	
	function fillSetCntrlMaps()
	{
		if($this->isControlsMapFilled)
			return;
		$this->fillSettings();
		$this->fillControlsHTMLMap();
		$this->isControlsMapFilled = true;
	}
	
	/**
	 * Fill arrays of names tab group and section to controlsHTMLMap for current table
	 * @intellisense
	 */		
	function fillCntrlTabGroups()
	{
		if( $this->isMultistepped() )
		{
			$this->controlsMap['initialStep'] = $this->initialStep;
			$this->controlsMap['multistep'] = true;
		}
		$arrTabs = $this->getArrTabs();
		$this->controlsMap['tabs'] = array();
		$this->controlsMap['sections'] = array();
		
		if(!$arrTabs)
			return false;
		
		$beginGroup = false;
		$tabGroupName = "";
		
		for($i=0;$i<count($arrTabs);$i++)
		{
			$tabC = $arrTabs[$i];//current tab
			$tabN = (($i+1)<count($arrTabs) ? $arrTabs[$i+1] : false);//next tab
			if( $tabC['nType'] == TAB_TYPE_TAB)
			{
				if(!$beginGroup)
				{
					$beginGroup = true;
					$tabGroupName = $tabC['tabId'];
				}
				
				if($beginGroup)
				{
					if(!$tabN || $tabN['nType'] || $tabN['tabGroup']!=$tabC['tabGroup'])
					{
						//fill array of tabs with name of tab groups
						$tabsAndFields = array();
						for($j=0;$j<count($arrTabs);$j++)
						{
							if($arrTabs[$j]['tabGroup'] == $tabC['tabGroup'])
							{
								$tabsAndFields[$arrTabs[$j]['tabId']] = array();
								for($f=0;$f<count($arrTabs[$j]['arrFields']);$f++)
									$tabsAndFields[$arrTabs[$j]['tabId']][] = $arrTabs[$j]['arrFields'][$f];
							}
						}
						$this->controlsMap['tabs']['tabGroup_'.$tabGroupName] = $tabsAndFields;
						$beginGroup = false;

						if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
						{
							// assign tab control header
							$selected = "active";
							$tabHeaders = array();
							for( $j = 0; $j < count($arrTabs); $j++ )
							{
								if($arrTabs[$j]['tabGroup'] != $tabC['tabGroup'])
									continue;
								$tabHeaders[] = '<li role="presentation" class="' . $selected . '"><a aria-controls="settings" role="tab" data-toggle="tab" href="#' . $arrTabs[$j]['tabId'] . $this->id . '">' . $arrTabs[$j]['tabName'] . '</a></li>';
								$selected = "";
							}
							$this->xt->assign( "tabgroup_" . $tabGroupName . "_header", '<ul class="nav nav-tabs" role="tablist">' . implode("", $tabHeaders) . '</ul>' );
							
						}
					}	
				}
			}
			elseif ( $tabC['nType'] == TAB_TYPE_STEP ) {
				$this->controlsMap['steps'][$i] = array();	
				for($f = 0; $f < count($arrTabs[$i]['arrFields']); $f++)
				{
					$this->controlsMap['steps'][$i][] = $arrTabs[$i]['arrFields'][$f];
				}
			}
			elseif ( $tabC['nType'] == TAB_TYPE_SECTION )
			{
				//fill array of sections with name sections
				$this->controlsMap['sections']['section_'.$tabC['tabId']] = array();
				
				for($f = 0; $f < count($arrTabs[$i]['arrFields']); $f++)
				{					
					$sectionId = $this->getLayoutVersion() == BOOTSTRAP_LAYOUT ? $tabC['tabId'] : 'section_'.$tabC['tabId'];
					$this->controlsMap['sections'][ $sectionId ][] = $arrTabs[$i]['arrFields'][$f];
				}
				
				if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
				{
					$headId = "section_head_" . $tabC['tabId'] . $this->id;
					$bodyId = "section_body_" . $tabC['tabId'] . $this->id;
					$expanded = 'aria-expanded="false"';
					if( $tabC['expandSec'] )
					{
						$expanded = 'aria-expanded="true"';
						$this->xt->assign( "section_" . $tabC['tabId'] . "_xtrclass", "in ");
					}
					$this->xt->assign( "section_" . $tabC['tabId'] . "_headattrs", 'id="'.$headId.'" href="#'.$bodyId.'" '.$expanded.' aria-controls="'.$bodyId.'"' );
					$this->xt->assign( "section_" . $tabC['tabId'] . "_attrs", 'id="'.$bodyId.'" aria-labelledby="'.$headId.'"' );
					$this->xt->assign( "section_" . $tabC['tabId'] . "_label", $tabC['tabName'] );
				}
			}
		}
	}
	
	/**
	 * Check are fields appaer in tabs for current page or not
	 * return boolean
	 * @intellisense
	 */	
	function isAppearOnTabs($fName)
	{
		$match = false;
		$arrTabs = $this->getArrTabs();
		if(!$arrTabs)
			return $match;
		foreach($arrTabs as $tab=>$val){
			if(in_array($fName, $val['arrFields'])){
				$match = true;
				break;
			}
		}
		return $match;
	}
	/**
	 * Get array of tabs in accordance with page type
	 * @return Array | Boolean
	 * @intellisense
	 */	
	function getArrTabs()
	{
		if($this->pageType == PAGE_EDIT)
			return $this->pSet->getEditTabs();
		elseif($this->pageType == PAGE_ADD)
			return $this->pSet->getAddTabs();
		elseif($this->pageType == PAGE_VIEW)
			return $this->pSet->getViewTabs();
		elseif($this->pageType == PAGE_REGISTER)
			return $this->pSet->getRegisterTabs();
		else
			return array();
	}
	
	/**
	 * Fill timepicker settings for current field
	 * @intellisense
	 */		
	function fillTimePickSettings($field,  $value = "", $pSet = null, $pageType = "")
	{
		if(is_null($pSet))
			$pSet = $this->pSet;
		if($pageType == "")
			$pageType = $this->pageType;
		
		$timeAttrs = $pSet->getFormatTimeAttrs($field);
		if(count($timeAttrs) && $timeAttrs["useTimePicker"])
		{
			$convention = $timeAttrs["hours"];
			$locAmPm = getLacaleAmPmForTimePicker($convention, true);
			$tpVal = getValForTimePicker($pSet->getFieldType($field),$value,$locAmPm['locale']);
			
			$range = array();
			if($convention==24)
			{
				for($h = 0;$h < $convention;$h ++)
					$range[]= $h;
			}
			else
			{
				for($h = 1;$h <= $convention;$h ++)
					$range[] = $h;
			}
			
			$minutes = array();
			for($m = 0; $m < 60; $m += $timeAttrs["minutes"])
				$minutes[] = $m;
			
			//settings
			$timePickSet = array('convention'=>$convention,
								 'range'=>$range,
								 'apm'=>array($locAmPm['am'],$locAmPm['pm']),
								 'rangeMin'=>$minutes,
								 'locale'=>$locAmPm['locale'],
								 'showSec'=>$timeAttrs["showSeconds"],
								 'minutes'=>$timeAttrs["minutes"]);
			
			if(count($tpVal['dbtime'])>0)
				$timePickSet['hover'] = array('0'=>$tpVal['dbtime'][3],'1'=>$tpVal['dbtime'][4],'2'=>$tpVal['dbtime'][5]);
			
			if(!array_key_exists($field,$this->jsSettings['tableSettings'][$this->tName]['fieldSettings']))	
			{
				$this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$field] = array();
				$this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$field][$pageType] = array();
				$this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$field][$pageType]['timePick'] = $timePickSet;
			}
			elseif(!array_key_exists("timePick",$this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$field][$pageType]))
				$this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$field][$pageType]['timePick'] = $timePickSet;
			
			$this->fillControlsMap(array('controls'=>array('open'=>($tpVal['val'] ? true : false))),true,$field);
		}
	}
		
	/**
	 * Assign body end
	 * @intellisense
	 */	
	function assignBodyEnd($params = "") 
	{
		$this->fillSetCntrlMaps();
		echo "<script>
			window.controlsMap = ".my_json_encode($this->controlsHTMLMap).";
			window.viewControlsMap = ".my_json_encode($this->viewControlsHTMLMap).";
			window.settings = ".my_json_encode($this->jsSettings)."; 
			</script>\r\n";
		echo "<script language=\"JavaScript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js")."\"></script>\r\n";
		echo "<script>".$this->PrepareJS()."</script>";
	}
		
	/**
	 * Generates new id, same as flyId on front-end
	 *
	 * @return int
	 * @intellisense
	 */
	function genId()
	{
		$this->flyId++;
		$this->recId = $this->flyId;
		return $this->flyId;
	}
	
	/**
	 * Get page type
	 * @intellisense
	 */
	function getPageType()
	{
		return $this->pageType;
	}
	
	/**
	 * Add js files for page
	 * @intellisense
	 */
	function AddJSFileNoExt($file)
	{
		$this->includes_js[] = GetRootPathForResources($file);
	}
	
	function AddJSFile($file, $req1 = "", $req2 = "", $req3 = "")
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
	 * Grab all js files
	 * @intellisense
	 */
	function grabAllJsFiles()
	{
		$jsFiles = array();
		foreach($this->includes_js as $file)
		{
			$jsFiles[$file] = array();
			if(array_key_exists($file, $this->includes_jsreq))
				$jsFiles[$file] = $this->includes_jsreq[$file];
		}
		$this->includes_js = array();
		$this->includes_jsreq = array();
		return $jsFiles;
	}
	
	/**
	 * Grab all css files
	 * @intellisense
	 */
	function copyAllJsFiles($jsFiles)
	{
		foreach($jsFiles as $file=>$reqFiles)
		{
			$this->includes_js[] = $file;
			
			if(array_key_exists($file,$this->includes_jsreq))
			{
				foreach($reqFiles as $rFile)
				{
					if(array_key_exists($rFile,$this->includes_jsreq[$file]))
						continue;
					$this->includes_jsreq[$file][] = $rFile;
				}
			}
			else
				$this->includes_jsreq[$file] = $reqFiles;
		}
	}
	
	/**
	 * Add css files for page
	 * @intellisense
	 */
	function AddCSSFile($file)
	{
			if( $this->pdfMode && $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
		{
			if( 0 == count( $this->includes_css ) )
				$this->includes_css[] = "styles/pdf.css";
			return;
		}
		if(is_array($file))
		{
			foreach($file as $f)
			{
				$this->includes_css[] = $f;
			}
		}
		else
			$this->includes_css[] = $file;
	}
	
	/** 
	 * Replace the pageLayout object with a new obtained by t
	 * the table name and page's layout suffix. 
	 * Update the page's css files
	 * @param String tName
	 * @param String	The layout suffix
	 */
	function updatePageLayoutAndCSS( $tName, $suffix )
	{
		$this->pageLayout = GetPageLayout( $tName, $this->pageType, $suffix );
		
		$this->includes_css = array();
		$this->AddCSSFile( $this->pageLayout->getCSSFiles(isRTL(), isPageLayoutMobile( $this->templatefile ), $this->pdfMode != "" ) );
	}
	
	/**
	 * Grab all css files
	 * @intellisense
	 */
	function grabAllCSSFiles()
	{
		$cssFiles = $this->includes_css;
		$this->includes_css = array();
		return $cssFiles;
	}
	/**
	 * Copy all css files
	 * @intellisense
	 */
	function copyAllCssFiles($cssFiles)
	{
		foreach($cssFiles as $file)
			$this->AddCSSFile($file);
	}
	
	/**
	 * Load js and css files
	 * @intellisense
	 */
	function LoadJS_CSS()
	{
		$this->includes_js = array_unique($this->includes_js);
		$this->includes_css = array_unique($this->includes_css);
		$out = "";
		foreach($this->includes_js as $file)
		{
			$out .= "Runner.util.ScriptLoader.addJS(['".$file."']";
			if(array_key_exists($file,$this->includes_jsreq))
			{
				foreach($this->includes_jsreq[$file] as $req)
					$out.=",'".$req."'";
			}
			$out.=");\r\n";
		}
		$out.= " Runner.util.ScriptLoader.load();";
		return $out;
	}
	
	/**
	 * Set languge params for page
	 * @intellisense
	 */
	function setLangParams()
	{
		SetLangVars($this->xt, $this->shortTableName, $this->pageType);
	}
	
	/**
	 * Add general js or css files for pages
	 * @intellisense
	 */
	function addCommonJs() 
	{
		if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
		{
			$this->AddJSFile("include/bootstrap/js/bootstrap.min.js");
				$this->AddJSFile("include/jquery-ui/jquery-ui.min.js");
			$this->AddCSSFile("include/jquery-ui/smoothness/jquery-ui.min.css"); // css?
			$this->AddJSFile("include/bootstrap/js/jquery.mousewheel.min.js");
			$this->AddJSFile("include/bootstrap/js/jquery.mCustomScrollbar.min.js");
			$this->AddCSSFile("include/bootstrap/css/jquery.mCustomScrollbar.css"); // css?

			$this->AddJSFile('include/ResizeSensor/ResizeSensor.js');
		}
		
		if ($this->debugJSMode === true)
		{
			$this->AddJSFile("include/runnerJS/ControlConstants.js");
			$this->AddJSFile("include/runnerJS/RunnerEvent.js");
			$this->AddJSFile("include/runnerJS/Validate.js","include/runnerJS/RunnerEvent.js");
			$this->AddJSFile("include/runnerJS/ControlManager.js","include/runnerJS/Validate.js");
			$this->AddJSFile("include/runnerJS/button.js", "include/runnerJS/ControlManager.js");	
			$this->AddJSFile("include/runnerJS/Control.js", "include/runnerJS/ControlManager.js");
			$this->AddJSFile("include/runnerJS/MockControl.js", "include/runnerJS/ControlManager.js");
			$this->AddJSFile("include/runnerJS/ViewControl.js", "include/runnerJS/ControlManager.js");
			$this->AddJSFile("include/runnerJS/ReadOnly.js", "include/runnerJS/Control.js");				
			$this->AddJSFile("include/runnerJS/TextAreaControl.js", "include/runnerJS/Control.js");
			$this->AddJSFile("include/runnerJS/TextFieldControl.js", "include/runnerJS/Control.js");
			$this->AddJSFile("include/runnerJS/TimeFieldControl.js", "include/runnerJS/Control.js");
			$this->AddJSFile("include/runnerJS/RteControl.js", "include/runnerJS/Control.js");
			$this->AddJSFile("include/runnerJS/FileControl.js", "include/runnerJS/Control.js");
			$this->AddJSFile("include/runnerJS/MultiUploadControl.js", "include/runnerJS/Control.js");
			$this->AddJSFile("include/runnerJS/DateFieldControl.js", "include/runnerJS/Control.js");
			$this->AddJSFile("include/runnerJS/LookupWizard.js", "include/runnerJS/Control.js");
			$this->AddJSFile("include/runnerJS/RadioControl.js", "include/runnerJS/LookupWizard.js");
			$this->AddJSFile("include/runnerJS/DropDown.js", "include/runnerJS/LookupWizard.js");
			$this->AddJSFile("include/runnerJS/CheckBox.js", "include/runnerJS/Control.js");
			$this->AddJSFile("include/runnerJS/CheckBoxLookup.js", "include/runnerJS/LookupWizard.js");
			$this->AddJSFile("include/runnerJS/TextFieldLookup.js", "include/runnerJS/LookupWizard.js");
			$this->AddJSFile("include/runnerJS/EditBoxLookup.js", "include/runnerJS/TextFieldLookup.js");
			$this->AddJSFile("include/runnerJS/ListPageLookup.js", "include/runnerJS/TextFieldLookup.js");
			
			$this->AddJSFile("include/runnerJS/pages/PageConstants.js", "include/runnerJS/ListPageLookup.js");	
			$this->AddJSFile("include/runnerJS/InlineEdit.js", "include/runnerJS/pages/PageConstants.js");
			
			$this->AddJSFile("include/runnerJS/pages/RunnerDefaults.js", "include/runnerJS/pages/PageConstants.js");	
			$this->AddJSFile("include/runnerJS/pages/PageManager.js", "include/runnerJS/pages/RunnerDefaults.js");
			$this->AddJSFile("include/runnerJS/pages/PageSettings.js", "include/runnerJS/pages/PageManager.js");
			$this->AddJSFile("include/runnerJS/DetPreview.js", "include/runnerJS/pages/PageSettings.js");			
			$this->AddJSFile("include/runnerJS/pages/RunnerPage.js", "include/runnerJS/pages/PageSettings.js");
			$this->AddJSFile("include/runnerJS/pages/SearchPage.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/ViewPage.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/LoginPage.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/RemindPage.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/PrintPdf.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/PrintPageCommon.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/PrintPage.js", "include/runnerJS/pages/PrintPageCommon.js");
			$this->AddJSFile("include/runnerJS/pages/ReportPrintPage.js", "include/runnerJS/pages/PrintPageCommon.js");
			
			$this->AddJSFile("include/runnerJS/pages/EditorPage.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/AddPage.js", "include/runnerJS/pages/EditorPage.js");
			$this->AddJSFile("include/runnerJS/pages/AddPageFly.js", "include/runnerJS/pages/AddPage.js");
			$this->AddJSFile("include/runnerJS/pages/AddPageDash.js", "include/runnerJS/pages/AddPage.js");
			$this->AddJSFile("include/runnerJS/pages/EditPage.js", "include/runnerJS/pages/EditorPage.js");
			$this->AddJSFile("include/runnerJS/pages/EditPageDash.js", "include/runnerJS/pages/EditPage.js");
			$this->AddJSFile("include/runnerJS/pages/EditSelectedPage.js", "include/runnerJS/pages/EditPage.js");
			
			$this->AddJSFile("include/runnerJS/pages/DataPageWithSearch.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/ListPageCommon.js", "include/runnerJS/pages/DataPageWithSearch.js");
			$this->AddJSFile("include/runnerJS/pages/ListPageFly.js", "include/runnerJS/pages/ListPageCommon.js");
			$this->AddJSFile("include/runnerJS/pages/ListPage.js", "include/runnerJS/pages/ListPageCommon.js", "include/runnerJS/DetPreview.js", "include/runnerJS/pages/AddPage.js");
			$this->AddJSFile("include/runnerJS/pages/ListPageDash.js", "include/runnerJS/pages/ListPage.js");
			
			$this->AddJSFile("include/runnerJS/pages/DashboardMap.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/DashboardLeadingMap.js", "include/runnerJS/pages/DashboardMap.js");
			$this->AddJSFile("include/runnerJS/pages/DashboardGridBasedMap.js", "include/runnerJS/pages/DashboardMap.js");
			
			$this->AddJSFile("include/runnerJS/pages/DashboardPage.js", "include/runnerJS/pages/RunnerPage.js");
							
			if ($this->mobileTemplateMode()) 
			{
				$this->AddJSFile("include/runnerJS/pages/ListPageMobile.js", "include/runnerJS/pages/ListPage.js");
				$this->AddJSFile("include/runnerJS/pages/ListPageMobileDP.js", "include/runnerJS/pages/ListPageDP.js");
				$this->AddJSFile("include/runnerJS/pages/ReportPageMobile.js", "include/runnerJS/pages/ListPageMobile.js");
				$this->AddJSFile("include/runnerJS/pages/ChartPageMobile.js", "include/runnerJS/pages/ListPageMobile.js");
				$this->AddJSFile("include/runnerJS/pages/ChartPageMobileDP.js", "include/runnerJS/pages/ChartPageMobile.js");
				$this->AddJSFile("include/runnerJS/pages/DashboardPageMobile.js", "include/runnerJS/pages/DashboardPage.js");
				$this->AddJSFile("include/runnerJS/pages/ReportPageMobileDP.js", "include/runnerJS/pages/ReportPageDP.js");
			}
			else 
			{
				$this->AddJSFile("include/runnerJS/pages/ChartPage.js", "include/runnerJS/pages/DataPageWithSearch.js");
				$this->AddJSFile("include/runnerJS/pages/ChartPageDP.js", "include/runnerJS/pages/ChartPage.js");
				$this->AddJSFile("include/runnerJS/pages/ChartPageDash.js", "include/runnerJS/pages/ChartPage.js");
			}
			
			$this->AddJSFile("include/runnerJS/pages/ReportPageDP.js", "include/runnerJS/pages/ReportPage.js");			
			$this->AddJSFile("include/runnerJS/pages/ReportPage.js", "include/runnerJS/pages/DataPageWithSearch.js");			
			$this->AddJSFile("include/runnerJS/pages/ListPageAjax.js", "include/runnerJS/pages/ListPage.js");
			$this->AddJSFile("include/runnerJS/pages/ListPageDP.js", "include/runnerJS/pages/ListPage.js");
			
			$this->AddJSFile("include/runnerJS/pages/CheckboxesPage.js", "include/runnerJS/pages/ListPage.js");
			$this->AddJSFile("include/runnerJS/pages/MembersPage.js", "include/runnerJS/pages/CheckboxesPage.js");
			$this->AddJSFile("include/runnerJS/pages/RightsPage.js", "include/runnerJS/pages/CheckboxesPage.js");
			
				$this->AddJSFile("include/runnerJS/pages/ChangePwdPage.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/ExportPage.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/ImportPage.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/RegisterPage.js", "include/runnerJS/pages/RunnerPage.js");
						
			$this->AddJSFile("include/runnerJS/FilterControl.js", "include/runnerJS/DateFieldControl.js");
			$this->AddJSFile("include/runnerJS/SearchForm.js");	
			$this->AddJSFile("include/runnerJS/SearchField.js");
			$this->AddJSFile("include/runnerJS/SearchFormWithUI.js", "include/runnerJS/SearchForm.js");
			$this->AddJSFile("include/runnerJS/SearchController.js", "include/runnerJS/SearchFormWithUI.js");
			$this->AddJSFile("include/runnerJS/SearchParamsLogger.js", "include/runnerJS/SearchController.js");
			$this->AddJSFile("include/runnerJS/RunnerForm.js");
			
			$this->AddJSFile("include/runnerJS/RunnerBricks.js");
			$this->AddJSFile("include/runnerJS/RunnerMenu.js");
			if($this->lockingObj)
				$this->AddJSFile("include/runnerJS/RunnerLocking.js");
			if($this->is508)
				$this->AddJSFile("include/runnerJS/RunnerSection508.js");	
			
			if ($this->pSet->isAddPageEvents() && $this->pageType != PAGE_LOGIN && $this->shortTableName != "")
			{
				$this->AddJSFile("include/runnerJS/events/pageevents_".$this->shortTableName.".js", "include/runnerJS/pages/PageSettings.js", 
					"include/runnerJS/button.js");
			}
		
			}
		else
		{
			if ($this->pSet->isAddPageEvents() && $this->pageType != PAGE_LOGIN && $this->shortTableName != "")
			{
				$this->AddJSFile("include/runnerJS/events/pageevents_".$this->shortTableName.".js");
			}
			}
		
		if ( $this->getLayoutVersion() != BOOTSTRAP_LAYOUT )		
			$this->AddJSFile("include/yui/yui-min.js");
		
		if ($this->isUseAjaxSuggest) 
		{
			$this->AddJSFile("include/ajaxsuggest.js");
		}
		elseif(count($this->allDetailsTablesArr))
		{
			for($i = 0; $i < count($this->allDetailsTablesArr); $i ++) 
			{
				if($this->allDetailsTablesArr[$i]['previewOnList'] == DP_POPUP)
					$this->AddJSFile("include/ajaxsuggest.js");
					break;
			}
		}
			
		if($this->isUseToolTips)
			$this->AddJSFile("include/jquery.inputhintbox.js");
		
		if($this->isUseCK)
			$this->AddJSFile("plugins/ckeditor/ckeditor.js");
			
		$this->addControlsJSAndCSS();
	}
	
	function addControlsJSAndCSS()
	{
		$this->controls->addControlsJSAndCSS();
		$this->viewControls->addControlsJSAndCSS();
	}
	
	/**
	 * Prepare js code
	 * @intellisense
	 */
	function PrepareJS()
	{
		return $this->LoadJS_CSS();
	}
	
	function addButtonHandlers()
	{	
		if (!$this->pSet->isUsebuttonHandlers() && !$this->pSet->isAddPageEvents() || $this->shortTableName == "")
			return false;

		if ($this->debugJSMode === true)
		{
			$this->AddJSFile("include/runnerJS/events/pageevents_".$this->shortTableName.".js", "include/runnerJS/pages/PageSettings.js");
		}
		else 
		{
			$this->AddJSFile("include/runnerJS/events/pageevents_".$this->shortTableName.".js");
		}
		return true;
	}
	
	function setGoogleMapsParams($fieldsArr) 
	{
		$this->googleMapCfg['isUseMainMaps'] = $this->pSet->isUseMainMaps();
		$this->googleMapCfg['isUseFieldsMaps'] = $this->pSet->isUseFieldsMaps();
		
		$this->fillAdvancedMapData();
		
		if ($this->googleMapCfg['isUseFieldsMaps'])
		{
			foreach($fieldsArr as $f)
			{
				if ($f['viewFormat'] == FORMAT_MAP)
				{
					$this->googleMapCfg['fieldsAsMap'][$f['fName']] = array();
					$fieldMap = $this->pSet->getMapData($f['fName']);
					
					$this->googleMapCfg['fieldsAsMap'][$f['fName']]['width'] = $fieldMap['width'] ? $fieldMap['width'] : 0;
					$this->googleMapCfg['fieldsAsMap'][$f['fName']]['height'] = $fieldMap['height'] ? $fieldMap['height'] : 0;
					$this->googleMapCfg['fieldsAsMap'][$f['fName']]['addressField'] = $fieldMap['address'];
					$this->googleMapCfg['fieldsAsMap'][$f['fName']]['latField'] = $fieldMap['lat'];
					$this->googleMapCfg['fieldsAsMap'][$f['fName']]['lngField'] = $fieldMap['lng'];
					$this->googleMapCfg['fieldsAsMap'][$f['fName']]['descField'] = $fieldMap['desc'];
					$this->googleMapCfg['fieldsAsMap'][$f['fName']]['mapIcon'] = $this->pSet->getMapIcon($f['fName'], $this->data);
					if (isset($fieldMap['zoom'])){
						$this->googleMapCfg['fieldsAsMap'][$f['fName']]['zoom'] = $fieldMap['zoom'];
					}
				}
			}
		}
		$this->googleMapCfg['isUseGoogleMap'] = $this->googleMapCfg['isUseMainMaps'] || $this->googleMapCfg['isUseFieldsMaps'] || $this->mapsExists();
		$this->googleMapCfg['tName'] = $this->tName;
	}
	
	function fillAdvancedMapData()
	{	
//		if( !$this->googleMapCfg['isUseMainMaps'] )
//			return;
		$advMaps = array();
		$clustering = false;
//		foreach ($this->googleMapCfg['mainMapIds'] as $mapId)
		foreach ($this->googleMapCfg['mapsData'] as $mapId => $mapData)
		{
			if( $this->googleMapCfg['mapsData'][$mapId]['showAllMarkers'] )
				$advMaps[] = $mapId;
			if( $this->googleMapCfg['mapsData'][$mapId]['clustering'] && $this->mapProvider == GOOGLE_MAPS )
				$clustering = true;
		}
		if( !$advMaps )
			return;
		if( $clustering )
			$this->AddJSFile("include/markerclusterer.js");

		$tKeys = $this->pSet->getTableKeys();
		
		$rs = $this->connection->query( $this->querySQL );
		
		$recId = $this->recId;
		while( $data = $rs->fetchAssoc() )
		{
			$editlink = "";
			$keys = array();
			for($i = 0; $i < count($tKeys); $i ++) {
				if($i != 0) {
					$editlink.= "&";
				}
				$editlink.= "editid".($i + 1)."=".runner_htmlspecialchars(rawurlencode($data[$tKeys[$i]]));
				$keys[$i] = $data[$tKeys[$i]];
			}

			foreach( $advMaps as $mapId )
				$this->addBigGoogleMapMarker($mapId, $data, $keys,  ++$recId, $editlink );
		}
		
	}
	
	/**
	 *
	 */
	function addBigGoogleMapMarkers(&$data, $keys, $editLink = '') 
	{
		foreach ($this->googleMapCfg['mainMapIds'] as $mapId)
		{
			//	skip heatmaps
			if( $this->fetchMapMarkersInSeparateQuery( $mapId ) )
				continue;
			$this->addBigGoogleMapMarker( $mapId, $data, $keys, $this->recId, $editLink);
		}
	} 
	 
	function fetchMapMarkersInSeparateQuery( $mapId )
	{
		return ($this->googleMapCfg['mapsData'][$mapId]['heatMap'] || $this->googleMapCfg['mapsData'][$mapId]['clustering']) && $this->mapProvider == GOOGLE_MAPS;
	}
	 
	 
	function addBigGoogleMapMarker($mapId, &$data, $keys, $recId, $editLink = '') 
	{
		$latF = $this->googleMapCfg['mapsData'][$mapId]['latField'];
		$lngF = $this->googleMapCfg['mapsData'][$mapId]['lngField'];
		$addressF = $this->googleMapCfg['mapsData'][$mapId]['addressField'];
		
		if( !strlen( $data[ $latF ] ) && !strlen( $data[ $lngF ] )&& !strlen( $data[ $addressF ] ) )
			return;
		
		$descF = $this->googleMapCfg['mapsData'][$mapId]['descField'];
		$markerAsEditLink = $this->googleMapCfg['mapsData'][$mapId]['markerAsEditLink'];
		$weightF = $this->googleMapCfg['mapsData'][$mapId]['weightField'];
		
		$markerArr = array();
		$markerArr['lat'] = str_replace(",", ".", ($data[$latF] ? $data[$latF] : ''));
		$markerArr['lng'] = str_replace(",", ".", ($data[$lngF] ? $data[$lngF] : ''));
		$markerArr['address'] = $data[$addressF] ? $data[$addressF] : '';
		$markerArr['desc'] = $data[$descF] ? $data[$descF] : $markerArr['address'];
		if( $weightF )
			$markerArr['weight'] = str_replace(",", ".", ($data[$weightF] ? $data[$weightF] : ''));
		if( $markerAsEditLink && $this->editAvailable())
			$markerArr['link'] = GetTableLink($this->shortTableName, "edit", $editLink);
		elseif($this->viewAvailable())
			$markerArr['link'] = GetTableLink($this->shortTableName, "view", $editLink);
		
		$markerArr['recId'] = $recId;
		$markerArr['keys'] = $keys; 

		if( $this->googleMapCfg['mapsData'][ $mapId ]['dashMap'] )
		{
			$markerArr['mapIcon'] = $this->dashSet->getDashMapIcon( $this->dashElementName, $data );
			$markerArr["masterKeys"] = $this->getMarkerMasterKeys( $data );
		}
		else 
		{
			//	big map on a List page
			if( $this->googleMapCfg['mapsData'][$mapId]['markerField'] )
				$markerArr['mapIcon'] = $data[ $this->googleMapCfg['mapsData'][$mapId]['markerField'] ];
			if( !$markerArr['mapIcon'] && $this->googleMapCfg['mapsData'][$mapId]['markerIcon'] )
				$markerArr['mapIcon'] = $this->googleMapCfg['mapsData'][$mapId]['markerIcon'];
		}
		
		$this->googleMapCfg['mapsData'][$mapId]['markers'][] = $markerArr;
	}

	/**
	 * @param &Array data
	 * @return Array
	 */
	protected function getMarkerMasterKeys( &$data ) 
	{
		$masterKeys = array();
		
		for($i = 0; $i < count($this->allDetailsTablesArr); $i ++) 
		{
			$detailTableData = $this->allDetailsTablesArr[$i];
			$dDataSourceTable = $detailTableData['dDataSourceTable'];
			
			if( $detailTableData['dType'] == PAGE_LIST && !$this->permis[ $dDataSourceTable ]["search"] )
				continue;
			
			$masterKeys[ $dDataSourceTable ] = array();
			foreach($this->masterKeysByD[$i] as $idx => $m) 
			{
				$curM = $m;
				if( $this->pageType == PAGE_REPORT )
					$curM = goodFieldName($curM).'_dbvalue';
				
				$masterKeys[ $dDataSourceTable ]["masterkey".($idx + 1)] = $data[ $curM ];
			}
		}

		return $masterKeys;
	}
	
	/**
	 * call addGoogleMapData before call  proccessRecordValue!!!
	 * @param String fName
	 * @param &Array data
	 * @param Array keys
	 * @param String editLink
	 * @return Array
	 */
	function addGoogleMapData($fName, &$data, $keys = array(), $editLink = '')
	{		
		$fieldMap = $this->pSet->getMapData( $fName );
		
		$mapData = array();
		$mapData['fName'] = $fName;
		$mapData['zoom'] = isset( $fieldMap['zoom'] ) ? $fieldMap['zoom'] : '';
		$mapData['type'] = 'FIELD_MAP';
		$mapData['mapFieldValue'] = $data[ $fName ];
		
		$address = $data[ $fieldMap['address'] ] ? $data[ $fieldMap['address'] ] : "";
		$lat =  str_replace(",", ".", ( $data[ $fieldMap['lat'] ] ? $data[ $fieldMap['lat'] ] : ''));
		$lng =  str_replace(",", ".", ($data[ $fieldMap['lng'] ] ? $data[ $fieldMap['lng'] ] : ''));
		$desc = $data[ $fieldMap['desc'] ] ? $data[ $fieldMap['desc'] ] : $address;
		  
		$viewLink = "";
		if ( $this->pageType != PAGE_VIEW && $this->viewAvailable() )
			$viewLink = GetTableLink( $this->shortTableName, "view", $editLink );	

		$mapData['markers'][] = array(
			'address' => $address, 
			'lat' => $lat, 
			'lng' => $lng, 
			'link' => $viewLink, 
			'desc' => $desc, 
			'recId' => $this->recId, 
			'keys' => $keys, 
			'mapIcon' => $this->pSet->getMapIcon( $fName, $data )
		); 
		
		$mapId = 'littleMap_'.GoodFieldName( $fName ).'_'.$this->recId;
		$this->googleMapCfg['mapsData'][ $mapId ] = $mapData;
		$this->googleMapCfg['fieldMapsIds'][] = $mapId;
		
		return $this->googleMapCfg['mapsData'][ $mapId ];
	}

	/**
	 * @param &Array data
	 * @return Array
	 */	
	protected function getDashMapsIconsData( &$data )
	{
		$mapIconsData =  array();
		
		if( !$this->dashTName )
			return $mapIconsData;
			
		foreach( $this->dashSet->getDashboardElements() as $dElem ) 
		{
			if( $dElem["table"] != $this->tName || $dElem["type"] != DASHBOARD_MAP )
				continue;
				
			$mapIconsData[ $dElem["elementName"] ]	= $this->dashSet->getDashMapIcon( $dElem["elementName"], $data );
		}
		
		return $mapIconsData;	
	}
	
	/**
	 * @param &Array data
	 * @return Array
	 */	
	protected function getFieldMapIconsData( &$data )
	{
		$iconsData = array();
		
		if( $this->pSet->isUseFieldsMaps() )
		{
			foreach($this->pSet->getFieldsList() as $f)
			{
				if( $this->pSet->getViewFormat($f) == FORMAT_MAP  )
					$iconsData[ $f ] = $this->pSet->getMapIcon($f, $data);
			}
		}
		
		return $iconsData;
	}
	
	function initGmaps()
	{
		if( !$this->googleMapCfg['isUseGoogleMap'] )
			return;
			
		foreach ($this->googleMapCfg['mainMapIds'] as $mapId)
		{
			if ($this->googleMapCfg['mapsData'][$mapId]['showCenterLink'] === 1)
			{
				$this->googleMapCfg['centerLinkText'] = $this->googleMapCfg['mapsData'][$mapId]['centerLinkText'];
				break;
			}
		}
		
		$this->jsSettings["tableSettings"][$this->tName]["editAvailable"] = $this->editAvailable();
		$this->jsSettings["tableSettings"][$this->tName]["viewAvailable"] = $this->viewAvailable();
		
		$this->includeOSMfile();
		$this->AddJSFile("include/runnerJS/MapManager.js", "include/runnerJS/ControlConstants.js");
		$this->AddJSFile("include/runnerJS/".$this->getIncludeFileMapProvider(),"include/runnerJS/MapManager.js");
		
		$this->googleMapCfg['id'] = $this->id;
		
		if( !$this->googleMapCfg['APIcode'] )
			$this->googleMapCfg['APIcode'] = '';	

		$this->controlsMap['gMaps'] = &$this->googleMapCfg;			
	}
	
	function addCenterLink(&$value, $fName)
	{
		if( !$this->googleMapCfg['isUseMainMaps'] )
			return $value;

		foreach ($this->googleMapCfg['mainMapIds'] as $mapId)
		{
			// if no center link than continue;
			if ($this->googleMapCfg['mapsData'][$mapId]['addressField'] != $fName || !$this->googleMapCfg['mapsData'][$mapId]['showCenterLink'])
				continue;
			
			// if use user defined link if prop = 1 or use value if prop = 2				
			if($this->googleMapCfg['mapsData'][$mapId]['showCenterLink'] === 1)
				$value = $this->googleMapCfg['mapsData'][$mapId]['centerLinkText'];					
			
			return '<a href="#" type="centerOnMarker'.$this->id.'" recId="'.$this->recId.'">'.$value.'</a>';				
		}
		
		return $value;		
	}

	/**
	 * Get geo coordinates by address
	 * @intellisense
	 * @param String values
	 */
	function getGeoCoordinates($address)
	{
		return getLatLngByAddr($address);
	}
	
	/**
	 * Glue text adress from adress fields 
	 * @intellisense
	 * @param Array values
	 */
	function glueAddressByAddressFields($values)
	{
		$address = "";
		$geoData = $this->pSet->getGeocodingData();

		foreach ($geoData["addressFields"] as $field )
		{
			$addressField = trim($values[$field]);
			if ( isset($values[$field]) && strlen($addressField) )
			{
				$address .= $addressField . " ";
			}
		}

		return trim($address);
	}

	/**
	 * Update 'latitude' and 'longitude' field's values
	 * @intellisense
	 * @param &Array values
	 * @param Array oldvalues (optional)
	 */
	function setUpdatedLatLng(&$values, $oldvalues = null) 
	{
		//check if 'UpdateLatLng' is ticked for a table
		if( !$this->pSet->isUpdateLatLng() ) 
			return;

		$mapData = $this->pSet->getGeocodingData();
		$address = $this->glueAddressByAddressFields($values);

		if( $address == "" )
			return;

		if ( !is_null($oldvalues) ) {
			$oldaddress = $this->glueAddressByAddressFields($oldvalues);
		}
		else if ( trim($values[$mapData['latField']]) != "" && trim($values[$mapData['lngField']]) != ""  )
		{
			return;
		}

		// check if the actual map's address value were added/changed and lat/lng not empty
		if ( $oldvalues && trim($oldvalues[$mapData['latField']]) != "" && trim($oldvalues[$mapData['lngField']]) != "" && $address == $oldaddress ) 
			return;

		//get updated coordinates
		$location = $this->getGeoCoordinates($address);
		if( !$location ) 
			return; 

		$values[ $mapData['latField'] ] = $location['lat'];
		$values[ $mapData['lngField'] ] = $location['lng'];
	}
	
	/**
	 * @return String
	 */
	protected function getWhereByMap()
	{
		if( !$this->mapRefresh || !count( $this->vpCoordinates ) )
			return "";

		$tGrid = $this->hasTableDashGridElement();	
			
		foreach( $this->dashSet->getDashboardElements() as $dElem ) 
		{
			if( $dElem["table"] == $this->tName && $dElem["type"] == DASHBOARD_MAP && ( $dElem["updateMoved"] || !$tGrid ) )				
				return $this->getLatLngWhere( $dElem["latF"], $dElem["lonF"] );
		}
		
		return "";		
	}
	
	/**
	 * @param String latFName
	 * @param String lngFName
	 * @return String 
	 */
	protected function getLatLngWhere( $latFName, $lngFName )
	{
		if( !$this->mapRefresh || !count( $this->vpCoordinates ) )
			return "";
			
		$latSQLName = $this->getFieldSQLDecrypt( $latFName );
		$lngSQLName = $this->getFieldSQLDecrypt( $lngFName );
		
		$s = $this->cipherer->MakeDBValue( $latFName, $this->vpCoordinates["s"], "", true );
		$n = $this->cipherer->MakeDBValue( $latFName, $this->vpCoordinates["n"], "", true );
		$w = $this->cipherer->MakeDBValue( $lngFName, $this->vpCoordinates["w"], "", true );
		$e = $this->cipherer->MakeDBValue( $lngFName, $this->vpCoordinates["e"], "", true );
		
		if( $this->vpCoordinates["w"] <= $this->vpCoordinates["e"] )
			return $latSQLName.">=".$s." AND ".$latSQLName."<=".$n." AND ".$lngSQLName."<=".$e." AND ".$lngSQLName.">=".$w; 		
		else
			return $latSQLName.">=".$s." AND ".$latSQLName."<=".$n." AND (".$lngSQLName."<=".$e." OR ".$lngSQLName.">=".$w.")";	
	}	
	
	/**
	 * A stub. Get the page's fields list
	 * @return Array
	 */
	protected function getPageFields()
	{
		return $this->pSet->getFieldsList();
	}
	
	/**
	 * Get permissions for pages
	 * @intellisense
	 */
	function getPermissions($tName = "") 
	{
		$resArr = array();
		
		if(!$tName)
			$tName = $this->tName;
		$strPerm = GetUserPermissions($tName);
		
		if(isLogged())
		{
			$resArr["add"]=(strpos($strPerm, "A") !== false);
			$resArr["delete"]=(strpos($strPerm, "D") !== false);
			$resArr["edit"]=(strpos($strPerm, "E") !== false);
		}
		$resArr["search"]=(strpos($strPerm, "S") !== false);
		$resArr["export"]=(strpos($strPerm, "P") !== false);
		$resArr["import"]=(strpos($strPerm, "I") !== false);
		
		return $resArr;
	}
		
	/**
	 * Check is event exists on current page
	 * @param {string} - event name
	 * @intellisense
	 */
	function eventExists($name)
	{
		if(!$this->eventsObject)
			return false;
		return $this->eventsObject->exists($name);
	}
	
	function events() 
	{
		return $this->eventsObject;
	}
	
	/**
	 * Check is googlemaps exists on current page
	 *
	 * @intellisense
	 */	
	function mapsExists()
	{
		if(!$this->eventsObject)
			return false;
		return $this->eventsObject->existsMap($this->pageType);
	}
	
	/**
	 * @return Array
	 */
	protected function getOrderClauseFieldsList()
	{
		require_once(getabspath('classes/orderclause.php'));
		$orderClause = new OrderClause($this);
		$orderClause->init();
		
		if( !$this->pSet->hasListPage() || !count($orderClause->fieldsList) )
			$orderClause->adjustFiledList();
		
		return $orderClause->fieldsList;	
	}
	
	/**
	 * @return Boolean
	 */
	protected function hasTableDashGridElement()
	{
		if( !$this->dashSet )
			return false;
			
		foreach( $this->dashSet->getDashboardElements() as $dElem ) 
		{
			if( $dElem["table"] == $this->tName && $dElem["type"] == DASHBOARD_LIST )
				return true;
		}
		
		return false;	
	}
	
	/**
	 * @return Boolean
	 */	
	protected function hasDashMapElement()
	{
		if( !$this->dashSet )
			return false;
			
		foreach( $this->dashSet->getDashboardElements() as $dElem ) 
		{
			if( $dElem["table"] == $this->tName && $dElem["type"] == DASHBOARD_MAP )
				return true;
		}
		
		return false;		
	}
	
	/**
	 * @param &Array data
	 * @param String securityMode	
	 * @param &Array next	
	 * @param &Array prev
	 * @param Boolean onDash
	 */
	function getNextPrevRecordKeys(&$data, $securityMode, &$next, &$prev, $onDash = false)
	{
		$next = array();
		$prev = array();
	
		if( @$_SESSION[$this->sessionPrefix."_noNextPrev"] )
			return;

		$query = $this->pSet->getQueryObject();
		if( $query === null )
			return;
			
		$fieldsList = $this->getOrderClauseFieldsList();
		if( !count($fieldsList) )
		{
			$_SESSION[$this->sessionPrefix."_noNextPrev"] = 1;
			return;
		}	

		$orderData = $this->getSQLPrevNextOrederClauses( $fieldsList );
		$whereData = $this->getSQLPrevNextWhereClauses( $fieldsList, $data, $query->HasGroupBy() );
		
		if( $whereData["where_next"] == "" || $orderData["order_next"] == "" 
			|| $whereData["where_prev"] == "" || $orderData["order_prev"] == "")
		{
			$_SESSION[$this->sessionPrefix."_noNextPrev"] = 1;
			return;
		}
			
		$SQLData = $this->getPrevNextSQL( $query, $whereData, $orderData, $onDash, $securityMode );	
		
		$this->updateActualListPageNumber( $whereData["where_prev"], $SQLData["sql_prev"] );
		
		//	add record count options	
		$sql_next = applyDBrecordLimit( $SQLData["sql_next"], 1, $this->connection->dbType );	
		$sql_prev = applyDBrecordLimit( $SQLData["sql_prev"], 1, $this->connection->dbType );

		$next = $this->getKeysDataForPrevNext( $sql_next );
		$prev = $this->getKeysDataForPrevNext( $sql_prev );
	}
	
	/**
	 * Set the table's 'pagenumber' session variable
	 * @param String prevWhere
	 * @param String sql_prev
	 */
	protected function updateActualListPageNumber( $prevWhere, $sql_prev )
	{
		if( $this->connection->dbType == nDATABASE_MSSQLServer )
			return;	

		//return to actual list page
		if( $prevWhere == " 1=0 " )
			$_SESSION[$this->sessionPrefix."_pagenumber"] = 1;
		else
		{
			$pageSQL = "select count(*) from (".$sql_prev.") tcount";
			$pageRow = $this->connection->query( $pageSQL )->fetchNumeric();
			$currentRow = $pageRow[0];
			
			if( $this->pageSize > 0 )
				$pageSize = $this->pageSize;
			else
				$pageSize = $this->pSet->getInitialPageSize();
			
			$this->myPage = floor($currentRow / $pageSize) + 1;
			$_SESSION[$this->sessionPrefix."_pagenumber"] = $this->myPage;
		}	
	}
	
	/**
	 * @param Object &query	
	 * @param Boolean onDash
	 * @param String securityMode
	 * @return String
	 */
	protected function getRefinedPageWhere( &$query, $onDash, $securityMode )
	{
		$where = $_SESSION[$this->sessionPrefix."_where"];
		if( $onDash && !$this->searchClauseObj->bIsUsedSrch )
			$where = "";
		
		if( $onDash && $this->searchClauseObj->bIsUsedSrch )
		{
			$whereComponents = $this->getWhereComponents();
			
			$where = SecuritySQL($securityMode, $this->tName);
			$where = whereAdd($where, $whereComponents["searchWhere"]);
			$_SESSION[$this->sessionPrefix."_where"] = $where;
		}
		elseif( !$onDash && !strlen($where) )
		{
			$where = SecuritySQL($securityMode, $this->tName);		
		}
		
		return whereAdd($where, $query->Where()->toSql($query));	
	}
	
	/**
	 * @param Object &query
	 * @param Boolean onDash
	 * @return String
	 */
	protected function getRefinedPageHaving( &$query, $onDash )
	{
		$having = $_SESSION[$this->sessionPrefix."_having"];
		if( $onDash && $this->searchClauseObj->bIsUsedSrch )
		{
			$whereComponents = $this->getWhereComponents();
			$having = whereAdd($having, $whereComponents["searchHaving"]);
			$_SESSION[$this->sessionPrefix."_having"] = $having;
		} 

		return whereAdd($having, $query->Having()->toSql($query));	
	}
	
	/**
	 * 	Make next/prev ORDER BY strings
	 * @param Array fieldsList				The key and orderby fields
	 * @param String option (optional)
	 * @return Array
	 */
	function getSQLPrevNextOrederClauses( $fieldsList, $option = "both" )
	{
		$prevOrderParts = array();
		$nextOrderParts = array();
	
		if( $option != "both" && $option != "next" && $option != "prev")
			$option = "both";	
	
		$isNext = $option == "both" || $option == "next";
		$isPrev = $option == "both" || $option == "prev";
	
		for($i = 0; $i < count($fieldsList); $i++)
		{
			$field = $fieldsList[$i];
			if( !$this->pSet->GetFieldByIndex($field->fieldIndex) )
				continue;
			
			if( $isNext ) 
				$nextOrderParts[] = $field->fieldIndex." ".$field->orderDirection;
				
			if( $isPrev ) 
				$prevOrderParts[] = $field->fieldIndex." ".($field->orderDirection == "DESC" ? "ASC" : "DESC");
		}
		
		if( !count($nextOrderParts) )
			$nextOrder = "";
		else
			$nextOrder = " ORDER BY " . implode(",", $nextOrderParts);	
		
		if( !count($prevOrderParts) )
			$prevOrder = "";
		else
			$prevOrder = " ORDER BY " . implode(",", $prevOrderParts);	

	
		return array(
			"order_prev" => $prevOrder,
			"order_next" => $nextOrder
		);
	}
	
	/**
	 * @param Array fieldsList  		The key and orderby fields
	 * @param Array data				The page's record data
	 * @param String option (optional)
	 * @return Array
	 */
	function getSQLPrevNextWhereClauses( $fieldsList, $data, $hasGroupBy, $option = "both" )
	{		
		if( $option != "both" && $option != "next" && $option != "prev")
			$option = "both";
		
		$isNext = $option == "both" || $option == "next";
		$isPrev = $option == "both" || $option == "prev";
		
		$where_next = "";
		$where_prev = "";
		
		// make next & prev where expressions		
		$nextExpr = "";
		$prevExpr = "";
		$tail = "";
		for($i = 0; $i < count($fieldsList); $i++)
		{
			$field = $fieldsList[$i];
			$fieldName = $this->pSet->GetFieldByIndex( $field->fieldIndex );
			$fieldType = $this->pSet->getFieldType( $fieldName );
			if( !$fieldName )
				continue;
				
			if( !$hasGroupBy )
				$fullName = $this->getFieldSQLDecrypt( $fieldName );
			else
				$fullName = $this->connection->addFieldWrappers( $fieldName );
			
			$asc = $field->orderDirection == "ASC";
			
			if( !is_null($data[ $fieldName ]) || IsCharType($fieldType) )
			{
			//	current field value is not null
				$value = $this->cipherer->MakeDBValue($fieldName, $data[ $fieldName ], "", true);

				if( $isNext )
					$nextExpr = $fullName. ($asc ? ">" : "<") .$value . ( $asc ? "" : " or ".$fullName." IS NULL");
				if( $isPrev )
					$prevExpr = $fullName. ($asc ? "<" : ">") .$value . ( $asc ? " or ".$fullName." IS NULL" : "");
				
				if($i < count($fieldsList) - 1)
				{
					if( $isNext )
						$nextExpr .= " or ".$fullName."=".$value;
					if( $isPrev )
						$prevExpr .= " or ".$fullName."=".$value;
				}
			}
			else
			{
			//	current field value is null
				if( $isNext )
					$nextExpr = $asc ? $fullName." IS NOT NULL" : "";
				if( $isPrev )
					$prevExpr = $asc ? "" : $fullName." IS NOT NULL";				
				
				if($i < count($fieldsList) - 1)
				{
					if( $isNext )
						$nextExpr .= ($asc ? " or " : "") . $fullName." IS NULL";
					if( $isPrev )
						$prevExpr .= ($asc ? "" : " or ") . $fullName." IS NULL";
				}		
			}
			
			if( $isNext && $nextExpr == "" )
			{
				$where_next = " 1=0 ";
				break;
			}
			if( $isPrev && $prevExpr == "" )
			{
				$where_prev = " 1=0 ";
				break;
			}
			
			// append expression to where clause			
			if( $isNext	)
				$where_next.= ($i > 0 ? " AND " : "")."(".$nextExpr;
			if( $isPrev )
				$where_prev.= ($i > 0 ? " AND " : "")."(".$prevExpr;
			
			$tail.= ")";
		}
		
		if( $isNext	&& $where_next != " 1=0 ")
			$where_next = $where_next.$tail;
		if( $isPrev && $where_prev != " 1=0 " )
			$where_prev = $where_prev.$tail;

		return array(
			"where_next" => $where_next,
			"where_prev" => $where_prev
		);		
	}
	
	/**
	 *
	 */
	protected function getPrevNextSQL( &$query, $whereData, $orderData, $onDash, $securityMode, $option = "both" )
	{
		if( $option != "both" && $option != "next" && $option != "prev")
			$option = "both";
		
		$isNext = $option == "both" || $option == "next";
		$isPrev = $option == "both" || $option == "prev";
		
		$where = $this->getRefinedPageWhere( $query, $onDash, $securityMode );
		$joinFromPart = $_SESSION[$this->sessionPrefix."_joinFromPart"];
		
		if( $onDash && $this->mapRefresh )
			$where = whereAdd( $where, $this->getWhereByMap() );
		
		$query->ReplaceFieldsWithDummies( $this->pSet->getBinaryFieldsIndices() );	
		if( !$query->HasGroupBy() )
		{		
			if( $isNext )
				$sql_next = $query->toSql( whereAdd($whereData["where_next"], $where), $orderData["order_next"], null, false, $joinFromPart);
			if( $isPrev )
				$sql_prev = $query->toSql( whereAdd($whereData["where_prev"], $where), $orderData["order_prev"], null, false, $joinFromPart);
		}
		else
		{ 		
			$sql = "select * from ".
				"(".$query->toSql($where, "", $this->getRefinedPageHaving( $query, $onDash ), false, $joinFromPart).") prevnextquery"; 
			
			if( $isNext )
				$sql_next = $sql." WHERE ".$whereData["where_next"].$orderData["order_next"];
			if( $isPrev )
				$sql_prev = $sql." WHERE ".$whereData["where_prev"].$orderData["order_prev"];
		}
		
		return array(
			"sql_prev" => $sql_prev,
			"sql_next" => $sql_next
		);
	}
	
	/**
	 * Get an ORDER BY clause set on the corresponding list page 
	 * to retrieve the right record on the edit/view pages 
	 * without 'editid' params passed 
	 * @return String
	 */
	protected function getOrderByClause()
	{
		require_once(getabspath('classes/orderclause.php'));
		$orderClause = new OrderClause($this);
		$orderClause->init();

		$orderByList = array();
		
		foreach( $orderClause->fieldsList as $fieldObj )
		{
			$fieldName = $this->pSet->GetFieldByIndex($fieldObj->fieldIndex);
			if( !$fieldName )
				continue;
				
			if( ! $this->gQuery->HasGroupBy() )
				$fullName = $this->getFieldSQLDecrypt( $fieldName );
			else
				$fullName = $this->connection->addFieldWrappers( $fieldName );
				
			$orderByList[] = $fullName." ".$fieldObj->orderDirection;	
		}
		
		if( count($orderByList) )
			return " ORDER BY ".implode(",", $orderByList);
		
		return "";	
	}	
	
	/**
	 * @param String sql
	 * @return Array
	 */
	protected function getKeysDataForPrevNext( $sql )
	{
		$qResult = $this->connection->query( $sql );

		$data = array();
		if( $row = $this->cipherer->DecryptFetchedArray( $qResult->fetchAssoc() ) )
		{
			foreach($this->pSet->getTableKeys() as $i => $k)
			{
				$data[$i] = $row[$k];
			}
		}	

		$qResult->closeQuery();
		
		return $data;
	}

	/**
	 * Assign xt variables connected to the'Prev/Next' buttons
	 * @param Boolean showNext
	 * @param Boolean showPrev
	 * @param Boolean dashBased
	 */
	public function assignPrevNextButtons( $showNext, $showPrev, $dashGridBased = false )
	{	
		if( !$this->pSet->useMoveNext() )
			return;	
			
		if( $showNext || $dashGridBased )
		{
			$this->xt->assign("next_button", true);			
			$this->xt->assign("nextbutton_attrs", 'id="nextButton'.$this->id.'"');
			if ( $dashGridBased ) 
				$this->xt->assign("nextbutton_class", "rnr-invisible-button");
		}
		else if( $showPrev )
		{
			$this->xt->assign("next_button", true);
			$this->xt->assign("nextbutton_class", "rnr-invisible-button");
		}
		else 
			$this->xt->assign("next_button", false);	
				
		if( $showPrev || $dashGridBased )
		{
			$this->xt->assign("prev_button", true);	
			$this->xt->assign("prevbutton_attrs", 'id="prevButton'.$this->id.'"');
			if ( $dashGridBased ) 
				$this->xt->assign("prevbutton_class", "rnr-invisible-button");			
		}
		else if( $showNext )
		{
			$this->xt->assign("prev_button", true);
			$this->xt->assign("prevbutton_class", "rnr-invisible-button");
		}
		else
			$this->xt->assign("prev_button", false);			
	}

	/**
	 * Check captcha
	 * @return Boolean	 
	 */
	function checkCaptcha() 
	{
		if ( !$this->captchaExists() )
			return true;

		if ( !isset($_SESSION["count_passes_captcha"]) )
		{
			if ( !isset($_SESSION["isCaptcha" . $this->getCaptchaId() . "Showed"]) && $this->captchaValue == '' )
				return true;

			$nCaptchaType = 0;
			if ($nCaptchaType==0 && @strtolower($this->captchaValue) != strtolower(@$_SESSION["captcha_" . $this->getCaptchaId()]) )
			{
				$this->isCaptchaOk = false;
				$this->message = mlang_message("SEC_INVALID_CAPTCHA_CODE");
			}
			else if ($nCaptchaType==1 && !verifyRecaptchaResponse($this->captchaValue) )
			{
				$this->isCaptchaOk = false;
			}
			else
			{
				if ($nCaptchaType == 0 && isset($_SESSION["captcha_" . $this->getCaptchaId()]) )
					unset($_SESSION["captcha_" . $this->getCaptchaId()]);
				if ( isset($_SESSION["isCaptcha" . $this->getCaptchaId() . "Showed"]) )
					unset($_SESSION["isCaptcha" . $this->getCaptchaId() . "Showed"]);

				$_SESSION["count_passes_captcha"] = 0;
			}	
		}
		else if ( $this->captchaPassesCount != 1000 )
		{
			$_SESSION["count_passes_captcha"] = $_SESSION["count_passes_captcha"] + 1;
		}

		return $this->isCaptchaOk;
	}	

	function displayCaptcha()
	{
		$captchaFieldName  = $this->getCaptchaFieldName();
		if( ( !isset($_SESSION["count_passes_captcha"]) ) or ( $_SESSION["count_passes_captcha"] >= $this->captchaPassesCount ) )
		{
			$this->xt->assign("captcha_block", true);
			$this->xt->assign("captcha", $this->getCaptchaHtml($captchaFieldName));
			$this->xt->assign("captcha_field_name", $captchaFieldName);
			if ( isset($_SESSION["count_passes_captcha"]) )
				unset($_SESSION["count_passes_captcha"]);

			$_SESSION["isCaptcha" . $this->getCaptchaId() . "Showed"] = 1;
		}

		//create control and settings for captcha field, if it show on page 
		$controls = array('controls'=>array());
		$controls['controls']['ctrlInd'] = 0;
		$controls['controls']['id'] = $this->id;
		$controls['controls']['fieldName'] = $captchaFieldName;
		$controls['controls']['mode'] = $this->pageType;
		if ( !$this->isCaptchaOk )
			$controls["controls"]["isInvalid"] = true;


		$this->fillControlsMap($controls);
		$this->addExtraFieldsToFieldSettings(true);		
	}

	function getCaptchaHtml($_captchaFieldName)
	{		
		$captchaHTML = '<div class="captcha_block">';

		$typeCodeMessage = mlang_message("SEC_TYPETHECODE");
		$path = GetCaptchaPath();
		$swfPath = GetCaptchaSwfPath();

		$captchaHTML .= '
			<div style="height:65px;">
			<object width="210" height="65" data="'.$swfPath.'?path='.$path.'?id='.$this->getCaptchaId().'" type="application/x-shockwave-flash">
				<param value="'.$swfPath.'?path='.$path.'?id='.$this->getCaptchaId().'" name="movie"/>
				<param value="opaque" name="wmode"/>
				<a href="http://www.macromedia.com/go/getflashplayer"><img alt="Download Flash" src=""/></a>
			</object>
			</div>';
			$captchaHTML .= '<div style="white-space: nowrap;">'.$typeCodeMessage.':</div>
			<span id="edit'.$this->id.'_'.$_captchaFieldName.'_0">
				<input type="text" value="" class="captcha_value" name="value_'.$_captchaFieldName.'_'.$this->id.'" style="" id="value_'.$_captchaFieldName.'_'.$this->id.'"/>
				<font color="red">*</font>
			</span>';

		$captchaHTML.='</div>';

		return $captchaHTML;
	}

	function getCaptchaId() {
		return $this->id;
	}

	/**
	 * Get captcha field name
	 *
	 * @intellisense
	 */
	function getCaptchaFieldName()
	{		
		return "captcha";
	}

	/**
	 * Assign the recsPerPage xt variable 
	 */
	function createPerPage()
	{
		if( false && $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
		{
			return $this->bsCreatePerPage();
		}
		$classString = "";
		$allMessage = mlang_message("SHOW_ALL");
		if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
		{
			$classString = 'class="form-control"';
			$allMessage = mlang_message("ALL");
		}
		$rpp = "<select ".$classString." id=\"recordspp".$this->id."\">";
		
		for($i=0;$i<count($this->arrRecsPerPage);$i++)
		{
			if($this->arrRecsPerPage[$i]!=-1)
				$rpp.= "<option value=\"".$this->arrRecsPerPage[$i]."\" ".($this->pageSize == $this->arrRecsPerPage[$i] ? "selected" : "").">".$this->arrRecsPerPage[$i]."</option>";
			else
				$rpp.= "<option value=\"-1\" ".($this->pageSize == $this->arrRecsPerPage[$i] ? "selected" : "").">".$allMessage."</option>";
		}

		$rpp.="</select>";
		
		$this->xt->assign("recsPerPage", $rpp);
	}
	
	function bsCreatePerPage()
	{
		$txtVal = $this->pageSize;
		if( $this->pageSize == -1 )
			$txtVal = mlang_message("SHOW_ALL");
		$rpp = '<div class="dropdown btn-group">
			<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><span class="dropdown-text">' . $txtVal . '</span> <span class="caret"></span></button>
			<ul class="dropdown-menu pull-right" role="menu">';
		for($i=0;$i<count($this->arrRecsPerPage);$i++)
		{
			$val = $this->arrRecsPerPage[$i];
			$txtVal = $val;
			if( $val == -1 )
				$txtVal = mlang_message("SHOW_ALL");
			$selectedAttr = '';
			if( $this->pageSize == $val )
				$selectedAttr = 'aria-selected="true" class="active"';
			else
				$selectedAttr = 'aria-selected="false"';
			
			$rpp .= '<li ' . $selectedAttr . '><a data-action="' . $val . '" class="dropdown-item dropdown-item-button">' . $txtVal . '</a></li>';
		}
			
		$rpp .= '</ul></div>';
		$this->xt->assign("recsPerPage", $rpp);
	}	
	
	function ProcessFiles()
	{
		foreach($this->filesToDelete as $f)
		{
			$f->Delete();
		}
		foreach($this->filesToMove as $f)
		{
			$f->Move();
		}
		foreach($this->filesToSave as $f)
		{
			$f->Save();
		}
	}
	
	/**
	 * Use for count details recs number, if subQueryes not supported, or keys have different types
	 *
	 * @param integer $i
	 * @param array $detailid
	 * @intellisense
	 */
	function countDetailsRecsNoSubQ($dInd, &$detailid) 
	{
		global $tables_data, $masterTablesData, $detailsTablesData, $allDetailsTablesArr, $cman;

		$dDataSourceTable = $this->allDetailsTablesArr[ $dInd ]['dDataSourceTable'];
		
		$detPSet = $this->pSet->getTable($dDataSourceTable);
		$detCipherer = new RunnerCipherer( $dDataSourceTable, $detPSet );
		$detConnection = $cman->byTable( $dDataSourceTable );

		$detailsQuery = $detPSet->getSQLQuery();
		$dSqlWhere = $detailsQuery->WhereToSql();
			
		$detailKeys = $detPSet->getDetailKeysByMasterTable($this->tName);
		
		$securityClause = SecuritySQL("Search", $dDataSourceTable);
		
		// add where 
		if(strlen($securityClause))
			$dSqlWhere = whereAdd($dSqlWhere, $securityClause);
			
		$masterwhere = "";
		foreach($this->masterKeysByD[$dInd] as $idx => $val) 
		{
			if($masterwhere)
			{
				$masterwhere.= " and ";
			}
			$mastervalue = $detCipherer->MakeDBValue($detailKeys[$idx], $detailid[$idx], "", true);
			
			if($mastervalue == "null")
				$masterwhere .= RunnerPage::_getFieldSQL($detailKeys[$idx], $detConnection, $detPSet)." is NULL ";
			else
				$masterwhere .= RunnerPage::_getFieldSQLDecrypt($detailKeys[$idx], $detConnection, $detPSet, $detCipherer)."=".$mastervalue;
		}
		
		return SQLQuery::gSQLRowCount_int( $detailsQuery->HeadToSql(), $detailsQuery->FromToSql(), $dSqlWhere, $detailsQuery->GroupByToSql()
			, $detailsQuery->Having()->toSql($detailsQuery), $masterwhere, "", $detConnection );	
		
	}

	function noRecordsMessage()
	{
		$isSearchRun = count($this->searchClauseObj->getSearchFields()) ? true : false;
		if($this->pSetSearch->noRecordsOnFirstPage() && !$isSearchRun)
			return mlang_message("NOTHING_TO_SEE");
		elseif(!$this->rowsFound && !$isSearchRun && !$this->searchClauseObj->filtersActivated)
			return mlang_message("NO_DATA_YET");
		elseif(($isSearchRun || $this->searchClauseObj->filtersActivated)&& !$this->rowsFound)	
			return mlang_message("NO_RECORDS");
	}
	
	function showNoRecordsMessage()
	{
		$message = ($this->is508 == true ? "<a name=\"skipdata\"></a>" : "").$this->noRecordsMessage();
		$message= "<span name=\"notfound_message".$this->id."\">".$message."</span>";
		$this->xt->assign("message",$message);
		$this->xt->assign( "message_class", "alert-warning");
		$this->xt->assign("message_block",true);
	}
	
	/**
	 * Calcs pagination info
	 *
	 * @intellisense
	 */
	function buildPagination() 
	{
		$activeClass = "";
		$nonActiveClass = "pag_n";
		$separator = "&nbsp;";
		$advSeparator = "&nbsp;:&nbsp;";
		if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
		{
			$activeClass = "active";
			$nonActiveClass = "";
			$separator = "";
			$advSeparator = "";
		}
			
		//	hide colunm headers if needed
		if($this->pageSize && $this->pageSize!=-1)
			$this->maxPages = ceil($this->numRowsFromSQL / $this->pageSize);
		if($this->myPage > $this->maxPages)
			$this->myPage = $this->maxPages;
		if($this->myPage < 1)
			$this->myPage = 1;
		$this->recordsOnPage = $this->numRowsFromSQL -($this->myPage - 1) * $this->pageSize;
		if($this->recordsOnPage > $this->pageSize && $this->pageSize!=-1)
			$this->recordsOnPage = $this->pageSize;
		
		$this->colsOnPage = $this->recsPerRowList;
		if($this->colsOnPage > $this->recordsOnPage && $this->listGridLayout != gltVERTICAL)
			$this->colsOnPage = $this->recordsOnPage;
		if($this->colsOnPage < 1)
			$this->colsOnPage = 1;
			
		//	 Pagination:
		if((! $this->numRowsFromSQL) && ($this->deleteMessage == ''))
		{
			$this->rowsFound = false;
			$this->showNoRecordsMessage();
			
			if($this->listAjax || $this->mode == LIST_LOOKUP)
			{
				$this->xt->assign("pagination_block", true);
				$this->xt->displayBrickHidden("pagination");
			}
		} 
		else
		{
			$this->rowsFound = true;
			$this->xt->assign("details_found", true );
			$this->xt->assign("message_block",false);
			if($this->listAjax || $this->mode == LIST_LOOKUP)
			{
				$this->xt->assign("message_block",true);
				$this->xt->displayBrickHidden("message");
			}
			else if ($this->deleteMessage != ''){
				$this->xt->assign("message_block",true);
			}
			
			$this->xt->assign("records_found", $this->numRowsFromSQL);
			$this->jsSettings["tableSettings"][$this->tName]['maxPages'] = $this->maxPages;
			
			$firstDisplayed = ( $this->myPage - 1 )	 * $this->pageSize + 1;
			$lastDisplayed = ( $this->myPage ) * $this->pageSize;
			if( $this->pageSize < 0 || $lastrecord > $this->numRowsFromSQL )
				$lastDisplayed = $this->numRowsFromSQL;

			$this->prepareRecordsIndicator( $firstDisplayed, $lastDisplayed, $this->numRowsFromSQL );
			
			$this->xt->assign("page", $this->myPage);
			$this->xt->assign("maxpages", $this->maxPages);
			
			$this->xt->assign("pagination_block", false);
			
			$limit=10;
			if ($this->mobileTemplateMode())	
				$limit=5;
			//	write pagination
			if($this->maxPages > 1) 
			{
				$this->xt->assign("pagination_block", true);
				$pagination = '';
				$counterstart = $this->myPage - ($limit-1);
				if($this->myPage % $limit != 0)
					$counterstart = $this->myPage -($this->myPage % $limit) + 1;
				$counterend = $counterstart + $limit-1;
				if($counterend > $this->maxPages)
					$counterend = $this->maxPages;
				if($counterstart != 1) 
				{
					$pagination.= $this->getPaginationLink(1,mlang_message("FIRST")) . $advSeparator;
					$pagination.= $this->getPaginationLink($counterstart - 1,mlang_message("PREVIOUS")).$separator;
				}
				$pageLinks = "";
				
				if(isRTL())
				{
					for($counter = $counterend; $counter >= $counterstart; $counter --) 
					{
						$pageLinks .= $separator . $this->getPaginationLink($counter,$counter, $counter == $this->myPage );
					}
				}
				else
				{
					for($counter = $counterstart; $counter <= $counterend; $counter ++) 
					{
						$pageLinks .= $separator . $this->getPaginationLink($counter,$counter, $counter == $this->myPage );
					}
				}
				
				if( $this->getLayoutVersion() != BOOTSTRAP_LAYOUT )
				{
					$pageLinks = "[" . $pageLinks . $separator . "]";
				}
				$pagination .= $pageLinks;
				if($counterend != $this->maxPages) 
				{
					$pagination.= $separator . $this->getPaginationLink($counterend + 1,mlang_message("NEXT")) . $advSeparator;
					$pagination.= $this->getPaginationLink($this->maxPages,mlang_message("LAST"));
				}
				if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
					$pagination = '<nav class="text-center"><ul class="pagination" data-function="pagination' . $this->id . '">' . $pagination . '</ul></nav>';
				else
					$pagination = "<div data-function=\"pagination" . $this->id . "\">" . $pagination . "</div>";
				$this->xt->assign("pagination", $pagination);
				
				$this->xt->assign("pagination", $pagination);
			}
			else
			{
							if($this->listAjax || $this->mode == LIST_LOOKUP)
				{
					$this->xt->assign("pagination_block", true);
					$this->xt->displayBrickHidden("pagination");
				}
			}
		}
	}

	function prepareRecordsIndicator($firstDisplayed, $lastDisplayed, $totalDisplayed)
	{
		$this->xt->assign("firstrecord", $firstDisplayed );
		$this->xt->assign("lastrecord", $lastDisplayed );
		
		$template = mlang_message("DISPLAYING");
		$template = str_replace( array( '%first%', '%last%', '%total%'), 
			array( '<span class="bs-number">'.$firstDisplayed.'</span>', 
				'<span class="bs-number">'.$lastDisplayed.'</span>', 
				'<span class="bs-number">'.$totalDisplayed.'</span>' ),
			$template );
		$this->xt->assign( "records_indicator", $template );
	}
	
	/**
	 * Get pagination link for build pagination block
	 *
	 * @return string
	 * @intellisense
	 */
	function getPaginationLink($pageNum, $linkText, $active = false)
	{
		if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
		{
			$href = GetTableLink( GetTableURL( $this->tName ), $this->pageType)."?goto=".$pageNum;
			return '<li class="' . ( $active ? "active" : "" ) . '"><a href="'.$href.'" pageNum="'.$pageNum.'" >'.$linkText.'</a></li>';
		}
		
		if( $active )
			return "<b>" . $pageNum . "</b>";
		return '<a href="#" pageNum="' . $pageNum.'" class="pag_n" style="TEXT-DECORATION: none;">'.$linkText.'</a>';
	}
	
	/**
	 * Check is current table is admin table
	 *
	 * @return bool
	 * @intellisense
	 */
	function isAdminTable()
	{
		if($this->tName)
			return $this->tName === 'admin_rights' || $this->tName === 'admin_members' || $this->tName === 'admin_users';
		else
			return false;
	}

	/**
	 * Get the field's class name to align the field's value 
	 * basing on its edti and view formats
	 * @param String f
	 * @return String
	 */
	function fieldClass($f)
	{
		if( $this->pSet->getEditFormat($f) == FORMAT_LOOKUP_WIZARD )
			return '';
			
		$format = $this->pSet->getViewFormat($f);
		
		if( $format == FORMAT_FILE ) 
			return ' rnr-field-file';
		
		if( $format == FORMAT_AUDIO )
			return ' rnr-field-audio';
		
		if( $format == FORMAT_CHECKBOX )
			return ' rnr-field-checkbox';
		
		if( $format == FORMAT_NUMBER || IsNumberType( $this->pSet->getFieldType($f) ) )
			return ' rnr-field-number';
			
		return "rnr-field-text";
	}
		
	/**
	 * buildDetailGridLinks
	 * Build master-details links href-attribute on list grid
	 * @param {array} master key values
	 * @return {array} array of links hrefs and ids
	 * @intellisense
	 */
	function buildDetailGridLinks(&$data)
	{
		$hrefs = array();
		
		foreach($this->allDetailsTablesArr as $detailsData)
		{
			$dShortTable = $detailsData['dShortTable'];
			$masterquery = "mastertable=".rawurlencode($this->tName);
			
			for($idx = 1; $idx <= count($detailsData["masterKeys"]); $idx ++)
			{
				$masterquery.= "&masterkey".($idx)."=".rawurlencode( $data[ $detailsData['dDataSourceTable'] ]["masterkey".$idx] );
			}
			
			$hrefs[] = array("id" => $this->pSet->getDPType( $detailsData['dDataSourceTable'] ) == DP_INLINE 
					? $dShortTable."_preview" : "master_".$dShortTable."_"
				, "href" => GetTableLink($dShortTable, $detailsData["dType"], $masterquery));			
		}

		return $hrefs;
	}
	
	/**
	 * Create new control (if needed) for edit field, and return it
	 * @param {string} field					field name
	 * @param {string} id (optional)			field id
	 * @param {array} extraParams (optional)
	 * @return {object} edit control
	 * @intellisense
	 */
	function getControl($field, $id = "", $extraParams = array())
	{
		return $this->controls->getControl($field, $id, $extraParams);
	}
	
	/**
	 * Create new control (if needed) for view field, and return it
	 * @param {string} field name
	 * @param {string} predefined view format 
	 * @intellisense
	 */
	function getViewControl($field, $format = null)
	{
		return $this->viewControls->getControl($field, $format);
	}
	
	function setForExportVar($forExport)
	{
		$this->viewControls->setForExportVar($forExport);
	}
	
	/**
	 * showDBValue
	 * Wrapper for ViewControl creation and showDBValue call on it
	 * @param {string} field name
	 * @param {array} associative array with record data
	 * @param {string} string with record keys and values
	 * @intellisense
	 */
	function showDBValue($field, &$data, $keylink = "")
	{
		return $this->getViewControl($field)->showDBValue($data, $keylink);
	}
	
	/**
	 * Wrapper for the ViewControl's getExportValue method
	 * @param String field
	 * @param Array &data
	 * @param String keylink (optional)
	 * @return String
	 */
	function getExportValue($field, &$data, $keylink = "")
	{
		return $this->getViewControl($field)->getExportValue($data, $keylink);
	}
		
	/**
	 * Hide the field on the page
	 * @param String fieldName
	 */
	function hideField($fieldName)
	{
		if(!is_null($this->xt))
			$this->xt->hideField($fieldName);
	}

	/**
	 * Show the hidden field on the page
	 * @param String fieldName	 
	 */
	function showField($fieldName)
	{
		if(!is_null($this->xt))
			$this->xt->showField($fieldName);
	}

	/**
	 * The settings object 'getDetailKeysByMasterTable' method's wrapper
	 * @return Array
	 */
	function getDetailKeysByMasterTable()
	{
		return $this->pSet->getDetailKeysByMasterTable($this->masterTable);
	}
	
	/**
	 * Get the page's layout
	 * @return {string}
	 */
	function getPageLayout($tName="", $pageType="", $suffix = "")
	{
		global $page_layouts;
		if(!$tName)
			$tName = $this->tName;
		if(!$pageType)
			$pageType = $this->pageType;
	
		$templateName = GetTableURL($tName)."_".$pageType;
		if($suffix)
			$templateName = $templateName."_".$suffix;
		if(!$this->isPageTableBased() || $this->pageType == PAGE_REGISTER) 
		{
			//the name of the non table page's layout
			$templateName = $pageType;
		}
		return $page_layouts[$templateName];
	}
	
	/**
	 * Check if the pabe is table based or not
	 * @return Boolean 
	 */
	function isPageTableBased()
	{
		if($this->pageType == PAGE_MENU || $this->pageType == PAGE_LOGIN || $this->pageType == PAGE_REMIND || $this->pageType == PAGE_CHANGEPASS)
		{
			return false;
		}		
		return true;
	}
	
	/**
	 * Check if the brick is set in the layout or not
	 *
	 * @param {string} $brickName
	 * @return {boolean} 	
	 */
	function isBrickSet($brickName)
	{
		$layout = $this->getPageLayout();
		if($layout) 
		{
			return $layout->isBrickSet($brickName);
		}
		return false;	
	}
	
	/**
	 * Get the brick's table name (if it's set)
	 *
	 * @param {string} $brickName
	 * @return {string} 
	 */
	function getBrickTableName($brickName)
	{
		$layout = $this->getPageLayout();
		if($layout) 
		{
			return $layout->getBrickTableName($brickName);
		}
		return "";
	}
	
	/**
	 * Sets all necessary params for the Search panel added to the non table page
	 */
	function setParamsForSearchPanel() 
	{
		if(!$this->searchPanelActivated)
		{
			return;
		}
		
		include_once(getabspath("classes/searchclause.php"));
		$this->needSearchClauseObj = true;	
		
		$seachTableName = $this->getBrickTableName("searchpanel");
		if($seachTableName)
		{
			//if the brick's table name is set it'll used as the table name for the searchpanel's ProjectSettings object
			$this->pSetSearch = new ProjectSettings($seachTableName, PAGE_SEARCH);
			//set the correct search table's name
			$this->searchTableName = $seachTableName;
			//add some globale settings for the search table
			$this->settingsMap["globalSettings"]["shortTNames"][$seachTableName] = $this->pSetSearch->getShortTableName();
			$this->permis[$this->searchTableName] = $this->getPermissions($seachTableName);
			
			if( $this->permis[$this->searchTableName]["search"] && (!$this->isPageTableBased() || $this->pageType == PAGE_REGISTER) )
			{
				//for edit controls to render correctly
				$this->tableBasedSearchPanelAdded = true;
			}
		}
	}
	
	/**
	 * Check if the search panel brick is set in the current layout
	 * $param Boplean mobile
	 * @return Boolean
	 */
	protected function checkIfSearchPanelActivated( $mobile )
	{		
		// TODO: remove after add BOOTSTRAP searchpanel
		if( $this->pageType == PAGE_CHART && $this->mode == CHART_SIMPLE ) 
			return true;

		if( $mobile && $this->pageType == PAGE_LIST ) 
			return $this->isBrickSet( "searchpanel_mobile" );
		
		if( $mobile && $this->pageType == PAGE_DASHBOARD )
			return $this->isBrickSet( "search_dashboard_m" );		
		
		if( $this->pageType == PAGE_DASHBOARD )
			return $this->isBrickSet( "search_dashboard" );
		
		return $this->isBrickSet( "searchpanel" );
	}
	
	/**
	 * Build the Search panel if the "searchpanel" brick is added to the page's layout
	 */
	protected function buildAddedSearchPanel()
	{
		if( $this->pageType != PAGE_REPORT && $this->pageType != PAGE_CHART && $this->pageType != PAGE_LIST 
			&& !($this->pageType == PAGE_ADD && $this->mode == ADD_INLINE) && !($this->pageType == PAGE_EDIT && $this->mode == EDIT_INLINE ) )
		{
			$this->buildSearchPanel();
		}
	}
	
	/**
	 * Build the activated Search panel
	 */
	public function buildSearchPanel()
	{
		if( !$this->searchPanelActivated || !$this->permis[$this->searchTableName]["search"] )
		{
			return;
		}
		
		include_once(getabspath("classes/searchpanel.php"));
		include_once(getabspath("classes/searchpanelsimple.php"));	
		include_once(getabspath("classes/searchcontrol.php"));
		include_once(getabspath("classes/panelsearchcontrol.php"));
		
		$params = array();
		$params['pageObj'] = &$this; 
		
		$searchPanelObj = new SearchPanelSimple($params);
		$searchPanelObj->buildSearchPanel();		
	}
	
	/**
	 * Build and show the Filter panel on the page
	 * if there are corresponding search permissions 
	 */
	function buildFilterPanel() 
	{
		if( !$this->permis[$this->tName]["search"] 
			|| $this->pSetEdit->isSearchRequiredForFiltering() && !$this->isRequiredSearchRunning() )
		{
			return;
		}
		
		include_once getabspath("classes/filterpanel.php");	
		$params = array();
		$params["pageObj"] = &$this;
	    $filterPanel = new FilterPanel($params);
		$filterPanel->buildFilterPanel();
	}	

	/**
	 * Search clause method wrapper
	 * @return Boolean
	 */
	function isRequiredSearchRunning() 
	{
		if( !$this->searchClauseObj )
			return false;
			
		return $this->searchClauseObj->isRequiredSearchRunning();
	}
	
	/**
     * Get the filters WHERE condition
	 * @return String
	 */
	function getFiltersWhere() 
	{
		$whereClause = "";
		$whereComponents = $this->getWhereComponents();
		foreach($whereComponents["filterWhere"] as $fWhere)
		{
			$whereClause = whereAdd($whereClause, $fWhere);
		}
		
		return $whereClause;
	}

	/**
     * Get the filters HAVING condition
	 * @return String
	 */	
	function getFiltersHaving() 
	{
		$havingClause = "";
		$whereComponents = $this->getWhereComponents();
		foreach($whereComponents["filterHaving"] as $fHaving)
		{
			$whereClause = whereAdd($havingClause, $fHaving);
		}
		
		return $whereClause;
	}
	
	/**
	 * Check whether the page's layout is table-based
	 */
	function isOldLayout()
	{
		if(!$this->pageLayout)
			return false;
		return ($this->pageLayout->version == 1);
	}
	
	/**
	 * Forms class name with an appropriate prefix
	 */
	function makeClassName($name)
	{
		if($this->isOldLayout())
			return "runner-".$name;
		return "rnr-".$name;
	}
	
	/**
	 * Check if the fieldData array contains at least one duplicated field's value 
	 *
	 * @param {Array} $fieldsData
	 * @param {String} $message
	 * @return {Boolean}
	 */
	function hasDeniedDuplicateValues($fieldsData, &$message) 
	{
		foreach($fieldsData as $fieldName => $value)
		{
			if($this->pSet->allowDuplicateValues($fieldName)) 
				continue;
			
			if($this->hasDuplicateValue($fieldName, $value)) 
			{
				$this->errorFields[] = $fieldName;
				if($this->mode != EDIT_POPUP && $this->mode != ADD_POPUP)
					$message = $fieldName." ".mlang_message("INLINE_DENY_DUPLICATES");
				
				return true;
			}				
		}
		return false;
	}
	
	/**
	 * Check if the field's value duplicates with any of database field's values
	 *
	 * @param {String} $fieldName
	 * @param {String | Number} $value
	 * @retrun {Boolean}
	 */
	function hasDuplicateValue($fieldName, $value)
	{
		//skip empty value
		if( !strlen( $value ) )
			return false;
		
		if( $this->cipherer->isFieldEncrypted($fieldName) )
		{
			$value = $this->cipherer->MakeDBValue($fieldName, $value, "", true);	
		}
		else
		{ 
			$value = add_db_quotes($fieldName, $value);
		}
		
		$where = $this->getFieldSQLDecrypt( $fieldName ) . '=' . $value; 
		$sql = "SELECT count(*) from ".$this->connection->addTableWrappers( $this->pSet->getOriginalTableName() )." where ".$where;
		$data = $this->connection->query( $sql )->fetchNumeric();
	
		if( !$data[0] )
			return false;

		return true;
	}
	
	/**
	 * Fetch blocks ( {BEGIN ...} {END ...} ) content
	 * @param Array|String blocks
	 * @param Boolean dash			(optional)
	 * @return String
	 */
	function fetchBlocksList( $blocks, $dash = false )
	{
		if( !is_array( $blocks ) )
			return $this->xt->fetch_loaded( $blocks );
			
		$fetchedBlocks = "";
		$firstRightAligned = true;
		$hasRightAligned = false;
		$brickCount = 0;
		foreach( $blocks as $b )
		{
			++$brickCount;
			$align="";
			if( is_array($b) )
			{
				$name = $b["name"];
				$align= $b["align"];
			}
			else
			{
				$name = $b;
			}
			$fetched = $this->xt->fetch_loaded( $name );
			if( !$fetched )
				continue;
			
			if( $dash )
			{
				$alignClass = "";
				if( $align == "right" )
					$alignClass = "rnr-dberight";
				$fetched = '<span class="rnr-dbebrick ' . $alignClass .'">' . $fetched . "</span>";
				if( $align == "right" && $firstRightAligned)
				{
					$fetched = "<div class=\"rnr-dbefiller\"></div>" . $fetched;
					$firstRightAligned = false;
					$hasRightAligned = true;
				}
			}
			
			$fetchedBlocks.= $fetched;
		}
		if( $dash && $fetchedBlocks!= "" && $brickCount > 1 && !$hasRightAligned )
			$fetchedBlocks .= "<div class=\"rnr-dbefiller\"></div>";
		return $fetchedBlocks;
	}
	
	/**
	 * @param String templatefile
	 * @param Number id
	 */
	function displayAJAX($templatefile, $id)
	{
		$returnJSON = array();
		$returnJSON['controlsMap'] = $this->controlsHTMLMap;
		$returnJSON['viewControlsMap'] = $this->viewControlsHTMLMap;
		$returnJSON['settings'] = $this->jsSettings;	

		if( count($this->includes_css) )
			$returnJSON['CSSFiles'] = array_unique($this->includes_css);

		$returnJSON['additionalJS'] = $this->grabAllJsFiles();
		$returnJSON['idStartFrom'] = $id;	

		if( $this->formBricks['header'] )
			$returnJSON['headerCont'] = $this->fetchBlocksList( $this->formBricks['header'] );					
		if( $this->formBricks['footer'] )
			$returnJSON['footerCont'] = $this->fetchBlocksList( $this->formBricks['footer'] );		

		if( $this->pageType == PAGE_CHART )
		{
			$returnJSON['headerCont'] = '<span class="rnr-dbebrick">' 
				. $this->getPageTitle( $this->pageType, GoodFieldName($this->tName) ) 
				. "</span>";
		}
		
		
		$this->assignFormFooterAndHeaderBricks( false );
		$this->xt->load_template($templatefile);
		$returnJSON['html'] = $this->xt->fetch_loaded('body');
		
		$extraParams = $this->getExtraAjaxPageParams();
		if( count($extraParams) ) 
		{
			foreach( $extraParams as $param => $paramValue )
			{
				$returnJSON[ $param ] = $paramValue;
			}
		}
		
		echo printJSON($returnJSON);
	}
	
	/**
	 * A stub.
	 * Get extra JSON params to display the page on AJAX-like request	
	 * @return Array
	 */
	protected function getExtraAjaxPageParams()
	{
		return array();
	}
	
	/**
	 * Assign 'form' footer and header elements
	 * @param Boolean assignValue
	 */
	public function assignFormFooterAndHeaderBricks( $assignValue = true )
	{
		if( $this->formBricks["header"] )
		{
			if( !is_array( $this->formBricks["header"] ) )
			{
				$this->formBricks["header"] = array( $this->formBricks["header"] );
			}
			foreach( $this->formBricks["header"] as $b )
			{
				$name = $b;
				if( is_array($b) )
					$name = $b["name"];
				$this->xt->assign( $name, $assignValue );
			}
		}
			
		if( $this->formBricks["footer"] )
		{
			if( !is_array( $this->formBricks["footer"] ) )
			{
				$this->formBricks["footer"] = array( $this->formBricks["footer"] );
			}
			foreach( $this->formBricks["footer"] as $b )
			{
				$name = $b;
				if( is_array($b) )
					$name = $b["name"];
				$this->xt->assign( $name, $assignValue );
			}
		}
	}
	
	/**
	 * Assign styles to the page
	 * @param Boolean isPdfPage  (optional)
	 */
	function assignStyleFiles( $isPdfPage = false )
	{
/*
		if(isIE8() && !$isPdfPage)
		{
			$newIncludes = array();
			foreach($this->includes_css as $i => $f)
			{
				$newIncludes[$i] = GetTableLink("ie8css", "", $f);
				
			}
			
			foreach($newIncludes as $i => $incl)
			{
				$this->includes_css[$i] = $incl;
			}
		}
*/		
		$this->xt->assign_array("styleCSSFiles", "stylepath", array_unique($this->includes_css));
		$this->includes_css = array();
	}
	
	/**
	 * Displays the page using $templatefile
	 */
	function display($templatefile)
	{
		$this->assignStyleFiles();
		$this->xt->display($templatefile);
	}

	/**
	 * returns where clause for active master-detail relationship
	 *
	 * @return string
	 */
	function getMasterTableSQLClause() 
	{
		$where = "";
		if(count($this->detailKeysByM)) 
		{
			for($i=0;$i<count($this->detailKeysByM);$i++) 
			{
				if($i != 0) 
					$where.= " and ";
					
				if($this->cipherer && $this->cipherer->isEncryptionByPHPEnabled())
					$mValue = $this->cipherer->MakeDBValue($this->detailKeysByM[$i], $_SESSION[$this->sessionPrefix."_masterkey".($i + 1)]);
				else 
					$mValue = make_db_value($this->detailKeysByM[$i], $_SESSION[$this->sessionPrefix."_masterkey".($i + 1)], "", "", $this->tName);
				if(strlen($mValue) != 0)
					$where.= $this->getFieldSQLDecrypt( $this->detailKeysByM[$i] ) . "=" . $mValue;
				else 
					$where.= "1=0";
			}
		}
		return $where;
	}
	
	/**
	* Returns array of WHERE and HAVING components organized as array:
	* array(
	*   "commonWhere" => <string with original WHERE clause and security clause and master clause> 
	*   "commonHaving" => <string with original HAVING clause> 
	*   "searchWhere" => <string with WHERE expression from searching>
	*   "searchHaving" => <string with HAVING expression from searching>
	*   "searchUnionRequired" => <boolean value, true if search condition choosed is ANY CRITERIA and there are both non-empty searchWhere and searchHaving expressions>
	*   "filterWhere" => <array with Fieldname => Where string pairs for non aggregated filtered fields>
	*                    array( "Field1" => "Field1 = 'aaa'",
	*                           "Field2" => "Field2 = 'bbb'")
	*   "filterHaving" => <the same as "filterWhere" for aggregated filtered fields>
	*  )
	*  Function results are cached.
	*/
	function getWhereComponents()
	{
		/*if($this->_cachedWhereComponents)
			return $this->_cachedWhereComponents;*/ //SearchApi added
			
		$this->_cachedWhereComponents = RunnerPage::sGetWhereComponents( $this->gQuery, $this->pSet, $this->searchClauseObj, $this->controls
			, $this->connection, $this->getMasterTableSQLClause(), $this->SecuritySQL("Search", $this->tName) );
		return $this->_cachedWhereComponents;
	}
	
	/**
	 * Get and array of WHERE and HAVING components
	 */
	static function sGetWhereComponents($query, $pSet, $searchObj, $controls, $connection, $masterTableSQLClause = "", $secSQL = false)
	{
		$whereComponents = array();
		$whereComponents["commonWhere"] = combineSQLCriteria( array( $query->WhereToSql(), $masterTableSQLClause, $secSQL !== false ? $secSQL : SecuritySQL("Search", $pSet->getTableName()) ) ); 
		$whereComponents["commonHaving"] = combineSQLCriteria( array( $query->Having()->toSql($query) ) );
		
		$nonaggregatedFields = $pSet->getListOfFieldsByExprType(false);
		$aggregatedFields = $pSet->getListOfFieldsByExprType(true);
		
		$whereComponents["searchWhere"] = $searchObj->getWhere($nonaggregatedFields, $controls);
		$whereComponents["searchHaving"] = $searchObj->getWhere($aggregatedFields, $controls);
		$whereComponents["joinFromPart"] = $searchObj->getCommonJoinFromParts($controls);	
		
		$whereComponents["searchUnionRequired"] = ( "or" === $searchObj->getCriteriaCombineType()
			&& 0 != strlen($whereComponents["searchHaving"]) 
			&& 0 != strlen($whereComponents["searchWhere"]) );
		

		$searchObj->processFiltersWhere( $connection );
		$filters = $searchObj->filteredFields;
		
		$whereComponents["filterWhere"] = array();
		foreach($nonaggregatedFields as $f)
		{
			if(isset($filters[$f]))
			{
				$whereComponents["filterWhere"][$f] = $filters[$f]["where"];
			}
		}

		$whereComponents["filterHaving"] = array();
		foreach($aggregatedFields as $f)
		{
			if(isset($filters[$f]))
			{
				$whereComponents["filterHaving"][$f] = $filters[$f]["where"];
			}
		}
		
		return $whereComponents;
	}
	
	/**
	 * A wrapper for the SecuritySQL function
	 * @param String strAction
	 * @paran String table
	 * @return String
	 */
	function SecuritySQL($strAction, $table="")
	{
		return SecuritySQL($strAction, $table);
	}

	/**
	 * Show a detail preview page
     * @param Array params - asp compatibility issue
	 */
	function showPageDp($params = "")
	{
		global $page_layouts;
		$layout =& $page_layouts[$this->shortTableName.'_'.$this->pageType];
		$pageSkinStyle = $layout->style.' page-'.$layout->name;
		
		//set bricks, which	must be shown on details preview page
		if( $this->pageType == PAGE_CHART )
			$bricksExcept = array('chart', 'message');
		else
			$bricksExcept = array('grid', 'pagination');

		// if we use details inline. We don't need show the header/footer.
		$this->xt->assign("header", false);
		$this->xt->assign("footer", false);
		
		$this->xt->hideAllBricksExcept($bricksExcept);
		
		$this->xt->prepare_template($this->templatefile);
		$contents = $this->xt->fetch_loaded('body');	

		echo '<div id="detailPreview'.$this->id.'" class="'.$pageSkinStyle.' rnr-pagewrapper dpStyle">'.$contents.'</div>';
	}
	
	/**
	 * Proccess master-details
	 *
	 * @param array $record
	 * @param array $data
	 * @param Number gridRowInd
	 */
	function proccessDetailGridInfo(&$record, &$data, $gridRowInd)
	{
		$hideDPLink = true;
		$tabNamesToHide = array();
		
		for($i = 0; $i < count($this->allDetailsTablesArr); $i ++) 
		{
			$detailTableData = $this->allDetailsTablesArr[$i];
			$dDataSourceTable = $detailTableData['dDataSourceTable'];
			
			if( $detailTableData['dType'] == PAGE_LIST && !$this->permis[ $dDataSourceTable ]["search"] )
				continue;
				
			$dShortTable = $detailTableData['dShortTable'];
			$masterquery = "mastertable=".rawurlencode($this->tName);
			
			initArray($this->controlsMap, 'gridRows');
			initArray($this->controlsMap['gridRows'], $gridRowInd);
			initArray($this->controlsMap['gridRows'][ $gridRowInd ], 'masterKeys');
			$this->controlsMap['gridRows'][ $gridRowInd ]['masterKeys'][ $dDataSourceTable ] = array();
			
			$detailid = array();
			foreach($this->masterKeysByD[$i] as $idx => $m) 
			{
				$curM = $m;
				if ($this->pageType==PAGE_REPORT)
				{	
					$curM = goodFieldName($curM);
					$curM .= '_dbvalue';
				}
				$masterquery.= "&masterkey".($idx + 1)."=".rawurlencode( $data[ $curM ] );
				// Don't need to use here make_db_value func, it use in countDetailsRecsNoSubQ func
				$detailid[] = $data[ $curM ];
				$this->controlsMap['gridRows'][ $gridRowInd ]['masterKeys'][ $dDataSourceTable ]["masterkey".($idx + 1)] = $data[ $curM ];
			}
			
			//	add count of child records to SQL
			if( ($detailTableData['dispChildCount'] || $detailTableData['hideChild']) && !$this->isDetailTableSubqueryApplied( $dDataSourceTable, $i ) )
			{
				$data[ $dDataSourceTable."_cnt" ] = $this->countDetailsRecsNoSubQ($i, $detailid);
			}
			
			//detail tables
			$record[ $dShortTable."_dtable_link" ] = $this->permis[ $dDataSourceTable ]['add'] || $this->permis[ $dDataSourceTable ]['search'];
			
			if( $detailTableData['dispChildCount'] ) 
			{
				if( $data[ $dDataSourceTable."_cnt" ] + 0 )
					$record[ $dShortTable."_childcount" ] = true;
				else if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
				{
					if( $this->detailsLinksOnList != DL_INDIVIDUAL )
						$record[ $dShortTable."_childcount" ] = true;
						
					$record[ $dShortTable."_dlink_class" ] = "hidden-badge";	
					$record[ $dShortTable."_cntspan_class" ] = "hidden-detcounter";	
				}
			
				$record[ $dShortTable."_childnumber" ] = $data[ $dDataSourceTable."_cnt" ];
				$record[ $dShortTable."_childnumber_attr" ] = " id='cntDet_".$dShortTable."_".$this->recId."'";
				$this->controlsMap['gridRows'][ $gridRowInd ]['childNum'] = $data[ $dDataSourceTable."_cnt" ];
				
				$record[ $dShortTable."_link_attrs" ] = " href=\"#\" id=\"details_".$this->recId."_".$dShortTable."\" ";
			}
					
			if( $this->pSet->getDPType($dDataSourceTable) == DP_INLINE ) 
			{
				$record[ $dShortTable."_dtablelink_attrs" ] = "id = \"".$dShortTable."_preview".$this->recId."\" 
					caption = \"".runner_htmlspecialchars( GetTableCaption(GoodFieldName($dDataSourceTable)) )."\"".
					"href = \"".GetTableLink($dShortTable, $detailTableData['dType'], $masterquery)."\"";
			}
			else if( $this->pSet->getDPType($dDataSourceTable) == DP_POPUP ) 
			{
				$record[ $dShortTable."_dtablelink_attrs" ] = "id=\"master_".$dShortTable."_".$this->recId."\" href=\"".GetTableLink($dShortTable, $detailTableData['dType'], $masterquery)."\"";
			}
			else
			{
				$record[ $dShortTable."_dtablelink_attrs" ] = "href=\"".GetTableLink($dShortTable, $detailTableData['dType'], $masterquery)."\"";
			}
			
			if( $detailTableData['hideChild'] ) 
			{
				if( !($data[ $dDataSourceTable."_cnt" ] + 0) ) 
				{
					$record[ $dShortTable."_dtablelink_attrs" ] .= " class=\"".$this->makeClassName("hiddenelem")."\" data-hidden data-hidetab";
					if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT && $this->detailsLinksOnList == DL_SINGLE )
					{
						$tabNamesToHide[] = $dDataSourceTable;
					}						
				}
				elseif( $detailTableData["previewOnList"] && $hideDPLink )
				{
					$hideDPLink = false;
				}
			} 
			elseif( $hideDPLink )
				$hideDPLink = false;
		}
		
		$record["dtables_link_attrs"] = " href=\"#\" id=\"details_".$this->recId."\" ";
		if( $hideDPLink )
		{
			$record["dtables_link_attrs"].= " class=\"".$this->makeClassName("hiddenelem")."\" data-hidden";
			if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
				$record["dtables_link_class"] = $this->makeClassName("hiddenelem");
		}
		
		if( $this->detailsLinksOnList == DL_SINGLE && count($tabNamesToHide) )
			$record["dtables_link_attrs"].= " data-hiddentabs=\"".runner_htmlspecialchars( my_json_encode( $tabNamesToHide ) )."\"";	
	}
	/**
	 * Get proceed link for details previews
	 * return HTML link
	 */
	function getProceedLink() 
	{
		if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
			return "";
			
		$masterTableInfo =& $this->getMasterTableInfo();
		if( !$masterTableInfo["proceedLink"] )
			return "";

		$strkey = "";
		for($i = 1; $i <= count($this->masterKeysReq); $i++)
		{
			$strkey.="&masterkey".($i)."=".rawurlencode($this->masterKeysReq[$i]);
		}

		$proceedLink = GetTableLink( GoodFieldName($this->shortTableName), $this->pageType) . "?mastertable=".rawurlencode($this->masterTable).$strkey;

		return '<span class="rnr-dbebrick">'
			.'<a href="' . $proceedLink . '" name="dp' . $this->id . '">'
			.  mlang_message("PROCEED_TO") . ' '. GetTableCaption( GoodFieldName( $this->tName ) ) 
			. '</a>' 
			. "&nbsp;&nbsp;</span>";
	}

	/**
	 * A stub #9875
	 * @param String dDataSourceTable	The detail datasource table name
	 * @param Number dTableIndex	The detail table index in the allDetailsTablesArr prop
	 * @return Boolean
	 */
	protected function isDetailTableSubquerySupported( $dDataSourceTName, $dTableIndex )
	{	
		return false;
	}
	
	/**
	 * @param String dDataSourceTable	The detail datasource table name
	 * @param Number dTableIndex	The detail table index in the allDetailsTablesArr prop	
	 * @return Boolean	
	 */
	protected function isDetailTableSubqueryApplied( $dDataSourceTName, $dTableIndex )
	{
		return $this->isDetailTableSubquerySupported( $dDataSourceTName, $dTableIndex );
	}
	
	/**
	 * Get details params
	 * @param Number ids
	 * @return Array
	 */
	public function getDetailsParams( $ids )
	{
		$dpParams = array();
		
		if( $this->pageType != PAGE_VIEW && $this->pageType != PAGE_EDIT && $this->pageType != PAGE_ADD )
			return $dpParams;
		
		foreach( $this->allDetailsTablesArr as $detailData )
		{
			if( !( $this->pageType == PAGE_VIEW && $detailData["previewOnView"] || $this->pageType == PAGE_EDIT && $detailData["previewOnEdit"]  
				|| $this->pageType == PAGE_ADD && $detailData["previewOnAdd"] ) )
			{
				continue;
			}
			
			$strDetTableName = $detailData["dDataSourceTable"];
			$dpPermis = $this->getPermissions( $strDetTableName );
			if( ($this->pageType == PAGE_VIEW || $this->pageType == PAGE_EDIT) && $dpPermis['search'] || $this->pageType == PAGE_EDIT && $dpPermis['edit']  
				|| $this->pageType == PAGE_ADD && $dpPermis['add'] )
			{
				$dpParams['ids'][] = ++$ids;
				$dpParams['strTableNames'][] = $strDetTableName;
				$dpParams['type'][] = $detailData["dType"];
			}	
		}

		return $dpParams;
	}
	
	/**
	 * Prepare the detail preview data, fille coresssponding controls maps and 
	 * assign all required xt variables 
	 * @param String dpType
	 * @param String dpTableName
	 * @param Number dpId
	 * @param &Array data
	 */
	public function setDetailPreview( $dpType, $dpTableName, $dpId, &$data)
	{
		if( $this->pageType != PAGE_EDIT && $this->pageType != PAGE_VIEW && $this->pageType != PAGE_ADD || !CheckTablePermissions($dpTableName, "S") )
			return;
			
		if( $dpType == PAGE_CHART )
			$this->setDetailChartOnEditView( $dpTableName, $dpId, $data );
		elseif( $dpType == PAGE_REPORT )		
			$this->setDetailReportOnEditView( $dpTableName, $dpId, $data );
		else // $dpType == PAGE_LIST
			$this->setDetailList( $dpTableName, $dpId, $data );			
	}

	/**
	 *
	 */
	protected function getDetailsPageObject( $tName, $listId = 0, $data = array() )
	{
		if( $this->detailsTableObjects[ $tName ] )
			return $this->detailsTableObjects[ $tName ];

		//	new page id is required when creating the page object
		if( !$listId ) 
			return null;
		
		$entityType = GetEntityType( $tName );
		$options = array();
		$options["id"] = $listId;
		$options["firstTime"] = 1;	
		$options["pdfMode"] = $this->pdfMode;	
		$options["masterTable"] = $this->tName;
		$options["masterPageType"] = $this->pageType;
		$options["mainMasterPageType"] = $this->pageType;					
		$options["xt"] = new Xtempl( true ); //#9607 1. Temporary fix
		$options["flyId"] = $this->genId() + 1;
		$options["masterKeysReq"] = array();
		
		$mkr = 1;
		$mKeys = $this->pSet->getMasterKeysByDetailTable( $tName );
		$masterKeys = array(); //for PAGE_EDIT only
		
		foreach($mKeys as $mk)
		{
			$options["masterKeysReq"][ $mkr ] = $data[ $mk ];
			$masterKeys["masterKey".$mkr] = $data[ $mk ];
			$mkr++;
		}

		if( titTABLE == $entityType || titVIEW == $entityType )
		{
			$options["mode"] = LIST_DETAILS;
			$options["pageType"] = PAGE_LIST;
			$pageObject = ListPage::createListPage($tName, $options);	
		}
		else if( titREPORT  == $entityType )
		{
			$options["tName"] = $tName;
			$options["mode"] = REPORT_DETAILS;
			$options["pageType"] = PAGE_REPORT;
			$pageObject = new ReportPage($options);
		}
		else if( titCHART  == $entityType )
		{
			$options["tName"] = $tName;
			$options["mode"] = CHART_DETAILS;
			$options["pageType"] = PAGE_CHART;
			$pageObject = new ChartPage($options);		
		}
		
		$this->detailsTableObjects[ $tName ] = $pageObject;
		return $pageObject;
	}
	
	/**
	 * A stub
	 */
	function assignButtonsOnMasterEdit( $masterXt )
	{
	}
	
	/**
	 * @param String listTName
	 * @param Number listId
	 * @param &Array data
	 */
	protected function setDetailList( $listTName, $listId, &$data )
	{
		include_once( getabspath('classes/listpage.php') );
		include_once( getabspath('classes/listpage_embed.php') );
		include_once( getabspath('classes/listpage_dpinline.php') );		
		
		//array of params for classes
		$listPageObject = $this->getDetailsPageObject( $listTName, $listId, $data );
		$listPageObject->prepareForBuildPage();
		
		if( $listPageObject->isDispGrid() )
		{
			//set page events
			foreach( $listPageObject->eventsObject->events as $event => $name )
			{
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			}
			
			//add detail settings to master settings
			$listPageObject->addControlsJSAndCSS();
			$listPageObject->fillSetCntrlMaps();
			
			$listPageObject->BeforeShowList();
			$this->assignDisplayDetailTableXtVariable( $listPageObject );
		
			$this->copyDetailPreviewJSAndCSS( $listPageObject ); 
			$this->updateSettingsWidthDPData( $listPageObject );			
			
			$this->viewControlsMap["dViewControlsMap"][ $listTName ] = $listPageObject->viewControlsMap;
		
			$this->controlsMap["dControlsMap"][ $listTName ] = $listPageObject->controlsMap;
			if( $this->pageType == PAGE_EDIT ) 
				$this->controlsMap["dControlsMap"]["masterKeys"] = $masterKeys;
							
			$this->controlsMap["dpTablesParams"][] = array("tName" => $listTName, "id" => $listId, "pType" => PAGE_LIST);
		}

		$this->flyId = 	$listPageObject->recId + 1;
	}
	
	/**
	 * @param String reportTName
	 * @param Number reportId
	 * @param &Array data
	 */
	protected function setDetailReportOnEditView( $reportTName, $reportId, &$data  )
	{
		include_once( getabspath('classes/reportpage.php') );
		
		//array of params for ReportPage constructor
		$options = array();
		$options["id"] = $reportId;		
		$options["mode"] = REPORT_DETAILS;	
		$options["pdfMode"] = $this->pdfMode;	
		$options["tName"] = $reportTName;
		$options["pageType"] = PAGE_REPORT;
		$options["masterTable"] = $this->tName;
		$options["xt"] = new Xtempl( true ); //#9607 1. Temporary fix
		$options["flyId"] = $this->genId() + 1; //fix it!
		$options["masterKeysReq"] = array();
		
		$mkr = 1;
		$mKeys = $this->pSet->getMasterKeysByDetailTable( $reportTName );
		foreach($mKeys as $mk)
		{
			$options["masterKeysReq"][ $mkr++ ] = $data[ $mk ];
		}
					
		$reportPageObject = new ReportPage( $options );
		$reportPageObject->init();
		
		if( $this->mobileTemplateMode() )
			$reportPageObject->pageSize = -1;
		
		$reportPageObject->prepareDetailsForEditViewPage();
		
		if( !$reportPageObject->isDispReport() )
			return false;
			
		//add detail settings to master settings
		$reportPageObject->addControlsJSAndCSS();
		$reportPageObject->fillSetCntrlMaps();		

		$reportPageObject->beforeShowReport();
		$this->assignDisplayDetailTableXtVariable( $reportPageObject );

		$this->copyDetailPreviewJSAndCSS( $reportPageObject ); 
		$this->updateSettingsWidthDPData( $reportPageObject );
		
		
		$this->viewControlsMap["dViewControlsMap"][ $reportTName ] = $reportPageObject->viewControlsMap;
		$this->controlsMap["dControlsMap"][ $reportTName ] = $reportPageObject->controlsMap;
		$this->controlsMap["dpTablesParams"][] = array("tName" => $reportTName, "id" => $options["id"], "pType" => PAGE_REPORT);		
	}
	
	/**
	 * @param String chartTName
	 * @param Number chartId
	 * @param &Array data
	 */
	protected function setDetailChartOnEditView( $chartTName, $chartId, &$data )
	{
		if(	$this->pdfMode )
			return;
		
		include_once( getabspath('classes/chartpage.php') );
		
		$xt = new Xtempl( true ); //#9607 1. Temporary fix
		
		$options = array();
		$options["xt"] = &$xt;
		$options["id"] = $chartId;
		$options["tName"] = $chartTName;
		$options["mode"] = CHART_DETAILS;	
		$options["pageType"] = PAGE_CHART;
		$options["masterTable"] = $this->tName;
		$options["flyId"] = $this->genId() + 1; //fix it

		$mkr = 1;
		$mKeys = $this->pSet->getMasterKeysByDetailTable( $chartTName );
		foreach($mKeys as $mk)
		{
			$options["masterKeysReq"][ $mkr++ ] = $data[ $mk ];
		}
		
		$masterKeysReq = $options["masterKeysReq"];
		if(count($masterKeysReq))
		{
			//	copy keys to session
			for($i = 1; $i <= count($masterKeysReq); $i++)
				$_SESSION[ $chartTName."_masterkey".$i ] = $masterKeysReq[ $i ];

			if( isset($_SESSION[ $chartTName."_masterkey".$i ]) )
				unset( $_SESSION[ $chartTName."_masterkey".$i ] );
		}
		
		$chartPageObject = new ChartPage($options);
		$chartPageObject->init();
		
		$chartXtParams["id"] = $options["flyId"];
		$chartXtParams["table"] = $chartTName;
		$chartXtParams["ctype"] =  $chartPageObject->pSet->getChartType(); 
		$chartXtParams["chartname"] = $chartPageObject->shortTableName;
		$chartXtParams["singlePage"] = true;
		$chartXtParams["containerId"] = "rnr" . $chartXtParams["chartname"] . $chartXtParams["id"];

		$xt->assign_function( $chartPageObject->shortTableName."_chart","xt_showchart", $chartXtParams );			

		$chartPageObject->prepareDetailsForEditViewPage();
		
		if( $this->mobileTemplateMode() )
			$xt->assign("container_menu", false);

		$chartPageObject->addControlsJSAndCSS();
		$chartPageObject->fillSetCntrlMaps();			
		
		$this->AddJSFile('libs/js/anychart.min.js');
		$this->AddJSFile('libs/js/migrationTool.js');			
			
		$chartPageObject->beforeShowChart();
		$this->assignDisplayDetailTableXtVariable( $chartPageObject );
		
		$this->copyDetailPreviewJSAndCSS( $chartPageObject ); 
		//add detail settings to master settings
		$this->updateSettingsWidthDPData( $chartPageObject );
				
		$this->viewControlsMap["dViewControlsMap"][ $chartTName ] = $chartPageObject->viewControlsMap;

		$this->controlsMap["dControlsMap"][ $chartTName ] = $chartPageObject->controlsMap;	
		$this->controlsMap["dpTablesParams"][] = array("tName" => $chartTName, "id" => $options['id'], "pType" => PAGE_CHART, "pParam" => $chartXtParams);		
	}

	/**
	 * Get the key values array form the record data array passed
	 * // It's used on the edit/view pages only
	 * @param Array data
	 * @return Array
	 */
	protected function getKeysFromData( $data )
	{
		$keys = array();
		
		$keyFields = $this->pSet->getTableKeys();
		foreach( $keyFields as $keyField )
		{
			$keys[ $keyField ] = $data[ $keyField ];
		}		
		return $keys;
	}
	
	/**
	 * Add detail JS and CSS files to the master's files list
	 * @param &RunnerPage dtPageObject
	 */	
	protected function copyDetailPreviewJSAndCSS( &$dtPageObject )
	{
		$layout = GetPageLayout( GoodFieldName( $dtPageObject->tName ), $dtPageObject->pageType );
		if($layout)
			$this->AddCSSFile( $layout->getCSSFiles(isRTL(), isPageLayoutMobile($this->templatefile), $this->pdfMode != "" ) );				
		
		//Add detail's js files to master's files
		$this->copyAllJSFiles( $dtPageObject->grabAllJSFiles() );
		//Add detail's css files to master's files
		$this->copyAllCSSFiles( $dtPageObject->grabAllCSSFiles() );			
	}
	
	/**
	 * Add detail settings to master settings
	 * @param &RunnerPage dtPageObject
	 */
	protected function updateSettingsWidthDPData( &$dtPageObject )
	{
		$tName = $dtPageObject->tName;
		
		$this->jsSettings["tableSettings"][ $tName ] = $dtPageObject->jsSettings["tableSettings"][ $tName ];
		foreach($dtPageObject->jsSettings["global"]["shortTNames"] as $keySet => $val)
		{
			if( !array_key_exists($keySet, $this->settingsMap["globalSettings"]["shortTNames"]) )
				$this->settingsMap["globalSettings"]["shortTNames"][ $keySet ] = $val;
		}		
	}
	
	/**
	 * @param &RunnerPage dtPageObject
	 */
	protected function assignDisplayDetailTableXtVariable( &$dtPageObject )
	{
		$this->xt->assign("details_". $dtPageObject->shortTableName, true);	
		$this->xt->assign_method("displayDetailTable_". $dtPageObject->shortTableName , $dtPageObject, 'showPageDp', false );		
	}

	/**
	 * Remove columns hidden on the current device from the inline control fields list 
	 * @param &Array inlineControlFields
	 * @param Number screenWidth
	 * @param Number screenHeight
	 * @param String orientation		The current device orientation identifier
	 * @return Array
	 */
	public function removeHiddenColumnsFromInlineFields( $inlineControlFields, $screenWidth, $screenHeight, $orientation ) 
	{
		//	don't remove inline fields if the user can show them
		if( $this->pSet->isAllowShowHideFields() )
			return $inlineControlFields;
		
		$devices = array( DESKTOP, TABLET_10_IN, SMARTPHONE_LANDSCAPE, SMARTPHONE_PORTRAIT, TABLET_7_IN );
		foreach( $devices as $d )
		{
			$columnsToHide = $this->pSet->getHiddenFields( $d );
			if( !count($columnsToHide) || !$this->isColumnHiddenForDevice( $d, $screenWidth, $screenHeight, $orientation ) )
				continue;
				
			foreach( $columnsToHide as $hiddenField => $status )
			{
				$fieldPos = array_search( $hiddenField, $inlineControlFields );
				if( $fieldPos !== FALSE )
					array_splice( $inlineControlFields, $fieldPos, 1);
			}
			
			return $inlineControlFields;		
		}

		return $inlineControlFields;	
	}
	
	/**
	 * Check if some columns must be hidden on a device of particular type 
	 * if the current device has certain screen width and height params. 
	 * See also ProjectSettings::getDeviceMediaClause method
	 * @param Number d				Device identifier
	 * @param Number screenWidth
	 * @param Number screenHeight
	 * @param String orientation	 
	 */
	protected function isColumnHiddenForDevice( $d, $screenWidth, $screenHeight, $orientation )
	{
		if( $d == DESKTOP )
			return $screenWidth >= 1281;
			
		if( $d == TABLET_10_IN )	
			return $screenWidth == 768 && $screenHeight == 1024 || $screenWidth >= 1025 && $screenWidth <= 1280 && $screenHeight <= 1023 || $screenHeight >= 1025 && $screenHeight <= 1280 && $screenWidth <= 1023;
			
		if( $d == TABLET_7_IN )	
			return $screenWidth <= 1024 && $screenHeight <= 800 || $screenHeight <= 1024 && $screenWidth <= 800;
			
		if( $d == SMARTPHONE_LANDSCAPE )	
			return $screenHeight <= 400 && $orientation == 'landscape' || $screenWidth <= 400 && $orientation == 'landscape' ;

		if( $d == SMARTPHONE_PORTRAIT )		
			return $screenHeight <= 400 && $orientation == 'portrait' || $screenWidth <= 400 && $orientation == 'portrait';
			
		return false;
	}


	/**
	 * @param String table				A table name
	 * @param ProjectSettings pSet
	 * @return STring
	 */
	protected function getKeysTitleTemplate($table, $pSet)
	{
		$keys = $pSet->getTableKeys();
		$str = "";
		foreach($keys as $k)
		{
			if( strlen($str) )
				$str .= ", ";

			$str .= "{%". GoodFieldName( $k ). "}";
		}
		return $str;
	}
	
	/**
	 * Get the default page's title template
	 * @param String page
	 * @param String table				A good table name
	 * @param ProjectSettings pSet	 
	 * @return STring
	 */	
	protected function getDefaultPageTitle($page, $table, $pSet)
	{
		if( $page == "add" )
			return GetTableCaption($table).", ".mlang_message("ADD_NEW");
		if( $page == "edit" )
			return GetTableCaption($table).", ".mlang_message("EDIT")." [". $this->getKeysTitleTemplate( $table, $pSet ). "]";
		if( $page == "view" )
			return GetTableCaption($table)." [". $this->getKeysTitleTemplate( $table, $pSet ). "]";
		if( $page == "export" )
			return mlang_message("EXPORT");
		if( $page == "import" )
			return GetTableCaption($table).", ".mlang_message("IMPORT");
		if( $page == "search" )
			return GetTableCaption($table)." - ".mlang_message("ADVANCED_SEARCH");
		if( $page == "print" )
			return GetTableCaption($table);
		if( $page == "rprint" )
			return GetTableCaption($table);
		if( $page == "list" )
			return GetTableCaption($table);
		if( $page == "masterlist" )
			return GetTableCaption($table)." [". $this->getKeysTitleTemplate( $table, $pSet ). "]";
		if( $page == "masterchart" )
			return GetTableCaption($table);
		if( $page == "masterreport" )
			return GetTableCaption($table)." [". $this->getKeysTitleTemplate( $table, $pSet ). "]";			
		if( $page == "masterprint" )
			return GetTableCaption($table)." [". $this->getKeysTitleTemplate( $table, $pSet ). "]";		
		if( $page == "login" )
			return mlang_message("LOGIN");
		if( $page == "register" )
			return mlang_message("REGISTER");
		if( $page == "register_success" )
			return mlang_message("REG_SUCCESS");
		if( $page == "changepwd" )
			return mlang_message("CHANGE_PASSWORD");
		if( $page == "changepwd" )
			return mlang_message("CHANGE_SUCCESS");
		if( $page == "remind" )
			return mlang_message("REMINDER");	
		if( $page == "chart" )
			return GetTableCaption($table); 
		if( $page == "report" )
			return GetTableCaption($table);	
		if( $page == "dashboard" )
			return GetTableCaption($table);	
		if( $page == "menu" )
			return mlang_message("MENU");
	}
	
	/**
	 * Get a page's title template
	 * @param String page
	 * @param String table						A good table name
	 * @param ProjectSettings pSet (optional)
	 * @return String
	 */
	protected function getPageTitleTemplate( $page, $table, $pSet )
	{
		global $page_titles;
		
		if( !$table || $page == PAGE_REGISTER ) 
			$table = ".global";
		
		$templ = "";
		if( array_key_exists($table, $page_titles) )
		{
			$templ = @$page_titles[ $table ][ mlang_getcurrentlang() ][ $page ];
		}		
		if( strlen($templ) )
			return $templ;
		
		return $this->getDefaultPageTitle( $page, $table, $pSet );
	}
	
	/**
	 * @param String page
	 * @param String table (optional)				A good table name
	 * @param Array record (optional)				A source record data
	 * @param ProjectSettings settings (optional)
	 * @return String	 
	 */	
	public function getPageTitle($page, $table = "", $record = null, $settings = null)
	{
		$pSet = is_null( $settings ) ? $this->pSet : $settings;
		$templ = $this->getPageTitleTemplate($page, $table, $pSet);
		
		$matches = array();
		if( !preg_match_all('/{\%([\w\.\s\-]*)\}/', $templ,  $matches) )
			return $templ;
		
		$currentRecord = $record;
		$masterRecord = null;
		foreach( $matches[0] as $m )
		{
			if( !strcasecmp( substr($m, 0, 9), "{%master." ) )
			{
				$mSettings = new ProjectSettings($this->masterTable, PAGE_LIST);
				$field = $mSettings->getFieldByGoodFieldName( trim(substr( $m, 9, strlen($m) - 10 )) );
				if(!$masterRecord)
				{
					$masterRecord = $this->getMasterRecord();
				}
				$templ = str_replace($m, $masterRecord ? $masterRecord[ $field ] : "", $templ);
			}
			else
			{
				$field = $pSet->getFieldByGoodFieldName( trim(substr( $m, 2, strlen($m) - 3 )) );
				if(!$currentRecord)
				{
					$currentRecord = $this->getCurrentRecord();
				}
				$templ = str_replace($m, $currentRecord ? $currentRecord[ $field ] : "", $templ);
			}
		}
		return $templ;
	}
	
	
	public function setPageTitle( $str ) {
		$this->xt->assign( "pagetitlelabel", $str );
	}

	function getCurrentRecord()
	{
		return array();
	}
	
	/**
	 * @param String field name (A good field name case-sensitive)
	 * @param String label value
	 * @return Boolean
	 */
	public function setFieldLabel($field, $label)
	{
		global $field_labels;
		if(isset($field_labels[GoodFieldName($this->tName)][mlang_getcurrentlang()][GoodFieldName($field)]))
		{
			$field_labels[GoodFieldName($this->tName)][mlang_getcurrentlang()][GoodFieldName($field)] = $label;
			return true;
		}
		else 
			return false;
	}
	
	protected function assignBody()
	{
		$this->body["begin"] .= GetBaseScriptsForPage(false);
		if( !$this->mobileTemplateMode() )
			$this->body["begin"] .= "<div id=\"search_suggest".$this->id."\"></div>\r\n";
		
		$this->body['end'] = XTempl::create_method_assignment( "assignBodyEnd", $this );
		$this->xt->assign("body", $this->body);
	}
	
	/**
	 *
	 */
	public function getInputElementId( $field, $pSet = null )
	{
		if( !$pSet )
			$pSet = $this->pSet;
		$format = $pSet->getEditFormat( $field );
		if($format == EDIT_FORMAT_DATE)
		{
			$type = $pSet->getDateEditType($field);
			if($type==EDIT_DATE_DD || $type==EDIT_DATE_DD_DP)
				return "dayvalue_".GoodFieldName($field)."_".$this->id;
			else
				return "value_".GoodFieldName($field)."_".$this->id;
		}
		else if($format==EDIT_FORMAT_RADIO)
			return "radio_".GoodFieldName($field)."_".$this->id."_0";
		
		else if($format==EDIT_FORMAT_LOOKUP_WIZARD)	
		{
			$lookuptype = $pSet->lookupControlType($field);
			if( $this->mobileTemplateMode() && $lookuptype == LCT_AJAX )
				$lookuptype = LCT_DROPDOWN;
			if($lookuptype==LCT_AJAX || $lookuptype==LCT_LIST)
				return "display_value_".GoodFieldName($field)."_".$this->id;
			else
				return "value_".GoodFieldName($field)."_".$this->id;
		}	
		else
			return "value_".GoodFieldName($field)."_".$this->id;		
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
	 * @return Boolean
	 */
	public function isSearchPanelActivated()
	{
		return $this->searchPanelActivated;
	}
	
	/**
	 *	Builds SQL expression based on key values:
	 * 	key1=1 and key2='a'
	 *	
	 *	@return String
	 */
	public function keysSQLExpression( $keys )
	{
		$keyFields = $this->pSet->getTableKeys();
		$chunks = array();
		foreach($keyFields as $kf)
		{
			$value = $this->cipherer->MakeDBValue($kf, $keys[ $kf ], "", true);
			
			if( $this->connection->dbType == nDATABASE_Oracle )
				$valueisnull = $value === "null" || $value == "''";
			else
				$valueisnull = $value === "null";
			
			if( $valueisnull )
				$chunks[] = $this->getFieldSQL( $kf )." is null";
			else
				$chunks[] = $this->getFieldSQLDecrypt( $kf )."=".$this->cipherer->MakeDBValue($kf, $keys[ $kf ], "", true);
		}
		return implode( " and ", $chunks );
	}
	/**
	 * Counts totals, depending on theirs type
	 *
	 * @param array $totals
	 * @param array $data
	 */
	function countTotals(&$totals, &$data) 
	{
		for($i = 0; $i < count($this->totalsFields); $i ++)
		{
			if($this->totalsFields[$i]['totalsType'] == 'COUNT')
			{
				if(0 != strlen($data[$this->totalsFields[$i]['fName']]))
					$totals[$this->totalsFields[$i]['fName']]++;
			}
			else if($this->totalsFields[$i]['viewFormat'] == "Time") 
			{
				$time = GetTotalsForTime($data[$this->totalsFields[$i]['fName']]);
				$totals[$this->totalsFields[$i]['fName']] += $time[2]+$time[1]*60 + $time[0]*3600;
			}
			else
				$totals[$this->totalsFields[$i]['fName']]+=($data[$this->totalsFields[$i]['fName']]+ 0);
		
			if($this->totalsFields[$i]['totalsType'] == 'AVERAGE')
			{
				if(!is_null($data[$this->totalsFields[$i]['fName']]) && $data[$this->totalsFields[$i]['fName']]!=="")
					$this->totalsFields[$i]['numRows']++;
			}
		}
	}
	function deleteAvailable() {
		return $this->pSet->hasDelete() && $this->permis[$this->tName]["delete"];
	}
	function importAvailable() {
		return $this->permis[$this->tName]["import"] && $this->pSet->hasImportPage();
	}
	function editAvailable() {
		return $this->pSet->hasEditPage() && $this->permis[$this->tName]["edit"];
	}
	function addAvailable() {
		return $this->pSet->hasAddPage() && $this->permis[$this->tName]["add"];
	}
	function copyAvailable() {
		return $this->pSet->hasCopyPage() && $this->permis[$this->tName]["add"];
	}
	function inlineEditAvailable() {
		return $this->permis[$this->tName]["edit"] && $this->pSet->hasInlineEdit();
	}
	function updateSelectedAvailable() {
		return $this->permis[$this->tName]["edit"] && $this->pSet->hasUpdateSelected();
	}
	function inlineAddAvailable() {
		return $this->permis[$this->tName]["add"] && $this->pSet->hasInlineAdd();
	}
	function viewAvailable() {
		return $this->permis[$this->tName]["search"] && $this->pSet->hasViewPage();
	}
	function exportAvailable() {
		return $this->permis[$this->tName]["export"] && $this->pSet->hasExportPage();
	}
	function printAvailable() {
		return $this->permis[$this->tName]["export"] && $this->pSet->hasPrintPage();
	}

	function advSearchAvailable() {
		return $this->permis[$this->tName]["search"] && count( $this->pSet->getAdvSearchFields() );
	}

	function getIncludeFileMapProvider(){
		switch( getMapProvider() ){
			case GOOGLE_MAPS:
				return "gmap.js";
				break;
			case OPEN_STREET_MAPS:
				return "osmap.js";
				break;
			case BING_MAPS:
				return "bingmap.js";
				break;
		}
	}
	function includeOSMfile(){
		if( getMapProvider() == OPEN_STREET_MAPS )
			$this->AddJSFile("plugins/OpenLayers.js");
	}
	
	function displayTabsSections( $tabId )
	{
		$tabs = $this->getArrTabs();
		$tab = null;
		for( $i = 0; $i < count( $tabs ); $i++ )
		{
			if( $tabs[ $i ][ 'tabId' ] == $tabId )
			{
				$tab = $tabs[ $i ];
				break;
			}
		}
		if( !$tab )
			return;
		
		if( $tab[ 'nType' ] == TAB_TYPE_TAB )
		{
			$this->displayTabGroup( $i );
		}
		else if( $tab[ 'nType' ] == TAB_TYPE_SECTION )
		{
			$this->displaySection( $tab );
		}
		else if( $tab[ 'nType' ] == TAB_TYPE_STEP )
		{
			$this->displayStep( $i );
		}
		
	}
	
	function displaySection( $tabInfo )
	{
		$layout = GetPageLayout( $this->shortTableName, $this->pageType, $tabInfo['tabId'] );
		if( $layout )
			$this->AddCSSFile( $layout->getCSSFiles(isRTL(), $this->mobileTemplateMode(), $this->pdfMode != "" ) );		
		
		if( $this->getLayoutVersion() != BOOTSTRAP_LAYOUT )
		{
			if($tabInfo['expandSec'] || $this->pdfMode)
			{
				//	show expanded
				$src = 'images/minus.gif';
				$hiddenStyle = '';
			}
			else
			{
				$src = 'images/plus.gif';
				$hiddenStyle = 'style="display: none;"';
			}
			$layoutClasses = '';
			if( $layout )
				$layoutClasses = ' '.$layout->style." page-".$layout->name;
		
			if( !$this->pdfMode )
				echo '<img id="section_'.$tabInfo['tabId'].$this->id.'Butt" border="0" src="'.GetRootPathForResources($src).'" valign="middle" alt="*" />';
			echo $tabInfo['tabName'].'<br>
					<div id="section_'.$tabInfo['tabId'].$this->id.'" class="sectionFrame rnr-pagewrapper'.$layoutClasses.'" '.$hiddenStyle.' >';
			$this->xt->displayPartial(GetTemplateName($this->shortTableName, $this->pageType."_".$tabInfo['tabId']));
			echo '</div>';
		} 
		else 
		{
			$this->xt->displayPartial(GetTemplateName($this->shortTableName, $this->pageType."_".$tabInfo['tabId']));
		}
	}
	
	function displayTabGroup( $startIndex )
	{
		$tabs = $this->getArrTabs();

		$firstTabId = $tabs[ $startIndex ][ 'tabId' ];
		$tabGroupId = $tabs[ $startIndex ][ 'tabGroup' ];

		if( !$tabGroupId || $tabs[ $startIndex ][ 'nType' ] != TAB_TYPE_TAB )
			return;
		
		//	display all tabs as secions in PDF mode
		if( $this->pdfMode )
		{
			for( $i = $startIndex ; $i < count($tabs); ++$i )
			{
				if( $tabGroupId != $tabs[$i]['tabGroup'] )
					break;
				$this->displaySection( $tabs[$i] );
			}
			return;
		}
	
		//	display tab control
		
		if( $this->getLayoutVersion() != BOOTSTRAP_LAYOUT )
		{
			echo '<div id="tabGroup_' . $firstTabId . $this->id . '" class="yui-navset">';
			echo '<ul class="yui-nav">';

			$selected = "selected";
			for( $i = $startIndex ; $i < count($tabs); ++$i )
			{
				if( $tabGroupId != $tabs[$i]['tabGroup'] )
					break;
				echo '<li class="rnr-tab ' . $selected . ' rnr-tab-navigation">';
				echo '<a href="#' . $tabs[$i]['tabId'] . '"><span>' . $tabs[$i]['tabName'] . '</span></a></li>';
				$selected = "";
			}
			echo '</ul>';
			//	display tabs
			echo '<div class="yui-content">';

			$firstTab = true;
			for( $i = $startIndex ; $i < count($tabs); ++$i )
			{
				if( $tabGroupId != $tabs[$i]['tabGroup'] )
					break;

				$layoutClasses = '';
				$layout = GetPageLayout( $this->shortTableName, $this->pageType, $tabs[$i]['tabId'] );
				if( $layout )
				{
					$this->AddCSSFile( $layout->getCSSFiles(isRTL(), $this->mobileTemplateMode(), $this->pdfMode != "" ) );				
					$layoutClasses = ' '.$layout->style." page-".$layout->name;
				}
				if( !$firstTab )
					$layoutClasses.= ' rnr-hidden-tab-panel';
				$firstTab = false;
				
				echo '<div id="'.$tabs[$i]['tabId'].$this->id.'" class="rnr-pagewrapper'.$layoutClasses.'">';
				$this->xt->displayPartial(GetTemplateName($this->shortTableName, $this->pageType."_".$tabs[$i]['tabId']));
				echo "</div>";
			}
			echo '</div></div>';
		}
		else
		{
			//	bootstrap tab control
/*
			echo '<div class="panel-heading"><ul class="nav nav-tabs" role="tablist">';
			$selected = "active";
			for( $i = $startIndex ; $i < count($tabs); ++$i )
			{
				if( $tabGroupId != $tabs[$i]['tabGroup'] )
					break;
				
				echo '<li role="presentation" class="' . $selected . '">';
				echo '<a aria-controls="settings" role="tab" data-toggle="tab" href="#' . $tabs[$i]['tabId'] . $this->id . '">' . $tabs[$i]['tabName'] . '</a></li>';
				$selected = "";
			}
			echo '</ul></div>';
*/			
			echo '<div class="tab-content">';
			$selected = "active";
			for( $i = $startIndex ; $i < count($tabs); ++$i )
			{
				if( $tabGroupId != $tabs[$i]['tabGroup'] )
					break;
					
				$layout = GetPageLayout( $this->shortTableName, $this->pageType, $tabs[$i]['tabId'] );
				if( $layout )
				{
					$this->AddCSSFile( $layout->getCSSFiles(isRTL(), $this->mobileTemplateMode(), $this->pdfMode != "" ) );		
				}	
				echo '<div role="tabpanel" class="tab-pane ' . $selected . '" id="' . $tabs[$i]['tabId'] . $this->id . '">';
				$this->xt->displayPartial(GetTemplateName($this->shortTableName, $this->pageType."_".$tabs[$i]['tabId']));
				echo '</div>';
				$selected = "";
			}
			echo '</div>';
		}
	}
	
	function displayStep( $index )
	{
		$tabs = $this->getArrTabs();
		$tabInfo = $tabs[ $index ];
		
		$hiddenStyle = "";
		if( $index != $this->initialStep )
		{
			$hiddenStyle = 'style="display:none"';
		}
		$layoutClasses = '';
		$layout = GetPageLayout($this->shortTableName, $this->pageType, $tabInfo['tabId']);
		if($layout)
		{
			$layoutClasses = ' '.$layout->style." page-".$layout->name;
			$this->AddCSSFile($layout->getCSSFiles(isRTL(), $this->mobileTemplateMode(), $this->pdfMode != ""));
		}

		echo '<div id="step_'.$index.'_'.$this->id.'" class="stepFrame rnr-pagewrapper' . $layoutClasses . '" data-step="'.$index.'" ' . $hiddenStyle . ' >';
		$this->xt->displayPartial(GetTemplateName($this->shortTableName, $this->pageType."_".$tabInfo['tabId']));
		echo '</div>';	
	}
	/**
	 *	Returns true is the page has multistepped layout
	 *  @return boolean
	 */
	function isMultistepped()
	{
		return false;
	}
	
	function prepareSteps()
	{
		if( !$this->isMultistepped() )
			return;
		$steps = $this->getArrTabs();
		if( count($steps) > 1 )
		{
			$this->xt->assign("prevStepButton", true);
			$this->xt->assign("nextStepButton", true);
			$this->xt->assign("nextstep_button_attrs", 'id="nextstep' . $this->id . '"');
			$this->xt->assign("prevstep_button_attrs", 'id="prevstep' . $this->id . '"');
		}
		$this->xt->assign("stepnav_attrs", 'id="stepnav' . $this->id . '"');
		
		
	}

	protected function preparePdfControls()
	{
		if( !$this->viewPdfEnabled )
			return;
			
		if( $this->pdfMode )
			return;

		$this->controlsMap['printPdf'] = array();
		$this->xt->assign("pdflink_block", true);
	}
	
	function formatReportFieldValue( $field, &$data, $keylink = "" )
	{
		if( $this->format == "excel" || $this->format == "word")
		{
			return $this->getExportValue($field, $data, $keylink);
		}
		return $this->showDBValue($field, $data, $keylink);
	}
	
	/**
	 *
	 */
	function getMasterTableInfo( $table = "")
	{
		if( $table == "" )
			$table = $this->masterTable;
			
		return $this->getMasterTableInfoByPSet($this->tName, $table, $this->pSet);
	}

	/**
	 * @param String tName
	 * @param String mtName
	 * @param ProjectSettings pSet  
	 * @return Array
	 */
	protected function getMasterTableInfoByPSet( $tName, $mtName, $pSet )
	{
		$masterTablesInfoArr = $pSet->getMasterTablesArr( $tName );
		
		if( !$masterTablesInfoArr )
			return array();
		
		foreach( $masterTablesInfoArr as $masterTableData )
		{
			if( $mtName == $masterTableData['mDataSourceTable'] ) 
				return $masterTableData;
		}
		
		return array();	
	}
	
	/**
	 * A wrapper for SearchClause::getSearchObject
	 * @return SearchClause
	 */
	public function getSearchObject()
	{
		return SearchClause::getSearchObject( $this->tName, $this->dashTName, $this->sessionPrefix, $this->cipherer, $this->searchSavingEnabled, $this->pSet );
	}
	
	public function displayMenu($menuTag, $menuType) 
	{		
		if( $menuTag != WELCOME_MENU )
			$menuName = $this->pSet->getMenuName($this->xt->template_file, $menuTag, $menuType);
		else
			$menuName = $menuTag;
			
		$menuStyle = $this->pSet->getMenuStyle($this->xt->template_file, $menuTag, $menuType);
		
		if( $this->isAdminTable() )
			$menuName = "adminarea";
			
		$xt = new Xtempl();
		$xt->assign("menuName", $menuName); 
		$xt->assign("menustyle", $menuStyle ? "second" : "main" );

		if( $menuType == "quickjump" )
			$menuMode = MENU_QUICKJUMP;
		else if( $menuType == "horizontal" )
			$menuMode = MENU_HORIZONTAL;
		else
			$menuMode = MENU_VERTICAL;
			
		/* ??? */
		if( !$this->isAdminTable() )
		{
			if( $menuMode != MENU_QUICKJUMP )
			{
				if( ProjectSettings::isMenuTreelike( $menuName ) )
				{

					if( MENU_VERTICAL == $menuMode )
						$xt->assign("treeLikeTypeMenu",true);
					else	
						$xt->assign("simpleTypeMenu",true);
				}
				else
				{
					if( !$this->mobileTemplateMode() )
						$xt->assign("simpleTypeMenu",true);
					else
						$xt->assign("treeLikeTypeMenu",true);
				}
			}
			if($this->pageType == PAGE_MENU && IsAdmin() && !$this->mobileTemplateMode())
				$xt->assign("adminarea_link",true);
		} 
		else 
		{
			//Admin Area menu items
			$xt->assign("adminAreaTypeMenu",true);
		}	
		
		$menuRoot = $this->getMenuRoot( $menuName, $menuMode );
		
		MenuItem::setMenuSession();
		if($this->getLayoutVersion() == 3 && $menuRoot->isDrillDown() )
		{
			$peers = $this->prepareActiveMenuBranch( $menuRoot, $xt );
			$menuRoot->setCurrMenuElem($xt);
			//	show only current menu item peers
		}
		else
		{
			// call xtempl assign, set session params
			$menuRoot->assignMenuAttrsToTempl($xt);
			$menuRoot->setCurrMenuElem($xt);
		}
		
		$xt->assign("mainmenu_block",true);
		
		$mainmenu = array();
		if(isEnableSection508()) 
			$mainmenu["begin"]="<a name=\"skipmenu\"></a>";
		$mainmenu["end"] = '';
		
		$countLinks = 0;
		$countGroups = 0;
		$showMenuCollapseExpandAll = false;
		foreach($menuRoot->children as $ind=>$val)
		{
			if($val->showAsLink)
				$countLinks++;
			if ($val->showAsGroup)
			{
				if (count($val->children))
					$showMenuCollapseExpandAll = true;
				$countGroups++;
			}
		}
		$xt->assign("menu_collapse_expand_all", $showMenuCollapseExpandAll);
		$xt->assignbyref("mainmenu_block",$mainmenu);
			
		$menufile = $menuName;
		if($this->getLayoutVersion() == 1)
		{
			$menufile = "old".$menuName;
		}
		if($this->getLayoutVersion() == 3)
		{
			$menufile = "bs".$menuName;
		}
		
		if( MENU_QUICKJUMP == $menuMode )
			$menufile .= "_"."mainmenu_quickjump.htm";
		else if( MENU_HORIZONTAL == $menuMode )
			$menufile .= "_"."mainmenu_horiz.htm";
		else if($this->mobileTemplateMode() && $this->getLayoutVersion() != 1)
			$menufile .= "_"."mainmenu_m.htm";
		else
		{
			//	vertical menu
			if($this->getLayoutVersion() == 3  && $menuName != WELCOME_MENU )
			{
				if( ProjectSettings::isMenuTreelike( $menuName ) )
					$menufile .= "_"."mainmenu_tree.htm";
				else 
					$menufile .= "_"."mainmenu_horiz.htm";
			}
			else
			{
				$menufile .= "_"."mainmenu.htm";
			}
		}

		$xt->load_template( $menufile );

		if( $peers )
		{
			$menuContent = array();
			foreach( $peers as $p )
			{
				$menuContent[] = $xt->fetch_loaded("item".$p->id."_menulink");
			}
			$xt->assign("active_submenu", implode( "",  $menuContent ));
		}
		
		$xt->display_loaded();
	}
	
	/**
	 * @param String mTName
	 * @param String mType
	 * @param String tName
	 * @param String pType
	 * @return Array
	 */
	protected function getMenuItemDetailPeersData( $mTName, $mType, $tName, $pType )
	{
		$mPSet = new ProjectSettings( $mTName, $mType );
		$peers = array();
		
		foreach( $mPSet->getDetailTablesArr() as $dt )
		{
			if( $dt["dDataSourceTable"] == $tName && $dt["dType"] == $pType )
				continue;
			
			if( $dt["dType"] == PAGE_LIST )
				$type = "List";
			elseif( $dt["dType"] == PAGE_CHART )
				$type = "Chart";
			else
				$type = "Report";
			
			if( !$this->isUserHaveTablePerm( $dt["dDataSourceTable"], $type ) )
				continue;
			
			$mKeys = array();
			$keys = array();
			foreach( $dt["masterKeys"] as $idx => $dk )
			{
				if( !isset( $_SESSION[ $dt["dDataSourceTable"]."_masterkey".($idx + 1) ] ) )
					break;
					
				$keys[] = $_SESSION[ $dt["dDataSourceTable"]."_masterkey".($idx + 1) ];
				$mKeys[] =  "masterkey".($idx + 1)."=".rawurlencode( $_SESSION[ $dt["dDataSourceTable"]."_masterkey".($idx + 1) ] );
			}				
			
			if( !count( $keys ) )
			{
				$masterRecordData = $this->getMasterRecord();	
				foreach( $dt["masterKeys"] as $idx => $dk )
				{
					$keys[] = $masterRecordData[ $dk ];
					$mKeys[] = "masterkey".($idx + 1)."=".rawurlencode( $masterRecordData[ $dk ] );
				}	
			}
			
			$href = GetTableLink( GetTableURL( $dt["dDataSourceTable"] ), $dt["dType"] );
			$href.= "?".implode("&", $mKeys) ."&mastertable=" . rawurlencode($mTName);
			
			$keyTitle = implode(", ", $keys);
			$caption = GetTableCaption( GoodFieldName( $dt["dDataSourceTable" ]) ) ." [".$keyTitle."]";
			
			$peers[] = array("title" => $caption, "href" => $href);			
		}
		
		return $peers;
	}
	
	/**
	 * @param &MenuItem menuRoot
	 * @param &MenuItem currentMenuItem
	 * @return Array
	 */
	protected function getMasterDetailMenuItems( &$menuRoot, &$currentMenuItem )
	{
		$items = array();
		
		$pSet = $this->pSet;
		$tName = $this->tName;
		$caption = GetTableCaption( GoodFieldName($tName) );
		$pType = $this->pageType;
		$sessionPrefix = $this->sessionPrefix;
		while( isset( $_SESSION[ $sessionPrefix."_mastertable" ] ) )
		{
			$mTName = $_SESSION[ $sessionPrefix."_mastertable" ];
			
			$masterTableData = $this->getMasterTableInfoByPSet( $tName, $mTName, $pSet );
			if( count( $masterTableData ) )
			{
				$keys = array();
				foreach( $masterTableData["detailKeys"] as $idx => $dk )
				{
					$keys[] = $_SESSION[ $sessionPrefix."_"."masterkey".($idx + 1) ];
				}
				
				if( $currentMenuItem )
				{
					$itemData = array("isMenuItem" => true, "menuItem" => $currentMenuItem);
				}
				else
				{
					$caption = GetTableCaption( GoodFieldName( $tName ) );
					$href = GetTableLink( GetTableURL( $tName ), $pType );
					$itemData = array("isMenuItem" => false, "menuItem" => array( "title" => $caption, "href" => $href ));
				}

				if( !count( $items ) )
				{
					$otherDetailsData = $this->getMenuItemDetailPeersData( $mTName, $masterTableData["type"], $tName, $pType );	
					if(  count( $otherDetailsData ) > 0 ) 
						$itemData["detailPeers"] = $otherDetailsData;
				}
				
				$itemData["keyTitle"] = implode(", ", $keys);
				$items[] = $itemData;
				
				$currentMenuItem = $menuRoot->getItemByTypeAndTable( $mTName, $masterTableData["type"] );
				
				$tName = $mTName;
				$pType = $masterTableData["type"];
				$sessionPrefix = $mTName;
				$pSet = new ProjectSettings( $mTName, $masterTableData["type"] );
			}
			else
				break;
		}	
		
		if( count( $items ) )
		{
			if( $currentMenuItem )
			{
				$items[] = array("isMenuItem" => true, "menuItem" => $currentMenuItem);
			}
			else
			{
				$href = GetTableLink( GetTableURL( $tName ), $pType );
				$items[] = array("isMenuItem" => false, "menuItem" => array( "title" => $caption, "href" => $href ) );
			}
		}
		
		return $items;	
	}
	
	/**
	 * @param String menuId
	 */
	protected function prepareBreadcrumbs( $menuId )
	{	
		if( $this->getLayoutVersion() != BOOTSTRAP_LAYOUT )
			return;
		
		$detailItem = isset( $_SESSION[ $this->sessionPrefix."_mastertable" ] );
		
		$menuRoot = $this->getMenuRoot( $menuId, MENU_HORIZONTAL );
		MenuItem::setMenuSession();
		$currentMenuItem = $menuRoot->getCurrentItem( $_SESSION["menuItemId"] );
		if( !$currentMenuItem && !$detailItem )
			return;
		
		if( $currentMenuItem && !$detailItem )
		{
			if( !$currentMenuItem->parentItem )
				return;
		}
		
		$this->xt->assign( "breadcrumbs", true );
		
		$breadChain = $this->getMasterDetailMenuItems( $menuRoot, $currentMenuItem );		
		$firstShowPeersIndex = count( $breadChain );
		if( $firstShowPeersIndex > 0 && $breadChain[ $firstShowPeersIndex - 1 ]["isMenuItem"] )
			$currentMenuItem = $breadChain[ $firstShowPeersIndex - 1 ]["menuItem"]->parentItem;
		
		if( $currentMenuItem ) 
		{
			while( $currentMenuItem->parentItem )
			{
				$breadChain[] = array("isMenuItem" => true, "menuItem" => $currentMenuItem);
				$currentMenuItem = $currentMenuItem->parentItem;
			}
		}
		
		$breadcrumbs = array();
		
		//	add home item
		for( $i = count( $breadChain ) - 1; $i >= 0; --$i )
		{
			$itemData = $breadChain[ $i ];
			$crumb = array();
			
			$item = null;
			$attrs = array();
			
			if( $itemData["isMenuItem"] ) 
			{
				$item = $itemData["menuItem"];
				$attrs = $item->getMenuItemAttributes();
				$href = $attrs["href"];
				$title = $item->title;
			}
			else
			{
				$href = $itemData["menuItem"]["href"];
				$title = $itemData["menuItem"]["title"];			
			}
			
			if( $itemData["keyTitle"] )
				$title.= " [". $itemData["keyTitle"] ."]";
			
			if( $i < $firstShowPeersIndex && $i )
				$crumb["crumb_attrs"] = 'href="' . $href . ( strpos( $href, "?" ) !== FALSE ? "&a=return" : "?a=return") . '"';
			else	
				$crumb["crumb_attrs"] = 'href="' . $href . '"';
			
			if( $firstShowPeersIndex > 0 && $i == 0 )
				$crumb["crumb_title_span"] = true;	
			else		
				$crumb["crumb_title_link"] = true;	
			
			$crumb["crumb_title"] = $title;
			
			if(  $i < $firstShowPeersIndex && !count( $itemData["detailPeers"] ) || ( $this->isAdminTable() && GetGlobalData("nLoginMethod", 0) == SECURITY_AD ))
			{
				$breadcrumbs[] = $crumb;
				continue;
			}
			
			if ( is_null($item) ) 
				continue;
			
			$dropItems = array();
			$peers = array();
			$detailPeers = count( $itemData["detailPeers"] ) > 0;
			
			if( $detailPeers  )
				$peers = $itemData["detailPeers"];
			else	
				$item->parentItem->getItemDescendants( $peers );
			
			if( count( $peers ) > 1 || $detailPeers )
			{
				foreach( $peers as $p )
				{		
					if( $detailPeers )
					{
						$dropItems[] = '<li><a href="'. $p["href"] .'">'. $p["title"] .'</a></li>';
						continue;
					}
					
					if( $p->id == $item->id )
						continue;
					
					$attrs = array();
					
					if( !$p->isShowAsLink() && $p->isShowAsGroup() )
					{
						//	show link to the first child if group
						$childWithLink = $p->getFirstChildWithLink();
						if( $childWithLink )
							$attrs = $childWithLink->getMenuItemAttributes();
					}
					else if( $p->isShowAsLink() )
					{
						$attrs = $p->getMenuItemAttributes();
					}
					
					if( count( $attrs ) )
						$dropItems[] = '<li><a href="' . $attrs["href"] . '">' . $p->title . '</a></li>';
				}
				
				if( count( $dropItems ) > 0 )
				{
					$crumb["crumb_title"] .= '<span class="caret"></span>';
					$crumb["crumb_attrs"] .= ' class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"';
					$crumb["crumb_item_class"] = 'dropdown';
					$crumb["crumb_dropdown"] = '<ul class="dropdown-menu">'. implode( "", $dropItems ) .'</ul>';
				}
			}
			
			$breadcrumbs[] = $crumb;
		}
		$this->xt->assign_loopsection( "crumb", $breadcrumbs );
	}
	
	/**
	 *
	 */
	protected function prepareActiveMenuBranch( $menuRoot, $xt )
	{
		//	display only current element peers and their children
		$parentItem = $menuRoot;
		$currentMenuItem = $menuRoot->getCurrentItem( $_SESSION["menuItemId"] );
		if( $currentMenuItem )
		{
			$parentItem = $currentMenuItem->parentItem;
		}

		$peers = array();
		$parentItem->getItemDescendants( $peers, 1 );
		
		$peerIds = array();
		foreach( $peers as $p )
			$peerIds[ $p->id ] = true; 

		$menuRoot->assignMenuAttrsToTempl( $xt, $peerIds );
		if( $peers && $parentItem->id != $menuRoot->id ) 
		{
			//	return only 1st level siblings
			$peers = array();
			$parentItem->getItemDescendants( $peers, 0 );
			return $peers;
		}
		else
			return array();
	}

	/*
	 *	Creates  MenuItem object tree and returns the root node
	 * @param string $menuId
	 * @param string $menuMode - either MENU_HORIZONTAL or MENU_VERTICAL
	 */
	public function getMenuRoot( $menuId, $menuMode )
	{
		if( !isset( $this->menuRoots[ $menuMode . '-' . $menuId ] ) )
		{
			$menuNodes = $this->getMenuNodes($menuId);

			// need to predefine vars
			$nullParent = NULL;
			$rootInfoArr = array("id"=>0, "href"=>"");

			/* $menuNodesIndex must be set to 0 for to operate properly */
			global $menuNodesIndex;
			$menuNodesIndex=0;
			
			$menuMap = array();
			$this->menuRoots[ $menuMode . '-' . $menuId ] = new MenuItem($rootInfoArr, $menuNodes, $nullParent, $menuMap, $this, $menuId, $menuMode );
			
		}
		return $this->menuRoots[ $menuMode . '-' . $menuId ];
	}
	
	/**
	 *
	 */
	public function fillControlFlags( $field, $required = false )
	{
		if( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT && ( $required || $this->pSet->isRequired( $field ) ) )
			$this->xt->assign( GoodFieldName( $field  ) . "_label", array( "end" => '&nbsp;<span class="icon-required"></span>' ) );
		else
			$this->xt->assign( GoodFieldName( $field  ) . "_label", true );
	}
	
	public function assignDetailsTablesBadgeColors()
	{
		$colors = array();
		$colors[] = "lightslategrey";
		$colors[] = "dodgerblue";
		$colors[] = "maroon";
		$colors[] = "teal";
		$colors[] = "orange";
		$colors[] = "chocolate";
		$colors[] = "crimson";
		$colors[] = "indianred";
		$colors[] = "slateblue";
		$colors[] = "mediumseagreen";
		$colors[] = "darkolivegreen";

		$styles = array();
		foreach( $this->allDetailsTablesArr as $dt )
		{
			$styles[] = "." . $dt['dShortTable'] . "_badge { background-color: " . $colors[ rand(0, count($colors) - 1 ) ] . "; }"; 
		}
		$this->xt->assign( "containerCss", $this->xt->getvar( "containerCss" ) . implode( "", $styles ) );
	}
	
	protected function setDetilsBadgeStyles()
	{
		if( !$this->detailsInGridAvailable() )
			return;
			
		foreach( $this->allDetailsTablesArr as $detData )
		{
			if( !$detData["dispChildCount"] )
				continue;
				
			$dSet = new ProjectSettings( $detData["dDataSourceTable"], $detData["dType"] );
			$color = $dSet->getDetailsBadgeColor();
			if( strlen( $color ) )
				$this->row_css_rules = ".badge.badge.".$detData["dShortTable"]."_badge { background-color: #".$color." }\n".$this->row_css_rules;
		}
	}
	
	function detailsInGridAvailable()
	{
		for($i = 0; $i < count($this->allDetailsTablesArr); $i ++) 
		{
			if( $this->permis[$this->allDetailsTablesArr[$i]['dDataSourceTable']]['add'] || $this->permis[$this->allDetailsTablesArr[$i]['dDataSourceTable']]['search'] )
				return true;
		}
		return false;
	}
	
	public function mobileTemplateMode() {
		return mobileDeviceDetected() && $this->getLayoutVersion() != BOOTSTRAP_LAYOUT;
	}
	
	
	/**
	 * 	
	 * 	@return Array
	 */
	protected function getColumnsToHide() 
	{
		return $this->getHiddenColumnsByDevice();
	}
	
	protected static function deviceClassToMacro( $deviceClass ) {
		if( $deviceClass == TABLET_10_IN || $deviceClass == TABLET_7_IN )
			return 1;
		if( $deviceClass == SMARTPHONE_LANDSCAPE || $deviceClass == SMARTPHONE_PORTRAIT )
			return 2;
		return 0;
	}
	
	/**
	 * 	Prepare array with Show/Hide fields data combined with Columns by device
	 * 	@return Array
	 */
	protected function getCombinedHiddenColumns() 
	{
		if( !$this->pSet->isAllowShowHideFields() ) 
			return $this->getHiddenColumnsByDevice();
		
		include_once getabspath("classes/paramsLogger.php");
		
		$logger = new paramsLogger( $this->tName, SHFIELDS_PARAMS_TYPE );
		$hideColumns = $logger->getShowHideData();
		
		$columnsByDeviceEnabled = $this->pSet->columnsByDeviceEnabled();
		
		$ret = array();
		$devices = array( DESKTOP, TABLET_10_IN, SMARTPHONE_LANDSCAPE, SMARTPHONE_PORTRAIT, TABLET_7_IN );
		foreach( $devices as $d )
		{
			if( !$columnsByDeviceEnabled )
				$ret[ $d ] = $hideColumns[ 0 ];
			else if( $hideColumns[ RunnerPage::deviceClassToMacro($d) ] )
				$ret[ $d ] = $hideColumns[ RunnerPage::deviceClassToMacro($d) ];
			else
			{
				$ret[ $d ] = array_keys( $this->pSet->getHiddenGoodNameFields( $d ) );
			}
		}
		return $ret;
	}

	/**
	 * 	Prepare array with Columns by device
	 * 	@return Array
	 */
	protected function getHiddenColumnsByDevice() 
	{
		$columnsToHide = array();
		$devices = array( TABLET_7_IN, SMARTPHONE_PORTRAIT, SMARTPHONE_LANDSCAPE, TABLET_10_IN, DESKTOP );
		foreach( $devices as $d )
		{
			$columnsToHide[ $d ] = array_keys($this->pSet->getHiddenGoodNameFields( $d ));
		}
		return $columnsToHide;
	}
	
}



class DetailsPreview extends RunnerPage
{
	function __construct($params)
	{
		parent::__construct($params);
	}

	protected function assignSessionPrefix()
	{
		$this->sessionPrefix = "_detailsPreview";
	}	
	
}

$menuNodesObject = null;
?>
