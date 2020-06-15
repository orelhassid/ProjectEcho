<?php include '../../../includes/overall/header.php'; ?>
<!--<div class="MainFlexBox"> ##The Main FlexBox in the header include file.-->
	<!--<main class="mainContainer"> ##The Main Container in the header include file.-->
				<?php include '../../../includes/pages/courses/navigation_topics_html.php'; ?>
				<section class="tutorial-container">
		<!--*************************
                 SUBJECT 1
        ****************************-->
        <h1 class="title-topic">תוכן מילולי</h1><!--Title of the topic-->
        <h2 class="title-subject">&lt;p&gt; - Paragraph</h2><!--Heading of the subject-->
		<p class="text-subject"><!--Content of the subjects-->
        בכדי להגדיר פסקה נשתמש באלמנט &lt;p&gt;<br>
        הדפדפן אוטומטי יעשה שורה חדשה בין פסקה לפסקה.
            </p>
        <span class="codeBlock"> <!--Opening Code Example-->
        <span class="code html">
        &lt;html&gt;<br>&emsp;
        &lt;head&gt;<br>
        &lt;/head&gt;<br>
        &lt;body&gt;<br>&emsp;
        <b>&lt;p&gt;</b>
        לא לשכוח לסגור את הפסקה זה גורם לבעיות לדפדפן
        <b>&lt;/p&gt;</b><br>&emsp;
        <b>&lt;p&gt;</b>
        פסקה חדשה יורדת שורה אוטומטית
        <b>&lt;/p&gt;</b><br>

        &lt;/body&gt;<br>
        &lt;/html&gt;
            </span>
        </span>
        <!--*************************
                 SUBJECT 2
        ****************************-->
        <h2 class="title-subject">&lt;br&gt; - Line-Breaks</h2><!--Heading of the subject-->
		<p class="text-subject"><!--Content of the subjects-->
        מה אם אתה לא רוצה לפתוח פסקה חדשה כדי לרדת שורה?<br>
           התגית <b>&lt;br&gt;</b> מבצעת ירידת שורה.
            </p>
        <span class="codeBlock"> <!--Opening Code Example-->
        <span class="code html">
        &lt;p&gt;הפסקה הזאת
     <b>&lt;br&gt;</b>תרד שורה
     <b>&lt;br&gt;</b>פעמיים
        &lt;/p&gt;
            </span>
        </span>
       <!--*************************
                 SUBJECT 3
        ****************************-->
        <h2 class="title-subject">&lt;pre&gt; - Preformatted</h2><!--Heading of the subject-->
		<p class="text-subject"><!--Content of the subjects-->
        האלמנט <b>&lt;pre&gt;</b> מגדיר מלל מוגדר מראש.<br>
        הכוונה היא שהאלמנט הזה תומך ברווחים ושבירת שורות<br>
           לעומת אלמנט הפסקה שלא תומך.
            </p>
        <span class="codeBlock"> <!--Opening Code Example-->
        <span class="code html">
     <b>&lt;pre&gt;</b>
        המלל שבין האלמנט הזה ירונדר לפי הרווחים&emsp; ושבירת השורות<br> שכתוב בתכנית
     <br><b>&lt;/pre&gt;</b>
            </span>
        </span>
        <!--*************************
                 SUBJECT 4
        ****************************-->

        <!--*************************
                 SUBJECT Sujest
        ****************************-->
           <hr>
            <h2 class="title-subject"> מדריכים מומלצים </h2>
            <ul class="list-subject">
	        <li class="list-subject-items"><a href="#"> מבוא ל CSS </a></li>
           <li class="list-subject-items"><a href="#"> מבוא ל JAVASCRIPT </a></li>
            </ul>
<div id="btn-container-next-prev">
    <a href="#" id="btn-next" onclick="changePage(+1)"><i class="fa fa-hand-o-right"></i> הבא </a>
    <a href="#" id="btn-prev" onclick="changePage(-1)"> הקודם <i class="fa fa-hand-o-left"></i></a>
       </div>

     </section><!--necessary-->
             <!--*************************
                   -   SUBJECT END
             ****************************-->

     			<?php include '../../../includes/overall/footer.php'; ?>
