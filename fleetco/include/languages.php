<?php

$langfile="";
if(mlang_getcurrentlang() == "Afrikaans")
	$langfile="Afrikaans.php";
if(mlang_getcurrentlang() == "Arabic")
	$langfile="Arabic.php";
if(mlang_getcurrentlang() == "Chinese")
	$langfile="Chinese.php";
if(mlang_getcurrentlang() == "English")
	$langfile="English.php";
if(mlang_getcurrentlang() == "French")
	$langfile="French.php";
if(mlang_getcurrentlang() == "German")
	$langfile="German.php";
if(mlang_getcurrentlang() == "Italian")
	$langfile="Italian.php";
if(mlang_getcurrentlang() == "Russian")
	$langfile="Russian.php";
if(mlang_getcurrentlang() == "Spanish")
	$langfile="Spanish.php";

if($langfile)
	include(getabspath("include/lang/".$langfile));

function mlang_message($tag)
{
	global $mlang_messages,$mlang_defaultlang;
	return @$mlang_messages[mlang_getcurrentlang()][$tag];
}

?>