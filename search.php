<?php
ob_start();
require 'header.php';
require 'navbar_header.php';
session_start();
if (!isset($_SESSION['admin_email'])){
      header('location:index.php');
    }



include("connection.php");
$query = "SELECT * FROM sale_entry ORDER BY id desc";
$sql = mysqli_query($conn, $query);
 


//FETCH PARTIES NAME FROM PARTY TABLE

$q = "SELECT * FROM add_party";
$result = mysqli_query($conn, $q);
if ($result) {
  while ($temp = mysqli_fetch_assoc($result)) {
    $partylist[]  = $temp;
  }
}

// product fetch
$p = "SELECT * FROM add_product";
$result2 = mysqli_query($conn, $p);
if ($result2) {
  while ($pro = mysqli_fetch_assoc($result2)) {
    $productlist[]  = $pro;
  }
}

?>



      <div class="main-panel">
        <!-- BEGIN : Main Content-->
       <div class="main-content">
          <div class="content-wrapper">
            <div class="row">
  <div class="col-12">
    <div class="content-header">
      
    </div>
  </div>
</div>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">SEARCH BILL</h4>
            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
          </div>
          <!-- <div class="card-body"> -->
            <!-- <div class="table-responsive"> -->
             
<!--Basic Table Starts-->



        
        <div class="card-content">
          <div class="card-body">
          <form action="search.php" method="POST">
           
                        <table class="table table-responsive" >
              
                 
        <tr>
        
            <th>Payment</th>
            <th>Customer Name</th>
            <th>Material</th>
            <th>From Date</th>
            <th>To date</th>
          
        </tr>
        <tr>
          <tbody>
          <td>
         
          <select name="cash_cre" id="cash_cre" class="form-control" placeholder="Payment Type">
            <option>SELECT</option>
            <option value="CASH">CASH</option>
            <option value="CREDIT">CREDIT</option>
      
          </select></td>
            <td>
             <select id="party_name" name="party_name" class="form-control">
        <option value="">Select Party</option>
        <?php 
        foreach($partylist as $t)
          {
            // echo '<option value="'.$t['p_id'].'">'.$t['name'].'</option>';
            echo '<option value="'.$t['name'].'">'.$t['name'].'</option>';
          }
         ?> 
     </td>
          <td>  
           <select id="material" name="material" class="form-control">
        <option value="">Select Product</option>
        <?php 
        foreach($productlist as $pl)
          {
            // echo '<option value="'.$t['p_id'].'">'.$t['name'].'</option>';
            echo '<option value="'.$pl['material'].'">'.$pl['material'].'</option>';
          }
         ?> 
     </td>
     
    <td><input type="text" name="from_date" id="From" class="form-control" placeholder="From Date" autocomplete="OFF" /></td>
    <td><input type="text" name="to_date" id="to" class="form-control" placeholder="To date" autocomplete="OFF"></td>
   <!--  <td> <input type="button" name="range" id="range" value="Range" class="btn btn-success"/> </td> -->
        </tr>
        </tbody>
        
      </table>
      <div class="text-center ">
             <!--  <input type="submit" name="submit" value="Submit" class="btn btn-raised btn-primary" >  -->
             <td> <input type="button" name="range" id="range" value="Submit" class="btn btn-success"/>
              
    </div>
      
    
      
            
           
           
          </form>
    
</div>
          </div>
        </div>
        </div>
        </div>
        <section id="file-export">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"></h4>
        
        </div>
        <div id="purchase_order">
        <div class="card-content ">
          <div class="card-body card-dashboard table-responsive">
            <table class="table table-striped table-bordered file-export" id="myTable">
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
              <tbody>
                 <?php 
      

      if (isset($_POST['submit'])){

        // $party_name = $_POST['party_name'];
        $cash_cre = $_POST['cash_cre'];
        // $email = $_POST['email'];
        $party_name = $_POST['party_name'];
        $material = $_POST['material'];

    
        

         $query = "SELECT * FROM sale_entry WHERE party_name = '$party_name' OR cash_cre ='$cash_cre' || material = '$material' ";
        
        
        $data = mysqli_query($conn, $query) or die('error');
        
        if (mysqli_num_rows($data)>0) {
          while ($row = mysqli_fetch_assoc($data)) {
          
            
             echo "<tr class='table'>
    
      <td>".$row['sale_date']."</td>
      <td>".$row['party_name']."</td>
      <td>".$row['discription']."</td>
      <td>".$row['material']."</td>
      <td>".$row['width']."</td>
      <td>".$row['height']."</td>
      <td>".$row['qty']."</td>
      <td>".$row['total_ft']."</td>
      <td>".$row['rate']."</td>
      <td>".$row['amount']."</td>
      <td>".$row['cash_cre']."</td>
          
           </tr>";
      # code...
      


            // $from_date = $row['from_date'];
            // $to_date = $row['to_date'];
            ?>
            
            <?php
          }
        }
        else
        {
          ?>
          <tr>
            <td>Records not found</td>
          </tr>
          <?php
        }

      }
    
       ?>
              </tbody>
              <tfoot>
             
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- File export table -->
        </div>

        </div>
        </div>
        </div>
        </div>
        </div>
 


        </div>
        </div>
    
        <!-- END : End Main Content-->
        <!-- END : End Main Content-->



        <!-- BEGIN : Footer-->
        <footer class="footer footer-static footer-light">
          <p class="clearfix text-muted text-sm-center px-2"><span>Copyright  &copy; 2019 APEX-SIGN, All rights reserved. </span></p>
        </footer>
        <!-- End : Footer-->

      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    

    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/vendors/js/core/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/core/popper.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/prism.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/screenfull.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/pace/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/js/pickadate/picker.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/pickadate/picker.date.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/pickadate/picker.time.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/pickadate/legacy.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/datatable/datatables.min.js" type="text/javascript"></script>
     <script src="app-assets/vendors/js/datatable/datatables.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/datatable/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/datatable/buttons.flash.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/datatable/jszip.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/datatable/pdfmake.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/datatable/vfs_fonts.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/datatable/buttons.html5.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/datatable/buttons.print.min.js" type="text/javascript"></script>

    
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="app-assets/js/app-sidebar.js" type="text/javascript"></script>
    <script src="app-assets/js/notification-sidebar.js" type="text/javascript"></script>
    <script src="app-assets/js/customizer.js" type="text/javascript"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script type="text/javascript" src="app-assets/js/jquery-ui.js"></script>
    <script src="app-assets/js/pick-a-datetime.js" type="text/javascript"></script>
    <script src="app-assets/js/data-tables/datatable-basic.js" type="text/javascript"></script>
    <script src="app-assets/js/data-tables/datatable-advanced.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
      <script>
$(document).ready(function(){
  $.datepicker.setDefaults({
    dateFormat: 'yy-mm-dd'
  });
  $(function(){
    $("#From").datepicker();
    $("#to").datepicker();
  });
  $('#range').click(function(){
    var party_name=$("#party_name").val();
    var material=$("#material").val();
    var cash_cre=$("#cash_cre").val();
    var From = $('#From').val();
    var to = $('#to').val();
    
   
      $.ajax({
        'type' :'post',
        'url'  :"search_range.php",
        'data' :{'FromDate':From,'toDate':to,'party_name':party_name, 'material':material,'cash_cre':cash_cre},
        success:function(data){
          console.log(data);
          $('#purchase_order').html(data);
        }
      });
    
   
  });
});
</script>

  </body>
  <!-- END : Body-->
</html>