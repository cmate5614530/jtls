<?php
session_start();
?>
    <!DOCTYPE html>
<html class="wide wow-animation" lang="en">
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
    <style type="text/css">
        .select2-results {
            max-height: 250px;
            overflow-y: scroll;
        }
        #bannerimg{
            border-radius: 15px 0;
        }
        .promotion h4{
            text-align: center;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 42px;
        }
        p.top-right {
            position: absolute;
            top: 7px;
            left: 71px;
            color: white;
            font-weight: bold;
            line-height: 20px;
        }
        .payopt{
            margin-bottom: 17px;
            padding: 0px;
            margin-top: 6px;
        }
        .footerpay{
            width: 63px;
            margin-right: 10px !important;
        }
        .footerhead{
            text-transform: uppercase;
            font-size: 22px;
            font-weight: bold;
            color: white;
        }
        .footerclass{
            margin-left: auto;
            margin-right: auto;
        }
        .quicklinks{
            padding-left: 8px;
            padding-top: 3px;
        }
        /*.footer-classic-darken {*/
        /*    background: #64b000;*/
        /*}*/
        p.rights {

            color: white;
        }
        .footerlogo{
            text-transform: uppercase;
            font-size: 40px;
            font-weight: bold;
            color: white;
        }
        #betslipModal{
            opacity:0;
            display: block;
        }
        #betslipModal.show-betslip{
            opacity:1;
        }

    </style>
</head>
<body>
<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
<div class="preloader">
    <div class="preloader-body">
        <div class="preloader-item"></div>
    </div>
</div>
<!-- Page-->
<div class="page">
    <!-- Page Header-->
