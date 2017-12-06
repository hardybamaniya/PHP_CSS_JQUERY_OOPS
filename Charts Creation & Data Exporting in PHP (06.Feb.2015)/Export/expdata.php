<?php
	$base="export_db";
	$server="localhost";
	$user="root";
	$pass="";

	mysql_connect($server, $user, $pass) or die('Server connection not possible.');
	mysql_select_db($base)               or die('Database connection not possible.');
?>

<?php
$f = $_GET['fac'];
$sem = $_GET['sem'];
$page = "export_list_".$f."_".$sem;

function cleanData(&$str)
{
	// escape tab characters
	$str = preg_replace("/\t/", "\\t", $str);
	
	// escape new lines
	$str = preg_replace("/\r?\n/", "\\n", $str);
	
	// convert 't' and 'f' to boolean values
	if($str == 't') $str = 'TRUE';
	if($str == 'f') $str = 'FALSE';
	
	// force certain number/date formats to be imported as strings
	if(preg_match("/^0/", $str) || preg_match("/^\+?\d{8,}$/", $str) || preg_match("/^\d{4}.\d{1,2}.\d{1,2}/", $str))
	{
		$str = "'$str";
	}
	
	// escape fields that include double quotes
	if(strstr($str, '"'))
		$str = '"' . str_replace('"', '""', $str) . '"';
}

// filename for download
$filename = $page."_".date('d-M-Y').".xls";

header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");

$flag = false; 
$head = array();
$head[0] = "Dr. Virambhai R. Godhaniya College [Department of Information Technology]";
if(!$flag) 
{ 
	// display field/column names as first row 
	echo implode("\t", array_values($head)) . "\r"; 
	$flag = true; 
}

$flag = false; 
$head = array();
$head[0] = "Self Financed - Porbandar.";
if(!$flag)
{ 
	// display field/column names as first row 
	echo implode("\t", array_values($head)) . "\r"; 
	$flag = true; 
}

$flag = false; 
$head=array();
$head[0]="Subject List";

if(!$flag) 
{ 
	// display field/column names as first row 
	echo implode("\t", array_values($head)) . "\r"; 
	$flag = true; 
} 

$flag = false; 
$head=array();
$head[0]="";
$head[1]="";
$head[2]="";
$head[3]="";
if(!$flag) 
{ 
	// display field/column names as first row 
	echo implode("\t", array_values($head)) . "\r"; 
	$flag = true; 
} 

$flag = false; 
$head=array();
$head[0]="";
$head[1]="";
$head[2]="";
$head[3]="";
if(!$flag) 
{ 
	// display field/column names as first row 
	echo implode("\t", array_values($head)) . "\r"; 
	$flag = true; 
} 

$flag = false;

/* ----------------------------------- */

	$fac = strtoupper(substr($f,0,1));
	if ($fac=="M")
		$sql = "select * from courses where course='MSc' and sem=".$sem;
	else if($fac=="B")
		$sql = "select * from courses where course='BCA' and sem=".$sem;
	else if($fac=="P")
		$sql = "select * from courses where course='PGDCA' and sem=".$sem;

/* ----------------------------------- */
$result = mysql_query($sql) or die('Query failed!');
while(false !== ($row = mysql_fetch_assoc($result)))
{
	if(!$flag)
	{
		// display field/column names as first row
		echo implode("\t", array_keys($row)) . "\r\n";
		$flag = true;
	}
	array_walk($row, 'cleanData');
	echo implode("\t", array_values($row)) . "\r\n";
}
exit;
?>