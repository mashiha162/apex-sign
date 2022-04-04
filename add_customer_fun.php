<?php
include("connection.php");

$conn = mysqli_connect($sname,$username,$password,$dbname);
/*if($conn)
{
	echo "Connected";
}
else
{
	echo "Connection Failed";
}*/
// $p_id=$_POST['p_id'];
// $name=$_POST['name'];
// $mobile=$_POST['mobile'];
// $address=$_POST['address'];
// $email=$_POST['email'];

// $p_id=$_POST['p_id'];
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=add_customer.php">
<?php
$name=$_POST['name'];
$cname=$_POST['c_name'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$email=$_POST['email'];
//extract($_POST);

// if(isset($_POST['p_id']))
// {
	$query = " INSERT INTO `add_party`(`name`, `c_name`,`mobile`, `address`, `email`) VALUES ('$name','$cname','$mobile','$address','$email')";
	mysqli_query($conn,$query);
// }


$conn->close();

// header("Location:ptinsert.php");
?>