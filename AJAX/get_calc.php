<?php
	$a=$_GET["a"];
	$b=$_GET["b"];
	$o=$_GET["o"];
	
	switch($o)
	{
		case "sum":
			echo $a + $b;
			break;
		case "-":
			echo $a - $b;
			break;
		case "*":
			echo $a * $b;
			break;
		case "/":
			echo $a / $b;
			break;

		default:
			echo "Wrong Choice";
	}
?>
