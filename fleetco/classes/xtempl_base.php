<?php
// menuItem class
include_once(getabspath("include/menuitem.php"));
include(getabspath("include/testing.php"));

/**
  * Xlinesoft Template Engine
  */
class XTempl_Base
{
	var $xt_vars=array();
	var $xt_stack;
	var $xt_events=array();
	var $template;
	var $template_file;
	var $charsets=array();
	var $testingFlag=false;
	var $eventsObject;
	var $hiddenBricks = array();
	var $preparedContainers = array();
	var $layout;
	var $pageId = 1;
	
	/**
	 * $cssFiles
	 * Array of css files for page styles and layouts
	 * @var {array}
	 * @intellisense
	 */
	var $cssFiles = array();

	/**
	  * Returns variable by name.
      * @intellisense
      */
	function getVar($name)
	{
		return xt_getvar($this,$name);
	}

	function recTesting(&$arr)
	{
		global $testingLinks;
		foreach($arr as $k=>$v)
			if(is_array($v))
				$this->recTesting($arr[$k]);
			else
				if(isset($testingLinks[$k]))
					$arr[$k].=" func=\"".$testingLinks[$k]."\"";
	}
	
	function Testing()
	{
		if(!$this->testingFlag)
			return;
		$this->recTesting($this->xt_vars);
	}
	
	function report_error($message)
	{
		echo $message;
		exit();
	}
	
	protected function assign_headers() 
	{
		//check if headers are already assigned
		if( isset( $this->xt_vars['header'] ) )
			return;
		
		if ( !$this->mobileTemplateMode() )
		{
			$this->assign("header","header");
			$this->assign("footer","footer");
		}
		else
		{
			$this->assign("header","mheader");
			$this->assign("footer","mfooter");
		}
	}


	/**
	 * @param Boolean hideAddedCharts (optional) #9607 1.
	 */
	 function __construct( $hideAddedCharts = false )
	{
		global $mlang_charsets;
		
		$this->xt_vars=array();
		$this->xt_stack=array();
		$this->xt_stack[]=&$this->xt_vars;

		$this->assign_method("event",$this, "xt_doevent",array());
		$this->assign_function("label","xt_label",array());
		$this->assign_function("tooltip","xt_tooltip",array());
		$this->assign_function("custom","xt_custom",array());
		$this->assign_function("caption","xt_caption",array());
		$this->assign_function("pagetitlelabel", "xt_pagetitlelabel", array());
		$this->assign_method("mainmenu",$this,"xt_displaymainmenu",array());
		$this->assign_method("menu",$this,"xt_displaymenu",array());
		$this->assign_function("TabGroup","xt_displaytabs",array());
		$this->assign_function("Section","xt_displaytabs",array());
		$this->assign_function("Step","xt_displaytabs",array());
		$this->assign_function("logo","printProjectLogo",array());
		$this->assign_function("home_link","printHomeLink",array());
		
		if( !$hideAddedCharts ) //#9607 1. Temporary fix
		{
			$this->assign_function("fuelmaster_Chart_chart","xt_showchart",array("chartname"=>"fuelmaster_Chart","table"=>"fuelmaster Chart","ctype"=>"Line"));
			$this->assign_function("maintenenace_Chart_chart","xt_showchart",array("chartname"=>"maintenenace_Chart","table"=>"maintenenace Chart","ctype"=>"2DColumn"));
		}
		
		$mlang_charsets=array();
		
$mlang_charsets["Afrikaans"]="Windows-1252";
$mlang_charsets["Arabic"]="Windows-1256";
$mlang_charsets["Chinese"]="GB18030";
$mlang_charsets["English"]="Windows-1252";
$mlang_charsets["French"]="Windows-1252";
$mlang_charsets["German"]="Windows-1252";
$mlang_charsets["Italian"]="Windows-1252";
$mlang_charsets["Russian"]="Windows-1251";
$mlang_charsets["Spanish"]="Windows-1252";;
		$this->charsets = &$mlang_charsets;
		
		$html_attrs = '';
		if(isRTL())
		{
			$this->assign("RTL_block",true);
			$this->assign("rtlCSS",true);
			$html_attrs .= 'dir="RTL" ';
		}
		else
			$this->assign("LTR_block",true);
		if(mlang_getcurrentlang() == 'English')
				$html_attrs .= 'lang="en"';
		$this->assign("html_attrs",$html_attrs);	
		$this->assign("menu_block",true);	
	}
	

