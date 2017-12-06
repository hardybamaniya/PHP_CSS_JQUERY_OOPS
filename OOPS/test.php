<?php
	class student
	{
		var $name;
		var $age;
		function student($n = "unnamed", $a = 0)
		{
			$this->name = $n;
			$this->age = $a;
		}
		function getage()
		{
			return $this->age;
		}
		function getname()
		{
			return $this->name;
		}
	}
	
	$sd_data = new student("ABC",20);

	$val = serialize($sd_data);
	$data = unserialize($val);

	$name = $data->getname();
	$age =  $data->getage();
	
	echo $data->name;
	echo $data->age;
	
?>