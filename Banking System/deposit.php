<?php
session_start();
if ($_SESSION['xrole'] != 'user')
{
	header("Location: main.php");
	exit();
}
?>
<html>
<head>
<script language="JavaScript">
		function validated(){

			var depos = document.s.depos.value;
			var deposint = parseInt(depos);
			var depos2 = depos <= 9;
			
			if(depos==""){	
				window.alert("Please enter deposit value!");
				document.s.depos.focus();
				return false;
			}
			if(isNaN(deposint)){	
				window.alert("Please enter deposit value!");
				document.s.depos.focus();
				return false;
			}
			if(depos2){	
				window.alert("Sorry, deposit must not less than $10!");
				return false;
			}
			
}
</script>
</head>
<body bgcolor='#333333'>
<br><br><br><br><br><br><br><br>
<form action='deposit_write.php' method='post'  name='s' onsubmit='return validated()';>
<table width="50%" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#000000">
  <tr align="center"> 
    <td colspan="3"><font color="#00FF00" size="1" face="verdana">Welcome to your Banking System!</font></td>
  </tr>
  <tr> 
    <td width="20%">&nbsp;</td>
    <td width="61%">&nbsp;</td>
    <td width="19%">&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
      <td align="center"><font color="#00FF00" size="1" face="verdana">Account Number</font><br>
     <font color="#00FF00" size="2" face="arial"><b><?php echo $_SESSION['xacct']; ?></b></font><br> </td>
    <td>
	<?php	
			$day=date("j M Y");
			$time=date( "g:i:sa");
			echo "<input type='hidden' name='day' value='$day'>";
			echo "<input type='hidden' name='time' value='$time'>";
			?>
	</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td align="center">
      <font color="#00FF00" size="2" face="arial"><b>Rs. </b></font><input type='text' name='depos' size=30 maxlength=10>
	  </td>
    <td>&nbsp;</td>
  </tr>
  </table>
  <table width="50%" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#000000">
  <tr height="50" valign="top">
    <td width="50%" align="right">
       <input type='submit' value='Deposit'>
      </td>
      </form>
	  <form action='myacct.php' method='post'>
	  <td width="50%">
        <input type='submit' value='Back'>
      </td>
	</form>      
  </tr>
 </table>
</body>
</html>