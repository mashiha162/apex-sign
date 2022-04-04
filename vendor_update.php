<?php
ob_start();
require 'header.php';
require 'navbar_header.php';
  session_start();
  if (!isset($_SESSION['admin_email'])){
      header('location:index.php');
    }


$_GET['id'];
$_GET['vendor_name'];
$_GET['c_name'];
$_GET['email'];
$_GET['phone'];
$_GET['address'];

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
            <h4 class="card-title ">Add VENDOR</h4>
            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
          </div>
          <!-- <div class="card-body"> -->
            <div><br></div>
              <div class="card-content">
          <div class="px-3">
            <form method="POST">
              <div class="form-body">
                <h4 class="form-section">
                  <i class="ft-user"></i> Vendor Info</h4>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Vendor Name</label>
                      <input type="text" id="vendor_name" class="form-control" name="vendor_name" value="<?php echo $_GET['vendor_name']; ?>" required >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Company Name</label>
                      <input type="text" id="company_name" class="form-control" name="c_name" value="<?php echo $_GET['c_name']; ?>" required>
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
                      <label>Phone</label>
                      <input type="number" id="phone" class="form-control" name="phone" 
                      value="<?php echo $_GET['phone']; ?>" required>
                    </div>
                  </div>
                </div>

              
                <div class="form-group">
                  <label>Address</label>
                  <textarea rows="3" id="address"class="form-control" name="address" required><?php echo $_GET['address']; ?></textarea>
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
    $vendor_name = $_POST['vendor_name'];
$c_name = $_POST['c_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];



 $query = "UPDATE vendor SET VENDOR_NAME='$vendor_name',C_NAME='$c_name',EMAIL='$email',PHONE='$phone',ADDRESS='$address' WHERE id ='$id' ";

    $data = mysqli_query($conn, $query);
    if ($data) {
      ?>
       <META HTTP-EQUIV="Refresh" CONTENT="0; URL=add_vendor.php">
      <?php 
    }

}


?>

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
  <!-- END : Body-->
</html>