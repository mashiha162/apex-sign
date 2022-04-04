<?php
ob_start();
require 'header.php';
require 'navbar_header.php';
  session_start();
  if (!isset($_SESSION['admin_email'])){
      header('location:index.php');
    }

//FETCH Employee NAME FROM PARTY TABLE
include("connection.php");
$q = "SELECT * FROM employees";
$result = mysqli_query($conn, $q);
if ($result) {
  while ($temp = mysqli_fetch_assoc($result)) {
    $emplist[]  = $temp;
  }
}


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
            <h4 class="card-title ">SET ATTENDANCE</h4>
            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
          </div>
         <div class="card-body">
             
         <section class="content">
                <!-- /.col -->
                <form action="attendence_fun.php" method="POST" >
     <div class="row">
                              <div class="col-md-12 col-sm-12 col-xs-12 ">
                                  <div id="msg"></div>
                                  <div class="row">
                                      <div class="col-md-12">
      
          <div class="form-body">
                <h4 class="form-section">
                  <i class="ft-user"></i> Attendance Info</h4>
                                          <div class="row">
                                             
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label>Employee Name<span class="required" aria-required="true">*</span></label>
                                                     <select id="emp_name" name="emp_name" class="form-control" required
                                                     placeholder="Select Employee">
       
        <?php 
        foreach($emplist as $t)
          {
           
            echo '<option value="'.$t['emp_name'].'">'.$t['emp_name'].'</option>';
          }
         ?> 
       </select>
                                                  </div>
                                              </div>
                                                
                                              
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Date</label>
                                                  <input type="text" class="form-control " name="date" id="datepicker">
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Time In<span class="required" aria-required="true">*</span></label>
                                                 <input type="time" class="form-control" name="time_in">
                                            </div>
                                        </div>
                                       
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Time Out<span class="required" aria-required="true">*</span></label>
                                          <input type="time" class="form-control" name="time_out">
                                        </div>
                                   </div>
                                 
                            
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                  <label></label>
                                                 <input type="hidden" name="">
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
          
        
        </div>
        </div>
        
       
      </div>
        
         </section>
  </div>
   



</div>
</div>
</div>
 <section id="dom">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Attendence List</h4>
          
        </div>
        <div class="card-content ">
          <div class="card-body card-dashboard table-responsive">
            <!-- <table class="table table-striped table-bordered dom-jQuery-events"> -->
            <table width="100%" cellspacing="1" cellpadding="1" class="table table-striped" id="myTable" >
     <thead style="background-color: rgb(224, 224, 209)">
      <tr height="30" class="table_header">
        <td align="center">Date</td>
        <td align="center">Employee Name</td>
        <td align="center">Time In</td>
        <td align="center">Time Out</td>
        <td align="center">Actions</td>
       </tr>
    </thead>
    <tbody>
      <?php 
   include("connection.php");
    // include("connection.php");
    $sql="SELECT * FROM attendance ORDER BY id desc";




// ---------------------------
    
    $result=mysqli_query( $conn, $sql);
   
    while ($row=mysqli_fetch_assoc($result)) 

    {
      echo "<tr class='table'>
      <td align='center'>".date('d-m-Y', strtotime($row['date']))."</td>
      <td align='center'>".$row['emp_name']."</td>
      <td align='center'>".$row['time_in']."</td>
      
      <td align='center'>".$row['time_out']."</td>
     
      <td align='center'><a href='edit_attendance.php?id=$row[id]&emp_name=$row[emp_name]&date=$row[date]&time_in=$row[time_in]&time_out=$row[time_out]'> <i class='ft-edit mr-1 info'></i></a>
      <a href='delete_attendance.php?id=$row[id]&emp_name=$row[emp_name]&time_in=$row[time_in]&time_out=$row[time_out]'><i class='ft-trash-2 danger'></i></a></td>
   
     
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
        </div>.
        
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
  <script>
  $(document).ready( function () {
  $('#emp_name').editableSelect();
  
  
} );
  </script>
  </body>
  <!-- END : Body-->
</html>