<?php 
class eventclass_creategrn_rebuilt_issue  extends eventsBase
{ 
	function eventclass_creategrn_rebuilt_issue()
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
elseif ($values["ItemCode"]!=$values["PriceLink"])
{
$message = "Record NOT updated!. Item Code and the Cost Code should be the same";
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
