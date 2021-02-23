<?php
class EditPage extends RunnerPage
{
	protected $cachedRecord = null;

	public $keys = array();
	public $oldKeys = array();
	protected $keysChanged = false;

	public $jsKeys = array();

	public $keyFields = array();

	/**
	 * An array of edit page's fields
	 */
	public $editFields = array();
	public $readEditValues = false;
	/**
	 *	Values to be displayed in Edit controls
	 */
	protected $controlsDisabled = false;

	public $action = "";

	public $lockingAction = "";
	public $lockingSid = null;
	public $lockingKeys = null;
	public $lockingStart = null;

	protected $lockingMessageStyle = "display:none;";
	protected $lockingMessageText = "";

	public $messageType = MESSAGE_ERROR;

	protected $auditObj = null;

	protected $oldRecordData = null;
	protected $newRecordData = array();
	protected $newRecordBlobFields = array();

	protected $updatedSuccessfully = false;

	/**
	 * It's set up in inline edit mode only
	 */
	public $screenWidth = 0;

	/**
	 * It's set up in inline edit mode only
	 */
	public $screenHeight = 0;

	/**
	 * It's set up in inline edit mode only
	 */
	public $orientation = '';


	/**
	 * @type Number
	 */
	protected $afterEditAction = null;

	/**
	 * @type Array
	 */
	protected $prevKeys = null;
	/**
	 * @type Array
	 */
	protected $nextKeys = null;

	protected $recordValuesToEdit = null;

	/**
	 * @constructor
	 */
	function __construct(&$params)
	{
		parent::__construct($params);

		$this->setKeysForJs();

		$this->auditObj = GetAuditObject($this->tName);

		$this->editFields = $this->getPageFields();

		$this->formBricks["header"] = "editheader";
		$this->formBricks["footer"] = array( "editbuttons", "righteditbuttons");
		$this->assignFormFooterAndHeaderBricks( true );

		$this->addPageSettings();
	}

	/**
	 * Add js page settings
	 */
	protected function addPageSettings()
	{
		if( $_SESSION[ $this->sessionPrefix . "_recordUpdated" ] )
		{
			$this->setProxyValue( $this->shortTableName."_recordUpdated", true );
			unset( $_SESSION[ $this->sessionPrefix . "_recordUpdated" ] );
		} 
		else
			$this->setProxyValue( $this->shortTableName."_recordUpdated", false );
		
		if( !$this->isPopupMode() && !$this->isSimpleMode() )
			return;

		$afterEditAction = $this->getAfterEditAction();
		$this->jsSettings["tableSettings"][ $this->tName ]["afterEditAction"] = $afterEditAction;

		if ( $afterEditAction == AE_TO_DETAIL_LIST )
			$this->jsSettings["tableSettings"][ $this->tName ]["afterEditActionDetTable"] = GetTableURL( $this->pSet->getAEDetailTable() );

		if ( $this->mode == EDIT_POPUP )
		{
			if ( $afterEditAction == AE_TO_NEXT_EDIT )
				$this->jsSettings["tableSettings"][ $this->tName ]["nextKeys"] = $this->getNextKeys();

			if ( $afterEditAction == AE_TO_PREV_EDIT )
				$this->jsSettings["tableSettings"][ $this->tName ]["prevKeys"] = $this->getPrevKeys();
		}
	}

	/**
	 * Get the correct after edit action
	 * basing on the table settings
	 * @return Number
	 */
	protected function getAfterEditAction()
	{
		if( isset( $this->afterEditAction ) && !is_null( $this->afterEditAction ) )
			return $this->afterEditAction;

		$action = $this->pSet->getAfterEditAction();

		if( $this->isPopupMode() && $this->pSet->checkClosePopupAfterEdit()
			|| $action == AE_TO_VIEW && !$this->viewAvailable()
			|| $action == AE_TO_NEXT_EDIT && !count( $this->getNextKeys() )
			|| $action == AE_TO_PREV_EDIT && !count( $this->getPrevKeys() ) )
		{
			$action = AE_TO_LIST;
		}

		if( $action == AE_TO_DETAIL_LIST )
		{
			$dTName = $this->pSet->getAEDetailTable();
			$dPset = new ProjectSettings( $dTName );
			$dPermissions = $this->getPermissions( $dTName );

			if( !$dTName || $action == AE_TO_DETAIL_LIST && (!$dPset->hasListPage() || !$dPermissions["search"]) )
				$action = AE_TO_LIST;
		}

		$this->afterEditAction = $action;
		return $this->afterEditAction;
	}

	/**
	 * Assign session prefix
	 */
	protected function assignSessionPrefix()
	{
		if( $this->mode == EDIT_DASHBOARD || ( $this->isPopupMode() || $this->mode == EDIT_INLINE ) && $this->dashTName )
		{
			$this->sessionPrefix = $this->dashTName."_".$this->tName;
			return;
		}

		parent::assignSessionPrefix();
	}

	/**
	 * Set session variables
	 */
	public function setSessionVariables()
	{
		parent::setSessionVariables();

		$_SESSION[ $this->sessionPrefix.'_advsearch' ] = serialize($this->searchClauseObj);
	}

	/**
	 * Get the page's fields list
	 * @return Array
	 */
	protected function getPageFields()
	{
		if( $this->mode == EDIT_INLINE )
			return $this->pSet->getInlineEditFields();

		return $this->pSet->getEditFields();
	}

	/**
	 * Set keys values
	 * @param Array keys
	 */
	public function setKeys($keys)
	{
		$this->cachedRecord = null;
		$this->recordValuesToEdit = null;
		$this->keys = $keys;
		$this->setKeysForJs();
	}

	public function setKeysForJs()
	{
		$i = 0;
		foreach($this->keys as $field => $value)
		{
			$this->keyFields[ $i ] = $field;
			$this->jsKeys[ $i++ ] = $value;
		}
	}

	/**
	 * Tell whether the page was called to update locking state only
	 */
	public function isLockingRequest()
	{
		return $this->lockingObj && ($this->lockingAction != "");
	}

	/**
	 * Perform locking action the page was called for
	 */
	public function doLockingAction()
	{
		$arrkeys = explode("&", urldecode( $this->lockingKeys ));

		foreach(array_keys($arrkeys) as $ind)
			$arrkeys[$ind] = urldecode($arrkeys[$ind]);

		if($this->lockingAction == "unlock")
		{
			$this->lockingObj->UnlockRecord($this->tName, $arrkeys, $this->lockingSid);
		}
		else if($this->lockingAction == "lockadmin" && (IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP))
		{
			$this->lockingObj->UnlockAdmin($this->tName, $arrkeys, $this->lockingStart == "yes");
			if($this->lockingStart == "no")
				echo "unlock";
			else if($this->lockingStart == "yes")
				echo "lock";
		}
		else if($this->lockingAction == "confirm")
		{
			$lockMessage = "";
			if( !$this->lockingObj->ConfirmLock($this->tName, $arrkeys, $lockMessage) )
				echo $lockMessage;
		}
	}

