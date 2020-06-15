<?php
	session_start();

  $serverName = "http://".$_SERVER['SERVER_NAME'];
	$port = ':8080';
	$dir = "/PROJECT-ECHO/resources";
	$path = "$serverName$port$dir";
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="windows-1255">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= $path?>/css/jquery-ui-1.12.1/jquery-ui.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="<?= $path?>/css/jquery-ui-1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <link lang='scss' rel="stylesheet" href="<?= $path?>/css/theme_bright/main.css">
	<title></title>
</head>
	<body>
		<div class="WRAPPER">

	    <header class="mainHeader">
	    <div class="logo" id="goup"></div>

	    <nav class="main-nav">
				<div class="logo-container">
        <span>אקו פלוס</span>
				</div>
		    <ul class="nav-bar-items-top">
			    <a href="<?=$path?>/index.php">
				    <li class="bar-items">דף הבית</li></a>
				<a href="#">
				    <li class="bar-items">חדשות</li></a>
				<a href="#">
				    <li class="bar-items">צור קשר</li></a>
				<a href="#">
				    <li class="bar-items">מי אנחנו</li></a>
						<?php
						if (!isset($_SESSION['uid'])) {
							echo "
				<a href='$path/pages/form/form.php'>
				    <li class='bar-items singup-nav'>הירשם</li></a>";
					}else {
						echo "
				<a href='$path/pages/profile/profile.php?uid=".$_SESSION['uid']."'>
				    <li class='bar-items login-nav'>פרופיל</li></a>";
						}
						?>
				 <li class="bar-items none">|</li>
				 <a href="<?=$path?>/pages/courses/courses_main_page.php" class="try-item">
				    <li class="bar-items">קורסים</li></a>
				 <a href="../courses_main_page.php">
				    <li class="bar-items">הורדות</li></a>
				 <a href="../courses_main_page.php">
				    <li class="bar-items">דרושים</li></a>
				 <a href="<?=$path?>/blog/forum.php">
							 <li class="bar-items">פורום</li></a>
            <li class="bar-items">
							    <input class="searchBox-input" type="search" name="" placeholder="Search..." />
							 </li>

			</ul>
			<ul class="nav-bar-items-bottom">
				<li><a href="<?=$path?>/pages/courses/html/intro.php">
					HTML</a></li>
				<li><a href="<?=$path?>/pages/courses/css/intro.php">
					CSS</li></a>
				<a href="#"><li>גרפיקה</li></a>
				<a href="#"><li>האקינג</li></a>
				<a href="#"><li>מוזיקה</li></a>
			</ul>
        </nav>
				</header>


	<main class="MainFlexBox"><!--The Main FlexBox-->
		<section class="mainContainer"><!--The Main Section-->
