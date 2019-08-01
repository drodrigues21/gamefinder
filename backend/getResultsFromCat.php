<?php
require('dbconnect.php');

$locations = isset($_POST['location']) ? $_POST['location'] : null;
$socials = isset($_POST['social']) ? $_POST['social'] : null;
$drink = isset($_POST['radiogroup1']) ? $_POST['radiogroup1'] : 2; // show all results
$players = isset($_POST['anyP']) ? 'anyP' : htmlentities($_POST['playerRange']);
$time = isset($_POST['anyT']) ? 'anyT' : htmlentities($_POST['timeRange']);
$prep = isset($_POST['radiogroup2']) ? $_POST['radiogroup2'] : null;

// Creation of the query
$query = "SELECT DISTINCT(name), isDrink, minP, maxP, minT, maxT, prep FROM games g WHERE 1";

// Location (Need to add IN or ( OR ))
if ($locations and count($locations) >= 1) {
    $subquery = " AND ";
    $locLength = count($locations);
    $subquery .= "$locations[0] = 1";
    for ($i = 1; $i < $locLength; $i++) {
        $subquery .= " OR  $locations[$i] = 1";
    }
}
// Social (Need to add IN or ( OR ))
if ($socials and count($socials) >= 1) {
    $subquery .= " AND ";
    $socLength = count($socials);
    $subquery .= "$socials[0] = 1";
    for ($i = 1; $i < $socLength; $i++) {
        $subquery .= " OR  $socials[$i] = 1";
    }
}
// Drinking
if ($drink == 1) {
    $subquery .= " AND g.isDrink = $drink";
} else if ($drink == 'NULL') {
    $subquery .= " AND g.isDrink IS NULL";
}
// Players
if ($players == 'anyP') {
    $subquery .= " AND g.minP >= 0 AND g.maxP <= 100";
} else if ($players == 21) {
    $subquery .= " AND g.minP >= $players AND g.maxP <= 100";
} else if ($players <= 20) {
    $subquery .= " AND g.minP <= $players AND g.maxP >= $players";
}
// Time
if ($time == 'anyT') {
    $subquery .= " AND g.minT >= 0 AND g.maxT <= 300";
} else if ($time == 61) {
    $subquery .= " AND g.minT >= $time AND g.maxT <= 300";
} else if ($time <= 60) {
    $subquery .= " AND g.minT <= $time AND g.maxT >= $time";
}
// Prep
if ($prep == 'min') {
    $subquery .= " AND g.prep = '$prep'";
} else if ($prep == 'med') {
    $subquery .= " AND g.prep IN ('$prep', 'min')";
} else if ($prep == 'max') {
    $subquery .= " AND g.prep IN ('$prep','min', 'med')";
}

// BUGS
// 1 sliders are always passing a value
// 2 search filters not interacting as intended

// Continue queries
$query .= $subquery;

echo "</br>$query</br>";
$response = $db->query($query);

require_once("displayResults.php");
//header('Location: displayResults.php');