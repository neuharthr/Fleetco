<?php
class RunnerCipherer
{
	public $key = '';
	public $alg = '';
	public $mode = '';
	
	protected $strTableName = '';
	
	/**
	 * Instance of RunnerCiphererES class for code-based ciphering
	 */
	protected $ESFunctions = null;
	
	/**
	 * Instance of ProjectSettings class
	 */
	protected $pSet = null;
	
	/**
	 * Array of fields which encrypted status already determined
	 */
	protected $encryptedFields = array();
	
	/**
	 * @type Connection
	 */
	protected $connection;
	
	
	function __construct($strTableName, $pSet = null)
	{
		
		$this->strTableName = $strTableName;

		$this->setConnection();
		$this->key = $this->connection->_encryptInfo["key"];
		$this->alg = $this->connection->_encryptInfo["alg"];
		$this->mode = $this->connection->_encryptInfo["mode"];
		
		if($pSet != null)
			$this->pSet = $pSet;
		else 
			$this->pSet = new ProjectSettings($strTableName);
	}
	
	/**
	 * Set the 'connection' property
	 */
	protected function setConnection()
	{
		global $cman;
		
		if( $this->strTableName != NOT_TABLE_BASED_TNAME )
			$this->connection = $cman->byTable( $this->strTableName );
		else
			$this->connection = getDefaultConnection();

		if ( $this->connection->dbType == nDATABASE_MSSQLServer && $this->connection->_encryptInfo["alg"] == ENCRYPTION_ALG_AES && $this->connection->_encryptInfo["mode"] == ENCRYPTION_DB )
		{
			$symmetricSql = mysprintf("OPEN SYMMETRIC KEY %s DECRYPTION BY CERTIFICATE %s;", array($this->connection->_encryptInfo["slqserverkey"], $this->connection->_encryptInfo["slqservercert"]));
			$this->connection->setInitializingSQL($symmetricSql);
		}
	}

	function isEncryptionByPHPEnabled() {
		return $this->connection->isEncryptionByPHPEnabled();
	}

	/**
	 * DecryptFetchedArray
	 * Fetching record from sql result, looking through array of fetched values and decrypted all encrypted fields
	 * @param {array} fetchedArray 
	 * @return {array} decrypted array
	 */
	public function DecryptFetchedArray( $fetchedArray )
	{	
		$result = array();

		if($fetchedArray)
		{
			if( !$this->pSet->hasEncryptedFields() || !$this->connection->isEncryptionByPHPEnabled() )
				return $fetchedArray;
				
			foreach ($fetchedArray as $fieldName => $fieldValue)
			{
				$result[ $fieldName ] = $this->DecryptField($fieldName, $fieldValue);
			}
		}
		
		return $result;
	}
	
	/**
	 * @param String field
	 * @param String
	 */
	public function isFieldEncrypted($field)
	{	
		$table = $this->strTableName;
		
		if( array_key_exists($table, $this->encryptedFields) && array_key_exists($field, $this->encryptedFields[ $table ]) )
			return $this->encryptedFields[ $table ][ $field ];
		
		if( !array_key_exists($table, $this->encryptedFields) )
			$this->encryptedFields[ $table ] = array();
		
		$this->encryptedFields[ $table ][ $field ] = $this->pSet->isFieldEncrypted($field);
		return $this->encryptedFields[ $table ][ $field ];
	}
	
	/**
	 * @param String field
	 * @return Boolean
	 */	
	public function isFieldPHPEncrypted($field)
	{
		return $this->connection->isEncryptionByPHPEnabled() && $this->isFieldEncrypted($field);
	}
	
	/**
	 * @param String field
	 * @param Mixed value
	 * @param String controltype (optional)
	 * @param Boolean phpEncryptionOnly (optional)
	 */	
	public function MakeDBValue($field, $value, $controltype = "",  $phpEncryptionOnly = false)
	{	
		$ret = prepare_for_db($field, $value, $controltype, "", $this->strTableName);
		if( $ret === false )
			return $ret;
		
		$ret = add_db_quotes($field, $this->EncryptField($field, $ret), $this->strTableName );	
		
		if( $phpEncryptionOnly )
			return $ret;
		
		return $this->EncryptValueByDB($field, $ret);
	} 
	
	/**
	 * @param String field
	 * @param Mixed value
	 */
	public function AddDBQuotes($field, $value)
	{
		return $this->EncryptValueByDB( $field, add_db_quotes($field, $this->EncryptField($field, $value), $this->strTableName) );
	}
	
