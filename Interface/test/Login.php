<?php include("login_init.php"); ?>

<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<link rel="shortcut icon" href="Img/modele-logo-rouge-covid-19_23-2148501246.jpg"/>
<title>Login</title>
<link href="Style/Login.css" rel="stylesheet" type="text/css">
</head>

<body>
	<section class="container-fluid">
		<div class="form-container">
			<div class="form-body">
				<div class="header">
					<h2>LOGIN</h2>
				</div>
				<form class="form-group" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<div class="input-group form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
						<input type="text" name="username" class="form-control" value="">
						<label for="name" class="label-name"><span class="content-name">Username</span></label>
					</div>  
					<span class="help-block"><?php echo $username_err; ?></span>  
					
					<div class="input-group form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
						<input type="password" name="password" class="form-control">
						<label for="password" class="label-name"><span class="content-name">Password</span> </label>
					</div>
					<span class="help-block"><?php echo $password_err; ?></span>
		
					<div class="input-group">
						<input type="submit" class="btn btn-primary" value="Login">
					</div>
				</form>

			
				</div>
			</div>
			<div class="form-image">
			<div class="text">
				<h1>GESTION ET STATISTIQUE<br>COVID-19</h1>
				<h2>BIENVENUE</h2>
			</div>
			</div>

</section>
</body>
</html>
