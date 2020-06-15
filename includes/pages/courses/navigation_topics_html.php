<!--#####################################
					HTML - Navigation TOPICS
#########################################-->
<link rel="stylesheet" href="<?=$path?>/css/theme_bright/scss/tutorials.css">

<nav class="nav-courses-intro-topics" id="nav-topics-html">
		<ul>
			<h6>בית HTML</h6>
    <li class="active" data-toggle="tooltip" title="INTRO"><a class="topics-link" href="intro.php">הקדמה</a></li>
    <li data-toggle="tooltip" title="BASIC"><a class="topics-link" href="basic.php">בסיס</a></li>
    <li data-toggle="tooltip" title="GET STARTED"><a class="topics-link" href="getstarted.php">איך מתחילים</a></li>
    <li data-toggle="tooltip" title="PRIMARY TAGS"><a class="topics-link" href="primaryTags.php">תגיות עיקריות </a></li>
    <li data-toggle="tooltip" title="HEADING"><a class="topics-link" href="heading.php">ראש</a></li>
    <li data-toggle="tooltip" title="PARAGRAPH"><a class="topics-link" href="paragraph.php">פסקה</a></li>
    <li data-toggle="tooltip" title="LINK"><a class="topics-link" href="link.php">קישור</a></li>
    <li data-toggle="tooltip" title="IMAGES"><a class="topics-link" href="images.php">תמונות</a></li>
    <li data-toggle="tooltip" title="LISTS"><a class="topics-link" href="lists.php">רשימות</a></li>
    <li data-toggle="tooltip" title="ATRIBUTES"><a class="topics-link" href="#">מאפיינים</a></li>
    <li data-toggle="tooltip" title="CONTAINERS"><a class="topics-link" href="#">מעטפת</a></li>
    <li data-toggle="tooltip" title="SELECTORS"><a class="topics-link" href="#">נבחרים</a></li>
    <li data-toggle="tooltip" title="FORMATTING"><a class="topics-link" href="#">תבנית</a></li>
    <li data-toggle="tooltip" title="COMMENTS"><a class="topics-link" href="#">הערות</a></li>
    <li data-toggle="tooltip" title="TABLES"><a class="topics-link" href="tables.php">טבלה</a></li>
    <li data-toggle="tooltip" title="IFRAMES"><a class="topics-link" href="iframes.php">מסגרת</a></li>
    <li data-toggle="tooltip" title="ENCODING"><a class="topics-link" href="#">קידוד</a></li>
    <li data-toggle="tooltip" title="HR"><a class="topics-link" href="#">HR</a></li>
    <li data-toggle="tooltip" title="BUTTON"><a class="topics-link" href="#">כפתור</a></li>
			<h6>טפסים HTML</h6>
    <li data-toggle="tooltip" title="FORM"><a class="topics-link" href="forms.php">טופס</a></li>
    <li data-toggle="tooltip" title="ELEMENTS"><a class="topics-link" href="#">רכיבים</a></li>
    <li data-toggle="tooltip" title="TYPES"><a class="topics-link" href="#">סוגי קלט </a></li>
    <li data-toggle="tooltip" title="ATTRIBUTES"><a class="topics-link" href="#">מאפייני קלט </a></li>
			<h6>HTML5</h6>
    <li data-toggle="tooltip" title="INTRO"><a class="topics-link" href="#">מבוא</a></li>
    <li data-toggle="tooltip" title="ELEMENTS"><a class="topics-link" href="#">רכיבים חדשים </a></li>
    <li data-toggle="tooltip" title="SEMANTIC"><a class="topics-link" href="#">דקדוק</a></li>
    <li data-toggle="tooltip" title="CANVAS"><a class="topics-link" href="#">בד</a></li>
		</ul>
	</nav>

  <script>
  // for (var check=0; check<topics_link.length;check++){
  //     topics_link[check].addEventListener('click', function (ev) {
  //     if (ev.target.classList.contains('whatever')) {
  //         ev.preventDefault();
  //     loadWithAjax(ev.target.href);
  //     }
  // });
  // }
	$(document).ready(function(){
	                $('[data-toggle="tooltip"]').tooltip({
	                    animation:true,
	                    placement:"top"
	                });
	            });

  var topics_link = document.getElementsByClassName('topics-link');
  var host_url = window.location.href;
      for (var check=0; check<topics_link.length;check++){
          var pattern = new RegExp(topics_link[check].href);
          topics_link[check].firstChild.classList.remove("active");
      if ( pattern.test(host_url)) {
          topics_link[check].firstChild.className += " active";
          break;
          }
      }
  </script>
	<script src="<?=$path?>/js/courses.js"></script>
