<?php
session_start();
session_unset();
session_destroy();

setcookie('username', '');
setcookie('passwordHash', '');

header('Location: modalmenu.php');
?>