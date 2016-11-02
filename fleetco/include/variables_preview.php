<?php
##if @TABLE.nType==titTABLE || @TABLE.nType==titVIEW##
$tdata##@TABLE.strShortTableName##[".pageSize"]=##@TABLE.nNumberOfRecords##;
##endif##

##if @TABLE.nType==titTABLE || @TABLE.nType==titVIEW || @TABLE.nType==titREPORT##
	##foreach @TABLE.arrOrderIndexes as @o order @o.nOrderIndex##
$tdata##@TABLE.strShortTableName##[".orderindexes"][] = array(##@o.nIndex##, (##@o.bAsc## ? "ASC" : "DESC"), "##@o.strOrderField s##");
	##endfor##
##endif##

/* 
 ##@TABLE.strSQL##
 */
$query = new SQLQuery(...);

$table = "##@TABLE.strShortTableName##";
?>
