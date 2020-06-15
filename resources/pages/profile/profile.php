<?php include '../../includes/overall/header.php'; ?>
<!--<div class='MainFlexBox'> ##The Main FlexBox in the header include file.-->
	<!--<main class='mainContainer'> ##The Main Container in the header include file.-->
<style type='text/css'>
div.MainFlexBox {

}
div.MainFlexBox main.mainContainer {
  width:100%;
  order:1;
}
</style>

<link rel='stylesheet' href='<?=$path?>/css/theme_bright/scss/profile.css'>
<link rel='stylesheet' href='<?=$path?>/css/theme_bright/more/button_confirm.css'>
<link rel='stylesheet' href='<?=$path?>/css/theme_bright/more/button_cool.css'>

<?php require_once '../../php/database/connection.php'; ?>
<?php include '../../php/system/functions_system.set.php'; ?>
<?php include '../../php/system/functions_system.get.php'; ?>

<?php getPeople($conn, $path);?>

<article class='profile-editor-container' id='editor-container'>
         <header>
           <i class='fa fa-close' onclick='popEditor()'></i> הפרטים שלך</header>

<form name='formProfile' id='myform' class='form-profile-editor' action='<?php setProfile($conn);?>' method='post' enctype="multipart/form-data">
 <div class='alert-box'><i class='fa fa-exclamation-circle'></i></div>
  <div class='profile-input-wrapper'>
    <span style='text-align:center;font-size:22px;'>כינוי</span>
    <div class='profile-editor-input'>
    <input style='text-align:center;' type='text' name='nickname' value='<?=$nickname?>'><br><span class='underline center'></span>
    </div>
  <span>שם פרטי</span>
  <div class='profile-editor-input'>
  <input type='checkbox' name='private1'>
  <label for='private1'><i id='test1' class='fa fa-check-square-o' onclick='checkBox(1)'></i></label>
  <input type='text' name='firstname' value='<?=$firstname?>'><br><span class='underline right'></span>
</div>
  <span>שם משפחה</span>
  <div class='profile-editor-input'>
  <input type='checkbox' name='private2' checked>
  <label for='private2'><i id='test2' class='fa fa-check-square-o' onclick='checkBox(2)'></i></label>
  <input type='text' name='lastname' value='<?=$lastname?>'><br><span class='underline right'></span>
</div>
  <span>גיל</span>
  <div class='profile-editor-input'>
  <input type='checkbox' name='private3'>
  <label for='private3'><i id='test3' class='fa fa-check-square-o' onclick='checkBox(3)'></i></label>
  <input type='text' name='age' value='<?=$age?>'><br><span class='underline right'></span>
</div>
  <span>כתובת</span>
  <div class='profile-editor-input'>
  <input type='checkbox' name='private4'>
  <label for='private4'><i id='test4' class='fa fa-check-square-o' onclick='checkBox(4)'></i></label>
  <input type='text' name='address' value='<?=$address?>'><br><span class='underline right'></span>
  </div>
  <span>פלאפון</span>
  <div class='profile-editor-input'>
  <input type='checkbox' name='private1'>
  <label for='private1'><i id='test1' class='fa fa-check-square-o' onclick='checkBox(1)'></i></label>
  <input type='text' name='phonenumber' value='<?=$phonenumber?>'><br><span class='underline right'></span>
</div>
</div><!--Close input wrapper-->

<div class='profile-editor-photo'>
  <div class='photo1'>
    <span>תמונה ראשית</span>
 <label for='avatar1'>
   <img class='round' src='../../sourceimages/icons/photography-logo.png' alt='Profile Upload'>
   <div id='checkSign1'></div>
 </label>
 <input id='avatar1' type='file' name='avatar' value='העלה/י תמונה פרופיל'>
</div>
<div class='photo2'>
<span>תמונת נושא</span>
<label for='avatar2'>
<img class='square' src='../../sourceimages/icons/photography-logo1.png' alt='Profile Upload'>
<div id='checkSign2'></div>
</label>
<input id='avatar2' type='file' name='background' value='העלה/י תמונת נושא'>
</div>
<div class='coolBtnWrap'>
<button name='submitProfile' type='submit' class='coolBtn coolBtn5'>עדכן</button>
<div>
</div>
</form>
</article>


