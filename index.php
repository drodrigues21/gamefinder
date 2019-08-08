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


    <link rel="stylesheet" href="styles/main.css">
    <script defer src="scripts/playerslider.js"></script>
    <title>Gamefinder</title>
</head>

<body>
    <div class="mainContainer">
        <section class="firstSectionContainer">
            <?php include("frontend/menuBar.php"); ?>
            <div class="searchBarContainer">
                <h2>Search for a game and have fun!</h2>
                <form action="">
                    <div class="searchField">
                        <input type="text" class="searchBox" placeholder="What are you looking for?">
                        <button type="submit" class=" btn searchButton"><i class="fas fa-search"></i></button>
                    </div>
                    <button type="submit" class="btn surpriseButton">Surprise me!</button>
                    <!-- <button type="submit" class="btn otherButton">What?</button> -->
                </form>
            </div>
            <div class="topFiveContainer">
                <div class="topFiveHeader">
                    <h3>Top 5 games</h3>
                </div>
                <!-- include file of backend +
            do the while and include once-->
                <div class="topFiveContent">
                    <?php
                    include("backend/getTopFive.php");
                    $count = 0;
                    while ($data = $response->fetch()) {
                        include("frontend/smallcardgame.php");
                        $count++;
                    }
                    ?>
                </div>
            </div>
            <div class="arrowsContainer">
                <div class="arrows">
                    <a href="index.php#filterCatContainer"><span></span></a>
                </div>
            </div>
        </section>
        <section class="secondSectionContainer">
            <div id="filterCatContainer">
                <?php include("frontend/subSecFilterCat.php"); ?>
            </div>
            <?php include("frontend/footer.php"); ?>
        </section>
    </div>
    <script src="scripts/modelTemplate.js"></script>
</body>

</html>