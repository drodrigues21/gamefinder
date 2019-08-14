<?php 
require('dbconnect.php');


// $gameName = htmlspecialchars($_POST['name']);
// $shortTxt = htmlspecialchars($_POST['shortTxt']);
// $fullTxt =  htmlspecialchars($_POST['fullTxt']);
// $locations = isset($_POST['location']) ? $_POST['location'] : null;
// $socials = isset($_POST['social']) ? $_POST['social'] : null;
// $drink = isset($_POST['radiogroup1']) ? $_POST['radiogroup1'] : 2; // show all results
// $prep = isset($_POST['radiogroup2']) ? $_POST['radiogroup2'] : null;
// $minP = ($_POST['minP']);
// $maxP = ($_POST['maxP']);
// $minT = ($_POST['minT']);
// $maxT = ($_POST['maxT']);

if (isset($_POST['name']) AND isset($_POST['shortTxt']) AND isset($_POST['fullTxt']) AND isset($_POST['minT']) AND isset($_POST['maxT']) AND isset($_POST['minP']) AND isset($_POST['maxP'])){
    $gameName = $_POST['name'];
    $shortTxt = $_POST['shortTxt'];
    $fullTxt = $_POST['fullTxt'];
    // $indoor = $_POST['indoor'];
    // $outdoor = $_POST['outdoor'];
    $minT = $_POST['minT'];   
    $maxT = $_POST['maxT'];   
    $minP = $_POST['minP'];   
    $maxP = $_POST['maxP'];   
   
    $params = array(
        'name' => $gameName,
        'shortTxt' => $shortTxt,
        'fullTxt' =>$fullTxt,
        'minT' =>$minT,
        'maxT' =>$maxT,
        'minP' =>$minP,
        'maxP' =>$maxP);

    $req = $db->prepare("INSERT INTO games(name, shortTxt, fullTxt, minT, maxT, minP, maxP) VALUES (:name, :shortTxt, :fullTxt, :minT, :maxT, :minP, :maxP");
    $req->execute($params);

    header("Location: ../frontend/myGames.php");

} 
catch (Exception $exc) {
                echo $exc->getMessage();
    }
?>

// catch (Exception $exc) {
//             echo $exc->getMessage();
// }

// Creation of the query
// $query = "INSERT INTO games(name, shortTxt, fullTxt, isDrink, minP, maxP, minT, maxT, prep) VALUES (WHERE 1)";
// $subquery = "";

// // Location (Need to add IN or ( OR ))
// if ($locations and count($locations) >= 1) {
//     $subquery = " AND ";
//     $locLength = count($locations);
//     $subquery .= "$locations[0] = 1";
//     for ($i = 1; $i < $locLength; $i++) {
//         $subquery .= " OR  $locations[$i] = 1";
//     }
// }
// // Social (Need to add IN or ( OR ))
// if ($socials and count($socials) >= 1) {
//     $subquery .= " AND ";
//     $socLength = count($socials);
//     $subquery .= "$socials[0] = 1";
//     for ($i = 1; $i < $socLength; $i++) {
//         $subquery .= " OR  $socials[$i] = 1";
//     }
// }
// // Drinking
// if ($drink == 1) {
//     $subquery .= " AND g.isDrink = $drink";
// } else if ($drink == 'NULL') {
//     $subquery .= " AND g.isDrink IS NULL";
// }

// // Players
// if ($players == 'anyP') {
//     $subquery .= " AND g.minP >= 0 AND g.maxP <= 100";
// } else if ($players == 21) {
//     $subquery .= " AND g.minP >= $players AND g.maxP <= 100";
// } else if ($players <= 20) {
//     $subquery .= " AND g.minP <= $players AND g.maxP >= $players";
// }
// // Time
// if ($time == 'anyT') {
//     $subquery .= " AND g.minT >= 0 AND g.maxT <= 300";
// } else if ($time == 61) {
//     $subquery .= " AND g.minT >= $time AND g.maxT <= 300";
// } else if ($time <= 60) {
//     $subquery .= " AND g.minT <= $time AND g.maxT >= $time";
// }
// // Prep
// if ($prep == 'min') {
//     $subquery .= " AND g.prep = '$prep'";
// } else if ($prep == 'med') {
//     $subquery .= " AND g.prep IN ('$prep', 'min')";
// } else if ($prep == 'max') {
//     $subquery .= " AND g.prep IN ('$prep','min', 'med')";
// }

// // Continue queries
// $query .= $subquery;

// // echo "</br>$query</br>";
// $response = $db->query($query);



// if (isset($_POST['name']) AND isset($_POST['shortTxt']) AND isset($_POST['fullTxt']) AND isset($_POST['minT']) AND isset($_POST['maxT']) AND isset($_POST['minP']) AND isset($_POST['maxP'])){
//     $gameName = $_POST['name'];
//     $shortTxt = $_POST['shortTxt'];
//     $fullTxt = $_POST['fullTxt'];
//     // $indoor = $_POST['indoor'];
//     // $outdoor = $_POST['outdoor'];
//     $minT = $_POST['minT'];   
//     $maxT = $_POST['maxT'];   
//     $minP = $_POST['minP'];   
//     $maxP = $_POST['maxP'];   
   
//     $params = array(
//         'name' => $gameName,
//         'shortTxt' => $shortTxt,
//         'fullTxt' =>$fullTxt
//         'minT' =>$minT
//         'maxT' =>$maxT
//         'minP' =>$minP
//         'maxP' =>$maxP);

//     $req = $db->prepare("INSERT INTO games(name, shortTxt, fullTxt, minT, maxT, minP, maxP) VALUES (:name, :shortTxt, :fullTxt, :minT, :maxT, :minP, :maxP");
//     $req->execute($params);


//     header("Location: ../frontend/myGames.php");


// } catch (Exception $exc) {
//             echo $exc->getMessage();
// }
