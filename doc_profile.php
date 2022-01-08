<?php
	session_start();

	require('connection.php');

	if ($_SESSION['ID']=="") {
		header('location:index.html');
	}
	$ID = $_SESSION['ID'];
	$q = "SELECT DocID FROM doctor WHERE TelNo ='$ID'";
	$cq = mysqli_query($con,$q);
	$row = mysqli_fetch_assoc($cq);
	$reg = $row["DocID"];
	$q = "SELECT * FROM doctor WHERE DocID  = '$reg'";
	$cq = mysqli_query($con,$q);
	$ret = mysqli_num_rows($cq);

?>
<!DOCTYPE html>
<html lang="zxx">
<head >
	<title>My Profile - Doctor </title>
	<meta charset="UTF-8">
	<link href="img/logo.jpg" rel="shortcut icon"/>

	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/w3.css">
</head>

<body style="background-color: #aca4ac">
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<header class="header-section" style="background-color: #485a68">
		<div class="container">
			<a href="doc_main.php" class="site-logo">
				<img src="img/logo.jpg" alt="logo" height="100" width="100">
			</a>
			<div class="nav-switch">
				<div class="ns-bar"></div>
			</div>
			<div class="header-right">
				</ul>
				<div class="header-btns">
					<a href="stprofile.php" class="site-btn sb-c3"><?php echo $ID; ?></a>
				</div>
			</div>
		</div>
	</header>

	<section class="DBbody">
		<h3 align="center">Your Details</h3>
		<div class="stdetails">
			<?php
			if (mysqli_num_rows($cq)>0) {
				while ($row = mysqli_fetch_assoc($cq)) {
					$DocID = $row["DocID"];
					$Name = $row["Name"];
					$SP = $row["Specialization"];
					$WH = $row["WorkingHospital"];
					$MOB  = $row["TelNo"];
					$Charge = $row["DoctorCharge"];
					$SL = $row["SLMC"];
					$Gender = $row["Gender"];

					print "<div>
							<p>Doctor ID : $DocID</p>
							<p>Name : $Name</p>
							<p>Specialization : $SP</p>
							<p>Working Hospital : $WH</p>
							<p>Mobile NO : $MOB</p>
							<p>Doctor Charge : $Charge</p>
							<p>SLMC Reg NO : $SL</p>
							<p>Gender : $Gender</p>
					</div>";
				}
			}
			?>
		</div>
		
	</section>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
