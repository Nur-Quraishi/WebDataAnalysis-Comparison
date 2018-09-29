
<?php
include './db_config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    
    
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../User/css/w3.css">

<link rel="stylesheet" href="../User/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style1.css">
    
   
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>HuTbAzAr </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="../User/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../User/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- JQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
          <a href="user_index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
          <a href="contct.php" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li>
      <li class="nav-item">
          <a class="nav-link"   href="login.php"><i>LOGOUT</i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="../img/feb.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">HutBazar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              
          
         
         
          <li class="nav-item has-treeview">
          <li class="nav-header">CATAGORIES</li>
            
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                
                <i class="nav-icon " > </i>
                <p >
                    <img src="image/icon/man.png" style="width: 25px; height: 25px;" >
                Male Product
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="../User/shirt.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>SHIRTS</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="../User/pant.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>PANTS</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="../User/tshirt.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>T-SHIRTS</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="../User/watch.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>WATCHES</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="shoe.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>SHOES</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                
                <i class="nav-icon " > </i>
                <p >
                    <img src="image/icon/female.png" style="width: 20px; height: 20px; margin-left: 4px">
                FeMale Product
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="shari.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>SHARIES</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="3pices.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>3-PIECE</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="arnaments.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ARNAMENTS</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="w_watchs.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>WOMEN-WATCHES</p>
                </a>
              </li>
            </ul>
          </li><li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                
                <i class="nav-icon " > </i>
                <p >
                    <img src="image/icon/kids.png" style="width: 40px; height: 40px;margin-left: -10px" >
                Kids Products
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="dresses.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>DRESSES</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="toys.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>TOYS</p>
                </a>
              </li>
            </ul>
          </li><li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                
                <i class="nav-icon " > </i>
                <p >
                    <img src="image/icon/elec.png" style="width: 35px; height: 35px;margin-left: -2px" >
                Electronics Products
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="mobile.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>MOBILES</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="laptop.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>LAPTOPS</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="others.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>OTHERS</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          
          <li class="nav-header">Comparing</li>
          
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Charts
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
              <h1 class="m-0 text-dark"><marquee behaviour="float" direction="left">Hut Bazar</marquee></h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            
            
            <div class="card">
              
            
