<?php
	session_start();
	if(!isset($_SESSION["username"]))
	{
		header("Location:login.php");
	}
?>
<html>
<head>
	<title>Home Page</title>
</head>

<body>
Welcome, <?php echo $_SESSION["username"]; ?>&nbsp;<a href="logout.php">Log Out</a>
<br><br>
<a href="chat_box.php">Chat Box</a>

</body>
</html>
