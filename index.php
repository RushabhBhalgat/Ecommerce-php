<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <title>Ecommerce Store</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <!-- Custom CSS File -->
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>

<body>
    <div id="top">
        <!-- Top Div Start -->
        <div class="container p-3">
            <!-- container Div Start -->
            <div class="col-md-6 offer">
                <!-- col-md-6 Div Start -->
                <a href="#" class="btn btn-success btn-small">Welcome Guest</a>
                <a href="#" class>Shopping Cart Total Price: INR 500 | Total Items: 2</a>
            </div><!-- col-md-6 Div end -->
            <div class="col-md-6">
                <ul class="menu">
                    <li><a href="customer_registration.php"> Register</a></li>
                    <li><a href="checkout.php"> My Accout</a></li>
                    <li><a href="cart.php"> Go To Cart</a></li>
                    <li><a href="login.php"> Login</a></li>
                </ul>
            </div>


        </div><!-- container Div End -->
    </div><!-- Top Div End -->

    <div class="navbar navbar-default" id="navbar">
        <!-- NavBar Div Starts -->
        <div class="container">
            <!-- container Div Starts -->
            <div class="navbar-header">
                <!-- navbar-header Div Starts -->
                <a href="index.php" class="navbar-brand home">
                    <img src="images/logo-large.png" width="100px" height="55px" alt="tee-Shopping" class="hidden-xs">
                    <!-- This will show the img only on pc -->
                    <img src="images/logo-small.png" width="50px" height="50px" alt="tee-Shopping" class="visible-xs">
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only"></span>
                    <i class="fa fa-search"></i>
                    </span>
                </button>

            </div><!-- navbar-header Div ends -->

            <div class="navbar-collapse collapse" id="navigation">
                <!-- navbar collapse menu start -->

                <div class="padding-nav">
                    <!-- padding-nav div starts here -->
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="">
                            <a href="shop.php">Shop</a>
                        </li>
                        <li class="">
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li class="">
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li class="">
                            <a href="about.php">About</a>
                        </li>
                        <li class="">
                            <a href="services.php">Services</a>
                        </li>
                        <li class="">
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div><!-- padding-nav div Ends here -->
                <a href="cart.php" class="btn btn-primary navbar-btn right">
                    <i class="fa fa-shopping-cart"></i>
                    <span> 4 items in your cart</span>
                </a>

                <div class="navbar-collapse collapse right">
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse"
                        data-target="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

                <div class="collapse clearfix" id="search">
                    <form action="result.php" method="get" class="navbar-form">
                        <div class="input-group">
                            <input type="text" name="user_query" placeholder="Search" class="form-control" required
                                id="">
                            <span class="input-group-btn">
                                <button type="submit" value="Search" name="search" class="btn btn-primary">
                            </span>
                            <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div><!-- navbar collapse menu start -->




        </div><!-- container Div ends -->

    </div><!-- NavBar Div Ends -->



    <!--***********************************-->
    <!--      NEW SECTION        -->
    <!--***********************************-->


    <div id="slider" class="container">
        <!-- Carousel container div starts -->
        <div class="col-md-12">
            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="myCarousel" data-slide-to="1"></li>
                    <li data-target="myCarousel" data-slide-to="2"></li>
                    <li data-target="myCarousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <!-- Carouel Images corouser-inner div starts -->
                    <div class="item">
                        <img width="4000" height="2186" src="admin_area/slider_images/slide-1.jpg" alt="">
                    </div>

                    <div class="item">
                        <img width="4000" height="2186" src="admin_area/slider_images/slide-2.jpg" alt="">
                    </div>

                    <div class="item active">
                        <img width="4000" height="2186" src="admin_area/slider_images/slide-3.jpg" alt="">
                    </div>

                    <div class="item">
                        <img width="4000" height="2186" src="admin_area/slider_images/slide-4.jpg" alt="">
                    </div>
                </div><!-- Carouel Images corouser-inner div Ends -->
                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left">
                        <span class="sr-only">
                            Previous
                        </span>

                    </span>
                </a>

                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right">
                        <span class="sr-only">
                            Next
                        </span>

                    </span>
                </a>
            </div>
        </div>
    </div><!-- Carousel container div ends -->



    <!--***********************************-->
    <!--      NEW SECTION        -->
    <!--***********************************-->



    <div id="advantage">
        <div class="container">
            <!--container for advantages div Starts here -->
            <div class="same-height-row">
                <!--same-height-rowdiv starts here-->
                <div class="col-sm-4">
                    <!--col-sm-4 div starts here-->
                    <div class="box same-height-row">
                        <!--Box starts here-->
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="">Love For Customer</a></h3>
                        <p>We Are Always Here to Help You With Your Queries</p>

                    </div>
                    <!--Box Ends here-->
                </div>
                <!--col-sm-4 div Ends here-->


                <div class="col-sm-4">
                    <!--col-sm-4 div starts here-->
                    <div class="box same-height-row">
                        <!--Box starts here-->
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="">Fast Delivery</a></h3>
                        <p>We Provide you the fastest delivey option at tee shopping</p>

                    </div>
                    <!--Box Ends here-->
                </div>
                <!--col-sm-4 div Ends here-->


                <div class="col-sm-4">
                    <!--col-sm-4 div starts here-->
                    <div class="box same-height-row">
                        <!--Box starts here-->
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="">Best Prices</a></h3>
                        <p>We provide you best pricing option at tee shopping..</p>

                    </div>
                    <!--Box Ends here-->
                </div>
                <!--col-sm-4 div Ends here-->

            </div>
            <!--same-height-rowdiv Ends-->
        </div>
        <!--container for advantages div Starts Ends -->
    </div>



    <!--***********************************-->
    <!--      NEW SECTION        -->
    <!--***********************************-->



    <div id="hot">
        <!-- The strip of hotbox starts here -->
        <div class="box1">
            <div class="container">
                <div class="col-md-12">
                    <h2>Latest Books At Your Doorstep</h2>
                </div>
            </div>
        </div>
    </div><!-- The strip of hotbox starts here -->



    <!--***********************************-->
    <!--      NEW SECTION  =========>>>>>>>>>=================================>>>>>>>>>>=====     -->
    <!--***********************************-->



    <div id="content" class="container">
        <!-- container div for the main content starts here -->
        <div class="row">
            <!-- row div starts here -->
            <div class="col-sm-4 col-sm-6 single">
                <!-- col-sm-4 col-sm-6 div starts here -->
                <div class="product">
                    <!-- product div starts here -->
                    <a href="details.php">
                        <img class="img-responsive"
                            src="admin_area/product_images/Allen Solly Men's Slim fit Casual Shirt/1.jpeg" alt="">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Allen Solly Men's Slim fit Casual Shirt</a></h3>
                        <p class="price">INR 539</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa--shopping-cart"></i> Add To
                                Cart</a>
                        </p>
                    </div>
                </div><!-- product div starts here -->
            </div><!-- col-sm-4 col-sm-6 div ends here -->


            <div class="col-sm-4 col-sm-6 single">
                <!-- col-sm-4 col-sm-6 div starts here -->
                <div class="product">
                    <!-- product div starts here -->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/Apple iphone 11 pro/1.jpeg" alt="">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Apple iphone 11 pro</a></h3>
                        <p class="price">INR 13854</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa--shopping-cart"></i> Add To
                                Cart</a>
                        </p>
                    </div>
                </div><!-- product div starts here -->
            </div><!-- col-sm-4 col-sm-6 div ends here -->


            <div class="col-sm-4 col-sm-6 single">
                <!-- col-sm-4 col-sm-6 div starts here -->
                <div class="product">
                    <!-- product div starts here -->
                    <a href="details.php">
                        <img class="img-responsive"
                            src="admin_area/product_images/Corsair HS35 Stereo Gaming Headset - Headphones Designed for PC and Mobile – Green/1.jpg"
                            alt="">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Corsair HS35 Stereo Gaming Headset</a></h3>
                        <p class="price">INR 539</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa--shopping-cart"></i> Add To
                                Cart</a>
                        </p>
                    </div>
                </div><!-- product div starts here -->
            </div><!-- col-sm-4 col-sm-6 div ends here -->


            <div class="col-sm-4 col-sm-6 single">
                <!-- col-sm-4 col-sm-6 div starts here -->
                <div class="product">
                    <!-- product div starts here -->
                    <a href="details.php">
                        <img class="img-responsive"
                            src="admin_area/product_images/Logitech HD PRO Webcam C920, 1080P Widescreen Video Calling And Recording (960-000764)/1.jpeg"
                            alt="">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Logitech HD PRO Webcam C920</a></h3>
                        <p class="price">INR 539</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa--shopping-cart"></i> Add To
                                Cart</a>
                        </p>
                    </div>
                </div><!-- product div starts here -->
            </div><!-- col-sm-4 col-sm-6 div ends here -->

            <div class="col-sm-4 col-sm-6 single">
                <!-- col-sm-4 col-sm-6 div starts here -->
                <div class="product">
                    <!-- product div starts here -->
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/Apple iphone 11 pro/1.jpeg" alt="">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">iPhone XR 64GB RAM</a></h3>
                        <p class="price">INR 539</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa--shopping-cart"></i> Add To
                                Cart</a>
                        </p>
                    </div>
                </div><!-- product div starts here -->
            </div><!-- col-sm-4 col-sm-6 div ends here -->


            <div class="col-sm-4 col-sm-6 single">
                <!-- col-sm-4 col-sm-6 div starts here -->
                <div class="product">
                    <!-- product div starts here -->
                    <a href="details.php">
                        <img class="img-responsive"
                            src="admin_area/product_images/Allen Solly Men's Slim fit Casual Shirt/3.jpeg" alt="">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Allen Solly Men's Slim fit Casual Shirt</a></h3>
                        <p class="price">INR 539</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa--shopping-cart"></i> Add To
                                Cart</a>
                        </p>
                    </div>
                </div><!-- product div starts here -->
            </div><!-- col-sm-4 col-sm-6 div ends here -->


            <div class="col-sm-4 col-sm-6 single">
                <!-- col-sm-4 col-sm-6 div starts here -->
                <div class="product">
                    <!-- product div starts here -->
                    <a href="details.php">
                        <img class="img-responsive"
                            src="admin_area/product_images/Allen Solly Men's Slim fit Casual Shirt/1.jpeg" alt="">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Allen Solly Men's Slim fit Casual Shirt</a></h3>
                        <p class="price">INR 539</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa--shopping-cart"></i> Add To
                                Cart</a>
                        </p>
                    </div>
                </div><!-- product div starts here -->
            </div><!-- col-sm-4 col-sm-6 div ends here -->


            <div class="col-sm-4 col-sm-6 single">
                <!-- col-sm-4 col-sm-6 div starts here -->
                <div class="product">
                    <!-- product div starts here -->
                    <a href="details.php">
                        <img class="img-responsive"
                            src="admin_area/product_images/Allen Solly Men's Slim fit Casual Shirt/1.jpeg" alt="">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Allen Solly Men's Slim fit Casual Shirt</a></h3>
                        <p class="price">INR 539</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa--shopping-cart"></i> Add To
                                Cart</a>
                        </p>
                    </div>
                </div><!-- product div starts here -->
            </div><!-- col-sm-4 col-sm-6 div ends here -->




            <div class="col-sm-4 col-sm-6 single">
                <!-- col-sm-4 col-sm-6 div starts here -->
                <div class="product">
                    <!-- product div starts here -->
                    <a href="details.php">
                        <img class="img-responsive"
                            src="admin_area/product_images/Allen Solly Men's Slim fit Casual Shirt/1.jpeg" alt="">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Allen Solly Men's Slim fit Casual Shirt</a></h3>
                        <p class="price">INR 539</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa--shopping-cart"></i> Add To
                                Cart</a>
                        </p>
                    </div>
                </div><!-- product div starts here -->
            </div><!-- col-sm-4 col-sm-6 div ends here -->




            <div class="col-sm-4 col-sm-6 single">
                <!-- col-sm-4 col-sm-6 div starts here -->
                <div class="product">
                    <!-- product div starts here -->
                    <a href="details.php">
                        <img class="img-responsive"
                            src="admin_area/product_images/Allen Solly Men's Slim fit Casual Shirt/1.jpeg" alt="">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Allen Solly Men's Slim fit Casual Shirt</a></h3>
                        <p class="price">INR 539</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa--shopping-cart"></i> Add To
                                Cart</a>
                        </p>
                    </div>
                </div><!-- product div starts here -->
            </div><!-- col-sm-4 col-sm-6 div ends here -->




            <div class="col-sm-4 col-sm-6 single">
                <!-- col-sm-4 col-sm-6 div starts here -->
                <div class="product">
                    <!-- product div starts here -->
                    <a href="details.php">
                        <img class="img-responsive"
                            src="admin_area/product_images/Allen Solly Men's Slim fit Casual Shirt/1.jpeg" alt="">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Allen Solly Men's Slim fit Casual Shirt</a></h3>
                        <p class="price">INR 539</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa--shopping-cart"></i> Add To
                                Cart</a>
                        </p>
                    </div>
                </div><!-- product div starts here -->
            </div><!-- col-sm-4 col-sm-6 div ends here -->




            <div class="col-sm-4 col-sm-6 single">
                <!-- col-sm-4 col-sm-6 div starts here -->
                <div class="product">
                    <!-- product div starts here -->
                    <a href="details.php">
                        <img class="img-responsive"
                            src="admin_area/product_images/Allen Solly Men's Slim fit Casual Shirt/1.jpeg" alt="">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Allen Solly Men's Slim fit Casual Shirt</a></h3>
                        <p class="price">INR 539</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa--shopping-cart"></i> Add To
                                Cart</a>
                        </p>
                    </div>
                </div><!-- product div starts here -->
            </div><!-- col-sm-4 col-sm-6 div ends here -->




        </div><!-- row div Ends here -->
    </div><!-- container div for the main content Ends here -->


    <!-- Footer Start -->
    <?php
  include("includes/footer.php");
  ?>
    <!-- Footer Start -->


</body>

</html>