<?php
	session_start();
	include_once("functions.php");	
	$user = new User();
	if(isset($_POST["logout"]) or $_SESSION["login"] == FALSE)
	{
		$user->user_logout();
	}
?>
<html>
<head>
	<title>Home Page</title>
<style>
input
{
	padding:5px;
	font-family:Georgia;
	letter-spacing:1px;
}
</style>    
</head>
<body>
<font face="Georgia">
<h2 align="center">Welcome to Home Page</h2>
<table width="600" height="400" border="1" align="center" cellpadding="5" cellspacing="0">
<tr>
    <form method="post" action="">
    <td valign="middle" align="right" height="40" style="color: #FFFFFF; background-color:#CC9900">
    Welcome, 
    <?php
        echo $user->get_fullname($_SESSION["uid"]);
    ?>
    <input type="submit" name="logout" value="Logout">
    </td>
    </form>
</tr>
<tr>
	<td align="center"><img src="draw.jpg"></td>
</tr>
</table>
</font>
</body>
</html>