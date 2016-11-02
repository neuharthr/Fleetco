<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/creategrn_issue_variables.php");

$mode = postvalue("mode");

if(!isLogged())
{ 
	return;
}
if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{
	return;
}

require_once("classes/searchclause.php");

$cipherer = new RunnerCipherer($strTableName);

require_once('include/xtempl.php');
$xt = new Xtempl();





$layout = new TLayout("detailspreview", "AvenueAvenue", "MobileAvenue");
$layout->version = 2;
$layout->blocks["bare"] = array();
$layout->containers["dcount"] = array();
$layout->container_properties["dcount"] = array(  );
$layout->containers["dcount"][] = array("name"=>"detailspreviewheader", 
	"block"=>"", "substyle"=>1  );

$layout->containers["dcount"][] = array("name"=>"detailspreviewdetailsfount", 
	"block"=>"", "substyle"=>1  );

$layout->containers["dcount"][] = array("name"=>"detailspreviewdispfirst", 
	"block"=>"display_first", "substyle"=>1  );

$layout->skins["dcount"] = "empty";

$layout->blocks["bare"][] = "dcount";
$layout->containers["detailspreviewgrid"] = array();
$layout->container_properties["detailspreviewgrid"] = array(  );
$layout->containers["detailspreviewgrid"][] = array("name"=>"detailspreviewfields", 
	"block"=>"details_data", "substyle"=>1  );

$layout->skins["detailspreviewgrid"] = "grid";

