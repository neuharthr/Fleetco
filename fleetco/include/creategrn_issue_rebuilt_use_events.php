<?php 
class eventclass_creategrn_issue_rebuilt_use  extends eventsBase
{ 
	function eventclass_creategrn_issue_rebuilt_use()
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
$message = "There is no enough stock for this issue";
return false;
}
else
{
$values["Quantity"]=$values["Quantity"]*-1;
}
return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
