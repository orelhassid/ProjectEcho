<?php include '../includes/overall/header.php'; ?>
<link rel="stylesheet" href="<?=$path?>/css/theme_bright/scss/blog.css">
<link rel="stylesheet" href="<?=$path?>/css/theme_bright/more/buttons.css">

<!--<div class="MainFlexBox"> ##The Main FlexBox in the header include file.-->
	<!--<main class="mainContainer"> ##The Main Container in the header include file.-->
<?php include '../php/blog/functions_blog.set.php'; ?>

  <article class="post-new-wrapper">

  <header>
    <span>שאלה / דיון חדש</span>
</header>
<div class="form-wrapper">

<form action="<?setPost($conn);?>" method="post" enctype="multipart/form-data">

    <textarea class="form-post-title" type="text" name="title" placeholder="תן כותרת לפוסט"></textarea>
    <textarea class="form-post-content" name="content" placeholder="כתוב שאלה / מדריך" id='note'
 rows='1'></textarea>
 <div class="form-upload-wrapper">
      <textarea class="form-upload-title" type="text" name="post_image_text" placeholder="Say Something" maxlength="110"></textarea>

      <div class="form-upload-container">

         <label for="upload-image-post">
     <img class="img-resize" id="upload-image" src="../sourceimages/icons/upload-icon.png" alt="Image Could not uploading">
    <img class="check-sign" src="../sourceimages/icons/check-icon.png" alt="">
   </label>
   <input id="upload-image-post" type="file" name="post_image">
    </div>

  </div>

  <div class="form-post-submit">
  <button class="post-button" type="submit" name="postSubmit">שלח</button>
</div>

<span class="upload-image-plus" onclick="addUploader()">
  <i class="fa fa-plus-circle"></i></span>

<break></break>
<div class="upload-image-container display-none">
     <textarea class="img-post-text" type="text" name="" placeholder="Say Something" maxlength="110"></textarea>

     <div class="img-container">
        <label for="upload-image-post">
    <img class="img-resize" id="upload-image" src="../sourceimages/icons/upload-icon.png" alt="Image Could not uploading">
   <img class="check-sign" src="../sourceimages/icons/check-icon.png" alt="">
  </label>
  <input id="upload-image-post" type="file" name="">
   </div>

   </div>

  </form>
 </div><!--CLOS FORM WRAPPER-->
</article>


  <script>
var file_path = document.getElementById("upload-image-post");
var upload_image= document.getElementById("upload-image");
var check_sign = document.getElementsByClassName('check-sign')[0];
var upload_image_container = document.getElementsByClassName('upload-image-container');

if (file_path.value != ""){
  check_sign.style.display = "block";
}
function addUploader() {
  var plus = document.getElementsByClassName('upload-image-plus')[0];
  plus.style.display = "none";
  upload_image_container[1].style.opacity = 1;
  upload_image_container[1].classList.remove('display-none');
}

/*function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#upload_image').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#file_path").change(function(){
    readURL(this);
});*/
  </script>
  <script src="<?$path?>/js/pages/forum.js"></script>
  <?php include '../includes/overall/footer.php'; ?>
