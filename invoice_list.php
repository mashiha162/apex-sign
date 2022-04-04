<?php
ob_start();
require 'header.php';
require 'navbar_header.php';
  session_start();
  if (!isset($_SESSION['admin_email'])){
      header('location:index.php');
    }
?>


      <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
          <div class="content-wrapper"><div class="row">
  <div class="col-12">
    <div class="content-header"></div>
  </div>
</div>
                          
<!-- abc -->
<div class="content">
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">INVOICE LIST</h4>
          <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
        </div>
       
     
          <div class="card-body">
            <section class="content">
              <div class="row">
          <div class="table-responsive">
            <table width="100%" cellspacing="1" cellpadding="1" class="table table-striped" id="myTable" >
              <thead style="background-color: rgb(224, 224, 209)">
                <tr>
                  <th style="text-align: center;">Invoice No</th>
                  <th style="text-align: center;">Invoice Date</th>
                  <th style="text-align: center;">Receiver Name</th>
                  <th style="text-align: center;">Invoice Total</th>
                  <th style="text-align: center;">PDF</th>
                  <th style="text-align: center;">Actions</th>
                  
                </tr>
              </thead>
               <?php
          include("connection.php");
           // include("connection.php");
           $sql="SELECT * FROM invoice";
       
          $result=mysqli_query( $conn, $sql);
          while ($row=mysqli_fetch_assoc($result)) 
          {
            echo "<tr class='table'>
            <td align='center'>".$row['bill_no']."</td>
            <td align='center'>".date('d-m-Y', strtotime($row['invoice_date']))."</td>
            <td align='center'>".$row['party_name']."</td>
            
            <td align='center'>".$row['grand_total']."</td>
            <td align='center'><a href='print_invoice.php?pdf=1&id=$row[invoice_id]'>PDF</a></td>
            <td align='center'>
      <a href='delete_invoice.php?invoice_id=$row[invoice_id]&bill_no=$row[bill_no]&party_name=$row[party_name]&invoice_date=$row[invoice_date]&email=$row[email]&mobile= $row[mobile]&gstin=$row[gstin]&bill_address=$row[bill_address]&total=$row[total]&cgst=$row[cgst]&sgst=$row[sgst]&grand_total=$row[grand_total]&notes=$row[notes]'><i class='ft-trash-2 danger'></i></a></td>
           
           
            </tr>";
            # code...
          }
            
            $conn->close();
          ?> 
                
             
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Zero configuration table -->

        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      
        <!-- END : End Main Content-->



       
   <?php
require 'footer.php';
?>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable({
    "pageLength": 25,
    ordering:false
  });
} );
</script>
  </body>
  
  </html>
 