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
$_GET['name'];
$_GET['c_name'];
$_GET['mobile'];
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
            <h4 class="card-title ">UPDATE CUSTOMER</h4>
            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
          </div>
          <!-- <div class="card-body"> -->
            <div><br></div>
              <div class="card-content">
          <div class="px-3">
            <form action="" method="post">
              <div class="form-body">
                <h4 class="form-section">
                  <i class="ft-user"></i> Customer Info</h4>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Customer Name</label>
                      <input type="text" id="name" class="form-control" name="name" 
                      value="<?php echo $_GET['name']; ?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Company Name</label>
                      <input type="text" id="c_name" class="form-control" name="c_name"
                      value="<?php echo $_GET['c_name']; ?>" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>E-mail</label>
                      <input type="email" id="email" class="form-control" name="email" 
                      value="<?php echo $_GET['email']; ?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Contact Number</label>
                      <input type="number" id="mobile" class="form-control" name="mobile" 
                      value="<?php echo $_GET['mobile']; ?>" required>
                    </div>
                  </div>
                </div>

              
                <div class="form-group">
                  <label>Address</label>
                  <textarea rows="3" class="form-control" id="address" name="address"  
                 required><?php echo $_GET['address']; ?></textarea>
                </div>
              </div>

              <div class="form-actions text-center">

                <button type="submit" name="submit" class="btn btn-raised btn-raised btn-primary">
                  <i class="fa fa-check-square-o"></i> Update
                </button>
                <button type="button" class="btn btn-raised btn-raised btn-warning mr-1">
                  <i class="ft-x"></i> Cancel
                </button>
                
              </div>
            </form>
              <?php    

    
if (isset($_POST['submit']))
{
  $id=$_GET['id'];
    $name = $_POST['name'];
$c_name = $_POST['c_name'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$email = $_POST['email'];


 $query = "UPDATE add_party SET NAME='$name',C_NAME='$c_name',MOBILE='$mobile',ADDRESS='$address',EMAIL='$email' WHERE id ='$id' ";

    $data = mysqli_query($conn, $query);
    if ($data) {
      ?>
       <META HTTP-EQUIV="Refresh" CONTENT="0; URL=customer_list.php">
      <?php 
    }

}


?>
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