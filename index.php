<?php
include '../Project/User/db_config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <!--skill style-->

        <style>

            .skills {
                text-align: right;
                padding-right: 20px;
                line-height: 20px;
                color: white;
            }

            .html {width: 90%; background-color: #4CAF50;}
            .css {width: 80%; background-color: #2196F3;}
            .js {width: 65%; background-color: #f44336;}
            .php {width: 60%; background-color: #808080;}
        </style>
        <!--skill style-->




        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>E-commerce</title>
        <link rel="icon" href="img/hb.png">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Wowslider" />

        <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
        <link rel="stylesheet" type="text/css" href="engine12/style.css" />
        <script type="text/javascript" src="engine12/jquery.js"></script>
        <!-- End WOWSlider.com HEAD section -->
    </head>
    <!-- bootstrap Style CSS File -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom Style CSS File -->
    <link rel="stylesheet" type="text/css" href="css/custom-style.css">
    <link rel="stylesheet" type="text/css" href="css/loaders.css"/>
    <!-- Font-Awesome Style CSS File -->
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <body>



        <!-- Top navigation -->
        <nav class="navbar navbar-expand-md fixed-top top-nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="img/hb.png" style="height: 60px; width: 60px"><strong style="margin-left: 10px;">Hut Bazar</strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><img src="img/icons/menu.png"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto text-sm-center text-md-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <!--
                        <li class="nav-item">
                            <a class="nav-link" href="#price">Products</a>
                        </li>
                        -->
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonial">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>	
                <ul class="navbar-nav ml-auto search-box">

                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-search text-white"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="User/login.php"> LOGIN</a>
                    </li>


                </ul>
            </div>
        </nav>

        <!-- Intro Three -->
        <section id="home" class="intro intro-bg bg-overlay parallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 caption-two-panel ml-auto pt-5">

                        <div class="intro-caption mt-5">
                            <!--slaider-->

                            <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
                            <div id="wowslider-container12">
                                <div class="ws_images"><ul>
                                        <?php
                                        $view_slider = mysql_query("SELECT * FROM slider ORDER BY slider_id DESC LIMIT 10");
                                        while ($fetch_slider = mysql_fetch_array($view_slider)) {
                                            ?>
                                            <li><img src="Admin/<?php echo $fetch_slider['slider_image']; ?>" alt="Mens Shoe" id="wows1_0"/></li>
                                        <?php } ?>
                            <!--<li><img src="data12/images/mens_shoe.jpg" alt="Mens Shoe" title="Mens Shoe" id="wows12_1"/></li>
                            <li><img src="data12/images/watch_for_female.jpg" alt="Watch For Female" title="Watch For Female" id="wows12_2"/></li>
                            <li><a href="http://wowslider.com"><img src="data12/images/kids.jpg" alt="http://wowslider.com/" title="Kids" id="wows12_3"/></a></li>
                            <li><img src="data12/images/pant.jpg" alt="Pant" title="Pant" id="wows12_4"/></li>
                        ---></ul></div>
                                <div class="ws_bullets"><div>
                                        <a href="#" title="<?php echo $fetch_slider['slider_title']; ?>"><span><img src="<?php echo $view_slider['slider_image']; ?>" alt="Shirt For Man"/>1</span></a>

                                    </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">bootstrap carousel</a> by WOWSlider.com v8.7</div>
                                <div class="ws_shadow"></div>
                            </div>	
                        </div>
                        <!-- End WOWSlider.com BODY section -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Info block 1 -->
    <section id="services" class="info-section text-white bg-right bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="head-box">
                        <h2 class="font-abril ">Services !</h2>
                    </div>
                    <div class="three-panel-block mt-5">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="service-block mb-5">
                                    <i class="icon-box mb-3 float-left w-100"><img src="img/logo/man.jpg" class="img-fluid"></i>
                                    <h3 class="text-primary"><a style="color: white;" href="User/man.php"> Male Product</a></h3>
                                    <p>20% off ,only 1 month</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="service-block mb-5">
                                    <i class="icon-box mb-3 float-left w-100"><img src="img/logo/female.jpg" class="img-fluid"></i>
                                    <h3 style="color: white;""><a style="color: white;" href="User/women.php"> Women Product</a></h3></h3>
                                    <p>10% off ,only 1 month</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="service-block mb-5 ">
                                    <i class="icon-box mb-3 float-left w-100"><img src="img/logo/index.png" class="img-fluid"></i>
                                    <h3 class="text-primary"><a style="color: white;" href="User/kids.php"> Kids Product</a></h3></h3>
                                    <p>30% off ,only 1 month</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="service-block">
                                    <i class="icon-box mb-3 float-left w-100"><img src="img/logo/indsex.png" class="img-fluid"></i>
                                    <h3 class="text-primary"><a style="color: white;" href="User/electronics.php"> Electronics</a></h3></h3>
                                    <p>25% off ,only 1 month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>




    <!-- Testimonial Block 01-->
    <section id="testimonial" class="testimonial-section sec-bg-04 py-5 h-100">
        <div class="container">
            <h3 style="color: white; text-align: center;">Our Products</h3>
            <div class="single-testimonial">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner pt-5" role="listbox">


                        <div class="carousel-item active">

                            <div class="testimonial-box text-center">
                                <div class="testimonial-content w-100 bg-faded">

                                    <a href="User/login.php"><img src="img/intro-bg.jpg" alt="Smiley face" height="400" width="700"> </a>
                                    <div class="testimonial-footer">
                                        <h4 style="color: white;">Shirt</h4>
                                        <h4 style="color: white;">Price : 1000 Taka</h4>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <?php
                        $sql = "SELECT * FROM products";
                        $res = mysql_query($sql);
                        while ($product = mysql_fetch_array($res)) {
                            ?>
                            <div class="carousel-item">

                                <div class="testimonial-box text-center">
                                    <div class="testimonial-content w-100 bg-faded">

                                        <a href="User/login.php"><img src="Admin/<?php echo $product['image']; ?>" alt="Smiley face" height="400" width="700"> </a>
                                        <div class="testimonial-footer">
                                            <h4 style="color: white;"><?php echo $product['name']; ?></h4>
                                            <h4 style="color: white;">Price : <?php echo $product['price']; ?></h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <?php } ?>





                    </div>

                </div>

            </div>
            <div class="navigator-box">
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </section>

    <!-- Content block 1 -->
    <section id="about" class="copy-content-sec sec-bg-02 h-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 copy-container ml-auto">


                    <div class="col-lg-4 col-sm-6 text-center mb-4">

                        <a href="https://muhid4640.wixsite.com/website"><img class="rounded-circle img-fluid d-block mx-auto" src="img/muid1_n.jpg" alt=""></a>
                        <a href="https://muhid4640.wixsite.com/website">
                            <h3 style="color: white;">
                                Hasanul Muid
                            </h3></a>
                        <!--skill-->

                        <h3 style="color: white">My Skills</h3>

                        <p style="color: white">HTML</p>
                        <div class="container">
                            <div class="skills html">90%</div>
                        </div>
                        <pstyle="color: white">CSS</p>
                            <div class="container">
                                <div class="skills css">80%</div>
                            </div>

                            <pstyle="color: white">PHP</p>
                                <div class="container">
                                    <div class="skills php">70%</div>
                                </div>

                                <!--skill-->
                                </div>

                                <div class="col-lg-4 col-sm-6 text-center mb-4">

                                    <a href="https://monir4219.000webhostapp.com/">
                                        <img class="rounded-circle img-fluid d-block mx-auto" src="img/shohag.jpg" alt="">
                                    </a>
                                    <a href=""><h3 style="color: white;">
                                            Moniruzzaman




                                        </h3></a>
                                    <!--skill-->

                                    <h3 style="color: white">My Skills</h3>

                                    <p style="color: white">HTML</p>
                                    <div class="container">
                                        <div class="skills html">90%</div>
                                    </div>
                                    <pstyle="color: white">CSS</p>
                                        <div class="container">
                                            <div class="skills css">80%</div>
                                        </div>

                                        <pstyle="color: white">PHP</p>
                                            <div class="container">
                                                <div class="skills php">60%</div>
                                            </div>

                                            <!--skill-->
                                            </div>
                                            <div class="col-lg-4 col-sm-6 text-center mb-4">

                                                <a href="home"><img class="rounded-circle img-fluid d-block mx-auto" src="img/a_n.jpg" alt=""></a>
                                                <a href=""><h3 style="color: white;">
                                                        Anikesh
                                                    </h3></a>

                                                <!--skill-->

                                                <h3 style="color: white">My Skills</h3>

                                                <p style="color: white">HTML</p>
                                                <div class="container">
                                                    <div class="skills html">80%</div>
                                                </div>
                                                <pstyle="color: white">CSS</p>
                                                    <div class="container">
                                                        <div class="skills css">70%</div>
                                                    </div>

                                                    <pstyle="color: white">PHP</p>
                                                        <div class="container">
                                                            <div class="skills php">50%</div>
                                                        </div>

                                                        <!--skill-->
                                                        </div>


                                                        </div>
                                                        </div>
                                                        </div>
                                                        </section>




                                                        <!-- Contact Block -->

                                                        <section id="contact" class="contact-section h-100 bg-dark">
                                                            <div id="map" class="bg-overlay"></div>

                                                            <div class="container py-5">
                                                                <div class="col-lg-8 col-md-6 col-sm-10 form-sec bg-white my-5 p-5 mx-auto">
                                                                    <form>
                                                                        <?php
                                                                        include '../Project/User/db_config.php';
                                                                        if (isset($_POST['submit'])) {
                                                                            $full_name = $_POST['ful_name'];
                                                                            $email = $_POST['email'];
                                                                            $adress = $_POST['adress'];
                                                                            $phone = $_POST['phone'];
                                                                            $massege = $_POST['massage'];

                                                                            $insert = mysql_query("INSERT INTO user_contect(id,full_name,email,adress,phone,message) VALUES('','$full_name','$email','$adress','$phone','$massege')");
                                                                            if ($insert) {
                                                                                header("location:index.php");
                                                                            } else {
                                                                                echo "Sorry , Message is not send.";
                                                                            }
                                                                        }
                                                                        ?>
                                                                        <h2 class="mb-4">Contact Us!</h2>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="sr-only" for="formGroupExampleInput" >Full Name</label>
                                                                                    <input class="form-control" id="formGroupExampleInput" name="ful_name" placeholder="Full Name"  type="text">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="sr-only" for="formGroupExampleInput2">Phone Number</label>
                                                                                    <input class="form-control" id="formGroupExampleInput2"  name="phone"  placeholder="Phone Number"  type="text">
                                                                                </div>		
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="sr-only" for="formGroupExampleInput2">Email Address</label>
                                                                                    <input class="form-control" id="formGroupExampleInput2" name="email" placeholder="Email Address"  type="email">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="sr-only" for="formGroupExampleInput2">Address</label>
                                                                                    <input class="form-control" id="formGroupExampleInput2" name="adress" placeholder="Enter Address"   type="text">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label class="sr-only" for="formGroupExampleInput2">Message</label>
                                                                                    <textarea class="form-control" name="massage" placeholder="Enter your message here!" rows="4"  ></textarea>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit"> Submit </button>
                                                                                </div>		
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </section>

                                                        <!-- footer Block -->
                                                        <div class="copy-footer bg-primary py-2">
                                                            <div class="container text-center text-light">
                                                                &copy; <a href="http://grafreez.com" target="_blank">Grafreez.com</a> <span id="year"></span>. All rights reserved. Created with <i class="fa fa-heart"></i>
                                                            </div>
                                                        </div>



                                                        <!-- Javascript Files  -->
                                                        <script  src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
                                                        <script src="js/bootstrap.min.js" ></script>
                                                        <script async deffer type="text/javascript" src="https://maps.google.com/maps/api/js?key= AIzaSyB52BfJHBtqiqYBn_D4ZUqujiWxAOiRyTc&callback=initMap"></script>
                                                        <script src="js/gmap-custom.js" ></script>
                                                        <script src="js/core.js"></script>
                                                        </body>
                                                        </html>

                                                        <script type="text/javascript" src="engine12/wowslider.js"></script>
                                                        <script type="text/javascript" src="engine12/script.js"></script>






