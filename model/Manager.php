<?php

class Manager
{
    protected function dbConnect()
    {
        if (!@include_once('../utils.php')) {
            require_once("./utils.php");
        }
        try {
            return  new PDO('mysql:host=localhost;dbname=' . DB . ';charset=utf8', LOGIN, PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            die('Error : ' . $e->getMessage());
        }
    }
}
