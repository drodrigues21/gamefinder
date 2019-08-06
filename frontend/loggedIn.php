
    <?php

    include("metaInfo.php"); 
    
    if(isset($_SESSION['signinUsername'])) {
        $username = $_SESSION['signinUsername'];
    }
    // print_r($username); 


    if(isset($_COOKIE["username"])) {
        $username = $_COOKIE['username'];
    }
    // print_r($_COOKIE); 

    ?> 
    <head>
    <link rel="stylesheet" href="../styles/loggedIn.css">
    </head>

    <body>
        <header> 
            <div id = "memberMenu">
                <div class="nav">
                    <li><a href="../index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#" onclick="document.getElementById('aboutus').style.display='block'"><i class="far fa-address-card"></i> About Us </a></li>
                    <li><a href="#"><i class="fas fa-dice"></i> Game Tools</a></li>
                    <div class ="dropdown">
                        <button onclick= "dropDown()" class ="dropbtn"><i class="far fa-user-circle"></i>Profile</button>
                        <div class = "profileMenu" id="profileMenuContent">
                            <li><a href="#">Favorites</a></li>
                            <li><a href="#">My Games</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><form action="../backend/logOut.php" method="post"><input type = "submit" id ="logOutbtn" name ="logOut" value = "LOG OUT"></form></li>
                        </div>
                    </div>
                </div>   
            </div>
        </header>  

        <script src = "../scripts/modalMenu.js"> 
        </script> 

    </body>
