<?php include '../../../includes/overall/header.php'; ?>
<!--<div class="MainFlexBox"> ##The Main FlexBox in the header include file.-->
	<!--<main class="mainContainer"> ##The Main Container in the header include file.-->
				<?php include '../../../includes/pages/courses/navigation_topics_html.php'; ?>
				<section class="tutorial-container">
		<!--*************************
                 SUBJECT 1
        ****************************-->
        <h1 class="title-topic">תגיות עיקריות - &lt;html&gt; , &lt;head&gt; , &lt;body&gt;</h1><!--Title of the topic-->
        <h2 class="title-subject">אז מה הכוונה בעיקריות?</h2><!--Heading of the subject-->
		<p class="text-subject"><!--Content of the subjects-->
          שלושת התגיות האלו הן יסודות דף האינטרנט והן נדרשות בכל קובץ HTML.<br>
          לכל אחת יש תפקיד משלה:
            </p>
        <!--*************************
                 SUBJECT 2
        ****************************-->
        <h2 class="title-subject">&lt;html&gt;</h2>
        <p class="text-subject">
          התגית הזאת קיימת בכל הגרסאות והיא עוטפת את כל מסמך ה HTML שלנו.
            </p>
        <div class="codeContainer"><!--CODEBOX-->
       <h4 class="title-example-code">דוגמא לתגית HTML:</h4><!--Code Heading-->
       <span class="codeBlock"> <!--Opening Code Example-->
       <span class="code html">
       <b>&lt;html&gt;</b> <br>...<br> <b>&lt;/html&gt;</b>
            </span>
        </span>
            </div>
       <!--*************************
                 SUBJECT 3
        ****************************-->
        <h2 class="title-subject">&lt;head&gt;</h2>
        <p class="text-subject">
         התגית הזאת מגיעה מיד אחרי פתיחת תגית ה &lt;html&gt;<br>
        היא עוטפת כל מיני נתונים שעוזרים לדף לפעול, אני אוהב לקרוא לזה המאחורי הקלעים של האתר שלנו.
            </p>
        <span class="codeBlock"> <!--Opening Code Example-->
        <span class="code html">
       &lt;html&gt; <br> <b>&lt;head&gt;</b> <br>...<br> <b>&lt;</b>/head&gt;<br> &lt;/html&gt;
            </span>
        </span>
        <!--*************************
                 SUBJECT 4
        ****************************-->
        <h2 class="title-subject">&lt;body&gt;</h2>
        <p class="text-subject">
        התגית הזאת מגיעה מיד אחרי סגירת תגית ה &lt;head&gt;<br>
        היא זאת שבעצם עוטפת את כל תוכן האתר שבסופו של דבר מרונדר לדפדפן, <br>
           הוא זה שנראה לעין לעומת תוכנות של תגית ה &lt;head&gt;
            </p>
        <span class="codeBlock"> <!--Opening Code Example-->
        <span class="code html">
       &lt;html&gt;<br>&emsp;&lt;head&gt;<br>&lt;/head&gt;<br>
            <b>&lt;body&gt;</b><br>...<br>&emsp;<b>&lt;/body&gt;</b><br>&lt;/html&gt;
            </span>
        </span>
        <div class="info-message-subject message-yellow"> <!--RED-->
           <span class="message-icon"><i class="fa fa-exclamation-circle"></i></span>
           <span class="message-text">
               מומלץ לתת 4 רווחים ובכך לסדר את התכנית שתהיה קלה יותר לקריאה.
           </span>
       </div>
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
