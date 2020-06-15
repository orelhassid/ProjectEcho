<?php include '../../../includes/overall/header.php'; ?>
<!--<div class="MainFlexBox"> ##The Main FlexBox in the header include file.-->
	<!--<main class="mainContainer"> ##The Main Container in the header include file.-->
				<?php include '../../../includes/pages/courses/navigation_topics_html.php'; ?>
				<section class="tutorial-container">
		<!--*************************
                 SUBJECT 1
        ****************************-->
        <h1 class="title-topic">תמונות - images</h1><!--Title of the topic-->
        <h2 class="title-subject">תמונות ב HTML</h2><!--Heading of the subject-->
		<p class="text-subject"><!--Content of the subjects-->
         תמונות מאפשרות למשתמש חוויה יותר מעניינת מאשר סתם תוכן<br>
         לרדנר תמונה על הדף שלנו זה מאוד פשוט כל מה שצריך זה לכתוב את תגית ה
           &lt;img&gt; ואת ה src
            </p>

        <!--*************************
                 SUBJECT 2
        ****************************-->
        <h2 class="title-subject">התחביר</h2>
        <div class="codeContainer"><!--CODEBOX-->
       <span class="codeBlock"> <!--Opening Code Example-->
        <span class="code html">
          <span class="tooltipCode" data-toggle="tooltip" title="מגדירה תמונה">
           <span class="code-tag">&lt;img</span></span>
           <span class="code-attribute">src</span>
           <span class="code-value">"URL"</span>
           <span class="code-tag">/&gt;</span>
            </span>
        </span>
        </div> <!--Close CODEBOX-->
       <!--*************************
                 SUBJECT 3
        ****************************-->
        <h2 class="title-subject">המאפיין src</h2>
		<p class="text-subject">
           <b>src</b> מציין את היעד אל הקובץ של התמונה.<br>
           זה יכול להיות יעד מקומי בתוך המחשב שאתם יכולים לשלוף, או יעד/תמונה מכתובת חיצונית.
            </p>
        <h2 class="title-subject">המאפיין alt</h2>
		<p class="text-subject">
        <b>alt</b> מספק מלל חילופי לתמונה במקרה של שגיאה.<br>
           השגיאה יכולה לנבוע מחיבור אינטרנט איטי, כתובת יעד שגויה וכדומה.<br>
           אם הדפדפן לא יכול להציג את התמונה הוא יציג לחילופין את הערך שבמאפיין alt.
            </p>
        <!--*************************
                 SUBJECT 4
        ****************************-->
        <h2 class="title-subject">המאפיין style</h2>
		<p class="text-subject">
       מה אם תרצו לשנות את הגודל של התמונה?<br>
           עם המאפיין <b>style</b> תוכלו לשלוט על הסגנון של האלמנט.<br>
            </p>
        <div class="codeContainer"><!--CODEBOX-->
        <span class="codeBlock"> <!--Opening Code Example-->
        <span class="code html">
             <span class="code-tag">&lt;img</span>
             <span class="code-attribute">src</span>
             <span class="code-value">"home.jpg"</span>
             <span class="code-attribute">alt</span>
             <span class="code-value">"home"</span><br>
             <span class="code-attribute">style</span>
             <span class="code-value">"width:500px;height:500px;"</span>
             <span class="code-tag">/&gt;</span>
            </span>
        </span>
        </div> <!--Close CODEBOX-->
        <div class="info-message-subject message-yellow"> <!--Yellow-->
           <span class="message-icon"><i class="fa fa-exclamation-circle"></i></span>
           <span class="message-text">
               המאפיין <b>style</b> יפורט בהמשך, בינתיים רק תזכרו שקיים דבר כזה.
           </span>
       </div>
          <div class="info-message-subject message-red"> <!--RED-->
           <span class="message-icon"><i class="fa fa-minus-circle"></i></span>
           <span class="message-text">
               תמיד תתנו גודל ורוחב לתמונה אחרת הדפדפן יבחר אוטומטית בגודל המקורי של התמונה
           </span>
       </div>
        <!--*************************
                 SUBJECT 5
        ****************************-->
        <h2 class="title-subject">תמונה שהיא קישור</h2>
		<p class="text-subject">
         בכדי ליצור תמונה שהיא קישור פשוט תעטפו את תגית ה
         <b>&lt;img&gt;</b> עם תגית הקישור <b>&lt;a&gt;</b><br><br>
         זה הולך בצורה הזאת:
         </p>
         <div class="codeContainer"><!--CODEBOX-->
        <span class="codeBlock"> <!--Opening Code Example-->
        <span class="code html">
           <span class="tooltipCode" data-toggle="tooltip" title="מגדירה קישור">
            <span class="code-tag">&lt;a</span></span>
            <span class="code-attribute">href</span>
            <span class="code-value">"URL"&gt;</span><br>&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="code-tag">&lt;img</span>
            <span class="code-attribute">src</span>
            <span class="code-value">"URL"&gt;</span>
            <span class="code-attribute">alt</span>
            <span class="code-value">"" /&gt;</span><br>
            <span class="code-tag">&lt;/a&gt;</span>
            </span>
        </span>
        </div> <!--Close CODEBOX-->
        <!--*************************
                 SUBJECT 6
        ****************************-->
        <h2 class="title-subject">תמונה שהיא מפה</h2>
		<p class="text-subject">
         תמונת-מפה זו תמונה עם אזורים מסוימים שאפשר ללחוץ עלחהם<br>
         זה עובד יחד עם תגית מיוחדת בשם &lt;map&gt;,המאפיינים <b>name</b> ו- <b>usemap</b><br>
         תגית ה &lt;map&gt; מכילה מספר אזורים שהם תגיות &lt;area&gt; המגדירים את האזורים הניתנים ללחיצה בתמונת המפה.
         </p>
         <div class="codeContainer"><!--CODEBOX-->
        <span class="codeBlock"> <!--Opening Code Example-->
        <span class="code html">
            <span class="code-tag">&lt;img</span>
            <span class="code-attribute">src</span>
            <span class="code-value">"planets.gif"</span>
            <span class="code-attribute">alt</span>
            <span class="code-value">"Planets"</span>
            <span class="code-attribute">usemap</span>
            <span class="code-value">"#planetmap"</span><br>
            <span class="code-attribute">style</span>
            <span class="code-value">"width:145px;height:126px;"</span>
            <span class="code-tag">/&gt;</span><br>
            <span class="tooltipCode" data-toggle="tooltip" title="מגדירה תמונה מפה">
            <span class="code-tag">&lt;map</span></span>
            <span class="code-attribute">name</span>
            <span class="code-value">"planetmap"</span>
            <span class="code-tag">&gt;</span><br>
            <span class="code-tag">&lt;area</span>
            <span class="code-attribute">shape</span>
            <span class="code-value">"rect"</span>
            <span class="code-attribute">coords</span>
            <span class="code-value">"0,0,82,126"</span>
            <span class="code-attribute">alt</span>
            <span class="code-value">"Sun"</span>
            <span class="code-attribute">href</span>
            <span class="code-value">"sun.htm"</span>
            <span class="code-tag">&gt;</span><br>
            <span class="code-tag">&lt;area</span>
            <span class="code-attribute">shape</span>
            <span class="code-value">"circle"</span>
            <span class="code-attribute">coords</span>
            <span class="code-value">"90,58,3"</span>
            <span class="code-attribute">alt</span>
            <span class="code-value">"Mercury"</span>
            <span class="code-attribute">href</span>
            <span class="code-value">"mercur.htm"</span>
            <span class="code-tag">&gt;</span><br>
            <span class="code-tag">&lt;area</span>
            <span class="code-attribute">shape</span>
            <span class="code-value">"circle"</span>
            <span class="code-attribute">coords</span>
            <span class="code-value">"124,58,8"</span>
            <span class="code-attribute">alt</span>
            <span class="code-value">"Venus"</span>
            <span class="code-attribute">href</span>
            <span class="code-value">"venus.htm"</span>
            <span class="code-tag">&gt;</span><br>
            <span class="code-tag">&lt;/map&gt;</span>
            </span>
        </span>
        </div> <!--Close CODEBOX-->
        <!--*************************
                 SUBJECT 6
        ****************************-->
        <h2 class="title-subject">סוגי קבצים</h2>
        <p class="text-subject">
        הכוונה בסוגי קבצים זה הסיומת שיש לכל תמונה וזה מה שמגדיר את סוגה.<br>
           ניתן להשתמש בכמה סוגי קבצים ביניהם:
            </p>
        <ul class="list-subject">
	        <li class="list-subject-items"><b>JPEG</b> -
	        כאשר אתם רוצים פשוט תמונה באיכות.
	        </li>
	        <li class="list-subject-items"><b>PNG</b> -
	        סוג הקובץ הזה תומך בשקיפות לכן הוא טוב אם אתם רוצים לעשות מדבקה/סטיקר לדוגמא.
	        </li>
	        <li class="list-subject-items"><b>GIF</b> -
	        כולנו מכירים את ה gif שהוא מעניק לנו אנימציה בתור תמונה.
	        </li>
        </ul>
        <!--*************************
                 SUBJECT Sujest
        ****************************-->
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
