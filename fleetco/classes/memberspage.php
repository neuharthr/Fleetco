<?php
require_once(getabspath("classes/listpage_simple.php"));
class MembersPage extends ListPage_Simple 
{	
	/**
	 * Groups array from DB
	 * @type array
	 */
	var $groups = array();
	
	var $groupFullChecked = array();
	
	/**
	 * Members array from DB
	 * @type array
	 */	
	var $members = array();
	
	/**
	 * Users array from DB
	 * @type array
	 */	
	var $users = array();
	
	var $addSaveButtons = false;
	
	var $fields = array();
	
	var $listAjax = false;
	
	
	
	/**
	 * Contructor
	 *
	 * @param array $params
	 * @return MembersPage
	 */
	function __construct(&$params) 
	{
		// call parent
		parent::__construct($params);
		
			
		$this->listAjax = false;
		$this->pageSize = -1;	// all rows
	}
	
	/**
	 * Override, add admin_members specific assignments
	 */
	function commonAssign() 
	{	
		// call parent
		parent::commonAssign();

		if ($this->addSaveButtons)
		{
			$this->xt->assign("savebuttons_block", true);
			$this->xt->assign("savebutton_attrs","id=\"saveBtn\"");
			$this->xt->assign("resetbutton_attrs", "id=\"resetBtn\"");
		}
		
		$this->xt->assign("search_records_block",true);
		// The user might rewrite $_SESSION["UserName"] value with HTML code in an event, so no encoding will be performed while printing this value.
		$this->initLogin();
		$this->xt->displayBrickHidden("message");
		$this->xt->assign("menu_block",true);
	}		
	
