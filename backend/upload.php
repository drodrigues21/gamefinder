<?php
session_start(); 
include("dbconnect.php");
$userId = $_SESSION["id"];

// Check the file if it is allowed for upload or not
// Place the file in required directory and then give necessary file permission

if(isset($_POST["upload"])){
    $file = $_FILES["profImage"];
    $fileName = $_FILES["profImage"]["tmp_name"]; 
    $fileTmpName = $_FILES["profImage"]["name"]; 
    $fileSize = $_FILES["profImage"]["size"];
    $fileError = $_FILES["profImage"]["error"];
    $fileType = $_FILES["profImage"]["type"];

    // to set what file types are allowed and where the file is stored 
    $fileExt = explode(".",$fileName); 
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array("jpg", "jpeg", "png"); 
    // print_r($fileExt);
    // print_r($fileActualExt);

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize <500000){
                $fileNameNew = "profile".$userId.".".$fileActualExt;
                print_r($fileNameNew);
                $fileDestination = "../images/uploads".$fileNameNew; 
                move_uploaded_file($fileTmpName, $fileDestination); 
                $userUpload = "UPDATE members SET profImage = 0 WHERE id ='$userId'"; 
                // print_r($userUpload);
                $req = $db->query($userUpload); 

                header("Location: ../frontend/memberAccount.php?upload=uploadsuccess"); 
            }else{
                header("Location: ../frontend/memberAccount.php?upload=sizeerror"); 
                // echo "Maximum file size is 250 KB.";
                // $fileUploadFlag = "false"; 
            }
        }else{
            header("Location: ../frontend/memberAccount.php?upload=uploaderror"); 
            // echo "Error: failed to upload."; 
        }
    }else{
        header("Location: ../frontend/memberAccount.php?upload=typeerror"); 
        // echo "You cannot upload files of this type."; 
    }
}

