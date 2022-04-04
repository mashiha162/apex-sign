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
            <h4 class="card-title ">Manage User</h4>
            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
          </div>
          <div class="card-body">
            <section id="extended">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                     
                      <div class="card-content">
                        <div class="card-body table-responsive">
                          <table class="table text-center">
                            <thead>
                              <tr>
                                <th>#</th>
                             
                                <th>User Name</th>
                                <th>Name</th>
                                <th>Actions</th>
                            
                                
                              </tr>
                            </thead>
                            <tbody>
                               <?php 
include("connection.php");
    // include("connection.php");
    $sql="SELECT * FROM admin";




// ---------------------------
    
    $result=mysqli_query( $conn, $sql);
    $count = 0;
    while ($row=mysqli_fetch_assoc($result)) 

    {
      $count++;
      echo "<tr class='table'>
      <td align='center'>".$count."</td>
     
      <td align='center'>".$row['admin_name']."</td>
      <td align='center'>".$row['admin_email']."</td>
      <td align='center'><a href='admin_update.php?admin_id=$row[admin_id]&admin_email=$row[admin_name]&admin_email=$row[admin_email]&admin_pass=$row[admin_pass]'><i class='ft-edit mr-1 info'></i></a> 
       <a href='admin_delete.php?admin_id=$row[admin_id]&admin_email=$row[admin_email]'> <i class='ft-trash-2 danger'></i></a> 

      
     
      </tr>";
      # code...
    }
      
      $conn->close();
    ?>    
                             
              </tbody></table>
              <!--Extended Table Ends-->

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
        </div>
        <!-- END : End Main Content-->



       <?php
require 'footer.php';
?>
  </body>
  <!-- END : Body-->
</html>