<?php
include("connection.php");
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=quotation.php"> 
<?php


if (isset($_POST['totalrow'])) {


$name=$_POST['name'];
$mobile=$_POST['mobile'];

$email=$_POST['email'];
$quot_date=$_POST['quot_date'];
 $date = substr($quot_date,0,2);
          $month = substr($quot_date,3,2);
          $year = substr($quot_date,6,4);
          $newdt = date('Y-m-d',mktime(0,0,0,$month,$date,$year));
$address=$_POST['address'];



$total=$_POST['total'];
$cgst=$_POST['cgst'];
$sgst=$_POST['sgst'];
$grand_total=$_POST['grand_total'];
$note=$_POST['note'];

//extract($_POST);

// if(isset($_POST['p_id']))
// {
	$query = " INSERT INTO `quotation`(`name`, `mobile`,`email`,`quot_date`,`address`,total,`cgst`,`sgst`,`grand_total`,`note`) VALUES ('$name','$mobile','$email','$newdt','$address','$total','$cgst','$sgst','$grand_total','$note')";
	$result=mysqli_query($conn,$query);
// }
	$quot_id = mysqli_insert_id($conn);
	if ($result)
	 {



	$material=$_POST['material'];
$sqft=$_POST['sqft'];
$rate=$_POST['rate'];
$amount=$_POST['amount'];

$query = '';
		for($count=0; $count < $_POST['totalrow']; $count++)
		{

			  $material_clean = mysqli_real_escape_string($conn, $material[$count]);
		  $sqft_clean = mysqli_real_escape_string($conn, $sqft[$count]);
		  $rate_clean = mysqli_real_escape_string($conn, $rate[$count]);
		  $amount_clean = mysqli_real_escape_string($conn, $amount[$count]);
		  if($material != '' && $sqft != '' && $rate != '' && $amount != '')
		  {
		  	 $query .= '
		   INSERT INTO quot_items(quot_id,item, sqft, rate,amount) 
		   VALUES("'.$quot_id.'","'.$material_clean.'", "'.$sqft_clean.'", "'.$rate_clean.'", "'.$amount_clean.'");
		   ';
		  }

		}

			if($query != '')
			 {
			  if(mysqli_multi_query($conn, $query))
			  {
			   // echo 'Item Data Inserted';
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