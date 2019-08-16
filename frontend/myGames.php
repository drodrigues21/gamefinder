<?php 
session_start();
require('../backend/dbconnect.php');
?>

<head>
    <link rel="stylesheet" href="<?= LOCALHOST ?>styles/main.css">
    <link rel="stylesheet" href="<?= LOCALHOST ?>styles/modalMenu.css">
    <link rel="stylesheet" href="<?= LOCALHOST ?>styles/myGames.css">
    <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
    <script src="https://kit.fontawesome.com/7fdeb94f09.js"></script>
</head>

<body>
    <div class="myGamesContainer">
        <div class="headerContainer">
            <div class="catchFraseContainer">
                <?php if (!isset($_SESSION["id"]) and !isset($_SESSION["signinUsername"])) {
                    echo '<h3>For all your gaming needs.</h3>';
                } else if (isset($_SESSION["id"]) and isset($_SESSION["signinUsername"])) {
                    echo '<h3>Hello, ' . $_SESSION['signinUsername'] . '!</h3>';
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
                <div class="addGameFormContainer">
                    <form action="../backend/addGameForm.php" method="POST" id="addGameForm">
                        <input type="hidden" name="userId" value="<?=$_SESSION['id'];?>"/>
                        <h3>Add your game</h3>
                        <div id="addGameFormContent">
                            <div class="leftSideAddGame">
                                <div class="nameAddGame">
                                    <label for="name">Name of the Game:</label>
                                    <input type="text" name="name" id="name" size="40" required>
                                </div>
                                <div class="descriptionAddGame">
                                    <label for="shortTxt">Short description:</label>
                                    <textarea name="shortTxt" id="shortTxt" cols="30" rows="5" style="overflow:auto; resize:none;" required></textarea>
                                </div>
                                <div class="rulesAddGame">
                                    <label for="fulltxt">Long description (rules):</label>
                                    <textarea name="fullTxt" id="fullTxt" cols="30" rows="10" style="overflow:auto; resize:none;" required></textarea>
                                </div>
                            </div>
                            <div class="centerAddGame">
                            <p>Location:</p>
                                <div class="placesContainer">
                                    <!-- <p>Location:</p> -->
                                    <fieldset class="placesFieldset checkBoxStyle">
                                        <legend class="placesLegend">
                                            <input type="checkbox" name="indoor" value="1" id="indoor" checked />
                                            <label for="indoor"><span></span>Indoor</label>
                                        </legend>
                                        <div class="placesCheckboxes">
                                        <div class="checkBoxStyle">
                                            <input type="checkbox" name="location[]" value="bar" id="bar" />
                                            <label for="bar"><span></span> Bar</label>
                                        </div>
                                        <div class="checkBoxStyle">
                                            <input type="checkbox" name="location[]" value="house" id="house" />
                                            <label for="house"><span></span>House</label>
                                        </div>
                                        <div class="checkBoxStyle">
                                            <input type="checkbox" name="location[]" value="school" id="school" />
                                            <label for="school"><span></span>School</label>
                                        </div>
                                        <div class="checkBoxStyle">
                                            <input type="checkbox" name="location[]" value="office" id="office" />
                                            <label for="office"><span></span>Office</label>
                                        </div>
                                    </fieldset>
                                    <fieldset class="placesFieldset checkBoxStyle">
                                        <legend class="placesLegend">
                                            <input type="checkbox" name="outdoor" value="1" id="outdoor"  checked/>
                                            <label for="outdoor"><span></span>Outdoor</label>
                                        </legend>
                                        <div class="placesCheckboxes">
                                        <div class="checkBoxStyle">
                                                <input type="checkbox" name="location[]" value="beach" id="beach" />
                                                <label for="beach"><span></span>Beach</label>
                                            </div>
                                            <div class="checkBoxStyle">
                                                <input type="checkbox" name="location[]" value="car" id="car" />
                                                <label for="car"><span></span>Car</label>
                                            </div>
                                            <div class="checkBoxStyle">
                                                <input type="checkbox" name="location[]" value="plane" id="plane" />
                                                <label for="plane"><span></span>Plane</label>
                                            </div>
                                            <div class="checkBoxStyle">
                                                <input type="checkbox" name="location[]" value="boat" id="boat" />
                                                <label for="boat"><span></span>Boat</label>
                                            </div>
                                            <div class="checkBoxStyle">
                                                <input type="checkbox" name="location[]" value="park" id="park" />
                                                <label for="park"><span></span>Park</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <p>Social Setting:</p>
                                <div class="settingContainer">
                                    <fieldset class="settingFieldset">
                                        <legend class="settingLegend"></legend>
                                        <div class="settingCheckboxes">
                                            <div class="checkBoxStyle">
                                                <input type="checkbox" name="social[]" value="partyWork" id="partyWork" />
                                                <label for="partyWork"><span></span>Work Party</label>
                                            </div>
                                            <div class="checkBoxStyle">
                                                <input type="checkbox" name="social[]" value="partyFriends"
                                                    id="partyFriends" />
                                                <label for="partyFriends"><span></span>Friends Party</label>
                                            </div>
                                            <div class="checkBoxStyle">
                                                <input type="checkbox" name="social[]" value="family" id="family" />
                                                <label for="family"><span></span>Family</label>
                                            </div>
                                            <div class="checkBoxStyle">
                                                <input type="checkbox" name="social[]" value="date" id="date" />
                                                <label for="date"><span></span>Date</label>
                                            </div>
                                        </div>
                                        <div class="settingCheckboxes">
                                            <div class="checkBoxStyle">
                                                <input type="checkbox" name="social[]" value="camping" id="camping" />
                                                <label for="camping"><span></span>Camping</label>
                                            </div>
                                            <div class="checkBoxStyle">
                                                <input type="checkbox" name="social[]" value="icebreaker" id="icebreaker" />
                                                <label for="icebreaker"><span></span>Icebreaker</label>
                                            </div>
                                            <div class="checkBoxStyle">
                                                <input type="checkbox" name="social[]" value="classmates" id="classmates" />
                                                <label for="classmates"><span></span>Classmates</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="rightSideAddGame">
                                <div class="timeRange">
                                    <p>Amount of time:</p>
                                    <div id="timeAddGame">
                                        <span id="minT" class="minT">Min</span>
                                        <input type="number" name="minT" min="2" max="60" required>
                                    </div>
                                    <div id="timeAddGame">
                                        <span id="maxT" class="maxT">Max</span>
                                        <input type="number" name="maxT" min="2" max="60" required>
                                    </div>
                                </div>
                                <div class="playerRangeContainer">
                                    <p>Number of players:</p>
                                    <div id="playersAddGame">
                                        <span id="minP" class="minP">Min</span>
                                        <input type="number" name="minP" min="2" max="60" required>
                                    </div>
                                    <div id="playersAddGame">
                                        <span id="maxP" class="maxP">Max</span>
                                        <input type="number" name="maxP" min="2" max="60" required>
                                    </div>
                                </div>
                                <div class="isDrink">
                                    <p>Drinking game? </p>
                                    <div class="radioGroup">
                                        <input type="radio" id="yes" value="1" name="isDrink"><label
                                            for="yes">Yes</label><input type="radio" id="no" name="isDrink"
                                            ><label for="no">No</label>
                                    </div>
                                </div>
                                <div class="prepAmount">
                                    <p>Amount of preparation:</p>
                                    <div class="radioGroup">
                                        <input type="radio" id="min"  value="min" name="prepSelector" checked><label
                                            for="min">Min</label><input type="radio" id="medium"  value="med" name="prepSelector"><label
                                            for="medium">Medium</label><input type="radio" id="max"
                                            value="max" name="prepSelector"><label for="max">Max</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="FromButton">
                            <button type="submit" id="submit">Send</button>
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
                        case "Evaluation":
                            array_push($user_games["Validated"], $data);
                            break;
                        case "Validated":
                            array_push($user_games["Evaluation"], $data);
                            break;
                        case "Rejected":
                            array_push($user_games["Rejected"], $data);
                            break;
                        default:
                            break;
                    }
                }

                foreach ($user_games as $key => $state) {
                    echo " <div class='statusContainer $key'> ";
                    foreach ($state as $data) {
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