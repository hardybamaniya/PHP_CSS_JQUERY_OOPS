<?php
	$q=$_GET["q"];
	
	$con = mysql_connect("localhost","root","");
	mysql_select_db("ajax_demo",$con);
	
	$sql="SELECT * FROM user WHERE id = '".$q."'";
	
	$result = mysql_query($sql);
?>
<table cellpadding="5" style="border-collapse: collapse;" bordercolor="#333333" border="1">
    <tr>
    <th width="20">ID</th>
    <th width="80">Firstname</th>
    <th width="80">Lastname</th>
    <th width="80">City</th>
  </tr>
<?php
	while($row = mysql_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
		echo "</tr>";
	}
	mysql_close($con);
?>
</table>