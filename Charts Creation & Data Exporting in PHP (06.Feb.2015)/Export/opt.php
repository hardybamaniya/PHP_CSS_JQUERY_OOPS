<?php
	$fac=$_GET['f'];
//	echo $fac;

	echo "<select id='sem' name='sem' style='padding:3px;'>";
	echo "<option selected='selected'>-- Select One --</option>";
	if($fac == "msc")
	{
		echo "<option id='s1' name='s1' value='1'>Semester - 1</option>".
			 "<option id='s2' name='s2' value='2'>Semester - 2</option>".
		     "<option id='s3' name='s3' value='3'>Semester - 3</option>";
	}				
	else if($fac == "pgdca")
	{
		echo "<option id='s1' name='s1' value='1'>Semester - 1</option>".
			 "<option id='s2' name='s2' value='2'>Semester - 2</option>";
	}
	else if($fac == "bca")
	{
		echo "<option id='s1' name='s1' value='1'>Semester - 1</option>".
			 "<option id='s2' name='s2' value='2'>Semester - 2</option>".
			 "<option id='s3' name='s3' value='3'>Semester - 3</option>".
			 "<option id='s4' name='s4' value='4'>Semester - 4</option>".
			 "<option id='s5' name='s5' value='5'>Semester - 5</option>".
			 "<option id='s6' name='s6' value='6'>Semester - 6</option>";
	}				
	echo "</select>";
?>
