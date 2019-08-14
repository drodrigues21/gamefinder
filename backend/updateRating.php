<?php
session_start();

require('../backend/dbconnect.php');

// 0 this is the ajax (lol?
// 1  need to update games.rating from $rate_bg !!
// 2 need to make it on click
// 3 need to make update only available when logged in ($_SESSION)

if ($_POST['act'] == 'rate') {
    $userID = $_SESSION['id'];
    $gameID = $data['id'];
    $rating = $_POST['rate'];

    $query = "SELECT * FROM ratings";
    $response = $db->query($query);

    while ($data = $response->fetch(PDO::FETCH_ASSOC)) {
        $rate_db[] = $data;
    }
    if (@count($rate_db) == 0) {
        $query = "INSERT INTO ratings (game_id, user_id, rating)VALUES('$gameID', '$userID', '$rating')";
        $response = $db->query($query);
    } else {
        $query = "UPDATE ratings SET rating= '$rating' WHERE user_id = '$userID'";
        $response = $db->query($query);
    }
}