$layout->blocks["bare"][] = "detailspreviewgrid";
$page_layouts["creategrn_issue_detailspreview"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



$recordsCounter = 0;

//	process masterkey value
$mastertable = postvalue("mastertable");
$masterKeys = my_json_decode(postvalue("masterKeys"));
$sessionPrefix = "_detailsPreview";
if($mastertable != "")
{
	$_SESSION[$sessionPrefix."_mastertable"]=$mastertable;
//	copy keys to session
	$i = 1;
	if(is_array($masterKeys) && count($masterKeys) > 0)
	{
		while(array_key_exists ("masterkey".$i, $masterKeys))
		{
			$_SESSION[$sessionPrefix."_masterkey".$i] = $masterKeys["masterkey".$i];
			$i++;
		}
	}
	if(isset($_SESSION[$sessionPrefix."_masterkey".$i]))
		unset($_SESSION[$sessionPrefix."_masterkey".$i]);
}
else
	$mastertable = $_SESSION[$sessionPrefix."_mastertable"];

$params = array();
$params['id'] = 1;
$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['pageType'] = "detailspreview";
$pageObject = new DetailsPreview($params);

if($mastertable == "inventorymaster-pricing")
{
	$where = "";
		$formattedValue = make_db_value("ItemCode",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("ItemCode") . "is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("ItemCode") . "=" . $formattedValue;
}

$str = SecuritySQL("Search", $strTableName);
if(strlen($str))
	$where.=" and ".$str;
$strSQL = $gQuery->gSQLWhere($where);

$strSQL.=" ".$gstrOrderBy;

$rowcount = $gQuery->gSQLRowCount($where, $pageObject->connection);
$xt->assign("row_count",$rowcount);
if($rowcount) 
{
	$xt->assign("details_data",true);

	$display_count = 10;
	if($mode == "inline")
		$display_count*=2;
		
	if($rowcount>$display_count+2)
	{
		$xt->assign("display_first",true);
		$xt->assign("display_count",$display_count);
	}
	else
		$display_count = $rowcount;

	$rowinfo = array();
	
	require_once getabspath('classes/controls/ViewControlsContainer.php');
	$pSet = new ProjectSettings($strTableName, PAGE_LIST);
	$viewContainer = new ViewControlsContainer($pSet, PAGE_LIST);
	$viewContainer->isDetailsPreview = true;

	$b = true;
	$qResult = $pageObject->connection->query( $strSQL );
	$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	while($data && $recordsCounter<$display_count) {
		$recordsCounter++;
		$row = array();
		$keylink = "";
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["ID"]));
	
	
	//	ID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ID", $data, $keylink);
			$row["ID_value"] = $value;
			$format = $pSet->getViewFormat("ID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ID")))
				$class = ' rnr-field-number';
			$row["ID_class"] = $class;
	//	ItemCode - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ItemCode", $data, $keylink);
			$row["ItemCode_value"] = $value;
			$format = $pSet->getViewFormat("ItemCode");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ItemCode")))
				$class = ' rnr-field-number';
			$row["ItemCode_class"] = $class;
	//	Brand - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Brand", $data, $keylink);
			$row["Brand_value"] = $value;
			$format = $pSet->getViewFormat("Brand");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Brand")))
				$class = ' rnr-field-number';
			$row["Brand_class"] = $class;
	//	Description - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Description", $data, $keylink);
			$row["Description_value"] = $value;
			$format = $pSet->getViewFormat("Description");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Description")))
				$class = ' rnr-field-number';
			$row["Description_class"] = $class;
	//	Supplier - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Supplier", $data, $keylink);
			$row["Supplier_value"] = $value;
			$format = $pSet->getViewFormat("Supplier");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Supplier")))
				$class = ' rnr-field-number';
			$row["Supplier_class"] = $class;
	//	Quantity - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Quantity", $data, $keylink);
			$row["Quantity_value"] = $value;
			$format = $pSet->getViewFormat("Quantity");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Quantity")))
				$class = ' rnr-field-number';
			$row["Quantity_class"] = $class;
	//	RemovedFrom - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("RemovedFrom", $data, $keylink);
			$row["RemovedFrom_value"] = $value;
			$format = $pSet->getViewFormat("RemovedFrom");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("RemovedFrom")))
				$class = ' rnr-field-number';
			$row["RemovedFrom_class"] = $class;
	//	SystemDate - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SystemDate", $data, $keylink);
			$row["SystemDate_value"] = $value;
			$format = $pSet->getViewFormat("SystemDate");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("SystemDate")))
				$class = ' rnr-field-number';
			$row["SystemDate_class"] = $class;
	//	GRNDate - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("GRNDate", $data, $keylink);
			$row["GRNDate_value"] = $value;
			$format = $pSet->getViewFormat("GRNDate");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("GRNDate")))
				$class = ' rnr-field-number';
			$row["GRNDate_class"] = $class;
	//	EnteredBy - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EnteredBy", $data, $keylink);
			$row["EnteredBy_value"] = $value;
			$format = $pSet->getViewFormat("EnteredBy");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("EnteredBy")))
				$class = ' rnr-field-number';
			$row["EnteredBy_class"] = $class;
	//	ApprovedBy - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ApprovedBy", $data, $keylink);
			$row["ApprovedBy_value"] = $value;
			$format = $pSet->getViewFormat("ApprovedBy");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ApprovedBy")))
				$class = ' rnr-field-number';
			$row["ApprovedBy_class"] = $class;
	//	UnitPrice - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("UnitPrice", $data, $keylink);
			$row["UnitPrice_value"] = $value;
			$format = $pSet->getViewFormat("UnitPrice");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("UnitPrice")))
				$class = ' rnr-field-number';
			$row["UnitPrice_class"] = $class;
	//	Status - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Status", $data, $keylink);
			$row["Status_value"] = $value;
			$format = $pSet->getViewFormat("Status");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Status")))
				$class = ' rnr-field-number';
			$row["Status_class"] = $class;
	//	CurrentStock - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CurrentStock", $data, $keylink);
			$row["CurrentStock_value"] = $value;
			$format = $pSet->getViewFormat("CurrentStock");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("CurrentStock")))
				$class = ' rnr-field-number';
			$row["CurrentStock_class"] = $class;
	//	Fleet - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Fleet", $data, $keylink);
			$row["Fleet_value"] = $value;
			$format = $pSet->getViewFormat("Fleet");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Fleet")))
				$class = ' rnr-field-number';
			$row["Fleet_class"] = $class;
	//	PriceLink - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PriceLink", $data, $keylink);
			$row["PriceLink_value"] = $value;
			$format = $pSet->getViewFormat("PriceLink");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("PriceLink")))
				$class = ' rnr-field-number';
			$row["PriceLink_class"] = $class;
	//	Cost - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Cost", $data, $keylink);
			$row["Cost_value"] = $value;
			$format = $pSet->getViewFormat("Cost");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Cost")))
				$class = ' rnr-field-number';
			$row["Cost_class"] = $class;
		$rowinfo[] = $row;
		if ($b) {
			$rowinfo2[] = $row;
			$b = false;
		}
		$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	}
	$xt->assign_loopsection("details_row",$rowinfo);
	$xt->assign_loopsection("details_row_header",$rowinfo2); // assign class for header
}
$returnJSON = array("success" => true);
$xt->load_template(GetTemplateName("creategrn_issue", "detailspreview"));
$returnJSON["body"] = $xt->fetch_loaded();

if($mode!="inline")
{
	$returnJSON["counter"] = postvalue("counter");
	$layout = GetPageLayout(GoodFieldName($strTableName), 'detailspreview');
	if($layout)
	{
		foreach($layout->getCSSFiles(isRTL(), isMobile()) as $css)
		{
			$returnJSON['CSSFiles'][] = $css;
		}
	}	
}	

echo printJSON($returnJSON);
exit();
?>