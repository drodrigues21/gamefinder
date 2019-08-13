<?php
include("dbconnect.php");
$userId = $_SESSION["id"];
$req = $db->query("SELECT * FROM members WHERE id= $userId");
$user = $req ->fetch();

while($user){
    echo "<div>"; 
    if($user['profImage'] === 0){
        echo "<img src = '../images/uploads/profile".$userId.".png'>"; 
    }else{
        echo "<img src = '../images/uploads/profiledefault.png'>"; 
    }
    echo "</div>"; 
}
