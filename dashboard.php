<?php 
ob_start();
require 'header.php';
require 'navbar_header.php';
    include("connection.php");
session_start();
    if (!isset($_SESSION['admin_email'])){
      header('location:index.php');
    }
   
?>
      <!-- / main menu-->


      <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
          <div class="content-wrapper"><!--Statistics cards Starts-->
<div class="row">
  <div class="col-xl-3 col-lg-6 col-md-6 col-12">
    <div class="card gradient-blackberry">
      <div class="card-content">
        <div class="card-body pt-2 pb-0">
          <div class="media">
            <div class="media-body white text-left">
              <h3 class="font-large-1 mb-0">
                <?php
include ("connection.php");


$sql="SELECT * FROM sale_entry";

if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo $rowcount;
 
  }

mysqli_close($conn);
?>
  
</h3>
              <span>Total Sales Entries</span>
            </div>
            <div class="media-right white text-right">
              <i class="icon-pie-chart font-large-1"></i>
            </div>
          </div>
        </div>
        <div id="Widget-line-chart" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-6 col-md-6 col-12">
    <div class="card gradient-ibiza-sunset">
      <div class="card-content">
        <div class="card-body pt-2 pb-0">
          <div class="media">
            <div class="media-body white text-left">
              <h3 class="font-large-1 mb-0"> <?php
include ("connection.php");


$sql="SELECT * FROM employees";

if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
   $rowcount=mysqli_num_rows($result);
  echo $rowcount;
 
  
  }

mysqli_close($conn);
?></h3>
              <span>Total Employees</span>
            </div>
            <div class="media-right white text-right">
              <i class="icon-bulb font-large-1"></i>
            </div>
          </div>
        </div>
        <div id="Widget-line-chart1" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
        </div>

      </div>
    </div>
  </div>

  <div class="col-xl-3 col-lg-6 col-md-6 col-12">
    <div class="card gradient-green-tea">
      <div class="card-content">
        <div class="card-body pt-2 pb-0">
          <div class="media">
            <div class="media-body white text-left">
              <h3 class="font-large-1 mb-0"> <?php
include ("connection.php");


$sql="SELECT sum(amount) as total FROM sale_entry";

if ($result=mysqli_query($conn,$sql))
  {
  $rowcount=mysqli_fetch_assoc($result);
  echo $rowcount['total'];
  // Free result set
  // mysqli_free_result($result);
  }

mysqli_close($conn);
?></h3>
              <span>Total Sales</span>
            </div>
            <div class="media-right white text-right">
              <i class="icon-graph font-large-1"></i>
            </div>
          </div>
        </div>
        <div id="Widget-line-chart2" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-6 col-md-6 col-12">
    <div class="card gradient-pomegranate">
      <div class="card-content">
        <div class="card-body pt-2 pb-0">
          <div class="media">
            <div class="media-body white text-left">
              <h3 class="font-large-1 mb-0"><?php
include ("connection.php");


$sql="SELECT sum(grand_total) as total FROM stock_purchase";

if ($result=mysqli_query($conn,$sql))
  {
  $rowcount=mysqli_fetch_assoc($result);
  echo $rowcount['total'];
  // Free result set
  // mysqli_free_result($result);
  }

mysqli_close($conn);
?></h3>
              <span>Total Stock Purchase</span>
            </div>
            <div class="media-right white text-right">
              <i class="icon-wallet font-large-1"></i>
            </div>
          </div>
        </div>
        <div id="Widget-line-chart3" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
        </div>
      </div>
    </div>
  </div>
</div>
<!--Statistics cards Ends-->

<!--Line with Area Chart 1 Starts-->

  
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


