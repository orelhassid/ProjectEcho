<article class="widgets-container">
	<?php
		if(isset($_SESSION['username'])) {
		echo "<div class='widget-account-container'>
	    <div class='widget-account'>
		<img class='lockimg' src='http://localhost:8080/PROJECT-ECHO/resources/sourceimages/icons/lock.png' onerror='if (this.src != 'error.png') this.src = 'sourceimages/icons/lock.png';'>
		<div class='account-hole'></div>
        </div>
			<form class='account-form' method='post' action='http://localhost:8080/PROJECT-ECHO/resources/dynamic_contents/login.php'>
				<input type='text' name='username' placeholder='username'>
				<input type='password' name='password' placeholder='password'>
				<button type='submit'>התחבר</button>
			</form>
	</div>";
		}else {
	echo "
    <div class='profileContainer dropdown'>
    <button class='profile-avatar'></button>
    <button class='profileName dropdown-toggle' type='button' data-toggle='dropdown'>".$_SESSION['username']."<span class='caret'></span>
    </button>
	<ul class='dropdown-menu widget-profile'>
       <li class='dropdown-header'>פרופיל</li>
        <li><a href='http://localhost:8080/PROJECT-ECHO/resources/pages/profile/profile.php'><i style='color:blue;' class='fa fa-graduation-cap'></i></a></li>
        <li class='dropdown-header'>הגדרות</li>
        <li><a href='#'><i style='color:grey;' class='fa fa-gears'></i></a></li>
        <li class='dropdown-header'>יציאה</li>
        <li><a href='http://localhost:8080/PROJECT-ECHO/resources/dynamic_contents/logout.php'><i style='color:red;' class='fa fa-power-off'></i></a></li>
	</ul>
</div>";
		}
	?>


	<div class="widget-follow follow-facebook">
		<div class="hole"></div>
	</div>
	<div class="widget-follow follow-youtube">
		<div class="hole"></div>
	</div>
        <div class="widget-up"><a href="#goup"><i class="fa fa-hand-pointer-o"></i></a></div>
	</article>
