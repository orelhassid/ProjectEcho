<!--###############################
		CSS- TUTORIAL
###################################-->

<?php include '../../../includes/overall/header.php'; ?>
<!--<div class="MainFlexBox"> ##The Main FlexBox in the header include file.-->
	<!--<main class="mainContainer"> ##The Main Container in the header include file.-->
				<?php include '../../../includes/pages/courses/navigation_topics_css.php'; ?>
				<section class="tutorial-container">
		<!--*************************
                 SUBJECT 1
        ****************************-->
        <h1 class="title-topic">מבוא לשפת CSS</h1><!--Title of the topic-->
        <h2 class="title-subject">מה זה CSS?</h2><!--Heading of the subject-->
		<p class="text-subject"><!--Content of the subjects-->
         CSS הם ראשי תיבות של <b>C</b>ascading <b>S</b>tyle <b>S</b>heets<br>
            משמעות המילים:<br>
            <span style="color:#000;" class="tooltipCode" data-toggle="tooltip" title="מדורגת">
            Cascading</span> - מתייחס לדרך שבה CSS מיישמת סגנון אחד על גבי האחר בצורה מדורגת.
        <br><span style="color:#000;" class="tooltipCode" data-toggle="tooltip" title="גיליונות סגנון">
            Style Sheets</span> - שולטת על המראה והתחושה של המסמך.
            </p>

        <!--*************************
                 SUBJECT 2
        ****************************-->
        <h2 class="title-subject">למה CSS?</h2>
		<p class="text-subject">
         אז מה כל כך מיוחד בשפת CSS<br>
           הנה כמה מהיתרונות העיקריים של השפה:
            </p>
        <ul class="list-subject">
            <li class="list-subject-items">
                CSS חוסכת <b>המון זמן עבודה</b> בכך שהיא מרכזת את כל הסגנונותת בקובץ אחד נפרד.
            </li>
            <li class="list-subject-items">
                CSS מאפשרת <b>שליטה מלאה</b> על העיצוב והמראה של האתר.
            </li>
            <li class="list-subject-items">
                כיום ל CSS3 יש המון <b>תכונות חדשות ושידרוגים</b> שיגרמו להאתר שלכם להראות הרבה יותר טוב.
            </li>
            <li class="list-subject-items">
                <b>קל ללמוד</b> CSS! זו אחת השפות הקלות ביותר והמועילות ביותר שניתן ללמוד.
            </li>

        </ul>

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

		 </section><!--necessary-->
		         <!--*************************
		               -   SUBJECT END
		         ****************************-->

		 			<?php include '../../../includes/overall/footer.php'; ?>
