<?php

session_start();
//connectivity
require('connection.php');

		$q = "SELECT DocID,Name,Specialization,WorkingHospital,TelNo FROM doctor";
		$cq = mysqli_query($con,$q);
		$ret = mysqli_num_rows($cq);
		
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Doctors Details</title>
	<meta charset="UTF-8">
	<link href="img/logo.jpg" rel="shortcut icon"/>
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/employeeApp.css"/>
	<link rel="stylesheet" href="css/style11.css">
</head>

<body>
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<header class="header-section">
		<div class="container">
			<a href="index.html" class="site-logo">
				<img src="img/logo.jpg" alt="logo" width="100" height="100">
			</a>
			<div class="nav-switch">
				<div class="ns-bar"></div>
			</div>
		</div>
	</header>
	<section class="DBbody" >
		<div class="w3-container">
			<h3 style="text-align: center;">Doctor Details</h3>
			<div class="w3-responsive">
				<table class="w3-table w3-bordered w3-border w3-blue-grey">
					<tr class="w3-dark-gray"> 
						<th>Doctor ID</th>
						<th>Doctor Name</th>
						<th>Specialization</th>
						<th>Working Hospital</th>
						<th>Mobile NO</th>
					</tr>
					<?php
						if (mysqli_num_rows($cq) > 0) {
							while( $row = mysqli_fetch_assoc($cq) ) {
								$DocID = $row["DocID"];
								$Name = $row["Name"];
								$SP = $row["Specialization"];
								$WH = $row["WorkingHospital"];
								$MOB = $row["TelNo"];
								print "<tr w3-centered>	<th> $DocID </th>
											<th> $Name </th>
											<th> $SP </th>
											<th> $WH </th>
											<th> $MOB </th>
										</tr>";

								$con->close();
							}
						}
		
					?>
				</table>
			</div>
		</div>
	</section>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
