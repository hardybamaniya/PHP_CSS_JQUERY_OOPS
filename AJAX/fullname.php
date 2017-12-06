<html>
<head>
<script type="text/javascript">
function ajax(container,value)
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
	xmlhttp.open("GET","get_fullname.php?v="+value,true);
	xmlhttp.send();
}
</script>
</head>
<body>
<form>
<table cellpadding="5" cellspacing="0" border="1">
<tr>
	<td>Enter Name : </td>
    <td><input type="text" name="nm" onBlur="ajax('txtnm',this.value);"></td>
    <td width="100" id="txtnm">&nbsp;</td>
</tr>
<tr>
	<td>Enter Father's Name : </td>
    <td><input type="text" name="fnm" onBlur="ajax('txtfnm',this.value);"></td>
    <td id="txtfnm">&nbsp;</td>
</tr>
<tr>
	<td>Enter Surname : </td>
    <td><input type="text" name="snm" onBlur="ajax('txtsnm',this.value);"></td>
    <td id="txtsnm">&nbsp;</td>
</tr>
</form>
</body>
</html>