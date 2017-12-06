<html>
<head>
<script type="text/javascript">
function showCity(str)
{
	if (str=="")
	{
		document.getElementById("city").innerHTML="";
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
				document.getElementById("city").innerHTML=xmlhttp.responseText;
			}
		}
	xmlhttp.open("GET","get_location.php?q="+str,true);
	xmlhttp.send();
}
</script>
</head>
<body>
<table>
<tr>
	<td>
    <select name="state" onChange="showCity(this.value)">
    <option value="0">- Select State - </option>
    <?php
        $con = mysql_connect("localhost","root","");
        mysql_select_db("ajax_demo",$con);
        
        $sql="SELECT distinct state FROM location";
        $result = mysql_query($sql);
    
        while($row = mysql_fetch_row($result))
        {
    ?>
    <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></option>
    <?php
        }
    ?>
    </select>
    </td>
	<td id="city">
    <select name="c">
    <option value="0"> - Select City - </option>
    </select>
    </td>
</tr>
</table>
</body>
</html>