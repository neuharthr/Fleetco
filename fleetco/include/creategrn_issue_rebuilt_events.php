<?php
class eventclass_creategrn_issue_rebuilt  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;

		$this->events["BeforeEdit"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		if ($values["Quantity"]<=0)
{
$message = "Record NOT updated!. Quantity can not be zero or minus";
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
return true;
}

;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		$values["CurrentStock"]=$oldvalues["CurrentStock"];
if ($values["Quantity"]<=0)
{
$message = "Record NOT updated!. Quantity can not be zero or minus";
return false;
}
elseif ($values["Quantity"]>$values["CurrentStock"])
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
return true;
}
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

}
?>
