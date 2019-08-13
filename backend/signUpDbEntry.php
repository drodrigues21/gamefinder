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
                'email' =>$email);
            $req = $db->prepare("INSERT INTO members(username, password, email, registrationDate) VALUES (:username, :password, :email, NOW())");
            $req->execute($params);
            
            header("Location: ../index.php?modal=success"); 
            // echo "<p class = 'success'> Your registration was successful. Now Sign in! </p>"; 
            ?>
            <!-- <meta http-equiv="refresh" content="5;url=../index.php">  -->

            <?php

        }catch (Exception $ex){
            
            header("Location: ../index.php?modal=signuperror"); 

            // echo "<p class = 'error'>login or email already exists</p>"; //on the signup tab 
        ?>
                    <!-- <meta http-equiv="refresh" content="5;url=../index.php">  -->

<?php
        }catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
?> 