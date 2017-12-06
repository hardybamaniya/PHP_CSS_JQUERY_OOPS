<?php
	include "../libchart/classes/libchart.php";

	$chart = new PieChart(500, 340);

	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("Mozilla Firefox (80)", 80));
	$dataSet->addPoint(new Point("Konqueror (75)", 75));
	$dataSet->addPoint(new Point("Other (50)", 50));
	$chart->setDataSet($dataSet);

	$chart->setTitle("User agents using Pie Chart");
	$chart->render("generated/demo9.png");
?>
<html>
<head>
	<title>Pie chart demonstration</title>
</head>
<body>
	<img alt="Pie chart" src="generated/demo9.png" style="border: 1px solid gray;"/>
</body>
</html>