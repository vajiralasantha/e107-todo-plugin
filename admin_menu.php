<?php

include_lan(e_PLUGIN.'todo/languages/'.e_LANGUAGE.'.php');

	$menutitle = TODO_MENU_TITLE;
	
	$var['admin_create']['text'] = TODO_MENU_CREATE;
	$var['admin_create']['link'] = 'admin_todo.php';
			
	$var['admin_active']['text'] = TODO_MENU_ACTIVE_ACTIVITIES;
	$var['admin_active']['link'] = 'admin_todo_active.php';
	
	$var['admin_completed']['text'] = TODO_MENU_COMPLETED_ACTIVITIES;
	$var['admin_completed']['link'] = 'admin_todo_completed.php';
	
	show_admin_menu($menutitle, rtrim(e_PAGE,".php"), $var);

?>			