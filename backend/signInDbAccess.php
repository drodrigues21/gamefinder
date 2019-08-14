<?php
session_start();
setcookie('username', ($_POST['signinUsername']), time()+365 * 24 * 3600, null, null, false, true);
setcookie('passwordHash',  password_hash(($_POST['signinpsw']), PASSWORD_DEFAULT), time()+365 * 24 * 3600, null, null, false, true);

include('dbconnect.php'); 

$username = htmlspecialchars($_POST['signinUsername']);
$password = password_hash(htmlspecialchars($_POST['signinpsw']), PASSWORD_DEFAULT);


$req = $db->prepare("SELECT id, password FROM members WHERE username = :username");
$req->execute(array(
    'username' => $username));

$result = $req->fetch();
$passwordVerify = password_verify($_POST['signinpsw'], $result['password']);

if (!$passwordVerify){
    header("Location:".LOCALHOST."index.php?modal=phperror"); 

}else {
    if ($passwordVerify){ 
        $_SESSION['id'] = $result['id'];
        $_SESSION['signinUsername'] = $username;
        $checkBox = isset($_POST['checkbox'])? $_POST['checkbox'] : 0; 
        if ($checkBox===1){
            setcookie("username", $username, time()+365*24*3600);   
        }
        header("Location:".LOCALHOST."index.php");
    }else{
        header("Location:".LOCALHOST."index.php?modal=phperror");
    };
};
?> 


<!-- if($kakaoLogin){
    session_start();
    $_SESSION['isKakao'] = ;
} -->