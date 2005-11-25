<?php

/*
	Datatypes:
	- INTEGER
	- DOUBLE
	- CURRENCY
	- VARCHAR
	- TEXT
	- DATE
*/



// Name of the list
$liste["name"] 				= "mail_blacklist";

// Database table
$liste["table"] 			= "mail_blacklist";

// Index index field of the database table
$liste["table_idx"]			= "blacklist_id";

// Search Field Prefix
$liste["search_prefix"] 	= "search_";

// Records per page
$liste["records_per_page"] 	= 15;

// Script File of the list
$liste["file"]				= "mail_blacklist_list.php";

// Script file of the edit form
$liste["edit_file"]			= "mail_blacklist_edit.php";

// Script File of the delete script
$liste["delete_file"]		= "mail_blacklist_del.php";

// Paging Template
$liste["paging_tpl"]		= "templates/paging.tpl.htm";

// Enable auth
$liste["auth"]				= "yes";


/*****************************************************
* Suchfelder
*****************************************************/

$liste["item"][] = array(	'field'		=> "server_id",
							'datatype'	=> "VARCHAR",
							'formtype'	=> "TEXT",
							'op'		=> "like",
							'prefix'	=> "%",
							'suffix'	=> "%",
							'width'		=> "",
							'value'		=> "");

$liste["item"][] = array(	'field'		=> "address",
							'datatype'	=> "VARCHAR",
							'formtype'	=> "TEXT",
							'op'		=> "like",
							'prefix'	=> "%",
							'suffix'	=> "%",
							'width'		=> "",
							'value'		=> "");


?>