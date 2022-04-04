<?php 
session_start();
include("connection.php");
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trimurtii Admin Area</title>
	<link rel="stylesheet" href="css/bootstrap-337.min.css">
	<link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/login.css">
</head>
<body>

	<div class="container"><!-- container begin -->
		<form action="" class="form-login" method="post"><!-- form-login begin -->
			<h2 class="form-login-heading"> Admin Login </h2>

			<input type="text" class="form-control" placeholder="Email Address" name="admin_email" required>

			<input type="password" class="form-control" placeholder="Your Password" name="admin_pass" required>

			<button type="submit" class="btn btn-lg btn-primary btn-block" name="admin_login"><!-- btn btn-lg btn-primary btn-block begin -->

				Login

			</button><!-- btn btn-lg btn-primary btn-block finish -->

		</form><!-- form-login finish -->
	</div><!-- container finish -->

</body>
</html>


<?php 

if(isset($_POST['admin_login'])){
	$admin_email = $_POST['admin_email'];
	$admin_pass = $_POST['admin_pass'];
	$get_admin = mysqli_query($conn,"select * from admin where admin_email='$admin_email' AND admin_pass='$admin_pass'");
	$count = mysqli_fetch_array($get_admin);
	if($count['admin_pass'] == $admin_pass){
		$_SESSION['admin_email']=$admin_email;
		header('location:dashboard.php');
	}
	else
	{
		echo "<script>alert('Email or Password is Wrong !')</script>";
	}
}
?>