<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,700,700i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">
    <script src="https://kit.fontawesome.com/7fdeb94f09.js"></script>
    <title>Gamefinder</title>
</head>

<body>
    <div class="main_container">
        <div class="header_container">
            <div class="catch_frase_container">
                <h3>For all your gaming needs.</h3>
            </div>
            <div class="header_content">
                <div class="logo_container"><a href="index2.html"><img src="images/10.png" alt=""></a></div>
                <nav class="navbar_container">
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
        <div class="search_bar_container">
            <h2>Search for a game and have fun!</h2>
            <form action="">
                <div class="search_field">
                    <input type="text" class="search_box" placeholder="What are you looking for?">
                    <button type="submit" class=" btn search_button"><i class="fas fa-search"></i></button>
                </div>
                <button type="submit" class="btn surprise_button">Surprise me!</button>
                <button type="submit" class="btn other_button">What?</button>
            </form>
        </div>
        <div class="top_five_container">
            <div class="top_five_header">
                <h3>Top 5 games</h3>
            </div>
            <div class="top_five_content">
                <div class="top_five">
                    <?php include("smallcardgame.php") ?>
                </div>
                <div class="top_five">
                    <?php include("smallcardgame.php") ?>
                </div>
                <div class="top_five">
                    <?php include("smallcardgame.php") ?>
                </div>
                <div class="top_five">
                    <?php include("smallcardgame.php") ?>
                </div>
                <div class="top_five">
                    <?php include("smallcardgame.php") ?>
                </div>
            </div>
        </div>
        <div class="arrows_container">
            <div class="arrows">
                <span></span>
            </div>
        </div>
    </div>
</body>

</html>