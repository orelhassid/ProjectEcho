var form_signup = document.getElementById('form-registered-container');
var form_login = document.getElementById('form-login-container');

function switchForm (x) {
  if (x == 0) {
    form_signup.style.transform = 'scale(0)';
    form_signup.style.opacity = 0;
    setTimeout(function(){
    form_login.style.transform = 'scale(1)';
    form_signup.style.opacity = 1;
    form_login.style.display = 'flex';
    form_signup.style.display = 'none';
    }, 500);
  }
  if (x == 1) {
    form_login.style.transform = 'scale(0)';
    form_login.style.opacity = 0;
    setTimeout(function(){
    form_signup.style.transform = 'scale(1)';
    form_login.style.opacity = 1;
    form_signup.style.display = 'flex';
    form_login.style.display = 'none';
    }, 500);
  }
}
