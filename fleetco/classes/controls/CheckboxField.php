<?php
class CheckboxField extends EditControl
{
	function __construct($field, $pageObject, $id, $connection)
	{
		parent::__construct($field, $pageObject, $id, $connection);
		$this->format = EDIT_FORMAT_CHECKBOX;
	}
	
	function buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		parent::buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
		if($mode == MODE_ADD || $mode == MODE_INLINE_ADD || $mode == MODE_EDIT || $mode == MODE_INLINE_EDIT) 
		{
			$checked = "";
			
			if( $this->connection->dbType == nDATABASE_PostgreSQL && ($value === "t" || $value != "" && $value != 0 ) || $this->connection->dbType != nDATABASE_PostgreSQL && ($value != "" && $value != 0 ))
				$checked=" checked";
				
			echo '<input id="'.$this->ctype.'" type="hidden" name="'.$this->ctype.'" value="checkbox">';
			echo '<input id="'.$this->cfield.'" type="Checkbox" '
				.(($mode == MODE_INLINE_EDIT || $mode == MODE_INLINE_ADD) && $this->is508==true ? 'alt="'.$this->strLabel.'" ' : '')
				.'name="'.$this->cfield.'" '.$checked.'>';
		}
		else
		{
			echo '<input id="'.$this->ctype.'" type="hidden" name="'.$this->ctype.'" value="checkbox">';
			echo '<select id="'.$this->cfield.'" '.(($mode == MODE_INLINE_EDIT || $mode == MODE_INLINE_ADD) && $this->is508==true ? 'alt="'
				.$this->strLabel.'" ' : '').'name="'.$this->cfield.'" class="'. ( $this->pageObject->getLayoutVersion() == BOOTSTRAP_LAYOUT ? ' form-control' : '' ) . '">';
				
			$val = array( "" => array(), "True" => array("on", "1"), "False" => array("off", "0") );		
			$optval = array("", "on", "off");
			$show = array("", "True", "False");
			
			foreach($show as $key => $shownValue)
			{	
				$sel = in_array( $value, $val[ $shownValue] ) ? " selected" : "";
				echo '<option value="'.$optval[$key].'"'.$sel.'>'.$shownValue.'</option>';
			}
			
			echo "</select>";
		}
		$this->buildControlEnd($validate, $mode);
	}

	function getFirstElementId()
	{
		return $this->cfield;
	}
	
	function SQLWhere($SearchFor, $strSearchOption, $SearchFor2, $etype, $isSuggest)
	{
		$baseResult = $this->baseSQLWhere($strSearchOption);
		if($baseResult === false)
			return "";
		if($baseResult != "")
			return $baseResult;
		
		if($SearchFor == "none" || $SearchFor != "on" && $SearchFor != "off")
			return "";
		
		$fullFieldName = $this->getFieldSQLDecrypt();
		$bNeedQuotes = NeedQuotes($this->type);
		
		return CheckboxField::constructFieldWhere($fullFieldName, $bNeedQuotes, $SearchFor == "on", $this->type, $this->connection->dbType);
	}
	
	/**
	* Get the WHERE clause condition for the checkbox field basing on 
	* the field and the database type.
	* @param String fullFieldName
	* @param Boolean strNeedQuotes
	* @param Boolean checked		The flag indicating if the condition is 
	* @param Number fieldType
	* @param Number dbType
	* designed to search checked values or not
	*/	
	static function constructFieldWhere($fullFieldName, $bNeedQuotes, $checked, $fieldType, $dbType)
	{
		if($bNeedQuotes)
		{
			if($checked)
			{
				$whereStr = "(".$fullFieldName."<>'0' ";
				if( $dbType != nDATABASE_Oracle )
					$whereStr .= " and ".$fullFieldName."<>'' ";

				$whereStr .= " and ".$fullFieldName." is not null)";
				if( $dbType == nDATABASE_Oracle )
					$whereStr .= " and abs(case when LENGTH(TRIM(TRANSLATE(".$fullFieldName.", ' +-.0123456789', ' '))) is null then cast(".$fullFieldName." as integer) else 0 end) > 0";	

				if( $dbType == nDATABASE_MSSQLServer )	
					$whereStr .= " and ABS(case WHEN ISNUMERIC(".$fullFieldName.") = 1 THEN convert(integer, ".$fullFieldName.") else 0 end) > 0";	
				
				if( $dbType == nDATABASE_MySQL )
					$whereStr .= " and abs(cast(".$fullFieldName." as signed)) > 0";	

				if( $dbType == nDATABASE_PostgreSQL )	
					$whereStr .= " and abs(case textregexeq(".$fullFieldName.", '^(\-)?[[:digit:]]+(\.[[:digit:]]+)?$') when true then to_number(".$fullFieldName.", '999999999') else 0 end) > 0";	
			
				return $whereStr;
			}
			
			$whereStr = "(".$fullFieldName."='0' ";
			if( $dbType != nDATABASE_Oracle )
				$whereStr .= " or ".$fullFieldName."='' "; 

			$whereStr .= " or ".$fullFieldName." is null)";
			if( $dbType == nDATABASE_Oracle )
				$whereStr .= " or abs(case when LENGTH(TRIM(TRANSLATE(".$fullFieldName.", ' +-.0123456789', ' '))) is null then cast(".$fullFieldName." as integer) else 0 end) = 0";	
	
			if( $dbType == nDATABASE_MSSQLServer )
				$whereStr .= " or ABS(case WHEN ISNUMERIC(".$fullFieldName.") = 1 THEN convert(integer, ".$fullFieldName.") else 0 end) = 0";	
			
			if( $dbType == nDATABASE_MySQL )
				$whereStr .= " or cast(".$fullFieldName." as unsigned) = 0";
			
			if( $dbType == nDATABASE_PostgreSQL )		
				$whereStr .= " or abs(case textregexeq(".$fullFieldName.", '^(\-)?[[:digit:]]+(\.[[:digit:]]+)?$') when true then to_number(".$fullFieldName.", '999999999') else 0 end) = 0";	
		
			return $whereStr;
		}
		
		$falseval = 0;
		if( $dbType == nDATABASE_PostgreSQL )
		{
			if ($fieldType == 11)
				$falseval = 'false';
		}
		
		if($checked)
			return "(".$fullFieldName."<>".$falseval." and ".$fullFieldName." is not null)";
			
		return "(".$fullFieldName."=".$falseval." or ".$fullFieldName." is null)";		
	}
}
?>