<?php
	include "../libchart/classes/libchart.php";

	$chart = new LineChart();

	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("06-01", 273));
	$dataSet->addPoint(new Point("06-02", 421));
	$dataSet->addPoint(new Point("06-03", 642));
	$dataSet->addPoint(new Point("06-04", 799));
	$dataSet->addPoint(new Point("06-05", 1009));
	$dataSet->addPoint(new Point("06-06", 1406));
	$dataSet->addPoint(new Point("06-07", 1820));
	$dataSet->addPoint(new Point("06-08", 2511));
	$dataSet->addPoint(new Point("06-09", 2832));
	$dataSet->addPoint(new Point("06-10", 3550));
	$dataSet->addPoint(new Point("06-11", 4143));
	$dataSet->addPoint(new Point("06-12", 4715));
	$chart->setDataSet($dataSet);

	$chart->setTitle("Sales for 2006 using Line chart");
	$chart->render("generated/demo7.png");
?>
<html>
<head>
	<title>Line chart demonstration</title>
</head>
<body>
	<img alt="Line chart" src="generated/demo7.png" style="border: 1px solid gray;"/>
</body>
</html>