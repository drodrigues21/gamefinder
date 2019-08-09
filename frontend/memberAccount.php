<?php
session_start();
include("modalMenu.php"); 
?>

<link rel="stylesheet" href="../styles/modalMenu.css">
<link rel="stylesheet" href="../styles/main.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,700,700i&display=swap"
    rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/7fdeb94f09.js"></script>

<body>
    <div class = "mainContainer">
        <div class ="firstSectionContainer">
            <h1>Account Information</h1>

            <ul class = "info">
                <li> Full Name:  </li>
                <li> Email Address:  </li>
                <li> User Name: </li>
                <li> Password: </li>
                <li> Date of Birth: </li>
                <li> Country: </li>
            </ul>
        </div> 
    </div> 

</body>

<script src="../scripts/modalMenu.js"></script>