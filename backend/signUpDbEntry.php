<?php
   include("dbconnect.php");
   
    if (isset($_POST['username']) AND isset($_POST['psw']) AND isset($_POST['email']) AND isset($_POST['pswconfirm']) AND preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$_POST['email'])){
        $username = addslashes(htmlspecialchars(htmlentities(trim($_POST['username']))));
        $password = $_POST['psw'];
        $passwordConfirm = $_POST['pswconfirm'];   
        $email = addslashes(htmlspecialchars(htmlentities(trim($_POST['email']))));
        $password_hash = password_hash($_POST['psw'], PASSWORD_DEFAULT);
        
        try
        {
            if($password != $passwordConfirm){ throw new Exception("<p class = 'error'>Passwords do not match</p>");}
            $params = array(
                'username' => $username,
                'password' => $password_hash,
                // 'profImage' => 1,
                'email' =>$email);
            $req = $db->prepare("INSERT INTO members(username, password, email, profImage, registrationDate) VALUES (:username, :password, :email, 1, NOW())");
            $req->execute($params);
            
            header("Location: ../index.php?modal=success"); 
        }catch (Exception $ex){
            
            header("Location: ../index.php?modal=signuperror"); 
        }catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
?> 