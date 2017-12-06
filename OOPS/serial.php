<?php
	class Student
	{
		var $name;
		var $age;
		function Student($n = "unnamed", $a = "0")
		{
			$this->name = $n;
			$this->age = $a;
		}
		function getname()
		{
			return ($this->name);
		}
		function getage()
		{
			return ($this->age);
		}
	}
	
	$sd_data = new Student("Abc","1");
	$value = serialize($sd_data);
	$data = unserialize($value);
	$name = $data->getname();
	$age = $data->getage();
	echo $name."<br>";
	echo $age."<br>";
?>