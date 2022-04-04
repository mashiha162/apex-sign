<?php 
include ("connection.php");

?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=taskboard.php"> 
<?php

$task = $_POST['task'];
$discription = $_POST['discription'];
$date = $_POST['date'];
$query= "INSERT INTO `task`(`task`,`discription`,`date`) VALUES ('$task','$discription',
'$date')";
mysqli_query($conn,$query);
 ?>