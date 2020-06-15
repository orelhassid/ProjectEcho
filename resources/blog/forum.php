<?php include '../includes/overall/header.php'; ?>
<link rel="stylesheet" href="<?=$path?>/css/theme_bright/scss/blog.css">
<!--<div class="MainFlexBox"> ##The Main FlexBox in the header include file.-->
	<!--<main class="mainContainer"> ##The Main Container in the header include file.-->
  <?php require_once "../php/database/connection.php";
        include '../php/blog/functions_blog.get.php'; ?>
  <article class="blog-list-wrapper">

    <header>

        <div class="blog-header-title"><span>שאלות ותשובות</span></div>

        <div class="buttonStart-container">
          <div class='buttonStart'>
            <a href="post_new.php">פתח בשאלה/בדיון</a>
           <span class='clickStart'>לחץ כדי להתחיל</span>
          </div>
        </div>

    </header>
<?= getBlog($conn, $path);?>

</article>
<?php include '../includes/overall/footer.php'; ?>
