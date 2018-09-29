<!DOCTYPE html>
<html lang="en">

    <head>
        
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
        <!-- Page level plugin CSS-->
        <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">
        
        
        <!----cart style--->
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                            <style>
                                body {
                                    font-family: Arial;
                                    font-size: 17px;
                                    padding: 8px;
                                }

                                * {
                                    box-sizing: border-box;
                                }

                                .row {
                                    display: -ms-flexbox; /* IE10 */
                                    display: flex;
                                    -ms-flex-wrap: wrap; /* IE10 */
                                    flex-wrap: wrap;
                                    margin: 0 -16px;
                                }

                                .col-25 {
                                    -ms-flex: 25%; /* IE10 */
                                    flex: 25%;
                                }

                                .col-50 {
                                    -ms-flex: 50%; /* IE10 */
                                    flex: 50%;
                                }

                                .col-75 {
                                    -ms-flex: 75%; /* IE10 */
                                    flex: 75%;
                                }

                                .col-25,
                                .col-50,
                                .col-75 {
                                    padding: 0 16px;
                                }

                                .container {
                                    background-color: #f2f2f2;
                                    padding: 5px 20px 15px 20px;
                                    border: 1px solid lightgrey;
                                    border-radius: 3px;
                                }

                                input[type=text] {
                                    width: 100%;
                                    margin-bottom: 20px;
                                    padding: 12px;
                                    border: 1px solid #ccc;
                                    border-radius: 3px;
                                }

                                label {
                                    margin-bottom: 10px;
                                    display: block;
                                }

                                .icon-container {
                                    margin-bottom: 20px;
                                    padding: 7px 0;
                                    font-size: 24px;
                                }

                                .btn {
                                    background-color: #4CAF50;
                                    color: white;
                                    padding: 12px;
                                    margin: 10px 0;
                                    border: none;
                                    width: 100%;
                                    border-radius: 3px;
                                    cursor: pointer;
                                    font-size: 17px;
                                }

                                .btn:hover {
                                    background-color: #45a049;
                                }

                                a {
                                    color: #2196F3;
                                }

                                hr {
                                    border: 1px solid lightgrey;
                                }

                                span.price {
                                    float: right;
                                    color: grey;
                                }

                                /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
                                @media (max-width: 800px) {
                                    .row {
                                        flex-direction: column-reverse;
                                    }
                                    .col-25 {
                                        margin-bottom: 20px;
                                    }
                                }
                            </style>
        <!----cart style--->
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
                            <span class="nav-link-text">Example Pages</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                            <li>
                                <a href="login.php">Login Page</a>
                            </li>
                            <li>
                                <a href="register.php">Registration Page</a>
                            </li>
                            <li>
                                <a href="forgot-password.php">Forgot Password Page</a>
                            </li>
                            <li>
                                <a href="blank.php">Blank Page</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-sitemap"></i>
                            <span class="nav-link-text">Menu Levels</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseMulti">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
                                <ul class="sidenav-third-level collapse" id="collapseMulti2">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                        <a class="nav-link" href="#">
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
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">My Dashboard</li>
                </ol>
                <!-- Icon Cards-->
                <div class="row">
                    
                       
                            
                        
                        

                            <h2>Responsive Checkout Form</h2>
                            <p>Resize the browser window to see the effect. When the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other.</p>
                            <div class="row">
                                <div class="col-75">
                                    <div class="container">
                                        <form action="/action_page.php">

                                            <div class="row">
                                                <div class="col-50">
                                                    <h3>Billing Address</h3>
                                                    <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                                    <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                                                    <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                                    <input type="text" id="email" name="email" placeholder="john@example.com">
                                                    <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                                    <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                                                    <label for="city"><i class="fa fa-institution"></i> City</label>
                                                    <input type="text" id="city" name="city" placeholder="New York">

                                                    <div class="row">
                                                        <div class="col-50">
                                                            <label for="state">State</label>
                                                            <input type="text" id="state" name="state" placeholder="NY">
                                                        </div>
                                                        <div class="col-50">
                                                            <label for="zip">Zip</label>
                                                            <input type="text" id="zip" name="zip" placeholder="10001">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-50">
                                                    <h3>Payment</h3>
                                                    <label for="fname">Accepted Cards</label>
                                                    <div class="icon-container">
                                                        <i class="fa fa-cc-visa" style="color:navy;"></i>
                                                        <i class="fa fa-cc-amex" style="color:blue;"></i>
                                                        <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                                        <i class="fa fa-cc-discover" style="color:orange;"></i>
                                                    </div>
                                                    <label for="cname">Name on Card</label>
                                                    <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                                                    <label for="ccnum">Credit card number</label>
                                                    <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                                                    <label for="expmonth">Exp Month</label>
                                                    <input type="text" id="expmonth" name="expmonth" placeholder="September">
                                                    <div class="row">
                                                        <div class="col-50">
                                                            <label for="expyear">Exp Year</label>
                                                            <input type="text" id="expyear" name="expyear" placeholder="2018">
                                                        </div>
                                                        <div class="col-50">
                                                            <label for="cvv">CVV</label>
                                                            <input type="text" id="cvv" name="cvv" placeholder="352">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <label>
                                                <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                                            </label>
                                            <input type="submit" value="Continue to checkout" class="btn">
                                        </form>
                                    </div>
                                </div>
                                <div class="col-25">
                                    <div class="container">
                                        <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
                                        <p><a href="#">Product 1</a> <span class="price">$15</span></p>
                                        <p><a href="#">Product 2</a> <span class="price">$5</span></p>
                                        <p><a href="#">Product 3</a> <span class="price">$8</span></p>
                                        <p><a href="#">Product 4</a> <span class="price">$2</span></p>
                                        <hr>
                                        <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
                                    </div>
                                </div>
                            </div>

                        






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
                        <!-- Page level plugin JavaScript-->
                        <script src="vendor/chart.js/Chart.min.js"></script>
                        <script src="vendor/datatables/jquery.dataTables.js"></script>
                        <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
                        <!-- Custom scripts for all pages-->
                        <script src="js/sb-admin.min.js"></script>
                        <!-- Custom scripts for this page-->
                        <script src="js/sb-admin-datatables.min.js"></script>
                        <script src="js/sb-admin-charts.min.js"></script>
                </div>
                </body>

                </html>