	/**
	 * Set template file if it empty
	 */
	public function setTemplateFile()
	{
		if($this->mode == EDIT_INLINE)
			$this->templatefile = GetTemplateName($this->shortTableName, "inline_edit");
		parent::setTemplateFile();
	}

	public function init()
	{
		if( $this->eventsObject->exists("BeforeProcessEdit") )
			$this->eventsObject->BeforeProcessEdit( $this );

		parent::init();

	}

	public function process()
	{
		if( $this->action == "edited" )
		{
			$this->processDataInput();

			$this->readEditValues = !$this->updatedSuccessfully;

			if( $this->mode == EDIT_INLINE || $this->isPopupMode() )
			{
				$this->reportInlineSaveStatus();
				return;
			}

			if( $this->updatedSuccessfully )
			{
				if( $this->afterEditActionRedirect() )
					return;
			}
		}

		if( $this->captchaExists() )
		{
			$this->displayCaptcha();
		}

		$this->prgReadMessage();

		//	get the record to edit
		if( !$this->readRecord() )
			return;

		if( !$this->IsRecordEditable( false ) )
			return $this->SecurityRedirect();

		if( !$this->lockRecord() )
			return;

		$this->prepareReadonlyFields();

		$this->doCommonAssignments();
		$this->prepareButtons();
		$this->prepareSteps();
		$this->prepareEditControls();
		$this->fillCntrlTabGroups();

		$this->prepareJsSettings();

		$this->prepareDetailsTables();

		if( $this->mode != EDIT_INLINE )
			$this->addButtonHandlers();

		$this->addCommonJs();

		$this->fillSetCntrlMaps();

		$this->displayEditPage();
	}
	
	/**
	 * Add common javascript files and code
	 */
	function addCommonJs() 
	{
		parent::addCommonJs();
		
		if( $this->allDetailsTablesArr )
		{			
				$this->AddJSFile("include/jquery-ui/jquery-ui.min.js");
			$this->AddCSSFile("include/jquery-ui/smoothness/jquery-ui.min.css");
			$this->AddCSSFile("include/jquery-ui/smoothness/jquery-ui.theme.min.css");
		}
	}

	/**
	 * Add table settings
	 */
	protected function prepareJsSettings()
	{
		$this->jsSettings['tableSettings'][ $this->tName ]["keys"] = $this->jsKeys;
		$this->jsSettings['tableSettings'][ $this->tName ]['keyFields'] = $this->keyFields;
		$this->jsSettings['tableSettings'][ $this->tName ]['masterKeys'] = $this->getMarkerMasterKeys( $this->getCurrentRecordInternal() );

		if($this->lockingObj)
		{
			// $keys, $savedKeys could not be set properly if editid params were not passed, so use $this->keys instead
			$this->jsSettings['tableSettings'][ $this->tName ]["sKeys"] = implode("&", $this->keys);
			$this->jsSettings['tableSettings'][ $this->tName ]["enableCtrls"] = !$this->controlsDisabled;
			$this->jsSettings['tableSettings'][ $this->tName ]["confirmTime"] = $this->lockingObj->ConfirmTime;
		}
	}

	/**
	 * Assign basic page's xt variables
	 */
	protected function doCommonAssignments()
	{
		$this->xt->assign( "id", $this->id );

		//	display message
		$this->xt->assign("message_block", true);
		if( $this->isMessageSet() )
		{
			if( $this->getLayoutVersion() != BOOTSTRAP_LAYOUT )
			{
				$mesClass = $this->messageType == MESSAGE_ERROR ? "message rnr-error" : "message" ;
				$this->xt->assign("message", "<div class='".$mesClass."' >" . $this->message . "</div>" );
			} 
			else
			{
				$this->xt->assign("message", $this->message );
				$this->xt->assign("message_class", $this->messageType == MESSAGE_ERROR ? "alert alert-danger" : "alert alert-success" );
			}
		}
		else
		{
			$this->xt->displayBrickHidden("message");
		}

		//	display legacy page caption - key values
		$data = $this->getCurrentRecordInternal();
		foreach( $this->keyFields as $i => $k )
		{
			$viewFormat = $this->pSet->getViewFormat( $k );
			if( $viewFormat == FORMAT_HTML || $viewFormat == FORMAT_FILE_IMAGE || $viewFormat == FORMAT_FILE ||
				$viewFormat == FORMAT_HYPERLINK || $viewFormat == FORMAT_HYPERLINK || $viewFormat == FORMAT_EMAILHYPERLINK ||
				$viewFormat == FORMAT_CHECKBOX )
			{
				$this->xt->assign( "show_key" . ($i+1), runner_htmlspecialchars( $data[ $k ] ) );
			}
			else
			{
				$this->xt->assign( "show_key" . ($i+1), $this->showDBValue( $k, $data ) );
			}
		}
		//	labels
		$this->assignEditFieldsBlocksAndLabels();

		//	body["end"]	- this assignment is very important
		if($this->isSimpleMode() )
		{
			$this->assignBody();
			// assign body end
			$this->xt->assign("flybody", true);
		}
		
		$this->displayMasterTableInfo();
	}

	/**
	 * Display the edit page
	 */
	protected function displayEditPage()
	{
		// beforeshow event
		$templateFile = $this->templatefile;
		if( $this->eventsObject->exists("BeforeShowEdit") )
			$this->eventsObject->BeforeShowEdit($this->xt, $templateFile, $this->getCurrentrecordInternal(), $this);

		if( $this->isSimpleMode() )
		{
			$this->display($templateFile);
			return;
		}

		if( $this->isPopupMode() || $this->mode == EDIT_DASHBOARD )
		{
			$this->xt->assign("footer", false);
			$this->xt->assign("header", false);
			$this->xt->assign("body", $this->body);
			$this->displayAJAX($templateFile, $this->flyId + 1);
			exit();
		}

		if( $this->mode == EDIT_INLINE )
		{
			$returnJSON = array();
			$returnJSON["settings"] = $this->jsSettings;
			$returnJSON["controlsMap"] = $this->controlsHTMLMap;
			$returnJSON["viewControlsMap"] = $this->viewControlsHTMLMap;

			$this->xt->load_template($templateFile);
			$returnJSON["html"] = array();
			foreach($this->editFields as $f)
			{
				if( $this->detailKeysByM && in_array($f, $this->detailKeysByM) )
					continue;
					
				$returnJSON["html"][ $f ] = $this->xt->fetchVar(GoodFieldName($f)."_editcontrol");
			}
			$returnJSON["additionalJS"] = $this->grabAllJsFiles();
			$returnJSON["additionalCSS"] = $this->grabAllCSSFiles();
			echo printJSON($returnJSON);
			exit();
		}
	}

	/**
	 * Get extra JSON params to display the page on AJAX-like request
	 * @return Array
	 */
	protected function getExtraAjaxPageParams()
	{
		return $this->getSaveStatusJSON();
	}

