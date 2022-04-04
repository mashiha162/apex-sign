
<?php
include("connection.php");

$id= $_GET['stock_id'];
$query = "DELETE FROM stock_purchase WHERE stock_id = '$id'";
$data = mysqli_query($conn, $query);
if ($data) {
	// echo "Success";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=purchase_list.php">
	<?php
}
else
{
	echo "fail";
}

  ?>