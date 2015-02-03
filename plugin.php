<?php

if(!defined('e107_INIT')){ exit(); }

//Insert language pack
include_lan(e_PLUGIN.'todo/languages/'.e_LANGUAGE.'.php');

//Plugin information
$eplug_name = TODO_PLUGIN_NAME;
$eplug_version = '0.1';
$eplug_author = TODO_PLUGIN_AUTHOR;
$eplug_url = TODO_PLUGIN_URL;
$eplug_email = TODO_PLUGIN_EMAIL;
$eplug_folder = "todo";
$eplug_description = TODO_PLUGIN_DESC;
$eplug_compatible = "e107v0.7+";

$eplug_menu_name = true;

// Main admin area
$eplug_conffile = "admin_todo.php";

//Icons and caption
$eplug_icon = $eplug_folder."/img/todo-64.png";
$eplug_icon_small = $eplug_folder."/img/todo-32.png";
$eplug_caption = TODO_PLUGIN_CAPTION;

//Databases
$eplug_table_names = array("todo_list");

$eplug_tables = array(
"CREATE TABLE ".MPREFIX."todo_list (
	`todo_id`		INT(11) NOT NULL AUTO_INCREMENT,
	`todo_user` 	INT(11) NOT NULL,
	`todo_title` 	VARCHAR(254) NOT NULL,
	`todo_desc` 	VARCHAR(254) NOT NULL,
	`todo_status` 	TINYINT(1) NOT NULL,
	`todo_date` 	DATE NOT NULL,
	PRIMARY KEY (`todo_id`))"
	);

//Install and uninstall functions
if(!function_exists("todo_install")) {
	function todo_install(){
		//echo "Install function executed";	
	}
}

if(!function_exists("todo_uninstall")) {
	function todo_uninstall(){
		//echo "uninstall function executed";
	}
}

//Upgrade and install messages
$eplug_done = TODO_PLUGIN_INSTALLED;
$eplug_upgrade_done = TODO_PLUGIN_UPGRADED;
?>