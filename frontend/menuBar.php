<<<<<<< HEAD

=======
<?php
if (!@include_once('../utils.php')) {
    require_once("./utils.php");
}
?>
>>>>>>> 0e17bdc855d97385e10ab26748953e5a0c5af24f
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
        <div class="logoContainer"><a href="index2.html"><img src="../images/10.png" alt=""></a></div>
        <nav class="navbarContainer">
            <?php include("modalMenu.php"); ?>
        </nav>
    </div>
</div>