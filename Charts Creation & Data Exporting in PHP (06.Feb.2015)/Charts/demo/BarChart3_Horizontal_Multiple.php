<?php
	include "../libchart/classes/libchart.php";

	$chart = new HorizontalBarChart(450, 250);

	$serie1 = new XYDataSet();
	$serie1->addPoint(new Point("18-24", 22));
	$serie1->addPoint(new Point("25-34", 17));
	$serie1->addPoint(new Point("35-44", 20));
	$serie1->addPoint(new Point("45-54", 25));
	
	$serie2 = new XYDataSet();
	$serie2->addPoint(new Point("18-24", 13));
	$serie2->addPoint(new Point("25-34", 18));
	$serie2->addPoint(new Point("35-44", 23));
	$serie2->addPoint(new Point("45-54", 22));
	
	$dataSet = new XYSeriesDataSet();
	$dataSet->addSerie("Male", $serie1);
	$dataSet->addSerie("Female", $serie2);
	$chart->setDataSet($dataSet);

	$chart->setTitle("Firefox vs IE users: Age using Multiple Horizontal Bar chart");
	$chart->render("generated/demo5.png");
?>
<html>
<head>
	<title>Multiple Horizontal Bar chart demonstration</title>
</head>
<body>
	<img alt="Multiple Horizontal Bar chart" src="generated/demo5.png" style="border: 1px solid gray;"/>
</body>
</html>