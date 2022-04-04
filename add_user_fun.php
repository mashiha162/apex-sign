<?php
include("connection.php");


?>

<META HTTP-EQUIV="Refresh" CONTENT="0; URL=add_user.php"> 
<?php
$pn=$_POST['username'];
$ds=$_POST['password'];
$rs=$_POST['role'];

// {
	$query = " INSERT INTO `admin_user`(`username`,`password`,`role`) 
    VALUES ('$pn','$ds','rs')";
	mysqli_query($conn,$query);
// }


$conn->close();

// header("Location:ptinsert.php");
?>