	/**
	 *
	 */
	public function GetLikeClause($field, $value)
	{
		global $ajaxSearchStartsWith;
		if( $this->connection->isEncryptionByPHPEnabled() && $this->isFieldEncrypted($field) )
			return "=".$this->connection->prepareString( $this->EncryptField($field, $value) );
		
		if( $ajaxSearchStartsWith )
			$searchPattern = $value."%";
		else
			$searchPattern = "%".$value."%";
		return " LIKE ".$this->connection->prepareString( $searchPattern );
	}
	
	/**
	 * GetLookupFieldName
	 * Add to lookup and autofil field name decryption function if master field is encrypted by database 
	 * @param {string} field name
	 * @param {string} master field name
	 * @param {string} alias of field name
	 * @param {bool} shows if 'as' construction needed
	 * @return {string}
	 */
	public function GetLookupFieldName($field, $fieldForCheck, $alias = null, $addAs = false)
	{			
		if( $this->connection->isEncryptionByPHPEnabled() || !$this->isFieldEncrypted($fieldForCheck) )
			return $field;

		return $this->GetEncryptedFieldName($field, $alias, $addAs);
	}
	
	/**
	 * GetFieldName
	 * Add to field name decryption function if field is encrypted by database 
	 * @param {string} field name
	 * @param {string} alias of field name
	 * @param {bool} shows if 'as' construction needed
	 * @return {string}
	 */
	public function GetFieldName($field, $alias = null, $addAs = false)
	{
		if($this->connection->isEncryptionByPHPEnabled() || !$this->isFieldEncrypted($alias != null ? $alias : $field))
			return $field;

		return $this->GetEncryptedFieldName($field, $alias, $addAs);
	}
	
	/**
	 * Get an SQL expression retriving the encrypted field's value
	 * Please note, when changing this function you should make appropriate changes in wizard method (dynamic permissions --> add new user) #8923
	 * @param {string} field
	 * @param {string} alias
	 * @param {string} addAs
	 * @return {string}
	 */
	public function GetEncryptedFieldName($field, $alias = null, $addAs = false)
	{
		$result = "";
		if ( $this->connection->_encryptInfo["alg"] == ENCRYPTION_ALG_DES)
		{
			if( $this->connection->dbType == nDATABASE_Oracle )	
				$result = "utl_raw.cast_to_varchar2(DBMS_CRYPTO.DECRYPT(utl_raw.cast_to_raw(%s), 4353, utl_raw.cast_to_raw('%s')))";
			elseif( $this->connection->dbType == nDATABASE_MSSQLServer )	
				$result = "CAST(DecryptByPassPhrase(N'%s', %s) as nvarchar)";
			elseif( $this->connection->dbType == nDATABASE_MySQL )
				$result = "cast(DES_DECRYPT(unhex(%s), '%s') as char)";
			elseif( $this->connection->dbType == nDATABASE_PostgreSQL )
				$result = "pgp_sym_decrypt(CAST(%s as bytea), '%s')";
		}
		else if ( $this->connection->_encryptInfo["alg"] == ENCRYPTION_ALG_AES)
		{
			if( $this->connection->dbType == nDATABASE_Oracle )
			{
				$result = "utl_raw.cast_to_varchar2(DBMS_CRYPTO.DECRYPT(utl_raw.cast_to_raw(%s), 4358, utl_raw.cast_to_raw('%s')))";
				$this->key = substr($this->key, 0, 16);
			}
			elseif( $this->connection->dbType == nDATABASE_MSSQLServer )
			{	
				$result = "CAST(DecryptByKey(%s) as nvarchar)";
				$this->key = $field; // for use in first as parametr in mysprintf func
			}
			elseif( $this->connection->dbType == nDATABASE_MySQL )
				$result = "cast(AES_DECRYPT(unhex(%s), '%s') as char)";
			elseif( $this->connection->dbType == nDATABASE_PostgreSQL )
				$result = "pgp_sym_decrypt(CAST(%s as bytea), '%s', 'cipher-algo=aes128')";
		}
		
		if($result == "")
			return $field;

		if( $this->connection->dbType == nDATABASE_MSSQLServer )	
			$result = mysprintf($result, array($this->key, $field));
		else
			$result = mysprintf($result, array($field, $this->key));
			
		return $addAs ? $result." as ".$this->connection->addFieldWrappers($alias != null ? $alias : $field) : $result;
	}
	
