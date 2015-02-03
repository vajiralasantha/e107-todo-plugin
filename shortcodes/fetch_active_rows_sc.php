<?php 
if (!defined('e107_INIT')) { exit; }
include_once(e_HANDLER.'shortcode_handler.php');
global $tp;
$FETCH_ACTIVE_ROWS_SC = $tp->e_sc->parse_scbatch(__FILE__);

/*
// ------------------------------------------------
SC_BEGIN TODO_ACTIVE_TITLE
   $item = getcachedvars('todo_active_row_fetch');
   return $item["todo_title"]."<br /><small>".$item['todo_desc']."</small>";
SC_END

// ------------------------------------------------
SC_BEGIN TODO_ACTIVE_STATUS
   $item = getcachedvars('todo_active_row_fetch');
   return "Incomplete";
SC_END

// ------------------------------------------------
SC_BEGIN TODO_ACTIVE_OPTIONS
   $item = getcachedvars('todo_active_row_fetch');
   $layout = "<div style='float:right;' class='btn-group'>";
	$layout .= "<button type='submit' class='btn btn-success btn-sm' name='TODO_COMPLETED' id='todo-completed' value='".$item['todo_id']."' title='Mark Completed'><i class='fa fa-check-square-o'></i></button>";
	$layout .= "<button type='submit' class='btn btn-default btn-sm' name='TODO_EDIT' id='todo-edit' value='".$item['todo_id']."' title='Edit' onClick='redirectForm()'><i class='fa fa-pencil-square-o'></i></button>";
	$layout .= "<button type='submit' class='btn btn-danger btn-sm' name='TODO_DELETE' id='todo-delete' value='".$item['todo_id']."' title='Delete' onclick='return deleteConfirm()'><i class='fa fa-times'></i></button>";
	$layout .= "</div>";
   return $layout;
SC_END
*/


?>