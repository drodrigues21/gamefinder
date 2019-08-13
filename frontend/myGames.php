<?php session_start();
?>

<head>
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/modalMenu.css">
    <link rel="stylesheet" href="../styles/myGames.css">
    <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
    <script src="https://kit.fontawesome.com/7fdeb94f09.js"></script>
</head>

<body>
    <div class="myGamesContainer">
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
                <div class="logoContainer"><a href="../index.php"><img src="../images/10.png" alt=""></a></div>
                <nav class="navbarContainer">
                    <?php include("modalMenu.php"); ?>
                </nav>
            </div>
        </div>
        <div class="myGamesContent">
            <div class="myGamesBtn">
                <button class="addGameBtn">Add a Game</button>
                <div class="addGameForm">
                    <form action="">
                        <h3>Add your game</h3>
                        <div>
                            <label for="gameName">Name of the Game:</label>
                            <input type="text">
                        </div>
                        <div>
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" cols="30" rows="10"></textarea>
                        </div>
                        <div>
                            <label for="rules">rules:</label>
                            <textarea name="rules" id="rules" cols="30" rows="10"></textarea>
                        </div>
                        <div>
                            <label for="time">Time:</label>
                            <div id="timeSlider" class="range-slider ">
                            <input id="timeRange" type="range" min="5" max="60" value="0" class="slider"
                            name="timeRange" onchange="show_value(this.value);">
                            </div>
                            <div class="timeBoxMinmax">
                                <span>5</span>
                                <span>60+</span>
                            </div>
                        </div>
                        <div>   
                            <label for="time">Players:</label>                     
                            <div class="rangeSlider">
                                <input id="playerRange" class="slider" name="playerRange" type="range" value="2"
                                    min="2" max="20">
                            </div>
                            <div class="playerBoxMinmax">
                                <span>2</span>
                                <span>20+</span>
                            </div>
                        </div>
                        <div class="FromButton">
                            <button type="submit" id="subscribe">Find!</button>
                            <button type="reset" id="reset">Reset</button>
                        </div>
                        <span class="closeAddGame">X</span>
                    </form>
                </div>
            </div>
            <div class="myGames">
            <?php 
                include("../backend/dbconnect.php");
                $userId = $_SESSION["id"];
                $user_games["Evaluation"] = array();
                $user_games["Validated"] = array();
                $user_games["Rejected"] = array();
                $req = $db->query("SELECT * FROM games WHERE userId = $userId  ORDER BY gameStatus");
                while ($data = $req->fetch()) {

                    switch ($data["gameStatus"]) {
                        case "Evaluation" :
                        array_push($user_games["Evaluation"], $data);
                        break;
                        case "Validated" :
                        array_push($user_games["Validated"], $data);
                        break;
                        case "Rejected" :
                        array_push($user_games["Rejected"], $data);
                        break;
                        default : break;
                    }
                }

                foreach($user_games as $key =>$state) {
                    echo " <div class='statusContainer $key'> ";
                    foreach($state as $data) {
                        include("statusGame.php");
                    }
                    echo "</div>";
                }
            ?>   
            </div>
        </div>
        <div class="footerContainer">
            <?php include("footer.php"); ?>
        </div>
    </div>
    <script src="../scripts/addGame.js"></script>
    <script src="../scripts/modalMenu.js"></script>
</body>