	/**
	 * Set details preview on the edit master page
	 */
	protected function prepareDetailsTables()
	{
		if( !$this->isShowDetailTables || $this->mode == EDIT_DASHBOARD || $this->mode == EDIT_INLINE )
			return;

		$dpParams = $this->getDetailsParams( $this->id );
		$this->jsSettings['tableSettings'][ $this->tName ]['dpParams'] = array('tableNames' => $dpParams['strTableNames'], 'ids' => $dpParams['ids']);

		if( !count($dpParams['ids']) )
			return;

		$this->xt->assign("detail_tables", true);
		$this->flyId = $dpParams['ids'][ count($dpParams['ids']) - 1 ] + 1;
		for($d = 0; $d < count($dpParams['ids']); $d++)
		{
			$this->setDetailPreview( $dpParams['type'][ $d ], $dpParams['strTableNames'][ $d ], $dpParams['ids'][ $d ], $this->getCurrentRecordInternal() );
			$this->displayDetailsButtons( $dpParams['type'][ $d ], $dpParams['strTableNames'][ $d ], $dpParams['ids'][ $d ] );
		}
	}
	
	/**
	 *
	 */
	protected function displayDetailsButtons( $dpType, $dpTableName, $dpId )
	{
		if ( $dpType == PAGE_CHART || $dpType == PAGE_REPORT )
			return;

		$listPageObject = $this->getDetailsPageObject( $dpTableName, $dpId );
		
		if ( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT && $listPageObject->getLayoutVersion() == BOOTSTRAP_LAYOUT )
		{
			$listPageObject->assignButtonsOnMasterEdit( $this->xt );
		}
	}

	/**
	 * Assign buttons xt variables
	 */
	protected function prepareButtons()
	{
		if( $this->mode == EDIT_INLINE )
			return;

		$this->prepareNextPrevButtons();

		if( $this->isSimpleMode() )
		{
			//	back to list/menu buttons
			if( $this->pSet->hasListPage() )
			{
				$this->xt->assign("back_button", true);
				$this->xt->assign("backbutton_attrs", "id=\"backButton".$this->id."\"");
				$this->xt->assign("mbackbutton_attrs", "id=\"extraBackButton".$this->id."\"");
			}
			else if( $this->isShowMenu() )
			{
				$this->xt->assign("back_button", true);
				$this->xt->assign("backbutton_attrs", "id=\"backToMenuButton".$this->id."\"");
			}
		}

		if( $this->isPopupMode() )
		{
			$this->xt->assign("close_button", true);
			$this->xt->assign("closebutton_attrs", "id=\"closeButton".$this->id."\"");
		}

		$this->xt->assign("save_button", true);
		$addStyle = "";
		if ( $this->isMultistepped() )
		{
			$addStyle = " style=\"display: none;\"";
		}
		if( $this->controlsDisabled )
			$this->xt->assign("savebutton_attrs", "id=\"saveButton".$this->id."\" type=\"disabled\"" . $addStyle);
		else
			$this->xt->assign("savebutton_attrs", "id=\"saveButton".$this->id."\"" . $addStyle );

		$this->xt->assign("resetbutton_attrs", 'id="resetButton'.$this->id.'"');
		$this->xt->assign("reset_button", true);

		if( $this->mode == EDIT_DASHBOARD )
			return;

		if( $this->viewAvailable() )
		{
			$this->xt->assign("view_page_button", true);
			$this->xt->assign("view_page_button_attrs", "id=\"viewPageButton".$this->id."\"");
		}
	}

	protected function prepareNextPrevButtons()
	{
		if( !$this->pSet->useMoveNext() )
			return;

		$next = array();
		$prev = array();

		$this->getNextPrevRecordKeys( $this->getCurrentRecordInternal(), "Edit", $next, $prev, $this->mode == EDIT_DASHBOARD );

		//show Prev/Next buttons
		$this->assignPrevNextButtons( count( $next ) > 0, count( $prev ) > 0, $this->mode == EDIT_DASHBOARD && ($this->hasTableDashGridElement() || $this->hasDashMapElement()) ); // TODO: haMajorDashElem

		$this->jsSettings["tableSettings"][ $this->tName] ["prevKeys"] = $prev;
		$this->jsSettings["tableSettings"][ $this->tName ]["nextKeys"] = $next;
	}

	protected function readRecord()
	{
		if( $this->getCurrentRecordInternal() )
			return true;
		if($this->isSimpleMode() )
		{
			HeaderRedirect($this->pSet->getShortTableName(), "list", "a=return");
			exit();
		}
		//	nothing to edit.
		//	TODO: add some report or message
		exit();
		return false;
	}

	/**
	 *	Format and prepare readonly field values
	 */
	protected function prepareReadonlyFields()
	{
		$fields = $this->pSet->getFieldsList();
		$data = $this->getCurrentRecordInternal();

		//	prepare field values
		//	keys
		$keyParams = array();
		foreach( $this->keyFields as $i => $k )
		{
			$keyParams[] = "key" . ($i + 1) . "=" . rawurldecode( $this->keys[ $k ] );
		}
		$keylink = "&" . implode("&", $keyParams);

		foreach( $fields as $f )
		{
			if( $this->pSet->getEditFormat( $f ) == EDIT_FORMAT_READONLY &&
				( $this->pSet->appearOnEditPage( $f ) || $this->pSet->appearOnInlineEdit( $f ) ) )
				$this->readOnlyFields[ $f ] = $this->showDBValue( $f , $data, $keylink );
		}
	}

	/**
	 *	Locks record for editing.
	 * Returns false if the page can not continue processing. True otherwise.
	 */
	protected function lockRecord()
	{
		if( !$this->lockingObj )
			return true;

		//	locked OK
		if( $this->lockingObj->LockRecord( $this->tName, $this->keys) )
		{
			$this->body["begin"].= '<div class="rnr-locking" style="' .$this->lockingMessageStyle. '">' .$this->lockingMessageText. '</div>';
			return true;
		}

		//	NOT locked
		//	inline mode
		if($this->mode == EDIT_INLINE)
		{
			if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
				$lockmessage = $this->lockingObj->GetLockInfo($this->tName, $this->keys, false, $this->id);
			else
				$lockmessage = $this->lockingObj->LockUser;

			$returnJSON = array();
			$returnJSON['success'] = false;
			$returnJSON['message'] = $lockmessage;
			$returnJSON['enableCtrls'] = false;
			$returnJSON['confirmTime'] = $this->lockingObj->ConfirmTime;
			echo printJSON($returnJSON);
			exit();
		}

		//	other modes
		$this->controlsDisabled = true;
		$this->lockingMessageStyle = "style='display:block;'";
		$this->lockingMessageText = $this->lockingObj->LockUser;

		if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
		{
			$ribbonMessage = $this->lockingObj->GetLockInfo($this->tName, $this->keys, true, $this->id);
			if($ribbonMessage != "")
				$this->lockingMessageText = $ribbonMessage;
		}

		$this->body["begin"].= '<div class="rnr-locking" style="' .$this->lockingMessageStyle. '">' .
			$this->lockingMessageText .
			'</div>';
		return true;
	}

	/**
	 * Print JSON containing a saved record data on ajax-like request
	 */
	protected function reportInlineSaveStatus()
	{
		echo printJSON( $this->getSaveStatusJSON() );
		exit();
	}

