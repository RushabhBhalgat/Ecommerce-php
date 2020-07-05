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
                        <li class="">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
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
    <!--      NEW SECTION  =========>>>>>>>>>=================================>>>>>>>>>>=====     -->
    <!--***********************************-->


    <div id="content">
        <!-- Braedcroum section -->
        <div class="container">
            <!-- container div start -->
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Shop</li>
                </ul>
            </div>
            <div class="col-md-3">
                <?php include("includes/sidebar.php") ?>
            </div>


            <div class="col-md-9">
                <!--col-md-9 div start-->
                <div class="row" id="productmain">
                    <!--row div start-->
                    <div class="col-sm-6">
                        <div id="mainimage">
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
                                        <img width="4000" height="2186"
                                            src="admin_area\product_images\Apple iphone 11 pro\1.jpeg" alt="">
                                    </div>

                                    <div class="item">
                                        <img width="4000" height="2186"
                                            src="admin_area\product_images\Apple iphone 11 pro\2.jpeg" alt="">
                                    </div>

                                    <div class="item active">
                                        <img width="4000" height="2186"
                                            src="admin_area\product_images\Apple iphone 11 pro\3.jpeg" alt="">
                                    </div>

                                    <div class="item">
                                        <img width="4000" height="2186"
                                            src="admin_area\product_images\Apple iphone 11 pro\4.jpeg" alt="">
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
                    </div>
                </div>
                <!--row div end-->
            </div>
            <!--col-md-9 div end-->

        </div><!-- container div end -->
    </div><!-- content section end-->










    <!--***********************************-->
    <!--      NEW SECTION  =========>>>>>>>>>=================================>>>>>>>>>>=====     -->
    <!--***********************************-->




    <!-- Footer Start -->
    <?php
  include("includes/footer.php");
  ?>
    <!-- Footer Ends -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>