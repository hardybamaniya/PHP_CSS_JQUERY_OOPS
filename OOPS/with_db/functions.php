<?php
	include_once("config.php");
	
	class User
	{
		public function __construct()
		{
			$db = new DB_Class();
		}
		
		public function check_login($username, $password)
		{
			//$password = md5($password);
			$result = mysql_query("SELECT uid FROM users WHERE user = '".$username."' AND pass = '".$password."'");
			$user_data = mysql_fetch_array($result);
			$no_row = mysql_num_rows($result);
			if($no_row == 1)
			{
				$_SESSION["login"] = TRUE;
				$_SESSION["uid"] = $user_data["uid"];
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}

		public function get_fullname($uid)
		{
			$result = mysql_query("SELECT user FROM users WHERE uid = $uid");
			$user_data = mysql_fetch_array($result);
			echo $user_data["user"];
		}

		public function get_session()
		{
			return $_SESSION["login"];
		}
		
		public function user_logout()
		{
			$_SESSION["login"] = FALSE;
			unset($_SESSION["uid"]);
			session_destroy();
			header("Location:login.php");
		}
	}
?>