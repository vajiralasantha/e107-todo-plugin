<?php
$eplug_admin = true;
require_once("../../class2.php");
if(!getperms("P")){ header("location:" . e_BASE . "index.php"); }
e107_require_once(e_PLUGIN."todo/lib/DB_ACCESS.php");
include(e_PLUGIN."todo/templates/fetch_completed_rows_tp.php");
include(e_PLUGIN."todo/shortcodes/fetch_completed_rows_sc.php");
$eplug_js[] = e_PLUGIN."todo/js/todo.js";
$eplug_css[] = e_PLUGIN."todo/css/todo.css";
require_once(e_ADMIN."auth.php");

global $sql;

$db_access = new DBAccess;

$layout  = "";
$user_id = $currentUser["user_id"];

if (isset($_POST["TODO_INCOMPLETE"])) {
	$id = $_POST["TODO_INCOMPLETE"];
	$layout .= $db_access->setStatus($id,0);	//0 means incomplete
}

if (isset($_POST["TODO_DELETE"])) {
	$id = $_POST["TODO_DELETE"];
	$layout .= $db_access->deleteRecord($id);
}

$rowcount = $sql->db_Select("todo_list","*", "WHERE todo_user = ".$user_id." AND todo_status = 1 ORDER BY todo_id", "WHERE", false);
$layout .= "<h6 class='msg s'>".$rowcount." completed record(s) found.</h6>";

$layout .= "<form action='".e_SELF."' method='post' id='completed-activities'>";
$layout .= "<table style='".ADMIN_WIDTH."' class='table table-hover'>";
$layout .= "<thead>";
$layout .= "<tr>";
$layout .= "<th>TITLE</th>";
$layout .= "<th>STATUS</th>";
$layout .= "<th><div class='text-right'>OPTIONS</div></th>";
$layout .= "</tr>";
$layout .= "</thead>";
$layout .= "<tbody>";

while($row = $sql->db_Fetch()) {
	cachevars('todo_completed_row_fetch', $row);
	// Parse the template to put the values into the HTML.
	$layout .= $tp->parseTemplate($FETCH_COMPLETED_ROWS_TEMPLATE, FALSE, $FETCH_COMPLETED_ROWS_SC);   	
}

$layout .= "</tbody>";
$layout .= "</table>";
$layout .= "</form>";

$ns->tablerender(TODO_MENU_COMPLETED_ACTIVITIES, $layout);

require_once(e_ADMIN."footer.php");
?>