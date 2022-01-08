<?php
session_start();
require('connection.php');

if($_SESSION['ID']==""){
	header('location:index.html');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient - Main Page</title>
	<link rel="shortcut icon" type="text/css" href="img/logo.jpg">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

</head>
<body >
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<header class="header-section">
		<div class="container">
			<div class="nav-switch">
				<div class="ns-bar"></div>
			</div>
			<div class="header-right">
				<ul class="main-menu">
					<li><a href="index.html">Home</a></li>
					<li><a href="patient_profile.php">My Profile</a></li>
					<li><a href="contact.php">History</a></li>
					<li><a href="appointment.php">Make an Appointment</a></li>
				</ul>
			</div>
		</div>
	</header>
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/a8.jpg">
				<div class="container">
					<div class="clearfix"></div>
				</div>
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