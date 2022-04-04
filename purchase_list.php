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
          <h4 class="card-title ">PURCHASE LIST</h4>
          <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
        </div>
       
     
          <div class="card-body">
            <section class="content">
              <div class="row">
          <div class="table-responsive">
            <table class="table table-striped table-bordered zero-configuration">
              <thead>
                <tr>
                  <th style="text-align: center;">Purchase No</th>
                  <th style="text-align: center;">Purchase Date</th>
                  <th style="text-align: center;">Vendor</th>
                  <th style="text-align: center;">Grand Total</th>
                  <th style="text-align: center;">Actions</th>
                 
                </tr>
              </thead>
               <?php
          include("connection.php");
           $sql="SELECT * FROM stock_purchase";
       
          $result=mysqli_query( $conn, $sql);
          while ($row=mysqli_fetch_assoc($result)) 
          {
            echo "<tr class='table'>
            <td align='center'>".$row['stock_id']."</td>
            <td align='center'>".$row['purchase_date']."</td>
            <td align='center'>".$row['vendor_name']."</td>
            
            <td align='center'>".$row['grand_total']."</td>
           
            <td align='center'><a href='delete_purchase.php?stock_id=$row[stock_id]'><i class='ft-trash-2 danger'></i></a></td>
           
           
           
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
   
      
        <!-- END : End Main Content-->



       
   <?php
require 'footer.php';
?>
  </body>
  
  </html>
  

    });
    </script>
