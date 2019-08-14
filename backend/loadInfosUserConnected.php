<?php
include("dbconnect.php");
$userId = $_SESSION["id"];
$req = $db->query("SELECT * FROM members WHERE id= $userId");
$user = $req ->fetch();

// while($user){
//     echo "<div>"; 
//     if($user['profImage'] === 0){
//         echo "<img class = 'profileImg' src = '../images/uploads/profile".$userId.".png'>"; 
//     }else{
//         echo "<img class = 'profileImg' src = '../images/uploads/profiledefault.jpg'>"; 
//     }
//     echo "</div>"; 
// }
