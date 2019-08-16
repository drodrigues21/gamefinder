<?php 
require('dbconnect.php');


$gameName = htmlspecialchars($_POST['name']);
$shortTxt = htmlspecialchars($_POST['shortTxt']);
$fullTxt =  htmlspecialchars($_POST['fullTxt']);
$locations = isset($_POST['location']) ? $_POST['location'] : null;
$socials = isset($_POST['social']) ? $_POST['social'] : null;
$drink = isset($_POST['radiogroup1']) ? $_POST['radiogroup1'] : 2; // show all results
$prep = isset($_POST['radiogroup2']) ? $_POST['radiogroup2'] : null;
$minP = ($_POST['minP']);
$maxP = ($_POST['maxP']);
$minT = ($_POST['minT']);
$maxT = ($_POST['maxT']);


    // $req = $db->prepare("INSERT INTO games(name, shortTxt, fullTxt, minT, maxT, minP, maxP) VALUES (:name, :shortTxt, :fullTxt, :minT, :maxT, :minP, :maxP");
    

// Creation of the query
// $query = "INSERT INTO games(name, shortTxt, fullTxt, isDrink, minP, maxP, minT, maxT, prep) VALUES (WHERE 1)";
// $subquery = "";

// Location (Need to add IN or ( OR ))
if ($locations and count($locations) >= 1) {
    // $subquery = " AND ";
    $locLength = count($locations);
    // $subquery .= "$locations[0] = 1";
    for ($i = 1; $i < $locLength; $i++) {
        echo $locations[$i];
        // $subquery .= " OR  $locations[$i] = 1";
    }
}
// Social (Need to add IN or ( OR ))
// if ($socials and count($socials) >= 1) {
//     $subquery .= " AND ";
//     $socLength = count($socials);
//     $subquery .= "$socials[0] = 1";
//     for ($i = 1; $i < $socLength; $i++) {
//         $subquery .= " OR  $socials[$i] = 1";
//     }
// }
