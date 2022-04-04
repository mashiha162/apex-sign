<?php
$sname="localhost";
$username="root";
$password="";
$dbname="apex_sign";

// $sname="localhost";
// $username="root";
// $password="";
// $dbname="apex_sign";

$conn = mysqli_connect($sname,$username,$password,$dbname);
if($conn){
    echo "connected";

}


?>