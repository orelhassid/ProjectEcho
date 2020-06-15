<?php include '../../../includes/overall/header.php'; ?>
<!--<div class="MainFlexBox"> ##The Main FlexBox in the header include file.-->
	<!--<main class="mainContainer"> ##The Main Container in the header include file.-->
  <?php include '../../../includes/pages/courses/navigation_topics_html.php'; ?>
  <section class="tutorial-container">
		<!--*************************
                 SUBJECT 1
        ****************************-->
        <h1 class="title-topic">טפסים - Forms</h1><!--Title of the topic-->
        <h2 class="title-subject">טפסים ב HTML</h2><!--Heading of the subject-->
		<p class="text-subject"><!--Content of the subjects-->
         טפסים משמשים בשביל לאסוף מידע מהמשתמש.<br>
         טפסים נמצאים בכל מקום באינטרנט שיש בו תיבה שאתה יכול להכניס בו קלט בכל צורה שהיא.<br>
            </p>
        <!--*************************
                 SUBJECT 2
        ****************************-->
        <h2 class="title-subject">אלמנט ה &lt;form&gt;</h2>
		<p class="text-subject">
        טופס בHTML מוגדר באמצעות תגית ה &lt;form&gt;.<br>

            </p>
    <div class="codeContainer"><!--CODEBOX-->
       <h4 class="title-example-code"></h4>

      <span class="codeBlock">
         <span class="code html">
            <span class="tooltipCode" data-toggle="tooltip" title="מגדירה טופס">
            <span class="code-tag">&lt;form&gt;</span>
             </span><!--Close Tooltip--><br>...<br>
             <span class="code-tag">&lt;/form&gt;</span>
         </span>
      </span>
    </div> <!--Close CODEBOX-->

       <!--*************************
                 SUBJECT 3
        ****************************-->
    <h2 class="title-subject">&lt;input&gt;</h2>
		<p class="text-subject">
         לאלמנט ה &lt;form&gt; יש אלמנטים המרכיבים אותו.<br>
         האלמנט &lt;input&gt; הוא מה שנותן למשתמש את האפשרות להכניס נתונים לטופס<br>
         הוא האלמנט הכי חשוב והוא יכול להיות מוצג בכמה דרכים, בהתאם לערך המאפיין <b>Type</b> שלו:
            </p>
      <div class="codeContainer"><!--CODEBOX-->
       <h4 class="title-example-code"></h4>

      <span class="codeBlock">
         <span class="code html">
            <span class="tooltipCode" data-toggle="tooltip" title="מגדירה טופס">
            <span class="code-tag">&lt;form&gt;</span>
             </span><!--Close Tooltip--><br>&nbsp;
             <span class="tooltipCode" data-toggle="tooltip" title="מגדיר שדה קלט">
            <span class="code-tag">&lt;input</span></span><!--Close Tooltip-->
            <span class="code-attribute">type</span>
            <span class="code-value">"text"</span>
            <span class="code-tag">/&gt;</span><br>&nbsp;
            <span class="code-tag">&lt;input</span>
            <span class="code-attribute">type</span>
            <span class="code-value">"password"</span>
            <span class="code-tag">/&gt;</span><br>&nbsp;
            <span class="code-tag">&lt;input</span>
            <span class="code-attribute">type</span>
            <span class="code-value">"radio"</span>
            <span class="code-tag">/&gt;</span><br>&nbsp;
            <span class="code-tag">&lt;button</span>
            <span class="code-attribute">type</span>
            <span class="code-value">"submit"</span>
            <span class="code-tag">/&gt;</span><br>
             <span class="code-tag">&lt;/form&gt;</span>
         </span>
      </span>
    </div> <!--Close CODEBOX-->
       <ul class="list-subject">
	        <li class="list-subject-items"><b>Text</b> -
	        מגדירה שורה אחת של שדה קלט.
	        </li>
	        <li class="list-subject-items"><b>password</b> -
	        כמו ה text רק שהקלט בפנים יהיה מוסתר כנקודות שחורות.
	        </li>
	        <li class="list-subject-items"><b>radio</b> -
	        נותן למשתשמ לבחור רק אפשרות אחת מבין כמה אפשרויות.
	        </li>
	        <li class="list-subject-items"><b>submit</b> -
	        זה מגדיר את הכפתור שישלח את כל המנתונים לשרת.
	        </li>
        </ul>
        <div class="info-message-subject message-yellow"> <!--Yellow-->
           <span class="message-icon"><i class="fa fa-exclamation-circle"></i></span>
           <span class="message-text">
               אתם תלמדו יותר לעומק על האלמנטים האלו בפרק הבא
           </span>
       </div>

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

     </section><!--necessary-->
        <!--*************************
                 SUBJECT END
        ****************************-->
			<?php include '../../../includes/overall/footer.php'; ?>
