
<?php
session_start();
/*$_SESSION['meesage'] = "";*/
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Demo upload_file</title>
    <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="test.css" type="text/css">
  </head>
  <body>

    <div class="body-content">
      <div class="module">
        <h1>Create an account</h1>
        <form class="form" action="upload.php" method="post" enctype="multipart/form-data" autocomplete="off">
          <div class="alert alert-error"><?= $_SESSION['message'];?></div>
          <!-- <input type="text" placeholder="User Name" name="username" required />
          <input type="email" placeholder="Email" name="email" required />
          <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
          <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required /> -->
          <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>
          <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
        </form>
      </div>
    </div>

  </body>
</html>
