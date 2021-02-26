<div class="sport-table-tr">
    <div class="row sport-row align-items-left row-15">
        <div class="col-sm-1 col-md-1 col-lg-1">
            <div class="sport-table-icon">
                {{--                <div class="sprite sprite-sport-icon-07"></div>--}}
                <span class="sport-table-title-team"><span>#<?php echo $item->id;?></span></span>
            </div>
        </div>
        <div class="col-sm-1 col-md-1 col-lg-1">
            <div class="sport-table-title">
                <div class="sport-table-title-item sport-table-title-item-left">

                    <span class="sport-table-title-team"><span><?php echo gmdate("m/d",$item->commence_time);?></span></span>
                    <span class="sport-table-title-team"><span><?php echo gmdate("H:i",$item->commence_time);?></span></span>
                </div>
            </div>
        </div>
        <div class="col-sm-1 col-md-1 col-lg-1">
            <div class="sport-table-title">
                <div class="sport-table-title-item sport-table-title-item-left">
                    <span class="sport-table-title-team"><span><?php echo $item->team1_id; ?></span></span>
                    <span class="sport-table-title-team"><span><?php echo $item->team2_id; ?></span></span>
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
            <div class="threebox">
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
                <button class="place-link bet-button" data-clicked="0" data-wager-id="<?php echo $item->id;?>" data-wager-type="ML" data-team-name="Draw"
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
                <button class="place-link bet-button" data-clicked="0" data-wager-id="<?php echo $item->id;?>" data-wager-type="ML" data-team-name="<?php echo $item->team2;?>"
                        data-confrontation="<?php echo $item->team1.' vs '.$item->team2;?>" data-wager-count="<?php
                if(json_decode($item->h2h)){
                    if(json_decode($item->h2h)[2] > 0) echo "+";
                    echo json_decode($item->h2h)[2];
                }
                ?>"><?php
                    if(json_decode($item->h2h)){
                        if(json_decode($item->h2h)[2] > 0) echo "+";
                        echo json_decode($item->h2h)[2];
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

    </div>
</div>
