<?php
    //require_once '../connection.php';
    if (isset($_POST['commentSubmit'])) {
      setComments($conn);
    }
    function setComments($conn) {

      if (isset($_POST['commentSubmit'])) {

        if (isset($_POST['message'])) {

        $pid = $_GET['id'];
        $uid = mysqli_real_escape_string($conn, $_POST['uid']);
        $comment_date = mysqli_real_escape_string($conn, $_POST['date']);
        $comment_message = mysqli_real_escape_string($conn, $_POST['message']);

              $query = "INSERT INTO comments (userID, postID, date, message, rate_good, rate_bad) VALUES ('$uid', '$pid', '$comment_date', '$comment_message', '0', '0')";
              $result = mysqli_query($conn, $query);

      }else {
              echo "<h1>Error: Variable is not set!</h1>";
      }
    }
  }

  function getComments($conn) {
    if (true) {
      $pid = $_GET['id'];
    $query = "SELECT * FROM comments WHERE postID = $pid ORDER BY commentID DESC";
    $result = mysqli_query($conn, $query);
    $check = mysqli_num_rows($result);
    if ($check > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $cid = $row['commentID'];
      $uid = $row['userID'];
      $comment_date = $row['date'];
      $comment_message = nl2br($row['message']);
      $rate_good = $row['rate_good'];
      $rate_bad = $row['rate_bad'];

        $edit = "<div id='comment-text' class='comment-user-text'><p>".$comment_message."</p></div>";
      $comments = "<li class='comments-users-block'>
              <div class='comments-users-profile'>

              <div class='comment-chat'>
              <i class='fa fa-comment'></i>
              <i onclick='openCommentEditor(1)' class='fa fa-edit'></i>

              </div>

              <div class='comment-avatar'><img src='../../sourceimages/profile/avatars/avatar-male.png' alt=''></div>

                  <div class='comment-details'>
                  <span>".$uid."</span>
                  <span>|</span>
                  <span>".$comment_date."</span>
                  </div>
              </div>

              <div class='comment-text-container'>".$edit.
              "<form id='comment-form-edit' class='form-post-edit' name='form_edit' action='".editComments($conn)."' method='POST'>
              <input type='hidden' name='cid_edit' value='".$cid."'>
              <input type='hidden' name='uid_edit' value='".$uid."'>
              <textarea name='message_edit' value='".$comment_message."'>".$comment_message."</textarea>
              <button class='comment-edit-btn2' type='button' onclick='openCommentEditor(2)'>Cancle</button>
              <button class='comment-edit-btn1' type='submit' onclick='openCommentEditor(2)'>Edit</button>
              </form>
              </div>

              <div class='comment-user-rate'>
              <span>".$rate_good."</span>
              <div><i class='fa fa-arrow-up'></i></div>
              <div><i class='fa fa-arrow-down'></i></div>
              <span>".$rate_bad."</span></div>
          </li>";
            echo $comments;
    }
  }else {
     echo "<div style='font-size:42px;text-align:center;'>There is not rows yet.</div>";
   }
 }else {
   return false;
 }
  }

  function editComments($conn) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $cid = $_POST['cid_edit'];
      $uid = $_POST['uid_edit'];
      $message = $_POST['message_edit'];

      $query = "UPDATE comments SET message = '$message' WHERE commentID = '$cid'";
      $result = mysqli_query($conn, $query);
    }
  }
?>
