<?php include '../../../includes/overall/header.php'; ?>
<!--<div class="MainFlexBox"> ##The Main FlexBox in the header include file.-->
	<!--<main class="mainContainer"> ##The Main Container in the header include file.-->
				<?php include '../../../includes/pages/courses/navigation_topics_html.php'; ?>
				<section class="tutorial-container">
		<!--*************************
                 SUBJECT 1
        ****************************-->
        <h1 class="title-topic">קישורים - Links</h1><!--Title of the topic-->
        <h2 class="title-subject">HTML קישורים ב</h2><!--Heading of the subject-->
		<p class="text-subject"><!--Content of the subjects-->
        קישורים של HTML נקראים HyperLinks<br>
        הם מאפשרים למשתמש לנוע מדף אינטרנט אחד לדף אינטרנט אחר.<br>
        הם מאוד שימושיים ונמצאים בכל אתר אינטרנט קיים.<br>
            </p>
        <div class="info-message-subject message-yellow"> <!--YELLOW-->
           <span class="message-icon"><i class="fa fa-exclamation-circle"></i></span>
           <span class="message-text">
             קישורים לא חייבים להיות מילה או משפט. הם יכולים להיות גם תמונה, אייקון, ואלמנטים שונים.
             </span>
       </div>
        <!--*************************
                 SUBJECT 2
        ****************************-->
       <h2 class="title-subject">&lt;a&gt;</h2><!--Heading of the subject-->
		<p class="text-subject"><!--Content of the subjects-->
      קישורים בHTML מוגדרים באמצעות תגית <b>&lt;a&gt;</b>
            </p>
        <div class="codeContainer"><!--CODEBOX-->
       <h4 class="title-example-code">התחביר להגדרת קישור:</h4><!--Code Heading-->
       <span class="codeBlock"> <!--Opening Code Example-->
        <span class="code html">
         <b>&lt;a</b> <span class="code-extra">href</span>="URL"&gt;קישור לחץ כאן&lt;/a&gt;
            </span>
        </span>
        </div> <!--Close CODEBOX-->
        <h2 class="title-subject">href המאפיין</h2><!--Heading of the subject-->
        <p class="text-subject"><!--Content of the subjects-->
        <b>href</b> - זה מאפיין של תגית ה <b>&lt;a&gt;</b> והוא מציין את כתובת היעד של הקישור<br>
        הטקסט שנעטף בתוך תגית ה <b>&lt;a&gt;</b>  יהפך לקישור.
            </p>
       <!--*************************
                 SUBJECT 3
        ****************************-->
       <h2 class="title-subject">כתובת שלמה וכתובת יחסית</h2><!--Heading of the subject-->
		<p class="text-subject"><!--Content of the subjects-->
        ישנם שני סוגים של כתובות:
            </p>
           <ol class="list-subject">
	        <li class="list-subject-items"><span class="items-firstWord red">Absolute</span> -
             ניתוב / כתובת מלאה המצביעה על קובץ היעד.</li>
            <li class="list-subject-items"><span class="items-firstWord blue">Relative</span>
            יעד שקשור ביחס לאתר הנוכחי, כתובת מקומית בלי הכתובת המלאה (...http://www)</li>
	    </ol>
        <!--*************************
                 SUBJECT 4
        ****************************-->
        <h2 class="title-subject">target המאפיין</h2><!--Heading of the subject-->
		<p class="text-subject"><!--Content of the subjects-->
        המאפיין target מציין כיצד לפתוח את הקישור.<br>
           ישנם שני ערכים עיקריים למאפין הtarget:
            </p>
           <ol class="list-subject">
	        <li class="list-subject-items">
               <span class="items-firstWord darkBlue">blank_</span> -
                פותח את הדף בחלון חדש או כרטיסיה חדשה
            </li>
            <li class="list-subject-items">
               <span class="items-firstWord darkBlue">top_</span> -
                פותח את הדף מידי באותו חלון.
            </li>
	    </ol>
       <span class="codeBlock"> <!--Opening Code Example-->
        <span class="code html">
            <b>&lt;a</b> href="http://www.echo.com" <span class="code-extra green">target</span>="<span class="code-extra darkBlue">_blank</span>"&gt;דף הבית&lt;/a&gt;
            </span>
        </span>

        <!--*************************
                 SUBJECT Sujest
        ****************************-->
           <hr>
            <h2 class="title-subject"> מדריכים מומלצים </h2>
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
