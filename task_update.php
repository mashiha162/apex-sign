<?php
include ("connection.php");
ob_start();
require 'header.php';
require 'navbar_header.php';
  session_start();
  if (!isset($_SESSION['admin_email'])){
      header('location:index.php');
    }


$_GET['task'];
$_GET['discription'];

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
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">UPDATE DAILY TASK</h4>
            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
          </div>

        <div class="card-content">
          <div class="card-body">
<!-- Taskboard Starts -->
<section style='background-color:#e6f2ff' class="taskboard-app-form">
  
      <div class="card-body pt-3">
        <h5 class="text-bold-500">Create new Task</h5>
        <form class="taskboard-app-input row" method="POST">
          <fieldset class="position-relative has-icon-left col-md-4 col-12 mb-1">
            <div class="form-control-position">
              <i class="icon-emoticon-smile"></i>
            </div>
            <input type="text" class="form-control" id="todoTitle" name="task" placeholder="Title" value="<?php echo $_GET['task']; ?>">
            <div class="form-control-position control-position-right">
              <i class="icon-emoticon-smile"></i>
            </div>
          </fieldset>
          <fieldset class="position-relative has-icon-left col-md-6 col-12 mb-1">
            <div class="form-control-position">
              <i class="icon-emoticon-smile"></i>
            </div>
            <input type="text" class="form-control" id="todoMessage" name="discription" placeholder="Message" value="<?php echo $_GET['discription']; ?>">
            <div class="form-control-position control-position-right">
              <i class="icon-emoticon-smile"></i>
            </div>
          </fieldset>
           <input type="hidden" name="date" value="">
          <fieldset class="position-relative has-icon-left col-md-2 col-12 mb-1">
           <input type="submit" name="submit" value="UPDATE" class="btn btn-raised btn-primary" > 
              <!-- <i class="ft ft-plus-circle d-lg-none d-xl-inline-block"></i> -->
          
          </fieldset>
      


       


      </div>
    </div>
  </section>
  </form>
 <?php    

    
if (isset($_POST['submit']))
{
  $id=$_GET['id'];
    $task = $_POST['task'];
$discription = $_POST['discription'];



 $query = "UPDATE task SET TASK='$task',DISCRIPTION='$discription' WHERE id ='$id' ";

    $data = mysqli_query($conn, $query);
    if ($data) {
      ?>
       <META HTTP-EQUIV="Refresh" CONTENT="0; URL=taskboard.php">
      <?php 
    }

}


?>


<!-- Taskboard Ends -->
          </div>
        </div>
  
    </div>
  </div>



</div>
</div>
</section>
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


