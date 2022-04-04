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

$_GET['id'];
$_GET['date_advance'];
$newdate  = date('d-m-yy',strtotime($_GET['date_advance']));
$_GET['emp_name'];
$_GET['amount'];



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
                <form method="POST" >
               
        
                        
                          <div class="row">
                              <div class="col-md-12 col-sm-12 col-xs-12 ">
                                  <div id="msg"></div>
                                  <div class="row">
                                      <div class="col-md-12">
         <div class="form-body">
               <!--  <h4 class="form-section">
                  <i class="ft-user"></i> Employee Info</h4> -->

                                          <div class="row">
                                              <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="text" class="form-control" name="date_advance" id="datepicker" value="<?php echo $newdate; ?>" id ="datepicker" >
                                            </div>
                                        </div>
                                              <div class="col-md-4">
                                                  <div class="form-group">
                                                      <label>Employee Name<span class="required" aria-required="true">*</span></label>
                                                     <select id="emp_name" name="emp_name" class="form-control" 
                                                      required>
        <option value="<?php echo $_GET['emp_name']; ?>"><?php echo $_GET['emp_name']; ?></option>
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
                                                <input type="text" class="form-control" name="amount" value="<?php echo $_GET['amount']; ?>">
                                            </div>
                                        </div>
                                      
                                       
                                    
                                 
                            
                                           
        
                                     
        
                                      
        </div>
        </div>
        
      

      
                          
                          <div class="form-actions text-center">

                <button type="submit" name="submit" class="btn btn-raised btn-raised btn-primary">
                  <i class="fa fa-check-square-o"></i> Save
                </button>
                <button type="button" class="btn btn-raised btn-raised btn-warning mr-1">
                  <i class="ft-x"></i> Cancel
                </button>
              </div>
                        </form>
                        <?php    
include("connection.php"); 
    
if (isset($_POST['submit']))
{
  $id=$_GET['id'];
  $dt = $_POST['date_advance'];
 //19-02-2020
          $date = substr($dt,0,2);
          $month = substr($dt,3,2);
          $year = substr($dt,6,4);
          $newdt = date('Y-m-d',mktime(0,0,0,$month,$date,$year));
    $emp_name = $_POST['emp_name'];
$amount = $_POST['amount'];



 $query = "UPDATE cashadvance SET DATE_ADVANCE='$newdt',EMP_NAME='$emp_name',AMOUNT='$amount' WHERE id ='$id' ";

    $data = mysqli_query($conn, $query);
    if ($data) {
      ?>
       <META HTTP-EQUIV="Refresh" CONTENT="0; URL=employee_credit.php">
      <?php 
    }

}


?>
          
        
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
    
  } );
  </script>
  </body>
  <!-- END : Body-->
</html>