@include('layouts.header')
<!-- Swiper-->
    <section class="section swiper-container swiper-slider swiper-classic bg-gray-2" data-loop="true" data-autoplay="4000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-slide-bg="images/slider-1-slide-1-1920x671.jpg">
                <div class="container">
                    <div class="swiper-slide-caption">
                        <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Safe <br> Betting</h1>
                        <h4 data-caption-animate="fadeInUp" data-caption-delay="200">With 100% Risk-Free Guarantee</h4><a class="button button-gray-outline" data-caption-animate="fadeInUp" data-caption-delay="300" href="#">Get started</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/slider-1-slide-2-1920x671.jpg">
                <div class="container">
                    <div class="swiper-slide-caption">
                        <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Easy Bets</h1>
                        <h4 data-caption-animate="fadeInUp" data-caption-delay="200">With the lowest commissions</h4><a class="button button-gray-outline" data-caption-animate="fadeInUp" data-caption-delay="300" href="#">Join Us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button swiper-button-prev"></div>
        <div class="swiper-button swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </section>

    <!-- All Sports-->
    <section class="section section-sm bg-gray-100">
        <div class="container">
            <div class="row isotope-wrap row-30">
                <!-- Isotope Filters-->
                <div class="col-lg-12">
                    <div class="isotope-filters isotope-filters-horizontal">
                        <button class="isotope-filters-toggle button" data-custom-toggle="#isotope-filters" data-custom-toggle-hide-on-blur="true" data-custom-toggle-disable-on-blur="true">Select<span class="caret"></span></button>
                        <ul class="isotope-filters-list" id="isotope-filters">
                            <li class="isotope-filters-list-item"><a class="isotope-filters-list-link active" data-isotope-filter="*" data-isotope-group="gallery" href="#"><span class="isotope-filters-list-img"><span class="sprite sprite-sport-icon-01"></span></span><span class="isotope-filters-list-text">All sports</span> <span class="isotope-filters-list-count">29</span></a></li>
                            <li class="isotope-filters-list-item"><a class="isotope-filters-list-link" data-isotope-filter="football" data-isotope-group="gallery" href="#"><span class="isotope-filters-list-img"><span class="sprite sprite-sport-icon-07"></span></span><span class="isotope-filters-list-text">Football</span> <span class="isotope-filters-list-count">6</span></a></li>
                            <li class="isotope-filters-list-item"><a class="isotope-filters-list-link" data-isotope-filter="tennis" data-isotope-group="gallery" href="#"><span class="isotope-filters-list-img"><span class="sprite sprite-sport-icon-06"></span></span><span class="isotope-filters-list-text">Tennis</span> <span class="isotope-filters-list-count">4</span></a></li>
                            <li class="isotope-filters-list-item"><a class="isotope-filters-list-link" data-isotope-filter="basketball" data-isotope-group="gallery" href="#"><span class="isotope-filters-list-img"><span class="sprite sprite-sport-icon-04"></span></span><span class="isotope-filters-list-text">Basketball</span> <span class="isotope-filters-list-count">4</span></a></li>
                            <li class="isotope-filters-list-item"><a class="isotope-filters-list-link" data-isotope-filter="ice-hockey" data-isotope-group="gallery" href="#"><span class="isotope-filters-list-img"><span class="sprite sprite-sport-icon-08"></span></span><span class="isotope-filters-list-text">Ice Hockey</span> <span class="isotope-filters-list-count">3</span></a></li>
                            <li class="isotope-filters-list-item"><a class="isotope-filters-list-link" data-isotope-filter="volleyball" data-isotope-group="gallery" href="#"><span class="isotope-filters-list-img"><span class="sprite sprite-sport-icon-09"></span></span><span class="isotope-filters-list-text">Volleyball</span> <span class="isotope-filters-list-count">3</span></a></li>
                            <li class="isotope-filters-list-item"><a class="isotope-filters-list-link" data-isotope-filter="badminton" data-isotope-group="gallery" href="#"><span class="isotope-filters-list-img"><span class="sprite sprite-sport-icon-03"></span></span><span class="isotope-filters-list-text">Badminton</span> <span class="isotope-filters-list-count">4</span></a></li>
                            <li class="isotope-filters-list-item"><a class="isotope-filters-list-link" data-isotope-filter="baseball" data-isotope-group="gallery" href="#"><span class="isotope-filters-list-img"><span class="sprite sprite-sport-icon-05"></span></span><span class="isotope-filters-list-text">Baseball</span> <span class="isotope-filters-list-count">2</span></a></li>
                            <li class="isotope-filters-list-item"><a class="isotope-filters-list-link" data-isotope-filter="ping-pong" data-isotope-group="gallery" href="#"><span class="isotope-filters-list-img"><span class="sprite sprite-sport-icon-02"></span></span><span class="isotope-filters-list-text">Table Tennis</span> <span class="isotope-filters-list-count">2</span></a></li>
                            <li class="isotope-filters-list-item"><a class="isotope-filters-list-link" data-isotope-filter="cycling" data-isotope-group="gallery" href="#"><span class="isotope-filters-list-img"><span class="sprite sprite-sport-icon-10"></span></span><span class="isotope-filters-list-text">Cycling</span> <span class="isotope-filters-list-count">2</span></a></li>
                        </ul>
                        <div class="isotope-filters-info">
                            <p class="isotope-filters-info-text"> All Sports (29)</p>
                        </div>
                    </div>
                </div>
                <!-- Isotope Content-->
                <div class="col-lg-12">
                    <div class="row isotope row-30" data-isotope-layout="masonry" data-column-class=".col-1" data-isotope-group="gallery">
                        <div class="col-1 isotope-item isotope-sizer"></div>
                        <!-- Football-->
                        <div class="col-lg-12 isotope-item" data-filter="football">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Football (6)
                                    </h5>
                                    <div>
                                        <ul class="list-inline list-inline-xs">
                                            <li><a class="button button-xs button-red-outline active" href="prematch">Prematches</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>

                            <div class="sport-table-header">
                                <p>National Championship (6)</p>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-07"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Real Madrid</span><span class="sport-table-title-team">Chelsea</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>4</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>2</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager">

                                                <a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Real Madrid" data-confrontation="Real Madrid vs Chelsea" data-wager-count="1.23" data-score="4:2">
                                                    <span >Real Madrid</span>
                                                    <span class="sport-table-wager-button-count">1.23</span>
                                                </a>

                                                <a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Draw" data-confrontation="Real Madrid vs. Chelsea" data-wager-count="13.00" data-score="4:2"><span>Draw</span><span class="sport-table-wager-button-count">13.00</span>
                                                </a>

                                                <a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Chelsea" data-confrontation="Real Madrid vs Chelsea" data-wager-count="34.25" data-score="4:2"><span>Chelsea</span><span class="sport-table-wager-button-count">34.25</span>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+58</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-07"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Arsenal</span><span class="sport-table-title-team">Everton</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>1</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>0</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Arsenal" data-confrontation="Arsenal vs Everton" data-wager-count="2.83" data-score="1:0"><span>Arsenal</span><span class="sport-table-wager-button-count">2.83</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Draw" data-confrontation="Arsenal vs. Everton" data-wager-count="7.00" data-score="1:0"><span>Draw</span><span class="sport-table-wager-button-count">7.00</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Everton" data-confrontation="Arsenal vs Everton" data-wager-count="12.15" data-score="1:0"><span>Everton</span><span class="sport-table-wager-button-count">12.15</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+46</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-07"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">West Ham United</span><span class="sport-table-title-team">Bournemouth</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>1</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>2</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="West Ham United" data-confrontation="West Ham United vs Bournemouth" data-wager-count="4.17" data-score="1:2"><span>West Ham United</span><span class="sport-table-wager-button-count">4.17</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Draw" data-confrontation="West Ham United vs. Bournemouth" data-wager-count="17.00" data-score="1:2"><span>Draw</span><span class="sport-table-wager-button-count">17.00</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Bournemouth" data-confrontation="West Ham United vs Bournemouth" data-wager-count="18.52" data-score="1:2"><span>Bournemouth</span><span class="sport-table-wager-button-count">18.52</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+51</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-07"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Leicester City</span><span class="sport-table-title-team">Atletico</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>2</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Leicester City" data-confrontation="Leicester City vs Atletico" data-wager-count="5.14" data-score="0:2"><span>Leicester City</span><span class="sport-table-wager-button-count">5.14</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Draw" data-confrontation="Leicester City vs. Atletico" data-wager-count="9.00" data-score="0:2"><span>Draw</span><span class="sport-table-wager-button-count">9.00</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Atletico" data-confrontation="Leicester City vs Atletico" data-wager-count="27.13" data-score="0:2"><span>Atletico</span><span class="sport-table-wager-button-count">27.13</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+32</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-07"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Paris Saint-Germain</span><span class="sport-table-title-team">Cardiff City</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>1</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>1</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Paris Saint-Germain" data-confrontation="Paris Saint-Germain vs Cardiff City" data-wager-count="7.77" data-score="1:1"><span>Paris Saint-Germain</span><span class="sport-table-wager-button-count">7.77</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Draw" data-confrontation="Paris Saint-Germain vs. Cardiff City" data-wager-count="10.00" data-score="1:1"><span>Draw</span><span class="sport-table-wager-button-count">10.00</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Cardiff City" data-confrontation="Paris Saint-Germain vs Cardiff City" data-wager-count="4.21" data-score="1:1"><span>Cardiff City</span><span class="sport-table-wager-button-count">4.21</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+24</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-07"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Stoke City</span><span class="sport-table-title-team">Newcastle United</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>1</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>2</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Stoke City" data-confrontation="Stoke City vs Newcastle United" data-wager-count="3.57" data-score="1:2"><span>Stoke City</span><span class="sport-table-wager-button-count">3.57</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Draw" data-confrontation="Stoke City vs. Newcastle United" data-wager-count="22.00" data-score="1:2"><span>Draw</span><span class="sport-table-wager-button-count">22.00</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Newcastle United" data-confrontation="Stoke City vs Newcastle United" data-wager-count="48.12" data-score="1:2"><span>Newcastle United</span><span class="sport-table-wager-button-count">48.12</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+19</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tennis-->
                        <div class="col-lg-12 isotope-item" data-filter="tennis">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Tennis (4)
                                    </h5>
                                </div>
                            </article>

                            <div class="sport-table-header">
                                <p>US International (4)</p>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-06"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Harry Stewart</span><span class="sport-table-title-team">Donald Crawford</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>7</span><span>0</span><span>0</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>6</span><span>1</span><span>0</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Harry Stewart" data-confrontation="Harry Stewart vs Donald Crawford" data-wager-count="13.5" data-score="7:6"><span>Harry Stewart</span><span class="sport-table-wager-button-count">13.5</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Donald Crawford" data-confrontation="Harry Stewart vs Donald Crawford" data-wager-count="1.005" data-score="7:6"><span>Donald Crawford</span><span class="sport-table-wager-button-count">1.005</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+25</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-06"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Peter Wells</span><span class="sport-table-title-team">Tyrone Norman</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>5</span><span>0</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>4</span><span>0</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double">
                                                <a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Peter Wells" data-confrontation="Peter Wells vs Tyrone Norman" data-wager-count="2.10" data-score="5:4"><span>Peter Wells</span><span class="sport-table-wager-button-count">2.10</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Tyrone Norman" data-confrontation="Peter Wells vs Tyrone Norman" data-wager-count="1.68" data-score="5:4"><span>Tyrone Norman</span><span class="sport-table-wager-button-count">1.68</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+46</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-06"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Emily Sanders</span><span class="sport-table-title-team">Mary Clarke</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>5</span><span>3</span><span>0</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>7</span><span>4</span><span>0</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Emily Sanders" data-confrontation="Emily Sanders vs Mary Clarke" data-wager-count="1.25" data-score="5:7"><span>Emily Sanders</span><span class="sport-table-wager-button-count">1.25</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Mary Clarke" data-confrontation="Emily Sanders vs Mary Clarke" data-wager-count="3.75" data-score="5:7"><span>Mary Clarke</span><span class="sport-table-wager-button-count">3.75</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+51</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-06"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Gavin Simpson</span><span class="sport-table-title-team">Simon Warner</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>4</span><span>0</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>4</span><span>2</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Gavin Simpson" data-confrontation="Gavin Simpson vs Simon Warner" data-wager-count="3.37" data-score="4:4"><span>Gavin Simpson</span><span class="sport-table-wager-button-count">3.37</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Simon Warner" data-confrontation="Gavin Simpson vs Simon Warner" data-wager-count="8.15" data-score="4:4"><span>Simon Warner</span><span class="sport-table-wager-button-count">8.15</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+32</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Basketball-->
                        <div class="col-lg-12 isotope-item" data-filter="basketball">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Basketball (1)
                                    </h5>
                                </div>
                            </article>

                            <div class="sport-table-header">
                                <p>NBA Finals (1)</p>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-04"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Batangas City Athletics</span><span class="sport-table-title-team">Cebu City Sharks</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>53</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>66</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Batangas City Athletics" data-confrontation="Batangas City Athletics vs Cebu City Sharks" data-wager-count="2.05" data-score="53:66"><span>Batangas City Athletics</span><span class="sport-table-wager-button-count">2.05</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Cebu City Sharks" data-confrontation="Batangas City Athletics vs Cebu City Sharks" data-wager-count="1.005" data-score="53:66"><span>Cebu City Sharks</span><span class="sport-table-wager-button-count">1.005</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+25</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Ice Hockey-->
                        <div class="col-lg-12 isotope-item" data-filter="ice-hockey">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Ice Hockey (3)
                                    </h5>
                                </div>
                            </article>

                            <div class="sport-table-header">
                                <p>National Hockey league (3)</p>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-08"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">BK Sutjeska</span><span class="sport-table-title-team">Alashkert HC</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>4</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>2</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="BK Sutjeska" data-confrontation="BK Sutjeska vs Alashkert HC" data-wager-count="1.23" data-score="4:2"><span>BK Sutjeska</span><span class="sport-table-wager-button-count">1.23</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Draw" data-confrontation="BK Sutjeska vs. Alashkert HC" data-wager-count="13.00" data-score="4:2"><span>Draw</span><span class="sport-table-wager-button-count">13.00</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Alashkert HC" data-confrontation="BK Sutjeska vs Alashkert HC" data-wager-count="34.25" data-score="4:2"><span>Alashkert HC</span><span class="sport-table-wager-button-count">34.25</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+58</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-08"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">HC Laci</span><span class="sport-table-title-team">BK Molde</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>1</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>0</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="HC Laci" data-confrontation="HC Laci vs BK Molde" data-wager-count="1.58" data-score="1:0"><span>HC Laci</span><span class="sport-table-wager-button-count">1.58</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Draw" data-confrontation="HC Laci vs. BK Molde" data-wager-count="13.00" data-score="1:0"><span>Draw</span><span class="sport-table-wager-button-count">13.00</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="BK Molde" data-confrontation="HC Laci vs BK Molde" data-wager-count="17.88" data-score="1:0"><span>BK Molde</span><span class="sport-table-wager-button-count">17.88</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+46</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-08"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Hc Larnaca</span><span class="sport-table-title-team">Dundalk</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>1</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>2</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Hc Larnaca" data-confrontation="Hc Larnaca vs Dundalk" data-wager-count="2.41" data-score="1:2"><span>Hc Larnaca</span><span class="sport-table-wager-button-count">2.41</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Draw" data-confrontation="Hc Larnaca vs. Dundalk" data-wager-count="13.00" data-score="1:2"><span>Draw</span><span class="sport-table-wager-button-count">13.00</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Dundalk" data-confrontation="Hc Larnaca vs Dundalk" data-wager-count="23.28" data-score="1:2"><span>Dundalk</span><span class="sport-table-wager-button-count">23.28</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+51</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Volleyball-->
                        <div class="col-lg-12 isotope-item" data-filter="volleyball">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Volleyball (3)
                                    </h5>
                                </div>
                            </article>

                            <div class="sport-table-header">
                                <p>Men’s World Championship (3)</p>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-09"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Estonia</span><span class="sport-table-title-team">Slovakia</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>18</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>14</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Estonia" data-confrontation="Estonia vs Slovakia" data-wager-count="1.12" data-score="18:14"><span>Estonia</span><span class="sport-table-wager-button-count">1.12</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Slovakia" data-confrontation="Estonia vs Slovakia" data-wager-count="5.45" data-score="18:14"><span>Slovakia</span><span class="sport-table-wager-button-count">5.45</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+25</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-09"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Poland</span><span class="sport-table-title-team">Germany</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>27</span><span>8</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>25</span><span>9</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Poland" data-confrontation="Poland vs Germany" data-wager-count="2.10" data-score="27:25"><span>Poland</span><span class="sport-table-wager-button-count">2.10</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Germany" data-confrontation="Poland vs Germany" data-wager-count="1.68" data-score="27:25"><span>Germany</span><span class="sport-table-wager-button-count">1.68</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+46</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-09"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">France</span><span class="sport-table-title-team">Spain</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>16</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>15</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="France" data-confrontation="France vs Spain" data-wager-count="1.25" data-score="16:15"><span>France</span><span class="sport-table-wager-button-count">1.25</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Spain" data-confrontation="France vs Spain" data-wager-count="3.75" data-score="16:15"><span>Spain</span><span class="sport-table-wager-button-count">3.75</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+51</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Badminton-->
                        <div class="col-lg-12 isotope-item" data-filter="badminton">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Badminton (4)
                                    </h5>
                                </div>
                            </article>

                            <div class="sport-table-header">
                                <p>World Championship (4)</p>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-03"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Ronald Stewart</span><span class="sport-table-title-team">Steven Crawford</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>14</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Ronald Stewart" data-confrontation="Ronald Stewart vs Steven Crawford" data-wager-count="13.5" data-score="0:14"><span>Ronald Stewart</span><span class="sport-table-wager-button-count">13.5</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Steven Crawford" data-confrontation="Ronald Stewart vs Steven Crawford" data-wager-count="1.0005" data-score="0:14"><span>Steven Crawford</span><span class="sport-table-wager-button-count">1.0005</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+25</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-03"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Peter Wells</span><span class="sport-table-title-team">Tyrone Norman</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>0</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Peter Wells" data-confrontation="Peter Wells vs Tyrone Norman" data-wager-count="2.10" data-score="0:0"><span>Peter Wells</span><span class="sport-table-wager-button-count">2.10</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Tyrone Norman" data-confrontation="Peter Wells vs Tyrone Norman" data-wager-count="1.68" data-score="0:0"><span>Tyrone Norman</span><span class="sport-table-wager-button-count">1.68</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+46</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-03"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Emily Sanders</span><span class="sport-table-title-team">Mary Clarke</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>15</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Emily Sanders" data-confrontation="Emily Sanders vs Mary Clarke" data-wager-count="1.25" data-score="0:15"><span>Emily Sanders</span><span class="sport-table-wager-button-count">1.25</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Mary Clarke" data-confrontation="Emily Sanders vs Mary Clarke" data-wager-count="3.75" data-score="0:15"><span>Mary Clarke</span><span class="sport-table-wager-button-count">3.75</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+51</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-03"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Samuel Simpson</span><span class="sport-table-title-team">Harry Warner</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>2</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Samuel Simpson" data-confrontation="Samuel Simpson vs Harry Warner" data-wager-count="1.25" data-score="0:2"><span>Samuel Simpson</span><span class="sport-table-wager-button-count">1.25</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Harry Warner" data-confrontation="Samuel Simpson vs Harry Warner" data-wager-count="3.75" data-score="0:2"><span>Harry Warner</span><span class="sport-table-wager-button-count">3.75</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+32</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Baseball-->
                        <div class="col-lg-12 isotope-item" data-filter="baseball">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Baseball (2)
                                    </h5>
                                </div>
                            </article>

                            <div class="sport-table-header">
                                <p>Mlb (2)</p>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-05"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Buffalo Bisons</span><span class="sport-table-title-team">Lehigh Valley Ironpigs</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>0</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Buffalo Bisons" data-confrontation="Buffalo Bisons vs Lehigh Valley Ironpigs" data-wager-count="13.5" data-score="0:0"><span>Buffalo Bisons</span><span class="sport-table-wager-button-count">13.5</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Lehigh Valley Ironpigs" data-confrontation="Buffalo Bisons vs Lehigh Valley Ironpigs" data-wager-count="1.0005" data-score="0:0"><span>Lehigh Valley Ironpigs</span><span class="sport-table-wager-button-count">1.0005</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+25</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-05"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Syracuse Chiefs</span><span class="sport-table-title-team">Toledo Mud Hens</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>0</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Syracuse Chiefs" data-confrontation="Syracuse Chiefs vs Toledo Mud Hens" data-wager-count="2.10" data-score="0:0"><span>Syracuse Chiefs</span><span class="sport-table-wager-button-count">2.10</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Toledo Mud Hens" data-confrontation="Syracuse Chiefs vs Toledo Mud Hens" data-wager-count="1.68" data-score="0:0"><span>Toledo Mud Hens</span><span class="sport-table-wager-button-count">1.68</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+46</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Table tennis-->
                        <div class="col-lg-12 isotope-item" data-filter="ping-pong">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Table Tennis (2)
                                    </h5>
                                </div>
                            </article>

                            <div class="sport-table-header">
                                <p>World Championship (2)</p>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-02"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Francis Hart</span><span class="sport-table-title-team">John Ramsey</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>3</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>2</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Francis Hart" data-confrontation="Francis Hart vs John Ramsey" data-wager-count="3.5" data-score="3:2"><span>Francis Hart</span><span class="sport-table-wager-button-count">3.5</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="John Ramsey" data-confrontation="Francis Hart vs John Ramsey" data-wager-count="2.65" data-score="3:2"><span>John Ramsey</span><span class="sport-table-wager-button-count">2.65</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+16</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-02"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Syracuse Chiefs</span><span class="sport-table-title-team">Toledo Mud Hens</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>0</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Syracuse Chiefs" data-confrontation="Syracuse Chiefs vs Toledo Mud Hens" data-wager-count="2.60" data-score="0:0"><span>Syracuse Chiefs</span><span class="sport-table-wager-button-count">2.60</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Toledo Mud Hens" data-confrontation="Syracuse Chiefs vs Toledo Mud Hens" data-wager-count="1.14" data-score="0:0"><span>Toledo Mud Hens</span><span class="sport-table-wager-button-count">1.14</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+32</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Cycling-->
                        <div class="col-lg-12 isotope-item" data-filter="cycling">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Cycling (2)
                                    </h5>
                                </div>
                            </article>

                            <div class="sport-table-header">
                                <p>UCI Road world Championship (2)</p>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-10"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Donald Simpson</span><span class="sport-table-title-team">Joshua McKenzie</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>0</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>1</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Donald Simpson" data-confrontation="Donald Simpson vs Joshua McKenzie" data-wager-count="1.98" data-score="0:1"><span>Donald Simpson</span><span class="sport-table-wager-button-count">1.98</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Joshua McKenzie" data-confrontation="Donald Simpson vs Joshua McKenzie" data-wager-count="3.54" data-score="0:1"><span>Joshua McKenzie</span><span class="sport-table-wager-button-count">3.54</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+15</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-center row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                <div class="sprite sprite-sport-icon-10"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-4 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left"><span class="sport-table-title-team">Joseph Tyler</span><span class="sport-table-title-team">Clifford Ball</span></div>
                                                <div class="sport-table-title-item sport-table-title-item-right"><span class="sport-table-title-score"><span>1</span></span>
                                                    <!--span.sport-table-title-team= obj.team[1][0]--><span class="sport-table-title-score"><span>0</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-7">
                                            <div class="sport-table-wager sport-table-wager-double"><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Joseph Tyler" data-confrontation="Joseph Tyler vs Clifford Ball" data-wager-count="4.05" data-score="1:0"><span>Joseph Tyler</span><span class="sport-table-wager-button-count">4.05</span></a><a class="place-link sport-table-wager-button" href="#" target="_self" data-team-name="Clifford Ball" data-confrontation="Joseph Tyler vs Clifford Ball" data-wager-count="1.14" data-score="1:0"><span>Clifford Ball</span><span class="sport-table-wager-button-count">1.14</span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-1 col-lg-1">
                                            <div class="sport-table-bonus"><span class="sport-table-bonus-count">+65</span><span class="sport-table-bonus-icon material-icons-chevron_right"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest News-->
    <section class="section section-md bg-gray-100" style="display: none;">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-12">
                    <div class="row row-30">
                        <div class="col-md-6 col-lg-4">
                            <article class="post-badly">
                                <div class="post-badly-image"><a href="#"><img src="images/betting-news-01-370x180.jpg" alt="" width="370" height="180"/></a></div>
                                <div class="post-badly-body">
                                    <div class="post-badly-body-top">
                                        <div class="post-badly-team"><span>Manchester United</span><span>Leicester City</span></div>
                                        <div class="post-badly-time"><span class="icon mdi mdi-clock"></span><a href="#">April 15, 2019</a></div>
                                    </div>
                                    <div class="post-badly-body-bottom">
                                        <ul class="post-badly-wager">
                                            <li class="post-badly-wager-item"><a class="post-badly-wager-link" href="#"><span class="post-badly-wager-score">1</span><span class="post-badly-wager-count">3.40</span></a></li>
                                            <li class="post-badly-wager-item"><a class="post-badly-wager-link" href="#"><span class="post-badly-wager-score">X</span><span class="post-badly-wager-count">3.25</span></a></li>
                                            <li class="post-badly-wager-item"><a class="post-badly-wager-link" href="#"><span class="post-badly-wager-score">2</span><span class="post-badly-wager-count">2.25</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <article class="post-badly">
                                <div class="post-badly-image"><a href="#"><img src="images/betting-news-02-370x180.jpg" alt="" width="370" height="180"/></a></div>
                                <div class="post-badly-body">
                                    <div class="post-badly-body-top">
                                        <div class="post-badly-team"><span>Esther Burns</span><span>Jessica Norris</span></div>
                                        <div class="post-badly-time"><span class="icon mdi mdi-clock"></span><a href="#">April 15, 2019</a></div>
                                    </div>
                                    <div class="post-badly-body-bottom">
                                        <ul class="post-badly-wager post-badly-wager-duo">
                                            <li class="post-badly-wager-item"><a class="post-badly-wager-link" href="#"><span class="post-badly-wager-score">1</span><span class="post-badly-wager-count">1.28</span></a></li>
                                            <li class="post-badly-wager-item"><a class="post-badly-wager-link" href="#"><span class="post-badly-wager-score">2</span><span class="post-badly-wager-count">3.60</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <article class="post-badly">
                                <div class="post-badly-image"><a href="#"><img src="images/betting-news-03-370x180.jpg" alt="" width="370" height="180"/></a></div>
                                <div class="post-badly-body">
                                    <div class="post-badly-body-top">
                                        <div class="post-badly-team"><span>Lesley Moody</span><span>Christopher Benson</span></div>
                                        <div class="post-badly-time"><span class="icon mdi mdi-clock"></span><a href="#">April 15, 2019</a></div>
                                    </div>
                                    <div class="post-badly-body-bottom">
                                        <ul class="post-badly-wager post-badly-wager-duo">
                                            <li class="post-badly-wager-item"><a class="post-badly-wager-link" href="#"><span class="post-badly-wager-score">1</span><span class="post-badly-wager-count">1.28</span></a></li>
                                            <li class="post-badly-wager-item"><a class="post-badly-wager-link" href="#"><span class="post-badly-wager-score">2</span><span class="post-badly-wager-count">3.60</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row row-50">
                        <div class="col-lg-12">
                            <div class="promotion">
                                <h4>PROMOTION</h4>
                            </div>
                            <article class="banner banner-lg context-dark">
                                <div class="banner-inner">
                                    <a href="#"><img  src="images/banner.jpg" id="bannerimg" alt="" width="1170" height="397"/></a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
