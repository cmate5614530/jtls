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
foreach($key_text_array as $item){
    curl_setopt($cURLConnection, CURLOPT_URL, $api_url.'/odds/?apiKey='.$api_key.'&sport='.$item.'&region=uk&mkt=totals&oddsFormat=american');
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($cURLConnection);
    $res = json_decode($response);

    if($res->success){
        foreach ($res->data as $it){
            $game_id = $it->id;
            $sport_key = $it->sport_key;
            $sport_nice = $it->sport_nice;
            $home_team = $it->home_team;
            $away_team = $it->teams[0]==$it->home_team ? $it->teams[1] : $it->teams[0];
            $team1 = $it->teams[0];
            $team2 = $it->teams[1];
            $commence_time = $it->commence_time;
            $site_key = $it->sites_count>0 ? $it->sites[0]->site_key : null;
            $site_nice = $it->sites_count>0 ? $it->sites[0]->site_nice : null;
            $last_update = $it->sites_count>0 ? $it->sites[0]->last_update : null;
            $totals = $it->sites_count>0 ? json_encode($it->sites[0]->odds->totals) : null;

            $sql1 = "SELECT * FROM odds WHERE game_id='".$game_id."'";
            $result1 = mysqli_query($connect, $sql1);
            if(mysqli_num_rows($result1)==0){
                $sql = "INSERT INTO odds (game_id, sport_key, sport_nice, home_team, away_team, team1, team2, commence_time, site_key, site_nice, last_update, totals, ts)
                VALUES ('$game_id','$sport_key','$sport_nice', '$home_team', '$away_team' ,'$team1','$team2','$commence_time', '$site_key', '$site_nice','$last_update','$totals', CURRENT_TIMESTAMP )";
            }else{
                $sql = "UPDATE odds SET totals='$totals', last_update='$last_update', commence_time='$commence_time' WHERE game_id='$game_id'";
            }
            $result = mysqli_query($connect, $sql);
        }
    }
}
print_r('Successfully finished(totals)');
curl_close($cURLConnection);
