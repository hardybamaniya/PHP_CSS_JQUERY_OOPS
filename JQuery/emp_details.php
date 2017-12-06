<?php
	$eid = $_POST['eid'];
	$ename = $_POST['ename'];
	
	$con = mysql_connect("localhost", "root", "");
	$db = mysql_select_db("emp_details", $con);
?>
<hr color="#FF0000" style="width:500px" align="center" size="1">
<table style="border-collapse:collapse" cellpadding="5" bordercolor="#CCCC66" border="1" align="center">
<tr>
	<th width="50">ID</th>
	<th width="140">Employee Name</th>
	<th width="100">Designation</th>
	<th width="120">Department</th>
	<th width="80">Salary</th>
	<th width="90">Hiredate</th>
</tr>
<?php
	$sql = "SELECT * FROM emp WHERE ename = '".$ename."' AND eid = '".$eid."'";
	$result = mysql_query($sql);
	while($rec = mysql_fetch_array($result))
	{
?>
<tr>
	<td><?php echo $rec[0]; ?></td>
	<td><?php echo $rec[1]; ?></td>
	<td><?php echo $rec[2]; ?></td>
	<td><?php echo $rec[3]; ?></td>
	<td align="right"><?php echo $rec[4]; ?></td>
	<td align="center"><?php
		$dt = $rec[5];
		list($yy,$mm,$dd) = @split('[/.-]',$dt);
		echo $dd."/".$mm."/".$yy;
		?>
	</td>
</tr>
<?php
	}
?>
</table>
