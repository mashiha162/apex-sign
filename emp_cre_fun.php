<?php
include("connection.php");

?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=employee_credit.php">
<?php
$emp_name=$_POST['emp_name'];
$dt=$_POST['date_advance'];
$date = substr($dt,0,2);
          $month = substr($dt,3,2);
          $year = substr($dt,6,4);
          $newdt = date('Y-m-d',mktime(0,0,0,$month,$date,$year));
$amount = $_POST['amount'];	


	$query = " INSERT INTO `cashadvance`(`date_advance`,`emp_name`,`amount`) VALUES
	 ('$newdt','$emp_name','$amount')";
	mysqli_query($conn,$query);
// }


$conn->close();

// header("Location:ptinsert.php");
?>