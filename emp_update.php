<?php
ob_start();
require 'header.php';
require 'navbar_header.php';
  session_start();
  if (!isset($_SESSION['admin_email'])){
      header('location:index.php');
    }
  include("connection.php");


$_GET['id'];
$_GET['emp_name'];
$_GET['phone'];
$_GET['gender'];
$_GET['address'];
$_GET['email'];

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
          <h4 class="card-title ">Update Employee</h4>
          <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
        </div>
        <div class="card-body">
          <section class="content">
            <div class="row">
                <!-- /.col -->
                <form action="" method="POST" >
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
                                                      <input type="text" class="form-control" name="emp_name" 
                                                      value="<?php echo $_GET['emp_name']; ?>">
                                                  </div>
                                              </div>
                                              
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Email<span class="required" aria-required="true">*</span></label>
                                                  <input type="text" class="form-control" name="email"
                                                  value="<?php echo $_GET['email']; ?>">
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label>phone<span class="required" aria-required="true">*</span></label>
                                                <input type="text" class="form-control" name="phone"
                                                value="<?php echo $_GET['phone']; ?>">
                                            </div>
                                        </div>
                                       
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Gender<span class="required" aria-required="true">*</span></label>
                                           <select name="gender" class="form-control" 
                                           value="<?php echo $_GET['gender']; ?>">
            <option value="<?php echo $_GET['gender']; ?>"><?php echo $_GET['gender']; ?></option>
            <option value="MALE">MALE</option>
            <option value="FEMALE">FEMALE</option>
      
          </select>
                                        </div>
                                   </div>
                                 
                            
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                  <label>Address</label>
                                                  <textarea class="form-control" name="address"
                                                  value=""><?php echo $_GET['address']; ?></textarea>
                                              </div>
                                          </div>
        
                                       
        
                                      
        </div>
        </div>
        
      

      
                          
                          <div class="form-actions text-center">

                <button type="submit" name="submit" class="btn btn-raised btn-raised btn-primary">
                  <i class="fa fa-check-square-o"></i> Update
                </button>
               
              </div>
                        </form>
                         <?php    

    
if (isset($_POST['submit']))
{
  $id=$_GET['id'];
    $emp_name = $_POST['emp_name'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];


 $query = "UPDATE employees SET EMP_NAME='$emp_name',ADDRESS='$address',EMAIL='$email',PHONE='$phone',GENDER='$gender' WHERE id ='$id' ";

    $data = mysqli_query($conn, $query);
    if ($data) {
      ?>
       <META HTTP-EQUIV="Refresh" CONTENT="0; URL=add_employee.php">
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
        


        <?php 
        require 'footer.php';
         ?>