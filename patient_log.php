<?php
	require('connection.php');

	if(isset($_POST['submit']))
	{
		session_start();

		$n = $_POST['ID'];
		$passc = $_POST['password'];
		$p = md5($passc);
		$_SESSION['ID'] = $n;
		$_SESSION['password'] = $p;

		$q = "SELECT * FROM patient WHERE TelNo = '$n' AND Password = '$passc'";
		$cq = mysqli_query($con,$q);
		$ret  = mysqli_num_rows($cq);
		if($ret == true){
			echo "<script>document.location='patient_main.php'</script>";
		}
		else{
			echo '<script>alert("Invalid Username or Password")</script>';
		}

	}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Patient Login</title>
	<meta charset="UTF-8">
	<link href="img/logo.jpg" rel="shortcut icon"/>
	<link rel="stylesheet" href="css/style7.css">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/style8.css"/>
	<link rel="stylesheet" href="css/style2.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>

<body>
       <header class="header-section" style="background-color: #485a68">
		<div class="container">
			<a href="index.html" class="site-logo">
				<img src="img/logo.jpg" alt="logo" width="100" height="100">
			</a>
			<div class="nav-switch">
				<div class="ns-bar"></div>
			</div>
			<div class="header-right">
				<h2 style="text-align: center;" >Login Form - Patient</h2>
				</div>
			</div>
		</div>
	</header>
  	<form method="post" style="background-color: #78a7be">
		<div class="login-box">
  			<h1>Login Form</h1>
  		<div class="textbox">
    		<i class="fas fa-user"></i>
    		<input type="text" placeholder="Mobile NO (07xxxxxxxx)" name="ID">
  		</div>

  		<div class="textbox">
    		<i class="fas fa-lock"></i>
    		<input type="password" placeholder="Password" name="password">
  		</div>
  		<input type="submit" value="Login" name="submit">
		</div>
	</form>

</body>
</html>