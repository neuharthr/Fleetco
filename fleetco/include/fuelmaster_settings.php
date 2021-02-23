<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafuelmaster = array();
	$tdatafuelmaster[".truncateText"] = true;
	$tdatafuelmaster[".NumberOfChars"] = 80;
	$tdatafuelmaster[".ShortName"] = "fuelmaster";
	$tdatafuelmaster[".OwnerID"] = "";
	$tdatafuelmaster[".OriginalTable"] = "fuelmaster";

//	field labels
$fieldLabelsfuelmaster = array();
$fieldToolTipsfuelmaster = array();
$pageTitlesfuelmaster = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfuelmaster["English"] = array();
	$fieldToolTipsfuelmaster["English"] = array();
	$pageTitlesfuelmaster["English"] = array();
	$fieldLabelsfuelmaster["English"]["Id"] = "ID";
	$fieldToolTipsfuelmaster["English"]["Id"] = "";
	$fieldLabelsfuelmaster["English"]["SystemDate"] = "Sys. Date";
	$fieldToolTipsfuelmaster["English"]["SystemDate"] = "";
	$fieldLabelsfuelmaster["English"]["FuelDate"] = "Fuel Date";
	$fieldToolTipsfuelmaster["English"]["FuelDate"] = "";
	$fieldLabelsfuelmaster["English"]["Vehicle"] = "Vehicle";
	$fieldToolTipsfuelmaster["English"]["Vehicle"] = "";
	$fieldLabelsfuelmaster["English"]["MeterReading"] = "Mtr.Read.";
	$fieldToolTipsfuelmaster["English"]["MeterReading"] = "";
	$fieldLabelsfuelmaster["English"]["LitersPumped"] = "Ltr.Pump.";
	$fieldToolTipsfuelmaster["English"]["LitersPumped"] = "";
	$fieldLabelsfuelmaster["English"]["PricePerLiter"] = "Ltr.Price";
	$fieldToolTipsfuelmaster["English"]["PricePerLiter"] = "";
	$fieldLabelsfuelmaster["English"]["FuelStation"] = "Fuel Stat.";
	$fieldToolTipsfuelmaster["English"]["FuelStation"] = "";
	$fieldLabelsfuelmaster["English"]["Fleet"] = "Fleet";
	$fieldToolTipsfuelmaster["English"]["Fleet"] = "";
	$fieldLabelsfuelmaster["English"]["Cost"] = "Cost";
	$fieldToolTipsfuelmaster["English"]["Cost"] = "";
	$fieldLabelsfuelmaster["English"]["LastMileage"] = "Last Milea.";
	$fieldToolTipsfuelmaster["English"]["LastMileage"] = "";
	$fieldLabelsfuelmaster["English"]["Economy"] = "Economy";
	$fieldToolTipsfuelmaster["English"]["Economy"] = "";
	$fieldLabelsfuelmaster["English"]["FillType"] = "Fill Type";
	$fieldToolTipsfuelmaster["English"]["FillType"] = "";
	$fieldLabelsfuelmaster["English"]["CouponNo"] = "Coupon";
	$fieldToolTipsfuelmaster["English"]["CouponNo"] = "";
	$fieldLabelsfuelmaster["English"]["Driver"] = "Driver";
	$fieldToolTipsfuelmaster["English"]["Driver"] = "";
	if (count($fieldToolTipsfuelmaster["English"]))
		$tdatafuelmaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsfuelmaster["Afrikaans"] = array();
	$fieldToolTipsfuelmaster["Afrikaans"] = array();
	$pageTitlesfuelmaster["Afrikaans"] = array();
	$fieldLabelsfuelmaster["Afrikaans"]["Id"] = "ID";
	$fieldToolTipsfuelmaster["Afrikaans"]["Id"] = "";
	$fieldLabelsfuelmaster["Afrikaans"]["SystemDate"] = "stelsel Datum";
	$fieldToolTipsfuelmaster["Afrikaans"]["SystemDate"] = "";
	$fieldLabelsfuelmaster["Afrikaans"]["FuelDate"] = "brandstof Datum";
	$fieldToolTipsfuelmaster["Afrikaans"]["FuelDate"] = "";
	$fieldLabelsfuelmaster["Afrikaans"]["Vehicle"] = "voertuig";
	$fieldToolTipsfuelmaster["Afrikaans"]["Vehicle"] = "";
	$fieldLabelsfuelmaster["Afrikaans"]["MeterReading"] = "meterlesing";
	$fieldToolTipsfuelmaster["Afrikaans"]["MeterReading"] = "";
	$fieldLabelsfuelmaster["Afrikaans"]["LitersPumped"] = "Liter Pomp";
	$fieldToolTipsfuelmaster["Afrikaans"]["LitersPumped"] = "";
	$fieldLabelsfuelmaster["Afrikaans"]["PricePerLiter"] = "Liter prys";
	$fieldToolTipsfuelmaster["Afrikaans"]["PricePerLiter"] = "";
	$fieldLabelsfuelmaster["Afrikaans"]["FuelStation"] = "vulstasie";
	$fieldToolTipsfuelmaster["Afrikaans"]["FuelStation"] = "";
	$fieldLabelsfuelmaster["Afrikaans"]["Fleet"] = "vloot";
	$fieldToolTipsfuelmaster["Afrikaans"]["Fleet"] = "";
	$fieldLabelsfuelmaster["Afrikaans"]["Cost"] = "koste";
	$fieldToolTipsfuelmaster["Afrikaans"]["Cost"] = "";
	$fieldLabelsfuelmaster["Afrikaans"]["LastMileage"] = "laaste kilometers";
	$fieldToolTipsfuelmaster["Afrikaans"]["LastMileage"] = "";
	$fieldLabelsfuelmaster["Afrikaans"]["Economy"] = "ekonomie";
	$fieldToolTipsfuelmaster["Afrikaans"]["Economy"] = "";
	$fieldLabelsfuelmaster["Afrikaans"]["FillType"] = "vul Tipe";
	$fieldToolTipsfuelmaster["Afrikaans"]["FillType"] = "";
	$fieldLabelsfuelmaster["Afrikaans"]["CouponNo"] = "coupon";
	$fieldToolTipsfuelmaster["Afrikaans"]["CouponNo"] = "";
	$fieldLabelsfuelmaster["Afrikaans"]["Driver"] = "bestuurder";
	$fieldToolTipsfuelmaster["Afrikaans"]["Driver"] = "";
	if (count($fieldToolTipsfuelmaster["Afrikaans"]))
		$tdatafuelmaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsfuelmaster["Arabic"] = array();
	$fieldToolTipsfuelmaster["Arabic"] = array();
	$pageTitlesfuelmaster["Arabic"] = array();
	$fieldLabelsfuelmaster["Arabic"]["Id"] = "???? ?????";
	$fieldToolTipsfuelmaster["Arabic"]["Id"] = "";
	$fieldLabelsfuelmaster["Arabic"]["SystemDate"] = "????? ??????";
	$fieldToolTipsfuelmaster["Arabic"]["SystemDate"] = "";
	$fieldLabelsfuelmaster["Arabic"]["FuelDate"] = "??????? ??????";
	$fieldToolTipsfuelmaster["Arabic"]["FuelDate"] = "";
	$fieldLabelsfuelmaster["Arabic"]["Vehicle"] = "?????";
	$fieldToolTipsfuelmaster["Arabic"]["Vehicle"] = "";
	$fieldLabelsfuelmaster["Arabic"]["MeterReading"] = "????? ??????";
	$fieldToolTipsfuelmaster["Arabic"]["MeterReading"] = "";
	$fieldLabelsfuelmaster["Arabic"]["LitersPumped"] = "??? ??";
	$fieldToolTipsfuelmaster["Arabic"]["LitersPumped"] = "";
	$fieldLabelsfuelmaster["Arabic"]["PricePerLiter"] = "??? ???????";
	$fieldToolTipsfuelmaster["Arabic"]["PricePerLiter"] = "";
	$fieldLabelsfuelmaster["Arabic"]["FuelStation"] = "???? ????";
	$fieldToolTipsfuelmaster["Arabic"]["FuelStation"] = "";
	$fieldLabelsfuelmaster["Arabic"]["Fleet"] = "?????";
	$fieldToolTipsfuelmaster["Arabic"]["Fleet"] = "";
	$fieldLabelsfuelmaster["Arabic"]["Cost"] = "????";
	$fieldToolTipsfuelmaster["Arabic"]["Cost"] = "";
	$fieldLabelsfuelmaster["Arabic"]["LastMileage"] = "??? ??????????? ??????";
	$fieldToolTipsfuelmaster["Arabic"]["LastMileage"] = "";
	$fieldLabelsfuelmaster["Arabic"]["Economy"] = "??????";
	$fieldToolTipsfuelmaster["Arabic"]["Economy"] = "";
	$fieldLabelsfuelmaster["Arabic"]["FillType"] = "??? ???";
	$fieldToolTipsfuelmaster["Arabic"]["FillType"] = "";
	$fieldLabelsfuelmaster["Arabic"]["CouponNo"] = "?????";
	$fieldToolTipsfuelmaster["Arabic"]["CouponNo"] = "";
	$fieldLabelsfuelmaster["Arabic"]["Driver"] = "????";
	$fieldToolTipsfuelmaster["Arabic"]["Driver"] = "";
	if (count($fieldToolTipsfuelmaster["Arabic"]))
		$tdatafuelmaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsfuelmaster["Chinese"] = array();
	$fieldToolTipsfuelmaster["Chinese"] = array();
	$pageTitlesfuelmaster["Chinese"] = array();
	$fieldLabelsfuelmaster["Chinese"]["Id"] = "ID";
	$fieldToolTipsfuelmaster["Chinese"]["Id"] = "";
	$fieldLabelsfuelmaster["Chinese"]["SystemDate"] = "????";
	$fieldToolTipsfuelmaster["Chinese"]["SystemDate"] = "";
	$fieldLabelsfuelmaster["Chinese"]["FuelDate"] = "????";
	$fieldToolTipsfuelmaster["Chinese"]["FuelDate"] = "";
	$fieldLabelsfuelmaster["Chinese"]["Vehicle"] = "??";
	$fieldToolTipsfuelmaster["Chinese"]["Vehicle"] = "";
	$fieldLabelsfuelmaster["Chinese"]["MeterReading"] = "????";
	$fieldToolTipsfuelmaster["Chinese"]["MeterReading"] = "";
	$fieldLabelsfuelmaster["Chinese"]["LitersPumped"] = "???";
	$fieldToolTipsfuelmaster["Chinese"]["LitersPumped"] = "";
	$fieldLabelsfuelmaster["Chinese"]["PricePerLiter"] = "??";
	$fieldToolTipsfuelmaster["Chinese"]["PricePerLiter"] = "";
	$fieldLabelsfuelmaster["Chinese"]["FuelStation"] = "???";
	$fieldToolTipsfuelmaster["Chinese"]["FuelStation"] = "";
	$fieldLabelsfuelmaster["Chinese"]["Fleet"] = "??";
	$fieldToolTipsfuelmaster["Chinese"]["Fleet"] = "";
	$fieldLabelsfuelmaster["Chinese"]["Cost"] = "??";
	$fieldToolTipsfuelmaster["Chinese"]["Cost"] = "";
	$fieldLabelsfuelmaster["Chinese"]["LastMileage"] = "????";
	$fieldToolTipsfuelmaster["Chinese"]["LastMileage"] = "";
	$fieldLabelsfuelmaster["Chinese"]["Economy"] = "??";
	$fieldToolTipsfuelmaster["Chinese"]["Economy"] = "";
	$fieldLabelsfuelmaster["Chinese"]["FillType"] = "????";
	$fieldToolTipsfuelmaster["Chinese"]["FillType"] = "";
	$fieldLabelsfuelmaster["Chinese"]["CouponNo"] = "???";
	$fieldToolTipsfuelmaster["Chinese"]["CouponNo"] = "";
	$fieldLabelsfuelmaster["Chinese"]["Driver"] = "????";
	$fieldToolTipsfuelmaster["Chinese"]["Driver"] = "";
	if (count($fieldToolTipsfuelmaster["Chinese"]))
		$tdatafuelmaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsfuelmaster["French"] = array();
	$fieldToolTipsfuelmaster["French"] = array();
	$pageTitlesfuelmaster["French"] = array();
	$fieldLabelsfuelmaster["French"]["Id"] = "ID";
	$fieldToolTipsfuelmaster["French"]["Id"] = "";
	$fieldLabelsfuelmaster["French"]["SystemDate"] = "Date du système";
	$fieldToolTipsfuelmaster["French"]["SystemDate"] = "";
	$fieldLabelsfuelmaster["French"]["FuelDate"] = "Date de carburant";
	$fieldToolTipsfuelmaster["French"]["FuelDate"] = "";
	$fieldLabelsfuelmaster["French"]["Vehicle"] = "Véhicule";
	$fieldToolTipsfuelmaster["French"]["Vehicle"] = "";
	$fieldLabelsfuelmaster["French"]["MeterReading"] = "Lecture de compteur";
	$fieldToolTipsfuelmaster["French"]["MeterReading"] = "";
	$fieldLabelsfuelmaster["French"]["LitersPumped"] = "Litres pompés";
	$fieldToolTipsfuelmaster["French"]["LitersPumped"] = "";
	$fieldLabelsfuelmaster["French"]["PricePerLiter"] = "Litre Prix";
	$fieldToolTipsfuelmaster["French"]["PricePerLiter"] = "";
	$fieldLabelsfuelmaster["French"]["FuelStation"] = "Station essence";
	$fieldToolTipsfuelmaster["French"]["FuelStation"] = "";
	$fieldLabelsfuelmaster["French"]["Fleet"] = "Flotte";
	$fieldToolTipsfuelmaster["French"]["Fleet"] = "";
	$fieldLabelsfuelmaster["French"]["Cost"] = "Coût";
	$fieldToolTipsfuelmaster["French"]["Cost"] = "";
	$fieldLabelsfuelmaster["French"]["LastMileage"] = "Dernier kilométrage";
	$fieldToolTipsfuelmaster["French"]["LastMileage"] = "";
	$fieldLabelsfuelmaster["French"]["Economy"] = "Économie";
	$fieldToolTipsfuelmaster["French"]["Economy"] = "";
	$fieldLabelsfuelmaster["French"]["FillType"] = "Type de remplissage";
	$fieldToolTipsfuelmaster["French"]["FillType"] = "";
	$fieldLabelsfuelmaster["French"]["CouponNo"] = "Coupon";
	$fieldToolTipsfuelmaster["French"]["CouponNo"] = "";
	$fieldLabelsfuelmaster["French"]["Driver"] = "Chauffeur";
	$fieldToolTipsfuelmaster["French"]["Driver"] = "";
	if (count($fieldToolTipsfuelmaster["French"]))
		$tdatafuelmaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsfuelmaster["German"] = array();
	$fieldToolTipsfuelmaster["German"] = array();
	$pageTitlesfuelmaster["German"] = array();
	$fieldLabelsfuelmaster["German"]["Id"] = "ICH WÜRDE";
	$fieldToolTipsfuelmaster["German"]["Id"] = "";
	$fieldLabelsfuelmaster["German"]["SystemDate"] = "Systemdatum";
	$fieldToolTipsfuelmaster["German"]["SystemDate"] = "";
	$fieldLabelsfuelmaster["German"]["FuelDate"] = "Fuel Date";
	$fieldToolTipsfuelmaster["German"]["FuelDate"] = "";
	$fieldLabelsfuelmaster["German"]["Vehicle"] = "Fahrzeug";
	$fieldToolTipsfuelmaster["German"]["Vehicle"] = "";
	$fieldLabelsfuelmaster["German"]["MeterReading"] = "Zählerstand";
	$fieldToolTipsfuelmaster["German"]["MeterReading"] = "";
	$fieldLabelsfuelmaster["German"]["LitersPumped"] = "Liter gepumpt";
	$fieldToolTipsfuelmaster["German"]["LitersPumped"] = "";
	$fieldLabelsfuelmaster["German"]["PricePerLiter"] = "Liter Preis";
	$fieldToolTipsfuelmaster["German"]["PricePerLiter"] = "";
	$fieldLabelsfuelmaster["German"]["FuelStation"] = "Tankstelle";
	$fieldToolTipsfuelmaster["German"]["FuelStation"] = "";
	$fieldLabelsfuelmaster["German"]["Fleet"] = "Flotte";
	$fieldToolTipsfuelmaster["German"]["Fleet"] = "";
	$fieldLabelsfuelmaster["German"]["Cost"] = "Kosten";
	$fieldToolTipsfuelmaster["German"]["Cost"] = "";
	$fieldLabelsfuelmaster["German"]["LastMileage"] = "Letzte Meilenzahl";
	$fieldToolTipsfuelmaster["German"]["LastMileage"] = "";
	$fieldLabelsfuelmaster["German"]["Economy"] = "Wirtschaft";
	$fieldToolTipsfuelmaster["German"]["Economy"] = "";
	$fieldLabelsfuelmaster["German"]["FillType"] = "Füllen";
	$fieldToolTipsfuelmaster["German"]["FillType"] = "";
	$fieldLabelsfuelmaster["German"]["CouponNo"] = "Coupon";
	$fieldToolTipsfuelmaster["German"]["CouponNo"] = "";
	$fieldLabelsfuelmaster["German"]["Driver"] = "Treiber";
	$fieldToolTipsfuelmaster["German"]["Driver"] = "";
	if (count($fieldToolTipsfuelmaster["German"]))
		$tdatafuelmaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsfuelmaster["Italian"] = array();
	$fieldToolTipsfuelmaster["Italian"] = array();
	$pageTitlesfuelmaster["Italian"] = array();
	$fieldLabelsfuelmaster["Italian"]["Id"] = "ID";
	$fieldToolTipsfuelmaster["Italian"]["Id"] = "";
	$fieldLabelsfuelmaster["Italian"]["SystemDate"] = "Data di sistema";
	$fieldToolTipsfuelmaster["Italian"]["SystemDate"] = "";
	$fieldLabelsfuelmaster["Italian"]["FuelDate"] = "Data Fuel";
	$fieldToolTipsfuelmaster["Italian"]["FuelDate"] = "";
	$fieldLabelsfuelmaster["Italian"]["Vehicle"] = "Veicolo";
	$fieldToolTipsfuelmaster["Italian"]["Vehicle"] = "";
	$fieldLabelsfuelmaster["Italian"]["MeterReading"] = "Lettura contatori";
	$fieldToolTipsfuelmaster["Italian"]["MeterReading"] = "";
	$fieldLabelsfuelmaster["Italian"]["LitersPumped"] = "litri pompato";
	$fieldToolTipsfuelmaster["Italian"]["LitersPumped"] = "";
	$fieldLabelsfuelmaster["Italian"]["PricePerLiter"] = "Litro Prezzo";
	$fieldToolTipsfuelmaster["Italian"]["PricePerLiter"] = "";
	$fieldLabelsfuelmaster["Italian"]["FuelStation"] = "Stazione di servizio";
	$fieldToolTipsfuelmaster["Italian"]["FuelStation"] = "";
	$fieldLabelsfuelmaster["Italian"]["Fleet"] = "Flotta";
	$fieldToolTipsfuelmaster["Italian"]["Fleet"] = "";
	$fieldLabelsfuelmaster["Italian"]["Cost"] = "Costo";
	$fieldToolTipsfuelmaster["Italian"]["Cost"] = "";
	$fieldLabelsfuelmaster["Italian"]["LastMileage"] = "Ultima Chilometraggio";
	$fieldToolTipsfuelmaster["Italian"]["LastMileage"] = "";
	$fieldLabelsfuelmaster["Italian"]["Economy"] = "Economia";
	$fieldToolTipsfuelmaster["Italian"]["Economy"] = "";
	$fieldLabelsfuelmaster["Italian"]["FillType"] = "Tipo di riempimento";
	$fieldToolTipsfuelmaster["Italian"]["FillType"] = "";
	$fieldLabelsfuelmaster["Italian"]["CouponNo"] = "buono";
	$fieldToolTipsfuelmaster["Italian"]["CouponNo"] = "";
	$fieldLabelsfuelmaster["Italian"]["Driver"] = "autista";
	$fieldToolTipsfuelmaster["Italian"]["Driver"] = "";
	if (count($fieldToolTipsfuelmaster["Italian"]))
		$tdatafuelmaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsfuelmaster["Russian"] = array();
	$fieldToolTipsfuelmaster["Russian"] = array();
	$pageTitlesfuelmaster["Russian"] = array();
	$fieldLabelsfuelmaster["Russian"]["Id"] = "? ??";
	$fieldToolTipsfuelmaster["Russian"]["Id"] = "";
	$fieldLabelsfuelmaster["Russian"]["SystemDate"] = "System Date";
	$fieldToolTipsfuelmaster["Russian"]["SystemDate"] = "";
	$fieldLabelsfuelmaster["Russian"]["FuelDate"] = "??????? ????";
	$fieldToolTipsfuelmaster["Russian"]["FuelDate"] = "";
	$fieldLabelsfuelmaster["Russian"]["Vehicle"] = "???????? ????????????";
	$fieldToolTipsfuelmaster["Russian"]["Vehicle"] = "";
	$fieldLabelsfuelmaster["Russian"]["MeterReading"] = "????????? ????????";
	$fieldToolTipsfuelmaster["Russian"]["MeterReading"] = "";
	$fieldLabelsfuelmaster["Russian"]["LitersPumped"] = "????? ????????";
	$fieldToolTipsfuelmaster["Russian"]["LitersPumped"] = "";
	$fieldLabelsfuelmaster["Russian"]["PricePerLiter"] = "???? ????";
	$fieldToolTipsfuelmaster["Russian"]["PricePerLiter"] = "";
	$fieldLabelsfuelmaster["Russian"]["FuelStation"] = "????????";
	$fieldToolTipsfuelmaster["Russian"]["FuelStation"] = "";
	$fieldLabelsfuelmaster["Russian"]["Fleet"] = "????";
	$fieldToolTipsfuelmaster["Russian"]["Fleet"] = "";
	$fieldLabelsfuelmaster["Russian"]["Cost"] = "?????????";
	$fieldToolTipsfuelmaster["Russian"]["Cost"] = "";
	$fieldLabelsfuelmaster["Russian"]["LastMileage"] = "????????? ??????";
	$fieldToolTipsfuelmaster["Russian"]["LastMileage"] = "";
	$fieldLabelsfuelmaster["Russian"]["Economy"] = "?????????";
	$fieldToolTipsfuelmaster["Russian"]["Economy"] = "";
	$fieldLabelsfuelmaster["Russian"]["FillType"] = "??? ???????";
	$fieldToolTipsfuelmaster["Russian"]["FillType"] = "";
	$fieldLabelsfuelmaster["Russian"]["CouponNo"] = "?????";
	$fieldToolTipsfuelmaster["Russian"]["CouponNo"] = "";
	$fieldLabelsfuelmaster["Russian"]["Driver"] = "????????";
	$fieldToolTipsfuelmaster["Russian"]["Driver"] = "";
	if (count($fieldToolTipsfuelmaster["Russian"]))
		$tdatafuelmaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsfuelmaster["Spanish"] = array();
	$fieldToolTipsfuelmaster["Spanish"] = array();
	$pageTitlesfuelmaster["Spanish"] = array();
	$fieldLabelsfuelmaster["Spanish"]["Id"] = "CARNÉ DE IDENTIDAD";
	$fieldToolTipsfuelmaster["Spanish"]["Id"] = "";
	$fieldLabelsfuelmaster["Spanish"]["SystemDate"] = "Fecha del sistema";
	$fieldToolTipsfuelmaster["Spanish"]["SystemDate"] = "";
	$fieldLabelsfuelmaster["Spanish"]["FuelDate"] = "Fecha del combustible";
	$fieldToolTipsfuelmaster["Spanish"]["FuelDate"] = "";
	$fieldLabelsfuelmaster["Spanish"]["Vehicle"] = "Vehículo";
	$fieldToolTipsfuelmaster["Spanish"]["Vehicle"] = "";
	$fieldLabelsfuelmaster["Spanish"]["MeterReading"] = "Lectura del medidor";
	$fieldToolTipsfuelmaster["Spanish"]["MeterReading"] = "";
	$fieldLabelsfuelmaster["Spanish"]["LitersPumped"] = "Litros bombeados";
	$fieldToolTipsfuelmaster["Spanish"]["LitersPumped"] = "";
	$fieldLabelsfuelmaster["Spanish"]["PricePerLiter"] = "Precio del litro";
	$fieldToolTipsfuelmaster["Spanish"]["PricePerLiter"] = "";
	$fieldLabelsfuelmaster["Spanish"]["FuelStation"] = "Gasolinera";
	$fieldToolTipsfuelmaster["Spanish"]["FuelStation"] = "";
	$fieldLabelsfuelmaster["Spanish"]["Fleet"] = "Flota";
	$fieldToolTipsfuelmaster["Spanish"]["Fleet"] = "";
	$fieldLabelsfuelmaster["Spanish"]["Cost"] = "Costo";
	$fieldToolTipsfuelmaster["Spanish"]["Cost"] = "";
	$fieldLabelsfuelmaster["Spanish"]["LastMileage"] = "Kilometraje pasado";
	$fieldToolTipsfuelmaster["Spanish"]["LastMileage"] = "";
	$fieldLabelsfuelmaster["Spanish"]["Economy"] = "Economía";
	$fieldToolTipsfuelmaster["Spanish"]["Economy"] = "";
	$fieldLabelsfuelmaster["Spanish"]["FillType"] = "Tipo de relleno";
	$fieldToolTipsfuelmaster["Spanish"]["FillType"] = "";
	$fieldLabelsfuelmaster["Spanish"]["CouponNo"] = "Cupón";
	$fieldToolTipsfuelmaster["Spanish"]["CouponNo"] = "";
	$fieldLabelsfuelmaster["Spanish"]["Driver"] = "Conductor";
	$fieldToolTipsfuelmaster["Spanish"]["Driver"] = "";
	if (count($fieldToolTipsfuelmaster["Spanish"]))
		$tdatafuelmaster[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfuelmaster[""] = array();
	$fieldToolTipsfuelmaster[""] = array();
	$pageTitlesfuelmaster[""] = array();
	if (count($fieldToolTipsfuelmaster[""]))
		$tdatafuelmaster[".isUseToolTips"] = true;
}


	$tdatafuelmaster[".NCSearch"] = true;



