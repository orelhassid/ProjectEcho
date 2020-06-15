<?php include '../../includes/overall/header.php'; ?>
<!--<div class='MainFlexBox'> ##The Main FlexBox in the header include file.-->
	<!--<main class='mainContainer'> ##The Main Container in the header include file.-->
  <link rel='stylesheet' href='<?=$path?>/css/theme_bright/more/form.css'>
  <link rel='stylesheet' href='<?=$path?>/css/theme_bright/more/button3D.compact.css'>
  <style>
.background-mainContainer {
  position: absolute;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  background: url('../../sourceimages/wallpapers/main_form_wall.png');
  background-size: cover;
  background-position: top center;
  z-index: -1;
}
  </style>
<?php #require_once '../../php/database/connection.php'; ?>
<?php #include '../../php/system/functions_system.set.php'; ?>
      <?php

      if (!isset($_SESSION['uid'])) {
    echo "<div class='wrapper-form'>
        <div class='alert-box'>";
        if (isset($_SESSION['alert'])) {
          echo $_SESSION['alert'];
        }else $_SESSION['alert'] = '';

        echo "</div>
    <div class='form-registered-container' id='form-registered-container'>
         <form name='form_signup' method='post' action='../../php/system/signup.php' enctype='multipart/form-data'>
               <span class='form-title'>הרשמה</span>
            <input type='hidden' name='nickname' value='echo master'>
            <input type='text' name='username' placeholder='בחר שם משתמש...' required>
            <input type='email' name='email' placeholder='הכנס כתובת מייל...' required>
            <input type='password' name='password' placeholder='בחר סיסמה...' required>
            <input type='password' name='passwordConfirm' placeholder='אמת סיסמה...' required>
            <div class='gender-container'>
            <div class='radio-male'><label for='gender-male'><span>זכר</span></label>
            <input id='gender-male' type='radio' name='gender' value='זכר' /></div>

            <div class='radio-female'><label for='gender-female'><span>נקבה</span></label>
            <input id='gender-female' type='radio' name='gender' value='נקבה' /></div>

            <div class='radio-other'><label for='gender-other'><span>אחר</span></label>
            <input id='gender-other' type='radio' name='gender' value='אחר' checked/></div>

            </div>
            <div class='button-container'>
            <button name='submitSignup' type='submit' class='button3D' data-title='הירשם'></button>
            </div>
            </form>
    <footer>
      <span>יש לך כבר חשבון?<i class='fa fa-hand-o-left'></i></span>
            <span class='button1 blue' onclick='switchForm(0)'>התחבר</span>
    </footer>
    </div>";

    echo "<div class='form-login-container' id='form-login-container'>
         <form name='form_login' method='post' action='../../php/system/login.php' enctype='multipart/form-data'>
               <span class='form-title'>התחברות</span>
            <input type='text' name='username_login' placeholder='הכנס/י שם משתמש...'>
            <input type='password' name='password_login' placeholder='הכנס/י סיסמא...'>
            <div class='button-container'>
            <button name='submitLogin' type='submit' class='button3D' data-title='התחבר'></button>
            </div>
            </form>
    <footer>
      <span>יש לך כבר חשבון?<i class='fa fa-hand-o-left'></i></span>
            <span class='button1 blue' onclick='switchForm(1)'>התחבר</span>
    </footer>
    </div>
    </div>";
}
      if (false){
    echo "<form method='post' action='../../dynamic_contents/login.php'>
        <span class='form-title'>אמת את חשבונך</span>
        <input type='text' name='email_code' placeholder='הכנס קוד סודי...'>
        <span>קוד סודי נשלח לכתובת דוא\'ל שלך לצורך אימות</span>
        </form>
        ";
      }
        ?>
<?php #include '../../includes/overall/aside.php'; ?>

<div class="background-mainContainer"></div>
</main><!--Close Main Container-->
</div><!--Big wrapper-->
<div class='background'></div>
<script src='<?=$path?>/js/effects/button3D.js'></script>
   <script src='<?=$path?>/js/form.js'></script>

 </body>
 </html>
