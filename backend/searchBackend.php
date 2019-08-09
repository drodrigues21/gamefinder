<?php
require_once('dbconnect.php');

$inquiry = ($_POST['search']);
$random = isset($_POST['randomGame']);


if (isset($random) and $random != '') {
    $query = "SELECT * FROM games g ORDER BY RAND() LIMIT 1";
    $random = '';
} else if ($inquiry != '') {
    $query = "SELECT * FROM games g WHERE name SOUNDS LIKE '$inquiry'";
} else {
    $query = "SELECT * FROM games g ORDER BY rating DESC LIMIT 25";
}



$response = $db->query($query);