<?php    
	session_start();
	//check if authorized
	if(!isset($_SESSION["username"]))
	{
		header("Location:login.php");
	}
?>
<html>
<head>
	<title>Chat Box</title>
</head>
<body>
<textarea id="log_box" cols="20" rows="10"></textarea>
<br/>
<input id="message" type="text" />
<input type="button" value="ok" onClick="send_message()" />
<span id="send_result"></span>
<script type="text/javascript">
setInterval(get_log,100);
function get_log()
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			var prevScrollTop = document.getElementById("log_box").scrollTop;
			var prevScrollHeight =  document.getElementById("log_box").scrollHeight;
			document.getElementById("log_box").value = xmlhttp.responseText;
			document.getElementById("log_box").scrollTop = prevScrollTop +(document.getElementById("log_box").scrollHeight - prevScrollHeight);
		}
	}
	xmlhttp.open("GET","get_log.php",true);
	xmlhttp.send();             
}

function send_message()
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("send_result").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("POST","send_message.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	
	xmlhttp.send("message="+document.getElementById("message").value);
	document.getElementById("message").value = "";
}
</script>
</body>
</html>