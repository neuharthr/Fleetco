<?php
$dDebug = false;
$dSQL = "";

$tables_data = array();
$page_layouts = array();
$field_labels = array();
$fieldToolTips = array();
$page_titles = array();
$lookupTableLinks = array();

$_gmdays = array(0=>31,1=>31,2=>28,3=>31,4=>30,5=>31,6=>30,7=>31,8=>31,9=>30,10=>31,11=>30,12=>31);

include(getabspath('classes/layout.php'));


//	custom labels
$custom_labels = array();
$custom_labels["Afrikaans"] = array();
	$custom_labels["Afrikaans"]['M___INSURANCE'] = "M - Versekering Maatskappye";
									$custom_labels["Afrikaans"]['FLEET'] = "Vloot";
									$custom_labels["Afrikaans"]['SUPPLIERS'] = "M - Verskaffers";
									$custom_labels["Afrikaans"]['STOCK_CODES'] = "M - Stock kodes";
									$custom_labels["Afrikaans"]['FLEET_TYPES'] = "M - Vloot Tipes";
									$custom_labels["Afrikaans"]['VEHICLE_TYPES'] = "Voertuig tipes - M";
									$custom_labels["Afrikaans"]['SERVICE_TYPES'] = "M - Service Tipes";
									$custom_labels["Afrikaans"]['FUEL_STATIONS'] = "M - vulstasies";
									$custom_labels["Afrikaans"]['FUEL_PRICES'] = "M - Brandstof pryse";
									$custom_labels["Afrikaans"]['RENEWALS'] = "M - Hernuwings";
								$custom_labels["Arabic"] = array();
		$custom_labels["Arabic"]['M___INSURANCE'] = "????? ??????? - M";
									$custom_labels["Arabic"]['FLEET'] = "???????";
									$custom_labels["Arabic"]['SUPPLIERS'] = "M - ????????";
									$custom_labels["Arabic"]['STOCK_CODES'] = "???? ???????";
									$custom_labels["Arabic"]['FLEET_TYPES'] = "????? ???????";
									$custom_labels["Arabic"]['VEHICLE_TYPES'] = "????? ???????? - M";
									$custom_labels["Arabic"]['SERVICE_TYPES'] = "????? ??????";
									$custom_labels["Arabic"]['FUEL_STATIONS'] = "M - ????? ??????";
									$custom_labels["Arabic"]['FUEL_PRICES'] = "????? ?????? - M";
									$custom_labels["Arabic"]['RENEWALS'] = "M - ???????";
							$custom_labels["Chinese"] = array();
			$custom_labels["Chinese"]['M___INSURANCE'] = "????";
									$custom_labels["Chinese"]['FLEET'] = "??";
									$custom_labels["Chinese"]['SUPPLIERS'] = "???";
									$custom_labels["Chinese"]['STOCK_CODES'] = "????";
									$custom_labels["Chinese"]['FLEET_TYPES'] = "????";
									$custom_labels["Chinese"]['VEHICLE_TYPES'] = "????";
									$custom_labels["Chinese"]['SERVICE_TYPES'] = "????";
									$custom_labels["Chinese"]['FUEL_STATIONS'] = "???";
									$custom_labels["Chinese"]['FUEL_PRICES'] = "????";
									$custom_labels["Chinese"]['RENEWALS'] = "??";
						$custom_labels["English"] = array();
				$custom_labels["English"]['M___INSURANCE'] = "Insurance";
									$custom_labels["English"]['FLEET'] = "Fleet";
									$custom_labels["English"]['SUPPLIERS'] = "Suppliers";
									$custom_labels["English"]['STOCK_CODES'] = "Stock Codes";
									$custom_labels["English"]['FLEET_TYPES'] = "Fleet Types";
									$custom_labels["English"]['VEHICLE_TYPES'] = "Vehicle Types";
									$custom_labels["English"]['SERVICE_TYPES'] = "Service Types";
									$custom_labels["English"]['FUEL_STATIONS'] = "Fuel Stations";
									$custom_labels["English"]['FUEL_PRICES'] = "Fuel Prices";
									$custom_labels["English"]['RENEWALS'] = "Renewals";
					$custom_labels["French"] = array();
					$custom_labels["French"]['M___INSURANCE'] = "Sociétés d'assurances";
									$custom_labels["French"]['FLEET'] = "Flotte";
									$custom_labels["French"]['SUPPLIERS'] = "Fournisseurs";
									$custom_labels["French"]['STOCK_CODES'] = "Codes d'actions";
									$custom_labels["French"]['FLEET_TYPES'] = "Types de flotte";
									$custom_labels["French"]['VEHICLE_TYPES'] = "Types de véhicules";
									$custom_labels["French"]['SERVICE_TYPES'] = "Types de service";
									$custom_labels["French"]['FUEL_STATIONS'] = "Stations d'essence";
									$custom_labels["French"]['FUEL_PRICES'] = "Prix du carburant";
									$custom_labels["French"]['RENEWALS'] = "Renouvellements";
				$custom_labels["German"] = array();
						$custom_labels["German"]['M___INSURANCE'] = "Versicherungsgesellschaften";
									$custom_labels["German"]['FLEET'] = "Flotte";
									$custom_labels["German"]['SUPPLIERS'] = "Lieferanten";
									$custom_labels["German"]['STOCK_CODES'] = "Lagerbestände";
									$custom_labels["German"]['FLEET_TYPES'] = "Flottenarten";
									$custom_labels["German"]['VEHICLE_TYPES'] = "Fahrzeugtypen";
									$custom_labels["German"]['SERVICE_TYPES'] = "Dienstleistungsarten";
									$custom_labels["German"]['FUEL_STATIONS'] = "Tankstelle";
									$custom_labels["German"]['FUEL_PRICES'] = "Treibstoffpreise";
									$custom_labels["German"]['RENEWALS'] = "Erneuerungen";
			$custom_labels["Italian"] = array();
							$custom_labels["Italian"]['M___INSURANCE'] = "Assicurazioni";
									$custom_labels["Italian"]['FLEET'] = "Fleet";
									$custom_labels["Italian"]['SUPPLIERS'] = "Fornitori";
									$custom_labels["Italian"]['STOCK_CODES'] = "Codici degli stock";
									$custom_labels["Italian"]['FLEET_TYPES'] = "Tipi Fleet";
									$custom_labels["Italian"]['VEHICLE_TYPES'] = "Tipi di veicoli";
									$custom_labels["Italian"]['SERVICE_TYPES'] = "Tipi di servizio";
									$custom_labels["Italian"]['FUEL_STATIONS'] = "Stazioni di carburante";
									$custom_labels["Italian"]['FUEL_PRICES'] = "I prezzi del carburante";
									$custom_labels["Italian"]['RENEWALS'] = "Rinnovi";
		$custom_labels["Russian"] = array();
								$custom_labels["Russian"]['M___INSURANCE'] = "????????? ????????";
									$custom_labels["Russian"]['FLEET'] = "Fleet";
									$custom_labels["Russian"]['SUPPLIERS'] = "??????????";
									$custom_labels["Russian"]['STOCK_CODES'] = "????-????";
									$custom_labels["Russian"]['FLEET_TYPES'] = "???? ?????";
									$custom_labels["Russian"]['VEHICLE_TYPES'] = "???? ???????????? ???????";
									$custom_labels["Russian"]['SERVICE_TYPES'] = "???? Service";
									$custom_labels["Russian"]['FUEL_STATIONS'] = "??????????? ???????";
									$custom_labels["Russian"]['FUEL_PRICES'] = "???? ?? ???????";
									$custom_labels["Russian"]['RENEWALS'] = "?????????";
	$custom_labels["Spanish"] = array();
									$custom_labels["Spanish"]['M___INSURANCE'] = "Compañías de Seguros";
									$custom_labels["Spanish"]['FLEET'] = "Flota";
									$custom_labels["Spanish"]['SUPPLIERS'] = "Proveedores";
									$custom_labels["Spanish"]['STOCK_CODES'] = "Códigos de Acciones";
									$custom_labels["Spanish"]['FLEET_TYPES'] = "Tipos de Flota";
									$custom_labels["Spanish"]['VEHICLE_TYPES'] = "Tipos de vehículos";
									$custom_labels["Spanish"]['SERVICE_TYPES'] = "Tipos de Servicio";
									$custom_labels["Spanish"]['FUEL_STATIONS'] = "Estaciones de Combustible";
									$custom_labels["Spanish"]['FUEL_PRICES'] = "M - Precios de los combustibles";
									$custom_labels["Spanish"]['RENEWALS'] = "Renovaciones";

