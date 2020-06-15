<?php
$serverName = "http://".$_SERVER['SERVER_NAME'];
$port = ':8080';
$dir = "/PROJECT-ECHO/resources";
$path = "$serverName$port$dir";

function setUpload($path) {
  if ( isset($_POST['avatar']) ) {
    if (preg_match("!image!",$_FILES['avatar']['type'])) {

      $avatar_name = $_FILES['avatar']['name'];
      $avatar_source = $_FILES['avatar']['tmp_name'];
      $avatar_destination = $path.'/sourceimages/users/avatars/';
      $avatar_name = uniqid(rand());
      $file_ext = '.'.$_FILES['avatar']['type'];
      $upload = move_uploaded_file($avatar_source, $destination.$avatar_name.$file_ext);

    }

  }
  if ( isset($_POST['avatar']) ) {
    
  }
}

 ?>
