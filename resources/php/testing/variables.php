<?php
  /*Variables.php*/
  if (!empty($_POST['username'])
   || !empty($_POST['email'])
   || !empty($_POST['password'])
   || !empty($_POST['gender'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = md5($_POST['password']);
	$password2 = md5($_POST['password2']);
  $gender = $_POST['gender'];
}else {
  $_SESSION['message'] = "שכחת למלא את כל השדות.";
  exit();
}
 ?>
