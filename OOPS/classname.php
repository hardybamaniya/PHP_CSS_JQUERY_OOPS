<?php
	class main
	{
		var $name;
		function set($nm)
		{
			$this->name = $nm;
		}
		function get()
		{
			echo "Name is ".$this->name;
		}
	}
	$obj = new main();
	$obj->set("Ram");
	$obj->get();
?>