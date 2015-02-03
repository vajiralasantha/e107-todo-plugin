<?php
	class DBAccess{
		
		function setStatus($id, $status){
			global $sql;
			$result = $sql->db_Update("todo_list", "todo_status = ".$status." WHERE todo_id=".$id."", false);
			
			if($status == 1)
				$status = "completed";
			else
				$status = "incomplete";
				
			if ($result !== FALSE)
				$layout = "<h6 class='msg s'>Record marked as $status.</h6>";
			else
				$layout = "<h6 class='msg e'>Unable to mark as $status.</h6>";
				
			return $layout;
		}
		
		function deleteRecord($id){
			global $sql;
			$result = $sql->db_Delete("todo_list", "todo_id=".$id."", false);
			if ($result !== FALSE)
				$layout .= "<h6 class='msg s'>Record deleted.</h6>";
			else
				$layout .= "<h6 class='msg e'>Unable to delete record.</h6>";
		}
	}
?>