	/**
	 * Get an array containing the record save status
	 * @return Array
	 */
	protected function getSaveStatusJSON()
	{
		$returnJSON = array();

		if( $this->action != "edited" || $this->isSimpleMode() )
			return $returnJSON;

		$returnJSON['success'] = $this->updatedSuccessfully;
		$returnJSON['message'] = $this->message;
		$returnJSON['lockMessage'] = $this->lockingMessageText;

		if( !$this->isCaptchaOk )
			$returnJSON['wrongCaptchaFieldName'] = $this->getCaptchaFieldName();

		if( !$this->updatedSuccessfully )
			return $returnJSON;

		//	successful update. Return new keys and field values
		$data = $this->getCurrentRecordInternal();
		if( !$data )
			$data = $this->newRecordData;

		//	details tables keys
		$returnJSON['detKeys'] = array();
		foreach( $this->pSet->getDetailTablesArr() as $dt )
		{
			$dkeys = array();
			foreach( $dt["masterKeys"] as $idx => $mk )
			{
				$dkeys[ "masterkey".($idx + 1) ] = $data[ $mk ];
			}
			$returnJSON['detKeys'][ $dt['dDataSourceTable'] ] = $dkeys;
		}

		//	prepare field values
		//	keys
		$keyParams = array();
		foreach( $this->keyFields as $i => $k )
		{
			$keyParams[] = "key" . ($i + 1) . "=" . rawurldecode( $this->keys[ $k ] );
		}
		$keylink = "&" . implode("&", $keyParams);

		//	values
		$values = array();
		$rawValues = array();
		$fields = $this->pSet->getFieldsList();
		foreach( $fields as $f )
		{
			$value = $this->showDBValue( $f, $data, $keylink );
			$values[ $f ] = $value;
			if( IsBinaryType( $this->pSet->getFieldType( $f ) ) )
				$rawValues[ $f ] = "";
			else
				$rawValues[ $f ] = runner_substr($data[ $f ], 0, 100);

		}

		$returnJSON['keys'] = $this->jsKeys;
		$returnJSON['masterKeys'] = $this->getMarkerMasterKeys($data);
		$returnJSON['keyFields'] = $this->keyFields;
		$returnJSON['oldKeys'] = array();
		//	add old keys
		$i = 0;
		foreach($this->oldKeys as $field => $value)
		{
			$returnJSON['oldKeys'][ $i++ ] = $value;
		}

		$returnJSON['vals'] = $values;
		$returnJSON['fields'] = $fields;
		$returnJSON['rawVals'] = $rawValues;
		$returnJSON['hrefs'] = $this->buildDetailGridLinks( $returnJSON['detKeys'] );

		//	the record might become non-editable after updating
		if( !$this->IsRecordEditable( false ) )
			$returnJSON['nonEditable'] = true;

		$dmapIconsData = $this->getDashMapsIconsData( $data );
		if( count( $dmapIconsData ) )
			$returnJSON['mapIconsData'] = $dmapIconsData;	

		$fieldsIconsData = $this->getFieldMapIconsData( $data );
		if( count( $fieldsIconsData ) )
			$returnJSON['fieldsMapIconsData'] = $fieldsIconsData;
			
		return $returnJSON;
	}

	/**
	 * It redirects to a new page
	 * according to the edit page settings
	 * @return Boolean
	 */
	protected function afterEditActionRedirect()
	{
		if( !$this->isSimpleMode() )
			return false;

		switch( $this->getAfterEditAction() )
		{
			case AE_TO_EDIT:
				return $this->prgRedirect();

			case AE_TO_LIST:
				if( $this->pSet->hasListPage() )
					HeaderRedirect($this->shortTableName, PAGE_LIST, "a=return");
				else
					HeaderRedirect("menu");
				return true;

			case AE_TO_VIEW:
				HeaderRedirect( $this->shortTableName, PAGE_VIEW, $this->getKeyParams() );
				return true;

			case AE_TO_PREV_EDIT:
				$_SESSION["message_edit"] = $this->message . "";
				$prevKeys = $this->getPrevKeys();

				HeaderRedirect( $this->shortTableName, PAGE_EDIT, $this->getPrevNextKeyParams($prevKeys) );
				return true;

			case AE_TO_NEXT_EDIT:
				$_SESSION["message_edit"] = $this->message . "";
				$nextKeys = $this->getNextKeys();

				HeaderRedirect( $this->shortTableName, PAGE_EDIT, $this->getPrevNextKeyParams($nextKeys) );
				return true;

			case AE_TO_DETAIL_LIST:
				HeaderRedirect( GetTableURL( $this->pSet->getAEDetailTable() ), PAGE_LIST );
				return true;

			default:
				return false;
		}
	}

	/**
	 * Get a previous or next record keys
	 * @param Boolean isNext
	 * @return Array
	 */
	protected function getAdjacentRecordKeys( $isNext )
	{
		$query = $this->pSet->getQueryObject();

		$fieldsList = $this->getOrderClauseFieldsList();
		if( !count( $fieldsList ) )
			return array();

		$option = $isNext ? "next" : "prev";

		$orderData = $this->getSQLPrevNextOrederClauses( $fieldsList, $option );
		$whereData = $this->getSQLPrevNextWhereClauses( $fieldsList, $this->getCurrentRecordInternal(), $query->HasGroupBy(), $option );

		if( $whereData["where_".$option] == "" || $orderData["order_".$option] == "" )
			return array();

		$SQLData = $this->getPrevNextSQL( $query, $whereData, $orderData, false, "Edit", $option );

		$sql = applyDBrecordLimit( $SQLData[ "sql_".$option ], 1, $this->connection->dbType );
		return $this->getKeysDataForPrevNext( $sql );
	}

	/**
	 * Get the previous record keys
	 * @return Array
	 */
	protected function getPrevKeys()
	{
		if( isset($this->prevKeys) && !is_null($this->prevKeys))
			return $this->prevKeys;

		$this->prevKeys = $this->getAdjacentRecordKeys( false );
		return $this->prevKeys;
	}

	/**
	 * Get the next record keys
	 * @return Array
	 */
	protected function getNextKeys()
	{
		if( isset($this->nextKeys) and !is_null($this->nextKeys) )
			return $this->nextKeys;

		$this->nextKeys = $this->getAdjacentRecordKeys( true );
		return $this->nextKeys;
	}

	/**
	 * Get keys params string
	 * @param Array keys
	 * @return String
	 */
	protected function getPrevNextKeyParams($keys)
	{
		$keyParams = array();
		foreach( $this->keyFields as $i => $k )
		{
			$keyParams[] = "editid" . ($i + 1) . "=" . rawurldecode( $keys[$i] );
		}

		return implode("&", $keyParams);
	}

	/**
	 * Get keys params string
	 * @return String
	 */
	protected function getKeyParams()
	{
		$keyParams = array();
		foreach( $this->keyFields as $i => $k )
		{
			$keyParams[] = "editid" . ($i + 1) . "=" . rawurldecode( $this->keys[ $k ] );
		}

		return implode("&", $keyParams);
	}

