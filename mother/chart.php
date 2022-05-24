<?php
 
$dataPoints = array(
	array("label"=> 0, "y"=>2),
	array("label"=> 2, "y"=>3.5),
	array("label"=> 4, "y"=>158),
	array("label"=> 6, "y"=>192),
	array("label"=> 8, "y"=>309),
	array("label"=> 10, "y"=>422),
	array("label"=> 12, "y"=>566),
	array("label"=> 14, "y"=>807),
	array("label"=> 16, "y"=>1250),
	array("label"=> 18, "y"=>1615),
	array("label"=> 20, "y"=>2069),
	array("label"=> 22, "y"=>2635),
	array("label"=> 24, "y"=>3723),
	array("label"=> 26, "y"=>5112),
	array("label"=> 28, "y"=>6660),
	array("label"=> 30, "y"=>9183),
	array("label"=> 32, "y"=>9183),
	array("label"=> 34, "y"=>9183),
	array("label"=> 36, "y"=>9183),
);
	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: " "
	},
	axisY:{
		title: "Weight (in Killo Grams)",
		logarithmic: true,
		titleFontColor: "#6D78AD",
		gridColor: "#6D78AD",
		includeZero: true,
		labelFormatter: addSymbols
	},

	legend: {
		cursor: "pointer",
		verticalAlign: "top",
		fontSize: 16,
		itemclick: toggleDataSeries
	},
	data: [{
		type: "line",
		markerSize: 0,
		showInLegend: true,
		name: "Actual Weight",
		yValueFormatString: "#,##0 KG",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	},
	{
		type: "line",
		markerSize: 0,
		axisYType: "secondary",
		showInLegend: true,
		name: "Expected Weight",
		yValueFormatString: "#,##0 KG",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
function addSymbols(e){
	var suffixes = ["", "`K", "M"];
 
	var order = Math.max(Math.floor(Math.log(e.value) / Math.log(4)), 0);
	if(order > suffixes.length - 1)
		order = suffixes.length - 1;
 
	var suffix = suffixes[order];
	return CanvasJS.formatNumber(e.value / Math.pow(1, order)) + suffix;
}
 
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>           