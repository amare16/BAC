<?php
session_start();

if(isset($_SESSION['user_id'])!="") {
	header("Location: index.php");
}

include_once 'dbconnect.php';

//check if form is submitted
if (isset($_POST['login'])) {

	$last_name = mysqli_real_escape_string($con, $_POST['last_name']);
	$asylum_number = mysqli_real_escape_string($con, $_POST['asylum_number']);
	$result = mysqli_query($con, "SELECT * FROM users WHERE last_name = '" . $last_name. "' and asylum_number = '" . $asylum_number . "'");

	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['user_id'] = $row['id'];
		$_SESSION['user_name'] = $row['last_name'];
		header("Location: index.php");

	} else {
		$errormsg = "Incorrect Name or Asylum Number!!!";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><img src="images/logo_secours_catholique.png"></a>
		</div>
		<!-- menu items -->
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="login.php">Login</a></li>
				
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<fieldset>
					<legend>Login</legend>
					
					<div class="form-group">
						<label for="name">Last Name</label>
						<input type="text" name="last_name" placeholder="Your Last Name" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Asylum Number</label>
						<input type="password" name="asylum_number" placeholder="Your Asylum Number" required class="form-control" />
					</div>

					<div class="form-group">
						<input id="login" type="submit" name="login" value="Login" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
	
</div>
<script>
	if($('#login').click() {
		echo "you have mail or not";
	});
</script>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