	/**
	 *	POST-REDIRECT-GET
	 *	Redirect after saving the data to avoid saving again on refresh.
	 */
	protected function prgRedirect()
	{
		if( $this->stopPRG )
			return false;
		if( !$this->updatedSuccessfully || !$this->isSimpleMode() || !no_output_done() )
			return false;

		$_SESSION["message_edit"] = $this->message . "";
		$_SESSION["message_edit_type"] = $this->messageType;
		
		HeaderRedirect( $this->pSet->getShortTableName(), $this->getPageType(), $this->getKeyParams() );
		exit();
		return true;
	}

	/**
	 *	POST-REDIRECT-GET
	 *	Read the saved message on the GET step.
	 */
	protected function prgReadMessage()
	{
		if( !$this->isSimpleMode() || !isset($_SESSION["message_edit"]) )
			return;
			
		$this->setMessage( $_SESSION["message_edit"] );
		$this->messageType = $_SESSION["message_edit_type"];
		
		unset($_SESSION["message_edit"]);
	}

	/**
	 * @return Array
	 */
	public function getCurrentRecord()
	{
		$data = $this->getCurrentRecordInternal();
		$newData = array();

		foreach($data as $fName => $val)
		{
			$editFormat = $this->pSet->getEditFormat($fName);
			if( $editFormat == EDIT_FORMAT_DATABASE_FILE || $editFormat==EDIT_FORMAT_DATABASE_IMAGE )
			{
				if( $data[ $fName ] )
					$newData[ $fName ] = true;
				else
					$newData[ $fName ] = false;
			}
		}

		foreach($newData as $fName => $val) // .net compatibility issue
		{
			$data[ $fName ] = $val;
		}

		return $data;
	}

	/**
	 * @param Boolean useOldKeys
	 * @return String
	 */
	public function getWhereClause( $useOldKeys )
	{
		$strWhereClause = "";

		if( $useOldKeys )
			$strWhereClause = KeyWhere( $this->oldKeys );
		else if( $this->checkKeysSet() )
			$strWhereClause = KeyWhere( $this->keys );
		elseif( $this->mode == EDIT_DASHBOARD )
		{
			$whereComponents = $this->getWhereComponents();
			$strWhereClause = $whereComponents["searchWhere"];
		}
		else
		{
			$strWhereClause = $_SESSION[ $this->sessionPrefix."_where" ];
		}

		if( $this->pSet->getAdvancedSecurityType() != ADVSECURITY_ALL )
		{
			// select only owned records
			$strWhereClause = whereAdd($strWhereClause, SecuritySQL("Edit", $this->tName));
		}
		return $strWhereClause;
	}

	/**
	 * Read current values from the database
	 * @return Array 		The current record data
	 */
	public function getCurrentRecordInternal()
	{
		if( !is_null($this->cachedRecord) )
			return $this->cachedRecord;

		$keysSet = $this->checkKeysSet();

		$orderClause = "";
		$havingClause = "";
		if( !$keysSet )
		{
			$orderClause = $this->getOrderByClause();
			if( $this->mode == EDIT_DASHBOARD )
			{
				$whereComponents = $this->getWhereComponents();
				$havingClause = $whereComponents["searchHaving"];
			}
		}

		$strWhereClause = $this->getWhereClause( false );
		$strSQL = $this->gQuery->gSQLWhere( $strWhereClause, $havingClause );

		if( $this->mode == EDIT_DASHBOARD && $this->mapRefresh )
			$strWhereClause = whereAdd( $strWhereClause, $this->getWhereByMap() );

		if( !$keysSet )
			$strSQL = applyDBrecordLimit($strSQL.$orderClause, 1, $this->connection->dbType);

		$strSQLbak = $strSQL;
		$strWhereClauseBak = $strWhereClause;
		//	Before Query event
		if( $this->eventsObject->exists("BeforeQueryEdit") )
			$this->eventsObject->BeforeQueryEdit($strSQL, $strWhereClause, $this);

		if( $strSQLbak == $strSQL && $strWhereClauseBak != $strWhereClause )
		{
			$strSQL = $this->gQuery->gSQLWhere( $strWhereClause, $havingClause );
			if( !$keysSet )
				$strSQL = applyDBrecordLimit($strSQL.$orderClause, 1, $this->connection->dbType);
		}

		LogInfo($strSQL);

		$fetchedArray = $this->connection->query( $strSQL )->fetchAssoc();
		$this->cachedRecord = $this->cipherer->DecryptFetchedArray( $fetchedArray );

		if( !$keysSet )
		{
			$this->keys = $this->getKeysFromData( $this->cachedRecord );
			$this->setKeysForJs();
		}

		if( !$this->cachedRecord && $this->mode == EDIT_SIMPLE )
			return $this->cachedRecord;

		foreach($this->getPageFields() as $fName)
		{
			if( @$_POST["a"]!= "edited" && $this->pSet->getAutoUpdateValue($fName) !== "" )
				$this->cachedRecord[ $fName ] = $this->pSet->getAutoUpdateValue($fName);
		}

		if($this->readEditValues)
		{
			foreach($this->getPageFields() as $fName)
			{
				$editFormat = $this->pSet->getEditFormat($fName);
				if( $editFormat == EDIT_FORMAT_DATABASE_FILE && $editFormat != EDIT_FORMAT_DATABASE_IMAGE && $editFormat != EDIT_FORMAT_FILE && !$this->pSet->isReadonly($fName) )
					$this->cachedRecord[ $fName ] = $this->newRecordData[ $fName ];
			}
		}


		return $this->cachedRecord;
	}

	/**
	 * Check if the keys values were set through GET/POST 'editid' params
	 * or by using the setKeys method directly
	 * @return Boolean
	 */
	protected function checkKeysSet()
	{
		foreach($this->keys as $kValue)
		{
			if( strlen($kValue) )
				return true;
		}
		return false;
	}

