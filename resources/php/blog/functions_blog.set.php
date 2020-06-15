<?php

    include 'default.php';
    function setPost($conn) {
      if (isset($_POST['postSubmit'])) {

          $title = $_POST['title'];
          $content = $_POST['content'];
          $date = date('l jS \of F Y h:i:s A');
          $photo = '';

          if (empty($title)) { $_SESSION['alert'] = $GLOBALS["errors"]['empty']; exit(); }
          if (empty($content)) { $_SESSION['alert'] = $GLOBALS["errors"]['empty']; exit(); }

          $query = "INSERT INTO posts (userID, title, content, date) VALUES ('$uid', '$title', '$content', '$date')";
          $result = mysqli_query($conn, $query);
          if ($result) {
            $header_Blog;
          }else $_SESSION['alert'] = $GLOBALS["errors"]['query'];
      }
    }//Close Function.


    function setComment($conn, $pid) {
      if (isset($_POST['commentSubmit'])) {
          $message = mysqli_real_escape_string($_POST['message']);
          $link1 = mysqli_real_escape_string($_POST['link1']);
          $link2 = mysqli_real_escape_string($_POST['link2']);
          $link3 = mysqli_real_escape_string($_POST['link3']);
        if (!empty($message)) {
          $query = "INSERT INTO comments (postID, userID, date, message, rate_good, rate_bad)
                    VALUES ('$pid', '$uid', '$date', '$message', '0', '0')";
          $result = mysqli_query($conn, $query);

          if ($result) {
            $_SESSION['alert'] = $GLOBALS["success"]['comment'];
            header("Location: ../../blog/posts/post_page.php?id=$pid");
          }else {
            $_SESSION['alert'] = $GLOBALS["errors"]['query'];
          }

        }else {
          $_SESSION['alert'] = $GLOBALS["errors"]['empty'];
        }
        echo $_SESSION['alert'];
      }
    }//Close Function
echo $_SESSION['alert'];





 ?>
