<?php
if (isset($_POST['MakeAppointment'])) {
	$patientid = $_POST['patientid'];
	$sessionid = $_POST['sessionid'];
	if (!empty($patientid) && !empty($sessionid)) {
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "project1";

		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

		if (mysqli_connect_error()) {
			die('Connect Error(' . mysqli_connect_error() . ')' . mysqli_connect_error());
		} else {
	
			$INSERT = "INSERT Into appoinment(PatientID, SessionID) values(?,?)";

			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("ii", $patientid, $sessionid);
			$stmt->execute();
			$stmt->close();
			$conn->close();
		}
	} else {
		echo '<script>alert("Invalid")</script>';
		die();
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<title> Appointments</title>
	<meta charset="UTF-8">
	<link href="img/logo.jpg" rel="shortcut icon" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/owl.carousel.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/style8.css" />
	<link rel="stylesheet" href="css/employeeApp.css">

</head>

<body style="background-color: #aca4ac">
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<header class="header-section" style="background-color: #485a68">
		<div class="container">
			<a href="patient_main.php" class="site-logo">
				<img src="img/logo.jpg" alt="logo" width="100" height="100">
			</a>
			<div class="nav-switch">
				<div class="ns-bar"></div>
			</div>
			<div class="header-right" font-color="White">
				<h2 style="text-align: center;">Make Appointment</h2>
			</div>
		</div>
		</div>
	</header>

	<div class="emp" style="background-color: #78a7be">
		<form class="formemp" method="POST">
			<fieldset class="pDetail">

				<br><br><br><br>
				Patient ID :
				<input type="text" class="text-line" name="patientid">
				<br><br><br>
				Session ID : 
				<input type="text" class="text-line" name="sessionid" >
				<br><br><br>

				<input class="site-btn1" type="submit" name="MakeAppointment" value="Confirm Appointment">
			</fieldset>
		</form>
	</div>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>