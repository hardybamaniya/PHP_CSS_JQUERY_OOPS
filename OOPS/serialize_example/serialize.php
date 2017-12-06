<?php
	include("classa.php");
	
	$a = new A;
	
	$s = serialize($a);
	
	file_put_contents('store.txt',$s);
	
	echo "Content is converted in Byte-Stream Format : ".$s; 
	
?>