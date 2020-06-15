<?php

//if (require_once "../dynamic_contents/connection.php" === false) {

date_default_timezone_set("Asia/Jerusalem");
$serverName = "http://".$_SERVER['SERVER_NAME'];
$port = ':8080';
$dir = "/PROJECT-ECHO/resources/";
$path = "$serverName$port$dir";
if (isset($_SESSION['id'])){
$uid = $_SESSION['id'];

$pid = $_SESSION['pid'];
$sql = "SELECT nickName FROM people WHERE userID = '$uid'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
$nickname = $row['nickName'];
}
$_SESSION['alert'] = "";
if (isset($_GET['pid'])) $pid = $_GET['pid'];
$errors = array("query" => "Error: Query failure. ",
                "empty" => "Error: Empty Fileds. ",
                "set" => "Error: Can not get data. ",
                 "check" => "Error: no rows found. ");
$success = array("comment" => "Your comment sent successfuly!",
                "post" => "Your post published successfuly!");
//$header_Blog = header("Location: ../blog/forum.php");
//$header_post = header("Location: ../../blog/posts/post_page.php?id=$pid");

 ?>
