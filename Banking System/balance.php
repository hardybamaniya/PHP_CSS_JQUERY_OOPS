<?php
session_start();
if ($_SESSION['xrole'] != 'user')
{
	header("Location: main.php");
	exit();
}
?>
<html>
<body bgcolor='#333333'>
<br><br><br><br><br><br><br><br>
<?php
include 'db_connect.php';
//echo $_SESSION['xacct'];
$sql = "SELECT * FROM  myacct WHERE acct='".$_SESSION['xacct']."'";
$result = mysql_query($sql) or die("SQL select statement failed");

while ($row = mysql_fetch_array($result))
{
	$acct=$row["acct"];
	$depo=$row["depo"];
?>
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
     <font color="#00FF00" size="2" face="arial"><b><?php echo"$acct"; ?><b></b></font><br> </td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td align="center"><font color="#00FF00" size="1" face="verdana">Balance</font><br>
      <font color="#00FF00" size="2" face="arial"><b>Rs. <?php echo"$depo"; ?></b></font><br> </td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td align="center">
	<table width="100%" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#000000">
	<tr height="50">
        <form action='transaction.php' method='post'>
        <td align="right" width='60%'>
        <input name="submit" type='submit' value='Check Transaction'>
        </td>
        </form>
        <form action='myacct.php' method='post'>
        <td width='40%'>
        <input name="submit" type='submit' value='Back'>
        </td>
        </form>
      </tr>
      </table>
	  </td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php
	}
?>
</body>
</html>
