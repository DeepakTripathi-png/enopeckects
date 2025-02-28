<!DOCTYPE html>
<html lang="en" class="wide smoothscroll wow-animation">

<head>
    <!-- Site Title -->
    <title>Home</title>
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!-- Stylesheets -->

    <link rel="icon" type="image/x-icon" href="images/fevicon.ico">
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">


    <style>
        .wrapper {
            margin-left: 261px;
        }

        @media only screen and (max-width: 768px) {
            .wrapper {
                margin-left: 26px;
                margin-right: -24px;
            }
        }

        .widget-title {
            font-family: 'Raleway', sans-serif;
        }

        h5.widget-title.mb-4 {
            font-size: 20px;
        }

        .custom-card {
            display: flex;
            flex-direction: column;
            border: 1px solid #ccc;
            overflow: hidden;
            height: auto;
            max-width: 100%;
            border-radius: 34px;
            line-height: 48.6px;
            font-size: 32px;
            margin-top: 272px;
        }

        .custom-card .card-body {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .custom-card .card-title {
            font-size: 25px;
            color: white;
            margin: 0;
            padding: 52px;
            /* justify-content: center; */
            text-align: left;
            font-family: 'Raleway', sans-serif;
        }

        .custom-card .card-text {
            color: white;
            margin: 0;
        }

        /* Media query for mobile devices */
        @media only screen and (max-width: 767px) {
            .container.wrapper .col-sm-3 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .container.wrapper .col-sm-3 .card {
                width: 100%;
            }

            @media only screen and (max-width: 1080px) {

                .image-wrap,
                img {
                    max-width: 99%;
                }
            }

            .container.wrapper .col-sm-3 .card img {
                width: 50%;
                margin-top: 15px;
            }

            .container.wrapper .col-sm-3 .card .card-body {
                padding: 15px;
            }
        }


        @media (max-width: 576px) {
            .custom-card {
                margin-top: 0;
            }
        }

        /*.custom-card .card-body {*/
        /*    flex: 1;*/
        /*    display: flex;*/
        /*    flex-direction: column;*/
        /*    justify-content: center;*/
        /*}*/

        /*.custom-card .card-title {*/
        /*    font-size: 30px;*/
        /*    color: white;*/
        /*    margin: 0;*/
        /* justify-content: center; */
        /*    text-align: left;*/
        /*    font-family: 'Raleway', sans-serif;*/
        /*}*/

        /*.custom-card .card-text {*/
        /*    color: white;*/
        /*    margin: 0;*/
        /*}*/
        /*    .custom-card {*/
        /*  display: flex;*/
        /*  flex-direction: column;*/
        /*  border: 1px solid #ccc;*/
        /*  overflow: hidden;*/
        /*  height: auto;*/
        /*  max-width: 100%;*/
        /*  border-radius: 34px;*/
        /*  line-height: 48.6px;*/
        /*  font-size: 32px;*/
        /*  margin-top: 272px;*/
        /*}*/



        @media only screen and (min-width: 1080px) {
            .col-12.col-md-4.col-lg-4.col-xl-2 {
                flex: 0 0 100%;
                max-width: 100%;
                margin-bottom: 20px;
                font-size: 10px;
            }
        }

        @media only screen and (max-width: 1080px) {

            .custom-text,
            h3 {
                font-size: 34px;
                margin-top: -523px;
                font-family: 'Raleway', sans-serif;
            }
        }

        @media only screen and (max-width: 1080px) {

            .image-wrap,
            img {
                max-width: 99%;
            }
        }

        /* Define a CSS class to hide the image */
        /*.hide-on-mobile {*/
        /*    display: none; */
        /*}*/

        @media only screen and (max-width: 768px) {
            .custom-card .card-title {
                font-size: 13px;
                color: white;
                margin: 0;
                /* justify-content: center; */
                text-align: left;
                font-family: 'Raleway', sans-serif;
                line-height: 24px;
                height: 200px;
            }
        }

        @media only screen and (max-width: 768px) {
            .custom-card .card-title {
                padding: 9px;
            }

        }

        @media only screen and (max-width: 768px) {
            .hide-on-mobile {
                display: none;
            }
        }

        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: black;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        @media (max-width: 768px) {
            .col-sm-10 .dot {
                height: 10px;
                width: 10px;
                margin: 0 2px;
            }
        }

        #dot {
            margin: 0 auto;
            text-align: center;
        }

        .dot {
            display: inline-block;
            border-radius: 50%;
            background: #d3d3d3;
            padding: 8px;
            margin: 10px 5px;
        }

        .active {
            /*color: black; */
            background-color: white;
        }


        .dot.active {
            background-color: black;
        }

        .image {
            display: none;
        }

        .image.active {
            display: block;
        }

        @media (max-width: 768px) {
            .dot {
                height: 10px;
                width: 10px;
                margin: 0 2px;
            }
        }

        @media only screen and (max-width: 768px) {
            .card {
                height: 250px;
            }
        }

        /*footer side by side */
        @media (max-width: 767px) {
            .container.overflow-hidden .row.justify-content-xl-between {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .container.overflow-hidden .row.justify-content-xl-between>div {
                flex: 0 0 calc(50% - 10px);
                margin-bottom: 10px;
            }
        }


        /* Default background color */
        /*.rd-navbar {*/
        /*    background-color: black;*/
        /*}*/

        /* Media query for mobile view */
        @media (max-width: 768px) {
            .rd-navbar {
                background-color: transparent;
                /* Change to whatever color you want for mobile */
            }
        }
    </style>
</head>

<body>
    <!-- The Main Wrapper -->
    <div class="page">
        <!--For older internet explorer-->
        <div class="old-ie"
            style='background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;'>
            <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
                <img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
                    alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
            </a>
        </div>
        <!--END block for older internet explorer-->

        <!-- HEADER Start -->
        <header class="page-header">

            <div class="rd-navbar-wrap">

                <nav class="rd-navbar" data-rd-navbar-lg="rd-navbar-static">

                    <div class="rd-navbar-inner">

                        <!-- RD Navbar Panel -->
                        <div class="rd-navbar-panel">

                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar"><span></span></button>
                            <a href="index.html" class="rd-navbar-brand">
                                <span class="brand-logo">
                                    <img src="{{ asset('front/images/GPS Packseals Logo.png') }}" alt="Logo">

                                </span>
                            </a>
                        </div>
                        <!-- END RD Navbar Panel -->
                        <div class="rd-navbar-nav-wrap">
                            <!-- RD Navbar Nav -->
                            <ul class="rd-navbar-nav">
                                <li class="active"><a href="index.html">Home</a></li>
                                <li>
                                    <a href="about.html">About Us</a>
                                </li>
                                <li>
                                    <a href="solution.html">Solutions</a>
                                    <!--<ul class="rd-navbar-dropdown">-->
                                    <!--<li>-->
                                    <!--  <a href="#">Conatiner Monitering Tracking</a>-->
                                    <!--</li>-->
                                    <!--<li>-->
                                    <!--  <a href="#">Software Solutions</a>-->
                                    <!--</li>-->
                                    <!--</ul>-->
                                    <!-- END RD Navbar Dropdown -->
                                </li>

                                <li>
                                    <a href="product.html">Products</a>
                                </li>

                                <li>
                                    <a href="client.html">Our Client</a>
                                </li>

                                <li>
                                    <a href="platform.html">Platform</a>
                                </li>
                                <!-- <li>
                <a href="index-3.html">Gallery</a>
              </li> -->
                                <li>
                                    <a href="contacts_us.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <a href="https://gpspackseal.in/admin" class="log">login</a>
                    </div>
                </nav>
            </div>
            <!-- END RD Navbar -->
        </header>
        <!--========================================================
                            CONTENT
  =========================================================-->
        <main class="page-content">


            <section class="well well-1">
                <div class="container-fluid text-sm-left">
                    <div class="row">
                        <div class="col-sm-1">
                            <div class="croplocation">
                                <img class="hide-on-mobile" src="{{ asset('front/images/crop_location_homepage.png') }}" alt=""
                                    width="162.13px" height="229">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-5 custom-text">
                            <div class="col-sm-6 col-md-6">
                                <img class="hide-on-mobile" src="{{ asset('front/images/location_homepage.png') }}" alt="location Logo"
                                    width="70px" height="84px">
                                <h3>Stay on Route With Real-Time<br>
                                    Container Tracking.<br>
                                    Your Cargo, Our Priority.</h3>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="image-wrap image-wrap-left image-wrap-1">
                                <img src="{{ asset('front/images/device_page1.png')}}" width="798" height="609" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End First Page -->

            <!-- Start About Section  -->

            <div class="container-fluid">
                <div class="row aboutus">
                    <div class="col-sm-12 col-md-1"></div>
                    <div class="col-sm-12 col-md-11">
                        <h4 style="color: black;">
                            About Us<span
                                style="display: inline-block; width:70%; border-bottom: 2px solid black; margin-top:45px; "></span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 11.5C11.337 11.5 10.7011 11.2366 10.2322 10.7678C9.76339 10.2989 9.5 9.66304 9.5 9C9.5 8.33696 9.76339 7.70107 10.2322 7.23223C10.7011 6.76339 11.337 6.5 12 6.5C12.663 6.5 13.2989 6.76339 13.7678 7.23223C14.2366 7.70107 14.5 8.33696 14.5 9C14.5 9.3283 14.4353 9.65339 14.3097 9.95671C14.1841 10.26 13.9999 10.5356 13.7678 10.7678C13.5356 10.9999 13.26 11.1841 12.9567 11.3097C12.6534 11.4353 12.3283 11.5 12 11.5ZM12 2C10.1435 2 8.36301 2.7375 7.05025 4.05025C5.7375 5.36301 5 7.14348 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 7.14348 18.2625 5.36301 16.9497 4.05025C15.637 2.7375 13.8565 2 12 2Z"
                                    fill="black" />
                            </svg>
                        </h4><br>
                    </div>
                    <div class="col-sm-12 col-md-1"></div>
                    <div class="col-sm-12 col-md-10">
                        <p>Welcome to GPS Pack Seals Industries<strong>-Your Trusted Partner for Secure Transit
                                Solutions!!</strong>
                            Introducing our innovative GPS PackSeals, the ultimate solution for secure transit tracking.
                            Say goodbye to worries about pilferage and tampering, as our GPS-enabled seals provide
                            <strong>real-time monitoring and location tracking for your valuable cargo.</strong><br>
                            With GPS Pack Seals Industries, you can trust that <strong>your shipments are in safe
                                hands.</strong> Our tracking devices are equipped with <strong>cutting-edge
                                technology</strong> and are <strong>designed to ensure the highest level of
                                security</strong> and reliability.<br>
                            Backed by a dedicated team and a commitment to excellence, we guarantee timely delivery and
                            unparalleled customer satisfaction. Join us in revolutionizing transit security with GPS
                            PackSeals!
                        </p>
                    </div>
                </div>
            </div>


            <!-- Start Solutions Section -->
            <div class="container-fluid">
                <div class="row aboutus1">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-11">
                        <h4 style="color: black;">
                            Solutions<span
                                style="display: inline-block; width:70%; border-bottom: 2px solid black; margin-top:44px; "></span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 11.5C11.337 11.5 10.7011 11.2366 10.2322 10.7678C9.76339 10.2989 9.5 9.66304 9.5 9C9.5 8.33696 9.76339 7.70107 10.2322 7.23223C10.7011 6.76339 11.337 6.5 12 6.5C12.663 6.5 13.2989 6.76339 13.7678 7.23223C14.2366 7.70107 14.5 8.33696 14.5 9C14.5 9.3283 14.4353 9.65339 14.3097 9.95671C14.1841 10.26 13.9999 10.5356 13.7678 10.7678C13.5356 10.9999 13.26 11.1841 12.9567 11.3097C12.6534 11.4353 12.3283 11.5 12 11.5ZM12 2C10.1435 2 8.36301 2.7375 7.05025 4.05025C5.7375 5.36301 5 7.14348 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 7.14348 18.2625 5.36301 16.9497 4.05025C15.637 2.7375 13.8565 2 12 2Z"
                                    fill="black" />
                            </svg>
                        </h4>
                    </div>
                    <div class="row">
                        <!--First Section -->
                        <div class="col-md-6">
                            <div class="solution">
                                <img class="hide-on-mobile" src="{{ asset('front/images/solution.png')}}" alt="solution Image">
                            </div>
                        </div>

                        <!--Second Section -->
                        <div class="col-md-6">
                            <div class="solution_card">
                                <div class="card custom-card">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">GPS Pack Seals Industries offers a comprehensive
                                            solution for monitoring and tracking container transport.Our advanced
                                            technology ensures real-time updates across sea,rail, and road
                                            transportation,domestically and internationally, for both dry cargo and
                                            reefer containers.<br> Simplify your logistics with GPS Pack Seals
                                            Industries.</h5>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Solutions Section -->

                    <!-- Start product Details -->
                    <div class="container-fluid">
                        <div class="row aboutus">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-11">
                                <h4 style="color: black;">
                                    Product<span
                                        style="display: inline-block; width:70%; border-bottom: 2px solid black; margin-top:44px; "></span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 11.5C11.337 11.5 10.7011 11.2366 10.2322 10.7678C9.76339 10.2989 9.5 9.66304 9.5 9C9.5 8.33696 9.76339 7.70107 10.2322 7.23223C10.7011 6.76339 11.337 6.5 12 6.5C12.663 6.5 13.2989 6.76339 13.7678 7.23223C14.2366 7.70107 14.5 8.33696 14.5 9C14.5 9.3283 14.4353 9.65339 14.3097 9.95671C14.1841 10.26 13.9999 10.5356 13.7678 10.7678C13.5356 10.9999 13.26 11.1841 12.9567 11.3097C12.6534 11.4353 12.3283 11.5 12 11.5ZM12 2C10.1435 2 8.36301 2.7375 7.05025 4.05025C5.7375 5.36301 5 7.14348 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 7.14348 18.2625 5.36301 16.9497 4.05025C15.637 2.7375 13.8565 2 12 2Z"
                                            fill="black" />
                                    </svg>
                                </h4><br>
                            </div>
                        </div>

                        <!--<div class="col-sm-2"></div>-->
                        <div class="col-sm-12">
                            <div class="row">
                                <div id="slider">
                                    <div class="slides">
                                        <img src="{{ asset('front/images/product_details_homepage.png')}}" alt="">
                                    </div>

                                    <div class="slides">
                                        <img src="{{ asset('front/images/product_details_homepage2.png')}}" alt="">
                                    </div>
                                    <div class="slides">
                                        <img src="{{ asset('front/images/product_details_homepage3.png')}}" alt="">
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div id="dot">
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br><br>
                    <!-- End Product Details  -->

                    <!--  Key Feature Start -->
                    <div class="container-fluid">
                        <div class="row aboutus">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-11">
                                <h4 style="color: black;">
                                    Feature<span
                                        style="display: inline-block; width:70%; border-bottom: 2px solid black; margin-top:44px; "></span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 11.5C11.337 11.5 10.7011 11.2366 10.2322 10.7678C9.76339 10.2989 9.5 9.66304 9.5 9C9.5 8.33696 9.76339 7.70107 10.2322 7.23223C10.7011 6.76339 11.337 6.5 12 6.5C12.663 6.5 13.2989 6.76339 13.7678 7.23223C14.2366 7.70107 14.5 8.33696 14.5 9C14.5 9.3283 14.4353 9.65339 14.3097 9.95671C14.1841 10.26 13.9999 10.5356 13.7678 10.7678C13.5356 10.9999 13.26 11.1841 12.9567 11.3097C12.6534 11.4353 12.3283 11.5 12 11.5ZM12 2C10.1435 2 8.36301 2.7375 7.05025 4.05025C5.7375 5.36301 5 7.14348 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 7.14348 18.2625 5.36301 16.9497 4.05025C15.637 2.7375 13.8565 2 12 2Z"
                                            fill="black" />
                                    </svg>
                                </h4><br>
                            </div>
                        </div>
                        <div class="container wrapper">
                            <div class="row no-gutters">
                                <div class="col-sm-3 mb-4 custom-mb">
                                    <a href="#" class="card-link d-block h-100">
                                        <article class="card h-100"
                                            style="display: flex; flex-direction: column; width: 83%; border: 1px solid #ccc;overflow:hidden;">
                                            <img src="{{ asset('front/images/real_time_tracking.png')}}" alt="Real Time Tracking"
                                                style="width: 23%; height: auto; max-width: 100px; margin: 0 auto;  margin-top: 30px;">
                                            <div class="card-body text-center"
                                                style="flex: 1; display: flex; flex-direction: column; justify-content: center;">
                                                <h5 class="card-title" style="color: white; margin: 0;"><b
                                                        style="font-family: 'Laila', 'Raleway', sans-serif; display:block;margin-right: 15px; text-align: center; font-size: 17px;">Real
                                                        Time Tracking</b></h5>
                                                <p class="card-text"
                                                    style="color: white; margin: 0; font-size: 12px;">Real time
                                                    location updates can be as frequent as every 10s.</p>
                                            </div>
                                        </article>
                                    </a>
                                </div>
                                <div class="col-sm-3 mb-4">
                                    <a href="#" class="card-link d-block h-100">
                                        <article class="card h-100"
                                            style="background-color:#FF4C4C;display: flex; flex-direction: column; width: 83%; border: 1px solid #ccc;overflow:hidden;">
                                            <img src="{{ asset('front/images/multiple_control_mode.png')}}" alt="Multiple Control Mode"
                                                style="width: 23%; height: auto; max-width: 100px; margin: 0 auto;    margin-top: 30px;">
                                            <div class="card-body text-center"
                                                style="flex: 1; display: flex; flex-direction: column; justify-content: center;">
                                                <h5 class="card-title" style="color: white; margin: 0;"><b
                                                        style="font-family: 'Laila', 'Raleway', sans-serif; display:block;margin-right: 15px; text-align: center; font-size: 17px;">Multiple
                                                        Control</b></h5>
                                                <p class="card-text"
                                                    style="color: white; margin: 0; font-size: 12px;">Unlock by RFID,
                                                    BLU & SMS commands..</p>
                                            </div>
                                        </article>
                                    </a>
                                </div>

                                <div class="col-sm-3 mb-4">
                                    <a href="#" class="card-link d-block h-100">
                                        <article class="card h-100"
                                            style="display: flex; flex-direction: column; width: 83%; border: 1px solid #ccc;overflow:hidden;">
                                            <img src="{{ asset('front/images/security_alarm.png')}}" alt="Security Alarm"
                                                style="width: 23%; height: auto; max-width:100px; margin:0 auto; margin-top: 30px;">
                                            <div class="card-body text-center"
                                                style="flex: 1; display: flex; flex-direction: column; justify-content: center;">
                                                <h5 class="card-title"
                                                    style="color: white; margin: 0; font-family: 'Laila', 'Raleway', sans-serif; display:block;margin-right: 15px; text-align: center; font-size: 17px;">
                                                    Security Alarm</h5>
                                                <p class="card-text"
                                                    style="color: white; margin: 0; font-size: 12px;">For locking,
                                                    unlocking, rope cutting, low battery & unauthorized card swapping
                                                    alerts.</p>
                                            </div>
                                        </article>
                                    </a>
                                </div>
                                <div class="col-sm-3 mb-4">
                                    <a href="#" class="card-link d-block h-100">
                                        <article class="card h-100"
                                            style="background-color: #FF4C4C; display: flex; flex-direction: column; width: 83%; border: 1px solid #ccc;overflow:hidden;">
                                            <img src="{{ asset('front/images/long_battery_life.png')}}" alt="Long Battery Life"
                                                style="width: 23%; height: auto; max-width: 100px; margin: 0 auto; margin-top: 30px;">
                                            <div class="card-body text-center"
                                                style="flex: 1; display: flex; flex-direction: column; justify-content: center;">
                                                <h5 class="card-title"
                                                    style="color: white; margin: 0; font-family: 'Laila', 'Raleway', sans-serif; display:block;margin-right: 15px; text-align: center; font-size: 17px;">
                                                    Long Battery Life</h5>
                                                <p class="card-text"
                                                    style="color: white; margin: 0; font-size: 12px;">Provide the long
                                                    lasting battery life for minimum 7-30 days.</p>
                                            </div>
                                        </article>
                                    </a>
                                </div>
                                <div class="col-sm-3 mb-4">
                                    <a href="#" class="card-link d-block h-100">
                                        <article class="card h-100"
                                            style="display: flex; flex-direction: column; width: 83%; border: 1px solid #ccc;overflow:hidden;">
                                            <img src="{{ asset('front/images/strong_magnet.png')}}" alt="Strong magnet"
                                                style="width: 23%; height: auto; max-width: 100px; margin: 0 auto;    margin-top: 30px;">
                                            <div class="card-body text-center"
                                                style="flex: 1; display: flex; flex-direction: column; justify-content: center;">
                                                <h5 class="card-title"
                                                    style=" color: white; margin: 0;font-family: 'Laila', 'Raleway', sans-serif; display:block;margin-right: 17px; text-align: center;font-size: 17px;">
                                                    Strong magnet</h5>
                                                <p class="card-text"
                                                    style="color: white; margin: 0; font-size: 12px;">With a strong
                                                    magnet back panel we can fix the device at one position.</p>
                                            </div>
                                        </article>
                                    </a>
                                </div>
                                <div class="col-sm-3 mb-4">
                                    <a href="#" class="card-link d-block h-100">
                                        <article class="card h-100"
                                            style="background-color: #FF4C4C; display: flex; flex-direction: column; width: 83%; border: 1px solid #ccc;overflow:hidden;">
                                            <img src="{{ asset('front/images/built_in_wireless_module.png')}}"
                                                alt="Built-in wireless module"
                                                style="width: 23%; height: auto; max-width: 100px; margin: 0 auto; margin-top: 30px;">
                                            <div class="card-body text-center"
                                                style="flex: 1; display: flex; flex-direction: column; justify-content: center;">
                                                <h5 class="card-title"
                                                    style="color: white; margin: 0;font-family: 'Laila', 'Raleway', sans-serif; display:block;margin-right: 15px; text-align: center;font-size: 17px;">
                                                    Built-in wireless module</h5>
                                                <p class="card-text"
                                                    style="color: white; margin: 0; font-size: 12px;">Allows devices to
                                                    connect wirelessly without extra hardware.</p>
                                            </div>
                                        </article>
                                    </a>
                                </div>
                                <div class="col-sm-3 mb-4">
                                    <a href="#" class="card-link d-block h-100">
                                        <article class="card h-100"
                                            style="display: flex; flex-direction: column; width: 83%; border: 1px solid #ccc;overflow:hidden;">
                                            <img src="{{ asset('front/images/working_temperature.png')}}" alt="Working Temperature"
                                                style="width: 23%; height: auto; max-width: 100px; margin: 0 auto;    margin-top: 30px;">
                                            <div class="card-body text-center"
                                                style="flex: 1; display: flex; flex-direction: column; justify-content: center;">
                                                <h5 class="card-title"
                                                    style="color: white; margin: 0; font-family: 'Laila', 'Raleway', sans-serif; display:block; margin-right: 15px; text-align: center; font-size: 17px;">
                                                    Working Temperature</h5>
                                                <p class="card-text"
                                                    style="color: white; margin: 0; font-size: 12px;">Works under
                                                    temperature -ve 22&deg;c to +ve 60&deg;c.</p>
                                            </div>
                                        </article>
                                    </a>
                                </div>
                                <div class="col-sm-3 mb-4">
                                    <a href="#" class="card-link d-block h-100">
                                        <article class="card h-100"
                                            style="background-color: #FF4C4C; display: flex; flex-direction: column; width: 83%; border: 1px solid #ccc;overflow:hidden;">
                                            <img src="{{ asset('front/images/ip67_waterproof.png')}}" alt="IP67 Waterproof"
                                                style="width: 23%; height: auto; max-width: 100px; margin: 0 auto;    margin-top: 30px;">
                                            <div class="card-body text-center"
                                                style="flex: 1; display: flex; flex-direction: column; justify-content: center;">
                                                <h5 class="card-title"
                                                    style="color: white; margin: 0; font-family: 'Laila', 'Raleway', sans-serif; display:block;margin-right: 15px; text-align: center; font-size: 17px;">
                                                    IP67-Waterproof</h5>
                                                <p class="card-text"
                                                    style="color: white; margin: 0; font-size: 12px;">All the device
                                                    are waterproof.</p>
                                            </div>
                                        </article>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br><br>


                        <!-- Start Client Section  -->
                        <div class="container-fluid">
                            <div class="row aboutus">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-11">
                                    <h4 style="color: black;">
                                        Our Client<span
                                            style="display: inline-block; width:70%; border-bottom: 3px solid black; margin-top:44px; "></span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 11.5C11.337 11.5 10.7011 11.2366 10.2322 10.7678C9.76339 10.2989 9.5 9.66304 9.5 9C9.5 8.33696 9.76339 7.70107 10.2322 7.23223C10.7011 6.76339 11.337 6.5 12 6.5C12.663 6.5 13.2989 6.76339 13.7678 7.23223C14.2366 7.70107 14.5 8.33696 14.5 9C14.5 9.3283 14.4353 9.65339 14.3097 9.95671C14.1841 10.26 13.9999 10.5356 13.7678 10.7678C13.5356 10.9999 13.26 11.1841 12.9567 11.3097C12.6534 11.4353 12.3283 11.5 12 11.5ZM12 2C10.1435 2 8.36301 2.7375 7.05025 4.05025C5.7375 5.36301 5 7.14348 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 7.14348 18.2625 5.36301 16.9497 4.05025C15.637 2.7375 13.8565 2 12 2Z"
                                                fill="black" />
                                        </svg>
                                    </h4>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="row">
                                    <div id="slider-container">
                                        <div id="slider-scroller">
                                            <div class="slider-item">
                                                <img src="{{ asset('front/images/britannia.png')}}" />
                                            </div>
                                            <div class="slider-item">
                                                <img src="{{ asset('front/images/chandan.png')}}" />
                                            </div>
                                            <div class="slider-item">
                                                <img src="images/Cipla.png" />
                                            </div>
                                            <div class="slider-item">
                                                <img src="/images/godrej.png" />
                                            </div>
                                            <div class="slider-item">
                                                <img src="/images/indianoil.png" />
                                            </div>
                                            <div class="slider-item">
                                                <img src="/images/MRF.png" />
                                            </div>
                                            <div class="slider-item">
                                                <img src="/images/navneet.png" />
                                            </div>
                                            <div class="slider-item">
                                                <img src="/images/Toyota.png" />
                                            </div>
                                            <div class="slider-item">
                                                <img src="/images/wipro.png" />
                                            </div>
                                            <div class="slider-item">
                                                <img src="/images/VIRA.png" />
                                            </div>
                                            <div class="slider-item">
                                                <img src="/images/Electrosteel.png" />
                                            </div>
                                            <div class="slider-item">
                                                <img src="/images/dabur.png" />
                                            </div>
                                            <div class="slider-item">
                                                <img src="/images/gardenVareli.png" />
                                            </div>
                                            <div class="slider-item">
                                                <img src="/images/hindustanUL.png" />
                                            </div>
                                            <div class="slider-item">
                                                <img src="/images/malas's.png" />
                                            </div>
                                            <div class="slider-item">
                                                <img src="/images/morde.png" />
                                            </div>
                                            <div class="slider-item">
                                                <img src="/images/tata coffee.png" />
                                            </div>
                                            <div class="slider-item">
                                                <img src="/images/shreeRenuka.png" />
                                            </div>
                                            <div class="slider-item">
                                                <img src="/images/Pidilite.png" />
                                            </div>
                                            <div class="slider-item">
                                                <img src="/images/paraleAgro.png" />
                                            </div>
                                            <div class="slider-item">
                                                <img src="/images/MotherDairy.png" />
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div><br><br>

        </main><br><br><br><br><br><br>
        <!--========================================================
                            FOOTER
==========================================================-->
        <!-- Footer Start -->
        <footer class="footer">
            <!-- Widgets - Bootstrap Brain Component -->
            <section class="bg-light py-4 py-md-5 py-xl-8 border-top border-light">
                <div class="container overflow-hidden">
                    <div class="row gy-4 gy-lg-0 justify-content-xl-between">
                        <div class="">

                        </div>
                        <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                            <div class="widget1">
                                <a href="#!">
                                    <img src="/images/Logo-Footer.svg" alt="BootstrapBrain Logo" width="175"
                                        height="57">
                                    <address class="mb-4"> B-201/B-202, 2nd fl., B wing, Veerdhaval CHS LTD,
                                        L.T.Road,Babhai Naka,Borivali(W),Mumbai - 400092</address>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 col-lg-4 col-xl-2">
                            <div class="widget1">
                                <h5 class="widget-title mb-4">Get in Touch</h5>
                                <p class="mb-0">
                                    <a class="link-secondary text-decoration-none"
                                        style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"
                                        href="tel:+15057922430">7506364190/7208039377/8879440129</a>
                                </p>
                                <p class="mb-0">
                                    <a class="link-secondary text-decoration-none"
                                        href="mailto:sales1@packsealsind.com">sales1@packsealsind.com</a>
                                    <a class="link-secondary text-decoration-none"
                                        href="mailto:marketing1@packsealsind.com">marketing1@packsealsind.com</a>
                                </p>
                                <p class="mb-0">
                                    <a class="link-secondary text-decoration-none"
                                        href="https://gpspackseal.in">https://gpspackseal.in</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 col-lg-3 col-xl-2">
                            <div class="widget1">
                                <h5 class="widget-title mb-4">Service</h5>
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <a href="index.html" class="link-secondary text-decoration-none">Home</a>
                                    </li><br>
                                    <li class="mb-2">
                                        <a href="about.html" class="link-secondary text-decoration-none">About Us</a>
                                    </li><br>
                                    <li class="mb-2">
                                        <a href="solution.html"
                                            class="link-secondary text-decoration-none">Solutions</a>
                                    </li><br>
                                    <li class="mb-2">
                                        <a href="product.html" class="link-secondary text-decoration-none">Product</a>
                                    </li><br>

                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-2 col-xl-2">
                            <div class="widget1">
                                <h5 class="widget-title mb-4">Company</h5>
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <a href="index.html" class="link-secondary text-decoration-none">Pricing</a>
                                    </li><br>
                                    <li class="mb-2">
                                        <a href="about.html" class="link-secondary text-decoration-none">Settings</a>
                                    </li><br>
                                    <li class="mb-2">
                                        <a href="solution.html" class="link-secondary text-decoration-none">Orders</a>
                                    </li><br>
                                    <li class="mb-2">
                                        <a href="product.html" class="link-secondary text-decoration-none">Help</a>
                                    </li><br>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Copyright - Bootstrap Brain Component -->
            <div class="bg-light py-4 py-md-5 py-xl-8 border-top border-light-subtle">
                <div class="container overflow-hidden">
                    <div class="row gy-4 gy-md-0">
                        <!-- <div class="col-xs-12 col-md-7 order-1 order-md-0">
          <div class="copyright text-center text-md-start">
            &copy; 2024. All Rights Reserved.
          </div>
          <div class="credits text-secondary text-center text-md-start mt-2 fs-7">
            Built by <a href="https://bootstrapbrain.com/" class="link-secondary text-decoration-none">BootstrapBrain</a> with <span class="text-primary">&#9829;</span>
          </div>
        </div> -->

                        <div class="col-xs-12 col-md-5 order-0 order-md-1">
                            <ul class="nav justify-content-center justify-content-md-end">
                                <li class="nav-item">
                                    <a class="nav-link link-dark" href="#!">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg>
                                    </a>
                                </li>&nbsp;&nbsp;&nbsp;
                                <li class="nav-item">
                                    <a class="nav-link link-dark" href="#!">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                            <path
                                                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                        </svg>
                                    </a>
                                </li>&nbsp;&nbsp;&nbsp;
                                <li class="nav-item">
                                    <a class="nav-link link-dark" href="#!">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                            <path
                                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                        </svg>
                                    </a>
                                </li>&nbsp;&nbsp;&nbsp;
                                <li class="nav-item">
                                    <a class="nav-link link-dark" href="#!">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                        </svg>
                                    </a>
                                </li>&nbsp;&nbsp;&nbsp;
                                <li class="nav-item">
                                    <a class="nav-link link-dark" href="#!">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                            <path
                                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
    </div>
    <!-- Copyright -->
    <div class="copyright">
        <div class="text-center p-4" style="color:rgb(255, 252, 252);text-align: center; background-color:#2e3192">
            &copy; 2024 Copyright:
            <a class="text-reset fw-bold" href="https:///gpspackseal.in/">gpspackseal.com</a>
        </div>
    </div>

    <!-- Copyright -->

    </footer>
    </div>


    <!-- Core Scripts -->
    <script src="js/core.min.js"></script>
    <!-- Additional Functionality Scripts -->
    <script src="js/script.js"></script>


</body>

</html>
