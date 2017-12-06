<html>
<head>
<link type="text/css" href="../AJAX/Personal_css.css" rel="stylesheet">
<script type="text/javascript">

	function show(tt)
	{
		if(window.XMLHttpRequest)
		{
			xmlHttp = new XMLHttpRequest ();
		}
		else
		{
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlHttp.onreadystatechange = function()
		{
			if(xmlHttp.readyState==4 && xmlHttp.status==200)
			{
			 	document.getElementById("chk").innerHTML=xmlHttp.responseText;

			}
		}

		xmlHttp.open("GET","name.php?a="+tt,true);
		xmlHttp.send();

	}
</script>
</head>
<body bgcolor="#666666">
	<table>
	<tr>
		<td>
			<font color="#FFFFFF">   ENTER NAME </font><b>:</b><input type="text" name="txt" onKeyUp="show(this.value);">
		</td>
		<td id="chk">
		</td>
	</tr>
	</table>

</body>
</html>
