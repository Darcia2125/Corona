<?php
require_once "confi_database.php";

// Define variables and initialize with empty values
$region = $cas = $traitement = $gueris = $deces = "";
$region_err = $cas_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate region
    if(empty(trim($_POST["region"]))){
        $region_err = "Please enter a region.";
    }  
    else{
      $region = trim($_POST["region"]);
      $cas = trim($_POST["cas"]);
      $traitement = trim($_POST["traitement"]);
      $gueris = trim($_POST["gueris"]);
      $deces = trim($_POST["deces"]);
    }
    
    // Check input errors before inserting in database
    // Prepare an insert statement
    $sql = "INSERT INTO `par_region` (`REGIONS`, `Cas confirmé`, `En traitement`, `Guéris`, `Décès`) VALUES (?, ?, ?, ?, ?)";
         
    if($stmt = mysqli_prepare($link, $sql)){
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "siiii", $param_reg, $param_cas, $param_traitement, $param_gueris, $param_deces);
            
      // Set parameters
      $param_reg = $region;
      $param_cas = $cas;
      $param_traitement = $traitement;
      $param_gueris = $gueris;
      $param_deces = $deces;
            
      // Attempt to execute the prepared statement
      if(mysqli_stmt_execute($stmt)){
          mysqli_stmt_store_result($stmt);
          // Redirect to login page
          header("location: show.php");
      } else{
          echo "Something went wrong. Please try again later.";
      }

    // Close statement
    mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style-log.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Add Form</h2>
        <p>Please fill this form to create an account.</p>
        <form class="form-be" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form form-group <?php echo (!empty($region_err)) ? 'has-error' : ''; ?>">
                <input type="text" name="region" class="form-control" value="<?php echo $region; ?>">  
                <label class="label-name"><span class="content-name">region</span></label>
            </div> 
            <span class="help-block"><?php echo $region_err; ?></span>

            <div class="form form-group <?php echo (!empty($cas_err)) ? 'has-error' : ''; ?>">
                <input type="number" name="cas" class="form-control" value="<?php echo $cas; ?>">
                <label><span class="content-name">cas</span></label>
            </div>
            <span class="help-block"><?php echo $cas_err; ?></span>

            <div class="form form-group <?php echo (!empty($traitement_err)) ? 'has-error' : ''; ?>">
                <input type="number" name="traitement" class="form-control" value="<?php echo $traitement; ?>">
                <label><span class="content-name">traitement</span></label>
            </div>

            <div class="form form-group <?php echo (!empty($gueris_err)) ? 'has-error' : ''; ?>">
                <input type="number" name="gueris" class="form-control" value="<?php echo $gueris; ?>">
                <label><span class="content-name">gueris</span></label>
            </div>

            <div class="form form-group <?php echo (!empty($deces_err)) ? 'has-error' : ''; ?>">
                <input type="number" name="deces" class="form-control" value="<?php echo $deces; ?>">
                <label><span class="content-name">deces</span></label>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
        </form>
        <br><br><br><br>

        
    </div>    
</body>
</html>
