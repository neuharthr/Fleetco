<?php
/**
 * The set of User API functions preserving the old dbfunctions-dbconnection functions' signatures
 * that wrap the new ConnectionManager, Connection classes' functionality.
 * All the functions below use the default db connection only. 
 * Don't use them in PHPRunner code they are designed to maintain compatibility with old user events' code only.
 */

/**
 * @param String sql
 * @param Mixed conn (unused)
 * @return Mixed
 */ 

function db_connect()
{

}

function db_close($conn = null )
{
} 
 
 
/**
 * @param String sql
 * @param Mixed conn (unused)
 * @return Mixed
 */ 
function db_query($sql, $conn = null )
{
	$connection = getDefaultConnection();
	return $connection->query( $sql )->getQueryHandle();
}

/**
 * @param String sql
 * @param Mixed conn (unused)
 */ 
function db_exec($sql, $conn = null )
{
	$connection = getDefaultConnection();
	$connection->exec( $sql );
}

/**
 * @param Mixed qHandle
 * @return Number
 */ 
function db_insertid( $qHandle )
{
	$connection = getDefaultConnection();
	return $connection->getInsertedId();
} 

/**
 * @param Mixed qHandle
 * @return Array | Boolean
 */ 
function db_fetch_array( $qHandle )
{
	if( is_object( $qHandle ) && get_class( $qHandle ) == "QueryResult" )
	{
		return $qHandle->fetchAssoc();
	}
	$connection = getDefaultConnection();
	return $connection->fetch_array( $qHandle );
}

/**
 * @param Mixed qHandle
 * @return Array | Boolean
 */ 
function db_fetch_numarray( $qHandle )
{
	if( is_object( $qHandle ) && get_class( $qHandle ) == "QueryResult" )
	{
		return $qHandle->fetchNumeric();
	}
	$connection = getDefaultConnection();
	return $connection->fetch_numarray( $qHandle );
}
 
 
/**
 * @param String str
 * @return String
 */ 
function db_prepare_string( $str )
{
	$connection = getDefaultConnection();
	return $connection->prepareString( $str );
}

/**
 * @param String str
 * @return String
 */ 
function db_addslashes( $str )
{
	$connection = getDefaultConnection();
	return $connection->addSlashes( $str );
}

/**
 * @param String str
 * @return String
 */ 
function AddFieldWrappers( $str )
{
	$connection = getDefaultConnection();
	return $connection->addFieldWrappers( $str );
}

/**
 * @param String str
 * @return String
 */ 
function AddTableWrappers( $str )
{
	$connection = getDefaultConnection();
	return $connection->addTableWrappers( $str );
}

/**
 * @param Mixed value
 * @return String
 */ 
function db_upper( $value )
{
	$connection = getDefaultConnection();
	return $connection->upper( $value );
}

/**
 * @param Mixed value
 * @return String
 */ 
function db_datequotes( $value )
{
	$connection = getDefaultConnection();
	return $connection->addDateQuotes( $value );
}

/**
 * @param Connection connection (optional)
 * @return Number
 */
function GetDatabaseType( $connection = null )
{
	if( is_null($connection) )
		$connection = getDefaultConnection();
		
	return $connection->dbType;	
}
?>