<?php
require_once("../utils.php"); 

session_start();
session_unset();
session_destroy();

setcookie('username', '');
setcookie('passwordHash', '');

header("Location:".LOCALHOST."index.php");
?>