<div class="modal-betslip" id="betslipModal"  >
    <div class="mod-KambiBC-betslip-container KambiBC-util-no-touchevents KambiBC-util-windows10 KambiBC-util-chrome KambiBC-util-chrome83 KambiBC-util-locale-en_GB KambiBC-util-single-column-layout KambiBC-util-desktop KambiBC-util-sticky-content KambiBC-util-route-home mod-KambiBC-betslip-container--maximized mod-KambiBC-betslip-container--pinnable mod-KambiBC-betslip-container--combination-tab-selected mod-KambiBC-betslip-container--compressed mod-KambiBC-betslip-container--has-outcomes" id="mod-KambiBC-betslip-container" data-eq-state="loaded layoutWide betslipDetached layoutExtraWide">
        <div class="mod-KambiBC-betslip__outer-wrapper" style="max-height: calc(100vh - 0px);">
            <div class="mod-KambiBC-betslip mod-KambiBC-js-betslip mod-KambiBC-betslip--legacy-transitions" style="bottom: 0px; max-height: calc(100vh - 0px); height: auto;">
                <div class="mod-KambiBC-betslip__wrapper">
                    <div class="mod-KambiBC-betslip__overlay"></div>
                    <header class="mod-KambiBC-betslip__header">
                        <h2 class="mod-KambiBC-betslip__header-tab-title">Multiples</h2>
                        <div class="mod-KambiBC-betslip__header-outcome-odds-container">
                            <span class="mod-KambiBC-betslip__header-outcome-count">&nbsp;(7)</span>
                        </div>
                        <div class="mod-KambiBC-betslip__header-spinner-container"></div>
                        <div class="mod-KambiBC-betslip__header-buttons">
                            <button class="mod-KambiBC-betslip__header-btn mod-KambiBC-betslip__header-toggle-betslip-btn" data-touch-feedback="true" title="Minimize" type="button" id="min_max">
                                <span class="mod-KambiBC-betslip__header-btn-txt">Minimize</span>
                            </button>
                        </div>
                    </header>
                    <div class="mod-KambiBC-betslip__content tabs-custom" style="">
                        <div class="mod-KambiBC-betslip__tabs">
                            <div class="KambiBC-tabs" data-tabs="true">
                                <div class="KambiBC-tabs__tabs-wrapper KambiBC-tabs__tabs-wrapper--center">
                                    <div class="KambiBC-scroller">
                                        <div class="KambiBC-scroller-wrapper">
                                            <ul theme="[object Object]" class="nav-tabs KambiBC-tabs__tabs KambiBC-tabs__container KambiBC-tabs__centerer KambiBC-tabs__centerer--enabled" role="tablist">
                                                <li class="KambiBC-tabs__tab KambiBC-tabs__tab--selected" >
                                                        <span class="KambiBC-tabs__tab_title">
                                                          <button class="tablinks" onclick="openCity(event, 'tabs-1')" id="defaultOpen">Singles</button>
                                                            <!-- <a href="#tabs-1" data-toggle="tab">Singles</a> --></span>
                                                </li>

                                                <li class="KambiBC-tabs__tab " >
                                                        <span class="KambiBC-tabs__tab_title">
                                                          <!-- <a href="#tabs-2" data-toggle="tab"></a> -->
                                                        <button class="tablinks" onclick="openCity(event, 'tabs-2')">Multiples</button>
                                                        </span>
                                                </li>
                                                <li class="KambiBC-tabs__tab" >
                                                        <span class="KambiBC-tabs__tab_title">
                                                          <button class="tablinks" onclick="openCity(event, 'tabs-3')">Permutations</button>
                                                        </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="mod-KambiBC-betslip__clear-btn-wrapper">
                            <button class="mod-KambiBC-betslip__clear-btn" id="betslip_clear-btn" type="button">Clear betslip</button>
                        </div>
                        <div class="mod-KambiBC-betslip__scrollable-content tab-content" >
                            <!--Tab Pane 1 -->

                            <div class="tabcontent   active" id="tabs-1">
                                <div class="mod-KambiBC-betslip__tab-content">
                                    <ul class="mod-KambiBC-betslip__outcome-list" id="betsliplist">
                                        <li class="mod-KambiBC-betslip__outcome mod-KambiBC-betslip__outcome--has-stake-input" id="betslipdesc" style="display: none;">
                                            <div class="mod-KambiBC-betslip__outcome__content-wrapper  betappend">
                                                <button class="mod-KambiBC-betslip-outcome__close-btn" onclick="$(this).closest('li').remove();betCalculate();" data-touch-feedback="true"><span class="mod-KambiBC-betslip-outcome__close-btn-text">Close</span></button>
                                                <div class="mod-KambiBC-betslip-outcome__content">
                                                    <section class="mod-KambiBC-betslip-outcome__description">
                                                        <div class="mod-KambiBC-betslip-outcome__outcome-info">
                                                            <div>
                                                                <!-- <div class="mod-KambiBC-betslip-outcome__live-label-container"><span class="mod-KambiBC-betslip-outcome__live-label mod-KambiBC-betslip-outcome__live-label--visible">LIVE</span>&nbsp;</div>
                                                                <span class="mod-KambiBC-betslip-outcome__outcome-label">Draw</span> -->
                                                                <span class="mod-KambiBC-betslip-outcome__outcome-label modal-sport-wager" id="betname"></span>
                                                            </div>
                                                            <div>
                                                                <p class="mod-KambiBC-betslip-outcome__criteria">Full Time</p>

                                                            </div>
                                                        </div>
                                                        <!-- <a class="mod-KambiBC-betslip-outcome__event-link" data-source="betslip" href="#event/live/1006459827" rel="external">Charlton Athletic - Reading</a> -->
                                                        <p class="modal-sport-confrontation" id="matchname"></p>


                                                    </section>
                                                    <section class="mod-KambiBC-betslip-outcome__stake-container">
                                                        <div class="mod-KambiBC-betslip-outcome__odds-container">
                                                            <div class="mod-KambiBC-betslip-outcome__actions-dialouge-container">
                                                                <div class="mod-KambiBC-betslip-outcome-item__actions-dialogue" data-touch-feedback="true">
                                                                    <span class="mod-KambiBC-betslip-outcome-item__actions-dialogue__progress"></span>
                                                                    <div class="mod-KambiBC-betslip-outcome-item__actions-dialogue__change-text"></div>
                                                                </div>
                                                            </div>
                                                            <span class="mod-KambiBC-betslip-outcome__odds mod-KambiBC-betslip-outcome__odds--changing mod-KambiBC-betslip-outcome__odds--increasing modal-sport-wager-count" id="odds"></span><span class="mod-KambiBC-betslip-outcome__boosted-odds"></span>
                                                        </div>
                                                        <div class="mod-KambiBC-betslip-outcome__stake-input-container">
                                                            <div class="mod-KambiBC-betslip-outcome__stake-label mod-KambiBC-js-betslip-outcome__stake-label"></div>
                                                            <div class="mod-KambiBC-betslip-outcome__stake-input">
                                                                <div class="mod-KambiBC-stake-input__container"><input autocomplete="off" class="mod-KambiBC-stake-input mod-KambiBC-js-stake-input" id="mod-KambiBC-betslip-stake-input-outcome-2763068864" maxlength="7" pattern="^[0-9]*[.,]{0,1}[0-9]{0,2}$" name="menueng[]" placeholder="$0.00" type="text" value="" onblur="betCalculate()"></div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                    <div class="mod-KambiBC-betslip__validation-errors">
                                        <!-- <div class="mod-KambiBC-betslip__validation-error">
                                           <button class="mod-KambiBC-betslip__validation-error__close-btn"></button>
                                           <p class="mod-KambiBC-betslip__validation-error__description">Sorry, the selected outcomes cannot be combined</p>
                                        </div> -->
                                    </div>
                                    <ul class="mod-KambiBC-betslip__system-stake-input-list">
                                        <li class="mod-KambiBC-betslip__system-stake-input">
                                            <!-- <div class="mod-KambiBC-betslip-system-stake-wrapper">
                                               <label class="mod-KambiBC-betslip-system-stake-label" for="mod-KambiBC-betslip-stake-input-combination">Sevenfold</label><span class="mod-KambiBC-betslip-system-stake-combination-count"></span>
                                               <div class="mod-KambiBC-betslip-system-stake-input">
                                                  <div class="mod-KambiBC-stake-input__container"><input autocomplete="off" class="mod-KambiBC-stake-input mod-KambiBC-js-stake-input" id="mod-KambiBC-betslip-stake-input-combination" maxlength="7" pattern="^[0-9]*[.,]{0,1}[0-9]{0,2}$" placeholder="€0.00" type="text" value=""></div>
                                               </div>
                                               <div class="mod-KambiBC-betslip-each-way"></div>
                                            </div> -->
                                            <div class="mod-KambiBC-betslip-system-mobile-keyboard"></div>
                                            <section class="mod-KambiBC-betslip-system-details"></section>
                                        </li>
                                    </ul>
                                    <ul class="mod-KambiBC-betslip__system-package-stake-input-list"></ul>
                                    <form method="post" id="form1" name="form1" enctype="multipart/form-data">
                                        <div class="mod-KambiBC-betslip__summary">
                                            <div class="mod-KambiBC-betslip-summary__row">
                                                <div class="mod-KambiBC-betslip-summary__label">Total Stakes:</div>
                                                <!-- <div class="mod-KambiBC-betslip-summary__value"><span class="mod-KambiBC-betslip-summary__total-odds-value" id="totalstakes"></span></div> -->
                                                <input type="text" name="total_stakes" id="totalstakes" style="border: none;background-color: #222222;color: #ffff;text-align:right" readonly>
                                            </div>
                                            <div class="mod-KambiBC-betslip-summary__place-bet-content">
                                                <div class="mod-KambiBC-betslip-summary__info">
                                                    <div class="mod-KambiBC-betslip-summary__row mod-KambiBC-betslip-summary__payout">
                                                        <div class="mod-KambiBC-betslip-summary__label">Potential Returns:</div>
                                                        <!-- <div class="mod-KambiBC-betslip-summary__value">€<span class="mod-KambiBC-js-betslip-summary__potential-payout-value" id="totalamnt">0.00</span></div> -->
                                                        <input type="text" name="total_potential" id="totalamnt" style="border: none;    background-color: #222222;color: #ffff;" readonly>

                                                        <input type="hidden" name="oddsname" id="oddsname" style="border: none;    background-color: #222222;color: #ffff;" readonly>

                                                        <input type="hidden" name="matchname1" id="matchname1" style="border: none;    background-color: #222222;color: #ffff;" readonly>

                                                        <input type="hidden" name="fodds" id="fodds" style="border: none;    background-color: #222222;color: #ffff;" readonly>
                                                        <input type="hidden" name="stakes" id="fodds" style="border: none;    background-color: #222222;color: #ffff;" readonly>
                                                    </div>
                                                </div>
                                                <div class="mod-KambiBC-betslip__place-bet-button-wrapper"><button type="submit" name="place_bet" id="place_bet" class="mod-KambiBC-betslip__place-bet-btn" data-touch-feedback="true">Place bet</button></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!--End Tab Pane 1-->
                            <!--Tab Pane 2 -->
                            <div class="tabcontent   " id="tabs-2">
                                <div class="mod-KambiBC-betslip__tab-content">
                                    <ul class="mod-KambiBC-betslip__outcome-list">

                                        <li class="mod-KambiBC-betslip__outcome mod-KambiBC-betslip__outcome--closed">
                                            <div class="mod-KambiBC-betslip__outcome__content-wrapper ">
                                                <button class="mod-KambiBC-betslip-outcome__close-btn" data-touch-feedback="true"><span class="mod-KambiBC-betslip-outcome__close-btn-text">Close</span></button>
                                                <div class="mod-KambiBC-betslip-outcome__content">
                                                    <section class="mod-KambiBC-betslip-outcome__description">
                                                        <div class="mod-KambiBC-betslip-outcome__outcome-info">
                                                            <div>
                                                                <div class="mod-KambiBC-betslip-outcome__live-label-container"><span class="mod-KambiBC-betslip-outcome__live-label mod-KambiBC-betslip-outcome__live-label--visible">LIVE</span>&nbsp;</div>
                                                                <span class="mod-KambiBC-betslip-outcome__outcome-label">Toronto Awaba FC</span>
                                                            </div>
                                                            <div>
                                                                <p class="mod-KambiBC-betslip-outcome__criteria">Full Time</p>
                                                            </div>
                                                        </div>
                                                        <a class="mod-KambiBC-betslip-outcome__event-link" data-source="betslip" href="#event/live/1006528806" rel="external">Singleton Strikers FC - Toronto Awaba FC</a>
                                                    </section>
                                                    <section class="mod-KambiBC-betslip-outcome__stake-container">
                                                        <div class="mod-KambiBC-betslip-outcome__odds-container">
                                                            <div class="mod-KambiBC-betslip-outcome__actions-dialouge-container">
                                                                <div class="mod-KambiBC-betslip-outcome-item__actions-dialogue" data-touch-feedback="true">
                                                                    <span class="mod-KambiBC-betslip-outcome-item__actions-dialogue__progress"></span>
                                                                    <div class="mod-KambiBC-betslip-outcome-item__actions-dialogue__change-text"></div>
                                                                </div>
                                                            </div>
                                                            <span class="mod-KambiBC-betslip-outcome__odds">Closed</span><span class="mod-KambiBC-betslip-outcome__boosted-odds"></span>
                                                        </div>
                                                        <div class="mod-KambiBC-betslip-outcome__stake-input-container">
                                                            <div class="mod-KambiBC-betslip-outcome__stake-label mod-KambiBC-js-betslip-outcome__stake-label"></div>
                                                            <div class="mod-KambiBC-betslip-outcome__stake-input"></div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mod-KambiBC-betslip__outcome">
                                            <div class="mod-KambiBC-betslip__outcome__content-wrapper ">
                                                <button class="mod-KambiBC-betslip-outcome__close-btn" data-touch-feedback="true"><span class="mod-KambiBC-betslip-outcome__close-btn-text">Close</span></button>
                                                <div class="mod-KambiBC-betslip-outcome__content">
                                                    <section class="mod-KambiBC-betslip-outcome__description">
                                                        <div class="mod-KambiBC-betslip-outcome__outcome-info">
                                                            <div>
                                                                <div class="mod-KambiBC-betslip-outcome__live-label-container"><span class="mod-KambiBC-betslip-outcome__live-label mod-KambiBC-betslip-outcome__live-label--visible">LIVE</span>&nbsp;</div>
                                                                <span class="mod-KambiBC-betslip-outcome__outcome-label">Northern Rangers</span>
                                                            </div>
                                                            <div>
                                                                <p class="mod-KambiBC-betslip-outcome__criteria">Full Time</p>
                                                            </div>
                                                        </div>
                                                        <a class="mod-KambiBC-betslip-outcome__event-link" data-source="betslip" href="#event/live/1006528805" rel="external">Glenorchy Knights - Northern Rangers</a>
                                                    </section>
                                                    <section class="mod-KambiBC-betslip-outcome__stake-container">
                                                        <div class="mod-KambiBC-betslip-outcome__odds-container">
                                                            <div class="mod-KambiBC-betslip-outcome__actions-dialouge-container">
                                                                <div class="mod-KambiBC-betslip-outcome-item__actions-dialogue" data-touch-feedback="true">
                                                                    <span class="mod-KambiBC-betslip-outcome-item__actions-dialogue__progress"></span>
                                                                    <div class="mod-KambiBC-betslip-outcome-item__actions-dialogue__change-text"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mod-KambiBC-betslip-outcome__stake-input-container">
                                                            <div class="mod-KambiBC-betslip-outcome__stake-label mod-KambiBC-js-betslip-outcome__stake-label"></div>
                                                            <div class="mod-KambiBC-betslip-outcome__stake-input"></div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </li>


                                    </ul>
                                    <div class="mod-KambiBC-betslip__validation-errors">
                                        <div class="mod-KambiBC-betslip__validation-error">
                                            <button class="mod-KambiBC-betslip__validation-error__close-btn"></button>
                                            <p class="mod-KambiBC-betslip__validation-error__description">Sorry, the selected outcomes cannot be combined</p>
                                        </div>
                                    </div>
                                    <ul class="mod-KambiBC-betslip__system-stake-input-list">
                                        <li class="mod-KambiBC-betslip__system-stake-input">
                                            <div class="mod-KambiBC-betslip-system-stake-wrapper">
                                                <label class="mod-KambiBC-betslip-system-stake-label" for="mod-KambiBC-betslip-stake-input-combination">Sevenfold</label><span class="mod-KambiBC-betslip-system-stake-combination-count"></span>
                                                <div class="mod-KambiBC-betslip-system-stake-input">
                                                    <div class="mod-KambiBC-stake-input__container"><input autocomplete="off" class="mod-KambiBC-stake-input mod-KambiBC-js-stake-input" id="mod-KambiBC-betslip-stake-input-combination" maxlength="7" pattern="^[0-9]*[.,]{0,1}[0-9]{0,2}$" placeholder="€0.00" type="text" value=""></div>
                                                </div>
                                                <div class="mod-KambiBC-betslip-each-way"></div>
                                            </div>
                                            <div class="mod-KambiBC-betslip-system-mobile-keyboard"></div>
                                            <section class="mod-KambiBC-betslip-system-details"></section>
                                        </li>
                                    </ul>
                                    <ul class="mod-KambiBC-betslip__system-package-stake-input-list"></ul>
                                    <div class="mod-KambiBC-betslip__summary">
                                        <div class="mod-KambiBC-betslip-summary__row">
                                            <div class="mod-KambiBC-betslip-summary__label">Total Stakes:</div>
                                            <div class="mod-KambiBC-betslip-summary__value"><span class="mod-KambiBC-betslip-summary__total-odds-value" id="totalstakes"></span></div>
                                        </div>
                                        <div class="mod-KambiBC-betslip-summary__place-bet-content">
                                            <div class="mod-KambiBC-betslip-summary__info">
                                                <div class="mod-KambiBC-betslip-summary__row mod-KambiBC-betslip-summary__payout">
                                                    <div class="mod-KambiBC-betslip-summary__label">Potential Returns:</div>
                                                    <div class="mod-KambiBC-betslip-summary__value"><span class="mod-KambiBC-js-betslip-summary__potential-payout-value">€0.00</span></div>
                                                </div>
                                            </div>
                                            <div class="mod-KambiBC-betslip__place-bet-button-wrapper"><button class="mod-KambiBC-betslip__place-bet-btn KambiBC-disabled" data-touch-feedback="true" disabled="" type="button">Place bet</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Tab Pane 2-->
                            <!--Tab Pane 3 -->
                            <div class="tabcontent   " id="tabs-3">
                                <div class="mod-KambiBC-betslip__tab-content">
                                    <ul class="mod-KambiBC-betslip__outcome-list">
                                        <li class="mod-KambiBC-betslip__outcome mod-KambiBC-betslip__outcome--suspended">
                                            <div class="mod-KambiBC-betslip__outcome__content-wrapper ">
                                                <button class="mod-KambiBC-betslip-outcome__close-btn" data-touch-feedback="true"><span class="mod-KambiBC-betslip-outcome__close-btn-text">Close</span></button>
                                                <div class="mod-KambiBC-betslip-outcome__content">
                                                    <section class="mod-KambiBC-betslip-outcome__description">
                                                        <div class="mod-KambiBC-betslip-outcome__outcome-info">
                                                            <div>
                                                                <div class="mod-KambiBC-betslip-outcome__live-label-container"><span class="mod-KambiBC-betslip-outcome__live-label mod-KambiBC-betslip-outcome__live-label--visible">LIVE</span>&nbsp;</div>
                                                                <span class="mod-KambiBC-betslip-outcome__outcome-label">Draw</span>
                                                            </div>
                                                            <div>
                                                                <p class="mod-KambiBC-betslip-outcome__criteria">Full Time</p>
                                                            </div>
                                                        </div>
                                                        <a class="mod-KambiBC-betslip-outcome__event-link" data-source="betslip" href="#event/live/1006544817" rel="external">Hualian (W) - Taichung Blue Whale (W)</a>
                                                    </section>
                                                    <section class="mod-KambiBC-betslip-outcome__stake-container">
                                                        <div class="mod-KambiBC-betslip-outcome__odds-container">
                                                            <div class="mod-KambiBC-betslip-outcome__actions-dialouge-container">
                                                                <div class="mod-KambiBC-betslip-outcome-item__actions-dialogue" data-touch-feedback="true">
                                                                    <span class="mod-KambiBC-betslip-outcome-item__actions-dialogue__progress"></span>
                                                                    <div class="mod-KambiBC-betslip-outcome-item__actions-dialogue__change-text"></div>
                                                                </div>
                                                            </div>
                                                            <span class="mod-KambiBC-betslip-outcome__odds mod-KambiBC-betslip-outcome__odds--increasing">Suspended</span><span class="mod-KambiBC-betslip-outcome__boosted-odds"></span>
                                                        </div>
                                                        <div class="mod-KambiBC-betslip-outcome__stake-input-container">
                                                            <div class="mod-KambiBC-betslip-outcome__stake-label mod-KambiBC-js-betslip-outcome__stake-label"></div>
                                                            <div class="mod-KambiBC-betslip-outcome__stake-input"></div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mod-KambiBC-betslip__outcome">
                                            <div class="mod-KambiBC-betslip__outcome__content-wrapper ">
                                                <button class="mod-KambiBC-betslip-outcome__close-btn" data-touch-feedback="true"><span class="mod-KambiBC-betslip-outcome__close-btn-text">Close</span></button>
                                                <div class="mod-KambiBC-betslip-outcome__content">
                                                    <section class="mod-KambiBC-betslip-outcome__description">
                                                        <div class="mod-KambiBC-betslip-outcome__outcome-info">
                                                            <div>
                                                                <div class="mod-KambiBC-betslip-outcome__live-label-container"><span class="mod-KambiBC-betslip-outcome__live-label mod-KambiBC-betslip-outcome__live-label--visible">LIVE</span>&nbsp;</div>
                                                                <span class="mod-KambiBC-betslip-outcome__outcome-label">FC Slovan Rosice</span>
                                                            </div>
                                                            <div>
                                                                <p class="mod-KambiBC-betslip-outcome__criteria">Full Time</p>
                                                            </div>
                                                        </div>
                                                        <a class="mod-KambiBC-betslip-outcome__event-link" data-source="betslip" href="#event/live/1006548210" rel="external">FC Slovan Rosice - Apos Blansko</a>
                                                    </section>
                                                    <section class="mod-KambiBC-betslip-outcome__stake-container">
                                                        <div class="mod-KambiBC-betslip-outcome__odds-container">
                                                            <div class="mod-KambiBC-betslip-outcome__actions-dialouge-container">
                                                                <div class="mod-KambiBC-betslip-outcome-item__actions-dialogue" data-touch-feedback="true">
                                                                    <span class="mod-KambiBC-betslip-outcome-item__actions-dialogue__progress"></span>
                                                                    <div class="mod-KambiBC-betslip-outcome-item__actions-dialogue__change-text"></div>
                                                                </div>
                                                            </div>
                                                            <span class="mod-KambiBC-betslip-outcome__odds mod-KambiBC-betslip-outcome__odds--changing mod-KambiBC-betslip-outcome__odds--increasing">3.95</span><span class="mod-KambiBC-betslip-outcome__boosted-odds"></span>
                                                        </div>
                                                        <div class="mod-KambiBC-betslip-outcome__stake-input-container">
                                                            <div class="mod-KambiBC-betslip-outcome__stake-label mod-KambiBC-js-betslip-outcome__stake-label"></div>
                                                            <div class="mod-KambiBC-betslip-outcome__stake-input"></div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="mod-KambiBC-betslip__validation-errors">
                                        <div class="mod-KambiBC-betslip__validation-error">
                                            <button class="mod-KambiBC-betslip__validation-error__close-btn"></button>
                                            <p class="mod-KambiBC-betslip__validation-error__description">Please note that some of the outcomes are related and cannot be combined. Multiples including the related outcomes have been removed.</p>
                                        </div>
                                    </div>
                                    <ul class="mod-KambiBC-betslip__system-stake-input-list">
                                        <li class="mod-KambiBC-betslip__system-stake-input">
                                            <div class="mod-KambiBC-betslip-system-stake-wrapper">
                                                <label class="mod-KambiBC-betslip-system-stake-label" for="mod-KambiBC-betslip-stake-input-single">Singles</label><span class="mod-KambiBC-betslip-system-stake-combination-count">2 x</span>
                                                <div class="mod-KambiBC-betslip-system-stake-input">
                                                    <div class="mod-KambiBC-stake-input__container"><input autocomplete="off" class="mod-KambiBC-stake-input mod-KambiBC-js-stake-input" id="mod-KambiBC-betslip-stake-input-single" maxlength="7" pattern="^[0-9]*[.,]{0,1}[0-9]{0,2}$" placeholder="$0.00" type="text" value=""></div>
                                                </div>
                                                <div class="mod-KambiBC-betslip-each-way"></div>
                                            </div>
                                            <div class="mod-KambiBC-betslip-system-mobile-keyboard"></div>
                                            <section class="mod-KambiBC-betslip-system-details"></section>
                                        </li>
                                        <li class="mod-KambiBC-betslip__system-stake-input">
                                            <div class="mod-KambiBC-betslip-system-stake-wrapper">
                                                <label class="mod-KambiBC-betslip-system-stake-label" for="mod-KambiBC-betslip-stake-input-double">Double</label><span class="mod-KambiBC-betslip-system-stake-combination-count">1 x</span>
                                                <div class="mod-KambiBC-betslip-system-stake-input">
                                                    <div class="mod-KambiBC-stake-input__container"><input autocomplete="off" class="mod-KambiBC-stake-input mod-KambiBC-js-stake-input" id="mod-KambiBC-betslip-stake-input-double" maxlength="7" pattern="^[0-9]*[.,]{0,1}[0-9]{0,2}$" placeholder="$0.00" type="text" value=""></div>
                                                </div>
                                                <div class="mod-KambiBC-betslip-each-way"></div>
                                            </div>
                                            <div class="mod-KambiBC-betslip-system-mobile-keyboard"></div>
                                            <section class="mod-KambiBC-betslip-system-details"></section>
                                        </li>
                                    </ul>
                                    <ul class="mod-KambiBC-betslip__system-package-stake-input-list"></ul>
                                    <div class="mod-KambiBC-betslip__summary">
                                        <div class="mod-KambiBC-betslip-summary__row">
                                            <div class="mod-KambiBC-betslip-summary__label">Total stake:</div>
                                            <div class="mod-KambiBC-betslip-summary__value">&nbsp;<span>$0.00</span></div>
                                        </div>
                                        <div class="mod-KambiBC-betslip-summary__place-bet-content">
                                            <div class="mod-KambiBC-betslip-summary__info">
                                                <div class="mod-KambiBC-betslip-summary__row mod-KambiBC-betslip-summary__payout">
                                                    <div class="mod-KambiBC-betslip-summary__label">Potential Returns:</div>
                                                    <div class="mod-KambiBC-betslip-summary__value"><span class="mod-KambiBC-js-betslip-summary__potential-payout-value">$0.00</span></div>
                                                </div>
                                            </div>
                                            <div class="mod-KambiBC-betslip__place-bet-button-wrapper"><button class="mod-KambiBC-betslip__place-bet-btn mod-KambiBC-betslip__approve-odds-btn" data-touch-feedback="true" type="button">Approve odds change</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Tab Pane 3-->
                            <div class="mod-KambiBC-betslip__links-wrapper">
                                <div class="mod-KambiBC-betslip-links">
                                    <ul class="mod-KambiBC-betslip-links--navigation"></ul>
                                    <ul class="mod-KambiBC-betslip-links--customer ">
                                        <li><a class="mod-KambiBC-betslip-links--link-customer" data-touch-feedback="true" href="http://888-external-en.custhelp.com/app/answers/detail/a_id/5743/prod/?NativeExternal=true" target="_self">*Maximum payout limits apply</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="KambiBC-widgets-layout KambiBC-has-widgets"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@include('layouts.footer')
