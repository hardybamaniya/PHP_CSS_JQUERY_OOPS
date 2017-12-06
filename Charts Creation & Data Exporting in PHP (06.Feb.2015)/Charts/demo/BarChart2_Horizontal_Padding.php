<?php
	include "../libchart/classes/libchart.php";

	$chart = new HorizontalBarChart(600, 170);

	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("/wiki/Instant_messenger", 50));
	$dataSet->addPoint(new Point("/wiki/Web_Browser", 75));
	$dataSet->addPoint(new Point("/wiki/World_Wide_Web", 122));
	$chart->setDataSet($dataSet);
	$chart->getPlot()->setGraphPadding(new Padding(5, 30, 20, 140));

	$chart->setTitle("Most visited sites using Horizontal Bar Chart");
	$chart->render("generated/demo3.png");
?>
<html>
<head>
	<title>Horizontal Bar chart demonstration</title>
</head>
<body>
	<img alt="Horizontal Bar chart" src="generated/demo3.png" style="border: 1px solid gray;"/>
</body>
</html>