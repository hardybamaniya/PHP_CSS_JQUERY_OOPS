<?php
	$user = $_POST["u"];
	$pass = $_POST["p"];
	
	if($user == "admin" && $pass == "abcde")
	{
		session_start();
		$_SESSION["username"] = $user;
		header("Location:home.php");
	}
	else
	{
		header("Location:user_login.html");
	}
?>