	/**
	 * Prepare edit controls
	 */
	public function prepareEditControls()
	{
		global $locale_info;
		if( $this->mode == EDIT_INLINE )
		{
			$this->editFields = $this->removeHiddenColumnsFromInlineFields( $this->editFields, $this->screenWidth, $this->screenHeight, $this->orientation );
		}

		//	prepare values
		$data = $this->getFieldControlsData();
		if( $this->readEditValues )
		{
			foreach($this->editFields as $f)
			{
				if( !isset( $this->newRecordData[ $f ] ) )
					continue;
				$editFormat = $this->pSet->getEditFormat( $f );
				if( $editFormat != EDIT_FORMAT_DATABASE_FILE &&
					$editFormat != EDIT_FORMAT_DATABASE_IMAGE &&
					$editFormat != EDIT_FORMAT_READONLY )

					$data[ $f ] = $this->newRecordData[ $f ];
			}
		}

		$control = array();

		foreach($this->editFields as $fName)
		{
			$gfName = GoodFieldName($fName);
			$isDetKeyField = in_array($fName, $this->detailKeysByM);


			$controls = array();
			$controls["controls"] = array();
			$controls["controls"]['ctrlInd'] = 0;
			$controls["controls"]['id'] = $this->id;
			$controls["controls"]['fieldName'] = $fName;

			if ( in_array($fName, $this->errorFields))
			{
				$controls["controls"]["isInvalid"] = true;
			}

			$parameters = array();
			$parameters["id"] = $this->id;
			$parameters["ptype"] = PAGE_EDIT;
			$parameters["field"] = $fName;
			$parameters["pageObj"] = $this;
			$parameters["value"] = @$data[ $fName ];

			if( !$isDetKeyField )
			{
				if( IsFloatType( $this->pSet->getFieldType($fName) ) && !is_null( @$data[ $fName ] ) )
				{
					if( $this->pSet->getHTML5InputType( $fName ) == "number" )
					{
						//	no thousand delimiters, only dot as decimal delimiter
						$parameters["value"] = formatNumberForHTML5( @$data[ $fName ] );
					}
					else
						$parameters["value"] = str_replace(".", $locale_info["LOCALE_SDECIMAL"], @$data[ $fName ]);
				}

				$parameters["validate"] = $this->pSet->getValidation($fName);

				$additionalCtrlParams = array();
				$additionalCtrlParams["disabled"] = $this->controlsDisabled;
				$parameters["additionalCtrlParams"] = $additionalCtrlParams;
			}

			$controlMode = $this->mode == EDIT_INLINE ? "inline_edit" : "edit";
			$parameters["mode"] = $controlMode;
			$controls["controls"]['mode'] = $controlMode;

			if( $this->pSet->isUseRTE($fName) && $this->pSet->isAutoUpdatable($fName) )
			{
				$_SESSION[ $this->sessionPrefix."_".$fName."_rte" ] = GetAutoUpdateValue($fName, PAGE_EDIT);
				$parameters["mode"] = "add";
			}

			if( $isDetKeyField )
			{
				$controls["controls"]['value'] = @$data[ $fName ];

				$parameters["extraParams"] = array();
				$parameters["extraParams"]["getDetKeyReadOnlyCtrl"] = true;

				// to the ReadOnly control show the detail key cotnrol's value
				$this->readOnlyFields[ $fName ] = $this->showDBValue($fName, $data);
			}

			if ( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
			{			
				$firstElementId = $this->getControl($fName, $this->id)->getFirstElementId();
				if ( $firstElementId )
				{
					$this->xt->assign("labelfor_" . goodFieldName($fName), $firstElementId);
				}
			}
			
			$this->xt->assign_function( $gfName."_editcontrol", "xt_buildeditcontrol", $parameters );

			$preload = $this->fillPreload($fName, $this->editFields, $data);
			if( $preload !== false )
				$controls["controls"]['preloadData'] = $preload;

			$this->fillControlsMap( $controls );
			$this->fillFieldToolTips( $fName );
			$this->fillControlFlags( $fName );

			// fill special settings for timepicker
			if( $this->pSet->getEditFormat($fName) == 'Time' )
				$this->fillTimePickSettings($fName, $data[ $fName ]);

			if( $this->pSet->getViewFormat($fName) == FORMAT_MAP )
				$this->googleMapCfg['isUseGoogleMap'] = true;
		}
	}

	/**
	 * Assign edit fields' blocks and labels variables
	 */
	public function assignEditFieldsBlocksAndLabels()
	{
		$editFields = $this->getPageFields();

		foreach($editFields as $fName)
		{
			$gfName = GoodFieldName($fName);

			$this->xt->assign($gfName."_fieldblock", true);
			$this->xt->assign($gfName."_tabfieldblock", true);

			if( $this->is508 && $this->getLayoutVersion() != BOOTSTRAP_LAYOUT )
				$this->xt->assign_section($gfName."_label","<label for=\"" . $this->getInputElementId( $fName ) . "\">","</label>");
		}
	}

	public static function readEditModeFromRequest()
	{
		if(postvalue("editType") == "inline")
			return EDIT_INLINE;
		elseif(postvalue("editType") == EDIT_POPUP)
			return EDIT_POPUP;
		elseif(postvalue("mode") == "dashrecord")
			return EDIT_DASHBOARD;
		else
			return EDIT_SIMPLE;
	}

	public static function processEditPageSecurity( $table )
	{
		//	user has necessary permissions
		if( Security::checkPagePermissions( $table, "E" ) )
			return true;

		// display entered data. Give the user chance to relogin. Do nothing for now.
		if( postvalue("a") == "edited" )
			return true;

		//	page can not be displayed. Redirect or return error

		$pageMode = EditPage::readEditModeFromRequest();

		//	return error if the page is requested by AJAX
		if( $pageMode != EDIT_SIMPLE )
		{
			$messageLink = "";
			if( !isLogged() || isLoggedAsGuest() )
				$messageLink = " <a href='#' id='loginButtonContinue'>". mlang_message("SESSION_EXPIRED3") . "</a>";
			Security::sendPermissionError( $messageLink );
			return false;
		}

		// The user is logged in but lacks necessary permissions
		// redirect to List page or Menu.
		if( isLogged() && !isLoggedAsGuest() )
		{
			Security::redirectToList( $table );
			return false;
		}

		//	Not logged in
		// 	redirect to Login
		//	Save current URL in session
		$keyParams = array();
		$i = 1;
		while( postvalue("editid".$i) )
		{
			$keyParams[] = "editid".$i."=".rawurlencode( postvalue("editid".$i) );
			$i++;
		}
		$_SESSION["MyURL"] = $_SERVER["SCRIPT_NAME"]."?".implode("&", $keyParams);
		redirectToLogin();
		return false;
	}

	/**
	 * Handle broken POST request.
	 */
	public static function handleBrokenRequest()
	{
		if( sizeof($_POST) != 0 || !postvalue('submit') )
			return;
		if( !postvalue("editid1") )
		{
			$returnJSON = array();
			$returnJSON['success'] = false;
			$returnJSON['message'] = mlang_message("INLINE_ERROR");
			$returnJSON['fatalError'] = true;
			echo printJSON($returnJSON);
			exit();
		}
		else
		{
			if( postvalue('fly') )
			{
				echo -1;
				exit();
			}
			else
				$_SESSION["message_edit"] = "<< ".mlang_message("INLINE_ERROR")." >>";
		}
	}

	protected function buildNewRecordData()
	{
		// define temporary arrays. These are required for ASP conversion
		$evalues = array();
		$efilename_values = array();
		$blobfields = array();
		$keys = $this->keys;

		foreach($this->editFields as $f)
		{
			$control = $this->getControl( $f, $this->id );
			$control->readWebValue($evalues, $blobfields, NULL, NULL, $efilename_values);
			if( isset($keys[ $f ]) && isset( $evalues[ $f ] ) )
			{
				//	ASP conversion requires this separate "if".
				if( $keys[ $f ] != $control->getWebValue() )
				{
					$keys[ $f ] = $control->getWebValue();
					$this->keysChanged = true;
				}
			}
		}
		if( $this->keysChanged )
			$this->setKeys( $keys );

		foreach($efilename_values as $ekey => $value)
		{
			$evalues[ $ekey ] = $value;
		}
		$this->newRecordData = $evalues;
		$this->newRecordBlobFields = $blobfields;
	}

	/**
	 * Process user data input and save it to the database table
	 */
	public function processDataInput()
	{
		//	get prepared for the data saving
		$this->oldKeys = $this->keys;

		$this->buildNewRecordData();

		if( !$this->recheckUserPermissions() )
		{
			//	prevent the page from reading database values
			$this->oldRecordData = $this->newRecordData;
			$this->cachedRecord = $this->newRecordData;
			$this->recordValuesToEdit = null;
			return false;
		}

		if( !$this->checkCaptcha() )
			return false;

		if( !$this->isRecordEditable( true ) )
			return $this->SecurityRedirect();

		if( !$this->callBeforeEditEvent() )
			return false;

		$this->setUpdatedLatLng( $this->getNewRecordData(), $this->getOldRecordData() );

		if( !$this->checkDeniedDuplicatedValues() )
			return false;

		if( !$this->confirmLockingBeforeSaving() )
			return false;

		//	do save the record
		if( $this->callCustomEditEvent() )
		{
			$this->updatedSuccessfully = DoUpdateRecord( $this );
		}

		$this->unlockNewRecord();

		if( !$this->updatedSuccessfully )
		{
			$this->setKeys( $this->oldKeys );
			return false;
		}
		//	after save steps

		if( in_array( $this->getAfterEditAction(), array( AE_TO_EDIT, AE_TO_PREV_EDIT, AE_TO_NEXT_EDIT ) ) )
			$_SESSION[ $this->sessionPrefix . "_recordUpdated" ] = true;		
		
		$this->ProcessFiles();

		$this->messageType = MESSAGE_INFO;
		$this->setSuccessfulEditMessage();

		$this->callAfterSuccessfulSave();

		$this->unlockOldRecord();

		$this->mergeNewRecordData();

		$this->auditLogEdit();

		$this->callAfterEditEvent();

		$this->setKeys( $this->keys );

		return true;
	}

	/**
	 * Set a successful edit message
	 */
	protected function setSuccessfulEditMessage()
	{
		if( $this->isMessageSet() )
			return;

		$this->setMessage( "<strong>&lt;&lt;&lt; ".mlang_message("RECORD_UPDATED"). " &gt;&gt;&gt;</strong>" );
	}

	/**
	 * Check if updated data contains duplicated values
	 * @return Boolean
	 */
	protected function checkDeniedDuplicatedValues()
	{
		$oldData = $this->getOldRecordData();

		foreach($this->newRecordData as $f => $value)
		{
			if( $this->pSet->allowDuplicateValues($f) )
				continue;

			if( $oldData[ $f ] == $value )
				continue;

			if( !$this->hasDuplicateValue($f, $value) )
				continue;

			$this->errorFields[] = $f;
			$this->setMessage( $this->pSet->label( $f ) . " " . mlang_message("INLINE_DENY_DUPLICATES") );
			return false;
		}
		return true;
	}

	/**
	 * @param Array keys (optional)
	 */
	protected function auditLogEdit( $keys = array() )
	{
		if( !count( $keys ) )
			$keys = $this->keys;
			
		if( $this->auditObj )
			$this->auditObj->LogEdit( $this->tName, $this->newRecordData, $this->getOldRecordData(), $keys );
	}

	/**
	 *	Add missing values from oldRecordData to newRecordData
	 *	This is required for the Audit and the AfterEdit event
	 */
	protected function mergeNewRecordData()
	{
		if( !$this->auditObj && !$this->eventsObject->exists("AfterEdit") )
			return;

		foreach($this->getOldRecordData() as $f => $v)
		{
			if( !isset( $this->newRecordData[ $f ] ) )
				$this->newRecordData[ $f ] = $v;
		}
	}

	/**
	 *	Call After Record Updated event
	 */
	protected function callAfterEditEvent()
	{
		if( !$this->eventsObject->exists("AfterEdit") )
			return;

		$this->eventsObject->AfterEdit( $this->newRecordData,
			$this->getWhereClause( false ),
			$this->getOldRecordData(),
			$this->keys,
			$this->mode == EDIT_INLINE,
			$this );
	}

	/**
	 *	Unlock the record not existing anymore after successful updating.
	 */
	protected function unlockOldRecord()
	{
		if( $this->lockingObj && $this->keysChanged )
			$this->lockingObj->UnlockRecord($this->tName, $this->oldKeys , "");
	}

	/**
	 *	Unlock the record to be created after unsuccessful updating.
	 */
	protected function unlockNewRecord()
	{
		if( $this->lockingObj )
			$this->lockingObj->UnlockRecord($this->tName, $this->keys , "");
	}

	/**
	 *	Call each control's afterSuccessfulSave method
	 */
	protected function callAfterSuccessfulSave()
	{
		foreach($this->editFields as $f)
		{
			$this->getControl($f, $this->id)->afterSuccessfulSave();
		}
	}

	/**
	 *	Call Before Record Updated event
	 */
	protected function callBeforeEditEvent()
	{
		if( !$this->eventsObject->exists("BeforeEdit") )
			return true;

		$usermessage = "";
		$ret = $this->eventsObject->BeforeEdit( $this->newRecordData,
			$this->getWhereClause( true ),
			$this->getOldRecordData(),
			$this->oldKeys,
			$usermessage,
			$this->mode == EDIT_INLINE,
			$this );

		if( $usermessage != "" )
			$this->setMessage( $usermessage );

		return $ret;
	}

	/**
	 *	Call Custom Edit event
	 */
	protected function callCustomEditEvent()
	{
		if( !$this->eventsObject->exists("CustomEdit") )
			return true;

		$usermessage = "";
		$ret = $this->eventsObject->CustomEdit( $this->newRecordData,
			$this->getWhereClause( true ),
			$this->getOldRecordData(),
			$this->oldKeys,
			$usermessage,
			$this->mode == EDIT_INLINE,
			$this );

		//	this is required for the ASP conversion
		if( !$ret )
		{
			$this->setMessage( $usermessage );
			$this->updatedSuccessfully = ( 0 == strlen( $this->message ) );
		}
		return $ret;
	}

	/**
	 * Check is captcha exists on current page
	 *
	 * @intellisense
	 */
	function captchaExists()
	{
		if ( $this->mode == ADD_ONTHEFLY || $this->mode == ADD_INLINE || $this->mode == EDIT_INLINE )
		{
			return false;
		}

		return $this->pSet->isCaptchaEnabledOnEdit();
	}

	/**
	 * Get captcha field name
	 *
	 * @intellisense
	 */
	function getCaptchaFieldName()
	{		
		return $this->pSet->captchaEditFieldName();
	}

	protected function recheckUserPermissions()
	{
		if( CheckTablePermissions($this->tName, "E") )
			return true;
		if( isLoggedAsGuest() || !isLogged() )
		{
			$this->setMessage( mlang_message("SESSION_EXPIRED1") .
				"<a href='#' id='loginButtonContinue" . $this->id . "'>" .
				mlang_message("SESSION_EXPIRED3") . "</a>" .
				mlang_message("SESSION_EXPIRED4") );
		}
		else
		{
			$this->setMessage( 'You have no permissions to complete this action.' );
		}

		return false;
	}

	/**
	 *	Do locking stuff before saving the data.
	 *	Returns false if locking was unsuccessful and the saving action is impossible
	 */
	protected function confirmLockingBeforeSaving()
	{
		if( !$this->lockingObj )
			return true;
		$lockmessage = "";
		if( $this->keysChanged )
		{
			//	confirm and acquire locks on both old and new sets of keys
			$lockConfirmed = $this->lockingObj->ConfirmLock($this->tName, $this->oldKeys, $lockmessage);
			if( $lockConfirmed )
				$lockConfirmed = $this->lockingObj->LockRecord($this->tName, $this->keys);
		}
		else
		{
			//	confirm lock on the edited record
			$lockConfirmed = $this->lockingObj->ConfirmLock($this->tName, $this->oldKeys, $lockmessage);
		}

		if( !$lockConfirmed )
		{
			$this->lockingMessageStyle = "display:block";
			if( $this->mode == EDIT_INLINE )
			{
				if( IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP )
					$lockmessage = $this->lockingObj->GetLockInfo($this->tName, $this->oldKeys, false, $this->id);

				$returnJSON['success'] = false;
				$returnJSON['message'] = $lockmessage;
				$returnJSON['enableCtrls'] = false;
				$returnJSON['confirmTime'] = $this->lockingObj->ConfirmTime;
				echo printJSON($returnJSON);
				exit();
			}
			else
			{
				if( IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP )
					$this->lockingMessageText = $this->lockingObj->GetLockInfo($this->tName, $this->oldKeys, true, $id);
				else
					$this->lockingMessageText = $lockmessage;
			}
			$this->readEditValues = true;
			return false;
		}
		return true;
	}

	/**
	 *	Redirect the user from the page due to security reasons.
	 */
	protected function SecurityRedirect()
	{
		if($this->mode == EDIT_INLINE)
		{
			echo printJSON(array("success" => false, "message" => mlang_message("RECORD_ISNOT_EDITABLE")));
			exit();
		}
		Security::redirectToList( $this->tName );
		return;
	}

	/**
	 * @param Boolean useOldData
	 * @return Boolean
	 */
	protected function isRecordEditable( $useOldData )
	{
		global $globalEvents;
		if( $globalEvents->exists("IsRecordEditable", $this->tName) )
		{
			if( !$globalEvents->IsRecordEditable($useOldData ? $this->getOldRecordData() : $this->getCurrentRecordInternal(), true, $this->tName) )
				return false;
		}

		return true;
	}

	/**
	 * @return Array
	 */
	public function getOldRecordData()
	{
		if( $this->oldRecordData === null )
		{
			$strSQL = $this->gQuery->gSQLWhere( $this->getWhereClause( true ) );
			LogInfo($strSQL);
			$fetchedArray = $this->connection->query( $strSQL )->fetchAssoc();
			$this->oldRecordData = $this->cipherer->DecryptFetchedArray( $fetchedArray );
		}

		return $this->oldRecordData;
	}

	public function getBlobFields()
	{
		return $this->newRecordBlobFields;
	}

	public function & getNewRecordData()
	{
		return $this->newRecordData;
	}

	public function setMessage( $message )
	{
		$this->message = $message;
	}

	/**
	 * Check if the page's message is set
	 * @return Boolean
	 */
	protected function isMessageSet()
	{
		return strlen( $this->message ) > 0;
	}

	/**
	 * @param String message
	 */
	public function setDatabaseError( $message )
	{
		if( $this->mode != EDIT_INLINE )
		{
			$this->message = "<strong>&lt;&lt;&lt; ".mlang_message("RECORD_NOT_UPDATED")."</strong> &gt;&gt;&gt;<br><br>".$message;
		}
		else
			$this->message = mlang_message("RECORD_NOT_UPDATED").". ".$message;

		$this->messageType = MESSAGE_ERROR;
	}

	/**
	 * @param String fName
	 * @return Boolean
	 */
	protected function checkFieldOnPage( $fName )
	{
		if( $this->mode == EDIT_INLINE )
			return $this->pSet->appearOnInlineEdit( $fName );

		return $this->pSet->appearOnEditPage( $fName );
	}

	/**
	 * Get the current record data to build correct edit controls (xt_buildeditcontrol)
	 * @return Array
	 */
	public function getFieldControlsData()
	{
		if( $this->recordValuesToEdit )
			return $this->recordValuesToEdit;

		$editValues = $this->getCurrentRecordInternal();
		if( $this->eventsObject->exists("ProcessValuesEdit") )
			$this->eventsObject->ProcessValuesEdit($editValues, $this);
		$this->recordValuesToEdit = $editValues;
		return $this->recordValuesToEdit;
	}

	/**
	 * Returns true is the page has multistepped layout
	 * @return boolean
	 */
	function isMultistepped()
	{
		return $this->pSet->isEditMultistep();
	}

	function viewAvailable() 
	{

		if( $this->dashElementData )
			return parent::viewAvailable() && $this->dashElementData["details"][$this->tName]["view"];
		return parent::viewAvailable();
	}
	
	function getLayoutVersion() 
	{
		if( $this->mode != EDIT_INLINE )
			return parent::getLayoutVersion();
		//	inline mode
		//	use List page layout in this case
		$layout = GetPageLayout($this->shortTableName, PAGE_LIST );
		if($layout)
			return $layout->version;
		return 2;
	}

	/**
	 *	API
	 *
	 */
	public function setMessageType( $type ) 
	{
		$this->messageType = $type;
	}
	
	
	protected function isPopupMode() 
	{
		return $this->mode == EDIT_POPUP;
	}

	protected function isSimpleMode() 
	{
		return $this->mode == EDIT_SIMPLE;
	}
	
	public static function EditPageFactory( $params ) {
		if( !$params["selection"] || !is_array( $params["selection"] ) )
		{
			//	PRG after update Selected
			$params["selection"] = $_SESSION["edit_seletion"];
			unset( $_SESSION["edit_seletion"] );
		}
		
		if( $params["selection"] && is_array( $params["selection"] ) )
		{
			if( count( $params["selection"] ) > 1 )
			{
				if( $params["mode"] == EDIT_SIMPLE )
					$params["mode"] = EDIT_SELECTED_SIMPLE;
					
				if( $params["mode"] == EDIT_POPUP )
					$params["mode"] = EDIT_SELECTED_POPUP;
					
				require_once( getabspath("classes/editselectedpage.php") );
				return new EditSelectedPage( $params );
			}
			else
			{
				$arrKeys = explode( "&", refine( $params["selection"][0] ) );

				$keyFields = array_keys( $params["keys"] );
				
				foreach( $keyFields as $i => $kf )
				{
					$params["keys"][$kf] = $arrKeys[ $i ];
				}
			}
		}
		
		return new EditPage($params);
	}
}
?>