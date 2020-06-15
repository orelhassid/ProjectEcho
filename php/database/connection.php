<?php

$hostName = 'localhost';
$uesrname = 'root';
$password = "";
$db_name = 'echoppdb';

    $conn = mysqli_connect($hostName, $uesrname, $password, $db_name);
    if (!$conn) {
        die("Error: connection Faild");
    }

    $db_select = mysqli_select_db($conn, $db_name);
    if (!$db_select) {
        die("Error: database select Faild");
}

?>
