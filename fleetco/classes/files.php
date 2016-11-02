<?php
/**
	This file contains definitions of the objects helping to save, move and delete uploaded files
*/

class MoveFile
{
	var $sourceFilename;
	var $destFilename;
	var $destPath;
	var $destPathIsAbsolute;
	function __construct($source, $name, $path, $abs)
	{
		$this->sourceFilename = $source;
		$this->destFilename = $name;
		$this->destPath = $path;
		$this->destPathIsAbsolute = $abs;
	}
	function Move()
	{
		$path = $this->destPath;
		if(!$this->destPathIsAbsolute)
		{
			$path = getabspath($path);
		}
		$last = substr($path,strlen($path)-1);
		if($last!="/" && $last!="\\")
			$path .= "/";
		runner_move_uploaded_file($this->sourceFilename,$path.$this->destFilename);
	}
}

class SaveFile
{
	var $fileContents;
	var $destFilename;
	var $destPath;
	var $destPathIsAbsolute;
	function __construct($contents, $name, $path, $abs)
	{
		$this->fileContents = $contents;
		$this->destFilename = $name;
		$this->destPath = $path;
		$this->destPathIsAbsolute = $abs;
	}
	function Save()
	{
		$path = $this->destPath;
		if(!$this->destPathIsAbsolute)
		{
			$path = getabspath($path);
		}
		$last = substr($path,strlen($path)-1);
		if($last!="/" && $last!="\\")
			$path .= "/";
		runner_save_file($path.$this->destFilename,$this->fileContents);
	}
}

class DeleteFile
{
	var $destFilename;
	var $destPath;
	var $destPathIsAbsolute;
	function __construct($name, $path, $abs)
	{
		$this->destFilename = $name;
		$this->destPath = $path;
		$this->destPathIsAbsolute = $abs;
	}
	function Delete()
	{
		$path = $this->destPath;
		if(!$this->destPathIsAbsolute)
		{
			$path = getabspath($path);
		}
		$last = substr($path,strlen($path)-1);
		if($last!="/" && $last!="\\")
			$path .= "/";
		runner_delete_file($path.$this->destFilename);
	}
}

?>