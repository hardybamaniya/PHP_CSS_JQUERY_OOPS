<?php
	include("classa.php");
	
	$s = file_get_contents('store.txt');
	
	$a = unserialize($s);
	
	$a->show_one();
	
?>