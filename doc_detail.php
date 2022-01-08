<?php
	require('connection.php');

	$DOCID = "";
	$NAME = "";
	$SP = "";
	$WH = "";
	$MOB = "";
	$CHARGE = "";
	$SLMC = "";
	$GENDER = "";

	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

	function getPosts(){
		$posts = array();
		$posts[0] = $_POST['ID'];
		$posts[1] = $_POST['Name'];
		$posts[2] = $_POST['Specialization'];
		$posts[3] = $_POST['Hospital'];
		$posts[4] = $_POST['MobNo'];
		$posts[5] = $_POST['DocCharge'];
		$posts[6] = $_POST['RegNo'];
		$posts[7] = $_POST['sex'];
		return $posts;
	}

	if (isset($_POST['search'])) {
		$data = getPosts();

		$search_query = "SELECT * FROM doctor WHERE DocID = $data[0]";
		$search_result = mysqli_query($con,$search_query);
		if($search_result){
			if(mysqli_num_rows($search_result)){
				while($row = mysqli_fetch_array($search_result)){
					$DOCID = $row['DocID'];
					$NAME = $row['Name'];
					$SP = $row['Specialization'];
					$WH = $row['WorkingHospital'];
					$MOB = $row['TelNo'];
					$CHARGE = $row['DoctorCharge'];
					$SLMC = $row['SLMC'];
					$GENDER = $row['Gender'];
				}
			}else{
				echo '<script>alert("No Data for this ID!")</script>';
			}
		}
		else{
			echo '<script>alert("Result Error!")</script>';
		}
	}

	if(isset($_POST['delete'])){
		$data = getPosts();
		$delete_query = "DELETE FROM doctor WHERE DocID = $data[0]";
		try{
			$delete_result = mysqli_query($con, $delete_query);
			if($delete_result){
				if(mysqli_affected_rows($con)>0){
					echo '<script>alert("Data DELETED!")</script>';
				}else{
					echo '<script>alert("Data Not Deleted!")</script>';
				}
			}
		}catch(Exception $ex){
			echo 'error delete'.$ex->getMessage();
		}
	}

	if(isset($_POST['update'])){
		$data = getPosts();
		$update_query = "UPDATE `doctor` SET `Name`='$data[1]',`Specialization`='$data[2]',`WorkingHospital`='$data[3]',`TelNo`='$data[4]',`DoctorCharge`='$data[5]',`SLMC`='$data[6]',`Gender`='$data[7]' WHERE `DocID`=$data[0]";
		try{
			$update_result = mysqli_query($con, $update_query);
			if($update_result){
				if(mysqli_affected_rows($con)>0){
					echo '<script>alert("Data Updated Successfully!")</script>';
				}else{
					echo '<script>alert("Data Not Updated!")</script>';
				}
			}
		}catch(Exception $ex){
			echo 'error update'.$ex->getMessage();
		}
	}


?>
<!DOCTYPE html>
<html>
	<style>
.btn-group input {
  background-color: #485a68;
  border: 1px solid green;
  color: white;
  padding: 5px 4px;
  cursor: pointer;
  float: left; 
  margin-right: 170px;
}

.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group button:not(:last-child) {
  border-right: none; 
}
.btn-group button:hover {
  background-color: #485a68;
}
</style>
<head>
	<title> Details - Doctor</title>
	<meta charset="UTF-8">
	<link href="img/logo.jpg" rel="shortcut icon"/>
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/employeeApp.css"/>
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
				<h2 style="text-align: center">Doctor Details</h2>
				</div>
			</div>
		</div>
	</header>
	<div class="emp" style="background-color: #78a7be">
		<form class="formemp" method="POST">
			<fieldset class="pDetail">

				<br><br><br><br>
				Doctor ID :
				<input type="text" class="text-line" name="ID" value="<?php echo $DOCID; ?>" >
				<br><br><br>

				Name :
				<input type="text" class="text-line" name="Name" value="<?php echo $NAME; ?>">
				<br><br><br>	
						
				Specialization : 
				<input type="text" class="text-line" name="Specialization" value="<?php echo $SP; ?>">
				<br><br><br>

				Working Hospital : 
				<input type="text" class="text-line" name="Hospital" value="<?php echo $WH; ?>">
				<br><br><br>

				Mobile NO : 
				<input type="text" class="text-line" name="MobNo" value="<?php echo $MOB; ?>">
				<br><br><br>

				Doctor Charge : 
				<input type="text" class="text-line" name="DocCharge" value="<?php echo $CHARGE; ?>">
				<br><br><br>

				SLMC Reg. Number : 
				<input type="text" class="text-line" name="RegNo" value="<?php echo $SLMC; ?>">
				<br><br><br>

				Gender: 
				<input type="text" class="text-line" name="sex" value="<?php echo $GENDER; ?>">
				<br><br><br>

				<div class="btn-group">
               		<input   type="submit" name="search" value="Search"><br>
                	<input   type="submit" name="update" value="Update"><br>
                	<input   type="submit" name="delete" value="Delete">
                </div>
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