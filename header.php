<!DOCTYPE html>
<html lang="en" class="loading">
  <!-- BEGIN : Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    
   
    <title>APEX-SIGN </title>
   <link rel="shortcut icon" type="image/png" href="app-assets/img/ico/favicon-32.png">
   
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
     <link rel="stylesheet" type="text/css" href="app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/prism.min.css">
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets\vendors\css\core\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/jquery-ui2.css">
    <link rel="stylesheet" type="text/css" href="app-assets/jquery/jquery-editable-select.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/sweatalert/sweetalert2.min.css">

    
     <!-- Table CSS Files -->
  <link href="app-assets/css/material-dashboard.css" rel="stylesheet" />
    <!-- END VENDOR CSS-->
<!-- BEGIN APEX CSS-->
<link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
  </head>
  <!-- END : Head-->

  <!-- BEGIN : Body-->
  <body data-col="2-columns" class=" 2-columns ">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">


      <!-- main menu-->
      <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
      <div data-active-color="white" data-background-color="man-of-steel" data-image="app-assets/img/sidebar-bg/01.jpg" class="app-sidebar">
        <!-- main menu header-->
        <!-- Sidebar Header starts-->
        <div class="sidebar-header">
          <div class="logo clearfix"><a href="dashboard.php" class="logo-text float-left">
              <div class="logo-img"><img src="app-assets/img/ap.png"/>
              </div><span class="text align-middle">APEX SIGN</span></a>
              <a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block">
                <i data-toggle="expanded" class="toggle-icon ft-toggle-right"></i></a>
                <a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none">
                  <i class="ft-x"></i></a>
                </div>
        </div>
        <!-- Sidebar Header Ends-->
        <!-- / main menu header-->
        <!-- main menu content-->
        <div class="sidebar-content">
          <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" data-scroll-to-active="true" class="navigation navigation-main">
              <li class=" nav-item"><a href="dashboard.php">
                <i class="ft-home"></i>
                <span data-i18n="" class="menu-title">Dashboard </span></a>
              </li>
               <li class=" nav-item"><a href="data_entry.php">
                <i class="ft-file-text"></i><span data-i18n="" class="menu-title">Sale Entry</span></a>
              </li>
              </li>
               <li class=" nav-item"><a href="search.php">
                <i class="fa fa-search"></i><span data-i18n="" class="menu-title">Search</span></a>
              </li>
              <!-- <li class="has-sub nav-item">
                <a href="#">
                <i class="fa fa-list-alt"></i>
                <span data-i18n="" class="menu-title">Sales</span>
               </a>
                <ul class="menu-content">
                  <li><a href="data_entry.php" class="menu-item">Sale Entry</a>
                  </li>
                  <!-- <li><a href="invoice.php" class="menu-item">Create Invoice</a>
                  </li> -->
                  <!-- <li><a href="invoice_list.php" class="menu-item">Invoice List</a>
                  </li> -->
                  <!-- <li><a href="search.php" class="menu-item">Search</a> -->
                  <!-- </li> -->
                  <!-- </ul> -->
              <!-- </li> --> 
              <li class="has-sub nav-item">
                <a href="#">
                <i class="ft-users"></i>
                <span data-i18n="" class="menu-title">Customer</span>
               </a>
                <ul class="menu-content">
                  <li><a href="add_customer.php" class="menu-item">Add Customer</a>
                  </li>
                  <li><a href="customer_list.php" class="menu-item">Customer List</a>
                  </li>
                  </ul>
              </li>
              <!-- <li class="has-sub nav-item"><a href="#">
               <i class="icon-notebook"></i>
                <span data-i18n="" class="menu-title">Quotation</span>
              </a>
              <ul class="menu-content">
                <li><a href="quotation.php" class="menu-item">New Quotation</a>
                </li>
                <li><a href="quotation_list.php" class="menu-item">All Quatations</a>
                </li>
                </ul>
            </li> -->
              
              <li class="has-sub nav-item"><a href="#">
                <i class="ft-users"></i><span data-i18n="" class="menu-title">Employee Manager</span></a>
                <ul class="menu-content">
                   <li><a href="add_employee.php" class="menu-item">Add Employee</a>
                  </li>
                   
                  <li><a href="attendence.php" class="menu-item">Attendence</a>
                  </li>
                
                  <li><a href="employee_credit.php" class="menu-item">Employee Credits</a>
                  </li>
               
                  </ul>
              </li>
              <li class="has-sub nav-item"><a href="#">
                <i class="ft-grid"></i><span data-i18n="" class="menu-title">Product Manager</span></a>
                <ul class="menu-content">
                  <li><a href="add_product.php" class="menu-item">New Product</a>
                  </li>
                 
                  <li><a href="product_list.php" class="menu-item">Product List</a>
                  </li>
                 
                  </ul>
              </li>
              <li class="has-sub nav-item"><a href="#">
                <i class="icon-basket-loaded"></i><span data-i18n="" class="menu-title">Stock Manager</span></a>
                <ul class="menu-content">
                  <li><a href="add_vendor.php" class="menu-item">Vendor</a>
                  </li>
                  <li><a href="purchase.php" class="menu-item">Purchase Entry</a>
                  </li>
                  
                  <li><a href="purchase_list.php" class="menu-item">Purchase List</a>
                  </li>
                  
                 
                  </ul>
              </li>
              <!-- <li class="has-sub nav-item"><a href="#">
                <i class="fa fa-user"></i><span data-i18n="" class="menu-title">Administrator</span></a>
                <ul class="menu-content">
                  <li><a href="add_user.php" class="menu-item">Add User</a>
                  </li>
                  <li><a href="manage_user.php" class="menu-item">Manage User</a>
                  </li>
                  
                 
                  </ul>
              </li> -->
              <li class="has-sub nav-item"><a href="#">
                <i class="ft-file-text"></i><span data-i18n="" class="menu-title">Reports</span></a>
                <ul class="menu-content">
                  <li><a href="sale_report.php" class="menu-item">Sale</a>
                  </li>
                  <li><a href="purchase_report.php" class="menu-item">Purchase</a>
                  </li>
                   <li><a href="attendence_report.php" class="menu-item">Employee Attendence</a>
                  </li>
                  <li><a href="emp_credit_report.php" class="menu-item">Employee Credits</a>
                  </li>
                  
                 
                  </ul>
              </li>
             
              <!-- <li class=" nav-item"><a href="calender.php">
                <i class="ft-calendar"></i><span data-i18n="" class="menu-title">Calendar</span></a>
              </li> -->
             
             
            </ul>
          </div>
        </div>
        <!-- main menu content-->
        <div class="sidebar-background"></div>
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
      </div>
