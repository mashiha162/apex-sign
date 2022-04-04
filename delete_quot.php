
<?php
include("connection.php");

$id= $_GET['quot_id'];
$query = "DELETE FROM quotation WHERE quot_id = '$id'";
$data = mysqli_query($conn, $query);
if ($data) {
	// echo "Success";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=quotation_list.php">
	<?php
}
else
{
	echo "fail";
}

  ?>