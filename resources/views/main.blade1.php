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
    <link rel="stylesheet" href="{{asset('/css/custom.css')}}">
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
<?php
//$NFL_h2h = $data['NFL_h2h'];
//$NFL_spreads = $data['NFL_spreads'];
//$NFL_totals = $data['NFL_totals'];
//
//$NHL_h2h = $data['NHL_h2h'];
//$NHL_spreads = $data['NHL_spreads'];
//$NHL_totals = $data['NHL_totals'];
//
//$soccer_h2h = $data['soccer_h2h'];
//$soccer_spreads = $data['soccer_spreads'];
//$soccer_totals = $data['soccer_totals'];

$odds = $data['odds'];
$sports = $data['sports'];
$odds_americanfootball_nfl=array();
$odds_aussierules_afl=array();
$odds_basketball_euroleague=array();
$odds_basketball_nba=array();
$odds_basketball_ncaab=array();
$odds_cricket_big_bash=array();
$odds_cricket_test_match=array();
$odds_icehockey_nhl=array();
$odds_mma_mixed_martial_arts=array();
$odds_rugbyleague_nrl=array();
$odds_soccer_epl=array();
$odds_soccer_uefa_champs_league=array();
$odds_soccer_uefa_europa_league=array();
$odds_soccer_spain_la_liga=array();
$odds_soccer_italy_serie_a=array();
$odds_soccer_germany_bundesliga=array();
$odds_americanfootball_ncaaf=array();
$odds_baseball_mlb=array();
foreach ($odds as $item){
    if($item->sport_key=='americanfootball_nfl'){
        array_push($odds_americanfootball_nfl, $item);
    }if($item->sport_key=='americanfootball_ncaaf'){
        array_push($odds_americanfootball_ncaaf, $item);
    }else if($item->sport_key=='aussierules_afl'){
        array_push($odds_aussierules_afl, $item);
    }else if($item->sport_key=='basketball_euroleague'){
        array_push($odds_basketball_euroleague, $item);
    }else if($item->sport_key=='basketball_nba'){
        array_push($odds_basketball_nba, $item);
    }else if($item->sport_key=='basketball_ncaab'){
        array_push($odds_basketball_ncaab, $item);
    }else if($item->sport_key=='cricket_big_bash'){
        array_push($odds_cricket_big_bash, $item);
    }else if($item->sport_key=='cricket_test_match'){
        array_push($odds_cricket_test_match, $item);
    }else if($item->sport_key=='icehockey_nhl'){
        array_push($odds_icehockey_nhl, $item);
    }else if($item->sport_key=='mma_mixed_martial_arts'){
        array_push($odds_mma_mixed_martial_arts, $item);
    }else if($item->sport_key=='rugbyleague_nrl'){
        array_push($odds_rugbyleague_nrl, $item);
    }else if($item->sport_key=='soccer_epl'){
        array_push($odds_soccer_epl, $item);
    }else if($item->sport_key=='soccer_uefa_champs_league'){
        array_push($odds_soccer_uefa_champs_league, $item);
    }else if($item->sport_key=='soccer_uefa_europa_league'){
        array_push($odds_soccer_uefa_europa_league, $item);
    }else if($item->sport_key=='soccer_spain_la_liga'){
        array_push($odds_soccer_spain_la_liga, $item);
    }else if($item->sport_key=='soccer_italy_serie_a'){
        array_push($odds_soccer_italy_serie_a, $item);
    }else if($item->sport_key=='soccer_germany_bundesliga'){
        array_push($odds_soccer_germany_bundesliga, $item);
    }else if($item->sport_key=='baseball_mlb'){
        array_push($odds_baseball_mlb, $item);
    }
}

$cURLConnection = curl_init();

curl_setopt($cURLConnection, CURLOPT_URL, 'https://fanduel-sportsbook-props-basketball-nba.datafeeds.net/api/json/fanduel-sportsbook-props-regular-speed/v2/basketball/nba/player-assists?api-key=8bc2951fe2f4cf1b67b80127b93799cd');
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($cURLConnection);
$res = json_decode($response, true);
$player_assists = $res['games'];

curl_setopt($cURLConnection, CURLOPT_URL, 'https://fanduel-sportsbook-props-basketball-nba.datafeeds.net/api/json/fanduel-sportsbook-props-regular-speed/v2/basketball/nba/player-points?api-key=8bc2951fe2f4cf1b67b80127b93799cd');
$response1 = curl_exec($cURLConnection);
$res1 = json_decode($response1, true);
$player_points = $res1['games'];

