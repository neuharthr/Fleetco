<?php
include_once(getabspath("classes/searchpage.php"));
class SearchPageDash extends SearchPage
{	
	public $tableSettings = array();
	
	function __construct(&$params)
	{
		parent::__construct($params);
		
		if ($this->mode == SEARCH_DASHBOARD)
		{
			$this->jsSettings['tableSettings'][ $this->tName ]['isDashSearchPage'] = true;
		}
	}
	
	protected function assignSessionPrefix() 
	{
		$this->sessionPrefix = $this->tName;
	}
	
	protected function getTableSettings( $table )
	{
		if( !isset( $this->tableSettings[ $table ]) )
		{
			$this->tableSettings[ $table ] = new ProjectSettings( $tableSettings[ $table ], PAGE_SEARCH );
		}
		return $this->tableSettings[ $table ];
	
	}

	protected function prepareFields()
	{	
		foreach( $this->pSet->getDashboardSearchFields() as $f => $fdata )
		{
			$field = $fdata[0]["field"];
			$table = $fdata[0]["table"];
			$fSet = $this->getTableSettings( $table );
			$lookupTable = $fSet->getLookupTable( $field );
			if( $lookupTable )
				$this->settingsMap["globalSettings"]['shortTNames'][ $lookupTable ] = GetTableURL( $lookupTable );
	
			$this->fillFieldToolTips( $f );	
	
			$srchFields = $this->searchClauseObj->getSearchCtrlParams( $f );
			$firstFieldParams = array();
			if (count($srchFields))
			{
				$firstFieldParams = $srchFields[0];
			}
			else
			{
				$firstFieldParams['fName'] = $f;
				$firstFieldParams['eType'] = '';
				$firstFieldParams['value1'] = $this->pSet->getDefaultValue( $field, $table );
				$firstFieldParams['value2'] = '';
				$firstFieldParams['not'] = false;
				$firstFieldParams['opt'] = $this->pSet->getDefaultSearchOption( $f );
				$firstFieldParams['not'] = false;
				if ( substr($firstFieldParams['opt'], 0, 4) == 'NOT ' )
				{
					$firstFieldParams['opt'] = substr($firstFieldParams['opt'], 4);
					$firstFieldParams['not'] = true;
				}
			}
	// create control	
			$ctrlBlockArr = $this->searchControlBuilder->buildSearchCtrlBlockArr($this->id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
			if($firstFieldParams['opt'] == "")
			{
				$firstFieldParams['opt'] = $this->pSet->getDefaultSearchOption($firstFieldParams['fName']);
			}
			$srchTypeFull = $this->searchControlBuilder->getCtrlSearchType($firstFieldParams['fName'], $this->id, 0, $firstFieldParams['opt'], $firstFieldParams['not'], true, true);
			
			if(isEnableSection508())
				$this->xt->assign_section( $f . "_label","<label for=\"". $this->getInputElementId( $field, $fSet )."\">","</label>");
			else 
				$this->xt->assign( $f . "_label", true);
			
			$this->xt->assign( $f . "_fieldblock", true);
			$this->xt->assignbyref( $f . "_editcontrol", $ctrlBlockArr['searchcontrol']);
			$this->xt->assign( $f . "_notbox", $ctrlBlockArr['notbox']);
			// create second control, if need it
			$this->xt->assignbyref( $f . "_editcontrol1", $ctrlBlockArr['searchcontrol1']);
			// create search type select
			$this->xt->assign("searchtype_" . $f, $ctrlBlockArr['searchtype']);
			$this->xt->assign("searchtypefull_" . $f, $srchTypeFull);
			$isFieldNeedSecCtrl = $this->searchControlBuilder->isNeedSecondCtrl($f);
			$ctrlInd = 0;
			if ($isFieldNeedSecCtrl)
			{
				$this->controlsMap["search"]["searchBlocks"][] = array('fName'=> $f , 'recId'=>$this->id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
				$ctrlInd+=2;
			}
			else
			{
				$this->controlsMap["search"]["searchBlocks"][] = array('fName'=> $f , 'recId'=>$this->id, 'ctrlsMap'=>array(0=>$ctrlInd));			
				$ctrlInd++;
			}
		}
	}
	
	function fillFieldSettings()
	{		
		$arrFields = $this->pSet->getAllSearchFields();
		$this->addFieldsSettings($arrFields, null, true, $this->pageType);
	}
    
	function locateDashFieldByOriginal( $table, $field )
	{
		foreach($this->pSet->getDashboardSearchFields() as $fname => $data)
		{
			if( !$data )
				continue;
			if( $data[0]["table"] == $table && $data[0]["field"] == $field )
			{
				return $fname;
			}
		}
		return $fname;
	}
	
	
	function addFieldsSettings($arrFields, $pSet, $pageBased, $pageType)
	{
		$dashSearchFields = $this->pSet->getDashboardSearchFields();
		$tableSettingsFilled = array();
		foreach($arrFields as $fieldName)
		{
			$tableName = $dashSearchFields[$fieldName][0]["table"];
			$pSet = new ProjectSettings( $tableName, $pageType);
			$tableFieldName = $dashSearchFields[$fieldName][0]["field"];
			
			if( !$tableSettingsFilled[ $tableName ] )
			{
				$this->fillTableSettings( $tableName, $pSet );
				$tableSettingsFilled[ $tableName ] = true;
			}
			if( !array_key_exists($fieldName, $this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings']) )
				$this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings'][ $fieldName ] = array();
			
			if( !array_key_exists($pageType, $this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings'][ $fieldName ]) )
				$this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings'][ $fieldName ][ $pageType ] = array();
						
			foreach($this->settingsMap["fieldSettings"] as $key => $val)
			{
				$fData = $pSet->getFieldData($tableFieldName, $key);
				
				if( $key == "validateAs" )
				{
					if( $pageType == PAGE_ADD || $pageType == PAGE_EDIT || $pageType == PAGE_REGISTER ) 
						$this->fillValidation($fData, $val, $this->jsSettings['tableSettings'][ $this->tName]['fieldSettings'][ $fieldName ][ $pageType ]);
					continue;
				}
				
				if( $key == "RTEType" )
				{
					$fData = $pSet->getRTEType($tableFieldName);
					if($fData == "RTECK")
					{
						$this->isUseCK = true;
						$this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings'][ $fieldName ][ $pageType ]['nWidth'] = $pSet->getNCols($tableFieldName);
						$this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings'][ $fieldName ][ $pageType ]['nHeight'] = $pSet->getNRows($tableFieldName);
					}	
				}
				elseif( $key == "autoCompleteFields" )
				{
					$fData = $pSet->getAutoCompleteFields($tableFieldName);
				}
				elseif( $key == "parentFields" )
				{
					$fData = $pSet->getLookupParentFNames( $tableFieldName );
					foreach( $fData as $i => $parentField )
					{
						$fData[$i] = $this->locateDashFieldByOriginal( $tableName, $parentField );
					}
				}
				
				$isDefault = false;
				if( is_array($fData) )
				{
					$isDefault = !count($fData);
				}
				else if( !is_array($val['default']) )
				{
					$isDefault = $fData === $val['default'];
				}
				
				if( !$isDefault )
				{
					$this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings'][ $fieldName ][ $pageType ][ $val['jsName'] ] = $fData;
				}
			}
			
			//add Dash Search-specific settings
			$this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings'][ $fieldName ][ $pageType ][ 'originalTable' ] = $tableName;
			$this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings'][ $fieldName ][ $pageType ][ 'originalField' ] = $tableFieldName;
			
			$this->jsSettings['tableSettings'][ $this->tName ]['isUseCK'] = $this->isUseCK;
			
			if( count($this->googleMapCfg) != 0 && $this->googleMapCfg['isUseGoogleMap'] )
			{
				$this->jsSettings['tableSettings'][ $this->tName ]['isUseGoogleMap'] = true;
				$this->jsSettings['tableSettings'][ $this->tName ]['googleMapCfg'] = $this->googleMapCfg;	
			}
			
			$lookupTableName = $pSet->getLookupTable($tableFieldName);
			if( $lookupTableName )
				$this->jsSettings['global']['shortTNames'][ $lookupTableName ] = GetTableURL($lookupTableName);
				
			if( $pSet->getEditFormat($tableFieldName) == 'Time' )
				$this->fillTimePickSettings($tableFieldName, "", $pSet, $pageType);
		}
	}
}
?>