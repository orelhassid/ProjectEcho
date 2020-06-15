<?php
session_start();
    require_once 'db.php';

     if (isset($_POST['post'])) {
        $title = strip_tags($_POST['title']);
        $content = strip_tags($_POST['content']);

        $title = mysqli_real_escape_string($conn, $title);
        $content = mysqli_real_escape_string($conn, $content);
        $date = date('l jS \of F Y h:i:s A');

        $query = "INSERT INTO posts (title, content, date) VALUES ('$title', '$content', '$date')";
        if ($title == "" || $content == "") {
          echo "Please Dont leave emoty fields";
          return;
        }
        $result = mysqli_query($conn, $query);
        header("Location: home.php");
     }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog - Post</title>
  </head>
  <body>
    <form class="myform" action="" method="post" enctype="multipart/form-data">
      <input type="text" name="title" placeholder="Write a title"><br><br>
      <textarea name="content" rows="20" cols="50" placeholder="Write a content"></textarea><br><br>
      <input type="submit" name="post" value="POST">
    </form>
  </body>
</html>
