<?php


// if (isset($_REQUEST['username'])){
//     save_search_results();
// };

function save_search_results(){
    if(isset($_REQUEST['username']) && 
    isset($_REQUEST['distance_in_kilo']) &&
    isset($_REQUEST['distance_in_mile']) && 
    isset($_REQUEST['duration_text']) && 
    isset($_REQUEST['origin']) && 
    isset($_REQUEST['destination']) && 
    isset($_REQUEST['taxi_fare'])
    ){
        $username = $_REQUEST["username"];
        $in_kilo = $_REQUEST["distance_in_kilo"];
        $in_mile = $_REQUEST["distance_in_mile"];
        $origin = $_REQUEST["origin"];
        $destination = $_REQUEST["destination"];
        $duration_text = $_REQUEST["duration_text"];
        $taxi_price = $_REQUEST["taxi_fare"];

        $values = "('$username','$in_kilo','$in_mile','$origin',
        '$destination','$duration_text','$taxi_price')";

        $sql = "INSERT INTO search_results(username,distance_in_kilo,distance_in_mile,
        duration_in_text,origin,destination,taxi_price) VALUES {$values}";
        $db = mysql_connect("localhost","root","","booking") or die ("failed to connect");
        $result = mysql_query($db,$sql) or die(mysql_error($db));
        header('Content-Type: application/json');
        if ($result){
            echo json_encode(array("status" => "1"));
        }else{
            echo json_encode(mysql_error($db));
        }
    }else{
        echo json_encode("missing input");
    }
};