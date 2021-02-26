<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <link rel="icon" href="{{asset('/images/mgm-sans.png')}}" type="image/x-icon">
    <!-- Stylesheets-->
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Kanit:300,400,500,500i,600%7CRoboto:400,900">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/mod-KambiBC-betslip-container.css')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/css/custom.css')}}">
</head>
<body>
<header class="section page-header rd-navbar-dark">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="166px" data-xl-stick-up-offset="166px" data-xxl-stick-up-offset="166px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-main"><span></span></button>
                <span class="logo mobile-view" style="">MGM</span>
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel-inner container">
                    <div class="rd-navbar-panel-item rd-navbar-panel-item-left">
                        <ul class="list-inline list-inline-sm">
                            <li><a class="link link-classic" href="#">Help</a></li>
                            <!--<li><a class="link link-classic" href="news.php">News</a></li>-->
                            <li><a class="link link-classic" href="contact-us.php">Contacts</a></li>
                        </ul>
                    </div>
                    <?php if(isset($_SESSION['fname'])) {   ?>
                    <div class="rd-navbar-collapse rd-navbar-panel-item rd-navbar-panel-item-right just-cont-logo">
                  <span class="logo" style="justify-content: space-between;align-items: center;">MGM
                  <br><span style="font-size: 16px;margin-left: -50px;">Macau Gambling Market</span></span>
                        <ul class="list-inline list-inline-bordered mt-0">
                            <li class="available-bal">
                                <span class="icon fa-money "></span>
                                <span class="link-icon-text">Available Balance</span>
                                <?php
                                include('config.php');
                                $id=$_SESSION['custid'];
                                $asql = "SELECT * FROM customer WHERE id='$id' ";
                                $aresult = $connect->query($asql);
                                $amnt = $aresult->fetch_assoc();
                                ?>
                                <h6>€<?php echo $amnt['balance']?></h6>
                            </li>
                            <li>
                                <!-- Select 2-->
                                <select class="select select-inline select-inline-dark" data-placeholder="Select an option" data-dropdown-class="select-inline-dropdown select-inline-dropdown-secondary">
                                    <option value="en" selected="">en</option>
                                    <option value="fr">fr</option>
                                    <option value="es">es</option>
                                </select>
                            </li>
                            <li><a class="link link-icon link-icon-left link-classic" href="user_profile_login_panel"><span class="icon fl-bigmug-line-login12"></span><span class="link-icon-text">My Account</span></a></li>
                        </ul>
                    </div>
                    <?php } else {  ?>
                    <div class="rd-navbar-collapse rd-navbar-panel-item rd-navbar-panel-item-right just-cont-logo">
                  <span class="logo" style="justify-content: space-between;align-items: center;">MGM
                  <br><span style="font-size: 16px;margin-left: -50px;">Macau Gambling Market</span>
                  </span>
                        <ul class="list-inline list-inline-bordered">
                            <li>
                                <!-- Select 2-->
                                <select class="select select-inline select-inline-dark" data-placeholder="Select an option" data-dropdown-class="select-inline-dropdown select-inline-dropdown-secondary">
                                    <option value="en" selected="">en</option>
                                    <option value="fr">fr</option>
                                    <option value="es">es</option>
                                </select>
                            </li>
                            <li><a class="badge badge-primary" href="register">registration</a></li>
                            <li><a class="link link-icon link-icon-left link-classic" href="login-page"><span class="icon fl-bigmug-line-login12"></span><span class="link-icon-text">Your Account</span></a></li>
                        </ul>
                    </div>
                    <?php }  ?>
                    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                </div>
            </div>
            <div class="rd-navbar-main">
                <div class="rd-navbar-main-bottom rd-navbar-darker">
                    <div class="rd-navbar-main-container container">
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">

                            <li class="rd-nav-item " id="sportsLi"><a class="rd-nav-link" href="index.php">Sports</a>
                            </li>
                            <li class="rd-nav-item" id="playLi"><a class="rd-nav-link" href="in-play.php">In-Play</a>
                            </li>
                            <li class="rd-nav-item" id="proLi"><a class="rd-nav-link" href="promotions.php">Promotions</a>
                            </li>
                            <li class="rd-nav-item" id="contactLi"><a class="rd-nav-link" href="contact-us.php">Contact us</a>
                            </li>
                        </ul>
                        <div class="rd-navbar-main-element">
                            <ul class="list-inline list-inline-sm">
                                <li><a class="icon icon-xs fa fa-facebook" href="#"></a></li>
                                <li><a class="icon icon-xs fa fa-twitter" href="#"></a></li>
                                <li><a class="icon icon-xs fa fa-google-plus" href="#"></a></li>
                                <li><a class="icon icon-xs fa fa-instagram" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
