<html>
<head>
	<title>Login Form</title>
</head>
<body onLoad="document.frm.u.focus();">
<h1 align="center">Login Page</h1>
<form name="frm" method="post" action="user_chk.php">
Username : <input type="text" name="u">
<br><br>
Password : <input type="password" name="p">
<br>
<input type="submit" value="Log In">
</form>
</body>
</html>