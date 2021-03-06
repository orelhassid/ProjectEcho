<?php
/* Validate.php */

//the form has been submitted with post method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //check if two passwords are equal to each other
    if ($_POST['password'] == $_POST['confirmpassword']) {

      //define other variables with submitted values from $_POST
      $username = $mysqli->real_escape_string($_POST['username']);
      $email = $mysqli->real_escape_string($_POST['email']);

      //md5 hash password for security
      $password = md5($_POST['password']);

      //path were our avatar image will be stored
      $avatar_path = $mysqli->real_escape_string('images/'.$_FILES['avatar']['name']);

      //path were our avatar image will be stored
      $avatar_path = $mysqli->real_escape_string('images/'.$_FILES['avatar']['name']);

      //make sure the file type is image
      if (preg_match("!image!",$_FILES['avatar']['type'])) {
        //copy image to images/ folder
        if (copy($_FILES['avatar']['tmp_name'], $avatar_path)) {
         //set session variables to display on welcome page
         $_SESSION['username'] = $username;
         $_SESSION['avatar'] = $avatar_path;

         //create SQL query string for inserting data into the database
         $sql = "INSERT INTO accounts (username, email, password, avatar) "
         . "VALUES ('$username', '$email', '$password', '$avatar_path')";

         //check if mysql query is successful
         if ($mysqli->query($sql) === true) {
           $_SESSION[ 'message' ] = "Registration succesful! Added $username to the database!";
           //redirect the user to welcome.php
           header( "location: welcome.php" );
         }
        }
      }
    }
}
 ?>
