
<?php 
$username = "root"; 
$password = ""; 
$database = "statestic"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM par_region";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Region</font> </td> 
          <td> <font face="Arial">Cas confirmé</font> </td> 
          <td> <font face="Arial">En traitement</font> </td> 
          <td> <font face="Arial">Guéris</font> </td> 
          <td> <font face="Arial">Décès</font> </td> 

      </tr>';

      


if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $region0 = $row["REGIONS"];
        $cas0 = $row["Cas confirmé"];
        $traitement0 = $row["En traitement"];
        $gueris0 = $row["Guéris"];
        $deces0 = $row["Décès"];


        echo '<tr> 
                  <td>'.$region0.'</td> 
                  <td>'.$cas0.'</td> 
                  <td>'.$traitement0.'</td> 
                  <td>'.$gueris0.'</td> 
                  <td>'.$deces0.'</td> 

              </tr>';
    }
    $result->free();
} 

