<?php
include_once(getabspath("classes/printpage.php"));

function DisplayMasterTableInfoForPrint_inventorymaster($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "inventorymaster";
	$xt->eventsObject = getEventObject($tName);
	
	$mParams  = array();
	$mParams["xt"] = &$xt;
	$mParams["pageType"] = PAGE_PRINT;
	$mParams["tName"] = $tName;
	$masterPage = new PrintPage($mParams);
	
	$cipherer = new RunnerCipherer( $tName );
	$settings = new ProjectSettings($tName, PAGE_PRINT);
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT, $masterPage);
	
	$where = "";
	$keysAssoc = array();
	$showKeys = "";

	if( $detailtable == "creategrn" )
	{
		$keysAssoc["ItemID"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("ItemID", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("ItemID", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("ItemID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("inventorymaster","ItemID").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}
	
	if( !$where )
		return;
	
	$str = SecuritySQL("Export", $tName );
	if( strlen($str) )
		$where.= " and ".$str;
	
	$strWhere = whereAdd( $masterQuery->m_where->toSql($masterQuery), $where );
	if( strlen($strWhere) )
		$strWhere= " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));	
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["Id"]));
	
	$xt->assign("Id_mastervalue", $viewControls->showDBValue("Id", $data, $keylink));
	$format = $settings->getViewFormat("Id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Id")))
		$class = ' rnr-field-number';
		
	$xt->assign("Id_class", $class); // add class for field header as field value
	$xt->assign("ItemID_mastervalue", $viewControls->showDBValue("ItemID", $data, $keylink));
	$format = $settings->getViewFormat("ItemID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ItemID")))
		$class = ' rnr-field-number';
		
	$xt->assign("ItemID_class", $class); // add class for field header as field value
	$xt->assign("Brand_mastervalue", $viewControls->showDBValue("Brand", $data, $keylink));
	$format = $settings->getViewFormat("Brand");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Brand")))
		$class = ' rnr-field-number';
		
	$xt->assign("Brand_class", $class); // add class for field header as field value
	$xt->assign("Description_mastervalue", $viewControls->showDBValue("Description", $data, $keylink));
	$format = $settings->getViewFormat("Description");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Description")))
		$class = ' rnr-field-number';
		
	$xt->assign("Description_class", $class); // add class for field header as field value
	$xt->assign("Supplier_mastervalue", $viewControls->showDBValue("Supplier", $data, $keylink));
	$format = $settings->getViewFormat("Supplier");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Supplier")))
		$class = ' rnr-field-number';
		
	$xt->assign("Supplier_class", $class); // add class for field header as field value

	$layout = GetPageLayout("inventorymaster", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("inventorymaster", "masterprint"));
}

?>