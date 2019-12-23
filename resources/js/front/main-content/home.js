// login & Registration
let $registerButton = $("#register-user"),
  $loginButton = $("#login-user"),
  $registerForm = $(".register-form"),
  $loginForm = $(".login-form");

$registerButton.click(() => {
  $registerForm.removeClass('hide-form');
  $loginForm.addClass('hide-form');
  $loginButton.removeClass("active");
  $registerButton.addClass("active");
});
$loginButton.click(() => {
  $loginForm.removeClass('hide-form');
  $registerForm.addClass('hide-form');
  $registerButton.removeClass("active");
  $loginButton.addClass("active");
});

if($('body').hasClass('rtl')) {
  $('.goals')
}
