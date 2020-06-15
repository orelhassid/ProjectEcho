
<!DOCTYPE html>
<html>
    <head>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://www.w3schools.com/lib/w3.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../../css/theme_bright/form.css">
</head>
    <body>
    <div class="container signup" id="cont-form-1">
       <h1>Please registered</h1>
        <form method="post" action="../../../dynamic_contents/register.php">
            <input type="text" name="nickname" placeholder="nickname...">
            <input type="text" name="username" placeholder="username..." required>
            <input type="email" name="email" placeholder="email..." required>
            <input type="password" name="password" placeholder="password..." required>
            <input type="password" name="password2" placeholder="confirm password...">
            <div>
            <button type="submit">Sign up</button>
            <p>Already have an account?</p>
            <a href="#"><button id="login-btn" type="button">Log in</button></a>
            </div>
        </form>
        
    </div>
    
    <div class="container login" id="cont-form-2">
       <h1>Please Log in</h1>
        <form method="post" action="../../../dynamic_contents/login.php">
            <input type="text" name="username" placeholder="username..." required>
            <input type="password" name="password" placeholder="password..." required>
            <div>
            <button type="submit">Log in</button>
            <p>Dont have an account yet?</p>
            <a href="#"><button id="signup-btn" type="button">Sign up</button></a>
            </div>
        </form>
    </div>

    <div id="alert-box">
      
        <?= $_SESSION['message']; ?>
    </div>
        
   
  
  
  
  
  
  
  
  
  
	<div id="background"></div>
	<script src="../../../scripts/home.js"></script>
	</body>
</html>