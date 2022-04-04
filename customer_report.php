<?php
include("connection.php");
session_start();
if (!isset($_SESSION['admin_email'])){
      header('location:index.php');
    }

if(isset($_POST)){
	if(isset($_POST['party_name']) && !empty($_POST['party_name'])){

		$str=" AND party_name LIKE '%".$_POST['party_name']."%' ";
	}else{
		$str="";
	}

	// $conn = mysqli_connect("localhost", "root", "", "apex-sign");
	$result = '';
	$query = "SELECT * FROM sale_entry 
					WHERE sale_date BETWEEN '".$_POST["FromDate"]."' AND '".$_POST["toDate"]."'
					$str
					";

	$sql = mysqli_query($conn, $query);
	     $Data =mysqli_fetch_all($sql,MYSQLI_ASSOC);
	
	
if(mysqli_num_rows($sql) > 0){
	$result .='
	 <div id="purchase_order">
        <div class="card-content ">
          <div class="card-body card-dashboard table-responsive">
            <table class="table table-striped table-bordered file-export ">
              <thead>
                <tr>
                
                  <th>Date</th>
                  <th>Party name</th>
                  <th>Discription</th>
                  <th>Material</th>
                  <th>Width</th>
                  <th>height</th>
                  <th>Qty</th>
                  <th>Total Ft</th>
                  <th>Rate</th>
                  <th>Amount</th>
                  <th>Cash/Credit</th>
                </tr>
              </thead>
	';
	
	foreach ($Data as $key => $data) {
		$result .='

			<tr>
			
			<td>'.date('d-m-Y', strtotime($data['sale_date'])).'</td>
			<td>'.$data["party_name"].'</td>
			<td>'.$data["discription"].'</td>
			<td>'.$data["material"].'</td>
			<td>'.$data["width"].'</td>
			<td>'.$data["height"].'</td>
			<td>'.$data["qty"].'</td>
			<td>'.$data["total_ft"].'</td>
			<td>'.$data["rate"].'</td>
			<td>'.$data["amount"].'</td>
			<td>'.$data["cash_cre"].'</td>
			
			</tr>';
	}

}else{
	$result .='
		<tr>
		<td colspan="5">No Purchased Item Found</td>
		</tr>';
}
	
	$result .='</table>';
	echo $result;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

 <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">

</head>
<body>
 <script src="app-assets/vendors/js/datatable/datatables.min.js" type="text/javascript"></script>
     <script src="app-assets/vendors/js/datatable/datatables.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/datatable/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/datatable/buttons.flash.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/datatable/jszip.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/datatable/pdfmake.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/datatable/vfs_fonts.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/datatable/buttons.html5.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/datatable/buttons.print.min.js" type="text/javascript"></script>
 <script src="app-assets/js/data-tables/datatable-basic.js" type="text/javascript"></script>
    <script src="app-assets/js/data-tables/datatable-advanced.js" type="text/javascript"></script>

</body>
</html>