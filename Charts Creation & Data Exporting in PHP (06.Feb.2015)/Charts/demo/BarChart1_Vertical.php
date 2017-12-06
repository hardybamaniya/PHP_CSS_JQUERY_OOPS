<?php
	include "../libchart/classes/libchart.php";
	
	$chart = new VerticalBarChart(500, 450);
	
	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("Jan 2005", 273));
	$dataSet->addPoint(new Point("Feb 2005", 321));
	$dataSet->addPoint(new Point("March 2005", 442));
	$dataSet->addPoint(new Point("April 2005", 711));
	
	$chart->setDataSet($dataSet);
	
	$chart->setTitle("Monthly usage using Vertical Bar Chart");
	$chart->render("generated/demo2.png");
?>
<html>
<head>
	<title>Vertical Bar chart demonstration</title>
</head>
<body>
	<img alt="Vertical Bar chart" src="generated/demo2.png" style="border: 1px solid gray;"/>
</body>
</html>