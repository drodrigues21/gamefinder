<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=gamefinder;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
    die('Error : ' . $e->getMessage());
}