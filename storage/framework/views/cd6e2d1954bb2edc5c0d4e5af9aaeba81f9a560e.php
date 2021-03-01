<?php $__env->startSection('content'); ?>
    <!-- Swiper-->
    <section class="section swiper-container swiper-slider swiper-classic bg-gray-2" data-loop="true" data-autoplay="4000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-slide-bg="images/slider-1-slide-1-1920x671.jpg">
                <div class="container">
                    <div class="swiper-slide-caption">
                        <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Safe <br> Betting</h1>
                        <h4 data-caption-animate="fadeInUp" data-caption-delay="200">With 100% Risk-Free Guarantee</h4><a class="button button-gray-outline" data-caption-animate="fadeInUp" data-caption-delay="300" href="<?php echo e(Route('home')); ?>">Get started</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/slider-1-slide-2-1920x671.jpg">
                <div class="container">
                    <div class="swiper-slide-caption">
                        <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Easy Bets</h1>
                        <h4 data-caption-animate="fadeInUp" data-caption-delay="200">With the lowest commissions</h4><a class="button button-gray-outline" data-caption-animate="fadeInUp" data-caption-delay="300" href="<?php echo e(Route('home')); ?>">Join Us</a>
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
                                <?php echo $__env->make('table_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php if(sizeof($odds_americanfootball_nfl)){
                                foreach ($odds_americanfootball_nfl as $item){?>
                                <?php echo $__env->make('table_body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php }}?>
                            </div>
                            <br>
                            <div class="sport-table-header">
                                <p>NCAAF</p>
                            </div>
                            <div class="sport-table">
                                <?php echo $__env->make('table_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php if(sizeof($odds_americanfootball_ncaaf)){
                                foreach ($odds_americanfootball_ncaaf as $item){?>
                                <?php echo $__env->make('table_body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                                                <div>
                                                    <ul class="list-inline list-inline-xs">
                                                        <li style="display:inline-flex;">
                                                            <button style="padding:6px 8px !important;margin-left:-8px;" class="button button-xs button-red-outline player-props" data-id="<?php echo $item->id;?>">+</button>
                                                            <p style="color:black;margin-top:3px !important;">&nbsp;&nbsp;#<?php echo $item->id;?></p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-1 col-md-1 col-lg-1 sport-table-title-item sport-table-title-item-left sport-table-title">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team"><span><?php echo gmdate("m/d H:i",$item->commence_time);?></span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                            <div class="sport-table-title">
                                                <div class="sport-table-title-item sport-table-title-item-left">
                                                    <span class="sport-table-title-team"><span><?php echo $item->team1_id;?></span></span>
                                                    <span class="sport-table-title-team"><span><?php echo $item->team2_id;?></span></span>
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
                                                        <td>
                                                            <button class="place-link bet-button player-props-btn" 
                                                                data-clicked="0" 
                                                                data-wager-id="<?php echo $item->id;?>" 
                                                                data-wager-type="Assists"
                                                                data-team-name="<?php echo explode(' - Assists',$player_assists[$i]['betType'])[0];?>"
                                                                data-confrontation="<?php echo $item->team1.' vs '.$item->team2;?>"
                                                                data-wager-count="o<?php echo explode('Over ', $player_assists[$i]['betName'])[1];?>&nbsp;&nbsp;<?php echo $player_assists[$i]['betPrice'];?>"
                                                                >
                                                                <span>o<?php echo explode('Over ', $player_assists[$i]['betName'])[1];?></span>
                                                                <small><?php echo $player_assists[$i]['betPrice'];?></small>
                                                            </button>
                                                        </td>
                                                        <?php
                                                        for($j=$i+1; $j<sizeof($player_assists);$j++){
                                                        if(str_replace('Over','Under',$player_assists[$i]['betName']) == $player_assists[$j]['betName'] && $player_assists[$j]['betType'] == $player_assists[$i]['betType']){
                                                        ?>
                                                        <td>
                                                            <button class="place-link bet-button player-props-btn"
                                                                data-clicked="0" 
                                                                data-wager-id="<?php echo $item->id;?>" 
                                                                data-wager-type="Assists"
                                                                data-team-name="<?php echo explode(' - Assists',$player_assists[$i]['betType'])[0];?>"
                                                                data-confrontation="<?php echo $item->team1.' vs '.$item->team2;?>"
                                                                data-wager-count="u<?php echo explode('Under ', $player_assists[$j]['betName'])[1];?>&nbsp;&nbsp;<?php echo $player_assists[$j]['betPrice'];?>"
                                                            >
                                                                <span>u<?php echo explode('Under ', $player_assists[$j]['betName'])[1];?></span>
                                                                <small><?php echo $player_assists[$j]['betPrice'];?></small>
                                                            </button>
                                                        </td>

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
                                                        <td>
                                                            <button class="place-link bet-button player-props-btn"
                                                                data-clicked="0" 
                                                                data-wager-id="<?php echo $item->id;?>" 
                                                                data-wager-type="Points"
                                                                data-team-name="<?php echo explode(' - Points',$player_points[$i]['betType'])[0];?>"
                                                                data-confrontation="<?php echo $item->team1.' vs '.$item->team2;?>"
                                                                data-wager-count="o<?php echo explode('Over ', $player_points[$i]['betName'])[1];?>&nbsp;&nbsp;<?php echo $player_points[$i]['betPrice'];?>"
                                                            >
                                                                <span>o<?php echo explode('Over ', $player_points[$i]['betName'])[1];?></span>
                                                                <small><?php echo $player_points[$i]['betPrice'];?></small>
                                                            </button>
                                                        </td>
                                                        <?php
                                                        for($j=$i+1; $j<sizeof($player_points);$j++){
                                                        if(str_replace('Over','Under',$player_points[$i]['betName']) == $player_points[$j]['betName'] && $player_points[$j]['betType'] == $player_points[$i]['betType']){
                                                        ?>
                                                        <td>
                                                            <button class="place-link bet-button player-props-btn"
                                                                data-clicked="0" 
                                                                data-wager-id="<?php echo $item->id;?>" 
                                                                data-wager-type="Points"
                                                                data-team-name="<?php echo explode(' - Points',$player_points[$i]['betType'])[0];?>"
                                                                data-confrontation="<?php echo $item->team1.' vs '.$item->team2;?>"
                                                                data-wager-count="u<?php echo explode('Under ', $player_points[$j]['betName'])[1];?>&nbsp;&nbsp;<?php echo $player_points[$j]['betPrice'];?>"
                                                            >
                                                                <span>u<?php echo explode('Under ', $player_points[$j]['betName'])[1];?></span>
                                                                <small><?php echo $player_points[$j]['betPrice'];?></small>
                                                            </button>
                                                        </td>

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
                                                        <td>
                                                            <button class="place-link bet-button player-props-btn"
                                                                data-clicked="0" 
                                                                data-wager-id="<?php echo $item->id;?>" 
                                                                data-wager-type="Rebounds"
                                                                data-team-name="<?php echo explode(' - Rebounds',$player_rebounds[$i]['betType'])[0];?>"
                                                                data-confrontation="<?php echo $item->team1.' vs '.$item->team2;?>"
                                                                data-wager-count="o<?php echo explode('Over ', $player_rebounds[$i]['betName'])[1];?>&nbsp;&nbsp;<?php echo $player_rebounds[$i]['betPrice'];?>"
                                                            >
                                                                <span>o<?php echo explode('Over ', $player_rebounds[$i]['betName'])[1];?></span>
                                                                <small><?php echo $player_rebounds[$i]['betPrice'];?></small>
                                                            </button>
                                                        </td>
                                                        <?php
                                                        for($j=$i+1; $j<sizeof($player_rebounds);$j++){
                                                        if(str_replace('Over','Under',$player_rebounds[$i]['betName']) == $player_rebounds[$j]['betName'] && $player_rebounds[$j]['betType'] == $player_rebounds[$i]['betType']){
                                                        ?>
                                                        <td>
                                                            <button class="place-link bet-button player-props-btn"
                                                                data-clicked="0" 
                                                                data-wager-id="<?php echo $item->id;?>" 
                                                                data-wager-type="Rebounds"
                                                                data-team-name="<?php echo explode(' - Rebounds',$player_rebounds[$i]['betType'])[0];?>"
                                                                data-confrontation="<?php echo $item->team1.' vs '.$item->team2;?>"
                                                                data-wager-count="u<?php echo explode('Under ', $player_rebounds[$j]['betName'])[1];?>&nbsp;&nbsp;<?php echo $player_rebounds[$j]['betPrice'];?>"
                                                            >
                                                                <span>u<?php echo explode('Under ', $player_rebounds[$j]['betName'])[1];?></span>
                                                                <small><?php echo $player_rebounds[$j]['betPrice'];?></small>
                                                            </button>
                                                        </td>

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
                                <?php echo $__env->make('table_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php if(sizeof($odds_basketball_ncaab)){
                                foreach ($odds_basketball_ncaab as $item){?>
                                <?php echo $__env->make('table_body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                                <?php echo $__env->make('table_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php if(sizeof($odds_baseball_mlb)){
                                foreach ($odds_baseball_mlb as $item){?>
                                <?php echo $__env->make('table_body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                                <?php echo $__env->make('table_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php if(sizeof($odds_soccer_epl)){
                                foreach ($odds_soccer_epl as $item){?>
                                <?php echo $__env->make('table_body_soccer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php }}?>
                            </div>
                            <br>
                            <div class="sport-table-header">
                                <p>UEFA Champions</p>
                            </div>
                            <div class="sport-table">
                                <?php echo $__env->make('table_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php if(sizeof($odds_soccer_uefa_champs_league)){
                                foreach ($odds_soccer_uefa_champs_league as $item){?>
                                <?php echo $__env->make('table_body_soccer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php }}?>
                            </div>
                            <br>
                            <div class="sport-table-header">
                                <p>UEFA Europa</p>
                            </div>
                            <div class="sport-table">
                                <?php echo $__env->make('table_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php if(sizeof($odds_soccer_uefa_europa_league)){
                                foreach ($odds_soccer_uefa_europa_league as $item){?>
                                <?php echo $__env->make('table_body_soccer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php }}?>
                            </div>
                            <br>
                            <div class="sport-table-header">
                                <p>La Liga - Spain</p>
                            </div>
                            <div class="sport-table">
                                <?php echo $__env->make('table_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php if(sizeof($odds_soccer_spain_la_liga)){
                                foreach ($odds_soccer_spain_la_liga as $item){?>
                                <?php echo $__env->make('table_body_soccer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php }}?>
                            </div>
                            <br>
                            <div class="sport-table-header">
                                <p>Serie A - Italy</p>
                            </div>
                            <div class="sport-table">
                                <?php echo $__env->make('table_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php if(sizeof($odds_soccer_italy_serie_a)){
                                foreach ($odds_soccer_italy_serie_a as $item){?>
                                <?php echo $__env->make('table_body_soccer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php }}?>
                            </div>
                            <br>
                            <div class="sport-table-header">
                                <p>Bundesliga - Germany</p>
                            </div>
                            <div class="sport-table">
                                <?php echo $__env->make('table_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php if(sizeof($odds_soccer_germany_bundesliga)){
                                foreach ($odds_soccer_germany_bundesliga as $item){?>
                                <?php echo $__env->make('table_body_soccer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                                <?php echo $__env->make('table_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php if(sizeof($odds_icehockey_nhl)){
                                foreach($odds_icehockey_nhl as $item){?>
                                <?php echo $__env->make('table_body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php }}?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel\Laravel_blade\bet\resources\views/main.blade.php ENDPATH**/ ?>