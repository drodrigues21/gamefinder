<?php
session_start();
setcookie('username', ($_POST['signinUsername']), time()+365 * 24 * 3600, null, null, false, true);
setcookie('passwordHash',  password_hash(($_POST['signinpsw']), PASSWORD_DEFAULT), time()+365 * 24 * 3600, null, null, false, true);

include('dbconnect.php'); 
// print_r($_POST);
$username = htmlspecialchars($_POST['signinUsername']);
$password = password_hash(htmlspecialchars($_POST['signinpsw']), PASSWORD_DEFAULT);
$profImage = isset($_POST['profImage'])?$_POST['profImage'] : null;
$isKakao = isset($_POST['isKakao'])?$_POST['isKakao'] : null;

$req = $db->prepare("SELECT id, password FROM members WHERE username = :username");
$req->execute(array(
    'username' => $username));
$result = $req->fetch();

// echo $result;
if(!$result AND $isKakao) {
    $params = array(
        'username' => $username,
        'password' => $password,
        'profImage' => $profImage,
        'isKakao' => $isKakao
    );
    $query = "INSERT INTO members(username, password, registrationDate, profImage, isKakao) VALUES (:username, :password, NOW(), :profImage, :isKakao)";
    $req = $db->prepare($query);
    $req->execute($params);
    
    createSessionUser($db->lastInsertId(), $username);
} else {
    $passwordVerify = password_verify($_POST['signinpsw'], $result['password']);
    if (!$passwordVerify){
        header("Location:".LOCALHOST."index.php?modal=phperror"); 
    } else {
        if ($passwordVerify){ 
            createSessionUser($result['id'], $username);
            $checkBox = isset($_POST['checkbox'])? $_POST['checkbox'] : 0; 
            if ($checkBox===1){
                setcookie("username", $username, time()+365*24*3600);   
            }
            header("Location:".LOCALHOST."index.php");
        }else{
            header("Location:".LOCALHOST."index.php?modal=phperror");
        };
    };
}

function createSessionUser($id, $username) {
    $_SESSION['id'] = $id;
    $_SESSION['signinUsername'] = $username;
}