<?php
require_once(getabspath("classes/cipherer.php"));



$tdataDashboard2 = array();
$tdataDashboard2[".ShortName"] = "Dashboard2";

//	field labels
$fieldLabelsDashboard2 = array();
$pageTitlesDashboard2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDashboard2["English"] = array();
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDashboard2[""] = array();
}

//	search fields
$tdataDashboard2[".searchFields"] = array();

// all search fields
$tdataDashboard2[".allSearchFields"] = array();

// good like search fields
$tdataDashboard2[".googleLikeFields"] = array();

$tdataDashboard2[".dashElements"] = array();


$tdataDashboard2[".shortTableName"] = "Dashboard2";
$tdataDashboard2[".entityType"] = 4;


$tableEvents["Dashboard2"] = new eventsBase;
$tdataDashboard2[".hasEvents"] = false;


$tdataDashboard2[".tableType"] = "dashboard";



$tdataDashboard2[".addPageEvents"] = false;

$tables_data["Dashboard2"]=&$tdataDashboard2;
$field_labels["Dashboard2"] = &$fieldLabelsDashboard2;
$page_titles["Dashboard2"] = &$pageTitlesDashboard2;

?>