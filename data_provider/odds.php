<?php
include('./config.php');

$sql = "SELECT key_text FROM sports WHERE active=1";
$result = mysqli_query($connect, $sql);
$key_text_array = array();

if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        array_push($key_text_array, $row['key_text']);
    }
}

$cURLConnection = curl_init();
$odds = array();
$teams = array();
foreach($key_text_array as $item){
    curl_setopt($cURLConnection, CURLOPT_URL, $api_url.'/odds/?apiKey='.$api_key.'&sport='.$item.'&region=uk&mkt=h2h&oddsFormat=american');
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($cURLConnection);
    $res = json_decode($response);

    $odds_h2h =  array();
    $odds_spreads = array();
    $odds_totals = array();
    if($res->success){
        foreach ($res->data as $it){
            $data['sport_key'] = $it->sport_key;
            $data['sport_nice'] = $it->sport_nice;
            $data['home_team'] = $it->home_team;
            $data['away_team'] = $it->teams[0]==$it->home_team ? $it->teams[1] : $it->teams[0];
            $data['team1'] = $it->teams[0];
            $data['team2'] = $it->teams[1];
            $data['commence_time'] = $it->commence_time;
            $data['site_key'] = $it->sites_count>0 ? $it->sites[0]->site_key : null;
            $data['site_nice'] = $it->sites_count>0 ? $it->sites[0]->site_nice : null;
            $data['last_update'] = $it->sites_count>0 ? $it->sites[0]->last_update : null;
            $data['h2h'] = $it->sites_count>0 ? json_encode($it->sites[0]->odds->h2h) : null;

            array_push($odds_h2h,$data);
        }
    }

    curl_setopt($cURLConnection, CURLOPT_URL, $api_url.'/odds/?apiKey='.$api_key.'&sport='.$item.'&region=uk&mkt=spreads&oddsFormat=american');
    $response = curl_exec($cURLConnection);
    $res = json_decode($response);

    if($res->success){
        foreach ($res->data as $it){
            $data1['sport_key'] = $it->sport_key;
            $data1['sport_nice'] = $it->sport_nice;
            $data1['home_team'] = $it->home_team;
            $data1['away_team'] = $it->teams[0]==$it->home_team ? $it->teams[1] : $it->teams[0];
            $data1['team1'] = $it->teams[0];
            $data1['team2'] = $it->teams[1];
            $data1['commence_time'] = $it->commence_time;
            $data1['site_key'] = $it->sites_count>0 ? $it->sites[0]->site_key : null;
            $data1['site_nice'] = $it->sites_count>0 ? $it->sites[0]->site_nice : null;
            $data1['last_update'] = $it->sites_count>0 ? $it->sites[0]->last_update : null;
            $data1['spreads'] = $it->sites_count>0 ? json_encode($it->sites[0]->odds->spreads) : null;

            array_push($odds_spreads,$data1);
        }
    }

    curl_setopt($cURLConnection, CURLOPT_URL, $api_url.'/odds/?apiKey='.$api_key.'&sport='.$item.'&region=uk&mkt=totals&oddsFormat=american');
    $response = curl_exec($cURLConnection);
    $res = json_decode($response);

    if($res->success){
        foreach ($res->data as $it){
            $data2['sport_key'] = $it->sport_key;
            $data2['sport_nice'] = $it->sport_nice;
            $data2['home_team'] = $it->home_team;
            $data2['away_team'] = $it->teams[0]==$it->home_team ? $it->teams[1] : $it->teams[0];
            $data2['team1'] = $it->teams[0];
            $data2['team2'] = $it->teams[1];
            $data2['commence_time'] = $it->commence_time;
            $data2['site_key'] = $it->sites_count>0 ? $it->sites[0]->site_key : null;
            $data2['site_nice'] = $it->sites_count>0 ? $it->sites[0]->site_nice : null;
            $data2['last_update'] = $it->sites_count>0 ? $it->sites[0]->last_update : null;
            $data2['totals'] = $it->sites_count>0 ? json_encode($it->sites[0]->odds->totals) : null;

            array_push($odds_totals,$data2);
        }
    }
    $middle = array();
    foreach ($odds_h2h as $h2h){
        foreach ($odds_spreads as $spread){
            if($h2h['sport_key']==$spread['sport_key'] && $h2h['home_team']==$spread['home_team'] && $h2h['commence_time']==$spread['commence_time']){
                //$h2h['spreads'] = $spread['spreads'];
                $mid['sport_key'] = $h2h['sport_key'];
                $mid['sport_nice'] = $h2h['sport_nice'];
                $mid['home_team'] = $h2h['home_team'];
                $mid['away_team'] = $h2h['away_team'];
                $mid['team1'] = $h2h['team1'];
                $mid['team2'] = $h2h['team2'];
                $mid['commence_time'] = $h2h['commence_time'];
                $mid['site_key'] = $h2h['site_key'];
                $mid['site_nice'] = $h2h['site_nice'];
                $mid['last_update'] = $h2h['last_update'];
                $mid['h2h'] = $h2h['h2h'];
                $mid['spreads'] = $spread['spreads'];

                array_push($middle, $mid);
            }
        }
    }
    foreach ($middle as $m){
        foreach ($odds_totals as $total){
            if($m['sport_key']==$total['sport_key'] && $m['home_team']==$total['home_team'] && $m['commence_time']==$total['commence_time']){
                //$h2h['totals'] = $total['totals'];
                $mid['sport_key'] = $m['sport_key'];
                $mid['sport_nice'] = $m['sport_nice'];
                $mid['home_team'] = $m['home_team'];
                $mid['away_team'] = $m['away_team'];
                $mid['team1'] = $m['team1'];
                $mid['team2'] = $m['team2'];
                $mid['commence_time'] = $m['commence_time'];
                $mid['site_key'] = $m['site_key'];
                $mid['site_nice'] = $m['site_nice'];
                $mid['last_update'] = $m['last_update'];
                $mid['h2h'] = $m['h2h'];
                $mid['spreads'] = $m['spreads'];
                $mid['totals'] = $total['totals'];

                array_push($odds, $mid);
            }
        }
    }

}

foreach ($odds as $ii){
    $sql4 = "SELECT * FROM odds WHERE sport_key='".$ii['sport_key']."' AND home_team='".$ii['home_team']."' AND commence_time='".$ii['commence_time']."'";
    $result4 = mysqli_query($connect, $sql4);
    if(mysqli_num_rows($result4)==0){
        $sql5 = "INSERT INTO odds (sport_key, sport_nice, home_team, away_team, team1, team2, commence_time, site_key, site_nice, last_update, h2h, spreads, totals, ts)
                VALUES ('$ii[sport_key]','$ii[sport_nice]', '$ii[home_team]', '$ii[away_team]' ,'$ii[team1]','$ii[team2]','$ii[commence_time]', '$ii[site_key]', '$ii[site_nice]','$ii[last_update]','$ii[h2h]','$ii[spreads]','$ii[totals]', CURRENT_TIMESTAMP )";
    }else{
        $sql5 = "UPDATE odds SET site_key='$ii[site_key]', site_nice='$ii[site_nice]', last_update='$ii[last_update]',h2h='$ii[h2h]', spreads='$ii[spreads]', totals='$ii[totals]' WHERE sport_key='$ii[sport_key]' AND home_team='$ii[home_team]' AND commence_time='$ii[commence_time]'";
    }
    $result = mysqli_query($connect, $sql5);
}
curl_close($cURLConnection);
