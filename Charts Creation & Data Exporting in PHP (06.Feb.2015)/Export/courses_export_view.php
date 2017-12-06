<?php
	$base="export_db";
	$server="localhost";
	$user="root";
	$pass="";

	mysql_connect($server, $user, $pass) or die('Server connection not possible.');
	mysql_select_db($base)               or die('Database connection not possible.');
?>
<html>
<head>
<script>
function opt(fac)
{
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
				document.getElementById("optSem").innerHTML=xmlhttp.responseText;
			}
		}
	xmlhttp.open("GET","opt.php?f="+fac,true);
	xmlhttp.send();
}

function exp_data(n)
{
	if (n == "exp_cs")
	{
		var fac = document.forms[0].faculty.value;
		var sem = document.forms[0].sem.value;
		var queryString = "expdata.php?fac=" + fac + "&sem=" + sem;
		window.open(queryString);
	}
}
</script>
</head>
<body onLoad="document.forms[0].faculty.focus();">
<h2>View Various Course-wise Subject List</h2>
<form name="frm_exp-sheet" method="post" action="view_courses.php">
<table border="0" cellpadding="10" cellspacing="0">
<tr>
    <td>Faculty : </td>
    <td>
    <select id="faculty" name="faculty" onchange="return opt(this.value)" style="padding:3px;">
        <option selected="selected">-- Select Course --</option>
        <option id="bca" name="bca" value="bca">B.C.A.</option>
        <option id="msc" name="msc" value="msc">M.Sc. (I.T. & C.A.)</option>
        <option id="pgdca" name="pgdca" value="pgdca">P.G.D.C.A.</option>
    </select>
    </td>
    <td>Semester : </td>
    <td>
    <span id="optSem">
    <select id='sem' name='sem' style="padding:3px;">
    	<option selected='selected'>-- Select Sem. --</option>
    </select>
    </span>
    </td>
</tr>
<tr>
    <td colspan="4" align="center">
    <input type="submit" name="sub_ms" value="View" class="button" style="padding:5px; width:70px">&nbsp;&nbsp;
    <input type="button" name="exp_cs" value="Export" onClick="exp_data(this.name);" style="padding:5px; width:70px">
	</td>
</tr>
</table>
</form>
</body>
</html>