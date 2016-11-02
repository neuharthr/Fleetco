<?php 
class eventclass_creategrn_receive_rebuilt  extends eventsBase
{ 
	function eventclass_creategrn_receive_rebuilt()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		if (($values['Status']='Receipt - Used') && empty($values['RemovedFrom']))
{
$message = "Record is NOT updated. Please select the Vehicle from which the item was removed";
return false;
}
else
{
return true;
}
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
