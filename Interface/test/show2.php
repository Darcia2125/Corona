
<?php 
$username = "root"; 
$password = ""; 
$database = "statestic"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM global";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial"> * </font> </td> 
          <td> <font face="Arial">Nombre</font> </td> 

      </tr>';

      


if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $region0 = $row["Colonne1"];
        $cas0 = $row["Colonne2"];


        echo '<tr> 
                  <td>'.$region0.'</td> 
                  <td>'.$cas0.'</td> 
              </tr>';
    }
    $result->free();
} 