	/**
	 * Fills grid rows and headers
	 */
	function fillGridData() 
	{
		//	fill $rowInfo array
		$rowInfo = array();	
		// add grid data
		$data = $this->beforeProccessRow();
		// like usual grid data fill 
		while($data)
		{
			$row = array();
			$userid = $this->recNo;
			$row["grid_record"] = array();
			$row["grid_record"]["data"] = array();
			$username = $data["username"];
			$groups_sate = array();
			
			//	create checkboxes
			$member_indexes=array();
			foreach($this->members as $idx=>$m)
			{
				if($m[1]==$username)
					$member_indexes[]=$idx;
			}
			$rowgroups = array();
			foreach($this->groups as $idx => $g)
			{
				$checked=0;
				$smarty_group=array();
				foreach($member_indexes as $i)
				{
					if($this->members[$i][0]==$g[0])
					{
						$checked = 1;
						break;
					}
				}
				if(!($_SESSION["UserID"] != $username || $g[0] != -1))
				{
					$checked = 3;
				}
				$smarty_group["group"] = $g[0];
				$groups_sate[$smarty_group["group"]] = $checked;
				$smarty_group["groupbox_attrs"] = "data-checked=\"".$checked."\" id=\"box".$smarty_group["group"].$userid."\" data-userid=\"".$userid."\" data-group=\"".$smarty_group["group"]."\"";
				$rowgroups[] = array("usergroup_box" => array("data" => array($smarty_group)), "groupcellbox_attrs" => "id=\"cell".$smarty_group["group"].$userid."\" data-col=\"".$smarty_group["group"]."\"");
			}
			$rowgroups[count($rowgroups)-1]["rnredgeclass"] = "rnr-edge";
			$row["usergroup_boxes"] = array("data" => $rowgroups);
			$row["usernamecell_attrs"] = "data-userid=\"userid\" id=\"cellusername".runner_htmlspecialchars($userid)."\"";
			$row["usernamerow_attrs"] = "id=\"usernamerow".runner_htmlspecialchars($userid)."\"";
			$row["usernamebox_attrs"] = "data-userid=\"".runner_htmlspecialchars($userid)."\" data-checked=\"0\" id=\"rowbox".runner_htmlspecialchars($userid)."\"";
			$row["username"] = runner_htmlspecialchars($username);
				$displayUserName = $data["fullname"];
			$row["displayusername"] = runner_htmlspecialchars($displayUserName);
			$row["displayusername_attrs"] = "id=\"cellDisplayName".runner_htmlspecialchars($userid)."\"";
			$this->users[$userid]["displayUserName"] = $displayUserName;
				$emailUser = $data["email"];
			$row["emailuser"] = runner_htmlspecialchars($emailUser);
			$row["emailuser_attrs"] = "id=\"cellEmail".runner_htmlspecialchars($userid)."\"";
			$this->users[$userid]["emailUser"] = $emailUser;
			
			$this->users[$userid]["userName"] = $username;
			$this->users[$userid]["groups"] = $groups_sate;
			$this->users[$userid]["visible"] = true;
			
			$row["recNo"] = $this->recNo; 
			$this->recNo++;
			
			//	assign row spacings for vertical layout
			$row["grid_rowspace"]=true;
			$row["grid_recordspace"] = array("data"=>array());
			for($i=0;$i<$this->colsOnPage*2-1;$i++)
				$row["grid_recordspace"]["data"][]=true;
			
			if($this->eventExists("BeforeMoveNextList"))
				$this->eventsObject->BeforeMoveNextList($data,$row,$record, $this);
			$rowInfo[]=$row;
			
			$data = $this->beforeProccessRow();
		}
		
		// fill headers array
		foreach($this->groups as $g)
		{
			$smartyGroups[]=array("groupname"=>runner_htmlspecialchars($g[1]),
				"groupheadersort_attrs"=>"data-group=\"".$g[0]."\" id=\"colsort".$g[0]."\" href=\"#\"",
				"groupheadertdsort_attrs"=>"id=\"tdsort".$g[0]."\"",
				"groupheaderbox_attrs"=>"data-group=\"".$g[0]."\" data-checked=\"0\" id=\"colbox".$g[0]."\"",
				"groupheadertdbox_attrs"=>"id=\"tdbox".$g[0]."\"",
			);
		}
		
		$this->xt->assign("displayuserheadersort_attrs", "id=\"displayNameSort\" href=\"#\"");
		$this->xt->assign("displayuserheadertdsort_attrs", "id=\"tdsortDisplayName\" href=\"#\"");
		$this->xt->assign("displayuserheadertdbox_attrs", "id=\"tdboxDisplayName\" href=\"#\"");
		$this->xt->assign("emailuserheadersort_attrs", "id=\"EmailSort\" href=\"#\"");
		$this->xt->assign("emailuserheadertdsort_attrs", "id=\"tdsortEmail\" href=\"#\"");
		$this->xt->assign("emailuserheadertdbox_attrs", "id=\"tdboxEmail\" href=\"#\"");
		$this->xt->assign("usernameheadersort_attrs", "id=\"userNameSort\" href=\"#\"");
		$this->xt->assign("choosecolumnsbutton_attrs", "id=\"chooseColumnsButton\" href=\"#\"");
		
		// assign grid rows		
		$this->xt->assign_loopsection("grid_row", $rowInfo);
		// assign grid headers
		$smartyGroups[ count($smartyGroups)-1 ]["rnredgeclass"] = "rnr-edge";
		$this->xt->assign_loopsection("usergroup_header", $smartyGroups);
		
		if (count($rowInfo))
		{
			$this->addSaveButtons = true;
		}
	}
	
	/**
	 * Fill members array from DB, call after save
	 */
	function fillMembers()
	{
		global $cman;
		$grConnection = $cman->getForUserGroups();
		// It's expected that $this->tName is equal to 'admin_members' so the page's db connection is used #9875
		$sql = "select ". $grConnection->addFieldWrappers( "UserName" )
			.", ". $grConnection->addFieldWrappers( "GroupID" )
			." from ". $grConnection->addTableWrappers( "carrier_ugmembers" ) 
			." order by ". $grConnection->addFieldWrappers( "UserName" )
			.", ". $grConnection->addFieldWrappers( "GroupID" );
		
		//	select members list	
		$qResult = $grConnection->query( $sql );
		while( $tdata = $qResult->fetchNumeric() )
		{
			$this->members[] = array($tdata[1], $tdata[0]);
		}
	}
	
	/**
	 * Fill groups array from DB, call after save
	 */
	function fillGroups()
	{
		global $cman;
		$grConnection = $cman->getForUserGroups();			
		
		$this->groups[] = array(-1, "<".mlang_message("AA_GROUP_ADMIN").">");
		$this->groupFullChecked[] = true;
		
		$sql = "select ". $grConnection->addFieldWrappers( "GroupID" ) .", ". $grConnection->addFieldWrappers( "Label" )
			." from ". $grConnection->addTableWrappers( "carrier_uggroups" ) ." order by ". $grConnection->addFieldWrappers( "Label" );
		
		$qResult = $grConnection->query( $sql );
		while( $tdata = $qResult->fetchNumeric() )
		{
			$this->groups[] = array($tdata[0], $tdata[1]);
			$this->groupFullChecked[] = true;
		}
	}
	
