
<?php
include("connection.php");

$id= $_GET['invoice_id'];
$query = "DELETE FROM invoice WHERE invoice_id = '$id'";
$data = mysqli_query($conn, $query);
if ($data) {
	// echo "Success";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=invoice_list.php">
	<?php
}
else
{
	echo "fail";
}

  ?>