<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Asylum Seekers Page</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css">
	
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><img src="images/logo_secours_catholique.png"></a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['user_id'])) { ?>
				<li><p class="navbar-text">Signed in as <?php echo $_SESSION['user_name']; ?></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
				<li><a href="login.php">Login</a></li>
				
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
	<div id="checking-mail">
		
			<h1>Checking Mail App for Asylum Seekers in Coallia</h1><br>
			<p>You have to click the <span style="color: blue">"Login"</span> button on the right corner <br>and check your mail if you have or not <br>by entering your Last Name and Asylum Number</p>

		
	</div>
	
</div>


<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

