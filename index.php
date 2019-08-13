<?php
session_start();
require_once("./utils.php");
?>
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
            <div class="headerContainer">
                <div class="catchFraseContainer">
                    <?php if(!isset($_SESSION["id"]) AND !isset($_SESSION["signinUsername"])){
                        echo '<h3>For all your gaming needs.</h3>';
                    }else if(isset($_SESSION["id"]) AND isset($_SESSION["signinUsername"])){
                        echo '<h3>Hello, '. $_SESSION['signinUsername'] . '!</h3>'; 
                    }
                    ?>
                </div>
                <div class="headerContent">
                    <div class="logoContainer"><a href="index2.html"><img src="images/10.png" alt=""></a></div>
                    <nav class="navbarContainer">
                        <?php include("./frontend/modalMenu.php"); ?>
                    </nav>
                </div>
            </div>
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
                        // echo "Game: " . $data['name'] . ' ---- Rating: ' . $data['rating'] . '<br>';
                        include("frontend/smallcardgame.php");
                        $count++;
                    }
                    // $response->closeCursor();
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
            <div class="footer_container">
                <nav class="footerNav">
                    <ul class="footerNavLinks">
                        <li><a href="#" onclick="document.getElementById('aboutus').style.display='block'">About Us</a></li>
                        <li><a href="#">Contact US</a></li>
                        <li><a href="https://wcoding.com/" target="_blank">Wcoding</a></li>
                    </ul>
                </nav>
            </div>
        </section>
    </div>
    <?php
        if (isset($_GET["modal"]) AND $_GET["modal"] == "success"){
    ?>
    <script>
            var openAgain = document.querySelector("ul.navbar");
            let anchorTag = openAgain.lastElementChild.firstElementChild;
            anchorTag.click();
    </script>
    <?php
        }else if(isset($_GET["modal"]) AND $_GET["modal"] == "phperror"){
    ?>
    <script>
            var openAgainError = document.querySelector("ul.navbar");
            let anchorTagError = openAgainError.lastElementChild.firstElementChild;
            anchorTagError.click();
    </script>
    <?php
        }else if(isset($_GET["modal"]) AND $_GET["modal"] == "signuperror"){
    ?>
    <script>
            var openAgainSignUpError = document.querySelector("ul.navbar");
            let anchorTagSignUpError = openAgainSignUpError.lastElementChild.firstElementChild;
            anchorTagSignUpError.click();
    </script>
    <?php
        }
    ?>
</body>

</html>