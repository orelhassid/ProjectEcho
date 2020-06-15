<?php include 'includes/overall/header.php'; ?>
<!--<div class="MainFlexBox"> ##The Main FlexBox in the header include file.-->
	<!--<main class="mainContainer"> ##The Main Container in the header include file.-->
<link rel="stylesheet" href="<?=$path?>/css/theme_bright/scss/homepage.css">
	<article class="index-article-1">

		<!-- <span class="article-title"><?=$path?></span> -->
	    	<span class="article-title">המקום המושלם עבור נוער</span>
        	<p class="article-text">כי זה מה שאנחנו עושים</p>

	</article>

	 <article class="index-article-2">
		<nav class="features-nav">
			<ul>
			    <li class="tab active" onclick="slideShow(0)">
						תכנות</li>
				<li class="tab" onclick="slideShow(1)">
					מחשבים</li>
				<li class="tab" onclick="slideShow(2)">
					גרפיקה</li>
				<li class="tab" onclick="slideShow(3)">
					אנימציה בתלת מימד</li>
				<li class="tab" onclick="slideShow(4)">
					אומנות</li>
			</ul>
			</nav>
			<div class="index-learnfromus">
					<span class="index-learnfromus-title">למד מהטובים ביותר!</span>
					<hr>
				<p class="index-learnfromus-text">
				עיצוב אתרים, פיתוח אפליקציות, סייבר ועוד
				</p>
				<a href="pages/courses/courses_main_page.php"><button>למד עוד</button></a>
			</div>
	    <div class="flex-courses programming">
		    <a href="pages/courses/html/intro.html"><div class="items"><span class="header html">HTML</span></div></a>
			<div class="items"><span class="header css">CSS</span></div>
			<div class="items"><span class="header javascript">JAVASCRIPT</span></div>
			<div class="items"><span class="header php">PHP</span></div>
            <div class="items"><span class="header sql">SQL</span></div>
		    <div class="items"><span class="header AngularJS">AngularJS</span></div>
			<div class="items"><span class="header JAVA">JAVA</span></div>
			<div class="items"><span class="header PYTHON">PYTHON</span></div>
            <div class="items"><span class="header C">C++</span></div>
            <div class="items"><span class="header RUBY">RUBY</span></div>
        </div>

	    <div class="flex-courses computers">
		    <div class="items"><span class="header it">IT</span><p></p></div>
			<div class="items"><span class="header ccna">CCNA</span></div>
			<div class="items"><span class="header ceh">CEH</span></div>
		    <div class="items"><span class="header servers">SERVERS</span></div>
			<div class="items"><span class="header software">SOFTWARE</span></div>
			<div class="items"><span class="header triks">TRIKS</span></div>
		</div>

	    <div class="flex-courses graphic">
		    <div class="items"><span class="header photoshop">Photoshop</span><p></p></div>
			<div class="items"><span class="header illustrator">Illustrator</span></div>
			<div class="items"><span class="header photography">Photography</span></div>
        </div>

	    <div class="flex-courses animation">
		    <div class="items"><span class="header maya">MAYA</span><p></p></div>
			<div class="items"><span class="header mask">3D MASK</span></div>
			<div class="items"><span class="header blender">Blender</span></div>
        </div>

	    <div class="flex-courses music">
		    <div class="items"><span class="header dj">DJ</span><p></p></div>
			<div class="items"><span class="header breakdance">Breakdance</span></div>
			<div class="items"><span class="header hiphop">Hip-Hop</span></div>
			<div class="items"><span class="header cwalk">C-Walk</span></div>
			<div class="items"><span class="header parkur">Parkur</span></div>
        </div>

    	<span class="arrows next" onclick="slideShowArrows(+1)"><i class="fa fa-arrow-circle-right"></i></span>
    	<span class="arrows prev" onclick="slideShowArrows(-1)"><i class="fa fa-arrow-circle-left"></i></span>
	</article>


    <article  class="index-article-3">
      <div class="flexbox">
        <div><span class="flexbox-title">Title</span>
					<img src="sourceimages/icons/rocket.png" alt="Rocket">
         <p class="flexbox-text">Some Text Blah Blah Blah Some Text Blah Blah Blah Some Text Blah Blah Blah</p>
				</div>
				<div><span class="flexbox-title">Title</span>
					<img src="sourceimages/icons/toolbox.png" alt="Rocket">
         <p class="flexbox-text">Some Text Blah Blah Blah</p>
				</div>
				<div><span class="flexbox-title">Title</span>
					<img src="sourceimages/icons/wrist_watch.png" alt="Rocket">
         <p class="flexbox-text">Some Text Blah Blah Blah Some Text Blah Blah Blah</p>
				</div>
	</article>

	<article class="index-article-4">

	</article>

<?php #include 'includes/overall/aside.php'; ?>
<?php #include 'includes/overall/aside2.php'; ?>
	<?php include "includes/overall/footer.php"; ?>
