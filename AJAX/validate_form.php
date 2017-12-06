<html>
<head>
<script type="text/javascript">
function ajax(container,value,flag)
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
				document.getElementById(container).innerHTML=xmlhttp.responseText;
			}
		}
	xmlhttp.open("GET","validate_it.php?v="+value+"&f="+flag,true);
	xmlhttp.send();
}
</script>
</head>
<body>
<form>
<table cellpadding="5" cellspacing="0" border="1">
<tr>
	<td>Password : </td>
    <td><input type="password" name="pwd" onkeyup="ajax('txtpwd',this.value,this.name);"></td>
    <td width="300" id="txtpwd">&nbsp;</td>
</tr>
<tr>
	<td>Birthdate : </td>
    <td><input type="text" name="bdate" onblur="ajax('txtbd',this.value,this.name);"></td>
    <td id="txtbd">&nbsp;</td>
</tr>
<tr>
	<td>Email ID : </td>
    <td><input type="text" name="eml" size="60" onblur="ajax('txteml',this.value,this.name);"></td>
    <td id="txteml">&nbsp;</td>
</tr>
<tr>
	<td>PAN Card Number : </td>
    <td><input type="text" name="pan" onblur="ajax('txtpan',this.value,this.name);"></td>
    <td id="txtpan">&nbsp;</td>
</tr>
</table>
</form>
</body>
</html>