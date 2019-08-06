<?php
session_start();
?>
<head>
    <link rel="stylesheet" href="./styles/modalMenu.css">
    <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
</head>

<ul class="nav navbar">
    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
    <li><a href="#" onclick="document.getElementById('aboutus').style.display='block'"><i class="far fa-address-card"></i> About Us </a></li>
    <li><a href="#"><i class="fas fa-dice"></i> Game Tools</a></li>
    <li><a href="#" onclick="document.getElementById('signUpAndIn').style.display='block'"><i class="fas fa-user-lock"></i> Sign In</a></li>
</ul>

<!-- About us modal -->
<?php
    include("aboutUsModal.php");
?> 

<!-- signup/registration modal -->
<div class="modal" id="signUpAndIn">
    <div onclick="document.getElementById('signUpAndIn').style.display='none'" class="close">×</div> 
    <div class="modalContent" >
        <div class = "head">
            <div id ="signInTab" class="modalHeader" >Sign In</div>
            <div id = "signUpTab" class="modalHeader" >Sign Up</div>
        </div>
        <div class="modalBody">    
            <?php
            include("signInModal.php"); 
            include("signUpModal.php");
            ?>
        </div>
    </div>
</div> 
<script src="./scripts/modalMenu.js"></script> 