	/**
	 * A stub
	 */
	function prepareForResizeColumns()
	{
	}
		
	/**
	 * PRG rule, to avoid POSTDATA resend
	 * call after save
	 */
	function rulePRG() 
	{		
		if(no_output_done() && (postvalue("a")=="save"/* || count($this->selectedRecs)*/)) 
		{
			// redirect, add a=return param for saving SESSION
			HeaderRedirect($this->shortTableName, $this->getPageType(), "a=return");
			// turned on output buffering, so we need to stop script
			exit();
		}
	}
		
	/**
	 * Main function, call to build page
	 * Do not change methods call oreder!!
	 */
	function prepareForBuildPage() 
	{
		// save recs
		//$this->save();
		// PRG rule, to avoid POSTDATA resend
		$this->rulePRG();	
		// fill data
		$this->fillMembers();
		$this->fillGroups();
		// build sql query
		$this->buildSQL();
		$this->seekPageInRecSet($this->querySQL);			
		// fill grid data
		$this->fillGridData();
		$this->buildSearchPanel();
		$this->fillFields();
		// add common js code
		$this->addCommonJs();
		// add common html code
		$this->addCommonHtml();
		// Set common assign
		$this->commonAssign();
		// build admin block
		$this->assignAdmin();
	}
	
	/**
	 * show page at the end of its proccess, depending on mode
	 */
	function showPage() 
	{
		$this->display($this->templatefile);
	}
	
	/**
	 * Add js files and scripts
	 */
	function addCommonJs() 
	{
		// call parent if need RunnerJS API 
		RunnerPage::addCommonJs();
		$this->addJsGroupsAndRights();		
	}
	
	/**
	 * Prepare JS arrays with groups and tables data
	 */
	function addJsGroupsAndRights() 
	{
		$this->jsSettings['tableSettings'][$this->tName]['warnOnLeaving'] = true;
		$this->jsSettings['tableSettings'][$this->tName]['usersList'] = $this->users;
		$this->jsSettings['tableSettings'][$this->tName]['fieldsList'] = $this->fields;
		$this->jsSettings['tableSettings'][$this->tName]['groupsList'] = array();
		
		foreach ($this->groups as $grArr)
			$this->jsSettings['tableSettings'][$this->tName]['groupsList'][$grArr[0]] = $grArr[1];
	}
	
	function saveMembers( &$modifiedMembers )
	{
		foreach ($modifiedMembers as $user => $groups)
			$this->updateUserGroups($user, $groups);
		echo my_json_encode(array( 'success' => true ));
	}
	
	/**
	 * @param String user
	 * @param Array groups
	 */
	function updateUserGroups($user, $groups)
	{
		global $cman;
		$grConnection = $cman->getForUserGroups();
		// It's expected that $this->tName is equal to 'admin_members' so the page's db connection is used #9875		
		$membersWTableName = $grConnection->addTableWrappers( "carrier_ugmembers" );
		$userNameWFieldName = $grConnection->addFieldWrappers( "UserName" );
		$groupIdWFieldName = $grConnection->addFieldWrappers( "GroupID" );
		
		foreach ($groups as $group => $state)
		{		
			if ( $state == 1 )
				$sql = "insert into ". $membersWTableName ." (". $userNameWFieldName .", ". $groupIdWFieldName .") values (". $grConnection->prepareString($user) .",".$group.")";
			else
				$sql = "delete from ". $membersWTableName ." where ". $userNameWFieldName ."=". $grConnection->prepareString($user) ." and ". $groupIdWFieldName ."=".$group;
			
			$grConnection->exec( $sql );	
		}
	}
	
	function fillFields()
	{
		$this->fields[] = array("name" => "DisplayName", "visible" => 1, "caption" => "Display name");
		$this->fields[] = array("name" => "Email", "visible" => 1, "caption" => "E-mail");
		foreach($this->groups as $idx => $g)
		{
			$this->fields[] = array("name" => $g[0], "visible" => 1, "caption" => $g[1]);
		}
	}
	function eventExists($name)
	{
		return false;
	}
}
?>