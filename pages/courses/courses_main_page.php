<?php include '../../includes/overall/header.php'; ?>
<!--<div class="MainFlexBox"> ##The Main FlexBox in the header include file.-->
	<!--<main class="mainContainer"> ##The Main Container in the header include file.-->

	<div class="frame-container">
		<article class="window">
		<div class="flowers-shelf">
			<img src="<?=$path?>/sourceimages/decoration/flowers1.png">
			</div>
		    <div class="frame-left" id="window_left" onclick="openWindow()">
                <div class="frame-left-side"></div>
		    </div>
		    <div class="frame-right" id="window_right" onclick="openWindow()"></div>
		    <div class="frame-front">
		    	<img class="window-gif" src="<?=$path?>/sourceimages/decoration/birds_night1.gif">
		    </div>

		</article>
		    <div class="shelf">
			  	<div class="bookend_left"></div>
				<div class="bookend_right"></div>
				<div class="reflection"></div>
				</div>
			<div class="books-shelf">
			<img src="<?=$path?>/sourceimages/decoration/books_shelf1.png">
			</div>
			<div class="character-read">
			<img src="<?=$path?>/sourceimages/decoration/character_read2.png">
			</div>
			<div class="speech-bubble" id="speech-bubbleID">
			<p>
				מה אנחנו הולכים ללמוד היום?
			</p>
			</div>
				</div><!--Close Frame Container-->
			<!--=============================================
			PROGRAMMING - Courses
			===============================================-->

		</article>
		<span class='course-heading'>SomeThing</span>
		<!-- <article class='flex-boxs-courses'>
			<div class='boxs'>
				<div class='box-course-3d'></div>
				<div class='boxModel'>
						<a href='html/intro.php'>
						<button class='modelButton'>ECHO</button></a>
				</div>
			<header class='box-course-header'>
				<img class='box-course-logo' src='../../sourceimages/icons/html-logo.png'>
				<h2 class='box-course-title'>HTML</h2>
		 </header>
	<p class='box-course-info'>יפתח בקרוב</p>
			</div>
			</article> -->
			<hr>
		<?php
		/*include_once('../../dynamic_contents/connection.php');
		mysqli_set_charset($conn,"utf8");
    $query = "SELECT * FROM course";
		$result = mysqli_query($conn,$query);
		while ($row = mysqli_fetch_assoc($result)) {
			if ($row['course_name'] === 'html' || $row['course_name'] === 'it' || $row['course_name'] === 'photoshop' || $row['course_name'] === 'maya' || $row['course_name'] === 'dj' ) {
        echo "</article>";
				echo "<article class='flex-boxs-courses'>";
				echo "<span class='course-heading'>".$row['course_type']."</span>";
  			echo "<hr>";
  		  echo "<article class='flex-boxs-courses'>";
  			echo "<div class='".$row['course_type']."BG'></div>";
			}

	echo "<div class='boxs'>
			      <div class='box-course-3d'></div>
			          <div class='boxModel'>
			              <a href='html/intro.php'>
			              <button class='modelButton'>ECHO</button></a>
			          </div>
			        <header class='box-course-header'>
			          <img class='box-course-logo' src='".$row['course_logo']."'>
			          <h2 class='box-course-title'>".$row['course_name']."</h2>
			       </header>
			    <p class='box-course-info'>".$row['course_brief']."</p>
			</div>";//CLose Box

		}*/
		?>

			<?php #include '../../includes/overall/aside.php'; ?>

			<script type="text/javascript">
      /*window.onload = function() {displayBoxs()};*/
			var speech_bubble = document.getElementById('speech-bubbleID');
			speech_bubble.style.transform = "scale(1)";
      function displayBoxs(){
				var courses_boxs = document.getElementsByClassName('boxs');
			setTimeout(function(){
				for (var x=0; x<courses_boxs.length;x++){
						console.log(courses_boxs[x]);
						courses_boxs[x].style.opacity = 1;
						courses_boxs[x].style.transform = "rotateY(0deg)";
				}
			},100);
			}
					displayBoxs();
			/*setInterval(displayBoxs(), 200);*/

       function openWindow() {
       	var window_left = document.getElementById('window_left');
       	window_left.classList.toggle("open-window-left");
       	var right = document.getElementById('right');
       	window_right.classList.toggle("open-window-right");
       	setTimeout(function() {
       	window_left.style.filter = "drop-shadow(1px 1px 3px black)";
       	window_right.style.filter = "drop-shadow(-1px -1px 3px black)";
       	}, 1000);
       }

function getBoxs() {
	var logo = ["../../sourceimages/icons/html-logo.png", "../../sourceimages/icons/css-logo.png",
             "../../sourceimages/icons/javascript-logo.png", "../../sourceimages/icons/php-logo.png"];
	var title = ["HTML", "CSS", "JAVASCRIPT", "PHP"];
	var content = ["TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT", "TEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXTTEXT TEXT"];

  var parent = document.querySelector(".mainContainer");
	var flexBox = document.createElement('ARTICLE');
	var box = document.createElement('DIV');
  var box3D = document.createElement('DIV');
	var boxModel = document.createElement('DIV');
	var link = document.createElement('A');
	var buttonLink = document.createElement('BUTTON');
	var header = document.createElement('HEADER');
	var img = document.createElement('IMG');
	var h2 = document.createElement('H2');
	var p = document.createElement('P');

	flexBox.className = "flex-boxs-courses";
	box.className = "boxs";
	box3D.className = "box-course-3d";modelButton
	boxModel.className = "boxModel";
	buttonLink.className = "modelButton";
	header.className = "box-course-header";
	img.className = "box-course-logo";
	h2.className = "box-course-title";
	p.className = "box-course-info";

	for (var x=0; x<title.length;x++) {
		parent.appendChild(flexBox);
	}
}
getBoxs();
    </script>

      <?php include '../../includes/overall/footer.php'; ?>
