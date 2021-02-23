<?php
require_once(getabspath("classes/cipherer.php"));



$tdataDashboard1 = array();
$tdataDashboard1[".ShortName"] = "Dashboard1";

//	field labels
$fieldLabelsDashboard1 = array();
$pageTitlesDashboard1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDashboard1["English"] = array();
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDashboard1[""] = array();
}

//	search fields
$tdataDashboard1[".searchFields"] = array();

// all search fields
$tdataDashboard1[".allSearchFields"] = array();

// good like search fields
$tdataDashboard1[".googleLikeFields"] = array();

$tdataDashboard1[".dashElements"] = array();


$tdataDashboard1[".shortTableName"] = "Dashboard1";
$tdataDashboard1[".entityType"] = 4;


$tableEvents["Dashboard1"] = new eventsBase;
$tdataDashboard1[".hasEvents"] = false;


$tdataDashboard1[".tableType"] = "dashboard";



$tdataDashboard1[".addPageEvents"] = false;

$tables_data["Dashboard1"]=&$tdataDashboard1;
$field_labels["Dashboard1"] = &$fieldLabelsDashboard1;
$page_titles["Dashboard1"] = &$pageTitlesDashboard1;

?>