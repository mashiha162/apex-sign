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
            <h4 class="card-title ">Reports</h4>
            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
          </div>
          <div class="card-body">

            <!-- attendence --> 
        <div class="row">

    <div class="col-lg-12 col-xl-6">
     
      <div class="accordion" id="accordionExample3">
        <div class="card collapse-icon accordion-icon-rotate border border-primary">
          <div class="accordion-header card-header" id="heading10">
            <h2 class="mb-0">
              <a class="btn btn-link mb-0 pb-3 text-decoration-none " data-toggle="collapse" data-target="#collapse09"
                aria-expanded="true" aria-controls="collapse09" >
                Sales 
              </a>
            </h2>
          </div>
          <div id="collapse09" class="collapse show" aria-labelledby="heading10" data-parent="#accordionExample3">
            <div class="card-body pt-0">
             <ul>
                 <li>Hello</li>
                 <li>Hello</li>
             </ul>
            </div>
          </div>
          <div class="accordion-header card-header" id="heading20">
            <h2 class="mb-0">
              <a class="btn btn-link mb-0 pb-3 collapsed text-decoration-none" data-toggle="collapse" data-target="#collapse10"
                aria-expanded="false" aria-controls="collapse10">
                Purchase
              </a>
            </h2>
          </div>
          <div id="collapse10" class="collapse" aria-labelledby="heading20" data-parent="#accordionExample3">
            <div class="card-body pt-0">
              <ul>
                 <li>Hello</li>
                 <li>Hello</li>
             </ul>
            </div>
          </div>
          <div class="accordion-header card-header" id="heading30">
            <h2 class="mb-0">
              <a class="btn btn-link mb-0 pb-3 collapsed text-decoration-none" data-toggle="collapse" data-target="#collapse30"
                aria-expanded="false" aria-controls="collapse30">
                Attendence
              </a>
            </h2>
          </div>
          <div id="collapse30" class="collapse" aria-labelledby="heading30" data-parent="#accordionExample3">
            <div class="card-body pt-0">
              <ul>
                 <li>Hello</li>
                 <li>Hello</li>
             </ul>
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
</div>

<?php
require 'footer.php';
?>

  </body>
  <!-- END : Body-->
</html>