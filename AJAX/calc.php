<html>
<head>
<script type="text/javascript">
function calc(a,b,o)
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
				document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
			}
		}
	xmlhttp.open("GET","get_calc.php?a="+a+"&b="+b+"&o="+o,true);
	xmlhttp.send();
}
</script>
</head>
<body>
<form>
Enter First Value : 
<input type="text" name="a"><br>
Enter Second Value :
<input type="text" name="b"><br>
Operation to perform [ + - * / ] : 
<input type="text" name="o" onBlur="calc(document.forms[0].a.value,document.forms[0].b.value,this.value);">
</form>
<br />
<div id="txtHint"><b>Calculation will be listed here.</b></div>
</body>
</html>