<?php
function DisplayMasterTableInfo_creategrn_issue($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	$data = $params["masterRecordData"];
	
	$xt = new Xtempl();
	$tName = "creategrn-issue";
	$xt->eventsObject = getEventObject($tName);
	
	include_once('classes/listpage.php');
	include_once('classes/listpage_simple.php');
	$mParams  = array();
	$mParams["xt"] = &$xt;
	$mParams["mode"] = LIST_MASTER;
	$mParams["pageType"] = PAGE_LIST;
	$mParams["flyId"] = $params["recId"];
	$masterPage = ListPage::createListPage($tName, $mParams);
	
	$settings = $masterPage->pSet;
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST, $masterPage);
	
	$keysAssoc = array();
	$showKeys = "";	

	if($detailtable == "inventorymaster-pricing")
	{
		$keysAssoc["ItemCode"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("ItemCode", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("creategrn_issue","ItemCode").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if( !$data || !count($data) )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["ID"]));
	
	$xt->assign("ID_mastervalue", $viewControls->showDBValue("ID", $data, $keylink));
	$format = $settings->getViewFormat("ID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ID")))
		$class = ' rnr-field-number';
		
	$xt->assign("ID_class", $class); // add class for field header as field value
	$xt->assign("ItemCode_mastervalue", $viewControls->showDBValue("ItemCode", $data, $keylink));
	$format = $settings->getViewFormat("ItemCode");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ItemCode")))
		$class = ' rnr-field-number';
		
	$xt->assign("ItemCode_class", $class); // add class for field header as field value
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
	$xt->assign("Quantity_mastervalue", $viewControls->showDBValue("Quantity", $data, $keylink));
	$format = $settings->getViewFormat("Quantity");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Quantity")))
		$class = ' rnr-field-number';
		
	$xt->assign("Quantity_class", $class); // add class for field header as field value
	$xt->assign("RemovedFrom_mastervalue", $viewControls->showDBValue("RemovedFrom", $data, $keylink));
	$format = $settings->getViewFormat("RemovedFrom");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("RemovedFrom")))
		$class = ' rnr-field-number';
		
	$xt->assign("RemovedFrom_class", $class); // add class for field header as field value
	$xt->assign("SystemDate_mastervalue", $viewControls->showDBValue("SystemDate", $data, $keylink));
	$format = $settings->getViewFormat("SystemDate");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("SystemDate")))
		$class = ' rnr-field-number';
		
	$xt->assign("SystemDate_class", $class); // add class for field header as field value
	$xt->assign("GRNDate_mastervalue", $viewControls->showDBValue("GRNDate", $data, $keylink));
	$format = $settings->getViewFormat("GRNDate");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("GRNDate")))
		$class = ' rnr-field-number';
		
	$xt->assign("GRNDate_class", $class); // add class for field header as field value
	$xt->assign("EnteredBy_mastervalue", $viewControls->showDBValue("EnteredBy", $data, $keylink));
	$format = $settings->getViewFormat("EnteredBy");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("EnteredBy")))
		$class = ' rnr-field-number';
		
	$xt->assign("EnteredBy_class", $class); // add class for field header as field value
	$xt->assign("ApprovedBy_mastervalue", $viewControls->showDBValue("ApprovedBy", $data, $keylink));
	$format = $settings->getViewFormat("ApprovedBy");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ApprovedBy")))
		$class = ' rnr-field-number';
		
	$xt->assign("ApprovedBy_class", $class); // add class for field header as field value
	$xt->assign("UnitPrice_mastervalue", $viewControls->showDBValue("UnitPrice", $data, $keylink));
	$format = $settings->getViewFormat("UnitPrice");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("UnitPrice")))
		$class = ' rnr-field-number';
		
	$xt->assign("UnitPrice_class", $class); // add class for field header as field value
	$xt->assign("Status_mastervalue", $viewControls->showDBValue("Status", $data, $keylink));
	$format = $settings->getViewFormat("Status");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Status")))
		$class = ' rnr-field-number';
		
	$xt->assign("Status_class", $class); // add class for field header as field value
	$xt->assign("RefNumber_mastervalue", $viewControls->showDBValue("RefNumber", $data, $keylink));
	$format = $settings->getViewFormat("RefNumber");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("RefNumber")))
		$class = ' rnr-field-number';
		
	$xt->assign("RefNumber_class", $class); // add class for field header as field value
	$xt->assign("CurrentStock_mastervalue", $viewControls->showDBValue("CurrentStock", $data, $keylink));
	$format = $settings->getViewFormat("CurrentStock");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("CurrentStock")))
		$class = ' rnr-field-number';
		
	$xt->assign("CurrentStock_class", $class); // add class for field header as field value
	$xt->assign("Fleet_mastervalue", $viewControls->showDBValue("Fleet", $data, $keylink));
	$format = $settings->getViewFormat("Fleet");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Fleet")))
		$class = ' rnr-field-number';
		
	$xt->assign("Fleet_class", $class); // add class for field header as field value
	$xt->assign("PriceLink_mastervalue", $viewControls->showDBValue("PriceLink", $data, $keylink));
	$format = $settings->getViewFormat("PriceLink");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("PriceLink")))
		$class = ' rnr-field-number';
		
	$xt->assign("PriceLink_class", $class); // add class for field header as field value
	$xt->assign("Cost_mastervalue", $viewControls->showDBValue("Cost", $data, $keylink));
	$format = $settings->getViewFormat("Cost");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Cost")))
		$class = ' rnr-field-number';
		
	$xt->assign("Cost_class", $class); // add class for field header as field value

	$layout = GetPageLayout("creategrn_issue", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("creategrn_issue", "masterlist"));
}

?>