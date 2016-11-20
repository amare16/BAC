<!DOCTYPE html>
<html>
<head>
	<title>Asylum Seekers List Page</title>
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
				
				<li class="active"><a href="register.php">Lists</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div id="page">
		<h1><strong>Checking Mail App for Asylum Seekers</strong></h1><br><br>
		<h2><strong>Asylum Seekers List Page</strong></h2>
	</div><br><br>
	<?php 

		require 'dbconnect.php';

		if($result = $con->query("SELECT * FROM users ORDER BY id")) {
			if($count = $result->num_rows) {
				?>
				<table class="table">
		            <tr>
		                <td><strong>ID</strong></td>
		                <td><strong>First Name</strong></td>
		                <td><strong>Last Name</strong></td>
		                <td><strong>Birth Date</strong></td>
		                <td><strong>Countries</strong></td>
		                <td><strong>Asylum Number</strong></td>
		                <td><strong>Letter Available Date</strong></td>
		            </tr>
		      <?php 
		      	$id = 1;
				while($row = $result->fetch_object()) {
					echo "
            			<tr>
                    <td>".$id++."</td>
                    <td>{$row->first_name}</td>
                    <td>{$row->last_name}</td>
                    <td>{$row->birth_date}</td>
                    <td>{$row->countries}</td>
                    <td>{$row->asylum_number}</td>
                    <td>{$row->letter_available_date}</td>
                    </tr>
            		";
				}
				?>
				</table>
				<?php 
			} else {
				// an error
			}
			
		}
		?>	
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>