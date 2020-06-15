<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "echodb");
      //path were our avatar image will be stored

      //make sure the file type is image
      if (preg_match("!image!",$_FILES['avatar']['type'])) {
        //copy image to images/ folder
        $file_name = $_FILES['avatar']['name'];
        $source = $_FILES['avatar']['tmp_name'];
        $destination = '../../sourceimages/profile/avatars/';
        $file_name = "photo_002";
        $file_ext = $_FILES['avatar']['type'];
        $upload = move_uploaded_file($source, $destination.$file_name.$file_ext);
        if ($upload) {
           $_SESSION['message'] = "Success";
           header("Location: test.php");
           exit();
      }else {
        $_SESSION['message'] = "Error Move the file!";
        header("Location: test.php");
        exit();
  }
}else {
  $_SESSION['message'] = "Error: Please choose JPEG or PNG only!";
  header("Location: test.php");
  exit();
}
 ?>
