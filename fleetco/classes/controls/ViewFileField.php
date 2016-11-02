<?php
/**
 * ViewFileField
 * "Abstract" parent for all file fields (image, video, audio)
 */
class ViewFileField extends ViewControl
{
	/**
	 * Instanse of UploadHandler class
	 * @var {object}
	 */
	var $upload_handler = null;
	
	function __construct($field, $container, $pageobject)
	{
		parent::__construct($field, $container, $pageobject);
		$this->initUploadHandler();
	}
	
	/**
	 * @param &Array data
	 * @return String	 
	 */
	public function getTextValue(&$data)
	{		
		if( !strlen( $data[ $this->field ] ) )
			return "";
			
		$filedIsUrl = $this->container->pSet->isVideoUrlField( $this->field );
		if( $filedIsUrl )
			return $data[ $this->field ];		
		
		$fileNames = array();
		
		$filesData = $this->getFilesArray( $data[ $this->field ] );		
		foreach($filesData as $file)
		{	
			$fileNames[] = $file["usrName"] ;
		}		
		
		return implode(", ", $fileNames);
	}
	
	function initUploadHandler()
	{
		if(is_null($this->upload_handler))
		{
			require_once getabspath("classes/uploadhandler.php");
			$this->upload_handler = new UploadHandler(getOptionsForMultiUpload($this->container->pSet, $this->field));
			if(!is_null($this->pageObject))
				$this->upload_handler->pSet = $this->pageObject->pSetEdit;
			else
				$this->upload_handler->pSet = $this->container->pSet;
			$this->upload_handler->field = $this->field;
			$this->upload_handler->table = $this->container->pSet->_table;
			$this->upload_handler->pageType = $this->container->pageType;
		}
	}
	
	function getFilesArray($value)
	{
		$filesArray = my_json_decode($value);
		if(!is_array($filesArray) || count($filesArray) == 0)
		{
			if($value == "")
				$filesArray = array();
			else 
			{
				$uploadedFile = $this->upload_handler->get_file_object($value);
				if(is_null($uploadedFile))
					$filesArray =  array();
				else
					$filesArray = array(my_json_decode(my_json_encode($uploadedFile)));
			}
		}
		return $filesArray;
	}
}
?>