<?php
include('./frontend/metainfo.php'); 
setcookie('username', ($_POST['signinUsername']), time()+365 * 24 * 3600, null, null, false, true);
setcookie('passwordHash',  password_hash(($_POST['signinpsw']), PASSWORD_DEFAULT), time()+365 * 24 * 3600, null, null, false, true);

include('dbconnect.php'); 
// try
// {
// $db = new PDO('mysql:host=localhost;dbname=gamefinder;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// }
// catch (Exception $e)
// {
//     die('Error : ' . $e->getMessage());
// }

$username = htmlspecialchars($_POST['signinUsername']);
$password = password_hash(htmlspecialchars($_POST['signinpsw']), PASSWORD_DEFAULT);


$req = $db->prepare("SELECT id, password FROM members WHERE username = :username");
$req->execute(array(
    'username' => $username));

$result = $req->fetch();
$passwordVerify = password_verify($_POST['signinpsw'], $result['password']);

if (!$passwordVerify){
    echo "<p class='phperror'> Incorrect ID or password : Please try again.</p>";
?>
    <meta http-equiv="refresh" content="5;url=../frontend/modalMenu.php"> 

<?php
}else {
    if ($passwordVerify){
        session_start(); 
        $_SESSION['id'] = $result['id'];
        $_SESSION['signinUsername'] = $username;
        $checkBox = $_POST['checkbox']; 
        if (isset($checkBox) AND $checkBox==1){
            setcookie("username", $username, time()+365*24*3600);        
        }
        header('Location: ../frontend/loggedIn.php');
    }else{
        echo "<p class='phperror'> Incorrect ID or password : Please try again.</p>";
    };
};

?> 
