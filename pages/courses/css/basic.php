<!--###############################
		CSS- TUTORIAL
###################################-->

<?php include '../../../includes/overall/header.php'; ?>

<?php include '../../../includes/overall/widget.php'; ?>


	<div class="wrapper-courses-intro">

<?php include '../../../includes/pages/courses/navigation_topics_css.php'; ?>
		<main class="main-courses-intro">
		<!--*************************
                 SUBJECT 1
        ****************************-->
        <h1 class="title-topic">בואו נתחיל להשתמש ב CSS</h1><!--Title of the topic-->
        <h2 class="title-subject">התחביר ל CSS</h2><!--Heading of the subject-->
        <div class="image-subject">
       <img class="image-subject-object" src="../../../sourceimages/examples/COPYRIGHT_example_css_02.png">
      </div>
      <h2 class="title-subject">האלמנט שנבחר</h2>
		<p class="text-subject"><!--Content of the subjects-->
      האלמנט שנבחר מצביע על אלמנט HTML שנוכח במסמך.<br>
      זה יכול להיות &lt;body&gt;, &lt;h1&gt;, &lt;p&gt;, &lt;div&gt;, &lt;span&gt; וכ'ו
    </p>

        <!--*************************
                 SUBJECT 2
        ****************************-->
        <h2 class="title-subject">למה CSS?</h2>
		<p class="text-subject">
         אז מה כל כך מיוחד בשפת CSS<br>
           הנה כמה מהיתרונות העיקריים של השפה:
            </p>


       <!--*************************
                 SUBJECT 3
        ****************************-->

        <!--*************************
                 SUBJECT 4
        ****************************-->
        <div class="codeContainer"><!--CODEBOX-->
       <h4 class="title-example-code"></h4>

      <span class="codeBlock">
         <span class="code html">
            <span class="code-tag">&lt; &gt;</span>
            <span class="code-attribute"></span>
            <span class="code-value"></span>
            <span class="tooltipCode" data-toggle="tooltip" title="Title">

             </span><!--Close Tooltip-->
         </span>
      </span>
    </div> <!--Close CODEBOX-->

        <!--*************************
                 SUBJECT Sujest
        ****************************-->
           <hr>
            <h3 class="title-subject"> מדריכים מומלצים </h3>
            <ul class="list-subject">
	        <li class="list-subject-items"><a href="#"> מבוא ל CSS </a></li>
           <li class="list-subject-items"><a href="#"> מבוא ל JAVASCRIPT </a></li>
            </ul>
<div class="btn-container-next-prev">
    <a href="#" id="btn-next" onclick="changePage(+1)"><i class="fa fa-hand-o-right"></i> הבא </a>
    <a href="#" id="btn-prev" onclick="changePage(-1)"> הקודם <i class="fa fa-hand-o-left"></i></a>
       </div>

        <!--*************************
                 SUBJECT END
        ****************************-->

        <!--*************************
            ASIDE - NEWS AND UPDATES
        ****************************-->
		</main>
    <?php include '../../../includes/overall/aside.php'; ?>
</div>
        <!--*************************
                 EXTRA ELEMENTS
        ****************************-->


<?php include '../../../includes/overall/footer.php'; ?>

    <script src="http://localhost:8080/PROJECT-ECHO/resources/js/courses.js"></script>
	</body>
</html>
