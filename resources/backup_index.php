<!DOCTYPE html>
<html>
    <head>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/home_page.css">
	<link rel="stylesheet" href="css/widgets.css">
	<link rel="stylesheet" href="css/overall_style1.css">
</head>
    <body>
<?php
    include 'includes/overall/header.php';
?>
	<hr>
	<section>
		<article>
	    	<h2>Easy Life Start Here!</h2>
        	<p>work hard, study, <span>success!</span></p>
		</article>
	
	</section>

	<!--~~~~~~~~~~~~~~~~~~~~~~~
	Widgets - Courses 
	~~~~~~~~~~~~~~~~~~~~~~~~-->   
	<hr>
	<section>
		<nav id="features-nav">
			<ul>
			    <li><a class="tab" onclick="slideShow(0)">Programming</a></li>
				<li><a class="tab" onclick="slideShow(1)">Computers</a></li>
				<li><a class="tab" onclick="slideShow(2)">Graphic</a></li>
				<li><a class="tab" onclick="slideShow(3)">3D Animation</a></li>
				<li><a class="tab" onclick="slideShow(4)">Music</a></li>
			</ul>
			</nav>
    <!------------------------
	PROGRAMMING ARTICLE COURSES
    -------------------------->
	<div class="content programming">
	    <h1>Our courses..</h1>
	    <div id="flex-courses">
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
		<aside>
		    <h3>Learn From The Best!</h3>
		    <hr>
			<p>
			Web design, Application development, Programs, 
			</p>
			<a href="pages/courses/courses_programming.php"><button>Learn More</button></a>
		</aside>
	</div> <!-- Close div's content-->
	<!--======================
	COMPUTERS ARTICLE COURSES
    ==========================-->
	<div class="content computers">
	    <h1>Our courses..</h1>
	    <div id="flex-courses">
		    <div class="items"><span class="header it">IT</span><p></p></div>
			<div class="items"><span class="header ccna">CCNA</span></div>
			<div class="items"><span class="header ceh">CEH</span></div>
		    <div class="items"><span class="header servers">SERVERS</span></div>
			<div class="items"><span class="header software">SOFTWARE</span></div>
			<div class="items"><span class="header triks">TRIKS</span></div>
		</div>
		
		<aside>
		    <h3>Learn From The Best!</h3>
			<p>
			Networking, Troubleshooting, Routing and Switching
			</p>
			<a href="pages/courses/courses_programming.php"><button>Learn More</button></a>
		</aside>
	</div>
	<!--=====================
	GRAPHIC ARTICLE COURSES
    =========================-->
    <div class="content graphic">
	    <h1>Our courses..</h1>
	    <div id="flex-courses">
		    <div class="items"><span class="header photoshop">Photoshop</span><p></p></div>
			<div class="items"><span class="header illustrator">Illustrator</span></div>
			<div class="items"><span class="header photography">Photography</span></div>
        </div><!--Close flex-courses-->
		<aside>
		    <h3>Learn From The Best!</h3>
		    <hr>
			<p>
			Web design, Application development, Programs, 
			</p>
			<a href="pages/courses/courses_programming.php"><button>Learn More</button></a>
		</aside>
		
	</div> <!-- Close article's content-->
    
	<!--~~~~~~~~~~~~~~~~~~~~~~~~
	3D ANIMATION ARTICLE COURSES
    ~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="content animation">
	    <h1>Our courses..</h1>
	    <div id="flex-courses">
		    <div class="items"><span class="header maya">MAYA</span><p></p></div>
			<div class="items"><span class="header mask">3D MASK</span></div>
			<div class="items"><span class="header blender">Blender</span></div>
        </div><!--Close flex-courses-->
		<aside>
		    <h3>Learn From The Best!</h3>
		    <hr>
			<p>
			Web design, Application development, Programs, 
			</p>
			<a href="pages/courses/courses_programming.php"><button>Learn More</button></a>
		</aside>
		
	</div> <!-- Close div's content-->
	<!--~~~~~~~~~~~~~~~~~~~~~~~
	MUSIC ARTICLE COURSES
    ~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="content music">
	    <h1>Our courses..</h1>
	    <div id="flex-courses">
		    <div class="items"><span class="header dj">DJ</span><p></p></div>
			<div class="items"><span class="header breakdance">Breakdance</span></div>
			<div class="items"><span class="header hiphop">Hip-Hop</span></div>
			<div class="items"><span class="header cwalk">C-Walk</span></div>
			<div class="items"><span class="header parkur">Parkur</span></div>
        </div><!--Close flex-courses-->
		<aside>
		    <h3>Learn From The Best!</h3>
		    <hr>
			<p>
			Web design, Application development, Programs, 
			</p>
			<a href="pages/courses/courses_programming.php"><button>Learn More</button></a>
		</aside>
		
	</div> <!-- Close article's content-->
    	<span class="arrows next" onclick="slideShowArrows(+1)"><i class="fa fa-arrow-circle-right"></i></span>
    	<span class="arrows prev" onclick="slideShowArrows(-1)"><i class="fa fa-arrow-circle-left"></i></span>
	</section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~
	Widgets - How To 
	~~~~~~~~~~~~~~~~~~~~~~~~-->
    <hr>
    <section>
    	<article id="child">
    		<h2>HOW TO</h2>
    	</article>
    </section>
    <hr>
	<section>
		<article id="child">
		    <h2>Why us?</h2>
		    <div id="adventages-flex">
		        <div class="adventages-items">
		            <i class="fa fa-code"></i>
		            <p>
		                Free courses, tips and tricks that will helps you to be a professional !
		            </p>
		        </div>
		        <div class="adventages-items">
		            <i class="fa fa-cube"></i>
		            <p>
		                Vairous of courses for everyone, starting with computers, coding, music, arts, and more !
		            </p>
		        </div>
		        <div class="adventages-items">
		            <i class="fa fa-group"></i>
		            <p>
		                Ask, Answer, and Descuss with our community we belive as a group you can learn more and fast
		            </p>
		        </div>
		    </div>
	    </article>
	</section>
	<hr>
	<?php
    include 'includes/overall/footer.php';
?>