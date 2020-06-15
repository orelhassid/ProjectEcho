<?php
      //path were our avatar image will be stored
      $avatar_path = mysqli_real_escape_string('http://localhost:8080/PROJECT-ECHO/resources/sourceimages/profile/avatars/'.$_FILES['avatar1']['name']);

      //make sure the file type is image
      if (preg_match("!image!",$_FILES['avatar1']['type'])) {
        //copy image to images/ folder
        if (copy($_FILES['avatar1']['tmp_name'], $avatar_path)) {

         //set session variables to display on welcome page
         $_SESSION['avatar'] = $avatar_path;
    }else {
      $_SESSION['message'] = "Error Copy the file!";
  }
}else {
  $_SESSION['message'] = "Error: Please choose JPEG or PNG only!";
}
 ?>
