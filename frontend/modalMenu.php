<head>
<<<<<<< HEAD
    <link rel="stylesheet" href="../styles/modalMenu.css">
=======
    <link rel="stylesheet" href="<?= LOCALHOST ?>styles/modalMenu.css">
>>>>>>> 0e17bdc855d97385e10ab26748953e5a0c5af24f
    <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
</head>

<?php
if (!@include("./utils.php")) {
    require_once("../utils.php");
}

if (isset($_SESSION['signinUsername'])) {
    $username = $_SESSION['signinUsername'];
}
// print_r($_SESSION); 

<<<<<<< HEAD
if(isset($_COOKIE["username"])) {
    $username = $_COOKIE["username"];
=======
if (isset($_COOKIE["username"])) {
    $username = $_COOKIE['username'];
>>>>>>> 0e17bdc855d97385e10ab26748953e5a0c5af24f
}
// print_r($_COOKIE);
?>

<ul class="nav navbar">
    <li><a href="<?= LOCALHOST ?>index.php"><i class="fas fa-home"></i> Home</a></li>
    <li><a href="#" onclick="document.getElementById('aboutus').style.display='block'"><i
                class="far fa-address-card"></i> About Us </a></li>
    <li><a href="#"><i class="fas fa-dice"></i> Game Tools</a></li>
    <?php
    if (!isset($_SESSION["id"]) and !isset($_SESSION["signinUsername"])) {
        echo
            '<li><a href="#" onclick="document.getElementById(`signUpAndIn`).style.display=`block`"><i class="fas fa-user-lock"></i> Sign In</a></li>';
    } else if (isset($_SESSION["signinUsername"]) and isset($_SESSION["id"])) {
        echo  '<div class ="dropdown">
            <button onclick= "dropDown()" class ="dropbtn"><i class="far fa-user-circle"></i>Profile</button>
            <div class = "profileMenu" id ="profileMenuContent">
<<<<<<< HEAD
                <li><a href="'.LOCALHOST.'frontend/favorites.php">Favorites</a></li>
                <li><a href="'.LOCALHOST.'frontend/myGames.php">My Games</a></li>
                <li><a href="'.LOCALHOST.'frontend/memberAccount.php">Account</a></li>
                <li><form action="'.LOCALHOST.'backend/logOut.php" method="post"><input type = "submit" id ="logOutbtn" name ="logOut" value = "LOG OUT"></form></li>
=======
                <li><a href="' . LOCALHOST . 'frontend/favorites.php">Favorites</a></li>
                <li><a href="' . LOCALHOST . 'frontend/myGames.php">My Games</a></li>
                <li><a href="' . LOCALHOST . 'frontend/memberAccount.php">Account</a></li>
                <li><form action="' . LOCALHOST . 'frontend/logOut.php" method="post"><input type = "submit" id ="logOutbtn" name ="logOut" value = "LOG OUT"></form></li>
>>>>>>> 0e17bdc855d97385e10ab26748953e5a0c5af24f
            </div>
        </div>';
    }
    ?>
</ul>

<!-- About us modal -->
<?php
include("aboutUsModal.php");
?>

<!-- signup/registration modal -->

<div class="modal" id="signUpAndIn">
    <div onclick="document.getElementById('signUpAndIn').style.display='none'" class="close">×</div>
    <div class="modalContent">
        <div class="head">
            <div id="signInTab" class="modalHeader">Sign In</div>
            <div id="signUpTab" class="modalHeader">Sign Up</div>
        </div>
        <div class="modalBody">
            <?php
            include("signInModal.php");
            include("signUpModal.php");
            ?>
        </div>
    </div>
</div>

<script src="<?= LOCALHOST ?>scripts/modalMenu.js"></script>