curl_setopt($cURLConnection, CURLOPT_URL, 'https://fanduel-sportsbook-props-basketball-nba.datafeeds.net/api/json/fanduel-sportsbook-props-regular-speed/v2/basketball/nba/player-rebounds?api-key=8bc2951fe2f4cf1b67b80127b93799cd');
$response2 = curl_exec($cURLConnection);
$res2 = json_decode($response2, true);
$player_rebounds = $res2['games'];

curl_close($cURLConnection);
?>
    <!-- All Sports-->
    <section class="section section-sm bg-gray-100">
        <div class="container">
            <div class="row isotope-wrap row-30">
                <!-- Isotope Filters-->
                <div class="col-lg-12">
                    <div class="isotope-filters isotope-filters-horizontal">
                        <button class="isotope-filters-toggle button" data-custom-toggle="#isotope-filters" data-custom-toggle-hide-on-blur="true" data-custom-toggle-disable-on-blur="true">Select<span class="caret"></span></button>
                        <ul class="isotope-filters-list" id="isotope-filters">
                            <li class="isotope-filters-list-item">
                                <a class="isotope-filters-list-link active" data-isotope-filter="*" data-isotope-group="gallery" href="#">
                                    <span class="isotope-filters-list-img">
                                        <span class="sprite sprite-sport-icon-01"></span>
                                    </span>
                                    <span class="isotope-filters-list-text">All sports</span>
{{--                                    <span class="isotope-filters-list-count">29</span>--}}
                                </a>
                            </li>
                            <li class="isotope-filters-list-item">
                                <a class="isotope-filters-list-link " data-isotope-filter="football" data-isotope-group="gallery" href="#">
                                    <span class="isotope-filters-list-img">
                                        <span class="sprite sprite-sport-icon-07"></span>
                                    </span>
                                    <span class="isotope-filters-list-text">Football</span>

                                </a>
                            </li>
                            <li class="isotope-filters-list-item">
                                <a class="isotope-filters-list-link" data-isotope-filter="basketball" data-isotope-group="gallery" href="#">
                                    <span class="isotope-filters-list-img">
                                        <span class="sprite sprite-sport-icon-04"></span>
                                    </span>
                                    <span class="isotope-filters-list-text">Basketball</span>

                                </a>
                            </li>
                            <li class="isotope-filters-list-item">
                                <a class="isotope-filters-list-link" data-isotope-filter="baseball" data-isotope-group="gallery" href="#">
                                    <span class="isotope-filters-list-img">
                                        <span class="sprite sprite-sport-icon-21"></span>
                                    </span>
                                    <span class="isotope-filters-list-text">Baseball</span>

                                </a>
                            </li>
                            <li class="isotope-filters-list-item">
                                <a class="isotope-filters-list-link " data-isotope-filter="soccer" data-isotope-group="gallery" href="#">
                                    <span class="isotope-filters-list-img">
                                        <span class="sprite sprite-sport-icon-20"></span>
                                    </span>
                                    <span class="isotope-filters-list-text">Soccer</span>

                                </a>
                            </li>
                            <li class="isotope-filters-list-item">
                                <a class="isotope-filters-list-link" data-isotope-filter="ice-hockey" data-isotope-group="gallery" href="#">
                                    <span class="isotope-filters-list-img">
                                        <span class="sprite sprite-sport-icon-08"></span>
                                    </span>
                                    <span class="isotope-filters-list-text">Ice Hockey</span>

                                </a>
                            </li>


                        </ul>

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
                                    <h5 class="heading-component-title">Football
                                    </h5>
                                </div>
                            </article>

                            <div class="sport-table-header">
                                <p>NFL</p>
                            </div>
                            <div class="sport-table">
                                @include('table_header')
                                <?php if(sizeof($odds_americanfootball_nfl)){
                                    foreach ($odds_americanfootball_nfl as $item){?>
                                        @include('table_body')
                                <?php }}?>
                            </div>
                            <br>
                            <div class="sport-table-header">
                                <p>NCAAF</p>
                            </div>
                            <div class="sport-table">
                                @include('table_header')
                                <?php if(sizeof($odds_americanfootball_ncaaf)){
                                foreach ($odds_americanfootball_ncaaf as $item){?>
                                @include('table_body')
                                <?php }}?>
                            </div>
                        </div>
                        <!-- Basketball-->
                        <div class="col-lg-12 isotope-item" data-filter="basketball">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Basketball
                                    </h5>
                                </div>
                            </article>
                            <div class="sport-table-header">
                                <p>NBA</p>
                            </div>
                            <div class="sport-table">
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-left row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team"><span>Time</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team"><span>Code</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team">Team</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team"><span>ML</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team"><span>RL</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team"><span>TL</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php if(sizeof($odds_basketball_nba)){
                                foreach ($odds_basketball_nba as $item){?>
                                <div class="sport-table-tr">
                                    <div class="row sport-row align-items-left row-15">
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-icon">
                                                {{--                <div class="sprite sprite-sport-icon-07"></div>--}}
                                                <div>
                                                    <ul class="list-inline list-inline-xs">
                                                        <li><button class="button button-xs button-red-outline player-props" data-id="<?php echo $item->id;?>">+</button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team"><span>#<?php echo $item->id;?></span></span>
                                                    <span class="sport-table-title-team"><span><?php echo gmdate("m/d H:i",$item->commence_time);?></span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team"><span>2004</span></span>
                                                    <span class="sport-table-title-team"><span>2018</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team"><?php echo $item->team1;?></span>
                                                    <span class="sport-table-title-team"><?php echo $item->team2;?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team"><span><?php
                                                            if(json_decode($item->h2h)){
                                                                if(json_decode($item->h2h)[0] > 0) echo "+";
                                                                echo json_decode($item->h2h)[0];
                                                            }
                                                            ?></span></span>
                                                    <span class="sport-table-title-team"><span><?php
                                                            if(json_decode($item->h2h)){
                                                                if(json_decode($item->h2h)[1] > 0) echo "+";
                                                                echo json_decode($item->h2h)[1];
                                                            }
                                                            ?></span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team"><span><?php
                                                            if(json_decode($item->spreads)){
                                                                if(json_decode($item->spreads)->points[0] > 0) echo "+";
                                                                echo json_decode($item->spreads)->points[0]."&nbsp;";
                                                                if(json_decode($item->spreads)->odds[0] > 0) echo "+";
                                                                echo json_decode($item->spreads)->odds[0];
                                                            }
                                                            ?> </span></span>
                                                    <span class="sport-table-title-team"><span><?php
                                                            if(json_decode($item->spreads)){
                                                                if(json_decode($item->spreads)->points[1] > 0) echo "+";
                                                                echo json_decode($item->spreads)->points[1]."&nbsp;";
                                                                if(json_decode($item->spreads)->odds[1] > 0) echo "+";
                                                                echo json_decode($item->spreads)->odds[1];
                                                            }
                                                            ?></span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team"><span><?php
                                                            if(json_decode($item->totals)){
                                                                echo json_decode($item->totals)->position[0]."&nbsp;";
                                                                if(json_decode($item->totals)->points[0] > 0) echo "+";
                                                                echo json_decode($item->totals)->points[0]."&nbsp;";
                                                                if(json_decode($item->totals)->odds[0] > 0) echo "+";
                                                                echo json_decode($item->totals)->odds[0];
                                                            }
                                                            ?></span></span>
                                                    <span class="sport-table-title-team"><span><?php
                                                            if(json_decode($item->totals)){
                                                                echo json_decode($item->totals)->position[1]."&nbsp;";
                                                                if(json_decode($item->totals)->points[1] > 0) echo "+";
                                                                echo json_decode($item->totals)->points[1]."&nbsp;";
                                                                if(json_decode($item->totals)->odds[1] > 0) echo "+";
                                                                echo json_decode($item->totals)->odds[1];
                                                            }
                                                            ?>
                                                            </span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="player-props-table"  id="<?php echo $item->id;?>">
                                                <table class="table table-striped" style="color: black; line-height: 0.6;">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Assists</th>
                                                        <th scope="col">Over</th>
                                                        <th scope="col">Under</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $betType_before = '';
                                                            for($i=0; $i<sizeof($player_assists); $i+=2){
                                                                ?>
                                                        <tr>
                                                        <?php

                                                                if($player_assists[$i]['betType'] !== $betType_before && strpos($player_assists[$i]['homeTeam'], $item->home_team) !== false
                                                                && strpos($player_assists[$i]['awayTeam'], $item->away_team) !== false
                                                                && strpos($player_assists[$i]['betName'], 'Over') !== false && strpos($player_assists[$i]['betType'],'- Assists') !== false){
                                                                    ?>
                                                                        <td><?php echo explode(' - Assists',$player_assists[$i]['betType'])[0];?></td>
                                                                        <td><span>o<?php echo explode('Over ', $player_assists[$i]['betName'])[1];?></span><small><?php echo $player_assists[$i]['betPrice'];?></small></td>
                                                                <?php
                                                                for($j=$i+1; $j<sizeof($player_assists);$j++){
                                                                    if(str_replace('Over','Under',$player_assists[$i]['betName']) == $player_assists[$j]['betName'] && $player_assists[$j]['betType'] == $player_assists[$i]['betType']){
                                                                        ?>
                                                                        <td><span>u<?php echo explode('Under ', $player_assists[$j]['betName'])[1];?></span><small><?php echo $player_assists[$j]['betPrice'];?></small></td>

                                                                        <?php

                                                                    }
                                                                }
                                                                    $betType_before = $player_assists[$i]['betType'];
                                                            }
                                                            ?>
                                                        </tr>
                                                        <?php
                                                            }
                                                        ?>
                                                    </tbody>

                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Points</th>
                                                        <th scope="col">Over</th>
                                                        <th scope="col">Under</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $betType_before = '';
                                                    for($i=0; $i<sizeof($player_points); $i+=2){
                                                    ?>
                                                    <tr>
                                                        <?php

                                                        if($player_points[$i]['betType'] !== $betType_before && strpos($player_points[$i]['homeTeam'], $item->home_team) !== false
                                                        && strpos($player_points[$i]['awayTeam'], $item->away_team) !== false
                                                        && strpos($player_points[$i]['betName'], 'Over') !== false && strpos($player_points[$i]['betType'],'- Points') !== false){
                                                        ?>
                                                        <td><?php echo explode(' - Points',$player_points[$i]['betType'])[0];?></td>
                                                        <td><span>o<?php echo explode('Over ', $player_points[$i]['betName'])[1];?></span><small><?php echo $player_points[$i]['betPrice'];?></small></td>
                                                        <?php
                                                        for($j=$i+1; $j<sizeof($player_points);$j++){
                                                        if(str_replace('Over','Under',$player_points[$i]['betName']) == $player_points[$j]['betName'] && $player_points[$j]['betType'] == $player_points[$i]['betType']){
                                                        ?>
                                                        <td><span>u<?php echo explode('Under ', $player_points[$j]['betName'])[1];?></span><small><?php echo $player_points[$j]['betPrice'];?></small></td>

                                                        <?php

                                                        }
                                                        }
                                                        $betType_before = $player_points[$i]['betType'];
                                                        }
                                                        ?>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                    </tbody>

                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Rebounds</th>
                                                        <th scope="col">Over</th>
                                                        <th scope="col">Under</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $betType_before = '';
                                                    for($i=0; $i<sizeof($player_rebounds); $i+=2){
                                                    ?>
                                                    <tr>
                                                        <?php

                                                        if($player_rebounds[$i]['betType'] !== $betType_before && strpos($player_rebounds[$i]['homeTeam'], $item->home_team) !== false
                                                        && strpos($player_rebounds[$i]['awayTeam'], $item->away_team) !== false
                                                        && strpos($player_rebounds[$i]['betName'], 'Over') !== false  && strpos($player_rebounds[$i]['betType'],'- Rebounds') !== false){
                                                        ?>
                                                        <td><?php echo explode(' - Rebounds',$player_rebounds[$i]['betType'])[0];?></td>
                                                        <td><span>o<?php echo explode('Over ', $player_rebounds[$i]['betName'])[1];?></span><small><?php echo $player_rebounds[$i]['betPrice'];?></small></td>
                                                        <?php
                                                        for($j=$i+1; $j<sizeof($player_rebounds);$j++){
                                                        if(str_replace('Over','Under',$player_rebounds[$i]['betName']) == $player_rebounds[$j]['betName'] && $player_rebounds[$j]['betType'] == $player_rebounds[$i]['betType']){
                                                        ?>
                                                        <td><span>u<?php echo explode('Under ', $player_rebounds[$j]['betName'])[1];?></span><small><?php echo $player_rebounds[$j]['betPrice'];?></small></td>

                                                        <?php

                                                        }
                                                        }
                                                        $betType_before = $player_rebounds[$i]['betType'];
                                                        }
                                                        ?>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php }}?>
                            </div>
                            <br/>

                            <div class="sport-table-header">
                                <p>NCAAB</p>
                            </div>
                            <div class="sport-table">
                                @include('table_header')
                                <?php if(sizeof($odds_basketball_ncaab)){
                                foreach ($odds_basketball_ncaab as $item){?>
                                @include('table_body')
                                <?php }}?>
                            </div>
                        </div>
                        <!-- Baseball-->
                        <div class="col-lg-12 isotope-item" data-filter="baseball">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Baseball
                                    </h5>
                                </div>
                            </article>
                            <div class="sport-table-header">
                                <p>MLB</p>
                            </div>
                            <div class="sport-table">
                                @include('table_header')
                                <?php if(sizeof($odds_baseball_mlb)){
                                foreach ($odds_baseball_mlb as $item){?>
                                @include('table_body')
                                <?php }}?>
                            </div>
                            <br/>
                        </div>
                        <!-- Soccer-->
                        <div class="col-lg-12 isotope-item" data-filter="soccer">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Soccer
                                    </h5>
                                </div>
                            </article>
                            <div class="sport-table-header">
                                <p>EPL</p>
                            </div>
                            <div class="sport-table">
                                @include('table_header')
                                <?php if(sizeof($odds_soccer_epl)){
                                    foreach ($odds_soccer_epl as $item){?>
                                        @include('table_body')
                                <?php }}?>
                            </div>
                            <br>
                            <div class="sport-table-header">
                                <p>UEFA Champions</p>
                            </div>
                            <div class="sport-table">
                                @include('table_header')
                                <?php if(sizeof($odds_soccer_uefa_champs_league)){
                                foreach ($odds_soccer_uefa_champs_league as $item){?>
                                    @include('table_body')
                                <?php }}?>
                            </div>
                            <br>
                            <div class="sport-table-header">
                                <p>UEFA Europa</p>
                            </div>
                            <div class="sport-table">
                                @include('table_header')
                                <?php if(sizeof($odds_soccer_uefa_europa_league)){
                                foreach ($odds_soccer_uefa_europa_league as $item){?>
                                    @include('table_body')
                                <?php }}?>
                            </div>
                            <br>
                            <div class="sport-table-header">
                                <p>La Liga - Spain</p>
                            </div>
                            <div class="sport-table">
                                @include('table_header')
                                <?php if(sizeof($odds_soccer_spain_la_liga)){
                                foreach ($odds_soccer_spain_la_liga as $item){?>
                                    @include('table_body')
                                <?php }}?>
                            </div>
                            <br>
                            <div class="sport-table-header">
                                <p>Serie A - Italy</p>
                            </div>
                            <div class="sport-table">
                                @include('table_header')
                                <?php if(sizeof($odds_soccer_italy_serie_a)){
                                foreach ($odds_soccer_italy_serie_a as $item){?>
                                    @include('table_body')
                                <?php }}?>
                            </div>
                            <br>
                            <div class="sport-table-header">
                                <p>Bundesliga - Germany</p>
                            </div>
                            <div class="sport-table">
                                @include('table_header')
                                <?php if(sizeof($odds_soccer_germany_bundesliga)){
                                foreach ($odds_soccer_germany_bundesliga as $item){?>
                                    @include('table_body')
                                <?php }}?>
                            </div>
                            <br>
                        </div>
                        <!-- Ice Hockey-->
                        <div class="col-lg-12 isotope-item" data-filter="ice-hockey">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Ice Hockey
                                    </h5>
                                </div>
                            </article>

                            <div class="sport-table-header">
                                <p>NHL</p>
                            </div>
                            <div class="sport-table">
                                @include('table_header')
                                <?php if(sizeof($odds_icehockey_nhl)){
                                    foreach($odds_icehockey_nhl as $item){?>
                                        @include('table_body')
                                <?php }}?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('layouts.footer')
<!-- BETslip Model -->

<!--END BETslip Model -->
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
{{--<script src="js/api_up.js"></script>--}}
<script src="https://ajax.googleapis.com/ajax/libs/
         jquery/3.3.1/jquery.min.js"></script>

<script>

    $.ready(function () {
        $(".isotope-item").css("top","0px !important");
        $(".isotope-item").css("position","relative !important");
        $(".isotope-item").css("height","auto");
    });
    $('.player-props').click(function() {
        $(this).text(function(_, value) {
            var id = $(this).data('id');
            if(value == '-'){
                $('#'+id).css('display','none');
                console.log('-----id----', $(this).data('id'));
            }else{
                $('#'+id).css('display','block');
            }
            return value == '-' ? '+' : '-'
        });
        $(this).nextUntil('tr.header').slideToggle(100, function() {});
    });

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
