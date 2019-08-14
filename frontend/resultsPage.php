<?php 
session_start();
require_once("../utils.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,700,700i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7fdeb94f09.js"></script>


    <link rel="stylesheet" href="<?= LOCALHOST ?>styles/main.css">
    <link rel="stylesheet" href="<?= LOCALHOST ?>styles/cardGame.css">
    <script defer src="<?= LOCALHOST ?>scripts/playerslider.js"></script>
    <link type="text/css" rel="stylesheet" href="<?= LOCALHOST ?>styles/rating.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <title>Results</title>
</head>
<?php
if (empty($_POST["filterCat"])) {
    include("../backend/searchBackend.php");
} else {
    include("../backend/getResultsFromCat.php");
}
?>

<body>
    <div class="mainContainer">
        <section class="firstSectionContainer">
            <?php include("menuBar.php"); ?>
        </section>

        <section class="secondSectionContainer">
            <div id="filterCatContainer">
                <?php include("subSecFilterCat.php"); ?>
            </div>
        </section>

        <section class="sectionCont">
            <?php
            while ($data = $response->fetch()) {
                include('../frontend/cardGame.php');
            }
            ?>
        </section>
        <section>
            <?php include("footer.php"); ?>
        </section>
    </div>
    <script src="../scripts/modelTemplate.js"></script>
</body>