<?php
$servername="localhost";
$username="root";
$password="";
$dbname="apex_sign";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    echo "connected";

}

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

   $query = " INSERT INTO `sale_entry`(`sale_date`,`party_name`, `discription`, `material`, `width`, `height`, `qty`, `total_ft`, `rate`, `amount`, `cash_cre`) 
   VALUES ('$newdt','$pn','$ds','$mt','$wt','$hg','$qt','$tf','$rt','$amt','$cc')";
   mysqli_query($conn,$query);

?>
    
    
    ?>