define('NOT_TABLE_BASED_TNAME', ".global");

/**
 *  Define constants of page name
 */
define('PAGE_LIST',"list");
define('PAGE_MASTER_INFO_LIST',"masterlist");
define('PAGE_ADD',"add");
define('PAGE_EDIT',"edit");
define('PAGE_VIEW',"view");
define('PAGE_MENU',"menu");
define('PAGE_LOGIN',"login");
define('PAGE_REGISTER',"register");
define('PAGE_REMIND',"remind");
define('PAGE_CHANGEPASS',"changepwd");
define('PAGE_SEARCH',"search");
define('PAGE_REPORT',"report");
define('PAGE_MASTER_INFO_REPORT',"masterreport");
define('PAGE_CHART',"chart");
define('PAGE_PRINT',"print");
define('PAGE_MASTER_INFO_PRINT',"masterprint");
define('PAGE_RPRINT',"rprint");
define('PAGE_MASTER_INFO_RPRINT',"masterrprint");
define('PAGE_EXPORT',"export");
define('PAGE_IMPORT',"import");
define('PAGE_ADMIN_MEMBERS',"admin_members");
define('PAGE_ADMIN_RIGHTS',"admin_rights");
define('PAGE_INLINEADD',"inlineadd");
define('PAGE_INLINEEDIT',"inlineedit");
define('PAGE_DASHBOARD',"dashboard");
define('PAGE_DASHMAP', "map");

define('ADMIN_USERS',"admin_users");


define('FORMAT_VIEW',"ViewFormats");
define('FORMAT_EDIT',"EditFormats");
/**
 *  Define constants of view format
 */
