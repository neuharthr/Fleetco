<?php
class DBFunctions
{
	/**
	 * The left db wrapper
	 * @type String
	 */
	protected $strLeftWrapper;
	
	/**
	 * The right db wrapper	
	 * @type String
	 */	
	protected $strRightWrapper;

	
	function __construct( $leftWrapper, $rightWrapper, $extraParams )
	{
		$this->strLeftWrapper = $leftWrapper;
		$this->strRightWrapper = $rightWrapper;
	}

	/**
	 * @param String strName
	 * @return String
	 */	
	public function addTableWrappers( $strName )
	{
		if( substr($strName, 0, 1) == $this->strLeftWrapper )
			return $strName;
			
		$arr = explode(".", $strName);
		$ret = "";
		foreach( $arr as $e )
		{
			if( $ret != "" )
				$ret .= ".";
			$ret .= $this->strLeftWrapper . $e . $this->strRightWrapper;
		}
		return $ret;
	}

	/**
	 *  Get the auto generated SQL string used in the last query
	 * @param String key (optional)	
	 * @param String table (optional)	
	 * @param String oraSequenceName (optional)	
	 * @return String
	 */
	public function getInsertedIdSQL( $key = null, $table = null, $oraSequenceName = false )
	{
		return "SELECT MAX(" . $this->addFieldWrappers( $key ) . ") FROM " . $this->addTableWrappers( $table );
	}	

	/**
	 * @param String strName
	 * @return String
	 */	
	public function timeToSecWrapper( $strName )
	{
		return $this->addTableWrappers($strName);
	}
	
}
?>