<nav class="nav-courses-intro-topics-3D">
	<div class="nav-ulContainer">	
        <ul>
			<h6>בית HTML</h6>
    <a class="topics-link" href="intro.php"><li class="active tooltip-element-hover">הקדמה<span class="tooltip-info">INTRO</span></li></a>
    <a class="topics-link" href="basic.php"><li class="tooltip-element-hover">בסיס<span class="tooltip-info">BASIC</span></li></a>
    <a class="topics-link" href="getstarted.php"><li class="tooltip-element-hover">איך מתחילים<span class="tooltip-info">GET STARTED</span></li></a>
    <a class="topics-link" href="primaryTags.php"><li class="tooltip-element-hover">תגיות עיקריות<span class="tooltip-info">PRIMARY TAGS</span></li></a>
    <a class="topics-link" href="heading.php"><li class="tooltip-element-hover">ראש<span class="tooltip-info">HEADING</span></li></a>
    <a class="topics-link" href="paragraph.php"><li class="tooltip-element-hover">פסקה<span class="tooltip-info">PARAGRAPH</span></li></a>
    <a class="topics-link" href="link.php"><li class="tooltip-element-hover">קישור<span class="tooltip-info">LINK</span></li></a>
    <a class="topics-link" href="images.php"><li class="tooltip-element-hover">תמונות<span class="tooltip-info">IMAGES</span></li></a>
    <a class="topics-link" href="lists.php"><li class="tooltip-element-hover">רשימות<span class="tooltip-info">LISTS</span></li></a>
    <a class="topics-link" href="#"><li class="tooltip-element-hover">מאפיינים<span class="tooltip-info">ATRIBUTES</span></li></a>
    <a class="topics-link" href="#"><li class="tooltip-element-hover">קולטים/מעטפת<span class="tooltip-info">CONTAINERS</span></li></a>
    <a class="topics-link" href="#"><li class="tooltip-element-hover">נבחרים<span class="tooltip-info">SELECTORS</span></li></a>
    <a class="topics-link" href="#"><li class="tooltip-element-hover">תבנית<span class="tooltip-info">FORMATTING</span></li></a>
    <a class="topics-link" href="#"><li class="tooltip-element-hover">הערות<span class="tooltip-info">COMMENTS</span></li></a>
    <a class="topics-link" href="tables.php"><li class="tooltip-element-hover">טבלה<span class="tooltip-info">TABLES</span></li></a>
    <a class="topics-link" href="iframes.php"><li class="tooltip-element-hover">מסגרת<span class="tooltip-info">IFRAMES</span></li></a>
    <a class="topics-link" href="#"><li class="tooltip-element-hover">קידוד<span class="tooltip-info">ENCODING</span></li></a>
    <a class="topics-link" href="#"><li class="tooltip-element-hover">HR<span class="tooltip-info">HR</span></li></a>
    <a class="topics-link" href="#"><li class="tooltip-element-hover">כפתור<span class="tooltip-info">BUTTON</span></li></a>
			<h6>טפסים HTML</h6>
    <a class="topics-link" href="forms.php"><li class="tooltip-element-hover">טופס<span class="tooltip-info">FORM</span></li></a>
    <a class="topics-link" href="#"><li class="tooltip-element-hover">רכיבים<span class="tooltip-info">ELEMENTS</span></li></a>
    <a class="topics-link" href="#"><li class="tooltip-element-hover">סוגי קלט<span class="tooltip-info">INPUT TYPES</span></li></a>
    <a class="topics-link" href="#"><li class="tooltip-element-hover">מאפייני קלט<span class="tooltip-info">INPUT ATTRIBUTES</span></li></a>
			<h6>HTML5</h6>
    <a class="topics-link" href="#"><li class="tooltip-element-hover">מבוא<span class="tooltip-info">INTRO</span></li></a>
    <a class="topics-link" href="#"><li class="tooltip-element-hover">רכיבים חדשים<span class="tooltip-info">NEW ELEMENTS</span></li></a>
    <a class="topics-link" href="#"><li class="tooltip-element-hover">דקדוק<span class="tooltip-info">SEMANTIC</span></li></a>
    <a class="topics-link" href="#"><li class="tooltip-element-hover">קאנווס/בד<span class="tooltip-info">CANVAS</span></li></a>
        </ul>
        </div>	
	</nav>
	
<script>
    var topics_link = document.getElementsByClassName('topics-link');
    var host_url = window.location.href;
    
    for (var check=0; check<topics_link.length;check++){
        topics_link[check].addEventListener('click', function (ev) {
        if (ev.target.classList.contains('whatever')) {
            ev.preventDefault();
        loadWithAjax(ev.target.href);
        }   
    });
    }
    for (var check=0; check<topics_link.length;check++){
        var pattern = new RegExp(topics_link[check].href);
        topics_link[check].firstChild.classList.remove("active");
    if ( pattern.test(host_url)) {
        topics_link[check].firstChild.className += " active";
        break;
        }
    }
        
    
</script>