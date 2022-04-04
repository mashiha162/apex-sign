
<?php
include("connection.php");

$id= $_GET['sale_id'];
$query = "DELETE FROM sale_entry WHERE SALE_ID = '$id'";
$data = mysqli_query($conn, $query);
if ($data) {
	// echo "Success";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=data_entry.php">
	<?php
}
else
{
	echo "fail";
}

  ?>