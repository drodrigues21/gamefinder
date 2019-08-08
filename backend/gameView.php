<?php

include("dbconnect.php");
$game_id = $_REQUEST["game_id"];

$response = $db->query("SELECT name, fullTxt, minP, maxP, minT, maxT, img, rating FROM games WHERE id=$game_id");
echo json_encode($response->fetch());
