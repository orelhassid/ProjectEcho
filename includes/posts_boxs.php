<?php

while($row = mysqli_fetch_assoc($result)) {

  $pid = $row['postID'];
  $title = $row['title'];
  $content = $row['content'];
  $date = $row['date'];
  $post = '';

$post = "<div class='blog-list-flexItem'>
      <header>
      <img class='blog-list-img' src='http://localhost:8080/PROJECT-ECHO/resources/sourceimages/profile/avatars/avatar-male.png' />
      <div class='date'>$date</div>
        </header>
        <div class='flexItem-title'>$title</div>
        <div class='blog-flexitem-text'>
        <p>$content</p>
        </div>
        <footer>
        <a class='myButton' href='http://localhost:8080/PROJECT-ECHO/resources/blog/posts/post_page.php?id=$pid' >כנס לדיון</a>
        </footer>
        </div>";
    echo $post;
}
?>
