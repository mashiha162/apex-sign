<?php
ob_start();
require 'header.php';
require 'navbar_header.php';
  session_start();
  if (!isset($_SESSION['admin_email'])){
      header('location:index.php');
    }

  include("connection.php");

$_GET['admin_id'];
$_GET['admin_name'];
$_GET['admin_email'];
$_GET['admin_pass'];


?>
<!DOCTYPE html>
<html>
<head>


</head>
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
            <h4 class="card-title ">Manage User</h4>
            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
          </div>
         <div class="card-body">
             
         <section class="content">
           
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
                                           
                                              
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>User Name</label>
                                                  <input type="text" class="form-control pickadate" name="admin_email"
                                                  value="<?php echo $_GET['admin_email']; ?>" id="datepicker" >
                                              </div>
                                          </div>
                                           <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Password</label>
                                                  <input type="text" class="form-control" name="admin_pass"
                                                  value="<?php echo $_GET['admin_pass']; ?>" id="datepicker" >
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

    
if (isset($_POST['submit']))
{
    $id = $_GET['id'];
 $dt = $_POST['date'];
 //19-02-2020
          $date = substr($dt,0,2);
          $month = substr($dt,3,2);
          $year = substr($dt,6,4);
          $newdt = date('Y-m-d',mktime(0,0,0,$month,$date,$year));

    $emp_name = $_POST['emp_name'];
$time_in = $_POST['time_in'];
$time_out = $_POST['time_out'];

 $query = "UPDATE attendance SET EMP_NAME='$emp_name',DATE='$newdt',TIME_IN='$time_in',TIME_OUT='$time_out' WHERE ID = '$id' ";
// $query = "update DATA_ENTRY SET PARTY_NAME='$pn',DISCRIPTION = '$ds',MATERIAL='$mt',WIDTH='$wd',HEIGHT='$hg',QTY='$qt' where ID = '$id' ";
   // $query = "update DATA_ENTRY set party_name = 'mashiha ansari' where id = 11 ";
   $data = mysqli_query($conn, $query);
    if ($data) {
      ?>
       <META HTTP-EQUIV="Refresh" CONTENT="0; URL=attendence.php">
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
        </div>.
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