<?php 
ob_start();
    session_start();
    include("connection.php");
if(isset($_SESSION['admin_email'])){
   header('Location:dashboard.php');

}
?>
<!DOCTYPE html>
<html lang="en" class="loading">
  <!-- BEGIN : Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Login - Apex Sign</title>
   
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/prism.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
  </head>
  <!-- END : Head-->

  <!-- BEGIN : Body-->
  <body data-col="1-column" class=" 1-column  blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">
      <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
          <div class="content-wrapper"><!--Login Page Starts-->
<section id="login">
  <div class="container-fluid">
    <div class="row full-height-vh m-0">
      <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="card">
          <form method="POST" class="login">
          <div class="card-content">
            <div class="card-body login-img">
              <div class="row m-0">
              <!--   <div class="col-lg-6 d-lg-block d-none py-2 text-center align-middle">
                  <img src="app-assets/img/gallery/login.png" alt="" class="img-fluid mt-5" width="400" height="230">
                </div> -->
                <div class="col-lg-12 col-md-12 bg-white px-4 pt-3">
                  <!-- <h4 class="mb-2 card-title">Login</h4> -->
                <div class="col-lg-12 d-lg-block d-none py-2 text-center align-middle">
                     <img src="app-assets/img/apex.png" alt="" class="img-fluid " width="400" height="230">
               </div>
               <div><br></div>
               <label>Email</label>
                  <input type="text" class="form-control mb-3" placeholder="Email" name="admin_email" required/>
                  <label>Password</label>
                  <input type="password" class="form-control mb-1" placeholder="Password" name="admin_pass" minlength="4" required />
                  <div class="d-flex justify-content-between mt-2">
                   <div>
                     <br>
                   </div>
                   
                  </div>

                   <div class="form-group row text-center m-t-10">
                                <div class="col-12">
                                    <input type="submit" class="btn btn-md btn-block btn-primary waves-effect waves-light"  name="admin_login" value="LOG IN">
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
</section>
 </form>
          <?php 

if(isset($_POST['admin_login'])){
	$admin_email = $_POST['admin_email'];
	$admin_pass = $_POST['admin_pass'];
	$get_admin = mysqli_query($conn,"select * from admin where admin_email='$admin_email' AND admin_pass='$admin_pass'");
	$count = mysqli_fetch_array($get_admin);
	if($count['admin_pass'] == $admin_pass){
		$_SESSION['admin_email']=$admin_email;
		header('location:dashboard.php');
	   

  }
	else
	{
		echo "<script>alert('Email or Password is Wrong !')</script>";
	}
}
?>
<!--Login Page Ends-->

          </div>
        </div>
        <!-- END : End Main Content-->
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/vendors/js/core/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/core/popper.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/prism.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/screenfull.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/pace/pace.min.js" type="text/javascript"></script>
    
  
    <!-- BEGIN JS-->
    <script src="app-assets/js/app-sidebar.js" type="text/javascript"></script>
    <script src="app-assets/js/notification-sidebar.js" type="text/javascript"></script>
    <script src="app-assets/js/customizer.js" type="text/javascript"></script>
   
  </body>
  <!-- END : Body-->
</html>