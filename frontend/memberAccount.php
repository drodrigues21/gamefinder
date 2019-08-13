<?php
session_start();
?>

<link rel="stylesheet" href="../styles/modalMenu.css">
<link rel="stylesheet" href="../styles/main.css">
<script src="https://kit.fontawesome.com/7fdeb94f09.js"></script>

<body>
    <div class = "mainContainerAccount">
            <?php include("menuBar.php"); ?>
            <h2 class ="userHeader">My Account</h2>
            <?php include("../backend/loadInfosUserConnected.php"); ?>
        <div id = accountForm>
            <div id ="imgUpload">
                <form method ="post" action ="../backend/upload.php" enctype="multipart/form-data">
                    <input type ="hidden" name = "size" value = "1000000">
                        <div>
                            <input type ="file" name="profImage">
                        </div>
                        <div>
                            <input type ="submit" name ="upload" value="Upload">
                        </div>      
            </div>
            <div class = "info">
                <!-- <li> Full Name:  </li> -->
                <li> Email Address: <?= $user["email"];?> </li>
                <li> User Name: <?= $user["username"];?></li>
                <li> Password: </li>
                <li> Date of Birth: </li>
                <li> Country: </li>
            </div>
        </div>
    </div> 

    <?php 
    include("footer.php"); 
    ?>
</body>

<script src="../scripts/modalMenu.js"></script>