
<?php
include("connection.php");

$id= $_GET['id'];

$query = "DELETE FROM employees WHERE id = '$id'";
$data = mysqli_query($conn, $query);
if ($data) {
	// echo "Success";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=add_employee.php">
	<?php
}
else
{
	echo "fail";
}

  ?>