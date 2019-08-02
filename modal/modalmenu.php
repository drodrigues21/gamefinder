<?php
session_start();
?>

<!DOCTYPE html>
    <head>
        <meta charset = "utf-8"/>
        <link href = "modalmenu.css" rel = "stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/df6c9542c9.js"></script>        
        <title>Menu header</title>
    </head>
    
    <body>
        <header> 
            <ul class="nav">
                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#" onclick="document.getElementById('aboutus').style.display='block'"><i class="far fa-address-card"></i> About Us </a></li>
                <li><a href="#" onclick="document.getElementById('signUpAndIn').style.display='block'"><i class="fas fa-user-lock"></i> Sign In</a></li>
                <li><a href="#"><i class="fas fa-dice"></i> Game Tools</a></li>
            </ul>
        </header> 

<!-- About us modal -->
        <?php
        include 'aboutusModal.php';
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
                    include 'signInModal.php'; 
                    include 'signUpModal.php'; 
                    ?>
                </div>
            </div>
        </div> 

        <script src = "modalmenu.js"> 
        </script> 

    </body>
</html>