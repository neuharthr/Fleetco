<?php 
class eventclass_creategrn  extends eventsBase
{ 
	function eventclass_creategrn()
	{
	// fill list of events
		$this->events["BeforeProcessRowList"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before record processed
function BeforeProcessRowList(&$data, &$pageObject)
{

		$values['Cost']=$values['Quantity']*$values['UnitPrice'];

// Place event code here.
// Use 

return true;
;		
} // function BeforeProcessRowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
