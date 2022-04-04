<?php
ob_start();
require 'header.php';
require 'navbar_header.php';
session_start();
   if (!isset($_SESSION['admin_email'])){
      header('location:index.php');
    }




//FETCH PARTIES NAME FROM PARTY TABLE
include("connection.php");
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

      <!-- Navbar (Header) Ends-->
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
            <h4 class="card-title ">DAILY SALES ENTRY</h4>
           
          </div>
          
          <div class="card-content">
          <div class="card-body">
          <form action="sale_insert.php" method="POST">
              <div class="row">                
                <div class="col-md-4 col-sm-6 col-12">                
                <div class="form-group">                  
                <div class="input-group">
                  <label>Date</label>
                <input type='text' name="sale_date" class="form-control" style="margin-left: 10px;" placeholder="Pick A Date"required id="datepicker" autocomplete="off">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                         <span class="fa fa-calendar-o"></span>
                       </span>
                      </div>
                     </div>                  
          </div>
        </div>        
      </div>
      <div class="row">
            <div class="col-md-5">
                                                <div class="form-group">
                                                 <label>Party Name<span class="required" aria-required="true">*</span></label>  
          <select id="party_name" name="party_name" class="form-control" placeholder="Select Party" required>
       
        <?php 
        foreach($partylist as $t)
          {
           echo '<option value="'.$t['name'].'">'.$t['name'].'</option>';
          }
         ?>
       </select>
                                                </div>
                                            </div>
                                             <div class="col-md-3">
                                                  <div class="form-group">
                                                   <label>Description</label>  
                                                      <input type="text" class="form-control" name="discription" required autocomplete="off">
                                                  </div>
                                              </div>
                                                <div class="col-md-4">
                                                <div class="form-group">
                                                 <label>Material<span class="required" aria-required="true">*</span></label> 
         <select id="material" name="material" class="form-control" placeholder="Select Material" required autocomplete="off">
        
        <?php 
        foreach($productlist as $pl)
          {
            // echo '<option value="'.$t['p_id'].'">'.$t['name'].'</option>';
            echo '<option value="'.$pl['material'].'">'.$pl['material'].'</option>';
          }
         ?>
</select>
                                                </div>
                                            </div>
</div>

      
            <table class="table table-responsive-sm">
              
             
              
              <tbody>
                
                <tr>
                 <td></td>
         
</tr>
<tr>
                  <td><label>Width<span class="required" aria-required="true">*</span></label> <input type="text" id="width" class="form-control" name="width" oninput="this.value=this.value.replace(/[^0-9.]/g,'');" required autocomplete="off"></td>
                  <td><label>Height<span class="required" aria-required="true">*</span></label> <input type="text" id="height" class="form-control" name="height" oninput="this.value=this.value.replace(/[^0-9.]/g,'');" required autocomplete="off"></td>
                  <td><label>Qty<span class="required" aria-required="true">*</span></label> <input type="text" id="qty" class="form-control" name="qty" oninput="this.value=this.value.replace(/[^0-9.]/g,'');" required autocomplete="off"></td>
                  <td><label>Foot<span class="required" aria-required="true">*</span></label> <input type="text" id="foot" class="form-control" name="total_ft" required readonly autocomplete="off"></td>
                  <td><label>Rate<span class="required" aria-required="true">*</span></label> <input type="text" id="rate" class="form-control" name="rate" oninput="this.value=this.value.replace(/[^0-9.]/g,'');" required autocomplete="off"></td>
                  <td><label>Amount<span class="required" aria-required="true">*</span></label> <input type="text" id="amount" class="form-control" name="amount" required readonly></td>
                  <td width="15%" autocomplete="off"><label>Cash/Credit<span class="required" aria-required="true">*</span></label> 
                     <select name="cash_cre" class="form-control" required autocomplete="off"
                     placeholder="Select Material">
       
            <option value="CASH">CASH</option>
            <option value="CREDIT">CREDIT</option>
      
          </select></td>
                </tr> 
              
            
            </tbody>
           
          </table>
          
            <div class="form-actions text-center">

                <button type="submit" id="submit" name="submit" class="btn btn-raised btn-raised btn-primary" >
                  <i class="fa fa-check-square-o"></i> Save
                </button>

                <button type="reset" class="btn btn-raised btn-raised btn-warning mr-1">
                  <i class="ft-x"></i> Cancel
                </button>
                
              </div>
           
          </form>
       
      </div>
    </div>
  </div>
