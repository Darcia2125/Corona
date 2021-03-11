<?php
require_once "config_global.php";

$query = "SELECT * FROM global";
$donnees = array();
$i=0;
if ($result = $link->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $donnees[$i] =  $row["Colonne2"];
        $state[$i] = $row["Colonne1"];
        $i=$i+1;
    }
    

    $result->free();
} 

$arrlength = count($state);
$dataPoints = array();
$statePoints = array();
$rgbColor = array();
$randomColor = array();
$cocolor="";
$state1="";
$data1="1";
 
//Create a loop.
foreach(array('r', 'g', 'b') as $color){
    //Generate a random number between 0 and 255.
    $rgbColor[$color] = mt_rand(0, 255);
}
for($x = 0; $x < $arrlength; $x++) {
    $temp_state =  array($state[$x]);  
    include ("color_init.php");
    array_push($dataPoints, $donnees[$x]);
    array_push($statePoints, $temp_state);
    array_push($randomColor, $cocolor);
}
array_push($statePoints, $state1);
array_push($dataPoints, $data1);
array_push($randomColor, "rgb(255, 99, 132)");

?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<canvas id="myChart"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {
        labels: <?php echo json_encode($statePoints); ?>,
        datasets: [{
            label: 'My First dataset',
            backgroundColor: <?php echo json_encode($randomColor); ?>,
            borderColor: 'rgb(255, 255, 255)',
            data: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
        }]
    },

    // Configuration options go here
    options: {}
});
</script>      