
    <?php

    include 'metainfo.php'; 
    
    if(isset($_SESSION['signinUsername'])) {
        $username = $_SESSION['signinUsername'];
    }
    // print_r($username); 


    if(isset($_COOKIE["username"])) {
        $username = $_COOKIE['username'];
    }
    // print_r($_COOKIE); 

    ?> 

    <body>
        <header> 
            <div id = "memberMenu">
                <ul class="nav">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#" onclick="document.getElementById('aboutus').style.display='block'"><i class="far fa-address-card"></i> About Us </a></li>
                    <li><a href="#"><i class="fas fa-dice"></i> Game Tools</a></li>
                    <li><form action="logoff.php" method="post"><input type = "submit" id = "logoffbtn" name ="logoff" value = "Log Off"></form></li>
                    <li><a href="#"><i class="far fa-user-circle"></i> Profile</a></li>
                </ul>   

                <nav id="profile">
                    <ul id="profileMenu">
                        <li>Favorites</li>
                        <li>My Posts</li>
                        <li>Account</li>
                        <li>Log Out</li>
                    </ul>
                </nav>
            </div>
        </header>  

        <?php
        include('aboutusModal.php');
        ?> 

        <script src = "modalmenu.js"> 
        </script> 

    </body>