@yield('content')
<footer class="section footer-classic footer-classic-dark">
    <div class="footer-classic-main">
        <div class="container">
            <div class="row">
                <!--  col 1 -->
                <div class="col-md-2 col-sm-6 col-4 ">
                    <a class="" href="index"><span class="logo footer-logo" style="">MGM</span></a>
                </div>
                <div class="col-md-3 col-sm-6 d-flex col-8 lie-brand">
                    <a class="brand" href="index"><img class="brand-logo-dark" src="images/footer.PNG" alt="" width="41" height="41"/>
                        <img class="brand-logo-light" src="images/footer.png" alt="" width="41" height="41"/>
                    </a>
                    <ul class="list-inline list-inline-sm lie">
                        <li>Curacao E-Gaming</li>
                        <li>Our License</li>
                    </ul>
                </div>
                <!--  col 2 -->
                <div class="col-md-4 col-sm-6 footerclass">
                    <p class="footerhead">Payment Options</p>
                    <div class="payopt">
                        <ul class="list-inline list-inline-sm">
                            <li><img class="footerpay" src="images/bitcoin_foo.png" alt="" /></li>
                            <li><img class="footerpay" src="images/skrill_foo.png" alt="" style="height:17px;"/></li>
                            <li><img class="footerpay" src="images/neteller_foo.png" alt=""/></li>
                        </ul>
                    </div>
                </div>
                <!--  col 3 -->
                <div class="col-md-3 col-sm-6 footerclass">
                    <p class="footerhead">QUICK LINKS</p>
                    <div class="quicklinks">
                        <ul class="">
                            <li><a href="privacy-policy">Privacy Policy</a></li>
                            <li><a href="respo_gaming">Responsible Gaming</a></li>
                            <li><a href="terms">Terms and Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="footer-classic-aside footer-classic-darken">
        <div class="container">
            <div class="layout-justify">
                <!-- Rights-->
                <!-- <p class="rights"><span>S-Bet</span><span>&nbsp;&copy;&nbsp;</span><span class="copyright-year"></span><span>.&nbsp;</span><a class="link-underline" href="privacy-policy.php">Privacy Policy</a></p> -->
                <p class="rights">© Copyright 2014-2020. All rights reserved.</p>
                <!-- <nav class="nav-minimal">
                   <ul class="nav-minimal-list">
                     <li class="active"><a href="index.php">Sports</a></li>
                     <li><a href="in-play.php">In-play</a></li>
                     <li><a href="promotions.php">Promotions</a></li>
                     <li><a href="statistics.php">Statistics</a></li>
                     <li><a href="#">Pages</a></li>
                   </ul>
                   </nav> -->
                <div class="rd-navbar-main-element">
                    <ul class="list-inline list-inline-sm">
                        <li><a class="icon icon-xs fa fa-facebook" href="#"></a></li>
                        <li><a class="icon icon-xs fa fa-twitter" href="#"></a></li>
                        <li><a class="icon icon-xs fa fa-google-plus" href="#"></a></li>
                        <li><a class="icon icon-xs fa fa-instagram" href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
