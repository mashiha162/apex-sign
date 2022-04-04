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
            <div class="content-wrapper">
              <div class="row">
    <div class="col-12">
      <div class="content-header">        
      </div>
    </div>
  </div>
                            
<!-- abc -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Add CUSTOMER</h4>
            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
          </div>
          <!-- <div class="card-body"> -->
            <div><br></div>
              <div class="card-content">
          <div class="px-3">
            <form action="add_customer_fun.php" method="POST">
              <div class="form-body">
                <h4 class="form-section">
                  <i class="ft-user"></i> Customer Info</h4>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Customer Name</label>
                      <input type="text" id="customer_name" class="form-control" name="name" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>COntact Person</label>
                      <input type="text" id="company_name" class="form-control" name="c_name" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>E-mail</label>
                      <input type="email" id="email" class="form-control" name="email" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Contact Number</label>
                      <input type="text" id="contact_no" class="form-control" name="mobile" oninput="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="10" autocomplete="off" required>
                    </div>
                  </div>
                </div>

              
                <div class="form-group">
                  <label>Address</label>
                  <textarea rows="3" id="address"class="form-control" name="address" required></textarea>
                </div>
              </div>

              <div class="form-actions text-center">

                <button type="submit" name="submit" class="btn btn-raised btn-raised btn-primary">
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
    </div>

       

          </div>
         
      </form>
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