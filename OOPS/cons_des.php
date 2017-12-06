<?php
	class main
	{
		var $name;
		function __construct($nm)
		{
			$this->name = $nm;
			echo "Initialized<br>";
		}
		function display()
		{
			echo "Name is ".$this->name."<br>";
		}
		function __destruct()
		{
			echo "Released";
		}
	}
	$obj = new main("Laxman");
	$obj->display();
?>