	/**
	  * Assign value to name.
	  * @intellisense
	  */
	function assign($name,$val)
	{
		$this->xt_vars[$name]=$val;
	}

	/**
	  * Assign value to name by reference.
	  * @intellisense
	  */
	function assignbyref($name,&$var)
	{
		$this->xt_vars[$name]=&$var;
	}

	function bulk_assign( $arr )
	{
		foreach($arr as $key => $value)
		{
			$this->xt_vars[$key] = $value;
		}
	}
	
	
	function enable_section($name)
	{
		if(!isset($this->xt_vars[$name]))
		{
			$this->xt_vars[$name] = true;
		}
		elseif($this->xt_vars[$name] == false)
		{
			$this->xt_vars[$name] = true;
		}
	}

	function assign_section($name,$begin,$end)
	{
		$arr = array();
		$arr["begin"]=$begin;
		$arr["end"]=$end;
		$this->xt_vars[$name]=&$arr;
	}

	function assign_loopsection($name,&$data)
	{
		$arr = array();
		$arr["data"]=&$data;
		$this->xt_vars[$name]=&$arr;
	}

	function assign_array($name,$innername,$_arr)
	{
		$arr = array();
		foreach($_arr as $a)
			$arr[] = array($innername => $a);
		$this->xt_vars[$name]=array("data" => $arr);
	}
	
	
	function assign_loopsection_byValue($name, $data)
	{
		$arr = array();
		$arr["data"] = $data;
		$this->xt_vars[$name] = &$arr;
	}

	function assign_function( $name, $func, $params )
	{
		$this->xt_vars[$name] = XTempl::create_function_assignment( $func,$params );
	}

	static function create_function_assignment($func,$params)
	{
		return array( "func" => $func, "params" => $params );
	}

	function assign_method($name,&$object,$method,$params = null)
	{
		$this->xt_vars[$name] = XTempl::create_method_assignment( $method, $object, $params );
	}

	static function create_method_assignment( $method, &$object, $params = null )
	{
		return array( "method"=>$method,
			"params"=>$params, 
			"object" => $object
		);
	}

	/**
	 * Remove assigned element
	 * @param string - name of assigned element
	 * @intellisense
	 */
	function unassign($name){
		unset($this->xt_vars[$name]);
	}

	function assign_event($name,&$object,$method,$params)
	{
		 $this->xt_events[$name]=array("method"=>$method,"params"=>$params);
		 $this->xt_events[$name]["object"]=&$object;
	}

	function xt_doevent($params)
	{
	}
	
	function fetchVar($varName)
	{
		ob_start();
		$varParams = array();
		$this->processVar($this->getVar($varName), $varParams);	
		$out=ob_get_contents();
		ob_end_clean();
		return $out;
		
	}

	function fetch_loaded($filtertag="")
	{
		ob_start();
		$this->display_loaded($filtertag);
		$out=ob_get_contents();
		ob_end_clean();
		return $out;
	}

	
	function call_func($var)
	{
	}

	function set_template($template)
	{
		$this->template_file = basename($template,".htm");
		$this->set_layout();


		//	read template file
		$templatesPath = "templates/";
		if ( $this->mobileTemplateMode() )
			$templatesPath = "mobile/";
		if(file_exists(getabspath($templatesPath.$template)))
			$this->template = myfile_get_contents(getabspath($templatesPath.$template));
		
		if ( $this->mobileTemplateMode() && $this->template=='' )
		{
			$templatesPath = "templates/";
			$this->template = myfile_get_contents(getabspath($templatesPath.$template));
		}
		$this->assign_headers();
	}

	function set_layout()
	{
		global $page_layouts;
		$this->layout =&$page_layouts[$this->template_file];
	}
	
	function prepare_template($template)
	{
		$this->prepareContainers();
	}

	function load_template($template)
	{
		$this->set_template($template);
		$this->prepareContainers();
	}

	function display_loaded($filtertag = "")
	{
	}
	
	function display($template)
	{
	}
	
	function displayPartial($template)
	{
		$savedTemplate = $this->template;
		$this->display( $template );
		$this->template = $savedTemplate;
	}
	
	function processVar(&$var, &$varparams)
	{
	}
	
	/**
	 * Display bricks with names listed in the arra passed as hidden
	 * @param Array bricks
	 */
	function displayBricksHidden($bricks)
	{
		foreach($bricks as $name)
		{
			$this->hiddenBricks[$name] = true;		
		}	
	}
	
