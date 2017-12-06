<?php

$dbhost= 'localhost';
$dbuser= 'root';

$conn =mysql_connect($dbhost, $dbuser)
	or die ("Could not connect to mysql");

$dbname= 'bank';
mysql_select_db($dbname);

?>
