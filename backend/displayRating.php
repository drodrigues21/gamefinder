<?php
require('../backend/dbconnect.php');
$game_id = $_GET["game_id"];
$query = "SELECT * FROM ratings WHERE game_id = $game_id";
$response = $db->query($query);

// need to update games.rating from $rate_bg !!

while ($data = $response->fetch(PDO::FETCH_ASSOC)) {
    $rate_db[] = $data;
    $sum_rates[] = $data['rating'];
}
if (@count($rate_db)) {
    $rate_times = count($rate_db);
    $sum_rates = array_sum($sum_rates);
    $rate_value = $sum_rates / $rate_times;
    $rate_bg = (($rate_value) / 5) * 100;
} else {
    $rate_times = 0;
    $rate_value = 0;
    $rate_bg = 0;
}