	/**
	 * Display brick hidden
	 * @param {string} brick name
	 * @intellisense
	 */
	function displayBrickHidden($name)
	{
		$this->hiddenBricks[$name] = true;
	}

	/** 
	 * Hide All bricks on the page
	 * @param {array} of excepted bricks
	 * @intellisense
	 */
	function hideAllBricksExcept($arrExceptBricks){
		foreach($this->layout->containers as $cname=>$container)
		{
			foreach($container as $brick)
			{
				if (!in_array($brick["name"],$arrExceptBricks)){
					$this->assign($brick["block"],false);
				}	
			}
		}
	}
	
	/** 
	 * Show brick on the page
	 * @param {string} name of brick
	 * @intellisense
	 */
	function showBrick($name)
	{
		foreach($this->layout->containers as $cname=>$container)
		{
			foreach($container as $brick)
			{
				if ($brick["name"]==$name){
					$this->assign($brick["block"],true);
				}
			}
		}
	}
	
	private function setContainerDisplayed($cname, $show, $firstContainerSubstyle, $lastContainerSubstyle)
	{
		if( $this->layout->version == BOOTSTRAP_LAYOUT )
		{
			$this->assign( "container_".$cname, true );
			if( !$show )
				$this->assign( $cname . "_chiddenattr", "data-hidden" );
			return;
		}
		$this->prepareContainerAttrs( $cname );
		if( $show )
		{
			$styleString = $this->preparedContainers[ $cname ]["showString"];
			$this->unassign("wrapperclass_".$cname);
		}
		else
		{
			$styleString = $this->preparedContainers[ $cname ]["hideString"];
			$this->assign("wrapperclass_".$cname,"rnr-hiddencontainer");
		}
		$this->assign_section("container_".$cname,"<div ".$styleString.">","</div>");
		$this->assign("cheaderclass_".$cname,$firstContainerSubstyle);
		$this->assign("cfooterclass_".$cname,$lastContainerSubstyle);
	}

	private function getPageStyle()
	{
		if(postvalue("pdf"))
		{
			return  $this->layout->pdfStyle();
		}
		return $this->layout->style;
	}

