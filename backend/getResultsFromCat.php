<?php
require('dbconnect.php');

$locations = isset($_POST['location']) ? $_POST['location'] : null;
$socials = isset($_POST['social']) ? $_POST['social'] : null;
$drink = isset($_POST['drink']) ? $_POST['drink'] : null; // show all results
$players = isset($_POST['anyP']) ? 'anyP' : htmlentities($_POST['playerRange']);
$time = isset($_POST['anyT']) ? 'anyT' : htmlentities($_POST['timeRange']);
$prep = isset($_POST['prepSelector']) ? $_POST['prepSelector'] : null;
// prefill checks
$checks['drink'] = $drink;
$checks['prep'] = $prep;
$checks['players'] = $players;
$checks['time'] = $time;

// print_r($_POST);
// Creation of the query
$query = "SELECT DISTINCT(name), isDrink, minP, maxP, shortTxt, fullTxt, minT, maxT, img, prep, rating FROM games g WHERE 1";

$subquery = "";
// Location
if ($locations and count($locations) >= 1) {
    $checks[$locations[0]] = $locations[0];
    $subquery = " AND  (";
    $locLength = count($locations);
    $subquery .= "$locations[0] = 1";

    if ($locLength == 1) {
        $subquery .= " )";
    }

    for ($i = 1; $i < $locLength; $i++) {
        $checks[$locations[$i]] = $locations[$i];
        $subquery .= " OR  $locations[$i] = 1";
    }
    if ($locLength > 1) {
        $subquery .= " )";
    }
}
// Social
if ($socials and count($socials) >= 1) {
    $checks[$socials[0]] = $socials[0];
    $subquery .= " AND (";
    $socLength = count($socials);
    $subquery .= "$socials[0] = 1";

    if ($socLength == 1) {
        $subquery .= " )";
    }

    for ($i = 1; $i < $socLength; $i++) {
        $checks[$socials[$i]] = $socials[$i];
        $subquery .= " OR  $socials[$i] = 1";
    }
    if ($socLength > 1) {
        $subquery .= " )";
    }
}


// Drinking
if ($drink == "drink") {
    $subquery .= " AND g.isDrink = 1";
} else if ($drink == "nodrink") {
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

// Continue queries
$query .= $subquery;

// echo "</br>$query</br>";
$response = $db->query($query);
$count = 0;

// print_r($query);

include('../frontend/resultsPage.php');