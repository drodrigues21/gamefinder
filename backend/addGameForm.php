<?php
require('dbconnect.php');

// print_r($_POST);
$gameName = addslashes(htmlspecialchars($_POST['name'])); 
$shortTxt = addslashes(htmlspecialchars($_POST['shortTxt'])); 
$fullTxt =  addslashes(htmlspecialchars($_POST['fullTxt'])); 
$minP = $_POST['minP']; 
$maxP = $_POST['maxP']; 
$minT = $_POST['minT']; 
$maxT = $_POST['maxT'];
$prep = isset($_POST['prepSelector']) ? $_POST['prepSelector'] : null; 
$userId =isset($_POST['userId']) ? $_POST['userId'] : null;
$img = isset($_POST['game_img']) ? $_POST['game_img'] : "example.jpg";
$drink = isset($_POST['isDrink']) ? $_POST['isDrink'] : null;
$locations = isset($_POST['location']) ? $_POST['location'] : null;
$socials = isset($_POST['social']) ? $_POST['social'] : null;



$columns = " INSERT INTO games (name, shortTxt, fullTxt, minP, maxP, minT, maxT , prep, userId, img ";
$values = ")  VALUES ( '$gameName' , '$shortTxt', '$fullTxt', $minT, $maxT, $minP, $maxP, '$prep', $userId, '$img'";

if ($drink == 1 ) {
    $columns.=", isDrink ";
    $values.=", $drink ";
}
foreach($locations as $location) {
    $columns.=",  $location ";
    $values.=",  1";
}
foreach($socials as $social) {
    $columns.=",  $social ";
    $values.=", 1 ";
}
$query = $columns.$values.")";
// echo $query;
$req = $db->prepare($query) ;
$req->execute();

header("Location:../frontend/myGames.php");

?>