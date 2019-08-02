<?php

include("dbconnect.php");

$response = $db->query("SELECT * FROM games ORDER BY rating DESC LIMIT 0, 5");