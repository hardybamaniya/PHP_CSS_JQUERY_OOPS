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
			echo "Name is ".$this->name."<br>";
		}
	}
	class submain extends main
	{
		var $name;
		function __construct()
		{
			echo "Derived Class<br>";
		}
	}
	$obj = new submain();
	$obj->set("Bharat");
	$obj->get();
?>