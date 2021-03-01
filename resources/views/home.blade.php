@extends('layouts.app')
@section('content')
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
                                <button class="isotope-filters-list-link " id="all" data-isotope-filter="*" data-isotope-group="gallery" href="#">
                                    <span class="isotope-filters-list-img">
                                        <span class="sprite sprite-sport-icon-01"></span>
                                    </span>
                                    <span class="isotope-filters-list-text">All sports</span>
                                    {{--                                    <span class="isotope-filters-list-count">29</span>--}}
                                </button>
                            </li>
                            <li class="isotope-filters-list-item">
                                <button class="isotope-filters-list-link " id="football" data-isotope-filter="football" data-isotope-group="gallery" href="#">
                                    <span class="isotope-filters-list-img">
                                        <span class="sprite sprite-sport-icon-07"></span>
                                    </span>
                                    <span class="isotope-filters-list-text">Football</span>

                                </button>
                            </li>
                            <li class="isotope-filters-list-item">
                                <button class="isotope-filters-list-link" id="basketball" data-isotope-filter="basketball" data-isotope-group="gallery" href="#">
                                    <span class="isotope-filters-list-img">
                                        <span class="sprite sprite-sport-icon-04"></span>
                                    </span>
                                    <span class="isotope-filters-list-text">Basketball</span>

                                </button>
                            </li>
                            <li class="isotope-filters-list-item">
                                <button class="isotope-filters-list-link" id="baseball" data-isotope-filter="baseball" data-isotope-group="gallery" href="#">
                                    <span class="isotope-filters-list-img">
                                        <span class="sprite sprite-sport-icon-21"></span>
                                    </span>
                                    <span class="isotope-filters-list-text">Baseball</span>

                                </button>
                            </li>
                            <li class="isotope-filters-list-item">
                                <button class="isotope-filters-list-link " id="soccer" data-isotope-filter="soccer" data-isotope-group="gallery" href="#">
                                    <span class="isotope-filters-list-img">
                                        <span class="sprite sprite-sport-icon-20"></span>
                                    </span>
                                    <span class="isotope-filters-list-text">Soccer</span>

                                </button>
                            </li>
                            <li class="isotope-filters-list-item">
                                <button class="isotope-filters-list-link" id="hockey" data-isotope-filter="ice-hockey" data-isotope-group="gallery" href="#">
                                    <span class="isotope-filters-list-img">
                                        <span class="sprite sprite-sport-icon-08"></span>
                                    </span>
                                    <span class="isotope-filters-list-text">Ice Hockey</span>

                                </button>
                            </li>


                        </ul>

                    </div>
                </div>
                <!-- Isotope Content-->
                <div class="col-lg-12">
                    <div class="row isotope1 row-30" data-isotope-layout="masonry" data-column-class=".col-1" data-isotope-group="gallery">
                        <div class="col-1 isotope-item isotope-sizer"></div>
                        <!-- Football-->
                        <div class="col-lg-12 isotope-item1" data-filter="football" id="football-content">
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
                        <div class="col-lg-12 isotope-item1" data-filter="basketball" id="basketball-content">
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
                                        <div class="col-sm-1 col-md-1 col-lg-1">
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
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team"><span>M L</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team"><span>R L</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team"><span>T L(over / under)</span></span>
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

                                        <div class="col-sm-1 col-md-1 col-lg-1 sport-table-title-item sport-table-title-item-left sport-table-title">
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
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <div class="twobox">
                                                <button class="place-link bet-button" data-clicked="0" data-wager-id="<?php echo $item->id;?>" data-wager-type="ML" data-team-name="<?php echo $item->team1;?>"
                                                        data-confrontation="<?php echo $item->team1.' vs '.$item->team2;?>" data-wager-count="<?php
                                                if(json_decode($item->h2h)){
                                                    if(json_decode($item->h2h)[0] > 0) echo "+";
                                                    echo json_decode($item->h2h)[0];
                                                }
                                                ?>"><?php
                                                    if(json_decode($item->h2h)){
                                                        if(json_decode($item->h2h)[0] > 0) echo "+";
                                                        echo json_decode($item->h2h)[0];
                                                    }else{
                                                        echo "-";
                                                    }
                                                    ?></button>
                                                <button class="place-link bet-button" data-clicked="0" data-wager-id="<?php echo $item->id;?>" data-wager-type="ML" data-team-name="<?php echo $item->team2;?>"
                                                        data-confrontation="<?php echo $item->team1.' vs '.$item->team2;?>" data-wager-count="<?php
                                                if(json_decode($item->h2h)){
                                                    if(json_decode($item->h2h)[1] > 0) echo "+";
                                                    echo json_decode($item->h2h)[1];
                                                }
                                                ?>"><?php
                                                    if(json_decode($item->h2h)){
                                                        if(json_decode($item->h2h)[1] > 0) echo "+";
                                                        echo json_decode($item->h2h)[1];
                                                    }else{
                                                        echo "-";
                                                    }
                                                    ?></button>

                                            </div>

                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <div class="twobox">
                                                <button class="place-link bet-button" data-clicked="0" data-wager-id="<?php echo $item->id;?>" data-wager-type="RL" data-team-name="<?php echo $item->team1;?>"
                                                        data-confrontation="<?php echo $item->team1.' vs '.$item->team2;?>" data-wager-count="<?php
                                                if(json_decode($item->spreads)){
                                                    if(json_decode($item->spreads)->points[0] > 0) echo "+";
                                                    echo json_decode($item->spreads)->points[0]."&nbsp;&nbsp;";
                                                    if(json_decode($item->spreads)->odds[0] > 0) echo "+";
                                                    echo json_decode($item->spreads)->odds[0];
                                                }else{
                                                    echo "-";
                                                }
                                                ?>"><?php
                                                    if(json_decode($item->spreads)){
                                                        if(json_decode($item->spreads)->points[0] > 0) echo "+";
                                                        echo json_decode($item->spreads)->points[0]."&nbsp;&nbsp;";
                                                        if(json_decode($item->spreads)->odds[0] > 0) echo "+";
                                                        echo json_decode($item->spreads)->odds[0];
                                                    }else{
                                                        echo "-";
                                                    }
                                                    ?></button>
                                                <button class="place-link bet-button" data-clicked="0" data-wager-id="<?php echo $item->id;?>" data-wager-type="RL" data-team-name="<?php echo $item->team2;?>"
                                                        data-confrontation="<?php echo $item->team1.' vs '.$item->team2;?>" data-wager-count="<?php
                                                if(json_decode($item->spreads)){
                                                    if(json_decode($item->spreads)->points[1] > 0) echo "+";
                                                    echo json_decode($item->spreads)->points[1]."&nbsp;&nbsp;";
                                                    if(json_decode($item->spreads)->odds[1] > 0) echo "+";
                                                    echo json_decode($item->spreads)->odds[1];
                                                }else{
                                                    echo "-";
                                                }
                                                ?>"><?php
                                                    if(json_decode($item->spreads)){
                                                        if(json_decode($item->spreads)->points[1] > 0) echo "+";
                                                        echo json_decode($item->spreads)->points[1]."&nbsp;&nbsp;";
                                                        if(json_decode($item->spreads)->odds[1] > 0) echo "+";
                                                        echo json_decode($item->spreads)->odds[1];
                                                    }else{
                                                        echo "-";
                                                    }
                                                    ?></button>

                                            </div>

                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <div class="twobox">
                                                <button class="place-link bet-button" data-clicked="0" data-wager-id="<?php echo $item->id;?>" data-wager-type="TL" data-team-name="<?php echo $item->team1;?>"
                                                        data-confrontation="<?php echo $item->team1.' vs '.$item->team2;?>" data-wager-count="<?php
                                                if(json_decode($item->totals)){
                                                    //echo json_decode($item->totals)->position[0] == 'over'?"o&nbsp;":"u&nbsp;";
                                                    if(json_decode($item->totals)->points[0] > 0) echo "+";
                                                    echo json_decode($item->totals)->points[0]."&nbsp;&nbsp;";
                                                    if(json_decode($item->totals)->odds[0] > 0) echo "+";
                                                    echo json_decode($item->totals)->odds[0];
                                                }else{
                                                    echo "-";
                                                }
                                                ?>"><?php
                                                    if(json_decode($item->totals)){
                                                        //echo json_decode($item->totals)->position[0]== 'over'?"o&nbsp;":"u&nbsp;";
                                                        if(json_decode($item->totals)->points[0] > 0) echo "+";
                                                        echo json_decode($item->totals)->points[0]."&nbsp;&nbsp;";
                                                        if(json_decode($item->totals)->odds[0] > 0) echo "+";
                                                        echo json_decode($item->totals)->odds[0];
                                                    }else{
                                                        echo "-";
                                                    }
                                                    ?></button>
                                                <button class="place-link bet-button" data-clicked="0" data-wager-id="<?php echo $item->id;?>" data-wager-type="TL" data-team-name="<?php echo $item->team2;?>"
                                                        data-confrontation="<?php echo $item->team1.' vs '.$item->team2;?>" data-wager-count="<?php
                                                if(json_decode($item->totals)){
                                                    //echo json_decode($item->totals)->position[1]== 'over'?"o&nbsp;":"u&nbsp;";
                                                    if(json_decode($item->totals)->points[1] > 0) echo "+";
                                                    echo json_decode($item->totals)->points[1]."&nbsp;&nbsp;";
                                                    if(json_decode($item->totals)->odds[1] > 0) echo "+";
                                                    echo json_decode($item->totals)->odds[1];
                                                }else{
                                                    echo "-";
                                                }
                                                ?>"><?php
                                                    if(json_decode($item->totals)){
                                                        //echo json_decode($item->totals)->position[1]== 'over'?"o&nbsp;":"u&nbsp;";
                                                        if(json_decode($item->totals)->points[1] > 0) echo "+";
                                                        echo json_decode($item->totals)->points[1]."&nbsp;&nbsp;";
                                                        if(json_decode($item->totals)->odds[1] > 0) echo "+";
                                                        echo json_decode($item->totals)->odds[1];
                                                    }else{
                                                        echo "-";
                                                    }
                                                    ?></button>

                                            </div>

                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12 player-props-table" id="<?php echo $item->id;?>">

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
                        <div class="col-lg-12 isotope-item1" data-filter="baseball" id="baseball-content">
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
                        <div class="col-lg-12 isotope-item1" data-filter="soccer" id="soccer-content">
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
                                @include('table_body_soccer')
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
                                @include('table_body_soccer')
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
                                @include('table_body_soccer')
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
                                @include('table_body_soccer')
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
                                @include('table_body_soccer')
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
                                @include('table_body_soccer')
                                <?php }}?>
                            </div>
                            <br>
                        </div>
                        <!-- Ice Hockey-->
                        <div class="col-lg-12 isotope-item1" data-filter="ice-hockey" id="hockey-content">
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

    <div class="modal-betslip1" id="betslipModal1" style="display:none; position: fixed; width: 24em; margin:auto; left: auto; right:30.1em; z-index: 3000;
    background: #9b9b9b; overflow-y: auto; font-size: 16px;    box-shadow: 0 0 15px 0 rgb(0 0 0 / 60%); height: auto; bottom: 0px; max-height: calc(100vh-0px);">
        <div class="betslip_header" style="display: flex;flex: 0 0  auto; align-items: center; color:#fff; background-color: #010101;box-sizing: border-box;border-top: 4px solid #fa6201;cursor:pointer;padding:0 15px;width:100%;height: 52px;">
            <h2 style="font-size: 16px;font-weight: 700;color: #fff;min-width: 0;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;margin: 0;">BET SLIP</h2>
        </div>
        <div class="betslip_content" id="betslip_content" style=" color: #010101;font-size: 14px;">

        </div>
    </div>
    <div class="modal-betslip" id="betslipModal"  >
        <div class="mod-KambiBC-betslip-container KambiBC-util-no-touchevents KambiBC-util-windows10 KambiBC-util-chrome KambiBC-util-chrome83 KambiBC-util-locale-en_GB KambiBC-util-single-column-layout KambiBC-util-desktop KambiBC-util-sticky-content KambiBC-util-route-home mod-KambiBC-betslip-container--maximized mod-KambiBC-betslip-container--pinnable mod-KambiBC-betslip-container--combination-tab-selected mod-KambiBC-betslip-container--compressed mod-KambiBC-betslip-container--has-outcomes" id="mod-KambiBC-betslip-container" data-eq-state="loaded layoutWide betslipDetached layoutExtraWide">
            <div class="mod-KambiBC-betslip__outer-wrapper" style="max-height: calc(100vh - 0px);">
                <div class="mod-KambiBC-betslip mod-KambiBC-js-betslip mod-KambiBC-betslip--legacy-transitions" style="bottom: 0px; max-height: calc(100vh - 0px); height: auto;">
                    <div class="mod-KambiBC-betslip__wrapper">
                        <div class="mod-KambiBC-betslip__overlay"></div>
                        <header class="mod-KambiBC-betslip__header">
                            <h2 class="mod-KambiBC-betslip__header-tab-title">Bet Slip</h2>
                            <div class="mod-KambiBC-betslip__header-outcome-odds-container">
                                <span class="mod-KambiBC-betslip__header-outcome-count">&nbsp;</span>
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
                                                <ul theme="[object Object]" style=""
                                                    class="nav-tabs KambiBC-tabs__tabs KambiBC-tabs__container KambiBC-tabs__centerer KambiBC-tabs__centerer--enabled" role="tablist">
                                                    <!-- <li class="KambiBC-tabs__tab KambiBC-tabs__tab--selected" >
                                                        <span class="KambiBC-tabs__tab_title"> -->
                                                          <button class="tablinks KambiBC-tabs__tab KambiBC-tabs__tab--selected" onclick="openCity(event, 'tabs-1')" id="defaultOpen">Singles</button>
                                                        <!-- </span>
                                                    </li> -->

                                                    <!-- <li class="KambiBC-tabs__tab " >
                                                        <span class="KambiBC-tabs__tab_title"> -->
                                                            <button class="tablinks KambiBC-tabs__tab" id="tabs-2" onclick="openCity(event, 'tabs-2')">Multiples</button>
                                                        <!-- </span>
                                                    </li> -->

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
                                    <div class="mod-KambiBC-betslip__tab-content">
                                        <ul class="mod-KambiBC-betslip__outcome-list" id="betsliplist">
                                            <li class="mod-KambiBC-betslip__outcome mod-KambiBC-betslip__outcome--has-stake-input" id="betslipdesc" style="display: none;">
                                                <div class="mod-KambiBC-betslip__outcome__content-wrapper  betappend">
                                                    <button class="mod-KambiBC-betslip-outcome__close-btn" onclick="$(this).closest('li').remove();betCalculate();" data-touch-feedback="true"><span class="mod-KambiBC-betslip-outcome__close-btn-text">Close</span></button>
                                                    <div class="mod-KambiBC-betslip-outcome__content">
                                                        <section class="mod-KambiBC-betslip-outcome__description">
                                                            <div class="mod-KambiBC-betslip-outcome__outcome-info">
                                                                <div>
                                                                    <span class="mod-KambiBC-betslip-outcome__outcome-label modal-sport-wager" id="betname">Full time</span>
                                                                </div>
                                                                <div>
                                                                        <p class="mod-KambiBC-betslip-outcome__criteria" id="betType"></p>

                                                                </div>
                                                            </div>
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
                                                                    <div class="mod-KambiBC-stake-input__container">
                                                                        <input autocomplete="off" class="mod-KambiBC-stake-input mod-KambiBC-js-stake-input"
                                                                               id="mod-KambiBC-betslip-stake-input-outcome-2763068864"
                                                                               maxlength="7" pattern="^[0-9]*[.,]{0,1}[0-9]{0,2}$"
                                                                               name="menueng[]" placeholder="$0.00" type="text" value=""
                                                                               onChange="betCalculate()">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                        <div class="mod-KambiBC-betslip__validation-errors">
                                        </div>
                                        
                                        <ul class="mod-KambiBC-betslip__system-package-stake-input-list"></ul>
                                            <!-- Single bet slip -->
                                            <div id="div_single_bet">
                                                <div class="mod-KambiBC-betslip__summary">
                                                    <div class="mod-KambiBC-betslip-summary__row">
                                                        <div class="mod-KambiBC-betslip-summary__label">Total Stakes:</div>
                                                        <input type="text" name="total_stakes" id="totalstakes" style="border: none;background-color: #222222;color: #ffff;text-align:right" readonly>
                                                    </div>
                                                    <div class="mod-KambiBC-betslip-summary__place-bet-content">
                                                        <div class="mod-KambiBC-betslip-summary__info">
                                                            <div class="mod-KambiBC-betslip-summary__row mod-KambiBC-betslip-summary__payout">
                                                                <div class="mod-KambiBC-betslip-summary__label">Potential Returns:</div>
                                                                <input type="text" name="total_potential" id="totalamnt" style="border: none;    background-color: #222222;color: #ffff;" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="mod-KambiBC-betslip__place-bet-button-wrapper">
                                                            <button type="button" name="place_bet" id="place_bet" class="mod-KambiBC-betslip__place-bet-btn" data-touch-feedback="true">Place bet</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single bet slip end -->

                                            <!-- Multiple bet slip -->
                                            <div id="div_multiple_bet" style="display:none;">
                                                <ul class="mod-KambiBC-betslip__system-stake-input-list">
                                                    <li class="mod-KambiBC-betslip__system-stake-input" style="padding: unset;">
                                                        <div class="mod-KambiBC-betslip-system-stake-wrapper">
                                                            <label class="mod-KambiBC-betslip-system-stake-label" for="mod-KambiBC-betslip-stake-input-combination">Total:</label>
                                                            <div class="mod-KambiBC-betslip-system-stake-input">
                                                                <div class="mod-KambiBC-stake-input__container">
                                                                    <input autocomplete="off" 
                                                                        class="mod-KambiBC-stake-input mod-KambiBC-js-stake-input multiple-bet-price" 
                                                                        id="mod-KambiBC-betslip-stake-input-combination" 
                                                                        maxlength="7" 
                                                                        pattern="^[0-9]*[.,]{0,1}[0-9]{0,2}$" 
                                                                        placeholder="$0.00" type="text"
                                                                        onchange="multiBetCalculate()">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="mod-KambiBC-betslip__system-package-stake-input-list"></ul>
                                                <div class="mod-KambiBC-betslip__summary">
                                                    <div class="mod-KambiBC-betslip-summary__place-bet-content">
                                                        <div class="mod-KambiBC-betslip-summary__info">
                                                            <div class="mod-KambiBC-betslip-summary__row mod-KambiBC-betslip-summary__payout">
                                                                <div class="mod-KambiBC-betslip-summary__label">Potential Returns:</div>
                                                                <div class="mod-KambiBC-betslip-summary__value">
                                                                    
                                                                    <input type="text" name="total_potential_multi" id="multiTotalPrice" style="border: none;    background-color: #222222;color: #ffff;" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mod-KambiBC-betslip__place-bet-button-wrapper">
                                                            <button class="mod-KambiBC-betslip__place-bet-btn" data-touch-feedback="true" disabled="" type="button">Place bet</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Multiple bet slip end -->
                                            <br>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        betslip_array = [];
        $(document).ready(function () {

            $('#all').addClass('active');
            $('#football').removeClass('active');
            $('#basketball').removeClass('active');
            $('#baseball').removeClass('active');
            $('#soccer').removeClass('active');
            $('#hockey').removeClass('active');
            $('#football-content').css('display','block');
            $('#basketball-content').css('display','block');
            $('#baseball-content').css('display', 'block');
            $('#soccer-content').css('display','block');
            $('#hockey-content').css('display','block');

            $('#all').click(function () {
                $('#football').removeClass('active');
                $('#basketball').removeClass('active');
                $('#baseball').removeClass('active');
                $('#soccer').removeClass('active');
                $('#hockey').removeClass('active');

                $('#all').addClass('active');
                $('#football-content').css('display','block');
                $('#basketball-content').css('display','block');
                $('#baseball-content').css('display', 'block');
                $('#soccer-content').css('display','block');
                $('#hockey-content').css('display','block');
            });
            $('#football').click(function () {
                $('#all').removeClass('active');
                $('#basketball').removeClass('active');
                $('#baseball').removeClass('active');
                $('#soccer').removeClass('active');
                $('#hockey').removeClass('active');

                $('.isotope-item1').removeClass('active');
                $('#football').addClass('active');
                $('#football-content').css('display','block');
                $('#basketball-content').css('display','none');
                $('#baseball-content').css('display', 'none');
                $('#soccer-content').css('display','none');
                $('#hockey-content').css('display','none');
            });
            $('#basketball').click(function () {
                $('#all').removeClass('active');
                $('#football').removeClass('active');
                $('#baseball').removeClass('active');
                $('#soccer').removeClass('active');
                $('#hockey').removeClass('active');

                $('.isotope-item1').removeClass('active');
                $('#basketball').addClass('active');
                $('#football-content').css('display','none');
                $('#basketball-content').css('display','block');
                $('#baseball-content').css('display', 'none');
                $('#soccer-content').css('display','none');
                $('#hockey-content').css('display','none');
            });
            $('#baseball').click(function () {
                $('#all').removeClass('active');
                $('#football').removeClass('active');
                $('#basketball').removeClass('active');
                $('#soccer').removeClass('active');
                $('#hockey').removeClass('active');

                $('.isotope-item1').removeClass('active');
                $('#baseball').addClass('active');
                $('#football-content').css('display','none');
                $('#basketball-content').css('display','none');
                $('#baseball-content').css('display', 'block');
                $('#soccer-content').css('display','none');
                $('#hockey-content').css('display','none');
            });
            $('#soccer').click(function () {
                $('#all').removeClass('active');
                $('#football').removeClass('active');
                $('#basketball').removeClass('active');
                $('#baseball').removeClass('active');
                $('#hockey').removeClass('active');

                $('#soccer').addClass('active');
                $('#football-content').css('display','none');
                $('#basketball-content').css('display','none');
                $('#baseball-content').css('display', 'none');
                $('#soccer-content').css('display','block');
                $('#hockey-content').css('display','none');
            });
            $('#hockey').click(function () {
                $('#all').removeClass('active');
                $('#football').removeClass('active');
                $('#basketball').removeClass('active');
                $('#baseball').removeClass('active');
                $('#soccer').removeClass('active');

                $('#hockey').addClass('active');
                $('#football-content').css('display','none');
                $('#basketball-content').css('display','none');
                $('#baseball-content').css('display', 'none');
                $('#soccer-content').css('display','none');
                $('#hockey-content').css('display','block');
            });
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
            // $(this).nextUntil('tr.header').slideToggle(100, function() {});
        });

        function betCalculate() {

            var potentialArr = [];
            var stakeArr = [];

            var totalPotential = 0;
            $('.modal-sport-wager-count').each(function(){
                var amount = 0;
                if($(this).text()!=='' && $(this).text()!=='-' && $(this).text().split(/\s/).length > 1){
                    amount = parseFloat($(this).text().split(/\s/)[2]);
                }else if($(this).text()!=='' && $(this).text()!=='-' && $(this).text().split(/\s/).length == 1){
                    amount = parseFloat($(this).text().split(/\s/)[0]);
                }
                var tmp = 0;
                if(amount > 0){
                    tmp = 1 + amount/100;
                }else{
                    tmp = 1 - 100/amount;
                }
                potentialArr.push(parseFloat(tmp).toFixed(2));

            });
            console.log('----potentialArr--', potentialArr);
            var totalStake = 0;
            $('#betsliplist :input').each(function(){
                var stakeVal = $(this).val().replace(/\s/g,'') != '' ? $(this).val().replace(/\s/g,'') : 0;
                //console.log('-==--=', stakeVal)
                stakeArr.push(parseFloat(stakeVal));
                //console.log(stakeVal);
                totalStake += parseInt(stakeVal);
                $('#totalstakes').val(totalStake);

            });
            var cnt = 3;
            for(var i = 1; i < potentialArr.length; i++){
                var potentialMul = 0;
                potentialMul = (stakeArr[cnt] * potentialArr[i]);
                //console.log(stakeArr[cnt] +'--'+ potentialArr[i]);
                totalPotential = totalPotential + potentialMul;
                cnt = cnt + 2;
            }

            $('.mod-KambiBC-betslip-summary__total-odds-value').text(totalStake);
            $('#totalamnt').val(parseFloat(totalPotential).toFixed(2));
        }

        function multiBetCalculate(){
            var potentialArr = [];

            var totalPotential = parseFloat($("#mod-KambiBC-betslip-stake-input-combination").val());
            $('.modal-sport-wager-count').each(function(){
                var amount = 0;
                if($(this).text()!=='' && $(this).text()!=='-' && $(this).text().split(/\s/).length > 1){
                    amount = parseFloat($(this).text().split(/\s/)[2]);
                }else if($(this).text()!=='' && $(this).text()!=='-' && $(this).text().split(/\s/).length == 1){
                    amount = parseFloat($(this).text().split(/\s/)[0]);
                }
                var tmp = 0;
                if(amount > 0){
                    tmp = 1 + amount/100;
                }else{
                    tmp = 1 - 100/amount;
                }
                potentialArr.push(parseFloat(tmp).toFixed(2));

            });
            for(var i = 1; i < potentialArr.length; i++){
                totalPotential *= potentialArr[i];
            }
            
            $('#multiTotalPrice').val(parseFloat(totalPotential).toFixed(2));
        }

        function openCity(evt, cityName) {
            // var i, tabcontent, tablinks,kambili;
            // tabcontent = document.getElementsByClassName("tabcontent");
            // for (i = 0; i < tabcontent.length; i++) {
            //     tabcontent[i].style.display = "none";
            // }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }


            // document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
            
            if(cityName=='tabs-1'){
                console.log("----------single_bet----");
                $("#div_multiple_bet").css('display','none');
                $(".single-bet-price").css('display', 'block');
                $("#div_single_bet").css('display','block');
                check_if_multiplebet_possible();
                
            }else{
                console.log("---------multiple_bet----");
                $('#mod-KambiBC-betslip-stake-input-combination').val('');
                $('#multiTotalPrice').val('');
                $("#div_multiple_bet").css('display','block');
                $(".single-bet-price").css('display', 'none');
                $("#div_single_bet").css('display','none');
            }
        }

        function check_if_multiplebet_possible(){
            //check if multiple bet(parlay) is possible, and enable the button.
            var betslip_id_duplicated = 0;
            for(var i=0; i<betslip_array.length; i++){
                for(var j=i+1; j<betslip_array.length; j++){
                    if(betslip_array[i].wagerId == betslip_array[j].wagerId){
                        betslip_id_duplicated += 1;
                        break;
                    }
                }
                if(betslip_id_duplicated>0) break;
            }
            if(betslip_id_duplicated>0 || betslip_array.length==1 || betslip_array.length>8){
                $('#tabs-2').attr('disabled','disabled');
            }else{
                $('#tabs-2').removeAttr('disabled','disabled');
            }
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();

        $('.KambiBC-tabs__tabs').on('click', 'button', function() {
            $('.KambiBC-tabs__tabs button.KambiBC-tabs__tab--selected').removeClass('KambiBC-tabs__tab--selected');
            $(this).addClass('KambiBC-tabs__tab--selected');
        });

        $("#min_max").click(function(){

            $(".mod-KambiBC-betslip__header-btn").toggleClass("rotate");
            $(".mod-KambiBC-betslip__content").toggleClass("hide");
        });
        $(".mod-KambiBC-betslip__header").click(function () {
            $("#min_max").click();
        })

        // clear ul list and close popup
        $("#betslip_clear-btn").click(function(){
            $('#betsliplist li:not(:first-child)').remove();
            $("#betslipModal").removeClass("show-betslip");
            //$('.mod-KambiBC-betslip-summary__total-odds-value').text('');
            $('#totalamnt').val('');
            $('#totalstakes').val('')    ;
            betslip_array = [];
            $(".place-link").css('background-color', '#eaecee');
            check_if_multiplebet_possible();
        });

        // delete bet slip list item
        function betslip_delete(wagerId, teamName, wagerType){
            $('.place-link[data-wager-id="'+wagerId+'"][data-wager-type="'+wagerType+'"][data-team-name="'+teamName+'"]').css('background-color','#eaecee');
            betslip_array = betslip_array.filter(it=> it.wagerId !== wagerId || it.teamName !== teamName || it.wagerType !== wagerType);
            betCalculate();
            
            document.getElementById("defaultOpen").click();
        }

        // add list in ul with data
        $(".place-link").click(function(){
            if ($('#betslipModal').hasClass("show-betslip")==true){
            }   else {
                $("#betslipModal").addClass("show-betslip");
            }

            document.getElementById("defaultOpen").click();
            
            // var template = $("#betslipdesc").clone().removeAttr("id").html();

            var teamName = $(this).data('team-name'),
                confrontation = $(this).data('confrontation'),
                wagerCount = $(this).data('wager-count');
            var wagerType=$(this).data('wager-type');
            var wagerId=$(this).data('wager-id');
            var odds = $(this).data('wager-count');

            var amount=0;
            var item={
                    wagerId: wagerId,
                    wagerType: wagerType,
                    teamName: teamName,
                    confrontation: confrontation,
                    odds: odds
                }

            var str = [];
            $('.modal-sport-wager').each(function(){
                str.push($(this).text());
            })

            // for dynamic id creation
            var idLength = $("[id^=betslipdesc]").length;
            var className = teamName.replace(/\s/g,'');
            var idLength = idLength+''+className;

            var html = '';
            //var i = 0;
            //for(i = 0; i < betslip_array.length; i++){
                html = '<li class="mod-KambiBC-betslip__outcome mod-KambiBC-betslip__outcome--has-stake-input" id="betslip'+ wagerId +'">'+
                            '<div class="mod-KambiBC-betslip__outcome__content-wrapper betappend">'+
                                '<button class="mod-KambiBC-betslip-outcome__close-btn" onclick="$(this).closest(\'li\').remove(); betslip_delete('+ wagerId + ', \''+teamName+'\', \''+wagerType +'\');">'+
                                    '<span class="mod-KambiBC-betslip-outcome__close-btn-text">Close'+
                                    '</span>'+
                                '</button>'+
                                '<div class="mod-KambiBC-betslip-outcome__content">'+
                                    '<section class="mod-KambiBC-betslip-outcome__description">'+
                                        '<div class="mod-KambiBC-betslip-outcome__outcome-info">'+
                                            '<div>'+
                                                '<span class="mod-KambiBC-betslip-outcome__outcome-label modal-sport-wager">'+ teamName +
                                                '</span>'+
                                            '</div>'+
                                            '<div>'+
                                                '<p class="mod-KambiBC-betslip-outcome__criteria">'+ wagerType +
                                                '</p>'+
                                            '</div>'+
                                        '</div>'+
                                        '<p class="modal-sport-confrontation">'+ confrontation +
                                        '</p>'+
                                    '</section>'+
                                    '<section class="mod-KambiBC-betslip-outcome__stake-container">'+
                                        '<div class="mod-KambiBC-betslip-outcome__odds-container">'+
                                            '<span class="mod-KambiBC-betslip-outcome__odds mod-KambiBC-betslip-outcome__odds--changing mod-KambiBC-betslip-outcome__odds--increasing modal-sport-wager-count">'+
                                            odds+
                                            '</span>'+
                                        '</div>'+
                                        '<div class="mod-KambiBC-betslip-outcome__stake-input-container">'+
                                            '<div class="mod-KambiBC-betslip-outcome__stake-input">'+
                                                '<div class="mod-KambiBC-stake-input__container">'+
                                                    '<input autocomplete="off" class="mod-KambiBC-stake-input mod-KambiBC-js-stake-input single-bet-price" min="0" maxlength="7" placeholder="$0.00" type="number" onchange="betCalculate()">'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</section>'+
                                '</div>'+
                            '</div>'+
                        '</li>';
            //}

            //change button colors when clicked
            var clicked = $(this).data('clicked');
            if(clicked=='0'){
                $(this).css('background-color', '#FF8E2B');
            }else{
                $(this).css('background-color', '#eaecee');
                //remove from betslip and betslip_array
                $('#betslip'+wagerId).remove();
                betslip_array = betslip_array.filter(it=>it.wagerId !== wagerId || it.teamName !== teamName || it.wagerType !== wagerType || it.confrontation !== confrontation);

            }
            $(this).data('clicked', 1-clicked);
            
            if($(this).data('clicked')=='1'){
                betslip_array.push(item);
                $("#betsliplist").append(html);
            }
            
console.log('---betslip_array---', betslip_array);
            
            check_if_multiplebet_possible();

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
@endsection