	/**
	 * EncryptValueByDB
	 * Add to field name encryption function if field is encrypted by database 
	 * Please note, when changing this function you should make appropriate changes in wizard method (dynamic permissions --> add new user) #8923
	 * @param {string} field name
	 * @param {mixed} value
	 * @return {string}
	 */
	public function EncryptValueByDB($field, $value)
	{
		if( !$this->isFieldEncrypted($field) || $this->connection->isEncryptionByPHPEnabled() )
			return $value;
			
		$result = "";
		
		if ( $this->connection->_encryptInfo["alg"] == ENCRYPTION_ALG_DES)
		{
			if( $this->connection->dbType == nDATABASE_Oracle )
				$result = "utl_raw.cast_to_varchar2(DBMS_CRYPTO.ENCRYPT(utl_raw.cast_to_raw(%s), 4353, utl_raw.cast_to_raw('%s')))";	
			elseif( $this->connection->dbType == nDATABASE_MSSQLServer )
				$result = "EncryptByPassPhrase(N'%s', %s)";	
			elseif( $this->connection->dbType == nDATABASE_MySQL )	
				$result = "hex(DES_ENCRYPT(%s, '%s'))";			
			elseif( $this->connection->dbType == nDATABASE_PostgreSQL )	
				$result = "pgp_sym_encrypt(%s, '%s')";
		}
		else if ( $this->connection->_encryptInfo["alg"] == ENCRYPTION_ALG_AES)
		{
			if( $this->connection->dbType == nDATABASE_Oracle )
			{
				$result = "utl_raw.cast_to_varchar2(DBMS_CRYPTO.ENCRYPT(utl_raw.cast_to_raw(%s), 4358, utl_raw.cast_to_raw('%s')))";	
				$this->key = substr($this->key, 0, 16);
			}
			elseif( $this->connection->dbType == nDATABASE_MSSQLServer )
			{			
				$result = "EncryptByKey(Key_GUID('%s'), %s)";
				$this->key = $this->connection->_encryptInfo["slqserverkey"];
			}
			elseif( $this->connection->dbType == nDATABASE_MySQL )	
				$result = "hex(AES_ENCRYPT(%s, '%s'))";			
			elseif( $this->connection->dbType == nDATABASE_PostgreSQL )	
				$result = "pgp_sym_encrypt(%s, '%s', 'cipher-algo=aes128')";
		}
		
		if($result != "")
		{
			if( $this->connection->dbType == nDATABASE_MSSQLServer )
				$result = mysprintf($result, array($this->key, $value));
			else
				$result = mysprintf($result, array($value, $this->key));
		}
		else 
			$result = $value;
			
		return $result;
	}
	
	/**
	 * EncryptField
	 * Determine if field need to be encrypted and encrypt value if it so 
	 * @param {string} field name
	 * @param {string} value
	 * @return {string} encrypted or plain value
	 */
	public function EncryptField($field, $value)
	{		
		if( $this->isFieldEncrypted($field) && $this->connection->isEncryptionByPHPEnabled() )
		{
			if( is_null($this->ESFunctions) )
				$this->ESFunctions = $this->getESFunctions();
				
			return $this->ESFunctions->Encrypt($value);
		}
		
		return $value; 
	}
	
	/**
	 * DecryptField
	 * Determine if field encrypted and decrypt value if it so 
	 * Please note, when changing this function you should make appropriate changes in wizard method (dynamic permissions --> add new user) #8923
	 * @param {string} field name
	 * @param {string} value
	 * @return {string} decrypted or plain value
	 */
	public function DecryptField($field, $value)
	{
		if($this->isFieldEncrypted($field) && $this->connection->isEncryptionByPHPEnabled())
		{
			if(is_null($this->ESFunctions))
				$this->ESFunctions = $this->getESFunctions();
			
			return $this->ESFunctions->Decrypt($value);
		}
		return $value; 
	}

	function getESFunctions()
	{
		if ( $this->connection->_encryptInfo["alg"] == ENCRYPTION_ALG_DES )
			return new RunnerCiphererDES($this->key);
				if ( $this->connection->_encryptInfo["alg"] == ENCRYPTION_ALG_AES )
			return new RunnerCiphererAES($this->key);
	}
	
	/**
	 * @param Mixed loginSet (optional)
	 * @return Mixed
	 */
	public static function getForLogin( $loginSet = null )
	{	
		return new RunnerCipherer( "carrierusers", $loginSet);
	}	
}
?>