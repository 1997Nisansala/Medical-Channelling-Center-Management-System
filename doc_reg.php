<?php
 	require('connection.php');

 	if(isset($_POST['Register'])){
 		$Name = $_POST['Name'];
 		$Special = $_POST['Specialization'];
 		$Hospital = $_POST['Hospital'];
 		$TelNo = $_POST['MobNo'];
 		$Charge = $_POST['DocCharge'];
 		$SLMC = $_POST['RegNo'];
 		$Gender = $_POST['sex'];
 		$Pass = $_POST['Password'];

 		$query = "INSERT INTO doctor VALUES(NULL,'$Name','$Special','$Hospital','$TelNo','$Charge','$SLMC','$Gender','$Pass')";

 		mysqli_query($con,$query);
 		echo '<script>alert("Details Saved!")</script>';
 		echo "<script>document.location='doc_login.php'</script>";
 	}

?>
<!DOCTYPE html>
<html>
<head>
	<title> Registration Form - Doctor</title>
	<meta charset="UTF-8">
	<meta name="description" content="UOP-HMS">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="img/logo.jpg" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/employeeApp.css">

</head>
<body style="background-color: #aca4ac">
	<header class="header-section" style="background-color: #485a68">
		<div class="container">
			<a href="index.html" class="site-logo">
				<img src="img/logo.jpg" alt="logo" width="100" height="100">
			</a>
			<div class="nav-switch">
				<div class="ns-bar"></div>
			</div>
			<div class="header-right">
				<h2 style="text-align: center;" >Registration Form - Doctor</h2>
				</div>
			</div>
		</div>
	</header>
	
	<div class="emp" >
		<form class="formemp" method="POST">
			<fieldset class="pDetail">

				<br><br><br><br>
				Name :
				<input type="text" class="text-line" name="Name" >
				<br><br><br>	
						
				Specialization : 
				<input type="text" class="text-line" name="Specialization">
				<br><br><br>

				Working Hospital : 
				<input type="text" class="text-line" name="Hospital" >
				<br><br><br>

				Mobile NO : 
				<input type="text" class="text-line" name="MobNo" >
				<br><br><br>

				Doctor Charge : 
				<input type="text" class="text-line" name="DocCharge" >
				<br><br><br>

				SLMC Reg. Number : 
				<input type="text" class="text-line" name="RegNo" >
				<br><br><br>

				Gender: 
				<input type="radio" name="sex" value="Male"> Male
				<input type="radio" name="sex" value="Female"> Female
				<br><br><br>

				Password : 
				<input type="Password" class="text-line" name="Password" >
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