<!-- BETslip Model -->

<!--END BETslip Model -->
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
<script src="js/api_up.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/
         jquery/3.3.1/jquery.min.js"></script>

<script>
    function betCalculate() {

        var potentialArr = [];
        var stakeArr = [];

        var totalPotential = 0;
        $('.modal-sport-wager-count').each(function(){
            var potentialVal = $(this).text().replace(/\s/g,'') != '' ? $(this).text().replace(/\s/g,'') : 0;

            potentialArr.push(parseFloat(potentialVal));

        });
        var totalStake = 0;
        $('#betsliplist :input').each(function(){
            var stakeVal = $(this).val().replace(/\s/g,'') != '' ? $(this).val().replace(/\s/g,'') : 0;
            stakeArr.push(parseFloat(stakeVal));
            //console.log(stakeVal);
            totalStake += parseInt(stakeVal);
            $('#totalstakes').val(totalStake);

        });
        var cnt = 3;
        for(var i = 2; i < potentialArr.length; i++){
            var potentialMul = 0;
            potentialMul = (stakeArr[cnt] * potentialArr[i]);
            //console.log(stakeArr[cnt] +'--'+ potentialArr[i]);
            totalPotential = totalPotential + potentialMul;
            cnt = cnt + 2;
        }

        $('.mod-KambiBC-betslip-summary__total-odds-value').text(totalStake);
        $('#totalamnt').val(totalPotential);
    }
