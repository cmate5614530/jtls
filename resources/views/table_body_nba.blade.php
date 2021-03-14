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
                                                    <span class="sport-table-title-team"><span><?php echo date("m/d",$item->commence_time-18000);?></span></span>
                                                    <span class="sport-table-title-team"><span><?php echo date("H:i",$item->commence_time-18000);?></span></span>
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
                                                }else{
                                                    echo "-";
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
                                                }else{
                                                    echo "-";
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
                                                    // if(json_decode($item->spreads)->odds[0] > 0) echo "+";
                                                    // echo json_decode($item->spreads)->odds[0];
                                                    echo "-110";
                                                }else{
                                                    echo "-";
                                                }
                                                ?>"><?php
                                                    if(json_decode($item->spreads)){
                                                        if(json_decode($item->spreads)->points[0] > 0) echo "+";
                                                        echo json_decode($item->spreads)->points[0]."&nbsp;&nbsp;";
                                                        // if(json_decode($item->spreads)->odds[0] > 0) echo "+";
                                                        // echo json_decode($item->spreads)->odds[0];
                                                        echo "-110";
                                                    }else{
                                                        echo "-";
                                                    }
                                                    ?></button>
                                                <button class="place-link bet-button" data-clicked="0" data-wager-id="<?php echo $item->id;?>" data-wager-type="RL" data-team-name="<?php echo $item->team2;?>"
                                                        data-confrontation="<?php echo $item->team1.' vs '.$item->team2;?>" data-wager-count="<?php
                                                if(json_decode($item->spreads)){
                                                    if(json_decode($item->spreads)->points[1] > 0) echo "+";
                                                    echo json_decode($item->spreads)->points[1]."&nbsp;&nbsp;";
                                                    // if(json_decode($item->spreads)->odds[1] > 0) echo "+";
                                                    // echo json_decode($item->spreads)->odds[1];
                                                    echo "-110";
                                                }else{
                                                    echo "-";
                                                }
                                                ?>"><?php
                                                    if(json_decode($item->spreads)){
                                                        if(json_decode($item->spreads)->points[1] > 0) echo "+";
                                                        echo json_decode($item->spreads)->points[1]."&nbsp;&nbsp;";
                                                        // if(json_decode($item->spreads)->odds[1] > 0) echo "+";
                                                        // echo json_decode($item->spreads)->odds[1];
                                                        echo "-110";
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
                                                    echo json_decode($item->totals)->position[0] == 'over'?"o":"u";
                                                    // if(json_decode($item->totals)->points[0] > 0) echo "+";
                                                    echo json_decode($item->totals)->points[0]."&nbsp;&nbsp;";
                                                    echo "-110";
                                                    // if(json_decode($item->totals)->odds[0] > 0) echo "+";
                                                    // echo json_decode($item->totals)->odds[0];
                                                }else{
                                                    echo "-";
                                                }
                                                ?>"><?php
                                                    if(json_decode($item->totals)){
                                                        echo json_decode($item->totals)->position[0]== 'over'?"o":"u";
                                                        // if(json_decode($item->totals)->points[0] > 0) echo "+";
                                                        echo json_decode($item->totals)->points[0]."&nbsp;&nbsp;";
                                                        echo "-110";
                                                        // if(json_decode($item->totals)->odds[0] > 0) echo "+";
                                                        // echo json_decode($item->totals)->odds[0];
                                                    }else{
                                                        echo "-";
                                                    }
                                                    ?></button>
                                                <button class="place-link bet-button" data-clicked="0" data-wager-id="<?php echo $item->id;?>" data-wager-type="TL" data-team-name="<?php echo $item->team2;?>"
                                                        data-confrontation="<?php echo $item->team1.' vs '.$item->team2;?>" data-wager-count="<?php
                                                if(json_decode($item->totals)){
                                                    echo json_decode($item->totals)->position[1]== 'over'?"o":"u";
                                                    //if(json_decode($item->totals)->points[1] > 0) echo "+";
                                                    echo json_decode($item->totals)->points[1]."&nbsp;&nbsp;";
                                                    echo "-110";
                                                    // if(json_decode($item->totals)->odds[1] > 0) echo "+";
                                                    // echo json_decode($item->totals)->odds[1];
                                                }else{
                                                    echo "-";
                                                }
                                                ?>"><?php
                                                    if(json_decode($item->totals)){
                                                        echo json_decode($item->totals)->position[1]== 'over'?"o":"u";
                                                        //if(json_decode($item->totals)->points[1] > 0) echo "+";
                                                        echo json_decode($item->totals)->points[1]."&nbsp;&nbsp;";
                                                        echo "-110";
                                                        // if(json_decode($item->totals)->odds[1] > 0) echo "+";
                                                        // echo json_decode($item->totals)->odds[1];
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
                                                    $assists = array();
                                                    for($i=0; $i<sizeof($player_assists); $i++){
                                                        $my_flag='1';
                                                        for($j=$i+2; $j<sizeof($player_assists); $j+=2){
                                                            if($player_assists[$i]['betType'] == $player_assists[$j]['betType'] ){
                                                                $my_flag='0';
                                                                break;
                                                            }
                                                        }
                                                        if($my_flag == '1'){
                                                            array_push($assists, $player_assists[$i]);
                                                        }
                                                    }
                                                    $t = sizeof($assists)>10 ? 10 : sizeof($assists);
                                                    for($i=0; $i<$t; $i+=2){
                                                    ?>
                                                    <tr>
                                                        <?php

                                                        if($assists[$i]['betType'] !== $betType_before && strpos($assists[$i]['homeTeam'], $item->home_team) !== false
                                                        && strpos($assists[$i]['awayTeam'], $item->away_team) !== false
                                                        && strpos($assists[$i]['betName'], 'Over') !== false && strpos($assists[$i]['betType'],'- Assists') !== false){
                                                        ?>
                                                        <td><?php echo explode(' - Assists',$assists[$i]['betType'])[0];?></td>
                                                        <td>
                                                            <button class="place-link bet-button player-props-btn"
                                                                data-clicked="0"
                                                                data-wager-id="<?php echo $item->id;?>"
                                                                data-wager-type="Assists"
                                                                data-team-name="<?php echo explode(' - Assists',$assists[$i]['betType'])[0];?>"
                                                                data-confrontation="<?php echo $item->team1.' vs '.$item->team2;?>"
                                                                data-wager-count="o<?php echo explode('Over ', $assists[$i]['betName'])[1];?>&nbsp;&nbsp;<?php echo $assists[$i]['betPrice'];?>"
                                                                >
                                                                <span>o<?php echo explode('Over ', $assists[$i]['betName'])[1];?></span>
                                                                <small><?php echo $assists[$i]['betPrice'];?></small>
                                                            </button>
                                                        </td>
                                                        <?php
                                                        for($j=$i+1; $j<$t;$j++){
                                                            if(str_replace('Over','Under',$assists[$i]['betName']) == $assists[$j]['betName'] && $assists[$j]['betType'] == $assists[$i]['betType']){
                                                                $under_assists = $assists[$j];
                                                                break;
                                                            }
                                                        }
                                                        ?>
                                                        <td>
                                                            <?php
                                                        if(isset($under_assists)){
                                                        ?>

                                                            <button class="place-link bet-button player-props-btn"
                                                                data-clicked="0"
                                                                data-wager-id="<?php echo $item->id;?>"
                                                                data-wager-type="Assists"
                                                                data-team-name="<?php echo explode(' - Assists',$assists[$i]['betType'])[0];?>"
                                                                data-confrontation="<?php echo $item->team1.' vs '.$item->team2;?>"
                                                                data-wager-count="u<?php echo explode('Under ', $under_assists['betName'])[1];?>&nbsp;&nbsp;<?php echo $under_assists['betPrice'];?>"
                                                            >
                                                                <span>u<?php echo explode('Under ', $under_assists['betName'])[1];?></span>
                                                                <small><?php echo $under_assists['betPrice'];?></small>
                                                            </button>


                                                        <?php

                                                        }
                                                        ?>
                                                        </td>
                                                            <?php
                                                        $betType_before = $assists[$i]['betType'];
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
                                                    $points = array();
                                                    for($i=0; $i<sizeof($player_points); $i++){
                                                        $my_flag='1';
                                                        for($j=$i+2; $j<sizeof($player_points); $j+=2){
                                                            if($player_points[$i]['betType'] == $player_points[$j]['betType'] ){
                                                                $my_flag='0';
                                                                break;
                                                            }
                                                        }
                                                        if($my_flag == '1'){
                                                            array_push($points, $player_points[$i]);
                                                        }
                                                    }
                                                    $m = sizeof($points)>10 ? 10 : sizeof($points);
                                                    for($i=0; $i<$m; $i+=2){
                                                    ?>
                                                    <tr>
                                                        <?php

                                                        if($points[$i]['betType'] !== $betType_before && strpos($points[$i]['homeTeam'], $item->home_team) !== false
                                                        && strpos($points[$i]['awayTeam'], $item->away_team) !== false
                                                        && strpos($points[$i]['betName'], 'Over') !== false && strpos($points[$i]['betType'],'- Points') !== false){
                                                        ?>
                                                        <td><?php echo explode(' - Points',$points[$i]['betType'])[0];?></td>
                                                        <td>
                                                            <button class="place-link bet-button player-props-btn"
                                                                data-clicked="0"
                                                                data-wager-id="<?php echo $item->id;?>"
                                                                data-wager-type="Points"
                                                                data-team-name="<?php echo explode(' - Points',$points[$i]['betType'])[0];?>"
                                                                data-confrontation="<?php echo $item->team1.' vs '.$item->team2;?>"
                                                                data-wager-count="o<?php echo explode('Over ', $points[$i]['betName'])[1];?>&nbsp;&nbsp;<?php echo $points[$i]['betPrice'];?>"
                                                            >
                                                                <span>o<?php echo explode('Over ', $points[$i]['betName'])[1];?></span>
                                                                <small><?php echo $points[$i]['betPrice'];?></small>
                                                            </button>
                                                        </td>
                                                        <?php

                                                        for($j=$i+1; $j<$m;$j++){
                                                            if(str_replace('Over','Under',$points[$i]['betName']) == $points[$j]['betName'] && $points[$j]['betType'] == $points[$i]['betType']){
                                                                $under_points = $points[$j];
                                                                break;
                                                            }
                                                        }
                                                        ?>
                                                            <td>
                                                            <?php
                                                        if(isset($under_points)){
                                                        ?>

                                                            <button class="place-link bet-button player-props-btn"
                                                                data-clicked="0"
                                                                data-wager-id="<?php echo $item->id;?>"
                                                                data-wager-type="Points"
                                                                data-team-name="<?php echo explode(' - Points',$points[$i]['betType'])[0];?>"
                                                                data-confrontation="<?php echo $item->team1.' vs '.$item->team2;?>"
                                                                data-wager-count="u<?php echo explode('Under ', $points[$j]['betName'])[1];?>&nbsp;&nbsp;<?php echo $points[$j]['betPrice'];?>"
                                                            >
                                                                <span>u<?php echo explode('Under ', $points[$j]['betName'])[1];?></span>
                                                                <small><?php echo $points[$j]['betPrice'];?></small>
                                                            </button>


                                                        <?php

                                                        }?>
                                                            </td>
                                                            <?php
                                                        $betType_before = $points[$i]['betType'];
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
                                                    $rebounds = array();
                                                    for($i=0; $i<sizeof($player_rebounds); $i++){
                                                        $my_flag='1';
                                                        for($j=$i+2; $j<sizeof($player_rebounds); $j+=2){
                                                            if($player_rebounds[$i]['betType'] == $player_rebounds[$j]['betType'] ){
                                                                $my_flag='0';
                                                                break;
                                                            }
                                                        }
                                                        if($my_flag == '1'){
                                                            array_push($rebounds, $player_rebounds[$i]);
                                                        }
                                                    }
                                                    $n = sizeof($rebounds)>10 ? 10 : sizeof($rebounds);
                                                    for($i=0; $i<$n; $i+=2){
                                                    ?>
                                                    <tr>
                                                        <?php

                                                        if($rebounds[$i]['betType'] !== $betType_before && strpos($rebounds[$i]['homeTeam'], $item->home_team) !== false
                                                        && strpos($rebounds[$i]['awayTeam'], $item->away_team) !== false
                                                        && strpos($rebounds[$i]['betName'], 'Over') !== false  && strpos($rebounds[$i]['betType'],'- Rebounds') !== false){
                                                        ?>
                                                        <td><?php echo explode(' - Rebounds',$rebounds[$i]['betType'])[0];?></td>
                                                        <td>
                                                            <button class="place-link bet-button player-props-btn"
                                                                data-clicked="0"
                                                                data-wager-id="<?php echo $item->id;?>"
                                                                data-wager-type="Rebounds"
                                                                data-team-name="<?php echo explode(' - Rebounds',$rebounds[$i]['betType'])[0];?>"
                                                                data-confrontation="<?php echo $item->team1.' vs '.$item->team2;?>"
                                                                data-wager-count="o<?php echo explode('Over ', $rebounds[$i]['betName'])[1];?>&nbsp;&nbsp;<?php echo $rebounds[$i]['betPrice'];?>"
                                                            >
                                                                <span>o<?php echo explode('Over ', $rebounds[$i]['betName'])[1];?></span>
                                                                <small><?php echo $rebounds[$i]['betPrice'];?></small>
                                                            </button>
                                                        </td>
                                                        <?php
                                                        for($j=$i+1; $j<$n;$j++){
                                                            if(str_replace('Over','Under',$rebounds[$i]['betName']) == $rebounds[$j]['betName'] && $rebounds[$j]['betType'] == $rebounds[$i]['betType']){
                                                                $under_rebounds = $rebounds[$j];
                                                                break;
                                                            }
                                                        }
                                                        ?>
                                                            <td>
                                                            <?php
                                                            if(isset($under_rebounds)){
                                                            ?>

                                                            <button class="place-link bet-button player-props-btn"
                                                                data-clicked="0"
                                                                data-wager-id="<?php echo $item->id;?>"
                                                                data-wager-type="Rebounds"
                                                                data-team-name="<?php echo explode(' - Rebounds',$rebounds[$i]['betType'])[0];?>"
                                                                data-confrontation="<?php echo $item->team1.' vs '.$item->team2;?>"
                                                                data-wager-count="u<?php echo explode('Under ', $rebounds[$j]['betName'])[1];?>&nbsp;&nbsp;<?php echo $rebounds[$j]['betPrice'];?>"
                                                            >
                                                                <span>u<?php echo explode('Under ', $rebounds[$j]['betName'])[1];?></span>
                                                                <small><?php echo $rebounds[$j]['betPrice'];?></small>
                                                            </button>


                                                            <?php
                                                            }
                                                            ?>
                                                            </td>
                                                            <?php
                                                        $betType_before = $rebounds[$i]['betType'];
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
