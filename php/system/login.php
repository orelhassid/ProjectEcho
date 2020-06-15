<?php
session_start();
require_once '../database/connection.php';
include 'common_system.php';

if ( isset($_POST['submitLogin']) ) {
	$_SESSION['alert'] = "Works!";
	$username_login = mysqli_real_escape_string($conn, $_POST['username_login']);
	$username_login = strtolower($username_login);
	$password_login = md5($_POST['password_login']);
	if ( !empty($username_login) || !empty($password_login) ) {

	 $query_exist = "SELECT * FROM accounts WHERE username = '$username_login' AND password = '$password_login'";
	 $result_exist = mysqli_query($conn, $query_exist);
	 $check_exist = mysqli_num_rows($result_exist);
	 if ($check_exist == 1) {
		 $row_login = mysqli_fetch_assoc($result_exist);
		 $_SESSION['uid'] = $row_login['userID'];
		 $uid = $row_login['userID'];
		 header("Location: ../../pages/profile/profile.php?uid=$uid");

		}else {print_r($row_login);
			$_SESSION['alert'] = $GLOBALS['errors']['exist'];
					header("Location: ../../pages/form/form.php?error=exist");
				 }

	}else { $_SESSION['alert'] = $GLOBALS['errors']['fields'];
				header("Location: ../../pages/form/form.php?error=fields");
			}
}
?>
