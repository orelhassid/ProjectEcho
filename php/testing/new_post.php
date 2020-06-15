<?php
require_once 'connection.php';

$post_title = $_POST['post_title'];
$post_content = $_POST['post_content'];
$post_image_text = $_POST['post_image_text'];
$post_image = $_POST['post_image'];


include '../../../includes/overall/header.php'; ?>
<!--<div class='MainFlexBox'> ##The Main FlexBox in the header include file.-->
 <!--<main class='mainContainer'> ##The Main Container in the header include file.-->
  <link rel='stylesheet' href='<?=$path?>/css/theme_bright/forum.css'>
<article class='forum-post-container'>
    <header class='post-header'>
        <img class='post-avatar' src='../../../sourceimages/profile/avatars/avatar-male.png' alt=''>
    </header>
    <article class='post-text'>
        <span class='post-title'>The is a Title</span>
        <p class='post-content'>
            Some Text Some Text Some Text Some Text Some Text
        </p>
    </article>
      <footer class='post-footer'>
         <div class='post-footer-right'>

         </div>
         <div class='post-footer-front'>
             <button id='post-button1' type='button' name='button'>
             שלח תשובה
             </button>
         </div>
         <div class='post-footer-left'>

         </div>
      </footer>
</article>
<!--Users Asnwer-->
    <article id='answerContainerID' class='answerContainer'>
        <form class='answer-form' action='' method='post'>
            <div>
              <textarea dir='auto' name='answer' id='note' rows='1'></textarea>
            </div><!-- CLose TextArea Container-->
            <div>
              <span>שתף קישורים</span>
              <input type='text' name='link1' placeholder='קישור ראשון' />
              <input type='text' name='link2' placeholder='קישור שני' />
              <input type='text' name='link3' placeholder='קישור שלישי' />
            </div><!-- CLose Links Container-->
            <div>
            <a href='#lastAnswer'><button class='custom-btn answer-button' type='submit'><span>שגר</span></button></a>
          </div><!-- CLose Button Container-->
        </form>
        <div class='answer-profile'>
            <img src='../../../sourceimages/profile/avatars/avatar-male.png' alt=''>
            <ul>
              <li>OrelHassid</li>
              <li><span>Date:</span> hour ago</li>
            </ul>
        </div>
        <div class='close-btn'>
          <i id='closeAnswer' class='fa fa-close'></i>
          <div>
    </article>
    <!--Users Comments-->
    <section class='commentsContainer'>
<?php
$x=0;
  echo '<div class='commentsList'>
          <ul>';
          while($x<8){
            $x++;
          echo'<li class='comments-users-block'>
                <div class='chat-button'>
                <i class='fa fa-comment'></i>
                </div>
                <div class='reply-button'>
                <i class='fa fa-reply'></i>
                </div>
                  <div class='comments-users-profile'>
                      <img src='../../../sourceimages/profile/avatars/avatar-male.png' alt=''>
                      <ul>
                        <li>OrelHassid</li>
                        <li><span>Date:</span> hour ago</li>
                      </ul>
                  </div>
                  <div class='comments-users-text'>
                  <span>
                  טקסט Text טקסט Text טקסט Text טקסט Text טקסט Text טקסט Text
                  טקסט Text טקסט Text טקסט Text טקסט Text טקסט Text טקסט Text
                  טקסט Text טקסט Text טקסט Text טקסט Text טקסט Text טקסט Text

                  </span>
                  </div>
                  <div class='comments-users-rate'>
                      <span>Good</span>
                      <span>
                      <i class='fa fa-arrow-up'></i>
                      <i class='fa fa-arrow-down'></i>
                      </span>
                      <span>Bad</span>
                  </div>
              </li><hr>';
            }
              echo '</ul>
              <footer class='post-footer'>
                 <div class='post-footer-right'>

                 </div>
                 <div class='post-footer-front'>
                     <button id='post-button2' type='button' name='button'>
                     שלח תשובה
                     </button>
                 </div>
                 <div class='post-footer-left'>

                 </div>
              </footer>
                        </div>';
?>
  </section><!--Close users Comments-->

<?php include '../../../includes/overall/aside.php'; ?>
<?php include '../../../includes/overall/aside2.php'; ?>
<script src='<?=$path?>/js/pages/forum.js'></script>
<?php include '../../../includes/overall/footer.php'; ?>

";
 ?>
