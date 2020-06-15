<?php include '../../../includes/overall/header.php'; ?>
<!--<div class="MainFlexBox"> ##The Main FlexBox in the header include file.-->
	<!--<main class="mainContainer"> ##The Main Container in the header include file.-->
				<?php include '../../../includes/pages/courses/navigation_topics_html.php'; ?>
				<section class="tutorial-container">
		<!--*************************
                 SUBJECT 1
        ****************************-->
        <h1 class="title-topic">רשימות - Lists</h1><!--Title of the topic-->
        <h2 class="title-subject">רשימות ב HTML</h2><!--Heading of the subject-->
		<p class="text-subject"><!--Content of the subjects-->
         רשימות מאפשרות לך ליצור רשימה של פריטים אחד אחרי השני.<br>
           האלמנט הזה מאוד שימושי ויש בו כמה טריקים.<br><br>
           ישנם שני סוגים של רשימות:
            </p>
        <ul class="list-subject">
	        <li class="list-subject-items">
                <b>רשימה לא מסודרת - Unordered List</b>
	        </li>
            <li class="list-subject-items">
                <b>רשימה מסודרת - Ordered List</b>
	        </li>
	    </ul>
       <p class="text-subject">
       בכל רשימה יש פריטים, ואותם מגדירים את התגית
       <b>&lt;li&gt;</b>
        -י List Items - רשימת פריטים.

            </p>
        <!--*************************
                 SUBJECT 2
        ****************************-->
        <h2 class="title-subject">רשימה לא מסודרת</h2>
		<p class="text-subject">
          רשימה זו מציגה את הפריטים בצורה לא מסודרת<br>
           הכוונה היא שהיא תסדר אותם עם נקודות (ברירת מחדל) ולא ממוספרים.
            </p>
        <div class="codeContainer"><!--CODEBOX-->
       <span class="codeBlock"> <!--Opening Code Example-->
        <span class="code html">
           <span class="tooltipCode" data-toggle="tooltip" title="מגדירה רשימה לא מסודרת">
            <span class="code-tag">&lt;ul&gt;</span></span><br>
            <span class="tooltipCode" data-toggle="tooltip" title="מגדירה פריט מהרשימה">
&nbsp;&nbsp;<span class="code-tag">&lt;li&gt;</span></span>
           פריט אחד
           <span class="code-tag">&lt;/li&gt;</span><br>
&nbsp;&nbsp;<span class="code-tag">&lt;li&gt;</span>
           פריט שני
           <span class="code-tag">&lt;/li&gt;</span><br>
&nbsp;&nbsp;<span class="code-tag">&lt;li&gt;</span>
           פריט שלישי
           <span class="code-tag">&lt;/li&gt;</span><br>
           <span class="code-tag">&lt;/ul&gt;</span>
            </span>
        </span>
        </div> <!--Close CODEBOX-->
       <!--*************************
                 SUBJECT 3
        ****************************-->
        <h2 class="title-subject">רשימה מסודרת</h2>
		<p class="text-subject">
          רשימה זו מציגה את הפריטים בצורה מסודרת<br>
          הכוונה שהיא תסדר אותם ממוספרים אחד אחרי השני.
            </p>
        <div class="codeContainer"><!--CODEBOX-->
       <span class="codeBlock"> <!--Opening Code Example-->
        <span class="code html">
           <span class="tooltipCode" data-toggle="tooltip" title="מגדירה רשימה מסודרת">
            <span class="code-tag">&lt;ol&gt;</span></span><br>
&nbsp;&nbsp;<span class="code-tag">&lt;li&gt;</span>
           פריט ראשון
           <span class="code-tag">&lt;/li&gt;</span><br>
&nbsp;&nbsp;<span class="code-tag">&lt;li&gt;</span>
           פריט שני
           <span class="code-tag">&lt;/li&gt;</span><br>
&nbsp;&nbsp;<span class="code-tag">&lt;li&gt;</span>
           פריט שלישי
           <span class="code-tag">&lt;/li&gt;</span><br>
           <span class="code-tag">&lt;/ol&gt;</span>
            </span>
        </span>
        </div> <!--Close CODEBOX-->

        <!--*************************
                 SUBJECT 4
        ****************************-->
        <h2 class="title-subject">רשימה בתוך רשימה</h2>
		<p class="text-subject">
          ניתן להכניס רשימת פריטים בתוך רשימה אחרת.<br>
           וזה עובד בצורה הזאת:
            </p>
        <div class="codeContainer"><!--CODEBOX-->
       <span class="codeBlock"> <!--Opening Code Example-->
        <span class="code html">
           <span class="tooltipCode" data-toggle="tooltip" title="מגדירה רשימה מסודרת">
            <span class="code-tag">&lt;ul&gt;</span></span>איך מכינים<br>
&emsp;<span class="code-tag">&lt;li&gt;</span>קפה הפוך<br>
<span class="tooltipCode" data-toggle="tooltip" title="מגדירה רשימה לא מסודרת">
&emsp;&emsp;&emsp;<span class="code-tag">&lt;ol&gt;</span></span><br>
&emsp;&emsp;&emsp;&emsp;&emsp;<span class="code-tag">&lt;li&gt;</span>
סוכר
<span class="code-tag">&lt;li&gt;</span><br>
&emsp;&emsp;&emsp;&emsp;&emsp;<span class="code-tag">&lt;li&gt;</span>
חלב
<span class="code-tag">&lt;li&gt;</span><br>
&emsp;&emsp;&emsp;<span class="code-tag">&lt;/ol&gt;</span><br>
&emsp;<span class="code-tag">&lt;/li&gt;</span><br>

&emsp;<span class="code-tag">&lt;li&gt;</span>תה<br>
&emsp;&emsp;&emsp;<span class="code-tag">&lt;ol&gt;</span><br>
&emsp;&emsp;&emsp;&emsp;&emsp;<span class="code-tag">&lt;li&gt;</span>
תמצית
<span class="code-tag">&lt;li&gt;</span><br>
&emsp;&emsp;&emsp;&emsp;&emsp;<span class="code-tag">&lt;li&gt;</span>
דבש
<span class="code-tag">&lt;li&gt;</span><br>
&emsp;&emsp;&emsp;<span class="code-tag">&lt;/ol&gt;</span><br>
&emsp;<span class="code-tag">&lt;/li&gt;</span><br>
<span class="code-tag">&lt;/ul&gt;</span>
            </span>
        </span>
        </div> <!--Close CODEBOX-->
        <p class="text-subject">
          הרשימה הלא מסודרת בתוך אחת מהפרטים של הרשימה הכן מסודרת וזה יוצר רשימה בתוך רשימה.
            </p>
      <!--*************************
                 SUBJECT 4
        ****************************-->

        <!--*************************
                 SUBJECT Sujest
        ****************************-->
           <hr>
            <h3 class="title-subject"> מדריכים מומלצים </h3>
            <ul class="list-subject">
	        <li class="list-subject-items"><a href="#"> מבוא ל CSS </a></li>
           <li class="list-subject-items"><a href="#"> מבוא ל JAVASCRIPT </a></li>
            </ul>
<div id="btn-container-next-prev">
    <a href="#" id="btn-next" onclick="changePage(+1)"><i class="fa fa-hand-o-right"></i> הבא </a>
    <a href="#" id="btn-prev" onclick="changePage(-1)"> הקודם <i class="fa fa-hand-o-left"></i></a>
       </div>

     </section>
             <!--*************************
                      SUBJECT END
             ****************************-->

     <?php include '../../../includes/overall/footer.php'; ?>
