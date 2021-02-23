<?php
class eventclass_fuelmaster  extends eventsBase
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

		if ($values["MeterReading"]<=$values["LastMileage"])
{
$message ="Record is NOT updated. Current mileage can not be less than last mileage";
Return false;
}
elseif ($values["FillType"]=="Full Tank")
{
$values["Economy"]=($values["MeterReading"]-$values["LastMileage"])/$values["LitersPumped"];
Return true;
}
else
{
$values["Economy"]="N/A";
Return true;
}
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		if ($values["MeterReading"]<=$values["LastMileage"])
{
$message ="Record is NOT updated. Current mileage can not be less than last mileage";
Return false;
}
elseif ($values["FillType"]=="Full Tank")
{
$values["Economy"]=($values["MeterReading"]-$values["LastMileage"])/$values["LitersPumped"];
Return true;
}
else
{
$values["Economy"]="N/A";
Return true;
}
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

}
?>
