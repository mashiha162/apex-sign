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
$q = "SELECT * FROM employees";
$result = mysqli_query($conn, $q);
if ($result) {
  while ($temp = mysqli_fetch_assoc($result)) {
    $emplist[]  = $temp;
  }
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
            <h4 class="card-title ">Cash Advance</h4>
            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
          </div>
         <div class="card-body">
             
              <section class="content">
         
                <!-- /.col -->
                <form action="emp_cre_fun.php" method="POST" >
             
                          <div class="row">
                              <div class="col-md-12 col-sm-12 col-xs-12 ">
                                  <div id="msg"></div>
                                  <div class="row">
                                      <div class="col-md-12">
         <div class="form-body">
                <h4 class="form-section">
                  <i class="ft-user"></i> Credit Info</h4>

                                          <div class="row">
                                            
                                              <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Date<span class="required" aria-required="true">*</span></label>
                                                <input type="text" class="form-control" name="date_advance" id="datepicker">
                                            </div>
                                        </div>
                                              <div class="col-md-4">
                                                  <div class="form-group">
                                                      <label>Employee Name</label>
                                                     <select id="emp_name" name="emp_name" class="form-control" required>
        <option value="">Select Employee</option>
        <?php 
        foreach($emplist as $t)
          {
           
            echo '<option value="'.$t['emp_name'].'">'.$t['emp_name'].'</option>';
          }
         ?> 
       </select>
                                                  </div>
                                              </div>
                                              
                                            
                                          <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Amount<span class="required" aria-required="true">*</span></label>
                                                <input type="text" class="form-control" name="amount">
                                            </div>
                                        </div>
                                      
                                       
                                    
                                 
                            
                                           
        
                                     
        
                                      
        </div>
        </div>
        
      

      <div><br></div>
                          
                          <div class="form-actions text-center">

                <button type="submit" name="submit" class="btn btn-raised btn-raised btn-primary">
                  <i class="fa fa-check-square-o"></i> Save
                </button>
                <button type="button" class="btn btn-raised btn-raised btn-warning mr-1">
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
          <h4 class="card-title">Employee Credit List</h4>
          
        </div>
        <div class="card-content ">

          <div class="table-responsive">
 <div class="card-body card-dashboard table-responsive">
            <table width="100%" cellspacing="1" cellpadding="1" class="table table-striped" id="myTable" >
              <thead style="background-color: rgb(224, 224, 209)">
<tr>
                  <td align="center">Date</td>
                  <td align="center">Employee Name</td>
                 
                  <td align="center">Amount</td>
                  <td align="center">Actions</td>
                 
                  </tr>
                </thead>
                <tbody>
             <?php
            include("connection.php");
    $sql="SELECT * FROM cashadvance";




// ---------------------------
    
    $result=mysqli_query( $conn, $sql);
   
    while ($row=mysqli_fetch_assoc($result)) 

    {
      echo "<tr class='table'>

      <td align='center'>".$row['date_advance']."</td>
      <td align='center'>".$row['emp_name']."</td>
      <td align='center'>".$row['amount']."</td>
   
     
     
      <td align='center'><a href='edit_credit.php?id=$row[id]&date_advance=$row[date_advance]&emp_name=$row[emp_name]&amount=$row[amount]'><i class='ft-edit mr-1 info'></i></a>
<a href='delete_credit.php?id=$row[id]&date_advance=$row[date_advance]&emp_name=$row[emp_name]&amount=$row[amount]'> <i class='ft-trash-2 danger'></i></a>
      </td>
   
     
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
  </div>
   



</div>
</div>
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
<script>
  $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'dd-mm-yy' });
     $("#datepicker").datepicker().datepicker("setDate", new Date());
  } );
  </script>

  </body>
  <!-- END : Body-->
</html>