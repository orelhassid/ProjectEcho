<?php
include 'common_system.php';


    function getPeople($conn) {

      if ( isset($_GET['uid']) ) {

        $uid = $_GET['uid'];
        $query = "SELECT * FROM people WHERE userID = '$uid' ";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);

        global $firstname;
        global $lastname;
        global $nickname;
        global $gender;
        global $age;
        global $address;
        global $phonenumber;
        global $aboutme;
        global $avatar;

        $firstname = $row['firstName'];
        $lastname = $row['lastName'];
        $nickname = $row['nickName'];
        $gender = $row['gender'];
        $age = $row['age'];
        $address = $row['state'].' '.$row['city'];
        $phonenumber = $row['phoneNumber'];
        $aboutme = $row['aboutme'];
        $avatar = $row['avatar'];
      }
    }//Close Function.








 ?>
