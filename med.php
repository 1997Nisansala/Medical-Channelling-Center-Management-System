<?php

require('connection.php');


	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

	function getPosts(){
		$posts = array();
		$posts[0] = $_POST['SID'];
		return $posts;
	}

	if (isset($_POST['Register'])) {
		$data = getPosts();

		$search_query = "SELECT SessionID,SessionDate,SessionTime,Name from medicalsession,doctor where medicalsession.DocID=doctor.DocId AND medicalsession.DocID ='$data[0]'";
		$search_result = mysqli_query($con,$search_query);
	}
		
?>

<!DOCTYPE html>
<html>
<head>
	<title> Medical Session</title>
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
			<div class="header-right">
				<h2 style="text-align: center;" >Medical Session</h2>
				</div>
			</div>
		</div>
	</header>
	
	<div class="emp" style="background-color: #78a7be">
		<form class="formemp" method="POST">
			<fieldset class="pDetail">

				<br><br><br><br>
				Doctor ID :
				<input type="text" class="text-line" name="SID" >
				<br><br><br>	

                <input  class="site-btn1" type="submit" name="Register" value="Search Session">
            </fieldset>   
		</form>
	</div>
	<section class="DBbody" >
		<div class="w3-container">
			<h3 align="center" >Doctor Details</h3>
			<div class="w3-responsive">
				<table class="w3-table w3-bordered w3-border w3-blue-grey">
					<tr class="w3-dark-gray"> 
						<th>SESSION ID</th>
						<th>SESSION DATE</th>
						<th>SESSION TIME</th>
						<th>DOCTOR NAME</th>
					</tr>
					<?php
					if (isset($_POST['Register'])) {
						if (mysqli_num_rows($search_result) > 0) {
							while( $row = mysqli_fetch_assoc($search_result) ) {
								$SESID = $row['SessionID'];
								$SESDATE = $row['SessionDate'];
								$SESTIME = $row['SessionTime'];
								$NAME = $row['Name'];
								print "<tr w3-centered>
											<th> $SESID </th>
											<th> $SESDATE </th>
											<th> $SESTIME </th>
											<th> $NAME </th>
										</tr>";
							}
						}
						else{
							echo '<script>alert("No Data for this ID!")</script>';
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