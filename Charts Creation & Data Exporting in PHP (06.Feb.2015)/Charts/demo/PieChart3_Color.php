<?php
	include "../libchart/classes/libchart.php";

	$chart = new PieChart();
	
	$chart->getPlot()->getPalette()->setPieColor(array(
		new Color(55, 120, 180),
		new Color(255, 255, 255)
	));

	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("Amanita abrupta", 80));
	$dataSet->addPoint(new Point("Amanita arocheae", 75));
	$dataSet->addPoint(new Point("Clitocybe dealbata", 50));
	$dataSet->addPoint(new Point("Cortinarius rubellus", 70));
	$dataSet->addPoint(new Point("Gyromitra esculenta", 37));
	$dataSet->addPoint(new Point("Lepiota castanea", 37));
	$chart->setDataSet($dataSet);

	$chart->setTitle("Deadly mushrooms using Color Pie chart");
	$chart->render("generated/pie_chart_color.png");
?>
<html>
<head>
	<title>Pie chart color demonstration</title>
</head>
<body>
	<img alt="Pie chart color test" src="generated/pie_chart_color.png" style="border: 1px solid gray;"/>
</body>
</html>