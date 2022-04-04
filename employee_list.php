<?php
ob_start();
require 'header.php';
require 'navbar_header.php';
  session_start();
  if (!isset($_SESSION['admin_email'])){
      header('location:index.php');
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
      <div class="content-header">
        
        <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">EMPLOYEE LIST</h4>
            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
          </div>
          <!-- <div class="card-body"> -->
            <!-- <div class="table-responsive"> -->
              <div class="card-body">
            <section class="content">
              <div class="row">
          <div class="table-responsive">
            <table class="table table-striped table-bordered zero-configuration">
              <thead>
                <tr>
                  <th>Employee ID</th>
                  <th>Photo</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Schedule</th>
                  <th>Actions</th>
                
                </tr>
              </thead>
            </table>
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
  </div>

</div>
</div>
</div>
</html>
<?php
require 'footer.php'; ?>
