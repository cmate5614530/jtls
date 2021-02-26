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

    if($res->success){
        foreach ($res->data as $it){
            $sport_key = $it->sport_key;
            $sport_nice = $it->sport_nice;
            $home_team = $it->home_team;
            $away_team = $it->teams[0]==$home_team ? $it->teams[1] : $it->teams[0];
            $commence_time = $it->commence_time;
            //$sql = "INSERT INTO events (sport_key, sport_nice, home_team, away_team, commence_time, ts) VALUES ('$sport_key','$sport_nice','$home_team','$away_team','$commence_time', CURRENT_TIMESTAMP )";
            $site_key = $it->sites_count>0 ? $it->sites[0]->site_key : null;
            $site_nice = $it->sites_count>0 ? $it->sites[0]->site_nice : null;
            $last_update = $it->sites_count>0 ? $it->sites[0]->last_update : null;
            $h2h = $it->sites_count>0 ? json_encode($it->sites[0]->odds->h2h) : null;

            $sql1 = "SELECT * FROM odds_h2h WHERE sport_key='$sport_key' AND commence_time='$commence_time' AND home_team='$home_team'";
            $result1 = mysqli_query($connect, $sql1);
            if(mysqli_num_rows($result1)==0){
                $sql = "INSERT INTO odds_h2h (sport_key, sport_nice, home_team, away_team, commence_time, site_key, site_nice, last_update, odds, ts)
                    VALUES ('$sport_key','$sport_nice','$home_team','$away_team','$commence_time', '$site_key','$site_nice','$last_update','$h2h', CURRENT_TIMESTAMP )";
            }else{
                $sql = "UPDATE odds_h2h SET site_key='$site_key', site_nice='$site_nice',last_update='$last_update',odds='$h2h' WHERE sport_key='$sport_key' AND commence_time='$commence_time' AND home_team='$home_team'";
            }
            $result = mysqli_query($connect, $sql);
        }
    }

    curl_setopt($cURLConnection, CURLOPT_URL, $api_url.'/odds/?apiKey='.$api_key.'&sport='.$item.'&region=uk&mkt=spreads&oddsFormat=american');
    $response = curl_exec($cURLConnection);
    $res = json_decode($response);

    if($res->success){
        foreach ($res->data as $it){
            $sport_key = $it->sport_key;
            $sport_nice = $it->sport_nice;
            $home_team = $it->home_team;
            $away_team = $it->teams[0]==$home_team ? $it->teams[1] : $it->teams[0];
            $commence_time = $it->commence_time;
            //$sql = "INSERT INTO events (sport_key, sport_nice, home_team, away_team, commence_time, ts) VALUES ('$sport_key','$sport_nice','$home_team','$away_team','$commence_time', CURRENT_TIMESTAMP )";
            $site_key = $it->sites_count>0 ? $it->sites[0]->site_key : null;
            $site_nice = $it->sites_count>0 ? $it->sites[0]->site_nice : null;
            $last_update = $it->sites_count>0 ? $it->sites[0]->last_update : null;
            $spreads = $it->sites_count>0 ? json_encode($it->sites[0]->odds->spreads) : null;

            $sql2 = "SELECT * FROM odds_spreads WHERE sport_key='$sport_key' AND commence_time='$commence_time' AND home_team='$home_team'";
            $result2 = mysqli_query($connect, $sql2);
            if(mysqli_num_rows($result2)==0){
                $sql = "INSERT INTO odds_spreads (sport_key, sport_nice, home_team, away_team, commence_time, site_key, site_nice, last_update, odds, ts)
                    VALUES ('$sport_key','$sport_nice','$home_team','$away_team','$commence_time', '$site_key','$site_nice','$last_update','$spreads', CURRENT_TIMESTAMP )";
            }else{
                $sql = "UPDATE odds_spreads SET site_key='$site_key', site_nice='$site_nice',last_update='$last_update',odds='$spreads' WHERE sport_key='$sport_key' AND commence_time='$commence_time' AND home_team='$home_team'";
            }
            $result = mysqli_query($connect, $sql);
        }
    }

    curl_setopt($cURLConnection, CURLOPT_URL, $api_url.'/odds/?apiKey='.$api_key.'&sport='.$item.'&region=uk&mkt=totals&oddsFormat=american');
    $response = curl_exec($cURLConnection);
    $res = json_decode($response);

    if($res->success){
        foreach ($res->data as $it){
            $sport_key = $it->sport_key;
            $sport_nice = $it->sport_nice;
            $home_team = $it->home_team;
            $away_team = $it->teams[0]==$home_team ? $it->teams[1] : $it->teams[0];
            $commence_time = $it->commence_time;
            //$sql = "INSERT INTO events (sport_key, sport_nice, home_team, away_team, commence_time, ts) VALUES ('$sport_key','$sport_nice','$home_team','$away_team','$commence_time', CURRENT_TIMESTAMP )";
            $site_key = $it->sites_count>0 ? $it->sites[0]->site_key : null;
            $site_nice = $it->sites_count>0 ? $it->sites[0]->site_nice : null;
            $last_update = $it->sites_count>0 ? $it->sites[0]->last_update : null;
            $totals = $it->sites_count>0 ? json_encode($it->sites[0]->odds->totals) : null;

//            if(!in_array($home_team, $teams)){
//                array_push($teams, $home_team);
//            }
//            if(!in_array($away_team, $teams)){
//                array_push($teams, $away_team);
//            }

            $sql3 = "SELECT * FROM odds_totals WHERE sport_key='$sport_key' AND commence_time='$commence_time' AND home_team='$home_team'";
            $result3 = mysqli_query($connect, $sql3);
            if(mysqli_num_rows($result3)==0){
                $sql = "INSERT INTO odds_totals (sport_key, sport_nice, home_team, away_team, commence_time, site_key, site_nice, last_update, odds, ts)
                    VALUES ('$sport_key','$sport_nice','$home_team','$away_team','$commence_time', '$site_key','$site_nice','$last_update','$totals', CURRENT_TIMESTAMP )";
            }else{
                $sql = "UPDATE odds_totals SET site_key='$site_key', site_nice='$site_nice',last_update='$last_update',odds='$totals' WHERE sport_key='$sport_key' AND commence_time='$commence_time' AND home_team='$home_team'";
            }
            $result = mysqli_query($connect, $sql);
        }
    }
}

//foreach ($teams as $team){
//    var_dump($teams);
//    $sql4 = "SELECT * FROM teams WHERE team_name='$team'";
//    $result4 = mysqli_query($connect, $sql4);
//    if(mysqli_num_rows($result4)==0){
//        $sql5 = "INSERT INTO teams (team_name, ts) VALUES ('$team', CURRENT_TIMESTAMP )";
//        $result = mysqli_query($connect, $sql5);
//    }
//}
curl_close($cURLConnection);