<section class='profile-page-container'>

   <header>
    <div class='profile-photo'>
      <img src='<?=$path?>/sourceimages/profile/avatars/naruto01.png' alt=''>
        <div class='profile-edit-info' onclick='popEditor()'>
            <i class='fa fa-edit'></i>
        </div>
    </div>
  </header>

  <article class='profile-details'>
    <ul>
      <li>מגדר: <?=$gender?></li>
      <li>גיל: <?=$age?></li>
      <li>שם :  <?= $firstname.' '.$lastname ?></li>
      <li>כתובת :  <?= $address ?></li>
      <li>טלפון :  <?= $phonenumber ?></li>
      <li>קצת עליי:
      <div class='aboutme'>
        <div class='aboutme-text'>
          <?php
          if (true) {
          echo "<form name='form-aboutme' method='post'>
         <textarea name='aboutme' placeholder='$aboutme'></textarea>
         <button type='submit'>Edit</button>
          </form>";
        }else {
          echo "<p>$aboutme</p>";
        }
           ?>

     </div>
     <div class='aboutme-mood'>
       <i class='fa fa-smile-o'></i>
     </div>
    </div>
    <div class='btn'>
    			<div class='btn-back'>
    				<p>בטוח שאתה רוצה לצאת?</p>
    				<button class='yes' onclick="location.href='../../php/system/logout.php';">כן</button>
    				<button class='no'>לא</button>
    			</div>
    			<div class='btn-front'>התנתקות</div>
    		</div>
      </li>
    </ul>
    <div class='profile-details-title'>
       <span><?= $nickname?></span>
    </div>
<!-- ##################################################33 -->

<!-- #################################################### -->
  </article>

  <article class='profile-statistic'>
    <div class='profile-statistic-flexbox'>
      <div><span class='statistic-icon'><i class='fa fa-eye' style='color:#A9CCE3;'></i></span></div>
      <div><span class='statistic-icon'><i class='fa fa-paint-brush' style='color:#81C784;'></i></div>
      <div><span class='statistic-icon'><i class='fa fa-flag' style='color:#EC7063;'></i></div>
    </div>
  </article>

</section>


<section class='post-list-container'>
  <header class='post-container-header'>
    <span>פוסטים מעניינים</span>
  </header>
    <article class='post-list-flexbox'>
      <?php
      $x = 0;
      while ($x <= 10) {
      echo "
      <div class='post-box'>
      <div class='post-photo'><img src='$path/sourceimages/profile/avatars/avatar-male.png' /></div>
        <header>
        <span>Header</span>
        </header>
        <div class='post-box-content'>
         <span>
         Some Text Bla Blhsad sad asld sahSome Text Bla Blhsad sad asld sahSome Text Bla Blhsad sad asld sah
         Some Text Bla Blhsad sad asld sahSome Text Bla Blhsad sad asld sahSome Text Bla Blhsad sad asld sah
         Some Text Bla Blhsad sad asld sahSome Text Bla Blhsad sad asld sahSome Text Bla Blhsad sad asld sah
         </span>
        </div>
        <footer>
         <span>Date:hour ago | watching:X | answers: Y </span>
        </footer>
      </div>";
    $x++;
    }
      ?>
    </article>
</section>
<script type='text/javascript'>
  function checkBox(x) {
    $('#test'+x).toggleClass('fa fa-check-square-o fa fa-eye-slash');
  }
  $('form').submit( function(event) {
    var formId = this.id,
        form = this;
    mySpecialFunction(formId);

    event.preventDefault();

    setTimeout( function () {
        form.submit();
    }, 8000);
});

function popEditor() {
  if (editor.style.display === 'none') {
    editor.style.display = 'block';
    setTimeout(function() {
      editor.style.opacity = 1;
      editor.style.height = '80%';
    }, 10);
  }else {
    editor.style.height = '0%';
    editor.style.opacity = 0;
    document.getElementById('myform').reset();
    setTimeout(function() {
      editor.style.display = 'none';
    }, 400);
  }
}
var editor = document.getElementById('editor-container');
var file1 = document.getElementById('profile_avatar');
var file2= document.getElementById('profile_avatar2');
var checkSign1 = document.getElementById('checkSign1');
var checkSign2 = document.getElementById('checkSign2');

if (file1.value === '') {
   checkSign1.style.display = 'none';
}else {
   checkSign1.style.display = 'block';
}
if (file2.value === '') {
   checkSign2.style.display = 'none';
}else {
   checkSign2.style.display = 'block';
}

</script>
<script src='<?=$path?>/js/more/button_confirm.js'></script>
<script src='<?=$path?>/js/more/button_submit.js'></script>
  <?php include '../../includes/overall/footer.php'; ?>
