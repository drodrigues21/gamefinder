<?php
session_start();
?>

<link rel="stylesheet" href="../styles/main.css">
<link rel = "stylesheet" href="../styles/memberAccount.css">
<script src="https://kit.fontawesome.com/7fdeb94f09.js"></script>

<body>
    <div class = "mainContainerAccount">
            <?php include("menuBar.php"); ?>
            <h2 class ="userHeader">My Account</h2>
            <?php include("../backend/loadInfosUserConnected.php"); ?>
        <div id = accountForm>
            <div id ="imgUpload">
            <?php
                // while($user){
                    echo "<div id = 'imgResult'>"; 
                        if($user['profImage'] = 0){
                            echo "<img class = 'profileImg' src = '../images/uploads/profile".$userId.".png'>"; 
                        }else{
                            echo "<img class = 'profileImg' src = '../images/uploads/profiledefault.jpg'>"; 
                        }
                    echo "</div>"; 
                // }
            ?>
                <form id = "uploadImgForm" method ="POST" action ="../backend/upload.php" enctype='multipart/form-data'>
                <!-- ^ add file permission to the directory (upload.php) where we plan to store the files after uploading it -->
                    <input type ="hidden" name = "size" value = "1000000">
                        <div>
                            <input type ="file" name="profImage">
                        </div>
                        <div>
                            <input type ="submit" name ="upload" value="Upload">
                        </div>      
                </form>

                <?php
                if(isset($_GET["upload"]) AND $_GET["upload"] == "sizeerror"){
                    echo "Maximum file size is 250 KB.";
                }else if(isset($_GET["upload"]) AND $_GET["upload"] == "uploaderror"){
                    echo "Error: failed to upload."; 
                }else if(isset($_GET["upload"]) AND $_GET["upload"] == "typeerror"){
                    echo "You cannot upload files of this type."; 
                }
                ?>
            </div>
            <div class = "info">
                <!-- <li> Full Name:  </li> -->
                <li><b>Email Address</b>: <?= $user["email"];?> <a href = "#" > Edit </a> </li>
                <li><b>User Name</b>: <?= $user["username"];?><a href = "#" > Edit </a> </li>
                <li><b>Password</b>: <?=$user["password"];?> <a href = "#" > Edit </a> </li>
                <li><b>Date of Birth</b>: </li>
                <li><b>Country</b>: </li>
            </div>
        </div>
    </div>

    <?php
    include("footer.php");
    ?>
</body>

<script src="../scripts/modalMenu.js"></script>