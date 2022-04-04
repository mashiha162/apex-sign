<?php
include("connection.php");

?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=add_employee.php">
<?php
$emp_name=$_POST['emp_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$gender=$_POST['gender'];
$address=$_POST['address'];


	$query = " INSERT INTO `employees`(`emp_name`,`address`,`email`,
	`phone`,`gender`) VALUES ('$emp_name','$address','$email','$phone','$gender')";
	mysqli_query($conn,$query);
// }


$conn->close();

// header("Location:ptinsert.php");
?>