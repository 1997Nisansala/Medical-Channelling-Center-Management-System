<?php
session_start();
require('connection.php');

if($_SESSION['ID']==""){
	header('location:index.html');
}
	$NAME = "";
	$DATE = "";
	$PID = "";

	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

	function getPosts(){
		$posts = array();
		$posts[0] = $_POST['date1'];
		$posts[1] = $_POST['ID'];
		return $posts;
	}

	if (isset($_POST['Register'])) {
		$data = getPosts();

		$search_query = "SELECT PatientID,Name FROM patient WHERE PatientID IN (SELECT PatientID FROM appoinment WHERE SessionID IN (SELECT SessionID FROM medicalsession WHERE SessionDate = '$data[0]' AND DocID = '$data[1]'))";
		$search_result = mysqli_query($con,$search_query);
		
			if(mysqli_num_rows($search_result)>0){
				while($row = mysqli_fetch_array($search_result)){
					$NAME = $row['Name'];
					$PID = $row['PatientID'];
				
				}
			}else{
				echo '<script>alert("No Data for this ID!")</script>';
			}
		}	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor - Main Page</title>
	<link rel="shortcut icon" type="text/css" href="img/logo.jpg">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/employeeApp.css">

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
			<div class="header-right" font-color = "White" >
				<h2  style="text-align: center;">Main Page : Doctor</h2>
				</div>
			</div>
			<div class="header-right">
				<ul class="main-menu">
					<li><a href="index.html">Home</a></li>
					<li><a href="doc_profile.php">My Profile</a></li>
					<li><a href="doc_patient.php">Patient's Detail</a></li>
				</ul>
				<div class="header-btns">
					<a class="site-btn sb-c3"><?php echo $_SESSION['ID']; ?> </a>	
				</div>
		
		</div>
	</header>
			<div class="emp">
				<form class="formemp" method="post" >
					<fieldset class="pDetail">
					<p>Search Appointments</p>
					<input type="date" name="date1" style="width: 100%">
					<br><br><p>Doc ID</p>
					<input type="text" name="ID" style="width: 100%"><br><br>
					<input  class="site-btn1" type="submit" name="Register" value="Search">
				</fieldset>
				</form>
			</div>

				<section class="DBbody" >
		<div class="w3-container">
			<h3 style="text-align: center;">Doctor Details</h3>
			<div class="w3-responsive">
				<table class="w3-table w3-bordered w3-border w3-blue-grey">
					<tr class="w3-dark-gray"> 
						<th>Patient ID</th>
						<th>Patient Name</th>
					</tr>
					<?php
					if (isset($_POST['Register'])) {
						$data = getPosts();

							$search_query = "SELECT PatientID,Name FROM patient WHERE PatientID IN (SELECT PatientID FROM appoinment WHERE SessionID IN (SELECT SessionID FROM medicalsession WHERE SessionDate = '$data[0]'))";
							$search_result = mysqli_query($con,$search_query);
		
							if(mysqli_num_rows($search_result)>0){
								while($row = mysqli_fetch_array($search_result)){
									$NAME = $row['Name'];
									$PID = $row['PatientID'];
										print "<tr w3-centered>
											<th> $PID </th>
											<th> $NAME </th>
										</tr>";
								}
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