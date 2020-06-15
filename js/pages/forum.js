var lastAnswer = document.querySelectorAll('.comments-users-profile');
var lastAnswerIndex = lastAnswer.length;

if (false) {
  lastAnswer[lastAnswerIndex-1].id = "lastAnswer";
}else {

}

var post_btn1 = document.getElementById("post-button1");
var post_btn2 = document.getElementById("post-button2");
var answerForm = document.getElementById("answerContainerID");
var closeAnswer = document.getElementById("closeAnswer");
post_btn1.addEventListener("click", trigerAnswerForm);
post_btn2.addEventListener("click", trigerAnswerForm);
closeAnswer.addEventListener("click", closeForm);
function trigerAnswerForm() {
    answerForm.style.display = "flex";
    setTimeout(function() {
      answerForm.style.opacity = 1;
      answerForm.style.transform = "translate(-50%, -50%) rotateX(20deg)";

    }, 100);

}
function closeForm() {
  answerForm.style.opacity = 0;
  answerForm.style.transform = "translate(-50%, -50%) rotateX(90deg) skewX(15deg) scaleX(0.1)";
    setTimeout(function() {
      answerForm.style.display = "none";

  }, 1000);
}

/*$(function() {
    $('#form_comment_answer').delay(1000).submit();
});*/

var note = document.getElementById("note");
$("#note").keyup(function() {
    $('#check-words').html($(this).val().replace(/(www[^ ]+)/g, '<span>$1</span>'));
});

$('#note').keydown(function(e) {
  var $this = $(this),
      rows = parseInt($this.attr('rows'));

  // on enter, add a row
  if (e.which === 13)
    $this.attr('rows', rows + 1);

  // on backspace, remove a row -- THIS IS THE PROBLEM
  if (e.which === 8 && rows !== 2)
    $this.attr('rows', rows - 1);

});

/*
Form Comments Editor
*/
var comment_box = document.getElementById('comment-text');
var edit_form = document.getElementById('comment-form-edit');

function openCommentEditor(x) {
  if (x==1) {
     edit_form.style.display = 'block';
     comment_box.style.display = 'none';
   }else if(x==2) {
     edit_form.style.display = 'none';
     comment_box.style.display = 'block';
   }
}