$tdatafuelmaster[".shortTableName"] = "fuelmaster";
$tdatafuelmaster[".nSecOptions"] = 0;
$tdatafuelmaster[".recsPerRowPrint"] = 1;
$tdatafuelmaster[".mainTableOwnerID"] = "";
$tdatafuelmaster[".moveNext"] = 1;
$tdatafuelmaster[".entityType"] = 0;

$tdatafuelmaster[".strOriginalTableName"] = "fuelmaster";

		 



$tdatafuelmaster[".showAddInPopup"] = false;

$tdatafuelmaster[".showEditInPopup"] = false;

$tdatafuelmaster[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafuelmaster[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafuelmaster[".fieldsForRegister"] = array();

	$tdatafuelmaster[".listAjax"] = true;

	$tdatafuelmaster[".audit"] = false;

	$tdatafuelmaster[".locking"] = false;

$tdatafuelmaster[".edit"] = true;
$tdatafuelmaster[".afterEditAction"] = 1;
$tdatafuelmaster[".closePopupAfterEdit"] = 1;
$tdatafuelmaster[".afterEditActionDetTable"] = "";

$tdatafuelmaster[".add"] = true;
$tdatafuelmaster[".afterAddAction"] = 1;
$tdatafuelmaster[".closePopupAfterAdd"] = 1;
$tdatafuelmaster[".afterAddActionDetTable"] = "Detail tables not found!";

$tdatafuelmaster[".list"] = true;




$tdatafuelmaster[".view"] = true;

$tdatafuelmaster[".import"] = true;

$tdatafuelmaster[".exportTo"] = true;

$tdatafuelmaster[".printFriendly"] = true;

$tdatafuelmaster[".delete"] = true;

$tdatafuelmaster[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafuelmaster[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatafuelmaster[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatafuelmaster[".searchSaving"] = false;
//

$tdatafuelmaster[".showSearchPanel"] = true;
		$tdatafuelmaster[".flexibleSearch"] = true;

$tdatafuelmaster[".isUseAjaxSuggest"] = true;

$tdatafuelmaster[".rowHighlite"] = true;



$tdatafuelmaster[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafuelmaster[".isUseTimeForSearch"] = false;





$tdatafuelmaster[".allSearchFields"] = array();
$tdatafuelmaster[".filterFields"] = array();
$tdatafuelmaster[".requiredSearchFields"] = array();

$tdatafuelmaster[".allSearchFields"][] = "Id";
	$tdatafuelmaster[".allSearchFields"][] = "SystemDate";
	$tdatafuelmaster[".allSearchFields"][] = "Fleet";
	$tdatafuelmaster[".allSearchFields"][] = "FuelDate";
	$tdatafuelmaster[".allSearchFields"][] = "Vehicle";
	$tdatafuelmaster[".allSearchFields"][] = "Driver";
	$tdatafuelmaster[".allSearchFields"][] = "CouponNo";
	$tdatafuelmaster[".allSearchFields"][] = "FuelStation";
	$tdatafuelmaster[".allSearchFields"][] = "MeterReading";
	$tdatafuelmaster[".allSearchFields"][] = "LitersPumped";
	$tdatafuelmaster[".allSearchFields"][] = "FillType";
	$tdatafuelmaster[".allSearchFields"][] = "PricePerLiter";
	$tdatafuelmaster[".allSearchFields"][] = "Cost";
	$tdatafuelmaster[".allSearchFields"][] = "LastMileage";
	$tdatafuelmaster[".allSearchFields"][] = "Economy";
	

$tdatafuelmaster[".googleLikeFields"] = array();
$tdatafuelmaster[".googleLikeFields"][] = "Id";
$tdatafuelmaster[".googleLikeFields"][] = "SystemDate";
$tdatafuelmaster[".googleLikeFields"][] = "FuelDate";
$tdatafuelmaster[".googleLikeFields"][] = "Vehicle";
$tdatafuelmaster[".googleLikeFields"][] = "MeterReading";
$tdatafuelmaster[".googleLikeFields"][] = "LitersPumped";
$tdatafuelmaster[".googleLikeFields"][] = "PricePerLiter";
$tdatafuelmaster[".googleLikeFields"][] = "FuelStation";
$tdatafuelmaster[".googleLikeFields"][] = "Fleet";
$tdatafuelmaster[".googleLikeFields"][] = "Cost";
$tdatafuelmaster[".googleLikeFields"][] = "LastMileage";
$tdatafuelmaster[".googleLikeFields"][] = "Economy";
$tdatafuelmaster[".googleLikeFields"][] = "FillType";
$tdatafuelmaster[".googleLikeFields"][] = "CouponNo";
$tdatafuelmaster[".googleLikeFields"][] = "Driver";


$tdatafuelmaster[".advSearchFields"] = array();
$tdatafuelmaster[".advSearchFields"][] = "Id";
$tdatafuelmaster[".advSearchFields"][] = "SystemDate";
$tdatafuelmaster[".advSearchFields"][] = "Fleet";
$tdatafuelmaster[".advSearchFields"][] = "FuelDate";
$tdatafuelmaster[".advSearchFields"][] = "Vehicle";
$tdatafuelmaster[".advSearchFields"][] = "Driver";
$tdatafuelmaster[".advSearchFields"][] = "CouponNo";
$tdatafuelmaster[".advSearchFields"][] = "FuelStation";
$tdatafuelmaster[".advSearchFields"][] = "MeterReading";
$tdatafuelmaster[".advSearchFields"][] = "LitersPumped";
$tdatafuelmaster[".advSearchFields"][] = "FillType";
$tdatafuelmaster[".advSearchFields"][] = "PricePerLiter";
$tdatafuelmaster[".advSearchFields"][] = "Cost";
$tdatafuelmaster[".advSearchFields"][] = "LastMileage";
$tdatafuelmaster[".advSearchFields"][] = "Economy";

$tdatafuelmaster[".tableType"] = "list";

$tdatafuelmaster[".printerPageOrientation"] = 0;
$tdatafuelmaster[".nPrinterPageScale"] = 100;

$tdatafuelmaster[".nPrinterSplitRecords"] = 40;

$tdatafuelmaster[".nPrinterPDFSplitRecords"] = 40;



$tdatafuelmaster[".geocodingEnabled"] = false;





$tdatafuelmaster[".listGridLayout"] = 3;


$tdatafuelmaster[".isResizeColumns"] = true;



// view page pdf
$tdatafuelmaster[".isViewPagePDF"] = true;
$tdatafuelmaster[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatafuelmaster[".isPrinterPagePDF"] = true;
$tdatafuelmaster[".nPrinterPagePDFScale"] = 100;

$tdatafuelmaster[".totalsFields"] = array();
$tdatafuelmaster[".totalsFields"][] = array(
	"fName" => "LitersPumped",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatafuelmaster[".totalsFields"][] = array(
	"fName" => "Cost",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatafuelmaster[".totalsFields"][] = array(
	"fName" => "Economy",
	"numRows" => 0,
	"totalsType" => "AVERAGE",
	"viewFormat" => 'Number');

$tdatafuelmaster[".pageSize"] = 20;

$tdatafuelmaster[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafuelmaster[".strOrderBy"] = $tstrOrderBy;

$tdatafuelmaster[".orderindexes"] = array();

$tdatafuelmaster[".sqlHead"] = "SELECT Id,  SystemDate,  FuelDate,  Vehicle,  MeterReading,  LitersPumped,  PricePerLiter,  FuelStation,  Fleet,  LitersPumped*PricePerLiter AS Cost,  LastMileage,  Economy,  FillType,  CouponNo,  Driver";
$tdatafuelmaster[".sqlFrom"] = "FROM fuelmaster";
$tdatafuelmaster[".sqlWhereExpr"] = "";
$tdatafuelmaster[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = -1;
$tdatafuelmaster[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafuelmaster[".arrGroupsPerPage"] = $arrGPP;

$tdatafuelmaster[".highlightSearchResults"] = true;

$tableKeysfuelmaster = array();
$tableKeysfuelmaster[] = "Id";
$tdatafuelmaster[".Keys"] = $tableKeysfuelmaster;

$tdatafuelmaster[".listFields"] = array();
$tdatafuelmaster[".listFields"][] = "Id";
$tdatafuelmaster[".listFields"][] = "FuelDate";
$tdatafuelmaster[".listFields"][] = "Fleet";
$tdatafuelmaster[".listFields"][] = "Vehicle";
$tdatafuelmaster[".listFields"][] = "CouponNo";
$tdatafuelmaster[".listFields"][] = "Driver";
$tdatafuelmaster[".listFields"][] = "FuelStation";
$tdatafuelmaster[".listFields"][] = "MeterReading";
$tdatafuelmaster[".listFields"][] = "LitersPumped";
$tdatafuelmaster[".listFields"][] = "FillType";
$tdatafuelmaster[".listFields"][] = "PricePerLiter";
$tdatafuelmaster[".listFields"][] = "Cost";
$tdatafuelmaster[".listFields"][] = "LastMileage";
$tdatafuelmaster[".listFields"][] = "Economy";

$tdatafuelmaster[".hideMobileList"] = array();


$tdatafuelmaster[".viewFields"] = array();
$tdatafuelmaster[".viewFields"][] = "Id";
$tdatafuelmaster[".viewFields"][] = "SystemDate";
$tdatafuelmaster[".viewFields"][] = "Fleet";
$tdatafuelmaster[".viewFields"][] = "FuelDate";
$tdatafuelmaster[".viewFields"][] = "Vehicle";
$tdatafuelmaster[".viewFields"][] = "Driver";
$tdatafuelmaster[".viewFields"][] = "CouponNo";
$tdatafuelmaster[".viewFields"][] = "FuelStation";
$tdatafuelmaster[".viewFields"][] = "MeterReading";
$tdatafuelmaster[".viewFields"][] = "LitersPumped";
$tdatafuelmaster[".viewFields"][] = "FillType";
$tdatafuelmaster[".viewFields"][] = "PricePerLiter";
$tdatafuelmaster[".viewFields"][] = "Cost";
$tdatafuelmaster[".viewFields"][] = "LastMileage";
$tdatafuelmaster[".viewFields"][] = "Economy";

$tdatafuelmaster[".addFields"] = array();
$tdatafuelmaster[".addFields"][] = "Fleet";
$tdatafuelmaster[".addFields"][] = "Vehicle";
$tdatafuelmaster[".addFields"][] = "CouponNo";
$tdatafuelmaster[".addFields"][] = "FuelDate";
$tdatafuelmaster[".addFields"][] = "FuelStation";
$tdatafuelmaster[".addFields"][] = "MeterReading";
$tdatafuelmaster[".addFields"][] = "LitersPumped";
$tdatafuelmaster[".addFields"][] = "PricePerLiter";
$tdatafuelmaster[".addFields"][] = "FillType";
$tdatafuelmaster[".addFields"][] = "LastMileage";
$tdatafuelmaster[".addFields"][] = "Driver";
$tdatafuelmaster[".addFields"][] = "SystemDate";
$tdatafuelmaster[".addFields"][] = "Economy";

$tdatafuelmaster[".masterListFields"] = array();
$tdatafuelmaster[".masterListFields"][] = "CouponNo";
$tdatafuelmaster[".masterListFields"][] = "FillType";
$tdatafuelmaster[".masterListFields"][] = "Driver";
$tdatafuelmaster[".masterListFields"][] = "Id";
$tdatafuelmaster[".masterListFields"][] = "SystemDate";
$tdatafuelmaster[".masterListFields"][] = "Fleet";
$tdatafuelmaster[".masterListFields"][] = "FuelDate";
$tdatafuelmaster[".masterListFields"][] = "Vehicle";
$tdatafuelmaster[".masterListFields"][] = "FuelStation";
$tdatafuelmaster[".masterListFields"][] = "MeterReading";
$tdatafuelmaster[".masterListFields"][] = "LitersPumped";
$tdatafuelmaster[".masterListFields"][] = "PricePerLiter";
$tdatafuelmaster[".masterListFields"][] = "Cost";
$tdatafuelmaster[".masterListFields"][] = "LastMileage";
$tdatafuelmaster[".masterListFields"][] = "Economy";

$tdatafuelmaster[".inlineAddFields"] = array();

$tdatafuelmaster[".editFields"] = array();
$tdatafuelmaster[".editFields"][] = "SystemDate";
$tdatafuelmaster[".editFields"][] = "Fleet";
$tdatafuelmaster[".editFields"][] = "FuelDate";
$tdatafuelmaster[".editFields"][] = "Vehicle";
$tdatafuelmaster[".editFields"][] = "Driver";
$tdatafuelmaster[".editFields"][] = "CouponNo";
$tdatafuelmaster[".editFields"][] = "FuelStation";
$tdatafuelmaster[".editFields"][] = "MeterReading";
$tdatafuelmaster[".editFields"][] = "LitersPumped";
$tdatafuelmaster[".editFields"][] = "FillType";
$tdatafuelmaster[".editFields"][] = "PricePerLiter";
$tdatafuelmaster[".editFields"][] = "LastMileage";
$tdatafuelmaster[".editFields"][] = "Economy";

$tdatafuelmaster[".inlineEditFields"] = array();

$tdatafuelmaster[".updateSelectedFields"] = array();
$tdatafuelmaster[".updateSelectedFields"][] = "SystemDate";
$tdatafuelmaster[".updateSelectedFields"][] = "Fleet";
$tdatafuelmaster[".updateSelectedFields"][] = "FuelDate";
$tdatafuelmaster[".updateSelectedFields"][] = "Vehicle";
$tdatafuelmaster[".updateSelectedFields"][] = "Driver";
$tdatafuelmaster[".updateSelectedFields"][] = "CouponNo";
$tdatafuelmaster[".updateSelectedFields"][] = "FuelStation";
$tdatafuelmaster[".updateSelectedFields"][] = "MeterReading";
$tdatafuelmaster[".updateSelectedFields"][] = "LitersPumped";
$tdatafuelmaster[".updateSelectedFields"][] = "FillType";
$tdatafuelmaster[".updateSelectedFields"][] = "PricePerLiter";
$tdatafuelmaster[".updateSelectedFields"][] = "LastMileage";
$tdatafuelmaster[".updateSelectedFields"][] = "Economy";


$tdatafuelmaster[".exportFields"] = array();
$tdatafuelmaster[".exportFields"][] = "Id";
$tdatafuelmaster[".exportFields"][] = "SystemDate";
$tdatafuelmaster[".exportFields"][] = "Fleet";
$tdatafuelmaster[".exportFields"][] = "FuelDate";
$tdatafuelmaster[".exportFields"][] = "Vehicle";
$tdatafuelmaster[".exportFields"][] = "Driver";
$tdatafuelmaster[".exportFields"][] = "CouponNo";
$tdatafuelmaster[".exportFields"][] = "FuelStation";
$tdatafuelmaster[".exportFields"][] = "MeterReading";
$tdatafuelmaster[".exportFields"][] = "LitersPumped";
$tdatafuelmaster[".exportFields"][] = "FillType";
$tdatafuelmaster[".exportFields"][] = "PricePerLiter";
$tdatafuelmaster[".exportFields"][] = "Cost";
$tdatafuelmaster[".exportFields"][] = "LastMileage";
$tdatafuelmaster[".exportFields"][] = "Economy";

$tdatafuelmaster[".importFields"] = array();
$tdatafuelmaster[".importFields"][] = "Id";
$tdatafuelmaster[".importFields"][] = "SystemDate";
$tdatafuelmaster[".importFields"][] = "FuelDate";
$tdatafuelmaster[".importFields"][] = "Vehicle";
$tdatafuelmaster[".importFields"][] = "MeterReading";
$tdatafuelmaster[".importFields"][] = "LitersPumped";
$tdatafuelmaster[".importFields"][] = "PricePerLiter";
$tdatafuelmaster[".importFields"][] = "FuelStation";
$tdatafuelmaster[".importFields"][] = "Fleet";
$tdatafuelmaster[".importFields"][] = "Cost";
$tdatafuelmaster[".importFields"][] = "LastMileage";
$tdatafuelmaster[".importFields"][] = "Economy";
$tdatafuelmaster[".importFields"][] = "FillType";
$tdatafuelmaster[".importFields"][] = "CouponNo";
$tdatafuelmaster[".importFields"][] = "Driver";

$tdatafuelmaster[".printFields"] = array();
$tdatafuelmaster[".printFields"][] = "Id";
$tdatafuelmaster[".printFields"][] = "SystemDate";
$tdatafuelmaster[".printFields"][] = "Fleet";
$tdatafuelmaster[".printFields"][] = "FuelDate";
$tdatafuelmaster[".printFields"][] = "Vehicle";
$tdatafuelmaster[".printFields"][] = "Driver";
$tdatafuelmaster[".printFields"][] = "CouponNo";
$tdatafuelmaster[".printFields"][] = "FuelStation";
$tdatafuelmaster[".printFields"][] = "MeterReading";
$tdatafuelmaster[".printFields"][] = "LitersPumped";
$tdatafuelmaster[".printFields"][] = "FillType";
$tdatafuelmaster[".printFields"][] = "PricePerLiter";
$tdatafuelmaster[".printFields"][] = "Cost";
$tdatafuelmaster[".printFields"][] = "LastMileage";
$tdatafuelmaster[".printFields"][] = "Economy";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","Id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["Id"] = $fdata;
//	SystemDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SystemDate";
	$fdata["GoodName"] = "SystemDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","SystemDate");
	$fdata["FieldType"] = 200;

	
	
	
										
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SystemDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SystemDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 50;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["SystemDate"] = $fdata;
//	FuelDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FuelDate";
	$fdata["GoodName"] = "FuelDate";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","FuelDate");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FuelDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FuelDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 100;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["FuelDate"] = $fdata;
//	Vehicle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Vehicle";
	$fdata["GoodName"] = "Vehicle";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","Vehicle");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Vehicle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Vehicle";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "vehiclemaster";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"LastMileage", 'lookupF'=>"Last Mileage");
	$edata["autoCompleteFields"][] = array('masterF'=>"Driver", 'lookupF'=>"DriverAsigned");
	$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "RegNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RegNo";

	
	$edata["LookupOrderBy"] = "RegNo";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Fleet", "lookup" => "Fleet" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 100;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["Vehicle"] = $fdata;
//	MeterReading
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MeterReading";
	$fdata["GoodName"] = "MeterReading";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","MeterReading");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MeterReading";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MeterReading";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 100;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["MeterReading"] = $fdata;
//	LitersPumped
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LitersPumped";
	$fdata["GoodName"] = "LitersPumped";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","LitersPumped");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LitersPumped";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LitersPumped";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 100;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["LitersPumped"] = $fdata;
//	PricePerLiter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PricePerLiter";
	$fdata["GoodName"] = "PricePerLiter";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","PricePerLiter");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PricePerLiter";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PricePerLiter";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "fuelprices";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "PricePerLiter";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "PricePerLiter";

	
	$edata["LookupOrderBy"] = "PricePerLiter";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 100;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["PricePerLiter"] = $fdata;
//	FuelStation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FuelStation";
	$fdata["GoodName"] = "FuelStation";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","FuelStation");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FuelStation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FuelStation";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "fuelstationmaster";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "FuelStation";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "FuelStation";

	
	$edata["LookupOrderBy"] = "FuelStation";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 100;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["FuelStation"] = $fdata;
//	Fleet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Fleet";
	$fdata["GoodName"] = "Fleet";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","Fleet");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Fleet";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fleet";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "fleettype";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "FleetType";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "FleetType";

	
	$edata["LookupOrderBy"] = "FleetType";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "Vehicle";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 100;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["Fleet"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("fuelmaster","Cost");
	$fdata["FieldType"] = 5;

	
	
	
										
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Cost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LitersPumped*PricePerLiter";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 50;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["Cost"] = $fdata;
//	LastMileage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LastMileage";
	$fdata["GoodName"] = "LastMileage";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","LastMileage");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LastMileage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LastMileage";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 100;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["LastMileage"] = $fdata;
//	Economy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Economy";
	$fdata["GoodName"] = "Economy";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","Economy");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Economy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Economy";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 100;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["Economy"] = $fdata;
//	FillType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "FillType";
	$fdata["GoodName"] = "FillType";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","FillType");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FillType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FillType";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Full Tank";
	$edata["LookupValues"][] = "Partial Fill";
	$edata["LookupValues"][] = "Full After Partial";
	$edata["LookupValues"][] = "Other";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 100;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["FillType"] = $fdata;
//	CouponNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "CouponNo";
	$fdata["GoodName"] = "CouponNo";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","CouponNo");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CouponNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CouponNo";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 100;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["CouponNo"] = $fdata;
//	Driver
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Driver";
	$fdata["GoodName"] = "Driver";
	$fdata["ownerTable"] = "fuelmaster";
	$fdata["Label"] = GetFieldLabel("fuelmaster","Driver");
	$fdata["FieldType"] = 200;

	
	
	
										
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Driver";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Driver";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 100;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafuelmaster["Driver"] = $fdata;


$tables_data["fuelmaster"]=&$tdatafuelmaster;
$field_labels["fuelmaster"] = &$fieldLabelsfuelmaster;
$fieldToolTips["fuelmaster"] = &$fieldToolTipsfuelmaster;
$page_titles["fuelmaster"] = &$pageTitlesfuelmaster;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["fuelmaster"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["fuelmaster"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_fuelmaster()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  SystemDate,  FuelDate,  Vehicle,  MeterReading,  LitersPumped,  PricePerLiter,  FuelStation,  Fleet,  LitersPumped*PricePerLiter AS Cost,  LastMileage,  Economy,  FillType,  CouponNo,  Driver";
$proto0["m_strFrom"] = "FROM fuelmaster";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "Id",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "fuelmaster";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SystemDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto8["m_sql"] = "SystemDate";
$proto8["m_srcTableName"] = "fuelmaster";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelDate",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto10["m_sql"] = "FuelDate";
$proto10["m_srcTableName"] = "fuelmaster";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Vehicle",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto12["m_sql"] = "Vehicle";
$proto12["m_srcTableName"] = "fuelmaster";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MeterReading",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto14["m_sql"] = "MeterReading";
$proto14["m_srcTableName"] = "fuelmaster";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LitersPumped",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto16["m_sql"] = "LitersPumped";
$proto16["m_srcTableName"] = "fuelmaster";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PricePerLiter",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto18["m_sql"] = "PricePerLiter";
$proto18["m_srcTableName"] = "fuelmaster";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "FuelStation",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto20["m_sql"] = "FuelStation";
$proto20["m_srcTableName"] = "fuelmaster";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Fleet",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto22["m_sql"] = "Fleet";
$proto22["m_srcTableName"] = "fuelmaster";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "LitersPumped*PricePerLiter"
));

$proto24["m_sql"] = "LitersPumped*PricePerLiter";
$proto24["m_srcTableName"] = "fuelmaster";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "Cost";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "LastMileage",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto26["m_sql"] = "LastMileage";
$proto26["m_srcTableName"] = "fuelmaster";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Economy",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto28["m_sql"] = "Economy";
$proto28["m_srcTableName"] = "fuelmaster";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "FillType",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto30["m_sql"] = "FillType";
$proto30["m_srcTableName"] = "fuelmaster";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "CouponNo",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto32["m_sql"] = "CouponNo";
$proto32["m_srcTableName"] = "fuelmaster";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Driver",
	"m_strTable" => "fuelmaster",
	"m_srcTableName" => "fuelmaster"
));

$proto34["m_sql"] = "Driver";
$proto34["m_srcTableName"] = "fuelmaster";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "fuelmaster";
$proto37["m_srcTableName"] = "fuelmaster";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "Id";
$proto37["m_columns"][] = "SystemDate";
$proto37["m_columns"][] = "FuelDate";
$proto37["m_columns"][] = "Vehicle";
$proto37["m_columns"][] = "MeterReading";
$proto37["m_columns"][] = "LitersPumped";
$proto37["m_columns"][] = "PricePerLiter";
$proto37["m_columns"][] = "FuelStation";
$proto37["m_columns"][] = "Fleet";
$proto37["m_columns"][] = "LastMileage";
$proto37["m_columns"][] = "Economy";
$proto37["m_columns"][] = "FillType";
$proto37["m_columns"][] = "CouponNo";
$proto37["m_columns"][] = "Driver";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "fuelmaster";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "fuelmaster";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="fuelmaster";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fuelmaster = createSqlQuery_fuelmaster();


	
					
;

															

$tdatafuelmaster[".sqlquery"] = $queryData_fuelmaster;

include_once(getabspath("include/fuelmaster_events.php"));
$tableEvents["fuelmaster"] = new eventclass_fuelmaster;
$tdatafuelmaster[".hasEvents"] = true;

?>