<?php
$username = "root"; 
$password = ""; 
$database = "statestic"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM par_region";
$donnees = array();
$reg = array();
$percent = array();
$i=0;
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $donnees[$i] =  $row["Guéris"];
        $reg[$i] = $row["REGIONS"];
        if($reg[$i]==""){
            $total=$donnees[$i];
        }
        $i=$i+1;
    }
    $result->free();
} 
 
$arrlength = count($reg);
$dataPoints = array();
for($x = 0; $x < $arrlength; $x++) {
    $percent[$x] = ($donnees[$x]*100)/$total;
    $temp_percent = ($donnees[$x]*100)/$total;
    $temp_var =  array("label" => $reg[$x],"y" => $temp_percent);      
    if($donnees[$x]!=$total){
        array_push($dataPoints, $temp_var);
    }
    
}
echo $total;
echo '<pre>'; print_r($percent); echo '</pre>'; 
echo '<pre>'; print_r($donnees); echo '</pre>'; 
echo '<pre>'; print_r($reg); echo '</pre>'

?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
		text: "Usage Share of Desktop Browsers"
	},
	subtitles: [{
		text: "November 2017"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>   