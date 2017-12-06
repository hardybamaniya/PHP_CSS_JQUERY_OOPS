<?php
	include "../libchart/classes/libchart.php";

	$chart = new VerticalBarChart();

	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("Jan 2005", 273));
	$dataSet->addPoint(new Point("Feb 2005", 421));
	$dataSet->addPoint(new Point("March 2005", 642));
	$dataSet->addPoint(new Point("April 2005", 800));
	$dataSet->addPoint(new Point("May 2005", 1200));
	$dataSet->addPoint(new Point("June 2005", 1500));
	$dataSet->addPoint(new Point("July 2005", 2600));
	$chart->setDataSet($dataSet);
	$chart->getPlot()->setGraphPadding(new Padding(7, 10, 50, 50));

	$chart->setTitle("Monthly usage using Vertical bars chart");
	$chart->render("generated/demo4.png");
?>
<html>
<head>
	<title>Vertical bars demonstration</title>
</head>
<body>
	<img alt="Vertical bars chart" src="generated/demo4.png" style="border: 1px solid gray;"/>
</body>
</html>
