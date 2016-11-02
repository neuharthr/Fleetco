<?php

function getMenuNodes_adminarea($menuNodesObject)
{
	// create menu nodes arr
	$menuNodesObject->menuNodes["adminarea"] = array();
		//Admin Area menu items
		// admin_rights item
		$menuNode = array();
		$menuNode["id"] = "1";
		$menuNode["name"] = "admin_rights";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "admin_rights";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "AdminArea";
		$menuNode["openType"] = "None";	
				$menuNode["title"] = "Permissions";
		$menuNode["href"] = GetTableLink("admin_rights", "list");
		$menuNodesObject->menuNodes["adminarea"][] = $menuNode;
		// admin_members item
		$menuNode = array();
		$menuNode["id"] = "2";
		$menuNode["name"] = "admin_members";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "admin_members";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "AdminArea";
		$menuNode["openType"] = "None";	
				$menuNode["title"] = "Assign users to groups";
		$menuNode["href"] = GetTableLink("admin_members", "list");
		$menuNodesObject->menuNodes["adminarea"][] = $menuNode;
		// admin_users item
		$menuNode = array();
		$menuNode["id"] = "3";
		$menuNode["name"] = "admin_users";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "admin_users";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "AdminArea";
		$menuNode["openType"] = "None";	
				$menuNode["title"] = "Add/Edit users";
		$menuNode["href"] = GetTableLink("admin_users", "list");
		$menuNodesObject->menuNodes["adminarea"][] = $menuNode;
}
	
?>
