<?php
/**
 * The base class containing methods 
 * extracting the database info
 */
class DBInfo
{
	/**
	 * @type Connection
	 */ 
	protected $connectionObj;
	
	
	function __construct( $connObj )
	{
		$this->connectionObj = $connObj;
	}
}
?>