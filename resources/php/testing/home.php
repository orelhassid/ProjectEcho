<?php
    session_start();
   require_once 'db.php';
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
    <style media="screen">
    div {
      background: #fed;
      width: 500px;
      margin: 10px;
      padding: 10px 20px;
    }
    div.admin {
      background-color: #333;

    }
      a {
        font-size: 22px;
        color: white;
      }
      h1 {
        font-size: 40px;
      }
      p {
        font-size: 24px;
      }
      h2 {
        font-size: 14px;
      }
    </style>
  </head>
  <body>
    <?php
       $query = "SELECT * FROM posts ORDER BY id DESC";

       $result = mysqli_query($conn, $query);
       $post = '';
       if (mysqli_num_rows($result) > 0) {
         while ($row = mysqli_fetch_assoc($result)) {
           $id = $row['id'];
           $title = $row['title'];
           $content = $row['content'];
           $date = $row['date'];


           $admin = "<div class='admin'><a href='del_post.php'>Delete</a><br><a href='Edit_post.php'>Edit</a><br><a href='post.php'>New post</a></div>";

           $post .= "<div><h1>$title</h1><p>$content</p><h2>$date</h2></div><hr>";
         }
         echo $admin;
         echo $post;
       }else {
         echo "Error: No post yet.";
       }
     ?>
  </body>
</html>
