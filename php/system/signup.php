<?php
session_start();
require_once '../database/connection.php';
include 'common_system.php';

if ( isset($_POST['submitSignup']) ) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $username = strtolower($username);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = md5($_POST['password']);
  $password_confirm = md5($_POST['passwordConfirm']);
  $nickname = mysqli_real_escape_string($conn, $_POST['nickname']);
  $gender = mysqli_real_escape_string($conn, $_POST['gender']);

  if ( !empty($username) || !empty($email) || !empty($password) ) {
    if ( $password === $password_confirm ) {
      $query = "SELECT username, email FROM accounts WHERE username = '$username' OR email = '$email'";
      $result = mysqli_query($conn, $query);
      $check = mysqli_num_rows($result);
      if ( $check == 0 ) { // HERE NEED TO DO CONFIRMATION EMAIL.
        $query_account = "INSERT INTO accounts (username, password, email, active)
                              VALUES ('$username', '$password', '$email', '0')";
        $result_account = mysqli_query($conn, $query_account);

        $query_row = "SELECT userID FROM accounts WHERE username = '$username' AND password = '$password'";
        $result_row = mysqli_query($conn, $query_row);
        $row_account = mysqli_fetch_assoc($result_row);
        $uid = $row_account['userID'];
        $_SESSION['uid'] = $row_account['userID'];
        $_SESSION['alert'] = $GLOBALS['success']['account'];

        $default = "לא נבחר עדיין";
        $empty = '';
        $aboutmeD = "כתוב משהו על עצמך";
        $default_avatar = "$path/sourceimages/profile/avatars/naruto01.png";
        $query_people = "INSERT INTO people (userID, firstName, lastName, nickName, gender, age, state, phoneNumber, aboutme, avatar)
        VALUES ('$uid','$default', '$empty', '$nickname', '$gender', '15', '$default', '$default', '$aboutmeD', '$default_avatar')";
        $result_people = mysqli_query($conn, $query_people);

        header("Location: ../../pages/profile/profile.php?uid=$uid");

      }else { $_SESSION['alert'] = $GLOBALS['errors']['exist'];
            header("Location: ../../pages/form/form.php?error=exist"); exit(); }

    }else { $_SESSION['alert'] = $GLOBALS['errors']['password'];
          header("Location: ../../pages/form/form.php?error=password"); exit(); }

  }else { $_SESSION['alert'] = $GLOBALS['errors']['fields'];
        header("Location: ../../pages/form/form.php?error=fields"); exit(); }
}
$_SESSION['alert'] = "TEST";

 ?>
