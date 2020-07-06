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
                        <li class="">
                            <a href="shop.php">Shop</a>
                        </li>
                        <li class="">
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li class="active">
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
                    <li>Your Shopping cart</li>
                </ul>
            </div>
            <div class="col-md-9" id="cart">
                <!-- col-md-9 div start -->
                <div class="box">
                    <!-- Box div start -->
                    <form action="cart.php" method="post" class="" enctype="multipart-form-data">
                        <!-- Form Tag start -->
                        <h1>Shopping Cart</h1>
                        <p class="text-muted">
                            You Currently Have 4 Items In Your Cart
                        </p>
                        <div class="table-responsive">
                            <!-- Table responsive div start -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">Products</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Size</th>
                                        <th colspan="1">Delete</th>
                                        <th colspan="1">Sub Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="admin_area/product_images/Apple iphone 11 pro/1.jpeg" alt=""></td>
                                        <td>Apple iPhone 11 max Pro by Apple Company</td>
                                        <td>2</td>
                                        <td>INR 50000</td>
                                        <td>Large</td>
                                        <td><input type="checkbox" name="remove[]" id=""></td>
                                        <td>INR 100000</td>
                                    </tr>

                                    <tr>
                                        <td><img src="admin_area/product_images/Apple iphone 11 pro/1.jpeg" alt=""></td>
                                        <td>Apple iPhone 11 max Pro by Apple Company</td>
                                        <td>2</td>
                                        <td>INR 50000</td>
                                        <td>Large</td>
                                        <td><input type="checkbox" name="remove[]" id=""></td>
                                        <td>INR 100000</td>
                                    </tr>

                                    <tr>
                                        <td><img src="admin_area/product_images/Apple iphone 11 pro/1.jpeg" alt=""></td>
                                        <td>Apple iPhone 11 max Pro by Apple Company</td>
                                        <td>2</td>
                                        <td>INR 50000</td>
                                        <td>Large</td>
                                        <td><input type="checkbox" name="remove[]" id=""></td>
                                        <td>INR 100000</td>
                                    </tr>

                                    <tr>
                                        <td><img src="admin_area/product_images/Apple iphone 11 pro/1.jpeg" alt=""></td>
                                        <td>Apple iPhone 11 max Pro by Apple Company</td>
                                        <td>2</td>
                                        <td>INR 50000</td>
                                        <td>Large</td>
                                        <td><input type="checkbox" name="remove[]" id=""></td>
                                        <td>INR 100000</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="6">Total</th>
                                        <th colspan="2">INR 120257</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div><!-- Table responsive div start -->
                        <div class="box-footer">
                            <div class="pull-left">
                                <!-- pull-left div start -->
                                <a href="index.php" class="btn btn-default">
                                    <i class="fa fa-chevron-left"></i>Continue Shopping
                                </a>
                            </div><!-- pull-left div End -->
                            <div class="pull-right">
                                <!-- pull-right div start -->
                                <button class="btn btn-default" type="submit" name="update" value="Update cart">
                                    <i class="fa fa-refresh"></i>Update
                                </button>
                                <a href="checkout.php" class="btn btn-primary">
                                    Proceed To Checkout <i class="fa fa-credit-card"></i>
                                </a>
                            </div><!-- pull-right div End -->
                        </div>
                    </form><!-- Form Tag End -->
                </div><!-- Box div End -->

            </div><!-- col-md-9 div End -->

            <div class="col-md-3">
                <!-- col-md-3 div End -->
                <div id="order_summary" class="box">
                    <div class="box-header">
                        <h3>Order Summary</h3>
                    </div>
                    <p class="text-muted">Shipping And Additional Taxes Are Calculated based on the Products you buy</p>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        Order Subtotal
                                    </td>
                                    <th>INR 2184045</th>
                                </tr>
                                <tr>
                                    <td>
                                        Shipping And Handling Charge
                                    </td>
                                    <td>
                                        INR 0
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        TAX
                                    </td>
                                    <td>
                                        INR 0
                                    </td>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <th>INR 2025432</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>




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