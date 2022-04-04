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
            <h4 class="card-title ">Add VENDOR</h4>
            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
          </div>
          <!-- <div class="card-body"> -->
            <div><br></div>
              <div class="card-content">
          <div class="px-3">
            <form action="add_vendor_fun.php" method="POST">
              <div class="form-body">
                <h4 class="form-section">
                  <i class="ft-user"></i> Vendor Info</h4>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Vendor Name</label>
                      <input type="text" id="vendor_name" class="form-control" name="vendor_name" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Company Name</label>
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
                      <label>Phone</label>
                      <input type="number" id="phone" class="form-control" name="phone" required>
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
                <button type="button" class="btn btn-raised btn-raised btn-warning mr-1">
                  <i class="ft-x"></i> Cancel
                </button>
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
         
      <section id="dom">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Vendor List</h4>
          
        </div>
        <div class="card-content ">
          <div class="card-body card-dashboard table-responsive">
            <!-- <table class="table table-striped table-bordered dom-jQuery-events"> -->
            <table width="100%" cellspacing="1" cellpadding="1" class="table table-striped" id="myTable" >
     <thead style="background-color: rgb(224, 224, 209)">
      <tr height="30" class="table_header">
        <!-- <td align="center">Date</td> -->
        <td align="center">Vendor Name</td>
        <td align="center">Company Name</td>
        <!-- <td align="center">Photo</td> -->
        <td align="center">E-Mail</td>
        <td align="center">Phone</td>
     
        <td align="center">Address</td>
        <td align="center">Actions</td>
       </tr>
    </thead>
    <tbody>
      <?php 
   include("connection.php");
    // include("connection.php");
    $sql="SELECT * FROM vendor";




// ---------------------------
    
    $result=mysqli_query( $conn, $sql);
   
    while ($row=mysqli_fetch_assoc($result)) 

    {
      echo "<tr class='table'>
     
      <td align='center'>".$row['vendor_name']."</td>
      <td align='center'>".$row['c_name']."</td>      
      <td align='center'>".$row['email']."</td>
      <td align='center'>".$row['phone']."</td>
      <td align='center'>".$row['address']."</td>
     
      <td align='center'><a href='vendor_update.php?id=$row[id]&vendor_name=$row[vendor_name]&c_name=$row[c_name]&email=$row[email]&phone=$row[phone]&address=$row[address]'>      
                                    <i class='ft-edit mr-1 info'></i>
          </a>
<a href='vendor_delete.php?id=$row[id]&vendor_name=$row[vendor_name]&c_name=$row[c_name]&email=$row[email]&phone=$row[phone]&address=$row[address]'>      
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