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
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">DAILY TASK</h4>
            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
          </div>

        <div class="card-content">
          <div class="card-body">
<!-- Taskboard Starts -->
<section style='background-color:#e6f2ff' class="taskboard-app-form">
  
      <div class="card-body pt-3">
        <h5 class="text-bold-500">Create new Task</h5>
        <form class="taskboard-app-input row" action="task_fun.php" method="POST">
          <fieldset class="position-relative has-icon-left col-md-4 col-12 mb-1">
            <div class="form-control-position">
              <i class="icon-emoticon-smile"></i>
            </div>
            <input type="text" class="form-control" id="todoTitle" name="task" placeholder="Title">
            <div class="form-control-position control-position-right">
              <i class="icon-emoticon-smile"></i>
            </div>
          </fieldset>
          <fieldset class="position-relative has-icon-left col-md-6 col-12 mb-1">
            <div class="form-control-position">
              <i class="icon-emoticon-smile"></i>
            </div>
            <input type="text" class="form-control" id="todoMessage" name="discription" placeholder="Message">
            <div class="form-control-position control-position-right">
              <i class="icon-emoticon-smile"></i>
            </div>
          </fieldset>
           <input type="hidden" name="date" value="">
          <fieldset class="position-relative has-icon-left col-md-2 col-12 mb-1">
           <input type="submit" name="submit" value="CREATE" class="btn btn-raised btn-primary" > 
              <!-- <i class="ft ft-plus-circle d-lg-none d-xl-inline-block"></i> -->
          
          </fieldset>
      


       


      </div>
    </div>
  </section>
  </form>

 <?php 
   include("connection.php");
    $sql="SELECT * FROM task ORDER by id desc";
     $result=mysqli_query( $conn, $sql);
    $count = 0;
    while ($row=mysqli_fetch_assoc($result)) 

    {
       $count++;
      echo "<section id='taskboard'>
 <div class='card-content'>
          <div class='card-body'>
  <div class='row'>
    <div class='col-md-12 col-12'>
     
     
        <div style='background-color:#e6f2ff' class='card '>
          <div class='card-body pt-3'>
            <div class='clearfix'>
              <h5 class='text-bold-500 primary float-left'>
              ".$count.")
              ".$row['task']."</h5>
              <div class='actions float-right'>

              <a href='task_update.php?id=$row[id]&task=$row[task]&discription=$row[discription]'><i class='ft-edit mr-1 info'></i></a>
               <a href='task_delete.php?id=$row[id]&task=$row[task]&discription=$row[discription]'> <i class='ft-trash-2 danger'></i></a>
              </div>
            </div>
            <p>".$row['discription']."</p>

            <span class='primary'>".date('M d, Y')."</span>
          </div>
        </div>
      
     
      
       
        </div>
      </div>
    </div>
  </div>

 

</section>";
  }
      
      $conn->close();

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


