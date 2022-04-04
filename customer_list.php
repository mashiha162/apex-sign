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
            <h4 class="card-title ">Customer List</h4>
            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
          </div>
          <div class="card-body">
            <section id="extended">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                     
                      <div class="card-content">
                       
                           <table width="100%" cellspacing="1" cellpadding="1" class="table table-striped" id="myTable" >
                            <thead style="background-color: rgb(224, 224, 209)">
                              <tr>
                                <th style="text-align: center;">#</th>
                                <!-- <th></th> -->
                                <th style="text-align: center;">Customer Name</th>
                                <th style="text-align: center;">Company Name</th>
                                <th style="text-align: center;">Phone</th>
                                <th style="text-align: center;">Email</th>
                                <!-- <th>Active</th> -->
                                <th style="text-align: center;">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                            include("connection.php");
    if ($conn) {
    	// echo "string";
    }
    $sql="SELECT * FROM add_party";

    $result=mysqli_query($conn, $sql);
    $count=0;
    while ($row=mysqli_fetch_assoc($result)) 
    {
       $count++;
      echo "<tr class='table'>
      <td align='center'>".$count."</td>
      <td align='center'>".$row['name']."</td>
      <td align='center'>".$row['c_name']."</td>
      <td align='center'>".$row['mobile']."</td>
      
      <td align='center'>".$row['email']."</td>
      <td align='center'> <a href='customer_update.php?id=$row[id]&name=$row[name]&c_name=$row[c_name]&mobile=$row[mobile]&address=$row[address]&email=$row[email]' class='success p-0'> <i class='ft-edit mr-1 info'></i></a> 
      <a href='customer_delete.php?id=$row[id]&name=$row[name]&c_name=$row[c_name]&email=$row[email]&mobile=$row[mobile]&address=$row[address]' class='danger p-0'><i class='ft-trash-2 danger'></i></a></td>
      </tr>";
      # code...
    }
      
      $conn->close();
    ?>    
    
                            </tbody>
                          </table>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!--Extended Table Ends-->

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