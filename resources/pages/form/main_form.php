<?php include '../../includes/overall/header.php'; ?>
<!--<div class="MainFlexBox"> ##The Main FlexBox in the header include file.-->
	<!--<main class="mainContainer"> ##The Main Container in the header include file.-->
  <link rel="stylesheet" href="http://localhost:8080/PROJECT-ECHO/resources/css/theme_bright/more/main_form.css">
  <style>
.background-mainContainer {
  position: absolute;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  background: url('../../sourceimages/wallpapers/main_form_wall.png');
  background-size: cover;
  background-position: center;
}
  </style>
<div class="main-form-container">


   <div class="box">
      <!-- <form class="" action="index.html" method="post"> -->

      <div class="title">התחברות</div>

      <div class="input">
         <label for="name">שם משתמש</label>
         <input type="text" name="name" id="name">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="pass">סיסמא</label>
         <input type="password" name="pass" id="pass">
         <span class="spin"></span>
      </div>

      <div class="button login">
         <button><span>שגר</span> <i class="fa fa-check"></i></button>
      </div>

      <a href="" class="pass-forgot">שכחת סיסמא?</a>
<!-- </form> -->
   </div>

   <div class="overbox">
      <div class="material-button alt-2"><span class="shape"></span></div>

      <div class="title">התחבר</div>

      <div class="input">
         <label for="regname">שם משתמש</label>
         <input type="text" name="regname" id="regname">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="regpass">סיסמא</label>
         <input type="password" name="regpass" id="regpass">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="reregpass">חזור על הסיסמא</label>
         <input type="password" name="reregpass" id="reregpass">
         <span class="spin"></span>
      </div>

      <div class="button">
         <button><span>הבא</span></button>
      </div>


   </div>

</div>
<?php include '../../includes/overall/aside.php'; ?>
<?php include '../../includes/overall/aside2.php'; ?>
<script src="http://localhost:8080/PROJECT-ECHO/resources/js/pages/main_form.js"></script>
<?php include '../../includes/overall/footer.php'; ?>
