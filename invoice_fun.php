<?php
include("connection.php");


//<!-- <META HTTP-EQUIV="Refresh" CONTENT="0; URL=invoice.php"> -->


if (isset($_POST['totalrow'])) {
// for invoice

$bill_no = $_POST['bill_no'];
$party_name = $_POST['party_name'];
$dt = $_POST['invoice_date'];
          $date = substr($dt,0,2);
          $month = substr($dt,3,2);
          $year = substr($dt,6,4);
          $newdt = date('Y-m-d',mktime(0,0,0,$month,$date,$year));

$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gstin = $_POST['gstin'];
$bill_address = $_POST['bill_address'];
$total = $_POST['total'];
$cgst = $_POST['cgst'];
$sgst = $_POST['sgst'];
$grand_total = $_POST['grand_total'];
$notes = $_POST['notes'];

 $query = " INSERT INTO `invoice`(`bill_no`, `party_name`,`invoice_date`,`email`,`mobile`,`gstin`,`bill_address`,`total`,`cgst`,`sgst`,`grand_total`,`notes`) VALUES ('$bill_no','$party_name','$newdt','$email','$mobile','$gstin','$bill_address','$total','$cgst','$sgst','$grand_total','$notes')";
	$result = mysqli_query($conn,$query);
	$invoice_id = mysqli_insert_id($conn);
	if ($result) {

		// for items row
		$item = $_POST['material'];
		$hsn = $_POST['hsn_code'];
		$qty = $_POST['qty'];
		$sqft = $_POST['sqft'];
		$rate = $_POST['rate'];
		$amount = $_POST['amount'];

		$query = '';
		for($count=0; $count < $_POST['totalrow']; $count++){

		  $item_clean = mysqli_real_escape_string($conn, $item[$count]);
		  $hsn_clean = mysqli_real_escape_string($conn, $hsn[$count]);
		  $qty_clean = mysqli_real_escape_string($conn, $qty[$count]);
		  $sqft_clean = mysqli_real_escape_string($conn, $sqft[$count]);
		  $rate_clean = mysqli_real_escape_string($conn, $rate[$count]);
		  $amount_clean = mysqli_real_escape_string($conn, $amount[$count]);
		  
		  
		  if($item != '' && $hsn != '' && $qty != '' && $sqft != '' && $rate!= '' && $amount!='')
		  {
		   $query .= '
		   INSERT INTO items(invoice_id,item, hsn, qty, sqft, rate, amount) 
		   VALUES("'.$invoice_id.'", "'.$item_clean.'", "'.$hsn_clean.'", "'.$qty_clean.'", "'.$sqft_clean.'", "'.$rate_clean.'", "'.$amount_clean.'");
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