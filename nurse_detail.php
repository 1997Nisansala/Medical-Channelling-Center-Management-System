<?php
	require('connection.php');

	$NURSEID = "";
	$NAME = "";
	$GENDER = "";
	$DOB = "";
	$MOB = "";
	$ADDRESS = "";

	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

	function getPosts(){
		$posts = array();
		$posts[0] = $_POST['ID'];
		$posts[1] = $_POST['Name'];
		$posts[2] = $_POST['sex'];
		$posts[3] = $_POST['dob'];
		$posts[4] = $_POST['MobNo'];
		$posts[5] = $_POST['Address'];
		return $posts;
	}

	if (isset($_POST['search'])) {
		$data = getPosts();

		$search_query = "SELECT * FROM nurse WHERE NurseID = $data[0]";
		$search_result = mysqli_query($con,$search_query);
		if($search_result){
			if(mysqli_num_rows($search_result)){
				while($row = mysqli_fetch_array($search_result)){
					$NURSEID = $row['NurseID'];
					$NAME = $row['Name'];
					$GENDER = $row['Gender'];
					$DOB = $row['DOB'];
					$MOB = $row['TelNo'];
					$ADDRESS = $row['Address'];
				}
			}else{
				echo 'No data for this ID';
			}
		}
		else{
			echo 'Result Error';
		}
	}

	if(isset($_POST['delete'])){
		$data = getPosts();
		$delete_query = "DELETE FROM nurse WHERE NurseID = $data[0]";
		try{
			$delete_result = mysqli_query($con, $delete_query);
			if($delete_result){
				if(mysqli_affected_rows($con)>0){
					echo '<script>alert("Data DELETED!")</script>';
				}else{
					echo 'Data not Deleted';
				}
			}
		}catch(Exception $ex){
			echo 'error delete'.$ex->getMessage();
		}
	}

	if(isset($_POST['update'])){
		$data = getPosts();
		$update_query = "UPDATE `nurse` SET `Name`='$data[1]',`Gender`='$data[2]',`DOB`='$data[3]',`TelNo`='$data[4]',`Address`='$data[5]' WHERE `NurseID`=$data[0]";
		try{
			$update_result = mysqli_query($con, $update_query);
			if($update_result){
				if(mysqli_affected_rows($con)>0){
					echo '<script>alert("Data Updated Successfully!")</script>';
				}else{
					echo 'Data not Updated';
				}
			}
		}catch(Exception $ex){
			echo 'error update'.$ex->getMessage();
		}
	}

		if(isset($_POST['add'])){
		$data = getPosts();
		$insert_query = "INSERT INTO  `nurse`(`NurseID`, `TelNo`, `Name`, `Gender`, `DOB`, `Address`)  VALUES ('$data[0]','$data[4]','$data[1]','$data[2]','$data[3]','$data[5]')";
		try{
			$insert_result = mysqli_query($con, $insert_query);
			if($insert_result){
				if(mysqli_affected_rows($con)>0){
					echo '<script>alert("Data Inserted Successfully!")</script>';
				}else{
					echo 'Data not Inserted';
				}
			}
		}catch(Exception $ex){
			echo 'error insert'.$ex->getMessage();
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
  margin-right: 100px;
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
	<title> Details - Nurse</title>
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
				<h2 style="text-align: center;" > Nurse Details</h2>
				</div>
			</div>
		</div>
	</header>
	
	<div class="emp" style="background-color: #78a7be">
		<form class="formemp" method="POST">
			<fieldset class="pDetail">

				<br><br><br><br>
				Nurse ID :
				<input type="text" class="text-line" name="ID" value="<?php echo $NURSEID; ?>" >
				<br><br><br>

				Name :
				<input type="text" class="text-line" name="Name" value="<?php echo $NAME; ?>">
				<br><br><br>	
						
				Gender : 
				<input type="text" class="text-line" name="sex" value="<?php echo $GENDER; ?>">
				<br><br><br>

				Date of Birth : 
				<input type="date" class="text-line" name="dob" value="<?php echo $DOB; ?>">
				<br><br><br>

				Mobile NO : 
				<input type="text" class="text-line" name="MobNo" value="<?php echo $MOB; ?>">
				<br><br><br>

				Address : 
				<input type="text" class="text-line" name="Address" value="<?php echo $ADDRESS; ?>">
				<br><br><br>

				<div class="btn-group">
               		<input type="submit" name="search" value="Search"><br>
                	<input type="submit" name="update" value="Update"><br>
                	<input type="submit" name="delete" value="Delete"><br>
                	<input type="submit" name="add" value="Add">
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