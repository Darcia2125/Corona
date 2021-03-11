
<?php 
$username = "root"; 
$password = ""; 
$database = "login"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM login";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Value1</font> </td> 
          <td> <font face="Arial">Value2</font> </td> 
          <td> <font face="Arial">Value3</font> </td> 

      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $id0 = $row["id"];
        $username0 = $row["username"];
        $password0 = $row["password"];


        echo '<tr> 
                  <td>'.$id0.'</td> 
                  <td>'.$username0.'</td> 
                  <td>'.$password0.'</td> 

              </tr>';
    }
    $result->free();
} 
$username_err ="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    }
    $cool = trim($_POST["username"]);
    echo $cool;
    $sql = "DELETE FROM login WHERE id=$cool";

    if ($mysqli->query($sql) === TRUE) {
    echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . $mysqli->error;
    }
}
?>

<div class="wrapper">
        <h2>Delete account</h2>
        <form class="form-be" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <input type="text" name="username" class="form-control" value="">  
                <label class="label-name"><span class="content-name">username</span></label>
            </div> 
            <span class="help-block"><?php echo $username_err; ?></span>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Delete">
            </div>
        </form>
        <br><br><br><br>
        <h3>command</h3>
