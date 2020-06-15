<?php
session_start();
require_once 'connection.php';

    if (isset($_POST['postSubmit'])) {

      if (!empty($_POST['title']) || !empty($_POST['content'])) {

      $uid = $_SESSION['id'];
      $title = mysqli_real_escape_string($conn, $_POST['title']);
      $content = mysqli_real_escape_string($conn, $_POST['content']);
      $date = date('l jS \of F Y h:i:s A');

      $query = "INSERT INTO posts (userID, title, content, date) VALUES ('$uid', '$title', '$content', '$date')";
        $result = mysqli_query($conn, $query);
        header("Location: ../blog/forum.php");

    }else {
      $_SESSION['message'] = "שגיאה: שדות ריקים";
    }
  }


 ?>
