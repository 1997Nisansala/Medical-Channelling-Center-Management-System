<?php
if (isset($_POST['makepayment'])) {

	$patientid = $_POST['patientid'];
	$sessionid = $_POST['sessionid'];
	$hospitalc = $_POST['hospitalc'];
	$vat = $_POST['vat'];
	$totalc = $_POST['totalc'];
	$payment = $_POST['payment'];

	if (!empty($patientid) && !empty($sessionid) && !empty($hospitalc) && !empty($vat) && !empty($totalc) && !empty($payment)) {
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "project1";

		$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

		if (mysqli_connect_error()) {
			die('Connect Error(' . mysqli_connect_error() . ')' . mysqli_connect_error());
		} else {
			$sql = "UPDATE appoinment SET HospitalCharges='$hospitalc', VAT='$vat', Ispaid='$payment' WHERE PatientID='$patientid' AND SessionID='$sessionid'";

			if (mysqli_query($conn, $sql)) {
  				echo "Record updated successfully";
			} else {
  			echo "Error updating record: " . mysqli_error($conn);
			}

		mysqli_close($conn);

		}
	} else {
		echo "All fields are Required";
		die();
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Payment</title>
	<meta charset="UTF-8">
	<link href="img/logo.jpg" rel="shortcut icon"/>

	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/employeeApp.css">

</head>
<body style="background-color: #aca4ac">
	<div id="preloder">
			<div class="loader"></div>
	</div>
	
	<header class="header-section" style="background-color: #485a68">
		<div class="container">
			<a href="admin_main.php" class="site-logo">
				<img src="img/logo.jpg" alt="logo" width="100" height="100">
			</a>
			<div class="nav-switch">
				<div class="ns-bar"></div>
			</div>
			<div class="header-right">
				<h2 style="text-align: center;">Payment</h2>
				</div>
			</div>
		</div>
	</header>
	
	<div class="emp" style="background-color: #78a7be">
		<form class="formemp" method="POST">
			<fieldset class="pDetail">

				<br><br><br><br>
				Patient ID :
				<input type="text" class="text-line" name="patientid" >
				<br><br><br>	
						
				Session ID : 
				<input type="text" class="text-line" name="sessionid">
				<br><br><br>

				Hospital Charges : 
				<input type="text" class="text-line" name="hospitalc" >
				<br><br><br>

				VAT : 
				<input type="text" class="text-line" name="vat" >
				<br><br><br>

				Total Charges : 
				<input type="text" class="text-line" name="totalc" >
				<br><br><br>

				IsPaid: 
				<input type="radio" name="payment" value=1> YES
				<input type="radio" name="payment" value=0> NO
				<br><br><br>
                <input  class="site-btn1" type="submit" name="makepayment" value="Confirm Payment">
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