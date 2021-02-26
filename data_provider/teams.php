<?php
include('./config.php');
$sql = "SELECT team1, team2 FROM odds";
$result = mysqli_query($connect, $sql);
$team_array = array();

if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
//        if(!in_array($row['team1'], $team_array)){
//            array_push($team_array, $row['team1']);
//        }
//        if(!in_array($row['team2'], $team_array)){
//            array_push($team_array, $row['team2']);
//        }
        if($row['team1']) array_push( $team_array,$row['team1']);
        if($row['team2']) array_push( $team_array,$row['team2']);

    }
    $teams = array_unique($team_array);

    foreach ($teams as $item){
        $sql4 = "SELECT * FROM teams WHERE team_name='".$item."'";
        $result4 = mysqli_query($connect, $sql4);
        if(mysqli_num_rows($result4)==0){
            $sql = "INSERT INTO teams (team_name, ts ) VALUE ('$item', CURRENT_TIMESTAMP )";
            $result = mysqli_query($connect, $sql);
        }
    }
}
