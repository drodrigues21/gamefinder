<?php 

try {
    $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
    die('Error : ' . $e->getMessage());
}

$response = $db->query("SELECT * FROM games ORDER BY rating DESC LIMIT 0, 5");
