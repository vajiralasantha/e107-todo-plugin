<?php 
if (!defined('e107_INIT')) { exit; }
include_once(e_HANDLER.'shortcode_handler.php');
global $tp;
$FETCH_COMPLETED_ROWS_SC = $tp->e_sc->parse_scbatch(__FILE__);

/*
// ------------------------------------------------
SC_BEGIN TODO_COMPLETED_TITLE
   $item = getcachedvars('todo_completed_row_fetch');
   return "<s>".$item["todo_title"]."</s><br /><small>".$item['todo_desc']."</small>";
SC_END

// ------------------------------------------------
SC_BEGIN TODO_COMPLETED_STATUS
   return "Completed";
SC_END

// ------------------------------------------------
SC_BEGIN TODO_COMPLETED_OPTIONS
	$item = getcachedvars('todo_completed_row_fetch');
   	$layout = "<div style='float:right;' class='btn-group'>";
	$layout .= "<button type='submit' class='btn btn-warning btn-sm' name='TODO_INCOMPLETE' id='todo-incomplete' value='".$item['todo_id']."' title='Mark incomplete'><i class='fa fa-exclamation'></i></button>";
	$layout .= "<button type='submit' class='btn btn-danger btn-sm' name='TODO_DELETE' id='todo-delete' value='".$item['todo_id']."' title='Delete' onclick='return deleteConfirm()'><i class='fa fa-times'></i></button>";
	$layout .= "</div>";
   	return $layout;
SC_END
*/
?>