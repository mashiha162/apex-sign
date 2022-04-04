
<?php
include("connection.php");

$id= $_GET['admin_id'];
$query = "DELETE FROM admin WHERE admin_id = '$id'";
$data = mysqli_query($conn, $query);
if ($data) {
	// echo "Success";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=manage_user.php">
	<?php
}
else
{
	echo "fail";
}

  ?>