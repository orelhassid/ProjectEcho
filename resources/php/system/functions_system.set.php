<?php

include 'common_system.php';

    /*function setAccount($conn) {
      if (false) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
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
            if ( $check === 0 ) { // HERE NEED TO DO CONFIRMATION EMAIL.
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

              //header("Location: ../pages/profile/profile.php?uid=$uid");

            }else { $_SESSION['alert'] = $GLOBALS['errors']['exist'];
                  header("Location: form.php?error=exist"); exit(); }

          }else { $_SESSION['alert'] = $GLOBALS['errors']['password'];
                header("Location: form.php?error=password"); exit(); }

        }else { $_SESSION['alert'] = $GLOBALS['errors']['fields'];
              header("Location: form.php?error=fields"); exit(); }
      }
    }//Close Function.
*/
    /*function setLogin($conn) {

      if ( isset($_POST['submitLogin']) || isset($_POST['form_login']) ) {
        $_SESSION['alert'] = "Works!";
        $username_login = mysqli_real_escape_string($conn, $_POST['username_login']);
  		  $password_login = md5($_POST['password_login']);
        if ( !empty($username) || !empty($password) ) {

         $query_exist = "SELECT * FROM accounts WHERE username = '$username' AND password = '$password'";
       	 $result_exist = mysqli_query($conn, $query_exist);
       	 $check_exist = mysqli_num_rows($result_exist);
       	 if ($check_exist === 1) {
       		 $row_login = mysqli_fetch_assoc($result_exist);
       		 $_SESSION['uid'] = $row_login['userID'];
           $uid = $row_login['userID'];
       		 //header("Location: ../pages/profile/profile.php?uid=$uid");

          }else { $_SESSION['alert'] = $GLOBALS['errors']['exist'];
                //header("Location: ../pages/form/form.php?error=exist");
               }

        }else { $_SESSION['alert'] = $GLOBALS['errors']['fields'];
              //header("Location: ../pages/form/form.php?error=fields");
            }
      }
    }//Close Function.
*/
    function setProfile($conn, $path) {
      if ( isset($_POST['submitProfile']) ) {

        $uid = $_SESSION['uid'];
        $first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
        $last_name = mysqli_real_escape_string($conn, $_POST['lastname']);
        $nick_name = mysqli_real_escape_string($conn, $_POST['nickname']);
        $age = mysqli_real_escape_string($conn, $_POST['age']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $phone_number = mysqli_real_escape_string($conn, $_POST['phonenumber']);

        $query_profile = "SELECT * FROM people WHERE userID = $uid";
        $result_profile = mysqli_query($conn, $query_profile);
        $row_profile = mysqli_fetch_assoc($result_profile);

        if ( $result_profile ) {
          $query_profile_update = "UPDATE people SET firstName = '$first_name',
                                   lastName = '$last_name',
                                   nickName = '$nick_name',
                                   age = '$age',
                                   state = '$address',
                                   /*city = '$address',*/
                                   phoneNumber = '$phone_number',
                                   avatar = '$avatar1'
                               WHERE userID = $uid";
          $result_profile_update = mysqli_query($conn, $query_profile_update);
          setUpload($path);
          header("Location: profile.php?uid=$uid");

       }else { $_SESSION['alert'] = $GLOBALS['errors']['query'];
             header("Location: profile.php?uid=$uid,error=query"); }

      }
    }//Close Function.

    function setAboutme() {

    }

    function setUpload($path) {
      if ( isset($_POST['avatar']) ) {
        if (preg_match("!image!",$_FILES['avatar']['type'])) {

          $avatar_name = $_FILES['avatar']['name'];
          $avatar_source = $_FILES['avatar']['tmp_name'];
          $avatar_destination = "../users/avatars/";
          print_r($avatar_name);
          exit();
          //$avatar_name = uniqid(rand());
          //$file_ext = explode('.', $avatar_name);
          //$file_ext = $file_ext[count($file_ext)-1];
          /*if (is_uploaded_file($avatar_source)) {
          $upload = move_uploaded_file($avatar_source, $destination.$avatar_name.'.'.$file_ext);
        }*/

        }

      }
      if ( isset($_POST['avatar']) ) {

      }
    }
 ?>
