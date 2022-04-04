
<?php
include("connection.php");

$id= $_GET['id'];

$query = "DELETE FROM add_product WHERE id = '$id'";
$data = mysqli_query($conn, $query);
if ($data) {
	// echo "Success";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=product_list.php">
	<?php
}
else
{
	echo "fail";
}

  ?>