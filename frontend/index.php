<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,700,700i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../styles/main.css">
    <script src="https://kit.fontawesome.com/7fdeb94f09.js"></script>
    <script defer src="../scripts/playerslider.js"></script>
    <title>Gamefinder</title>
</head>

<body>
    <div class="mainContainer">
        <section class="firstSectionContainer" >
        <div class="headerContainer">
            <div class="catchFraseContainer">
                <h3>For all your gaming needs.</h3>
            </div>
            <div class="headerContent">
                <div class="logoContainer"><a href="index2.html"><img src="../images/10.png" alt=""></a></div>
                <nav class="navbarContainer">
                    <ul class="navbar">
                        <li><a href="index2.html">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Tools</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Login/Register</a></li>
                    </ul>
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
                    include("../backend/getTopFive.php");
                    $count = 0;
                    while ($data = $response->fetch()) {
                        // echo "Game: " . $data['name'] . ' ---- Rating: ' . $data['rating'] . '<br>';
                        include("smallcardgame.php");
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
        <section class="secondSectionContainer" >
            <div id="filterCatContainer">
                <?php include("subSecFilterCat.php"); ?>
            </div>
            <div class="footer_container">
                <nav class="footerNav">
                   <ul class="footerNavLinks">
                       <li><a href="#">About Us</a></li>
                       <li><a href="#">Contact US</a></li>
                       <li><a href="https://wcoding.com/" target="_blank">Wcoding</a></li>
                   </ul>
                </nav>
            </div>
        </section>
    </div>
</body>

</html>