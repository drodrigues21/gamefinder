<?php
include("dbconnect.php");
$userId = $_SESSION["id"];
$req = $db->query("SELECT * FROM members WHERE id=$userId ");
$user = $req ->fetch();