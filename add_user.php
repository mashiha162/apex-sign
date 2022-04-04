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
            <h4 class="card-title ">Add User</h4>
            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
          </div>
          <div><br></div>
              <div class="card-content">
          <div class="px-3">
            <form action="add_user_fun.php" method="POST">
              <div class="form-body">
                <h4 class="form-section">
                  <i class="ft-user"></i> User Info</h4>
                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label>User Name</label>
                      <input type="text" id="customer_name" class="form-control" name="username" required>
                    </div>
                  </div>
               
              
            
                
                   
                  <div class="col-md-5">
                    <div class="form-group">
                      <label>Password</label>
                       <input type="password" name="password" class="form-control" required
                        data-validation-required-message="This field is required">
                    </div>
                  </div>
                   <div class="col-md-2">
                    <div class="form-group">
                      <label>Role</label>
                      <select class="form-control" name="role"> 
                        <option>Select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                      </select>
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
        </div>
        </div>
        </div>
        </div>
       
       
        
        <!-- END : End Main Content-->


<?php
require 'footer.php';
?>
  </body>
  <!-- END : Body-->
</html>