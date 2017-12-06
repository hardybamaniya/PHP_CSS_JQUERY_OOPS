<?php
class A
{
	var $one;
	function __construct()
	{
		$this->one = "Mehul";
	}
	function show_one()
	{
		echo "Content is in original format : ".$this->one; 
	}
}
?>