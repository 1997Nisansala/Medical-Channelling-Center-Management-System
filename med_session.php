<?php
 	require('connection.php');

 	if(isset($_POST['Register'])){
 		$SID = $_POST['SID'];
 		$DID = $_POST['DID'];
 		$NID = $_POST['NID'];
 		$Date = ($_POST['sdate']);
 		$Time = $_POST['stime'];
 		$query = "INSERT INTO medicalsession VALUES('$SID','$Date','$Time','$DID','$NID')";

 		mysqli_query($con,$query);
 		echo '<script>alert("Details Saved!")</script>';
 		echo "<script>document.location='admin_main.php'</script>";
 	}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Medical Session</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<body  style="background-color: #aca4ac">
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
				<h2 style="text-align: center;">Medical Session</h2>
				</div>
			</div>
		</div>
	</header>
	
	<div class="emp" style="background-color: #78a7be">
		<form class="formemp" method="POST">
			<fieldset class="pDetail">

				<br><br><br><br>
				Session ID :
				<input type="text" class="text-line" name="SID" >
				<br><br><br>	
						
				Doctor ID : 
				<input type="text" class="text-line" name="DID">
				<br><br><br>

				Nurse ID : 
				<input type="text" class="text-line" name="NID" >
				<br><br><br>

				Session Date : 
				<input type="date" class="text-line" name="sdate" size="20">
				<br><br><br>

				Session Time : 
				<input type="time" class="text-line" name="stime" >
				<br><br><br>
                <input  class="site-btn1" type="submit" name="Register" value="Register">
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