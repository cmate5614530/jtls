<?php
include('./config.php');

$cURLConnection = curl_init();
curl_setopt($cURLConnection, CURLOPT_URL, $api_url.'/sports/?apiKey='.$api_key);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($cURLConnection);
$res = json_decode($response);
curl_close($cURLConnection);

$sql = "SELECT key_text FROM sports";
$result = mysqli_query($connect, $sql);
$key_text_array = array();

if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        array_push($key_text_array, $row['key_text']);
    }
}

if($res->success){
    //check if sports data from api site includes
    foreach ($res->data as $item){
        if(!in_array($item->key, $key_text_array)){
            $sql = "INSERT INTO sports (key_text, active, group_text, details, title, has_outrights, ts ) VALUE ('$item->key', '$item->active', '$item->group','$item->details', '$item->title', '$item->has_outrights', CURRENT_TIMESTAMP )";
        }else{
            $sql = "UPDATE sports SET active='$item->active',group_text='$item->group', details='$item->details', title='$item->title', has_outrights='$item->has_outrights' WHERE key_text='$item->key'";
        }
        $result = mysqli_query($connect, $sql);
    }

}



