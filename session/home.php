<?php
	session_start();
	if(!isset($_SESSION["username"]))
	{
		header("Location:user_login.html");
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home Page</title>
</head>

<body>
Welcome, <?php echo $_SESSION["username"]; ?>
&nbsp;<a href="logout.php">Log Out</a>

</body>
</html>
