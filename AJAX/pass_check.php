<?php
	$t = $_GET['a'];
	
	$l = strlen($t);
	
	if($l<=5)
	{
		echo "<font color='#FF0000'>Password is Weak</font>";
	}
	else if($l>5 && $l<=7)
	{
		echo "<font color='#FF9900'>Password is Normal</font>";
	}
	else
	{
		echo "<font color='#33CC00'>Password is Strong</font>";
	}
?>

