<!-- <div class="background-mainContainer"></div>
</main> Close Main Container--> -->

    <aside class="asideContainer">
		<span class="aside-title">חדשות ועדכונים</span>

    <div class="aside-flexBox">
    <?php
    $x=0;
    while ($x<5) {
    echo "<div class='aside-widget'>
		<span class='aside-title'>הקוד ששינה לי את החיים</span>
		    <a class='aside-widget-link' href='#'> כנס לכתבה <i class='fa fa-hand-o-down'></i></a>
		<img class='aside-widget-image' src='$path/sourceimages/news/code.png' alt='תמונה של כתבה'>
  </div>";
$x++;
}
?>
</div><!--Close Aside FlexBox-->
  </aside>
           <article id="modal" class="mainModal">
            <span class="closeModal" id="closeModalID"><i class="fa fa-window-close"></i></span>
            <img class="modalimg" id="modalimgID">
            <div class="modalcontent">
                <p>
                    This is coding
                </p>
            </div>
        </article>

           <article id="modal" class="mainModal">
            <span class="closeModal" id="closeModalID"><i class="fa fa-window-close"></i></span>
            <img class="modalimg" id="modalimgID">
            <div class="modalcontent">
                <p>
                    This is coding
                </p>
            </div>
        </article>
