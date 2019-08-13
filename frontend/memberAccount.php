<?php
session_start();
?>

<link rel="stylesheet" href="../styles/modalMenu.css">
<link rel="stylesheet" href="../styles/main.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,700,700i&display=swap"
    rel="stylesheet">
<script src="https://kit.fontawesome.com/7fdeb94f09.js"></script>

<body>
    <div class = "mainDiv">
            <?php include("modalMenu.php"); ?>
            <h3 class ="userHeader">Account Information</h3>
            <?php include("../backend/loadInfosUserConnected.php"); ?>
        <div id = accountForm>
            <div id ="imgUpload">
                <form method ="post" action ="memberAccount.php" enctype="multipart/form-data">
                    <input type ="hidden" name = "size" value = "1000000">
                        <div>
                            <input type ="file" name="profImage">
                        </div>
                        <div>
                            <input type ="submit" name ="upload" value="upload">
                        </div>      
            </div>
            <ul class = "info">
                <!-- <li> Full Name:  </li> -->
                <li> Email Address: <?= $user["email"];?> </li>
                <li> User Name: <?= $user["username"];?></li>
                <li> Password: </li>
                <li> Date of Birth: </li>
                <li> Country: </li>
            </ul>
        </div>
    </div> 

</body>

<script src="../scripts/modalMenu.js"></script>