<?php
include("connection.php");
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
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=add_product.php">
<?php
$name=$_POST['material'];
$hsn=$_POST['hsn_code'];

//extract($_POST);

// if(isset($_POST['p_id']))
// {
	$query = " INSERT INTO `add_product`(`material`, `hsn_code`) VALUES ('$name','$hsn')";
	mysqli_query($conn,$query);
// }


$conn->close();

// header("Location:ptinsert.php");
?>