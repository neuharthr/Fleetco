<?php
class eventclass_creategrn_issuetorebuild  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		if ($values["Quantity"]>$values["CurrentStock"])
{
$message = "Record NOT updated!. There is no enough stock balance for this issue";
return false;
}
else
{
$values["Quantity"]=$values["Quantity"]*-1;
$values["Cost"]=$values["Quantity"]*$values["UnitPrice"];
return true;
}

;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

}
?>
