<?php include '../../includes/overall/header.php'; ?>

<?php include '../../includes/overall/widget.php'; ?>
    <div id="wrapper-courses-intro">
<main class="main-profile">
  <section class="profile-container">
  
  <article class="profile-info">
   <span class="profile-title">הפרופיל שלי</span>
    <h1 class="profile-name"><!--Object-->
        <span class="profile-who">שם:</span><!--Property-->
        אוראל חסיד</h1> <!--Value-->
    <h2 class="profile-name"><!--Object-->
        <span class="profile-who">כינוי:</span><!--Property-->
        אוראל חסיד</h2> <!--Value-->
    <h2 class="profile-name"><!--Object-->
        <span class="profile-who">גיל:</span><!--Property-->
        אוראל חסיד</h2> <!--Value-->
    <h2 class="profile-name"><!--Object-->
        <span class="profile-who">דירוג:</span><!--Property-->
        אוראל חסיד</h2> <!--Value-->
    <h2 class="profile-name"><!--Object-->
        <span class="profile-who">שם משתמש:</span><!--Property-->
        </h2> <!--Value-->
    <h2 class="profile-name"><!--Object-->
        <span class="profile-who">שם:</span><!--Property-->
        אוראל חסיד</h2> <!--Value-->
<h2 class="profile-name"><!--Object-->
        <span class="profile-who">שם:</span><!--Property-->
        אוראל חסיד</h2> <!--Value-->
    </article>
       
        <article class="profile-avatar-container">
        <img class="profile-image" src="http://localhost:8080/PROJECT-ECHO/resources/sourceimages/profile/avatars/<?php 
            echo $_SESSION['session_avatar'];
        ?>" alt="Profile Image">        
            </article>
            <article class="profile-friends-container">
            <?php
            $imgurl = "http://localhost:8080/PROJECT-ECHO/resources/sourceimages/profile/avatars/";
            $friend_avatar = $_SESSION['session_avatar'];
            $friend_avatar = "mickey_mouse.png";
            for ($x=0;$x<4;$x++) {
                echo "<div class='profile-friends'>";
                echo "<img class='profile-image' src='".$imgurl.$friend_avatar."' />";
                echo "</div>";
            }

            ?>
            <div class="profile-friends-right">
                <i class="fa fa-arrow-circle-o-right"></i>
            </div>
            <div class="profile-friends-left">
                <i class="fa fa-arrow-circle-o-left"></i>
            </div>
            </article>
               
     </section>                               
</main>


<?php include '../../includes/overall/aside.php'; ?>
<?php include '../../includes/overall/footer.php'; ?>
    </body>
</html>