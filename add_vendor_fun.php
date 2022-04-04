<?php
include("connection.php");
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=add_vendor.php">
<?php
$vname=$_POST['vendor_name'];
$cname=$_POST['c_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];

//extract($_POST);

// if(isset($_POST['p_id']))
// {
	$query = " INSERT INTO `vendor`(`vendor_name`, `c_name`,`email`, `phone`, `address`) VALUES ('$vname','$cname','$email','$phone','$address')";
	mysqli_query($conn,$query);
// }


$conn->close();

// header("Location:ptinsert.php");
?>