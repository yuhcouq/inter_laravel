<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        #header1{
            height: 47px;
            background-color:cornflowerblue;
            padding: 10px 0px;
        }
        #header2{
            height: 120px;
            padding: 10px 0px;
            background-color: #04131d;

        }
        #header2 .container .row{
            height: 120px;
            display:flex;
            align-items:center;
        }
        #header2 img{
            width: 60%;
        }
        .menu1{
            float: right;
        }
        nav.menu1 ul{
            text-align: right;
        }
        nav.menu1 ul li{
            display: inline;
            margin: auto 15px;
            color: white;
        }
        nav.menu1 ul li a{
            color: white;
        }
        span{
            display: inline-block;
        }
        .font-mobility{
            font-size: 44px;
            color: rgb(19, 172, 233);
            font-style: normal;
        }

        .intro {
            margin: 55px 10px;
        }
        .intro-right{
            padding-left: 30px;
            text-align: left;
            border-left: 7px solid rgb(19, 172, 233);
        }
        .font-mobility2{
            font-size: 37px;
            color: black;
            font-style: normal;
        }
        .product-image{
            display:flex;
            align-items:center;
            background-color: darkgrey;
            height: 400px;
        }
        .product-image img{
            width: 100%;
            height: 100%;
        }
        .image-center{
            margin: 0px auto;
            width: 50%;
            height: 50%;
        }
        .product{
            margin: 50px 10px;
        }
        .product-book{
            visibility:hidden;
            margin-top: 30px;
        }
        .footer-top{
            background-color: rgb(1, 25, 32);
            color: white;
            height: 300px;
        }
        ul{
            list-style: outside none none;
        }
        .footer-bottom{
            background-color: rgb(4, 77, 77);
        }
        .ft{
            text-align: center;
            color: silver;
        }
    </style>
