<?php
	session_start();
	include_once("functions.php");
	
	$user = new User();
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$login = $user->check_login($_POST["username"], $_POST["password"]);
		if($login)
		{
			//Registration Success
			if($user->get_session())
			{
				header("location:home.php");
			}
		}
		else
		{
			//Registration Failed
			$flag = TRUE;
		}
	}
?>
<html>
<head>
	<title>Login</title>
<style>
input
{
	padding:5px;
	font-family:Georgia;
	letter-spacing:1px;
}
</style>
</head>
<body><!-- onLoad="document.login.username.focus();" -->
<form method="post" action="login.php" id="login_form" name="login">
<table cellpadding="10" cellspacing="0" align="center" width="320" border="1" style="border-collapse:collapse; font-family:Georgia" bordercolor="#dcdcdc">
<tr>
	<th style="color: #FFFFFF; background-color:#CC9900" colspan="2">Login Form</th>
</tr>
<tr>
	<td><label>Username : </label></td>
	<td><input type="text" name="username" required="true" /></td>
</tr>
<tr>
	<td><label>Password : </label></td>
    <td><input type="password" name="password" required="true" /></td>
</tr>
<tr>
	<td colspan="2" align="center">
	<input type="hidden" name="flag" value="login" />
	<input type="submit" name="login_btn" value="Login" />
    </td>
</tr>
</table>
</form>
</body>
</html>
<?php
	if(isset($flag))
	{
		echo "<font color='#CC9900'><h3 align='center'>Username / Password is Incorrect</h3></font>";
	}
?>