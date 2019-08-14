<?php
if (!@include_once('../utils.php')) {
    require_once("./utils.php");
}
try {
    $db = new PDO('mysql:host=localhost;dbname=' . DB . ';charset=utf8', DB_LOGIN, DB_PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
    die('Error : ' . $e->getMessage());
}