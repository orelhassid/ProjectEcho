<?php include '../../includes/overall/header.php'; ?>
<!--<div class='MainFlexBox'> ##The Main FlexBox in the header include file.-->
	<!--<main class='mainContainer'> ##The Main Container in the header include file.-->
  <link rel='stylesheet' href='<?=$path?>/css/theme_bright/scss/blog.css'>
  <?php require_once "../../dynamic_contents/connection.php";
        include '../../dynamic_contents/blog/functions.get.php';
        getPost($conn, $pid);
        ?>

<article class='post-wrapper'>
     <div class="post-user-container">
<div class="alert-box"><?= $_SESSION['alert']?></div>
  <header class='post-header'>
    <div>
      <img class='post-avatar' src='../../sourceimages/profile/avatars/avatar-male.png' alt=''>
    </div>
    </header>
    <article>
        <span class='post-title'><?= $post_title ?></span>
        <p class='post-content'><?= $post_content ?></p>
    </article>
    <aside>

    </aside>
      <footer class="post-footer">
         <div class="post-footer-div">
             <button class="post-footer-button" id='post-button1' type='button' name='button'>שלח תשובה</button>
         </div>
      </footer>

</div> <!--Post Container-->
<!--Users Asnwer-->
    <article id='answerContainerID' class='post-answer-container'>
      <?php
      if (isset($_SESSION['id'])) {
    echo "<form id='form_comment_answer' action='../../dynamic_contents/blog/functions.set.php' method='POST'>
        <main>
          <input type='hidden' value='".date('Y-m-d H:i:s')."' name='date'>
            <div class='answer-text'>
              <textarea dir='auto' name='message' id='note' rows='1'></textarea>
            </div>

            <footer>
              <span>שתף קישורים</span>
              <input type='text' name='link1' placeholder='קישור ראשון' />
              <input type='text' name='link2' placeholder='קישור שני' />
              <input type='text' name='link3' placeholder='קישור שלישי' />
            <a href='#lastAnswer'><button class='custom-btn answer-button' name='commentSubmit' type='submit'><span>שגר</span></button></a>
          </footer>
      </main>

        <aside>
            <div><img src='../../sourceimages/profile/avatars/avatar-male.png' alt=''></div>
            <span><a href='../../pages/profile/profile.php?id=$uid' target='_blank'>$nickname</a></span>
              <!--<input type='text' name='author' value='Anonimi' />
            <input type='text' name='commentName' form='form_comment_answer' value='' />-->
            <div class='close-btn'>
              <i id='closeAnswer' class='fa fa-close'></i>
              <div>
        </aside>
        </form>";
      } else {
        echo "<div class='form-session-container'>
                  <header>
                    <span><img class='emoji-img' src='$path/sourceimages/emoji/emoji_dizzy.png'>
                    עליך להתחבר כדי להגיב
                    <img class='emoji-img' src='$path/sourceimages/emoji/emoji_dizzy.png'></span>
                  </header>
                  <footer>
                    <div>
                    <span>יש לך כבר חשבון? <img class='emoji-img' src='$path/sourceimages/emoji/emoji_smirk.png'></span>

                    <a href='$path/pages/form/form.php?action=login'>התחברות</a></div>
                    <div>
                    <span>אין לך עדיין חשבון? <img class='emoji-img' src='$path/sourceimages/emoji/emoji_omg.png'> הרשם עכשיו</span>
                    <a href='$path/pages/form/form.php?action=signup'>הרשמה</a></div>
                  </footer>
              <div class='background-element'></div>
              <div class='close-btn'>
                <i id='closeAnswer' class='fa fa-close'></i>
                <div>
        </div>";
      }
      ?>
    </article>

    <!--Users Comments-->
   <article class='post-comments-container'>

  <div class='post-comments-list'>
    <ul>
      <?php getComments($conn, $pid);?>
      <div class="display_none" style="display:block;">
      <li class='comments-users-block'>
      <div class="alert-box"><?= $_SESSION['alert'] ?></div>
              <div class='comments-users-profile'>
              </div>
          </li>
        </div>
    </ul>
              </div>

              <footer class="post-footer">
                 <div class="post-footer-div">
                     <button class="post-footer-button" id='post-button2' type='button' name='button'>שלח תשובה</button>
                 </div>
              </footer>
           </article>
           <article class="hot-posts-container">
             <div class="blog-list-flexbox">

               <?php
               if (true) {
                  $query = "SELECT * FROM posts ORDER BY postID DESC";

                  $result = mysqli_query($conn, $query);
                  $checking = mysqli_num_rows($result);

                  if ($checking > 0) {
                  include '../../includes/posts_boxs.php';

             }
           }
                 ?>

             </div>
           </article>
         </article>

<script src='<?=$path?>/js/pages/forum.js'></script>
<?php include '../../includes/overall/footer.php'; ?>
