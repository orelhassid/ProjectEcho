<?php
session_start();
require_once 'connection.php';

if (isset($_POST["profileSubmit"])) {

$id = $_SESSION['id'];
$first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
$last_name = mysqli_real_escape_string($conn, $_POST['lastname']);
$nick_name = mysqli_real_escape_string($conn, $_POST['nickname']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$phone_number = mysqli_real_escape_string($conn, $_POST['phonenumber']);
$avatar1 =  mysqli_real_escape_string($conn, $_POST['avatar1']);
$avatar2 =  mysqli_real_escape_string($conn, $_POST['avatar2']);

//include 'upload_file.php';

  $query = "SELECT * FROM people WHERE userID = $id";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);
  if ($result) {
    $sql = "UPDATE people SET firstName = '$first_name',
                             lastName = '$last_name',
                             nickName = '$nick_name',
                             age = '$age',
                             state = '$address',
                             /*city = '$address',*/
                             phoneNumber = '$phone_number',
                             avatar = '$avatar1'
                         WHERE userID = $id";
    $result = mysqli_query($conn, $sql);
    header("Location: ../pages/profile/profile.php?id=$id");
  }else {
    die("Eror");
  }
}// Close SERVER CHECKING

if (isset($_POST['form-aboutme'])) {
    $id = $_SESSION['id'];
    $content = $_POST['aboutme'];

    $query = "UPDATE people SET aboutme = '$content' WHERE userID = '$id'";
    $result = mysqli_query($conn, $query);
}







?>
