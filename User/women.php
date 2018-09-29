<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
        <title>Carousel Product Cart Slider - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style type="text/css">
            @import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
            .col-item
            {
                border: 1px solid #E1E1E1;
                border-radius: 5px;
                background: #FFF;
            }
            .col-item .photo img
            {
                margin: 0 auto;
                width: 100%;
            }

            .col-item .info
            {
                padding: 10px;
                border-radius: 0 0 5px 5px;
                margin-top: 1px;
            }

            .col-item:hover .info {
                background-color: #F5F5DC;
            }
            .col-item .price
            {
                /*width: 50%;*/
                float: left;
                margin-top: 5px;
            }

            .col-item .price h5
            {
                line-height: 20px;
                margin: 0;
            }

            .price-text-color
            {
                color: #219FD1;
            }

            .col-item .info .rating
            {
                color: #777;
            }

            .col-item .rating
            {
                /*width: 50%;*/
                float: left;
                font-size: 17px;
                text-align: right;
                line-height: 52px;
                margin-bottom: 10px;
                height: 52px;
            }

            .col-item .separator
            {
                border-top: 1px solid #E1E1E1;
            }

            .clear-left
            {
                clear: left;
            }

            .col-item .separator p
            {
                line-height: 20px;
                margin-bottom: 0;
                margin-top: 10px;
                text-align: center;
            }

            .col-item .separator p i
            {
                margin-right: 5px;
            }
            .col-item .btn-add
            {
                width: 50%;
                float: left;
            }

            .col-item .btn-add
            {
                border-right: 1px solid #E1E1E1;
            }

            .col-item .btn-details
            {
                width: 50%;
                float: left;
                padding-left: 10px;
            }
            .controls
            {
                margin-top: 20px;
            }
            [data-slide="prev"]
            {
                margin-right: 10px;
            }

        </style>
        
        <script src="bootstrap-3.1.0/dist/js/bootstrap.min.js"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>SB Admin - Start Bootstrap Template</title>
        <!-- Bootstrap core CSS-->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css">

    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="index.php">User Panel</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="index.php">
                            <i class="fa fa-fw fa-dashboard"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                        <a class="nav-link" href="charts.php">
                            <i class="img"> <img src="../User/image/icon/icon cart.png" alt="HTML5 Icon" style="width:30px;height:30px;"> </i>
                            <span class="nav-link-text">Charts</span>
                        </a>
                    </li>

                    <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                       <a class="nav-link" href="tables.php">
                         <i class="fa fa-fw fa-table"></i>
                         <span class="nav-link-text">User Table</span>
                       </a>
                     </li>-->
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                            <i class=""><img src="../User/image/icon/category.png" alt="HTML5 Icon" style="width:30px;height:30px;"> </i>
                            <span class="nav-link-text">Cetagory</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseComponents">
                            <li>
                                <a href="man.php"><img src="../User/image/icon/man.png" alt="HTML5 Icon" style="width:30px;height:30px;">Man</a>

                            </li>
                            <li>
                                <a href="women.php"><img src="../User/image/icon/female.png" alt="HTML5 Icon" style="width:20px;height:20px;">Woman</a>
                            </li>
                            <li>
                                <a href="kids.php"><img src="../User/image/icon/kids.png" alt="HTML5 Icon" style="width:30px;height:30px;">Kids</a>
                            </li>
                            <li>
                                <a href="electronics.php"><img src="../User/image/icon/elec.png" alt="HTML5 Icon" style="width:30px;height:30px;">Electronics</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-file"></i>
                            <span class="nav-link-text">Women Products</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                            <li>
                                <a href="login.php">Shari</a>
                            </li>
                            <li>
                                <a href="register.php">3-Pice</a>
                            </li>
                            <li>
                                <a href="login.php">T-shirt&Pan </a>
                            </li>
                            <li>
                                <a href="forgot-password.php">Cosmaticstt</a>
                            </li>
                            
                            
                            
                        </ul>
                    </li>
                    
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                        <a class="nav-link" href="link.php">
                            <i class="fa fa-fw fa-link"></i>
                            <span class="nav-link-text">Link</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav sidenav-toggler">
                    <li class="nav-item">
                        <a class="nav-link text-center" id="sidenavToggler">
                            <i class="fa fa-fw fa-angle-left"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-envelope"></i>
                            <span class="d-lg-none">Messages
                                <span class="badge badge-pill badge-primary">12 New</span>
                            </span>
                            <span class="indicator text-primary d-none d-lg-block">
                                <i class="fa fa-fw fa-circle"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">New Messages:</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <strong>David Miller</strong>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <strong>Jane Smith</strong>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <strong>John Doe</strong>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item small" href="#">View all messages</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-bell"></i>
                            <span class="d-lg-none">Alerts
                                <span class="badge badge-pill badge-warning">6 New</span>
                            </span>
                            <span class="indicator text-warning d-none d-lg-block">
                                <i class="fa fa-fw fa-circle"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">New Alerts:</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-success">
                                    <strong>
                                        <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-danger">
                                    <strong>
                                        <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-success">
                                    <strong>
                                        <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item small" href="#">View all alerts</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <form class="form-inline my-2 my-lg-0 mr-lg-2">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search for...">
                                <span class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" ></li>
                    <h1> Our Male products</h1>
                </ol>
                <!--main content-->

                <div class="row">
                    <div class="col-md-9">
                        <h3>
                        </h3>
                    </div>
                    <!--
                                    <div class="col-md-3">
                    <!-- Controls --
                    <div class="controls pull-right hidden-xs">
                        <a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example-generic"
                           data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary" href="#carousel-example-generic"
                           data-slide="next"></a>
                    </div>
                    -->
                </div>
            </div>
            <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <h1 style="margin-left: 10px">Recent Products</h1>
                    <div class="item active">
                        <div class="row">



                            <!-- Product 1-->

                            <div class="col-sm-4">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="image/images.jpg" class="img-responsive" alt="a" />
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>
                                                    Product with Variants</h5>
                                                <h5 class="price-text-color">
                                                    $149.99</h5>
                                            </div>
                                            <div class="rating hidden-sm col-md-6">
                                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                <i class="fa fa-shopping-cart"></i><a href="charts.php" class="hidden-sm">Add to cart</a></p>
                                            <p class="btn-details">
                                                <i class="fa fa-list"></i><a href="index.php" class="hidden-sm">More details</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product 1 end-->




                        </div>
                    </div>

                </div>
            </div>


           


            <!--end content-->


            <div style="height: auto;"></div>
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright © Your Website 2018</small>
                </div>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin.min.js"></script>
        <!-- Custom scripts for this page-->
        <!-- Toggle between fixed and static navbar-->
        <script>
            $('#toggleNavPosition').click(function () {
                $('body').toggleClass('fixed-nav');
                $('nav').toggleClass('fixed-top static-top');
            });

        </script>
        <!-- Toggle between dark and light navbar-->
        <script>
            $('#toggleNavColor').click(function () {
                $('nav').toggleClass('navbar-dark navbar-light');
                $('nav').toggleClass('bg-dark bg-light');
                $('body').toggleClass('bg-dark bg-light');
            });

        </script>
        <script type="text/javascript">

        </script>
    </div>
</body>

</html>