define("FORMAT_NONE","");
define("FORMAT_DATE_SHORT","Short Date");
define("FORMAT_DATE_LONG","Long Date");
define("FORMAT_DATE_TIME","Datetime");
define("FORMAT_TIME","Time");
define("FORMAT_CURRENCY","Currency");
define("FORMAT_PERCENT","Percent");
define("FORMAT_HYPERLINK","Hyperlink");
define("FORMAT_EMAILHYPERLINK","Email Hyperlink");
define("FORMAT_FILE_IMAGE","File-based Image");
define("FORMAT_FILE_IMAGE_OLD","Old file-based Image");
define("FORMAT_DATABASE_IMAGE","Database Image");
define("FORMAT_DATABASE_FILE","Database File");
define("FORMAT_FILE","Document Download");
define("FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("FORMAT_PHONE_NUMBER","Phone Number");
define("FORMAT_NUMBER","Number");
define("FORMAT_HTML","HTML");
define("FORMAT_CHECKBOX","Checkbox");
define("FORMAT_MAP","Map");
define("FORMAT_CUSTOM","Custom");
define("FORMAT_AUDIO", "Audio file");
define("FORMAT_DATABASE_AUDIO", "Database audio");
define("FORMAT_VIDEO", "Video file");
define("FORMAT_VIDEO_HTML5", "Video file HTML5");
define("FORMAT_DATABASE_VIDEO", "Database video");
/**
 *  Define constants of edit format
 */
define("EDIT_FORMAT_NONE","");
define("EDIT_FORMAT_TEXT_FIELD","Text field");
define("EDIT_FORMAT_TEXT_AREA","Text area");
define("EDIT_FORMAT_PASSWORD","Password");
define("EDIT_FORMAT_DATE","Date");
define("EDIT_FORMAT_TIME","Time");
define("EDIT_FORMAT_RADIO","Radio button");
define("EDIT_FORMAT_CHECKBOX","Checkbox");
define("EDIT_FORMAT_DATABASE_IMAGE","Database image");
define("EDIT_FORMAT_DATABASE_FILE","Database file");
define("EDIT_FORMAT_FILE","Document upload");
define("EDIT_FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("EDIT_FORMAT_HIDDEN","Hidden field");
define("EDIT_FORMAT_READONLY","Readonly");

define("EDIT_DATE_SIMPLE",0);
define("EDIT_DATE_SIMPLE_INLINE",2);
define("EDIT_DATE_SIMPLE_DP",11);
define("EDIT_DATE_DD",12);
define("EDIT_DATE_DD_INLINE",5);
define("EDIT_DATE_DD_DP",13);

define("MODE_ADD",0);
define("MODE_EDIT",1);
define("MODE_SEARCH",2);
define("MODE_LIST",3);
define("MODE_PRINT",4);
define("MODE_VIEW",5);
define("MODE_INLINE_ADD",6);
define("MODE_INLINE_EDIT",7);
define("MODE_EXPORT",8);

define("LOGIN_HARDCODED",0);
define("LOGIN_TABLE",1);

define("SECURITY_NONE",-1);
define("SECURITY_HARDCODED", 0);
define("SECURITY_TABLE", 1);
define("SECURITY_AD", 2);

define("ADVSECURITY_ALL",0);
define("ADVSECURITY_VIEW_OWN",1);
define("ADVSECURITY_EDIT_OWN",2);
define("ADVSECURITY_NONE",3);

define("ACCESS_LEVEL_ADMIN","Admin");
define("ACCESS_LEVEL_ADMINGROUP","AdminGroup");
define("ACCESS_LEVEL_USER","User");
define("ACCESS_LEVEL_GUEST","Guest");

define("nDATABASE_MySQL",0);
define("nDATABASE_Oracle",1);
define("nDATABASE_MSSQLServer",2);
define("nDATABASE_Access",3);
define("nDATABASE_PostgreSQL",4);
define("nDATABASE_Informix",5);
define("nDATABASE_SQLite3",6);
define("nDATABASE_DB2",7);
define("nDATABASE_Interbase", 16);

define("ADD_SIMPLE",0);
define("ADD_INLINE",1);
define("ADD_ONTHEFLY",2);
define("ADD_MASTER",3);
define("ADD_POPUP",4);
define("ADD_DASHBOARD",5);
define("ADD_MASTER_POPUP",6);

//	Edit page modes
define("EDIT_SIMPLE",0); 	//	standalone Edit page
define("EDIT_INLINE",1);	//	inlineEdit
define("EDIT_POPUP",3);		//	edit page in popup
define("EDIT_DASHBOARD",4);	//	edit page in dashboard
define("EDIT_SELECTED_SIMPLE",5);
define("EDIT_SELECTED_POPUP",6);


//	View page modes
define("VIEW_SIMPLE",0); 	//	standalone View page
define("VIEW_POPUP",1); 	//	View page in popup
define("VIEW_DASHBOARD",2); 	//	View page in dashboard

define("LOGIN_SIMPLE", 0);
define("LOGIN_POPUP", 1);
define("LOGIN_EMBEDED", 2);

define("REGISTER_SIMPLE", 0);
define("REGISTER_POPUP", 1);

define("REMIND_SIMPLE", 0);
define("REMIND_POPUP", 1);

define("titTABLE",0);
define("titVIEW",1);
define("titREPORT",2);
define("titCHART",3);
define("titDASHBOARD",4);

define("TAB_TYPE_TAB", 0);
define("TAB_TYPE_SECTION", 1);
define("TAB_TYPE_STEP", 2);

// for report lib
define("REPORT_STEPPED", 0);
define("REPORT_BLOCK", 1);
define("REPORT_OUTLINE", 2);
define("REPORT_ALIGN", 3);
define("REPORT_TABULAR", 6);

define("TOTAL_NONE", -1);
define("TOTAL_MAX", 0);
define("TOTAL_AVG", 1);
define("TOTAL_SUM", 3);
define("TOTAL_MIN", 4);

define("LIST_SIMPLE",0);
define("LIST_LOOKUP",1);
define("LIST_DETAILS",3);
define("LIST_AJAX",4);
define("RIGHTS_PAGE", 5);
define("MEMBERS_PAGE", 6);
define("LIST_DASHBOARD", 7);
define("LIST_DASHDETAILS", 8);
define("MAP_DASHBOARD", 9);
define("LIST_MASTER",10);
define("PRINT_MASTER",11);

define("REPORT_SIMPLE", 0);
define("REPORT_POPUPDETAILS", 1);
define("REPORT_DASHBOARD", 2);
define("REPORT_DETAILS", 3);
define("REPORT_DASHDETAILS", 4);

define("CHART_SIMPLE", 0);
define("CHART_POPUPDETAILS", 1);
define("CHART_DASHBOARD", 2);
define("CHART_DETAILS", 3);
define("CHART_DASHDETAILS", 4);

define("DP_POPUP",0);
define("DP_INLINE",1);
define("DP_NONE",2);

define("DL_SINGLE",0);
define("DL_INDIVIDUAL",1);
define("DL_NONE",2);

define("SEARCH_SIMPLE", 0);
define("SEARCH_LOAD_CONTROL", 1);
define("SEARCH_DASHBOARD", 2);

define("LCT_DROPDOWN",0);
define("LCT_AJAX",1);
define("LCT_LIST",2);
define("LCT_CBLIST",3);
define("LCT_RADIO",4);

define("LT_LISTOFVALUES",0);
// lookup table is not added to the project
define("LT_LOOKUPTABLE",1);
define("LT_QUERY", 2);

define("ENCRYPTION_NONE", 0);
define("ENCRYPTION_DB", 1);
define("ENCRYPTION_PHP", 2);
define("ENCRYPTION_ALG_DES", 1);
define("ENCRYPTION_ALG_AES", 128);

define("SETTING_TYPE_GLOBAL", "global");
define("SETTING_TYPE_VIEW", "view");
define("SETTING_TYPE_EDIT", "edit");

define('otNone',0);
define('otUseMobile',1);
define('otUseDesktop',2);


define("CONTAINS", "Contains");
define("EQUALS", "Equals");
define("STARTS_WITH", "Starts with");
define("MORE_THAN", "More than");
define("LESS_THAN", "Less than");
define("BETWEEN", "Between");
define("EMPTY_SEARCH", "Empty");
define("NOT_CONTAINS", "NOT Contains");
define("NOT_EQUALS", "NOT Equals");
define("NOT_STARTS_WITH", "NOT Starts with");
define("NOT_MORE_THAN", "NOT More than");
define("NOT_LESS_THAN", "NOT Less than");
define("NOT_BETWEEN", "NOT Between");
define("NOT_EMPTY", "NOT Empty");

define("SEARCHID_SIMPLE", 1);
define("SEARCHID_PANEL", 10);
define("SEARCHID_ALL", 10000);


/* Define constants for the filters settings */
//fiter totals
define("FT_NONE", 0);
define("FT_COUNT", 1);
define("FT_MIN", 2);
define("FT_MAX", 3);
//filter multiselect
define("FM_NONE", 0);
define("FM_ON_DEMAND", 1);
define("FM_ALWAYS", 2);
//filter format
define("FF_VALUE_LIST", "Values list");
define("FF_BOOLEAN", "Options list");
define("FF_INTERVAL_LIST", "Interval list");
define("FF_INTERVAL_SLIDER", "Interval slider");
//define filter interval limits' constants
define("FIL_NONE", 0);
define("FIL_MORE_THAN", 1);
define("FIL_LESS_THAN", 1);
define("FIL_LESS_THAN_OR_EQUAL", 2);
define("FIL_MORE_THAN_OR_EQUAL", 2);
define("FIL_REMAINDER", 3);
//define slider filter constants
define("FS_BOTH", 0);
define("FS_MIN_ONLY", 1);
define("FS_MAX_ONLY", 2);
//define slider step types
define("FSST_SECONDS", 0);
define("FSST_MINUTES", 1);
define("FSST_HOURS", 2);
define("FSST_DAYS", 3);
define("FSST_MONTHS", 4);
define("FSST_YEARS", 5);
//sorting constants
define('SORT_BY_DISP_VALUE', 0);
define('SORT_BY_DB_VALUE', 1);
define('SORT_BY_GR_VALUE', 2);
/**/


define("gltHORIZONTAL", 0);
define("gltVERTICAL", 1);
define("gltCOLUMNS", 2);
define("gltFLEXIBLE", 3);

/* Define comstamts for hidden columns devices*/
define("DESKTOP", 1);
define("TABLET_10_IN", 2);
define("TABLET_7_IN", 3);
define("SMARTPHONE_LANDSCAPE", 4);
define("SMARTPHONE_PORTRAIT", 5);
/**/

/* Dashboard types */
define("DASHBOARD_LIST", 0);
define("DASHBOARD_CHART", 1);
define("DASHBOARD_REPORT", 2);
define("DASHBOARD_RECORD", 3);
define("DASHBOARD_SEARCH", 4);
define("DASHBOARD_DETAILS", 5);
define("DASHBOARD_MAP", 6);
/**/

/* Define message type constants */
define("MESSAGE_INFO", 1);
define("MESSAGE_ERROR", 2);

/* Define print page and pdf page constants */
define("PRINT_PAGE_WIDTH", 700);
define("PRINT_PAGE_HEIGHT", 900);
define("PDF_PAGE_WIDTH", 750);
define("PDF_PAGE_HEIGHT", 1060);

/* Defined maps type */
define("GOOGLE_MAPS", 0);
define("OPEN_STREET_MAPS", 1);
define("BING_MAPS", 2);

/* Defined captcha type */
define("FLASH_CAPTCHA", 0);
define("RE_CAPTCHA", 1);

/* Define 'after record added/edited actions' constants*/
define("AA_TO_LIST", 0);
define("AA_TO_ADD", 1);
define("AA_TO_VIEW", 2);
define("AA_TO_EDIT", 3);
define("AA_TO_DETAIL_ADD", 4);
define("AA_TO_DETAIL_LIST", 5);

define("AE_TO_LIST", 0);
define("AE_TO_EDIT", 1);
define("AE_TO_VIEW", 2);
define("AE_TO_NEXT_EDIT", 3);
define("AE_TO_PREV_EDIT", 4);
define("AE_TO_DETAIL_LIST", 5);
/**/

define('BOOTSTRAP_LAYOUT', 3);

define('ICON_NONE', 0);
define('ICON_FILE', 1);
define('ICON_BOOTSTRAP_GLYPH', 2);



define('WELCOME_MENU', "welcome_page");

define('MENU_VERTICAL', "v");
define('MENU_HORIZONTAL', "h");
define('MENU_QUICKJUMP', "q");

// paramsLogger types
define('SSEARCH_PARAMS_TYPE', 1);
define('CRESIZE_PARAMS_TYPE', 2);
define('SHFIELDS_PARAMS_TYPE', 3);
define('FORDER_PARAMS_TYPE', 4);

$globalSettings = array();
$globalSettings["nLoginForm"] = 2;

$globalSettings["nLoginMethod"] = 1;

$globalSettings["popupPagesLayoutNames"] = array();
						
	;
$globalSettings["popupPagesLayoutNames"]["login"] = "login_bootstrap";
						
	;
$globalSettings["popupPagesLayoutNames"]["remind"] = "remind_bootstrap";

//mail settings
$globalSettings["useBuiltInMailer"] = true;

$globalSettings["useCustomSMTPSettings"] = false;

$globalSettings["strSMTPUser"] = "";
$globalSettings["strSMTPServer"] = "localhost";
$globalSettings["strSMTPPort"] = "25";
$globalSettings["strSMTPPassword"] = "";
$globalSettings["strFromEmail"] = "info@dplcom.com";

$globalSettings["useSSL"] = false;
//


$ajaxSearchStartsWith = true;

$globalSettings["isDynamicPerm"] = true;




$globalSettings["LandingPageType"] = 1;
$globalSettings["LandingTable"] = "";
$globalSettings["LandingPage"] = "login";
$globalSettings["LandingURL"] = "login.php";

$globalSettings["ProjectLogo"] = array();
$globalSettings["ProjectLogo"]["Afrikaans"] = "FLEETCO";
$globalSettings["ProjectLogo"]["Arabic"] = "FLEETCO";
$globalSettings["ProjectLogo"]["Chinese"] = "FLEETCO";
$globalSettings["ProjectLogo"]["English"] = "FLEETCO";
$globalSettings["ProjectLogo"]["French"] = "FLEETCO";
$globalSettings["ProjectLogo"]["German"] = "FLEETCO";
$globalSettings["ProjectLogo"]["Italian"] = "FLEETCO";
$globalSettings["ProjectLogo"]["Russian"] = "FLEETCO";
$globalSettings["ProjectLogo"]["Spanish"] = "FLEETCO";

$globalSettings["createLoginPage"] = true;

$globalSettings["apiGoogleMapsCode"] = "";



//password global settings for register page
$globalSettings["pwdStrong"] = true;
$globalSettings["pwdLen"] = 8;

/**
 * If true then detail table name will be printed before detail table on the view page
 * @var {bool}
 */
$globalSettings["printDetailTableName"] = true;

/**
 * Alias for custom expression in display field in ListPage_Lookup
 * @var {string}
 */
$globalSettings["dispFieldAlias"] = "rrdf1";

/**
 * If true then search suggest result will be handled in Lookup control
 * @var {bool}
 */
$globalSettings["handleSearchSuggestInLookup"] = true;

/**
 * Maximum size of search suggest result string
 * @var {int}
 */
$globalSettings["suggestStringSize"] = 40;

/**
 * The number of seach suggests displayed
 */
$globalSettings["searchSuggestsNumber"] = 10;

$globalSettings["override"] = array();


$globalSettings["mapProvider"]=0;

$globalSettings["CaptchaSettings"] = array();
$globalSettings["CaptchaSettings"]["type"] = 0;
$globalSettings["CaptchaSettings"]["siteKey"] = "";
$globalSettings["CaptchaSettings"]["secretKey"] = "";
$globalSettings["CaptchaSettings"]["captchaPassesCount"] = "5";

$globalSettings["CaptchaSettings"]["isEnabledOnLogin"] = false;
$globalSettings["CaptchaSettings"]["isEnabledOnRegister"] = false;
$globalSettings["CaptchaSettings"]["isEnabledOnRemind"] = true;

$wr_pagestylepath = "AvenueAvenue";
$wr_is_standalone = false;
$WRAdminPagePassword = "";

$cLoginTable = "carrierusers";
$cDisplayNameField = "fullname";
$cUserNameField	= "username";
$cPasswordField	= "password";
$cUserGroupField = "groupid";
$cEmailField = "email";

if ($cDisplayNameField == ''){
	$cDisplayNameField = $cUserNameField;
}

$cDisplayNameFieldType	= 200;
$cUserNameFieldType	= 200;
$cPasswordFieldType	= 200;
$cEmailFieldType = 200;

												$cUserNameFieldType	= 200;
												$cPasswordFieldType	= 200;
												$cEmailFieldType = 200;
																											
$gPermissionsRefreshTime = 0;
$gPermissionsRead = false;

$useAJAX = true;
$suggestAllContent = true;

$strLastSQL = "";
$showCustomMarkerOnPrint = false;

$mlang_messages = array();
$mlang_charsets = array();




$menuAssignments = array();
$menuSelector = array();
$menuSelector["page"] = "welcome_page";
$menuSelector["id"] = "mainmenu";
$menuSelector["name"] = "welcome_page";
$menuSelector["horizontal"] = "0";
$menuAssignments[] = $menuSelector;
$menuSelector = array();
$menuSelector["page"] = "welcome_page";
$menuSelector["id"] = "welcome_page";
$menuSelector["name"] = "welcome_page";
$menuSelector["horizontal"] = "0";
$menuAssignments[] = $menuSelector;
$menuSelector = array();
$menuSelector["page"] = "welcome_page";
$menuSelector["id"] = "welcome_page";
$menuSelector["name"] = "welcome_page";
$menuSelector["horizontal"] = "0";
$menuAssignments[] = $menuSelector;

$menuStyles = array();

$menuTreelikeFlags = array();
$menuTreelikeFlags["main"] = 0;

$menuDrillDownFlags = array();
$menuDrillDownFlags["main"] = 1;

$menuTreelikeFlags["welcome_page"] = 0;
$menuDrillDownFlags["welcome_page"] = 1;



// table captions
$tableCaptions = array();
$tableCaptions["English"] = array();
$tableCaptions["English"][""] = "";
$tableCaptions["English"]["inventorymaster"] = "M - Stock Codes";
$tableCaptions["English"]["creategrn"] = "Stock Movement";
$tableCaptions["English"][""] = "";
$tableCaptions["English"]["vehiclemaster"] = "M - Fleet";
$tableCaptions["English"]["creategrn_issue"] = "Stock Issues";
$tableCaptions["English"]["inventorymaster_qty"] = "M - Inventory Master Sub";
$tableCaptions["English"]["creategrn_receive"] = "Stock Purchases";
$tableCaptions["English"]["fuelmaster"] = "Fuel Records";
$tableCaptions["English"]["suppliermaster"] = "M - Suppliers";
$tableCaptions["English"]["accidents"] = "Accident Records";
$tableCaptions["English"]["maintenenace"] = "Maintenance Records";
$tableCaptions["English"]["fleettype"] = "M - Fleet Types";
$tableCaptions["English"]["fuelprices"] = "M - Fuel Prices";
$tableCaptions["English"]["fuelstationmaster"] = "M - Fuel Stations";
$tableCaptions["English"]["vehicletype"] = "M - Vehicle Types";
$tableCaptions["English"]["servicetypemaster"] = "M - Service Types";
$tableCaptions["English"]["insurance_payments"] = "Insurance Payments";
$tableCaptions["English"]["insuranceclaims"] = "Insurance Claims";
$tableCaptions["English"]["insurancecompany"] = "M - Insurance Companies";
$tableCaptions["English"]["maintenenace_regularservice"] = "Regular Maint.";
$tableCaptions["English"]["maintenenace_general_repair"] = "General Repair";
$tableCaptions["English"]["maintenenace_accident_repair"] = "Accident Repair";
$tableCaptions["English"]["vehiclemaster_report"] = "Fleet Report";
$tableCaptions["English"]["accidents_report"] = "Accident Report";
$tableCaptions["English"]["admin_rights"] = "Admin Rights";
$tableCaptions["English"]["carrierusers"] = "User Management";
$tableCaptions["English"]["admin_members"] = "Admin Members";
$tableCaptions["English"]["admin_users"] = "Add/Edit users";
$tableCaptions["English"]["inventorymaster_pricing"] = "Inventorymaster-pricing";
$tableCaptions["English"]["creategrn_remove"] = "Tyre Removals";
$tableCaptions["English"]["creategrn_issuetorebuild"] = "Send to Rebuild";
$tableCaptions["English"]["creategrn_receiveafterrebuild"] = "Rebuilt Receipts";
$tableCaptions["English"]["creategrn_issue_rebuilt"] = "Rebuilt Issues";
$tableCaptions["English"]["fuelmaster_reports"] = "Fuel Report";
$tableCaptions["English"]["creategrn_stock_balance"] = "Stock Balance";
$tableCaptions["English"]["rnewalmastertable"] = "M - Renewals";
$tableCaptions["English"]["otherrenewal"] = "Other Renewals";
$tableCaptions["English"]["creategrn_disposal"] = "Disposals";
$tableCaptions["English"]["creategrn_remove_other"] = "Removals";
$tableCaptions["English"]["creategrn_disposal_rebuild"] = "Rebuild Tyre Disposals";
$tableCaptions["English"]["inventorymaster_pricing1"] = "Inventorymaster-pricing1";
$tableCaptions["English"]["inventorymaster_pricing5"] = "Inventorymaster-pricing5";
$tableCaptions["English"]["fuelmaster_Chart"] = "Fuelmaster Chart";
$tableCaptions["English"]["maintenenace_Chart"] = "Maintenance Chart";
$tableCaptions["Afrikaans"] = array();
$tableCaptions["Afrikaans"][""] = "";
$tableCaptions["Afrikaans"]["inventorymaster"] = "M - Stock kodes";
$tableCaptions["Afrikaans"]["creategrn"] = "Stock Movement";
$tableCaptions["Afrikaans"]["vehiclemaster"] = "M - Vloot";
$tableCaptions["Afrikaans"]["creategrn_issue"] = "Stock Kwessies";
$tableCaptions["Afrikaans"]["inventorymaster_qty"] = "M - Inventaris Meester Sub";
$tableCaptions["Afrikaans"]["creategrn_receive"] = "voorraadaankope";
$tableCaptions["Afrikaans"]["fuelmaster"] = "brandstof Records";
$tableCaptions["Afrikaans"]["suppliermaster"] = "M - Verskaffers";
$tableCaptions["Afrikaans"]["accidents"] = "ongeluk Records";
$tableCaptions["Afrikaans"]["maintenenace"] = "Onderhoud Records";
$tableCaptions["Afrikaans"]["fleettype"] = "M - Vloot Tipes";
$tableCaptions["Afrikaans"]["fuelprices"] = "M - Brandstof pryse";
$tableCaptions["Afrikaans"]["fuelstationmaster"] = "M - vulstasies";
$tableCaptions["Afrikaans"]["vehicletype"] = "Voertuig tipes - M";
$tableCaptions["Afrikaans"]["servicetypemaster"] = "M - Service Tipes";
$tableCaptions["Afrikaans"]["insurance_payments"] = "versekering betalings";
$tableCaptions["Afrikaans"]["insuranceclaims"] = "versekeringseise";
$tableCaptions["Afrikaans"]["insurancecompany"] = "M - Versekering Maatskappye";
$tableCaptions["Afrikaans"]["maintenenace_regularservice"] = "Gereelde instandhouding";
$tableCaptions["Afrikaans"]["maintenenace_general_repair"] = "algemene Repair";
$tableCaptions["Afrikaans"]["maintenenace_accident_repair"] = "ongeluk Repair";
$tableCaptions["Afrikaans"]["vehiclemaster_report"] = "vloot Verslag";
$tableCaptions["Afrikaans"]["accidents_report"] = "ongeluk Verslag";
$tableCaptions["Afrikaans"]["admin_rights"] = "Admin Rights";
$tableCaptions["Afrikaans"]["carrierusers"] = "gebruikers Bestuur";
$tableCaptions["Afrikaans"]["admin_members"] = "Admin Lede";
$tableCaptions["Afrikaans"]["admin_users"] = "Voeg gebruikers / Redigeer";
$tableCaptions["Afrikaans"]["inventorymaster_pricing"] = "Inventorymaster-pryse";
$tableCaptions["Afrikaans"]["creategrn_remove"] = "Tirus Removals";
$tableCaptions["Afrikaans"]["creategrn_issuetorebuild"] = "Stuur op te bou";
$tableCaptions["Afrikaans"]["creategrn_receiveafterrebuild"] = "herbou Ontvangste";
$tableCaptions["Afrikaans"]["creategrn_issue_rebuilt"] = "herbou Kwessies";
$tableCaptions["Afrikaans"]["fuelmaster_reports"] = "brandstof Verslag";
$tableCaptions["Afrikaans"]["creategrn_stock_balance"] = "Stock Balans";
$tableCaptions["Afrikaans"]["rnewalmastertable"] = "M - Hernuwings";
$tableCaptions["Afrikaans"]["otherrenewal"] = "ander Hernuwings";
$tableCaptions["Afrikaans"]["creategrn_disposal"] = "Verkope";
$tableCaptions["Afrikaans"]["creategrn_remove_other"] = "verskuiwings";
$tableCaptions["Afrikaans"]["creategrn_disposal_rebuild"] = "Herbou Tirus Verkope";
$tableCaptions["Afrikaans"]["inventorymaster_pricing1"] = "Inventorymaster-pricing1";
$tableCaptions["Afrikaans"]["inventorymaster_pricing5"] = "Inventorymaster-pricing5";
$tableCaptions["Afrikaans"]["fuelmaster_Chart"] = "Fuelmaster Chart";
$tableCaptions["Afrikaans"]["maintenenace_Chart"] = "Onderhoud Chart";
$tableCaptions["Arabic"] = array();
$tableCaptions["Arabic"][""] = "";
$tableCaptions["Arabic"]["inventorymaster"] = "???? ??????? - M";
$tableCaptions["Arabic"]["creategrn"] = "???? ??????";
$tableCaptions["Arabic"]["vehiclemaster"] = "M - ???????";
$tableCaptions["Arabic"]["creategrn_issue"] = "????? ??????? ???????";
$tableCaptions["Arabic"]["inventorymaster_qty"] = "M - ??? ????? ???????";
$tableCaptions["Arabic"]["creategrn_receive"] = "??????? ??????? ???????";
$tableCaptions["Arabic"]["fuelmaster"] = "??????? ??????";
$tableCaptions["Arabic"]["suppliermaster"] = "M - ????????";
$tableCaptions["Arabic"]["accidents"] = "???? ???????";
$tableCaptions["Arabic"]["maintenenace"] = "????? ???????";
$tableCaptions["Arabic"]["fleettype"] = "????? ??????? - M";
$tableCaptions["Arabic"]["fuelprices"] = "????? ?????? - M";
$tableCaptions["Arabic"]["fuelstationmaster"] = "M - ????? ??????";
$tableCaptions["Arabic"]["vehicletype"] = "????? ???????? - M";
$tableCaptions["Arabic"]["servicetypemaster"] = "????? ?????? - M";
$tableCaptions["Arabic"]["insurance_payments"] = "????????? ???????";
$tableCaptions["Arabic"]["insuranceclaims"] = "??????? ???????";
$tableCaptions["Arabic"]["insurancecompany"] = "????? ??????? - M";
$tableCaptions["Arabic"]["maintenenace_regularservice"] = "????? ?????";
$tableCaptions["Arabic"]["maintenenace_general_repair"] = "????? ?????";
$tableCaptions["Arabic"]["maintenenace_accident_repair"] = "????? ???????";
$tableCaptions["Arabic"]["vehiclemaster_report"] = "????? ?????";
$tableCaptions["Arabic"]["accidents_report"] = "????? ????";
$tableCaptions["Arabic"]["admin_rights"] = "???? ??????";
$tableCaptions["Arabic"]["carrierusers"] = "?????????????";
$tableCaptions["Arabic"]["admin_members"] = "??????? ??????";
$tableCaptions["Arabic"]["admin_users"] = "????? / ????? ??????????";
$tableCaptions["Arabic"]["inventorymaster_pricing"] = "Inventorymaster ?????";
$tableCaptions["Arabic"]["creategrn_remove"] = "??? ???";
$tableCaptions["Arabic"]["creategrn_issuetorebuild"] = "???? ??? ?????";
$tableCaptions["Arabic"]["creategrn_receiveafterrebuild"] = "??????? ????? ??????";
$tableCaptions["Arabic"]["creategrn_issue_rebuilt"] = "????? ????? ??????";
$tableCaptions["Arabic"]["fuelmaster_reports"] = "????? ??????";
$tableCaptions["Arabic"]["creategrn_stock_balance"] = "????? ??????";
$tableCaptions["Arabic"]["rnewalmastertable"] = "M - ???????";
$tableCaptions["Arabic"]["otherrenewal"] = "??????? ????";
$tableCaptions["Arabic"]["creategrn_disposal"] = "??????";
$tableCaptions["Arabic"]["creategrn_remove_other"] = "?????";
$tableCaptions["Arabic"]["creategrn_disposal_rebuild"] = "????? ???? ??? ?????????";
$tableCaptions["Arabic"]["inventorymaster_pricing1"] = "Inventorymaster-pricing1";
$tableCaptions["Arabic"]["inventorymaster_pricing5"] = "Inventorymaster-pricing5";
$tableCaptions["Arabic"]["fuelmaster_Chart"] = "Fuelmaster ????? ???????";
$tableCaptions["Arabic"]["maintenenace_Chart"] = "???? ?????";
$tableCaptions["Chinese"] = array();
$tableCaptions["Chinese"][""] = "";
$tableCaptions["Chinese"]["inventorymaster"] = "M????";
$tableCaptions["Chinese"]["creategrn"] = "????";
$tableCaptions["Chinese"]["vehiclemaster"] = "M - ??";
$tableCaptions["Chinese"]["creategrn_issue"] = "????";
$tableCaptions["Chinese"]["inventorymaster_qty"] = "M - ????";
$tableCaptions["Chinese"]["creategrn_receive"] = "????";
$tableCaptions["Chinese"]["fuelmaster"] = "????";
$tableCaptions["Chinese"]["suppliermaster"] = "M - ???";
$tableCaptions["Chinese"]["accidents"] = "????";
$tableCaptions["Chinese"]["maintenenace"] = "????";
$tableCaptions["Chinese"]["fleettype"] = "M - ????";
$tableCaptions["Chinese"]["fuelprices"] = "M - ????";
$tableCaptions["Chinese"]["fuelstationmaster"] = "M - ???";
$tableCaptions["Chinese"]["vehicletype"] = "M - ????";
$tableCaptions["Chinese"]["servicetypemaster"] = "M - ????";
$tableCaptions["Chinese"]["insurance_payments"] = "????";
$tableCaptions["Chinese"]["insuranceclaims"] = "????";
$tableCaptions["Chinese"]["insurancecompany"] = "M - ????";
$tableCaptions["Chinese"]["maintenenace_regularservice"] = "????";
$tableCaptions["Chinese"]["maintenenace_general_repair"] = "????";
$tableCaptions["Chinese"]["maintenenace_accident_repair"] = "????";
$tableCaptions["Chinese"]["vehiclemaster_report"] = "????";
$tableCaptions["Chinese"]["accidents_report"] = "????";
$tableCaptions["Chinese"]["admin_rights"] = "?????";
$tableCaptions["Chinese"]["carrierusers"] = "????";
$tableCaptions["Chinese"]["admin_members"] = "???";
$tableCaptions["Chinese"]["admin_users"] = "??/????";
$tableCaptions["Chinese"]["inventorymaster_pricing"] = "???????";
$tableCaptions["Chinese"]["creategrn_remove"] = "????";
$tableCaptions["Chinese"]["creategrn_issuetorebuild"] = "?????";
$tableCaptions["Chinese"]["creategrn_receiveafterrebuild"] = "????";
$tableCaptions["Chinese"]["creategrn_issue_rebuilt"] = "????";
$tableCaptions["Chinese"]["fuelmaster_reports"] = "????";
$tableCaptions["Chinese"]["creategrn_stock_balance"] = "????";
$tableCaptions["Chinese"]["rnewalmastertable"] = "M - ??";
$tableCaptions["Chinese"]["otherrenewal"] = "????";
$tableCaptions["Chinese"]["creategrn_disposal"] = "??";
$tableCaptions["Chinese"]["creategrn_remove_other"] = "??";
$tableCaptions["Chinese"]["creategrn_disposal_rebuild"] = "??????";
$tableCaptions["Chinese"]["inventorymaster_pricing1"] = "Inventorymaster-pricing1";
$tableCaptions["Chinese"]["inventorymaster_pricing5"] = "Inventorymaster-pricing5";
$tableCaptions["Chinese"]["fuelmaster_Chart"] = "Fuelmaster??";
$tableCaptions["Chinese"]["maintenenace_Chart"] = "???";
$tableCaptions["French"] = array();
$tableCaptions["French"][""] = "";
$tableCaptions["French"]["inventorymaster"] = "M - Codes d'actions";
$tableCaptions["French"]["creategrn"] = "Mouvement de stock";
$tableCaptions["French"]["vehiclemaster"] = "M - Flotte";
$tableCaptions["French"]["creategrn_issue"] = "Problèmes d'inventaire";
$tableCaptions["French"]["inventorymaster_qty"] = "M - Inventaire Master Sub";
$tableCaptions["French"]["creategrn_receive"] = "Achats de stock";
$tableCaptions["French"]["fuelmaster"] = "Disques de carburant";
$tableCaptions["French"]["suppliermaster"] = "M - Fournisseurs";
$tableCaptions["French"]["accidents"] = "Dossiers d'accident";
$tableCaptions["French"]["maintenenace"] = "Dossiers de maintenance";
$tableCaptions["French"]["fleettype"] = "M - Types de flotte";
$tableCaptions["French"]["fuelprices"] = "M - Prix du carburant";
$tableCaptions["French"]["fuelstationmaster"] = "M - Stations d'essence";
$tableCaptions["French"]["vehicletype"] = "M - Types de véhicules";
$tableCaptions["French"]["servicetypemaster"] = "M - Types de service";
$tableCaptions["French"]["insurance_payments"] = "Paiements d'assurance";
$tableCaptions["French"]["insuranceclaims"] = "Les réclamations d'assurance";
$tableCaptions["French"]["insurancecompany"] = "M - Sociétés d'assurances";
$tableCaptions["French"]["maintenenace_regularservice"] = "Maintenance régulière";
$tableCaptions["French"]["maintenenace_general_repair"] = "Réparation générale";
$tableCaptions["French"]["maintenenace_accident_repair"] = "Réparation d'accident";
$tableCaptions["French"]["vehiclemaster_report"] = "Rapport sur la flotte";
$tableCaptions["French"]["accidents_report"] = "Rapport d'accident";
$tableCaptions["French"]["admin_rights"] = "Droits administratifs";
$tableCaptions["French"]["carrierusers"] = "Gestion des utilisateurs";
$tableCaptions["French"]["admin_members"] = "Membres Admin";
$tableCaptions["French"]["admin_users"] = "Ajouter / Modifier des utilisateurs";
$tableCaptions["French"]["inventorymaster_pricing"] = "Prix ??d'inventaire";
$tableCaptions["French"]["creategrn_remove"] = "Déménagement";
$tableCaptions["French"]["creategrn_issuetorebuild"] = "Envoyer à la reconstruction";
$tableCaptions["French"]["creategrn_receiveafterrebuild"] = "Recouvrement des reçus";
$tableCaptions["French"]["creategrn_issue_rebuilt"] = "Problèmes de reconstruction";
$tableCaptions["French"]["fuelmaster_reports"] = "Rapport carburant";
$tableCaptions["French"]["creategrn_stock_balance"] = "Balance des stocks";
$tableCaptions["French"]["rnewalmastertable"] = "M - Renouvellements";
$tableCaptions["French"]["otherrenewal"] = "Autres Renouvellements";
$tableCaptions["French"]["creategrn_disposal"] = "Cessions";
$tableCaptions["French"]["creategrn_remove_other"] = "Déménagements";
$tableCaptions["French"]["creategrn_disposal_rebuild"] = "Reconstruction des pneus";
$tableCaptions["French"]["inventorymaster_pricing1"] = "Prix ??d'inventaire1";
$tableCaptions["French"]["inventorymaster_pricing5"] = "Prix ??d'inventaire-prix5";
$tableCaptions["French"]["fuelmaster_Chart"] = "Graphique Fuelmaster";
$tableCaptions["French"]["maintenenace_Chart"] = "Tableau d'entretien";
$tableCaptions["German"] = array();
$tableCaptions["German"][""] = "";
$tableCaptions["German"]["inventorymaster"] = "M - Lagerbestände";
$tableCaptions["German"]["creategrn"] = "Aktienbewegung";
$tableCaptions["German"]["vehiclemaster"] = "M - Flotte";
$tableCaptions["German"]["creategrn_issue"] = "Aktienemissionen";
$tableCaptions["German"]["inventorymaster_qty"] = "M - Inventur Master Unter";
$tableCaptions["German"]["creategrn_receive"] = "Aktienkäufe";
$tableCaptions["German"]["fuelmaster"] = "Kraftstoffaufzeichnungen";
$tableCaptions["German"]["suppliermaster"] = "M - Lieferanten";
$tableCaptions["German"]["accidents"] = "Unfallaufzeichnungen";
$tableCaptions["German"]["maintenenace"] = "Wartungsaufzeichnungen";
$tableCaptions["German"]["fleettype"] = "M - Flottenarten";
$tableCaptions["German"]["fuelprices"] = "M - Treibstoffpreise";
$tableCaptions["German"]["fuelstationmaster"] = "M - Tankstelle";
$tableCaptions["German"]["vehicletype"] = "M - Fahrzeugtypen";
$tableCaptions["German"]["servicetypemaster"] = "M - Dienstleistungsarten";
$tableCaptions["German"]["insurance_payments"] = "Versicherungsleistungen";
$tableCaptions["German"]["insuranceclaims"] = "Versicherungsansprüche";
$tableCaptions["German"]["insurancecompany"] = "M - Versicherungsgesellschaften";
$tableCaptions["German"]["maintenenace_regularservice"] = "Routinewartung";
$tableCaptions["German"]["maintenenace_general_repair"] = "Allgemeine Reparatur";
$tableCaptions["German"]["maintenenace_accident_repair"] = "Unfallreparatur";
$tableCaptions["German"]["vehiclemaster_report"] = "Flottenbericht";
$tableCaptions["German"]["accidents_report"] = "Unfallbericht";
$tableCaptions["German"]["admin_rights"] = "Admin-Rechte";
$tableCaptions["German"]["carrierusers"] = "Benutzerverwaltung";
$tableCaptions["German"]["admin_members"] = "Admin Mitglieder";
$tableCaptions["German"]["admin_users"] = "Benutzer hinzufügen / bearbeiten";
$tableCaptions["German"]["inventorymaster_pricing"] = "InventoryMaster-Preisgestaltung";
$tableCaptions["German"]["creategrn_remove"] = "Reifenumzüge";
$tableCaptions["German"]["creategrn_issuetorebuild"] = "Senden an Rebuild";
$tableCaptions["German"]["creategrn_receiveafterrebuild"] = "Rebuilt Quittungen";
$tableCaptions["German"]["creategrn_issue_rebuilt"] = "Rebuilt Probleme";
$tableCaptions["German"]["fuelmaster_reports"] = "Kraftstoff-Bericht";
$tableCaptions["German"]["creategrn_stock_balance"] = "Aktienbilanz";
$tableCaptions["German"]["rnewalmastertable"] = "M - Erneuerungen";
$tableCaptions["German"]["otherrenewal"] = "Sonstige Erneuerungen";
$tableCaptions["German"]["creategrn_disposal"] = "Entsorgung";
$tableCaptions["German"]["creategrn_remove_other"] = "Umzüge";
$tableCaptions["German"]["creategrn_disposal_rebuild"] = "Wiederaufbauen von Reifenabfällen";
$tableCaptions["German"]["inventorymaster_pricing1"] = "Inventorymaster-Preise1";
$tableCaptions["German"]["inventorymaster_pricing5"] = "Inventorymaster-Preisgestaltung5";
$tableCaptions["German"]["fuelmaster_Chart"] = "Fuelmaster-Diagramm";
$tableCaptions["German"]["maintenenace_Chart"] = "Wartungsdiagramm";
$tableCaptions["Italian"] = array();
$tableCaptions["Italian"][""] = "";
$tableCaptions["Italian"]["inventorymaster"] = "Codici degli stock - M";
$tableCaptions["Italian"]["creategrn"] = "Movimento della";
$tableCaptions["Italian"]["vehiclemaster"] = "M - Fleet";
$tableCaptions["Italian"]["creategrn_issue"] = "Problemi di magazzino";
$tableCaptions["Italian"]["inventorymaster_qty"] = "M - Inventory Master Sub";
$tableCaptions["Italian"]["creategrn_receive"] = "acquisti stock";
$tableCaptions["Italian"]["fuelmaster"] = "Records di carburante";
$tableCaptions["Italian"]["suppliermaster"] = "M - Fornitori";
$tableCaptions["Italian"]["accidents"] = "Incidente Records";
$tableCaptions["Italian"]["maintenenace"] = "manutenzione Records";
$tableCaptions["Italian"]["fleettype"] = "Tipi Fleet - M";
$tableCaptions["Italian"]["fuelprices"] = "I prezzi del carburante - M";
$tableCaptions["Italian"]["fuelstationmaster"] = "M - Stazioni di carburante";
$tableCaptions["Italian"]["vehicletype"] = "Tipi di veicoli - M";
$tableCaptions["Italian"]["servicetypemaster"] = "Tipi di servizio - M";
$tableCaptions["Italian"]["insurance_payments"] = "indennità di assicurazione";
$tableCaptions["Italian"]["insuranceclaims"] = "crediti di assicurazione";
$tableCaptions["Italian"]["insurancecompany"] = "Assicurazioni - M";
$tableCaptions["Italian"]["maintenenace_regularservice"] = "Manutenzione regolare";
$tableCaptions["Italian"]["maintenenace_general_repair"] = "Riparazione generale";
$tableCaptions["Italian"]["maintenenace_accident_repair"] = "riparazione dopo incidente";
$tableCaptions["Italian"]["vehiclemaster_report"] = "Fleet Rapporto";
$tableCaptions["Italian"]["accidents_report"] = "Denuncia di infortunio";
$tableCaptions["Italian"]["admin_rights"] = "Diritti Admin";
$tableCaptions["Italian"]["carrierusers"] = "Gestione utenti";
$tableCaptions["Italian"]["admin_members"] = "Utenti Admin";
$tableCaptions["Italian"]["admin_users"] = "Aggiungere gli utenti / Modifica";
$tableCaptions["Italian"]["inventorymaster_pricing"] = "Inventorymaster-prezzi";
$tableCaptions["Italian"]["creategrn_remove"] = "pneumatici Traslochi";
$tableCaptions["Italian"]["creategrn_issuetorebuild"] = "Invia ricostruire";
$tableCaptions["Italian"]["creategrn_receiveafterrebuild"] = "Ricevute ricostruiti";
$tableCaptions["Italian"]["creategrn_issue_rebuilt"] = "Problemi ricostruiti";
$tableCaptions["Italian"]["fuelmaster_reports"] = "Relazione del carburante";
$tableCaptions["Italian"]["creategrn_stock_balance"] = "della Balance";
$tableCaptions["Italian"]["rnewalmastertable"] = "M - Rinnovi";
$tableCaptions["Italian"]["otherrenewal"] = "altri Rinnovi";
$tableCaptions["Italian"]["creategrn_disposal"] = "Alienazioni";
$tableCaptions["Italian"]["creategrn_remove_other"] = "Traslochi";
$tableCaptions["Italian"]["creategrn_disposal_rebuild"] = "Ricostruire pneumatici Alienazioni";
$tableCaptions["Italian"]["inventorymaster_pricing1"] = "Inventorymaster-pricing1";
$tableCaptions["Italian"]["inventorymaster_pricing5"] = "Inventorymaster-pricing5";
$tableCaptions["Italian"]["fuelmaster_Chart"] = "Grafico FuelMaster";
$tableCaptions["Italian"]["maintenenace_Chart"] = "Grafico Manutenzione";
$tableCaptions["Russian"] = array();
$tableCaptions["Russian"][""] = "";
$tableCaptions["Russian"]["inventorymaster"] = "M - ????-????";
$tableCaptions["Russian"]["creategrn"] = "???? ????????";
$tableCaptions["Russian"]["vehiclemaster"] = "M - Fleet";
$tableCaptions["Russian"]["creategrn_issue"] = "???????? ??";
$tableCaptions["Russian"]["inventorymaster_qty"] = "M - ????????? Master Sub";
$tableCaptions["Russian"]["creategrn_receive"] = "??????? ?????? ?????";
$tableCaptions["Russian"]["fuelmaster"] = "????????? ??????";
$tableCaptions["Russian"]["suppliermaster"] = "M - ??????????";
$tableCaptions["Russian"]["accidents"] = "?????? ??????";
$tableCaptions["Russian"]["maintenenace"] = "???????????? ???????????? ????????????";
$tableCaptions["Russian"]["fleettype"] = "???? ????? - ?";
$tableCaptions["Russian"]["fuelprices"] = "M - ???? ?? ???????";
$tableCaptions["Russian"]["fuelstationmaster"] = "M - ??????????? ???????";
$tableCaptions["Russian"]["vehicletype"] = "???? ???????????? ??????? - M";
$tableCaptions["Russian"]["servicetypemaster"] = "???? Service - M";
$tableCaptions["Russian"]["insurance_payments"] = "????????? ???????";
$tableCaptions["Russian"]["insuranceclaims"] = "????????? ?????????";
$tableCaptions["Russian"]["insurancecompany"] = "M - ????????? ????????";
$tableCaptions["Russian"]["maintenenace_regularservice"] = "?????????? ??????????? ????????????";
$tableCaptions["Russian"]["maintenenace_general_repair"] = "????? ??????";
$tableCaptions["Russian"]["maintenenace_accident_repair"] = "?????? ??????";
$tableCaptions["Russian"]["vehiclemaster_report"] = "Fleet Report";
$tableCaptions["Russian"]["accidents_report"] = "????? ??????";
$tableCaptions["Russian"]["admin_rights"] = "????? ??????????????";
$tableCaptions["Russian"]["carrierusers"] = "?????????? ??????????????";
$tableCaptions["Russian"]["admin_members"] = "?????????????? ????????????";
$tableCaptions["Russian"]["admin_users"] = "???????? / ????????????? ?????????????";
$tableCaptions["Russian"]["inventorymaster_pricing"] = "Inventorymaster ???????????????";
$tableCaptions["Russian"]["creategrn_remove"] = "?????? ?????????";
$tableCaptions["Russian"]["creategrn_issuetorebuild"] = "????????? Rebuild";
$tableCaptions["Russian"]["creategrn_receiveafterrebuild"] = "??????????????? ?????????";
$tableCaptions["Russian"]["creategrn_issue_rebuilt"] = "??????????????? ???????";
$tableCaptions["Russian"]["fuelmaster_reports"] = "????????? ?????";
$tableCaptions["Russian"]["creategrn_stock_balance"] = "???? ??????";
$tableCaptions["Russian"]["rnewalmastertable"] = "M - ?????????";
$tableCaptions["Russian"]["otherrenewal"] = "?????? ?????????";
$tableCaptions["Russian"]["creategrn_disposal"] = "???????";
$tableCaptions["Russian"]["creategrn_remove_other"] = "????????";
$tableCaptions["Russian"]["creategrn_disposal_rebuild"] = "??????????? Tyre ???????";
$tableCaptions["Russian"]["inventorymaster_pricing1"] = "Inventorymaster-pricing1";
$tableCaptions["Russian"]["inventorymaster_pricing5"] = "Inventorymaster-pricing5";
$tableCaptions["Russian"]["fuelmaster_Chart"] = "Fuelmaster ?????????";
$tableCaptions["Russian"]["maintenenace_Chart"] = "?????? ???????????? ????????????";
$tableCaptions["Spanish"] = array();
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"]["inventorymaster"] = "M - Códigos de Acciones";
$tableCaptions["Spanish"]["creategrn"] = "Movimiento de acciones";
$tableCaptions["Spanish"]["vehiclemaster"] = "M - Flota";
$tableCaptions["Spanish"]["creategrn_issue"] = "Cuestiones de stock";
$tableCaptions["Spanish"]["inventorymaster_qty"] = "M - Inventario Master Sub";
$tableCaptions["Spanish"]["creategrn_receive"] = "Compras de acciones";
$tableCaptions["Spanish"]["fuelmaster"] = "Registros de combustible";
$tableCaptions["Spanish"]["suppliermaster"] = "M - Proveedores";
$tableCaptions["Spanish"]["accidents"] = "Registros de Accidentes";
$tableCaptions["Spanish"]["maintenenace"] = "Registros de mantenimiento";
$tableCaptions["Spanish"]["fleettype"] = "M - Tipos de Flota";
$tableCaptions["Spanish"]["fuelprices"] = "M - Precios de los combustibles";
$tableCaptions["Spanish"]["fuelstationmaster"] = "M - Estaciones de Combustible";
$tableCaptions["Spanish"]["vehicletype"] = "M - Tipos de vehículos";
$tableCaptions["Spanish"]["servicetypemaster"] = "M - Tipos de Servicio";
$tableCaptions["Spanish"]["insurance_payments"] = "Pagos del seguro";
$tableCaptions["Spanish"]["insuranceclaims"] = "Reclamos de seguro";
$tableCaptions["Spanish"]["insurancecompany"] = "M - Compañías de Seguros";
$tableCaptions["Spanish"]["maintenenace_regularservice"] = "Mantenimiento regular";
$tableCaptions["Spanish"]["maintenenace_general_repair"] = "Reparación General";
$tableCaptions["Spanish"]["maintenenace_accident_repair"] = "Reparación de Accidentes";
$tableCaptions["Spanish"]["vehiclemaster_report"] = "Informe de flota";
$tableCaptions["Spanish"]["accidents_report"] = "Reporte de accidente";
$tableCaptions["Spanish"]["admin_rights"] = "Derechos de administrador";
$tableCaptions["Spanish"]["carrierusers"] = "Gestión de usuarios";
$tableCaptions["Spanish"]["admin_members"] = "Miembros de Admin";
$tableCaptions["Spanish"]["admin_users"] = "Añadir / Editar usuarios";
$tableCaptions["Spanish"]["inventorymaster_pricing"] = "Precios de inventario";
$tableCaptions["Spanish"]["creategrn_remove"] = "Remoción de neumáticos";
$tableCaptions["Spanish"]["creategrn_issuetorebuild"] = "Enviar a reconstruir";
$tableCaptions["Spanish"]["creategrn_receiveafterrebuild"] = "Recibos reconstruidos";
$tableCaptions["Spanish"]["creategrn_issue_rebuilt"] = "Problemas de reconstrucción";
$tableCaptions["Spanish"]["fuelmaster_reports"] = "Informe de combustible";
$tableCaptions["Spanish"]["creategrn_stock_balance"] = "Balance de acciones";
$tableCaptions["Spanish"]["rnewalmastertable"] = "M - Renovaciones";
$tableCaptions["Spanish"]["otherrenewal"] = "Otras Renovaciones";
$tableCaptions["Spanish"]["creategrn_disposal"] = "Eliminaciones";
$tableCaptions["Spanish"]["creategrn_remove_other"] = "Mudanzas";
$tableCaptions["Spanish"]["creategrn_disposal_rebuild"] = "Reconstruir la eliminación de neumáticos";
$tableCaptions["Spanish"]["inventorymaster_pricing1"] = "Precios de inventario1";
$tableCaptions["Spanish"]["inventorymaster_pricing5"] = "Precios de inventario-precio5";
$tableCaptions["Spanish"]["fuelmaster_Chart"] = "Gráfico de Fuelmaster";
$tableCaptions["Spanish"]["maintenenace_Chart"] = "Cuadro de mantenimiento";
$tableCaptions[""] = array();
$tableCaptions[""][""] = "";
$tableCaptions[""]["inventorymaster"] = "M - Stock Codes";


$globalEvents = new class_GlobalEvents;
$tableEvents = array();

include(getabspath('classes/security.php'));
include( getabspath("connections/dbfunctions_legacy.php") );
include( getabspath("connections/ConnectionManager.php") );
$cman = new ConnectionManager();

$mlang_defaultlang = getDefaultLanguage();

include(getabspath("include/languages.php"));


$page_titles[".global"] = array();
if(mlang_getcurrentlang()=="English")
{
}
if(mlang_getcurrentlang()=="Afrikaans")
{
}
if(mlang_getcurrentlang()=="Arabic")
{
}
if(mlang_getcurrentlang()=="Chinese")
{
}
if(mlang_getcurrentlang()=="French")
{
}
if(mlang_getcurrentlang()=="German")
{
}
if(mlang_getcurrentlang()=="Italian")
{
}
if(mlang_getcurrentlang()=="Russian")
{
}
if(mlang_getcurrentlang()=="Spanish")
{
}
if(mlang_getcurrentlang()=="")
{
}

$globalSettings["showDetailedError"] = true;

// SearchClause::getSearchObject
$_cachedSeachClauses = array();


// default connection link #9875
$conn = $cman->getDefault()->conn;

$logoutPerformed = false;
$scriptname = getFileNameFromURL();
	if(!isLogged() && $scriptname!="login.php" && $scriptname!="remind.php" && $scriptname!="register.php" && $scriptname!="checkduplicates.php")
{
	Security::doGuestLogin();
}



$isGroupSecurity = true;

$isUseRTEBasic = true;

$isUseRTECK = false;

$isUseRTEInnova = false;

$caseInsensitiveUsername = 0;

$menuNodesIndex=0;


include(getabspath('classes/searchclause.php'));
include(getabspath('classes/projectsettings.php'));
include_once(getabspath('classes/runnerpage.php'));
include_once(getabspath("classes/controls/ViewControl.php"));

?>