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


    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/cardGame.css">
    <script defer src="../scripts/playerslider.js"></script>
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
            <?php include("../frontend/menuBar.php"); ?>
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

</body>