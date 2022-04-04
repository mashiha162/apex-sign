
<?php
include("connection.php");

$id= $_GET['id'];

$query = "DELETE FROM vendor WHERE id = '$id'";
$data = mysqli_query($conn, $query);
if ($data) {
	// echo "Success";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=add_vendor.php">
	<?php
}
else
{
	echo "fail";
}

  ?>