</script>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks,kambili;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }


        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
<script>
    $('.KambiBC-tabs__tabs').on('click', 'li', function() {
        $('.KambiBC-tabs__tabs li.KambiBC-tabs__tab--selected').removeClass('KambiBC-tabs__tab--selected');
        $(this).addClass('KambiBC-tabs__tab--selected');
    });
</script>
<script>
    $("#min_max").click(function(){
        $(".mod-KambiBC-betslip__header-btn").toggleClass("rotate");
        $(".mod-KambiBC-betslip__content").toggleClass("hide");
    });
</script>

<script>
    // clear ul list and close popup
    $("#betslip_clear-btn").click(function(){
        $('#betsliplist li:not(:first-child)').remove();
        $("#betslipModal").removeClass("show-betslip");
        $('.mod-KambiBC-betslip-summary__total-odds-value').text('');
        $('#totalamnt').text('');
    });

    // add list in ul with data
    $(".place-link").click(function(){
        if ($('#betslipModal').hasClass("show-betslip")==true){
        }   else {
            $("#betslipModal").addClass("show-betslip");
        }

        var template = $("#betslipdesc").clone().removeAttr("id").html();

        var teamName = $(this).data('team-name'),
            confrontation = $(this).data('confrontation'),
            vager = $(this).data('wager-count'),
            score = $(this).data('score');

        var str = [];
        $('.modal-sport-wager').each(function(){
            str.push($(this).text());
        })

        var serializedData = $('#form1').serialize();

        $.ajax({
            url: "save.php",
            type: "post",
            data: serializedData
        });
        // for dynamic id creation
        var idLength = $("[id^=betslipdesc]").length;
        var className = teamName.replace(/\s/g,'');
        var idLength = idLength+''+className;
        //console.log(idLength);

        var list = '<li class="mod-KambiBC-betslip__outcome mod-KambiBC-betslip__outcome--has-stake-input '+className+'" id="betslipdesc'+idLength+'">'
            +  template + '</li>';

        // check if alrady selected list is there if yes then not add
        if(str.indexOf(teamName) == -1) {
            $("#betsliplist").append(list);
        } else {
            $("."+className).remove();
        }


        //console.log(str.indexOf(teamName));

        $('#betslipdesc'+idLength+' .modal-sport-wager').html(teamName);
        $('#betslipdesc'+idLength+' .modal-sport-wager-count').html(vager);
        $('#betslipdesc'+idLength+' .modal-sport-confrontation').html(confrontation);
        $('#betslipdesc'+idLength+' .modal-sport-live-count').html('[' + score + ']');



        $("#place_bet").click(function(){
            var menueng = [];
            $('input[name="menueng[]"]').each( function() {
                menueng.push(this.value);
            });

            var oddsf = [];
            $('.modal-sport-wager-count').each(function(){
                oddsf.push($(this).text());
            });

            var leaguename = [];
            $('.modal-sport-confrontation').each(function(){
                leaguename.push($(this).text());
            });



            var sendName = JSON.stringify(str);

            $.ajax({
                url: "save.php",
                type: "post",
                data: {name : sendName,menueng : menueng,oddsf : oddsf,leaguename : leaguename},
                success : function(data){
                    alert(data);    /* alerts the response from php. */
                }
            });

        });
    });
</script>

<script>
    $('#sportsLi').addClass("active");
</script>
</body>
</html>
