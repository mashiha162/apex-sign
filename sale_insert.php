<?php
include("connection.php");


?>

<META HTTP-EQUIV="Refresh" CONTENT="0; URL=data_entry.php"> 
<?php
 $dt = $_POST['sale_date'];
          $date = substr($dt,0,2);
          $month = substr($dt,3,2);
          $year = substr($dt,6,4);
          $newdt = date('Y-m-d',mktime(0,0,0,$month,$date,$year));

$pn=$_POST['party_name'];
$ds=$_POST['discription'];
$mt=$_POST['material'];
$wt=$_POST['width'];

$hg=$_POST['height'];
$qt=$_POST['qty'];
$tf=$_POST['total_ft'];
$rt=$_POST['rate'];
$amt=$_POST['amount'];
$cc=$_POST['cash_cre'];
//extract($_POST);

// if(isset($_POST['p_id']))
// {
	$query = " INSERT INTO `sale_entry`(`sale_date`,`party_name`, `discription`, `material`, `width`, `height`, `qty`, `total_ft`, `rate`, `amount`, `cash_cre`) 
    VALUES ('$newdt','$pn','$ds','$mt','$wt','$hg','$qt','$tf','$rt','$amt','$cc')";
	mysqli_query($conn,$query);
// }
	


$conn->close();

// header("Location:ptinsert.php");
?>