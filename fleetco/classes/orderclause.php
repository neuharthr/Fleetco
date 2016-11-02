<?php
class OrderField
{
	/**
	 * Index of field in query
	 * @var {int}
	 */
	var $fieldIndex = null;
	/**
	 * @var {string}
	 */
	var $orderDirection = '';
	/**
	 * Indicator. True if this field selected for sorting by user
	 * @var {bool}
	 */
	var $userDefined = true;
	
	function __construct($fieldIndex, $orderDirection = 'ASC', $userDefined = true)
	{
		$this->fieldIndex = $fieldIndex;
		$this->orderDirection = $orderDirection == "a" || $orderDirection == "ASC" ? "ASC" : "DESC";
		$this->userDefined = $userDefined;
	}
}

class OrderClause
{
	/**
	 * Array of fields engaged in sorting
	 * @var {array}
	 */
	var $fieldsList = array();
	
	/**
	 * Array of order params for URL
	 * @var {array}
	 */
	var $urlList = array();

	/**
	 * Reference for instance of ListPage object
	 * @var {object}
	 */
	var $listObject = null;
	var $moveNext = true;
	
	function __construct($listObject)
	{
		$this->listObject = $listObject;
	}
	
	function hasFieldInList($fieldIndex)
	{
		for($i = 0; $i < count($this->fieldsList); $i++)
			if($this->fieldsList[$i]->fieldIndex == $fieldIndex)
				return $i;
		return -1;
	}
	function addField($fieldIndex, $orderDirection, $userDefined = true)
	{
		$direction = $orderDirection == "a" ? "ASC" : "DESC";
		$fieldPosition = $this->hasFieldInList($fieldIndex);
		if($fieldPosition < 0)
			$this->fieldsList[] = new OrderField($fieldIndex, $direction, $userDefined);
		else
		{
			if($userDefined){
				$this->fieldsList[$fieldPosition]->orderDirection = ($direction);
				$this->fieldsList[$fieldPosition]->userDefined = $userDefined;
			}
		}
	}
	function removeNonUserDefinedFields()
	{
		$newFieldsArray = array();
		for($i = 0; $i < count($this->fieldsList); $i++)
			if($this->fieldsList[$i]->userDefined)
				$newFieldsArray[] = $this->fieldsList[$i];
		$this->fieldsList = $newFieldsArray;
	}
	function init()
	{
		//Session field for sort
		if( @$_SESSION[$this->listObject->sessionPrefix."_orderFieldsList"] )
			$this->fieldsList = unserialize($_SESSION[$this->listObject->sessionPrefix."_orderFieldsList"]);
	}
	/**
	 * Builde sorting order params
	 */
	function buildOrderParams() 
	{
		//orderlinkattrs for fields
		$this->listObject->orderLinksAttr();
		
		if( !$this->listObject->isPageSortable() )
			return;
		
		$this->init();	

		$this->adjustFiledList();
			
		$this->buildFieldLabels();
		
		//Shape sorting line for a request
		for($i = 0; $i < count($this->fieldsList); $i ++)
		{
			$this->listObject->strOrderBy .= ($this->listObject->pSet->GetFieldByIndex($this->fieldsList[$i]->fieldIndex) 
				? ($this->listObject->strOrderBy != "" ? ", " : " ORDER BY ").$this->fieldsList[$i]->fieldIndex." "
					.$this->fieldsList[$i]->orderDirection: "");
		}
		
		if($_SESSION[$this->listObject->sessionPrefix."_noNextPrev"] == 1)
			$this->listObject->strOrderBy = $this->listObject->gstrOrderBy;

		$this->fillUrlList();
		$this->listObject->addOrderUrlParam();
	}

	function fillUrlList()
	{
		foreach ( $this->fieldsList as $field )
		{
			if ( !$field->userDefined || !$fieldName = $this->listObject->pSet->GetFieldByIndex($field->fieldIndex) )
				continue;

			$this->urlList[] = ( $field->orderDirection == "ASC" ? "a":"d") . $fieldName;
		}
	}
	
	/**
	 * Adjust fieldsList and corresponding properties
	 */
	function adjustFiledList()
	{
		if( !strlen($_SESSION[$this->listObject->sessionPrefix."_order"]) ) 
			$this->buildFieldsArrayForSortOrder();
		
		if( @$_SESSION[$this->listObject->sessionPrefix."_orderby"] ) 
			$this->extractFieldsArrayForSortingFromSession();
			
		$_SESSION[$this->listObject->sessionPrefix."_orderFieldsList"] = serialize($this->fieldsList);	
	}
	
