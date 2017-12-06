<?php
	include "../libchart/classes/libchart.php";

	$chart = new PieChart();

	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("Mozilla Firefox (80)", 80));
	$dataSet->addPoint(new Point("Konqueror (75)", 75));
	$dataSet->addPoint(new Point("Opera (50)", 50));
	$dataSet->addPoint(new Point("Safari (37)", 37));
	$dataSet->addPoint(new Point("Dillo (37)", 37));
	$dataSet->addPoint(new Point("Other (72)", 70));
	$chart->setDataSet($dataSet);

	$chart->setTitle("User agents using Pie chart");
	$chart->render("generated/demo10.png");
?>
<html>
<head>
	<title>Pie chart demonstration</title>
</head>
<body>
	<img alt="Pie chart" src="generated/demo10.png" style="border: 1px solid gray;"/>
</body>
</html>