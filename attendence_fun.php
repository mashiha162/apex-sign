<?php
include("connection.php");

?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=attendence.php">
<?php
$emp_name=$_POST['emp_name'];
$dt=$_POST['date'];
$date = substr($dt,0,2);
          $month = substr($dt,3,2);
          $year = substr($dt,6,4);
          $newdt = date('Y-m-d',mktime(0,0,0,$month,$date,$year));
$time_in=$_POST['time_in'];
$time_out=$_POST['time_out'];


	$query = " INSERT INTO `attendance`(`emp_name`,`date`,`time_in`,`time_out`) VALUES ('$emp_name','$newdt','$time_in','$time_out')";
	mysqli_query($conn,$query);
// }


$conn->close();

// header("Location:ptinsert.php");
?>