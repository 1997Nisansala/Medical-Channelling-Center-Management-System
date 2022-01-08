<?php
 	require('connection.php');

 	if(isset($_POST['Register'])){
 		$TelNo = $_POST['Mobile'];
 		$Name = $_POST['Name'];
 		$Gender = $_POST['sex'];
 		$DOB = ($_POST['Dob']);
 		$Address = $_POST['Address'];
 		$query = "INSERT INTO nurse VALUES(NULL,'$TelNo','$Name','$Gender','$DOB','$Address')";

 		mysqli_query($con,$query);
 		echo '<script>alert("Details Saved!")</script>';
 		echo "<script>document.location='index.html'</script>";
 	}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Registration Form - Nurse</title>
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
			<a href="index.html" class="site-logo">
				<img src="img/logo.jpg" alt="logo" width="100" height="100">
			</a>
			<div class="nav-switch">
				<div class="ns-bar"></div>
			</div>
			<div class="header-right" font-color = "White" >
				<h2  style="text-align: center;">Registration Form - Nurse</h2>
				</div>
			</div>
		</div> 
	</header>
	
	<div class="emp" style="background-color: #78a7be">
		<form class="formemp" method="POST">
			<fieldset class="pDetail">

				<br><br><br><br>
				Name :
				<input type="text" class="text-line" name="Name" >
				<br><br><br>	
						
				Address : 
				<input type="text" class="text-line" name="Address">
				<br><br><br>

				Date of Birth : 
				<input type="Date" class="text-line" name="Dob" >
				<br><br><br>

				Mobile NO : 
				<input type="text" class="text-line" name="Mobile" >
				<br><br><br>

				Gender: 
				<input type="radio" name="sex" value="Male"> Male
				<input type="radio" name="sex" value="Female"> Female
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