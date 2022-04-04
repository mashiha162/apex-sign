<?php 
unset($_SESSION['admin_email']);
session_destroy();
setcookie('PHPSESSID', '', time() - 86400, '/');
header('Location:index.php');

 ?>