</section>
  </div>
  </div>
  
  
  <section id="dom">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">RECENT ENTRIES</h4>
          
        </div>
        <div class="card-content ">
          <div class="card-body card-dashboard table-responsive">
            <!-- <table class="table table-striped table-bordered dom-jQuery-events"> -->
            <table width="100%" cellspacing="1" cellpadding="1" class="table table-striped" id="myTable" >
     <thead style="background-color: rgb(224, 224, 209)">
      <tr height="30" class="table_header">
        <td width="2%" align="center" valign="middle">&nbsp;Sr</td>
        <td width="25%" align="center" valign="middle">Date</td>
        <td width="25%" height="25" align="center" valign="middle">Party Name</td>
        <td width="25%" height="25" align="center" valign="middle">Material</td>
        <td width="5%" height="25" align="center" valign="middle">Width</td>
        <td width="5%" align="center" valign="middle">Height</td>
        <td width="5%" height="25" align="center" valign="middle">Qty</td>
        <td width="5%" height="25" align="center" valign="middle">Foot</td>
        <td width="5%" align="center" valign="middle">Rate</td>
        <td width="7%" align="center" valign="middle">Amount</td>
        <!-- <td width="7%" align="center" valign="middle">Adv Amt</td> -->
        <td width="2%" align="center" valign="middle">Cash/Credit</td>
        <td width="2%" height="25" align="center" valign="middle" >Actions</td>
    
      </tr>
    </thead>
    <tbody>
      <?php 
   include("connection.php");
    $sql="SELECT * FROM sale_entry ORDER BY sale_id desc";




// ---------------------------
    
    $result=mysqli_query( $conn, $sql);
    $count = 0;
    while ($row=mysqli_fetch_assoc($result)) 

    {
      $count++;
      echo "<tr class='table'>
      <td align='center'>".$count."</td>
      <td align='center'>".date('d-m-Y', strtotime($row['sale_date']))."</td>
      <td align='center'>".$row['party_name']."</td>
      
      <td align='center'>".$row['material']."</td>
      <td align='center'>".$row['width']."</td>
      <td align='center'>".$row['height']."</td>
      <td align='center'>".$row['qty']."</td>
      <td align='center'>".$row['total_ft']."</td>
      <td align='center'>".$row['rate']."</td>
      <td align='center'>".$row['amount']."</td>
      <td align='center'>".$row['cash_cre']."</td>
      <td align='center'><a href='update.php?sale_id=$row[sale_id]&sale_date=$row[sale_date]&party_name=$row[party_name]&discription=$row[discription]
      &material=$row[material]&width= $row[width]&height=$row[height]&qty=$row[qty]
      &total_ft=$row[total_ft]&rate=$row[rate]&amount=$row[amount]&cash_cre=$row[cash_cre]'>
      
                                    <i class='ft-edit mr-1 info'></i>
                                 
      </a><a href='delete.php?sale_id=$row[sale_id]&party_name=$row[party_name]
      &material=$row[material]&width= $row[width]&height=$row[height]&qty=$row[qty]
      &total_ft=$row[total_ft]&rate=$row[rate]&amount=$row[amount]&cash_cre=$row[cash_cre]' onclick = 'checkdelete()'> 
      <i class='ft-trash-2 danger'></i></td>
     
      </tr>";
      # code...
    }
      
      $conn->close();
    ?>    
      </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- DOM - jQuery events table -->
</div>
          </div>
        </div>
        </div>
      
        <!-- END : End Main Content-->


<<?php 
require 'footer.php';
 ?>
    <!-- END PAGE LEVEL JS-->
    <script type="text/javascript">
  function checkdelete()
  {
    return confirm('Are You sure to delete this data? ')
  }
</script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable({
    "pageLength": 25,
    ordering:false
  });
} );
</script>

    <!-- customer java -->
    <script>
      $(document).ready(function(){
        $("#width, #height, #qty,#rate").change(function(){
          cal();
        })
        function cal(){
          var width = $("#width").val();
          var height = $("#height").val();
          var qty = $("#qty").val();
          $("#foot").val(width*height*qty);
          var foot = $("#foot").val();


          var rate = $("#rate").val();
          $("#amount").val(foot*rate);
        }
        
      })
    </script>
<script>
  $(document).ready( function () {
  $('#party_name').editableSelect();
  $('#material').editableSelect();
  
} );
</script>
<script>
  $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'dd-mm-yy' });
    $("#datepicker").datepicker().datepicker("setDate", new Date());
  } );
  </script>

  </body>
  <!-- END : Body-->
</html>