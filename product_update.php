<?php
ob_start();
require 'header.php';
require 'navbar_header.php';
include("connection.php");
  session_start();
  if (!isset($_SESSION['admin_email'])){
      header('location:index.php');
    }




$_GET['id'];
$_GET['material'];
$_GET['hsn_code'];


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
            <h4 class="card-title ">ADD PRODUCT</h4>
            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
          </div>
          <div><br></div>
              <div class="card-content">
          <div class="px-3">
            <form method="POST">
              <div class="form-body">
                <h4 class="form-section">
                  <i class="ft-user"></i> Update Product Info</h4>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Product Name<span class="required" aria-required="true">*</span></label></label>
                      <input type="text" name="material" id="material" class="form-control" value="<?php echo $_GET['material']; ?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>HSN CODE<span class="required" aria-required="true">*</span></label></label>
                       <input type="number" name="hsn_code" id="hsn_code" class="form-control" value="<?php echo $_GET['hsn_code']; ?>" required>
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
  $id=$_GET['id'];
    $material = $_POST['material'];
$hsn_code = $_POST['hsn_code'];



 $query = "UPDATE add_product SET MATERIAL='$material',HSN_CODE='$hsn_code' WHERE id ='$id' ";

    $data = mysqli_query($conn, $query);
    if ($data) {
      ?>
       <META HTTP-EQUIV="Refresh" CONTENT="0; URL=product_list.php">
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
        <!-- END : End Main Content-->


<?php
require 'footer.php';
?>
  </body>
  <!-- END : Body-->
</html>