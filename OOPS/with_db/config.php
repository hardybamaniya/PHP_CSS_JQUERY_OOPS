<?php
	define("DB_SERVER", "localhost");
	define("DB_USERNAME", "root");
	define("DB_PASSWORD", "");
	define("DB_DATABASE", "oops");
	
	class DB_Class
	{
		function __construct()
		{
			$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die("OOPs Connection Error -> ".mysql_error());
			mysql_select_db(DB_DATABASE, $connection) or die("Database Error -> ".mysql_error());
		}
	}
?>