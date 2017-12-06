<?php
	$v=$_GET["v"];
	$f=$_GET["f"];

	if($f == "pwd")
	{
		$l = strlen($v);
		if($l < 6)
		{
			echo "Password is WEAK : ".$v;
			echo "<br><img src='red.bmp'>";
		}
		if($l > 6 && $l < 10)
		{
			echo "Password is NORMAL : ".$v;
			echo "<br><img src='orange.bmp'>";
		}
		if($l > 10)
		{
			echo "Password is STRONG : ".$v;
			echo "<br><img src='green.bmp'>";
		}
	}
	else if($f == "eml")
	{
//		if(@ereg("^[0-9 a-z A-Z]*\(.|_)?[0-9 a-z A-Z]+\@(gmail|yahoo|hotmail|co)\.(com|in)$",$v))
		if(@ereg("^[0-9 a-z A-Z]*\@(gmail|yahoo|hotmail|co)\.(com|in)$",$v))
		{
			echo "Email ID is VALID : ".$v;
		}
		else
		{
			echo "<font color='red'>Email ID is INVALID : </font>".$v;
		}				
	}
	else if($f == "pan")
	{
		if(@ereg("^[A-Z]{5}[0-9]{4}[A-Z]{1}$",$v))
		{
			echo "PAN Card Number is VALID : ".$v;
		}
		else
		{
			echo "<font color='red'>PAN Card Number is INVALID : </font>".$v;
		}				
	}
	else if($f == "bdate")
	{
		echo $v;
		if(@ereg("^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{2,4}$",$v))
		{
			echo "Date is VALID : ".$v;
		}
		else
		{
			echo "<font color='red'>Date is INVALID : </font>".$v;
		}				
	}		
?>
