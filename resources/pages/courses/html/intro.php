<?php include '../../../includes/overall/header.php'; ?>
<!--<div class="MainFlexBox"> ##The Main FlexBox in the header include file.-->
	<!--<main class="mainContainer"> ##The Main Container in the header include file.-->
				<?php include '../../../includes/pages/courses/navigation_topics_html.php'; ?>
				<section class="tutorial-container">

		<h1 class="title-topic">שלום וברוכים הבאים למדריך המלא בשפת HTML</h1><!--Title of the topic-->
		<h2 class="title-subject">מה זה HTML?</h2><!--Heading of the subject-->
		<p class="text-subject"><!--Content of the subjects-->
		HTML זה ראשי תיבות של
       <span class="text-extra-subject">H</span>yper
       <span class="text-extra-subject">T</span>ext
       <span class="text-extra-subject">M</span>arkup
       <span class="text-extra-subject">L</span>anguge
       <br>
        בשונה משפות סקריפטים או שפות תכנות שמשתמשות בסקריפטים בשביל לבצע פעולות, שפת תגיות משתמשת בתגיות כדי לבצע פעולות.
		</p>
       <div class="codeContainer"><!--CODEBOX-->
       <h4 class="title-example-code">דוגמא לתגית HTML:</h4><!--Code Heading-->
       <span class="codeBlock">
       <span class="code html"><!--Write The Tooltip Element below[use &lt; &gt;]-->
       <span class="tooltipCode" data-toggle="tooltip" title="מגדירה פסקה">&lt;p&gt;</span><!--Write The Code Himself Below-->
        I'm a paragraph &lt;/p&gt;
            </span>
        </span>
             <div class="code-description"><!--Write The Code Description below-->
                    <p class="description-text">
                        הטקסט בין התגיות ירונדר לדפדפן כפסקה
                    </p>
		        </div>
		      <br>  <a class="codeRunBtn" target="_blank"> נסה בעצמך </a>
        </div> <!--Close CODEBOX-->
        <!--*************************
                 SUBJECT 2
        ****************************-->
      <h2 class="title-subject">המבנה של דף האינטרנט</h2><!--Heading of the subject-->
		<p class="text-subject"><!--Content of the subjects-->
		בכדי לבנות אתר אינטרנט כיום, לשפת HTML מתווספות שפות נוספות ולכל אחת יש תפקיד משלה
      </p>
	    <ol class="list-subject">
	        <li class="list-subject-items"><span class="items-firstWord red">HTML</span> - אחראית על תוכן האתר</li>
            <li class="list-subject-items"><span class="items-firstWord blue">CSS</span> - אחראית על עיצוב האתר</li>
            <li class="list-subject-items"><span class="items-firstWord yellow">JAVASCRIPT</span> - אחראית על ההתנהגות של האתר</li>
            <li class="list-subject-items"><span class="items-firstWord darkBlue">PHP</span> - אחראית על התוכן הדינמי באתר ובסיסי נתונים </li>
	    </ol>
       <!--*************************
                 SUBJECT 3
        ****************************-->
      <h2 class="title-subject">דפדפני אינטרנט</h2><!--Heading of the subject-->
		<p class="text-subject"><!--Content of the subjects-->
		התכלית של דפדפן אינטרנט (Chrome, IE, Firefox, Safari) הוא לקרוא מסמכי HTML ולהציג אותם.<br>
        הדפדפן לא מציג את התגיות, אבל משתמש בהם כדי לקבוע איך להציג את המסמך.
      </p>
       <h4 class="title-example">דוגמא</h4><!--Example Heading-->
       <div class="image-subject">
    <img class="image-subject-object" src="../../../sourceimages/examples/example_browser_01.png">
       </div>
        <!--*************************
                 SUBJECT 4
        ****************************-->
      <h2 class="title-subject">גרסאות לשפת HTML</h2><!--Heading of the subject-->
      <p class="text-subject">

      </p>
  <table class="table-subject">
  <thead>
    <tr>
      <th>גרסה</th>
      <th>שנה</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>HTML5</td>
      <td>2014</td>
    </tr>
    <tr>
      <td>XHTML</td>
      <td>2000</td>
    </tr>
    <tr>
      <td>HTML 4.0</td>
      <td>1999</td>
    </tr>
    <tr>
      <td>HTML 3.2</td>
      <td>1997</td>
    </tr>
    <tr>
      <td>HTML 2.0</td>
      <td>1995</td>
    </tr>
    <tr>
      <td>HTML</td>
      <td>1991</td>
    </tr>
  </tbody>
</table>
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
</section>
        <!--*************************
                 SUBJECT END
        ****************************-->

<?php include '../../../includes/overall/footer.php'; ?>
