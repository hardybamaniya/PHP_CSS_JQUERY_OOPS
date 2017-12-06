<?php
	$q=$_GET["q"];

	$con = mysql_connect("localhost","root","");
	mysql_select_db("ajax_demo",$con);
	
	$s="SELECT city FROM location WHERE state = '".$q."'";

	$res = mysql_query($s);
?>
<select name="city">
<option value="0"> - Select City - </option>
<?php
	
	while($rec = mysql_fetch_row($res))
	{
?>
<option value="<?php echo $rec[0]; ?>"><?php echo $rec[0]; ?></option>
<?php
	}
?>
</select>