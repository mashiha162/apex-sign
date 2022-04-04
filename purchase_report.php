<?php
include("connection.php");
require 'header.php';
require 'navbar_header.php';



 

    //FETCH vendor NAME FROM PARTY TABLE
include("connection.php");
$q = "SELECT * FROM vendor";
$result = mysqli_query($conn, $q);
if ($result) {
  while ($temp = mysqli_fetch_assoc($result)) {
    $vendorlist[]  = $temp;
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
            <h4 class="card-title ">Purchase Report</h4>
            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
          </div>
          <!-- <div class="card-body"> -->
            <!-- <div class="table-responsive"> -->
             
<!--Basic Table Starts-->



        
        <div class="card-content">
          <div class="card-body">
          <form method="POST">

             <div class="row">
           <div class="col-md-4">
                                                  <div class="form-group">
                                                      <label>Vendor<span class="required" aria-required="true">*</span></label>
                                                      <select id="vendor_name" name="vendor_name" class="form-control" 
                    placeholder="Select Vendor" required autocomplete="off">
                   
       
        <?php 
        foreach($vendorlist as $t)
          {
            // echo '<option value="'.$t['p_id'].'">'.$t['name'].'</option>';
            echo '<option value="'.$t['vendor_name'].'">'.$t['vendor_name'].'</option>';
          }
         ?> 
       </select>
                                                  </div>
                                              </div>
                                             <div class="col-md-4">
                                                  <div class="form-group">
                                                     <label> From Date </label>
                                                      <input type="text" name="from_date" id="From" class="form-control" placeholder="From Date" autocomplete="off" />
                                                  </div>
                                              </div>
                                               <div class="col-md-4">
                                                  <div class="form-group">
                                                     <label>To Date</label>
                                                     <input type="text" name="to_date" id="to" class="form-control" placeholder="To date" autocomplete="off">
                                                  </div>
                                              </div>

                                          </div>
            </form>
    
</div>


        </div>
        <div><br></div>
        <div class="text-center ">
             <input type="button" name="range" id="range" value="Submit" class="btn btn-success"/> 
              
    </div>
    <div><br></div>
          </div>
        </div>
        </div>


        <section id="file-export">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Report Export</h4>
        
        </div>
        <div id="purchase_order">
        <div class="card-content ">
          <div class="card-body card-dashboard table-responsive">
            <table class="table table-striped table-bordered file-export">
              <thead>
                <tr>
                  
                  <th>Date</th>
                  <th>Vendor Name</th>
                  <th>Grand Total</th>
                  
                </tr>
              </thead>

              <tbody>
               
              </tbody>
               
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
       
 


      <?php include("footer.php") ?>
    
        <!-- END : End Main Content-->
        <!-- END : End Main Content-->



       
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
    var vendor_name=$("#vendor_name").val();
    var From = $('#From').val();
    var to = $('#to').val();
    if(From != '' && to != '')
    {
      $.ajax({
        'type' :'post',
        'url'  :"purchase_report2.php",
        'data' :{'FromDate':From,'toDate':to,'vendor_name':vendor_name},
        success:function(data){
          console.log(data);
          $('#purchase_order').html(data);
        }
      });
    }
    else
    {
      alert("Please Select the Date");
    }
  });
});
</script>
<script>
  $(document).ready( function () {
  $('#vendor_name').editableSelect();
 
  
} );
</script>
  </body>
  <!-- END : Body-->
</html>