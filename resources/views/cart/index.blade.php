<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
    <link href="{{ url('FrontEnd/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/FrontEnd/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('/FrontEnd/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ url('FrontEnd/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ url('FrontEnd/css/animate.css') }}" rel="stylesheet">
    <link href="{{ url('FrontEnd/css/main.css') }}" rel="stylesheet">
    <link href="{{ url('FrontEnd/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ url('/FrontEnd/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ url('/FrontEnd/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ url('FrontEnd/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ url('/FrontEnd/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed"
        href="{{ url('FrontEnd/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->

<body>
    <header id="header"><!--header-->

        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-md-4 clearfix">
                        <div class="logo pull-left">
                            <a href="index.html"><img src="{{ url('/FrontEnd/images/home/logo.png') }}"
                                    alt="" /></a>
                        </div>

                    </div>
                    <div class="col-md-8 clearfix">
                        <div class="shop-menu clearfix pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Item</td>
                            <td class="description"></td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Total</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="{{ url('FrontEnd/images/cart/one.png') }}"
                                        alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="#">Colorblock Scuba</a></h4>
                                <p>Web ID: 1089772</p>
                            </td>
                            <td class="cart_price">
                                <p>$59</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href="#"> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="1"
                                        autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href="#"> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">$59</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href="#"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td class="cart_product">
                                <a href="#"><img src="{{ url('FrontEnd/images/cart/two.png') }}"
                                        alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="#">Colorblock Scuba</a></h4>
                                <p>Web ID: 1089772</p>
                            </td>
                            <td class="cart_price">
                                <p>$59</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href="#"> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="1"
                                        autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href="#"> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">$59</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href="#"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="cart_product">
                                <a href="#"><img src="{{ url('FrontEnd/images/cart/three.png') }}"
                                        alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="#">Colorblock Scuba</a></h4>
                                <p>Web ID: 1089772</p>
                            </td>
                            <td class="cart_price">
                                <p>$59</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href="#"> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="1"
                                        autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href="#"> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">$59</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href="#"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>What would you like to do next?</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your
                    delivery cost.</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="chose_area">
                        <ul class="user_option">
                            <li>
                                <input type="checkbox">
                                <label>Use Coupon Code</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label>Use Gift Voucher</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label>Estimate Shipping & Taxes</label>
                            </li>
                        </ul>
                        <ul class="user_info">
                            <li class="single_field">
                                <label>Country:</label>
                                <select>
                                    <option>United States</option>
                                    <option>Bangladesh</option>
                                    <option>UK</option>
                                    <option>India</option>
                                    <option>Pakistan</option>
                                    <option>Ucrane</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>

                            </li>
                            <li class="single_field">
                                <label>Region / State:</label>
                                <select>
                                    <option>Select</option>
                                    <option>Dhaka</option>
                                    <option>London</option>
                                    <option>Dillih</option>
                                    <option>Lahore</option>
                                    <option>Alaska</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>

                            </li>
                            <li class="single_field zip-field">
                                <label>Zip Code:</label>
                                <input type="text">
                            </li>
                        </ul>
                        <a class="btn btn-default update" href="">Get Quotes</a>
                        <a class="btn btn-default check_out" href="">Continue</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li>Cart Sub Total <span>$59</span></li>
                            <li>Eco Tax <span>$2</span></li>
                            <li>Shipping Cost <span>Free</span></li>
                            <li>Total <span>$61</span></li>
                        </ul>
                        <a class="btn btn-default update" href="">Update</a>
                        <a class="btn btn-default check_out" href="">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#do_action-->

    <footer id="footer"><!--Footer-->

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank"
                                href="{{ url('http://www.themeum.com') }}">Themeum</a></span></p>
                </div>
            </div>
        </div>

    </footer><!--/Footer-->

    <script src="{{ url('FrontEnd/js/jquery.js') }}"></script>
    <script src="{{ url('FrontEnd/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('FrontEnd/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ url('FrontEnd/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ url('FrontEnd/js/main.js') }}"></script>
</body>

</html>
