<?php include '../../../includes/overall/header.php'; ?>
<!--<div class="MainFlexBox"> ##The Main FlexBox in the header include file.-->
	<!--<main class="mainContainer"> ##The Main Container in the header include file.-->
				<?php include '../../../includes/pages/courses/navigation_topics_html.php'; ?>
				<section class="tutorial-container">
		<!--*************************
                 SUBJECT 1
        ****************************-->
        <h1 class="title-topic">כותרות לכל ראש וראש לכל כותרת</h1><!--Title of the topic-->
        <h2 class="title-subject">&lt;h1-h6&gt;</h2><!--Heading of the subject-->
		<p class="text-subject"><!--Content of the subjects-->
          ישנם שישה רמות בכותרות HTML, אשר מדורגים לפי רמת החשיבות של הכותרת עצמה.<br>
        &lt;h1&gt; רמת חשיבות גבוהה <br>&lt;h6&gt; רמת חשיבות נמוכה
            </p>
       <div class="codeContainer"><!--CODEBOX-->
       <h4 class="title-example-code">דוגמא לתגיות הכותרת:</h4><!--Code Heading-->
       <span class="codeBlock"> <!--Opening Code Example-->
        <span class="code html">
       &lt;html&gt;<br>&emsp;&lt;head&gt;<br>&lt;/head&gt;<br>
            &lt;body&gt;<br>
    &emsp;&emsp;<b>&lt;h1&gt;</b> כותרת 1/6 <b>&lt;/h1&gt;</b><br>
    &emsp;&emsp;<b>&lt;h2&gt;</b> כותרת 2/6 <b>&lt;/h2&gt;</b><br>
    &emsp;&emsp;<b>&lt;h3&gt;</b> כותרת 3/6 <b>&lt;/h3&gt;</b><br>
    &emsp;&emsp;<b>&lt;h4&gt;</b> כותרת 4/6 <b>&lt;/h4&gt;</b><br>
    &emsp;&emsp;<b>&lt;h5&gt;</b> כותרת 5/6 <b>&lt;/h5&gt;</b><br>
    &emsp;&emsp;<b>&lt;h6&gt;</b> כותרת 6/6 <b>&lt;/h6&gt;</b><br>
            &emsp;&lt;/body&gt;<br>&lt;/html&gt;
            </span>
        </span>
        </div> <!--Close CODEBOX-->
        <!--*************************
                 SUBJECT 2
        ****************************-->
        <h2 class="title-subject">החשיבות של כותרות</h2>
		<p class="text-subject">
         מנועי חיפוש כמו גוגל משתמשים בכותרות כמילות מפתח למבנה ולתוכן של דפי האינטרנט שלך.<br>
           ככה משתמשים מוצאים את דפי האתר שלך דרך גוגל.
            </p>
        <div class="info-message-subject message-red"> <!--RED-->
           <span class="message-icon"><i class="fa fa-minus-circle"></i></span>
           <span class="message-text">
             תשתמש בתגיות האלו לכותרות בלבד, ולא בשביל לעשות מלל גדול או בולט.

             </span>
       </div>
       <!--*************************
                 SUBJECT 3
        ****************************-->
        <h2 class="title-subject">&lt;title&gt;</h2>
		<p class="text-subject">
          טוב תגית ה &lt;title&gt; היא לא ממש כותרת<br>
           באמצעותה אתה יכול לשנות ולקבוע את הכותרת שיש על הכרטיסיה או על החלון של הדפדפן שלך.
            </p>
       <span class="codeBlock"> <!--Opening Code Example-->
       <span class="code html">
       &lt;head&gt;<br>
       <b>&lt;title&gt;</b> www.ECHO.com <b>&lt;/title&gt;</b><br>
       &lt;/html&gt;
            </span>
        </span>
        <!--*************************
                 SUBJECT 4
        ****************************-->
        <h2 class="title-subject">&lt;/ hr&gt;</h2>
		<p class="text-subject">
         בכדי ליצור קו מאוזן נשתמש בתגית ה &lt;/ hr&gt;.<br>
         תפקידו בעיקר כחוצץ, להפריד תוכן בדף.
         </p>
       <span class="codeBlock"> <!--Opening Code Example-->
       <span class="code html">
        &emsp;&emsp;&lt;h1&gt; כותרת 1/6 &lt;/h1&gt;<br>
        <b>&lt;hr /&gt;</b><br>
        &emsp;&emsp;&lt;h2&gt; כותרת 2/6 &lt;/h2&gt;<br>
            </span>
        </span>
        <div class="info-message-subject message-yellow"> <!--Yellow-->
           <span class="message-icon"><i class="fa fa-exclamation-circle"></i></span>
           <span class="message-text">
            שימו לב שאין צורך לסגור את התגית עם תגית נוספת, היא נחשבת לתגית בודדת.
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
