<?php
if (!@include_once('../utils.php')) {
    require_once("./utils.php");
}
?>
<div class="headerContainer">
    <div class="catchFraseContainer">
        <h3>For all your gaming needs.</h3>
    </div>
    <div class="headerContent">
        <div class="logoContainer"><a href="index2.html"><img src="./images/10.png" alt=""></a></div>
        <nav class="navbarContainer">
            <?php include(LOCALHOST . "modal/modalmenu.php"); ?>
        </nav>
    </div>
</div>