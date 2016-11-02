<?php
/**
 * A wrapper of the Connection class methods
 * basing on an SQL querty result hanle
 */
class QueryResult
{
	/**
	 * The basic Connection object
	 * @type Connection
	 */
	protected $connectionObj;
	
	/**
	 * the query result handle
	 * @type Mixed
	 */
	protected $handle;
	
	
	function __construct( $connectionObj, $qHandle )
	{
		$this->connectionObj = $connectionObj;
		$this->handle = $qHandle;
	}
	
	/**
	 * Get the query result handle
	 * @return Mixed
	 */
	public function getQueryHandle()
	{
		return $this->handle;
	}
	
	/**
	 * A wrapper for the Connection::fetch_array method
	 * @return Mixed - associative Array with record data if data is available.
	 *	 Otherwise it returns FALSE or empty Array depending on data provider. Use conversion to boolean to check if data exists:
	 *	$data = $q->fetchAssoc();
	 *	if($data) 
	 *	...
	 */
	public function fetchAssoc()
	{
		return $this->connectionObj->fetch_array( $this->handle );
	}
	
	/**
	 * A wrapper for the Connection::fetch_numarray method
	 * @return Mixed - integer-indexed Array with record data or empty Array or FALSE if no data available. 
	 *	See fetchAssoc description.
	 */	
	public function fetchNumeric()
	{
		return $this->connectionObj->fetch_numarray( $this->handle );
	}
	
	/**
	 * A wrapper for the Connection::closeQuery method
	 */		
	public function closeQuery()
	{
		$this->connectionObj->closeQuery( $this->handle );
	}
	
	/**
	 * A wrapper for the Connection::num_fields method
	 */		
	public function numFields()
	{
		return $this->connectionObj->num_fields( $this->handle );
	}
	
	/**
	 * A wrapper for the Connection::field_name method
	 */	
	public function fieldName( $offset )
	{
		return $this->connectionObj->field_name( $this->handle, $offset );
	}
	
	/**
	 * A wrapper for the Connection::seekPage method
	 */	
	public function seekPage( $pageSize, $pageStart )
	{
		$this->connectionObj->seekPage($this->handle, $pageSize, $pageStart);
	}
}
?>