	/**
	 * getKeyFieldsForSortOrder
	 * Return arrray of keyfields indexes for sort order
	 * return {array}
	 */
	function getKeyFieldsForSortOrder()
	{
		if(@$_SESSION[$this->listObject->sessionPrefix."_key"])
			$keys = $_SESSION[$this->listObject->sessionPrefix."_key"];
		else
		{
			$keys = array();
			$tKeys = $this->listObject->pSet->getTableKeys();
			for($i = 0; $i < count($tKeys); $i ++) 
			{
				if($this->listObject->pSet->getFieldIndex($tKeys[$i]))
					$keys[] = $this->listObject->pSet->getFieldIndex($tKeys[$i]);
			}
			$_SESSION[$this->listObject->sessionPrefix."_key"]= $keys;
		}
		return $keys;
	}
	/**
	 * @param {array} fields for sorting defined by user 
	 */
	function buildFieldsArrayForSortOrder()
	{
		$this->fieldsList = array();
		if(count($this->listObject->gOrderIndexes)) 
		{
			for($i = 0; $i < count($this->listObject->gOrderIndexes); $i ++) 
				$this->fieldsList[] = new OrderField($this->listObject->gOrderIndexes[$i][0]
					, $this->listObject->gOrderIndexes[$i][1], false);
		}
		elseif($this->listObject->gstrOrderBy != '')
			$_SESSION[$this->listObject->sessionPrefix."_noNextPrev"] = 1;
		$this->addKeyFieldsToSortOrder();			
	}
	/**
	 * extractFieldsArrayForSortingFromSession
	 */
	function extractFieldsArrayForSortingFromSession()
	{
		if ( @$_REQUEST["orderby"] || !@$_REQUEST["a"] && !@$_REQUEST["q"] && !@$_REQUEST["qs"] && !@$_REQUEST["goto"] && !@$_REQUEST["pagesize"] && !@$_REQUEST["f"] )
		{
			if(@$_REQUEST["ctrl"]) 
			{
				$this->removeNonUserDefinedFields();
			} 
			else
			{
				$this->fieldsList = array();
				$_SESSION[$this->listObject->sessionPrefix."_noNextPrev"]= 0;
			}

			$inputOrders = explode(";", $_SESSION[$this->listObject->sessionPrefix."_orderby"]);
			foreach ( $inputOrders as $inOrder )
			{
				$order_field = $this->listObject->pSet->getFieldByGoodFieldName(GoodFieldName(substr($inOrder, 1)));
				$order_dir = substr($inOrder, 0, 1);
				$order_ind = $this->listObject->pSet->getFieldIndex($order_field);
				if ( !$order_ind ) 
					continue;
				
				$this->addField($order_ind, $order_dir);
				$this->addKeyFieldsToSortOrder();
			}
			unset($_SESSION[$this->listObject->sessionPrefix."_orderby"]);
		}
	}
	/**
	 * addKeyFieldsToSortOrder
	 * Add table keyfields to the array which contains fields for sort
	 */
	function addKeyFieldsToSortOrder()
	{
		$keys = $this->getKeyFieldsForSortOrder();
		if(count($keys) && $this->moveNext) 
		{
			for($i = 0; $i < count($keys); $i++)
			{ 
				$this->addField($keys[$i], 'a', false);
			}
		}
	}
	/**
	 * buildFieldLabels
	 * Draw arrows near field label if field engaged in sorting and build sorting links
	 */
	function buildFieldLabels()
	{
		for($i = 0; $i < count($this->fieldsList); $i ++) 
		{
			$order_field = $this->listObject->pSet->GetFieldByIndex( $this->fieldsList[$i]->fieldIndex );
			$orderFieldName = GoodFieldName($order_field);
			$order_dir = $this->fieldsList[$i]->orderDirection == "ASC" ? "a" : "d";
					
			if($this->fieldsList[$i]->userDefined) 
				$this->listObject->xt->assign_section($orderFieldName."_fieldheader", "", 
				"<span data-icon=\"".($order_dir == "a" ? "sortasc" : "sortdesc")."\"></span>");
					
			// default ASC for key fields	
			$orderlinkattrs = $this->listObject->setLinksAttr( $orderFieldName, $order_dir, $this->fieldsList[$i]->userDefined );		
			$this->listObject->xt->assign( $orderFieldName."_orderlinkattrs", $orderlinkattrs );
		}
	}	
}
?>