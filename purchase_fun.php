<?php
include("connection.php");

if (isset($_POST['totalrow']))
 {

$vname=$_POST['vendor_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$dt=$_POST['purchase_date'];
 $date = substr($dt,0,2);
          $month = substr($dt,3,2);
          $year = substr($dt,6,4);
          $newdt = date('Y-m-d',mktime(0,0,0,$month,$date,$year));
$address=$_POST['address'];



$total=$_POST['total'];
$cgst=$_POST['cgst'];
$sgst=$_POST['sgst'];
$tcost=$_POST['transportation_cost'];

$grand_total=$_POST['grand_total'];
$note=$_POST['note'];

//extract($_POST);

// if(isset($_POST['p_id']))
// {
	$query = " INSERT INTO `stock_purchase`(`vendor_name`,`email`, `phone`,`purchase_date`,`address`,`total`,`cgst`,`sgst`,`transportation_cost`,`grand_total`,`note`) VALUES ('$vname','$email','$phone','$newdt','$address','$total','$cgst','$sgst','$tcost','$grand_total','$note')";
	$result=mysqli_query($conn,$query);
// }
// 	$quot_id = mysqli_insert_id($conn);
// 	if ($result)
	
	$stock_id = mysqli_insert_id($conn);
	if ($result) {



	$material=$_POST['material'];
	$hsn_code=$_POST['hsn_code'];
	$qty=$_POST['qty'];
$unit=$_POST['unit'];
$sqft=$_POST['sqft'];

$rate=$_POST['rate'];
$amount=$_POST['amount'];

$query = '';
		for($count=0; $count < $_POST['totalrow']; $count++)
		{

			  $material_clean = mysqli_real_escape_string($conn, $material[$count]);
			  $hsn_code_clean = mysqli_real_escape_string($conn, $hsn_code[$count]);
			  $qty_clean = mysqli_real_escape_string($conn, $qty[$count]);
		  $unit_clean = mysqli_real_escape_string($conn, $unit[$count]);
		  $sqft_clean = mysqli_real_escape_string($conn, $sqft[$count]);
		  $rate_clean = mysqli_real_escape_string($conn, $rate[$count]);
		  $amount_clean = mysqli_real_escape_string($conn, $amount[$count]);
		  if($material != '' && $hsn_code != '' && $qty != '' &&$unit != '' && $sqft != '' && $rate != '' && $amount != '')
		  {
		  	 $query .= '
		   INSERT INTO stock_items(stock_id,items,hsn_code,qty,unit,sqft,rate,amount) 
		   VALUES("'.$stock_id.'","'.$material_clean.'","'.$hsn_code_clean.'","'.$qty_clean.'","'.$unit_clean.'", "'.$sqft_clean.'", "'.$rate_clean.'", "'.$amount_clean.'");
		   ';
		  }

		}

			if($query != '')
			 {
			  if(mysqli_multi_query($conn, $query))
			  {
			   echo 'Item Data Inserted';
			  }
			  else
			  {
			   echo 'Error';
			  }
			 }
			 else
			 {
			  echo 'All Fields are Required';
			 }
}else{
	echo "Invoice insertion erro";
}

}


$conn->close();

// header("Location:ptinsert.php");
?>