<?php include '../../../includes/overall/header.php'; ?>
<!--<div class="MainFlexBox"> ##The Main FlexBox in the header include file.-->
	<!--<main class="mainContainer"> ##The Main Container in the header include file.-->
  <?php include '../../../includes/pages/courses/navigation_topics_html.php'; ?>
  <section class="tutorial-container">
		<!--*************************
                 SUBJECT 1
        ****************************-->
        <h1 class="title-topic">השלבים לתכנית הראשונה שלכם ב HTML</h1><!--Title of the topic-->
        <h2 class="title-subject"><span class="subject-steps">1</span>עורך טקסט</h2><!--Heading of the subject-->
		<p class="text-subject"><!--Content of the subjects-->
			ישנם עורכי טקסט מאוד מקצועיים בשביל לערוך טקסט<br>
			אבל אני ממליץ על עורך טקסט פשוט כמו <b>Notepadd++</b> זה יעשה את העבודה.
		</p>
			<ol class="list-subject">
	        <li class="list-subject-items"><span class="items-firstWord red">Notepad++</span> - <a target="_blank" href="https://notepad-plus-plus.org/download/v7.3.3.html">לחץ להורדה <i class="fa fa-link"></i></a></li>
            <li class="list-subject-items"><span class="items-firstWord blue">Brackets</span> - <a target="_blank" href="http://brackets.io/">לחץ להורדה <i class="fa fa-link"></i></a></li>
            <li class="list-subject-items"><span class="items-firstWord yellow">Sublime Text</span> - <a target="_blank" href="https://www.sublimetext.com/">לחץ להורדה <i class="fa fa-link"></i></a></li>
			</ol>
        <!--*************************
                 SUBJECT 2
        ****************************-->
		<h2 class="title-subject"><span class="subject-steps">2</span>מסמך ה HTML</h2>
		<p class="text-subject">
		כתבו קוד HTML בתוך העורך טקסט.
		אתם יכולים להעתיק ולהדביק כרצונכם.
		</p>
		<div class="codeContainer"><!--CODEBOX-->
       <h4 class="title-example-code">דוגמא למסמך HTML:</h4><!--Code Heading-->
       <span class="codeBlock">
       <span class="code html"><!--Write The Tooltip Element below[use &lt; &gt;]-->
       <span class="tooltipCode" data-toggle="tooltip" title="מגדירה את המסמך כ HTML5">
       <span class="code-tag">&lt;!DOCTYPE html&gt;</span></span><br>
	   <span class="tooltipCode" data-toggle="tooltip" title="מגדירה את דף האינטרנט">
	   <span class="code-tag">&lt;html&gt;</span></span><br>
	   <span class="tooltipCode" data-toggle="tooltip" title="מגדירף את גוה האתר">
	   <span class="code-tag">&lt;body&gt;</span></span><br><br>
	   <span class="tooltipCode" data-toggle="tooltip" title="מגדירה כותרת">
       <span class="code-tag">&lt;h1&gt;</span></span>
       זאת כותרת
       <span class="code-tag">&lt;/h1&gt;</span><br><br>
	   <span class="tooltipCode" data-toggle="tooltip" title="מגדירה פסקה">
       <span class="code-tag">&lt;p&gt;</span></span>
       זאת פסקה
       <span class="code-tag">&lt;/p&gt;</span><br><br>
       <span class="code-tag">&lt;/body&gt;</span><br>
       <span class="code-tag">&lt;/html&gt;</span><br>
            </span>
        </span>
		<a class="codeRunBtn" target="_blank"> נסה בעצמך </a>
        </div> <!--Close CODEBOX-->

       <!--*************************
                 SUBJECT 3
        ****************************-->
		<h2 class="title-subject"><span class="subject-steps">3</span>שמירת הקובץ</h2>
		<p class="text-subject">
		שמרו את הקובץ (Ctrl+s) תנו איזה שם שאתם רוצים אבל הכי חשוב הוא הסיומת של הקובץ.<br>
		הסיומת של הקובץ מגדירה את סוג הקובץ, ובמקרה שלנו זה <span class="tooltipCode" data-toggle="tooltip" title="מגדיר את הקובץ כHTML">.html</span>
		</p>
         <div class="image-subject">
        <img class="image-subject-object" src="../../../sourceimages/examples/step01_html.jpg">
       </div>

        <!--*************************
                 SUBJECT 4
        ****************************-->
        <h2 class="title-subject"><span class="subject-steps">4</span>פתיחת הקובץ</h2>
		<p class="text-subject">
        כנסו לתיקיה שבה שמרתם את הקובץ שלכם, ופתחו אותו באמצעות דפדפן (אני ממליץ לעבוד עם chrome)<br>
        בשלב הזה מסמך ה HTML שלכם ירונדר כולו לדפדפן.
        </p>
        <div class="image-subject">
        <img class="image-subject-object" src="../../../sourceimages/examples/step02_html.JPG">
       </div>
       <!--
           Message To use
        -->
        <article class="message-container">
       <div class="info-message-subject yellow"> <!--Yellow-->
           <span class="message-icon"><i class="fa fa-exclamation-circle"></i></span>
           <span class="message-text">
               השימוש ב "dir="rtl
               קובע את הכיוון של האלמנטים. במקרה הזה מימין לשמאל.
           </span>
       </div>
     </article>
          <article class="message-container">
          <div class="info-message-subject red"> <!--RED-->
           <span class="message-icon"><i class="fa fa-minus-circle"></i></span>
           <span class="message-text">
               תמיד תשמרו את העבודות שלכם. Ctrl+S
           </span>
       </div>
     </article>

         <article class="message-container">
          <div class="info-message-subject green"><!--GREEN-->
           <span class="message-icon"><i class="fa fa-question-circle"></i></span>
           <span class="message-text">
            במה שפת HTML משתמשת כדי לבצע פעולות?
           </span>
            </div>
           <div class="message-quiz">
               <ul>
                   <li><i class="fa fa-square-o"></i> פונקציות</li>
                   <li><i class="fa fa-square-o"></i> פקודות</li>
                   <li><i class="fa fa-check-square-o"></i> תגיות</li>
                   <li><i class="fa fa-square-o"></i> סקריפטים</li>
               </ul>
           </div>
       </article>

        <!--*************************
                 SUBJECT Sujest
        ****************************-->
           <hr>
           <article class="subject-footer">

            <h2 class="title-subject"> מדריכים מומלצים </h2>
            <ul class="list-subject">
	        <li class="list-subject-items"><a href="#"> מבוא ל CSS </a></li>
           <li class="list-subject-items"><a href="#"> מבוא ל JAVASCRIPT </a></li>
            </ul>
<div id="btn-container-next-prev">
    <a href="#" id="btn-next" onclick="changePage(+1)"><i class="fa fa-hand-o-right"></i> הבא </a>
    <a href="#" id="btn-prev" onclick="changePage(-1)"> הקודם <i class="fa fa-hand-o-left"></i></a>
       </div>
     </article>
     
</section><!--necessary-->
        <!--*************************
              -   SUBJECT END
        ****************************-->

			<?php include '../../../includes/overall/footer.php'; ?>
