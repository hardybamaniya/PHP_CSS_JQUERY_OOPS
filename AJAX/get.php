<html>
<head>
<script type="text/javascript">
function showUser(str)
{
	if (str=="")
	{
		document.getElementById("txtHint").innerHTML="";
		return;
	}
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
			}
		}
	xmlhttp.open("GET","getuser.php?q="+str,true);
	xmlhttp.send();
}
</script>
</head>
<body>
<form>
<select name="users" onChange="showUser(this.value)">
<option value="">Select a person:</option>
<?php
	$con = mysql_connect("localhost","root","");
	mysql_select_db("ajax_demo",$con);
	
	$sql="SELECT id,fname FROM user";
	$result = mysql_query($sql);

	while($row = mysql_fetch_array($result))
	{
?>
<option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
<?php
	}
?>
</select>
</form>
<br />
<div id="txtHint"><b>Person info will be listed here.</b></div>

</body>
</html>