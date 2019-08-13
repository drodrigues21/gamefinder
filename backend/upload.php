<?php
session_start(); 
include("dbconnect.php");
$userId = $_SESSION["id"];

if(isset($_POST["submit"])){
    $file = $_FILES["profImage"];
    $fileName = $_FILES["profImage"]["tmp_name"]; 
    $fileTmpName = $_FILES["profImage"]["name"]; 
    $fileSize = $_FILES["profImage"]["size"];
    $fileError = $_FILES["profImage"]["error"];
    $fileType = $_FILES["profImage"]["type"];

    $fileExt = explode('.',$fileName); 
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png'); 

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize <500000){
                $fileNameNew = "profile".$userId.”.”.$fileActualExt;
                $fileDestination = "../images/uploads/".$fileNameNew; 
                move_uploaded_file($fileTmpName, $fileDestination); 
                $userUpload = "UPDATE members SET profImage = 0 WHERE id = '$userId'"; 
                $req = $db->query($userUpload); 
                header("Location: ../frontend/memberAccount.php?uploadsuccess"); 
            }else{
                echo "Your file is too big";
            }
        }else{
            echo "There was an error uploading your file."; 
        }
    }else{
        echo "You cannot upload the files of this type."; 
    }
}