	private function prepareContainerAttrs( $cname )
	{
		$pageStyle = $this->getPageStyle();
		if( isset($this->preparedContainers[ $cname ]) )
			return;
		$this->preparedContainers[ $cname ] = array();
		$hiddenStyleString = "";
		$styleString = "";
		if(isset($this->layout->skins[$cname]))
		{
			$skin = @$this->layout->skins[$cname];
			
			$buttonsType = $this->layout->skinsparams[$skin]["button"];
			$buttonsClass = $buttonsType == "button2" ? " aslinks" : " asbuttons";
		
		// printing properties
			$printMode = $this->layout->container_properties[$cname]["print"];
			$printClass = "";
			
			if($printMode == "repeat")
				$printClass = " rp-repeat";
			else if($printMode == "none")
				$printClass = " rp-noprint";
			
			if($this->layout->version == 1) {
				$styleString = " class=\"rnr-cw-".$cname." runner-s-".$skin." ".$pageStyle;
			} else {
				$styleString = " class=\"rnr-cw-".$cname." rnr-s-".$skin.$buttonsClass." ".$pageStyle.$printClass;
			}
			$hiddenStyleString = $styleString . " rnr-hiddencontainer";
			$styleString .= "\"";
			$hiddenStyleString .= "\"";
			$this->preparedContainers[ $cname ] = array("showString" => $styleString, "hideString" => $hiddenStyleString );
		}
	}
	/** 
	 * Prepare containers for show on page
	 * @intellisense
	 */
	function prepareContainers()
	{
		if(!$this->layout)
			return;

		$containerCss = array();
		$pageStyle = $this->getPageStyle();
		
		$classPrefix = "rnr-";
		if($this->layout->version == 1)
		{
			$classPrefix = "runner-";
		}
		$this->assign("stylename",$pageStyle." page-".$this->layout->name);
		$this->assign("pageStyleName",$pageStyle);
		$displayed_containers = array();
		$hidden_containers = array();
		
		// run reverse loop for proper processing of nested containers  
		$containersNames = array_keys($this->layout->containers);
		$containersNames = array_reverse($containersNames);
		foreach($containersNames as $cname)
		{
			$container = $this->layout->containers[$cname];
			if(isset($this->xt_vars["container_".$cname]) && $this->xt_vars["container_".$cname] === false)
				continue;
			$firstContainerSubstyle = "";
			$lastContainerSubstyle = "";
			$showContainer = false;
			$hideContainer = true;
			foreach($container as $brick)
			{
				if(!strlen($brick["block"]))
				{
					$showContainer = true;
				}
				elseif(!isset($this->xt_vars[$brick["block"]]))
				{
					continue;
				}
				elseif(!$this->xt_vars[$brick["block"]])
				{
					continue;
				}
				if(!$firstContainerSubstyle)
				{
					$firstContainerSubstyle = "runner-toprow style".$brick["substyle"];
					if($brick["name"] == "vmenu")
						$firstContainerSubstyle = "runner-toprow runner-vmenu";
				}
				$lastContainerSubstyle = "runner-bottomrow style".$brick["substyle"];
				if($brick["name"] == "vmenu")
					$lastContainerSubstyle = "runner-bottomrow runner-vmenu";
				$showContainer = true;

				if($this->hiddenBricks[$brick["name"]] 
					|| $brick["name"] == "wrapper" 
						&& (isset($hidden_containers[$brick["container"]]) || !isset($displayed_containers[$brick["container"]])))
				{
					$hideBrick = true;
				}
				else
				{
					$hideBrick = false;
					$hideContainer = false;
				}
					
				if($this->layout->version != BOOTSTRAP_LAYOUT )				
				{
					if( $hideBrick ){
						$this->assign("brickclass_".$brick["name"], $classPrefix."hiddenbrick");
					}else{
						$this->unassign("brickclass_".$brick["name"] );
					}
				}
				else
				{
					if( $hideBrick ){
						$this->assign( $brick["name"] . "_hiddenattr", "data-hidden" );
						//$containerCss[] = "[data-pageid=\"". $this->pageId ."\"][data-brick=".$brick["name"]."] { display:none; }";
					}
				}
			}
			if($showContainer)
			{
				if($hideContainer)
				{
					$hidden_containers[$cname] = true;
				}

				$this->setContainerDisplayed( $cname, !$hideContainer, $firstContainerSubstyle, $lastContainerSubstyle );

				$displayed_containers[$cname] = true;
				$this->unassign("wrapperclass_".$cname);
			}
			else 
			{
				$this->unassign("container_".$cname);
				$this->assign("wrapperclass_".$cname,$classPrefix."hiddencontainer");
			}			
		}
		//	display blocks
		foreach($this->layout->blocks as $bname=>$block)
		{
			$showBlock = false;
			$hideBlock = true;
			foreach($block as $cname)
			{
				if( $displayed_containers[$cname] )
				{
					$showBlock = true;
					if(!$hidden_containers[$cname])
					{
						$hideBlock = false;
						break;
					}
				}
			}
			if( $this->layout->version != BOOTSTRAP_LAYOUT )
			{
				if(!$showBlock || $hideBlock)
					$this->assign("blockclass_".$bname,$classPrefix."hiddenblock");
			}
			else
			{
				if(!$showBlock || $hideBlock)
					$this->assign("blockattr_".$bname, "data-hidden" );
			}
			
		}
		if( $this->layout->version == BOOTSTRAP_LAYOUT )
		{
			$this->assign( "pageid", $this->pageId );
			//$this->assign("containerCss", implode("\r\n", $containerCss ) );
		}
	}
	
	function hideField($fieldName)
	{
		if($this->layout->version == 1)
			$this->assign("fielddispclass_".GoodFieldName($fieldName), "runner-hiddenfield");
		else 
			$this->assign("fielddispclass_".GoodFieldName($fieldName), "rnr-hiddenfield");
	}
	
	function showField($fieldName)
	{
		$this->assign("fielddispclass_".GoodFieldName($fieldName), "");
	}

	
	function xt_displaymenu($params)
	{
		$menuparams = array();
		foreach($params as $p)
		{
			$menuparams[] = $p;
		}
		global $pageObject;
		if( !isset( $pageObject ) )
			return;

		$pageObject->displayMenu( $menuparams[0],  $menuparams[1] );
		return;
	}

	function xt_displaymainmenu($params)
	{
		array_unshift($params, "main");
		return $this->xt_displaymenu($params);
	}
	
	function mobileTemplateMode() {
		if($this->layout)
			return mobileDeviceDetected() && $this->layout->version != BOOTSTRAP_LAYOUT;
		else
			return false;
	}
	
}
?>