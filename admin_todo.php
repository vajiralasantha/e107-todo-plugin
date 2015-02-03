<?php
$eplug_admin = true;
require_once("../../class2.php");
if(!getperms("P")){ header("location:" . e_BASE . "index.php"); }
$eplug_js[] = e_PLUGIN."todo/js/todo.js";
$eplug_js[] = "//tinymce.cachefly.net/4.1/tinymce.min.js";
$eplug_css[] = e_PLUGIN."todo/css/todo.css";
require_once(e_ADMIN."auth.php");

global $sql;

$layout  = "";
$mode = "n";	//Form mode, n- add new, e- edit record
$todo_id = "";	//For editing records
$title = "";
$description = "";
$user_id = $currentUser["user_id"];

$layout = "<h6 class='msg e' id='todo-error'>Please fill the both title and description.</h6>";

//Form edit mode for editing records
if (isset($_POST["TODO_EDIT"])) {
	$mode = "e";
	$todo_id = $_POST["TODO_EDIT"];
	$sql->db_Select("todo_list","*", "WHERE todo_user = ".$user_id." AND todo_id = ".$todo_id, "WHERE", false);
	$row = $sql->db_Fetch();
	$title = $row['todo_title'];
	$description = $row['todo_desc'];
}

if (isset($_POST["save"])) {
	$title = $_POST["todo_title"];
	$description = $_POST["todo_description"];
	$todo_id = $_POST["TODO_ID"];
	$mode = $_POST["MODE"];
	
	//If edit mode is enabled, edit the record
	if($mode == "e"){
		$res = $sql->db_Update("todo_list", "todo_title = '".$title."', todo_desc = '".$description."' WHERE todo_id=".$todo_id."", false);
		if($res != false){ //If the update is success, redirect to the active activities page
			header("Location: admin_todo_active.php?update=done");
			exit();
		}
	}
	else if ($mode == "n"){	//If the new mode is enabled, add new record
		$insert = array("todo_user" => $user_id, "todo_title" => $title, "todo_desc" => $description, "todo_status" => "0", "todo_date" => date("Y-m-d"));
		$res = $sql->db_Insert("todo_list", $insert);
		
		if($res != FALSE){
			$layout = "<h6 class='msg s'>Successfully added.</h6>";
			$title = "";
			$description = "";
		}
	}
}

$layout .= "<form action='".e_SELF."' method='post' id='add-new-record'>";
$layout .= "<table style='".ADMIN_WIDTH."' class='table table-hover'>";
$layout .= "<tr>";
$layout .= "<td width='25%' class='fcaption'>Title</td>";
$layout .= "<td width='75%'><input class='form-control' type='text' name='todo_title' id='todo-title' style='width:100%;' value='".$title."' /></td>";
$layout .= "</tr>";
$layout .= "<tr>";
$layout .= "<td class='fcaption'>Description</td>";
$layout .= "<td><textarea class='form-control' name='todo_description' id='todo-description' rows=10 style='width:100%;'>".$description."</textarea></td>";
$layout .= "</tr>";
$layout .= "<tr>";
$layout .= "<td>&nbsp;</td>";
$layout .= "<td style='text-align: right;'><button type='submit' name='save' value='Save' class='btn btn-primary'>Save</button></td>";
$layout .= "</tr>";
$layout .= "</table>";
$layout .= "<input type='hidden' name='TODO_ID' value='".$todo_id."' />";
$layout .= "<input type='hidden' name='MODE' value='".$mode."' />";	//Store form mode value. n,e
$layout .= "</form>";

if($mode == "n")
	$ns->tablerender(TODO_MENU_CREATE, $layout);
else
	$ns->tablerender(TODO_MENU_EDIT, $layout);
	
require_once(e_ADMIN."footer.php");
?>