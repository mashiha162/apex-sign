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
          <h4 class="card-title ">Add Employee</h4>
          <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
        </div>
        <div class="card-body">
          <section class="content">
            <div class="row">
                <!-- /.col -->
                <form action="add_emp_fun.php" method="POST" >
                <div class="col-md-12">
        
                    <!-- View massage -->
                    
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <!-- <h3 class="box-title">
                               Hello
                            </h3> -->
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
        
                        
                          <div class="row">
                              <div class="col-md-12 col-sm-12 col-xs-12 ">
                                  <div id="msg"></div>
                                  <div class="row">
                                      <div class="col-md-12">
         <div class="form-body">
                <h4 class="form-section">
                  <i class="ft-user"></i> Employee Info</h4>
                                          <div class="row">
                                             
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label>Employee Name<span class="required" aria-required="true">*</span></label>
                                                      <input type="text" class="form-control" name="emp_name">
                                                  </div>
                                              </div>
                                              
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Email<span class="required" aria-required="true">*</span></label>
                                                  <input type="text" class="form-control" name="email">
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label>phone<span class="required" aria-required="true">*</span></label>
                                                <input type="text" class="form-control" name="phone">
                                            </div>
                                        </div>
                                       
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Gender<span class="required" aria-required="true">*</span></label>
                                           <select name="gender" class="form-control" 
                                           value="gender">
            <option>SELECT</option>
            <option value="MALE">MALE</option>
            <option value="FEMALE">FEMALE</option>
      
          </select>
                                        </div>
                                   </div>
                                 
                            
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                  <label>Address</label>
                                                  <textarea class="form-control" name="address"></textarea>
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
         <section id="dom">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Employee List</h4>
          
        </div>
        <div class="card-content ">
          <div class="card-body card-dashboard table-responsive">
            <!-- <table class="table table-striped table-bordered dom-jQuery-events"> -->
            <table width="100%" cellspacing="1" cellpadding="1" class="table table-striped" id="myTable" >
     <thead style="background-color: rgb(224, 224, 209)">
      <tr height="30" class="table_header">
        <!-- <td align="center">Date</td> -->
        <td align="center">Employee Name</td>
        <!-- <td align="center">Photo</td> -->
        <td align="center">E-Mail</td>
        <td align="center">Phone</td>
        <td align="center">Gender</td>
        <td align="center">Address</td>
        <td align="center">Actions</td>
       </tr>
    </thead>
    <tbody>
      <?php 
    include("connection.php");
    // include("connection.php");
    $sql="SELECT * FROM employees";




// ---------------------------
    
    $result=mysqli_query( $conn, $sql);
   
    while ($row=mysqli_fetch_assoc($result)) 

    {
      echo "<tr class='table'>
     
      <td align='center'>".$row['emp_name']."</td>
      <td align='center'>".$row['email']."</td>      
      <td align='center'>".$row['phone']."</td>
      <td align='center'>".$row['gender']."</td>
      <td align='center'>".$row['address']."</td>
     
      <td align='center'><a href='emp_update.php?id=$row[id]&emp_name=$row[emp_name]&address=$row[address]&email=$row[email]&phone=$row[phone]&gender=$row[gender]'>      
                                  <i class='ft-edit mr-1 info'></i>
          </a>
<a href='emp_delete.php?id=$row[id]&emp_name=$row[emp_name]&address=$row[address]&email=$row[email]&phone=$row[phone]&gender=$row[gender]'>      
                                    <i class='ft-trash-2 danger'></i>
          </a>
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
 