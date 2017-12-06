<?php
	include "../libchart/classes/libchart.php";

	$chart = new HorizontalBarChart(500, 270);

	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("/wiki/Instant_messenger", 50));
	$dataSet->addPoint(new Point("/wiki/Web_Browser", 83));
	$dataSet->addPoint(new Point("/wiki/World_Wide_Web", 142));
	$chart->setDataSet($dataSet);

	$chart->setTitle("Most visited sites using Horizontal Bar Chart");
	$chart->render("generated/demo1.png");

?>
<html>
<head>
	<title>Horizontal Bar chart demonstration</title>
</head>
<body>
	<img alt="Horizontal Bar chart" src="generated/demo1.png" style="border: 1px solid gray;"/>
</body>
</html>