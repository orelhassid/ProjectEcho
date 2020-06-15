<?php
    include 'default.php';

function getBlog($conn, $path) { // Print all existing posts.

        $query = "SELECT * FROM posts ORDER BY postID DESC";
        $result = mysqli_query($conn, $query);
        $checking = mysqli_num_rows($result);

        echo "<div class='blog-list-flexbox'>";
        if ($checking > 0) {

        while ( $row = mysqli_fetch_assoc($result) ) {
          $pid = $row['postID'];
          $title = $row['title'];
          $content = $row['content'];
          $date = $row['date'];
          $post = '';

      $post = "<div class='blog-list-flexItem'>
            <header>
            <img class='blog-list-img' src='$path/sourceimages/profile/avatars/avatar-male.png' />
            <div class='date'>$date</div>
              </header>
              <div class='flexItem-title'>$title</div>
              <div class='blog-flexitem-text'>
              <p>$content</p>
              </div>
              <footer>
              <a class='myButton' href='$path/blog/posts/post_page.php?pid=$pid' >כנס לדיון</a>
              </footer>
              </div>";
          echo $post;
      }
      echo "</div>";
    }//Close If statement - checking
    else {
       $_SESSION['alert'] = $GLOBALS["errors"]['check'];
      }

    }//Close Function.

    function getPost($conn, $pid) {
      if (isset($_GET['pid'])) {
        $query = "SELECT * FROM posts WHERE postID = '$pid'";
        $result = mysqli_query($conn, $query);
        $check = mysqli_num_rows($result);
        if ($result) {

          if ( $check > 0) {
                $post_row = mysqli_fetch_assoc($result);
                global $uid_p;
                global $post_title;
                global $post_content;
                global $post_date;

                $uid_p = $post_row['userID'];
                $post_title = $post_row['title'];;
                $post_content = $post_row['content'];
                $post_date = $post_row['date'];

          } else $_SESSION['alert'] = $GLOBALS["errors"]['check'];
        } else  $_SESSION['alert'] = $GLOBALS["errors"]['check'];

      }else {
        $_SESSION['alert'] = $GLOBALS["errors"]['set'];
      }
    }//Close Function.

    function getComments($conn, $pid) {

       if (isset($_GET['pid'])) {
         $query = "SELECT * FROM comments WHERE postID = '$pid'";
         $result = mysqli_query($conn, $query);
         if ($result) {
            $check = mysqli_num_rows($result);
           if ( $check > 0) {
                 $row = mysqli_fetch_assoc($result);
                 global $uid_c;
                 global $date;
                 global $message;
                 global $rateG;
                 global $rateB;

                 $uid_c = $row['userID'];
                 $date = $row['date'];
                 $message = $row['message'];
                 $rateG = $row['rate_good'];
                 $rateB = $row['rate_bad'];

           } else $_SESSION['alert'] = $GLOBALS["errors"]['check'];
         } else  $_SESSION['alert'] = $GLOBALS["errors"]['check'];

       }
    }//Close Finction.
