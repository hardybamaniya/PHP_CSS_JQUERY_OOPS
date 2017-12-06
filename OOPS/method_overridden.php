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
			echo $this->name."<br>";
		}
	}
	class submain extends main
	{
		var $nm;
		function set2($nm)
		{
			$this->nm = $nm;
		}
		function get()
		{
			echo $this->nm."<br>";
			main::get();
		}
	}
	$obj = new submain();
	$obj->set("Base Class");
	$obj->set2("Derived Class");
	$obj->get();
?>