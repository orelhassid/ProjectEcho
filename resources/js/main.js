var tabs = document.getElementsByClassName("tab");
var content = document.getElementsByClassName("flex-courses");
var index = 0;

function slideShow(x){
    for(var i=0;i<content.length;i++){
        tabs[i].className = "tab";
        content[x].style.opacity = 0;
        content[i].style.display = "none";
    }
    content[x].style.display = "flex";
    tabs[x].className += " active";
    content[x].style.opacity = 0;
    setTimeout(function(){
      content[x].style.opacity = 1;

    }, 10);
}
function slideShowArrows(z){
    index = index + z;
    if(index<content.length && index>=0){
        for(var i=0;i<content.length;i++){
        content[i].style.display = "none";
    }
        content[index].style.display = "flex";
    }

}
/*$$$$$$$$$$$$4
    Making Active Tabs In html, css, javascript, php - courses
$$$$$$$$$$$$$*/
$(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip({
                    animation:true,
                    placement:"top"
                });
            });
        var mainModal = document.getElementById('modal');
        var widget_image = document.getElementsByClassName('aside-widget-image');
        var modalImg = document.getElementById('modalimgID');
        var closeBtn = document.getElementById('closeModalID')
        for (var i=0;i<widget_image.length;i++) {
        widget_image[i].addEventListener('click', modalFunction);
      }
      if (closeBtn !== null) {
        closeBtn.addEventListener('click', closeModal, false);
      }
        function modalFunction() {
            mainModal.style.display = "block";
            modalImg.src = widget_image[1].src;
        }
        function closeModal() {
            mainModal.style.display = "none";
        }