</head>
<body>
<header>
    <div id="header1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <nav class="menu1">
                        <ul>
                            <li>
                                <a href=""><b>1(866)-4-WHEELS</b></a>
                            </li>
                            <li>
                                <a href=""><b> SIGN IN</b></a>
                            </li>
                            <li>
                                <a href=""><b> REGISTER</b></a>
                            </li>
                            <li>
                                <a href=""><b><img src="file:///C:/Users/Admin/Documents/img/bagttn.png" alt=""></b></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div id="header2">
        <div class="container">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <a href="">
                        <img src="https://www.mobilityrentals.com/common/img/Logo.png" alt="">
                    </a>
                </div>

                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                    <nav class="menu1">
                        <ul>
                            <li>
                                <a href="">OUR RENTALS
                                </a>
                            </li>
                            <li>
                                <a href="">YOUR RESERVATIONS
                                </a>
                            </li>
                            <li>
                                <a href="">OUR STORY
                                </a>
                            </li>
                            <li>
                                <a href="">FAQ
                                </a>
                            </li>
                            <li>
                                <a href="">BLOG
                                </a>
                            </li>
                            <li>
                                <a href="">EN</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<section>
    <div class="container ">
        <div class="row intro">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <span class="font-mobility"><b>Mobility Scooters</b></span>
                <span class="font-mobility"><b> Wheelchairs</b></span>
                <span class="font-mobility"><b> Power Wheelchairs</b></span>
                <span class="font-mobility"><b> Knee Rollers</b></span>
                <span>We offer rental services for several types of mobility equipment such as mobility scooters, wheelchairs, power wheelchairs, knee rollers and more! Our goal is to be the fastest and easiest way to rent mobility scooters and wheelchairs in NYC.</span>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 intro-right">
                <span class="font-mobility2"><b>If you have any questions about our scooter or wheelchairs rentals call us at </b><span style="color: rgb(19, 172, 233)"> 1(866)4-WHEELS.</span></span>
            </div>

        </div>

        <div class="row product">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="product-image">
                    <div class="image-center">
                        <img src="https://www.mobilityrentals.com/upload/thumbnail/anh-1-1-1.png" alt="">
                    </div>
                </div>
                <div class="product-body">
                    <div>
                        <span></span>
                    </div>
                    <div>
                        <span>★★★★★</span>
                        <span>5</span>
                        <span>/5</span>
                    </div>
                    <div>
                            <span class="">Pricing:
                                <span class="">
                                    from <span class="">$25</span>  per day
                                </span>
                            </span>
                    </div>
                    <div>
                        <div>
                            <img src="https://www.mobilityrentals.com/common/img2/kg%202.svg" alt="">
                            <span>Weight limit: 300 Lbs.</span>
                        </div>
                        <div>
                            <img src="https://www.mobilityrentals.com/common/img2/van%202.svg" alt="">
                            <span> Same day delivery</span>
                        </div>
                    </div>
                </div>
                <div class="product-book">

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <button class="btn btn-block btn-primary" style="height: 55px;">BOOK NOW</button>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="width: 171px">
                            <button class="btn btn-secondary"><a class="btn btn-block" href="">PRODUCT DETAILS</a></button>
                        </div>

                    </div>

                </div>

            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="product-image">
                    <div class="image-center">
                        <img src="https://www.mobilityrentals.com/upload/thumbnail/anh-1-1-1.png" alt="">
                    </div>
                </div>
                <div class="product-body">
                    <div>
                        <span></span>
                    </div>
                    <div>
                        <span>★★★★★</span>
                        <span>5</span>
                        <span>/5</span>
                    </div>
                    <div>
                            <span class="">Pricing:
                                <span class="">
                                    from <span class="">$25</span>  per day
                                </span>
                            </span>
                    </div>
                    <div>
                        <div>
                            <img src="https://www.mobilityrentals.com/common/img2/kg%202.svg" alt="">
                            <span>Weight limit: 300 Lbs.</span>
                        </div>
                        <div>
                            <img src="https://www.mobilityrentals.com/common/img2/van%202.svg" alt="">
                            <span> Same day delivery</span>
                        </div>
                    </div>
                </div>
                <div class="product-book">

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <button class="btn btn-block btn-primary" style="height: 55px;">BOOK NOW</button>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="width: 171px">
                            <button class="btn btn-secondary"><a class="btn btn-block" href="">PRODUCT DETAILS</a></button>
                        </div>

                    </div>

                </div>

            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="product-image">
                    <div class="image-center">
                        <img src="https://www.mobilityrentals.com/upload/thumbnail/anh-1-1-1.png" alt="">
                    </div>
                </div>
                <div class="product-body">
                    <div>
                        <span></span>
                    </div>
                    <div>
                        <span>★★★★★</span>
                        <span>5</span>
                        <span>/5</span>
                    </div>
                    <div>
                            <span class="">Pricing:
                                <span class="">
                                    from <span class="">$25</span>  per day
                                </span>
                            </span>
                    </div>
                    <div>
                        <div>
                            <img src="https://www.mobilityrentals.com/common/img2/kg%202.svg" alt="">
                            <span>Weight limit: 300 Lbs.</span>
                        </div>
                        <div>
                            <img src="https://www.mobilityrentals.com/common/img2/van%202.svg" alt="">
                            <span> Same day delivery</span>
                        </div>
                    </div>
                </div>
                <div class="product-book">

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <button class="btn btn-block btn-primary" style="height: 55px;">BOOK NOW</button>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="width: 171px">
                            <button class="btn btn-secondary"><a class="btn btn-block" href="">PRODUCT DETAILS</a></button>
                        </div>

                    </div>

                </div>

            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="product-image">
                    <div class="image-center">
                        <img src="https://www.mobilityrentals.com/upload/thumbnail/anh-1-1-1.png" alt="">
                    </div>
                </div>
                <div class="product-body">
                    <div>
                        <span></span>
                    </div>
                    <div>
                        <span>★★★★★</span>
                        <span>5</span>
                        <span>/5</span>
                    </div>
                    <div>
                            <span class="">Pricing:
                                <span class="">
                                    from <span class="">$25</span>  per day
                                </span>
                            </span>
                    </div>
                    <div>
                        <div>
                            <img src="https://www.mobilityrentals.com/common/img2/kg%202.svg" alt="">
                            <span>Weight limit: 300 Lbs.</span>
                        </div>
                        <div>
                            <img src="https://www.mobilityrentals.com/common/img2/van%202.svg" alt="">
                            <span> Same day delivery</span>
                        </div>
                    </div>
                </div>
                <div class="product-book">

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <button class="btn btn-block btn-primary" style="height: 55px;">BOOK NOW</button>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="width: 171px">
                            <button class="btn btn-secondary"><a class="btn btn-block" href="">PRODUCT DETAILS</a></button>
                        </div>

                    </div>

                </div>

            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="product-image">
                    <div class="image-center">
                        <img src="https://www.mobilityrentals.com/upload/thumbnail/anh-1-1-1.png" alt="">
                    </div>
                </div>
                <div class="product-body">
                    <div>
                        <span></span>
                    </div>
                    <div>
                        <span>★★★★★</span>
                        <span>5</span>
                        <span>/5</span>
                    </div>
                    <div>
                            <span class="">Pricing:
                                <span class="">
                                    from <span class="">$25</span>  per day
                                </span>
                            </span>
                    </div>
                    <div>
                        <div>
                            <img src="https://www.mobilityrentals.com/common/img2/kg%202.svg" alt="">
                            <span>Weight limit: 300 Lbs.</span>
                        </div>
                        <div>
                            <img src="https://www.mobilityrentals.com/common/img2/van%202.svg" alt="">
                            <span> Same day delivery</span>
                        </div>
                    </div>
                </div>
                <div class="product-book">

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <button class="btn btn-block btn-primary" style="height: 55px;">BOOK NOW</button>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="width: 171px">
                            <button class="btn btn-secondary"><a class="btn btn-block" href="">PRODUCT DETAILS</a></button>
                        </div>

                    </div>

                </div>

            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="product-image">
                    <div class="image-center">
                        <img src="https://www.mobilityrentals.com/upload/thumbnail/anh-1-1-1.png" alt="">
                    </div>
                </div>
                <div class="product-body">
                    <div>
                        <span></span>
                    </div>
                    <div>
                        <span>★★★★★</span>
                        <span>5</span>
                        <span>/5</span>
                    </div>
                    <div>
                            <span class="">Pricing:
                                <span class="">
                                    from <span class="">$25</span>  per day
                                </span>
                            </span>
                    </div>
                    <div>
                        <div>
                            <img src="https://www.mobilityrentals.com/common/img2/kg%202.svg" alt="">
                            <span>Weight limit: 300 Lbs.</span>
                        </div>
                        <div>
                            <img src="https://www.mobilityrentals.com/common/img2/van%202.svg" alt="">
                            <span> Same day delivery</span>
                        </div>
                    </div>
                </div>
                <div class="product-book">

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <button class="btn btn-block btn-primary" style="height: 55px;">BOOK NOW</button>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="width: 171px">
                            <button class="btn btn-secondary"><a class="btn btn-block" href="">PRODUCT DETAILS</a></button>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</section>
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a href=""><h3 style="color: white;">Our Mission</h3></a>
                    <p>Our mission is to make destinations all over the world more accessible to people with mobility needs so that they too can enjoy and explore the world around them.</p>
                </div>

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a href=""><h3 style="color: white;">Our Clients Trust Us</h3></a>
                    <span>Total:<span>98 </span>Review</span>

                    <div id="carousel-id" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-id" data-slide-to="2" class=""></li>
                            <li data-target="#carousel-id" data-slide-to="3" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div>
                                        <span>
                                            ★★★★★
                                            <span>4.8</span>
                                            <span>/</span>
                                            <span>5</span>
                                        </span>
                                </div>
                                <div>
                                    <p>Called in the morning, I injured my foot while in NYC, and still wanted to do some exploring. Scooter was delivered within 2 hours of my call. Price was amazingly reasonable. SAVED OUR TRIP
                                        <br>
                                        From:
                                        <a href="https://www.mobilityrentals.com/">MobilityRentals.com.</a>
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div>
                                        <span>
                                            ★★★★★
                                            <span>4.8</span>
                                            <span>/</span>
                                            <span>5</span>
                                        </span>
                                </div>
                                <div>
                                    <p>Visited NYC for the holidays with wife who needs a scooter. Process to rent was painless. Scooter was in great condition. These guys went the extra mile for us. Highly recommended!!
                                        <br>From: <a href="https://www.mobilityrentals.com/">MobilityRentals.com.</a></p>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <div>
                                        <span>
                                            ★★★★★
                                            <span>4.8</span>
                                            <span>/</span>
                                            <span>5</span>
                                        </span>
                                </div>
                                <div>
                                    <p>By far the easiest way to rent a mobility scooter in NYC.
                                        <br>From: <a href="https://www.mobilityrentals.com/">MobilityRentals.com.</a></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div>
                                        <span>
                                            ★★★★★
                                            <span>4.8</span>
                                            <span>/</span>
                                            <span>5</span>
                                        </span>
                                </div>
                                <div>
                                    <p>Reserved it late and still got it on time! Thank you!
                                        <br>From: <a href="https://www.mobilityrentals.com/">MobilityRentals.com.</a></p>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                        <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>


                </div>

                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <a href=""><h3 style="color: white;">More</h3></a>
                    <nav>
                        <ul>
                            <li style="margin-left: 0px;"><a href=""  style="color: white;">Privacy</a></li>
                            <li><a href=""  style="color: white;">Cookies</a></li>
                            <li><a href=""  style="color: white;">Term of use</a></li>
                        </ul>
                    </nav>

                </div>

                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <a href="" style="color: white;"><h3>Contact</h3></a>
                    <ul>
                        <li>
                            <a href="" style="color: white;">
                                <i class="fa fa-phone" style="width: 22px;" aria-hidden="true"></i> 1 (866)-4-WHEELS
                            </a>
                            <a href="" style="color: white;">
                                <i class="fa fa-home" style="width: 22px;" aria-hidden="true"></i>99 Wall Street Suite 1408 New York, NY 10005
                            </a>
                        </li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="ft">copyright © Mobility Rentals Inc 2019.All rights reserved
                        &nbsp; </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
