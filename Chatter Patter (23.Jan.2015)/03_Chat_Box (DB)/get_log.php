<?php    
	session_start();
	if(!isset($_SESSION["username"]))
	{
		header("Location:login.php");
	}
	
	$handle = fopen("log.txt","r");
	
	while (!feof($handle)) 
	{
		echo fgets($handle);
	}
	
	fclose($handle);

?>