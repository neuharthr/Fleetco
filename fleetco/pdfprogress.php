<?php
session_start();
$filename=@$_SESSION["pdf_filename"];
$file = @fopen($filename,"rb");
if($file)
{
	$contents = @fread($file, filesize($filename));
    echo $contents;
    @fclose($file);
}
?>